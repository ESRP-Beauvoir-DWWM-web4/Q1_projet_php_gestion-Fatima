<?php

$title = "Liste des contacts";
require 'inc/db.php';

$query = $pdo->query('SELECT * FROM contacts');

if ( $query === false ) {
    var_dump($pdo->errorInfo());
    die('ERREUR SQL');
};

$contacts = $query->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'partials/header.php' ?>
<!-- Content -->
<main>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">ADRESSE</th>
        <th scope="col">CODE POSTAL</th>
        <th scope="col">VILLE</th>
        <th scope="col">EMAIL</th>
        <th scope="col">NUMBER</th>
        <!-- <th scope="col">ACTIONS</th> -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $contacts as $contact ) : ?>
        <tr>
        <th scope="row"><?= $contact->name ?></th>
        <td><?= $contact->first_name ?></td>
        <td><?= $contact->adress ?></td>
        <td><?= $contact->code_postal ?></td>
        <td><?= $contact->ville ?></td>
        <td><?= $contact->email ?></td>
        <td><?= $contact->number ?></td>
        
        <td>
        
            
        </td>
        <td>
        <a href="/Q1_Projet_php_gestion_fatima/modifiercontacts.php?id=<?= $contact->id ?>">
                <button class="btn btn-warning">Modifier</button>
            </a>
            
        </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>

</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>