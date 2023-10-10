<?php

if(isset($_GET["id"])){
    include '../db/conexao.php';
    
    $sql = "delete from clientes where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
}

header("Location: index.php");
exit();

?>