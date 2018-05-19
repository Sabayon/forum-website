<?php
/** 
*
* acp_database [Galician]
*
* @package language
* @version $Id: database.php 9765 2009-07-17 10:11:10Z bantu $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Desde aquí podes realizar copias de respaldo de todos os teus datos en relación co phpBB. Poderás gardar o arquivo resultante no teu cartafol store/ ou descargalo directamente. Dependendo da configuración do teu servidor poderás comprimilo en diversos formatos. Se queres incluir algunhas táboas "á medida" adicionais, enuméraas no campo de táboas adicional, separadas por vírgulas.',
	'ACP_RESTORE_EXPLAIN'	=> 'Isto restaurará por completo todas as táboas do phpBB a partires dun arquivo gardado. Podes <u>escoller</u> entre subir o arquivo da copia de respaldo a través deste formulario ou subilo manualmente ao servidor. Se o teu servidor o soporta, podes usar un arquivo de texto comprimido con gzip ou bzip2 que posteriormente será descomprimido de xeito automático. <b>ADVERTENCIA</b> Isto vai sobreescribir todos os datos actuais. O proceso de restauración pode levar un chisco, polo que non debes saír desta páxina até que remate. As copias de seguridade gárdanse no cartafol <samp>store/</samp> e suponse que foron xerados coa funcionalidade de copia de seguridade do phpBB. A restauración de copias de seguridade non creadas co sistema integrado poden funcionar pero tamén pode que non funcionen.',

	'BACKUP_DELETE'		=> 'O ficheiro coa copia de respaldo foi eliminado correctamente',
	'BACKUP_INVALID'	=> 'O arquivo seleccionado para respaldar é inválido',
	'BACKUP_OPTIONS'	=> 'Opcións de copia de respaldo',
	'BACKUP_SUCCESS'	=> 'O ficheiro coa copia de respaldo foi creado correctamente',
	'BACKUP_TYPE'		=> 'Tipo de copia de respaldo',

	'DATABASE'			=> 'Utilidades do banco de datos',
	'DATA_ONLY'			=> 'Só os datos',
	'DELETE_BACKUP'		=> 'Eliminar Copia de Respaldo',
	'DELETE_SELECTED_BACKUP'	=> 'Estás certo de querer eliminar a copia de seguridade seleccionada?',
	'DESELECT_ALL'		=> 'Deseleccionar todo',
	'DOWNLOAD_BACKUP'	=> 'Descargar Copia de Respaldo',

	'FILE_TYPE'			=> 'Tipo de Arquivo',
	'FILE_WRITE_FAIL'	=> 'Non foi posíbel escribir o arquivo no cartafol de almacenaxe.',
	'FULL_BACKUP'		=> 'Completo',

	'RESTORE_FAILURE'		=> 'Pode que o arquivo de copia de seguridade estea corrupto.',
	'RESTORE_OPTIONS'		=> 'Opcións de restauración',
	'RESTORE_SUCCESS'		=> 'A Base de Datos foi restaurada correctamente.<br /><br />O taboleiro debería atoparse de novo no mesmo estado no que estaba cando se fixo a copia de respaldo.',

	'SELECT_ALL'			=> 'Seleccionar todo',
	'SELECT_FILE'			=> 'Seleccionar un arquivo',
	'START_BACKUP'			=> 'Comezar a Copia de Respaldo',
	'START_RESTORE'			=> 'Comezar coa Restauración',
	'STORE_AND_DOWNLOAD'	=> 'Gardar e Descargar',
	'STORE_LOCAL'			=> 'Gardar arquivo localmente',
	'STRUCTURE_ONLY'		=> 'Só a estrutura',

	'TABLE_SELECT'		=> 'Selección da Táboa',
	'TABLE_SELECT_ERROR'=> 'Debes seleccionar unha táboa polo menos.',
));

?>