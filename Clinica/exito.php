<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
require 'partials/header2.php' ?>
<br>
<a href="logout.php">Cerrar sesion</a>