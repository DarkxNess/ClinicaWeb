<?php
    $name = $_POST['name'];  
    $apellido = $_POST['apellido'];  
    $email = $_POST['email'];  
    $pass = $_POST['pass'];  
    $privilegio = $_POST['privilegio'];
    $especialidad = $_POST['especialidad'];
    $query="INSERT INTO usuario(nombreUsuario, apellidoUsuario, emailUsuario, passUsuario, privilegio,especialidad)  
     VALUES('$name', '$apellido', '$email', '$pass', '$privilegio', '$especialidad')";
    $consulta2=$mysqli->query($query);

        echo "<script>
                alert('Datos agregados');
                window.location= 'admin.php'
    </script>";
?>
