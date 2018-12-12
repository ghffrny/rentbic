<!DOCTYPE html>
<html>
<head>
    <title>rentBic.com</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="css/style_rent.css" type="text/css" rel="stylesheet"/>
    <link href="img.png" rel="shortcut icon" />
</head>
<body>
    <div class="rent-banner">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ml-xl-2">
                <a class="nav-link scroll" href="indexlogin.php">Home</a>
              </li>
              <li class="nav-item ml-xl-2">
                <a class="nav-link scroll" href="indexlogin.php">Bicycle</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link scroll" href="rent.php">Rent</a>
              </li>
              <li class="nav-item ml-xl-2">
                <a class="nav-link scroll" href="index.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <center>
        <div class="main">
          <br>
          <h4>RENTAL FORMULIR</h4>
        </dev>
        </center>
      </header>
    </div>
    <br>
    <br>
    <form action="rent_aksi.php" method="post">
          <label for="nama" class="nama">Username</label>
          <input name="nama" type="text" placeholder="Masukan username anda">

          <label for="email" class="alamat">Email</label>
          <input name="email" type="email" placeholder="Masukan email anda">

          <label for="alamat" class="alamat">Address</label>
          <input name="alamat" type="text" placeholder="Masukan alamat anda">

          <label for="no_ktp">No KTP</label>
          <input name="no_ktp" type="text" placeholder="Masukan no ktp anda">

          <label for="tipe">Type</label>
          <select name="tipe" style="width:660px;">
            <option name="tipe" value="">Pilih Type</option>
            <option name="tipe" type="text" value="RC-01">RC-01</option>
            <option name="tipe" type="text" value="RC-02">RC-02</option>
            <option name="tipe" type="text" value="RC-03">RC-03</option>
            <option name="tipe" type="text" value="PL-01">PL-01</option>
            <option name="tipe" type="text" value="PL-02">PL-02</option>
            <option name="tipe" type="text" value="PL-03">PL-03</option>
          </select>

          <label for="jumlah">Total</label>
          <select name="jumlah" style="width:660px;">
            <option name="jumlah" type="text" value="">Pilih jumlah</option>
            <option name="jumlah" type="text" value="1">1</option>
            <option name="jumlah" type="text" value="2">2</option>
            <option name="jumlah" type="text" value="3">3</option>
            <option name="jumlah" type="text" value="4">4</option>
          </select>
          <br></br>
          <div class="btn-agree">
            <input type="submit" name="agree" value="Agree">
          </div>
      </form>
      <br></br>
    </body>
</html>
