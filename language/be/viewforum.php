<?php
/**
*
* viewforum [Belarusian]
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
	'ACTIVE_TOPICS'			=> 'Актыўныя тэмы',
	'ANNOUNCEMENTS'			=> 'Аб\'явы',

	'FORUM_PERMISSIONS'		=> 'Правы доступу',

	'ICON_ANNOUNCEMENT'		=> 'Аб\'ява',
	'ICON_STICKY'			=> 'Прылепленая',

	'LOGIN_NOTIFY_FORUM'	=> 'Вы атрымалі апавяшчэнне аб новым паведамленні ў гэтым форуме, калі ласка, аўтарызуйцеся для яго прагляду.',

	'MARK_TOPICS_READ'		=> 'Адзначыць усе тэмы як прачытаныя',

	'NEW_POSTS_HOT'			=> 'Новыя паведамленні [ Папулярная тэма ]',
	'NEW_POSTS_LOCKED'		=> 'Новыя паведамленні [ Тэма зачыненая ]',
	'NO_NEW_POSTS_HOT'		=> 'Няма новых паведамленняў [ Папулярная тэма ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Няма новых паведамленняў [ Тэма зачыненая ]',
	'NO_READ_ACCESS'		=> 'У вас няма доступу на чытанне тэм у гэтым форуме.',

	'POST_FORUM_LOCKED'		=> 'Форум зачынены',

	'TOPICS_MARKED'			=> 'Усе тэмы ў гэтым форуме былі адзначаныя як прачытаныя.',

	'VIEW_FORUM'			=> 'Прагляд форума',
	'VIEW_FORUM_TOPIC'		=> '1 тэма',
	'VIEW_FORUM_TOPICS'		=> 'Тэм: %d',
));

?>
