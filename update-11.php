<?php
include_once 'db-connection.php';
$id = $_GET['id'];
$class = mysqli_query($conn,"SELECT * FROM user_registrations WHERE id = $id");
$value = mysqli_fetch_assoc($class);

?>

	<form method="post" action="update-conn-1.php?id=<?php echo $value['id']?>;">
		<label>name</label>
		<input type="text" name="name" value=<?php echo $value['id']?>;></input>
		<label>mobile</label>
		<input type="int" name="mobile" value="<?php echo $value['id'];?>"></input>
		<label>email</label>
		<input type="varchar" name="email"value="<?php  echo $value['id']  ?>"></input>
		<label>password</label>
		<input type=""  name="password" value="<?php  echo $value['id'];?>"></input>
			<input  type="submit" name="submit" value="update" name="update">

		<input type="reset" name="reset" value="reset" name="reset">
		

	</form>