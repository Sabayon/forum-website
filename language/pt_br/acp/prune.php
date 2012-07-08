<?php
/**
*
* acp_prune [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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
// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Aqui voc&ecirc; pode excluir (ou desativar) usu&aacute;rios de sua comunidade. Isto pode ser feito com uma variedade de op&ccedil;&otilde;es: por n&uacute;mero de mensagens, &uacute;ltima atividade, etc. Cada um destes crit&eacute;rios pode ser combinado, ex. voc&ecirc; pode punir usu&aacute;rios que estiveram ativos apenas antes de 01-01-2002 com menos de 10 mensagens. Alternativamente voc&ecirc; pode entrar uma lista de usu&aacute;rios diretamente no campo abaixo, qualquer crit&eacute;rio entrado ser&aacute; ignorado. Tome cuidado com esta facilidade! Uma vez que um usu&aacute;rio &eacute; deletado, n&atilde;o tem como voltar atr&aacute;s.',

	'DEACTIVATE_DELETE'			=> 'Desativar ou remover',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Escolha entre desativar os usu&aacute;rios ou remov&ecirc;-los completamente, note que n&atilde;o &eacute; poss&iacute;vel reverter esta a&ccedil;&atilde;o!',
	'DELETE_USERS'				=> 'Remover',
	'DELETE_USER_POSTS'			=> 'Remover mensagens de usu&aacute;rios punidos',
	'DELETE_USER_POSTS_EXPLAIN' => 'Remover mensagens feitas por usu&aacute;rios removidos, n&atilde;o ter&aacute; efeito caso usu&aacute;rio esteja desativado.',

	'JOINED_EXPLAIN'			=> 'Entre uma data entre formato <kbd>AAAA-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Entre uma data entre formato <kbd>AAAA-MM-DD</kbd>.',

    'PRUNE_USERS_LIST'				=> 'Usu&aacute;rios para serem punidos',
	'PRUNE_USERS_LIST_DELETE'		=> 'Com o crit&eacute;rio selecionado para punir usu&aacute;rios as seguintes contas ser&atilde;o removidas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Com o crit&eacute;rio selecionado para punir usu&aacute;rios, as seguintes contas ser&atilde;o desativas.',

    'SELECT_USERS_EXPLAIN'		=> 'Entre um nome de usu&aacute;rio espec&iacute;fico aqui, eles ser&atilde;o usados em prefer&ecirc;ncia para ser crit&eacute;rio acima.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Os usu&aacute;rios selecionados foram desativados com sucesso!',
	'USER_DELETE_SUCCESS'		=> 'Os usu&aacute;rios selecionados foram removidos com sucesso!',
	'USER_PRUNE_FAILURE'		=> 'Nenhum usu&aacute;rio preencheu os crit&eacute;rios.',
	
    'WRONG_ACTIVE_JOINED_DATE'	=> 'A data entrada est&aacute; errada, o formato esperado &eacute; <kbd>AAAA-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Nesta p&aacute;gina, voc&ecirc; poder&aacute; excluir qualquer t&oacute;pico que n&atilde;o tenha recebido novas mensagens ou visualiza&ccedil;&otilde;es dentro de um n&uacute;mero de dias que voc&ecirc; poder&aacute; determinar. Se voc&ecirc; n&atilde;o entrar com um n&uacute;mero, todos os t&oacute;picos ser&atilde;o deletados. Por padr&atilde;o, isto n&atilde;o ir&aacute; remover t&oacute;picos no qual enquetes ainda estejam ativas e tamb&eacute;m n&atilde;o ir&aacute; remover t&oacute;picos fixos e an&uacute;ncios.',

	'FORUM_PRUNE'		=> 'Limpar F&oacute;rum',

	'NO_PRUNE'			=> 'Nenhum f&oacute;rum limpo',

	'SELECTED_FORUM'	=> 'F&oacute;rum selecionado',
	'SELECTED_FORUMS'	=> 'F&oacute;runs selecionados',

	'POSTS_PRUNED'					=> 'Mensagens removidas',
	'PRUNE_ANNOUNCEMENTS'			=> 'An&uacute;ncios removidos',
	'PRUNE_FINISHED_POLLS'			=> 'Remover enquetes fechadas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Remover t&oacute;picos com enquetes finalizadas.',
	'PRUNE_FORUM_CONFIRM'			=> 'Voc&ecirc; tem certeza que deseja punir os f&oacute;runs selecionados com as defini&ccedil;&otilde;es especificadas? Uma vez realizada esta a&ccedil;&atilde;o, n&atilde;o ter&aacute; mais retorno.',
	'PRUNE_NOT_POSTED'				=> 'Dias deste sua &uacute;ltima mensagem',
	'PRUNE_NOT_VIEWED'				=> 'Dias deste sua &uacute;ltima visita',
	'PRUNE_OLD_POLLS'				=> 'Punir antigas enquetes',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Remover t&oacute;picos com enquetes sem vota&ccedil;&atilde;o e antigas.',
	'PRUNE_STICKY'					=> 'Remover f&oacute;runs fixos',
	'PRUNE_SUCCESS'					=> 'Limpeza de f&oacute;runs aplicadas com sucesso!',

	'TOPICS_PRUNED'		=> 'T&oacute;picos removidos',
));

?>
