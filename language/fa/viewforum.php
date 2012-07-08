<?php
/**
*
* viewforum [Farsi]
*
* @package language
* @version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 acydburn Exp $
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
	'ACTIVE_TOPICS'			=> 'مباحث فعال',
	'ANNOUNCEMENTS'			=> 'اعلان ها',

	'FORUM_PERMISSIONS'		=> 'سطوح دسترسي انجمن',

	'ICON_ANNOUNCEMENT'		=> 'اعلان',
	'ICON_STICKY'			=> 'مهم',

	'LOGIN_NOTIFY_FORUM'	=> 'شما اطلاعاتي درباره اين انجمن نياز داريد ، لطفا وارد شويد و آنرا مشاهده کنيد.',

	'MARK_TOPICS_READ'		=> 'نشانه گذاري مبحث ها بعنوان خوانده شده',

	'NEW_POSTS_HOT'			=> 'پست هاي جديد (محبوب)',
	'NEW_POSTS_LOCKED'		=> 'پست هاي جديد (بسته است)',
	'NO_NEW_POSTS_HOT'		=> 'بدون پست جديد (محبوب)',
	'NO_NEW_POSTS_LOCKED'	=> 'بدون پست جديد (بسته است)',
	'NO_READ_ACCESS'		=> 'شما اجازه خواندن مبحث ها را در اين انجمن نداريد.',

	'POST_FORUM_LOCKED'		=> 'انجمن بسته است',

	'TOPICS_MARKED'			=> 'مبحث هاي اين انجمن بعنوان خوانده شده نشانه گذاري شدند.',

	'VIEW_FORUM'			=> 'مشاهده انجمن',
	'VIEW_FORUM_TOPIC'		=> '1 مبحث',
	'VIEW_FORUM_TOPICS'		=> '%d مبحث',
));

?>