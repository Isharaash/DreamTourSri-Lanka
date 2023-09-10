<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<style type="text/css">
	h3{
			text-align: center;
			color: #FF0004;
			font-size: 25px;
		margin-top: 5%;
			
		}
		form{
		
			position: absolute;
			left: 45%;
			margin-top: 7%;
		}
		form input{
			height: 25px;
			opacity: 0.7;
			
			
		}
	
</style>
<body>
	<?php
		include 'sidebar admin.php'; 
?>
	
	 <h3>Delete packages  </h3> 
	   
    <form  method="post" action="packegesdelete.php"  id="delete"> 
	      <input  type="text" name="place"> 
	      <input  type="submit" name="delete" value="Search"> 
    </form> 
</body>
</html>