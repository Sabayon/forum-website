<?php
/**
* acp_permissions (phpBB Permission Set) [Hungarian]
*
* @package language
* @version $Id: permissions_phpbb.php 197 2009-10-18 20:12:18Z fberci $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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
		'actions'		=> 'Műveletek',
		'content'		=> 'Tartalom',
		'forums'		=> 'Fórumok',
		'misc'			=> 'Egyéb',
		'permissions'	=> 'Jogosultságok',
		'pm'			=> 'Privát üzenetek',
		'polls'			=> 'Szavazás',
		'post'			=> 'Hozzászólás',
		'post_actions'	=> 'Hozzászólás műveletek',
		'posting'		=> 'Üzenetküldés',
		'profile'		=> 'Profil',
		'settings'		=> 'Beállítások',
		'topic_actions'	=> 'Téma műveletek',
		'user_group'	=> 'Felhasználók és csoportok',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Felhasználói jogosultságok',
		'a_'			=> 'Adminisztrátori jogosultságok',
		'm_'			=> 'Moderátori jogosultságok',
		'f_'			=> 'Fórum jogosultságok',
		'global'		=> array(
			'm_'			=> 'Globális moderátori jogosultságok',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Láthatja a profilokat, a taglistát és jelenlévők listáját', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Megváltoztathatja a felhasználónevét', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Megváltoztathatja a jelszavát', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Megváltoztathatja az e-mail címét', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Megváltoztathatja az avatarát', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Megváltoztathatja az elsődleges csoportját', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Csatolhat állományokat', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Letölthet állományokat', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Elmenthet piszkozatokat', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Kikapcsolhatja a szócenzúrát', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Használhat aláírást', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Küldhet privát üzenetet', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Küldhet privát üzenetet egyszerre több felhasználónak', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Küldhet privát üzenetet csoportoknak', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Olvashatja a privát üzeneteit', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Szerkesztheti a saját privát üzeneteit', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Privát üzeneteit törölheti a  a saját mappájából', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Privát üzeneteit továbbküldheti', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Privát üzeneteit e-mailben elküldheti', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Privát üzeneteit kinyomtathatja', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Privát üzeneteihez csatolhat állományt', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Privát üzeneteiből letölthet állományokat', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Privát üzeneteiben használhat BBCode-ot', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Privát üzeneteiben használhat emotikonokat', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Privát üzeneteiben használhatja az [img] BBCode címkét', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Privát üzeneteiben használhatja a [flash] BBCode címkét', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Küldhet e-mailt', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Küldhet azonnali üzenetet', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Figyelmen kívül hagyhatja a flood időközt', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Elrejtheti a jelenlétét', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Láthatja a rejtett jelenlévő felhasználókat', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Kereshet a fórumon', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Láthatja a fórumot', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Olvashatja a fórumot', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Nyithat új témát', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Válaszolhat a témákban', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Használhat hozzászólás/téma ikont', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Küldhet közleményt', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Küldhet kiemelt témát', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Készíthet szavazást', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Szavazhat a szavazásokban', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Megváltoztathatja a korábbi szavazatát', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Csatolhat állományt', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Letölthet állományt', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Használhat aláírást', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Használhat BBCode-ot', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Használhat emotikonokat', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Használhatja az [img] BBCode címkét', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Használhatja a [flash] BBCode címkét', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Szerkesztheti saját hozzászólásait', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Törölheti saját hozzászólásait', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Lezárhatja saját témáit', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Előreugraszhatja témáit', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Jelenthet hozzászólást', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Feliratkozhat a fórumra', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Kinyomtathatja a témákat', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Küldhet értesítő e-mailt a témákról', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Kereshet a fórumban', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Figyelmen kívül hagyhatja a flood időközt', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Hozzászólásainak számának növelése<br /><em>Kérjük, vedd figyelembe, hogy ez csak az új hozzászólásokra van hatással.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Hozzászólhat jóváhagyás nélkül', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Szerkesztheti a hozzászólásokat', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Törölhet hozzászólásokat', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Jóváhagyhat hozzászólásokat', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Lezárhat és törölhet jelentéseket', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Megváltoztathatja a hozzászólások szerzőjét', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Áthelyezhet témákat', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Lezárhat témákat', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Szétválaszthat témákat', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Összevonhat témákat', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Megtekintheti a hozzászólás adatokat', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Adhat figyelmeztetést<br /><em>Ez a jogosultság csak globálisan adható. Nem fórum alapú.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Kezelheti a kitiltásokat<br /><em>Ez a jogosultság csak globálisan adható. Nem fórum alapú.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Megváltoztathatja a fórum beállításokat, láthatja a frissítések keresését', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Megváltoztathatja a szerver/kommunikációs beállításokat', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Megváltoztathatja a Jabber beállításokat', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Láthatja a PHP beállításokat', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Kezelheti a fórumokat', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Felvehet új fórumot', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Törölhet fórumot', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Megtisztíthat fórumot', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Módosíthatja a hozzászólás/téma ikonokat és az emotikonokat', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Módosíthatja a szócenzúrát', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Felvehet BBCode címkéket', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Megváltoztathatja a csatolmányokkal kapcsolatos beállításokat', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Kezelheti a felhasználókat<br /><em>Ebbe beletartozik, hogy a jelenlévők listájánál láthatja a felhasználók böngészőadatait.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Törölheti/megtisztíthatja a felhasználókat', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Kezelheti a csoportokat', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Készíthet új csoportot', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Törölhet csoportot', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Kezelheti a rangokat', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Kezelheti az egyedi profil mezőket', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Kezelheti a letiltott neveket', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Kezelheti a kitiltásokat', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Megtekintheti az effektív jogosultságokat', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Módosíthatja a csoportok jogosultságait', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Módosíthatja a felhasználók jogosultságait', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Módosíthatja a fórum jogosultság osztályt', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Módosíthatja a moderátori jogosultság osztályt', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Módosíthatja az adminisztrátori jogosultság osztályt', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Módosíthatja a felhasználói jogosultság osztályt', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Kezelheti a szerepeket', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Használhatja más jogosultságait', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Kezelheti a megjelenéseket', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Megtekintheti a naplókat', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Kiürítheti a naplókat', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Kezelheti a modulokat', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Kezelheti a nyelvi csomagokat', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Küldhet csoportos e-mailt', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Kezelheti a robotokat', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Kezelheti a jelentés/visszautasítás okokat', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Kimentheti/visszaállíthatja az adatbázist', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Kezelheti a kereső modulokat és beállításokat', 'cat' => 'misc'),
));

?>
