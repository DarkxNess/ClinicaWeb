  <?php
session_start();
  ?>
 <?php require 'partials/header2.php' ?>

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Bienvenido a clinicas Nexo</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
 <table  id="grid" class="table table-bordered">
    <thead>
      <tr>
        <th>Noticias</th>
      </tr>
    </thead>
    <tbody>
<?php
        require_once "connect.php";
        $query="SELECT * FROM noticias";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
          <form action=verNoticia.php class=form-horizontal method=POST>
            <td><button type=submit class=enlace>".$fila['tituloNoticia']." </button>
             
            <input type=hidden class=form-control name=idNoticias id=idNoticias value=".$fila['idNoticias'].">
</form>
           </td>
          </tr>";
        }
      ?> 
      <?php
        if(isset($_POST['idNoticias'])){
            require_once "connect.php";
            require_once "verNoticia.php";
        }

                     if(isset($_POST['idNoticiasx'])){
            require_once "connect.php";
            require_once "eliminarNoticia.php";
        }
    ?>   
    </tbody>
  </table>

  </div>

  <div class="main">
    <h2>Misión</h2>
    <p>Nuestra misión consiste en entregar la mejor asistencia medica de calidad y accesible para todas aquellas personas que no tienen los recursos necesarios para sus tratamientos.</p>
    <br>
        <h2>Visión</h2>
    <p>En un par de años se desea ampliar las especialidades que manejan los doctores en las clinicas de nexo, para ello se crearan nuevas clinicas que cuenten con los recursos necesarios para los tratamientos de cada especialidad.</p>
  </div>

  <div class="right">
    <h2>Acerca de nosotros</h2>
    <p>Clinica especializada en dermatología y reutomatología, fundada el año 2018 por Mauricio Quezada.</p>
  </div>
</div>

 <?php require 'partials/footer.php' ?>

