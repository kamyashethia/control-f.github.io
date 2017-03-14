<?php
include 'connectDB.php';

if (isset($_POST['func'])) {
	$func = $_POST['func'];
	
} 

if (isset($_POST['textUpdate'])) {
	$text = $_POST['textUpdate'];
		
} 

if (isset($_POST['tYear'])) {
	$years = $_POST['tYear'];

} 

if (isset($_POST['tURL'])) {
	$urls = $_POST['tURL'];

} 

if (isset($_POST['s'])) {
	$size = $_POST['s'];

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
		#Delete all skills from table where userID = id of current user
		$query = "DELETE FROM userSkill WHERE userID =1";
		if (mysqli_query($conn, $query)) {
		} else {
			echo "Error deleting records: " . mysqli_error($conn);
		}
		#Insert all the values back
		for ($i=0; $i < $size; $i++) {
			$query = "INSERT INTO userSkill (skillName, userID, yearsExp, portfolioURL)
				VALUES ('" . $text[$i] . 
				"', 1, " . $years[$i] . ", '" . $urls[$i] . "')";
			if (mysqli_query($conn, $query)) {
			} else {
				echo "Error inserting record: " . mysqli_error($conn);
			}
		}
		break;
	case 'links':
		#Delete all links from table where userID = id of current user
		$query = "DELETE FROM links WHERE id =1";
		if (mysqli_query($conn, $query)) {
		} else {
			echo "Error deleting records: " . mysqli_error($conn);
		}
		#Insert all the links back
		for ($i=0; $i < $size; $i++) {
			$query = "INSERT INTO links (id, name, links)
				VALUES (1, '" . $text[$i] . "', '" . $urls[$i] . "')";
						
			if (mysqli_query($conn, $query)) {
			} else {
				echo "Error inserting record: " . mysqli_error($conn);
			}
				
		}
		
		break;
	default:
		die("Choose a function!");
}
mysqli_close($conn);

?>