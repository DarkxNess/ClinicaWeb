<?php
	$idNoticias=$_POST['idNoticias'];
		$query="SELECT * FROM noticias WHERE idNoticias='$idNoticias'";
		$consulta2=$mysqli->query($query);
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		$_SESSION['idNoticias']=$fila['idNoticias'];
		$_SESSION['tituloNoticia']=$fila['tituloNoticia'];
		$_SESSION['cuerpoNoticia']=$fila['cuerpoNoticia'];
		   echo "<script>
		                   window.location= 'editarNoticiaVista.php'
    </script>";
?>