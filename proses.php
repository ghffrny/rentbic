<?php
include"connect.php";
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];



 $sql = mysqli_query($konek,"INSERT INTO tb_admin VALUES('$nama','$user','$pass')");

 if($sql){

	header("location: login.php");
}else{
		echo "Gagal menginput Data";
}


		?>
