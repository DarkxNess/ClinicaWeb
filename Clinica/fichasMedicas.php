<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
    $id=$_POST['idPaciente'];
  ?>
 <?php require 'partials/header2.php' 
 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
        <table align="center"><tr><td align="center"><h2>Fichas medicas Paciente: <br> <?php echo $_POST['nombrePaciente']; ?> &nbsp; <?php echo $_POST['apellidoPaciente']; ?></h2></td></tr>
        </table>
         <div class="table-responsive">
    <div align="right">
      <form action=agregarFichaVista.php class=form-horizontal method=POST>
 <input type="submit" class="btn btn-warning" value="Agregar">
             <input type="hidden" class=form-control name=idPaciente value=<?php echo $_POST['idPaciente']; ?>>

</form>
    </div>
    <br />
   </div>  
    </div>
    <div class="table-responsive">
       <table id="pacientes" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Diagnostico</th>
        <th>Tratamiento</th>
        <th>Fecha</th>
        <th>Ficha Medica</th>
      </tr>
    </thead>
    <tbody>
<?php
        require_once "connect.php";
        $query="SELECT * FROM ficha_medica where idPaciente='$id'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            <td>".$fila['idFicha']."</td>
            <td>".$fila['diagnostico']."</td>
            <td>".$fila['tratamiento1']."</td>
            <td>".$fila['fechaCreacion']."</td>
            <td align=center>
            <form action=editarFichaVista.php class=form-horizontal method=POST>
            <input type=hidden class=form-control name=idFichax value=".$fila['idFicha'].">
                        <input type=hidden class=form-control name=diagnostico value=".$fila['diagnostico'].">
            <input type=hidden class=form-control name=tratamiento1 value=".$fila['tratamiento1'].">

            <input type=hidden class=form-control name=tratamiento2 value=".$fila['tratamiento2'].">
            <input type=hidden class=form-control name=examenes value=".$fila['examenes'].">
            <input type=hidden class=form-control name=comentarios value=".$fila['comentarios'].">
            <input type=hidden class=form-control name=antecedentes value=".$fila['antecedentes'].">
            <input type=hidden class=form-control name=idPaciente value=".$fila['idPaciente'].">



     <input type=submit value=Actualizar name=age class=btn btn-warning>
</form>
</td>
</tr>";
        }
      ?> 
      <?php    if(isset($_POST['idFichax'])){
            require_once "connect.php";
            require_once "editarFichaVista.php";
        }
    ?>   
          </tr>
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
    $('#pacientes').DataTable();
});
</script>
 <?php require 'partials/footer.php' ?>