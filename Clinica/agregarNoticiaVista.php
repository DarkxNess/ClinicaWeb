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
   <?php require 'partials/header2.php' ?>

    <div class="container-fluid">
<table class="table">
    <thead class="thead-light">
      <tr align="center">
        <th><h2>Agregar Noticia</h2></th></tr>
      </thead>
<tbody>
<tr><td align="center">
<form method="post" action="agregarNoticiaVista.php" align="center" class="formularioPersonalizado"> 

     <label>Título</label>
      <textarea class="form-control" id="titulo" name="titulo"></textarea>
     <br />
         <label>Cuerpo</label>
     <textarea class="form-control" id="cuerpo" name="cuerpo"></textarea>
   <br />
   
   <input type="submit" name="Insertar" id="insert" value="Insertar" class="btn btn-success" />
     <input type=hidden class=form-control name=idPaciente id="idPaciente" value="<?php echo $_SESSION['user']; ?>">   

</form>
<?php
        if(isset($_POST['titulo']) && isset($_POST['cuerpo'])){
            require_once "connect.php";
            require_once "insertNoticia.php";
        }
    ?>
  </td>
</tr>
</tbody>
    </table>
</div>
     <?php require 'partials/footer.php' ?>
