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
header('Location: index.php'); 
}
?>
                <div class="float-right przycisk-div">
                    <span onclick="otwieranie()" class="przycisk"><img src="images/toogle-icon1.png" class="nakladka-otwieranie"></span>
                </div>
                <div class="float-right d-none d-md-block logowanie-div">
                <?php if(!empty($_SESSION['name']) && isset($_SESSION['name'])): ?>
                    <form method="post">
                        <input type="submit" class="logowanie" name="wyloguj" value="Wyloguj" id="wyloguj"></input>
                    </form>
                <?php else: ?>
                    <a href="logowanie.php" class="logowanie">Logowanie</a>
                <?php endif; ?>
                </div>
            
    </div>

    <div class="regulamin">
        <P>
            § 1 Wstęp</br></br>

Niniejszy Regulamin określa ogólne warunki, zasady oraz sposób sprzedaży prowadzonej przez MKNutrition Sp. z o.o. z siedzibą we Wróblowicach, za pośrednictwem sklepu internetowego sklep.kfd.pl (zwanego dalej: „Sklepem Internetowym”) oraz określa zasady i warunki świadczenia przez MKNutrition Sp. z o.o. z siedzibą we Wróblowicach usług nieodpłatnych drogą elektroniczną.
				
</br></br></br>§ 2 Definicje</br></br>

Dni robocze - oznacza dni tygodnia od poniedziałku do piątku z wyłączeniem dni ustawowo wolnych od pracy.
Dostawa - oznacza czynność faktyczną polegającą na dostarczeniu Klientowi przez Sprzedawcę, za pośrednictwem Dostawcy, Towaru określonego w zamówieniu.
Dostawca - oznacza podmiot, z którym współpracuje Sprzedawca w zakresie dokonywania Dostawy Towarów:
firmę kurierską;
InPost Paczkomaty Sp. z o.o. z siedzibą w Krakowie, świadcząca usługi Dostawy i obsługi systemu skrytek pocztowych (Paczkomat) - dotyczy wyłącznie Dostawy na terytorium Rzeczypospolitej Polskiej;
Pocztę Polską S.A. z siedzibą w Warszawie;
Hasło - oznacza ciąg znaków literowych, cyfrowych lub innych wybranych przez Klienta podczas Rejestracji w Sklepie Internetowym, wykorzystywanych w celu zabezpieczenia dostępu do Konta Klienta w Sklepie Internetowym.
Klient - oznacza podmiot, na rzecz którego zgodnie z Regulaminem i przepisami prawa mogą być świadczone usługi drogą elektroniczną lub z którym zawarta może być Umowa sprzedaży.
Konsument - oznacza osobę fizyczną dokonującą z przedsiębiorcą czynności prawnej niezwiązanej bezpośrednio z jej działalnością gospodarczą lub zawodową.
Konto Klienta - oznacza indywidualny dla każdego Klienta panel, uruchomiony na jego rzecz przez Sprzedawcę, po dokonaniu przez Klienta Rejestracji i zawarciu umowy świadczenia usługi Prowadzenie Konta Klienta.
Przedsiębiorca - oznacza osobę fizyczną, osobę prawną lub jednostkę organizacyjną niebędącą osobą prawną, której ustawa przyznaje zdolność prawną, prowadzącą we własnym imieniu działalność gospodarczą lub zawodową i dokonującą czynności prawnej związanej bezpośrednio z jej działalnością gospodarczą lub zawodową.
Regulamin - oznacza niniejszy regulamin.
Rejestracja - oznacza czynność faktyczną dokonaną w sposób określony w Regulaminie, wymaganą dla korzystania przez Klienta ze wszystkich funkcjonalności Sklepu Internetowego.
Sklep Stacjonarny - oznacza miejsce przeznaczone do obsługi Klientów, których lista dostępna jest na Stronie Internetowej Sklepu.
Sprzedawca - oznacza KFD Sp. z o.o. z siedzibą we Wróblowicach (55-330), ul. Innowacyjna 4, NIP: 6312604082, REGON: 241476820, wpisaną do rejestru przedsiębiorców prowadzonego przez Sąd Rejonowy dla m.st. Warszawy w Warszawie, XII Wydział Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS 0000347770, o kapitale zakładowym w wysokości 1.236.000 złotych; będącą jednocześnie właścicielem Sklepu Internetowego.
Strona Internetowa Sklepu - oznacza strony internetowe, pod którymi Sprzedawca prowadzi Sklep Internetowy, działające w subdomenie sklep.kfd.pl.
Towar - oznacza produkt przedstawiony przez Sprzedawcę za pośrednictwem Strony Internetowej Sklepu, mogący być przedmiotem Umowy sprzedaży jak również produkt, który Klient może zarezerwować i następnie zakupić w Sklepie Stacjonarnym.
Trwały nośnik - oznacza materiał lub narzędzie umożliwiające Klientowi lub Sprzedawcy przechowywanie informacji kierowanych osobiście do niego, w sposób umożliwiający dostęp do informacji w przyszłości przez czas odpowiedni do celów, jakim te informacje służą, i które pozwalają na odtworzenie przechowywanych informacji w niezmienionej postaci.
Umowa sprzedaży - oznacza umowę sprzedaży zawartą na odległość, na zasadach określonych w Regulaminie, między Klientem a Sprzedawcą.

</br></br></br>§ 3 Postanowienia ogólne i korzystanie ze Sklepu Internetowego</br></br>

Wszelkie prawa do Sklepu Internetowego, w tym majątkowe prawa autorskie, prawa własności intelektualnej do jego nazwy, jego domeny internetowej, Strony Internetowej Sklepu, a także do wzorców, formularzy, logotypów zamieszczanych na Stronie Internetowej Sklepu (z wyjątkiem logotypów i zdjęć prezentowanych na Stronie Internetowej Sklepu w celach prezentacji towarów, do których to prawa autorskie należą do podmiotów trzecich) należą do Sprzedawcy, a korzystanie z nich może następować wyłącznie w sposób określony i zgodny z Regulaminem oraz za zgodą Sprzedawcy wyrażoną na piśmie.
Sprzedawca dołoży starań, aby korzystanie ze Sklepu Internetowego było możliwe dla użytkowników Internetu z użyciem wszystkich popularnych przeglądarek internetowych, systemów operacyjnych, typów urządzeń oraz typów połączeń internetowych. Minimalne wymagania techniczne umożliwiające korzystanie ze Strony Internetowej Sklepu to przeglądarka internetowa w wersji co najmniej Internet Explorer 11 lub Chrome 66 lub FireFox 60 lub Opera 53 lub Safari 5 lub nowszych, z włączoną obsługą języka Javascript, akceptująca pliki typu „cookies” oraz łącze internetowe o przepustowości co najmniej 256 kbit/s. Strona Internetowa Sklepu jest zoptymalizowana dla minimalnej rozdzielczości ekranu 1024x768 pikseli.
Sprzedawca stosuje mechanizm plików "cookies", które podczas korzystania przez Klientów ze Strony Internetowej Sklepu, zapisywane są przez serwer Sprzedawcy na dysku twardym urządzenia końcowego Klienta. Stosowanie plików "cookies" ma na celu poprawne działanie Strony Internetowej Sklepu na urządzeniach końcowych Klientów. Mechanizm ten nie niszczy urządzenia końcowego Klienta oraz nie powoduje zmian konfiguracyjnych w urządzeniach końcowych Klientów ani w oprogramowaniu zainstalowanym na tych urządzeniach. Każdy Klient może wyłączyć mechanizm „cookies” w przeglądarce internetowej swojego urządzenia końcowego. Sprzedawca wskazuje, że wyłączenie „cookies” może jednak spowodować utrudnienia lub uniemożliwić korzystanie ze Strony Internetowej Sklepu.
W celu złożenia zamówienia w Sklepie Internetowym za pośrednictwem Strony Internetowej Sklepu, w celu dokonania Rezerwacji oraz w celu korzystania z usług świadczonych drogą elektroniczną za pośrednictwem Strony Internetowej Sklepu, konieczne jest posiadanie przez Klienta aktywnego konta poczty elektronicznej.
Zakazane jest dostarczanie przez Klienta treści o charakterze bezprawnym oraz wykorzystywanie przez Klienta Sklepu Internetowego, Strony Internetowej Sklepu lub usług nieodpłatnych świadczonych przez Sprzedawcę, w sposób sprzeczny z prawem, dobrymi obyczajami lub naruszający dobra osobiste osób trzecich.
Sprzedawca oświadcza, iż publiczny charakter sieci Internet i korzystanie z usług świadczonych drogą elektroniczną wiązać może się z zagrożeniem pozyskania i modyfikowania danych Klientów przez osoby nieuprawnione, dlatego Klienci powinni stosować właściwe środki techniczne, które zminimalizują wskazane wyżej zagrożenia. W szczególności powinni stosować programy antywirusowe i chroniące tożsamość korzystających z sieci Internet. Sprzedawca nigdy nie zwraca się do Klienta z prośbą o udostępnienie mu w jakiejkolwiek formie Hasła.
Nie jest dopuszczalne wykorzystywanie zasobów i funkcji Sklepu Internetowego w celu prowadzenia przez Klienta działalności, która naruszałaby interes Sprzedawcy.

</br></br></br>§ 4 Rejestracja</br></br>

W celu utworzenia Konta Klienta, Klient obowiązany jest dokonać nieodpłatnej Rejestracji.
Rejestracja jest konieczna do złożenia zamówienia w Sklepie Internetowym oraz do dokonania Rezerwacji.
W celu Rejestracji, Klient powinien wypełnić formularz rejestracyjny udostępniony przez Sprzedawcę na Stronie Internetowej Sklepu i przesłać wypełniony formularz rejestracyjny drogą elektroniczną do Sprzedawcy poprzez wybór odpowiedniej funkcji znajdującej się w formularzu rejestracyjnym. Podczas Rejestracji Klient ustala indywidualne Hasło.
Klient ma również możliwość dokonania Rejestracji za pośrednictwem swojego konta użytkownika facebook.com. Założenie Konta Klienta odbywa się poprzez dedykowane przekierowanie ze Sklepu Internetowego na stronę internetową facebook.com, gdzie Klient poproszony jest o podanie nazwy użytkownika oraz hasła jakie posiada do konta użytkownika w facebook.com. Po dokonaniu autoryzacji na stronie facebook.com, Klient z powrotem jest przekierowany do Sklepu Internetowego, w którym zakładane jest Konto Klienta, z odnośnikiem do konta użytkownika na facebook.com. Nazwa użytkownika do serwisu facebook.com oraz jego hasło nie są rejestrowane i przechowywane przez Sprzedawcę.
W trakcie wypełniania formularza rejestracyjnego, Klient ma możliwość zapoznania się z Regulaminem, akceptując jego treść poprzez oznaczenie odpowiedniego pola w formularzu.
Po przesłaniu wypełnionego formularza rejestracyjnego Klient otrzymuje niezwłocznie, drogą elektroniczną na adres poczty elektronicznej podany w formularzu rejestracyjnym potwierdzenie Rejestracji przez Sprzedawcę. Z tą chwilą zawarta zostaje umowa o świadczenie drogą elektroniczną usługi Prowadzenie Konta Klienta, zaś Klient uzyskuje możliwość dostępu do Konta Klienta i dokonywania zmian podanych podczas Rejestracji danych.
</br></br></br>§ 5 Zamówienia</br></br>

Informacje zawarte na Stronie Internetowej Sklepu nie stanowią oferty Sprzedawcy w rozumieniu Kodeksu Cywilnego, a jedynie zaproszenie Klientów do składania ofert zawarcia Umowy sprzedaży.
Klient może składać zamówienia w Sklepie Internetowym za pośrednictwem Strony Internetowej Sklepu przez 7 dni w tygodniu, 24 godziny na dobę.
Klient składający zamówienie za pośrednictwem Strony Internetowej Sklepu, kompletuje zamówienie wybierając Towar, którym jest zainteresowany. Dodanie Towaru do zamówienia następuje przez wybór polecenia "DODAJ DO KOSZYKA" pod danym Towarem prezentowanym na Stronie Internetowej Sklepu. Klient po skompletowaniu całości zamówienia i wskazaniu w „KOSZYKU” sposobu Dostawy oraz formy płatności, składa zamówienie przez wysłanie formularza zamówienia do Sprzedawcy, wybierając na Stronie Internetowej Sklepu przycisk „KUPUJĘ I PŁACĘ”. Każdorazowo przed wysyłką zamówienia do Sprzedawcy, Klient jest informowany o łącznej cenie za wybrany Towar i Dostawę, jak też o wszystkich dodatkowych kosztach jakie jest zobowiązany ponieść w związku z Umową sprzedaży.
Złożenie zamówienia stanowi złożenie Sprzedawcy przez Klienta oferty zawarcia Umowy sprzedaży Towarów będących przedmiotem zamówienia.
Po złożeniu zamówienia, Sprzedawca przesyła na podany przez Klienta adres poczty elektronicznej potwierdzenie jego złożenia. Informacja o potwierdzeniu złożenia zamówienia jest oświadczeniem Sprzedawcy o przyjęciu oferty, o której mowa w §6 ust. 4 powyżej i z chwilą jego otrzymania przez Klienta zostaje zawarta Umowa sprzedaży.
Po zawarciu Umowy sprzedaży, Sprzedawca potwierdza Klientowi jej warunki, przesyłając je na Trwałym nośniku na adres poczty elektronicznej Klienta lub pisemnie na wskazany przez Klienta podczas Rejestracji lub składania zamówienia adres.

</br></br></br>§ 6 Płatności</br></br>

Ceny na Stronie Internetowej Sklepu zamieszczone przy danym Towarze stanowią ceny brutto i nie zawierają informacji odnośnie kosztów Dostawy i wszelkich innych kosztów, które Klient będzie zobowiązany ponieść w związku z Umową sprzedaży, o których Klient będzie poinformowany przy wyborze sposobu Dostawy i składaniu zamówienia.
Klient może wybrać następujące formy płatności za zamówione Towary:
przelew bankowy na rachunek bankowy Sprzedawcy (w tym przypadku realizacja zamówienia rozpoczęta zostanie po przesłaniu Klientowi przez Sprzedawcę potwierdzenia przyjęcia zamówienia oraz po wpłynięciu środków na rachunek bankowy Sprzedawcy);
karta płatnicza lub przelew bankowy poprzez zewnętrzny system płatności PayU, obsługiwany przez firmę PayU S.A. z siedzibą w Poznaniu (w tym przypadku realizacja zamówienia rozpoczęta zostanie po przesłaniu Klientowi przez Sprzedawcę potwierdzenia przyjęcia zamówienia oraz po otrzymaniu z systemu PayU informacji o pozytywnym zakończeniu przeprowadzonej płatności);
Klient powinien dokonać płatności za zamówienie w wysokości wynikającej z zawartej Umowy sprzedaży w terminie 7 Dni roboczych, jeżeli wybrał formę przedpłaty.
W wypadku niewywiązania się przez Klienta z płatności w terminie, o którym mowa w §7 ust. 3 Regulaminu, Sprzedawca wyznacza Klientowi dodatkowy termin na dokonanie płatności i informuje o nim Klienta na Trwałym nośniku. Informacja o dodatkowym terminie na dokonanie płatności zawiera również informację, że po bezskutecznym upływie tego terminu, Sprzedawca odstąpi od Umowy sprzedaży. W wypadku bezskutecznego upływu drugiego terminu na dokonanie płatności, Sprzedawca prześle Klientowi na Trwałym nośniku oświadczenie o odstąpieniu od umowy na podstawie art. 491 Kodeksu Cywilnego.
W wypadku niewykonania zobowiązania przez Sprzedawcę lub Klienta w terminie ściśle określonym, wynikającym z zawartej Umowy sprzedaży, strona uprawniona może w razie zwłoki drugiej strony odstąpić od umowy bez wyznaczenia terminu dodatkowego, zgodnie z art. 492 Kodeksu Cywilnego. Odstąpienie od umowy może nastąpić w terminie 3 miesięcy od dnia zawarcia Umowy sprzedaży.

</br></br></br>§ 7 Dostawa</br></br>

Sprzedawca realizuje Dostawę na terytorium Rzeczypospolitej Polskiej, Austrii, Belgii, Bułgarii, Chorwacji, Czech, Danii, Estonii, Finlandii, Francji, Grecji, Hiszpanii, Holandii, Irlandii, Litwy, Luksemburga, Łotwy, Monako, Niemiec, Portugalii, Rumunii, Słowacji, Słowenii, Szwecji, Węgier, Wielkiej Brytanii, Włoch.
Sprzedawca jest zobowiązany dostarczyć Towar będący przedmiotem Umowy sprzedaży bez wad.
Sprzedawca zamieszcza na Stronie Internetowej Sklepu informację o liczbie Dni roboczych potrzebnych do Dostawy i realizacji zamówienia.
Termin Dostawy i realizacji zamówienia wskazany na Stronie Internetowej Sklepu liczony jest w Dniach roboczych zgodnie z §7 ust. 2 Regulaminu.
Zamówione Towary są dostarczane do Klienta za pośrednictwem Dostawcy na adres wskazany w formularzu zamówienia. W przypadku wyboru InPost Paczkomaty Sp. z o.o. z siedzibą w Krakowie jako Dostawcy, adresem Dostawy będzie adres paczkomatu wybranego przez Klienta w momencie składania zamówienia. W przypadku wyboru Ruch S.A. z siedzibą w Warszawie jako Dostawcy, adresem Dostawy będzie adres punktu sprzedaży wybranego przez Klienta w momencie składania zamówienia. W przypadku wyboru opcji dostawy świadczonej przez Dostawcę - DHL Parcel Polska Sp. z o.o.: Odbiór w punkcie DHL Parcel (tj. sklepie Żabka, Inmedio, lub stacji Shell), adresem Dostawy będzie adres sklepu Żabka, Inmedio, lub stacji Shell, wybranego/ ej przez Klienta w momencie składania zamówienia. Opcja dostawy: Odbiór w punkcie DHL Parcel jest możliwa wyłącznie na terytorium Rzeczypospolitej Polskiej.
W dniu wysłania Towaru do Klienta przekazywana jest na adres poczty elektronicznej Klienta informacja potwierdzająca nadanie przesyłki przez Sprzedawcę.
Klient obowiązany jest zbadać doręczoną przesyłkę w czasie i w sposób przyjęty przy przesyłkach danego rodzaju. W razie stwierdzenia ubytku lub uszkodzenia przesyłki Klient ma prawo żądać od pracownika Dostawcy spisania właściwego protokołu.
Sprzedawca, zgodnie z wolą Klienta, dołącza do przesyłki będącej przedmiotem Dostawy paragon albo fakturę VAT obejmującą dostarczane Towary.
W przypadku nieobecności Klienta pod wskazanym przez niego adresem, podanym przy składaniu zamówienia jako adres Dostawy, pracownik Dostawcy pozostawi awizo lub podejmie próbę kontaktu telefonicznego celem ustalenia terminu, w którym Klient będzie obecny. W przypadku zwrotnego odesłania zamówionego Towaru do Sklepu Internetowego przez Dostawcę, Sprzedawca skontaktuje się z Klientem drogą elektroniczną lub telefonicznie, ustalając ponownie z Klientem termin i koszt Dostawy.

</br></br></br>§ 8 Rękojmia</br></br>

Sprzedawca zapewnia Dostawę Towaru pozbawionego wad fizycznych i prawnych. Sprzedawca jest odpowiedzialny względem Klienta, jeżeli Towar ma wadę fizyczną lub prawną (rękojmia).
Jeżeli Towar ma wadę, Klient może:
złożyć oświadczenie o obniżeniu ceny albo odstąpieniu od Umowy sprzedaży, chyba że Sprzedawca niezwłocznie i bez nadmiernych niedogodności dla Klienta wymieni Towar wadliwy na wolny od wad albo wadę usunie. Ograniczenie to nie ma zastosowania, jeżeli Towar był już wymieniony lub naprawiany przez Sprzedawcę albo Sprzedawca nie uczynił zadość obowiązkowi wymiany Towaru na wolny od wad lub usunięcia wad. Klient może zamiast zaproponowanego przez Sprzedawcę usunięcia wady żądać wymiany Towaru na wolny od wad albo zamiast wymiany Towaru żądać usunięcia wady, chyba że doprowadzenie rzeczy do zgodności z umową w sposób wybrany przez Klienta jest niemożliwe albo wymagałoby nadmiernych kosztów w porównaniu ze sposobem proponowanym przez Sprzedawcę. Przy ocenie nadmierności kosztów uwzględnia się wartość Towaru wolnego od wad, rodzaj i znaczenie stwierdzonej wady, a także bierze się pod uwagę niedogodności, na jakie narażałby Klienta inny sposób zaspokojenia.
żądać wymiany Towaru wadliwego na wolny od wad albo usunięcia wady. Sprzedawca jest obowiązany wymienić Towar wadliwy na wolny od wad lub usunąć wadę w rozsądnym czasie bez nadmiernych niedogodności dla Klienta. Sprzedawca może odmówić zadośćuczynienia żądaniu Klienta, jeżeli doprowadzenie do zgodności z Umową sprzedaży Towaru wadliwego w sposób wybrany przez Klienta jest niemożliwe lub w porównaniu z drugim możliwym sposobem doprowadzenia do zgodności z Umową sprzedaży wymagałoby nadmiernych kosztów. Koszty naprawy lub wymiany ponosi Sprzedawca.
Klient, który wykonuje uprawnienia z tytułu rękojmi, jest obowiązany dostarczyć rzecz wadliwą na adres Sprzedawcy. W wypadku Klienta będącego Konsumentem koszt dostarczenia pokrywa Sprzedawca.
Sprzedawca odpowiada z tytułu rękojmi, jeżeli wada fizyczna zostanie stwierdzona przed upływem dwóch lat od wydania Towaru Klientowi. Roszczenie o usunięcie wady lub wymianę Towaru na wolny od wad przedawnia się z upływem roku, lecz termin ten nie może zakończyć się przed upływem terminu określonego w zdaniu pierwszym. W tym terminie Klient może odstąpić od Umowy sprzedaży lub złożyć oświadczenie o obniżeniu ceny z powodu wady Towaru. Jeżeli Klient żądał wymiany Towaru na wolny od wad lub usunięcia wady, termin do odstąpienia od Umowy sprzedaży lub złożenia oświadczenia o obniżeniu ceny rozpoczyna się z chwilą bezskutecznego upływu terminu do wymiany Towaru lub usunięcia wady.
Wszelkie reklamacje związane z Towarem lub realizacją Umowy sprzedaży, Klient może kierować w formie pisemnej na adres Sprzedawcy. 6. Sprzedawca w ciągu 14 dni od dnia żądania zawierającego reklamację, ustosunkuje się do reklamacji Towaru lub reklamacji związanej z realizacją Umowy sprzedaży zgłoszonej przez Klienta.
Klient może zgłosić Sprzedawcy reklamację w związku z korzystaniem z usług nieodpłatnych świadczonych drogą elektroniczną przez Sprzedawcę oraz w związku z Rezerwacją. Reklamacja może być złożona w formie elektronicznej i przesłana przez formularz. W zgłoszeniu reklamacyjnym Klient winien zawrzeć opis zaistniałego problemu. Sprzedawca niezwłocznie, lecz nie później niż w terminie 14 dni rozpatruje reklamacje i udziela Klientowi odpowiedzi.
Sprzedawca nie korzysta z pozasądowego rozwiązywania sporów, o których mowa w ustawie z dnia 23 września 2016 r., o pozasądowym rozwiązywaniu sporów konsumenckich.

</br></br></br>§ 9 Odstąpienie od Umowy sprzedaży zawartej na odległość</br></br>

Klient będący Konsumentem, który zawarł Umowę sprzedaży na odległość, może w terminie 14 dni odstąpić od niej bez podawania przyczyny.
Bieg terminu na odstąpienie od Umowy sprzedaży rozpoczyna się od chwili objęcia Towaru w posiadanie przez Konsumenta. Konsument może odstąpić od Umowy sprzedaży składając Sprzedawcy oświadczenie o odstąpieniu. Oświadczenie to może zostać złożone przykładowo pisemnie na adres Sprzedawcy, za pośrednictwem poczty elektronicznej na adres Sprzedawcy. Oświadczenie można złożyć na formularzu, którego wzór został zamieszczony przez Sprzedawcę na Stronie Internetowej Sklepu pod adresem: Formularz odstąpienia. Do zachowania terminu wystarczy wysłanie oświadczenia przed jego upływem.
W przypadku odstąpienia od Umowy sprzedaży, jest ona uważana za niezawartą.
Jeśli Konsument złożył oświadczenie o odstąpieniu od Umowy sprzedaży zanim Sprzedawca przyjął jego ofertę, oferta przestaje wiązać.
Sprzedawca ma obowiązek niezwłocznie, nie później niż w terminie 14 dni od dnia otrzymania oświadczenia Konsumenta o odstąpieniu od Umowy sprzedaży, zwrócić mu wszystkie dokonane przez niego płatności, w tym koszt Dostawy Towaru do Konsumenta. Sprzedawca może wstrzymać się ze zwrotem płatności otrzymanych od Konsumenta do chwili otrzymania z powrotem Towaru lub dostarczenia przez Konsumenta dowodu odesłania Towaru, w zależności od tego, które zdarzenie nastąpi wcześniej.
Jeżeli Konsument korzystający z prawa do odstąpienia wybrał sposób dostarczenia Towaru inny niż najtańszy zwykły sposób Dostawy oferowany przez Sprzedawcę, Sprzedawca nie jest zobowiązany do zwrotu Konsumentowi poniesionych przez niego dodatkowych kosztów.
Konsument ma obowiązek zwrócić Towar Sprzedawcy niezwłocznie, jednak nie później niż w terminie 14 dni od dnia, w którym odstąpił od Umowy sprzedaży. Do zachowania terminu wystarczy odesłanie Towaru na adres Sprzedawcy przed upływem tego terminu.
W wypadku odstąpienia Klient będący Konsumentem ponosi tylko bezpośrednie koszty zwrotu Towaru.
Jeśli ze względu na swój charakter Towar nie może zostać w zwykłym trybie odesłany pocztą, Sprzedawca informuje Konsumenta o kosztach zwrotu rzeczy na Stronie Internetowej Sklepu.
Konsument ponosi odpowiedzialność za zmniejszenie wartości Towaru będące wynikiem korzystania z niego w sposób wykraczający poza sposób konieczny do stwierdzenia charakteru, cech i funkcjonowania Towaru.
Sprzedawca dokonuje zwrotu płatności przy użyciu takiego samego sposobu zapłaty, jakiego użył Konsument chyba, że Konsument wyraźnie zgodził się na inny sposób zwrotu, który nie wiąże się dla niego z żadnymi kosztami.
Prawo odstąpienia od Umowy sprzedaży nie przysługuje Klientowi będącemu Konsumentem w odniesieniu do umów w których Towarem jest rzecz ulegająca szybkiemu zepsuciu lub mająca krótki termin przydatności do użycia.
Prawo odstąpienia od Umowy sprzedaży nie przysługuje Klientowi będącemu Konsumentem w odniesieniu do umów, w których Towarem jest rzecz dostarczana w zapieczętowanym opakowaniu, której po otwarciu opakowania nie można zwrócić ze względu na ochronę zdrowia lub ze względów higienicznych, jeżeli opakowanie zostało otwarte po dostarczeniu.
Prawo odstąpienia od umowy sprzedaży nie przysługuje Klientowi będącemu Konsumentem w odniesieniu do umów zawartych w Sklepie Stacjonarnym Sprzedawcy, na skutek dokonanej Rezerwacji.

</br></br></br>§ 10 Usługi nieodpłatne</br></br>

Sprzedawca świadczy na rzecz Klientów, drogą elektroniczną usługi nieodpłatne:
Formularz kontaktowy;
Newsletter;
Prowadzenie Konta Klienta;
Zamieszczanie opinii;
Sprawdź dostępność w sklepach stacjonarnych.
Usługi wskazane w §11 ust. 1 powyżej świadczone są 7 dni w tygodniu, 24 godziny na dobę.
Sprzedawca zastrzega sobie możliwość wyboru i zmiany rodzaju, form, czasu oraz sposobu udzielania dostępu do wybranych wymienionych usług, o czym poinformuje Klientów w sposób właściwy dla zmiany Regulaminu.
Usługa Formularz kontaktowy polega na wysłaniu za pomocą formularza umieszczonego na Stronie Internetowej Sklepu wiadomości do Sprzedawcy.
Rezygnacja z usługi nieodpłatnej Formularz kontaktowy, możliwa jest w każdej chwili i polega na zaprzestaniu wysyłania zapytań do Sprzedawcy.
Z usługi Newsletter może skorzystać każdy Klient, który wprowadzi swój adres poczty elektronicznej, wykorzystując w tym celu formularz rejestracyjny udostępniony przez Sprzedawcę na Stronie Internetowej Sklepu. Po przesłaniu wypełnionego formularza rejestracyjnego, Klient otrzymuje niezwłocznie, drogą elektroniczną na adres poczty elektronicznej podany w formularzu rejestracyjnym link aktywacyjny, w celu potwierdzenia zapisania się na subskrypcję Newsletter. Z chwilą aktywacji linku przez Klienta zawarta zostaje umowa o świadczenie drogą elektroniczną usługi Newsletter. Klient może dodatkowo podczas Rejestracji zaznaczyć odpowiednie pole w formularzu rejestracyjnym w celu subskrypcji usługi Newsletter.
Usługa Newsletter polega na przesyłaniu przez Sprzedawcę, na adres poczty elektronicznej, wiadomości w formie elektronicznej zawierającej informacje o nowych produktach lub usługach w ofercie Sprzedawcy. Newsletter przesyłany jest przez Sprzedawcę do wszystkich Klientów, którzy dokonali subskrypcji.
Każdy Newsletter kierowany do danych Klientów zawiera, w szczególności: informację o nadawcy, wypełnione pole „temat”, określające treść przesyłki oraz informację o możliwości i sposobie rezygnacji z usługi nieodpłatnej Newsletter.
Klient może w każdej chwili zrezygnować z otrzymywania Newsletter’a przez wypisanie się z subskrypcji za pośrednictwem odnośnika zamieszczonego w każdej wiadomości elektronicznej wysłanej w ramach usługi Newsletter lub za pośrednictwem dezaktywacji odpowiedniego pola w Koncie Klienta.
Usługa Prowadzenie Konta Klienta dostępna jest po dokonaniu Rejestracji na zasadach opisanych w Regulaminie i polega na udostępnieniu Klientowi dedykowanego panelu w ramach Strony Internetowej Sklepu, umożliwiającego Klientowi modyfikacje danych, które podał podczas Rejestracji, jak też śledzenia stanu realizacji zamówień oraz historii zamówień już zrealizowanych.
Klient, który dokonał Rejestracji może zgłosić żądanie usunięcia Konta Klienta Sprzedawcy, przy czym w przypadku zgłoszenia żądania usunięcia Konta Klienta przez Sprzedawcę, może ono zostać usunięte do 14 dni od zgłoszenia żądania.
Usługa Zamieszczanie opinii polega na umożliwieniu przez Sprzedawcę, Klientom posiadającym Konto Klienta publikacji na Stronie Internetowej Sklepu indywidualnych i subiektywnych wypowiedzi Klienta dotyczących w szczególności Towarów.
Rezygnacja z usługi Zamieszczanie opinii możliwa jest w każdej chwili i polega na zaprzestaniu zamieszczania treści przez Klienta na Stronie Internetowej Sklepu.
Usługa Sprawdź dostępność w sklepach stacjonarnych polega na umożliwieniu Klientom przez Sprzedawcę, sprawdzenie dostępności wybranego Towaru, w Sklepie Stacjonarnym lub Sklepach Stacjonarnych Sprzedawcy, z tym zastrzeżeniem, że sprawdzenie dostępności Towaru następuje na moment skorzystania przez Klienta z przedmiotowej usługi, bez gwarancji niezmienności tej dostępności, w późniejszym czasie.
Rezygnacja z usługi Sprawdź dostępność w sklepach stacjonarnych możliwa jest w każdej chwili i polega na zaprzestaniu sprawdzania dostępności wybranego Towaru, w Sklepie Stacjonarnym lub Sklepach Stacjonarnych Sprzedawcy.
Sprzedawca jest uprawniony do zablokowania dostępu do Konta Klienta i usług nieodpłatnych, w przypadku działania przez Klienta na szkodę Sprzedawcy lub innych Klientów, naruszenia przez Klienta przepisów prawa lub postanowień Regulaminu, a także, gdy zablokowanie dostępu do Konta Klienta i usług nieodpłatnych jest uzasadnione względami bezpieczeństwa - w szczególności: przełamywaniem przez Klienta zabezpieczeń Strony Internetowej Sklepu lub innymi działaniami hakerskimi. Zablokowanie dostępu do Konta Klienta i usług nieodpłatnych z wymienionych przyczyn trwa przez okres niezbędny do rozwiązania kwestii stanowiącej podstawę zablokowania dostępu do Konta Klienta i usług nieodpłatnych. Sprzedawca zawiadamia Klienta o zablokowaniu dostępu do Konta Klienta i usług nieodpłatnych drogą elektroniczną na adres podany przez Klienta w formularzu rejestracyjnym.

</br></br></br>§ 11 Odpowiedzialność Klienta w zakresie zamieszczanych przez niego treści</br></br>

Zamieszczając treści oraz udostępniając je Klient dokonuje dobrowolnego rozpowszechniania treści. Zamieszczane treści nie wyrażają poglądów Sprzedawcy i nie powinny być utożsamiane z jego działalnością. Sprzedawca nie jest dostawcą treści, a jedynie podmiotem, który zapewnia w tym celu odpowiednie zasoby teleinformatyczne.
Klient oświadcza, że:
jest uprawniony do korzystania z autorskich praw majątkowych, praw własności przemysłowej i/lub praw pokrewnych do – odpowiednio - utworów, przedmiotów praw własności przemysłowej (np. znaki towarowe) i/lub przedmiotów praw pokrewnych, które składają się na treści;
umieszczenie oraz udostępnienie w ramach usług, o których mowa w §11 Regulaminu, danych osobowych, wizerunku oraz informacji dotyczących osób trzecich nastąpiło w sposób legalny, dobrowolny oraz za zgodą osób, których one dotyczą;
wyraża zgodę na wgląd do opublikowanych treści przez innych Klientów oraz Sprzedawcę, jak również upoważnia Sprzedawcę do ich wykorzystania nieodpłatnie zgodnie z postanowieniami niniejszego Regulaminu;
wyraża zgodę na dokonywanie opracowań utworów w rozumieniu Ustawy o prawie autorskim i prawach pokrewnych.
Klient nie jest uprawniony do:
zamieszczania w ramach korzystania z usług, o których mowa w §11 Regulaminu, danych osobowych osób trzecich oraz rozpowszechniania wizerunku osób trzecich bez wymaganego prawem zezwolenia lub zgody osoby trzeciej;
zamieszczania w ramach korzystania z usług, o których mowa w §11 Regulaminu, treści o charakterze reklamowym i/lub promocyjnym.
Sprzedawca ponosi odpowiedzialność za zamieszczane przez Klientów treści pod warunkiem otrzymania powiadomienia zgodnie z §13 Regulaminu.
Zabronione jest zamieszczanie przez Klientów w ramach korzystania z usług, o których mowa w §11 Regulaminu, treści które mogłyby w szczególności:
zostać zamieszczane w złej wierze, np. z zamiarem naruszenia dóbr osobistych osób trzecich;
naruszać jakiekolwiek prawa osób trzecich, w tym prawa związane z ochroną praw autorskich i praw pokrewnych, ochroną praw własności przemysłowej, tajemnicą przedsiębiorstwa lub mające związek ze zobowiązaniami o zachowaniu poufności;
posiadać charakter obraźliwy bądź stanowić groźbę skierowaną do innych osób, zawierałyby słownictwo naruszające dobre obyczaje (np. poprzez użycie wulgaryzmów lub określeń powszechnie uznawanych za obraźliwe);
pozostawać w sprzeczności z interesem Sprzedawcy;
naruszać w inny sposób postanowienia Regulaminu, dobre obyczaje, przepisy obowiązującego prawa, normy społeczne lub obyczajowe.
W przypadku gdy zamieszczane przez klienta treści, byłyby zabronione (zgodnie z §12 ust. 3 lub §12 ust. 5) lub w przypadku otrzymania powiadomienia zgodnie z §13 Regulaminu, Sprzedawca zastrzega sobie prawo do niezamieszczania, modyfikowania lub usuwania treści zamieszczanych przez Klientów w ramach korzystania przez nich z usług, o których mowa w §11 Regulaminu, w szczególności w odniesieniu do treści, co do których, opierając się na doniesieniach osób trzecich lub odpowiednich organów, stwierdzono, że mogą one stanowić naruszenie niniejszego Regulaminu lub obowiązujących przepisów prawa. Sprzedawca nie prowadzi bieżącej kontroli zamieszczanych treści.
Klient wyraża zgodę na nieodpłatne wykorzystywanie przez Sprzedawcę umieszczonych przez niego treści w ramach Strony Internetowej Sklepu.

</br></br></br>§ 12 Zgłaszanie zagrożenia lub naruszenia praw</br></br>

W przypadku, gdy Klient lub inna osoba lub podmiot uzna, iż treść publikowana na Stronie Internetowej Sklepu narusza ich prawa, dobra osobiste, dobre obyczaje, uczucia, moralność, przekonania, zasady uczciwej konkurencji, know-how, tajemnicę chronioną prawem lub na podstawie zobowiązania, może powiadomić Sprzedawcę o potencjalnym naruszeniu.
Sprzedawca powiadomiony o potencjalnym naruszeniu, podejmuje niezwłoczne działania mające na celu usunięcie ze Strony Internetowej Sklepu, treści będących przyczyną naruszenia.

</br></br></br>§ 13 Ochrona danych osobowych</br></br>

Administratorem danych osobowych Klientów przekazanych Sprzedawcy dobrowolnie w ramach Rejestracji, składania zamówienia jednorazowego, Rezerwacji oraz w ramach świadczenia przez Sprzedawcę usług drogą elektroniczną lub w ramach innych okoliczności określonych w Regulaminie, jest Sprzedawca.
Sprzedawca przetwarza dane osobowe Klientów w celu realizacji zamówień, dokonywania Rezerwacji, świadczenia przez Sprzedawcę usług drogą elektroniczną oraz innych celów określonych w Regulaminie. Dane są przetwarzane wyłącznie na podstawie przepisów prawa lub zgody wyrażonej przez Klienta zgodnie z obowiązującymi przepisami prawa.
Klient przekazuje swoje dane osobowe Sprzedawcy dobrowolnie, z tym jednak zastrzeżeniem, że niepodanie określonych danych w procesie Rejestracji uniemożliwia Rejestrację i założenie Konta Klienta oraz uniemożliwia złożenie i realizację zamówienia Klienta, a także dokonanie Rezerwacji, w przypadku składania zamówienia lub dokonywania Rezerwacji bez Rejestracji Konta Klienta.
Każdy kto przekaże Sprzedawcy swoje dane osobowe, ma prawo dostępu do ich treści oraz do ich poprawiania lub żądania ich usunięcia, a w przypadkach przewidzianych przepisami prawa żądania zaprzestania przetwarzania jego danych osobowych.
Sprzedawca zapewnia możliwość usunięcia danych osobowych z prowadzonego zbioru, w szczególności w przypadku usunięcia Konta Klienta. Sprzedawca może odmówić usunięcia danych osobowych, jeżeli Klient nie uregulował wszystkich należności wobec Sprzedawcy lub naruszył obowiązujące przepisy prawa, a zachowanie danych osobowych jest niezbędne do wyjaśnienia tych okoliczności i ustalenia odpowiedzialności Klienta.
Sprzedawca chroni przekazane mu dane osobowe oraz dokłada wszelkich starań w celu zabezpieczenia ich przed nieuprawnionym dostępem lub wykorzystaniem przez osoby nieupoważnione.
Sprzedawca przekazuje dane osobowe Klienta Dostawcy w zakresie niezbędnym do realizacji Dostawy.
W przypadku, gdy Klient wybierze płatność poprzez system PayU, jego dane osobowe są przekazywane w zakresie niezbędnym dla realizacji płatności spółce PayU S.A. z siedzibą w Poznaniu (60-166), przy ul. Grunwaldzkiej 182, wpisanej do rejestru przedsiębiorców prowadzonego przez Sąd Rejonowy Poznań - Nowe Miasto i Wilda w Poznaniu, Wydział VIII Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS 0000274399.

</br></br></br>§ 14 Rozwiązanie umowy (nie dotyczy Umów sprzedaży)</br></br>

Zarówno Klient, jak i Sprzedawca mogą rozwiązać umowę o świadczenie usług drogą elektroniczną w każdym czasie i bez podania przyczyn, z zastrzeżeniem zachowania praw nabytych przez drugą stronę przed rozwiązaniem ww. umowy oraz postanowień poniżej.
Klient, który dokonał Rejestracji rozwiązuje umowę o świadczenie usług drogą elektroniczną, poprzez wysłanie do Sprzedawcy stosownego oświadczenia woli, przy użyciu dowolnego środka komunikacji na odległość, umożliwiającego zapoznanie się Sprzedawcy z oświadczeniem woli Klienta.
Sprzedawca wypowiada umowę o świadczenie usług drogą elektroniczną poprzez wysłanie do Klienta stosownego oświadczenia woli na adres poczty elektronicznej podany przez Klienta podczas Rejestracji.

</br></br></br>§ 15 Postanowienia końcowe</br></br>

Sprzedawca ponosi odpowiedzialność z tytułu niewykonania lub nienależytego wykonania umowy, lecz w przypadku umów zawieranych z Klientami będącymi Przedsiębiorcami Sprzedawca ponosi odpowiedzialność tylko w przypadku umyślnego wyrządzenia szkody i w granicach rzeczywiście poniesionych strat przez Klienta będącego Przedsiębiorcą.
Treść niniejszego Regulaminu może zostać utrwalona poprzez wydrukowanie, zapisanie na nośniku lub pobranie w każdej chwili ze Strony Internetowej Sklepu.
W przypadku powstania sporu na gruncie zawartej Umowy sprzedaży, strony będą dążyły do rozwiązania sprawy polubownie. Prawem właściwym dla rozstrzygania wszelkich sporów powstałych na gruncie niniejszego Regulaminu jest prawo polskie.
Sprzedawca informuje Klienta będącego Konsumentem o możliwości skorzystania z pozasądowych sposobów rozpatrywania reklamacji i dochodzenia roszczeń. Zasady dostępu do tych procedur dostępne są w siedzibach lub na stronach internetowych podmiotów uprawnionych do pozasądowego rozpatrywania sporów. Mogą nimi być w szczególności rzecznicy praw konsumenta lub Wojewódzkie Inspektoraty Inspekcji Handlowej, których lista jest dostępna na stronie internetowej Urzędu Ochrony Konkurencji i Konsumentów. Sprzedawca informuje, że pod adresem http://ec.europa.eu/consumers/odr/ dostępna jest platforma internetowego systemu rozstrzygania sporów pomiędzy konsumentami i przedsiębiorcami na szczeblu unijnym (platforma ODR).
Sprzedawca zastrzega sobie prawo zmiany niniejszego Regulaminu. Wszystkie zamówienia przyjęte przez Sprzedawcę do realizacji przed dniem wejścia w życie nowego Regulaminu są realizowane na podstawie Regulaminu, który obowiązywał w dniu składania zamówienia przez Klienta. Zmiana Regulaminu wchodzi w życie w terminie 7 dni od dnia opublikowania na Stronie Internetowej Sklepu. Sprzedawca poinformuje Klienta na 7 dni przed wejściem w życie nowego Regulaminu o zmianie Regulaminu za pomocą wiadomości przesłanej drogą elektroniczną zawierającej odnośnik do tekstu zmienionego Regulaminu. W razie, gdy Klient nie akceptuje nowej treści Regulaminu obowiązany jest zawiadomić o tym fakcie Sprzedawcę, co skutkuje rozwiązaniem umowy zgodnie z postanowieniami §15 Regulaminu.
Umowy ze Sprzedawcą zawierane są w języku polskim.
Regulamin wchodzi w życie z dniem 25.07.2018 r.



        </P>
    </div>



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
	</script> 

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</body>