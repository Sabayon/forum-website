<?php
/**
*
* captcha_qa [Belarusian]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Тэкставае пацверджанне',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Гэта пытанне прызначанае для выяўлення і прадухілення аўтаматычных рэгістрацый.',
	'CONFIRM_QUESTION_WRONG'	=> 'Вы ўвялі няверны адказ на пытанне.',

	'QUESTION_ANSWERS'			=> 'Адказы',
	'ANSWERS_EXPLAIN'			=> 'Увядзіце верныя адказы на пытанне. Кожны адказ уводзіце на асобным радку.',
	'CONFIRM_QUESTION'			=> 'Пытанне',

	'ANSWER'					=> 'Адказ',
	'EDIT_QUESTION'				=> 'Рэдагаванне пытання',
	'QUESTIONS'					=> 'Пытанні',
	'QUESTIONS_EXPLAIN'			=> 'Пры рэгістрацыі карыстальніку будзе прапанаванае адно з паказаных тут пытанняў. Для выкарыстання дадзенага модуля, прынамсі, адно пытанне павінна быць усталяванае на мове па змаўчанні. Гэтыя пытанні павінны быць простыя для вашай патэнцыйнай аўдыторыі, але, у той жа час, складаныя для бота, здольнага пачаць пошук у Google. Выкарыстанне шырокага і часта змянянага набору пытанняў дасць найлепшыя вынікі. Уключыце строгую праверку, калі ваша пытанне залежыць ад знакаў пунктуацыі або рэгістра знакаў.',
	'QUESTION_DELETED'			=> 'Пытанне выдаленае',
	'QUESTION_LANG'				=> 'Мова',
	'QUESTION_LANG_EXPLAIN'		=> 'Мова, на якой напісанае гэтае пытанне і адказ на яго.',
	'QUESTION_STRICT'			=> 'Строгая праверка',
	'QUESTION_STRICT_EXPLAIN'	=> 'Калі ўключана, пры праверцы адказаў будуць улічвацца рэгістр знакаў і прабелы.',

	'QUESTION_TEXT'				=> 'Пытанне',
	'QUESTION_TEXT_EXPLAIN'		=> 'Пытанне, якое будзе зададзенае пры рэгістрацыі.',

	'QA_ERROR_MSG'				=> 'Запоўніце ўсе палі, і ўвядзіце не меней аднаго адказу.',
	'QA_LAST_QUESTION' 			=> 'Нельга выдаліць усе пытанні, пакуль тэкставае пацвярджэнне выбранае ў якасці выкарыстоўваемага на канферэнцыі.',

));

?>
