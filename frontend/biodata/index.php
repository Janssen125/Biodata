<?php
include "../header.php";
?>

<body>
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card" style="margin-top:50px;">
                <div class="card-header" style="border-bottom:black solid 1px;">Biodata<br>
                </div>
                <div class="card-body" style="margin-top:1em;">
                <?php
                if($_SESSION['hak_akses'] != "User"){
                ?>
                    <span style="float:right;"><a href="../formisi/">
                            <button class="btn btn-outline-success">Tambah Biodata</button>
                        </a>
                    </span>
                    <?php
                }
                    ?>
                    <div class="table-responsive" style="margin-top:3em;">
                        <table id="table" class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Urut</th>
                                    <th>Nomor Induk Karyawan</th>
                                    <th>Unit</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Mulai Tugas(TMT)</th>
                                    <th>Status Karyawan</th>
                                    <th>No. SKPWT /SK</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur</th>
                                    <th>Medical Check Up (MCU) Terakhir</th>
                                    <th>Status KK</th>
                                    <th>NIK KTP</th>
                                    <th>Alamat KTP</th>
                                    <th>No NPWP</th>
                                    <th>Alamat NPWP</th>
                                    <th>Rekening Sinarmas</th>
                                    <th>BPJS Tenaga Kerja</th>
                                    <th>BPJS Kesehatan</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Jurusan</th>
                                    <th>Lama Kerja</th>
                                    <th>Alamat Sekarang</th>
                                    <th>Telp/No.HP</th>
                                    <th>Agama</th>
                                    <th>Golongan Darah</th>
                                    <th>Email Sekolah</th>
                                    <th>Email Pribadi</th>
                                    <th>Status Relawan</th>
                                    <th>ID Relawan</th>
                                    <th>Status Kerja</th>
                                    <th>Gambar</th>
                                    <th>View</th>
                                    <?php
                                    if($_SESSION['hak_akses'] != "User"){
                                    ?>
                                    <th>Edit</th>
                                    <?php
                                    if($_SESSION['hak_akses'] == "Admin"){
                                    ?>
                                    <th>Delete</th>
                                    <?php
                                    }
                                }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../config/koneksi.php';
                                if($_SESSION['hak_akses'] != "User"){
                                  $query = mysqli_query($db, "SELECT * FROM biodata");
                                }
                                else{
                                    $nama=$_SESSION['nama'];
                                    $query = mysqli_query($db, "SELECT * FROM biodata WHERE nama_lengkap='$nama'");
                                }
                                if(mysqli_num_rows($query) > 0){
                                  while($row = mysqli_fetch_array($query)){
                                  ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['nomor_induk_karyawan'] ?></td>
                                    <td><?= $row['unit'] ?></td>
                                    <td><?= $row['nama_lengkap'] ?></td>
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['jabatan'] ?></td>
                                    <td><?= $row['tanggal_mulai_tugas'] ?></td>
                                    <td><?= $row['status_karyawan'] ?></td>
                                    <td><?= $row['skpwt/sk'] ?></td>
                                    <td><?= $row['tempat_lahir'] ?></td>
                                    <td><?= $row['tanggal_lahir'] ?></td>
                                    <td><?= $row['umur'] ?></td>
                                    <td><?= $row['medical_check_up'] ?></td>
                                    <td><?= $row['status_kk'] ?></td>
                                    <td><?= $row['nik_ktp'] ?></td>
                                    <td><?= $row['alamat_ktp'] ?></td>
                                    <td><?= $row['no_npwp'] ?></td>
                                    <td><?= $row['alamat_npwp'] ?></td>
                                    <td><?= $row['rekening_sinarmas'] ?></td>
                                    <td><?= $row['bpjs_tenaga_kerja'] ?></td>
                                    <td><?= $row['bpjs_kesehatan'] ?></td>
                                    <td><?= $row['pendidikan_terakhir'] ?></td>
                                    <td><?= $row['jurusan'] ?></td>
                                    <td>
                                        <?php
                                        $date1 = strtotime($row['tanggal_mulai_tugas']);
                                        $date2 = strtotime(date("Y-m-d"));
                                        $sec = $date2-$date1;
                                        echo $sec/86400;
                                          ?>
                                          hari
                                          </td>
                                    <td><?= $row['alamat_sekarang'] ?></td>
                                    <td><?= $row['nohp'] ?></td>
                                    <td><?= $row['agama'] ?></td>
                                    <td><?= $row['golongan_darah'] ?></td>
                                    <td><?= $row['email_sekolah'] ?></td>
                                    <td><?= $row['email_pribadi'] ?></td>
                                    <td><?= $row['status_relawan'] ?></td>
                                    <td><?= $row['id_relawan'] ?></td>
                                    <td><?= $row['resign'] ?></td>
                                    <td><img src="../../assets/images/img/<?= $row['gambar'] ?>" alt="Tidak Ada Gambar" width=150em height=200em></td>
                                    <td><a href="view.php?id=<?= $row['id'];?>" class="btn btn-outline-primary">View</a>
                                    </td>
                                    <?php
                                    if($_SESSION['hak_akses'] != "User"){
                                    ?>
                                    <td><a href="edit.php?id=<?= $row['id']; ?>"
                                            class="btn btn-outline-warning">Edit</a></td>
                                            <?php
                                    if($_SESSION['hak_akses'] == "Admin"){
                                    ?>
                                    <td>
                                        <a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){location.href = 'proses/delete.php?id=<?= $row['id']; ?>';}else{alert('Proses hapus gagal');}" class="btn btn-outline-danger">
                                            Delete
                                        </a>
                                    </td>
                                    <?php
                                    }
                                }
                                    ?>
                                </tr>
                                <?php
                                  }
                                }
                                else{
                                  ?>
                                <tr><td colspan=14 style="text-align:center;"> Data Masih Kosong, Mulai Isi Daftar Biodata di
                                    Kanan Atas</td></tr>
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
include "../footer.php";
?>