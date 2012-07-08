<?php
/**
*
* acp_database.php [Farsi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
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
	'ACP_BACKUP_EXPLAIN'	=> 'در این قسمت شما می توانید از تمامی داده های phpBB پشتیبان تهیه نمایید. شما قادرید نتایج را در شاخه store/ انبار کرده یا آنرا مستقیما دریافت نمایید. با توجه به پیکربندی سرورتان قادر به انتخاب چندین فرمت فشرده خواهید بود.',
	'ACP_RESTORE_EXPLAIN'	=> 'در این قسمت شما قادرید تمامی جداول phpBB را از فایل های ذخیره شده بازگردانی نمایید. در صورتی که سرور شما از فرمت های فشرده bzip2 و gzip پشتیبانی نماید فایل متنی بصورت خودکار از آنها استخراج خواهد شد. فرآیند بازگردانی ممکن است مدتی بطول بینجامد لطفا در خلال بازگردانی این صفحه را منتقل یا  متوقف نکنید. فایل های پشتیبان در شاخه store/ انبار می شوند و این طبق فانکشن های پشتیبان گیری phpBB می باشد.',
	'BACKUP_DELETE'	=> 'فایل پشتیبان با موفقیت حذف شد.',
	'BACKUP_INVALID'	=> 'فایل انتخاب شده برای پشتیبان بی اعتبار بود.',
	'BACKUP_OPTIONS'	=> 'تنظیمات پشتیبان',
	'BACKUP_SUCCESS'	=> 'فایل پشتیبان با موفقیت ایجاد شد.',
	'BACKUP_TYPE'	=> 'نوع پشتیبان',
	'DATABASE'	=> 'فواید دیتابیش',
	'DATA_ONLY'	=> 'فقط داده ها',
	'DELETE_BACKUP'	=> 'حذف پشتیبان',
	'DELETE_SELECTED_BACKUP'	=> 'آیا از حذف پشتیبان انتخاب شده اطمینان دارید ؟',
	'DESELECT_ALL'	=> 'لغو انتخاب همه',
	'DOWNLOAD_BACKUP'	=> 'دریافت پشتیبان',
	'FILE_TYPE'	=> 'نوع فایل',
	'FULL_BACKUP'	=> 'کامل',
	'RESTORE_FAILURE'	=> 'فایل پشتیبان ممکن است خراب شده باشد.',
	'RESTORE_OPTIONS'	=> 'تنظیمات بازگردانی',
	'RESTORE_SUCCESS'	=> 'این دیتابیس با موفقیت بازگردانی شد.<br /><br />انجمن شما بازگشته است.',
	'SELECT_ALL'	=> 'انتخاب همه',
	'SELECT_FILE'	=> 'انتخاب یک فایل',
	'START_BACKUP'	=> 'شروع پشتیبان گیری',
	'START_RESTORE'	=> 'شروع بازگردانی',
	'STORE_AND_DOWNLOAD'	=> 'انبار و دریافت',
	'STORE_LOCAL'	=> 'ذخیره فایل مکانی',
	'STRUCTURE_ONLY'	=> 'فقط ساختار',
	'TABLE_SELECT'	=> 'انتخاب جدول',
	'TABLE_SELECT_ERROR'	=> 'در کمترین حالت می بایست یک جدول را انتخاب نمایید .',
	
   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	
   
   
   	'FILE_WRITE_FAIL'	=> 'Unable to write file to storage folder.',

////////////////////////////////////////////
	'CONTINUE'						=> 'Continue',
/////////////////////////////////////////////////



   
   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	   	
	
	
	
));

?>