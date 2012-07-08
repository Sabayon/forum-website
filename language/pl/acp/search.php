<?php
/**
*
* acp_search [Polski]
*
* @package language
* @version $Id: search.php 9438 2009-05-10 LEW21 $
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

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Tutaj możesz zarządzać indeksami wyszukiwania. Normalnie używasz tylko jednego backendu, więc powinieneś usunąć wszystkie indeksy, których nie używasz. Po zmianie części ustawień wyszukiwania (np. minimalna/maksymalna liczba znaków), może przydać się ponowne utworzenie indeksu, aby odpowiadał tym zmienionym ustawieniom.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Tutaj możesz wybrać, który backend wyszukiwania będzie używany do indeksowania postów i ich wyszukiwania. Możesz też ustawić różne opcje wpływające na obciążenie serwera. Niektóre z nich dotyczą wszystkich backendów wyszukiwania.',

	'COMMON_WORD_THRESHOLD'					=> 'Próg popularnych słów',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Słowa zawarte w większej części postów zostaną uznane za popularne i przez to ignorowane w zapytaniach do wyszukiwarki. Ustaw na 0, aby zablokować tę funkcję. Działa tylko wtedy, jeśli na forum jest ponad 100 postów. Jeśli chcesz, żeby słowa uznane obecnie za popularne zostały ponownie przeanalizowane, musisz ponownie utworzyć indeks.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Czy jesteś pewien, że chcesz zmienić backend wyszukiwania? Po zmianie backendu będziesz musiał utworzyć indeks dla nowego backendu. Jeśli nie planujesz wracać do starego backendu, możesz też usunąć jego indeks, aby oczyścić część zasobów.',
	'CONTINUE_DELETING_INDEX'				=> 'Kontynuuj proces usuwania indeksu',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Uruchomiony został proces usuwania indeksu. Aby korzystać z wyszukiwarki, musisz go skończyć lub anulować.',
	'CONTINUE_INDEXING'						=> 'Kontynuuj proces tworzenia indeksu',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Uruchomiony został proces tworzenia indeksu. Aby korzystać z wyszukiwarki, musisz go skończyć lub anulować.',
	'CREATE_INDEX'							=> 'Utwórz indeks',

	'DELETE_INDEX'							=> 'Usuń indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Trwa usuwanie indeksu',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Backend wyszukiwarki aktualnie usuwa swój indeks. Może to potrwać kilka minut.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Pełnotekstowe indeksy MySQL mogą być używane tylko z MySQL w wersji 4 lub nowszej.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Pełnotekstowe indeksy MySQL mogą być używane tylko w tabelach MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Liczba zindeksowanych postów',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Wsparcie dla nie-łacińskich znaków UTF-8 poprzez mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Wsparcie dla nie-łacińskich znaków UTF-8 poprzez PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Jeśli PCRE nie posiada wsparcia dla UTF-8, backend wyszukiwania spróbuje użyć silnika wyrażeń regularnych mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Ten backend do wyszukiwania nie-łacińskich znaków UTF-8 wymaga PCRE ze wsparciem dla UTF-8, dostępnego tylko w PHP 4.4, 5.1 i nowszych.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Ogólne ustawienia wyszukiwania',
	'GO_TO_SEARCH_INDEX'					=> 'Przejdź do zarządzania indeksami',

	'INDEX_STATS'							=> 'Statystyki indeksów',
	'INDEXING_IN_PROGRESS'					=> 'Trwa indeksowanie',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Backend wyszukiwania obecnie indeksuje wszystkie posty na forum. Może to potrwać od kilku minut do kilku godzin, zależnie od wielkości Twojego forum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limit obciążenia systemu - wyszukiwarka',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Jeśli średnie minutowe obciążenie systemu przekroczy tę wartość, wyszukiwarka automatycznie zostanie wyłączona. Wartość 1.0 oznacza około stuprocentowe wykorzystanie jednego procesora. To ustawienie działa tylko na serwerach bazujących na UNIXie i gdzie ta informacja jest dostępna.',

	'MAX_SEARCH_CHARS'						=> 'Maksymalna długość słowa',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Słowa mające więcej znaków nie będą indeksowane przez wyszukiwarkę.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksymalna liczba słów',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksymalna liczba słów kluczowych jakiej użytkownik może szukać. Wartość 0 pozwala szukać nielimitowanej liczby słów.',
	'MIN_SEARCH_CHARS'						=> 'Minimalna długość słowa',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Słowa mające mniej znaków nie będą indeksowane przez wyszukiwarkę.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimalna długość nazwy użytkownika',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Użytkownicy muszą podać co najmniej tyle znaków loginu w czasie wyszukiwania postów użytkownika z użyciem gwiazdki (*). Jeśli nazwa użytkownika jest krótsza od tej liczby, nadal możliwe jest znalezienie postów takiego użytkownika dzięki podaniu pełnej nazwy.',

	'PROGRESS_BAR'							=> 'Pasek postępu',

	'SEARCH_GUEST_INTERVAL'					=> 'Interwał wyszukiwania gości',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Liczba sekund, jaką goście muszą odczekać między wyszukiwaniami. Jeśli jeden gość coś wyszukał, wszyscy inni muszą odczekać ten czas.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Wszystkie posty do postu o ID %1$d zostały zindeksowane, z czego %2$d posty zostały zindeksowane w tym kroku.<br />Obecna prędkość indeksowania to około %3$.1f postów na sekundę.<br />Trwa indeksowanie…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Wszystkie posty do postu o ID %1$d zostały usunięte z indeksu.<br />Trwa usuwanie…',
	'SEARCH_INDEX_CREATED'					=> 'Wszystkie posty napisane na forum zostały zindeksowane.',
	'SEARCH_INDEX_REMOVED'					=> 'Indeks tego backendu wyszukiwania został usunięty.',
	'SEARCH_INTERVAL'						=> 'Interwał wyszukiwania użytkowników',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Liczba sekund, jaką użytkownicy muszą odczekać między wyszukiwaniami. Interwał ten jest sprawdzany osobno dla każdego użytkownika.',
	'SEARCH_STORE_RESULTS'					=> 'Czas zapamiętywania wyników wyszukiwania',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Zapamiętane wyniki wyszukiwania wygasną po tym czasie. Jest on liczony w sekundach. Ustaw na 0, aby zablokować zapamiętywanie wyników wyszukiwania.',
	'SEARCH_TYPE'							=> 'Backend wyszukiwania',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB pozwala Ci wybrać backend używany do wyszukiwania postów. Domyślnie phpBB używa własnego backendu pełnotekstowego.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Zmieniłeś backend wyszukiwania. Aby go używać, upewnij się, że istnieje jego indeks.',

	'TOTAL_WORDS'							=> 'Liczba zindeksowanych słów',
	'TOTAL_MATCHES'							=> 'Liczba zindeksowanych relacji słowo - post',

	'YES_SEARCH'							=> 'Włącz wyszukiwanie',
	'YES_SEARCH_EXPLAIN'					=> 'Pozwala użytkownikom przeszukiwać forum w celu znajdowania postów i użytkowników.',
	'YES_SEARCH_UPDATE'						=> 'Włącz aktualizację indeksów pełnotekstowych',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Aktualizuje indeksy pełnotekstowe, gdy użytkownicy piszą / zmieniają / usuwają swoje posty. Ignorowane, gdy wyszukiwanie jest zablokowane.',
));

?>