<?php
session_start();
include "config/koneksi.php";
if(isset($_POST['submit'])){
$nama=$_POST['nama'];
$password=md5($_POST['password']);
$query = mysqli_query($db,"SELECT * FROM user WHERE nama='$nama' AND password='$password'");
$check = mysqli_num_rows($query);

if($check > 0){
    $query = mysqli_query($db,"SELECT * FROM user WHERE nama='$nama' AND password='$password'");
    while($rows = mysqli_fetch_array($query)){
        $hak = $rows['hak_akses'];
        $id = $rows['id'];
        $nama = $rows['nama'];
        $email = $rows['email'];
        $nohp = $rows['nohp'];
    };
    $_SESSION['id']=$id;
    $_SESSION['nama']=$nama;
    $_SESSION['email']=$email;
    $_SESSION['nohp']=$nohp;
    $_SESSION['hak_akses']=$hak;
    $_SESSION['nama']=$nama;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 7200);

        echo "<script>location.href=('frontend/dashboard/')</script>";
}
else{
    echo "<script>alert('Login Gagal, Silahkan Coba Lagi'); location.href=('index.php');</script>";
}
}else{
    echo "<script>alert('Login :)'); location.href=('index.php');</script>";
}
?>