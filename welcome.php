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

	<link href="./hello/redirect.css" rel="stylesheet" />
	<link href="hello/redirect.css" rel="stylesheet" />
	
	<title>Control-F</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
	<div class="loading"><span>&bull;</span><span>&bull;</span><span>&bull;</span></div>

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
    	<h1 style="padding-top:20%;">welcome page</h1>
		<div class="loading"><span>&bull;</span><span>&bull;</span><span>&bull;</span></div>
	
	<script>
		window.onbeforeunload = function(){
			document.getElementsByTagName('h2')[0].innerHTML="Redirecting, please wait";

		}
	</script>
    <script>
       hello(auth.network).api('me').then(function(r) {
                 alert(r.name);
            // Inject it into the container
            var label = document.getElementById('profile_' + auth.network);
            if (!label) {
                label = document.createElement('div');
                label.id = 'profile_' + auth.network;
                document.getElementById('profile').appendChild(label);
            }
            label.innerHTML = '<img src="' + r.thumbnail + '" /> Hey ' + r.name;
        });

        hello.on('auth.logout', function () {
          var lab = document.getElementById("pic_and_greet");
          if (lab != null) document.body.removeChild( lab );
        });

      </script>
      
      <script>

hello.on('auth.login', function(auth) {
    hello(auth.network).api('/me').then(function(r) {               
        console.log("name = "+r.name);
        console.log("email = " + r.email);
    });
});


</script>
    <script src="hello.all.js"></script>
	<script src="./hello/hello.polyfill.js"></script>
	<script src="./hello/hello.js"></script>
	<script src="hello/hello.polyfill.js"></script>
	<script src="hello/hello.js"></script>
</body>
</html>
