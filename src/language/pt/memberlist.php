<?php
/** 
*
* memberlist.php [Português]
*
* @package language
* @version $Id: memberlist.php, v 1.0 Outubro/2009
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ABOUT_USER'				=> 'Perfil',
	'ACTIVE_IN_FORUM'			=> 'Fórum mais activo',
	'ACTIVE_IN_TOPIC'			=> 'Tópico mais activo',
	'ADD_FOE'					=> 'Adicionar como inimigo',
	'ADD_FRIEND'				=> 'Adicionar como amigo',
	'AFTER'						=> 'Depois',

	'ALL'						=> 'Todos',

	'BEFORE'					=> 'Antes',

	'CC_EMAIL'					=> 'Enviar-me cópia deste email.',
	'CONTACT_USER'				=> 'Contacto de:',

	'DEST_LANG'					=> 'Linguagem',
	'DEST_LANG_EXPLAIN'			=> 'Seleccione a linguagem apropriada (se activada) para o destinatário desta mensagem.',

	'EMAIL_BODY_EXPLAIN'		=> 'Esta mensagem será enviada como texto puro, não inclua qualquer código HTML ou BBCODE. O endereço de resposta desta mensagem é o seu endereço de email.',
	'EMAIL_DISABLED'			=> 'Todas as funções de email foram desactivadas.',
	'EMAIL_SENT'				=> 'O email foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'		=> 'Esta mensagem será enviada como texto puro, não inclua qualquer cdigo HTML ou BBCODE. As informações daquele tópico serão incluídas na mensagem. O endereço de resposta desta mensagem é o seu endereço de email.',
	'EMPTY_ADDRESS_EMAIL'		=> 'Tem que indicar um endereço de email válido como destinatário.',
	'EMPTY_MESSAGE_EMAIL'		=> 'Tem que indicar uma mensagem para ser enviada no email.',
	'EMPTY_MESSAGE_IM'			=> 'Tem que inserir a mensagem para ser enviada.',
	'EMPTY_NAME_EMAIL'			=> 'Tem que indicar o nome real do destinatário.',
	'EMPTY_SUBJECT_EMAIL'		=> 'Indique um assunto para o email',
	'EQUAL_TO'					=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'		=> 'Utilize este formulário para procurar Utilizadores. <br />Não é necessário preencher todos os campos. Para dados parciais utilize o *. Se indicar uma data, use o formato <kbd>YYYY-MM-DD</kbd> ex. <samp>2004-02-29</samp>. <br />Nas caixas de selecção escreva um ou mais nomes de utilizador (são aceites vários Utilizadores).',
	'FLOOD_EMAIL_LIMIT'			=> 'Não pode enviar outro email tão rapidamente. Aguarde algum tempo e tente novamente mais tarde.',

	'GROUP_LEADER'				=> 'Lider do Grupo',

	'HIDE_MEMBER_SEARCH'		=> 'Ocultar as opções de pesquisa dos Utilizadores',

	'IM_ADD_CONTACT'			=> 'Adicionar contacto',
	'IM_AIM'					=> 'Tem que ter o AOL Instant Messenger instalado para usar esta opção.',
	'IM_AIM_EXPRESS'			=> 'AIM Express',
	'IM_DOWNLOAD_APP'			=> 'Download Aplicativo',
	'IM_ICQ'					=> 'Os Utilizadores podem ter seleccionado não receber mensagens instantâneas não solicitadas.',
	'IM_JABBER'					=> 'Os Utilizadores podem ter seleccionado não receber mensagens instantâneas não solicitadas.',
	'IM_JABBER_SUBJECT'			=> 'Esta é uma mensagem automática, por favor, não responda! Mensagem enviada pelo Utilizador %1$s em %2$s.',
	'IM_MESSAGE'				=> 'Sua mensagem',
	'IM_MSNM'					=> 'Tem que ter o Windows Messanger instalado para usar essa opção.',
	'IM_MSNM_BROWSER'			=> 'Seu navegador não suporta isto.',
	'IM_MSNM_CONNECT'			=> 'O MSNM não está conectado. \\Tem que conectar o MSNM para continuar.',
	'IM_NAME'					=> 'Seu nome',
	'IM_NO_DATA'				=> 'Não existe informação de contacto para este Utilizador.',
	'IM_NO_JABBER'				=> 'Enviar mensagem Jabber não suportado por este Servidor. Tem que ter um cliente Jabber instalado no seu sistema para contactar o destinatário.',
	'IM_RECIPIENT'				=> 'Destinatário',
	'IM_SEND'					=> 'Enviar Mensagem',
	'IM_SEND_MESSAGE'			=> 'Enviar Mensagem',
	'IM_SENT_JABBER'			=> 'A sua mensagem para %1$s foi enviada com sucesso.',
	'IM_USER'					=> 'Enviar uma mensagem instantânea',

	'LAST_ACTIVE'				=> 'Última vez activo',
	'LESS_THAN'					=> 'Menor que',
	'LIST_USER'					=> '1 Utilizador',
	'LIST_USERS'				=> '%d Utilizadores',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Tem que estar registado e ligado para ver os membros da Equipa de Responsáveis do Fórum.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Tem que estar registado e ligado para ver a lista de Utilizadores.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Tem que estar registado e ligado para pesquisar Utilizadores.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Tem que estar registado e ligado para ver Perfis.',

	'MORE_THAN'					=> 'Maior que',

	'NO_EMAIL'					=> 'Não está autorizado a enviar email a este Utilizador.',
	'NO_VIEW_USERS'				=> 'Não está autorizado a ver a lista de Utilizadores ou Perfis.',

	'ORDER'						=> 'Ordenar',
	'OTHER'						=> 'Outro',

	'POST_IP'					=> 'Enviado do IP/Domínio',

	'RANK'						=> 'Rank',
	'REAL_NAME'					=> 'Nome do destinatário',
	'RECIPIENT'					=> 'Destinatário',
	'REMOVE_FOE'				=> 'Apagar dos inimigos',
	'REMOVE_FRIEND'				=> 'Apagar dos amigos',

	'SEARCH_USER_POSTS'			=> 'Pesquisar Mensagens do Utilizador',
	'SELECT_MARKED'				=> 'Seleccionar marcados',
	'SELECT_SORT_METHOD'		=> 'Seleccionar método de ordenação',
	'SEND_AIM_MESSAGE'			=> 'Enviar Mensagem AIM',
	'SEND_ICQ_MESSAGE'			=> 'Enviar Mensagem ICQ',
	'SEND_IM'					=> 'A enviar Mensagem instantânea',
	'SEND_JABBER_MESSAGE'		=> 'Enviar Mensagem Jabber',
	'SEND_MESSAGE'				=> 'Mensagem',
	'SEND_MSNM_MESSAGE'			=> 'Enviar Mensagem MSNM/WLM',
	'SEND_YIM_MESSAGE'			=> 'Enviar Mensagem YIM',
	'SORT_EMAIL'				=> 'Email',
	'SORT_LAST_ACTIVE'			=> 'Último activo',
	'SORT_POST_COUNT'			=> 'Número de Mensagens',

	'USERNAME_BEGINS_WITH'		=> 'Nomes de Utilizadores iniciados por:',
	'USER_ADMIN'				=> 'Administrar Utilizador',
	'USER_BAN'					=> 'Expulsar',
	'USER_FORUM'				=> 'Estatísticas do Utilizador',

	'USER_LAST_REMINDED'	=> array(
		0		=> 'Neste momento não existe nenhuma advertência',
		1		=> '%1$d advertência enviada<br />» %2$s',
	),

	'USER_ONLINE'				=> 'Online',
	'USER_PRESENCE'				=> 'Presença no Fórum',

	'VIEWING_PROFILE'			=> 'A ver o Perfil de: %s',
	'VISITED'					=> 'Última visita',

	'WWW'						=> 'Sítio web',
));

?>