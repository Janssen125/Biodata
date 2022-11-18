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

    <title>Register</title>
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
                                <h3>Daftar</h3>
                                <p class="mb-4">
                                    <?php
    if (isset($_SESSION['pesan'])) {
        echo $_SESSION['pesan'];
    }
    ?>
                                </p>
                                <p class="mb-4">Silahkan masukkan data diri kamu dibawah ini.</p>
                            </div>
                            <form action="proses/user/tambah.php" method="post">
                                <div class="form-group first">
                                    <label for="nama">Nama (Sesuai KTP)</label>
                                    <input type="text" name="nama" class="form-control" id="nama" required>

                                </div>
                                <div class="form-group first">
                                    <label for="email">E-mail (Pribadi)</label>
                                    <input type="email" name="email" class="form-control" id="email" required>

                                </div>
                                <div class="form-group first">
                                    <label for="nohp">No.Hp (AKTIF)</label>
                                    <input type="number" name="nohp" class="form-control" id="nohp" maxlength=13
                                        required>

                                </div>
                                <div class="form-group first">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Konfirmasi Password</label>
                                    <input type="password" name="password2" class="form-control" id="password2"
                                        required>
                                </div>
                                <p class="mb-4">Pastikan form register ini diisi dengan benar, data yang tersimpan akan masuk ke biodata. Jika ingin mengubah data ini, harap hubungi admin untuk pengubahan data.</p>
                                <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary">
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
};
?>