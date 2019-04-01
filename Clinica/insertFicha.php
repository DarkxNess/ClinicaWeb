<?php
    $diagnostico = $_POST['diagnostico'];  
    $tratamiento1 = $_POST['tratamiento1'];  
    $tratamiento2 = $_POST['tratamiento2'];  
    $examenes = $_POST['examenes'];  
    $antecedentes = $_POST['antecedentes'];
    $comentarios = $_POST['comentarios'];
    $idPaciente = $_POST['idPaciente'];
    $fechaCreacion  = date("Y-m-d H:i:s"); 
$query="INSERT INTO ficha_medica(diagnostico,tratamiento1,tratamiento2,examenes,antecedentes,comentarios,fechaCreacion, idPaciente) 
VALUES('$diagnostico', '$tratamiento1', '$tratamiento2', '$examenes', '$antecedentes', '$comentarios', '$fechaCreacion', '$idPaciente')";
    $consulta2=$mysqli->query($query);
        echo "<script>
                alert('Datos agregados');
                window.location= 'pacientes.php'
    </script>";
?>
