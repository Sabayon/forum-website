<?php
/**
*
* posting [Farsi]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'اضافه كردن فايل پيوست',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'در صورتي که تمايل داريد بخش اطلاعات فايل را تکميل کنيد.',
	'ADD_FILE'					=> 'افزودن فايل',
	'ADD_POLL'					=> 'ايجاد نظرسنجي',
	'ADD_POLL_EXPLAIN'			=> 'در صورتي که مي خواهيد در مبحث خود يک نظرسنجي داشته باشيد فيلدها را تکميل کنيد.در صورتي که نمي خواهيد نظر سنجي داشته باشيد فيلدها را رها کنيد.',
	'ALREADY_DELETED'			=> 'Sorry but this message is already deleted.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, the board attachment quota has been reached.',
	'ATTACH_SIG'				=> 'نمايش امضا',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'ضخيم كردن متن : [b]متن[/b]',
	'BBCODE_C_HELP'				=> 'نمايش کد : [code]كد[/code]',
	'BBCODE_E_HELP'				=> 'ليست : افزودن اساس ليست',
	'BBCODE_F_HELP'				=> 'اندازه فونت : [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>غيرفعال است</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>فعال است</em>',
	'BBCODE_I_HELP'				=> 'نوشته کج : [i]متن[/i]',
	'BBCODE_L_HELP'				=> 'ليست : [list]متن[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'بخش ليست : [*]متن[/*]',
	'BBCODE_O_HELP'				=> 'ليست سفارشي : [list=]متن[/list]',
	'BBCODE_P_HELP'				=> 'درج تصوير : [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'نوشته نقل قول : [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'رنگ فونت : [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'				=> 'نوشته زيرخط دار : [u]text[/u]',
	'BBCODE_W_HELP'				=> 'ايجاد URL : [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'فلش : [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'You cannot bump this topic so soon after the last post.',

	'CANNOT_DELETE_REPLIED'		=> 'Sorry but you may only delete posts which have not been replied to.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'اين پست بسته شده است.شما نمي توانيد آنرا ويرايش کنيد.',
	'CANNOT_EDIT_TIME'			=> 'You can no longer edit or delete that post.',
	'CANNOT_POST_ANNOUNCE'		=> 'Sorry but you cannot post announcements.',
	'CANNOT_POST_STICKY'		=> 'Sorry but you cannot post sticky topics.',
	'CHANGE_TOPIC_TO'			=> 'تغییر نوع تاپیک به',
	'CLOSE_TAGS'				=> 'بستن تگ ها',
	'CURRENT_TOPIC'				=> 'Current topic',

	'DELETE_FILE'				=> 'حذف فايل',
	'DELETE_MESSAGE'			=> 'حذف پيغام',
	'DELETE_MESSAGE_CONFIRM'	=> 'آبا مطمئنيد که پيغام را حذف کنيد ؟',
	'DELETE_OWN_POSTS'			=> 'متاسفيم ، شما فقط اجازه حدف پست هاي خود را داريد.',
	'DELETE_POST_CONFIRM'		=> 'آبا مطمئنيد که پيغام را حذف کنيد ؟',
	'DELETE_POST_WARN'			=> 'توجه : پست حذف شده به هیچ وجه قابل بازگردانی نخواهد بود.',
	'DISABLE_BBCODE'			=> 'غيرفعال کردن BBCode',
	'DISABLE_MAGIC_URL'			=> 'آدرس هاي وب را اتوماتيک تجزيه نکن.',
	'DISABLE_SMILIES'			=> 'غيرفعال کردن شکلک ها',
	'DISALLOWED_CONTENT'		=> 'ارسال فايل ميسر نيست چرا که فايل برداري (تصوير وکتور) شما مشکوک به خطر است.',
	'DISALLOWED_EXTENSION'		=> 'The extension %s is not allowed.',
	'DRAFT_LOADED'				=> 'پیش نویس در ادیتور ارسال پست بارگذاری شد، ممکن است شما بخواهید همین الان پستهای خود را به پایان برسانید.<br />پیش نویس شما بعد از ثبت شدن این پست، حذف خواهد شد.',
	'DRAFT_LOADED_PM'			=> 'Draft loaded into message area, you may want to finish your private message now.<br />Your draft will be deleted after submitting this private message.',
	'DRAFT_SAVED'				=> 'پيش نويس با موفقيت ذخيره شد.',
	'DRAFT_TITLE'				=> 'عنوان پيش نويس',

	'EDIT_REASON'				=> 'دلیل ویرایش پست',
	'EMPTY_FILEUPLOAD'			=> 'فایل آپلود شده خالی است.',
	'EMPTY_MESSAGE'				=> 'شما باید در هنگام ارسال پیام خود را وارد کنید.',
	'EMPTY_REMOTE_DATA'			=> 'فايل آپلود نمي شود . لطفا فايل را بصورت دستي آپلود کنيد.',

	'FLASH_IS_OFF'				=> '[flash] <em>غيرفعال است</em>',
	'FLASH_IS_ON'				=> '[flash] <em>فعال است</em>',
	'FLOOD_ERROR'				=> 'لطفا برای ارسال پست جدید کمی صبر کنید..',
	'FONT_COLOR'				=> 'رنگ فونت',
	'FONT_COLOR_HIDE'			=> 'مخفي کردن رنگ فونت',
	'FONT_HUGE'					=> 'خيلي بزرگ',
	'FONT_LARGE'				=> 'بزرگ',
	'FONT_NORMAL'				=> 'عادي',
	'FONT_SIZE'					=> 'اندازه فونت',
	'FONT_SMALL'				=> 'کوچک',
	'FONT_TINY'					=> 'ريز',

	'GENERAL_UPLOAD_ERROR'		=> 'نمي توانيد پيوستي در %s آپلود کنيد.',

	'IMAGES_ARE_OFF'			=> '[img] <em>غيرفعال است</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>فعال است</em>',
	'INVALID_FILENAME'			=> '%s نام صحيحي نمي باشد.',

	'LOAD'						=> 'بارگذاري',
	'LOAD_DRAFT'				=> 'بارگذاري پيش نويس',
	'LOAD_DRAFT_EXPLAIN'		=> 'در این قسمت شما می توانید پیش نویس های خود را انتخاب،ویرایش،ارسال یا ذخیره کنید.',
	'LOGIN_EXPLAIN_BUMP'		=> 'برای bump کردن باید وارد انجمن شوید.',
	'LOGIN_EXPLAIN_DELETE'		=> 'برای حذف پست ها باید ابتدا وارد شوید.',
	'LOGIN_EXPLAIN_POST'		=> 'براي ارسال پست در اين انجمن بايد وارد شويد.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'برای نقل قول کردن باید اول وارد شوید.',
	'LOGIN_EXPLAIN_REPLY'		=> 'برای پاسخ دادن باید ابتدا وارد شوید.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Your images may only be up to %1$d pixels high.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Your images may only be up to %1$d pixels wide.',

	'MESSAGE_BODY_EXPLAIN'		=> 'پيغام خود را ايجا وارد کنيد.توجه داشته باشيد پيغام شما نبايد بيش از<strong>%d</strong> کاراکتر باشد.',
	'MESSAGE_DELETED'			=> 'اين پيغام با موفقيت حذف گرديد..',
	'MORE_SMILIES'				=> 'مشاهده شکلک هاي بيشتر',

	'NOTIFY_REPLY'				=> 'درصورتي که به مبحث پاسخ داده شد مرا باخبر کن !',
	'NOT_UPLOADED'				=> 'فايل آپلود نشد.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options.',
	'NO_PM_ICON'				=> 'بدون آيكن پيغام',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title.',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_POST_MODE'				=> 'No post mode specified.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_SIZE_NA'				=> 'The attachment’s file size is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s file size is too large, the maximum upload size is %1$d %2$s.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Place inline',
	'POLL_DELETE'				=> 'حذف نظرسنجي',
	'POLL_FOR'					=> 'دوام يافتن نظرسنجي براي',
	'POLL_FOR_EXPLAIN'			=> 'در صورت انتخاب 0 نظر سنجي هيچ گاه پايان نمي يابد.',
	'POLL_MAX_OPTIONS'			=> 'انتخاب گزينه براي هر کاربر',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'اين تعداد گزينه هايي است که هر کاربر مي تواند براي شرکت در نظر سنجي انتخاب کند.',
	'POLL_OPTIONS'				=> 'تنظيمات نظرسنجي',
	'POLL_OPTIONS_EXPLAIN'		=> 'مکان هر گزينه نظر سنجي در يک خط و بصورت جاگانه است(براي رفتن به خطبعدي از کليد Enter استفاده کنيد). شما براي نظر سنجي خود مي توانيد <strong>%d</strong> گزينه در نظر بگيريد.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	'POLL_QUESTION'				=> 'سوال نظر سنجي',
	'POLL_TITLE_TOO_LONG'		=> 'The poll title must contain fewer than 100 characters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'			=> 'فعال بودن راي دادن دوباره',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'در صورت انتخاب اين گزينه کاربران مي تواند راي خود را تغيير دهند.',
	'POSTED_ATTACHMENTS'		=> 'پيوست هاي ارسال شده',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'تاييديه پست',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'اين پيغام با موفقيت حذف شد.',
	'POST_EDITED'				=> 'اين پيغام با موفقيت ويرايش شد.',
	'POST_EDITED_MOD'			=> 'This message has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'				=> 'اطلاعيه کلي (درهمه انجمنها)',
	'POST_ICON'					=> 'آيكن پست ',
	'POST_NORMAL'				=> 'عادي',
	'POST_REVIEW'				=> 'بازبيني پست',
	'POST_REVIEW_EXPLAIN'		=> 'زماني كه شما در حال نوشتن اين متن بوديد، پاسخ جديدي به آن داده شده است. ممكن است شما مايل باشيد قبل از ارسال، در پاسختان تجديد نظر كنيد.',
	'POST_STORED'				=> 'اين پيغام با موفقيت ارسال شد.',
	'POST_STORED_MOD'			=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'				=> 'نوع موضوع',
	'PROGRESS_BAR'				=> 'روند پيشرفت',

	'QUOTE_DEPTH_EXCEEDED'		=> 'شما می توانید حداکثر %1$d نقل قول تو در تو استفاده کنید.',

	'SAVE'						=> 'ذخيره',
	'SAVE_DATE'					=> 'ذخيره شده در',
	'SAVE_DRAFT'				=> 'ذخيره بعنوان پيش نويس',
	'SAVE_DRAFT_CONFIRM'		=> 'در صورت ذخيره بعنوان پيش نويس فقط عنوان و متن مطلب ذخيره خواهند شد ، آيا مايليد اين مطلب را بعنوان پيش نويس ذخيره کنيد ؟',
	'SMILIES'					=> 'شکلکها',
	'SMILIES_ARE_OFF'			=> 'شکلک ها <em>غير فعال هستند</em>',
	'SMILIES_ARE_ON'			=> 'شکلک ها <em>فعال هستند</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'زمان به پايان رسيدن مبحث هاي مهم/اطلاعيه',
	'STICK_TOPIC_FOR'			=> 'مهم کردن مبحث براي',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'در صورتي که عدد 0 را برگزينيد مبحث براي هميشه بصورت مهم يا اطلاعیه باقي خواهد ماند.',
	'STYLES_TIP'				=> 'Tip: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'				=> 'تعداد کاراکتر هاي مبحث شما کم است.',
	'TOO_FEW_POLL_OPTIONS'		=> 'شما بايد حداقل دو گزينه براي نظر سنجي خود وارد کنيد.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'			=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_POST'		=> 'Your message contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Your signature contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'				=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'Topic has been bumped successfully.',

	'UNAUTHORISED_BBCODE'		=> 'You cannot use certain BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'برای تغییر این موضوع از اطلاعیه کلی به موضوع عادی، شما نیازمند انتخاب انجمنی هستید که میخواهید این موضوع در آن به نمایش در آید.',
	'UPDATE_COMMENT'			=> 'به روز رساني نظر',
	'URL_INVALID'				=> 'URL تعيين شده صحيح نمي باشد.',
	'URL_NOT_FOUND'				=> 'فايل تعيين شده پيدا نمي شود.',
	'URL_IS_OFF'				=> '[url] <em>غيرفعال است</em>',
	'URL_IS_ON'					=> '[url] <em>فعال است</em>',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum.',
	'USER_CANNOT_DELETE'		=> 'شما نمي توانيد پست ها را در اين انجمن حذف کنيد.',
	'USER_CANNOT_EDIT'			=> 'شما نمي توانيد در اين انجمن پست خود را ويرايش کنيد.',
	'USER_CANNOT_REPLY'			=> 'شما اجازه پاسخ دادن در اين انجمن را نداريد.',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sنمايش پيغام ثبت شده شما%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sنمايش پيغام هاي خصوصي ثبت شده شما%s',

	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1d %2s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',
		
		
		// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
			'POST_REVIEW_EDIT'			=> 'Post review',
         	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
				
		//////////////////////////
		
          	'TOO_FEW_CHARS_LIMIT'		=> 'Your message contains %1$d characters. The minimum number of characters you need to enter is %2$d.',
				
				
		
		
		//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com		
		
		
));

?>