<?php
include "../../config/koneksi.php";

if(isset($_POST['submit'])){
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $nohp = $_POST['nohp'];
 $hak = $_POST['hak_akses'];

 $query = mysqli_query($db, "UPDATE user SET nama='$nama', email='$email', nohp='$nohp', hak_akses='$hak' WHERE id='$id'");
 if($query){
    echo "<script>alert('Data user berhasil diubah');location.href=('../../frontend/user/');</script>";
 }else{
    echo "<script>alert('Data user gagal diubah');location.href=('../../frontend/user/');</script>";
 }
}
else{
    echo "<script>alert('Akses Dilarang');location.href=('../../frontend/dashboard')</script>";
}
?>