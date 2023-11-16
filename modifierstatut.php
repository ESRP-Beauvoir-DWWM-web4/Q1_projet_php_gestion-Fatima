<?php

$title = "Modification des des taches";
require 'inc/db.php';

$success = null;
if ( isset( $_POST["statut"] ) ) {
    $query = $pdo->prepare('UPDATE users SET statut = :statut WHERE id = :id');
    $query->execute([
        
        'statut' => $_POST["statut"],
        'id' => $_GET['id'],
     
    ]);
    $success = "Les informations ont bien été mise à jour";
};


$query = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$query->execute([
    'id' => $_GET['id']
]);

if ( $query === false ) {
    var_dump($pdo->errorInfo());
    die('ERREUR SQL');
};

$user = $query->fetch(PDO::FETCH_OBJ);

?>

<?php require 'partials/header.php' ?>
<!-- Content -->
<main>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre : </label>
            <!-- <input type="text" name="title" value="<?= $user->title ?>" class="form-control" id="exampleFormControlInput1" placeholder=""> -->
        <p class="form-control"> <?= $user->title ?> </p>
        
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description : </label>
            <!-- <input type="text" name="description" value="<?= $user->description ?>" class="form-control" id="exampleFormControlInput1" placeholder=""> -->
            <p class="form-control"> <?= $user->description ?> </p>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Statut :</label>
            <input type="text" name="statut" value="<?= $user->statut ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      
        <button class="btn btn-success">Sauvegarder</button>
    </form>
    <?php if ( isset( $success ) ): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
    <a class="btn btn-primary" href="http://localhost/Q1_Projet_php_gestion_fatima/liste_taches.php" role="button">Retour</a>

</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>