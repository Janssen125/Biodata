<?php
include '../header.php';
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card" style="margin-top:50px;">
        <div class="card-header" style="border-bottom:black solid 1px;">Data User<br>
        </div>
        <div class="card-body" style="margin-top:1em;">
          <!-- <div class="table-responsive" style="margin-top:3em;"> -->
            <table id="table" class="display">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No.HP</th>
                  <th>Hak Akses</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM user ORDER BY hak_akses ASC");
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?= $no++ ?></td>
  <td><?= $row['nama']; ?></td>
  <td><?= $row['email']; ?></td>
  <td><?= $row['nohp']; ?></td>
  <td><?= $row['hak_akses']; ?></td>
  <td><a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-outline-warning">Edit</a></td>
  <td>
  <a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){
            location.href = '../../proses/user/delete.php?id=<?= $row['id']; ?>';
        }
        else{
            alert('Proses hapus gagal');
        }" class="btn btn-outline-danger">
        Delete
    </a>
    </td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=6 style="text-align:center;"> Data Masih Kosong, Mulai Isi Daftar Ekskul di Kanan Atas</td>
  <?php
}
?>
              </tbody>
            </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>


  <!-- / Content -->

  <?php
  include '../footer.php';
  ?>