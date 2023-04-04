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
                <!--<?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
                    <a href="logowanie.php" class="logowanie2">Wyloguj</a>
                <?php else: ?>-->
                    <a href="logowanie.php" class="logowanie2">Logowanie</a>
               <!-- <?php endif; ?>-->
            </div>

            <a href="#" class="nakladka-zamykanie" onclick="zamykanie()">&times;</a>
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
 <!--         
<?php 
if(isset($_POST['wyloguj']))
{
session_destroy();
header('Location: sklep.php'); 
}
?>-->  
                <div class="float-right przycisk-div">
								<span onclick="otwieranie()" class="przycisk"><img src="images/toogle-icon1.png" class="nakladka-otwieranie"></span>
							</div>
							
						<!--	<?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
							<div class="float-right d-none d-md-block wyloguj-div">
								<form method="post">
									<input type="submit" class="logowanie" name="wyloguj" value="Wyloguj" id="wyloguj"></input>
								</form>
							</div>
							<?php else: ?>-->
							<div class="float-right d-none d-md-block logowanie-div">
								<a href="logowanie.php" class="logowanie">Logowanie</a>
							</div>
						<!--	<?php endif; ?>-->
            
                </div>

		<?php 
			include "config.php";
			$conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");
			
			$rodzaj = rand(1,4);

			if($rodzaj == 1)
			{
				$od = 2;
				$do = 8;
				$rodzaj_nazwa = 'Białko';
			}
			elseif($rodzaj == 2)
			{
				$od = 9;
				$do = 13;
				$rodzaj_nazwa = 'Kreatyna';
			}
			elseif($rodzaj == 3)
			{
				$od = 14;
				$do = 18;
				$rodzaj_nazwa = 'PWR';
			}
			elseif($rodzaj == 4)
			{
				$od = 19;
				$do = 34;
				$rodzaj_nazwa = 'Witaminy';
			}

			$wylosowano = 0;
			$produkty2 = [];
			for ($i=1; $i<=3; $i++)
			{
				do
				{
					$liczba=rand($od,$do);
					$losowanie_ok=true;
					for ($j=1; $j<=$wylosowano; $j++)
					{
						//czy liczba nie zostala juz wczesniej wylosowana?
						if ($liczba==$produkty2[$j]) $losowanie_ok=false;
					}
		   
					if ($losowanie_ok==true)
					{
						//mamy unikatowa liczbe, zapiszmy ja do tablicy
						$wylosowano++;
						$produkty2[$wylosowano]=$liczba;
					}
		   
				} while($losowanie_ok!=true);
			}

			$wynik11 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[1]'");
			$wynik12 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[2]'");
			$wynik13 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[3]'");

			while($row = mysqli_fetch_row($wynik11))
			{
				$nazwa11 = $row[1];
				$cena11 = $row[2];
				$rodzaj11 = $row[4];
				$zdj11 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik12))
			{
				$nazwa12= $row[1];
				$cena12 = $row[2];
				$rodzaj12 = $row[4];
				$zdj12 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik13))
			{
				$nazwa13= $row[1];
				$cena13= $row[2];
				$rodzaj13 = $row[4];
				$zdj13 = $row[5];
			}
			mysqli_close($conn);
			?>
<main>
	<div class="produkt_top row col-12 col-lg-10 col-xl-8 mx-auto">
		<div class="produkt_zdj col-sm-12 col-md-6"><img src="https://sklep.kfd.pl/12054-medium_default/trec-whey-100-900g.jpg" alt="bialko"></div>

		<div class="produkt_top_right col-sm-12 col-md-6 mx-auto">
			<div class="produkt_info mx-auto row col-12">
				<div class="produkt_nazwa col-12">KFD Premium WPC 82 - 700 g - Białko (WPC 80)</div>
				<div class="produkt_cena col-12">65.99 PLN</div>
				<div class="produkt_dostawa col-12">dostawa</div>
				<form action="" class="produkt_right_bottom row col-12">
					<input type="number" value="1" min="1" class="produkt_number">
					<input type="submit" value="Dodaj do koszyka" class="produkt_submit">
				</form>
			</div>
		</div>

		<div class="proponowane col-12 col-md-9 mx-auto row">

					<div class="podstrona-proponowane col-3"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj11"; ?>" alt="<?php echo "$rodzaj11"; ?>" class="">
						</div></a>
					</div>

					<div class="podstrona-proponowane col-3"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj12"; ?>" alt="<?php echo "$rodzaj12"; ?>" class="">
						</div></a>
					</div>

					<div class="podstrona-proponowane col-3"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj13"; ?>" alt="<?php echo "$rodzaj13"; ?>" class="">
						</div></a>
					</div>

		</div>

	</div>
	
	<div class="produkt_bottom col-12 col-lg-10 col-xl-8 mx-auto">
		<div class="produkt_bottom_opis"><p>Opis</p></div>
		<br>
		<p>
		<strong>MK Premium WPC 82 - 900 g to powiększona wersja produktu o gramaturze 700 g</strong>
		(może się jeszcze zdarzyć z nalepką z informacją że to gramatura + 200 g, jeśli opakowanie nosi oznaczenie 700 g). Produkt to wysokiej jakości, instantyzowany i w 100% czysty koncentrat białka serwatkowego użyty jako główny składnik produktu.	
		</p>

		<p>Produkt wyróżnia się doskonałą kompozycją smakową (w opcji promocyjnej wybrane smaki z naszej bogatej oferty, pozostałe smaki są tutaj (w opcji 700 g)</p>
		<p>Używany przez nas surowiec jest instantyzowany / aglomeryzowany - to znaczy, że charakteryzuje się doskonałą rozpuszczalnością, a po przygotowaniu nie powstaje uporczywa piana.</p>
	
		<br>
		<p><strong>Atuty:</strong><br>
		• Produkt firmy MK otrzymywany jest przy użyciu procesu ultrafiltracji, w którym tłuszcze oraz cukry są efektywniej separowane od białek, przez co otrzymany produkt wykazuje wyższą czystość. <br>
		• Pozbawiony jest również aspartamu i innych uważanych za kontrowersyjne - dodatków jak wypełniacze w tym sztuczne "substancje barwiące". <br>
		• Wg opinii wielu klientów, zaletą produktu jest brak białek pochodzenia roślinnego - m.in. soi, pszenicy (znanej jako peptyd l-glutaminy), ryżu lub innych - mniej wartościowych - dodatków. <br>
		• Cechuje się także wysoką zawartością BCAA (aminokwasów rozgałęzionych). <br>
		• Nasz produkt nie zawiera enzymów trawiennych, które, stosowane głównie w produktach amerykańskich, mogą służyć jako element maskujący niskiej jakości surowiec, zawierający ogromne (jak na preparat dla ludzi) dawki laktozy (cukier mleczny). <br>
		• Koncentrat serwatki to białko szybko wchłanialne. Dzięki temu może być idealnym uzupełnieniem diety każdego entuzjasty sportu. <br>
		</p>

		<br>
		<p><strong>UWAGA!</strong><br> 
		Warto zwrócić uwagę, że jest to produkt o zawartości ok. 80% białka w suchej masie, więc smaki, pomimo naszych najszczerszych starań, nie będą smakować identycznie jak znane produkty spożywcze zawierające ok. 99% tłuszczu i cukru w składzie. Staramy się robić wszystko, aby produkt wysokobiałkowy był możliwe jak najlepszy w smaku przy zachowaniu najwyższej zawartości białka. W przeciwieństwie do innych firm, które psują jakość produktów, obniżając udział białka nawet o 20-30%, zastępując je np. glicyną lub cukrem, priorytetem dla nas jest wysoka przyswajalność i koncentracja składników aktywnych.
		</p>
	</div>
</main>













	<footer>
		<div class="footer">
			<div class="footer-top">
				<div class="footer-top-info mx-auto row">
					<div class="col-3 mx-auto"> <i class="icon-phone"></i> Tel +48 123456789</div>
					<div class="col-3 mx-auto"><i class="icon-location"></i> Jana Kilińskiego 4, Leszno</div>
					<div class="col-3 mx-auto"><i class="icon-mail"></i> <a href="mailto:m.przewozny@zset.leszno.pl" class="mail">Mail@zset.leszno.pl</a></div>
				</div>
			</div>

			<div class="footer-bottom">


				<div class="footer-info row">
					<div class="footer-info1 col-3 mx-auto"><h2>Fabryka <br>MK-Nutrition</h2>MK-Nutrition Sp. z o. o. to jeden z największych producentów i sprzedawców suplementów diety, odżywek i produktów spożywczych w Polsce. Nasze produkty to sprawdzone składy i najwyższa jakość – stosujemy tylko przebadane składniki o udokumentowanej skuteczności.  </div>

					<div class="footer-info2 col-3 mx-auto"><h2>Praca w <br>MK-Nutrition</h2>MK-Nutrition Sp. z o. o. to jeden z największych producentów i sprzedawców suplementów diety, odżywek i produktów spożywczych w Polsce. Nasze produkty to sprawdzone składy i najwyższa jakość – stosujemy tylko przebadane składniki o udokumentowanej skuteczności.  </div>

					<div class="footer-info3 col-3 mx-auto"><h2>Przydatne<br>MK-Linki</h2>
						<ul>
							<li><a href="index.php#link-onas" onclick="zamykanie()" class="linki_a">O nas</a></li>
							<li><a href="index.php#link-formularz" onclick="zamykanie()" class="linki_a">Napisz</a></li>
							<li><a href="regulamin.php" class="linki_a">Regulamin</a></li>
							<li><a href="mailto:m.przewozny@zset.leszno.pl" class="mail">E-mail</a></li>
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
			document.getElementById("sortuj_type").style.height = "240px";
			document.getElementById("sortuj_type").style.paddingTop = "20px";
			document.getElementById("sortuj_type").style.paddingBottom = "5px";
			document.getElementById("filtrowanie").style.marginTop = "340px";
		}

		//zamykanie okna sortowanie
		const box = document.querySelector(".sortuj")
		document.addEventListener("click", function(event){
			if (event.target.closest(".sortuj")) return
			document.getElementById("sortuj_type").style.height = "0px";
			document.getElementById("filtrowanie").style.marginTop = "120px";
			document.getElementById("sortuj_type").style.paddingTop = "0px";
			document.getElementById("sortuj_type").style.paddingBottom = "0px";
		})

		//sortowanie


	</script> 
	<script src="https://skrypt-cookies.pl/id/c6aec89ee9f942b0.js"></script> <!--ciasteczka-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</body>