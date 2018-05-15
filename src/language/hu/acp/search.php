<?php
/**
*
* acp_search [Hungarian]
*
* @package language
* @version $Id: search.php 197 2009-10-18 20:12:18Z fberci $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Itt a keresőmodulok indexeit kezelheted. Mivel alapvetően csak egy modult használsz, a többi nem használt modul indexeit érdmes törölnöd. Néhány kereső beállítás megváltoztatása után (pl. a karakterek minimum és maximum száma) tanácsos az indexeket újra létrehozni, hogy azok tükrözzék a változtatásokat.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Itt beállíthatod, hogy a fórum melyik keresőmodult használja a hozzászólások indexeléséhez és a keresésekhez. Emellett további beállításokat adhatsz meg, melyek ezeknek a műveleteknek a teljesítményigényét befolyásolják. A beállítások egy része az összes keresőmodulnál ugyanaz.',

	'COMMON_WORD_THRESHOLD'					=> 'Gyakori szó küszöb',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'A szavak, melyek a hozzászólások ennél nagyobb százalékában megtalálhatók, gyakorinak lesznek tekintve. A gyakori szavak mellőzésre kerülnek a keresési kifejezésből. A kikapcsoláshoz állítsd 0-ra. Csak akkor lesz alkalmazva, ha 100-nál több hozzászólás van. Ha felül szeretnéd vizsgálni a már gyakorinak tekintett szavakat, újra létre kell hoznod az indexet.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Biztosan át akarsz váltani egy másik keresőmodulra? A váltás után létre kell hoznod az új keresőmodulhoz tartozó indexet. Ha nem tervezel visszaváltani a régi keresőmodulhoz, törölheted az ahhoz tartozó indexet, ezáltal is fölszabadítva a rendszer erőforrásait.',
	'CONTINUE_DELETING_INDEX'				=> 'Korábbi indexeltávolítási folyamat folytatása',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Egy indexeltávolítási folyamat el lett indítva. Hogy hozzáférj a keresőindex oldalhoz, először azt be kell fejezned, vagy törölnöd kell.',
	'CONTINUE_INDEXING'						=> 'Korábbi indexelési folyamat folytatása',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Egy indexelési folyamat el lett indítva. Hogy hozzáférj a keresőindex oldalhoz, először azt be kell fejezned, vagy törölnöd kell.',
	'CREATE_INDEX'							=> 'Index létrehozása',

	'DELETE_INDEX'							=> 'Index törlése',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Index törlése folyamatban',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'A keresőmodul jelenleg megtisztítja az indexét. Ez eltarthat néhány percig.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'A MySQL fulltext modul csak MySQL4-gyel vagy újabbal használható.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'A MySQL fulltext index csak MyISAM táblákkal használható.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Indexelt hozzászólások száma',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Nem latin UTF-8 karakterek támogatása mbstring-gel:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Nem latin UTF-8 karakterek támogatása PCRE-vel:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Ha a PCRE nem rendelkezik az unicode karakter tulajdonságokkal, a keresőmodul az mbstring reguláriskifejezés-motorját fogja meg próbálni használni.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Ennek a keresőmodulnak a nem latin karakterekre való kereséshez szüksége van rá, hogy a PCRE rendelkezzen az unicode karakter tulajdonságokkal, mely csak a PHP 4.4-ben, ill. 5.1-ben és az újabb verziókban érhető el.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Általános kereső beállítások',
	'GO_TO_SEARCH_INDEX'					=> 'Tovább a keresőindex oldalra',

	'INDEX_STATS'							=> 'Index statisztikák',
	'INDEXING_IN_PROGRESS'					=> 'Indexelés folyamatban',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'A keresőmodul éppen indexeli a fórum összes hozzászólását. Ez a fórum nagyságától függően néhány percig, de akár néhány óráig is eltarthat.',

	'LIMIT_SEARCH_LOAD'						=> 'Kereső oldal rendszerterhelés korlát',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ha a rendszer egy perces átlagos terhelése meghaladja ezt az értéket, akkor a kereső oldal nem lesz elérhető. Az 1.0 érték megegyezik egy processzor ~100%-os igénybevételével. A funkció csak UNIX alapú rendszereken működik.',

	'MAX_SEARCH_CHARS'						=> 'Maximum indexelt karakterszám',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'A kereső csak a legfeljebb ennyi karaktert tartalmazó szavakat fogja indexelni.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Kulcsszavak maximum száma',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Egyszerre legfeljebb ennyi szóra lehet keresni. A 0 érték megszünteti a korlátozást.',
	'MIN_SEARCH_CHARS'						=> 'Minimum indexelt karakterszám',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'A kereső csak a legalább ennyi karaktert tartalmazó szavakat fogja indexelni.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimum szerző karakterszám',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'A felhasználóknak, ha jokerkaraktert használva keresnek rá egy felhasználóra, legalább ennyi karaktert meg kell adniuk a névből. Ha a felhasználó neve ennél kevesebb karakterből áll, a teljes felhasználónév megadásával még mindig rá lehet keresni a hozzászólásaira.',

	'PROGRESS_BAR'							=> 'Haladás',

	'SEARCH_GUEST_INTERVAL'					=> 'Vendég keresési flood időköz',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'A vendégeknek két keresés között ennyi másodpercet kell várniuk. Ha egy felhasználó végez egy keresést, az összes többinek várnia kell az időköz leteltéig.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'A %1$d azonosítóig terjedő hozzászólások lettek eddig indexelve, ebből %2$d ebben a lépésben.<br />Az indexelés jelenlegi sebessége körülbelül %3$.1f hozzászólás per másodperc.<br />Indexelés folyamatban…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'A %1$d azonosítóig terjedő hozzászólások el lettek távolítva a keresőindexből.<br />Törlés',
	'SEARCH_INDEX_CREATED'					=> 'A fórum adatbázisában lévő összes hozzászólás sikeresen indexelésre került.',
	'SEARCH_INDEX_REMOVED'					=> 'A modul keresőindexe sikeresen törlésre került.',
	'SEARCH_INTERVAL'						=> 'Felhasználói keresési időköz',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'A felhasználóknak két keresés között ennyi másodpercet kell várniuk. Ez az időköz az egyes  felhasználóknál külön-külön kerül ellenőrzésre.',
	'SEARCH_STORE_RESULTS'					=> 'Keresési eredmény gyorsítótárazásának hossza',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A gyorsítótárazott keresési eredmények ennyi másodperc elteltével járnak le. A kereső gyorsítótár kikapcsolásához állítsd 0-ra .',
	'SEARCH_TYPE'							=> 'Keresőmodul',
	'SEARCH_TYPE_EXPLAIN'					=> 'A phpBB lehetővé teszi, hogy kiválaszd milyen motor legyen használva a hozzászólások tartalmában való kereséshez. Alapból a phpBB saját fulltext keresője lesz használva.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Keresőmodult váltottál. Hogy az új keresőmotort használni tudd, győződj meg róla, hogy a kiválasztott keresőmodulhoz való index létezik.',

	'TOTAL_WORDS'							=> 'Indexelt szavak száma',
	'TOTAL_MATCHES'							=> 'Szó–hozzászólás kapcsolatok száma',

	'YES_SEARCH'							=> 'Keresés funkciók bekapcsolása',
	'YES_SEARCH_EXPLAIN'					=> 'Lehetővé teszi a keresők használatát, ide értve a felhasználókeresőt is.',
	'YES_SEARCH_UPDATE'						=> 'Fulltext frissítés bekapcsolása',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Fulltext indexek frissítése hozzászóláskor, a keresés kikapcsolása felülírja.',
));

?>
