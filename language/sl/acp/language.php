<?php
/**
*
* acp_language.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-08-11 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'ACP_FILES'	=> 'Administratorske jezikovne datoteke',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Tukaj lahko namestite/odstranite jezikovne pakete.',
	'EMAIL_FILES'	=> 'Predloga elektronske pošte',
	'FILE_CONTENTS'	=> 'Vsebine datotek',
	'FILE_FROM_STORAGE'	=> 'Datoteka iz shranjevalne mape',
	'HELP_FILES'	=> 'Datoteke s pomočjo',
	'INSTALLED_LANGUAGE_PACKS'	=> 'Nameščeni jezikovni paketi',
	'INVALID_LANGUAGE_PACK'	=> 'Izbrani jezikovni paket očitno ni veljaven. Prosim, preverite jezikovni paket in ga ponovno naložite, če je to potrebno.',
	'INVALID_UPLOAD_METHOD'	=> 'Izbrana metoda nalaganja ni veljavna, prosim izberite drugo metodo.',
	'LANGUAGE_DETAILS_UPDATED'	=> 'Jezikovne podrobnosti uspešno posodobljene.',
	'LANGUAGE_ENTRIES'	=> 'Vnos jezikov',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'Tukaj je mogoče spremeniti vnešene ali še ne prevedene jezikovne pakete.<br /><strong>Opomba:</strong> Ko enkrat spremenite jezikovno datoteko, se bodo spremembe shranile v ločeno mapo, iz katere jih lahko presnamete. Spremembe ne bodo vidne vašim uporanikom, dokler ne nadomestite originalne jezikovne datoteke na vašem spletnem prostoru (z nalaganjem le-te).',
	'LANGUAGE_FILES'	=> 'Jezikovne datoteke',
	'LANGUAGE_KEY'	=> 'Jezikovni ključ',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ta jezikovni paket je že nameščen.',
	'LANGUAGE_PACK_DELETED'	=> 'Jezikovni paket <strong>%s</strong> je bil uspešno odstranjen. Vsi uporabniki, ki so uporabljali ta jezik so bili ponastavljeni na privzeti jezik.',
	'LANGUAGE_PACK_DETAILS'	=> 'Podrobnosti jezikovnega paketa',
	'LANGUAGE_PACK_INSTALLED'	=> 'Jezikovni paket <strong>%s</strong> je bil uspešno nameščen.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Lokalno ime',
	'LANGUAGE_PACK_NAME'	=> 'Ime',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Izbrani jezikovni paket ne obstaja.',
	'LANGUAGE_PACK_USED_BY'	=> 'Uporablja (vključno z roboti)',
	'LANGUAGE_VARIABLE'	=> 'Jezikovna spremenljivka',
	'LANG_AUTHOR'	=> 'Avtor/ji jezikovnega paketa',
	'LANG_ENGLISH_NAME'	=> 'Angleško ime',
	'LANG_ISO_CODE'	=> 'ISO koda',
	'LANG_LOCAL_NAME'	=> 'Lokalno ime',
	'MISSING_LANGUAGE_FILE'	=> 'Manjkajoča jezikovna datoteka: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Manjkajoče jezikovne spremenljivke',
	'MODS_FILES'	=> 'Modificirane jezikovne datoteke',
	'NO_FILE_SELECTED'	=> 'Niste določili jezikovne datoteke.',
	'NO_LANG_ID'	=> 'Niste določili jezikovnega paketa.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Ne morete odstraniti privzetega jezikovnega paketa.<br />če želite odstraniti ta jezikovni paket, morate najprej spremeniti privzet jezik vaše tabele.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ni odstranjenih jezikovnih paketov',
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Premakni v shranjevalno mapo',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Izberi format prenosa',
	'SUBMIT_AND_DOWNLOAD'	=> 'Oddaj in prenesi datoteko',
	'SUBMIT_AND_UPLOAD'	=> 'Oddaj in naloži datoteko',
	'THOSE_MISSING_LANG_FILES'	=> 'Naslednje jezikovne datoteke manjkajo v %s jezikovna mapa',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'Naslednje jezikovne spremenljivke manjkajo v <strong>%s</strong> jezikovni paket',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Odstranjeni jezikovni paketi',
	'UNABLE_TO_WRITE_FILE'	=> 'Datoteke ni bilo mogoče zapisati v %s.',
	'UPLOAD_COMPLETED'	=> 'Nalaganje je bilo uspešno končano.',
	'UPLOAD_FAILED'	=> 'Nalaganje je bilo neuspešno iz neznanih razlogov. Morali boste nadomestiti zahtevano datoteko ročno.',
	'UPLOAD_METHOD'	=> 'Metoda nalaganja',
	'UPLOAD_SETTINGS'	=> 'Nastavitve nalaganja',
	'WRONG_LANGUAGE_FILE'	=> 'Izbrana jezikovna datoteka je napačna.',
));

?>