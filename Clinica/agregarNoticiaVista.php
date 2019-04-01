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
   <br>
<form method="post" action="agregarNoticiaVista.php" align="center" class="form-horizontal"> 
<table class="table-bordered" align="center" width="90%"><tr>
    <td align="center"><h4>Agregar Noticia</h4> <br> </td></tr><tr>
    <td>
     <label>Titulo</label>
      <textarea class="form-control" id="titulo" name="titulo"></textarea>
     <br />
         </td></tr><tr><td> <label>Cuerpo</label>
     <textarea class="form-control" id="cuerpo" name="cuerpo"></textarea>
   <br /></td>
    </tr>   
    <tr><td><input type="submit" name="Insertar" id="insert" value="Insertar" class="btn btn-success" />
     <input type=hidden class=form-control name=idPaciente id="idPaciente" value="<?php echo $_SESSION['idPaciente']; ?>"></td></tr>    
</table>
</form>
<?php
        if(isset($_POST['titulo']) && isset($_POST['cuerpo'])){
            require_once "connect.php";
            require_once "insertNoticia.php";
        }
    ?>