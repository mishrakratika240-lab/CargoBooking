<?php
  session_start();
  if (!isset($_SESSION['email'])) {

      $_SESSION['error_message'] ="Something went wrong please  login  first";
      header('location:login.php');
    }
      
  include_once 'db-connection.php';
  $results  = mysqli_query($conn,"SELECT * FROM contact_us ");
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User list</title>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <style >
        {
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
      font-size: 36px;
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
    .img{
       background-image: white
       color:;
       
       font-size: 30px;
        color: green;
        animation: blink 1s infinite; 
        background: linear-gradient(to right, orange , yellow);
        width: auto;


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

  </style>
  <style >
              #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
              }

          #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
              }

          #customers tr:nth-child(even){background-color: #f2f2f2;}

          #customers tr:hover {background-color: #ddd;}

          #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
          }
  </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dashboard.php">Home</a>
      <a href="dashboard1.php">Registration</a>
      <a href="dashboard2.php">Booking</a>  
      <a href="dashboard3.php">Contact</a>
      <a href="login.php">Logout</a>
    </div>
       <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
       </span>
                    
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
         <h2>
            <marquee direction="left"style="color:red;  font-size: 40px;
                  ">Mishra's Cargo Booking
            </marquee>
          </h2>


    <div id="main">
      </div>
        <p class="img"style="text-align: center;">ADMIN  DASHBOARD</p>
                    
      </div>
      <div class="">
            <div class="row">
                  <div class="col-md-12">                   
                       
                    
            </div> 
          
            <div class="row">
              <!-- <a class="btn btn-success" href="dashboard.php">Add student</a> -->
              <div class="table-responsive" style="margin-left:">
                <table border="2"  class="table"id="customers">
                        <tr>
                          <th>id</th>
                          <th> Name</th>
                          <th>Mobile</th>
                          <th>email-id</th>
                          <th>message</th>
                          <th colspan="2" style="text-align:center;">Action</th>
                        </tr>
                    <?php

                      foreach ($results as $key => $value ) 
                      {
                    ?>
                    <tr>
                      
                      <td>
                       <?php  echo $value['id'];
                       ?>
                      </td>
                      <td>
                       <?php  echo $value['your_name'];
                       ?>
                      </td>
                         
                      
                      </td>
                      <td>
                        <?php echo $value['mobile'];
                        ?>
                      </td>
                      <td>
                        <?php echo  $value['email'];
                        ?>
                      </td>
                    
                      <td>
                        <?php  echo $value['message'];
                        ?>
                      </td>
                      <td>
                          <a  class="btn btn-success" href="update-3.php? id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i></a>
                          <td style="background: white;">
                          <a class="btn btn-danger" href="delete-3.php? id=<?php echo $value['id'];?>"><i class="fa fa-trash"></i></a>
                        </td>
                      </td>
                    
                    </tr>
                          
                    <?php
                      } 
                    ?>
                </table>
                          <!-- print_r('string');die(); -->
              </div>
            </div>
      </div>
    </div>


</body>
</html>