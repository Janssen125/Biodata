<?php
include "../header.php";
?>

<body style="overflow-x:hidden;">
	<div class="row justify-content-center">
		<div class="col-md-11">
            <div class="card" style="margin-top:50px;">
			<div class="card-body" style="margin-top:1em;">
			<h1>Dashboard</h1>
			<link rel="stylesheet" type="text/css" href="./hierarchical-bar-chart/inspector.css">
			<style>
        	.observablehq--inspect{
       		     visibility: hidden;
       		 }
    		</style>
					<script type="module">
						import define from "./hierarchical-bar-chart/index.js";
						import {Runtime, Inspector} from "./hierarchical-bar-chart/runtime.js";

						const runtime = new Runtime();
						const main = runtime.module(define, Inspector.into(document.getElementById('chart')));
					</script>
					<div id='chart'></div>
			</div>
			</div>
		</div>
	</div>
	<?php
include "../footer.php";
?>