<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [English]
*
* @package language
* @version $Id: permissions_phpbb.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Placeholders توانايي now contain order information, e.g. instead of
// 'Page %s of %s' you توانايي (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'توانايي view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'توانايي post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'اقدامات',
		'content'		=> 'محتوا',
		'forums'		=> 'انجمن ها',
		'misc'			=> 'متفرقه',
		'permissions'	=> 'سطوح دسترسي',
		'pm'			=> 'پیام هاي خصوصي',
		'polls'			=> 'نظر سنجي ها',
		'post'			=> 'پست',
		'post_actions'	=> 'اعمال پست',
		'posting'		=> 'ارسال پست',
		'profile'		=> 'مشخصات',
		'settings'		=> 'تنظيمات',
		'topic_actions'	=> 'اعمال مبحث',
		'user_group'	=> 'گروه ها و کاربران',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'سطوح دسترسي کاربري',
		'a_'			=> 'سطوح دسترسي مديريتي',
		'm_'			=> 'سطوح دسترسي مدير انجمني',
		'f_'			=> 'سطوح دسترسي منتسب به انجمن',
		'global'		=> array(
			'm_'			=> 'سطوح دسترسي مدير سراسري انجمن',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'توانايي مشاهده مشخصات، ليست کاربران و آنلاين ها', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'توانايي تغيير نام کاربري', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'توانايي تغيير کلمه عبور', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'توانايي تغيير آدرس ايميل', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'توانايي تغيير نماد', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'توانايي تغيير گروه کاربري پيشفرض', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'توانايي پيوست فايل ها', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'توانايي دانلود فايل ها', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'توانايي ذخيره پيش نويس ها', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'توانايي لغو سانسور کلمات', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'توانايي استعمال امضا', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'توانايي ارسال پیام هاي خصوصي', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'اجازه ارسال پيام خصوصي به چند كاربر فعال باشد', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'اجازه ارسال پيام خصوصي به گروه ها فعال باشد', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'توانايي خواندن پیام هاي خصوصي', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'توانايي ويرايش پیام هاي خصوصي خودش', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'توانايي حذف پیام هاي خصوصي از فولدر هاي خودش', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'توانايي فوروارد پیام هاي خصوصي', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'توانايي ايميل پیام هاي خصوصي', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'توانايي پرينت پیام هاي خصوصي', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'توانايي پيوست فايل ها در پیام هاي خصوصي', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'توانايي دريافت فايل ها در پیام هاي خصوصي', 'cat' => 'pm'),


	'acl_u_sendemail'	=> array('lang' => 'توانايي ارسال ايميل', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'توانايي ارسال پیام هاي فوري', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'توانايي عبور از فواصل زماني', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'توانايي نشان ندادن وضعيت آنلاين', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'توانايي مشاهده کاربران مخفي آنلاين', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'توانايي جستجو در بورد', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'توانايي مشاهده انجمن', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'توانايي خواندن انجمن', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'توانايي شروع مباحث جديد', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'توانايي ارسال پاسخ به مبحث', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'توانايي بکارگيري نماد ها در مباحث و پست ها', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'توانايي ارسال اطلاعيه', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'توانايي ارسال مهم', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'توانايي ايجاد نظر سنجي ها', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'توانايي راي در نظر سنجي ها', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'توانايي تغيير آرا', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'توانايي پيوست فايل ها', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'توانايي دانلود فايل ها', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'توانايي بکارگيري امضا', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'توانايي ويرايش پست هاي خودش', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'توانايي حذف پست هاي خودش', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'توانايي بستن مباحث خودش', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'توانايي بامپ مباحث', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'توانايي گزارش پست ها', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'توانايي اشتراک در انجمن', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'توانايي پرينت مباحث', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'توانايي ايميل مباحث', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'توانايي جستجو در انجمن', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'توانايي عبور از فواصل زماني', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'افزايش کنتور پست ها<br /><em>لطفا در نظر داشته باشيد که اين وضعيت فقط براي پست هاي جديد موثر است.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'توانايي ارسال پست بدون تاييد شدن', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'توانايي ويرايش پست ها', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'توانايي ويرايش پست ها', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'توانايي تاييد پست ها', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'توانايي بستن و حذف گزارش ها', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'توانايي تغيير نويسنده پست', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'توانايي انتقال مباحث', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'توانايي بستن مباحث', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'توانايي تفكيك مباحث', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'توانايي ادغام مباحث', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'توانايي مشاهده جزييات پست', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'توانايي صادر کردن اخطار ها<br /><em>تنها سراسري تعيين مي شود. فقط متکي به اين انجمن نيست.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'توانايي اداره کردن تحريم ها<br /><em>تنها سراسري تعيين مي شود. فقط متکي به اين انجمن نيست.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'توانايي تغيير تنظيمات بورد/جستجو براي بروزرساني', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'توانايي تغيير تنظيمات سرور/ارتباطات', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'توانايي تغيير  تنظيمات Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'توانايي مشاهده تنظيمات php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'توانايي اداره انجمن ها', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'توانايي افزودن انجمن هاي جديد', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'توانايي حذف انجمن ها', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'توانايي هرس انجمن ها', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'توانايي تغيير نماد پست ها / مبحث ها و شکلکها', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'توانايي تغيير سانسور کلمات', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'توانايي تعيين تگ هاي BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'توانايي تغيير تنظيمات وابسته پيوست', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'توانايي اداره کاربران<br /><em>This also includes seeing the users browser agent within the viewonline list.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'توانايي حذف / هرس کاربران', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'توانايي اداره گروه ها', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'توانايي افزودن گروه هاي جديد', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'توانايي حذف گروه ها', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'توانايي اداره رتبه ها', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'توانايي اداره فيلد هاي سفارشي مشخصات', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'توانايي اداره نام هاي غيرفعال', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'توانايي اداره تحريم ها', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'توانايي مشاهده نهان هاي سطح دسترسي', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'توانايي تغيير سطوح دسترسي متعلق به گروه ها', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'توانايي تغيير سطوح دسترسي متعلق به کاربران', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'توانايي تغيير نوح سطح دسترسي انجمن', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'توانايي تغيير نوع سطح دسترسي مدير انجمن', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'توانايي نوع سطح دسترسي مدير کل', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'توانايي تغيير سطح دسترسي کاربر', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'توانايي اداره نقش ها', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'توانايي بکارگيري سطوح دسترسي ديگر', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'توانايي اداره استايل ها', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'توانايي نمايش اعمال', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'توانايي تميز کردن اعمال', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'توانايي اداره ماژول ها', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'توانايي اداره بسته هاي زبان', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'توانايي ارسال ايميل هاي گروهي', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'توانايي اداره bot ها', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'توانايي اداره دلايل عدم پذيرش ها و گزارش ها', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'توانايي ايجاد و بازگرداني پشتيبان', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'توانايي اداره حاميان جستجو و تنظيمات', 'cat' => 'misc'),
		
		
		
       // 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com

	'acl_u_pm_bbcode'	=> array('lang' => 'Can use BBCode in private messages', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Can use smilies in private messages', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Can use [img] BBCode tag in private messages', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Can use [flash] BBCode tag in private messages', 'cat' => 'pm'),
		
		
		////////////////////////////////////
		
	'acl_f_bbcode'		=> array('lang' => 'Can use BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Can use smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Can use [img] BBCode tag', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Can use [flash] BBCode tag', 'cat' => 'content'),
			    
	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
));

?>