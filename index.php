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

</head>
<body>

<header>
		<div class="header">
			<div class="tlo">
				<div class="navb">
					<div id="przelacznik" class="menu-nakladka">
						<div class="d-inline d-md-none">
							<a href="" class="logowanie2">Logowanie</a>
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
						<a href="/"><img src="images/logo.png" alt="Logo" class="logo col-lg-7 col-md-6 col-4 d-inline mt-lg-0 mt-md-1 mt-3"></a>
						<a href="/"><img src="images/logo2.png" alt="Logo" class="logo2 col-lg-7 col-md-6 col-4 d-none mt-lg-0 mt-md-1 mt-3"></a>
					</div>
						

							<div class="float-right przycisk-div">
								<span onclick="otwieranie()" class="przycisk"><img src="images/toogle-icon1.png" class="nakladka-otwieranie"></span>
							</div>
							<div class="float-right d-none d-md-block logowanie-div">
								<a href="logowanie.html" class="logowanie">Logowanie</a>
							</div>
					
				</div>
		 	</div>
		</div>

</header>




<main>
	<?php 
	$pageName = $_GET['action'] ?? null;

	?>

	<div class="php">
		<?php if($pageName === 'page1'): ?>
			<h3>strona 1</h3>
		<?php elseif($pageName === 'page2'): ?>
			<h3>strona 2</h3>	
		<?php elseif($pageName === 'page3'): ?>
			<h3>strona 3</h3>
		<?php elseif($pageName === 'page4'): ?>
			<h3>strona 4</h3>
		<?php elseif($pageName === 'page5'): ?>
			<h3>strona 5</h3>
		<?php else: ?>
			
			<div class="blok1">
				<div class="produkty-oferty row">
					<p class="col-12 text-center text-md-left Proponowane">Odżywki białkowe</p>


					<div class="produkty-oferta col-6 col-lg-4 col-xl-2"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="images/bialko1.jpg" alt="bialko" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							KFD Premium WPC 82 700 G
						</div>
						<div class="produkty-ofery-cena col-12 mt-4">
							72,99 PLN
						</div></a>
					</div>


					<div class="produkty-oferta col-12 col-sm-6 col-lg-4 col-xl-2"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="images/bialko1.jpg" alt="bialko" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							KFD Premium WPC 82 700 G
						</div>
						<div class="produkty-ofery-cena col-12 mt-4">
							72,99 PLN
						</div></a>
					</div>

					<div class="produkty-oferta d-none  d-lg-inline-block col-lg-4 col-xl-2"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="images/bialko1.jpg" alt="bialko" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							KFD Premium WPC 82 700 G
						</div>
						<div class="produkty-ofery-cena col-12 mt-4">
							72,99 PLN
						</div></a>
					</div>

					<div class="produkty-oferta  d-none d-xl-inline-block col-xl-2"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="images/bialko1.jpg" alt="bialko" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							KFD Premium WPC 82 700 G
						</div>
						<div class="produkty-ofery-cena col-12 mt-4">
							72,99 PLN
						</div></a>
					</div>

					<div class="produkty-oferta d-none d-xl-inline-block col-xl-2"><a href="" class="produkty-oferta-a">
						<div class="produkty-oferty-zdj col-12 mt-4">
							<img src="images/bialko1.jpg" alt="bialko" class="">
						</div>
						<div class="produkty-oferty-nazwa col-12 mt-3">
							KFD Premium WPC 82 700 G
						</div>
						<div class="produkty-ofery-cena col-12 mt-4">
							72,99 PLN
						</div></a>
					</div>

				</div>
			</div>



			<div class="blok2">
				<form action="order.php" method="post" enctype="multipart/form-data">
						<input type="text" id="imie" name="imie" placeholder="  Imię" required><br>
						<input type="text" id="mail" name="mail" placeholder="  E-Mail" required><br>
						<input type="text" id="tresc" name="tresc" placeholder="  Wiadomość" required><br>
						<input type="submit" value="Wyślij">
				</form>
			</div>

			<div class="blok3"></div>



			<div class="blok4"></div>



			<div class="clear"></div>
		<?php endif; ?>

	</div>















</main>






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
	<script src="https://skrypt-cookies.pl/id/c6aec89ee9f942b0.js"></script> <!--ciasteczka-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>