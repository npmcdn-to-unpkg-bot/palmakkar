<?php

	include "check_loggedin.php";

	include "connect_to_db.php";

	//Check if login correct
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	// $result = mysqli_query($conn, "SELECT 1 FROM palmakkar.admins WHERE username = '$username' AND password = '$password'");
	// if ($result && mysqli_num_rows($result) > 0) {
	$sql = "SELECT * FROM palmakkar.messages";
	$retrieved = $conn->query($sql);

	$conn->close();
?>

<!doctype html>
<html>
  <head>
		<?php include "include_style.php"; ?>
  </head>
  <body>
  	<table class='table table-bordered table-hover'>
  		<tr>
  			<th>id</th>
  			<th>email</th>
  			<th>message</th>
  			<th>Show</th>
  			<th>Edit</th>
  			<th>Delete</th>
  		</tr>
			<?php while($row = $retrieved->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["message"]; ?></td>
					<td>
						<?php $id = $row["id"]; ?>
	  				<a href="./show.php?id=<?php echo $id; ?>">Show</a>
	  			</td>
	  			<td>
	  				<form action='./edit.php' method="post">
		      		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		      		<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
		      		<input type="hidden" name="message" value="'<?php echo $row['message']; ?>'">
		      		<input type="submit" name="submit" value="Edit">
	 				 	</form>
	 				</td>
	 				<td>
	  				<form action='./delete.php' method="post">
		      		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		      		<input type="submit" name="submit" value="Delete">
	 				 	</form>
					</td>
  			</tr>
			<?php } ?>
  	</table>


    <h2><a href="/palmakkar/logout">Logout</a></h2>
  </body>
</html>