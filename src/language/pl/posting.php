<?php
/**
*
* posting [Polski]
*
* @package language
* @version $Id: posting.php 9742.1 2009-10-25 Ronnie $
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
	'ADD_ATTACHMENT'			=> 'Dodaj załącznik',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Jeśli chcesz dołączyć jeden lub więcej plików, uzupełnij pola poniżej.',
	'ADD_FILE'					=> 'Dodaj plik',
	'ADD_POLL'					=> 'Tworzenie ankiety',
	'ADD_POLL_EXPLAIN'			=> 'Jeśli chcesz dołączyć ankietę, uzupełnij pola poniżej.',
	'ALREADY_DELETED'			=> 'Wiadomość została już usunięta.',
	'ATTACH_QUOTA_REACHED'		=> 'Przekroczono maksymalną przestrzeń na dysku zajmowaną przez załączniki.',
	'ATTACH_SIG'				=> 'Dołącz podpis (można go zmienić w panelu użytkownika)',

	'BBCODE_A_HELP'				=> 'Załącznik wstawiony w treści: [attachment=]nazwa_pliku.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Pogrubienie: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Kod: [code]kod[/code]',
	'BBCODE_E_HELP'				=> 'Lista: dodaj element',
	'BBCODE_F_HELP'				=> 'Rozmiar: [size=85]mała[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s jest <em>wyłącznony</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s jest <em>włączony</em>',
	'BBCODE_I_HELP'				=> 'Pochylenie: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]lista[/list])',
	'BBCODE_LISTITEM_HELP'		=> 'Element listy: [*]tekst[/*]',
	'BBCODE_O_HELP'				=> 'Lista uporządkowana: [list=]tekst[/list]',
	'BBCODE_P_HELP'				=> 'Obrazek: [img]http://adres_www_obrazka[/img]',
	'BBCODE_Q_HELP'				=> 'Cytat: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Kolor: [color=red]tekst[/color]  Podpowiedź: możesz również opisać kolor HEXami',
	'BBCODE_U_HELP'				=> 'Podkreślenie: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Link: [url]http://adres_www[/url] or [url=http://adres_www]tekst[/url]',
	'BBCODE_D_HELP'				=> 'Animacja Flash: [flash=szerokość,wysokość]http://adres_www[/flash]',
	'BUMP_ERROR'				=> 'Nie można przesunąć tego wątku w górę od razu po ostatnim poście.',

	'CANNOT_DELETE_REPLIED'		=> 'Możesz usuwać tylko posty, na które jeszcze nie odpowiedziano.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Post został zablokowany. Nie możesz go edytować.',
	'CANNOT_EDIT_TIME'			=> 'Nie możesz już edytować ani usunąć tego postu.',
	'CANNOT_POST_ANNOUNCE'		=> 'Nie możesz publikować ogłoszeń.',
	'CANNOT_POST_STICKY'		=> 'Nie możesz przykleić wątku.',
	'CHANGE_TOPIC_TO'			=> 'Zmień typ wątku na',
	'CLOSE_TAGS'				=> 'Zamknij tagi',
	'CURRENT_TOPIC'				=> 'Bieżący wątek',

	'DELETE_FILE'				=> 'Usuń plik',
	'DELETE_MESSAGE'			=> 'Usuń wiadomość',
	'DELETE_MESSAGE_CONFIRM'	=> 'Czy na pewno chcesz usunąć tę wiadomość?',
	'DELETE_OWN_POSTS'			=> 'Możesz usuwać tylko swoje posty.',
	'DELETE_POST_CONFIRM'		=> 'Czy na pewno chcesz usunąć ten post?',
	'DELETE_POST_WARN'			=> 'Usuniętych postów nie da się odzyskać',
	'DISABLE_BBCODE'			=> 'Wyłącz BBCode',
	'DISABLE_MAGIC_URL'			=> 'Nie parsuj linków',
	'DISABLE_SMILIES'			=> 'Wyłącz uśmieszki',
	'DISALLOWED_CONTENT'		=> 'Plik został odrzucony, ponieważ zidentyfikowano go jako potencjalnie niebezpieczny.',
	'DISALLOWED_EXTENSION'		=> 'Rozszerzenie %s jest zablokowane.',
	'DRAFT_LOADED'				=> 'Załadowano kopię roboczą, możesz dokończyć pisanie postu.<br />Po jego wysłaniu kopia zostanie usunięta.',
	'DRAFT_LOADED_PM'			=> 'Załadowano kopię roboczą, możesz dokończyć pisanie prywatnej wiadomości.<br />Po jej wysłaniu kopia zostanie usunięta.',
	'DRAFT_SAVED'				=> 'Zapisano kopię roboczą.',
	'DRAFT_TITLE'				=> 'Tytuł kopii roboczej',

	'EDIT_REASON'				=> 'Powód edycji postu',
	'EMPTY_FILEUPLOAD'			=> 'Wysłany plik jest pusty.',
	'EMPTY_MESSAGE'				=> 'Musisz wpisać treść wiadomośći.',
	'EMPTY_REMOTE_DATA'			=> 'Nie można wysłać pliku, spróbuj wysłać go ręcznie.',

	'FLASH_IS_OFF'				=> '[flash] jest <em>wyłączony</em>',
	'FLASH_IS_ON'				=> '[flash] jest <em>włączony</em>',
	'FLOOD_ERROR'				=> 'Nie możesz wysłać następnego postu zaraz po poprzednim.',
	'FONT_COLOR'				=> 'Kolor tekstu',
	'FONT_COLOR_HIDE'			=> 'Ukryj kolor tekstu',
	'FONT_HUGE'					=> 'Wielki',
	'FONT_LARGE'				=> 'Duży',
	'FONT_NORMAL'				=> 'Normalny',
	'FONT_SIZE'					=> 'Rozmiar',
	'FONT_SMALL'				=> 'Mały',
	'FONT_TINY'					=> 'Malutki',

	'GENERAL_UPLOAD_ERROR'		=> 'Nie można wysłać załącznika do %s.',

	'IMAGES_ARE_OFF'			=> '[img] jest <em>wyłączony</em>',
	'IMAGES_ARE_ON'				=> '[img] jest <em>włączony</em>',
	'INVALID_FILENAME'			=> '%s to nieprawidłowa nazwa pliku.',

	'LOAD'						=> 'Wczytaj',
	'LOAD_DRAFT'				=> 'Wczytaj kopię roboczą',
	'LOAD_DRAFT_EXPLAIN'		=> 'Tutaj możesz wybrać kopię roboczą do wczytania, aby kontynuować pisanie postu. Aktualny post zostanie anulowany, wszystko co z nim związane zostanie usunięte. Możesz przeglądać, edytować i usuwać kopie robocze z poziomu swojego panelu użytkownika.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Musisz się zalogować, żeby przesuwać w górę wątki w tym dziale.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Musisz się zalogować, żeby usuwać posty w tym dziale.',
	'LOGIN_EXPLAIN_POST'		=> 'Musisz się zalogować, żeby pisać w tym dziale.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Musisz się zalogować, żeby cytować posty w tym dziale.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Musisz się zalogować, żeby odpowiadać w wątkach w tym dziale.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Maksymalny rozmiar tekstu to %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Animacje Flash mogą mieć maksymalnie %1$d pikseli wysokości.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Animacje Flash mogą mieć maksymalnie %1$d pikseli szerokości.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Obrazki mogą mieć maksymalnie %1$d pikseli wysokości.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Obrazki mogą mieć maksymalnie %1$d pikseli szerokości.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Wpisz tutaj treść wiadomości. Nie może mieć ona więcej niż <strong>%d</strong> znaków.',
	'MESSAGE_DELETED'			=> 'Wiadomość została usunięta.',
	'MORE_SMILIES'				=> 'Pokaż więcej uśmieszków',

	'NOTIFY_REPLY'				=> 'Powiadom mnie, jeśli ktoś odpowie',
	'NOT_UPLOADED'				=> 'Nie można wysłać pliku.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nie możesz usunąć istniejących opcji ankiety.',
	'NO_PM_ICON'				=> 'Brak',
	'NO_POLL_TITLE'				=> 'Musisz podać tytuł ankiety.',
	'NO_POST'					=> 'Wybrany post nie istnieje.',
	'NO_POST_MODE'				=> 'Nie podano typu postu.',

	'PARTIAL_UPLOAD'			=> 'Plik został wysłany tylko częściowo.',
	'PHP_SIZE_NA'				=> 'Załącznik ma za duży rozmiar.<br />Nie można określić maksymalnego rozmiaru zdefiniowanego w pliku php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Załącznik ma za duży rozmiar. Maksymalny rozmiar pliku to %1$d %2$s.<br />Liczba ta zapisana jest w pliku php.ini i nie może zostać zmieniona.',
	'PLACE_INLINE'				=> 'Wstaw w linii',
	'POLL_DELETE'				=> 'Usuń ankietę',
	'POLL_FOR'					=> 'Pozwól głosować przez',
	'POLL_FOR_EXPLAIN'			=> 'Wpisz 0 lub pozostaw puste, żeby pozwolić głosować zawsze.',
	'POLL_MAX_OPTIONS'			=> 'Pozwól wybrać',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Liczba opcji, które może wybrać każdy użytkownik.',
	'POLL_OPTIONS'				=> 'Opcje ankiety',
	'POLL_OPTIONS_EXPLAIN'		=> 'Umieść każdą opcję w osobnej linii. Możesz określić maks. <strong>%d</strong> opcji.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Umieść każdą opcję w osobnej linii. Możesz określić maks. <strong>%d</strong> opcji. Jeżeli usuniesz lub dodasz jakąś opcję, wszystkie głosy zostaną usunięte.',
	'POLL_QUESTION'				=> 'Tytuł ankiety',
	'POLL_TITLE_TOO_LONG'		=> 'Tytuł ankiety musi zawierać mniej niż 100 znaków.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Wielkość przeparsowanego tytułu Twojej ankiety jest za duża, usuń kilka BBCode’ów lub uśmieszków.',
	'POLL_VOTE_CHANGE'			=> 'Pozwól na zmianę głosu',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Zaznacz, aby pozwolić użytkownikom zmieniać swoje głosy.',
	'POSTED_ATTACHMENTS'		=> 'Załączniki',
	'POST_APPROVAL_NOTIFY'		=> 'Zostaniesz poinformowany, gdy to się stanie.',
	'POST_CONFIRMATION'			=> 'Potwierdzenie wizualne',
	'POST_CONFIRM_EXPLAIN'		=> 'Żeby zapobiec pisaniu postów przez automaty, forum wymaga wpisania kodu potwierdzającego. Kod jest widoczny na obrazku poniżej. Jeśli nie możesz go przeczytać, to skontaktuj się z %sadministratorem forum%s.',
	'POST_DELETED'				=> 'Post został usunięty.',
	'POST_EDITED'				=> 'Post został zmieniony.',
	'POST_EDITED_MOD'			=> 'Post został zmieniony, ale zanim zmiany zostaną wyświetlone, muszą zostać zaakceptowane przez moderatora.',
	'POST_GLOBAL'				=> 'Globalny',
	'POST_ICON'					=> 'Ikonka',
	'POST_NORMAL'				=> 'Zwykły',
	'POST_REVIEW'				=> 'Przegląd',
	'POST_REVIEW_EXPLAIN'		=> 'Przynajmniej jeden post został dopisany w tym wątku. Jeśli chcesz, możesz poprawić swój post.',
	'POST_REVIEW_EDIT'			=> 'Przegląd',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Post został zmieniony przez innego użytkownika w czasie gdy go edytowałeś. Możesz zechcieć zobaczyć obecną wersję postu i dostosować Twoje zmiany.',
	'POST_STORED'				=> 'Post został wysłany.',
	'POST_STORED_MOD'			=> 'Post został wysłany, ale zanim zostanie wyświetlony, musi zostać zaakceptowany przez moderatora.',
	'POST_TOPIC_AS'				=> 'Napisz wątek jako',
	'PROGRESS_BAR'				=> 'Pasek postępu',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Możesz zagnieździć maksymalnie %1$d cytatów.',

	'SAVE'						=> 'Zapisz',
	'SAVE_DATE'					=> 'Zapisano w',
	'SAVE_DRAFT'				=> 'Zapisz kopię roboczą',
	'SAVE_DRAFT_CONFIRM'		=> 'Kopie robocze zawierają tylko wątek i treść wiadomości, a wszystkie inne elementy (np. załączniki i ankiety) zostaną usunięte. Czy chcesz zapisać kopię roboczą?',
	'SMILIES'					=> 'Uśmieszki',
	'SMILIES_ARE_OFF'			=> 'Uśmieszki są <em>wyłączone</em>',
	'SMILIES_ARE_ON'			=> 'Uśmieszki są <em>włączone</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Limit czasu przylepienia',
	'STICK_TOPIC_FOR'			=> 'Przyklej wątek na',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Wpisz 0 lub pozostaw puste żeby przylepić na zawsze. Zauważ że ta liczba jest relatywna w stosunku do daty napisania postu.',
	'STYLES_TIP'				=> 'Podpowiedź: Żeby szybko zastosować style, wystarczy zaznaczyć tekst i kliknąć na odpowiedni przycisk.',

	'TOO_FEW_CHARS'				=> 'Wiadomość ma za mało znaków',
	'TOO_FEW_CHARS_LIMIT'		=> 'Wiadomość zawiera %1$d znaki. Minimalna liczba znaków, które musisz podać, to %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Musisz określić przynajmniej dwie opcje w ankiecie.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nie można dodać kolejnego załącznika, %d to maksimum.',
	'TOO_MANY_CHARS'			=> 'Wiadomość ma za dużo znaków.',
	'TOO_MANY_CHARS_POST'		=> 'Wiadomość ma %1$d znaków. Maksymalna dopuszczalna liczba znaków to %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Podpis ma %1$d znaków. Maksymalna dopuszczalna liczba znaków to %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Ankieta ma za dużo opcji.',
	'TOO_MANY_SMILIES'			=> 'Wiadomość zawiera za dużo uśmieszków. Maksimum to %d.',
	'TOO_MANY_URLS'				=> 'Wiadomość zawiera za dużo linków. Maksimum to %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nie możesz pozwolić na wybranie większej liczby opcji niż zawiera ankieta.',
	'TOPIC_BUMPED'				=> 'Wątek został przesunięty w górę.',

	'UNAUTHORISED_BBCODE'		=> 'Nie możesz użyć tych BBCode’ów: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Aby zmienić status wątku z ogłoszenia globalnego na zwykły wątek, musisz wybrać dział, w którym ma się on wyświetlać.',
	'UPDATE_COMMENT'			=> 'Zaktualizuj komentarz',
	'URL_INVALID'				=> 'Wprowadziłeś nieprawidłowy adres WWW.',
	'URL_NOT_FOUND'				=> 'Wybrany plik nie został znaleziony.',
	'URL_IS_OFF'				=> '[url] jest <em>wyłączony</em>',
	'URL_IS_ON'					=> '[url] jest <em>włączony</em>',
	'USER_CANNOT_BUMP'			=> 'Nie możesz przesuwać w górę wątków w tym dziale.',
	'USER_CANNOT_DELETE'		=> 'Nie możesz usuwać postów w tym dziale.',
	'USER_CANNOT_EDIT'			=> 'Nie możesz edytować postów w tym dziale.',
	'USER_CANNOT_REPLY'			=> 'Nie możesz odpowiadać w tym dziale.',
	'USER_CANNOT_FORUM_POST'	=> 'Nie możesz wykonywać operacji związanych z pisaniem postów, ponieważ typ działu nie pozwala na to.',

	'VIEW_MESSAGE'				=> '%sZobacz wysłany post%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sZobacz wysłaną wiadomość%s',

	'WRONG_FILESIZE'			=> 'Plik jest zbyt duży, maksymalny rozmiar to %1d %2s.',
	'WRONG_SIZE'				=> 'Wymiary obrazka nie mogą być mniejsze niż %1$d x %2$d pikseli i większe niż %3$d x %4$d. Wysłany obrazek ma rozmiar %5$d x %6$d pikseli.',
));

?>