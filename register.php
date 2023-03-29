<?php
    include "config.php";
    $conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $dodanie = "INSERT INTO `MK_Nutrition`(`user_name`, `user_surname`, `user_email`, `user_passwd`) VALUES ('$imie','$nazwisko','$email','$password')";

    if(isset($_POST['wyslij_rej'])){
        mysqli_query($conn, $dodanie);
        header('Location: logowanie.php?zarejestrowano');
    }
    

    mysqli_close($conn);
?>