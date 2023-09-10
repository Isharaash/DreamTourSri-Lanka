<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
	<Style type="text/css">
		{
			padding: 0px;
			margin:0px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	
	box-sizing:border-box;
		}
		body{
		background:url(1.jpg);
			background-size: cover;
	
		}
		h1{
			text-align: center;
			font-size: 40px;
			font-weight: 600;
			text-decoration:underline;
			color: aliceblue;
			cursor: pointer;
			letter-spacing:2px;
			
		
		}
		h3{
			text-align: left;
			font-weight: 600;
			 font-size: 30px;
			text-transform: none;
		    margin-top: 40px;
			color: #FFFFFF;
		}
		
		.icon2{
	width:100%;
	height:auto;
	margin:auto;
		
		}
		.icon2 li{
			display: inline-block;
			margin:2px;
	        padding:10px;
			margin-top: 10px;
          	
			
		}
		.icon2 li a{
			font-size: 25px;
			color: #FFFFFF;
			
		}
	
	.cont{
			width:350px;
			top:100%;
			left: 80%;
			transform: translate(-50%,-60%);
			position: absolute;
		color: #FFFFFF;
			}
	
	.cont ul{
		font-size: 25px;
		margin: 18px;
		font-weight: bold;
		text-align: center;
			
	}
	.cont ul li{
	     display: inline-block;
	}
	
	.cont ul li input{
		font-size: 18px;
		width: 100%;
		height: auto;
		padding: 15px 15px;
		border: none;
		border-radius: 5px;
	}
	
		.cont ul li textarea{
		font-size: 18px;
		width: 100%;
		padding: 40px 21px;
		border: none;
		border-radius: 5px;
			
		}
	.butten{
		   
			margin:15px 2px;
			width:50%;
			border-radius: 5px;
			border: 0px;
	}
    
	.butten input{
		 font-size: 10px;
			font-weight: bold;
		}
	 .butten:hover input{
		background: #030303;
		}
		a{
	text-decoration:none;
	footer-bottom:none;
	}
.footer-main-div{
width:100%;
height:auto;
margin:auto;
background:#272727;
padding:20px 0px;
	margin-top: 50%;
}

.footer-menu-one{
width:100%;
height:auto;
margin:auto;
margin-top:20px;
	
}
.footer-menu-one ul{
	margin:0px;
	padding:0px;
	text-align:center;
}
.footer-menu-one ul li{
	display:inline-block;
	margin:0px 15px;
}
.footer-menu-one ul li a{
	font-family:Arial, Helvetica, sans-serif;
	font-size:20px;
	font-weight:600;
	color:#FFF;
	text-transform:uppercase;
	
}
.footer-menu-one ul li a:hover{
	color:#272727;
	}
.footer-menu-two{
width:100%;
height:auto;
margin:auto;
margin-top:20px;
	
}
.footer-menu-two ul{
	margin:0px;
	padding:0px;
	text-align:center;
}
.footer-menu-two ul li{
	display:inline-block;
	margin:0px 15px;
}
.footer-menu-two ul li a{
	font-family:Arial, Helvetica, sans-serif;
	font-size:20px;
	font-weight:600;
	color:#FFF;
	text-transform:uppercase;
	
}
.footer-menu-two ul li a:hover{
	color:#272727;
	}
.footer-bottom{
	width:100%;
	height:auto;
	margin:auto;
	background:#0a5071;
	padding:5px;
}
.footer-bottom{
	font-family:Arial, Helvetica, sans-serif;
	font-size:25px;
	text-align:center;
	color:#fff;
	font-weight:600;
	letter-spacing:2px;
	
}
	.footer-bottom p{
	cursor: pointer;

	}
		 
	</Style>
	<script type="text/javascript">
function formValidation()
{
var name = document.registration.name;

var email = document.registration.email;
var pnumber = document.registration.pnumber;
var massage = document.registration.massage;


if(Emptyfield(name,email,pnumber,massage)
{    
	var p1=password.value;
	var p2=conpassword.value;
	
	if(matchpass(p1,p2))
	{
	return true;
	}
}
return false;
} //end of formValidation

function Emptyfield(name,email,pnumber,massage)
{ 
var name_len = name.value.length;
var email_len = email.value.length;
var pnumber_len = pnumber.value.length;
var massage_len = massage.value.length;


if (name_len == 0 || pnumber_len==0 || massage_len == 0|| email_len == 0)
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
	<?php
include("menu.php")
?>
	
	<h1>Contact Us</h1>

<h3>Our packages will tempt you to take a vacation.</h3>
	</div>
		<div class="icon2">
			<li><a>034-224-6269(Toll Free)</a></li><br/>
            <li><a> info@dreamtoursrilanka.com</a></li><br/>
			
			</div>
	
	<div class="cont">
		
<form id="form1" name="registration" method="post" action="contact2.php" onSubmit="return formValidation();" >
 <ul>
<li><label for="name">Name:</label></li>
<li><input type="text" name="name"  /></li>
	   
<li><label for="email">Email:</label></li>
<li><input type="email" name="email" /></li>

 <li><label for="Pnumber">Phone Number:</label></li>
<li><input type="tel" name="pnumber" /></li>

<li><label for="massage">Massage:</label></li>
<li><textarea name="massage" id="textarea"></textarea></li>

<div class="butten">
<li><input type="submit" name="submit" value="Submit" /></li>
</div>

</ul>
	</div>

	
</form>
	
	<div class="footer-main-div">

<div class="footer-menu-one">
<ul>
<li><a href="home.php"  target="_blank">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="packeges list2.php">Packeges</a></li>
<li><a href="contact3.php">Contact Us</a></li>
</ul>

<div class="footer-menu-two">
<ul>
<li><a href="#">Gallery</a></li>

</ul>

</div>
</div>
</div>
<div class="footer-bottom">
<p>DreamTourSri Lanka</p>
</div>

</body>
</html>
