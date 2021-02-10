
<!DOCTYPE html>
<html>
<head>
  <title>Full Screen Search Bar</title>
<style>

.search-icon{
	position: absolute;
	right: 5px;
	top:25px;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}
.search-icon .fa{
	height: 40px;
	width: 40px;
	background-color: #d42626;
	color:#ffffff;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	cursor: pointer;
}

.search-overlay{
 position: fixed;
 left:0;
 top:0;
 right:0;
 bottom:0;
 background-color: #000000;
 opacity: 0;
 visibility: hidden;
 transition: all .3s ease-in;
 cursor:url('close.png'),auto;
}
.search-overlay.active{
	visibility: visible;
	opacity: 0.8;
	z-index: 10;
}

.search-popup{
	position: absolute;
	left:50%;
	top:50%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 600px;
	z-index: 11;
	opacity: 0;
    visibility: hidden;
    transition: all .3s ease-in;
}
.search-popup.active{
	visibility: visible;
	opacity: 1;
	z-index: 11;
}
.search-popup .form-group{
	position: relative;
}
.search-popup .form-control{
	width: 100%;
	height: 60px;
	border:none;
	padding:0 100px 0 30px;
	font-size:18px;
	border-radius: 30px;
	color:#555555;
}
.search-popup .submit-btn{
	background-color: #d42626;
	font-size:18px;
	width: 70px;
	height: 60px;
	color:#ffffff;
	cursor: pointer;
	border:none;
	position: absolute;
	right:0;
	top:0;
	border-radius: 0 30px 30px 0;
}
.search-popup .submit-btn:focus{
	outline: none;
}
.search-popup .form-control:focus{
	outline: none;
}


/*responsive*/
@media(max-width:650px){
	.search-popup{
		width: 100%;
	}
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <div class="search-icon">
    <i class="fa fa-search search-btn"></i>
  </div>

  <div class="search-overlay">
  </div>
  <div class="search-popup">
     <form class="search-form">
        <div class="form-group">
           <input type="text" class="form-control" placeholder="Search....">
           <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </div>
     </form>
  </div>

<script>
     const searchBtn=document.querySelector(".search-btn");
 const searchOverlay=document.querySelector(".search-overlay");
 const searchPopup=document.querySelector(".search-popup");

 searchBtn.addEventListener("click",()=>{
 	searchOverlay.classList.add("active");
 	searchPopup.classList.add("active");
 })


 searchOverlay.addEventListener("click",(event)=>{
 	if(event.target == searchOverlay){
 		searchOverlay.classList.remove("active");
 	    searchPopup.classList.remove("active");
 	}
 })
</script>
</body>
</html>