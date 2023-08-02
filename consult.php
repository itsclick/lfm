<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Markin & Associates Official Website | Expertise</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Bellefair&amp;family=Open+Sans:wght@300;400;700;800&amp;family=Oswald:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	<!-- menu2 -->
 		<?php 
 		include('menu2.php');
 		?>
 	<!-- menu2 ends here-->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/1.jpg)">
    	<div class="auto-container">
			<h1>Contact Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Map Section 
	<section class="map-section">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Map Boxed
				<div class="map-boxed">
					<!-- Map Outer 
					<div class="map-outer">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.935775015146!2d-0.17030448573560417!3d5.576513634994676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9abdf660d3e5%3A0x20c950e311e28d60!2s9%205th%20Circular%20Rd%2C%20Accra!5e0!3m2!1sen!2sgh!4v1665858649125!5m2!1sen!2sgh" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Send us a message</h2><br>
				
			</div>
			<!-- Contact Form -->
			<div class="contact-form">
				
				<!--Contact Form-->
				<form method="post" action="send_consult.php" id="contact-form">
					<div class="row clearfix">
					
						<div class="col-lg-4 col-md-6 col-sm-12 form-group">
							<input type="text" name="fname" placeholder="Name" required>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-12 form-group">
							<input type="email" name="email" placeholder="Email" required>
						</div>
						
						<div class="col-lg-4 col-md-12 col-sm-12 form-group">
							<input type="text" name="phone" placeholder="Phone" required>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
							
							<input name="submit" type="submit" class="theme-btn btn-style-two" id="submit" value="Submit now">
							
						</div>
						
					</div>
				</form>
				
				<!--End Contact Form -->
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our Infromation</h2>
			</div>
			<div class="row clearfix">
			
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-location-pin"></div>
						<h5>Location</h5>
						<div class="text">No.13 5th Circular Road Labone, <br> Accra- Ghana</div>
					</div>
				</div>
				
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-smartphone"></div>
						<h5>Phone</h5>
						<ul class="info-list">
							<li><a href="">+233 (0) 505 679 907</a><br><br></li>
							
						</ul>
					</div>
				</div>
				
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-email-3"></div>
						<h5>Email</h5>
						<ul class="info-list">
							<li><a href="mailto:info@markinandassociatesgh.com">info@markinandassociatesgh.com</a><br><br></li>
							
						</ul>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->
	
	<!-- Clients Section -->
	
	<!-- End Clients Section -->
	
	<!-- CTA Section 
	<section class="cta-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="image">
					<img src="images/resource/cta.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Speak With Our <br> Experts Today!</h2>
					<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get a quote <i class="arrow flaticon-right"></i></span></a>
				</div>
				<div class="hammer-image">
					<img src="images/resource/hammer.png" alt="" />
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->
	
	<!-- Main Footer -->
    <?php
    include('footer.php')
    ?>
    <!-- end of footer-->
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>