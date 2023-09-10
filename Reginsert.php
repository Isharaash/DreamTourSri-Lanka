<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
   $username=$_POST['username'];
   $password=md5($_POST['password']);
   
   $sql="INSERT INTO login". "(fname,lname,country, email,username, password)" . "VALUES('$fname','$lname','$country', '$email', '$username','$password')";
	
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