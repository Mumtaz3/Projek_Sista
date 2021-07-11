<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Pendaftaran Peserta</title>

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
      <div class="col-md-12">
        <nav>
          <div class="d-flex flex-row-reverse">
            <div class="p-2">Daftar Peserta</div>
            <a href="detail_jadwal_seminar_ta.html">
              <div class="p-2">Detail Jadwal »</div>
            </a>
            <a href="jadwal_seminar_ta.html">
              <div class="p-2">Jadwal »</div>
            </a>
            <a href="<?= base_url()?>">
              <div class="p-2">Home »</div>
            </a>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          Mahasiswa Seminar : Diego Armanda (0102002)
        </p>
        <p>
          Judul : Rancang Bangun Aplikasi Seminar Tugas Akhir Berbasis Web Menggunakan MVC Framework
        </p>
        <p>
          Waktu : Senin, 4 Januari 2021, 10:00
        </p>
      </div>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


      <div class="row">
      <div class="col-md-12">
<form role="form" action="<?php echo base_url('index.php/daftar/save_peserta');?>" method="post">
    <fieldset style="border: 1px solid;">
    <legend class="col-md-3 ml-4">Form Peserta Seminar</legend>
  <div class="form-group row ml-4">
    <label class="col-4 col-form-label" for="text">Nim</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nim" placeholder="masukkan nim" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row ml-4">
    <label class="col-4 col-form-label" for="text">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="text" name="nama_mahasiswa" placeholder="masukkan nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row ml-4">
    <label for="select" class="col-4 col-form-label">Prodi</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="Si">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
      </select>
    </div>
  </div>
  <div class="form-group row ml-4">
              <label class="col-4">Program</label>
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="d3" required>
                  <label for="radio_0" class="custom-control-label">D3</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="s1reg" required>
                  <label for="radio_1" class="custom-control-label">S1 Reguler</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="s1fast">
                  <label for="radio_2" class="custom-control-label">S1 Fast Trackt</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="radio" id="radio_3" type="radio" class="custom-control-input" value="s2" required>
                  <label for="radio_3" class="custom-control-label">S2</label>
                </div>
              </div>
            </div>
  <div class="form-group row ml-4">
    <label for="select1" class="col-4 col-form-label">Seminar</label> 
    <div class="col-8">
      <select id="select1" name="seminar_id" required="required" class="custom-select">
        <option value="1">Proposal</option>
        <option value="2">Hasil</option>
        <option value="3">Skripsi</option>
      </select>
    </div>
  </div>
  <div class="form-group row ml-4">
    <label for="text2" class="col-4 col-form-label">Kehadiran</label> 
    <div class="col-8">
        <input id="text2" name="kehadiran" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
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
