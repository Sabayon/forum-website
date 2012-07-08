<?php
/**
*
* acp_users [Polski]
*
* @package language
* @version $Id: users.php 9767 2009-09-27 LEW21 $
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
	'ADMIN_SIG_PREVIEW'		=> 'Podgląd podpisu',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nie możesz odebrać sobie statusu założyciela forum, ponieważ jesteś jedynym założycielem forum. Musisz najpierw awansować na założyciela innego użytkownika.',

	'BAN_ALREADY_ENTERED'	=> 'Ban został już wcześniej nałożony, lista banów nie została zmieniona.',
	'BAN_SUCCESSFUL'		=> 'Ban został nałożony.',

	'CANNOT_BAN_FOUNDER'			=> 'Nie możesz zbanować założyciela(i).',
	'CANNOT_BAN_YOURSELF'			=> 'Nie możesz zbanować swojego konta.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nie możesz deaktywować kont botów. Zamiast tego zdeaktywuj bota poprzez zarządzanie botami.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nie możesz deaktywować założyciela(i).',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nie możesz deaktywować swojego konta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nie możesz wymusić ponownej aktywacji kont botów. Zamiast tego reaktywuj bota poprzez zarządzanie botami.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nie możesz wymusić ponownej aktywacji założyciela(i).',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nie możesz wymusić ponownej aktywacji swojego konta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Nie możesz usunąć konta gościa.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nie możesz usunąć swojego konta.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Nie możesz awansować użytkowników ignorowanych na założycieli.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Musisz aktywować użytkowników zanim mianujesz ich na stanowisko założycieli.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Musisz wypełnić to pole tylko wtedy, jeśli zmieniasz adres e-mail użytkownika.',

	'DELETE_POSTS'			=> 'Usuń posty',
	'DELETE_USER'			=> 'Usuń użytkownika',
	'DELETE_USER_EXPLAIN'	=> 'UWAGA! Tej operacji nie można cofnąć!',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Wymuszono ponowną aktywację konta.',
	'FOUNDER'						=> 'Założyciel',
	'FOUNDER_EXPLAIN'				=> 'Założyciele mają wszystkie uprawnienia administracyjne i nie mogą zostać zbanowani, usunięci ani zmodyfikowani przez nie-założycieli.',

	'GROUP_APPROVE'					=> 'Przyjmij',
	'GROUP_DEFAULT'					=> 'Ustaw jako domyślną grupę',
	'GROUP_DELETE'					=> 'Usuń z grupy',
	'GROUP_DEMOTE'					=> 'Zdymisjonuj ze stanowiska lidera',
	'GROUP_PROMOTE'					=> 'Awansuj na lidera',

	'IP_WHOIS_FOR'			=> 'IP whois dla %s',

	'LAST_ACTIVE'			=> 'Ostatnio aktywny',

	'MOVE_POSTS_EXPLAIN'	=> 'Wybierz dział, do którego chcesz przenieść wszystkie posty tego użytkownika.',

	'NO_SPECIAL_RANK'		=> 'Nie przyznano specjalnej rangi',
	'NO_WARNINGS'			=> 'Brak ostrzeżeń.',
	'NOT_MANAGE_FOUNDER'	=> 'Chciałeś zarządzać użytkownikiem o statusie założyciela. Tylko założyciele mogą zarządzać założycielami.',

	'QUICK_TOOLS'			=> 'Szybkie narzędzia',

	'REGISTERED'			=> 'Zarejestrowany',
	'REGISTERED_IP'			=> 'Zarejestrowany z IP',
	'RETAIN_POSTS'			=> 'Zachowaj posty',

	'SELECT_FORM'			=> 'Wybierz formularz',
	'SELECT_USER'			=> 'Wybierz użytkownika',

	'USER_ADMIN'					=> 'Zarządzanie użytkownikami',
	'USER_ADMIN_ACTIVATE'			=> 'Aktywuj konto',
	'USER_ADMIN_ACTIVATED'			=> 'Użytkownik został aktywowany.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar został usunięty.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Zbanuj adres e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Adres e-mail został zbanowany poprzez zarządzanie użytkownikami',
	'USER_ADMIN_BAN_IP'				=> 'Zbanuj numer IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Numer IP został zbanowany poprzez zarządzanie użytkownikami',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Użytkownik został zbanowany poprzez zarządzanie użytkownikami',
	'USER_ADMIN_BAN_USER'			=> 'Zbanuj nazwę użytkownika',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktywuj konto',
	'USER_ADMIN_DEACTIVED'			=> 'Użytkownik został deaktywowany.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Usuń wszystkie załączniki',
	'USER_ADMIN_DEL_AVATAR'			=> 'Usuń avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Usuń wiadomości do wysłania',
	'USER_ADMIN_DEL_POSTS'			=> 'Usuń wszystkie posty',
	'USER_ADMIN_DEL_SIG'			=> 'Usuń podpis',
	'USER_ADMIN_EXPLAIN'			=> 'Tutaj możesz zmienić ustawienia użytkowników.',
	'USER_ADMIN_FORCE'				=> 'Wymuś ponowną aktywację',
	'USER_ADMIN_LEAVE_NR'			=> 'Usuń z Nowych użytkowników',
	'USER_ADMIN_MOVE_POSTS'			=> 'Przenieś wszystkie posty',
	'USER_ADMIN_SIG_REMOVED'		=> 'Podpis został usunięty.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Wszystkie załączniki tego użytkownika zostały usunięte.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Nie można było wyświetlić avatara, ponieważ avatary zostały zablokowane.',
	'USER_AVATAR_UPDATED'			=> 'Ustawienia avatara zostały zmienione.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Nie można było wyświetlić aktualnego avatara, ponieważ avatary jego typu zostały zablokowane.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Własne pola profilu',
	'USER_DELETED'					=> 'Użytkownik został usunięty.',
	'USER_GROUP_ADD'				=> 'Dodaj użytkownika do grupy',
	'USER_GROUP_NORMAL'				=> 'Użytkownik należy do poniższych zwykłych grup',
	'USER_GROUP_PENDING'			=> 'Użytkownik poprosił o przyjęcie do poniższych grup',
	'USER_GROUP_SPECIAL'			=> 'Użytkownik należy do poniższych specjalnych grup',
	'USER_LIFTED_NR'				=> 'Usunięto użytkownika z grupy Nowi użytkownicy.',
	'USER_NO_ATTACHMENTS'			=> 'Użytkownik nie wysłał żadnych załączników.',
	'USER_OUTBOX_EMPTIED'			=> 'Usunięto wiadomości do wysłania przez użytkownika.',
	'USER_OUTBOX_EMPTY'				=> 'Użytkownik nie miał żadnych wiadomości do wysłania.',
	'USER_OVERVIEW_UPDATED'			=> 'Szczegóły użytkownika zostały zmienione.',
	'USER_POSTS_DELETED'			=> 'Wszystkie posty tego użytkownika zostały usunięte.',
	'USER_POSTS_MOVED'				=> 'Wszystkie posty tego użytkownika zostały przeniesione do wybranego działu.',
	'USER_PREFS_UPDATED'			=> 'Ustawienia użytkownika zostały zmienione.',
	'USER_PROFILE'					=> 'Profil użytkownika',
	'USER_PROFILE_UPDATED'			=> 'Profil użytkownika został zmieniony.',
	'USER_RANK'						=> 'Ranga użytkownika',
	'USER_RANK_UPDATED'				=> 'Ranga użytkownika została zmieniona.',
	'USER_SIG_UPDATED'				=> 'Podpis użytkownika został zmieniony.',
	'USER_WARNING_LOG_DELETED'		=> 'Brak informacji. Możliwe że wpis w logu został usunięty.',
	'USER_TOOLS'					=> 'Podstawowe narzędzia',
));

?>