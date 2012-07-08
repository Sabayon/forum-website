<?php
/**
*
* help_faq.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-08-11 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
		1	=> 'Vprašanja v zvezi z registracijo in prijavo',
	),
	array(
		0	=> 'Zakaj se ne morem prijaviti?',
		1	=> 'Obstaja kar nekaj razlogov, zakaj se to lahko zgodi. Najprej se prepričajte, če ste vnesli pravilno uporabniško ime in geslo. Če ste, potem kontaktirajte administratorja in se prepričajte, da vas niso izključili. Možno je tudi, da se je pojavila napaka v nastavitvah foruma, za kar pa bo moral poskrbeti sam administrator.',
	),
	array(
		0	=> 'Zakaj se pravzaprav moram registrirati?',
		1	=> 'Morda se vam ni potrebno, saj administrator sam določi, ali je za objavljanje prispevkov na določenem forumu potrebna registracija ali ne. Ne glede na to pa vam registracija omogoči dostop do dodatnih možnosti, ki za goste niso dosegljive, npr. avatarji oz. podobe, pošiljanje zasebnih sporočil, prejemanje sporočil ostalih uporabnikov, opisi skupin uporabnikov itd. in ker vam bo vzelo le kakšno minuto, je priporočljivo, da se registrirate.',
	),
	array(
		0	=> 'Čemu avtomatska odjava?',
		1	=> 'Če ne obkljukate možnosti <em>Samodejna prijava</em> ko se prijavite, boste prijavljeni le začasno, se pravi ko ste dejansko na forumu. Ta nastavitev preprečuje morebitno zlorabo vašega računa. Če želite ostati prijavljeni, med prijavo obkljukajte prej omenjeno možnost, kar pa vam odsvetujemo, če do foruma dostopate s tujega računalnika, npr. v knjižnici, internetnem "kafiču", študentski računalnici itd. Če možnosti ne vidite, jo je administrator odstranil. ',
	),
	array(
		0	=> 'Kako preprečim vidnost svojega uporabniškega imena na listi prijavljenih (online) uporabnikov?',
		1	=> 'Na vaši Uporabniški Nadzorni Plošči boste pod Nastavitvami foruma našli možnost <em>Skrij moj status prisotnosti</em>. Omogočite to možnost z obkljukanjem <samp>Da</samp> polja in boste vidni samo administratorjem, moderatorjem in seveda vam. Šteti boste kot eden izmed skritih uporabnikov.',
	),
	array(
		0	=> 'Pozabil sem geslo!',
		1	=> 'Brez skrbi! Vaše sedanje geslo sicer ne more biti dobljeno nazaj, je pa lahko brez težav na novo postavljeno. Obiščite stran za prijavo in kliknite na <em>Pozabil sem geslo</em>. Sledite navodilom in v kratkem se boste zopet lahko prijavili. ',
	),
	array(
		0	=> 'Registriral sem se, vendar se ne morem prijaviti!',
		1	=> 'Najprej preverite uporabniško ime in geslo. Če sta pravilna, potem obstajata dve možni težavi. Če je vključena možnost "COPPA support" (COPPA podpora) in ste se med registracijo označili za starega pod 13 let, boste morali slediti navodilom, ki ste jih prejeli. Nekateri forumi bodo od vas ali od administratorja celo zahtevali ponovno registracijo, predno se boste lahko prijavili; ta informacija vam je bila podana tudi med registracijo. Če ste prejeli elektronsko sporočilo, sledite navodilom, če pa ga niste, ste najbrž vnesli napačni e-mail naslov ali pa vam je sporočilo izbrisal filter za "spam" oz. nezaželeno pošto. Če ste prepričani, da ste vnesli pravilen e-mail naslov, kontaktirajte administratorja.',
	),
	array(
		0	=> 'Že pred časom sem se registriral, a se naenkrat ne morem več prijaviti?!',
		1	=> 'Poskusite najdi elektronsko sporočilo, ki ste ga prejeli ob vaši prvi registraciji in preverite vaše uporabniško ime in geslo ter poskusite znova. Možno je, da je administrator z nekim razlogom deaktiviral ali izbrisal vaš račun. Veliko forumov je tudi nastavljenih tako, da odstranijo uporabnike, ki dolgo časa ne objavijo ničesar, saj se tako zmanjša baza podatkov. Če se je zgodilo slednje, se poskušajte ponovno registrirati in biti v prihodnje bolj udeleženi v debatah.
',
	),
	array(
		0	=> 'Kaj je COPPA?',
		1	=> 'COPPA oz. Child Online Privacy and Protection Act of 1998 (Akt o otroški zasebnosti in zaščiti na spletu iz leta 1998) je zakon v Združenih Državah, ki od spletnih strani, ki potencialno posedujejo podatke mladostnikov starih pod 13 let, zahteva pisno potrdilo staršev ali kakšen drug pravni dokument z vsebino, da se zakoniti skrbnik mladostnika strinja z oddajo osebnih podatkov svojega oskrbovanca. Če niste prepričani, ali se to tiče vas kot nekoga, ki se želi registrirati, ali spletne strani, na kateri poskušate z registracijo, se za pomoč obrnite na pravni svet. Vedite, da phpBB Group ne more nuditi pravnih nasvetov in ni pravi naslov za kakršna koli pravna vprašanja, razen tistih, ki so navedena spodaj.',
	),
	array(
		0	=> 'Zakaj se ne morem registrirati?',
		1	=> 'Možno je, da je administrator blokiral vaš IP naslov ali uporabniško ime, s katerim se skušate registrirati. Možno je tudi, da je administrator onemogočil registracijo, da bi preprečil vstop novih obiskovalcev. Z vprašanji se obrnite na administratorja foruma.',
	),
	array(
		0	=> 'Čemu služi možnost "Izbriši vse piškotke foruma"?',
		1	=> '"Izbriši vse piškotke foruma" izbriše vse piškotke, ki jih je ustvaril phpBB in ki vam omogočajo verodostojnost in prijavljenost na forumu. Prav tako omogočajo možnosti kot npr. read tracking, če seveda niso bile prepovedane s strani administratorja. Če imate težave s prijavljanjem ali odjavljanjem, vam bo brisanje piškotkov morda pomagalo. ',
	),
	array(
		0	=> '--',
		1	=> 'Uporabniške nastavitve',
	),
	array(
		0	=> 'Kako spremenim svoje nastavitve?',
		1	=> 'Če ste registriran uporabnik, so vse vaše nastavitve shranjene v forumovi podatkovni bazi. Če jih želite spremeniti, obiščite stran svoje Uporabniške Nadzorne Plošče (povezavo ponavadi najdete na vrhu strani foruma poleg še nekaterih povezav). Ta sistem vam bo omogočil spremembo vseh vaših nastavitev.',
	),
	array(
		0	=> 'Čas ni pravilen!',
		1	=> 'Možno je, da je prikazan čas iz drugega časovnega pasu in je zato nepravilen. Če je problem v tem, potem obiščite vašo Uporabniško Nadzorno Ploščo in spremenite časovni pas na vam ustreznega, npr. na London, Pariz, New York, Sydney itd. Vedite pa, da je spreminjanje časovnega pasu možno le za registrirane uporabnike, kakor tudi za večino ostalih nastavitev. Če torej še niste registrirani, je sedaj dobra priložnost, da to storite.
',
	),
	array(
		0	=> 'Spremenil sem časovni pas, pa čas še vedno ni pravilen!',
		1	=> 'Če ste prepričani, da ste pravilno nastavili časovni pas in upoštevali poletni oz. zimski premik ure, čas pa je še vedno napačen, potem je nepravilno nastavljena ura na strežniku. Prosimo, opozorite administratorja na napako, da bo lahko rešil težavo. ',
	),
	array(
		0	=> 'Mojega jezika ni na seznamu!',
		1	=> 'Obstajata dve možnosti: ali administrator ni nastavil vašega jezika ali pa forum ni preveden v želen jezik. Obrnite se na administratorja, če lahko namesti želen jezikovni paket. Če le-ta ne obstaja, lahko sami ustvarite nov prevod (če želite). Več informacij lahko najdete na spletni strani phpBB (povezava je na dnu strani). ',
	),
	array(
		0	=> 'Kako dodam podobo poleg svojega uporabniškega imena?',
		1	=> 'Dve podobi se lahko pojavita pod uporabniškim imenom med prebiranjem prispevka. Prva podoba je povezana z vašim rangom/stopnjo - ponavadi je v obliki zvezdic, stolpcev ali krogcev, in prikazuje, koliko prispevkov ste objavili ali pa vaš status na forumu. Druga podoba je ponavadi večja in je poznana kot "avatar" - navadno je edinstvena in osebna za vsakega uporabnika. Administrator foruma je tisti, ki avatarje omogoči in določi, kako in kje jih uporabniki lahko izberejo. Če torej avatarjev ne morete uporabiti, se obrnite na administratorja foruma in se pozanimajte, zakaj je temu tako.',
	),
	array(
		0	=> 'Kaj je moj rang oz. stopnja in kako ga spremenim?',
		1	=> 'Rangi oz. stopnje, ki se pojavijo pod uporabniškim imenom, prikazujejo, koliko prispevkov ste objavili, ali pa identificirajo določene uporabnike, npr. moderatorje in administratorje. Na splošno ne morete direktno spremeniti besedišča katerih koli rangov na forumu, saj jih je nastavil administrator. Prosimo, da foruma ne izkoriščate za objavljanje po nepotrebnem, samo da bi zvišali svoj rang. Večina forumov tega ne tolerira, zato vam lahko moderator ali administrator preprosto omejita število dovoljenih objav.',
	),
	array(
		0	=> 'Zakaj sem ob kliku na e-mail povezavo nekega uporabnika pozvan k prijavi?',
		1	=> 'Samo registrirani uporabniki lahko pošiljajo e-maile ostalim uporabnikom in še to samo, če je administrator to možnost nastavil. Temu je tako, da bi anonimnim uporabnikom preprečili neprimerno uporabo sistema spletne pošte.',
	),
	array(
		0	=> '--',
		1	=> 'Poglavje o objavljanju',
	),
	array(
		0	=> 'Kako na forumu objavim temo?',
		1	=> 'Za objavo nove teme kliknite na ustrezen gumb na strani foruma ali pa na strani, kjer je seznam tem. Morda se vam bo pred objavo prispevka potrebno registrirati. Na dnu strani foruma (ali strani objavljenih tem) je na voljo seznam dovoljenih možnosti, npr. Objavite lahko nove teme, Lahko glasujete v anketah itd.',
	),
	array(
		0	=> 'Kako uredim ali izbrišem objavo?',
		1	=> 'Izbrišete ali urejate lahko samo vaše prispevke, razen če ste moderator ali administrator foruma. Prispevek urejate tako, da za ustrezen prispevek kliknete na gumb "uredi", vendar je ta možnost včasih na voljo le nekaj časa po objavi prispevka. Če je nekdo že odgovoril na vaš prispevek, boste ob vrnitvi na temo pod prispevkom našli besedilo, ki prikazuje, kolikokrat in kdaj ste že uredili prispevek. Kot že rečeno, se bo besedilo pojavilo le, če je že nekdo podal odgovor, ne bo pa se pojavilo, če sta prispevek uredila moderator ali administrator. V slednjem primeru boste morda našli le zaznamek, zakaj je bil prispevek prirejen. Vedite pa, da običajni uporabniki ne morejo več izbrisati prispevka, potem ko je nekdo že napisal odgovor.',
	),
	array(
		0	=> 'Kako svoji objavi dodam podpis?',
		1	=> 'Če želite svojemu prispevku dodati podpis, ga morate najprej ustvariti in sicer na vaši Uporabniški Nadzorni Plošči. Ko to opravite, preprosto kliknite na oz. obkljukajte <em>Dodaj podpis</em> (na obrazcu za objavljanje prispevkov). Podpis lahko dodate tudi kot privzeto, kar storite tako, da v nastavitvah svojega profila obkljukate ustrezno nastavitev. Če se odločite za to možnost, lahko podpis v posameznih prispevkih še vedno izbrišete - odkljukajte okence "dodaj podpis" pri samem obrazcu za pošiljanje.',
	),
	array(
		0	=> 'Kako ustvarim anketo?',
		1	=> 'Kliknite na gumb "Ustvari anketo" pod glavnim obrazcem za pošiljanje in sicer ko objavljate novo temo ali urejate prvi prispevek na določeno temo; če gumba ne morete videti, potem nimate primernih dovoljenj za ustvaritev ankete. V ustrezna okna vstavite naslov in vsaj dve možnosti ter se prepričajte, da je vsaka možnost v svojem polju. Lahko tudi določite, koliko možnosti lahko uporabnik med glasovanjem izbere (pod "Možnosti na uporabnika"), časovno omejitev ankete (0 za nedoločeno trajanje) in možnost, da uporabniki svoj glas popravijo.',
	),
	array(
		0	=> 'Zakaj anketi ne morem dodati več možnosti?',
		1	=> 'Omejitev možnosti pri anketi nastavi administrator. Če se vam zdi, da morate vaši anketi dodati več možnosti kot je dovoljeno, se obrnite na administratorja foruma.',
	),
	array(
		0	=> 'Kako uredim ali izbrišem anketo?',
		1	=> 'Kakor prispevke lahko ankete urejajo le moderator, administrator ali pa tisti, ki jo je ustvaril. Če želite urediti anketo, najprej kliknite na ureditev prvega prispevka v temi; to je vedno povezano z anketo. Če ni še nihče oddal svojega glasu, lahko uporabnik anketo uredi ali izbriše, če pa so člani že glasovali, jo lahko uredi/izbriše le moderator ali administrator. To preprečuje spremembo ankete nekje na sredi izvajanja.',
	),
	array(
		0	=> 'Zakaj do nekega foruma ne morem dostopati?',
		1	=> 'Nekateri forumi so lahko omejeni na določene uporabnike ali skupine. Za branje, objavljanje ali kakršno koli drugo možnost boste morda potrebovali posebno dovoljenje. Za odobritev vašega vstopa na forum se obrnite na moderatorja ali administratorja foruma. ',
	),
	array(
		0	=> 'Zakaj ne morem dodati priponk?',
		1	=> 'Dovoljenja za priponke so dodeljena glede na forum ali pa glede na uporabnika. Administrator foruma morda ni dovolil dodajanje priponk na forumu, na katerem ste, ali pa je ta možnost dovoljena le določeni skupini. Če ne veste, zakaj vam ta možnost ni omogočena, se obrnite na administratorja foruma.',
	),
	array(
		0	=> 'Zakaj sem prejel opozorilo?',
		1	=> 'Vsak administrator ima za svoj forum določena svoja pravila. Če ste kakšno od teh pravil prekršili, ste verjetno prejeli opozorilo. Vedite, da je to odločitev administratorja foruma in da skupina phpBB nima nič z morebitnimi opozorili. Kontaktirajte administratorja foruma, da vam pojasni, zakaj ste prejeli obvestilo.',
	),
	array(
		0	=> 'Kako lahko o objavah poročam moderatorju?',
		1	=> 'Če je administrator to možnost omogočil, bi morali gumb za poročanje o prispevku videti poleg prispevka, ki ga želite prijaviti. Klik na ta gumb vas bo popeljal skozi potrebne korake, ki jih morate opraviti. ',
	),
	array(
		0	=> 'Čemu v objavljanju tem služi gumb "Shrani"?',
		1	=> 'To vam omogoča, da nedokončan prispevek shranite in ga kasneje dopolnite ter predložite. Za ponovno naložitev shranjenega prispevka obiščite Uporabniško Nadzorno Ploščo. ',
	),
	array(
		0	=> 'Zakaj mora biti moj prispevek odobren?',
		1	=> 'Administrator se lahko odloči, da je na forumu, kjer objavljate prispevke, potrebno le-te pred objavo pregledati. Možno je tudi, da vas je administrator uvrstil v skupino uporabnikov, katerih prispevki morajo biti pred objavo pregledani. Za nadaljnje informacije se obrnite na administratorja foruma.',
	),
	array(
		0	=> 'Kako prestavim svojo temo?',
		1	=> 'S klikom na gumb "Premakni temo" lahko temo, ko jo pregledujete, premaknete na vrh foruma na prvi strani. Če te možnosti ne vidite, je morda izključena ali pa še ni preteklo dovolj časa od zadnjega premika. Temo je možno premakniti tudi z odgovarjanjem nanjo, vendar bodite previdni in sledite pravilom foruma, če se poslužujete te možnosti.',
	),
	array(
		0	=> '--',
		1	=> 'Oblikovanje foruma in vrste tem',
	),
	array(
		0	=> 'Kaj je BBKoda?',
		1	=> 'BBKoda je posebna izboljšava HTML-ja, ki ponuja večji oblikovni nadzor nad določenimi deli prispevka. Uporabo BBKode omogoči administrator, vendar jo lahko tudi onemogočite v obrazcu za pošiljanje prispevka. Sama BBKoda je stilno precej podobna HTML-ju, le da so tag-i priloženi v oglatih oklepajih [ in ] namesto v &lt; in &gt;. Za več informacij se oglejte vodnik, do katerega lahko dostopate tudi s strani za objavljanje.',
	),
	array(
		0	=> 'Ali lahko uporabljam HTML?',
		1	=> 'Ne, na tem forumu ni mogoče objavljati HTML-ja. Večino oblikovanja, ki ga omogoča uporaba HTML-ja, je lahko nadomeščena z uporabo BBKode. ',
	),
	array(
		0	=> 'Kaj so smeški?',
		1	=> 'Smeški oz. angleško Smilies so majhne podobe, ki jih lahko uporabljate za izražanje čustev, npr. :) pomeni veselje, medtem ko :( nakazuje žalost. Celoten seznam smeškov lahko vidite na obrazcu za pošiljanje. Ne uporabljajte jih prekomerno, saj lahko prispevek tako hitro postane neberljiv, moderator pa bo izbrisal vaše smeške ali pa kar celoten prispevek. Administrator foruma je morda celo nastavil številčno omejitev uporabe smeškov, ki jih lahko v prispevku uporabite.',
	),
	array(
		0	=> 'Ali lahko objavljam tudi podobe?',
		1	=> 'Da, tudi podobe lahko objavite v prispevku. Če je administrator dovolil uporabo priponk, boste podobo lahko naložili na forum, drugače pa morate navesti povezavo z javno dostopnim strežnikom, na katerem je podoba shranjena, npr. http://www.primer-strani.com/moja-slika.gif. S slikami na vašem računalniku ne morete ustvariti povezave (razen če je javno dostopen strežnik), prav tako ne s podobami shranjenimi za verodostojnimi mehanizmi, npr. s poštnimi nabiralniki hotmail ali yahoo, s stranmi, ki so zaščitene z geslom itd. Za naložitev podobe uporabite tag BBKode [img].',
	),
	array(
		0	=> 'Kaj so globalna obvestila?',
		1	=> 'Globalna obvestila vsebujejo pomembne informacije, zato je priporočljivo, da jih kar se da pogosto prebirate. Pojavijo se na vrhu foruma in znotraj vaše Uporabniške Nadzorne Plošče. Dovoljenja za globalna obvestila dodeli administrator foruma. ',
	),
	array(
		0	=> 'Kaj so razglasi?',
		1	=> 'Razglasi pogosto vsebujejo za forum pomembne informacije in tudi za razglase je priporočljivo, da jih berete čim pogosteje. Pojavijo se na vrhu vsake strani foruma, na katerega so poslana. Kakor že za globalna obvestila tudi za razglase dodeli dovoljenja administrator foruma.',
	),
	array(
		0	=> 'Kaj predstavljajo NE PREZRI (lepljivek) teme?',
		1	=> '"Ne prezrite" oz. "lepljivek" teme se znotraj foruma pojavijo samo na prvi strani in sicer pod razglasi. So precej pomembne, zato jih redno prebirajte. Dovoljenja za "NE PREZRI" ("lepljivek") teme so, kakor za globalna obvestila in za razglase, dodeljena s strani administratorja foruma.',
	),
	array(
		0	=> 'Kaj so zaklenjene teme?',
		1	=> 'Zaklenjene teme so tiste teme, kjer uporabniki ne morejo več odgovarjati, morebitne ankete, ki jih vsebuje, pa so končane. Teme so lahko zaklenjene iz večih razlogov, zaklenita pa jih lahko tako moderator kakor tudi admnistrator foruma. Tudi sami imate morda možnost, da svojo temo zaklenete, kar pa je seveda odvisno od možnosti in dovoljenj, ki vam jih je dodelil administrator foruma.',
	),
	array(
		0	=> 'Kaj so ikone tem?',
		1	=> 'Ikone tem so podobe/slike, ki jih je izbral avtor teme in se navezujejo na vsebino. Ali lahko ikone tem uporabljate ali ne, je odvisno od možnosti oz. dovoljenj, ki vam jih je odobril administrator foruma. ',
	),
	array(
		0	=> '--',
		1	=> 'Uporabniški nivoji in skupine',
	),
	array(
		0	=> 'Kaj so Administratorji?',
		1	=> 'Administratorji so tisti člani, ki imajo največjo stopnjo nadzora nad celotnim forumom. Ti člani lahko nadzorujejo vse dele obratovanja foruma, vključno z nastavljanjem dovoljenj, izključevanjem uporabnikov, ustvarjanjem uporabniških skupin ali moderatorjev itd., vsa ta njihova dejanja pa so odvisna od tega, kakšna dovoljenja jim je dodelil ustanovitelj foruma. Lahko imajo celo vse moderatorske zmožnosti posameznih forumih, kar pa je zopet odvisno od tega, ali je te nastavitve omogočil ustanovitelj foruma.',
	),
	array(
		0	=> 'Kaj so Moderatorji?',
		1	=> 'Moderatorji so posamezniki (ali skupine posameznikov), ki dnevno skrbijo za forume. Imajo dovoljenje, da prispevke preoblikujejo ali zbrišejo in da zaklenejo, odklenejo, premaknejo, razdelijo ali izbrišejo teme na forumu, ki ga moderirajo. V splošnem so torej moderatorji tisti, ki preprečujejo, da bi uporabniki skrenili s teme ali da bi objavljali nasilne/žaljive vsebine.',
	),
	array(
		0	=> 'Kaj so uporabniške skupine?',
		1	=> 'Uporabniške skupine so skupine uporabnikov in so namenjene temu, da udeležence foruma razdelijo v obvladljive sekcije, s katerimi administrator lahko upravlja. Vsak uporabnik lahko pripada večim skupinam, vsaka skupina pa ima svoje možnosti in dovoljenja. Ta način omogoča, da administrator večim uporabnikom naenkrat spremeni dovoljenja, kot npr. spreminjanje dovoljenj moderatorjem ali dovoljenje, da uporabniki dostopajo do zasebnega foruma.',
	),
	array(
		0	=> 'Kje se nahajajo uporabniške skupine in kako se kakšni priključiti?',
		1	=> 'Seznam uporabniških skupin lahko vidite pod povezavo "Uporabniške skupine", ki se nahaja na vaši Uporabniški Nadzorni Plošči. Če bi se kakšni radi pridružili, kliknite na ustrezen gumb, vendar vedite, da niso vse splošno dostopne. Nekatere za vstop zahtevajo dovoljenje, nekatere so zaprte in nekatere imajo celo skrito članstvo. Če je torej skupina odprta, se ji lahko pridružite s klikom na ustrezen gumb. Če skupina zahteva dovoljenje, lahko s klikom na ustrezen gumb zaprosite za članstvo. Vodja skupine bo članstvo potrdil (ali ne) in vas prej morda še vprašal, zakaj se skupini želite pridružiti. Prosimo, da voditelja skupine ne nadlegujete, če se odloči zavrniti vašo prošnjo za članstvo; zagotovo ima svoje razloge za to.',
	),
	array(
		0	=> 'Kako postanem vodja uporabniške skupine?',
		1	=> 'Voditelj uporabniške skupine je ponavadi določen takrat, ko skupino ustvari administrator foruma. Če se zanimate za ustvaritev nove uporabniške skupine, se najprej obrnite na administratorja (pošljite mu zasebno sporočilo). ',
	),
	array(
		0	=> 'Zakaj se nekatere uporabniške skupine pojavljajo v različnih barvah?',
		1	=> 'Možno je, da je administrator članom uporabniške skupine določil barvo, kar pa služi temu, da se med seboj lažje prepoznajo. ',
	),
	array(
		0	=> 'Kaj je "Privzeta uporabniška skupina"?',
		1	=> 'Če pripadate večim uporabniškim skupinam, je vaša privzeta skupina tista, od katere privzamete barvo in rang (oboje je vidno ostalim uporabnikom). Administrator foruma lahko dodeli možnost, da svojo privzeto uporabniško skupino spremenite, in sicer na vaši Uporabniški Nadzorni plošči. ',
	),
	array(
		0	=> 'Kaj je povezava "Ekipa"?',
		1	=> 'Na tej povezavi najdete seznam osebja foruma, vključno z administratorjem foruma in moderatorji, pa tudi ostale podrobnosti, npr. katere forume te osebe moderirajo. ',
	),
	array(
		0	=> '--',
		1	=> 'Pošiljanje zasebnih sporočil',
	),
	array(
		0	=> 'Ne morem poslati zasebnega sporočila!',
		1	=> 'Obstajajo trije razlogi, zakaj tega ne morete storiti: 1. niste registrirani in/ali prijavljeni, 2. administrator foruma je za ves forum preprečil pošiljanje zasebnih sporočil, 3. administrator foruma vam je preprečil pošiljanje sporočil. Za več informacij se obrnite na administratorja foruma.',
	),
	array(
		0	=> 'Nenehno dobivam nezaželena zasebna sporočila!',
		1	=> 'Določenega uporabnika lahko blokirate in mu s tem preprečite pošiljanje zasebnih sporočil (to lahko nastavite na vaši Uporabniški Nadzorni Plošči). Če od določenega uporabnika prejemate žaljiva sporočila, o tem obvestite administratorja foruma, saj mu le-ta lahko prepreči nadaljno pošiljanje zasebnih sporočil.',
	),
	array(
		0	=> 'Od nekoga na forumu sem dobil vsiljeno (spam) oz. žaljivo sporočilo!',
		1	=> 'Zelo nam je žal, da se je to zgodilo. Obrazec za pošiljanje elektronske pošte vsebuje varnostne točke, preko katerih poskušamo zaslediti uporabnike, ki izrabljajo to storitev, zato vas naprošamo, da administratorju foruma pošljete kopijo celotnega sporočila. Zelo pomembno je, da ta kopija vsebuje tudi t.i. "header" (del, kjer so podrobnosti o pošiljatelju), saj bo tako administrator lahko ukrepal.',
	),
	array(
		0	=> '--',
		1	=> 'Prijatelji in Sovražniki',
	),
	array(
		0	=> 'Kdo so moji Prijatelji in Sovražniki na seznamu?',
		1	=> 'Te sezname lahko uporabite za organizacijo ostalih članov foruma. Člani z vašega seznama Prijateljev bodo dostopni tudi na Uporabniški Nadzorni Plošči pod hitro povezavo, da boste lahko videli njihov status prisotnosti in da jim boste lahko pošiljali zasebna sporočila. Če boste koga dodali pod Sovražnike, bodo vsa njegova sporočila skrita in avtomatsko izbrisana.',
	),
	array(
		0	=> 'Kako lahko uporabnike dodam na oz. odstranim s seznama Prijateljev in Sovražnikov?',
		1	=> 'Uporabnike lahko na seznam dodajate na dva načina. Znotraj profila vsakega uporabnika je povezava, preko katere ga lahko dodate na seznam Prijateljev ali Sovražnikov. Druga možnost je vaša Uporabniška Nadzorna Plošča, kjer uporabnike dodate neposredno z vnosom njihovega članskega imena. Z enako metodo lahko uporabnike tudi odstranite s seznama.',
	),
	array(
		0	=> '--',
		1	=> 'Iskanje po forumih',
	),
	array(
		0	=> 'Kako lahko preiščem forum oz. forume?',
		1	=> 'V okno za iskanje (na osnovni strani ali na strani tem) vpišite želeno besedo. Lahko uporabite tudi napredno iskanje, do katerega pridete, če na kateri koli strani foruma kliknete na povezavo "Napredno iskanje". Kako dostopate do iskanja je odvisno od stila, ki je na forumu uporabljen.',
	),
	array(
		0	=> 'Zakaj je moje iskanje brez rezultatov?',
		1	=> 'Iskano geslo je bilo verjetno preveč splošno in je posledično vključevalo veliko splošnih pojmov, ki jih phpBB3 nima zabeleženih. Bodite bolj natančni in uporabite možnosti Naprednega iskanja. ',
	),
	array(
		0	=> 'Zakaj je odgovor na moje iskanje zgolj prazna stran!?',
		1	=> 'Rezultat vašega iskanja je preveč zadetkov za zmožnosti spletnega brskalnika. Uporabite "Napredno iskanje" in bolj natančno definirajte iskan pojem in forume, ki naj bodo preiskani. ',
	),
	array(
		0	=> 'Kako poiščem določene člane?',
		1	=> 'Obiščite stran "Člani" in kliknite na povezavo "Najdi člana".',
	),
	array(
		0	=> 'Kako najdem svoje objave in teme?',
		1	=> 'Vaše prispevke lahko najdete tako na vaši Uporabniški Nadzorni Plošči pod povezavo "Poišči uporabnikove prispevke", kot tudi na strani vašega profila. Če želite poiskati vaše teme, uporabite Napredno iskanje in primerno vpišite različne možnosti. ',
	),
	array(
		0	=> '--',
		1	=> 'Naročnine na teme in zaznamki',
	),
	array(
		0	=> 'Kakšna je razlika med zaznamki in naročninami na teme?',
		1	=> 'Določanje zaznamkov je na phpBB3-ju precej podobno kot na spletnem iskalniku. O morebitnih nadgradnjah niste obveščeni, vendar se lahko kasneje zopet vrnete na temo. Če pa se boste na določeno temo naročili, boste o nadgradnji teme ali foruma obveščeni.',
	),
	array(
		0	=> 'Kako se na določene forume ali teme naročim?',
		1	=> 'Za naročnino na določen forumu kliknite na povezavo "Opazuj forum" na strani foruma. Za naročnino na neko temo pa preprosto odgovorite na doslej napisane prispevke s klikom na povezavo "Odgovor", ki se nahaja v temi sami ali kliknite na povezavo "Obveščaj o prispevkih".',
	),
	array(
		0	=> 'Kako svojo naročnino odstranim?',
		1	=> 'Za odstranitev vaših naročnin pojdite na vašo Uporabniško Nadzorno Ploščo in sledite povezavam do vaših naročnin.',
	),
	array(
		0	=> '--',
		1	=> 'Priponke',
	),
	array(
		0	=> 'Katere priponke so dovoljene na tem forumu?',
		1	=> 'Vsak administrator foruma lahko določene tipe priponk dovoli ali pa ne. Če ne veste, kaj je dovoljeno naložiti in kaj ne, se obrnite na administratorja foruma. ',
	),
	array(
		0	=> 'Kako najdem svoje priponke?',
		1	=> 'Če želite najti seznam priponk, ki ste jih naložili, pojdite na vašo Uporabniško Nadzorno Ploščo in sledite povezavam do dela o priponkah. ',
	),
	array(
		0	=> '--',
		1	=> 'O programu phpBB',
	),
	array(
		0	=> 'Kdo je ustvaril ta forum?',
		1	=> 'Ta program je (v nespremenjeni obliki) avtorsko delo <a href="http://www.phpbb.com/">phpBB Group</a>. Javnosti je na voljo pod pogoji GNU General Public Licence in se lahko prosto posreduje drugim uporabnikom. Za več informacij obiščite povezavo. ',
	),
	array(
		0	=> 'Zakaj funkcija X ni na voljo?',
		1	=> 'Ta programska oprema je delo skupine phpBB Group, ki ima zanj tudi licenco. Če mislite, da bi bilo treba dodati kakšno dodatno funkcijo, potem obiščite stran phpbb.com in si oglejte, kaj o tem pravi phpBB Group. Prosimo vas, da na forumu na strani phpbb.com ne objavljate prošenj za nove funkcije. phpBB Group za te namene uporablja forume za izmenjavo mnenj (SourceForge). Prosimo, da preberete forume in si ogledate, kakšno je naše mnenje glede posameznih funkcij in potem sledite navodilom, ki jih boste dobili tam.',
	),
	array(
		0	=> 'Koga lahko kontaktiram glede zlorab in pravnih zadev v zvezi s tem forumom?',
		1	=> 'Obrnite se na administratorja tega foruma. Če ne najdete njegovega kontaktnega naslova, se obrnite na enega od moderatorjev in vprašajte koga morate kontaktirati. Če še vedno ne dobite odziva, se obrnite na lastnika domene (do podatkov pridete preko <a href="http://www.google.com/search?q=whois">whois lookup</a>). Če forum gostuje na brezplačnem serverju (npr. yahoo, free.fr, f2s.com, etc.), se obrnite na njihov oddelek za zlorabo storitev. Zavedati se morate, da phpBB Group nima <strong>popolnoma nobenega nadzora</strong> in zato ne more biti odgovorna za to, kdo uporablja njihov forum. Popolnoma nesmiselno je kontaktirati phpBB Group v zvezi s pravnimi zadevami, ki <strong>niso direktno povezane</strong> s stranjo phpbb.com ali z njihovo programsko opremo. Če boste vseeno poslali sporočilo phpBB Group o uporabi njihovega foruma, se zavedajte, da boste v najboljšem primeru dobili le kratek odgovor, v večini primerov pa sploh ne boste dobili odgovora.',
	),
);

?>