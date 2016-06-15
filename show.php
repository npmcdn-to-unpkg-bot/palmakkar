<?php 
	// checked logged in
	include "check_loggedin.php";

	include "connect_to_db.php";

	$id = $_GET['id'];
	//grab id parameter from query string
	$sql = "SELECT * FROM palmakkar.messages WHERE id = " . "$id";
	$result = mysqli_query($conn, $sql);

	//$obj = $result->mysqli_fetch_object();
	$obj = mysqli_fetch_array($result);
	// echo $obj['email'];
	$email = $obj['email'];
	$message = $obj['message']

	

?>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (($result->num_rows) == 1) { ?>

		<!-- print message info -->
		<h2><?php echo $message ?></h2><br>

		<h2>- <?php echo $email ?></h2><br>

	<?php } else { ?> 		
		<h1>No message with this ID=<?php echo $id ?> found.</h1>

	<?php } ?>
	<!-- add edit and delete links for the record instance -->

	<form action='./edit.php' method="post">
		<input type="hidden" name="id" value="'<?php echo $id; ?>'">
		<input type="submit" name="submit" value="Edit">
	</form>

	<form action='./delete.php' method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="submit" value="Delete">
	</form>

	<!-- add link to go back to admin page -->
</body>
</html>


<!-- render output -->
