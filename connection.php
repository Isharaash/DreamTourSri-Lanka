<html> <head> <title>Selecting MySQL Database</title> </head> <body>
 <?php $dbhost = 'localhost';
  $dbuser = 'root'; 
  $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);//It opens a connection to a MySQLi Server
   
    if(!$conn ) { 
   die('Could not connect: ' . mysqli_error($conn));
    } echo 'Connected successfully';
	// selecting data base
	 
	 $db= mysqli_select_db($conn,'dreamtoursri lanka');
	
	if(!$db){
		
	 echo 'Select database first ';
	
	}else
	 echo 'Database selected';
	
	 	  //mysqli_close($conn); ?> 
      </body> </html>
      
  