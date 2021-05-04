<?php
$db = null;
$errors = [];

#Tries tocoonect to database and throws an exception with error messages if connection fails.
try {
    $db = new PDO('mysql:host=localhost;dbname=stufy', 'root', 'D@rwin2021');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    #catches all the errors raised and stores in the errors array.
    $errors[] = "Database Error. " . $error->getMessage();
}
