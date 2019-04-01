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
    <div class="panel-heading">
        <table align="center"><tr><td><h2>Lista de Usuarios</h2></td></tr>
        </table>
         <div class="table-responsive">
    <div align="right">
     <a href="agregarUsuarioVista.php" class="btn btn-warning">Agregar</a>
    </div>
    <br />
   </div>  
    </div>
    <div class="table-responsive ">
       <table  id="grid" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
<?php
        require_once "connect.php";
        $query="SELECT * FROM usuario";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            <td>".$fila['idUsuario']."</td>
            <td>".$fila['nombreUsuario']."</td>
            <td>".$fila['apellidoUsuario']."</td>
            <td>".$fila['emailUsuario']."</td>
  <td align=center>
            <form action=admin.php class=form-horizontal method=POST>
            <input type=hidden class=form-control name=idUsuarioModificar value=".$fila['idUsuario'].">
     <input type=submit value=Actualizar name=age class=btn btn-warning>
</form>
</td>
            <td align=center><form action=admin.php class=form-horizontal method=POST><input type=hidden class=form-control name=idUsuario value=".$fila['idUsuario'].">
            
            <input type=submit value=Eliminar class=btn btn-default></form></td>
          </tr>";
        }
      ?> 
      <?php
        if(isset($_POST['idUsuario'])){
            require_once "connect.php";
            require_once "eliminar.php";
        }

                     if(isset($_POST['idUsuarioModificar'])){
            require_once "connect.php";
            require_once "editarUsuarioControlador.php";
        }
    ?>   
    </tbody>
  </table>
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Agregar nuevo usuario</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
   <form method="post" action="admin.php">
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
     <input type="submit" name="Agregar" id="insert" value="Agregar" class="btn btn-success" />
    </form>
     <?php
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['pass']) && isset($_POST['privilegio']) && isset($_POST['especialidad'])){
            require_once "connect.php";
            require_once "insert.php";
        }
    ?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   </div>
  </div>
 </div>
</div>
<!-- Modal Modificar -->
<div id="modificar_modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Modificar nuevo usuario</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
   <form method="post" action="modificar.php">
     <label>Nombre</label>
   <?php
          $name = $_POST['idUsuario'];
          echo "<input type=text class=form-control name=idUsuario value=".id.">";
      ?> 
     <input type="text" name="name" id="namex" class="form-control" required/>
     <br />
      <label>Apellido</label>
     <input type="apellido" name="apellido" id="apellidox" class="form-control" required/>
     <br />
     <label>Email</label>
     <input type="email" name="email" id="emailx" class="form-control" required/>
     <br />  
     <label>Contraseña</label>
     <input type="Password" name="pass" id="passx" class="form-control" required/>
     <br />  
     <label>Privilegio</label>
     <input type="privilegio" name="privilegio" id="privilegiox" class="form-control" required/>
     <br />
     <label>Especialidad</label>
     <input type="especialidad" name="especialidad" id="especialidadx" class="form-control" required/>
     <br />
     <input type="submit" name="Agregar"  value="Insert" class="btn btn-success" />
    </form>
     <?php
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) && isset($_POST['pass']) && isset($_POST['privilegio']) && isset($_POST['especialidad'])){
            require_once "connect.php";
            require_once "insert.php";
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
