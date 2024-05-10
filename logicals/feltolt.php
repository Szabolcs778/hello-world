<?php

$uzenet = array();   
$TIPUSOK = array('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpg', 'image/png', 'image/jpeg');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500 * 1024;

// FTP kapcsolat beállítása
$ftp_server = "ftp.nethely.hu";
$ftp_username = "jasz";
$ftp_password = "Szaj_89";

$ftp_conn = ftp_connect($ftp_server) or die("Nem lehet kapcsolódni a szerverhez: $ftp_server");

// Bejelentkezés az FTP szerverre
if (@ftp_login($ftp_conn, $ftp_username, $ftp_password)) {
    // Sikeres bejelentkezés

    foreach ($_FILES as $fajl) {
        if ($fajl['error'] == 4); // Nem töltött fel fájlt
        elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
            $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
        elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
            or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
            or $fajl['size'] > $MAXMERET)
            $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
        else {
            $local_file = $fajl['tmp_name'];
            $remote_file = "/kepek/" . strtolower($fajl['name']);

            if (ftp_put($ftp_conn, $remote_file, $local_file, FTP_BINARY)) {
                $uzenet[] = ' Sikeresen feltöltve: ' . $fajl['name'];
            } else {
                $uzenet[] = " Sikertelen feltöltés: " . $fajl['name'];
            }
        }
    }
} else {
    $uzenet[] = " Sikertelen FTP bejelentkezés";
}

// FTP kapcsolat bezárása
ftp_close($ftp_conn);

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
