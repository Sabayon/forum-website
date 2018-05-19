<?php
/**
*
* acp_bots [Belarusian]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Кіраванне пошукавымі робатамі (ботамі)',
	'BOTS_EXPLAIN'		=> '«Боты», «павукі» або «паўзуны»  — гэта аўтаматычныя агенты, звычайна выкарыстоўваныя пошукавымі сістэмам для абнаўлення сваіх баз дадзеных. Паколькі яны рэдка належнай выявай працуюць з сесіямі, яны могуць сказіць лічыльнікі наведванняў, павялічыць нагрузку на сервер і часам няправільна праіндэксаваць бачыну. Тут вы можаце стварыць карыстальнікаў адмысловага тыпу ў мэтах прадухілення падобных праблем.',
	'BOT_ACTIVATE'		=> 'Уключыць',
	'BOT_ACTIVE'		=> 'Бот актыўны',
	'BOT_ADD'			=> 'Дадаць бота',
	'BOT_ADDED'			=> 'Новы бот паспяхова дададзены.',
	'BOT_AGENT'			=> 'Адпаведнасць агенту',
	'BOT_AGENT_EXPLAIN'	=> 'Радок, поўнасцю або часткова супадальная з агентам (User-Agent) бота.',
	'BOT_DEACTIVATE'	=> 'Адключыць',
	'BOT_DELETED'		=> 'Бот паспяхова выдалены.',
	'BOT_EDIT'			=> 'Налада бота',
	'BOT_EDIT_EXPLAIN'	=> 'З дапамогай гэтай старонкі вы можаце дадаць новага або змяніць налады наяўнага бота. Вы можаце паказаць радок агента бота і ўвесці адзін або некалькі IP-адрасоў (або дыяпазон адрасоў) для яго ідэнтыфікацыі. Будзьце ўважлівым пры ўказанні радка агента або адрасоў. Таксама тут можна паказаць стыль і мова канферэнцыі, якія будзе выкарыстаць бот. Гэта дапаможа знізіць выкарыстанне трафіку шляхам усталёўкі палегчанага стылю для ботаў. Не забудзьце наладзіць прыдатныя правы доступу для адмысловай групы «Боты».',
	'BOT_LANG'			=> 'Мова для бота',
	'BOT_LANG_EXPLAIN'	=> 'Мова канферэнцыі, выкарыстоўваны ботам пры наведванні.',
	'BOT_LAST_VISIT'	=> 'Наведванне',
	'BOT_IP'			=> 'IP-адрас бота',
	'BOT_IP_EXPLAIN'	=> 'Дазволеныя частковыя адпаведнасці. Адлучайце адрасы коскамі.',
	'BOT_NAME'			=> 'Назва бота',
	'BOT_NAME_EXPLAIN'	=> 'Выкарыстоўваецца выключна для вашай звесткі.',
	'BOT_NAME_TAKEN'	=> 'Паказанае імя ўжо выкарыстоўваецца на канферэнцыі і не можа выкарыстоўвацца для бота.',
	'BOT_NEVER'			=> 'Ніколі',
	'BOT_STYLE'			=> 'Стыль для бота',
	'BOT_STYLE_EXPLAIN'	=> 'Стыль канферэнцыі, выкарыстоўваны ботам пры наведванні.',
	'BOT_UPDATED'		=> 'Налады бота паспяхова абноўленыя.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Уведзены вамі агент бота ўжо выкарыстоўваецца.',
	'ERR_BOT_NO_IP'				=> 'Уведзеныя вамі IP-адрасы недапушчальныя або не атрымоўваецца дазволіць імя хаста.',
	'ERR_BOT_NO_MATCHES'		=> 'Неабходна паказаць не меней аднаго агента або IP-адрасы для ідэнтыфікацыі гэтага бота.',

	'NO_BOT'		=> 'Бот з паказаным ідэнтыфікатарам не знойдзены.',
	'NO_BOT_GROUP'	=> 'Адмысловая група «Боты» не знойдзеная.',
));

?>