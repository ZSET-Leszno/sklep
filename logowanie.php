<?php session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<title>Logowanie - MKNutrition</title>
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="logowanie.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>
<body>
    <a href="index.php"><img src="images/logo2.png" alt="Logo"></a>
      
    
      <?php if(isset($_GET['zarejestrowano'])): ?>
        <div class="okno_log">Konto zostało poprawnie dodane, <br>Dziękujemy!</div>
      <?php endif; ?>   

      <?php if(isset($_GET['login'])){
        echo"<div class='okno_log'>Zalogowano poprawnie <br>Witamy "; 
       if(!empty($_SESSION['name']) && isset($_SESSION['name']))
        {
          echo $_SESSION['name'];
        }
        echo"</div>";
      }?>

      <?php if(isset($_GET['blad'])): ?>
        <div class="okno_log">Bład w logowaniu</div>
      <?php endif; ?>



        <h1>Logowanie</h1>
            <div class="ramka-logowanie">
                <div class="formularz-logowanie">
                    <form method="POST" action="">
                        <input type="text" id="email" name="email" placeholder="&#xf007;  E-Mail" required>
                        <input type="password" id="password" name="password" placeholder="&#xf023;  Hasło" required>
                        <i class="fas fa-eye" onclick="show()"></i> 
                        <button type="submit" name="wyslij_login" id="wyslij_login">ZALOGUJ SIĘ</button>
                        <button type="button" onclick="window.location.href='rejestracja.html'">REJESTRACJA</button>
                    </form>
                </div>
            </div>

        <?php
          if(isset($_POST['wyslij_login'])){
            if(!empty($_POST['email']) && !empty($_POST['password']))
            {
              include "config.php";
              $conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

              $email = $_POST['email'];
              $password = $_POST['password'];

              $zapytanie = "SELECT * From MK_Nutrition WHERE user_email = '$email' and user_passwd = '$password'";
              $wynik = mysqli_query($conn, $zapytanie);

              if(mysqli_num_rows($wynik) === 1)
              {
                $row = mysqli_fetch_assoc($wynik);

                if($row['user_email'] === $email && $row['user_passwd'] === $password)
                {
                  header('Location: index.php');
                  $_SESSION['name'] = $row['user_name'];

                  $duration = 5;
                  $time = $_SERVER['REQUEST_TIME'];
                  if (isset($_SESSION['LAST_ACTIVITY']) &&
                  ($time - $_SESSION['LAST_ACTIVITY']) > $duration) {
                  //Unset the session variables
                  session_unset();
                  //Destroy the session
                  session_destroy();
                  //Start another new session
                  session_start();
                  echo "New session is created.<br/>";
                  }
                  else
                  echo "Current session exists.<br/>";  
                  //Set the time of the user's last activity
                  $_SESSION['LAST_ACTIVITY'] = $time;
                }
                else
                {
                  header('Location: logowanie.php?blad'); 
                }
              }
              else
              {
                header('Location: logowanie.php?blad'); 
              }

              mysqli_close($conn);
            }
            else
            {
              header('Location: logowanie.php?blad'); 
            }
          }
                

              
            ?>


    <script>
        function show(){
          var password = document.getElementById("password");
          var icon = document.querySelector(".fas")

          if(password.type === "password"){
            password.type = "text";
          }
          else {
            password.type = "password";
          }
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="sbootstrap.min.js"></script>
</body>
</html>