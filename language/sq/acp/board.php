<?php
/**
*
* acp_board.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-05 - www.dea-portal.com
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Këtu ju mund të përcaktoni operimet bazë të bordit tuaj, t\'i jepni një emër dhe përshkrim të përshtatshëm, dhe përveç opsioneve të tjera mund të rregulloni vlerën e paracaktuar të brezit orar dhe gjuhën.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizuar…',
	'DEFAULT_DATE_FORMAT'			=> 'Formati i datës',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Formati i datës është i njëjti me funksionin e <code>date</code> së PHP.',
	'DEFAULT_LANGUAGE'				=> 'Gjuha e paracaktuar',
	'DEFAULT_STYLE'					=> 'Stili i paracaktuar',
	'DISABLE_BOARD'					=> 'Ç\'aktivizo bordin',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ky funksion do të mbyllë bordin për përdoruesit. Ju mund të shkruani një mesazh të shkurtër (255 karaktere) që të shfaqet nëse doni.',
	'OVERRIDE_STYLE'				=> 'Mbivendos stilin e përdoruesve',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Zëvendëson stilin e përdoruesve me stilin e paracaktuar.',
	'SITE_DESC'						=> 'Përshkrimi i bordit',
	'SITE_NAME'						=> 'Emri i bordit',
	'SYSTEM_DST'					=> 'Aktivizo orën verore/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Brezi orar i sistemit',
	'WARNINGS_EXPIRE'				=> 'Kohëzgjatja e paralajmërimit',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Numri i ditëve që do kalojnë përpara se paralajmërimi të shfuqizohet automatikisht nga dokumentimi i përdoruesit.',
));

// Board Features
$lang = array_merge($lang, array(	
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Këtu mund të aktovizoni/ç\'aktivizoni opsione të ndryshme të bordit.',
	
	'ALLOW_ATTACHMENTS'			=> 'Lejo shtojcat',
	'ALLOW_BIRTHDAYS'			=> 'Lejo ditëlindjet',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Lejo përdoruesit të vendosin ditëlindjet dhe moshën të shfaqet në profile. Vini re që lista e ditëlindjeve në indeksin e bordit kontrollohet nga një opsion i veçantë.',
	'ALLOW_BOOKMARKS'			=> 'Lejo caktimin e temave si të pëlqyera',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Përdoruesi mundet të ruaj të pëlqyera personale.',
	'ALLOW_BBCODE'				=> 'Lejo BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Lejo caktimin e forumeve si të pëlqyer',
	'ALLOW_NAME_CHANGE'			=> 'Lejo ndërrimin e pseudonimit',
	'ALLOW_NO_CENSORS'			=> 'Lejo ç\'aktivizimin e çensoruesit të fjalëve',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Përdoruesit mund të zgjedhin të ç\'aktivizojnë çensoruesin automatik të fjalëve në postime dhe mesazhe private.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Lejo shtojcat në mesazhet private',
	'ALLOW_SIG'					=> 'Lejo firmat',
	'ALLOW_SIG_BBCODE'			=> 'Lejo BBCode në firmat e përdoruesve',
	'ALLOW_SIG_FLASH'			=> 'Lejo përdorimin e kllapave <code>[FLASH]</code> të BBCode në firmat e përdoruesve',
	'ALLOW_SIG_IMG'				=> 'Lejo përdorimin e kllapave <code>[IMG]</code> të BBCode në firmat e përdoruesve',
	'ALLOW_SIG_LINKS'			=> 'Lejo përdorimin e link në firmat e përdoruesve',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Nëse ndalohet kllapa <code>[URL]</code> e BBCode dhe automatik/magjik URL ç\'aktivizohen.',
	'ALLOW_SIG_SMILIES'			=> 'Lejo përdorimin e buzëqeshjeve në firmat e përdoruesve',
	'ALLOW_SMILIES'				=> 'Lejo buzëqeshjet',
	'ALLOW_TOPIC_NOTIFY'		=> 'Lejo caktimin e temave si të pëlqyera',
	'BOARD_PM'					=> 'Mesazhet private',
	'BOARD_PM_EXPLAIN'			=> 'Aktivizo ose ç/aktivizo mesazhet private për të gjithë përdoruesit.',
));

// Avatar Settings
$lang = array_merge($lang, array(	
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Në përgjithësi avatarët janë imazhe të vogla dhe unike që mbahen nga antarët. Në varësi të stilit ata shfaqen pranë pseudonimit në faqet e postimeve. Këtu mund të vendosni si duhet të jenë avatarët e përdoruesve. Vini re që për të ngarkuar avatare ju duhet të keni krijuar një direktori dhe të siguroheni që të jetë e shkruajtshme nga webserveri. Gjithashtu vini re që kufizimet e përmasave aplikohen vetëm në avatarët që ngarkohen dhe jo në imazhet që vendoset link.',
	
	'ALLOW_LOCAL'					=> 'Aktivizo galerinë e avatarëve',
	'ALLOW_REMOTE'					=> 'Aktivizo kontrollin e avatarëve',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarë të ruajtur në një tjetër faqe web.',
	'ALLOW_UPLOAD'					=> 'Aktivizo ngarkimin e avatarëve',
	'AVATAR_GALLERY_PATH'			=> 'Direktoria e galerisë së avatarëve',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Vendodhja në direktorinë e phpBB për imazhet e avatarëve, p.sh. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Direktoria e ruajtjes së Avatarëve',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Vendodhja në direktorinë e phpBB, p.sh. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensionet maksimale të avatarëve',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Gjerësi x Lartësi në piksel.',
	'MAX_FILESIZE'					=> 'Masa maksimale e avatarëve',
	'MAX_FILESIZE_EXPLAIN'			=> 'Për skedarët e ngarkuar të avatarëve.',
	'MIN_AVATAR_SIZE'				=> 'Dimensionet minimale të avatarëve',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Gjerësi x Lartësi në piksel.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Këtu mund të vendosni të gjitha opsionet e paracaktuara për mesazhet private.',
	
	'ALLOW_BBCODE_PM'			=> 'Lejo BBCode në mesazhet private ',
	'ALLOW_FLASH_PM'			=> 'Lejo përdorimin e kllapës <code>[FLASH]</code> të BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Vini re që mundësia e përdorimit të flash në mesazhet private, nëse mundësohet këtu, varet gjithashtu nga të drejtat.',
	'ALLOW_FORWARD_PM'			=> 'Lejo forward të mesazheve private',
	'ALLOW_IMG_PM'				=> 'Lejo përdorimin e kllapës <code>[IMG]</code> të BBCode',
	'ALLOW_MASS_PM'				=> 'Lejo dërgimin e mesazheve private disa përdoruesve dhe grupeve në të njëjtën kohë',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Opsioni i dërgimit grupeve mund të personalizohet për secilin grup në faqen e opsioneve të grupeve.',
	'ALLOW_PRINT_PM'			=> 'Lejo shikimin e versionit të printueshëm të mesazheve private',
	'ALLOW_QUOTE_PM'			=> 'Lejo citimin në mesazhet private',
	'ALLOW_SIG_PM'				=> 'Lejo firmat në mesazhet private',
	'ALLOW_SMILIES_PM'			=> 'Lejo buzëqeshjet në mesazhet private',
	'BOXES_LIMIT'				=> 'Maksimiumi i mesazheve private për dosje',
	'BOXES_LIMIT_EXPLAIN'		=> 'Përdoruesit nuk mund të marrin më shumë se kaq mesazhe private në çdo skedar të mesazheve private. Vendosni këtë vlerë 0 për të lejuar mesazhe pa kufi.',
	'BOXES_MAX'					=> 'Numri maksimal i dosjeve në mesazhet private',
	'BOXES_MAX_EXPLAIN'			=> 'Si e paracaktuar përdoruesit mund të krijojnë dosje personale sipas dëshirës.',
	'ENABLE_PM_ICONS'			=> 'Lejo përdorimin e ikonave të temave në mesazhet private',
	'FULL_FOLDER_ACTION'		=> 'Veprimi i paracaktuar për dosje të mbushur',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Pavarësisht opsionit të zgjedhur (ose jo) nga përdoruesi, ky do të jetë veprimi që do të kryhet në rast të dosjeve të mesazheve private të mbushura plot. Përjashtimi i vetëm do të bëhet për dosjen “Mesazhet e Dërguara” ku veprimi i paracaktuar është fshirja e mesazheve më të vjetër.',
	'HOLD_NEW_MESSAGES'			=> 'Mbaj mesazhet e rinj',
	'PM_EDIT_TIME'				=> 'Kufizimi i kohës për modifikim',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Kufizon kohën e mundshme për të modifikuar mesazhe të dërguara akoma të pa dorëzuara. Vendosja e vlerës 0 ç\'aktivizon këtë funksion.',
	'PM_MAX_RECIPIENTS'			=> 'Numri maksimal i lejuar i marrësve',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Numri maksimal i lejuar i marrësve në një mesazh privat. Nëse vendoset 0, lejohet një numër i pa kufizuar. Ky opsion mund të vendoset për çdo grup në faqen e opsioneve të grupeve.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Këtu mund të vendosni të gjithë opsionet e paracaktuara për postimet.',
	'ALLOW_POST_LINKS'					=> 'Lejo link në postime/mesazhe private',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Nëse ndalohet kllapa <code>[URL]</code> e BBCode dhe URL automatike ç\'aktivizohen.',
	'ALLOW_POST_FLASH'					=> 'Lejo përdorimin e kllapës <code>[FLASH]</code> së BBCode në postime',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Nëse ndalohet kllapa <code>[FLASH]</code> e BBCode do të ç\'aktivizohet në postime. Ose sistemi i të drejtave kontrollon cilët përdorues mund të përdorin këtë kllapë.',
	
	'ENABLE_QUEUE_TRIGGER'			=> 'Aktivizo postimet në pritje',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Ju jep mundësinë të vendosni postimet e përdoruesve të regjistruar në pritje për aprovim nëse numri i postimeve të tyre është më i vogël sesa numri i caktuar më poshtë. Ky opsion nuk ka efekt mbi opsionet e të drejtave për aprovimin e postimeve/temave.',
	'QUEUE_TRIGGER_POSTS'			=> 'Numri maksimal për postime në pritje për aprovim',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Nëse vënia në pritje për aprovimin e postimeve është aktivizuar, ky është numri i postimeve që një përdorues duhet të arrijë që të postojë pa ju vënë postimet në pritje. Nëse numri i postimeve të përdoruesit është nën këtë numër, postimi vihet në pritje për aprovim automatikisht.',
	
	'BUMP_INTERVAL'					=> 'Intervali i ngjitjes sipër të temave',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Numri i minutave, ditëve ose javëve ndërmjet postimit të fundit në një temë dhe mundësisë për ta ngjitur sipër këtë temë.',
	'CHAR_LIMIT'					=> 'Karakteret maksimale për postim',
	'CHAR_LIMIT_EXPLAIN'			=> 'Numri i karaktereve të lejuara në një postim. Vendos 0 për numër të pa kufizuar karakteresh.',
	'DISPLAY_LAST_EDITED'			=> 'Shfaq informacionin për modifikimin e fundit',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Vendos nëse do të shfaqet informacioni për modifikimin e fundit të postimit.',
	'EDIT_TIME'						=> 'Kufizimi i kohës së modifikimit',
	'EDIT_TIME_EXPLAIN'				=> 'Kufizon kohën e mundshme por të modifikuar një postim të ri. Vendosja e vleres ne 0 ç\'aktivizon funksionin.',
	'FLOOD_INTERVAL'				=> 'Intervali i flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Numri i sekondave që një përdorues duhet të presë ndërmjet postimit të mesazheve të rinj. Për të mundësuar përdorues të injorojnë këtë funksion, ndryshoni të drejtat e tyre.',
	'HOT_THRESHOLD'					=> 'Limiti i mesazheve popullor',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Numri i postimeve në një temë për t\'a bërë atë të populluar. Vendos 0 për të ç\'aktivizuar temat popullore.',
	'MAX_POLL_OPTIONS'				=> 'Numri maksimal i mundësive të sondazheve',
	'MAX_POST_FONT_SIZE'			=> 'Madhësia maksimale e karaktereve në postime',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Madhësia maksimale e karaktereve e lejuar në postime. Vendos 0 për madhësi të pa kufizuar.',
	'MAX_POST_IMG_HEIGHT'			=> 'Lartësia maksimale e imazhit për postimet',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Lartësia maksimale e skedarëve imazh/flash në postime. Vendos 0 për madhësi të pa kufizuar.',
	'MAX_POST_IMG_WIDTH'			=> 'Gjerësia maksimale e imazhit për postimet',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Gjerësia maksimale e skedarëve imazh/flash në postime. Vendos 0 për madhësi të pa kufizuar.',
	'MAX_POST_URLS'					=> 'Numri maksimal i link në postim',
	'MAX_POST_URLS_EXPLAIN'			=> 'Numri maksimal i URL në një postim. Vendos 0 për numër të pa kufizuar.',
	'POSTING'						=> 'Dërgimi i mesazheve',
	'POSTS_PER_PAGE'				=> 'Postime për faqe',
	'QUOTE_DEPTH_LIMIT'				=> 'Numri maksimal i mbivendosjeve të citimeve',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Numri maksimal i mbivendosjeve të citimeve në një postim. Vendos 0 për numër të pa kufizuar.',
	'SMILIES_LIMIT'					=> 'Numri maksimal i buzëqeshjeve',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Numri maksimal i buzëqeshjeve në një postim. Vendos 0 për numër të pa kufizuar.',
	'TOPICS_PER_PAGE'				=> 'Tema për faqe',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Këtu mund të vendosni të gjitha opsionet e paracaktuara për firmat.',
	
	'MAX_SIG_FONT_SIZE'				=> 'Dimensioni maksimal i karaktereve në firmë',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Dimensioni maksimal i karaktereve i lejuar në firmë. Vendos 0 për dimension të pa kufizuar.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Lartësia maksimale e imazhit për firmat',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Lartësia maksimale e skedarëve imazh/flash në firmat e përdoruesve. Vendos 0 për madhësi të pa kufizuar.',
	'MAX_SIG_IMG_WIDTH'				=> 'Gjerësia maksimale e imazhit për firmat',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Gjerësia maksimale e skedarëve imazh/flash në firmat e përdoruesve. Vendos 0 për madhësi të pa kufizuar.',
	'MAX_SIG_LENGTH'				=> 'Gjatësia maksimale e firmës',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Numri maksimal i karaktereve në firmat e përdoruesve.',
	'MAX_SIG_SMILIES'				=> 'Numri maksimal i buzëqeshjeve në firmë',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Numri maksimal i lejuar i buzëqeshjeve në firmat e përdoruesve. Vendos 0 për numër të pakufizuar.',
	'MAX_SIG_URLS'					=> 'Numri maksimal i link në firmë',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Numri maksimal i link në firmat e përdoruesve. Vendos 0 për numër të pakufizuar.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Këtu mund të vendosni opsionet që lidhen me regjistrimin dhe profilin.',
	
	'ACC_ACTIVATION'			=> 'Aktivizimi i llogarisë',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Ky opsion cakton nëse përdoruesit kanë akses të menjëhershëm në bord ose kanë nevojë për konfirmim. Gjithashtu ju keni mundësi të ç\'aktivizoni regjistrimet tërësisht.',
	'ACC_ADMIN'					=> 'Nga Administratori',
	'ACC_DISABLE'				=> 'Ç\'aktivizuar',
	'ACC_NONE'					=> 'Asnjë',
	'ACC_USER'					=> 'Nga përdoruesi',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Lejo ripërdorimin e adresës e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Përdorues të ndryshëm mund të regjistrohen me të njëjtën adresë e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numri fax për COPPA',
	'COPPA_MAIL'				=> 'Adresa e-mail për COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Kjo është adresa e-mail ku prindërit do të dërgojnë formularët e regjistrimit të COPPA.',
	'ENABLE_COPPA'				=> 'Aktivizo COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Ky opsion u kërkon përdoruesve të deklarojnë nëse janë 13 vjec ose më tepër në zbatim të ligjit U.S. COPPA. Nëse ky funksion është i ç\'aktivizuar grupet COPPA nuk do të shfaqen.',
	'MAX_CHARS'					=> 'Maksimum',
	'MIN_CHARS'					=> 'Minimum',
	'NO_AUTH_PLUGIN'			=> 'Nuk u gjet asnjë plugin i përshtatshëm për autentikim.',
	'PASSWORD_LENGTH'			=> 'Gjatësia e fjalëkalimit',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Numri minimal dhe maksimal i karaktereve në fjalëkalim.',
	'REG_LIMIT'					=> 'Tentativa regjistrimi',
	'REG_LIMIT_EXPLAIN'			=> 'Numri i tentativave që përdoruesit mund të bëjnë për të konfirmuar kodin e regjistrimit para se të nxirren nga seksioni.',
	'USERNAME_ALPHA_ONLY'		=> 'Vetëm alfanumerik',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumerik dhe hapsira',
	'USERNAME_ASCII'			=> 'ASCII (jo unikod ndërkombëtar)',
	'USERNAME_LETTER_NUM'		=> 'Çdo karakter dhe numër',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Çdo karakter, numër dhe hapsira',
	'USERNAME_CHARS'			=> 'Kufizimi i karaktereve në pseudonim',
	'USERNAME_CHARS_ANY'		=> 'Çdo karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Kufizon llojin e karaktereve që mund të përdoret në pseudonime, mundësitë janë: hapsirë, -, +, _, [ dhe ].',
	'USERNAME_LENGTH'			=> 'Gjatësia e pseudonimit',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Numri minimal dhe maksimal i karaktereve në pseudonim.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Këtu ju mund të përkufizoni konfirmimin vizual të paracaktuar dhe Kodin e Konfirmimit Vizual.',
	
	'CAPTCHA_GD'							=> 'GD Kodi i Konfirmimit Vizual',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD shqetësimi në plan të parë i Kodit të Konfirmimit Vizual',
	'CAPTCHA_GD_EXPLAIN'					=> 'Përdor GD për të patur një Kod Konfirmimi Vizual të avancuar.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Përdor shqetësimin në plan të parë për të bërë GD Kodin e Konfirmimit Vizual më të vështirë.',
	'CAPTCHA_GD_X_GRID'						=> 'GD shqetësimi në plan të parë Kodi i Konfirmimit Vizual as-x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Përdor opsion më të ulët të kësaj për të bërë GD Kodin e Konfirmimit Vizual më të vështirë. 0 do të ç\'aktivizojë shqetësimin në plan të parë as-x.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD shqetësimi në plan të parë Kodi i Konfirmimit Vizual as-y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Përdor opsion më të ulët të kësaj për të bërë GD Kodin e Konfirmimit Vizual më të vështirë. 0 do të ç\'aktivizojë shqetësimin në plan të parë as-y.',
    'CAPTCHA_GD_WAVE'                  		=> 'Vala e shfytyrimit GD CAPTCHA',
    'CAPTCHA_GD_WAVE_EXPLAIN'            	=> 'Ky opsion aplikon një valë shfytyrimi për CAPTCHA.',
    'CAPTCHA_GD_3D_NOISE'               	=> 'Shto objekte 3D',
    'CAPTCHA_GD_3D_NOISE_EXPLAIN'         	=> 'Ky opsion shton objekte mbi shkronjat e CAPTCHA.',
    'CAPTCHA_GD_FONTS'                  	=> 'Përdor lloje të tjera shkrimi',
    'CAPTCHA_GD_FONTS_EXPLAIN'            	=> 'Ky opsion kontrollon sa forma të ndryshme shkronjash përdoren. Ju mund të përdorni format e paracaktuara ose të paraqisni shkronja të ndryshme. Gjithashtu është i mundur shtimi i shkronjave të vogla.',
    'CAPTCHA_FONT_DEFAULT'               	=> 'Të paracaktuara',
    'CAPTCHA_FONT_NEW'                  	=> 'Forma të reja',
    'CAPTCHA_FONT_LOWER'               		=> 'Përdor edhe shkronja të vogla',

	
	'CAPTCHA_PREVIEW_MSG'					=> 'Ndryshimet tuaja në opsionet e konfirmimit vizual nuk u ruajtën. Ky është vetëm një parashikim.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Kështu paraqitet Kodi i Konfirmimit Vizual me opsionet e caktuara. Përdor butonin e parashikimit për të rifreskuar. Kodet për konfirmimin vizual janë të rastësishëm, kështu që do të ndryshojnë nga pamja në pamje.',
	'VISUAL_CONFIRM_POST'					=> 'Aktivizo konfirmimin vizual për postimet e vizitorëve',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'U kërkon përdoruesve të panjohur të shkruajnë një kod të rastësishëm në përputhje me një imazh për të ndihmuar në ndalimin e postimeve masive.',
	'VISUAL_CONFIRM_REG'					=> 'Aktivizo konfirmimin vizual për regjistrimet',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'U kërkon përdoruesve të shkruajnë një kod të rastësishëm në përputhje me një imazh për të ndihmuar në ndalimin e regjistrimeve masive.',
    'VISUAL_CONFIRM_REFRESH'            	=> 'Lejo përdoruesit të rifreskojnë imazhin e konfirmimit',
    'VISUAL_CONFIRM_REFRESH_EXPLAIN'      	=> 'U lejon përdoruesve të kërkojnë kod të ri konfirmimi, nëse nuk e kuptojnë atë gjatë regjistrimit.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Këto detaje përkufizojnë të dhënat e përdorura për të dërguar "cookies" shfletuesve të përdoruesve tuaj. Në të shumtën e rasteve vlera e paracaktuar për opsionet e "cookie" duhet të jetë e mjaftueshme. Nëse ju duhet të ndryshoni ndonjë nga këta opsione, bëjeni me kujdes. Opsionet e gabuara mund të mos lejojnë përdoruesit të identifikohen.',
	
	'COOKIE_DOMAIN'				=> 'Domeini i Cookie',
	'COOKIE_NAME'				=> 'Emri i Cookie',
	'COOKIE_PATH'				=> 'Direktoria e Cookie',
	'COOKIE_SECURE'				=> 'Siguria e Cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'Nëse serveri juaj funksionon nëpërmjet SSL aktivizo këtë modul, nëse jo lëreni të ç\'aktivizuar. Nëse është i aktivizuar dhe serveri nuk funksionon nëpërmjet SSL, do të shfaqen gabime të serverit gjatë ridrejtimeve.',
	'ONLINE_LENGTH'				=> 'Koha në linjë',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Minutat pas të cilave përdoruesit inaktiv nuk do të shfaqen në "Kush është në linjë". Sa më e lartë kjo vlerë aq më i madh është proçesi i kërkuar për të gjeneruar listën e antarëve në linjë.',
	'SESSION_LENGTH'			=> 'Gjatësia e seksionit',
	'SESSION_LENGTH_EXPLAIN'	=> 'Seksioni do të skadojë pas kësaj kohe, në sekonda.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Këtu ju mund të aktivizoni dhe ç\'aktivizoni disa funksione të bordit për të ulur proçesin e funksionimit. Në të shumtën e serverave, nuk ka nevojë që të ç\'aktivizohet ndonjë proces. Por në disa sisteme ose në hoste të ndarë mes disa klientëve mund të jetë gjë e mirë ç\'aktivizimi i disa funksioneve të cilat me të vërtetë që nuk ju hyjnë në punë. Gjithashtu mund të specifikoni kufizimet e karikimit të sistemit dhe seksionet aktive për të cilat bordi do të ç\'aktivizohet.',
	
	'CUSTOM_PROFILE_FIELDS'			=> 'Fushat e profilit të personalizuar',
	'LIMIT_LOAD'					=> 'Kufizimi i karikimit të sistemit',
	'LIMIT_LOAD_EXPLAIN'			=> 'Nëse mesatarja e karikimit të sistemit kalon këtë vlerë, bordi do të ç\'aktivizohet automatikisht. Vlera 1.0 është mesatarisht 100% përdorimi i një procesori. Ky sistem funksionon vetëm në serverat e bazuar në UNIX dhe ku ky funksion është i aksesueshëm. Kjo vlerë resetohet në 0 vetvetiu nëse phpBB nuk gjen kufizimin e karikimit.',
	'LIMIT_SESSIONS'				=> 'Seksioni i kufizimeve',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Nëse numri i seksioneve kalon këtë vlerë gjatë një minute bordi do të ç\'aktivizohet. Vendos 0 për seksione të pa kufizuara.',
	'LOAD_CPF_MEMBERLIST'			=> 'Lejo stilet që të shfaqin fushat e personalizuara në listën e antarëve.',
	'LOAD_CPF_VIEWPROFILE'			=> 'Shfaq fushat e personalizuara të profilit në profilin e përdoruesve',
	'LOAD_CPF_VIEWTOPIC'			=> 'Shfaq fushat e personalizuara të profilit në faqet e temave',
	'LOAD_USER_ACTIVITY'			=> 'Shfaq aktivitetin e përdoruesve',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Shfaq temat/forumet aktive në profilet e përdoruesve dhe panelin e antarit. është e rekomandueshme që kjo të ç\'aktivizohet në borde me mbi një milion postime.',
	'RECOMPILE_STYLES'				=> 'Optimizo përbërësit e stileve',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kërkon për përbërës të azhornuar të stileve në sistemin e skedarëve dhe i optimizon.',
	'YES_ANON_READ_MARKING'			=> 'Aktivizo zgjedhjen e temave nga vizitorët',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Ruan informacionin e statusit lexuar/pa lexuar për vizitorët. Nëse e ç\'aktivizuar, postimet shfaqen si të lexuara për vizitorët.',
	'YES_BIRTHDAYS'					=> 'Aktivizo listën e ditëlindjeve',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Nëse e ç\'aktivizuar, lista e ditëlindjeve nuk do të shfaqet. Për të lejuar këtë opsion të ketë efekt tek funksioni i ditëlindjeve, duhet të jetë aktivizuar.',
	'YES_JUMPBOX'					=> 'Aktivizo shfaqjen e kutizës së kërcimit',
	'YES_MODERATORS'				=> 'Aktivizo shfaqjen e moderatorëve',
	'YES_ONLINE'					=> 'Aktivizo shfaqjen e përdoruesve në linjë',
	'YES_ONLINE_EXPLAIN'			=> 'Shfaq informacionin e përdoruesve në linjë në indeks, forum, dhe faqet e postimeve.',
	'YES_ONLINE_GUESTS'				=> 'Aktivizo shikimin e vizitorëve në "Kush është në linjë"',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Lejo shfaqjen e informacionit të vizitorëve në faqen e përdoruesve në linjë.',
	'YES_ONLINE_TRACK'				=> 'Aktivizo shfaqjen e informacionit të përdoruesit në linjë/jo në linjë',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Aktivizo shfaqjen e informacionit të përdoruesit në linjë, në  profile dhe faqet e temave.',
	'YES_POST_MARKING'				=> 'Aktivizo temat e shënuara',
	'YES_POST_MARKING_EXPLAIN'		=> 'Tregon nëse një përdorues ka bërë një postim në ndonjë temë.',
	'YES_READ_MARKING'				=> 'Aktivizo sinjalizimin e temave nga serveri',
	'YES_READ_MARKING_EXPLAIN'		=> 'Ruan informacionin lexuar/pa lexuar në bazën e informacionit në vend të ruajtjes në "cookie".',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB suporton plug-in ose module për autentikimin. Në këtë mënyrë, ju mund të caktoni mënyrën sesi përdoruesit autentifikohen kur hyjnë në bord. Në mënyrë të paracaktuar gjenden tre plug-in; DB, LDAP dhe Apache. Jo të gjitha mënyrat kërkojnë informacion kështu që ju vetëm plotësoni fushat që janë relative për mënyrën e zgjedhur.',
	
	'AUTH_METHOD'				=> 'Zgjidh një mënyrë autentikimi',
	
	'APACHE_SETUP_BEFORE_USE'	=> 'Duhet të vendosni opsionet e autentikimit apache përpara se të kaloni phpBB në këtë mënyrë autentikimi. Vini re që pseudonimi që do të përdorni për autentikimin apache, duhet të jetë i njëjtë me atë të phpBB. Autentikimi apache mund të përdoret vetëm me mod_php (jo me një version CGI) dhe safe_mode të ç\'aktivizuar.',
	
	'LDAP_DN'						=> 'Baza LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Ky është Distinguished Name, që gjen informacionet e përdoruesit, p.sh. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Atributi e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Vendose këtë si emrin e aksesit e-mail (nëse ekziston një) në mënyrë që automatikisht të vendosen adresat e-mail për përdoruesit e rinj. Lënia bosh çon në adresë e-mail bosh për përdorues që futen në forum për herë të parë.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Lidhja me serverin LDAP dështoi me pseudonimin/fjalëkalimin e specifikuar.',
	'LDAP_NO_EMAIL'					=> 'Adresa  e-mail atribut nuk ekziston.',
	'LDAP_NO_IDENTITY'				=> 'Nuk mund të gjendet identiteti i identifikimit për %s.',
	'LDAP_PASSWORD'					=> 'Fjalëkalimi LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Lëre bosh për të përdorur akses të panjohur. Ose plotëso fjalëkalimin për përdoruesin e specifikuar. E kërkuar për servera Active Directory. <strong>KUJDES:</strong> Ky fjalëkalim do të ruhet si tekst bazë në bazën e informacionit, i dukshëm për të gjithë ata që kanë akses në bazën e informacionit ose ata që mund të shohin faqen e konfigurimit.',
	'LDAP_PORT'						=> 'Porta e serverit LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Këtu mund të vendosni numrin e portës që duhet për t\'u lidhur me serverin LDAP, në vend të portës së paracaktuar 389.',
	'LDAP_SERVER'					=> 'Emri i serverit LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Nëse përdoret LDAP ky është emri ose IP i severit. Mund edhe të specifikoni një URL si ldap://hostname:port/',
	'LDAP_UID'						=> '<var>uid</var> LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Ky është çelësi nën të cilin do të kërkohet një identitet për lidhjen, p.sh. <var>uid</var>, <var>sn</var>, etj.',
	'LDAP_USER'						=> 'Përdoruesi LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Lëre bosh për të përdorur të panjohur. Nëse plotësohet, phpBB do kërkojë të lidhet me serverin LDAP me të dhënat e përdoruesit të kërkuar, p.sh. <said=Ump>username,ou=MyUnit,o=MyCompany,c=US</samp>. E kërkuar për Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'Filtri i përdoruesve LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Mund të kufizoni më tepër objektet e kërkuara nga përdoruesit me filtra adicionale. Për shembull <samp>objectClass=posixGroup</samp> do të jepte rezultatin në përdorimin e <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Këtu mund të caktoni lidhjet e ndërsjellta mes serverit dhe domeinit. Sigurohuni që të dhënat të jenë të kujdesshme; gabimet do të bëjnë që e-mail të kenë informacion të gabuar. Kur të shkruani emrin e domeinit, ju kujtojmë që përfshin http:// ose term protokolli tjetër. Ndryshoni numrin e portës nëse e dini që serveri juaj përdor një tjetër; porta 80 është korrekte në të shumtën e rasteve.',
	
	'ENABLE_GZIP'				=> 'Aktivizo kompresimin GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Përmbajtja e gjeneruar do të kompresohet përpara se t\'i dërgohet përdoruesit. Kjo mund të reduktojë trafikun në rrjet por gjithashtu do të rrisë përdorimin e CPU në të dy anët, server dhe klient.',
	'FORCE_SERVER_VARS'			=> 'Detyro opsionet URL të serverit',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Nëse caktohet po, opsionet e serverit të vendosura këtu do të përdoren në favor të vlerave automatikisht të vendosura.',
	'ICONS_PATH'				=> 'Vendodhja e ruajtjes së ikonave të postimit',
	'ICONS_PATH_EXPLAIN'		=> 'Vendodhja në direktorinë e phpBB tuaj, p.sh. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Opsionet e vendodhjes',
	'RANKS_PATH'				=> 'Vendodhja e ruajtjes së imazheve të rangjeve',
	'RANKS_PATH_EXPLAIN'		=> 'Vendodhja në direktorinë e phpBB tuaj, p.sh. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Vendodhja e Script-it',
	'SCRIPT_PATH_EXPLAIN'		=> 'Vendodhja e phpBB relative me domeinin tuaj, p.sh. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Emri i domeinit',
	'SERVER_NAME_EXPLAIN'		=> 'Emri i domeinit në të cilin ky bord funksionon (për shembull: <samp>www.shembull.com</samp>).',
	'SERVER_PORT'				=> 'Porta e serverit',
	'SERVER_PORT_EXPLAIN'		=> 'Porta në të cilin funksionon serveri juaj, zakonisht 80, Ndrysho vetëm nëse porta është shifër tjetër.',
	'SERVER_PROTOCOL'			=> 'Protokolli i serverit',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Kjo përdoret si protokoll i serverit nëse opsionet janë të detyruara. Nëse bosh ose jo të forcuara, protokolli përcaktohet nga opsionet e sigurta të "cookies" (<samp>http://</samp> ose <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Opsionet e URL të serverit',
	'SMILIES_PATH'				=> 'Vendodhja e ruajtjes së buzëqeshjeve',
	'SMILIES_PATH_EXPLAIN'		=> 'Vendodhja në direktorinë e phpBB tuaj, p.sh. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Vendodhja e ruajtjes së ikonave të grupeve',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Vendodhja në direktorinë e phpBB tuaj, p.sh. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Këtu mund të përcaktoni opsionet e lidhura me seksionet dhe identifikimin.',
	
	'ALL'							=> 'Të gjitha',
	'ALLOW_AUTOLOGIN'				=> 'Lejo lidhjet automatike',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Përcakton nëse mund të jepet mundësia e identifikimit automatik kur përdoruesit vizitojnë bordin.',
	'AUTOLOGIN_LENGTH'				=> 'Kohëzgjatja e lidhjes automatike (në ditë)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Numri i ditëve pas të cilave skadon seksioni i lidhjes automatike. Vendos 0 për të ç\'aktivizuar.',
	'BROWSER_VALID'					=> 'Vlerëso shfletuesin',
	'BROWSER_VALID_EXPLAIN'			=> 'Aktivizon vlerësimin e shfletuesit për çdo seksion duke shtuar sigurinë.',
	'CHECK_DNSBL'					=> 'Kontrollo IP nëpërmjet DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'Nëse aktivizohet, adresa IP e përdoruesve kontrollohet nëpërmjet shërbimeve DNSBL në regjistrim dhe postime: <a href="http://spamcop.net">spamcop.net</a> dhe <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Ky kërkim mund të zgjasë pak, në varësi të konfigurimit të serverit. Nëse vihet re ngadalësim ose shumë pozitive fallco të raportuara, rekomandohet ç\'aktivizimi i kontrollit.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kontrollo domeinin e e-mail për MX të vlefshme',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Nëse aktivizohet, domeini i e-mail i shkruar gjatë regjistrimit dhe ndryshimit të profilit kontrollohet për MX të vlefshme.',
	'FORCE_PASS_CHANGE'				=> 'Detyro ndryshimin e fjalëkalimit',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'I kërkon përdoruesve të ndryshojnë fjalëkalimin e tyre pas një numri ditësh të caktuar. Vendosja e kësaj vlere 0 do të ç\'aktivizojë funksionin.',
	'FORM_TIME_MAX'					=> 'Koha maksimale për dërgimin e formave',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Koha që ka një përdorues për të dërguar një formë. Përdor -1 për të ç\'aktivizuar. Vini re që forma do të jetë e pavlefshme nëse koha skadon, si pasojë e opsioneve.',
	'FORM_SID_GUESTS'				=> 'Bashkangjit modulet seksionit të përdoruesit',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Nëse aktivizohet, modulet e dhëna përdoruesve do të jenë session-exclusive. Kjo mund të krijojë probleme me disa ISP.',
	'FORWARDED_FOR_VALID'			=> 'Vlerësimi i kreut <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Seksionet do të vazhdohen vetëm nëse kreu i transmetuar <var>X_FORWARDED_FOR</var> është i njëjtë me ata të dhënë në kërkesat e mëparshme. Përjashtimet do të kontrollohen nëpërmjet IP në <var>X_FORWARDED_FOR</var> gjithashtu.',
	'IP_VALID'						=> 'Seksioni i vlerësimit të IP',
	'IP_VALID_EXPLAIN'				=> 'Përcakton sa nga IP e përdoruesve përdoren për të vlerësuar një seksion; <samp>E gjitha</samp> krahason adresën e plotë, <samp>A.B.C</samp> x.x.xe para, <samp>A.B</samp> x.x e para, <samp>Asnje</samp> ç\'aktivizon kontrollin. Në adresat IPv6 <samp>A.B.C</samp> krahason katër blloqet e para dhe <samp>A.B</samp> tre blloqet e para.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Numri maksimal i tentativave për identifikim',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Pas këtij numri identifikimesh të gabuara, përdoruesit i duhet të konfirmojë identifikimin vizual (Konfirmimi Vizual).',
	'NO_IP_VALIDATION'				=> 'Asnjë',
	'NO_REF_VALIDATION'				=> 'Asnjë',
	'PASSWORD_TYPE'					=> 'Kompleksiteti i fjalëkalimit',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Përcakton sa kompleks duhet të jetë një fjalëkalim kur vendoset ose ndryshohet.',
	'PASS_TYPE_ALPHA'				=> 'Duhet të përmbajë shkronja dhe numra',
	'PASS_TYPE_ANY'					=> 'Asnjë e kërkuar',
	'PASS_TYPE_CASE'				=> 'Duhet të përmbajë shkronja të mëdha e të vogla',
	'PASS_TYPE_SYMBOL'				=> 'Duhet të përmbajë simbole',
	'REF_HOST'						=> 'Vlerëso vetëm hostin',
	'REF_PATH'						=> 'Gjithashtu vlerëso vendodhjen',
	'REFERER_VALID'					=> 'Vlerëso Referer',
	'REFERER_VALID_EXPLAIN'			=> 'Nëse aktivizohet, referer i kërkesave të postimeve do të kontrollohet nëpërmjet vendodhjes së opsioneve të host/script. Ky mund të jetë shkak i gabimeve me borde që përdorin disa domeine dhe/ose identifikime nga jashtë.',
	'TPL_ALLOW_PHP'					=> 'Lejo php në stile',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Nëse ky opsion aktivizohet, deklarimet <code>PHP</code> dhe <code>INCLUDEPHP</code> do të njihen dhe do të shfaqen në maska.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Ky informacion përdoret kur bordi u dërgon e-mail përdoruesve. Ju lutemi që të siguroheni që adresa e-mail që specifikoni të jetë e vlefshme, pasi çdo mesazh i padorëzuar do të dërgohet në atë adresë. Nëse hosti juaj nuk ofron shërbim e-mail, ju mund të përdorni SMTP. Kjo kërkon adresën e një serveri të përshtatshëm (pyesni provaiderin tuaj). Nëse serveri kërkon autentikim (vetëm nëse kërkon) shkruani pseudonimin e kërkuar, fjalëkalimin dhe mënyrën e autentikimit.',
	
	'ADMIN_EMAIL'					=> 'Adresa e kthimit të e-mail',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Kjo do të përdoret si adresa e kthimit për të gjitha e-mail si dhe për kontakt teknik. Do të përdoret gjithnjë si adresa e<samp>Kthimit</samp> dhe <samp>Dërgimit</samp> të e-mail.',
	'BOARD_EMAIL_FORM'				=> 'Dërgimi i e-mail nëpërmjet bordit nga përdoruesit',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Në vend që të tregohet adresa e-mail e përdoruesve. këta mund të dërgojnë e-mail nëpërmjet bordit.',
	'BOARD_HIDE_EMAILS'				=> 'Fshih adresat e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ky funksion mban adresat e-mail të fshehura.',
	'CONTACT_EMAIL'					=> 'Adresa e-mail e kontaktit',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Kjo adresë do të përdoret në çdo rast që do të nevojitet kontaktimi i bordit, p.sh. spam, gabime, etj. Do të përdoret gjithmonë si adresë në e-mail <samp>Nga</samp> dhe <samp>Përgjigju</samp>.',
	'EMAIL_FUNCTION_NAME'			=> 'Emri i funksionit e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Funksioni e-mail qe do te perdoret per te derguar e-mail nepermjet PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Masa e paketave e-mail',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Ky është numri maksimal i e-mail që do dërgohen në një paketë. Këto opsione u aplikohen mesazheve të brendshme; Vendos këtë vlerë 0 nëse keni probleme me dorëzimet e e-mail.',
	'EMAIL_SIG'						=> 'Firma e e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Ky tekst do u bashkangjitet të gjithë e-mail që dërgon ky bord.',
	'ENABLE_EMAIL'					=> 'Aktivizo dërgimin e e-mail nga bordi',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Nëse ç\'aktivizohet, asnjë e-mail nuk do të dërgohet nga bordi.',
	'SMTP_AUTH_METHOD'				=> 'Mënyra e autentikimit për SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Përdoret vetëm nëse vendoset pseudonim/fjalëkalim.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'Identifikimi',
	'SMTP_PASSWORD'					=> 'Fjalëkalimi SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Shkruaj fjalëkalimin vetëm nëse serveri SMTP e kërkon.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Porta e serverit SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Ndryshoni vetëm nëse e dini që porta e serverit SMTP është ndryshe.',
	'SMTP_SERVER'					=> 'Adresa e serverit SMTP',
	'SMTP_SETTINGS'					=> 'Opsionet SMTP',
	'SMTP_USERNAME'					=> 'Pseudonimi SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Shkruaj pseudonimin vetëm nëse serveri SMTP e kërkon.',
	'USE_SMTP'						=> 'Përdor serverin SMTP për e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Zgjidhni “Po” nëse doni të dërgoni e-mail nëpërmjet një serveri të emërtuar në vend të funksionit lokal.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Këtu mund të aktivizoni dhe kontrolloni përdorimin e Jabber për mesazhe momentale dhe lajmërime. Jabber është një protokoll burim i hapur kështu që është i përdorshëm nga të gjithë. Disa server Jabber përfshijnë hyrje ose transporte të cilat ju mundësojnë të kontaktoni përdorues në rrjete të tjera. Sigurohuni të shkruani detaje llogarie të krijuar - phpBB do të përdorë detajet ashtu siç i shkruani.',
	
	'JAB_ENABLE'				=> 'Aktivizo Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Aktivizo përdorimin e mesazheve dhe lajmërimeve Jabber.',
	'JAB_GTALK_NOTE'			=> 'Vini re që GTalk nuk do të funksionojë sepse funksioni <samp>dns_get_record</samp> nuk mund të gjëndet. Ky funksion nuk është i disponueshëm në PHP4, dhe nuk ekzekutohet në platformat Windows. Për momentin nuk funksionon në BSD-based systems, duke përfshirë Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Masa e paketës Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Ky është numri i mesazheve të dërguara në një paketë. Nëse vendoset 0 mesazhi dërgohet menjëherë dhe nuk mund të vihet në pritje për t\'u dërguar më vonë.',
	'JAB_PASSWORD'				=> 'Fjalëkalimi Jabber',
	'JAB_PORT'					=> 'Porta Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Lini bosh, vetëm nëse e dini që nuk është porta 5222.',
	'JAB_SERVER'				=> 'Serveri Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Shiko në %sjabber.org%s për një listë serverash.',
	'JAB_SETTINGS_CHANGED'		=> 'Opsionet e Jabber u ndryshuan me sukses.',
	'JAB_USE_SSL'				=> 'Përdor SSL për t\'u lidhur',
	'JAB_USE_SSL_EXPLAIN'		=> 'Nëse aktivizohet, do mundohet të kryhet një lidhje e sigurtë. Porta Jabber do të modifikohet në 5223 nëse është specifikuar 5222.',
	'JAB_USERNAME'				=> 'Pseudonimi Jabber ose JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Specifiko një pseudonim të regjistruar ose një JID të vlefshme. Pseudonimet nuk do të kontrollohen për vlefshmërinë e tyre. Nëse ju vetëm specifikoni një fjalëkalim, atherë JID juaj do të jetë pseudonimi. Specifiko një JID të vlefshme, për shëmbull përdorues@jabber.org.',
));

?>