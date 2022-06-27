<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>

	<!--<img src="image/g3.png" width="1350" height="500">-->

<div class=malasngoding-slider>
		<div class=isi-slider>
			<img src="image/g1.jpg" alt="Gambar 1">
			<img src="image/g2.jpeg" alt="Gambar 2">
			<!--<img src="gambar/gambar3.jpeg" alt="Gambar 3">-->
		</div>
	</div>
	<h1 align="Center">Media</h1>
	<!--Get Post Db-->
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>