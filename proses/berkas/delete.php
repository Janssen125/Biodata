<?php
include '../../config/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM berkas WHERE id=$id");
while($row = mysqli_fetch_array($query)){
    $nama = $row['berkas'];
}
$query = mysqli_query($db, "DELETE FROM berkas WHERE id=$id");

if($query){
    unlink("../../assets/pdf/".$nama);
    echo "<script>alert('Data Berhasil Dihapus');location.href=('../../frontend/biodata/');</script>";
}
else{
    echo "<script>alert('Data Gagal Dihapus');location.href=('../../frontend/biodata/');</script>";
}
?>