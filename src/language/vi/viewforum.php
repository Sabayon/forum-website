<?php
/** 
*
* viewforum [Vietnamese]
*
* @package language
* @version $Id: viewforum.php 15 2008-12-13 10:45:00Z nedka $
* @copyright (c) 2006, 2008 nedka (Nguyen Dang Khoa)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* Vietnamese Language Pack for phpBB3
*
* phpBB iVN (phpBB in Vietnamese) Project
* Translated by nedka (Nguyen Dang Khoa) - http://www.vinabb.com/
* Submited to phpBB3.0.5 June 24,2009 - http://phpbasic.com/
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
	'ACTIVE_TOPICS'			=> 'Chủ đề sôi nổi',
	'ANNOUNCEMENTS'			=> 'Thông báo',

	'FORUM_PERMISSIONS'		=> 'Cấp phép chuyên mục',

	'ICON_ANNOUNCEMENT'		=> 'Thông báo',
	'ICON_STICKY'			=> 'Chú ý',

	'LOGIN_NOTIFY_FORUM'	=> 'Hãy vui lòng đăng nhập để xem chuyên mục này.',

	'MARK_TOPICS_READ'		=> 'Đánh dấu đã xem tất cả chủ đề',

	'NEW_POSTS_HOT'			=> 'Có bài viết mới [ Nhiều người xem ]',
	'NEW_POSTS_LOCKED'		=> 'Có bài viết mới [ Đã khóa ]',
	'NO_NEW_POSTS_HOT'		=> 'Không có bài viết mới [ Nhiều người xem ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Không có bài viết mới [ Đã khóa ]',
	'NO_READ_ACCESS'		=> 'Bạn không được cấp phép để xem các chủ đề trong chuyên mục này.',

	'POST_FORUM_LOCKED'		=> 'Chuyên mục đã bị khóa',

	'TOPICS_MARKED'			=> 'Những chủ đề trong chuyên mục này đã được đánh dấu xem rồi.',

	'VIEW_FORUM'			=> 'Xem chuyên mục',
	'VIEW_FORUM_TOPIC'		=> '1 chủ đề',
	'VIEW_FORUM_TOPICS'		=> '%d chủ đề',
));

?>