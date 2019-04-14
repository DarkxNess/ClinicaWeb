<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
  if($_SESSION['privilegio']!="admin"){
   echo "<script>
                alert('Solo para administradores');
                window.location= 'index.php'
    </script>";
  }
  ?>
   <?php require 'partials/header2.php' ?>

    <div class="container-fluid">
<table class="table">
    <thead class="thead-light">
      <tr align="center">
        <th><h2>Agregar Paciente</h2></th></tr>
      </thead>
   <tbody>
<tr><td align="center">
 <form method="post" action="agregarPacienteVista.php" class="formularioPersonalizado">
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
    
     <?php
             if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['rut']) && isset($_POST['direccion']) && isset($_POST['ciudad']) && isset($_POST['doctor'])){
                require_once "connect.php";
            require_once "insertPac.php";
        }
            ?>
    </td>
    </tr>   
    </tbody>                   
</table>
</form>
</div>
 <?php require 'partials/footer.php' ?>
