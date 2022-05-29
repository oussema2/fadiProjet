<?php
require_once "config.php";


$compagnie = htmlspecialchars($_POST['radio']);
$villDep = htmlspecialchars($_POST["villeDep"]);
$villArr = htmlspecialchars($_POST["villearriv"]);
$prix = htmlspecialchars($_POST["prix"]);

$sql = "INSERT INTO vol (idCompagne , villeDepart , villeArrivee,prix )values (" . $compagnie . " , '" . $villDep . "' , '" . $villArr . "' , " . $prix . ");";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: http://localhost/ajoutVOl.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
