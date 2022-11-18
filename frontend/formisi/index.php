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
                    <h2>Tambah Biodata</h2>
                </div>
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
                            <input type="text" class="form-control" name="jabatan" maxlength=20 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tanggal Mulai Tugas (TMT)</label>
                            <input type="date" class="form-control" name="tanggal_mulai_tugas" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status Karyawan</label>
                            <input type="text" class="form-control" name="status_karyawan" maxlength=10 required>
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
                            <label for="">Umur</label>
                            <input type="text" class="form-control" name="umur" maxlength=3 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Medical Check Up (MCU) Terakhir</label>
                            <input type="date" class="form-control" name="medical_check_up" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status KK</label>
                            <input type="text" class="form-control" name="status_kk" maxlength=3 required>
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
                            <input type="text" class="form-control" name="status_relawan" maxlength=10 required>
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
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- / Content -->
<?php
include "../footer.php";
?>