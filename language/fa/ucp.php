<?php
/**
*
* ucp [Farsi]
*
* @package language
* @version $Id: ucp.php,v 1.136 2007/10/08 14:38:26 acydburn Exp $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '<html dir="rtl">

<p align="right"><b><span lang="fa">ثبت نام شما در انجمن “%1$s” به منزله پذيرش تمام قوانين ذكر 
شده مي باشد و با خاطيان مطابق قوانين برخورد خواهد شد&nbsp; :</span></b></p>
<p align="right"><br>
&nbsp;</p>
<p align="right"><b><span lang="fa">قوانين بنيادي :</span></b><br>
<br>
در انتخاب نام کاربر دقت لازم داشته باشيد<span lang="fa"> و حدالامكان نام كاربري 
با حروف لاتين (انگليسي) تعيين شود</span> . در صورت ديدن استفاده از نام هاي 
کاربري رکيک وزشت و همچنين ضد ايراني کاربر بدون اطلاع اخراج خواهد شد.<br>
<br>
رعايت ادب و احترام در برابر ديگر کاربران براي فعاليت&nbsp; الزاميست. در صورت 
مشاهده هرگونه بي احترامي, با کاربر فوق برخورد خواهد شد.<br>
<br>
استفاده از متون يا تصاوير رکيک و ناشايست که با عرف جامعه ي ايراني در تناقض باشد 
تحت هر عنوان غير مجاز است.</p>
<p align="right"><br>
<span lang="fa">ممكن است مديران اين انجمن قوانين ديگري نيز تعريف كرده باشند ، 
براي اطلاع از اين قوانين با مديريت تماس بگيريد.</span></p>
<p align="right">&nbsp;</p>
<p align="right"><b><span lang="fa">- قوانين ارسال پست :</span></b></p><br />
<p align="right"><span lang="fa">زبان رسمي اين انجمن فارسي است،لذا از نوشتن با رسم الخط هاي 
ديگر جز فارسي جدا خود داري نماييد.</span></p>
<p align="right">قبل از طرح هرگونه سوال, با استفاده از Search از اينکه سوال مورد نظر شما قبلا 
مطرح نشده باشد اطمينان حاصل فرمائيد. با کاربراني که سوالات تکراري مطرح کنند 
برخورد خواهد شد.<br>
<br>
براي هر موضوع تخصصي يک بخش در نظر گرفته شده است. هنگام باز کردن تاپيک جديد دقت 
لازم را براي مرتبط بودن موضوع تاپيک با بخش مربوطه به کار گيريد.<br>
<br>
هنگام<span lang="fa"> ارسال موضوع</span> جديد از عنوان مناسب و مرتبط با موضوع 
تاپيک استفاده کنيد. از انتخاب عناويني مانند &quot;يکي کمک کنه&quot;<span lang="fa">،&quot;مشكل&quot;،&quot;درخواست 
راهنمايي&quot; و ...</span> خودداري کنيد.<br>
&nbsp;</p>
<p align="right">&nbsp;</p>
<p align="right"><b><span lang="fa">ساير موضوعات :</span></b></p>
<p align="right"><br>
کاربران ميتوانند از پيغام خصوصي براي ارتباط با يکديگر استفاده نمايند اما با توجه 
به اينکه صاحب سايت اجازه دسترسي و نظارت بر اين حق شخصي کاربران را ندارد هيچگونه 
مسوليتي در قبال پيغام ها را بر عهده خواهد داشت. </p>
<p align="right"><br>
توجه: در صورت مشخص شدن مسئله اي در پيغام هاي خصوصي که موجب ناراحتي يک کاربر شود 
با&nbsp; خاطي برخورد خواهد شد.<br>
<br>
&nbsp;</p>
<p align="right"><span lang="fa">لطفا در صورت مشاهده هرگونه غلط املايي،اصلاح واژگاني يا همكاري 
در بهينه سازي از نظر زباني اين انجمن ، با بخش پشتيباني </span>
<a href="http://phpBB.Maghsad.com"><span lang="en-us">phpBB</span> آسان
نصب </a><span lang="fa"> &nbsp;تماس حاصل فرماييد يا روي 
<a href="http://www.maghsad.com/index/viewtopic.php?t=2868">اينجا كليك نماييد</a>.</span></p>
<br />
	',
	

	'PRIVACY_POLICY'		=> 'This policy explains in detail how “%1$s” along with its affiliated companies (hereinafter “we”, “us”, “our”, “%1$s”, “%2$s”) and phpBB (hereinafter “they”, “them”, “their”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) use any information collected during any session of usage by you (hereinafter “your information”).<br />
	<br />
	Your information is collected via two ways. Firstly, by browsing “%1$s” will cause the phpBB software to create a number of cookies, which are small text files that are downloaded on to your computer’s web browser temporary files. The first two cookies just contain a user identifier (hereinafter “user-id”) and an anonymous session identifier (hereinafter “session-id”), automatically assigned to you by the phpBB software. A third cookie will be created once you have browsed topics within “%1$s” and is used to store which topics have been read, thereby improving your user experience.<br />
	<br />
	We may also create cookies external to the phpBB software whilst browsing “%1$s”, though these are outside the scope of this document which is intended to only cover the pages created by the phpBB software. The second way in which we collect your information is by what you submit to us. This can be, and is not limited to: posting as an anonymous user (hereinafter “anonymous posts”), registering on “%1$s” (hereinafter “your account”) and posts submitted by you after registration and whilst logged in (hereinafter “your posts”).<br />
	<br />
	Your account will at a bare minimum contain a uniquely identifiable name (hereinafter “your user name”), a personal password used for logging into your account (hereinafter “your password”) and a personal, valid e-mail address (hereinafter “your e-mail”). Your information for your account at “%1$s” is protected by data-protection laws applicable in the country that hosts us. Any information beyond your user name, your password, and your e-mail address required by “%1$s” during the registration process is either mandatory or optional, at the discretion of “%1$s”. In all cases, you have the option of what information in your account is publicly displayed. Furthermore, within your account, you have the option to opt-in or opt-out of automatically generated e-mails from the phpBB software.<br />
	<br />
	Your password is ciphered (a one-way hash) so that it is secure. However, it is recommended that you do not reuse the same password across a number of different websites. Your password is the means of accessing your account at “%1$s”, so please guard it carefully and under no circumstance will anyone affiliated with “%1$s”, phpBB or another 3rd party, legitimately ask you for your password. Should you forget your password for your account, you can use the “I forgot my password” feature provided by the phpBB software. This process will ask you to submit your user name and your e-mail, then the phpBB software will generate a new password to reclaim your account.<br />
	',
		
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'حساب شما فعال شد.ازعضويت شما متشکريم.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'اين حساب فعال شده است.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'حساب شما با موفقيت دوباره فعال شد.',
	'ACCOUNT_ADDED'					=> 'از عضويت شما متشکريم, حساب شما ايجاد شد. شما مي توانيد با نام کاربري و کلمه عبور خود وارد سايت شويد.',
	'ACCOUNT_COPPA'					=> 'حساب شما ايجاد شد ولي بايد تاييد گردد, لطفا ديگر اطلاعات را از ايميل خود چک کنيد.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'اكانت شما به روز شد اما قبل از استفاده بايد در ايميل خود ايميلي كه از سوي ما فرستاده شده را بررسي كنيد.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'اكانت شما به روز شد اما بايد مديران آن را تاييد كنند.',
	'ACCOUNT_INACTIVE'				=> 'شما عضو شديد اما براي تاييد عضويت بايد به ايميل خود مراجعه كرده و از ايميلي كه ما به شما فرستاديم عضويت خود را تكميل كنيد.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'شما عضو شديد اما عضويت شما بايد توسط مدير تاييد شود.',
	'ACTIVATION_EMAIL_SENT'			=> 'ايميل فعال سازي به ايميل شما ارسال شد.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'e-mail فعال سازی به نشانی  e-mail بنیان گذار ارسال شد.',
	'ADD'							=> 'افزودن',
	'ADD_BCC'						=> 'افزودن [BCC]',
	'ADD_FOES'						=> 'افزودن دشمنان جديد',
	'ADD_FOES_EXPLAIN'				=> 'درصورتي که مي خواهيد چندين نام کاربري وارد کنيد ، هر کدام را بصورت جداگانه در يک خط بنويسيد.',
	'ADD_FOLDER'					=> 'افزودن پوشه',
	'ADD_FRIENDS'					=> 'افزودن دوستان جديد',
	'ADD_FRIENDS_EXPLAIN'			=> 'درصورتي که مي خواهيد چندين نام کاربري وارد کنيد ، هر کدام را بصورت جداگانه در يک خط بنويسيد.',
	'ADD_NEW_RULE'					=> 'افزودن قانون جديد',
	'ADD_RULE'						=> 'افزودن قانون',
	'ADD_TO'						=> 'افزودن [به]',
	'ADMIN_EMAIL'					=> 'مديران اخبار را به من ايميل کنند',
	'AGREE'							=> 'من اين شرايط را قبول دارم',
	'ALLOW_PM'						=> 'کاربران اجازه ارسال پيغام هاي خصوصي به من را داشته باشند',
	'ALLOW_PM_EXPLAIN'				=> 'مديران انجمن و مديران سايت هميشه توانايي ارسال پيغام براي شما را دارند.',
	'ALREADY_ACTIVATED'				=> 'حساب شما پيش از اين فعال شده بود.',
	'ATTACHMENTS_EXPLAIN'			=> 'اين محل ليست پيوست هايي را نشان مي دهد که شما در پست ها ضميمه کرده ايد.',
	'ATTACHMENTS_DELETED'			=> 'پيوست ها با موفقيت حذف شدند.',
	'ATTACHMENT_DELETED'			=> 'پيوست با موفقيت حذف شد.',
	'AVATAR_CATEGORY'				=> 'دسته',
	'AVATAR_EXPLAIN'				=> 'حد اکثر اندازه ها; عرض: %1$d پيکسل, طول: %2$d پيکسل, حجم فايل: %3$dکيلوبايت.',
	'AVATAR_FEATURES_DISABLED'		=> 'تابع آواتار در حال حاضر غيرفعال است.',
	'AVATAR_GALLERY'				=> 'گالري مکاني',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Could not upload avatar to %s.',
	'AVATAR_PAGE'					=> 'صفحه',

	'BACK_TO_DRAFTS'			=> 'بازگشت به پيش نويس هاي ذخيره شده',
	'BACK_TO_LOGIN'				=> 'بازگشت به صفحه ورود',
	'BIRTHDAY'					=> 'تاريخ تولد',
	'BIRTHDAY_EXPLAIN'			=> 'لطفا روز ، ماه و سال تولد خود را انتخاب کنيد.',
	'BOARD_DATE_FORMAT'			=> 'فرمت تاريخ ها',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'براي اطلاعات بيشتر از توابع تاريخ <a href="http://www.php.net/date">date()</a> را مشاهده فرمایید.',
	'BOARD_DST'					=> 'تاثير روشنايي روز (يك ساعت جلو و عقب كشيدن ساعت در طول سال)',
	'BOARD_LANGUAGE'			=> 'زبان',
	'BOARD_STYLE'				=> 'قالب انجمن',
	'BOARD_TIMEZONE'			=> 'موقعيت زماني',
	'BOOKMARKS'					=> 'نشانه گذاري',
	'BOOKMARKS_EXPLAIN'			=> 'شما مي توانيد مباحث را به کتاب نشانه گذاري براي مراجعه بعدي اضافه کنيد.',
	'BOOKMARKS_DISABLED'		=> 'کتاب نشانه گذاري اين انجمن غيرفعال است.',
	'BOOKMARKS_REMOVED'			=> 'نشانه گذاري شده ها با موفقيت حذف شدند.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'شما نمي توانيد پيغام را ويرايش يا حذف کنيد.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'شما نمی توانید پیام ها را به پوشه ای که قصد حذفش را دارید ارسال نمایید.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'پيام ها از صندوق در حال ارسال جابجا نمي شوند',
	'CANNOT_RENAME_FOLDER'		=> 'اين پوشه تغيير نام داده نمي شود.',
	'CANNOT_REMOVE_FOLDER'		=> 'اين پوشه حذف نمي شود.',
	'CHANGE_DEFAULT_GROUP'		=> 'ويرايش گروه پيشفرض',
	'CHANGE_PASSWORD'			=> 'ويرايش کلمه عبور',
	'CLICK_RETURN_FOLDER'		=> '%1$sبازگشت به “%3$s” پوشه%2$s',
	'CONFIRMATION'				=> 'تاييديه عضويت',
	'CONFIRM_CHANGES'			=> 'تاييد تغييرات',	
	'CONFIRM_EMAIL'				=> 'تاييد آدرس ايميل',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'براي قرار دادن ايميل جديد بايد اين را تعيين کنيد.',
	'CONFIRM_EXPLAIN'			=> 'عبارت زير را با رعايت كوچكي و بزرگي حروف وارد نماييد <br/> %sاگر مشكل بيناي داريد ، اينجا كليك كنيد (!)%s.',
	'CONFIRM_PASSWORD'			=> 'تاييد کلمه عبور',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'اگر می خواهید پسوردتان را عوض کنید باید آن را در این قسمت تکرار کنید',
	'COPPA_BIRTHDAY'			=> 'براي ادامه ثبت نام ، لطفا تعيين كنيد كي متولد شده ايد ؟',
	'COPPA_COMPLIANCE'			=> 'حمایت از کودکان',
	'COPPA_EXPLAIN'				=> 'لطفا توجه نمایید با کلیک روی گزینه ارسال شما ثبت نام خواهید شد اما تا زمانی که والدین یا قیم قانونی شما فرم مربوطه را که یک نسخه از آن به نشانی e-mail شما ارسال می گردد تکمیل نکند نمی توانید از حساب کاربری خود استفاده نمایید.',
	'CREATE_FOLDER'				=> 'افزودن پوشه…',
	'CURRENT_IMAGE'				=> 'تصوير کنوني',
	'CURRENT_PASSWORD'			=> 'کلمه عبور کنوني',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'شما بايد کلمه عبور کنوني خود را وارد کنيد تا کلمه عبور جديد شما تاييد گردد.',
	'CUR_PASSWORD_ERROR'		=> 'کلمه عبور کنوني وارد شده اشتباه مي باشد.',
	'CUSTOM_DATEFORMAT'			=> 'سفارشی ...',

	'DEFAULT_ACTION'			=> 'حالت پيشفرض',
	'DEFAULT_ACTION_EXPLAIN'	=> '',
	'DEFAULT_ADD_SIG'			=> 'امضاي من را بصورت پيشفرض ضميمه کن',
	'DEFAULT_BBCODE'			=> 'فعال بودن BBCode بصورت پيشفرض',
	'DEFAULT_NOTIFY'			=> 'بمحض ارسال پاسخ مرا بصورت پيشفرض باخبر کن',
	'DEFAULT_SMILIES'			=> 'فعال بودن شکلک ها بصورت پيشفرض',
	'DEFINED_RULES'				=> 'قوانين تابع',
	'DELETED_TOPIC'				=> 'مبحث حذف گرديد.',
	'DELETE_ATTACHMENT'			=> 'حذف پيوست',
	'DELETE_ATTACHMENTS'		=> 'حذف پيوست ها',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'آيا شما مطمئنيد که مي خواهيد اين پيوست را حذف کنيد?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'آيا از حذف پيوست ها اطمينان داريد?',
	'DELETE_AVATAR'				=> 'حذف تصوير',
	'DELETE_COOKIES_CONFIRM'	=> 'آيا مطمئنيد همه كوكي ها پاك شوند ؟ اين كار باعث خروج شما از انجمن مي شود و بايد دوباره وارد شويد.',
	'DELETE_MARKED_PM'			=> 'حذف پيغام هاي نشانه گذاري شده',
	'DELETE_MARKED_PM_CONFIRM'	=> 'آيا از حذف پيغام هاي نشانه گذاري شده اطمينان داريد?',
	'DELETE_OLDEST_MESSAGES'	=> 'حذف پيغام هاي قديمي',
	'DELETE_MESSAGE'			=> 'حذف پيغام',
	'DELETE_MESSAGE_CONFIRM'	=> 'آيا از حذف اين پيغام خصوصي اطمينان داريد?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'تمام پیام های پوشه حذف شده را پاک کنید.',
	'DELETE_RULE'				=> 'حذف قانون',
	'DELETE_RULE_CONFIRM'		=> 'آيا از حذف اين قانون اطمينان داريد?',
	'DEMOTE_SELECTED'			=> 'تنزل دادن گزینه انتخاب شده',
	'DISABLE_CENSORS'			=> 'فعال بودن سانسور کلمات',
	'DISPLAY_GALLERY'			=> 'نمايش گالري',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'ايميل وارد شده صحيح نمي باشد.',
	'DOWNLOADS'					=> 'دريافت ها',
	'DRAFTS_DELETED'			=> 'کل پيش نويس هاي انتخاب شده با موفقيت حذف شدند.',
	'DRAFTS_EXPLAIN'			=> 'شما مي توانيد پيش نويس هاي خود را مشاهده ، حذف ، ويرايش يا ذخيره کنيد.',
	'DRAFT_UPDATED'				=> 'پيش نويس با موفقيت به روز شد.',

	'EDIT_DRAFT_EXPLAIN'		=> 'اینجا می توانید پیش نویس هایی ه شامل پیوست (ضمیمه) یا نظرسنجی نباشند را ویرایش کنید.',
	'EMAIL_BANNED_EMAIL'		=> 'نشانی e-mail وارد شده توسط شما برای استفاده مجاز نیست.',
	'EMAIL_INVALID_EMAIL'		=> 'آدرس ايميل وارد شده اشتباه مي باشد.',
	'EMAIL_REMIND'				=> 'باید همان نشانی e-mail ای باشد که در زمان ثبت نام استفاده کردید.',
	'EMAIL_TAKEN_EMAIL'			=> 'آدرس ايميل وارد شده پيش از اين بکار گرفته شده بود.',
	'EMPTY_DRAFT'				=> 'براي ثبت تغييرات خود بايد يک پيغام وارد کنيد.',
	'EMPTY_DRAFT_TITLE'			=> 'شما بايد يک عنوان طرح کنيد.',
	'EXPORT_AS_XML'				=> 'خارج کردن بصورت XML',
	'EXPORT_AS_CSV'				=> 'خارج کردن بصورت CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'خارج کردن بصورت CSV (اکسل)',
	'EXPORT_AS_TXT'				=> 'خارج کردن بصورت TXT',
	'EXPORT_AS_MSG'				=> 'خارج کردن بصورت MSG',
	'EXPORT_FOLDER'				=> 'خارج کردن',

	'FIELD_REQUIRED'					=> 'The field “%s” must be completed.',
	'FIELD_TOO_SHORT'					=> 'The field “%1$s” is too short, a minimum of %2$d characters is required.',
	'FIELD_TOO_LONG'					=> 'The field “%1$s” is too long, a maximum of %2$d characters is allowed.',
	'FIELD_TOO_SMALL'					=> 'The value of “%1$s” is too small, a minimum value of %2$d is required.',
	'FIELD_TOO_LARGE'					=> 'The value of “%1$s” is too large, a maximum value of %2$d is allowed.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'The field “%s” has invalid characters, only numbers are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric characters are allowed.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric, space or -+_[] characters are allowed.',
	'FIELD_INVALID_DATE'				=> 'The field “%s” has an invalid date.',

	'FOE_MESSAGE'				=> 'پيغام از دشمن',
	'FOES_EXPLAIN'				=> 'دشمنان، كاربراني هستند كه به طور پيشفرض ناديده گرفته خواهند شد. پستهاي اين كاربران براي شما قابل مشاهده نخواهد بود ولي اين قاعده در مورد پيامهاي خصوصي جاري نيست. توجه داشته باشيد كه شما نمي توانيد مديرهاي انجمن يا مديران سايت را وارد اين ليست كنيد.',
	'FOES_UPDATED'				=> 'لیست دشمنان با موفقیت به روز شد',
	'FOLDER_ADDED'				=> 'پوشه با موفقيت اضافه شد.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d از %2$d پيغام انبار شده',
	'FOLDER_NAME_EXIST'			=> 'پوشه <strong>%s</strong> قبلا فعال بوده است.',
	'FOLDER_OPTIONS'			=> 'تنظيمات پوشه',
	'FOLDER_RENAMED'			=> 'پوشه با موفقيت تغيير نام پيدا کرد.',
	'FOLDER_REMOVED'			=> 'پوشه با موفقيت حذف شد.',
	'FOLDER_STATUS_MSG'			=> 'شاخه %1$d%% پر است (%2$d از %3$d پيغام انبار شده)',
	'FORWARD_PM'				=> 'فورواد پيغام',
	'FORCE_PASSWORD_EXPLAIN'	=> 'شما باید پسورد (کلمه عبور) خود را تغییر دهید.',
	'FRIEND_MESSAGE'			=> 'پيغام هاي دوستان',
	'FRIENDS'					=> 'دوستان',
	'FRIENDS_EXPLAIN'			=> 'اين قسمت، دسترسي سريع به دوستاني را كه بايد با آنها مكررا در تماس باشيد را مي دهد. اگر قالب پشتيباني كند، پستهاي دوستان شما برايتان هايلايت (مشخص) خواهند شد.',
	'FRIENDS_OFFLINE'			=> 'آفلاين',
	'FRIENDS_ONLINE'			=> 'آنلاين',
	'FRIENDS_UPDATED'			=> 'ليست دوستان شما با موفقيت به روز شد.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'The action to take when a folder is full has been changed successfully.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- پيغام اصلي --------',
	'FWD_SUBJECT'				=> 'موضوع: %s',
	'FWD_DATE'					=> 'تاريخ: %s',
	'FWD_FROM'					=> 'از: %s',
	'FWD_TO'					=> 'به: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'اطلاعيه هاي کلي',

	'HIDE_ONLINE'				=> 'آنلاين بودن مرا نشان نده(مخفي)',
	'HIDE_ONLINE_EXPLAIN'		=> '',
	'HOLD_NEW_MESSAGES'			=> 'پيغام هاي جديد قبول نشوند (پيغام هاي جديد زماني که فضاي کافي آماده شد باز مي گردند)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'New messages will be held back',

	'IF_FOLDER_FULL'			=> 'اگر پوشه پر شد',
	'IMPORTANT_NEWS'			=> 'اعلان های مهم',
	'INVALID_USER_BIRTHDAY'			=> 'تاريخ تولد وارد شده صحيح نيست.',
	'INVALID_CHARS_USERNAME'	=> 'The username contains forbidden characters.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'The password does not contain the required characters.',
	'ITEMS_REQUIRED'			=> 'The items marked with * are required profile fields and need to be filled out.',

	'JOIN_SELECTED'				=> 'Join selected',

	'LANGUAGE'					=> 'زبان',
	'LINK_REMOTE_AVATAR'		=> 'لينك از نشاني ديگر',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'در صورتي که دوست داريد آواتار خود را تغيير دهيد مي توانيد لينک نماد خود را از سايتي ديگر بدهيد.',
	'LINK_REMOTE_SIZE'			=> 'اندازه آواتار',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'تعيين کردن طول و عرض آواتار . در صورتي که فيلدها را رها کنيد اتوماتيک تعيين خواهد شد.',
	'LOGIN_EXPLAIN_UCP'			=> 'براي دسترسي به کنترل پنل کاربري بايد وارد سايت شويد.',
	'LOGIN_REDIRECT'			=> 'شما با موفقيت وارد شديد.',
	'LOGOUT_FAILED'				=> 'You were not logged out, as the request did not match your session. Please contact the board administrator if you continue to experience problems.',
	'LOGOUT_REDIRECT'			=> 'شما با موفقيت خارج شديد.',

	'MARK_IMPORTANT'				=> 'نشانه گذاري / لغو نشانه گذارس بعنوان مهم',
	'MARKED_MESSAGE'				=> 'پيغام علامت گذاري شده',
	'MAX_FOLDER_REACHED'			=> 'Maximum number of allowed user defined folders reached.',
	'MESSAGE_BY_AUTHOR'				=> 'توسط',
	'MESSAGE_COLOURS'				=> 'رنگهاي پيغام ها',
	'MESSAGE_DELETED'				=> 'پيغام با موفقيت حذف شد.',
	'MESSAGE_HISTORY'				=> 'تاريخچه پيغام',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'این پیام قبل از اینکه به مقصد برسد، توسط نویسنده اش حذف شده است.',
	'MESSAGE_SENT_ON'				=> 'در',
	'MESSAGE_STORED'				=> 'اين پيغام با موفقيت ارسال شد.',
	'MESSAGE_TO'					=> 'به',
	'MESSAGES_DELETED'				=> 'پيغام ها با موفقيت حذف شدند',
	'MOVE_DELETED_MESSAGES_TO'		=> 'انتقال پيغام ها از پوشه حذف شده به',
	'MOVE_DOWN'						=> 'برو پايين',
	'MOVE_MARKED_TO_FOLDER'			=> 'انتقال نشانه گذاري شده ها به %s',
	'MOVE_PM_ERROR'					=> 'An error occurred while moving the messages to the new folder, only %1d from %2d messages were moved.',
	'MOVE_TO_FOLDER'				=> 'انتقال به پوشه',
	'MOVE_UP'						=> 'برو بالا',

	'NEW_EMAIL_ERROR'				=> 'ايميل هاي وارد شده جفت نمي باشند.',
	'NEW_FOLDER_NAME'				=> 'نام پوشه جديد',
	'NEW_PASSWORD'					=> 'کلمه عبور جديد',
	'NEW_PASSWORD_ERROR'			=> 'کلمه هاي عبور وارد شده هماهنگ نيستند.',
	'NOTIFY_METHOD'					=> 'شيوه اطلاع رساني',
	'NOTIFY_METHOD_BOTH'			=> 'هر دو',
	'NOTIFY_METHOD_EMAIL'			=> 'فقط ايميل',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Method for sending messages sent via this board.',
	'NOTIFY_METHOD_IM'				=> 'Jabber only',
	'NOTIFY_ON_PM'					=> 'در صورت دريافت پيغام خصوصي جديد مراباخبر کن',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'You cannot add the anonymous user to your friends list.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'You cannot add users to your friends list who are on your foes list.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'شما نمي توانيد خود را در ليست دوستان قرار دهيد.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'شما نمي توانيد مديران سايت و مديران انجمن را در ليست دشمنان قرار دهيد.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'نمي توانيد کاربر بي نامي را در ليست دشمنان قرار دهيد.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'شما نمي توانيد کاربران را در ليست دشمنان قرار دهيد زيرا در ليست دوستان هم موجود هستند.',
	'NOT_ADDED_FOES_SELF'			=> 'شما نمي توانيد خود را در ليست دشمنان قرار دهيد.',
	'NOT_AGREE'						=> 'من اين شرايط را قبول ندارم',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'صندوق “%s” پرشده و درخواست شما انجام نشد.',
	'NOT_MOVED_MESSAGE'				=> 'صندوق دریافت شما پرشده و 1 پیام هنوز به دست شما نرسیده.',
	'NOT_MOVED_MESSAGES'			=> 'صندوق دریافت شما پرشده و %d پیام هنوز به دست شما نرسیده.',
	'NO_ACTION_MODE'				=> 'هیچ دستوری برای پیام تعیین نشده',
	'NO_AUTHOR'						=> 'هيچ نويسنده اي براي اين پيغام تعيين نشده است',
	'NO_AVATAR_CATEGORY'			=> 'هيچ',

	'NO_AUTH_DELETE_MESSAGE'		=> 'شما اجازه حذف پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'شما اجازه ويرايش پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'شما اجازه فورواد کردن پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'شما اجازه ارسال پيغام هاي خصوصي به گروه ها را نداريد.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'شما اجازه درخواست پس.ورد جديد نداريد.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'شما اجازه خواندن پيام هاي خصوصي منتظر نگاه داشته شده (پشت خطي) را نداريد.',
	'NO_AUTH_READ_MESSAGE'			=> 'شما اجازه خواندن پيام خصوصي را نداريد.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'پيام مورد نظر قبل از رسيدن به دست شما توسط ارسال كننده حذف شده.',
	'NO_AUTH_SEND_MESSAGE'			=> 'شما اجازه ارسال پيام خصوصي را نداريد.',
	'NO_AUTH_SIGNATURE'				=> 'شما اجازه تعيين امضا را نداريد.',

	'NO_BCC_RECIPIENT'			=> 'هيچ',
	'NO_BOOKMARKS'				=> 'شما هيچ چيز را نشانه گذاري نکرده ايد.',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks.',
	'NO_EDIT_READ_MESSAGE'		=> 'پيغام خصوصي ويرايش نمي شود زيرا در حال حاضر مطالعه مي شود.',
	'NO_EMAIL_USER'				=> 'اطلاعات ايميل و نام کاربري کاربر پيدا نشد.',
	'NO_FOES'					=> 'هيچ دشمني تعريف نشده است.',
	'NO_FRIENDS'				=> 'هيچ دوستي تعريف نشده است.',
	'NO_FRIENDS_OFFLINE'		=> 'هيچ دوستي آفلاين نمي باشد.',
	'NO_FRIENDS_ONLINE'			=> 'هيچ دوستي آنلاين نمي باشد.',
	'NO_GROUP_SELECTED'			=> 'بدون گروه تعريف شده.',
	'NO_IMPORTANT_NEWS'			=> 'هيچ اعلان مهمي حاضر نمي باشد..',
	'NO_MESSAGE'				=> 'پيغام خصوصي پيدا نشد.',
	'NO_NEW_FOLDER_NAME'		=> 'نام پوشه جديد را تعيين کنيد.',
	'NO_NEWER_PM'				=> 'هيچ پيغام جديدي موجود نمي باشد.',
	'NO_OLDER_PM'				=> 'هيچ پيغام قديمي موجود نمي باشد.',
	'NO_PASSWORD_SUPPLIED'		=> 'شما نمي توانيد بدون کلمه عبور وارد شويد.',
	'NO_RECIPIENT'				=> 'هيچ گيرنده اي تعريف نشده است.',
	'NO_RULES_DEFINED'			=> 'قوانيني تعريف نشده است.',
	'NO_SAVED_DRAFTS'			=> 'هيچ پيش نويسي موجود نمي باشد.',
	'NO_TO_RECIPIENT'			=> 'هيچ',
	'NO_WATCHED_FORUMS'			=> 'شما هيچ انجمني براي نظارت نداريد.',
	'NO_WATCHED_SELECTED'		=> 'You have not selected any subscribed topics or forums.',
	'NO_WATCHED_TOPICS'			=> 'شما هيچ مبحثي براي نظارت نداريد.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case and must contain numbers.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'باید بین %1$d تا %2$d کاراکتر باشد',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long and must contain letters in mixed case.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case, must contain numbers and must contain symbols.',
	'PASSWORD'					=> 'کلمه عبور',
	'PASSWORD_ACTIVATED'		=> 'کلمه عبور جديد شما فعال شد.',
	'PASSWORD_UPDATED'			=> 'کلمه عبور جدید با موفقيت به آدرس ايميلی که با آن ثبت نام کرده بودید ارسال شد.',
	'PERMISSIONS_RESTORED'		=> 'سطح دسترسی اصلی، با موفقیت بازگردانده شد',
	'PERMISSIONS_TRANSFERRED'	=> 'Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the board with this user’s permissions.<br />Please note that admin permissions were not transferred. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'پيغام هاي خصوصي در اين انجمن غير فعال هستند.',
	'PM_FROM'					=> 'From',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'آيكن پيغام',
	'PM_INBOX'					=> 'صندوق دريافت',
	'PM_NO_USERS'				=> 'كاربراني كه درخواست كرديد وجود ندارند !',
	'PM_OUTBOX'					=> 'پيام هاي در حال ارسال',
	'PM_SENTBOX'				=> 'پيغام هاي ارسال شده',
	'PM_SUBJECT'				=> 'عنوان پيغام',
	'PM_TO'						=> 'ارسال به',
	'PM_USERS_REMOVED_NO_PM'	=> 'Some users couldn’t be added as they have disabled private message receipt.',
	'POPUP_ON_PM'				=> 'نمايش پنجره Pop up بهنگام دريافت پيغام خصوصي جديد',
	'POST_EDIT_PM'				=> 'ويرايش پيغام',
	'POST_FORWARD_PM'			=> 'فوروارد پيغام',
	'POST_NEW_PM'				=> 'ارسال پيغام',
	'POST_PM_LOCKED'			=> 'Private messaging is locked.',
	'POST_PM_POST'				=> 'نقل قول پست',
	'POST_QUOTE_PM'				=> 'نقل قول پيغام',
	'POST_REPLY_PM'				=> 'پاسخ به پيغام',
	'PRINT_PM'					=> 'نمايش نسخه چاپي',
	'PREFERENCES_UPDATED'		=> 'مشخصات شما به روز شد.',
	'PROFILE_INFO_NOTICE'		=> 'شما مي توانيد مشخصات خود را وارد کرده تا ديگران آنها را مشاهده کنند. لطفا زماني که اطلاعات شخصي خود را وارد مي کنيد دقت کنيد. لطفا تمام فيلدهايي که داراي * مي باشند را تکميل کنيد.',
	'PROFILE_UPDATED'			=> 'مشخصات شما به روز شد.',

	'RECIPIENT'							=> 'گیرنده',
	'RECIPIENTS'						=> 'گیرندگان',
	'REGISTRATION'						=> 'عضويت',
	'RELEASE_MESSAGES'					=> '%sپس از باز کردن فضای لازم برای پیام ها اینجا کلیک کنید.%s',
	'REMOVE_ADDRESS'					=> 'Remove address',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Remove selected bookmarks',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Are you sure you want to delete all selected bookmarks?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Remove marked bookmarks',
	'REMOVE_FOLDER'						=> 'حذف پوشه',
	'REMOVE_FOLDER_CONFIRM'				=> 'آيا شما از حذف پوشه اطمينان داريد؟',
	'RENAME'							=> 'تغييرنام',
	'RENAME_FOLDER'						=> 'تغيير نام پوشه',
	'REPLIED_MESSAGE'					=> 'پاسخ داده شده به پيغام',
	'RESIGN_SELECTED'					=> 'Resign selected',
	'RETURN_FOLDER'						=> '%1$sبازگشت به شاخه قبلي%2$s',
	'RETURN_UCP'						=> '%sبازگشت به کنترل پنل کاربري%s',
	'RULE_ADDED'						=> 'قانون با موفقيت اضافه شد.',
	'RULE_ALREADY_DEFINED'				=> 'This rule was defined previously.',
	'RULE_DELETED'						=> 'قانون با موفقيت حذف شد.',
	'RULE_NOT_DEFINED'					=> 'Rule not correctly specified.',
	'RULE_REMOVED_MESSAGE'				=> 'One private message had been removed due to private message filters.',
	'RULE_REMOVED_MESSAGES'				=> '%d private messages were removed due to private message filters.',

	'SAME_PASSWORD_ERROR'		=> 'The new password you entered is the same as your current password.',
	'SEARCH_YOUR_POSTS'			=> 'نمايش پست هاي شما',
	'SEND_PASSWORD'				=> 'ارسال کلمه عبور',
	'SENT_AT'					=> 'زمان ارسال',
	'SHOW_EMAIL'				=> 'کاربران از طريق ايميل با من ارتباط برقرار کنند',
	'SIGNATURE_EXPLAIN'			=> 'در اين  قسمت هر چيزي که قرار دهيد بهمراه مطالب شما نمايش داده مي شود.حد اکثر کاراکتر براي امضا %d مي باشد.',
	'SIGNATURE_PREVIEW'			=> 'امضای شما بصورت زیر نمایش داده خواهد شد',
	'SIGNATURE_TOO_LONG'		=> 'امضا طولاني مي باشد.',
	'SORT'						=> 'مرتب کردن',
	'SORT_COMMENT'				=> 'تفسير فايل',
	'SORT_DOWNLOADS'			=> 'دانلود ها',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'نام فايل',
	'SORT_POST_TIME'			=> 'زمان ارسال',
	'SORT_SIZE'					=> 'حجم فايل',

	'TIMEZONE'					=> 'موقعيت زماني',
	'TO'						=> 'به',
	'TOO_MANY_RECIPIENTS'		=> 'شما تلاش كرديد پيام خصوصي را به تعداد زيادي گيرنده ارسال نماييد.',
	'TOO_MANY_REGISTERS'		=> 'شما بیش از حد مجاز برای ثبت نام تلاش کردید. به دلیل مسائل امنیتی فعلا نمی توانید ثبت نام کنید. لطفا بعدا دوباره تلاش کنید.',

	'UCP'						=> 'کنترل پنل کاربري',
	'UCP_ACTIVATE'				=> 'فعال كردن نام كاربري شما',
	'UCP_ADMIN_ACTIVATE'		=> 'براي ثبت نام بايد ايميل واقعي و درست وارد كنيد.',
	'UCP_AIM'					=> 'پیام رسان AOL',
	'UCP_ATTACHMENTS'			=> 'پيوست ها',
	'UCP_COPPA_BEFORE'			=> '  قبل از %s',
	'UCP_COPPA_ON_AFTER'		=> '   در يا بعد از %s',
	'UCP_EMAIL_ACTIVATE'		=> 'شما باید نشانی e-mail صحیحی وارد نمایید چرا که پس از ثبت نام یک e-mail حاوی اطلاعات لازم برای فعال کردن حساب کاربری شما به همین e-mail که وارد می کنید ارسال می شود و شما باید توسط آن حسابتان را فعال کنید.در غیر اینصورت ثبت نام شما انجام نخواهد شد.',
	'UCP_ICQ'					=> 'شماره ICQ',
	'UCP_JABBER'				=> 'نشانی Jabber',

	'UCP_MAIN'					=> 'چشم انداز اصلي',
	'UCP_MAIN_ATTACHMENTS'		=> 'مديريت پيوست ها',
	'UCP_MAIN_BOOKMARKS'		=> 'مديريت کتاب نشانه گذازي ها',
	'UCP_MAIN_DRAFTS'			=> 'مديريت پيش نويس ها',
	'UCP_MAIN_FRONT'			=> 'صفحه اول',
	'UCP_MAIN_SUBSCRIBED'		=> 'مديريت اشتراک ها',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'شما هيچ فايلي ارسال نکرده ايد.',

	'UCP_PREFS'					=> 'پيکربندي انجمن',
	'UCP_PREFS_PERSONAL'		=> 'ويرايش تنظيمات مهم',
	'UCP_PREFS_POST'			=> 'ويرايش پيشفرض هاي ارسال پست',
	'UCP_PREFS_VIEW'			=> 'ويرايش تنظيمات جلوه هاي ظاهري',
	
	'UCP_PM'					=> 'پيغام هاي خصوصي',
	'UCP_PM_COMPOSE'			=> 'ارسال پيغام',
	'UCP_PM_DRAFTS'				=> 'مديريت پيغام هاي طرح شده',
	'UCP_PM_OPTIONS'			=> 'قوانين, شاخه ها و تنظيمات',
	'UCP_PM_POPUP'				=> 'پيغام هاي خصوصي',
	'UCP_PM_POPUP_TITLE'		=> 'popup پيغام هاي خصوصي',
	'UCP_PM_UNREAD'				=> 'پيغام هاي خوانده نشده',
	'UCP_PM_VIEW'				=> 'نمايش پيغام هاي',

	'UCP_PROFILE'				=> 'مشخصات',
	'UCP_PROFILE_AVATAR'		=> 'ويرايش آواتار',
	'UCP_PROFILE_PROFILE_INFO'	=> 'ويرايش مشخصات',
	'UCP_PROFILE_REG_DETAILS'	=> 'ويرايش تنظيمات اکانت',
	'UCP_PROFILE_SIGNATURE'		=> 'ويرايش امضا',

	'UCP_USERGROUPS'			=> 'گروه هاي کاربري',
	'UCP_USERGROUPS_MEMBER'		=> 'ويرايش گروه کاربري',
	'UCP_USERGROUPS_MANAGE'		=> 'اداره کردن گروه ها',

	'UCP_REGISTER_DISABLE'			=> 'در حاضر حاضر ايجاد حساب جديد امکان پذير نمي باشد.',
	'UCP_REMIND'					=> 'ارسال کلمه عبور',
	'UCP_RESEND'					=> 'ارسال ايميل فعال سازي',
	'UCP_WELCOME'					=> 'به کنترل پنل کاربري خوش آمديد. دراين قسمت شما مي توانيد مشخصات خود را ويرايش پيکربندي را به روز اشتراکها را مديريت ، پيغام هاي خصوصي دريافت و ارسال و ... عمليات هاي ديگري انجام دهيد.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'دوستان و دشمنان',
	'UCP_ZEBRA_FOES'				=> 'مديريت دشمنان',
	'UCP_ZEBRA_FRIENDS'				=> 'مديريت دوستان',
	'UNKNOWN_FOLDER'				=> 'پوشه ناشناخته',
	'UNWATCH_MARKED'				=> 'لغو اشتراک',
	'UPLOAD_AVATAR_FILE'			=> 'آپلود از سيستم شما',
	'UPLOAD_AVATAR_URL'				=> 'آپلود از آدرس وب',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'نشاني عكس را وارد كنيد.سيستم آن را از نشاني به سايت كپي مي كند.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'طول نام کاربری شما باید بین %1$d و %2$d کاراکتر باشد و فقط استفاده از اعداد مجاز است.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'طول نام کاربری شما باید بین %1$d و %2$d کاراکتر باشد و استفاده از اعداد،فاصله یا علائم -+_[] مجاز است.',
	'USERNAME_ASCII_EXPLAIN'		=> 'طول نام کاربری شما باید بین %1$d و %2$d کاراکتر باشد و فقط اجازه استفاده از کاراکتر های اسکی (ASCII) را دارید و نه نمادهای خاص.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'طول نام کاربری شما باید بین %1$d و %2$d کاراکتر باشد و استفاده از حروف، اعداد و کاراکترهای خاص مجاز است.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'طول نام کاربری بین %1$d و %2$d باید باشد و استفاده از حروف، اعداد فاصله و -+_[] مجاز است.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'بايد بين %1$d تا %2$d كاراكتر باشد',
	'USERNAME_TAKEN_USERNAME'		=> 'نام کاربری مورد نظر شما قبلا انتخاب شده. لطفا نام دیگری انتخاب نمایید.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'استفاده از نام کاربری مورد نظر شما مجاز نیست یاحاوی کلمات غیر مجاز است.لطفا نام کاربری دیگری انتخاب نمایید. ',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'نام کاربری تعیین شده یافت نشد یا جزو حساب های کاربری فعال شده نیست.',

	'VIEW_AVATARS'				=> 'نمايش آواتارها',
	'VIEW_EDIT'					=> 'نمايش / ويرايش',
	'VIEW_FLASH'				=> 'نمايش انيميشن هاي فلش',
	'VIEW_IMAGES'				=> 'نمايش تصاوير در بين پستها',
	'VIEW_NEXT_HISTORY'			=> 'PM بعدی در تاریخچه',
	'VIEW_NEXT_PM'				=> 'پيغام بعدي',
	'VIEW_PM'					=> 'نمايش پيغام',
	'VIEW_PM_INFO'				=> 'اطلاعات پيغام',
	'VIEW_PM_MESSAGE'			=> '1 پيغام',
	'VIEW_PM_MESSAGES'			=> '%d پيغام ها',
	'VIEW_PREVIOUS_HISTORY'		=> 'PM قبلی در تاریخچه',
	'VIEW_PREVIOUS_PM'			=> 'پيغام قبلي',
	'VIEW_SIGS'					=> 'نمايش امضا',
	'VIEW_SMILIES'				=> 'نمايش شکلکهاي مانند تصاوير',
	'VIEW_TOPICS_DAYS'			=> 'نمايش مباحث روزهاي قبلي',
	'VIEW_TOPICS_DIR'			=> 'نحوه هدايت قرارگيري مباحث',
	'VIEW_TOPICS_KEY'			=> 'نمايش مبحث ها طبق',
	'VIEW_POSTS_DAYS'			=> 'نمايش پست هاي روزهاي قبلي',
	'VIEW_POSTS_DIR'			=> 'نحوه هدايت پست ها',
	'VIEW_POSTS_KEY'			=> 'نمايش پست ها طبق',

	'WATCHED_EXPLAIN'			=> 'در زير ليست انجمن ها و مبحث هايي نمايش داده مي شود که شما در آنها مشترک شده ايد. در صورت اشتراک در هر انجمن يا مبحث، شما از پست هاي جديد آن انجمن يا مبحث با خبر خواهيد شد. براي لغو اشتراک در انجمن يا مبحث مي توانيد آنرا تيک زده و تکمه <em>لغو اشتراک</em> را کليک کنيد.',
	'WATCHED_FORUMS'			=> 'انجمن هاي نظارتي',
	'WATCHED_TOPICS'			=> 'مبحث هاي نظارتي',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database.',

	'YOUR_DETAILS'				=> 'شما فعال شديد',
	'YOUR_FOES'					=> 'دشمنان شما',
	'YOUR_FOES_EXPLAIN'			=> 'براي حذف نام هاي کاربري روي آنها کليک کرده سپس برروي ارسال کليک کنيد.',
	'YOUR_FRIENDS'				=> 'دوستان شما',
	'YOUR_FRIENDS_EXPLAIN'		=> 'براي حذف نام هاي کاربري آنها را انخاب کرده و روي <b>ارسال</b> کليک کنيد.',
	'YOUR_WARNINGS'				=> 'سطح اخطار شما',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'قرار دادن در پوشه',
		'MARK_AS_READ'		=> 'نشانه گذاري بعنوان خوانده شده',
		'MARK_AS_IMPORTANT'	=> 'نشانه گذاري پيغام',
		'DELETE_MESSAGE'	=> 'حذف پيغام'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'عنوان',
		'SENDER'	=> 'فرستنده',
		'MESSAGE'	=> 'پيغام',
		'STATUS'	=> 'وضعيت پيغام',
		'TO'		=> 'ارسال به'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'شبیه',
		'IS_NOT_LIKE'	=> 'شبیه این نباشد',
		'IS'			=> 'هست',
		'IS_NOT'		=> 'نیست',
		'BEGINS_WITH'	=> 'شروع شود با',
		'ENDS_WITH'		=> 'تمام شود با',
		'IS_FRIEND'		=> 'دوست است',
		'IS_FOE'		=> 'دشمن است',
		'IS_USER'		=> 'کاربر است',
		'IS_GROUP'		=> 'در گروه کاربری است',
		'ANSWERED'		=> 'پاسخ داده شده',
		'FORWARDED'		=> 'فوروارد شده',
		'TO_GROUP'		=> 'به گروه پیش فرض من',
		'TO_ME'			=> 'به من'
	),


	'GROUPS_EXPLAIN'	=> 'گروه هاي کاربري در اين انجمن فعال است تا مديران بتوانند بهتر کاربران را دسته بندي و اداره کنند. بصورت پيشفرض شما در گروه تعيين شده اي هستيد, و آن گروه پيشفرض شماست. اين گروه ها حد واندازه هاي يک کاربر را مشخص و کاربران را از هم جدا مي کند,. شما غير از اين گروه مي توانيد به گروه هاي فعال ديگر بپيونديد.توجه کنيد که سطح دسترسي گروه ها با هم متفاوت است.',
	'GROUP_LEADER'		=> 'رهبري',
	'GROUP_MEMBER'		=> 'کاربري',
	'GROUP_PENDING'		=> 'اعضاي معلق',
	'GROUP_NONMEMBER'	=> 'غير عضو ها',
	'GROUP_DETAILS'		=> 'جزئيات گروه',

	'NO_LEADER'		=> 'هيچ گروه رهبري موجود نيست',
	'NO_MEMBER'		=> 'هيچ گروه کاربري موجود نيست',
	'NO_PENDING'	=> 'هیچ عضوی در انتظار تایید نیست',
	'NO_NONMEMBER'	=> 'No non-member groups',
		
        //Begin phpBB 3.0.5 Additional by www.Maghsad.com
    'VC_REFRESH'                => 'درخواست کد جدید',
    'VC_REFRESH_EXPLAIN'        => 'اگر کد موجود در تصویر برای شما ناخوانا میباشد روی کلید "درخواست کد جدید" کلیک کنید',
        //END phpBB 3.0.5 Additional by www.Maghsad.com



		
		// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
	'ADD_USERS_UCP_EXPLAIN'			=> 'Here you can add new users to the group. You may select whether this group becomes the new default for the selected users. Please enter each username on a separate line.',


///////////////////////

	'AVATAR_NOT_ALLOWED'			=> 'Your avatar cannot be displayed because avatars have been disallowed.',


/////////////////////////

	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Your current avatar cannot be displayed because its type has been disallowed.',


///////////////////////

	'FOLDER_NAME_EMPTY'			=> 'You must enter a name for this folder.',

///////////////////////

	'NOT_ADDED_FRIENDS_BOTS'		=> 'You cannot add bots to your friends list.',


///////////////////////

	'NOT_ADDED_FOES_BOTS'			=> 'You cannot add bots to your foes list.',

/////////////////////

	'REPLY_TO_ALL'						=> 'Reply to sender and all recipients.',
	'REPORT_PM'							=> 'Report private message',

//////////////////////

		
		
		//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com		
));

?>