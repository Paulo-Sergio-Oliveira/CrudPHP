<?php
include_once("connect.php");
try{
$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM funcionarios WHERE id=:id");

$stmt->bindParam(":id",$id);
$stmt->execute();

echo '<br> Insira um novo registro clicando <a href="form.php">aqui!</a> <br>
Delete um registro existente clicando <a href="form2.php">aqui!</a> <br>
Atualize um registro existente clicando <a href="form3.php">aqui!</a>';
echo 'Registro deletado com sucesso! - Linhas afetadas: '.$stmt->rowCount();
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
?>