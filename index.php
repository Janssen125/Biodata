<?php
session_start();
if(!isset($_SESSION['id'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/logo-cktc.png" type="image/png">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Masuk</h3>
              <p class="mb-4">
              <?php
    if (isset($_SESSION['pesan'])) {
        echo $_SESSION['pesan'];;
    }
    ?>
    </p>
              <p class="mb-4">"Ekspresi wajah seseorarng merupakan cerminan dari kondisi batinnya."<br><span style="float:right;">- - Master Cheng Yen</span></p><br>
            </div>
            <form action="proses_login.php" method="post">
              <div class="form-group first">
                <label for="username">Nama</label>
                <input type="text" name="nama" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                
              </div>
            
              <input type="submit" name="submit" value="Masuk" class="btn btn-block btn-primary">
              <br>
              <center>
              <p class="mb-4">Belum Punya akun? <a href="register.php">Daftar Disini</a></p>
              </center>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
  </body>
</html>
<?php
}
else{
  echo "<script>location.href=('frontend/dashboard/')</script>";
}
?>