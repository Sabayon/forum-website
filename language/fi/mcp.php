<?php
/** 
*
* mcp [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
	'ACTION'				=> 'Toimenpide',
	'ACTION_NOTE'			=> 'Toimenpide/Muistiinpanot',
	'ADD_FEEDBACK'			=> 'Muistiinpanot',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Voit kirjoittaa muistiinpanoja käyttäjästä käyttämällä oheista lomaketta. Käytä pelkkää tekstiä; HTML, BBCode, jne. Ei ole sallittu.',
	'ADD_WARNING'			=> 'Lisää varoitus',
	'ADD_WARNING_EXPLAIN'	=> 'Täytä oheinen lomake lähettääksesi varoituksen käyttäjälle. Käytä pelkkää tekstiä; HTML, BBCode, jne. Ei ole sallittu.',
	'ALL_ENTRIES'			=> 'Kaikki kirjaukset',
	'ALL_NOTES_DELETED'		=> 'Tämän käyttäjän muistiinpanot on poistettu',
	'ALL_REPORTS'			=> 'Kaikki ilmoitukset',
	'ALREADY_REPORTED'		=> 'Tämä viesti on jo ilmoitettu',
	'ALREADY_REPORTED_PM'	=> 'Tämö yksityisviesti on jo ilmoitettu.',
	'ALREADY_WARNED'		=> 'Tästä viestistä on jo annettu varoitus',
	'APPROVE'				=> 'Hyväksy',
	'APPROVE_POST'			=> 'Hyväksy viesti',
	'APPROVE_POST_CONFIRM'	=> 'Haluatko varmasti hyväksyä tämän viestin?',
	'APPROVE_POSTS'			=> 'Hyväksy viestit',
	'APPROVE_POSTS_CONFIRM'	=> 'Haluatko varmasti hyväksyä valitut viestit?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Et voi siirtää viestiketjua samalle alueelle, jossa se jo on',
	'CANNOT_WARN_ANONYMOUS'	=> 'Et voi varoittaa vierailevaa käyttäjää',
	'CANNOT_WARN_SELF'		=> 'Et voi varoittaa itseäsi',
	'CAN_LEAVE_BLANK'		=> 'Tämän voi jättää tyhjäksi.',
	'CHANGE_POSTER'			=> 'Vaihda viestin kirjoittaja',
	'CLOSE_PM_REPORT'		=> 'Sulje YV ilmoitus',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Haluatko varmasti sulkea tämän YV ilmoituksen?',
	'CLOSE_PM_REPORTS'		=> 'Sulje YV ilmoitukset',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Haluatko varmasti sulkea valitsemasi YV ilmoitukset?',
	'CLOSE_REPORT'			=> 'Sulje ilmoitus',
	'CLOSE_REPORT_CONFIRM'	=> 'Haluatko varmasti sulkea ilmoituksen?',
	'CLOSE_REPORTS'			=> 'Sulje ilmoitukset',
	'CLOSE_REPORTS_CONFIRM'	=> 'Haluatko varmasti sulkea valitsemasi ilmoitukset?',
	'DELETE_PM_REPORT'			=> 'Poista YV ilmoitus',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Haluatko varmasti poistaa valitsemasi YV ilmoituksen?',
	'DELETE_PM_REPORTS'			=> 'Poista YV ilmoitukset',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Haluatko varmasti poistaa valitsemasi YV ilmoitukset?',

	'DELETE_POSTS'				=> 'Poista viestit',
	'DELETE_POSTS_CONFIRM'		=> 'Haluatko varmasti poistaa nämä viestit?',
	'DELETE_POST_CONFIRM'		=> 'Haluatko varmasti poistaa tämän viestin?',
	'DELETE_REPORT'				=> 'Poista ilmoitus',
	'DELETE_REPORT_CONFIRM'		=> 'Haluatko varmasti poistaa valitun ilmoituksen?',
	'DELETE_REPORTS'			=> 'Poista ilmoitukset',
	'DELETE_REPORTS_CONFIRM'	=> 'Haluatko varmasti poistaa valitsemasi ilmoitukset?',
	'DELETE_SHADOW_TOPIC'		=> 'Poista varjo',
	'DELETE_TOPICS'				=> 'Poista valitut viestiketjut',
	'DELETE_TOPICS_CONFIRM'		=> 'Haluatko varmasti poistaa nämä viestiketjut?',
	'DELETE_TOPIC_CONFIRM'		=> 'Haluatko varmasti poistaa tämän viestiketjun?',
	'DISAPPROVE'				=> 'Hylkää',
	'DISAPPROVE_REASON'			=> 'Hylkäyksen syy',
	'DISAPPROVE_POST'			=> 'Hylkää viesti',
	'DISAPPROVE_POST_CONFIRM'	=> 'Haluatko varmasti hylätä tämän viestin?',
	'DISAPPROVE_POSTS'			=> 'Hylkää viestit',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Haluatko varmasti hylätä valitut viestit?',
	'DISPLAY_LOG'				=> 'Näytä merkinnät ajalta',
	'DISPLAY_OPTIONS'			=> 'Näytä vaihtoehdot',

	'EMPTY_REPORT'					=> 'Tämä syy vaatii tarkennuksen',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Huomaa, että yksi tai useampi ketju on poistettu tietokannasta, koska ne tyhjenivät',

	'FEEDBACK'				=> 'Muistiinpano',
	'FORK'					=> 'Kopioi',
	'FORK_TOPIC'			=> 'Kopioi viestiketju',
	'FORK_TOPIC_CONFIRM'	=> 'Haluatko varmasti kopioida tämän viestiketjun?',
	'FORK_TOPICS'			=> 'Kopioi valitut viestiketjut',
	'FORK_TOPICS_CONFIRM'	=> 'Haluatko varmasti kopioida valitut viestiketjut?',
	'FORUM_DESC'			=> 'Kuvaus',
	'FORUM_NAME'			=> 'Alueen nimi',
	'FORUM_NOT_EXIST'		=> 'Alue, jonka valitsit. Ei ole olemassa',
	'FORUM_NOT_POSTABLE'	=> 'Valitsemallesi alueelle ei voi kirjoittaa uusia viestejä.',
	'FORUM_STATUS'			=> 'Alueen tilanne',
	'FORUM_STYLE'			=> 'Alueen tyyli',

	'GLOBAL_ANNOUNCEMENT'	=> 'Yleistiedote',

	'IP_INFO'				=> 'IP-osoitteen tiedot',
	'IPS_POSTED_FROM'		=> 'IP-osoitteet, joista tämä käyttäjä on kirjoittanut viestejä.',

	'LATEST_LOGS'				=> 'Viimeiset 5 kirjattua tapahtumaa',
	'LATEST_REPORTED'			=> 'Viimeiset 5 ilmoitettua',
	'LATEST_REPORTED_PMS'		=> 'Viisi uusinta YV ilmoitusta',
	'LATEST_UNAPPROVED'			=> 'Viimeiset 5 hyväksymistä odottavaa viestiä',
	'LATEST_WARNING_TIME'		=> 'Viimeisin annettu varoitus',
	'LATEST_WARNINGS'			=> 'Viimeiset 5 varoitusta',
	'LEAVE_SHADOW'				=> 'Jätä varjoaihe',
	'LIST_REPORT'				=> '1 ilmoitus',
	'LIST_REPORTS'				=> '%d ilmoitusta',
	'LOCK'						=> 'Lukitse',
	'LOCK_POST_POST'			=> 'Lukitse viesti',
	'LOCK_POST_POST_CONFIRM'	=> 'Haluatko varmasti estää tämän viestin muokkauksen?',
	'LOCK_POST_POSTS'			=> 'Lukitse valitut viestit',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Haluatko varmasti estää valittujen viestien muokkauksen?',
	'LOCK_TOPIC_CONFIRM'		=> 'Haluatko varmasti lukita tämän viestiketjun?',
	'LOCK_TOPICS'				=> 'Lukitse valitut viestiketjut',
	'LOCK_TOPICS_CONFIRM'		=> 'Haluatko varmasti lukita valitut viestiketjut?',
	'LOGS_CURRENT_TOPIC'		=> 'Katsoo lokitietoja:',
	'LOGIN_EXPLAIN_MCP'			=> 'Sinun täytyy kirjautua sisään valvoaksesi tätä aluetta.',
	'LOGVIEW_VIEWTOPIC'			=> 'Katso viestiketjua',
	'LOGVIEW_VIEWLOGS'			=> 'Katso viestiketjun lokitiedot',
	'LOGVIEW_VIEWFORUM'			=> 'Katso alue',
	'LOOKUP_ALL'				=> 'Hae kaikkien IP-osoitteiden tiedot',
	'LOOKUP_IP'					=> 'Hae IP-osoitteen tiedot',

	'MARKED_NOTES_DELETED'		=> 'Käyttäjän merkinnät poistettu onnistuneesti',

	'MCP_ADD'						=> 'Lisää varoitus',

	'MCP_BAN'					=> 'Porttikiellot',
	'MCP_BAN_EMAILS'			=> 'sähköpostille',
	'MCP_BAN_IPS'				=> 'IP-osoitteelle',
	'MCP_BAN_USERNAMES'			=> 'käyttäjätunnukselle',

	'MCP_LOGS'						=> 'Valvojien lokitiedot',
	'MCP_LOGS_FRONT'				=> 'Etusivu',
	'MCP_LOGS_FORUM_VIEW'			=> 'Alueiden lokit',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Viestiketjujen loki',

	'MCP_MAIN'						=> 'Päävalikko',
	'MCP_MAIN_FORUM_VIEW'			=> 'Näytä alue',
	'MCP_MAIN_FRONT'				=> 'Etusivu',
	'MCP_MAIN_POST_DETAILS'			=> 'Viestin yksityiskohdat',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Näytä viestiketju',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Tee tiedote',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Haluatko varmasti muuttaa tämän viestiketjun tiedotteeksi?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Tee tiedotteita',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Haluatko varmasti muuttaa valitut viestiketjut tiedotteiksi?',
	'MCP_MAKE_GLOBAL'				=> 'Tee yleistiedote',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Haluatko varmasti muuttaa tämän viestiketjun yleistiedotteeksi?',
	'MCP_MAKE_GLOBALS'				=> 'Tee yleistiedotteita',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Haluatko varmasti muuttaa valitut viestiketjut yleistiedotteiksi?',
	'MCP_MAKE_STICKY'				=> 'Tee pysyvä',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Haluatko varmasti thdä tästä viestiketjusta pysyvän?',
	'MCP_MAKE_STICKIES'				=> 'Tee pysyviä',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Haluatko varmasti tehdä valituista viestiketjuista pysyviä?',
	'MCP_MAKE_NORMAL'				=> 'Tee normaali',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Haluatko varmasti muuttaa tämän viestiketjun normaaliksi viestiketjuksi?',
	'MCP_MAKE_NORMALS'				=> 'Tee normaaleja',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Haluatko varmasti muuttaa valitut viestiketjut normaaleiksi viestiketjuiksi?',

	'MCP_NOTES'						=> 'Muistikirja',
	'MCP_NOTES_FRONT'				=> 'Etusivu',
	'MCP_NOTES_USER'				=> 'Käyttäjän yksityiskohdat',

	'MCP_POST_REPORTS'				=> 'Tästä viestistä annetut ilmoitukset',
	
	'MCP_PM_REPORTS'				=> 'Ilmoitetut yksityisvivestit',
	'MCP_PM_REPORT_DETAILS'			=> 'YV-ilmoituksen tiedot',
	'MCP_PM_REPORTS_CLOSED'			=> 'Suljetut YV-ilmoitukset',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Tämä on lista yksityisviesteistä, jotka ovat ratkaistu',
	'MCP_PM_REPORTS_OPEN'			=> 'Avoimet YV-ilmoitukset',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Tämä on lista yksityisviesteistä, jotka odottavat toimenpiteitä.',

	'MCP_REPORTS'					=> 'Ilmoitetut viestit',
	'MCP_REPORT_DETAILS'			=> 'Ilmoituksen yksityiskohdat',
	'MCP_REPORTS_CLOSED'			=> 'Suljetut ilmoitukset',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Tässä listassa on kaikki ratkaistut ilmoitukset',
	'MCP_REPORTS_OPEN'				=> 'Avoimet ilmoitukset',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Tässä listassa on kaikki toimenpiteitä odottavat ilmoitukset',

	'MCP_QUEUE'								=> 'Hyväksymistä odottavat viestit',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Hyväksymisen yksityiskohdat',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Viestit, jotka odottavat hyväksyntää',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Tässä listassa on kaikki viestit, jotka vaativat hyväksynnän ennen julkaisua',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Viestiketjut jotka odottavat hyväksyntää',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Tässä listassa on kaikki viestiketjut, jotka vaativat hyväksynnän ennen julkaisua',

	'MCP_VIEW_USER'			=> 'Näytä tietyn käyttäjän saamat varoitukset',

	'MCP_WARN'				=> 'Varoitukset',
	'MCP_WARN_FRONT'		=> 'Etusivu',
	'MCP_WARN_LIST'			=> 'Luettelo',
	'MCP_WARN_POST'			=> 'Varoita tietyn viestin perusteella',
	'MCP_WARN_USER'			=> 'Anna varoitus',

	'MERGE_POSTS'			=> 'Yhdistä viestejä',
	'MERGE_POSTS_CONFIRM'	=> 'Haluatko varmasti yhdistää valitut viestit?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Käytä oheista lomaketta yhdistääksesi valitsemasi viestit toiseen viestiketjuun. Viestejä ei järjesettä uudelleen vaan ne näkyvät kuin käyttäjä olisi lähettänyt ne vastauksena.<br />Ole hyvä ja anna kohde viestiketjun id tai paina "valitse" nappulaa etsiäksesi viestiketjua.',
	'MERGE_TOPIC_ID'		=> 'Kohde viestiketjun ID',
	'MERGE_TOPICS'			=> 'Yhdistä viestiketjut',
	'MERGE_TOPICS_CONFIRM'	=> 'Haluatko varmasti yhdistää valitut viestiketjut?',
	'MODERATE_FORUM'		=> 'Hallinnoi aluetta',
	'MODERATE_TOPIC'		=> 'Valvo viestiketjua',
	'MODERATE_POST'			=> 'Valvo viestiä',
	'MOD_OPTIONS'			=> 'Suoritettavat toimenpiteet',
	'MORE_INFO'				=> 'Lisätietoja',
	'MOST_WARNINGS'			=> 'Eniten varoituksia saaneet käyttäjät',
	'MOVE_TOPIC_CONFIRM'	=> 'Haluatko varmasti siirtää viestiketjun uudelle alueelle?',
	'MOVE_TOPICS'			=> 'Siirrä valitut viestiketjut',
	'MOVE_TOPICS_CONFIRM'	=> 'Haluatko varmasti siirtää valitut viestiketjut uudelle alueelle?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Ilmoita viestin kirjoittajalle hyväksymisestä?',
	'NOTIFY_POSTER_DISAPPROVAL' 	=> 'Ilmoita viestin kirjoittajalle hylkäyksestä?',
	'NOTIFY_USER_WARN'				=> 'Ilmoita käyttäjälle varoituksesta?',
	'NOT_MODERATOR'					=> 'Et ole tämän alueen valvoja',
	'NO_DESTINATION_FORUM'			=> 'Valitse kohdealue',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Kohdealuetta ei ole saatavilla.',
	'NO_ENTRIES'					=> 'Ei lokitietoja tältä ajalta',
	'NO_FEEDBACK'					=> 'Tästä käyttäjästä ei ole viestejä',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Anna kohde yhdistettäville viestiketjuille',
	'NO_MATCHES_FOUND'				=> 'Ei vastaavia',
	'NO_POST'						=> 'Valitse viesti varoittaaksesi käyttäjää sen perusteella',
	'NO_POST_REPORT'				=> 'Tätä viestiä ei ole ilmoitettu.',
	'NO_POST_SELECTED'				=> 'Valitse ainakin yksi viesti suorittaaksesi toiminnon',
	'NO_REASON_DISAPPROVAL'			=> 'Ole hyvä ja anna hylkäämiselle syy',
	'NO_REPORT'						=> 'Ilmoitusta ei löytynyt',
	'NO_REPORTS'					=> 'Ilmoituksia ei löytynyt',	
	'NO_REPORT_SELECTED'			=> 'Valitse ainakin yksi ilmoitus suorittaaksesi tämän toiminnon',
	'NO_TOPIC_ICON'					=> 'Ei',
	'NO_TOPIC_SELECTED'				=> 'Valitse ainakin yksi viestiketju suorittaaksesi toiminnon',
	'NO_TOPICS_QUEUE'				=> 'Ei viestiketjuja odottamassa hyväksyntää',

	'ONLY_TOPIC'			=> 'Vain viestiketjussa "%s"',
	'OTHER_USERS'			=> 'Muut käyttäjät, jotka kirjoittavat tästä IP-osoitteesta',
	'PM_REPORT_CLOSED_SUCCESS'	=> 'Valitsemasi YV-ilmoitus on suljettu.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Valitsemasti YV-ilmoitus on poistettu.',
	'PM_REPORTED_SUCCESS'		=> 'Yksityisviestin ilmoitus onnistui.',
	'PM_REPORT_TOTAL'			=> '<strong>1</strong> YV-ilmoitus käsiteltävänä.',
	'PM_REPORTS_TOTAL'			=> 'Yhteensä <strong>%d</strong> YV-ilmoitusta käsilteltävänä.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Ei ilmoitettuja yksityisviestejä.',
	'PM_REPORT_DETAILS'			=> 'Yksityisviesti ilmoituksen tiedot',

	'POSTER'					=> 'Kirjoittaja',
	'POSTS_APPROVED_SUCCESS'	=> 'Valitut viestit on hyväksytty',
	'POSTS_DELETED_SUCCESS'		=> 'Valitut viestit on poistettu tietokannasta',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Valitut viestit on hylätty',
	'POSTS_LOCKED_SUCCESS'		=> 'Valitut viestit on lukittu',
	'POSTS_MERGED_SUCCESS'		=> 'Valitut viestit on yhdistetty',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Valitut viestit on avattu',
	'POSTS_PER_PAGE'			=> 'Viestiä per sivu',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(aseta 0 nähdäksesi kaikki viestit)',
	'POST_APPROVED_SUCCESS'		=> 'Valitut viestit on hyväksytty',
	'POST_DELETED_SUCCESS'		=> 'Valitut viestit on poistettu tietokannasta',
	'POST_DISAPPROVED_SUCCESS'	=> 'Valitut viestit on poistettu',
	'POST_LOCKED_SUCCESS'		=> 'Viesti lukittu',
	'POST_NOT_EXIST'			=> 'Pyytämääsi viestiä ei ole olemassa',
	'POST_REPORTED_SUCCESS'		=> 'Tämän viestin ilmoittaminen onnistui',
	'POST_UNLOCKED_SUCCESS'		=> 'Viesti avattu',

	'READ_USERNOTES'			=> 'Käyttäjän muistiinpanot',
	'READ_WARNINGS'				=> 'Käyttäjän varoitukset',
	'REPORTER'					=> 'Ilmoittaja',
	'REPORTED'					=> 'Ilmoita',
	'REPORTED_BY'				=> 'Ilmoittanut',
	'REPORTED_ON_DATE'			=> 'Päivämäärä',
	'REPORTS_CLOSED_SUCCESS'	=> 'Valitut ilmoitukset on suljettu.',
	'REPORTS_DELETED_SUCCESS'	=> 'Valitut ilmoitukset on poistettu.',
	'REPORTS_TOTAL'				=> 'Yhteensä <strong>%d</strong> ilmoitusta tarkistettavana',
	'REPORTS_ZERO_TOTAL'		=> 'Ei ilmoituksia tarkistettavana',
	'REPORT_CLOSED'				=> 'Tämä ilmoitus on suljettu aiemmin.',
	'REPORT_CLOSED_SUCCESS'		=> 'Valittu ilmoitus on suljettu.',
	'REPORT_DELETED_SUCCESS'	=> 'Valittu ilmoitus on poistettu.',
	'REPORT_DETAILS'			=> 'Ilmoituksen yksityiskohdat',
	'REPORT_MESSAGE'			=> 'Ilmoita tämä viesti',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Tällä lomakkeella voit ilmoittaa valitsemasi yksityisviestin. Ilmoittamista tulisi käyttää vain, jos keskustelufoorumin sääntöjä on rikottu. <strong>Yksityisviestin ilmoittaminen paljastaa viestin siällön valvojille.</strong>',
	'REPORT_NOTIFY'				=> 'Lähetä ilmoitus',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Kertoo, koska ilmoitus on käsitelty',
	'REPORT_POST_EXPLAIN'		=> 'Tällä lomakkeella voit lähettää ilmoituksen asiattomasta viestistä sivuston ylläpitäjille ja valvojille. Viesti tulee ilmoittaa vain, jos se rikkoo keskustelualueen sääntöjä.',
	'REPORT_REASON'				=> 'Ilmoituksen syy',
	'REPORT_TIME'				=> 'Ilmoituksen aika',
	'REPORT_TOTAL'				=> '<strong>1</strong> ilmoitus odottamassa toimenpiteitä',
	'RESYNC'					=> 'Synkronoi',
	'RETURN_MESSAGE'			=> '%sPalaa viesteihin%s',
	'RETURN_NEW_FORUM'			=> '%sSiirry uudelle alueelle%s',
	'RETURN_NEW_TOPIC'			=> '%sSiirry uuteen viestiketjuun%s',
	'RETURN_PM'					=> '%spalaa yksityisviestiin%s',
	'RETURN_POST'				=> '%sPalaa viesteihin%s',
	'RETURN_QUEUE'				=> '%sPalaa jonoon%s',
	'RETURN_REPORTS'			=> '%sPalaa ilmoituksiin%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sPalaa viestiketjuun%s',

	'SEARCH_POSTS_BY_USER'				=> 'Etsi tietyn käyttäjän kirjoittamat viestit',
	'SELECT_ACTION'						=> 'Valitse haluamasi toimenpide',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Valitse alue, jolla haluat näyttää tämän yleistiedotteen.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Yksi tai useampi valitsemistasi viesteistä on yleistiedote. Ole hyvä ja valitse millä alueella haluat näiden näkyvän.',
	'SELECT_MERGE'						=> 'Valitse yhdistämistä varten',
	'SELECT_TOPICS_FROM'				=> 'Valitse viestiketjut alkaen',
	'SELECT_TOPIC'						=> 'Valitse viestiketju',
	'SELECT_USER'						=> 'Valitse käyttäjä',
	'SORT_ACTION'						=> 'Kirjaa toiminnot lokiin',
	'SORT_DATE'							=> 'Päivämäärä',
	'SORT_IP'							=> 'IP-osoite',
	'SORT_WARNINGS'						=> 'Varoitukset',
	'SPLIT_AFTER'						=> 'Jaa valitusta viestistä eteenpäin',
	'SPLIT_FORUM'						=> 'Kohde uudelle viestiketjulle',
	'SPLIT_POSTS'						=> 'Jaa valitut viestit',
	'SPLIT_SUBJECT'						=> 'Uuden viestiketjun osoite',
	'SPLIT_TOPIC_ALL'					=> 'Jaa valituista viesteistä',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Haluatko varmasti jakaa tämän aiheen?',
	'SPLIT_TOPIC_BEYOND'				=> 'Jaa keskusteluketju valitusta viestistä eteenpäin',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Haluatko varmasti jakaa tämä keskusteluketjun valitusta viestistä eteenpäin?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Voit jakaa valitsemasi viestiketjun, joko yksittäisinä viesteinä, tai valitusta viestistä eteenpäin',

	'THIS_POST_IP'				=> 'Tämän viestin IP-osoite',
	'TOPICS_APPROVED_SUCCESS'	=> 'Valitut viestiketjut on hyväksytty',
	'TOPICS_DELETED_SUCCESS'	=> 'Valitut viestiketjut on poistettu tietokannasta',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Valitut viestiketjut on hylätty',
	'TOPICS_FORKED_SUCCESS'		=> 'Valitut viestiketjut on kopioitu',
	'TOPICS_LOCKED_SUCCESS'		=> 'Valitut viestiketjut on lukittu',
	'TOPICS_MOVED_SUCCESS'		=> 'Valitut viestiketjut on siirretty onnistuneesti',
	'TOPICS_RESYNC_SUCCESS'		=> 'Valitut viestiketjut on synkronoitu',
	'TOPICS_TYPE_CHANGED'		=> 'Viestin tyyppi on vaihdettu.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Valitut viestiketjut on avattu',
	'TOPIC_APPROVED_SUCCESS'	=> 'Valittu viestiketju on hyväksytty',
	'TOPIC_DELETED_SUCCESS'		=> 'valittu viestiketju on poistettu tietokannasta',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Valittu viestiketju on hylätty',
	'TOPIC_FORKED_SUCCESS'		=> 'Valittu viestiketju on kopioitu',
	'TOPIC_LOCKED_SUCCESS'		=> 'valittu viestiketju on lukittu',
	'TOPIC_MOVED_SUCCESS'		=> 'valittu viestiketju on siirretty',
	'TOPIC_NOT_EXIST'			=> 'Valitsemaasi viestiketjua ei ole olemassa',
	'TOPIC_RESYNC_SUCCESS'		=> 'valittu viestiketju on synkronoitu',
	'TOPIC_SPLIT_SUCCESS'		=> 'valittu viestiketju on jaettu',
	'TOPIC_TIME'				=> 'Viestin aika',
	'TOPIC_TYPE_CHANGED'		=> 'Viestiketjun tyyppi vaihdettu.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'valittu viestiketju on avattu',
	'TOTAL_WARNINGS'			=> 'varoituksia yhteensä',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Yhteensä <strong>%d</strong> viestiä odottamassa hyväksyntää',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Ei hyväksyttäviä viestejä',
	'UNAPPROVED_POST_TOTAL'			=> '<strong>1</strong> viesti odottaa hyväksymistä',
	'UNLOCK'						=> 'Avaa',
	'UNLOCK_POST'					=> 'Avaa viesti',
	'UNLOCK_POST_EXPLAIN'			=> 'Salli muokkaus',
	'UNLOCK_POST_POST'				=> 'Avaa viesti',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Haluatko varmasti sallia viestin muokkauksen?',
	'UNLOCK_POST_POSTS'				=> 'Avaa valitut viestit',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Haluatko varmasti sallia valittujen viestien muokkauksen?',
	'UNLOCK_TOPIC'					=> 'Avaa viestiketju',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Haluatko varmasti avata tämän viestiketjun?',
	'UNLOCK_TOPICS'					=> 'Avaa valitut viestiketjut',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Haluatko varmasti avata kaikki valitut viestiketjut?',
	'USER_CANNOT_POST'				=> 'Et voi kirjoittaa tälle alueelle',
	'USER_CANNOT_REPORT'			=> 'Et voi ilmoittaa viesteistä tällä alueella',
	'USER_FEEDBACK_ADDED'			=> 'Muistiinpano on tallennettu',
	'USER_WARNING_ADDED'			=> 'Käyttäjää on varoitettu',

	'VIEW_DETAILS'			=> 'Näytä yksityiskohtaisesti',
 	'VIEW_PM'				=> 'Näytä yksityisviesti',
   'VIEW_POST'             => 'Näytä viesti',

	'WARNED_USERS'			=> 'Varoitettuja käyttäjiä',
	'WARNED_USERS_EXPLAIN'	=> 'Lista käyttäjistä, joilla on voimassa olevia varoituksia',
	'WARNING_PM_BODY'		=> 'Tämä on virallinen varoitus, jonka on antanut tämän sivuston valvoja tai ylläpitäjä.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'varoitus annettu',
	'WARNING_POST_DEFAULT'	=> 'Tämä on varoitus kirjoittamastasi viestistä: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Ei olemassa olevia varoituksia',

	'YOU_SELECTED_TOPIC'	=> 'Valitsit keskusteluketjun numero %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Roskapostia',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Muu syy'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Viesti sisältää linkin laittomasti levityksessä olevaan ohjelmistoon',
			'SPAM'		=> 'Ilmoitetun viestin ainoa tarkoitus on mainostaa nettisivua tai tuotetta',
			'OFF_TOPIC'	=> 'Viesti on harhautunut alkuperäisestä aiheesta',
			'OTHER'		=> 'Ilmoitettu viesti ei sovi edellä mainittuihin luokkiin. Anna oma selite.'
		)
	),
));

?>