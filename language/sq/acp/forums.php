<?php
/**
*
* acp_forums.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-06 - www.dea-portal.com
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Fshirja automatike e postimeve sipas moshës',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Numri i ditëve që nga postimi i fundit, pas të cilave tema do të fshihet.',
	'AUTO_PRUNE_FREQ'			=> 'Frekuenca e fshirjeve automatike',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Koha në ditë ndërmjet fshirjeve automatike.',
	'AUTO_PRUNE_VIEWED'			=> 'Fshirja automatike e postimeve sipas shikimit',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Numri i ditëve që nga shikimi i fundit, pas të cilit tema do të fshihet.',
	
	'COPY_PERMISSIONS'				=> 'Kopjo të drejtat nga',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Pasi të krijohet, forumi do të ketë të njëjtat të drejta me forumin e zgjedhur këtu. Nëse nuk zgjidhet asnjë forum, forumi i sapokrijuar nuk do të jetë i shikueshëm nga asnjë deri sa t\'i caktohen të drejtat.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Nëse zgjidhni të kopjoni të drejtat, forumi do të ketë të njëjtat të drejta me atë të zgjedhur këtu. Kjo do të mbivendosë çdo të drejtë që ju keni vendosur për këtë forum me ato të forumit të zgjedhur këtu. Nëse nuk zgjidhet ndonjë forum, do të mbahen të drejtat e tanishme.',
	'CREATE_FORUM'					=> 'Krijo forum të ri',
	
	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Fshi ose lëviz përmbajtjen në forumin',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Fshi ose lëviz nënforumet në forumin',
	'DEFAULT_STYLE'						=> 'Stili i paracaktuar',
	'DELETE_ALL_POSTS'					=> 'Fshi postimet',
	'DELETE_SUBFORUMS'					=> 'Fshi nënforumet dhe postimet',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktivizo temat aktive',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Nëse vendoset po, temat aktive në nënforumet e zgjedhur do të shfaqen nën këtë kategori.',
	
	'EDIT_FORUM'					=> 'Modifiko forum',
	'ENABLE_INDEXING'				=> 'Aktivizo indeksin e kërkimit',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Nëse vendoset po, postimet e bëra në këtë forum do të indeksohen për kërkim.',
	'ENABLE_POST_REVIEW'			=> 'Aktivizo rishikimin e postimit',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Nëse vendoset po, përdoruesit mund të rishikojnë postimet e tyre nëse postime të reja janë bërë në temë gjatë kohës që përdoruesit shkruanin të tyret. Ky funksion duhet të ç\'aktivizohet për forumet chat.',
	'ENABLE_RECENT'					=> 'Shfaq temat aktive',
	'ENABLE_RECENT_EXPLAIN'			=> 'Nëse vendoset po, temat e bëra në këtë forum do të shfaqen në listën e temave aktive.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktivizo ikonat e temave',
	
	'FORUM_ADMIN'						=> 'Administrimi i forumeve',
	'FORUM_ADMIN_EXPLAIN'				=> 'Në phpBB3 nuk ka kategori, çdo gjë bazohet në forum. Çdo forum mund të ketë një numër të pakufizuar nënforumesh dhe ju mund të vendosni se në cilin prej tyre mund të postohet dhe në cilin jo  (p.sh. nëse shfaqet si kategori e vjetër). Këtu ju mund të shtoni, modifikoni, fshini, mbyllni, rihapni forume individuale dhe gjithashtu mund të vendosni një kontroll të caktuar. Nëse postimet dhe temat tuaja janë të pasinkronizuara, ju mund të risinkronizoni një forum. <strong>Ju duhet të kopjoni ose vendosni të drejtat e përshtatshme për forumet e rinj të krijuar që ata të shfaqen.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktivizo fshirjen automatike',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Pastron forumin nga temat. Përcaktoni parametrat e frekuencës/moshës më poshtë.',
	'FORUM_CREATED'						=> 'Forumi u krijua me sukses.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametrat e fshirjes automatike nuk mund të jenë negative.',
	'FORUM_DESC_TOO_LONG'				=> 'Përshkrimi i forumit është shumë i gjatë; duhet të jetë më pak se 4000 karaktere.',
	'FORUM_DELETE'						=> 'Fshi forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Mënyra e mëposhte ju mundëson të fshini një forum. Nëse në forum mund të postohet, ju mund të vendosni ku doni të vendosni të gjitha temat (ose forumet) që përmban.',
	'FORUM_DELETED'						=> 'Forumi u fshi me sukses.',
	'FORUM_DESC'						=> 'Përshkrimi',
	'FORUM_DESC_EXPLAIN'				=> 'Çdo HTML do të shfaqet siç është.',
	'FORUM_EDIT_EXPLAIN'				=> 'Mënyra e mëposhtme ju mundëson të personalizoni këtë forum. Vini re që moderimi dhe kontrolli i numërimit të postimeve vendosen nëpërmjet të drejtave të forumit për çdo përdorues ose grup përdoruesish.',
	'FORUM_IMAGE'						=> 'Imazhi i forumit',
	'FORUM_IMAGE_EXPLAIN'				=> 'Vendodhja relative me direktorinë phpBB e nje imazhi që do të përshtatet me forumin.',
    'FORUM_IMAGE_NO_EXIST'            	=> 'Imazhi i specifikuar i forumit nuk ekziston',
	'FORUM_LINK_EXPLAIN'				=> 'URL e plotë (përfshirë protokollin, p.sh.: <samp>http://</samp>) për në vendodhjen destinacion ku do të dërgohet përdoruesi nëse klikon, p.sh.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Gjurmo ridrejtimet e link',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Regjistron numrin sa herë është klikuar një link i forumit.',
	'FORUM_NAME'						=> 'Emri i forumit',
	'FORUM_NAME_EMPTY'					=> 'Ju duhet të vendosni një emër për këtë forum.',
	'FORUM_PARENT'						=> 'Forum në varësi të',
	'FORUM_PASSWORD'					=> 'Fjalëkalimi i forumit',
	'FORUM_PASSWORD_CONFIRM'			=> 'Konfirmo fjalëkalimin e forumit',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Duhet të shkruhet vetëm nëse është vendosur një fjalëkalimim për forumin.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Përcakton një fjalëkalim për këtë forum, përdorni sistemin e të drejtave sipas pereferencave.',
	'FORUM_PASSWORD_UNSET'				=> 'Hiq fjalëkalimin e forumit',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Zgjidhni këtë për të hequr fjalëkalimin e forumit.',
	'FORUM_PASSWORD_OLD'				=> 'Fjalëkalimi i forumit po përdor një kodim të vjetër dhe duhet të ndryshohet.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Fjalëkalimi që shkruat nuk përputhet.',
	'FORUM_PRUNE_SETTINGS'				=> 'Opsionet e fshirjes automatike të forumeve',
	'FORUM_RESYNCED'					=> 'Forumi “%s” u sinkronizua me sukses',
	'FORUM_RULES_EXPLAIN'				=> 'Rregullat e forumit shfaqen në çdo faqe të forumit ku caktohen.',
	'FORUM_RULES_LINK'					=> 'Link për tek rregullat e forumit',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Ju mund të shkruani URL të faqes/postimit që përmban rregullat e forumit tuaj, këtu. Ky opsion do të mbivendosë rregullat e forumit që ju specifikuat.',
	'FORUM_RULES_PREVIEW'				=> 'Rishikimi i rregullave të forumit',
	'FORUM_RULES_TOO_LONG'				=> 'Rregullat e forumit duhet të përmbajnë më pak se 4000 karaktere.',
	'FORUM_SETTINGS'					=> 'Opsionet e forumit',
	'FORUM_STATUS'						=> 'Gjendja e forumit',
	'FORUM_STYLE'						=> 'Stili i forumit',
	'FORUM_TOPICS_PAGE'					=> 'Tema për faqe',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Nëse shifër e ndryshme nga zero, vlera do të mbivendosë opsionin e paracaktuar të temave për faqe.',
	'FORUM_TYPE'						=> 'Lloji i forumit',
	'FORUM_UPDATED'						=> 'Informacioni i forumit u azhornua me sukses.',
	
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Ju doni të ndryshoni një forum të postueshëm dhe që ka nënforume, në një link. Ju lutemi të lëvizni të gjithë nën forumet nga ky forum përpara se të vazhdoni, sepse pas ndryshimit në një link, ju nuk mund të shikoni korrektesisht nënforumet e lidhur më këtë forum.',
	
	'GENERAL_FORUM_SETTINGS'	=> 'Opsionet gjenerale të forumit',
	
	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'Shfaq nënforumin në legjendën e forumit',
	'LIST_INDEX_EXPLAIN'		=> 'Shfaq këtë forum në faqen kryesore dhe kudo si një link në legjendën e forumit në varësi të të cilit është nëse opsioni “Shfaq nënforumet në legjendë” është i aktivizuar.',
	'LIST_SUBFORUMS'			=> 'Shfaq nënforumet në legjendë',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Shfaq nënforumet e forumit në faqen kryesore dhe kudo si një link në legjendën e tyre nëse opsioni “Shfaq nënforumin në legjendën e forumit” është i aktivizuar.',
	'LOCKED'					=> 'Mbyllur',
	
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forumi që zgjodhët për të lëvizur postimet nuk është i postueshëm. Ju lutemi të zgjidhni nje forum të postueshëm.',
	'MOVE_POSTS_TO'					=> 'Lëviz postimet në',
	'MOVE_SUBFORUMS_TO'				=> 'Lëviz nënforumet në',
	
	'NO_DESTINATION_FORUM'			=> 'Ju nuk specifikuat një forum ku të lëvizni përmbajtjen.',
	'NO_FORUM_ACTION'				=> 'Asnjë veprim i përcaktuar për atë që do të bëhet me përmbajtjen e forumit.',
	'NO_PARENT'						=> 'I pavarur',
	'NO_PERMISSIONS'				=> 'Mos kopjo të drejtat',
	'NO_PERMISSION_FORUM_ADD'		=> 'Ju nuk keni të drejtat e përshtatshme për të shtuar forume.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Ju nuk keni të drejtat e përshtatshme për të fshirë forume.',
	
	'PARENT_IS_LINK_FORUM'		=> 'Varësia që specifikuat është një forum link. Forumet link nuk mund të mbajnë forume të tjerë; Ju lutemi të caktoni një kategori ose forum si forum vartës.',
	'PARENT_NOT_EXIST'			=> 'Vartësi nuk ekziston.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Fshirja automatike e shtojcave',
	'PRUNE_STICKY'				=> 'Fshirja automatike e kryetemave',
	'PRUNE_OLD_POLLS'			=> 'Fshirja automatike e sondazheve të vjetër',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Fshin temat me sondazhe të pavotuar dhe postime të vjetra.',
	
	'REDIRECT_ACL'	=> 'Tani ju mund të %scaktoni të drejtat%s për këtë forum.',
	
	'SYNC_IN_PROGRESS'			=> 'Duke sinkronizuar forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Duke sinkronizuar harkun e temave %1$d/%2$d.',
	
	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',
	
	'UNLOCKED'			=> 'Jo i mbyllur',
));

?>