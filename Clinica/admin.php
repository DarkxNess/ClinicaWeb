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
        <th><h2>Lista de Usuarios</h2></th></tr>
      </thead>
        <tbody>
<tr><td>
       
    <div align="right">
  <a href="agregarUsuarioVista.php" class="btn btn-warning">Agregar</a>

  </td></tr></tbody></table>
    <div class="table-responsive">
       <table  id="listarUsuarios" class="table table-bordered">
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
            <form action=editarUsuarioVista.php class=form-horizontal method=POST>
                        <textarea hidden=true name=idUsuarioModificar>".$fila['idUsuario']."</textarea>
            <textarea hidden=true name=nombreUsuario>".$fila['nombreUsuario']."</textarea>
            <textarea hidden=true name=apellidoUsuario>".$fila['apellidoUsuario']."</textarea>
            <textarea hidden=true name=emailUsuario>".$fila['emailUsuario']."</textarea>
            <textarea hidden=true name=passUsuario>".$fila['passUsuario']."</textarea>
            <textarea hidden=true name=privilegio>".$fila['privilegio']."</textarea>
            <textarea hidden=true name=especialidad>".$fila['especialidad']."</textarea>
     <input type=submit value=Actualizar name=age class=btn btn-warning>
</form>
</td>
            <td align=center>
            <form action=admin.php class=form-horizontal method=POST>
            <input type=hidden class=form-control name=idUsuario value=".$fila['idUsuario'].">
            
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
            require_once "editarUsuarioVista.php";
        }
    ?>   
    </tbody>
  </table>

</div>
    </div>
 