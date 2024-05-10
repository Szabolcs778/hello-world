<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <?php if(isset($row)) { ?>
                <?php if($row) { ?>
                    <div class="alert alert-success" role="alert">
                        <h1 class="alert-heading">Bejelentkezett:</h1>
                        <p>Azonosító: <strong><?= $row['id'] ?></strong></p>
                        <p>Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong></p>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-danger" role="alert">
                        <h1 class="alert-heading">A bejelentkezés nem sikerült!</h1>
                        <p><a href="?oldal=belepes">Próbálja újra!</a></p>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if(isset($errormessage)) { ?>
                <div class="alert alert-danger" role="alert">
                    <h2><?= $errormessage ?></h2>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
