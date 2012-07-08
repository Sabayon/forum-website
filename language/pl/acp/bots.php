<?php
/**
*
* acp_bots [Polski]
*
* @package language
* @version $Id: bots.php 8479.1 2009-10-19 Ronnie $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Zarządzanie botami',
	'BOTS_EXPLAIN'		=> '„Boty” lub „pająki”, to automatyczne programy używane zazwyczaj przez wyszukiwarki, aby aktualizować ich bazy danych. Ponieważ bardzo rzadko prawidłowo używają sesji, mogą mieszać w liczniku gości, zwiększać obciążenie i czasami błędnie indeksować strony. Tutaj mozesz zdefiniować listę takich botów, dzięki czemu problemy te nie będą występowały.',
	'BOT_ACTIVATE'		=> 'Aktywuj',
	'BOT_ACTIVE'		=> 'Aktywny',
	'BOT_ADD'			=> 'Dodaj bota',
	'BOT_ADDED'			=> 'Bot został dodany.',
	'BOT_AGENT'			=> 'Fragment identyfikatora',
	'BOT_AGENT_EXPLAIN'	=> 'Tekst zawarty w identyfikatorze przeglądarki bota służy do rozpoznania bota.',
	'BOT_DEACTIVATE'	=> 'Deaktywuj',
	'BOT_DELETED'		=> 'Bot został usunięty.',
	'BOT_EDIT'			=> 'Edytuj boty',
	'BOT_EDIT_EXPLAIN'	=> 'Tutaj możesz dodać lub edytować istniejącego bota. Możesz ustawić fragment identyfikatora bota albo jeden lub więcej adres(ów) IP. Możesz też wybrać styl i język, których bot będzie zawsze używał. Ustawiając prosty styl dla botów, możesz zmniejszyć wykorzystanie transferu. Pamiętaj o ustawieniu odpowiednich uprawnień dla grupy użytkowników „Boty”.',
	'BOT_LANG'			=> 'Język',
	'BOT_LANG_EXPLAIN'	=> 'Język, w którym bot widzi forum.',
	'BOT_LAST_VISIT'	=> 'Ostatnia wizyta',
	'BOT_IP'			=> 'Adres IP bota',
	'BOT_IP_EXPLAIN'	=> 'Może być częściowy, oddziel adresy przecinkiem.',
	'BOT_NAME'			=> 'Nazwa bota',
	'BOT_NAME_EXPLAIN'	=> 'Używana tylko do wyświetlania bota na liście botów i „kto przegląda forum”.',
	'BOT_NAME_TAKEN'	=> 'Na Twoim forum jest już użytkownik / bot o takiej nazwie.',
	'BOT_NEVER'			=> 'Nigdy',
	'BOT_STYLE'			=> 'Styl',
	'BOT_STYLE_EXPLAIN'	=> 'Styl, w którym bot widzi forum.',
	'BOT_UPDATED'		=> 'Bot został zmieniony.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Podany fragment identyfikatora jest podobny do tego, który aktualnie używasz. Wybierz inny fragment identyfikatora bota.',
	'ERR_BOT_NO_IP'				=> 'Podane adresy IP są nieprawidłowe albo nie można znaleźć hosta o podanej nazwie.',
	'ERR_BOT_NO_MATCHES'		=> 'Musisz podać fragment identyfikatora i/albo co najmniej jeden adres IP dla tego bota.',

	'NO_BOT'		=> 'Nie znaleziono bota o podanym ID.',
	'NO_BOT_GROUP'	=> 'Nie znaleziono specjalnej grupy dla botów.',
));

?>