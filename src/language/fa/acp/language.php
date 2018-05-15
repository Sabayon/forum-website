<?php
/**
*
* acp_language [Farsi]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24  $
* @copyright (c) 2005 phpBB Group- www.Maghsad.com
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
	'ACP_FILES'						=> 'فايل هاي زبان مديريت',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'در این بخش می توانید بسته های زبانی را نصب یا پاک کنید. زبان پیشفرض با علامت ستاره مشخص شده است.',


	'EMAIL_FILES'			=> 'قالب هاي ايميل',

	'FILE_CONTENTS'				=> 'محتواي فايل',
	'FILE_FROM_STORAGE'			=> 'فايل در پوشه انبار شده',

	'HELP_FILES'				=> 'فايل هاي آموزشي',

	'INSTALLED_LANGUAGE_PACKS'	=> 'بسته هاي نصب شده زبان',
	'INVALID_LANGUAGE_PACK'		=> 'بسته زبان صحيح بنظر نمي آيد. لطفا آن را بررسي کرده و در صورت لزوم آن را مجددا آپلود نماييد.',
	'INVALID_UPLOAD_METHOD'		=> 'روش بکار گرفته شده براي آپلود صحيح نيست, لطفا روش ديگري بکاربگيريد.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'اطلاعات زبان با موفقيت بروز شد.',
	'LANGUAGE_ENTRIES'					=> 'ورودي هاي زبان',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> '	در این قسمت شما قادرید داده های فایل های زبان را ویرایش یا عبارت های مورد نظرتان را ترجمه کنید.<br /><strong>نکته:</strong> در صورت ویرایش یک فایل زبان ، فایل ویرایش شده در یک شاخه مجزا ( store) قرار خواهد گرفت. تغییرات برای کاربران شما تا هنگامی که فایل ویرایش شده جایگزین فایل اصلی نشود قابل مشاهده نمی باشد.',
	'LANGUAGE_FILES'					=> 'فايل زبان',
	'LANGUAGE_KEY'						=> 'کليد زبان',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'اين بسته زبان قبلا نصب شده است.',
	'LANGUAGE_PACK_DELETED'				=> 'بسته زبان<strong>%s</strong> با موفقيت حذف شد. تمام کاربراني که از اين بسته استفاده مي کرده اند از اين پس از بسته پيشفرض انجمن استفاده مي کنند.',
	'LANGUAGE_PACK_DETAILS'				=> 'جزييات بسته زبان',
	'LANGUAGE_PACK_INSTALLED'			=> 'اين فايل زبان <strong>%s</strong> با موفقيت نصب شد.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'نام محلي',
	'LANGUAGE_PACK_NAME'				=> 'نام',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'فايل زبان انتخاب شده موجود نمي باشد.',
	'LANGUAGE_PACK_USED_BY'				=> 'بکارگرفته شده با (محتوي robots)',
	'LANGUAGE_VARIABLE'					=> 'زبان متغير',
	'LANG_AUTHOR'						=> 'نويسنده بسته زيان',
	'LANG_ENGLISH_NAME'					=> 'نام انگليسي',
	'LANG_ISO_CODE'						=> 'کد ISO',
	'LANG_LOCAL_NAME'					=> 'نام محلي',

	'MISSING_LANGUAGE_FILE'		=> 'فايل نادرست زبان: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'متغيرهاي نادرست زبان',
	'MODS_FILES'				=> 'فايل هاي زبان مودها',

	'NO_FILE_SELECTED'				=> 'شما يک فايل زبان تعيين نکرده ايد.',
	'NO_LANG_ID'					=> 'شما يک بسته زبان تعيين نکرده ايد.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'شما توانايي حذف کردن بسته زبان پيشفرض را نداريد.<br />در صورتي که قصد حذف کردن اين بسته زبان را داريد, ابتدا زبان پيشفرض را تغيير دهيد.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'بدون بسته هاي زبان نصب نشده',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'حذف از پوشه انبار شده',

	'SELECT_DOWNLOAD_FORMAT'	=> 'انتخاب فرمت دريافت',
	'SUBMIT_AND_DOWNLOAD'		=> 'ثبت و دريافت فايل',
	'SUBMIT_AND_UPLOAD'			=> 'ثبت و آپلود فايل',

	'THOSE_MISSING_LANG_FILES'			=> 'The following language files are missing from the %s language folder',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'The following language variables are missing from the <strong>%s</strong> language pack',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'فايل هاي زبان نصب نشده',

	'UNABLE_TO_WRITE_FILE'		=> 'فايل قابل خواندن براي %s نيست.',
	'UPLOAD_COMPLETED'			=> 'آپلود با موفقيت کامل شده است.',
	'UPLOAD_FAILED'				=> 'آپلود بدلايل نامعلوم موفقيت آميز نبود. در صورت نياز مي توانيد فايل را بصورت دستي جايگزين کنيد.',
	'UPLOAD_METHOD'				=> 'روش آپلود',
	'UPLOAD_SETTINGS'			=> 'تنظيمات آپلود',

	'WRONG_LANGUAGE_FILE'		=> 'فايل هاي زبان انتخاب شده اشتباه است.',
		
		
		
		// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	 	

	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Here you can copy forum permissions from one forum to one or more other forums.',

/////////////////////////

	'ROLE_FORUM_NEW_MEMBER'		=> 'Newly registered User',

/////////////////////////////////////

	'ROLE_USER_NEW_MEMBER'		=> 'Newly registered User',

/////////////////////////////////////

	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',


////////////////////////////////////

	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',


////////////////////////////////////

	'TRACE_USER_FOUNDER'					=> 'The user is a founder, therefore admin permissions are always set to <samp>YES</samp>.',


///////////////////////////////////
	
	    //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	 	
));

?>