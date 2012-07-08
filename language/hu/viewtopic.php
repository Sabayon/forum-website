<?php
/**
*
* viewtopic [Hungarian]
*
* @package language
* @version $Id: viewtopic.php 201 2009-10-19 21:31:20Z fberci $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ATTACHMENT'						=> 'Csatolmány',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'A csatolmány funkciók nem elérhetők.',

	'BOOKMARK_ADDED'		=> 'A téma sikeresen hozzáadásra került a kedvencekhez.',
	'BOOKMARK_ERR'			=> 'A témát nem sikerült hozzáadni a kedvencekhez. Kérünk, próbálkozz újra.',
	'BOOKMARK_REMOVED'		=> 'A téma sikeresen eltávolításra került a kedvencekből.',
	'BOOKMARK_TOPIC'		=> 'Hozzáadás a kedvencekhez',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Törlés a kedvencekből',
	'BUMPED_BY'				=> 'Utoljára %1$s ugrasztotta előre %2$s-kor.',
	'BUMP_TOPIC'			=> 'Előreugrasztás',

	'CODE'					=> 'Kód',
	'COLLAPSE_QR'			=> 'Gyors válasz elrejtése',

	'DELETE_TOPIC'			=> 'Téma törlése',
	'DOWNLOAD_NOTICE'		=> 'Nincs meg a kellő jogosultságod a hozzászóláshoz csatolt állományok megtekintéséhez.',

	'EDITED_TIMES_TOTAL'	=> 'A hozzászólást %3$d alkalommal szerkesztették, utoljára %1$s %2$s-kor.',
	'EDITED_TIME_TOTAL'		=> 'A hozzászólást %3$d alkalommal szerkesztették, utoljára %1$s %2$s-kor.',
	'EMAIL_TOPIC'			=> 'Barát értesítése e-mailben',
	'ERROR_NO_ATTACHMENT'	=> 'A csatolmány már nem létezik.',

	'FILE_NOT_FOUND_404'	=> 'A <strong>%s</strong> fájl nem létezik.',
	'FORK_TOPIC'			=> 'Téma másolása',
	'FULL_EDITOR'			=> 'Teljes szerkesztő',

	'LINKAGE_FORBIDDEN'		=> 'Nem vagy jogosult az oldalt megtekinteni, letölteni róla vagy linkelni rá.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Értesítve lettél erről a témáról. Lépj be, hogy megtekinthesd.',
	'LOGIN_VIEWTOPIC'		=> 'A téma megtekintéséhez be kell jelentkezned.',

	'MAKE_ANNOUNCE'				=> 'Közleménnyé tétel',
	'MAKE_GLOBAL'				=> 'Globális közleménnyé tétel',
	'MAKE_NORMAL'				=> 'Normál témává tétel',
	'MAKE_STICKY'				=> 'Kiemeltté tétel',
	'MAX_OPTIONS_SELECT'		=> '<strong>%d</strong> választási lehetőségre szavazhatsz.',
	'MAX_OPTION_SELECT'			=> '<strong>1</strong> választási lehetőségre szavazhatsz.',
	'MISSING_INLINE_ATTACHMENT'	=> 'A <strong>%s</strong> csatolmány már nem érhető el.',
	'MOVE_TOPIC'				=> 'Téma áthelyezése',

	'NO_ATTACHMENT_SELECTED'=> 'Nem választottál ki csatolmányt a letöltéshez vagy megtekintéshez.',
	'NO_NEWER_TOPICS'		=> 'Nincs újabb téma a fórumban.',
	'NO_OLDER_TOPICS'		=> 'Nincs régebbi téma a fórumban.',
	'NO_UNREAD_POSTS'		=> 'Nincs új olvasatlan hozzászólás a témában.',
	'NO_VOTE_OPTION'		=> 'A szavazáshoz meg kell adnod egy választási lehetőséget.',
	'NO_VOTES'				=> '0 szavazat',

	'POLL_ENDED_AT'			=> 'A szavazás %s-kor befejeződött.',
	'POLL_RUN_TILL'			=> 'A szavazás %s-ig van érvényben.',
	'POLL_VOTED_OPTION'		=> 'Erre a lehetőségre szavaztál',
	'PRINT_TOPIC'			=> 'Nyomtatóbarát verzió',

	'QUICK_MOD'				=> 'Gyors moderátori eszközök',
	'QUICKREPLY'			=> 'Gyors válasz',
	'QUOTE'					=> 'Idézet',

	'REPLY_TO_TOPIC'		=> 'Hozzászólás a témához',
	'RETURN_POST'			=> '%sVissza a hozzászóláshoz%s',
	'SHOW_QR'				=> 'Gyors válasz',

	'SUBMIT_VOTE'			=> 'Szavazat elküldése',

	'TOTAL_VOTES'			=> 'Szavazatok száma',

	'UNLOCK_TOPIC'			=> 'Téma megnyitása',

	'VIEW_INFO'				=> 'Hozzászólás adatai',
	'VIEW_NEXT_TOPIC'		=> 'Következő téma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Előző téma',
	'VIEW_RESULTS'			=> 'Eredmény megtekintése',
	'VIEW_TOPIC_POST'		=> '1 hozzászólás',
	'VIEW_TOPIC_POSTS'		=> '%d hozzászólás',
	'VIEW_UNREAD_POST'		=> 'Első olvasatlan hozzászólás',
	'VISIT_WEBSITE'			=> 'Honlap',
	'VOTE_SUBMITTED'		=> 'A szavazatod sikeresen eltárolásra került.',
	'VOTE_CONVERTED'		=> 'A szavazatváltoztatás konvertált szavazásoknál nem támogatott.',
));

?>
