<?php


define('DB_HOST', '51.158.59.186');
define('DB_PORT', '14301');
define('DB_NAME', 'Loane');
define('DB_USER', 'phppex');
define('DB_PASS', 'Supermotdepasse!42');

function openDatabaseConnection()
{
    $conn = new mysqli('51.158.59.186', 'phppex', 'Supermotdepasse!42', 'Loane', '14301');
    if ($conn->connect_error) {
        die("Erreur de connexion : " . $conn->connect_error);
    }
    return $conn;
}
