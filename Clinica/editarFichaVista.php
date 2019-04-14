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
   <style>
th, td {
  padding: 15px;
}
</style>

    <div class="container-fluid">
<table class="table">
    <thead class="thead-light">
      <tr align="center">
        <th>
    <!--box header-->
       <h3>Datos Clinicos</h3>
  </th>
</tr>
</thead>
    <tbody>
<tr><td align="center">
     <form method="POST" action="editarFichaVista.php" align="center" class="formularioPersonalizado"> 

 
    	<label>Diagnostico</label>
     <input type="text" name="diagnostico"  class="form-control" value="<?php echo $_POST['diagnostico']; ?>" required/> 

      <label>Tratamiento 1</label>
           <input type="text" name="tratamiento1"  class="form-control" value="<?php echo $_POST['tratamiento1']; ?>" required/>
 
  <label>Examenes</label>
     <input type="text" name="examenes" class="form-control" value="<?php echo $_POST['examenes']; ?>" required/>

     <label>Tratamiento 2</label>
     <input type="text" name="tratamiento2" class="form-control" value="<?php echo $_POST['tratamiento2']; ?>" required/>


     <br />  
     <label>Antecedentes Familiares</label>
      <input type="text" class="form-control" name="antecedentes" value="<?php echo $_POST['antecedentes']; ?>">
     <br />
         <label>Comentarios</label>
     <input type="text" class="form-control" name="comentarios" value="<?php echo $_POST['comentarios']; ?>">

     <input type="hidden" class="form-control" name="idFicha" value="<?php echo $_POST['idFichax']; ?>">
     <input type="hidden" class="form-control" name="idPaciente" value="<?php echo $_POST['idPaciente']; ?>">

   <br />
   
   <input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
                   
</form>


<?php
        if(isset($_POST['idFicha']) && isset($_POST['antecedentes']) && isset($_POST['tratamiento1']) && isset($_POST['tratamiento2'])){
            require_once "connect.php";
            require_once "modificarFicha.php";
        }
    ?>
  </td>
</tr>
</tbody>
</table>
</div>
     <?php require 'partials/footer.php' ?>
