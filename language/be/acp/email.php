<?php
/**
*
* acp_email [Belarusian]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'=> 'З дапамогай гэтай формы вы можаце адправіць электроннае паведамленне ўсім карыстальнікам або карыстальнікам вызначанай групы, <strong>якія маюць уключаную опцыю атрымання электронных паведамленняў</strong>. Для дасягнення гэтага паведамленне будзе адпраўленае з электроннага адрасу адміністратара, і будзе забяспечана ўтоенай копіяй для ўсіх атрымальнікаў. Па змаўчанні такое паведамленне ўключае максімум 50 атрымальнікаў. Калі атрымальнікаў больш, то будзе адпраўленае некалькі паведамленняў. Калі вы адпраўляеце паведамленне вялікай групе людзей, то гэтае дзеянне можа заняць некаторы час. Калі ласка, будзьце цярплівыя і не спыняйце загрузку старонкі пасля адпраўкі паведамлення. Вы будзеце апавешчаныя аб паспяховым завяршэнні адпраўкі.',
	'ALL_USERS'				=> 'Усім карыстальнікам',

	'COMPOSE'				=> 'Паведамленне',

	'EMAIL_SEND_ERROR'		=> 'Адбыліся памылкі падчас адпраўкі паведамлення. Паглядзіце %лог памылак%s для атрымання больш падрабязных звестак аб памылках.',
	'EMAIL_SENT'			=> 'Паведамленне адпраўленае.',
	'EMAIL_SENT_QUEUE'		=> 'Паведамленне пастаўлена ў чаргу для наступнай адпраўкі.',

	'LOG_SESSION'			=> 'Весткі лог крытычных памылак сеансу рассылання',

	'SEND_IMMEDIATELY'		=> 'Неадкладная адпраўка',
	'SEND_TO_GROUP'			=> 'Адправіць удзельнікам групы',
	'SEND_TO_USERS'			=> 'Адправіць карыстальнікам',
	'SEND_TO_USERS_EXPLAIN'	=> 'Паведамленне будзе адпраўленае паказаным карыстальнікам замест вылучанай вышэй групы. Уводзіце кожнае імя карыстальніка на новым радку.',

	'MAIL_HIGH_PRIORITY'	=> 'Высокі',
	'MAIL_LOW_PRIORITY'		=> 'Нізкі',
	'MAIL_NORMAL_PRIORITY'	=> 'Звычайны',
	'MAIL_PRIORITY'			=> 'Прыярытэт рассылання',
	'MASS_MESSAGE'			=> 'Тэкст паведамлення',
	'MASS_MESSAGE_EXPLAIN'	=> 'Можна выкарыстаць толькі звычайны тэкст. Уся разметка будзе выдаленая перад адпраўкай.',

	'NO_EMAIL_MESSAGE'		=> 'Неабходна ўвесці тэкст паведамлення',
	'NO_EMAIL_SUBJECT'		=> 'Неабходна паказаць загаловак паведамлення',
));

?>