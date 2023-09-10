<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image</title>
	<style type="text/css">
		.container{
			text-align: center;
			margin-top: 5%;
		}
		
		.container img{
			width:250px;
			height: 150px;
			object-fit: cover;
			object-position: bottom;
			padding: 5px;
		}
		img:hover{
			cursor: pointer;
			opacity: 0.5;
		 transition: 0.5s;
		}
		
	h1{
			
			font-weight: 600;
			text-decoration:underline;
			color: black;
			cursor: pointer;
			letter-spacing:2px;
		    position: absolute;
			top: 100px;
		    left:50%;
		    font-size: 40px;
	
		}
	</style>
	
	
</head>
	

<body>
	<?php
include("menu.php")
?>
	<h1>Gallery</h1>
	<div class="container">
	<img src="5.jpg" alt="" srcset="">
	<img src="7.jpg" alt="" srcset="">
	<img src="8.jpg" alt="" srcset="">
	<img src="11.jpg" alt="" srcset="">
	<img src="12.jpg" alt="" srcset="">
	<img src="13.jpg" alt="" srcset="">
	<img src="14.jpg" alt="" srcset="">
	<img src="15.png" alt="" srcset="">
	<img src="16.jpg" alt="" srcset="">
	<img src="17.jpg" alt="" srcset="">
		<img src="18.jpg" alt="" srcset="">
		<img src="19.jpg" alt="" srcset="">
	<img src="20.jpg" alt="" srcset="">
		<img src="21.jpg" alt="" srcset="">
	<img src="22.jpg" alt="" srcset="">
	<img src="23.jpg" alt="" srcset="">
		<img src="24.jpg" alt="" srcset="">
		<img src="25.jpg" alt="" srcset="">
		<img src="26.jpg" alt="" srcset="">
		<img src="27.jpg" alt="" srcset="">
		<img src="28.jpg" alt="" srcset="">
		<img src="29.jpg" alt="" srcset="">
		<img src="30.jpg" alt="" srcset="">
		<img src="31.jpg" alt="" srcset="">
		<img src="32.jpg" alt="" srcset="">
		
	</div>
	<?php
include("footer.php")
?>
</body>
</html>
