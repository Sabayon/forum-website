<?php
/** 
*
* memberlist [Galician]
*
* @package language
* @version $Id: memberlist.php 9933 2009-08-06 09:12:21Z marshalrusty $
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'Foro máis activo',
	'ACTIVE_IN_TOPIC'		=> 'Tema máis activo',
	'ADD_FOE'				=> 'Engadir inimigo',
	'ADD_FRIEND'			=> 'Engadir amigo',
	'AFTER'					=> 'Despois',	

	'ALL'					=> 'Todos',

	'BEFORE'				=> 'Antes',

	'CC_EMAIL'				=> 'Enviar unha copia deste correo-e a ti mesmo',
	'CONTACT_USER'			=> 'Contacto',

	'DEST_LANG'				=> 'Idioma',
	'DEST_LANG_EXPLAIN'		=> 'Selecciona un idioma axeitado (se está dispoñible) para o destinatario desta mensaxe.',

	'EMAIL_BODY_EXPLAIN'	=> 'Esta mensaxe enviarase como texto plano, polo que non debes incluír HTML ou BBCode. O enderezo de resposta para esta mensaxe será o teu enderezo de correo-e.',
	'EMAIL_DISABLED'		=> 'Sentímolo, pero todas as funcións relacionadas co correo-e foron desactivadas.',
	'EMAIL_SENT'			=> 'O correo-e foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Esta mensaxe enviarase como texto plano, polo que non debes incluír HTML ou BBCode. Ten en conta que a información do tema está xa incluída na mensaxe. O enderezo de resposta para esta mensaxe será o teu enderezo de correo-e.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Tes que proporcionar un enderezo de correo-e válido para o destinatario.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Tes que inserir unha mensaxe para enviar por correo-e.',
	'EMPTY_MESSAGE_IM'		=> 'Tes que inserir unha mensaxe para enviar.',
	'EMPTY_NAME_EMAIL'		=> 'Tes que inserir o nome verdadeiro do destinatario.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Debes especificar un asunto para o correo-e.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Utiliza este formulario para procurar membros concretos. Non é preciso que cubras todos os campos. Para especificar datos parciais utiliza o * como comodín. Cando insiras datas usa o formato aaaa-mm-dd, p.e. 2002-01-01. Marca as caixas correspondentes para seleccionar un ou máis nomes de usuario (pode que sexan aceptados varios nomes de usuario dependendo do propio formulario). De xeito alternativo podes marcar os usuarios requiridos e premer no botón Inserir Marcados.',
	'FLOOD_EMAIL_LIMIT'		=> 'Non podes enviar outro correo-e nestes intres. Téntao de novo máis tarde.',

	'GROUP_LEADER'			=> 'Líder do grupo',

	'HIDE_MEMBER_SEARCH'	=> 'Procurar usuario oculto',

	'IM_ADD_CONTACT'		=> 'Engadir Contacto',
	'IM_AIM'				=> 'Ten en conta que precisas ter instalado o AOL Instant Messenger para poder usar isto.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Descargar aplicación',
	'IM_ICQ'				=> 'Ten en conta que os usuarios poden ter seleccionado non recibir mensaxes instantáneas non solicitadas.',
	'IM_JABBER'				=> 'Ten en conta que os usuarios poden ter seleccionado non recibir mensaxes instantáneas non solicitadas.',
	'IM_JABBER_SUBJECT'		=> 'Esta é unha mensaxe automática. Por favor, non respondas á mesma! Mensaxe do usuario %1$s en %2$s',
	'IM_MESSAGE'			=> 'A túa mensaxe',
	'IM_MSNM'				=> 'Ten en conta que precisas ter instalado o Windows Messenger para poder utilizar isto.',
	'IM_MSNM_BROWSER'		=> 'O teu navegador non permite isto.',
	'IM_MSNM_CONNECT'		=> 'O MSNM non está conectado.\nTes que conectar co MSNM para continuar.',		
	'IM_NAME'				=> 'O teu Nome',
	'IM_NO_DATA'			=> 'Non hai información de contacto axeitada para este usuario.',
	'IM_NO_JABBER'			=> 'Sentímolo, pero este servidor non soporta mensaxería directa de usuarios do Jabber. Precisas ter un cliente Jabber instalado no teu sistema para contactar co destinatario anterior.',
	'IM_RECIPIENT'			=> 'Destinatario',
	'IM_SEND'				=> 'Enviar mensaxe',
	'IM_SEND_MESSAGE'		=> 'Enviar mensaxe',
	'IM_SENT_JABBER'		=> 'A túa mensaxe para %1$s enviouse correctamente.',
	'IM_USER'				=> 'Enviar unha mensaxe instantánea',
	
	'LAST_ACTIVE'				=> 'Último activo',
	'LESS_THAN'					=> 'Menos de',
	'LIST_USER'					=> '1 usuario',
	'LIST_USERS'				=> '%d usuarios',
	'LOGIN_EXPLAIN_LEADERS'		=> 'O administrador dos foros require que esteas rexistrado e que inicies sesión para poderes ver o listado do equipo.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'O administrador dos foros require que esteas rexistrado e que inicies sesión  para poderes acceder á lista de membros.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'O administrador dos foros require que esteas rexistrado e que inicies sesión para poderes procurar outros usuarios.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'O administrador dos foros require que esteas rexistrado e que inicies sesión para poderes ver perfís doutros usuarios.',

	'MORE_THAN'				=> 'Máis de',

	'NO_EMAIL'				=> 'Non se che permite enviar correos-e a este usuario.',
	'NO_VIEW_USERS'			=> 'Non estás autorizado a ver a lista ou perfís de membros.',

	'ORDER'					=> 'Ordenar.',
	'OTHER'					=> 'Outros',

	'POST_IP'				=> 'Publicado dende o IP/dominio',

	'RANK'					=> 'Rango',
	'REAL_NAME'				=> 'Nome do destinatario',
	'RECIPIENT'				=> 'Destinatario',
	'REMOVE_FOE'			=> 'Eliminar inimigo',
	'REMOVE_FRIEND'			=> 'Eliminar amigo',

	'SEARCH_USER_POSTS'		=> 'Procurar mensaxes do usuario',
	'SELECT_MARKED'			=> 'Seleccionar marcado(s)',
	'SELECT_SORT_METHOD'	=> 'Seleccionar método de ordenación',
	'SEND_AIM_MESSAGE'		=> 'Enviar mensaxe AIM',
	'SEND_ICQ_MESSAGE'		=> 'Enviar mensaxe ICQ',
	'SEND_IM'				=> 'Mensaxería instantánea',
	'SEND_JABBER_MESSAGE'	=> 'Enviar mensaxe Jabber',
	'SEND_MESSAGE'			=> 'Mensaxe',
	'SEND_MSNM_MESSAGE'		=> 'Enviar mensaxe MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Enviar mensaxe YIM',
	'SORT_EMAIL'			=> 'Correo-e',
	'SORT_LAST_ACTIVE'		=> 'Último activo',
	'SORT_POST_COUNT'		=> 'Conta de mensaxes publicadas',

	'USERNAME_BEGINS_WITH'	=> 'O nome de usuario comeza por',
	'USER_ADMIN'			=> 'Xestionar usuario',
	'USER_BAN'				=> 'Prohibindo',
	'USER_FORUM'			=> 'Estatísticas de usuario',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Non se enviou recordatorio ningún até agora',
		1		=> '%1$d recordatorio enviado<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Conectado',
	'USER_PRESENCE'			=> 'Presencia nos foros',

	'VIEWING_PROFILE'		=> 'Visualizando perfil - %s',
	'VISITED'				=> 'Última visita',

	'WWW'					=> 'Sitio web',
));

?>