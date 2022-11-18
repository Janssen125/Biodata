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
                <div class="card-header" style="border-bottom:black solid 1px;">View Biodata<br>
                </div>
                <div class="card-body" style="margin-top:1em;">
                    <div class="table-responsive" style="margin-top:3em;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><h1 style="text-align:center; padding-bottom:1.5em;">BIODATA KARYAWAN</h1></th>
                                    <th><center><img src="../../assets/images/img/<?= $row['gambar'] ?>" alt="Gambar Profil" width=150em height=200em></center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NO URUT</td><td style="text-align:center;"><?= $row['no_urut'] ?></td></tr>
                                    <td>NOMOR INDUK KARYAWAN</td><td style="text-align:center;"><?= $row['nomor_induk_karyawan'] ?></td></tr>
                                    <td>UNIT</td><td style="text-align:center;"><?= $row['unit'] ?></td></tr>
                                    <td>NAMA LENGKAP</td><td style="text-align:center;"><?= $row['nama_lengkap'] ?></td></tr>
                                    <td>JENIS KELAMIN</td><td style="text-align:center;"><?= $row['jenis_kelamin'] ?></td></tr>
                                    <td>JABATAN</td><td style="text-align:center;"><?= $row['jabatan'] ?></td></tr>
                                    <td>TANGGAL MULAI TUGAS (TMT)</td><td style="text-align:center;"><?= $row['tanggal_mulai_tugas'] ?></td></tr>
                                    <td>STATUS KARYAWAN</td><td style="text-align:center;"><?= $row['status_karyawan'] ?></td></tr>
                                    <td>NO. SKPWT/SK</td><td style="text-align:center;"><?= $row['skpwt/sk'] ?></td></tr>
                                    <td>TEMPAT LAHIR</td><td style="text-align:center;"><?= $row['tempat_lahir'] ?></td></tr>
                                    <td>TANGGAL LAHIR</td><td style="text-align:center;"><?= $row['tanggal_lahir'] ?></td></tr>
                                    <td>UMUR</td><td style="text-align:center;"><?= $row['umur'] ?></td></tr>
                                    <td>MEDICAL CHECK UP (MCU) TERAKHIR</td><td style="text-align:center;"><?= $row['medical_check_up'] ?></td></tr>
                                    <td>STATUS KK</td><td style="text-align:center;"><?= $row['status_kk'] ?></td></tr>
                                    <td>NIK KTP</td><td style="text-align:center;"><?= $row['nik_ktp'] ?></td></tr>
                                    <td>ALAMAT KTP</td><td style="text-align:center;"><?= $row['alamat_ktp'] ?></td></tr>
                                    <td>NO NPWP</td><td style="text-align:center;"><?= $row['no_npwp'] ?></td></tr>
                                    <td>ALAMAT NPWP</td><td style="text-align:center;"><?= $row['alamat_npwp'] ?></td></tr>
                                    <td>REKENING SINARMAS</td><td style="text-align:center;"><?= $row['rekening_sinarmas'] ?></td></tr>
                                    <td>BPJS TENAGA KERJA</td><td style="text-align:center;"><?= $row['bpjs_tenaga_kerja'] ?></td></tr>
                                    <td>BPJS KESEHATAN</td><td style="text-align:center;"><?= $row['bpjs_kesehatan'] ?></td></tr>
                                    <td>PENDIDIKAN TERAKHIR</td><td style="text-align:center;"><?= $row['pendidikan_terakhir'] ?></td></tr>
                                    <td>JURUSAN</td><td style="text-align:center;"><?= $row['jurusan'] ?></td></tr>
                                    <td>LAMA KERJA</td><td style="text-align:center;"><?= $row['lama_kerja'] ?></td></tr>
                                    <td>ALAMAT SEKARANG</td><td style="text-align:center;"><?= $row['alamat_sekarang'] ?></td></tr>
                                    <td>TELP/NO.HP</td><td style="text-align:center;"><?= $row['nohp'] ?></td></tr>
                                    <td>AGAMA</td><td style="text-align:center;"><?= $row['agama'] ?></td></tr>
                                    <td>GOLONGAN DARAH</td><td style="text-align:center;"><?= $row['golongan_darah'] ?></td></tr>
                                    <td>EMAIL SEKOLAH</td><td style="text-align:center;"><?= $row['email_sekolah'] ?></td></tr>
                                    <td>EMAIL PRIBADI</td><td style="text-align:center;"><?= $row['email_pribadi'] ?></td></tr>
                                    <td>STATUS RELAWAN</td><td style="text-align:center;"><?= $row['status_relawan'] ?></td></tr>
                                    <td>ID RELAWAN</td><td style="text-align:center;"><?= $row['id_relawan'] ?></td></tr>
                                    <td>RESIGN</td><td style="text-align:center;"><?= $row['resign'] ?></td></tr>
                                </tr>
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