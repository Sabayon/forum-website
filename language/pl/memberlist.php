<?php
/**
*
* memberlist [Polski]
*
* @package language
* @version $Id: memberlist.php 9933.1 2009-11-14 Ronnie $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najaktywniejszy w dziale',
	'ACTIVE_IN_TOPIC'		=> 'Najaktywniejszy w wątku',
	'ADD_FOE'				=> 'Dodaj do wrogów',
	'ADD_FRIEND'			=> 'Dodaj do przyjaciół',
	'AFTER'					=> 'Po',

	'ALL'					=> 'Wszystkie',

	'BEFORE'				=> 'Przed',

	'CC_EMAIL'				=> 'Wyślij kopię e-maila do siebie',
	'CONTACT_USER'			=> 'Kontakt',

	'DEST_LANG'				=> 'Język',
	'DEST_LANG_EXPLAIN'		=> 'Wybierz docelowy język (jeśli jest dostępny) dla odbiorcy wiadomości.',

	'EMAIL_BODY_EXPLAIN'	=> 'Wiadomość zostanie wysłana jako tekst, bez kodu HTML i BBCode. Jako adres zwrotny zostanie podany Twój adres e-mail.',
	'EMAIL_DISABLED'		=> 'Wszystkie funkcje dotyczące wysyłania e-maili są zablokowane.',
	'EMAIL_SENT'			=> 'Email został wysłany.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Wiadomość zostanie wysłana jako tekst, bez kodu HTML i BBCode. Informacje o wątku zostały załączone w wiadomości. Jako adres zwrotny zostanie podany Twój adres e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Musisz podać prawidłowy adres e-mail odbiorcy.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Musisz wpisać treść e-maila.',
	'EMPTY_MESSAGE_IM'		=> 'Musisz wpisać treść wiadomości.',
	'EMPTY_NAME_EMAIL'		=> 'Musisz podać prawidłową nazwę odbiorcy.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Musisz wpisać temat e-maila.',
	'EQUAL_TO'				=> 'Równy z',

	'FIND_USERNAME_EXPLAIN'	=> 'Użyj tego formularza do znalezienia użytkowników. Nie musisz wypełniać wszystkich pól. Możesz użyć * zamiast dowolnego znaku. Format daty to <kbd>YYYY-MM0-DD</kbd>, np. <samp>2006-12-31</samp>. Wybierz jednego lub kilku użytkowników i kliknij na przycisk „Dodaj wybranych”.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nie możesz teraz wysłać kolejnego maila. Spróbuj później.',

	'GROUP_LEADER'			=> 'Lider grupy',

	'HIDE_MEMBER_SEARCH'	=> 'Ukryj wyszukiwanie użytkowników',

	'IM_ADD_CONTACT'		=> 'Dodaj kontakt',
	'IM_AIM'				=> 'Musisz mieć zainstalowany AOL Instant Messenger, aby użyć tej funkcji.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Pobierz program',
	'IM_ICQ'				=> 'Użytkownik może mieć zablokowane otrzymywanie wiadomości od nieznajomych.',
	'IM_JABBER'				=> 'Użytkownik może mieć zablokowane otrzymywanie wiadomości od nieznajomych.',
	'IM_JABBER_SUBJECT'		=> 'To jest wiadomość wygenerowana automatycznie. Nie odpowiadaj na nią! Wiadomość od użytkownika %1$s @ %2$s.',
	'IM_MESSAGE'			=> 'Twoja wiadomość',
	'IM_MSNM'				=> 'Musisz mieć zainstalowany Windows Messenger, aby użyć tej funkcji.',
	'IM_MSNM_BROWSER'		=> 'Twoja przeglądarka tego nie obsługuje.',
	'IM_MSNM_CONNECT'		=> 'MSNM nie jest podłączony.\nPodłącz się do MSNM, aby kontynuować.',
	'IM_NAME'				=> 'Twoja nazwa',
	'IM_NO_DATA'			=> 'Nie ma odpowiednich informacji kontaktowych dla tego użytkownika.',
	'IM_NO_JABBER'			=> 'Przepraszamy, ale bezpośrednie wysyłanie wiadomości do użytkowników sieci Jabber nie jest możliwe na tym forum. Aby skontaktować się z powyższą osobą, musisz mieć w systemie zainstalowanego klienta sieci Jabber.',
	'IM_RECIPIENT'			=> 'Odbiorca',
	'IM_SEND'				=> 'Wyślij',
	'IM_SEND_MESSAGE'		=> 'Wyślij wiadomość',
	'IM_SENT_JABBER'		=> 'Wiadomość do użytkownika %1$s została wysłana.',
	'IM_USER'				=> 'Wyślij wiadomość',

	'LAST_ACTIVE'				=> 'Ostatnia aktywność',
	'LESS_THAN'					=> 'Mniej niż',
	'LIST_USER'					=> 'Użytkownicy: 1',
	'LIST_USERS'				=> 'Użytkownicy: %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Aby obejrzeć listę ekipy musisz się zalogować.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Aby obejrzeć listę użytkowników musisz się zalogować.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Aby szukać użytkowników musisz się zalogować.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Aby oglądać profile musisz się zalogować.',

	'MORE_THAN'				=> 'Więcej niż',

	'NO_EMAIL'				=> 'Nie masz wystarczających uprawnień, żeby wysłać wiadomość do tego użytkownika.',
	'NO_VIEW_USERS'			=> 'Nie masz wystarczających uprawnień, żeby przeglądać listę użytkowników i profile.',

	'ORDER'					=> '',
	'OTHER'					=> 'Inny',

	'POST_IP'				=> 'Napisano z IP/domeny',

	'RANK'					=> 'Ranga',
	'REAL_NAME'				=> 'Nazwa odbiorcy',
	'RECIPIENT'				=> 'Odbiorca',
	'REMOVE_FOE'			=> 'Usuń wroga',
	'REMOVE_FRIEND'			=> 'Usuń przyjaciela',

	'SEARCH_USER_POSTS'		=> 'Znajdź posty użytkownika',
	'SELECT_MARKED'			=> 'Dodaj wybranych',
	'SELECT_SORT_METHOD'	=> 'Sortuj wg',
	'SEND_AIM_MESSAGE'		=> 'Wyślij wiadomość AIM',
	'SEND_ICQ_MESSAGE'		=> 'Wyślij wiadomość ICQ',
	'SEND_IM'				=> 'Błyskawiczne wiadomości',
	'SEND_JABBER_MESSAGE'	=> 'Wyślij wiadomość Jabber',
	'SEND_MESSAGE'			=> 'Wiadomość',
	'SEND_MSNM_MESSAGE'		=> 'Wyślij wiadomość MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Wyślij wiadomość YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Ostatnia aktywność',
	'SORT_POST_COUNT'		=> 'Liczba postów',

	'USERNAME_BEGINS_WITH'	=> 'Nazwa użytkownika zaczyna się na',
	'USER_ADMIN'			=> 'Zarządzaj użytkownikiem',
	'USER_BAN'				=> 'Zbanuj',
	'USER_FORUM'			=> 'Statystyki użytkownika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Nie wysłano żadnego przypomnienia',
		1		=> '%1$d. przypomnienie wysłane<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Obecność na forum',

	'VIEWING_PROFILE'		=> 'Profil użytkownika %s',
	'VISITED'				=> 'Ostatnia wizyta',

	'WWW'					=> 'WWW',
));

?>