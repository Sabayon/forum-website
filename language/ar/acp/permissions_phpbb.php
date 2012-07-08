<?php
/**
*
* acp_permissions_phpbb.php [Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-14 - phpBBArabia.com
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

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'الأعمال',
		'content'		=> 'المحتويات',
		'forums'		=> 'المنتديات',
		'misc'			=> 'متفرقات',
		'permissions'	=> 'الصلاحيات',
		'pm'			=> 'الرسائل الخاصة',
		'polls'			=> 'الاستفتاءات',
		'post'			=> 'المشاركة',
		'post_actions'	=> 'أعمال المشاركة',
		'posting'		=> 'الكتابة',
		'profile'		=> 'الملف الشخصي',
		'settings'		=> 'الإعدادات',
		'topic_actions'	=> 'عمليات المواضيع',
		'user_group'	=> 'الأعضاء والمجموعات',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'صلاحيات العضوية',
		'a_'			=> 'الصلاحيات الإدارية',
		'm_'			=> 'صلاحيات الإشراف',
		'f_'			=> 'صلاحيات المنتدى',
		'global'		=> array(
			'm_'			=> 'صلاحيات المشرف العام',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang'	=> 'يستطيع مشاهدة الملفات الشخصية', 'cat'	=> 'profile'),
	'acl_u_chgname'		=> array('lang'	=> 'يستطيع تغيير اسم العضوية', 'cat'	=> 'profile'),
	'acl_u_chgpasswd'	=> array('lang'	=> 'يستطيع تغيير كلمة المرور', 'cat'	=> 'profile'),
	'acl_u_chgemail'	=> array('lang'	=> 'يستطيع تغيير عنوان البريد الالكتروني', 'cat'	=> 'profile'),
	'acl_u_chgavatar'	=> array('lang'	=> 'يستطيع تغيير الصورة الشخصية', 'cat'	=> 'profile'),
	'acl_u_chggrp'		=> array('lang'	=> 'يستطيع تغيير المجموعة الافتراضية', 'cat'	=> 'profile'),
	
	'acl_u_attach'		=> array('lang'	=> 'يستطيع ارفاق الملفات', 'cat'	=> 'post'),
	'acl_u_download'	=> array('lang'	=> 'يستطيع تنزيل الملفات', 'cat'	=> 'post'),
	'acl_u_savedrafts'	=> array('lang'	=> 'يستطيع حفظ مسودات',	'cat'	=> 'post'),
	'acl_u_chgcensors'	=> array('lang'	=> 'يستطيع إيقاف مانع الكلمات',	'cat'	=> 'post'),
	'acl_u_sig'			=> array('lang'	=> 'يستطيع استخدام التوقيع', 'cat'	=> 'post'),

	'acl_u_sendpm'		=> array('lang'	=> 'يستطيع إرسال الرسائل الخاصة', 'cat'	=> 'pm'),
	'acl_u_masspm'		=> array('lang'	=> 'يستطيع إرسال الرسائل الخاصة إلى أكثر من عضو دفعة واحدة', 'cat'	=> 'pm'),
	'acl_u_masspm_group'=> array('lang'	=> 'لا يمكن إرسال رسالة للمجموعة', 'cat'	=> 'pm'),
	'acl_u_readpm'		=> array('lang'	=> 'يستطيع قراءة الرسائل الخاصة', 'cat'	=> 'pm'),
	'acl_u_pm_edit'		=> array('lang'	=> 'يستطيع تعديل رسائله الخاصة', 'cat'	=> 'pm'),
	'acl_u_pm_delete'	=> array('lang'	=> 'يستطيع حذف الرسائل الخاصة من مجلداته', 'cat'	=> 'pm'),
	'acl_u_pm_forward'	=> array('lang'	=> 'يستطيع إعادة إرسال الرسائل الخاصة', 'cat'	=> 'pm'),
	'acl_u_pm_emailpm'	=> array('lang'	=> 'يستطيع ارسال الرسائل الخاصة بريدياً', 'cat'	=> 'pm'),
	'acl_u_pm_printpm'	=> array('lang'	=> 'يستطيع طباعة الرسائل الخاصة', 'cat'	=> 'pm'),
	'acl_u_pm_attach'	=> array('lang'	=> 'يستطيع إرفاق الملفات في الرسائل الخاصة', 'cat'	=> 'pm'),
	'acl_u_pm_download'	=> array('lang'	=> 'يستطيع تنزيل الملفات من الرسائل الخاصة', 'cat'	=> 'pm'),
	'acl_u_pm_bbcode'	=> array('lang'	=> 'يمكنه استخدام BBcode في', 'cat'	=> 'pm'),
	'acl_u_pm_smilies'	=> array('lang'	=> 'يمكنه استخدام الابتسامات في', 'cat'	=> 'pm'),
	'acl_u_pm_img'		=> array('lang'	=> 'يمكنه استخدام الصور في  ', 'cat'	=> 'pm'),
	'acl_u_pm_flash'	=> array('lang'	=> 'يمكنه استخدام الفلاش في  ',	'cat'	=> 'pm'),

	'acl_u_sendemail'	=> array('lang'	=> 'يستطيع إرسال بريد الكتروني', 'cat'	=> 'misc'),
	'acl_u_sendim'		=> array('lang'	=> 'يستطيع إرسال رسائل فورية', 'cat'	=> 'misc'),
	'acl_u_ignoreflood'	=> array('lang'	=> 'يستطيع تجاهل الحد الأقصى للإغراق', 'cat'	=> 'misc'),
	'acl_u_hideonline'	=> array('lang'	=> 'يستطيع إخفاء حالة اتصاله', 'cat'	=> 'misc'),
	'acl_u_viewonline'	=> array('lang'	=> 'يستطيع مشاهدة الأعضاء المتخفيين', 'cat'	=> 'misc'),
	'acl_u_search'		=> array('lang'	=> 'يستطيع البحث في المنتدى', 'cat'	=> 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang'	=> 'يمكنه مشاهدة المنتدى', 'cat'	=> 'post'),
	'acl_f_read'		=> array('lang'	=> 'يمكنه قراءة المنتدى', 'cat'	=> 'post'),
	'acl_f_post'		=> array('lang'	=> 'يمكنه كتابة مواضيع جديدة', 'cat'	=> 'post'),
	'acl_f_reply'		=> array('lang'	=> 'يمكنه الرد على المواضيع', 'cat'	=> 'post'),
	'acl_f_icons'		=> array('lang'	=> 'يمكنه استخدام أيقونات المواضيع/المشاركات', 'cat'	=> 'post'),
	'acl_f_announce'	=> array('lang'	=> 'يمكنه كتابة اعلانات', 'cat'	=> 'post'),
	'acl_f_sticky'		=> array('lang'	=> 'يمكنه كتابة مواضيع مثبتة', 'cat'	=> 'post'),

	'acl_f_poll'		=> array('lang'	=> 'يمكنه إنشاء استفتاء', 'cat'	=> 'polls'),
	'acl_f_vote'		=> array('lang'	=> 'يمكنه التصويت في الاستفتاءات', 'cat'	=> 'polls'),
	'acl_f_votechg'		=> array('lang'	=> 'يمكنه تغيير صوته في الاستفتاء', 'cat'	=> 'polls'),
	
	'acl_f_attach'		=> array('lang'	=> 'يمكنه ارفاق ملفات',	'cat'	=> 'content'),
	'acl_f_download'	=> array('lang'	=> 'يمكنه تنزيل الملفات', 'cat'	=> 'content'),
	'acl_f_sigs'		=> array('lang'	=> 'يمكنه استخدام التوقيع', 'cat'	=> 'content'),
	'acl_f_bbcode'		=> array('lang'	=> 'يمكنه استخدام BBcode', 'cat'	=> 'content'),
	'acl_f_smilies'		=> array('lang'	=> 'يمكنه استخدام الابتسامات', 'cat'	=> 'content'),
	'acl_f_img'			=> array('lang'	=> 'يمكنه إضافة صور للمشاركات', 'cat'	=> 'content'),
	'acl_f_flash'		=> array('lang'	=> 'يمكنه إضافة فلاش للمشاركات', 'cat'	=> 'content'),
	
	'acl_f_edit'		=> array('lang'	=> 'يستطيع تعديل مشاركاته الخاصة', 'cat'	=> 'actions'),
	'acl_f_delete'		=> array('lang'	=> 'يستطيع حذف مشاركاته الخاصة', 'cat'	=> 'actions'),
	'acl_f_user_lock'	=> array('lang'	=> 'يستطيع إغلاق مواضيعه الخاصة', 'cat'	=> 'actions'),
	'acl_f_bump'		=> array('lang'	=> 'يستطيع رفع المواضيع', 'cat'	=> 'actions'),
	'acl_f_report'		=> array('lang'	=> 'يستطيع التبليغ عن المشاركات', 'cat'	=> 'actions'),
	'acl_f_subscribe'	=> array('lang'	=> 'يستطيع الاشتراك في المنتدى', 'cat'	=> 'actions'),
	'acl_f_print'		=> array('lang'	=> 'يستطيع طباعة المواضيع', 'cat'	=> 'actions'),
	'acl_f_email'		=> array('lang'	=> 'يستطيع إرسال المواضيع', 'cat'	=> 'actions'),

	'acl_f_search'		=> array('lang'	=> 'يستطيع البحث في المنتدى', 'cat'	=> 'misc'),
	'acl_f_ignoreflood'	=> array('lang'	=> 'يستطيع تجاهل فترة الإغراق', 'cat'	=> 'misc'),
	'acl_f_postcount'	=> array('lang'	=> 'زيادة عداد المشاركة<br /><em>يرجى العلم بأن هذا الخيار يؤثر على المشاركات الجديدة فقط.</em>','cat'	=> 'misc'),
	'acl_f_noapprove'	=> array('lang'	=> 'يستطيع المشاركة دون الحاجة للموافقة', 'cat'	=> 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(	
	'acl_m_edit'		=> array('lang'	=> 'يستطيع تعديل المشاركات', 'cat'	=> 'post_actions'),
	'acl_m_delete'		=> array('lang'	=> 'يستطيع حذف المشاركات', 'cat'	=> 'post_actions'),
	'acl_m_approve'		=> array('lang'	=> 'يستطيع الموافقة على المشاركات', 'cat'	=> 'post_actions'),
	'acl_m_report'		=> array('lang'	=> 'يستطيع إغلاق وحذف التقارير', 'cat'	=> 'post_actions'),
	'acl_m_chgposter'	=> array('lang'	=> 'يستطيع تغيير كاتب المشاركة', 'cat'	=> 'post_actions'),
	
	'acl_m_move'	=> array('lang'	=> 'يمكنه نقل المواضيع', 'cat'	=> 'topic_actions'),
	'acl_m_lock'	=> array('lang'	=> 'يمكنه إغلاق المواضيع', 'cat'	=> 'topic_actions'),
	'acl_m_split'	=> array('lang'	=> 'يمكنه تقسيم المواضيع', 'cat'	=> 'topic_actions'),
	'acl_m_merge'	=> array('lang'	=> 'يمكنه دمج المواضيع', 'cat'	=> 'topic_actions'),
	
	'acl_m_info'	=> array('lang'	=> 'يمكنه مشاهدة تفاصيل المشاركة','cat'	=> 'misc'),
	'acl_m_warn'	=> array('lang'	=> 'يمكنه توجيه تحذيرات<br /><em>هذا الخيار يسند مجموعا. ليس من أساسيات المنتدى.</em>', 'cat'	=> 'misc'),
	'acl_m_ban'		=> array('lang'	=> 'يمكنه إدارة قائمة الحظر<br /><em>تضاف هذه الصلاحية عموما وليس بناء على ساحة معينة !</em>', 'cat'	=> 'misc'),
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang'	=> 'يمكنه ضبط إعدادات المنتدى / فحص التحديثات', 'cat'	=> 'settings'),
	'acl_a_server'		=> array('lang'	=> 'يمكنه ضبط اعدادت الخادم / الاتصال', 'cat'	=> 'settings'),
	'acl_a_jabber'		=> array('lang'	=> 'يمكنه ضبط اعدادت Jabber', 'cat'	=> 'settings'),
	'acl_a_phpinfo'		=> array('lang'	=> 'يمكنه مشاهدة اعدادات php', 'cat'	=> 'settings'),
	
	'acl_a_forum'		=> array('lang'	=> 'يمكنه إدارة المنتديات',	'cat'	=> 'forums'),
	'acl_a_forumadd'	=> array('lang'	=> 'يمكنه إضافة منتديات جديدة', 'cat'	=> 'forums',	),
	'acl_a_forumdel'	=> array('lang'	=> 'يمكنه حذف المنتديات', 'cat'	=> 'forums',	),
	'acl_a_prune'		=> array('lang'	=> 'يمكنه تهذيب المنتديات',	'cat'	=> 'forums',	),
	
	'acl_a_icons'		=> array('lang'	=> 'يمكنه تعديل أيقونات المواضيع/المشاركات والابتسامات', 'cat'	=> 'posting',	),
	'acl_a_words'		=> array('lang'	=> 'يمكنه ضبط مانع الكلمات', 'cat'	=> 'posting',	),
	'acl_a_bbcode'		=> array('lang'	=> 'يمكنه تعريف أكواد BBcode', 'cat'	=> 'posting',	),
	'acl_a_attach'		=> array('lang'	=> 'يمكنه ضبط إعدادات المرفقات', 'cat'	=> 'posting'),

	'acl_a_user'		=> array('lang'	=> 'يمكنه إدارة الأعضاء<br /><em>هذا ينطبق أيضا على أعضاء عملاء التصفح في لائحة الموجودين الآن.</em>',	'cat'	=> 'user_group'),
	'acl_a_userdel'		=> array('lang'	=> 'يمكنه حذف / تهذيب الأعضاء', 'cat'	=> 'user_group'),
	'acl_a_group'		=> array('lang'	=> 'يمكنه إدارة المجموعات', 'cat'	=> 'user_group'),
	'acl_a_groupadd'	=> array('lang'	=> 'يمكنه إضافة مجموعات جديدة', 'cat'	=> 'user_group'),
	'acl_a_groupdel'	=> array('lang'	=> 'يمكنه حذف المجموعات', 'cat'	=> 'user_group'),
	'acl_a_ranks'		=> array('lang'	=> 'يمكنه إدارة الرتب', 'cat'	=> 'user_group'),
	'acl_a_profile'		=> array('lang'	=> 'يمكنه إدارة حقول الملف الشخصي الخاصة', 'cat'	=> 'user_group'),
	'acl_a_names'		=> array('lang'	=> 'يمكنه ضبط الأسماء الممنوعة', 'cat'	=> 'user_group'),
	'acl_a_ban'			=> array('lang'	=> 'يمكنه حظر الأعضاء', 'cat'	=> 'user_group'),

	'acl_a_viewauth'	=> array('lang'	=> 'يمكنه مشاهدة ظلال الصلاحيات', 'cat'	=> 'permissions'),
	'acl_a_authgroups'	=> array('lang'	=> 'يمكنه ضبط الصلاحيات للمجموعات', 'cat'	=> 'permissions'),
	'acl_a_authusers'	=> array('lang'	=> 'يمكنه ضبط الصلاحيات للأعضاء', 'cat'	=> 'permissions'),
	'acl_a_fauth'		=> array('lang'	=> 'يمكنه ضبط صلاحيات المنتدى', 'cat'	=> 'permissions'),
	'acl_a_mauth'		=> array('lang'	=> 'يمكنه ضبط صلاحيات الإشراف', 'cat'	=> 'permissions'),
	'acl_a_aauth'		=> array('lang'	=> 'يمكنه ضبط الصلاحيات الإدارية', 'cat'	=> 'permissions'),
	'acl_a_uauth'		=> array('lang'	=> 'يمكنه ضبط صلاحيات العضوية', 'cat'	=> 'permissions'),
	'acl_a_roles'		=> array('lang'	=> 'يمكنه ضبط القوالب', 'cat'	=> 'permissions'),
	'acl_a_switchperm'	=> array('lang'	=> 'يمكنه استخدام صلاحيات الآخرين', 'cat'	=> 'permissions'),
	
	'acl_a_styles'		=> array('lang'	=> 'يمكنه ضبط الاستايلات', 'cat'	=> 'misc'),
	'acl_a_viewlogs'	=> array('lang'	=> 'يمكنه مشاهدة السجلات', 'cat'	=> 'misc'),
	'acl_a_clearlogs'	=> array('lang'	=> 'يمكنه تفريغ السجلات', 'cat'	=> 'misc'),
	'acl_a_modules'		=> array('lang'	=> 'يمكنه إدارة الموديولات', 'cat'	=> 'misc'),
	'acl_a_language'	=> array('lang'	=> 'يمكنه ضبط حزم اللغات', 'cat'	=> 'misc'),
	'acl_a_email'		=> array('lang'	=> 'يمكنه ارسال بريد جماعي', 'cat'	=> 'misc'),
	'acl_a_bots'		=> array('lang'	=> 'يمكنه ضبط Bots', 'cat'	=> 'misc'),
	'acl_a_reasons'		=> array('lang'	=> 'يمكنه ضبط أسباب التقارير / الرفض', 'cat'	=> 'misc'),
	'acl_a_backup'		=> array('lang'	=> 'يمكن نسخ / استعادة قاعدة البيانات',	'cat'	=> 'misc'),
	'acl_a_search'		=> array('lang'	=> 'يمكنه ضبط إعدادات البحث', 'cat'	=> 'misc'),
));

?>