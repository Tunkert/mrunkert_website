<?php include "includes/website-information.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=<?php echo $description; ?>>
	<title><?php echo $title; ?></title>
	<!-- bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php"><?php echo $website_title ?></a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    	</button>
	    	<div class="collapse navbar-collapse" id="navbarNav">
	        	<ul class="navbar-nav ms-auto">
	            	<li class="nav-item">
	            		<a class="nav-link active" aria-current="page" href="index.php">Home</a>
	            	</li>
	            	<li class="nav-item">
	            		<a class="nav-link" href="sat.php">SAT</a>
	         		</li>
	         		<li class="nav-item">
	         			<a class="nav-link" href="web-development.php">Web Development</a>
	         		</li>
	         		<li class="nav-item">
	         			<a class="nav-link" href="https://www.youtube.com/channel/UCLs3nR6rrRoyr8eXyOPyfmw" target="_blank">YouTube</a>
	         		</li>
	      		</ul>
	    	</div>
		</div>
	</nav>
</header>