<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=artbox;charset=utf8', 'dev', 'local',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>