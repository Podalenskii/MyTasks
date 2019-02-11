<?php
$id = $_GET['id'];

$pdo = new PDO("msql:host=localhost; bdname=test", "root", "");

$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();

header('Location: /');