<?php require 'partials/header.php' ?>

<div class="divCentro">


       
         
 
<form action="modal_login.php" class="formularioPersonalizado" style="background: #C0C0C0;" method="POST">
  <div class="form-group">
     <h3 align="center">Login</h3>
    <label for="emailUsuario" class="control-label">Email</label>
    <div class="">
      <input type="email" class="form-control" name="emailUsuario" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="passUsuario" class=" control-label">Contraseña</label>
    <div class="">
      <input type="password" class="form-control" placeholder="Contraseña" name="passUsuario" required>
    </div>
  </div>
  <div class="form-group">
    <div >
      <input type="submit" value="Enviar" class="btn btn-default">
    </div>
  </div>
</form>
    <?php
        if(isset($_POST['emailUsuario']) && isset($_POST['passUsuario'])){
            require_once "connect.php";
            require_once "login.php";
        }
    ?>

</div>
 <?php require 'partials/footer.php' ?>
