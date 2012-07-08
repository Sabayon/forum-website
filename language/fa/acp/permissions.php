<?php
/**
*
* acp_permissions.php [Farsi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group - www.Maghsad.com
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>سطوح دسترسي به 4 دسته کلي تقسيم مي شوند :</p>

		<h2>سطوح دسترسي سراسري</h2>
		<p>سطوح دسترسي سراسري براي تعريف سطوح دسترسي اجزاي اصلي انجمن (کاربران،گروه ها ، مديران و موسسان) است</p>

		<h2>سطح دسترسي مستقر انجمن</h2>
		<p>سطح دسترسي مستقر انجمن به آن دسته از سطوح اطلاق مي شود که مربوط به هر يا چند انجمن است.يعني سطوح دسترسي خود انجمن و استفاده کنندگان (کاربران،مديران و گروه ها)</p>

		<h2>انواع سطوح دسترسي</h2>
		<p>در اين بخش مي توانيد براي هر نقش (مدير،کاربر و ...) استاندارد هاي سطوح دسترسي را تعيين کنيد.</p>

		<h2>پنهانهاي سطوح دسترسي</h2>
		<p>در اين حالت شما مي توانيد سطوح دسترسي موثر براي کاربران مورد نظر انتخاب نماييد, مديران انجمن (جزئي/کلي) و موسس/ان.</p>
	
		<br />

		<p>براي کسب اطلاعات بيشتر درباره زمينه هاي بالا و و مديريت سطوح دسترسي در phpBB3 به لطفا <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html"><b>فصل 1.5 از راهنماي شروع سريع phpBB 3 مراجعه فرماييد.</b></a>.</p>
	',
	'ACL_NEVER'	=> 'هیچگاه',
	'ACL_SET'	=> 'تنظيمات سطوح دسترسي',
	'ACL_SET_EXPLAIN'	=> 'سطوح دسترسی بر پایه یک سیستم کوچک <samp>بلی</samp>/<samp>خیر</samp> هستند. تعیین یک گزینه با وضعیت <samp>هیچگاه</samp> برای یک کاربر یا یک گروه ، مقادیر تعیین شده دیگر را مقدم می کند. در صورتی که نمی خواهید یک مقدار را برای گزینه ای تعیین کنید ( برای کاربر یا گروه ) <samp>خیر</samp> را مستقر کنید، اگر مقادیر  برای این گزینه قرار است در جای دیگری تقدم یابد <samp>هیچگاه</samp> مفروض است.',
	'ACL_SETTING'	=> 'تنظیمات',
	'ACL_TYPE_A_'	=> 'سطوح دسترسی مدیریتی',
	'ACL_TYPE_F_'	=> 'سطوح دسترسی انجمن',
	'ACL_TYPE_M_'	=> 'سطوح دسترسی مدیرانجمن',
	'ACL_TYPE_U_'	=> 'سطوح دسترسی کاربر',
	'ACL_TYPE_GLOBAL_A_'	=> 'سطوح دسترسی مدیریتی',
	'ACL_TYPE_GLOBAL_U_'	=> 'سطوح دسترسی کاربر',
	'ACL_TYPE_GLOBAL_M_'	=> 'سطوح دسترسی مدیران کلی انجمن',
	'ACL_TYPE_LOCAL_M_'	=> 'سطوح دسترسی مدیران انجمن',
	'ACL_TYPE_LOCAL_F_'	=> 'سطوح دسترسي انجمن',
	'ACL_NO'	=> 'خير',
	'ACL_VIEW'	=> 'سطوح دسترسي نمايشي',
	'ACL_VIEW_EXPLAIN'	=> 'در اینجا شما می توانید سطوح دسترسی تاثیر پذیر در گروه ها / کاربران را مشاهده کنید. عرصه های قرمز رنگ اشاره بر این دارند که گروه / کاربر این سطح دسترسی را ندارد ، عرصه های سبز رنگ نیر حاکی از این است که گروه / کاربر از این سطح دسترسی بهره می برد.',
	'ACL_YES'	=> 'بلي',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'در اينجا شما مي توانيد سطوح دسترسي رياست را به گروه ها و کاربران ارجاع دهيد. همه کاربران با سطوح دسترسي رياست ( مدير کل ) مي توانند کنترل پنل مديريت را مشاهده کنند.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'در اينجا شما مي توانيد کاربران و گروه ها را بعنوان مديرانجمن مقرر کنيد. براي بهره مند کردن کاربران از دسترسي, لطفا به صفحات مناسب با سطوح دسترسي مدير کل يا مدير کلي انجمن ها مراجعه کنيد.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'در اين قسمت مي توانيد تعيين کنيد کدام کاربران و گروه ها به انجمن دسترسي دارند',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> '',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'در اينجا شما مي توانيد سطوح دسترسي گروه ها را   در انجمن هاي مختلف تعيين کنيد.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> '',


//Begin phpBB 3.0.5 Changes by www.Maghsad.com

	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Here you are able to manage the roles for administrative permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Here you are able to manage the roles for forum permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Here you are able to manage the roles for moderative permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Here you are able to manage the roles for user permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',


//END phpBB 3.0.5 Changes by www.Maghsad.com


	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'در اينجا شما مي توانيد سطوح دسترسي هر کاربر در انجمن هاي مختلف را تعيين کنيد.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'در اینجا شما می توانید سطوح دسترسی کلی کاربران را تعیین کنید . این سطوح دسترسی شامل : سطوح دسترسی کاربری ، سطوح دسترسی مدیر انجمن ، و سطوح دسترسی مدیر کل بورد است.سطوح دسترسی کاربرای مشمول چیزهای از قبیل تعیین نماد، ارسال پیغام های خصوصی و غیره است ; سطوح دسترسی مدیر انجمنی چیزهایی از قبیل تایید پست ، اداره مباحث ، اداره تحریم ها ، و غیره را در بر می گیرید و در آخر سطوح دسترسی مدیر کلی بورد شامل دگرگون سازی سطوح دسترسی ، تعیین BBCode های سفارشی ، مدیریت انجمن ها و چیز هایی از این قبیل است. برای تغییر این تنظیمات در گروه های کاربری با تعداد اعضای زیاد از ویرایش "سطوح دسترسي گروه ها" بهره گیری کنید تا در وقتتان صرفه جویی شود . سطح دسترسی کاربری معمولا برای موارد خاص بکارگرفته می شود. برای ارجحیت دادن سطوح دسترسی ، ابتدا کاربر را در یک گروه قرار داده و سپس سطوح دسترسی گروه را ویرایش کنید .',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Here you can view the effective administrative permissions assigned to the selected users/groups.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Here you can view the global moderative permissions assigned to the selected users/groups.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Here you can view the forum permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Here you can view the forum moderator permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Here you can view the effective user permissions assigned to the selected users/groups.',
	'ADD_GROUPS'	=> 'اضافه كردن گروه ها',
	'ADD_PERMISSIONS'	=> 'افزودن سطوح دسترسي',
	'ADD_USERS'	=> 'افزودن کاربران',
	'ADVANCED_PERMISSIONS'	=> 'سطوح دسترسي پيشرفته',
	'ALL_GROUPS'	=> 'انتخاب همه گروه ها',
	'ALL_NEVER'	=> 'همه <samp>هيچگاه</samp>',
	'ALL_NO'	=> 'همه <samp>خير</samp>',
	'ALL_USERS'	=> 'انتخاب همه کاربران',
	'ALL_YES'	=> 'همه <samp>بلي</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'بکارگيري همه سطوح دسترسي',
	'APPLY_PERMISSIONS'	=> 'بکارگیری سطوح دسترسی',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'اين سطوح دسترسي فقط براي اين مورد تعيين خواهند شد.',
	'AUTH_UPDATED'	=> 'سطوح دسترسی بروز شدند.',
	'CREATE_ROLE'	=> 'ایجاد وظیفه',
	'CREATE_ROLE_FROM'	=> 'بکارگیری تنظیمات برای…',
	'CUSTOM'	=> 'سفارشی ...',
	'DEFAULT'	=> 'پيشفرض',
	'DELETE_ROLE'	=> 'حذف وظیفه',
	'DELETE_ROLE_CONFIRM'	=> 'Are you sure you want to remove this role? Items having this role assigned will <strong>not</strong> loose their permission settings.',
	'DISPLAY_ROLE_ITEMS'	=> 'View items using this role',
	'EDIT_PERMISSIONS'	=> 'ويرايش سطوح دسترسي',
	'EDIT_ROLE'	=> 'ویرایش وظیفه',
	'GROUPS_NOT_ASSIGNED'	=> 'هيچ گروهي براي اين نقش تعيين نشده است',
	'LOOK_UP_GROUP'	=> 'چشم انداز گروه کاربري',
	'LOOK_UP_USER'	=> 'چشم انداز کاربر',
	'MANAGE_GROUPS'	=> 'اداره کردن گروه ها',
	'MANAGE_USERS'	=> 'اداره کردن کاربران',
	'NO_AUTH_SETTING_FOUND'	=> 'تنظيمات سطح دسترسي تعريف نشده است.',
	'NO_ROLE_ASSIGNED'	=> 'هيچ نقشي معين نشده است...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Setting to this role does not change permissions on the right. If you want to unset/remove all permissions you should use the “All <samp>NO</samp>” link.',
	'NO_ROLE_AVAILABLE'	=> 'هيچ نقشي فعال نيست',
	'NO_ROLE_NAME_SPECIFIED'	=> 'لطفا به نقش يک نام بدهيد.',
	'NO_ROLE_SELECTED'	=> 'قادر به يافتن نقش ها نيست.',
	'NO_USER_GROUP_SELECTED'	=> 'شما هيچ گروه يا کاربر انتخاب شده اي نداريد.',
	'ONLY_FORUM_DEFINED'	=> 'You only defined forums in your selection. Please also select at least one user or one group.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Permissions and role will also be applied to all checked objects',
	'PLUS_SUBFORUMS'	=> '+زير انجمن ها',
	'REMOVE_PERMISSIONS'	=> 'حذف سطوح دسترسي',
	'REMOVE_ROLE'	=> 'حذف نقش',
	'RESULTING_PERMISSION'	=> 'پي آمد سطح دسترسي',
	'ROLE'	=> 'نقش',
	'ROLE_ADD_SUCCESS'	=> 'نقش با موفقيت اضافه شد.',
	'ROLE_ASSIGNED_TO'	=> 'کاربران/گروه هاي تعيين شده براي %s',
	'ROLE_DELETED'	=> 'نقش با موفقيت حذف شد.',
	'ROLE_DESCRIPTION'	=> 'توضيحات نقش',
	'ROLE_ADMIN_FORUM'	=> 'مدير انجمن',
	'ROLE_ADMIN_FULL'	=> 'مدير کامل',
	'ROLE_ADMIN_STANDARD'	=> 'مدير استاندارد',
	'ROLE_ADMIN_USERGROUP'	=> 'کاربر و مدير گروه ها',
	'ROLE_FORUM_BOT'	=> 'دسترسي موتور هاي جستجو (Bot)',
	'ROLE_FORUM_FULL'	=> 'دسترسي کامل',
	'ROLE_FORUM_LIMITED'	=> 'دسترسي محدود',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'دسترسي محدود + نظرسنجي ها',
	'ROLE_FORUM_NOACCESS'	=> 'بدون دسترسي',
	'ROLE_FORUM_ONQUEUE'	=> 'مدير انجمن در صف ( کانديد )',
	'ROLE_FORUM_POLLS'	=> 'سطح دسترسي استاندارد + نظرسنجي ها',
	'ROLE_FORUM_READONLY'	=> 'فقط دسترسي به خواندن',
	'ROLE_FORUM_STANDARD'	=> 'دسترسي استاندارد',
	'ROLE_MOD_FULL'	=> 'مدير کامل',
	'ROLE_MOD_QUEUE'	=> 'مدير در صف ( کانديد )',
	'ROLE_MOD_SIMPLE'	=> 'مدير کم تکلف',
	'ROLE_MOD_STANDARD'	=> 'مدير استاندارد',
	'ROLE_USER_FULL'	=> 'همه خصيصه ها',
	'ROLE_USER_LIMITED'	=> 'خصيصه هاي محدود',
	'ROLE_USER_NOAVATAR'	=> 'بدون نماد',
	'ROLE_USER_NOPM'	=> 'بدون پیام هاي خصوصي',
	'ROLE_USER_STANDARD'	=> 'خصيصه هاي استاندارد',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Can access the forum management and forum permission settings.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Has access to all administrative functions of this board.<br />Not recommended.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Has access to most administrative features but is not allowed to use server or system related tools.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Can manage groups and users: Able to change permissions, settings, manage bans, and manage ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'This role is recommended for bots and search spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Can use all forum features, including posting of announcements and stickies. Can also ignore the flood limit.<br />Not recommended for normal users.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Can use some forum features, but cannot attach files or use post icons.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'As per Limited Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Can neither see nor access the forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Can use most forum features including attachments, but posts and topics need to be approved by a moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Like Standard Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Can read the forum, but cannot create new topics or reply to posts.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Can use most forum features including attachments and deleting own topics, but cannot lock own topics, and cannot create polls.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Can use all moderating features, including banning.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Can use the Moderation Queue to validate and edit posts, but nothing else.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Can only use basic topic actions. Cannot send warnings or use moderation queue.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Can use most moderating tools, but cannot ban users or change the post author.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Can use all available forum features for users, including changing the user name or ignoring the flood limit.<br />Not recommended.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Can access some of the user features. Attachments, e-mails, or instant messages are not allowed.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Has a limited feature set and is not allowed to use the Avatar feature.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Has a limited feature set, and is not allowed to use Private Messages.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Can access most but not all user features. Cannot change user name or ignore the flood limit, for instance.',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'You are able to enter a short explanation of what the role is doing or for what it is meant for. The text you enter here will be displayed within the permissions screens too.',
	'ROLE_DESCRIPTION_LONG'	=> 'The role description is too long, please limit it to 4000 characters.',
	'ROLE_DETAILS'	=> 'جزييات نقش',
	'ROLE_EDIT_SUCCESS'	=> 'نقش با موفقيت ويرايش شد.',
	'ROLE_NAME'	=> 'نام نقش',
	'ROLE_NAME_ALREADY_EXIST'	=> 'يک نقش نام گذاري شده با نام <strong>%s</strong> پيش از اين براي حالت سطح دسترسي موجود بوده است.',
	'ROLE_NOT_ASSIGNED'	=> 'نقش تاکنون تعيين نشده است.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'انجمن(ها) انتخاب شده موجود نيست.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'گروه(ها) انتخاب شده موجود نيست.',
	'SELECTED_USER_NOT_EXIST'	=> 'کاربر(ها) انتخاب شده موجود نيست.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'در گزينش ذيل شما مي توانيد همه زير انجمن ها را انتخاب کنيد.',
	'SELECT_ROLE'	=> 'انتخاب نقش…',
	'SELECT_TYPE'	=> 'انتخاب نوع',
	'SET_PERMISSIONS'	=> 'نصب  سطوح دسترسي',
	'SET_ROLE_PERMISSIONS'	=> 'نصب سطوح دسترسي نقش',
	'SET_USERS_PERMISSIONS'	=> 'نصب سطوح دسترسي کاربران',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'نصب سطوح دسترسي کاربران انجمن',
	'TRACE_DEFAULT'	=> 'بصورت پيش فرض هر سطح دسترسي <samp>خير</samp> است(نصب نشده). بنابراين هر سطح دسترسي  بايد دوباره با موقعيت جديد تعيين شود.',
	'TRACE_FOR'	=> 'Trace for',
	'TRACE_GLOBAL_SETTING'	=> '%s (سراسري)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'This group’s permission is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'This group’s permission is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NO'	=> 'The permission is <samp>NO</samp> for this group so the old total value is kept.',
	'TRACE_GROUP_NO_LOCAL'	=> 'The permission is <samp>NO</samp> for this group within this forum so the old total value is kept.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'This group’s permission is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'This group’s permission is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_PERMISSION'	=> 'Trace permission - %s',
	'TRACE_RESULT'	=> 'Trace result',
	'TRACE_SETTING'	=> 'Trace setting',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'The forum independent user permission evaluates to <samp>YES</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'The forum independent user permission evaluates to <samp>YES</samp> which overwrites the current local result <samp>NEVER</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <samp>NEVER</samp> which doesn’t influence the local permission. %sTrace global permission%s',
	'TRACE_USER_FOUNDER'	=> 'The user has the founder type set, therefore admin permissions are set to <samp>YES</samp> by default.',
	'TRACE_USER_KEPT'	=> 'The user’s permission is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_KEPT_LOCAL'	=> 'The user’s permission for this forum is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'The user’s permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'The user’s permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'The user’s permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'The user’s permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'The user’s permission for this forum is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'The user’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'The user’s permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'The user’s permission for this forum is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'	=> 'The user’s permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'The user’s permission for this forum is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_WHO'	=> 'Who',
	'TRACE_TOTAL'	=> 'Total',
	'USERS_NOT_ASSIGNED'	=> 'هيچ کاربري براي اين نقش تعيين نشده است',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'is a member of the following pre-defined groups',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'is a member of the following user defined groups',
	'VIEW_ASSIGNED_ITEMS'	=> 'نمايش بخش هاي تعيين شده',
	'VIEW_LOCAL_PERMS'	=> 'سطوح دسترسي محلي',
	'VIEW_GLOBAL_PERMS'	=> 'سطوح دسترسي کلي',
	'VIEW_PERMISSIONS'	=> 'سطوح دسترسي نمايشي',
	'WRONG_PERMISSION_TYPE'	=> 'حالت انتخاب شده سطح دسترسي نادرست است.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'The permission settings are in a wrong format, phpBB is not able to process them correctly.',
		
// 3.0.5 to 3.0.6 by www.phpBB.Maghsad.com	
	
	
		'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'در این بخش شما می توانید سطوح دسترسی یک فروم را به فروم (های) دیگر کپی کرده و تعمیم دهید.',			
		//////////////////////////////////////////////
		'COPY_PERMISSIONS_CONFIRM'				=> 'Are you sure you wish to carry out this operation? Please be aware that this will overwrite any existing permissions on the selected targets.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'انجمنی که می خواهید سطوح دسترسی اش را کپی کنید.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'انحمن هایی که می خواهید سطوح دسترسی مانند انجمن مورد نظر داشته باشند.',
	'COPY_PERMISSIONS_FROM'					=> 'کپی کردن سطوح دسترسی از',
	'COPY_PERMISSIONS_TO'					=> 'اعمال سطوح دسترسی به',
///////////////////////////////////////////////

	'ROLE_FORUM_NEW_MEMBER'		=> 'اعضای تازه وارد',
	'ROLE_USER_NEW_MEMBER'		=> 'کاربر تازه وارد ',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',
	
		
// END 3.0.5 to 3.0.6 by www.phpBB.Maghsad.com
		
		
		
));

?>