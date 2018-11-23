<?php


;?>
<?php include('_topPage.php');?>

<div>
    <h1>Add student</h1>


    <form action="update.php" method="post">

        <label>Prénom</label>
        <input type="text" name="values[first_name]"/>
        <br/>
        <label>Nom</label>
        <input type="text" name="values[last_name]"/>
        <br/>

        <br/><br/>
        <input type="submit" value="add"/>

    </form>


</div>

<?php include('_bottomPage.php');?>
