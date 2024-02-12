<?php
    include('./database.php');
    $selectedId = intval($_GET[$key]);

    /**
     * Obsolète
     * TODO: A changer
     */
    // $artworks = require './oeuvres.php';
    // $key = 'id';
    // $redirectToHome = fn() => header('Location: ' . '/');

    // if (!$selectedId) $redirectToHome();

    // $artwork = reset(array_filter($artworks, fn ($artwork) => $artwork[$key] === intval($selectedId)));

    // if (!$artwork) $redirectToHome();
    // END

    /**
     * Fetch database
     */
    $query = $mysqlClient->prepare('SELECT * FROM oeuvres WHERE id = :id');
    $query->execute([
        'id' => $selectedId
    ]);
    $artwork = $query->fetch();

    var_dump($artwork);
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
    <?php include ('./header.php'); ?>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?= $artwork['image'] ?>" alt="<?= $artwork['title'] ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?= $artwork['title'] ?></h1>
                <p class="description"><?= $artwork['artist'] ?></p>
                <p class="description-complete"><?= $artwork['description'] ?></p>
            </div>
        </article>
    </main>
    <?php include ('./footer.php') ?>
</body>
</html>