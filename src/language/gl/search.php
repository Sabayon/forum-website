<?php
/** 
*
* search [Galician]
*
* @package language
* @version $Id: search.php 10004 2009-08-17 13:25:04Z rxu $
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
	'ALL_AVAILABLE'			=> 'Todos os dispoñibles',
	'ALL_RESULTS'			=> 'Todos os resultados',

	'DISPLAY_RESULTS'		=> 'Amosar resultados como',

	'FOUND_SEARCH_MATCH'		=> 'A procura atopou %d coincidencia',
	'FOUND_SEARCH_MATCHES'		=> 'A procura atopou %d coincidencias',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'A procura atopou máis de %d coincidencias',

	'GLOBAL'				=> 'Anuncio global',

	'IGNORED_TERMS'			=> 'ignorado',
	'IGNORED_TERMS_EXPLAIN'	=> 'Foron ignoradas as seguintes palabras da túa procura: <b>%s</b>',

	'JUMP_TO_POST'			=> 'Choutar á mensaxe',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'O taboleiro require que esteas rexistrado e inicies unha sesión para poder ver as túas propias mensaxes publicadas.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'O taboleiro require que esteas rexistrado e con sesión iniciada para poderes ver as túas mensaxes publicadas non lidas.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Inseriches verbas de máis polas que procurar. Por favor, non insiras máis de %1$d verbas.',

	'NO_KEYWORDS'			=> 'Tes que especificar cando menos unha palabra para procurar. Cada palabra debe ter polo menos %d caracteres e non pode ter máis de %d, excluíndo comodíns. ',
	'NO_RECENT_SEARCHES'	=> 'Non se levaron a cabo procuras recentemente',
	'NO_SEARCH'				=> 'Sentímolo, mais non tes permiso para empregar o sistema de procura',
	'NO_SEARCH_RESULTS'		=> 'Non se atoparon resultados axeitados.',
	'NO_SEARCH_TIME'		=> 'Sentímolo, mais non podes utilizar a procura agora. Téntao de novo nun par de minutos.',
	'WORD_IN_NO_POST'		=> 'Non se atoparon mensaxes xa que a palabra %s non apareceu en ningunha delas.',
	'WORDS_IN_NO_POST'		=> 'Non se atoparon mensaxes xa que as verbas %s non apareceron en ningunha delas.',

	'POST_CHARACTERS'		=> 'caracteres das mensaxes',

	'RECENT_SEARCHES'		=> 'Procuras recentes',
	'RESULT_DAYS'			=> 'Limitar os resultados aos anteriores',
	'RESULT_SORT'			=> 'Ordenar os resultados por',
	'RETURN_FIRST'			=> 'Volver ao primeiro',
	'RETURN_TO_SEARCH_ADV'	=> 'Volver á procura avanzada',

	'SEARCHED_FOR'				=> 'Procurar termo usado',
	'SEARCHED_TOPIC'			=> 'Tema procurado',
	'SEARCH_ALL_TERMS'			=> 'Procurar todos os termos ou usar a consulta tal e como se inseriu',
	'SEARCH_ANY_TERMS'			=> 'Procurar por calquera termo',
	'SEARCH_AUTHOR'				=> 'Procurar por autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilizar * como comodín para coincidencias parciais',
	'SEARCH_FIRST_POST'			=> 'Só primeira mensaxe dos temas',
	'SEARCH_FORUMS'				=> 'Procurar nos foros',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecciona o foro ou foros nos que queres pescudar. Para unha meirande axilidade, pódese pescudar nos sub-foros seleccionando o foro pai e activando a opción de procura nos sub-foros que hai embaixo.',
	'SEARCH_IN_RESULTS'			=> 'Procurar estes resultados',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Pon <strong>+</strong> diante dunha palabra que debe ser atopada e <strong>-</strong> diante dunha palabra que non debe ser atopada. Se pos <strong>|</strong> diante das palabras, cada resultado deberá conter polo menos unha destas palabras. Utiliza * como comodín para coincidencias parciais',
	'SEARCH_MSG_ONLY'			=> 'Só texto da mensaxe',
	'SEARCH_OPTIONS'			=> 'Opcións da Procura',
	'SEARCH_QUERY'				=> 'Petición de Procura',
	'SEARCH_SUBFORUMS'			=> 'Procurar nos subforos',
	'SEARCH_TITLE_MSG'			=> 'Asuntos e texto das mensaxe publicadas',
	'SEARCH_TITLE_ONLY'			=> 'Só títulos de tema',
	'SEARCH_WITHIN'				=> 'Procurar dentro de',
	'SORT_ASCENDING'			=> 'Ascendente',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Descendente',
	'SORT_FORUM'				=> 'Foro',
	'SORT_POST_SUBJECT'			=> 'Asunto da mensaxe',
	'SORT_TIME'					=> 'Data de publicación',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Debes especificar polo menos %d caracteres do nome do autor ou autores.',
));

?>