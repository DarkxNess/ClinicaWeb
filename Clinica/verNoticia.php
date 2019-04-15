<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
   $id = $_POST['idNoticias']; 
  ?>
 <?php require 'partials/header2.php' 
 ?>


   <div class="container-fluid">
<table class="table">
    <thead class="thead-light">

   <?php
        require_once "connect.php";
        $query="SELECT * FROM noticias where idNoticias='$id'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr align=center>
           <th> <h1>".$fila['tituloNoticia']."</h1>
 </th>
</tr>
</thead>
    <tbody>
            <tr>
           <td align=center width=100%><div> Fecha Noticia: ".$fila['fechaNoticia']."</div></td>
</tr><tr align=center>
            <td align=center><div class=contenido-noticias>".$fila['cuerpoNoticia']."</div></td>
            </tr><tr>
          
            
          </tr>";
          
        }
      ?> 
</tbody>
  <table>
   </div> 
   <?php require 'partials/footer.php' ?>
