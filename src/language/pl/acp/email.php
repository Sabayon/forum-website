<?php
/**
*
* acp_email [Polski]
*
* @package language
* @version $Id: email.php 8479.1 2009-08-30 Ronnie $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Ta strona daje Ci możliwość wysłania e-maila do wszystkich użytkowników Twojego forum lub wszystkich należących do wybranej grupy, <strong>mających włączoną opcję otrzymywania e-maili</strong>. Wg domyślnych ustawień, skrypt wysyła jeden e-mail do 50 odbiorców, przy większej liczbie odbiorców zostanie wysłane więcej e-maili. Jeżeli wysyłasz e-mail do większej grupy ludzi, to bądź cierpliwy i po kliknięciu na przycisk „Wyślij” nie przerywaj ładowania strony. To normalne, że masowe rozsyłanie e-maili trwa dłuższą chwilę. Zostaniesz powiadomiony, gdy skrypt zakończy rozsyłanie wiadomości.',
	'ALL_USERS'						=> 'Wszyscy użytkownicy',

	'COMPOSE'				=> 'Napisz',

	'EMAIL_SEND_ERROR'		=> 'Podczas wysyłania e-maila wystąpił przynajmniej jeden błąd. Zajrzyj do %slogu błędów%s, aby dowiedzieć się, co dokładnie się stało.',
	'EMAIL_SENT'			=> 'Wiadomość została wysłana.',
	'EMAIL_SENT_QUEUE'		=> 'Wiadomość została dodana do kolejki wysyłania.',

	'LOG_SESSION'			=> 'Zapisz sesję wysyłania e-maili w logu błędów',

	'SEND_IMMEDIATELY'		=> 'Wyślij natychmiast',
	'SEND_TO_GROUP'			=> 'Wyślij do grupy',
	'SEND_TO_USERS'			=> 'Wyślij do użytkowników',
	'SEND_TO_USERS_EXPLAIN'	=> 'Wpisanie nazw tutaj nadpisze wybór grupy zaznaczonej powyżej. Wpisz każdą nazwę użytkownika w osobnej linii.',

	'MAIL_HIGH_PRIORITY'	=> 'Wysoki',
	'MAIL_LOW_PRIORITY'		=> 'Niski',
	'MAIL_NORMAL_PRIORITY'	=> 'Normalny',
	'MAIL_PRIORITY'			=> 'Priorytet wiadomości',
	'MASS_MESSAGE'			=> 'Twoja wiadomość',
	'MASS_MESSAGE_EXPLAIN'	=> 'Weź pod uwagę, że możesz użyć tylko zwykłego tekstu. Wszelki kod zostanie usunięty przed wysłaniem.',

	'NO_EMAIL_MESSAGE'		=> 'Musisz wpisać treść wiadomości.',
	'NO_EMAIL_SUBJECT'		=> 'Musisz wpisać temat wiadomości.',
));

?>