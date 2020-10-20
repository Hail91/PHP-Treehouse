<?php
// Basic example of a try/catch in PHP7 utilizing Exceptions.
try {
    $db = new PDO("sqllite:".__DIR__."/database.db");
} catch (Exception $error) {
    echo "Unable to connec: " . $error->getMessage()
    . " in File: " . $error->getFile()
    . " on Line: " . $error->getLine();
}