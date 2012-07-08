<?php
/**
*
* acp_ban [Polski]
*
* @package language
* @version $Id: ban.php 9727 2009-09-24 LEW21 $
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

// Banowanie
$lang = array_merge($lang, array(
	'1_HOUR'		=> 'godzina',
	'30_MINS'		=> 'pół godziny',
	'6_HOURS'		=> '6 godzin',

	'ACP_BAN_EXPLAIN'	=> 'Tutaj możesz kontrolować banowanie użytkowników po nazwie, adresie IP albo e-mailu. Banowanie pozwala uniemożliwić użytkownikowi dostęp do wszystkich części forum. Jeśli chcesz, możesz podać krótki (maksymalnie 3 000 znaków) powód bana. Będzie wyświetlany w logu aktywności administratorów. Możesz też określić czas trwania bana. Jeśli chcesz, żeby ban się skończył konkretnego dnia, a nie po określonym czasie, z listy „Długość bana” wybierz <span style="text-decoration: underline;">Do</span> i wpisz datę w formacie <kbd>RRRR-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Wyłącz z bana',
	'BAN_LENGTH'			=> 'Długość bana',
	'BAN_REASON'			=> 'Powód bana',
	'BAN_GIVE_REASON'		=> 'Powód wyświetlany zbanowanemu',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista banów została zmieniona.',
	'BANNED_UNTIL_DATE'		=> 'do %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (do %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Zbanuj adres(y) e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Użyj tej funkcji, aby wyłączyć podany(e) adres(y) e-mail ze wszystkich obecnych banów.',
	'EMAIL_BAN_EXPLAIN'			=> 'Aby podać więcej, niż jeden adres e-mail, wpisz każdy w nowej linii. Aby za jednym razem zbanować pulę adresów, użyj *, np. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>',
	'EMAIL_NO_BANNED'			=> 'Nie ma zbanowanych adresów e-mail',
	'EMAIL_UNBAN'				=> 'Odbanuj lub anuluj wyłączenie adresów e-mail',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Możesz odbanować (lub anulować wyłączenie) wielu adresów e-mail naraz dzięki użyciu odpowiedniej dla Twojego komputera i przeglądarki kombinacji myszki i klawiatury (np. Ctrl + LPM). Wyłączone adresy e-mail są pogrubione.',

	'IP_BAN'					=> 'Zbanuj adres(y) IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Użyj tej funkcji, aby wyłączyć podany(e) adres(y) IP ze wszystkich obecnych banów.',
	'IP_BAN_EXPLAIN'			=> 'Aby podać więcej, niż jeden adres IP lub nazwę hosta, wpisz każdy w nowej linii. Aby za jednym razem zbanować pulę adresów IP, między pierwszym i ostatnim adresem z puli wstaw -, albo użyj *.',
	'IP_HOSTNAME'				=> 'Adresy IP albo nazwy hostów',
	'IP_NO_BANNED'				=> 'Nie ma zbanowanych adresów IP',
	'IP_UNBAN'					=> 'Odbanuj lub anuluj wyłączenie adresów IP',
	'IP_UNBAN_EXPLAIN'			=> 'Możesz odbanować (lub anulować wyłączenie) wielu adresów IP naraz dzięki użyciu odpowiedniej dla Twojego komputera i przeglądarki kombinacji myszki i klawiatury (np. Ctrl + LPM). Wyłączone adresy IP są pogrubione.',

	'LENGTH_BAN_INVALID'		=> 'Data musi mieć format <kbd>RRRR-MM-DD</kbd>.',

	'PERMANENT'		=> 'Na zawsze',

	'UNTIL'						=> 'Do',
	'USER_BAN'					=> 'Zbanuj konto(a) użytkownika(ów)',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Użyj tej funkcji, aby wyłączyć podanego(ych) użytkownika(ów) ze wszystkich obecnych banów.',
	'USER_BAN_EXPLAIN'			=> 'Możesz zbanować wielu użytkowników jednocześnie, wpisując nazwę każdego w nowej linii. Użyj funkcji <span style="text-decoration: underline;">Znajdź użytkownika</span>, aby automatycznie znaleźć i dodać jednego lub więcej użytkowników.',
	'USER_NO_BANNED'			=> 'Nie ma zbanowanych użytkowników',
	'USER_UNBAN'				=> 'Odbanuj lub anuluj wyłączenie kont użytkowników',
	'USER_UNBAN_EXPLAIN'		=> 'Możesz odbanować (lub anulować wyłączenie) wielu kont użytkowników naraz dzięki użyciu odpowiedniej dla Twojego komputera i przeglądarki kombinacji myszki i klawiatury (np. Ctrl + LPM). Wyłączone konta użytkowników są pogrubione.',


));

?>