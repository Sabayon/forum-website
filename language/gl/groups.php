<?php
/** 
*
* groups [Galician]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ALREADY_DEFAULT_GROUP'	=> 'O grupo seleccionado xa é o teu grupo por defecto',
	'ALREADY_IN_GROUP'		=> 'Xa es un membro do grupo seleccionado',
	'ALREADY_IN_GROUP_PENDING'	=> 'Xa enviaches unha solicitude para axuntarte ao grupo seleccionado.',

	'CANNOT_JOIN_GROUP'			=> 'Non podes unirte a este grupo. Só podes unirte a grupos abertos e libremente abertos.',
	'CANNOT_RESIGN_GROUP'		=> 'Non podes abandonar este grupo. Só podes abandonar grupos abertos e libremente abertos.',
	'CHANGED_DEFAULT_GROUP'	=> 'O grupo por defecto mudouse correctamente',
	
	'GROUP_AVATAR'						=> 'Avatar do grupo', 
	'GROUP_CHANGE_DEFAULT'				=> 'Seguro que queres mudar a túa pertenza como membro por defecto ao grupo "%s"?',
	'GROUP_CLOSED'						=> 'Pechado',
	'GROUP_DESC'						=> 'Descrición do grupo',
	'GROUP_HIDDEN'						=> 'Oculto',
	'GROUP_INFORMATION'					=> 'Información do Grupo de Usuarios', 
	'GROUP_IS_CLOSED'					=> 'Este é un grupo pechado, os novos membros non se poden unir automáticamente.',
	'GROUP_IS_FREE'						=> 'Este é un grupo aberto, todos os novos membros son benvidos.', 
	'GROUP_IS_HIDDEN'					=> 'Este é un grupo oculto, só os membros deste grupo poden ver aos seus membros.',
	'GROUP_IS_OPEN'						=> 'Este é un grupo aberto, os membros poden solicitar unirse ao mesmo.',
	'GROUP_IS_SPECIAL'					=> 'Este é un grupo especial, os grupos especiais son xestionados polos administradores do foro.', 
	'GROUP_JOIN'						=> 'Unirse ao Grupo',
	'GROUP_JOIN_CONFIRM'				=> 'Seguro que queres unirte ao grupo seleccionado?',
	'GROUP_JOIN_PENDING'				=> 'Solicitar a incorporación ao grupo',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Seguro que queres solicitar a unión ao grupo seleccionado?',
	'GROUP_JOINED'						=> 'Incorporación correcta ao grupo seleccionado',
	'GROUP_JOINED_PENDING'				=> 'A túa solicitude de incorporación ao grupo foi enviada con éxito. Agora tes que agardar que o líder do grupo a aprobe.',
	'GROUP_LIST'						=> 'Administrar Usuarios',
	'GROUP_MEMBERS'						=> 'Membros do grupo',
	'GROUP_NAME'						=> 'Nome do grupo',
	'GROUP_OPEN'						=> 'Aberto',
	'GROUP_RANK'						=> 'Rango do grupo', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Renunciar á pertenza ao grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Seguro que queres renunciar á túa pertenza ao grupo seleccionado?',
	'GROUP_RESIGN_PENDING'				=> 'Renunciar á pertenza dun grupo pendente',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Estás seguro de que queres renunciar á túa pertenza ao grupo seleccionado pendente?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Fuches eliminado correctamente do grupo seleccionado',
	'GROUP_RESIGNED_PENDING'			=> 'Eliminouse a túa pertenza pendente ao grupo seleccionado de xeito correcto',
	'GROUP_TYPE'						=> 'Tipo de grupo',
	'GROUP_UNDISCLOSED'					=> 'Grupo oculto',
	'FORUM_UNDISCLOSED'					=> 'Moderando foro(s) oculto(s)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Precisas identificarte para ver os pormenores do grupo',

	'NO_LEADERS'					=> 'Non es o líder de grupo ningún',
	'NOT_LEADER_OF_GROUP'			=> 'A operación solicitada non pode ser realizada xa que non es un dos líderes do grupo seleccionado.',
	'NOT_MEMBER_OF_GROUP'			=> 'Non se pode realizar a operación requerida por non seres membro do grupo seleccionado.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Non se che permite renunciar ao teu grupo por defecto.',
	
	'PRIMARY_GROUP'		=> 'Grupo primario',

	'REMOVE_SELECTED'		=> 'Eliminar selección',

	'USER_GROUP_CHANGE'			=> 'Do grupo "%1$s" ao "%2$s"',
	'USER_GROUP_DEMOTE'			=> 'Degradar dirección',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Estás seguro de que queres degradar o rango de xefe do grupo seleccionado?',
	'USER_GROUP_DEMOTED'		=> 'O teu rango de xefe foi degradado correctamente.',
));

?>