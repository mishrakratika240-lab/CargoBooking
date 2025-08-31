

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset password</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
/*@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}*/
</style>

</head>
<body class="text-muted row align-items-start ">
	<div style="margin-top:10%">
		<div class="">

	<!-- print_r('string');die(); -->
			<?php
				session_start();
	                if(isset($_SESSION['success_message']))
	                {

	                    echo '<div class="alert alert-success">
	                        <button type= "button" class= "close" data-dismiss="alert" aria-hidden="true">x</button>'.
	                    $_SESSION['success_message'].'</div>';
	                }
	                elseif(isset($_SESSION['error_message']))
	                {
	                    echo'<div class="alert alert-danger">
	                        <button  type= "button" class= "close" data-dismiss= "alert" aria-hidden= "true">x</button>'.
	                    $_SESSION['error_message'].'</div>';
	                }

	                        session_destroy();
	    			?>
	    <div class="container"  style="padding: 40px">
	    	<h4 style="color:red;margin-top:;">Forget  Password</h4>
			<div class="modal-body align-w3" style="padding: 1em !important; ">
				<form action="forget.php" method="post" class="p-sm-3">

				
					
						<div class="mb-3">
						  <label for="exampleFormControlInput1" class="form-label">Email address</label>
						  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
						</div>
						<div class="mb-3">
						 <input type="submit" name="submit" class="form-control bg-theme row" value="submit" style="margin-top:4px;width: 40%;">
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
</body>
</html>

<!-- <div class="form-group">
						<label for="recipient-name" style="color:white;" class="col-form-label col-75"></label>
						<input type="text" class="form-control" placeholder="email" name="email" id="recipient-name" >
						

					<div class="right-w3l">
						<input type="submit" name="submit" class="form-control bg-theme row" value="submit" style="margin-top:4px"> -->
						<!-- style="width: 50%;margin-left: 52px;margin-top: 2px;background: skyblue;" > -->