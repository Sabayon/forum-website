<?php
/**
*
* mcp.php [Shqip Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-25 - www.dea-portal.com
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
	'ACTION'				=> 'Vepro',
	'ACTION_NOTE'			=> 'Vepro/Shëno',
	'ADD_FEEDBACK'			=> 'Shto opinion',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Nësë doni të shtoni një raportim në këtë vend, ndiqni mënyrën që vijon. Përdorni tekst të qartë; HTML, BBCode, etj. janë të ndaluara.',
	'ADD_WARNING'			=> 'Jep paralajmërim',
	'ADD_WARNING_EXPLAIN'	=> 'Për ti dërguar një paralajmërim këtij përdoruesi, ju lutemi plotësoni formularin që vijon. Përdorni tekst të qartë; HTML, BBCode, etj. janë të ndaluara.',
	'ALL_ENTRIES'			=> 'Të gjitha hyrjet',
	'ALL_NOTES_DELETED'		=> 'Të gjitha të dhënat e përdoruesit u fshinë me sukses.',
	'ALL_REPORTS'			=> 'Të gjithë raportimet',
	'ALREADY_REPORTED'		=> 'Ky postim, tashmë është i raportuar.',
	'ALREADY_WARNED'		=> 'Një paralajmërim tashmë është lëshuar për këtë postim.',
	'APPROVE'				=> 'Mirato',
	'APPROVE_POST'			=> 'Mirato postimin',
	'APPROVE_POST_CONFIRM'	=> 'Jeni i sigurt që doni të miratoni këtë postim?',
	'APPROVE_POSTS'			=> 'Mirato postime',
	'APPROVE_POSTS_CONFIRM'	=> 'A jeni i sigurt që doni të miratoni postimet e zgjedhura?',
	
	'CANNOT_MOVE_SAME_FORUM'=> 'Ju nuk mund të lëvizni një temë brënda të njëjtit forum.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Ju nuk mund të paralajmëroni përdorues të pa-rregjistruar.',
	'CANNOT_WARN_SELF'		=> 'Ju nuk mund të paralajmëroni veten tuaj.',
	'CAN_LEAVE_BLANK'		=> 'Kjo pjesë mund të lihet bosh.',
	'CHANGE_POSTER'			=> 'Ndrysho afishimin.',
	'CLOSE_REPORT'			=> 'Mbyll raportimin',
	'CLOSE_REPORT_CONFIRM'	=> 'Jeni i sigurtë që doni të mbyllni raportimin e zgjedhur?',
	'CLOSE_REPORTS'			=> 'Mbyll raportimet',
	'CLOSE_REPORTS_CONFIRM'	=> 'Jeni i sigurtë që doni të mbyllni raportimet e zgjedhura?',
	
	'DELETE_POSTS'				=> 'Fshi postimet',
	'DELETE_POSTS_CONFIRM'		=> 'Jeni i sigurt që doni ti fshini këto postime?',
	'DELETE_POST_CONFIRM'		=> 'Jeni i sigurt që doni të fshini këtë postim?',
	'DELETE_REPORT'				=> 'Fshi raportimin',
	'DELETE_REPORT_CONFIRM'		=> 'Jeni i sigurtë që doni të fshini raportimin e zgjedhur?',
	'DELETE_REPORTS'			=> 'Fshi raportimet',
	'DELETE_REPORTS_CONFIRM'	=> 'Jeni i sigurt që doni të fshini raportimet e zgjedhura?',
	'DELETE_SHADOW_TOPIC'		=> 'Fshi hijen e temës',
	'DELETE_TOPICS'				=> 'Fshi temat e zgjedhura',
	'DELETE_TOPICS_CONFIRM'		=> 'Jeni i sigurt që doni të fshini këto tema?',
	'DELETE_TOPIC_CONFIRM'		=> 'Jeni i sigurt që doni ta fshini këtë temë?',
	'DISAPPROVE'				=> 'Mos Aprovo',
	'DISAPPROVE_REASON'			=> 'Arsyeja për mos aprovimin',
	'DISAPPROVE_POST'			=> 'Mos Aprovo Postim',
	'DISAPPROVE_POST_CONFIRM'	=> 'Jeni i sigurt që nuk doni ta aprovoni këtë postim?',
	'DISAPPROVE_POSTS'			=> 'Postimet e pa miratuara',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Jeni i sigurt që nuk do miratoni postimet e zgjedhura?',
	'DISPLAY_LOG'				=> 'Trego hyrjet nga hera e fundit',
	'DISPLAY_OPTIONS'			=> 'Trego opsionet',
	
	'EMPTY_REPORT'					=> 'Ju duhet të jepni një përshkrim kur zgjidhni këtë arsye.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Ju lutem, vini re që një ose disa tema janë fshirë nga baza e informacionit sepse ishin bosh ose u zbrazën.',
	
	'FEEDBACK'				=> 'Reago',
	'FORK'					=> 'Kopjo',
	'FORK_TOPIC'			=> 'Kopjo temën',
	'FORK_TOPIC_CONFIRM'	=> 'Jeni i sigurtë që doni te kopjoni këtë temë?',
	'FORK_TOPICS'			=> 'Kopjo temat e zgjedhura',
	'FORK_TOPICS_CONFIRM'	=> 'Jeni i sigurtë që doni të kopjoni temat e zgjedhura?',
	'FORUM_DESC'			=> 'Përshkrim',
	'FORUM_NAME'			=> 'Emri i forumit',
	'FORUM_NOT_EXIST'		=> 'Forumi që ju zgjodhet nuk ekziston.',
	'FORUM_NOT_POSTABLE'	=> 'Në forumin që ju zgjodhet nuk mund të postohet.',
	'FORUM_STATUS'			=> 'Statusi i forumit',
	'FORUM_STYLE'			=> 'Stili i forumit',
	
	'GLOBAL_ANNOUNCEMENT'	=> 'Lajmërim global',
	
	'IP_INFO'				=> 'Informacion mbi adresen IP',
	'IPS_POSTED_FROM'		=> 'Adresa IP nga e cila ky përdorues ka postuar.',
	
	'LATEST_LOGS'				=> '5 veprimet e fundit',
	'LATEST_REPORTED'			=> '5 raportet e fundit',
	'LATEST_UNAPPROVED'			=> '5 postimet e fundit që presin miratimin',
	'LATEST_WARNING_TIME'		=> 'Paralajmërimet e lëshuara së fundmi',
	'LATEST_WARNINGS'			=> '5 paralajmërimet e fundit',
	'LEAVE_SHADOW'				=> 'Lër hijen/linkun e temës në vend',
	'LIST_REPORT'				=> '1 raportim',
	'LIST_REPORTS'				=> '%d raportime',
	'LOCK'						=> 'Mbyll',
	'LOCK_POST_POST'			=> 'Mbyll postimin',
	'LOCK_POST_POST_CONFIRM'	=> 'Jeni i sigurt që doni të parandaloni redaktimin e këtij postimi?',
	'LOCK_POST_POSTS'			=> 'Mbyll postimet e zgjedhura',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Jeni i sigurt që doni të parandaloni redaktimin e postimeve të zgjedhura?',
	'LOCK_TOPIC_CONFIRM'		=> 'Jeni i sigurt që doni të mbyllni temën e zgjedhur?',
	'LOCK_TOPICS'				=> 'Mbyll temat e zgjedhura',
	'LOCK_TOPICS_CONFIRM'		=> 'Jeni i sigurt që doni të mbyllni të gjitha temat e zgjedhura?',
	'LOGS_CURRENT_TOPIC'		=> 'Jeni duke parë historikun e:',
	'LOGIN_EXPLAIN_MCP'			=> 'Për të moderuar këtë forum ju duhet të identifikoheni.',
	'LOGVIEW_VIEWTOPIC'			=> 'Shiko temën',
	'LOGVIEW_VIEWLOGS'			=> 'Shiko historikun e temës',
	'LOGVIEW_VIEWFORUM'			=> 'Shiko forumin',
	'LOOKUP_ALL'				=> 'Kontrollo të gjitha adresat IP',
	'LOOKUP_IP'					=> 'Kontrollo adresën IP',
	
	'MARKED_NOTES_DELETED'		=> 'Të gjitha shënimet e përdoruesit të zgjedhura u fshinë me sukses.',
	
	'MCP_ADD'						=> 'Shto një paralajmërim',
	
	'MCP_BAN'					=> 'Përjashtimet',
	'MCP_BAN_EMAILS'			=> 'Përjashto e-maile',
	'MCP_BAN_IPS'				=> 'Përjashto adresa IP',
	'MCP_BAN_USERNAMES'			=> 'Përjashto pseudonime',
	
	'MCP_LOGS'						=> 'Historiku i moderatorit',
	'MCP_LOGS_FRONT'				=> 'Faqja kryesore',
	'MCP_LOGS_FORUM_VIEW'			=> 'Historiku i forumit',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Historiku i temës',
	
	'MCP_MAIN'						=> 'Paneli MOD',
	'MCP_MAIN_FORUM_VIEW'			=> 'Shiko forumin',
	'MCP_MAIN_FRONT'				=> 'Faqja kryesore',
	'MCP_MAIN_POST_DETAILS'			=> 'Detajet e postimit',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Shiko temën',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modifiko në “Lajmërim”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Jeni i sigurt që doni të ndryshoni këtë temë në “Lajmërim”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modifiko në “Lajmërime”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Jeni i sigurt që doni të ndryshoni temat e zgjedhura në “Lajmërime”?',
	'MCP_MAKE_GLOBAL'				=> 'Modifiko në “Lajmërim Global”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Jeni i sigurt që doni të ndryshoni këtë temë në “Lajmërim Global”?',
	'MCP_MAKE_GLOBALS'				=> 'Modifiko në “Lajmërime Globale”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Jeni i sigurt që doni të ndryshoni temat e zgjedhura në “Lajmërime Globale”?',
	'MCP_MAKE_STICKY'				=> 'Modifiko në “Kryetemë”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Jeni i sigurt që doni të ndryshoni këtë temë në “Kryetemë”?',
	'MCP_MAKE_STICKIES'				=> 'Modifiko në “Kryetema”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Jeni i sigurt që doni të ndryshoni temat e zgjedhura në “Kryetema”?',
	'MCP_MAKE_NORMAL'				=> 'Modifiko në “Temë Standarte”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Jeni i sigurt që doni të ndryshoni këtë temë në “Temë Standarte”?',
	'MCP_MAKE_NORMALS'				=> 'Modifiko në “Tema Standarte”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Jeni i sigurt që doni të ndryshoni temat e zgjedhura në “Tema Standarte”?',
	
	'MCP_NOTES'						=> 'Shënimet e përdoruesit',
	'MCP_NOTES_FRONT'				=> 'Faqja kryesore',
	'MCP_NOTES_USER'				=> 'Detajet e përdoruesit',
	
	'MCP_POST_REPORTS'				=> 'Raportet e shpallura per këtë postim',
	
	'MCP_REPORTS'					=> 'Postime të raportuara',
	'MCP_REPORT_DETAILS'			=> 'Detajet e raporteve',
	'MCP_REPORTS_CLOSED'			=> 'Raporte të mbyllura',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Kjo është një listë e të gjithë raportimeve rreth postimeve që jane zgjidhur së fundmi.',
	'MCP_REPORTS_OPEN'				=> 'Hap raportimet',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Kjo është një listë e të gjithë postimeve te raportuara që duhet të trajtohen.',
	
	'MCP_QUEUE'								=> 'Radha e moderimit',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Mirato detajet',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Postime që presin miratim',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Kjo është një listë e të gjithë postimeve që presin miratim para se të jenë të shikueshme nga përdoruesit.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Tema që presin miratim',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Kjo është nje listë e të gjithë temave që presin miratim para se të jenë të shikueshme nga përdoruesit.',
	
	'MCP_VIEW_USER'			=> 'Shiko paralajmërimet për nje përdorues në vecanti',
	
	'MCP_WARN'				=> 'Paralajmërime',
	'MCP_WARN_FRONT'		=> 'Faqja kryesore',
	'MCP_WARN_LIST'			=> 'Trego paralajmërimet',
	'MCP_WARN_POST'			=> 'Paralajmërim për një postim në veçanti',
	'MCP_WARN_USER'			=> 'Paralajmëro një përdorues',
	
	'MERGE_POSTS'			=> 'Bashko postimet',
	'MERGE_POSTS_CONFIRM'	=> 'Jeni i sigurt që doni te bashkoni postimet e zgjedhura?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Duke përdorur formën që vijon ju mund të bashkoni postimet në një temë tjetër. Këto postime nuk do të riorganizohen dhe do të shfaqen sikur përdoruesi i ka postuar ato në nje temë të re.<br />Ju lutem saktësoni ID e temës përcaktuese, ose klikoni "Zgjidh temën" për të kërkuar për një të tillë.',
	'MERGE_TOPIC_ID'		=> 'Numri identifikues i temës përcaktuese',
	'MERGE_TOPICS'			=> 'Bashko temat',
	'MERGE_TOPICS_CONFIRM'	=> 'Jeni i sigurt që doni të bashkoni temat e zgjedhura?',
	'MODERATE_FORUM'		=> 'Modero forumin',
	'MODERATE_TOPIC'		=> 'Modero temën',
	'MODERATE_POST'			=> 'Modero postimin',
	'MOD_OPTIONS'			=> 'Opsionet e moderatorit',
	'MORE_INFO'				=> 'Informacion i mëtejshëm',
	'MOST_WARNINGS'			=> 'Përdoruesit me më shumë paralajmërime',
	'MOVE_TOPIC_CONFIRM'	=> 'Jeni i sigurt që doni të zhvendosni këtë temë në një forum të forum i ri?',
	'MOVE_TOPICS'			=> 'Zhvendos temat e zgjedhura',
	'MOVE_TOPICS_CONFIRM'	=> 'Jeni i sigurt që doni të zhvendosni temat e zgjedhura në një forum të ri?',
	
	'NOTIFY_POSTER_APPROVAL'		=> 'Doni të njoftoni përdoruesin për aprovimin?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Doni të njoftoni përdoruesin për mosaprovimin?',
	'NOTIFY_USER_WARN'				=> 'Doni të njoftoni përdoruesin për paralajmërimin?',
	'NOT_MODERATOR'					=> 'Ju nuk jeni moderator në këtë forum.',
	'NO_DESTINATION_FORUM'			=> 'Ju lutem zgjidhni një forum si destinacion.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Nuk ka forume destinacion të mundshme.',
	'NO_ENTRIES'					=> 'Nuk ka hyrje për këtë periudhë.',
	'NO_FEEDBACK'					=> 'Asnjë reagim nuk ekziston nga ky përdorues.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Duhet të selektoni një temë përcaktuese për të bashkuar postimet.',
	'NO_MATCHES_FOUND'				=> 'Nuk u gjet asnjë bashkërendim.',
	'NO_POST'						=> 'Ju duhet të zgjidhni një postim për të paralajmëruar përdoruesin rreth atij postimi.',
	'NO_POST_REPORT'				=> 'Ky postim nuk u raportua.',
	'NO_POST_SELECTED'				=> 'Ju duhet të zgjidhni të paktën një postim për të bërë këtë veprim.',
	'NO_REASON_DISAPPROVAL'			=> 'Ju lutem jepni arsyen e duhur për mosmiratimin.',
	'NO_REPORT'						=> 'Asnjë raport i gjetur.',
	'NO_REPORTS'					=> 'Asnjë raportim i gjetur.',
	'NO_REPORT_SELECTED'			=> 'Ju duhet te selektoni te paktën një raportim për të kryer këtë veprim.',
	'NO_TOPIC_ICON'					=> 'Asnjë',
	'NO_TOPIC_SELECTED'				=> 'Ju duhet të zgjidhni të paktën një temë për të kryer këtë veprim.',
	'NO_TOPICS_QUEUE'				=> 'Nuk ka asnjë temë duke pritur për miratim.',
	
	'ONLY_TOPIC'			=> 'Vetëm tema “%s”',
	'OTHER_USERS'			=> 'Të tjerë përdorues që postojnë nga kjo IP.',
	
	'POSTER'					=> 'Postues',
	'POSTS_APPROVED_SUCCESS'	=> 'Postimet e zgjedhura u miratuan.',
	'POSTS_DELETED_SUCCESS'		=> 'Postimet e zgjedhura u fshinë me sukses nga baza e informacionit.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Postimet e zgjedhura nuk u miratuan.',
	'POSTS_LOCKED_SUCCESS'		=> 'Postimet e selektuara u mbyllën me sukses.',
	'POSTS_MERGED_SUCCESS'		=> 'Postimet e selektuara u bashkuan.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Postimet e selektuara u hapën me sukses.',
	'POSTS_PER_PAGE'			=> 'Postime për faqe.',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Shëno 0 për të parë të gjithë postimet.)',
	'POST_APPROVED_SUCCESS'		=> 'Postimi i zgjedhur u miratua.',
	'POST_DELETED_SUCCESS'		=> 'Postimi i zgjedhur u fshi me sukses nga baza e informacionit.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Postimi i zgjedhur nuk u miratua.',
	'POST_LOCKED_SUCCESS'		=> 'Postimi u mbyll me sukses.',
	'POST_NOT_EXIST'			=> 'Postimi që kërkuat nuk ekziston.',
	'POST_REPORTED_SUCCESS'		=> 'Ky postim u raportua me sukses.',
	'POST_UNLOCKED_SUCCESS'		=> 'Postimi u hap me sukses.',
	
	'READ_USERNOTES'			=> 'Shënimet e përdoruesit',
	'READ_WARNINGS'				=> 'Paralajmërimet e përdoruesit.',
	'REPORTER'					=> 'Raportuesi',
	'REPORTED'					=> 'Raportuar',
	'REPORTED_BY'				=> 'Raportuar nga',
	'REPORTED_ON_DATE'			=> 'më',
	'REPORTS_CLOSED_SUCCESS'	=> 'Raportimet e zgjedhura u mbyllën me sukses.',
	'REPORTS_DELETED_SUCCESS'	=> 'Raportimet e zgjedhura u fshinë me sukses.',
	'REPORTS_TOTAL'				=> 'Në total janë <strong>%d</strong> raportime për tu shqyrtuar.',
	'REPORTS_ZERO_TOTAL'		=> 'Nuk ka raportime për të shqyrtuar.',
	'REPORT_CLOSED'				=> 'Ky raport është mbyllur tashmë.',
	'REPORT_CLOSED_SUCCESS'		=> 'Raporti i zgjedhur u mbyll me sukses.',
	'REPORT_DELETED_SUCCESS'	=> 'Raporti i zgjedhur u fshi me sukses.',
	'REPORT_DETAILS'			=> 'Detajet e raportit',
	'REPORT_MESSAGE'			=> 'Raporto këtë mesazh',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Përdor këtë formë për të raportuar mesazhin e zgjedhur. Raporti zakonisht mund të përdoret vetëm nëse mesazhi thyen rregullat e forumit.',
	'REPORT_NOTIFY'				=> 'Më njofto',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Ju informon kur raportimi juaj merret parasysh.',
	'REPORT_POST_EXPLAIN'		=> 'Përdor këtë formë për të raportuar postimin e zgjedhur tek moderatorët e forumit dhe bordi i administratorëve. Raporti mund të përdoret vetëm nëse postimi thyen rregullat e forumit.',
	'REPORT_REASON'				=> 'Arsyeja e raportit',
	'REPORT_TIME'				=> 'Koha e kryerjes së raportit',
	'REPORT_TOTAL'				=> 'Në total është <strong>1</strong> raportim për t\'u shqyrtuar.',
	'RESYNC'					=> 'Sinkronizim',
	'RETURN_MESSAGE'			=> '%sKthehu tek mesazhi%s',
	'RETURN_NEW_FORUM'			=> '%sShko tek forumi i ri%s',
	'RETURN_NEW_TOPIC'			=> '%sShko tek tema e re%s',
	'RETURN_POST'				=> '%sKthehu tek postimi%s',
	'RETURN_QUEUE'				=> '%sKthehu ne rradhë %s',
	'RETURN_REPORTS'			=> '%sKthehu tek raportimet%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sKthehu tek tema%s',
	
	'SEARCH_POSTS_BY_USER'				=> 'Kërko postimet sipas',
	'SELECT_ACTION'						=> 'Zgjidh veprimin e dëshiruar',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Ju lutem zgjidhni forumin ku doni te shfaqet ky lajmërim global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Një ose më shumë tema te zgjedhura janë lajmërime globale. Ju lutem zgjidhni forumin ku do të shfaqet. ',
	'SELECT_MERGE'						=> 'Zgjidh për të bashkuar',
	'SELECT_TOPICS_FROM'				=> 'Zgjidh temat nga',
	'SELECT_TOPIC'						=> 'Zgjidh temën',
	'SELECT_USER'						=> 'Zgjidh përdorues',
	'SORT_ACTION'						=> 'Historiku i veprimeve',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Adresa IP',
	'SORT_WARNINGS'						=> 'Paralajmërime',
	'SPLIT_AFTER'						=> 'Shkëput nga postimi i zgjedhur',
	'SPLIT_FORUM'						=> 'Forum për temë të re',
	'SPLIT_POSTS'						=> 'Shkëput postimet e zgjedhura',
	'SPLIT_SUBJECT'						=> 'Titulli i një teme të re',
	'SPLIT_TOPIC_ALL'					=> 'Shkëput temën nga postimet e zgjedhura',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Jeni i sigurt që doni të ndani këtë temë?',
	'SPLIT_TOPIC_BEYOND'				=> 'Shkëput temën që nga postimi i zgjedhur',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Jeni i sigurt që doni të ndani këtë temë që nga postimi i zgjedhur?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Duke përdorur këtë mënyrë ju mund të ndani nje temë në dy, si duke zgjedhur postimet individualisht ashtu dhe duke ndarë nga një postim i zgjedhur.',
	
	'THIS_POST_IP'				=> 'IP për këtë postim',
	'TOPICS_APPROVED_SUCCESS'	=> 'Temat e zgjedhura u miratuan.',
	'TOPICS_DELETED_SUCCESS'	=> 'Temat e zgjedhura u fshinë me sukses nga baza e informacionit.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Temat e zgjedhura nuk u miratuan.',
	'TOPICS_FORKED_SUCCESS'		=> 'Temat e zgjedhura u kopjuan me sukses.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Temat e zgjedhura u mbyllën.',
	'TOPICS_MOVED_SUCCESS'		=> 'Temat e zgjedhura u lëvizën me sukses.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Temat e selektuara u sinkronizuan.',
	'TOPICS_TYPE_CHANGED'		=> 'Lloji i temës u ndryshua me sukses.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Temat e zgjedhura u zhbllokuan.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Tema e zgjedhur u miratua.',
	'TOPIC_DELETED_SUCCESS'		=> 'Tema e zgjedhur u fshi me sukses nga baza e informacionit.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Tema e zgjedhur nuk u miratua.',
	'TOPIC_FORKED_SUCCESS'		=> 'Tema e zgjedhur u kopjua me sukses.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Tema e zgjedhur u mbyll.',
	'TOPIC_MOVED_SUCCESS'		=> 'Tema e zgjedhur u lëviz me sukses.',
	'TOPIC_NOT_EXIST'			=> 'Tema që ju zgjodhët nuk ekziston.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Tema e zgjedhur u risinkronizua.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Tema e zgjedhur u nda me sukses.',
	'TOPIC_TIME'				=> 'Koha e Temës',
	'TOPIC_TYPE_CHANGED'		=> 'Lloji i temës u ndërrua me sukses.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Tema e zgjedhur u zhbllokua.',
	'TOTAL_WARNINGS'			=> 'Paralajmërime në total',
	
	'UNAPPROVED_POSTS_TOTAL'		=> 'Në total janë <strong>%d</strong> postime që presin aprovim.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nuk ka postime që presin aprovim.',
	'UNAPPROVED_POST_TOTAL'			=> 'Në total është <strong>1</strong> postim që pret aprovim.',
	'UNLOCK'						=> 'Zhblloko',
	'UNLOCK_POST'					=> 'Zhblloko postimin',
	'UNLOCK_POST_EXPLAIN'			=> 'Lejo modifikimin',
	'UNLOCK_POST_POST'				=> 'Zhblloko postimin',
	'UNLOCK_POST_POST_CONFIRM'		=> 'A jeni i sigurt që doni të lejoni modifikimin e postimeve?',
	'UNLOCK_POST_POSTS'				=> 'Zhblloko postimet e zgjedhura',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'A jeni i sigurt që doni të lejoni modifikimin e postimeve të zgjedhura?',
	'UNLOCK_TOPIC'					=> 'Zhblloko temën',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Jeni i sigurt që doni të zhbllokoni këtë temë?',
	'UNLOCK_TOPICS'					=> 'Zhblloko temat e zgjedhura',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Jeni i sigurt që doni të zhbllokoni të gjitha temat e zgjedhura?',
	'USER_CANNOT_POST'				=> 'Ju nuk mund të postoni në këtë forum.',
	'USER_CANNOT_REPORT'			=> 'Ju nuk mund të raportoni postimet në këtë forum.',
	'USER_FEEDBACK_ADDED'			=> 'Opinioni mbi përdoruesin u shtua me sukses.',
	'USER_WARNING_ADDED'			=> 'Përdoruesi u paralajmërua me sukses',
	
	'VIEW_DETAILS'			=> 'Shiko detajet',
	'VIEW_POST'				=> 'Shiko postimin',
	
	'WARNED_USERS'			=> 'Përdoruesit e paralajmëruar',
	'WARNED_USERS_EXPLAIN'	=> 'Kjo është një listë me paralajmërime të pa skaduara të përdoruesve që i kane marrë.',
	'WARNING_PM_BODY'		=> 'Në vazhdim është një paralajmërim që ju ka ardhur juve nga një administrator ose moderator i këtij siti.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Keni marrë një paralajmërim nga bordi',
	'WARNING_POST_DEFAULT'	=> 'Ky është një paralajmërim lidhur me postimet e mëposhtme që janë bërë nga ju: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Nuk ekzistojnë paralajmërime',
	
	'YOU_SELECTED_TOPIC'	=> 'Ju zgjodhët temën numër %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Jashtë teme',
			'OTHER'		=> 'Tjetër',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Postimi përmban link për programe të jasht-ligjshme ose pirate.',
			'SPAM'		=> 'Postimi i raportuar ka qëllimin e vetëm që të reklamojë për një faqe ose një produkt tjetër.',
			'OFF_TOPIC'	=> 'Postimi i raportuar është jashtë teme. ',
			'OTHER'		=> 'Postimi i raportuar nuk përshtatet në ndonjë kategori tjetër. Ju letemi të përdorni fushat për informacion të mëtejshëm.',
		)
	),
));

?>