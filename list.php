<?php

  include_once 'db-connection.php';
  $result  =   mysqli_query($conn,"SELECT practiceone.*,practicetwo.email,practicethree.message,practicefour.department FROM practiceone 
    INNER JOIN practicetwo ON practiceone.id = practicetwo.practiceone_id
    INNER JOIN practicethree ON practiceone.id = practicethree.practiceone_id
    INNER JOIN practicefour ON practiceone.id = practicefour.practiceone_id
    ORDER BY practiceone.id");
    ?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lists</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
      
</head>
<body>
  <div class="row">
            <div class="table-responsive">
           <!--  <a class="btn btn-success" href="delete-2.php">edit</a>
            <a class="btn btn-alert" href="delete-2.php">delete</a> -->
              <table border=""class="table" id="customers" style="text-align: center;" >
                        <tr>
                          <th>id</th>
                          <th>FIRST NAME</th>
                          <th>MID Name</th>
                          <th>LAST Name</th>
                          <th>EMAIL</th>
                          <th>MESSAGE</th>
                         
                        </tr>
                        <?php

                          foreach ($result as $key => $once ) 
                          {
                        ?>
                        <tr>
                        <td>
                          <?php echo $once['id'];?>
                        </td>

                        <td>
                          <?php  echo $once['name'];
                          ?>
                        
                      </td>
                      <td>
                          <?php  echo $once['midname'];
                          ?>
                        
                      </td>
                      <td>
                          <?php  echo $once['lastname'];
                          ?>
                        
                      </td>
                      
                      
                      </td>
                      <td>
                        <?php echo $once['email'];
                        ?>
                      </td>
                      <td>
                        <?php echo  $once['message'];
                        ?>
                      </td>
                    
                     
                        <!--   <td>
                          <a  class="btn btn-success" href="update-2.php? id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i></a>
                            <td style="background: white;">

                                <a class="btn btn-danger" href="delete-2.php? id=<?php echo
                                 $value['id'];?>"><i class="fa fa-trash"></i></a>
                            </td> -->
                        </td>
   
                      
                          </tr>
                            
                        <?php
                      } ?>
              </table>
            </div>  
            </div>

</body>
</html>