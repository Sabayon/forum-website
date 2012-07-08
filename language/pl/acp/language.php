<?php
/**
*
* acp_language [Polski]
*
* @package language
* @version $Id: language.php 9649 2009-09-27 LEW21 $
* @copyright (c) 2006 - 2009 phpBB3.PL Group
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

// INFORMACJA
//
// Wszystkie pliki językowe powinny używać kodowania UTF-8 i nie powinny zawierać znaku BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Pliki językowe administracji',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Ta strona daje Ci możliwość instalacji, edycji i usuwania pakietów językowych. Domyślny pakiet jest zaznaczony gwiazdką (*).',

	'EMAIL_FILES'			=> 'Szablony e-maili',

	'FILE_CONTENTS'				=> 'Zawartość pliku',
	'FILE_FROM_STORAGE'			=> 'Plik z folderu przechowawczego',

	'HELP_FILES'				=> 'Pliki pomocy',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Zainstalowane pakiety językowe',
	'INVALID_LANGUAGE_PACK'		=> 'Wybrane pakiety prawdopodobnie są nieprawidłowe. Sprawdź je i wgraj ponownie, jeżeli okaże się to konieczne.',
	'INVALID_UPLOAD_METHOD'		=> 'Wybrana metoda wgrywania jest nieprawidłowa, wybierz inną.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Szczegóły pakietu językowego zostały zmienione.',
	'LANGUAGE_ENTRIES'					=> 'Wpisy językowe',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Ta strona daje Ci możliwość zmiany istniejących wpisów językowych oraz tych jeszcze nieprzetłumaczonych.<br /><strong>Notatka:</strong> Po przeedytowaniu pliku językowego, zostanie on zapisany w osobnym folderze, żebyś go pobrał. Zmiany nie będą widziane przez Twoich użytkowników, póki nie zamienisz oryginalnych plików językowych na Twoim serwerze (przez ich wgranie).',
	'LANGUAGE_FILES'					=> 'Pliki językowe',
	'LANGUAGE_KEY'						=> 'Nazwa wpisu',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ten pakiet językowy został już zainstalowany.',
	'LANGUAGE_PACK_DELETED'				=> 'Pakiet językowy <strong>%s</strong> został usunięty. Język wszystkich użytkowników używających tego języka został zresetowany do domyślnego języka forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Szczegóły pakietu językowego',
	'LANGUAGE_PACK_INSTALLED'			=> 'Pakiet językowy <strong>%s</strong> został zainstalowany.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalna nazwa',
	'LANGUAGE_PACK_NAME'				=> 'Angielska nazwa',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Wybrany pakiet językowy nie istnieje.',
	'LANGUAGE_PACK_USED_BY'				=> 'Używany (łącznie z botami)',
	'LANGUAGE_VARIABLE'					=> 'Wartość',
	'LANG_AUTHOR'						=> 'Autor pakietu',
	'LANG_ENGLISH_NAME'					=> 'Angielska nazwa',
	'LANG_ISO_CODE'						=> 'Kod ISO',
	'LANG_LOCAL_NAME'					=> 'Lokalna nazwa',

	'MISSING_LANGUAGE_FILE'		=> 'Brakujący plik językowy: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Brakujące wpisy językowe',
	'MODS_FILES'				=> 'Pliki językowe MODów',

	'NO_FILE_SELECTED'				=> 'Nie wybrałeś/aś pliku językowego.',
	'NO_LANG_ID'					=> 'Nie wybrałeś/aś pakietu językowego.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Nie możesz usunąć domyślnego pakietu językowego.<br />Jeżeli chcesz usunąć ten pakiet językowy, zmień najpierw domyślny język swojego forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nie znaleziono niezainstalowanych pakietów językowych',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Usuń z folderu przechowawczego',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Wybierz format pobierania',
	'SUBMIT_AND_DOWNLOAD'		=> 'Wyślij i pobierz plik',
	'SUBMIT_AND_UPLOAD'			=> 'Wyślij i wgraj plik',

	'THOSE_MISSING_LANG_FILES'			=> 'Następujących plików językowych brakuje w folderze języka %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Następujących wpisów językowych brakuje w pakiecie językowym <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Niezainstalowane pakiety językowe',

	'UNABLE_TO_WRITE_FILE'		=> 'Plik nie mógł zostać zapisany do %s.',
	'UPLOAD_COMPLETED'			=> 'Wgrywanie zakończyło się pomyślnie.',
	'UPLOAD_FAILED'				=> 'Wgrywanie, z nieznanych powodów, nie udało się. Możesz zamienić odpowiedni plik ręcznie.',
	'UPLOAD_METHOD'				=> 'Metoda wgrywania',
	'UPLOAD_SETTINGS'			=> 'Ustawienia wgrywania',

	'WRONG_LANGUAGE_FILE'		=> 'Wybrany plik językowy jest niepoprawny.',
));

?>