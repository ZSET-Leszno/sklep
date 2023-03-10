<?php


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start();

$imie = htmlspecialchars($_POST['imie'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$wiadomosc = htmlspecialchars($_POST['wiadomosc'], ENT_QUOTES, 'UTF-8');

if(!empty($imie) && !empty($email) && !empty($wiadomosc)) {
	$mail = new PHPMailer(true);
	try {
		$mail->setFrom("miki.przewo@gmail.com", "Formularz MKNutrition");
		$mail->addAddress("miki.przewo@gmail.com"); 
		$mail->isHTML(true);
		$mail->Subject = 'Formularz MKNutrition';
		$mail->Body = '<h1>Przesłane Zapytanie:</h1><strong>Imię:</strong> '.$imie.'<br><strong>Email:</strong> '.$email.'<br><strong>Wiadomość:</strong> '.$wiadomosc;
		$mail->send();
		echo 'Poprawnie Wysłano Formularz. Zaraz zostaniesz przeniesony na stronę!';
		header("Location: index.html");
	} catch (Exception $e) {
		echo 'Błąd serwera! ( '.$e.' )';
		header("Location: index.html");
	}
} else {
	echo 'Wystąpił problem z wysłaniem maila. Zaraz zostaniesz przeniesony na stronę i spróbuj ponownie!';
	header("Location: index.html");
}
?>