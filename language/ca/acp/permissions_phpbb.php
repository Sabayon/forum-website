<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Catalan]
*
* @package language
* @version $Id: permissions_phpbb.php 8911 2008-09-23 13:03:33Z acydburn $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Accions',
		'content'		=> 'Contingut',
		'forums'		=> 'Fòrums',
		'misc'			=> 'Miscel·lània',
		'permissions'	=> 'Permisos',
		'pm'			=> 'Missatges privats',
		'polls'			=> 'Enquestes',
		'post'			=> 'Entrada',
		'post_actions'	=> 'Accions d’entrades',
		'posting'		=> 'Publicació d’entrades',
		'profile'		=> 'Perfil',
		'settings'		=> 'Configuracions',
		'topic_actions'	=> 'Accions de temes',
		'user_group'	=> 'Usuaris i grups',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Permisos d’usuari',
		'a_'			=> 'Permisos d’administrador',
		'm_'			=> 'Permisos de moderador',
		'f_'			=> 'Permisos del fòrum',
		'global'		=> array(
			'm_'			=> 'Permisos dels moderadors globals',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Pot veure perfils, la llista de membres i la llista d’usuaris connectats', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Pot canviar el seu nom d’usuari', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Pot canviar la seva contrasenya', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Pot canviar la seva adreça electrònica', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Pot canviar el seu avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Pot canviar el seu grup per defecte', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Pot adjuntar fitxers', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Pot baixar fitxers', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Pot desar esborranys', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Pot inhabilitar la censura de paraules', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Pot utilitzar una signatura', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Pot enviar missatges privats', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Pot enviar missatges privats a múltiples usuaris', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Pot enviar missatges privats a grups', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Pot llegir missatges privats', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Pot editar els seus missatges privats', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Pot eliminar missatges privats de la seva carpeta', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Pot reenviar missatges privats', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Pot enviar per correu electrònic missatges privats', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Pot imprimir missatges privats', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Pot adjuntar fitxers als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Pot baixar fitxers als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Pot utilitzar el BBCode als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Pot utilitzar emoticones als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Pot utilitzar l’etiqueta del BBCode [img] als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Pot utilitzar l’etiqueta del BBCode [flash] als missatges privats', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Pot enviar correus electrònics', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Pot enviar missatges instantanis', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Pot ignorar el límit d’inundació', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Pot ocultar la seva presència', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Pot veure els usuaris ocults', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Pot cercar el fòrum', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Pot veure el fòrum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Pot llegir el fòrum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Pot crear temes nous', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Pot respondre als temes', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Pot utilitzar les icones de tema/entrada', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Pot publicar avisos', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Pot publicar temes recurrents', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Pot crear enquestes', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Pot votar a les enquestes', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Pot canviar el seu vot', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Pot adjuntar fitxers', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Pot baixar fitxers', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Pot utilitzar signatures', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Pot utilitzar el BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Pot utilitzar emoticones', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Pot utilitzar l’etiqueta del BBCode [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Pot utilitzar l’etiqueta del BBCode [flash]', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Pot editar les seves entrades', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Pot eliminar les seves entrades', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Pot bloquejar els seus temes', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Pot reactivar temes', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Pot informar d’entrades', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Es Pot subscriure al fòrum', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Pot imprimir temes', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Pot enviar temes per correu electrònic', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Pot cercar el fòrum', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Pot ignorar el límit d’inundació', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Incrementa el comptador d’entrades<br /><em>Tingueu en compte que aquesta configuració només afecta les entrades noves.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Pot publicar entrades sense que siguin aprovades', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Pot editar entrades', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Pot eliminar entrades', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Pot aprovar entrades', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Pot tancar i eliminar informes', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Pot canviar l’autor de les entrades', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Pot desplaçar temes', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Pot bloquejar temes', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Pot dividir temes', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Pot combinar temes', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Pot veure els detalls de les entrades', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Pot fer advertiments a usuaris<br /><em>Aquesta configuració només s’assigna globalment, no per fòrums individuals.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Pot gestionar bandejos<br /><em>Aquesta configuració només s’assigna globalment, no per fòrums individuals.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Pot modificar la configuració del fòrum/comprovar si hi ha actualitzacions', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Pot modificar la configuració de servidor/comunicacions', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Pot modificar la configuració del Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Pot veure la configuració del PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Pot gestionar fòrums', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Pot crear fòrums nous', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Pot eliminar fòrums', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Pot podar fòrums', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Pot modificar les icones de tema/entrada i les emoticones', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Pot modificar les paraules censurades', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Pot definir etiquetes BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Pot modificar la configuració de fitxers adjunts', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Pot gestionar usuaris<br /><em>Això també inclou veure la cadena d’identificació del navegador de l’usuari a la llista d’usuaris connectats.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Pot eliminar/podar usuaris', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Pot gestionar grups', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Pot afegir grups nous', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Pot eliminar grups', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Pot gestionar els rangs', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Pot gestionar els camps personalitzats del perfil', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Pot gestionar els noms prohibits', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Pot gestionar els bandejos', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Pot veure màscares de permisos', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Pot modificar els permisos de grups individuals', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Pot modificar els permisos d’usuaris individuals', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Pot modificar la classe de permisos del fòrum', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Pot modificar la classe de permisos dels moderadors', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Pot modificar la classe de permisos dels administradors', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Pot modificar la classe de permisos dels usuaris', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Pot gestionar rols', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Pot utilitzar els permisos d’altres usuaris', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Pot gestionar els estils', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'pot veurer els registres', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Pot eliminar els registres', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Pot gestionar els mòduls', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Pot gestionar els paquets d’idioma', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Pot enviar correus eletrònics massius', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Pot gestionar els robots', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Pot gestionar les raons d’informe/denegació', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Pot fer una còpia de seguretat/restaurar la base de dades', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Pot gestionar la configuració de cerca i els motors', 'cat' => 'misc'),
));

?>