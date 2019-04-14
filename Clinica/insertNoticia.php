<?php
    date_default_timezone_set("Chile/Continental");
    $tituloNoticia = $_POST['titulo'];  
    $cuerpoNoticia = $_POST['cuerpo'];  
    $fechaNoticia  = date("Y-m-d H:i:s"); 
    $query="INSERT INTO noticias(tituloNoticia,cuerpoNoticia,fechaNoticia)  
     VALUES('$tituloNoticia', '$cuerpoNoticia', '$fechaNoticia')";
    $consulta2=$mysqli->query($query);
        echo "<script>
                alert('Datos agregados');
                window.location= 'noticias.php'
    </script>";
?>
