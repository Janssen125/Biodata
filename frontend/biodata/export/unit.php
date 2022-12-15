<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "<script>alert('Silahkan masuk terlebih dahulu untuk mengakses dashboard');location.href=('../../../');</script>";
}
$now = time();
$no = 1;
if($now > $_SESSION['expire']){
  session_destroy();
  echo "<script>alert('Session has been destoryed!!');location.href=('../../../');</script>";
}

include '../../../config/koneksi.php';
// Include autoloader 
require_once 'vendor/autoload.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
use Dompdf\Options;
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM biodata WHERE id=$id");
while($row = mysqli_fetch_array($query)){
    $nama = $row['nama_lengkap'];
    $tgl1 = strtotime($row['tanggal_lahir']);
    $tgl2 = strtotime($row['tanggal_mulai_tugas']);
    $tgl3 = strtotime(date("Y-m-d"));
    $year = $tgl3-$tgl1;
    $sec = $tgl3-$tgl2;

    $image = file_get_contents('../../../assets/images/img/'.$row['gambar']);
    $type = pathinfo($image, PATHINFO_EXTENSION);
    $imagedata=base64_encode($image);
    $imgpath='<img src="data:image/'.$type.';base64,'.$imagedata.'" width=150em height=200em>';
$isi ='
<!DOCTYPE html>
<html class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../../../assets/" data-template="vertical-menu-template-free">
<body><font face="Helvetica">
                        <table border=1 cellpadding=10>
                            <thead>
                                <tr>
                                    <th><h1 style="text-align:center; padding-bottom:1.5em;">BIODATA KARYAWAN</h1></th>
                                    <th><center>'.$imgpath.'</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NO URUT</td><td style="text-align:center;">'. $row['id'].'</td></tr>
                                    <tr><td>NOMOR INDUK KARYAWAN</td><td style="text-align:center;">'. $row['nomor_induk_karyawan'].'</td></tr>
                                    <tr><td>UNIT</td><td style="text-align:center;">'. $row['unit'].'</td></tr>
                                    <tr><td>NAMA LENGKAP</td><td style="text-align:center;">'. $row['nama_lengkap'].'</td></tr>
                                    <tr><td>JENIS KELAMIN</td><td style="text-align:center;">'. $row['jenis_kelamin'].'</td></tr>
                                    <tr><td>JABATAN</td><td style="text-align:center;">'. $row['jabatan'].'</td></tr>
                                    <tr><td>TANGGAL MULAI TUGAS (TMT)</td><td style="text-align:center;">'. $row['tanggal_mulai_tugas'].'</td></tr>
                                    <tr><td>STATUS KARYAWAN</td><td style="text-align:center;">'. $row['status_karyawan'].'</td></tr>
                                    <tr><td>NO. SKPWT/SK</td><td style="text-align:center;">'. $row['skpwt/sk'].'</td></tr>
                                    <tr><td>TEMPAT LAHIR</td><td style="text-align:center;">'. $row['tempat_lahir'].'</td></tr>
                                    <tr><td>TANGGAL LAHIR</td><td style="text-align:center;">'. $row['tanggal_lahir'].'</td></tr>
                                    <tr><td>UMUR</td><td style="text-align:center;">
                                        '.
                                        round($year/31557600,0,PHP_ROUND_HALF_DOWN)
                                        .'
                                          Tahun    
                                </td></tr>
                                    <tr><td>MEDICAL CHECK UP (MCU) TERAKHIR</td><td style="text-align:center;">'. $row['medical_check_up'].'</td></tr>
                                    <tr><td>STATUS KK</td><td style="text-align:center;">'. $row['status_kk'].'</td></tr>
                                    <tr><td>NIK KTP</td><td style="text-align:center;">'. $row['nik_ktp'].'</td></tr>
                                    <tr><td>ALAMAT KTP</td><td style="text-align:center;">'. $row['alamat_ktp'].'</td></tr>
                                    <tr><td>NO NPWP</td><td style="text-align:center;">'. $row['no_npwp'].'</td></tr>
                                    <tr><td>ALAMAT NPWP</td><td style="text-align:center;">'. $row['alamat_npwp'].'</td></tr>
                                    <tr><td>REKENING SINARMAS</td><td style="text-align:center;">'. $row['rekening_sinarmas'].'</td></tr>
                                    <tr><td>BPJS TENAGA KERJA</td><td style="text-align:center;">'. $row['bpjs_tenaga_kerja'].'</td></tr>
                                    <tr><td>BPJS KESEHATAN</td><td style="text-align:center;">'. $row['bpjs_kesehatan'].'</td></tr>
                                    <tr><td>PENDIDIKAN TERAKHIR</td><td style="text-align:center;">'. $row['pendidikan_terakhir'].'</td></tr>
                                    <tr><td>JURUSAN</td><td style="text-align:center;">'. $row['jurusan'].'</td></tr>
                                    <tr><td>LAMA KERJA</td><td style="text-align:center;">
                                    '.
                                        round($sec/86400,0,PHP_ROUND_HALF_DOWN)
                                        .'
                                          Hari    
                                </td></tr>
                                    <tr><td>ALAMAT SEKARANG</td><td style="text-align:center;">'. $row['alamat_sekarang'].'</td></tr>
                                    <tr><td>TELP/NO.HP</td><td style="text-align:center;">'. $row['nohp'].'</td></tr>
                                    <tr><td>AGAMA</td><td style="text-align:center;">'. $row['agama'].'</td></tr>
                                    <tr><td>GOLONGAN DARAH</td><td style="text-align:center;">'. $row['golongan_darah'].'</td></tr>
                                    <tr><td>EMAIL SEKOLAH</td><td style="text-align:center;">'. $row['email_sekolah'].'</td></tr>
                                    <tr><td>EMAIL PRIBADI</td><td style="text-align:center;">'. $row['email_pribadi'].'</td></tr>
                                    <tr><td>STATUS RELAWAN</td><td style="text-align:center;">'. $row['status_relawan'].'</td></tr>
                                    <tr><td>ID RELAWAN</td><td style="text-align:center;">'. $row['id_relawan'].'</td></tr>
                                    <tr><td>RESIGN</td><td style="text-align:center;">'. $row['resign'].'</td></tr>
                                </tr>
                            </tbody>
                        </table>
                        </font>
';
}
}
$options=new Options();
$options->set('defaultFont', 'Times-Bold');
$options->set('dpi','120');
$options->set('enable_html5_parser',true);
// $options->set('tempDir','C:\xampp\htdocs\Github\Github\biodata-old\'');

$dompdf = new Dompdf($options);
  // Load HTML content 
//   echo $isi;
$dompdf->loadHtml($isi); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'portrait'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream("Biodata ".$nama, array("Attachment" => 0));
  ?>