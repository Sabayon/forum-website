<?php
/**
*
* help_bbcode.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-29 - www.dea-portal.com
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
$help = array(
	array(
		0 => '--',
		1 => 'Hyrje'
	),
	array(
		0 => 'Çfarë është BBCode??',
		1 => 'BBCode është ekzekutim special i HTML. Edhe pse ju aktualisht përdorni BBCode në postimet tuaja në forum, kjo vendoset nga një administrator. Ju mund të ç’aktivizoni BBCode për një postim duke përdorur formën e postimit. BBCode në vetvete është e ngjashme në stil me HTML, kllapat vendosen në formë katrore [ dhe ] dhe jo &lt; dhe &gt; dhe ofron kontroll më të lartë mbi mënyrën se si diçka shfaqet.  Në varësi të maskës që ju përdorni, ju mund të vini re që përdorimi i BBCode në postimet tuaja është bërë më i thjeshtë nëpërmjet një paneli pamor mbi zonën e postimit. Edhe me një gjë të tillë, ju mund t’ju ndihmojë guida e mëposhtme.'
	),
	array(
		0 => '--',
		1 => 'Format e tekstit'
	),
	array(
		0 => 'Si të krijojmë tekst bold, italic dhe të nënvizuar',
		1 => 'BBCode përfshin kllapat për t’ju mundësuar ndryshimin e shpejtë të tekstit bazë. Kjo bëhet në mënyrat në vazhdim: <ul><li>Për të bërë tekstin bold përfshijeni atë në <strong>[b][/b]</strong>, p.sh. <br /><br /><strong>[b]</strong>Përshëndetje<strong>[/b]</strong><br /><br />do të bëhet <strong> Përshëndetje </strong></li><li>Për të nënvizuar <strong>[u][/u]</strong>, për shëmbull:<br /><br /><strong>[u]</strong>Mirmëngjes<strong>[/u]</strong><br /><br />do të bëhet <span style="text-decoration: underline"> Mirmëngjes </span></li><li>Për Italic <strong>[i][/i]</strong>, p.sh.<br /><br />Kjo është <strong>[i]</strong>Madhështore!<strong>[/i]</strong><br /><br />do të sjellë Kjo është <i>Madhështore!</i></li></ul>'
	),
	array(
		0 => 'Si të ndryshojmë ngjyrën e tekstit ose masën e tij',
		1 => 'Për të ndryshuar ngjyrën ose masën e tekstit tuaj mund të përdoren kllapat e mëposhtme. Vini re që pamja përfundimtare e tekstit tuaj do të varet gjithashtu edhe nga shfletuesi dhe sistemi juaj: <ul><li>Ndryshimi i ngjyrës së tekstit bëhet duke e përfshirë atë në <strong>[color=][/color]</strong>. Ju mund të specifikoni një ngjyrë të njohur (p.sh.. red (e kuqe, blue (blu), yellow e verdhë), etj.) ose kodin heksadecimal përkatës, p.sh. #FFFFFF, #000000. Për shëmbull, për të krijuar tekst të kuq përdorni:<br /><br /><strong>[color=red]</strong>Përshëndetje!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Përshëndetje!<strong>[/color]</strong><br /><br />Në të dy rastet përfundimi është <span style="color:red"> Përshëndetje!</span></li><li>Ndryshimi I masës së tekstit bëhet në mënyrë të ngjashme duke përdodrur <strong>[size=][/size]</strong>. Këto kllapa janë të varura nga maska që një përdorues ka zgjedhur por ne rekomandojmë që të përdoret formati I vlerave numerike që përfaqësojnë masën e tekstit në përqindje, duke filluar nga 20 (shumë i vogël) deri në 200 (shumë i madh). Për shëmbull:<br /><br /><strong>[size=30]</strong>I VOGEL<strong>[/size]</strong><br /><br />do të jetë në përgjithësi <span style="font-size:30%;"> I VOGEL </span><br /><br />dhe:<br /><br /><strong>[size=200]</strong>MADHESHTOR!<strong>[/size]</strong><br /><br />do të jetë <span style="font-size:200%;">MADHESHTOR!</span></li></ul>'
	),
	array(
		0 => 'Mund të ndryshoj kllapat e formimit?',
		1 => 'Po, sigurisht që mundeni, për shëmbull, për të tërhequr vëmendjen e dikujt ju mund të shkruani:<br /><br /><strong>[size=200][color=red][b]</strong>ME SHIKO MUA!<strong>[/b][/color][/size]</strong><br /><br />dhe në përfundim kjo do të ishte <span style="color:red;font-size:200%;"><strong> ME SHIKO MUA!</strong></span><br /><br />Ne nuk rekomandojmë që ju të bëni shumë tekste të duken si ky. Kujdes, është në dorën tuaj, postuesit, që kllapat të mbyllen në mënyrë korrekte. Për shëmbull, kjo në vazhdim nuk është korrekte:<br /><br /><strong>[b][u]</strong>Ky është gabim<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citimi dhe tekst i fiksuar'
	),
	array(
		0 => 'Citimi i tekstit në përgjigje',
		1 => 'Janë dy mënyra me anë të të cilave ju mund të citoni tekstin, me ose pa referencë.<ul><li>Kur ju përdorni funksionin Cito për t’ju përgjigjur një postimi në bord vini re që teksti i postuar përfshihet në dritaren e mesazhit rrethuar nga blloku: <strong>[quote=&quot;&quot;][/quote]</strong>. Kjo mënyrë ju mundëson të citoni duke ju referuar një personi ose çdo lloj gjëje tjetër që ju doni të postoni! Për shëmbull, për të cituar një pjesë të tekstit që Mr. Blobby ka shkruar ju vendosni:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Teksi i shkruar nga Mr. Blobby vendoset këtu<strong>[/quote]</strong><br /><br />Rezultati i kësaj do të vërë automatikisht &quot;Mr. Blobby shkroi:&quot; përpara tekstit aktual. Kujdes, ju <strong>duhet</strong> të përfshini shenjat e citimit &quot;&quot; anash emrit që po citoni, ato nuk janë opsionale.</li><li>Mënyra e dytë ju mundëson që të citoni një fragment teksti çfardo. Për të përdorur këtë mënyrë përfshini tekstin në kllapat<strong>[quote][/quote]</strong>. Kur të shihni mesazhin, teksti i cituar do të jetë përfshirë në një bllok citimi.</li></ul>'
	),
	array(
		0 => 'Kodimi i tekstit ose fiksimi i gjerësisë me të dhëna',
		1 => 'Nëse doni që teksti të dalë në formën e kodit ose në diçka që kërkon një gjerësi fikse, p.sh shkrimi Courier, ju duhet të përfshini tekstin në kllapat: <strong>[code][/code]</strong> , p.sh.<br /><br /><strong>[code]</strong>echo &quot;Ky është një kod&quot;;<strong>[/code]</strong><br /><br />I gjithë formulimi pa kllapat <strong>[code][/code]</strong> ruhet dhe ju mund ta shihni më pas. Sintaksa PHP për mbingjyrimin mund të aktivizohet duke përdorur <strong>[code=php][/code]</strong> dhe është e rekomanduar kur postohen kode PHP pasi improvizon lexueshmërinë.'
	),
	array(
		0 => '--',
		1 => 'Gjenerimi i listave'
	),
	array(
		0 => 'Krijimi i një liste të ç’rregullt',
		1 => 'BBCode suporton dy lloje listash, të rregullt dhe të ç’rregullt. Në thelb ato janë të njëjta me ekuivalentet e tyre HTML. Një listë e ç’rregullt nxjerr çdo artikull në listën tuaj njërin pas tjetrit dhe duke indeksuar secilën me një karakter symbol. Për të krijuar një listë të ç’rregullt përdorni:  <strong>[list][/list]</strong> dhe përcaktoni çdo artikull duke përdorur <strong>[*]</strong>. Për shëmbull, për të listuar ngjyrat tuaja të preferuara ju mund të përdorni:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>E Kuqe<br /><strong>[*]</strong>Blu<br /><strong>[*]</strong>E verdhë<br /><strong>[/list]</strong><br /><br />Kjo do të gjeneronte listën në vazhdim:<ul><li> E Kuqe </li><li>Blu</li><li> E verdhë </li></ul>'
	),
	array(
		0 => 'Krijimi i një liste të rregullt',
		1 => 'Mënyra e dytë e listës, një listë e rregullt, ju jep kontroll të plotë mbi atë që do të jetë para secilit artikull në përfundim. Për të krijuar një listë të rregullt përdorni <strong>[list=1][/list]</strong> për të krijuar një listë numerike ose ndryshe <strong>[list=a][/list]</strong> për një listë alfabetike. Ashtu si me listën e ç’rregullt, artikujt specifikohen duke përdorur <strong>[*]</strong>. Për shëmbull:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Shko në dyqane<br /><strong>[*]</strong>Bli një kompjuter<br /><strong>[*]</strong>Lutju kompjuterit kur bllokohet<br /><strong>[/list]</strong><br /><br />do të gjenerojë:<ol style="list-style-type: decimal;"><li> Shko në dyqane </li><li> Bli një kompjuter </li><li> Lutju kompjuterit kur bllokohet </li></ol>Ndërsa për një listë alfabetike ju do të përdornit:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong> Përgjigja e parë e mundshme<br /><strong>[*]</strong> Përgjigja e dytë e mundshme <br /><strong>[*]</strong> Përgjigja e tretë e mundshme <br /><strong>[/list]</strong><br /><br />duke dhënë<ol style="list-style-type: lower-alpha"><li> Përgjigja e parë e mundshme </li><li> Përgjigja e dytë e mundshme </li><li> Përgjigja e tretë e mundshme </li></ol>'
	),
	array(
		0 => '--',
		1 => 'Krijimi i Links (lidhje)'
	),
	array(
		0 => 'Link një faqe tjetër',
		1 => 'BBCode i phpBB suporton disa mënyra për krijimin e URI-ve (Uniform Resource Indicators) më mirë të njohura si URL.<ul><li>E para e tyre përdor kllapat<strong>[url=][/url]</strong>, çfardo që ju shkruani pas shenjës  = do të bëjë që përmbajtja brënda kllapave të veprojë si URL. Për shëmbull, për t’u lidhur me phpBB.com ju mund të përdorni:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Vizito phpBB!<strong>[/url]</strong><br /><br />Kjo do të gjeneronte lidhjen <a href="http://www.phpbb.com/">Vizito phpBB!</a> Vini re që ky link do të hapet në të njëjtën dritare ose në një dritare të re, dhe kjo është në varësi të shfletuesit tuaj.</li><li>Nëse doni që vetë URL të shfaqet si link, mund t’a bëni këtë duke përdorur:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Kjo do të gjeneronte link-un <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li> phpBB tashmë sjell diçka të re të quajtur <i>Magic Links</i>. Kjo do të kthejë URL-të me sintaksë të rregullt në një link pa qënë nevoja që nga ana juaj të shkruhet http:// si dhe pa vënë kllapat. Për shëmbull, duke shkruar  www.phpbb.com, në mesazhin tuaj kjo automatikisht do të kthehet në <a href="http://www.phpbb.com/">www.phpbb.com</a> duke u vënë në dukje kur të shihni mesazhin.</li><li>E njëjta gjë aplikohet tek adresat e-mail, për shëmbull:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />e cila në përfundim do të jetë <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> ose mund të shkruani vetëm no.one@domain.adr në mesazhin tuaj dhe ajo do të konvertohet automatikisht kur ju të shihni mesazhin.</li></ul>Si me të gjitha kllapat BBCode ju mund të përdorni URL të lidhur me kllapa të tjera si për shëmbull <strong>[img][/img]</strong> (shihni pjesën tjetër), <strong>[b][/b]</strong>, etj. Ashtu si me kllapat e formulimit, është në dorën tuaj që hapja dhe mbyllja e kllapave të bëhet në mënyrën e duhur, për shëmbull:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />është <span style="text-decoration: underline">jo</span> korrekte dhe mund te çojë në fshirjen e postimit tuaj, ndaj bëni kujdes.'
	),
	array(
		0 => '--',
		1 => 'Shfaqja e imazheve në postime'
	),
	array(
		0 => 'Përfshirja e një imazhi në postim',
		1 => 'BBCode i phpBB përmban kllapa për përfshirjen e imazheve në postimin tuaj. Dy gjëra të rëndësishme që duhen mbajtur mend mbi përdorimin e kllapave janë: shumë përdoruesve nuk u pëlqen shfaqja e shumë imazhevë në postime dhe së dyti, imazhi duhet të ekzistojë në internet (nuk mund të ekzistojë vetëm në kompjuterin tuaj për shëmbull, vetëm nëse ju keni një webserver!). Për të shfaqur imazhin ju duhet të keni URL që të çon në atë imazh të përfshirë në kllapat: <strong>[img][/img]</strong> . Për shëmbull:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Siç vihet re, në seksionin e URL ju mund të vendosni imazhin në kllapat <strong>[url][/url]</strong> nëse dëshironi, p.sh.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />do të gjenerojë:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Përfshirja e një shtojce në postim',
		1 => 'Shtojcat gjithashtu mund të përfshihen në një pjesë të postimit duke përdorur BBCode <strong>[attachment=][/attachment]</strong>, nëse funksioni i shtojcave është i aktivizuar nga administrator I bordit dhe nëse ju keni të drejtat e përshtatshme për të përfshirë shtojca. Funksioni gjendet nën dritaren e postimit në një kutizë (butoni respektiv) dhe shërben për të përfshirë shtojca.'
	),
	array(
		0 => '--',
		1 => 'Funksione të tjera'
	),
	array(
		0 => 'Mund të shtoj kllapa të personalizuara?',
		1 => 'Nëse jeni një administrator në këtë bord dhe keni të drejtat e përshtatshme, ju mund të shtoni  BBCodes të tjerë nëpërmjet seksionit të Kllapave BBCodes të personalizuara.'
	)
);

?>