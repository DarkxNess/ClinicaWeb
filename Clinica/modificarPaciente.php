<?php
    $idPaciente = $_POST['idPaciente'];  
    $nombrePaciente = $_POST['nombrePaciente'];  
    $apellidoPaciente = $_POST['apellidoPaciente'];  
    $rutPaciente = $_POST['rutPaciente'];  
    $telefonoPaciente = $_POST['telefonoPaciente'];  
    $emailPaciente = $_POST['emailPaciente'];
    $direccionPaciente = $_POST['direccionPaciente'];
    $ciudadPaciente = $_POST['ciudadPaciente'];
    $query="UPDATE paciente SET nombrePaciente='$nombrePaciente', apellidoPaciente='$apellidoPaciente',rutPaciente='$rutPaciente',telefonoPaciente='$telefonoPaciente',emailPaciente='$emailPaciente', direccionPaciente='$direccionPaciente', ciudadPaciente='$ciudadPaciente' WHERE idPaciente='$idPaciente'";
    $consulta2=$mysqli->query($query);
        echo "<script>
                alert('Datos Modificados');
                window.location= 'pacientes.php'
    </script>";
?>
