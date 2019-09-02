<?php 
    require ("db.php");

    $rf = $_POST['rfmodal'];
    $novasenha = $_POST['senhamodal'];

    $up = mysqli_query($conn,"UPDATE aut SET senha ='$novasenha' WHERE rf=$rf");
 
    if(mysqli_affected_rows($conn) > 0){
        echo "Sucesso: Atualizado corretamente!";
    }else{
        echo "Aviso: Não foi atualizado!";
    }
?>