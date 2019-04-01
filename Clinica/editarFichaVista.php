<?php
session_start();
  if($_SESSION['privilegio']!="admin" && $_SESSION['privilegio']!="doctor"){
   echo "<script>
                alert('Solo para administradores');
                window.location= 'index.php'
    </script>";
  }
  ?>
   <?php require 'partials/header2.php' ?>
   <style>
th, td {
  padding: 15px;
}
</style>
   <form method="post" action="editarFichaVista.php" align="center" class="form-horizontal"> 
<table class="panel panel-primary" align="center" width="95%">
    <tr><td colspan="8">
    <!--box header-->
    <div class="panel-heading" align="center">
        <h2>Editar Ficha #<?php echo $_SESSION['idFicha']; ?></h2>
    </div><!--/box header-->
</td></tr><tr><td colspan="8">
	<h4>Información del paciente</h4> </td></tr>
  <tr><td>
     <label>Nombre</label>
     <input type="text" name="nombrePaciente" id="nombrePaciente" class="form-control" value="<?php echo $_SESSION['nombrePaciente']; ?>" disabled/>
   </td><td>
      <label>Apellido</label>
           <input type="text" name="apellidoPaciente" id="apellidoPaciente" class="form-control" value="<?php echo $_SESSION['apellidoPaciente']; ?>" disabled/>
  </td>
  <td>
     <label>Rut</label>
     <input type="text" name="rutPaciente" id="rutPaciente" class="form-control" value="<?php echo $_SESSION['rutPaciente']; ?>" disabled/>
  </td>
  <td> 
     <label>Teléfono</label>
     <input type="text" name="telefonoPaciente" id="telefonoPaciente" class="form-control" value="<?php echo $_SESSION['telefonoPaciente']; ?>" disabled/>
     </td>
     <td>
     <label>Email</label>
     <input type="email" name="emailPaciente" id="emailPaciente" class="form-control" value="<?php echo $_SESSION['emailPaciente']; ?>"disabled/>
     </td>
     <td>
     <label>Direccón</label>
     <input type="text" name="direccionPaciente" id="direccionPaciente" class="form-control" value="<?php echo $_SESSION['direccionPaciente']; ?>" disabled/>
     </td>
     <td>
          <label>Ciudad</label>
     <input type="text" name="ciudadPaciente" id="ciudadPaciente" class="form-control" value="<?php echo $_SESSION['ciudadPaciente']; ?>" disabled/>
   </td>
    <td>
          <label>Fecha</label>
     <input type="text" name="ciudadPaciente" id="ciudadPaciente" class="form-control" value="<?php echo $_SESSION['fechaCreacion']; ?>" disabled/>
   </td>

   <br />
    </td>
  </tr></table>
<br />
<table class="table-bordered" align="center" width="90%"><tr>
    <td align="center" colspan="5"><h4>Datos Clinicos</h4> </td></tr><tr>
    <td>
    	<label>Diagnostico</label>
     <input type="text" name="diagnostico" id="diagnostico" class="form-control" value="<?php echo $_SESSION['diagnostico']; ?>" required/> 
</td>
<td >
      <label>Tratamiento 1</label>
           <input type="text" name="tratamiento1" id="tratamiento1" class="form-control" value="<?php echo $_SESSION['tratamiento1']; ?>" required/>
   </td>
 </tr>
 <tr><td>
  <label>Examenes</label>
     <input type="text" name="examenes" id="examenes" class="form-control" value="<?php echo $_SESSION['examenes']; ?>" required/></td>
     <td>
     <label>Tratamiento 2</label>
     <input type="text" name="tratamiento2" id="tratamiento2" class="form-control" value="<?php echo $_SESSION['tratamiento2']; ?>" required/>
     </td></tr>
     <tr><td colspan="3">
     <br />  
     <label>Antecedentes Familiares</label>
      <textarea class="form-control" id="antecedentes" name="antecedentes"><?php echo $_SESSION['antecedentes']; ?></textarea>
     <br />
         </td></tr><tr><td colspan="3"> <label>Comentarios</label>
     <textarea class="form-control" id="comentarios" name="comentarios" value="<?php echo $_SESSION['comentarios']; ?>"><?php echo $_SESSION['comentarios']; ?></textarea>

   <br /></td>
    </tr>   
    <tr><td colspan="3"><input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
     <input type=hidden class=form-control name=idPaciente id="idPaciente" value="<?php echo $_SESSION['idPaciente']; ?>"></td></tr>                   
</table>
</form>
<?php
        if(isset($_POST['diagnostico']) && isset($_POST['tratamiento1']) && isset($_POST['examenes']) && isset($_POST['tratamiento2']) && isset($_POST['antecedentes']) && isset($_POST['comentarios'])){
            require_once "connect.php";
            require_once "modificarFicha.php";
        }
    ?>