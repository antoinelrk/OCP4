<?php
    include './core/Database.php';
    require './core/Helper.php';

    $database = new Database('database', 'artbox', 'root', 'local');
    $dbConnection = $database->getConnection();
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
<header>
    <a href="/"><img src="img/logo.png" alt="Logo Artbox" id="logo"></a>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
        </ul>
    </nav>
</header>