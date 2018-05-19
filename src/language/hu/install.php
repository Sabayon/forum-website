<?php
/**
*
* install [Hungarian]
*
* @package language
* @version $Id: install.php 197 2009-10-18 20:12:18Z fberci $
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
	'ADMIN_CONFIG'				=> 'Adminisztrátor beállítása',
	'ADMIN_PASSWORD'			=> 'Adminisztrátor jelszó',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Adminisztrátor jelszó megerősítése',
	'ADMIN_PASSWORD_EXPLAIN'	=> '6 és 30 karakter közötti jelszót adj meg.',
	'ADMIN_TEST'				=> 'Adminisztrátor adatok ellenőrzése',
	'ADMIN_USERNAME'			=> 'Adminisztrátor felhasználónév',
	'ADMIN_USERNAME_EXPLAIN'	=> '3 és 20 karakter közötti felhasználónevet adj meg.',
	'APP_MAGICK'				=> 'Imagemagick támogatás [ csatolmányok ]',
	'AUTHOR_NOTES'				=> 'Készítő megjegyzései<br />» %s',
	'AVAILABLE'					=> 'Elérhető',
	'AVAILABLE_CONVERTORS'		=> 'Elérhető konvertálók',

	'BEGIN_CONVERT'					=> 'Konvertálás elkezdése',
	'BLANK_PREFIX_FOUND'			=> 'Az adatbázistábláid azt mutatják, hogy már van egy telepített phpBB-d, mely nem használ tábla előtagot.',
	'BOARD_NOT_INSTALLED'			=> 'Nem található telepített phpBB',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'A phpBB Egyesített Konvertáló Keretrendszer működéséhez szükség van egy telepített phpBB3-ra, kérjük, először <a href="%s">telepítsd a phpBB3-mat</a>.',

	'CATEGORY'					=> 'Kategória',
	'CACHE_STORE'				=> 'Gyorsítótár típusa',
	'CACHE_STORE_EXPLAIN'		=> 'Az adatok gyorsítótárazásának fizikai helye. A fájlrendszer ajánlott.',
	'CAT_CONVERT'				=> 'Konvertálás',
	'CAT_INSTALL'				=> 'Telepítés',
	'CAT_OVERVIEW'				=> 'Áttekintés',
	'CAT_UPDATE'				=> 'Frissítés',
	'CHANGE'					=> 'Változtatás',
	'CHECK_TABLE_PREFIX'		=> 'Kérjük, ellenőrizd az adatbázis-előtagot, és próbálkozz újra.',
	'CLEAN_VERIFY'				=> 'Végleges struktúra rendbe tétele és ellenőrzése',
	'CLEANING_USERNAMES'		=> 'Felhasználónevek tisztítása',
	'COLLIDING_CLEAN_USERNAME'	=> 'A <strong>%s</strong> egyszerűsített felhasználónév a következő felhasználókhoz tartozik:',
	'COLLIDING_USERNAMES_FOUND'	=> 'A régi fórumodon ütköző felhasználónevek fordultak elő. Kérjük, töröld, vagy nevezd át ezeket a felhasználókat, hogy minden egyszerűsített felhasználónévhez csak egy felhasználó tartozzon.',
	'COLLIDING_USER'			=> '» felhasználói azonosító: <strong>%d</strong>, felhasználónév: <strong>%s</strong> (%d hozzászólás)',
	'CONFIG_CONVERT'			=> 'Konfiguráció konvertálása',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nem sikerült kiírni a konfigurációs állományt. Alább találod ezen állomány létrehozásának alternatív módjait.',
	'CONFIG_FILE_WRITTEN'		=> 'A konfigurációs állomány kiírásra került. Továbbléphetsz a telepítés következő lépésére.',
	'CONFIG_PHPBB_EMPTY'		=> 'A phpBB3 „%s” konfigurációs változója üres.',
	'CONFIG_RETRY'				=> 'Újra',
	'CONTACT_EMAIL_CONFIRM'		=> 'Kapcsolat e-mail cím megerősítése',
	'CONTINUE_CONVERT'			=> 'Konvertálás folytatása',
	'CONTINUE_CONVERT_BODY'		=> 'Észlelve lett egy korábbi, nem befejezett konverzió. Választhatsz, hogy ezt folytatod, vagy egy újat kezdesz.',
	'CONTINUE_LAST'				=> 'Végső műveletek folytatása',
	'CONTINUE_OLD_CONVERSION'	=> 'Korábban megkezdett konverzió folytatása',
	'CONVERT'					=> 'Konvertálás',
	'CONVERT_COMPLETE'			=> 'Konvertálás befejeződött',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Sikeresen átkonvertáltad a fórumod phpBB 3.0-sra. Most már bejelentkezhetsz, és <a href="../">hozzáférhetsz a fórumodhoz</a>. Mielőtt megnyitnád a fórumod az install könyvtár törlésével, kérünk, győződj meg róla, hogy az összes beállításod sikeresen átvételre került-e. Ne feledkezz meg róla, hogy a phpBB-vel kapcsolatban segítséget nyújt az angol <a href="http://www.phpbb.com/support/documentation/3.0/">felhasználói kézikönyv</a> és a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpbb.com megfelelő fóruma</a>.',
	'CONVERT_INTRO'				=> 'Üdvözlünk a phpBB Egytesített Konvertáló Keretrendszerben!',
	'CONVERT_INTRO_BODY'		=> 'Itt adatokat importálhatsz másik (telepített) fórumrendszerekből. Az alábbi lista tartalmazza az elérhető konvertálókat. Ha a listában nem szerepel a kívánt fórumszoftverről konvertáló modul, látogass el a phpBB weboldalára, ahonnan lehet, hogy letöltheted.',
	'CONVERT_NEW_CONVERSION'	=> 'Új konvertálás',
	'CONVERT_NOT_EXIST'			=> 'A megadott konvertáló nem létezik.',
	'CONVERT_OPTIONS'			=> 'Lehetőségek',
	'CONVERT_SETTINGS_VERIFIED'	=> 'A megadott információk ellenőrzésre kerültek. A konvertálás elkezdéséhez nyomd meg az alábbi gombot.',
	'CONV_ERR_FATAL'			=> 'Súlyos konvertálási hiba',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'A régi fórumon engedélyezve volt az FTP-n keresztüli csatolmányfeltöltés. Kérjük, kapcsold ki az FTP feltöltést, bizonyosodj meg róla, hogy helyes feltöltési könyvtár került megadásra, majd másold át az összes csatolmány állományt az új, webről is elérhető könyvtárba. Ha végeztél ezzel, indítsd újra a konvertálót.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nincs elérhető konfigurációs információ a konvertáláshoz.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nem sikerült lekérdezni a fórum hozzáférési jogosultságokat.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nem sikerült lekérdezni a kategóriákat.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nem sikerült lekérdezni a fórum konfigurációját.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nem sikerült hozzáférni/olvasni: „%s”',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nem sikerült lekérdezni a csoport jogosultságokat.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Az add_bots() függvény végrehajtása során ellentmondást találtunk a csoportok táblában – az összes speciális csoportot hozzá kell adnod, ha manuálisan csinálod.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nem sikerült beilleszteni egy robotot a felhasználók táblába.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nem sikerült beilleszteni egy robotot a robotok táblába.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nem sikerült beilleszteni egy felhasználót a csoportok táblába.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Üzenetfeldolgozó hiba',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'avatar_path\'] értékét.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Nem került megadásra a relatív elérési út az eredeti fórumhoz.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'avatar_gallery_path\'] értékét.',
	'CONV_ERROR_NO_GROUP'				=> 'A „%1$s” csoport nem található a %2$s-ban.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'ranks_path\'] értékét.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'smilies_path\'] értékét.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'upload_path\'] értékét.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nem sikerült beilleszteni/frissíteni a jogosultság beállításokat.',
	'CONV_ERROR_PM_COUNT'				=> 'Nem sikerült lekérdezni egy mappa PÜ-inek számát.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nem sikerült beilleszteni egy régi kategóriát helyettesítő új fórumot.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nem sikerült beilleszteni egy régi fórumot helyettesítő új fórumot.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nem sikerült lekérdezni a felhasználóazonosítói információkat.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Rossz csoport („%1$s”) került meghatározásra a %2$s-ban.',
 	'CONV_OPTIONS_BODY'					=> 'Ezen az oldalon az eredeti fórum hozzáférési adatait kell megadni. Add meg a régi fórumod adatbázisának adatait, a konvertáló nem fog benne semmit se megváltoztatni. Az inkonzisztencia elkerülése végett az eredeti fórumot ki tanácsos kapcsolni a konvertálás idejére.',
	'CONV_SAVED_MESSAGES'				=> 'Elmentett üzenetek',

	'COULD_NOT_COPY'			=> 'Nem sikerült átmásolni a <strong>%1$s</strong> állományt a <strong>%2$s</strong> helyre.<br /><br />Kérjük, ellenőrizd, hogy a célkönyvtár létezik, és írható a webszerver által.',
	'COULD_NOT_FIND_PATH'		=> 'Nem sikerült megtalálni az elérési utat az eredeti fórumodhoz. Kérjük, ellenőrizd a beállításokat, és próbálkozz újra.<br />» Megadott elérési út: %s',

	'DBMS'						=> 'Adatbázis típusa',
	'DB_CONFIG'					=> 'Adatbázis-konfiguráció',
	'DB_CONNECTION'				=> 'Adatbázis-kapcsolat',
	'DB_ERR_INSERT'				=> 'Hiba <code>INSERT</code> parancs végrehajtása közben.',
	'DB_ERR_LAST'				=> 'Hiba a <var>query_last</var> végrehajtása közben.',
	'DB_ERR_QUERY_FIRST'		=> 'Hiba a <var>query_first</var> végrehajtása közben.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Hiba a <var>query_first</var> végrehajtása közben, %s („%s”)',
	'DB_ERR_SELECT'				=> 'Hiba <code>SELECT</code> lekérdezés végrehajtása közben.',
	'DB_HOST'					=> 'Adatbázisszerver hosztneve vagy DSN',
	'DB_HOST_EXPLAIN'			=> 'A DSN az angol Data Source Name rövidítése, csak ODBC telepítéskor érdekes.',
	'DB_NAME'					=> 'Adatbázis neve',
	'DB_PASSWORD'				=> 'Adatbázisjelszó',
	'DB_PORT'					=> 'Adatbázisszerver portja',
	'DB_PORT_EXPLAIN'			=> 'Hagyd üresen, hacsak nem tudod, hogy a szerver egy nem szabványos porton üzemel.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Sajnáljuk, de ez a szkript nem támogatja a phpBB „%1$s”-nél korábbi verzióról való frissítést. A jelenlegi telepítésed „%2$s” verziójú. Kérjük, ezen szkript futtatása előtt frissíts egy korábbi verzióra. Ebben segítségett kaphatsz a phpBB.com támogatás fórumában.',
	'DB_USERNAME'				=> 'Adatbázis-felhasználónév',
	'DB_TEST'					=> 'Kapcsolat tesztelése',
	'DEFAULT_LANG'				=> 'Fórum alapértelmezett nyelve',
	'DEFAULT_PREFIX_IS'			=> 'A konvertáló nem talált táblákat a megadott előtaggal. Kérünk, győződj meg róla, hogy helyesen adtad meg az eredeti fórum adatait. A %1$s alapértelmezett tábla előtagja <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Nem került megadásra a test_file változó értéke a konvertálóban. Ha csak egy használója vagy ennek a konvertálónak, nem szabadna ezt a hibaüzenetet látnod – kérjük, értesítsd a konvertáló készítőjét. Ha a konvertáló készítője vagy, meg kell adnod egy az eredeti fórumban lévő állomány helyét, hogy le lehessen ellenőrizni az eredeti fórum elérési útját.',
	'DIRECTORIES_AND_FILES'		=> 'Könyvtárak és állományok beállítása',
	'DISABLE_KEYS'				=> 'Kulcsok kikapcsolása',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Távoli FTP támogatás [ telepítés ]',
	'DLL_GD'					=> 'GD grafikai támogatás [ vizuális megerősítés ]',
	'DLL_MBSTRING'				=> 'Multibyte karakterkódolás támogatás',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ ODBC-n keresztül',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL MySQLi kiterjesztéssel',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML támogatás [ Jabber ]',
	'DLL_ZLIB'					=> 'Zlib tömörítés támogatás [ .gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Konfiguráció letöltése',
	'DL_CONFIG_EXPLAIN'			=> 'Letöltheted a teljes conifg.php-t a saját számítógépedre. Ezután fel kell töltened ezt az állományt kézzel a phpBB gyökérkönyvtárába, felülírva a már létező config.php-t. Ne feledkezz meg róla, hogy az állományt ASCII módban töltsd fel (ha ezt nem tudod hogyan teheted meg, nézd meg az FTP programod dokumentációját). Ha felöltötted a config.php-t, kattints a „Kész” gombra, hogy továbblépj a következő lépésre.',
	'DL_DOWNLOAD'				=> 'Letöltés',
	'DONE'						=> 'Kész',

	'ENABLE_KEYS'				=> 'Kulcsok újra bekapcsolása… Ez eltarthat egy ideig.',

	'FILES_OPTIONAL'			=> 'Opcionális könyvtárak és állományok',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcionális</strong> – Ezen könyvtárak, állományok, illetve jogosultságbeállítások megléte nem feltétlenül szükséges. A telepítőrendszer különböző módokon megpróbálja majd helyettesíteni őket, azonban a meglétük felgyorsítja a telepítést.',
	'FILES_REQUIRED'			=> 'Könyvtárak és állományok',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Szükséges</strong> – A phpBB-nek a helyes működéshez hozzá kell tudnia férnie, illetve tudnia kell írnia néhány állományba vagy könyvtárba. Ha a „Nem található” feliratot látod, akkor létre kell hoznod a megfelelő állományt vagy könyvtárat. Ha a „Nem írható” feliratot látod, akkor meg kell változtatnod az adott állomány vagy könyvtár jogosultságát, hogy a phpBB írni tudjon bele.',
	'FILLING_TABLE'				=> '<strong>%s</strong> tábla feltöltése',
	'FILLING_TABLES'			=> 'Táblák feltöltése',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'A phpBB már nem támogatja a 2.1-nél korábbi verziójú Firebird/Interbase adatbázisokat. Kérjük, a frissítés folytatása előtt frissítsd legalább 2.1-es verziójúra a Firebirdöt.',
	'FINAL_STEP'				=> 'Végső lépés végrehajtása',
	'FORUM_ADDRESS'				=> 'Fórum webcíme',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Az eredeti fórumod URL-je, például <samp>http://www.pelda.hu/phpBB2/</samp>. Ha megadod, ez a régi cím lecserélésre kerül az új webcímre a hozzászólásokban, a privát üzenetekben és az aláírásokban.',
	'FORUM_PATH'				=> 'Fórum elérési útja',
	'FORUM_PATH_EXPLAIN'		=> 'Az eredeti fórum <strong>relatív</strong> elérési útja a <strong>jelenlegi phpBB3-mad gyökérkönyvtárához viszonyítva</strong>.',
	'FOUND'						=> 'Létezik',
	'FTP_CONFIG'				=> 'Konfiguráció átvitele FTP-n',
	'FTP_CONFIG_EXPLAIN'		=> 'A phpBB észrevette az FTP modul elérhetőségét a szerveren. Megpróbálhatod így átmásolni a config.php-t. Ehhez meg kell adnod az alábbi információkat. Ne feledkezz meg róla, hogy ez a felhasználónév és jelszó a szerverhez tartozik! (Ha nem vagy biztos benne mik ezek, kérdezd meg a tárhelyszolgáltatódat.)',
	'FTP_PATH'					=> 'FTP elérési út',
	'FTP_PATH_EXPLAIN'			=> 'Az elérési út a gyökérkönyvtáradtól a phpBB-hez, pl. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Feltöltés',

	'GPL'						=> 'Általános Nyilvános Licenc',

	'INITIAL_CONFIG'			=> 'Alap konfiguráció',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Ahhoz, hogy a phpBB működni tudjon, meg kell adnod néhány egyedi információt. Ha nem tudod, hogyan tudsz csatlakozni az adatbázisodhoz, kérünk, lépj kapcsolatba a tárhelyszolgáltatóddal, vagy fordulj a phpBB-t támogató fórumokhoz. Mielőtt bármilyen adatot megadsz, kérünk, alaposan győződj meg annak helyességéről.',
	'INSTALL_CONGRATS'			=> 'Gratulálunk!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Sikeresen telepítetted a phpBB %1$s-t. Kérünk, a továbblépéshez válassz egy lehetőséget az alábbiak közül:</p>
		<h2>Már meglévő fórum átkonvertálása</h2>
		<p>A phpBB Egyesített Konvertáló Keretrendszer segítségével át lehet konvertálni phpBB 2.0.x-es vagy más fórummotort használó fórumokat phpBB3-assá. Ha át szeretnél konvertálni egy már meglévő fórumot, <a href="%2$s">lépj tovább a konvertálóhoz</a>.</p>
		<h2>A fórum használatba vétele</h2>
		<p>Az alábbi gombra kattintva az adminisztrátori vezérlőpult (AVP) statisztikai adatok küldése oldalára jutsz. Nagyra értékelnénk, ha segítenél nekünk ezen információk elküldésével. Ezután szánj rá egy kis időt, és vizsgáld meg a beállítási lehetőségeket. Ne feledkezz meg róla, hogy a phpBB-vel kapcsolatban segítséget nyújt az angol <a href="http://www.phpbb.com/support/documentation/3.0/">Felhasználói kézikönyv</a> és a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB.com támogatás fóruma</a>; további információt a <a href="%3$s">README</a>-ben találsz.</p><p><strong>Most kérjük, töröld, helyezd át vagy nevezd át az install könyvtárat, mert amíg ez a könyvtár létezik, csak az adminisztrátori vezérlőpult (AVP) lesz elérhető.</strong>',

	'INSTALL_INTRO'				=> 'Üdvözlünk a telepítőben',
	'INSTALL_INTRO_BODY'		=> 'Ezen menüpont segítségével feltelepítheted a phpBB3-mat a szerveredre.</p><p>A folytatás során szükséged lesz az adatbázis adatokra. Ha nem ismered ezeket, lépj kapcsolatba a tárhelyszolgáltatóddal, és tájékozódj róluk. Ezen adatok nélkül nem tudsz továbblépni. A következőkre lesz szükséged:</p>
	<ul>
		<li>az adatbázis típusára – milyen adatbázisrendszert fogsz használni;</li>
		<li>az adatbáziskiszolgáló hosztnevére vagy DSN-jére – az adatbázisszerver címe, elérhetősége;</li>
		<li>az adatbáziskiszolgáló portjára – milyen porton lehet csatlakozni az adatbázisszerverhez (az esetek nagy többségében ez nem szükséges);</li>
		<li>az adatbázis nevére – az adatbázis neve a szerveren;</li>
		<li>az adatbázis-felhasználónévre és az ehhez tartozó jelszóra – a kapcsolódáshoz szükséges adatok.</li>
	</ul>

	<p><strong>Megjegyzés:</strong> ha SQLite-ot használsz, a DSN mezőben a teljes elérési utat add meg az adatbázishoz, valamint hagyd a felhasználónév és a jelszó mezőt üresen. Biztonsági szempontból fontos, hogy az adatbázis-állomány ne egy webről elérhető könyvtárban legyen tárolva.</p>

	<p>A phpBB3 a következő adatbázisrendszereket támogatja:</p>
	<ul>
		<li>MySQL 3.23 vagy újabb (MySQLi is támogatott)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 vagy újabb (közvetlenül ODBC-n keresztül)</li>
		<li>Oracle</li>
	</ul>

	<p>A választásnál csak a szerver által támogatott adatbázisok kerülnek majd megjelenítésre.',
	'INSTALL_INTRO_NEXT'		=> 'A telepítés megkezdéséhez nyomd meg az alábbi gombot.',
	'INSTALL_LOGIN'				=> 'Belépés',
	'INSTALL_NEXT'				=> 'Következő lépés',
	'INSTALL_NEXT_FAIL'			=> 'Néhány teszt nem volt sikeres. Mielőtt továbbléphetnél a következő lépésre, ezeket a problémákat meg kell oldanod. A hibák hiányos telepítéshez vezethetnek.',
	'INSTALL_NEXT_PASS'			=> 'Minden szükséges teszt sikeres volt, továbbléphetsz a következő lépésre. Ha megváltoztattál volna valamit, és újra szeretnéd tesztelni a beállításokat, azt is megteheted.',
	'INSTALL_PANEL'				=> 'Telepítőrendszer',
	'INSTALL_SEND_CONFIG'		=> 'Sajnos a phpBB nem tudta kiírni a konfigurációs információkat közvetlenül a config.php-be. Ez azért lehet, mert ez az állomány vagy nem létezik, vagy nem írható. A config.php létrehozására több lehetőséged van, melyeket az alábbi lista sorol fel.',
	'INSTALL_START'				=> 'Telepítés megkezdése',
	'INSTALL_TEST'				=> 'Tesztelés újra',
	'INST_ERR'					=> 'Telepítési hiba',
	'INST_ERR_DB_CONNECT'		=> 'Nem sikerült csatlakozni az adatbázishoz. A hibaüzenetet lásd alább.',
	'INST_ERR_DB_FORUM_PATH'	=> 'A megadott adatbázis-állomány a fórum könyvtárán belül van. Ezt az állományt egy webről nem elérhető könyvtárba kell raknod.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nincs hibaüzenet.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A kiszolgálón lévő MySQL nem kompatibilis a kiválasztott „MySQL MySQLi kiterjesztéssel” csatlakozási móddal. Kérjük, a „MySQL”-t válaszd ki.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Az SQLite kiterjesztés verziója túl régi, frissíteni kell legalább a 2.8.2-es verzióra.',
	'INST_ERR_DB_NO_ORACLE'		=> 'A szerveren lévő Oracle verziója megköveteli, hogy a <var>NLS_CHARACTERSET</var> paraméter <var>UTF8</var>-ra legyen állítva. Frissítsd az Oracle verzióját legalább 9.2-esre, vagy változtasd meg a paraméter értékét.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'A kiszolgálón lévő Firebird verziója régebbi, mint 2.1, kérünk, frissíts egy újabb verzióra. ',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'A kiválasztott Firebird adatbázis „page size” értéke kisebb, mint 8192, legalább ennyinek kell lennie.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'A kiválasztott adatbázis nem <var>UNICODE</var> vagy <var>UTF8</var> karakterkódolással került létrehozásra. Próbáld meg a telepítést egy <var>UNICODE</var> vagy <var>UTF8</var> karakterkódolású adatbázissal. ',
	'INST_ERR_DB_NO_NAME'		=> 'Nem adtad meg az adatbázis nevét.',
	'INST_ERR_EMAIL_INVALID'	=> 'A megadott e-mail cím hibás.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'A megadott e-mail címek nem egyeznek meg.',
	'INST_ERR_FATAL'			=> 'Súlyos telepítési hiba',
	'INST_ERR_FATAL_DB'			=> 'Egy súlyos és nem helyreállítható adatbázishiba lépett fel. Lehet, hogy azért, mert az adatbázis-felhasználónak nincs jogosultsága néhány művelet elvégzéséhez (<code>CREATE TABLES</code>, <code>INSERT</code> stb.). További információt alább találsz. Lépj kapcsolatba a tárhelyszolgáltatóddal, és/vagy fordulj a phpBB-vel foglalkozó fórumokhoz.',
	'INST_ERR_FTP_PATH'			=> 'Nem sikerült elérni a megadott könyvtárat, kérjük, ellenőrizd az elérési utat.',
	'INST_ERR_FTP_LOGIN'		=> 'Nem sikerült belépni az FTP szerverre, ellenőrizd a megadott felhasználónevet és jelszót.',
	'INST_ERR_MISSING_DATA'		=> 'A blokkban található összes mezőt ki kell töltened.',
	'INST_ERR_NO_DB'			=> 'Nem sikerült betölteni a megadott adatbázistípushoz tartozó PHP modult.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'A megadott jelszavak nem egyeznek meg.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A megadott jelszó túl hosszú, legfeljebb 30 karakter lehet.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A megadott jelszó túl rövid, legalább 6 karakternek kell lennie.',
	'INST_ERR_PREFIX'			=> 'A megadott előtaggal már léteznek táblák, kérünk, válassz másikat.',
	'INST_ERR_PREFIX_INVALID'	=> 'A megadott adatbázis-előtag nem megfelelő az adatbázis-kezelő rendszernek. Kérjük, változtasd meg, például próbáld meg eltávolítani a jelenlegiből a kötőjeleket és az ehhez hasonló karaktereket.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'A megadott tábla előtag túl hosszú, legfeljebb %d karakter lehet.',
	'INST_ERR_USER_TOO_LONG'	=> 'A megadott felhasználónév túl hosszú, legfeljebb 20 karakter lehet.',
	'INST_ERR_USER_TOO_SHORT'	=> 'A megadott felhasználónév túl rövid, legalább 3 karakternek kell lennie.',
	'INVALID_PRIMARY_KEY'		=> 'Hibás elsődleges kulcs: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Kérjük, vedd figyelembe, hogy a szkript futása eltarthat egy ideig. Kérjük, ne szakítsd meg.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> kiterjesztés ellenőrzése',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Szükséges</strong> – Az <samp>mbstring</samp> egy PHP kiterjesztés, mely többájtos karaktereket tartalmazó szövegekkel kapcsolatos funkciókért felelős. Néhány funkciója nem kompatibilis a phpBB-vel, ezért ezeknek kikapcsolva kell lenniük.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Függvény felülírás',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> 'Az <var>mbstring.func_overload</var> értékének 0-nak vagy 4-nek kell lennie.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Automatikus karakterkészlet konverzió',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Az <var>mbstring.encoding_translation</var> értékének 0-nak kell lennie.',
	'MBSTRING_HTTP_INPUT'					=> 'Bemeneti HTTP karakterkészlet konverzió',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> 'Az <var>mbstring.http_input</var> értékének <samp>pass</samp>-nak kell lennie.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Kimeneti HTTP karakterkészlet konverzió',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'Az <var>mbstring.http_output</var> értékének <samp>pass</samp>-nak kell lennie.',

	'MAKE_FOLDER_WRITABLE'		=> 'Kérünk, győződj meg róla, hogy a következő könyvtár létezik, és írható a webszerver által, majd próbálkozz újra:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Kérünk, győződj meg róla, hogy a következő könyvtárak léteznek, és írhatóak a webszerver által, majd próbálkozz újra:<br />»<strong>%s</strong>',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'A phpBB MySQL adatbázis-szerkezete elavult. A szerkezet MySQL 3.x/4.x-hez való, azonban a szerveren MySQL %2$s fut.<br /><strong>Mielőtt továbblépnél a fórum frissítéshez, frissítened kell az adatbázis szerkezetét.</strong><br /><br />Ennek mikéntjéről lásd az angol nyelvű <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">útmutatót a MySQL szerkezet frissítéséről</a>. Ha problémába ütközöl, vedd igénybe a phpBB-t támogató fórumokat (legyen az a href="http://www.phpbb.com/community/viewforum.php?f=46">az angol</a> vagy a href="http://phpbb.hu/forum">a magyar</a>).',

	'NAMING_CONFLICT'			=> 'Nevezési ütközés: a %s és a %s is fedőnév.<br /><br />%s',
	'NEXT_STEP'					=> 'Tovább a következő lépésre',
	'NOT_FOUND'					=> 'Nem található',
	'NOT_UNDERSTAND'			=> 'Nem sikerült értelmezni: %s #%d, %s tábla („%s”).',
	'NO_CONVERTORS'				=> 'Nincs elérhető konvertáló.',
	'NO_CONVERT_SPECIFIED'		=> 'Nem került konvertáló kiválasztásra.',
	'NO_LOCATION'				=> 'Nem sikerült meghatározni a helyét. Ha tudod, hogy az Imagemagick telepítve van, később megadhatod az elérési helyét az adminisztrátori vezérlőpultban.',
	'NO_TABLES_FOUND'			=> 'Nem találhatók adatbázistáblák.',
	'OVERVIEW_BODY'				=> 'Üdvözlünk a phpBB3-ban!<br /><br />A phpBB™ a legelterjedtebb nyílt forrású fórumrendszer a világon. A phpBB3 a 2000-ben kezdődött fejlesztés legfrissebb eleme, mely az elődeihez hasonlóan funkciógazdag, felhasználóbarát és teljes mértékben támogatott a phpBB Team által. A phpBB3 nagyot lép előre a phpBB2-t népszerűvé tevő területeken, számos általánosan kívánt funkciót tesz elérhetővé, melyek a korábbi verziókban nem voltak jelen. Reméljük, meghaladja várakozásaidat.<br /><br />Ez a telepítőrendszer végig fog vezetni a phpBB3 telepítésén, a phpBB3 legújabb verziójára való frissítésén, valamint más fórumrendszer phpBB3-ra való konvertálásán (beleértve a phpBB2-t). További információért, bátorítunk, hogy olvasd el az (angol nyelvű) <a href="../docs/INSTALL.html">telepítési útmutatót</a>.<br /><br />A phpBB3 licencének megtekintéséhez, a támogatás elérésének helyéhez, ill. a phpBB Team ehhez való hozzáállásának megismeréséhez, válaszd ki a megfelelő elemet az oldalsó menüből. A folytatáshoz, kérjük, válaszd ki fentebb a megfelelő fület.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 támogatás',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'A phpBB <strong>nem</strong> fog működni, ha a PHP a PCRE kiterjesztés UTF-8 támogatása nélkül került fordításra.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'getimagesize() PHP függvény elérhető',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Szükséges</strong> – A phpBB-nek a helyes működéshez szüksége van a getimagesize függvényre.',
	'PHP_OPTIONAL_MODULE'			=> 'Opcionális modulok',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcionális</strong> – Ezek a modulok vagy alkalmazások opcionálisak. Azonban ha elérhetők, extra funkciók használata válik lehetségessé velük.',
	'PHP_SUPPORTED_DB'				=> 'Támogatott adatbázisok',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Szükséges</strong> – A PHP-dnak legalább egy adatbázist támogatnia kell az alább felsoroltak közül. Ha egy adatbázismodul sem elérhető, lépj kapcsolatba a tárhelyszolgáltatóddal, vagy nézd át a megfelelő PHP telepítési dokumentációt tanácsért.',
	'PHP_REGISTER_GLOBALS'			=> '<var>register_globals</var> PHP beállítás kikapcsolva',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'A phpBB akkor is működni fog, ha ez a beállítás be van kapcsolva, azonban biztonsági szempontból ajánlott a kikapcsolása.',
	'PHP_SAFE_MODE'					=> 'Biztonságos mód',
	'PHP_SETTINGS'					=> 'PHP verzió és beállítások',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Szükséges</strong> – A phpBB telepítéséhez legalább 4.3.3-as verziójú PHP-val kell rendelkezned. Ha alább megjelenik a <var>biztonságos mód</var> felirat, akkor a PHP ebben a módban fut. Ez korlátozásokkal jár a távoli adminisztráció és ehhez hasonló funkciók terén.',
	'PHP_URL_FOPEN_SUPPORT'			=> '<var>allow_url_fopen</var> PHP beállítás bekapcsolva',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcionális</strong> – Ez a beállítás opcionális, bár a phpBB néhány funkciója, mint például a külső avatarok, nem fog rendesen működni nélküle.',
	'PHP_VERSION_REQD'				=> 'PHP verzió ≥ 4.3.3',
	'POST_ID'						=> 'Hozzászólás azonosító',
	'PREFIX_FOUND'					=> 'Az adatbázistábláid azt mutatják, hogy van már egy telepített phpBB-d, melynek a tábla előtagja <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Függvények/parancsok előfeldolgozásának végrehajtása',
	'PRE_CONVERT_COMPLETE'			=> 'Az előfeldolgozó lépések sikeresen végrehajtásra kerültek. Most már elkezdheted a tényleges konvertálást. Kérjük, vedd figyelembe, hogy néhány dolgot, lehet, hogy neked kell majd kézzel elvégezned, beállítanod. A konvertálás után különösen is ellenőrizd le a jogosultságokat, ha szükséges építsd újra a keresési indexet, és ellenőrizd, hogy az állományok sikeresen átmásolásra kerültek-e (például avatarok, emotikonok).',
	'PROCESS_LAST'					=> 'Végső műveletek végrehajtása',

	'REFRESH_PAGE'				=> 'Automatikus továbblépés',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ha igenre állítod, a konvertáló egy lépés befejezése után mindig újratölti az oldalt, ezzel továbblépve a következő lépésre. Ha most konvertálsz az első alkalommal, és csak tesztelni szeretnél, illetve előre tájékozódni az esetlegesen felmerülő hibákról, ajánljuk, hogy állítsd ezt a beállítást nemre.',
	'REQUIREMENTS_TITLE'		=> 'Telepítési követelmények',
	'REQUIREMENTS_EXPLAIN'		=> 'A phpBB telepítése előtt még lefuttatunk néhány tesztet a szerveren, hogy meggyőződjünk, biztosan sikeresen tudod telepíteni és üzemeltetni a phpBB-t. Kérjük, nézd át alaposan az eredményeket, és ne lépj tovább addig, amíg az összes szükséges teszt sikeres nem lesz. Ha opcionális tesztekhez kapcsolódó funkciókat is használni szeretnél, győződj meg arról is, hogy a megfelelő opcionális tesztek is sikeresek.',
	'RETRY_WRITE'				=> 'Konfiguráció kiírásának újra megpróbálása',
	'RETRY_WRITE_EXPLAIN'		=> 'Megváltoztathatod a config.php jogosultságait, hogy a phpBB írni tudja azt. Ezután kattints az Újra gombra. Miután befejezted a phpBB telepítését, ne felejtsd el a config.php jogosultságait visszaállítani.',

	'SCRIPT_PATH'				=> 'phpBB elérési út',
	'SCRIPT_PATH_EXPLAIN'		=> 'A phpBB domain névhez viszonyított relatív elérési útja, pl. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Nyelv kiválasztása',
	'SERVER_CONFIG'				=> 'Szerver beállítások', // "Server configuration" konfiguráció
	'SEARCH_INDEX_UNCONVERTED'	=> 'A keresési index nem került konvertálásra',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'A kereső indexe nem lett átkonvertálva, így a keresések nem fognak találatot adni. A keresési index létrehozásához menj az adminisztrátori vezérlőpultra, válaszd ki a Karbantartást, majd az almenüben kattints a Keresési indexre.',
	'SOFTWARE'					=> 'Fórumszoftver',
	'SPECIFY_OPTIONS'			=> 'Konvertálás beállításainak megadása',
	'STAGE_ADMINISTRATOR'		=> 'Adminisztrátor adatok',
	'STAGE_ADVANCED'			=> 'Haladó beállítások',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Ezeket a beállításokat csak akkor add meg, ha biztosan tudod, hogy az alap beállítástól valami eltérőre van szükséged. Ha nem vagy benne biztos, lépj tovább a következő lépésre, ezeket később az adminisztrátori vezérlőpultról is megváltoztathatod.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurációs állomány',
	'STAGE_CREATE_TABLE'		=> 'Adatbázistáblák létrehozása',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'A phpBB 3.0 adatbázistáblái sikeresen létrejöttek, bennük néhány kezdeti adattal. Lépj tovább a következő oldalra, hogy befejezd a phpBB telepítését.',
	'STAGE_DATABASE'			=> 'Adatbázis adatok',
	'STAGE_FINAL'				=> 'Befejező lépés',
	'STAGE_INTRO'				=> 'Bevezető',
	'STAGE_IN_PROGRESS'			=> 'Konvertálás…',
	'STAGE_REQUIREMENTS'		=> 'Követelmények',
	'STAGE_SETTINGS'			=> 'Beállítások',
	'STARTING_CONVERT'			=> 'Konvertálás elkezdése',
	'STEP_PERCENT_COMPLETED'	=> 'Lépés: <strong>%d</strong> / <strong>%d</strong>',
	'SUB_INTRO'					=> 'Bevezető',
	'SUB_LICENSE'				=> 'Licenc',
	'SUB_SUPPORT'				=> 'Támogatás',
	'SUCCESSFUL_CONNECT'		=> 'Sikeres kapcsolódás',
	'SUPPORT_BODY'			=> 'A phpBB3 stabil kiadásaihoz teljes támogatás elérhető, térítésmentesen. Ez magában foglalja az alábbiakat:</p><ul><li>telepítés,</li><li>konfiguráció,</li><li>technikai kérdések,</li><li>a szoftverben lévő lehetséges hibákkal kapcsolatos problémák,</li><li>frissítés a Release Candidate (RC) verziókról a legfrissebb stabil verzióra,</li><li>konvertálás phpBB 2.0.x-ről phpBB3-ra,</li><li>konvertálás más fórumszoftverről phpBB3-ra (ezzel kapcsolatban lásd a <a href="http://www.phpbb.com/community/viewforum.php?f=65">Konvertálók fórumot</a>).</li></ul><p>A phpBB3 még béta verzióját futtató felhasználóinknak tanácsoljuk, hogy a jelenlegi fórumukat cseréljék le egy friss telepítésűre a legújabb verzióból.</p><h2>MOD-ok, megjelenések</h2><p>A MOD-okkal kapcsolatos ügyekkel, kérünk, a megfelelő, <a href="http://www.phpbb.com/community/viewforum.php?f=81">Modifikációk fórumba</a> írj.<br />A megjelenésekkel, sablonokkal és képkészletekkel kapcsolatban, kérünk, szintén fordulj az ezeknek megfelelő, <a href="http://www.phpbb.com/community/viewforum.php?f=80">Megjelenések fórumba</a>.<br /><br />Ha a kérdésed egy bizonyos csomagra irányul, kérünk, közvetlenül a csomaggal foglalkozó témába küldd a hozzászólásod.</p><h2>Támogatás elérhetősége</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">A phpBB üdvözlő csomag</a><br /><a href="http://www.phpbb.com/support/">Támogatás részleg</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Gyorstalpaló</a><br /><br />Hogy mindig azonnal értesülj a phpBB frissítéseiről, <a href="http://www.phpbb.com/support/">iratkozz fel a hírlevelünkre</a>.</p><h2>Saját nyelvű támogatás</h2><p>A phpBB.com angol nyelvű támogatása mellett a <a href="http://www.phpbb.com/support/intl/">nemzetközi phpBB oldalak</a> is örömmel állnak rendelkezésre. Ez a magyar nyelv esetében a <a href="http://phpbb.hu/">Magyar phpBB Közösség</a> oldalát jelenti. Ezeken a webhelyeken főképp az alap phpBB-hez nyújtanak támogatást, MOD-okhoz, megjelenésekhez többnyire csak részlegesen, nem minden esetben lehet segítséget kapni. Amennyiben az adott oldalon nem foglalkoznak az adott bővítménnyel, keresd fel a phpBB.com megfelelő fórumtémáját.<br /><br />',

	'SYNC_FORUMS'				=> 'Fórumok szinkronizációjának megkezdése',
 	'SYNC_POST_COUNT'			=> 'Hozzászólásszámok szinkronizálása',
 	'SYNC_POST_COUNT_ID'		=> 'Hozzászólásszámok szinkronizálása; <var>entry</var> %1$s – %2$s.',
	'SYNC_TOPICS'				=> 'Témák szinkronizációjának megkezdése',
	'SYNC_TOPIC_ID'				=> 'Témák szinkronizálása; <var>topic_id</var>: %1$s – %2$s',

	'TABLES_MISSING'			=> 'Az alábbi táblák nem találhatók:<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Adatbázis tábláinak előtagja',
	'TABLE_PREFIX_SAME'			=> 'Annak a szoftvernek a tábla előtagját add meg, amelyről konvertálsz.<br />» A megadott tábla előtag %s volt.',
	'TESTS_PASSED'				=> 'Sikeres teszt',
	'TESTS_FAILED'				=> 'Sikertelen teszt',

	'UNABLE_WRITE_LOCK'			=> 'Nem sikerült írni a lock állományt.',
	'UNAVAILABLE'				=> 'Nem elérhető',
	'UNWRITABLE'				=> 'Nem írható',
	'UPDATE_TOPICS_POSTED'		=> 'Téma információk generálása',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Hiba lépett fel a téma információk generálása közben. A konvertálás befejezése után az adminisztrátori vezérlőpultban újra megpróbálhatod ezt a lépést.',
	'VERIFY_OPTIONS'			=> 'Konvertálás beállítások ellenőrzése',


	'VERSION'					=> 'Verzió',

	'WELCOME_INSTALL'			=> 'Üdvözlünk a phpBB 3 telepítésnél',
	'WRITABLE'					=> 'Írható',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Az összes állomány megfelel a legújabb verziójú phpBB csomagnak. Most <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">lépj be a fórumon</a>, és ellenőrizd, hogy minden rendesen működik-e. Ne felejtsd el törölni, átnevezni vagy áthelyezni az install könyvtárat! Kérünk, küldj friss adatokat a szerver és fórum beállításaidról az AVP <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">statisztikai adatok küldése</a> oldaláról!',
	'ARCHIVE_FILE'				=> 'Csomagbeli forrásállomány',

	'BACK'				=> 'Vissza',
	'BINARY_FILE'		=> 'Bináris állomány',
	'BOT'				=> '(Kereső)robot',

 	'CHANGE_CLEAN_NAMES'			=> 'Az azonos felhasználónevek kiszűréséhez használt eljárás megváltozott. Van néhány felhasználó, akiknek az új eljárás szerint azonos a felhasználónevük. Ezért a továbblépés előtt, ezeket a felhasználókat át kell nevezned vagy törölnöd kell, hogy biztosan csak egy felhasználó tartozzon egy felhasználónévhez.',
	'CHECK_FILES'					=> 'Állományok összevetése',
	'CHECK_FILES_AGAIN'				=> 'Állományok összevetése újra',
	'CHECK_FILES_EXPLAIN'			=> 'A következő lépésben az összes állomány összevetésre kerül a frissítési állományokkal – ez eltarthat egy ideig, ha ez az első összevetés.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Az adatbázisban lévő információk szerint a legújabb verziót használod. Most tanácsos továbblépned az állományok összevetéséhez, hogy megbizonyosodj róla, tényleg a legújabb verzióját futtatod a phpBB-nek.',
	'CHECK_UPDATE_DATABASE'			=> 'Frissítés folytatása',
	'COLLECTED_INFORMATION'			=> 'Állomány információk',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Az alábbi lista információkat tartalmaz a frissítendő állományokról. Olvasd el a blokkok előtti magyarázó szöveget, hogy tudd, milyen állományok tartoznak oda, és mit kell ezekkel tenned a sikeres frissítés érdekében.',
	'COLLECTING_FILE_DIFFS'			=> 'Állományok közötti különbségek összegyűjtése',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Most <a href="../ucp.php?mode=login">lépj be a fórumon</a>, és ellenőrizd, hogy minden rendesen működik-e. Ne felejtsd el törölni, átnevezni vagy áthelyezni az install könyvtárat!',
	'CONTINUE_UPDATE_NOW'			=> 'Frissítési folyamat folytatása most',	// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Frissítés folytatása most',				// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Ütközés kezdete – frissítés előtti eredeti kód',
	'CURRENT_VERSION'				=> 'Jelenlegi verzió',

	'DATABASE_TYPE'						=> 'Adatbázis típusa',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Az install könyvtárban található adatbázis-frissítő állomány nem a legújabb. Kérünk, győződj meg róla, hogy a jó verzióját töltötted fel az állománynak.',
	'DELETE_USER_REMOVE'				=> 'Felhasználó törlése és hozzászólásainak eltávolítása',
	'DELETE_USER_RETAIN'				=> 'Felhasználó törlése de hozzászólásainak megtartása',
	'DESTINATION'						=> 'Célállomány',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Az új/frissített állomány kódja',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Állomány frissítésének kihagyása',
	'DONE'								=> 'Kész',
	'DOWNLOAD'							=> 'Letöltés',
	'DOWNLOAD_AS'						=> 'Tömörítés',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Módosított állományok letöltése (javasolt mód)',
	'DOWNLOAD_CONFLICTS'				=> 'Ezen állomány ütközéseinek letöltése',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Az ütközések megvizsgálásához keress a &lt;&lt;&lt;-re',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Megváltozott állományokat tartalmazó csomag letöltése',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Miután letöltötted a csomagot, tömörítsd ki. A csomagban található megváltozott állományokat töltsd fel a phpBB-d gyökérkönyvtárába, a megfelelő helyükre. Miután feltöltötted az összes állományt, vesd össze újra az állományokat a másik alábbi gomb segítségével.',

	'ERROR'			=> 'Hiba',
	'EDIT_USERNAME'	=> 'Felhasználónév módosítása',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Az állomány már a legújabb verziójú',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Ezen az állományon nem végezhető diff.',
	'FILE_USED'						=> 'Információ a következő állományból',			// Single file
	'FILES_CONFLICT'				=> 'Ütközéseket tartalmazó állományok',
	'FILES_CONFLICT_EXPLAIN'		=> 'A következő állományok korábban módosítva lettek, és nem teljesen egyeznek meg a régiverzió-beli állománnyal. Az egyesítésük során ütközés lép fel. Kérünk, járj utána ezeknek az ütközéseknek, és próbáld meg megoldani őket kézzel, vagy folytasd a frissítést a kívánt egyesítési mód kiválasztásával. Ha saját magad oldod meg az ütközések problémáját, miután megváltoztattad az állományokat, vesd őket újra össze. Emellett választhatsz különböző egyesítési módok közül is. Az első használata eredményeképp az új állományban a régi állomány ütköző sorai nem lesznek megtalálhatók, míg a második használatakor az új állomány változásai vesznek el.',
	'FILES_MODIFIED'				=> 'Módosított állományok',
	'FILES_MODIFIED_EXPLAIN'		=> 'A következő állományok korábban módosítva lettek, és nem teljesen egyeznek meg a régiverzió-beli állománnyal. A frissített állomány a saját módosításaid és az új állomány egyesítése lesz.',
	'FILES_NEW'						=> 'Új állományok',
	'FILES_NEW_EXPLAIN'				=> 'A következő állományok jelenleg nincsenek ott a phpBB-dben. Ezek az állományok hozzáadásra kerülnek a fórumodhoz.',
	'FILES_NEW_CONFLICT'			=> 'Új ütköző állományok',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'A következő állományok a legújabb verzióban jelentek meg, de megállapításra került, hogy ezen új állomány helyén neked már van egy ilyen nevű állományod. Ezek az állományok felülírásra kerülnek az új állományokkal.',
	'FILES_NOT_MODIFIED'			=> 'Nem módosított állományok',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'A következő állományok nem lettek módosítva, megegyeznek a phpBB azon verziójú állományaival, melyről frissíteni szeretnél.',
	'FILES_UP_TO_DATE'				=> 'Már frissített állományok',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'A következő állományok már a legújabb verziójúak, ezért nem kell frissíteni őket.',
	'FTP_SETTINGS'					=> 'FTP beállítások',
	'FTP_UPDATE_METHOD'				=> 'FTP feltöltés',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'A talált frissítő állományok nem megfelelőek a phpBB-d verziójának. A jelenlegi phpBB-d verziója %1$s, a frissítő állományok pedig %2$s verzióról %3$s verzióra való frissítésre szolgálnak.',
	'INCOMPLETE_UPDATE_FILES'		=> 'A frissítő állományok hiányosak.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Az adatbázis-frissítés sikeres volt. Most folytasd a frissítést.',

	'KEEP_OLD_NAME'		=> 'Felhasználónév megtartása',

	'LATEST_VERSION'		=> 'Legfrissebb verzió',
	'LINE'					=> 'Sor',
	'LINE_ADDED'			=> 'Hozzáadva',
	'LINE_MODIFIED'			=> 'Módosítva',
	'LINE_REMOVED'			=> 'Eltávolítva',
	'LINE_UNMODIFIED'		=> 'Változatlan',
	'LOGIN_UPDATE_EXPLAIN'	=> 'A phpBB frissítéséhez először be kell jelentkezned.',

	'MAPPING_FILE_STRUCTURE'	=> 'A feltöltés megkönnyítése céljából alább szerepelnek a feltöltendő fájlok a helyükkel együtt, ahová fel kell őket töltened.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Változtatások egyesítése',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Nincs egyesítés – új állomány használata',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Nincs egyesítés – jelenleg fent lévő állomány használata',
	'MERGE_MOD_FILE_OPTION'		=> 'Állományok egyesítése, ütköző részben a módosított kód használata',
	'MERGE_NEW_FILE_OPTION'		=> 'Állományok egyesítése, ütköző részben az új phpBB kód használata',
	'MERGE_SELECT_ERROR'		=> 'Az ütközéseket tartalmazó állományok egyesítési módja nincs helyesen kiválasztva.',
	'MERGING_FILES'				=> 'Különbségek egyesítése',
	'MERGING_FILES_EXPLAIN'		=> 'A végső állományváltozások összegyűjtés alatt vannak.<br /><br />Kérünk, várj míg a phpBB elvégzi az összes műveletet a megváltozott állományokon.',

	'NEW_FILE'						=> 'Ütközés vége',
	'NEW_USERNAME'					=> 'Új felhasználónév',
	'NO_AUTH_UPDATE'				=> 'Nincs jogosultságod a frissítéshez.',
	'NO_ERRORS'						=> 'Nincs hiba',
	'NO_UPDATE_FILES'				=> 'Következő állományok frissítésének kihagyása',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'A következő, új vagy módosított állományok könyvtára, melyben elvileg lenniük kéne, nem található. Ha az alábbi lista olyan állományokat is tartalmaz, melyek nem a language/ vagy a styles/ könyvtárban vannak, akkor valószínűleg módosítottad a könyvtárszerkezeted, a frissítés pedig nem biztos, hogy teljes lesz.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nem található érvényes frissítési könyvtár, kérünk, győződj meg róla, hogy feltöltötted a szükséges állományokat.<br /><br />A phpBB-d valószínűleg <strong>nem</strong> a legújabb verziójú. A jelenlegi %1$s verziójú phpBB-dhez van elérhető frissítés. A %2$s verzióról %3$s verzióra frissítő csomag letöltéséhez látogasd meg a <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> weboldalt.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A phpBB-d a legújabb verziójú. Nincs szükség a frissítő futtatására. Ha le szeretnéd ellenőrizni a phpBB-d állományait, győződj meg róla, hogy feltöltötted a megfelelő frissítő állományokat.',
	'NO_UPDATE_INFO'				=> 'Nem található az információ a frissítő állományról.',
	'NO_UPDATES_REQUIRED'			=> 'Nincs szükség frissítésre.',
	'NO_VISIBLE_CHANGES'			=> 'Nincs látható változás.',
	'NOTICE'						=> 'Észrevétel',
	'NUM_CONFLICTS'					=> 'Ütközések száma',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Jelenleg %1$d állomány különbségei kerültek ellenőrzésre a %2$d-ből.<br />Kérünk, várj míg az összes állomány ellenőrzése befejeződik.',

	'OLD_UPDATE_FILES'		=> 'A frissítő állományok elavultak. A phpBB %1$s verzióról %2$s verzióra való frissítésre szolgálnak, de a phpBB legújabb verziója a %3$s.',

 	'PACKAGE_UPDATES_TO'				=> 'A jelenlegi csomag a következő verzióra frissít',
	'PERFORM_DATABASE_UPDATE'			=> 'Adatbázis-frissítés végrehajtása',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Alább találsz egy linket az adatbázis-frissítő szkriptre. Az adatbázis-frissítés eltarthat egy ideig, tehát kérjük, ne állítsd le a szkript futattását, akkor se, ha az megakadni látszik. Miután elvégezted az adatbázis-frissítést, zárd be az ablakot, és folytasd a frissítés folyamatát.',
	'PREVIOUS_VERSION'					=> 'Előző verzió',
	'PROGRESS'							=> 'Haladás',

	'RESULT'					=> 'Eredmény',
	'RUN_DATABASE_SCRIPT'		=> 'Adatbázis frissítése most',

	'SELECT_DIFF_MODE'			=> 'Diff mód kiválasztása',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Letöltendő csomag formátumának kiválasztása',
	'SELECT_FTP_SETTINGS'		=> 'FTP beállítások megadása',
	'SHOW_DIFF_CONFLICT'		=> 'Különbségek/ütközések megjelenítése',
	'SHOW_DIFF_FINAL'			=> 'Eredmény megjelenítése',
	'SHOW_DIFF_MODIFIED'		=> 'Különbségek egyesítésének megjelenítése',
	'SHOW_DIFF_NEW'				=> 'Állomány tartalmának megjelenítése',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Különbségek megjelenítése',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Különbségek megjelenítése',
	'SOME_QUERIES_FAILED'		=> 'Néhány parancs nem járt sikerrel, az SQL lekéréseket és a hibaüzeneteket megtalálod alább.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Valószínűleg nincs gond, a frissítés folytatódni fog. Amennyiben mégsem, kérj segítséget a phpBB-t támogató fórumokban. További információért a támogatással kapcsolatban lásd a <a href="../docs/README.html">README</a>-t.',
	'STAGE_FILE_CHECK'			=> 'Állományok összevetése',
	'STAGE_UPDATE_DB'			=> 'Adatbázis frissítése',
	'STAGE_UPDATE_FILES'		=> 'Állományok frissítése',
	'STAGE_VERSION_CHECK'		=> 'Verzió ellenőrzése',
	'STATUS_CONFLICT'			=> 'Ütközéseket eredményező módosított állomány',
	'STATUS_MODIFIED'			=> 'Módosított állomány',
	'STATUS_NEW'				=> 'Új állomány',
	'STATUS_NEW_CONFLICT'		=> 'Ütköző új állomány',
	'STATUS_NOT_MODIFIED'		=> 'Nem módosított állomány',
	'STATUS_UP_TO_DATE'			=> 'Már frissített állomány',

	'TOGGLE_DISPLAY'			=> 'Állományok listájának megjelenítése/elrejtése',
	'TRY_DOWNLOAD_METHOD'		=> 'Érdemes megpróbálkoznod a módosított állományok letöltése móddal.<br />Ez mindig működik, és ez a javasolt frissítési mód is.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Megpróbálkozás a móddal',

	'UPDATE_COMPLETED'				=> 'Frissítés befejezve',
	'UPDATE_DATABASE'				=> 'Adatbázis frissítése',
	'UPDATE_DATABASE_EXPLAIN'		=> 'A következő lépésben az adatbázis kerül frissítésre.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Adatbázis-szerkezet frissítése',
	'UPDATE_FILES'					=> 'Állományok frissítése',
	'UPDATE_FILES_NOTICE'			=> 'Kérünk, győződj meg róla, hogy a phpBB állományait is frissítetted, ez az állomány csak az adatbázist frissíti.',
	'UPDATE_INSTALLATION'			=> 'A phpBB frissítése',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Itt frissítheted a phpBB-d a legújabb verzióra.<br />A frissítés folyamata során minden állomány ellenőrzésre kerül. A tényleges frissítés előtt minden különbséget átnézhetsz.<br /><br />Maga az állományok frissítése két módon végezhető el.</p><h2>Kézi frissítés</h2><p>Ezen frissítési mód használatakor csak a saját megváltozott állományaidat töltöd le, így meggyőződhetsz róla, hogy nem vesztesz el semmilyen módosítást, amit csinálhattál. Miután letöltötted ezt a csomagot, a benne lévő állományokat fel kell töltened a phpBB-d gyökérkönyvtárába, a megfelelő helyükre. Ezután mégegyszer összevetheted az állományokat, hogy leellenőrizd, a megfelelő helyre töltötted fel őket.</p><h2>Automatikus frissítés FTP-vel</h2><p>Ez a frissítési mód hasonló az előbbihez, azonban ennél nem kell saját magadnak letöltened, majd feltöltened a megváltozott állományokat – ezt megteszi a phpBB. Ezen mód használatához ismerned kell az FTP-belépéshez szükséges dolgokat, mivel egy űrlapon meg kell adnod ezeket. Miután ezt befejezted, át leszel irányítva az állományok összevetéséhez, hogy meggyőződhess, minden sikeresen frissítésre került.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Verziómegjelenési közlemény</h1>

		<p>A frissítés folytatása előtt, kérjük, olvasd el <a href="%1$s" title="%1$s"><strong>a legfrissebb verziót bejelentő közleményt</strong></a>, mivel hasznos információkat tartalmazhat. Mindenképp szerepel benne a változások listája és közvetlen link az új verzió letöltésére.</p>

		<br />

		<h1>Frissítés módja az automatikus frissítő csomag használatával</h1>

		<p>Az itt részletezett javasolt frissítési mód az automatikus frissítő csomag használatát feltételezi. A phpBB-det az INSTALL.html-ben leírt módokon is frissítheted. A phpBB3 automatikusan történő frissítése a következő lépésekből áll:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Menj a <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com letöltések oldalára</a>, és töltsd le a megfelelő automatikus frissítő csomagot.<br /><br /></li>
			<li>Csomagold ki a csomagot.<br /><br /></li>
			<li>A kicsomagolt csomag install könyvtárát töltsd fel a phpBB-d gyökérkönyvtárába (ahol a config.php található).<br /><br /></li>
		</ul>

		<p>Miután feltöltötted, a normál felhasználók nem tudják majd elérni a fórumot az install könyvtár létezése miatt.<br /><br />
		<strong><a href="%2$s" title="%2$s">Most kezdd el a frissítést az install könyvtárba lépéssel.</a></strong><br />
		<br />
		Ez után a rendszer végigvezet a frissítés folyamatán. A frissítés végeztével meg fog jelenni egy értesítő üzenet.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Befejezetlen frissítés</h1>

		<p>A phpBB észrevett egy befejezetlen automatikus frissítési próbálkozást. Kérünk, győződj meg róla, hogy elvégezted az automatikus frissítő összes lépését. Alább megtalálod a linket újra, vagy menj közvetlenül az install könyvtárba.</p>
	',
	'UPDATE_METHOD'					=> 'Frissítési mód',
	'UPDATE_METHOD_EXPLAIN'			=> 'Most kiválaszthatod a kívánt frissítési módot. Ha az FTP feltöltést választod, egy űrlap fog megjelenni, ahol meg kell adnod az FTP-csatlakozáshoz szükséges adatokat. Ezen mód használatakor az állományok automatikusan áthelyezésre kerülnek az új helyükre, és a régi állományokról biztonsági másolat készül az állományok nevéhez való .bak kiterjesztés hozzáfűzésével. Ha a módosított fájlok letöltését választod, ki kell csomagolnod a letöltött csomagot, majd kézzel feltöltened a tartalmát a megfelelő helyre.',
 	'UPDATE_REQUIRES_FILE'			=> 'A frissítőnek szüksége van a következő állomány létezésére: %s',
	'UPDATE_SUCCESS'				=> 'Sikeres frissítés',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Minden állomány sikeresen frissítésre került. A következő lépésben az összes állomány újra leellenőrzésre került, hogy megbizonyosodj róla, hogy az összes állomány sikeresen frissítve lett. ',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Verziószám frissítése és táblák optimalizálása',
	'UPDATING_DATA'					=> 'Adatok frissítése',
	'UPDATING_TO_LATEST_STABLE'		=> 'Adatbázis frissítése az utolsó stabil kiadásra',
	'UPDATED_VERSION'				=> 'Frissített verzió',
	'UPLOAD_METHOD'					=> 'Feltöltési mód',

	'UPDATE_DB_SUCCESS'				=> 'Sikeres adatbázis-frissítés',
	'USER_ACTIVE'					=> 'Aktív felhasználó',
	'USER_INACTIVE'					=> 'Inaktív felhasználó',

	'VERSION_CHECK'					=> 'Verzió ellenőrzés',
	'VERSION_CHECK_EXPLAIN'			=> 'Itt ellenőrzésre kerül, hogy a phpBB-d a legfrissebb verziójú-e.',
	'VERSION_NOT_UP_TO_DATE'		=> 'A phpBB-d verziója nem a legújabb. Kérünk, folytasd a frissítést.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'A phpBB-d verziója nem a legújabb.<br />Alább találsz egy linket az új verziót bejelentő közleményre és instrukciókat a frissítés elvégzéséhez.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'A phpBB-d nem a legfrissebb verziójú.',
	'VERSION_UP_TO_DATE'			=> 'A phpBB-d a legfrissebb verziójú. Annak ellenére, hogy nem érhető el hozzá frissítés, továbbléphetsz, és leellenőrizheted az állományokat.',
	'VERSION_UP_TO_DATE_ACP'		=> 'A phpBB-d a legfrissebb verziójú. Nem érhető el hozzá frissítés.',
	'VIEWING_FILE_CONTENTS'			=> 'Állomány tartalmának megtekintése',
	'VIEWING_FILE_DIFF'				=> 'Állománykülönbségek megtekintése',

	'WRONG_INFO_FILE_FORMAT'	=> 'Hibás információsállomány-formátum',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Köszönettel: A csapat',
	'CONFIG_SITE_DESC'				=> 'A fórumod leíró rövid szöveg',
	'CONFIG_SITENAME'				=> 'domained.hu',

	'DEFAULT_INSTALL_POST'			=> 'Ez egy példa hozzászólás a frissen telepített phpBB3-madban. Ha gondolod, törölheted ezt a hozzászólást, ezt a témát és ezt a fórumot is, hiszen úgy tűnik, minden működik.',
	'DEFAULT_INSTALL_POST'			=> 'Ez egy példa hozzászólás a frissen telepített phpBB3-madban. Úgy néz ki, minden működik. Ha gondolod, törölheted ezt a hozzászólást, és folytathatod a fórumod felállítását. A telepítés alatt az első kategóriádhoz és az első fórumodhoz hozzárendelésre került egy jól használható jogosultságkészlet az előre meghatározott csoportok számára (adminisztrátorok, robotok, globális moderátorok, vendégek, regisztrált felhasználók és regisztrált COPPA felhasználók). Ha úgy döntesz, törlöd az első kategóriád és az első fórumod, az új fórumok, ill. kategóriák felvételénél ne felejts el jogosultságokat hozzárendelni a fentebb említett csoportoknak. Ajánlott ezt a kezdeti kategóriát és fórumot átnevezni, majd később az új kategóriák, fórumok létrehozásánál a jogosultságokat ezekről másolni át. Sok sikert a fórumodhoz!',

	'EXT_GROUP_ARCHIVES'			=> 'Archívumok',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumentumok',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Letölthető állományok',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash állományok',
	'EXT_GROUP_IMAGES'				=> 'Képek',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Sima szöveg',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime média',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real média',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows média',

	'FORUMS_FIRST_CATEGORY'			=> 'Az első kategóriád',
	'FORUMS_TEST_FORUM_DESC'		=> 'Az első fórumod leírása.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Az első fórumod',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Adminisztrátor',
 	'REPORT_WAREZ'					=> 'A hozzászólás linket tartalmaz illegális vagy kalóz szoftverre.',
 	'REPORT_SPAM'					=> 'A hozzászólás egyetlen célja egy weboldal vagy egy termék reklámozása.',
 	'REPORT_OFF_TOPIC'				=> 'A hozzászólás nem kapcsolódik a témához.',
 	'REPORT_OTHER'					=> 'A hozzászólás nem tartozik semelyik másik kategóriába, kérjük, töltsd ki a további információ mezőt.',

	'SMILIES_ARROW'					=> 'nyíl',
	'SMILIES_CONFUSED'				=> 'összezavarodott',
	'SMILIES_COOL'					=> 'laza',
	'SMILIES_CRYING'				=> 'sír vagy nagyon szomorú',
	'SMILIES_EMARRASSED'			=> 'zavarban',
	'SMILIES_EVIL'					=> 'gonosz vagy nagyon őrült',
	'SMILIES_EXCLAMATION'			=> 'felkiáltás',
	'SMILIES_GEEK'					=> 'kocka',
	'SMILIES_IDEA'					=> 'ötlet',
	'SMILIES_LAUGHING'				=> 'nevet',
	'SMILIES_MAD'					=> 'őrült',
	'SMILIES_MR_GREEN'				=> 'Zöld úr',
	'SMILIES_NEUTRAL'				=> 'semleges',
	'SMILIES_QUESTION'				=> 'kérdés',
	'SMILIES_RAZZ'					=> 'vicces',
	'SMILIES_ROLLING_EYES'			=> 'forgó szemek',
	'SMILIES_SAD'					=> 'szomorú',
	'SMILIES_SHOCKED'				=> 'sokkolt',
	'SMILIES_SMILE'					=> 'mosoly',
	'SMILIES_SURPRISED'				=> 'meglepett',
	'SMILIES_TWISTED_EVIL'			=> 'nagyon gonosz',
	'SMILIES_UBER_GEEK'				=> 'durván kocka',
	'SMILIES_VERY_HAPPY'			=> 'nagyon boldog',
	'SMILIES_WINK'					=> 'kacsintás',

	'TOPICS_TOPIC_TITLE'			=> 'Üdvözlünk a phpBB3-ban!',
));

?>
