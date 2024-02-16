<?php
try {
    // host
    define('HOSTNAME', 'localhost');
    // database
    define('DATABASE', 'homeland');
    // user
    define('USER', 'root');
    // pass
    define('PASS', '');

    // connection
    $connection = new PDO('mysql:host=' . HOSTNAME . ";dbname=" . DATABASE . ";", USER, PASS);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Error!: " . $e->getMessage() . "<br/>");

}