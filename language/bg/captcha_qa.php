<?php
/**
*
* captcha_qa [English]
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
	'CAPTCHA_QA'				=> 'CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'По този начин се убеждаваме, че сте човек, а не робот.',
	'CONFIRM_QUESTION_WRONG'	=> 'Отговора на CAPTCHA-та е неправилен, регистрацията не може да продължи, опитайте отново.',

	'QUESTION_ANSWERS'			=> 'Отговори',
	'ANSWERS_EXPLAIN'			=> 'Въведете валидни отговори на въпроса (по един на ред)',
	'CONFIRM_QUESTION'			=> 'Въпрос',

	'ANSWER'					=> 'Отовор',
	'EDIT_QUESTION'				=> 'Промени въпрос',
	'QUESTIONS'					=> 'Въпроси',
	'QUESTIONS_EXPLAIN'			=> 'По време на регистрацията към потребителите ще бъде зададен специален въпрос/и (те се избират от вас). Целта на тази функция е да ограничи досадните ботове, които се регистрират във форума ви и пускат нежелани съобщения.',
	'QUESTION_DELETED'			=> 'Изтрит въпрос',
	'QUESTION_LANG'				=> 'Език',
	'QUESTION_LANG_EXPLAIN'		=> 'Езика на който е написан въпроса и отговора.',
	'QUESTION_STRICT'			=> 'Специална проверка',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ако функцията е включена ще се вземат под внимание главни и малки букви.',

	'QUESTION_TEXT'				=> 'Въпрос',
	'QUESTION_TEXT_EXPLAIN'		=> 'Въпроса, който ще се задава на потребителите при регистрация.',

	'QA_ERROR_MSG'				=> 'Попълнете полетата и въведете поне по един отговор.',
));

?>