<?php
/**
*
* help_bbcode [Polski]
*
* @package language
* @version $Id: help_bbcode.php 9623 2009-10-20 LEW21 $
* @copyright (c) 2006 - 2009 phpBB3.PL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// INFORMACJA
//
// Wszystkie pliki językowe powinny używać kodowania UTF-8 i nie powinny zawierać znaku BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Wprowadzenie'
	),
	array(
		0 => 'Czym jest BBCode?',
		1 => 'BBCode jest specjalną implementacją HTML-a, a możliwość jego używania jest uzależniona od ustawień wybranych przez administratora. Jeśli chcesz, możesz wyłączyć go w niektórych postach, zaznaczając opcję Wyłącz BBCode przy ich wysyłaniu. Znaczniki BBCode są zamknięte w nawiasach kwadratowych - [ i ], a nie w trójkątnych - &lt; i &gt;, oraz oferują większą kontrolę nad tym co i jak będzie wyświetlane. Zależnie od szablonu, którego używasz, możesz w bardzo łatwy sposób dodawać znaczniki BBCode do postów poprzez odpowiednie przyciski na stronie wysyłania postu. Mimo to ten przewodnik może Ci się przydać.
		<style type="text/css">
		<!--
			html>body code {font-size: 1.4em; line-height: normal;}
			.faq-block {display: block; margin-top: 10px; margin-bottom: 10px;}
		-->
		</style>' // Przepraszam wszystkich miłośników standardów za wstawianie tego tutaj, ale inaczej się nie dało (szczególnie w tym pierwszym przypadku).
	),
	array(
		0 => '--',
		1 => 'Formatowanie tekstu'
	),
	array(
		0 => 'Jak wpisać pogrubiony, pochylony lub podkreślony tekst?',
		1 => 'BBCode zawiera znaczniki pozwalające na szybką zmianę podstawowego wyglądu tekstu. Można to uzyskać na poniższe sposoby:<ul>
			<li>Aby pogrubić jakiś tekst, wstaw go pomiędzy znaczniki <code><strong>[b]</strong></code> i <code><strong>[/b]</strong></code>. Przykładowo, kod <code><strong>[b]</strong>Tekst<strong>[/b]</strong></code> zmieni się w <span style="font-weight: bold;">Tekst</span></li>
			<li>Aby pochylić jakiś tekst, wstaw go pomiędzy znaczniki <code><strong>[i]</strong></code> i <code><strong>[/i]</strong></code>. Przykładowo, kod <code><strong>[i]</strong>Tekst<strong>[/i]</strong></code> zmieni się w <span style="font-style: italic;">Tekst</span></li>
			<li>Aby podkreślić jakiś tekst, wstaw go pomiędzy znaczniki <code><strong>[u]</strong></code> i <code><strong>[/u]</strong></code>. Przykładowo, kod <code><strong>[u]</strong>Tekst<strong>[/u]</strong></code> zmieni się w <span style="text-decoration: underline;">Tekst</span></li>
		</ul>'
	),
	array(
		0 => 'Jak zmienić kolor lub rozmiar tekstu?',
		1 => 'Aby zmienić kolor lub rozmiar tekstu, można użyć znaczników wymienionych poniżej. Pamiętaj, że to, jaki będzie rezultat po wyświetleniu, zależy od przeglądarki i systemu użytkownika.<ul>
			<li>Zmianę koloru tekstu można osiągnąć przez otoczenie go znacznikami <code><strong>[color=]</strong></code> i <code><strong>[/color]</strong></code>. Po znaku = powinieneś podać angielską nazwę koloru (np. red, blue, yellow) albo szesnastkową wartość (np. #FFFFFF, #000000). Przykładowo, żeby osiągnąć <span style="color: red;">czerwony tekst</span> powinieneś użyć kodu <code><strong>[color=</strong>red<strong>]</strong>czerwony tekst<strong>[/color]</strong></code> albo <code><strong>[color=</strong>#FF0000<strong>]</strong>czerwony tekst<strong>[/color]</strong></code></li>
			<li>Zmianę rozmiaru tekstu można osiagnąć przez otoczenie go znacznikami <code><strong>[size=]</strong></code> i <code><strong>[/size]</strong></code>. Ten znacznik jest zależny od szablonu, którego używasz, ale zalecanym formatem jest liczba reprezentująca rozmiar tekstu w procentach, zaczynając od 20 (bardzo mały) aż do 200 (bardzo duży). Przykładowo, żeby osiągnąć <span style="font-size: 30%; line-height: normal">mały tekst</span> powinieneś użyć kodu <code><strong>[size=</strong>30<strong>]</strong>mały tekst<strong>[/size]</strong></code></li>
		</ul>'
	),
	array(
		0 => 'Czy mogę łączyć znaczniki formatujące?',
		1 => 'Tak, naturalnie, że możesz, na przykład aby zwrócić czyjąć uwagę możesz napisać: <code><strong>[size=</strong>150<strong>][color=</strong>red<strong>][b]</strong>POPATRZ NA MNIE!<strong>[/b][/color][/size]</strong></code>, co zmieni się w <span style="font-size: 150%; line-height: normal; color: red; font-weight: bold">POPATRZ NA MNIE!</span> Nie radzimy jednak wpisywać dużych ilosci tekstu o takim wyglądzie! Pamiętaj, że od Ciebie zależy zachowanie poprawnej kolejności początkowych i końcowych znaczników. Przykładowo, poniższy kod nie zadziała: <code><strong>[b][u]</strong>Tekst<strong>[/b][/u]</strong></code>'
	),
	array(
		0 => '--',
		1 => 'Cytowanie i wstawianie tekstu o stałej szerokości znaków'
	),
	array(
		0 => 'Cytowanie tekstu w odpowiedziach',
		1 => 'Są dwa sposoby na cytowanie tekstu - podając źródło lub nie podając go.<ul>
			<li>Przy wykorzystywaniu funkcji cytowania odpowiadając na post na forum, cytowany tekst zostaje automatycznie otoczony blokiem <code><strong>[quote=&quot;</strong><span style="font-style: italic;">autor cytowanego postu</span><strong>&quot;]</strong></code> i <code><strong>[/quote]</strong></code>. Ta metoda pozwala cytować z podaniem źródła (czyli np. osoby). Przykładowo, żeby zacytować kawałek tekstu napisanego przez Userka powinieneś napisać: <code><strong>[quote=&quot;</strong>Userek<strong>&quot;]</strong>Tekst, który napisał Userek<strong>[/quote]</strong></code> Wynikiem tego będzie automatyczne dodanie „Userek napisał(a):” przed cytowanym tekstem. Pamiętaj, <strong>musisz</strong> wstawić cudzysłowy wokół nazwy źródła.</li>
			<li>Druga metoda pozwala cytować tekst nie podając źródła. Aby jej użyć, wstaw tekst między znacznikami <code><strong>[quote]</strong></code> i <code><strong>[/quote]</strong></code>. Przy wyświetlaniu postu, przed cytowanym tekstem wyświetlony zostanie napis &quot;Cytat:&quot;.</li>
		</ul>'
	),
	array(
		0 => 'Wstawianie kodu lub tekstu o stałej szerokości znaków',
		1 => 'Jeśli chcesz wstawić kawałek kodu lub cokolwiek, co wymaga stałej szerokości znaków, powinieneś użyć znaczników <code><strong>[code]</strong></code> i <code><strong>[/code]</strong></code>. Przykład: <code><strong>[code]</strong>echo &quot;Oto jakiś kod&quot;;<strong>[/code]</strong></code>. Całe formatowanie użyte między znacznikami <code><strong>[code]</strong></code> i <code><strong>[/code]</strong></code> zostanie zachowane przy wyświetlaniu wysłanego postu. Kolorowanie składni PHP może zostać włączone przez użycie pary <code><strong>[code=php]</strong></code> i <code><strong>[/code]</strong></code> i jest zalecane przy wysyłaniu kodu PHP, ponieważ ułatwia jego odczytywanie.'
	),
	array(
		0 => '--',
		1 => 'Tworzenie list'
	),
	array(
		0 => 'Tworzenie listy nieuporządkowanej',
		1 => 'BBCode umożliwia wstawianie dwóch rodzajów list, nieuporządkowanej i uporządkowanej. Są w zasadzie takie same jak ich odpowiedniki w HTML. Lista nieuporządkowana prezentuje kolejne pozycje jedna po drugiej, oznaczając je graficznymi znakami. Aby utworzyć listę nieuporządkowaną użyj pary znaczników <code><strong>[list]</strong></code> i <code><strong>[/list]</strong></code> i oznacz każdą pozycję używając <code><strong>[*]</strong></code>. Przykładowo, żeby zrobić listę twoich ulubionych kolorów:
		<ul class="faq-block">
			<li>Czerwony</li>
			<li>Niebieski</li>
			<li>Żółty</li>
		</ul>
		powinieneś użyć kodu:
		<code class="faq-block"><strong>[list]</strong><br />
			<strong>[*]</strong>Czerwony<br />
			<strong>[*]</strong>Niebieski<br />
			<strong>[*]</strong>Żółty<br />
		<strong>[/list]</strong></code>'
		),
	array(
		0 => 'Tworzenie listy uporządkowanej',
		1 => 'Drugi typ list - uporządkowany - daje kontrolę nad tym, co jest wyświetlane przed każdym elementem. Aby utworzyć listę uporządkowaną użyj <code><strong>[list=1]</strong></code> i <code><strong>[/list]</strong></code> dla listy numerowanej lub <code><strong>[list=a]</strong></code> i <code><strong>[/list]</strong></code> dla listy alfabetycznej. Podobnie jak w liście nieuporządkowanej, elementy są wyznaczane przez <code><strong>[*]</strong></code>.
		Przykładowo, aby zrobić listę rzeczy do zrobienia:
		<ol style="list-style-type: decimal" class="faq-block">
			<li>Idź do sklepu</li>
			<li>Kup nowy komputer</li>
			<li>Przeklnij go, gdy się zawiesi</li>
		</ol>
		powinieneś użyć kodu:
		<code class="faq-block"><strong>[list=1]</strong><br />
			<strong>[*]</strong>Idź do sklepu<br />
			<strong>[*]</strong>Kup nowy komputer<br />
			<strong>[*]</strong>Przeklnij go, gdy się zawiesi<br />
		<strong>[/list]</strong></code>
		Aby zrobić listę możliwych odpowiedzi:
		<ol style="list-style-type: lower-alpha" class="faq-block">
			<li>Pierwsza możliwa odpowiedź</li>
			<li>Druga możliwa odpowiedź</li>
			<li>Trzecia możliwa odpowiedź</li>
		</ol>
		powinieneś użyć kodu:
		<code class="faq-block"><strong>[list=a]</strong><br />
			<strong>[*]</strong>Pierwsza możliwa odpowiedź<br />
			<strong>[*]</strong>Druga możliwa odpowiedź<br />
			<strong>[*]</strong>Trzecia możliwa odpowiedź<br />
		<strong>[/list]</strong></code>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Tworzenie linków'
	),
	array(
		0 => 'Odnośniki do innych stron',
		1 => 'BBCode umożliwia wstawianie adresów WWW na kilka sposobów.<ul>
			<li>Pierwszy wykorzystuje parę znaczników <code><strong>[url=</strong>adres.www.tld<strong>]</strong></code> i <code><strong>[/url]</strong></code>. Wszystko co wpiszesz między znakiem = a ] zostanie uznane za adres WWW. Przykładowo, żeby wstawić <a href="http://phpbb3.pl">link do phpBB3.PL</a> powinieneś użyć kodu:<code><strong>[url=</strong>http://phpbb3.pl<strong>]</strong>link do phpBB3.PL<strong>[/url]</strong></code>. Zauważ, że odnośnik otwiera się w tym samym lub nowym oknie, zależnie od ustawień przeglądarki klikającego.</li>
			<li>Jeżeli chcesz, żeby sam adres WWW był wyświetlany jako opis linku, możesz to szybko zrobić używając znaczników <code><strong>[url]</strong></code> i <code><strong>[/url]</strong></code>. Przykład: Aby wyświetlić <a href="http://phpbb3.pl">phpbb3.pl</a> należy użyć kodu: <code><strong>[url]</strong>phpbb3.pl<strong>[/url]</strong></code></li>
			<li>Dodatkowo phpBB umożliwia wykorzystanie tzw. <span style="font-style: italic;">Magicznych Linków</span>, które zmieniają prawidłowo wpisany adres WWW w link, bez potrzeby dodawania jakichkolwiek znaczników lub nawet dopisywania na początku http://. Na przykład wpisanie <code>www.phpbb3.pl</code> w wiadomości zmieni się automatycznie w <a href="http://www.phpbb3.pl/">www.phpbb3.pl</a> przy wyświetlaniu wiadomości.</li>
			<li>Podobnie jest z adresami e-mail - możesz użyć pary znaczników BBCode’u <code><strong>[e-mail=</strong>adres@e-mail.tld<strong>]</strong></code> i <code><strong>[/e-mail]</strong>, <strong>[e-mail]</strong>adres@e-mail.tld<strong>[/e-mail]</strong></code> lub po prostu <code>adres@e-mail.tld</code>. Efekt będzie taki sam, jak w przypadku adresów WWW.</li>
		</ul>'
	),
	array(
		0 => '--',
		1 => 'Wstawianie obrazków i załączników'
	),
	array(
		0 => 'Wstawianie obrazków do postu',
		1 => 'BBCode zawiera znacznik umożliwiający wstawianie obrazków do postów. Należy jednak pamiętać o dwóch istotnych rzeczach:<ul>
			<li>wielu użytkowników nie lubi dużych ilości obrazków w postach</li>
			<li>wstawiany obrazek musi być już dostępny w internecie (nie może na przykład istnieć tylko na Twoim komputerze, chyba że masz u siebie serwer!)</li>
		</ul> Nie ma obecnie możliwości automatycznego wstawiania obrazków na serwer, na którym stoi phpBB3. Aby wstawić obrazek musisz otoczyć jego adres WWW znacznikami <code><strong>[img]</strong></code> i <code><strong>[/img]</strong></code>. Przykładowo, kod <code><strong>[img]</strong>http://phpbb3.pl/logo.png<strong>[/img]</strong></code> zmieni się w:
		<img src="http://phpbb3.pl/logo.png" alt="Obrazek" class="faq-block" />
		Jeżeli obrazek ma być linkiem do jakiejś strony, otocz go znacznikami <code><strong>[url]</strong></code> i <code><strong>[/url]</strong></code>. Przykładowo, kod <code><strong>[url=</strong>http://phpbb3.pl/<strong>][img]</strong>http://phpbb3.pl/logo.png<strong>[/img][/url]</strong></code> zmieni się w:
		<a href="http://phpbb3.pl" class="faq-block"><img src="http://phpbb3.pl/logo.png" alt="Obrazek" /></a>'
	),
	array(
		0 => 'Wstawianie załączników do postu',
		1 => 'Załączniki moga być wstawiane do postów za pomocą nowej pary znaczników BBCode - <code><strong>[attachment=]</strong></code> i <code><strong>[/attachment]</strong></code>. Aby ów znacznik działał, wysyłanie i pobieranie załączników musi zostać włączone w panelu administratora, a Ty musisz posiadać odpowiednie uprawnienia. W formularzu wysyłania postu jest lista wyboru służąca do wstawiania załączników w treści postu.'
	),
	array(
		0 => '--',
		1 => 'Inne sprawy'
	),
	array(
		0 => 'Czy mogę dodać własne znaczniki?',
		1 => 'Jeżeli jesteś administratorem tego forum i masz odpowiednie uprawnienia, możesz dodawać nowe znaczniki BBCode przez panel administratora (PA -> karta PISANIE -> grupa WIADOMOŚCI, link BBCode)'
	)
);

?>