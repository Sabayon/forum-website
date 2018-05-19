<?php
/** 
* 
* search.php [Português]
* 
* @package language 
* @version $Id: search.php, v 1.0 Outubro/2009
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Versão do phpBB: 3.0.6
* @Traduzido por: http://phpbbportugal.com
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
	'ALL_AVAILABLE'	=> 'Tudo disponíveis',
	'ALL_RESULTS'	=> 'Todos os Resultados',

	'DISPLAY_RESULTS'	=> 'Mostrar resultados ',

	'FOUND_SEARCH_MATCH'	=> 'A pesquisa obteve %d resultado ',
	'FOUND_SEARCH_MATCHES'	=> 'A pesquisa obteve %d resultados',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'A pesquisa obteve mais de %d resultados',

	'GLOBAL'	=> 'Anúncio Global',

	'IGNORED_TERMS'	=> 'ignorado',
	'IGNORED_TERMS_EXPLAIN'	=> 'As seguintes palavras foram ignoradas na procura: <b>%s</b>',
	'JUMP_TO_POST'	=> 'Pular para a mensagem',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Este forum obriga a que esteja registado para visualizar os tópicos.',

	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'O administrador exige que esteja registado e autenticado para ver as suas mensagens lidas.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Introduziu demasiadas palavras para pesquisar. Por favor não introduza mais do que %1$d palavras.',

	'NO_KEYWORDS'	=> 'Tem que especificar pelo menos uma palavra para pesquisa. Cada palavra tem que conter no mínimo %d caracteres e não pode conter mais do que %d caracteres.',
	'NO_RECENT_SEARCHES'	=> 'Sem procuras recentes',
	'NO_SEARCH'	=> 'Desculpe, mas não esta permitido para usar a pesquisa.',
	'NO_SEARCH_RESULTS'	=> 'Não foi encontrado nenhum resultado.',
	'NO_SEARCH_TIME'	=> 'Neste momento não é possível usar a pesquisa. Por favor, tente novamente daqui a alguns minutos.',

	'WORD_IN_NO_POST'	=> 'Não foi encontrado nenhum resultado para esta palavra: %s.',
	'WORDS_IN_NO_POST'	=> 'Não foi encontrado nenhum resultado para esta palavras: %s.',

	'POST_CHARACTERS'	=> 'caracteres da Mensagem',

	'RECENT_SEARCHES'	=> 'Pesquisas recentes',
	'RESULT_DAYS'	=> 'Limitar resultados anteriores',
	'RESULT_SORT'	=> 'Organizar resultados por',
	'RETURN_FIRST'	=> 'Mostrar os primeiros',
	'RETURN_TO_SEARCH_ADV'	=> 'Pesquisa avançada',

	'SEARCHED_FOR'	=> 'Termo usado na pesquisa',
	'SEARCHED_TOPIC'	=> 'Pesquisar por tópicos',
	'SEARCH_ALL_TERMS'	=> 'Procurar por todos os termos',
	'SEARCH_ANY_TERMS'	=> 'Procurar por qualquer termo',
	'SEARCH_AUTHOR'	=> 'Procurar por autor',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Use * para resultados parciais',
	'SEARCH_FIRST_POST'	=> 'Apenas a primeira Mensagem dos Tópicos',
	'SEARCH_FORUMS'	=> 'Pesquisar nos fóruns',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Seleccione o Fórum ou os Fóruns em que deseja procurar. Para ser mais rapido na pesquisa seleccione o Fórum principal do Subfórum e marque a opção de pesquisar em Subfórum.',
	'SEARCH_IN_RESULTS'	=> 'Procurar estes resultados',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Coloque <strong>+</strong> na frente das palavras que tem que ser encontradas e coloque <strong>-</strong> nas palavras que <strong>não</strong> tem que ser encontradas. Coloque uma lista de palavras separadas por <strong>|</strong>. Use o * para resultados parciais.',
	'SEARCH_MSG_ONLY'	=> 'Apenas Mensagens de texto',
	'SEARCH_OPTIONS'	=> 'Opções de pesquisa',
	'SEARCH_QUERY'	=> 'Procurar',
	'SEARCH_SUBFORUMS'	=> 'Procurar nos Subfóruns',
	'SEARCH_TITLE_MSG'	=> 'Procurar Títulos e texto dos Tópicos',
	'SEARCH_TITLE_ONLY'	=> 'Procurar só nos Títulos dos Tópicos',
	'SEARCH_WITHIN'	=> 'Procurar com',
	'SORT_ASCENDING'	=> 'Crescente',
	'SORT_AUTHOR'	=> 'Autor',
	'SORT_DESCENDING'	=> 'Decrescente',
	'SORT_FORUM'	=> 'Fórum',
	'SORT_POST_SUBJECT'	=> 'Assunto do Post',
	'SORT_TIME'	=> 'Submetido em',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Deve indicar pelo menos %d caracteres do nome do autor.',
));

?>