<?php
/**
*
* acp_search.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-08-11 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'MAX_NUM_SEARCH_KEYWORDS'	=> 'Največje dovoljeno število besed za iskanje',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'Največje število besed po katerih lahko uporabnik išče. Vrednost 0 dovoljuje neomejeno število iskalnih besed.',
	'ACP_SEARCH_INDEX_EXPLAIN'	=> 'Tukaj lahko urejate indekse iskalnega sistema. Normalno uporabljate samo en iskalni indeks, zato izbrišite vse indekse, ki jih ne boste uporabljali. Po ureditvi iskalnih nastavitev (npr. min/maks. znakov) je smiselno  rekreiranje indeksov, da se te spremembe upoštevajo.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Tukaj lahko nastavite, kateri iskalni sistem se bo uporabljal za indeksiranje tem in izvajanje iskanj. Nastavite lahko različne nastavitve, kar vpliva na to, obdelav potrebujejo te akcije. Nekatere izmed nastavitev, so enake za vse indekse iskalnega sistema.',
	'COMMON_WORD_THRESHOLD'	=> 'Prag za skupne besede',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> 'Besede, ki so vsebovane v večjem procentu vseh tem, bodo označene kot skupne. Skupne besede se pri iskanju ignorirajo. Za izklop nastavite na 0. Funkcija deluje samo, če je objavljenih nad 100 tem.',
	'CONFIRM_SEARCH_BACKEND'	=> 'Ali želite preklopiti na drug iskalni sistem? Po spremembi iskalnega sistema je potrebno kreirati indeks za novi iskalni sistem. Če ne načrtujeje vrnitve na star iskalni sistem, ga lahko izbrišete. S tem boste osvobodili sistemska sredstva.',
	'CONTINUE_DELETING_INDEX'	=> 'Nadaljuj postopek brisanja prejšnjega indeksa',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Začel se je postopek brisanja indeksa. Da boste lahko dostopali do iskalne strani, morate počakati, da se postopek konča ali pa ga prekinite.',
	'CONTINUE_INDEXING'	=> 'Nadaljuj prejšnji postopek indeksiranja',
	'CONTINUE_INDEXING_EXPLAIN'	=> 'Proces indeksiranja se je začel s izvajanjem. Da lahko dostopate do strani za iskanje, počakajte, da se proces konča, ali pa ga prekinite.',
	'CREATE_INDEX'	=> 'Kreiraj indeks',
	'DELETE_INDEX'	=> 'Izbriši indeks',
	'DELETING_INDEX_IN_PROGRESS'	=> 'Brisanje indeksa se izvaja',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Iskalni sistem trenutno čisti svoje indekse. To lahko traja nekaj minut.',
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL iskalni sistem za celotno besedilo se lahko uporablja z bazo MySQL4 ali novejšo.',
	'FULLTEXT_MYSQL_NOT_MYISAM'	=> 'MySQL indeksi za celotno besedilo, se lahko uporablja samo z MyISAM tabelami.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'	=> 'Skupno število indeksiranih objav',
	'FULLTEXT_MYSQL_MBSTRING'	=> 'Podpora za ne-latin UTF-8 znake z uporabo mbstring:',
	'FULLTEXT_MYSQL_PCRE'	=> 'Podpora za ne-latin UTF-8 znake z uporabo PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'	=> 'Če PCRE nima nastavljenih unicode znakov, bo iskalni sistem poskušal uporabiti mbstring orodje regularnih izrazov.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'	=> 'Ta iskalni sistem potrebuje PCRE unicode znake, razpoložljive samo v PHP 4.4, 5.1 in novejšem, če želite iskati po ne-latin znakih.',
	'GENERAL_SEARCH_SETTINGS'	=> 'Splošne nastavitve iskanja',
	'GO_TO_SEARCH_INDEX'	=> 'Pojdi na iskalno indeks stran',
	'INDEX_STATS'	=> 'Statistika indeksa',
	'INDEXING_IN_PROGRESS'	=> 'Indeksiranje v izvajanju',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Iskalni sistem trenutno indeksira vse teme na tabli. To lahko traja od nekaj minut, do nekaj ur, odvisno od velikosti vaše tabele.',
	'LIMIT_SEARCH_LOAD'	=> 'Omejitev obremenitve iskalne strani',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Če sistemska obremenitev presega to vrednost 1 minuto, se bo iskalna stran izključila. 1.0 je enako 100% obremenitvi procesorja. Funkcija deluje samo na unixu.',
	'MAX_SEARCH_CHARS'	=> 'Maks. število znakov, indeksiranih pri iskanju',
	'MAX_SEARCH_CHARS_EXPLAIN'	=> 'Besede z ne več kot toliko znaki, bodo indeksirane za iskanje.',
	'MIN_SEARCH_CHARS'	=> 'Minimalno znakov indeksiranih za iskanje',
	'MIN_SEARCH_CHARS_EXPLAIN'	=> 'Besede z vsaj toliko znaki, bodo indeksirane za iskanje.',
	'MIN_SEARCH_AUTHOR_CHARS'	=> 'Min število znakov za avtorja',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Uporabniki morajo vnesti vsaj toliko znakov imena, ko iščejo po korenu avtorja. Če je uporabnikovo ime krajše od te vrednosti, lahko še vedno iščete objave tako, da vnesete celotno uporabniško ime.',
	'PROGRESS_BAR'	=> 'Vrstica napredka',
	'SEARCH_GUEST_INTERVAL'	=> 'Maksimalni interval za iskanja gostov',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Število sekund, ki jih gost mora med iskanji počakati. Če en gost išče, bodo morali vsi ostali počakati, da preteča ta interval.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'Vse teme do ID %1$d so sedaj indeksirane, od tega %2$d tem v tem koraku.<br />Trenutna hitrost indeksiranja je povprečno %3$.1f tem na sekundo.<br />Indeksiranje v izvajanju?',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'Vse teme do ID %1$d so bile odstranjene iz iskalnega indeksa.<br />Brisanje v izvajanju?',
	'SEARCH_INDEX_CREATED'	=> 'Uspešno indeksirane vse teme v bazi tabele.',
	'SEARCH_INDEX_REMOVED'	=> 'Uspešno izbrisan iskalni indeks za ta sistem.',
	'SEARCH_INTERVAL'	=> 'Maksimalni interval za uporabnike',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'Število sekund, ki jih uporabniki morajo počakati, med iskanji. Interval se preverja samostojno za vsakega uporabnika.',
	'SEARCH_STORE_RESULTS'	=> 'Dolžina predpomnilnika iskalnih rezultatov',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Predpomnjeni iskalni rezultati se bodo iztekli po toliko sekundah. Nastavite na 0, če želite izključiti iskalni predpomnilnik.',
	'SEARCH_TYPE'	=> 'Iskalni sistem',
	'SEARCH_TYPE_EXPLAIN'	=> 'phpBB vam omogoča, da izberete sistem, ki se bo uporabljal za iskanje besedila v vsebinah tem. Privzeto se bo za iskanje uporabljal lasten phpBB iskalnik celotnega besedila.',
	'SWITCHED_SEARCH_BACKEND'	=> 'Zamenjali ste iskalni sistem. Da lahko uporabljate novi iskalni sistem, se prepričajte, da zanj obstaja indeks.',
	'TOTAL_WORDS'	=> 'Skupno število indeksiranih besed',
	'TOTAL_MATCHES'	=> 'Skupno število indeksiranih relacij besed v temah',
	'YES_SEARCH'	=> 'Vključi iskalno napravo',
	'YES_SEARCH_EXPLAIN'	=> 'Vključi iskalno funkcijo vključno z iskanjem članov.',
	'YES_SEARCH_UPDATE'	=> 'Vključi ažuriranje celotnega besedila',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Ažuriranje indeksa celotnega besedila ob pisanju tem. Nedelujoče, če je iskanje izključeno.',
));

?>