<?php
/**
*
* acp_permissions_phpbb.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-06 - www.dea-portal.com
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
		'actions'		=> 'Veprimet',
		'content'		=> 'Përmbajtja',
		'forums'		=> 'Forumet',
		'misc'			=> 'Të ndryshme',
		'permissions'	=> 'Të drejtat',
		'pm'			=> 'Mesazhet private',
		'polls'			=> 'Sondazhet',
		'post'			=> 'Postimet',
		'post_actions'	=> 'Veprimet e postimeve',
		'posting'		=> 'Postimi',
		'profile'		=> 'Profili',
		'settings'		=> 'Opsionet',
		'topic_actions'	=> 'Veprimet e temave',
		'user_group'	=> 'Përdoruesit &amp; Grupet',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Të drejtat e përdoruesit',
		'a_'			=> 'Të drejtat e admin',
		'm_'			=> 'Të drejtat e moderatorit',
		'f_'			=> 'Të drejtat e forumit',
		'global'		=> array(
			'm_'			=> 'Të drejtat e moderatorit global',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Mund të shohë profilet, listën e antarëve dhe listën e antarëve në linjë', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Mund të ndryshojë pseudonimin', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Mund të ndryshojë fjalëkalimin', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Mund të ndryshojë adresën e-mail', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Mund të ndryshojë avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Mund të ndryshojë grupin e paracaktuar', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Mund të postojë skedarë', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Mund të shkarkojë skedarë', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Mund të ruajë plane', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Mund të ç\'aktivizojë çensuruesin e fjalëve', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Mund të përdorë firmë', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Mund të dërgojë mesazhe private', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Mund t\'u dërgojë mesazhe disa përdoruesve', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Mund t\'u dërgojë mesazhe grupeve', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Mund të lexoje mesazhet private', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Mund të modifikojë mesazhet e veta private', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Mund të fshijë mesazhet private nga dosja e tij', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Mund të forward mesazhe private', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Mund të dërgojë me e-mail mesazhet private', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Mund të printojë mesazhet private', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Mund të dërgojë skedarë me mesazhe private', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Mund të shkarkojë skedarë në mesazhe private', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Mund të postojë BBCode në mesazhe private', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Mund të postojë buzëqeshje në mesazhe private', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Mund të postojë imazhe në mesazhe private', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Mund të postojë në mesazhe private', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Mund të dërgoje e-mail', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Mund të dërgojë mesazhe të shpejta', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Mund të injorojë limitin flood', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Mund të fshehë statusin në linjë', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Mund të shohë përdorues të fshehur në linjë', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Mund të kërkojë në bord', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Mund të shohë forumin', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Mund të lexojë forumin', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Mund të krijojë tema të reja', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Mund t\'u përgjigjet temave', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Mund të përdorë ikonat e temave/postimeve', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Mund të postojë lajmërime', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Mund të postojë kryetema', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Mund të krijojë sondazhe', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Mund të votojë në sondazhe', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Mund të ndryshojë votën ekzistuese', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Mund të shtojë skedarë', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Mund të shkarkojë skedarë', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Mund të përdorë firmat', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Mund të postojë BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Mund të postojë buzëqeshje', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Mund të postojë imazhe', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Mund të postojë Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Mund të modifikojë postimet e veta', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Mund të fshijë postimet e veta', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Mund të mbyllë temat e veta', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Mund të ngjisë temat lart', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Mund të raportojë postimet', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Mund të abonohet në forum', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Mund të printojë temat', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Mund të dërgojëe temat me e-mail', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Mund të kërkojë në forum', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Mund të injorojë limitin e flood', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Rritja e numrit të postimeve<br /><em>Vini re që ky opsion vlen për temat e reja.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Mund të postoje pa qënë nevoja e aprovimit', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Mund të modifikojë postimet', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Mund të fshijë postimet', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Mund të aprovojë postimet', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Mund të mbyllë dhe të fshijë raportimet', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Mund të ndryshojë autorin e postimit', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Mund të lëvizë temat', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Mund të mbyllë temat', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Mund të ndajë temat', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Mund të bashkojë temat', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Mund të shikojë detajet e postimit', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Mund të japë paralajmërime<br /><em>Ky opsion jepet vetëm globalisht. Nuk është i bazuar në forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Mund të menaxhojë përjashtimet<br /><em>Ky opsion jepet vetëm globalisht. Nuk është i bazuar në forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Mund të ndryshojë opsionet e bordit dhe të kërkojë për azhornime', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Mund të ndryshojë opsionet e server/komunikim', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Mund të ndryshojë opsionet e Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Mund të shohë opsionet e php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Mund të menaxhojë forumet', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Mund të shtojë forume të rinj', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Mund të fshijë forumet', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Mund të fshijë forumet automatikisht', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Mund të ndryshojë ikonat dhe buzëqeshjet për temat/postimet', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Mund të ndryshojë çensuruesin e fjalëve', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Mund të përcaktojë kllapa BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Mund të ndryshojë opsionet e lidhura me shtojcat', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Mund të menaxhojë përdoruesit<br /><em>Kjo përfshin shikimin e agjentit të shfletuesit të përdoruesit në listën e antarëve në linjë.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Mund të fshijë/fshijë automatikisht përdorues', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Mund të menaxhojë grupet', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Mund të shtojë grupe të rinj', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Mund të fshijë grupet', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Mund të menaxhojë rangjet', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Mund të menaxhojë fushat e personalizuara të profilit', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Mund të menaxhoje emrat e ndaluar', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Mund të menaxhojë përjashtimet', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Mund të shikojë maskën e të drejtave', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Mund të ndryshojë të drejtat për grupe individuale', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Mund të ndryshojë të drejtat për përdorues individual', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Mund të ndryshojë klasin e të drejtave të forumit', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Mund të ndryshojë klasin e të drejtave të moderatorëve', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Mund të ndryshojë klasin e të drejtave të admin', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Mund të ndryshojë klasin e të drejtave të përdoruesve', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Mund të menaxhojë rolet', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Mund të përdorë të drejtat e të tjerëve', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Mund të menaxhojë stilet', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Mund të shikojë log', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Mund të fshijë log', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Mund të menaxhojë modulet', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Mund të menaxhojë paketat gjuhësore', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Mund të dërgojë e-mail masiv', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Mund të menaxhojë bot', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Mund të menaxhojë arsyet raportim/bllokim', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Mund të backup/restaurojë bazën e informacionit', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Mund të menaxhojë kërkimet dhe opsionet', 'cat' => 'misc'),
));

?>