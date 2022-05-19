<?php
try {
    $hote = "localhost";
    $username = "root";
    $pw = "";
    $dbname = "db_php";
    $db = new PDO("mysql:host=$hote;dbname=$dbname", $username, $pw);
    echo "Connected";
    var_dump($db->getAttribute(PDO::ATTR_SERVER_INFO));
} catch (PDOException $e) {
    echo "Not Connected";
    //throw $th;
}
