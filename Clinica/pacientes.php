<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
  ?>
  <?php  $id=$_SESSION['id']; ?>
 <?php require 'partials/header2.php' 
 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
        <table align="center"><tr><td><h2>Lista de Pacientes   <input type="text" value="" name="rutxxx" id="rutxxx" class="form-control"/></h2></td></tr>
        </table>
         <div class="table-responsive">
    <div align="right">
 <a href="agregarPacienteVista.php" class="btn btn-warning">Agregar</a>
    </div>
    <br />
   </div>  
    </div>
    <div class="table-responsive ">
       <table id="fichas" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Rut</th>
        <th>Actualizar</th>
        <th>Ficha Medica</th>
      </tr>
    </thead>
    <tbody>
<?php
        require_once "connect.php";
        $query="SELECT * FROM paciente where idUsuario='$id'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            <td>".$fila['idPaciente']."</td>
            <td>".$fila['nombrePaciente']."</td>
            <td>".$fila['apellidoPaciente']."</td>
            <td>".$fila['rutPaciente']."</td>
<td align=center>
            <form action=pacientes.php class=form-horizontal method=POST>
            <input type=hidden class=form-control name=idPaciente id=idPaciente value=".$fila['idPaciente'].">
     <input type=button value=Actualizar name=age id=actualizacion class=btn btn-warning>
</form>
</td>
            <td align=center><form action=pacientes.php class=form-horizontal method=POST><input type=hidden class=form-control name=idPacientex id=idPacientex value=".$fila['idPaciente'].">
            
            <input type=submit value=Ficha class=btn btn-default></form></td>
          </tr>";
        }
      ?> 
      <?php
        if(isset($_POST['idPacientex'])){
            require_once "connect.php";
            require_once "fichasMedicasControlador.php";
        }

                     if(isset($_POST['idPaciente'])){
          require_once "connect.php";
          require_once "editarPacienteControlador.php";

            

        }

    ?>     
    </tbody>
  </table>
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Agregar nuevo paciente</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
   <form method="post" action="exito.php">
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
     <input type="text" name="doctor" id="doctorx" class="form-control" value="<?php echo $_SESSION['user']; ?> &nbsp; <?php echo $_SESSION['apellido']; ?> " disabled/>

      <input type="hidden" name="doctor" id="doctor" class="form-control" value="<?php echo $_SESSION['id']; ?>"/>
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
    </form>
     <?php
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['rut']) && isset($_POST['telefono'])  && isset($_POST['direccion'])  && isset($_POST['ciudad'])  && isset($_POST['doctor'])){
            require_once "connect.php";
            require_once "insertPacientes.php";
        }
    ?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   </div>
  </div>
 </div>
</div>
    </div>
  </div>
</div>
<script type="text/javascript"> $(document).ready(function () {
    $('#fichas').DataTable();
});


</script>