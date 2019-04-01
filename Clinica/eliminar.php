<?php
    $idUsuario = $_POST['idUsuario'];
    $query="DELETE FROM usuario where idUsuario='$idUsuario'";
    $consulta2=$mysqli->query($query);
     echo "<script>
                alert('Datos eliminados');
                window.location= 'admin.php'
    </script>";
?>
