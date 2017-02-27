<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equix="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="viewProfile.css">
	<link rel='icon' href='img\icon.ico' type='image/x-icon'>
	<title>Control-F</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
       			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#theNav">
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>                        
      			</button>
    		</div>
    		<div>
      			<div class="collapse navbar-collapse" id="theNav">
       			 	<ul class="nav navbar-nav">
         			</ul>
         			<ul class="nav navbar-nav navbar-right">
         				<li><a href="welcome.php">Home</a></li>         		
         				<li><a href="viewProfile.php">Profile</a></li>
         				<li><a href="search.php">Search</a></li>
         				<li><a href="postAd.php">Post Ad</a></li>
						<li><a href="about.html">About Us</a></li>
         				<li><a href="contact.php">Contact Us</a></li>
         			</ul>
      			</div>
    		</div>
    	</nav>
    	<h1>Your profile:</h1>
    		<div class="table-responsive">
    			<table class="table table-striped">
    				<thead>
    					<tr><th><strong>user ID</strong></th>
    					<th><strong>Name</strong></th>
    					<th><strong>Age</strong></th>
    					<th><strong>Phone</strong></th>
    					<th><strong>E-mail</strong></th>
    					<th><strong>Description</strong></th></tr>
    				</thead>
    				<tbody>
    					<?php

			$conn = mysqli_connect("mydbinstance.cvjenxnjjyrk.us-west-2.rds.amazonaws.com:3306","admin", "admin123");
      
  			if (mysqli_connect_errno()) {      
     			echo("Connect failed: %s\n"+ mysqli_connect_error());
      			exit(1);
  			} 
      
   			if ( ! mysqli_select_db($conn, "mydbinstance") ) {      
      			echo("Error: %s\n"+ mysqli_error($conn));
      			exit(1);
   			}  

   			$query = "SELECT * FROM user ORDER BY lastName ";
   			if ( ! ( $result = mysqli_query($conn, $query)) ) {
   				echo("Error: %s\n"+ mysqli_error($conn));
   					exit(1);
   			} 
   			
  			while ( $row = mysqli_fetch_assoc( $result ) ) {
   				print "<tr><td>" . $row['userID'] . "</td><td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
   				print "<td>" . $row['age'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['uDescription'] . "</td></tr>";
    				
   			}


		?>		

    				</tbody>
    			</table>
    		</div>
    	
	</div>
</body>
</html>
