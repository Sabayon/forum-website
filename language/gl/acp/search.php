<?php
/** 
*
* acp_search [Galician]
*
* @package language
* @version $Id: search.php 9126 2008-11-26 19:17:52Z naderman $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aquí podes xestionar os índices do servidor de procura. Como normalmente empregarás un só servidor podes eliminar todos os índices que non uses. Logo de alterar algunha das opcións de procura (p.e. o número mínimo/máximo de caracteres) paga a pena refacer o índice para que reflicta estes trocos.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aquí podes definir que servidor de procura usar para indexar mensaxes e executar procuras. Podes fixar varias opcións que poden influír na cantidade de procesos necesarios. Algunhas destas opcións tamén se aplicarán no motor de procura.',

	'COMMON_WORD_THRESHOLD'					=> 'Límite de palabra común',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'As palabras que estean contidas en todas as mensaxes publicadas nunha alta porcentaxe consideraranse comúns. As palabras comúns son ignoradas nas consultas de procura. Selecciona cero para desactivar tal cousa. Só ten efecto se hai máis de 100 mensaxes publicadas. Se queres reconsiderar as verbas que actualmente se contemplan como comúns, deberás recrear o índice.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Estás certo de querer mudar a un servidor de procura distinto? Despois de mudar a servidor de procura deberás crear un novo índice para o mesmo. Se non pensas volver a empregar o antigo servidor de procura podes eliminar o vello índice asociado ao mesmo co obxecto de ceibar recursos do sistema.',
	'CONTINUE_DELETING_INDEX'				=> 'Continúa o proceso de eliminación de índices previos',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Comezou un proceso de eliminación de índices. Para acceder á páxina indexada de procura outravolta precisas completar o proceso primeiro.',
	'CONTINUE_INDEXING'						=> 'Continúa o proceso de indexado previo',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Comezou un proceso de indexación. Para acceder á páxina indexada de procura outravolta necesitas completalo primeiro.',
	'CREATE_INDEX'							=> 'Crear Índice',

	'DELETE_INDEX'							=> 'Eliminar Índice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Borrado de índice en proceso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'O servidor buscado está actualmente limpando o seu índice. Isto pode levar varios minutos.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'O servidor de texto completo MySQL só pode ser usado con MySQL4 ou superior.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Os índices de texto completo MySQL só poden ser usados con táboas MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número total de mensaxes indexados',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Soporte para caracteres UTF-8 non latinos utilizando mbstring:',
	'FULLTEXT_MYSQL_PCRE'				=> 'Soporte para caracteres UTF-8 non latinos utilizando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Se o PCRE non ten propiedades de caracteres unicode, o backend de procura tentará usar o motor de expresións regulares de mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'		=> 'Este backend de procura require propiedades de caracter PCRE unicode, só dispoñible no PHP 4.4, 5.1 e superiores, se queres buscar caracteres non latinos.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configuración xeral da procura',
	'GO_TO_SEARCH_INDEX'					=> 'Ir á páxina de índices de procura',

	'INDEX_STATS'							=> 'Índice de estatísticas',
	'INDEXING_IN_PROGRESS'					=> 'Indexado en proceso',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'O servidor de procura está actualmente indexando todas as mensaxes publicadas do taboleiro. Isto pode demorar dende uns minutos até unhas horas dependendo do tamaño do teu taboleiro.',

	'LIMIT_SEARCH_LOAD'						=> 'Buscar páxina de límite de transferencias do sistema',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema de 1 minuto excede este valor a páxina de busca desconectarase 1.0 equals~100% utilización dun procesador. Isto só funciona en servidores baseados en UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Máximo número de caracteres introducidos nunha procura',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palabras non maiores desta cantidade de carácteres serán indexadas para procura.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo de verbas chave permitidas',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de verbas que pode procurar un usuario. Un valor de 0 permite un número ilimitado de verbas.',
	'MIN_SEARCH_CHARS'						=> 'Mínimo número de caracteres introducidos nunha procura',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palabras con esta cantidade de caracteres como mínimo, serán indexadas para procura.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Mínimo número de caracteres no nome do autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os usuarios deberán inserir como mínimo esta cantidade de caracteres do nome cando fagan unha procura por autor empregando comodíns. Se o nome do autor é máis curto ca este número aínda poderás procurar as mensaxes do autor inserindo o seu nome completo.',

	'PROGRESS_BAR'							=> 'Barra de progreso',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de saturación (flood) de procuras dos convidados',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número de segundos que os convidados deben agardar entre dúas procuras. Se un invitado fixo unha procura, os demáis deberán agardar até que remate o intervalo de tempo.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Indexaronse todas as mensaxes publicadas ata a que ten id %1$d , das cales %2$d foron procesadas neste chanzo.<br />A media actual de indexado é aproximadamente de %3$.1f mensaxes por segundo.<br />Indexado en proceso…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Todas as mensaxes publicadas ata a que ten id %1$d foron eliminadas do índice de procura.<br />Borrado en proceso…',
	'SEARCH_INDEX_CREATED'					=> 'Indexadas correctamente todas as mensaxes na base de datos do board.',
	'SEARCH_INDEX_REMOVED'					=> 'Eliminado correctamente o índice de procura deste servidor.',
	'SEARCH_INTERVAL'						=> 'Intervalo de saturación (flood) para procuras de usuarios',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número de segundos que os usuarios deben agardar entre procuras. Este intervalo é verificado de xeito independente para cada usuario.',
	'SEARCH_STORE_RESULTS'					=> 'Buscar resultado en toda a caché',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A procura de resultados na caché expirará despois deste tempo, en segundos. Escolle 0 se queres desactivar a procura na caché.',
	'SEARCH_TYPE'							=> 'Buscar servidor',
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB permíteche escoller o servidor empregado para facer procuras de texto no contido das mensaxes publicadas. De xeito predeterminado, a procura empregará o método de texto completo propio do phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Cambiaches o sistema de procura. Para usar o novo asegúrate que existe un índice para o sistema escollido',

	'TOTAL_WORDS'							=> 'Número total de palabras indexadas',
	'TOTAL_MATCHES'							=> 'Indexado número total de palabras relacionadas co comentario',

	'YES_SEARCH'							=> 'Activar facilidades de procura',
	'YES_SEARCH_EXPLAIN'					=> 'Activar funcionalidade de recoñecemento de usuario incluíndo procura de membros.',
	'YES_SEARCH_UPDATE'						=> 'Activar actualización de texto completo',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Actualización de índices de texto completo ao enviar mensaxes, anular se a procura está desactivada.',
));

?>