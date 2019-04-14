<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
  if($_SESSION['privilegio']!="admin" && $_SESSION['privilegio']!="doctor"){
   echo "<script>
                alert('Solo para administradores');
                window.location= 'index.php'
    </script>";
  }

  ?>
  <?php  $id=$_SESSION['id']; ?>
 <?php require 'partials/header2.php' 
 ?>
  <div class="container-fluid">
<table class="table">
    <thead class="thead-light">
      <tr align="center">
        <th><h2>Lista de Pacientes</h2></th></tr>
      </thead>
        <tbody>
<tr><td>
       
    <div align="right">
 <a href="agregarPacienteVista.php" class="btn btn-warning">Agregar</a>
    <br />
  </td></tr></tbody></table>

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
            <form action=editarPacienteVista.php class=form-horizontal method=POST>
            <textarea hidden=true name=idPacientex>".$fila['idPaciente']."</textarea>
            <textarea hidden=true name=nombrePaciente>".$fila['nombrePaciente']."</textarea>
            <textarea hidden=true name=rutPaciente>".$fila['rutPaciente']."</textarea>
            <textarea hidden=true name=apellidoPaciente>".$fila['apellidoPaciente']."</textarea>
            <textarea hidden=true name=emailPaciente>".$fila['emailPaciente']."</textarea>
            <textarea hidden=true name=direccionPaciente>".$fila['direccionPaciente']."</textarea>
            <textarea hidden=true name=ciudadPaciente>".$fila['ciudadPaciente']."</textarea>
            <textarea hidden=true name=telefonoPaciente>".$fila['telefonoPaciente']."</textarea>
     <input type=submit value=Actualizar name=age id=actualizacion class=btn btn-warning>
</form>
</td>
            <td align=center><form action=fichasMedicas.php class=form-horizontal method=POST><input type=hidden class=form-control name=idPaciente value=".$fila['idPaciente'].">
            <input type=hidden class=form-control name=nombrePaciente  value=".$fila['nombrePaciente'].">
                        <input type=hidden class=form-control name=apellidoPaciente value=".$fila['apellidoPaciente'].">

            <input type=submit value=Ficha class=btn btn-default></form></td>
          </tr>";
        }
      ?> 
      <?php
        if(isset($_POST['idPaciente'])){
            require_once "connect.php";
            require_once "fichasMedicas.php";
        }

                     if(isset($_POST['idPacientex'])){
          require_once "connect.php";
          require_once "editarPacienteVista.php";

            

        }

    ?>     
    </tbody>
  </table>
</div>
</div>
 <?php require 'partials/footer.php' ?>
