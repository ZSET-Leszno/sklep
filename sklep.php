<?php session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<title>MK-Nutrition</title>
	<meta name="description" content="Strona dla twardzieli.">
	<meta name="keywords" content="sterydy, sklep, szybkie efekty">
	<link rel="icon" type="image/x-icon" href="/images/strzyk.png">
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<script src="jquery.scrollTo.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

</head>
<body>

    <div class="navb sticky">
        <div id="przelacznik" class="menu-nakladka">
            <div class="d-inline d-md-none">
                <?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
                    <a href="logowanie.php" class="logowanie2">Wyloguj</a>
                <?php else: ?>
                    <a href="logowanie.php" class="logowanie2">Logowanie</a>
                <?php endif; ?>
            </div>

            <a href="#" class="nakladka-zamykanie" onclick="zamykanie()">&times;</a>
            <div class="menu">
                <nav>
                <ul>
                    <li style="--clr:#00ade1">
                        <a href="/?action=page1" data-text="&nbsp;Białko">&nbsp;Białko&nbsp; </a>
                    </li>
                    <li style="--clr:#ff6493">
                        <a href="/?action=page2" data-text="&nbsp;Kreatyna">&nbsp;Kreatyna&nbsp; </a>
                    </li>
                    <li style="--clr:#ffdd1c">
                        <a href="/?action=page3" data-text="&nbsp;PWR">&nbsp;PWR&nbsp;</a>
                    </li>
                    <li style="--clr:#00dc82">
                        <a href="/?action=page4" data-text="&nbsp;Zdrowie">&nbsp;Zdrowie&nbsp; </a>
                    </li>
                    <li style="--clr:#dc00d4">
                        <a href="/?action=page5" data-text="&nbsp;Inne">&nbsp;Inne&nbsp;</a>
                    </li>
                </ul>

                </nav>


            </div>
        </div>

        <div class="d-inline-block logo-div">
            <a href="index.php"><img src="images/logo2.png" alt="Logo" class="logo2 col-lg-7 col-md-6 col-4 d-inline mt-lg-0 mt-md-1 mt-3"></a>
        </div>
            
<?php 
if(isset($_POST['wyloguj']))
{
session_destroy();
header('Location: index.php'); 
}
?>
                <div class="float-right przycisk-div">
								<span onclick="otwieranie()" class="przycisk"><img src="images/toogle-icon1.png" class="nakladka-otwieranie"></span>
							</div>
							
							<?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
							<div class="float-right d-none d-md-block wyloguj-div">
								<form method="post">
									<input type="submit" class="logowanie" name="wyloguj" value="Wyloguj" id="wyloguj"></input>
								</form>
							</div>
							<?php else: ?>
							<div class="float-right d-none d-md-block logowanie-div">
								<a href="logowanie.php" class="logowanie">Logowanie</a>
							</div>
							<?php endif; ?>
            
    </div>

    <div class="container_sklep row">

        <div class="lewo_sklep col-3">  

		<div class="sortuj" id="sortuj" name="sortuj" onclick="otwieranie_sortuj()">Sortuj wg: Nazwa, A-Z</div>
		<div class="sortuj_type row col-2" id="sortuj_type" name="sortuj_type">
			<a href="/?action=nazwa_first" class="sortuj_element col-12 ml-3">Nazwa, A-Z</a>
			<a href="/?action=nazwa_last" class="sortuj_element col-12 ml-3">Nazwa, Z-A</a>
			<a href="/?action=cena_low" class="sortuj_element col-12 ml-3">Cena, rosnąco</a>
			<a href="/?action=cena_high" class="sortuj_element col-12 ml-3">Cena, malejąco</a>
			<a href="/?action=available" class="sortuj_element col-12 ml-3">Dostępny</a>
		</div>
			
		<h3 class="filtrowanie">Filtrowanie</h3>
        </div>

        <div class="prawo_sklep col-9 mx-auto">
            <div class="container_produkty row">
                <?php 

                include "config.php";
                $conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

                $wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty");

                while($row = mysqli_fetch_row($wynik))
			{
                echo <<<_END
                <div class="produkty-oferta col-12 col-lg-4"><a href="" class="produkty-oferta-a">
                <div class="produkty-oferty-zdj col-12 mt-4">
                    <img src="$row[5]" alt="$row[4]" class="">
                </div>
                <div class="produkty-oferty-nazwa col-12 mt-3">
                    $row[1]
                </div>
                <div class="produkty-ofery-cena col-12 mt-4">
                    $row[2] PLN
                </div></a>
            </div>
            _END;
			}
                mysqli_close($conn);

                ?>
                


                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>


    </div>





























    <footer>
		<div class="footer">
			<div class="footer-top">
				<div class="footer-top-info mx-auto row">
					<div class="col-3 mx-auto"> <i class="icon-phone"></i> Tel +48 123456789</div>
					<div class="col-3 mx-auto"><i class="icon-mail"></i> Jana Kilińskiego 4, Leszno</div>
					<div class="col-3 mx-auto"><i class="icon-location"></i> Mail@zset.leszno.pl</div>
				</div>
			</div>

			<div class="footer-bottom">


				<div class="footer-info row">
					<div class="footer-info1 col-3 mx-auto"><h2>Fabryka <br>MK-Nutrition</h2>MK-Nutrition Sp. z o. o. to jeden z największych producentów i sprzedawców suplementów diety, odżywek i produktów spożywczych w Polsce. Nasze produkty to sprawdzone składy i najwyższa jakość – stosujemy tylko przebadane składniki o udokumentowanej skuteczności.  </div>

					<div class="footer-info2 col-3 mx-auto"><h2>Praca w <br>MK-Nutrition</h2>MK-Nutrition Sp. z o. o. to jeden z największych producentów i sprzedawców suplementów diety, odżywek i produktów spożywczych w Polsce. Nasze produkty to sprawdzone składy i najwyższa jakość – stosujemy tylko przebadane składniki o udokumentowanej skuteczności.  </div>

					<div class="footer-info3 col-3 mx-auto"><h2>Przydatne<br>MK-Linki</h2>
						<ul>
							<li>O nas</li>
							<li>Kontakt</li>
							<li>Praca</li>
							<li>Współpraca</li>
						</ul> 
					</div>

				</div>

				<div class="sociale">
					<a href="#" class="icon icon--facebook"><i class="icon-facebook"></i></a>
					<a href="#" class="icon icon--instagram"><i class="icon-instagram"></i></a>
					<a href="#" class="icon icon--twitter"><i class="icon-twitter"></i></a>
					<a href="#" class="icon icon--github-circled"><i class="icon-github-circled"></i></a>
				</div>

				<div class="copy">© 2023 All Rights Reserved. MK-Nutrition <br>
				<sub>Made by Mikołaj Przewoźny, Kamil Walkowiak</sub></div>

			</div>
		</div>
	</footer>

	<script>
		$(document).ready(function() {
		var NavY = $('.navb').offset().top;
		 
		var stickyNav = function(){
		var ScrollY = $(window).scrollTop();
			
		
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
		  stickyNav();
		});
		});



		function otwieranie() {
		document.getElementById("przelacznik").style.width = "100%";
		}
		function zamykanie() {
		document.getElementById("przelacznik").style.width = "0%";
		}

		function otwieranie_sortuj() {
			document.getElementById("sortuj_type").style.height = "200px";
			document.getElementById("filtrowanie").style.marginTop = "200px";
		}

		//zamykanie okna sortowanie
		const box = document.querySelector(".sortuj")
		document.addEventListener("click", function(event){
			if (event.target.closest(".sortuj")) return
			document.getElementById("sortuj_type").style.height = "0px";
		})

	</script> 
	<script src="https://skrypt-cookies.pl/id/c6aec89ee9f942b0.js"></script> <!--ciasteczka-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</body>