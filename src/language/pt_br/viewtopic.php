<?php
/**
*
* viewtopic [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.3
* @package language: Brazilian Portuguese
* @original version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-19 - 14:11
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
	'ATTACHMENT'						=> 'Anexo',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Anexos foram desativados',

	'BOOKMARK_ADDED'		=> 'T&oacute;pico adicionado aos Favoritos.',
	'BOOKMARK_ERR'			=> 'Falha ao adicionar o t&oacute;pico aos Favoritos. Por favor, tente novamente.',
	'BOOKMARK_REMOVED'		=> 'T&oacute;pico removido dos Favoritos.',
	'BOOKMARK_TOPIC'		=> 'Adicionar aos Favoritos',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remover T&oacute;pico dos Favoritos',
	'BUMPED_BY'				=> '&Uacute;ltimo pulo por%1$s no %2$s',
	'BUMP_TOPIC'			=> 'Pular T&oacute;pico',

	'CODE'					=> 'C&oacute;digo',

	'DELETE_TOPIC'			=> 'Excluir t&oacute;pico',
	'DOWNLOAD_NOTICE'		=> 'Voc&ecirc; n&atilde;o tem permiss&otilde;es suficientes para ver os arquivos anexados nesta mensagem.',

	'EDITED_TIMES_TOTAL'	=> 'Editado pela &uacute;ltima vez por %1$s em %2$s, no total de %3$d vez ',
	'EDITED_TIME_TOTAL'		=> 'Editado pela &uacute;ltima vez por %1$s em %2$s, num total de %3$d vezes',
	'EMAIL_TOPIC'			=> 'Enviar a um amigo',
	'ERROR_NO_ATTACHMENT'	=> 'O anexo selecionado n&atilde;o existe mais',

	'FILE_NOT_FOUND_404'	=> 'O arquivo <strong>%s</strong> n&atilde;o existe.',
	'FORK_TOPIC'			=> 'Copiar T&oacute;pico',

	'LINKAGE_FORBIDDEN'		=> 'Voc&ecirc; n&atilde;o est&aacute; autorizado a ver o link para este site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Voc&ecirc; foi notificado sobre este t&oacute;pico, por favor, logue-se para ver.',
	'LOGIN_VIEWTOPIC'		=> 'O Administrador do F&oacute;rum requer que voc&ecirc; esteja registrado e logado para ver este t&oacute;pico.',

	'MAKE_ANNOUNCE'				=> 'Mudar para “An&uacute;ncio”',
	'MAKE_GLOBAL'				=> 'Mudar para “An&uacute;ncio Global”',
	'MAKE_NORMAL'				=> 'Mudar para “T&oacute;pico Normal”',
	'MAKE_STICKY'				=> 'Mudar para “Fixo”',
	'MAX_OPTIONS_SELECT'		=> 'Voc&ecirc; pode selecionar acima de <strong>%d</strong> op&ccedil;&otilde;es',
	'MAX_OPTION_SELECT'			=> 'Voc&ecirc; pode selecionar <strong>1</strong> op&ccedil;&atilde;o',
	'MISSING_INLINE_ATTACHMENT'	=> 'O anexo <strong>%s</strong> n&atilde;o est&aacute; dispon&iacute;vel',
	'MOVE_TOPIC'				=> 'Mover T&oacute;pico',

	'NO_ATTACHMENT_SELECTED'=> 'Voc&ecirc; n&atilde;o selecionou um anexo para download ou para visualiza&ccedil;&atilde;o.',
	'NO_NEWER_TOPICS'		=> 'N&atilde;o h&aacute; novos t&oacute;picos neste f&oacute;rum',
	'NO_OLDER_TOPICS'		=> 'N&atilde;o h&aacute; t&oacute;picos antigos neste f&oacute;rum',
	'NO_UNREAD_POSTS'		=> 'N&atilde;o h&aacute; t&oacute;picos n&atilde;o lidos.',
	'NO_VOTE_OPTION'		=> 'Voc&ecirc; deve selecionar uma op&ccedil;&atilde;o para votar.',
	'NO_VOTES'				=> 'Nenhum voto',

	'POLL_ENDED_AT'			=> 'Enquete encerrada em %s',
	'POLL_RUN_TILL'			=> 'Enquete vai at&eacute; %s',
	'POLL_VOTED_OPTION'		=> 'Voc&ecirc; votou por essa op&ccedil;&atilde;o',
	'PRINT_TOPIC'			=> 'Visualizar Impress&atilde;o',

	'QUICK_MOD'				=> 'Ferramentas para Modera&ccedil;&atilde;o R&aacute;pida',
	'QUOTE'					=> 'Cita&ccedil;&atilde;o',

	'REPLY_TO_TOPIC'		=> 'Responder T&oacute;pico',
	'RETURN_POST'			=> '%sRetornar para as Mensagens%s',

	'SUBMIT_VOTE'			=> 'Confirmar Voto',

	'TOTAL_VOTES'			=> 'Total de Votos',

	'UNLOCK_TOPIC'			=> 'Destrancar t&oacute;pico',

	'VIEW_INFO'				=> 'Detalhes da Mensagem',
	'VIEW_NEXT_TOPIC'		=> 'Exibir Pr&oacute;ximo T&oacute;pico',
	'VIEW_PREVIOUS_TOPIC'	=> 'Exibir T&oacute;pico Anterior',
	'VIEW_RESULTS'			=> 'Exibir resultados',
	'VIEW_TOPIC_POST'		=> '1 Mensagem',
	'VIEW_TOPIC_POSTS'		=> '%d Mensagens',
	'VIEW_UNREAD_POST'		=> 'Primeira mensagem n&atilde;o lida',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Seu voto foi feito.',
	'VOTE_CONVERTED'		=> 'A mudan&ccedil;a de votos n&atilde;o s&atilde;o permitidas para enquetes convertidas.',

));

?>
