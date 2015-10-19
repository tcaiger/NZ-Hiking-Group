<?php  Auth::kickout('/'); ?>

<!DOCTYPE html>
<html ng-app="App">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="initial-scale=1.0">
	<title>NZ Hiking Group</title>
	<link rel="stylesheet" href="assets/css/main.min.css">

	<!-- foundation -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
</head>
<body> 
<div class="container">
	<header class="flex flex-j-between flex-a-center">
		<a href="/" class="brand"></a>
	
	</header>
</div>
<nav>
	<div class="container">
		<ul class="flex">
			<li><a href="admin">Trips Summary</a></li>
			<li><a href="addTrip">Add Trip</a></li>
			<li><a href="signout">Logout</a></li>
		</ul>
	</div>
</nav>	
