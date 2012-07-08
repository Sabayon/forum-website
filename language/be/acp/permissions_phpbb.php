<?php
/**
* acp_permissions (phpBB Permission Set) [Belarusian]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
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
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Дзеянні',
		'content'		=> 'Змесціва',
		'forums'		=> 'Форумы',
		'misc'			=> 'Рознае',
		'permissions'	=> 'Правы доступу',
		'pm'			=> 'Асабістыя паведамленні',
		'polls'			=> 'Апытанні',
		'post'			=> 'Размяшчэнне паведамленняў',
		'post_actions'	=> 'Дзеянні з паведамленнямі',
		'posting'		=> 'Паведамленні',
		'profile'		=> 'Профіль',
		'settings'		=> 'Усталёўкі',
		'topic_actions'	=> 'Дзеянні з тэмамі',
		'user_group'	=> 'Карыстальнікі',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Правы доступу карыстальніка',
		'a_'			=> 'Правы доступу адміністратара',
		'm_'			=> 'Правы доступу мадэратара',
		'f_'			=> 'Правы доступу для форума',
		'global'		=> array(
			'm_'			=> 'Глабальныя правы мадэратара',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Можа праглядаць профілі, спіс карыстальнікаў і старонку «Хто зараз на канферэнцыі»', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Можа мяняць імя', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Можа мяняць пароль', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Можа мяняць email-адрас', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Можа мяняць аватару', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Можа мяняць групу па змаўчанні', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Можа прымацоўваць укладанні', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Можа запампоўваць файлы', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Можа захоўваць чарнавікі', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Можа адключаць аўтацэнзара', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Можа выкарыстаць подпіс', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Можа пасылаць АП', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Можа рассылаць масавыя АП', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Можа рассылаць АП групам карыстальнікаў', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Можа чытаць АП', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Можа рэдагаваць уласныя АП', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Можа выдаляць АП з сваіх папак', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Можа перасылаць АП', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Можа адпраўляць АП па email', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Можа раздрукоўваць АП', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Можа прымацоўваць укладанні ў АП', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Можа запампоўваць файлы з АП', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Можа выкарыстаць BBCode у АП', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Можа выкарыстаць смайлы ў АП', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Можа ўкладваць малюнкі ў АП', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Можа ўкладваць флэш-файлы ў АП', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Можа пасылаць email-паведамленні', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Можа выкарыстаць сістэму імгненных паведамленняў', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Можа ігнараваць флуд-кантроль', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Можа хаваць статут прысутнасці', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Можа бачыць статут прысутнасці', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Можа выкарыстаць пошук', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Можа бачыць форум', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Можа чытаць форум', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Можа ствараць тэмы', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Можа адказваць у тэмах', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Можа выкарыстаць значкі тэм і паведамленняў', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Можа ствараць аб\'явы', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Можа прыляпляць тэмы', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Можа ствараць апытанні', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Можа галасаваць у апытаннях', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Можа перагаласаваць', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Можа прымацоўваць укладанні', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Можа запампоўваць файлы', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Можа выкарыстаць подпіс', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Можа выкарыстаць BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Можа выкарыстаць смайлы', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Можа ўкладваць малюнкі', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Можа ўкладваць флэш-файлы', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Можа рэдагаваць уласныя паведамленні', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Можа выдаляць уласныя паведамленні', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Можа зачыняць свае тэмы', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Можа паднімаць тэмы', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Можа размяшчаць скаргі', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Можа падпісвацца на форумы', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Можа раздрукоўваць тэмы', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Можа паведамляць (сябру) па email аб тэме', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Можа выкарыстаць пошук у форуме', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Можа ігнараваць флуд-кантроль', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Лічыльнік паведамленняў уключаны<br /><em>Улічыце, што дадзеная ўсталёўка эфектыўная толькі пры стварэнні новых паведамленняў.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Можа размяшчаць паведамленні без ухвалы', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Можа рэдагаваць паведамленні', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Можа выдаляць паведамленні', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Можа ўхваляць паведамленні', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Можа зачыняць і выдаляць скаргі', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Можа мяняць аўтара паведамленняў', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Можа перамяшчаць тэмы', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Можа зачыняць тэмы', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Можа падзяляць тэмы', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Можа аб\'ядноўваць тэмы', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Можа праглядаць падрабязнасці аб паведамленнях', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Можа аб\'яўляць папярэджанні<br /><em>Гэта права можа быць прызначанае толькі глабальна, а не на ўзроўні форумаў.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Можа кіраваць блакоўкай<br /><em>Гэта права можа быць прызначанае толькі глабальна, а не на ўзроўні форумаў.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Можа змяняць налады канферэнцыі і правяраць абнаўленні', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Можа змяняць параметры налады сервера', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Можа змяняць налады Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Можа праглядаць звесткі аб php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Можа кіраваць форумамі', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Можа ствараць форумы', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Можа выдаляць форумы', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Можа чысціць форумы', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Можа змяняць значкі тэм, паведамленняў і смайлікі', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Можа наладжваць аўтацэнзар', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Можа вызначаць BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Можа змяняць налады ўкладанняў', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Можа кіраваць карыстальнікамі<br /><em>Права таксама ўключае прагляд тыпу браўзэра карыстальнікаў у спісе змешчаных на канферэнцыі.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Можа выдаляць карыстальнікаў', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Можа кіраваць групамі', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Можа ствараць групы', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Можа выдаляць групы', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Можа кіраваць званнямі', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Можа кіраваць дадатковымі палямі профіля', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Можа кіраваць забароненымі імёнамі', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Можа кіраваць блакоўкай', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Можа праглядаць правы доступу', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Можа змяняць правы доступу для пэўнай групы', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Можа змяняць правы доступу для пэўнага карыстальніка', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Можа змяняць правы доступу ў форумах', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Можа змяняць правы доступу для мадэратараў', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Можа змяняць правы доступу для адміністратараў', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Можа змяняць правы доступу для карыстальнікаў', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Можа кіраваць ролямі', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Можа змяняць іншыя правы доступу', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Можа кіраваць стылямі', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Можа праглядаць логі', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Можа чысціць логі', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Можа кіраваць модулямі', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Можа кіраваць моўнымі пакетамі', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Можа здзяйсняць масавае рассыланне пошты', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Можа кіраваць ботамі', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Можа кіраваць спісам скарг/чыннікаў', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Можа захоўваць/аднаўляць базу дадзеных', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Можа кіраваць пошукавымі індэксамі/усталёўкамі пошуку', 'cat' => 'misc'),
));

?>
