<?php 
  
  // echo "<pre>";
  // var_dump($title['menu']);
  // exit;  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets/img/apple-icon.png") ?>" >
  <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/favicon.png") ?>"  >
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CADERNO UNIVERSITÁRIO
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url("assets/css/material-dashboard.css") ?> " rel="stylesheet" />
  <!-- Jquery datatables -->  
  <link href="<?php echo base_url("assets/css/jquery.dataTables.min.css") ?> " rel="stylesheet" />  
  <!-- <script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/js/plugins/jquery.dataTables.js")?>"></script> -->
  <script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/js/plugins/jquery-3.4.1.min.js")?>"></script>
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <a href="<?php echo base_url('home') ?>" class="simple-text logo-normal">
          CADERNO UNIVERSITÁRIO
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo $title['menu'] == 'home' ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url('home')?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo $title['menu'] == 'Materias' ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url('materias')?>">
              <i class="material-icons">library_books</i>
              <p>Materias</p>
            </a>
          </li>
          <li class="nav-item <?php echo $title['menu'] == 'Area de estudo' ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url('areaDeEstudo')?>">
              <i class="material-icons">import_contacts</i>
              <p>Area de Estudo</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
     
<?php $this->load->view('menu/navigation'); ?>

  