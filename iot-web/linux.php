<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navigation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/home.css?v=<?php echo time(); ?>">
    <title>IoT | Linux</title>
</head>

<?php

include "utils/navigation.php";

?>

<!-- Header/hlavna sekcia v uvode stranky -->

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2 id="heading_text">Linux</h2>
            <p>Termín Linux sa vzťahuje na jadro Linuxu, ale v bežnej reči sa používa na opis celej rodiny operačných systémov UNIXového typu, ktoré sú založené na linuxovom jadre, zatiaľ čo knižnice a nástroje pochádzajú zvyčajne z projektu GNU (takéto zoskupenie sa označuje ako GNU/Linux). Linuxové distribúcie často zoskupujú základný systém s veľkým množstvom programov spravovaných systémom „balíčkov“.</p>
        </div>
        <div class="col-lg-6">
            <img src="img/linux.svg" class="img-fluid" id="home_heading_img" alt="Home header img" title="Home header img" id="home_header">
        </div>
    </div>
</div>

<!-- Zaciatok sekcie About us - zacina vlnkou -->

<div class="home_wave_start" style="margin-top: -200px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#12d8fa" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,170.7C384,192,480,192,576,202.7C672,213,768,235,864,240C960,245,1056,235,1152,202.7C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>
<!-- Content sekcie About us -->
<div class="home_wave_content">
    <div class="container">
        <h1 class="text-center" id="heading_home_wave" style="padding-top:50px">Viac o Linuxe</h1>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="img/os.svg" class="img-fluid" alt="Home web mobile" width="80%" height="80%" style="margin-top: 100px;">
            </div>
            <div class="col-lg-6 text-start p-5">
                <p>Linux je vhodnou voľbou pre rôzne druhy internetových serverov, hlavne kvôli natívnej implementácii softvéru ako Apache, MySQL, PHP/Perl/Python a kvôli bezpečnosti a stabilite vyplývajúcej z vývojového modelu. Alternatívou v tomto prípade sú napr. BSD deriváty (FreeBSD, OpenBSD, NetBSD).</p>
                <p>Linux je výhodný aj pre programátorov, keďže existuje prístup ku všetkým zdrojovým kódom, neexistujú tu problémy s nezdokumentovanými funkciami a najpoužívanejší voľne dostupný kompilátor GCC patrí ku špičke.</p>
                <p>Linux je portabilný operačný systém, za čo sčasti vďačí faktu, že väčšina kódu je v jazyku C, ktorého kompilátor je dostupný na množstve platforiem. Linux beží na platformách od multiprocesorových superpočítačov.</p>
            </div>
        </div>
    </div>
</div>
<!-- Koniec sekcie About us - konci vlnkou -->
<div class="home_wave_end">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#12d8fa" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,138.7C384,149,480,139,576,128C672,117,768,107,864,122.7C960,139,1056,181,1152,192C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
</div>


<div class="home_features">
    <div class="container">
        <h1 class="text-center" id="heading_home_features" style="margin:50px 0;">Najpopulárnejšie Linux distribúcie</h1>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="d-grid gap-4">
                    <div class="p-5">
                        <h2>Ubuntu</h2>
                    </div>
                    <div class="p-5">
                        <h2>Debian</h2>
                    </div>
                    <div class="p-5">
                        <h2>Manjaro</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="img/distros.svg" class="img-fluid" alt="Home web features">
            </div>
            <div class="col-lg-3 text-center">
                <div class="d-grid gap-4">
                    <div class="p-5">
                        <h2>Arch Linux</h2>
                    </div>
                    <div class="p-5">
                        <h2>Kali Linux</h2>
                    </div>
                    <div class="p-5">
                        <h2>Pop!_OS</h2>
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