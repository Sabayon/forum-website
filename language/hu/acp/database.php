<?php
/**
*
* acp_database [Hungarian]
*
* @package language
* @version $Id: database.php 197 2009-10-18 20:12:18Z fberci $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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
	'ACP_BACKUP_EXPLAIN'	=> 'Itt a phpBB-vel kapcsolatos adatokat tudod kimenteni. A létrejövő csomagot tetszőlegesen eltárolhatod a <samp>store/</samp> könyvtárban vagy közvetlenül letöltheted. A szerver konfigurációdtól függően az állományt különböző módokon tömörítheted.',
	'ACP_RESTORE_EXPLAIN'	=> 'Ez a funkció a phpBB összes tábláját visszaállítja egy elmentett állományból. Ha a szervered támogatja, használható gzip-pel vagy bzip2-vel tömörített szöveges állomány, ezek automatikusan kitömörítésre kerülnek. <strong>FIGYELEM:</strong> Ezzel felülírásra kerül minden jelenlegi adat. Mivel a visszaállítás eltarthat egy ideig, kérünk, ne menj el erről az oldalról, amíg be nem fejeződik. A kimentések tárolási helye a <samp>store/</samp> könyvtár, az itt lévő állományokról a phpBB feltételezi, hogy a kimentés funkciójával készültek. Nem a beépített rendszerrel készített kimentés visszaállítása vagy működni fog, vagy nem.',

	'BACKUP_DELETE'		=> 'A kimentés állomány sikeresen törlésre került.',
	'BACKUP_INVALID'	=> 'A kiválasztott kimentés állomány érvénytelen.',
	'BACKUP_OPTIONS'	=> 'Kimentés beállítások',
	'BACKUP_SUCCESS'	=> 'A kimentés állomány sikeresen létrehozásra került.',
	'BACKUP_TYPE'		=> 'Kimentés típusa',

	'DATABASE'			=> 'Adatbázis eszközök',
	'DATA_ONLY'			=> 'Csak adat',
	'DELETE_BACKUP'		=> 'Kimentés törlése',
	'DELETE_SELECTED_BACKUP'	=> 'Biztosan törölni akarod a kiválasztott kimentést?',
	'DESELECT_ALL'		=> 'Összes kiválasztásának megszüntetése',
	'DOWNLOAD_BACKUP'	=> 'Kimentés letöltése',

	'FILE_TYPE'			=> 'Állomány típusa',
	'FILE_WRITE_FAIL'	=> 'Az állományt nem sikerült elmenteni a tárolási könyvtárba.',
	'FULL_BACKUP'		=> 'Teljes',

	'RESTORE_FAILURE'		=> 'A kimentés állomány lehet, hogy megfertőzött.',
	'RESTORE_OPTIONS'		=> 'Visszaállítás beállítások',
	'RESTORE_SUCCESS'		=> 'Az adatbázis sikeresen visszaállításra került.<br /><br />A fórumod bizonyára visszatért a kimentés ideji állapotához.',

	'SELECT_ALL'			=> 'Összes kiválasztása',
	'SELECT_FILE'			=> 'Válassz egy állományt',
	'START_BACKUP'			=> 'Kimentés elkezdése',
	'START_RESTORE'			=> 'Visszaállítás elkezdése',
	'STORE_AND_DOWNLOAD'	=> 'Eltárolás és letöltés',
	'STORE_LOCAL'			=> 'Állomány eltárolása helyben',
	'STRUCTURE_ONLY'		=> 'Csak szerkezet',

	'TABLE_SELECT'		=> 'Táblák kiválasztása',
	'TABLE_SELECT_ERROR'=> 'Legalább egy táblát ki kell választanod.',
));

?>
