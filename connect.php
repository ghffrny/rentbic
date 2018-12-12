<?php
$host = "localhost";
$username = "root";
$password = "";

$database = "rentbic";
$konek = mysqli_connect($host,$username,$password,$database);

if ($konek){
  echo "";
}else{
  echo "GAGAL (C0BA LAGI)";
}

?>
