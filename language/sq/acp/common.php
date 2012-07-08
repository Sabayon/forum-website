<?php
/**
*
* acp_common.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-07 - www.dea-portal.com
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administratorët',
	'ACP_ADMIN_LOGS'			=> 'Log i Admin',
	'ACP_ADMIN_ROLES'			=> 'Rolet e Admin',
	'ACP_ATTACHMENTS'			=> 'Shtojcat',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Opsionet e shtojcave',
	'ACP_AUTH_SETTINGS'			=> 'Autentikimi',
	'ACP_AUTOMATION'			=> 'Automatizim',
	'ACP_AVATAR_SETTINGS'		=> 'Opsionet e avatarëve',
	
	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Përjashtimet',
	'ACP_BAN_EMAILS'			=> 'Përjashto e-maile',
	'ACP_BAN_IPS'				=> 'Përjashto IP',
	'ACP_BAN_USERNAMES'			=> 'Përjashto pseudonime',
	'ACP_BBCODES'				=> 'BBCode-t',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurimi i bordit',
	'ACP_BOARD_FEATURES'		=> 'Funsionet e bordit',
	'ACP_BOARD_MANAGEMENT'		=> 'Menaxhimi i bordit',
	'ACP_BOARD_SETTINGS'		=> 'Opsionet e bordit',
	'ACP_BOTS'					=> 'Spiders/Motorrët e kërkimit',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',
	
	'ACP_CAT_DATABASE'			=> 'Baza e Informacionit',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Forumet',
	'ACP_CAT_GENERAL'			=> 'Gjeneral',
	'ACP_CAT_MAINTENANCE'		=> 'Mirëmbajtja',
	'ACP_CAT_PERMISSIONS'		=> 'Të drejtat',
	'ACP_CAT_POSTING'			=> 'Postimi',
	'ACP_CAT_STYLES'			=> 'Stilet',
	'ACP_CAT_SYSTEM'			=> 'Sistemi',
	'ACP_CAT_USERGROUP'			=> 'Përdoruesit dhe grupet',
	'ACP_CAT_USERS'				=> 'Përdoruesit',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikimi i klientëve',
	'ACP_COOKIE_SETTINGS'		=> 'Opsionet e "Cookie"',
	'ACP_CRITICAL_LOGS'			=> 'Log i gabimeve',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Fushat e profileve të personalizuara',
	
	'ACP_DATABASE'				=> 'Menaxhimi i bazës së informacionit',
	'ACP_DISALLOW'				=> 'Blloko',
	'ACP_DISALLOW_USERNAMES'	=> 'Blloko pseudonime',
	
	'ACP_EMAIL_SETTINGS'		=> 'Opsionet e e-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Menaxhimi i grupeve të prapashtesave',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Të drejtat bazë të forumit',
	'ACP_FORUM_LOGS'				=> 'Log të forumit',
	'ACP_FORUM_MANAGEMENT'			=> 'Menaxhimi i forumit',
	'ACP_FORUM_MODERATORS'			=> 'Moderatorët e forumit',
	'ACP_FORUM_PERMISSIONS'			=> 'Të drejtat e forumit',
	'ACP_FORUM_ROLES'				=> 'Rolet e forumit',
	
	'ACP_GENERAL_CONFIGURATION'		=> 'Konfigurimi gjeneral',
	'ACP_GENERAL_TASKS'				=> 'Funksionet gjenerale',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderatorët global',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Të drejtat globale',
	'ACP_GROUPS'					=> 'Grupet',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Të drejtat e forumit për grupet',
	'ACP_GROUPS_MANAGE'				=> 'Menaxho grupet',
	'ACP_GROUPS_MANAGEMENT'			=> 'Menaxhimi i grupeve',
	'ACP_GROUPS_PERMISSIONS'		=> 'Të drejtat e grupeve',
	
	'ACP_ICONS'					=> 'Ikonat e temave',
	'ACP_ICONS_SMILIES'			=> 'Ikonat/buzëqeshjet e temave',
	'ACP_IMAGESETS'				=> 'Setet e imazheve',
	'ACP_INACTIVE_USERS'		=> 'Përdoruesit jo-aktiv',
	'ACP_INDEX'					=> 'Indeksi i ACP',
	
	'ACP_JABBER_SETTINGS'		=> 'Opsionet Jabber',
	
	'ACP_LANGUAGE'				=> 'Menaxhimi i gjuhës',
	'ACP_LANGUAGE_PACKS'		=> 'Paketat gjuhësore',
	'ACP_LOAD_SETTINGS'			=> 'Kariko opsione',
	'ACP_LOGGING'				=> 'Log ACP',
	
	'ACP_MAIN'					=> 'Indeksi i ACP',
	'ACP_MANAGE_EXTENSIONS'		=> 'Menaxho prapashtesat',
	'ACP_MANAGE_FORUMS'			=> 'Menaxho forumet',
	'ACP_MANAGE_RANKS'			=> 'Menaxho rangjet',
	'ACP_MANAGE_REASONS'		=> 'Menaxho arsyet raportim/bllokim',
	'ACP_MANAGE_USERS'			=> 'Menaxho përdoruesit',
	'ACP_MASS_EMAIL'			=> 'E-mail masiv',
	'ACP_MESSAGES'				=> 'Mesazhet',
	'ACP_MESSAGE_SETTINGS'		=> 'Opsionet e mesazheve private',
	'ACP_MODULE_MANAGEMENT'		=> 'Menaxhimi i moduleve',
	'ACP_MOD_LOGS'				=> 'Log i moderatorit',
	'ACP_MOD_ROLES'				=> 'Rolet e moderatorit',
	
	'ACP_NO_ITEMS'				=> 'Asnjë figurë e caktuar akoma.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Shtojcat jetime',
	
	'ACP_PERMISSIONS'			=> 'Të drejtat',
	'ACP_PERMISSION_MASKS'		=> 'Të drejta të dhëna',
	'ACP_PERMISSION_ROLES'		=> 'Rolet e të drejtave',
	'ACP_PERMISSION_TRACE'		=> 'Gjurmët e të drejtave',
	'ACP_PHP_INFO'				=> 'Informacioni i PHP',
	'ACP_POST_SETTINGS'			=> 'Opsionet e postimit',
	'ACP_PRUNE_FORUMS'			=> 'Fshi forume',
	'ACP_PRUNE_USERS'			=> 'Fshi përdorues',
	'ACP_PRUNING'				=> 'Fshirja',
	
	'ACP_QUICK_ACCESS'			=> 'Akses i shpejtë',
	
	'ACP_RANKS'					=> 'Rangjet',
	'ACP_REASONS'				=> 'Arsyet raportim/bllokim',
	'ACP_REGISTER_SETTINGS'		=> 'Opsionet e regjistrimit të përdoruesve',
	
	'ACP_RESTORE'				=> 'Restaurimi',
	
	'ACP_SEARCH'				=> 'Konfigurimi i kërkimit',
	'ACP_SEARCH_INDEX'			=> 'Indeksi i kërkimit',
	'ACP_SEARCH_SETTINGS'		=> 'Opsionet e kërkimit',
	
	'ACP_SECURITY_SETTINGS'		=> 'Opsionet e sigurisë',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurimi i serverit',
	'ACP_SERVER_SETTINGS'		=> 'Opsionet e serverit',
	'ACP_SIGNATURE_SETTINGS'	=> 'Opsionet e firmave',
	'ACP_SMILIES'				=> 'Buzëqeshjet',
	'ACP_STYLE_COMPONENTS'		=> 'Përberësit e stileve',
	'ACP_STYLE_MANAGEMENT'		=> 'Menaxhimi i stileve',
	'ACP_STYLES'				=> 'Stilet',
	
	'ACP_TEMPLATES'				=> 'Maskat',
	'ACP_THEMES'				=> 'Themet',
	
	'ACP_UPDATE'					=> 'Azhornimi',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Të drejtat e përdoruesve për forumet',
	'ACP_USERS_LOGS'				=> 'Log i përdoruesve',
	'ACP_USERS_PERMISSIONS'			=> 'Të drejtat e përdoruesve',
	'ACP_USER_ATTACH'				=> 'Shtojcat',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Grupet',
	'ACP_USER_MANAGEMENT'			=> 'Menaxhimi i përdoruesit',
	'ACP_USER_OVERVIEW'				=> 'Shikim paraprak',
	'ACP_USER_PERM'					=> 'Të drejtat',
	'ACP_USER_PREFS'				=> 'Preferencat',
	'ACP_USER_PROFILE'				=> 'Profili',
	'ACP_USER_RANK'					=> 'Rangu',
	'ACP_USER_ROLES'				=> 'Rolet e përdoruesit',
	'ACP_USER_SECURITY'				=> 'Siguria e përdoruesit',
	'ACP_USER_SIG'					=> 'Firma',
	
	'ACP_VC_SETTINGS'					=> 'Opsionet e konfirmimit vizual',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Shikim paraprak i imazhit CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Kërko për azhornime',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Shiko të drejtat administrative',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Shiko të drejtat e moderimit të forumeve',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Shiko të drejtat bazë të forumeve',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Shiko të drejtat e moderimit global',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Shiko të drejtat bazë të përdoruesve',
	
	'ACP_WORDS'					=> 'Çensurimi i fjalëve',
	
	'ACTION'				=> 'Veprim',
	'ACTIONS'				=> 'Veprime',
	'ACTIVATE'				=> 'Aktivizo',
	'ADD'					=> 'Shto',
	'ADMIN'					=> 'Administrimi',
	'ADMIN_INDEX'			=> 'Indeksi i Admin',
	'ADMIN_PANEL'			=> 'Paneli i Administratorit',
	
	'ADM_LOGOUT'			=> 'ACP&nbsp;Dalja',
	'ADM_LOGGED_OUT'		=> 'U ç\'identifikuat me sukses nga Paneli i Administratorit',
	
	'BACK'					=> 'Prapa',
	
	'COLOUR_SWATCH'			=> 'Kampionet e ngjyrave "Web-safe"',
	'CONFIG_UPDATED'		=> 'Konfigurimi u azhornua me sukses.',
	
	'DEACTIVATE'				=> 'Ç\'aktivizo',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Direktoria e shkruar “%s” nuk ekziston.',
	'DIRECTORY_NOT_DIR'			=> 'Direktoria e shkruar “%s” nuk është direktori.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Direktoria e shkruar “%s” nuk është e shkruajtshme.',
	'DISABLE'					=> 'Ç\'aktivizo',
	'DOWNLOAD'					=> 'Shkarko',
	'DOWNLOAD_AS'				=> 'Shkarko si',
	'DOWNLOAD_STORE'			=> 'Shkarko ose ruaj skedarin',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Ju mund të shkarkoni skedarin menjëherë ose t\'a ruani atë në dosjen tuaj <samp>store/</samp>.',
	
	'EDIT'					=> 'Modifiko',
	'ENABLE'				=> 'Aktivizo',
	'EXPORT_DOWNLOAD'		=> 'Shkarko',
	'EXPORT_STORE'			=> 'Ruaj',
	
	'GENERAL_OPTIONS'		=> 'Opsionet gjenerale',
	'GENERAL_SETTINGS'		=> 'Opsionet gjenerale',
	'GLOBAL_MASK'			=> 'Të drejtat globale të dhëna',
	
	'INSTALL'				=> 'Instalo',
	'IP'					=> 'IP e përoruesit',
	'IP_HOSTNAME'			=> 'Adresat IP ose emrat e hosteve',
	
	'LOGGED_IN_AS'			=> 'Ju jeni identifikuar si:',
	'LOGIN_ADMIN'			=> 'Për të administruar bordin, ju duhet të jeni një përdorues i identifikuar.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Për të administruar bordin ju duhet të ri-identifikoheni.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Ju u identifikuat me sukses dhe tani do të ridrejtoheni në Panelin e Administratorit.',
	'LOOK_UP_FORUM'			=> 'Zgjidh një forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Ju mund të zgjidhni më shumë se një forum.',
	
	'MANAGE'				=> 'Menaxho',
	'MENU_TOGGLE'			=> 'Fshih ose trego menunë ansore',
	'MOVE_DOWN'				=> 'Lëviz poshtë',
	'MOVE_UP'				=> 'Lëviz lart',
	
	'NOTIFY'				=> 'Njoftim',
	'NO_ADMIN'				=> 'Ju nuk jeni i autorizuar të administroni bordin.',
	'NO_EMAILS_DEFINED'		=> 'Nuk u gjet asnjë adresë e vlefshme e-mail.',
	'NO_PASSWORD_SUPPLIED'	=> 'Ju duhet të shkruani fjalekalimin tuaj për të patur akses në Panelin e Administratorit.',
	
	'OFF'					=> 'Off',
	'ON'					=> 'On',
	
	'PARSE_BBCODE'						=> 'Shfaq BBCode',
	'PARSE_SMILIES'						=> 'Shfaq smilies',
	'PARSE_URLS'						=> 'Shfaq links',
	'PERMISSIONS_TRANSFERRED'			=> 'Të drejtat u transferuan',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Momentalisht ju keni të drejtat e %1$s. Ju mund të shfletoni bordin me të drejtat e këtij përdoruesi, por nuk mund të keni akses në panelin e administratorit meqënëse të drejtat e administratorit nuk u transferuan. Ju mund <a href="%2$s"><strong>të ktheni të drejtat tuaja</strong></a> në çdo moment.',
	'PIXEL'								=> 'px',
	'PROCEED_TO_ACP'					=> '%sVazhdo në Panelin e Administratorit%s',
	
	'REMIND'							=> 'Rikujto',
	'RESYNC'							=> 'Risinkronizo',
	'RETURN_TO'							=> 'Kthehu tek…',
	
	'SELECT_ANONYMOUS'		=> 'Zgjidh përdorues të panjohur',
	'SELECT_OPTION'			=> 'Zgjidh opsion',
	
	'SETTING_TOO_LOW'		=> 'Vlera e vendosur për opsionin “%1$s” është shumë e ulet. Vlera minimale e lejuar është %2$d.',
	'SETTING_TOO_BIG'		=> 'Vlera e vendosur për opsionin “%1$s” është shumë e madhe. Vlera maksimale e lejuar është %2$d.',
	'SETTING_TOO_LONG'		=> 'Vlera e vendosur për opsionin “%1$s” është shumë e gjatë. Gjatesia maksimale e lejuar është %2$d.',
	'SETTING_TOO_SHORT'		=> 'Vlera e vendosur për opsionin “%1$s” nuk është e gjatë mjaftueshëm. Gjatësia minimale e lejuar është %2$d.',
	
	'UCP'					=> 'Paneli i Antarit',
	'USERNAMES_EXPLAIN'		=> 'Vendos çdo pseudonim në kryerradhë.',
	'USER_CONTROL_PANEL'	=> 'Paneli i Antarit',
	
	'WARNING'				=> 'Paralajmërim',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Kjo faqe tregon informacionin e PHP të instaluar në serverin tuaj. Përfshin detaje të moduleve të karikuara, variabla të mundshme dhe opsione të paracaktuara. Ky informacion mund të jetë i vlefshëm për të gjetur diagnozën e problemeve. Vini re që disa kompani hostimi do të kufzojnë informacionin e shfaqur këtu për arsye sigurie. Jeni të këshilluar të mos nxirrni informacion rreth kësaj faqe përveçse kur kërkohet nga <a href="http://www.phpbb.com/about/team/">antarë zyrtarë të skuadrës</a> në forumet e suportit në phpBB.',
	
	'NO_PHPINFO_AVAILABLE'	=> 'Informacioni rreth konfigurimit të PHP tuaj, nuk mund të përcaktohet. Phpinfo() është ç\'aktivizuar për arsye sigurie.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Këtu rrjeshtohen të gjithë veprimet e bëra nga administratorët e bordit. Ju mund t\'i radhisni sipas pseudonimit, datës, IP ose veprimit. Nëse keni të drejtat e duhura ju mund edhe të fshini veprimet individuale ose të gjithë informacionin.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Këtu rrjeshtohen veprimet e kryera nga vetë bordi. Ky log ju jep informacion që mund t\'a përdorni për të zgjidhur probleme specifike, për shëmbull mos dorëzimi i e-mail. Ju mund t\'i radhisni sipas pseudonimit, datës, IP ose veprimit. Nëse keni të drejtat e duhura ju mund edhe të fshini veprimet individuale ose të gjithë informacionin.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Këtu rrjeshtohen veprimet e kryera në forume, tema dhe postime, gjithashtu veprimet e ndërmarra nga moderatorët për përdoruesit, duke përfshirë përjashtimet. Ju mund t\'i radhisni sipas pseudonimit, datës, IP ose veprimit. Nëse keni të drejtat e duhura ju mund edhe të fshini veprimet individuale ose të gjithë informacionin.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Këtu rrjeshtohen veprimet e kryera nga përdoruesit ose për përdoruesit (raportime, paralajmërime dhe shënime për përdoruesit).',
	'ALL_ENTRIES'				=> 'Të gjitha hyrjet',
	
	'DISPLAY_LOG'	=> 'Trego hyrjet nga e kaluara',
	
	'NO_ENTRIES'	=> 'Asnjë hyrje log për këtë periudhë.',
	
	'SORT_IP'		=> 'Adresa IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Log i veprimeve',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Faleminderit që zgjodhët phpBB si bordin tuaj. Kjo pamje do t\'ju japë një parashikim të shpejtë të të gjitha statistikave të bordit tuaj. Link që ndodhen në të majtë të kësaj pamje ju japin mundesinë të kontrolloni çdo aspekt të bordit tuaj. Çdo faqe do të ketë instruksion të shpejtë për mënyrën se si mund të përdorni opsionet.',
	'ADMIN_LOG'					=> 'Veprimet e kryera nga administratori',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Përshkrimi i pesë veprimeve të fundit të kryera nga administratorët . Lista e plotë e përskrimit mund të shihet nga menuja e përshtatshme ose duke klikuar linkun më poshtë.',
	'AVATAR_DIR_SIZE'			=> 'Masa e direktorisë së avatarëve',
	
	'BOARD_STARTED'		=> 'Boardi startoi',
	'BOARD_VERSION'		=> 'Versioni i bordit',
	
	'DATABASE_SERVER_INFO'	=> 'Serveri i bazës së informacionit',
	'DATABASE_SIZE'			=> 'Masa e bazës së informacionit',
	
	'FILES_PER_DAY'		=> 'Shtojca në ditë',
	'FORUM_STATS'		=> 'Statistikat e bordit',
	
	'GZIP_COMPRESSION'	=> 'Kompresioni GZip',
	
	'NOT_AVAILABLE'		=> 'E padisponueshme',
	'NUMBER_FILES'		=> 'Numri i shtojcave',
	'NUMBER_POSTS'		=> 'Numri i postimeve',
	'NUMBER_TOPICS'		=> 'Numri i temave',
	'NUMBER_USERS'		=> 'Numri i përdoruesve',
	'NUMBER_ORPHAN'		=> 'Shtojca jetime',
	
	'POSTS_PER_DAY'		=> 'Postime në ditë',
	
	'PURGE_CACHE'			=> 'Boshatisni cache',
	'PURGE_CACHE_CONFIRM'	=> 'Jeni i sigurt që doni të boshatisni cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Boshatis të tërë; kjo përfshin boshatisjen edhe për maskat dhe kërkimet.',
	
	'RESET_DATE'					=> 'Reseto datën e startimit të bordit',
	'RESET_DATE_CONFIRM'			=> 'Jeni i sigurt që doni të resetoni datën e startimit të bordit?',
	'RESET_ONLINE'					=> 'Reseto numrin maksimal të përdoruesve në linjë',
	'RESET_ONLINE_CONFIRM'			=> 'Jeni i sigurt që doni të resetoni numrin maksimal të përdoruesve në linjë?',
	'RESYNC_POSTCOUNTS'				=> 'Sinkronizo numërimin e postimeve',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Vetëm postimet ekzistuese do të merren në konsideratë. Postimet e fshira nuk do të merren parasysh.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Jeni i sigurt që doni të sinkronizoni numrin e postimeve?',
	'RESYNC_POST_MARKING'			=> 'Sinkronizo temat e shënuara',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Jeni i sigurt që doni të sinkronizoni temat e shënuara?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Në fillim heq shënimet nga të gjitha temat dhe më pas i shënon korrektësisht temat që kanë patur aktivitet gjatë gjashtë muajve të fundit.',
	'RESYNC_STATS'					=> 'Sinkronizo statistikat',
	'RESYNC_STATS_CONFIRM'			=> 'Jeni i sigurt që doni të sinkronizoni statistikat?',
	'RESYNC_STATS_EXPLAIN'			=> 'Rinumëron postimet totale, temat, përdoruesit dhe skedarët.',
	'RUN'							=> 'Fillo',
	
	'STATISTIC'					=> 'Statistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Sinkronizo ose reseto statistikat',
	
	'TOPICS_PER_DAY'	=> 'Tema në ditë',
	
	'UPLOAD_DIR_SIZE'	=> 'Masa e shtojcave të postuara',
	'USERS_PER_DAY'		=> 'Përdorues në ditë',
	
	'VALUE'					=> 'Vlera',
	'VIEW_ADMIN_LOG'		=> 'Shiko log të administratorëve',
	'VIEW_INACTIVE_USERS'	=> 'Shiko përdoruesit jo aktiv',
	
	'WELCOME_PHPBB'			=> 'Mirë se vini në phpBB',
	'WRITABLE_CONFIG'		=> 'Skedari juaj i konfigurimit (config.php) është momentalisht i shkruajtshëm nga të gjithë. Ne ju rekomandojmë të ndërroni të drejtat për këtë skedar në 640 ose të paktën 644 (për shëmbull: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data inaktivitetit',
	'INACTIVE_REASON'				=> 'Arsye',
	'INACTIVE_REASON_MANUAL'		=> 'Llogari e ç\'aktivizuar nga administratori',
	'INACTIVE_REASON_PROFILE'		=> 'Detajet e profilit të ndryshuara',
	'INACTIVE_REASON_REGISTER'		=> 'Llogari e regjistruar së fundmi',
	'INACTIVE_REASON_REMIND'		=> 'Riaktivizim i detyruar i llogarisë së përdoruesit',
	'INACTIVE_REASON_UNKNOWN'		=> 'E panjohur',
	'INACTIVE_USERS'				=> 'Përdorues jo aktiv',
	'INACTIVE_USERS_EXPLAIN'		=> 'Kjo është një listë përdoruesish që janë regjistruar por që llogaritë e të cilëve jane të pa aktivizuara. Ju mund t\'i aktivizoni, fshini ose rikujtoni (duke u dërguar një e-mail) këta përdorues nëse doni.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Kjo është një listë e 10 përdoruesve të fundit të regjistruar të cilët kanë llogari të pa aktivizuara. Nje listë e plotë është e mundur në menunë e përshtatshme ose duke ndjekur link më poshtë, ku ju mund të aktivizoni fshini ose rikujtoni (duke u dërguar një e-mail) këta përdorues nëse doni.',
	
	'NO_INACTIVE_USERS'	=> 'Asnjë përdorues jo aktiv',
	
	'SORT_INACTIVE'		=> 'Data inaktivitetit',
	'SORT_LAST_VISIT'	=> 'Vizita e fundit',
	'SORT_REASON'		=> 'Arsye',
	'SORT_REG_DATE'		=> 'Data e regjistrimit',
	
	'USER_IS_INACTIVE'		=> 'Përdoruesi është jo aktiv',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Shtoi ose modifikoi të drejtat e përdoruesit përdoruesve</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Shtoi ose modifikoi të drejtat e përdoruesit grupeve</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Shtoi ose modifikoi të drejtat e moderatorit global përdoruesve</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Shtoi ose modifikoi të drejtat e moderatorit global grupeve</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Shtoi ose modifikoi të drejtat administrative përdoruesve</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Shtoi ose modifikoi të drejtat administrative grupeve</strong><br />» %s',
	
	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Shtoi ose modifikoi Administratorë</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Shtoi ose modifikoi Moderatorë Global</strong><br />» %s',
	
	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Shtoi ose modifikoi akses forumi për përdoruesit</strong> nga %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Shtoi ose modifikoi akses moderativ forumi përdoruesve</strong> nga %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Shtoi ose modifikoi akses në forum për grupet</strong> nga %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Shtoi ose modifikoi akses moderativ forumi për grupet</strong> nga %1$s<br />» %2$s',
	
	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Shtoi ose modifikoi Moderatorë</strong> nga %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Shtoi ose modifikoi të drejtat e forumit</strong> nga %1$s<br />» %2$s',
	
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Hoqi administratorë</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Hoqi moderatorë global</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Hoqi moderatorë</strong> nga %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Hoqi të drejtat e forumit për Përdorues/Grup</strong> nga %1$s<br />» %2$s',
	
	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Të drejtat u transferuan nga</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Të drejtat personale u rimorën pas përdorimit të të drejtave të</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Tentative e dështuar për identifikim administrativ</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Identifikim i suksesshëm administrativ</strong>',
	
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Fshiu shtojcat e përdoruesit</strong><br />» %s',
	
	'LOG_ATTACH_EXT_ADD'		=> '<strong>Shtoi ose modifikoi prapashtesat e shtojcave</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Fshiu prapashtesën e shtojcës</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Azhornoi prapashtesën e shtojcës</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Shtoi grup prapashtesash</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Modifikoi grup prapashtesash</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Fshiu grup prapashtesash</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Skendar jetim ngarkuar në postimin</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Skedari jetim u fshi</strong><br />» %s',
	
	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Hoqi përdoruesin nga përjashtimi</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Hoqi IP nga përjashtimi</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Hoqi e-mail nga përjashtimi</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Përjashtoi përdorues</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Përjashtoi IP</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Përjashtoi e-mail</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Hoqi përjashtimin e përdoruesit</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Hoqi përjashtimin e IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Hoqi përjashtimin e e-mail</strong><br />» %s',
	
	'LOG_BBCODE_ADD'		=> '<strong>Shtoi BBCode të ri</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Modifikoi BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Fshiu BBCode</strong><br />» %s',
	
	'LOG_BOT_ADDED'		=> '<strong>Motorr kërkimi i ri u shtua</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Fshiu Motorr kërkimi</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Azhornoi Motorr kërkimi ekzistues </strong><br />» %s',
	
	'LOG_CLEAR_ADMIN'		=> '<strong>Fshiu log të admin</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Fshiu log të gabimeve</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Fshiu log të moderatorëve</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Fshiu log të përdoruesit</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Fshiu log të përdoruesve</strong>',
	
	'LOG_CONFIG_ATTACH'			=> '<strong>Ndryshoi opsionet e shtojcave</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Ndryshoi opsionet e autentikimit</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Ndryshoi opsionet e avatarit</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Ndryshoi opsionet e cookie</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Ndryshoi opsionet e e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Ndryshoi funksionet e bordit</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Ndryshoi opsionet e karikimit</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Ndryshoi opsionet e mesazheve private</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Ndryshoi opsionet e postimit</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Ndryshoi opsionet e regjistrimit të përdoruesve</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Ndryshoi opsionet e kërkimit</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Ndryshoi opsionet e sigurisë</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Ndryshoi opsionet e serverit</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Ndryshoi opsionet e bordit</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Ndryshoi opsionet e firmës</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Ndryshoi opsionet e konfirmimit vizual</strong>',
	
	'LOG_APPROVE_TOPIC'			=> '<strong>Aprovoi temën</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Përdoruesi ngjiti lart temën</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Fshiu posim</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Fshiu postim hije</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Fshiu temë</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Kopjoi temë</strong><br />» nga %s',
	'LOG_LOCK'					=> '<strong>Mbylli temë</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Mbylli postim</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Bashkoi postimet</strong> ne temen<br />» %s',
	'LOG_MOVE'					=> '<strong>Lëvizi temë</strong><br />» nga %1$s në %2$s',
	'LOG_POST_APPROVED'			=> '<strong>Aprovoi postim</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Nuk miratoi postim “%1$s” me arsyen</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Modifikoi postimin “%1$s” shkruar nga</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Mbylli raportimin</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Fshiu raportimin</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Lëvizi postimet e ndara</strong><br />» në %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Ndau postimet</strong><br />» nga %s',
	
	'LOG_TOPIC_APPROVED'		=> '<strong>Miratoi temën</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Nuk miratoi temën “%1$s” me arsyen</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Sinkronizoi numratorin e temave</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Ndryshoi llojin e temës</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Zhbllokoi temën</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Zhbllokoi postimin</strong><br />» %s',
	
	'LOG_DISALLOW_ADD'		=> '<strong>Shtoi pseudonim të ndaluar</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Fshiu pseudonim të ndaluar</strong>',
	
	'LOG_DB_BACKUP'			=> '<strong>Backup bazën e informacionit</strong>',
	'LOG_DB_DELETE'			=> '<strong>Fshiu backup të bazës së informacionit</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restauroi backup të bazës së informacionit</strong>',
	
	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Përjashtoi IP/emër hosti nga lista e shkarkimit</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Shtoi IP/emër hosti në listën e shkarkimit</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Hoqi IP/emër hosti nga lista e shkarkimit</strong><br />» %s',
	
	'LOG_ERROR_JABBER'		=> '<strong>Gabim i Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Gabim i E-mail</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Krijoi forum të ri</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Fshiu forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Fshiu forum dhe nënforumet e tij</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Fshiu forum dhe lëvizi nënforumet</strong> në %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Fshiu forum dhe lëvizi postimet</strong> ne %1$s<br />» %2$s',
    'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'      	=> '<strong>Fshiu forum dhe nënforumet e tij, lëvizi postimet</strong> në %1$s<br />� %2$s',
    'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'  => '<strong>Fshiu forum, lëvizi postimet</strong> në %1$s <strong>dhe nënforumet</strong> në %2$s<br />� %3$s',
    'LOG_FORUM_DEL_POSTS'               	=> '<strong>Fshiu forum dhe postimet e tij</strong><br />� %s',
    'LOG_FORUM_DEL_POSTS_FORUMS'         	=> '<strong>Fshiu forum, postimet e tij dhe nënforumet</strong><br />� %s',
    'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'      	=> '<strong>Fshiu forum dhe postimet e tij, lëvizi nënforumet</strong> në %1$s<br />� %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Modifikoi detajet e forumit</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Lëvizi forum</strong> %1$s <strong>më poshtë</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Lëvizi forum</strong> %1$s <strong>më lart</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Sinkronizoi forum</strong><br />» %s',
	
	'LOG_GROUP_CREATED'		=> '<strong>Grup përdoruesish i ri u krijua</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Groupi “%1$s” u bë i paracaktuar për përdoruesit</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Grup përdoruesish u fshi</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Liderët u shkarkuan në grupet e përdoruesve</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Antarë u promovuan për lider në grupin e përdoruesve</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Antaret u hoqën nga grupi i përdoruesve</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detajet e grupit të përdoruesve u azhornuan</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>U shtua lider i ri në grupin e përdoruesve</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Përdoruesi u aprovua në grupin e përdoruesve</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Shtoi antar të ri në grupin e përdoruesve</strong> %1$s<br />» %2$s',
	
	'LOG_IMAGESET_ADD_DB'			=> '<strong>Shtoi set të ri imazhesh në bazën e informacionit</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Shtoi set të ri imazhesh në sistemin e skedarëve</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Fshiu set imazhesh</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Modifikoi detajet e setit të imazheve</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Modifikoi setin e imazheve</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Eksportoi setin e imazheve</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Setit të imazheve i mungon lokalizimi i “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Rifreskoi “%2$s” lokalizimin e setit të imazheve</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Rifreskoi setin e imazheve</strong><br />» %s',
	
	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivizoi përdoruesit jo aktiv</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Fshiu përdoruesit jo aktiv</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>U dërgoi e-mail rikujtimi përdoruesve jo aktiv</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertoi nga %1$s në phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instaloi phpBB %s</strong>',
	
	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Seksion IP/shfletues/X_FORWARDED_FOR kontrolli dështoi</strong><br />»IP e përdoruesit“<em>%1$s</em>” kontrolluar kundrejt seksionit IP “<em>%2$s</em>”, shfletuesi i përdoruesit “<em>%3$s</em>” kontrolluar kundrejt seksionit të shfletuesit  “<em>%4$s</em>” dhe përdoruesi X_FORWARDED_FOR string “<em>%5$s</em>” kontrolloi kundrejt seksionit  X_FORWARDED_FOR “<em>%6$s</em>”.',
	
	'LOG_JAB_CHANGED'			=> '<strong>Llogaria Jabber u ndryshua</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Fjalëkalimi Jabber u ndryshua</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Llogaria Jabber u regjistrua</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Opsionet Jabber u ndryshuan</strong>',
	
	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Fshiu paketën gjuhësore</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instaloi paketë gjuhësore</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Azhornoi detajet e paketës gjuhësore</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Zëvendësoi skedar gjuhe</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Azhornoi skedar gjuhe dhe e vendori në dosjen /store</strong><br />» %s',
	
	'LOG_MASS_EMAIL'		=> '<strong>Dërgoi e-mail masiv</strong><br />» %s',
	
	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Ndryshoi postuesin në temën “%1$s”</strong><br />» nga %2$s në %3$s',
	
	'LOG_MODULE_DISABLE'	=> '<strong>Modul i ç\'aktivizuar</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul i aktivizuar</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Moduli lëvizi poshtë</strong><br />» %1$s nën %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Moduli lëvizi lart</strong><br />» %1$s mbi %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Moduli i fshi</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Moduli u shtua</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Moduli u modifikua</strong><br />» %s',
	
	'LOG_A_ROLE_ADD'		=> '<strong>Roli i Admin u shtua</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Roli i Admin u modifikua</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Roli i Admin u fshi</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Roli i Forumit u shtua</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Roli i Forumit u modifikua</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Roli i Forumit u fshi</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Roli i Moderatorit u shtua</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Roli i Moderatorit u modifikua</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Roli i Moderatorit u fshi</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Roli i perdoruesit u shtua</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Roli i përdoruesit u modifikua</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Roli i përdoruesit u fshi</strong><br />» %s',
	
	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Fusha e profilit u aktivizua</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Fusha e profilit u shtua</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Fusha e profilit u ç\'aktivizua</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Fusha e profilit u ndryshua</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Fusha e profilit u fshi</strong><br />» %s',
	
	'LOG_PRUNE'					=> '<strong>Fshiu forumet</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Fshiu forumet automatikisht</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Përdoruesi u ç\'aktivizua</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Përdoruesit dhe postimet u fshinë</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Përdoruesit u fshinë dhe postimet u mbajtën</strong><br />» %s',
	
	'LOG_PURGE_CACHE'			=> '<strong>Zbrazi cache</strong>',
	
	'LOG_RANK_ADDED'		=> '<strong>Shtoi rang të ri</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Fshiu rang</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Azhornoi rang</strong><br />» %s',
	
	'LOG_REASON_ADDED'		=> '<strong>Shtoi arsye raportim/bllokim</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Fshiu arsye raportim/bllokim</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Azhornoi arsye raportim/bllokim</strong><br />» %s',
	
	'LOG_REFERER_INVALID'		=> '<strong>Vlerësimi i referuesit dështoi</strong><br />»Referuesi ishte “<em>%1$s</em>”. Kërkesa u refuzua dhe seksioni u eleminua.',
	'LOG_RESET_DATE'			=> '<strong>Resetoi datën e startimit të bordit</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Resetoi numrin maksimal të përdoruesve në linjë</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Numri i postimeve u sinkronizua</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Temat e shënuara u sinkronizuan</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Postimet, temat dhe statistikat e përdoruesve u sinkronizuan</strong>',
	
	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Krijoi indeks kërkimi për</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Fshiu indeksin e kërkimit për</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Shtoi stil të ri</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Fshiu stil</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Modifikoi stil</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Eksportoi stil</strong><br />» %s',
	
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Shtoi set të ri maske në bazën e informacionit</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Shtoi set të ri maske në sistemin e skedarëve</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Fshiu versionin e ruajtur në cache të skedarëve të maskës në kompletin e maskës <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Fshiu kompletin e maskës</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Modifikoi setin e maskës <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Modifikoi detajet e maskës</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Eksportoi setin e maskës</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Rifreskoi setin e maskës</strong><br />» %s',
	
	'LOG_THEME_ADD_DB'			=> '<strong>Shtoi theme të re në bazen e informacionit</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Shtoi theme të re në sistemin e skedarëve</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme u fshi</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Modifikoi detajet e theme</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Modifikoi theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Modifikoi theme <em>%1$s</em></strong><br />» Skedari i modifikuar <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Eksportoi theme</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Rifreskoi theme</strong><br />» %s',
	
	'LOG_UPDATE_DATABASE'	=> '<strong>Azhornoi bazën e informacionit nga %1$s në versionin %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Azhornoi phpBB nga versioni %1$s në versionin %2$s</strong>',
	
	'LOG_USER_ACTIVE'		=> '<strong>Përdoruesi u aktivizua</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Përjashtoi përdorues nëpërmjet Menaxhimit të Përdoruesve</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Përjashtoi IP nëpërmjet Menaxhimit të Përdoruesve</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Përjashtoi e-mail nëpërmjet Menaxhimit të Përdoruesve</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Fshiu përdorues</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Fshiu të gjitha shtojcat e bëra nga përdoruesi</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Fshiu avatarin e përdoruesit</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Fshiu të gjitha postimet e bëra nga përdoruesi</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Fshiu firmën e përdoruesit</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Përdoruesi u ç\'aktivizua</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Lëvizi postimet e përdoruesit</strong><br />» posimet nga “%1$s” në forumin “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Ndryshoi fjalëkalimin e përdoruesit</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Detyroi riaktivizimin e llogarisë së përdoruesit</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Përdoruesi “%1$s” ndryshoi e-mail</strong><br />» nga “%2$s” në “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Ndryshoi pseudonim</strong><br />» nga “%1$s” ne “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Azhornoi detajet e përdoruesit</strong><br />» %s',
	
	'LOG_USER_ACTIVE_USER'		=> '<strong>Llogaria e përdoruesit u aktivizua</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatari i përdoruesit u fshi</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Firma e përdoruesit u fshi</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Shtoi reagim për përdoruesin</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Hyrja u shtua:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Llogaria e përdoruesit u ç\'aktivizua</strong>',
	'LOG_USER_LOCK'				=> '<strong>Përdoruesi mbylli temën e tij</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Lëvizi të gjitha postimet në forumin</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Detyroi riaktivizimin e llogarisë së përdoruesit</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Përdoruesi rihapi temën e tij</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Shtoi paralajmërim për përdorues</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Paralajmerimi i mëposhtem u dha për përdoruesin</strong><br />» %s',
	
	'LOG_USER_GROUP_CHANGE'			=> '<strong>Përdoruesi ndryshoi grupin e paracaktuar</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Përdoruesi u shkarkua si lider nga përdoruesit e grupit</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Përdoruesi u bashkua me grupin</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Përdoruesi u bashkua me grupin dhe ka nevojë të aprovohet</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Përdoruesi u largua nga grupi</strong><br />» %s',
	
	'LOG_WORD_ADD'			=> '<strong>Shtoi çensorues fjalësh</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Fshiu çensorues fjalësh</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Modifikoi çensorues fjalësh</strong><br />» %s',
));

?>