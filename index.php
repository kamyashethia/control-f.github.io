<?php
?>
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
	
	<link rel="stylesheet" href="index.css">
	<title>Control-F</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
       			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#controlFNav">
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>                        
      			</button>
      			<a id="title" class="navbar-brand" href="index.html">Control-F</a>
    		</div>
    		<div>
      			<div class="collapse navbar-collapse" id="controlFNav">
       			 	<ul class="nav navbar-nav">
         			</ul>
         			<ul class="nav navbar-nav navbar-right">
         				<li><a id="" href="">About</a></li>
         				<li><a id="" href="">Find a developer/non-profit</a></li>         				
         				<li><a id="" href="">Login/Register</a></li>
         				<li><a id="" href="">Contact</a></li>
         			</ul>
      			</div>
    		</div>
    		</nav>
		</div>

	<!-- Comments:
	Put some nav bar on top. 
	swap #banner and #line.  DONE
	multiple entry points for devs/non-profits to look up people really quickly
	 -->
		<div class="row"  id="banner">
			<div class="col-sm-12" id="overlay1">
				<div id="landing-page-title">Control-F</div>
				<p id="vision">Need technical services? Or do you need technical experience?</p>
				<div id="mission">Our mission is to provide technical services for small business owners and nonprofits in need.</div>
			</div>
		</div>
		<div class="row" id="line">
			<div class="col-sm-12" id="small-line">
				
				<span>Digitizing every aspect of our lives.</span>
			</div>
		</div>
		<div class="row" id="description">
			<div class="col-sm-12" id="overlay2">
				<p> An advertisement-free, neutral marketplace to connect small business owners and nonprofits with technical developers willing to volunteer time, 
				or developers who are willing to work for less
				</p>
			</div> 
		</div>
		<div class="row" id="logins">
			<div id="landing-page-logins">Login/Register</div>
			<div class="col-sm-6">
				<div class="login-type">Developers</div>
			</div>
			<div class="col-sm-6">
				<div class="login-type">Nonprofits</div>
			</div>
		</div>
	</div>
</body>



</html>