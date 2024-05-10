<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="?oldal=belep" method="post">
                <fieldset>
                    <legend>Bejelentkezés</legend>
                    <div class="form-group">
                        <input type="text" class="form-control" name="felhasznalo" placeholder="Felhasználó" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="jelszo" placeholder="Jelszó" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="belepes">Belépés</button>
                </fieldset>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Regisztrálja magát, ha még nem felhasználó!</h3>
            <form action="?oldal=regisztral" method="post">
                <fieldset>
                    <legend>Regisztráció</legend>
                    <div class="form-group">
                        <input type="text" class="form-control" name="vezeteknev" placeholder="Vezetéknév" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="utonev" placeholder="Utónév" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="felhasznalo" placeholder="Felhasználói név" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="jelszo" placeholder="Jelszó" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="regisztracio">Regisztráció</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
