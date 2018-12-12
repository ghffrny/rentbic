<!DOCTYPE html>
<html lang="en">
<head>
    <title>rentBic.com</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/style_signup.css"/>
    <link rel="shortcut icon" href="img.png"/>
</head>
<body>
  <h1>rentBic.com</h1>
  <h1><img src="img.png" width="100" align="center"/></h1>
    <div class="box-login">
        <div class="box-login-header">
            <div class="lock"></div>
            <div class="header-log"></div>
            <h2 class="judul">Sign Up</h2>
        </div>
        <div class="log-in">
            <form action="signup_aksi.php" method="post">
                <div class="group">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div class="group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="group">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div class="group">
                    <input type="submit" name="signup" value="Sign Up">
                </div>
                <center>
                <div class="login">
                  <p>
                    have an account?<a class="login" href="./login.php"> Login</a>
                  </p>
                </div>
              </center>
            </form>
        </div>
    </div>
</body>
</html>
