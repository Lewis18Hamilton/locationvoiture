<?php
try {
    $db=new PDO('mysql:host=localhost; dbname=location; charset=utf8', 'root', '');
} catch (Exception $th) {
    die('erreur de connexion à la base de donnée !').$th->getMessage();
}
?>