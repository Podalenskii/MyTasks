<?php

$data = [
    "id"      => $_GET['id'],
    "title"   => $_POST['title'],
    "content" => $_POST['content']
];
$pdo = new PDO("msql:host=localhost; bdname=test", "root", "");
$sql = 'UPDATE tasks SET title=:title, WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute();

header("Location: http://localhost/MyNotes0/Tasks2/");exit;
