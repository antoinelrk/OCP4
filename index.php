<?php
    require './vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include ('./includes/header.php');

    $query = $dbConnection->prepare('SELECT * FROM oeuvres');
    $query->execute();
    $data = $query->fetchAll();
?>
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