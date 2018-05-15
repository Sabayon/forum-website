<?php
/**
*
* acp_board [Farsi]
*
* @package language
* @version $Id: board.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'در این قسمت شما می توانید ساختار بنیانی انجمن خود را تعیین نمایید, توجه نمایید که نام و توضیح مناسبی برای انجمن خود برگزینید, و همچنین به تنظیمات دیگر از جمله موقعیت زمانی و موقعیت زمانی نیز توجه فرمایید.',
	'CUSTOM_DATEFORMAT'	=> 'سفارشی…',
	'DEFAULT_DATE_FORMAT'	=> 'حالت تاريخ',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'حالت زماني شبيه يک کد PHP <code>تاريخ</code> نقش ايفا مي کند.',
	'DEFAULT_LANGUAGE'	=> 'زبان پيشفرض',
	'DEFAULT_STYLE'	=> 'استايل پيشفرض',
	'DISABLE_BOARD'	=> 'غيرفعال کردن بورد',
	'DISABLE_BOARD_EXPLAIN'	=> 'این قسمت انجمن را برای کاربران غیرقابل دسترس و غیرفعال می سازد. در صورتی که دوست داشته باشید می توانید یک پیغام کوتاه (255 کاراکتر) برای نمایش معین نمایید.',
	'OVERRIDE_STYLE'	=> 'باطل کردن قالب کاربر',
	'OVERRIDE_STYLE_EXPLAIN'	=> 'جايگرين کردن قالب کاربران بجاي پيشفرض.',
	'SITE_DESC'	=> 'شرح سايت',
	'SITE_NAME'	=> 'نام سايت',
	'SYSTEM_DST'	=> 'فعال کردن زمان تابستاني/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'	=> 'موقعيت زماني سيستم',
	'WARNINGS_EXPIRE'	=> 'مدت زمان بقاي اخطار',
	'WARNINGS_EXPIRE_EXPLAIN'	=> 'تعداد روزهایی که پیش از پایان یافتن اتوماتیک اخطار از پیشینه کاربر مورد نظر سپری خواهد شد.',
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'از اينجا شما مي توانيد فعال/غيرفعال کنيد چندي از سيماهاي بورد.',
	'ALLOW_ATTACHMENTS'	=> 'فعال بودن پيوست ها',
	'ALLOW_BIRTHDAYS'	=> 'فعال بودن متوليدن',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'فعال بودن ثبت تاريخ تولد و نمايش سن در مشخصات. لطفا در نظر داشته باشيد که ليست متولدين در فهرست بورد تحت تاثير تنظيمات بارگذاري ديگري است.',
	'ALLOW_BOOKMARKS'	=> 'فعال بودن نشانه گذاري مباحث',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'کاربر اجازه انبار کردن نشانه گذاري شخصي داشته باشد.',
	'ALLOW_BBCODE'	=> 'فعال بودن BBCode',
	'ALLOW_FORUM_NOTIFY'	=> 'فعال بودن اشتراک در انجمن ها',
	'ALLOW_NAME_CHANGE'	=> 'فعال بودن ویرایش نام کاربری',
	'ALLOW_NO_CENSORS'	=> 'فعال بودن غیرفعال کردن سانسور کلمات',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'کاربران می توانند سانسور کلمات برای پست ها و پیغام های خصوصی را غیرفعال نمایند.',
	'ALLOW_PM_ATTACHMENTS'	=> 'فعال بودن پیوست ها در پیغام های خصوصی',
	'ALLOW_SIG'	=> 'فعال بودن امضا',
	'ALLOW_SIG_BBCODE'	=> 'فعال بودن BBCode در امضای کاربران',
	'ALLOW_SIG_FLASH'	=> 'فعال بودن استفاده از تگ  <code>[FLASH]</code> در امضای کاربران',
	'ALLOW_SIG_IMG'	=> 'فعال بودن استفاده از تگ <code>[IMG]</code> در امضای کاربران',
	'ALLOW_SIG_LINKS'	=> 'فعال بودن بکارگیری لینک ها در امضای کاربران',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'چنانچه تگ BBCode <code>[URL]</code> غیر فعال شده باشد ، تنظیم اتوماتیک URL ها غیرفعال می شود.',
	'ALLOW_SIG_SMILIES'	=> 'فعال بودن بکارگیری شکلک ها در امضای کاربران',
	'ALLOW_SMILIES'	=> 'فعال بودن شکلک ها',
	'ALLOW_TOPIC_NOTIFY'	=> 'فعال بودن اشتراک در مبحث',
	'BOARD_PM'	=> 'پیغام های خصوصی',
	'BOARD_PM_EXPLAIN'	=> 'فعال بودن یا غیرفعال بودن پیغام های خصوصی برای همه کاربران.',
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'نماد ها معمولا کوچک هستند, آنها تصاوير منحصر بفردي هستند که پيوسته به يک کاربرند. معمولا نمادها در زير نام هاي کاربري در قسمت مشاهده مباحث قابل رويت هستند( در برخي استايلها ). از اين جا شما مي توانيد چگونگي تعيين نماد توسط کاربران را تنظيم کنيد. لطفا در نظر داشته باشید که دایرکتوری تعیین شده در زیر باید نوشتنی ( براساس chmod ) و موجود باشد. همچنین در نظر داشته باشید که تعیین حد اکثر حجم نماد فقط برای نماد های آپلودی قابل تحمیل است و بر روی نماد های قرار گرفته توسط لینک های خارجی هیچ تاثیری ندارد.',//If avartars enabled (,m,o,c,.,naribbph,p)i-n-v-e-r-s-e i-t
	'ALLOW_LOCAL'	=> 'فعال بودن گالری نماد',
	'ALLOW_REMOTE'	=> 'فعال بودن وارد کردن نماد',
	'ALLOW_REMOTE_EXPLAIN'	=> 'دادن لینک به نماد از سایت دیگر.',
	'ALLOW_UPLOAD'	=> 'فعال بودن آپلود نماد',
	'AVATAR_GALLERY_PATH'	=> 'مسیر گالری نماد',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'مسير زير مي بايست بر پايه ريشه phpBB باشد, مثال. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'	=> 'مسير انبار نماد ها',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'مسير زير مي بايست بر پايه ريشه phpBB باشد, مثال. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'	=> 'حداکثر ابعاد نماد',
	'MAX_AVATAR_SIZE_EXPLAIN'	=> 'عرض x ارتفاع بر کمیت پیکسل.',
	'MAX_FILESIZE'	=> 'حد اکثر حجم نماد',
	'MAX_FILESIZE_EXPLAIN'	=> 'برای آپلود فایل نماد.',
	'MIN_AVATAR_SIZE'	=> 'حداقل ابعاد نماد',
	'MIN_AVATAR_SIZE_EXPLAIN'	=> 'عرض x ارتفاع بر کمیت پیکسل.',
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'در این قسمت شما می توانید تنظیمات پیشفرض برای همه قسمت های پیغام های خصوصی را تغییر دهید.',
	'ALLOW_BBCODE_PM'	=> 'فعال بودن BBCode در پیغام های خصوصی',
	'ALLOW_FLASH_PM'	=> 'فعال بودن بکارگیری تگ <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'اين قسمت قرارگيري فايل هاي فلش را در پیام هاي خصوصي ميسر مي کند, اگر از اينجا تنظيم شود, همچنين بايد در سطوح دسترسي نيز تعريف شود.',
	'ALLOW_FORWARD_PM'	=> 'فعال بودن فوروارد پیغام های خصوصی',
	'ALLOW_IMG_PM'	=> 'فعال بودن استفاده از تگ <code>[IMG]</code>',
	'ALLOW_MASS_PM'	=> 'فعال بودن ارسال پیغام های خصوصی به کاربران و گروهای متعدد',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'از بخش تنظيمات گروه مي توانيد ارسال به هر گروه را تنظيم نماييد.',
	'ALLOW_PRINT_PM'	=> 'فعال بودن نمایش چاپ در پیغام های خصوصی',
	'ALLOW_QUOTE_PM'	=> 'فعال بودن نقل قولها در پیغام خصوصی',
	'ALLOW_SIG_PM'	=> 'فعال بودن امضا در پیغام های خصوصی',
	'ALLOW_SMILIES_PM'	=> 'فعال بودن شکلک ها در پیغام های خصوصی',
	'BOXES_LIMIT'	=> 'فعال بودن پیغام های خصوصی در هر محفظه',
	'BOXES_LIMIT_EXPLAIN'	=> 'کاربران نمي توانند بيشر از اين تعداد در هر باکس پیام هاي خصوصي دريافت کنند. چنانچه مي خواهيد دريافت پیام هاي خصوصي نامحدود باشد مقدار را روي 0 قرار دهيد.',
	'BOXES_MAX'	=> 'حداکثر فولدرهای پیغام های خصوصی',
	'BOXES_MAX_EXPLAIN'	=> 'بوسیله پیشفرض کاربران می توانند تعداد زیادی فولدر برای پیغام های خصوصی ایجاد نمایند.',
	'ENABLE_PM_ICONS'	=> 'فعال بودن انتخاب آیکون های مبحث برای پیغام های خصوصی',
	'FULL_FOLDER_ACTION'	=> 'اقدام پيشفرض براي پوشه هاي پرشده',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'اقدام پیشفرض برای پوشه های پرشده هر کاربر که بصورت خوکار انجام می شود. یک استثنا برای " پیغام های ارسال شده " این است که اقدام پیشفرض حذف پیغام های قدیمی است.',
	'HOLD_NEW_MESSAGES'	=> 'نگاهداری پیغام های جدید',
	'PM_EDIT_TIME'	=> 'مدت زمان ویرایش',
	'PM_EDIT_TIME_EXPLAIN'	=> 'حداکثر مدت زمان ويرايش پیام هاي خصوصي که پيش از اين به مقصد نرسيده اند. براي غيرفعال کردن اين وضعيت عدد 0 را تعريف کنيد.',
	'ACP_POST_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد همه تنظيمات پيشفرض براي ارسال پست را تعيين کنيد.',
	'PM_MAX_RECIPIENTS'			=> 'حداكثر گيرنده ها',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'حداكثر تعداد گيرنده هايي كه مي تواند براي ارسال پيام خصوصي انتخاب شود. مقدار 0 به معني نامحدود كردن است؛ همچنين اين مقادير مي توانند در بخش تنظيمات گروه ها تنظيم شوند.',
	'ALLOW_POST_LINKS'	=> 'فعال بودن لينک ها در پستها / پیام هاي خصوصي',
	'ALLOW_POST_LINKS_EXPLAIN'	=> 'چنانچه تگ BBCode <code>[URL]</code> غیر فعال شده باشد ، تنظیم اتوماتیک URL ها غیرفعال می شود.',
	'ALLOW_POST_FLASH'	=> 'فعال بودن استفاده از تگ BBCode برای فایل های Flash در پست ها ',
	'ALLOW_POST_FLASH_EXPLAIN'	=> 'در صورتي که تگ <code>[FLASH]</code> غير فعال شود ، استعمال فايل هاي فلش در پست ها غير ممکن است. لطفا سطوح دسترسي کاربراني را که قصد داريد  آنها را مجاز به استفاده فايل هاي فلش کنيد ، بازنويسي نماييد.',
	
	'ENABLE_QUEUE_TRIGGER'			=> 'فعال بودن پست پي در پي',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Ability to put registered users posts to post approval if their post count is lower than the specified value below. This setting has no effect on the permission setting for post/topic approval.',
	'QUEUE_TRIGGER_POSTS'			=> 'Maximum post count for queued posts',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'If queued posts is enabled, this is the post count the user need to reach in order to post without post approval. If the users post count is below this number, the post is stored in the queue automatically.',
			
	'BUMP_INTERVAL'	=> 'فاصله بامپ',
	'BUMP_INTERVAL_EXPLAIN'	=> 'تعداد دقيقه ها ، ساعت ها و روزها باي دستيابي به توانايي بامپ مبحث.',
	'CHAR_LIMIT'	=> 'حداکثر کاراکتر ها در هر پست',
	'CHAR_LIMIT_EXPLAIN'	=> 'تعداد کاراکتر هاي مجاز دورن پست. با تعريف عدد 0 اين خصيصه نامحدود مي گردد.',
	'DISPLAY_LAST_EDITED'	=> 'نمايش اطلاعات آخرين زمان ويرايش',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'در صورتي که مي خواهيد اطلاعات آخرين ويرايش يک پست قابل رويت باشد ، با اين گزينه موافقت کنيد.',
	'EDIT_TIME'	=> 'حداکثر زمان ويرايش',
	'EDIT_TIME_EXPLAIN'	=> 'حداکثر زمان مجاز براي ويرايش يک پست. براي غير فعال کردن اين حالت ، 0 را تعيين کتيد.',
	'FLOOD_INTERVAL'	=> 'فاصله زماني',
	'FLOOD_INTERVAL_EXPLAIN'	=> 'ثانيه هايي که يک کار مي بايست بين ارسال پیام هاي جديد صبر کند. براي مجاز کردن کاربران براي عبور از اين ، سطوح دسترسي شان را تغيير دهيد.',
	'HOT_THRESHOLD'	=> 'رسيدن به مبحث محبوب',
	'HOT_THRESHOLD_EXPLAIN'	=> 'پست هايي که نياز است مبحث بعنوان " محبوب " تعريف شود. براي غيرفعال کردن مباحث محبوب ، عدد 0 را تعريف کنيد.',
	'MAX_POLL_OPTIONS'	=> 'حداکثر تعداد گزينه هاي نظر سنجي',
	'MAX_POST_FONT_SIZE'	=> 'حداکثر اندازه فونت در هر پست',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'حداکثر اندازه فونت در يک پوست. براي داشتن اندازه نامحدود در هر پست ، عدد 0 را تعريف کنيد.',
	'MAX_POST_IMG_HEIGHT'	=> 'حد اکثر ارتفاع تصوير در هر پست',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'حداکثر ارتفاع يک تصوير/فايل فلش براي ارسال پست. 0 را براي نامحدود کردن ارتفاع تعريف کنيد.',
	'MAX_POST_IMG_WIDTH'	=> 'هر اکثر عرض تصوير در هر پست',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'حداکثر عرض يک تصوير/فايل فلش براي ارسال پست. 0 را براي نامحدود کردن عرض تعريف کنيد',
	'MAX_POST_URLS'	=> 'حد اکثر تعداد لينک ها در هر پست',
	'MAX_POST_URLS_EXPLAIN'	=> 'هر اکثر تعداد لينک ها در هر پست. براي تعيين بي نهايت عدد 0 را وارد کنيد.',
	'POSTING'	=> 'ارسال پست',
	'POSTS_PER_PAGE'	=> 'پست ها در هر صفحه',
	'QUOTE_DEPTH_LIMIT'	=> 'حداکثر تعداد نقل قول هاي تو در تو در هر پست',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'	=> 'بيشترين تعداد مجاز براي ايجاد نقل قول هاي تو در تو. با تعريف عدد 0 اين خصيصه نامحدود مي شود.',
	'SMILIES_LIMIT'	=> 'حداکثر شکلکها در هر پست',
	'SMILIES_LIMIT_EXPLAIN'	=> 'حداکثر تعداد شکلک ها در هر پست. براي تعريف به صورت نامحدود ، عدد 0 را تنظيم کتيد.',
	'TOPICS_PER_PAGE'	=> 'مباحث در هر صفحه',
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'در اين قسمت شما مي توانيد همه تنظيمات پيشفرض براي امضا را مستقر کنيد.',
	'MAX_SIG_FONT_SIZE'	=> 'حد اکثر اندازه فونت امضا',
	'MAX_SIG_FONT_SIZE_EXPLAIN'	=> 'حداکثر اندازه فونت در امضاي کاربران. 0 را براي نامحدود کردن اندازه ها تعريف کنيد.',
	'MAX_SIG_IMG_HEIGHT'	=> 'حد اکثر ارتفاع تصوير امضا',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'حداکثر ارتفاع يک تصوير/فايل فلش براي بکارگیری در امضا. 0 را براي نامحدود کردن ارتفاع تعريف کنيد.',
	'MAX_SIG_IMG_WIDTH'	=> 'حد اکثر عرض تصوير در امضا',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'	=> 'حداکثر عرض يک تصوير/فايل فلش براي بکارگیری در امضا. 0 را براي نامحدود کردن عرض تعريف کنيد.',
	'MAX_SIG_LENGTH'	=> 'حداکثر امتداد امضا',
	'MAX_SIG_LENGTH_EXPLAIN'	=> 'حداکثر تعداد کاراکترها در امضا.',
	'MAX_SIG_SMILIES'	=> 'حداکثر شکلک ها در امضا',
	'MAX_SIG_SMILIES_EXPLAIN'	=> 'حد اکثر تعداد شکلک هاي مجاز در امضاي کاربران. 0 را براي استفاده از شکلک ها بصورت نامحدود ، تعريف کنيد.',
	'MAX_SIG_URLS'	=> 'حداکثر لينک ها در امضا',
	'MAX_SIG_URLS_EXPLAIN'	=> 'حداکثر تعداد لينک ها در امضاي کاربران. 0 را براي بکارگيري لينک ها بصورت نامحدود، تعريف کنيد.',
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد تنظيمات عضويت و نقل قول هاي مشخصات را تعريف کنيد.',
	'ACC_ACTIVATION'	=> 'فعال سازي حساب',
	'ACC_ACTIVATION_EXPLAIN'	=> 'مشخص کردن این گزینه برای بورد ، در صورتی که فعال سازی در دستور کار است ، الزامی می باشد.شما همچنین می توانید بطور کامل عضویت های جدید را غیرفعال کنید.',
	'ACC_ADMIN'	=> 'توسط مدیر',
	'ACC_DISABLE'	=> 'غیرفعال',
	'ACC_NONE'	=> 'هیچ',
	'ACC_USER'	=> 'توسط کاربر',
	'ALLOW_EMAIL_REUSE'	=> 'فعال بودن استعمال دوباره ايميل',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'کاربران مختلف مي توانند با استفاده از آدرس ايميل مشابه عضو شوند.',
	'COPPA'	=> 'COPPA',
	'COPPA_FAX'	=> 'شماره فکس COPPA',
	'COPPA_MAIL'	=> 'آدرس پستي COPPA',
	'COPPA_MAIL_EXPLAIN'	=> 'اين آدرسي است که والدين فرم هاي عضويت COPPA را به آن ارسال خواهد کرد.',
	'ENABLE_COPPA'	=> 'فعال بودن COPPA',
	'ENABLE_COPPA_EXPLAIN'	=> 'این برای کاربرانی است که آنها 13 ساله یا بیشتر هستند. این حالت برای موافقت با قانون COPPA در ایالات متحده امریکاست. چنانچه COPPA برای گروه های مشخصی غیرفعال شود ، قابل رویت نخواهد بود..',
	'MAX_CHARS'	=> 'حداکثر',
	'MIN_CHARS'	=> 'حد اقل',
	'MIN_CHARS_TERMS'         => 'حد اقل زمان براي پذيرفتن قوانين',
	'MIN_TIME_REG'	=> 'حد اقل زمان برای عضویت',
	'MIN_TIME_REG_EXPLAIN'	=> 'فرم عضويت قادر به ارسال شدن نيست زيرا اين زمان سپري شده است.',
	'MIN_TIME_TERMS'	=> 'حداقل زمان براي موافقت با قوانين',
	'MIN_TIME_TERMS_EXPLAIN'	=> 'صفحه پيش از سپري شدن اين زمان ، قابل جستن نباشد.',
	'NO_AUTH_PLUGIN'	=> 'پلاگين مناسب و صحيح يافت نشد.',
	'PASSWORD_LENGTH'	=> 'طول کلمه عبور',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'حد اقل و حداکثر کاراکتر ها برای کلمه عبور.',
	'REG_LIMIT'	=> 'تلاش های جستجو',
	'REG_LIMIT_EXPLAIN'	=> 'حداکثر تلاش کاربران براي ورود تا پيش از ظاهر شدن کد تاييد بصري.',
	'USERNAME_ALPHA_ONLY'	=> 'فقط ابتدايي (Alphanumeric)',
	'USERNAME_ALPHA_SPACERS'	=> 'ابتدايي (Alphanumeric) و فاصله انداز ها',
	'USERNAME_ASCII'	=> 'ASCII (يونيکد بين المللي نيست)',
	'USERNAME_LETTER_NUM'	=> 'هر حرف و عدد',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'هر حرف, عدد, و فاصله انداز',
	'USERNAME_CHARS'	=> 'اندازه کاراکتر های نام کاربری',
	'USERNAME_CHARS_ANY'	=> 'هر کاراکتر',
	'USERNAME_CHARS_EXPLAIN'	=> 'منحصر کردن حالت کاراکتر هاي قابل استفاده در نام هاي کاربري, فاصله انداز ها شامل, -, +, _, [ and ] هستند.',
	'USERNAME_LENGTH'	=> 'طول نام کاربری',
	'USERNAME_LENGTH_EXPLAIN'	=> 'حد اقل و حداکثر تعداد کاراکتر هاي قابل استفاده براي نام هاي کاربري.',
	'ACP_VC_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد پيشفرض هاي کد تاييد بصري و تنظيمات CAPTCHA را تنظيم کنيد.',
	'CAPTCHA_GD'	=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'	=> 'پارازيت در نماي جلوي GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'	=> 'GDرا براي بکارگيري CAPTCHAي پيشرفته بکار ببريد.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'از پارازيت در نماي جلو براي مشکل تر کردن GD CAPTCHA استفاده کنيد.',
	'CAPTCHA_GD_X_GRID'	=> 'پارازيت در نماي پشت GD CAPTCHA (محور-xها)',
	'CAPTCHA_GD_X_GRID_EXPLAIN'	=> 'از این گزینه برای مشکل تر کردن  CAPTCHA بر پایه GD استفاده کنید.برای غیرفعال کردن پارازیت ها در پس زمینه محور x ها ، 0 را تعریف کنید.',
	'CAPTCHA_GD_Y_GRID'	=> 'پارازيت در نماي پشت GD CAPTCHA (محور-yها)',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'	=> 'از این گزینه برای مشکل تر کردن  CAPTCHA بر پایه GD استفاده کنید.برای غیرفعال کردن پارازیت ها در پس زمینه محور y ها ، 0 را تعریف کنید.',
	'CAPTCHA_PREVIEW_MSG'	=> 'تنظيمات شما براي کد تاييد بصري ذخيره نشده است. اين تنها يک پيش نمايش است.',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'CAPTCHA با تنظیمات صورت گرفته کنونی قابل رویت است. برای بروزآوری از کلید " پیش نمایش" استفاده کنید. در نظر داشته باشد که captcha ها بصورت تصادفی هستند و در هربار تفاوت هایی در آنها وجود دارد.',
	'VISUAL_CONFIRM_POST'	=> 'فعال بودن کد تاييد بصوري براي ارسال پست مهمانها',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'کاربران ناگزير به ورود کد نمايش داده شده بصورت تصادفي باشند.',
	'VISUAL_CONFIRM_REG'	=> 'فعال بودن کد تاييد بصري براي عضويت ها',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'کاربران در هنگام عضويت ناگزير به ورود يک کد مشابه با کد به نمايش شده درون تصوير باشند.',
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'این جزییات برای تعریف داده های قابل بکارگیری برای ارسال کوکی ها به مرورگرهای کاربران است. قطعا قالب اولیه تنظیمات کوکی مناسب است. چنانچه شما نیاز به اعمال تغییرات در آن دارید، اطلاعات غلط باعث می شود که از ورود کاربران جلوگیری شود.',
	'COOKIE_DOMAIN'	=> 'دامنه کوکي',
	'COOKIE_NAME'	=> 'نام کوکي',
	'COOKIE_PATH'	=> 'مسير کوکي',
	'COOKIE_SECURE'	=> 'محافظ کوکي',
	'COOKIE_SECURE_EXPLAIN'	=> 'در صورتی که سرور شما با SSL اجرا شده است، چنانچه این گزینه روی " غیرفعال" تنظیم شده است آنرا به " فعال "  تغییر دعید. درصورتی که این گزینه روی " فعال " تعریف شده باشد و سرور با SSL اجرا نشده باشد، نتایج سرور در مدت ریدایرکت ها با مشکل روبرو خواهد شد.',
	'ONLINE_LENGTH'	=> 'View online time span',
	'ONLINE_LENGTH_EXPLAIN'	=> 'Number of minutes after which inactive users will not appear in “Who is online” listings. The higher this value the greater is the processing required to generate the listing.',
	'SESSION_LENGTH'	=> 'امتداد Session',
	'SESSION_LENGTH_EXPLAIN'	=> 'Session پس از گذشت اين زمان برحسب ثانيه ، به انقضا مي رسند.',
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Here you can enable and disable certain board functions to reduce the amount of processing required. On most servers there is no need to disable any functions. However on certain systems or in shared hosting environments it may be beneficial to disable capabilities you do not really need. You can also specify limits for system load and active sessions beyond which the board will go offline.',
	'CUSTOM_PROFILE_FIELDS'	=> 'فیلد های سفارشی مشخصات',
	'LIMIT_LOAD'	=> 'حدود بارگذاري سيستم',
	'LIMIT_LOAD_EXPLAIN'	=> 'If the system’s 1-minute load average exceeds this value the board will automatically go offline. A value of 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers and where this information is accessible. The value here resets itself to 0 if phpBB was unable to get the load limit.',
	'LIMIT_SESSIONS'	=> 'وسعت session ها',
	'LIMIT_SESSIONS_EXPLAIN'	=> 'If the number of sessions exceeds this value within a one minute period the board will go offline. Set to 0 for unlimited sessions.',
	'LOAD_CPF_MEMBERLIST'	=> 'مجاز بودن استايل ها براي نمايش فيلدهاي سفارشي مشخصات در ليست کاربران',
	'LOAD_CPF_VIEWPROFILE'	=> 'نمايش نتايج فيلد هاي سفارشي مشخصات در صفحه مشخصات کاربران',
	'LOAD_CPF_VIEWTOPIC'	=> 'نمايش نتايج فيلد هاي سفارشي مشخصات در صفحات مباحث',
	'LOAD_USER_ACTIVITY'	=> 'نمايش فعاليت هاي کاربران',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'نمايش مباحث/انجمن هاي فعال هر کاربر در مشخصات و کنترل پنل. اين حالت نياز به غيرفعال شدن براي انجمن هاي با بالاي يک ميليون پست دارد.',
	'RECOMPILE_STYLES'	=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Check for updated style components on filesystem and recompile.',
	'YES_ANON_READ_MARKING'	=> 'فعال بودن نشانه گذاري مبحث براي مهمان ها',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stores read/unread status information for guests. If disabled posts are always read for guests.',
	'YES_BIRTHDAYS'	=> 'فعال بودن لیست متولدین',
	'YES_BIRTHDAYS_EXPLAIN'	=> 'در صورت فعال بودن،بايد گزينه متولدين هم فعال باشد',
	'YES_JUMPBOX'	=> 'فعال بودن نمايش جعبه پرش',
	'YES_MODERATORS'	=> 'فعال بودن نمايش مديران انجمن',
	'YES_ONLINE'	=> 'فعال بودن ليست کاربران آنلاين',
	'YES_ONLINE_EXPLAIN'	=> 'فعال بودن اطلاعات آنلاين بودن کاربر در فهرست, انجمن ها و مباحث.',
	'YES_ONLINE_GUESTS'	=> 'فعال بودن به ليست در آمدن مهمان ها در مشاهده آنلاين ها',
	'YES_ONLINE_GUESTS_EXPLAIN'	=> 'فعال بودن مشاهده اطلاعات کاربران مهمان درمشاهده آنلاين ها.',
	'YES_ONLINE_TRACK'	=> 'فعال بودن مشاهده اطلاعات آنلاين/آفلاين بودن کاربران',
	'YES_ONLINE_TRACK_EXPLAIN'	=> 'نمايش پیام آنلاين بودن کاربران در مشخصات و صفحات مبحث ها.',
	'YES_POST_MARKING'	=> 'Enable dotted topics',
	'YES_POST_MARKING_EXPLAIN'	=> 'Indicates whether user has posted to a topic.',
	'YES_READ_MARKING'	=> 'فعال بودن نشانه گذاري مبحث از جانب سرور',
	'YES_READ_MARKING_EXPLAIN'	=> 'ذخيره سازي وضعيت خوانده شده/خوانده نشده در پايگاه داده ها پيش از يک کوکي.',
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB از پلاگین ها و ماژول های سندیت پشتیبانی می کند. اینجا شما می توانید چگونگی سندیت کاربران هنگام ورود به بورد را تنظیم کنید. در حالت پیشفرض پلاگین های DB, LDAP وApache تعبیه شده اند. همه روش ها به اطلاعات اضافه نیازی ندارند و تنها اطلاعات را در فیلدهای مربوط به روش انتخاب شده ثبت کنید.',
	'AUTH_METHOD'	=> 'انتخاب يک روش سنديت',
	'APACHE_SETUP_BEFORE_USE'	=> 'شما ناگزیرید که سندیت apache را پیش از تعویض phpBB به این حالت سندیت ، نصب کنید. لطفا در نظر داشته بشید که نام کاربری apache بایستی مشابه نام کاربری شما در phpBB باشد. سندیت apache تنها می تواند با mod_php بکارگرفته شود ( نه با یک نسخه CGI ) و safe_mode غیرفعال باشد..',
	'LDAP_DN'	=> 'اساس LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'	=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'	=> 'نشان ايميل LDAP',
	'LDAP_EMAIL_EXPLAIN'	=> 'Set this to the name of your user entry e-mail attribute (if one exists) in order to automatically set the e-mail address for new users. Leaving this empty results in empty e-mail address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'	=> 'The specified e-mail attribute does not exist.',
	'LDAP_NO_IDENTITY'	=> 'قادر به يافتن يک هويت ورود براي %s نيست.',
	'LDAP_PASSWORD'	=> 'کلمه عبور LDAP',
	'LDAP_PASSWORD_EXPLAIN'	=> 'Leave blank to use anonymous binding. Else fill in the password for the above user.  Required for Active Directory Servers. <strong>WARNING:</strong> This password will be stored as plain text in the database visible to everybody who can access your database or who can view this configuration page.',
	'LDAP_PORT'	=> 'پورت سرور LDAP',
	'LDAP_PORT_EXPLAIN'	=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'	=> 'نام سرور LDAP',
	'LDAP_SERVER_EXPLAIN'	=> 'If using LDAP this is the hostname or IP address of the LDAP server. Alternatively you can specify an URL like ldap://hostname:port/',
	'LDAP_UID'	=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'	=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'	=> 'LDAP user <var>dn</var>',
	'LDAP_USER_EXPLAIN'	=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'	=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'	=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '',
	'ENABLE_GZIP'	=> 'فعال بودن فشرده ساز GZip',
	'ENABLE_GZIP_EXPLAIN'	=> 'فعال بودن فشرده سازي سبب كاهش فضا و سرعت بخشيدن به سايت شما خواهد شد اما مصرف CPU را در رايانه شما و كاربر افزايش خواهد داد.',
	'FORCE_SERVER_VARS'	=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'	=> 'مسير ذخيره سازي نماد هاي پست',
	'ICONS_PATH_EXPLAIN'	=> 'مسير درون پوشه phpBB شما, مثال. <samp>images/icons</samp>.',
	'PATH_SETTINGS'	=> 'تنظيمات مسير',
	'RANKS_PATH'	=> 'مسير ذخيره سازي تصوير رتبه',
	'RANKS_PATH_EXPLAIN'	=> 'مسير درون پوشه phpBB شما, مثال. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'	=> 'مسير اسکريپت',
	'SCRIPT_PATH_EXPLAIN'	=> 'مسيري که phpBB شما در آن مستقر شده است, مثال. <samp>/phpBB3</samp>.',
	'SERVER_NAME'	=> 'نام دامنه',
	'SERVER_NAME_EXPLAIN'	=> 'نام دامنه اي که اين بورد بر روي آن اجرا شده است (مثال: <samp>www.example.com</samp>).',
	'SERVER_PORT'	=> 'پورت سرور',
	'SERVER_PORT_EXPLAIN'	=> 'پورتي که سرور شما بر روي آن در حال تداوم است, معمولا اين پورت 80 است, تنها در صورتي که متمايز است تغيير دهيد.',
	'SERVER_PROTOCOL'	=> 'پروتوکل سرور',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'این گزینه تنها زمانی بکار گرفته می شود که به آن نیاز باشد. در صورتی که خالییست یا تحمیل نشده است ازتنظیمات  کوکی ها تعمیین کنید.(<samp>http://</samp> يا <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'	=> 'تنظيمات URL سرور',
	'SMILIES_PATH'	=> 'مسير ذخيره سازي شکلک ها',
	'SMILIES_PATH_EXPLAIN'	=> 'مسير درون پوشه phpBB شما, مثال. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'	=> 'مسير ذخيره سازي نماد پسوندها',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'مسير درون پوشه phpBB شما, مثال. <samp>images/upload_icons</samp>.',
	'ACP_SECURITY_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد تنظيمات Session ها و نقل قول هاي ورود را تعريف کنيد.',
	'ALL'	=> 'All',
	'ALLOW_AUTOLOGIN'	=> 'فعال بودن ورود هاي ماندگار',
	'ALLOW_AUTOLOGIN_EXPLAIN'	=> 'با تعريف اين گزينه روي " بلي " کاربران در هر بازديد بصورت خودکار وارد بورد  مي شوند.',
	'AUTOLOGIN_LENGTH'	=> 'دوام ورود ماندگار (با روز)',
	'AUTOLOGIN_LENGTH_EXPLAIN'	=> 'تعداد روز هايي که ورود ماندگار از بين مي رود. عدد 0 را براي غيرفعال کردن وارد کنيد.',
	'BROWSER_VALID'	=> 'مرورگر معتبر',
	'BROWSER_VALID_EXPLAIN'	=> 'Enables browser validation for each session improving security.',
	'CHECK_DNSBL'	=> 'Check IP against DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'If enabled the user’s IP address is checked against the following DNSBL services on registration and posting: <a href="http://spamcop.net">spamcop.net</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. This lookup may take a while, depending on the server’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'	=> 'A.B',
	'CLASS_C'	=> 'A.B.C',
	'EMAIL_CHECK_MX'	=> 'چک کردن دامنه ايميل براي براي يافتن رکورد MX صحيح',
	'EMAIL_CHECK_MX_EXPLAIN'	=> 'در صورتي که فعال شود, ايميل هايي که در هنگام عضويت يا در مشخصات وارد شده اند براي داشتن رکورد صحيح MX بررسي مي شوند. اگر غير فعال شود ، در هنگام عضويت يا در مشخصات کاربران مي توانند ايميل نادرستي وارد کنند و ايميل وارد شده براي صحيح بودن بررسي نخواهد شد.',
	'FORCE_PASS_CHANGE'	=> 'تحميل تغيير کلمه عبور',
	'FORCE_PASS_CHANGE_EXPLAIN'	=> 'کاربران بعد از تعداد روزي ثبت مي شود مي بايست کلمه عبورشان را تعويض کنند . براي غير فعال  کردن اين حالت عدد 0 را وارد کنيد.',
	'FORM_TIME_MAX'	=> 'حداکثر زمان براي ارسال پست ها',
	'FORM_TIME_MAX_EXPLAIN'	=> 'اين زماني است که کاربر مجبور است تا پيش از آن فرم را ارسال کند. براي غير فعال کردن -1 را وارد کنيد. توجه اشته باشيد که صرف نظر از اين تنظيم ، در صورت به انتها رسيدن session فرم قادر به اشتباه شدن است.',
	'FORM_TIME_MIN'	=> 'حداقل زمان براي ارسال فرم ها',
	'FORM_TIME_MIN_EXPLAIN'	=> 'Submissions faster than this time are ignored by the board. Use 0 to disable.',
	'FORM_SID_GUESTS'	=> 'Tie forms to guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'	=> 'If enabled, the form token issued to guests will be session-exclusive. This can cause problems with some ISPs.',
	'FORWARDED_FOR_VALID'	=> '<var>X_FORWARDED_FOR</var> معتبر شده در هدر',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Session فقط زمانی تداوم دارند که <var>X_FORWARDED_FOR</var> در هدر ارسال و با درخواست قبلی هم پایه ارسال شود. تحریم ها با استفاده از <var>X_FORWARDED_FOR</var> برای IP های مخالف بررسی می شوند.',
	'IP_VALID'	=> 'Session تاييد اعتبار IP',
	'IP_VALID_EXPLAIN'	=> 'مشخص نمودن اینکه چه تعداد از کاربران بتوانند IP را برای معتبر سازی یک session بکار گیرند. تطبیق <samp>همه</samp>  کامل ، <samp>A.B.C</samp> نخست x.x.x ، <samp>A.B</samp> نخست  x.x ، <samp>هیچ</samp> غیرفعال کردن بررسی. در آدرس های IPv6 <samp>A.B.C</samp> 4 بلوک مقدماتی  و <samp>A.B</samp>3 بلوک مقدماتی را تطبیق می کند.',
	'MAX_LOGIN_ATTEMPTS'	=> 'حد اکثر دفعات تلاش براي ورود',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'اگر پس از گذشتن اين تعداد ورود ناموفق مي بايست ورودتان را بصورت بصري تاييد کنيد (کد تاييد بصري).',
	'NO_IP_VALIDATION'	=> 'هيچ',
	'NO_REF_VALIDATION'				=> 'هيچ',
	'PASSWORD_TYPE'	=> 'در هم پيچيدگي کلمه عبور',
	'PASSWORD_TYPE_EXPLAIN'	=> 'مشخص نمودن چگونگی ترکیب کلمه های عبور ، نیاز به تعیین یا تغییر یک گزینه دارد ..',
	'PASS_TYPE_ALPHA'	=> 'بايد حاوي حروف و اعداد باشند',
	'PASS_TYPE_ANY'	=> 'احتياج نيست',
	'PASS_TYPE_CASE'	=> 'بايد موارد در هم آميخته باشند',
	'PASS_TYPE_SYMBOL'	=> 'بايد شامل symbol ها باشند',
	'REF_HOST'						=> 'فقط هاست (ميزبان) معتبر',
	'REF_PATH'						=> 'همچنين مسير معتبر',
	'REFERER_VALID'					=> 'ناظر اعتبار',
	'REFERER_VALID_EXPLAIN'			=> 'اگر اين گزينه فعال باشد،در هنگام ارسال پست،سرور/مسير انجمن بررسي خواهد شد.اين گزينه در انجمن هايي با چند نشاني يا ورودي از بيرون مشکل ساز خواهد بود.',
		'TPL_ALLOW_PHP'					=> 'Allow php in templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'If this option is enabled, <code>PHP</code> and <code>INCLUDEPHP</code> statements will be recognised and parsed in templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'This information is used when the board sends e-mails to your users. Please ensure the e-mail address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) e-mail service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.',

	'ADMIN_EMAIL'					=> 'Return e-mail address',
	'ADMIN_EMAIL_EXPLAIN'			=> 'This will be used as the return address on all e-mails, the technical contact e-mail address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in e-mails.',
		
	'BOARD_EMAIL_FORM'	=> 'کاربران ايميل ها را توسط بورد ارسال کنند',
	'BOARD_EMAIL_FORM_EXPLAIN'	=> 'بجاي مشاهده ايميل کاربران ، از طريق بورد براي آنها ايميل ارسال مي کنند.',
	'BOARD_HIDE_EMAILS'	=> 'مخفي نمودن آدرس هاي ايميل',
	'BOARD_HIDE_EMAILS_EXPLAIN'	=> 'اين تابع آدرس هاي ايميل را بصورت سراسري مخفي مي کند.',
	'CONTACT_EMAIL'	=> 'آدرس ايميل ارتباطي',
	'CONTACT_EMAIL_EXPLAIN'	=> 'این آدرس زمانی قابل استفاده خواهد بود که یک موضوع برای ارتباط احتیاج باشد، برای مثال : اسپم، بازده نادرست، و غیره. این همیشه  در <samp>فرم</samp> و <samp>پاسخ به</samp> بکار گرفته خواهد شد.',
	'EMAIL_FUNCTION_NAME'	=> 'نام تابع ايميل',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'ازتابع ایمیل برای ارسال ایمیل ها بواسطه PHP استفاده می شود.',
	'EMAIL_PACKAGE_SIZE'	=> 'حجم بسته ايميل',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'حداكثر تعداد ايميل هايي كه در يك بسته ارسال مي شوند.اين تنظيم براي ارسال هاي پي در پي خارجي بكار گرفته مي شود.اگر با پيام هاي مبني بر نرسيدن ايميل ها مشكل داريد اين مقدار را برابر 0 قرار دهيد.',
	'EMAIL_SIG'	=> 'امضاي ايميل',
	'EMAIL_SIG_EXPLAIN'	=> 'اين پیام ضميمه همه ايميل هاي ارسال شونده در انجمن خواهد شد.',
	'ENABLE_EMAIL'	=> 'ارسال E-Mail توسط انجمن',
	'ENABLE_EMAIL_EXPLAIN'	=> 'در صورت تعريف گزينه غير فعال ، به هيچ وجه ايميلي توسط اين بورد ارسال نخواهد شد.',
	'SMTP_AUTH_METHOD'	=> 'روش سنديت براي SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'	=> 'فقط مواقعي بکارگيري شود که نام کاربري و کلمه عبور قرار داده شده اند, در صورتي که در انتخاب روش مردد هستيد ، از مهيا کننده سوال کنيد.',
	'SMTP_CRAM_MD5'	=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'	=> 'DIGEST-MD5',
	'SMTP_LOGIN'	=> 'LOGIN',
	'SMTP_PASSWORD'	=> 'کلمه عبور',
	'SMTP_PASSWORD_EXPLAIN'	=> 'تنها در صورتي که سرور STMP شما احتياج دارد ، يک کلمه عبور وارد کنيد.',
	'SMTP_PLAIN'	=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'	=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'	=> 'پورت سرور SMTP',
	'SMTP_PORT_EXPLAIN'	=> 'تنها زماني که مي دانيد سرور STMP بر روي پورت ديگري است ، اين را تغيير دهيد.',
	'SMTP_SERVER'	=> 'آدرس سرور SMTP',
	'SMTP_SETTINGS'	=> 'تنظيمات SMTP',
	'SMTP_USERNAME'	=> 'نام کاربري SMTP',
	'SMTP_USERNAME_EXPLAIN'	=> 'اگر سرور STMP شما نياز دارد ، فقط يک نام کاربري تعيين کنيد.',
	'USE_SMTP'	=> 'بکارگيري سرور SMTP براي ايميل',
	'USE_SMTP_EXPLAIN'	=> 'اگر شما می خواهید یا مجبور هستید برای ارسال از یک سرور نامیده شده بجای توابع محلی mail استفاده کنید ، گزینه " بلی " را انتخاب کنید.',
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'در اینجا شما توانایی فعال سازی و کنترل  Jabber برای خبر واطلاع رسانی فوری را دارید. Jabber یک پروتوکل با سورس باز است و بنابراین قابل استفاده برای عموم می باشد. تعدادی از سرورهای Jabber دربردارنده دروازه ها ( gateway ) یا نقل و انتقالات هستند که شما را مجاز به ارتباط با کاربران بر روی شبکه های ارتباطی مغایر می کند. بر روی همه سرور ها همه نقل و انتقالات و تغییرات در پروتوکل ها ارائه نمی شود و از تغییرات در پروتوکل توسط عملیات ، می تواند جلوگیری شود.',
	'JAB_ENABLE'	=> 'فعال بودن Jabber',
	'JAB_ENABLE_EXPLAIN'	=> 'فعال بودن جهت بکارگيري پيام رسان Jabber.',
	'JAB_GTALK_NOTE'	=> 'لطفا در نظر داشته باشید که GTalk کار نخواهد کرد، زیرا تابع <samp>dns_get_record</samp> نتوانست  پیدا شود. این تابع بر روی PHP4 فعال نمی باشد و نیز بر روی پلتفرم ویندوز قابل اجرا نیست. در حال حاضر بر روی سیستم های برپایه BSD و مشمول Mac OS کار نمی کند.',
	'JAB_PACKAGE_SIZE'	=> 'حجم بسته Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'این تعداد پیغام های ارسال شده در یک بسته است. اگر عدد 0 تنظیم شود پیغام ها بلافاصله ارسال شده و قابل ماندگاری برای ارسال های بعدی نیستند.',
	'JAB_PASSWORD'	=> 'کلمه عبور Jabber',
	'JAB_PORT'	=> 'پورت Jabber',
	'JAB_PORT_EXPLAIN'	=> 'خالي رها کنيد ، چنانچه مي دانيد اين پورت 5222 نيست  آنرا تعريف کنيد.',
	'JAB_SERVER'	=> 'سرور Jabber',
	'JAB_SERVER_EXPLAIN'	=> 'براي ديدن ليست سرور ها %sjabber.org%s را مشاهده کنيد.',
	'JAB_SETTINGS_CHANGED'	=> 'تنظيمات Jabber با موفقيت بروز شد.',
	'JAB_USE_SSL'	=> 'بکارگيري SSL براي اتصال',
	'JAB_USE_SSL_EXPLAIN'	=> 'چنانچه اتصال ایمن مورد آزمایش مثبت قرار گرفته باشد ، اگر پورت Jabber  عدد 5222 باشد می بیسات 5223 جایگزین شود.',
	'JAB_USERNAME'	=> 'نام کاربري Jabber',
	'JAB_USERNAME_EXPLAIN'	=> 'يک نام کاربري عضو شده را تعريف کنيد. اين نام کاربري براي صحت بررسي نخواهد شد.',
		
		
	//phpBB 3.0.5 Additional by www.Maghsad.com	
	
		'CAPTCHA_GD_WAVE'						=> 'GD CAPTCHA wave distortion',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'This applies a wave distortion to the CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Add 3D-noise objects',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'This adds additional objects to the CAPTCHA, over the letters.',
	'CAPTCHA_GD_FONTS'						=> 'Use different fonts',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'This setting controls how many different letter shapes are used. You can just use the default shapes or introduce altered letters. Adding lowercase letters is also possible.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Default',
	'CAPTCHA_FONT_NEW'						=> 'New Shapes',
	'CAPTCHA_FONT_LOWER'					=> 'Also use lowercase',
	
	//-------------------------------//
	
	'VISUAL_CONFIRM_REFRESH'				=> 'Enable users to refresh the confirmation image',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Allows users to request new confirmation codes, if they are unable to solve the VC during registration.',
	//END phpBB 3.0.5 Additional by www.Maghsad.com
	
	
	//START 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	
		'ALLOW_PM_REPORT'			=> 'Allow users to report private messages',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'If this setting is enabled, users have the option of reporting a private message they have received or sent to the board’s moderators. These private messages will then be visible in the Moderator Control Panel.',
	'ALLOW_QUICK_REPLY'			=> 'Allow quick reply',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'This setting defines if quick reply is enabled or not. If this setting is enabled, forums need to have their quick reply option enabled too.',


//////////////////////////////////////////////


	'ALLOW_AVATARS'					=> 'Enable avatars',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Allow general usage of avatars;<br />If you disable avatars in general or avatars of a certain mode, the disabled avatars will no longer be shown on the board, but users will still be able to download their own avatars in the User Control Panel.',
////////////////////////////////////////////

	'ALLOW_REMOTE_UPLOAD'			=> 'Enable remote avatar uploading',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Allow uploading of avatars from another website.',

////////////////////////////////////////////
	'DELETE_TIME'					=> 'Limit deleting time',
	'DELETE_TIME_EXPLAIN'			=> 'Limits the time available to delete a new post. Setting the value to 0 disables this behaviour.',	//////////////////////////////////////////	
		
			'MIN_CHAR_LIMIT'				=> 'Minimum characters per post/message',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'The minimum number of characters the user need to enter within a post/private message.',
				
//////////////////////////////////////////

	'SMILIES_PER_PAGE'				=> 'Smilies per page',
		
/////////////////////////////////////////

	'NEW_MEMBER_POST_LIMIT'			=> 'New member post limit',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'New members are within the <em>Newly Registered Users</em> group until they reach this number of posts. You can use this group to keep them from using the PM system or to review their posts. <strong>A value of 0 disables this feature.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Set Newly Registered Users group to default',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'If set to yes and a new member post limit is specified newly registered users will be not only put into the <em>Newly Registered Users</em> group, but this group also being their default one. This may come in handy if you want to assign a group default rank and/or avatar the user then inherits.',

///////////////////////////////////////



//////////////////////////////////////////////////////////////////

	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Here you can select and configure CAPTCHA plugins, which implement various ways to reject registration attempts from so-called spambots.',
	'AVAILABLE_CAPTCHAS'					=> 'Available plugins',
	'CAPTCHA_UNAVAILABLE'					=> 'The CAPTCHA cannot be selected as its requirements are not met.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',
////////////////////////////////////////////////////////////////////

	'CAPTCHA_NO_GD'							=> 'CAPTCHA without GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'Your changes to the visual confirmation setting were not saved. This is just a preview.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'The CAPTCHA as it would look like using the current selection.',

	'CAPTCHA_SELECT'						=> 'Installed CAPTCHA plugins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'The dropdown holds the CAPTCHA plugins recognized by the board. Gray entries are not available right now and might need configuration prior to use.',
	'CAPTCHA_CONFIGURE'						=> 'Configure CAPTCHAs',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Change the settings for the selected CAPTCHA.',
	'CONFIGURE'								=> 'Configure',
	'CAPTCHA_NO_OPTIONS'					=> 'This CAPTCHA has no configuration options.',

	'VISUAL_CONFIRM_POST'					=> 'Enable visual confirmation for guest postings',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requires anonymous users to enter a random code matching an image to help prevent mass postings.',
	'VISUAL_CONFIRM_REG'					=> 'Enable visual confirmation for registrations',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requires new users to enter a random code matching an image to help prevent mass registrations.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Enable users to refresh the confirmation image',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Allows users to request new confirmation codes, if they are unable to solve the VC during registration. Some plugins might not support this option.',


//////////////////////////////////////////////////////////////////////

	'ENABLE_GZIP_EXPLAIN'		=> 'Generated content will be compressed prior to sending it to the user. This can reduce network traffic but will also increase CPU usage on both server and client side. Requires zlib PHP extension to be loaded.',
/////////////////////////////////////////////////////////////////////

	'ENABLE_EMAIL_EXPLAIN'			=> 'If this is set to disabled no e-mails will be sent by the board at all. <em>Note the user and admin account activation settings require this setting to be enabled. If currently using “user” or “admin” activation in the activation settings, disabling this setting will require no activation of new accounts.</em>',

/////////////////////////////////////////////////////////////////////

				
	
	//END 1 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
			
));

	// Start Again (look => )); )  3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'تنظیمات عمومی خوراک (Feed)',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'این بخش تنظیمات مختلفی برای خوراک ATOM فراهم می آورد و با تجزیه BBCode ها این امکان را می دهد که پست ها برای خوراک (Feed) خوانا باشند.',

	'ACP_FEED_ENABLE'					=> 'فعال سازی خوراک (Feed)',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'فعال/غیر فعال کردن خوراک (Feed) ATOM. در صورت غیر فعال کردن این قسمت، تنظیمات زیر اعمال نخواهد شد.',
	'ACP_FEED_LIMIT'					=> 'تعداد موضوعات',
	'ACP_FEED_LIMIT_EXPLAIN'			=> '',

	'ACP_FEED_OVERALL_FORUMS'			=> 'فعال سازی خوراک (Feed) سراسری انجمن',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'این خوراک (Feed) تمامی پست های موجود در انجمن های شما را نمایش خواهد داد.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'تعداد موضوعات قابل نمایش در هر صفحه برای خوراک (Feed)',

	'ACP_FEED_OVERALL_TOPIC'			=> 'فعال سازی خوراک (Feed) برای تمام موضوعات ارسالی',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'فعال سازی خوراک (Feed) همه مباحث',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'تعداد موضوعات هر صفحه برای نمایش خوراک (Feed) تاپیک ها',
	'ACP_FEED_FORUM'					=> 'فعال سازی خوراک (Feed) برای هر انجمن',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'پست های جدید فقط یک انجمن',
	'ACP_FEED_TOPIC'					=> 'فعال سازی خوراک (Feed) برای هر موضوع',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'پست های جدید یک موضوع',
	'ACP_FEED_NEWS'						=> 'خوراک (Feed) اخبار',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'استفاده از پست اول این انجمن ها به عنوان خوراک (Feed) اخبار',

	'ACP_FEED_GENERAL'					=> 'تنظیمات عمومی خوراک (Feed)',

	'ACP_FEED_ITEM_STATISTICS'			=> 'نمایش آمار هر فید مانند تعداد بازدید ها و ...',
	'ACP_FEED_EXCLUDE_ID'				=> 'به جز این انجمن ها',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'انجمن هایی که نمی خواهید خوراک (Feed) از آن ها فراخوانی شود',

	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'نمایش اطلاعات آماری در زیر موضوعات خوراک (Feed) مانند تعداد بازدید و ...',
		
		
		
// END Again (look => )); )  3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
));

?>