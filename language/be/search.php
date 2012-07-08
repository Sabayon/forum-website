<?php
/** 
*
* search [Belarusian]
*
* @package language
* @version $Id: search.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
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
	'ALL_AVAILABLE'			=> 'Усё наяўныя',
	'ALL_RESULTS'			=> 'Усе дні',

	'DISPLAY_RESULTS'		=> 'Паказваць вынікі як',

	'FOUND_SEARCH_MATCH'		=> 'Вынікаў пошуку: %d',
	'FOUND_SEARCH_MATCHES'		=> 'Вынікаў пошуку: %d',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Вынікаў пошуку больш %d',

	'GLOBAL'				=> 'Важная',

	'IGNORED_TERMS'			=> 'праігнараваныя',
	'IGNORED_TERMS_EXPLAIN'	=> 'Наступныя словы ў пошукавым запыце былі праігнараваныя, бо з\'яўляюцца занадта ўпатрабляльнымі: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Перайсці да паведамлення',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Вы павінны быць зарэгістраваныя і аўтарызаваныя ў сістэме для прагляду сваіх паведамленняў.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Вы паказалі занадта шмат слоў для пошуку. Колькасць такіх слоў не павінна перавышаць %1$d.',

	'NO_KEYWORDS'			=> 'Для пошуку вы павінны ўвесці, як мінімум, адно слова. Даўжыня кожнага слова павінна быць не меней %d і не больш %d знакаў, выключаючы знак шаблону *.',
	'NO_RECENT_SEARCHES'	=> 'За апошні час пошукавых запытаў не было.',
	'NO_SEARCH'				=> 'Выбачыце, але вам забароненае карыстацца пошукам.',
	'NO_SEARCH_RESULTS'		=> 'Прыдатных тэм або паведамленняў не знойдзена.',
	'NO_SEARCH_TIME'		=> 'Вы не можаце вырабіць пошук адразу пасля папярэдняга. Калі ласка, паспрабуйце ледзь пазней.',
	'WORD_IN_NO_POST'		=> 'Прыдатных паведамленняў не знойдзена, паколькі слова <strong>%s</strong> нідзе не сустракаецца.',
	'WORDS_IN_NO_POST'		=> 'Прыдатных паведамленняў не знойдзена, паколькі словы <strong>%s</strong> нідзе не сустракаюцца.',

	'POST_CHARACTERS'		=> 'знакаў паведамленняў',

	'RECENT_SEARCHES'		=> 'Апошнія пошукавыя запыты',
	'RESULT_DAYS'			=> 'Шукаць паведамленні за',
	'RESULT_SORT'			=> 'Поле сартавання',
	'RETURN_FIRST'			=> 'Паказваць першыя',
	'RETURN_TO_SEARCH_ADV'	=> 'Вярнуцца да пашыранага пошуку',
	
	'SEARCHED_FOR'				=> 'Пошукавы запыт',
	'SEARCHED_TOPIC'			=> 'Пошук у тэме',
	'SEARCH_ALL_TERMS'			=> 'Шукаць усе словы',
	'SEARCH_ANY_TERMS'			=> 'Шукаць любое слова/пошук з мовай запытаў',
	'SEARCH_AUTHOR'				=> 'Пошук па аўтару',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Выкарыстайце * у якасці шаблону.',
	'SEARCH_FIRST_POST'			=> 'Толькі ў першым паведамленні тэмы',
	'SEARCH_FORUMS'				=> 'Шукаць у форумах',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Вылучыце форум або форумы, у якіх будзе выраблены пошук. Пошук у падфорумах вырабляецца аўтаматычна, калі вы не адключылі адпаведную опцыю ніжэй.',
	'SEARCH_IN_RESULTS'			=> 'Пошук у знойдзеным',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Вы можаце выкарыстаць <strong>+</strong>, каб вызначыць словы, якія павінны быць у выніках, і <strong>-</strong> для слоў, якіх у выніках быць не павінна. Вы можаце падзяліць словы знакам <strong>|</strong> для пошуку любога слова з спісу. Выкарыстайце <strong>*</strong> у якасці шаблону для частковага супадзення.',
	'SEARCH_MSG_ONLY'			=> 'Толькі ў тэкстах паведамленняў',
	'SEARCH_OPTIONS'			=> 'Параметры запыту',
	'SEARCH_QUERY'				=> 'Запыт',
	'SEARCH_SUBFORUMS'			=> 'Шукаць у падфорумах',
	'SEARCH_TITLE_MSG'			=> 'У назовах тэм і тэкстах паведамленняў',
	'SEARCH_TITLE_ONLY'			=> 'Толькі па назове тэмы',
	'SEARCH_WITHIN'				=> 'Шукаць',
	'SORT_ASCENDING'			=> 'па ўзрастанні',
	'SORT_AUTHOR'				=> 'Аўтар',
	'SORT_DESCENDING'			=> 'па змяншэнні',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Загаловак паведамлення',
	'SORT_TIME'					=> 'Час размяшчэння',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Вы павінны ўвесці не меней %d знакаў імя аўтара.',
));

?>
