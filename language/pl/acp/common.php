<?php
/**
*
* acp_common [Polski]
*
* @package language
* @version $Id: common.php 10134.3 2009-10-27 Ronnie $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administracja',
	'ACP_ADMIN_LOGS'			=> 'Log aktywności administratorów',
	'ACP_ADMIN_ROLES'			=> 'Administracja',
	'ACP_ATTACHMENTS'			=> 'Załączniki',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Załączniki',
	'ACP_AUTH_SETTINGS'			=> 'Uwierzytelnianie',
	'ACP_AUTOMATION'			=> 'Automatyzacja',
	'ACP_AVATAR_SETTINGS'		=> 'Avatary',

	'ACP_BACKUP'				=> 'Kopia zapasowa bazy danych',
	'ACP_BAN'					=> 'Banowanie',
	'ACP_BAN_EMAILS'			=> 'Banowanie e-maili',
	'ACP_BAN_IPS'				=> 'Banowanie adresów IP',
	'ACP_BAN_USERNAMES'			=> 'Banowanie loginów',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfiguracja forum',
	'ACP_BOARD_FEATURES'		=> 'Funkcje forum',
	'ACP_BOARD_MANAGEMENT'		=> 'Zarządzanie forum',
	'ACP_BOARD_SETTINGS'		=> 'Ustawienia forum',
	'ACP_BOTS'					=> 'Boty',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Baza danych',
	'ACP_CAT_DOT_MODS'			=> '.MODy',
	'ACP_CAT_FORUMS'			=> 'Działy',
	'ACP_CAT_GENERAL'			=> 'Ogólne',
	'ACP_CAT_MAINTENANCE'		=> 'Konserwacja',
	'ACP_CAT_PERMISSIONS'		=> 'Uprawnienia',
	'ACP_CAT_POSTING'			=> 'Pisanie',
	'ACP_CAT_STYLES'			=> 'Style',
	'ACP_CAT_SYSTEM'			=> 'System',
	'ACP_CAT_USERGROUP'			=> 'Użytkownicy i grupy',
	'ACP_CAT_USERS'				=> 'Użytkownicy',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikacja klientów',
	'ACP_COOKIE_SETTINGS'		=> 'Ciasteczka',
	'ACP_CRITICAL_LOGS'			=> 'Log błędów',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Dodatkowe pola profilu',

	'ACP_DATABASE'				=> 'Zarządzanie bazą danych',
	'ACP_DISALLOW'				=> 'Zabroń',
	'ACP_DISALLOW_USERNAMES'	=> 'Zabroń loginów',

	'ACP_EMAIL_SETTINGS'		=> 'E-maile',
	'ACP_EXTENSION_GROUPS'		=> 'Grupy rozszerzeń',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Uprawnienia lokalne',
	'ACP_FORUM_LOGS'				=> 'Logi',
	'ACP_FORUM_MANAGEMENT'			=> 'Zarządzanie działami',
	'ACP_FORUM_MODERATORS'			=> 'Moderacja',
	'ACP_FORUM_PERMISSIONS'			=> 'Dostęp do działów',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Dostęp do działów - kopiowanie',
	'ACP_FORUM_ROLES'				=> 'Dostęp do działów',

	'ACP_GENERAL_CONFIGURATION'		=> 'Ustawienia ogólne',
	'ACP_GENERAL_TASKS'				=> 'Zadania ogólne',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderacja',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Uprawnienia globalne',
	'ACP_GROUPS'					=> 'Grupy',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Uprawnienia lokalne grupy',
	'ACP_GROUPS_MANAGE'				=> 'Zarządzanie grupami',
	'ACP_GROUPS_MANAGEMENT'			=> 'Zarządzanie grupami',
	'ACP_GROUPS_PERMISSIONS'		=> 'Uprawnienia globalne grupy',

	'ACP_ICONS'					=> 'Ikony',
	'ACP_ICONS_SMILIES'			=> 'Ikony/uśmieszki',
	'ACP_IMAGESETS'				=> 'Zestawy obrazków',
	'ACP_INACTIVE_USERS'		=> 'Nieaktywni użytkownicy',
	'ACP_INDEX'					=> 'Strona główna PA',

	'ACP_JABBER_SETTINGS'		=> 'Jabber',

	'ACP_LANGUAGE'				=> 'Zarządzanie pakietami językowymi',
	'ACP_LANGUAGE_PACKS'		=> 'Pakiety językowe',
	'ACP_LOAD_SETTINGS'			=> 'Obciążenie serwera',
	'ACP_LOGGING'				=> 'Logowanie',

	'ACP_MAIN'					=> 'Strona główna PA',
	'ACP_MANAGE_EXTENSIONS'		=> 'Zarządzanie rozszerzeniami',
	'ACP_MANAGE_FORUMS'			=> 'Zarządzanie działami',
	'ACP_MANAGE_RANKS'			=> 'Zarządzanie rangami',
	'ACP_MANAGE_REASONS'		=> 'Zarządzanie powodami zgłaszania i odrzucania postów',
	'ACP_MANAGE_USERS'			=> 'Zarządzanie użytkownikami',
	'ACP_MASS_EMAIL'			=> 'Masowa korespondencja',
	'ACP_MESSAGES'				=> 'Wiadomości',
	'ACP_MESSAGE_SETTINGS'		=> 'Prywatne wiadomości',
	'ACP_MODULE_MANAGEMENT'		=> 'Zarządzanie modułami',
	'ACP_MOD_LOGS'				=> 'Log aktywności moderatorów',
	'ACP_MOD_ROLES'				=> 'Moderacja',

	'ACP_NO_ITEMS'				=> 'Nie ma jeszcze żadnych obiektów.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Osierocone załączniki',

	'ACP_PERMISSIONS'			=> 'Uprawnienia',
	'ACP_PERMISSION_MASKS'		=> 'Przegląd uprawnień',
	'ACP_PERMISSION_ROLES'		=> 'Zestawy uprawnień',
	'ACP_PERMISSION_TRACE'		=> 'Śledzenie uprawnień',
	'ACP_PHP_INFO'				=> 'Informacje o serwerze',
	'ACP_POST_SETTINGS'			=> 'Posty',
	'ACP_PRUNE_FORUMS'			=> 'Czyszczenie działów',
	'ACP_PRUNE_USERS'			=> 'Usuwanie użytkowników',
	'ACP_PRUNING'				=> 'Czyszczenie',

	'ACP_QUICK_ACCESS'			=> 'Szybki dostęp',

	'ACP_RANKS'					=> 'Rangi',
	'ACP_REASONS'				=> 'Powody zgłaszania i odrzucania postów',
	'ACP_REGISTER_SETTINGS'		=> 'Rejestracja użytkowników',

	'ACP_RESTORE'				=> 'Przywracanie',

	'ACP_FEED'					=> 'Zarządzanie kanałami',
	'ACP_FEED_SETTINGS'			=> 'Kanały informacyjne',

	'ACP_SEARCH'				=> 'Konfiguracja wyszukiwarki',
	'ACP_SEARCH_INDEX'			=> 'Indeks wyszukiwarki',
	'ACP_SEARCH_SETTINGS'		=> 'Ustawienia wyszukiwarki',

	'ACP_SECURITY_SETTINGS'		=> 'Zabezpieczenia',
	'ACP_SEND_STATISTICS'		=> 'Wyślij informacje statystyczne',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfiguracja serwera',
	'ACP_SERVER_SETTINGS'		=> 'Serwer',
	'ACP_SIGNATURE_SETTINGS'	=> 'Podpisy',
	'ACP_SMILIES'				=> 'Uśmieszki',
	'ACP_STYLE_COMPONENTS'		=> 'Elementy stylów',
	'ACP_STYLE_MANAGEMENT'		=> 'Zarządzanie stylami',
	'ACP_STYLES'				=> 'Styl',

	'ACP_SUBMIT_CHANGES'		=> 'Wyślij zmiany',

	'ACP_TEMPLATES'				=> 'Szablony',
	'ACP_THEMES'				=> 'Motywy',

	'ACP_UPDATE'					=> 'Aktualizacja',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Uprawnienia lokalne użytkownika',
	'ACP_USERS_LOGS'				=> 'Logi użytkowników',
	'ACP_USERS_PERMISSIONS'			=> 'Uprawnienia globalne użytkownika',
	'ACP_USER_ATTACH'				=> 'Załączniki',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Opinie',
	'ACP_USER_GROUPS'				=> 'Grupy',
	'ACP_USER_MANAGEMENT'			=> 'Zarządzanie użytkownikami',
	'ACP_USER_OVERVIEW'				=> 'Przegląd',
	'ACP_USER_PERM'					=> 'Uprawnienia',
	'ACP_USER_PREFS'				=> 'Ustawienia',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Ranga',
	'ACP_USER_ROLES'				=> 'Użytkowanie',
	'ACP_USER_SECURITY'				=> 'Pozbawianie dostępu',
	'ACP_USER_SIG'					=> 'Podpis',
	'ACP_USER_WARNINGS'				=> 'Ostrzeżenia',

	'ACP_VC_SETTINGS'					=> 'Potwierdzenie wizualne',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Podgląd potwierdzenia wizualnego',
	'ACP_VERSION_CHECK'					=> 'Sprawdź aktualizacje',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Administracja (globalna)',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Moderacja (lokalna)',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Dostęp do działów (lokalny)',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Moderacja (globalna)',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Użytkowanie (globalne)',

	'ACP_WORDS'					=> 'Cenzura słów',

	'ACTION'				=> 'Akcja',
	'ACTIONS'				=> 'Akcje',
	'ACTIVATE'				=> 'Aktywuj',
	'ADD'					=> 'Dodaj',
	'ADMIN'					=> 'Administracja',
	'ADMIN_INDEX'			=> 'Strona główna panelu',
	'ADMIN_PANEL'			=> 'Panel administratora',

	'ADM_LOGOUT'			=> 'Wyloguj&nbsp;z&nbsp;PA',
	'ADM_LOGGED_OUT'		=> 'Wylogowałeś/aś się z panelu administratora.',

	'BACK'					=> 'Wstecz',

	'COLOUR_SWATCH'			=> 'Wybierz kolor',
	'CONFIG_UPDATED'		=> 'Konfiguracja została zmieniona.',

	'DEACTIVATE'				=> 'Deaktywuj',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Podana ścieżka „%s” nie istnieje.',
	'DIRECTORY_NOT_DIR'			=> 'Podana ścieżka „%s” nie jest katalogiem.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Podana ścieżka „%s” nie jest zapisywalna.',
	'DISABLE'					=> 'Zablokuj',
	'DOWNLOAD'					=> 'Pobierz',
	'DOWNLOAD_AS'				=> 'Pobierz jako',
	'DOWNLOAD_STORE'			=> 'Pobierz lub zapisz plik',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Możesz pobrać plik lub/i zapisać go w katalogu <samp>store/</samp>.',

	'EDIT'					=> 'Edytuj',
	'ENABLE'				=> 'Odblokuj',
	'EXPORT_DOWNLOAD'		=> 'Pobierz',
	'EXPORT_STORE'			=> 'Zapisz',

	'GENERAL_OPTIONS'		=> 'Opcje ogólne',
	'GENERAL_SETTINGS'		=> 'Ustawienia ogólne',
	'GLOBAL_MASK'			=> 'Tropienie globalnych uprawnień',

	'INSTALL'				=> 'Instaluj',
	'IP'					=> 'Adres IP użytkownika',
	'IP_HOSTNAME'			=> 'Adresy IP lub nazwy hostów',

	'LOGGED_IN_AS'			=> 'Jesteś zalogowany(a) jako:',
	'LOGIN_ADMIN'			=> 'Żeby administrować forum, musisz być uwierzytelnionym użytkownikiem.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Żeby administrować forum, musisz się ponownie uwierzytelnić.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Ponowne uwierzytelnianie się udało, więc zaraz zostaniesz przekierowany do panelu administratora.',
	'LOOK_UP_FORUM'			=> 'Wybierz dział',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Możesz wybrać więcej niż jeden dział.',

	'MANAGE'				=> 'Zarządzaj',
	'MENU_TOGGLE'			=> 'Pokaż lub ukryj boczne menu',
	'MORE'					=> 'Więcej',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Więcej informacji »',
	'MOVE_DOWN'				=> 'W dół',
	'MOVE_UP'				=> 'W górę',

	'NOTIFY'				=> 'Powiadomienie',
	'NO_ADMIN'				=> 'Nie masz uprawnień do administrowania tym forum.',
	'NO_EMAILS_DEFINED'		=> 'Nie znaleziono prawidłowego adresu e-mail.',
	'NO_PASSWORD_SUPPLIED'	=> 'Żeby uzyskać dostęp do panelu administratora, musisz podać swoje hasło.',

	'OFF'					=> 'wyłączony',
	'ON'					=> 'włączony',

	'PARSE_BBCODE'						=> 'Parsuj BBCode',
	'PARSE_SMILIES'						=> 'Parsuj uśmieszki',
	'PARSE_URLS'						=> 'Parsuj linki',
	'PERMISSIONS_TRANSFERRED'			=> 'Uprawnienia skopiowane',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Aktualnie masz takie same uprawnienia jak %1$s. Możesz przeglądać forum z uprawnieniami tego użytkownika, ale prawa administracyjne masz te same, które miałeś. Możesz <a href="%2$s"><strong>przywrócić swoje uprawnienia</strong></a> w każdej chwili.',
	'PIXEL'								=> 'px',
	'PROCEED_TO_ACP'					=> '%sPrzejdź do panelu administratora%s',

	'REMIND'							=> 'Przypomnij',
	'RESYNC'							=> 'Ponownie synchronizuj',
	'RETURN_TO'							=> 'Powróć do…',

	'SELECT_ANONYMOUS'		=> 'Wybierz użytkownika anonimowego',
	'SELECT_OPTION'			=> 'Wybierz opcję',

	'SETTING_TOO_LOW'		=> 'Podana wartość ustawienia „%1$s” jest zbyt niska. Minimalna dozwolona wartość to %2$d.',
	'SETTING_TOO_BIG'		=> 'Podana wartość ustawienia „%1$s” jest zbyt wysoka. Maksymalna dozwolona wartość to %2$d.',
	'SETTING_TOO_LONG'		=> 'Podana wartość ustawienia „%1$s” jest zbyt długa. Maksymalna dozwolona długość to %2$d.',
	'SETTING_TOO_SHORT'		=> 'Podana wartość ustawienia „%1$s” jest zbyt krótka. Minimalna dozwolona długość to %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Wyświetl wszystkie operacje',

	'UCP'					=> 'Panel użytkownika',
	'USERNAMES_EXPLAIN'		=> 'Każdy login wpisz w osobnej linii.',
	'USER_CONTROL_PANEL'	=> 'Panel użytkownika',

	'WARNING'				=> 'Ostrzeżenie',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ta strona zawiera informacje o PHP zainstalowanym na tym serwerze. Zawiera również szczegóły załadowanych modułów, dostępne zmienne i domyślne ustawienia. Te informacje mogą się przydać przy diagnozowaniu problemów. Pamiętaj, że część firm hostingowych limituje informacje wyświetlane tutaj z powodów związanych z bezpieczeństwem. Nie powinieneś podawać żadnych szczegółów wymienionych na tej stronie, chyba że poprosi Cię o to ktoś z <a href="http://phpbb.com/about/team/">ekipy phpBB.com</a> lub <a href="http://phpbb3.pl/">ekipy phpBB3.PL</a> gdy będziesz prosił o pomoc.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informacje o serwerze nie mogą zostać sprawdzone. Funkcja <code>phpinfo()</code> została zablokowana z powodów związanych z bezpieczeństwem.',
));

// Logi
$log_info = ' Możesz ją posortować wg nazwy użytkownika, daty, IP lub podjętej akcji. Jeśli posiadasz odpowiednie uprawnienia, możesz również wyczyścić tę listę.';
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ta lista zawiera wszystkie akcje wykonane przez administratorów.' . $log_info,
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ta lista zawiera wszystkie akcje wykonane samoistnie przez forum. Ten log może pomóc w rozwiązaniu problemów, np. niedoręczania e-maili.' . $log_info,
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ta lista zawiera wszystkie akcje wykonane na działach, wątkach, postach i użytkownikach przez moderatorów (w tym banowanie).' . $log_info,
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ta lista zawiera wszystkie akcje wykonane przez użytkowników lub na użytkownikach (m.in. zgłoszenia, ostrzeżenia, notatki o użytkownikach).' . $log_info,
	'ALL_ENTRIES'				=> 'Wszystkie wpisy',

	'DISPLAY_LOG'	=> 'Pokaż wpisy z poprzednich',

	'NO_ENTRIES'	=> 'Brak wpisów dla tego okresu.',

	'SORT_IP'		=> 'Adres IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Akcja',
));
unset($log_info);

// Strona główna panelu
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Dziękujemy za wybranie phpBB3. Ta strona daje Ci możliwość szybkiego przejrzenia wszystkich statystyk forum. Odnośniki po lewej stronie umożliwiają kontrolę nad wszystkimi funkcjami forum. Na każdej stronie jest instrukcja jak używać zamieszczonych na niej narzędzi.',
	'ADMIN_LOG'					=> 'Log aktywności administratorów',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Lista pięciu ostatnich akcji podjętych przez administratorów. Pełny log znajduje się w dziale „KONSERWACJA”. Możesz do niego szybko przejść klikając na link „Pokaż log aktywności administratorów”.',
	'AVATAR_DIR_SIZE'			=> 'Łączny rozmiar avatarów',

	'BOARD_STARTED'		=> 'Start forum',
	'BOARD_VERSION'		=> 'Wersja forum',

	'DATABASE_SERVER_INFO'	=> 'Typ bazy',
	'DATABASE_SIZE'			=> 'Rozmiar bazy',

	'FILES_PER_DAY'		=> 'Załączniki dziennie',
	'FORUM_STATS'		=> 'Statystyki forum',

	'GZIP_COMPRESSION'	=> 'GZip',

	'NOT_AVAILABLE'		=> 'Niedostępne',
	'NUMBER_FILES'		=> 'Liczba załączników',
	'NUMBER_POSTS'		=> 'Liczba postów',
	'NUMBER_TOPICS'		=> 'Liczba wątków',
	'NUMBER_USERS'		=> 'Liczba użytkowników',
	'NUMBER_ORPHAN'		=> 'Liczba osieroconych załączników',

	'POSTS_PER_DAY'		=> 'Posty dziennie',

	'PURGE_CACHE'			=> 'Wyczyść cache',
	'PURGE_CACHE_CONFIRM'	=> 'Czy jesteś pewny/a, że chcesz wyczyścić cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Usuwa wszystkie zapisane w cache elementy, w tym pliki szablonów i wyniki zapytań SQL.',

	'PURGE_SESSIONS'			=> 'Wyczyść sesje',
	'PURGE_SESSIONS_CONFIRM'	=> 'Czy jesteś pewny/a, że chcesz usunąć wszystkie sesje? Spowoduje to wylogowanie wszystkich użytkowników.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Usuwa wszystkie sesje. Powoduje to wylogowanie wszystkich użytkowników.',

	'RESET_DATE'					=> 'Zresetuj datę startu forum',
	'RESET_DATE_CONFIRM'			=> 'Czy jesteś pewien, że chcesz zresetować datę startu forum?',
	'RESET_ONLINE'					=> 'Zresetuj rekord liczby użytkowników online',
	'RESET_ONLINE_CONFIRM'			=> 'Czy jesteś pewien, że chcesz zresetować rekord liczby użytkowników online?',
	'RESYNC_POSTCOUNTS'				=> 'Zsynchronizuj liczniki postów',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Czy jesteś pewien, że chcesz zsynchronizować liczniki postów?',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Pod uwagę zostaną wzięte tylko istniejące posty.',
	'RESYNC_POST_MARKING'			=> 'Zsynchronizuj oznaczone wątki',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Czy jesteś pewien, że chcesz zsynchronizować oznaczone wątki?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Odznacza wszystkie wątki, a potem poprawnie oznacza te, które były aktywne w ciągu ostatnich sześciu miesięcy.',
	'RESYNC_STATS'					=> 'Zsynchronizuj statystyki',
	'RESYNC_STATS_CONFIRM'			=> 'Czy jesteś pewien, że chcesz zsynchronizować statystyki?',
	'RESYNC_STATS_EXPLAIN'			=> 'Przelicza liczbę postów, wątków, użytkowników i plików.',
	'RUN'							=> 'Uruchom',

	'STATISTIC'					=> 'Statystyka',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Zsynchronizuj lub zresetuj statystyki',

	'TOPICS_PER_DAY'	=> 'Wątki dziennie',

	'UPLOAD_DIR_SIZE'	=> 'Łączny rozmiar załączników',
	'USERS_PER_DAY'		=> 'Użytkownicy dziennie',

	'VALUE'						=> 'Wartość',
	'VERSIONCHECK_FAIL'			=> 'Nie udało się uzyskać informacji o najnowszej wersji.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Ponownie sprawdź wersję',
	'VIEW_ADMIN_LOG'			=> 'Pokaż log aktywności administratorów',
	'VIEW_INACTIVE_USERS'		=> 'Pokaż listę nieaktywnych użytkowników',

	'WELCOME_PHPBB'			=> 'Witamy w phpBB',
	'WRITABLE_CONFIG'		=> 'Twój plik konfiguracyjny (config.php) jest zapisywalny przez wszystkich. Stanowczo zalecamy zmianę uprawnień na 640, lub przynajmniej 644 (przykład: <a href="http://pl.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Nieaktywni użytkownicy
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Nieaktywny od',
	'INACTIVE_REASON'				=> 'Powód',
	'INACTIVE_REASON_MANUAL'		=> 'Konto deaktywowane przez administratora',
	'INACTIVE_REASON_PROFILE'		=> 'Zmienione szczegóły konta',
	'INACTIVE_REASON_REGISTER'		=> 'Nowe konto',
	'INACTIVE_REASON_REMIND'		=> 'Wymuszono ponowną aktywację',
	'INACTIVE_REASON_UNKNOWN'		=> 'Nieznany',
	'INACTIVE_USERS'				=> 'Nieaktywni użytkownicy',
	'INACTIVE_USERS_EXPLAIN'		=> 'Oto lista zarejestrowanych użytkowników, którzy nie dokonali jeszcze aktywacji konta. Możesz ich aktywować, usunąć lub przypomnieć im o aktywacji (wysyłając e-mail).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Lista dziesięciu ostatnio zarejestrowanych użytkowników, którzy nie dokonali jeszcze aktywacji konta. Pełna lista znajduje się w dziale „UŻYTKOWNICY I GRUPY”. Możesz do niej szybko przejść klikając na link „Pokaż listę nieaktywnych użytkowników”.',

	'NO_INACTIVE_USERS'	=> 'Wszyscy użytkownicy są aktywni',

	'SORT_INACTIVE'		=> 'Nieaktywny od',
	'SORT_LAST_VISIT'	=> 'Ostatnia wizyta',
	'SORT_REASON'		=> 'Powód',
	'SORT_REG_DATE'		=> 'Data rejestracji',
	'SORT_LAST_REMINDER'=> 'Ostatnio przypominano',
	'SORT_REMINDER'		=> 'Przypomnienie wysłane',

	'USER_IS_INACTIVE'		=> 'Użytkownik jest nieaktywny',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Wyślij informacje o Twoim serwerze oraz konfiguracji forum do phpBB w celu analizy statystycznej. Wszystkie informacje mogące zidentyfikować Twoją stronę zostały usunięte - dane są całkowicie <strong>anonimowe</strong>. Bazując na przesłanych danych podejmiemy decyzje związane z przyszłymi wersjami phpBB. Statystyki zostaną udostępnione publicznie. Współdzielimy je też z projektem PHP, czyli językiem programowania w którym napisano phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Przy pomocy poniższego przycisku możesz zobaczyć wszystkie dane, które zostaną przesłane.',
	'DONT_SEND_STATISTICS'		=> 'Powróć do panelu administratora jeśli nie chcesz wysyłać informacji do phpBB.',
	'GO_ACP_MAIN'				=> 'Przejdź na stronę główną panelu administratora',
	'HIDE_STATISTICS'			=> 'Ukryj szczegóły',
	'SEND_STATISTICS'			=> 'Wyślij informacje statystyczne',
	'SHOW_STATISTICS'			=> 'Pokaż szczegóły',
	'THANKS_SEND_STATISTICS'	=> 'Dziękujemy za wysłanie informacji.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia użytkowania użytkownika</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia użytkowania grupy</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia moderacyjne użytkownika</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia moderacyjne grupy</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia administracyjne użytkownika</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia administracyjne grupy</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Dodano lub zmieniono globalne uprawnienia administracyjne użytkowników lub grup</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Dodano lub zmieniono globalne uprawnienia moderacyjne użytkowników lub grup</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Dodano lub zmieniono lokalne uprawnienia dostępu do działów</strong><br />%1$s<br /><strong>następującemu użytkownikowi</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Dodano lub zmieniono lokalne uprawnienia dostępu do działów</strong><br />%1$s<br /><strong>następującej grupie</strong><br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Dodano lub zmieniono lokalne uprawnienia moderacyjne</strong><br />%1$s<br /><strong>następującemu użytkownikowi</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Dodano lub zmieniono lokalne uprawnienia moderacyjne działów</strong><br />%1$s<br /><strong>następującej grupie</strong><br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Dodano lub zmieniono lokalne uprawnienia moderacyjne działów</strong><br />%1$s<br /><strong>następującym użytkownikom/grupom</strong><br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Dodano lub zmieniono lokalne uprawnienia dostępu do działów</strong><br />%1$s<br /><strong>następującym użytkownikom/grupom</strong><br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Usunięto globalne uprawnienia administracyjne użytkowników lub grup</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Usunięto globalne uprawnienia moderacyjne użytkowników lub grup</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Usunięto lokalne uprawnienia moderacyjne</strong><br />%1$s<br /><strong>następującym użytkownikom/grupom</strong><br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Usunięto lokalne uprawnienia dostępu do działów</strong><br />%1$s<br /><strong>następującym użytkownikom/grupom</strong><br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Uprawnienia skopiowane od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Własne uprawnienia przywrócone po używaniu uprawnień</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Nieudana próba logowania do panelu administratora</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Zalogowano do panelu administratora</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Usunięto załączniki użytkownika</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Dodano rozszerzenie załączników</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Usunięto rozszerzenie załączników</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Zmodyfikowano rozszerzenie załączników</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Dodano grupę rozszerzeń</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Zmodyfikowano grupę rozszerzeń</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Usunięto grupę rozszerzeń</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Przypisano osierocony plik do postu</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Usunięto osierocone pliki</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Wyłączono użytkownika z bana</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Wyłączono adres IP z bana</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Wyłączono e-mail z bana</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Zbanowano użytkownika</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Zbanowano adres IP</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Zbanowano e-mail</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Odbanowano użytkownika</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Odbanowano adres IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Odbanowano e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Dodano nowy BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Zmodyfikowano BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Usunięto BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Dodano nowego bota</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Usunięto bota</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Zmodyfikowano bota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Wyczyszczono log aktywności administratorów</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Wyczyszczono log błędów</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Wyczyszczono log aktywności moderatorów</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Wyczyszczono log aktywności użytkownika</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Wyczyszczono log aktywności użytkowników</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Zmieniono ustawienia załączników</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Zmieniono ustawienia uwierzytelniania</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Zmieniono ustawienia avatarów</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Zmieniono ustawienia ciasteczek</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Zmieniono ustawienia e-maili</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Zmieniono możliwości forum</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Zmieniono ustawienia obciążenia serwera</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Zmieniono ustawienia prywatnych wiadomości</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Zmieniono ustawienia postów</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Zmieniono ustawienia rejestracji</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Zmieniono ustawienia kanałów informacyjnych</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zmieniono ustawienia wyszukiwarki</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Zmieniono ustawienia bezpieczeństwa</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Zmieniono ustawienia serwera</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Zmieniono ustawienia forum</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Zmieniono ustawienia podpisów</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Zmieniono ustawienia potwierdzenia wizualnego</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Zaakceptowano wątek</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Przesunięto wątek w górę</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Usunięto post „%1$s” napisany przez</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Usunięto cień wątku</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Usunięto wątek „%1$s” rozpoczęty przez</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Skopiowano wątek</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Zablokowano wątek</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zablokowano post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Przeniesiono posty</strong><br />» do wątku %s',
	'LOG_MOVE'					=> '<strong>Przeniesiono wątek</strong><br />» z %1$s do %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Zamknięto zgłoszenie PW</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Usunięto zgłoszenie PW</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Zaakceptowano post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Odrzucono post „%1$s” z powodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edytowano post „%1$s” napisany przez</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Zamknięto zgłoszenie</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Usunięto zgłoszenie</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Przeniesiono wydzielone posty</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Przeniesiono wydzielone posty</strong><br />» z %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Zaakceptowano wątek</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odrzucono wątek „%1$s” z powodu</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Zresynchronizowano liczniki wątków</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Zmieniono typ wątku</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Odblokowano wątek</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Odblokowano post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Zabroniono nazwy użytkownika</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Usunięto zabronioną nazwę użytkownika</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Wykonano kopię zapasową bazy danych</strong>',
	'LOG_DB_DELETE'			=> '<strong>Usunięto kopię zapasową bazy danych</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Przywrócono kopię zapasową bazy danych</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Wyłączono adres IP lub nazwę hosta z listy pobierania</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Dodano adres IP lub nazwę hosta na listę pobierania</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Usunięto adres IP lub nazwę hosta z listy pobierania</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Błąd Jabbera</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Błąd e-maila</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Utworzono nowy dział</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Skopiowano uprawnienia dostępu do działu</strong> z %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Usunięto dział</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Usunięto dział wraz z poddziałami</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Usunięto dział, przenosząc poddziały</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Usunięto dział, przenosząc posty</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Usunięto dział wraz z poddziałami, przenosząc posty</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Usunięto dział, przenosząc poddziały</strong> do %2$s, <strong>a posty</strong> do %1$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Usunięto dział wraz z postami</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Usunięto dział wraz z poddziałami i postami</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Usunięto dział wraz z postami, przenosząc poddziały</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Zmieniono szczegóły działu</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Przeniesiono dział</strong> %1$s <strong>poniżej</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Przeniesiono dział</strong> %1$s <strong>ponad</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Zsynchronizowano dział</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Wystąpił błąd ogólny</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Utworzono nową grupę</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Ustawiono grupę jako domyślną dla jej członków</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Usunięto grupę</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Zdymisjonowano liderów w grupie</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Promowano członków na liderów w grupie</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Usunięto członków z grupy</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Zmieniono szczegóły grupy</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Dodano nowych liderów do grupy</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Dodano użytkowników do grupy</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Przyjęto użytkowników do grupy</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Użytkownicy poprosili o przyjęcie do grupy</strong> %1$s<br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Błąd podczas tworzenia obrazka</strong><br />» Błąd w %1$s w linii %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Zainstalowano nowy zestaw obrazków</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Zainstalowano nowy zestaw obrazków</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Usunięto zestaw obrazków</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Zmieniono szczegóły zestawu obrazków</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Zmodyfikowano zestaw obrazków</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Wyeksportowano zestaw obrazków</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>W zestawie obrazków brakuje lokalizacji „%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Odświeżono „%2$s” lokalizację zestawu obrazków</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Odświeżono zestaw obrazków</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktywowano nieaktywnego/ych użytkownika/ów</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Usunięto nieaktywnych użytkowników</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Wysłano przypomnienie o aktywacji do nieaktywnych użytkowników</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Przekonwertowano z %1$s do phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Zainstalowano phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sprawdzenie adresu IP/przeglądarki/X_FORWARDED_FOR sesji nie powiodło się</strong><br />»Adres IP „<em>%1$s</em>” został porównany z adresem IP sesji - „<em>%2$s</em>”, identyfikator przeglądarki „<em>%3$s</em>” został porównany z identyfikatorem przeglądarki sesji - „<em>%4$s</em>”, X_FORWARDED_FOR „<em>%5$s</em>” został porównany z X_FORWARDED_FOR sesji - „<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Zmieniono konto Jabbera</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Zmieniono hasło Jabbera</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Zarejestrowano konto Jabbera</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Zmieniono ustawienia Jabbera</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Usunięto pakiet językowy</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Zainstalowano pakiet językowy</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Zmieniono szczegóły pakietu językowego</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Wymieniono plik językowy</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Wysłano plik językowy i zapisano go w folderze store/</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Wysłano masową korespondencję</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Zmieniono autora postu w wątku „%1$s”</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Zablokowano moduł</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Odblokowano moduł</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Przesunięto moduł w dół</strong><br />» %1$s <strong>poniżej</strong> %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Przesunięto moduł w górę</strong><br />» %1$s <strong>powyżej</strong> %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Usunięto moduł</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Dodano moduł</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Zmodyfikowano moduł</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień administracyjnych</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Zmieniono zestaw uprawnień administracyjnych</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień administracyjnych</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień dostępu do działów</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Zmieniono zestaw uprawnień dostępu do działów</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień dostępu do działów</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień moderacyjnych</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Zmieniono zestaw uprawnień moderacyjnych</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień moderacyjnych</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień użytkowania</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Zmieniono zestaw uprawnień użytkowania</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień użytkowania</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktywowano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Dodano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktywowano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Zmodyfikowano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Usunięto pole profilu</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Wyczyszczono działy</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatycznie wyczyszczono działy</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Deaktywowano użytkowników</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Usunięto użytkowników i ich posty</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Usunięto użytkowników, zostawiając ich posty</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Wyczyszczono cache</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Wyczyszczono sesje</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Dodano nową rangę</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Usunięto rangę</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Zmodyfikowano rangę</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Dodano powód zgłaszania/odrzucania</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Usunięto powód zgłaszania/odrzucania</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Zmodyfikowano powód zgłaszania/odrzucania</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Sprawdzenie referera HTTP nie powiodło się</strong><br />»Refererem był „<em>%1$s</em>”. Żądanie zostało odrzucone, a sesja zabita.',
	'LOG_RESET_DATE'			=> '<strong>Zresetowano datę startu forum</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Zresetowano rekord liczby użytkowników online</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Zsynchronizowano liczniki postów</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Zsynchronizowano oznaczone wątki</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Zsynchronizowano statystyki</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Utworzono indeks wyszukiwania dla</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Usunięto indeks wyszukiwania dla</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Zainstalowano nowy styl</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Usunięto styl</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Zmodyfikowano styl</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Wyeksportowano styl</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Zainstalowano nowy zestaw szablonów</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Zainstalowano nowy zestaw szablonów</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Wyczyszczono cache plików z szablonu <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Usunięto zestaw szablonów</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Przeedytowano zestaw szablonów <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Zmieniono szczegóły zestawu szablonów</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Wyeksportowano zestaw szablonów</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Odświeżono zestaw szablonów</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Zainstalowano nowy motyw</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Zainstalowano nowy motyw</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Usunięto motyw</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Zmieniono szczegóły motywu</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Przeedytowano motyw <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Przeedytowano motyw <em>%1$s</em></strong><br />» Przeedytowano plik <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Wyeksportowano motyw</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Odświeżono motyw</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Zaktualizowano bazę danych</strong><br />» z wersji %1$s do wersji %2$s',
	'LOG_UPDATE_PHPBB'		=> '<strong>Zaktualizowano phpBB</strong><br />» z wersji %1$s do wersji %2$s',

	'LOG_USER_ACTIVE'		=> '<strong>Aktywowano użytkownika</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zbanowano użytkownika przez zarządzanie użytkownikami</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Zbanowano adres IP przez zarządzanie użytkownikami</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zbanowano e-mail przez zarządzanie użytkownikami</strong> z powodu „<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Usunięto użytkownika</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Usunięto wszystkie załączniki wysłane przez użytkownika</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Usunięto avatar użytkownika</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Usunięto wiadomości do wysłania przez użytkownika</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Usunięto wszystkie posty napisane przez użytkownika</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Usunięto podpis użytkownika</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Deaktywowano użytkownika</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Przeniesiono posty użytkownika</strong><br />» %1$s do działu %2$s',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Zmieniono hasło użytkownika</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Wymuszono ponowną aktywację konta użytkownika</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Usunięto oznaczenie jako nowy użytkownik</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Użytkownik „%1$s” zmienił adres e-mail</strong><br />» z %2$s na %3$s',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Zmieniono nazwę użytkownika</strong><br />» z %1$s na %2$s',
	'LOG_USER_USER_UPDATE'	=> '<strong>Zaktualizowano szczegóły użytkownika</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Aktywowano konto użytkownika</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Usunięto avatar użytkownika</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Usunięto podpis użytkownika</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Dodano opinię o użytkowniku</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Dodano wpis:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktywowano konto użytkownika</strong>',
	'LOG_USER_LOCK'				=> '<strong>Użytkownik zablokował własny wątek</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Przeniesiono wszystkie posty użytkownika do działu „%s”</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Wymuszono ponowną aktywację konta użytkownika</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Użytkownik odblokował własny wątek</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Dodano ostrzeżenie użytkownikowi</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Użytkownik otrzymał następujące ostrzeżenie</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Użytkownik zmienił domyślną grupę</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Użytkownik został zdymisjonowany z pozycji lidera grupy</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Użytkownik przyłączył się do grupy</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Użytkownik poprosił o przyjęcie go do grupy</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Użytkownik zrezygnował z członkostwa w grupie</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Usunięto ostrzeżenie</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Usunięto %2$s ostrzeżenia</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Usunięto wszystkie ostrzeżenia</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Dodano cenzurowane słowo</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Usunięto cenzurowane słowo</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Zmodyfikowano cenzurowane słowo</strong><br />» %s',
));

?>
