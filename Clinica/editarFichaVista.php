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
   <style>
th, td {
  padding: 15px;
}
</style>




<br />
<table class="table-bordered" align="center" width="90%"><tr>
     <form method="POST" action="editarFichaVista.php" align="center" class="form-horizontal"> 

    <td align="center" colspan="5"><h4>Datos Clinicos</h4> </td></tr><tr>
    <td>
    	<label>Diagnostico</label>
     <input type="text" name="diagnostico"  class="form-control" value="<?php echo $_POST['diagnostico']; ?>" required/> 
</td>
<td >
      <label>Tratamiento 1</label>
           <input type="text" name="tratamiento1"  class="form-control" value="<?php echo $_POST['tratamiento1']; ?>" required/>
   </td>
 </tr>
 <tr><td>
  <label>Examenes</label>
     <input type="text" name="examenes" class="form-control" value="<?php echo $_POST['examenes']; ?>" required/></td>
     <td>
     <label>Tratamiento 2</label>
     <input type="text" name="tratamiento2" class="form-control" value="<?php echo $_POST['tratamiento2']; ?>" required/>
     </td></tr>
     <tr><td colspan="3">
     <br />  
     <label>Antecedentes Familiares</label>
      <input type="text" class="form-control" name="antecedentes" value="<?php echo $_POST['antecedentes']; ?>">
     <br />
         </td></tr><tr><td colspan="3"> <label>Comentarios</label>
     <input type="text" class="form-control" name="comentarios" value="<?php echo $_POST['comentarios']; ?>">

     <input type="hidden" class="form-control" name="idFicha" value="<?php echo $_POST['idFichax']; ?>">
     <input type="hidden" class="form-control" name="idPaciente" value="<?php echo $_POST['idPaciente']; ?>"></td></tr>

   <br /></td>
    </tr>   
    <tr><td colspan="3"><input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
     </td></tr>                   
</form>
</table>

<?php
        if(isset($_POST['idFicha']) && isset($_POST['antecedentes']) && isset($_POST['tratamiento1']) && isset($_POST['tratamiento2'])){
            require_once "connect.php";
            require_once "modificarFicha.php";
        }
    ?>

     <?php require 'partials/footer.php' ?>
