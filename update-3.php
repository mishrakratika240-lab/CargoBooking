<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
        include_once 'db-connection.php';
        $id = $_GET['id'];
        $class = mysqli_query($conn,"SELECT * FROM contact_us WHERE id = $id");
        $value = mysqli_fetch_assoc($class);
        session_start();
?>

    <!-- // session_start(); -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Cargo Transportation Category Bootstrap Responsive Web Template | Contact Us :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Freight Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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

<body>
    <!-- header -->
    <header id="home"  style="background: lightblue;">
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.php" style="color: royalblue; !important;"> Mishra's Cargo</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="booking.php">Booking</a></li>

                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Others <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Others <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="booking.php" class="drop-text">Booking</a></li>

                                    <li><a href="index.php" class="drop-text">Blog</a></li>
                                    <li><a href="single.php" class="drop-text">Single Page</a></li>
                                    <li><a href="index.php" class="drop-text">Services</a></li>
                                    <li><a href="about.php" class="drop-text">More</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php" >Contact Us</a></li>
                            <li class="ml-xl-5 ml-lg-2 mt-lg-0 mt-sm-4 mt-3">
                                <a href="login.php" class="reqe-button" style="background:seagreen;padding: 9px;!important"> Admin Login</a>
                                <!-- <a href="register.html" class="reqe-button"  style="background:seagreen;">Register</a> -->
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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- contact -->
    <section class="contact-wthree align-w3" id="contact">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">contact us
                </h4>
                <p class="sub-title">
                    17/3 - E, The Mall, Behind Meghdoot Hotel, Kanpur 208001 · 2.5 km
                        0512 235 5260
                            cargo.com
                </p>
            </div>
            <div class="mx-auto text-center">
              <!--   <iframe class="mt-lg-4 contact-form-wthreelayouts" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365911!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1536917325197"
                    allowfullscreen></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57156.18964378137!2d80.26511482167967!3d26.44728710000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c471b64511099%3A0x8271d15e6c9b16e2!2sFriends%20Cargo%20India!5e0!3m2!1sen!2sin!4v1722944364393!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- //footer right -->
            </div>

            <div class="row mt-4">
                <div class="col-lg-7">
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
                    <h5 class="cont-form">send message</h5>
                    <div class="contact-form-wthreelayouts">
                        <form action="update-conn-3.php?id=<?php echo $value['id']?>;" method="post" class="register-wthree">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" value="<?php echo $value['your_name']?>" type="text" placeholder="name" name="your_name">
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" value="<?php echo $value['mobile']?>" type="number" placeholder="xxxx xxxxx" name="mobile">
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@email.com"  value="<?php echo $value['email']?>" name="email">
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" name="message" value="<?php echo $value['message']?>" class="form-control"></textarea >
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit"  name="submit" value="update" name="update" class="btn btn-w3layouts btn-block bg-theme text-wh w-100 font-weight-bold text-uppercase">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <h5 class="cont-form">get in touch</h5>
                    <div class="row flex-column">
                        <div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:example@email.com" class="d-block">kratikamishra0821@gmail.com</a>
                                <a href="mailto:example@email.com" class="my-2 d-block">kratikamishraa1@gmail.com</a>
                                <!-- <a href="mailto:example@email.com">kratikamishra0821@gmail.com</a> -->
                            </div>
                        </div>
                        <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3"></span>
                            <div class="d-flex flex-column">
                                <a href="tel:+91 623 123 7890"><p>+91 623 123 7890</p></a>
                                <a href="tel:+91 623 123 7890"><p class="my-1">+91 612 123 7890</p></a>
                                <a href="tel:+91 623 123 7890"><p>+91 346 123 7890</p></a>
                            </div>
                        </div>
                        <div class="contact-w3">
                            <span class="fa fa-home mb-3"></span>
                            <address>123, Industrial Area<br>Near Kanpur Railway Station
                                        Kanpur.<br> 208001    Uttar Pradesh, India
                            </address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="container">
            <div class="row p-sm-4 px-3 py-3">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a class="navbar-brand" href="index.php">
                           About mishra's  Cargo
                        </a>
                    </h2>
                    <div class="fv3-contact mt-2">
                        <p>
                            <a href="mailto:example@email.com">kratikamishra0821@gmail.com</a>
                        </p>
                    </div>
                    <div class="fv3-contact my-2">
                        <p>+916 123 7890</p>
                    </div>
                    <div class="fv3-contact">
                        <p>"Every cargo shipment tells a story of connection and commerce, bridging worlds through every mile."
                            <br><!-- 123, Industrial Area
                            Near Kanpur Railway Station
                            Kanpur, 208001
                            Uttar Pradesh, India -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Navigation</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="index.php">
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
                      <!--   <h3 class="mb-3 w3f_title">Links</h3>
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
        
          <!--  <a href="http://w3layouts.com"> W3layouts.</a>
     -->   </p>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>