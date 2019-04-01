<?php
session_start();
	$_SESSION['idPacientex']=$_POST['idPacientex'];
		   echo "<script>
		                   window.location= 'fichasMedicas.php'
    </script>";
?>