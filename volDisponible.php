<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <style>
        table,
        td,
        thead,
        tr,
        th {
            border: 1px solid black;
        }

        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <a href="http://localhost/home.php">home</a>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">List des Vols</h2>
                        </div>

                        <?php
                        // Include config file
                        require_once "config.php";

                        // Attempt select query execution
                        $sql = "SELECT * FROM vol";
                        if ($result = $conn->query($sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Compagnie</th>";
                                echo "<th>Vile Départ</th>";
                                echo "<th>Ville d'arrive</th>";
                                echo "<th>Prix</th>";

                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td><input type='radio' name='reserver' value=" . $row["idVol"] . " ></td>";
                                    echo "<td>" . $row['idCompagne'] . "</td>";
                                    echo "<td>" . $row['villeDepart'] . "</td>";
                                    echo "<td>" . $row['villeArrivee'] . "</td>";
                                    echo "<td>" . $row['prix'] . "</td>";

                                    // echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    // echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    // echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                            }
                        } else {
                            echo "Oops! Something went wrong. Please try again later.";
                        }

                        // Close connection
                        mysqli_close($link);
                        ?>
                        <br>
                        <input type="submit" name="submitReservation" value="Reserver">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
if (isset($_POST["submitReservation"])) {
    $vol = htmlspecialchars($_POST["reserver"]);
    echo $vol;
    if ($vol) {
        header("Location: http://localhost/reservation.php?vol=" . $vol);
    } else {
        echo "choose vol !!!";
    }
}
