<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Pendaftaran Peserta Seminar</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?= base_url('public/Asset/css/bootstrap.min.css')?>" rel="stylesheet">
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
                                <a class="navbar-brand" href="<?= base_url()?>">Home |</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="jadwal_seminar_ta.html">Jadwal |</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Daftar Seminar |</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php base_url()?>berita">Berita |</a>
                            </li>
                        </ul>
                            <ul class="navbar-nav ml-md-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="<?php base_url()?>login/login">Login User<span
                                      class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                  <a class="nav-link" href="<?php base_url()?>login/login">Login Admin<span
                                      class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    Pendaftaran Seminar berlaku untuk mahasiswa yang telah mendapat persetujuan dari Pembimbing TA
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form role="form" name="daftarpeserta" role="form"
                    action="admin_ kelola_ daftar_ peserta_ seminar_ ta.html" method="post">
                    <fieldset style="border: 1px solid;">
                        <legend class="col-md-3 ml-4">Form Peserta Seminar</legend>
                        <div class="form-row ml-4 mr-4">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-address-book"></i>
                                            </div>
                                            <input id="nim" name="nim" type="number" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user-circle"></i>
                                            </div>
                                            <input id="nama" name="nama" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prodi" class="col-4 col-form-label">Prodi</label>
                                    <div class="col-8">
                                        <select id="prodi" name="prodi" class="custom-select form-control" required>
                                            <option value="si">Sistem Informasi</option>
                                            <option value="ti">Teknik Informatika</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl" class="col-4 col-form-label">Tanggal Seminar</label>
                                    <div class="col-8">
                                        <input id="tgl" name="tgl" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jam" class="col-4 col-form-label">Jam Seminar</label>
                                    <div class="col-8">
                                        <input class="form-control" id="jam" name="jam" type="time" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ruang" class="col-4 col-form-label">Ruangan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-building"></i>
                                            </div>
                                            <input id="ruang" name="ruang" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button type="submit" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="textarea" class="col-4 col-form-label">Judul TA</label>
                                    <div class="col-8">
                                        <textarea id="textarea" name="judulta" cols="40" rows="4"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select" class="col-4 col-form-label">Seminar</label>
                                    <div class="col-8">
                                        <select id="select" name="seminar_id" class="custom-select form-control">
                                            <option value="1">Proposal</option>
                                            <option value="2">Hasil</option>
                                            <option value="3">Skripsi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select1" class="col-4 col-form-label">Pembimbing</label>
                                    <div class="col-8">
                                        <select id="select1" name="select1" class="custom-select form-control" required>
                                            <option value="sirojul">Sirojul Munir S.Si., M.Kom</option>
                                            <option value="amalia">AMALIA RAHMAH, S.T, S.T, M.T</option>
                                            <option value="nurul">NURUL JANAH, S.IIP, M.HUM</option>
                                            <option value="sapto">SAPTO WALUYO, S.Sos, M.Sc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select2" class="col-4 col-form-label">Penguji 1</label>
                                    <div class="col-8">
                                        <select id="select2" name="penguji1" class="custom-select form-control" required>
                                            <option value="ahmad">Ahmad Rio M.Si</option>
                                            <option value="kurniawan">KURNIAWAN DWI PRASETYO, S.T, M.T</option>
                                            <option value="bintang">MUHAMMAD BINTANG, S.Kom</option>
                                            <option value="Nugroho">NUGROHO DWI SAPUTRA, S.Kom, M.Ti</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select3" class="col-4 col-form-label">Penguji 2</label>
                                    <div class="col-8">
                                        <select id="select3" name="penguji2" class="custom-select form-control" required>
                                            <option value="Amalia">Amalia Rahmah M.T</option>
                                            <option value="Reza">REZA ALDIANSYAH, S.T, M.Ti</option>
                                            <option value="Rusmanto">RUSMANTO, M.M., Drs</option>
                                            <option value="Dedy">DEDY ACHMADI, S.T, M.T</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('public/Asset/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('public/Asset/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('public/Asset/js/scripts.js')?>"></script>
</body>

</html>
