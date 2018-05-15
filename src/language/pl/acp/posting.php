<?php
/**
*
* acp_posting [Polski]
*
* @package language
* @version $Id: posting.php 9902 2009-09-27 LEW21 $
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

// BBCode'y
// Uwaga dla tłumaczy: możecie tłumaczyć wszystko oprócz tego co jest między { i }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode to specjalna implementacja HTMLa, oferująca większą kontrolę nad tym co i jak jest wyświetlane. Tutaj możesz dodać, usuwać i zmieniać własne BBCode’y.',
	'ADD_BBCODE'				=> 'Dodaj BBCode’a',

	'BBCODE_ADDED'				=> 'BBCode został dodany.',
	'BBCODE_EDITED'				=> 'BBCode został zmieniony.',
	'BBCODE_NOT_EXIST'			=> 'Wybrany BBCode nie istnieje.',
	'BBCODE_HELPLINE'			=> 'Linia informacyjna',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'To pole zawiera tekst wyświetlany, gdy kursor myszki jest nad BBCodem.',
	'BBCODE_HELPLINE_TEXT'		=> 'Tekst w linii informacyjnej',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Podana linia informacyjna jest zbyt długa.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Istnieje już BBCode o wybranej nazwie tagu.',
	'BBCODE_INVALID'			=> 'Twój BBCode został nieprawidłowo skonstruowany.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Twój BBCode musi się składać z otwierającego i zamykającego tagu.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'Wybrany tag jest za długi.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Podana definicja tagu jest za długa, skróć ją.',
	'BBCODE_USAGE'				=> 'Sposób użycia BBCode’a',
	'BBCODE_USAGE_EXAMPLE'		=> '[podswietl={COLOR}]{TEXT}[/podswietl]<br /><br />[font={SIMPLETEXT}]{TEXT}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tutaj możesz określić jak używać BBCode’a. Zamień wszystko, co ma wpisać użytkownik, na odpowiedni token (%spatrz niżej%s).',

	'EXAMPLE'						=> 'Przykład:',
	'EXAMPLES'						=> 'Przykłady:',

	'HTML_REPLACEMENT'				=> 'Kod HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT};"&gt;{TEXT}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Tutaj możesz zdefiniować kod HTML służący do zastąpienia tego BBCode’a. Nie zapomnij zastosować tokenów podanych w polu „Sposób użycia”!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokeny',
	'TOKENS_EXPLAIN'		=> 'Tokeny powinny być używane w miejscach, gdzie użytkownik ma coś wpisać. BBCode zostanie rozpoznany tylko, jeśli w miejscach tokenów wpisany zostanie tekst odpowiadający ich definicji. Jeśli to konieczne, możesz numerować tokeny dodając liczbę pomiędzy ostatnią literę a nawias zamykający, np. {TEXT1}, {TEXT2}.<br /><br />W kodzie HTML możesz też używać wpisów językowych, w taki sposób: {L_<em>&lt;KLUCZ_WPISU&gt;</em>}, gdzie <em>&lt;KLUCZ_WPISU&gt;</em> to klucz wpisu, którego wartości chcesz użyć. Na przykład, {L_WROTE} zostanie wyświetlone jako „napisał(a)” lub tłumaczenie tego wpisu, zgodnie z językiem użytkownika.<br /><br /><strong>Zauważ, że w BBCode’ach możesz użyć tylko tokenów wyświetlonych poniżej.</strong>',
	'TOKEN_DEFINITION'		=> 'Czym może być?',
	'TOO_MANY_BBCODES'		=> 'Nie możesz utworzyć więcej BBCode’ów. Usuń co najmniej jeden i spróbuj ponownie.',

	'tokens'	=>	array(
		'TEXT'			=> 'Dowolny tekst, w tym znaki wszystkich języków, liczby itp. Nie powinieneś używać tego tokenu w treści tagów HTML. Zamiast niego użyj IDENTIFIERa lub SIMPLETEXTu.',
		'SIMPLETEXT'	=> 'Znaki z łacińskiego alfabetu (A-Z), liczby, spacje, przecinki, kropki, minusy, plusy, myślniki i podkreślniki',
		'IDENTIFIER'	=> 'Znaki z łacińskiego alfabetu (A-Z), liczby, myślniki i podkreślniki',
		'NUMBER'		=> 'Dowole cyfry',
		'EMAIL'			=> 'Prawidłowy adres e-mail',
		'URL'			=> 'Prawidłowy URL używający dowolnego protokołu (http, ftp itp., nie może być użyte do eksploitów javascript). Jeśli żaden protokół nie zostanie podany, do tekstu zostanie dodany „http://”.',
		'LOCAL_URL'		=> 'Lokalny URL. Musi prowadzić od strony wyświetlającej wątek i nie może zawierać nazwy serwera czy protokołu.',
		'COLOR'			=> 'Kolor HTML, może być albo w formie numerycznej <samp>#FF1234</samp> albo <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">nazwą koloru CSS</a>, taką jak <samp>fuchsia</samp> czy <samp>InactiveBorder</samp>'
	)
));

// Uśmieszki i ikony
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Tutaj możesz dodawać, usuwać i zmieniać ikony, które użytkownicy mogą ustawiać swoim wątkom, postom i prywatnym wiadomościom. Ikony te zazwyczaj są wyświetlane w pobliżu tytułów wątków na liście wątków i w pobliżu tytułów postów na liście postów. Możesz też zainstalować lub utworzyć pakiet ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Uśmieszki (emotikony) to zazwyczaj małe, czasami animowane obrazki, używane do wyrażania emocji lub uczuć. Tutaj możesz dodawać, usuwać oraz zmieniać uśmieszki, które użytkownicy mogą stosować w swoich postach i prywatnych wiadomościach. Możesz też zainstalować lub utworzyć pakiet uśmieszków.',
	'ADD_SMILIES'			=> 'Dodaj wiele uśmieszków',
	'ADD_SMILEY_CODE'		=> 'Dodaj dodatkowy kod uśmieszku',
	'ADD_ICONS'				=> 'Dodaj wiele ikon',
	'AFTER_ICONS'			=> 'Po %s',
	'AFTER_SMILIES'			=> 'Po %s',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Aktualne ikony',
	'CURRENT_ICONS_EXPLAIN'		=> 'Wybierz, co chcesz zrobić z aktualnie zainstalowanymi ikonami.',
	'CURRENT_SMILIES'			=> 'Aktualne uśmieszki',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Wybierz, co chcesz zrobić z aktualnie zainstalowanymi uśmieszkami.',

	'DISPLAY_ON_POSTING'		=> 'Wyświetlaj na stronie pisania',
	'DISPLAY_POSTING'			=> 'Na stronie pisania',
	'DISPLAY_POSTING_NO'		=> 'Nie na stronie pisania',



	'EDIT_ICONS'				=> 'Zmień ikony',
	'EDIT_SMILIES'				=> 'Zmień uśmieszki',
	'EMOTION'					=> 'Emocja',
	'EXPORT_ICONS'				=> 'Wyeksportuj i pobierz icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sPo kliknięciu na ten link konfiguracja zainstalowanych ikon zostanie spakowana do pliku <samp>icons.pak</samp>, który, po pobraniu, może zostać użyty do utworzenia pliku <samp>.zip</samp> lub <samp>.tgz</samp>, zawierającego wszystkie ikony plus plik konfiguracyjny <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Wyeksportuj i pobierz smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sPo kliknięciu na ten link konfiguracja zainstalowanych uśmieszków zostanie spakowana do pliku <samp>smilies.pak</samp>, który, po pobraniu, może zostać użyty do utworzenia pliku <samp>.zip</samp> lub <samp>.tgz</samp>, zawierającego wszystkie uśmieszki plus plik konfiguracyjny <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Pierwszy',

	'ICONS_ADD'				=> 'Dodaj ikonę',
	'ICONS_NONE_ADDED'		=> 'Nie dodano ikon.',
	'ICONS_ONE_ADDED'		=> 'Ikona została dodana.',
	'ICONS_ADDED'			=> 'Ikony zostaly dodane.',
	'ICONS_CONFIG'			=> 'Konfiguracja ikon(y)',
	'ICONS_DELETED'			=> 'Ikona została usunięta.',
	'ICONS_EDIT'			=> 'Zmień ikonę',
	'ICONS_ONE_EDITED'		=> 'Ikona została zmieniona.',
	'ICONS_NONE_EDITED'		=> 'Nie zmieniono ikon.',
	'ICONS_EDITED'			=> 'Ikony zostały zmienione.',
	'ICONS_HEIGHT'			=> 'Wysokość ikony',
	'ICONS_IMAGE'			=> 'Obrazek ikony',
	'ICONS_IMPORTED'		=> 'Zainstalowano pakiet ikon.',
	'ICONS_IMPORT_SUCCESS'	=> 'Zaimportowano pakiet ikon.',
	'ICONS_LOCATION'		=> 'Lokacja ikony',
	'ICONS_NOT_DISPLAYED'	=> 'Poniższe ikony nie są wyświetlane na stronie pisania',
	'ICONS_ORDER'			=> 'Kolejność ikon',
	'ICONS_URL'				=> 'Ikona',
	'ICONS_WIDTH'			=> 'Szerokość ikony',
	'IMPORT_ICONS'			=> 'Zainstaluj pakiet ikon',
	'IMPORT_SMILIES'		=> 'Zainstaluj pakiet uśmieszków',

	'KEEP_ALL'			=> 'Zachowaj wszystkie',

	'MASS_ADD_SMILIES'	=> 'Dodaj wiele uśmieszków',

	'NO_ICONS_ADD'		=> 'Nie ma żadnych ikon do dodania.',
	'NO_ICONS_EDIT'		=> 'Nie ma żadnych ikon do modyfikacji.',
	'NO_ICONS_EXPORT'	=> 'Nie ma żadnych ikon, z których można by utworzyć pakiet.',
	'NO_ICONS_PAK'		=> 'Nie znaleziono pakietów ikon.',
	'NO_SMILIES_ADD'	=> 'Nie ma żadnych uśmieszków do dodania.',
	'NO_SMILIES_EDIT'	=> 'Nie ma żadnych uśmieszków do modyfikacji.',
	'NO_SMILIES_EXPORT'	=> 'Nie ma żadnych uśmieszków, z których można by utworzyć pakiet.',
	'NO_SMILIES_PAK'	=> 'Nie znaleziono pakietów uśmieszków.',

	'PAK_FILE_NOT_READABLE'		=> 'Nie można odczytać pliku <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Zamień pasujące',

	'SELECT_PACKAGE'			=> 'Wybierz pakiet',
	'SMILIES_ADD'				=> 'Dodaj uśmieszek',
	'SMILIES_NONE_ADDED'		=> 'Nie dodano uśmieszków.',
	'SMILIES_ONE_ADDED'			=> 'Uśmieszek został dodany.',
	'SMILIES_ADDED'				=> 'Uśmieszki zostaly dodane.',
	'SMILIES_CODE'				=> 'Kod uśmieszka',
	'SMILIES_CONFIG'			=> 'Konfiguracja uśmieszka(ów)',
	'SMILIES_DELETED'			=> 'Uśmieszek został usunięty.',
	'SMILIES_EDIT'				=> 'Zmień uśmieszek',
	'SMILIE_NO_CODE'			=> 'Uśmieszek “%s” został zignorowany, ponieważ nie podano jego kodu.',
	'SMILIE_NO_EMOTION'			=> 'Uśmieszek “%s” został zignorowany, ponieważ nie podano emocji, jaką wyraża.',
	'SMILIES_ONE_EDITED'		=> 'Uśmieszek został zmieniony.',
	'SMILIES_NONE_EDITED'		=> 'Nie zmieniono uśmieszków.',
	'SMILIES_EDITED'			=> 'Uśmieszki zostały zmienione.',
	'SMILIES_EMOTION'			=> 'Emocja',
	'SMILIES_HEIGHT'			=> 'Wysokość uśmieszka',
	'SMILIES_IMAGE'				=> 'Obrazek uśmieszka',
	'SMILIES_IMPORTED'			=> 'Zainstalowano pakiet uśmieszków.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Zaimportowano pakiet uśmieszków.',
	'SMILIES_LOCATION'			=> 'Lokacja uśmieszka',
	'SMILIES_NOT_DISPLAYED'		=> 'Poniższe uśmieszki nie są wyświetlane na stronie pisania',
	'SMILIES_ORDER'				=> 'Kolejność uśmieszków',
	'SMILIES_URL'				=> 'Uśmieszek',
	'SMILIES_WIDTH'				=> 'Szerokość uśmieszka',

	'TOO_MANY_SMILIES'			=> 'Osiągnięto limit %d uśmieszków.',

	'WRONG_PAK_TYPE'	=> 'Wybrany pakiet nie zawiera odpowiednich danych.',
));

// Cenzura słów
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Tutaj możesz dodawać, usuwać i zmieniać cenzorowane automatycznie słowa. Oprócz tego, użytkownicy nie mogą rejestrować loginów zawierających te słowa. Możesz też używać *, np. *test* znajdzie słowo protestować, test* - testować, *test - protest.',
	'ADD_WORD'				=> 'Dodaj nowe słowo',

	'EDIT_WORD'		=> 'Zmień słowo',
	'ENTER_WORD'	=> 'Musisz wpisać słowo i jego zamiennik.',

	'NO_WORD'	=> 'Nie wybrałeś słowa do zmiany.',

	'REPLACEMENT'	=> 'Zamiennik',

	'UPDATE_WORD'	=> 'Zmień słowo',

	'WORD'				=> 'Słowo',
	'WORD_ADDED'		=> 'Cenzurowane słowo zostało dodane.',
	'WORD_REMOVED'		=> 'Cenzurowane słowo zostało usunięte.',
	'WORD_UPDATED'		=> 'Cenzurowane słowo zostało zmienione.',
));

// Rangi
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Tutaj możesz dodawać, usuwać i zmieniać rangi. Rangi mogą być zwykłe (nadawane wg liczby postów) lub specjalne (można je nadać przez zarządzanie użytkownikiem).',
	'ADD_RANK'				=> 'Dodaj rangę',

	'MUST_SELECT_RANK'		=> 'Musisz wybrać rangę.',

	'NO_ASSIGNED_RANK'		=> 'Nie posiada specjalnej rangi.',
	'NO_RANK_TITLE'			=> 'Nie wybrałeś tytułu rangi.',
	'NO_UPDATE_RANKS'		=> 'Ranga została usunięta. Mimo to, konta użytkowników posiadających tę rangę nie zostały zaktualizowane. Musisz ręcznie zresetować rangę tych kont.',

	'RANK_ADDED'			=> 'Ranga została dodana.',
	'RANK_IMAGE'			=> 'Obrazek rangi',
	'RANK_IMAGE_EXPLAIN'	=> 'Użyj tego pola aby wybrać mały obrazek wyświetlany przy użytkownikach posiadających tę rangę. Ścieżka prowadzi od katalogu głównego phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(w użyciu)',
	'RANK_MINIMUM'			=> 'Minimalna liczba postów',
	'RANK_REMOVED'			=> 'Ranga została usunięta.',
	'RANK_SPECIAL'			=> 'Ustaw jako rangę specjalną',
	'RANK_TITLE'			=> 'Tytuł rangi',
	'RANK_UPDATED'			=> 'Ranga została zmieniona.',
));

// Zabroń loginów
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Tutaj możesz dodawać i usuwać nazwy użytkowników, których nie można używać. Zabronione nazwy użytkowników mogą zawierać *. Pamiętaj, że nie możesz podać nazwy użytkownika już zarejestrowanego, musisz go najpierw usunąć.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Możesz zabronić wielu nazw użytkownika naraz poprzez użycie *.',
	'ADD_DISALLOW_TITLE'	=> 'Dodaj zabronioną nazwę użytkownika',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Możesz usunąć zabronioną nazwę użytkownika wybierając ją z listy i klikając na „Wyślij”.',
	'DELETE_DISALLOW_TITLE'		=> 'Usuń zabronioną nazwę użytkownika',
	'DISALLOWED_ALREADY'		=> 'Podana nazwa użytkownika nie może zostać zabroniona. Albo jest ona już na tej liście, albo jest na liście cenzorowanych słów, albo zarejestrowany jest użytkownik o pasującej nazwie.',
	'DISALLOWED_DELETED'		=> 'Zabroniona nazwa użytkownika została usunięta.',
	'DISALLOW_SUCCESSFUL'		=> 'Zabroniona nazwa użytkownika została dodana.',

	'NO_DISALLOWED'				=> 'Nie ma zabronionych nazw użytkowników',
	'NO_USERNAME_SPECIFIED'		=> 'Nie wybrałeś ani nie wpisałeś nazwy użytkownika, na której chcesz wykonać akcję.',
));

// Powody
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Tutaj możesz zarządzać powodami używanymi w zgłoszeniach i odrzuceniach postów. Istnieje jeden domyślny powód (oznaczony *), którego usunąć nie możesz. Jest to spowodowane tym, że jest używany, gdy żaden inny powód nie pasuje.',
	'ADD_NEW_REASON'		=> 'Dodaj powód',
	'AVAILABLE_TITLES'		=> 'Dostępne przetłumaczone powody',

	'IS_NOT_TRANSLATED'			=> 'Powód <strong>nie</strong> został przetłumaczony.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Powód <strong>nie</strong> został przetłumaczony. Jeśli chcesz podać przetłumaczoną formę, wybierz prawidłowy klucz z sekcji powodów zgłoszeń w plikach językowych.',
	'IS_TRANSLATED'				=> 'Powód został przetłumaczony.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Powód został przetłumaczony. Jeśli podany tytuł jest na liście powodów zgłoszeń w plikach językowych, użyta zostanie przetłumaczona forma tytułu i opisu.',

	'NO_REASON'					=> 'Nie znaleziono powodu.',
	'NO_REASON_INFO'			=> 'Musisz podać tytuł i opis dla tego powodu.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nie możesz usunąć domyślnego powodu „Inny”.',

	'REASON_ADD'				=> 'Dodaj powód',
	'REASON_ADDED'				=> 'Powód został dodany.',
	'REASON_ALREADY_EXIST'		=> 'Powód o takim tytule już istnieje, wybierz inny tytuł.',
	'REASON_DESCRIPTION'		=> 'Opis powodu',
	'REASON_DESC_TRANSLATED'	=> 'Wyświetlany opis powodu',
	'REASON_EDIT'				=> 'Zmień powód',
	'REASON_EDIT_EXPLAIN'		=> 'Tutaj możesz dodać lub zmienić powód. Jeśli podany tytuł jest na liście powodów zgłoszeń w plikach językowych, użyta zostanie przetłumaczona forma tytułu i opisu zamiast tej podanej tutaj.',
	'REASON_REMOVED'			=> 'Powód został usunięty.',
	'REASON_TITLE'				=> 'Tytuł powodu',
	'REASON_TITLE_TRANSLATED'	=> 'Wyświetlany tytuł powodu',
	'REASON_UPDATED'			=> 'Powód został zmieniony.',

	'USED_IN_REPORTS'		=> 'Używany w zgłoszeniach',
));

?>