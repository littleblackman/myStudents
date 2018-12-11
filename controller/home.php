<?php

$manager = new StudentManager();
$students = $manager->findAll();

include('view/home.php');
