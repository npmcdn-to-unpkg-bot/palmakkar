<?php
	session_start();


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		include "connect_to_db.php";

		$username = $_POST['username'];
		$password = $_POST['password'];
		$result = mysqli_query($conn, "SELECT 1 FROM palmakkar.admins WHERE username = '$username' AND password = '$password'");
		if ($result && mysqli_num_rows($result) > 0) {
			$_SESSION["loggedin"] = true;
			header('Location: ./admin');
			exit;
		} else {
			echo "Login Credentials are invalid.";
			echo "<br><br>";
		}
	}
?>

<!doctype html>
<html>
	<head>
		<title>Admin Log In</title>
	</head>
	<body>
		<?php if( $_SESSION['flash'] ){ ?>
			<h3 style='color:red;'><?php echo $_SESSION['flash']; unset($_SESSION['flash']); ?></h3>
		<?php } ?>


		<form action='/palmakkar/login' method='post'>
		  Username:<br>
		  <input type="text" name="username"><br>
		  Password:<br>
		  <input type="password" name="password"><br><br>
		  <input type="submit" value="Submit">
		</form>
	</body>
</html>