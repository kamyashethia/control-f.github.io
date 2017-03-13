<?php
include 'connectDB.php';

if (isset($_POST['func'])) {
	$func = $_POST['func'];
	
}

if (isset($_POST['textUpdate'])) {
	$text = $_POST['textUpdate'];
		
}

switch ($func) {
	case 'about':
		$query = "UPDATE user SET uDescription = '" . $text . "' WHERE userID = 1";
		if (mysqli_query($conn, $query)) {
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
		break;
	case 'facts':
		$age = $text[0]; $email = $text[1]; $phone = $text[2];
		$query = "UPDATE user SET age = " . $age . ", email = '" . $email . "', phone= '" . $phone . "' WHERE userID = 1";
		if (mysqli_query($conn, $query)) {
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		} 
		break;
	case 'skills':
		foreach ($text as $skill) {
			$query = "SELECT skillName FROM userSkill WHERE userID = 1 AND skillName = '" . $skill . "'";
			if ( ! ( $result = mysqli_query($conn, $query)) ) {
		 		echo("Error: %s\n"+ mysqli_error($conn));
		 		exit(1);
		 	}
		 	if (mysqli_num_rows($result) == 0) { #skillName doesn't exist yet, so we use INSERT statement to add skill for user
		 		$query1 = "INSERT INTO userSkill (skillName, userID) VALUES ('" . $skill . "', 1)";
		 		if ( ! mysqli_query($conn, $query) ) {
		 			echo("Error: %s\n"+ mysqli_error($conn));
		 			exit(1);
		 		}
		 	} 
			
		}
		break;
	default:
		die("Choose a function!");
}
mysqli_close($conn);

?>