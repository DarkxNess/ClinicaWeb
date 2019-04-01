<?php
	$idPaciente=$_POST['idPaciente'];
		$query="SELECT * FROM paciente WHERE idPaciente='$idPaciente'";
		$consulta2=$mysqli->query($query);
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		$_SESSION['idPaciente']=$fila['idPaciente'];
		$_SESSION['nombrePaciente']=$fila['nombrePaciente'];
		$_SESSION['apellidoPaciente']=$fila['apellidoPaciente'];
		$_SESSION['rutPaciente']=$fila['rutPaciente'];
		$_SESSION['telefonoPaciente']=$fila['telefonoPaciente'];
		$_SESSION['emailPaciente']=$fila['emailPaciente'];
		$_SESSION['direccionPaciente']=$fila['direccionPaciente'];
		$_SESSION['ciudadPaciente']=$fila['ciudadPaciente'];
		   echo "<script>
		                   window.location= 'editarPacienteVista.php'
    </script>";
?>