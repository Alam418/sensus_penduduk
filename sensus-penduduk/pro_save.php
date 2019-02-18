<?php
include "config.php";
$modal_name = $_POST['name'];
$description = $_POST['description'];
mysqli_query($koneksi,"INSERT INTO modal (modal_name,description) VALUES ('$modal_name','$description')");
header('location:index.php');
?>