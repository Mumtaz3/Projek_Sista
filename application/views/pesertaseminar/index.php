<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('public/Asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/Asset/css/font-awesome.min.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>View Peserta Seminar</title>


</head>

<body style="background-color: #b3ffb3;">
    <!-- Teks SISTA -->
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
            <a class="navbar-brand" href="index.html">Home |</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="jadwal_seminar_ta.html">Jadwal |</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="seminar(1).html">Daftar Seminar |</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="news.html">Berita |</a>
             </li>
          </ul>
          </div>
        </nav>
        </div>
      </div>
      </div>
    </div>
          <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
              <nav>
                <ol class="breadcrumb" style="background-color: transparent;" >
                  <li class="breadcrumb-item">
                    <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                    <a href="<?php base_url()?>index.php/admin">Admin</a>
                  </li>
                  <li class="breadcrumb-item">
                    <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                    <a href="<?php echo base_url()?>">Log out</a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          </div>
        </div>


         <!-- Table -->
       <div class="row">
        <div class="col-md-12">
            <table class="table ml-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Mahasiswa/i</th>
                                <th>Prodi</th>
                                <th>Gelar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($Peserta->result() as $Peserta){
                                    echo '
                                    <tr>
                                        <td>'.$Peserta->no'</td>
                                        <td>'.$Peserta->nim.'</td>
                                        <td>'.$Peserta->mahasiswa.'</td>
                                        <td>'.$Peserta->Seminar_id.'</td>
                                        <td>'.$Peserta->kehadiran.'</td>
                                        
                                        <td>
                                        <a class="btn btn-primary" href="'.base_url().'index.php/daftar/edit/'.$peserta->id.'">Edit</a>
                                        <a class="btn btn-danger" onclick="confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/daftar/delete/'.$peserta->id.'">Delete</a>
                                        </td>
                                        
                                    </tr>';
                                }
                            ?>
                        </tbody>
            </table>
        </div>
    </div>
      <div class="mt-5 ml-5  row">
				<div class="col-md-12 d-flex flex-row-start">
					<address>
                         <strong>Tentang SISTA</strong><br>SISTA adalah aplikasi Untuk Memudahkan Mahasiswa <br>Melakukan Seminar Tugas Akhir mulai dari bimbingan <br> ke pembimbing sampai jadwal 
					</address>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>



</html>