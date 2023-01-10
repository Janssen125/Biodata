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
$no = 1;
$rows = mysqli_query($db, "SELECT * FROM biodata ORDER BY resign ASC");
?>
<!DOCTYPE html>
<html class='light-style layout-menu-fixed' dir='ltr'
    data-theme='theme-default' data-assets-path='../../../assets/' data-template='vertical-menu-template-free'>
    <head>
        <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
        <?php
        $title = "Unit";
        require 'js/htmlpdf.php';
        ?>
                                <script>
                            function printA() {
  const originalHtml = document.body.innerHTML;
  var Content = document.getElementById("kulit").innerHTML;
  var a = window.open('', '', 'height=500, width=500');
  a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(Content);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
}
                        </script>
    </head>
<body><font face='Helvetica'>
             <center>
                <button class="btn btn-primary" style="margin-top:2em;" onClick="location.href=('../');"><- Back</button>
             <button id="download-button" class = "btn btn-danger" style="margin-top:2em;">Download as PDF</button>
             <button class="btn btn-info" style="margin-top:2em;" onClick="printA();">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button>
            </center>
<div id = "kulit" style = "padding: 20px;">
<center>
                        <table border=1 cellpadding=10 cellspacing = 0>
                            <thead>
                                <tr>
                                <th style='text-align:center;' colspan=9> Data Per Status Kerja </th>
                                </tr>
                                <tr>
                                <th>
                                No
                                </th>
                                <th bgcolor="lightgrey">
                                    Status Kerja
                                </th>
                                <th>
                                Unit
                                </th>
                                <th>
                                Nama Lengkap
                                </th>
                                <th>
                                Nomor Induk Karyawan
                                </th>
                                <th>
                                Jabatan
                                </th>
                                <th>
                                Status Karyawan
                                </th>
                                <th>
                                ID Relawan
                                </th>
                                <th>
                                Stasus Relawan
                                </th></tr>
                            </thead>
                            <tbody>
                        
                            <?php
                            foreach($rows as $row) {
                                ?>
                                    <tr>
                                    <td style='text-align:center;'><?= $no++ ?></td>
                                    <td style='text-align:center;background-color:lightgrey;'><?= $row['resign'] ?></td>
                                    <td style='text-align:center;'><?= $row['unit'] ?></td>                                    
                                    <td style='text-align:center;'><?= $row['nama_lengkap'] ?></td>
                                    <td style='text-align:center;'><?= $row['nomor_induk_karyawan'] ?></td>
                                    <td style='text-align:center;'><?= $row['jabatan'] ?></td>
                                    <td style='text-align:center;'><?= $row['status_karyawan'] ?></td>
                                    <td style='text-align:center;'><?= $row['id_relawan'] ?></td>
                                    <td style='text-align:center;'><?= $row['status_relawan'] ?></td>
                                </tr>
                                <?php   
                            }
                            ?>
                            </tbody>
                        </table>
                        </center>
                        </div>

                        <script>
			const button = document.getElementById('download-button');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('kulit');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save(); 
			}

			button.addEventListener('click', generatePDF);
		</script>
                        </body>
                        </html>
