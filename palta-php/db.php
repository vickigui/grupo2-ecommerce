<?php

$dsn = 'mysql:host=localhost;dbname=Palta;port=3306';
$user = 'root';
$pass = 'root';


try {
    $db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>