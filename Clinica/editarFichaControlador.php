<?php
	$idFicha=$_POST['idFicha'];
		$query="SELECT * FROM ficha_medica WHERE idFicha='$idFicha'";
		$consulta2=$mysqli->query($query);
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		$_SESSION['idFicha']=$fila['idFicha'];
		$_SESSION['diagnostico']=$fila['diagnostico'];
		$_SESSION['tratamiento1']=$fila['tratamiento1'];
		$_SESSION['tratamiento2']=$fila['tratamiento2'];
		$_SESSION['examenes']=$fila['examenes'];
		$_SESSION['antecedentes']=$fila['antecedentes'];
		$_SESSION['comentarios']=$fila['comentarios'];
		$_SESSION['comentarios']=$fila['comentarios'];
		$_SESSION['fechaCreacion']=$fila['fechaCreacion'];
		   echo "<script>
		                   window.location= 'editarFichaVista.php'
    </script>";
?>