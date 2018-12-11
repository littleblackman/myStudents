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
                <th/>
            </tr>
        </thead>
        <tbody>
           <?php foreach($students as $student):?>
                <tr>
                    <td><?= $student->getLastName();?></td>
                    <td><?= $student->getFirstName();?></td>
                    <td><?= $student->getCardId();?></td>
                    <td>
                      <a href="<?= HOST;?>index.php?action=edit&id=<?= $student->getId();?>">
                          edit
                      </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>

<?php include('_bottomPage.php');?>
