<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
   $id = $_POST['idNoticias']; 
  ?>
 <?php require 'partials/header2.php' 
 ?>


  

    <table class="table-bordered" width="60%" align="center">
    <p><?php
        require_once "connect.php";
        $query="SELECT * FROM noticias where idNoticias='$id'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            <td align=center><h1>".$fila['tituloNoticia']."</h1></td>

            </tr><tr>
           <td align=center width=100%><div class=> Fecha Noticia: ".$fila['fechaNoticia']."</div></td>
</tr><tr align=center>
            <td align=center><div class=contenido-noticias>".$fila['cuerpoNoticia']."</div></td>
            </tr><tr>
          
            
          </tr>";
          
        }
      ?> 
  <table>
    
   <?php require 'partials/footer.php' ?>
