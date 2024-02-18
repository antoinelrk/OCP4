<?php
    include './includes/header.php';
    $key = 'id';
    $selectedId = intval($_GET[$key]);

    /**
     * Fetch database
     */
    $query = $dbConnection->prepare('SELECT * FROM oeuvres WHERE id = :id');
    $query->execute([
        'id' => $selectedId
    ]);
    $artwork = $query->fetch();
?>
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
<?php include ('./includes/footer.php') ?>