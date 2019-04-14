<?php
    date_default_timezone_set("Chile/Continental");
    $idNoticias  = $_POST['idNoticias'];  
    $cuerpoNoticia = $_POST['cuerpo'];  
    $tituloNoticia = $_POST['titulo'];  
    $ultimaEdicion = date("Y-m-d H:i:s"); 
    $query="UPDATE noticias SET cuerpoNoticia='$cuerpoNoticia', tituloNoticia='$tituloNoticia',ultimaEdicion='$ultimaEdicion' WHERE idNoticias='$idNoticias'";
    $consulta2=$mysqli->query($query);
        echo "<script>
                alert('Datos Modificados');
                window.location= 'noticias.php'
    </script>";
?>
