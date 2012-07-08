<?php
/**
*
* acp_language [Catalan]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_FILES'						=> 'Fitxers d’idioma de l’administrador',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Aquí podeu instal·lar/eliminar paquets d’idioma. El paquet d’idioma per defecte està marcat amb un asterisc (*).',

	'EMAIL_FILES'			=> 'Plantilles de correu electrònic',

	'FILE_CONTENTS'				=> 'Continguts del fitxer',
	'FILE_FROM_STORAGE'			=> 'Fitxer del directori d’emmagatzemament',

	'HELP_FILES'				=> 'Fitxers d’ajuda',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paquets d’idioma instal·lats',
	'INVALID_LANGUAGE_PACK'		=> 'El paquet d’idioma seleccionat no és vàlid. Verifiqueu el paquet d’idioma i pugeu-lo de nou si fes falta.',
	'INVALID_UPLOAD_METHOD'		=> 'El mètode de pujada seleccionat no és vàlid, trieu un mètode diferent.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'S’ha actualitzat la informació de l’idioma correctament.',
	'LANGUAGE_ENTRIES'					=> 'Entrades d’idioma',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aquí podeu canviar entrades del paquet d’idioma existents o que encara no estiguin traduïdes.<br /><strong>Nota:</strong> Un cop hagueu canviat un fitxer d’idioma, els canvis s’emmagatzemaran en un directori a part per que els baixeu. Els usuaris no veuran els canvis fins que reemplaceu els fitxers d’idioma originals pujant-los al vostre lloc web.',
	'LANGUAGE_FILES'					=> 'Fitxers d’idioma',
	'LANGUAGE_KEY'						=> 'Clau d’idioma',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Aquest paquet d’idioma ja està instal·lat.',
	'LANGUAGE_PACK_DELETED'				=> 'S’ha eliminat el paquet d’idioma <strong>%s</strong> correctament. A tots els usuaris que utilitzaven aquest idioma se’ls ha assignat l’idioma per defecte del fòrum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Informació del paquet d’idioma',
	'LANGUAGE_PACK_INSTALLED'			=> 'S’ha instal·lat el paquet d’idioma <strong>%s</strong> correctament.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nom local',
	'LANGUAGE_PACK_NAME'				=> 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'El paquet d’idioma seleccionat no existeix.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilitzat per (incloent-hi els robots)',
	'LANGUAGE_VARIABLE'					=> 'Variable d’idioma',
	'LANG_AUTHOR'						=> 'Autor del paquet d’idioma',
	'LANG_ENGLISH_NAME'					=> 'Nom en anglès',
	'LANG_ISO_CODE'						=> 'Codi ISO',
	'LANG_LOCAL_NAME'					=> 'Nom local',

	'MISSING_LANGUAGE_FILE'		=> 'Fitxer d’idioma absent: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variables d’idioma absent',
	'MODS_FILES'				=> 'Fitxers d’idioma dels MODs',

	'NO_FILE_SELECTED'				=> 'No heu especificat un fitxer d’idioma.',
	'NO_LANG_ID'					=> 'No heu especificat un paquet d’idioma.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'No podeu eliminar el paquet d’idioma per defecte.<br />Per eliminar aquest paquet d’idioma, canvieu abans l’idioma per defecte del fòrum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'No hi ha paquets d’idioma desinstal·lats',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Elimina’l del directori d’emmagatzemament',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccioneu el format de baixada',
	'SUBMIT_AND_DOWNLOAD'		=> 'Tramet i baixa el fitxer',
	'SUBMIT_AND_UPLOAD'			=> 'Tramet i puja el fitxer',

	'THOSE_MISSING_LANG_FILES'			=> 'Falten els fitxers d’idioma següents al directori d’idioma %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Falten les variables d’idioma següents al paquet d’idioma <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paquets d’idioma desinstal·lats',

	'UNABLE_TO_WRITE_FILE'		=> 'No s’ha pogut escriure el fitxer a  %s.',
	'UPLOAD_COMPLETED'			=> 'S’ha realitzat la pujada correctament.',
	'UPLOAD_FAILED'				=> 'La pujada ha fallat per causes desconegudes. És possible que us calgui reemplaçar el fitxer en questió manualment.',
	'UPLOAD_METHOD'				=> 'Mètode de pujada',
	'UPLOAD_SETTINGS'			=> 'Configuració de pujada',

	'WRONG_LANGUAGE_FILE'		=> 'El fitxer d’idioma seleccionat no és vàlid.',
));

?>