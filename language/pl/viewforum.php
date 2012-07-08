<?php
/**
*
* viewforum [Polski]
*
* @package language
* @version $Id: viewforum.php 8479.1 2009-02-23 Ronnie $
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
	'ACTIVE_TOPICS'			=> 'Aktywne wątki',
	'ANNOUNCEMENTS'			=> 'Ogłoszenia',

	'FORUM_PERMISSIONS'		=> 'Twoje prawa w tym dziale',

	'ICON_ANNOUNCEMENT'		=> 'Ogłoszenie',
	'ICON_STICKY'			=> 'Przyklejony',

	'LOGIN_NOTIFY_FORUM'	=> 'Zostałeś powiadomiony o tym dziale, zaloguj się, aby go przejrzeć.',

	'MARK_TOPICS_READ'		=> 'Oznacz wątki jako przeczytane',

	'NEW_POSTS_HOT'			=> 'Nowe posty [ Popularne ]',
	'NEW_POSTS_LOCKED'		=> 'Nowe posty [ Zablokowane ]',
	'NO_NEW_POSTS_HOT'		=> 'Brak nowych postów [ Popularne ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Brak nowych postów [ Zablokowane ]',
	'NO_READ_ACCESS'		=> 'Nie masz uprawnień do czytania wątków w tym dziale.',

	'POST_FORUM_LOCKED'		=> 'Ten dział jest zablokowany',

	'TOPICS_MARKED'			=> 'Wątki w tym dziale oznaczono jako przeczytane.',

	'VIEW_FORUM'			=> 'Zobacz dział',
	'VIEW_FORUM_TOPIC'		=> 'Wątki: 1',
	'VIEW_FORUM_TOPICS'		=> 'Wątki: %d',
));

?>