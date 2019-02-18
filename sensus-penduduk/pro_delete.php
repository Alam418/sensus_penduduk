<?php
include "config.php";
$id=$_GET['id'];
$region=mysqli_query($koneksi,"Delete FROM region WHERE id='$id'");
header('location:index.php');
?>