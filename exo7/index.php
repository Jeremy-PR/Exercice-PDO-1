
<!-- // index.php -->
<?php
require_once '../fichier_connect/connect_db.php';

$sql = "SELECT * FROM clients";
try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <h1>Liste des utilisateurs :</h1>

        <?php
        foreach ($users as $user) {
        ?>
           <li>Nom : <?= $user['lastName']  ?>  </li>
            <li>Prénom : <?= $user['firstName']  ?>      </li>
            <li>Né(e) le  : <?= $user['birthDate']  ?>      </li>
            <li>carte de fidélité : <?php  if ($user['card'] ==1) {echo "Oui";} else { echo "Non";}?>     </li>
            <li>Si oui, numéro de carte :  : <?php   if ($user['card'] ==1) {echo $user['cardNumber'];} else {echo "NULL";} ?>      </li>
           


            
            <?php echo "<br>"; ?>

        <?php


        }

        ?>

    </ul>

</body>

</html>
<!-- ?> -->

