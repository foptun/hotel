<?php
session_start();
require_once 'connect/connect.php';
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cactus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<!-- <link rel="stylesheet" href="css/bootstrap-datepicker.min.css"> -->
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	<!-- my custom -->

	<link href="jquery-datepicker/jquery-ui.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Cactus</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						
					<?php
					include('menu.php');
					?>
					
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->


	<?php
	if (isset($_REQUEST['menu'])) {
		include $_REQUEST['menu'] . '.php';
		// include 'romm.php';
		// include 'home.php';
	} else {
	?>
		<script type="text/javascript">
			window.location = 'index.php?menu=home';
		</script>
	<?php
	}
  	?>
	

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
						Designed by <a href="#" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="#" target="_blank">Unsplash</a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>

	<!-- my custom -->
	<script src="jquery-datepicker/jquery-ui.min.js"></script>


	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<!-- <script src="js/bootstrap-datepicker.min.js"></script> -->
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

	
	<script type="text/javascript">
        $(document).ready(function () {
            $("#dateCheckIn").datepicker({
                dateFormat: "dd-M-yy",
                minDate:0,
                onSelect: function (date) {
                    var date2 = $('#dateCheckIn').datepicker('getDate');
                    date2.setDate(date2.getDate()+1);
                    $('#dateCheckOut').datepicker('setDate', date2);
                    //sets minDate to dateofbirth date + 1
                    $('#dateCheckOut').datepicker('option', 'minDate', date2);
                }
            });
            $('#dateCheckOut').datepicker({
                dateFormat: "dd-M-yy",
				minDate:0,
                onClose: function () {
                    var dt1 = $('#dateCheckIn').datepicker('getDate');
                    console.log(dt1);
                    var dt2 = $('#dateCheckOut').datepicker('getDate');
                    if (dt2 <= dt1) {
                        var minDate = $('#dateCheckOut').datepicker('option', 'minDate');
                        $('#dateCheckOut').datepicker('setDate', minDate);
                    }
                }
            });
        });
    </script>

	<!-- Scroll to Booking Header : my custom -->
	<script type="text/javascript">
		$(document).ready(function () {
			var pathFocus = window.location.href.split("/").pop();

			pathFocus = pathFocus.split("&");
			
			console.log(pathFocus[0]);
			
			var urlFocus = [
				"index.php?menu=room",
				"index.php?menu=booking-form",
				"index.php?menu=booking-form-payment",
				"index.php?menu=booking-form-payment",
				"index.php?menu=thankyou",
				"index.php?menu=payment-list",
				"index.php?menu=payment-bill",
				"index.php?menu=payment-end",
				"index.php?menu=payment-promptpay-bill"
			];
			
			for(var i = 0; i < urlFocus.length; i++){
				// alert(' focus = '+urlFocus[i]);
				if(pathFocus[0] == urlFocus[i]){
					$('html, body').animate({
						scrollTop: $('#booking-header').offset().top-50
					}, 'slow');
				}
			}

		});

	</script>

	<!-- Custom Active Menu -->
	<script type="text/javascript">
		$(document).ready(function () {
			var path = window.location.href.split("/").pop();

			path = path.split("&");

			var target = $('ul li a[href="' + path[0] + '"]');
			target.addClass('active');

			//target.parent().addClass('active');

		//                $('div#menu_header li').click(function (e) {
		//                    $('div#menu_header li').removeClass('active');
		//                    $(e.currentTarget).addClass('active');
		//                });

		});

	</script>
	<!-- Custom Active Menu -->

	<script type="text/javascript">
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#ex_img').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

</body>
</html>
