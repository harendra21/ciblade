<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codeigniter With Blade</title>
    <link rel="stylesheet" href="<?php echo e(base_url()); ?>assets/common/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(base_url()); ?>assets/common/node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo e(base_url()); ?>assets/common/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(base_url()); ?>assets/front/style.css">
    
</head>
<body>
<nav class="navbar navbar-default navbar-expand-xl navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>Brand<b>Name</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About</a></li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">Web Design</a></li>
					<li><a href="#" class="dropdown-item">Web Development</a></li>
					<li><a href="#" class="dropdown-item">Graphic Design</a></li>
					<li><a href="#" class="dropdown-item">Digital Marketing</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search by Name">
				<span class="input-group-addon"><i class="ion-search"></i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="#" class="nav-link notifications"><i class="ion-ios-bell"></i><span class="badge">1</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link messages"><i class="ion-email"></i><span class="badge">10</span></a></li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar" alt="Avatar"> Paula Wilson <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="ion-person"></i> Profile</a></li>
					<li><a href="#" class="dropdown-item"><i class="ion-calendar"></i> Calendar</a></li>
					<li><a href="#" class="dropdown-item"><i class="ion-gear-a"></i> Settings</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="#" class="dropdown-item"><i class="ion-log-out"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>