<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
			margin-top: 8%;
		}
		form input{
			height: 25px;
			opacity: 0.7;
			
			
			
			
		}
		
	</style>
	
</head>

<body><?php
		include 'sidebar admin.php'; 
?>
	 <h3>Update  packages</h3> 
	   
    <form  method="post" action="packegesupdate.php"  id="Updateform"> 
	      <input  size="20"type="text" name="place"> 
	      <input  type="submit" name="submit" value="Search"> 
    </form> 
</body>
</html>
