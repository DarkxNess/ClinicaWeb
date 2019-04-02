<?php
session_start();
  if($_SESSION['privilegio']!="admin"){
   echo "<script>
                alert('Solo para administradores');
                window.location= 'index.php'
    </script>";
  }
  ?>
   <?php require 'partials/header2.php' ?>
<table class="panel panel-primary" align="center" width="50%">
    <tr><td>
    <!--box header-->
    <div class="panel-heading" align="center">
        <h3>Editar Usuario #<?php echo  $_POST['idUsuarioModificar']; ?></h3>
    </div><!--/box header-->
   <form method="post" action="editarUsuarioVista.php" align="center">
     <label>Nombre</label>
     <input type="text" name="name" id="nombreUsuario" class="form-control" value="<?php echo $_POST['nombreUsuario']; ?>" required/>
     <br />
      <label>Apellido</label>
     <input type="apellido" name="apellidoUsuario" class="form-control" value="<?php echo $_POST['apellidoUsuario']; ?>" required/>
     <br />
     <label>Email</label>
     <input type="email" name="emailUsuario" class="form-control" value="<?php echo $_POST['emailUsuario']; ?>" required/>
     <br />  
     <label>Contraseña</label>
     <input type="Password" name="passUsuario"  class="form-control" value="<?php echo $_POST['passUsuario']; ?>" required/>
     <br />  
     <label>Privilegio</label>
     <input type="privilegio" name="privilegio" class="form-control" value="<?php echo $_POST['privilegio']; ?>"required/>
     <br />
     <label>Especialidad</label>
     <input type="especialidad" name="especialidad" class="form-control" value="<?php echo $_POST['especialidad']; ?>" required/>
     <br />
     <input type="submit" name="Agregar" id="insert" value="Modificar" class="btn btn-success" />
     <input type=hidden class=form-control name=idUsuario value="<?php echo $_POST['idUsuarioModificar']; ?>">
    </form>
 <?php
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['pass']) && isset($_POST['privilegio']) && isset($_POST['especialidad'])){
            require_once "connect.php";
            require_once "modificar.php";
        }
    ?>
    </td>
    </tr>                      
</table>

 <?php require 'partials/footer.php' ?>
