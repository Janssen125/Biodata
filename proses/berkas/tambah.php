<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama']; 

    if ($_FILES['file']['type'] == "application/pdf")
    {
      $file_name = date("Ymdhis")."_".$_FILES['file']['name'];
      $file_tmp = $_FILES['file']['tmp_name'];
      move_uploaded_file($file_tmp, "../../assets/pdf/".$file_name);
      $query = mysqli_query($db, "INSERT INTO berkas(nama,berkas) VALUES('$nama', '$file_name')");
      if($query){
        ?>
        <script>alert('Berkas berhasil ditambah!');location.href=('../../frontend/berkas/index.php?id=<?= $id ?>');</script>
        <?php
      }
}
else
{
   ?>
    <div class=
    "alert alert-danger alert-dismissible
    fade show text-center">
      <a class="close" data-dismiss="alert"
         aria-label="close">×</a>
      <strong>Gagal!</strong>
          File harus berupa pdf!
    </div>
  <?php
}
}
else{
    echo "a";
}
?>