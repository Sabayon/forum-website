<?php
/**
*
* acp_posting [Farsi]
*
* @package language
* @version $Id: posting.php 8479 2008-03-29 00:22:48Z naderman $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode یک یک اجراگر بر پایه HTML است که که کنترل های بیشتری را برای چیزهای که قرار است مشاهده شوند ارائه می دهد.از این صفحه شما می توانید آنها را اضافه ،حذف، یا آنها را بصورت سفارشی ویرایش کنید.',
	'ADD_BBCODE'				=> 'Add a new BBCode',

	'BBCODE_ADDED'				=> 'BBCode با موفيت اضافه شد.',
	'BBCODE_EDITED'				=> 'BBCode با موافقت ويرايش شد.',
	'BBCODE_NOT_EXIST'			=> 'BBCode انتخاب شده توسط شما موجود نيست.',
	'BBCODE_HELPLINE'			=> 'راهنما',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'مطالب موجود در اين قسمت،در هنگام قرار گيري موس روي دكمه BBCode شما نمايش داده خواهند شد.',
	'BBCODE_HELPLINE_TEXT'		=> 'متن راهنما',
			'BBCODE_HELPLINE_TOO_LONG'	=> 'The help line you entered is too long.',
	'BBCODE_INVALID_TAG_NAME'	=> 'تگ BBCode تعريف شده توسط شما قبلا ثبت شده است.',
	'BBCODE_INVALID'			=> 'BBCode شما در يک فرم بي اعبار ساخته شده است.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Your custom BBCode must contain both an opening and a closing tag.',
	'BBCODE_TAG'				=> 'تگ',
	'BBCODE_TAG_TOO_LONG'		=> 'تگ تعريف شده طولاني است.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'The tag definition that you have entered is too long, please shorten your tag definition.',
	'BBCODE_USAGE'				=> 'BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'BBCode جديد در اين قسمت تعريف مي شود. براي ديدن دستور هاي قابل استفاده ، قسمت %sپايين صفحه را مطالعه نماييد %s',

	'EXAMPLE'						=> 'مثال:',
	'EXAMPLES'						=> 'مثال ها:',

	'HTML_REPLACEMENT'				=> 'جايگزين HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'در اين قسمت جايگزين HTML براي BBCode خود را وارد كنيد.',

	'TOKEN'					=> 'مشخصه',
	'TOKENS'				=> 'مشصخه ها',
	'TOKENS_EXPLAIN'		=> 'Tokens are placeholders for user input. The input will be validated only if it matches the corresponding definition. If needed, you can number them by adding a number as the last character between the braces, e.g. {TEXT1}, {TEXT2}.<br /><br />Within the HTML replacement you can also use any language string present in your language/ directory like this: {L_<em>&lt;STRINGNAME&gt;</em>} where <em>&lt;STRINGNAME&gt;</em> is the name of the translated string you want to add. For example, {L_WROTE} will be displayed as “wrote” or its translation according to user’s locale.<br /><br /><strong>Please note that only tokens listed below are able to be used within custom BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'چه مي شود ؟',
	'TOO_MANY_BBCODES'		=> 'You cannot create any more BBCodes. Please remove one or more BBCodes then try again.',

	'tokens'	=>	array(
		'TEXT'			=> 'هر متن حاوي کاراکتر هاي خارجي, اعداد, وغيره... نبايد در تگ هاي HTML قرار گيرد.با مشخص شده ها و متون کوچک سعي کنيد.',
		'SIMPLETEXT'	=> 'Characters from the latin alphabet (A-Z), numbers, spaces, commas, dots, minus, plus, hyphen and underscore',
		'IDENTIFIER'	=> 'Characters from the latin alphabet (A-Z), numbers, hyphen and underscore',
		'NUMBER'		=> 'Any series of digits',
		'EMAIL'			=> 'A valid e-mail address',
		'URL'			=> 'A valid URL using any protocol (http, ftp, etc… cannot be used for javascript exploits). If none is given, “http://” is prefixed to the string.',
		'LOCAL_URL'		=> 'A local URL. The URL must be relative to the topic page and cannot contain a server name or protocol.',
		'COLOR'			=> 'A HTML colour, can be either in the numeric form <samp>#FF1234</samp> or a <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> such as <samp>fuchsia</samp> or <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'از اينجا شما مي توانيد نماد هايي را که کاربران مي توانند در مباحث يا پست هايشان بکار گيرند را اضافه ، حذف، يا ويرايش کنيد. اين نماد ها معمولا در فهرست انجمن ها و يا در ليست مباحث در مجاورت عنوان مباحث قابل رويت مي باشند. شما نيز مي توانيد بسته هاي نماد را نصب و يا بسته هاي جديدي را ايجاد کنيد.',
	'ACP_SMILIES_EXPLAIN'	=> 'شکلک ها و احساسات براي ايجاد نوعي جو هستند, بعضي از اوقات تصاوير انيميشني براي نقل کردن برخي هيجانات و احساسات گنجانده مي شوند. از اينجا شما مي توانيد شکلک هايي را که کاربران مي توانند در پست ها و پیام هاي خصوصي خود از آنها استفاده کنند ، اضافه ، حذف  و يا ويرايش کنيد . شما نيز مي توانيد بسته هاي شکلک را نصب و يا بسته هاي جديدي را ايجاد کنيد.',
	'ADD_SMILIES'			=> 'افزودن شکلک هاي متعدد',
	'ADD_SMILEY_CODE'		=> 'Add additional smiley code',
	'ADD_ICONS'				=> 'افزودن نماد هاي متعدد',
	'AFTER_ICONS'			=> 'بعد از %s',
	'AFTER_SMILIES'			=> 'بعد از %s',

	'CODE'						=> 'کد',
	'CURRENT_ICONS'				=> 'نماد هاي کنوني',
	'CURRENT_ICONS_EXPLAIN'		=> 'Choose what to do with the currently installed icons.',
	'CURRENT_SMILIES'			=> 'شکلک هاي کنوني',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Choose what to do with the currently installed smilies.',

	'DISPLAY_ON_POSTING'		=> 'نمايش در صفحه ارسال پست',
	'DISPLAY_POSTING'			=> 'در صفحه ارسال پست',
	'DISPLAY_POSTING_NO'		=> 'در صفحه ارسال پست نيست',



	'EDIT_ICONS'				=> 'ويرايش نماد ها',
	'EDIT_SMILIES'				=> 'ويرايش شکلک ها',
	'EMOTION'					=> 'احساس',
	'EXPORT_ICONS'				=> 'خارج سازي و دريافت icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sOn clicking this link, the configuration for your installed icons will be packaged into <samp>icons.pak</samp> which once downloaded can be used to create a <samp>.zip</samp> or <samp>.tgz</samp> file containing all of your icons plus this <samp>icons.pak</samp> configuration file%s.',
	'EXPORT_SMILIES'			=> 'خارج سازي و دريافت smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sبا کليک بر روي اين لينک, پيکربندي هاي انجام شده بر روي شکلک هاي نصب شده شما در قالب فايل <samp>smilies.pak</samp> قابل دريافت خواهد بود. شما مي توانيد فايل بسته را در قالب آرشيو <samp>.zip</samp> يا <samp>.tgz</samp> بهمراه شکلک ها و پيکربندي هاي صورت گرفته در قالب <samp>smilies.pak</samp> دريافت نماييد%s.',

	'FIRST'			=> 'نخست',

	'ICONS_ADD'				=> 'افزودن يک نماد جديد',
	'ICONS_NONE_ADDED'		=> 'No icons were added.',
	'ICONS_ONE_ADDED'		=> 'نماد با موفقيت اضافه شد.',
	'ICONS_ADDED'			=> 'نماد ها با موفقيت اضافه شدند.',
	'ICONS_CONFIG'			=> 'پيکربندي نماد ها',
	'ICONS_DELETED'			=> 'نماد با موفقيت حذف شد.',
	'ICONS_EDIT'			=> 'ويرايش نماد',
	'ICONS_ONE_EDITED'		=> 'نماد با موفقيت بروز شد.',
	'ICONS_NONE_EDITED'		=> 'No icons were updated.',
	'ICONS_EDITED'			=> 'نماد ها با موفقيت بروز شدند.',
	'ICONS_HEIGHT'			=> 'ارتفاع نماد',
	'ICONS_IMAGE'			=> 'تصوير نماد',
	'ICONS_IMPORTED'		=> 'بسته نماد با موفقيت نصب شد.',
	'ICONS_IMPORT_SUCCESS'	=> 'بسته نماد با موفقيت وارد شد.',
	'ICONS_LOCATION'		=> 'موقعيت نماد',
	'ICONS_NOT_DISPLAYED'	=> 'نماد هاي ذيل در صفحه ارسال پست قابل رويت نيستند',
	'ICONS_ORDER'			=> 'ترتيب نماد',
	'ICONS_URL'				=> 'فايل تصوير نماد',
	'ICONS_WIDTH'			=> 'عرض نماد',
	'IMPORT_ICONS'			=> 'نصب بسته نماد',
	'IMPORT_SMILIES'		=> 'نصب بسته شکلک',

	'KEEP_ALL'			=> 'نگهداري همه',

	'MASS_ADD_SMILIES'	=> 'افزودن شکلک هاي متعدد',

	'NO_ICONS_ADD'		=> 'هيچ نمادي براي اضافه شدن در دسترس نيست.',
	'NO_ICONS_EDIT'		=> 'هيچ نمادي براي ويرايش در دسترس نيست.',
	'NO_ICONS_EXPORT'	=> 'You have no icons with which to create a package.',
	'NO_ICONS_PAK'		=> 'هيچ بسته نمادي يافت نشد.',
	'NO_SMILIES_ADD'	=> 'شکلک هايي براي اضافه شدن در دسترس نيستند.',
	'NO_SMILIES_EDIT'	=> 'هيچ شکلکي براي ويرايش وجود ندارد.',
	'NO_SMILIES_EXPORT'	=> 'You have no smilies with which to create a package.',
	'NO_SMILIES_PAK'	=> 'هيچ بسته شکلکي يافت تنشد.',

	'PAK_FILE_NOT_READABLE'		=> 'نتوانست فايل <samp>.pak</samp> را بخواند.',

	'REPLACE_MATCHES'	=> 'جايگزين کردن هماهنگ ها',

	'SELECT_PACKAGE'			=> 'انتخاب يک بسته فايل',
	'SMILIES_ADD'				=> 'افزودن يک شکلک جديد',
	'SMILIES_NONE_ADDED'		=> 'No smilies were added.',
	'SMILIES_ONE_ADDED'			=> 'شکلک با موفقيت اضافه شد.',
	'SMILIES_ADDED'				=> 'شکلک ها با موفقيت اضافه شدند.',
	'SMILIES_CODE'				=> 'کد شکلک',
	'SMILIES_CONFIG'			=> 'پيکربندي شکلک',
	'SMILIES_DELETED'			=> 'شکلک با موفقيت حذف شد.',
	'SMILIES_EDIT'				=> 'ويرايش شکلک',
	'SMILIE_NO_CODE'			=> 'شکلک “%s”  پذيرش نشد, کد ثبت نشده است.',
	'SMILIE_NO_EMOTION'			=> 'شکلک “%s” پذيرش نشد, احساس ثبت نشده است.',
	'SMILIES_NONE_EDITED'		=> 'هيچ شکلکي آپديت نشده.',
	'SMILIES_ONE_EDITED'		=> 'شکلک با موفقيت بروز شد.',
	'SMILIES_EDITED'			=> 'شکلک ها با موفقيت بروز شدند.',
	'SMILIES_EMOTION'			=> 'احساس',
	'SMILIES_HEIGHT'			=> 'ارتفاع شکلک',
	'SMILIES_IMAGE'				=> 'تصوير شکلک',
	'SMILIES_IMPORTED'			=> 'بسته شکلک ها با موفقيت نصب شد.',
	'SMILIES_IMPORT_SUCCESS'	=> 'بسته شکلک ها با موفقيت وارد شد.',
	'SMILIES_LOCATION'			=> 'استقرار شکلک',
	'SMILIES_NOT_DISPLAYED'		=> 'شکلک هاي ذيل در صفحه ارسال پست قابل رويت نمي باشند',
	'SMILIES_ORDER'				=> 'موقعيت شکلک',
	'SMILIES_URL'				=> 'فايل تصوير شکلک',
	'SMILIES_WIDTH'				=> 'عرض شکلک',

	'WRONG_PAK_TYPE'	=> 'بسته تعيين شده شامل داده هاي مناسب نمي باشد.',
));

// Word censors
$lang = array_merge($lang, array(
	
	
//phpBB 3.0.5 by www.Maghsad.com
	'ACP_WORDS_EXPLAIN'		=> 'From this control panel you can add, edit, and remove words that will be automatically censored on your forums. People are still allowed to register with usernames containing these words. Wildcards (*) are accepted in the word field, e.g. *test* will match detestable, test* would match testing, *test would match detest.',
// END phpBB 3.0.5 by www.Maghsad.com


	'ADD_WORD'				=> 'افزودن يک واژه جديد',

	'EDIT_WORD'		=> 'ويرايش سانسور واژه',
	'ENTER_WORD'	=> 'شما مي بايست يک واژه و جايگزين آن را وارد کنيد.',

	'NO_WORD'	=> 'هيچ سانسور واژه اي براي ويرايش انتخاب نشده است.',

	'REPLACEMENT'	=> 'جايگزين',

	'UPDATE_WORD'	=> 'ويرايش سانسور واژه',

	'WORD'				=> 'واژه',
	'WORD_ADDED'		=> 'سانسور واژه با موفقيت اضافه شد.',
	'WORD_REMOVED'		=> 'سانسور واژه با موفقيت حذف شد.',
	'WORD_UPDATED'		=> 'سانسور واژه با موفقيت بروز شد.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'براي ويرايش رتبه هاي كنوني روي علامت چرخ دنده (سبز رنگ) و براي حذف آن ها روي علامت ضربدر (قرمز رنگ) كليك كنيد.
براي ايجاد يك رتبه جديد روي دكمه افزودن رتبه جديد كليك كنيد.
',
	'ADD_RANK'				=> 'افزودن رتبه جديد',

	'MUST_SELECT_RANK'		=> 'شما بايد يک رتبه انتخاب کنيد.',

	'NO_ASSIGNED_RANK'		=> 'هيچ رتبه اختصاصي تعريف نشده است.',
	'NO_RANK_TITLE'			=> 'شما عنواني براي اين رتبه تعيين ننموده ايد.',
	'NO_UPDATE_RANKS'		=> 'رتبه با موفقيت حذف شد. اگرچه حساب هاي کاربري با اين رتبه بروز نشدند. شما مي بايست بصورت دستي رتبه حساب هاي کاربري آنها را بازنشاني کنيد.',

	'RANK_ADDED'			=> 'رتبه با موفقيت اضافه شد.',
	'RANK_IMAGE'			=> 'تصوير رتبه',
	'RANK_IMAGE_EXPLAIN'	=> 'Use this to define a small image associated with the rank. The path is relative to the root phpBB directory.',
	'RANK_MINIMUM'			=> 'حد اقل پست ها',
	'RANK_REMOVED'			=> 'رتبه با موفقيت حذف شد.',
	'RANK_SPECIAL'			=> 'تعيين بعنوان رتبه اختصاصي',
	'RANK_TITLE'			=> 'عنوان رتبه',
	'RANK_UPDATED'			=> 'رتبه با موفقيت بروز شدس.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Here you can control usernames which will not be allowed to be used. Disallowed usernames are allowed to contain a wildcard character of *. Please note that you will not be allowed to specify any username that has already been registered, you must first delete that name then disallow it.',
	'ADD_DISALLOW_EXPLAIN'	=> 'You can disallow a username using the wildcard character * to match any character.',
	'ADD_DISALLOW_TITLE'	=> 'Add a disallowed username',

	'DELETE_DISALLOW_EXPLAIN'	=> 'You can remove a disallowed username by selecting the username from this list and clicking submit.',
	'DELETE_DISALLOW_TITLE'		=> 'حذف يک نام کاربري باطل شده',
	'DISALLOWED_ALREADY'		=> 'The name you entered could not be disallowed. It either already exists in the list, exists in the word censor list, or a matching username is present.',
	'DISALLOWED_DELETED'		=> 'The disallowed username has been successfully removed.',
	'DISALLOW_SUCCESSFUL'		=> 'نام کاربري با موفقيت براي باطل شدن اضافه شد.',

	'NO_DISALLOWED'				=> 'بدون نام هاي کاربري باطل شده',
	'NO_USERNAME_SPECIFIED'		=> 'You haven’t selected or entered a username to operate with.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Here you can manage the reasons used in reports and denial messages when disapproving posts. There is one default reason (marked with a *) you are not able to remove, this reason is normally used for custom messages if no reason fits.',
	'ADD_NEW_REASON'		=> 'افزودن دليل جديد',
	'AVAILABLE_TITLES'		=> 'عناوين محلي فعال براي گزارش ها',

	'IS_NOT_TRANSLATED'			=> 'دليل مستقر<strong>نشده</strong> است.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Reason has <strong>not</strong> been localised. If you want to provide the localised form, specify the correct key from the language files report reasons section.',
	'IS_TRANSLATED'				=> 'دليل مستقر شده است.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Reason has been localised. If the title you enter here is specified within the language files report reasons section, the localised form of the title and description will be used.',

	'NO_REASON'					=> 'دليل قادر به پيدا شدن نيست.',
	'NO_REASON_INFO'			=> 'You have to specify a title and a description for this reason.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'You are not able to remove the default reason “Other”.',

	'REASON_ADD'				=> 'افزودن دليل گزارش / عدم پذيرش جديد',
	'REASON_ADDED'				=> 'دليل گزارش / عدم پذيرش با موفقيت اضافه شد.',
	'REASON_ALREADY_EXIST'		=> 'A reason with this title already exist, please enter another title for this reason.',
	'REASON_DESCRIPTION'		=> 'شرح دليل',
	'REASON_DESC_TRANSLATED'	=> 'توضيحات نمايشي دليل',
	'REASON_EDIT'				=> 'ويرايش دليل گزارش/عدم پذيرش',
	'REASON_EDIT_EXPLAIN'		=> 'در اينجا شما مي توانيد يک دليل را اضافه و يا ويرايش کنيد. چنانچه دليل ترجمه شده باشد ، اصطلاح محلي براي توضيحات نمايش داده مي شود.',
	'REASON_REMOVED'			=> 'دليل گزارش / عدم پذيرش با موفقيت حذف شد.',
	'REASON_TITLE'				=> 'عنوان دليل',
	'REASON_TITLE_TRANSLATED'	=> 'عنوان نمايشي دليل',
	'REASON_UPDATED'			=> 'دليل گزارش / عدم پذيرش با موفقيت حذف شد.',

	'USED_IN_REPORTS'		=> 'دفعات بکار رفته براي گزارش ها',
		
		
	   // 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	   
	   	'TOO_MANY_SMILIES'			=> 'Limit of %d smilies reached.',
	    ////////////////////
    	'RANK_IMAGE_IN_USE'		=> '(In use)',
    	///////////////////
    	
	   
	   
	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
		
));

?>