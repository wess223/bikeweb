<?php

const USERNAME = "root";
const PASSWORD = "";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=bikcraft',  USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO contact (nome, email, telefone, espec) VALUES(:nome, :email, :telefone, :espec)');
    $stmt->execute(array(
        ':nome'     => $_POST['nome'],
        ':email'    =>  $_POST['email'],
        ':telefone' => $_POST['telefone'],
        ':espec'    => $_POST['espec']

    ));

    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}