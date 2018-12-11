<?php

include_once(MODEL.'student.php');
include_once(MODEL.'BddManager.php');

class StudentManager extends BddManager
{

    CONST MAXSTUDENT = 20;


    public static function countStudents()
    {
        return 35;
    }

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

    public function persist($student) {
        $bdd = $this->getBdd();
        $query = "INSERT INTO students SET first_name = :first_name, last_name = :last_name, card_id = :card_id ";
        $req = $bdd->prepare($query);
        $req->bindValue(':first_name', $student->getFirstName(), PDO::PARAM_STR);
        $req->bindValue(':last_name', $student->getLastName(), PDO::PARAM_STR);
        $req->bindValue(':card_id', $student->getCardId(), PDO::PARAM_INT);
        $req->execute();
    }


}
