<?php
/** 
*
* acp_prune [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Täällä voit sulkea käyttäjätunnuksia tai poistaa foorumin käyttäjiä. Tunnuksia voi selata eri tavoin, kuten viestien määrällä, aktiivisuudella, jne. Kriteereitä voi yhdistää tarkemmaksi hauksi. Voit esimerkiksi poistaa käyttäjät, joilla on alle kymmenen viestiä ja jotka ovat olleet poissa 2002-01-01 lähtien. Voit myös jättää kriteerit kokonaan pois ja laittaa käyttäjät yksitellen omille riveillensä. Ole tarkkana! Kun poistat käyttäjän, sitä ei voi palauttaa.',
	'DEACTIVATE_DELETE'			=> 'Sulje tunnukset tai poista',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Valitse haluatko sulkea tunnukset tai poistaa ne kokonaan. Huomaa, että poistettua käyttäjää ei voi palauttaa!',
	'DELETE_USERS'				=> 'Poista',
	'DELETE_USER_POSTS'			=> 'Poista myös viestit',
	'DELETE_USER_POSTS_EXPLAIN' => 'Tuhoaa poistettujen käyttäjien tekemät viestit. Tämä asetus ei päde, mikäli olet vain sulkenut käyttäjätunnuksen.',

	'JOINED_EXPLAIN'			=> 'Anna päivämäärä YYYY-MM-DD muodossa.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Anna päivämäärä YYYY-MM-DD muodossa. Laita <kbd>0000-00-00</kbd> poistaaksesi käyttäjät, jotka eivät ole koskaan kirjautuneet sisään. <em>Ennen</em> ja <em>jälkeen</em> valintoja ei oteta huomioon.',

	'PRUNE_USERS_LIST'				=> 'Siivottavat käyttäjät',
	'PRUNE_USERS_LIST_DELETE'		=> 'Valitsemiesi kriteerien mukaisesti. Nämä käyttäjätunnukset poistetaan.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Valitsemiesi kriteerien mukaisesti. Nämä käyttäjätunnukset suljetaan.',

	'SELECT_USERS_EXPLAIN'		=> 'Anna käyttäjätunnukset tähän, Niitä käytetään ylläolevien vaihtoehtojen asetuksina. Perustajia ei voi poistaa',

	'USER_DEACTIVATE_SUCCESS'	=> 'Valitut käyttäjätunnukset on suljettu',
	'USER_DELETE_SUCCESS'		=> 'valitut käyttäjätunnukset on poistettu',
	'USER_PRUNE_FAILURE'		=> 'Antamillasi asetuksilla ei löytynyt käyttäjiä.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Antamasi päivämäärä on väärin, päivämäärä täytyy olla <kbd>YYYY-MM-DD</kbd> muodossa.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Tämä vaihtoehto poistaa viestiketjun, johon ei ole tullut vastausta tietyn päivämäärän jälkeen. Mikäli et anna numeroa, kaikki viestit poistetaan. Tämä ei poista voimassaolevia äänestyksiä ja tiedotteita, joten nämä viestiketjut täytyy poistaa käsin.',

	'FORUM_PRUNE'		=> 'Automaattinen siivous',

	'NO_PRUNE'			=> 'Yhtäkään aluetta ei ole siivottu',

	'SELECTED_FORUM'	=> 'Valittu alue',
	'SELECTED_FORUMS'	=> 'Valitut alueet',

	'POSTS_PRUNED'					=> 'Siivotut viestiketjut',
	'PRUNE_ANNOUNCEMENTS'			=> 'Siivoa tiedotteet',
	'PRUNE_FINISHED_POLLS'			=> 'Siivoa päättyneet äänestykset',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Poistaa viestiketjut joiden äänestys on päättynyt.',
	'PRUNE_FORUM_CONFIRM'			=> 'Haluatko varmasti siivota keskustelufoorumin valitsemillasi asetuksilla? Siivottuja viestejä ei voi palauttaa.',
	'PRUNE_NOT_POSTED'				=> 'Päivää edellisen vastauksen jälkeen',
	'PRUNE_NOT_VIEWED'				=> 'Päivää edellisen katsonnan jälkeen',
	'PRUNE_OLD_POLLS'				=> 'Siivoa vanhat äänestykset',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Siivoaa äänestykset, joihin ei ole tullut uusia ääniä tietyllä aikavälillä.',
	'PRUNE_STICKY'					=> 'Siivoa pysyvät tiedotteet',
	'PRUNE_SUCCESS'					=> 'Keskustelualueiden siivous on suoritettu',

	'TOPICS_PRUNED'		=> 'Siivotut viestiketjut',
));

?>