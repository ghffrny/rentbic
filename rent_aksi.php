<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
  echo 'Not Connected to Server';
}
if(!mysqli_select_db($con,'rentbic'))
{
  echo 'database not selected';
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_ktp = $_POST['no_ktp'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO pengguna (nama,email,alamat,no_ktp,tipe,jumlah) VALUES ('$nama','$email','$alamat','$no_ktp','$tipe','$jumlah')";
if(!mysqli_query($con,$sql))
{
  echo 'not inserted';
/*  echo "<script>alert ('error')</script>";
  header("location: rent.php");
  */
}else{
  echo 'inserted';
  /*
  header("location: rent.php");
*/
}
?>
