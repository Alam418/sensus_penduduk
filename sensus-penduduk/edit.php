<?php
include "config.php";
 $id=$_GET['id'];
 $region=mysqli_query($koneksi,"SELECT * FROM region WHERE id='$id'");
 while($r=mysqli_fetch_array($region)){
?>