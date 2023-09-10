<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location: loging.php");
}
	$username=$_SESSION['username'];
?>


.


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<title>Untitled Document</title>
	<style type="text/css">
		*{
			padding: 0px;
			margin:0px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
	body {
    font-family: "Lato", sans-serif;
    background-color: darkslategray;
}

h1 {
    text-align: center;
	color: #FFFFFF;
}


  
.sidenav {
    height: 50%;
    width: 200px;
    position: fixed;
    opacity: 0.8;
    background-color: #111;
    padding-top: 20px;
    font-size: 20px;
	top: 20%;
}
  
.sidenav a {
    padding: 25px 6px 6px 32px;
    text-decoration:dotted;
    font-size: 20px;
    color: #818181;
    display: block;
	text-align: justify;
	margin: 10px;
}
  
.sidenav a:hover {
    color: #f1f1f1;
}
		  </style>
<body>
	<h1>Welcome, User></h1>
	 <div class="sidenav">
         
            <a href="#"> profile</a>
            <a href="#">Packeges</a>
            <a href="#">Booking</a>
		 <a href="#">Logout</a>
		 
		 
        </div>
</body>
</html>