<?php
/**
*
* acp_prune [Polski]
*
* @package language
* @version $Id: prune.php 8479.2 2009-10-19 Ronnie $
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

// Usuwanie użytkowników
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Tutaj możesz masowo usuwać lub deaktywować użytkowników Twojego forum. Listę kont można ograniczać wg różnych kryteriów: liczby postów, daty ostatniej aktywności itp. Wszystkie te kryteria mogą być łączone, żeby jeszcze bardziej ograniczyć listę, np. możesz usunąć użytkowników ostatnio aktywnych przed 2008-01-01, mających mniej niż 10 postów. Możesz też pominąć generowanie listy za pomocą kryteriów podając własną listę użytkowników do usunięcia (nazwa każdego w osobnej linii) w polu tekstowym. <br/><strong>Uważaj przy używaniu tej funkcji! Nie ma tu przycisku „Cofnij”!</strong>',

	'DEACTIVATE_DELETE'			=> 'Deaktywować czy usunąć',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Wybierz, czy chcesz deaktywować użytkowników, czy ich całkowicie usunąć. <strong>Pamiętaj, że usuniętych użytkowników nie można przywrócić!</strong>',
	'DELETE_USERS'				=> 'Usuń',
	'DELETE_USER_POSTS'			=> 'Usuń posty usuniętych użytkowników',
	'DELETE_USER_POSTS_EXPLAIN' => 'Usuwa posty napisane przez usuniętych użytkowników. Nie ma żadnego efektu, jeśli użytkownicy są deaktywowani.',

	'JOINED_EXPLAIN'			=> 'Podaj datę w formacie <kbd>RRRR-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Podaj datę w formacie <kbd>RRRR-MM-DD</kbd>. Podaj <kbd>0000-00-00</kbd> aby usunąć użytkowników, którzy nigdy się nie zalogowali - <em>Przed</em> i <em>Po</em> zostaną zignorowane.',

	'PRUNE_USERS_LIST'				=> 'Użytkownicy do usunięcia/deaktywacji',
	'PRUNE_USERS_LIST_DELETE'		=> 'Przy wybranych kryteriach usuwania użytkowników, usunięte zostaną poniższe konta.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Przy wybranych kryteriach deaktywowania użytkowników, deaktywowane zostaną poniższe konta.',

	'SELECT_USERS_EXPLAIN'		=> 'Podaj konkretne nazwy użytkowników, zostaną one użyte zamiast powyższych kryteriów. Założycieli nie można usunąć.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Wybrani użytkownicy zostali deaktywowani.',
	'USER_DELETE_SUCCESS'		=> 'Wybrani użytkownicy zostali usunięci.',
	'USER_PRUNE_FAILURE'		=> 'Nie znaleziono użytkowników odpowiadajacych poniższym kryteriom.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Podana data jest nieprawidłowa, musisz podać ją w formacie <kbd>RRRR-MM-DD</kbd>.',
));

// Oczyszczanie działów
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Tutaj możesz szybko oczyścić wybrany(e) dział(y) ze starych wątków. Najpierw wybierz dział(y), który(e) chcesz oczyścić, a potem ustaw zasady, według których ma się odbyć oczyszczanie. Jeśli nie zdefiniujesz żadnych kryteriów (tj. zostawisz obydwa pola puste lub wpiszesz 0), wszystkie wątki zostaną usunięte. Standardowo forum nie usunie wątków z nadal otwartymi ankietami ani wątków przyklejonych i ogłoszeń.',

	'FORUM_PRUNE'		=> 'Kryteria oczyszczania',

	'NO_PRUNE'			=> 'Nie oczyszczono żadnych działów.',

	'SELECTED_FORUM'	=> 'Wybrany dział',
	'SELECTED_FORUMS'	=> 'Wybrane działy',

	'POSTS_PRUNED'					=> 'Usunięto postów',
	'PRUNE_ANNOUNCEMENTS'			=> 'Usuń ogłoszenia',
	'PRUNE_FINISHED_POLLS'			=> 'Usuń zamknięte ankiety',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Usuwa wątki z przeterminowanymi ankietami.',
	'PRUNE_FORUM_CONFIRM'			=> 'Czy jesteś pewien, że chcesz oczyścić wybrany(e) dział(y) wg podanych kryteriów? <strong>Pamiętaj, że nie ma tu przycisku „Cofnij”!</strong>',
	'PRUNE_NOT_POSTED'				=> 'Liczba dni od napisania ostatniego postu / oddania ostatniego głosu',
	'PRUNE_NOT_VIEWED'				=> 'Liczba dni od ostatniego wyświetlenia',
	'PRUNE_OLD_POLLS'				=> 'Usuń stare ankiety',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Usuwa wątki z ankietami, w których nie głosowano od ustalonej wyżej liczby dni.',
	'PRUNE_STICKY'					=> 'Usun przyklejone',
	'PRUNE_SUCCESS'					=> 'Dział(y) został(y) oczyszczony(e).',

	'TOPICS_PRUNED'		=> 'Usunięto wątków',
));

?>