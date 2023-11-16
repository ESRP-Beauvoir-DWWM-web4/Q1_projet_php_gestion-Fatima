<?php

$title = "Ajout contacts";

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<?php
require 'inc/db.php';

$success = null;
if ( isset( $_POST["name"], $_POST["first_name"], $_POST["adress"], $_POST["code_postal"], $_POST["ville"], $_POST["email"], $_POST["number"] ) ) {
    $query = $pdo->prepare('INSERT INTO contacts (name, first_name, adress, code_postal, ville, email, number) VALUES (:name, :first_name, :adress, :code_postal, :ville, :email, :number)');
    $query->execute([
        'name' => $_POST["name"],
        'first_name' => $_POST["first_name"],
        'adress' => $_POST["adress"],
        'code_postal' => $_POST["code_postal"],
        'ville' => $_POST["ville"],
        'email' => $_POST["email"],
        'number' => $_POST["number"],
    ]);
    $success = "Les informations ont bien été mise à jour";
};


?>



<?php require 'partials/header.php' ?>

<main>
<form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Prénom</label>
            <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Adresse</label>
            <input type="text" name="adress" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Code postal</label>
            <input type="text" name="code_postal" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Ville</label>
            <input type="text" name="ville" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
            <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="">
            <button class="btn btn-success" type="submit">Envoyer</button>




            
           
    </form>
    <?php if ( isset( $success ) ): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
</main>

<?php require 'partials/footer.php' ?>