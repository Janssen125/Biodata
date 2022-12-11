<?php
include "../header.php";

$query = mysqli_query($db, "SELECT COUNT('unit') as jmlh FROM biodata WHERE unit = 'SMA'");
if($query){
    while($row = mysqli_fetch_array($query)){
        $SMA = $row['jmlh'];
    }
}
$query = mysqli_query($db, "SELECT COUNT('unit') as jmlh FROM biodata WHERE unit = 'SMK'");
if($query){
    while($row = mysqli_fetch_array($query)){
        $SMK = $row['jmlh'];
    }
}
$query = mysqli_query($db, "SELECT COUNT('unit') as jmlh FROM biodata WHERE unit = 'SMP'");
if($query){
    while($row = mysqli_fetch_array($query)){
        $SMP = $row['jmlh'];
    }
}
$query = mysqli_query($db, "SELECT COUNT('unit') as jmlh FROM biodata WHERE unit = 'SD'");
if($query){
    while($row = mysqli_fetch_array($query)){
        $SD = $row['jmlh'];
    }
}
$query = mysqli_query($db, "SELECT COUNT('unit') as jmlh FROM biodata WHERE unit = 'TK'");
if($query){
    while($row = mysqli_fetch_array($query)){
        $TK = $row['jmlh'];
    }
}
$dataPoints = array( 
	array("y" => $SMK,"label" => "SMK" ),
	array("y" => $SMA,"label" => "SMA" ),
	array("y" => $SMP,"label" => "SMP" ),
	array("y" => $SD,"label" => "SD" ),
	array("y" => $TK,"label" => "TK" )
);
 
?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Jumlah Guru per Unit sekarang"
	},
	axisY: {
		title: "Jumlah Guru",
		includeZero: true,
		prefix: "",
		suffix:  " orang"
	},
	data: [{
		type: "bar",
		yValueFormatString: "##0 Orang",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<center>
<div id="chartContainer" style="height: 20em; width: 90%;margin-top:3em;"></div>
</center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php
include "../footer.php";
?>