<?php
   include('C:/Programok/xampp2/htdocs/iskola/beadando_2024_05_09/includes/config.inc.php');
    $MAPPA='C:/Programok/xampp2/htdocs/iskola/beadando_2024_05_09/kepek/';
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[] = $fajl;            
        }
    closedir($olvaso);

    echo json_encode($kepek); // Visszatérünk a képek tömbjével JSON formátumban
?>