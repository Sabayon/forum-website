<?php
/**
*
* acp_forums [Polski]
*
* @package language
* @version $Id: forums.php 9896.1 2009-10-09 Ronnie $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Czas od napisania ostatniego postu',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Liczba dni od napisania ostatniego postu w wątku, po jakiej wątek jest usuwany.',
	'AUTO_PRUNE_FREQ'			=> 'Częstotliwość czyszczenia',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Liczba dni między kolejnymi czyszczeniami.',
	'AUTO_PRUNE_VIEWED'			=> 'Czas od ostatniego zobaczenia wątku',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Liczba dni od ostatniego zobaczenia wątku, po jakiej wątek jest usuwany.',

	'CONTINUE'						=> 'Kontynuuj',
	'COPY_PERMISSIONS'				=> 'Skopiuj uprawnienia z',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'W celu ułatwienia procesu ustawienia uprawnień dostępu do nowego działu, możesz skopiować uprawnienia z innego działu.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Po utworzeniu tego działu, wszyscy użytkownicy i grupy otrzymają takie same uprawnienia dostępu do tego działu, jakie mają do wybranego w tym polu. Jeśli nie wybierzesz żadnego działu, nowo utworzony dział nie będzie widoczny, póki nie przyznasz użytkownikom i grupom dostępu do niego.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Jeśli postanowisz skopiować uprawnienia, wszyscy użytkownicy i grupy otrzymają takie same uprawnienia dostępu do tego działu, jakie mają do wybranego w tym polu. Spowoduje to nadpisanie wcześniej ustawionych uprawnień dostępu do tego działu wszyskich użytkowników i grup przez uprawnienia dostępu do wybranego tu działu. Jeśli nie wybierzesz żadnego działu, obecne uprawnienia zostaną zachowane.',
	'COPY_TO_ACL'					=> 'Alternatywnie, możesz też %sustawić uprawnienia%s dostępu do tego forum.',
	'CREATE_FORUM'					=> 'Utwórz nowy dział',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Usuń zawartość lub przenieś do działu',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Usuń poddziały lub przenieś do działu',
	'DEFAULT_STYLE'						=> 'Domyślny styl',
	'DELETE_ALL_POSTS'					=> 'Usuń posty',
	'DELETE_SUBFORUMS'					=> 'Usuń poddziały i posty',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Włącz aktywne wątki',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Jeśli włączone, aktywne wątki w wybranych poddziałach będą wyświetlane pod listą poddziałów przy wyświetlaniu zawartości kategorii.',

	'EDIT_FORUM'					=> 'Edytuj dział',
	'ENABLE_INDEXING'				=> 'Włącz indeksowanie',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Jeśli włączone, posty napisane w tym dziale będą indeksowane przez wyszukiwarkę.',
	'ENABLE_POST_REVIEW'			=> 'Włącz przegląd postów',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Jeśli włączone, użytkownik może przejrzeć jeszcze raz swój post, jeśli w wątku został(y) napisany(e) nowy(e) post(y), podczas, gdy on pisał swój post. Opcja ta powinna zostać wyłączona dla działów gawędziarskich.',
	'ENABLE_QUICK_REPLY'			=> 'Włącz szybką odpowiedź',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Jeśli włączone, użytkownicy mogą odpisać w wątku za pomocą formularza szybkiej odpowiedzi. Jeśli globalne ustawienie szybkiej odpowiedzi jest wyłączone lub użytkownik nie ma uprawnień do pisania w danym dziale, szybka odpowiedź nie będzie wyświetlana, niezależnie od tego ustawienia.',
	'ENABLE_RECENT'					=> 'Włącz aktywne wątki',
	'ENABLE_RECENT_EXPLAIN'			=> 'Jeśli włączone, wątki napisane w tym dziale będą wyświetlane na liście aktywnych wątków.',
	'ENABLE_TOPIC_ICONS'			=> 'Włącz ikony postów i wątków',

	'FORUM_ADMIN'						=> 'Zarządzanie działami',
	'FORUM_ADMIN_EXPLAIN'				=> 'W phpBB3 nie ma kategorii w rozumieniu z phpBB2, wszystko jest oparte na działach. Każdy dział może mieć dowolną liczbę poddziałów i możesz wybrać czy ma być możliwość pisania w nim, czy nie (tzn. czy ma zachowywać się jak kategoria z phpBB2). Tutaj możesz dodawać, edytować, usuwać, blokować i odblokowywać pojedyncze działy oraz zmieniać ich ustawienia. Jeśli wątki i posty w nich uległy desynchronizacji, możesz też ponownie zsynchronizować dział. <br /><strong style="color:red;">Aby nowo utworzone działy były wyświetlane, musisz skopiować albo ustawić uprawnienia dostępu do nich!</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Włącz automatyczne oczyszczanie',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Oczyszcza dział z wątków, ustaw, na jakich zasadach to robić poniżej.',
	'FORUM_CREATED'						=> 'Dział został utworzony.',
	'FORUM_DATA_NEGATIVE'				=> 'Ustawienia oczyszczania nie mogą być ujemne.',
	'FORUM_DESC_TOO_LONG'				=> 'Opis działu jest za długi, musi być krótszy niż 4 000 znaków.',
	'FORUM_DELETE'						=> 'Usuń dział',
	'FORUM_DELETE_EXPLAIN'				=> 'Za pomocą poniższego formularza możesz usunąć dział. Jeśli można w nim pisać, możesz też wybrać gdzie umieścić wszystkie wątki (lub poddziały), które zawiera.',
	'FORUM_DELETED'						=> 'Dział został usunięty.',
	'FORUM_DESC'						=> 'Opis',
	'FORUM_DESC_EXPLAIN'				=> 'Wprowadzony kod HTML zostanie wyświetlony tak, jak go wpiszesz.',
	'FORUM_EDIT_EXPLAIN'				=> 'Poniższy formularz pozwoli Ci zmienić ustawienia tego działu. Pamiętaj, że wiele ustawień możesz też zmienić poprzez uprawnienia.',
	'FORUM_IMAGE'						=> 'Obraz działu',
	'FORUM_IMAGE_EXPLAIN'				=> 'Ścieżka od głównego katalogu phpBB do dodatkowego obrazka powiązanego z tym działem.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Podany obraz działu nie istnieje',
	'FORUM_LINK_EXPLAIN'				=> 'Pełny adres URL (włącznie z protokołem, np.: <samp>http://</samp>) do miejsca, w które użytkownik zostanie przeniesiony po kliknięciu na ten dział, np.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Licz przekierowania',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Zapisuje liczbę kliknięć na ten dział-link.',
	'FORUM_NAME'						=> 'Nazwa działu',
	'FORUM_NAME_EMPTY'					=> 'Musisz podać nazwę dla tego działu.',
	'FORUM_PARENT'						=> 'Dział nadrzędny',
	'FORUM_PASSWORD'					=> 'Hasło do działu',
	'FORUM_PASSWORD_CONFIRM'			=> 'Potwierdź hasło do działu',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Ustaw tylko, jeśli podałeś hasło do działu.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Ustawia hasło dla tego działu, lepiej jednak użyć systemu uprawnień.',
	'FORUM_PASSWORD_UNSET'				=> 'Usuń hasło do działu',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Zaznacz, jeśli chcesz usunąć hasło do działu.',
	'FORUM_PASSWORD_OLD'				=> 'Hasło do działu używa starego szyfru i powinno zostać zmienione.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Wpisane hasła się nie zgadzają.',
	'FORUM_PRUNE_SETTINGS'				=> 'Ustawienia oczyszczania działu',
	'FORUM_RESYNCED'					=> 'Dział „%s” został ponownie zsynchronizowany.',
	'FORUM_RULES_EXPLAIN'				=> 'Regulamin działu jest wyświetlany na wszystkich stronach w tym dziale.',
	'FORUM_RULES_LINK'					=> 'Link do regulaminu działu',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Możesz tutaj podać adres URL strony/postu zawierającego regulamin tego działu. Ustawienie to nadpisze podany tekst regulaminu działu.',
	'FORUM_RULES_PREVIEW'				=> 'Podgląd regulaminu działu',
	'FORUM_RULES_TOO_LONG'				=> 'Regulamin działu jest za długi, musi być krótszy niż 4 000 znaków.',
	'FORUM_SETTINGS'					=> 'Ustawienia działu',
	'FORUM_STATUS'						=> 'Status działu',
	'FORUM_STYLE'						=> 'Styl działu',
	'FORUM_TOPICS_PAGE'					=> 'Wątków na stronę',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Wartość inna niż zero nadpisze domyślne ustawienie.',
	'FORUM_TYPE'						=> 'Typ działu',
	'FORUM_UPDATED'						=> 'Informacje o dziale zostały zmienione.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Chcesz zmienić dział, w którym można pisać, w link. Przenieś wszystkie poddziały z tego działu zanim to zrobisz, ponieważ po zmianie tego działu na link nie będziesz mógł zobaczyć poddziałów mu przypisanych.',

	'GENERAL_FORUM_SETTINGS'	=> 'Ogólne ustawienia działu',

	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'Wymień poddział w opisie działu nadrzędnego',
	'LIST_INDEX_EXPLAIN'		=> 'Wyświetla nazwę tego działu jako link na stronie głównej i w innych miejscach w opisie jego działu nadrzędnego.',
	'LIST_SUBFORUMS'			=> 'Wyświetl poddziały w opisie',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Jeśli poddziały tego działu mają włączoną opcję „Wymień poddział w opisie działu nadrzędnego”, wyświetla je pod jego opisem.',
	'LOCKED'					=> 'Zablokowany',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Dział, do którego chciałeś przenieść posty, nie jest działem, w którym można pisać. Wybierz dział, w którym można pisać.',
	'MOVE_POSTS_TO'					=> 'Przenieś posty do',
	'MOVE_SUBFORUMS_TO'				=> 'Przenieś poddziały do',

	'NO_DESTINATION_FORUM'			=> 'Nie wybrałeś działu, do którego zawartość ma zostać przeniesiona.',
	'NO_FORUM_ACTION'				=> 'Nie wybrałeś, co ma się stać z zawartością forum',
	'NO_PARENT'						=> 'Brak działu nadrzędnego',
	'NO_PERMISSIONS'				=> 'Nie kopiuj uprawnień',
	'NO_PERMISSION_FORUM_ADD'		=> 'Nie masz uprawnień do dodawania działów.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nie masz uprawnień do edytowania działów.',

	'PARENT_IS_LINK_FORUM'		=> 'Wybrany dział nadrzędny jest działem - linkiem. Działy - linki nie moga zawierać innych działów, wybierz inny dział.',
	'PARENT_NOT_EXIST'			=> 'Dział nadrzędny nie istnieje.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Usuwaj ogłoszenia',
	'PRUNE_STICKY'				=> 'Usuwaj przyklejone',
	'PRUNE_OLD_POLLS'			=> 'Usuwaj stare ankiety',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Usuwa również wątki z ankietami.',

	'REDIRECT_ACL'	=> 'Teraz możesz %sustawić uprawnienia dostępu do tego działu%s.',

	'SYNC_IN_PROGRESS'			=> 'Synchronizacja działu',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Aktualnie synchronizuję wątki %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategoria',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Niezablokowany',
));

?>