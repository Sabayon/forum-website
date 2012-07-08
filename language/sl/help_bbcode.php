<?php
/**
*
* help_bbcode.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-05 - KoMar, mitja_i, NoBody, nSk, Razor, Tody, Veron
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
		1	=> '',
	),
	array(
		0	=> 'Kaj je BBKoda?',
		1	=> 'BBKoda je posebna izvedba HTML-ja, ki jo za uporabo omogoča (ali ne) moderator. BBKodo lahko tudi onespodobite na obrazcu za vnos sporočila, s tem da pred objavo odkljukaš ustrezno polje. Sama BBKoda je kot sistem podobna HTML-ju, html tag-i so priloženi v oglatih oklepajih [ and ] in ne v &lt; and &gt; in omogočajo večji nadzor nad tem, kako je določena stvar prikazana. Glede na šablono, ki jo uporabljate, lahko ugotovite, da je dodajanje BBKode vašim prispevkom lažje s klikom na vmesni gumb nad območjem sporočila, in sicer na formi pošiljanja. Kljub temu vama bodo sledeča navodila lahko prišla prav.',
	),
	array(
		0	=> '--',
		1	=> 'Oblikovanje teksta',
	),
	array(
		0	=> 'Kako oblikovati odebeljen, poševen in podčrtan teks',
		1	=> 'BBKoda vsebuje tag-e, ki vam omogočajo, da hitro zamenjate osnovni stil vašega besedila. To lahko dosežete na naslednje načine: <ul><li>Če želite del besedila odebeliti, ga označite z <strong>[b][/b]</strong>, npr. <br /><br /><strong>[b]</strong>Živjo<strong>[/b]</strong><br /><br />bo postal <strong>Živjo</strong></li><li>Za podčrtavanje uporabite <strong>[u][/u]</strong>, na primer:br /><br /><strong>[u]</strong>Dobro jutro<strong>[/u]</strong><br /><br />postane br /><br /><strong>[u]</strong>Dobro jutro<strong>[/u]</strong><br /><br />Za poševno besedilo uporabite <strong>[i][/i]</strong>, npr.<br /><br />To je <strong>[i]</strong>super!<strong>[/i]</strong><br /><br />postane To je <i>super!</i></li></ul>',
	),
	array(
		0	=> 'Kako tekstu spremeniti barvo in velikost',
		1	=> 'Za spreminjanje velikosti in barve besedila lahko uporabite naslenje tag-e. Ne pozabite, da je izgled pravzaprav odvisen od brskalnika in sistema obiskovalca: <ul><li>Spremembo barve besedila dosežete tako, da besedilo označite z <strong>[color=][/color]</strong>. Določite lahko prepoznano ime barve (npr. rdeča, modra, rumena itd.) ali pa alternativo heksadecimalnega trojčka, npr. #FFFFFF, #000000. Če želite na primer besedilo obarvati rdeče, lahko uporabite:<br /><br /><strong>[color=red]</strong>Živjo!<strong>[/color]</strong><br /><br />ali<br /><br /><strong>[color=#FF0000]</strong>Živjo!<strong>[/color]</strong><br /><br />bosta oba postala<span style="color:red">Živjo!</span></li><li>Spreminjanje velikosti besedila je doseženo na podoben način, z uporabo <strong>[size=][/size]</strong>. Ta tag je sicer odvisen od šablone, ki jo izbere uporabnik, vendar je priporočen format številčna vrednost, ki predstavlja velikost besedila v procentih, začenši z 20 in do 200 (zelo veliko). Na primer:<br /><br /><strong>[size=30]</strong>MAJHNO<strong>[/size]</strong><br /><br />bo načeloma <span style="font-size:30%;">MAJHNO</span><br /><br />medtem ko bo:<br /><br /><strong>[size=200]</strong>OGROMNO!<strong>[/size]</strong><br /><br /> <span style="font-size:200%;">OGROMNO!</span></li></ul>',
	),
	array(
		0	=> 'Ali lahko kombiniram oblikovne tag-e?',
		1	=> 'Da, seveda lahko. Da na primer pridobite pozornost nekoga, lahko napišete:<br /><br /><strong>[size=150][color=red][b]</strong>POGLEJ ME!<strong>[/b][/color][/size]</strong><br /><br />to bi izgledalo kot <span style="color:red;font-size:250%;"><strong>POGLEJ ME!</strong></span><br /><br />Vam pa ne priporočamo, da tako preoblikujete veliko teksta. To je na vas; poster, ki omogoča tag-e, je pravilno zaprt. Za primer, sledeče je nepravilno:<br /><br /><strong>[b][u]</strong>To je narobe<strong>[/b][/u]</strong>
',
	),
	array(
		0	=> '--',
		1	=> 'Citiranje in izpisovanje besedila s točno določeno širino',
	),
	array(
		0	=> 'Citiran tekst v odgovorih',
		1	=> 'Obstajata dva načina za citiranje besedila, z referenco ali brez nje.<ul><li>Ko uporabljate funkcijo Citiranje v odgovoru na prispevek na moderatorski plošči, boste opazili, da je besedilo prispevka dodano sporočilnemu oknu, ki je priloženo v <strong>[quote=&quot;&quot;][/quote]</strong> bloku. Ta metoda vam dovoljuje, da citirate z referenco na osebo ali na karkoli že si izberete. Na primer, če želite citirati del besedila, ki vam ga je napisal Mr. Blobby, vstavite:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Besedilo, ki vam ga je napisal Mr. Blooby<strong>[/quote]</strong><br /><br />Besedilo Mr. Blooby je napisal: bo dodano avtomatsko pred dejansko besedilo. Zapomnite si, da <strong>morate</strong> vključiti navednice &quot;&quot; okoli imena, ki ga citirate; le-te niso izbirne narave.</li><li>Druga metoda vam omogoča, da slepo citirate nekaj. Za uporabo le-te označite besedilo z <strong>[quote][/quote]</strong> tag-i. Ko boste pregledali sporočilo, se bo besedilo preprosto pojavilo v citirajočem bloku.</li></ul>',
	),
	array(
		0	=> 'Koda prikaza ali podatek o točno določeni širini ',
		1	=> 'Če želite vnesti kodo ali karkoli, kar zahteva točno določeno širino, npr. tip pisave Courier, morate besedilo označiti z <strong>[code][/code]</strong> tag-i, npr.<br /><br /><strong>[code]</strong>echo &quot;To je neka koda&quot;;<strong>[/code]</strong><br /><br />Vsa oblikovanja, uporabljena v okviru <strong>[code][/code]</strong> tag-ov, bodo ohranjena, ko jih boste kasneje pogledali. Osvetljevanje PHP kode je lahko omogočeno z uporabo <strong>[code=php][/code]</strong> in je priporočeno pri pošiljanju primerkov PHP kode, saj izboljša čitljivost. ',
	),
	array(
		0	=> '--',
		1	=> 'Ustvarjanje seznamov',
	),
	array(
		0	=> 'Ustvarjanje neurejenega seznama',
		1	=> 'BBKoda podpira dva tipa seznamov, neurejenega in urejenega. Le-ti so pravzaprav enaki kot njihove HTML ekvivalente. Na neurejeni seznam je vsak del razvrščen po vrsti, vsak v svojo vrstico in označen s krogcem. Če želite ustvariti neurejen seznam, uporabite <strong>[list][/list]</strong> in znotraj seznama označite vsak del z uporabo <strong>[*]</strong>. Npr. za razvrstitev vaših najljubših barv lahko uporabite:br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rdeča<br /><strong>[*]</strong>Modra<br /><strong>[*]</strong>Rumena<br /><strong>[/list]</strong><br /><br />To bi ustvarilo sledeči seznam:<ul><li>Rdeča</li><li>Modra</li><li>Rumena</li></ul>',
	),
	array(
		0	=> 'Ustvarjanje urejenega seznama',
		1	=> 'Drugi tip seznama, urejeni seznam, vam omogoča nadzor nad tem, kar je pred vsakim delom seznama. Če želite ustvariti urejen seznam, uporabite <strong>[list=1][/list]</strong> za tvorbo oštevilčenega seznama ali alternativno <strong>[list=a][/list]</strong> za tvorbi abecednega seznama. Kakor pri neurejenem seznamu so posamezni deli označeni z <strong>[*]</strong>. Na primer:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Pojdi v trgovino<br /><strong>[*]</strong>Kupi nov računalnik<br /><strong>[*]</strong>Zmerjaj računalnik, kadar se sesuje<br /><strong>[/list]</strong><br /><br />bo izgledalo takole:<ol style="list-style-type: arabic-numbers"><li>Pojdi v trgovino</li><li>Kupi nov računalnik</li><li>Zmerjaj računalnik, kadar se sesuje</li></ol>Za abecedni seznam pa bi uporabili:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Prvi možni odgovor<br /><strong>[*]</strong>Drugi možni odgovor<br /><strong>[*]</strong>Tretji možni odgovor<br /><strong>[/list]</strong><br /><br />in bi nastalo<ol style="list-style-type: lower-alpha"><li>Prvi možni odgovor</li><li>Drugi možni odgovor</li><li>Tretji možni odgovor</li></ol>',
	),
	array(
		0	=> '--',
		1	=> 'Ustvarjanje povezav',
	),
	array(
		0	=> 'Povezovanje z naslednjo stranjo',
		1	=> 'phpBB BBKoda podpira vrsto načinov za ustvarjanje URL-jev oz. Uniform Resource Indicators (torej identifikatorjev vaših lokacij v internetu, kar ni nič drugega kot celoten interneten naslov).<ul><li>Prvi od teh načinov uporablja <strong>[url=][/url]</strong> tag; karkoli boste namreč napisali za znakom =, se bo začelo obnašati kot URL. Na primer, za povezavo phpBB.com lahko uporabite:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Obiščite phpBB!<strong>[/url]</strong><br /><br />, kar bi ustvarilo sledečo povezavo <a href="http://www.phpbb.com/">Obiščite phpBB!</a> Vedite, da je to, ali se povezava odpre v istem ali naslednjem oknu, odvisno od možnosti in nastavitev brskalnika uporabnika.</li><li>Če želite, da je URL prikazan kot povezava, lahko to preprosto storite z uporabo:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />To bo ustvarilo sledečo povezavo, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Dodatno phpBB vsebuje tudi nekaj, kar se imenuje <i>Magic Links</i>; ta možnost bo vsak slovnično pravilen URL spremenila v povezavo, ne da bi vam bilo treba določiti kakršen koli tag ali dodati http://. Če na primer v vaše sporočilo napišete www.phpbb.com, se bo to avtomatsko spremenilo v <a href="http://www.phpbb.com/">www.phpbb.com</a> in bo vidno, ko boste sporočilo pogledali.</li><li>Enako se nanaša tudi na e-mail naslove. Naslov lahko izrecno označite, na primer:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />, kar bo vidno kot <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, ali pa samo v sporočilo napišete no.one@domain.adr in se bo avtomatsko preobrazil, ko boste sporočilo pogledali.</li></ul>URL-je lahko označite in uporabite katerekoli tag-e, kot npr. <strong>[img][/img]</strong> (poglejte naslednji vnos), <strong>[b][/b]</strong>, itd. Kakor z oblikovnimi tagi je tudi to vaša odgovornost, da zagotovite pravilen red odpiranja in zapiranja, na primer:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />je<span style="text-decoration: underline">not</span> pravilno, kar lahko vodi v brisanje vašega prispevka, zato bodite pozorni.',
	),
	array(
		0	=> '--',
		1	=> 'Prikaz podob v prispevkih',
	),
	array(
		0	=> 'Dodajanje podobe v prispevek',
		1	=> 'phpBB BBKoda vsebuje tag za vključevanje podob v vaše prispevke. Pri tem sta dve zelo pomembni stvari, ki jih morate vedeti pri uporabi tega tag-a: veliko uporabnikov ne odobrava prekomerne uporabe podob v prispevkih in pa podoba, ki jo uporabite, mora biti dostopna na internetu (ne more npr. obstajati samo na vašem računalniku, razen če vodite internetni strežnik!). Za prikaz podobe morate obkrožiti URL, ki se povezuje s podobo, z <strong>[img][/img]</strong> tag-i. Na primer:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Kakor že omenjeno v zgornji sekciji o URL-ju, lahko podobo označite z <strong>[url][/url]</strong> tag-om, če tako želite, npr.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />se pokaže kot:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>',
	),
	array(
		0	=> 'Dodajanje priponk v prispevek',
		1	=> 'Priponke so sedaj lahko priložene v katerikoli del prispevka z uporabo nove <strong>[attachment=][/attachment]</strong> BBKode, če je bila funkcionalnost priponk omogočena s strani moderatorja plošče &amp; in če so vam torej dana primerna dovoljenja za ustvaritev priponk. Znotraj ekrana za pošiljanje je nabiralnik (drop-down box) za dodajanje priponk v vrsto. 
',
	),
	array(
		0	=> '--',
		1	=> 'Ostale zadeve',
	),
	array(
		0	=> 'Ali lahko dodajam svoje tag-e?',
		1	=> 'Če ste moderator na tej moderatorski plošči in imate primerna dovoljenja, lahko dodate nadaljnje BBKode skozi sekcijo Običajne BBKode.',
	),
);

?>