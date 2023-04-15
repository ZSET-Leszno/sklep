<?php session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<title>MK-Nutrition</title>
	<meta name="description" content="Strona dla twardzieli.">
	<meta name="keywords" content="sterydy, sklep, szybkie efekty">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
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
                    <a href="Wyloguj.php" class="logowanie2">Wyloguj</a>
                <?php else: ?>
                    <a href="logowanie.php" class="logowanie2">Logowanie</a>
                <?php endif; ?>
            </div>

            <p class="nakladka-zamykanie" onclick="zamykanie()">&times;</p>
            <div class="menu">
                <nav>
				<ul>
					<li style="--clr:#00ade1">
						<a href="sklep.php" data-text="&nbsp;Sklep">&nbsp;Sklep&nbsp; </a>
					</li>
					<li style="--clr:#ff6493">
						<a href="index.php#link-onas" data-text="&nbsp;o&nbsp;nas">&nbsp;O nas&nbsp; </a>
					</li>
					<li style="--clr:#ffdd1c">
						<a href="index.php#link-formularz" data-text="&nbsp;Napisz">&nbsp;Napisz&nbsp;</a>
					</li>
					<li style="--clr:#00dc82">
						<a href="regulamin.php" data-text="&nbsp;Regulamin">&nbsp;Regulamin&nbsp; </a>
					</li>
					<?php 
					if($_SESSION['admin'] == true)
					{
						echo <<<_END
						<li style="--clr:#dc00d4">
							<a href="panel.php" data-text="&nbsp;Panel&nbsp;admina">&nbsp;Panel admina&nbsp;</a>
						</li>
						_END;
					}
					?>
                </ul>

                </nav>


            </div>
        </div>

        <div class="d-inline-block logo-div">
            <a href="index.php"><img src="images/logo2.png" alt="Logo" class="logo2 col-lg-7 col-md-6 col-4 d-inline mt-lg-0 mt-md-1 mt-3"></a>
        </div>
            

                <div class="float-right przycisk-div">
					<span onclick="otwieranie()" class="przycisk"><img src="images/toogle-icon1.png" class="nakladka-otwieranie"></span>
				</div>
							
							<?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
							<div class="float-right d-none d-md-block wyloguj-div">
								<a href="wyloguj.php" class="logowanie">Wyloguj</a>
							</div>
							<?php else: ?>
							<div class="float-right d-none d-md-block logowanie-div">
								<a href="logowanie.php" class="logowanie">Logowanie</a>
							</div>
							<?php endif; ?>
            
    	</div>


<main>
	
	<div class="wiersz-top-blur row col-11"></div>
	<div class="wiersz-top row col-11">
		<div class="kolumna1 col-1"><p>ID</p></div>
		<div class="kolumna2 col-3"><p>Nazwa</p></div>
		<div class="kolumna3 col-1"><p>Cena</p></div>
		<div class="kolumna4 col-1"><p>Ilosc</p></div>
		<div class="kolumna5 col-2"><p>Rodzaj</p></div>
		<div class="kolumna61 col-2"><p>Zdjęcie</p></div>
		<div class="edytuj1 col-1"><p>Edytuj</p></div>
		<div class="usun1 col-1"><p>Usuń</p></div>
	</div>
	<div class="tabela">
	<?php

		include "config.php";
		$conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

		$wynik = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty");
		$liczba = mysqli_num_rows($wynik);

		while($row = mysqli_fetch_array($wynik))
		{
			echo <<<_END
			
				<div class="wiersz row mx-auto col-11">
					<div class="kolumna1 col-1"><p>$row[0]</p></div>
					<div class="kolumna2 col-3"><p>$row[1]</p></div>
					<div class="kolumna3 col-1"><p>$row[2]</p></div>
					<div class="kolumna4 col-1"><p>$row[3]</p></div>
					<div class="kolumna5 col-2"><p>$row[4]</p></div>
					<div class="kolumna6 col-2"><p>$row[5]</p></div>
					<div class="edytuj col-1"><img src="images/edit.png"></div>
					<div class="usun col-1"><img src="images/delete1.png" class="usun_img"><img src="images/delete2.png" class="usun_hover"></div>
				</div>
			_END;
			//echo ' <a href="usuwanie.php?id='.$r['id_osoby'].'">DEL</a> ';
		}

		mysqli_close($conn);
	?>
	</div>

</main>


		<footer>
		<div class="footer">
			<div class="footer-top">
				<div class="footer-top-info mx-auto row">
					<div class="col-lg-3 col-12 p-0 mx-auto"> <i class="icon-phone"></i> Tel +48 123456789</div>
					<div class="col-lg-3 col-12 my-4 my-lg-0 p-0 mx-auto"><i class="icon-location"></i> Jana Kilińskiego 4, Leszno</div>
					<div class="col-lg-3 col-12 p-0 mx-auto"><i class="icon-mail"></i> <a href="mailto:m.przewozny@zset.leszno.pl" class="mail">Mail@zset.leszno.pl</a></div>
				</div>
			</div>

			<div class="footer-bottom">


				<div class="footer-info row">
					<div class="footer-info1 col-lg-3 col-12 mx-auto"><h2>Fabryka <br>MK-Nutrition</h2>MK-Nutrition Sp. z o. o. to jeden z największych producentów i sprzedawców suplementów diety, odżywek i produktów spożywczych w Polsce. Nasze produkty to sprawdzone składy i najwyższa jakość – stosujemy tylko przebadane składniki o udokumentowanej skuteczności.  </div>

					<div class="footer-info1 col-lg-3 col-12 mx-auto"><h2>Praca w <br>MK-Nutrition</h2>MK-Nutrition Sp. z o. o. to jeden z największych producentów i sprzedawców suplementów diety, odżywek i produktów spożywczych w Polsce. Nasze produkty to sprawdzone składy i najwyższa jakość – stosujemy tylko przebadane składniki o udokumentowanej skuteczności.  </div>

					<div class="footer-info1 col-lg-3 col-12 mx-auto"><h2>Przydatne<br>MK-Linki</h2>
						<ul>
							<li><a href="index.php#link-onas" onclick="zamykanie()" class="linki_a">O nas</a></li>
							<li><a href="index.php#link-formularz" onclick="zamykanie()" class="linki_a">Napisz</a></li>
							<li><a href="regulamin.php" class="linki_a">Regulamin</a></li>
							<li><a href="mailto:m.przewozny@zset.leszno.pl" class="mail">E-mail</a></li>
						</ul> 
					</div>

				</div>

				<div class="sociale">
					<a href="images/dev.jpeg" class="icon icon--facebook"><i class="icon-facebook"></i></a>
					<a href="images/dev.jpeg" class="icon icon--instagram"><i class="icon-instagram"></i></a>
					<a href="images/dev.jpeg" class="icon icon--twitter"><i class="icon-twitter"></i></a>
					<a href="images/dev.jpeg" class="icon icon--github-circled"><i class="icon-github-circled"></i></a>
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
			document.getElementById("sortuj_type").style.height = "240px";
			document.getElementById("sortuj_type").style.paddingTop = "20px";
			document.getElementById("sortuj_type").style.paddingBottom = "5px";
			document.getElementById("filtrowanie").style.marginTop = "400px";
			$('.strzalka').addClass('d-none'); 
			$('.strzalka').removeClass('d-inline');

			$('.strzalka2').addClass('d-inline'); 
			$('.strzalka2').removeClass('d-none');
		}

		//zamykanie okna sortowanie
		const box = document.querySelector(".sortuj")
		document.addEventListener("click", function(event){
			if (event.target.closest(".sortuj")) return
			document.getElementById("sortuj_type").style.height = "0px";
			document.getElementById("filtrowanie").style.marginTop = "140px";
			document.getElementById("sortuj_type").style.paddingTop = "0px";
			document.getElementById("sortuj_type").style.paddingBottom = "0px";
			$('.strzalka').addClass('d-inline'); 
			$('.strzalka').removeClass('d-none');

			$('.strzalka2').addClass('d-none'); 
			$('.strzalka2').removeClass('d-inline');
		})

		//sortowanie


	</script> 
	<script src="https://skrypt-cookies.pl/id/7aad31f55982c9b8.js"></script> <!--ciasteczka-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</body>