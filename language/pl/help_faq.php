<?php
/**
*
* help_faq [Polski]
*
* @package language
* @version $Id: help_faq.php 9623.1 2009-10-24 Ronnie $
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

$help = array(
	array(
		0 => '--',
		1 => 'Problemy z logowaniem i rejestracją'
	),
	array(
		0 => 'Dlaczego nie mogę się zalogować?',
		1 => 'Powodów może być kilka. Po pierwsze: Czy w ogóle zarejestrowałeś się na tym forum? Jeżeli nie, to musisz wiedzieć, że rejestracja jest konieczna, aby móc się logować. A jeżeli się zarejestrowałeś i mimo to nie możesz się zalogować, to upewnij się, że Twoja nazwa użytkownika i Twoje hasło są prawidłowe. Jeżeli są, to skontaktuj się z administratorem forum, żeby upewnić się, że nie zostałeś zbanowany. Jest też możliwe, że problem powoduje błędna konfiguracja forum.'
	),
	array(
		0 => 'Dlaczego w ogóle muszę się rejestrować?',
		1 => 'Możliwe, że nie musisz, to od administratora forum zależy, czy aby pisać wiadomości konieczna jest rejestracja. Jednakże rejestracja da Ci dostęp do dodatkowych możliwości niedostępnych dla gości, takich jak własny avatar, wysyłanie prywatnych wiadomości i e-maili do innych użytkowników, należenie do grup użytkowników itp. Rejestracja zajmuje tylko chwilę, więc jest zalecane, abyś ją wykonał.'
	),
	array(
		0 => 'Dlaczego jestem automatycznie wylogowywany?',
		1 => 'Jeżeli nie zaznaczysz opcji <em>Zaloguj mnie automatycznie przy każdej wizycie</em> w czasie logowania, forum zachowa informację o tym, że jesteś zalogowany tylko przez ustawiony przez administratora czas. To zapobiega przejęciu dostępu do Twojego konta przez kogoś innego. Aby pozostać zalogowanym, zaznacz opcję „Zaloguj mnie automatycznie przy każdej wizycie” podczas logowania się. Jest to stanowczo niezalecane, jeżeli korzystasz z forum ze współdzielonego z kimś komputera, np. w bibliotece, kawiarence internetowej, sali komputerowej w szkole / na uczelni itp. Jeżeli nie widzisz tej opcji, to oznacza to, że administrator zablokował tę funkcję.'
	),
	array(
		0 => 'W jaki sposób mogę zapobiec wyświetlaniu mojej nazwy użytkownika na liście użytkowników przeglądających forum?',
		1 => 'W swoim panelu użytkownika, w „Ustawieniach forum”, znajdziesz opcję <em>Nie pokazuj, że jestem online</em>. Włącz tę opcję i Twoja nazwa użytkownika będzie wyświetlana tylko dla administratorów, moderatorów i Ciebie. Będziesz liczony jako ukryty użytkownik.'
	),
	array(
		0 => 'Zapomniałem hasła!',
		1 => 'Nie panikuj! Twoje hasło wprawdzie nie może zostać odzyskane, ale bez problemu może zostać zresetowane. Przejdź na stronę logowania i kliknij na link <em>Zapomniałem hasła</em>. Postępuj zgodnie z instrukcjami, a prawdopodobnie niedługo znów będziesz mógł się zalogować.'
	),
	array(
		0 => 'Zarejestrowałem się, ale nie mogę się zalogować!',
		1 => 'Po pierwsze, sprawdź, czy wpisujesz prawidłową nazwę użytkownika i hasło. Jeśli tak, to nastąpiła jedna z tych dwóch rzeczy: Jeśli COPPA jest włączone, a Ty poinformowałeś skrypt w czasie rejestracji, że masz mniej niż 13 lat, to będziesz musiał wykonać instrukcje wysłane na Twój adres e-mail. Niektóre fora wymagają też, żeby nowe rejestracje były aktywowane przez Ciebie albo przez administratora, zanim będziesz mógł się zalogować; informacja o tym została wyświetlona podczas rejestracji. Jeżeli został do Ciebie wysłany e-mail, postępuj zgodnie z instrukcjami w nim zawartymi. Jeżeli nie otrzymałeś żadnego e-maila, prawdopodobnie podałeś nieprawidłowy adres e-mail lub e-mail został zaklasyfikowany jako spam przez filtr antyspamowy. Jeśli jesteś pewien, że podany przez Ciebie adres e-mail jest prawidłowy, spróbuj skontaktować się z administratorem.'
	),
	array(
		0 => 'Zarejestrowałem się jakiś czas temu, ale nie mogę się teraz zalogować!?!',
		1 => 'Spróbuj znaleźć adres e-mail wysłany do Ciebie, gdy się rejestrowałeś pierwszy raz, sprawdź w nim swój login i hasło, a potem spróbuj zalogować się jeszcze raz. Możliwe też, że administrator deaktywował lub usunął Twoje konto z jakiegoś powodu. Wiele forów systematycznie usuwa użytkowników, którzy nic nie pisali przez dłuższy czas, żeby zmniejszyć wielkość bazy danych. Jeżeli to nastąpiło, spróbuj zarejestrować się jeszcze raz i być bardziej zaangażowanym w dyskusje.'
	),
	array(
		0 => 'Czym jest COPPA?',
		1 => 'COPPA, albo Child Online Privacy and Protection Act of 1998, to obowiązujące w Stanach Zjednoczonych prawo, wymagajace, aby strony internetowe mogące potencjalnie zbierać informacje od ludzi mających mniej niż 13 lat, miały piśmienną zgodę rodziców lub prawnych opiekunów na zbieranie informacji prywatnych od osoby mającej mniej niż 13 lat. Jeżeli nie jesteś pewien, czy to dotyczy Ciebie jako kogoś próbującego zarejestrować się na stronie WWW, skontaktuj się z prawnikiem.',
	),
	array(
		0 => 'Dlaczego nie mogę się zarejestrować?',
		1 => 'Możliwe jest, że właściciel strony zbanował Twój adres IP lub zabronił nazwy użytkownika, którą próbujesz zarejestrować. Właściciel strony mógł też zablokować rejestracje, skontaktuj się z nim, żeby dowiedzieć się więcej na ten temat.',
	),
	array(
		0 => 'Co robi funkcja „Usuń wszystkie ciasteczka”?',
		1 => 'Funkcja „Usuń wszystkie ciasteczka” usuwa wszystkie ciasteczka utworzone przez skrypt phpBB, które powodują, że jesteś nadal zalogowany na forum. Dostarczają one również funkcji takich, jak pamiętanie, co przeczytałeś, a czego nie, jeżeli zostały one włączone przez administratora forum. Jeżeli masz problemy z (wy)logowaniem się, usunięcie ciasteczek może pomóc.',
	),
	array(
		0 => '--',
		1 => 'Preferencje i ustawienia użytkowników'
	),
	array(
		0 => 'Jak zmienić moje ustawienia?',
		1 => 'Jeżeli jesteś zarejestrowanym użytkownikiem, wszystkie Twoje ustawienia są zapisywane w bazie danych forum. Żeby je zmienić, zajrzyj do swojego panelu użytkownika; link zazwyczaj znajduje się na górze stron forum. Ten panel pozwoli Ci zmienić swoje ustawienia i preferencje.'
	),
	array(
		0 => 'Czasy wyświetlane na forum są nieprawidłowe!',
		1 => 'Możliwe, że wyświetlany czas pochodzi z innej strefy czasowej niż ta, w której się znajdujesz. Jeżeli właśnie to jest problemem, przejdź do swojego panelu użytkownika i zmień swoją strefę czasową, aby zgadzała się z Twoim położeniem, np. w Europie Centralnej wybierz Środkowoeuropejski Czas Standardowy. Weź pod uwagę, że zmiana strefy czasowej, tak jak większości ustawień, może zostać wykonana tylko przez zarejestrowanych użytkowników. Jeżeli nie jesteś zarejestrowany, to teraz jest dobry moment na to, żeby się zarejestrować.'
	),
	array(
		0 => 'Zmieniłem strefę czasową, a wyświetlany czas nadal jest zły!',
		1 => 'Jeżeli jesteś pewien, że ustawiłeś strefę czasową i czas letni/DST prawidłowo, a czas nadal jest wyświetlany nieprawidłowo, to znaczy, że czas serwera jest nieprawidłowy. Poinformuj o tym administratora, aby naprawił problem.'
	),
	array(
		0 => 'My language is not in the list!',
		1 => 'Either the administrator has not installed your language or nobody has translated this board into your language. Try asking the board administrator if they can install the language pack you need. If the language pack does not exist, feel free to create a new translation. More information can be found at the phpBB website (see link at the bottom of board pages).'
	),
	array(
		0 => 'Jak mogę wyświetlić obrazek pod moją nazwą użytkownika?',
		1 => 'Istnieją dwa rodzaje obrazków wyświetlanych (zazwyczaj) pod nazwa użytkownika w czasie przeglądania postów. Jeden z nich to obrazki związane z rangą użytkownika, zazwyczaj w formie gwiazdek, bloczków czy kropek, pokazujących jak dużo postów użytkownik napisał lub jaki jest status użytkownika na forum. Drugi, zazwyczaj większy obrazek, jest znany jako avatar i jest unikalny dla każdego użytkownika. Możesz go ustawić w panelu użytkownika, pod warunkiem, że administrator forum właczył funkcje avatarów, a Ty masz wystarczające uprawnienia. Jeżeli nie masz możliwości używania avatarów, skontaktuj się z administratorem i zapytaj czym to jest spowodowane.'
	),
	array(
		0 => 'Co to jest ranga i jak mogę ją zmienić?',
		1 => 'Rangi, wyświetlane pod nazwami użytkowników, oznaczają zazwyczaj ile postów ten użytkownik napisał lub jaki ma status na forum, np. moderator czy administrator. Ogólnie to nie możesz tak po prostu zmienić wyglądu żadnych rang na forum, ponieważ ustawia je administrator forum. Nie pisz postów tylko po to, żeby zwiększyć swój licznik postów i przez to swoją rangę. Większość forów nie toleruje takich działań i moderator lub administrator po prostu obniży Twój licznik postów albo przyzna Ci ostrzeżenie.'
	),
	array(
		0 => 'Gdy próbuję wysłać wiadomość e-mail do użytkownika, forum każe mi się zalogować. Dlaczego?',
		1 => 'Tylko zarejestrowani użytkownicy mogą wysyłać e-maile do innych użytkowników przez wbudowany formularz wysyłania e-maili i to tylko wtedy, jeżeli administrator włączył tę funkcję. Ma to zabezpieczać przed nieprawidłowym używaniem systemu e-maili przez anonimowych użytkowników.'
	),
	array(
		0 => '--',
		1 => 'Problemy z pisaniem'
	),
	array(
		0 => 'Jak utworzyć nowy wątek na forum?',
		1 => 'Aby utworzyć nowy wątek, kliknij na właściwy przycisk przy wyświetlaniu wybranego działu forum. Możliwe, że przed utworzeniem wątku będziesz musiał się zarejestrować. Lista Twoich uprawnień w każdym dziale jest wyświetlana pod listą wątków. Przykłady: Możesz tworzyć nowy wątek, Możesz głosować w ankietach itp.'
	),
	array(
		0 => 'Jak edytować lub usunąć post?',
		1 => 'Jeśli nie jesteś administratorem lub moderator forum, możesz edytować i usuwać tylko swoje posty i to tylko wtedy, jeżeli administrator w ten sposób ustawił uprawnienia. Możesz edytować post klikając na przycisk „edytuj” przy wybranym poście, czasami tylko przez pewien czas po jego napisaniu. Jeżeli ktoś już odpowiedział na ten post, pod Twoim postem pojawi się informacja, ile razy go edytowałeś i kiedy zrobiłeś to ostatni raz. Informacja ta wyświetli się tylko wtedy, jeśli ktoś odpowiedział; nie pojawi się jeśli moderator lub administrator edytował post, choć oni mogą zostawić notatkę z informacją dlaczego go edytowali. Zauważ, że zwykli użytkownicy nie mogą usuwać postów, gdy ktoś już na nie odpowiedział.'
	),
	array(
		0 => 'Jak dodawać podpis do moich postów?',
		1 => 'Aby umieścić podpis pod swoim postem, musisz najpierw utworzyć go w panelu użytkownika. Gdy już to zrobisz, możesz zaznaczyć pole <em>Dołącz podpis</em> w formularzu pisania posta, aby dołączyć podpis do niego. Możesz również dodawać podpis domyślnie do wszystkich Twoich postów, poprzez zaznaczenie odpowiedniego pola w panelu użytkownika. Kiedy to zrobisz, będziesz mógł nadal decydować o nie dołączeniu go do pojedynczych postów poprzez odznaczanie wspomnianego wcześniej pola w formularzu pisania posta.'
	),
	array(
		0 => 'Jak utworzyć ankietę?',
		1 => 'Kiedy tworzysz nowy wątek lub edytujesz pierwszy post już istniejącego, kliknij zakładkę „Tworzenie ankiety” znajdującą się poniżej głównego formularza; jeśli nie widzisz jej, to znaczy, że nie masz odpowiednich uprawnień, by tworzyć ankiety. Wprowadź tytuł i co najmniej dwie opcje do odpowiednich pól, upewniając się, że każda opcja znajduje się w osobnej linii w polu tekstowym. Możesz również ustalić liczbę opcji, które użytkownik może wybrać w ankiecie, czas trwania ankiety wyrażony w dniach (0 oznacza brak limitu) i w końcu zadecydować, czy użytkownicy mogą zmieniać swoje głosy.'
	),
	array(
		0 => 'Dlaczego nie mogę wybrać więcej opcji?',
		1 => 'Limit opcji w ankiecie jest ustalany przez administratora forum. Jeśli sądzisz, że potrzebujesz wstawić więcej opcji niż pozwala na to limit, skontaktuj się z administratorem.'
	),
	array(
		0 => 'Jak wyedytować lub usunąć ankietę?',
		1 => 'Podobnie jak posty, ankiety mogą być edytowane tylko przez ich autorów, moderatorów lub administratorów. Aby edytować ankietę, przejdź do edycji pierwszego posta w wątku, z którym zawsze związana jest ankieta. Jeśli nikt jeszcze nie głosował w ankiecie, jej autor może usunąć ankietę lub edytować jej opcje. Jednakże, jeśli w ankiecie już głosowano, jedynie moderatorzy i administratorzy mogą ją edytować lub usunąć. To zapobiega modyfikowaniu ankiety, kiedy ta już trwa.'
	),
	array(
		0 => 'Dlaczego nie mam dostępu do działu?',
		1 => 'Niektóre działy mogą być dostępne dla określonych grup lub użytkowników. Aby przeglądać, czytać, pisać w nich lub wykonywać inne operacje, potrzebujesz odpowiednich uprawnień. Skontaktuj się z moderatorem lub administratorem forum, by je uzyskać.'
	),
	array(
		0 => 'Dlaczego nie mogę dodawać załączników?',
		1 => 'Uprawnienia dotyczące załączników mogą być przyznawane dla każdego forum, dla każdej grupy i dla każdego użytkownika. Administrator forum mógł nie zezwolić na dołączanie ich w dziale, w którym piszesz lub przyznać uprawnienia jedynie niektórym grupom. Skontaktuj się z administratorem forum, jeśli nie rozumiesz, dlaczego nie możesz dołączać ich.'
	),
	array(
		0 => 'Dlaczego otrzymałem ostrzeżenie?',
		1 => 'Każdy administrator ma swoje zasady na forum. Jeśli je złamałeś, mogłeś zostać ukarany ostrzeżeniem. Zauważ, że jest to decyzja administratora i phpBB Group nie ma nic wspólnego z ostrzeżeniami na forum. Skontaktuj się z administratorem forum, jeśli nie wiesz, dlaczego otrzymałeś ostrzeżenie.'
	),
	array(
		0 => 'Jak mogę zgłosiś posty moderatorowi?',
		1 => 'Jeśli administrator na to zezwolił, powinieneś widzieć odpowiednią ikonkę, obok posta, który chcesz zgłosić. Kliknięcie jej przeniesie Cię do kolejnych kroków, które są niezbędne do zgłoszenia wiadomości.'
	),
	array(
		0 => 'Do czego służy przycisk „Zapisz” w widoku tworzenia wątku?',
		1 => 'Ta opcja pozwala Ci zapisywać kopie robocze Twoich wątków, które mogą być dokończone i umieszczone na forum w przyszłości. By powrócić do kopii roboczej, odwiedź swój panel użytkownika.'
	),
	array(
		0 => 'Dlaczego mój post musi być zaakceptowany?',
		1 => 'Administrator forum mógł zadecydować, że posty w danym dziale wymagają przeglądnięcia przed publikacją. Jest również możliwe, że administrator umieścił Cię w grupie, której posty muszą być zaakceptowane przed znalezieniem się na forum. Skontaktuj się z administratorem, by uzyskać dalsze szczegóły.'
	),
	array(
		0 => 'Jak mogę przesunąć swój wątek w górę?',
		1 => 'Klikając w link „Przesuń wątek w górę” w widoku wątku, możesz odkopać go na samą górę pierwszej strony działu. Jednakże, jeśli nie widzisz takiego linku, oznacza to, że funkcja ta mogła zostać wyłączona lub wymagany czas między dwoma użyciami tej opcji jeszcze nie minał. Innym sposobem na odkopanie wątku jest dopisanie w nim posta, trzymaj się jednak zasad robiąc to.'
	),
	array(
		0 => '--',
		1 => 'Formatowanie i rodzaje wątków'
	),
	array(
		0 => 'Czym jest BBCode?',
		1 => 'BBCode is a special implementation of HTML, offering great formatting control on particular objects in a post. The use of BBCode is granted by the administrator, but it can also be disabled on a per post basis from the posting form. BBCode itself is similar in style to HTML, but tags are enclosed in square brackets [ and ] rather than &lt; and &gt;. For more information on BBCode see the guide which can be accessed from the posting page.'
	),
	array(
		0 => 'Czy mogę używać HTML?',
		1 => 'No. It is not possible to post HTML on this board and have it rendered as HTML. Most formatting which can be carried out using HTML can be applied using BBCode instead.'
	),
	array(
		0 => 'Czym są uśmieszki?',
		1 => 'Smilies, or Emoticons, are small images which can be used to express a feeling using a short code, e.g. :) denotes happy, while :( denotes sad. The full list of emoticons can be seen in the posting form. Try not to overuse smilies, however, as they can quickly render a post unreadable and a moderator may edit them out or remove the post altogether. The board administrator may also have set a limit to the number of smilies you may use within a post.'
	),
	array(
		0 => 'Can I post images?',
		1 => 'Yes, images can be shown in your posts. If the administrator has allowed attachments, you may be able to upload the image to the board. Otherwise, you must link to an image stored on a publicly accessible web server, e.g. http://www.example.com/my-picture.gif. You cannot link to pictures stored on your own PC (unless it is a publicly accessible server) nor images stored behind authentication mechanisms, e.g. hotmail or yahoo mailboxes, password protected sites, etc. To display the image use the BBCode [img] tag.'
	),
	array(
		0 => 'Czym są ogłoszenia globalne?',
		1 => 'Ogłoszenia globalne zawierają istotne informacje, z którymi trzeba się niezwłocznie zapoznać. Wyświetlają się w każdym dziale na szczycie listy wątków oraz w Twoim panelu użytkownika. Uprawnienia do tworzenia ogłoszeń globalnych nadaje administrator.'
	),
	array(
		0 => 'Czym są ogłoszenia?',
		1 => 'Ogłoszenia często zawierają ważne informacje dotyczące działu, w którym się znajdują, i powinieneś/powinnaś zapoznać się z nimi przed skorzystaniem z tego działu. Znajdują się na każdej stronie, na szczycie listy wątków, w dziale, w którym zostały umieszczone. Podobnie jak w przypadku ogłoszeń globalnych, uprawnienia do tworzenia ogłoszeń nadaje administrator.'
	),
	array(
		0 => 'Czym są wątki przyklejone?',
		1 => 'Wątki przyklejone wyświetlają się pod ogłoszeniami i tylko na pierwszej stronie działu, w którym zostały utworzone. Zawierają przydatne informacje, które nie powinny zagubić się w natłoku innych wątków. Podobnie jak w przypadku ogłoszeń oraz ogłoszeń globalnych, uprawnienia do tworzenia wątków przyklejonych nadaje administrator.'
	),
	array(
		0 => 'Czym są wątki zamknięte?',
		1 => 'Locked topics are topics where users can no longer reply and any poll it contained was automatically ended. Topics may be locked for many reasons and were set this way by either the forum moderator or board administrator. You may also be able to lock your own topics depending on the permissions you are granted by the board administrator.'
	),
	array(
		0 => 'Czym są ikony wątku?',
		1 => 'Topic icons are author chosen images associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the board administrator.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'User Levels and Groups'
	),
	array(
		0 => 'What are Administrators?',
		1 => 'Administrators are members assigned with the highest level of control over the entire board. These members can control all facets of board operation, including setting permissions, banning users, creating usergroups or moderators, etc., dependent upon the board founder and what permissions he or she has given the other administrators. They may also have full moderator capabilities in all forums, depending on the settings put forth by the board founder.'
	),
	array(
		0 => 'What are Moderators?',
		1 => 'Moderators are individuals (or groups of individuals) who look after the forums from day to day. They have the authority to edit or delete posts and lock, unlock, move, delete and split topics in the forum they moderate. Generally, moderators are present to prevent users from going off-topic or posting abusive or offensive material.'
	),
	array(
		0 => 'What are usergroups?',
		1 => 'Usergroups are groups of users that divide the community into manageable sections board administrators can work with. Each user can belong to several groups and each group can be assigned individual permissions. This provides an easy way for administrators to change permissions for many users at once, such as changing moderator permissions or granting users access to a private forum.'
	),
	array(
		0 => 'Where are the usergroups and how do I join one?',
		1 => 'You can view all usergroups via the „Usergroups” link within your User Control Panel. If you would like to join one, proceed by clicking the appropriate button. Not all groups have open access, however. Some may require approval to join, some may be closed and some may even have hidden memberships. If the group is open, you can join it by clicking the appropriate button. If a group requires approval to join you may request to join by clicking the appropriate button. The user group leader will need to approve your request and may ask why you want to join the group. Please do not harass a group leader if they reject your request; they will have their reasons.'
	),
	array(
		0 => 'How do I become a usergroup leader?',
		1 => 'A usergroup leader is usually assigned when usergroups are initially created by a board administrator. If you are interested in creating a usergroup, your first point of contact should be an administrator; try sending a private message.',
	),
	array(
		0 => 'Why do some usergroups appear in a different colour?',
		1 => 'It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.'
	),
	array(
		0 => 'What is a „Default usergroup”?',
		1 => 'If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.'
	),
	array(
		0 => 'What is „The team” link?',
		1 => 'This page provides you with a list of board staff, including board administrators and moderators and other details such as the forums they moderate.'
	),
	array(
		0 => '--',
		1 => 'Prywatne wiadomości'
	),
	array(
		0 => 'Nie mogę wysyłać prywatnych wiadomości!',
		1 => 'Są trzy powody, dla których nie możesz wysyłać prywatnych wiadomości: nie jesteś zarejestrowany i/lub zalogowany, administrator forum wyłączył prywatne wiadomości dla całego forum lub uniemożliwił wysyłanie prywatnych wiadomości tylko Tobie. Po więcej informacji skontaktuj się z administratorem forum.'
	),
	array(
		0 => 'Moje wiadomości trafiają do folderu „Do wysłania”. Dlaczego?',
		1 => 'W folderze „Do wysłania” znajdują się wiadomości, które nie zostały jeszcze odczytane przez odbiorcę.'
	),
	array(
		0 => 'Dostaję niechciane prywatne wiadomości!',
		1 => 'Możesz zablokować wybranemu użytkownikowi wysyłanie do Ciebie prywatnych wiadomości poprzez użycie reguł wiadomości dostępnych w panelu użytkownika. Jeżeli otrzymywane wiadomości są obelżywe, poinformuj o tym administratora forum, który ma możliwość zablokowania danemu użytkownikowi opcji wysyłania prywatnych wiadomości.'
	),
	array(
		0 => 'Otrzymałem spam lub obraźliwy e-mail od użytkownika forum!',
		1 => 'Przykro nam z tego powodu. Szczegóły wiadomości e-mail dają możliwość sprawdzenia i odnalezienia użytkowników, którzy wysyłają takie wiadomości, dlatego przekaż administratorowi forum pełną kopię otrzymanej wiadomości. Bardzo ważny jest nagłówek, który zawiera informacje o użytkowniku, który wysłał wiadomość. Wówczas administrator forum będzie mógł podjąć odpowiednie działania.'
	),
	array(
		0 => '--',
		1 => 'Friends and Foes'
	),
	array(
		0 => 'What are my Friends and Foes lists?',
		1 => 'You can use these lists to organise other members of the board. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list, any posts they make will be hidden by default.'
	),
	array(
		0 => 'How can I add / remove users to my Friends or Foes list?',
		1 => 'You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your Friend or Foe list. Alternatively, from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'Searching the Forums'
	),
	array(
		0 => 'How can I search a forum or forums?',
		1 => 'Enter a search term in the search box located on the index, forum or topic pages. Advanced search can be accessed by clicking the „Advance Search” link which is available on all pages on the forum. How to access the search may depend on the style used.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB3. Be more specific and use the options available within Advanced search.'
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => 'Your search returned too many results for the webserver to handle. Use „Advanced search” and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'How do I search for members?',
		1 => 'Visit to the „Members” page and click the „Find a member” link.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => 'Your own posts can be retrieved either by clicking the „Search user’s posts” within the User Control Panel or via your own profile page. To search for your topics, use the Advanced search page and fill in the various options appropriately.'
	),
	array(
		0 => '--',
		1 => 'Topic Subscriptions and Bookmarks'
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => 'Bookmarking in phpBB3 is much like bookmarking in your web browser. You aren’t alerted when there’s an update, but you can come back to the topic later. Subscribing, however, will notify you when there is an update to the topic or forum on the board via your preferred method or methods.'
	),
	array(
		0 => 'How do I subscribe to specific forums or topics?',
		1 => 'To subscribe to a specific forum, click the „Subscribe forum” link upon entering the forum. To subscribe to a topic, reply to the topic with the subscribe checkbox checked or click the „Subscribe topic” link within the topic itself.'
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => 'To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Załączniki'
	),
	array(
		0 => 'Jakie załączniki są dozwolone na tym forum?',
		1 => 'Administrator forum może umożliwić lub zablokować dodawanie wybranych typów załączników. Jeżeli nie jesteś pewien, czy dany typ załącznika można załadować na forum, skontaktuj się z administratorem.'
	),
	array(
		0 => 'Jak znaleźć wszystkie dodane przeze mnie załączniki?',
		1 => 'Listę wszystkich dodanych przez siebie załączników znajdziesz w panelu użytkownika, przechodząc do sekcji załączników.'
	),
	array(
		0 => '--',
		1 => 'Sprawy phpBB3'
	),
	array(
		0 => 'Kto napisał ten skrypt?',
		1 => 'Ten skrypt (w jego niezmodyfikowanej formie) został utworzony, opublikowany i jest własnością <a href="http://www.phpbb.com/">phpBB Group</a>. Jest wydawany na licencji GNU General Public License i może być wolno (w sensie wolności, a nie prędkości) rozpowszechniany. Kliknij na link, aby dowiedzieć się więcej.'
	),
	array(
		0 => 'Dlaczego funkcja X nie jest dostępna?',
		1 => 'Ten skrypt został utworzony i jest własnością phpBB Group. Jeżeli uważasz, że brakuje w nim jakiejś funkcji, odwiedź stronę www.phpbb.com i sprawdź, co phpBB Group ma do powiedzenia na ten temat. Nie wysyłaj zgłoszeń funkcji na forum na phpbb.com, phpBB Group używa SourceForge do zarządzania nowymi funkcjami. Przejrzyj forum i sprawdź jakie jest, jeśli w ogóle jest, nasze stanowisko na ten temat i podążaj za wskazówkami podanymi tutaj.'
	),
	array(
		0 => 'Z kim się skontaktować w sprawie nadużyć prawnych związanych z tym forum?',
		1 => 'Powinieneś skontaktować się z jednym z administratorów wyświetlonych na liście ekipy. Jeżeli nie otrzymasz odpowiedzi, to powinieneś skontaktować się z właścicielem domeny (wykonaj <a href="http://www.google.com/search?q=whois">whois lookup</a>) lub, jeśli działa ono w darmowym serwisie (np. Yahoo!, free.fr, f2s.com, itp.), z wydziałem zarządzania lub nadużyć tego serwisu. Zauważ, że phpBB Group has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do e-mail phpBB Group <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.'
	)
);

?>