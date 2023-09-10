<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type="text/css">
	form{
			width:350px;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
			position: absolute;
			color: #fff;
			
			
		}
		form p{
			
			font-size: 20px;
			margin: 15px;
			font-weight: bold;
			
			
		}
		form input{
		    font-size: 16px;
			width: 100%;
			padding: 15px 10px;
			border: none;
			border-radius: 5px;
			
		}
		.update{
			
			font-size: 18px;
			font-weight: bold;
			margin:25px 2px;
			width:50%;
			border-radius: 5px;
			border: 0px;
		
			
		}
	
	
	
	</style>
</head>

<body>
	<?php

		include 'sidebar admin.php'; 


      if(isset($_POST['submit'])){ 
	    include('connection.php');
				
		$search=$_POST['place'];
	
$sql = 'SELECT * FROM packages WHERE place = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
	      $row = mysqli_fetch_array($result);
		  ?>
		          
         <form name="form" method="POST" action="update.php">
		   
        <p>price:
  <input type="text" name="price" 
		value="<?php echo $row['price']?>"/></p>
        
         <p>Locations:
  <input type="text" name="pvisit" 
		value="<?php echo $row['pvisit']?>"/></p>
		            <p>Hotel Details:
  <input type="text" name="hotel" 
		value="<?php echo $row['hotel']?>"/></p>
		           <p>Description:
  <input type="text" name="msg" 
		value="<?php echo $row['msg']?>"/></p>
		           
               
        <input type="hidden" name="place" value="<?php echo $search; ?>" />
				              
	         <input  type="submit" name="update" id="update" value="Update" />
		   </p>
         </form>
        <?php
		 	
		
	 }
    else{
		 echo " No results found "; 
	    }
	
    
  }
	else{
		header("Location: sidebar admin.php");
	}  
	  	 
?>
</body>
</html>