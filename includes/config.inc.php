<?php
	$MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpg' , 'image/png' , 'image/jpeg');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;

$ablakcim = array(
    'cim' => 'Autó kereskedés Kft.',
);

$fejlec = array(
    'kepforras' => 'auto_logo2.jpg',
    'kepalt' => 'logo',
	'cim' => 'Autó kereskedés',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Autó kereskedés Kft.'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'video' => array('fajl' => 'video', 'szoveg' => 'Videók', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
	'uzenet' => array('fajl' => 'uzenet', 'szoveg' => 'Üzenetek', 'menun' => array(0,1)),
	'feltolt' => array('fajl' => 'feltolt', 'szoveg' => 'Kép feltöltés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');


?>