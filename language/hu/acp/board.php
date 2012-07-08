<?php
/**
*
* acp_board [Hungarian]
*
* @package language
* @version $Id: board.php 198 2009-10-19 20:13:50Z fberci $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Itt a fórumod alapvető működését tudod meghatározni, adhatsz neki egy hozzáillő nevet és leírást, valamint többek között beállíthatod az alapértelmezett nyelvet és időzónát.',
	'CUSTOM_DATEFORMAT'				=> 'Egyéni…',
	'DEFAULT_DATE_FORMAT'			=> 'Dátum formátum',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A formátum megegyezik a PHP <code>date</code> függvényéjével.',
	'DEFAULT_LANGUAGE'				=> 'Alapértelmezett nyelv',
	'DEFAULT_STYLE'					=> 'Alapértelmezett megjelenés',
	'DISABLE_BOARD'					=> 'Fórum kikapcsolása',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ennek igenre állításával a fórum nem lesz elérhető a felhasználók számára. Egy rövid üzenetet is megadhatsz (legfeljebb 255 karakter), mely meg fog jelenni a felhasználóknak.',
	'OVERRIDE_STYLE'				=> 'Felhasználó megjelenésének felülírása',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Kicseréli a felhasználó megjelenését az alapértelmezettre.',
	'SITE_DESC'						=> 'Oldal leírása',
	'SITE_NAME'						=> 'Oldal neve',
	'SYSTEM_DST'					=> 'Nyári időszámítás érvényben',
	'SYSTEM_TIMEZONE'				=> 'Rendszer időzóna',
	'WARNINGS_EXPIRE'				=> 'Figyelmeztetés időtartama',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Ennyi nap elteltével jár le a felhasználó figyelmeztetése.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Itt ki- illetve bekapcsolhatod a fórum különböző funkcióit.',

	// Nem lenne jobb a bekapcsolás jobb az engedélyezés helyett?
	'ALLOW_ATTACHMENTS'			=> 'Csatolmányok engedélyezése',
 	'ALLOW_BIRTHDAYS'			=> 'Születésnapok engedélyezése',
 	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'A születésnapok megadási és a profilban való megjelenési lehetőségének engedélyezése. Kérjük, vedd figyelembe, hogy a születésnaposok főoldalon való megjelenítését a terhelés beállításoknál tudod be- ill. kikapcsolni.',
	'ALLOW_BOOKMARKS'			=> 'Kedvencek engedélyezése',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'A felhasználó eltárolhatja a kedvenc témáit.',
	'ALLOW_BBCODE'				=> 'BBCode engedélyezése',
	'ALLOW_FORUM_NOTIFY'		=> 'Fórumokra való feliratkozás engedélyezése',
	'ALLOW_NAME_CHANGE'			=> 'Felhasználónév-váltás engedélyezése',
	'ALLOW_NO_CENSORS'			=> 'Szócenzúra kikapcsolásának engedélyezése',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'A felhasználók ha, szeretnék, kikapcsolhatják az automatikus szócenzúrát a hozzászólásokban és a privát üzenetekben.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Csatolmányok engedélyezése privát üzenetekben',
	'ALLOW_PM_REPORT'			=> 'Privát üzenetek jelentésének engedélyezése a felhasználóknak',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Ha ez a lehetőség engedélyezve van, a felhasználók jelenthetik a fórum moderátorainak a nekik, ill. az általuk küldött privát üzeneteket. Ezek a privát üzenetek aztán láthatóak lesznek a moderátori vezérlőpultban.',
	'ALLOW_QUICK_REPLY'			=> 'Gyors válasz engedélyezése',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Itt tudod beállítani, hogy a fórumon be van-e kapcsolva a gyors válasz funkció. A bekapcsoláshoz nem elég csak ezt a beállítást igenre állítani, az egyes fórumoknál is meg kell ezt tenni.',
	'ALLOW_SIG'					=> 'Aláírás engedélyezése',
	'ALLOW_SIG_BBCODE'			=> 'BBCode engedélyezése aláírásban',
	'ALLOW_SIG_FLASH'			=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése aláírásban',
	'ALLOW_SIG_IMG'				=> '<code>[IMG]</code> BBCode címke használatának engedélyezése aláírásban',
	'ALLOW_SIG_LINKS'			=> 'Linkek használatának engedélyezése aláírásban',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ha nem engedélyezett, az <code>[URL]</code> BBCode címke nem használható, és az automatikus linkké alakítás ki van kapcsolva.',
	'ALLOW_SIG_SMILIES'			=> 'Emotikonok használatának engedélyezése az aláírásban',
	'ALLOW_SMILIES'				=> 'Emotikonok engedélyezése',
	'ALLOW_TOPIC_NOTIFY'		=> 'Témákra való feliratkozás engedélyezése',
	'BOARD_PM'					=> 'Privát üzenetek bekapcsolása',
	'BOARD_PM_EXPLAIN'			=> 'A privát üzenetküldő rendszer ki- vagy bekapcsolása az összes felhasználó számára.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Az avatarok általánosan kis, egyedi képek, melyeket a felhasználók magukhoz társítanak. A témák megtekintésénél általában a felhasználónév alatt jelennek meg a használt megjelenéstől függően. Ezen az oldalon meghatározhatod, hogy a felhasználók milyen módon adhatják meg az avatarukat. Kérjük, vedd figyelembe, hogy az avatarok feltöltésének működéséhez az alább megadott könyvtárnak léteznie kell, és meg kell győződnöd róla, hogy írható a webszerver által. Kérjük, azt is vedd figyelembe, hogy a maximális állomány méretek csak a feltöltött avatarokra vonatkoznak, a kívülről linkeltekre nem.',

	'ALLOW_AVATARS'					=> 'Avatarok bekapcsolása',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Avatarok használatának engedélyezése általánosságban.<br />Amikor kikapcsolod az avatar funkciót vagy az egyes módon feltöltött avatar képeket, az érintett avatarok nem jelennek meg többet, de a felhasználók továbbra is le tudják tölteni a saját avatarukat a felhasználói vezérlőpultból.',
	'ALLOW_LOCAL'					=> 'Avatar galéria bekapcsolása',
	'ALLOW_REMOTE'					=> 'Külső avatarok engedélyezése',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Olyan avatarok, melyek egy másik weboldalról vannak linkelve.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Avatar feltöltésének engedélyezése külső helyről',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Lehetővé teszi avatar feltöltését egy másik weboldalról.',
	'ALLOW_UPLOAD'					=> 'Avatarfeltöltés engedélyezése',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galéria elérési út',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út az előre feltöltött képekhez, pl. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatarok tárolási helyének elérési útja',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatar méret',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Szélesség x magasság pixelben.',
	'MAX_FILESIZE'					=> 'Maximum avatar állomány méret',
	'MAX_FILESIZE_EXPLAIN'			=> 'Csak a feltöltött avatarokra vonatkozik.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatar méret',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Szélesség x magasság pixelben.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ezen az oldalon a privát üzenetekkel kapcsolatos beállításokat adhatod meg.',

	'ALLOW_BBCODE_PM'			=> 'BBCode engedélyezése privát üzenetben',
	'ALLOW_FLASH_PM'			=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Kérjük vedd figyelembe, hogy ha igenre van állítva, a beállítás még a jogosultságoktól is függ.',
	'ALLOW_FORWARD_PM'			=> 'Privát üzenetek továbbküldésének engedélyezése',
	'ALLOW_IMG_PM'				=> '<code>[IMG]</code> BBCode címke használatának engedélyezése',
	'ALLOW_MASS_PM'				=> 'Privát üzenet küldésének engedélyezése egyszerre több felhasználónak és csoportnak',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'A csoport beállítások oldalon külön-külön meghatározható, hogy az adott csoportnak lehet-e küldeni.',
	'ALLOW_PRINT_PM'			=> 'Privát üzenetek nyomtatóbarát verziójának engedélyezése',
	'ALLOW_QUOTE_PM'			=> 'Idézetek engedélyezése privát üzenetekben',
	'ALLOW_SIG_PM'				=> 'Aláírás engedélyezése privát üzenetekhez',
	'ALLOW_SMILIES_PM'			=> 'Emotikonok engedélyezése privát üzenetekben',
	'BOXES_LIMIT'				=> 'Maximum privát üzenetek száma mappánként',
	'BOXES_LIMIT_EXPLAIN'		=> 'A felhasználók legfeljebb ennyi privát üzenetet kaphatnak az egyes mappájukba. Állítsd 0-ra, hogy ne legyen korlát.',
	'BOXES_MAX'					=> 'Maximum privát üzenet mappák száma',
	'BOXES_MAX_EXPLAIN'			=> 'Alapból a felhasználók ennyi személyes mappát hozhatnak létre a privát üzeneteiknek.',
	'ENABLE_PM_ICONS'			=> 'Téma ikonok használatának engedélyezése privát üzenetekben',
	'FULL_FOLDER_ACTION'		=> 'Alapértelmezett művelet egy mappa megtelése esetén',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ez a művelet kerül elvégzésre, ha egy mappa megtelik, és a felhasználó beállítása – ha egyáltalán megadta – nem alkalmazható. Az egyedüli kivétel az „Elküldött üzenetek” mappa, ahol mindig a régi üzenetek törlése az alapértelmezett.',
	'HOLD_NEW_MESSAGES'			=> 'Új üzenetek visszatartása',
	'PM_EDIT_TIME'				=> 'Szerkesztés idejének korlátozása',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Korlátozza, hogy mennyi ideig lehet szerkeszteni a még nem kézbesített privát üzeneteket. A 0 érték megadásával kikapcsolható ez a viselkedés.',
	'PM_MAX_RECIPIENTS'			=> 'Engedélyezett címzettek maximum száma',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Egy privát üzenetnek legfeljebb ennyi címzettje lehet. Ha 0-t adsz meg, nem lesz korlátozás. A beállítás a csoport beállítások oldalon csoportonként megváltoztatható.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Itt a hozzászólásküldéssel kapcsolatos beállításokat adhatod meg.',
	'ALLOW_POST_LINKS'					=> 'Linkek engedélyezése hozzászólásokban ill. privát üzenetekben',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ha nem engedélyezett, az <code>[URL]</code> BBCode címke nem használható, és az automatikus linkké alakítás ki van kapcsolva.',
	'ALLOW_POST_FLASH'					=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése hozzászólásokban',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ha nem engedélyezett, a <code>[FLASH]</code> címke nem használható a hozzászólásokban. Máskülönben a jogosultságoktól függ, használható-e a <code>[FLASH]</code> BBCode címke.',

	'BUMP_INTERVAL'					=> 'Előreugrasztás időköz',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Az utolsó hozzászólás után ennyi idő múlva lehet előreugrasztani egy témát.',
	'CHAR_LIMIT'					=> 'Hozzászólásonkénti maximum karakterszám',
	'CHAR_LIMIT_EXPLAIN'			=> 'Hány karakter engedélyezett egy hozzászólásban. Állítsd 0-ra a korlátozás megszüntetéséhez.',
	'DELETE_TIME'					=> 'Törlési időkorlát',
	'DELETE_TIME_EXPLAIN'			=> 'Korlátozza, hogy az elküldés után mennyi ideig lehet törölni a hozzászólást. 0 érték megadásával a korlátozás kikapcsolható.',
	'DISPLAY_LAST_EDITED'			=> 'Utolsó szerkesztés információk megjelenítése',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Megjelenjen-e egy hozzászólásnál, hogy ki és mikor szerkesztette utoljára.',
	'EDIT_TIME'						=> 'Szerkesztési időkorlát',
	'EDIT_TIME_EXPLAIN'				=> 'Korlátozza, hogy az elküldés után mennyi ideig lehet szerkeszteni a hozzászólást. 0 érték megadásával a korlátozás kikapcsolható.',
	'FLOOD_INTERVAL'				=> 'Flood időköz',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Ennyi másodpercet kell várnia a felhasználónak két hozzászólás elküldése között. A jogosultságok segítségével beállíthatod, hogy bizonyos felhasználókra ez ne vonatkozzon.',
	'HOT_THRESHOLD'					=> 'Népszerűségi küszöb',
	'HOT_THRESHOLD_EXPLAIN'			=> 'A legalább ennyi hozzászólást tartalmazó témák kerülnek népszerűként megjelölésre. A népszerű témák funkció kikapcsolásához állítsd ezt az értéket 0-ra.',
	'MAX_POLL_OPTIONS'				=> 'Maximum választási lehetőségek száma szavazásoknál',
	'MAX_POST_FONT_SIZE'			=> 'Maximum betűméret egy hozzászólásban',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximum betűméret, ami megengedett a hozzászólásokban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximum képmagasság egy hozzászólásban',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Legfeljebb ilyen magas lehet egy kép/flash állomány. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximum képszélesség egy hozzászólásban',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Legfeljebb ilyen széles lehet egy kép/flash állomány. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_URLS'					=> 'Maximum linkszám egy hozzászólásban',
	'MAX_POST_URLS_EXPLAIN'			=> 'Legfeljebb ennyi URL-t tartalmazhat egy hozzászólás. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MIN_CHAR_LIMIT'				=> 'Hozzászólás/privát üzenet minimum hossza',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'A felhasználók csak legalább ennyi karakterből álló hozzászólást, ill. privát üzenetet küldhetnek.',
	'POSTING'						=> 'Hozzászólásküldés',
	'POSTS_PER_PAGE'				=> 'Hozzászólások száma oldalanként',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum egymásba ágyazott idézet egy hozzászólásban',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Legfeljebb ennyi idézet lehet egymásba ágyazva egy hozzászólásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'SMILIES_LIMIT'					=> 'Maximum emotikonszám egy hozzászólásban',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi emotikont tartalmazhat egy hozzászólás. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'SMILIES_PER_PAGE'				=> 'Egy oldalon megjelenítendő emotikonok száma',
	'TOPICS_PER_PAGE'				=> 'Témák száma oldalanként',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Itt az aláírással kapcsolatos beállításokat adhatod meg.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximum betűméret az aláírásban',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Legfeljebb ekkora betűméret használata engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximum képmagasság az aláírásban',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Legfeljebb ilyen magas kép/flash állomány engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximum képszélesség az aláírásban',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Legfeljebb ilyen széles kép/flash állomány engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_LENGTH'				=> 'Maximum aláírás hossz',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Legfeljebb ennyi karaktert tartalmazhat az aláírás.',
	'MAX_SIG_SMILIES'				=> 'Maximum emotikonszám az aláírásban',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Legfeljebb ennyi emotikon engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_URLS'					=> 'Maximum linkszám az aláírásban',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Legfeljebb ennyi link engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Itt a regisztrációval és a profillal kapcsolatos beállításokat adhatsz meg.',

	'ACC_ACTIVATION'				=> 'Azonosító aktiválása',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Ez dönti el, hogy a felhasználók azonnal hozzáférnek-e a fórumhoz, vagy megerősítés szükséges. A regisztrálás lehetőségét teljesen ki is kapcsolhatod.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Új tag hozzászólás határ',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Az új tagok az <em>Újonnan regisztrált felhasználók</em> csoportba kerülnek, amíg el nem érik az itt megadott hozzászólásszámot. Ennek a csoportnak a segítségével például meggátolhatod számukra privát üzenetek küldését, vagy moderátori jóváhagyáshoz kötheted a hozzászólásaikat. <strong>A 0 érték kikapcsolja ezt a funkciót.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Újonnan regisztrált felhasználók csoport elsődlegessé tétele',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Ha igent adsz meg, és az új tag hozzászólás határ is be van állítva, az újonnan regisztrált felhasználók nemcsak bekerülnek az <em>Újonnan regisztrált felhasználók</em> csoportba, de ez lesz az elsődleges csoportjuk is. Ez hasznos lehet, ha meg szeretnél adni egy alapértelmezett csoport rangot és/vagy avatart, amit aztán a felhasználók örökölnek.',

	'ACC_ADMIN'					=> 'Adminisztrátori',
	'ACC_DISABLE'				=> 'Regisztráció kikapcsolása',
	'ACC_NONE'					=> 'Nincs',
	'ACC_USER'					=> 'Felhasználói',
//	'ACC_USER_ADMIN'			=> 'Felhasználói + adminisztrátori',
	'ALLOW_EMAIL_REUSE'			=> 'E-mail címek újrahasználásának engedélyezése',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Több felhasználó is regisztrálhat ugyanazzal az e-mail címmel.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax szám',
	'COPPA_MAIL'				=> 'COPPA postai cím',
	'COPPA_MAIL_EXPLAIN'		=> 'Erre a címre küldik a szülők a COPPA regisztrációs nyilatkozatot.',
	'ENABLE_COPPA'				=> 'COPPA engedélyezése',
	'ENABLE_COPPA_EXPLAIN'		=> 'A felhasználóknak nyilatkozniuk kell, hogy 13 év fölött vannak-e az amerikai COPPA törvény miatt. Más országokban nem szükséges bekapcsolni. Ha ki van kapcsolva, a COPPA-val kapcsolatos csoportok sem jelennek meg.',
	'MAX_CHARS'					=> 'legfeljebb',
	'MIN_CHARS'					=> 'legalább',
	'NO_AUTH_PLUGIN'			=> 'Nem található megfelelő azonosítási bővítmény.',
	'PASSWORD_LENGTH'			=> 'Jelszó hossza',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimum illetve maximum mennyi karakterből állhat a jelszó.',
	'REG_LIMIT'					=> 'Regisztrációs kísérletek',
	'REG_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi kísérletet tehet a felhasználó a megerősítő kód megadására, mielőtt ki lenne zárva arra a  munkamenetre.',
	'USERNAME_ALPHA_ONLY'		=> 'Csak alfanumerikus',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerikus és térköz',
	'USERNAME_ASCII'			=> 'ASCII (nincsenek nemzetközi unicode karakterek)',
	'USERNAME_LETTER_NUM'		=> 'Bármilyen betű és szám',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Bármilyen betű, szám és térköz',
	'USERNAME_CHARS'			=> 'Felhasználónév karaktereinek korlátozása',
	'USERNAME_CHARS_ANY'		=> 'Bármilyen karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'A felhasználónévben használható karakterek típusának korlátozása; a térköz karakterek a következők: szóköz, -, +, _, [ és ].',
	'USERNAME_LENGTH'			=> 'Felhasználónév hossza',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimum illetve maximum mennyi karakterből állhat a felhasználónév.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'General Syndication Feeds settings',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Ez a modul különböző ATOM csatornákat tesz elérhetővé. A hozzászólások BBCode-ja is feldolgozásra kerül, hogy a hozzászólások a külső olvasókban is úgy jelenjenek meg, mint egyébként.',

	'ACP_FEED_ENABLE'					=> 'Csatornák bekapcsolása',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Az ATOM csatornák be- vagy kikapcsolása az egész fórumon.<br />Ha kikapcsolod, az alábbi beállításoktól függetlenül, az összes csatorna kikapcsolásra kerül.',
	'ACP_FEED_LIMIT'					=> 'Bejegyzések száma',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi bejegyzés kerül megjelenítésre a csatornákban.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Fórum összesító csatorna bekapcsolása',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Ez a csatorna a legújabb hozzászólásokat jeleníti meg a fórum összes témájából.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Megjelenítendő bejegyzések száma oldalanként a fórumok csatorában',

	'ACP_FEED_OVERALL_TOPIC'			=> 'Téma összesítő csatorna bekapcsolása',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Bekapcsolja az „Összes téma” csatornát',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Megjelenítendő bejegyzések száma oldalanként a témák csatorában',
	'ACP_FEED_FORUM'					=> 'Fórumonkénti csatornák bekapcsolása',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Az egyes fórumok új hozzászólásai a saját csatornájukban.',
	'ACP_FEED_TOPIC'					=> 'Témánkénti csatornák bekapcsolása',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Az egyes témák új hozzászólásai a saját csatornájukban.',
	'ACP_FEED_NEWS'						=> 'Hírcsatorna',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'A hírcsatorna ezen fórumok első hozzászólásait jeleníti meg. Ha ki szeretnéd kapcsolni, ne válassz ki egy fórumot se.<br />Több fórumot a <samp>CTRL</samp> gomb nyomvatartásával tudsz kiválasztani.',

	'ACP_FEED_GENERAL'					=> 'Általános csatorna beállítások',

	'ACP_FEED_ITEM_STATISTICS'			=> 'Bejegyzés statisztikák',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Különböző statisztikai adatokat jelenít meg a csatorna bejegyzései alatt.<br />(Szerző, dátum, válaszok száma, megtekintések száma)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Kizárandó fórumok',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Ezen fórumok tartalma <strong>nem kerül megjelenítésre a csatornákban</strong>. <br />Több fórumot kijelölni, illetve a kijelölést megszüntetni a <samp>CTRL</samp> gomb nyomvatartásával lehet.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Itt a CAPTCHA bővítményeket tudod kezelni, melyek különböző módokon próbálják megakadályozni az ún. spamrobotok regisztrációját.',
	'AVAILABLE_CAPTCHAS'					=> 'Elérhető bővítmények',
	'CAPTCHA_UNAVAILABLE'					=> 'Ezt a CAPTCHA-t nem lehet kiválasztani, mivel a működéséhez szükséges követelmények nem teljesülnek.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA előtéri zaj',
	'CAPTCHA_GD_EXPLAIN'					=> 'A GD-vel jobb CAPTCHA állítható elő.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Az előtéri zajosítás használatával erősebbé lehet tenni a GD alapú CAPTCHA-t.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA hátteri x-tengely zaj',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'A kisebb értékek erősebbé teszik a CAPTCHA-t. A 0 kikapcsolja az x-tengelyi zajosítást.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA hátteri y-tengely zaj',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'A kisebb értékek erősebbé teszik a CAPTCHA-t. A 0 kikapcsolja az y-tengelyi zajosítást.',
	'CAPTCHA_GD_WAVE'						=> 'GD CAPTCHA hullámtorzítás',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Ez a beállítás eltorzítja hullámszerűen a CAPTCHA-t.',
 	'CAPTCHA_GD_3D_NOISE'					=> '3D zajosítás',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'A betűk fölé plusz 3D-s objektumok kerülnek.',
 	'CAPTCHA_GD_FONTS'						=> 'Különböző betűtípusok használata',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Itt megadhatod, mennyi különbőző betűforma legyen használva. Használhatod csak az alap formákat, vagy bevezethetsz módosított betűket, illetve a kisbetűket is beállíthatod.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Alap',
	'CAPTCHA_FONT_NEW'						=> 'Új formák',
	'CAPTCHA_FONT_LOWER'					=> 'Kisbetűk is',

	'CAPTCHA_NO_GD'							=> 'GD nélküli CAPTCHA',
	'CAPTCHA_PREVIEW_MSG'					=> 'A vizuális megerősítés beállításaid nem kerültek elmentésre. Ez csak egy előnézet.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Így nézne ki a CAPTCHA a jelenlegi beállításokkal.',

	'CAPTCHA_SELECT'						=> 'Telepített CAPTCHA bővítmények',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'A legördülő menü felsorolja a fórum által felismert CAPTCHA bővítményeket. A szürkével írottak jelenleg nem érhetőek el, és a használatba vételük előtt lehet, hogy konfigurálni kell őket.',
	'CAPTCHA_CONFIGURE'						=> 'CAPTCHA konfigurálása',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'A kiválasztott CAPTCHA beállításainak megváltoztatása.',
	'CONFIGURE'								=> 'Konfiguráció',
	'CAPTCHA_NO_OPTIONS'					=> 'Ennek a CAPTCHA-nak nincsenek beállítási lehetőségei.',

	'VISUAL_CONFIRM_POST'					=> 'Vizuális megerősítés bekapcsolása vendég hozzászólásküldéskor',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'A tömeges hozzászólás elkerülése végett a nem regisztrált felhasználóknak meg kell adniuk egy képen található véletlenszerű kódot.',
	'VISUAL_CONFIRM_REG'					=> 'Vizuális megerősítés bekapcsolása a regisztrációnál',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'A tömeges regisztráció elkerülése végett az új felhasználóknak meg kell adniuk egy képen található véletlenszerű kódot.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Megerősítés kép frissítésének engedélyezése',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Ha a felhasználó nem tudja elolvasni a vizuális megerősítéshez használt képen szereplő kódot, új kódot (és ezzel együtt képet) kérhet.',

));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Ezek a beállítások határozzák meg, hogy a felhasználóid böngészőjének milyen sütik kerülnek elküldésre. A legtöbb esetben az alapbeállítások megfelelőek. Ha mégis meg kell változtatnod egy beállítást, tedd figyelemmel, mivel a nem helyes beállítások következtében előfordulhat, hogy a felhasználók nem tudnak majd belépni.',

	'COOKIE_DOMAIN'				=> 'Süti domain',
	'COOKIE_NAME'				=> 'Süti név',
	'COOKIE_PATH'				=> 'Süti elérési út',
	'COOKIE_SECURE'				=> 'Süti biztonság',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ha a szervered SSL-en fut, kapcsold be, egyébként hagyd kikapcsolva. Ha be van állítva, de nincs SSL, az átirányítások során szerver hibák fognak fellépni.',
	'ONLINE_LENGTH'				=> 'Ki van itt megjelenési időtartam',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Ennyi perc után nem fognak az inaktív felhasználók megjelenni a „Ki van itt” listában. Minél nagyobb érték van megadva, annál több időbe telik a lista generálása.',
	'SESSION_LENGTH'			=> 'Munkamenet hossza',
	'SESSION_LENGTH_EXPLAIN'	=> 'A munkamenet ennyi idő elteltével jár le, másodpercben.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Itt be- vagy kikapcsolhatod a fórum bizonyos funkcióit a jobb teljesítmény érdekében. A legtöbb szerveren nincs szükség semmilyen funkció kikapcsolására. Azonban egyes rendszereken vagy másokkal megosztott tárhelyszolgáltatás esetében előnyös lehet kikapcsolni néhány igazából nem használt lehetőséget. Emellett korlátokat is meghatározhatsz a rendszer terhelésére vagy az aktív munkamenetek számára, melyek fölött a fórum automatikusan szünetelni fog.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Egyedi profil mezők',
	'LIMIT_LOAD'					=> 'Rendszerterhelés korlátozása',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ha a rendszer egy perces átlagos terhelése meghaladja ezt az értéket, a fórum automatikusan szünetelni fog. Az 1.0 érték megegyezik egy processzor ~100%-os használatával. A funkció csak UNIX alapú rendszereken működik, és akkor is csak akkor, ha elérhető ez az információ. Amennyiben a phpBB-nek nem sikerül meghatároznia a terheléskorlátot, ez az érték automatikusan 0-ra állítódik.',
	'LIMIT_SESSIONS'				=> 'Munkamenetek korlátozása',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ha a munkamenetek száma egy perc alatt meghaladja ezt az értéket, a fórum automatikusan szünetelni fog. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'LOAD_CPF_MEMBERLIST'			=> 'Egyedi profil mezők megjelenítése a taglistában',
	'LOAD_CPF_VIEWPROFILE'			=> 'Egyedi profil mezők megjelenítése a felhasználók profiljában',
	'LOAD_CPF_VIEWTOPIC'			=> 'Egyedi profil mezők megjelenítése a téma oldalakon',
	'LOAD_USER_ACTIVITY'			=> 'Felhasználó aktivitásának mutatása',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Legaktívabb téma/fórum megjelenítése a felhasználók profiljában és a felhasználói vezérlőpultban. Több, mint egymillió hozzászólással rendelkező fórumoknál ajánlott kikapcsolni.',
	'RECOMPILE_STYLES'				=> 'Elévült megjelenés komponensek újrafeldolgozása',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Megnézi, hogy frissült-e az adott megjelenés komponens, és ha igen, újra feldolgozza.',
	'YES_ANON_READ_MARKING'			=> 'Olvasottságmegjelölés engedélyezése vendégeknek',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'A vendégeknek is eltárolja az olvasott témákat/fórumokat. Kikapcsolt állapotban a vendégeknek minden hozzászólás olvasott.',
	'YES_BIRTHDAYS'					=> 'Születésnaposok kiírásának bekapcsolása',
 	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ha ki van kapcsolva, nem jelenik meg a kezdőoldalon a születésnaposok listája. A beállítás érvényesüléséhez a születésnaposok funkciónak is bekapcsolva kell lennie.',
	'YES_JUMPBOX'					=> 'Fórum ugrás doboz bekapcsolása',
	'YES_MODERATORS'				=> 'Moderátorok megjelenítésének bekapcsolása',
	'YES_ONLINE'					=> 'Jelenlévő felhasználók felsorolásának bekapcsolása',
	'YES_ONLINE_EXPLAIN'			=> 'Információ megjelenítése a jelen lévő felhasználókról a kezdőoldalon és a fórum ill. téma oldalakon.',
	'YES_ONLINE_GUESTS'				=> 'Vendégek megjelenítésének bekapcsolása a jelenlévők között',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Információ megjelenítése a jelen lévő vendégekről a jelenlévő felhasználóknál.',
	'YES_ONLINE_TRACK'				=> 'Felhasználó online/offline állapotának megjelenítésének bekapcsolása',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'A profilban és a téma oldalakon jelzi, hogy az adott felhasználó éppen online-e.',
	'YES_POST_MARKING'				=> 'Csillagozott témák bekapcsolása',
	'YES_POST_MARKING_EXPLAIN'		=> 'Jelzi, hogy a felhasználó hozzászólt-e a témához.',
	'YES_READ_MARKING'				=> 'Szerveroldali olvasottságmegjelölés bekapcsolása',
	'YES_READ_MARKING_EXPLAIN'		=> 'Az olvasott témákról/fórumokról az információt az adatbázisban tárolja süti helyett.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'A phpBB különböző azonosítási bővítményeket vagy modulokat is támogat. Ezek határozzák meg, hogy mi történik, amikor egy felhasználó belép a fórumra. Alapból három bővítmény áll rendelkezésre: DB (adatbázis), LDAP és Apache. Nem mindegyiknek van szüksége kiegészítő információkra, így csak azokat a mezőket töltsd ki, amelyek a kiválasztott bővítményhez tartoznak.',

	'AUTH_METHOD'				=> 'Azonosítási mód',

	'APACHE_SETUP_BEFORE_USE'	=> 'Az apache azonosítást előbb kell beállítanod, mint hogy a phpBB-t erre az azonosítási módra állítanád. Ne felejtesd el, hogy az apache azonosításhoz használt felhasználónévnek meg kell egyeznie a phpBB-beli felhasználónévvel. Az apache azonosítás csak mod_php-vel használható (CGI verzióval nem), és a safe_mode-nak kikapcsolva kell lennie.',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'A felhasználóról információt tartalmazó Distinguished Name, pl. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-mail attribútum',
	'LDAP_EMAIL_EXPLAIN'			=> 'Add meg a felhasználók e-mail címét tartalmazó attribútum nevét (ha van), hogy az új felhasználók e-mail címe automatikusan beállításra kerüljön. Ha üresen hagyod, az első alkalommal belépő felhasználóknak üres lesz az e-mail címük.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Nem sikerült az LDAP szervert összekötni a megadott felhasználó/jelszó páros használatával.',
	'LDAP_NO_EMAIL'					=> 'A megadott e-mail paraméter nem létezik.',
	'LDAP_NO_IDENTITY'				=> 'Nem található belépési azonosító: %s.',
	'LDAP_PASSWORD'					=> 'LDAP jelszó',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Névtelen hozzáférés használatához hagyd üresen, egyébként add meg a fenti felhasználóhoz tartozó jelszót. Active Directory szervereknél szükséges. <strong>FIGYELMEZTETÉS:</strong> Ez a jelszó az adatbázisban sima szövegként kerül tárolásra, bárki által látható lesz, aki hozzáfér az adatbázishoz.',
	'LDAP_PORT'						=> 'LDAP szerver port',
	'LDAP_PORT_EXPLAIN'				=> 'Ha kell, az alap 389-es helyett megadhatsz egy másik portot, mely használva lesz az LDAP szerverhez való kapcsolódáshoz.',
	'LDAP_SERVER'					=> 'LDAP szervernév',
	'LDAP_SERVER_EXPLAIN'			=> 'LDAP használata esetén a szerver neve vagy IP-címe. Megadhatsz egy URL-t is, mint például ldap://hosztnév:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Ezzel a kulccsal történik a keresés az adott belépési azonosítóra, pl. <var>uid</var>, <var>sn</var> stb.',
	'LDAP_USER'						=> 'LDAP felhasználó <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Névtelen hozzáférés használatához hagyd üresen. Ha ki van töltve, a phpBB belépéskor a megadott distinguished name-t fogja használni a megfelelő felhasználó megtalálásához, pl. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. ',
	'LDAP_USER_FILTER'				=> 'LDAP felhasználószűrő',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Tetszőlegesen tovább korlátozhatod a keresett objektumokat további szűrőkkel. Például a <samp>objectClass=posixGroup</samp> megadása a <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> használatát eredményezné.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Itt a szerverrel és a domainnel kapcsolatos beállításokat adhatod meg. Kérünk, győződj meg róla, hogy az adatok pontosak, mivel nem helyes megadás esetén az e-mailek hibás információt fognak tartalmazni. A domain név megadásánál ne felejtsd el, hogy a http:// vagy más protokollspecifikáció nem része a címnek. A portot csak akkor módosítsd, ha biztosan tudod, hogy a szerver egy másikat használ, a 80-as port a legtöbb esetben megfelelő.',

	'ENABLE_GZIP'				=> 'GZip tömörítés bekapcsolása',
	'ENABLE_GZIP_EXPLAIN'		=> 'A generált tartalom a felhasználónak való elküldés előtt tömörítésre kerül. Ezzel csökkenteni lehet a hálózati forgalmat, ugyanakkor a CPU-igénybevétel nőni fog, mind a szerver-, mind a kliensoldalon. A működéséhez a zlib PHP bővítménynek betöltve kell lennie.',
	'FORCE_SERVER_VARS'			=> 'Szerver URL beállítások használata',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ha igenre van állítva, az itt megadott beállítások kerülnek használatra az automatikus megállapítás helyett.',
	'ICONS_PATH'				=> 'Hozzászólás ikonok elérési útja',
	'ICONS_PATH_EXPLAIN'		=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Elérési utak',
	'RANKS_PATH'				=> 'Rang képek elérési útja',
	'RANKS_PATH_EXPLAIN'		=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Szkript elérési út',
	'SCRIPT_PATH_EXPLAIN'		=> 'A phpBB relatív elérési útvonala a domainnévhez képest, pl. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domainnév',
	'SERVER_NAME_EXPLAIN'		=> 'A fórum domainneve, amin fut (például: <samp>valami.hu</samp>).',
	'SERVER_PORT'				=> 'Szerver port',
	'SERVER_PORT_EXPLAIN'		=> 'Milyen porton fut a szerver, általában 80-as, csak akkor változtasd meg, ha más.',
	'SERVER_PROTOCOL'			=> 'Szerver protokoll',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Ez kerül használatra szerver protokollként, ha ezek a beállítások használva vannak. Ha a mező üres, vagy a beállítások nincsenek használva, a protokoll a „biztonságos süti” beállítás alapján kerül megállapításra (<samp>http://</samp> vagy <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Szerver URL beállítások',
	'SMILIES_PATH'				=> 'Emotikonok elérési útja',
	'SMILIES_PATH_EXPLAIN'		=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Kiterjesztéscsoport ikonok elérési útja',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Itt a munkamenetekkel és a belépéssel kapcsolatos beállításokat tudsz megadni.',

	'ALL'							=> 'Teljes',
	'ALLOW_AUTOLOGIN'				=> 'Tartós bejelentkezés engedélyezése',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'A felhasználók használhatják-e az automatikus bejelentkezést.',
	'AUTOLOGIN_LENGTH'				=> 'Tartós bejelentkezési kulcs lejárati hossza',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Ennyi nap elteltével törlésre kerülnek a tartós bejelentkezési kulcsok. A 0 kikapcsolja ezt.',
	'BROWSER_VALID'					=> 'Böngésző ellenőrzése',
	'BROWSER_VALID_EXPLAIN'			=> 'A böngésző típusa ellenőrzésre kerül, ezáltal javítva a munkamenet biztonságát.',
	'CHECK_DNSBL'					=> 'IP összevetése a DNSBL feketelistával',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ha be van kapcsolva, akkor a regisztrációkor vagy hozzászóláskor a felhasználó IP-címe összevetésre kerül a következő DNSBL-szolgáltatások adatbázisával: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> és <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Ez a művelet a szervertől függően eltarthat egy ideig. Ha lassulások tapasztalhatók, vagy ha sok a téves tiltás, ajánlott ezt az ellenőrzést kikapcsolni.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Érvényes e-mail domain MX rekord létezésének ellenőrzése ',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ha be van kapcsolva, akkor a regisztrációkor vagy a profil megváltoztatásakor megadott e-mail cím domainje ellenőrzésre kerül, hogy van-e hozzá érvényes MX rekord.',
	'FORCE_PASS_CHANGE'				=> 'Kötelező jelszómegváltoztatás gyakorisága',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Megköveteli a felhasználótól, hogy bizonyos időközönként megváltoztassa a jelszavát. A 0 érték megadása kikapcsolja ezt.',
	'FORM_TIME_MAX'					=> 'Maximum idő űrlap elküldéséhez',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Ennyi időn belül a felhasználónak el kell küldenie az űrlapokat. A kikapcsoláshoz adj meg -1-et. Vedd figyelembe, hogy ettől a beállítástól függetlenül az űrlap a munkamenet lejártával is érvénytelenné válhat.',
	'FORM_SID_GUESTS'				=> 'Űrlapok hozzákötése vendég munkamenetekhez',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Ha be van kapcsolva, minden vendég munkamenethez külön űrlapjelzés lesz. Ez néhány internetszolgáltatónál gondot okozhat.',
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var> fejléc ellenőrzése',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'A munkamenetek csak akkor kerülnek folytatásra, ha a küldött <var>X_FORWARDED_FOR</var> fejléc megegyezik az előző kérés alkalmával küldöttel. Emellett az <var>X_FORWARDED_FOR</var> is összevetésre kerül a kitiltott IP-címekkel.',
	'IP_VALID'						=> 'Munkamenet IP ellenőrzés',
	'IP_VALID_EXPLAIN'				=> 'A felhasználó IP-címének mekkora része lesz használva a munkamenet érvényesítéséhez; a <samp>Teljes</samp> az egész címet összeveti, az <samp>A.B.C</samp> az első x.x.x részt, az <samp>A.B</samp> az első x.x részt, a <samp>Nincs</samp> pedig teljesen kikapcsolja az ellenőrzést. IPv6 címeknél az <samp>A.B.C</samp> az első 4 blokkot, az <samp>A.B</samp> pedig az első 3 blokkot veti össze.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Belépési kísérletek maximum száma',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Ennyi sikertelen belépési kísérlet után a felhasználónak vizuálisan is meg kell erősítenie a belépését (vizuális megerősítés).',
	'NO_IP_VALIDATION'				=> 'Nincs',
	'NO_REF_VALIDATION'				=> 'Nincs',
	'PASSWORD_TYPE'					=> 'Jelszóbonyolultság',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Milyen bonyolultnak kell lennie egy jelszónak. A lejjebbi beállítási lehetőségek tartalmazzák az előzőket.',
	'PASS_TYPE_ALPHA'				=> 'Tartalmaznia kell betűket és számokat',
	'PASS_TYPE_ANY'					=> 'Nincs követelmény',
	'PASS_TYPE_CASE'				=> 'Tartalmaznia kell kis- és nagybetűket',
	'PASS_TYPE_SYMBOL'				=> 'Tartalmaznia kell szimbólumokat',
	'REF_HOST'						=> 'Csak hoszt ellenőrzése',
	'REF_PATH'						=> 'Elérési út ellenőrzése is',
	'REFERER_VALID'					=> 'Hivatkozó oldal (referer) ellenőrzése',
	'REFERER_VALID_EXPLAIN'			=> 'Ha be van kapcsolva, a POST kérések hivatkozó oldalainak címe (referer) összevetésre kerül a hoszt/szkript elérési út beállításokkal. Ez gondot okozhat egyszerre több domaint vagy külső bejelentkező oldalt használó fórumoknál.',
	'TPL_ALLOW_PHP'					=> 'Php engedélyezése sablonokban',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ha be van kapcsolva a beállítás, akkor a sablonokban a <code>PHP</code> és az <code>INCLUDEPHP</code> címkék is értelmezésre kerülnek.',
));

// Email Settings
$lang = array_merge($lang, array(
 	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Az alábbi információkat használja a fórum e-mailek küldésekor. Kérünk, győződj meg róla, hogy az e-mail cím, amit megadsz, helyes, mivel minden nem kézbesíthető levél erre a címre fog menni. Ha a tárhelyszolgáltatód nem biztosítja a natív (PHP alapú) e-mail küldést, használhatsz helyette SMTP-t. Ehhez szükség van egy megfelelő szerver címére (ha szükséges, kérdezd meg a szolgáltatód). Ha (és csak ha) a szerver megköveteli az azonosítást, add meg a szükséges felhasználónevet, jelszót és azonosítási módot.',

	'ADMIN_EMAIL'					=> 'Visszaküldési e-mail cím',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Ez a technikai kapcsolat cím, például ide vannak irányítva a nem kézbesíthető levelek. Mindig ez a cím kerül megadásra a levelek <samp>Return-Path</samp> (visszaküldési útvonal) és <samp>Sender</samp> (küldő) fejlécének.',
	'BOARD_EMAIL_FORM'				=> 'Felhasználói levélküldés a fórumon keresztül',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Ahelyett, hogy a felhasználók e-mail címe megjelenítésre kerülne, a felhasználók a fórumon keresztül küldhetnek egymásnak e-mailt.',
	'BOARD_HIDE_EMAILS'				=> 'E-mail címek elrejtése',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ez a funkció gondoskodik róla, hogy az e-mail címek teljesen privátak maradjanak.',
	'CONTACT_EMAIL'					=> 'Kapcsolat e-mail cím',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Ez az e-mail cím kerül megadásra, ha szükség van bármilyen kapcsolatbalépési lehetőségre, pl. spam, hibaüzenet stb. Mindig ez a cím kerül megadásra a levelek <samp>From</samp> (feladó) és <samp>Reply-To</samp> (válaszcím) fejlécének.',
	'EMAIL_FUNCTION_NAME'			=> 'E-mail függvény neve',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'A függvény neve, amivel e-mailt lehet küldeni PHP-n keresztül.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-mail csomag mérete',
 	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Legfeljebb ennyi e-mail kerül kiküldésre egy csomagban. Ez a beállítás a belső várakozási sorra vonatkozik. Ha problémák lépnének föl nem megérkező értesítő e-mailekkel kapcsolatban, állítsd ezt az értéket 0-ra.',
	'EMAIL_SIG'						=> 'E-mail aláírás',
	'EMAIL_SIG_EXPLAIN'				=> 'Ez a szöveg hozzáfűzésre kerül az összes fórum által küldött e-mailhez.',
	'ENABLE_EMAIL'					=> 'Fórum e-mail küldés bekapcsolása',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ha ki van kapcsolva, a fórum egyáltalán nem fog e-mailt küldeni. <em>Kérjük, vedd figyelembe, hogy ebben az esetben a „felhasználói”, ill. „adminisztrátori” azonosító aktiválási mód nem működik. Ha jelenleg ezen aktivális módok egyikét használod, és nemre állítod ezt a beállítást, az új regisztrációkat semmilyen módon nem kell majd megerősíteni.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP azonosítási mód',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Csak akkor van használva, ha egy felhasználónév/jelszó páros meg van adva. Ha nem vagy biztos benne, melyik módot használd, kérdezd meg a szolgáltatódat.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP jelszó',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Csak akkor adj meg jelszót, ha a használt SMTP szerver megköveteli.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP szerver port',
	'SMTP_PORT_EXPLAIN'				=> 'Csak akkor változtasd meg, ha tudod, hogy az SMTP szerver más porton van.',
	'SMTP_SERVER'					=> 'SMTP szerver cím',
	'SMTP_SETTINGS'					=> 'SMTP beállítások',
	'SMTP_USERNAME'					=> 'SMTP felhasználónév',
	'SMTP_USERNAME_EXPLAIN'			=> 'Csak akkor adj meg felhasználónevet, ha a használt SMTP szerver megköveteli.',
	'USE_SMTP'						=> 'SMPT használata e-mail küldésére',
	'USE_SMTP_EXPLAIN'				=> 'Állítsd igenre, ha a helyi mail függvény helyett egy meghatározott szerveren keresztül szeretnéd az e-maileket kiküldeni.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Itt bekapcsolhatod, illetve szabályozhatod a Jabber használatát azonnali üzenetküldésre és az értesítésekhez. A Jabber egy nyílt protokoll, így bárki által elérhető. Néhány Jabber szerver lehetővé teszi, hogy más hálózaton lévő felhasználókat is elérj. Nem minden szerver teremt lehetőséget erre, és a protokollban történő változások is megakadályozhatják ezt. Kérünk, győződj meg róla, hogy egy már létező azonosító adatait adod meg, mivel a phpBB további ellenőrzés nélkül fogja használni ezeket.',

	'JAB_ENABLE'				=> 'Jabber bekapcsolása',
	'JAB_ENABLE_EXPLAIN'		=> 'A Jabber üzenet- és értesítőküldés bekapcsolása.',
	'JAB_GTALK_NOTE'			=> 'Kérjük, vedd figyelembe, hogy a GTalk nem fog működni, mivel a <samp>dns_get_record</samp> függvény nem található. Ez a függvény PHP4-ben nem elérhető, illetve nincs implementálva Windows rendszereken. Jelenleg BSD alapú rendszereken sem működik, beleértve a Mac OS-t is.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber csomag méret',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Egy csomagban ennyi üzenet kerül kiküldésre. 0-ra állítva az üzenetek azonnal kiküldésre kerülnek, és nem lesznek berakva egy sorba későbbi elküldéshez.',
	'JAB_PASSWORD'				=> 'Jabber jelszó',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Hagyd üresen, hacsak nem tudod, hogy a port nem 5222.',
	'JAB_SERVER'				=> 'Jabber szerver',
	'JAB_SERVER_EXPLAIN'		=> 'A szerverek listájához lásd a %sjabber.org%s-ot.',
	'JAB_SETTINGS_CHANGED'		=> 'A Jabber beállítások sikeresen megváltoztatásra kerültek.',
	'JAB_USE_SSL'				=> 'SSL használata a kapcsolódáshoz',
	'JAB_USE_SSL_EXPLAIN'		=> 'Ha be van kapcsolva, egy biztonságos kapcsolat kerül kiépítésre. A Jabber portja 5223-ra lesz módosítva, ha az 5222-es port volt megadva.',
	'JAB_USERNAME'				=> 'Jabber felhasználónév vagy JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Adj meg egy regisztrált felhasználónevet vagy egy valós JID-t. A felhasználónév létezése nem kerül ellenőrzésre. Ha csak egy felhasználónevet adsz meg, a JID a felhasználónév és a fent megadott szerver lesz. Ha nem ezt szeretnéd, adj meg egy helyes JID-t, pl. felhasznalo@jabber.org.',
));

?>
