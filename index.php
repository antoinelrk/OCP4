<?php
include './includes/bootstrap.php';

$query = $dbConnection->prepare('SELECT * FROM oeuvres');
$query->execute();
$data = $query->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include ('./includes/header.php'); ?>
<main>
    <div id="liste-oeuvres">
        <?php foreach($data as $artwork): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?= $artwork['id'] ?>">
                    <img src="<?= $artwork['image'] ?>" alt="<?= $artwork['title'] ?>">
                    <h2><?= $artwork['title'] ?></h2>
                    <p class="description"><?= $artwork['artist'] ?></p>
                </a>
            </article>
        <?php endforeach ?>
    </div>
</main>
<?php include('./includes/footer.php'); ?>
</body>
</html>
