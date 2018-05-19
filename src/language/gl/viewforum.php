<?php
/** 
*
* viewforum [Galician]
*
* @package language
* @version $Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACTIVE_TOPICS'			=> 'Temas activos',
	'ANNOUNCEMENTS'			=> 'Anuncios',

	'FORUM_PERMISSIONS'		=> 'Permisos do foro',

	'ICON_ANNOUNCEMENT'		=> 'Anuncio',
	'ICON_STICKY'			=> 'Destacado',

	'LOGIN_NOTIFY_FORUM'	=> 'Envióuseche unha notificación verbo deste foro, por favor, inicia sesión para a ver.',

	'MARK_TOPICS_READ'		=> 'Marcar temas como lidos',

	'NEW_POSTS_HOT'			=> 'Novas mensaxes publicadas [Popular]',
	'NEW_POSTS_LOCKED'		=> 'Novas mensaxes publicadas [Bloqueado]',
	'NO_NEW_POSTS_HOT'		=> 'Non hai novas mensaxes [Popular]',
	'NO_NEW_POSTS_LOCKED'	=> 'Non hai novas mensaxes [Bloqueado]',
	'NO_READ_ACCESS'		=> 'Non dispós dos permisos precisos para ler temas incluídos neste foro.',

	'POST_FORUM_LOCKED'		=> 'O foro está bloqueado',

	'TOPICS_MARKED'			=> 'Os temas deste foro foron marcados como lidos',

	'VIEW_FORUM'			=> 'Ver foro',
	'VIEW_FORUM_TOPIC'		=> '1 tema',
	'VIEW_FORUM_TOPICS'		=> '%d temas',
));

?>