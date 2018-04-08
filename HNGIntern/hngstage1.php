<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	*{margin: 0px; 
		padding: 0px;}
	#container{background-color: #C75050;
			padding:auto;
			height: 600px;
			padding-top: 150px;
	}
	.hng{
		color: white;
		font-size: 25px;
		text-align: center;
		border-radius: 2px;
		background-color:#6C6D69;
	}
	.time{
		text-align: center;
		font-size: 25px;
		margin-top: 15px;
		line-height: 30px;
	}

	.hng h1{
		line-height: 100px;
	}



	</style>
</head>
<body>

	<?php 

	$date = date('Y-m-d H:i:s');

	?>

	<div id="container">
		<div class="hng">
			<h1>HNG INTERNSHIP</h1>
			<div class="time">
				<p style="line-height:30px;"><?php echo $date; ?></p>

			</div>
		</div>
	</div>

</body>
</html>



