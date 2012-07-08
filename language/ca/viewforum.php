<?php
/**
*
* viewforum [Catalan]
*
* @package language
* @version $Id: viewforum.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
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
	'ACTIVE_TOPICS'			=> 'Temes actius',
	'ANNOUNCEMENTS'			=> 'Avisos',

	'FORUM_PERMISSIONS'		=> 'Permisos del fòrum',

	'ICON_ANNOUNCEMENT'		=> 'Avís',
	'ICON_STICKY'			=> 'Tema recurrent',

	'LOGIN_NOTIFY_FORUM'	=> 'Se us ha informat d’aquest fòrum, si us plau inicieu la sessio per visualitzar-lo.',

	'MARK_TOPICS_READ'		=> 'Marca els temes com a llegits',

	'NEW_POSTS_HOT'			=> 'Hi ha entrades noves [ Popular ]',
	'NEW_POSTS_LOCKED'		=> 'Hi ha entrades noves [ Bloquejat ]',
	'NO_NEW_POSTS_HOT'		=> 'No hi ha entrades noves [ Popular ]',
	'NO_NEW_POSTS_LOCKED'	=> 'No hi ha entrades noves [ Bloquejat ]',
	'NO_READ_ACCESS'		=> 'No teniu els permisos necessaris per llegir els temes d’aquest fòrum.',

	'POST_FORUM_LOCKED'		=> 'El fòrum està bloquejat',

	'TOPICS_MARKED'			=> 'Els temes d’aquest fòrum s’han marcat com a llegits.',

	'VIEW_FORUM'			=> 'Mostra el fòrum',
	'VIEW_FORUM_TOPIC'		=> '1 tema',
	'VIEW_FORUM_TOPICS'		=> '%d temes',
));

?>