<?php
/**
*
* mcp [Slovak]
*
* @package language
* @version $Id: mcp.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translation: MASH
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Akcia',
	'ACTION_NOTE'			=> 'Akcia/Poznámka',
	'ADD_FEEDBACK'			=> 'Pridať odozvu',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ak chcete toto nahlásiť, vyplňte tento formulár. Používajte iba obyčajný text; HTML, značky BBCode, atď. nie sú povolené.',
	'ADD_WARNING'			=> 'Pridať upozornenie',
	'ADD_WARNING_EXPLAIN'	=> 'Ak chcete poslať upozornenie tomuto používateľovi, vyplňte tento formulár. Používajte iba obyčajný text; HTML, značky BBcode atď. nie sú povolené.',
	'ALL_ENTRIES'			=> 'Všetky príspevky',
	'ALL_NOTES_DELETED'		=> 'Všetky poznámky používateľa boli úspešne vymazané.',
	'ALL_REPORTS'			=> 'Všetky nahlásenia',
	'ALREADY_REPORTED'	=> 'Tento príspevok už bol nahlásený.',
	'ALREADY_WARNED'		=> 'Na tento príspevok už bolo zaslané upozornenie.',
	'APPROVE'				=> 'Schváliť',
	'APPROVE_POST'			=> 'Schváliť príspevok',
	'APPROVE_POST_CONFIRM'	=> 'Naozaj chcete schváliť tento príspevok?',
	'APPROVE_POSTS'			=> 'Schváliť príspevky',
	'APPROVE_POSTS_CONFIRM'	=> 'Naozaj chcete schváliť označené príspevky?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Nemôžete presunúť tému do fóra, v ktorom sa už nachádza.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nemôžete poslať varovanie anonymnému používateľovi',
	'CANNOT_WARN_SELF'		=> 'Nemôžete poslať varovanie sami sebe.',
	'CAN_LEAVE_BLANK'		=> 'Toto pole môže ostať nevyplnené.',
	'CHANGE_POSTER'			=> 'Zmeniť autora',
	'CLOSE_REPORT'			=> 'Zavrieť hlásenie',
	'CLOSE_REPORT_CONFIRM'	=> 'Naozaj chcete zavrieť označené hlásenie?',
	'CLOSE_REPORTS'			=> 'Zavrieť hlásenia',
	'CLOSE_REPORTS_CONFIRM'	=> 'Naozaj chcete zavrieť označené hlásenia?',

	'DELETE_POSTS'			=> 'Vymazať príspevky',
	'DELETE_POSTS_CONFIRM'	=> 'Naozaj chcete vymazať tieto príspevky?',
	'DELETE_POST_CONFIRM'	=> 'Naozaj chcete vymazať tento príspevok?',
	'DELETE_REPORT'			=> 'Vymazať hlásenie',
	'DELETE_REPORT_CONFIRM'	=> 'Naozaj chcete vymazať označené hlásenie?',
	'DELETE_REPORTS'		=> 'Vymazať hlásenia',
	'DELETE_REPORTS_CONFIRM'	=> 'Naozaj chcete vymazať označené hlásenia?',
	'DELETE_SHADOW_TOPIC'		=> 'Odstrániť tieňovú tému',
	'DELETE_TOPICS'			=> 'Vymazať označené témy',
	'DELETE_TOPICS_CONFIRM'	=> 'Naozaj chcete vymazať tieto témy?',
	'DELETE_TOPIC_CONFIRM'	=> 'Naozaj chcete vymazať túto tému?',
	'DISAPPROVE'			=> 'Zamietnuť',
	'DISAPPROVE_REASON'		=> 'Dôvod zamietnutia',
	'DISAPPROVE_POST'		=> 'Zamietnuť príspevok',
	'DISAPPROVE_POST_CONFIRM'	=> 'Naozaj chcete zamietnuť označený príspevok?',
	'DISAPPROVE_POSTS'		=> 'Zamietnuť príspevky',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Naozaj chcete zamietnuť označené príspevky?',
	'DISPLAY_LOG'			=> 'Zobraziť položky od predchádzajúceho',
	'DISPLAY_OPTIONS'		=> 'Zobraziť možnosti',

	'EMPTY_REPORT'		=> 'Keď ste vybrali tento dôvod, musíte zadať popis.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Pamätajte, že jedna alebo viac tém bolo odstránených z databázy, pretože boli alebo sa stali prázdnymi.',

	'FEEDBACK'			=> 'Odozva',
	'FORK'					=> 'Kopírovať',
	'FORK_TOPIC'			=> 'Skopírovať tému',
	'FORK_TOPIC_CONFIRM'	=> 'Naozaj chcete skopírovať túto tému?',
	'FORK_TOPICS'			=> 'Skopírovať označené témy',
	'FORK_TOPICS_CONFIRM'	=> 'Naozaj chcete skopírovať označené témy?',
	'FORUM_DESC'			=> 'Popis',
	'FORUM_NAME'			=> 'Názov fóra',
	'FORUM_NOT_EXIST'		=> 'Vybrané fórum neexistuje.',
	'FORUM_NOT_POSTABLE'	=> 'Do označeného fóra nemôžete prispievať.',
	'FORUM_STATUS'			=> 'Stav fóra',
	'FORUM_STYLE'			=> 'Štýl fóra',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globálne oznámenie',

	'IP_INFO'				=> 'Informácie o IP',
	'IPS_POSTED_FROM'		=> 'IP adresy, z ktorých prispieval tento používateľ',

	'LATEST_LOGS'				=> 'Posledných 5 zaznamenaných akcií',
	'LATEST_REPORTED'			=> 'Posledných 5 nahlásení',
	'LATEST_UNAPPROVED'			=> 'Posledných 5 príspevkov čakajúcich na schválenie',
	'LATEST_WARNING_TIME'		=> 'Posledné vydané varovanie',
	'LATEST_WARNINGS'			=> 'Posledných 5 varovaní',
	'LEAVE_SHADOW'				=> 'Ponechať tieňovú tému v starom fóre',
	'LIST_REPORT'				=> '1 nahlásenie',
	'LIST_REPORTS'				=> '%d nahlásení',
	'LOCK'						=> 'Zamknúť',
	'LOCK_POST_POST'			=> 'Zamknúť príspevok',
	'LOCK_POST_POST_CONFIRM'	=> 'Naozaj chcete zabrániť úpravám tohto príspevku?',
	'LOCK_POST_POSTS'		    => 'Zamknúť označené príspevky',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Naozaj chcete zabrániť úpravám označených príspevkov?',
	'LOCK_TOPIC_CONFIRM'		=> 'Naozaj chcete zamknúť túto tému?',
	'LOCK_TOPICS'				=> 'Zamknúť označené témy',
	'LOCK_TOPICS_CONFIRM'		=> 'Naozaj chcete zamknúť tieto témy?',
	'LOGS_CURRENT_TOPIC'		=> 'Zobrazené záznamy:',
	'LOGIN_EXPLAIN_MCP'			=> 'Na moderovanie tohto fóra musíte byť prihlásený.',
	'LOGVIEW_VIEWTOPIC'			=> 'Zobraziť tému',
	'LOGVIEW_VIEWLOGS'			=> 'Zobraziť záznamy témy',
	'LOGVIEW_VIEWFORUM'			=> 'Zobraziť fórum',
	'LOOKUP_ALL'				=> 'Hľadať všetky IP adresy',
	'LOOKUP_IP'					=> 'Hľadať IP adresu',

	'MARKED_NOTES_DELETED'		=> 'Všetky označené poznámky používateľa boli úspešne odstránené.',

	'MCP_ADD'					=> 'Pridať upozornenie',

	'MCP_BAN'					=> 'Udeliť ban',
	'MCP_BAN_EMAILS'			=> 'Ban na e-mailovú adresu',
	'MCP_BAN_IPS'				=> 'Ban na IP adresy',
	'MCP_BAN_USERNAMES'			=> ' Ban na prihlasovacie meno',

	'MCP_LOGS'						=> 'Záznamy moderátora',
	'MCP_LOGS_FRONT'				=> 'Hlavná strana',
	'MCP_LOGS_FORUM_VIEW'			=> 'Záznamy fóra',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Záznamy témy',

	'MCP_MAIN'					=> 'Hlavné',
	'MCP_MAIN_FORUM_VIEW'			=> 'Zobraziť fórum',
	'MCP_MAIN_FRONT'				=> 'Hlavná strana',
	'MCP_MAIN_POST_DETAILS'			=> 'Detaily príspevku',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Zobraziť tému',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Zmeniť na “Oznámenie”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Naozaj chcete túto tému zmeniť na “Oznámenie”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Zmeniť na “Oznámenia”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Naozaj chcete zmeniť označené témy na “Oznámenia”?',
	'MCP_MAKE_GLOBAL'				=> 'Zmeniť na “Globálne oznámenie”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Naozaj chcete túto tému zmeniť na “Globálne oznámenie”?',
	'MCP_MAKE_GLOBALS'				=> 'Zmeniť na “Globálne oznámenia”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Naozaj chcete označené témy zmeniť na “Globálne oznámenia”?',
	'MCP_MAKE_STICKY'				=> 'Zmeniť na “Dôležité”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Naozaj chcete zmeniť túto tému na “Dôležité”?',
	'MCP_MAKE_STICKIES'				=> 'Zmeniť na “Dôležité”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Naozaj chcete zmeniť označené témy na “Dôležité”?',
	'MCP_MAKE_NORMAL'				=> 'Zmeniť na “Štandardnú tému”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Naozaj chcete zmeniť túto tému na “Štandardnú tému”?',
	'MCP_MAKE_NORMALS'				=> 'Zmeniť na “Štandardné témy”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Naozaj chcete zmeniť označené témy na “Štandardné témy”?',

	'MCP_NOTES'						=> 'Poznámky používateľa',
	'MCP_NOTES_FRONT'				=> 'Hlavná stránka',
	'MCP_NOTES_USER'				=> 'Detaily používateľa',

	'MCP_POST_REPORTS'				=> 'Hlásenia na tento príspevok',

	'MCP_REPORTS'					=> 'Nahlásené príspevky',
	'MCP_REPORT_DETAILS'			=> 'Detaily nahlásenia',
	'MCP_REPORTS_CLOSED'			=> 'Vybavené nahlásenia',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Toto je zoznam všetkých nahlásených príspevkov, ktoré boli už vyriešené.',
	'MCP_REPORTS_OPEN'				=> 'Nevyriešené nahlásenia',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Toto je zoznam všetkých nahlásených príspevkov, ktoré ešte neboli vyriešené',

	'MCP_QUEUE'								=> 'Čakajúce na schválenie',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Schváliť detaily',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Príspevky čakajúce na schválenie',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Toto je zoznam všetkých príspevkov, ktoré vyžadujú schválenie skôr ako budú viditeľné pre používateľov.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Témy čakajúce na schválenie',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Toto je zoznam všetkých tém, ktoré vyžadujú schválenie skôr ako budú viditeľné pre používateľov.',

	'MCP_VIEW_USER'			=> 'Zobraziť varovanie pre určitého používateľa',

	'MCP_WARN'				=> 'Varovania',
	'MCP_WARN_FRONT'		=> 'Hlavná stránka',
	'MCP_WARN_LIST'			=> 'Zoznam varovaní',
	'MCP_WARN_POST'			=> 'Varovať za určitý príspevok',
	'MCP_WARN_USER'			=> 'Varovať používateľa',

	'MERGE_POSTS'			=> 'Zlúčiť príspevky',
	'MERGE_POSTS_CONFIRM'	=> 'Naozaj chcete zlúčiť označené príspevky?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Pomocou tohto formulára môžete zlúčiť označené príspevky do inej témy. Tieto príspevky budú zobrazené ako keby ich používatelia odoslali do novej témy.<br />Prosím, vložte ID cieľovej témy alebo kliknite na tlačidlo "Vybrať tému" a vyhľadajte ju.',
	'MERGE_TOPIC_ID'		=> 'ID cieľovej témy',
	'MERGE_TOPICS'			=> 'Zlúčiť témy',
	'MERGE_TOPICS_CONFIRM'	=> 'Naozaj chcete zlúčiť označené témy?',
	'MODERATE_FORUM'		=> 'Moderovať fórum',
	'MODERATE_TOPIC'		=> 'Moderovať tému',
	'MODERATE_POST'			=> 'Moderovať príspevok',
	'MOD_OPTIONS'			=> 'Možnosti moderátora',
	'MORE_INFO'				=> 'Ďalšie informácie',
	'MOST_WARNINGS'			=> 'Používatelia s najväčším počtom varovaní',
	'MOVE_TOPIC_CONFIRM'	=> 'Naozaj chcete presunúť tému do nového fóra?',
	'MOVE_TOPICS'			=> 'Presunúť označené témy',
	'MOVE_TOPICS_CONFIRM'	=> 'Naozaj chcete presunúť označené témy do nového fóra?',

	'NOTIFY_POSTER_APPROVAL'=> 'Upozorniť autora na schválenie?',
	'NOTIFY_POSTER_DISAPPROVAL' => 'Upozorniť autora na neschválenie?',
	'NOTIFY_USER_WARN'		=> 'Upozorniť používateľa na varovanie?',
	'NOT_MODERATOR'			=> 'Nie ste moderátorom tohto fóra.',
	'NO_DESTINATION_FORUM'	=> 'Prosím, vyberte cieľové fórum.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Cieľové fórum nie je dostupné.',
	'NO_ENTRIES'			=> 'Pre túto periódu neexistujú žiadne záznamy.',
	'NO_FEEDBACK'			=> 'Na tohto používateľa neexistuje žiadna odozva.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Na zlúčenie príspevkov musíte vybrať cieľovú tému.',
	'NO_MATCHES_FOUND'		=> 'Neboli nájdené žiadne výsledky.  ',
	'NO_POST'				=> 'Musíte vybrať príspevok, aby mohol byť používateľ varovaný.',
	'NO_POST_REPORT'		=> 'Tento príspevok nebol nahlásený.',
	'NO_POST_SELECTED'		=> 'Na vykonanie tejto akcie musíte vybrať minimálne jeden príspevok.',
	'NO_REASON_DISAPPROVAL'	=> 'Prosím, zadajte dôvod neschválenia.',
	'NO_REPORT'						=> 'Nebolo nájdené žiadne hlásenie.',
	'NO_REPORTS'					=> 'Neboli nájdené žiadne hlásenia.',
	'NO_REPORT_SELECTED'			=> 'Na vykonanie tejto akcie musíte vybrať minimálne jedno hlásenie.',
	'NO_TOPIC_ICON'			=> 'Žiadna',
	'NO_TOPIC_SELECTED'		=> 'Na vykonanie tejto akcie musíte vybrať minimálne jednu tému.',
	'NO_TOPICS_QUEUE'				=> 'Žiadne témy nečakajú na schválenie.',

	'ONLY_TOPIC'			=> 'Iba téma "%s"',
	'OTHER_USERS'			=> 'Používatelia prispievajúci z tejto IP adresy',

	'POSTER'				=> 'Autor',
	'POSTS_APPROVED_SUCCESS'=> 'Označené príspevky boli schválené.',
	'POSTS_DELETED_SUCCESS'	=> 'Označené príspevky boli úspešne odstránené z databázy.',
	'POSTS_DISAPPROVED_SUCCESS'=> 'Označené príspevky neboli schválené.',
	'POSTS_LOCKED_SUCCESS'	=> 'Označené príspevky boli úspešne zamknuté.',
	'POSTS_MERGED_SUCCESS'	=> 'Označené príspevky boli zlúčené.',
	'POSTS_UNLOCKED_SUCCESS'=> 'Označené príspevky boli úspešne odomknuté.',
	'POSTS_PER_PAGE'		=> 'Príspevkov na stranu',
	'POSTS_PER_PAGE_EXPLAIN'=> '(Na zobrazenie všetkých príspevkov zadajte 0)',
	'POST_APPROVED_SUCCESS'	=> 'Označený príspevok bol schválený.',
	'POST_DELETED_SUCCESS'	=> 'Označený príspevok bol úspešne odstránený z databázy.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Označený príspevok nebol schválený.',
	'POST_LOCKED_SUCCESS'	=> 'Príspevok bol úspešne zamknutý.',
	'POST_NOT_EXIST'		=> 'Príspevok, ktorý požadujete, neexistuje.',
	'POST_REPORTED_SUCCESS'	=> 'Tento príspevok bol úspešne nahlásený.',
	'POST_UNLOCKED_SUCCESS'	=> 'Príspevok bol úspešne odomknutý.',

	'READ_USERNOTES'		=> 'Poznámky používateľa',
	'READ_WARNINGS'			=> 'Varovania používateľa',
	'REPORTER'				=> 'Oznamovateľ',
	'REPORTED'		       	=> 'Nahlásené',
	'REPORTED_BY'				=> 'Nahlásil',
	'REPORTED_ON_DATE'			=> '',
	'REPORTS_CLOSED_SUCCESS'	=> 'Označené hlásenia boli úspešne uzavreté.',
	'REPORTS_DELETED_SUCCESS'	=> 'Označené hlásenia boli úspešne odstránené.',
	'REPORTS_TOTAL'			=> 'Celkovo je tu <strong>%d</strong> nahlásení',
	'REPORTS_ZERO_TOTAL'	=> 'Nie sú žiadne nahlásenia',
	'REPORT_CLOSED'			=> 'Toto hlásenie už bolo vybavené.',
	'REPORT_CLOSED_SUCCESS'	=> 'Označené hlásenie bolo úspešne vybavené.',
	'REPORT_DELETED_SUCCESS'	=> 'Označené hlásenie bolo úspešne odstránené.',
	'REPORT_DETAILS'		=> 'Detaily hlásenia',
	'REPORT_MESSAGE'		=> 'Nahlásiť túto správu',
	'REPORT_MESSAGE_EXPLAIN'=> 'Použite tento formulár na nahlásenie vybranej správy. Nahlásenie by malo byť použité hlavne v prípade, že správa porušuje pravidlá fóra.',
	'REPORT_NOTIFY'			=> 'Upozorniť ma',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Informovať ma, keď bude hlásenie vyriešené.',
	'REPORT_POST_EXPLAIN'	=> 'Použite tento formulár na hlásenie vybraného príspevku moderátorom a administrátorom fóra. Nahlásenie by malo byť použité hlavne v prípade, že príspevok porušuje pravidlá fóra.',
	'REPORT_REASON'			=> 'Dôvod nahlásenia',
	'REPORT_TIME'			=> 'Čas nahlásenia',
	'REPORT_TOTAL'			=> 'Celkom je tu <strong>1</strong> hlásenie.',
	'RESYNC'				=> 'Synchronizácia',
	'RETURN_MESSAGE'		=> '%sNaspäť na správu%s',
	'RETURN_NEW_FORUM'		=> '%sÍsť na nové fórum%s',
	'RETURN_NEW_TOPIC'		=> '%sÍsť na novú tému%s',
	'RETURN_POST'			=> '%sNaspäť na príspevok%s',
	'RETURN_QUEUE'			=> '%sNaspäť do fronty%s',
	'RETURN_REPORTS'		=> '%sNaspäť na hlásenia%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sNaspäť do témy%s',

	'SEARCH_POSTS_BY_USER'	=> 'Hľadať príspevky podľa autora',
	'SELECT_ACTION'			=> 'Vybrať požadovanú akciu',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Prosím, vyberte fórum, v ktorom má byť toto globálne oznámenie zobrazené.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Jedna alebo viac z označených tém sú globálne oznámenia. Prosím, vyberte fórum, v ktorom majú byť zobrazené.',
	'SELECT_MERGE'						=> 'Vybrať na zlúčenie',
	'SELECT_TOPICS_FROM'				=> 'Vybrať témy z',
	'SELECT_TOPIC'			=> 'Vybrať tému',
	'SELECT_USER'			=> 'Vybrať používateľa',
	'SORT_ACTION'			=> 'Záznam akcie',
	'SORT_DATE'				=> 'Dátum',
	'SORT_IP'				=> 'IP adresa',
	'SORT_WARNINGS'			=> 'Varovania',
	'SPLIT_AFTER'			=> 'Rozdeliť od označeného príspevku',
	'SPLIT_FORUM'			=> 'Zobrazenie nových tém',
	'SPLIT_POSTS'			=> 'Rozdeliť vybrané príspevky',
	'SPLIT_SUBJECT'			=> 'Nový predmet témy',
	'SPLIT_TOPIC_ALL'		=> 'Oddeliť označené príspevky z témy',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Naozaj chcete rozdeliť túto tému?',
	'SPLIT_TOPIC_BEYOND'	=> 'Rozdeliť tému od označeného príspevku',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'Naozaj chcete rozdeliť túto tému od označeného príspevku?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Pomocou tohto formulára môžete rozdeliť tému na dve, buď označením jednotlivých príspevkov alebo rozdelením od označeného príspevku.',

	'THIS_POST_IP'			=> 'IP adresa tohto príspevku',
	'TOPICS_APPROVED_SUCCESS'	=> 'Označené témy boli schválené.',
	'TOPICS_DELETED_SUCCESS'=> 'Označené témy boli úspešne odstránené z databázy.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Označené témy neboli schválené.',
	'TOPICS_FORKED_SUCCESS'	=> 'Označené témy boli úspešne skopírované.',
	'TOPICS_LOCKED_SUCCESS'	=> 'Označené témy boli zamknuté.',
	'TOPICS_MOVED_SUCCESS'	=> 'Označené témy boli úspešne presunuté.',
	'TOPICS_RESYNC_SUCCESS'	=> 'Označené témy boli synchronizované.',
	'TOPICS_TYPE_CHANGED'		=> 'Typ témy bol úspešne zmenený.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Označené témy boli odomknuté.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Označená téma bola schválená.',
	'TOPIC_DELETED_SUCCESS'	=> 'Označená téma bola úspešne odstránená z databázy.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Označená téma nebola schválená.',
	'TOPIC_FORKED_SUCCESS'	=> 'Označená téma bola úspešne skopírovaná.',
	'TOPIC_LOCKED_SUCCESS'	=> 'Označená téma bola zamknutá.',
	'TOPIC_MOVED_SUCCESS'	=> 'Označená téma bola úspešne presunutá.',
	'TOPIC_NOT_EXIST'		=> 'Označená téma neexistuje.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Označená téma bola synchronizovaná.',
	'TOPIC_SPLIT_SUCCESS'	=> 'Označená téma bola úspešne rozdelená.',
	'TOPIC_TIME'			=> 'Čas témy',
	'TOPIC_TYPE_CHANGED'	=> 'Typ témy bol úspešne zmenený.',
	'TOPIC_UNLOCKED_SUCCESS'=> 'Označená téma bola odomknutá.',
	'TOTAL_WARNINGS'		=> 'Celkový počet varovaní',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Celkom čaká na schválenie <strong>%d</strong> príspevkov.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nie sú tu žiadne príspevky čakajúce na schválenie.',
	'UNAPPROVED_POST_TOTAL'			=> 'Celkom je tu <strong>1</strong> príspevok čakajúci na schválenie.',
	'UNLOCK'						=> 'Odomknúť',
	'UNLOCK_POST'					=> 'Odomknúť príspevok',
	'UNLOCK_POST_EXPLAIN'			=> 'Povoliť úpravy',
	'UNLOCK_POST_POST'				=> 'Odomknúť príspevok',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Naozaj chcete povoliť upravovanie príspevku?',
	'UNLOCK_POST_POSTS'				=> 'Odomknúť označené príspevky',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Naozaj chcete povoliť upravovanie označených príspevkov?',
	'UNLOCK_TOPIC'					=> 'Odomknúť tému',
	'UNLOCK_TOPIC_CONFIRM'			=> 'naozaj chcete odomknúť túto tému?',
	'UNLOCK_TOPICS'					=> 'Odomknúť označené témy',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Naozaj chcete odomknúť všetky označené témy?',
	'USER_CANNOT_POST'				=> 'Nemôžete prispievať do tohto fóra.',
	'USER_CANNOT_REPORT'			=> 'Nemôžete nahlásiť príspevok v tomto fóre.',
	'USER_FEEDBACK_ADDED'			=> 'Odozva používateľa úspešne pridaná.',
	'USER_WARNING_ADDED'			=> 'Používateľ bol úspešne varovaný.',

	'VIEW_DETAILS'			=> 'Zobraziť detaily',
	'VIEW_POST'				=> 'Zobraziť príspevok',

	'WARNED_USERS'			=> 'Varovaní používatelia',
	'WARNED_USERS_EXPLAIN'	=> 'Toto je zoznam používateľov s platnými varovaniami, ktoré im boli pridelené.',
	'WARNING_PM_BODY'		=> 'Toto je varovanie, ktoré vám bolo udelené od administrátora alebo moderátora tohto fóra.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Udelené varovanie fóra',
	'WARNING_POST_DEFAULT'	=> 'Toto je varovanie týkajúce sa vášho príspevku: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Neexistujú žiadne varovania.',

	'YOU_SELECTED_TOPIC'	=> 'Označili ste tému číslo %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Ostatné'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Príspevok obsahuje odkaz na nelegálny alebo pirátsky softvér.',
			'SPAM'		=> 'Nahlásený príspevok mal za účel iba propagáciu webovej stránky alebo iného produktu.',
			'OFF_TOPIC'	=> 'Nahlásený príspevok je mimo témy (off-topic).',
			'OTHER'		=> 'Nahlásený príspevok sa nedá zaradiť do žiadnej z kategórií, prosím, vyplňte popis hlásenia.'
		)
	),
));

?>