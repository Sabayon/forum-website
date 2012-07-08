<?php
/**
*
* acp_attachments [Polski]
*
* @package language
* @version $Id: attachments.php 8946.1 2009-02-23 Ronnie $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tutaj możesz skonfigurować podstawowe ustawienia załączników i ich specjalnych kategorii.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Tutaj możesz dodawać, usuwać, zmieniać i blokować grupy rozszerzeń. Możesz też przyznawać im specjalne kategorie, zmieniać sposób pobierania czy definiować ikonę wyświetlaną przed załącznikami należącymi do danej grupy.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Tutaj możesz zarządzać dozwolonymi rozszerzeniami. Aby aktywować rozszerzenia, przejdź do zarządzania grupami rozszerzeń. Stanowczo nie zalecamy dozwalania rozszerzeń skryptowych (takich jak <code>php</code>, <code>php3</code>, <code>php4</code>, <code>php5</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> itp…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tutaj możesz zobaczyć osierocone załączniki. Załączniki są osieracane zazwyczaj, gdy użytkownicy je wgrywają, ale nie wysyłają postu. Tutaj możesz usunąć te pliki lub przyznać je istniejącym postom. Do przyznania ich postom potrzebujesz prawidłowego ID, musisz je określić samodzielnie.',
	'ADD_EXTENSION'						=> 'Dodaj rozszerzenie',
	'ADD_EXTENSION_GROUP'				=> 'Dodaj grupę rozszerzeń',
	'ADMIN_UPLOAD_ERROR'				=> 'W czasie dołączania pliku „%s” wystąpiły błędy.',
	'ALLOWED_FORUMS'					=> 'Dozwolone w tych działach',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Pliki o rozszerzeniach tej grupy można wgrywać tylko w wybranych działach.',
	'ALLOWED_IN_PM_POST'				=> 'Można używać w postach i PW.',
	'ALLOW_ATTACHMENTS'					=> 'Pozwól na używanie załączników',
	'ALLOW_ALL_FORUMS'					=> 'wszystkie',
	'ALLOW_IN_PM'						=> 'Dozwolone w prywatnych wiadomościach',
	'ALLOW_PM_ATTACHMENTS'				=> 'Pozwól na używanie załączników w prywatnych wiadomościach',
	'ALLOW_SELECTED_FORUMS'				=> 'wybrane poniżej',
	'ASSIGNED_EXTENSIONS'				=> 'Przypisane rozszerzenia',
	'ASSIGNED_GROUP'					=> 'Grupa rozszerzeń',
	'ATTACH_EXTENSIONS_URL'				=> 'Rozszerzenia',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupy rozszerzeń',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksymalna wielkość pliku',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksymalna wielkość każdego pliku, 0 to brak limitu.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksymalna wielkość plików w prywatnych wiadomościach',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksymalna wielkość każdego pliku dołączonego do prywatnej wiadomości, 0 to brak limitu.',
	'ATTACH_ORPHAN_URL'					=> 'Osierocone załączniki',
	'ATTACH_POST_ID'					=> 'ID postu',
	'ATTACH_QUOTA'						=> 'Całkowity limit wielkości załączników',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksymalna ilość miejsca na dysku, jaką mogą zająć załączniki na całym forum, 0 to brak limitu.',
	'ATTACH_TO_POST'					=> 'Dołącz do postu',

	'CAT_FLASH_FILES'			=> 'Pliki Flash',
	'CAT_IMAGES'				=> 'Obrazki',
	'CAT_QUICKTIME_FILES'		=> 'Pliki Quicktime',
	'CAT_RM_FILES'				=> 'Pliki RealMedia',
	'CAT_WM_FILES'				=> 'Pliki Windows Media',
	'CHECK_CONTENT'				=> 'Sprawdź pliki załączników',
	'CHECK_CONTENT_EXPLAIN'		=> 'Niektóre przeglądarki mogą zostać oszukane, aby uznały nieprawidłowy typ załączników. Ta opcja każe phpBB sprawdzać i odrzucać takie złe załączniki.',
	'CREATE_GROUP'				=> 'Dodaj grupę',
	'CREATE_THUMBNAIL'			=> 'Twórz podgląd',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Tworzy podgląd obrazka we wszystkich możliwych sytuacjach.',

	'DEFINE_ALLOWED_IPS'			=> 'Zdefiniuj adresy IP / hosty, z których wolno pobierać pliki',
	'DEFINE_DISALLOWED_IPS'			=> 'Zdefiniuj adresy IP / hosty, z których nie wolno pobierać plików',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Aby podać wiele różnych adresów IP lub nazw hostów, umieść każdy(ą) w osobnej linii. Aby podać zakres adresów IP, oddziel początek i koniec myślnikiem (-), możesz też użyć gwiazdki (*).',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Możesz usunąć z listy dowolną liczbę adresów IP i nazw hostów za jednym razem poprzez użycie odpowiedniej dla Twojej przeglądarki i komputera kombinacji myszki i klawiatury (np. Ctrl + LPM). Wyłączone adresy IP mają niebieskie tło.',
	'DISPLAY_INLINED'				=> 'Wyświetlaj obrazki na stronie',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Jeśli wyłączone, zamiast obrazków będą wyświetlane tylko linki do nich.',
	'DISPLAY_ORDER'					=> 'Kolejność wyświetlania załączników',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Wg daty dołączenia',

	'EDIT_EXTENSION_GROUP'			=> 'Edytuj grupę',
	'EXCLUDE_ENTERED_IP'			=> 'Zaznacz, aby wyłączyć podany adres IP / host.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Wyłącz IP z dozwolonych adresów IP',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Wyłącz IP z zablokowanych adresów IP',
	'EXTENSIONS_UPDATED'			=> 'Rozszerzenia zostały zmienione.',
	'EXTENSION_EXIST'				=> 'Rozszerzenie „%s” już istnieje.',
	'EXTENSION_GROUP'				=> 'Grupa',
	'EXTENSION_GROUPS'				=> 'Grupy rozszerzeń',
	'EXTENSION_GROUP_DELETED'		=> 'Grupa rozszerzeń została usunięta.',
	'EXTENSION_GROUP_EXIST'			=> 'Grupa „%s” już istnieje.',

	'GO_TO_EXTENSIONS'		=> 'Przejdź do zarządzania rozszerzeniami',
	'GROUP_NAME'			=> 'Nazwa grupy',

	'IMAGE_LINK_SIZE'			=> 'Maksymalne wymiary wyświetlanych obrazków',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Gdy wymiary są większe, zamiast obrazka wyświetlany jest link do niego. Aby wyłączyć tę funkcję, ustaw obie wartości na 0 pikseli.',
	'IMAGICK_PATH'				=> 'Ścieżka do Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Pełna ścieżka do aplikacji Imagemagick, np. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Limit liczby załączników w poście',
	'MAX_ATTACHMENTS_PM'			=> 'Limit liczby załączników w PW',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksymalny rozmiar pliku',
	'MAX_IMAGE_SIZE'				=> 'Maksymalne wymiary obrazków',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Ustaw obie wartości na 0 pikseli, aby nie sprawdzać wymiarów.',
	'MAX_THUMB_WIDTH'				=> 'Maksymalna szerokość podglądu (w pikselach)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Wygenerowany podgląd nie będzie miał szerokości większej, niż ta ustawiona tutaj.',
	'MIN_THUMB_FILESIZE'			=> 'Minimalny rozmiar pliku powodujący utworzenie podglądu',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Podglądy obrazków o rozmiarze mniejszym nie będą tworzone.',
	'MODE_INLINE'					=> 'w tekście',
	'MODE_PHYSICAL'					=> 'fizycznie',

	'NOT_ALLOWED_IN_PM'			=> 'Można używać tylko w postach.',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nie można używać.',
	'NOT_ASSIGNED'				=> 'Nie przypisano',
	'NO_EXT_GROUP'				=> 'Brak',
	'NO_EXT_GROUP_NAME'			=> 'Nie podałeś nazwy grupy',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nie wybrałeś grupy.',
	'NO_FILE_CAT'				=> 'Brak',
	'NO_IMAGE'					=> 'Brak ikony',
	'NO_THUMBNAIL_SUPPORT'		=> 'Generowanie podglądów nie jest możliwe. Aby je umożliwić, konieczne jest włączenie rozszerzenia GD lub instalacja Imagemagicka.',
	'NO_UPLOAD_DIR'				=> 'Wybrany katalog do wgrywania avatarów nie istnieje.',
	'NO_WRITE_UPLOAD'			=> 'Wybrany katalog do wgrywania avatarów nie jest zapisywalny. Zmień uprawnienia, aby umożliwić serwerowi zapisywanie w nim plików.',

	'ONLY_ALLOWED_IN_PM'	=> 'Można używać tylko w PW.',
	'ORDER_ALLOW_DENY'		=> 'biała',
	'ORDER_DENY_ALLOW'		=> 'czarna',

	'REMOVE_ALLOWED_IPS'		=> 'Usuń z białej listy adresów IP / hostów',
	'REMOVE_DISALLOWED_IPS'		=> 'Usuń z czarnej listy adresów IP / hostów',

	'SEARCH_IMAGICK'				=> 'Szukaj Imagemagicka',
	'SECURE_ALLOW_DENY'				=> 'Biała czy czarna lista',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Wybierz, czy lista bezpiecznego pobierania ma być listą białą (z wymienionych adresów wolno pobierać pliki) czy czarną (z wymienionych adresów <strong>nie</strong> wolno pobierać plików).',
	'SECURE_DOWNLOADS'				=> 'Włącz bezpieczne pobieranie',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Jeśli włączysz tę opcję, pobierać pliki będzie można tylko z podanych przez Ciebie adresów IP / hostów.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Bezpieczne pobieranie nie jest włączone. Poniższe ustawienia będą działać dopiero po włączeniu tej funkcji.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista adresów IP została zmieniona.',
	'SECURE_EMPTY_REFERRER'			=> 'Pozwól na pustego odsyłającego',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Bezpieczne pobieranie bazuje na odsyłających. Czy chcesz pozwolić na pobieranie bez podania odsyłającego?',
	'SETTINGS_CAT_IMAGES'			=> 'Ustawienia specjalnej kategorii „Obrazki”',
	'SPECIAL_CATEGORY'				=> 'Specjalna kategoria',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Załączniki specjalnych kategorii wyświetlane są w specyficzny dla kategorii sposób.',
	'SUCCESSFULLY_UPLOADED'			=> 'Wgrano.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupa rozszerzeń została dodana.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupa rozszerzeń została zmieniona.',

	'UPLOADING_FILES'				=> 'Wgrywanie plików',
	'UPLOADING_FILE_TO'				=> 'Wgrywanie pliku „%1$s” do postu o ID %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nie masz uprawnień pozwalająych na wgrywanie plików w dziale „%s”.',
	'UPLOAD_DIR'					=> 'Katalog, do którego wgrywane są załączniki',
	'UPLOAD_DIR_EXPLAIN'			=> 'Jeśli użytkownicy wgrali już jakieś załączniki, będziesz musiał ręcznie skopiować je do nowego katalogu.',
	'UPLOAD_ICON'					=> 'Ikona',
	'UPLOAD_NOT_DIR'				=> 'Wybrana przez Ciebie lokalizacja nie jest katalogiem.',
));

?>