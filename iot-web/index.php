<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navigation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/home.css?v=<?php echo time(); ?>">
    <title>IoT | Domov</title>
</head>

<?php

include "utils/navigation.php";

?>

<!-- Header/hlavna sekcia v uvode stranky -->

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2 id="heading_text">Internet vecí</h2>
            <p>Internet vecí (Internet of Things, IoT) je koncept siete (spravidla bezdrôtovej) s pospájanými objektmi najrôznejších druhov (napr. chladnička, teplomer, najrôznejšie snímače a senzory), v ktorom sa nachádzame už teraz, kým internet všetkého (Internet of Everything, IoE) tak, ako ho definuje spoločnosť Cisco, má byť ďalším stupňom.</p>
        </div>
        <div class="col-lg-6">
            <img src="img/code.svg" class="img-fluid" id="home_heading_img" alt="Home header img" title="Home header img" id="home_header">
        </div>
    </div>
</div>

<!-- Zaciatok sekcie About us - zacina vlnkou -->

<div class="home_wave_start">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="home_wave_start">
        <path fill="#12d8fa" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,170.7C384,192,480,192,576,186.7C672,181,768,171,864,144C960,117,1056,75,1152,58.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>
<!-- Content sekcie About us -->
<div class="home_wave_content">
    <div class="container">
        <h1 class="text-center" id="heading_home_wave">Čo to je?</h1>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="img/question.svg" class="img-fluid" alt="Question">
            </div>
            <div class="col-lg-6 text-start p-5">
                <p>Súčasná spoločnosť je svedkom rých­le­ho nás­tu­pu tohto no­vé­ho tren­du. Internet všetkého pred­sta­vu­je sieť, v kto­rej sú nav­zá­jom pre­po­je­ní nie­len ľu­dia a po­čí­ta­če, ale aj pro­ce­sy, dá­ta a ve­ci oko­lo nás, ako sú stro­je, ale­bo au­tá a ďal­šie ob­jek­ty.</p>
                <p>Po­kiaľ si fir­my uve­do­mia ten­to trend a os­vo­ja si ho, mô­žu pros­tred­níc­tvom neho zvy­šo­vať svo­ju efek­ti­vi­tu, zlep­šo­vať sta­ros­tli­vosť o zá­kaz­ní­kov, ale­bo lep­šie spo­lup­ra­co­vať me­dzi se­bou. </p>
                <p>Priamy prenos dát bez ľudského zásahu zvyšuje presnosť, eliminuje možné chyby a hlavne šetrí ľudskú prácu. Vy­plý­va to zo štú­die spo­loč­nos­ti Cis­co. Tre­ti­na z opý­ta­ných ma­na­žé­rov a IT špe­cia­lis­tov pod­ľa nej oča­ká­va po­zi­tív­ny do­pad "inter­ne­tu všet­ké­ho" na vy­tvá­ra­nie no­vých pra­cov­ných miest a 47 per­cent opý­ta­ných ve­rí aj v po­zi­tív­ny do­pad na vý­šku miezd.</p>
            </div>
        </div>
    </div>
</div>
<!-- Koniec sekcie About us - konci vlnkou -->
<div class="home_wave_end">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#12d8fa" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,42.7C384,21,480,11,576,21.3C672,32,768,64,864,90.7C960,117,1056,139,1152,133.3C1248,128,1344,96,1392,80L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
</div>


<div class="home_features">
    <div class="container">
        <h1 class="text-center" id="heading_home_features">Klúčové pojmy</h1>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="d-grid gap-4">
                    <div class="p-5">
                        <h2>Aplikácie</h2>
                    </div>
                    <div class="p-5">
                        <h2>Bezpečnosť</h2>
                    </div>
                    <div class="p-5">
                        <h2>Bluetooth</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="img/list.svg" class="img-fluid" alt="Home web features">
            </div>
            <div class="col-lg-3 text-center">
                <div class="d-grid gap-4">
                    <div class="p-5">
                        <h2>Bezdrôtové pripojenie</h2>
                    </div>
                    <div class="p-5">
                        <h2>Inteligencia</h2>
                    </div>
                    <div class="p-5">
                        <h2>Linux</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Koniec sekcie Features -->

<?php

// zahrnutie paty na stranku

include "utils/footer.php";

?>