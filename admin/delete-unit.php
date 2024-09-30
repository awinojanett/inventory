<?php
include '../user/connection.php';
$id=$_GET["id"];
mysqli_query($conn, "DELETE FROM units_tbl WHERE id=$id");
header('Location: add-new-unit.php');
?>
