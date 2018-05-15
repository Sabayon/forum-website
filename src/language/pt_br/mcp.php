<?php
/**
*
* mcp [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: mcp.php,v 1.83 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-17 - 15:06
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
	'ACTION'				=> 'A&ccedil;&atilde;o',
	'ACTION_NOTE'			=> 'A&ccedil;&atilde;o/Notar',
	'ADD_FEEDBACK'			=> 'Adicionar coment&aacute;rio',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Se voc&ecirc; quiser adicionar um relat&oacute;rio aqui, por favor, preencha o seguinte formul&aacute;rio. Use somente texto; HTML, BBCode, etc. n&atilde;o s&atilde;o permitidos.',
	'ADD_WARNING'			=> 'Adicionar uma advert&ecirc;ncia',
	'ADD_WARNING_EXPLAIN'	=> 'Para enviar uma advert&ecirc;ncia a este usu&aacute;rio, por favor, preencha o seguinte formul&aacute;rio. Use somente texto; HTML, BBCode, etc. n&atilde;o s&atilde;o permitidos.',
	'ALL_ENTRIES'			=> 'Todas as entradas',
	'ALL_NOTES_DELETED'		=> 'Todas as notas de usu&aacute;rio foram removidas com sucesso',
	'ALL_REPORTS'			=> 'Todas as notifica&ccedil;&otilde;es',
	'ALREADY_REPORTED'		=> 'Esta mensagem j&aacute; foi notificada',
	'ALREADY_WARNED'		=> 'Uma advert&ecirc;ncia j&aacute; foi emitida para esta mensagem',
	'APPROVE'				=> 'Aprovar',
	'APPROVE_POST'			=> 'Aprovar mensagem',
	'APPROVE_POST_CONFIRM'	=> 'Voc&ecirc; quer realmente aprovar esta mensagem?',
	'APPROVE_POSTS'			=> 'Aprovar mensagens',
	'APPROVE_POSTS_CONFIRM'	=> 'Voc&ecirc; quer realmente aprovar as mensagens selecionadas?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Voc&ecirc; n&atilde;o pode mover um t&oacute;pico ao f&oacute;rum no qual ele j&aacute; est&aacute;.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Voc&ecirc; n&atilde;o pode advertir usu&aacute;rios visitantes n&atilde;o registrados',
	'CANNOT_WARN_SELF'		=> 'Voc&ecirc; n&atilde;o pode se advertir',
	'CAN_LEAVE_BLANK'		=> 'Este espa&ccedil;o &agrave; esquerda pode ser em branco.',
	'CHANGE_POSTER'			=> 'Mudar autor da mensagem',
	'CLOSE_REPORT'			=> 'Fechar notifica&ccedil;&atilde;o',
	'CLOSE_REPORT_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer fechar a notifica&ccedil;&atilde;o selecionada?',
	'CLOSE_REPORTS'			=> 'Fechar notifica&ccedil;&otilde;es',
	'CLOSE_REPORTS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer fechar as notifica&ccedil;&otilde;es selecionadas?',

	'DELETE_POSTS'				=> 'Apagar mensagens',
	'DELETE_POSTS_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer apagar estes mensagens?',
	'DELETE_POST_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer apagar esta mensagem?',
	'DELETE_REPORT'				=> 'Apagar notifica&ccedil;&atilde;o',
	'DELETE_REPORT_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer apagar a notifica&ccedil;&atilde;o selecionada?',
	'DELETE_REPORTS'			=> 'Apagar notifica&ccedil;&otilde;es',
	'DELETE_REPORTS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer apagar as notifica&ccedil;&otilde;es selecionadas?',
	'DELETE_SHADOW_TOPIC'		=> 'Apagar t&oacute;pico fantasma',
	'DELETE_TOPICS'				=> 'Apagar t&oacute;picos selecionados',
	'DELETE_TOPICS_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer apagar estes t&oacute;picos?',
	'DELETE_TOPIC_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer apagar este t&oacute;pico?',
	'DISAPPROVE'				=> 'Desaprovar',
	'DISAPPROVE_REASON'			=> 'Raz&atilde;o para desaprova&ccedil;&atilde;o',
	'DISAPPROVE_POST'			=> 'Desaprovar mensagem',
	'DISAPPROVE_POST_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer desaprovar esta mensagem?',
	'DISAPPROVE_POSTS'			=> 'Desaprovar mensagens',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer desaprovar as mensagens selecionadas?',
	'DISPLAY_LOG'				=> 'Exibir entradas anteriores a',
	'DISPLAY_OPTIONS'			=> 'Exibir op&ccedil;&otilde;es',

	'EMPTY_REPORT'					=> 'Voc&ecirc; tem que entrar com uma descri&ccedil;&atilde;o ao selecionar esta raz&atilde;o',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Por favor, note que um ou v&aacute;rios t&oacute;picos foram apagados do banco de dados porque eles eram ou estavam vazios',

	'FEEDBACK'				=> 'Avalia&ccedil;&atilde;o',
	'FORK'					=> 'Copiar',
	'FORK_TOPIC'			=> 'Copiar t&oacute;pico',
	'FORK_TOPIC_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer copiar este t&oacute;pico?',
	'FORK_TOPICS'			=> 'Copiar t&oacute;picos selecionados',
	'FORK_TOPICS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer copiar os t&oacute;picos selecionados?',
	'FORUM_DESC'			=> 'Descri&ccedil;&atilde;o',
	'FORUM_NAME'			=> 'Nome do f&oacute;rum',
	'FORUM_NOT_EXIST'		=> 'O f&oacute;rum que voc&ecirc; selecionou n&atilde;o existe',
	'FORUM_NOT_POSTABLE'	=> 'O f&oacute;rum que voc&ecirc; selecionou n&atilde;o aceita mensagens',
	'FORUM_STATUS'			=> 'Estado do f&oacute;rum',
	'FORUM_STYLE'			=> 'Estilo de f&oacute;rum',

	'GLOBAL_ANNOUNCEMENT'	=> 'An&uacute;ncio global',

	'IP_INFO'				=> 'Informa&ccedil;&atilde;o de endere&ccedil;os de IP',
	'IPS_POSTED_FROM'		=> 'Endere&ccedil;os de IP que este usu&aacute;rio postou de',

	'LATEST_LOGS'				=> '&Uacute;ltimas 5 a&ccedil;&otilde;es anotadas',
	'LATEST_REPORTED'			=> '&Uacute;ltimas 5 notifica&ccedil;&otilde;es',
	'LATEST_UNAPPROVED'			=> '&Uacute;ltimas 5 mensagens que esperam por aprova&ccedil;&atilde;o',
	'LATEST_WARNING_TIME'		=> '&Uacute;ltima advert&ecirc;ncia emitida',
	'LATEST_WARNINGS'			=> '&Uacute;ltimas 5 advert&ecirc;ncias',
	'LEAVE_SHADOW'				=> 'Deixar t&oacute;pico fantasma no lugar',
	'LIST_REPORT'				=> '1 notifica&ccedil;&atilde;o',
	'LIST_REPORTS'				=> '%d notifica&ccedil;&otilde;es',//Not change the '%d'
	'LOCK'						=> 'Trancar',
	'LOCK_POST_POST'			=> 'Trancar mensagem',
	'LOCK_POST_POST_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer editar prevendo esta mensagem?',
	'LOCK_POST_POSTS'			=> 'Trancar mensagens selecionados',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer editar prevendo as mensagens selecionadas?',
	'LOCK_TOPIC_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer trancar este t&oacute;pico?',
	'LOCK_TOPICS'				=> 'Trancar t&oacute;picos selecionados',
	'LOCK_TOPICS_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer trancar todos os t&oacute;picos selecionados?',
	'LOGS_CURRENT_TOPIC'		=> 'Vendo atualmente registros de:',
	'LOGIN_EXPLAIN_MCP'			=> 'Para moderar este f&oacute;rum voc&ecirc; deve estar logado.',
	'LOGVIEW_VIEWTOPIC'			=> 'Ver t&oacute;pico',
	'LOGVIEW_VIEWLOGS'			=> 'Ver registros do t&oacute;pico',
	'LOGVIEW_VIEWFORUM'			=> 'Ver f&oacute;rum',
	'LOOKUP_ALL'				=> 'Observar todos os IPs',
	'LOOKUP_IP'					=> 'Observar IP',

	'MARKED_NOTES_DELETED'		=> 'Todas as anota&ccedil;&otilde;es de usu&aacute;rio marcadas foram removidas com sucesso',

	'MCP_ADD'						=> 'Adicionar uma advert&ecirc;ncia',

	'MCP_BAN'					=> 'Banindo',
	'MCP_BAN_EMAILS'			=> 'Banir e-mails',
	'MCP_BAN_IPS'				=> 'Banir IPs',
	'MCP_BAN_USERNAMES'			=> 'Banir Usu&aacute;rios',

	'MCP_LOGS'						=> 'Registros do moderador',
	'MCP_LOGS_FRONT'				=> 'Primeira p&aacute;gina',
	'MCP_LOGS_FORUM_VIEW'			=> 'Registros de f&oacute;rum',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Registros de t&oacute;pico',

	'MCP_MAIN'						=> 'Principal ',
	'MCP_MAIN_FORUM_VIEW'			=> 'Ver f&oacute;rum',
	'MCP_MAIN_FRONT'				=> 'Primeira p&aacute;gina',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalhes da mensagem',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Ver t&oacute;pico',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modificar para “An&uacute;ncio”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar este t&oacute;pico em um “An&uacute;ncio”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modificar para “An&uacute;ncios”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar os t&oacute;picos selecionados em “An&uacute;ncios”?',
	'MCP_MAKE_GLOBAL'				=> 'Modificar para “An&uacute;ncio Global”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar este t&oacute;pico em um “An&uacute;ncio Global”?',
	'MCP_MAKE_GLOBALS'				=> 'Modificar para “An&uacute;ncios globais”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar os t&oacute;picos selecionados em “An&uacute;ncios globais”?',
	'MCP_MAKE_STICKY'				=> 'Modificar para “Fixo”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar este t&oacute;pico para um t&oacute;pico “Fixo”?',
	'MCP_MAKE_STICKIES'				=> 'Modificar para “Fixos”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar os t&oacute;picos selecionados em t&oacute;picos “Fixos”?',
	'MCP_MAKE_NORMAL'				=> 'Modificar para “T&oacute;pico Normal”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar este t&oacute;pico em um “T&oacute;pico Normal”?',
	'MCP_MAKE_NORMALS'				=> 'Modificar para “T&oacute;picos Normais”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mudar os t&oacute;picos selecionados em “T&oacute;picos Normais”?',

	'MCP_NOTES'						=> 'Notas de usu&aacute;rio',
	'MCP_NOTES_FRONT'				=> 'Primeira p&aacute;gina',
	'MCP_NOTES_USER'				=> 'Detalhes do usu&aacute;rio',

	'MCP_POST_REPORTS'				=> 'Notifica&ccedil;&otilde;es emitidas nesta mensagem',

	'MCP_REPORTS'					=> 'Mensagens notificadas',
	'MCP_REPORT_DETAILS'			=> 'Detalhes da notifica&ccedil;&atilde;o',
	'MCP_REPORTS_CLOSED'			=> 'Notifica&ccedil;&otilde;es fechadas',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Esta &eacute; uma lista de todas as notifica&ccedil;&otilde;es sobre mensagens que foram previamente resolvidas.',
	'MCP_REPORTS_OPEN'				=> 'Notifica&ccedil;&otilde;es abertas',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Esta &eacute; uma lista de todas as mensagens notificadas que ainda ser&atilde;o controladas.',

	'MCP_QUEUE'								=> 'Espera de modera&ccedil;&atilde;o',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Aprovar detalhes',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Mensagens esperando aprova&ccedil;&atilde;o',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Esta &eacute; uma lista de todas as mensagens que requerem aprova&ccedil;&atilde;o antes deles serem vis&iacute;veis aos usu&aacute;rios',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'T&oacute;picos esperando aprova&ccedil;&atilde;o',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Esta &eacute; uma lista de todos os t&oacute;picos que requerem aprova&ccedil;&atilde;o antes deles serem vis&iacute;veis aos usu&aacute;rios',

	'MCP_VIEW_USER'			=> 'Ver advert&ecirc;ncias de um usu&aacute;rio espec&iacute;fico',

	'MCP_WARN'				=> 'Advert&ecirc;ncias',
	'MCP_WARN_FRONT'		=> 'Primeira p&aacute;gina',
	'MCP_WARN_LIST'			=> 'Lista de advert&ecirc;ncias',
	'MCP_WARN_POST'			=> 'Advertir uma mensagem espec&iacute;fica',
	'MCP_WARN_USER'			=> 'Advertir usu&aacute;rio',

	'MERGE_POSTS'			=> 'Unir mensagens',
	'MERGE_POSTS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer unir as mensagens selecionadas?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Usando a formul&aacute;rio abaixo, voc&ecirc; pode unir mensagens selecionados em outro t&oacute;pico. Estas mensagens n&atilde;o ser&atilde;o reordenadas e aparecer&atilde;o como se os usu&aacute;rios os postaram no novo t&oacute;pico.<br / > Por favor, entre no id do t&oacute;pico de destino ou clique no bot&atilde;o “Selecionar” para procurar um.',
	'MERGE_TOPIC_ID'		=> 'N&uacute;mero de identifica&ccedil;&atilde;o do destino do t&oacute;pico',
	'MERGE_TOPICS'			=> 'Unir t&oacute;picos',
	'MERGE_TOPICS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer unir os t&oacute;picos selecionados?',
	'MODERATE_FORUM'		=> 'Moderar f&oacute;rum',
	'MODERATE_TOPIC'		=> 'Moderar t&oacute;pico',
	'MODERATE_POST'			=> 'Moderar mensagem',
	'MOD_OPTIONS'			=> 'Op&ccedil;&otilde;es do moderador',
	'MORE_INFO'				=> 'Informa&ccedil;&otilde;es adicionais',
	'MOST_WARNINGS'			=> 'Usu&aacute;rios com mais advert&ecirc;ncias',
	'MOVE_TOPIC_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mover o t&oacute;pico para um novo f&oacute;rum?',
	'MOVE_TOPICS'			=> 'Mover t&oacute;picos selecionados',
	'MOVE_TOPICS_CONFIRM'	=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer mover os t&oacute;picos selecionados para um novo f&oacute;rum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notificar o usu&aacute;rio sobre a aprova&ccedil;&atilde;o da mensagem?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notificar o usu&aacute;rio sobre a desaprova&ccedil;&atilde;o da mensagem?',
	'NOTIFY_USER_WARN'				=> 'Notificar o usu&aacute;rio sobre a advert&ecirc;ncia?',
	'NOT_MODERATOR'					=> 'Voc&ecirc; n&atilde;o &eacute; moderador deste f&oacute;rum.',
	'NO_DESTINATION_FORUM'			=> 'Por favor, selecione um f&oacute;rum para destino.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'N&atilde;o h&aacute; nenhum f&oacute;rum de destino dispon&iacute;vel.',
	'NO_ENTRIES'					=> 'Nenhum registro neste per&iacute;odo.',
	'NO_FEEDBACK'					=> 'Nenhuma avalia&ccedil;&atilde;o existente para este usu&aacute;rio.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Voc&ecirc; tem que selecionar um t&oacute;pico de destino por unir as mensagens.',
	'NO_MATCHES_FOUND'				=> 'Nenhuma partida encontrada.',
	'NO_POST'						=> 'Voc&ecirc; tem que selecionar uma  mensagem para advertir o usu&aacute;rio por uma mensagem.',
	'NO_POST_REPORT'				=> 'Esta mensagem n&atilde;o foi notificada.',
	'NO_POST_SELECTED'				=> 'Voc&ecirc; tem que selecionar uma mensagem pelo menos para executar esta a&ccedil;&atilde;o.',
	'NO_REASON_DISAPPROVAL'			=> 'Por favor, d&ecirc; uma raz&atilde;o apropriada para a desaprova&ccedil;&atilde;o.',
	'NO_REPORT'						=> 'Nenhuma notifica&ccedil;&atilde;o encontrada',
	'NO_REPORTS'					=> 'N&atilde;o foram encontradas notifica&ccedil;&otilde;es',
	'NO_REPORT_SELECTED'			=> 'Voc&ecirc; deve selecionar pelo menos uma notifica&ccedil;&atilde;o para continuar com esta a&ccedil;&atilde;o.',
	'NO_TOPIC_ICON'					=> 'Nenhum',
	'NO_TOPIC_SELECTED'				=> 'Voc&ecirc; tem que selecionar um t&oacute;pico pelo menos para executar esta a&ccedil;&atilde;o.',
	'NO_TOPICS_QUEUE'				=> 'N&atilde;o h&aacute; t&oacute;picos esperando por aprova&ccedil;&atilde;o.',

	'ONLY_TOPIC'			=> 'Somente t&oacute;pico “%s”',
	'OTHER_USERS'			=> 'Outros usu&aacute;rios que enviaram mensagens deste IP',

	'POSTER'					=> 'Usu&aacute;rio postador',
	'POSTS_APPROVED_SUCCESS'	=> 'As mensagens selecionadas foram aprovadas.',
	'POSTS_DELETED_SUCCESS'		=> 'As mensagens selecionadas foram removidas com sucesso do banco de dados.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'As mensagens selecionadas foram desaprovadas.',
	'POSTS_LOCKED_SUCCESS'		=> 'As mensagens selecionadas foram trancadas com sucesso.',
	'POSTS_MERGED_SUCCESS'		=> 'As mensagens selecionadas foram unidas.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'As mensagens selecionados foram destrancados com sucesso.',
	'POSTS_PER_PAGE'			=> 'Mensagens por p&aacute;gina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Selecione 0 para ver todas as mensagens.)',
	'POST_APPROVED_SUCCESS'		=> 'A mensagem selecionada foi aprovada.',
	'POST_DELETED_SUCCESS'		=> 'A mensagem selecionada foi removida com sucesso do banco de dados.',
	'POST_DISAPPROVED_SUCCESS'	=> 'A mensagem selecionada foi desaprovada.',
	'POST_LOCKED_SUCCESS'		=> 'Mensagem trancada com sucesso.',
	'POST_NOT_EXIST'			=> 'A mensagem que voc&ecirc; pediu n&atilde;o existe.',
	'POST_REPORTED_SUCCESS'		=> 'Esta mensagem foi notificada com sucesso.',
	'POST_UNLOCKED_SUCCESS'		=> 'Mensagem destrancada com sucesso.',

	'READ_USERNOTES'			=> 'Anota&ccedil;&otilde;es de usu&aacute;rio',
	'READ_WARNINGS'				=> 'Advert&ecirc;ncias de usu&aacute;rio',
	'REPORTER'					=> 'Notificador',
	'REPORTED'					=> 'Notificado',
	'REPORTED_BY'				=> 'Notificado por',
	'REPORTED_ON_DATE'			=> 'em',
	'REPORTS_CLOSED_SUCCESS'	=> 'As notifica&ccedil;&otilde;es selecionadas foram fechadas com sucesso.',
	'REPORTS_DELETED_SUCCESS'	=> 'As notifica&ccedil;&otilde;es selecionadas foram apagadas com sucesso.',
	'REPORTS_TOTAL'				=> 'No total, h&aacute; <strong>%d</strong> notifica&ccedil;&otilde;es para revisar.',
	'REPORTS_ZERO_TOTAL'		=> 'N&atilde;o h&aacute; nenhuma notifica&ccedil;&atilde;o para revisar.',
	'REPORT_CLOSED'				=> 'Esta notifica&ccedil;&atilde;o foi previamente fechada.',
	'REPORT_CLOSED_SUCCESS'		=> 'A notifica&ccedil;&atilde;o selecionada foi fechada com sucesso.',
	'REPORT_DELETED_SUCCESS'	=> 'A notifica&ccedil;&atilde;o selecionada foi apagada com sucesso.',
	'REPORT_DETAILS'			=> 'Detalhes da notifica&ccedil;&atilde;o',
	'REPORT_MESSAGE'			=> 'Notificar esta mensagem',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use este formul&aacute;rio para notificar uma mensagem selecionada aos administradores do f&oacute;rum. A notifica&ccedil;&atilde;o geralmente deve ser usada somente se a mensagem quebrar as regras de f&oacute;rum.',
	'REPORT_NOTIFY'				=> 'Notificar mensagem',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informa quando sua notifica&ccedil;&atilde;o for resolvida',
	'REPORT_POST_EXPLAIN'		=> 'Use este formul&aacute;rio para notificar a mensagem selecionada aos moderadores e administradores do f&oacute;rum. A notifica&ccedil;&atilde;o geralmente deve ser usada somente se a mensagem quebrar as regras de f&oacute;rum.',
	'REPORT_REASON'				=> 'Raz&atilde;o da notifica&ccedil;&atilde;o',
	'REPORT_TIME'				=> 'Hora da notifica&ccedil;&atilde;o',
	'REPORT_TOTAL'				=> 'No total h&aacute; <strong>1</strong> notifica&ccedil;&atilde;o para revisar',
	'RESYNC'					=> 'Resincronizar',
	'RETURN_MESSAGE'			=> '%sVoltar para a mensagem%s',
	'RETURN_NEW_FORUM'			=> '%sVoltar para o f&oacute;rum%s',
	'RETURN_NEW_TOPIC'			=> '%sVoltar para o novo t&oacute;pico%s',
	'RETURN_POST'				=> '%sVoltar para o poste%s',
	'RETURN_QUEUE'				=> '%sVoltar para a espera%s',
	'RETURN_REPORTS'			=> '%sVoltar para as notifica&ccedil;&otilde;es%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sVoltar para o t&oacute;pico%s',

	'SEARCH_POSTS_BY_USER'				=> 'Busca de mensagens por',
	'SELECT_ACTION'						=> 'Selecionar a&ccedil;&atilde;o desejada',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Por favor, selecione o f&oacute;rum que voc&ecirc; deseja exibir este an&uacute;ncio global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Um ou mais dos t&oacute;picos selecionados s&atilde;o an&uacute;ncios globais. Por favor, selecione o f&oacute;rum que ao qual voc&ecirc; deseja exib&iacute;-los.',
	'SELECT_MERGE'						=> 'Selecione para unir',
	'SELECT_TOPICS_FROM'				=> 'Selecionar t&oacute;picos de',
	'SELECT_TOPIC'						=> 'Selecionar t&oacute;pico',
	'SELECT_USER'						=> 'Selecionar usu&aacute;rio',
	'SORT_ACTION'						=> 'Registro de a&ccedil;&otilde;es',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Endere&ccedil;o de IP',
	'SORT_WARNINGS'						=> 'Advert&ecirc;ncias',
	'SPLIT_AFTER'						=> 'Dividir o t&oacute;pico a partir de uma mensagem selecionada',
	'SPLIT_FORUM'						=> 'F&oacute;rum para novo t&oacute;pico',
	'SPLIT_POSTS'						=> 'Dividir mensagens selecionadas',
	'SPLIT_SUBJECT'						=> 'T&iacute;tulo do novo t&oacute;pico',
	'SPLIT_TOPIC_ALL'					=> 'Dividir t&oacute;pico de mensagens selecionadas',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer dividir este t&oacute;pico?',
	'SPLIT_TOPIC_BEYOND'				=> 'Dividir t&oacute;pico a partir da mensagem selecionada',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer dividir este t&oacute;pico a partir da mensagem selecionada?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Usando o formul&aacute;rio abaixo, voc&ecirc; podem dividir um t&oacute;pico em dois, ou selecionando as mensagens individualmente ou dividindo a partir de uma  mensagem selecionada',

	'THIS_POST_IP'				=> 'IP para esta mensagem',
	'TOPICS_APPROVED_SUCCESS'	=> 'Os t&oacute;picos selecionados foram aprovados',
	'TOPICS_DELETED_SUCCESS'	=> 'Os t&oacute;picos selecionados foram removidos com sucesso do banco de dados',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Os t&oacute;picos selecionados foram desaprovados',
	'TOPICS_FORKED_SUCCESS'		=> 'Os t&oacute;picos selecionados foram copiados com sucesso',
	'TOPICS_LOCKED_SUCCESS'		=> 'Os t&oacute;picos selecionados foram trancados',
	'TOPICS_MOVED_SUCCESS'		=> 'Os t&oacute;picos selecionados foram movidos com sucesso',
	'TOPICS_RESYNC_SUCCESS'		=> 'Os t&oacute;picos selecionados foram resincronizados',
	'TOPICS_TYPE_CHANGED'		=> 'Tipos de t&oacute;pico alterados com sucesso.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Os t&oacute;picos selecionados foram destrancados',
	'TOPIC_APPROVED_SUCCESS'	=> 'O t&oacute;pico selecionado foi aprovado',
	'TOPIC_DELETED_SUCCESS'		=> 'O t&oacute;pico selecionado foi removido com sucesso do banco de dados',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'O t&oacute;pico selecionado foi desaprovado',
	'TOPIC_FORKED_SUCCESS'		=> 'O t&oacute;pico selecionado foi copiado com sucesso',
	'TOPIC_LOCKED_SUCCESS'		=> 'O t&oacute;pico selecionado foi trancado',
	'TOPIC_MOVED_SUCCESS'		=> 'O t&oacute;pico selecionado foi movido com sucesso',
	'TOPIC_NOT_EXIST'			=> 'O t&oacute;pico que voc&ecirc; selecionou n&atilde;o existe',
	'TOPIC_RESYNC_SUCCESS'		=> 'O t&oacute;pico selecionado foi resincronizado',
	'TOPIC_SPLIT_SUCCESS'		=> 'O t&oacute;pico selecionado foi dividido com sucesso',
	'TOPIC_TIME'				=> 'Hora do t&oacute;pico',
	'TOPIC_TYPE_CHANGED'		=> 'Tipo de t&oacute;pico alterado com sucesso.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'O t&oacute;pico selecionado foi destrancado',
	'TOTAL_WARNINGS'			=> 'Total de Advert&ecirc;ncias',

	'UNAPPROVED_POSTS_TOTAL'		=> 'No total h&aacute; <strong>%d</strong> mensagens esperando por aprova&ccedil;&atilde;o',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'N&atilde;o h&aacute; nenhuma mensagem esperando por aprova&ccedil;&atilde;o',
	'UNAPPROVED_POST_TOTAL'			=> 'No total h&aacute; <strong>1</strong> mensagem esperando por aprova&ccedil;&atilde;o',
	'UNLOCK'						=> 'Destrancar',
	'UNLOCK_POST'					=> 'Destrancar mensagem',
	'UNLOCK_POST_EXPLAIN'			=> 'Permitir editar',
	'UNLOCK_POST_POST'				=> 'Destrancar mensagem',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer permitir a edi&ccedil;&atilde;o desta mensagem?',
	'UNLOCK_POST_POSTS'				=> 'Destrancar mensagens selecionados',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer permitir a edi&ccedil;&atilde;o das mensagens selecionadas?',
	'UNLOCK_TOPIC'					=> 'Destrancar t&oacute;pico',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer destrancar este t&oacute;pico?',
	'UNLOCK_TOPICS'					=> 'Destrancar t&oacute;picos selecionados',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Voc&ecirc; est&aacute; certo que voc&ecirc; quer destrancar todos os t&oacute;picos selecionados?',
	'USER_CANNOT_POST'				=> 'Voc&ecirc; n&atilde;o pode postar neste f&oacute;rum',
	'USER_CANNOT_REPORT'			=> 'Voc&ecirc; n&atilde;o pode notificar mensagens neste f&oacute;rum',
	'USER_FEEDBACK_ADDED'			=> 'Avalia&ccedil;&atilde;o de usu&aacute;rio adicionada com sucesso.',
	'USER_WARNING_ADDED'			=> 'Usu&aacute;rio advertido com sucesso.',

	'VIEW_DETAILS'			=> 'Ver detalhes',
	'VIEW_POST'				=> 'Ver mensagem',

	'WARNED_USERS'			=> 'Usu&aacute;rios advertidos',
	'WARNED_USERS_EXPLAIN'	=> 'Esta &eacute; uma lista de usu&aacute;rios com advert&ecirc;ncias vigentes emitidas a eles.',
	'WARNING_PM_BODY'		=> 'A seguinte mensagem &eacute; uma advert&ecirc;ncia que foi emitida a voc&ecirc; por um administrador ou moderador deste f&oacute;rum.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Advert&ecirc;ncia do f&oacute;rum emitida',
	'WARNING_POST_DEFAULT'	=> 'Esta &eacute; uma advert&ecirc;ncia relativa &agrave; seguinte mensagem feita por voc&ecirc;: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Nenhuma advert&ecirc;ncia existente.',

	'YOU_SELECTED_TOPIC'	=> 'Voc&ecirc; selecionou o n&uacute;mero do t&oacute;pico %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-t&oacute;pico',
			'OTHER'		=> 'Outro'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'A mensagem cont&eacute;m links para software ilegal ou pirata.',
			'SPAM'		=> 'A mensagem notificada tem o &uacute;nico prop&oacute;sito de anunciar um website ou outro produto.',
			'OFF_TOPIC'	=> 'A mensagem notificada &eacute; um off t&oacute;pico.',
			'OTHER'		=> 'A mensagem notificada n&atilde;o se encaixa em qualquer outra categoria, favor use o campo de informa&ccedil;&atilde;o adicional.'
		)
	),
));

?>
