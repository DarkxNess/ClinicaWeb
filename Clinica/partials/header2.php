<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Nexo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  <link rel="stylesheet" href="css/MyStyles.css">
  <style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
  text-align:center;
}
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body>
<header>
  <!-- Nav tabs -->
  <div class="fixed-top">
  <ul>
    <li>
      <a  href="index.php">Nexo</a>
    </li>
    <li>
      <a href="about.php">About</a>
    </li>
<?php 
if(!isset($_SESSION['user'])){
?>
    <li>
     <a  href="modal_login.php">Login</a>
    </li>
<?php } ?> 
<?php
if(isset($_SESSION['user'])){
if ($_SESSION['privilegio']=="doctor" || $_SESSION['privilegio']=="admin"){
?>
<li>
     <a href="pacientes.php">Pacientes</a>
      </li>
<?php } }?> 
<?php
if(isset($_SESSION['user'])){
if ($_SESSION['privilegio']=="admin"){
?>
<li>
     <a href="admin.php">Admin</a>
      </li>
<?php } }?> 

<?php
if(isset($_SESSION['user'])){
if ($_SESSION['privilegio']=="doctor" || $_SESSION['privilegio']=="admin"){
?>
<li>
     <a href="noticias.php">Noticias</a>
      </li>
<?php } }?> 
<li style="float:right">
  <?php
if(isset($_SESSION['user'])){
?>
<a style="color:#e5e5e5;"> Bienvenido: <?php echo $_SESSION['user']; ?> &nbsp; <?php echo $_SESSION['apellido']; ?>  </a>
<?php  } ?>
</li>
<li style="float:right">
 <?php
if(isset($_SESSION['user'])){
?>
 <a href="logout.php">Logout</a>
<?php  } ?> 
</li>
  </ul>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
            <img src="banner.jpg" alt="" class="">
    </div>
    <div class="carousel-item">
            <img src="banner.jpg" alt="" class="">
    </div>
    <div class="carousel-item">
            <img src="banner.jpg" alt="" class="">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>
  <script href="js/jquery-ui-1.12.1.min.js"></script>
  <script href="js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script href="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/JavaScript.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
</body>
</html>