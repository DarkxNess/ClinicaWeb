<?php require 'partials/header.php' ?>

<table align="center" width="40%" border="0">
    <tr><td>
        <table width="50%" align="center" class="table table-bordered" style="background: #C0C0C0;">
            <tr>
                <td>
                  <h3 align="center">Login</h3>
                </td></tr>
                <tr><td>
<form action="modal_login.php" class="form-horizontal" method="POST">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-12">
      <input type="email" class="form-control" name="emailUsuario" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-12">
      <input type="password" class="form-control" placeholder="Contraseña" name="passUsuario" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
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
  </div>
 </div>
