
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset password</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

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

	                         // session_destroy(); 
	    	?>
	    <div style="border-style:solid;width: 25%;text-align: center;margin-left: 38%;margin-top: 12%;">
	    	<h4 style="color:red;margin-top: 12px;">Forget  Password</h4>
			<div class="modal-body align-w3" style="padding: 1em !important; ">
				<form action="forget-front.php" method="post" class="p-sm-3">

				<div class="form-group">
						<label for="recipient-name" style="color:white;" class="col-form-label  col-25">Username</label>
						<input type="hidden" class="form-control" placeholder="email" name="email" id="recipient-name" >
					</div>
					

					<div class="form-group">
						<label for="password" class="col-form-label  col-25" style="color:white;">newpassword</label>
						<input type="password" class="form-control" placeholder="new Password" name="password2" >
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label col-25" style="color:white;">ConfirmPassword</label>
						<input type="password" class="form-control" placeholder="confirm Password" name="password3"  >
					</div>
					<div class="right-w3l">
						<input type="submit" name="submit" class="form-control bg-theme" value="submit" style="width: 50%;margin-left: 52px;margin-top: 12px;background: skyblue;" name="submit">
					</div>
				</form>
			</div>
		</div>