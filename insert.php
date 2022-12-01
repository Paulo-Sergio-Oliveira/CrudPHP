<?php
include_once("connect.php");
try{
$prof = $_POST['prof'];
$servgerais = $_POST['servgerais'];
$gestao = $_POST['gestao'];
$email = $_POST['email'];

$id = 0;

$stmt = $conn->prepare("INSERT INTO funcionarios VALUES(:id,:prof,:servG,:gestao,:email)");

$stmt->bindParam(":id",$id);
$stmt->bindParam(":prof",$prof);
$stmt->bindParam(":servG",$servgerais);
$stmt->bindParam(":gestao",$gestao);
$stmt->bindParam(":email",$email);
$stmt->execute();

echo 'Registro inserido com sucesso! - Linhas afetadas: '.$stmt->rowCount();

echo '<br>Insira um novo registro clicando <a href="form.php">aqui!</a> <br>
Delete um registro existente clicando <a href="form2.php">aqui!</a> <br>
Atualize um registro existente clicando <a href="form3.php">aqui!</a>';
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
?>