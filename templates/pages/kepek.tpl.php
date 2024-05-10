<?php
    // Alkalmazás logika:
    include('./includes/config.inc.php');
    
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
 ?>   
 <div id="galeria">
    <h1>Galéria</h1>
    <div class="row">
        <?php
        $i = 0;
        foreach($kepek as $fajl => $datum)
        {
            if ($i % 3 == 0 && $i != 0) {
                echo '</div><div class="row">';
            }
        ?>
            <div class="col-md-4">
                <div class="kep">
                    <a href="<?php echo $MAPPA.$fajl ?>">
                        <img src="<?php echo $MAPPA.$fajl ?>">
                    </a>            
                    
                    <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
                </div>
            </div>
        <?php
            $i++;
        }
        ?>
    </div>
</div>
