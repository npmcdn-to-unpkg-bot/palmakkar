<?php 
	// checked logged in
	include "check_loggedin.php";

	include "connect_to_db.php";

	//fetch record using $_POST['id']
	$id = $_POST['id'];
	$sql = "SELECT * FROM palmakkar.messages WHERE id = " . "$id";
	$result = mysqli_query($conn, $sql);
	$obj = mysqli_fetch_array($result);
	$email = $obj['email'];
	$message = $obj['message'];

?>

<!doctype	html>

<html>
<head>
	<title>Edit Message</title>
</head>
<body>
	<form action="./update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		Email:<br>
		<input type="text" name="email" value="<?php echo $email ?>"><br>
		Message:<br>
		<input type="text" name="message" value="<?php echo $message ?>"><br>

		<input type="submit" value="Submit">
	</form>

</body>
</html>
