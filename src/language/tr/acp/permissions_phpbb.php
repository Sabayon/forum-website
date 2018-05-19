<?php
/** 
* acp_permissions (phpBB Permission Set) [Turkish]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.26 2007/06/09 11:10:23 acydburn Exp $ 
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
		'actions'		=> 'Eylemler',
		'content'		=> 'İçerik',
		'forums'		=> 'Forumlar',
		'misc'			=> 'Çeşitli',
		'permissions'	=> 'İzinler',
		'pm'			=> 'Özel mesajlar',
		'polls'			=> 'Anketler',
		'post'			=> 'Mesaj',
		'post_actions'	=> 'Mesaj faaliyetleri',
		'posting'		=> 'Mesajlaşma',
		'profile'		=> 'Profil',
		'settings'		=> 'Ayarlar',
		'topic_actions'	=> 'Başlık faaliyetleri',
		'user_group'	=> 'Kullanıcılar &amp; Gruplar',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Kullanıcı izinleri',
		'a_'			=> 'Yönetim izinleri',
		'm_'			=> 'Moderatör izinleri',
		'f_'			=> 'Forum izinleri',
 		'global'		=> array(
		'm_'			=> 'Global moderatör izinleri',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Profilleri, üye listesini ve çevrimiçi listesini görebilir', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Kullanıcı adı değiştirebilir', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Şifre değiştirebilir', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'E-posta adresi değiştirebilir', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Avatar değiştirebilir', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Varsayılan kullanıcı grubunu değiştirebilir', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Dosyalar ekleyebilir', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Dosyaları indirebilir', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Taslaklar kaydedebilir', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Kelime sansürlerini kaldırabilir', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'İmza kullanabilir', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Özel mesaj gönderebilir', 'cat' => 'pm'),
  'acl_u_masspm'      => array('lang' => 'Çoklu kullanıcılara mesaj gönderebilir', 'cat' => 'pm'),
  'acl_u_masspm_group'	=> array('lang' => 'Gruplara mesaj gönderebilir', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Özel mesajları okuyabilir', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Kendi özel mesajlarını düzenleyebilir', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Kendi klasöründen özel mesajları silebilir', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Özel mesajları iletebilir', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Özel mesajları e-posta ile yollayabilir', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Özel mesajları yazdırabilir', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Özel mesajlara dosya ekleyebilir', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Özel mesajlardaki dosyaları indirebilir', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Özel mesajlarda BBCode kullanabilir', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Özel mesajlarda ifadeler kullanabilir', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Özel mesajlarda [img] BBCode etiketi kullanabilir', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Özel mesajlarda [flash] BBCode etiketi kullanabilir', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'E-postalar gönderebilir', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Anlık mesajlar gönderebilir', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Flood kısıtlamasını yoksayabilir', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Çevrimiçi durumunu gizleyebilir', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Gizli çevrimiçi kullanıcıları görebilir', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Forumlarda arama yapabilir', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Forumu görüntüleyebilir', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Forumu okuyabilir', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Yeni başlıklar açabilir', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Başlıklara cevap verebilir', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Başlık/mesaj ikonlarını kullanabilir', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Duyurular gönderebilir', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Sabit başlıklar gönderebilir', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Anketler oluşturabilir', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Anketlere oy verebilir', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Var olan anketi değiştirebilir', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Dosyalar ekleyebilir', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Dosyaları indirebilir', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'İmzalar kullanabilir', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'BBCode kullanabilir', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'İfadeler kullanabilir', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => '[img] BBCode etiketi kullanabilir', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => '[flash] BBCode etiketi kullanabilir', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Kendi mesajlarını düzenleyebilir', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Kendi mesajlarını silebilir', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Kendi mesajlarını kilitleyebilir', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Başlıkları darbeleyebilir', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Mesajları bildirebilir', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Foruma abone olabilir', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Başlıkları yazdırabilir', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Başlıkları e-posta ile gönderebilir', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Forumda arama yapabilir', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Flood kısıtlamasını yoksayabilir', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Mesaj sayacı artışı<br /><em>Not: Bu ayar sadece yeni mesajları etkiler.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Onaylama olmadan mesaj gönderebilir', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Mesajları düzenleyebilir', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Mesajları silebilir', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Mesajları onaylayabilir', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Bildirileri kapatabilir ve silebilir', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Mesaj yazarını değiştirebilir', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Başlıkları taşıyabilir', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Başlıkları kilitleyebilir', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Başlıkları ayırabilir', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Başlıkları birleştirebilir', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Mesaj bilgilerini görebilir', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Uyarılar verebilir<br /><em>Bu ayar sadece global olarak tanımlanmıştır. Forum temelli değildir.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Yasaklamaları yönetebilir<br /><em>Bu ayar sadece global olarak tanımlanmıştır. Forum temelli değildir.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Mesaj panosu ayarlarını değiştirebilir/güncellemeler için kontrol edebilir', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Sunucu/İletişim ayarlarını değiştirebilir', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Jabber ayarlarını değiştirebilir', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Php ayarlarını görebilir', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Forumları yönetebilir', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Yeni forumlar ekleyebilir', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Forumları silebilir', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Forumları budayabilir', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Başlık/mesaj ikonlarını ve ifadelerini değiştirebilir', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Kelime sansürlerini değiştirebilir', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'BBCode etiketleri tanımlayabilir', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Eklenti ile ilgili ayarları değiştirebilir', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Kullanıcıları yönetebilir<br /><em>Bu ayrıca kullanıcı tarayıcılarını kimler çevrimiçi listesinde görüntülenmesini de içerir.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Kullanıcıları silebilir/budayabilir', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Grupları yönetebilir', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Yeni gruplar ekleyebilir', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Grupları silebilir', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Rütbeleri yönetebilir', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Özel profil alanlarını yönetebilir', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'İzin verilmemiş isimleri yönetebilir', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Yasaklamaları yönetebilir', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'İzin maskelerini görebilir', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Başlı başına gruplar için izinleri değiştirebilir', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Başlı başına kullanıcılar için izinleri değiştirebilir', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Forum izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Moderatör izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Yönetici izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Kullanıcı izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Rolleri yönetebilir', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Diğerlerinin izinlerini kullanabilir', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Stilleri yönetebilir', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Kayıtları görebilir', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Kayıtları silebilir', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Modülleri yönetebilir', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Dil paketlerini yönetebilir', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Toplu e-posta gönderebilir', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Botları yönetebilir', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Bildiri/yasaklama sebeplerini yönetebilir', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Veritabanını yedekleyebilir/geri yükleyebilir', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Arama uygulamalarını ve ayarlarını yönetebilir', 'cat' => 'misc'),
));

?>