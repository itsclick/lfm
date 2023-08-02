<footer class="main-footer">
		<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
				<!-- Scroll To Top -->
				<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Useful links</h5>
									<ul class="footer-list">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About Us</a></li>
										<li><a href="practisearea.php">Expertise</a></li>
										<li><a href="contact.php">Contact Us</a></li>
									</ul>
								</div>
							</div>

                                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h5>Office Info</h5>
                                    <ul>
                                        
                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <a href="tel:+00-9-0000-9999">+233 (0) 505 679 907</a>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-email-2"></span>
                                            <a href="mailto:Info@counsellawfirm.com">info@markinandassociatesgh.com</a>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-maps-and-flags"></span>
                                            No.13 5th Circular Road Labone, <br> Accra- Ghana
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h5>Subscribe Now</h5>
                                    <div class="text">You always want to read from us? Sign up for our news letters<br>
                                        <?php
                                        if(isset($_POST['submit'])){
    $to = "sammyglobalworld@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    
    $subject = "Subscribe Form";
    $message = $email ; 
    
    $headers = "From:" . $from;
   
    mail($to,$subject,$message,$headers);

    echo " Thank you for subscribing! ";


    }
                                        ?>

                                    </div>

                                    <div class="newsletter-form">
                                        <form method="post" action="index.php">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Enter Email Address" required><br>
                                                <input type="submit" class="theme-btn btn-style-one" name="submit" value="Subscribe Now">
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
							
						</div>
					</div>
					
				
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">Copyright <?php echo date('Y');?>, Markin & Associates. All Rights Reserved.</div>
			</div>
		</div>
	</footer>