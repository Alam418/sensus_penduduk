<?php 
session_start();

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
 
$data = mysqli_query($koneksi,"select * from users where email='$email' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:login.php?error=".base64_encode('Email atau Password salah'));
}
?>