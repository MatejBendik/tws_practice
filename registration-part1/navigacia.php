<?php
    function vypisNavigaciu($vybrane)
    {
        $napisy=array();
        $napisy['uvod'] = 'Domovská stránka';
        $napisy['tws'] = 'TWS';
        $napisy['zadania'] = 'Zadania';

        if(isset($_SESSION['user']))
        {
            $napisy['riesenia'] = 'Riešenia';
            $napisy['userstudents'] = 'Zoznam žiakov';
            $napisy['kontakt'] = 'Kontakt';
        }

        foreach($napisy as $id => $napis)
        {
            if($vybrane == $id)
            {
                echo '<li class = "active">';
            }
            else
            {
                echo '<li>';
            }
            echo '<a class = "nav-link" href ="./?id='.$id.'">'.$napis.'</a></li>';
        }
    }
?>