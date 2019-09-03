<?php 
	require ("db.php");

	$rf = $_POST['rf'];
	$senha = $_POST['senha'];

	$query = mysqli_query($conn,"SELECT * FROM aut WHERE rf = '$rf' AND senha = '$senha'");
	$row = mysqli_num_rows($query);

	if ($row > 0){
		session_start();
		$_SESSION['autenticado'] = true;
		$_SESSION['rf'] = $_POST['rf'];
		$_SESSION['senha'] = $_POST['senha'];
		header('Location: index.php');
	}else{
		header('Location: login.php?erro=errologin');
	}
?>
