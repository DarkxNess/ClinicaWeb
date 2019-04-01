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
        <h3>Agregar Usuario </h3>
    </div><!--/box header-->
   <form method="post" action="admin.php" align="center">
     <label>Nombre</label>
     <input type="text" name="name" id="name" class="form-control" required/>
     <br />
      <label>Apellido</label>
     <input type="apellido" name="apellido" id="apellido" class="form-control" required/>
     <br />
     <label>Email</label>
     <input type="email" name="email" id="email" class="form-control" required/>
     <br />  
     <label>Contraseña</label>
     <input type="Password" name="pass" id="pass" class="form-control" required/>
     <br />  
     <label>Privilegio</label>
     <input type="privilegio" name="privilegio" id="privilegio" class="form-control" required/>
     <br />
     <label>Especialidad</label>
     <input type="especialidad" name="especialidad" id="especialidad" class="form-control" required/>
     <br />
     <input type="submit" name="Agregar" value="Insertar" class="btn btn-success" />
    </form>
 <?php
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['pass']) && isset($_POST['privilegio']) && isset($_POST['especialidad'])){
            require_once "connect.php";
            require_once "insert.php";
        }
    ?>
    </td>
    </tr>                      
</table>