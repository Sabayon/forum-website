<?php
/**
*
* acp_modules [Polski]
*
* @package language
* @version $Id: modules.php 8479.1 2009-10-19 Ronnie $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Tutaj możesz zarządzać wszystkimi rodzajami modułów. Pamiętaj, że PA ma trójpoziomową strukturę (Kategoria -> Kategoria -> Moduł), a inne panele mają dwupoziomową (Kategoria -> Moduł). Nie możesz tego zmienić. Pamiętaj też, że możesz się zablokować, jeśli wyłączysz lub usuniesz moduły odpowiedzialne za zarządzanie modułami.',
	'ADD_MODULE'					=> 'Dodaj moduł',
	'ADD_MODULE_CONFIRM'			=> 'Czy jesteś pewien, że chcesz dodać wybrany moduł z wybranym trybem?',
	'ADD_MODULE_TITLE'				=> 'Dodaj moduł',

	'CANNOT_REMOVE_MODULE'	=> 'Nie można usunąć modułu, ponieważ ma dzieci. Usuń lub przenieś wszystkie dzieci, zanim to zrobisz.',
	'CATEGORY'				=> 'Kategoria',
	'CHOOSE_MODE'			=> 'Wybierz tryb modułu',
	'CHOOSE_MODE_EXPLAIN'	=> 'Wybierz tryb modułu, z którego chcesz korzystać.',
	'CHOOSE_MODULE'			=> 'Wybierz moduł',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Wybierz plik, w którym znajduje się kod modułu.',
	'CREATE_MODULE'			=> 'Utwórz nowy moduł',

	'DEACTIVATED_MODULE'	=> 'Wyłączony moduł',
	'DELETE_MODULE'			=> 'Usuń moduł',
	'DELETE_MODULE_CONFIRM'	=> 'Czy jesteś pewien, że chcesz usunąc ten moduł?',

	'EDIT_MODULE'			=> 'Edytuj moduł',
	'EDIT_MODULE_EXPLAIN'	=> 'Tutaj możesz podać ustawienia specyficzne dla typu modułu.',

	'HIDDEN_MODULE'			=> 'ukryty',

	'MODULE'					=> 'Moduł',
	'MODULE_ADDED'				=> 'Moduł został dodany.',
	'MODULE_DELETED'			=> 'Moduł został usunięty.',
	'MODULE_DISPLAYED'			=> 'Wyświetlaj moduł',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Jeśli nie chcesz wyświetlać modułu, ale chcesz go używać, ustaw tę opcję na nie.',
	'MODULE_EDITED'				=> 'Moduł został zmieniony.',
	'MODULE_ENABLED'			=> 'Włącz moduł',
	'MODULE_LANGNAME'			=> 'Nazwa modułu',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Podaj wyświetlaną nazwę modułu. Użyj nazwy wpisu w plikach językowych, aby z nich pobrać nazwę.',
	'MODULE_TYPE'				=> 'Typ modułu',

	'NO_CATEGORY_TO_MODULE'	=> 'Nie można zmienić kategorii w moduł. Usuń lub przenieś wszystkie dzieci, zanim to zrobisz.',
	'NO_MODULE'				=> 'Nie znaleziono modułu.',
	'NO_MODULE_ID'			=> 'Nie podano ID modułu.',
	'NO_MODULE_LANGNAME'	=> 'Nie podano nazwy modułu.',
	'NO_PARENT'				=> 'Nie wybrano rodzica modułu.',

	'PARENT'				=> 'Rodzic',
	'PARENT_NO_EXIST'		=> 'Rodzic nie istnieje.',

	'SELECT_MODULE'			=> 'Wybierz moduł',
));

?>