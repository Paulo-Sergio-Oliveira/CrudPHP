<?php
include_once("connect.php");
try{
$id = $_POST['id'];
$prof = $_POST['prof'];
$servgerais = $_POST['servgerais'];
$gestao = $_POST['gestao'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE funcionarios SET professores=:prof,servgerais=:servG,gestao=:gestao,email=:email WHERE id=:id");

$stmt->bindParam(":id",$id);
$stmt->bindParam(":prof",$prof);
$stmt->bindParam(":servG",$servgerais);
$stmt->bindParam(":gestao",$gestao);
$stmt->bindParam(":email",$email);
$stmt->execute();

echo 'Registro atualizado com sucesso! - Linhas afetadas: '.$stmt->rowCount();

echo '<br>Insira um novo registro clicando <a href="form.php">aqui!</a> <br>
Delete um registro existente clicando <a href="form2.php">aqui!</a> <br>
Atualize um registro existente clicando <a href="form3.php">aqui!</a>';
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
?>