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
		<nav class="navbar navbar-dark bg-dark">
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

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height:1">
					<!-- <ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">Services</a></li>
						<li class="nav-item"><a href="#" class="nav-link">About</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Signup</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
					</ul> -->
					<ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Network Instalation</a></li>
                <li><a href="#">IT Support</a></li>
                <li><a href="#">Deployment Management</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Web Development</a></li>
								<li><a href="#">Software Development</a></li>
								<li><a href="#">Game Development</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Graphic Design</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">Videography</a></li>
              </ul>
            </li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Signup</a></li>
          </ul>
				</div>
			</div>

		</nav>
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
