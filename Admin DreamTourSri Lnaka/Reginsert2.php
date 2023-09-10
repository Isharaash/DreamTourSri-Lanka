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
	
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $country=$_POST['country'];
   $email=$_POST['email'];
   $adminname=$_POST['adminname'];
   $password=md5($_POST['password']);
   
   $sql="INSERT INTO admin". "(fname,lname,country, email,adminname, password)" . "VALUES('$fname','$lname','$country', '$email', '$adminname','$password')";
   $results= mysqli_query($conn, $sql);
	
 if(!$results){
	   die('Could not enter dara:'.mysql_error($conn));
	    header("location:signup.html");
   }
   else
   {
	   echo "Entered data successfully\n";
	    header("location:loging.php");
   }
   
} else{
	echo "Your form is not submitted yet please fill the form and visit again";
	
}


?>



</body>
</html>