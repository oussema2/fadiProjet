<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'oussema');
define('DB_PASSWORD', 'lcspro');
define('DB_NAME', 'fadi');

/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
