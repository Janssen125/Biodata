<?php
include "../header.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM biodata WHERE id=$id");
while($row = mysqli_fetch_array($query)){
?>
<body>
<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Edit Biodata</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../proses/biodata/edit.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="">Nomor Induk Karyawan</label>
                            <input type="text" class="form-control" name="nomor_induk_karyawan" value="<?= $row['nomor_induk_karyawan'] ?>" maxlength=8 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Unit</label>
                            <select name="unit" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                            <option value="SMK" <?php if($row['unit'] == "SMK"){echo "selected";}; ?>>SMK</option>
                                <option value="SMA" <?php if($row['unit'] == "SMA"){echo "selected";}; ?>>SMA</option>
                                <option value="SMP" <?php if($row['unit'] == "SMP"){echo "selected";}; ?>>SMP</option>
                                <option value="SD" <?php if($row['unit'] == "SD"){echo "selected";}; ?>>SD</option>
                                <option value="TK" <?php if($row['unit'] == "TK"){echo "selected";}; ?>>TK</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Nama Lengkap (Sesuai KTP)</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="<?= $row['nama_lengkap'] ?>" maxlength=50 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-select" required>
                                <option value="L" <?php if($row['jenis_kelamin'] == "L"){echo "selected";}; ?>>Laki Laki</option>
                                <option value="P" <?php if($row['jenis_kelamin'] == "P"){echo "selected";}; ?>>Perempuan</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="<?= $row['jabatan'] ?>" maxlength=20 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tanggal Mulai Tugas (TMT)</label>
                            <input type="date" class="form-control" name="tanggal_mulai_tugas" value="<?= $row['tanggal_mulai_tugas'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status Karyawan</label>
                            <input type="text" class="form-control" name="status_karyawan" value="<?= $row['status_karyawan'] ?>" maxlength=10 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">No. SKPWT /SK</label>
                            <input type="text" class="form-control" name="skpwt/sk" value="<?= $row['skpwt/sk'] ?>" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="<?= $row['tempat_lahir'] ?>" maxlength=20 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="text" class="form-control" name="umur" value="<?= $row['umur'] ?>" maxlength=3 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Medical Check Up (MCU) Terakhir</label>
                            <input type="date" class="form-control" name="medical_check_up" value="<?= $row['medical_check_up'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status KK</label>
                            <input type="text" class="form-control" name="status_kk" value="<?= $row['status_kk'] ?>" maxlength=3 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">NIK KTP</label>
                            <input type="text" class="form-control" name="nik_ktp" value="<?= $row['nik_ktp'] ?>" maxlength=16 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Alamat KTP</label>
                            <input type="text" class="form-control" name="alamat_ktp" value="<?= $row['alamat_ktp'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">No NPWP</label>
                            <input type="text" class="form-control" name="no_npwp" value="<?= $row['no_npwp'] ?>" maxlength=16 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Alamat NPWP</label>
                            <input type="text" class="form-control" name="alamat_npwp" value="<?= $row['alamat_npwp'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Rekening Sinarmas</label>
                            <input type="text" class="form-control" name="rekening_sinarmas" value="<?= $row['rekening_sinarmas'] ?>" maxlength=10 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">BPJS Tenaga Kerja</label>
                            <input type="text" class="form-control" name="bpjs_tenaga_kerja" value="<?= $row['bpjs_tenaga_kerja'] ?>" maxlength=11 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">BPJS Kesehatan</label>
                            <input type="text" class="form-control" name="bpjs_kesehatan" value="<?= $row['bpjs_kesehatan'] ?>" maxlength=13 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir" id="" class="form-select" required>
                                <option value="" hidden>Pilih</option>
                                <option value="S3" <?php if($row['pendidikan_terakhir'] == "S3"){echo "selected";}; ?>>S3</option>
                                <option value="S2" <?php if($row['pendidikan_terakhir'] == "S2"){echo "selected";}; ?>>S2</option>
                                <option value="S1" <?php if($row['pendidikan_terakhir'] == "S1"){echo "selected";}; ?>>S1</option>
                                <option value="D4" <?php if($row['pendidikan_terakhir'] == "D4"){echo "selected";}; ?>>D4</option>
                                <option value="D3" <?php if($row['pendidikan_terakhir'] == "D3"){echo "selected";}; ?>>D3</option>
                                <option value="D2" <?php if($row['pendidikan_terakhir'] == "D2"){echo "selected";}; ?>>D2</option>
                                <option value="D1" <?php if($row['pendidikan_terakhir'] == "D1"){echo "selected";}; ?>>D1</option>
                                <option value="SMK" <?php if($row['pendidikan_terakhir'] == "SMK"){echo "selected";}; ?>>SMK</option>
                                <option value="SMA" <?php if($row['pendidikan_terakhir'] == "SMA"){echo "selected";}; ?>>SMA</option>
                                <option value="SMP" <?php if($row['pendidikan_terakhir'] == "SMP"){echo "selected";}; ?>>SMP</option>
                                <option value="SD" <?php if($row['pendidikan_terakhir'] == "SD"){echo "selected";}; ?>>SD</option>
                                <option value="TK" <?php if($row['pendidikan_terakhir'] == "TK"){echo "selected";}; ?>>TK</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="<?= $row['jurusan'] ?>" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Alamat Sekarang</label>
                            <input type="text" class="form-control" name="alamat_sekarang" value="<?= $row['alamat_sekarang'] ?>" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Telp/No.HP</label>
                            <input type="text" class="form-control" name="nohp" value="<?= $row['nohp'] ?>" maxlength=13 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                                <option value="Islam" <?php if($row['agama'] == "Islam"){echo "selected";}; ?>>Islam</option>
                                <option value="Katolik" <?php if($row['agama'] == "Katolik"){echo "selected";}; ?>>Katolik</option>
                                <option value="Kristen" <?php if($row['agama'] == "Kristen"){echo "selected";}; ?>>Kristen</option>
                                <option value="Buddha" <?php if($row['agama'] == "Buddha"){echo "selected";}; ?>>Buddha</option>
                                <option value="Hindu" <?php if($row['agama'] == "Hindu"){echo "selected";}; ?>>Hindu</option>
                                <option value="Konghuchu" <?php if($row['agama'] == "Konghuchu"){echo "selected";}; ?>>Konghucu</option>
                                <option value="Lainnya" <?php if($row['agama'] == "Lainnya"){echo "selected";}; ?>>Lainnya</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <select name="golongan_darah" id="" class="form-select" required>
                            <option value="" hidden>Pilih</option>
                                <option value="A" <?php if($row['golongan_darah'] == "A"){echo "selected";}; ?>>A</option>
                                <option value="B" <?php if($row['golongan_darah'] == "B"){echo "selected";}; ?>>B</option>
                                <option value="AB" <?php if($row['golongan_darah'] == "AB"){echo "selected";}; ?>>AB</option>
                                <option value="O" <?php if($row['golongan_darah'] == "O"){echo "selected";}; ?>>O</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Email Sekolah</label>
                            <input type="email" class="form-control" name="email_sekolah" value="<?= $row['email_sekolah'] ?>" maxlength=50 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Email Pribadi</label>
                            <input type="text" class="form-control" name="email_pribadi" value="<?= $row['email_pribadi'] ?>" maxlength=50 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status Relawan</label>
                            <input type="text" class="form-control" name="status_relawan" value="<?= $row['status_relawan'] ?>" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">ID Relawan</label>
                            <input type="text" class="form-control" name="id_relawan" value="<?= $row['id_relawan'] ?>" maxlength=10 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Status Kerja</label>
                           <select name="resign" id="" class="form-select" required>
                            <option value="AKTIF" <?php if($row['resign'] == "AKTIF"){echo "selected";}; ?>>AKTIF</option>
                                <option value="RESIGN" <?php if($row['resign'] == "RESIGN"){echo "selected";}; ?>>RESIGN</option>
                                <option value="MATI" <?php if($row['resign'] == "MATI"){echo "selected";}; ?>>MATI</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Foto Pribadi</label><br><img src="../../assets/images/img/<?= $row['gambar'] ?>" alt="gambar profil" width=100em height=100em><br><br>
                            <input type="file" class="form-control" name="gambar">
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
}
}
include "../footer.php";
?>