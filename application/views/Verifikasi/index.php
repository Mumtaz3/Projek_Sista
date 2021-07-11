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
                                <i class="fa fa-home fa-1x" aria-hidden="true"></i>
                                <a class="navbar-brand" href="<?php echo base_url()?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="jadwal_seminar_ta.html">Jadwal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="seminar(1).html">Daftar Seminar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php base_url()?>Berita">Berita</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <nav>
                    <ol class="breadcrumb" style="background-color: transparent;">
                        <li class="breadcrumb-item">
                            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            <a href="<?php base_url()?>admin">Admin</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-12">
            
            <table class="table ml-2">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Status Verifikasi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                             Lutfi Ibrahim 
                        </td>
                        <td>
                            Diterima
                        </td>
                    </tr>
                    <tr class="table-active">
                        <td>
                            2
                        </td>
                        <td>
                            Syauqi Musyaffa
                        </td>
                        <td>
                            Ditolak
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <script src="<?= base_url('public/Asset/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('public/Asset/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('public/Asset/js/scripts.js')?>"></script>
</body>

</html>
