
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact |  Africa Energy Solutions Limited</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="We help power the world by exploring for, producing, and extracting oil and natural gas. Learn more about these valuable resources and the innovative and safe ways we are developing them">
	<meta charset="utf-8">
	<meta name="keywords" content="Energy Solutions, Energy Solutions Company in Lagos, Energy Solutions Company in Nigeria, Oil & Gas Companies in Lagos, Oil & Gas Companies, Power Generation Company, Power Generation. Transmission and Distribution Sector" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>
<!-- Navigation -->
<?php
	include('menu.php');
?>
	<!-- //Navigation -->

<!-- inner page banner -->
<section class="inner_page_banner text-center pt-4" style="background: url(./images/ccb.jpg) no-repeat 0px 0px;">
	<!-- <h2 class="page_heading text-uppercase pt-md-5 pt-sm-4">Contact</h2> -->
	<!-- <h4 class="text-uppercase pt-2"><a href="index.html">Home</a> - Contact Page</h4> -->
</section>
<!-- //inner page banner -->

<!-- Contact -->
<section class="contact py-5" id="contact-us">
	<h3 class="heading text-center text-uppercase">Contact Us</h3>
	<!-- <p class="heading-bottom text-center font-italic mb-5">Industrial Revolution Business</p> -->
		<div class="container">
			<div class="row contact-main">
				<div class="col-md-6 contact-left text-center">
					<address>
						<p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Africa Energy Solutions Limited</p>
						<p>Penthouse Suite,</p>
						<p>5th Floor Plot 1221, Ahmadu Bello Way</p>
						<p>Victoria Island, Lagos, Nigeria.</p>
						<p><i class="fas fa-phone" aria-hidden="true"></i>+234 806 2970 1339</p>
						<p><i class="fas fa-envelope" aria-hidden="true"></i> <a href="info@africaenergysolutionsltd.com">info@africaenergysolutionsltd.com</a></p>
					</address>
					<div class="social-icons">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7740401192887!2d3.4153604147701877!3d6.4230718953528525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8acc8291bd99%3A0x6910fac8f6df459a!2s5th%20Floor%2C%201221%20Ahmadu%20Bello%20Way%2C%20Victoria%20Island%2C%20Lagos!5e0!3m2!1sen!2sng!4v1603894141454!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				
				<div class="contact-wthree">
						<h3>Send Us A Message</h3><br>
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required=""> 
						<input class="email" name="email" type="email" placeholder="Email" required="">
						<input type="text" name="phone" placeholder="Phone Number" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT" style="width: 100%;">
					</form>
				</div>
			</div>
		</div>
</section>
<!-- //Contact -->

<!-- footer -->
<?php
	include('footer.php');
?>
<!-- //footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
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
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->
</body>
</html>