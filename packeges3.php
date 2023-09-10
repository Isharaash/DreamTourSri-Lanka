<?php
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
</head>

<body>
	<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="">
  <table width="367" border="0"cellspacing="3"cellpadding="2">
	  <tr>
    <th width="174" scope="row"><label for="place">Place:</label></th>
    <td width="168"><input type="text" name="place" id="place"></td>
  </tr>
	  
	  <tr>
    <th width="174" scope="row"><label for="price">(For one day)Price(Rs.):</label></th>
    <td width="168"><input type="text" name="price" id="place"></td>
  </tr>
  <tr>  <tr>
    <th width="174" scope="row"><label for="loc">Locations:</label></th>
    <td width="168"><input type="text" name="pvisit" id="place"></td>
  </tr>
  <tr>
      <tr>
    <th width="174" scope="row"><label for="hotel">Hotel Details:</label></th>
    <td width="168"><input type="text" name="hotel" id="place"></td>
  </tr>
  <tr>
	  <tr>
    <th scope="row"> <label for="description">Description:</label></th>
	  <td><textarea name="msg" id="description" rows="5" cols="45"></textarea>
		  </td>
	</tr>
	 
		  <td>
			  <input type="submit" name="submit" id="button" value="submit">
         </td>
		  <td>
			  <input type="reset" name="reset" id="button" value="reset">
         </td>
    </tr>
	</table>
	
</body>
</html>