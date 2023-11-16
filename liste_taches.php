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
        

        <td>
        <a href="/Q1_Projet_php_gestion_fatima/modifierstatut.php?id=<?= $user->id ?>">
                <button class="btn btn-warning">Modifier statut</button>
            </a>
        <a href="/Q1_Projet_php_gestion_fatima/edit.php?id=<?= $user->id ?>">
                <button class="btn btn-warning">Modifier tâche</button>
            </a>
            <a href="/Q1_Projet_php_gestion_fatima/voirtaches.php?id=<?= $user->id ?>">
                <button class="btn btn-success">Voir</button>
            </a>
            
        </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>

</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>