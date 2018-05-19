<?php
/** 
*
* viewforum.php [Português]
*
* @package language
* @version $Id: viewforum.php, v 1.0 Outubro/2009
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
	'ACTIVE_TOPICS'					=> 'Tópicos activos',
	'ANNOUNCEMENTS'					=> 'Anúncios',

	'FORUM_PERMISSIONS'				=> 'Permissões do Fórum',

	'ICON_ANNOUNCEMENT'				=> 'Anúncio',
	'ICON_STICKY'					=> 'Fixo',

	'LOGIN_NOTIFY_FORUM'			=> 'Foi notificado por este Fórum. Visite o Fórum para poder ver o aviso.',

	'MARK_TOPICS_READ'				=> 'Marcar todos os Tópicos como lidos',

	'NEW_POSTS_HOT'					=> 'Novas Mensagens [ Popular ]',
	'NEW_POSTS_LOCKED'				=> 'Novas Mensagens [ Fechado ]',
	'NO_NEW_POSTS_HOT'				=> 'Sem novas Mensagens [ Popular ]',
	'NO_NEW_POSTS_LOCKED'			=> 'Sem novas Mensagens [ Fechado ]',
	'NO_READ_ACCESS'				=> 'Não tem as Permissões para ler um Tópico neste Fórum.',

	'POST_FORUM_LOCKED'				=> 'Fórum fechado',

	'TOPICS_MARKED'					=> 'Todos os Tópicos foram sinalizados como lidos.',

	'VIEW_FORUM'					=> 'Ver Fórum',
	'VIEW_FORUM_TOPIC'				=> '1 Tópico',
	'VIEW_FORUM_TOPICS'				=> '%d Tópico',
));

?>