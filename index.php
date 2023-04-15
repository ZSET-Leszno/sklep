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

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<script src="jquery.scrollTo.min.js"></script>


</head>
<body>


	<header>
		<div class="header">
				<div class="navb">
					<div id="przelacznik" class="menu-nakladka">
						<div class="d-inline d-md-none">
							<?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
								<a href="wyloguj.php" class="logowanie2">Wyloguj</a>
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
								<li style="--clr:#ff6493" >
									<a href="#link-onas" onclick="zamykanie()" data-text="&nbsp;o&nbsp;nas">&nbsp;O nas&nbsp; </a>
								</li>
								<li style="--clr:#ffdd1c">
									<a href="#link-formularz" onclick="zamykanie()" data-text="&nbsp;Napisz">&nbsp;Napisz&nbsp;</a>
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
						<a href="#"><img src="images/logo.png" alt="Logo" class="logo col-lg-7 col-md-6 col-4 d-inline mt-lg-0 mt-md-1 mt-3"></a>
						<a href="#"><img src="images/logo2.png" alt="Logo" class="logo2 col-lg-7 col-md-7 col-7 mt-lg-7 mt-md-0 mt-0 d-inline"></a>
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
	</div>
	<img src="images/tlo.jpg" class="tlo" alt="Skup Samochodów, zadzwoń 723 652 032.">

	</header>




<main>

			<?php 
			$wylosowano = 0;
			$produkty = [];
			for ($i=1; $i<=5; $i++)
			{
				do
				{
					$liczba=rand(2,34); 
					$losowanie_ok=true;
					for ($j=1; $j<=$wylosowano; $j++)
					{
						//czy liczba nie zostala juz wczesniej wylosowana?
						if ($liczba==$produkty[$j]) $losowanie_ok=false;
					}
		   
					if ($losowanie_ok==true)
					{
						//mamy unikatowa liczbe, zapiszmy ja do tablicy
						$wylosowano++;
						$produkty[$wylosowano]=$liczba;
					}
		   
				} while($losowanie_ok!=true);
			}


			include "config.php";
			$conn = mysqli_connect($serwer,$user,$password,$baza) or die ("Odpowiedź: Błąd połączenia z serwerem");

			$wynik1 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty[1]'");
			$wynik2 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty[2]'");
			$wynik3 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty[3]'");
			$wynik4 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty[4]'");
			$wynik5 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty[5]'");

			while($row = mysqli_fetch_row($wynik1))
			{
				$id1 = $row[0];
				$nazwa1 = $row[1];
				$cena1 = $row[2];
				$rodzaj1 = $row[4];
				$zdj1 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik2))
			{
				$id2 = $row[0];
				$nazwa2= $row[1];
				$cena2 = $row[2];
				$rodzaj2 = $row[4];
				$zdj2 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik3))
			{
				$id3 = $row[0];
				$nazwa3= $row[1];
				$cena3 = $row[2];
				$rodzaj3 = $row[4];
				$zdj3 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik4))
			{
				$id4 = $row[0];
				$nazwa4= $row[1];
				$cena4 = $row[2];
				$rodzaj4 = $row[4];
				$zdj4 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik5))
			{
				$id5 = $row[0];
				$nazwa5= $row[1];
				$cena5 = $row[2];
				$rodzaj5 = $row[4];
				$zdj5 = $row[5];
			}

			?>

			<div class="blok1">
				<div class="produkty-oferty row">
					<p class="col-12 text-center text-lg-left Proponowane">Proponowane produkty</p>


			
					<div class="produkty-oferta col-6 col-lg-4 col-xl-2"><a href="produkt.php?id=<?php echo $id1; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj1"; ?>" alt="<?php echo "$rodzaj1"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa1"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena1 PLN"; ?>
						</div></a>
					</div>


					<div class="produkty-oferta col-12 col-sm-6 col-lg-4 col-xl-2"><a href="produkt.php?id=<?php echo $id2; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj2"; ?>" alt="<?php echo "$rodzaj2"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa2"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena2 PLN"; ?>
						</div></a>
					</div>

					<div class="produkty-oferta d-none  d-lg-inline-block col-lg-4 col-xl-2"><a href="produkt.php?id=<?php echo $id3; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj3"; ?>" alt="<?php echo "$rodzaj3"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa3"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena3 PLN"; ?>
						</div></a>
					</div>

					<div class="produkty-oferta  d-none d-xl-inline-block col-xl-2"><a href="produkt.php?id=<?php echo $id4; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj4"; ?>" alt="<?php echo "$rodzaj4"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa4"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena4 PLN"; ?>
						</div></a>
					</div>

					<div class="produkty-oferta d-none d-xl-inline-block col-xl-2"><a href="produkt.php?id=<?php echo $id5; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj5"; ?>" alt="<?php echo "$rodzaj5"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa5"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena5 PLN"; ?>
						</div></a>
					</div>

				</div>
			</div>

			<?php 
			
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
			for ($i=1; $i<=5; $i++)
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

			$wynik6 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[1]'");
			$wynik7 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[2]'");
			$wynik8 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[3]'");
			$wynik9 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[4]'");
			$wynik10 = mysqli_query($conn, "SELECT * From MK_Nutrition_produkty where produkt_id='$produkty2[5]'");

			while($row = mysqli_fetch_row($wynik6))
			{
				$id6 = $row[0];
				$nazwa6 = $row[1];
				$cena6 = $row[2];
				$rodzaj6 = $row[4];
				$zdj6 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik7))
			{
				$id7 = $row[0];
				$nazwa7= $row[1];
				$cena7 = $row[2];
				$rodzaj7 = $row[4];
				$zdj7 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik8))
			{
				$id8 = $row[0];
				$nazwa8= $row[1];
				$cena8= $row[2];
				$rodzaj8 = $row[4];
				$zdj8 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik9))
			{
				$id9 = $row[0];
				$nazwa9= $row[1];
				$cena9 = $row[2];
				$rodzaj9 = $row[4];
				$zdj9 = $row[5];
			}

			while($row = mysqli_fetch_row($wynik10))
			{
				$id10 = $row[0];
				$nazwa10= $row[1];
				$cena10 = $row[2];
				$rodzaj10 = $row[4];
				$zdj10 = $row[5];
			}

			?>
			
			
			


			<div class="blok2">
			<div class="produkty-oferty row">
					<p class="col-12 text-center text-lg-left Proponowane">Proponowana kategoria: <?php echo "$rodzaj_nazwa"; ?></p>


			
					<div class="produkty-oferta col-6 col-lg-4 col-xl-2"><a href="produkt.php?id=<?php echo $id6; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj6"; ?>" alt="<?php echo "$rodzaj6"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa6"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena6 PLN"; ?>
						</div></a>
					</div>


					<div class="produkty-oferta col-12 col-sm-6 col-lg-4 col-xl-2"><a href="produkt.php?id=<?php echo $id7; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj7"; ?>" alt="<?php echo "$rodzaj7"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa7"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena7 PLN"; ?>
						</div></a>
					</div>

					<div class="produkty-oferta d-none  d-lg-inline-block col-lg-4 col-xl-2"><a href="produkt.php?id=<?php echo $id8; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj8"; ?>" alt="<?php echo "$rodzaj8"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa8"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena8 PLN"; ?>
						</div></a>
					</div>

					<div class="produkty-oferta  d-none d-xl-inline-block col-xl-2"><a href="produkt.php?id=<?php echo $id9; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj9"; ?>" alt="<?php echo "$rodzaj9"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa9"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena9 PLN"; ?>
						</div></a>
					</div>

					<div class="produkty-oferta d-none d-xl-inline-block col-xl-2"><a href="produkt.php?id=<?php echo $id10; ?>" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="<?php echo "$zdj10"; ?>" alt="<?php echo "$rodzaj10"; ?>" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							<?php echo "$nazwa10"; ?>
						</div>
						<div class="produkty-oferty-cena col-12 mt-4">
							<?php echo "$cena10 PLN"; ?>
						</div></a>
					</div>

				</div>
			</div>
			<?php mysqli_close($conn);?>
			<h1 id="link-onas"></h1>
			<div class="blok3">
				<div class="bialko">
						<img src="images/bialko.png">
				</div>
				<div class="blok3-lewo">
					<h1>O NAS</h1>
					<p>
						MKNutrition specjalizująca się w produkcji i sprzedaży suplementów diety to firma, która oferuje produkty, które mają uzupełnić braki w składnikach odżywczych w diecie. Staramy się również zapewnić swoim klientom najwyższą jakość swoich produktów poprzez przestrzeganie rygorystycznych standardów jakościowych i bezpieczeństwa.
					</p>
				</div>

				<div class="blok3-prawo">
					<img src="images/tloonas.png">
					<h1 id="link-formularz"></h1>
				</div>
				
				<div class="clear"></div>
			</div>


			<div class="linia"></div>
			<h1></h1>
			<div class="blok4-margines-zewnetrzny">
				<div class="blok4">
					<h1>Masz Jakieś Pytanie?</h1>
					<form class="card-form" action="order.php" method="post" enctype="multipart/form-data">
						<div class="input">
							<input type="text" id="imie" name="imie" class="input-field" required/>
							<label class="input-label">Imię:</label>
						</div>
						<div class="input">
							<input type="text" id="email" name="email" class="input-field" required/>
							<label class="input-label">Email:</label>
						</div>
						<div class="input">
							<input type="text" id="wiadomosc" name="wiadomosc" class="input-field" required/>
							<label class="input-label">Wiadomość:</label>
						</div>
						<div class="formularz-logowanie">
							<button type="submit">Wyślij</button>
						</div>
					</form>
				</div>
			</div>

			<div class="clear"></div>

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
							<li><a href="#link-onas" onclick="zamykanie()" class="linki_a">O nas</a></li>
							<li><a href="#link-formularz" onclick="zamykanie()" class="linki_a">Napisz</a></li>
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
			
		if (ScrollY > NavY) { 
		  $('.navb').addClass('sticky');
		  $('.logo').removeClass('d-inline'); 
		  $('.logo').addClass('d-none');
		  $('.logo2').addClass('d-inline');
		  $('.logo2').removeClass('d-none'); 
		  
		} else {
		  $('.navb').removeClass('sticky'); 
		  $('.logo').addClass('d-inline'); 
		  $('.logo').removeClass('d-none');
		  $('.logo2').removeClass('d-inline');
		  $('.logo2').addClass('d-none');
		}
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
	</script> 
	<script src="https://skrypt-cookies.pl/id/7aad31f55982c9b8.js"></script> <!--ciasteczka-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>