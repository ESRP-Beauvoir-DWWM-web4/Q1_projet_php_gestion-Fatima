<?php

$title = "Activitée à consigner ";

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
<?php
require 'inc/db.php';

$success = null;
if ( isset( $_POST["title"], $_POST["dates"], $_POST["texte"] ) ) {
    $query = $pdo->prepare('INSERT INTO journal (title, dates, texte) VALUES (:title, :dates, :texte)');
    $query->execute([
        'title' => $_POST["title"],
        'dates' => $_POST["dates"],
        'texte' => $_POST["texte"],
    ]);
    $success = "Les informations ont bien été mise à jour";
};


?>

<?php require 'partials/header.php' ?>

<main>
<form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" name="dates" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Texte</label>
            <input type="text" name="texte" class="form-control" id="exampleFormControlInput1" placeholder="">
            
            <button class="btn btn-success" type="submit">Envoyer</button>
        </div>
    </form>
    <?php if ( isset( $success ) ): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
    <a class="btn btn-primary" href="http://localhost/Q1_Projet_php_gestion_fatima/journalactivite.php" role="button">Retour</a>
</main>

<?php require 'partials/footer.php' ?>