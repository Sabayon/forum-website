<?php
/**
*
* groups.php [Shqip Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-25 - www.dea-portal.com
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
	'ALREADY_DEFAULT_GROUP'		=> 'Grupi i zgjedhur është tashmë grupi i paravendosur.',
	'ALREADY_IN_GROUP'			=> 'Ju tashmë jeni antarë i grupit të zgjedhur.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ju tashmë kërkuat të bashkoheni me grupin e zgjedhur.',
	
	'CANNOT_JOIN_GROUP'			=> 'Ju nuk mund të bashkoheni me këtë grup. Ju mund të bashkoheni vetëm me grupe të hapur ose të lirë.',
	'CANNOT_RESIGN_GROUP'		=> 'Ju nuk mund të dilni nga ky grup. Ju mund të dilni vetëm nga grupe të hapur ose të lirë.',
	'CHANGED_DEFAULT_GROUP'		=> 'Profili juaj i paravendosur, u ndërrua me sukses.',
	
	'GROUP_AVATAR'						=> 'Avatari grupit',
	'GROUP_CHANGE_DEFAULT'				=> 'Jeni të sigurtë që doni të ndryshoni antarsimin e paracaktuar në grupin “%s”?',
	'GROUP_CLOSED'						=> 'Mbyllur',
	'GROUP_DESC'						=> 'Përshkrimi i grupit',
	'GROUP_HIDDEN'						=> 'I fshehur',
	'GROUP_INFORMATION'					=> 'Informacion për grupin e përdoruesve',
	'GROUP_IS_CLOSED'					=> 'Ky është një grup i mbyllur, antarët e rinj mund të bashkohen vëtëm me ftesën e liderit të grupit.',
	'GROUP_IS_FREE'						=> 'Ky është një grup i hapur, të gjithë antarët e rinj janë te mirëpritur.',
	'GROUP_IS_HIDDEN'					=> 'Ky grup është i fshehur, vetëm antarët e ketij grupi mund të shohin antarësimin e tij.',
	'GROUP_IS_OPEN'						=> 'Ky grup është i hapur, antarët mund të aplikojnë për t\'u bashkuar.',
	'GROUP_IS_SPECIAL'					=> 'Ky grup është special. Grupet speciale manaxhohen nga Administratori i bordit.',
	'GROUP_JOIN'						=> 'Bashkohu me grupin.',
	'GROUP_JOIN_CONFIRM'				=> 'Jeni i sigurt që doni të bashkoheni me grupin e zgjedhur?',
	'GROUP_JOIN_PENDING'				=> 'Kërkesë për t\'u bashkuar me grupin.',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Jeni i sigurt që doni të bashkoheni me grupin e zgjedhur?',
	'GROUP_JOINED'						=> 'Bashkimi me grupin e zgjedhur u krye me suskes.',
	'GROUP_JOINED_PENDING'				=> 'Ju kërkuat antarësim në grup me sukses. Ju lutemi prisni që një lider i grupit të miratojë kërkesën tuaj.',
	'GROUP_LIST'						=> 'Menaxho përdoruesit',
	'GROUP_MEMBERS'						=> 'Antarët e grupit',
	'GROUP_NAME'						=> 'Emri i grupit',
	'GROUP_OPEN'						=> 'Hapur',
	'GROUP_RANK'						=> 'Klasifikimi i grupit',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Hiq dorë nga antarësimi.',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Jeni i sigurt që doni të hiqni dorë nga antarësimi për grupin e zgjedhur?',
	'GROUP_RESIGN_PENDING'				=> 'Hiq dorë nga kërkesa për antar grupi.',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Jeni i sigurt që doni të hiqni dorë nga kërkesa juaj për antarësim në grupin e zgjedhur?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Ju jeni larguar me sukses nga grupi i zgjedhur.',
	'GROUP_RESIGNED_PENDING'			=> 'Pritja për antarësim, u hoq nga grupi i zgjedhur me sukses.',
	'GROUP_TYPE'						=> 'Lloji i grupit',
	'GROUP_UNDISCLOSED'					=> 'Grup i fshehur',
	'FORUM_UNDISCLOSED'					=> 'Moderimi i forumeve të fshehur',
	
	'LOGIN_EXPLAIN_GROUP'	=> 'Ju duhet të identifikoheni që të shikoni detajet e grupit.',
	
	'NO_LEADERS'					=> 'Ju nuk jeni lider i ndonjë grupi.',
	'NOT_LEADER_OF_GROUP'			=> 'Veprimi i kërkuar nuk mund të bëhet sepse ju nuk jeni lider i grupit të zgjedhur.',
	'NOT_MEMBER_OF_GROUP'			=> 'Veprimi i kërkuar nuk mund të bëhet sepse ju nuk jeni antar i grupit të zgjedhur ose antarësimi juaj nuk është aprovuar akoma.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nuk ju lejohet të hiqni dorë nga grupi i paracaktuar.',
	
	'PRIMARY_GROUP'		=> 'Grupi parësor',
	
	'REMOVE_SELECTED'		=> 'Fshi të zgjedhurat',
	
	'USER_GROUP_CHANGE'			=> 'Nga grupi “%1$s” tek “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Shkarko liderin',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Jeni i sigurt që doni të shkarkoheni nga lider i grupeve të zgjedhura?',
	'USER_GROUP_DEMOTED'		=> 'Shkarkimi nga lider i grupit u bë me sukses.',
));

?>