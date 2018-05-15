<?php
/**
*
* search.php [Slovenian]
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
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Da bi videli vaša neprebrana sporočila, se morate registrirati in prijaviti na forum.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Napisali ste preveč besed za iskanje. Največje število besed za iskanje je %1$d.',
	'ALL_AVAILABLE'	=> 'Vse, kar je na voljo',
	'ALL_RESULTS'	=> 'Vsi rezultati',
	'DISPLAY_RESULTS'	=> 'Prikaži rezultate kot',
	'FOUND_SEARCH_MATCH'	=> 'Iskalnik je našel %d ujemanje',
	'FOUND_SEARCH_MATCHES'	=> 'Iskalnik je našel %d ujemanj',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Iskalnik je našel več kot %d ujemanj',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Če si želite ogledati lastne prispevke, morate biti registrirani in prijavljeni.',
	'GLOBAL'	=> 'Globalno obvestilo',
	'IGNORED_TERMS'	=> 'Ignorirano',
	'IGNORED_TERMS_EXPLAIN'	=> 'Naslednje besede v vaši iskalni poizvedbi so bile ignorirane: <strong>%s</strong>.',
	'JUMP_TO_POST'	=> 'Skoči na prispevek',
	'NO_KEYWORDS'	=> 'Navesti morate vsaj eno besedo. Vsaka beseda mora biti sestavljena iz vsaj %d znakov in ne sme presegati %d znakov brez posebnih znakov.',
	'NO_RECENT_SEARCHES'	=> 'Ni nedavno izvedenih iskanj.',
	'NO_SEARCH'	=> 'Oprostite, vendar nimate dovoljenja za uporabo iskalnika.',
	'NO_SEARCH_RESULTS'	=> 'Ni bilo ustreznih zadetkov.',
	'NO_SEARCH_TIME'	=> 'Oprostite, vendar trenutno iskalnika ne morete uporabljati. Prosimo, poizkusite spet čez nekaj minut.',
	'WORD_IN_NO_POST'	=> 'Noben prispevek ni bil najden, saj besede <strong>%s</strong> ni v nobenem prispevku.',
	'WORDS_IN_NO_POST'	=> 'Noben prispevek ni bil najden, saj besed <strong>%s</strong> ni v nobenem prispevku.',
	'POST_CHARACTERS'	=> 'Znakov v prispevkih',
	'RECENT_SEARCHES'	=> 'Nedavna iskanja',
	'RESULT_DAYS'	=> 'Omejitev iskanja na zadnjih',
	'RESULT_SORT'	=> 'Razvrsti rezultate po',
	'RETURN_FIRST'	=> 'Vrni prvih',
	'RETURN_TO_SEARCH_ADV'	=> 'Nazaj na napredno iskanje',
	'SEARCHED_FOR'	=> 'Uporabljeni iskalni izraz',
	'SEARCHED_TOPIC'	=> 'Iskana tema',
	'SEARCH_ALL_TERMS'	=> 'Iskanje po vseh izrazih ali uporaba vnešene poizvedbe',
	'SEARCH_ANY_TERMS'	=> 'Iskanje po poljubnih izrazih',
	'SEARCH_AUTHOR'	=> 'Iskanje po avtorju',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Uporabite * kot poseben znak za delna ujemanja.',
	'SEARCH_FIRST_POST'	=> 'Samo prvi prispevek v temi',
	'SEARCH_FORUMS'	=> 'Išči po forumih',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Izberite forum ali forume, kjer želite iskati. Po podforumih lahko hitreje iščete tako, da označete starševski forum in spodaj omogočite iskanje po podforumih.',
	'SEARCH_IN_RESULTS'	=> 'Iskanje po teh rezultatih',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Pred besedo, ki mora biti najdena, dodajte <strong>+</strong>, pred besedo, ki ne sme, pa <strong>-</strong>. Če želite iz seznama besed najti samo eno, jih ločite z <strong>|</strong>. Znak * lahko uporabite za delna ujemanja.',
	'SEARCH_MSG_ONLY'	=> 'Samo besedilo sporočila',
	'SEARCH_OPTIONS'	=> 'Možnosti iskanja',
	'SEARCH_QUERY'	=> 'Iskalna poizvedba',
	'SEARCH_SUBFORUMS'	=> 'Išči po podforumih',
	'SEARCH_TITLE_MSG'	=> 'Zadeve prispevkov in besedilo sporočil',
	'SEARCH_TITLE_ONLY'	=> 'Samo naslovi tem',
	'SEARCH_WITHIN'	=> 'Iskanje znotraj',
	'SORT_ASCENDING'	=> 'Naraščajoče',
	'SORT_AUTHOR'	=> 'Avtor',
	'SORT_DESCENDING'	=> 'Padajoče',
	'SORT_FORUM'	=> 'Forum',
	'SORT_POST_SUBJECT'	=> 'Zadeva prispevka',
	'SORT_TIME'	=> 'Čas prispevka',
	'TOO_FEW_AUTHOR_CHARS'	=> 'Navesti morate vsaj %d znakov avtorjevega imena.',
));

?>