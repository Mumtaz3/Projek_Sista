<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Halaman Home</title>
	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="<?= base_url('public/Asset/css/bootstrap.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/Asset/css/font-awesome.min.css')?>">
	<link href="<?= base_url('public/Asset/css/style.css')?>" rel="stylesheet">

</head>

<body style="background-color: #b3ffb3;">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h3 style="text-align:center">
					Sistem Informasi Seminar Tugas Akhir - SISTA
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="padding: 0%; margin: 0%;">
				<nav class="navbar navbar-toggleable-sm navbar-fixed-top navbar-light bg-primary">
					
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#bs-example-navbar-collapse-1">
									<span class="navbar-toggler-icon"></span>
								</button>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="navbar-nav">
							<li class="nav-item">
								<i class="fa fa-home fa-lg" aria-hidden="true"></i>
								<a class="navbar-brand" href="#">Home |</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Jadwal |</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('index.php/Daftarseminar')?>">Daftar Seminar |</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('index.php/Berita')?>">Berita |</a>
							</li>
						</ul>
							<ul class="navbar-nav ml-md-auto">
								<li class="nav-item active">
								  <a class="nav-link" href="<?php base_url()?>index.php/login/login">Login User</a>
								</li>
								<li class="nav-item active">
								  <a class="nav-link" href="<?php base_url()?>index.php/login/login">Login Admin</a>
								</li>
							</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="mt-5 ml-2 row">
			<div class="col-md-12">
				<address>
					<strong>Tentang SISTA</strong><br>SISTA adalah aplikasi Untuk Memudahkan Mahasiswa <br>Melakukan
					Seminar Tugas Akhir mulai dari bimbingan <br> ke pembimbing sampai jadwal
				</address>
			</div>
		</div>
	</div>
	</div>
	</div>

	<script src="<?= base_url('public/Asset/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('public/Asset/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('public/Asset/js/scripts.js')?>"></script>
</body>

</html>
