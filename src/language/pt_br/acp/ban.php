<?php
/**
*
* acp_ban [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
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
// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 hora',
	'30_MINS'		=> '30 minutos',
	'6_HOURS'		=> '6 horas',

	'ACP_BAN_EXPLAIN'	=> 'Aqui voc&ecirc; pode controlar o banimento de usu&aacute;rios por nome, por IP ou endere&ccedil;o de email. Estes m&eacute;todos previnem que um usu&aacute;rio entre em qualquer parte da comunidade. Voc&ecirc; pode fazer um pequeno texto (m&aacute;ximo de 3000 caracteres) com as raz&otilde;es pelo qual voc&ecirc; baniu. Isto ser&aacute; mostrado no log de admin. A dura&ccedil;&atilde;o de um banimento tamb&eacute;m pode ser especificado. Se voc&ecirc; quiser o termino de um banimento em uma data espec&iacute;fica ao inv&eacute;s de depois de um per&iacute;odo de tempo determinado, selecione <span style="text-decoration: underline;">At&eacute; -&gt;</span> para o tempo de banimento e entre com uma data dentro do formato <kbd>DD-MM-AAAA</kbd>.',

	'BAN_EXCLUDE'			=> 'Excluir do banimento',
	'BAN_LENGTH'			=> 'Per&iacute;odo de banimento',
	'BAN_REASON'			=> 'Raz&atilde;o para banir',
	'BAN_GIVE_REASON'		=> 'Raz&atilde;o de banimento que ser&aacute; mostrada ao usu&aacute;rio',
	'BAN_UPDATE_SUCCESSFUL'	=> 'A lista de banimento foi atualizada com sucesso.',

	'EMAIL_BAN'					=> 'Banir um ou mais endere&ccedil;os de e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Habilite esta op&ccedil;&atilde;o para excluir os endere&ccedil;os de email adicionados de todos os banidos atualmente.',
	'EMAIL_BAN_EXPLAIN'			=> 'Para especificar mais que um endere&ccedil;o de e-mail, adicione cada um em uma nova linha. Para busca de endere&ccedil;os parciais, use o * como chave substituta, ex: <samp>*@hotmail.com</samp>, <samp>*@*.dom&iacute;nio.extens&atilde;o</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Nenhum endere&ccedil;o de e-mail banido',
	'EMAIL_UNBAN'				=> 'Desbanir ou retirar a exclus&atilde;o de e-mails',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Voc&ecirc; pode desbanir (ou retirar a exclus&atilde;o) m&uacute;ltiplos endere&ccedil;os de email de uma s&oacute; vez usando uma combina&ccedil;&atilde;o de teclado e mouse apropriada do seu computador e de seu navegador. Os endere&ccedil;os de e-mail exclu&iacute;dos est&atilde;o destacados.',

	'IP_BAN'					=> 'Banir um ou mais IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Habilite esta op&ccedil;&atilde;o para excluir os IPs adicionados de todos os banidos atualmente.',
	'IP_BAN_EXPLAIN'			=> 'Para especificar v&aacute;rios IPs ou servidores diferentes, adicione cada um em uma nova linha. Para especificar uma s&eacute;rie de endere&ccedil;os de IP, separe o come&ccedil;o e o termino com um h&iacute;fen (-), para especificar uma chave substituta use “*”.',
	'IP_HOSTNAME'				=> 'Endere&ccedil;os de IP ou servidores',
	'IP_NO_BANNED'				=> 'Nenhum endere&ccedil;o de IP banido',
	'IP_UNBAN'					=> 'Desbanir ou retirar a exclus&atilde;o de IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Voc&ecirc; pode desbanir (ou retirar a exclus&atilde;o) m&uacute;ltiplos endere&ccedil;os de IP de uma s&oacute; vez usando uma combina&ccedil;&atilde;o de teclado e mouse apropriada do seu computador e de seu navegador. Os endere&ccedil;os de IPs exclu&iacute;dos est&atilde;o destacados.',

    'LENGTH_BAN_INVALID'		=> 'A data deve estar no formato <kbd>AAAA-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanente',
	
	'UNTIL'						=> 'At&eacute;',
	'USER_BAN'					=> 'Banir um ou mais usu&aacute;rios',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Habilite esta op&ccedil;&atilde;o para excluir os usu&aacute;rios adicionados de todos os banidos atualmente.',
	'USER_BAN_EXPLAIN'			=> 'Voc&ecirc; pode banir m&uacute;ltiplos usu&aacute;rios de uma vez, adicione cada nome em uma nova linha. Use o <span style="text-decoration: underline;">Procurar um Membro</span> para buscar e adicionar um ou mais nomes de usu&aacute;rios automaticamente.',
	'USER_NO_BANNED'			=> 'Nenhum nome de usu&aacute;rio banido',
	'USER_UNBAN'				=> 'Desbanir ou retirar a exclus&atilde;o de nomes de usu&aacute;rios',
	'USER_UNBAN_EXPLAIN'		=> 'Voc&ecirc; pode desbanir (ou retirar a exclus&atilde;o) m&uacute;ltiplos nomes de usu&aacute;rios de uma s&oacute; vez usando uma combina&ccedil;&atilde;o de teclado e mouse apropriada do seu computador e de seu navegador. Os usu&aacute;rios exclu&iacute;dos est&atilde;o destacados.',


));

?>
