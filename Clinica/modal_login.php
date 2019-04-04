<?php require 'partials/header.php' ?>

<div width="50%" border="double" align="center">
<table align="center" width="50%">
    <tr><td>
        <table width="50%" align="center" class="table" style="background: #C0C0C0;">
            <tr>
                <td>
                  <h3 align="center">Login</h3>
                </td></tr>
                <tr><td>
<form action="modal_login.php" class="form-horizontal" method="POST">
  <div class="form-group">
    <label for="ejemplo_email_3" class=" control-label">Email</label>
    <div class="">
      <input type="email" class="form-control" name="emailUsuario" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class=" control-label">Contraseña</label>
    <div class="">
      <input type="password" class="form-control" placeholder="Contraseña" name="passUsuario" required>
    </div>
  </div>
  <div class="form-group">
    <div >
      <input type="submit" class="btn btn-default">
    </div>
  </div>
</form>
    <?php
        if(isset($_POST['emailUsuario']) && isset($_POST['passUsuario'])){
            require_once "connect.php";
            require_once "login.php";
        }
    ?>
</td></tr></table>
</td></tr></table>
</div>
 <?php require 'partials/footer.php' ?>
