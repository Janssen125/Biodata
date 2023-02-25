<?php

// Load file koneksi.php
include "../../../../config/koneksi.php";

// Load file autoload.php
require './vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = basename($_FILES['file']['name']);
	$nama_tmp = $_FILES['file']['tmp_name'];
    $path = 'tmp/' . $nama_file_baru; // Set tempat menyimpan file tersebut dimana

	move_uploaded_file($nama_tmp, $path);

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
    $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		$nomor_induk_karyawan = $row['B']; // Ambil data nama
		$unit = $row['C']; // Ambil data jenis kelamin
		$nama_lengkap = $row['D']; // Ambil data telepon
		$jenis_kelamin = $row['E'];
		$jabatan = $row['F'];
		$tanggal_mulai_tugas = $row['G'];
		$status_karyawan = $row['H'];
		$skpwt = $row['I'];
		$tempat_lahir = $row['J'];
		$tanggal_lahir = $row['K'];
		$medical_check_up = $row['L'];
		$status_kk = $row['M'];
		$nik_ktp = $row['N'];
		$alamat_ktp = $row['O'];
		$no_npwp = $row['P'];
		$alamat_npwp = $row['Q'];
		$rekening_sinarmas = $row['R'];
		$bpjs_tenaga_kerja = $row['S'];
		$bpjs_kesehatan = $row['T'];
		$pendidikan_terakhir = $row['U'];
		$jurusan = $row['V'];
		$alamat_sekarang = $row['W'];
		$nohp = $row['X'];
		$agama = $row['Y'];
		$golongan_darah = $row['Z'];
		$email_sekolah = $row['AA'];
		$email_pribadi = $row['AB'];
		$status_relawan = $row['AC'];
		$id_relawan = $row['AD'];

		// Cek jika semua data tidak diisi
		if($nomor_induk_karyawan == "" && $unit == "" && $nama_lengkap == "" && $jenis_kelamin == "" && $jabatan == "" && $tanggal_mulai_tugas == "" && $status_karyawan == "" && $skpwt == "" && $tempat_lahir == ""
		 && $tanggal_lahir == "" && $medical_check_up == "" && $status_kk == "" && $nik_ktp == "" && $alamat_ktp == "" && $no_npwp == "" && $alamat_npwp == ""
		 && $rekening_sinarmas == "" && $bpjs_tenaga_kerja == "" && $bpjs_kesehatan == "" && $pendidikan_terakhir == "" && $jurusan == "" && $alamat_sekarang == ""
		 && $nohp == "" && $agama == "" && $golongan_darah == "" && $email_sekolah == "" && $email_pribadi == "" && $status_relawan == "" && $id_relawan == "")
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Proses simpan ke Database
			// Buat query Insert
			
			$namagambar = $_FILES['foto']['name'];
			$tipegambar = $_FILES['foto']['type'];
			$tmpgambar = $_FILES['foto']['tmp_name'];
			$lokgambar = '../../../../assets/images/img/';
			
			$query = mysqli_query($db, "SELECT * FROM biodata WHERE gambar='$namagambar'");
		
			if(mysqli_num_rows($query) > 0){
				echo "<script>alert('Nama Gambar sudah dipakai, ubah gambar terlebih dahulu');</script>";
			}
			else{
		//(id, no_urut, nomor_induk_karyawan, unit, nama_lengkap, jenis_kelamin, jabatan, tanggal_mulai_tugas, status_karyawan, skpwt/sk, tempat_lahir, tanggal_lahir, umur, medical_check_up, status_kk, nik_ktp, alamat_ktp, no_npwp, alamat_npwp, rekening_sinarmas, bpjs_tenaga_kerja, bpjs_kesehatan, pendidikan_terakhir, jurusan, lama_kerja, alamat_sekarang, nohp, agama, golongan_darah, email_sekolah, email_pribadi, status_relawan, id_relawan, resign, gambar)
			if(is_uploaded_file($tmpgambar)){
				if(move_uploaded_file($tmpgambar, $lokgambar.$namagambar)){
		
			$sql = mysqli_query($db, "INSERT INTO biodata VALUES('','$nomor_induk_karyawan','$unit','$nama_lengkap',
			'$jenis_kelamin','$jabatan','$tanggal_mulai_tugas','$status_karyawan','$skpwt','$tempat_lahir',
			'$tanggal_lahir','$medical_check_up','$status_kk','$nik_ktp','$alamat_ktp','$no_npwp','$alamat_npwp',
			'$rekening_sinarmas','$bpjs_tenaga_kerja','$bpjs_kesehatan','$pendidikan_terakhir','$jurusan','$alamat_sekarang',
			'$nohp','$agama','$golongan_darah','$email_sekolah','$email_pribadi','$status_relawan','$id_relawan','AKTIF','$namagambar')");
				}
			}
			// $sql->bindParam(':nis', $nis);
			// $sql->bindParam(':nama', $nama);
			// $sql->bindParam(':jk', $barang);
			// $sql->bindParam(':berat', $berat);
			// $sql->bindParam(':alamat', $alamat);		
		    // $sql->execute();
			var_dump($sql);
		}
		
	}

		$numrow++; // Tambah 1 setiap kali looping
	}
	
	$paths = 'tmp/' . $nama_file_baru;
    unlink($paths); // Hapus file excel yg telah diupload, ini agar tidak terjadi penumpukan file
}

header('location: ../../'); // Redirect ke halaman awal
