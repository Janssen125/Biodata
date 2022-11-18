<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    $hak_akses = "User";
    if($password == $password2){

    $sql = "INSERT INTO user (nama,email,nohp,password,hak_akses)
    VALUES ('$nama', '$email', '$nohp', '$password', '$hak_akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['pesan'] = "Register berhasil, silahkan login";
        header('Location: ../../index.php');
    } else {
        $_SESSION['pesan'] = "Gagal register";
        header('Location: ../../register.php');
    }
}
else{

    $_SESSION['pesan'] = "Password Tidak sama";
    header('Location: ../../register.php');
}
}
?>