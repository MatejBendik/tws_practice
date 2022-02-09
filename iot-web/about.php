<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navigation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/home.css?v=<?php echo time(); ?>">
    <title>IoT | Viac</title>
</head>

<?php

include "utils/navigation.php";

?>

<!-- Header/hlavna sekcia v uvode stranky -->

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2 id="heading_text">Viac o internete vecí</h2>
            <p>Prvýkrát použil slovné spojenie „Internet of Things“ Kevin Ashton, zakladateľ spoločnosti Auto-ID Center v roku 1999. Aj keď neexistuje štandardná definícia riešenia "internetu vecí", pri jeho implementácii sa používajú rôzne technológie (napr. tagy RFID, čiarové kódy a GPS technológie).</p>
        </div>
        <div class="col-lg-6">
            <img src="img/more.svg" class="img-fluid" id="home_heading_img" alt="Home header img" title="Home header img" id="home_header">
        </div>
    </div>
</div>

<!-- Zaciatok sekcie About us - zacina vlnkou -->

<div class="home_wave_start">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#12d8fa" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,112C384,107,480,53,576,64C672,75,768,149,864,170.7C960,192,1056,160,1152,144C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>
<!-- Content sekcie About us -->
<div class="home_wave_content">
    <div class="container">
        <h1 class="text-center" id="heading_home_wave">Viac o internete vecí</h1>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="img/security.svg" class="img-fluid" alt="Home web mobile" width="80%" height="80%" style="margin-top: 100px;">
            </div>
            <div class="col-lg-6 text-start p-5">
                <p>Tieto technológie sa používajú na sledovanie a prenos stavu hmotného majetku, pre riešenie obchodných problémov a ich efektivity v dodávateľskom reťazci v odvetviach, ako je výroba, zdravotníctvo, doprava a maloobchod, rovnako aj na inšpiráciu inovácií v organizáciách. </p>
                <p>Napríklad informácie vložené do RFID čipov na kontajneroch sú zbierané v celom dodávateľskom reťazci na zasielateľskom oddelení dodávateľa, v celom dopravnom procese i počas skladovania, zberu a montáže pozdĺž montážnej linky. </p>
                <p>Dostupnosť presných a aktuálnych dát o udalostiach v dodávateľskom reťazci umožňuje firmám poskytovať vynikajúce služby zákazníkom, pri súčasnom znižovaní zásob. Ďalšie aplikácie "internetu vecí" sú napríklad vysledovateľnosť potravín, monitoring pacienta v zdravotníckom zariadení a medicínske sledovanie.</p>
            </div>
        </div>
    </div>
</div>
<!-- Koniec sekcie About us - konci vlnkou -->
<div class="home_wave_end">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#12d8fa" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,133.3C384,139,480,117,576,117.3C672,117,768,139,864,149.3C960,160,1056,160,1152,144C1248,128,1344,96,1392,80L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
</div>


<!-- Koniec sekcie Features -->

<?php

// zahrnutie paty na stranku

include "utils/footer.php";

?>