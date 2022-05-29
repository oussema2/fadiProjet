<?php
require_once "config.php";

$vol = htmlspecialchars($_POST['vol']);
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$passeport = htmlspecialchars($_POST["passport"]);


$sql = "INSERT INTO reservation (idVol , nom , prenom,numPasseport )values (" . $vol . " , '" . $nom . "' , '" . $prenom . "' , " . $passeport . ");";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: http://localhost/volDisponible.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
