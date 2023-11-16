<?php

$title = "Liste des taches";
require 'inc/db.php';

$query = $pdo->query('SELECT * FROM users');

if ( $query === false ) {
    var_dump($pdo->errorInfo());
    die('ERREUR SQL');
};

$users = $query->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'partials/header.php' ?>
<!-- Content -->
<main>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">TITRE</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">STATUT</th>
        <!-- <th scope="col">ACTIONS</th> -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $users as $user ) : ?>
        <tr>
        <th scope="row"><?= $user->title ?></th>
        <td><?= $user->description ?></td>
        <td><?= $user->statut ?></td>
        

        </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>
    <a class="btn btn-primary" href="http://localhost/Q1_Projet_php_gestion_fatima/liste_taches.php" role="button">Retour</a>

</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>