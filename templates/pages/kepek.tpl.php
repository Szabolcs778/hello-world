<?php
    $kepek_lekerese_url = './includes/kepek_lekerese.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Képek megjelenítése</title>
    <!-- Bootstrap CSS betöltése -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Képek megjelenítése</h1>
        <div class="row" id="kepek_sor"></div>
    </div>

    <!-- jQuery betöltése -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // jQuery segítségével AJAX kérést küldünk a képek_lekerese.php fájlnak
        $.get("<?php echo $kepek_lekerese_url; ?>", function(data) {
            // A válaszban kapott adatokat JSON formátumból tömbbé alakítjuk
            var kepek = JSON.parse(data);
            var baseUrl = window.location.origin + '/iskola/beadando_2024_05_09/kepek/';
            // Iterálunk a képek tömbön és megjelenítjük őket a HTML-ben
            $.each(kepek, function(index, kep) {
                $('#kepek_sor').append('<div class="col-md-4"><img src="' + baseUrl + kep + '" class="img-fluid"></div>');
            });
        });
    </script>





</body>
</html>