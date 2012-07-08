<?php
/**
*
* acp_ban [Belarusian]
*
* @package language
* @version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 гадзіна',
	'30_MINS'		=> '30 хвілін',
	'6_HOURS'		=> '6 гадзін',

	'ACP_BAN_EXPLAIN'	=> 'Тут вы можаце заблакаваць доступ карыстальнікаў па імёнах, email або IP-адрасам. Гэтыя метады не дазволяць карыстальнікам патрапіць ні ў адзін з раздзелаў канферэнцыі. Пры жаданні вы можаце пакінуць кароткі надпіс (да 3000 знакаў) з апісаннем чынніку блакоўкі, якая будзе адлюстроўвацца ў логу адміністратара. Таксама можна паказаць яе працягласць. Калі вы жадаеце, каб блакоўка скончылася ў вызначаны дзень, а не праз усталяваны прамежак часу, то ўвядзіце дату ў фармаце <kbd>ГГГГ-ММ-ДД</kbd> пад спісам «Працягласць блакоўкі», папярэдне вылучыўшы ў гэтым спісе опцыю <span style="text-decoration: underline;">Да даты</span>.',

	'BAN_EXCLUDE'			=> 'Дадаць у белы спіс',
	'BAN_LENGTH'			=> 'Працягласць блакоўкі',
	'BAN_REASON'			=> 'Чыннік блакоўкі доступу',
	'BAN_GIVE_REASON'		=> 'Чыннік, паказваемая карыстальніку',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Чорны спіс паспяхова абноўлены.',

	'EMAIL_BAN'					=> 'Заблакаваць адзін або некалькі адрасоў email',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Выключыць уведзеныя адрасы email з чорнага спісу.',
	'EMAIL_BAN_EXPLAIN'			=> 'Уводзіце кожны адрас на новым радку. Выкарыстайце зорачку (*) у якасці падстаноўнага знака для блакоўкі групы аднатыпных адрасоў. Напрыклад, <samp>*@mail.ru</samp>, <samp>*@*.domain.tld</samp> і г.д.',
	'EMAIL_NO_BANNED'			=> 'Чорны спіс адрасоў email пусты',
	'EMAIL_UNBAN'				=> 'Ізноў дазволіць адрасы email або выдаліць адрасы з белага спісу',
	'EMAIL_UNBAN_EXPLAIN'		=> 'За адзін раз можна разблакаваць (або выдаліць з белага спісу) некалькі адрасоў, вылучыўшы іх з дапамогай адпаведнай камбінацыі мышы і клавіятуры вашага кампутара і браўзэра. Адрасы з белага спісу вылучаныя адмысловым колерам.',

	'IP_BAN'					=> 'Заблакаваць доступ з аднаго або некалькіх IP-адрасоў',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Выключыць уведзеныя IP-адрасы з чорнага спісу.',
	'IP_BAN_EXPLAIN'			=> 'Уводзіце кожны IP-адрас або імя вузла на новым радку. Для ўказання дыяпазону IP-адрасоў аддзеліце яго пачало і канец злучком (-), або выкарыстайце зорачку (*) у якасці падстаноўнага знака.',
	'IP_HOSTNAME'				=> 'IP-адрасы або хасты',
	'IP_NO_BANNED'				=> 'Чорны спіс IP-адрасоў пусты',
	'IP_UNBAN'					=> 'Разблакаваць доступ з адрасоў IP або выдаліць адрасы з белага спісу',
	'IP_UNBAN_EXPLAIN'			=> 'За адзін раз можна разблакаваць (або выдаліць з белага спісу) некалькі IP-адрасоў, вылучыўшы іх з дапамогай адпаведнай камбінацыі мышы і клавіятуры вашага кампутара і браўзэра. Адрасы з белага спісу вылучаныя адмысловым колерам.',

	'LENGTH_BAN_INVALID'		=> 'Дата павінна быць у фармаце <kbd>ГГГГ-ММ-ДД</kbd>.',

	'PERMANENT'		=> 'Бестэрмінова',

	'UNTIL'						=> 'Да даты',
	'USER_BAN'					=> 'Заблакаваць доступ аднаму або некалькім карыстальнікам',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Выключыць уведзеных карыстальнікаў з чорнага спісу.',
	'USER_BAN_EXPLAIN'			=> 'Уводзіце кожнае імя на новым радку. Выкарыстайце спасылку <span style="text-decoration: underline;">Знайсці карыстальніка</span> для пошуку і аўтаматычнага дадання карыстальнікаў.',
	'USER_NO_BANNED'			=> 'Чорны спіс карыстальнікаў пусты',
	'USER_UNBAN'				=> 'Разблакаваць доступ карыстальнікам або выдаліць карыстальнікаў з белага спісу',
	'USER_UNBAN_EXPLAIN'		=> 'За адзін раз можна разблакаваць (або выдаліць з белага спісу) некалькі імёнаў, вылучыўшы іх з дапамогай адпаведнай камбінацыі мышы і клавіятуры вашага кампутара і браўзэра. Імёны з белага спісу вылучаныя адмысловым колерам.',


));

?>
