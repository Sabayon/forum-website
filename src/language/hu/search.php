<?php
/**
*
* search [Hungarian]
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
	'ALL_AVAILABLE'			=> 'összes',
	'ALL_RESULTS'			=> 'Összes találat',

	'DISPLAY_RESULTS'		=> 'Találatok megjelenítése',

	'FOUND_SEARCH_MATCH'		=> '%d találat',
	'FOUND_SEARCH_MATCHES'		=> '%d találat',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Több, mint %d találat',

	'GLOBAL'				=> 'Globális közlemény',

	'IGNORED_TERMS'			=> 'mellőzött',
	'IGNORED_TERMS_EXPLAIN'	=> 'A következő szavak mellőzésre kerültek a keresési kifejezésből: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Ugrás a hozzászóláshoz',

 	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'A saját hozzászólásaid megtekintéséhez be kell jelentkezned.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Az olvasatlan hozzászólásaid megtekintéséhez be kell jelentkezned.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Túl sok keresendő szót adtál meg. Kérünk, legfeljebb %1$d szót adj meg.',

	'NO_KEYWORDS'			=> 'Legalább egy keresendő szót meg kell adnod. Minden szónak, a jokerkaraktereket nem számítva, legalább %d és legfeljebb %d karakterből kell állnia.',
	'NO_RECENT_SEARCHES'	=> 'Nem történt keresés a közelmúltban.',
	'NO_SEARCH'				=> 'Sajnos számodra nem engedélyezett a kereső használata.',
	'NO_SEARCH_RESULTS'		=> 'Nincs a keresési feltételeknek megfelelő találat.',
	'NO_SEARCH_TIME'		=> 'Most nem használhatod a keresőt. Kérjük, próbálkozz újra pár perc múlva.',
	'WORD_IN_NO_POST'		=> 'Nincs találat, mivel a <strong>%s</strong> szót nem tartalmazza egy hozzászólás sem.',
	'WORDS_IN_NO_POST'		=> 'Nincs találat, mivel a <strong>%s</strong> szavakat nem tartalmazza egy hozzászólás sem.',

	'POST_CHARACTERS'		=> 'karakterének megjelenítése',

	'RECENT_SEARCHES'		=> 'Legutóbbi keresések',
	'RESULT_DAYS'			=> 'Időintervallum',
	'RESULT_SORT'			=> 'Találatok rendezése',
	'RETURN_FIRST'			=> 'Hozzászólások első',
	'RETURN_TO_SEARCH_ADV'	=> 'Vissza a részletes kereséshez',

	'SEARCHED_FOR'				=> 'Keresett kifejezés',
	'SEARCHED_TOPIC'			=> 'Keresett téma',
	'SEARCH_ALL_TERMS'			=> 'Keresés az összes szóra vagy a keresési kifejezés pontos használata',
	'SEARCH_ANY_TERMS'			=> 'Keresés bármely szóra',
	'SEARCH_AUTHOR'				=> 'Szerző',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Részleges szavakhoz használd a * jokerkaraktert.',
	'SEARCH_FIRST_POST'			=> 'Csak témák első hozzászólása',
	'SEARCH_FORUMS'				=> 'Fórumok',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Válaszd ki azokat a fórumokat, melyben keresni szeretnél. A keresés automatikusan megtörténik az alfórumokban is, hacsak alább nem kapcsoltad ki a „keresés az alfórumokban” beállítást.',
	'SEARCH_IN_RESULTS'			=> 'Keresés a találatokban',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Írj „<strong>+</strong>”-t a keresett, valamint „<strong>-</strong>”-t a kizárandó  szavak elé. Ha több szóból csak egy megtalálása is elég, készíts ezekből a szavakból egy „<strong>|</strong>” jellel elválasztott listát, és tedd az egészet zárójelek közé. Részleges szavakhoz használd a * jokerkaraktert.',
	'SEARCH_MSG_ONLY'			=> 'Csak üzenetek szövege',
	'SEARCH_OPTIONS'			=> 'Keresési beállítások',
	'SEARCH_QUERY'				=> 'Keresési feltételek',
	'SEARCH_SUBFORUMS'			=> 'Keresés az 	alfórumokban',
	'SEARCH_TITLE_MSG'			=> 'Hozzászólások témája és üzenetek szövege',
	'SEARCH_TITLE_ONLY'			=> 'Csak témák címe',
	'SEARCH_WITHIN'				=> 'Keresés tárgya',
	'SORT_ASCENDING'			=> 'Növekvő sorrend',
	'SORT_AUTHOR'				=> 'Szerző',
	'SORT_DESCENDING'			=> 'Csökkenő sorrend',
	'SORT_FORUM'				=> 'Fórum',
	'SORT_POST_SUBJECT'			=> 'Hozzászólás témája',
	'SORT_TIME'					=> 'Elküldés időpontja',

	'TOO_FEW_AUTHOR_CHARS'	=> 'A szerző nevéből legalább %d karaktert meg kell adnod.',
));

?>
