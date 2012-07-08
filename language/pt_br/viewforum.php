<?php
/**
*
* viewforum [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 acydburn Exp $
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
	'ACTIVE_TOPICS'			=> 'T&oacute;picos Ativos',
	'ANNOUNCEMENTS'			=> 'An&uacute;ncios',
	
	'FORUM_PERMISSIONS'		=> 'Permiss&otilde;es do F&oacute;rum',

	'ICON_ANNOUNCEMENT'		=> 'An&uacute;ncio',
	'ICON_STICKY'			=> 'Fixo',

	'LOGIN_NOTIFY_FORUM'	=> 'Voc&ecirc; foi notificado sobre este f&oacute;rum, por favor, logue-se para poder ver.',

	'MARK_TOPICS_READ'		=> 'Marcar t&oacute;picos como lidos',

	'NEW_POSTS_HOT'			=> 'Novas Mensagens [ Popular ]',
	'NEW_POSTS_LOCKED'		=> 'Novas Mensagens [ Fechado ]',
	'NO_NEW_POSTS_HOT'		=> 'Sem Novas Mensagens [ Popular ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Sem Novas Mensagens  [ Fechado ]',
	'NO_READ_ACCESS'		=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para ler t&oacute;picos neste f&oacute;rum.',

	'POST_FORUM_LOCKED'		=> 'O f&oacute;rum est&aacute; fechado',

	'TOPICS_MARKED'			=> 'Os t&oacute;picos deste f&oacute;rum foram marcados como lidos',

	'VIEW_FORUM'			=> 'Ver F&oacute;rum',
	'VIEW_FORUM_TOPIC'		=> '1 t&oacute;pico',
	'VIEW_FORUM_TOPICS'		=> '%d t&oacute;picos',
));

?>
