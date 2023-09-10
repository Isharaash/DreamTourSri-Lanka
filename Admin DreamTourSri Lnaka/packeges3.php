<?php
include('sidebar admin.php');
	if(isset($_POST['submit']))
	{include "connection.php";
	 
	 $place=$_POST['place'];
	 $price=$_POST['price'];
     $pvisit=$_POST['pvisit'];
	 $hotel=$_POST['hotel'];
	 $msg=$_POST['msg'];
	 	

	 $sql="INSERT INTO packages". "(place, price,pvisit,hotel,msg)". "VALUES('$place','$price','$pvisit','$hotel','$msg')";
	 $results= mysqli_query($conn,$sql);
	 
	 if(!$results){
		 die('Could not enter data:'. mysqli_error($conn));
		 
	 }
	 else{
		 echo"Entered data Successfully\n";
	 }
	
			
		
	}
	
	
	
	
	
	?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type="text/css">
	*{
			padding: 0px;
			margin:0px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
		
	

		
	.booking{
			width:350px;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
			position: absolute;
			color: #fff;
			}
	
	.booking ul{
		font-size: 25px;
			margin: 30px;
			font-weight: bold;
		text-align: center;
			
	}
	.booking ul li{
	     display:inline-block;
	}
	
	.booking ul li input{
		font-size: 16px;
		width: 100%;
		height: auto;
		padding: 15px 15px;
		border: none;
		border-radius: 5px;
	}
		.booking ul li	textarea{
			font-size: 16px;
		width: 100%;
		height: auto;
		padding: 15px 15px;
		border: none;
		border-radius: 5px;
			
		}
		.booking2{
		   
			margin:15px 2px;
			width:50%;
			border-radius: 5px;
			border: 0px;
	}
    
	.booking2 input{
		 font-size: 10px;
			font-weight: bold;
		}
	 .booking2:hover input{
		background: #030303;
	
	</style>
</head>

<body>
	<div class="booking">
	<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="">

	  <ul>
    <li ><label for="place">Place:</label></li>
    <li><input type="text" name="place" id="place"></li>
  
	  

    <li><label for="price">(For one day)Price(Rs.):</label></li>
    <li><input type="text" name="price" id="place"></li>


    <li ><label for="loc">Locations:</label></li>
    <li ><input type="text" name="pvisit" id="place"></li>

  
   
    <li><label for="hotel">Hotel Details:</label></li>
    <li><input type="text" name="hotel" id="place"></li>
 
    <li> <label for="description">Description:</label></li>
	  <li><textarea name="msg" id="description" rows="5" cols="45"></textarea></li>
		
	 <div class="booking2">
			 <li> <input type="submit" name="submit" id="button" value="submit"></li>
         
		  
			 
		  </div>
      </ul>
	</form>
	</div>
	
</body>
</html>