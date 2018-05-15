<?php
/** 
*
* groups [Belarusian]
*
* @package language
* @version $Id: groups.php,v 1.22 2007/10/04 15:07:24 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'				=> 'Вылучаная група ўжо з\'яўляецца вашай групай па змаўчанні.',
	'ALREADY_IN_GROUP'					=> 'Вы ўжо з\'яўляецеся чальцом вылучанай групы.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Вы ўжо запыталі чалецтва ў вылучанай групе.',
	
	'CANNOT_JOIN_GROUP'			=> 'Вы не можаце далучыцца да гэтай групы. Можна далучацца толькі да адчыненых і агульнадаступных груп.',
	'CANNOT_RESIGN_GROUP'		=> 'Вы не можаце адмовіцца ад гэтай групы. Можна адмаўляцца ад чалецтва толькі ў адчыненых і агульнадаступных групах.',
	'CHANGED_DEFAULT_GROUP'				=> 'Група па змаўчанні паспяхова змененая.',
	
	'GROUP_AVATAR'						=> 'Аватара групы', 
	'GROUP_CHANGE_DEFAULT'				=> 'Вы ўпэўненыя, што жадаеце змяніць вашу групу па змаўчанні на «%s»?',
	'GROUP_CLOSED'						=> 'Зачыненая група',
	'GROUP_DESC'						=> 'Апісанне групы',
	'GROUP_HIDDEN'						=> 'Утоеная група',
	'GROUP_INFORMATION'					=> 'Інфармацыя аб групе', 
	'GROUP_IS_CLOSED'					=> 'Гэта зачыненая група, уступіць у яе можна толькі па запрашэнні лідэра групы.',
	'GROUP_IS_FREE'						=> 'Гэта агульнадаступная група, любы карыстальнік можа ўступіць у яе.', 
	'GROUP_IS_HIDDEN'					=> 'Гэта ўтоеная група, толькі чальцы гэтай групы могуць праглядаць спіс уваходных у яе карыстальнікаў.',
	'GROUP_IS_OPEN'						=> 'Гэта адчыненая група, любы карыстальнік можа падаць просьбу аб уступе.',
	'GROUP_IS_SPECIAL'					=> 'Гэта адмысловая група, кіраваная адміністратарам форума.', 
	'GROUP_JOIN'						=> 'Уступіць у групу',
	'GROUP_JOIN_CONFIRM'				=> 'Вы ўпэўненыя, што жадаеце ўступіць у вылучаную групу?',
	'GROUP_JOIN_PENDING'				=> 'Запыт на ўступ у групу',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць запыт на ўступ у гэтую групу?',
	'GROUP_JOINED'						=> 'Вы паспяхова ўступілі ў вылучаную групу.',
	'GROUP_JOINED_PENDING'				=> 'Запыт на ўступ у групу паспяхова адпраўлены. Калі ласка, чакайце пацверджанні ад лідэра групы.',
	'GROUP_LIST'						=> 'Кіраванне карыстальнікамі',
	'GROUP_MEMBERS'						=> 'Чальцы групы',
	'GROUP_NAME'						=> 'Назоў групы',
	'GROUP_OPEN'						=> 'Адчыненая група',
	'GROUP_RANK'						=> 'Званне групы', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Выйсці з групы',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце выйсці з вылучанай групы?',
	'GROUP_RESIGN_PENDING'				=> 'Адклікаць запыт на ўступ у групу',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце адклікаць запыт на ўступ у вылучаную групу?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Вы былі паспяхова выдаленыя з вылучанай групы.',
	'GROUP_RESIGNED_PENDING'			=> 'Ваш запыт на ўступ у вылучаную групу паспяхова адкліканы.',
	'GROUP_TYPE'						=> 'Тып групы',
	'GROUP_UNDISCLOSED'					=> 'Утоеная група',
	'FORUM_UNDISCLOSED'					=> 'Мадэраванне ўтоенага форума(ў)',

	'LOGIN_EXPLAIN_GROUP'				=> 'Вы павінны ўвайсці для прагляду інфармацыі аб групе.',

	'NO_LEADERS'						=> 'Вы не з\'яўляецеся лідэрам які-небудзь групы.',
	'NOT_LEADER_OF_GROUP'				=> 'Запытаная аперацыя не можа быць выкананая, паколькі вы не з\'яўляецеся лідэрам вылучанай групы.',
	'NOT_MEMBER_OF_GROUP'				=> 'Запытаная аперацыя не можа быць выкананая, паколькі вы не з\'яўляецеся чальцом вылучанай групы або чалецтва яшчэ не было ўхвалена.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Вы не можаце адмовіцца ад чалецтва ў групе па змаўчанні.',

	'PRIMARY_GROUP'						=> 'Асноўная група',

	'REMOVE_SELECTED'					=> 'Выдаліць вылучанае',

	'USER_GROUP_CHANGE'					=> 'З групы «%1$s» у групу «%2$s»',
	'USER_GROUP_DEMOTE'					=> 'Адмовіцца ад лідэрства',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Вы ўпэўненыя, што жадаеце адмовіцца ад лідэрства ў вылучанай групе?',
	'USER_GROUP_DEMOTED'				=> 'Вы спынілі быць лідэрам групы.',
));

?>
