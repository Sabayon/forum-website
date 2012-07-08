<?php
/**
*
* viewtopic.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-11-27 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB, Legoless
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
	'COLLAPSE_QR'	=> 'Skrij Odgovori hitro',
	'FULL_EDITOR'	=> 'Celoten urejevalnik',
	'QUICKREPLY'	=> 'Odgovori hitro',
	'SHOW_QR'	=> 'Odgovori hitro',
	'BOOKMARK_ERR'	=> 'Dodajanje teme med zaznamke ni uspelo. Poskusite ponovno.',
	'ATTACHMENT'	=> 'Priloga',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Dodajanje prilog je onemogočeno.',
	'BOOKMARK_ADDED'	=> 'Tema dodana med zaznamke.',
	'BOOKMARK_REMOVED'	=> 'Zaznamek odstranjen.',
	'BOOKMARK_TOPIC'	=> 'Zaznamuj temo',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Odzaznamuj temo',
	'BUMPED_BY'	=> 'Zadnjič obnovil %1$s, dne %2$s.',
	'BUMP_TOPIC'	=> 'Obnovi temo',
	'CODE'	=> 'Koda',
	'DELETE_TOPIC'	=> 'Izbriši temo',
	'DOWNLOAD_NOTICE'	=> 'Nimate dovoljenj za ogled prilog tega prispevka.',
	'EDITED_TIMES_TOTAL'	=> 'Zadnjič spremenil %1$s, dne %2$s, skupaj popravljeno %3$d krat.',
	'EDITED_TIME_TOTAL'	=> 'Zadnjič spremenil %1$s, dne %2$s, skupaj popravljeno %3$d krat.',
	'EMAIL_TOPIC'	=> 'Povej prijatelju',
	'ERROR_NO_ATTACHMENT'	=> 'Izbrana priponka ne obstaja.',
	'FILE_NOT_FOUND_404'	=> 'Datoteka <strong>%s</strong> ne obstaja.',
	'FORK_TOPIC'	=> 'Kopiraj temo',
	'LINKAGE_FORBIDDEN'	=> 'Nimate dovoljenj za ogled, presnemavanje ali delanje povezav na in iz teh strani.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Bili ste opozorjeni glede te teme, prosimo, prijavite se za ogled.',
	'LOGIN_VIEWTOPIC'	=> 'Za ogled te teme morate biti registrirani in prijavljeni.',
	'MAKE_ANNOUNCE'	=> 'Spremeni v “razglas”',
	'MAKE_GLOBAL'	=> 'Spremeni v “splošno”',
	'MAKE_NORMAL'	=> 'Spremeni v “običajno temo”',
	'MAKE_STICKY'	=> 'Spremeni v “lepljivek”',
	'MAX_OPTIONS_SELECT'	=> 'Izberete lahko največ <strong>%d</strong> možnosti',
	'MAX_OPTION_SELECT'	=> 'Izberete lahko le <strong>eno</strong> možnost',
	'MISSING_INLINE_ATTACHMENT'	=> 'Priponka <strong>%s</strong> ni več na voljo',
	'MOVE_TOPIC'	=> 'Premakni temo',
	'NO_ATTACHMENT_SELECTED'	=> 'Niste izbrali priponke za prenos ali ogled.',
	'NO_NEWER_TOPICS'	=> 'V tem forumu ni novejših tem.',
	'NO_OLDER_TOPICS'	=> 'V tem forumu ni starejših tem.',
	'NO_UNREAD_POSTS'	=> 'V tej temi ni novih neprebranih prispevkov.',
	'NO_VOTE_OPTION'	=> 'Ko glasujete, morate izbrati eno možnost.',
	'NO_VOTES'	=> 'Brez glasov',
	'POLL_ENDED_AT'	=> 'Glasovanje se je zaključilo dne %s',
	'POLL_RUN_TILL'	=> 'Glasovanje traja do %s',
	'POLL_VOTED_OPTION'	=> 'Glasovali ste za to možnost',
	'PRINT_TOPIC'	=> 'Pogled tiskanja',
	'QUICK_MOD'	=> 'Orodja za hitro spreminjanje',
	'QUOTE'	=> 'Citiram',
	'REPLY_TO_TOPIC'	=> 'Odgovori na temo',
	'RETURN_POST'	=> '%sVračanje na prispevek%s',
	'SUBMIT_VOTE'	=> 'Pošlji glas',
	'TOTAL_VOTES'	=> 'Skupaj glasov',
	'UNLOCK_TOPIC'	=> 'Odkleni temo',
	'VIEW_INFO'	=> 'Podrobnosti prispevka',
	'VIEW_NEXT_TOPIC'	=> 'Naslednja tema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Prejšnja tema',
	'VIEW_RESULTS'	=> 'Glej rezultate',
	'VIEW_TOPIC_POST'	=> '1 prispevek',
	'VIEW_TOPIC_POSTS'	=> '%d prispevkov',
	'VIEW_UNREAD_POST'	=> 'Prvi neprebran prispevek',
	'VISIT_WEBSITE'	=> 'WWW',
	'VOTE_SUBMITTED'	=> 'Vaš glas je bil sprejet.',
	'VOTE_CONVERTED'	=> 'Pri pretvorjenih anketah sprememba glasov ni mogoča.',
));

?>