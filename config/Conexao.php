<?php

    $driver = "mysql:host=localhost;dbname=db_crud";
    $user = 'root';
    $password = '';

    try {
        $conexao = new PDO($driver, $user, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo("Conexão com o banco bem sucedida");
    } catch (PDOException $e) {
        die("Erro de conexão com o banco de dados: " . $e->getMessage());
    }

?>
