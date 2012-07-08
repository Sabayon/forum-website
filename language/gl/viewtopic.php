<?php
/** 
*
* viewtopic [Galician]
*
* @package language
* @version $Id: viewtopic.php 9972 2009-08-14 08:42:46Z Kellanved $
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
	'ATTACHMENT'						=> 'Adxunto',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Os anexos foron desactivados',

	'BOOKMARK_ADDED'		=> 'Tema marcado como favorito correctamente.',
	'BOOKMARK_ERR'			=> 'Non se puido marcar o tema como favorito. Por favor, téntao de novo.',
	'BOOKMARK_REMOVED'		=> 'Marca de tema favorito eliminada correctamente.',
	'BOOKMARK_TOPIC'		=> 'Marcar tema como favorito',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Eliminar dos favoritos',
	'BUMPED_BY'				=> 'Última reactivación feita por %1$s o %2$s',
	'BUMP_TOPIC'			=> 'Reactivar tema',

	'CODE'					=> 'Código',
	'COLLAPSE_QR'			=> 'Agochar Resposta Rápida',

	'DELETE_TOPIC'			=> 'Eliminar tema',
	'DOWNLOAD_NOTICE'		=> 'Non tes os permisos necesarios para ver os arquivos anexos a esta mensaxe.',

	'EDITED_TIMES_TOTAL'	=> 'Última edición por %1$s o %2$s, editado %3$d veces en total',
	'EDITED_TIME_TOTAL'		=> 'Última edición por %1$s o %2$s, editado %3$d vez en total',
	'EMAIL_TOPIC'			=> 'Enviar correo-e a un amigo',
	'ERROR_NO_ATTACHMENT'	=> 'O anexo seleccionado xa non existe',

	'FILE_NOT_FOUND_404'	=> 'O arquivo <strong>%s</strong> non existe.',
	'FORK_TOPIC'			=> 'Copiar tema',
	'FULL_EDITOR'			=> 'Editor Completo',

	'LINKAGE_FORBIDDEN'		=> 'Non estás autorizado a ver, descargar ou poñer ligazóns dende/a este sitio.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Envióuseche unha notificación sobre este tema, por favor inicia unha sesión para velo.',
	'LOGIN_VIEWTOPIC'		=> 'O administrador dos foros require que esteas rexistrado e inicies unha sesión para poder ver este tema.',

	'MAKE_ANNOUNCE'				=> 'Mudar a Anuncio',
	'MAKE_GLOBAL'				=> 'Mudar a Global',
	'MAKE_NORMAL'				=> 'Mudar a Tema Normal',
	'MAKE_STICKY'				=> 'Mudar a Destacado',
	'MAX_OPTIONS_SELECT'		=> 'Podes seleccionar ata <strong>%d</strong> opcións',
	'MAX_OPTION_SELECT'			=> 'Podes seleccionar <strong>1</strong> opción',
	'MISSING_INLINE_ATTACHMENT'	=> 'O anexo <strong>%s</strong> xa non está dispoñible',
	'MOVE_TOPIC'				=> 'Mover tema',

	'NO_ATTACHMENT_SELECTED'=> 'Non seleccionaches o adxunto que queres descargar ou ver.',
	'NO_NEWER_TOPICS'		=> 'Non hai temas máis novos neste foro.',
	'NO_OLDER_TOPICS'		=> 'Non hai temas máis vellos neste foro.',
	'NO_UNREAD_POSTS'		=> 'Non hai novas mensaxes publicadas sen ler para este tema.',
	'NO_VOTE_OPTION'		=> 'Debes especificar unha opción cando votes.',
	'NO_VOTES'				=> 'Non hai votos',

	'POLL_ENDED_AT'			=> 'Enquisa rematada o %s',
	'POLL_RUN_TILL'			=> 'A enquisa estará activa ata o %s',
	'POLL_VOTED_OPTION'		=> 'Votaches por esta opción',
	'PRINT_TOPIC'			=> 'Imprimir contido visualizado',

	'QUICK_MOD'				=> 'Ferramentas do Quick-mod',
	'QUICKREPLY'			=> 'Resposta Rápida',
	'QUOTE'					=> 'Cita',

	'REPLY_TO_TOPIC'		=> 'Responder ao tema',
	'RETURN_POST'			=> '%sVolver á mensaxe%s',

	'SHOW_QR'				=> 'Resposta Rápida',
	'SUBMIT_VOTE'			=> 'Votar',

	'TOTAL_VOTES'			=> 'Votos totais',

	'UNLOCK_TOPIC'			=> 'Desbloquear tema',

	'VIEW_INFO'				=> 'Detalles da mensaxe publicada',
	'VIEW_NEXT_TOPIC'		=> 'Seguinte tema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tema anterior',
	'VIEW_RESULTS'			=> 'Ver resultados',
	'VIEW_TOPIC_POST'		=> '1 Mensaxe Publicada',
	'VIEW_TOPIC_POSTS'		=> '%d mensaxes publicadas',
	'VIEW_UNREAD_POST'		=> 'Primeira mensaxe sen ler',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'O teu voto foi contabilizado',
	'VOTE_CONVERTED'		=> 'Non se permite o troco de votos para as enquisas convertidas.',

));

?>