<?php
include '../../config/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM biodata WHERE id=$id");

if($query){
    echo "<script>alert('Data Berhasil Dihapus');location.href=('../../frontend/biodata/');</script>";
}
else{
    echo "<script>alert('Data Gagal Dihapus');location.href=('../../frontend/biodata/');</script>";
}
?>