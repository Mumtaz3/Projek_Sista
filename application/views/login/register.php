<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('public/Asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/Asset/css/font-awesome.min.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Sign Up</title>

    <style>
        body {
            background: #b3ffb3;
            background-size: cover;
            font-family: unset;
        }

        .box {
            max-width: 350px;
            border-radius: 20px;
            margin: auto;
            background: rgba(0, 0, 0, 8);
            box-sizing: border-box;
            padding: 40px;
            color: #fff;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 5px;
            background: rgba(0, 0, 0, 10);
            outline: none;
            border: none;
            border-bottom: 1px dotted #fff;
            color: #fff;
            border-radius: 5px;
            margin: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body style="color: blue; background-color: #b3ffb3;">
<div class="row">
        <div class="col-md-12 mt-4">
          <h3 style="text-align:center">
            Sistem Informasi Seminar Tugas Akhir - SISTA
          </h3>
        </div>
      </div>
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
                    <a class="nav-link" href="<?= base_url('index.php/daftarseminar/index')?>">Daftar Seminar |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/berita')?>">Berita |</a>
                </li>
                </ul>
                <ul class="navbar-nav ml-md-auto">
                <li>
                    <a class="nav-link" href="<?= base_url('index.php/login/login')?>">Login As admin |</a>
                </li>
                </ul>  
        </div>
    </nav>

    <div class="box">
        <h1>Sign Up</h1>
        <form class="user" method="POST" action="<?= base_url()?>index.php/login/aksi_register">       
            <input type="text" name="username" placeholder="Nama Lengkap" id="nama" required>
            <input type="email" name="email" placeholder="Email" id="Email" required>
            <input type="text" name="nim" placeholder="masukkan nim" id="nim" required>
            <input type="password" name="password" placeholder="Password" id="sandi" required>
            <input type="password" name="repass" placeholder="Re Password" id="repass" required>
            <button class="btn btn-primary">Submit</button>
        </form>
        <hr class="sidebar-divider">
        <div class="text-center">
            <a class="small" href="<?php base_url()?>login">Have Account</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>

</html>
