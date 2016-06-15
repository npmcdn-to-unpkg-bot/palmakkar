<?php

include "connect_to_db.php";


//$sql = "UPDATE palmakkar.messages SET id= " . "$_POST['id']" . ", email= " . "$_POST['email']" . ", message= " . "$_POST['message']" . "WHERE id= " . "$_POST['id']";
$sql = "UPDATE palmakkar.messages SET email = ?, message = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $_POST['email'], $_POST['message'], $_POST['id']);
$stmt->execute();
$stmt->close();

header("Location: ./admin");
$conn->close();
exit;

?>