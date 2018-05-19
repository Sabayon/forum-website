<?php
/**
*
* acp_prune [Dutch]
*
* @package language
* @version $Id: prune.php,v 1.0.0 2006/11/20 17:37:54 dhn2 Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Hiermee kun je forumgebruikers verwijderen of deactiveren op je forum. Accounts kunnen op verschillende manieren gefilterd worden; via het aantal berichten, datum laatste activiteit, enz. Anderzijds kun je ook de criteriaselectie overslaan door een lijst gebruikers op te geven (elk op een afzonderlijke regel) in het tekstveld. Pas hier mee op! Zodra een gebruiker verwijderd is, kun je deze actie niet meer terugdraaien.',

	'DEACTIVATE_DELETE'			=> 'Deactiveren of verwijderen',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Kies of je de gebruiker wilt deactiveren of verwijderen. Let erop dat gebruikers niet teruggezet kunnen worden!',
	'DELETE_USERS'				=> 'Verwijder',
	'DELETE_USER_POSTS'			=> 'Ruim berichten van verwijderde gebruiker op',
	'DELETE_USER_POSTS_EXPLAIN' => 'Verwijdert berichten van verwijderde gebruikers, heeft geen effect bij het deactiveren van gebruikers.',

	'JOINED_EXPLAIN'			=> 'Geef een datum volgens het <kbd>JJJJ-MM-DD</kbd>-formaat.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Geef een datum volgens het <kbd>JJJJ-MM-DD</kbd>-formaat. Vul <kbd>0000-00-00</kbd> in om gebruikers op te ruimen die nooit zijn ingelogd, <em>voor</em> en <em>na</em> condities worden genegeerd.',

	'PRUNE_USERS_LIST'				=> 'Gebruikers die opgeruimd worden',
	'PRUNE_USERS_LIST_DELETE'		=> 'Aan de hand van de geselecteerde opruimcriteria voor gebruikers worden de volgende accounts verwijderd.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Aan de hand van de geselecteerde opruimcriteria voor gebruikers worden de volgende accounts gedeactiveerd.',

	'SELECT_USERS_EXPLAIN'		=> 'Geef hier specifieke gebruikersnamen, ze zullen in plaats van de bovenstaande criteria gebruikt worden. Eigenaren kunnen niet worden opgeruimd.',

	'USER_DEACTIVATE_SUCCESS'	=> 'De geselecteerde gebruikers zijn gedeactiveerd.',
	'USER_DELETE_SUCCESS'		=> 'De geselecteerde gebruikers zijn verwijderd.',
	'USER_PRUNE_FAILURE'		=> 'Geen enkele gebruiker voldoet aan de geselecteerde criteria.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'De opgegeven datum is ongeldig, deze moet volgens het <kbd>JJJJ-MM-DD</kbd>-formaat worden opgegeven.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Hierdoor wordt ieder onderwerp dat niet bekeken of geplaatst is binnen het aantal dagen dat je opgeeft, verwijderd. Indien je geen getal opgeeft, worden alle onderwerpen verwijderd. Standaard worden onderwerpen met actieve polls, sticky onderwerpen en mededelingen niet verwijderd.',

	'FORUM_PRUNE'		=> 'Forum opruimen',

	'NO_PRUNE'			=> 'Geen forums opgeruimd.',

	'SELECTED_FORUM'	=> 'Geselecteerd forum',
	'SELECTED_FORUMS'	=> 'Geselecteerde forums',

	'POSTS_PRUNED'					=> 'Berichten opgeruimd',
	'PRUNE_ANNOUNCEMENTS'			=> 'Ruim mededelingen op',
	'PRUNE_FINISHED_POLLS'			=> 'Ruim afgelopen polls op',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Verwijdert onderwerpen die afgelopen polls bevatten.',
	'PRUNE_FORUM_CONFIRM'			=> 'Weet je zeker dat de geselecteerde forums volgens de gespecificeerde instellingen opgeruimd moeten worden? Eenmaal uitgevoerd, kunnen de opgeruimde onderwerpen en berichten niet hersteld worden.',
	'PRUNE_NOT_POSTED'				=> 'Aantal dagen sinds laatste bericht',
	'PRUNE_NOT_VIEWED'				=> 'Aantal dagen sinds laatst bekeken',
	'PRUNE_OLD_POLLS'				=> 'Ruim oude polls op',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Verwijdert onderwerpen met polls waarop, sinds een aantal opgegeven dagen, niet meer gestemd is.',
	'PRUNE_STICKY'					=> 'Ruim stickies op',
	'PRUNE_SUCCESS'					=> 'De forums zijn succesvol opgeruimd.',

	'TOPICS_PRUNED'		=> 'Onderwerpen opgeruimd',
));

?>