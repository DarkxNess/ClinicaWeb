<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Nexo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="icon" href="imagenes/icono2.png">
    <link rel="stylesheet" href="css/MyStyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body width="100%">
  <header>
    <div class="topnav" id="myTopnav">
      <a href="index.php" class="active">Nexo</a>
      <a href="about.php">About</a>
      <?php 
        if(!isset($_SESSION['user']))
        {
      ?>

          <a  href="modal_login.php">Login</a>

      <?php 
        } 
      ?> 
      <?php
        if(isset($_SESSION['user']))
        {
          if ($_SESSION['privilegio']=="doctor" || $_SESSION['privilegio']=="admin")
          {
      ?>

            <a href="pacientes.php">Pacientes</a>

      <?php 
          }   
        }
      ?> 
      <?php
        if(isset($_SESSION['user']))
        {
          if ($_SESSION['privilegio']=="admin")
          {
      ?>
            <a href="admin.php">Admin</a>
      <?php 
          } 
        }
      ?> 
      <?php
        if(isset($_SESSION['user']))
        {
          if ($_SESSION['privilegio']=="doctor" || $_SESSION['privilegio']=="admin")
          {
      ?>
            <a href="noticias.php">Noticias</a>
      <?php 
          } 
        }
      ?> 
      <?php
        if(isset($_SESSION['user']))
        {
      ?>
          <a class="sesionTopBar" style="float:right;" href="#"> 
            Bienvenido: <?php echo $_SESSION['user']; ?> &nbsp; <?php echo $_SESSION['apellido']; ?>   
          </a>
      <?php  
        } 
      ?>

      <?php
        if(isset($_SESSION['user']))
        {
      ?>
          <a  class="sesionTopBar" href="logout.php">Logout</a>
      <?php  
        } 
      ?> 
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div id="bannerCarousel" data-ride="carousel" style="padding-top:3rem;" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="banner.jpg" alt="banner" width="100%" height="150px" class="">
        </div>
        <div class="carousel-item">
          <img src="banner.jpg" alt="banner" width="100%" height="150px" class="">
        </div>
      </div>
      <a class="carousel-control-prev" href="#bannerCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#bannerCarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
  </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="js/JavaScript.js"></script>
</body>
</html>