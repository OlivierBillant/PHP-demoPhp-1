<?php
try {
    $hote = "localhost";
    $username = "root";
    $pw = "";
    $dbname = "db_php";
    $db = new PDO("mysql:host=$hote;dbname=$dbname", $username, $pw);
    echo "Connected";
    var_dump($db->getAttribute(PDO::ATTR_SERVER_VERSION));

    $sql = "SELECT * FROM STOCK";
    $stmt = $db->query($sql);
    // $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arr);

    $one = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($one);
} catch (PDOException $e) {
    echo "Not Connected";
}
