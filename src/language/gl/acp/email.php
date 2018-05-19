<?php
/** 
*
* acp_email [Galician]
*
* @package language
* @version $Id: email.php 8479 2008-03-29 00:22:48Z naderman $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aquí poderás enviar unha mensaxe de correo-e a todos os teus usuarios ou aos dun grupo determinado <strong>tque teñan activada a opción para recibir correos-e masivos</strong>. Para isto, enviarase un correo-e dende o enderezo administrativo fornecido, con copia carbon oculta enviada a todos os destinatarios. A configuración predeterminada inclúe só 50 destinatarios en tal correo-e, se hai máis destinatarios serán enviados máis correos-e. Se estás a enviar mensaxes de correo-e a un grupo numeroso de xente, ten paciencia logo de envialo e non deteñas a páxina no medio do proceso. É normal que os envíos masivos de correos-e demoren moito tempo, e de todos os xeitos o script indicarache cando remate de facelo.',
	'ALL_USERS'						=> 'Todos os Usuarios',

	'COMPOSE'				=> 'Compoñer',

	'EMAIL_SEND_ERROR'		=> 'Houbo un ou máis erros ao tentar enviar o correo-e. Comproba o %sRexistro de Erros%s para ver as mensaxes de erros polo miúdo.',
	'EMAIL_SENT'			=> 'A túa mensaxe foi enviada.',
	'EMAIL_SENT_QUEUE'		=> 'A túa mensaxe foi posta na cola de envío.',

	'LOG_SESSION'			=> 'Rexistrar sesión de correo no rexistro (log) crítico',

	'SEND_IMMEDIATELY'		=> 'Enviar xa',
	'SEND_TO_GROUP'			=> 'Enviar ao grupo',
	'SEND_TO_USERS'			=> 'Enviar aos usuarios',
	'SEND_TO_USERS_EXPLAIN'	=> 'Inserindo nomes aquí pasarase por alto calquer grupo seleccionado enriba. Insire cada nome de usuario nunha nova liña.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do Correo',
	'MASS_MESSAGE'			=> 'A túa mensaxe',
	'MASS_MESSAGE_EXPLAIN'	=> 'Ten en conta que só podes usar texto plano. Calquer marcador será suprimido antes de enviar a mensaxe.',
	
	'NO_EMAIL_MESSAGE'		=> 'Debes escribir unha mensaxe.',
	'NO_EMAIL_SUBJECT'		=> 'Debes especificar un asunto para a túa mensaxe.',
));

?>