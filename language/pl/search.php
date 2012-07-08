<?php
/**
*
* search [Polski]
*
* @package language
* @version $Id: search.php 10004 2009-10-20 LEW21 $
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
	'ALL_AVAILABLE'			=> 'Wszystkie dostępne',
	'ALL_RESULTS'			=> 'Wszystkie wyniki',

	'DISPLAY_RESULTS'		=> 'Wyświetl wyniki jako',

	'FOUND_SEARCH_MATCH'	=> 'Znaleziono %d wynik',
	'FOUND_SEARCH_MATCHES'	=> 'Znalezione wyniki: %d',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Znaleziono więcej niż %d wyników',

	'GLOBAL'				=> 'Ogłoszenie globalne',

	'IGNORED_TERMS'			=> 'ignorowany',
	'IGNORED_TERMS_EXPLAIN'	=> 'Następujące słowa zostały zignorowane, ponieważ występują zbyt często: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Skocz do postu',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Żeby zobaczyć swoje posty, musisz się najpierw zalogować.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Żeby zobaczyć nieprzeczytane posty, musisz się najpierw zalogować.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Podałeś zbyt wiele słów do znalezienia. Nie podawaj więcej niż %1$d słów.',

	'NO_KEYWORDS'			=> 'Musisz sprecyzować przynajmniej jedno słowo do wyszukania. Każde słowo musi zawierać od %1$d do %2$d znaków (z wyłączeniem „*”).',
	'NO_RECENT_SEARCHES'	=> 'Niczego ostatnio nie szukano.',
	'NO_SEARCH'				=> 'Nie masz uprawnień do używania wyszukiwarki.',
	'NO_SEARCH_RESULTS'		=> 'Wyszukiwarka nic nie znalazła.',
	'NO_SEARCH_TIME'		=> 'W tej chwili nie możesz użyć wyszukiwarki. Spróbuj ponownie za chwilę.',
	'WORD_IN_NO_POST'		=> 'Nie wyświetlono żadnych wyników, ponieważ słowa <strong>%s</strong> nie ma w żadnym poście.',
	'WORDS_IN_NO_POST'		=> 'Nie wyświetlono żadnych wyników, ponieważ słów <strong>%s</strong> nie ma w żadnym poście.',

	'POST_CHARACTERS'		=> 'znaków w poście',

	'RECENT_SEARCHES'		=> 'Ostatnie wyszukiwania',
	'RESULT_DAYS'			=> 'Pokaż wyniki z ostatnich',
	'RESULT_SORT'			=> 'Sortuj wyniki wg',
	'RETURN_FIRST'			=> 'Pokaż pierwsze',
	'RETURN_TO_SEARCH_ADV'	=> 'Powrót do zaawansowanego wyszukiwania',

	'SEARCHED_FOR'				=> 'Słowa kluczowe',
	'SEARCHED_TOPIC'			=> 'Przeszukany wątek',
	'SEARCH_ALL_TERMS'			=> 'Szukaj wszystkich wyrazów lub całego wpisanego ciągu',
	'SEARCH_ANY_TERMS'			=> 'Szukaj któregokolwiek z wyrazów',
	'SEARCH_AUTHOR'				=> 'Szukaj autora',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Możesz użyć * zamiast dowolnego ciągu znaków.',
	'SEARCH_FIRST_POST'			=> 'Tylko pierwszy post wątku',
	'SEARCH_FORUMS'				=> 'Przeszukaj działy',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Wybierz działy, które chcesz przeszukać. Poddziały są przeszukiwane automatycznie, chyba że opcja „Przeszukuj poddziały” jest wyłączona.',
	'SEARCH_IN_RESULTS'			=> 'Szukaj w wynikach',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Dodaj <strong>+</strong> przed wyrazem, który musi wystąpić i <strong>-</strong> przed wyrazem, który nie może znaleźć się w wynikach. Wpisz listę słów oddzielanych za pomocą <strong>|</strong> pomiędzy nawiasami, jeśli tylko jedno z tych słów musi zostać znalezione. Możesz także użyć * zamiast dowolnego ciągu znaków.',
	'SEARCH_MSG_ONLY'			=> 'Tylko treść postu',
	'SEARCH_OPTIONS'			=> 'Opcje wyszukiwania',
	'SEARCH_QUERY'				=> 'Wyszukiwanie',
	'SEARCH_SUBFORUMS'			=> 'Przeszukaj poddziały',
	'SEARCH_TITLE_MSG'			=> 'Tytuł i treść postu',
	'SEARCH_TITLE_ONLY'			=> 'Tylko tytuł postu',
	'SEARCH_WITHIN'				=> 'Szukaj w',
	'SORT_ASCENDING'			=> 'Rosnąco',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Malejąco',
	'SORT_FORUM'				=> 'Dział',
	'SORT_POST_SUBJECT'			=> 'Tytuł postu',
	'SORT_TIME'					=> 'Data',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Musisz podać przynajmniej %d znaków nazwy autora.',
));

?>