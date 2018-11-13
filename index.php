<?php
// accès aux données

include_once('student.php');

$myStudent = new Student();
$myStudent->setFirstName("Nicolas");
$myStudent->setLastName("Gogol");

echo $myStudent->getFullName();
echo $myStudent->getCardId();







exit;


$bdd = new PDO("mysql:host=localhost;dbname=myStudents;charset=utf8mb4", "root", "root");

$query = "SELECT * FROM students";

$req = $bdd->prepare($query);
$req->execute();

while($row = $req->fetch(PDO::FETCH_ASSOC)) {


    $student = new Student($row);
    /*
    $student['id']         = $row['id'];
    $student['card_id']    = $row['card_id'];
    $student['first_name'] = $row['first_name'];
    $student['last_name']  = $row['last_name'];*/
    
    $students[] = $student;

}
;?>



<?php include('_topPage.php');?>

<div>
    <h1>Hello students</h1>

    <table class="uk-table">
        <caption>Liste</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Identifiant</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach($students as $student):?>
                <tr>
                    <td><?= $student['last_name'];?></td>
                    <td><?= $student['first_name'];?></td>
                    <td><?= $student['card_id'];?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>

<?php include('_bottomPage.php');?>
