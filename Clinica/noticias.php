<?php
session_start();
  ?>
   <?php require 'partials/header2.php' ?>

     <div class="container-fluid">

  <table class="table">
    <thead class="thead-light">
      <tr align="center">
        <th><h2>Lista de Noticias</h2></th></tr>
      </thead>
        <tbody>
<tr><td>
         
    <div align="right">
     <a href="agregarNoticiaVista.php" class="btn btn-warning">Agregar</a>
    </div>


</td></tr></tbody></table>
    <div class="table-responsive ">
       <table  id="grid" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Título</th>
        <th>Fecha</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
<?php
        require_once "connect.php";
        $query="SELECT * FROM noticias ORDER BY idNoticias ASC";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            <td>".$fila['idNoticias']."</td>
            <td>".$fila['tituloNoticia']."</td>
            <td>".$fila['fechaNoticia']."</td>
  <td align=center>
            <form action=editarNoticiaVista.php class=form-horizontal method=POST>
            <input type=hidden class=form-control name=idNoticias id=idNoticias value=".$fila['idNoticias'].">
             <textarea hidden=true name=cuerpoNoticia>".$fila['cuerpoNoticia']."</textarea>
             <textarea hidden=true name=tituloNoticia>".$fila['tituloNoticia']."</textarea>           
     <input type=submit value=Actualizar name=age class=btn btn-warning>
</form>
</td>
            <td align=center><form action=noticias.php class=form-horizontal method=POST>
            <input type=hidden class=form-control name=idNoticiasx id=idNoticiasx value=".$fila['idNoticias'].">
            
            <input type=submit value=Eliminar class=btn btn-default></form></td>
          </tr>";
        }
      ?> 
      <?php
        if(isset($_POST['idNoticias'])){
            require_once "connect.php";
            require_once "editarNoticiaVista.php";
        }

                     if(isset($_POST['idNoticiasx'])){
            require_once "connect.php";
            require_once "eliminarNoticia.php";
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


 <?php require 'partials/footer.php' ?>
