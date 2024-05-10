<h2>Beküldött üzenetek</h2>
    <table id="uzenetekTabla">
        <tr>
            <th>ID</th>
            <th>Beküldő</th>
            <th>Üzenet</th>
            <th>Dátum</th>
        </tr>
    </table>

    <script>
        // AJAX kérés az üzenetek lekérdezéséhez
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var uzenetek = JSON.parse(xhr.responseText);
                var table = document.getElementById("uzenetekTabla");
                uzenetek.forEach(function(uzenet) {
                    var row = table.insertRow();
                    row.insertCell(0).innerHTML = uzenet.id;
                    row.insertCell(1).innerHTML = uzenet.bekuldo;
                    row.insertCell(2).innerHTML = uzenet.uzenet;
                    row.insertCell(3).innerHTML = uzenet.datum;
                });
            }
        };
        xhr.open("GET", "uzenetek.php", true);
        xhr.send();
    </script>