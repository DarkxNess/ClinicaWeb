<?php
session_start();

  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
  ?>
 <?php require 'partials/header2.php' ?>


 <?php require 'partials/doctores.php' ?>

 <?php require 'partials/footer.php' ?>
