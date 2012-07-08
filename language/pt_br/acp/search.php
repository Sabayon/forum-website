<?php
/**
*
* acp_search [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
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
// phpBBrasil.com.br
$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui voc&ecirc; pode configurar o suporte para os &iacute;ndices das pesquisas. Se voc&ecirc; normalmente s&oacute; usa um suporte para as pesquisas, voc&ecirc; deveria excluir todos os outros que n&atilde;o vai usar. Ap&oacute;s alterar algumas configura&ccedil;&otilde;es (n&uacute;mero m&iacute;nimo/m&aacute;ximo de caracteres) valer&aacute; a pena recriar o &iacute;ndice para poder refletir sobre as altera&ccedil;&otilde;es.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui voc&ecirc; pode definir qual suporte de pesquisa ser&aacute; usado. Voc&ecirc; pode configurar v&aacute;rios valores que podem determinar quanto processamento aquelas a&ccedil;&otilde;es requerem. Algumas dessas configura&ccedil;&otilde;es s&atilde;o as mesmas para todos os modos de procura.',

	'COMMON_WORD_THRESHOLD'					=> 'Limite de palavras comuns',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que existem em uma grande porcentagem de posts ser&atilde;o colocadas como comuns. Palavras comuns s&atilde;o ignoradas nas pesquisas. Configure para zero para desativar. Apenas tem efeito se ela est&aacute; em mais de 100 mensagens. Se voc&ecirc; desejar que palavras atualmente consideradas como comuns sejam reconsideradas, voc&ecirc; ter&aacute; de recriar o &iacute;ndice da busca.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Voc&ecirc; tem certeza que deseja mudar para um diferente modo de pesquisa? Depois de mudar voc&ecirc; ter&aacute; que criar outro &iacute;ndice para seu novo modo. Se voc&ecirc; n&atilde;o planeja voltar para um antigo modo de pesquisas, voc&ecirc; pode delet&aacute;-lo.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuar com o processo de remover previamente',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de remo&ccedil;&atilde;o da &iacute;ndex foi inicializado. Em ordem para acessar a p&aacute;gina inicial da busca voc&ecirc; ter&aacute; de completar isto ou cancelar.',
	'CONTINUE_INDEXING'						=> 'Continuar com o processo de indexa&ccedil;&atilde;o',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de indexa&ccedil;&atilde;o come&ccedil;ou. Para acessar a p&aacute;gina de pesquisa voc&ecirc; ter&aacute; que completar essa opera&ccedil;&atilde;o ou cancel&aacute;-la.',
	'CREATE_INDEX'							=> 'Criar &iacute;ndice',

	'DELETE_INDEX'							=> 'Excluir &iacute;ndice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Apagamento do &iacute;ndice em progresso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'O sistema de pesquisa est&aacute; limpando seu &iacute;ndice. Isso pode levar alguns minutos.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'O modo de pesquisa por textos completos no MySQL s&oacute; pode ser usado com MySQL4 e superiores.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Indexa&ccedil;&atilde;o de textos completos s&oacute; pode ser usada com tabelas MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Total de mensagens indexadas',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suporte para caracteres non-latin UTF-8 usando mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suporte para caracteres non-latin UTF-8 usando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Se o PCRE n&atilde;o tem propriedades de caractere unicode, a busca tentar&aacute; utilizar o motor mbstring’s de express&otilde;es regulares.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Esta busca de fundo requer PCRE unicode propriedades de caracteres, dispon&iacute;vel apenas em PHP 4.4, 5.1 e superior, se voc&ecirc; quiser pesquisar por caracteres n&atilde;o latinos apenas.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configura&ccedil;&atilde;o geral de pesquisas',
	'GO_TO_SEARCH_INDEX'					=> 'Ir para o &iacute;ndice das pesquisas',

	'INDEX_STATS'							=> 'Estat&iacute;sticas do &iacute;ndice',
	'INDEXING_IN_PROGRESS'					=> 'Indexa&ccedil;&atilde;o em progresso',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'O modo de pesquisa est&aacute; no momento indexando todas as mensagens do f&oacute;rum. Isso pode levar de alguns minutos &agrave; algumas horas dependendo do tamanho do seu f&oacute;rum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite de tempo para carregar as pesquisas',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se o 1 minuto de carregamento do sistema exceder esse valor, a p&aacute;gina de pesquisa ficar&aacute; offline, 1.0 equivale &agrave; 100% utiliza&ccedil;&atilde;o de um processador. Isso s&oacute; funciona em servidores baseados em UNIX.',

	'MAX_SEARCH_CHARS'						=> 'N&uacute;mero m&aacute;ximo de caracteres indexados por pesquisa',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que n&atilde;o tenham mais que esse n&uacute;mero de caracteres ser&atilde;o indexados pela pesquisa.',
	'MIN_SEARCH_CHARS'						=> 'N&uacute;mero m&iacute;nimo de caracteres indexados por pesquisa',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que tenham menos que esse n&uacute;mero de caracteres ser&atilde;o indexados pela pesquisa.',
	
	// Mudanças 3.0.5
  'MAX_NUM_SEARCH_KEYWORDS'				=> 'N&uacute;mero m&aacute;ximo de palavras chaves permitidas',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'N&uacute;mero m&aacute;ximo de palavras que um usu&aacute;rio pode usar na busca. Se configurado como 0, eles poder&atilde;o utilizar um n&uacute;mero ilimitado.',
	// Mudanças 3.0.5
	
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'N&uacute;mero m&iacute;nimo de caracteres para se procurar por autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os usu&aacute;rios t&ecirc;m de colocar no m&iacute;nimo esse n&uacute;mero de caracteres para poder fazer uma pesquisa pelo nome do autor. Se o nome de usu&aacute;rio do autor for menor que esse limite m&iacute;nimo, voc&ecirc; poder&aacute; fazer uma pesquisa pelo nome completo do autor.',

	'PROGRESS_BAR'							=> 'Barra de progresso',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de tempo entre as pesquisas para visitantes',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'N&uacute;mero de segundos que os visitantes t&ecirc;m de esperar entre as pesquisas. Se um visitante fizer uma pesquisa, todos os outros t&ecirc;m de esperar o tempo m&iacute;nimo para poderem fazer outra pesquisa.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Todas as mensagens acima da id %1$d foram indexadas agora, do qual %2$d mensagens foram geradas com estes passos.<br />A taxa atual de indexa&ccedil;&atilde;o &eacute; de aproximadamente %3$.1f mensagens por segundo.<br />Indexa&ccedil;&atilde;o em progresso…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Todas as mensagens acima da id %1$d foram removidas do sistema de busca.<br />Remo&ccedil;&atilde;o em progresso…',
	'SEARCH_INDEX_CREATED'					=> 'Foram indexadas todas as mensagens no banco de dados desse f&oacute;rum',
	'SEARCH_INDEX_REMOVED'					=> 'Foi apagado o &iacute;ndice de procura para esse modo.',
	'SEARCH_INTERVAL'						=> 'Intervalo de tempo entre as pesquisas',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'N&uacute;mero de segundos que os usu&aacute;rios t&ecirc;m que esperar para fazer uma nova pesquisa. Esse intervalo &eacute; usado independente do usu&aacute;rio.',
	'SEARCH_STORE_RESULTS'					=> 'Tamanho do cache das pesquisas',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Configure como 0 se voc&ecirc; quiser desabilitar o cache das pesquisas.',
	'SEARCH_TYPE'							=> 'Modo de pesquisa',
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB permite &agrave; voc&ecirc; escolher o modo de pesquisa que ser&aacute; usado. Por padr&atilde;o, o phpBB ir&aacute; usar seu pr&oacute;prio sistema de pesquisa por textos completos.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Voc&ecirc; mudou o modo de pesquisa. Usando um novo modo de pesquisa voc&ecirc; deve ter certeza que h&aacute; um &iacute;ndice para o modo que voc&ecirc; escolheu.',

	'TOTAL_WORDS'							=> 'N&uacute;mero total de palavras indexadas',
	'TOTAL_MATCHES'							=> 'Numero total de palavras relacionadas da pesquisa',

	'YES_SEARCH'							=> 'Habilitar pesquisas',
	'YES_SEARCH_EXPLAIN'					=> 'Habilitar o sistema de procura para os usu&aacute;rios, incluindo procura de membros.',
	'YES_SEARCH_UPDATE'						=> 'Habilitar a atualiza&ccedil;&atilde;o do modo de texto completo',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'O modo de texto completo &eacute; atualizado quando se coloca uma mensagem, mesmo se a pesquisa est&aacute; desabilitada.',
));

?>
