<?php
session_start();
  if($_SESSION['privilegio']!="admin" || $_SESSION['privilegio']!="doctor"){
  }
  ?>
   <?php require 'partials/header2.php' ?>
<table class="panel panel-primary" align="center" width="50%">
    <tr><td>
    <!--box header-->
    <div class="panel-heading" align="center">
        <h3>Editar Paciente #<?php echo $_SESSION['idPaciente']; ?></h3>
    </div><!--/box header-->
   <form method="post" action="editarPacienteVista.php" align="center">
     <label>Nombre</label>
     <input type="text" name="nombrePaciente" id="nombrePaciente" class="form-control" value="<?php echo $_SESSION['nombrePaciente']; ?>" required/>
     <br />
      <label>Apellido</label>
           <input type="text" name="apellidoPaciente" id="apellidoPaciente" class="form-control" value="<?php echo $_SESSION['apellidoPaciente']; ?>" required/>
   <br />
     <label>Rut</label>
     <input type="text" name="rutPaciente" id="rutPaciente" class="form-control" value="<?php echo $_SESSION['rutPaciente']; ?>" required/>
     <br />  
     <label>Teléfono</label>
     <input type="text" name="telefonoPaciente" id="telefonoPaciente" class="form-control" value="<?php echo $_SESSION['telefonoPaciente']; ?>" required/>
     <br />  
     <label>Email</label>
     <input type="email" name="emailPaciente" id="emailPaciente" class="form-control" value="<?php echo $_SESSION['emailPaciente']; ?>"required/>
     <br />
     <label>Direccón</label>
     <input type="text" name="direccionPaciente" id="direccionPaciente" class="form-control" value="<?php echo $_SESSION['direccionPaciente']; ?>" required/>
     <br />
          <label>Ciudad</label>
     <input type="text" name="ciudadPaciente" id="ciudadPaciente" class="form-control" value="<?php echo $_SESSION['ciudadPaciente']; ?>" required/>

   <br />
     <input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
     <input type=hidden class=form-control name=idPaciente id="idPaciente" value="<?php echo $_SESSION['idPaciente']; ?>">
    </form>
 <?php
        if(isset($_POST['nombrePaciente']) && isset($_POST['emailPaciente']) && isset($_POST['direccionPaciente']) && isset($_POST['rutPaciente']) && isset($_POST['ciudadPaciente']) && isset($_POST['telefonoPaciente'])){
            require_once "connect.php";
            require_once "modificarPaciente.php";
        }
    ?>
    </td>
    </tr>                      
</table>