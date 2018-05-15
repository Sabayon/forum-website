<?php
/**
*
* groups [Polski]
*
* @package language
* @version $Id: groups.php 8479.1 2009-03-17 Ronnie $
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
	'ALREADY_DEFAULT_GROUP'				=> 'Wybrana grupa jest już Twoją grupą domyślną.',
	'ALREADY_IN_GROUP'					=> 'Należysz już do wybranej grupy.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Już poprosiłeś o przyjęcie do wybranej grupy.',

	'CANNOT_JOIN_GROUP'					=> 'Nie możesz dołączyć się do tej grupy. Możesz dołączać się tylko do grup otwartych oraz tych, które wymagają akceptacji członków przez lidera.',
	'CANNOT_RESIGN_GROUP'				=> 'Nie możesz opuścić tej grupy. Możesz opuszczać tylko grupy otwarte oraz te, które wymagają akceptacji członków przez lidera.',
	'CHANGED_DEFAULT_GROUP'				=> 'Zmieniono domyślną grupę.',

	'GROUP_AVATAR'						=> 'Avatar grupy',
	'GROUP_CHANGE_DEFAULT'				=> 'Czy na pewno chcesz zmienić domyślną grupę na „%s”?',
	'GROUP_CLOSED'						=> 'Zamknięta',
	'GROUP_DESC'						=> 'Opis grupy',
	'GROUP_HIDDEN'						=> 'Ukryta',
	'GROUP_INFORMATION'					=> 'Informacja o grupie',
	'GROUP_IS_CLOSED'					=> 'To jest grupa zamknięta, więc nowi użytkownicy mogą do niej dołączyć tylko dzięki zaproszeniu od lidera.',
	'GROUP_IS_FREE'						=> 'To jest grupa całkowicie otwarta, każdy może do niej dołączyć.',
	'GROUP_IS_HIDDEN'					=> 'To jest ukryta grupa, tylko jej członkowie mogą ją zobaczyć',
	'GROUP_IS_OPEN'						=> 'To jest grupa otwarta. Możesz zgłosić chęć uczestnictwa w niej.',
	'GROUP_IS_SPECIAL'					=> 'To jest grupa specjalna, grupy specjalne są zarządzane przez administratora.',
	'GROUP_JOIN'						=> 'Dołącz do grupy',
	'GROUP_JOIN_CONFIRM'				=> 'Czy na pewno chcesz dołączyć do wybranej grupy?',
	'GROUP_JOIN_PENDING'				=> 'Poproś o przyjęcie do grupy',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Czy na pewno chcesz poprosić o przyjęcie do wybranej grupy?',
	'GROUP_JOINED'						=> 'Dołączyłeś do wybranej grupy.',
	'GROUP_JOINED_PENDING'				=> 'Poprosiłeś o przyjęcie do wybranej grupy. Poczekaj na decyzję lidera grupy.',
	'GROUP_LIST'						=> 'Zarządzaj członkami',
	'GROUP_MEMBERS'						=> 'Członkowie',
	'GROUP_NAME'						=> 'Nazwa',
	'GROUP_OPEN'						=> 'Otwarta',
	'GROUP_RANK'						=> 'Ranga',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Zrezygnuj z członkowstwa',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Czy na pewno chcesz zrezygnować z członkostwa w wybranej grupie?',
	'GROUP_RESIGN_PENDING'				=> 'Wycofaj prośbę o przyjęcie',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Czy na pewno chcesz wycofać prośbę o przyjęcie do wybranej grupy?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Zrezygnowałeś z członkostwa w wybranej grupie.',
	'GROUP_RESIGNED_PENDING'			=> 'Wycofałeś prośbę o przyjęcie do wybranej grupy.',
	'GROUP_TYPE'						=> 'Typ',
	'GROUP_UNDISCLOSED'					=> 'Ukryta',
	'FORUM_UNDISCLOSED'					=> 'Moderuje ukryte działy',

	'LOGIN_EXPLAIN_GROUP'				=> 'Musisz się zalogować, aby zobaczyć opis grupy.',

	'NO_LEADERS'						=> 'Nie jesteś liderem żadnej grupy.',
	'NOT_LEADER_OF_GROUP'				=> 'Nie można kontynuować operacji, ponieważ nie jesteś liderem grupy.',
	'NOT_MEMBER_OF_GROUP'				=> 'Nie można kontynuować operacji, ponieważ nie jesteś członkiem grupy lub Twoje członkostwo nie zostało jeszcze zaakceptowane.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Nie możesz zrezygnować z członkostwa w Twojej domyślnej grupie.',

	'PRIMARY_GROUP'						=> 'Podstawowa grupa',

	'REMOVE_SELECTED'					=> 'Usuń wybrane',

	'USER_GROUP_CHANGE'					=> 'Z grupy „%1$s” do „%2$s”',
	'USER_GROUP_DEMOTE'					=> 'Zrezygnuj z bycia liderem',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Czy chcesz zrezygnować z bycia liderem wybranej grupy?',
	'USER_GROUP_DEMOTED'				=> 'Przestałeś być liderem wybranej grupy.',
));

?>