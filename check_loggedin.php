<?php

session_start();

	if (!$_SESSION["loggedin"]) {
		$newURL = "./login";
		$_SESSION['flash'] = 'Please login to continue';
		header('Location: ' . $newURL);
		exit;
	}

?>