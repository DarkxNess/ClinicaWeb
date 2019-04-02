<?php
    $idFicha = $_POST['idFicha'];  
    $diagnostico = $_POST['diagnostico'];  
    $tratamiento1 = $_POST['tratamiento1'];  
    $tratamiento2 = $_POST['tratamiento2'];  
    $examenes = $_POST['examenes'];  
    $antecedentes = $_POST['antecedentes'];
    $comentarios = $_POST['comentarios'];

         $query="UPDATE ficha_medica SET diagnostico='$diagnostico', tratamiento1='$tratamiento1',tratamiento2='$tratamiento2',examenes='$examenes',antecedentes='$antecedentes', comentarios='$comentarios' WHERE idFicha='$idFicha'";
    $consulta1=$mysqli->query($query);
        echo "<script>
                alert('Datos Modificados');
                window.location= 'pacientes.php'
    </script>";
?>
