<?php
include "../header.php";


$nama = $_SESSION['nama'];
$query = mysqli_query($db, "SELECT COUNT(id) as jmlh FROM biodata WHERE nama_lengkap='$nama'");
while($row = mysqli_fetch_array($query)){
    $jmlh = $row['jmlh'];
}
if($_SESSION['hak_akses'] == "User"){
if($jmlh > 0){
    echo "<script>alert('Anda sudah membuat biodata'); location.href=('../dashboard');</script>";
}
}
?>
<body>
<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Tambah Biodata<h2><a href="#excel"><sub><h6>(Klik Disini jika ingin import dengan excel)</h6></sub></a>
                </div><br>
                <div class="card-body">
                    <form method="post" action="../../proses/biodata/tambah.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nomor Induk Karyawan</label>
                            <input type="text" class="form-control" name="nomor_induk_karyawan" maxlength=8 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Unit</label>
                            <select name="unit" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                            <option value="SMK">SMK</option>
                                <option value="SMA">SMA</option>
                                <option value="SMP">SMP</option>
                                <option value="SD">SD</option>
                                <option value="TK">TK</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Nama Lengkap (Sesuai KTP)</label>
                            <?php
                            if($_SESSION['hak_akses'] != "User"){
                            ?>
                            <input type="text" class="form-control" name="nama_lengkap" maxlength=50 required>
                        <?php
                            }
                            else{
                                ?>
                            <input type="text" class="form-control" name="nama_lengkap" value="<?= $_SESSION['nama'] ?>" maxlength=50 readonly required>                                
                                <?php
                            }
                        ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-select" required>
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select name="jabatan" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Wakil Direktur">Wakil Direktur</option>
                            <option value="HRD & Sekretariat">HRD & Sekretariat</option>
                            <option value="Kepala GA">Kepala GA</option> 
                            <option value="Kepala IT">Kepala IT</option>
                            <option value="Kepala Finance & Accounting">Kepala Finance & Accounting</option>
                            <option value="Kepala Perpustakaan">Kepala Perpustakaan</option> 
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Kordinator Kesiswaan">Koordinator Kesiswaan</option>
                            <option value="Kordinator Kurikulum">Koordinator Kurikulum</option>
                            <option value="Kordinator Prasarana">Koordinator Sarana Prasarana</option>
                            <option value="Kordinator Akutansi">Koordinator Akuntansi</option> 
                            <option value="Kordinator Perkantoran">Koordinator Perkantoran</option>
                            <option value="Kordinator Rekayasa Perangkat Lunak RPL">Koordinator Rekayasa Perangkat Lunak RPL</option>
                            <option value="Kordinator Humanis">Koordinator Humanis</option>
                            <option value="Kordinator B Inggris">Koordinator B Inggris</option>
                            <option value="Kordinator B Mandarin">Koordinator B Mandarin</option> 
                            <option value="Guru">Guru</option>
                            <option value="Staff">Staff</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Penunjang">Penunjang</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tanggal Mulai Tugas (TMT)</label>
                            <input type="date" class="form-control" name="tanggal_mulai_tugas" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status Karyawan</label>
                            <select name="status_karyawan" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Pencobaan">Pencobaan</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">No. SKPWT /SK</label>
                            <input type="text" class="form-control" name="skpwt/sk" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" maxlength=20 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Medical Check Up (MCU) Terakhir</label>
                            <input type="date" class="form-control" name="medical_check_up" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status KK</label>
                            <select name="status_kk" id="" class="form-select" required>
                                <option value="TK">Tidak Kawin</option>
                                <option value="K">Kawin</option>
                                <option value="K1">Tanggunan 1</option>
                                <option value="K2">Tanggunan 2 dst</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">NIK KTP</label>
                            <input type="text" class="form-control" name="nik_ktp" maxlength=16 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Alamat KTP</label>
                            <input type="text" class="form-control" name="alamat_ktp" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">No NPWP</label>
                            <input type="text" class="form-control" name="no_npwp" maxlength=16 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Alamat NPWP</label>
                            <input type="text" class="form-control" name="alamat_npwp" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Rekening Sinarmas</label>
                            <input type="text" class="form-control" name="rekening_sinarmas" maxlength=10 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">BPJS Tenaga Kerja</label>
                            <input type="text" class="form-control" name="bpjs_tenaga_kerja" maxlength=11 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">BPJS Kesehatan</label>
                            <input type="text" class="form-control" name="bpjs_kesehatan" maxlength=13 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir" id="" class="form-select" required>
                                <option value="" hidden>Pilih</option>
                                <option value="S3">S3</option>
                                <option value="S2">S2</option>
                                <option value="S1">S1</option>
                                <option value="D4">D4</option>
                                <option value="D3">D3</option>
                                <option value="D2">D2</option>
                                <option value="D1">D1</option>
                                <option value="SMK">SMK</option>
                                <option value="SMA">SMA</option>
                                <option value="SMP">SMP</option>
                                <option value="SD">SD</option>
                                <option value="TK">TK</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Alamat Sekarang</label>
                            <input type="text" class="form-control" name="alamat_sekarang" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Telp/No.HP</label>
                            <?php
                            if($_SESSION['hak_akses'] != "User"){
                            ?>
                            <input type="text" class="form-control" name="nohp" maxlength=13 required>
                            <?php
                            }
                            else{
                            ?>
                            <input type="text" class="form-control" name="nohp" value="<?= $_SESSION['nohp'] ?>" maxlength=13 required>
                            <?php
                            }
                            ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghuchu">Konghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <select name="golongan_darah" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Email Sekolah</label>
                            <input type="email" class="form-control" name="email_sekolah" maxlength=50 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Email Pribadi</label>
                            <?php
                            if($_SESSION['hak_akses'] != "User"){
                            ?>
                            <input type="text" class="form-control" name="email_pribadi" maxlength=50 required>
                            <?php
                            }
                            else{
                                ?>
                            <input type="text" class="form-control" name="email_pribadi" value="<?= $_SESSION['email'] ?>" maxlength=50 required>
                                <?php
                            }
                            ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status Relawan</label>
                            <select name="status_relawan" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                                <option value="AP">AP</option>
                                <option value="APL">APL</option>
                                <option value="Komite">Komite</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">ID Relawan</label>
                            <input type="text" class="form-control" name="id_relawan" maxlength=10 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Foto Pribadi</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </form>
                    <hr>Atau
                    <div class="row" id="excel">
                        <div class="col">
                    <form action="../biodata/export/import/importbiodata.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="">Import Excel</label>
                            <input type="file" class="form-control" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                        </div><br>  
                        <div class="form-group">
                            <label for="">Import Foto Pribadi Anda</label>
                            <input type="file" class="form-control" name="foto" accept="image/png, image/jpg, image/jpeg" required>
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" name="import" value="Import">
                    </form>
                    </div>
                    <div class="col" style="text-align:right;">
                        <h4>Download Lembar Pengisian (xlsx)</h4>
                        <a href="../biodata/export/import/tmp/Example.xlsx" download><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- / Content -->
<?php
include "../footer.php";
?>