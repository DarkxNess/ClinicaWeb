<?php
    $idNoticiasx = $_POST['idNoticiasx'];
    $query="DELETE FROM noticias where idNoticias='$idNoticiasx'";
    $consulta2=$mysqli->query($query);
     echo "<script>
                alert('Datos eliminados');
                window.location= 'noticias.php'
    </script>";
?>
