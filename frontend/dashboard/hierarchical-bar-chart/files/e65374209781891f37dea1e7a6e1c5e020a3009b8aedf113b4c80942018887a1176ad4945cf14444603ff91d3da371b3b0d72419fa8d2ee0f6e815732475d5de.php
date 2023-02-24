<?php
$db = mysqli_connect('localhost','root','','biodata');

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE unit = 'TK'");
while($row = mysqli_fetch_array($data)){
$tk = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE unit = 'SD'");
while($row = mysqli_fetch_array($data)){
$sd = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE unit = 'SMP'");
while($row = mysqli_fetch_array($data)){
$smp = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE unit = 'SMA'");
while($row = mysqli_fetch_array($data)){
$sma = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE unit = 'SMK'");
while($row = mysqli_fetch_array($data)){
$smk = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Kepala IT'");
while($row = mysqli_fetch_array($data)){
$kepala_it = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Kepala Perpustakaan'");
while($row = mysqli_fetch_array($data)){
$kepala_perpustakaan = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Staff'");
while($row = mysqli_fetch_array($data)){
$staff = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Kepala GA'");
while($row = mysqli_fetch_array($data)){
$kepala_ga = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'HRD & Sekretariat'");
while($row = mysqli_fetch_array($data)){
$hrd = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Wakil Direktur'");
while($row = mysqli_fetch_array($data)){
$wakil_direktur = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Direktur'");
while($row = mysqli_fetch_array($data)){
$direktur = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Finance & Accounting'");
while($row = mysqli_fetch_array($data)){
$finance = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Marketing'");
while($row = mysqli_fetch_array($data)){
$marketing = $row['jmlh'];
}

$data = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM biodata WHERE jabatan = 'Penunjang'");
while($row = mysqli_fetch_array($data)){
$penunjang = $row['jmlh'];
}
?>
{
 "name": "flare",
 "children": [
  {
   "name": "Guru",
   "children": [
    {
     "name": "TK", "value":<?= $tk; ?>
    },
    {
     "name": "SD", "value":<?= $sd ?>
    },
    {
     "name": "SMP", "value":<?= $smp ?>
    },
    {
     "name": "SMA", "value":<?= $sma ?>
    },
    {
     "name": "SMK", "value":<?= $smk ?>
    }
    ]}
  ,
  
  {
    "name": "Back Office",
    "children": [
     {
      "name": "Direktur", "value":<?= $direktur ?>
    },
    {
     "name": "Wakil Direktur", "value":<?= $wakil_direktur ?>
   },
   {
    "name": "HRD & Sekretariat", "value":<?= $hrd ?>
  },
  {
   "name": "Kepala GA", "value":<?= $kepala_ga ?>
 },
 {
  "name": "Kepala IT", "value":<?= $kepala_it ?>
},
{
 "name": "Kepala Finance & Accounting", "value":<?= $finance ?>
},
{
 "name": "Kepala Perpustakaan", "value":<?= $kepala_perpustakaan ?>
},
{
 "name": "Staff", "value":<?= $staff ?>
},
{
 "name": "Marketing", "value":<?= $marketing ?>
},
{
 "name": "Penunjang", "value":<?= $penunjang ?>
}
    ]
}
 ]
}
