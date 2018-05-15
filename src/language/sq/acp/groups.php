<?php
/**
*
* acp_groups.php [Albanian]
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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Nga ky panel ju mund të administroni të gjithë grupet e përdoruesve. Ju mund të fshini, krijoni dhe modifikoni grupet ekzistuese. Për më tepër, ju mund të zgjidhni drejtues grupesh, mund të zgjidhni ndërmjet statusit të grupit hapur/fshehur/mbyllur, gjithashtu mund të caktoni emrin dhe përshkrimin e grupit.',
	'ADD_USERS'						=> 'Shto përdorues',
	'ADD_USERS_EXPLAIN'				=> 'Këtu mund t\'i shtoni përdorues të rinj grupit. Mund të zgjidhni nëse ky grup bëhet i paracaktuar për përdoruesit e zgjedhur. Në këtë mënyrë mund t\'i caktoni edhe si lider grupi. Ju lutemi të shkruani çdo pseudonim në kryerradhë.',
	
	'COPY_PERMISSIONS'				=> 'Kopjo të drejtat nga',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Pasi të krijohet, grupi do të ketë te njëjtat të drejta me atë që do të zgjidhni këtu.',
	'CREATE_GROUP'					=> 'Krijo grup të ri',
	
	'GROUPS_NO_MEMBERS'				=> 'Ky grup nuk ka antarë',
	'GROUPS_NO_MODS'				=> 'Asnje lider grupi i caktuar',
	
	'GROUP_APPROVE'					=> 'Aprovo antar',
	'GROUP_APPROVED'				=> 'Antarë të aprovuar',
	'GROUP_AVATAR'					=> 'Avatari i grupit',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ky imazh do të shfaqet në Panelin e Kontrollit të Grupit.',
	'GROUP_CLOSED'					=> 'Mbyllur',
	'GROUP_COLOR'					=> 'Ngjyra e grupit',
	'GROUP_COLOR_EXPLAIN'			=> 'Cakton ngjyrën me të cilën shfaqen pseudonimet e antarëve; lini bosh për të paracaktuar.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Jeni i sigurt që doni të shtoni përdoruesin %1$s në grup?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Jeni i sigurt që doni të shtoni përdoruesit %1$s në grup?',
	'GROUP_CREATED'					=> 'Grupi u krijua me sukses.',
	'GROUP_DEFAULT'					=> 'Bëj grupin të paracaktuar për antar',
	'GROUP_DEFS_UPDATED'			=> 'Grup i paracaktuar u vendos për të gjithë antarët e zgjedhur.',
	'GROUP_DELETE'					=> 'Hiq antar nga grupi',
	'GROUP_DELETED'					=> 'Grupi u fshi dhe grupet e paracaktuar për përdoruesit u vendosen me sukses.',
	'GROUP_DEMOTE'					=> 'Shkarko liderin e grupit',
	'GROUP_DESC'					=> 'Përshkrimi i grupit',
	'GROUP_DETAILS'					=> 'Detajet e grupit',
	'GROUP_EDIT_EXPLAIN'			=> 'Këtu ju mund të modifikoni nje grup ekzistues. Ju mund t\'i ndryshoni emrin, përshkrimin dhe llojin (hapur, mbyllur, etj.). Gjithashtu ju mund të caktoni disa opsione për të gjithë grupin, si ngjyra, rangu, etj. Ndryshimet e bëra këtu mbivendosin opsionet e caktuara nga përdoruesit. Ju lutemi të vini re që antarët e grupit mund të mbivendosin opsionin e avatarit te grupit, ose ju mund të vendosni të drejtat e përshtatshme për përdoruesit.',
	'GROUP_ERR_USERS_EXIST'			=> 'Përdoruesit e zgjedhur, janë antarë të këtij grupi.',
	'GROUP_FOUNDER_MANAGE'			=> 'Menaxhim vetëm nga krijuesi',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'I lejohet menaxhimi i këtij grupi vetëm krijuesve. Përdoruesit që kanë të drejta mbi grupet mund të shohin këtë grup ashtu si antarët e grupit.',
	'GROUP_HIDDEN'					=> 'I fshehur',
	'GROUP_LANG'					=> 'Gjuha e grupit',
	'GROUP_LEAD'					=> 'Liderët e grupit',
	'GROUP_LEADERS_ADDED'			=> 'Liderë të rinj ju shtuan grupit me sukses.',
	'GROUP_LEGEND'					=> 'Shfaq grupin në legjendë',
	'GROUP_LIST'					=> 'Antarët e tanishëm',
	'GROUP_LIST_EXPLAIN'			=> 'Kjo është lista e plotë e të gjithë përdoruesve me antarësim në këtë grup. Ju mund të fshini antarë (përveçse në disa grupe speciale) ose të shtoni antarë të rinj.',
	'GROUP_MEMBERS'					=> 'Antarët e grupit',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Kjo është një listë e plotë e të gjithë antarëve të këtij grupi përdoruesish. Përmban seksione të ndarë për liderët, antarë ekzistues dhe në pritje. Që këtu ju mund të menaxhoni të gjitha aspektet e kujt ka antarësim në këtë grup dhe cili është roli i tyre. Për të hequr një lider duke e mbajtur në grup, përdor Shkarko dhe jo fshi. Në mënyrë të ngjashme mund të promovoni një antar ekzistues si lider.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limiti i mesazheve private në dosje për grupin',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ky opsion mbivendos limitin e mesazheve private në dosje caktuar nga përdoruesi. Një vlerë 0 do të thotë që limiti i caktuar nga përdoruesi do të përdoret.',
	'GROUP_MODS_ADDED'				=> 'Lider i ri grupi u shtua me sukses.',
	'GROUP_MODS_DEMOTED'			=> 'Liderët e grupit u shkarkuan me sukses.',
	'GROUP_MODS_PROMOTED'			=> 'Antarët e grupit u promovuan me sukses.',
	'GROUP_NAME'					=> 'Emri i grupit',
	'GROUP_NAME_TAKEN'				=> 'Emri i grupit që shkruat është në përdorim, ju lutemi të zgjidhni një tjetër.',
	'GROUP_OPEN'					=> 'I hapur',
	'GROUP_PENDING'					=> 'Antarë në pritje',
	'GROUP_MAX_RECIPIENTS'			=> 'Numri maksimal i marrësve për mesazhet private',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Numri maksimal i marrësve të lejuar në një mesazh privat. Nëse vendoset 0, do të përdoret opsioni gjeneral i bordit.',
	'GROUP_PROMOTE'					=> 'Promovo për lider grupi',
	'GROUP_RANK'					=> 'Rangu i grupit',
	'GROUP_RECEIVE_PM'				=> 'Grupi mund të marrë mesazhe private',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Vini re që grupet e fshehur nuk mund të marrin mesazhe private, si rrjedhoje e opsionit.',
	'GROUP_REQUEST'					=> 'Kërkesë',
	'GROUP_SETTINGS_SAVE'			=> 'Opsionet e grupit',
	'GROUP_TYPE'					=> 'Lloji i grupit',
	'GROUP_TYPE_EXPLAIN'			=> 'Kjo përcakton se cilët përdorues mund të bashkohen ose të shohin këtë grup.',
	'GROUP_UPDATED'					=> 'Preferencat e grupit u azhornuan me sukses.',
	
	'GROUP_USERS_ADDED'				=> 'Përdorues të rinj ju shtuan grupit me suskes.',
	'GROUP_USERS_EXIST'				=> 'Përdoruesit e zgjedhur janë antarë në grup.',
	'GROUP_USERS_REMOVE'			=> 'Përdoruesit u fshinë nga grupi dhe të tjera të paracaktuara u vendosën me sukses.',
	
	'MAKE_DEFAULT_FOR_ALL'	=> 'Bej grup të paracaktuar për çdo antar',
	'MEMBERS'				=> 'Antarët',
	
	'NO_GROUP'					=> 'Asnje grup i specifikuar.',
	'NO_GROUPS_CREATED'			=> 'Nuk është krijuar akoma ndonjë grup.',
	'NO_PERMISSIONS'			=> 'Mos kopjo të drejtat',
	'NO_USERS'					=> 'Ju nuk keni shkruar ndonjë përdorues.',
	'NO_USERS_ADDED'			=> 'Asnjë përdorues nuk ju shtua grupit.',
	'NO_VALID_USERS'			=> 'Ju nuk shkruat asnjë përdorues të vlefshëm për këtë veprim.',
	
	'SPECIAL_GROUPS'			=> 'Grupet e paracaktuar',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupet e paracaktuar janë grupe speciale. Ata nuk mund të fshihen ose të modifikohen menjëherë. Gjithsesi, ju mund të shtoni përdorues dhe mund të ndryshoni të drejtat bazë.',
	
	'TOTAL_MEMBERS'				=> 'Antarët',
	
	'USERS_APPROVED'				=> 'Përdoruesit u aprovuan me sukses.',
	'USER_DEFAULT'					=> 'Përdorues i paracaktuar',
	'USER_DEF_GROUPS'				=> 'Grupe të paracaktuara nga përdoruesit',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Këto janë grupe të krijuara nga ju ose nga administratorë të tjerë të këtij bordi. Ju mund të menaxhoni antarësimet, modifikoni të dhënat e grupeve ose edhe të fshini grupet.',
	'USER_GROUP_DEFAULT'			=> 'Vendos si grup të paracaktuar',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Nëse zgjidhni po, ky grup do të vendoset si i paracaktuar për antarët e rinj të shtuar.',
	'USER_GROUP_LEADER'				=> 'Cakto si lider grupi',
));

?>