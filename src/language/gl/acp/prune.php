<?php
/** 
*
* acp_prune [Galician]
*
* @package language
* @version $Id: prune.php 9933 2009-08-06 09:12:21Z marshalrusty $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Esta sección permitirache eliminar ou desactivar usuarios do teu taboleiro. As contas poden filtrarse de varias formas; por cantidade de mensaxes publicadas, actividade máis recente, etc. Podes combinar todos estes criterios para restrinxires que contas serán afectadas. Por poñer un caso, podes purgar usuarios que non entraran nos foros dende o 01-01-2002 con menos de 10 mensaxes publicadas. De xeito alternativo, podes inserir unha listaxe de usuarios directamente na caixa de texto (un deles en cada liña), de forma que calquera criterio de selección indicado será ignorado. Ten coidado con esta funcionalidade! Cando eliminas un usuario non hai volta atrás.',

	'DEACTIVATE_DELETE'			=> 'Desactivar ou eliminar',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Escolle entre desactivar usuarios ou eliminalos completamente. Ten en conta que os usuarios eliminados non poden restaurarse logo!',
	'DELETE_USERS'				=> 'Eliminar',
	'DELETE_USER_POSTS'			=> 'Eliminar mensaxes de usuario purgados.',
	'DELETE_USER_POSTS_EXPLAIN' => 'Borrar mensaxes publicadas feitas por usuarios eliminados, non ten efecto se os usuarios están desactivados.',

	'JOINED_EXPLAIN'			=> 'Insire unha data co formato AAAA-MM-DD.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Insire unha data co formato <kbd>AAAA-MM-DD</kbd>. Insire <kbd>0000-00-00</kbd> para purgares os usuarios que nunca iniciaron unha sesión, as condicións <em>Antes</em> e <em>Despois</em> ignoraranse.',

	'PRUNE_USERS_LIST'				=> 'Usuarios a purgar',
	'PRUNE_USERS_LIST_DELETE'		=> 'Cos criterios de selección escollidos para o purgado de usuarios eliminaranse as seguintes contas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Cos criterios de selección escollidos para o purgado de usuarios desactivaranse as seguintes contas.',

	'SELECT_USERS_EXPLAIN'		=> 'Introduce nomes de usuario específicos, serán utilizados de forma preferente según os criterios anteriores. Non é posíbel purgar os fundadores.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Os usuarios seleccionados foron desactivados correctamente',
	'USER_DELETE_SUCCESS'		=> 'Os usuarios seleccionados foron eliminados correctamente',
	'USER_PRUNE_FAILURE'		=> 'Non hai usuarios que cumpran co criterio seleccionado.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'A data inserida é incorrecta, agardábase en formato <kbd>AAAA-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Isto eliminará calquer tema ao que non foi enviada mensaxe ningunha nin visionado dentro do número de días escollido. Se non introduces un número todos os temas serán eliminados. Por omisión, non se eliminarán temas nos cales a votación estea aínda activa nin tampouco notas nin anuncios.',

	'FORUM_PRUNE'		=> 'Purga de foro',

	'NO_PRUNE'			=> 'Non hai foros purgados',

	'SELECTED_FORUM'	=> 'Foro Seleccionado',
	'SELECTED_FORUMS'	=> 'Foros seleccionados',

	'POSTS_PRUNED'					=> 'Mensaxes purgadas',
	'PRUNE_ANNOUNCEMENTS'			=> 'Purgar Anuncios',
	'PRUNE_FINISHED_POLLS'			=> 'Purgar enquisas pechadas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Eliminar temas con enquisas que remataron.',
	'PRUNE_FORUM_CONFIRM'			=> 'Estas certo de querer purgar os foros seleccionados coa configuración especificada? Unha vez eliminados, non hai xeito posible de recuperar os temas e mensaxes purgadas.',
	'PRUNE_NOT_POSTED'				=> 'Días dende a última mensaxe publicada',
	'PRUNE_NOT_VIEWED'				=> 'Días dende a última ollada',
	'PRUNE_OLD_POLLS'				=> 'Purgar Enquisas Vellas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Eliminar temas sen votos dentro do prazo.',
	'PRUNE_STICKY'					=> 'Purgar Destacados',
	'PRUNE_SUCCESS'					=> 'Purgado de foros correcto',

	'TOPICS_PRUNED'		=> 'Temas purgados',
));

?>