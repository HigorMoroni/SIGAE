<?php 
    require ("db.php");

    session_start(); if(!isset($_SESSION["autenticado"])){header("Location: login.php");}

    $rf = $_POST['rfmodal'];
    $novasenha = $_POST['senhamodal'];

    $up = mysqli_query($conn,"UPDATE aut SET senha ='$novasenha' WHERE rf=$rf");
 
    if(mysqli_affected_rows($conn) > 0){
        header('Location: sucessosenha.php');
    }else{
        header('Location: index.php?erro=errosenha');
    }
?>