<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
   $nomor_induk_karyawan = $_POST['nomor_induk_karyawan'];
   $unit = $_POST['unit'];
   $nama_lengkap = $_POST['nama_lengkap'];
   $jenis_kelamin = $_POST['jenis_kelamin'];
   $jabatan = $_POST['jabatan'];
   $tanggal_mulai_tugas = $_POST['tanggal_mulai_tugas'];
   $status_karyawan = $_POST['status_karyawan'];
   $skpwt = $_POST['skpwt/sk'];
   $tempat_lahir = $_POST['tempat_lahir'];
   $tanggal_lahir = $_POST['tanggal_lahir'];
   $umur = $_POST['umur'];
   $medical_check_up = $_POST['medical_check_up'];
   $status_kk = $_POST['status_kk'];
   $nik_ktp  = $_POST['nik_ktp'];
   $alamat_ktp = $_POST['alamat_ktp'];
   $no_npwp  = $_POST['no_npwp'];
   $alamat_npwp = $_POST['alamat_npwp'];
   $rekening_sinarmas  = $_POST['rekening_sinarmas'];
   $bpjs_tenaga_kerja  = $_POST['bpjs_tenaga_kerja'];
   $bpjs_kesehatan  = $_POST['bpjs_kesehatan'];
   $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
   $jurusan = $_POST['jurusan'];
   $alamat_sekarang = $_POST['alamat_sekarang'];
   $nohp = $_POST['nohp'];
   $agama = $_POST['agama'];
   $golongan_darah = $_POST['golongan_darah'];
   $email_sekolah = $_POST['email_sekolah'];
   $email_pribadi = $_POST['email_pribadi'];
   $status_relawan = $_POST['status_relawan'];
   $id_relawan  = $_POST['id_relawan'];
   $resign = $_POST['resign'];
   //AKTIF RESIGN DIRUMAH
//    $gambar = $_POST['gambar'];

    $namagambar = $_FILES['gambar']['name'];
    $tipegambar = $_FILES['gambar']['type'];
    $tmpgambar = $_FILES['gambar']['tmp_name'];
    $lokgambar = '../../assets/images/img/';
    
    $query = mysqli_query($db, "SELECT * FROM biodata WHERE gambar='$namagambar'");

    if(mysqli_num_rows($query) > 0){
        echo "<script>alert('Nama Gambar sudah dipakai, ubah gambar terlebih dahulu'); location.href=('../../frontend/biodata/edit.php?id=".$id."')</script>";
    }
    else{
//(id, no_urut, nomor_induk_karyawan, unit, nama_lengkap, jenis_kelamin, jabatan, tanggal_mulai_tugas, status_karyawan, skpwt/sk, tempat_lahir, tanggal_lahir, umur, medical_check_up, status_kk, nik_ktp, alamat_ktp, no_npwp, alamat_npwp, rekening_sinarmas, bpjs_tenaga_kerja, bpjs_kesehatan, pendidikan_terakhir, jurusan, lama_kerja, alamat_sekarang, nohp, agama, golongan_darah, email_sekolah, email_pribadi, status_relawan, id_relawan, resign, gambar)
    if(is_uploaded_file($tmpgambar)){
        if(move_uploaded_file($tmpgambar, $lokgambar.$namagambar)){
            $query2 = mysqli_query($db, "UPDATE `biodata` SET `nomor_induk_karyawan` = '$nomor_induk_karyawan', `unit` = '$unit', `nama_lengkap` = '$nama_lengkap', `jenis_kelamin` = '$jenis_kelamin', `jabatan` = '$jabatan', `tanggal_mulai_tugas` = '$tanggal_mulai_tugas', `status_karyawan` = '$status_karyawan', `skpwt/sk` = '$skpwt', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `umur` = '$umur', `medical_check_up` = '$medical_check_up', `status_kk` = '$status_kk', `nik_ktp` = '$nik_ktp', `alamat_ktp` = '$alamat_ktp', `no_npwp` = '$no_npwp', `alamat_npwp` = '$alamat_npwp', `rekening_sinarmas` = '$rekening_sinarmas', `bpjs_tenaga_kerja` = '$bpjs_tenaga_kerja', `bpjs_kesehatan` = '$bpjs_kesehatan', `pendidikan_terakhir` = '$pendidikan_terakhir', `jurusan` = '$jurusan', `alamat_sekarang` = '$alamat_sekarang', `nohp` = '$nohp', `agama` = '$agama', `golongan_darah` = '$golongan_darah', `email_sekolah` = '$email_sekolah', `email_pribadi` = '$email_pribadi', `status_relawan` = '$status_relawan', `id_relawan` = '$id_relawan', `resign` = '$resign', `gambar` = '$namagambar' WHERE `biodata`.`id` = $id");
            if($query2){
                echo "<script>alert('Daftar Biodata Berhasil Diupdate!');location.href=('../../frontend/biodata/')</script>";
            }
            else{
                echo "<script>alert('Daftar Biodata Gagal Diupdate!');location.href=('../../frontend/biodata/')</script>";
        }
    }
        else{
            echo "<script>alert('gambar gagal dipindah'); location.href=('../../frontend/dashboard/')</script>";
        }
    }
    else{
        $query1 = mysqli_query($db, "UPDATE `biodata` SET `nomor_induk_karyawan` = '$nomor_induk_karyawan', `unit` = '$unit', `nama_lengkap` = '$nama_lengkap', `jenis_kelamin` = '$jenis_kelamin', `jabatan` = '$jabatan', `tanggal_mulai_tugas` = '$tanggal_mulai_tugas', `status_karyawan` = '$status_karyawan', `skpwt/sk` = '$skpwt', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `umur` = '$umur', `medical_check_up` = '$medical_check_up', `status_kk` = '$status_kk', `nik_ktp` = '$nik_ktp', `alamat_ktp` = '$alamat_ktp', `no_npwp` = '$no_npwp', `alamat_npwp` = '$alamat_npwp', `rekening_sinarmas` = '$rekening_sinarmas', `bpjs_tenaga_kerja` = '$bpjs_tenaga_kerja', `bpjs_kesehatan` = '$bpjs_kesehatan', `pendidikan_terakhir` = '$pendidikan_terakhir', `jurusan` = '$jurusan', `alamat_sekarang` = '$alamat_sekarang', `nohp` = '$nohp', `agama` = '$agama', `golongan_darah` = '$golongan_darah', `email_sekolah` = '$email_sekolah', `email_pribadi` = '$email_pribadi', `status_relawan` = '$status_relawan', `id_relawan` = '$id_relawan', `resign` = '$resign' WHERE `biodata`.`id` = $id");
        if($query1){
            echo "<script>alert('Daftar Biodata Berhasil Diupdate'); location.href=('../../frontend/biodata/')</script>";
    }
    else{
        echo "gagal";
    }
}
}
}
else{
    header ('../../frontend/dashboard');
}
?>