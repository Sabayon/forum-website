<?php
/**
*
* acp_modules [Belarusian]
*
* @package language
* @version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Тут вы можаце кіраваць усімі тыпамі модуляў. Звернеце ўвагу на тое, што адміністратарскі раздзел мае трохузроўневую структуру меню (Катэгорыя -> Катэгорыя -> Модуль), у выніку чаго падраздзелы маюць двухузроўневую структуру меню (Катэгорыя -> Модуль), якая павінна быць захаваная. Таксама ўлічыце, што вы можа заблакаваць доступ самому сабе, калі вы адключыце або выдаліце модулі, якія адказваюць за кіраванне модулямі.',
	'ADD_MODULE'					=> 'Дадаць модуль',
	'ADD_MODULE_CONFIRM'			=> 'Вы сапраўды жадаеце дадаць вылучаны модуль з паказаным метадам выкарыстання?',
	'ADD_MODULE_TITLE'				=> 'Даданне модуля',

	'CANNOT_REMOVE_MODULE'	=> 'Не атрымалася выдаліць модуль, паколькі на яго прызначаныя даччыныя модулі. Выдаліце або перамесціце ўсе даччыныя модулі перад выкананнем гэтага дзеяння.',
	'CATEGORY'				=> 'Катэгорыя',
	'CHOOSE_MODE'			=> 'Метад выкарыстання модуля',
	'CHOOSE_MODE_EXPLAIN'	=> 'Вылучыце метад выкарыстання модуля.',
	'CHOOSE_MODULE'			=> 'Выбар модуля',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Вылучыце файл, выкліканы дадзеным модулем.',
	'CREATE_MODULE'			=> 'Стварыць модуль',

	'DEACTIVATED_MODULE'	=> 'Адключаны модуль',
	'DELETE_MODULE'			=> 'Выдаліць модуль',
	'DELETE_MODULE_CONFIRM'	=> 'Вы сапраўды жадаеце выдаліць гэты модуль?',

	'EDIT_MODULE'			=> 'Налада модуля',
	'EDIT_MODULE_EXPLAIN'	=> 'З дапамогай гэтай старонкі вы можаце наладзіць модуль.',

	'HIDDEN_MODULE'			=> 'Утоены модуль',

	'MODULE'					=> 'Модуль',
	'MODULE_ADDED'				=> 'Модуль паспяхова дададзены.',
	'MODULE_DELETED'			=> 'Модуль паспяхова выдалены.',
	'MODULE_DISPLAYED'			=> 'Адлюстраванне модуля',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Калі вы не жадаеце, каб модуль адлюстроўваўся ў спісе, але жадаеце выкарыстаць яго, то ўсталюеце перамыкач у становішча «Не».',
	'MODULE_EDITED'				=> 'Налады модуля паспяхова змененыя.',
	'MODULE_ENABLED'			=> 'Модуль уключаны',
	'MODULE_LANGNAME'			=> 'Імя модуля',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Увядзіце якое адлюстроўваецца імя модуля. Выкарыстайце імя пераменнай, калі імя модуля абвешчана ў моўным файле.',
	'MODULE_TYPE'				=> 'Тып модуля',

	'NO_CATEGORY_TO_MODULE'	=> 'Не атрымалася абвясціць катэгорыю модулем. Выдаліце або перамесціце ўсе даччыныя модулі перад выкананнем гэтага дзеяння.',
	'NO_MODULE'				=> 'Модуль не знойдзены.',
	'NO_MODULE_ID'			=> 'Не паказаны ID модуля.',
	'NO_MODULE_LANGNAME'	=> 'Не паказана імя модуля.',
	'NO_PARENT'				=> 'Няма бацькі',

	'PARENT'				=> 'Бацька',
	'PARENT_NO_EXIST'		=> 'Бацька не існуе.',

	'SELECT_MODULE'			=> 'Вылучыце модуль',
));

?>
