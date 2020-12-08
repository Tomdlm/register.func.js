alert('');
<?php
$servername = "localhost";
$username = "hugo";
$password = "";
$dbname = "users";

// créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);
// verifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// affiche les utilisateurs de la base de données mais on peut utiliser ce code pour afficher d'autre données comme les perf d'un utilisateur etc.
$sql = "SELECT * FROM `user_id`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo $row["name"]. " " . $row["surname"]. "<br>";
}
?>
