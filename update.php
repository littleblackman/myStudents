<?php

$values = $_POST['values'];
$values['id'] = 5;


$bdd = new PDO("mysql:host=localhost;dbname=myStudents;charset=utf8mb4", "root", "root");

$query = "INSERT INTO students SET first_name = :first_name, last_name = :last_name, card_id = :card_id    ";
$req = $bdd->prepare($query);

$req->bindValue(':first_name', $values['first_name'], PDO::PARAM_STR);
$req->bindValue(':last_name', $values['last_name'], PDO::PARAM_STR);
$req->bindValue(':card_id', $values['card_id'], PDO::PARAM_STR);

$req->execute();


header("Location: index.php");

