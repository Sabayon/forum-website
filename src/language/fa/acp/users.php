<?php
/**
*
* acp_users [Farsi]
*
* @package language
* @version $Id: users.php,v 1.32 2007/10/08 14:38:26  $
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
	'ADMIN_SIG_PREVIEW'	=> 'پيش نمايش امضا',
	'AT_LEAST_ONE_FOUNDER'	=> 'شما مجاز به تغيير اين بنيانگذار به کاربر عادي نيستيد. در کمترين حالت نياز است يک بنيانگذار براي انجمن تعريف شده باشد. در صورتيکه مي خواهيد وضعيت بنيانگذاري اين کاربران را تغيير دهيد, کاربر ديگري را به بنيانگذار ترفيع دهيد.',
	'BAN_ALREADY_ENTERED'	=> 'تحريم پيش از اين با موفقيت ثبت شده است. ليست تحريم بروز نشده است.',
	'BAN_SUCCESSFUL'	=> 'تحريم با موفقيت ثبت شد.',
	'CANNOT_BAN_FOUNDER'	=> 'شما مجاز به تحریم کردن حساب های کاربری بنیان گذاران نیستید.',
	'CANNOT_BAN_YOURSELF'	=> 'شما مجاز به تحریم کردن خودتان نمی باشید.',
	'CANNOT_DEACTIVATE_BOT'	=> 'شما مجاز به غير فعال سازي حساب هاي bot نيستيد. لطفا آنرا غير فعال کنيد.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'شما مجاز به غیر فعال کردن حساب های کاربری بنیان گذاران نیستید.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'شما مجاز به غیر فعال کردن حساب های کاربری خودتان نیستید.',
	'CANNOT_FORCE_REACT_BOT'	=> 'You are not allowed to force reactivation on bot accounts. Please deactivate the bot instead.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'You are not allowed to force reactivation on founder accounts.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'You are not allowed to force reactivation of your own account.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'شما مجاز به حذف حساب کاربري مهمان نيستيد.',
	'CANNOT_REMOVE_YOURSELF'	=> 'شما مجاز به حذف حساب کاربري خودتان نيستيد.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'شما مجاز به ترفيع کاربراني که به رسميت شناخته نمي شود به سمت بنيانگذار نيستيد.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'پيش از ترفيع کاربران به بنيانگذار ، مي بايست حساب کاربري آنها را تاييد کنيد, تنها کاربران فعال مجاز به ترفيع يافتن هستند.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'در صورتي که قصد داريدE-Mail را تغيير دهيد بايد اين را هم تعيين کنيد.',
	'DELETE_POSTS'	=> 'حذف پست ها',
	'DELETE_USER'	=> 'حذف کاربر',
	'DELETE_USER_EXPLAIN'	=> 'دقت کنید ـکاربر حذف شده قابل بازگشت نخواهد بود',

	'FORCE_REACTIVATION_SUCCESS'	=> 'مجوز فعاليت مجدد با موفقيت صادر شد.',
	'FOUNDER'						=> 'بنيانگذار',
	'FOUNDER_EXPLAIN'				=> 'بنيانگذار تمام سطوح دسترسي مديريت را دارا است وهمچنين هيچ گاه تحريم نمي شود.',

	'GROUP_APPROVE'					=> 'تاييد کاربر',
	'GROUP_DEFAULT'					=> 'استفاده بعنوان گروه پيشفرض براي کاربران',
	'GROUP_DELETE'					=> 'حذف کاربر از گروه',
	'GROUP_DEMOTE'					=> 'عزل رهبر گروه',
	'GROUP_PROMOTE'					=> 'Promote to group leader',

	'IP_WHOIS_FOR'	=> 'whois IP براي %s',
	'LAST_ACTIVE'	=> 'آخرين کنش',
	'MOVE_POSTS_EXPLAIN'	=> 'لطفا انجمني براي مقصد انتقالات همه پست هاي  اين کاربر تعيين کنيد.',
	'NO_SPECIAL_RANK'		=> 'هيچ رتبه خصوصي معين نشده است',
	'NOT_MANAGE_FOUNDER'	=> 'You tried to manage a user with founder status. Only founders are allowed to manage other founders.',

	'QUICK_TOOLS'			=> 'ابزارهاي سريع',

	'REGISTERED'			=> 'تاريخ عضويت',
	'REGISTERED_IP'			=> 'عضو شده از IP',
	'RETAIN_POSTS'			=> 'نگه داشتن پست ها',

	'SELECT_FORM'			=> 'انتخاب بواسطه',
	'SELECT_USER'			=> 'انتخاب کاربر',

	'USER_ADMIN'					=> 'مديريت کاربران',
	'USER_ADMIN_ACTIVATE'			=> 'فعال سازي حساب',
	'USER_ADMIN_ACTIVATED'			=> 'کاربر با موفقيت فعال شد.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'آواتار با موفقيت از حساب کاربري حذف شد.',
	'USER_ADMIN_BAN_EMAIL'			=> 'قطع دسترسي توسطE-Mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'آدرس ايميل توسط اداره کننده کاربران تحريم شده است',
	'USER_ADMIN_BAN_IP'				=> 'قطع دسترسي توسط IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'آدرس IP توسط مديرت کاربران تحريم شده است',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'نام کاربري توسط اداره کننده کاربران تحريم شده است',
	'USER_ADMIN_BAN_USER'			=> 'قطع دسترسي توسط نام کاربري',
	'USER_ADMIN_DEACTIVATE'			=> 'غيرفعال کردن اکانت',
	'USER_ADMIN_DEACTIVED'			=> 'کاربر با موفقيت غيرفعال شد.',
	'USER_ADMIN_DEL_ATTACH'			=> 'حذف همه پيوست ها',
	'USER_ADMIN_DEL_AVATAR'			=> 'حذف آواتار',
	'USER_ADMIN_DEL_POSTS'			=> 'حذف همه پست ها',
	'USER_ADMIN_DEL_SIG'			=> 'حذف امضا',
	'USER_ADMIN_EXPLAIN'			=> 'در اين قسمت شما مي توانيد اطلاعات کاربران و تنظيمات تعيين شده آنها را تغيير دهيد. براي تفيير سطح دسترسي لطفا کاربر و گروه را انتخاب نماييد.',
	'USER_ADMIN_FORCE'				=> 'انتقال همه پست ها',
	'USER_ADMIN_MOVE_POSTS'			=> 'انتقال همه پست ها',
	'USER_ADMIN_SIG_REMOVED'		=> 'امضا با موفقيت از حساب کاربري حذف شد.',
	'USER_ATTACHMENTS_REMOVED'		=> 'تمام پيوست هاي ساخته شده توسط اين کاربر حذف شد.',
	'USER_AVATAR_UPDATED'			=> 'آواتارها و جزييات کاربر به روز شد.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'فيلد هاي انتخابي مشخصات',
	'USER_DELETED'					=> 'کاربر با موفقيت حذف شد.',
	'USER_GROUP_ADD'				=> 'افزودن کاربر يه گروه',
	'USER_GROUP_NORMAL'				=> 'Normal groups user is a member of',
	'USER_GROUP_PENDING'			=> 'Groups user is in pending mode',
	'USER_GROUP_SPECIAL'			=> 'Special groups user is a member of',
	'USER_NO_ATTACHMENTS'			=> 'هيچ فايل پيوستي براي نمايش نيست.',
	'USER_OVERVIEW_UPDATED'			=> 'جزييات کاربر به روز شد.',
	'USER_POSTS_DELETED'			=> 'تمام پست هاي ساخته شده توسط کاربر حذف شد.',
	'USER_POSTS_MOVED'				=> 'پست هاي کاربر با موفقيت به انجمن هدف انتقال پيدا کرد.',
	'USER_PREFS_UPDATED'			=> 'پيکربندي کاربر به روز شد.',
	'USER_PROFILE'					=> 'مشخصات کاربر',
	'USER_PROFILE_UPDATED'			=> 'مشخصات کاربر به روز شد.',
	'USER_RANK'						=> 'رتبه کاربر',
	'USER_RANK_UPDATED'				=> 'رتبه کاربر به روز شد.',
	'USER_SIG_UPDATED'				=> 'امضاي کاربر با موفقيت به روز شد.',
	'USER_TOOLS'					=> 'ابزارهاي اساسي',
		
		
    	//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	
		
		'NO_WARNINGS'			=> 'No warnings.',
///////////////////////////

	'USER_ADMIN_DEL_OUTBOX'			=> 'Empty PM outbox',

///////////////////////////

	'USER_ADMIN_LEAVE_NR'			=> 'Remove from Newly Registered',

//////////////////////////

	'USER_AVATAR_NOT_ALLOWED'		=> 'The avatar cannot be displayed because avatars have been disallowed.',

//////////////////////////

	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'The current avatar cannot be displayed because its type has been disallowed.',

/////////////////////////

	'USER_LIFTED_NR'				=> 'Successfully removed the user’s newly registered status.',

////////////////////////

	'USER_OUTBOX_EMPTIED'			=> 'Successfully emptied user’s private message outbox.',
	'USER_OUTBOX_EMPTY'				=> 'The user’s private message outbox was already empty.',


///////////////////////

	'USER_WARNING_LOG_DELETED'		=> 'No information available. Possibly the log entry has been deleted.',
	
		
		// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	
		
));

?>