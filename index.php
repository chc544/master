<!DOCTYPE html>


<html lang="da">
<head>
    <title>Lions Nyk F.</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<?php include "includes/menu.php"; ?>



<body>

<!-- Background image -->
<div class="bg-image">
    <div class="d-flex justify-content-center align-items-center h-100 text-center">
        <div class="text-white">
            <h1 class="mb-3">Vær med til at gøre en forskel</h1>
            <h4 class="mb-3">Lions Nykøbing Falster</h4>
            <br><br>
            <a class="btn btn-yellow " href="medlem.php" role="button">Gør en forskel</a>
        </div>
    </div>
</div>
<!-- Background image -->
<div class="formål__wrapper">
    <div class="container" id="pwidth">
        <h1>Formål</h1>
        <p>Vi ønsker at gøre en forskel for mennesker, dyr og miljøet i hele verden. <br>
            I Nykøbing F. har vi valgt at vores donationer skal fordeles således: <br>
        <ul>
            <li>50% går til lokale formål.</li>
            <li>25% går til nationale formål.</li>
            <li>25% går til internationale formål.</li>
        </ul>
            Derfor bliver 75% af vores donationer i Danmark og er med til at gøre en forskel for rigtig mange mennesker – i 2020 donerede vi i Nykøbing 38.000 kr.
            <br>
            Alle donationer går ubeskåret til at hjælpe andre, så intet af DIN donation går til administration.
            <br>
        </p>
    </div>
    <div class="formål__donationer">
        <div class="container">
            <img src="img/lokalt50.svg" alt="lokalt">
            <img src="img/national25.svg" alt="nationalt">
            <img src="img/international25.svg" alt="internationalt">
        </div>
    </div>
</div>
<!-- Background image -->

<div class="bg-image" id="midimage">
    <div class="d-flex justify-content-center align-items-center h-100 text-center">
        <div class="text-white">
            <h2 class="mb-3">Tip os om en god sag.</h2>
            <h4 class="mb-3">Kender du nogle der kunne bruge vores hjælp?</h4>
            <a class="btn btn-yellow" href="kontakt.php" role="button">Kontakt os</a>
        </div>
    </div>
</div>
<!-- Background image -->


<div class="container">
    <h1>Nyheder</h1>
</div>
<div class="card__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="images/julehjaelp.jpeg" class="card-img-top" alt="...">
                        <h4 class="card-title">Julehjælp på Falster</h4>
                        <p class="card-text">I ugen op til jul samlede LIONS Nykøbing fødevarer ind til fremstilling af julekurve til 12 familier i Nykøbing F.
                            <br>Samarbejdspartner var den lokale Kvickly i Nykøbing F. [...]</p>
                        <a href="https://nykoebingfalster.lions.dk/klub_nyhed/19552" class="btn btn-yellow" target="_blank">Læs mere →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="images/katastrofe.jpg" class="card-img-top" alt="...">
                        <h4 class="card-title">COVID-19 Katastrofehjælp</h4>
                        <p class="card-text">Lions giver 1 mio. kr. til COVID-19 vaccination og behandling i Afrika. COVID-19 har ramt hele verden. Mens vi på vores breddegrader har midlerne til at indkøbe, fordele og vaccinationerne [...]</p>
                        <a href="https://www.lions.dk/nyhed/19542" class="btn btn-yellow" target="_blank">Læs mere →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="nyhedsbrev">
        <div class="container">
            <h3>Nyhedsbrev</h3>
            <p>Tilmeld dig vores nyhedsbrev for at holde dig opdateret, vi sender nyheder en gang om måneden.</p>
        </div>

        <div class="container">
            <div class="nyhedsbrev__email__wrapper">
                <input id="email" class="email" name="email" type="email" placeholder="Email" value="">
                <button class="btn btn-yellow">Tilmeld</button>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>

</body>
</html>
