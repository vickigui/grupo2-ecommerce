<?php

$dsn = 'mysql:host=localhost;dbname=paltafinal;port=3306';
$user = 'root';
$pass = '';


try {
    $db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
