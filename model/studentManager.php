<?php

include_once(MODEL.'student.php');
include_once(MODEL.'BddManager.php');

class StudentManager extends BddManager
{

    public function findAll()
    {
        $bdd = $this->getBdd();

        $query = "SELECT * FROM students";

        $req = $bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)) {

            $student = new Student($row);
            $students[] = $student; // tableaux d'objets

        }

        return $students;
    }


}