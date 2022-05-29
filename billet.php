<?php
require_once "config.php";



$passport = htmlspecialchars($_POST['passport']);

if (!$passport) {
    header("Location: http://localhost/chercherRes.php");
}

$sql = "SELECT r.* , v.* , c.*  from reservation r join vol v on r.idVol = v.idVol join compagnie c on c.idCompagnie = v.idCompagne where r.numPasseport = " . $passport . ";";

$res = $conn->query($sql)->fetch_assoc();

// if ( === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

if ($res["idRes"]) {
    echo "<h3>" . $res["nomCompagnie"] . "</h3>";
    echo "<p>Mémo voyage Billet Electronique</p>";
    echo "<p>Numéro de réservation : " . $res["idRes"] . "</p>";
    echo "<hr>";
    echo "<p>A l'enregistrement , vous devez présenter une piece  d'identité <br> Passager  : " . $res["nom"] . " " . $res["prenom"] . "</p>";
    echo "<hr>";
    echo "<p>De " . $res["villeDepart"] . "</p>";
    echo "<p>A " . $res["villeArrivee"] . "<p>";
    echo "<p> avec le prix de : " . $res["prix"] . "DT </p>";
}
