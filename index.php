<!DOCTYPE html>
<html lang="en">
<head>
    <title>More Than Vectors</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>		
	<!--- Navigation Menu ---->
	    <section id="nav-bar">
	    	<div class="container">
	        <nav class="navbar navbar-expand-lg navbar-light ">
	            <a class="navbar-brand" href="index.php">
	            	<img src="img/logoWhite.png">
	            </a>
	            <div id="mob-nav" class="overlay">
					<a href="#" class="close" onclick="closeNav()">&times;</a>
					<div class="overlay-content">
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Case Studies</a>
                        <a class="nav-link" href="about.php">About us</a>
                        <a class="nav-link" href="contact.php">Contact</a>
					</div>
				</div>
	            <button class="navbar-toggler" type="button" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span onclick="openNav()">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</span>	            
				</button>
	            <div class="collapse navbar-collapse" id="navbarNav">
	                <ul class="navbar-nav ml-auto">
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Services</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Case Studies</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="about.php">About us</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="contact.php">Contact</a>
	                    </li>
	                </ul>
	            </div>
	        </nav>
	    	</div>
	    </section>
	    <!------- Hero section -------->
	    <section id="hero">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-6 order-md-12 text-center hero-img">
	                    <img src="img/hero.svg" class="img-fluid">
	                </div>
	                <div class="col-md-6 order-md-1 hero-info">
	                    <h1 class="promo-title"> We are More Than Vectors! </h1>
	                    <p>We reinvent digital. Change minds through creativity. Generate ideas using smart data strategies. Push the boundaries of what is possible in technology. Together we bring ideas to life. Full service. End to end.</p>
	                    <a class="btn btn-yellow" href="about.php">Find out more</a>
	                </div>
	            </div>
	        </div>
	    </section>
	    	<div class="wave">
	        	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#0B283A" fill-opacity="1" d="M0,64L80,58.7C160,53,320,43,480,64C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
				</svg>
	        </div>

	    <!-- Services -->
	    <section id="services">
	    	<div class="container">
		        <h1 class="title text-center">
		            What we do best
		        </h1>
		        <div class="row text-center">
		            <div class="col-md-4 services">
		                <img src="img/web.svg" class="service-img ">
		                <h3> Web Development </h3>
		                <p>Our web team provides bespoke website and web app creation, hosting and maintenance.</p>
		            </div>
		            <div class="col-md-4 services">
		                <img src="img/branding.svg" class="service-img">
		                <h3> Branding </h3>
		                <p>We build brand identities that are unique & distinctive for you to stand out in the market.</p>
		            </div>
		            <div class="col-md-4 services">
		                <img src="img/video.svg" class="service-img">
		                <h3> Video Production </h3>
		                <p>We deliver carefully created videos made for different Social Media platforms.</p>
		            </div>
		            <button type="button" class="btn btn-yellow text-center">Get in touch</button>
		        </div>
		    </div>
    	</section>
    	<!---- About Us ---->
	    <section id="about">
	        <div class="container">
	            <h1 class="title text-center">Why choose us?</h1>
	            <div class="row">
	                <div class="col-md-6">
	                    <h2 class="about-title">How we stand out</h2>
	                    <p>
                            We’re sticklers for service. We apply that to our work and the aftercare we provide. It’s that personal touch you only get with a really good, smaller agency.
                            We ensure all of our creative output looks great and engages the end user so each piece is truly effective at communicating the message you need to publish.
                            We feed all of our experience into your next project whether it’s a beautiful new stationery set, website, catalogue, or advert.
	                    </p>
	                </div>
	                <div class="col-md-6">
	                    <img src="img/team.svg" class="img-fluid">
	                </div>
	            </div>
	        </div>
	    </section>

		<!-- Testimonals -->
	    <section id="testimonals">
	        <div class="container">
	            <h1 class="title text-center">Our customer stories</h1>
	            <div class="row offset-1">
	                <div class="col-md-5 mb-5 mb-md-0 testimonals">
	                    <p> Customer service is one of the areas that really sets them apart from the competition. Their mission is to be clear and honest since day one to provide a prompt and efficient service. </p>
	                    <div class="client-info">
		                    <img src="img/jana.png">
		                    <h6 class="client">Jana</h6>
		                    <h6 class="client-profession">German Tutor</h6>
	                    </div>
	                </div>
	                <div class="col-md-5 testimonals">
	                    <p> More Than Vectors were really easy to work with. 
							They understood my vision right away and did an excellent job at executing it, making for an efficient, as well as friendly, experience. 
						</p>
						<div class="client-info">
		                    <img src="img/helena.png">
		                    <h6 class="client">Helena</h6>
		                    <h6 class="client-profession"> Financial Advisor </h6>
	                	</div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!---- Case Studies ---->
	    <section id="case-studies">
	        <div class="container">
	            <h1 class="title text-center">Case Studies</h1>
	            <div class="row justify-content-center">
	                <div class="col-lg-5 case-study">
                    	<img src="img/albanach.png" class="img-fluid">
                    	<h3>Albanach</h3>
                    	<button class="btn btn-tag">3D Modelling</button>
                    	<button class="btn btn-tag">Branding</button>
                    	<button class="btn btn-tag">Video Production</button>
	                </div>
	                <div class="col-lg-5 case-study">
                    	<img src="img/chiari.png" class="img-fluid">
                    	<h3>Chiari</h3>
                    	<button class="btn btn-tag">eCommerce</button>
                    	<button class="btn btn-tag">Branding</button>
                    	<button class="btn btn-tag">Web Design & Development</button>
	                </div>
	            </div>
	            <div class="row justify-content-center">
	                <div class="col-lg-5 case-study">
                    	<img src="img/foxtrk.png" class="img-fluid">
                    	<h3>FOXtrk</h3>
                    	<button class="btn btn-tag">Web Design & Development</button>
                    	<button class="btn btn-tag">App Development</button>
                    	<button class="btn btn-tag">Branding</button>
	                </div>
	                <div class="col-lg-5 case-study">
                    	<img src="img/boom.png" class="img-fluid">
                    	<h3>Boom Radio</h3>
                    	<button class="btn btn-tag">CMS Platform</button>
                    	<button class="btn btn-tag">Web Design & Development</button>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- Contact Form -->
	    <section id="contact">
	        <div class="container">
	            <h1 class="title text-center">Get in touch</h1>
	            <div class="row">
                <div class="col-md-6 contact-img">
                    <img src="img/contact.svg" class="img-fluid">
                </div>
                <div class="col-md-6">
		            <form>
						<div class="form-group">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" id="inputName" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="inputSubject">Subject</label>
							<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
						</div>
						<div class="form-group">
						    <label for="exampleFormControlTextarea1">Message</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
						</div>
						<button type="submit" class="btn btn-blue">Contact</button>
					</form>
				</div>
	        </div>
	    </section>

	    <!-- Footer -->
	    <section id='footer'>
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-6 col-md-3 footer-logo">
	    				<img src="img/logoWhite.png" class="img-fluid">
	    			</div>
	    			<div class="col-6 col-md-3 social-media">
	    				<h4> Follow us </h4>
	    				<ul>
	    					<li>
	    						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li>
	    						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
	    				</ul>
	    			</div>
					<div class="col-6 col-md-3">
	    				<h4> Useful links </h4>
	    				<ul>
	    					<li>
	    						<a href="#">FAQ</a>
							</li>
							<li>
	    						<a href="#">T&C's</a>
							</li>
							<li>
	    						<a href="#">Legal</a>
							</li>
							<li>
	    						<a href="#">GDPR</a>
							</li>	    				
						</ul>
	    			</div>
					<div class="col-6 col-md-3">
	    				<h4> Quick links </h4>
	    				<ul>
	    					<li>
	    						<a href="#">Home</a>
							</li>
							<li>
	    						<a href="#">About</a>
							</li>
							<li>
	    						<a href="#">Case Studies</a>
							</li>
							<li>
	    						<a href="#">Contact</a>
							</li>	    				
						</ul>
	    			</div>	    		
	    		</div>
	    	</div>
	    </section>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/5ff82a3bf5.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	function openNav() {
		$("#mob-nav").css({
			'opacity': '1',
			'width': '100%',
		});
	}

	function closeNav() {
		$("#mob-nav").css({
			'opacity': '0',
			'width': '0%',
		});	}
</script>
