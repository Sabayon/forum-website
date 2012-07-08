<?php
/**
*
* search [Farsi]
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
	'ALL_AVAILABLE'			=> 'همه قابل استفاده ها',
	'ALL_RESULTS'			=> 'همه نتايج',

	'DISPLAY_RESULTS'		=> 'نمايش نتيجه با',

	'FOUND_SEARCH_MATCH'		=> 'نتيجه هماهنگ با عباريت جستجو شده : %d',
	'FOUND_SEARCH_MATCHES'		=> 'نتايج هماهنگ با عبارت جستجو شده : %d',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'نتايج هماهنگ پيدا شده بيشتر از %d',

	'GLOBAL'				=> 'اطلاعيه کلي',

	'IGNORED_TERMS'			=> 'رد شده',
	'IGNORED_TERMS_EXPLAIN'	=> 'عبارت مورد جستجوي شما رد شده است: <strong>%s</strong>.',
//3.0.5 Additional by www.Maghsad.com
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'شما تعداد زیادی کلمه برای جستجو تعیین کردید.حداکثر کلمات مجاز %1$d است.',
//END 3.0.5
	'JUMP_TO_POST'			=> 'پرش به پست',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'براي ديدن پست هاي خود مي بايست ابتدا در سايت عضو شده و سپس وارد شويد.',

	'NO_KEYWORDS'			=> 'شما براي جستجو بايد يک کلمه کوچک انتخاب کنيد. کمترين کاراکتر مجاز %d و بيشترين %d مي باشد',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'هيچ نتيجه مناسب و هماهنگي پيدا نشد.',
	'NO_SEARCH_TIME'		=> 'Sorry but you cannot use search at this time. Please try again in a few minutes.',
	'WORD_IN_NO_POST'		=> 'هيچ پستي پيدا نشد زيرا <strong>%s</strong> در هيچ پستي موجود نبود.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'کاراکتر هاي پست',

	'RECENT_SEARCHES'		=> 'جستجو شده هاي اخير',
	'RESULT_DAYS'			=> 'نتايج بر اساس (پيش)',
	'RESULT_SORT'			=> 'مرتب سازي نتايج بر اساس',
	'RETURN_FIRST'			=> 'رجوع کردن به اولين',
	'RETURN_TO_SEARCH_ADV'	=> 'بازگشت به جستجوي پيشرفته',

	'SEARCHED_FOR'				=> 'شرايط انتخاب شده',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCH_ALL_TERMS'			=> 'جستجوي همه موارد يا استفاده از دستورات وارد شده',
	'SEARCH_ANY_TERMS'			=> 'جستجو براي تمام شرايط',
	'SEARCH_AUTHOR'				=> 'جستجو براي نويسنده',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'براي پيدا كردن بخشي از نام كاربري علامت * را وارد كنيد.',
	'SEARCH_FIRST_POST'			=> 'فقط اولين پست در تاپيک ها',
	'SEARCH_FORUMS'				=> 'جستجو در انجمن (هاي)',
	'SEARCH_FORUMS_EXPLAIN'		=> 'انجمن هاي مورد جستجوي خود را انتخاب کنيد(مي توانيد از کليد Ctrl استفاده کنيد)',
	'SEARCH_IN_RESULTS'			=> 'جستجو در عبارات پيدا شده',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '<br />جلوی واژه ای که می خواهید پیدا شود علامت <strong>+</strong> و جلوی واژه ای که نمی خواهید پیدا شود علامت <strong>-</strong> قرار دهید.
<br />
اگر می خواهید از میان چند کلمه که وارد کردید حداقل یکی از آنها یافت شود ، آنها را با علامت <strong>|</strong> از هم جدا کنید.
<br />		
اگر بخشی از واژه را نمی دانید می توانید از علامت * به جای آن استفاده نمایید.',
	'SEARCH_MSG_ONLY'			=> 'فقط متن نوشته ها',
	'SEARCH_OPTIONS'			=> 'تنظيمات جستجو',
	'SEARCH_QUERY'				=> 'كلمات مورد نظر',
	'SEARCH_SUBFORUMS'			=> 'جستجو در زير انجمن ها',
	'SEARCH_TITLE_MSG'			=> 'عنوان پست ها و متن نوشته ها',
	'SEARCH_TITLE_ONLY'			=> 'فقط عنوان مبحث ها',
	'SEARCH_WITHIN'				=> 'جستجو در',
	'SORT_ASCENDING'			=> 'صعودي',
	'SORT_AUTHOR'				=> 'نويسنده',
	'SORT_DESCENDING'			=> 'نزولي',
	'SORT_FORUM'				=> 'انجمن',
	'SORT_POST_SUBJECT'			=> 'عنوان پست',
	'SORT_TIME'					=> 'زمان پست',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
		
		
				
		// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
			'LOGIN_EXPLAIN_UNREADSEARCH'=> 'The board requires you to be registered and logged in to view your unread posts.',


		
		//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
));

?>