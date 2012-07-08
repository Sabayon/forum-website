<?php
/**
*
* acp_language [Hungarian]
*
* @package language
* @version $Id: language.php 197 2009-10-18 20:12:18Z fberci $
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Adminisztrátori nyelvi állományok',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Itt a nyelvi csomagokat telepítheted, illetve törölheted. Az alapértelmezett nyelvi csomag egy csillaggal (*) van megjelölve.',

	'EMAIL_FILES'			=> 'E-mail sablonok',

	'FILE_CONTENTS'				=> 'Állomány tartalma',
	'FILE_FROM_STORAGE'			=> 'Állomány a tároló mappából',

	'HELP_FILES'				=> 'Súgó állományok',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Telepített nyelvi csomagok',
	'INVALID_LANGUAGE_PACK'		=> 'A kiválasztott nyelvi csomag nem tűnik érvényesnek. Kérjük, ellenőrizd a nyelvi csomagot, és ha szükséges, töltsd fel újra.',
	'INVALID_UPLOAD_METHOD'		=> 'A kiválasztott feltöltési mód nem érvényes, kérünk, válassz másik módot.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'A nyelvi adatok sikeresen frissítésre kerültek.',
	'LANGUAGE_ENTRIES'					=> 'Nyelvi elemek',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Itt megváltoztathatod a jelenlegi nyelvi csomag bejegyzéseket vagy a még nem lefordítottakat.<br /><strong>Megjegyzés:</strong> Miután módosítottad a nyelvi állományt, a változtatások egy külön mappában kerülnek majd tárolásra, ahonnan letöltheted a csomagot. Amíg az eredeti nyelvi állományokat nem helyettesíted az újakkal (azzal, hogy feltöltöd a tárhelyedre), a változtatások a felhasználóid számára nem lesznek érzékelhetők.',
	'LANGUAGE_FILES'					=> 'Nyelvi állományok',
	'LANGUAGE_KEY'						=> 'Nyelvi kulcs',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ez a nyelvi csomag már telepítve van.',
	'LANGUAGE_PACK_DELETED'				=> 'A <strong>%s</strong> nyelvi csomag sikeresen eltávolításra került. Az ezt a nyelvet használó felhasználók nyelve visszaállításra került a fórum alapértelmezett nyelvére.',
	'LANGUAGE_PACK_DETAILS'				=> 'Nyelvi csomag adatok',
	'LANGUAGE_PACK_INSTALLED'			=> 'A <strong>%s</strong> nyelvi csomag sikeresen telepítésre került.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalizált név',
	'LANGUAGE_PACK_NAME'				=> 'Név',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'A kiválasztott nyelvi csomag nem létezik.',
	'LANGUAGE_PACK_USED_BY'				=> 'Használók száma (robotok beleértve)',
	'LANGUAGE_VARIABLE'					=> 'Nyelvi változó',
	'LANG_AUTHOR'						=> 'Nyelvi csomag szerzője',
	'LANG_ENGLISH_NAME'					=> 'Angol név',
	'LANG_ISO_CODE'						=> 'ISO kód',
	'LANG_LOCAL_NAME'					=> 'Lokalizált név',

	'MISSING_LANGUAGE_FILE'		=> 'Hiányzó nyelvi állomány: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Hiányzó nyelvi változók',
	'MODS_FILES'				=> 'MOD-ok nyelvi állományai',

	'NO_FILE_SELECTED'				=> 'Nem adtál meg nyelvi állományt.',
	'NO_LANG_ID'					=> 'Nem adtál meg nyelvi csomagot.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Az alapértelmezett nyelvi csomagot nem tudod eltávolítani.<br />Ha törölni szeretnéd ezt a nyelvi csomagot, először változtasd meg a fórum alapértelmezett nyelvét.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nincs telepítetlen nyelvi csomag.',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Törlés a tárolási mappából',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Letöltési formátum kiválasztása',
	'SUBMIT_AND_DOWNLOAD'		=> 'Állomány elküldése és letöltése',
	'SUBMIT_AND_UPLOAD'			=> 'Állomány elküldése és feltöltése',

	'THOSE_MISSING_LANG_FILES'			=> 'A következő nyelvi állományok hiányoznak a %s nyelvi könyvtárból:',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'A következő nyelvi változók hiányoznak a <strong>%s</strong> nyelvi csomagból:',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Telepítetlen nyelvi csomagok.',

	'UNABLE_TO_WRITE_FILE'		=> 'Az állományt nem sikerült kiírni a %s helyre.',
	'UPLOAD_COMPLETED'			=> 'A feltöltés sikeresen befejezésre került.',
	'UPLOAD_FAILED'				=> 'A feltöltés ismeretlen okokból nem volt sikeres. A megfelelő állományt helyettesítsd kézzel.',
	'UPLOAD_METHOD'				=> 'Feltöltés módja',
	'UPLOAD_SETTINGS'			=> 'Feltöltés beállítások',

	'WRONG_LANGUAGE_FILE'		=> 'A kiválasztott nyelvi állomány hibás.',
));

?>
