<?php include(VIEW.'_topPage.php');?>

<div>
    <h1>Modifier un étudiant</h1>


    <form action="<?= HOST;?>index.php?action=update" method="post">

        <input type="hidden" value="<?= $student->getId();?>"
        Firstname <input type="text" name="values[firstName]" value="<?= $student->getFirstName();?>" /><br/>
        lastname <input type="text" name="values[lastName]" value="<?= $student->getLasName();?>"/><br/>

        <input type="submit" value ="ajouter"/>
    </form>


</div>

<?php include(VIEW.'_bottomPage.php');?>
