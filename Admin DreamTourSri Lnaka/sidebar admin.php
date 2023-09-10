<?php
session_start();
if(!isset($_SESSION['adminname']))
{
	header("location: loging.php");
}
	$adminname=$_SESSION['adminname'];
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
	<h1>Welcome (Admin), <?php echo $adminname;?></h1>
	 <div class="sidenav">
         
            
            <a href="packeges3.php">Add Packeges</a>
            <a href="packeges list.php">Packeges</a>
			 <a href="update2.php">Updte Packeges</a>
			 <a href="delete2.php">Delete Packeges</a>
		 <a href="logout.php">Logout</a>
		 
		 
        </div>
</body>
</html>