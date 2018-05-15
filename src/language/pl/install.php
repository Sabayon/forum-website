<?php
/**
*
* install [Polski]
*
* @package language
* @version $Id: install.php 10101 2009-10-20 LEW21 $
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
	'ADMIN_CONFIG'				=> 'Ustawienia administratora',
	'ADMIN_PASSWORD'			=> 'Hasło administratora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potwierdź hasło administratora',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Wpisz hasło mające min. 6 a maks. 30 znaków.',
	'ADMIN_TEST'				=> 'Sprawdź ustawienia administratora',
	'ADMIN_USERNAME'			=> 'Login administratora',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Wpisz nazwę użytkownika mającą min. 6 a maks. 30 znaków.',
	'APP_MAGICK'				=> 'Zainstalowany Imagemagick [ Załączniki ]',
	'AUTHOR_NOTES'				=> 'Informacje od autora<br />» %s',
	'AVAILABLE'					=> 'Dostępne',
	'AVAILABLE_CONVERTORS'		=> 'Dostępne konwertery',

	'BEGIN_CONVERT'					=> 'Rozpocznij konwersję',
	'BLANK_PREFIX_FOUND'			=> 'Skan Twoich tabel wykazał prawidłową instalację nie używającą prefiksów w nazwach tabel.',
	'BOARD_NOT_INSTALLED'			=> 'Nie znaleziono instalacji',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Aby wykonać konwersję, musisz zacząć od <a href="%s">instalacji phpBB3</a>.',

	'CATEGORY'					=> 'Kategoria',
	'CACHE_STORE'				=> 'Typ Cache',
	'CACHE_STORE_EXPLAIN'		=> 'Fizyczne położenie katalogu cache, preferowany system plików.',
	'CAT_CONVERT'				=> 'Konwertuj',
	'CAT_INSTALL'				=> 'Zainstaluj',
	'CAT_OVERVIEW'				=> 'Przegląd',
	'CAT_UPDATE'				=> 'Aktualizuj',
	'CHANGE'					=> 'Zmień',
	'CHECK_TABLE_PREFIX'		=> 'Sprawdź prefiks tabel i spróbuj ponownie.',
	'CLEAN_VERIFY'				=> 'Czyszczenie i weryfikacja struktury końcowej',
	'CLEANING_USERNAMES'		=> 'Czyszczenie nazw użytkowników',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> to czysty login:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Na Twoim poprzednim forum znaleziono kolidujące loginy. Żeby kontynuować konwersję, usuń lub zmień nazwę tych kont, aby na każdy oczyszczony login przypadał tylko jeden użytkownik.',
	'COLLIDING_USER'			=> '» ID użytkownika: <strong>%d</strong> login: <strong>%s</strong> (%d postów)',
	'CONFIG_CONVERT'			=> 'Konwertowanie konfiguracji',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Zapisanie pliku konfiguracyjnego nie było możliwe. Inne metody utworzenia tego pliku są zaprezentowane poniżej.',
	'CONFIG_FILE_WRITTEN'		=> 'Plik konfiguracyjny został zapisany. Teraz możesz przejść do następnego etapu instalacji.',
	'CONFIG_PHPBB_EMPTY'		=> 'Ustawienie phpBB3 o nazwie „%s” jest puste.',
	'CONFIG_RETRY'				=> 'Spróbuj ponownie',
	'CONTACT_EMAIL_CONFIRM'		=> 'Potwierdź adres e-mail',
	'CONTINUE_CONVERT'			=> 'Kontynuuj konwersję',
	'CONTINUE_CONVERT_BODY'		=> 'Wykryto poprzednią próbę konwersji. Możesz teraz wybrać, czy chcesz zacząć nową konwersję, czy kontynuować poprzednią.',
	'CONTINUE_LAST'				=> 'Kontynuuj czynności końcowe',
	'CONTINUE_OLD_CONVERSION'	=> 'Kontynuuj poprzednią konwersję',
	'CONVERT'					=> 'Konwertuj',
	'CONVERT_COMPLETE'			=> 'Konwersja zakończona',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Udało Ci się przekonwertować Twoje forum na phpBB3. Możesz się teraz zalogować i <a href="../">wejść na swoje forum</a>. Zanim odblokujesz swoje forum, (usuwając katalog install/) upewnij się, że ustawienia zostały skopiowane prawidłowo. Pamiętaj, że pomoc w używaniu phpBB3 możesz uzyskać czytając <a href="http://www.phpbb.com/support/documentation/3.0/" rel="external">dokumentację</a> i pytając na forum <a href="http://phpbb3.pl/" rel="external">phpBB3.PL</a>.',
	'CONVERT_INTRO'				=> 'Witamy w Ujednoliconym Systemie Konwertującym phpBB', // Unified Convertor Framework
	'CONVERT_INTRO_BODY'		=> 'Z tej strony możesz zaimportować dane z innych (zainstalowanych) skryptów do tworzenia forów dyskusyjnych do phpBB3. Poniższa lista zawiera wszystkie dostępne moduły konwertujące. Jeśli nie ma na niej konwertera, którego potrzebujesz, to sprawdź na naszej stronie - może już się pojawił.',
	'CONVERT_NEW_CONVERSION'	=> 'Rozpocznij nową konwersję',
	'CONVERT_NOT_EXIST'			=> 'Wybrany konwerter nie istnieje.',
	'CONVERT_OPTIONS'			=> 'Opcje',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informacje, które wpisałeś, zostały sprawdzone. Aby rozpocząć proces konwersji, naciśnij przycisk poniżej.',
	'CONV_ERR_FATAL'			=> 'Fatalny błąd konwersji',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Wgrywanie załączników przez FTP jest włączone na starym forum. Zablokuj wgrywanie załączników przez FTP i upewnij się, że podałeś właściwy katalog wgrywania, a następnie skopiuj wszystkie załączniki do tego nowego, dostępnego przez Internet katalogu. Gdy to zrobisz, uruchom ponownie konwerter.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nie istnieją żadne konfiguracyjne informacje, które można przekonwertować.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nie można uzyskać informacji o dostępie do działów.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nie można uzyskać informacji o kategoriach.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nie można uzyskać informacji o konfiguracji Twojego forum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nie można otworzyć/przeczytać „%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nie można uzyskać informacji o uprawnieniach grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Błędy w tabeli z grupami wykryte przez add_bots() - musisz dodać wszystkie grupy specjalne samodzielnie.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nie można wstawić bota do tabeli z użytkownikami.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nie można wstawić bota do tabeli z botami.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nie można wstawić użytkownika do tabeli z informacjami o członkostwie w grupach.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Błąd parsera wiadomości',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Notatka dla autora: musisz podać $convertor[\'avatar_path\'] aby używać %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Relatywna ścieżka do źródłowego forum nie została podana.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Notatka dla autora: musisz podać $convertor[\'avatar_gallery_path\'] aby używać %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupa „%1$s” nie została znaleziona w %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Notatka dla autora: musisz podać $convertor[\'ranks_path\'] aby używać %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Notatka dla autora: musisz podać $convertor[\'smilies_path\'] aby używać %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Notatka dla autora: musisz podać $convertor[\'upload_path\'] aby używać %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nie można wstawić/zmienić uprawnienia.',
	'CONV_ERROR_PM_COUNT'				=> 'Nie można uzyskać liczby PW w folderze.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nie można wstawić nowego działu zamieniając starą kategorię.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nie można wstawić nowego działu zamieniając stary dział.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nie można uzyskać informacji o uprawnieniach użytkowników.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Niewłaściwa grupa „%1$s” zdefiniowana w %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ta strona zbiera dane wymagane do dostępu do źródłowego forum. Podaj szczegóły bazy danych Twojego poprzedniego forum; konwerter nie zmieni niczego w podanej niżej bazie danych. Żródłowe forum powinno być zablokowane aby umożliwić konsekwentną konwersję.',
	'CONV_SAVED_MESSAGES'				=> 'Zapisane wiadomości',

	'COULD_NOT_COPY'			=> 'Nie można skopiować pliku <strong>%1$s</strong> do <strong>%2$s</strong><br /><br />Sprawdź, czy docelowy katalog istnieje i jest zapisywalny przez serwer.',
	'COULD_NOT_FIND_PATH'		=> 'Nie można znaleźć ścieżki do Twojego poprzedniego forum. Sprawdź ustawienia i spróbuj ponownie.<br />» Podana ścieżka to %s.',

	'DBMS'						=> 'Typ bazy danych',
	'DB_CONFIG'					=> 'Konfiguracja bazy danych',
	'DB_CONNECTION'				=> 'Połączenie z bazą danych',
	'DB_ERR_INSERT'				=> 'Błąd w czasie zapisywania danych.',
	'DB_ERR_LAST'				=> 'Błąd w czasie wykonywania <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Błąd w czasie wykonywania <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Błąd w czasie wykonywania <var>query_first</var>, %s („%s”).',
	'DB_ERR_SELECT'				=> 'Błąd w czasie odczytywania danych.',
	'DB_HOST'					=> 'Nazwa hosta bazy danych lub DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN (Data Source Name) - wymagane tylko dla instalacji ODBC.',
	'DB_NAME'					=> 'Nazwa bazy danych',
	'DB_PASSWORD'				=> 'Hasło bazy danych',
	'DB_PORT'					=> 'Port serwera bazy danych',
	'DB_PORT_EXPLAIN'			=> 'Pozostaw to pole puste, chyba że baza używa niestandardowego portu do połączenia.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Przepraszamy, ale ten skrypt nie obsługuje aktualizacji wersji phpBB starszych niż „%1$s”. Obecnie zainstalowana wersja to „%2$s”. Zaktualizuj do wcześniejszej wersji przed uruchomieniem tego skryptu. Pomoc możesz otrzymać na forum <a href="http://phpbb3.pl">phpBB3.PL</a>.',
	'DB_USERNAME'				=> 'Nazwa użytkownika bazy danych',
	'DB_TEST'					=> 'Test połączenia',
	'DEFAULT_LANG'				=> 'Domyślny język forum',
	'DEFAULT_PREFIX_IS'			=> 'Konwerter nie mógł znaleźć tabel o wybranym prefiksie. Upewnij się, że dobrze podałeś szczegóły starego forum. Domyślny prefiks nazw tabel w %1$s to <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Zmienna test_file w konwerterze nie ma wartości. Jeśli jesteś użytkownikiem tego konwertera, to nie powinieneś widzieć tego błędu. Napisz o tej wiadomości do jego autora. Jeśli natomiast to Ty jesteś autorem konwertera, to musisz podać nazwę pliku, który istnieje w źródłowym forum, co umożliwi sprawdzanie ścieżki.',
	'DIRECTORIES_AND_FILES'		=> 'Ustawienia katalogów i plików',
	'DISABLE_KEYS'				=> 'Blokowanie kluczy',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Obsługa zdalnego FTP [ Instalacja ]',
	'DLL_GD'					=> 'Obsługa GD [ Potwierdzenie Wizualne ]',
	'DLL_MBSTRING'				=> 'Obsługa wielobajtowych znaków',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ przez ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL z rozszerzeniem MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Obsługa XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Obsługa kompresji zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Pobierz config.php',
	'DL_CONFIG_EXPLAIN'			=> 'Możesz pobrać gotowy plik config.php. Będziesz musiał ręcznie wysłać ten plik na serwer, zastępując istniejący plik w głównym katalogu forum. Pamiętaj, aby wysłać go w trybie tekstowym (ASCII). Kiedy plik config.php znajdzie się na serwerze, kliknij na „Dalej”, aby przejść do następnego etapu.',
	'DL_DOWNLOAD'				=> 'Pobierz',
	'DONE'						=> 'Zrobione',

	'ENABLE_KEYS'				=> 'Ponowne odblokowywanie kluczy. Może to chwilę potrwać.',

	'FILES_OPTIONAL'			=> 'Dodatkowe pliki i katalogi',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcjonalne</strong> - Te pliki, foldery lub uprawnienia, nie są wymagane. Instalator spróbuje wielu metod, aby je utworzyć, jeśli one nie istnieją lub nie są zapisywalne, jednak ich obecność przyspieszy instalację.',
	'FILES_REQUIRED'			=> 'Pliki i foldery',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Wymagane</strong> - phpBB potrzebuje możliwości odczytywania lub zapisywania tych plików. Napis „Nie znaleziono” oznacza, że musisz utworzyć odpowiedni plik lub folder, a napis „Niezapisywalne” oznacza, że musisz zmienić uprawnienia dostępu do odpowiedniego pliku lub folderu, aby umożliwić phpBB zapisywanie w nim informacji.',
	'FILLING_TABLE'				=> 'Wypełnianie tabeli <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Wypełnianie tabel',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB nie wspiera już wersji Firebird/Interbase starszych niż 2.1. Zaktualizuj swoją instalację Firebirda przynajmniej do wersji 2.1.0 przed kontynuowaniem aktualizacji forum.',
	'FINAL_STEP'				=> 'Uruchom ostatni krok',
	'FORUM_ADDRESS'				=> 'Adres forum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'To jest adres WWW Twojego poprzedniego forum, na przykład <samp>http://www.example.com/phpBB2/</samp>. Jeśli wpisałeś tu adres i nie pozostawiłeś pustego każdego wystąpienia tego adresu, będzie on zastąpiony przez adres Twojego nowego forum w postach, prywatnych wiadomościach oraz podpisach.',
	'FORUM_PATH'				=> 'Ścieżka do starego forum',
	'FORUM_PATH_EXPLAIN'		=> 'To jest relatywna ścieżka lokalna od głównego katalogu phpBB3 do głównego katalogu Twojego poprzedniego forum ',
	'FOUND'						=> 'Znaleziono',
	'FTP_CONFIG'				=> 'Prześlij plik config.php przez FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB wykrył na serwerze moduł FTP. Możesz spróbować automatycznie zainstalować plik config.php. W tym celu musisz uzupełnić poniższe pola.',
	'FTP_PATH'					=> 'Ścieżka FTP',
	'FTP_PATH_EXPLAIN'			=> 'To jest ścieżka z katalogu głównego do katalogu phpBB, np. htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Wyślij',

	'GPL'						=> 'Generalna Licencja Publiczna',

	'INITIAL_CONFIG'				=> 'Podstawowa konfiguracja',
	'INITIAL_CONFIG_EXPLAIN'		=> 'Instalator wykrył, że na tym serwerze można zainstalować phpBB3. Teraz musisz podać niektóre informacje. Jeżeli nie wiesz jak połączyć się z bazą danych, skontaktuj się z dostawcą usługi hostingowej lub szukaj pomocy na forach oferujących wsparcie dla phpBB. Podczas wpisywania ustawień upewnij się, że są poprawne zanim przejdziesz do następnego kroku.',
	'INSTALL_CONGRATS'				=> 'Gratulacje!',
	'INSTALL_CONGRATS_EXPLAIN'      => 'Właśnie zainstalowałeś skrypt phpBB %1$s. Teraz masz dwie możliwości:</p>
		<h2>Przekonwertuj istniejące forum do phpBB3</h2>
		<p>Za pomocą Ujednoliconego Systemu Konwertującego phpBB możesz przekonwertować forum oparte o phpBB2 i inne skrypty do phpBB3. Jeżeli masz forum, które chcesz przekonwertować, <a href="%2$s">uruchom konwerter</a>.</p>
		<h2>Zacznij używać swojego phpBB3!</h2>
		<p>Kliknięcie w link poniżej przeniesie Cię do formularza przesyłania danych statystycznych do phpBB w Twoim panelu administratora (PA). Będziemy wdzięczni jeśli zgodzisz się nam pomóc przesyłając te informacje. Po tym, powinieneś poświęcić chwilę na dostosowanie ustawień forum do swoich potrzeb. Pamiętaj, że pomoc w używaniu phpBB możesz uzyskać czytając <a href="http://www.phpbb.com/support/documentation/3.0/" rel="external">dokumentację</a>, <a href="%3$s">plik README</a> i pytając na polskim forum <a href="http://phpbb3.pl/" rel="external">phpBB3.PL</a>.</p>
		<p><strong>Powinieneś teraz skasować, przenieść lub zmienić nazwę folderu install/. Jeśli tego nie zrobisz to działał będzie tylko panel administratora.</strong></p>',
	'INSTALL_INTRO'					=> 'Witamy w instalatorze phpBB3',

	'INSTALL_INTRO_BODY'		=> 'Ten kreator pomoże zainstalować Ci phpBB3 na Twoim serwerze.</p><p>Podczas instalacji będziesz musiał podać informacje o Twojej bazie danych. Jeżeli ich nie znasz, skontaktuj się z osobami zarządzającymi Twoim serwerem i spytaj o nie. Nie będziesz mógł bez nich zainstalować phpBB3. Potrzebujesz:</p>

	<ul>
		<li>Typ bazy danych - rodzaj bazy danych, której chcesz użyć.</li>
		<li>Serwer bazy danych lub DSN - adres serwera bazy danych.</li>
		<li>Port bazy danych - port serwera bazy danych, na którym baza działa (zazwyczaj zbędne).</li>
		<li>Nazwa bazy danych - nazwa bazy danych na serwerze bazy danych.</li>
		<li>Login i hasło do bazy danych - informacje potrzebne do zalogowania do bazy danych.</li>
	</ul>

	<p><strong>Notatka:</strong> jeżeli używasz SQLite, powinieneś wpisać pełną ścieżkę do pliku z bazą danych w polu DSN i pozostawić pola login i hasło puste. Z powodów bezpieczeństwa, powinieneś się upewnić, że plik bazy danych nie jest przechowywany w miejscu dostępnym przez Internet.</p>

	<p>phpBB3 wspiera poniższe typy baz danych:</p>
	<ul>
		<li>MySQL, w wersji wyższej lub równej 3.23 (rozszerzenie MySQLi jest wspierane)</li>
		<li>PostgreSQL, w wersji wyższej lub równej 7.3</li>
		<li>SQLite, w wersji wyższej lub równej 2.8.2</li>
		<li>Firebird, w wersji wyższej lub równej 2.1</li>
		<li>MS SQL Server, w wersji wyższej lub równej 2000 (bezpośrednio lub przez ODBC)</li>
		<li>Oracle</li>
	</ul>

	<p>Tylko bazy wspierane przez Twój serwer zostaną wyświetlone przy instalacji.',
	'INSTALL_INTRO_NEXT'			=> 'Aby rozpocząć instalację, kliknij w poniższy link.',
	'INSTALL_LOGIN'					=> 'Zaloguj się',
	'INSTALL_NEXT'					=> 'Dalej',
	'INSTALL_NEXT_FAIL'				=> 'Niektóre parametry są niepoprawne, musisz je poprawić, zanim przejdziesz do następnego etapu. Zignorowanie tego ostrzeżenia może zakończyć się niekompletną instalacją.',
	'INSTALL_NEXT_PASS'				=> 'Podstawowe testy wykazały, że możesz przejść do następnego etapu instalacji. Jeżeli zmieniłeś jakieś uprawnienia, moduły itp., ponownie przetestuj konfigurację.',
	'INSTALL_PANEL'					=> 'Instalator phpBB3',
	'INSTALL_SEND_CONFIG'			=> 'Niestety instalator nie może automatycznie zapisać pliku config.php. Prawdopodobnie taki plik nie istnieje lub skrypt nie ma uprawnień do zapisu. Możliwe rozwiązania problemu zostaną wyświetlone poniżej.',
	'INSTALL_START'					=> 'Rozpocznij instalację',
	'INSTALL_TEST'					=> 'Testuj',
	'INST_ERR'						=> 'Błąd w instalacji',
	'INST_ERR_DB_CONNECT'			=> 'Nie można połączyć się z bazą danych, poniżej znajduje się opis błędu.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Podany plik bazy danych jest wewnątrz katalogu z Twoim forum. Powinieneś umieścić go w miejscu niedostępnym przez Internet.',
	'INST_ERR_DB_NO_ERROR'			=> 'Nie ma wiadomości o błędach.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Wersja MySQL zainstalowana na tym serwerze nie jest kompatybilna z wybraną przez Ciebie opcją „MySQL z rozrzeżeniem MySQLi”. Spróbuj użyć opcji „MySQL”.',
	'INST_ERR_DB_NO_SQLITE'			=> 'Wersja rozszerzenia SQLite zainstalowana na tym serwerze jest za stara i musi zostać zaktualizowana do wersji 2.8.2 lub wyższej.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Wersja Oracle zainstalowana na tym serwerze wymaga ustawienia parametru <var>NLS_CHARACTERSET</var> na <var>UTF8</var>. Zmień ten parametr lub zaktualizuj instalację do wersji 9.2 lub wyższej.',
	'INST_ERR_DB_NO_FIREBIRD'		=> 'Wersja Firebird zainstalowana na tym serwerze jest za stara i musi zostać zaktualizowana do wersji 2.1 lub wyższej.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'Wybrana baza danych Firebirda ma wielkość strony niższą od 8192, musi ona być równa lub wyższa 8192.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Wybrana baza danych nie została utworzona w kodowaniu <var>UNICODE</var> lub <var>UTF8</var>. Spróbuj zainstalować forum z bazą danych o kodowaniu <var>UNICODE</var> lub <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'			=> 'Nie podałeś nazwy bazy danych.',
	'INST_ERR_EMAIL_INVALID'		=> 'Podany adres e-mail zawiera błąd.',
	'INST_ERR_EMAIL_MISMATCH'		=> 'Podane adresy e-mail nie są jednakowe.',
	'INST_ERR_FATAL'				=> 'Krytyczny błąd instalacji!',
	'INST_ERR_FATAL_DB'				=> 'Wystąpił krytyczny, niemożliwy do cofnięcia błąd bazy danych. Problem może być spowodowany brakiem uprawnień użytkownika bazy danych do wykonania poleceń <code>CREATE TABLE</code> lub <code>INSERT</code> itp. Więcej informacji możesz zobaczyć poniżej. Skontaktuj się z dostawcą usługi hostingowej lub poszukaj pomocy na forach oferujących wsparcie dla phpBB.',
	'INST_ERR_FTP_PATH'				=> 'Nie można odnaleźć podanej ścieżki, sprawdź, czy jest poprawna.',
	'INST_ERR_FTP_LOGIN'			=> 'Nie można zalogować się do serwera FTP, sprawdź nazwę użytkownika i hasło',
	'INST_ERR_MISSING_DATA'			=> 'Musisz wypełnić wszystkie pola w tym formularzu.',
	'INST_ERR_NO_DB'				=> 'Nie można załadować modułu PHP obsługującego wybrany typ bazy danych',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Podane hasła nie są jednakowe.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Wpisane hasło jest za długie. Maksymalna długość to 30 znaków.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Wpisane hasło jest za krótkie. Minimalna długość to 6 znaków.',
	'INST_ERR_PREFIX'				=> 'Już istnieją tabele z takim prefiksem, wybierz inny.',
	'INST_ERR_PREFIX_INVALID'		=> 'Wybrany prefiks tabel nie jest właściwy dla Twojej bazy danych. Użyj innego, usuwając znaki specjalne.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Podany prefiks tabel jest za długi. Maksymalna długość to %d znaków.',
	'INST_ERR_USER_TOO_LONG'		=> 'Wpisany login jest za długi. Maksymalna długość to 20 znaków.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Wpisany login jest za krótki. Minimalna długość to 3 znaki.',
	'INVALID_PRIMARY_KEY'			=> 'Nieprawidłowy klucz główny : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Weź pod uwagę, że to może chwilę potrwać... Nie zatrzymuj skryptu.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Rozszerzenie mbstring',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Wymagane</strong> - mbstring to rozszerzenie PHP dostarczające funkcje służące do operowania na tekstach o wielobajtowych znakach. Niektóre właściwości mbstring nie są kompatybilne z phpBB i muszą być zablokowane',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Przeciążanie funkcji',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> musi być ustawione na 0 lub 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Kodowanie przezroczystych znaków',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => '<var>mbstring.encoding_translation</var> musi być ustawione na 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Konwersja znaków wejściowych HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> musi być ustawione na „pass”.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Konwersja znaków wyjściowych HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> musi być ustawione na „pass”.',

	'MAKE_FOLDER_WRITABLE'		=> 'Upewnij się, że ten folder istnieje i jest zapiswyalny przez serwer, a potem spróbuj ponownie:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Upewnij się, że te foldery istnieją i są zapisywalne przez serwer, a potem spróbuj ponownie:<br />»<strong>%s</strong>',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Twój schemat bazy danych MySQL jest nieaktualny. phpBB wykryło schemat dla MySQL 3.x/4.x, ale serwer działa na MySQL %2$s.<br /><strong>Przed kontynuacją aktualizacji musisz zaktualizować schemat.</strong><br /><br />Więcej informacji możesz znaleźć w <a href="http://wiki.phpbb3.pl/wiki/Aktualizacja_MySQL">artykule Wiki.phpBB3.PL o aktualizacji schematu MySQL</a>. Jeśli napotkasz problemy, zadaj pytanie na <a href="http://phpbb3.pl/">forum phpBB3.PL</a>.',

	'NAMING_CONFLICT'			=> 'Konflikt w nazywaniu: %s i %s to aliasy<br /><br />%s',
	'NEXT_STEP'					=> 'Przejdź do następnego etapu',
	'NOT_FOUND'					=> 'Nie znaleziono.',
	'NOT_UNDERSTAND'			=> 'Nie można zrozumieć %s #%d, tabela %s („%s”).',
	'NO_CONVERTORS'				=> 'Żaden konwerter nie jest dostępny.',
	'NO_CONVERT_SPECIFIED'		=> 'Żaden konwerter nie został wybrany.',
	'NO_LOCATION'				=> 'Nie można określić położenia. Jeśli wiesz czy i gdzie ImageMagick jest zainstalowany, to podaj ścieżkę do niego w panelu administratora po zainstalowaniu phpBB.',
	'NO_TABLES_FOUND'			=> 'Nie znaleziono żadnych tabel.',

	'OVERVIEW_BODY'				=> 'Witamy w phpBB3!<br /><br />phpBB™ jest najczęściej na świecie używanym rozwiązaniem forów internetowych o otwartym kodzie. phpBB3 to efekt rozpoczętej w 2000 roku pracy phpBB Group. Tak jak jego poprzednicy, phpBB3 ma wielkie możliwości, jest przyjazne dla użytkowników i w pełni wspierane przez phpBB Group. phpBB3 posiada te walory, które przyczyniły się do ogromnej popularności phpBB2, oraz dodaje najczęściej zgłaszane funkcje, których w poprzednich wersjach brakowało. Mamy nadzieję, że spełnia Twoje oczekiwania.<br /><br />Ten instalator przeprowadzi Cię przez proces instalacji phpBB3, aktualizowania skryptu do najnowszej wersji oraz konwersji do phpBB3 z innych skryptów forów dyskusyjnych (m.in. phpBB2). Więcej informacji można znaleźć w <a href="../docs/INSTALL.html">przewodniku instalacji</a>.<br /><br />Aby przeczytać licencję phpBB3 lub dowiedzieć się więcej o uzyskiwaniu pomocy, wybierz odpowiednią opcję z bocznego menu. Aby kontynuować, wybierz odpowiednią kartę powyżej.',

	'PCRE_UTF_SUPPORT'				=> 'Obsługa UTF-8 przez PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nie</strong> zadziała, jeśli Twoja instalacja PHP nie została skompilowana ze wsparciem UTF-8 w rozszerzeniu PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'		=> 'Dostępność funkcji PHP getimagesize()',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Wymagane</strong> - Żeby phpBB działało prawidłowo, funkcja getimagesize() musi działać.',
	'PHP_OPTIONAL_MODULE'			=> 'Dodatkowe moduły',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcjonalne</strong> - Te moduły nie są wymagane do prawidłowego działania skryptu phpBB3, jednakże mogą one zwiększyć funkcjonalność forum.',
	'PHP_SUPPORTED_DB'				=> 'Obsługiwane bazy danych',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Wymagane</strong> - Musisz posiadać przynajmniej jedną z obsługiwanych baz danych powiązaną z PHP. Jeżeli żaden z modułów nie jest wyświetlony jako dostępny, powinieneś skontaktować się z dostawcą usługi hostingowej lub przejrzeć dokumentację PHP w poszukiwaniu porady.',
	'PHP_REGISTER_GLOBALS'			=> 'Ustawienie PHP <var>register_globals</var> jest zablokowane',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB będzie działać nawet jeśli to ustawienie jest włączone, ale jeśli to możliwe, to powinno zostać wyłączone, ponieważ jest luką bezpieczeństwa.',
	'PHP_SAFE_MODE'					=> 'Tryb bezpieczny',
	'PHP_SETTINGS'					=> 'Wersja PHP i ustawienia',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Wymagane</strong> - Aby zainstalować phpBB3, na serwerze musi być zainstalowane PHP w wersji nie niższej niż 4.3.3. Jeśli poniżej wyświetla się napis <var>safe mode</var>, oznacza to, że PHP na Twoim serwerze działa w tym trybie. To może wprowadzić nieprawidłowości w działaniu niektórych funkcji forum.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Ustawienie PHP <var>allow_url_fopen</var> jest odblokowane',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcjonalne</strong> - To ustawienie nie jest konieczne, ale niektóre funkcje phpBB (m.in. avatary trzymane na innych serwerach) nie będą działać, jeżeli to ustawienie będzie zablokowane. ',
	'PHP_VERSION_REQD'				=> 'Wersja PHP >= 4.3.3',
	'POST_ID'						=> 'ID postu',
	'PREFIX_FOUND'					=> 'Skan Twoich tabel wykazał prawidłową instalację używającą prefiksu <strong>%s</strong> w nazwach tabel.',
	'PREPROCESS_STEP'				=> 'Wykonywanie czynności przygotowujących',
	'PRE_CONVERT_COMPLETE'			=> 'Wszystkie etapy przygotowujące do konwersji zostały ukończone. Możesz teraz rozpocząć proces konwersji. Pamiętaj, że nie jest wykluczone, iż będziesz musiał ręcznie zrobić i poprawić kilka rzeczy. Po konwersji sprawdź, jakie uprawnienia dostali użytkownicy, przebuduj indeks wyszukiwarki (jeśli to konieczne) i upewnij się, że pliki zostały poprawnie skopiowane (avatary, załączniki, uśmieszki itp.).',
	'PROCESS_LAST'					=> 'Wykonywanie czynności końcowych',

	'REFRESH_PAGE'				=> 'Odśwież stronę, aby kontynuować konwersję',
	'REFRESH_PAGE_EXPLAIN'		=> 'Jeśli włączone, to po zakończeniu każdego kroku konwerter automatycznie odświeży stronę, aby kontynuować konwersję. Jeżeli to Twoja pierwsza konwersja i chcesz przetestować konwerter, żeby wychwycić wszystkie błędy, powinieneś to wyłączyć.',
	'REQUIREMENTS_TITLE'		=> 'Wymagania instalacji',
	'REQUIREMENTS_EXPLAIN'		=> 'Przed rozpoczęciem pełnej instalacji phpBB3 przeprowadzi testy zgodności serwera z minimalnymi wymaganiami skryptu. Przed kontynuowaniem instalacji zapoznaj się z wynikami testu i spełnij wszystkie podstawowe wymagania. Jeśli chcesz używać funkcji zależnych od opcjonalnych testów, upewnij się, że one również zostały pomyślnie ukończone.',
	'RETRY_WRITE'				=> 'Spróbuj ponownie',
	'RETRY_WRITE_EXPLAIN'		=> 'Możesz zmienić atrybuty pliku config.php, aby pozwolić instalatorowi zapisać go automatycznie. Aby jeszcze raz spróbować zapisać konfigurację, kliknij „Spróbuj ponownie”. Pamiętaj, aby przywrócić standardowe atrybuty pliku config.php po zakończeniu instalacji.',

	'SCRIPT_PATH'				=> 'Ścieżka do phpBB3',
	'SCRIPT_PATH_EXPLAIN'		=> 'To jest ścieżka do skryptu w odniesieniu do domeny głównej, na przykład <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Wybierz język',
	'SERVER_CONFIG'				=> 'Konfiguracja serwera',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Indeks wyszukiwarki nie został przekonwertowany.',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'=> 'Indeks wyszukiwarki ze starego forum nie został przekonwertowany. Wyszukiwanie zawsze będzie zwracać pusty rezultat. Aby utworzyć nowy indeks wyszukiwarki, idź do panelu administratora, wybierz kartę <span style="text-transform: uppercase;">Konserwacja</span>, a następnie kliknij na Indeks wyszukiwarki.',
	'SOFTWARE'					=> 'Skrypt forów dyskusyjnych',
	'SPECIFY_OPTIONS'			=> 'Ustaw opcje konwersji',
	'STAGE_ADMINISTRATOR'		=> 'Administrator',
	'STAGE_ADVANCED'			=> 'Zaawansowane ustawienia',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Ustawienia na tej stronie należy zmienić tylko wtedy, gdy wiesz, że potrzebujesz czegoś innego od standardu. Jeśli nie jesteś pewien, to przejdź do następnej strony, ponieważ to wszystko można zmienić później korzystając z panelu administratora.',
	'STAGE_CONFIG_FILE'			=> 'Plik konfiguracyjny',
	'STAGE_CREATE_TABLE'		=> 'Tworzenie tabel',
	'STAGE_CREATE_TABLE_EXPLAIN'=> 'Tabele używane przez phpBB3 zostały utworzone i wypełnione podstawowymi informacjami. Przejdź dalej, żeby zakończyć instalację phpBB3.',
	'STAGE_DATABASE'			=> 'Baza danych',
	'STAGE_FINAL'				=> 'Ostatni krok',
	'STAGE_INTRO'				=> 'Wprowadzenie',
	'STAGE_IN_PROGRESS'			=> 'Konwersja',
	'STAGE_REQUIREMENTS'		=> 'Wymagania',
	'STAGE_SETTINGS'			=> 'Ustawienia',
	'STARTING_CONVERT'			=> 'Rozpoczynanie konwersji',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>',
	'SUB_INTRO'					=> 'Wprowadzenie',
	'SUB_LICENSE'				=> 'Licencja',
	'SUB_SUPPORT'				=> 'Wsparcie',
	'SUCCESSFUL_CONNECT'		=> 'Połączono',
	'SUPPORT_BODY'				=> 'Dla aktualnej, stabilnej wersji phpBB3, oferowane jest pełne, darmowe wsparcie. Zawiera ono:</p><ul><li>instalację</li><li>konfigurację</li><li>pytania techniczne</li><li>problemy związane z potencjalnymi błędami w skrypcie</li><li>aktualizację z kandydatów do wydania (RC) do najnowszej stabilnej wersji</li><li>konwersję z phpBB 2.0.x do phpBB3</li><li>konwersję z innych skryptów forów dyskusyjnych do phpBB3 (zobacz <a href="http://www.phpbb.com/community/viewforum.php?f=65">dział konwerterów</a>)</li></ul><p>Użytkownikom nadal korzystającym z testowych wydań phpBB3 radzimy ich usunięcie i zainstalowanie finalnej wersji phpBB3.</p><h2>MODy / Style</h2><p>Z problemami dotyczącymi MODów, napisz w odpowiednim <a href="http://www.phpbb.com/community/viewforum.php?f=81">dziale modyfikacji</a>.<br />Z problemami dotyczącymi stylów, szablonów, zestawów obrazków i motywów, napisz w odpowiednim <a href="http://www.phpbb.com/community/viewforum.php?f=80">dziale stylów</a>.<br /><br />Jeśli Twoje pytania dotyczą konkretnego pakietu, napisz w temacie dedykowanym dla tego pakietu.</p><h2>Uzyskiwanie pomocy<h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Pakiet Powitalny phpBB</a><br /><a href="http://www.phpbb.com/support/">Sekcja wsparcia</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Poradnik Szybki Start</a><br /><br />Aby upewnić się, że wiesz o najnowszych informacjach i wydaniach, możesz <a href="http://www.phpbb.com/support/">zapisać się do naszej listy mailingowej</a>.<br /><br />',
	'SYNC_FORUMS'				=> 'Rozpoczynanie synchronizacji działów',
	'SYNC_POST_COUNT'			=> 'Synchronizacja liczników postów',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizacja liczników postów od %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Rozpoczynajnie synchronizacji wątków',
	'SYNC_TOPIC_ID'				=> 'Synchronizacja wątków o ID od %1$s do %2$s',

	'TABLES_MISSING'			=> 'Nie znaleziono następujących tabel:<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefiks nazw tabel w bazie danych',
	'TABLE_PREFIX_SAME'			=> 'Prefiks nazw tabel musi być tym używanym przez skrypt z którego konwertujesz.<br />» Podany prefiks nazw tabel to %s.',
	'TESTS_PASSED'				=> 'Testy zaliczone',
	'TESTS_FAILED'				=> 'Testy niezaliczone',

	'UNABLE_WRITE_LOCK'			=> 'Nie można zapisać pliku blokującego.',
	'UNAVAILABLE'				=> 'Niedostępne',
	'UNWRITABLE'				=> 'Niezapisywalny',
	'UPDATE_TOPICS_POSTED'		=> 'Generowanie informacji o napisanych wątkach',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Wystąpił błąd w czasie generowania informacji o napisanych wątkach. Gdy skończysz konwersję, będziesz mógł zsynchronizować te informacje w panelu administratora.',

	'VERIFY_OPTIONS'			=> 'Weryfikacja opcji konwersji',
	'VERSION'					=> 'Wersja',

	'WELCOME_INSTALL'			=> 'Witamy w instalatorze phpBB3!',
	'WRITABLE'					=> 'Zapisywalny',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Wszystkie pliki są identyczne z plikami najnowszej wersji phpBB3. Teraz powinieneś <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">zalogować się</a> i sprawdzić, czy wszystko działa poprawnie. Nie zapomnij usunąć, zmienić nazwę lub przesunąć katalog install/!',
	'ARCHIVE_FILE'				=> 'Plik źródłowy w archiwum',

	'BACK'			=> 'Wstecz',
	'BINARY_FILE'	=> 'Plik binarny',
	'BOT'			=> 'Bot',

	'CHANGE_CLEAN_NAMES'			=> 'Sposób upewnienia się, że nazwa użytkownika nie jest używana przez kilku użytkowników, został zmieniony. Znaleziono kilku użytkowników mających wg nowej metody tę samą nazwę. Musisz ich usunąć lub zmienić ich nazwy, aby upewnić się, że każda nazwa jest używana tylko przez jednego użytkownika, zanim będziesz mógł przejść dalej.',
	'CHECK_FILES'					=> 'Sprawdź pliki',
	'CHECK_FILES_AGAIN'				=> 'Sprawdź pliki ponownie',
	'CHECK_FILES_EXPLAIN'			=> 'W następnym kroku wszystkie pliki zostaną porównane z nowymi plikami. Może to zająć dłuższą chwilę, jeśli jest to pierwsze sprawdzanie plików.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Według Twojej bazy danych Twoja wersja jest aktualna. Możesz uruchomić porównywanie plików, aby być pewnym, że wszystkie pliki są naprawdę identyczne z plikami najnowszej wersji phpBB3.',
	'CHECK_UPDATE_DATABASE'			=> 'Kontynuuj proces aktualizacji',
	'COLLECTED_INFORMATION'			=> 'Informacje o plikach',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Poniższa lista pokazuje informacje o plikach do zaktualizowania. Przeczytaj wszystkie informacje, aby się dowiedzieć, co one oznaczają i co musisz zrobić, aby aktualizacja się udała.',
	'COLLECTING_FILE_DIFFS'			=> 'Zbieranie różnic w plikach',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Teraz powinieneś <a href="../ucp.php?mode=login">się zalogować</a> i sprawdzić, czy wszystko działa właściwie. Nie zapomnij usunąć, zmienić nazwę lub przesunąć katalog install/!',
	'CONTINUE_UPDATE_NOW'			=> 'Kontynuuj proces aktualizacji',
	'CONTINUE_UPDATE'				=> 'Kontynuuj aktualizację',
	'CURRENT_FILE'					=> 'Początek konfliktu - oryginalny kod pliku przed aktualizacją',
	'CURRENT_VERSION'				=> 'Zainstalowana wersja',

	'DATABASE_TYPE'						=> 'Typ bazy danych',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Plik aktualizacyjny bazy danych w katalogu install/ nie jest aktualny. Upewnij się, że wgrałeś właściwą wersję pliku.',
	'DELETE_USER_REMOVE'				=> 'Usuń użytkownika i jego posty',
	'DELETE_USER_RETAIN'				=> 'Usuń użytkownika, ale zatrzymaj jego posty',
	'DESTINATION'						=> 'Docelowy plik',
	'DIFF_INLINE'						=> 'W linii',
	'DIFF_RAW'							=> 'Ujednolicony, surowy diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kod użyty w zaktualizowanym/nowym pliku',
	'DIFF_SIDE_BY_SIDE'					=> 'Wersja obok wersji',
	'DIFF_UNIFIED'						=> 'Ujednolicony diff',
	'DO_NOT_UPDATE'						=> 'Nie aktualizuj tego pliku',
	'DONE'								=> 'Zrobione',
	'DOWNLOAD'							=> 'Pobierz',
	'DOWNLOAD_AS'						=> 'Pobierz jako',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Pobierz archiwum ze zmodyfikowanymi plikami (zalecane)',
	'DOWNLOAD_CONFLICTS'				=> 'Pobierz plik z konfliktami',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Szukaj &lt;&lt;&lt; aby natrafić na konflikty',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Pobierz archiwum ze zmodyfikowanymi plikami',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Po pobraniu powinieneś rozpakować archiwum. Znajdziesz w nim zmodyfikowane pliki, które musisz wgrać do głównego katalogu Twojej instalacji phpBB3. Gdy to zrobisz, sprawdź pliki ponownie za pomocą innego z poniższych przycisków.',

	'ERROR'			=> 'Błąd',
	'EDIT_USERNAME'	=> 'Zmień nazwę użytkownika',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Plik jest już aktualny.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Wykonanie diffu na tym pliku nie jest możliwe.',
	'FILE_USED'						=> 'Używane informacje są z',			// pojedynczego pliku
	'FILES_CONFLICT'				=> 'Konflikty w plikach',
	'FILES_CONFLICT_EXPLAIN'		=> 'Poniższe pliki zostały zmodyfikowane i nie ma możliwości połączenia zmian. Sprawdź, jakie to są konflikty i spróbuj je ręcznie rozwiązać lub kontynuuj aktualizację wybierając jedną z możliwości. Pierwsza opcja spowoduje, że linie powodujące konflikt zostaną usunięte. Druga spowoduje utracenie zmian wprowadzonych w nowej wersji pliku. Jeśli rozwiążesz konflikty ręcznie, sprawdż pliki ponownie po zmodyfikowaniu ich.',
	'FILES_MODIFIED'				=> 'Zmodyfikowane pliki',
	'FILES_MODIFIED_EXPLAIN'		=> 'Poniższe pliki zostały zmodyfikowane, ale możliwe jest połączenie zmian. Nowa wersja pliku będzie zawierać modyfikacje zawarte w nowej wersji phpBB3 i modyfikacje, które wykonałeś Ty.',
	'FILES_NEW'						=> 'Nowe pliki',
	'FILES_NEW_EXPLAIN'				=> 'Poniższe pliki nie istnieją w Twojej instalacji phpBB3 i zostaną do niej dodane.',
	'FILES_NEW_CONFLICT'			=> 'Nowe pliki, które istnieją już w Twojej instalacji',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Poniższe pliki zostały dodane w najnowszej wersji, ale pliki o takich nazwach już istnieją w Twojej instalacji. Twoje pliki zostaną nadpisane przez oryginalne pliki.',
	'FILES_NOT_MODIFIED'			=> 'Niezmienione pliki',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Te pliki nie zostały zmodyfikowane i są identyczne z plikami wersji phpBB, z której aktualizujesz.',
	'FILES_UP_TO_DATE'				=> 'Już zaktualizowane pliki',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Poniższe pliki są aktualne i nie muszą być aktualizowane.',
	'FTP_SETTINGS'					=> 'Ustawienia FTP',
	'FTP_UPDATE_METHOD'				=> 'Wgrywanie za pomocą FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Znalezione pliki aktualizacyjne nie są kompatybilne z wersją Twojej instalacji. Zainstalowana wersja to %1$s, pliki aktualizacyjne aktualizują phpBB z wersji %2$s do wersji %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Pliki aktualizacyjne są niekompletne.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Aktualizacja bazy danych została zakończona. Kontynuuj aktualizację.',

	'KEEP_OLD_NAME'		=> 'Zachowaj nazwę użytkownika',

	'LATEST_VERSION'		=> 'Najnowsza wersja',
	'LINE'					=> 'Linia',
	'LINE_ADDED'			=> 'Dodana',
	'LINE_MODIFIED'			=> 'Zmieniona',
	'LINE_REMOVED'			=> 'Usunięta',
	'LINE_UNMODIFIED'		=> 'Niezmieniona',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Aby zaktualizować swoją instalację musisz się najpierw zalogować.',

	'MAPPING_FILE_STRUCTURE'	=> 'Żeby ułatwić wgrywanie plików, tutaj są podane lokalizacje plików odpowiadające Twojej instalacji phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Połącz zmiany',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Nie łącz - użyj nowego pliku',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Nie łącz - użyj zainstalowanego pliku',
	'MERGE_MOD_FILE_OPTION'		=> 'Połącz zmiany (utrać nowy kod phpBB w konfliktującym bloku)',
	'MERGE_NEW_FILE_OPTION'		=> 'Połącz zmiany (utrać samodzielnie zmodyfikowany kod w konfliktującym bloku)',
	'MERGE_SELECT_ERROR'		=> 'Metoda łączenia zmian w plikach z konfliktami nie została prawidłowo wybrana.',
	'MERGING_FILES'				=> 'Łączenie zmian',
	'MERGING_FILES_EXPLAIN'		=> 'Trwa zbieranie ostatecznych zmian w plikach.<br /><br />Poczekaj, aż phpBB3 ukończy wszystkie operacje na zmienionych plikach.',

	'NEW_FILE'						=> 'Koniec konfliktu',
	'NEW_USERNAME'					=> 'Nowa nazwa użytkownika',
	'NO_AUTH_UPDATE'				=> 'Nie masz praw do aktualizacji',
	'NO_ERRORS'						=> 'Brak błędów',
	'NO_UPDATE_FILES'				=> 'Pliki, które nie zostaną zaktualizowane',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Poniższe pliki są nowe lub zmodyfikowane, ale katalog w których one normalnie się znajdują nie istnieje w Twojej instalacji phpBB3. Jeśli lista zawiera pliki w innych katalogach niż language/ i styles/, oznacza to, że mogłeś zmodyfikować swoją strukturę katalogów i aktualizacja może nie być pełna.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nie znaleziono prawidłowego katalogu aktualizacyjnego, upewnij się, że wgrałeś właściwe pliki.<br /><br />Twoja instalacja <strong>nie</strong> wygląda na aktualną. Aktualizacje do Twojej wersji phpBB %1$s są dostępne na stronie <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a>. Wejdź na tę stronę i pobierz właściwy pakiet aktualizujący z wersji %2$s do wersji %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Twoja instalacja jest aktualna. Nie musisz uruchamiać narzędzia aktualizującego. Jeśli, mimo to, chcesz sprawdzić integralność swoich plików, upewnij się, że wgrałeś właściwe pliki aktualizacyjne.',
	'NO_UPDATE_INFO'				=> 'Informacje o plikach aktualizacyjnych nie zostały znalezione.',
	'NO_UPDATES_REQUIRED'			=> 'Aktualizacje nie są wymagane',
	'NO_VISIBLE_CHANGES'			=> 'Nie ma widocznych zmian',
	'NOTICE'						=> 'Uwaga',
	'NUM_CONFLICTS'					=> 'Liczba konfliktów',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Dotychczas sprawdzono różnice w %1$d plikach (z %2$d łącznie).<br />Poczekaj, aż sprawdzanie plików zostanie zakończone.',

	'OLD_UPDATE_FILES'		=> 'Pliki aktualizacyjne nie są aktualne. Znalezione pliki aktualizują phpBB z wersji %1$s do wersji %2$s, ale najnowsza wersja phpBB to %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Ten pakiet aktualizuje do wersji',
	'PERFORM_DATABASE_UPDATE'			=> 'Uruchom aktualizację bazy danych',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Poniżej znajduje się przycisk do uruchomienia skryptu aktualizującego bazę danych. Aktualizacja bazy danych może zająć dłuższą chwilę, więc nie zatrzymuj działania skryptu, gdy wydaje się, że nic się nie dzieje. Po zakończeniu aktualizacji bazy danych postępuj zgodnie z instrukcjami, aby kontynuować proces aktualizacji.',
	'PREVIOUS_VERSION'					=> 'Poprzednia wersja',
	'PROGRESS'							=> 'Postęp',

	'RESULT'					=> 'Rezultat',
	'RUN_DATABASE_SCRIPT'		=> 'Zaktualizuj moją bazę danych',

	'SELECT_DIFF_MODE'			=> 'Wybierz typ diffu',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Wybierz format archiwum do pobrania',
	'SELECT_FTP_SETTINGS'		=> 'Wybierz ustawienia FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Wyświetl różnice/konflikty',
	'SHOW_DIFF_FINAL'			=> 'Wyświetl plik wynikowy',
	'SHOW_DIFF_MODIFIED'		=> 'Wyświetl połączone różnice',
	'SHOW_DIFF_NEW'				=> 'Wyświetl treść pliku',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Wyświetl różnice',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Wyświetl różnice',
	'SOME_QUERIES_FAILED'		=> 'Część poleceń SQL nie zadziałała, informacje o błędach znajdują się poniżej.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'To prawdopodobnie nie jest coś, czym powinieneś się martwić, aktualizacja będzie kontynuowana. Jeśli nie uda się zakończyć aktualizacji, możesz poszukać pomocy na naszych forach internetowych. W pliku <a href="../docs/README.html">README</a> są informacje o tym, jak znaleźć pomoc.',
	'STAGE_FILE_CHECK'			=> 'Porównywanie plików',
	'STAGE_UPDATE_DB'			=> 'Aktualizacja bazy danych',
	'STAGE_UPDATE_FILES'		=> 'Aktualizacja plików',
	'STAGE_VERSION_CHECK'		=> 'Sprawdzanie wersji',
	'STATUS_CONFLICT'			=> 'Zmodyfikowany plik, który powoduje konflikty',
	'STATUS_MODIFIED'			=> 'Zmodyfikowany plik',
	'STATUS_NEW'				=> 'Nowy plik',
	'STATUS_NEW_CONFLICT'		=> 'Nowy plik, który istnieje już w Twojej instalacji',
	'STATUS_NOT_MODIFIED'		=> 'Niezmodyfikowany plik',
	'STATUS_UP_TO_DATE'			=> 'Już zaktualizowany plik',

	'TOGGLE_DISPLAY'			=> 'Wyświetl/Ukryj listę plików',
	'TRY_DOWNLOAD_METHOD'		=> 'Możesz spróbować metody pobierania zmodyfikowanych plików.<br />Ten sposób zawsze działa i jest sposobem zalecanym.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Wypróbuj ten sposób',

	'UPDATE_COMPLETED'				=> 'Aktualizacja zakończona',
	'UPDATE_DATABASE'				=> 'Zaktualizuj bazę danych',
	'UPDATE_DATABASE_EXPLAIN'		=> 'W następnym kroku zaktualizowana zostanie baza danych.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Zaktualizuj schemat bazy danych',
	'UPDATE_FILES'					=> 'Zaktualizuj pliki',
	'UPDATE_FILES_NOTICE'			=> 'Upewnij się, że zaktualizowałeś również pliki forum, ten plik aktualizuje tylko bazę danych.',
	'UPDATE_INSTALLATION'			=> 'Zaktualizuj instalację phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Za pomocą tej opcji możesz zaktualizować swoją instalację phpBB do najnowszej wersji.<br />W czasie procesu wszystkie Twoje pliki zostaną porównane z plikami nowej wersji. Przed aktualizacją będziesz mógł przejrzeć wszystkie różnice.<br /><br />Aktualizacja plików może być zrobiona dwoma różnymi sposobami.</p>

<h2>Aktualizacja manualna</h2>

<p>Ten tryb pozwala Ci pobrać Twoje zmodyfikowane pliki, wykonać potrzebne poprawki i samodzielnie wgrać je na serwer. Po wgraniu plików powinieneś wykonać ponowny test. Jeśli wszystko będzie zaktualizowane, zostaniesz przeniesiony do aktualizacji bazy danych.</p>

<h2>Aktualizacja automatyczna za pomocą FTP</h2>

<p>Ta metoda jest podobna do pierwszej, ale zamiast samodzielnie wgrywać pliki wystarczy, że podasz informacje dotyczące logowania do Twojego serwera FTP. Po zakończeniu wgrywania pliki zostaną porównane ponownie. Jeśli wszystko będzie zaktualizowane, zostaniesz przeniesiony do aktualizacji bazy danych.',
	'UPDATE_INSTRUCTIONS'			=> '<h1>Ogłoszenie o wydaniu</h1>

		<p>Przeczytaj <a href="%1$s" title="%1$s"><strong>ogłoszenie o wydaniu najnowszej wersji</strong></a> zanim przejdziesz dalej, ponieważ może ono zawierać przydatne wiadomości. Na pewno zawiera ono linki umożliwiające pobranie skryptu oraz historię zmian.</p>

		<br />

		<h1>Jak zaktualizować swoją instalację za pomocą Pakietu Automatycznej Aktualizacji</h1>

		<p>Zalecamy aktualizację Twojej instalacji phpBB3 za pomocą Pakietu Automatycznej Aktualizacji. Możesz też zaktualizować swoją instalację za pomocą metod wymienionych w dokumencie INSTALL.html. Oto instrukcje automatycznej aktualizacji phpBB3:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Przejdź na stronę <a href="http://www.phpbb.com/downloads/">http://www.phpbb.com/downloads/</a> i pobierz archiwum „Automatic Update Package”.<br /><br /></li>
			<li>Rozpakuj je.<br /><br /></li>
			<li>Wgraj rozpakowany katalog install/ do głównego katalogu Twojej instalacji phpBB (tam gdzie jest plik config.php).<br /><br /></li>
		</ul>

		<p>Po wgraniu tego katalogu forum będzie niedostępne dla zwykłych użytkowników z powodu istnienia katalogu install/.<br /><br />
		<strong><a href="%2$s" title="%2$s">Uruchom proces aktualizacji prowadząc Twoją przeglądarkę do katalogu install/</a>.</strong><br />
		<br />
		Zostaniesz przeprowadzony przez proces aktualizacji, o jej zakończeniu powiadomi Cię stosowny komunikat.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '<h1>Wykryto niedokończoną aktualizację</h1>

		<p>phpBB wykryło niedokończoną aktualizację automatyczną. Upewnij się, że wykonałeś wszystkie kroki automatycznej aktualizacji. Poniżej znajduje się link do aktualizacji. Możesz też przejść prosto do katalogu install/.</p>
	',
	'UPDATE_METHOD'					=> 'Metoda aktualizacji',
	'UPDATE_METHOD_EXPLAIN'			=> 'Teraz możesz wybrać preferowaną metodę aktualizacji. Wybranie „Wgrania za pomocą FTP” spowoduje wyświetlenie formularza, do którego będziesz musiał wpisać informacje o Twoim koncie FTP. Ta metoda spowoduje, że pliki zostaną automatycznie zaktualizowane, a do nazw starych wersji plików zostanie dodane rozszerzenie .bak. Jeśli wybierzesz „Pobranie zmodyfikowanych plików”, będziesz musiał wgrać je na serwer samodzielnie.',
	'UPDATE_REQUIRES_FILE'			=> 'Aktualizator wymaga, żeby następujący plik istniał: %s',
	'UPDATE_SUCCESS'				=> 'Aktualizacja została zakończona',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Zaktualizowano wszystkie pliki. Następny krok porówna wszystkie pliki ponownie, aby upewnić się, że pliki zostały zaktualizowane właściwie.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Aktualizacja wersji i optymalizacja tabel',
	'UPDATING_DATA'					=> 'Aktualizacja danych',
	'UPDATING_TO_LATEST_STABLE'		=> 'Aktualizacja bazy danych do najnowszej stabilnej wersji',
	'UPDATED_VERSION'				=> 'Zaktualizowana wersja',
	'UPLOAD_METHOD'					=> 'Metoda wgrywania',

	'UPDATE_DB_SUCCESS'				=> 'Aktualizacja bazy danych została zakończona.',
	'USER_ACTIVE'					=> 'Aktywny użytkownik',
	'USER_INACTIVE'					=> 'Nieaktywny użytkownik',

	'VERSION_CHECK'				=> 'Sprawdzanie wersji',
	'VERSION_CHECK_EXPLAIN'		=> 'Sprawdzanie czy Twoja instalacja phpBB jest aktualna.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Twoja instalacja phpBB jest nieaktualna. Kontynuuj proces aktualizacji.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Twoja instalacja phpBB jest nieaktualna.<br />Poniżej znajduje się link do ogłoszenia o wydaniu najnowszej wersji oraz instrukcje jak dokonać aktualizacji.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Twoja instalacja phpBB jest nieaktualna.',
	'VERSION_UP_TO_DATE'		=> 'Twoja instalacja phpBB jest aktualna. Mimo to możesz kontynuować, aby sprawdzić, czy pliki są poprawne.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Twoja instalacja phpBB jest aktualna. Nie musisz jej aktualizować.',
	'VIEWING_FILE_CONTENTS'		=> 'Wyświetlanie zawartości pliku',
	'VIEWING_FILE_DIFF'			=> 'Wyświetlanie zmian w pliku',

	'WRONG_INFO_FILE_FORMAT'	=> 'Niewłaściwy format pliku z informacjami',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Dziękujemy, Ekipa',
	'CONFIG_SITE_DESC'				=> 'Krótki opis Twojego forum',
	'CONFIG_SITENAME'				=> 'Twojadomena.pl',

	'DEFAULT_INSTALL_POST'			=> 'Oto przykładowy post w Twojej instalacji phpBB3. Wygląda na to, że wszystko działa. Jeśli chcesz, możesz usunąć ten post i kontynuować konfigurację Twojego forum. W czasie instalacji Twojej pierwszej kategorii i Twojemu pierwszemu działowi przyznano odpowiednie uprawnienia dla predefiniowanych grup - Administratorzy, Boty, Goście, Moderatorzy globalni, Zarejestrowani użytkownicy i Zarejestrowani użytkownicy (COPPA). Jeśli postanowisz usunąć Twoją pierwszą kategorię i Twój pierwszy dział, nie zapomnij później przyznać uprawnień dostępu do wszystkich nowych działów wszystkim tym grupom. Zalecamy po prostu zmienić nazwę Twojej pierwszej kategorii i Twojego pierwszego działu, a potem kopiować z nich uprawnienia przy tworzeniu nowych kategorii i działów. Dobrej zabawy!',

	'EXT_GROUP_ARCHIVES'			=> 'Archiwa',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenty',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Pobieralne pliki',
	'EXT_GROUP_FLASH_FILES'			=> 'Pliki Flash',
	'EXT_GROUP_IMAGES'				=> 'Obrazki',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Zwykły tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Twoja pierwsza kategoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'To tylko testowy dział.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Twój pierwszy dział',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Post zawiera odnośniki do nielegalnego oprogramowania.',
	'REPORT_SPAM'					=> 'Post zawiera spam.',
	'REPORT_OFF_TOPIC'				=> 'Treść postu nie dotyczy tematu dyskusji.',
	'REPORT_OTHER'					=> 'Powód zgłoszenia nie pasuje do powyższych kategorii, podaj powód w polu opis.',

	'SMILIES_ARROW'					=> 'Strzałka',
	'SMILIES_CONFUSED'				=> 'Boi się',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Płacze',
	'SMILIES_EMARRASSED'			=> 'Zawstydzony',
	'SMILIES_EVIL'					=> 'Zły',
	'SMILIES_EXCLAMATION'			=> 'Wykrzyknik',
	'SMILIES_GEEK'					=> 'Świr',
	'SMILIES_IDEA'					=> 'Pomysł',
	'SMILIES_LAUGHING'				=> 'Śmieje się',
	'SMILIES_MAD'					=> 'Wściekły',
	'SMILIES_MR_GREEN'				=> 'Pan Zielony',
	'SMILIES_NEUTRAL'				=> 'Średnio zadowolony',
	'SMILIES_QUESTION'				=> 'Znak zapytania',
	'SMILIES_RAZZ'					=> 'Pokazuje język',
	'SMILIES_ROLLING_EYES'			=> 'Udaje, że to nie on',
	'SMILIES_SAD'					=> 'Smutny',
	'SMILIES_SHOCKED'				=> 'Zaszokowany',
	'SMILIES_SMILE'					=> 'Szczęśliwy',
	'SMILIES_SURPRISED'				=> 'Zdziwiony',
	'SMILIES_TWISTED_EVIL'			=> 'Szalony',
	'SMILIES_UBER_GEEK'				=> 'Świr, i to jaki!',
	'SMILIES_VERY_HAPPY'			=> 'Bardzo szczęśliwy',
	'SMILIES_WINK'					=> 'Puszcza oko',

	'TOPICS_TOPIC_TITLE'			=> 'Witamy w phpBB3!',
));

?>