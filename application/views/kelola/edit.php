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
            <a class="nav-link" href="<?php echo base_url()?>admin">
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
        <a class="collapse-item" href="<?php base_url()?>kelola/index">Kelola Registrasi User</a>
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


  <!-- Begin Page Content -->
  <div class="container-fluid">
           
           <?php echo form_open_multipart('kelola/update'); ?>
               
           <input type="hidden" name="nim" id="id" value="<?php echo $user->nim; ?>"/>
                   <label for="">Username</label>
                   <input type="text" name="username" placeholder="masukan username" value="<?= $user->username?>" class="form-control">
                                     
                   <label for="">Email</label>
                   <input type="email" name="email" placeholder="masukan email" value="<?= $user->email?>"class="form-control">

                    <label for="">Foto lama</label>
                   <img src="<?=base_url().'/img/'.$user->foto?>"  alt="" width="100" height="100">
                   <input type="hidden" name="old_image" >
                   
                   <label for="">Upload foto</label>
                   <input type="file" name="foto">
      
                   <button type="submit" class="btn btn-primary mt-3">Submit</button>
                   <button type="submit" class="btn btn-primary mt-3">Cancel</button>
               
                   <?php echo form_close(); ?>
           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->