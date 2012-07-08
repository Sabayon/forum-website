<?php
/**
*
* acp_database.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-05 - www.dea-portal.com
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Këtu mund të bëni një backup të të gjithë të dhënave të bordit tuaj phpBB. Ju mund të ruani arkivin e krijuar në dosjen <samp>store/</samp> ose t\'a shkarkoni menjëherë në kompjuterin tuaj. Në varësi të konfigurimit të serverit tuaj, ju mund të komresoni skedarin në disa formate.',
	'ACP_RESTORE_EXPLAIN'	=> 'Kjo do te bëjë një restaurim të plotë të të gjithë tabelave të phpBB nga një skedar i ruajtur. Nëse e mundëson serveri juaj, mund të përdoren arkivat e kompresuara gzip ose bzip2 të cilët do të dekompresohen automatikisht. <strong>KUJDES</strong> kjo do të mbivendosë çdo të dhënë ekzistuese. Ky proçes mund të zgjasë për një kohë të gjatë dhe ju lutemi të mos lëvizni nga kjo faqe deri kur të ketë mbaruar. Backup-et ruhen në dosjen <samp>store/</samp> dhe duhet të jenë gjeneruar nga funksioni backup i phpBB. Restaurimi i backup që nuk janë krijuar nga sistemi phpBB mund të funksionojnë ose jo.',
	
	'BACKUP_DELETE'		=> 'Skedari backup u fshi me sukses.',
	'BACKUP_INVALID'	=> 'Skedari i zgjedhur për t\'u bërë backup është i pavlefshëm.',
	'BACKUP_OPTIONS'	=> 'Opsionet e proçesit backup',
	'BACKUP_SUCCESS'	=> 'Skedari backup u krijua me sukses.',
	'BACKUP_TYPE'		=> 'Lloji i backup',
	
	'DATABASE'			=> 'Mundësitë e bazës së informacionit',
	'DATA_ONLY'			=> 'Vetëm të dhënat',
	'DELETE_BACKUP'		=> 'Fshi backup',
	'DELETE_SELECTED_BACKUP'	=> 'Jeni të sigurtë që doni të fshini backup të zgjedhur?',
	'DESELECT_ALL'		=> 'Mos zgjidh të gjitha',
	'DOWNLOAD_BACKUP'	=> 'Shkarko backup',
	
	'FILE_TYPE'			=> 'Lloji i skedarit',
	'FULL_BACKUP'		=> 'Komplet',
	
	'RESTORE_FAILURE'		=> 'Skedari backup mund të jetë i dëmtuar.',
	'RESTORE_OPTIONS'		=> 'Opsionet e restaurimit',
	'RESTORE_SUCCESS'		=> 'Baza e informacionit u restaurua me sukses.<br /><br />Bordi juaj duhet të jetë kthyer në gjendjen që ishte kur është krijuar backup.',
	
	'SELECT_ALL'			=> 'Zgjidh të gjitha',
	'SELECT_FILE'			=> 'Zgjidh një skedar',
	'START_BACKUP'			=> 'Fillo backup',
	'START_RESTORE'			=> 'Fillo restaurimin',
	'STORE_AND_DOWNLOAD'	=> 'Ruaj dhe shkarko',
	'STORE_LOCAL'			=> 'Ruaj skedarin lokalisht',
	'STRUCTURE_ONLY'		=> 'Vetëm strukturën',
	
	'TABLE_SELECT'		=> 'Zgjedhja e tabelave',
	'TABLE_SELECT_ERROR'=> 'Ju duhet të zgjidhni të paktën një tabelë.',
));

?>