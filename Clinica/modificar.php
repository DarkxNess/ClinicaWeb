<?php
    $idUsuario = $_POST['idUsuario'];  
    $name = $_POST['name'];  
    $apellido = $_POST['apellido'];  
    $email = $_POST['email'];  
    $pass = $_POST['pass'];  
    $privilegio = $_POST['privilegio'];
    $especialidad = $_POST['especialidad'];
    $query="UPDATE usuario SET nombreUsuario='$name', apellidoUsuario='$apellido',emailUsuario='$email',passUsuario='$pass',privilegio='$privilegio', especialidad='$especialidad' WHERE idUsuario='$idUsuario'";
    $consulta2=$mysqli->query($query);
        echo "<script>
                alert('Datos Modificados');
                window.location= 'admin.php'
    </script>";
?>
