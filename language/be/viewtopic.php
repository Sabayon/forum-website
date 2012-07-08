<?php
/** 
*
* viewtopic [Belarusian]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
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
	'ATTACHMENT'						=> 'Укладанне',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Функцыя ўкладанняў выключаная.',

	'BOOKMARK_ADDED'		=> 'Тэма паспяхова змешчаная ў закладкі',
	'BOOKMARK_ERR'			=> 'Спроба змясціць тэму ў закладкі не атрымалася. Паспрабуйце яшчэ раз.',
	'BOOKMARK_REMOVED'		=> 'Тэма паспяхова выдаленая з закладак.',
	'BOOKMARK_TOPIC'		=> 'У закладкі',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Выдаліць з закладак',
	'BUMPED_BY'				=> 'Апошні раз паднімалася %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Падняць тэму',

	'CODE'					=> 'Код',

	'DELETE_TOPIC'			=> 'Выдаліць тэму',
	'DOWNLOAD_NOTICE'		=> 'У вас няма доступу для прагляду ўкладанняў у гэтым паведамленні.',

	'EDITED_TIMES_TOTAL'	=> 'Апошні раз рэдагавалася %1$s %2$s, усяго рэдагавалася %3$d раз(а).',
	'EDITED_TIME_TOTAL'		=> 'Апошні раз рэдагавалася %1$s %2$s, усяго рэдагавалася %3$d раз.',
	'EMAIL_TOPIC'			=> 'Паведаміць сябру',
	'ERROR_NO_ATTACHMENT'	=> 'Вылучанае ўкладанне больш не існуе.',

	'FILE_NOT_FOUND_404'	=> 'Файл <strong>%s</strong> не існуе.',
	'FORK_TOPIC'			=> 'Капіяваць тэму',

	'LINKAGE_FORBIDDEN'		=> 'Вы не аўтарызаваныя для прагляду або запампоўкі файлаў.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Вы атрымалі апавяшчэнне аб новым паведамленні ў тэме, калі ласка, аўтарызуйцеся для яго прагляду',
	'LOGIN_VIEWTOPIC'		=> 'Для прагляду тэмы вы павінны быць зарэгістраваным карыстальнікам.',

	'MAKE_ANNOUNCE'				=> 'Зрабіць аб\'явай',
	'MAKE_GLOBAL'				=> 'Зрабіць важнай',
	'MAKE_NORMAL'				=> 'Зрабіць звычайнай',
	'MAKE_STICKY'				=> 'Зрабіць прылепленай',
	'MAX_OPTIONS_SELECT'		=> 'Вы можаце вылучыць да <strong>%d</strong> варыянтаў адказаў.',
	'MAX_OPTION_SELECT'			=> 'Вы можаце вылучыць <strong>1</strong> варыянт адказу.',
	'MISSING_INLINE_ATTACHMENT'	=> 'Укладанне <strong>%s</strong> больш недаступна.',
	'MOVE_TOPIC'				=> 'Перамясціць тэму',

	'NO_ATTACHMENT_SELECTED'=> 'Вы не вылучылі ўкладанне для запампоўкі або прагляду.',
	'NO_NEWER_TOPICS'		=> 'У гэтым форуме няма навейшых тэм.',
	'NO_OLDER_TOPICS'		=> 'У гэтым форуме няма больш старых тэм.',
	'NO_UNREAD_POSTS'		=> 'У гэтай тэме няма новых непрачытаных паведамленняў',
	'NO_VOTE_OPTION'		=> 'Вы павінны паказаць варыянт адказу пры галасаванні.',
	'NO_VOTES'				=> 'Адказы адсутнічаюць.',

	'POLL_ENDED_AT'			=> 'Апытанне скончыўся %s',
	'POLL_RUN_TILL'			=> 'Апытанне праводзіцца да %s',
	'POLL_VOTED_OPTION'		=> 'Вы галасавалі за гэты варыянт',
	'PRINT_TOPIC'			=> 'Для друку',

	'QUICK_MOD'				=> 'Хуткія дзеянні',
	'QUOTE'					=> 'Цытата',

	'REPLY_TO_TOPIC'		=> 'Адказаць на тэму',
	'RETURN_POST'			=> '%sВярнуцца да паведамлення%s',

	'SUBMIT_VOTE'			=> 'Прагаласаваць',

	'TOTAL_VOTES'			=> 'Усяго галасоў',

	'UNLOCK_TOPIC'			=> 'Адчыніць тэму',

	'VIEW_INFO'				=> 'Інфармацыя аб паведамленні',
	'VIEW_NEXT_TOPIC'		=> 'След. тэма',
	'VIEW_PREVIOUS_TOPIC'	=> 'Прад. тэма',
	'VIEW_RESULTS'			=> 'Вынікі галасавання',
	'VIEW_TOPIC_POST'		=> '1 паведамленне',
	'VIEW_TOPIC_POSTS'		=> 'Паведамленняў: %d',
	'VIEW_UNREAD_POST'		=> 'Першае новае паведамленне',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Дзякуй, ваш голас улічаны.',
	'VOTE_CONVERTED'		=> 'Змена галасоў у сканвертаваных апытаннях не падтрымліваецца.',

));

?>
