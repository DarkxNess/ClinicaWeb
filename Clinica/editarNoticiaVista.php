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
        <th>
    <!--box header-->
        <h3>Modificar Noticia</h3>
  </th>
</tr>
</thead>
    <tbody>
<tr><td align="center">
<form method="post" action="editarNoticiaVista.php" align="center" class="formularioPersonalizado"> 
     <label>Titulo</label>
      <textarea class="form-control" id="titulo" name="titulo"><?php echo $_POST['tituloNoticia'];  ?></textarea>
     <br />
         <label>Cuerpo</label>
     <textarea class="form-control" id="cuerpo" name="cuerpo"><?php echo $_POST['cuerpoNoticia']; ?></textarea>
   <br />
  
    <input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
     <input type=hidden class=form-control name=idNoticias id="idNoticias" value="<?php echo $_POST['idNoticias'];  ?>">  

</form>
<?php
        if(isset($_POST['titulo']) && isset($_POST['cuerpo'])){
            require_once "connect.php";
            require_once "modificarNoticia.php";
        }
    ?>
  </td>
</tr>
</tbody>
</table>
</div>
     <?php require 'partials/footer.php' ?>
