<?php
    $name = $_POST['name'];  
    $apellido = $_POST['apellido'];  
    $email = $_POST['email'];  
    $rut = $_POST['rut'];  
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $idx = $_POST['doctor'];
    $query="INSERT INTO paciente(nombrePaciente,apellidoPaciente,rutPaciente,telefonoPaciente,emailPaciente,direccionPaciente,ciudadPaciente,idUsuario)  
     VALUES('$name', '$apellido', '$rut', '$telefono', '$email', '$direccion', '$ciudad', '$idx')";
    $consulta2=$mysqli->query($query);
        echo "<script>
                alert('Datos agregados');
                window.location= 'pacientes.php'
    </script>";
?>