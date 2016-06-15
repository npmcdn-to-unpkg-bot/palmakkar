<?php

include "connect_to_db.php";

//parse POST request data from form and insert into db table messages
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO palmakkar.messages (email, message)
VALUES ('$email', '$message')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!doctype html>
<html>
  <head>
  </head>
  <body>
    <h1>Message Saved!</h1>
  </body>
</html>
