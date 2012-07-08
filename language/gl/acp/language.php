<?php
/** 
*
* acp_language [Galician]
*
* @package language
* @version $Id: language.php 9649 2009-06-21 19:17:20Z bantu $
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
	'ACP_FILES'						=> 'Administración de arquivos de idioma',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Dende aquí podes instalar ou eliminar paquetes de idiomas. O paquete de idioma predeterminado márcase cun asterisco (*).',

	'EMAIL_FILES'			=> 'Modelos para Correo electrónico',

	'FILE_CONTENTS'				=> 'Contido do Arquivo',
	'FILE_FROM_STORAGE'			=> 'Arquivo do cartafol de almacenaxe',

	'HELP_FILES'				=> 'Arquivos de axuda',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paquetes de idioma instalados',
	'INVALID_LANGUAGE_PACK'		=> 'O paquete de idioma escollido semella non ser válido. Verifica o paquete de lingua e súbeo de novo de ser preciso.',
	'INVALID_UPLOAD_METHOD'		=> 'O método de subida seleccionado non é válido, por favor escolla outro método.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detalles de idioma actualizados correctamente.',
	'LANGUAGE_ENTRIES'					=> 'Entradas de idioma',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aquí podes cambiar entradas do paquete de idioma existente ou non traducidas ainda.<br /><strong>Aviso:</strong> Unha vez cambiado o ficheiro de idioma, os cambios serán almacenados dentro dun cartafol para descargar. Os cambios non serán vistos polos usuarios até que substitúas os ficheiros de idioma orixinal no teu espazo web (mediante transferencia).',
	'LANGUAGE_FILES'					=> 'Arquivos de Idioma',
	'LANGUAGE_KEY'						=> 'Clave de Idioma',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Este paquete de idioma xa está instalado.',
	'LANGUAGE_PACK_DELETED'				=> 'O paquete de idioma <b>%s</b> foi eliminado con éxito. Todos os usuarios que o estaban a empregar pasan ao idioma por defecto dos foros.',
	'LANGUAGE_PACK_DETAILS'				=> 'Pormenores do Paquete de Idioma',
	'LANGUAGE_PACK_INSTALLED'			=> 'O paquete de idioma <b>%s</b> foi instalado correctamente.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nome local',
	'LANGUAGE_PACK_NAME'				=> 'Nome',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'O paquete de idioma seleccionado non existe.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilizado por',
	'LANGUAGE_VARIABLE'					=> 'Variable de Idioma',
	'LANG_AUTHOR'						=> 'Autor do Paquete de Idioma',
	'LANG_ENGLISH_NAME'					=> 'Nome en inglés',
	'LANG_ISO_CODE'						=> 'Código ISO',
	'LANG_LOCAL_NAME'					=> 'Nome local',

	'MISSING_LANGUAGE_FILE'		=> 'Ficheiro de idioma desaparecido: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variables de Idioma non Atopadas',
	'MODS_FILES'				=> 'Ficheiros de linguaxe MOD',

	'NO_FILE_SELECTED'				=> 'Non especificaches un arquivo de idioma.',
	'NO_LANG_ID'					=> 'Non especificaches un paquete de idioma.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Non podes eliminar o paquete de idioma por defecto.<br />Se queres eliminar este paquete de idioma, muda primeiro o idioma por defecto do teu taboleiro.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Non se desinstalou paquete de idioma ningún',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Eliminar do cartafol de almacenaxe',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecciona o formato de descarga',
	'SUBMIT_AND_DOWNLOAD'		=> 'Enviar e Descargar Arquivo',
	'SUBMIT_AND_UPLOAD'			=> 'Enviar e Subir Arquivo',

	'THOSE_MISSING_LANG_FILES'			=> 'Os seguintes ficheiros de idioma están desaparecidos da %s carpeta de idiomas',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Faltan as seguintes variables de idioma están do <strong>%s</strong> paquete de idiomas',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paquetes de idioma sen instalar',

	'UNABLE_TO_WRITE_FILE'		=> 'Non se puido escribir o ficheiro en %s.',
	'UPLOAD_COMPLETED'			=> 'A subida foi completada',
	'UPLOAD_FAILED'				=> 'A subida fallou por algunha razón descoñecida. Pode que precises reemprazar de xeito manual o arquivo en cuestión.',
	'UPLOAD_METHOD'				=> 'Método de subida',
	'UPLOAD_SETTINGS'			=> 'Configuración de subidas',

	'WRONG_LANGUAGE_FILE'		=> 'O arquivo de idioma seleccionado non é válido',
));

?>