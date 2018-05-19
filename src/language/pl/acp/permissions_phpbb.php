<?php
/**
*
* acp_permissions_phpbb (Zestaw uprawnień phpBB) [Polski]
*
* @package language
* @version $Id: permissions_phpbb.php 9686 2009-09-27 LEW21 $
* @copyright (c) 2006 - 2009 phpBB3.PL Group
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

// INFORMACJA
//
// Wszystkie pliki językowe powinny używać kodowania UTF-8 i nie powinny zawierać znaku BOM.
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
		'actions'		=> 'Akcje',
		'content'		=> 'Zawartość',
		'forums'		=> 'Działy',
		'misc'			=> 'Różne',
		'permissions'	=> 'Uprawnienia',
		'pm'			=> 'Prywatne wiadomości',
		'polls'			=> 'Ankiety',
		'post'			=> 'Pisanie postów',
		'post_actions'	=> 'Akcje na postach',
		'posting'		=> 'Pisanie',
		'profile'		=> 'Profil',
		'settings'		=> 'Ustawienia',
		'topic_actions'	=> 'Akcje na wątkach',
		'user_group'	=> 'Użytkownicy i grupy',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Uprawnienia użytkowania',
		'a_'			=> 'Uprawnienia administracyjne',
		'm_'			=> 'Uprawnienia moderacyjne',
		'f_'			=> 'Dostęp do działów',
		'global'		=> array(
			'm_'			=> 'Uprawnienia moderacyjne (globalne)',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Może oglądać profile, listę użytkowników i listę przeglądających forum/dział', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Może zmieniać nazwę użytkownika', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Może zmieniać hasło', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Może zmieniać adres e-mail', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Może zmieniać avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Może zmieniać domyślną grupę', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Może załączać pliki', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Może pobierać pliki', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Może zapisywać kopie robocze', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Może zablokować cenzora słów', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Może posiadać podpis', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Może wysyłać prywatne wiadomości', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Może wysyłać wiadomości do wielu użytkowników naraz', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Może wysyłać wiadomości do grup', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Może czytać prywatne wiadomości', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Może edytować swoje prywatne wiadomości', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Może usuwać prywatne wiadomości ze swoich folderów', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Może przesyłać dalej wiadomości', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Może przesyłać prywatne wiadomości e-mailem', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Może drukować prywatne wiadomości', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Może załączać pliki w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Może pobierać pliki załączone w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Może stosować BBCode w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Może stosować uśmieszki w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Może stosować BBCode [img] w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Może stosować BBCode [flash] w prywatnych wiadomościach', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Może wysyłać e-maile', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Może wysyłać natychmiastowe wiadomości', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Może ignorować limit wysłania jednej wiadomości w określonym czasie', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Może ukrywać swoją obecność na forum', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Może widzieć ukrytych użytkowników', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Może przeszukiwać forum', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Może widzieć dział', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Może czytać zawartość działu', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Może rozpoczynać nowe wątki', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Może odpowiadać w istniejących wątkach', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Może używać ikon postów', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Może tworzyć ogłoszenia', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Może przyklejać wątki', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Może tworzyć ankiety', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Może głosować w ankietach', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Może zmieniać swój głos', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Może załączać pliki', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Może pobierać załączone pliki', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Może używać podpisu', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Może stosować BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Może stosować uśmieszki', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Może stosować BBCode [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Może stosować BBCode [flash]', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Może edytować swoje posty', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Może usuwać swoje posty', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Może blokować swoje wątki', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Może przesuwać wątki w górę', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Może zgłaszać posty', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Może obserwować dział', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Może drukować wątki', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Może wysyłać e-mailem wątki', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Może przeszukiwać ten dział', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Może ignorować limit wysłania jednej wiadomości w określonym czasie', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Posty zwiększają licznik postów<br /><em>Zauważ, że to ustawienie dotyczy tylko nowych postów.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Może pisać bez konieczności akceptacji', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Może edytować posty', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Może usuwać posty', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Może akceptować i odrzucać posty', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Może zamykać i usuwać zgłoszenia', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Może zmieniać autora postu', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Może przenosić wątki', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Może blokować wątki', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Może dzielić wątki', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Może łączyć wątki', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Może oglądać szczegóły postu', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Może przyznawać ostrzeżenia<br /><em>To uprawnienie może zostać nadane tylko globalnie.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Może zarządzać banami<br /><em>To uprawnienie może zostać nadane tylko globalnie.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Może zmieniać ustawienia forum i sprawdzać, czy są jakieś aktualizacje', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Może zmieniać ustawienia serwera i komunikacji', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Może zmieniać ustawienia Jabbera', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Może przeglądać ustawienia PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Może zarządzać działami', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Może dodawać nowe działy', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Może usuwać działy', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Może czyścić działy', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Może zmieniać ikony postów i uśmieszki', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Może zmieniać cenzora słów', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Może zarządzać dodatkowymi BBCode’ami', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Może zmieniać ustawienia załączników', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Może zarządzać użytkownikami<br /><em>To uprawnienie zawiera również prawo do widzenia identyfikatora przeglądarki na liście przeglądających forum.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Może usuwać użytkowników (również masowo)', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Może zarządzać grupami', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Może dodawać nowe grupy', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Może usuwać grupy', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Może zarządzać rangami', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Może zarządzać dodatkowymi polami profilu', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Może zarządzać zabronionymi nazwami', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Może zarządzać banami', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Może przeglądać uprawnienia', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Może zmieniać uprawnienia dla indywidualnych grup', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Może zmieniać uprawnienia dla indywidualnych użytkowników', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Może zmieniać uprawnienia dostępu do działów', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Może zmieniać uprawnienia moderacyjne', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Może zmieniać uprawnienia administracyjne', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Może zmieniać uprawnienia użytkowania', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Może zarządzać zestawami uprawnień', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Może używać cudzych uprawnień', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Może zarządzać stylami', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Może przeglądać logi', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Może czyścić logi', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Może zarządzać modułami', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Może zarządzać pakietami językowymi', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Może masowo wysyłać e-maile', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Może zarządzać botami', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Może zarządzać powodami zgłoszeń i odrzuceń', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Może robić i przywracać kopię zapasową bazy danych', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Może zarządzać indeksami wyszukiwarki i jej ustawieniami', 'cat' => 'misc'),
));

?>