<?php
/**
*
* viewtopic [Farsi]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
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
	'ATTACHMENT'						=> 'پيوست',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'قابلیت ضمیمه کردن غیر فعال شده.',

	'BOOKMARK_ADDED'		=> 'مبحث با موفقیت نشانه گذاری شد.',
	'BOOKMARK_ERR'			=> 'نشان گذاری (Bookmark) این موضوع با شکست مواجه شد.لطفا مجددا تلاش کنید.',
	'BOOKMARK_REMOVED'		=> 'نشانه گذاری مبحث با موفقیت حذف شد.',
	'BOOKMARK_TOPIC'		=> 'نشانه گذاری مبحث',
	'BOOKMARK_TOPIC_REMOVE'	=> 'حذف از نشانه گذاری ها
',
	'BUMPED_BY'				=> 'آخرین بالا اندازی (Bump) توسط %1$s در %2$s',
	'BUMP_TOPIC'			=> 'بالا انداختن (Bump کردن) موضوع',

	'CODE'					=> 'کد',

	'DELETE_TOPIC'			=> 'حذف مبحث',
	'DOWNLOAD_NOTICE'		=> 'شما سطح دسترسی مورد نیاز برای مشاهده و دریافت فایل های پیوست این پست را ندارید.',

	'EDITED_TIMES_TOTAL'	=> 'آخرين ويرايش توسط %1$s on %2$s, ويرايش شده در %3$d.',
	'EDITED_TIME_TOTAL'		=> 'در کل %3$d بار ویرایش شده. اخرین ویرایش توسط %1$s در %2$s .',
	'EMAIL_TOPIC'			=> 'ارسال به دوستان',
	'ERROR_NO_ATTACHMENT'	=> 'ضمیمه انتخاب شده دیگر موجود نیست',

	'FILE_NOT_FOUND_404'	=> 'فایل <strong>%s</strong> موجود نیست.',
	'FORK_TOPIC'			=> 'کپي از مبحث',

	'LINKAGE_FORBIDDEN'		=> 'شما اجازه نمایش،دریافت یا لینک دادن از/به این سایت را ندارید.',
	'LOGIN_NOTIFY_TOPIC'	=> 'شما از این تاپیک مطلع شدید.برای مشاهده باید با شناسه کاربری خود وارد شوید.',
	'LOGIN_VIEWTOPIC'		=> 'برای مشاهده این موضوع حتما باید عضو شوید و با شناسه کاربری خود وارد شوید.',

	'MAKE_ANNOUNCE'				=> 'تغییر به اطلاعیه',
	'MAKE_GLOBAL'				=> 'تغيير به “اطلاعيه کلي (درهمه انجمن ها)”',
	'MAKE_NORMAL'				=> 'تغيير به “مبحث استاندارد”',
	'MAKE_STICKY'				=> 'تغيير به “مهم”',
	'MAX_OPTIONS_SELECT'		=> 'شما می توانید حداکثر تا <strong>%d</strong> گزینه را انتخاب نمایید.',
	'MAX_OPTION_SELECT'			=> 'شما مي توانيد <strong>1</strong> گزينه را انتخاب نماييد',
	'MISSING_INLINE_ATTACHMENT'	=> 'فایل ضمیمه <strong>%s</strong> دیگر موجود نیست.',
	'MOVE_TOPIC'				=> 'انتقال مبحث',

	'NO_ATTACHMENT_SELECTED'=> 'شماهیچ ضمیمه ای برای دریافت یا نمایش انتخاب نکردید.',
	'NO_NEWER_TOPICS'		=> 'موضوع جدید تری در این انجمن وجود ندارد',
	'NO_OLDER_TOPICS'		=> 'موضوع قدیمی تری در این انجمن وجود ندارد.',
	'NO_UNREAD_POSTS'		=> 'موضوع ناخوانده دیگری در این انجمن موجود نیست.',
	'NO_VOTE_OPTION'		=> 'در هنگام ارسال راي لطفا يک گزينه را انتخاب کنيد.',
	'NO_VOTES'				=> 'بدون راي',

	'POLL_ENDED_AT'			=> 'پايان نظرسنجي در %s',
	'POLL_RUN_TILL'			=> 'مدت زمان نظر سنجی تا %s ادامه خواهد داشت.',
	'POLL_VOTED_OPTION'		=> 'شما به اين گزينه راي داده ايد',
	'PRINT_TOPIC'			=> 'حالت پرينت',

	'QUICK_MOD'				=> 'ابزار فوري',
	'QUOTE'					=> 'نقل قول',

	'REPLY_TO_TOPIC'		=> 'پاسخ به مبحث',
	'RETURN_POST'			=> '%sبازگشت به پست%s',

	'SUBMIT_VOTE'			=> 'ثبت نظر شما',

	'TOTAL_VOTES'			=> 'کل آرا',

	'UNLOCK_TOPIC'			=> 'بازکردن مبحث',

	'VIEW_INFO'				=> 'جزييات پست',
	'VIEW_NEXT_TOPIC'		=> 'مبحث بعدي',
	'VIEW_PREVIOUS_TOPIC'	=> 'مبحث پيشين',
	'VIEW_RESULTS'			=> 'نمايش نتيجه',
	'VIEW_TOPIC_POST'		=> '1 پست',
	'VIEW_TOPIC_POSTS'		=> '%d پست',
	'VIEW_UNREAD_POST'		=> 'اولين پست خوانده نشده',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'راي شما محسوب شد.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	'COLLAPSE_QR'			=> 'پنهان کردن پاسخ سریع',
	'FULL_EDITOR'			=> 'ادیتور کامل',
	'QUICKREPLY'			=> 'پاسخ سریع',
	'SHOW_QR'				=> 'پاسخ سریع',

//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com




));
//File view topic.php now is 100% Translated to Persian (Farsi)
//2008-12-4 - 14 Azar 87 - 1:22 pm
//www.phpBB.Maghsad.com
//Asef
?>