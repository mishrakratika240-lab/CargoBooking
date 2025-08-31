<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

    include_once 'db-connection.php';
        $id = $_GET['id'];
        $class = mysqli_query($conn,"SELECT * FROM cargo_bookings WHERE id = $id");
        $value = mysqli_fetch_assoc($class);
    session_start();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Cargo Transportation Category Bootstrap Responsive Web Template | Single Page </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Freight Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <style >
        .Trans{
            background: #ffffff63;
            transition: width 2s, height 2s, transform 2s;
        }

        .Trans:hover {
          width: 500px;
          
          transform: rotate(360deg);
        }  
        .back{
            background-image: url("images/45.jpg");
            background-repeat: no-repeat;
            background-size: cover;

/*            background-color: lightblue;*/

           

        }  
        
        @keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .blink {
          
            color: green;
            animation: blink 1.5s infinite; 
        }

          
    </style>
        <style>
/*.btn {
  background-color: #lightgreen;
  border: none;
  color: black;
  padding: 1px 20px;
  text-align: center;
  font-size: 14px;
  margin: 2px 2px;
  transition: 0.3s;
}
*/
.btn1:hover {
  background-color: #3e8e41;
  color: red;
}
</style>
    <script>
        // addEventListener("load", function () {
        //     setTimeout(hideURLbar, 0);
        // }, false);

        // function hideURLbar() {
        //     window.scrollTo(0, 1);
        // }
    </script>
    <style >
        .popup{
            top: 0%;
            left: 50%;
            transform: translate(-50%,-50%) scale(0.1);
            visibility: hidden;
            transition: transform 0.4s,top 0.4s;


        }
        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);

        }
        

    </style>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link href="css/single.css" type="text/css" rel="stylesheet" media="all">
    <!-- Single CSS -->
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
    <header id="home" style="background: lightblue;">
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.php" style="color: royalblue; !important; ">Mishra's Cargo</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.php" class="btn1">Home</a></li>
                            <li><a href="about.php" class="btn1">About Us</a></li>
                            <li><a href="portfolio.php" class="btn1">Portfolio</a></li>
                            <li><a href="booking.php" class="btn1">Booking</a></li>

                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Others <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#" class="btn1">Others <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="booking.php" class="drop-text">Booking</a></li>
                                    <li><a href="index.php" class="drop-text">Blog</a></li>
                                    <li><a href="single.php" class="drop-text">Single Page</a></li>
                                    <li><a href="index.php" class="drop-text">Services</a></li>
                                    <li><a href="about.php" class="drop-text">More</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.php" class="btn1">Contact Us</a></li>
                            <li class="ml-xl-5 ml-lg-2 mt-lg-0 mt-sm-4 mt-3">
                                <a href="admin\login.php" class="reqe-button" style="background:seagreen;padding: 9px;!important; letter-spacing: 0px;" class="btn1"> Admin Login</a>
                                <!-- <a href="register.html" class="reqe-button" style="background:seagreen;">Register</a> -->
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
    <!-- <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center"> -->
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Booking</li>
        </ol>
    </nav>
        <!-- //breadcrumbs -->
    <div class="back">
        <!-- blog post-->
        <section class="post-wthree align-w3" id="blog">           
         <div class="container">
                <div class="wthree_pvt_title text-center">
                        <span class="blink" style="padding-bottom:12%;">
                    <h1 class="w3pvt-title" style="color: red; text-decoration: underline;font-size: 65px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            GIVE YOUR DETAILS THEN WE GO </span>
                        <!-- <h2> U+1F69A</h2> -->
                    </h1><h1><b>&#128666;</b></h1>
                   </div>
        </section>
        <!-- <div class="popup" id="popup"><img src="images/67.jpg">

                            <h2>Thank you</h2>
                            <p> Your booking  successfully done</p>
                            <button type="button" onclick="closePopup()">ok</button>


                        </div> -->

        <div style="border-style:#ffffff63;width: 500px;margin-left: 400px;background:#ffffff08;box-shadow: 0 25px 25px rgba(1,4,1,1.3);">

            <div class="Trans">

                <form action="update-conn-2.php?id=<?php echo $value['id']?>;" method="post" >
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


                    <h2 style="text-align: center;margin: 12px;background: lightyellow;"> PERSONAL DETAILS</h2>
                    <center>
                       <br> <label for="full_name" >  </label>
                        <input type="text" name="full_name" value="full_name" placeholder="Full Name" value="<?php echo $value['full_name'];?>"  required ></input>
                        <label for="email" >  </label>
                        <input type="email" name="email" value="email" placeholder="email" value="<?php echo $value['email'];?>required" ></input></br>
                        <br><label for="phone_number" >  </label>
                        <input type="text" name="phone_number" value="phone_number" placeholder="Phone number"value="<?php echo $value['phone_number'];?>required" required ></input>
                         <label  for="adhar_number">  </label>
                        <input type="text" name="adhar_number"  value="adhar_number" placeholder="Adhar number" value="<?php echo $value['adhar_number'];?>required"required ></input></br>

                        <h3 style="text-align: center; margin: 12px;text-decoration: underline;background: lightyellow;"> BOOKING DETAILS</h3>
                             <br><label for="mm/dd/yyyy" >  </label>

                        <input  type="date" name="booking_date" value="booking_date" placeholder="mm/dd/yyyy" value="<?php echo $value['booking_date'];?>"  required style="width: 35%;
    /*margin-right: 40% ;*/ margin-left:1px !important;" ></input>
     <!-- <label for="Pickup_time" >  </label> -->
                        <input type="time" name="booking_time" value="booking_time" placeholder="Pickup time" value="<?php echo $value['booking_time'];?>"required style="width:37%;
    margin-right: 2px;margin-left: 3px ;" ></input><br>
                        

                        <br>
                        <label for="pickup_location" >  </label>
                        <input type="text" name="pickup_location" value="pickup_location"  placeholder="Pickup_location"value="<?php echo $value['pickup_location'];?>"  required ></input>
                         <label >  </label>
                        <input type="text" name="drop_off_location" value="drop_off_location"value="<?php echo $value['drop_off_location'];?>" placeholder="Drop_off_location" required ></input>
                        <br>
                        <!-- <div style="margin-left: 12px;margin-right: 21px;width: 100% !important;"> -->
                           <br>
                           
                        <label  for="material_weight"></label>
                        <input type="text" name="material_weight" value="<?php echo $value['material_weight'];?>"placeholder=" material weight" style="width:75%;padding: 2px;"><br>
                        <br>
                        <label  for="material_unit"></label>
                        <input type="text" name="material_unit"value="<?php echo $value['material_unit'];?>" value="material_unit" placeholder=" material unit" style="width:75%;padding: 2px;"><br>
                        <br>
                        <label for="cargo_type">    </label>
                        <select  for="type"  name="cargo_type"  value="cargo_type"   placeholder=" cargo_type" style="width:75%;padding: 2px;" >
                            <option  value="plane">Plane</option>
                            <option value="train">Train</option>
                            <option value="ship">Ship</option>
                            
                        </select>
                        <br>
                        <br>
                    </center>
                        
                        <input type="submit" name="submit"onclick="openPopup()" value="submit" value="update"style="margin-left:25%;padding-right: 4px;background: aliceblue;">   
                        <input type="reset" name="reset" value="reset"style="margin-left:25%;margin-right:4%;padding-right: 4px; background: aliceblue;" >
                        <br>
                        <br>

                                        
                </form>

            </div>
        </div>

         <br>
         <!-- <script >
             
             let popup = document.getElementById("popup");
             function openPopup(){
                popup.classList.add("open-popup");

             }
             function closePopup(){
                popup.classList.remove("open-popup");

             }
         </script> -->
    </div>

    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="container">
            <div class="row p-sm-4 px-3 py-3">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a class="navbar-brand" href="index.php">
                           mishra's Cargo
                        </a>
                    </h2>
                    <div class="fv3-contact mt-2">
                        <p>
                            <a href="mailto:example@email.com">kratikamishra0821@gmail.com</a>
                        </p>
                    </div>
                    <div class="fv3-contact my-2">
                        <p>+91 456 123 7890</p>
                    </div>
                    <div class="fv3-contact">
                        <p>"Every cargo shipment tells a story of connection and commerce, bridging worlds through every mile."
                            <!-- +90 nsequursu dsdesdc, -->
                            <br><!-- 123, Industrial Area
Near Kanpur Railway Station
Kanpur, 208001
Uttar Pradesh, India --></p>
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
                        <h3 class="mb-3 w3f_title">Address</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="about.php">
123, Industrial Area
Near Kanpur Railway Station
Kanpur, 208001
Uttar Pradesh, India                                </a>
                            </li>
                            <li class="my-2">
                                <a href="single.php">
                                    <!-- Latest posts -->
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.php">
                                    <!-- Explore -->
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.php">
                                    <!-- Find us -->
                                </a>
                            </li>
                            <li>
                                <a href="index.php">
                                    <!-- Privacy Policy -->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="single.php">
                                    more
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.php">
                                    our work
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.php">
                                    Explore
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
                     <!--    <h3 class="mb-3 w3f_title">Links</h3>
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
        <p class="text-wh">   Designed by kratika mishra
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