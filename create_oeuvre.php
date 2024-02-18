<?php
include ('./includes/header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    if(empty($_POST['title'])
        || empty($_POST['artist'])
        || empty($_POST['description'])
        || empty($_POST['image'])
        || strlen($_POST['description']) < 3
        || !filter_var($_POST['image'], FILTER_VALIDATE_URL)) {
        header('Location: /create_oeuvre.php?erreur=true');
    } else {
        $title = htmlspecialchars($_POST['title']);
        $artist = htmlspecialchars($_POST['artist']);
        $description = htmlspecialchars($_POST['description']);
        $image = htmlspecialchars($_POST['image']);
    
        // Puis on insère notre oeuvre en base de données
        $query = $dbConnection->prepare("INSERT INTO `oeuvres` (`title`, `artist`, `description`, `image`) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $artist, $description, $image]);
        header('Location: /oeuvre.php?id=' . $dbConnection->lastInsertId());
    }
else: ?>
<form action="create_oeuvre.php" method="POST">
    <div class="champ-formulaire">
        <label for="title">Titre de l'œuvre</label>
        <input type="text" name="title" id="title" value="Le temps qui passe et la mémoire aussi">
    </div>
    <div class="champ-formulaire">
        <label for="artist">Auteur de l'œuvre</label>
        <input type="text" name="artist" id="artist" value="Salvator Dali">
    </div>
    <div class="champ-formulaire">
        <label for="image">URL de l'image</label>
        <input type="url" name="image" id="image" value="https://media.discordapp.net/attachments/1088757034909978685/1208725338704580638/salvador-dali-1931-la-persistance-de-la-mc3a9moire.webp?ex=65e45431&is=65d1df31&hm=c51ee79882e9aa1cc7c8392ae42ae1c4c343b71b4b395c9f774951b2fb7fcec0&=&format=webp">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description">"Le Temps qui Passe" de Dali est un chef-d'œuvre surréaliste qui saisit l'essence de la fluidité et de la distorsion du temps. Le tableau représente des horloges fondantes drapées sur divers objets, symbolisant la nature insaisissable et subjective du temps. L'attention méticuleuse de Dali aux détails et les images oniriques invitent les spectateurs à contempler la relativité du temps et la nature éphémère de l'existence.</textarea>
    </div>
    <?php if(isset($_GET['erreur'])): ?>
        <p>Veuillez remplir tous les champs correctement.</p>
    <?php endif; ?>
    <input type="submit" value="Valider" name="submit">
</form>

<?php
    include './includes/footer.php';
    endif;
?>