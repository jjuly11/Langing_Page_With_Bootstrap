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
include_once "includes/header.inc.php";
?>


	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="d-flex justify-content-center align-item-center full-window " style="background-image: url('images/bgimg1.jpg'); background-position: center; background-size:cover;">

					<div class="text-center text-light">
						<!-- <h3 class="text-light p-2">This is a new Beginning</h3> -->
						<h2 class="text-light p-2">We Are</h2>
						<h1 class="text-light p-2 mb-4 font-weight-bold">Big Digital Agency</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni blanditiis voluptas aspernatur quis obcaecati veniam.</p>
						<button type="button" class="btn btn-lg btn-outline-primary bg-white rounded-pill px-5" name="button"><span class="fs-6"></span></button>
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

<section id="about_section" class="p-5 my-5" >

	<div class="row">
		<div class="d-flex justify-content-center text-align-center">
			<div class="p-3">
				<h4>About our <span class="text-primary">Creative</span> Agency</h4>
			</div>
		</div>
	</div>

	<div class="row mb-5">
		<div class="d-flex justify-content-center text-align-center">
			<div class="">
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, voluptatem fugit. Omnis laborum itaque reiciendis nihil, quo minima vel quae est porro quia repellendus consequuntur!</p>
			</div>
		</div>
	</div>

	<!-- Service Cards  -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
				<div class="card text-center">
					<i class="fas fa-laptop-code fa-10x card-img-top"></i>		
					<!-- <img src="images/bgimg1.jpg" alt="" class="card-img"> -->
					
					<div class="card-body row align-items-end">
						<div class="card-title fs-4">Web Design
							</br><small class="text-primary fs-6">Modern & Clean Design</small>
								<!-- <div class="card-title fs-6"><small class="text-primary">Modern & Clean Design</small></div> -->
						</div>
						<div class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</small></div>
					</div>
					

				</div>
			</div>
			<div class="col-md-4">
			<div class="card text-center">
				<i class="fas fa-tools fa-10x card-img-top"></i>
					
				
				<div class="card-body row align-items-end">
					<div class="card-title fs-4">Development
						</br>
						<small class="text-primary fs-6">Web & Mobile Development</small>
					</div>
					<div class="card-text text-muted text-center"><p><small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut quibusdam soluta quo commodi!</small></p></div>
				</div>
				

				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center">
				<i class="fas fa-file-contract fa-10x card-img-top"></i>
						<!-- <img src="images/portImg.jpg" alt="" class="card-img"> -->
						
				<div class="card-body row align-items-end">
					<div class="card-title fs-4">Branding
					</br>
					<small class="text-primary fs-6">Logo & Motion Design</small>
					</div>
					<div class="card-text text-muted text-center"><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam esse sit odio nulla consequuntur.</small></div>
				</div>
			

				</div>
			</div>

		</div>
	</div>
<!-- Combination of two containers  -->
	<div class="containter row p-3">

		<!-- Menues for switching to more information -->
		<div class="d-block-inline  float-left p-3 col-md-6 bg-white rounded shadow-lg">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<span href="#" onclick="about_tab()" id="about_control" class="nav-link active">About Us</span>
				</li>
				<li class="nav-item">
					<span href="#" class="nav-link" onclick="skills_tab()" id="skills_control">Why Us?</span>
				</li>
				<li class="nav-item">
					<span href="#" class="nav-link" onclick="projects_tab()" id="projects_control">Projects</span>
				</li>
			</ul>
			<div class="container-fluid" id="about">
				<div class="container">
					<div class="row">
						<div class="d-flex justify-content-center text-align-center col-md-6">
							<div class="my-auto">
								<h3>About</h3>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fs-5">
								We Are a Creative Agency
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="fs-5">
								Our Mission
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
							</p>

						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid" id="skills">
				<div class="container">
					<div class="row">
						<div class="d-flex justify-content-center text-align-center col-md-6">
							<div class="my-auto">
								<h3>Skills</h3>
							</div>
						</div>
						<div class="col-md-6">
							<p>Skills in Progress</p>


							<h6>Python</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
										40% Complete (success)
								</div>
							</div>

							<h6>JavaScript</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
										40% Complete (success)
								</div>
							</div>

							<h6>JAVA</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
										40% Complete (success)
								</div>
							</div>

							<h6>C</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
										40% Complete (success)
								</div>
							</div>

							<h6>PHP</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
										40% Complete (success)
								</div>
							</div>

							<h6>Python</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
										40% Complete (success)
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid" id="projects">
				<div class="container">
					<div class="row">
						<div class="d-flex justify-content-center text-align-center col-md-6">
							<div class="my-auto">
								<h3>Projects</h3>
							</div>
						</div>
						<div class="col-md-6">

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Second Secttion that contains the switching images or overlapping image -->
		<div class="col-md-6">
			<img src="images/portImg.jpg" class="img-fluid rounded"alt="">
		</div>
	</div>

</section>

<!-- Photograpy Portfolio Section Beginning -->

<section id="photo-portfolio">
	<div class="row">
		<div class="d-flex justify-content-center text-align-center">
			<div class="text-center">
				<span class="fs-2 font-weight-light" style="font-weight:200;">Photography <span class="font-weight-bold" style="font-weight:600;">Portfolio</span> </span>
				<!-- <div class="u-line"></div> -->
				<p class="text-muted w-50 mx-auto">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
				</p>
			</div>
		</div>
	</div>
	<div class="row w-75 mx-auto">
		<div class="d-flex flex-md-row gallery-img w-auto mx-auto bg-white p-4 rounded-pill shadow-sm mb-3">
			<div class="fs-6 px-1">
				All
			</div>
			<div class="fs-6 px-1">
				Brand
			</div>
			<div class="fs-6 px-1">
				Design
			</div>
			<div class="fs-6 px-1">
				Graphic
			</div>
		</div>
	</div>

<!-- Gallery Begins -->


	<div class="container-fluid bg-white p-5">
		<div class="d-flex  justify-content-around mb-3 gallery-img">
			<img src="https://source.unsplash.com/random/300x400" class="img-fluid gallery-items" alt="Gallery Image">
			<img src="https://source.unsplash.com/random/300x401" class="img-fluid gallery-items" alt="Gallery Image">
			<img src="https://source.unsplash.com/random/300x402" class="img-fluid gallery-items" alt="Gallery Image">
			<img src="https://source.unsplash.com/random/300x403" class="img-fluid gallery-items" alt="Gallery Image">
		</div>
		<div class="d-flex  justify-content-around gallery-img">
			<img src="https://source.unsplash.com/random/300x404" class="img-fluid gallery-items" alt="Gallery Image">
			<img src="https://source.unsplash.com/random/300x405" class="img-fluid gallery-items" alt="Gallery Image">
			<img src="https://source.unsplash.com/random/300x406" class="img-fluid gallery-items" alt="Gallery Image">
			<img src="https://source.unsplash.com/random/300x407" class="img-fluid gallery-items" alt="Gallery Image">
		</div>
	</div>

	<!-- Gallery Ends -->

	<div class="container-fluid">
		<div class="d-flex gallery-img p-4">
			<img src="images/portImg.jpg" class="img-fluid w-100" alt="">
			<div class="p-4">
				<div class="fs-4 font-weight-bold">
					Fully Responsive
				</div>
				<p class="text-muted">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur labore autem doloribus suscipit, ullam rem eos?
				</p>
				<div class="fs-4 font-weight-bold">
					Clean & Respponsive
				</div>
				<p class="text-muted">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor autem consequatur amet praesentium, ipsa dolore!
				</p>
				<div class="fs-4 font-weight-bold">
					Friendly Support
				</div>
				<p class="text-muted">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero illum harum rem reiciendis voluptas.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Teams Setion Begins  -->
<section id="team">
<!-- Header Section -->
	<div class="row">
		<div class="d-flex justify-content-center text-align-center">
			<div class="text-center">
				<span class="fs-2 font-weight-light" style="font-weight:200;">Talented <span class="font-weight-bold" style="font-weight:600;">Team</span> </span>
				<!-- <div class="u-line"></div> -->
				<p class="text-muted w-50 mx-auto">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
				</p>
			</div>
		</div>
	</div>
<!-- Carousel Starts Here -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/about_img.jpg" class="d-block w-50 mx-auto" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3 class="text-primary font-weight-bold">Bob Doal</h3>
				<p class="text-muted">Some representative placeholder content for the first slide.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/bgimg1.jpg" class="d-block w-50 mx-auto" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3 class="text-primary font-weight-bold">Kevin Hart</h3>
				<p class="text-muted">Some representative placeholder content for the second slide.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/bgimg2.jpg" class="d-block w-50 mx-auto" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3 class="text-primary font-weight-bold">Sabrina Coal</h3>
				<p class="text-muted">Some representative placeholder content for the third slide.</p>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

</section>

<!-- Pricing Section Begins -->
<section id="pricing">
	<div class="row">
		<div class="d-flex justify-content-center text-align-center px-0">
			<div class="text-center">
				<span class="fs-2 font-weight-light" style="font-weight:200;">Pricing <span class="font-weight-bold" style="font-weight:600;">Table</span> </span>
				<!-- <div class="u-line"></div> -->
				<p class="text-muted w-50 mx-auto">
					We are a passionate digital design agency that specializes in beautiful and easy-to-use digital design & web development services.
				</p>
			</div>
		</div>
	</div>

	<!-- Pricing Cards -->
	<div class="row text-center">
		<div class="col-md-3">
			<div class="card">
					<div class="card-body p-3">
						<h5 class="card-title font-weight-bold mb-3">Free</h5>
						<span class="position-absolute font-weight-bold"><small>$</small></span>
						<h1 class="d-inline">00</h1><span><small>/Month</small></span>
						<div class="mb-4"></div>
						<h6 class="card-subtitle text-muted mb-3">5 GB Disk Space</h6>
						<h6 class="card-subtitle text-muted mb-3">3 Domain Names</h6>
						<h6 class="card-subtitle text-muted mb-3">2 Email Address</h6>
						<!-- <h6 class="card-subtitle text-muted">Enhanced Security</h6> -->
						<!-- <h6 class="card-subtitle text-muted">Unlimited Support</h6> -->
						<button type="button" class="btn btn-primary rounded-pill" name="button">Purchase Now</button>
					</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
					<div class="card-body p-3">
						<h5 class="card-title font-weight-bold mb-3">Basic</h5>
						<span class="position-absolute font-weight-bold"><small>$</small></span>
						<h1 class="d-inline">9</h1><span class="fs-3">.99</span><span><small>/Month</small></span>
						<div class="mb-4"></div>
						<h6 class="card-subtitle text-muted mb-3">12 GB Disk Space</h6>
						<h6 class="card-subtitle text-muted mb-3">15 Domain Names</h6>
						<h6 class="card-subtitle text-muted mb-3">6 Email Address</h6>
						<h6 class="card-subtitle text-muted mb-3">Enhanced Security</h6>
						<h6 class="card-subtitle text-muted mb-3">Unlimited Support</h6>
						<button type="button" class="btn btn-primary rounded-pill" name="button">Purchase Now</button>
					</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
					<div class="card-body p-3">
						<h5 class="card-title font-weight-bold mb-3">Standard</h5>
						<span class="position-absolute font-weight-bold"><small>$</small></span>
						<h1 class="d-inline">29</h1><span class="fs-3">.99</span><span><small>/Month</small></span>
						<div class="mb-4"></div>
						<h6 class="card-subtitle text-muted mb-3">20 GB Disk Space</h6>
						<h6 class="card-subtitle text-muted mb-3">20 Domain Names</h6>
						<h6 class="card-subtitle text-muted mb-3">12 Email Address</h6>
						<h6 class="card-subtitle text-muted mb-3">Enhanced Security</h6>
						<h6 class="card-subtitle text-muted mb-3">Unlimited Support</h6>
						<button type="button" class="btn btn-primary rounded-pill" name="button">Purchase Now</button>
					</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
					<div class="card-body p-3">
						<h5 class="card-title font-weight-bold mb-3">Premium</h5>
						<span class="position-absolute font-weight-bold"><small>$</small></span>
						<h1 class="d-inline">49</h1><span class="fs-3">.99</span><span><small>/Month</small></span>
						<div class="mb-4"></div>
						<h6 class="card-subtitle text-muted mb-3">50 GB Disk Space</h6>
						<h6 class="card-subtitle text-muted mb-3">25 Domain Names</h6>
						<h6 class="card-subtitle text-muted mb-3">20 Email Address</h6>
						<h6 class="card-subtitle text-muted mb-3">Enhanced Security</h6>
						<h6 class="card-subtitle text-muted mb-3">Unlimited Support</h6>
						<button type="button" class="btn btn-primary rounded-pill" name="button">Purchase Now</button>
					</div>
			</div>
		</div>
	</div>

</section>

<!-- Pricing Section Finish -->

<!-- Latest News Section -->

<section id="news" >
	<div class="row">
		<div class="d-flex justify-content-center text-align-center px-0">
			<div class="text-center">
				<span class="fs-2 font-weight-light" style="font-weight:200;">Latest <span class="font-weight-bold" style="font-weight:600;">News</span> </span>
				<!-- <div class="u-line"></div> -->
				<p class="text-muted w-50 mx-auto">
					We are a passionate digital design agency that specializes in beautiful and easy-to-use digital design & web development services.
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- Spacer Div -->
		<div class="col-md-1">

		</div>

		<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			  <img src="images/about_img.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">48 Best WordPress Themes</h5>
			    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero officia molestias repellat ea officiis exercitationem!</p>
			    <a href="#" class="btn btn-primary">Read More</a>
			  </div>
			</div>
		</div>
		<!-- Spacer Div -->
		<div class="col-md-1">

		</div>

		<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			  <img src="images/portImg.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">48 Best WordPress Themes</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Read More</a>
			  </div>
			</div>
		</div>
		<!-- Spacer Div -->
		<div class="col-md-1">

		</div>

		<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			  <img src="images/bgimg1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">48 Best WordPress Themes</h5>
			    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero officia molestias repellat ea officiis exercitationem!</p>
			    <a href="#" class="btn btn-primary">Read More</a>
			  </div>
			</div>
		</div>


	</div>
</section>

<!-- Shout Out -->

<section>

	<div class="container-fluid">
		<div class="row">
			<div class="d-flex justify-content-center align-item-center full-window ">

				<div class="text-center" >
					<h3 class="text-dark p-2 fs-1">Want to work with us?</h3>
					<h2 class="text-dark p-2 fs-3 mb-3">Tell us about your project</h2>
					<button type="button" class="btn btn-lg btn-outline-dark" name="button">Get Started</button>
				</div>

			</div>
		</div>

	</div>

</section>

<!-- Contact For Section -->
<section id="contact">
	<div class="row">
		<div class="d-flex justify-content-center text-align-center px-0">
			<div class="text-center">
				<span class="fs-2 font-weight-light" style="font-weight:200;"><span class="font-weight-bold" style="font-weight:600;">Get</span> in <span class="font-weight-bold" style="font-weight:600;">Touch</span> </span>
				<!-- <div class="u-line"></div> -->
				<p class="text-muted w-50 mx-auto">
					We are a passionate digital design agency that specializes in beautiful and easy-to-use digital design & web development services.
				</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="fs-5 font-weight-bold">
					Contact us:
				</div>
				<p class="text-muted">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, fugit!
				</p>
				<div class="fs-5 font-weight-bold">
					Phone:
				</div>
				<p class="text-muted">
					+20 010 251 789 18 , 251 789 18
				</p>
				<div class="fs-5 font-weight-bold">
					Email:
				</div>
				<p class="text-muted">
					Coco_support@website.com
				</p>

				<div class="fs-5 font-weight-bold">
					Address:
				</div>
				<p class="text-muted">
					4655 Carter Street ,Olney, Illinois
				</p>
			</div>

			<!-- Forms Start -->
			<div class="col-md-8 p-4">
				<form>
				  <div class="row mb-3">
				    <div class="col">
				      <input type="text" class="form-control" name="name" placeholder="Name">
				    </div>
				    <div class="col">
				      <input type="email" class="form-control" name="email" placeholder="Email">
				    </div>
				  </div>
					<div class="row mb-3">
						<div class="col">
							<input type="text" class="form-control" name="subject" placeholder="Subject">
						</div>
					</div>

					<div class="form-row mb-3">
						<textarea class="form-control" id="textAreaExample1" rows="4" placeholder="Message"></textarea>
						<!-- <label class="form-label" for="textAreaExample">Message</label> -->
					</div>
					<button type="button" name="button" class="btn btn-primary rounded-pill">Send Message</button>
				</form>
			</div>
		</div>
	</div>


<?php
	include_once "includes/footer.inc.php";
?>
