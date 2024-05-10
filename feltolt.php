<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$uzenet = array();   
include('C:/Programok/xampp2/htdocs/iskola/beadando_2024_05_09/includes/config.inc.php');
$MAPPA = 'C:/Programok/xampp2/htdocs/iskola/beadando_2024_05_09/kepek/';

if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
echo $MAPPA.strtolower($fajl['name']);
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }


if (!empty($uzenet)) {
    echo '<ul>';
    foreach ($uzenet as $u) {
        echo "<li>$u</li>";
    }
    echo '</ul>';

    // Időzítő létrehozása az előző oldalra való visszatéréshez
    echo '<script>
        setTimeout(function() {
            window.history.back();
        }, 5000); // 5000 milliszekundum = 5 másodperc
    </script>';
}
?>