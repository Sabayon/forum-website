<?php
/**
*
* acp_posting.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-01 - www.dea-portal.com
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
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode është ekzekutim special i HTML që ofron kontroll të lartë mbi si dicka shfaqet. Nga kjo faqe ju mund të shtoni, fshini ose modifikoni BBCode të personalizuara.',
	'ADD_BBCODE'				=> 'Shto nje BBCode të ri',
	
	'BBCODE_ADDED'				=> 'BBCode u shtua me suskses.',
	'BBCODE_EDITED'				=> 'BBCode u modifikua me sukses.',
	'BBCODE_NOT_EXIST'			=> 'BBCode që ju zgjodhët nuk ekziston.',
	'BBCODE_HELPLINE'			=> 'Vija e ndihmës',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Kjo fushë përmban tekstin që shfaqet kur vë mausin sipër BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Teksti i vijës së ndihmës',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Ndihma që shkruajtët është shumë e gjatë.',
	
	'BBCODE_INVALID_TAG_NAME'	=> 'Emri i kllapave BBCode që ju zgjodhët është ekzistues.',
	'BBCODE_INVALID'			=> 'BBCode juaj është ndërtuar në një mënyrë të pavlefshme.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode juaj i personalizuar duhet të përmbajë kllapa në hapje dhe në mbyllje.',
	'BBCODE_TAG'				=> 'Kllapë',
	'BBCODE_TAG_TOO_LONG'		=> 'Emri që zgjodhët për kllapën është shumë i gjatë.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Përkufizimi i kllapës që specifikuat është shumë i gjatë, Ju lutemi t\'a shkurtoni.',
	'BBCODE_USAGE'				=> 'Përdorimi i BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Këtu përkufizoni si të përdoret BBCode. Zëvendësoni cdo hyrje variabël me atë korresponduese (%sshikoni më poshtë%s).',
	
	'EXAMPLE'						=> 'Shëmbull:',
	'EXAMPLES'						=> 'Shëmbuj:',
	
	'HTML_REPLACEMENT'				=> 'Zëvendësim HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Këtu paracaktoni zëvendësimin HTML. Mos harroni të vini pas "tokens" që përdorët më lartë!',
	
	'TOKEN'					=> '"Token"',
	'TOKENS'				=> '"Tokens"',
	'TOKENS_EXPLAIN'		=> '"Tokens" janë vënd-caktuese për shkrimin e përdoruesve. Shkrimi do të jetë i vlefshëm vetëm nëse përputhet me definicionin e dhënë. Nëse duhet, ju mund t\'i numëroni duke shtuar një numër si karakter i fundit ndërmjet kllapëzave, p.sh. {TEKST1}, {TEKST2}.<br /><br />Nëpërmjet zëvendësimit të HTML ju mund të përdorni dhe gjuhën e ndodhur në direktorinë language/ kështu: {L_<em>&lt;EMRI_I_RRJESHTIT&gt;</em>} ku <em>&lt;EMRI_I_RRJESHTIT&gt;</em> është emri i rrjeshtit të përkthyer që doni të shtoni. Për shëmbull, {L_SHKROI} do të shfaqet &quot;SHKROI&quot; ose përkthimi i saj sipas përdoruesit.<br /><br /><strong>Ju lutemi të vini re që vetëm "tokens" e rrjeshtuara me poshtë mund të përdoren me BBCodes të personalizuara.</strong>',
	'TOKEN_DEFINITION'		=> 'Çfarë mund të jetë?',
	'TOO_MANY_BBCODES'		=> 'Ju nuk mund të krijoni më BBCode. Fshini një ose më tepër dhe provoni përsëri.',	

	'tokens'	=>  array(
		'TEXT'			=> 'Çdo tekst, duke përfshirë karaktere të huaja, numra, etj… Ju nuk duhet të përdorni këte "token" në kllapa HTML. Mundohuni të përdorni IDENTIFIER ose SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Karakteret nga alfabeti Latin (A-Z), numra, hapsira, presje, pika, minus, plus, vizë në mes dhe poshtë',
		'IDENTIFIER'	=> 'Karakteret nga alfabeti Latin (A-Z), numra, vizë në mes dhe poshtë',
		'NUMBER'		=> 'Çdo seri numrash',
		'EMAIL'			=> 'Një adresë e-mail e vlefshme',
		'URL'			=> 'Një URL e vlefshme duke përdorur çdo protokoll (http, ftp, etj… nuk mund të përdoret për javascript exploits). Nëse nuk jepet asnjë, &quot;http://&quot; është e parafiksuar për rrjeshtin.',
		'LOCAL_URL'		=> 'Një URL lokale. URL duhet të jetë relative me faqen dhe nuk mund të përmbajë një emër serveri ose protokoll.',
		'COLOR'			=> 'Një ngjyrë HTML, mund të jetë në formë numerike <samp>#FF1234</samp> ose <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">kodi i ngjyrës CSS</a> si <samp>fuchsia</samp> ose <samp>BordInaktiv</samp>',
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Nga kjo faqe ju mund të shtoni, fshini dhe modifikoni ikonat që përdoruesit mund të shtojnë në temat ose postimet e tyre. Këto ikona në përgjithësi shfaqen pranë titullit të temsës ose subjektit të postimit. Gjithashtu ju mund të instaloni dhe krijoni paketa ikonash.',
	'ACP_SMILIES_EXPLAIN'	=> 'Buzëqeshjet janë emocione në përgjithësi të vogla dhe ndonjëherë të animuara, që përdoren për të shprehur një emocion ose ndjenjë. Nga kjo faqe ju mund të shtoni, fshini ose modifikoni  emocionet që përdoruesit mund të përdorin në postimet e tyre dhe mesazhet private. Gjithashtu ju mund të instaloni ose të krijoni paketa të reja me emocione.',
	'ADD_SMILIES'			=> 'Shto disa buzëqeshje',
	'ADD_SMILEY_CODE'		=> 'Shto kodin e buzëqeshjes',
	'ADD_ICONS'				=> 'Shto disa ikona',
	'AFTER_ICONS'			=> 'Pas %s',
	'AFTER_SMILIES'			=> 'Pas %s',
	
	'CODE'						=> 'Kodi',
	'CURRENT_ICONS'				=> 'Ikonat e tanishme',
	'CURRENT_ICONS_EXPLAIN'		=> 'Vendosni ç\'doni të bëni me ikonat e tanishme.',
	'CURRENT_SMILIES'			=> 'Buzëqeshjet e tanishme',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Vendosni ç\'doni të bëni me buzëqeshjet e tanishme.',
	
	'DISPLAY_ON_POSTING'		=> 'Shfaq në faqen e postimit',
	'DISPLAY_POSTING'			=> 'Në faqen e postimit',
	'DISPLAY_POSTING_NO'		=> 'Jo në faqen e postimit',
	
	'EDIT_ICONS'				=> 'Modifiko ikonat',
	'EDIT_SMILIES'				=> 'Modifiko buzëqeshjet',
	'EMOTION'					=> 'Emocion',
	'EXPORT_ICONS'				=> 'Eksporto dhe shkarko paketa ikonash',
	'EXPORT_ICONS_EXPLAIN'		=> '%sMe klikimin e këtij linku, konfigurimi për ikonat e instaluara do të paketohet në <samp>icons.pak</samp> e cila pas shkarkimit mund të përdoret për krijimin e një arkivi <samp>.zip</samp> ose <samp>.tgz</samp> që përmban të gjitha ikonat tuaja dhe skedarin <samp>icons.pak</samp> të konfigurimit%s.',
	'EXPORT_SMILIES'			=> 'Eksporto dhe shkarko paketa buzëqeshjesh',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sMe klikimin e këtij linku, konfigurimi për buzëqeshjet e instaluara do të paketohet në <samp>smilies.pak</samp> e cila pas shkarkimit mund të përdoret për krijimin e një arkivi <samp>.zip</samp> ose <samp>.tgz</samp> që përmban të gjitha buzëqeshjet tuaja dhe skedarin <samp>smilies.pak</samp> të konfigurimit%s.',
	
	'FIRST'			=> 'I pari',
	
	'ICONS_ADD'				=> 'Shto nje ikonë te re',
	'ICONS_NONE_ADDED'		=> 'Nuk u shtua asnje ikone.',
	'ICONS_ONE_ADDED'		=> 'Ikona u shtua me sokses.',
	'ICONS_ADDED'			=> 'Ikonat u shtuan me sukses.',
	'ICONS_CONFIG'			=> 'Konfigurimi i ikonave',
	'ICONS_DELETED'			=> 'Ikona u fshi me sukses.',
	'ICONS_EDIT'			=> 'Modifiko ikonën',
	'ICONS_ONE_EDITED'		=> 'Ikona u azhornua me sukses.',
	'ICONS_NONE_EDITED'		=> 'Ikonat nuk u azhornuan.',
	'ICONS_EDITED'			=> 'Ikonat u azhornuan me sukses',
	'ICONS_HEIGHT'			=> 'Lartësia e ikonës',
	'ICONS_IMAGE'			=> 'Imazhi i ikonës',
	'ICONS_IMPORTED'		=> 'Paketa e ikonave u shtua me sukses.',
	'ICONS_IMPORT_SUCCESS'	=> 'Paketa e ikonave u importua me sukses.',
	'ICONS_LOCATION'		=> 'Vendodhja e ikonave',
	'ICONS_NOT_DISPLAYED'	=> 'Ikonat e mëposhte nuk shfaqen në faqen e postimit',
	'ICONS_ORDER'			=> 'Rregulli i ikonave',
	'ICONS_URL'				=> 'Skedari i imazhit të ikonës',
	'ICONS_WIDTH'			=> 'Gjerësia e ikonës',
	'IMPORT_ICONS'			=> 'Instalo paketë ikonash',
	'IMPORT_SMILIES'		=> 'Instalo paketë buzëqeshjesh',
	
	'KEEP_ALL'			=> 'Mbaji të gjitha',
	
	'MASS_ADD_SMILIES'	=> 'Shto disa buzëqeshje',
	'NO_ICONS_ADD'		=> 'Nuk ka ikona të mundshme për të shtuar.',
	'NO_ICONS_EDIT'		=> 'Nuk ka ikona të mundshme për të modifikuar.',
	'NO_ICONS_EXPORT'	=> 'Ju nuk keni ikona për të krijuar një paketë.',
	'NO_ICONS_PAK'		=> 'Nuk u gjet asnjë pakete ikonash.',
	'NO_SMILIES_ADD'	=> 'Nuk ka buzëqeshje të mundshme për të shtuar.',
	'NO_SMILIES_EDIT'	=> 'Nuk ka buzëqeshje të mundshme për të modifikuar.',
	'NO_SMILIES_EXPORT'	=> 'Ju nuk keni buzëqeshje për të krijuar një paketë.',
	'NO_SMILIES_PAK'	=> 'Nuk u gjet asnjë paketë buzëqeshjesh.',
	
	'PAK_FILE_NOT_READABLE'		=> 'Nuk mund të lexohet arkivi <samp>.pak</samp>.',
	
	'REPLACE_MATCHES'	=> 'Zëvendeso përputhjet',
	
	'SELECT_PACKAGE'			=> 'Zgjidh një paketë arkiv',
	'SMILIES_ADD'				=> 'Shto nje buzëqeshje të re',
	'SMILIES_NONE_ADDED'		=> 'Nuk u shtua asnjë buzëqeshje.',
	'SMILIES_ONE_ADDED'			=> 'Buzëqeshja u shtua me sukses.',
	'SMILIES_ADDED'				=> 'Buzëqeshjet u shtuan me sukses.',
	'SMILIES_CODE'				=> 'Kodi i buzëqeshjes',
	'SMILIES_CONFIG'			=> 'Konfigurimi i buzëqeshjes',
	'SMILIES_DELETED'			=> 'Buzëqeshja u fshi me sukses.',
	'SMILIES_EDIT'				=> 'Modifiko buzëqeshjen',
	'SMILIE_NO_CODE'			=> 'Buzëqeshja “%s”  u injorua sepse nuk j\'u shtua kodi.',
	'SMILIE_NO_EMOTION'			=> 'Buzëqeshja “%s” u injorua sepse nuk j\'u shtua asnjë emocion.',
	'SMILIES_NONE_EDITED'		=> 'Asnje buzëqeshje nuk u azhornua.',
	'SMILIES_ONE_EDITED'		=> 'Buzëqeshja u azhornua me sukses.',
	'SMILIES_EDITED'			=> 'Buzëqeshjet u azhornuan me sukses.',
	'SMILIES_EMOTION'			=> 'Emocion',
	'SMILIES_HEIGHT'			=> 'Lartësia e buzëqeshjes',
	'SMILIES_IMAGE'				=> 'Imazhi i buzëqeshjes',
	'SMILIES_IMPORTED'			=> 'Paketa e buzëqeshjeve u instalua me sukses.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paketa e buzëqeshjeve u importua me sukses.',
	'SMILIES_LOCATION'			=> 'Vendodhja e buzëqeshjes',
	'SMILIES_NOT_DISPLAYED'		=> 'Buzëqeshjet e mëposhte nuk shfaqen në faqen e postimit',
	'SMILIES_ORDER'				=> 'Rregulli i buzëqeshjeve',
	'SMILIES_URL'				=> 'Skedari i imazhit të buzeqeshjes',
	'SMILIES_WIDTH'				=> 'Gjerësia e buzëqeshjes',
	
	'WRONG_PAK_TYPE'	=> 'Paketa e specifikuar nuk përmban të dhënat e përshtatshme.',
));

// Word censors
$lang = array_merge($lang, array(
    'ACP_WORDS_EXPLAIN'     => 'Nga ky panel kontrolli ju mund të shtoni, modifikoni dhe hiqni fjalë që do të çensurohen automatikisht në forume. Njerëzit kanë akoma mundësi të regjistrohen me pseudonime që përmbajnë këto fjalë. Wildcards (*) pranohen në fjalë, p.sh. *bir* do të jetë e vlefshme për "shbirësuar", bir* do të jetë e vlefshme për "birësim", *bir do të jetë e vlefshme për "shbir".',
	'ADD_WORD'				=> 'Shto një fjalë',
	
	'EDIT_WORD'		=> 'Modifiko çensuruesin e fjalëve',
	'ENTER_WORD'	=> 'Ju duhet të shtoni një fjalë dhe zëvendësuesen e saj.',
	
	'NO_WORD'	=> 'Nuk u zgjodh asnjë fjalë për t\'u modifikuar.',
	
	'REPLACEMENT'	=> 'Zëvendësim',
	
	'UPDATE_WORD'	=> 'Azhorno çensuruesin e fjalëve',
	
	'WORD'				=> 'Fjalë',
	'WORD_ADDED'		=> 'Çensuruesi i fjalëve u shtua me sukses.',
	'WORD_REMOVED'		=> 'Çensuruesi i fjalëve i zgjedhur u fshi me sukses.',
	'WORD_UPDATED'		=> 'Çensuruesi i fjalëve i zgjedhur u azhornua me sukses.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Duke përdorur këtë mënyrë ju mund të shtoni, modifikoni, shikoni dhe fshini r6. Ju gjithashtu mund të krijoni rang special të cilët u aplikohen përdoruesve nëpërmjet menaxhimit të përdoruesve.',
	'ADD_RANK'				=> 'Shto një rang',
	
	'MUST_SELECT_RANK'		=> 'Ju duhet të zgjidhni një rang.',
	
	'NO_ASSIGNED_RANK'		=> 'Asnjë rang special i specifikuar.',
	'NO_RANK_TITLE'			=> 'Ju nuk specifikuat një titull për rangun.',
	'NO_UPDATE_RANKS'		=> 'Rangu u fshi me sukses. Gjithsesi llogaritë e përdoruesve që kishin këtë rang un u azhornuan. Ju duhet të resetoni manualisht rangun tek këta përdorues.',
	
	'RANK_ADDED'			=> 'Rangu u shtua me sukses.',
	'RANK_IMAGE'			=> 'Imazhi i rangut',
	'RANK_IMAGE_EXPLAIN'	=> 'Vendos një imazh të vogël për këtë rang. Vendodhja është relative me direktorinë e phpBB.',
	'RANK_MINIMUM'			=> 'Postet minimale',
	'RANK_REMOVED'			=> 'Rangu u fshi me sukses.',
	'RANK_SPECIAL'			=> 'Vendos si rang special',
	'RANK_TITLE'			=> 'Titulli i rangut',
	'RANK_UPDATED'			=> 'Rangu u azhornua me sukses.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Këtu mund të kontrolloni pseudonimet që nuk do të lejohen të përdoren. Psudonimet që nuk do të lejohen mund të përmbajnë një karakter Joly/wildcard *. Vini re që ju nuk mund të specifikoni një pseudonim i cili është regjistruar. Në fillim duhet t\'a fshini atë pastaj të mos e lejoni.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Ju mund të mos lejoni një pseudonim duke përdorur karakterin Joly/wildcard * për t\'u përputhur me çdo karakter.',
	'ADD_DISALLOW_TITLE'	=> 'Shto një pseudonim të ndaluar',
	
	'DELETE_DISALLOW_EXPLAIN'	=> 'Ju mund të fshini një pseudonim të ndaluar duke zgjedhur pseudonimin nga kjo listë dhe duke klikuar OK.',
	'DELETE_DISALLOW_TITLE'		=> 'Fshi një pseudonim të ndaluar',
	'DISALLOWED_ALREADY'		=> 'Emri që ju zgjodhët nuk mund të ndalohet. Ai ekziston në listë, ose ekziston në listën e fjalëve të ndaluara, ose një pseudonim që përputhet është prezent.',
	'DISALLOWED_DELETED'		=> 'Pseudonimi i ndaluar u fshi me sukses.',
	'DISALLOW_SUCCESSFUL'		=> 'Pseudonimi i ndaluar u shtua me sukses.',
	
	'NO_DISALLOWED'				=> 'Asnjë pseudonim i ndaluar',
	'NO_USERNAME_SPECIFIED'		=> 'Ju nuk keni zgjedhur ose shkruar një pseudonim me të cilin të veproni.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Këtu mund të menaxhoni arsyet e perdorura në raportime dhe mesazhe të ndaluara kur nuk miratohen postimet. Eshtë një arsye e paracaktuar (shënuar me *) që ju nuk mund t\'a fshini. Kjo arsye përdoret për mesazhe të personalizuara nëse asnjë arsye tjetër nuk përputhet.',
	'ADD_NEW_REASON'		=> 'Shto arsye të re',
	'AVAILABLE_TITLES'		=> 'Tituj arsyesh të mundshme të lokalizuara',
	
	'IS_NOT_TRANSLATED'			=> 'Arsyeja <strong>nuk</strong> është lokalizuar.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Arsyeja <strong>nuk</strong> është lokalizuar. Nëse doni të siguroni një mënyrë të lokalizuar, specifikoni çelësin e duhur nga skedari i gjuhës për seksionin e raportimit të arsyeve.',
	'IS_TRANSLATED'				=> 'Arsyeja është lokalizuar.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Arsyeja është lokalizuar. Nëse titulli që keni shkruar këtu është specifikuar nëpërmjet skedarit të gjuhës për seksionin e raportimit të arsyeve, mënyra e lokalizuar e titullit do të përdoret.',
	
	'NO_REASON'					=> 'Arsyeja nuk mund të gjëndet.',
	'NO_REASON_INFO'			=> 'Ju duhet të specifikoni një titull dhe një përshkrim për këtë arsye.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Ju nuk mund të fshini arsyen e paracaktuar “Tjetër”.',
	
	'REASON_ADD'				=> 'Shto arsye për raportim/ndalimin',
	'REASON_ADDED'				=> 'Arsyeja për raportim/ndalimin u shtua me sukses.',
	'REASON_ALREADY_EXIST'		=> 'Një arsye me këtë titull ekziston; ju lutemi të shkruani një titull tjetër për këtë arsye.',
	'REASON_DESCRIPTION'		=> 'Përshkrimi i arsyes',
	'REASON_DESC_TRANSLATED'	=> 'Shfaqja e përshkrimit të arsyes',
	'REASON_EDIT'				=> 'Modifiko arsyen për raportim/ndalimin',
	'REASON_EDIT_EXPLAIN'		=> 'Këtu keni mundësi të shtoni ose modifikoni një arsye. Nëse arsyeja është e përkthyer, versioni i lokalizuar do të përdoret në vënd të përshkrimit të shtuar këtu.',
	'REASON_REMOVED'			=> 'Arsyeja për raportim/ndalimin u fshi me sukses.',
	'REASON_TITLE'				=> 'Titulli i arsyes',
	'REASON_TITLE_TRANSLATED'	=> 'Shfaqja e titullit të arsyes',
	'REASON_UPDATED'			=> 'Arsyeja për raportim/ndalimin u azhornua me sukses.',
	
	'USED_IN_REPORTS'		=> 'Përdorur në raportime',
));

?>