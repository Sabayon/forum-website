<?php
/**
*
* acp_profile [Polski]
*
* @package language
* @version $Id: profile.php 9916.2 2009-10-19 Ronnie $
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

// Własne pola profilu
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Własne pole profilu zostało pomyślnie dodane.',
	'ALPHA_ONLY'			=> 'Litery alfabetu łacińskiego i cyfry',
	'ALPHA_SPACERS'			=> 'Litery alfabetu łacińskiego, cyfry, odstępy',
	'ALWAYS_TODAY'			=> 'Zawsze aktualna data',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Podaj opcje',
	'BOOL_TYPE_EXPLAIN'		=> 'Wybierz typ, albo pole do zaznaczenia albo pola radio. Wartość pola do zaznaczenia będzie wyświetlana tylko wtedy, jeśli pole zostanie zaznaczone. W takim przypadku wyświetlana będzie <strong>druga</strong> opcja. Wartość pól radio będzie wyświetlana zawsze.',

	'CHANGED_PROFILE_FIELD'		=> 'Pole profilu zostało zmienione.',
	'CHARS_ANY'					=> 'Dowolne znaki',
	'CHECKBOX'					=> 'Pole do zaznaczenia',
	'COLUMNS'					=> 'Kolumny',
	'CP_LANG_DEFAULT_VALUE'		=> 'Domyślna wartość',
	'CP_LANG_EXPLAIN'			=> 'Opis pola',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Opis tego pola wyświetlany użytkownikowi.',
	'CP_LANG_NAME'				=> 'Nazwa pola wyświetlana użytkownikowi',
	'CP_LANG_OPTIONS'			=> 'Opcje',
	'CREATE_NEW_FIELD'			=> 'Utwórz pole',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Co najmniej jedno pole nie zostało przetłumaczone. Podaj odpowiednie informacje po kliknięciu na link „Tłumacz”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Domyślny język [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'W tym polu profilu nie uzupełniono tekstów domyślnego języka.',
	'DEFAULT_VALUE'					=> 'Domyślna wartość',
	'DELETE_PROFILE_FIELD'			=> 'Usuń pole profilu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Czy jesteś pewien, że chcesz usunąć to pole profilu?',
	'DISPLAY_AT_PROFILE'			=> 'Wyświetl w panelu użytkownika',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Użytkownik może je zmienić w panelu użytkownika.',
	'DISPLAY_AT_REGISTER'			=> 'Wyświetl przy rejestracji',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Pole jest wyświetlane przy rejestracji.',
	'DISPLAY_ON_VT'					=> 'Wyświetl w wątku',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Pole jest wyświetlane w miniprofilu na stronie wątku.',
	'DISPLAY_PROFILE_FIELD'			=> 'Publicznie wyświetl pole profilu',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Pole profilu będzie wyświetlane we wszystkich miejscach ustawionych w ustawieniach obciążenia. Ustawienie na „nie” ukryje to pole na stronach wątków, profili i listy użytkowników.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Podaj opcje, każdą w osobnej linii.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Zauważ, że masz możliwość zmiany opisu własnych opcji oraz dodawania nowych opcji na końcu. Nie powinieneś dodawać nowych opcji między istniejącymi - może to spowodować błędne ustalenie, które opcje użytkownicy wybrali. Może się to stać również wtedy, gdy usuniesz opcje z środka. Usunięcie opcji umieszczonych na końcu spowoduje, że wybór użytkowników, którzy je wybrali, zostanie zresetowany do domyślnej opcji.',
	'EMPTY_FIELD_IDENT'				=> 'Pusty identyfikator pola',
	'EMPTY_USER_FIELD_NAME'			=> 'Podaj nazwę/tytuł pola',
	'ENTRIES'						=> 'Wpisy',
	'EVERYTHING_OK'					=> 'Wszystko OK',

	'FIELD_BOOL'				=> 'Logiczna (tak/nie)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Opis pola',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Opis tego pola wyświetlany użytkownikowi.',
	'FIELD_DROPDOWN'			=> 'Lista wyboru',
	'FIELD_IDENT'				=> 'Identyfikator pola',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Pole o wybranym identyfikatorze już istnieje, wybierz inny.',
	'FIELD_IDENT_EXPLAIN'		=> 'Identyfikator pola to nazwa używana do identyfikowania pola profilu w bazie danych i szablonach.',
	'FIELD_INT'					=> 'Liczby',
	'FIELD_LENGTH'				=> 'Długość pola tekstowego',
	'FIELD_NOT_FOUND'			=> 'Pole profilu nie zostało znalezione.',
	'FIELD_STRING'				=> 'Pole tekstowe (jedna linijka)',
	'FIELD_TEXT'				=> 'Pole tekstowe (wiele linijek)',
	'FIELD_TYPE'				=> 'Typ pola',
	'FIELD_TYPE_EXPLAIN'		=> 'Później już nie będziesz mógł zmienić typu.',
	'FIELD_VALIDATION'			=> 'Możliwa zawartość pola',
	'FIRST_OPTION'				=> 'Pierwsza opcja',

	'HIDE_PROFILE_FIELD'			=> 'Ukryj pole profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Ukrywa to pole przed wszystkimi użytkownikami, z wyjątkiem danego użytkownika, administratorów i moderatorów. Jeśli opcja „Wyświetl w panelu użytkownika” jest wyłączona, użytkownik nie może oglądać oraz zmieniać wartości tego pola (może ono być zmieniane tylko przez administratorów).',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Identyfikator pola może zawierać tylko małe litery alfabetu łacińskiego i podkreślnik (_)',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identyfikator pola może mieć maksymalnie 17 znaków',
	'ISO_LANGUAGE'				=> 'Język [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Ustawienia specyficzne dla języka [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maksymalna liczba znaków',
	'MAX_FIELD_NUMBER'		=> 'Najwyższa dozwolona liczba',
	'MIN_FIELD_CHARS'		=> 'Minimalna liczba znaków',
	'MIN_FIELD_NUMBER'		=> 'Najniższa dozwolona liczba',

	'NO_FIELD_ENTRIES'			=> 'Nie zdefiniowano wpisów',
	'NO_FIELD_ID'				=> 'Nie podano identyfikatora pola.',
	'NO_FIELD_TYPE'				=> 'Nie podano typu pola.',
	'NO_VALUE_OPTION'			=> 'Opcja używana w przypadku braku wyboru',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Jeśli pole jest wymagane, forum nie pozwoli użytkownikowi wybrać tej opcji.',
	'NUMBERS_ONLY'				=> 'Liczby',

	'PROFILE_BASIC_OPTIONS'		=> 'Podstawowe opcje',
	'PROFILE_FIELD_ACTIVATED'	=> 'Pole profilu zostało włączone.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Pole profilu zostało wyłączone.',
	'PROFILE_LANG_OPTIONS'		=> 'Opcje zależne od języka',
	'PROFILE_TYPE_OPTIONS'		=> 'Opcje zależne od typu pola',

	'RADIO_BUTTONS'				=> 'Pola radio',
	'REMOVED_PROFILE_FIELD'		=> 'Pole profilu zostało usunięte.',
	'REQUIRED_FIELD'			=> 'Pole wymagane',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Wymaga uzupełnienia pola przez użytkownika lub administratora. Jeśli opcja „Wyświetl przy rejestracji” jest wyłączona, będzie wymagane tylko gdy użytkownik będzie modyfikował swój profil.',
	'ROWS'						=> 'Wiersze',

	'SAVE'							=> 'Zapisz',
	'SECOND_OPTION'					=> 'Druga opcja',
	'STEP_1_EXPLAIN_CREATE'			=> 'Tutaj możesz podać podstawowe parametry nowego pola profilu. Informacje te są wymagane w drugim kroku, gdzie będziesz mógł ustawić pozostałe opcje i dodatkowo poprawić pole profilu.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Tutaj możesz zmienić podstawowe parametry tego pola profilu. Odpowiednie opcje zostaną przeliczone w kroku drugim.',
	'STEP_1_TITLE_CREATE'			=> 'Dodaj pole profilu',
	'STEP_1_TITLE_EDIT'				=> 'Zmień pole profilu',
	'STEP_2_EXPLAIN_CREATE'			=> 'Tutaj możesz ustawić dodatkowe parametry.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Tutaj możesz zmienić dodatkowe parametry.<br /><strong>Zmiany w polach profilu nie zmienią niczego w przypadku pól już ustawionych przez użytkowników.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opcje zależne od typu pola',
	'STEP_2_TITLE_EDIT'				=> 'Opcje zależne od typu pola',
	'STEP_3_EXPLAIN_CREATE'			=> 'Masz więcej niż jeden pakiet językowy, więc musisz ustawić teksty wyświetlane w innych językach. Możesz też zrobić to później, pole będzie wyświetlane w domyślnym języku.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Masz więcej niż jeden pakiet językowy, więc musisz ustawić teksty wyświetlane w innych językach. Możesz też zrobić to później, pole będzie wyświetlane w domyślnym języku.',
	'STEP_3_TITLE_CREATE'			=> 'Pozostałe języki',
	'STEP_3_TITLE_EDIT'				=> 'Języki',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Podaj domyślny tekst do wyświetlania. Pozostaw puste, jeśli pole ma być wyświetlane jako puste.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Podaj domyślny tekst do wyświetlania. Pozostaw puste, jeśli pole ma być wyświetlane jako puste.',
	'TRANSLATE'						=> 'Przetłumacz',

	'USER_FIELD_NAME'	=> 'Nazwa pola wyświetlana użytkownikowi',

	'VISIBILITY_OPTION'				=> 'Opcje wyświetlania',
));

?>