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
        <h3>Editar Usuario #<?php echo $_SESSION['idUsuariox']; ?></h3>
    </div><!--/box header-->
   <form method="post" action="editarUsuarioVista.php" align="center">
     <label>Nombre</label>
     <input type="text" name="name" id="name" class="form-control" value="<?php echo $_SESSION['nombreUsuariox']; ?>" required/>
     <br />
      <label>Apellido</label>
     <input type="apellido" name="apellido" id="apellido" class="form-control" value="<?php echo $_SESSION['apellidoUsuariox']; ?>" required/>
     <br />
     <label>Email</label>
     <input type="email" name="email" id="email" class="form-control" value="<?php echo $_SESSION['emailUsuariox']; ?>" required/>
     <br />  
     <label>Contraseña</label>
     <input type="Password" name="pass" id="pass" class="form-control" value="<?php echo $_SESSION['passUsuariox']; ?>" required/>
     <br />  
     <label>Privilegio</label>
     <input type="privilegio" name="privilegio" id="privilegio" class="form-control" value="<?php echo $_SESSION['privilegiox']; ?>"required/>
     <br />
     <label>Especialidad</label>
     <input type="especialidad" name="especialidad" id="especialidad" class="form-control" value="<?php echo $_SESSION['especialidadx']; ?>" required/>
     <br />
     <input type="submit" name="Agregar" id="insert" value="Modificar" class="btn btn-success" />
     <input type=hidden class=form-control name=idUsuario value="<?php echo $_SESSION['idUsuariox']; ?>">
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