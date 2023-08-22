<?php

$link =  $_GET["link"] ?? 'index';
switch ($link) {
    case "main":
        $baslik = "AnaSayfa";
        break;
    case 'iletisim':
        $baslik = "İletişim";
        break;
    case "matematik":
        $baslik = "Sınav";
        break;
    case "about":
        $baslik = "Hakkımızda";
        break;
    case "kayit":
        $baslik = "Kayıt";
        break;
    default:
        $baslik = "Giriş";
        $d = "index";
        break;
}
?>