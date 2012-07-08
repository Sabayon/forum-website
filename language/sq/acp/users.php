<?php
/**
*
* acp_users.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-07 - www.dea-portal.com
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
	'ADMIN_SIG_PREVIEW'		=> 'Parashikimi i firmës',
	'AT_LEAST_ONE_FOUNDER'	=> 'Ju nuk mund të ktheni krijuesin në përdorues normal. Duhet të jetë të paktën një krijues i aktivizuar për këtë bord. Nëse doni të ndryshoni statusin e këtij krijuesi, caktoni një përdorues tjetër si krijues.',
	
	'BAN_ALREADY_ENTERED'	=> 'Një përjashtim është bërë më parë. Lista e përjashtimeve nuk është e azhornuar.',
	'BAN_SUCCESSFUL'		=> 'Përjashtimi u bë me sukses.',
	
	'CANNOT_BAN_FOUNDER'			=> 'Nuk ju lejohet të përjashtoni llogaritë e krijuesve.',
	'CANNOT_BAN_YOURSELF'			=> 'Nuk ju lejohet të përjashtoni veten tuaj.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nuk ju lejohet të ç\'aktivizoni llogaritë e bot. Ju mund të ç\'aktivizoni bot nga faqja e bot.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nuk ju lejohet të ç\'aktivizoni llogaritë e krujuesve.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nuk ju lejohet të ç\'aktivizoni llogarinë tuaj.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nuk ju lejohet të detyroni riaktivizimin e llogarive të bot. Ju mund të aktivizoni bot nga faqja e bot.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nuk ju lejohet të detyroni riaktivizimin e llogarive të krijuesve.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nuk ju lejohet të detyroni riaktivizimin e llogarisë tuaj.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ju nuk mund të fshini llogarinë e përdoruesit vizitor.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Ju nuk mund të fshini llogarinë tuaj.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ju nuk mund të promovoni përdoruesit e injoruar për të qënë krijues.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Në fillim duhet të aktivizoni përdoruesit për t\'i promovuar për të qënë krijues. Vetëm përdoruesit e aktivizuar mund të promovohen.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Ju duhet të specifikoni këtë vetëm nëse po ndryshoni adresën e-mail të përdoruesve.',
	
	'DELETE_POSTS'			=> 'Fshi postimet',
	'DELETE_USER'			=> 'Fshi përdorues',
	'DELETE_USER_EXPLAIN'	=> 'Ju lutemi të vini re që fshirja e një përdoruesi është hap final. Nuk ka kthim mbrapa.',
	
	'FORCE_REACTIVATION_SUCCESS'	=> 'Riaktivizimi u detyrua me sukses.',
	'FOUNDER'						=> 'Krijues',
	'FOUNDER_EXPLAIN'				=> 'Krijuesit kanë të gjitha të drejtat administrative dhe nuk mund të përjashtohen, fshihen ose ndryshohen asnjëherë nga antarë jo krijues.',
	
	'GROUP_APPROVE'					=> 'Aprovo antar',
	'GROUP_DEFAULT'					=> 'Bëj grupin të paracaktuar për antarin',
	'GROUP_DELETE'					=> 'Fshi antarin nga grupi',
	'GROUP_DEMOTE'					=> 'Shkarko liderin e grupit',
	'GROUP_PROMOTE'					=> 'Promovo për lider grupi',
	
	'IP_WHOIS_FOR'			=> 'IP kush është për %s',
	
	'LAST_ACTIVE'			=> 'Aktivizimi i fundit',
	
	'MOVE_POSTS_EXPLAIN'	=> 'Ju lutemi të zgjidhni një forum në të cilin doni të lëvizni të gjithë postimet që ka bërë ky përdorues.',
	
	'NO_SPECIAL_RANK'		=> 'Asnjë rang special i dhënë',
	'NOT_MANAGE_FOUNDER'	=> 'Ju u munduat të menaxhoni një përdorues me statusin e krijuesit. Vetëm krijuesve u lejohet të menaxhojne krijues të tjerë.',
	
	'QUICK_TOOLS'			=> 'Opsionet e shpejta',
	
	'REGISTERED'			=> 'I regjistruar',
	'REGISTERED_IP'			=> 'Regjistruar nga IP',
	'RETAIN_POSTS'			=> 'Mbaj postimet',
	
	'SELECT_FORM'			=> 'Zgjidh mënyrën',
	'SELECT_USER'			=> 'Zgjidh përdorues',
	
	'USER_ADMIN'					=> 'Administrimi i përdoruesit',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivizo llogari',
	'USER_ADMIN_ACTIVATED'			=> 'Përdoruesi u aktivizua me sukses.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatari u fshi me sukses nga llogaria e përdoruesit.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Përjashto sipas e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Adresa e-mail është përjashtuar.',
	'USER_ADMIN_BAN_IP'				=> 'Përjashto sipas IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP është përjashtuar',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Pseudonimi është përjashtuar',
	'USER_ADMIN_BAN_USER'			=> 'Përjashto sipas pseudonimit',
	'USER_ADMIN_DEACTIVATE'			=> 'Ç\'aktivizo llogari',
	'USER_ADMIN_DEACTIVED'			=> 'Përdoruesi u ç\'aktivizua me sukses.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Fshi të gjitha shtojcat',
	'USER_ADMIN_DEL_AVATAR'			=> 'Fshi avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Fshi të gjitha postimet',
	'USER_ADMIN_DEL_SIG'			=> 'Fshi firmën',
	'USER_ADMIN_EXPLAIN'			=> 'Këtu ju mund të ndryshoni informacionin e përdoruesve tuaj dhe disa opsione specifike.',
	'USER_ADMIN_FORCE'				=> 'Detyro riaktivizimin',
	'USER_ADMIN_MOVE_POSTS'			=> 'Lëviz gjithë postimet',
	'USER_ADMIN_SIG_REMOVED'		=> 'Firma u fshi me sukses nga llogaria e përdoruesit.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Të gjitha shtojcat e bëra nga përdoruesi, u fshinë me sukses.',
	'USER_AVATAR_UPDATED'			=> 'Detajet e avatarit të përdoruesit u azhornuan me sukses.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Fushat e personalizuara të profilit',
	'USER_DELETED'					=> 'Përdoruesi u fshi me sukses.',
	'USER_GROUP_ADD'				=> 'Shto përdoruesin në grup',
	'USER_GROUP_NORMAL'				=> 'Grupet e paracaktuara në të cilat përdoruesi është antar',
	'USER_GROUP_PENDING'			=> 'Përdoruesi i grupit është në pritje',
	'USER_GROUP_SPECIAL'			=> 'Grupet e përcaktuara në të cilat përdoruesi është antar',
	'USER_NO_ATTACHMENTS'			=> 'Nuk ke skedarë të shtuar për të shfaqur.',
	'USER_OVERVIEW_UPDATED'			=> 'Detajet e përdoruesit u azhornuan.',
	'USER_POSTS_DELETED'			=> 'Të gjitha postimet e bëra nga ky përdorues u fshinë me sukses.',
	'USER_POSTS_MOVED'				=> 'Postimet e përdoruesve u lëvizën ne forumin e destinuar me sukses.',
	'USER_PREFS_UPDATED'			=> 'Preferencat e përdoruesit u azhornuan.',
	'USER_PROFILE'					=> 'Profili i përdoruesit',
	'USER_PROFILE_UPDATED'			=> 'Profili i përdoruesit u azhornua.',
	'USER_RANK'						=> 'Rangu i përdoruesit',
	'USER_RANK_UPDATED'				=> 'Rangu i përdoruesit u azhornua.',
	'USER_SIG_UPDATED'				=> 'Firma e përdoruesit u azhornua me sukses.',
	'USER_TOOLS'					=> 'Opsionet bazë',
));

?>