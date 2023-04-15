<?php
session_start();


include "config.php";
$conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

$id = $_GET["id"];

if(!empty($id))
{
    mysqli_query($conn, "DELETE FROM MK_Nutrition_produkty WHERE produkt_id='$id'");
} 

mysqli_close($conn);


header('Location: panel.php'); 
?>