<?php 
/** 
* 
* acp_common.php [Português]
* 
* @package language 
* @version $Id: email.php, v 1.0 Outubro/2009
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

// Bot settings 
$lang = array_merge($lang, array( 
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Aqui pode enviar um email a todos os seus Utilizadores ou a todos os Utilizadores de um determinado Grupo, <strong>se tiver a opção de receber emails activada</strong>. Para isso, uma mensagem será enviada ao endereço de email do administrador a informar, com uma cópia a todos membros. A configuração padrão apenas inclui 50 destinatários por mensagem, sendo que para mais destinatários mais emails serão enviados. Se está a enviar mensagens a um grande grupo de Utilizadores, por favor, seja paciente e não feche a página durante o envio. É normal que o envio em massa de mensagens leve algum tempo: Será avisado quando o processo terminar.',
	'ALL_USERS'					=> 'Todos os Utilizadores',

	'COMPOSE'					=> 'Compor',

	'EMAIL_SEND_ERROR'			=> 'Ocorreu um ou mais erros enquanto enviava o email. Por Favor, verifique %sLOG do Erro%s para obter informações mais detalhadas.',
	'EMAIL_SENT'				=> 'O seu email foi enviado com sucesso.',
	'EMAIL_SENT_QUEUE'			=> 'O seu email foi guardado na lista de envios pendentes.',

	'LOG_SESSION'				=> 'Faz o registo do LOG de envio',

	'SEND_IMMEDIATELY'			=> 'Enviar imediatamente',
	'SEND_TO_GROUP'				=> 'Enviar para Grupo',
	'SEND_TO_USERS'				=> 'Enviar para Utilizadores',
	'SEND_TO_USERS_EXPLAIN'		=> 'Escrevendo nomes aqui, sobrescreve qualquer grupo seleccionado acima. Escreva apenas um nome de Utilizador por linha.',

	'MAIL_HIGH_PRIORITY'		=> 'Alta',
	'MAIL_LOW_PRIORITY'			=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'		=> 'Normal',
	'MAIL_PRIORITY'				=> 'Prioridade do email',
	'MASS_MESSAGE'				=> 'A sua Mensagem',
	'MASS_MESSAGE_EXPLAIN'		=> 'A mensagem só pode conter texto puro. Todos os códigos serão removidos ao enviar.',

	'NO_EMAIL_MESSAGE'			=> 'Tem que introduzir uma mensagem.',
	'NO_EMAIL_SUBJECT'			=> 'A sua mensagem tem que ter um assunto.',
));

?>