<?php
$bank = "info2021_pso";
$host = "localhost";
$user_bd = "info2021_pso";
$pass_bd = "Senha123";
$charset = "utf8";

$config = "mysql:dbname=$bank;";
$config .= "host=$host;";
$config .= "charset=$charset";

try {
    $conn = new PDO($config,$user_bd,$pass_bd);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão".utf8_encode($e->getMessage());
}
?>