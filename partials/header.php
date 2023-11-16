<?php

function nav_links (string $lien, string $titre) {
    $classe = "nav-link";
    if ( $_SERVER["SCRIPT_NAME"] === $lien ) {
        $classe = $classe.' active';
    }
    return '<li class="nav-item">
    <a class="'.$classe.'" aria-current="page" href="'.$lien.'">'.$titre.'</a>
    </li>';
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title><?php if ( isset($title) ) :?>
            <?= $title ?>
        <?php else : ?>
            Beauvoir
        <?php endif ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/index.php', 'Accueil') ?>
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/liste_taches.php', 'Modifier liste des taches') ?>
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/voirtaches.php', 'Voir liste des taches') ?>
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/consigneactivite.php', 'Consigner activités') ?>
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/journalactivite.php', 'Journal de bord') ?>
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/contacts.php', 'Ajout contact') ?>
                    <?= nav_links('/Q1_Projet_php_gestion_fatima/listecontacts.php', 'Liste des contacts') ?>



                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                            <!-- Dropdown -->
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
   
</body>
</html>