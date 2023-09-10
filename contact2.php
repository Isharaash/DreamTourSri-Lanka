<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php



if(isset($_POST['submit'])){
	include("connection.php");
	
   $name=$_POST['name'];
   $email=$_POST['email'];
	$pnumber=$_POST['pnumber'];
	$massage=$_POST['massage'];

   $sql="INSERT INTO contact". "(name,email,pnumber,massage)" . "VALUES('$name','$email','$pnumber','$massage')";
   $results= mysqli_query($conn, $sql);
   
   if(!$results){
	      ?>
   <script>
	   alert("data not inserted");
	   </script>
	<?php
	  
   }
   else
   {
	     
  echo'<script type="text/javascript">';
echo'alert("data  inserted properly")';
	
	  echo '</script>';
	header("location: contact3.php");
	
	  
	  
	
   }
   
}else{
	   ?>
   <script>
	   alert("data not inserted");
	   </script>
	<?php
	
	   
}
 

?>

</body>
</html>