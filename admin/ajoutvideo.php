
<?php

require 'connexion.php';

if(!empty($_FILES))
{
   
    $file_name=$_FILES['file']['name'];
    $file_extension=strrchr($file_name,".");
    $file_tmp_name=$_FILES['file']['tmp_name'];
    $file_dest='upload/'.$file_name;
    
    $extensions_autorisees = array('.mp4','.MP4');
    if(in_array($file_extension,$extensions_autorisees))
   {
          if(move_uploaded_file($file_tmp_name,$file_dest))
          {
              $req=$dbh->prepare('INSERT INTO videoup(name) values (?)');
              $req->execute(array($file_name));
             echo "<div style='color:green;' class='alert alert-danger'>
             fichier envoyé avec succés
           </div>";
          }else {
              echo "
              <div style='color:red;' class='alert alert-danger'>
  une erreur est survenue lors de l envois du fichiers
</div>";
          }
   }   else{
       echo "<div style='color:red;' class='alert alert-danger'>
  veuillez ajouter un fichier pdf
     </div>";
   } 
}

include "admin_lecon.php";


?>