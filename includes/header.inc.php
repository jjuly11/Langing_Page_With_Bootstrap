<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Landing Page with Bootstrap</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.35" />
	<!-- <link rel="stylesheet" href="./styles/bootstrap.min.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="./styles/new_bootstrap.min.css"> -->
	<link rel="stylesheet" href="./styles/master.css">
</head>

<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light mynav sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand color-white" href="#">LOGO</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon "></span>
			</button>
			<div class="collapse navbar-collapse navbar-secondary" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
					<li class="nav-item">
						<a class="nav-link active color-white" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link color-white" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link color-white" href="#news">Blog</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Services
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Network Installation</a></li>
							<li><a class="dropdown-item" href="#">IT Support</a></li>
							<li><a class="dropdown-item" href="#">Deployment Management</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Web Development</a></li>
							<li><a class="dropdown-item" href="#">Software Development</a></li>
							<li><a class="dropdown-item" href="#">Game Development</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Graphics Design</a></li>
							<li><a class="dropdown-item" href="#">Photography</a></li>
							<li><a class="dropdown-item" href="#">Videography</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link color-white" href="#contact">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link color-white" href="#">Sign-Up</a>
					</li>
				</ul>
				<!-- <form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form> -->
			</div>
		</div>
	</nav>
