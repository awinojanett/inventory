<?php
include '../user/connection.php';
$id=$_GET["id"];
mysqli_query($conn, "DELETE FROM products_tbl WHERE id=$id");
header('Location: add-product.php');
?>