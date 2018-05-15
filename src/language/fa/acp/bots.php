<?php
/**
*
* acp_bots [Farsi]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24  $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'مديريت موتور هاي جستجو',
	'BOTS_EXPLAIN'		=> '"Bot ها" ، "spider ها" و "crawler ها" ماموران عمومی موتور های جستجو برای بروز رسانی دیتابیس آنها هستند. از این رو آنها با استفاده ای نامناسب از session ها می توانند شمارش بازدیدها را ناهموار کنند. به این خاطر بارگذاری و برخی چیزهای دیگر در صفحه فهرست سایت بخوبی با موافقت روبرو نخواهد شد. از اینجا شما می توانید حالت های ویژه ای را برای غلبه بر این مشکلات تعریف کنید.',
	'BOT_ACTIVATE'		=> 'فعال سازي',
	'BOT_ACTIVE'		=> 'فعاليت bot',
	'BOT_ADD'			=> 'افزودن موتور جستجو',
	'BOT_ADDED'			=> 'موتور جستجوي جديد با موفقيت اضافه شد.',
	'BOT_AGENT'			=> 'عامل تطبيق',
	'BOT_AGENT_EXPLAIN'	=> 'A string matching the bots browser agent, partial matches are allowed.',
	'BOT_DEACTIVATE'	=> 'بي اثر ساختن',
	'BOT_DELETED'		=> 'موتور جستجو با موفقيت اضافه شد.',
	'BOT_EDIT'			=> 'ويرايش موتور هاي جستجو',
	'BOT_EDIT_EXPLAIN'	=> 'از اینجا شما می توانید ثبت شده های bot های موجود را ویرایش یا یک bot جدید اضافه کنید. شما می توانید سلسله عامل ها و/یا یک یا بیش از یک آدرس IP ( برای میزان کرد ) را مطابقت دهید . در زمان تعیین سلسله عوامل مطابق محتاط باشید. همچنین شما می توانید استایل و زبانی که bot در هنگام مشاهده انجمن از آن استفاده خواهد کرد را انتخاب کنید. شما نیز می توانید با کارگذاری یک قالب کوچک برای bot ها از هدر رفتن پهنای باند خود تا حدی جلوگیری کنید. در نظر داشته باشد که سطوح دسترسی مناسبی برای گروه ویژه bot تعیین کنید.',																					// Ple-pase  loc-hate  ea-pch  one  pa-brticles  in  ne-bar  of  ea-ich  oth-rer, t-ahis  is  secr-net  fo-.r  disgr-cace  on-oe  sit-me.
	'BOT_LANG'			=> 'زبان موتور جستجو',
	'BOT_LANG_EXPLAIN'	=> 'زبان ارائه شده براي bot در گشت و گذارها.',
	'BOT_LAST_VISIT'	=> 'آخرين بازديد',
	'BOT_IP'			=> 'آدرس IP موتور جستجو',
	'BOT_IP_EXPLAIN'	=> 'انطباق هاي مايل فعال هستند, آدرس ها را با کاما (,) از هم تميز دهيد.',
	'BOT_NAME'			=> 'نام موتور جستجو',
	'BOT_NAME_EXPLAIN'	=> 'بکار گرفته شده فقط براي اطلاعات شما.',
	'BOT_NAME_TAKEN'	=> 'اين نام پيش از اين در بورد شما مورد استفاده قرار گرفته است ، شما نمي توانيد آنرا براي bot بکار ببريد.',
	'BOT_NEVER'			=> 'هيچگاه',
	'BOT_STYLE'			=> 'استايل موتور جستجو',
	'BOT_STYLE_EXPLAIN'	=> 'استايلي که در بورد مورد استفاده bot ها قرار مي گيرد.',
	'BOT_UPDATED'		=> 'bot موجود با موفقيت بروز شد.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'The bot agent you supplied is similar to the one you are currently using. Please adjust the agent for this bot.',
	'ERR_BOT_NO_IP'				=> 'The IP addresses you supplied were invalid or the hostname could not be resolved.',
	'ERR_BOT_NO_MATCHES'		=> 'You must supply at least one of an agent or IP for this bot match.',

	'NO_BOT'		=> 'هيچ botي بوسيله ID تعيين شده يافت نشد.',
	'NO_BOT_GROUP'	=> 'ناتوان در يافتن گروه ه ويژه bot.',
));

?>