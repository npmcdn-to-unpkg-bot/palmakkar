<?php

	include "connect_to_db.php";

	// confirm that the 'id' variable has been set
	if (isset($_POST['id']) && is_numeric($_POST['id']))
	{
	// get the 'id' variable from the URL
		$id = $_POST['id'];

		// delete record from database
		$stmt = $conn->prepare("DELETE FROM palmakkar.messages WHERE id = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
		// }
		// else
		// {
		// 	echo "ERROR: could not prepare SQL statement.";
		// }
		$conn->close();

		// redirect user after delete is successful
		header("Location: admin.php");
	}
	else
		// if the 'id' variable isn't set, redirect the user
	{
		header("Location: admin.php");
	}

?>