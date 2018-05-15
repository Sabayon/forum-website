<?php
/**
*
* viewtopic [Polski]
*
* @package language
* @version $Id: viewtopic.php 9972 2009-10-20 LEW21 $
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
	'ATTACHMENT'						=> 'Załącznik',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Dodawanie załączników zostało wyłączone.',

	'BOOKMARK_ADDED'		=> 'Wątek został dodany do zakładek.',
	'BOOKMARK_ERR'			=> 'Dodawanie wątku do zakładek nie powiodło się. Spróbuj ponownie.',
	'BOOKMARK_REMOVED'		=> 'Wątek został usunięty z zakładek.',
	'BOOKMARK_TOPIC'		=> 'Dodaj do zakładek',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Usuń z zakładek',
	'BUMPED_BY'				=> 'Ostatnio przesunięty w górę %2$s przez: %1$s.',
	'BUMP_TOPIC'			=> 'Przesuń w górę',

	'CODE'					=> 'Kod',
	'COLLAPSE_QR'			=> 'Ukryj szybką odpowiedź',

	'DELETE_TOPIC'			=> 'Usuń wątek',
	'DOWNLOAD_NOTICE'		=> 'Nie masz wystarczających uprawnień, aby zobaczyć pliki załączone do tego postu.',

	'EDITED_TIMES_TOTAL'	=> 'Ostatnio edytowano %2$s przez %1$s, łącznie edytowano %3$d razy',
	'EDITED_TIME_TOTAL'		=> 'Ostatnio edytowano %2$s przez %1$s, łącznie edytowano %3$d raz',
	'EMAIL_TOPIC'			=> 'Powiadom znajomego',
	'ERROR_NO_ATTACHMENT'	=> 'Wybrany załącznik już nie istnieje',

	'FILE_NOT_FOUND_404'	=> 'Plik <strong>%s</strong> nie istnieje.',
	'FORK_TOPIC'			=> 'Kopiuj wątek',
	'FULL_EDITOR'			=> 'Pełny edytor',

	'LINKAGE_FORBIDDEN'		=> 'Nie masz uprawnień do przeglądania, pobierania lub linkowania z/do tej strony.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Zostałeś powiadomiony o tym wątku, zaloguj się, aby go przejrzeć.',
	'LOGIN_VIEWTOPIC'		=> 'Aby przejrzeć ten wątek, musisz się zalogować.',

	'MAKE_ANNOUNCE'				=> 'Zmień w ogłoszenie',
	'MAKE_GLOBAL'				=> 'Zmień w ogłoszenie globalne',
	'MAKE_NORMAL'				=> 'Zmień w zwykły wątek',
	'MAKE_STICKY'				=> 'Przyklej',
	'MAX_OPTIONS_SELECT'		=> 'Możesz wybrać maksymalnie <strong>%d</strong> opcji',
	'MAX_OPTION_SELECT'			=> 'Możesz wybrać tylko <strong>jedną</strong> opcję',
	'MISSING_INLINE_ATTACHMENT'	=> 'Załącznik <strong>%s</strong> nie jest już dostępny',
	'MOVE_TOPIC'				=> 'Przenieś wątek',

	'NO_ATTACHMENT_SELECTED'=> 'Nie wybrałeś załącznika do pobrania.',
	'NO_NEWER_TOPICS'		=> 'Nie ma nowszych wątków w tym dziale.',
	'NO_OLDER_TOPICS'		=> 'Nie ma starszych wątków w tym dziale.',
	'NO_UNREAD_POSTS'		=> 'Nie ma nieprzeczytanych postów w tym dziale.',
	'NO_VOTE_OPTION'		=> 'Musisz wybrać opcję, aby zagłosować.',
	'NO_VOTES'				=> 'Brak głosów',

	'POLL_ENDED_AT'			=> 'Ankieta wygasła %s',
	'POLL_RUN_TILL'			=> 'Ankieta wygaśnie %s',
	'POLL_VOTED_OPTION'		=> 'Zagłosowałeś na tę opcję',
	'PRINT_TOPIC'			=> 'Drukuj',

	'QUICK_MOD'				=> 'Narzędzia',
	'QUICKREPLY'			=> 'Szybka odpowiedź',
	'QUOTE'					=> 'Cytuj',

	'REPLY_TO_TOPIC'		=> 'Odpowiedz w wątku',
	'RETURN_POST'			=> '%sPowrót do postu%s',

	'SHOW_QR'				=> 'Szybka odpowiedź',
	'SUBMIT_VOTE'			=> 'Wyślij',

	'TOTAL_VOTES'			=> 'Liczba głosów',

	'UNLOCK_TOPIC'			=> 'Odblokuj wątek',

	'VIEW_INFO'				=> 'Szczegóły postu',
	'VIEW_NEXT_TOPIC'		=> 'Następny',
	'VIEW_PREVIOUS_TOPIC'	=> 'Poprzedni',
	'VIEW_RESULTS'			=> 'Pokaż wyniki',
	'VIEW_TOPIC_POST'		=> 'Posty: 1',
	'VIEW_TOPIC_POSTS'		=> 'Posty: %d',
	'VIEW_UNREAD_POST'		=> 'Pokaż pierwszy nieprzeczytany post',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Twój głos został zapisany.',
	'VOTE_CONVERTED'		=> 'Zmiana głosów w przekonwertowanych ankietach nie jest możliwa.',
));

?>
