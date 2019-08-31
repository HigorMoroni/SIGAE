<?php 
	require ("db.php");

    $nome = $_POST['nome'];
    $rf = $_POST['rf'];
    $cargo = $_POST['cargo'];

    $query = mysqli_query($conn,"INSERT INTO aut(nome, rf, cargo, senha) VALUES ('$nome','$rf','$cargo','123456')");
?>