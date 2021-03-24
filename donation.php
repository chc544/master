<!DOCTYPE html>


<html lang="da">
<head>
    <title>Lions Nyk F.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/donation.css" type="text/css">
    <title>Lions Nyk F. - Donation</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<?php include "includes/menu.php"; ?>



<body>

<!-- Background image -->

<div class="bg-image">
    <div class="d-flex justify-content-start align-items-center h-100 text-start">
        <div class="container">
        <div class="text-white">
            <h4 class="mb-3">SEND EN DONATION</h4>
            <h1 class="mb-3" id="h1unique">Gør en forskel for de sårbare</h1>
            <br><br>
            <div class="donation__wrapper">
            <select list="betaling" id="list" class="form-control" aria-describedby="passwordHelpBlock">
                <option value="engangsbetaling">Engangsbeløb</option>
                <option value="månedsbetaling">Betal månedligt</option>
                <option value="årsbetaling">Betal årligt</option>
            <input type="number" id="input" class="form-control" aria-describedby="passwordHelpBlock" placeholder="kr.">
            <a class="btn btn-yellow " href="#!" role="button">Send donation</a>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Background image -->
<div class="container" id="pwidth">
    <h1>Få skattefradrag for din donation til velgørenhed</h1>
    <p>Husk at din donation kan trækkes fra i SKAT (følg linket og læs mere på SKATs hjemmeside) – vi er på listen over godkendte hjælpeorganisationer. <br><br>
        Du kan læse mere <a href="https://skat.dk/skat.aspx?oid=2234772">her.</a> <br>

        Har du nogle spørgsmål så kan du kontakte os <a href="kontakt.php">her.</a></p>
</div>
<br><br><br>
<!-- Background image -->

<?php include "includes/footer.php"; ?>

</body>
</html>

