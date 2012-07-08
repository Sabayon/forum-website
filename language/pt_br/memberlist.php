<?php
/**
*
* memberlist [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 acydburn Exp $
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
$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'F&oacute;rum mais ativo',
	'ACTIVE_IN_TOPIC'		=> 'T&oacute;pico mais ativo',
	'ADD_FOE'				=> 'Adicionar Ignorado',
	'ADD_FRIEND'			=> 'Adicionar Amigo',
	'AFTER'					=> 'Depois',

	'ALL'					=> 'Todos',

	'BEFORE'				=> 'Antes',

	'CC_EMAIL'				=> 'Enviar uma c&oacute;pia deste e-mail para meu e-mail.',
	'CONTACT_USER'			=> 'Contato',

	'DEST_LANG'				=> 'Linguagem',
	'DEST_LANG_EXPLAIN'		=> 'Selecione uma linguagem apropriada (se dispon&iacute;vel) para o receptor desta mensagem.',

	'EMAIL_BODY_EXPLAIN'	=> 'Esta mensagem ser&aacute; envidada como um texto plano, n&atilde;o ser&aacute; inclu&iacute;do nenhum HTML ou BBCode. O endere&ccedil;o de retorno ser&aacute; o seu e-mail.',
	'EMAIL_DISABLED'		=> 'Desculpe, mas todas as a&ccedil;&otilde;es referentes a e-mail est&atilde;o desativadas.',
	'EMAIL_SENT'			=> 'O e-mail foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Esta mensagem ser&aacute; enviada em texto plano, n&atilde;o inclui nem HTML nem BBCode. Por favor, perceba que a informa&ccedil;&atilde;o do t&oacute;pico j&aacute; est&aacute; incluso na mensagem. O endere&ccedil;o de retorno para esta mensagem ser&aacute; o seu endere&ccedil;o de e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Voc&ecirc; deve inserir um e-mail v&aacute;lido para esta mensagem.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Voc&ecirc; deve inserir uma mensagem para enviar o e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Voc&ecirc; deve inserir uma mensagem para poder enviar.',
	'EMPTY_NAME_EMAIL'		=> 'Voc&ecirc; deve inserir o nome verdadeiro do receptor da mensagem.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Voc&ecirc; deve inserir um assunto para este e-mail.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Use este formul&aacute;rio para encontrar usu&aacute;rios espec&iacute;ficos. Voc&ecirc; n&atilde;o precisa preencher todos os campos. Para buscas parciais, use o * (asterisco) como chave substituta. Use o formato <kbd>aaaa-mm-dd</kbd> para efetuar buscas por data, por exemplo: <samp>2004-02-29</samp>. Use a caixa de checagem para selecionar mais de um usu&aacute;rio (v&aacute;rios nomes de usu&aacute;rios poder&atilde;o ser selecionados, dependendo do campo do formul&aacute;rio solicitado) e clique em Selecionar Marcados para retornar ao formul&aacute;rio anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'Voc&ecirc; n&atilde;o pode enviar um novo e-mail agora. Por favor, aguarde alguns minutos e tente novamente mais tarde.',

	'GROUP_LEADER'			=> 'L&iacute;der do Grupo',

	'HIDE_MEMBER_SEARCH'	=> 'Ocultar busca de membros',

	'IM_ADD_CONTACT'		=> 'Adicionar contato',
	'IM_AIM'				=> 'Voc&ecirc; necessita do AIM instalado para usar esta ferramenta.',
	'IM_AIM_EXPRESS'		=> 'AIM',
	'IM_DOWNLOAD_APP'		=> 'Baixar aplicativo',
	'IM_ICQ'				=> 'Por favor, note que os usu&aacute;rios selecionados podem n&atilde;o receber mensagens n&atilde;o solicitadas.',
	'IM_JABBER'				=> 'Por favor, note que os usu&aacute;rios selecionados n&atilde;o recebem mensagens n&atilde;o solicitadas',
	'IM_JABBER_SUBJECT'		=> 'Esta &eacute; uma mensagem autom&aacute;tica, por favor, n&atilde;o responda. Mensagem do usu&aacute;rio %1$s em %2$s',
	'IM_MESSAGE'			=> 'Sua mensagem',
	'IM_MSNM'				=> 'Voc&ecirc; precisa do MSN/WLM instalado para usar esta ferramenta.',
	'IM_MSNM_BROWSER'		=> 'Seu navegador n&atilde;o suporta este recurso.',
	'IM_MSNM_CONNECT'		=> 'MSNM n&atilde;o est&aacute; conectado.\nVoc&ecirc; precisa conectar ao MSN para continuar.',
	'IM_NAME'				=> 'Seu nome',
	'IM_NO_DATA'			=> 'N&atilde;o h&aacute; nenhuma informa&ccedil;&atilde;o de contato satisfat&oacute;ria para este usu&aacute;rio.',
	'IM_NO_JABBER'			=> 'Voc&ecirc; precisa do Jabber instalado para usar esta ferramenta.',
	'IM_RECIPIENT'			=> 'Destinat&aacute;rio',
	'IM_SEND'				=> 'Enviar mensagem',
	'IM_SEND_MESSAGE'		=> 'Enviar mensagem',
	'IM_SENT_JABBER'		=> 'Sua mensagem para %1$s foi enviada com sucesso.',
	'IM_USER'				=> 'Enviar uma mensagem instant&acirc;nea',

	'LAST_ACTIVE'				=> '&Uacute;ltima Atividade',
	'LESS_THAN'					=> 'Menos que',
	'LIST_USER'					=> '1 usu&aacute;rio',
	'LIST_USERS'				=> '%d usu&aacute;rios',
	'LOGIN_EXPLAIN_LEADERS'		=> 'O administrador do f&oacute;rum requer que voc&ecirc; seja registrado e logado para ver a Equipe Administrativa.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'O administrador do f&oacute;rum requer que voc&ecirc; seja registrado e logado para ver a Lista de Membros.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'O administrador do f&oacute;rum requer que voc&ecirc; seja registrado e logado para buscar usu&aacute;rios.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'O administrador do f&oacute;rum requer que voc&ecirc; seja registrado e logado para ver Perfis.',

	'MORE_THAN'				=> 'Mais que',

	'NO_EMAIL'				=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para enviar e-mail para este usu&aacute;rio.',
	'NO_VIEW_USERS'			=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para ver a lista de membros ou perfis.',

	'ORDER'					=> 'Ordenar',
	'OTHER'					=> 'Outro',

	'POST_IP'				=> 'Enviado por IP/Dom&iacute;nio',

	'RANK'					=> 'Rank',
	'REAL_NAME'				=> 'Nome do Destinat&aacute;rio',
	'RECIPIENT'				=> 'Destinat&aacute;rio',
	'REMOVE_FOE'            => 'Remover Ignorado',
	'REMOVE_FRIEND'         => 'Remover Amigo',

	'SEARCH_USER_POSTS'		=> 'Procurar Mensagens do Usu&aacute;rio',
	'SELECT_MARKED'			=> 'Selecionar marcados',
	'SELECT_SORT_METHOD'	=> 'Selecionar m&eacute;todo de sele&ccedil;&atilde;o',
	'SEND_AIM_MESSAGE'      => 'Enviar mensagem AIM',
	'SEND_ICQ_MESSAGE'      => 'Enviar mensagem ICQ',
	'SEND_IM'				=> 'Mensagens Instant&acirc;neas',
	'SEND_JABBER_MESSAGE'   => 'Enviar mensagem JABBER',
	'SEND_MESSAGE'			=> 'Mensagem',
	'SEND_MSNM_MESSAGE'     => 'Enviar mensagem MSN',
	'SEND_YIM_MESSAGE'      => 'Enviar mensagem YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> '&Uacute;ltima Atividade',
	'SORT_POST_COUNT'		=> 'N&uacute;mero de Mensagens',

	'USERNAME_BEGINS_WITH'	=> 'Usu&aacute;rios que come&ccedil;am com',
	'USER_ADMIN'			=> 'Administrar Usu&aacute;rio',
	'USER_BAN'            => 'Banir',
	'USER_FORUM'			=> 'Estat&iacute;sticas do Usu&aacute;rio',
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Presen&ccedil;a no f&oacute;rum',

	'VIEWING_PROFILE'		=> 'Vendo Perfil - %s',
	'VISITED'				=> '&Uacute;ltima visita',

	'WWW'					=> 'Website',
));

?>