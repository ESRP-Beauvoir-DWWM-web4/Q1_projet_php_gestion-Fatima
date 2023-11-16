<?php

$title = "Modification des contacts";
require 'inc/db.php';

$success = null;
if ( isset( $_POST["name"], $_POST["first_name"], $_POST["adress"], $_POST["code_postal"], $_POST["ville"], $_POST["email"], $_POST["number"] ) ) {
    $query = $pdo->prepare('UPDATE contacts SET name = :name, first_name = :first_name, adress = :adress, code_postal = :code_postal, ville = :ville, email = :email, number = :number WHERE id = :id');
    $query->execute([
        'name' => $_POST["name"],
        'first_name' => $_POST["first_name"],
        'adress' => $_POST["adress"],
        'code_postal' => $_POST["code_postal"],
        'ville' => $_POST["ville"],
        'email' => $_POST["email"],
        'number' => $_POST["number"],
        'id' => $_GET['id'],
     
    ]);
    $success = "Les informations ont bien été mise à jour";
};


$query = $pdo->prepare('SELECT * FROM contacts WHERE id = :id');
$query->execute([
    'id' => $_GET['id']
]);

if ( $query === false ) {
    var_dump($pdo->errorInfo());
    die('ERREUR SQL');
};

$contact = $query->fetch(PDO::FETCH_OBJ);

?>

<?php require 'partials/header.php' ?>
<!-- Content -->
<main>
<form action="" method="POST">
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" name="name" value="<?= $contact->name ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Prénom</label>
            <input type="text" name="first_name" value="<?= $contact->first_name ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Adresse</label>
            <input type="text" name="adress" value="<?= $contact->adress ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Code postal</label>
            <input type="text" name="code_postal" value="<?= $contact->code_postal ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Ville</label>
            <input type="text" name="ville" value="<?= $contact->ville ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" name="email" value="<?= $contact->email ?>"class="form-control" id="exampleFormControlInput1" placeholder="">
            <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
            <input type="text" name="number" value="<?= $contact->number ?>"class="form-control" id="exampleFormControlInput1" placeholder="">
            <button class="btn btn-success" type="submit">Envoyer</button>




            
           
    </form>
    <?php if ( isset( $success ) ): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
    <a class="btn btn-primary" href="http://localhost/Q1_Projet_php_gestion_fatima/listecontacts.php" role="button">Retour</a>


</main>
<!-- Content -->
<?php require 'partials/footer.php' ?>