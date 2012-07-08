<?php
/**
*
* acp_email [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.4
* @package language: Brazilian Portuguese
* @original version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-01-02 - 23:27
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
// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aqui voc&ecirc; pode enviar uma mensagem via e-mail para todos os seus usu&aacute;rios ou a todos os usu&aacute;rios de um grupo espec&iacute;fico, <strong>que tenham a op&ccedil;&atilde;o de receber e-mails de massa habilitada</strong>. Para fazer isto, um e-mail ser&aacute; enviado para o endere&ccedil;o de e-mail administrativo fornecido, com uma c&oacute;pia de todos os e-mails enviados a todos os usu&aacute;rios. A configura&ccedil;&atilde;o padr&atilde;o inclui apenas 50 usu&aacute;rios em um e-mail, para mais usu&aacute;rios, mais e-mails ser&atilde;o enviados. Se voc&ecirc; est&aacute; enviando um e-mail para um grande grupo de pessoas, por favor, espere ap&oacute;s o envio e n&atilde;o pare a p&aacute;gina durante o processo. &Eacute; normal que um envio de e-mail em massa leve um bom tempo, voc&ecirc; ser&aacute; avisado quando este processo for conclu&iacute;do.',
	'ALL_USERS'						=> 'Todos os usu&aacute;rios',

	'COMPOSE'				=> 'Criar E-mail',

	'EMAIL_SEND_ERROR'		=> 'Ocorreu um ou mais erros enquanto o e-mail estava sendo enviado. Por favor, veja o %sLog de erros%s para maiores detalhes da mensagem de erro.',
	'EMAIL_SENT'			=> 'Este e-mail foi enviado.',
	'EMAIL_SENT_QUEUE'		=> 'Este e-mail est&aacute; esperando para ser enviado.',

	'LOG_SESSION'			=> 'Sess&atilde;o de log de e-mail para erros cr&iacute;ticos',

	'SEND_IMMEDIATELY'		=> 'Enviar imediatamente',
	'SEND_TO_GROUP'			=> 'Enviar para o grupo',
	'SEND_TO_USERS'			=> 'Enviar para os usu&aacute;rios',
	'SEND_TO_USERS_EXPLAIN'	=> 'Ao adicionar nomes aqui, isto anular&aacute; qualquer grupo selecionado acima. Adicione cada nome em uma nova linha.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do e-mail',
	'MASS_MESSAGE'			=> 'Sua mensagem',
	'MASS_MESSAGE_EXPLAIN'	=> 'Por favor, note que voc&ecirc; deve adicionar somente texto. Todo c&oacute;digo ou caractere ser&aacute; removido antes do envio.',
	
	'NO_EMAIL_MESSAGE'		=> 'Voc&ecirc; deve escrever uma mensagem.',
	'NO_EMAIL_SUBJECT'		=> 'Voc&ecirc; deve especificar um assunto para o seu e-mail.',
));

?>
