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
                    <a href="logowanie.php" class="logowanie2">Wyloguj</a>
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
					<li style="--clr:#dc00d4">
						<a href="/?action=page5" data-text="&nbsp;Moje&nbsp;Konto">&nbsp;Moje konto&nbsp;</a>
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
header('Location: sklep.php'); 
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
<?php 
if (isset($_GET['nazwa_first'])) {$sortowanie_nazwa="Nazwa, A-Z";}

elseif (isset($_GET['nazwa_last'])) {$sortowanie_nazwa="Nazwa, Z-A";}

elseif (isset($_GET['cena_low'])) {$sortowanie_nazwa="Cena, rosnąco";}

elseif (isset($_GET['cena_high'])) {$sortowanie_nazwa="Cena, malejąco";}

elseif (isset($_GET['navailable'])) {$sortowanie_nazwa="Niedostępne";}

else{$sortowanie_nazwa="Nazwa, A-Z";}
?>
				<div class="sortuj" id="sortuj" name="sortuj" onclick="otwieranie_sortuj()">Sortuj wg: <?php echo "$sortowanie_nazwa";?></div>
				<div class="sortuj_type row col-2" id="sortuj_type" name="sortuj_type">
					<a href="sklep.php?nazwa_first=true" class="sortuj_element col-12 ml-3">Nazwa, A-Z</a>
					<a href="sklep.php?nazwa_last=true" class="sortuj_element col-12 ml-3">Nazwa, Z-A</a>
					<a href="sklep.php?cena_low=true" class="sortuj_element col-12 ml-3">Cena, rosnąco</a>
					<a href="sklep.php?cena_high=true" class="sortuj_element col-12 ml-3">Cena, malejąco</a>
					<a href="sklep.php?navailable=true" class="sortuj_element col-12 ml-3">Niedostępne</a>
				</div>

				<div class="strzalka d-inline">
					<img src="images/strzalka.png">
				</div>

				<div class="strzalka2 d-none">
					<img src="images/strzalka.png">
				</div>
					
				<div class="filtrowanie" id="filtrowanie" name="filtrowanie">Filtrowanie

				<form method="POST" action="">
					<input type="checkbox" id="f_bialko" name="bialko" value="bialko">
					<label for="f_bialko"> Odżywka białkowa</label><br>

					<input type="checkbox" id="f_kreatyna" name="kreatyna" value="kreatyna">
					<label for="f_kreatyna"> Kreatyna</label><br>

					<input type="checkbox" id="f_pwr" name="pwr" value="pwr">
					<label for="f_pwr"> Przedtreningówka</label><br>

					<input type="checkbox" id="f_witaminy" name="witaminy" value="witaminy">
					<label for="f_witaminy"> Witaminy i Minerały</label><br>

					<input type="submit" value="Filtruj" name="filtr_wyslij" id="filtr_wyslij">
				</form>





				</div>
			</div>

			<div class="prawo_sklep col-9 mx-auto">


				<div class="container_produkty row">
					<?php 

					include "config.php";
					$conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

					if(isset($_POST['filtr_wyslij']))
					{
						$bialko = $_POST['bialko'];
						$kreatyna = $_POST['kreatyna'];
						$pwr = $_POST['pwr'];
						$witaminy = $_POST['witaminy'];

						if(empty($bialko) and empty($kreatyna) and empty($pwr) and empty($witaminy))
						{
							$bialko = 'bialko';
							$kreatyna = 'kreatyna';
							$pwr = 'pwr';
							$witaminy = 'witaminy';
						}

					}
					else
						{
							$bialko = 'bialko';
							$kreatyna = 'kreatyna';
							$pwr = 'pwr';
							$witaminy = 'witaminy';
						}
		
					if (isset($_GET['nazwa_first'])) {$wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty WHERE produkt_ilosc>0 and (produkt_rodzaj = '$bialko' or produkt_rodzaj = '$kreatyna' or produkt_rodzaj = '$pwr' or produkt_rodzaj = '$witaminy')ORDER BY produkt_nazwa ASC");}

					elseif (isset($_GET['nazwa_last'])) {$wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty WHERE produkt_ilosc>0 and (produkt_rodzaj = '$bialko' or produkt_rodzaj = '$kreatyna' or produkt_rodzaj = '$pwr' or produkt_rodzaj = '$witaminy') ORDER BY produkt_nazwa DESC");}

					elseif (isset($_GET['cena_low'])) {$wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty WHERE produkt_ilosc>0 and (produkt_rodzaj = '$bialko' or produkt_rodzaj = '$kreatyna' or produkt_rodzaj = '$pwr' or produkt_rodzaj = '$witaminy') ORDER BY produkt_cena ASC");}

					elseif (isset($_GET['cena_high'])) {$wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty WHERE produkt_ilosc>0 and (produkt_rodzaj = '$bialko' or produkt_rodzaj = '$kreatyna' or produkt_rodzaj = '$pwr' or produkt_rodzaj = '$witaminy') ORDER BY produkt_cena DESC");}

					elseif (isset($_GET['navailable'])) {$wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty WHERE produkt_ilosc<=0 and (produkt_rodzaj = '$bialko' or produkt_rodzaj = '$kreatyna' or produkt_rodzaj = '$pwr' or produkt_rodzaj = '$witaminy')");}

					else{$wynik = mysqli_query($conn, "SELECT * FROM MK_Nutrition_produkty WHERE produkt_ilosc>0 and (produkt_rodzaj = '$bialko' or produkt_rodzaj = '$kreatyna' or produkt_rodzaj = '$pwr' or produkt_rodzaj = '$witaminy')  ORDER BY produkt_nazwa ASC ");}
					


					while($row = mysqli_fetch_row($wynik))
					{
						if(isset($_GET['navailable']))
						{
						echo <<<_END
						<div class="produkty-oferta col-12 col-lg-4"><a href="produkt.php?id=$row[0]" class="produkty-oferta-a">
							<div class="produkty-oferty-zdj col-12 mt-4">
								<img src="$row[5]" alt="$row[4]" class="">
							</div>
							<div class="produkty-oferty-nazwa col-12 mt-3">
								$row[1]
							</div>
							<div class="produkty-oferty-ndostepny mt-4">
								NIEDOSTĘPNY
							</div></a>
						</div>
						_END;}

						else
						{
						echo <<<_END
						<div class="produkty-oferta col-12 col-lg-4"><a href="produkt.php?id=$row[0]" class="produkty-oferta-a">
							<div class="produkty-oferty-zdj col-12 mt-4">
								<img src="$row[5]" alt="$row[4]" class="">
							</div>
							<div class="produkty-oferty-nazwa col-12 mt-3">
								$row[1]
							</div>
							<div class="produkty-oferty-cena col-12 mt-4">
								$row[2] PLN
							</div></a>
						</div>
						_END;}
					}

					print_r($wyswietl);
					echo $wyswietl[0];

					mysqli_close($conn);

					?>

                
            	</div>
    		</div>
        


		</div>























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