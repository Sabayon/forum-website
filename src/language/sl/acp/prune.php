<?php
/**
*
* acp_prune.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-04 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Tu lahko odstraniš ali dekativiraš uporabnike s foruma. Nastaviš lahko več kriterijev, kot so število sporočil, zadnja prijava ipd. Vsak izmed pogojev se lahko kombinira z drugim; odstraniš lahko le uporabnike, ki so bili zadnjič aktivni pred 01.01.2002 in so napisali manj kot deset sporočil. Če v vnosno polje vpišeš seznam uporabnikov, zanje kriteriji ne bodo veljali. <br /><br />S to funkcijo ravnaj previdno, saj izbrisanih uporabnikov ne moreš povrniti!',
	'DEACTIVATE_DELETE'	=> 'Deaktiviraj ali odstrani',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Izberi, katero akcijo želiš uporabiti - odstranitev ali deaktivacija uporabnika. <b>Opomba:</b> izbrisanih uporabnikov ne moreš povrniti !',
	'DELETE_USERS'	=> 'Odstrani',
	'DELETE_USER_POSTS'	=> 'Izbriši tudi uporabnikova sporočila',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Odstrani objave, ki so jih naredili izbrisani uporabniki. Nima učinka, če so uporabniki deaktivirani.',
	'JOINED_EXPLAIN'	=> 'Vnesi datum v formatu <kbd>YYYY-MM-DD</kbd>.',
	'LAST_ACTIVE_EXPLAIN'	=> 'Vnesi datum v formatu <kbd>YYYY-MM-DD</kbd>.',
	'PRUNE_USERS_LIST'	=> 'Seznam uporabnikov, ki naj bodo odstranjeni',
	'PRUNE_USERS_LIST_DELETE'	=> 'Danim kriterjem ustrezajo uporabniki s spodnjega seznama. Le-ti bodo odstranjeni.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Danim kriterjem ustrezajo uporabniki s spodnjega seznama. Le-ti bodo deaktivirani.',
	'SELECT_USERS_EXPLAIN'	=> 'Na ta seznam vpiši uporabnike, ki naj bodo izbrisani, tudi če se njihov profil ne ujema z izbranimi kriterji.',
	'USER_DEACTIVATE_SUCCESS'	=> 'Izbrani uporabniki so bili uspešno deaktivirani.',
	'USER_DELETE_SUCCESS'	=> 'Izbrani uporabniki so bili uspešno odstranjeni.',
	'USER_PRUNE_FAILURE'	=> 'Noben uporabnik ne ustreza kriterijem.',
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Format vnešenega datuma je napačen. Pravilen format je <kbd>LLLL-MM-DD</kbd>.',
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'V tej sekciji lahko brišeš teme in sporočila, ki niso bila prebrana ali odgovorjena v izbranem časovnem obdobju. Če časovno obdobje ni vnešeno, se izbrišejo vse teme. Izbrisane niso tudi teme, v katerih potekajo aktivne ankete ali pa so nastavljene kot lepljive ali objave.',
	'FORUM_PRUNE'	=> 'Čiščenje foruma',
	'NO_PRUNE'	=> 'Noben forum ni bil počiščen.',
	'SELECTED_FORUM'	=> 'Izbran forum',
	'SELECTED_FORUMS'	=> 'Izbrani forumi',
	'POSTS_PRUNED'	=> 'Sporočila so bila počiščena',
	'PRUNE_ANNOUNCEMENTS'	=> 'Počisti prispevke',
	'PRUNE_FINISHED_POLLS'	=> 'Počisti zaključene ankete',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Odstrani teme z zaključenimi anketami.',
	'PRUNE_FORUM_CONFIRM'	=> 'Ali si prepričan, da želiš počistiti izbrane forume ? Po čiščenju so sporočila trajno izbrisana in jih ni mogoče povrniti.',
	'PRUNE_NOT_POSTED'	=> 'Dni od zadnjega odgovora',
	'PRUNE_NOT_VIEWED'	=> 'Dni od zadnjega pregleda',
	'PRUNE_OLD_POLLS'	=> 'Prune old polls',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Odstrani teme z anketami, v katerih se že dalj časa ni glasovalo.',
	'PRUNE_STICKY'	=> 'Počišti lepljive teme',
	'PRUNE_SUCCESS'	=> 'Čiščenje forumov je bilo uspešno.',
	'TOPICS_PRUNED'	=> 'Teme so bile počiščene',
));

?>