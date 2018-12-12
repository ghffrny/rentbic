<?php

include('./config.php');
$pesan='';

if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!query('SELECT username FROM user WHERE user.username = :username',array(':username'=>$username))){
    query('INSERT INTO user VALUES (\'\',:username,:email,:password)',
    array(':username'=>$username,'email'=>$email,'password'=>$password));
    $pesan = "Sign Up Success";
      header("location: login.php");
  }
  else{
    $pesan = "Username terpakai";
  }
}
?>
