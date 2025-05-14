<?php
// Database connection parameters
$DBUSER = 'root';
$DBPASS = '&6HAUTdanslaFauré';
$DBHOST = '127.0.0.1';
$DBNAME = 'sqlitraining';

try {
    // Create a PDO connection
    $con = new PDO("mysql:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASS);

    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set additional attributes if needed
    // $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "<font style=\"color:#FF0000\">Could not connect: " . $e->getMessage() . "</font>";
}
?>
