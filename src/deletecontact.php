<?php

const USERNAME = "root";
const PASSWORD = "";

$id = $_POST['id'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=bikcraft',  USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('DELETE FROM contact WHERE idcontact = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $result = ['msg' => 'Usuário deletado com sucesso!.', 'return' => 'sucess'];
    json_encode($result);

} catch(PDOException $e) {
    $result = ['msg' => $e->getMessage(), 'return' => 'error'];
    json_encode($result);
}
