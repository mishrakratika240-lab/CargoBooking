<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Cargo Transportation Category Bootstrap Responsive Web Template | Login :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Freight Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
	<style>
.btn {
  background-color: lightgreen;
  border: none;
  color: black;
/*  padding: 2px 20px;*/
  text-align: center;
  font-size: 15px;
/*  margin: 2px 2px;*/
  transition: 0.3s;
}

.btn:hover {
  background-color: #3e8e41;
  color: red;
}
</style>

<body class="text-muted">
	<!-- header -->
	<header id="home" style="background: lightblue;">
		<div class="container">
			<div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
				<!-- logo -->
				<div id="logo">
					<h1><a href="index.php" style="color: royalblue !important;"> Mishra's Cargo</a></h1>
				</div>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_w3ls ml-lg-5">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="../index.php" class="btn">Home</a></li>
							<li><a href="../about.php"class="btn">About Us</a></li>
							<li><a href="../portfolio.php"class="btn">Portfolio</a></li>
							<li>
								<!-- First Tier Drop Down -->
								<label for="drop-2" class="toggle toogle-2"class="btn">Others <span class="fa fa-angle-down" aria-hidden="true"></span>
								</label>
								<a href="#"class="btn">Others <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-2" />
								<ul>
									<li><a href="../booking.php" class="drop-text">Booking</a></li>

									<li><a href="../index.php" class="drop-text">Blog</a></li>
									<li>
									<a href="../single.php" class="drop-text">Single 		Page
									</a>
									</li>
									<li><a href="../index.php" class="drop-text">Services</a></li>
									<li><a href="../about.php" class="drop-text">More</a></li>
								</ul>
							</li>
							<li><a href="contact.php"class="btn">Contact Us</a></li>
							<li class="ml-xl-5 ml-lg-2 mt-lg-0 mt-sm-4 mt-3">
								<a href="login.php" class="reqe-button"style="background: darkblue;padding: 9px;!important;letter-spacing:0px;" >Admin login</a>
								<!-- <a href="register.php" class="reqe-button" style="background:darkblue">Register</a> -->
							</li>
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- inner banner -->
	<div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
	</div>
	<!-- //inner banner -->
	<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb d-flex justify-content-center">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page"> Admin Login</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->

	<!-- login  -->
	<div class="modal-body  text-muted ">
		<h1>
			<span style="color: darkred; margin-bottom:89px; font-style: bold;">
				You Are In Right Place
				<br>
			</span>
		</h1>
		<div  class=" text-muted">
		<!-- style="border-style: solid; border-color: black; margin-left: 90px; margin-right: 95px; width: 450px;  box-shadow: 0 25px 25px rgba(0,0,0,0.3);margin-top:22px"> -->
			<form action="user-conn-login.php" method="post" class="p-sm-3">
            <?php
                if(isset($_SESSION['success_message']))
                {

                    echo '<div class="alert alert-success">
                        <button type= "button" class= "close" data-dismiss="alert" aria-hidden="true">x</button>'.
                    $_SESSION['success_message'].'</div>';
                }
                elseif(isset($_SESSION['error_message']))
                {
                    echo'<div class="alert alert-danger">
                        <button type= "button" class= "close" data-dismiss= "alert" aria-hidden= "true">x</button>'.
                    $_SESSION['error_message'].'</div>';
                }

                        session_destroy();
            ?>
				<div class="form-group text-muted ">
					<label for="recipient-name" class="col-form-label"><b>Username</b></label>
					<input type="text" class="form-control" placeholder="your name" name="email" id="recipient-name" required="">
				</div>
				<div class="form-group text-muted">
					<label for="password" class="col-form-label"><b>Password</b></label>
					<input type="password" class="form-control" placeholder="*****" name="password" id="password" required="">
				</div>
				<a href="forget-conn.php" class="float-end text-muted ml-sm-2 ">Forget Password ?</a>
				<div class="right-w3l">
				</div>
					<input type="submit" name ="submit" class="form-control bg-theme" value="Login">
				<div class="row sub-w3l my-3">
					<div class="col-sm-6 sub-w3layouts_hub">
						
					</div>
					<!-- <div class="col-sm-6 forgot-w3l text-sm-right">
						<a href="#" class="text-secondary">Forgot Password?<b>&#128526;
						</b></a>
				</div> -->
			</div >
			<div style="margin-top: 22px;">
				<p class="text-center dont-do text-secondary">Don't have an account?
					<a href="register.php" class="text-theme-2 font-weight-bold">
						Register Now</a>
				</p>
			</div>
				</div>
	</form>
	</div>
	<!-- //login -->

	<!-- footer -->
	<footer class="footer py-md-5 pt-md-3 pb-sm-5">
		<div class="container">
			<div class="row p-sm-4 px-3 py-3">
				<div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
					<h2>
						<a class="navbar-brand" href="index.php">
							 About mishra's Cargo
						</a>
					</h2>
					<div class="fv3-contact mt-2">
						<p>
							<a href="mailto:example@email.com">kratikamishra0821@gmail.com</a>
						</p>
					</div>
					<div class="fv3-contact my-2">
						<p>+91 1234567889</p>
					</div>
					<div class="fv3-contact">
						<p>"Every cargo shipment tells a story of connection and commerce, bridging
						         worlds through every mile."
							<!-- 90 nsequursu dsdesdc, -->
							<br><!-- 123, Industrial Area
							Near Kanpur Railway Station
							Kanpur, 208001
							Uttar Pradesh, India. -->
						</p>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
					<div class="footerv2-w3ls">
						<h3 class="mb-3 w3f_title">Navigation</h3>
						<hr>
						<ul class="list-w3pvtits">
							<li>
								<a href="./index.php">
									Home
								</a>
							</li>
							<li class="my-2">
								<a href="about.php">
									About Us
								</a>
							</li>
							<li class="my-2">
								<a href="portfolio.php">
									Portfolio
								</a>
							</li>
							<li class="mb-2">
								<a href="single.php">
									Blog
								</a>
							</li>
							<li>
								<a href="contact.php">
									Contact Us
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
					<div class="footerv2-w3ls">
						<h3 class="mb-3 w3f_title">Links</h3>
						<hr>
						<ul class="list-w3pvtits">
							<li>
								<a href="about.php">
									Our Mission
								</a>
							</li>
							<li class="my-2">
								<a href="single.php">
									Latest posts
								</a>
							</li>
							<li class="my-2">
								<a href="portfolio.php">
									Explore
								</a>
							</li>
							<li class="mb-2">
								<a href="contact.php">
									Find us
								</a>
							</li>
							<li>
								<a href="index.php">
									Privacy Policy
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
					<div class="footerv2-w3ls">
						<h3 class="mb-3 w3f_title">Address</h3>
						<hr>
						<ul class="list-w3pvtits">
							<li>
								<a href="single.php">
									123, Industrial Area
									Near Kanpur Railway Station
									Kanpur, 208001
									Uttar Pradesh, India
								</a>
							</li>
							<li class="my-2">
								<a href="portfolio.php">
									<!-- our work -->
								</a>
							</li>
							<li class="my-2">
								<a href="about.php">
									<!-- Explore -->
								</a>
							</li>
							<li class="mb-2">
								<a href="contact.php">
									<!-- contact us -->
								</a>
							</li>
							<li>
								<a href="index.php">
									<!-- references -->
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
					<div class="footerv2-w3ls">
						<!-- <h3 class="mb-3 w3f_title">Links</h3>
						<hr>
						<ul class="list-w3pvtits">
							<li class="my-2">
								<a href="portfolio.html">
									Explore
								</a>
							</li>
							<li>
								<a href="about.html">
									Our Mission
								</a>
							</li>
							<li class="my-2">
								<a href="single.html">
									Latest posts
								</a>
							</li>

							<li class="mb-2">
								<a href="contact.html">
									Find us
								</a>
							</li>
							<li>
								<a href="index.html">
									Privacy Policy
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //footer bottom -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	 <div class="cpy-right text-center bg-theme">
		<p class="text-wh"> Designed by  kratika Mishra
			<!-- <a href="http://w3layouts.com"> W3layouts.</a> -->
		</p>
	</div> 
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>