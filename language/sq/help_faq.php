<?php
/**
*
* help_faq.php [Albanian]
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
		0	=> '--',
		1	=> 'Problemet me regjistrimin dhe identifikimin',
	),
	array(
		0	=> 'Pse nuk mund të identifikohem?',
		1	=> 'Ka disa arsye pse mund të ndodhë një gjë e tillë. Së pari, sigurohuni që pseudonimi dhe fjalëkalimi juaj janë korrekt. Nëse janë, kontaktoni administratorin e bordit për t’u siguruar që nuk jeni përjashtuar. Gjithashtu është e mundur që bordi të ketë një gabim në konfigurim dhe administratorët duhet ta rregullojnë.',
	),
	array(
		0	=> 'Përse duhet të regjistrohem?',
		1	=> 'Ndoshta nuk ka nevojë. Eshtë në dorë të administratorit të bordit të përcaktojë nëse ju duhet të regjistroheni në mënyrë që të keni mundësi të postoni. Gjithsesi, regjistrimi ju jep akses më tepër i cili nuk është i mundur për vizitorët, si përshëmbull avatar personal, mesazhim privat, dërgim të mesazheve e-mail ndërmjet përdoruesve, pranim në grupe, etj. Regjistrimi zgjat vetëm disa moment, kështu që ju rekomandojmë t’a bëni.',
	),
	array(
		0	=> 'Përse ç’regjistrohem automatikisht?',
		1	=> 'Nëse ju nuk zgjidhni funksionin  <em>Më identifiko automatikisht</em> kur identifikoheni, bordi do t’ju mbajë të identifikuar vetëm për një kohë të caktuar. Kjo bëhet në mënyrë që të evitohet përdorimi I bordit nga dikush tjetër.  Për të qëndruar të identifikuar, zgjidhni funksionin gjatë identifikimit. Kjo nuk është e rekomandueshme nëse ju përdorni bordin nga një kompjuter publik, p.sh. librari, internet kafe, kompjuter universiteti etj. Nëse ju nuk e shihni këtë funksion do të thotë që administratori e ka ç’aktivizuar.',
	),
	array(
		0	=> 'Si mund të ndaloj shfaqjen e pseudonimit tim në listën e përdoruesve që janë në linjë?',
		1	=> 'Në Panelin e Antarit, nën  “Preferencat e bordit”, ju mund të plotësoni opsionin <em>Mos trego statusin tim në linjë</em>. Aktivizoni këtë opsion me  <samp>Po</samp> dhe ju do të shfaqeni vetëm për administratorët, moderatorët dhe veten tuaj. Ju do të numëroheni si përdorues i fshehur. ',
	),
	array(
		0	=> 'Kam humbur fjalëkalimin tim!',
		1	=> 'Mos u mërzisni! Edhe pse fjalëkalimi juaj nuk mund të rikuperohet, mund të resetohet me thjeshtësi. Vizitoni faqen e identifikimit dhe klikoni <em>Kam harruar fjalëkalimin</em>. Ndiqni instruksionet dhe do të keni mundësi të identifikoheni shumë shpejt.',
	),
	array(
		0	=> 'Jam regjistruar por nuk mund të identifikohem!',
		1	=> 'Së pari kontrolloni pseudonimin dhe fjalëkalimin tuaj. Nëse janë korrekt, atherë një nga dy gjëra mund të ketë ndodhur. Nëse opsioni COPPA është aktivizuar dhe ju keni specifikuar që jeni nën 13 vjeç gjatë regjistrimit, ju duhet të ndiqni instruksionet që keni marrë. Disa borde kërkojnë gjithashtu që regjistrimi të aktivizohet, nga ju ose nga një administrator para se ju të identifikoheni. Ky informacion j’u është bërë i ditur gjatë regjistrimit. Nëse ju është dërguar një e-mail, ndiqni udhëzimet. Nëse ju nuk keni marrë një e-mail, mund të keni dhënë një e-mail të gabuar gjatë regjistrimit ose e-mail është bllokuar nga filtri i spam. Nëse jeni të sigurt që adresa juaj është korrekte dhe nuk keni e-mail në folderin spam, mundohuni të kontaktoni administratorin.',
	),
	array(
		0	=> 'Jam regjistruar në të kaluarën por nuk mund të identifikohem më?!',
		1	=> 'Mundohuni të gjeni e-mail që keni marrë kur jeni regjistruar, kontrolloni pseudonimin dhe fjalëkalimin tuaj dhe provoni përsëri. Eshtë e mundur që një administrator të ketë ç’aktivizuar ose fshirë llogarinë tuaj për ndonjë arsye. Gjithashtu, shumë borde periodikisht fshijnë përdoruesit që nuk kanë qënë aktiv për një kohë të gjatë për të ulur masën e bazës së informacionit. Nëse ka ndodhur një gjë e tillë, regjistrohuni përseri dhe mundohuni të jeni më tepër aktiv në diskutimet e bordit. ',
	),
	array(
		0	=> 'Çfarë është COPPA?',
		1	=> 'COPPA, ose Akti i Mbrojtjes së Fshehtësisë së Fëmijëve Në Linjë (Child Online Privacy and Protection Act) i vitit 1998, është një ligj në Kombet e Bashkuara që detyron faqet e Web-it që mund të mbledhin informacion nga minorenët nën moshën 13 vjeçare, të shkruajnë një dokument konsensual prindëror ose një metodë tjetër të ngjashme duke lejuar mbledhjen e informacioneve personale nga një minoren nën moshën 13 vjeçare. Nëse nuk jeni i sigurt nëse kjo vlen për ju si dikush që mundohet të regjistrohet këtu ose në çdo faqe tjetër, kontaktoni një këshilltar ligjor për asistencë. Ju lutemi të vini re që phpBB Group nuk mund të ofrojë këshillim ligjor dhe nuk është një pikë kontakti për preokupime ligjore të çdo lloji, përveç termave të lartpërmendura. ',
	),
	array(
		0	=> 'Pse nuk mund të regjistrohem?',
		1	=> 'Eshtë e mundur që administratori të ketë përjashtuar adresën tuaj IP ose pseudonimin që ju po mundoheni të regjistroni. Administratori mund edhe të ketë ç’aktivizuar regjistrimet për të ndaluar vizitorët të regjistrohen. Kontaktoni një administrator të bordit për asistencë.',
	),
	array(
		0	=> 'Çfarë bën funksioni “Fshi të gjithë cookies” e bordit?',
		1	=> '“Fshi të gjithë cookies” fshin cookies të krijuara nga phpBB të cilat ju mbajnë ju të identifikuar në bord. Gjithashtu ofrojnë funksione të tjera nëse të aktivizuara nga administratori. Nëse keni problem me identifikimin ose ç’identifikimin, fshirja e cookies të bordit mund të ndihmojë.',
	),
	array(
		0	=> '--',
		1	=> 'Preferencat dhe opsionet e përdoruesit',
	),
	array(
		0	=> 'Si mund t’i ndryshoj opsionet e mia?',
		1	=> 'Nëse jeni një përdorues i regjistruar, të gjitha opsionet tuaja janë ruajtur në bazën e informacionit. Për t’i ndryshuar ato vizitoni Panelin e Antarit (një link mund të gjëndet në përgjithësi në krye të bordit). Sistemi do t’ju lejojë të ndryshoni të gjitha opsionet dhe preferencat.',
	),
	array(
		0	=> 'Ora është gabim!',
		1	=> 'Eshtë e mundur që ora e shfaqur të jetë nga një brez orar tjetër, i ndryshëm nga ai ku jeni ju. Në këtë rast vizitoni Panelin e Antarit dhe ndryshoni brezin tuaj orar për t’u sinkronizuar me zonën tuaj, p.sh. London, Paris, New York, Sydney, etj. Vini re që ndryshimi i brezit orar, si shumë opsione të tjera mund të bëhet vetëm nga përdorues të regjistruar. Nëse nuk jeni të regjistruar, është koha të regjistroheni. ',
	),
	array(
		0	=> 'Ndryshova brezin orar dhe përsëri ora është gabim.',
		1	=> 'Nëse jeni të sigurt që keni vendosur brezin orar dhe Ora Verore/DST korrektësisht, dhe ora është përsëri gabim, atherë ora e ruajtur në server është gabim. Ju lutemi të njoftoni një administrator për të ndrequr problemin.',
	),
	array(
		0	=> 'Gjuha ime nuk është në listë!',
		1	=> 'Administratori nuk e ka instaluar gjuhën tuaj ose ajo nuk është përkthyer akoma. Mundohuni të pyesni administratorin nëse mund të instalojë gjuhën që ju kërkoni. Nëse paketa e gjuhës nuk ekziston, jeni të lirë të filloni një përkthim të ri. Më tepër informacion mund të gjëndet tek faqja web phpBB (shikoni link-un në fund të çdo faqeje të bordit).',
	),
	array(
		0	=> 'Si mund të shfaq një imazh pranë pseudonimit tim?',
		1	=> 'Janë dy imazhe që mund të shfaqen pranë pseudonimit duke parë postimet në forum. Në varësi të maskës së përdorur, një mund të jetë imazhi që tregon rangun tuaj, në përgjithësi në formën e yjeve, blloqeve ose pikave, dhe tregojnë sa postime keni bërë ose statusin tuaj në bord. I dyti, në përgjithësi një imazh më i madh, njihet si avatar dhe në të shumtën e rasteve është unik dhe personal për çdo përdorues. Eshtë në dorë të admnistratorit të bordit të aktivizojë avatarët dhe të zgjedhë cili nga ata mund të jetë i vlefshëm. Nëse nuk mund të përdorni avatar kontaktoni një nga administratorët e bordit dhe pyetini për arsyet. ',
	),
	array(
		0	=> 'Ç’farë është rangu im dhe si mund t’a ndryshoj atë?',
		1	=> 'Rangu, i cili shfaqet pranë pseudonimit, tregon numrin e postimeve që ju keni bërë ose identifikon një përdorues specifik, p.sh. moderator ose administrator. Në përgjithësi, ju nuk mund të ndryshoni rangun direkt pasi ata caktohen nga administratori i bordit. Ju lutemi të mos abuzoni me bordin duke postuar padomosdoshmërisht vetëm për të ngritur rangun tuaj. Shumë borde nuk do e tolerojnë këtë dhe moderatorët ose administratorët thjesht do të ulin numrin e postimeve tuaja.',
	),
	array(
		0	=> 'Kur klikoj link për e-mail të një përdoruesi, më kërkohet të identifikohem.',
		1	=> 'Vetëm përdoruesit e regjistruar mund të dërgojnë e-mail përdoruesve të tjerë nëpërmjet sistemit të brendshëm e-mail dhe vetëm nëse administratori e ka aktivizuar këtë funksion. Kjo bëhet për të parandaluar përdorimin  malinj të sistemit të e-mail nga përdorues të panjohur.',
	),
	array(
		0	=> '--',
		1	=> 'Problemet me postimin',
	),
	array(
		0	=> 'Si të hap një temë në forum?',
		1	=> 'Për të hapur një temë të re në forum, klikoni butonin përkatës në forum ose faqen e temave. Ju mund të duhet të jeni të regjistruar  për të postuar një mesazh. Një listë me të drejtat tuaja në çdo forum mund ta shikoni në fund të forumit dhe faqes së temave. Për shëmbull: Ju mund të postoni temë të re, Ju mund të votoni në sondazhe, etj. ',
	),
	array(
		0	=> 'Si mund të fshij ose të modifikoj një postim?',
		1	=> 'Nëse nuk jeni administrator i bordit ose moderator, ju mund të modifikoni ose fshini vetëm postimet tuaja. Ju mund të modifikoni  një postim duke klikuar butonin modifiko për postimin përkatës, ndonjëherë vetëm për një kohë të limituar pasi postimi është bërë. Nesë ndërkohë dikush i është përgjigjur postimit, ju do të gjeni një pjesë të vogël teksti poshtë postimit kur të ktheheni tek ky postim i cili tregon numrin sa herë është modifikuar postimi nga ju dhe në ç’datë dhe orë. Kjo do të shfaqet vetëm nëse dikush është përgjigjur; nuk do të shfaqet nëse një administrator ose moderator modifikon postimin, vetëm nëse ata lënë një shënim përse kanë modifikuar këtë postim. Ju lutemi të vini re që përdoruesit normalë nuk mund të fshijnë një postim nëse dikush i është përgjigjur atij postimi.',
	),
	array(
		0	=> 'Si mund t’i shtoj firmën postimit tim?',
		1	=> 'Për t’i shtuar firmën postimit tuaj, ju duhet të krijoni një të tillë nëpërmjet Panelit të Antarit. Pasi ta keni krijuar, ju mund të zgjidhni  kutizën <em>Bashkangjit firmën</em> në menunë e postimit. Gjithashtu ju mund t’i shtoni firmën tuaj të gjithë postimeve duke klikuar butonin përkatës në profilin tuaj. Nëse bëni një gjë të tillë, mund të shmangni zgjedhjen e “Bashkangjit Firmën” për pastime të veçanta në menunë e postimit.',
	),
	array(
		0	=> 'Si të krijoj një sondazh?',
		1	=> 'Gjatë postimit të një teme të re ose modifikimit të postimit të parë të një teme, klikoni butonin “Krijo Sondazh” poshtë tabelës kryesore të postimit; nëse nuk e shikoni këtë, ju nuk keni të drejtat e përshtatshme për të krijuar sondazhe. Shkruani një titull dhe të paktën dy opsione në fushat përkatëse, duke u siguruar që çdo opsion është në kryerradhë në zonën e tekstit. Gjithashtu ju mund të shtoni një numër opsionesh të cilat mund të zgjidhen nga përdoruesit gjatë votimit. Kjo bëhet nën “Opsionet për përdoruesit”. Mund të caktoni kohëzgjatjen e sondazhit në ditë (0 për sondazh pa limit kohor) dhe më pas opsionin për të lejuar përdoruesit të amendojnë votën e tyre.',
	),
	array(
		0	=> 'Përse nuk mund të shtoj më tepër opsione për sondazhin?',
		1	=> 'Limiti për opsionet e sondazhit caktohet nga administratori. Nëse keni nevojë për më tepër opsione për sondazhin tuaj, kontaktoni administratorin e bordit.',
	),
	array(
		0	=> 'Si mund të modifikoj ose të fshij një sondazh?',
		1	=> 'Ashtu si edhe me postimet, sondazhet mund të modifikohen vetëm nga postuesi i tyre, një moderator ose një administrator. Për të modifikuar një sondazh, klikoni për të modifikuar postimin e parë të temës; kjo përmban sondazhin. Nëse asnjë nuk ka votuar, përdoruesit mund të fshijnë sondazhin ose të modifikojnë çdo opsion të tij. Gjithsesi, nëse është votuar, vetëm moderatorët ose administratorët mund të modifikojnë ose fshijnë sondazhin.',
	),
	array(
		0	=> 'Pse nuk kam akses në një forum?',
		1	=> 'Disa forume mund të jenë të limituara për disa lloj grupe antarësh. Që të shikoni, lexoni, postoni ose të bëni ndonjë veprim tjetër ju mund të keni nevojë për të drejta të veçanta. Kontaktoni me një moderator ose administrator për t’ju dhënë ju akses.',
	),
	array(
		0	=> 'Pse nuk mund të bashkangjis shtojca?',
		1	=> 'Të drejtat për shtojca jepen për forum, për grup, ose për përdorues. Administratori i bordit mund të mos ketë lejuar shtojcat për një forum specifik, në të cilin po postoni, ose ndoshta vetëm disa grupe të caktuara munden të shtojnë shtojca në atë forum. Kontaktoni administratorin e bordit  nëse nuk jeni i sigurt për faktin që nuk mund të shtoni shtojca. ',
	),
	array(
		0	=> 'Pse mora një paralajmërim?',
		1	=> 'Çdo administrator bordi ka rregullat e tij në forumin përkatës. Nëse ju keni thyer ndonjë rregull, ju mund të merrni paralajmërim. Vini re që phpBB Group nuk ka të bëjë me paralajmërimin e dhënë dhe as me vendimin e administratorit të bordit. Kontaktoni administratorin e bordit nëse nuk jeni të sigurt rreth arsyes së paralajmërimit.',
	),
	array(
		0	=> 'Si mund të raportoj një postim tek moderatori?',
		1	=> 'Nëse administrator i bordit e lejon, ju mund të shikoni një buton për raportimin e postimeve në çdo postim. Duke e klikuar atë, do të vazhdoni me proçedurën për raportimin e postimit.',
	),
	array(
		0	=> 'Për çfarë shërben butoni “Ruaj” që ndodhet në faqen e postimit?',
		1	=> 'Ky buton shërben për të ruajtur mesazhet që nuk keni përfunduar në mënyrë që të mund t’i kompletoni më vonë. Përdorni Panelin e Antarit për të vazhduar shkrimin e një mesazhi të ruajtur.',
	),
	array(
		0	=> 'Pse postimi im duhet të aprovohet?',
		1	=> 'Administratori i bordit mund të ketë vendosur që postimet në forum të rishikohen para se të jenë të publikuara. Gjithashtu është e mundur që administratori t’ju ketë vënë në një grup, postimet e të cilit kërkojnë një rishikim përpara se të shfaqen. Kontaktoni administratorin e bordit për më tepër informacion. ',
	),
	array(
		0	=> 'Si mund të lëviz sipër një temë?',
		1	=> 'Duke klikuar “Lëviz sipër temën” kur jeni duke e parë atë ju mund të lëvizni temën për ta çuar atë në majë të forumit që jeni duke parë. Gjithsesi, nëse një gjë e tillë nuk bëhet, atherë ky funksion mund të mos jetë i aktivizuar ose koha minimale për të bërë një lëvizje të dytë, nuk ka kaluar. Një mënyrë tjetër për të lëvizur një temë lart, është duke postuar në të. Sigurohuni të zbatoni rregullat e bordit kur të bëni një gjë të tillë.',
	),
	array(
		0	=> '--',
		1	=> 'Modifikimet dhe llojet e temave',
	),
	array(
		0	=> 'Çfarë është BBCode?',
		1	=> 'BBCode është një ekzekutim special i HTML, që ofron kontroll të lartë modifikimi në objekte të veçanta në një postim. Përdorimi i BBCode bëhet i mundur nga administratori, gjithashtu mund të ç’aktivizohet nga faqja e postimit. BBCode në vetvete është i ngjashëm me HTML, me ndryshimin që kllapat janë në formë katrore [ dhe ]. Për më tepër informacion për BBCode shikoni guidën që mund të hapet nga faqja e postimit.',
	),
	array(
		0	=> 'Mund të përdor HTML?',
		1	=> 'Jo. Nuk është e mundur të postohet duke përdorur HTML. Shumica e modifikimeve që arrihen me anë të HTML mund të aplikohen duke përdorur BBCode.',
	),
	array(
		0	=> 'Çfarë janë buzëqeshjet?',
		1	=> 'Buzeqeshjet, ose emocionet, janë imazhe të vogla që mund të përdoren për të shprehur një ndjenjë duke përdorur një kod të shkurtër, p.sh. :) i lumtur, ndërsa :( i mërzitur. Lista e plotë e emocioneve mund të shihet në faqen e postimit. Mundohuni të mos përdorni shumë emocione, pasi mund të bëjnë një postim të palexueshëm dhe një moderator mund t’a modifikojë ose edhe t’a fshijë të tërë postimin. Administratori i bordit mund të ketë vënë një limit por përdorimin e emocioneve në një postim.',
	),
	array(
		0	=> 'Mund të postoj imazhe?',
		1	=> 'Po, imazhet mund të shfaqen në postimet tuaja. Nëse administratori ka lejuar shtojcat, ju mund të keni mundësi të ngarkoni imazhe në bord. Ose ju mund të merrni link-un e një imazhi që ndodhet në web server të aksesueshëm, p.sh. http://www.shëmbull.com/imazhi-im.gif. Ju nuk mund të përdorni link të imazheve të ruajtura në kompjuterin tuaj (vetëm nëse është një web server i aksesueshëm) dhe as të imazhevë që janë të ruajtura pas një mekanizmi që kërkon identifikim, p.sh. adresat e-mail hotmail ose yahoo, faqe interneti të mbrojtura me fjalëkalim, etj. Për të shfaqur imazhin përdorni kllapat [img].',
	),
	array(
		0	=> 'Çfarë janë Lajmërimet globale?',
		1	=> 'Lajmërimet globale janë lajmërime që përmbajnë informacion të rëndësishëm dhe ju duhet t’i lexoni kurdo qoftë e mundur. Ato shfaqen në majë të çdo forumi duke përfshirë Panelin e Antarit. Të drejtat për lajmërimet globale jepen nga administratori i bordit. ',
	),
	array(
		0	=> 'Çfarë janë Lajmërimet?',
		1	=> 'Lajmërimet shpesh përmbajnë informacion të rëndësishëm për forumin që ju po lexoni dhe ju duhet t’i lexoni kurdo qoftë e mundur. Lajmërimet shfaqen në majë të çdo faqe forumi ku jane postuar. Ashtu si për lajmërimet globale, të drejtat për lajmërimet jepen nga administrator i bordit.',
	),
	array(
		0	=> 'Çfarë janë Kryetemat?',
		1	=> 'Kryetemat shfaqen poshtë lajmërimeve dhe vetëm në faqen e parë të forumit. Shpesh janë të rëndësishme ndaj dhe ju duhet t’i lexoni. Ashtu si me lajmërimet globale dhe lajmërimet, edhe  të drejtat për kryetemat jepen nga administratori i bordit.',
	),
	array(
		0	=> 'Çfarë janë temat e mbyllura?',
		1	=> 'Temat e mbyllura janë tema ku përdoruesit nuk mund të postojnë më dhe çdo sondazh në to mbaron automatikisht me mbylljen e temës. Temat mund të mbyllen për shumë arsye dhe mbyllen vetëm nga moderatorët ose administratorët. Ju mund të mbyllni një temë të krijuar nga ju nëse keni të drejtat e duhura të dhëna nga administratori.',
	),
	array(
		0	=> 'Çfarë janë ikonat e temave?',
		1	=> 'Ikonat e temave janë imazhe të zgjedhura nga autori të përshtatura me postimet për të treguar përmbajtjen e tyre.  Mundësia e përdorimit të imazheve të temave varet nga të drejtat e dhëna nga administratori i bordit.',
	),
	array(
		0	=> '--',
		1	=> 'Niveli i përdoruesve dhe grupet',
	),
	array(
		0	=> 'Çfarë janë Administratorët?',
		1	=> 'Administratorët janë antarë të cilëve u është dhënë niveli më i lartë i kontrollit mbi të gjithë bordin. Këta antarë mund të kontrollojnë të gjithë operimin e bordit duke përfshirë dhënien e të drejtave, përjashtimin e përdoruesve, krijimin e grupeve ose moderatorëve, etj, në varësi të krijuesit të bordit dhe të drejtave që ai/ajo i ka dhënë administratorit. Gjithashtu ata mund të kenë kapacitet të plotë moderator në të gjithë forumet, në varësi të të drejtave të dhëna atij nga krijuesi i bordit.',
	),
	array(
		0	=> 'Çfarë janë Moderatorët?',
		1	=> 'Moderatorët janë individë (ose grupe individësh) të cilët kujdesen për forumet çdo ditë. Ata kanë autoritetin që të modifikojnë ose fshijnë postimet, t’i hapin, t’i lëvizin dhe ndajnë temat në forumet që ata moderojnë. Në përgjithësi, moderatorët kujdesen për të ndaluar përdoruesit që dalin jashtë teme ose që postojnë materiale abuzive dhe ofenduese.',
	),
	array(
		0	=> 'Çfarë janë grupet e antarësimit?',
		1	=> 'Grupet e antarësimit përbëhen nga antarë dhe shërbejnë për të ndarë komunitetin në sektorë të menaxhueshëm administrativ. Çdo përdorues mund të bëjë pjesë në grupe të ndryshëm dhe çdo grupi mund t’i jepen të drejta të veçanta. Kjo gjë lehtëson punën e administratorit për të caktuar ose ndryshuar të drejtat e shumë përdoruesve në të njëjtën kohë.',
	),
	array(
		0	=> 'Ku janë grupet e antarësimit dhe ku mund të bashkohem me njërin prej tyre?',
		1	=> 'Ju mund të shikoni të gjithë grupet e antarësimit nën “Grupet e Antarësimit” në Panelin e Antarit. Nëse doni të bashkoheni me njërin prej tyre, vazhdoni duke klikuar butonin përkatës. Jo të gjithë grupet kanë akses të hapur. Disa mund të kërkojnë aprovim për t’u bashkuar. Disa të tjerë mund të jenë të mbyllur dhe disa të tjerë mund të kenë antarësim të fshehur. Mos u mërzisni me liderin e ndonjë grupi nëse ju refuzon pasi mund të kenë arsyet e tyre.',
	),
	array(
		0	=> 'Si mund të bëhem lider i ndonjë grupi?',
		1	=> 'Lideri i një grupi antarësimi zgjidhet nga administrator i bordit kur grupet krijohen fillimisht. Nëse jeni i interesuar të krijoni një grup antarësimi, kontakti i parë duhet të jetë me administratorin. Dërgojini atij një mesazh privat.',
	),
	array(
		0	=> 'Pse disa grupe antarësimi shfaqen në ngjyrë të ndryshme?',
		1	=> 'Administratori i bordit mund të ndryshojë ngjyrën e një grupi antarësimi për të dalluar antarët e atij grupi.',
	),
	array(
		0	=> 'Çfarë është një grup i paracaktuar',
		1	=> 'Nëse jeni antar i më shumë se një grupi, i paracaktuari përdorët për të vendosur për ngjyrën dhe rangun që do të përdoret për ju. Administratori i bordit mund t’ju japë të drejta që të ndryshoni grupin e paracaktuar nëpërmjet Panelit të Antarit.',
	),
	array(
		0	=> 'Çfarë është link-u “Drejtuesit”?',
		1	=> 'Kjo faqe ju njeh me listën e plotë të stafit të bordit, duke përfshirë administratorët e bordit, moderatoret si dhe detaje për forumet që ata moderojnë.',
	),
	array(
		0	=> '--',
		1	=> 'Mesazhet private',
	),
	array(
		0	=> 'Nuk mund të dërgoj mesazh privat!',
		1	=> 'Ka tre arsye për këtë; ju nuk jeni të regjistruar dhe/ose të identifikuar, administratori i bordit ka ç’aktivizuar mesazhet private ose administratori i bordit ju ka ndaluar ju përdorimin e mesazheve private. Kontaktoni një administrator të bordit për më tepër informacion.',
	),
	array(
		0	=> 'Vazhdoj të marr mesazhe private të padëshiruara!',
		1	=> 'Ju mund të bllokoni një përdorues në mënyrë që ai mos t’ju dërgojë më mesazhe private, nëpërmjet Panelit të Antarit. Nëse ju merrni mesazhe private abuzive nga një përdorues, informoni administratorin e bordit. Ai ka fuqinë të ndalojë një përdorues të dërgojë mesazhe private.',
	),
	array(
		0	=> 'Kam marrë një e-mail spam ose abuziv nga dikush në këtë bord!',
		1	=> 'Na vjen keq që dëgjojmë një gjë të tillë. Funksioni i e-mail në këtë bord përfshin agjentë sigurie që mundohen të gjejnë përdorues që dërgojnë postime të tilla. Kështu që dërgojini një e-mail administratorit të bordit duke përfshirë mesazhin e plotë të marrë. Eshtë shumë e rëndësishme që në këtë e-mail të përshihet pjesa e sipërme e mesazhit të marrë ku përfshihen të dhënat e dërguesit. Administratori mund të marrë masat më pas.',
	),
	array(
		0	=> '--',
		1	=> 'Miqtë dhe armiqtë',
	),
	array(
		0	=> 'Çfarë janë listat e miqve dhe amiqve?',
		1	=> 'Ju mund të përdorni listat për të organizuar antarët e tjerë të bordit. Antarët e shtuar në listën e miqve tuaj do të shfaqen në Panelin e Antarit nga ku ju mund të shikoni statusin e tyre (në linjë ose jo) dhe t’u dërgoni atyre mesazhe private. Në varësi të maskës së bordit, postimet e miqve tuaj mund të veçohen në ngjyrë të ndryshme që të vihen re nga ju. Nëse ju shtoni një përdorues në listën tuaj të armiqve, çdo postim i bërë prej tyre do të fshihet automatikisht për ju.',
	),
	array(
		0	=> 'Si mund të shtoj ose të fshij përdorues nga lista e miqve ose armiqve?',
		1	=> 'Ju mund të shtoni përdorues në listën tuaj në dy mënyra. Nëpërmjet profilit të çdo përdoruesi; aty ndodhet një link për të shtuar përdoruesin në listën e miqve ose armiqve. Mënyra e dytë është nëpërmjet Panelit të Antarit, ku ju mund të shtoni antarët direkt duke shkruar pseudonimin e tyre. Që këtu ju mund edhe të fshini emrat e përdoruesve nga lista.',
	),
	array(
		0	=> '--',
		1	=> 'Kërkimi në forume',
	),
	array(
		0	=> 'Si mund të kërkoj një forum ose disa forume?',
		1	=> 'Shkruaj një term kërkimi në kutizën e kërkimit që ndodhet në faqen kryesore, forume, ose tema. Kërkimi i avancuar mund të përdoret duke klikuar link-un “Kërkim i avancuar” që gjëndet në të gjitha faqet e bordit. ',
	),
	array(
		0	=> 'Pse kërkimi im nuk gjen rezultate?',
		1	=> 'Kërkimi juaj ishte mbase jo i qartë ose ka përfshirë terma shumë të zakonshëm të cilët nuk janë indeksuar nga phpBB3. Tregohuni me specifik dhe përdorni funksionet në Kërkimin e avancuar.',
	),
	array(
		0	=> 'Pse kerkimi im kthehet në faqe bosh!?',
		1	=> 'Kërkimi juaj gjeti shume rezultate duke ngarkuar kështu webserverin. Përdorni “Kërkimin e avancuar” dhe tregohuni më specifik në përdorimin e termave të kërkimit.',
	),
	array(
		0	=> 'Si mund të kërkoj për antarë?',
		1	=> 'Vizitoni faqen “Antarët” dhe klikoni “Gjej një antar”',
	),
	array(
		0	=> 'Si mund të gjej postimet dhe temat e mia?',
		1	=> 'Postimet tuaja mund të gjënden duke klikuar “Kërko postime të përdoruesit” nëpërmjet Panelit te Antarit ose nëpërmjet vetë profilit tuaj. Për të kërkuar temat tuaja, përdorni Kërkimin e avancuar dhe plotësoni fushat me opsione të ndryshme të përshtatshme.',
	),
	array(
		0	=> '--',
		1	=> 'Të pëlqyerat dhe Abonimet',
	),
	array(
		0	=> 'Cili është ndryshimi ndërmjet “Të pëlqyera (Bookmarking)” dhe “Abonimi?',
		1	=> 'Të shtosh si të pëlqyera në phpBB3, është si të shtosh si të pëlqyera në shfletuesin tuaj. Ju nuk njoftoheni kur ka ndonjë zhvillim, por ju mund të ktheheni në atë temë më vonë. Ndërsa Abonimi, do t’ju njoftojë kur në temë ose forum ka një zhvillim, nëpërmjet metodës ose metodave të preferuara nga ju.',
	),
	array(
		0	=> 'Si mund të abonohem në një forum ose temë specifike?',
		1	=> 'Për t’u abonuar në një forum specifik, klikoni tek link-u “Abonohu tek forumi” kur gjëndeni në atë forum. Për t’u abonuar në një temë, postoni në atë temë që doni me kutizën përkatëse të zgjedhur, ose klikoni “Abonohu tek tema” kur gjëndeni brënda saj.',
	),
	array(
		0	=> 'Si mund të heq një abonim?',
		1	=> 'Për të hequr abonimet, shkoni tek Paneli i Antarit dhe ndiqni link-un për abonimet.',
	),
	array(
		0	=> '--',
		1	=> 'Shtojcat',
	),
	array(
		0	=> 'Çfarë shtojcash lejohen në këtë bord?',
		1	=> 'Çdo administrator bordi mund të lejojë ose jo disa lloje shtojcash. Nëse nuk jeni i sigurt çfarë lejohet të ngarkohet, kontaktoni administratorin e bordit për asistencë.',
	),
	array(
		0	=> 'Si mund të gjej të gjitha shtojcat e mia?',
		1	=> 'Për të gjetur listën e shtojcave që keni ngarkuar, shkoni tek Paneli i Antarit dhe ndiqni link-un për tek seksioni i shtojcave.',
	),
	array(
		0	=> '--',
		1	=> 'Problemet e phpBB 3',
	),
	array(
		0	=> 'Kush e ka shkruar këtë bord buletin?',
		1	=> 'Ky soft (në formën e tij të pamodifikuar) është prodhuar, ka dalë dhe është me të drejtat e <a href="http://www.phpbb.com/">phpBB Group</a>. Eshtë mundësuar nën GNU General Public License dhe mund të shpërndahet falas. Shikoni link-un për detaje të mëtejshme.\' ',
	),
	array(
		0	=> 'Përse X funksion nuk është i përfshirë?',
		1	=> 'Ky soft është shkruar dhe liçensuar nga phpBB Group. Nëse mendoni që një funksion duhet të shtohet, vizitoni faqen phpbb.com dhe shihni çfarë phpBB Group ka për të thënë. Ju lutemi të mos bëni kërkesa për funksione në bordin phpbb.com, ai grup përdor SourceForge për të menaxhuar funksionet e reja. Lexoni forumet dhe shikoni çfarë, nëse ndonjë, ose në vet mund të jemi në përgatitjen e një funksioni të ri dhe më pas ndiqni proçedurën e dhënë.',
	),
	array(
		0	=> 'Kë duhet të kontaktoj për materiale abuzive ose/dhe të jashtligjshme në bord?',
		1	=> 'Çdo administrator që ndodhet në listën “Drejtuesit” është një pikë kontakti e përshtatshme për ankesat tuaja. Nëse kështu nuk merrni një përgjigje atherë duhet të kontaktoni të zotin e faqes. (Bëni një kërkim me anë të <a href="http://www.google.com/search?q=whois">whois lookup</a>) ose, nëse ky bord funksionon në një host falas (p.sh. Yahoo!, free.fr, f2s.com, etj.), kontaktoni departamentin e menaxhimit ose të abuzimit të atij shërbimi. Vini re që phpBB Group <strong>nuk ka absolutisht juridiksion</strong> dhe nuk mundet në asnjë lloj mënyre të jetë përgjegjës për mënyrën se si, ku dhe nga kush përdoret ky bord. Mos kontaktoni phpBB Group në lidhje me ndonjë material të jashtligjshëm  <strong>jo drejtpërdrejtë të lidhur</strong> me faqen phpBB.com ose vetë softin e phpBB. Nëse i dërgoni e-mail phpBB Group rreth përdorimit të këtij softi nga <strong>palë të treta</strong>, atherë mund të prisni ndonjë përgjigje të cekët ose ndoshta edhe nuk merrni përgjigje.',
	),
);

?>