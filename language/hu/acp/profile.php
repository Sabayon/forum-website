<?php
/**
*
* acp_profile [Hungarian]
*
* @package language
* @version $Id: profile.php 197 2009-10-18 20:12:18Z fberci $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Az egyedi profil mező sikeresen létrehozásra került.',
	'ALPHA_ONLY'			=> 'Csak alfanumerikus',
	'ALPHA_SPACERS'			=> 'Alfanumerikus és térköz',
	'ALWAYS_TODAY'			=> 'Mindig a jelenlegi dátum',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Itt add meg a választási lehetőségeket.',
	'BOOL_TYPE_EXPLAIN'		=> 'A mező típusa: vagy jelölőnégyzet (checkbox), vagy választógomb (radio button). A jelölőnégyzet csak akkor kerül megjelenítésre, ha az adott felhasználó bejelölte. Ebben az esetben a <strong>második</strong> nyelvi elem lesz használva. A választógombok az értéktől függetlenül megjelenítésre kerülnek.',

	'CHANGED_PROFILE_FIELD'		=> 'Az egyedi profil mező sikeresen megváltoztatásra került.',
	'CHARS_ANY'					=> 'Bármilyen karakter',
	'CHECKBOX'					=> 'Jelölőnégyzet',
	'COLUMNS'					=> 'oszlop',
	'CP_LANG_DEFAULT_VALUE'		=> 'Alapértelmezett érték',
	'CP_LANG_EXPLAIN'			=> 'Mező leírása',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'A felhasználóknak megjelenő leírás a mezőről.',
	'CP_LANG_NAME'				=> 'Felhasználóknak megjelenő mezőnév',
	'CP_LANG_OPTIONS'			=> 'Választási lehetőségek',
	'CREATE_NEW_FIELD'			=> 'Új mező létrehozása',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Legalább egy egyedi profil mező nem került még lefordításra. Kérjük, add meg a megfelelő információkat a „Lefordítás” linkre kattintva.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Alapértelmezett nyelv [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Az alapértelmezett nyelvhez tartozó nyelvi elemek nincsenek meg ehhez a profil mezőhöz.',
	'DEFAULT_VALUE'					=> 'Alapértelmezett érték',
	'DELETE_PROFILE_FIELD'			=> 'Profil mező törlése',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Biztosan törölni akarod ezt a profil mezőt?',
	'DISPLAY_AT_PROFILE'			=> 'Megjelenítés a felhasználói vezérlőpultban',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'A felhasználó a profil mező értékét a felhasználói vezérlőpultban módosíthatja.',
	'DISPLAY_AT_REGISTER'			=> 'Megjelenítés regisztrációkor',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Ha ez be van állítva, a mező megjelenítésre kerül a regisztrációkor.',
	'DISPLAY_ON_VT'					=> 'Megjelenítés a témákban',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Ha ez be van állítva, a mező megjelenítésre kerül a témákban, a hozzászólások melleti mini profilban.',
	'DISPLAY_PROFILE_FIELD'			=> 'Profil mező nyilvános megjelenítése',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'A profil mező az összes, a terhelés beállításokban megadott helyen megjelenítésre kerül. Ha nemre állítod, nem fog megjelenni a téma oldalakon, a profilban és a taglistában.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Add meg a választási lehetőségeket, mindegyik lehetőséget külön sorba írd.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Kérjük, vedd figyelembe, hogy megváltoztathatod a jelenlegi lehetőségek szövegét, és újakat is hozzáadhatsz a lista végére. A már meglévők közé nem tanácsos új lehetőségeket felvenni, mivel ez azt eredményezheti, hogy a felhasználókhoz a változtatás után rossz lehetőség lesz hozzárendelve. Ez akkor is előfordulhat, ha a lista közepéből távolítasz el elemeket. Ha a végéről törölsz lehetőségeket, akkor a jelenleg ezt kiválasztott felhasználóknak az alapértelmezett érték kerül beállításra.',
	'EMPTY_FIELD_IDENT'				=> 'A mezőazonosító üres.',
	'EMPTY_USER_FIELD_NAME'			=> 'Kérünk, add meg a mező nevét.',
	'ENTRIES'						=> 'Választási lehetőségek',
	'EVERYTHING_OK'					=> 'Minden rendben',

	'FIELD_BOOL'				=> 'Logikai (igen/nem)',
	'FIELD_DATE'				=> 'Dátum',
	'FIELD_DESCRIPTION'			=> 'Mező leírása',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'A felhasználónak megjelenő leírás a mezőről.',
	'FIELD_DROPDOWN'			=> 'Lenyíló lista',
	'FIELD_IDENT'				=> 'Mezőazonosító',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'A kiválasztott mezőazonosító már létezik. Kérünk, válassz másikat.',
	'FIELD_IDENT_EXPLAIN'		=> 'A mezőazonosító a profil mező azonosítására való az adatbázisban és a sablonokban.',
	'FIELD_INT'					=> 'Szám',
	'FIELD_LENGTH'				=> 'Űrlap mező hossza',
	'FIELD_NOT_FOUND'			=> 'A profil mező nem található.',
	'FIELD_STRING'				=> 'Sima szövegmező',
	'FIELD_TEXT'				=> 'Szövegdoboz',
	'FIELD_TYPE'				=> 'Mező típusa',
	'FIELD_TYPE_EXPLAIN'		=> 'A mező típusát később nem tudod megváltoztatni.',
	'FIELD_VALIDATION'			=> 'Érvényesítés feltétel',
	'FIRST_OPTION'				=> 'Első lehetőség',

	'HIDE_PROFILE_FIELD'			=> 'Profil mező elrejtése',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'A profil mező elrejtése az adott felhasználón, az adminisztrátoron és a moderátorokon kívül mindenki számára. Ha a megjelenítés a felhasználói vezérlőpultban beállítás nemre van állítva, a felhasználó nem láthatja és nem is változtathatja meg a mező értékét, ez esetben az értékét csak egy adminisztrátor módosíthatja.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'A mezőazonosító csak latin kisbetűket (a-z) és alulvonást (_) tartalmazhat.',
	'INVALID_FIELD_IDENT_LEN'	=> 'A mezőazonosító csak 17 karakter hosszú lehet.',
	'ISO_LANGUAGE'				=> 'Nyelv [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Nyelvspecifikus beállítások [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maximum karakterszám',
	'MAX_FIELD_NUMBER'		=> 'Legnagyobb megengedett szám',
	'MIN_FIELD_CHARS'		=> 'Minimum karakterszám',
	'MIN_FIELD_NUMBER'		=> 'Legkisebb megengedett szám',

	'NO_FIELD_ENTRIES'			=> 'Nem adtál meg választási lehetőségeket.',
	'NO_FIELD_ID'				=> 'Nem adtad meg a mezőazonosítót.',
	'NO_FIELD_TYPE'				=> 'Nem adtad meg a mező típusát.',
	'NO_VALUE_OPTION'			=> 'Nem kitöltött értékű lehetőség',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Ez a lehetőség olyan, mintha a mező nem lenne kitöltve. Ha a mező kötelező, és a felhasználó ezt a lehetőséget választotta ki, hibaüzenetet fog kapni.',
	'NUMBERS_ONLY'				=> 'Csak számok (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Alapbeállítások',
	'PROFILE_FIELD_ACTIVATED'	=> 'A profil mező sikeresen aktiválásra került.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'A profil mező sikeresen deaktiválásra került.',
	'PROFILE_LANG_OPTIONS'		=> 'Nyelvspecifikus beállítások',
	'PROFILE_TYPE_OPTIONS'		=> 'Mezőtípus-specifikus beállítások',

	'RADIO_BUTTONS'				=> 'Választógomb',
	'REMOVED_PROFILE_FIELD'		=> 'A profil mező sikeresen törlésre került.',
	'REQUIRED_FIELD'			=> 'Kötelező mező',
	'REQUIRED_FIELD_EXPLAIN'	=> 'A felhasználóknak kötelezően ki kell tölteniük a mezőt, vagy ki kell választaniuk egy értéket. Amennyiben a megjelenítés regisztrációkor ki van kapcsolva, a mezőt csak a profil szerkesztésekor kell kitölteni.',
	'ROWS'						=> 'sor',

	'SAVE'							=> 'Elmentés',
	'SECOND_OPTION'					=> 'Második lehetőség',
	'STEP_1_EXPLAIN_CREATE'			=> 'Itt a létrehozandó profil mező alapvető paramétereit adhatod meg. Ezek az információk szükségesek a második lépéshez, ahol további beállításokat adhatsz meg.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Itt a profil mező alapvető paramétereit változtathatod meg. A releváns beállítások ez alapján a második lépésben újrakalkulálásra kerülnek.',
	'STEP_1_TITLE_CREATE'			=> 'Profil mező létrehozása',
	'STEP_1_TITLE_EDIT'				=> 'Profil mező szerkesztése',
	'STEP_2_EXPLAIN_CREATE'			=> 'Itt néhány általános beállítást adhatsz meg.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Itt néhány általános beállítást adhatsz meg.<br /><strong>Kérjük, vedd figyelembe, hogy a profil mezőn végrehajtott változtatások nem lesznek hatással a felhasználók által már kitöltött mezőkre.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Mezőtípus-specifikus beállítások',
	'STEP_2_TITLE_EDIT'				=> 'Mezőtípus-specifikus beállítások',
	'STEP_3_EXPLAIN_CREATE'			=> 'Mivel a fórumon több nyelv is telepítve van, a fennmaradó nyelvi elemeket is meg kell adnod. A profil mező csak az alapértelmezett nyelvvel is működni fog, a fennmaradó nyelvi elemeket később is kitöltheted.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Mivel a fórumon több nyelv is telepítve van, most megváltoztathatod a többi nyelvi elemet is. A profil mező csak az alapértelmezett nyelvvel is működni fog.',
	'STEP_3_TITLE_CREATE'			=> 'Fennmaradó nyelvi meghatározások',
	'STEP_3_TITLE_EDIT'				=> 'Nyelvi meghatározások',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Ez az érték fog alapból megjelenni. Hagyd üresen, ha azt szeretnéd, hogy a mező alapból üres legyen.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Ez az érték fog alapból megjelenni. Hagyd üresen, ha azt szeretnéd, hogy a mező alapból üres legyen.',
	'TRANSLATE'						=> 'Lefordítás',

	'USER_FIELD_NAME'	=> 'Felhasználóknak megjelenő mezőnév',

	'VISIBILITY_OPTION'				=> 'Láthatóság',
));

?>
