<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    include "config.php";
    $conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

	$produkty = [2,3,4,5,6];

    $zapytanie= "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty[0]'";
	$wynik = mysqli_query($conn, $zapytanie);

    while($row = mysqli_fetch_row($wynik))
    { 
        echo "$row[0]";
        echo "$row[1]";
        echo "$row[2]";
        echo "$row[3]";
        echo "$row[4]";
        echo "$row[5] <br>"; 
    }
        

    mysqli_close($conn);




?>

</body>
</html>