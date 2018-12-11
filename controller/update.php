<?php

$values = $_POST['values'];

// create student
$student = new Student($values);
$student->createCardId();

// persist student
$manager = new StudentManager();
$manager->persist($student);

header('Location: index.php');
