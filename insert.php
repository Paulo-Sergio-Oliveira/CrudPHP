<?php
include_once("connect.php");
$prof = $_POST['prof'];
$servgerais = $_POST['servgerais'];
$gestao = $_POST['gestao'];
$email = $_POST['email'];
echo "Prof: {$prof} - Serviços Gerais: {$servgerais} - Gestão: {$gestao} - E-mail: {$email}";
$id = 0;
$stmt = $conn->prepare("INSERT INTO funcionarios VALUES(:id,:prof,:servG,:gestao,:email)");
$stmt->bindParam(":id",$id);
$stmt->bindParam(":prof",$prof);
$stmt->bindParam(":servG",$servgerais);
$stmt->bindParam(":gestao",$gestao);
$stmt->bindParam(":email",$email);
$stmt->execute();
?>