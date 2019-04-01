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
        <h3>Agregar Paciente </h3>
    </div><!--/box header-->
    <form method="post" action="agregarPacienteVista.php">
     <label>Nombre</label>
     <input type="text" name="name" id="name" class="form-control" required/>
     <br />
      <label>Apellido</label>
     <input type="text" name="apellido" id="apellido" class="form-control" required/>
     <br />
     <label>Rut</label>
     <input type="text" name="rut" id="rut" class="form-control" required/>
     <br /> 
     <label>Telefono</label>
     <input type="text" name="telefono" id="telefono" class="form-control" required/>
     <br />  
     <label>Email</label>
     <input type="email" name="email" id="email" class="form-control" required/>
     <br />  
     <label>Dirección</label>
     <input type="text" name="direccion" id="direccion" class="form-control" required/>
     <br />  
     <label>Ciudad</label>
     <input type="text" name="ciudad" id="ciudad" class="form-control" required/>
     <br />
     <label>Doctor</label>
           <input type="text" name="doctor" id="doctor" class="form-control" value="<?php echo $_SESSION['user']; ?> &nbsp; <?php echo $_SESSION['apellido']; ?> " disabled/>
      <input type="hidden" name="doctor" id="doctor" class="form-control" value="<?php echo $_SESSION['id']; ?>"/>
     <br />
     <input type="submit" name="Agregar" value="Insertar" class="btn btn-success" />
    </form>
     <?php
             if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['rut']) && isset($_POST['direccion']) && isset($_POST['ciudad']) && isset($_POST['doctor'])){
                require_once "connect.php";
            require_once "insertPac.php";
        }
            ?>
    </td>
    </tr>                      
</table>