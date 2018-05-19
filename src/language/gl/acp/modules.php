<?php
/** 
*
* acp_modules [Galician]
*
* @package language
* @version $Id: modules.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Aquí poderás xestionar todo tipo de módulos. Ten en conta que o PCA ten unha estrutura de menús de tres niveis (Categoría -> Categoría -> Módulo) xa que os outros teñen unha estrutura de menú de dous niveis (Categoría -> Módulo) que debe ser mantida. Repara tamén en que podes bloquearte a ti mesmo se desactivas ou eliminas os módulos responsábeis da propia xestión e configuración xeral dos mesmos.',
	'ADD_MODULE'					=> 'Engadir módulo',
	'ADD_MODULE_CONFIRM'			=> 'Estás seguro de querer engadir o módulo escollido ao modo seleccionado?',
	'ADD_MODULE_TITLE'				=> 'Engadir módulo',

	'CANNOT_REMOVE_MODULE'	=> 'Non é posible eliminar o módulo, fóronlle asignadas derivacións. Por favor elimina ou move todas as derivacións antes de executar esta acción.',
	'CATEGORY'				=> 'Categoría',
	'CHOOSE_MODE'			=> 'Escoller modo de módulo',
	'CHOOSE_MODE_EXPLAIN'	=> 'Escolle o modo do módulo que será utilizado.',
	'CHOOSE_MODULE'			=> 'Elixa módulo',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Escolle o ficheiro a ser nomeado por este módulo.',
	'CREATE_MODULE'			=> 'Crear novo módulo',

	'DEACTIVATED_MODULE'	=> 'Módulo desactivado',
	'DELETE_MODULE'			=> 'Módulo eliminado',
	'DELETE_MODULE_CONFIRM'	=> 'Estás seguro de que queres eliminar este módulo?',

	'EDIT_MODULE'			=> 'Editar módulo',
	'EDIT_MODULE_EXPLAIN'	=> 'Aquí podes inserir os parámetros específicos do módulo',

	'HIDDEN_MODULE'			=> 'Módulo oculto',

	'MODULE'					=> 'Módulo',
	'MODULE_ADDED'				=> 'Módulo engadido con éxito',
	'MODULE_DELETED'			=> 'Módulo eliminado con éxito',
	'MODULE_DISPLAYED'			=> 'Módulo visualizado',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Se non desexas visualizar este módulo, pero queres utilizalo, activa a opción non.',
	'MODULE_EDITED'				=> 'Módulo editado correctamente.',
	'MODULE_ENABLED'			=> 'Módulo activado',
	'MODULE_LANGNAME'			=> 'Nome do idioma do módulo',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Introducir o nome do módulo visualizado. Usa                      se o nome é servido desde un ficheiro de idioma.',
	'MODULE_TYPE'				=> 'Tipo de módulo',

	'NO_CATEGORY_TO_MODULE'	=> 'Imposíbel converter a categoría en módulo. Por favor elimina ou move todas as derivacións antes de executar esta acción.',
	'NO_MODULE'				=> 'Non se atopou ningún módulo.',
	'NO_MODULE_ID'			=> 'Non se especificou ningún módulo.',
	'NO_MODULE_LANGNAME'	=> 'Non se especificou ningún nome de idioma de módulo.',
	'NO_PARENT'				=> 'Sen Pai',

	'PARENT'				=> 'Matriz',
	'PARENT_NO_EXIST'		=> 'Non existe o pai',

	'SELECT_MODULE'			=> 'Escolle un módulo',
));

?>