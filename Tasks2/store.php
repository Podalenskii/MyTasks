<?php
//$_POST

$pdo = new PDO("msql:host=localhost; bdname=test", "root", "");
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);


