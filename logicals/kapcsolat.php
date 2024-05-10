<?php
if (isset($_POST['bekuldo']) && isset($_POST['uzenet'])){

	try{

		$dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$datum=date('Y-m-d H:i:s');
		$sqlInsert = "insert into uzenetek(id, bekuldo, uzenet, datum)
                          values(0, :bekuldo, :uzenet, :datum)";
           	$stmt = $dbh->prepare($sqlInsert); 
            	$stmt->execute(array(':bekuldo' => $_POST['bekuldo'], ':uzenet' => $_POST['uzenet'] , ':datum' => $datum)); 
            	if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "Az üzenetet sikeresen elküldte.<br>Azonosítója: {$newid}";                     
                
            }
            else {
                $uzenet = "Az üzenet elküldése sikertelen";
                
            }




	}


	catch (PDOException $e) {
	$hiba = "Hiba: ".$e->getMessage();		
	
	}
}
?>
