<?php
/**
*
* viewforum [Arabic] - Translated by phpBBArabia.com
*
* @package language
* @version $Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACTIVE_TOPICS'			=> 'مواضيع نشطة',
	'ANNOUNCEMENTS'			=> 'إعلانات',
	
	'FORUM_PERMISSIONS'		=> 'صلاحيات الساحة',
	
	'ICON_ANNOUNCEMENT'		=> 'إعلان',
	'ICON_STICKY'			=> 'مثبت',
	
	'LOGIN_NOTIFY_FORUM'	=> 'لديك تنبيه حول هذه الساحة رجاءً سجل الدخول للاطلاع عليه',
	
	'MARK_TOPICS_READ'		=> 'اعتبر المواضيع مقروءة',
	
	'NEW_POSTS_HOT'			=> 'مشاركات جديدة [ نشط ]',
	'NEW_POSTS_LOCKED'		=> 'مشاركات جديدة [ مغلق ]',
	'NO_NEW_POSTS_HOT'		=> 'لا مشاركات جديدة [ نشط ]',
	'NO_NEW_POSTS_LOCKED'	=> 'لا مشاركات جديدة [ مغلق ]',
	'NO_READ_ACCESS'		=> 'ليس لديك الصلاحية للاطلاع على هذه الساحة',
	
	'POST_FORUM_LOCKED'		=> 'هذه الساحة مغلقة',
	
	'TOPICS_MARKED'			=> 'المواضيع كلها في هذه الساحة عُدّت مقروءة',
	
	'VIEW_FORUM'			=> 'مشاهدة الساحة',
	'VIEW_FORUM_TOPIC'		=> 'موضوع واحد',
	'VIEW_FORUM_TOPICS'		=> '%d مواضيع',
));

?>