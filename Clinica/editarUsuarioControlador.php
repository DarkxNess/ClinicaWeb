<?php
	$idUsuariox=$_POST['idUsuarioModificar'];
		$query="SELECT * FROM usuario WHERE idUsuario='$idUsuariox'";
	$consulta2=$mysqli->query($query);
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		$_SESSION['idUsuariox']=$fila['idUsuario'];
		$_SESSION['nombreUsuariox']=$fila['nombreUsuario'];
		$_SESSION['apellidoUsuariox']=$fila['apellidoUsuario'];
		$_SESSION['emailUsuariox']=$fila['emailUsuario'];
		$_SESSION['passUsuariox']=$fila['passUsuario'];
		$_SESSION['privilegiox']=$fila['privilegio'];
		$_SESSION['especialidadx']=$fila['especialidad'];
		   echo "<script>
		                   window.location= 'editarUsuarioVista.php'
    </script>";
?>