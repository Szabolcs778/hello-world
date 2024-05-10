<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $.ajax({
        url: 'logicals/uzenetek_lekerdezes.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log('Response:', response);
		console.log('Ajax kérés sikeresen végrehajtva');
    console.log('Válasz:', response);
    
            // Sikeres lekérdezés esetén megjelenítjük az üzeneteket
            for (var i = 0; i < response.length; i++) {
                var row = "<tr>";
                row += "<td>" + response[i].id + "</td>";
                row += "<td>" + response[i].bekuldo + "</td>";
                row += "<td>" + response[i].uzenet + "</td>";
                row += "<td>" + response[i].datum + "</td>";
                row += "</tr>";
                $("#uzenetek tbody").append(row);
            }
        },
        error: function(xhr, status, error) {
            // Hiba esetén megjelenítjük a hibaüzenetet
            console.log(error);
        }
    });
});


</script>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">Üzenetek</h1>
                <p class="text-center">Ez a tartalom csak bejelentkezett felhasználóknak látható.</p>
                <div class="table-responsive">
                    <table id="uzenetek" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Név</th>
                                <th>Üzenet</th>
                                <th>Dátum</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>