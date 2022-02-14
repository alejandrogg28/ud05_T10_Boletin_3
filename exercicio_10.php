<?php
/*
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
*/

    if(!isset($_REQUEST['dia']) || !isset($_REQUEST['mes']))
        echo "<p>Tes que escoller o día e o mes</p>";
    else {
        $mes = $_REQUEST['mes'];
        $dia = $_REQUEST['dia'];
        $horoscopo = "";
        switch ($mes) {
            case '01':
                if($dia<20){
                    $horoscopo= "Capricornio";
                break;
                }else {
                    $horoscopo= "Acuario";
                }
            case '02':
                if($dia<19){
                    $horoscopo= "Acuario";
                break;
                }else {
                    $horoscopo= "Piscis";
                }
            case '03':
                if($dia<21){
                    $horoscopo= "Piscis";
                break;
                }else {
                    $horoscopo= "Aries";
                }
            case '04':
                if($dia<20){
                    $horoscopo= "Aries";
                break;
                }else {
                    $horoscopo= "Tauro";
                }
            case '05':
               if($dia<22){
                $horoscopo= "Tauro";
                break;
                }else {
                    $horoscopo= "Géminis";
                }
            case '06':
                if($dia<22){
                    $horoscopo= "Géminis";
                break;
                }else {
                    $horoscopo= "Cáncer";
                }
            case '07':
                if($dia<23){
                    $horoscopo= "Cáncer";
                break;
                }else {
                    $horoscopo= "Leo";
                }
            case '08':
                if($dia<24){
                    $horoscopo= "Leo";
                break;
                }else {
                    $horoscopo= "Virgo";
                }
            case '09':
                if($dia<23){
                    $horoscopo= "Virgo";
                break;
                }else {
                    $horoscopo= "Libra";
                }
            case '10':
                if($dia<23){
                    $horoscopo= "Libra";
                break;
                }else {
                    $horoscopo= "Scorpio";
                }
            case '11':
                if($dia<21){
                    $horoscopo= "Scorpio";
                break;
                }else {
                    $horoscopo= "Sagitario";
                }
            case '12':
                if($dia<22){
                    $horoscopo= "Sagitario";
                break;
                }else {
                    $horoscopo= "Capricornio";
                }
        }
        echo "<p>O teu horóscopo según varias fontes consultadas mais ou menos é: </p>".$horoscopo;
    }
?>