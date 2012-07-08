<?php
/**
*
* acp_profile [Farsi]
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
	'ADDED_PROFILE_FIELD'	=> 'فیلد شفارشی مشخصات با موفقیت ایجاد شد.',
	'ALPHA_ONLY'	=> 'فقط الفکاری',
	'ALPHA_SPACERS'	=> 'الفماری و فاصله ها',
	'ALWAYS_TODAY'	=> 'همیشه تاریخ کنونی',
	'BOOL_ENTRIES_EXPLAIN'	=> 'تنظیمات خود را وارد کنید',
	'BOOL_TYPE_EXPLAIN'	=> 'تعیین کردن نوع, دو حالت چک باکس و تکمه های رادیو دارد. یک چک باکس فقط برای بررسی به کاربران مختلف نشان داده می شود..دکمه های رادیو با صرف نظر از مقادیرشان قابل نمایش خواهند بود.',
	'CHANGED_PROFILE_FIELD'	=> 'فیلد مشخصات با موفقیت ویرایش شد.',
	'CHARS_ANY'	=> 'هر کاراکتر',
	'CHECKBOX'	=> 'چک باکس',
	'COLUMNS'	=> 'ستون ها',
	'CP_LANG_DEFAULT_VALUE'	=> 'مقدار پیش فرض',
	'CP_LANG_EXPLAIN'	=> 'توضیحات فیلد',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'The explanation for this field presented to the user.',
	'CP_LANG_NAME'	=> 'Field name/title presented to the user',
	'CP_LANG_OPTIONS'	=> 'تنظیمات',
	'CREATE_NEW_FIELD'	=> 'ایجاد فیلد جدید',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'At least one custom profile field has not yet been translated. Please enter the required information by clicking on the “Translate” link.',
	'DEFAULT_ISO_LANGUAGE'	=> 'زبان پیشفرض [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'ورودی های زبان پیشفرض برای این فیلد صدق نمی کنند.',
	'DEFAULT_VALUE'	=> 'مقدار پیشفرض',
	'DELETE_PROFILE_FIELD'	=> 'حذف فیلد مشخصات',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'آیا از حذف نمودن این فیلد مشخصات اطمینان دارید ؟',
	'DISPLAY_AT_PROFILE'	=> 'نمایش در کنترل پنل کاربر',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'کاربر توانایی ویرایش این فیلد مشخصات در کنترل پنل کاربری را داراست.',
	'DISPLAY_AT_REGISTER'	=> 'نمایش در صحنه عضویت',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'If this option is enabled, the field will be displayed on registration and able to be changed within the user control panel.',
	'DISPLAY_PROFILE_FIELD'	=> 'نمایش فیلد مشخصات بصورت عمومی',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'The profile field will be shown in all places allowed within the load settings. Setting this to “no” will hide the field from topic pages, profiles and the memberlist.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'گزینه های خود را وارد کنید ، هرگزینه در یک خط.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Please note that you are able to change your options text and also able to add new options to the end. It is not advised to add new options between existing options - this could result in wrong options assigned to your users. This can also happen if you remove options in-between. Removing options from the end result in users having assigned this item now reverting back to the default one.',
	'EMPTY_FIELD_IDENT'	=> 'فیلد بدون هویت',
	'EMPTY_USER_FIELD_NAME'	=> 'لطفا نام/عنوان فیلد را وارد کنید',
	'ENTRIES'	=> 'ثبت شده ها',
	'EVERYTHING_OK'	=> 'همه چیز تصویت',
	'FIELD_BOOL'	=> 'Boolean (بلی/خیر)',
	'FIELD_DATE'	=> 'تاریخ',
	'FIELD_DESCRIPTION'	=> 'توضیحات فیلد',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'شرح این فیلد برای کاربر.',
	'FIELD_DROPDOWN'	=> 'جعبه کشويي',
	'FIELD_IDENT'	=> 'هویت فیلد',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'این هویت پیش از این بکارگرفته شده است. لطفا نام دیگری انتخاب نمایید.',
	'FIELD_IDENT_EXPLAIN'	=> 'هویت فیلد نامی است که آنرا در پایگاه داده ها و قالب ها تمیز می دهد.',
	'FIELD_INT'	=> 'اعداد',
	'FIELD_LENGTH'	=> 'امتداد برای باکس input',
	'FIELD_NOT_FOUND'	=> 'فیلد مشخصات پیدا نشد.',
	'FIELD_STRING'	=> 'فيلد متني',
	'FIELD_TEXT'	=> 'ناحيهمتني ( Textarea )',
	'FIELD_TYPE'	=> 'حالت فیلد',
	'FIELD_TYPE_EXPLAIN'	=> 'شما نمی توانید حالت فیلد را بعدا تغییر دهید.',
	'FIELD_VALIDATION'	=> 'تایید اعتبار فیلد',
	'FIRST_OPTION'	=> 'نخستین گزینه',
	'HIDE_PROFILE_FIELD'	=> 'فیلد پنهان مشخصات',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Only administrators and moderators are able to see/fill out this profile field. If this option is enabled, the profile field will be only displayed in users’ profiles.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Field identification can only contain lowercase a-z and _',
	'INVALID_FIELD_IDENT_LEN'	=> 'هویت فیلد تنها می تواند 17 کاراکتر امتداد یابد',
	'ISO_LANGUAGE'	=> 'زبان [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'متعلقات تعيين زبان [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'حداکثر تعداد کاراکتر ها',
	'MAX_FIELD_NUMBER'	=> 'بيشترين تعداد مجاز',
	'MIN_FIELD_CHARS'	=> 'حد اکثر تعداد کاراکتر ها',
	'MIN_FIELD_NUMBER'	=> 'کمترين تعداد مجاز',
	'NO_FIELD_ENTRIES'	=> 'هیچ ثبت شده ای تعیین نشده است',
	'NO_FIELD_ID'	=> 'ID فیلد تعیین نشده است.',
	'NO_FIELD_TYPE'	=> 'حالت فیلد تعیین نشده است.',
	'NO_VALUE_OPTION'	=> 'Option equal to non entered value',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Value for a non-entry. If the field is required, the user gets an error if he choose the option selected here.',
	'NUMBERS_ONLY'	=> 'فقط اعداد (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'گزینه های اساسی',
	'PROFILE_FIELD_ACTIVATED'	=> 'فیلد مشخصات با موفقیت فعال شد.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'فیلد مشخصات با موفقیت غیرفعال شد.',
	'PROFILE_LANG_OPTIONS'	=> 'گزینه های ویژه زبان',
	'PROFILE_TYPE_OPTIONS'	=> 'گزینه های ویژه حالت مشخصات',
	'RADIO_BUTTONS'	=> 'تکمه های زادیو',
	'REMOVED_PROFILE_FIELD'	=> 'فیلد مشخصات با موفقیت حذف شد.',
	'REQUIRED_FIELD'	=> 'فیلد الزامی',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Force profile field to be filled out or specified by user. This will display the profile field at registration and within the user control panel.',
	'ROWS'	=> 'سطرها',
	'SAVE'	=> 'ذخیره',
	'SECOND_OPTION'	=> 'گزینه های ثانوی',
	'STEP_1_EXPLAIN_CREATE'	=> 'Here you can enter the first basic parameters of your new profile field. This information is needed for the second step where you’ll be able to set remaining options and tweak your profile field further.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Here you can change the basic parameters of your profile field. The relevant options are re-calculated within the second step.',
	'STEP_1_TITLE_CREATE'	=> 'افزودن فیلد مشخصات',
	'STEP_1_TITLE_EDIT'	=> 'ویرایش فیلد مشخصات',
	'STEP_2_EXPLAIN_CREATE'	=> 'Here you are able to define some common options you may want to adjust.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Here you are able to change some common options.<br /><strong>Please note that changes to profile fields will not affect existing profile fields entered by your users.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Profile type specific options',
	'STEP_2_TITLE_EDIT'	=> 'Profile type specific options',
	'STEP_3_EXPLAIN_CREATE'	=> 'Since you have more than one board language installed, you have to fill out the remaining language items too. The profile field will work with the default language enabled, you are able to fill out the remaining language items later too.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Since you have more than one board language installed, you now can change or add the remaining language items too. The profile field will work with the default language enabled.',
	'STEP_3_TITLE_CREATE'	=> 'Remaining language definitions',
	'STEP_3_TITLE_EDIT'	=> 'تعیرف زبان',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default phrase to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default text to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TRANSLATE'	=> 'ترجمه',
	'USER_FIELD_NAME'	=> 'Field name/title presented to the user',
	'VISIBILITY_OPTION'	=> 'گزينه هاي بصري',
	
	
	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	   
	   	'DISPLAY_ON_VT'					=> 'Display on viewtopic screen',
	    'DISPLAY_ON_VT_EXPLAIN'			=> 'If this option is enabled, the field will be displayed in the mini-profile on the topic screen.',


	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	
	
));

?>