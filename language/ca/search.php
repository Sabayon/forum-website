<?php
/**
*
* search [Catalan]
*
* @package language
* @version $Id: search.php 9438 2009-04-11 11:09:45Z acydburn $
* @copyright (c) 2005 phpBB Group 
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
	'ALL_AVAILABLE'			=> 'Tots els disponibles',
	'ALL_RESULTS'			=> 'Tots els resultats',

	'DISPLAY_RESULTS'		=> 'Mostra els resultats com',

	'FOUND_SEARCH_MATCH'		=> 'La cerca ha trobat %d coincidència',
	'FOUND_SEARCH_MATCHES'		=> 'La cerca ha trobat %d coincidències',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'La cerca ha trobat més de %d coincidències',

	'GLOBAL'				=> 'Avís global',

	'IGNORED_TERMS'			=> 'ignorats',
	'IGNORED_TERMS_EXPLAIN'	=> 'Les paraules següents s’han ignorat durant la cerca perquè són massa freqüents: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Salta a l’entrada',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Cal que esteu registrat i amb la sessió iniciada per visualitzar les vostres entrades.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Cal que esteu registrat i amb la sessió iniciada per visualitzar les vostres entrades no llegides.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Heu especificat massa paraules per a la cerca. No introduïu més de %1$d paraules.',

	'NO_KEYWORDS'			=> 'Heu d’especificar com a mínim una paraula per a la cerca. Cada paraula ha de tenir un mínim de %d caràcters i no pot contenir més de %d caràcters sense tenir en compte els comodins.',
	'NO_RECENT_SEARCHES'	=> 'No s’ha fet cap cerca recentment.',
	'NO_SEARCH'				=> 'No se us permet utilitzar el sistema de cerques.',
	'NO_SEARCH_RESULTS'		=> 'No s’ha trobat cap coincidència.',
	'NO_SEARCH_TIME'		=> 'Ara mateix no es pot utilitzar la cerca. Si us plau torneu a provar-ho d’aquí a uns minuts.',
	'WORD_IN_NO_POST'		=> 'No s’ha trobat cap entrada perquè la paraula <strong>%s</strong> no apareix en cap entrada.',
	'WORDS_IN_NO_POST'		=> 'No s’ha trobat cap entrada perquè les paraules <strong>%s</strong> no apareixen en cap entrada.',

	'POST_CHARACTERS'		=> 'caràcters de les entrades',

	'RECENT_SEARCHES'		=> 'Cerques recents',
	'RESULT_DAYS'			=> 'Limita els resultats als darrers',
	'RESULT_SORT'			=> 'Ordena els resultats per',
	'RETURN_FIRST'			=> 'Retorna els primers',
	'RETURN_TO_SEARCH_ADV'	=> 'Torna a la cerca avançada',

	'SEARCHED_FOR'				=> 'Paraules utilitzades en la cerca',
	'SEARCHED_TOPIC'			=> 'Tema on s’ha fet la cerca',
	'SEARCH_ALL_TERMS'			=> 'Cerca totes les paraules o utilitza la consulta literalment',
	'SEARCH_ANY_TERMS'			=> 'Cerca qualsevol paraula',
	'SEARCH_AUTHOR'				=> 'Cerca per autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilitza * com a comodí per a coinicidències parcials.',
	'SEARCH_FIRST_POST'			=> 'Només la primera entrada dels temes',
	'SEARCH_FORUMS'				=> 'Cerca als fòrums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Seleccioneu el fòrum o fòrums en els quals voleu realitzar la cerca. Es cerca automàticament en els subfòrums si no desactiveu l’opció “Cerca als subfòrums” a sota.',
	'SEARCH_IN_RESULTS'			=> 'Cerca als resultats',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Escriviu <strong>+</strong> al davant de les paraules que s’han de trobar i <strong>-</strong> al davant de les que no s’han de trobar. Poseu una llista de paraules entre claudàtors separades per <strong>|</strong> si voleu trobar-ne només una. Utilitzeu * com a comodí per a coincidències parcials.',
	'SEARCH_MSG_ONLY'			=> 'Només el text del missatge',
	'SEARCH_OPTIONS'			=> 'Opcions de cerca',
	'SEARCH_QUERY'				=> 'Consulta de cerca',
	'SEARCH_SUBFORUMS'			=> 'Cerca als subfòrums',
	'SEARCH_TITLE_MSG'			=> 'Assumptes i text dels missatges',
	'SEARCH_TITLE_ONLY'			=> 'Només títols de tema',
	'SEARCH_WITHIN'				=> 'Cerca a',
	'SORT_ASCENDING'			=> 'Ascendent',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Descendent',
	'SORT_FORUM'				=> 'Fòrum',
	'SORT_POST_SUBJECT'			=> 'Assumpte de l’entrada',
	'SORT_TIME'					=> 'Data de l’entrada',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Heu d’especificar com a mínim %d caràcters del nom de l’autor.',
));

?>