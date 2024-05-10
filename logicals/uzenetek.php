<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: belepes.tpl.php"); // Ha nincs bejelentkezve, irányítsuk át a bejelentkezési oldalra
    exit();
}
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Üzenet keresése
        $sqlSelect="Select * from uzenetek ORDER BY datum DESC";
		$sth = $dbh->prepare($sqlSelect);
		$sth ->execute();
		
		$uzenetek = $sth->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($uzenetek);
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      


?>