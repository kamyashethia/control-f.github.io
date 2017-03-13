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
	
	<!-- jQUERY -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	
	<link rel="stylesheet" href="viewProfile.css">
	<link rel="icon" href="img\icon.ico" type="image/x-icon">
	<title>Control-F</title>
	
		

</head>
<?php include "connectDB.php"?>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
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
						<li><a href="about.html">About Us</a></li>
         				<li><a href="contact.php">Contact Us</a></li>
         			</ul>
      			</div>
    		</div>
    	</nav>
    	<!--- for the profile backimage -->
	
		<div class = "container-fluid" id = "top-background">
			<div id = "title-text">
			<?php #query to get user information#
   				$query = "SELECT firstName, lastName, email, phone, age, uDescription FROM user WHERE userID = 1 ";
   				if ( ! ( $result = mysqli_query($conn, $query)) ) {
   					echo("Error: %s\n"+ mysqli_error($conn));
   					exit(1);
   				} 
   				$row = mysqli_fetch_assoc($result);
   				echo($row['firstName'] . " " . $row['lastName']);
   			?>
			
			</div>	 
		</div>
		<div class = "container-fluid" id = "division-bar"> 
		</div>
		<img src="img/ross.png" class="img-fluid" alt="Responsive image" id = "profile-image">
		<div class="container-fluid"
		<div class="row">
			<div class="alert alert-success alert-dismissable" id="updateYes" style="display: none;">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Profile updated.</strong>
			</div>	  	
	  		<div class="alert alert-danger alert-dismissable" id="updateNo" style="display: none;">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>ERROR: Profile failed to update.</strong>
			</div>
			
		  	<!--first row-->
		  	<div class="col-sm-4 col-sm-offset-2 left-box left-box" id = "about-box">
		  		<button onclick="editAbout(this);" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-pencil "></span> 
		  		</button>
		  		<button  onclick="update('about-text')" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-floppy-disk""></span> 
		  		</button>
		  		<br>
				<p class = "sub-heading" > About Developer </p>
				<p id="about-text" contentEditable="false">
				<?php #query to get user information#
   					$query = "SELECT uDescription FROM user WHERE userID = 1 ";
   					if ( ! ( $result = mysqli_query($conn, $query)) ) {
   						echo("Error: %s\n"+ mysqli_error($conn));
   						exit(1);
   					} 
   					$row = mysqli_fetch_assoc($result);
   					echo($row['uDescription']);
   				?>	
				</p>
				<script>
			  	function editAbout(button) {
			    	var text = document.getElementById("about-text");
			    	var box = document.getElementById("about-box");
				    if (text.contentEditable == "true") {
				        text.contentEditable = "false";
				       	box.style.backgroundColor="#e8e9ea";
				       	 box.style.border = "none";
				       
				    } else {
				        text.contentEditable = "true";
				        box.style.backgroundColor ="#f2f2f2";
				        box.style.border = "2px dashed #cecece";
				       
				    }
				}
		  		</script>
			</div>
		  	


		  	<div class="col-sm-4  col-sm-offset-1 right-box top-box" id = "quick-facts-box"> 
				<button onclick="editFacts(this);" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-pencil "></span> 
		  		</button>
		  		<button  onclick="update('quick-facts')" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-floppy-disk""></span> 
		  		</button> <br>
				<p class = "sub-heading" > Quick Facts </p>
				<p id="quick-facts">
				<?php #query to get user information#
   				$query = "SELECT email, phone, age FROM user WHERE userID = 1 ";
   				if ( ! ( $result = mysqli_query($conn, $query)) ) {
   					echo("Error: %s\n"+ mysqli_error($conn));
   					exit(1);
   				} 
   				while($row = mysqli_fetch_assoc($result)) {
   					echo("Age: &nbsp; <span contentEditable='false' class='facts-text' id='myAge'>" . $row['age'] . "</span><br>");
   					echo("Email: &nbsp; <span contentEditable='false' class='facts-text' id='myEmail'>" . $row['email'] . "</span><br>");
   					echo("Phone: &nbsp; <span contentEditable='false' class='facts-text' id='myPhone'>" . $row['phone'] . "</span><br>");
   				}
   				
   				?>	 
				</p>

				<script>
			  	function editFacts(button) {
			    	var text = document.getElementsByClassName("facts-text");
			    	var box = document.getElementById("quick-facts-box");
				    if (text[0].contentEditable == "true" || text[1].contentEditable == "true" || text[2].contentEditable == "true") {
				        text[0].contentEditable = "false";
				        text[1].contentEditable = "false";
				        text[2].contentEditable = "false";
				       	box.style.backgroundColor="#e8e9ea";
				       	box.style.border = "none";
				       
				    } else {
				        text[0].contentEditable = "true";
				        text[1].contentEditable = "true";
				        text[2].contentEditable = "true";
				        box.style.backgroundColor ="#f2f2f2";
				        box.style.border = "2px dashed #cecece";
				       
				    }
				}
		  		</script>
			
			</div>
		 
			
			<!--second row-->
		  	<div class="col-sm-4 col-sm-offset-2 left-box " id = "skills-box"> 
		  		<button onclick="editSkills(this);" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-pencil "></span> 
		  		</button>
		  		<button  onclick="update('allSkills')" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-floppy-disk""></span> 
		  		</button> <br>
				<p class = "sub-heading" > Skills </p>
				<p id="skills-text" contentEditable="false">
				<?php #query to get list of skills and project links#
		 			$query = "SELECT skillName FROM userSkill, user WHERE user.userID = 1 AND userSkill.userID = user.userID ";
		 			if ( ! ( $result = mysqli_query($conn, $query)) ) {
		 				echo("Error: %s\n"+ mysqli_error($conn));
		 				exit(1);
		 			}
		 			$count=0;
		 			if (mysqli_num_rows($result) > 0) {
		 				while($row = mysqli_fetch_assoc($result)) {
		 					if ($count == 0) {
		 						echo($row['skillName']);
		 					} else {
		 						echo(", " . $row['skillName']);
		 					}
		 					$count++;
		 				}
		 			} else {
		 				echo("User has no skills.");
		 			}
				?> 	 
				<div id="allSkills" style="display: none; column-count: 3;">
					<input type="checkbox" class="skillz" name="HTML" value="HTML">HTML<br>
					<input type="checkbox" class="skillz" name="CSS" value="CSS">CSS<br>
					<input type="checkbox" class="skillz" name="Coldfusion" value="Coldfusion">Coldfusion<br>
					<input type="checkbox" class="skillz" name="Java" value="Java">Java<br>
					<input type="checkbox" class="skillz" name="Javascript" value="Javascript">Javascript<br>
					<input type="checkbox" class="skillz" name="Python" value="Python">Python<br>
					<input type="checkbox" class="skillz" name="C/C++" value="C/C\+\+">C/C++<br>
					<input type="checkbox" class="skillz" name="Swift" value="Swift">Swift<br>
					<input type="checkbox" class="skillz" name="PHP" value="PHP">PHP<br>
					<input type="checkbox" class="skillz" name="webDev" value="Web Dev">Web Dev<br>
					<input type="checkbox" class="skillz" name="android" value="Android Dev">Android Dev<br>
					<input type="checkbox" class="skillz" name="iOS" value="iOS Dev">iOS Dev<br>
				</div>
				</p>

				<script>
			  	function editSkills(button) {
			    	var text = document.getElementById("skills-text");
			    	var box = document.getElementById("skills-box");
			    	var allSkills = document.getElementById("allSkills");
			    	var skillz = document.getElementsByClassName("skillz");
				    if (text.contentEditable == "true") {
				        text.contentEditable = "false";
				        text.style.display="block";
				        allSkills.style.display="none";
				       	box.style.backgroundColor="#e8e9ea";
				       	box.style.border = "none";
				       
				    } else {
				        text.contentEditable = "true";
				        text.style.display="none";
				        for (var i=0; i<skillz.length; i++) {
					        if (text.innerHTML.search(skillz[i].value) > -1) {
						       	skillz[i].checked = true;
					        } 
				        }  
				        allSkills.style.display="block";
				        box.style.backgroundColor ="#f2f2f2";
				        box.style.border = "2px dashed #cecece";
				       	
				    }
				}
		  		</script>
			
			</div>


		  	<div class="col-sm-4  col-sm-offset-1 right-box " id = "projects-box"> 
		  		<button onclick="editProjects(this);" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-pencil "></span> 
		  		</button> <br>
				<p class = "sub-heading" >Proof of skills  </p>
				<p id="projects-text" contentEditable="false">
				 <?php #query to get list of skills and project links#
		 			$query = "SELECT portfolioURL FROM userSkill, user WHERE user.userID = 1 AND userSkill.userID = user.userID ";
		 			if ( ! ( $result = mysqli_query($conn, $query)) ) {
		 				echo("Error: %s\n"+ mysqli_error($conn));
		 				exit(1);
		 			}
		 			if (mysqli_num_rows($result) > 0) {
		 				while($row = mysqli_fetch_assoc($result)) {
		 					echo($row['portfolioURL'] . "<br>");
		 				}
		 			} else {
		 				echo("User has no project links.");
		 			}
				?> 	 	 
				</p>

				<script>
			  	function editProjects(button) {
			    	var text = document.getElementById("projects-text");
			    	var box = document.getElementById("projects-box");
				    if (text.contentEditable == "true") {
				        text.contentEditable = "false";
				       	box.style.backgroundColor="#e8e9ea";
				       	 box.style.border = "none";
				       
				    } else {
				        text.contentEditable = "true";
				        box.style.backgroundColor ="#f2f2f2";
				        box.style.border = "2px dashed #cecece";
				       
				    }
				}
		  		</script>
			</div>

			<!-- 3rd row -->

			<div class="col-sm-9 col-sm-offset-2 left-box " id = "awards-box"> 
				<button onclick="editAwards(this);" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-pencil "></span> 
		  		</button> <br>
				<p class = "sub-heading" >Significant Achievements </p>
				<p id="awards-text" contentEditable="false">
				 	 
				</p>

				<script>
			  	function editAwards(button) {
			    	var text = document.getElementById("awards-text");
			    	var box = document.getElementById("awards-box");
				    if (text.contentEditable == "true") {
				        text.contentEditable = "false";
				       	box.style.backgroundColor="#e8e9ea";
				       	 box.style.border = "none";
				       
				    } else {
				        text.contentEditable = "true";
				        box.style.backgroundColor ="#f2f2f2";
				        box.style.border = "2px dashed #cecece";
				       
				    }
				}
		  		</script>
				
			</div>
			
			<div class="col-sm-9  col-sm-offset-2 left-box " id = "social-media"> 
				<button onclick="editSocial(this);" class="edit-icon"> 
		  			<span class="glyphicon glyphicon-pencil "></span> 
		  		</button> <br>
				<p class = "sub-heading" > Other Places to Find Developer </p> 
				<p id="social-media-text" contentEditable="false">
				<?php #query to get list of skills and project links#
		 			$query = "SELECT links FROM mydbinstance.links WHERE id = 1";
		 			if ( ! ( $result = mysqli_query($conn, $query)) ) {
		 				echo("Error: %s\n"+ mysqli_error($conn));
		 				exit(1);
		 			}
					if (mysqli_num_rows($result) > 0) {
		 				while($row = mysqli_fetch_assoc($result)) {
		 					echo($row['links'] . "<br>");
		 				}
		 			} else {
		 				echo("User has no links to show.");
		 			}
				?> 	 	 
				</p>

				<script>
			  	function editSocial(button) {
			    	var text = document.getElementById("social-media-text");
			    	var box = document.getElementById("social-media");
				    if (text.contentEditable == "true") {
				        text.contentEditable = "false";
				       	box.style.backgroundColor="#e8e9ea";
				       	 box.style.border = "none";
				       
				    } else {
				        text.contentEditable = "true";
				        box.style.backgroundColor ="#f2f2f2";
				        box.style.border = "2px dashed #cecece";
				       
				    }
				}
		  		</script>
				
			</div>
		  	
		</div>
		  	
	</div>	
<?php mysqli_close($conn); ?>

<script>
	function update(id) {
		var box = document.getElementById(id);
		var text="";
		var func = "";
		switch(id) {
			case 'about-text':
				f = 'about';
				text = box.innerHTML;
				break;
			case 'quick-facts':
				f = 'facts';
				var text = [];
				var age = document.getElementById('myAge');
				if (parseFloat(age.innerHTML) % 1 != 0 || typeof parseFloat(age.innerHTML) != 'number' || parseFloat(age.innerHTML) < 0) {
					alert("Please use a whole number greater than 0 for age");
					return;
				}
				var email = document.getElementById('myEmail'); 
				var phone = document.getElementById('myPhone');
				text = [parseFloat(age.innerHTML), email.innerHTML, phone.innerHTML];
				break;
			case 'allSkills':
				var skillz = document.getElementsByClassName('skillz');
				f = 'skills';
				text=[];
				for (var i=0; i<skillz.length; i++) {
					if (skillz[i].checked == true) {
						text.push(skillz[i].name);
					}
				}
				alert(text);
				break;
			default:
				alert("Error");
				break;
		} 
		$.ajax ({
			type: "POST",
			url: "ajax.php",
			data: {func: f, textUpdate: text},
			dataType: "html",
			success: function(data) {
				var success = document.getElementById("updateYes");
				success.style.display='block';
				
			},
			error: function(e) {
				var fail = document.getElementById("updateNo");
				success.style.display='block';
			}	
		});
		
		
	}
</script>   
			
</body>
</html>
