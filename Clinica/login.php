<?php
	session_start();
	$emailUsuario=$_POST['emailUsuario'];
	$passUsuario=$_POST['passUsuario'];
	$query="SELECT * FROM usuario WHERE emailUsuario='$emailUsuario' AND passUsuario='$passUsuario'";
	$consulta2=$mysqli->query($query);
	if($consulta2->num_rows>=1){	
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		$_SESSION['user']=$fila['nombreUsuario'];
		$nombre = $fila['nombreUsuario'];
		$_SESSION['apellido']=$fila['apellidoUsuario'];
		$_SESSION['privilegio']=$fila['privilegio'];
		$_SESSION['id']=$fila['idUsuario'];
		$_SESSION['verificar']=true;
		header("Location: index.php");
	}else{
		echo $_SESSION['fallo_login'] = 'fallo inicio de sesion, datos incorrectos';//Creamos una nueva variable de sesion
		header("Location: modal_login.php");
exit();
	}