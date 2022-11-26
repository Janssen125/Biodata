<?php
include '../../config/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM user WHERE id=$id");

if($query){
    echo "<script>alert('Data Berhasil Dihapus');location.href=('../../frontend/user/');</script>";
}
else{
    echo "<script>alert('Data Gagal Dihapus');location.href=('../../frontend/user/');</script>";
}
?>