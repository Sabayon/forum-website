<?php
/**
*
* acp_language.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-06 - www.dea-portal.com
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
	'ACP_FILES'						=> 'Skedarët e gjuhës së Admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Këtu ju mund të instaloni/fshini paketat gjuhësore.',
	
	'EMAIL_FILES'			=> 'Maskat e-mail',
	
	'FILE_CONTENTS'				=> 'Përmbajtja e skedarëve',
	'FILE_FROM_STORAGE'			=> 'Skedar nga dosja e ruajtjes',
	
	'HELP_FILES'				=> 'Skedarët ndihmë',
	
	'INSTALLED_LANGUAGE_PACKS'	=> 'Paketat gjuhësore të instaluara',
	'INVALID_LANGUAGE_PACK'		=> 'Paketat gjuhësore të zgjedhura duken të pavlefshme. Ju lutemi të verifikoni paketën gjuhësore dhe t\'a ngarkoni përsëri nëse e nevojshme.',
	'INVALID_UPLOAD_METHOD'		=> 'Mënyra e zgjedhur e ngarkimit nuk është e vlefshme. Ju lutemi të zgjidhni një mënyrë tjetër.',
	
	'LANGUAGE_DETAILS_UPDATED'			=> 'Detajet e gjuhës u azhornuan me sukses.',
	'LANGUAGE_ENTRIES'					=> 'Përmbajtja e gjuhës',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Këtu ju mund të ndryshoni përmbajtjen e paketave gjuhësore ekzistuese ose atyre të papërkthyera.<br /><strong>Vini re:</strong> Pasi të keni ndryshuar një skedar gjuhe, ndryshimet do të ruhen në një dosje të veçantë nga ku mund t\'i shkarkoni. Ndryshimet nuk do të mund të shihen nga përdoruesit tuaj deri sa ju të mbivendosni skedarët origjinalë të gjuhës me ata të ndryshuar (duke i ngarkuar).',
	'LANGUAGE_FILES'					=> 'Skedarët e gjuhës',
	'LANGUAGE_KEY'						=> 'Çelësi i gjuhës',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Paketa gjuhësore është e instaluar.',
	'LANGUAGE_PACK_DELETED'				=> 'Paketa gjuhësore <strong>%s</strong> u fshi me sukses. Të gjithë përdoruesit që kishin zgjedhur përdorimin e kësaj gjuhe, janë resetuar në gjuhën e paracaktuar të bordit.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detajet e paketës gjuhësore',
	'LANGUAGE_PACK_INSTALLED'			=> 'Paketa gjuhësore <strong>%s</strong> u instalua me sukses.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Emri lokal',
	'LANGUAGE_PACK_NAME'				=> 'Emri',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Paketa gjuhësore e zgjedhur nuk ekziston.',
	'LANGUAGE_PACK_USED_BY'				=> 'Përdorur nga (përfshire robotët)',
	'LANGUAGE_VARIABLE'					=> 'Variabli i gjuhës',
	'LANG_AUTHOR'						=> 'Autori i paketës gjuhësore',
	'LANG_ENGLISH_NAME'					=> 'Emri anglisht',
	'LANG_ISO_CODE'						=> 'Kodi ISO',
	'LANG_LOCAL_NAME'					=> 'Emri lokal',
	
	'MISSING_LANGUAGE_FILE'		=> 'Skedarë gjuhe që mungojnë: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variabla gjuhe që mungojnë',
	'MODS_FILES'				=> 'Skedarët gjuhësor të MOD',
	
	'NO_FILE_SELECTED'				=> 'Ju nuk keni zgjedhur një skedar gjuhe.',
	'NO_LANG_ID'					=> 'Ju nuk keni zgjedhur një paketë gjuhësore.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ju nuk mund të fshini paketën gjuhësore të paracaktuar.<br />Nëse doni të fshini këtë paketë gjuhësore, në fillimi ndryshoni gjuhën e paracaktuar të bordit tuaj.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Asnjë paketë gjuhësore e pa instaluar',
	
	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Fshi nga dosja e ruajtjes',
	
	'SELECT_DOWNLOAD_FORMAT'	=> 'Zgjidh formatin e shkarkimit',
	'SUBMIT_AND_DOWNLOAD'		=> 'Ruaj dhe shkarko skedarin',
	'SUBMIT_AND_UPLOAD'			=> 'Ruaj dhe ngarko skedarin',
	
	'THOSE_MISSING_LANG_FILES'			=> 'Skedarët gjuhësorë të mëposhtëm mungojnë në dosjen %s të gjuhës',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Variablat gjuhësore të mëposhtme mungojnë në paketën gjuhësore <strong>%s</strong>',
	
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paketat gjuhësore të pa instaluara',
	
	'UNABLE_TO_WRITE_FILE'		=> 'Skedari nuk mund të shkruhet në %s.',
	'UPLOAD_COMPLETED'			=> 'Ngarkimi u kompletua me sukses.',
	'UPLOAD_FAILED'				=> 'Ngarkimi dështoi për arsye të panjohura. Mund t\'ju duhet të zëvendësoni skedarin përkatës manualisht.',
	'UPLOAD_METHOD'				=> 'Mënyra e ngarkimit',
	'UPLOAD_SETTINGS'			=> 'Opsionet e ngarkimit',
	
	'WRONG_LANGUAGE_FILE'		=> 'Skedari gjuhësor i zgjedhur është i pavlefshëm.',
));

?>