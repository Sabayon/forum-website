<?php
/**
*
* acp_ban [Farsi]
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
	'1_HOUR'	=> '1 ساعت',
	'30_MINS'	=> '30 دقيقه',
	'6_HOURS'	=> '6 ساعت',
	'ACP_BAN_EXPLAIN'	=> 'در اينجا شما مي توانيد تحريم ها را با استفاده از نام, IP و يا آدرس ايميل بکار ببريد. اين روش ها از دستيابي کاربر به هر قسمت از انجمن جلوگيري مي کند. شما مي توانيد در صورت دلخواه دليل کوتاهي ( 3000 کاراکتر ) براي تحريم شدگان درج کنيد. اين در کارنامه اعمال مدير قابل رويت خواهد بود. مدت زمان تحريم هم قابل تعيين شدن است. در صورتي که قصد تعيين تاريخ انقضاي تحريم را با دقت بيشتري داريد از گزينه  <span style="text-decoration: underline;">ديگر.. -&gt;</span> براي طول مدت تحريم با فرمت زماني <kbd>YYYY-MM-DD</kbd> استفاده کنيد.',
	'BAN_EXCLUDE'	=> 'راه ندادن بواسطه تحريم',
	'BAN_LENGTH'	=> 'طول تحريم',
	'BAN_REASON'	=> 'دليل تحريم',
	'BAN_GIVE_REASON'	=> 'دليل نمايشي براي تحريم شده',
	'BAN_UPDATE_SUCCESSFUL'	=> 'ليست تحريم شده ها با موفقيت بروز شد.',
	'EMAIL_BAN'	=> 'تحريم کردن يک يا چند آدرسE-Mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'فعال بودن اين براي راه ندادن آدرس ايميل هاي وارد شده براي همه تحريم هاي کنوني.',
	'EMAIL_BAN_EXPLAIN'	=> 'در صورتي که قصدتعيين بيش از يک آدرسE-Mail را داريد هر کدام را در يک خطر جداگانه قرار دهيد. براي هماهنگ سازي بخشي از آدرس ها از * استفاده کنيد, مثال. <span dir=ltr><samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp></span>, و غيره.',
	'EMAIL_NO_BANNED'	=> 'هيچ آدرسE-Mailي تحريم نشده است',
	'EMAIL_UNBAN'	=> 'لغو تحريمE-Mail ها',
	'EMAIL_UNBAN_EXPLAIN'	=> 'شما مي توانيد ايميل هاي متعددي را با آمیزش مناسبی از موس،  صفحه کلید و مرورگرتان لغو تحريم (يا لغو مانع شدن) نمایید. ایمیل های مانع شده پر اهمیت تر هستند.',
	'IP_BAN'	=> 'تحريم يک يا چند IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Enable this to exclude the entered IP from all current bans.',
	'IP_BAN_EXPLAIN'	=> 'To specify several different IPs or hostnames enter each on a new line. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use “*”.',
	'IP_HOSTNAME'	=> 'آدرس هاي IP يا HostName ها',
	'IP_NO_BANNED'	=> 'بدون آدرس IP تحريم شده',
	'IP_UNBAN'	=> 'لغو تحريم يا لغو مانع شدن IP ها',
	'IP_UNBAN_EXPLAIN'	=> 'شما می توانید با آمیزش صحیحی از موس ، صفحه کلید ، رایانه و مرورگرتان IP های متعددی را  لغو تحریم یا لغو مانع شدن نمایید. IP های مانع شده نمایان ترند.',
	'LENGTH_BAN_INVALID'	=> 'تاريخ طبق قالب <kbd>YYYY-MM-DD</kbd> مي باشد.',
	'PERMANENT'	=> 'ابدي',
	'UNTIL'	=> 'ديگر...',
	'USER_BAN'	=> 'تحريم يک يا بيش از يک حساب کاربري',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Enable this to exclude the entered users from all current bans.',
	'USER_BAN_EXPLAIN'	=> 'شما مي توانيد چندين کاربر را بطور همزمان  با نگاشتن هر نام کاربري در يک خط مجزا تحريم کنيد. از امکان <span style="text-decoration: underline;">جستجوي يک کاربر</span> براي يافتن يک يا چند کاربر بصورت خودکار ، استفاده کنيد.',
	'USER_NO_BANNED'	=> 'هیچ حساب کاربری تحریم شده ای نیست ',
	'USER_UNBAN'	=> 'لفو تحريم و راه ندادن حساب هاي کاربري',
	'USER_UNBAN_EXPLAIN'	=> 'شما می توانید با آمیزش صحیحی از موس ، صفحه کلید و مرورگرتان کاربران متعددی را لغو تحریم ( یا لغو مانعیت ) نمایید . کاربران مانع شده نمایان ترند .',
	
	//START 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	
		'BANNED_UNTIL_DATE'		=> 'تا %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s روز (تا %2$s ) ', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"
			
			
	//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	
));

?>