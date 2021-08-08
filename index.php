<?php
/*
 * index.php
 *
 * Copyright 2021 root <root@puppypc23486>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 *
 */
include_once "./includes/header.inc.php";
?>


	<header>
		<!-- <nav class="navbar navbar-dark bg-dark mynav">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<a class="navbar-brand">Logo</a>
				</div>

				<div class="collapse navbar-collapse navbar-secondary" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height:1">
					<ul class="nav navbar-nav">
            <li class="active"><a href="#" class="navbar-links">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#" class="navbar-links">About</a></li>
						<li><a href="#" class="navbar-links">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle navbar-links" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-links">Network Instalation</a></li>
                <li><a href="#" class="dropdown-links">IT Support</a></li>
                <li><a href="#" class="dropdown-links">Deployment Management</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" class="dropdown-links">Web Development</a></li>
								<li><a href="#" class="dropdown-links">Software Development</a></li>
								<li><a href="#" class="dropdown-links">Game Development</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" class="dropdown-links">Graphic Design</a></li>
								<li><a href="#" class="dropdown-links">Photography</a></li>
								<li><a href="#" class="dropdown-links">Videography</a></li>
              </ul>
            </li>
						<li><a href="#" class="navbar-links">Contact</a></li>
						<li><a href="#" class="navbar-links">Signup</a></li>
          </ul>
				</div>
			</div>

		</nav> -->
		<nav class="navbar navbar-expand-lg navbar-light mynav">
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
		          <a class="nav-link color-white" href="#">About</a>
		        </li>
						<li class="nav-item">
		          <a class="nav-link color-white" href="#">Blog</a>
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
							<a class="nav-link color-white" href="#">Contact</a>
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
		<div class="container-fluid">
			<div class="row">
				<div class="d-flex justify-content-center align-item-center full-window " style="background: red;">

					<div class="text-center" style="background: blue;">
						<h3 class="text-light p-2">This is a new Beginning</h3>
						<h2 class="text-light p-2">Welcome to</h2>
						<h1 class="text-light p-2 mb-4">LOGO</h1>
						<button type="button" class="btn btn-lg btn-outline-light" name="button">Start Here</button>
					</div>

				</div>
			</div>

		</div>
	</header>

	<!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div> -->
<?php
	include_once "includes/footer.inc.php";
?>
