<?php
  session_start();
  if (!isset($_SESSION['email'])) {

      $_SESSION['error_message'] ="Something went wrong please  login  first";
      header('location:login.php');
      
  }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 25px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/*success{
  border-color: solid;
  background-image: linear-gradient(to bottom right, skyblue, yellow);
  padding: 68px;
}
.success1{
  border-color: solid;
  background-image: linear-gradient(to bottom right, yellow,skyblue);
  padding: 68px;
}
.success2{
  border-color: solid;
  background-image: linear-gradient(to bottom right, skyblue, white);
  padding: 68px;
}
.success3{
  border-color: solid;
  background-image: linear-gradient(to bottom right, skyblue, white);
  padding: 68px;
}*/
.img{
   background-image: white;
   /* color:; */
    color: green;
    font-size: 30px;
    animation: blink 1s infinite; 
    background: linear-gradient(to right, orange , yellow);

}
.img1{
   background-image: white;
   /* color:; */
    color: grey;
    font-size: 30px;
    box-shadow: 10px 10px;
/*    animation: blink 1s infinite; */
    background: linear-gradient(to bottom right, skyblue,whitesmoke);

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
</style>
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  margin: 15px;
  float: left;
  width: 22%;
  padding: 10px;
  height: 150px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>

</head>
           
<body style="background: whitesmoke;">

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dashboard.php">Home</a>
      <a href="dashboard1.php">Registration</a>
      <a href="dashboard2.php">Booking</a>
      <a href="dashboard3.php">Contact</a>
      <a href="login.php">logout</a>
      <a href="reset-conn.php">Reset </a>     
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
    </script>
    <div class="container " style="margin-left:22px;width: auto;">
      <h2>
          <marquee direction="left"style="color:red;  font-size: 40px;
                ">Mishra's Cargo Booking
          </marquee>
      </h2>
    </div>

    <div id="main">
      <h1 class="img" style="text-align:center;">ADMIN  DASHBOARD
      </h1>

      <div class="container">
               <div class="row">
                      <div class="column img1" style="background-color:;">
                        <a class="success"  href="dashboard1.php"style=" ">
                            <!-- <i class="fa fa-bar-chart" style="background-color:red;"></i> -->
                            <b>Register<br><i class="fa fa-bar-chart" style="background-color:;"></i>
                             <?php include_once 'db-connection.php';
                            $result = mysqli_query($conn,"SELECT count(*) as total FROM user_registrations");
                                // print_r('string');die();
                            $data = mysqli_fetch_assoc($result);
                            echo $data['total'];
                          ?></b>
                        </a>
                      </div>
                      <div class="column img1" style="background-color:;">
                        <a class="success"  href="dashboard2.php"style=" ">
                            <!-- <i class="fa fa-bar-chart" style="background-color:red;"></i> -->
                            <b>Booking<br>
                              <i class="fa fa-book" aria-hidden="true"></i>
                                    <?php
                                        include_once 'db-connection.php';

                                      $result = mysqli_query($conn,"SELECT count(*) as total FROM cargo_bookings");
                          // print_r('string');die();
                                      $data = mysqli_fetch_assoc($result);
                                      echo $data['total'];
                                    ?></b>
                        </a>
                      </div>
                      <div class="column img1" style="background-color:;">
                        <a class="success"  href="dashboard3.php"style=" ">
                           
                            <b>Contact<br><i class="fa fa-phone" style="font-size:24px"></i>



                                  <?php

                                      include_once 'db-connection.php';

                                    $result = mysqli_query($conn,"SELECT count(*) as total FROM contact_us");
                        // print_r('string');die();
                                    $data = mysqli_fetch_assoc($result);
                                    echo $data['total'];
                                  ?>
                  </b>
                        </a>
                      </div>
                      <div class="column img1" style="background-color:;">
                        <a class="success"  href=""style=" ">
                            <i class="" style="background-color:red;"></i>
                            <b>Soon<i class="fa fa-spinner fa-spin" ></i>
                                 
                        </a>
                      </div>
                    <br>
                    <br>
                    <div class="row">
                     
                      <div class="column img1" style="background-color:;">
                        <a class="success"  href=""style=" ">
                            <i class="" style="background-color:red;"></i>
                            <b>Soon<i class="fa fa-spinner fa-spin" ></i>
                                 
                        </a>
                      </div><div class="column img1" style="background-color:;">
                        <a class="success"  href=""style=" ">
                            <i class="" style="background-color:red;"></i>
                            <b>Soon<i class="fa fa-spinner fa-spin" ></i>
                                 
                        </a>
                      </div><div class="column img1" style="background-color:;">
                        <a class="success"  href=""style=" ">
                            <i class="" style="background-color:red;"></i>
                            <b>Soon<i class="fa fa-spinner fa-spin" ></i>
                                 
                        </a>
                      </div><div class="column img1" style="background-color:;">
                        <a class="success"  href=""style=" ">
                            <i class="" style="background-color:red;"></i>
                            <b>Soon<i class="fa fa-spinner fa-spin" ></i>
                                 
                        </a>
                      </div>
                      
              </div>
      </div>
    </div>

</body>
</html> 


  

         
            
        <!-- <div class="col-md-12"> -->
                 <!--  </div>
                </div> -->
                <!--   </div>
                </div> -->
        <!-- </div>         -->

   
