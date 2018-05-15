<?php
/** 
*
* acp_groups [Galician]
*
* @package language
* @version $Id: groups.php 9701 2009-06-28 12:13:11Z toonarmy $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Dende este panel podes administrar todos os teus grupos de usuarios. Podes eliminar, crear e editar os grupos existentes. A maiores, podes escoller xefes de grupo, mudar o estado do grupo entre aberto/oculto/pechado e seleccionar o nome e descrición do grupo.',
	'ADD_USERS'						=> 'Engadir Usuarios',
	'ADD_USERS_EXPLAIN'				=> 'Aquí podes engadir novos usuarios ao grupo. Podes escoller se o grupo se converte en predeterminado para os usuarios escollidos. Adicionalmente podes definilos como administradores do grupo. Por favor introduce cada nome de usuario nunha liña distinta.',

	'COPY_PERMISSIONS'				=> 'Copiar permisos dende',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Unha vez creado, o grupo terá os mesmos permisos que o que selecciones aquí.',
	'CREATE_GROUP'					=> 'Crear novo grupo',

	'GROUPS_NO_MEMBERS'				=> 'Este grupo non ten usuarios ',
	'GROUPS_NO_MODS'				=> 'Non hai líderes de grupo definidos',

	'GROUP_APPROVE'					=> 'Aprobar',
	'GROUP_APPROVED'				=> 'Membros Aprobados',
	'GROUP_AVATAR'					=> 'Avatar do grupo',
	'GROUP_AVATAR_EXPLAIN'			=> 'Esta imaxe será amosada no Panel de Control de Grupos.',
	'GROUP_CLOSED'					=> 'Pechado',
	'GROUP_COLOR'					=> 'Cor do grupo',
	'GROUP_COLOR_EXPLAIN'			=> 'Define a cor na que aparecerán os nomes de usuario dos membros, déixao en branco para a cor por defecto de usuario.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Estás certo de querer engadir o usuario %1$s ao grupo?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Estás certo de querer engadir os usuarios %1$s ao grupo?',
	'GROUP_CREATED'					=> 'Grupo creado correctamente',
	'GROUP_DEFAULT'					=> 'Predeterminado',
	'GROUP_DEFS_UPDATED'			=> 'Configuración de grupo predeterminado para todos os membros seleccionados.',
	'GROUP_DELETE'					=> 'Eliminar',
	'GROUP_DELETED'					=> 'Grupo eliminado e grupos predeterminados de usuario establecidos correctamente.',
	'GROUP_DEMOTE'					=> 'Degradar',
	'GROUP_DESC'					=> 'Descrición do grupo',
	'GROUP_DETAILS'					=> 'Pormenores do grupo',
	'GROUP_EDIT_EXPLAIN'			=> 'Aquí podes editar un grupo existente. Podes trocar o seu nome, descrición e tipo (aberto, pechado, etc). Podes configurar tamén algunhas opciós xerais do grupo como a cor, rango, etc. Os trocos feitos aquí anulan a configuración actual dos usuarios. Por favor, repara en que os membros do grupo poden facer caso omiso da configuración do avatar do grupo agás que estabelezas permisos de usuario axeitados.',
	'GROUP_ERR_USERS_EXIST'			=> 'Os usuarios especificados xa son membros deste grupo',
	'GROUP_FOUNDER_MANAGE'			=> 'Só xestión do fundador',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restrinxir xestión deste grupo só a fundadores. Os usuarios que teñan permisos de grupo seguirán a poder ver este do mesmo xeito ca os membros que o forman.',
	'GROUP_HIDDEN'					=> 'Oculto',
	'GROUP_LANG'					=> 'Idioma do grupo',
	'GROUP_LEAD'					=> 'Líderes do grupo',
	'GROUP_LEADERS_ADDED'			=> 'Novos líderes engadidos ao grupo correctamente.',
	'GROUP_LEGEND'					=> 'Amosar grupo na lenda',
	'GROUP_LIST'					=> 'Membros actuais',
	'GROUP_LIST_EXPLAIN'			=> 'Esta é unha lista completa de tódolos membros actualmente pertencentes a este grupo. Podes eliminar membros (agás en certos grupos especiais) ou engadir máis.',
	'GROUP_MEMBERS'					=> 'Membros do grupo',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Esta é unha listaxe completa de todos os membros deste grupo usuario. Inclúe seccións separadas para administradores e membros actuais e pendentes. Desde aquí podes xestionar todos os aspectos que atinxen os membros e os seus roles. Para degradar a un administrador pero que siga no grupo tes que usar Degradar mellor que Borrar. Do mesmo xeito usa Promocionar para converter en administrador a un membro do grupo.',
	'GROUP_MESSAGE_LIMIT'			=> 'Límite de mensaxes privadas do grupo por cartafol',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Esta configuración anula o límite de mensaxes por usuario. Un valor de O significa que se utilizará o límite por defecto.',
	'GROUP_MODS_ADDED'				=> 'Novos moderadores de grupo engadidos correctamente.',
	'GROUP_MODS_DEMOTED'			=> 'Administradores de grupo degradados correctamente.',
	'GROUP_MODS_PROMOTED'			=> 'Membros do grupo promocionados correctamente.',
	'GROUP_NAME'					=> 'Nome do grupo',
	'GROUP_NAME_TAKEN'				=> 'O nome de grupo que inseriches xa está en uso. Escolle outro distinto.',
	'GROUP_OPEN'					=> 'Aberto',
	'GROUP_PENDING'					=> 'Membros pendentes',
	'GROUP_MAX_RECIPIENTS'			=> 'Número máximo permitido de destinatarios por mensaxe privada',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'O número máximo de destinatarios permitido nunha mensaxe privada. Se insires 0, empregarase a configuración xeral do taboleiro.',
	'GROUP_OPTIONS_SAVE'			=> 'Opcións extendidas do grupo',
	'GROUP_PROMOTE'					=> 'Promocionar a xefe de grupo',
	'GROUP_RANK'					=> 'Rango do grupo',
	'GROUP_RECEIVE_PM'				=> 'Grupo habilitado para recibir mensaxes privadas',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Ten en conta que os grupos ocultos non poden recibir mensaxes, independentemente da configuración deste parámetro.',
	'GROUP_REQUEST'					=> 'Solicitude',
	'GROUP_SETTINGS_SAVE'			=> 'Configuración xeral de grupos',
	'GROUP_SKIP_AUTH'				=> 'Excluir o xefe do grupo dos permisos',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Se estiver activo, o xefe do grupo xa non irá herdar os permisos do grupo.',
	'GROUP_TYPE'					=> 'Tipo de grupo',
	'GROUP_TYPE_EXPLAIN'			=> 'Isto determina que usuarios poden unirse ou ver este grupo.',
	'GROUP_UPDATED'					=> 'Preferencias do grupo actualizadas con éxito.',
	
	'GROUP_USERS_ADDED'				=> 'Novo usuarios engadidos ao grupo correctamente.',
	'GROUP_USERS_EXIST'				=> 'Os usuarios seleccionados xa son membros.',
	'GROUP_USERS_REMOVE'			=> 'Usuarios eliminados do grupo e novas predeterminacións establecidas correctamente.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Establecer o grupo predeterminado para todos os membros',
	'MEMBERS'				=> 'Membros',

	'NO_GROUP'					=> 'Non se especificou grupo ningún',
	'NO_GROUPS_CREATED'			=> 'Aínda non se creou grupo ningún.',
	'NO_PERMISSIONS'			=> 'Non copiar permisos',
	'NO_USERS'					=> 'Non inseriches usuario ningún.',
	'NO_USERS_ADDED'			=> 'Non se engadiron usuarios ao grupo.',
	'NO_VALID_USERS'			=> 'Non inseriches usuario ningún ao que se lle poida aplicar esta acción.',

	'SPECIAL_GROUPS'			=> 'Grupos predefinidos',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Os grupos pre-definidos son grupos especiais, non poden ser borrados o modificados directamente. Porén, si podes engadirlles usuarios e alterar axustes basicos. Premendo en "Predeterminado" podes asignar o grupo concreto como grupo por defecto para todos os seus membros.',

	'TOTAL_MEMBERS'				=> 'Membros',

	'USERS_APPROVED'				=> 'Usuarios aprobados correctamente.',
	'USER_DEFAULT'					=> 'User default',
	'USER_DEF_GROUPS'				=> 'Grupos definidos polo usuario',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Estos son grupos creados por ti ou por outro administrador do taboleiro. Podes xestionar os participantes así como editar as propiedades do grupo ou incluso eliminar o grupo. Premendo Predeterminado podes configurar o grupo relevante como predeterminado para todos os seus membros.',
	'USER_GROUP_DEFAULT'			=> 'Estabelecer como grupo por defecto',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Dicindo si aqui configurarás este grupo como o grupo por defecto para usuarios engadidos',
	'USER_GROUP_LEADER'				=> 'Escoller como líder de grupo',
));

?>