<?php
/**
*
* acp_bots [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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
// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gerenciar rob&ocirc;s',
	'BOTS_EXPLAIN'		=> '“Rob&ocirc;”, “espi&otilde;es” ou “crawlers” s&atilde;o agentes autom&aacute;ticos normalmente utilizados por sistemas de busca para atualizarem os bancos de dados de busca. Desde que eles raramente fa&ccedil;am utiliza&ccedil;&atilde;o de sess&otilde;es, n&atilde;o ir&atilde;o alterar a contagem de usu&aacute;rios online. Nesta parte, voc&ecirc; poder&aacute; definir os atributos de um rob&ocirc; em sua comunidade.',	'BOT_ACTIVATE'		=> 'Ativar',
	'BOT_ACTIVATE'		=> 'Ativar',
	'BOT_ACTIVE'		=> 'Rob&ocirc; ativo',
	'BOT_ADD'			=> 'Adicionar rob&ocirc;',
	'BOT_ADDED'			=> 'Novo rob&ocirc; adicionado com sucesso.',
	'BOT_AGENT'			=> 'Agente encontrado',
	'BOT_AGENT_EXPLAIN'	=> 'Uma frase definindo sobre o rob&ocirc;, pequenas partes s&atilde;o permitidas.',
	'BOT_DEACTIVATE'	=> 'Desativar',
	'BOT_DELETED'		=> 'Rob&ocirc; deletado com sucesso.',
	'BOT_EDIT'			=> 'Editar rob&ocirc;s',
	'BOT_EDIT_EXPLAIN'	=> 'Aqui voc&ecirc; pode adicionar ou editar um rob&ocirc; existente. Voc&ecirc; pode definir uma frase ao agente e/ou mais de um endere&ccedil;o IP (ou v&aacute;rios endere&ccedil;os) para coincidir. Esteja seguro quando definir endere&ccedil;os IP�s e frases para os agentes. Voc&ecirc; pode tamb&eacute;m definir um idioma e um estilo para o rob&ocirc; quando o mesmo estiver visitando. Esta a&ccedil;&atilde;o ir&aacute; reduzir o uso de banda de seu servidor, tamb&eacute;m poder&aacute; determinar permiss&otilde;es ao grupo do rob&ocirc;.',
	'BOT_LANG'			=> 'Idioma do rob&ocirc;',
	'BOT_LANG_EXPLAIN'	=> 'O idioma apresentado aos rob&ocirc;s.',
	'BOT_LAST_VISIT'	=> '&Uacute;ltima visita',
	'BOT_IP'			=> 'Endere&ccedil;o IP',
	'BOT_IP_EXPLAIN'	=> 'Palavras parciais s&atilde;o permitidas, separe-as com uma crase.',
	'BOT_NAME'			=> 'Nome do rob&ocirc;',
	'BOT_NAME_EXPLAIN'	=> 'Usado somente para sua pr&oacute;pria informa&ccedil;&atilde;o.',
	'BOT_NAME_TAKEN'	=> 'O nome j&aacute; est&aacute; em uso em seu f&oacute;rum e n&atilde;o pode ser usado por um Rob&ocirc;.',
	'BOT_NEVER'			=> 'Nunca',
	'BOT_STYLE'			=> 'Estilo para o rob&ocirc;',
	'BOT_STYLE_EXPLAIN'	=> 'O estilo utilizado pelo rob&ocirc; na comunidade.',
	'BOT_UPDATED'		=> 'Rob&ocirc; existente atualizado com sucesso.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'O agente rob&ocirc; que voc&ecirc; especificou &eacute; similar ao atual. Favor ajustar o agente para este rob&ocirc;.',
	'ERR_BOT_NO_IP'				=> 'O endere&ccedil;o IP que voc&ecirc; especificou est&aacute; inv&aacute;lido ou o servidor n&atilde;o est&aacute; dispon&iacute;vel.',
	'ERR_BOT_NO_MATCHES'		=> 'Voc&ecirc; deve entrar no m&iacute;nimo um agente ou IP para este rob&ocirc;.',

	'NO_BOT'		=> 'N&atilde;o encontrou nenhum rob&ocirc; com este ID.',
	'NO_BOT_GROUP'	=> 'N&atilde;o foi poss&iacute;vel encontrar o grupo especial de rob&ocirc;.',
));

?>
