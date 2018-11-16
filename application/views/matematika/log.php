<!DOCTYPE html>
<html>
	<head>
		<title>Calculator log</title>

			<style type="text/css">
			body{
			backgroun-color:#fff;
			font-family: Lucida Grande, Verdana, Sans-serif;
			margin:40px;
			font-size:14px;
			color: #4f5515;
			}

			a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;	
			}

			h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #d0d0d0;
			font-size: 16px;
			font-weight: bold;
			margin: 24px 0 2px;
			padding: 5px 0 6px 0;
			} 
	</style>
	</head>

<body>
	<h1>Menghitung Log</h1>
	<p>Silahkan Masukan Data Berikut :</p>
	<ul>
		<?php echo form_open('matematika/log'); ?>
		<?php echo form_input('v1',$v1); ?> log
		<?php echo form_input('v2',$v2); ?> <br>

		<?php echo form_submit('submit','Hitung Kuy!'); ?>
		<?php echo form_close(); ?> <br>

		Hasil : <?php echo $hasil; ?>
	</ul>

	<p><?php echo anchor('Matematika','Home'); ?></p>
	<p>Page Endered in {elapsed_time} second</p>
</body>
</html>
