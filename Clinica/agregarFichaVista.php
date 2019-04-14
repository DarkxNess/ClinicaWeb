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
        <th><h2>Datos Clinicos</h2></th></tr>
      </thead>
</table>


<form method="post" action="agregarFichaVista.php" align="center" class="form-horizontal"> 
<table class="table" width="100%"><tr>

    <td>
    	<label>Diagnostico</label>
     <input type="text" name="diagnostico" id="diagnostico" class="form-control" required/> 
</td>
<td >
      <label>Tratamiento 1</label>
           <input type="text" name="tratamiento1" id="tratamiento1" class="form-control" required/>
   </td>
 </tr>
 <tr><td>
  <label>Examenes</label>
     <input type="text" name="examenes" id="examenes" class="form-control" placeholder="" required/></td>
     <td>
     <label>Tratamiento 2</label>
     <input type="text" name="tratamiento2" id="tratamiento2" class="form-control" required/>
     </td></tr>
     <tr><td colspan="3">
     <br />  
     <label>Antecedentes Familiares</label>
      <textarea class="form-control" id="antecedentes" name="antecedentes"></textarea>
     <br />
         </td></tr><tr><td colspan="3"> <label>Comentarios</label>
     <textarea class="form-control" id="comentarios" name="comentarios"></textarea>

   <br /></td>
    </tr>   
    <tr><td colspan="3">
      <input type="hidden" class=form-control name="idPaciente" value="<?php echo $_POST['idPaciente']; ?>">
      <input type="submit" name="Insertar" id="insert" value="Insertar" class="btn btn-success" />
     </td></tr>                   
</table>
</form>
<?php
        if(isset($_POST['diagnostico']) && isset($_POST['tratamiento1']) && isset($_POST['examenes']) && isset($_POST['tratamiento2']) && isset($_POST['antecedentes']) && isset($_POST['comentarios'])){
            require_once "connect.php";
            require_once "insertFicha.php";
        }
    ?>
</div>
     <?php require 'partials/footer.php' ?>
