<?php

$title = "Journal de bord";
require 'inc/db.php';

$query = $pdo->query('SELECT * FROM journal');

if ( $query === false ) {
    var_dump($pdo->errorInfo());
    die('ERREUR SQL');
};

$journal = $query->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'partials/header.php' ?>
<!-- Content -->
<main>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">TITRE</th>
        <th scope="col">DATE</th>
        <th scope="col">TEXTE</th>
        <!-- <th scope="col">ACTIONS</th> -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $journal as $journ ) : ?>
        <tr>
        <th scope="row"><?= $journ->title ?></th>
        <td><?= $journ->dates ?></td>
        <td><?= $journ->texte ?></td>
        

        <td>
        <a href="/Q1_Projet_php_gestion_fatima/modifierjournal.php?id=<?= $journ->id ?>">
                <button class="btn btn-warning">Modifier</button>
            </a>
            <!-- <a href="/Q1_Projet_php_gestion_fatima/voirtaches.php?id=">
                <button class="btn btn-success">Voir</button>
            </a> -->
            
        </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>

</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>