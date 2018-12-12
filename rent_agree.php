<?php
 include ("./config.php");
 include "connect.php";

 if(isset($_POST['agree'])){
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $no_ktp = $_POST['no_ktp'];
   $type = $_POST['type'];
   $jumlah = $_POST['jumlah'];

   $sql	= "INSERT INTO pengguna (nama, alamat, no_ktp, type, jumlah) VALUES (\'\', :nama, :alamat , :no_ktp, :type, :jumlah)";
   $result	= mysqli_query($konek,$sql);

   if($result){
     echo "Sukses";
   } else {
     echo "Gagal";
     header("location: rent.php");
   }
 }else {
   die("Akses dilarang...");
 }
?>
