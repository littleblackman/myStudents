<!DOCTYPE html>
<html lang="fr">
<head>
    <title>My Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= ASSET;?>css/uikit.min.css" />
    <script src="<?= ASSET;?>js/uikit.min.js"></script>
    <script src="<?= ASSET;?>js/uikit-icons.min.js"></script>
</head>
<body>
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

    <nav class="uk-navbar uk-margin-large-bottom">
        <ul class="uk-navbar-nav uk-hidden-small">
            <li class="uk-active">
                <a href="<?= HOST;?>index.php">Liste des étudiants</a>
            </li>
            <li>
                <a href="<?= HOST;?>index.php?action=create">Ajouter un étudiant</a>
            </li>

        </ul>
    </nav>
