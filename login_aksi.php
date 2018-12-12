<?php
session_start();
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$perintah = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($konek,$perintah);
$row = mysqli_fetch_array($hasil);
if ($row['username'] == $username AND $row['password'] == $password) {
	$_SESSION['username'] = $username;
		header("location: indexlogin.php");
}
else {
	echo "<script>alert ('Username / Password Salah')</script>";
	echo "<meta http-equiv=Refresh content=0;url=login.php>";
}
?>
