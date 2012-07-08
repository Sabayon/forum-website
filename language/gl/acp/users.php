<?php
/** 
*
* acp_users [Galician]
*
* @package language
* @version $Id: users.php 9767 2009-07-17 11:27:50Z toonarmy $
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
	'ADMIN_SIG_PREVIEW'		=> 'Previsualización da sinatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'Non podes estabelecer este fundador como un usuario normal. Ten que haber polo menos un fundador activado neste panel. Se desexas cambiar o estado deste usuario fundador, antes deberás estabelecer outro usuario como fundador.',

	'BAN_ALREADY_ENTERED'	=> 'A prohibición foi inserida anteriormente de xeito correcto. Non se actualizou a lista de prohibicións.',
	'BAN_SUCCESSFUL'		=> 'Prohibición inserida correctamente',

	'CANNOT_BAN_FOUNDER'			=> 'Non tes permitido desactivar contas de fundador.',
	'CANNOT_BAN_YOURSELF'			=> 'Non podes excluirte a ti mesmo',
	'CANNOT_DEACTIVATE_BOT'			=> 'Non tes permitido desactivar contas de bot. Entanto desactive o bot.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Non tes permitido desactivar contas de fundador.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Non podes desactivar a túa propia conta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Non tes permitido forzar a reactivación nas contas de bot. Entanto desactive o bot.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Non tes permitido forzar a reactivación nas contas de fundador.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Non tes permitido forzar a reactivación da túa propia conta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Non podes eliminar a conta de usuario convidado.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Non podes eliminar a túa propia conta de usuario.',
	'CANNOT_SET_FOUNDER_IGNORED'		=> 'Non tes permitido estabelecer usuarios ignorados coma fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Precisas activar usuario antes de estabelecelos coma fundadores, só usuario activados poden ser estabelecidos.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Só debes especificar isto se estás a mudar o enderezo de correo-e dos usuarios.',

	'DELETE_POSTS'			=> 'Borrar mensaxes',
	'DELETE_USER'			=> 'Eliminar usuario',
	'DELETE_USER_EXPLAIN'	=> 'Ten en conta que a eliminación dun usuario é definitiva e non se pode recuperar.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Reactivación forzada correctamente',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Os membros fundadores non poden ser excluídos, eliminados nin modificados por membros non fundadores',

	'GROUP_APPROVE'					=> 'Aprobar membro',
	'GROUP_DEFAULT'					=> 'Predeterminado',
	'GROUP_DELETE'					=> 'Eliminar',
	'GROUP_DEMOTE'					=> 'Degradar',
	'GROUP_PROMOTE'					=> 'Promocionar',

	'IP_WHOIS_FOR'			=> 'Identidade da IP para %s',

	'LAST_ACTIVE'			=> 'Último activo',

	'MOVE_POSTS_EXPLAIN'	=> 'Selecciona o foro ao que queres mover todas as mensaxes enviadas por este usuario.',

	'NO_SPECIAL_RANK'		=> 'Non se asignou ningún rango especial',
	'NO_WARNINGS'			=> 'Non hai aviso ningún.',
	'NOT_MANAGE_FOUNDER'	=> 'O usuario que tentaches xestionar ten privilexios de fundador. Os fundadores só poden ser administrados por outros fundadores.',

	'QUICK_TOOLS'			=> 'Ferramentas rápidas',

	'REGISTERED'			=> 'Rexistrado',
	'REGISTERED_IP'			=> 'Rexistrado desde o IP',
	'RETAIN_POSTS'			=> 'Conservar as mensaxes enviadas',

	'SELECT_FORM'			=> 'Seleccionar formulario',
	'SELECT_USER'			=> 'Seleccionar Usuario',

	'USER_ADMIN'					=> 'Administración de Usuario',
	'USER_ADMIN_ACTIVATE'			=> 'Activar conta',
	'USER_ADMIN_ACTIVATED'			=> 'Usuario activado correctamente',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar da conta de usuario eliminado correctamente',
	'USER_ADMIN_BAN_EMAIL'			=> 'Prohibir por correo-e',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Enderezo de correo-e prohibido a traverso da administración de usuarios',
	'USER_ADMIN_BAN_IP'				=> 'Prohibir por IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP prohibido a traverso da administración de usuarios',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nome de usuario prohibido a traverso da administración de usuarios',
	'USER_ADMIN_BAN_USER'			=> 'Prohibir por nome de usuario',
	'USER_ADMIN_DEACTIVATE'			=> 'Desactivar conta',
	'USER_ADMIN_DEACTIVED'			=> 'Usuario desactivado correctamente',
	'USER_ADMIN_DEL_ATTACH'			=> 'Eliminar todos os adxuntos',
	'USER_ADMIN_DEL_AVATAR'			=> 'Eliminar avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Caixa de saída de MP baleira',
	'USER_ADMIN_DEL_POSTS'			=> 'Eliminar todas as mensaxes publicadas',
	'USER_ADMIN_DEL_SIG'			=> 'Eliminar sinatura',
	'USER_ADMIN_EXPLAIN'			=> 'Aquí podes mudar a información dos teus usuarios, así como certas opcións específicas.',
	'USER_ADMIN_FORCE'				=> 'Forzar reactivación',
	'USER_ADMIN_LEAVE_NR'			=> 'Eliminar dos Rexistrados Recentemente',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mover todas as mensaxes publicadas',
	'USER_ADMIN_SIG_REMOVED'		=> 'Sinatura eliminada da conta de usuario correctamente',
	'USER_ATTACHMENTS_REMOVED'		=> 'Todos os adxuntos enviados por este usuario foron eliminados correctamente',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Non é posíbel amosar o avatar xa que foi desactivada a opción que o permite.',
	'USER_AVATAR_UPDATED'			=> 'Pormenores dos avatares de usuario actualizados correctamente',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Non é posíbel amosar o tipo de avatar actual xa que foi desactivado.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizado',
	'USER_DELETED'					=> 'Usuario eliminado correctamente',
	'USER_GROUP_ADD'				=> 'Engadir usuario a grupo',
	'USER_GROUP_NORMAL'				=> 'O usuario de grupos normais é un membro de',
	'USER_GROUP_PENDING'			=> 'O usuario de grupos está en modo pendente',
	'USER_GROUP_SPECIAL'			=> 'O usuario de grupos especiais é un membro de',
	'USER_LIFTED_NR'				=> 'Eliminouse o estado de recentemente rexistrado do usuario de xeito correcto.',
	'USER_NO_ATTACHMENTS'			=> 'Non hai arquivos adxuntos que amosar.',
	'USER_OUTBOX_EMPTIED'			=> 'Caixa de saída de mensaxes privadas do usuario baleirada de xeito correcto.',
	'USER_OUTBOX_EMPTY'				=> 'A caixa de saída de mensaxes privadas do usuario xa estaba baleira.',
	'USER_OVERVIEW_UPDATED'			=> 'Pormenores de usuario actualizados',
	'USER_POSTS_DELETED'			=> 'Elimináronse correctamentetodas as mensaxes enviadas por este usuario',
	'USER_POSTS_MOVED'				=> 'Mensaxes publicadas polo usuario movidas correctamente ao foro de destino',
	'USER_PREFS_UPDATED'			=> 'Preferencias de usuario actualizadas',
	'USER_PROFILE'					=> 'Perfil de usuario',
	'USER_PROFILE_UPDATED'			=> 'Perfil de usuario actualizado',
	'USER_RANK'						=> 'Rango de Usuario',
	'USER_RANK_UPDATED'				=> 'Rango de usuario actualizado',
	'USER_SIG_UPDATED'				=> 'Sinatura actualizada correctamente',
	'USER_WARNING_LOG_DELETED'		=> 'Non hai información ningunha dispoñíbel. Pode que fose eliminada a entrada do rexistro (log).',
	'USER_TOOLS'					=> 'Ferramentas básicas',
));

?>