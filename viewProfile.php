<?php
$conn = mysqli_connect("mydbinstance.cvjenxnjjyrk.us-west-2.rds.amazonaws.com:3306","admin", "admin123");
      
   if (mysqli_connect_errno())            # -----------  check connection error
   {      
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit(1);
   } else {
	printf("connected to db!\n");
   }
      
   if ( ! mysqli_select_db($conn, "mydbinstance") )          # Select DB
   {      
      printf("Error: %s\n", mysqli_error($conn));
      exit(1);
   }  else {
	printf("connected to db instance"); 
   }



?>