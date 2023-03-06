<?php

include "config.php";
$conn = mysqli_connect($serwer,$user,$password,$baza);

if (mysqli_connect_error())
{
    echo 'Brak połączenia z serwerem MySQL';
}
else
{
    echo 'Połączono z serwerem';
}

mysqli_close($conn);

?>