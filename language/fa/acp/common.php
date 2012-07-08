<?php
/**
*
* acp common [Farsi]
*
* @package language
* @version $Id: common.php,v 1.120 2007/10/04 15:07:24  $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'مديران',
	'ACP_ADMIN_LOGS'			=> 'فعاليت هاي مدير',
	'ACP_ADMIN_ROLES'			=> 'نوع دسترسي مدير',
	'ACP_ATTACHMENTS'			=> 'پيوست ها',
	'ACP_ATTACHMENT_SETTINGS'	=> 'تنظيمات پيوست',
	'ACP_AUTH_SETTINGS'			=> 'تصديق',
	'ACP_AUTOMATION'			=> 'هدايت خودکار',
	'ACP_AVATAR_SETTINGS'		=> 'تنظيمات آواتار',

	'ACP_BACKUP'				=> 'پشتيبان',
	'ACP_BAN'					=> ' ',
	'ACP_BAN_EMAILS'			=> 'تحريمE-Mail ها',
	'ACP_BAN_IPS'				=> 'تحريم IP ها',
	'ACP_BAN_USERNAMES'			=> 'تحريم نام هاي کاربري',
	'ACP_BBCODES'				=> 'BBCode ها',
	'ACP_BOARD_CONFIGURATION'	=> 'پيکربندي انجمن',
	'ACP_BOARD_FEATURES'		=> 'خصوصيات انجمن',
	'ACP_BOARD_MANAGEMENT'		=> 'مديريت انجمن',
	'ACP_BOARD_SETTINGS'		=> 'تنظيمات انجمن',
	'ACP_BOTS'					=> 'روبات/عنکبوت هاي جستجوگر',
	
	'ACP_CAPTCHA'				=> '  ',

	'ACP_CAT_DATABASE'			=> 'ديتابيس',
	'ACP_CAT_DOT_MODS'			=> 'سایر مود ها و امکانات اضافه شده',
	'ACP_CAT_FORUMS'			=> 'انجمن ها',
	'ACP_CAT_GENERAL'			=> 'اصلي',
	'ACP_CAT_MAINTENANCE'		=> 'نگهداري و تعمير',
	'ACP_CAT_PERMISSIONS'		=> 'سطوح دسترسي',
	'ACP_CAT_POSTING'			=> 'ارسال پست',
	'ACP_CAT_STYLES'			=> 'استايل ها',
	'ACP_CAT_SYSTEM'			=> 'سيستم',
	'ACP_CAT_USERGROUP'			=> 'کاربران و گروه ها',
	'ACP_CAT_USERS'				=> 'کاربران',
	'ACP_CLIENT_COMMUNICATION'	=> 'ارتباط Client',
	'ACP_COOKIE_SETTINGS'		=> 'تنظيمات كوكي',
	'ACP_CRITICAL_LOGS'			=> 'گزارش خطا',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'فيلدهاي انتخابي مشخصات',
	
	'ACP_DATABASE'				=> ' ',
	'ACP_DISALLOW'				=> ' ',
	'ACP_DISALLOW_USERNAMES'	=> 'نام هاي كاربري غير مجاز',
	
	'ACP_EMAIL_SETTINGS'		=> 'تنظيماتE-Mail',
	'ACP_EXTENSION_GROUPS'		=> 'مديريت گروه پسوندها',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'سطح دسترسي مستقر انجمن',
	'ACP_FORUM_LOGS'				=> 'گزارش هاي انجمن',
	'ACP_FORUM_MANAGEMENT'			=> 'مديريت انجمن',
	'ACP_FORUM_MODERATORS'			=> 'مديران انجمن',
	'ACP_FORUM_PERMISSIONS'			=> 'سطوح دسترسي انجمن',
	'ACP_FORUM_ROLES'				=> 'نوع دسترسي انجمن',

	'ACP_GENERAL_CONFIGURATION'		=> 'تنظيمات اصلي',
	'ACP_GENERAL_TASKS'				=> 'امور اصلي',
	'ACP_GLOBAL_MODERATORS'			=> 'مديران کلي انجمن',
	'ACP_GLOBAL_PERMISSIONS'		=> 'سطوح دسترسي کلي',
	'ACP_GROUPS'					=> 'گروه ها',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'سطح دسترسي گروه هاي انجمن',
	'ACP_GROUPS_MANAGE'				=> 'مديريت گروه ها',
	'ACP_GROUPS_MANAGEMENT'			=> 'مديريت گروه',
	'ACP_GROUPS_PERMISSIONS'		=> 'سطوح دسترسي گروه ها',
	
	'ACP_ICONS'					=> 'نماد هاي مبحث',
	'ACP_ICONS_SMILIES'			=> 'Topic icons/smilies',
	'ACP_IMAGESETS'				=> 'مجموعه عکس ها',
	'ACP_INACTIVE_USERS'		=> 'کاربران غير فعال',
	'ACP_INDEX'					=> 'فهرست مديريت',
	
	'ACP_JABBER_SETTINGS'		=> 'تنظيمات Jabber',
	
	'ACP_LANGUAGE'				=> 'مديريت زبان',
	'ACP_LANGUAGE_PACKS'		=> 'بسته هاي زبان',
	'ACP_LOAD_SETTINGS'			=> 'تنظيمات بارگذاري',
	'ACP_LOGGING'				=> '  ',
	
	'ACP_MAIN'					=> 'فهرست مديريت',
	'ACP_MANAGE_EXTENSIONS'		=> 'مديريت پسوندها',
	'ACP_MANAGE_FORUMS'			=> 'مديريت انجمن ها',
	'ACP_MANAGE_RANKS'			=> 'مديريت رتبه ها',
	'ACP_MANAGE_REASONS'		=> 'مديريت دلايل گزارش ها',
	'ACP_MANAGE_USERS'			=> 'مديريت کاربران',
	'ACP_MASS_EMAIL'			=> 'ايميل گروهي',
	'ACP_MESSAGES'				=> 'پیام ها',
	'ACP_MESSAGE_SETTINGS'		=> 'تنظيمات پیام هاي خصوصي',
	'ACP_MODULE_MANAGEMENT'		=> 'مديريت ماژول ها',
	'ACP_MOD_LOGS'				=> 'اعمال مديرانجمن',
	'ACP_MOD_ROLES'				=> 'نوع دسترسي مدير انجمن',
		
    'ACP_NO_ITEMS'				=> 'هنوز چيزي موجود نيست.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'ضمايم تنها',
	
	'ACP_PERMISSIONS'			=> 'سطوح دسترسي',
	'ACP_PERMISSION_MASKS'		=> 'پنهانهاي سطوح دسترسي',
	'ACP_PERMISSION_ROLES'		=> 'انواع سطوح دسترسي',
	'ACP_PERMISSION_TRACE'		=> 'Permission trace',
	'ACP_PHP_INFO'				=> 'اطلاعات PHP',
	'ACP_POST_SETTINGS'			=> 'تنظيمات پست',
	'ACP_PRUNE_FORUMS'			=> 'هرس کردن انجمن ها',
	'ACP_PRUNE_USERS'			=> 'هرس کردن کاربران',
	'ACP_PRUNING'				=> 'هرس كردن',
	
	'ACP_QUICK_ACCESS'			=> 'دسترسي سريع',
	
	'ACP_RANKS'					=> 'رتبه ها',
	'ACP_REASONS'				=> 'دلايل گزارش ها',
	'ACP_REGISTER_SETTINGS'		=> 'تنظيمات ثبت نام کاربران',

	'ACP_RESTORE'				=> 'بازگرداني',

	'ACP_SEARCH'				=> 'پيکربندي جستجو',
	'ACP_SEARCH_INDEX'			=> 'شاخص جستجو',
	'ACP_SEARCH_SETTINGS'		=> 'تنظيمات جستجو',

	'ACP_SECURITY_SETTINGS'		=> 'تنظيمات امنيتي',
	'ACP_SERVER_CONFIGURATION'	=> 'پيکربندي سرور',
	'ACP_SERVER_SETTINGS'		=> 'تنظيمات سرور',
	'ACP_SIGNATURE_SETTINGS'	=> 'تنظيمات امضا',
	'ACP_SMILIES'				=> 'شکلک ها',
	'ACP_STYLE_COMPONENTS'		=> 'اجزا استايل',
	'ACP_STYLE_MANAGEMENT'		=> 'مديريت استايل',
	'ACP_STYLES'				=> 'استايل',
	
	'ACP_TEMPLATES'				=> 'قالب ها (Templates)',
	'ACP_THEMES'				=> 'ريشه ها (Themes)',
	
	'ACP_UPDATE'					=> 'درحال به روز رساني',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'سطوح دسترسي کاربران در انجمن',
	'ACP_USERS_LOGS'				=> 'گزارش هاي کاربران',
	'ACP_USERS_PERMISSIONS'			=> 'سطوح دسترسي کاربران',
	'ACP_USER_ATTACH'				=> 'پيوست ها',
	'ACP_USER_AVATAR'				=> 'آواتار',
	'ACP_USER_FEEDBACK'				=> 'دفترچه يادداشت',
	'ACP_USER_GROUPS'				=> 'گروه ها',
	'ACP_USER_MANAGEMENT'			=> 'مديريت کاربر',
	'ACP_USER_OVERVIEW'				=> 'چشم انداز',
	'ACP_USER_PERM'					=> 'سطوح دسترسي',
	'ACP_USER_PREFS'				=> 'پيکربندي',
	'ACP_USER_PROFILE'				=> 'مشخصات',
	'ACP_USER_RANK'					=> 'رتبه',
	'ACP_USER_ROLES'				=> 'نوع دسترسي کاربر',
	'ACP_USER_SECURITY'				=> 'امنيتي کاربر',
	'ACP_USER_SIG'					=> 'امضا',


	'ACP_VC_CAPTCHA_DISPLAY'			=> 'نمايش تصوير ضد روبات',
	'ACP_VERSION_CHECK'					=> 'جستجو براي بروز رساني',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'نمايش سطوح دسترسي موسس (مدير كل)',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'نمايش سطوح دسترسي مدير انجمن',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'نمايش اجازه نامه هاي انجمن محور',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'نمايش سطوح دسترسي مدير كل',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'نمايش سطوح دسترسي مستقر کاربر',
	
	'ACP_WORDS'					=> 'سانسور کلمات',

	'ACTION'				=> 'عمل',
	'ACTIONS'				=> 'اعمال',
	'ACTIVATE'				=> 'فعال',
	'ADD'					=> 'افزودن',
	'ADMIN'					=> 'مديريت',
	'ADMIN_INDEX'			=> 'فهرست مديريت',
	'ADMIN_PANEL'			=> 'کنترل پنل مديريت',
	'ADM_LOGOUT'			=> 'خروج از کنترل پنل مديريت',
	'ADM_LOGGED_OUT'		=> 'با موفقيت از کنترل پنل مديريت خارج شديد',
	'BACK'					=> 'بازگشت',

	'COLOUR_SWATCH'			=> 'ديدن رنگ بندي',
	'CONFIG_UPDATED'		=> 'پيکربندي با موفقيت بروز شد.',

	'DEACTIVATE'				=> 'غيرفعال',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'وجود ندارد “%s” مسير',
	'DIRECTORY_NOT_DIR'			=> 'The entered path “%s” is not a directory.',
	'DIRECTORY_NOT_WRITABLE'	=> 'قابل نوشتن نيست “%s” مسير',
	'DISABLE'					=> 'غيرفعال',
	'DOWNLOAD'					=> 'دريافت',
	'DOWNLOAD_AS'				=> 'دريافت نتيجه',
	'DOWNLOAD_STORE'			=> 'دريافت يا ذخيره کردن فايل',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'مي توانيد فايل را مستقيما دريافت کرده يا آن را در شاخه <samp>store/</samp> ذخيره کنيد.',

	'EDIT'					=> 'ويرايش',
	'ENABLE'				=> 'فعال',
	'EXPORT_DOWNLOAD'		=> 'دريافت',
	'EXPORT_STORE'			=> 'ذخيره كردن',

	'GENERAL_OPTIONS'		=> 'اختيارات عمومي',
	'GENERAL_SETTINGS'		=> 'تنظيمات عمومي',
	'GLOBAL_MASK'			=> 'Global permission mask',

	'INSTALL'				=> 'نصب',
	'IP'					=> 'IP کاربر',
	'IP_HOSTNAME'			=> 'IP يا نام هسات',

	'LOGGED_IN_AS'			=> 'خوش آمدي:',
	'LOGIN_ADMIN'			=> 'شما مدير اين جا نيستيد.',
	'LOGIN_ADMIN_CONFIRM'	=> 'براي ورود به مركز مديريت بايد كلمه عبور خود را دوباره وارد كنيد.',
	'LOGIN_ADMIN_SUCCESS'	=> 'تا لحظاتي ديگر به مركز مديريت منتقل خواهيد شد.',
	'LOOK_UP_FORUM'			=> 'انتخاب يک انجمن',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'شما مي توانيد بيش از يك انجمن را انتخاب كنيد',

	'MANAGE'				=> 'مديريت',
	'MENU_TOGGLE'			=> 'مخفي يا نمايش دادن منوي کنار',
	'MOVE_DOWN'				=> 'انتقال به پايين',
	'MOVE_UP'				=> 'انتقال به بالا',

	'NOTIFY'				=> 'Notification',
	'NO_ADMIN'				=> 'You are not authorised to administrate this board.',
	'NO_EMAILS_DEFINED'		=> 'No valid e-mail addresses found.',
	'NO_PASSWORD_SUPPLIED'	=> 'براي ورود به مركز مديريت دوباره كلمه عبورتان را وارد كنيد.',	

	'OFF'					=> 'خاموش',
	'ON'					=> 'روشن',

	'PARSE_BBCODE'						=> 'تجزيه BBCode ها',
	'PARSE_SMILIES'						=> 'تجزيه صورتک (شکلک) ها',
	'PARSE_URLS'						=> 'تجزيه لينک ها',
	'PERMISSIONS_TRANSFERRED'			=> 'شما سطح دسترسی را تغییر داده اید',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'سطح دسترسی شما به سطح دسترسی کاربر  %1$s تغییر یافت. اکنون می توانید این سطح دسترسی را بررسی نمایید اما به کنترل پنل مدیریت دسترسی نخواهید داشت.برای بازگشت به سطح دسترسی مدیر <a href="%2$s"><strong>اینجا کلیک کنید</strong></a>',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sبرو به مرکز مديريت%s',

	'REMIND'							=> 'Remind',
	'RESYNC'							=> 'Resynchronise',
	'RETURN_TO'							=> 'بازگشت به…',

	'SELECT_ANONYMOUS'		=> 'انتخاب کاربر عمومی (anonymous)',
	'SELECT_OPTION'			=> 'یک گزینه را انتخاب کنید',
		

	'UCP'					=> 'کنترل پنل کاربري',
	'USERNAMES_EXPLAIN'		=> 'هر کاربر در هر خط تفکيک شود.',
	'USER_CONTROL_PANEL'	=> 'کنترل پنل کاربري',

	'WARNING'				=> 'اخطار',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'This page lists information on the version of PHP installed on this server. It includes details of loaded modules, available variables and default settings. This information may be useful when diagnosing problems. Please be aware that some hosting companies will limit what information is displayed here for security reasons. You are advised to not give out any details on this page except when asked by <a href="http://www.Maghsad.com/about/team/">official team members</a> on the support forums.',

	'NO_PHPINFO_AVAILABLE'	=> 'The PHP informations are unable to be determined. Phpinfo() has been disabled for security reasons.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'اين ليست شامل تمام فعاليت هاي انجام گرفته توسط مديران است. شما مي توانيد درسته ها را از طريق نام کاربري ، نوع فعاليت ، تاريخ و IP ببينيد. در صورتي که شما سطح دسترسي کامل اين بخش را داشته باشيد ، مي توانيد تمام فعاليت هاي انجام شده را حذف کنيد.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'This lists the actions carried out by the board itself. This log provides you with information you are able to use for solving specific problems, for example non-delivery of e-mails. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'This lists all actions done on forums, topics and posts as well as actions carried out on users by moderators, including banning. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'This lists all actions carried out by users or on users (reports, warnings and user notes).',
	'ALL_ENTRIES'				=> 'All entries',

	'DISPLAY_LOG'	=> 'Display entries from previous',

	'NO_ENTRIES'	=> 'No log entries for this period.',

	'SORT_IP'		=> 'IP address',
	'SORT_DATE'		=> 'Date',
	'SORT_ACTION'	=> 'Log action',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> '
	
<br />از حسن انتخاب شما در انتخاب phpBB آسان نصب Maghsad.com سپاسگزاريم.<br />
<br /> در اين صفحه آمار بخش هاي مختلف انجمن شما و منوهاي مديريتي اصلي (در سمت راست و سربرگ ها) قرار گرفته است كه مي توانيد از آن ها براي مديريت انجمن بهره ببريد.<br />
	همچنين مي توانيد از كتاب <strong>
	<a href="http://www.maghsad.com/index/viewtopic.php?f=75&t=3686">
	<span style="text-decoration: none">آموزش طراحي، ساخت و مديريت جوامع مجازي با استفاده 
از phpBB 3</strong></span></a></font> (انتشارات كيان رايانه) به عنوان نخستين و تنها مرجع فارسي phpBB 3 
براي آشنايي بيشتر با اين سيستم قدرتمند بهره مند شويد.
<br />
برای ثبت سایت خود در لیست سایت های استفاده کننده از خدمات مقصد<a href=" http://www.maghsad.com/index/viewtopic.php?f=87&t=3651/ "> 
اینجا کلیک کنید</a>.
 همچنین می توانید برا&#1740; شرکت در توسعه و اصلاح هسته فارس&#1740; و فارس&#1740; ساز 
phpBB<a href="http://www.maghsad.com/index/viewtopic.php?p=11810#p11810"> 
ا&#1740;نجا کل&#1740;ک کن&#1740;د</a>.	<br /><br />
	
نگارش هسته فارسي : 1.1.0 آزمایشی<br />تاريخ انتشار آخرین نگارش هسته فارسی :28 آبان 1388<br />نگارش آخرین اصلاحیه نصب شده هسته فارسی : چهارشنبه 28 آبان 1388 <br />
با تشکر ویژه از دوست و توسعه دهنده عزیز:
<a href="http://www.maghsad.com/index/memberlist.php?mode=viewprofile&u=1361">
Mafco</a>.<br /><br />
	
پشتيباني حقيقي phpBB فارسي را با ما تجربه كنيد :  <a href="http://www.phpBB.Maghsad.com">www.phpBB.Maghsad.com</a> ||  
<a href="http://www.Maghsad.com">www.Maghsad.com</a>
<br />

',
	'ADMIN_LOG'					=> 'فعاليت هاي مدير',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'اين منو حاوي آخرين فعاليت هايي است که مدير سايت انجام داده است. در صورتي که تمايل به ديدن ليست کامل از فعاليت هاي مدير سايت داريد از لينک زير استفاده كنيد.  ',
	'AVATAR_DIR_SIZE'			=> 'حجم پوشه آواتار',

	'BOARD_STARTED'		=> 'آغاز به کار',
	'BOARD_VERSION'		=> 'نگارش انجمن',

	'DATABASE_SERVER_INFO'	=> 'سرور بانک اطلاعات',
	'DATABASE_SIZE'			=> 'حجم بانک اطلاعاتي',

	'FILES_PER_DAY'		=> 'پیوست در هر روز',
	'FORUM_STATS'		=> 'آمار انجمن',

	'GZIP_COMPRESSION'	=> 'فشرده سازی GZip',

	'NOT_AVAILABLE'		=> 'Not available',
	'NUMBER_FILES'		=> 'تعداد پيوست ها',
	'NUMBER_POSTS'		=> 'تعداد پست ها',
	'NUMBER_TOPICS'		=> 'تعداد مبحث ها',
	'NUMBER_USERS'		=> 'تعداد کاربران',
	'NUMBER_ORPHAN'		=> 'پيوست هاي غيرفعال شده',

	'POSTS_PER_DAY'		=> 'پست در هر روز',

	'PURGE_CACHE'			=> 'پاك كردن كش (Cache)',
	'PURGE_CACHE_CONFIRM'	=> 'آيا مطمئنيد مي خواهيد كش را پاك كنيد ؟',
	'PURGE_CACHE_EXPLAIN'	=> 'با انتخاب  اين گزينه كل محتويات پوشه كش پاك خواهد شد',


	'RESET_DATE'					=> 'بازنشانی تاریخ شروع به کار انجمن',
	'RESET_DATE_CONFIRM'			=> 'آيا مطمئنيد مي خواهيد تاريخ تاسيس انجمن را تغيير دهيد ؟',
	'RESET_ONLINE'					=> 'بازنشانی بشترين تعداد کاربران آنلاين',
	'RESET_ONLINE_CONFIRM'			=> 'آيا مطمئنيد مي خواهيد تعداد حداكثر كاربران را بازنشانی كنيد ؟',
	'RESYNC_POSTCOUNTS'				=> 'هم زمان كردن دوباره شمارنده پست ها',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'فقط به پست هاي موجود رسيدگي مي شود . پست هاي هرس شده حساب نمي شوند.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'آيا مطمئنيد تعداد پست ها را دوباره هم زمان مي كنيد ؟',
	'RESYNC_POST_MARKING'			=> 'هم زمان كردن دوباره مباحث علامت گذاري شده.',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Are you sure you wish to resynchronise dotted topics?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'ابتدا علامت گذاري تمام تاپيك ها از بين مي رود و سپس تاپيك هايي كه در 6 ماه گذشته در انها هرگونه فعاليتي ديده شده علامت گذاري مي شوند.',
	'RESYNC_STATS'					=> 'هم زمان كردن دوباره آمار',
	'RESYNC_STATS_CONFIRM'			=> 'Are you sure you wish to resynchronise statistics?',
	'RESYNC_STATS_EXPLAIN'			=> 'حساب کردن دوباره تعداد پست ها, مبحث ها, کاربران و فايل ها.',
	'RUN'							=> 'اجرا',

	'STATISTIC'					=> 'آمار و ارقام',
	'STATISTIC_RESYNC_OPTIONS'	=> 'اختيارات اصلي',

	'TOPICS_PER_DAY'	=> 'مبحث در هر روز',

	'UPLOAD_DIR_SIZE'	=> 'حجم پيوست هاي ضميمه شده',
	'USERS_PER_DAY'		=> 'کاربر در هر روز',

	'VALUE'					=> 'مقدار',
	'VIEW_ADMIN_LOG'		=> 'نمايش فعاليت هاي مدير',
	'VIEW_INACTIVE_USERS'	=> 'نمايش کاربران غيرفعال',

	'WELCOME_PHPBB'			=> 'به phpBB 3 خوش آمديد',
	'WRITABLE_CONFIG'		=> 'فايل config.php شما قابل نوشتن است. براي امنيت آن را به 640 يا 644 CHMOD نماييد.<br />براي اطلاعات بيشتر در مورد CHMOD كردن  مي توانيد به كتاب آموزش طراحي،مديريت و ساخت جوامع مجازي توسط phpBB 3 (انتشارات كيان رايانه) مراجعه نماييد.',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'روز غيرفعال شدن',
	'INACTIVE_REASON'				=> 'دليل',
	'INACTIVE_REASON_MANUAL'		=> 'حساب توسط مدير غيرفعال شده است',
	'INACTIVE_REASON_PROFILE'		=> 'اطلاعات مشخصات ويرايش شد',
	'INACTIVE_REASON_REGISTER'		=> 'حساب هاي عضو شده اخير',
	'INACTIVE_REASON_REMIND'		=> 'Forced user account reactivation',
	'INACTIVE_REASON_UNKNOWN'		=> 'مجهول',
	'INACTIVE_USERS'				=> 'کاربران غيرفعال',
	'INACTIVE_USERS_EXPLAIN'		=> 'در اين قسمت ليست کاربراني عضو شده اي نمايش داده مي شود که حساب کاربري آنها غيرفعال است. شما مي توانيد آنها را فعال, حذف و يادآوري کنيد (توسط ارسالE-Mail).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'اين ليست حاوي 10 کاربري است که براي آخرين بار در سايت عضو شده اند و حساب کاربريشان غيرفعال است. براي مشاهده ليست کامل، حذف و يا يادآوري (توسط ارسالE-Mail) به ليست کامل رجوع کنيد.',

	'NO_INACTIVE_USERS'	=> 'بدون کاربر غير فعال',

	'SORT_INACTIVE'		=> 'روز غيرفعال شدن',
	'SORT_LAST_VISIT'	=> 'آخرين بازديد',
	'SORT_REASON'		=> 'علت',
	'SORT_REG_DATE'		=> 'تاريخ عضويت',

	'USER_IS_INACTIVE'		=> 'کاربر غيرفعال است',
));
	
	
// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> '
	لطفا در ارسال اطلاعات سرور خود به phpBB با ما همکاری کنید. کلیه اطلاعاتی که مربوط به شناسایی سایت و هویت شماست از لیست اطلاعات ارسالی حذف شده و فقط اطلاعاتی که جنبه آماری دارند ارسال خواهد شد.
	<br />
	این کار شما باعث می شود تا پروژه phpBB و PHP بتواند با دید بازتری نسبت به ارائه امکانان و ویژگی ها در نسخه بعد به شما کمک کند.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'دکمه زیر، تمامی اطلاعاتی که ارسال می شوند را به شما اعلام می کند.',
	'DONT_SEND_STATISTICS'		=> 'اگر مایل به همکاری با ما در این زمینه نیستید، روی این قسمت کلیک کنید تا به مرکز مدیریت هدایت شوید.',
	'GO_ACP_MAIN'				=> 'برو به صفحه شروع مرکز مدیریت',
	'HIDE_STATISTICS'			=> 'پنهان کردن جزئیات',
	'SEND_STATISTICS'			=> 'ارسال اطلاعات آماری',
	'SHOW_STATISTICS'			=> 'نمایش جزئیات',
	'THANKS_SEND_STATISTICS'	=> 'از همکاری شما سپاسگزاریم.',
));



// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Added or edited users’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Added or edited groups’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Added or edited users’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Added or edited groups’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Added or edited users’ administrator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Added or edited groups’ administrator permissions</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Added or edited Administrators</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Added or edited Global Moderators</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Added or edited users’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Added or edited users’ forum moderator access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Added or edited groups’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Added or edited groups’ forum moderator access</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Added or edited Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>اضافه با ويرايش سطوح دسترسي انجمن</strong>  %1$s<br />براي  %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Removed Administrators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Removed Global Moderators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Removed Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Removed User/Group forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissions transferred from</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Own permissions restored after using permissions from</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>کوشش هاي ناموفق ورود به مرکز مديريت</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>ورود موفق به مرکز مديريت</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>حذف پيوست هاي کاربر</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>افزودن يا ويرايش توسعه پيوست ها</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Removed attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Updated attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Added extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Edited extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removed extension group</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orphan File uploaded to Post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orphan Files deleted</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Excluded user from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Excluded IP from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Excluded e-mail from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>کاربر بن شد.</strong> دليل “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Banned IP</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Banned e-mail</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Unbanned user</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Unbanned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Unbanned e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>BBCode جديد اضافه شد</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode ويرايش شد</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode حذف شد</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>bot جديد اضفه شد</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>bot حذف شد</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>bot موجود بروز شد</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>عمل مدير حذف شد</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>خطا حذف شد</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>عمل مدير انجمن حذف شد</strong>',
	'LOG_CLEAR_USER'		=> '<strong>عمل کاربر حذف شد</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>اعمال کاربر حذف شد</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered e-mail settings</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration settings</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered visual confirmation settings</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approved topic</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>پست حذف شد</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Deleted shadow topic</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>موضوع حذف شد</strong><br />» %s',
	'LOG_FORK'					=> '<strong>موضوع كپي شد</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>موضوع قفل شد</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>پست فل شد</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>پست هاي ادغام شده</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>موضوع</strong><br />» از %1$s به %2$s منتقل شد.',
	'LOG_POST_APPROVED'			=> '<strong>ارسال تاييد شد</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Disapproved post “%1$s” with the following reason</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>ويرايش پست “%1$s” نوشته شده توسط</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>بستن گزارش</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>حذف گزارش</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Moved split posts</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Split posts</strong><br />» from %s',


	'LOG_TOPIC_APPROVED'		=> '<strong>Approved topic</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Disapproved topic “%1$s” with the following reason</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised topic counters</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>ويرايش نوع مبحث</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>بستن مبحث</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>بستن پست</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Added disallowed username</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database backup</strong>',
	'LOG_DB_DELETE'			=> '<strong>Deleted database backup</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restored database backup</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluded IP/hostname from download list</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Added IP/hostname to download list</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removed IP/hostname from download list</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail error</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Created new forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
		
//Begin phpBB 3.0.5 changes by www.Maghsad.com

	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Deleted forum and its subforums, moved posts</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deleted forum and its posts</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deleted forum, its posts and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deleted forum and its posts, moved subforums</strong> to %1$s<br />» %2$s',

// END phpBB 3.0.5 changes by www.Maghsad.com


	'LOG_FORUM_EDIT'						=> '<strong>ويرايش جزييات انجمن</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>ساخت گروه جديد</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',

	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Added new imageset to database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Add new imageset on filesystem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Deleted imageset</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Edited imageset details</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Edited imageset</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Exported imageset</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Imageset misses “%2$s” localisation</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Refreshed “%2$s” localisation of imageset</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>بروز رساني مجموعه عکسها</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder e-mails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>نصب phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>حذف بسته زبان</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>نصب بسته زبان</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>بروز کردن مشخصات بسته زبان</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>جابجا کردن فايل زبان</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>ثبت فايل زبان و ذخيره در پوشه انبار</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module added</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Purged cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>اضافه کردن رتبه جديد</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>حذف رتبه</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>بروز کردن رتبه</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',
	'LOG_REFERER_INVALID'		=> '<strong>Referer validation failed</strong><br />»Referer was “<em>%1$s</em>”. The request was rejected and the session killed.',

	'LOG_RESET_DATE'			=> '<strong>بازنشانی تاريخ شروع به کار انجمن</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>بازنشانی بيشترين کاربران آنلاين</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>ايجاد شاخص جستجو براي</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>حذف شاخص جستجو براي</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>افزودن استايل جديد</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>حذف استايل</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>ويرايش &#1575;&#1587;&#1578;&#1575;&#1610;&#1604;</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exported style</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>ريشه  را خارج کرده</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>بروز رساني ريشه </strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned e-mail via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed e-mail</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entry added:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>The following warning was issued to this user</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Added word censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deleted word censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edited word censor</strong><br />» %s',
));
// simple acp pm read
$lang = array_merge($lang, array(
	'ACP_PRVMSG'		=> 'پيام خصوصي كاربران',
	
	'PM_READ'			=> 'خواندن پام خصوصي',
	'PM_READ_EXPLAIN'	=> 'از اين قسمت تمام پيام هاي خصوصي را مي توانيد بخوانيد.',
	
	'LIST_PM'			=> 'در كل <strong>1</strong> پيام خصوصي رد و بدل شده.',
	'LIST_PMS'			=> 'در كل <strong>%s</strong> پيام خصوصي رد و بدل شده.',

	'PM_SUBJECT'		=> 'موضوع',
	'FROM'				=> 'از',
	'TO'				=> 'به',
	'BCC'				=> 'Bcc',
	'AUTHOR_IP'			=> 'IP فرستنده',
	'DATE'				=> 'تاريخ',
	
	'NO_PM_DATA'		=> 'هيچ اطلاعاتي موجود نيست !',
		

	//3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com 

	'ACP_FORUM_PERMISSIONS_COPY'	=> 'کپی کردن سطوح دسترسی انجمن',
////////////////////////////////////////////////////
	'ACP_FEED'					=> 'مدیریت خوراک (Feed)',
	'ACP_FEED_SETTINGS'			=> 'تنظیمات خوراک (Feed)',
		
		////////////////////////////////////////////
		
	'ACP_SEND_STATISTICS'		=> 'ارسال اطلاعات آماری و ثبت سایت شما',
		
		////////////////////////////////////////////
		
	'ACP_SUBMIT_CHANGES'		=> 'ارسال تغییرات',
		
		///////////////////////////////////////////
		
	'ACP_USER_WARNINGS'				=> 'هشدارها',

	'ACP_VC_SETTINGS'					=> 'تنظیمات ماژول کد ضد روبات (CAPTCHA)',
		
		//////////////////////////////////////////	
		
	'MORE'					=> 'بیشتر',			// Not used at the moment
	'MORE_INFORMATION'		=> 'اطلاعات بیبشتر »',
		
		//////////////////////////////////////////
		
    'SETTING_TOO_LOW'		=> 'The provided value for the setting “%1$s” is too low. The minimum acceptable value is %2$d.',
	'SETTING_TOO_BIG'		=> 'The provided value for the setting “%1$s” is too high. The maximum acceptable value is %2$d.',
	'SETTING_TOO_LONG'		=> 'The provided value for the setting “%1$s” is too long. The maximum acceptable length is %2$d.',
	'SETTING_TOO_SHORT'		=> 'The provided value for the setting “%1$s” is too short. The minimum acceptable length is %2$d.',
	'SHOW_ALL_OPERATIONS'	=> 'Show all operations',
				
	//////////////////////////////////////////////
	
		'PURGE_SESSIONS'			=> 'حذف تمام جلسات',
	'PURGE_SESSIONS_CONFIRM'	=> 'آیا مایل به حذف تمام جلسات هستید ؟ این کار باعث می شود تمام اعضای وارد شده از حساب کاربری خود خارج شوند (Log Out شوند)',
	'PURGE_SESSIONS_EXPLAIN'	=> 'حذف تمام جلسات. این کار باعث می شود تمام اعضای وارد شده از حساب کاربری خود خارج شوند (Log Out شوند)',
			
	////////////////////////////////////////////
	
		'VERSIONCHECK_FAIL'			=> 'سیستم قادر به شناسایی اطلاعات آخرین نسخه ارائه شده نیست.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'بررسی مجدد نسخه',
	////////////////////////////////////////////
	
	'SORT_LAST_REMINDER'=> 'Last reminded',
	'SORT_REMINDER'		=> 'Reminder sent',
		
    ///////////////////////////////////////////
  
  	'LOG_CONFIG_FEED'			=> '<strong>Altered syndication feeds settings</strong>',

  /////////////////////////////////////////////
  
  	'LOG_PM_REPORT_CLOSED'		=> '<strong>Closed PM report</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Deleted PM report</strong><br />» %s',
		
		//////////////////////////////////////
		
		
			'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Copied forum permissions</strong> from %1$s<br />» %2$s',
				
				
        ////////////////////////////////////
        
	'LOG_GENERAL_ERROR'	=> '<strong>A general error occured</strong>: %1$s <br />» %2$s',
		
		//////////////////////////////////////
		
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Users requested to join group “%1$s” and need to be approved</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error while creating image</strong><br />» Error in %1$s on line %2$s: %3$s',
		//////////////////////////////////////////
		
	'LOG_PURGE_SESSIONS'		=> '<strong>Purged sessions</strong>',

        //////////////////////////////////////////
        
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Emptied user outbox</strong><br />» %s',

////////////////////////////////////////////////////

	'LOG_USER_REMOVED_NR'	=> '<strong>Removed newly registered flag from user</strong><br />» %s',
		
		/////////////////////////
		

	'LOG_WARNING_DELETED'		=> '<strong>Deleted user warning</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Deleted %2$s user warnings</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Deleted all user warnings</strong><br />» %s',


//////////////////////////////////////////////////////


				  
    	
	
   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	
		
		
));

?>