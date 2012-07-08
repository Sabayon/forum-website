<?php
/**
*
* acp_attachments [Farsi]
*
* @package language
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'در اين قسمت شما مي توانيد تنظيمات پيشفرض پيوست ها و همچنين شاخه هاي ويژه را پيکربندي نماييد.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'در اين قسمت شما مي توانيد گروه هاي پسوندي را اضافه, حذف, ويرايش و يا غير فعال کنيد. گزینه های بیشتر در شاخه های ویژه آنها قرار دارد.تغییر مکانیزم دانلود و تعیین یک آیکون برای نمایش در جلوی پیوست برای تشخیص هویت از این گزینه ها محسوب می شوند.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'در اين اينجا شما مي توانيد همه پسوند هاي فعال را اداره کنيد. براي فعال سازي پسوندتان, لطفا به قاب "مديريت گروه پسوندها" رجوع فرماييد. ما شديدا به شما توصيه مي کنيم که پسوند هاي اسکريپتي را فعال نکنيد (مثال از اين قبيل <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, و ...).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'در اين قسمت شما مي توانيد فايل هاي غير فعال شده را مشاهده کنيد. اين رخ داد غالبا زماني به وقع مي پيوندد که کاربر فايل را پيوست کرده ولي پست را ارسال نمي کند. اينک شما قادريد اين فايل ها را حذف يا ضميمه پست هاي موجود نماييد. پيوست کردن اين پستها  نيازمند  شماره (ID) صحيحي از پست مي باشد, مشخص کردن شماره پست بر عهده خود شماست. پيوست هايي که پيش از اين آپلودشده اند مي توانند در پست مشخص شده شما گنجانده شوند.',
	'ADD_EXTENSION'						=> 'افزودن پسوند',
	'ADD_EXTENSION_GROUP'				=> 'افزودن گروه پسوند',
	'ADMIN_UPLOAD_ERROR'				=> 'خطا در حين تلاش براي پيوست فايل: “%s”.',
	'ALLOWED_FORUMS'					=> 'انجمن هاي مجاز',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'توانایی ارسال پسوندهای تعیین شده در در انجمن های منتخب ( یا همه آنها ).',
	'ALLOWED_IN_PM_POST'				=> 'فعال شده',
	'ALLOW_ATTACHMENTS'					=> 'فعال بودن پيوست ها',
	'ALLOW_ALL_FORUMS'					=> 'مجاز در همه انجمن ها',
	'ALLOW_IN_PM'						=> 'فعال بودن در پیام هاي خصوصي',
	'ALLOW_PM_ATTACHMENTS'				=> 'فعال بودن پيوست ها در پیام هاي خصوصي',
	'ALLOW_SELECTED_FORUMS'				=> 'فقط انجمن هاي انتخاب شده ذيل',
	'ASSIGNED_EXTENSIONS'				=> 'پسوند هاي تعيين شده',
	'ASSIGNED_GROUP'					=> 'گروه پسوندي تعيين شده',
	'ATTACH_EXTENSIONS_URL'				=> 'پسوند ها',
	'ATTACH_EXT_GROUPS_URL'				=> 'گروه هاي پسوندي',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'حداکثر حجم فايل',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'حد اکثر حجم هر فايل, با 0 بي نهايت خواهد بود.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'حداکثر حجم فايل در پیام هاي خصوصي',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'حداكثر حجم هر فايل ضميمه شده در پيام هاي خصوصي. مقدار 0 يعني بدون محدوديت',
	'ATTACH_ORPHAN_URL'					=> 'پيوست هاي غيرفعال',
	'ATTACH_POST_ID'					=> 'ID پست',
	'ATTACH_QUOTA'						=> 'سهميه کل پيوست',
	'ATTACH_QUOTA_EXPLAIN'				=> 'حداکثر حجم فعال درایو برای سراسر بورد ، با 0 بی نهایت است..',
	'ATTACH_TO_POST'					=> 'پيوست فايل در پست',

	'CAT_FLASH_FILES'			=> 'فايل فلش',
	'CAT_IMAGES'				=> 'تصاوير',
	'CAT_QUICKTIME_FILES'		=> 'فايل هاي رسانه Quicktime',
	'CAT_RM_FILES'				=> 'فايل هاي رسانه Real',
	'CAT_WM_FILES'				=> 'فايل هاي رسانه Windows Media',
	'CREATE_GROUP'				=> 'ايجاد گروه جديد',
	'CREATE_THUMBNAIL'			=> 'ايجاد thumbnail',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'ايجاد thumbnail در همه ناحيه هاي امکان پذير.',

	'DEFINE_ALLOWED_IPS'			=> 'تعيين کردن IP/hostnames فعال',
	'DEFINE_DISALLOWED_IPS'			=> 'تعريف IP ها و HostName هاي غير فعال شده',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'براي تعيين کردن تعدادي IP و HostName مختلف لطفا هر کدام را در يک خط مجزا بنويسيد. براي مشخص کردن محدوده آدرس IP ها در لبتدا و انتها از (-) استفاده کنيد, براي مشخص نمودن wildcard از “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'شما مي توانيد با یک آمیزش مناسب از موس و صفحه کلید سیستم شخصی و مرورگرتان ، IP هاي متعددي را حذف (يا لغو محروميت) نمایید . IP های محروم پس زیمنه آبی دارند .',
	'DISPLAY_INLINED'				=> 'نمايش تصوير در inline',
	'DISPLAY_INLINED_EXPLAIN'		=> 'در صورت تعيين "خير" تصاوير پيوست شده با لينک قابل نمايش مي شوند.',
	'DISPLAY_ORDER'					=> 'ترتيب نمايش پيوست ها',
	'DISPLAY_ORDER_EXPLAIN'			=> 'نمايش ترتيبي پيوست ها بر اساس زمان.',
	
	'EDIT_EXTENSION_GROUP'			=> 'ويرايش پسوند گروه',
	'EXCLUDE_ENTERED_IP'			=> 'اين را براي محروميت IP/HostName وارد شده فعال کنيد.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'حدود IP براي IPs/hostnames فعال',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'مستثنی کردن کردن IP از IP/HostName هاي غير فعال',
	'EXTENSIONS_UPDATED'			=> 'پسوند با موفقيت بروز شد.',
	'EXTENSION_EXIST'				=> 'پسوند %s پيش از اين فعال بوده است.',
	'EXTENSION_GROUP'				=> 'پسوند گروه',
	'EXTENSION_GROUPS'				=> 'پسوند گروه ها',
	'EXTENSION_GROUP_DELETED'		=> 'پسوند گروه با موفقيت حذف شد.',
	'EXTENSION_GROUP_EXIST'			=> 'پسوند گروه %s پيش اين اين موجود بوده است.',

	'GO_TO_EXTENSIONS'		=> 'برو به صفحه مديريت پسوندها',
	'GROUP_NAME'			=> 'نام گروه',

	'IMAGE_LINK_SIZE'			=> 'ابعاد لينک تصوير',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'نمايش تصوير پيوست شده در دل لينک هاي متني اگر از اين ابعاد بزرگتر باشد. براي غير فعال کردن اين وضعيت, مقادير را بر روي 0px و 0px تنظيم نماييد.',
	'IMAGICK_PATH'				=> 'مسير Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'مسير کامل برنامه تبديل imagemagick, مثال: <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'حد اکثر تعداد فايل پيوست براي هر پست',
	'MAX_ATTACHMENTS_PM'			=> 'حد اکثر تعداد پيوست ها در پیام ها',
	'MAX_EXTGROUP_FILESIZE'			=> 'حد اکثر حجم فايل',
	'MAX_IMAGE_SIZE'				=> 'حداکثر ابعاد تصوير',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'حد اکثر سايز تصوير پيوست. براي لغو بررسي ابعاد ، هردو مقدار را روي 0px و 0px تنظيم کنيد.',
	'MAX_THUMB_WIDTH'				=> 'حداکثر عرض thumbnail',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'براي thumbnail ايجاد شده در پيش ايجا عرض تعيين نکنيد.',
	'MIN_THUMB_FILESIZE'			=> 'حداقل حجم فايل thumbnail',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'براي تصاوير کوچک تر از اين thumbnail ايجاد نمي گردد.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'فعال شده فقط براي پست',
	'NOT_ALLOWED_IN_PM_POST'	=> 'غيرفعال',
	'NOT_ASSIGNED'				=> 'تعيين نشده',
	'NO_EXT_GROUP'				=> 'هيچ',
	'NO_EXT_GROUP_NAME'			=> 'نام هيچ گروهي وارد نشده است',
	'NO_EXT_GROUP_SPECIFIED'	=> 'هيچ پسوندي براي گروه تعيين نشده است.',
	'NO_FILE_CAT'				=> 'هيچ',
	'NO_IMAGE'					=> 'بدون تصوير',
	'NO_THUMBNAIL_SUPPORT'		=> 'پشتيباني از Thumbnail غيرفعال است. براي داشتن تابع مناسب بايد يکي از دو برنامه GD extension و يا imagemagic نصب شده باشند. هردو يافت نشدند.',
	'NO_UPLOAD_DIR'				=> 'دايرکتوري آپلود تعيين شده توسط شما وجود ندارد.',
	'NO_WRITE_UPLOAD'			=> 'دايرکتوري آپلود تعيين شده توسط شما قابل نوشتن نيست. سطفا سطوح دسترسي اين دايرکتوري را از وب سرور خود اصلاح کنيد.',

	'ONLY_ALLOWED_IN_PM'	=> 'فقط در پیام هاي خصوصي مجاز است',
	'ORDER_ALLOW_DENY'		=> 'اجازه دادن',
	'ORDER_DENY_ALLOW'		=> 'منکر کردن',

	'REMOVE_ALLOWED_IPS'		=> 'حذف يا لطفا محروميت IP ها/hostname هاي <em>فعال شده</em> ',
	'REMOVE_DISALLOWED_IPS'		=> 'حذف يا لغو مانع شدن IPها/Hostname هاي <em>غير فعال شده</em>s',

	'SEARCH_IMAGICK'				=> 'جستجو براي Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'ليست پذيريش/عدم پذيريش',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'دگرگون سازی رفتار پیشفرض هنگامی فعال بودن دانلود ایمن در لیست پذیریش/عدم پذیریش و دربرابر آن یک <strong>لیست سفید</strong> ( فعال ) و یک <strong>لیست سیاه</strong> غیر فعال.',
	'SECURE_DOWNLOADS'				=> 'فعال بودن دانلود ايمن',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'با فعال شدن این گزینه ، دانلودهای منحصر به IP/HostName های تعریف شده شما هستند .',
	'SECURE_DOWNLOAD_NOTICE'		=> 'دانلود ايمن فعال نيست. پيش از فعال سازي دانلود ايمن ، تنظيمات زير را بکارگيري کنيد.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'ليست IP با موفقيت بروز رساني شد.',
	'SECURE_EMPTY_REFERRER'			=> 'فعاليت خالي کردن رجوع کنندگان',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'دانلود ايمن بر پايه رجوع کنندگان است. آيا شما مي خواهيد دانلودها را براي از حذف رجوع کنندگان فعال کنيد ؟',
	'SETTINGS_CAT_IMAGES'			=> 'تنظيمات شاخه تصوير',
	'SPECIAL_CATEGORY'				=> 'شاخه ويژه',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'تفاوت داشتن شاخه های ویژه به نحو محسوس در میان پست ها.',
	'SUCCESSFULLY_UPLOADED'			=> 'با موفقيت آپلود شد.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'گروه پسوند با موفقيت اضافه شده.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'گروه پسوند با موفقيت بروز شد.',

	'UPLOADING_FILES'				=> 'درحال آپلود فايل',
	'UPLOADING_FILE_TO'				=> 'در حال آپلود فايل “%1$s” در پست شماره %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'شما سطح دسترسي آپلود فايل در انجمن “%s” را نداريد.',
	'UPLOAD_DIR'					=> 'دايرکتوري آپلود',
	'UPLOAD_DIR_EXPLAIN'			=> 'مسير انبار پيوست ها. لطفا در نظر داشته باشيد که اگر اين دايرکتوري تغيير داده شود ، پيوست هاي آپلود شده پيشين را بايد بطور دستي به اين دايرکتوري منتقل کرد.',
	'UPLOAD_ICON'					=> 'آيکون آپلود',
	'UPLOAD_NOT_DIR'				=> 'مسير آپلود تعيين شده توسط شما نمي تواند بعنوان يک دايرکتوري ظاهر شود.',
	'CHECK_CONTENT'            => 'بررسی فایل های ضمیمه شده',
  'CHECK_CONTENT_EXPLAIN'      => 'Some browsers can be tricked to assume an incorrect mimetype for uploaded files. This option ensures that such files likely to cause this are rejected.',

));

?>