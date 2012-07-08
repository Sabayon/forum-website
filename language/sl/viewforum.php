<?php
/**
*
* viewforum.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-09-08 - KoMar, mitja_i, NoBody, nSk, Razor, Tody, Veron
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
	'ACTIVE_TOPICS'	=> 'Aktivne teme',
	'ANNOUNCEMENTS'	=> 'Razglas',
	'FORUM_PERMISSIONS'	=> 'Dovoljenja foruma',
	'ICON_ANNOUNCEMENT'	=> 'Razglas',
	'ICON_STICKY'	=> 'Lepljivek',
	'LOGIN_NOTIFY_FORUM'	=> 'Dobili ste opozorilo glede tega foruma, prosimo prijavite se, da si ga lahko ogledate.',
	'MARK_TOPICS_READ'	=> 'Označi teme kot prebrane',
	'NEW_POSTS_HOT'	=> 'Novi prispevki [Popularno]',
	'NEW_POSTS_LOCKED'	=> 'Novi prispevki [Zaklenjeno]',
	'NO_NEW_POSTS_HOT'	=> 'Ni novih prispevkov [Popularno]',
	'NO_NEW_POSTS_LOCKED'	=> 'Ni novih prispevkov [Zaklenjeno]',
	'NO_READ_ACCESS'	=> 'Nimate potrebnih dovoljenj za ogled tem v tem forumu.',
	'POST_FORUM_LOCKED'	=> 'Forum je zaklenjen',
	'TOPICS_MARKED'	=> 'Teme v tem forumu so sedaj označene kot prebrane.',
	'VIEW_FORUM'	=> 'Ogled foruma',
	'VIEW_FORUM_TOPIC'	=> 'ena tema',
	'VIEW_FORUM_TOPICS'	=> '%d tem',
));

?>