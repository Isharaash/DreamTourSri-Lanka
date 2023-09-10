<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php



	
		
		
	
if(count($_POST)>0){
	print_r($_POST);
session_start();
	include 'connection.php';
	
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	echo $password;
	$sql="SELECT * FROM login WHERE username='$username' and password='$password'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) == 1){
		$_SESSION['username']=$_POST["username"];
		
		header("location: sidebar.php");
	}else {
		$msg="your Login Name or Passowrd is invalid";
	}
	echo"<script type='text/javascript'>alert('$msg');
	</script>";	
}
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
	
	<style type="text/css">
		*{
			padding: 0px;
			margin:0px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
		body{
			background: #3399ff;
			background-size: cover;
		}
		
		.login{
		
			top:20%;
			left: 50%;
			transform: translate(-50%,-50%);
			position: absolute;
			color: #fff;
			
		}
		.login h1{
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			
		}
		.login-form{
			width:350px;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
			position: absolute;
			color: #fff;
			
			
		}
		.login-form p{
			
			font-size: 20px;
			margin: 15px;
			font-weight: bold;
			
			
		}
		.login-form input{
		    font-size: 16px;
			width: 100%;
			padding: 15px 10px;
			border: none;
			border-radius: 5px;
			
		}
	
		.button{
			font-size: 18px;
			font-weight: bold;
			margin:25px 2px;
			width:50%;
			border-radius: 5px;
			border: 0px;
		}
		.button:hover input{
		background: #030303;
	}
		.signup{
			margin: 30px 0;
			text-align: center;
			font-size: 20px;
			color: aliceblue;
		}
		.signup a{
			color: #003CFF;
			text-decoration: none;
			font-weight: bold;
			
		}
		.signup a:hover{
			text-decoration: underline;
		}
	
	
	
	</style>
	<script type="text/javascript">
function formValidation()
{

var username = document.registration.username;
var password = document.registration.password;




function Emptyfield(username,password)
{ 

var username_len = username.value.length;
var password_len = password.value.length;

if ( password_len == 0 ||username_len==0 ||)
{
alert("Fields should not be empty ");
   
return false;
}
else
{
return true;
}
}// end of Emptyfield

</script>
	
	
</head>
	

<body>
	

<div class="login">
<h1> Login Form </h1>
	</div>
	<div class="login-form">
	<form id="login" method="post" action="" align="center" onSubmit="return formValidation();"/>

  
   <p> User Name:</p>
      <input type="text" name="username" placeholder="Username"/>
    
 
  
    <p>Password:</p>
      <input type="password" name="password" placeholder="Password"/>
		

   <div class="button">
    <input type="Submit" name="Login" value="Login" />
	</div>
		<div class="signup">
		Register.  <a href="signup.html">Signup</a><br />
			Go to Home page.  <a href="home.php">Home</a>
			</div>
</form>
	</div>
	
</body>
</html>