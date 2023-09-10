<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
if(isset($_POST['delete'])){ 
	    include('connection.php');
		
          $id = $_GET['Del'];
            $query = " delete from records where id= '".$id."'";
            $result = mysqli_query($con,$query);

	 	

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



</body>
</html>