<?php

$title = "Page d'accueil";

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<?php
require 'inc/db.php';

$success = null;
if ( isset( $_POST["title"], $_POST["description"], $_POST["statut"] ) ) {
    $query = $pdo->prepare('INSERT INTO users (title, description, statut) VALUES (:title, :description, :statut)');
    $query->execute([
        'title' => $_POST["title"],
        'description' => $_POST["description"],
        'statut' => $_POST["statut"],
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
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="">
            
            <label for="exampleFormControlInput1" 
            class="form-label">Statut</label>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="statut" value="Enattente" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                En attente
            </label>
            </div>

            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="statut" value="Effectuée" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                 Effectuée
            </label>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
        </div>
    </form>
    <?php if ( isset( $success ) ): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
</main>

<?php require 'partials/footer.php' ?>