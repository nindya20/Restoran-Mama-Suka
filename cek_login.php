<?php 

session_start();

include 'koneksi1.php';


$username = $_POST['username'];
$password = $_POST['password'];


$data = mysqli_query($koneksi,"select * from mama where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:user/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>