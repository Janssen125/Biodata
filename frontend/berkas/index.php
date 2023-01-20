<?php
include "../header.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM biodata WHERE id=$id");
while($row = mysqli_fetch_array($query)){
?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card" style="margin-top:50px;">
                <div class="card-header" style="border-bottom:black solid 1px;">Berkas
                    <?php if($_SESSION['hak_akses'] == "User"){ echo "Anda"; }else{ echo $row['nama_lengkap']; };?>
                    <a href="create.php?id=<?= $row['id'] ?>" class="btn btn-outline-success"
                        style="float:right;">Tambah Berkas</a>
                </div>
                <div class="card-body" style="margin-top:1em;">
                    <div class="table-responsive" style="margin-top:3em;">
                        <h1 style="text-align:center;">Berkas
                            <?php if($_SESSION['hak_akses'] == "User"){ echo "Anda"; }else{ echo $row['nama_lengkap']; };?>
                        </h1>

                <table id="table" class="display">
                    <thead>
                    <tr>
                        <th>
                            Nama Berkas
                        </th>
                        <th>
                            View
                        </th>
                        <th>
                            Delete
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                <?php
                $nama = $row['nama_lengkap'];
                $query = mysqli_query($db, "SELECT * FROM berkas WHERE nama = '$nama'");
                        while($row = mysqli_fetch_array($query)){
                            ?>
                    <tr>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                            </svg>
                            <?= $row['berkas'] ?>
                        </td>
                        <td>
                            <a href="view.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary">View</a>
                        </td>
                        <td>
                        <a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){location.href = '../../proses/berkas/delete.php?id=<?= $row['id']; ?>';}else{alert('Proses hapus gagal');}" class="btn btn-outline-danger">
                                            Delete
                                        </a>
                        </td>
                    </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                        </table>
                </div>
                    </div>
            </div>
        </div>
    </div>


    <!-- / Content -->

    <?php
}
}
  include '../footer.php';
  ?>