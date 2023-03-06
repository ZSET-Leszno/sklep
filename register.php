<?php
    $db_host = "adres_serwera.mysql.db";
    $db_name = "nazwa_bazy_danych";
    $db_user = "nazwa_uzytkownika_mysql";
    $db_pass = "haslo_uzytkownika_do_bazy_danych";
    $db_conn = mysqli_connect($dbhost,$dbuser,$dbpass)
    or die ("Odpowiedź: Błąd połączenia z serwerem $host");
    mysqli_select_db($db_conn, $dbname) or die("jutro bedzie działać");
?>