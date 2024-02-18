<?php
    require './vendor/autoload.php';
    
    include './core/Database.php';
    require './core/Helper.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

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
            <li><a href="/create_oeuvre.php">Ajouter une oeuvre</a></li>
        </ul>
    </nav>
</header>