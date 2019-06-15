<?php

const USERNAME = "root";
const PASSWORD = "";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=bikcraft',  USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO budget (nome, email, telefone, espec) VALUES(:nome, :email, :telefone, :espec)');
    $stmt->execute(array(
        ':nome'     => $_POST['nome'],
        ':email'    =>  $_POST['email'],
        ':telefone' => $_POST['telefone'],
        ':espec'    => $_POST['espec']

    ));

    header("Location: http://localhost/bikeweb/produtos.html"); /* Redirect browser */
    exit();

} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}