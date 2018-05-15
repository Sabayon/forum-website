<?php
/**
*
* acp_database [Polski]
*
* @package language
* @version $Id: database.php 9765 2009-09-27 LEW21 $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Ta strona daje Ci możliwość wykonania kopii zapasowej bazy danych phpBB3. Wynikowy plik możesz zapisać w katalogu <samp>store/</samp> i/lub pobrać na swój dysk twardy. Zależnie od konfiguracji Twojego serwera, możesz wybrać kilka formatów kompresji.',
	'ACP_RESTORE_EXPLAIN'	=> 'Tutaj możesz przywrócić wszystkie tabele phpBB z utworzonego wcześniej pliku kopii zapasowej. Jeśli Twój serwer wspiera kompresję gzip lub/i bzip2, pliki z kopią zapasową zapisane w tych formatach zostaną automatycznie zdekompresowane. <strong>UWAGA!</strong> Ta operacja spowoduje nadpisanie istniejących danych. Proces przywracania może zająć dużo czasu. Nie przerywaj go, dopóki nie pojawi się informacja o jego zakończeniu. Kopie zapasowe są generowane przez wbudowany system i zapisywane w katalogu <samp>store/</samp>. Przywracanie kopii zapasowej nie utworzonej przez ten system może zakończyć się niepowodzeniem.',

	'BACKUP_DELETE'		=> 'Plik z kopią zapasową został usunięty.',
	'BACKUP_INVALID'	=> 'Wybrany plik kopii zapasowej zawiera błędy.',
	'BACKUP_OPTIONS'	=> 'Opcje kopii zapasowej',
	'BACKUP_SUCCESS'	=> 'Plik z kopią zapasową został utworzony.',
	'BACKUP_TYPE'		=> 'Typ kopii zapasowej',

	'DATABASE'			=> 'Narzędzia bazy danych',
	'DATA_ONLY'			=> 'Tylko dane',
	'DELETE_BACKUP'		=> 'Usuń kopię',
	'DELETE_SELECTED_BACKUP'	=> 'Czy jesteś pewien, że chcesz usunąć wybraną kopię zapasową?',
	'DESELECT_ALL'		=> 'Odznacz wszystkie',
	'DOWNLOAD_BACKUP'	=> 'Pobierz kopię',

	'FILE_TYPE'			=> 'Typ pliku',
	'FILE_WRITE_FAIL'	=> 'Nie można zapisać pliku w folderze przechowawczym.',
	'FULL_BACKUP'		=> 'Pełna',

	'RESTORE_FAILURE'		=> 'Wybrany plik kopii zapasowej może być uszkodzony.',
	'RESTORE_OPTIONS'		=> 'Opcje przywracania',
	'RESTORE_SUCCESS'		=> 'Baza danych została pomyślnie przywrócona.<br /><br />Twoje forum powinno powrócić do stanu z momentu utworzenia wybranej kopii.',

	'SELECT_ALL'			=> 'Zaznacz wszystkie',
	'SELECT_FILE'			=> 'Wybierz plik',
	'START_BACKUP'			=> 'Utwórz kopię',
	'START_RESTORE'			=> 'Odzyskaj',
	'STORE_AND_DOWNLOAD'	=> 'Zapisz i pobierz',
	'STORE_LOCAL'			=> 'Zapisz plik lokalnie',
	'STRUCTURE_ONLY'		=> 'Tylko struktura',

	'TABLE_SELECT'		=> 'Wybierz tabele',
	'TABLE_SELECT_ERROR'=> 'Musisz wybrać przynajmniej jedną tabelę.',
));

?>