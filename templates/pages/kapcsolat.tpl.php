<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Üzenet küldés</h2>
                <form action="?oldal=kapcsolat" method="post">
                    <div class="form-group">
                        <label for="bekuldo">Név:</label>
                        <input id="bekuldo" name="bekuldo" type="text" class="form-control" value="<?php if(isset($_SESSION['login'])) echo $_SESSION['login']; else echo "Vendég" ?>">
                    </div>
                    <div class="form-group">
                        <label for="uzenet">Üzenet:</label>
                        <textarea id="uzenet" name="uzenet" class="form-control" rows="6" cols="50"></textarea>
                    </div>
                    <button type="submit" name="kuld" id="kuld" class="btn btn-primary btn-block">Küld</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Térkép</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3814.077982950656!2d19.03469495227218!3d47.47120101014008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741ddb9d9d54893%3A0x825f17c2d28cf590!2sBudapest%2C%20Halmi%20u.%2029%2C%201115!5e0!3m2!1shu!2shu!4v1715332237736!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="text-center mt-3"><a target="_blank" href="https://www.google.hu/maps/place/Pallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar/@46.8960799,19.6669509,17z/data=!3m1!4b1!4m5!3m4!1s0x4743da7a6c479e1d:0xc8292b3f6dc69e7f!8m2!3d46.8960763!4d19.6691396?hl=hu">Nagyobb térkép</a></p>
            </div>
        </div>
    </div>
</div>