<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form id="myForm" action="reservation_action.php" method="post">

        <label for="vol">VOL :</label>
        <?php
        echo '<input type="text" name="vol" value="' . $_GET["vol"] . '">'
        ?>
        <br>
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom">
        <br>
        <label for="prenom">Prenom :</label>
        <input id="prenom" type="text" name="prenom">
        <br>
        <label for="passport">Passeport :</label>
        <input id="passport" type="text" name="passport">
        <br>
        <input id="submitReser" type="button" value="Valider">
    </form>
</body>
<script>
    const submitBTn = document.getElementById('submitReser');
    submitBTn.addEventListener('click', (e) => {

        if (!nom.value) {
            alert("nom est vide")
            return;
        }
        if (!prenom.value) {
            alert("prenom est vide")
            return;
        }
        if (!passport.value) {
            alert("passport est vide")
            return;
        }
        if (passport.value.length !== 7) {
            alert("passport est invalid")
            return;
        }
        document.getElementById("myForm").submit();


    })
</script>

</html>