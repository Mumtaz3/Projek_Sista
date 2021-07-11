<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Login </title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <!-- window.location.("admin_kelola_ daftar_seminar_ ta.html");-->
    <link href="<?= base_url('public/Asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('public/Asset/css/style.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/Asset/css/font-awesome.min.css')?>">

  </head>
  <body style="color: blue; background-color: #b3ffb3;">

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
                  <i class="fa fa-home fa-1x" aria-hidden="true"></i>
                  <a class="navbar-brand" href="<?= base_url()?>">Home |</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jadwal_seminar_ta.html">Jadwal |</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('index.php/Daftarseminar/index')?>">Daftar Seminar |</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('index.php/berita/index')?>">Berita |</a>
                </li>
              </ul>
                <ul class="navbar-nav ml-md-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Login User<span
                        class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Login Admin<span
                        class="sr-only">(current)</span></a>
                  </li>
                </ul>
            </div>
          </nav>
        </div>
      </div>
	<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header" style="text-align:center">
                LOGIN 
            </h5>
            <div class="card-body">
            <form class="user" method="POST" action="<?= base_url()?>index.php/login/aksi_login">
                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Username</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-circle"></i>
                      </div> 
                      <input id="nama" name="username" type="text" class="form-control" required />
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pass" class="col-4 col-form-label">Password</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                      </div> 
                      <input id="pass" name="sandi" type="password" class="form-control" required />
                    </div>
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button type="submit" class="btn btn primary">Sign In</button>
                  </div>
                </div>
              </form>
              <div class="text-center">
                  <a class="small" href="<?php base_url()?>register">Haven't Account!</a>
              </div>
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
