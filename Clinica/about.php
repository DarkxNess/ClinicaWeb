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
  width:100%;
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
  

  <div class="main" align="center">
            <h2>¿Quienes somos?</h2>
    <p>Esta es una página creada con fines de estudio, diseñada en php, bootstrap, algo de jquery y js</p>

    <h2>Contacto</h2>
    <p>Si desean contactarme pueden hacerlo a traves del siguiente correo</p>
    <p>Correo electronico: hawking2009@hotmail.es</p>
    <br>

  </div>

  
</div>
<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright DarkNess 2019</div>
</body>
</html>
