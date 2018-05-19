<?php
/**
*
* acp_groups [Polski]
*
* @package language
* @version $Id: groups.php 9701 2009-09-27 LEW21 $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Tutaj możesz zarządzać grupami użytkowników. Możesz tworzyć, usuwać i zmieniać istniejące grupy. Możesz też przyjmować i usuwać członków oraz wybierać i dymisjonować liderów grup.',
	'ADD_USERS'						=> 'Dodaj użytkowników',
	'ADD_USERS_EXPLAIN'				=> 'Tutaj możesz dodać nowych członków grupy. Możesz wybrać czy ma się ona stać ich domyślną grupą i czy mają się stać jej liderami. Każdą nazwę użytkownika podaj w osobnej linii.',

	'COPY_PERMISSIONS'				=> 'Skopiuj uprawnienia z',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Po utworzeniu grupa będzie miała takie same uprawnienia jak ta wybrana tutaj. <strong>UWAGA! Kopiowanie uprawnień z grupy „Zarejestrowani użytkownicy” nie ma sensu - wszyscy użytkownicy i tak mają uprawnienia przyznane tej grupie.</strong>',
	'CREATE_GROUP'					=> 'Utwórz grupę',

	'GROUPS_NO_MEMBERS'				=> 'Ta grupa nie ma członków',
	'GROUPS_NO_MODS'				=> 'Ta grupa nie ma liderów',

	'GROUP_APPROVE'					=> 'Przyjmij użytkownika',
	'GROUP_APPROVED'				=> 'Członkowie',
	'GROUP_AVATAR'					=> 'Avatar grupy',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ten obrazek będzie wyświetlany na stronie o tej grupie.',
	'GROUP_CLOSED'					=> 'zamknięta',
	'GROUP_COLOR'					=> 'Kolor grupy',
	'GROUP_COLOR_EXPLAIN'			=> 'Ustawia, jaki kolor będą mieć nazwy użytkowników, którzy <strong>mają tę grupę ustawioną jako domyślną</strong>. Pozostaw puste dla standardowego koloru.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Czy jesteś pewien, że chcesz przyjąć użytkownika %s do tej grupy?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Czy jesteś pewien, że chcesz przyjąć użytkowników %s do tej grupy?',
	'GROUP_CREATED'					=> 'Grupa została utworzona.',
	'GROUP_DEFAULT'					=> 'Ustaw jako domyślną',
	'GROUP_DEFS_UPDATED'			=> 'Grupa została ustawiona jako domyślna dla wybranych użytkowników.',
	'GROUP_DELETE'					=> 'Usuń z grupy',
	'GROUP_DELETED'					=> 'Grupa została usunięta, a domyślne grupy użytkowników przypisane ponownie.',
	'GROUP_DEMOTE'					=> 'Zdymisjonuj lidera grupy',
	'GROUP_DESC'					=> 'Opis grupy',
	'GROUP_DETAILS'					=> 'Szczegóły grupy',
	'GROUP_EDIT_EXPLAIN'			=> 'Tutaj możesz zmienić istniejącą grupę. Możesz zmienić jej nazwę, opis i typ (otwarta, zamknięta itp.) Możesz też zmienić opcje członków grupy, takie jak ich kolor, ranga itp. Zmiany w tym panelu nadpiszą aktualne ustawienia użytkowników. <strong>Członkowie grupy mogą nadpisać wybrany tu avatar, chyba że odbierzesz im uprawnienia do tego.</strong>',
	'GROUP_ERR_USERS_EXIST'			=> 'Wybrani użytkownicy należą już do tej grupy.',
	'GROUP_FOUNDER_MANAGE'			=> 'Zarządzać może tylko założyciel',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Odbiera możliwość zarządzania tą grupą wszystkim oprócz założyciela(i) forum. Użytkownicy posiadający odpowiednie uprawnienia nadal będą mogli widzieć ją i jej członków.',
	'GROUP_HIDDEN'					=> 'ukryta',
	'GROUP_LANG'					=> 'Język grupy',
	'GROUP_LEAD'					=> 'Liderzy grupy',
	'GROUP_LEADERS_ADDED'			=> 'Dodano nowych liderów grupy.',
	'GROUP_LEGEND'					=> 'Wyświetl grupę w legendzie',
	'GROUP_LIST'					=> 'Aktualni członkowie',
	'GROUP_LIST_EXPLAIN'			=> 'Jest to pełna lista wszystkich użytkowników należących do tej grupy. Jeśli chcesz, możesz dodawać nowych członków lub usuwać starych. Chyba że jest to grupa specjalna - członków grup specjalnych usuwać tutaj nie można.',
	'GROUP_MEMBERS'					=> 'Członkowie grupy',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Jest to pełna lista członków tej grupy. Jest podzielona na osobne sekcje dla liderów, członków i proszących o przyjęcie użytkowników.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limit prywatnych wiadomości w folderze',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'To ustawienie nadpisuje ustawienie domyślne, ustaw na 0, aby go nie nadpisywać.',
	'GROUP_MODS_ADDED'				=> 'Lider(zy) grupy został(li) dodany(i).',
	'GROUP_MODS_DEMOTED'			=> 'Lider(zy) grupy został(li) zdymisjonowany(i).',
	'GROUP_MODS_PROMOTED'			=> 'Członek(owie) grupy został(li) awansowany(i) na lidera(ów).',
	'GROUP_NAME'					=> 'Nazwa grupy',
	'GROUP_NAME_TAKEN'				=> 'Grupa o podanej nazwie już istnieje, wybierz inną.',
	'GROUP_OPEN'					=> 'otwarta',
	'GROUP_PENDING'					=> 'Oczekujący na przyjęcie',
	'GROUP_MAX_RECIPIENTS'			=> 'Limit liczby odbiorców PW',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maksymalna liczba odbiorców, do których można wysłać jedną prywatną wiadomość. 0 powoduje użycie wartości globalnej.',
	'GROUP_OPTIONS_SAVE'			=> 'Ustawienia całej grupy',
	'GROUP_PROMOTE'					=> 'Awansuj na lidera grupy',
	'GROUP_RANK'					=> 'Ranga grupy',
	'GROUP_RECEIVE_PM'				=> 'Grupa może otrzymywać PW',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Niezależnie od tego ustawienia wysyłanie prywatnych wiadomości do grup ukrytych nie jest możliwe.',
	'GROUP_REQUEST'					=> 'wymagana akceptacja nowych',
	'GROUP_SETTINGS_SAVE'			=> 'Ustawienia członków grupy',
	'GROUP_SKIP_AUTH'				=> 'Wyłącz liderów grupy z uprawnień',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Jeśli włączone, liderzy grupy nie otrzymują uprawnień przyznanych grupie.',
	'GROUP_TYPE'					=> 'Typ grupy',
	'GROUP_TYPE_EXPLAIN'			=> 'Określa czy użytkownicy mogą widzieć tę grupę i czy mogą się przyłączyć.',
	'GROUP_UPDATED'					=> 'Ustawienia grupy zostały zmienione.',

	'GROUP_USERS_ADDED'				=> 'Użytkownicy zostali dodani do grupy.',
	'GROUP_USERS_EXIST'				=> 'Wybrani użytkownicy należą już do grupy.',
	'GROUP_USERS_REMOVE'			=> 'Użytkownicy zostali usunięci z grupy, a ich domyślne grupy przypisane ponownie.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Ustaw jako domyślną dla wszystkich członków',
	'MEMBERS'				=> 'Członkowie',

	'NO_GROUP'					=> 'Nie podałeś/aś grupy.',
	'NO_GROUPS_CREATED'			=> 'Nie utworzono żadnej grupy.',
	'NO_PERMISSIONS'			=> 'Nie kopiuj uprawnień',
	'NO_USERS'					=> 'Nie podałeś/aś żadnych użytkowników.',
	'NO_USERS_ADDED'			=> 'Nie dodano żadnych użytkowników do grupy.',
	'NO_VALID_USERS'			=> 'Nie podałeś/aś żadnych użytkowników odpowiednich dla tej akcji.',

	'SPECIAL_GROUPS'			=> 'Grupy predefiniowane',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Są to specjalne grupy, których nie można usunąć ani zmodyfikować niektórych ich ustawień. Możesz tylko zarządzać listami ich członków oraz zmienić część ustawień.',

	'TOTAL_MEMBERS'				=> 'Liczba członków',

	'USERS_APPROVED'				=> 'Użytkownicy zostali zaakceptowani.',
	'USER_DEFAULT'					=> 'Domyślna',
	'USER_DEF_GROUPS'				=> 'Własne grupy',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Są to grupy utworzone przez Ciebie albo innego administratora forum. Możesz zarządzać listami ich członków, zmieniać ich ustawienia, a nawet je usuwać.',
	'USER_GROUP_DEFAULT'			=> 'Ustaw jako domyślną grupę',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Wybranie „tak” spowoduje ustawienie tej grupy jako domyślną dla dodawanych użytkowników.',
	'USER_GROUP_LEADER'				=> 'Ustaw jako lidera(ów) grupy',
));

?>