<?php

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=maquincaillerie1';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $conn = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer l'ID de l'utilisateur à mettre à jour à partir du formulaire
    $user_id = $_POST['user_id'];

    // Mettre à jour l'utilisateur pour le rendre administrateur
    $sql = "UPDATE inscription SET is_admin = 1 WHERE id = :user_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    // Rediriger vers la page de confirmation
    header('Location: confirmation.php');
    exit();
}

// Récupérer la liste des utilisateurs
$sql = "SELECT * FROM inscription";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Afficher le formulaire pour sélectionner un utilisateur
echo '<form method="post">';
echo '<select name="user_id">';
foreach ($users as $user) {
    echo '<option value="' . $user['id'] . '">' . $user['nom'] . '</option>';
}
echo '</select>';
echo '<button type="submit">Mettre à jour</button>';
echo '</form>';

// Fermer la connexion à la base de données
$conn = null;

?>