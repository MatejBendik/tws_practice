<?php
    session_start();
    $stranky = array('uvod','tws','zadania','riesenia','volba','userstudents','zoznam','kontakt');
    $zobrazit = 'uvod';

    if(isset($_GET['id']) && in_array($_GET['id'], $stranky)){
        $zobrazit=$_GET['id'];
    }

    include('hlavicka.php');
    include('navigacia.php');
    vypisNavigaciu($zobrazit);
    include('prihlasenie.php');
    include('podstranky/'.$zobrazit.'.php');
    include('pata.php');
