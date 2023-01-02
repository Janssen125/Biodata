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

// Include autoloader 
require_once 'vendor/autoload.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
use Dompdf\Options;
// Instantiate and use the dompdf class 

$options=new Options();
$options->set('defaultFont', 'Times-Bold');
$options->set('dpi','120');
$options->set('enable_html5_parser',true);
// $options->set('tempDir','C:\xampp\htdocs\Github\Github\biodata-old\'');

$url = "html/unit.php";
$file = file_get_contents($url);

$dompdf = new Dompdf($options);
  // Load HTML content

$dompdf->loadHtml($file); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'portrait'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream("Per Unit", array("Attachment" => 0));
  ?>