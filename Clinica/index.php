  <?php
session_start();
  ?>
 <?php require 'partials/header2.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:30%;
  text-align:center;
}
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:left;
  width:50%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

.enlace {
  display:inline;
  border:0;
  padding:0;
  margin:0;
  background:none;
  color:#000088;
  font-family: arial, sans-serif;
  font-size: 1em;
  line-height:1em;
}

.enlace:hover {
  text-decoration:none;
  color:#0000cc;
  cursor:pointer;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;">
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
<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright DarkNess 2019</div>
</body>
</html>
