<?php 
/** 
* 
* acp_common.php [Português]
* 
* @package language 
* @version $Id: ban.php, v 1.0 Outubro/2009
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
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains correct 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

// Banning 
$lang = array_merge($lang, array(
	'1_HOUR'					=> '1 Hora',
	'30_MINS'					=> '30 Minutos',
	'6_HOURS'					=> '6 Horas',

	'ACP_BAN_EXPLAIN'			=> 'Aqui pode fazer a Gestão dos Utilizadores expulsos por nome, endereço de IP, ou endereço de email. A expulsão impede o Utilizador de entrar no Fórum. Se desejar pode explicar o motivo da expulsão (3.000 caracteres). O motivo da expulsão será mostrado no log do Administrador. A duração da expulsão também pode ser especificada. Se quiser que a expulsão termine numa data específica depois de outra especificação de tempo seleccione <u><STRONG>Até -></STRONG></u> para a longevidade da expulsão e insira a data em ano-mês-dia.',

	'BAN_EXCLUDE'				=> 'Apagar Expulsão',
	'BAN_LENGTH'				=> 'Duração da Expulsão',
	'BAN_REASON'				=> 'Razão da Expulsão',
	'BAN_GIVE_REASON'			=> 'Descrição do motivo da expulsão',
	'BAN_UPDATE_SUCCESSFUL'		=> 'A Lista de Expulsões foi actualizada com sucesso.',

	'BANNED_UNTIL_DATE'			=> 'até %s', // Exemplo: "até Seg 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'		=> '%1$s (até %2$s)', // Exemplo: "7 dias (até Ter 14.Jul.2009, 14:44)"
	
	'EMAIL_BAN'					=> 'Expulsar um ou mais endereços de email',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Active esta opção para excluir emails da expulsão.',
	'EMAIL_BAN_EXPLAIN'			=> 'Quando utilizar mais do que um endereço de email, separe-os por linha. Para seleccionar endereços de email parciais, utilize asteriscos (*), como por exemplo, <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Não há emails expulsos',
	'EMAIL_UNBAN'				=> 'Desbloquear um ou mais endereços de email',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Pode desbloquear múltiplos emails de uma só vez, usando a combinação apropriada do rato e teclado do seu computador. Emails excluídos têm uma marcação no fundo.',

	'IP_BAN'					=> 'Expulsar um ou mais IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Active esta opção para excluir IPs da expulsão.',
	'IP_BAN_EXPLAIN'			=> 'Para especificar diferentes IPs ou hostnames digite cada um numa nova linha. Para especificar uma range de endereços de IP separe o inicio e o fim com um hifen (-), para especificar uma wildcard use asterisco *.',
	'IP_HOSTNAME'				=> 'Endereços IP ou hostnames',
	'IP_NO_BANNED'				=> 'Não há endereços de IP expulsos',
	'IP_UNBAN'					=> 'Desbloquear um ou mais endereços de IP',
	'IP_UNBAN_EXPLAIN'			=> 'Pode desbloquear (ou retirar a expulsão) múltiplos IPs apenas de uma só vez usando a combinação apropriada do rato e teclado do seu computador. IPs excluídos têm uma marcação no fundo.',

	'LENGTH_BAN_INVALID'		=> 'O formato da data deve ser <kbd>DD-MM-YYYY</kbd>.',

	'PERMANENT'					=> 'Permanente',

	'UNTIL'						=> 'Até',
	'USER_BAN'					=> 'Expulsar um ou mais utilizadores',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Active esta opção para excluir Utilizadores da expulsão.',
	'USER_BAN_EXPLAIN'			=> 'Pode expulsar múltiplos Utilizadores de uma só vez, escrevendo um nome por linha. <br />Use <b>Procurar Utilizador</b> para adicionar automaticamente um ou mais Utilizadores.',
	'USER_NO_BANNED'			=> 'Não há utilizadores expulsos',
	'USER_UNBAN'				=> 'Desbloquear ou retirar expulsão a utilizadores',
	'USER_UNBAN_EXPLAIN'		=> 'Pode desbloquear (ou retirar a expulsão) múltiplos IPs apenas de uma só vez usando a combinação apropriada do rato e teclado do seu computador. IPs expulsos têm uma marcação no fundo.',
));

?>