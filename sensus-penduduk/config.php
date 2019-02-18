<?php 
$koneksi = new mysqli('localhost','root', '', 'db_sensus');

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>