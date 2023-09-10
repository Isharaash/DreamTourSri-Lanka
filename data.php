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
   $adults=$_POST['adults'];
	$childern=$_POST['childern'];
   $place=$_POST['place'];
   $new_sdate =date('Y-m-d', strtotime($_POST['sdate']));
   $new_edate =date('Y-m-d', strtotime($_POST['edate']));
	$email=$_POST['email'];
	$pnumber=$_POST['pnumber'];
	$massage=$_POST['massage'];
   $sql="INSERT INTO booking". "(name,adults,childern,place,sdate,edate,email,pnumber,massage)" . "VALUES('$name','$adults',$childern,'$place','$new_sdate', '$new_edate','$email','$pnumber','$massage')";
   $results= mysqli_query($conn, $sql);
   
   if(!$results){
	   die('Could not enter dara:'.mysql_error($conn));
	    header("location:data.php");
   
   }
   else
   {
	   echo "Entered data successfully\n";
	   header("location:data.php");
   }
   
}else{
	echo "Your form is not submitted yet please fill the form and visit again";
	   header("location:data.html");
}
 

?>



</body>
</html>