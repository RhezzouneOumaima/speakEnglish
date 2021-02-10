
<?php
//var_dump($_FILES);
require 'connexion.php';

if(!empty($_FILES))
{
   
    $file_name=$_FILES['fichier']['name'];//smya dial file
    $file_extension=strrchr($file_name,".");//separateur pour trouver l'extension
    $file_tmp_name=$_FILES['fichier']['tmp_name'];//Le nom de fichier temporaire du fichier dans lequel le fichier téléchargé a été stocké sur le serveur
    $file_dest='files/'.$file_name;
    
    $extensions_autorisees = array('.pdf','.PDF');
    if(in_array($file_extension,$extensions_autorisees))
   {
          if(move_uploaded_file($file_tmp_name,$file_dest))
          {
              $req=$dbh->prepare('INSERT INTO files(name,file_url) values (?,?)');
              $req->execute(array($file_name,$file_dest));
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