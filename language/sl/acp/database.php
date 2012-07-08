<?php
/**
*
* acp_database.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-11-27 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB, Legoless
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
	'FILE_WRITE_FAIL'	=> 'Ne morem pisati v shranjevalno mapo.',
	'ACP_BACKUP_EXPLAIN'	=> 'Tukaj lahko ustvarite varnostno kopijo vseh phpBB podatkov. Arhiv lahko shranite v vašo <samp>store/</samp> mapo ali pa ga takoj prenesete. Arhiv lahko tudi stisnete v več formatov (če seveda vaš server to podpira).',
	'ACP_RESTORE_EXPLAIN'	=> 'Naredili boste popolno obnovitev vseh phpBB tabel iz shranjene datoteke. Če veš server podpira gzip ali bzip2 stiskanje lahko uporabite tudi stisnjeno datoteko, saj se bo le-ta avtomatsko razširila. <strong>OPOZORILO</strong> To bo prepisalo vse obstoječe podatke. Obnovitev lahko traja kar nekaj časa, zato ostanite na tej strani dokler se proces ne zaključi. Varnostne kopije so shranjene v <samp>store/</samp> direktoriju. Za njih se domneva, da so bile generirane s pomočjo phpBB funkcije za varnostne kopije. Obnovitve varnostnih kopij, ki niso bile ustvarjene s to funkcijo lahko delajo ali ne.',
	'BACKUP_DELETE'	=> 'Varnostna kopija je bila uspešno izbrisana.',
	'BACKUP_INVALID'	=> 'Izbrana datoteka za varnostno kopijo je nepravilna.',
	'BACKUP_OPTIONS'	=> 'Opcije varnostne kopije',
	'BACKUP_SUCCESS'	=> 'Varnostna kopija je bila uspešno ustvarjena.',
	'BACKUP_TYPE'	=> 'Tip varnostne kopije',
	'DATABASE'	=> 'Pripomočki za delo z podatkovno bazo',
	'DATA_ONLY'	=> 'Samo podatke',
	'DELETE_BACKUP'	=> 'Izbriši varnostno kopijo',
	'DELETE_SELECTED_BACKUP'	=> 'Ste prepričani, da želite izbrisati izbrano varnostno kopijo?',
	'DESELECT_ALL'	=> 'Ne izberi nobenega',
	'DOWNLOAD_BACKUP'	=> 'Naloži varnostno kopijo',
	'FILE_TYPE'	=> 'Tip datoteke',
	'FULL_BACKUP'	=> 'Celotna',
	'RESTORE_FAILURE'	=> 'Varnostna kopija je mogoče poškodovana.',
	'RESTORE_OPTIONS'	=> 'Obnovi opcije',
	'RESTORE_SUCCESS'	=> 'Podatkovna baza je bila uspešno obnovljena.<br /><br />Seznam forumov naj bi bil v istem stanju kot ob času varnostne kopije.',
	'SELECT_ALL'	=> 'Izberi vse',
	'SELECT_FILE'	=> 'Izberi datoteko',
	'START_BACKUP'	=> 'Izdelaj varnostno kopijo',
	'START_RESTORE'	=> 'Začni obnovitev',
	'STORE_AND_DOWNLOAD'	=> 'Shrani in naloži',
	'STORE_LOCAL'	=> 'Shrani datoteke lokalno',
	'STRUCTURE_ONLY'	=> 'Samo strukturo',
	'TABLE_SELECT'	=> 'Izberi tabelo',
	'TABLE_SELECT_ERROR'	=> 'Izbrati morate vsaj eno tabelo.',
));

?>