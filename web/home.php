<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('home.html');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>One Stop</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		 <!---- animated-css ---->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		  <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<div class="bg">
		<!----- start-header---->
			<div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="home.php"><img src="images/chatur1.png" title="onestoplogo" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#port" class="scroll">One Stop Card</a></li>
								<li><a href="#about" class="scroll">About us</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
								<li><a href="team.php">Team</a></li>
								<li><a href="#">Hello, <?php echo $row['userName']; ?></a></li>
								<li><a href="logout.php">Logout</li>		
							</ul>
							<a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- banner ---->
			<div class="banner wow fadeIn" data-wow-delay="0.5s">
				<div class="container">
					<div class="banner-info text-center">
						<h1>Keep Calm And Save Money</h1><br />
						<span> </span>
						<p>Get Discounts With One Stop Card</p>
					</div>
				</div>
			</div>
		</div>
			<!---- banner ---->
			<!--- services --->
			<div id="products" class="products">
				<div class="container">
					<div class="service-head text-center">
					<img src="images/hotel.gif" title="menu" />
					</div>
					
				
					

				</div>
			</div>
			<!--- services --->
			<div class="clearfix"> </div>
			<!--- One Stop Card ---->
			<div id="port" class="expertise">
				<div class="expertice-grids">
					<div class="col-md-8 expertice-left-grid wow fadeInLeft" data-wow-delay="0.4s">
						<div class="expertise-head">
							<h3>One Stop Card</h3>
							<p>This is your License to get Discounts and save up lot of money. Tap this card behind your mobile device and get discounts instantly. Only available on our website.</p>
						</div>
						<div class="expertise-left-inner-grids">
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon1"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>Pocket design</h4>
									<p>One Stop Card is portable and can easily fit inside your wallet and even your pocket.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon2"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>Cash on delivery</h4>
									<p>Our cash on delivery system ensures buyers satisfaction. Pay only when<br> you recieve the product.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon3"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>All Star Support Staff</h4>
									<p>Having problems? Our support staff will help you go through any problem you face.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon4"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>Top notch security</h4>
									<p>One Stop Card is very secure. Your information is secured with us.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<a class="leran-more" href="#">Buy Now</a>
					</div>
					<div class="col-md-4 expertice-right-grid wow fadeInRight" data-wow-delay="0.4s">
						
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!--- Other Expertise ---->

			<!---- about ---->
			<!---start-about---->
		<div div id="about" class="about">
			<div class="wrap"> 
				<div class="about-head">
					<h1>About us</h1>
					<span> </span>
				</div>
				<!---start-about-time-line---->
				<div class="about-time-line">
					<li>
							<div class="cbp_tmicon img1"> </div>
							<div class="cbp_tmlabel wow fadeInLeft" data-wow-delay="0.4s">
								<h2>April 2016 Our Humble Beginnings</h2>
								<p>In our college days searching for discounts was very hectic. Our small team decided to build something for the community that would benefit all. So our journey began on this day!</p>
							</div>
					</li>
					<li>
							<div class="cbp_tmicon1 img2"> </div>
							<div class="cbp_tmlabel cbp_tmlabel1 wow fadeInRight" data-wow-delay="0.4s">
								<h2>June 2016 Facing Startup Battles </h2>
								<p>As any startup we struggled a lot. A lot of pressure was upon us. But we did not loose hope. We keep working on our project days and night. Gathered every bit of information that would help us to achieve success.</p>
							</div>
					</li><br />
					<li>
							<div class="cbp_tmicon2 img3"> </div>
							<div class="cbp_tmlabel wow fadeInLeft" data-wow-delay="0.4s">
								<h2>June 2016 Enter The Dark Days </h2>
								<p>We were not getting the necessary response. We were in devastating situation. Not getting sponsers was the biggest problem. But we kept on searching until finally we started bouncing back.</p>
							</div>
					</li>
					<li>
							<div class="cbp_tmicon3 img4"> </div>
							<div class="cbp_tmlabel cbp_tmlabel1 wow fadeInRight" data-wow-delay="0.4s">
								<h2>July 2016 Our Triumph </h2>
								<p>After lots of struggle we finally partnered up with a huge company and started developing One stop Card. We are growing in numbers and will definately grow in popularity as we keep moving forward.</p>
							</div>
					</li>
					<li>
							<div class="cbp_tmicon4 img5"> </div>
					</li>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				</div>
				<!---//End-about-time-line---->
			<!---- about ---->
		</div>

			<!--- business partners ---->
			<div id="services" class="services">
					<div class="service-head text-center">
						<h2>Business Partners</h2>
						<span> </span>
						</div>
</div>
					<div class="col-md-4 portfolio-top-right-inner wow fadeInRight" data-wow-delay="0.4s">
						
					</div>
					<div class="clearfix"> </div>
					<!---- portfolio-works ---->
					<div class="portfolio-works">
						<div class="col-sm-2 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/pic5.png" title="name" />
							</div>
						</div>
						<div class="col-sm-2 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/pic7.png" title="name" />
							</div>
						</div>
						<div class="col-sm-2 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/pic10.png" title="name" />
							</div>
						</div>
						<div class="col-sm-2 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/pic8.png" title="name" />
							</div>
						</div>
						<div class="col-sm-2 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/pic6.png" title="name" />
							</div>
						</div>
						<div class="col-sm-2 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/pic9.png" title="name" />
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!---- portfolio-works ---->
				</div>
			</div>
			<!--- portfolio ---->
			

			<!---- contact --->
			<div id="contact" class="contact">
				<div class="container">
				<div class="contact-grids">
					<div class="col-md-6">
						<div class="contact-left wow fadeInRight" data-wow-delay="0.4s">
							<h3>Contact Us</h3>
							<label>Don't be shy, drop us an email and say hello! We are a really nice bunch of people :)</label>
							<div class="contact-left-grids">
								<div class="col-md-6">
									<div class="contact-left-grid">
										<p><span class="c-mobi"> </span>(+91) 9762393255</p>
										<p><span class="c-twitter"> </span><a href="#">@OneShop</a></p>
										<p><span class="c-pluse"> </span><a href="#">plus.com/OneShop</a></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="contact-right-grid">
										<p><span class="c-msg"> </span><a href="mailto:oneshop@gmail.com">oneshop@gmail.com</a></p>
										<p><span class="c-face"> </span><a href="#">facebook.com/OneShop</a></p>
										
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-right wow fadeInLeft" data-wow-delay="0.4s">

							<form name="sentMessage" class="well" id="contactForm"  novalidate>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--- copy-right ---->
				<div class="copy-right text-center">
					<p>Copyrights@ <a href="#">OneStopCard</a> <a href="http://www.dmca.com/Protection/Status.aspx?ID=2c3c3145-accd-4e84-84a5-941e559aa747" title="DMCA.com Protection Status" class="dmca-badge"> <img src="http://images.dmca.com/Badges/DMCA_logo-grn-btn100w.png?ID=2c3c3145-accd-4e84-84a5-941e559aa747" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></p>
					<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
				<!--- copy-right ---->
			</div>
			</div>
			<!---- contact --->
		</div>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
 <script src="./js/bootstrap.min.js"></script>
 <script src="./js/jqBootstrapValidation.js"></script>
 <script src="./js/contact_me.js"></script>

	</body>
</html>

