<?php
/**
*
* posting.php [Shqip Albanian]
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
	'ADD_ATTACHMENT'			=> 'Ngarko skedarë',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Nëse doni të bashkangjisni një ose më shumë skedarë, fusni te dhënat më poshtë.',
	'ADD_FILE'					=> 'Shto skedar',
	'ADD_POLL'					=> 'Krijo sondazh',
	'ADD_POLL_EXPLAIN'			=> 'Nëse nuk dëshironi të shtoni një sondazh në temën tuaj lërini fushat bosh.',
	'ALREADY_DELETED'			=> 'Më vjen keq por ky mesazh është fshirë tashmë.',
	'ATTACH_QUOTA_REACHED'		=> 'Më vjen keq, ju keni arritur limitin e kuotes së shtojcave.',
	'ATTACH_SIG'				=> 'Bashkangjit firmën (firma mund të modifikohet tek profili)',
	
	'BBCODE_A_HELP'				=> 'Shtojca të brëndshme të ngarkuara: [attachment=]emërskedari.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tekst Bold: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Shfaq kod: [code]kodi[/code]',
	'BBCODE_E_HELP'				=> 'List: Shto element në listë',
	'BBCODE_F_HELP'				=> 'Madhësia e shkrimit: [size=85]tekst i vogël[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s është <em>Mbyllur</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s është <em>Hapur</em>',
	'BBCODE_I_HELP'				=> 'Tekst Italic: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'List: [list]tekst[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Lista e elementeve: [*]tekst[/*]',
	'BBCODE_O_HELP'				=> 'Listë e renditur: [list=]tekst[/list]',
	'BBCODE_P_HELP'				=> 'Shto imazh: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Cito tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Ngjyra e shkrimit: [color=red]tekst[/color]  Këshillë: gjithashtu mund të përdorni color=#FF0000',
	'BBCODE_U_HELP'				=> 'Nënvizo tekstin: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'Shto URL: [url]http://url[/url] or [url=http://url]URL tekst[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=gjerësi,lartësi]http://url[/flash]',
	'BUMP_ERROR'				=> 'Ju nuk mund të lëvizni sipër këtë temë kaq shpejt pas postimit të fundit.',
	
	'CANNOT_DELETE_REPLIED'		=> 'Më vjen keq, ju mund të fshini vetëm postimet që nuk u janë përgjigjur.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ky postim është mbyllur. Ju nuk mund të modifikoni këtë postim.',
	'CANNOT_EDIT_TIME'			=> 'Ju nuk mund të redaktoni ose të fshini këtë postim.',
	'CANNOT_POST_ANNOUNCE'		=> 'Më vjen keq por ju nuk mund të postoni Lajmërime.',
	'CANNOT_POST_STICKY'		=> 'Më vjen keq por ju nuk mund të postoni Kryetema.',
	'CHANGE_TOPIC_TO'			=> 'Ndrysho llojin e temës në',
	'CLOSE_TAGS'				=> 'Mbyllë etiketë',
	'CURRENT_TOPIC'				=> 'Tema aktuale',
	
	'DELETE_FILE'				=> 'Fshi skedar',
	'DELETE_MESSAGE'			=> 'Fshi mesazh',
	'DELETE_MESSAGE_CONFIRM'	=> 'Jeni i sigurt që doni të fshini këtë mesazh?',
	'DELETE_OWN_POSTS'			=> 'Më vjen keq, ju mund të fshini vetëm mesazhet tuaja.',
	'DELETE_POST_CONFIRM'		=> 'Jeni i sigurt që doni të fshini këtë mesazh?',
	'DELETE_POST_WARN'			=> 'Nëse fshihen, mesazhet nuk mund të rikuperohen.',
	'DISABLE_BBCODE'			=> 'Ç\'aktivizo BBCode në këtë mesazh',
	'DISABLE_MAGIC_URL'			=> 'Mos shfaq automatikisht URL-të',
	'DISABLE_SMILIES'			=> 'Ç\'aktivizo figurinat',
	'DISALLOWED_CONTENT'		=> 'Ngarkimi u refuzua sepse skedari i ngarkuar u identifikua si sulm i mundshëm.',
	'DISALLOWED_EXTENSION'		=> 'Prapashtesa %s nuk lejohet.',
	'DRAFT_LOADED'				=> 'Planet e ruajtura në zonën tuaj të postimit, ju mund të dëshironi të mbaroni postimin tuaj tani.<br />Plani juaj do të fshihet pasi të dërgoni këtë mesazh.',
	'DRAFT_LOADED_PM'			=> 'Planet e ruajtura në zonën tuaj të postimit, ju mund të dëshironi të mbaroni mesazhin privat tani.<br />Plani juaj do të fshihet pasi të dërgoni këtë mesazh privat.',
	'DRAFT_SAVED'				=> 'Plani u ruajt me sukses.',
	'DRAFT_TITLE'				=> 'Titulli i planit',
	
	'EDIT_REASON'				=> 'Arsyeja për modifikimin e postimit',
	'EMPTY_FILEUPLOAD'			=> 'Dosja e shtuar është bosh.',
	'EMPTY_MESSAGE'				=> 'Ju duhet të shkruani një mesazh në postim.',
	'EMPTY_REMOTE_DATA'			=> 'Skedari nuk mund të ngarkohet, ju lutem provoni të ngarkoni skedarin manualisht.',
	
	'FLASH_IS_OFF'				=> '[flash] është <em>Mbyllur</em>',
	'FLASH_IS_ON'				=> '[flash] është <em>Hapur</em>',
	'FLOOD_ERROR'				=> 'Ju nuk mund të bëni një postim tjetër kaq shpejt pas postimit të fundit.',
	'FONT_COLOR'				=> 'Ngjyra e shkrimit',
	'FONT_COLOR_HIDE'			=> 'Mos shfaq ngjyrën e shkrimit',
	'FONT_HUGE'					=> 'Madhështor',
	'FONT_LARGE'				=> 'I madh',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Masa e tekstit',
	'FONT_SMALL'				=> 'I vogël',
	'FONT_TINY'					=> 'i vockël',
	
	'GENERAL_UPLOAD_ERROR'		=> 'Nuk mund të ngarkohej shtojca %s.',
	
	'IMAGES_ARE_OFF'			=> '[img] është <em>Mbyllur</em>',
	'IMAGES_ARE_ON'				=> '[img] është <em>Hapur</em>',
	'INVALID_FILENAME'			=> '%s është një emer skedari invalid.',
	
	'LOAD'						=> 'Kariko',
	'LOAD_DRAFT'				=> 'Kariko plan',
	'LOAD_DRAFT_EXPLAIN'		=> 'Këtu ju mund te zgjidhni planin që doni të vazhdoni të shkruani. Postimi juaj i tanishëm do të hiqet, të gjitha përmbjtjet e postimeve të tanishme do të fshihen. Shiko, modifiko dhe fshi planet nëpërmjet Kontrollit te Panelit tuaj.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Ju duhet të identifikoheni që të lëvizni sipër temat në forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Ju duhet të identifikoheni që të fshini postimet në forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Ju duhet të identifikoheni që të postoni në forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Ju duhet të identifikoheni që të citoni postimet në forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Ju duhet të identifikoheni që t\'u përgjigjeni temave në forum.',
	
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Ju mund të përdorni shkrimet deri në masën %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Skedaret tuaj flash mund të jenë deri në %1$d piksel të larta.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Skedaret tuaj flash mund të jenë deri në %1$d piksels të gjera.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Imazhet tuaja mund të jenë deri në %1$d piksel lartësi.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Imazhet tuaja mund të jenë deri në %1$d piksel gjerësi.',
	
	'MESSAGE_BODY_EXPLAIN'		=> 'Shkruani mesazhin tuaj këtu, nuk mund të ketë më tepër se <strong>%d</strong> karaktere.',
	'MESSAGE_DELETED'			=> 'Ky mesazh u fshi me sukses.',
	'MORE_SMILIES'				=> 'Shiko më shumë buzëqeshje',
	
	'NOTIFY_REPLY'				=> 'Më njofto kur dikush përgjigjet',
	'NOT_UPLOADED'				=> 'Skedari nuk mund të ngarkohet.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Ju nuk mund të fshini opsionet e sondazhit ekzistues.',
	'NO_PM_ICON'				=> 'Nuk ka ikonë MP',
	'NO_POLL_TITLE'				=> 'Duhet të shkruani një titull për sondazhin.',
	'NO_POST'					=> 'Postimi i kërkuar nuk ekziston.',
	'NO_POST_MODE'				=> 'Mënyra e postimit nuk është specifikuar.',
	
	'PARTIAL_UPLOAD'			=> 'Skedari i shtuar u ngarkua pjesërisht.',
	'PHP_SIZE_NA'				=> 'Masa e shtojcës është shumë e madhe.<br />Nuk mund të saktësohej masa maksimale përcaktuar nga PHP në php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Masa e shtojcës është shumë e madhe, masa maksimale është %1$d %2$s.<br />Vini re që kjo është caktuar në php.ini dhe nuk mund të shkelet.',
	'PLACE_INLINE'				=> 'Vendos përbrënda',
	'POLL_DELETE'				=> 'Fshi sondazh',
	'POLL_FOR'					=> 'Vazhdo sondazhin për',
	'POLL_FOR_EXPLAIN'			=> 'Shkruaj 0 ose lini bosh për një sondazh pa limit.',
	'POLL_MAX_OPTIONS'			=> 'Opsionet për përdorues',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ky është numri i zgjedhjeve që çdo përdorues mund të zgjedhë në votim.',
	'POLL_OPTIONS'				=> 'Opsionet e sondazhit',
	'POLL_OPTIONS_EXPLAIN'		=> 'Vendos çdo opsion në kryeradhë. Ju mund të shkruani deri në <strong>%d</strong> opsione.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Vendos çdo opsion në kryeradhë. Ju mund të shkruani deri në <strong>%d</strong> opsione. Nëse hiqni ose shtoni opsione të gjithë votimet e mëparshme do të zerohen.',
	'POLL_QUESTION'				=> 'Pyetja e sondazhit',
	'POLL_TITLE_TOO_LONG'		=> 'Titulli i sondazhit duhet të këtë më pak se 100 karaktere.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Masa e shfaqur e titullit të mesazhit tuaj është shumë e madhe, merrni në konsideratë heqjen e BBCodes ose emocioneve.',
	'POLL_VOTE_CHANGE'			=> 'Lejo rivotim',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Nëse mundësohet, përdoruesit do të kenë mundësi të ndryshojnë votën e tyre.',
	'POSTED_ATTACHMENTS'		=> 'Shtojcat e postuara',
	'POST_APPROVAL_NOTIFY'		=> 'Ju do të njoftoheni kur postimi juaj të miratohet.',
	'POST_CONFIRMATION'			=> 'Konfirmimi i postimit',
	'POST_CONFIRM_EXPLAIN'		=> 'Për të ndaluar postimet automatike, bordi ju kërkon të shkruani një kod konfirmimi. Kodi është shfaqur në imazhin që duhet të shihni më poshtë. Nëse keni probleme me shikimin ose nuk mund të lexoni këtë kod ju lutemi të kontaktoni me %sAdministratorin e Bordit%s.',
	'POST_DELETED'				=> 'Ky mesazh u fshi me sukses.',
	'POST_EDITED'				=> 'Ky mesazh u modifikua me sukses.',
	'POST_EDITED_MOD'			=> 'Ky mesazh u modifikua me sukses, por duhet të miratohet nga një moderator para se të jetë i dukshëm për publikun.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Ikonat e Postimit',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Rishiko postimin',
	'POST_REVIEW_EXPLAIN'		=> 'Të paktën një postim është bërë në këtë temë. Ju mund të doni të rishikoni postimin tuaj për këtë arsye.',
	'POST_STORED'				=> 'Mesazhi u postua me sukses.',
	'POST_STORED_MOD'			=> 'Ky mesazh u postua me sukses por duhet të miratohet nga një moderator para se të jetë i dukshëm për publikun.',
	'POST_TOPIC_AS'				=> 'Posto një temë si',
	'PROGRESS_BAR'				=> 'Shiriti i progresit',
	
	'QUOTE_DEPTH_EXCEEDED'		=> 'Ju mund të fusni vetëm %1$d citime për çdo përdorues.',
	
	'SAVE'						=> 'Ruaj',
	'SAVE_DATE'					=> 'Ruajtur tek',
	'SAVE_DRAFT'				=> 'Ruaj plan',
	'SAVE_DRAFT_CONFIRM'		=> 'Ju lutem vini re që planet e ruajtura përfshijnë vetëm subjektin dhe mesazhin, çdo element tjetër do të fshihet. Doni të ruani planin tuaj tani?',
	'SMILIES'					=> 'Buzëqeshje',
	'SMILIES_ARE_OFF'			=> 'Buzëqeshjet janë <em>Mbyllur</em>',
	'SMILIES_ARE_ON'			=> 'Buzëqeshjet janë <em>Hapur</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Koha limit për Kryetemë/Lajmërim',
	'STICK_TOPIC_FOR'			=> 'Kryetemë për',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Shkruaj 0 ose lëre bosh që të jetë gjithmonë Kryetemë/Lajmërim.',
	'STYLES_TIP'				=> 'Këshillë: Stilet mund ti aplikohen shpejt tekstit të zgjedhur.',
	
	'TOO_FEW_CHARS'				=> 'Mesazhi juaj përmban shumë pak karaktere.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Ju duhet të fusni të paktën 2 zgjedhje në sondazh.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nuk mund të shtoni një shtojcë tjetër, %d është maksimumi.',
	'TOO_MANY_CHARS'			=> 'Mesazhi juaj përmban shumë karaktere.',
	'TOO_MANY_CHARS_POST'		=> 'Mesazhi juaj përmban %1$d karaktere. Numri maksimal i karaktereve të lejuara është %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Firma juaj përmban %1$d karaktere. Numri maksimal i karaktereve të lejuara është %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Ju u munduat të fusni shumë opsione për sondazhin.',
	'TOO_MANY_SMILIES'			=> 'Mesazhi juaj përmban shumë emocione. Numri maksimal i emocioneve që mund të përdoren është %d.',
	'TOO_MANY_URLS'				=> 'Mesazhi juaj përmban shumë URL. Numri maksimal i  URL-ve të lejuara është %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Ju nuk mund të përcaktoni më tepër opsione për përdorues sesa opsionet ekzistuese të sondazhit.',
	'TOPIC_BUMPED'				=> 'Tema u lëviz me sukses',
	
	'UNAUTHORISED_BBCODE'		=> 'Ju nuk mund të përdorni disa lloje BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Për të kthyer këtë temë nga Globale në temë normale përsëri, ju duhet të zgjidhni forumin në të cilin kjo temë do të shfaqet.',
	'UPDATE_COMMENT'			=> 'Rifresko komentin',
	'URL_INVALID'				=> 'URL që ju saktësuat është e pavlefshme.',
	'URL_NOT_FOUND'				=> 'Skedari i specifikuar nuk mund të gjëndet.',
	'URL_IS_OFF'				=> '[url] është <em>Mbyllur</em>',
	'URL_IS_ON'					=> '[url] është <em>Hapur</em>',
	'USER_CANNOT_BUMP'			=> 'Ju nuk mund të lëvizni sipër tema në këtë forum.',
	'USER_CANNOT_DELETE'		=> 'Ju nuk mund të fshini postime në këtë forum.',
	'USER_CANNOT_EDIT'			=> 'Ju nuk mund  modifikoni postime në këtë forum.',
	'USER_CANNOT_REPLY'			=> 'Ju nuk mund të përgjigjeni në këtë forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Ju nuk mund të bëni postime në këtë forum për shkak të llojit të shkrimit të pa suportuar.',
	
	'VIEW_MESSAGE'				=> '%sShiko mesazhin tënd%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sShiko mesazhin tënd privat%s',
	
	'WRONG_FILESIZE'			=> 'Skedari është shumë i madh, masa maksimale e lejuar është %1d %2s.',
	'WRONG_SIZE'				=> 'Imazhi duhet të jetë të paktën %1$d pixel i gjerë, %2$d pixel i lartë dhe jo më shumë se  %3$d pixel i gjërë dhe %4$d pixel i lartë. Imazhi i dërguar është %5$d pixel i gjerë dhe %6$d pixel i lartë.',
));

?>