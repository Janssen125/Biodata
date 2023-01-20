<?php 
$id = $_GET['id'];
include '../../config/koneksi.php';
$query = mysqli_query($db, "SELECT * FROM berkas WHERE id=$id");
while($row = mysqli_fetch_array($query)){
    $nama = $row['berkas'];
}
  // The file path
  $file = "../../assets/pdf/".$nama; 
  // Header Content Type
  header("Content-type: application/pdf"); 

  header("Content-Length: " . filesize($file)); 
    
  // Send the file to the browser.
  readfile($file); 
?>