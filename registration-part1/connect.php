<?php


    $mysql = new mysqli('127.0.0.1','root','','prihlasenie',3306);

    $mysql->set_charset("utf8");
    if($mysql->connect_error){
        die("Spojenie zlyhalo: " . $mysql->connect_error);
    }

?>