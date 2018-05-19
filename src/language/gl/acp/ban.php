<?php
/** 
*
* acp_ban [Galician]
*
* @package language
* @version $Id: ban.php 9727 2009-07-07 13:33:53Z nickvergessen $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 hora',
	'30_MINS'		=> '30 Minutos',
	'6_HOURS'		=> '6 Horas',

	'ACP_BAN_EXPLAIN'	=> 'Aquí podes controlar a exclusión de usuarios polo  seu nome, IP ou enderezo de correo-e. Estes métodos evitan o acceso do usuario a calquer parte dos foros. Se o desexas podes dar unha breve explicación (255 caracteres) da exclusión, que se amosará no rexistro (log) de administración. Tamén podes especificar a duración das exclusións. Se queres manter unha exclusión ata unha data concreta no canto dun período de tempo determinado, selecciona <u>Ata</u> para a duración e insire a data en formato aaaa-mm-dd.',

	'BAN_EXCLUDE'			=> 'Excluir das prohibicións',
	'BAN_LENGTH'			=> 'Duración da exclusión',
	'BAN_REASON'			=> 'Motivo da exclusión',
	'BAN_GIVE_REASON'		=> 'Motivo amosado ao excluído',
	'BAN_UPDATE_SUCCESSFUL'	=> 'A lista de prohibicións foi actualizada correctamente.',
	'BANNED_UNTIL_DATE'		=> 'até %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (até %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Prohibir un ou máis enderezos de correo-e',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Activa isto para excluir o enderezo de correo-e inserido de todas as prohibicións actuais.',
	'EMAIL_BAN_EXPLAIN'			=> 'Para indicar máis dun enderezo de correo-e insire cada un nunha liña. Para indicar enderezos parciais emprega * como comodín, por exemplo *@hotmail.com, *@*.dominio.gz, etc.',
	'EMAIL_NO_BANNED'			=> 'Non hai enderezos de correo-e prohibidos',
	'EMAIL_UNBAN'				=> 'Eliminar Exclusión ou Prohibición de Correos-e',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Podes eliminar unha exclusión ou unha prohibición para varios enderezos de correo-e dunha vez usando a combinación de rato e teclado axeitada ao teu ordenador e navegador. Os enderezos de correo-e excluídos teñen o fondo resaltado.',

	'IP_BAN'					=> 'Prohibir un ou máis IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Activa isto para excluir o IP inserido de todas as prohibicións actuais.',
	'IP_BAN_EXPLAIN'			=> 'Para indicar varios enderezos IP ou nomes de host distintos, insire cada un nunha liña diferente. Para indicar un rango de enderezos IP, separa o comezo do final cun trazo (-), e para indicar un comodín, emprega *',
	'IP_HOSTNAME'				=> 'Enderezos IP ou nomes de host',
	'IP_NO_BANNED'				=> 'Non hai enderezos IP prohibidos',
	'IP_UNBAN'					=> 'Eliminar Exclusión ou Prohibición de IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Podes eliminar unha exclusión ou unha prohibición para varios enderezos de IP dunha vez usando a combinación de rato e teclado axeitada ao teu ordenador e navegador. Os IPs excluídos teñen o fondo resaltado.',

	'LENGTH_BAN_INVALID'		=> 'A data debe ser formatada <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanente',
	
	'UNTIL'						=> 'Até',
	'USER_BAN'					=> 'Prohibir un ou máis nomes de usuario',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Activa isto para excluir os usuarios inseridos de todas as prohibicións actuais.',
	'USER_BAN_EXPLAIN'			=> 'Podes prohibir varios usuarios dunha vez inserindo cada nome nunha nova liña. O uso da opción <u>Procurar un membro</u> facilita a busca e inclusión dun ou de varios usuarios automaticamente.',
	'USER_NO_BANNED'			=> 'Non hai nomes de usuario prohibidos',
	'USER_UNBAN'				=> 'Eliminar prohibición ou exclusión de nomes de usuario',
	'USER_UNBAN_EXPLAIN'		=> 'Podes eliminar unha exclusión ou unha prohibición para varios usuarios dunha vez usando a combinación de rato e teclado axeitada ao teu ordenador e navegador. Os usuarios excluídos teñen o fondo resaltado.',
));

?>