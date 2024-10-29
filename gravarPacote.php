<?php
require "fixo/cabecalho.php";
echo "<br/><br/>";
// Conexão ao banco de dados
$host = 'localhost';
$dbname = 'seu_banco_de_dados';
$user = 'seu_usuario';
$pass = 'sua_senha';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparando a consulta para inserir os dados
    $stmt = $pdo->prepare("INSERT INTO pacotes (package_name, duration, price, description, itinerary) VALUES (:package_name, :duration, :price, :description, :itinerary)");

    // Bind dos valores do formulário para a consulta
    $stmt->bindParam(':package_name', $_POST['package_name']);
    $stmt->bindParam(':duration', $_POST['duration']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':itinerary', $_POST['itinerary']);

    // Executa a inserção
    $stmt->execute();

    echo "<div class='alert alert-success'>Travel Package saved successfully!</div>";
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
}

require "fixo/rodape.php";
