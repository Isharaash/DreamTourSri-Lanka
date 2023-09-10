<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<?php
	
		include 'sidebar admin.php'; 

if(isset($_POST['delete'])){ 
	    include('connection.php');
		
         $place=$_POST['place']; 
		echo   $place;     

$sql="delete from packages WHERE place ='$place'";
		
  	 $result=mysqli_query($conn,$sql);
   

	if($result){			     
    
         
	echo "Successfully deleted ";
	echo "<BR>";
	
	}
	 else {
          echo "ERROR";
      }
}
?>



<body>
</body>
</html>