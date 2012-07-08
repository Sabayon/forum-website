<?php
/**
*
* memberlist.php [Shqip Albanian]
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
	'ABOUT_USER'			=> 'Profili',
	'ACTIVE_IN_FORUM'		=> 'Më aktiv në forumin',
	'ACTIVE_IN_TOPIC'		=> 'Më aktiv në temën',
	'ADD_FOE'				=> 'Shto armik',
	'ADD_FRIEND'			=> 'Shto mik',
	'AFTER'					=> 'Pas',
	
	'ALL'					=> 'Të gjitha',
	
	'BEFORE'				=> 'Përpara',
	
	'CC_EMAIL'				=> 'Dërgo nje kopje të këtij  e-mail vetes tënde.',
	'CONTACT_USER'			=> 'Kontakto',
	
	'DEST_LANG'				=> 'Gjuha',
	'DEST_LANG_EXPLAIN'		=> 'Zgjidh një gjuhë të përshtatshme (nëse e mundur) për marrësin e këtij mesazhi.',
	
	'EMAIL_BODY_EXPLAIN'	=> 'Ky mesazh do dërgohet si tekst i thjeshtë, mos përfshi HTML ose BBCode. Adresa e kthimit për këtë mesazh do të vendoset adresa juaj e e-mail.',
	'EMAIL_DISABLED'		=> 'Më vjen keq por të gjithë funksionet e lidhura me e-mail janë ç\'aktivizuar.',
	'EMAIL_SENT'			=> 'E-mail u dërgua.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Ky mesazh do të dërgohet si tekst i thjeshtë, mos përfshi HTML ose BBCode. Ju lutem vini re që informacioni i temës është tashmë i pëfshirë në mesazh. Adresa e kthimit për këtë mesazh do të vendoset adresa juaj e e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Ju duhet të keni një adresë e-mail të vlefshme për marrësin e e-mail.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Ju duhet të shkruani një mesazh për të dërguar e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Ju duhet të shkruani një mesazh që të dërgohet.',
	'EMPTY_NAME_EMAIL'		=> 'Ju duhet të shkruani emrin e vërtetë të marrësit.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Ju duhet të specifikoni një subjekt për e-mail.',
	'EQUAL_TO'				=> 'Barabart me',
	
	'FIND_USERNAME_EXPLAIN'	=> 'Përdorni këtë formë për antarë të specifikuar. Nuk është e nevojshme të mbushni të gjitha fushat. Për të përputhur të dhëna të pjesshme përdor * si Joly/wildcard. Për të shkruar datë pëerdorni formatin <kbd>YYYY-MM-DD</kbd>, prsh. <samp>2004-02-29</samp>. Zgjidh kutizat për të selektuar një ose më shumë përdorues (pseudonime te ndryshëm mund të pranohen në varësi te vetë formës) dhe kliko tek Zgjidh Butonat e Selektuar për të kaluar ne formën e mëparshme.',
	'FLOOD_EMAIL_LIMIT'		=> 'Ju nuk mund të dërgoni e-mail këtë herë. Ju lutem provoni më vonë.',
	
	'GROUP_LEADER'			=> 'Lideri i Grupit',
	
	'HIDE_MEMBER_SEARCH'	=> 'Fshih kërkimin e anëtarëve',
	
	'IM_ADD_CONTACT'		=> 'Shto kontakt',
	'IM_AIM'				=> 'Ju lutem vini re që ju duhet të keni "AOL Instant Messenger" të instaluar për të përdorur këtë.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Aplikacion shkarkimi',
	'IM_ICQ'				=> 'Ju lutemi, vini re që përdoruesit mund të kenë zgjedhur të mos marrin mesazhe instante.',
	'IM_JABBER'				=> 'Ju lutemi, vini re që përdoruesit mund të kenë zgjedhur të mos marrin mesazhe instante.',
	'IM_JABBER_SUBJECT'		=> 'Ky është një mesazh automatik, ju lutem mos u përgjigjni! Mesazh nga përdoruesi %1$s më %2$s.',
	'IM_MESSAGE'			=> 'Mesazhi juaj',
	'IM_MSNM'				=> 'Ju lutem vini re që ju duhet të keni  "Windows Messenger" të instaluar për të përdorur këtë.',
	'IM_MSNM_BROWSER'		=> 'Shfletuesi juaj nuk e suporton këtë.',
	'IM_MSNM_CONNECT'		=> 'MSNM nuk është lidhur.\\nJu duhet të lidheni me MSNM për të vazhduar.',
	'IM_NAME'				=> 'Emri Juaj',
	'IM_NO_DATA'			=> 'Nuk ka informacion mbi kontaktin te përshtatshëm për këtë përdorues.',
	'IM_NO_JABBER'			=> 'Më vjen keq, mesazhimi i drejtpërdrejtë nuk suportohet nga ky server. Ju duhet një "Jabber client" i instaluar në sistemin tuaj për të kontaktuar me palën tjetër.',
	'IM_RECIPIENT'			=> 'Marrësi',
	'IM_SEND'				=> 'Dërgo mesazh',
	'IM_SEND_MESSAGE'		=> 'Dergo mesazhe',
	'IM_SENT_JABBER'		=> 'Mesazhi juaj për %1$s u dëgua me sukses.',
	'IM_USER'				=> 'Dërgo një mesazh të drejtpërdrejtë',
	
	'LAST_ACTIVE'				=> 'I fundit aktiv',
	'LESS_THAN'					=> 'Më pak se',
	'LIST_USER'					=> '1 përdorues',
	'LIST_USERS'				=> '%d përdorues',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Bordi kërkon që ju të jeni i regjistruar dhe i identifikuar për të parë renditjen e skuadrës.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Bordi kërkon që ju të jeni i regjistruar dhe i identifikuar për të parë listën e antarëve.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Bordi kërkon që ju të jeni i regjistruar dhe i identifikuar për të kërkuar përdorues.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Bordi kërkon që ju të jeni i regjistruar dhe i identifikuar për të parë profilet.',
	
	'MORE_THAN'				=> 'Më tepër se',
	
	'NO_EMAIL'				=> 'Nuk ju lejohet t\'i dërgoni e-mail këtij përdoruesi.',
	'NO_VIEW_USERS'			=> 'Nuk jeni i autorizuar të shikoni listën e profileve të antarëve.',
	
	'ORDER'					=> 'Rendit',
	'OTHER'					=> 'Tjetër',
	
	'POST_IP'				=> 'Postuar nga IP/domain',
	
	'RANK'					=> 'Grada',
	'REAL_NAME'				=> 'Emri i marrësit',
	'RECIPIENT'				=> 'Marrësi',
	'REMOVE_FOE'			=> 'Hiq armik',
	'REMOVE_FRIEND'			=> 'Hiq mik',
	
	'SEARCH_USER_POSTS'		=> 'Kërko foto të përdoruesit',
	'SELECT_MARKED'			=> 'Select marked',
	'SELECT_SORT_METHOD'	=> 'Zgjidh mënyren e shortit',
	'SEND_AIM_MESSAGE'		=> 'Dërgo mesazh AIM',
	'SEND_ICQ_MESSAGE'		=> 'Dërgo mesazh ICQ',
	'SEND_IM'				=> 'Mesazhim i drejtpërdrejtë',
	'SEND_JABBER_MESSAGE'	=> 'Dërgo mesazh Jabber',
	'SEND_MESSAGE'			=> 'Mesazh',
	'SEND_MSNM_MESSAGE'		=> 'Dërgo mesazh MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Dërgo mesazh YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'I fundit aktiv',
	'SORT_POST_COUNT'		=> 'Numratori i postimeve',
	
	'USERNAME_BEGINS_WITH'	=> 'Pseudonimi fillon me',
	'USER_ADMIN'			=> 'Administro anëtar',
	'USER_BAN'				=> 'Përjashtimet',
	'USER_FORUM'			=> 'Statistikat e antarit',
	'USER_ONLINE'			=> 'Në linjë',
	'USER_PRESENCE'			=> 'Prezenca e bordit',
	
	'VIEWING_PROFILE'		=> 'Duke parë profilin - %s',
	'VISITED'				=> 'Vizita e fundit',
	
	'WWW'					=> 'Website',
));

?>