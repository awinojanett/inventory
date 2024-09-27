<?php
include '../users/connection.php';
$id=$_GET["id"];
mysqli_query($conn, "DELETE FROM user_registration WHERE id=$id");
header('Location: add-user.php');
?>
