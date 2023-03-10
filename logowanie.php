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
        <div class="zarejestrowano">Konto zostało poprawnie dodane, <br>Dziękujemy!</div>
      <?php endif; ?>



        <h1>Logowanie</h1>
            <div class="ramka-logowanie">
                <div class="formularz-logowanie">
                    <form method="POST" action="login.php"></form>
                        <input type="text" id="email" placeholder="&#xf007;  E-Mail" required>
                        <input type="password" id="password" placeholder="&#xf023;  Hasło" required>
                        <i class="fas fa-eye" onclick="show()"></i> 
                        <button type="submit">ZALOGUJ SIĘ</button>
                        <button type="button" onclick="window.location.href='rejestracja.html'">REJESTRACJA</button>
                    </form>
                </div>
            </div>

    



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