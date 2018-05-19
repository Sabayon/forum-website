<?php
/**
*
* viewforum.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-26 - www.dea-portal.com
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
	'ACTIVE_TOPICS'			=> 'Temat Aktive',
	'ANNOUNCEMENTS'			=> 'Lajmërimet',
	
	'FORUM_PERMISSIONS'		=> 'Autorizimet e forumit',
	
	'ICON_ANNOUNCEMENT'		=> 'Lajmërime',
	'ICON_STICKY'			=> 'Kryetemë',
	
	'LOGIN_NOTIFY_FORUM'	=> 'Ju jeni njoftuar rreth këtij forumi, ju lutemi idendtifikohuni që t\'a shikoni atë.',
	
	'MARK_TOPICS_READ'		=> 'Shëno Temat si të Lexuara',
	
	'NEW_POSTS_HOT'			=> 'Postimi ri [ Populluar ]',
	'NEW_POSTS_LOCKED'		=> 'Postimi ri [ Mbyllur ]',
	'NO_NEW_POSTS_HOT'		=> 'Pa postime të reja [ Populluar ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Pa postime të reja [ Mbyllur ]',
	'NO_READ_ACCESS'		=> 'Ju nuk keni të drejtat e duhura për të lexuar këtë tëmë në këtë forum.',
	
	'POST_FORUM_LOCKED'		=> 'Forumi është i mbyllur',
	
	'TOPICS_MARKED'			=> 'Temat e këtij forumi janë shënuar si të lexuara.',
	
	'VIEW_FORUM'			=> 'Shiko forumin',
	'VIEW_FORUM_TOPIC'		=> '1 temë',
	'VIEW_FORUM_TOPICS'		=> '%d tema',
));

?>