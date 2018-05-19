<?php
/** 
*
* memberlist [Belarusian]
*
* @package language
* @version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 acydburn Exp $
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
	'ABOUT_USER'			=> 'Профіль',
	'ACTIVE_IN_FORUM'		=> 'Найболей актыўны ў форуме',
	'ACTIVE_IN_TOPIC'		=> 'Найболей актыўны ў тэме',
	'ADD_FOE'				=> 'Дадаць у злоснікі',
	'ADD_FRIEND'			=> 'Дадаць у сябры',
	'AFTER'					=> 'пасля',

	'ALL'					=> 'Усе',

	'BEFORE'				=> 'да',

	'CC_EMAIL'				=> 'Выслаць мне копію гэтага паведамлення.',
	'CONTACT_USER'			=> 'Кантактная інфармацыя',

	'DEST_LANG'				=> 'Мова',
	'DEST_LANG_EXPLAIN'		=> 'Вылучыце мову атрымальніка паведамлення (калі даступны).',

	'EMAIL_BODY_EXPLAIN'	=> 'Паведамленне будзе адпраўленае ў выглядзе простага тэксту, не ўключайце ў яго HTML або BBCode. У якасці зваротнага адрасу будзе паказвацца ваш адрас email.',
	'EMAIL_DISABLED'		=> 'Выбачыце, але ўсе функцыі, звязаныя з адпраўкай email, былі адключаныя.',
	'EMAIL_SENT'			=> 'Паведамленне было адпраўленае.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Паведамленне будзе адпраўленае ў выглядзе простага тэксту, не ўключайце ў яго HTML або BBCode. Звернеце ўвагу, што інфармацыя аб тэме ўжо ўключаная ў паведамленне. У якасці зваротнага адрасу будзе паказвацца ваш адрас email.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Вы павінны паказаць правільны адрас email атрымальніка.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Вы павінны ўвесці тэкст паведамлення для адпраўкі.',
	'EMPTY_MESSAGE_IM'		=> 'Вы павінны ўвесці тэкст паведамлення для адпраўкі.',
	'EMPTY_NAME_EMAIL'		=> 'Вы павінны ўвесці сучаснасць імя атрымальніка.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Вы павінны паказаць тэму паведамлення.',
	'EQUAL_TO'				=> 'роўна',

	'FIND_USERNAME_EXPLAIN'	=> 'Тут вы можаце ажыццявіць пошук пэўных карыстальнікаў. Не абавязкова запаўняць усе палі. Для пошуку па шаблоне выкарыстайце *. Пры ўводзе дат ужывайце фармат <kbd>ГГГГ-ММ-ДД</kbd>, напрыклад, <samp>2004-02-29</samp>. Адзначце галачкай аднаго або больш карыстальнікаў (калі папярэдняя форма дапушчае множны выбар) і націсніце кнопку "Вылучыць адзначаных", каб вярнуцца назад.',
	'FLOOD_EMAIL_LIMIT'		=> 'Вы не можаце адправіць яшчэ адзін email адразу пасля папярэдняга. Калі ласка, паспрабуйце ледзь пазней.',

	'GROUP_LEADER'			=> 'Лідэр групы',

	'HIDE_MEMBER_SEARCH'	=> 'Схаваць пошук карыстальнікаў',

	'IM_ADD_CONTACT'		=> 'Дадаць у спіс кантактаў',
	'IM_AIM'				=> 'Улічыце, што для гэтага вам неабходная ўсталяваная праграма AOL Instant Messenger.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Запампаваць прыкладанне',
	'IM_ICQ'				=> 'Улічыце, што карыстальнік мог адключыць прыём імгненных паведамленняў ад невядомых кантактаў.',
	'IM_JABBER'				=> 'Улічыце, што карыстальнік мог адключыць прыём імгненных паведамленняў ад невядомых кантактаў.',
	'IM_JABBER_SUBJECT'		=> 'Гэта аўтаматычна згенераванае паведамленне, на яго не трэба адказваць! Паведамленне ад карыстальніка %1$s з %2$s.',
	'IM_MESSAGE'			=> 'Ваша паведамленне',
	'IM_MSNM'				=> 'Улічыце, што для гэтага вам неабходная ўсталяваная праграма Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Ваш браўзэр не падтрымлівае гэтую функцыю.',
	'IM_MSNM_CONNECT'		=> 'Кліент MSNM не адказвае.\nДля працягу неабходна ўсталяваць сувязь з кліентам.',
	'IM_NAME'				=> 'Ваша імя',
	'IM_NO_DATA'			=> 'Для гэтага карыстальніка адсутнічае кантактная інфармацыя.',
	'IM_NO_JABBER'			=> 'Выбачыце, адпраўка напроста паведамленняў карыстальнікам Jabber не падтрымліваецца серверам. Каб звязацца з гэтым карыстальнікам вам неабходны ўсталяваны кліент Jabber.',
	'IM_RECIPIENT'			=> 'Атрымальнік',
	'IM_SEND'				=> 'Адправіць паведамленне',
	'IM_SEND_MESSAGE'		=> 'Адправіць паведамленне',
	'IM_SENT_JABBER'		=> 'Ваша паведамленне для %1$s было паспяхова адпраўленае.',
	'IM_USER'				=> 'Адправіць імгненнае паведамленне',
	
	'LAST_ACTIVE'				=> 'Апошняе наведванне',
	'LESS_THAN'					=> 'менш',
	'LIST_USER'					=> 'Карыстальнікаў: 1',
	'LIST_USERS'				=> 'Карыстальнікаў: %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Для прагляду спісу нашай каманды вы павінны быць аўтарызаваныя.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Для прагляду спісу карыстальнікаў вы павінны быць аўтарызаваныя.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Для пошуку карыстальнікаў вы павінны быць аўтарызаваныя.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Для прагляду профіляў вы павінны быць аўтарызаваныя.',

	'MORE_THAN'				=> 'больш',

	'NO_EMAIL'				=> 'Вам не дазволена пасылаць email гэтаму карыстальніку.',
	'NO_VIEW_USERS'			=> 'У вас няма доступу да спісу карыстальнікаў.',

	'ORDER'					=> 'Спарадкаваць',
	'OTHER'					=> 'Іншая',

	'POST_IP'				=> 'IP/Хост',

	'RANK'					=> 'Званне',
	'REAL_NAME'				=> 'Імя атрымальніка',
	'RECIPIENT'				=> 'Атрымальнік',
	'REMOVE_FOE'			=> 'Прыбраць з злоснікаў',
	'REMOVE_FRIEND'			=> 'Прыбраць з сяброў',

	'SEARCH_USER_POSTS'		=> 'Знайсці паведамленні карыстальніка',
	'SELECT_MARKED'			=> 'Вылучыць адзначаных',
	'SELECT_SORT_METHOD'	=> 'Поле сартавання',
	'SEND_AIM_MESSAGE'		=> 'Адправіць AIM-паведамленне',
	'SEND_ICQ_MESSAGE'		=> 'Адправіць ICQ-паведамленне',
	'SEND_IM'				=> 'Адправіць імгненнае паведамленне',
	'SEND_JABBER_MESSAGE'	=> 'Адправіць Jabber-паведамленне',
	'SEND_MESSAGE'			=> 'Адправіць',
	'SEND_MSNM_MESSAGE'		=> 'Адправіць MSNM/WLM-паведамленне',
	'SEND_YIM_MESSAGE'		=> 'Адправіць YIM-паведамленне',
	'SORT_EMAIL'			=> 'email',
	'SORT_LAST_ACTIVE'		=> 'Апошняе наведванне',
	'SORT_POST_COUNT'		=> 'Лік паведамленняў',

	'USERNAME_BEGINS_WITH'	=> 'Імя карыстальніка пачынаецца з',
	'USER_ADMIN'			=> 'Адміністраваць',
	'USER_BAN'				=> 'Забанены',
	'USER_FORUM'			=> 'Статыстыка карыстальніка',
	'USER_ONLINE'			=> 'У сеткі',
	'USER_PRESENCE'			=> 'Прысутнасць на канферэнцыі',

	'VIEWING_PROFILE'		=> 'Профіль карыстальніка %s',
	'VISITED'				=> 'Апошняе наведванне',

	'WWW'					=> 'Бачына',
));

?>
