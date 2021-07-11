<!DOCTYPE html>
<html lang="en">

 <!-- menu -->
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SiSTA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()?>index.php/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

      <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        Registrasi 
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url()?>index.php/kelola">Kelola Registrasi User</a>
        </div>
    </div>
</li>
                <?php /*<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>*/?>
            </li>

                <?php /*<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>*/?>
            </li>

                <?php /*<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>*/?>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url()?>Verifikasi">
                    <i class="fas fa-fw fa-table"></i>
                    Verifikasi  Registrasi User</a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?php echo base_url()?>public/img/undraw_rocket.svg" alt="...">
                <?php /*<p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>*/?>

        </ul>
        <!-- End of Sidebar -->

<?php $this->load->view('include/header'); ?>


<h3>Profil User</h3>

   <div class="container">
       <div class="row">
           <div class="col-4">
           <div class="card" style="width: 18rem;">
           <img src="<?=base_url().'/img/'.$user->foto?>" height="200px" class="card-img-top " alt="...">
           <div class="card-body">
                   <h5 class="card-title"><?= $user->username?></h5>
               </div>
               </div>
           </div>
           <div class="col-6">
               <table class="table table-bordered">
                   <tbody>
                       <tr>
                           <td class="bg-primary text-white">Nama:</td>
                           <td><?= $user->username?></td>
                       </tr>
                       
                       <tr>
                           <td class="bg-primary text-white">Nim:</td>
                           <td><?= $user->nim?></td>
                       </tr>
                       
                       <tr>
                           <td class="bg-primary text-white">Email :</td>
                           <td><?= $user->email?></td>
                       </tr>
                   </tbody>
               </table>
           </div>
       </div>
   </div>

</div>
</body>
</html>
<?php $this->load->view('include/footer'); ?>
