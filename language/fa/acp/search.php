<?php
/**
*
* acp_search [English]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24  $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '',

	'COMMON_WORD_THRESHOLD'					=> 'Common word threshold',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Words which are contained in a greater percentage of all posts will be regarded as common. Common words are ignored in search queries. Set to zero to disable. Only takes effect if there are more than 100 posts.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Are you sure you wish to switch to a different search backend? After changing the search backend you will have to create an index for the new search backend. If you don’t plan on switching back to the old search backend you can also delete the old backend’s index in order to free system resources.',
	'CONTINUE_DELETING_INDEX'				=> 'Continue previous index removal process',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'An index removal process has been started. In order to access the search index page you will have to complete it or cancel it.',
	'CONTINUE_INDEXING'						=> 'ادامه دادن فرآيند شاخص سازي پيشين',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'An indexing process has been started. In order to access the search index page you will have to complete it or cancel it.',
	'CREATE_INDEX'							=> 'ايجاد شاخص',

	'DELETE_INDEX'							=> 'حذف شاخص',
	'DELETING_INDEX_IN_PROGRESS'			=> 'حذف شاخص در حال پيشرفت',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'The search backend is currently cleaning its index. This can take a few minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL fulltext فقط قابل بکارگيري بر روي MySQL4 يا بالاتر است.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL fulltext indexes can only be used with MyISAM tables.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'تعداد کل پست هاي شاخص شده',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support for non-latin UTF-8 characters using mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support for non-latin UTF-8 characters using PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'If PCRE does not have unicode character properties, the search backend will try to use mbstring’s regular expression engine.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'This search backend requires PCRE unicode character properties, only available in PHP 4.4, 5.1 and above, if you want to search for non-latin characters.',

	'GENERAL_SEARCH_SETTINGS'				=> 'تنظيمات جامع جستجو',
	'GO_TO_SEARCH_INDEX'					=> 'برو به صفحه شاخص جستجو',

	'INDEX_STATS'							=> 'آمار شاخص',
	'INDEXING_IN_PROGRESS'					=> 'شاخص سازي در حال پيشرفت',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'The search backend is currently indexing all posts on the board. This can take from a few minutes to a few hours depending on your board’s size.',

	'LIMIT_SEARCH_LOAD'						=> 'Search page system load limit',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'If the 1 minute system load exceeds this value the search page will go offline, 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers.',

	'MAX_SEARCH_CHARS'						=> 'حد اکثر کاراکتر هاي فهرست شده توسط جستجو',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'كلمات با تعداد كمتر از اين كاراكتر ها براي جستجو نشانه گذاري خواهند شد.',
	'MIN_SEARCH_CHARS'						=> 'حداقل کاراکتر هاي فهرست شده توسط جستجو',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'كلمات با تعداد بيشتر از اين كاراكتر ها براي جستجو نشانه گذاري خواهند شد',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'حداقل تعداد کاراکتر ها براي نويسنده',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '',

	'PROGRESS_BAR'							=> 'روند پيشرفت',

	'SEARCH_GUEST_INTERVAL'					=> 'فاصله بين جستجوي مهمان',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'All posts up to post id %1$d have now been indexed, of which %2$d posts were within this step.<br />The current rate of indexing is approximately %3$.1f posts per second.<br />Indexing in progress…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'All posts up to post id %1$d have been removed from the search index.<br />Deleting in progress…',
	'SEARCH_INDEX_CREATED'					=> 'همه پست هاي موجود در پايگاه داده ها با موفقيت شاخص سازي شدند.',
	'SEARCH_INDEX_REMOVED'					=> 'شاخص براي اين حامي جستجو با موفقيت حذف شد.',
	'SEARCH_INTERVAL'						=> 'فاصله زماني بين جستجوي کاربر',
	'SEARCH_INTERVAL_EXPLAIN'				=> '',
	'SEARCH_STORE_RESULTS'					=> 'مدت نگهداري حافظه موقت جستجو',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'اگر اين مقدار را برابر عدد 0 قرار دهيد، حافظه موقت جستجو غير فعال مي شود.',
	'SEARCH_TYPE'							=> 'حامي جستجو',
	'SEARCH_TYPE_EXPLAIN'					=> '',
	'SWITCHED_SEARCH_BACKEND'				=> 'You switched the search backend. In order to use the new search backend you should make sure that there is an index for the backend you chose.',

	'TOTAL_WORDS'							=> 'تعداد کل واژه هاي شاخص شده',
	'TOTAL_MATCHES'							=> 'تعداد کل واژه هاي شاخص شده',

	'YES_SEARCH'							=> 'فعال بودن امکانات جستجو',
	'YES_SEARCH_EXPLAIN'					=> '',
	'YES_SEARCH_UPDATE'						=> 'فعال بودن به روز رساني fulltext',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '',

//BEGIN phpBB 3.0.5 Additionals by www.Maghsad.com


	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maximum number of allowed keywords',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maximum number of words the user is able to search for. A value of 0 allows an unlimited number of words.',
		
		
//END phpBB 3.0.5 Additionals by www.Maghsad.com
));

?>