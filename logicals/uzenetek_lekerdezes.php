<?php
try {
    // Kapcsolódás
    $dbh = new PDO('mysql:host=localhost;dbname=jasz', 'jasz', 'Szaj_89',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    // Üzenet keresése
    $sqlSelect = "Select * from uzenetek ORDER BY datum DESC";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();

    $uzenetek = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    // JSON formátumban visszaadjuk az üzeneteket
    echo json_encode($uzenetek);
} catch (PDOException $e) {
    $errormessage = "Hiba: ".$e->getMessage();
}
?>