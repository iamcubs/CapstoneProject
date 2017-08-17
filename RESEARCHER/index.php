<?php
	require_once 'function/function.php';   
	if(empty($_SESSION)) session_start();
?>	
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>MAX RESEARCHER</title>

	    <link href="landing_page/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="landing_page/css/font-awesome.min.css">
		<link rel="stylesheet" href="landing_page/css/animate.css">
		<link href="landing_page/css/animate.min.css" rel="stylesheet"> 
		<link href="landing_page/css/style.css" rel="stylesheet" />	
		<link href="login_page/login.css" rel="stylesheet" />
    </head>
  	<body>	
		<header id="header">
	        <nav class="navbar navbar-default navbar-static-top" role="banner">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                   <div class="navbar-brand">
							<a href="index.php"><h1>MAX RESEARCHER</h1></a>
						</div>
	                </div>				
	                <div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Home</a></li>
								<li role="presentation"><a href="about.php">About Us</a></li>
								<li role="presentation"><a href="" data-toggle="modal" data-target="#login">Login</a></li>
							</ul>
						</div>
					</div>		
	            </div>
	        </nav>	
	    </header>
	    <div class="slider">		
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">						
							<img src="landing_page/img/22.jpg" class="img-responsive" alt=""> 
							<div class="carousel-caption">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
									<h2><span>Clean & Modern Design Template</span></h2>
								</div>
								<div class="col-md-10 col-md-offset-1">
									<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">			
										<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
									</div>
								</div>
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">	<div class="form-inline">
										<div class="form-group">
											<button type="getnow" name="Live Demo" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register">Register</button>
										</div>
									</div>
								</div>
							</div>
					    </div>
					    <div class="item">
							<img src="landing_page/img/22.jpg" class="img-responsive" alt=""> 
							<div class="carousel-caption">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
									<h2>Fully Responsive</h2>
								</div>
								<div class="col-md-10 col-md-offset-1">
									<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
										<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
									</div>
								</div>
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">	<div class="form-inline">
										<div class="form-group">
											<button type="getnow" name="Live Demo" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register">Register</button>
										</div>
									</div>
								</div>
							</div>
					    </div> 
					    <div class="item">
							<img src="landing_page/img/22.jpg" class="img-responsive" alt=""> 
							<div class="carousel-caption">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
									<h2>Modern Design</h2>
								</div>
								<div class="col-md-10 col-md-offset-1">
									<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
										<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
									</div>
								</div>
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">	<div class="form-inline">
										<div class="form-group">
											<button type="getnow" name="Live Demo" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register">Register</button>
										</div>
									</div>
								</div>
							</div>
					    </div> 
					</div>
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> 
			</div>
		</div>
		<?php include 'login_reg_logout/register.php'; ?>
		<?php include 'login_reg_logout/login.php'; ?>
		<div class="services">
			<div class="container">
				<div class="text-center">
					<h2>Learn more about max researcher</h2>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<i class="fa fa-heart-o"></i>
					<h3>Fully Responsive</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<i class="fa fa-cloud"></i>
					<h3>Retina Ready</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<i class="fa fa-book"></i>	
					<h3>Fresh and Clean</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
					<i class="fa fa-gear"></i>	
					<h3>Easy to Customize</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
				</div>
			</div>			
		</div>
		<section class="action">
			<div class="container">
				<div class="left-text hidden-xs">
					<h4>Working Space</h4>
					<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
				</div>
				<div class="right-image hidden-xs"></div>
			</div>
		</section>
		<div class="gallery">
			<div class="text-center">
				<h2>Features</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident </p>
			</div>
			<div class="container">		
				<div class="col-md-4">
					<figure class="effect-marley">
						<img src="landing_page/img/123456.jpg" alt="" class="img-responsive"/>
						<figcaption>
							<h4>Image here</h4>
							<p>Marley tried to convince her but she was not interested.</p>				
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="effect-marley">
						<img src="landing_page/img/123456.jpg" alt="" class="img-responsive"/>
						<figcaption>
							<h4>Image here</h4>
							<p>Marley tried to convince her but she was not interested.</p>				
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="effect-marley">
						<img src="landing_page/img/123456.jpg" alt="" class="img-responsive"/>
						<figcaption>
							<h4>Image here</h4>
							<p>Marley tried to convince her but she was not interested.</p>				
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="effect-marley">
						<img src="landing_page/img/123456.jpg" alt="" class="img-responsive"/>
						<figcaption>
							<h4>Image here</h4>
							<p>Marley tried to convince her but she was not interested.</p>				
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="effect-marley">
						<img src="landing_page/img/123456.jpg" alt="" class="img-responsive"/>
						<figcaption>
							<h4>Image here</h4>
							<p>Marley tried to convince her but she was not interested.</p>				
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="effect-marley">
						<img src="landing_page/img/123456.jpg" alt="" class="img-responsive"/>
						<figcaption>
							<h4>Image here</h4>
							<p>Marley tried to convince her but she was not interested.</p>				
						</figcaption>			
					</figure>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h4>About Us</h4>
					<p>Day is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>						
					<div class="contact-info">
						<ul>
							<li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
							<li><i class="fa fa-phone fa"></i> +38 000 129900</li>
							<li><i class="fa fa-envelope fa"></i> info@domain.net</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">				
					<div class="text-center">
						<h4>Mini Gallery</h4>
						<ul class="sidebar-gallery">
							<li><a href="#"><img src="landing_page/img/1234.jpg" alt="" /></a></li>
							<li><a href="#"><img src="landing_page/img/1234.jpg" alt="" /></a></li>
							<li><a href="#"><img src="landing_page/img/1234.jpg" alt="" /></a></li>
							<li><a href="#"><img src="landing_page/img/1234.jpg" alt="" /></a></li>
							<li><a href="#"><img src="landing_page/img/1234.jpg" alt="" /></a></li>
							<li><a href="#"><img src="landing_page/img/1234.jpg" alt="" /></a></li>	
						</ul>
					</div>
				</div>	
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
					<div class="">
						<h4>Subscribe now!</h4>
						<p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
						<div class="btn-gamp">
							<a type="submit" class="btn btn-default">Subscribe</a>
						</div>
					</div>  
	        	</div>
			</div>	
		</footer>
		<div class="sub-footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
						</ul>	
					</div>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; MAX RESEARCHER
	                    <div class="credits">
	                        
	                    </div>
					</div>
				</div>						
			</div>				
		</div>
		<script src="landing_page/js/jquery.js"></script>		
	    <script src="landing_page/js/bootstrap.min.js"></script>	
		<script src="landing_page/js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>	
	</body>
</html>