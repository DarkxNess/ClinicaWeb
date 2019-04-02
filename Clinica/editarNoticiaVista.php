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
<form method="post" action="editarNoticiaVista.php" align="center" class="form-horizontal"> 
<table class="table-bordered" align="center" width="90%"><tr>
    <td align="center"><h4>Modificar Noticia</h4> <br> </td></tr><tr>
    <td>
     <label>Titulo</label>
      <textarea class="form-control" id="titulo" name="titulo"><?php echo $_POST['tituloNoticia'];  ?></textarea>
     <br />
         </td></tr><tr><td> <label>Cuerpo</label>
     <textarea class="form-control" id="cuerpo" name="cuerpo"><?php echo $_SESSION['cuerpoNoticia']; ?></textarea>
   <br /></td>
    </tr>   
    <tr><td><input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
     <input type=hidden class=form-control name=idNoticias id="idNoticias" value="<?php echo $_POST['idNoticias'];  ?>"></td></tr>    
</table>
</form>
<?php
        if(isset($_POST['titulo']) && isset($_POST['cuerpo'])){
            require_once "connect.php";
            require_once "modificarNoticia.php";
        }
    ?>

     <?php require 'partials/footer.php' ?>
