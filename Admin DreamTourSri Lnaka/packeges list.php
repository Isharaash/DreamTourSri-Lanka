



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type="text/css">
	*{
	padding:0px;
	margin:0px;	
}
	body{
font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		background: #7046FF;
}
		h1{
			margin-top: 10px;
		}
	.cards{
	width:25%;
	display: inline-block;
	background-color: aliceblue;
	border-radius:5px;
	margin:40px;
	box-shadow: 2px 2px 10px black;
	
		
}
	.title h1{
	text-align:center;
	font-size: 40px;
		color: #0013EB;
		font-weight: 600;
}
.des{
	text-align:center;
	padding: 4px;
	font-weight: 600;
}
button{
	margin-top:30px;
	margin-bottom:30px;
	background-color:white;
	border:1px solid black;
	padding:5px;
	border-radius:5px;
	transition: pointer;
}
button:hover{
	background-color:black;
	color:white;
	transition:0.5s;
}
	
	
	</style>
</head>

<body>
<?php
	include 'sidebar admin.php';	
	include 'connection.php';	

	
	$result = mysqli_query($conn,"SELECT * FROM packages");
?>
<h1>Packeges</h1>
	<?php

while($row = mysqli_fetch_array($result))
  {
	  
	   $place=$row['place'];
	 $price= $row['price'];
	$pvisit=$row['pvisit'];
		$hotel=$row['hotel'];
		$msg=$row['msg'];
	?>
	
	
<div class="cards">

<div class="title">
  <h1 ><?php echo($row['place']);?></h1>
</div>
<div class="des">
<br/>	<p style="color: #FF1014">For one day and one person(Price)</p><br/>
<p style="font-size: 30px">Rs.<?php echo($row['price']);?></p><br/>
<p>Locations:<br/><?php echo($row['pvisit']);?></p><br/>
<p>Hotel Details:<br/><?php echo($row['hotel']);?></p><br/>
<p>Description:<br/><?php echo($row['msg']);?></p>


</div>
</div>
	
<?php
  }//end of while

	
mysqli_close($conn);	

?>	

	
</body>
</html>