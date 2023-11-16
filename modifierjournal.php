<?php

$title = "Modification du journal";
require 'inc/db.php';

$success = null;
if ( isset( $_POST["title"], $_POST["dates"], $_POST["texte"] ) ) {
    $query = $pdo->prepare('UPDATE journal SET title = :title, dates = :dates, texte = :texte WHERE id = :id');
    $query->execute([
        'title' => $_POST["title"],
        'dates' => $_POST["dates"],
        'texte' => $_POST["texte"],
        'id' => $_GET['id'],
     
    ]);
    $success = "Les informations ont bien été mise à jour";
};


$query = $pdo->prepare('SELECT * FROM journal WHERE id = :id');
$query->execute([
    'id' => $_GET['id']
]);

if ( $query === false ) {
    var_dump($pdo->errorInfo());
    die('ERREUR SQL');
};

$journ = $query->fetch(PDO::FETCH_OBJ);

?>

<?php require 'partials/header.php' ?>
<!-- Content -->
<main>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre </label>
            <input type="text" name="title" value="<?= $journ->title ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="texte" name="dates" value="<?= $journ->dates ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Texte</label>
            <input type="text" name="texte" value="<?= $journ->texte ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <button class="btn btn-success">Sauvegarder</button>
    </form>


    <?php if ( isset( $success ) ): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
    <a class="btn btn-primary" href="http://localhost/Q1_Projet_php_gestion_fatima/journalactivite.php" role="button">Retour</a>




    
</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>