<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Relatório Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="../../js/relatorios.js"></script>
</head>
<body>

<?php
const USERNAME = "root";
const PASSWORD = "";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=bikcraft',  USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT * FROM contact');
    $stmt->execute();
    $html = "";
    foreach($stmt as $row){
        $html .=  "<tr><td>".$row['idcontact']."</td><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row['telefone']."</td><td>".$row['espec']."</td><td><button type='button' data-element='".$row['idcontact']."' class='btn btn-danger delete'>Deletar</button></td></tr>";
    }

} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

<div class="container">
    <div class="table-responsive">
        <table class="table-contact table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Telefone:</th>
                <th>Especificações:</th>
                <th>Ação:</th>
            </tr>
            </thead>
            <tbody>
            <?php print $html; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>


