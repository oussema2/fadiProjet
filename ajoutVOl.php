<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="http://localhost/home.php">home</a>
    <form action="ajouterVol_action.php" method="post">



        <fieldset>
            <legend>Compagnie:</legend>
            <?php
            require_once "config.php";

            // Attempt select query execution
            $sql = "SELECT * FROM compagnie";
            if ($result = $conn->query($sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<input type="radio" name="radio" value="' . $row["idCompagnie"] . '"> ' . $row["nomCompagnie"] . '<br>';
                    }
                } else {
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            ?>

        </fieldset>
        <fieldset>
            <legend>Ville depart:</legend>
            <?php
            require_once "config.php";

            // Attempt select query execution
            $sql = "SELECT * FROM ville";
            if ($result =  $conn->query($sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<select name="villeDep">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option  value="' . $row["nomVille"] . '"> ' . $row["nomVille"] . '</option>';
                    }
                    echo '</select>';
                } else {
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            ?>

        </fieldset>
        <fieldset>
            <legend>Ville d'arrivée:</legend>
            <?php
            require_once "config.php";

            // Attempt select query execution
            $sql = "SELECT * FROM ville";
            if ($result =  $conn->query($sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<select name="villearriv">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option  value="' . $row["nomVille"] . '"> ' . $row["nomVille"] . '</option>';
                    }
                    echo '</select>';
                } else {
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            ?>

        </fieldset>
        <label for="prix">Prix :</label>
        <input type="text" name="prix">
        <br>
        <input type="submit" value="Valider">
    </form>
</body>

</html>