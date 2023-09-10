<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
</head>

<body>
	<?php
if(isset($_POST['update'])){ 
	    include('connection.php');
	$place=$_POST['place'];
	 $price=$_POST['price'];
     $pvisit=$_POST['pvisit'];
	 $hotel=$_POST['hotel'];
	 $msg=$_POST['msg'];
	 	

		$sql="UPDATE packages SET  price='$price',pvisit='$pvisit',hotel='$hotel',msg='$msg' WHERE place='$place'";
  	 $result=mysqli_query($conn,$sql);
   
// if successfully updated. 
	if($result){			     
    
         // echo $row['emp_address'];
	echo "Successfully updated";
	echo "<BR>";
		header("Location: sidebar admin.php");
	}
}
else {
echo "ERROR";
}
?>

</body>
</html>