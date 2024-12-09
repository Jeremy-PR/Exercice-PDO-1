
<!-- // index.php -->
<?php
require_once '../fichier_connect/connect_db.php';

$sql = "SELECT * FROM shows";

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
         <li>Titre du spectacle : <?= $user['title']  ?> , joué par l'artiste <?= $user['performer']  ?> , à la date du <?= $user['date']  ?>  et qui commence à  <?= $user['startTime']  ?> </li>
            
            <?php echo "<br>"; ?>

        <?php


        }

        ?>

    </ul>

</body>

</html>
<!-- ?> -->