<?php
/**
*
* acp_permissions [Polski]
*
* @package language
* @version $Id: permissions.php 10017.2 2009-10-19 Ronnie $
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

$user_permissions_msg = ' Do zarządzania uprawnienami większej liczby użytkowników dużo lepszy jest system uprawnień grupowych. Uprawnienia pojedynczych użytkowików powinny być używane tylko w rzadkich przypadkach. Najlepiej dodawać użytkowników do grup i ustawiać uprawnienia tych grup.';
$role_msg = 'Tutaj możesz zarządzać zestawami uprawnień %s. Jeżeli zmodyfikujesz zestaw uprawnień, zmienione zostaną również uprawienia obiektów korzystających z tego zestawu.';
$view_msg = 'Tutaj możesz sprawdzić jakie %s uprawnienia %s ma wybrany użytkownik lub grupa%s.';

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>System uprawnień w phpBB3 jest bardzo rozbudowany i dlatego został podzielony na 4 główne kategorie:</p>

		<h2>Uprawnienia globalne</h2>
		<p>Uprawnienia globalne to uprawnienia dotyczące całego forum. Są podzielone na:</p>
		<ul>
			<li>uprawnienia globalne użytkowników i grup, za pomocą których można zarządzać globalnymi uprawnieniami użytkowania, moderacyjnymi i administracyjnymi wybranej grupy lub użytkownika,</li>
			<li>administrację i moderację, za pomocą których można zarządzać globalnymi uprawnieniami administracyjnymi lub moderacyjnymi wybranych grup lub użytkowników.</li>
		</ul>

		<h2>Uprawnienia lokalne</h2>
		<p>Uprawnienia lokalne pozwalają kontrolować uprawnienia osobno dla każdego działu. Są podzielone na:</p>
		<ul>
			<li>dostęp do działów i moderację, za pomocą których można zarządzać dostępem do działów lub lokalnymi uprawnieniami moderacyjnymi wybranych grup lub użytkowników.</li>
			<li>uprawnienia lokalne użytkowników i grup, za pomocą których można zarządzać dostępem do działów lub lokalnymi uprawnieniami moderacyjnymi wybranej grupy lub użytkownika,</li>
		</ul>

		<h2>Zestawy uprawnień</h2>
		<p>Zestawy uprawnień mogą być używane do szybkiego i wygodnego nadawania różnych typów uprawnień użytkownikom i grupom.</p>

		<h2>Przegląd uprawnień</h2>
		<p>Przegląd uprawnień jest sposobem na szybkie i wygodne sprawdzenie jakie uprawnienia ma wybrana grupa lub użytkownik. Pozwala też na tropienie uprawnień, czyli sprawdzenie dlaczego grupa lub użytkownik ma takie, a nie inne uprawnienie.</p>

		<p>Aby dowiedzieć się więcej o zarządzaniu uprawnieniami przeczytaj <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.php" rel="external">rozdział 1.5 naszego przewodnika Szybki Start</a>.</p>
	',

	'ACL_NEVER'				=> 'Nigdy',
	'ACL_SET'				=> 'Ustawianie uprawnień',
	'ACL_SET_EXPLAIN'		=> 'Uprawnienia bazują na prostym systemie TAK/NIE. Ustawienie opcji na NIGDY nadpisuje wszystie inne wartości jej nadane. Jeżeli nie chcesz nadawać tego uprawnienia, wybierz NIE. Jeżeli gdzieś nadano temu uprawnieniu wartość TAK, zostanie ona użyta zamiast wartości NIE. Wszystkie wybrane obiekty użyją tych samych uprawnień co obiekt, którego uprawnienia ustawiasz.',
	'ACL_SETTING'			=> 'Uprawnienie',

	'ACL_TYPE_A_'			=> 'Administracja',
	'ACL_TYPE_F_'			=> 'Dostęp do działów',
	'ACL_TYPE_M_'			=> 'Moderacja',
	'ACL_TYPE_U_'			=> 'Użytkowanie',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administracja',
	'ACL_TYPE_GLOBAL_U_'	=> 'Użytkowanie',
	'ACL_TYPE_GLOBAL_M_'	=> 'Moderacja (globalna)',
	'ACL_TYPE_LOCAL_M_'		=> 'Moderacja (lokalna)',
	'ACL_TYPE_LOCAL_F_'		=> 'Dostęp do działów',

	'ACL_NO'				=> 'Nie',
	'ACL_VIEW'				=> 'Przeglądanie uprawnień',
	'ACL_VIEW_EXPLAIN'		=> 'Tutaj możesz szybko i wygodne sprawdzić jakie uprawnienia ma wybrana grupa lub użytkownik. Zielony prostokąt oznacza, że grupa ma dane uprawnienie, a czerwony, że go nie ma.',
	'ACL_YES'				=> 'Tak',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tutaj możesz zarządzać globalnymi prawami administracyjnymi grup lub użytkowników. Wszyscy użytkownicy z uprawnieniami administracyjnymi mają dostęp do panelu administratora.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tutaj możesz zarządzać globalnymi prawami moderacyjnymi grup lub użytkowników. Moderatorzy globalni mogą mieć trochę więcej uprawień (tj. banowanie i ostrzeganie) niż zwykli moderatorzy.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tutaj możesz zarządzać lokalnymi prawami moderacyjnymi grup lub użytkowników.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tutaj możesz zarządzać dostępem do działów grup lub użytkowników.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Tutaj możesz skopiować uprawnienia dostępu z jednego działu do innego/innych.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tutaj możesz zarządzać globalnymi prawami użytkowania, moderacyjnymi i administracyjnymi wybranej grupy.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tutaj możesz zarządzać globalnymi prawami użytkowania, moderacyjnymi i administracyjnymi wybranego użytkownika.' . $user_permissions_msg,
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj możesz zarządzać lokalnymi prawami dostępu do działów i moderacyjnymi wybranej grupy.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj możesz zarządzać lokalnymi prawami dostępu do działów i moderacyjnymi wybranego użytkownika.' . $user_permissions_msg,

	'ACP_ADMIN_ROLES_EXPLAIN'					=> sprintf($role_msg, 'administracyjnych'),
	'ACP_FORUM_ROLES_EXPLAIN'					=> sprintf($role_msg, 'dostępu do działów'),
	'ACP_MOD_ROLES_EXPLAIN'						=> sprintf($role_msg, 'moderacyjnych'),
	'ACP_USER_ROLES_EXPLAIN'					=> sprintf($role_msg, 'użytkowania'),

	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> sprintf($view_msg, 'globalne', 'administracyjne', ''),
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> sprintf($view_msg, 'globalne', 'moderacyjne', ''),
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> sprintf($view_msg, 'lokalne', 'moderacyjne', ' w wybranym dziale'),
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> sprintf($view_msg, 'lokalne', 'dostępu do działu', ' w wybranym dziale'),
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> sprintf($view_msg, 'globalne', 'użytkowania', ''),

	'ADD_GROUPS'				=> 'Dodaj grupy',
	'ADD_PERMISSIONS'			=> 'Dodaj uprawnienia',
	'ADD_USERS'					=> 'Dodaj użytkowników',
	'ADVANCED_PERMISSIONS'		=> 'Zaawansowane uprawnienia',
	'ALL_GROUPS'				=> 'Zaznacz wszystkie grupy',
	'ALL_NEVER'					=> 'Wszytkie NIGDY',
	'ALL_NO'					=> 'Wszytkie NIE',
	'ALL_USERS'					=> 'Wybierz wszystkich użytkowników',
	'ALL_YES'					=> 'Wszytkie TAK',
	'APPLY_ALL_PERMISSIONS'		=> 'Zastosuj wszystkie uprawnienia',
	'APPLY_PERMISSIONS'			=> 'Zastosuj uprawnienia',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Uprawnienia ustawione dla tego obiektu zostaną zastosowane do tego obiektu i wszystich wybranych obiektów.',
	'AUTH_UPDATED'				=> 'Uprawnienia zostały zmienione.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Czy jesteś pewny/a, że chcesz skopiować uprawnienia? Spowoduje to nadpisanie wszelkich uprawnień dostępu do docelowych działów.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Dział, którego uprawnienia chcesz skopiować.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Dział(y), do którego chcesz skopiować uprawnienia.',
	'COPY_PERMISSIONS_FROM'					=> 'Skopiuj uprawnienia z',
	'COPY_PERMISSIONS_TO'					=> 'Skopiuj uprawnienia do',

	'CREATE_ROLE'				=> 'Utwórz zestaw uprawnień',
	'CREATE_ROLE_FROM'			=> 'Użyj uprawnień z…',
	'CUSTOM'					=> 'Custom…', // TODO: translate it... It isn't used anywhere!

	'DEFAULT'					=> 'Domyślny',
	'DELETE_ROLE'				=> 'Usuń zestaw',
	'DELETE_ROLE_CONFIRM'		=> 'Jesteś pewien, że chcesz usunąć ten zestaw? Obiekty używające tego zestawu <strong>nie</strong> stracą swoich uprawnień.',
	'DISPLAY_ROLE_ITEMS'		=> 'Wyświetl obiekty używające tego zestawu',

	'EDIT_PERMISSIONS'			=> 'Edytuj uprawnienia',
	'EDIT_ROLE'					=> 'Edytuj zestaw',

	'GROUPS_NOT_ASSIGNED'		=> 'Żadna grupa nie używa tego zestawu uprawnień',

	'LOOK_UP_GROUP'				=> 'Wybierz grupę',
	'LOOK_UP_USER'				=> 'Wybierz użytkownika',

	'MANAGE_GROUPS'		=> 'Zarządzaj grupami',
	'MANAGE_USERS'		=> 'Zarządzaj użytkownikami',

	'NO_AUTH_SETTING_FOUND'		=> 'Ustawienia uprawnień nie zostały zdefiniowane.',
	'NO_ROLE_ASSIGNED'			=> 'Brak zestawu…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Wybranie tej opcji nie spowoduje zmiany uprawnień. Jeżeli chcesz usunąć wszystkie uprawnienia, powinieneś kliknąć na link “Wszystkie <samp>NIE</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nie istnieje żaden zestaw',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Nie podałeś nazwy zestawu.',
	'NO_ROLE_SELECTED'			=> 'Nie znaleziono zestawu.',
	'NO_USER_GROUP_SELECTED'	=> 'Nie wybrałeś żadnej grupy ani żadnego użytkownika.',

	'ONLY_FORUM_DEFINED'	=> 'Wybrałeś tylko działy, a powinieneś też wybrać przynajmniej jedną grupę lub jednego użytkownika.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Uprawnieia zostaną zastosowane też do wszystkich wybranych obiektów',
	'PLUS_SUBFORUMS'				=> 'i poddziały',

	'REMOVE_PERMISSIONS'			=> 'Usuń uprawnienia',
	'REMOVE_ROLE'					=> 'Usuń zestaw uprawnień',
	'RESULTING_PERMISSION'			=> 'Wynikowe uprawnienie',
	'ROLE'							=> 'Zestaw uprawnień',
	'ROLE_ADD_SUCCESS'				=> 'Zestaw uprawnień został dodany.',
	'ROLE_ASSIGNED_TO'				=> 'Użytkownicy i grupy korzystający z zestawu %s',
	'ROLE_DELETED'					=> 'Zestaw uprawnień został usunięty.',
	'ROLE_DESCRIPTION'				=> 'Opis zestawu uprawnień',

	'ROLE_ADMIN_FORUM'			=> 'Administrator działów',
	'ROLE_ADMIN_FULL'			=> 'Pełny administrator',
	'ROLE_ADMIN_STANDARD'		=> 'Zwykły administrator',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrator użytkowników i grup',
	'ROLE_FORUM_BOT'			=> 'Dostęp botów',
	'ROLE_FORUM_FULL'			=> 'Pełny dostęp',
	'ROLE_FORUM_LIMITED'		=> 'Ograniczony dostęp',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ograniczony dostęp + ankiety',
	'ROLE_FORUM_NOACCESS'		=> 'Brak dostępu',
	'ROLE_FORUM_ONQUEUE'		=> 'Moderowany',
	'ROLE_FORUM_POLLS'			=> 'Zwykły dostęp + ankiety',
	'ROLE_FORUM_READONLY'		=> 'Tylko czytanie',
	'ROLE_FORUM_STANDARD'		=> 'Zwykły dostęp',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Nowy użytkownik',
	'ROLE_MOD_FULL'				=> 'Pełny moderator',
	'ROLE_MOD_QUEUE'			=> 'Moderator kolejki',
	'ROLE_MOD_SIMPLE'			=> 'Prosty moderator',
	'ROLE_MOD_STANDARD'			=> 'Zwykły moderator',
	'ROLE_USER_FULL'			=> 'Wszystkie możliwości',
	'ROLE_USER_LIMITED'			=> 'Ograniczone możlwości',
	'ROLE_USER_NOAVATAR'		=> 'Bez avatara',
	'ROLE_USER_NOPM'			=> 'Bez prywatnych wiadomości',
	'ROLE_USER_STANDARD'		=> 'Zwykłe możliwości',
	'ROLE_USER_NEW_MEMBER'		=> 'Nowy użytkownik',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Ma dostęp do zarządzania działami i uprawnieniami dostępu do nich.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Ma dostęp do wszystkich funkcji administracyjnych na tym forum.<br />Niezalecane.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Ma dostęp do większości funkcji administracyjnych z wyjątkiem narzędzi związanych z serwerem i systemem.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Ma dostęp do zarządzania grupami i użytkownikami: może zmieniać uprawnienia i ustawienia, zarządzać banami i rangami.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ten zestaw uprawnień jest zalecany dla botów i pająków wyszukiwarek.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Ma możliwość korzystania ze wszystkich funkcji forum w danym dziale, w tym pisania ogłoszeń i przyklejania wątków. Może też ignorować limit wysłania jednej wiadomości w wybranym przez administratora czasie.<br />Niezalecane dla zwykłych użytkowników.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Ma możliwość korzystania z części funkcji forum, ale nie może załączać plików i używać ikon postów/wątków.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Ma uprawnienia takie, jak przy ograniczonym dostępie, ale może też tworzyć ankiety.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nie ma żadnego dostępu do działu.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Ma uprawnienia takie, jak przy standardowym dostępie, ale jego posty i wątki muszą być akceptowane przez moderatora.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Ma uprawnienia takie, jak przy standardowym dostępie, ale może też tworzyć ankiety.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Ma możliwość czytania zawartości działu, ale nie może nic pisać, ani na nic odpowiadać.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Ma możliwość korzystania z większości funkcji forum (w tym wysyłania załączników i usuwania własnych wątków), ale nie może blokować własnych wątków ani tworzyć ankiet.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Zestaw dla członków specjalnej grupy nowych użytkowników; zawiera uprawnienia <samp>NIGDY</samp> aby zablokować korzystanie z niektórych funkcji nowym użytkownikom.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Ma możliwość korzystania ze wszystkich funkcji moderacyjnych, w tym banowania.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Ma możliwość korzystania z kolejki moderacji, aby sprawdzać i edytować posty, ale nic poza tym.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Ma możliwość wykonywania tylko podstawowych akcji związanych z wątkami i postami. Nie może przyznawać ostrzeżeń ani używać kolejki moderacji.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Ma możliwość korzystania z większości funkcji moderacyjnych, ale nie może banować użytkowników ani zmieniać autora postu.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Ma możliwość korzystania ze wszystkich dostępnych dla użytkowników funkcji forum, w tym zmiany nazwy użytkownika i ignorowania limitu wysłania jednej wiadomości w wybranym przez administratora okresie czasu.<br />Niezalecane dla zwykłych użytkowników.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Ma możliwość korzystania z części dostępnych dla użytkowników funkcji forum. Wysyłanie załączników, e-maili i natychmiastowych wiadomości nie jest dozwolone.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ma możliwość korzystania z ograniczonej części dostępnych dla użytkowników funkcji forum i nie ma prawa do posiadania avatara.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ma możliwość korzystania z ograniczonej części dostępnych dla użytkowników funkcji forum i nie ma prawa do wysyłania prywatnych wiadomości.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Ma możliwość korzystania z większości dostępnych dla użytkowników funkcji forum. Nie może np. zmieniać nazwy użytkownika ani ignorować limitu wysłania jednej wiadomości w wybranym przez administratora czasie.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Zestaw dla członków specjalnej grupy nowych użytkowników; zawiera uprawnienia <samp>NIGDY</samp> aby zablokować korzystanie z niektórych funkcji nowym użytkownikom.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Masz możliwość wpisania krótkiego opisu co ten zestaw uprawnień robi lub w jakim celu został utworzony. Tekst, który tu wpiszesz, będzie też wyświetlany na stronach ustawiania uprawnień.',
	'ROLE_DESCRIPTION_LONG'			=> 'Opis zestawu jest zbyt długi. Maksymalna dopuszczalna liczba znaków to 4 000.',
	'ROLE_DETAILS'					=> 'Szczegóły zestawu uprawnień',
	'ROLE_EDIT_SUCCESS'				=> 'Zestaw uprawnień został przeedytowany.',
	'ROLE_NAME'						=> 'Nazwa zestawu uprawnień',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Zestaw uprawnień tego typu o nazwie <strong>%s</strong> już istnieje.',
	'ROLE_NOT_ASSIGNED'				=> 'Zestaw uprawnień nie został jeszcze nikomu przyznany.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Wybrany(e) dział(y) nie istnieje(ą).',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Wybrana(e) grupa(y) nie istnieje(ą).',
	'SELECTED_USER_NOT_EXIST'		=> 'Wybrany(i) użytkownik(cy) nie istnieje(ą).',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Wybranie z tej listy działu spowoduje również wybranie jego poddziałów.',
	'SELECT_ROLE'					=> 'Wybierz zestaw…',
	'SELECT_TYPE'					=> 'Wybierz typ',
	'SET_PERMISSIONS'				=> 'Ustaw uprawnienia',
	'SET_ROLE_PERMISSIONS'			=> 'Ustaw uprawnienia w zestawie uprawnień',
	'SET_USERS_PERMISSIONS'			=> 'Ustaw uprawnienia użytkownika',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Ustaw uprawnienia dostępu do działu',

	'TRACE_DEFAULT'							=> 'Domyślnie wszystkie uprawnienia są ustawione na <samp>NIE</samp> i mogą zostać nadpisane.',
	'TRACE_FOR'								=> 'Tropienie dla',
	'TRACE_GLOBAL_SETTING'					=> '%s (globalne)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> 'Uprawnienie tej grupy jest ustawione na <samp>NIGDY</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>NIGDY</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> 'Uprawnienie tej grupy jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> 'Uprawnienie tej grupy jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>TAK</samp).',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>TAK</samp).',
	'TRACE_GROUP_NO'						=> 'Uprawnienie tej grupy jest ustawione na <samp>NIE</samp>. Ponieważ nieprzyznanie uprawnienia nie zmienia w żaden sposób wcześniej obliczonych uprawnień, nic się nie zmieniło.',
	'TRACE_GROUP_NO_LOCAL'					=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>NIE</samp>. Ponieważ nieprzyznanie uprawnienia nie zmienia w żaden sposób wcześniej obliczonych uprawnień, nic się nie zmieniło.',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> 'Uprawnienie tej grupy jest ustawione na <samp>TAK</samp>, ale wcześniej ustawione <samp>NIGDY</samp> nie może zostać nadpisane.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>TAK</samp>, ale wcześniej ustawione <samp>NIGDY</samp> nie może zostać nadpisane.',
	'TRACE_GROUP_YES_TOTAL_NO'				=> 'Uprawnienie tej grupy jest ustawione na <samp>TAK</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>TAK</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'				=> 'Uprawnienie tej grupy jest ustawione na <samp>TAK</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'Uprawnienie tej grupy w tym dziale jest ustawione na <samp>TAK</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_PERMISSION'						=> 'Trop uprawnienie - %s',
	'TRACE_RESULT'							=> 'Wynik tropienia',
	'TRACE_SETTING'							=> 'Trop uprawnienie',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Globalne uprawnienie tego użytkownika to <samp>TAK</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło. %sTrop globalne uprawnienia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Globalne uprawnienie tego użytkownika to <samp>TAK</samp>, co nadpisuje lokalną wartość (<samp>NIGDY</samp>). %sTrop globalne uprawnienia%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Globalne uprawnienie tego użytkownika to <samp>NIGDY</samp>, co nie zmienia lokalnej wartości. %sTrop globalne uprawnienia%s',

	'TRACE_USER_FOUNDER'					=> 'Użytkownik jest założycielem forum, więc wszystkie uprawnienia administracyjne ma ustawione na <samp>TAK</samp>.',
	'TRACE_USER_KEPT'						=> 'Uprawnienie tego użytkownika jest ustawione na <samp>NIE</samp>. Ponieważ nieprzyznanie uprawnienia nie zmienia w żaden sposób wcześniej obliczonych uprawnień, nic się nie zmieniło.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>NIE</samp>. Ponieważ nieprzyznanie uprawnienia nie zmienia w żaden sposób wcześniej obliczonych uprawnień, nic się nie zmieniło.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Uprawnienie tego użytkownika jest ustawione na <samp>NIGDY</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>NIGDY</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Uprawnienie tego użytkownika jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Uprawnienie tego użytkownika jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>TAK</samp>).',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>NIGDY</samp>, co nadpisuje poprzednią wartość (<samp>TAK</samp>).',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Uprawnienie tego użytkownika jest ustawione na <samp>NIE</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>NIE</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Uprawnienie tego użytkownika jest ustawione na <samp>TAK</samp>, ale wcześniej ustawione <samp>NIGDY</samp> nie może zostać nadpisane.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>TAK</samp>, ale wcześniej ustawione <samp>NIGDY</samp> nie może zostać nadpisane.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Uprawnienie tego użytkownika jest ustawione na <samp>TAK</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>TAK</samp>, co nadpisuje poprzednią wartość (<samp>NIE</samp>).',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Uprawnienie tego użytkownika jest ustawione na <samp>TAK</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Uprawnienie tego użytkownika w tym dziale jest ustawione na <samp>TAK</samp>. Ponieważ wynik wcześniejszych rozważań był taki sam, nic się nie zmieniło.',
	'TRACE_WHO'								=> 'Kto',
	'TRACE_TOTAL'							=> 'Łącznie',

	'USERS_NOT_ASSIGNED'			=> 'Żaden użytkownik nie używa tego zestawu uprawnień',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'jest członkiem poniższych wbudowanych grup',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'jest członkiem poniższych utworzonych przez administratora grup',

	'VIEW_ASSIGNED_ITEMS'	=> 'Wyświetl użytkowników / grupy korzystające z tego zestawu',
	'VIEW_LOCAL_PERMS'		=> 'Lokalne uprawnienia',
	'VIEW_GLOBAL_PERMS'		=> 'Globalne uprawnienia',
	'VIEW_PERMISSIONS'		=> 'Wyświetl uprawnienia',

	'WRONG_PERMISSION_TYPE'				=> 'Został wybrany nieprawidłowy typ uprawnień.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Ustawienia uprawnień mają nieprawidłowy format, phpBB3 nie jest w stanie ich zrozumieć.',
));

?>