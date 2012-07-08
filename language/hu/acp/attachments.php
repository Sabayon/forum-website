<?php
/**
*
* acp_attachments [Hungarian]
*
* @package language
* @version $Id: attachments.php 197 2009-10-18 20:12:18Z fberci $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Itt a csatolmányok főbb beállításait adhatod meg, valamint a speciális kategóriák egyedi opcióit módosíthatod.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Itt felvehetsz, illetve törölheted, módosíthatod, vagy kikapcsolhatod a kiterjesztéscsoportokat. Ezen felül lehetőséged van a kiterjesztéscsoportokhoz speciális kategóriát rendelni, vagy megadni egy feltöltési ikont, amely minden a csoporthoz tartozó csatolmány előtt meg fog jelenni.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Itt az engedélyezett kiterjesztéseket kezelheted. Egy kiterjesztés aktiválásához használd a kiterjesztéscsoportok kezelése részt. Határozottan tanácsoljuk, hogy ne engedélyezz szkript kiterjesztéseket (mint például <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, és így tovább…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Itt az „árvává” vált állományokat láthatod. Ilyen legtöbbször akkor keletkezik, ha egy felhasználó csatol egy állományt, de a hozzászólást végül nem küldi el. Ezeket az állományokat törölheted, vagy hozzácsatolhatod egy létező hozzászóláshoz. Ez utóbbihoz szükség van a hozzászólás azonosítójára, amit neked kell megállapítanod. Ezzel a már feltöltött csatolmány hozzárendelésre kerül a megadott hozzászóláshoz.',
	'ADD_EXTENSION'						=> 'Kiterjesztés hozzáadása',
	'ADD_EXTENSION_GROUP'				=> 'Kiterjesztéscsoport hozzáadása',
	'ADMIN_UPLOAD_ERROR'				=> 'Hiba történt az állomány csatolása közben: „%s”.',
	'ALLOWED_FORUMS'					=> 'Engedélyezett fórumok',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'A hozzárendelt kiterjesztésű állományokat az itt kijelölt fórumokba lehet majd küldeni.',
	'ALLOWED_IN_PM_POST'				=> 'Engedélyezés',
	'ALLOW_ATTACHMENTS'					=> 'Csatolmányok engedélyezése',
	'ALLOW_ALL_FORUMS'					=> 'Engedélyezés az összes fórumban',
	'ALLOW_IN_PM'						=> 'Engedélyezés privát üzenetben',
	'ALLOW_PM_ATTACHMENTS'				=> 'Csatolmányok engedélyezése privát üzenetben',
	'ALLOW_SELECTED_FORUMS'				=> 'Csak az alább kijelölt fórumokban',
	'ASSIGNED_EXTENSIONS'				=> 'Hozzárendelt kiterjesztések',
	'ASSIGNED_GROUP'					=> 'Hozzárendelt kiterjesztéscsoport',
	'ATTACH_EXTENSIONS_URL'				=> 'Kiterjesztések',
	'ATTACH_EXT_GROUPS_URL'				=> 'Kiterjesztéscsoportok',
	'ATTACH_ID'							=> 'Azonosító',
	'ATTACH_MAX_FILESIZE'				=> 'Maximum állományméret',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Legfeljebb ekkorák lehetnek az állományok. A 0 érték kikapcsolja a korlátozást.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximum állományméret privát üzenetnél',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Privát üzenethez csatolható legnagyobb állomány mérete. A 0 érték kikapcsolja a korlátozást.',
	'ATTACH_ORPHAN_URL'					=> 'Árva csatolmányok',
	'ATTACH_POST_ID'					=> 'Hozzászólás azonosító',
	'ATTACH_QUOTA'						=> 'Csatolmányok tárhelye',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Az egész fórumon a csatolmányok legfeljebb ekkora helyet foglalhatnak el összesen. A 0 érték kikapcsolja a korlátozást.',
	'ATTACH_TO_POST'					=> 'Állomány csatolása hozzászóláshoz',

	'CAT_FLASH_FILES'			=> 'Flash állományok',
	'CAT_IMAGES'				=> 'Képek',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime média állományok',
	'CAT_RM_FILES'				=> 'RealMedia média állományok',
	'CAT_WM_FILES'				=> 'Windows Media média állományok',
	'CHECK_CONTENT'				=> 'Csatolt állományok ellenőrzése',
	'CHECK_CONTENT_EXPLAIN'		=> 'Néhány böngésző rávehető, hogy a feltöltött állományokhoz helytelen MIME típust állapítson meg. Ezzel a beállítással az ennek okozására hajlamos állományok visszautasításra kerülnek.',
	'CREATE_GROUP'				=> 'Új csoport létrehozása',
	'CREATE_THUMBNAIL'			=> 'Kiskép készítése',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Minden lehetséges esetben készítsen kisképet.',

	'DEFINE_ALLOWED_IPS'			=> 'Engedélyezett IP-k/hosztnevek megadása',
	'DEFINE_DISALLOWED_IPS'			=> 'Nem engedélyezett IP-k/hosztnevek megadása',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Egynél több IP-címet vagy hosztnevet mindegyiket új sorba írva tudsz megadni. IP-cím tartomány megadásához használj kötőjelet (-), valamint használhatod a * jokerkaraktert.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Egyszerre több IP-címet is eltávolíthatsz az egered és a billentyűzeted a böngésződnek megfelelő kombinációjának használatával. A kizárt IP-címek kék háttérrel szerepelnek.',
	'DISPLAY_INLINED'				=> 'Képek megjelenítése közvetlenül a hozzászólásokban',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ha nemre van állítva, a kép csatolmányok linkként fognak megjelenni.',
	'DISPLAY_ORDER'					=> 'Csatolmányok megjelenítési sorrendje',
	'DISPLAY_ORDER_EXPLAIN'			=> 'A csatolmányok a feltöltés ideje szerint kerülnek rendezésre.',

	'EDIT_EXTENSION_GROUP'			=> 'Kiterjesztéscsoport szerkesztése',
	'EXCLUDE_ENTERED_IP'			=> 'Állítsd igenre, hogy a megadott IP/hosztnév kizárásra kerüljön.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'IP-cím kizárása az engedélyezett IP-k/hosztnevek közül',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'IP-cím kizárása a nem engedélyezett IP-k/hosztnevek közül',
	'EXTENSIONS_UPDATED'			=> 'A kiterjesztés sikeresen frissítésre került.',
	'EXTENSION_EXIST'				=> 'A %s kiterjesztés már létezik.',
	'EXTENSION_GROUP'				=> 'Kiterjesztéscsoport',
	'EXTENSION_GROUPS'				=> 'Kiterjesztéscsoportok',
	'EXTENSION_GROUP_DELETED'		=> 'A kiterjesztéscsoport sikeresen törlésre került.',
	'EXTENSION_GROUP_EXIST'			=> 'A %s kiterjesztéscsoport már létezik.',

	'GO_TO_EXTENSIONS'		=> 'Ugrás a kiterjesztések kezeléséhez',
	'GROUP_NAME'			=> 'Csoport neve',

	'IMAGE_LINK_SIZE'			=> 'Linkkép méret',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Ha a csatolt kép ennél nagyobb, akkor csak egy link lesz megjelenítve hozzá, ahelyett, hogy közvetlenül szerepelne a hozzászólásban. A funkció kikapcsolásához állítsd mindkét értéket 0-ra.',
	'IMAGICK_PATH'				=> 'Imagemagick elérési útvonal',
	'IMAGICK_PATH_EXPLAIN'		=> 'Teljes elérési útvonal az imagemagick konvertáló alkalmazáshoz, pl. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum csatolható állományok száma hozzászólásonként',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum csatolható állományok száma privát üzenetenként',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum állományméret',
	'MAX_IMAGE_SIZE'				=> 'Maximum képméret',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Legfeljebb ekkorák lehetnek a kép csatolmányok. Az ellenőrzés kikapcsolásához állítsd mindkét értéket 0-ra.',
	'MAX_THUMB_WIDTH'				=> 'Maximum kiskép szélesség pixelben',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generált kiskép nem fogja túllépni az itt megadott szélességet.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum kiskép állományméret',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ennél kisebb képeknél nem lesz kiskép készítve.',
	'MODE_INLINE'					=> 'Közvetlen',
	'MODE_PHYSICAL'					=> 'Átirányítás az állományhoz',

	'NOT_ALLOWED_IN_PM'			=> 'Csak hozzászólásokban engedélyezett',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nem engedélyezett',
	'NOT_ASSIGNED'				=> 'Nincs hozzárendelve',
	'NO_EXT_GROUP'				=> 'Nincs',
	'NO_EXT_GROUP_NAME'			=> 'A csoport neve nem lett megadva.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nem lett megadva kiterjesztéscsoport.',
	'NO_FILE_CAT'				=> 'Nincs',
	'NO_IMAGE'					=> 'Nincs kép',
	'NO_THUMBNAIL_SUPPORT'		=> 'A kisképek készítéséhez szükséges függőségek nem elérhetők. A funkció működéséhez vagy elérhetőnek kell lennie a GD kiterjesztésnek, vagy kell lennie egy imagemagick alkalmazásnak. Egyik sem található.',
	'NO_UPLOAD_DIR'				=> 'A megadott feltöltési könyvtár nem létezik.',
	'NO_WRITE_UPLOAD'			=> 'A megadott feltöltési könyvtár nem írható. Kérjük, módosítsd a könyvtár jogosultságait, hogy a webszerver tudjon írni bele.',

	'ONLY_ALLOWED_IN_PM'	=> 'Csak privát üzenetekben engedélyezett',
	'ORDER_ALLOW_DENY'		=> 'Engedélyezettek',
	'ORDER_DENY_ALLOW'		=> 'Tiltottak',

	'REMOVE_ALLOWED_IPS'		=> '<em>Engedélyezett</em> IP-k/hosztnevek eltávolítása vagy kizárásuk megszüntetése',
	'REMOVE_DISALLOWED_IPS'		=> '<em>Nem engedélyezett</em> IP-k/hosztnevek eltávolítása vagy kizárásuk megszüntetése',

	'SEARCH_IMAGICK'				=> 'Imagemagick keresése',
	'SECURE_ALLOW_DENY'				=> 'Engedélyezettek/tiltottak listája',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Hogyan viselkedjen az engedélyezettek/tiltottak listája, ha be van kapcsolva a biztonságos letöltések funkció. Ha engedélyezettekre van állítva, akkor ún. <strong>fehérlistaként</strong> fog működni (csak azok tölthetnek le, akik szerepelnek a listában), ha tiltottakra, <strong>feketelistaként</strong>.',
	'SECURE_DOWNLOADS'				=> 'Biztonságos letöltések bekapcsolása',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Ha bekapcsolod ezt a funkciót, a csatolmányok letöltésének lehetősége csak a meghatározott IP-kre/hosztnevekre korlátozódik.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'A biztonságos letöltések funkció nincs bekapcsolva. Az alábbi beállítások csak a funkció bekapcsolása után kerülnek alkalmazásra.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Az IP-cím lista sikeresen frissítésre került.',
	'SECURE_EMPTY_REFERRER'			=> 'Üres referrer engedélyezése',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'A biztonságos letöltések funkció a referrerökön alapszik. Szeretnéd azok számára is engedélyezni a letöltést, akik nem adják meg a referrert?',
	'SETTINGS_CAT_IMAGES'			=> 'Képkategória beállítások',
	'SPECIAL_CATEGORY'				=> 'Speciális kategória',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'A speciális kategóriák a hozzászólásokban való megjelenítési módban különböznek.',
	'SUCCESSFULLY_UPLOADED'			=> 'Sikeresen feltöltésre került.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'A kiterjesztéscsoport sikeresen felvételre került.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'A kiterjesztéscsoport sikeresen frissítésre került.',

	'UPLOADING_FILES'				=> 'Állományok feltölétse',
	'UPLOADING_FILE_TO'				=> '„%1$s” állomány feltöltése a %2$d azonosítójú hozzászóláshoz…',
	'UPLOAD_DENIED_FORUM'			=> 'Nincs jogosultságod állományt feltölteni a „%s” fórumba.',
	'UPLOAD_DIR'					=> 'Feltöltési könyvtár',
	'UPLOAD_DIR_EXPLAIN'			=> 'A csatolmányok tárolási helye. Kérjük, vedd figyelembe, hogy ha megváltoztatod ezt a könyvtárat, miközben már vannak feltöltött csatolmányok, ezeket az állományokat kézzel kell átmásolnod az új helyre.',
	'UPLOAD_ICON'					=> 'Feltöltési ikon',
	'UPLOAD_NOT_DIR'				=> 'A megadott feltöltési hely úgy tűnik, nem könyvtár.',
));

?>
