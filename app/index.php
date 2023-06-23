<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('location: ../index.php?session=expired');
}
include('header1.php');?>
<?php include('../konfigurasi/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar1.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar1.php');?>
    <!-- /.sidebar -->

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include ('contentheader1.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('maincontent1.php');
      }
      else if($_GET['page']=='data-member'){
        include('data2.php');
      }
      else if($_GET['page']=='edit-data'){
        include('update.php');
      }
      else{
        include('not_found.php');
      }
    }
    else{
      include('maincontent1.php');
    }
    ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include('footer1.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
