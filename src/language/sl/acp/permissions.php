<?php
/**
*
* acp_permissions.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-11-28 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB, Legoless
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
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'	=> 'Tu lahko kopirate dovoljenja iz enega na drugega oz. na več drugih forumov hkrati.',
	'COPY_PERMISSIONS_CONFIRM'	=> 'Ali ste prepričani, da želite izvesti to operacijo? Zavedati se morate, da bo to dejanje prepisalo vsa obstoječa dovoljenja na izbranih ciljnih forumih.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Izvorni forum, iz katerega želite kopirati dovoljenja.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'	=> 'Ciljni forumi na katere želite nanesti kopirana dovoljenja.',
	'COPY_PERMISSIONS_FROM'	=> 'Kopiraj dovoljenja od',
	'COPY_PERMISSIONS_TO'	=> 'Nanesi (kopiraj) dovoljenja na',
	'ROLE_FORUM_NEW_MEMBER'	=> 'Novo registriran uporabnik',
	'ROLE_USER_NEW_MEMBER'	=> 'Novo registrirani uporabniki',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'	=> 'Vloga za uporabnike, ki so v posebni skupini novo registriranih uporabnikov; vsebuje <samp>NIKOLI</samp> dovoljenja, s katerim zaklenete možnosti za nove uporabnike.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'	=> 'Vloga za uporabnike, ki so v posebni skupini novo registriranih uporabnikov; vsebuje <samp>NIKOLI</samp> dovoljenja, s katerim zaklenete možnosti za nove uporabnike.',
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Dovoljenja so strnjena v štiri glavne skupine:</p>

		<h2>Splošna dovoljenja</h2>
		<p>Namenjena so splošni kontroli dostopa in so veljavna za celoten forum. Nadaljnje so razdeljena na dovoljenja uporabnikov, skupin, administratorjev in globalnih moderatorjev.</p>

		<h2>Dovoljenja foruma</h2>
		<p>Namenjena kontroli dostopa do posameznih forumov. Nadalnje so razdeljena na dovoljenja forumov, dovoljenja moderatorjev foruma, dovoljenja uporabnikov in dovoljenja skupin.</p>

		<h2>Dovoljenja po vlogah</h2>
		<p>Namenjena ustvarjanju skupin dovoljenj oz. vlog, ki se dodelijo določenemu uporabniku oz. forumu. Vloge se lahko dodatno dodajajo, urejajo in brišejo.</p>

		<h2>Shematski ogled dovoljenj</h2>
		<p> Ogled delujočih dovoljenj, ki so dodeljena uporabnikom, moderatorjem (lokalnim in globalnim), administratorjem ali forumom.</p>
	
		<br />

		<p>Za nadalnje informacije o nastavitvah in urejaju dovoljenj na vašem phpBB3 forumu, prosim poglejte <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>',
	'ACL_NEVER'	=> 'Nikoli',
	'ACL_SET'	=> 'Nastavitve dovoljenj',
	'ACL_SET_EXPLAIN'	=> 'Dovoljenja so osnovana po principu <samp>DA</samp>/<samp>NE</samp>. Izbira <samp>NIKOLI</samp> za uporabnika ali skupino uporabnikov velja več kot katero koli drugo dovoljenje. Če ne želite dodeliti posameznega dovoljenja uporabniku oz. skupini, potem izberite možnost <samp>NE</samp>. Če so dovoljenja nastavljena že kje drugje, potem bodo obveljala, drugače pa bo obveljala nastavitev <samp>NE</samp>. Z pomočjo označitve polj (z kljukico) lahko nastavite dovoljenj, ampak manj natančno.',
	'ACL_SETTING'	=> 'Nastavitve',
	'ACL_TYPE_A_'	=> 'Administrativna dovoljenja',
	'ACL_TYPE_F_'	=> 'Dovoljenja forumov',
	'ACL_TYPE_M_'	=> 'Moderatorska dovoljenja',
	'ACL_TYPE_U_'	=> 'Uporabniška dovoljenja',
	'ACL_TYPE_GLOBAL_A_'	=> 'Administrativna dovoljenja',
	'ACL_TYPE_GLOBAL_U_'	=> 'Uporabniška dovoljenja',
	'ACL_TYPE_GLOBAL_M_'	=> 'Dovoljenja globalnih moderatorjev',
	'ACL_TYPE_LOCAL_M_'	=> 'Dovoljenja moderatorjev',
	'ACL_TYPE_LOCAL_F_'	=> 'Dovoljenja forumov',
	'ACL_NO'	=> 'Ne',
	'ACL_VIEW'	=> 'Ogled dovoljenj',
	'ACL_VIEW_EXPLAIN'	=> 'Tukaj lahko vidite dovoljenja, ki jih ima uporabnik oz. skupina. Rdeč kvadrat označuje, da uporabnik oz. skupina nima dovoljenja, zeleni pa pomeni da to dovoljenje uporabnik oz. skupina ima.',
	'ACL_YES'	=> 'Da',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'Tukaj lahko nastavite dovoljenja administratorjev do uporabnikov in skupin. Vsi uporabniki z administrativnimi dovoljenji lahko vidijo nadzorno ploščo administratorjev.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'Tukaj lahko nastavite uporabnike in skupine uporabnikov kot moderatorje forumov. Za dodelitev dostopa uporabnikov do foruma, za dodelitev globalnih moderatorskih dovoljenj ali administrativnih dovoljenj uporabite temu namenjeno stran.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'Tukaj lahko določite kateri uporabniki in skupine uporabnikov imajo dostop do določenih forumov. Za dodelitev moderatorjev ali definiranje administratorjev uporabite temu namenjeno stran.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'Tukaj lahko nastavite dovoljenja globalnih moderatorjev do uporabnikov oz. uporabniških skupin. Ti moderatorji so podobni navadni moderatorjem, le da imajo dostop do vseh forumov.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Tukaj lahko nastavite skupinska forumska dovoljenja.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'Tukaj lahko nastavite splošno dovoljenja do skupin  - dovoljenja uporabnikov, dovoljenja globalnih moderatorjev in dovoljenja administratorjev. Uporabniška dovoljenja vključujejo možnosti, kot so: uporaba avatarjev, pošiljanje zasebnih sporočil, itd. Dovoljenja globalnih moderatorjev, kot so: odobravanje objav, urejanje tem, urejanje izključitev, itd. administrativna dovoljenja, kot so: urejanje dovoljenj, določanje BB kode po meri, urejanje forumov, itd. Dovoljenja posameznih uporabnikov naj bi se spreminjala v redkih primerih, primernejša rešitev pa je ustvarjanje skupin z določenimi pravili in dodelitev uporabnika tej skupini.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'Tukaj lahko urejate vloge administrativnih dovoljenj. Vloge so učinkovita dovoljenja. S spreminjanjem določenih vlog spreminjate tudi nekatera dovoljenja.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'Tukaj lahko urejate vloge za dovoljenja forumov. Vloge so učinkovita dovoljenja. Z spreminjanjem določenih vlog spreminjate tudi nekatera dovoljenja.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'Tukaj lahko urejate vloge za moderativna dovoljenja. Vloge so učinkovita dovoljenja. Z spreminjanjem določenih vlog spreminjate tudi nekatera dovoljenja.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'Tukaj lahko urejate vloge za dovoljenja uporabnikov. Vloge so učinkovita dovoljenja. Z spreminjanjem določenih vlog spreminjate tudi nekatera dovoljenja.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Tukaj lahko določite forumska dovoljenja uporabnikom.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'Tukaj lahko določite splošna dovoljenja do uporabnikov - dovoljenja uporabnikov, dovoljenja globalnih moderatorjev in dovoljenja moderatorjev. Uporabniška dovoljenja vključujejo možnosti, kot so: uporaba avatarjev, pošiljanje zasebnih sporočil, itd. Dovoljenja globalnih moderatorjev, kot so: odobravanje objav, urejanje tem, urejanje izključitev, itd. administrativna dovoljenja, kot so: urejanje dovoljenja, določanje BB kode po meri, urejanje forumov, itd. Za spreminjanje teh nastavitev za večje število uporabnikov je primernejša rešitev ustvarjanje skupin z določenimi pravili in dodelitev uporabnika tej skupini.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Tukaj si lahko ogledate administrativna dovoljenja, dodeljenih izbranim uporabnikom oz. skupinam.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tukaj si lahko ogledate globalna moderatorska dovoljenja, dodeljena izbranim uporabnikom oz. skupinam.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Tukaj si lahko ogledate forumska dovoljenja, dodeljena izbranim uporabnikom oz. skupinam.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tukaj si lahko ogledate moderatorska dovoljenja, dodeljena izbranim uporabnikom oz. skupinam.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Tukaj si lahko ogledate uporabniška dovoljenja, dodeljena izbranim uporabnikom oz. skupinam.',
	'ADD_GROUPS'	=> 'Dodaj skupino',
	'ADD_PERMISSIONS'	=> 'Dodaj dovoljenje',
	'ADD_USERS'	=> 'Dodaj uporabnika',
	'ADVANCED_PERMISSIONS'	=> 'Napredne nastavitve',
	'ALL_GROUPS'	=> 'Izberi vse skupine',
	'ALL_NEVER'	=> 'Vse <samp>NIKOLI</samp>',
	'ALL_NO'	=> 'Vse <samp>NE</samp>',
	'ALL_USERS'	=> 'Izberi vse uporabnike',
	'ALL_YES'	=> 'Vse <samp>DA</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'Uveljavi vsa dovoljenja',
	'APPLY_PERMISSIONS'	=> 'Uveljavi dovoljenja',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Dovoljenja in vloge bodo uveljavljene samo za to in vse izbrane možnosti.',
	'AUTH_UPDATED'	=> 'Dovoljenja so posodobljena.',
	'CREATE_ROLE'	=> 'Ustvari vlogo',
	'CREATE_ROLE_FROM'	=> 'Uporabi nastavitve iz…',
	'CUSTOM'	=> 'Poljubno…',
	'DEFAULT'	=> 'Privzeto',
	'DELETE_ROLE'	=> 'Izbriši vlogo',
	'DELETE_ROLE_CONFIRM'	=> 'Ste prepričani, da želite izbrisati to vlogo?',
	'DISPLAY_ROLE_ITEMS'	=> 'Poglej možnost te vloge',
	'EDIT_PERMISSIONS'	=> 'Uredi dovoljenja',
	'EDIT_ROLE'	=> 'Uredi vlogo',
	'GROUPS_NOT_ASSIGNED'	=> 'Nobena skupina ni dodeljena tej vlogi',
	'LOOK_UP_GROUP'	=> 'Poglej uporabniško skupino',
	'LOOK_UP_USER'	=> 'Poglej uporabnika',
	'MANAGE_GROUPS'	=> 'Uredi skupine',
	'MANAGE_USERS'	=> 'Uredi uporabnike',
	'NO_AUTH_SETTING_FOUND'	=> 'Nastavitve dovoljenj niso določene.',
	'NO_ROLE_ASSIGNED'	=> 'Nobena vloga ni dodeljena…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nastavitve do te vloge ne spremijo dovoljenj na desni. če želite ponastaviti ali izbrisati vsa dovoljenja uporabite možnost “Vse <samp>NE</samp>”.',
	'NO_ROLE_AVAILABLE'	=> 'Nobena vloga ni na voljo',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Prosim poimenujte vlogo.',
	'NO_ROLE_SELECTED'	=> 'Vloga ni najdena.',
	'NO_USER_GROUP_SELECTED'	=> 'Niste izbrali nobenega uporabnika ali skupine.',
	'ONLY_FORUM_DEFINED'	=> 'Določili ste samo forume v vaši izbiri. Prosimo izberite še najmanj enega uporabnika ali skupino.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Dovoljenja in vloge bodo veljavne za vse označene možnosti',
	'PLUS_SUBFORUMS'	=> '+podforume',
	'REMOVE_PERMISSIONS'	=> 'Odstrani dovoljenja',
	'REMOVE_ROLE'	=> 'Odstrani vloge',
	'RESULTING_PERMISSION'	=> 'Posledično dovoljenje',
	'ROLE'	=> 'Vloga',
	'ROLE_ADD_SUCCESS'	=> 'Vloga uspešno dodana.',
	'ROLE_ASSIGNED_TO'	=> 'Uporabniki/Skupine dodeljene %s',
	'ROLE_DELETED'	=> 'Vloga uspešno odstranjena.',
	'ROLE_DESCRIPTION'	=> 'Opis vloge',
	'ROLE_ADMIN_FORUM'	=> 'Administrator foruma',
	'ROLE_ADMIN_FULL'	=> 'Popolni administrator',
	'ROLE_ADMIN_STANDARD'	=> 'Navadni administrator',
	'ROLE_ADMIN_USERGROUP'	=> 'Nastavitve uporabnikov in skupin',
	'ROLE_FORUM_BOT'	=> 'Dostop botov',
	'ROLE_FORUM_FULL'	=> 'Polni dostop',
	'ROLE_FORUM_LIMITED'	=> 'Omejen dostop',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Omejen dostop + ankete',
	'ROLE_FORUM_NOACCESS'	=> 'Brez dostopa',
	'ROLE_FORUM_ONQUEUE'	=> 'Na čakanju za moderiranje',
	'ROLE_FORUM_POLLS'	=> 'Navaden dostop + ankete',
	'ROLE_FORUM_READONLY'	=> 'Dostop samo za branje',
	'ROLE_FORUM_STANDARD'	=> 'Navaden dostop',
	'ROLE_MOD_FULL'	=> 'Popolni moderator',
	'ROLE_MOD_QUEUE'	=> 'Čakalni moderator',
	'ROLE_MOD_SIMPLE'	=> 'Enostavni moderator',
	'ROLE_MOD_STANDARD'	=> 'Standardni moderator',
	'ROLE_USER_FULL'	=> 'Vse možnosti',
	'ROLE_USER_LIMITED'	=> 'Omejene možnosti',
	'ROLE_USER_NOAVATAR'	=> 'Brez avatarja',
	'ROLE_USER_NOPM'	=> 'Brez zasebnih sporočil',
	'ROLE_USER_STANDARD'	=> 'Navadne možnosti',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Lahko dostopa do nastavitev in dovoljenj foruma.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Ima dostop do vseh administrativnih možnosti.<br />Nepriporočljivo.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Ima dostop do večine administrativnih možnosti, nima pa dostopa do sistemskih nastavitev in nastavitev serverja.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Lahko ureja skupine in uporabnike, spreminja poooblastila, nastavitve, ureja izključitve in ureja titule',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'Ta vloga je priporočljiva za bote in iskalne pajke',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Lahko uporablja vse možnosti foruma, vključujoč z objavljanjem obvestil in lepljivih objav. Lahko ignorira omejitev prenatrpanosti.<br />Nepriporočljivo za navadne uporabnike.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Lahko uporabi nekatere možnosti foruma, ne more pa pripenjati datotek ali uporabljati ikon sporočila.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Enako kot pri omejenem dostopu, le da lahko ustvarja ankete.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Ne more videti, niti dostopati do foruma.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Lahko uporablja večino možnosti, vključujoč: priponke, toda objave in teme morajo biti odobreni s strani administratorja.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Enako kot navaden dostop, le da lahko ustvarja ankete.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Lahko bere forum, ne more pa ustvarjani novih tem ali odgovarjati na objave.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Lahko uporablja večino možnosti, vključujoč: priponke in brisanje lastnih objav, ne more zaklepati lastnih objav in ustvarjati anket.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Lahko uporablja vse moderatorske možnosti, vključno z izključevanjem.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Lahko uporablja samo moderatorsko vrsto za potrditev in urejanje objav.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Lahko uporablja samo osnovne možnosti tem. Ne more pošiljati opozoril ali uporabljati moderatorske vrste.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Lahko uporablja večino moderatorskih orodij, ne more pa izključiti uporabnika ali spremeniti avtorja objave.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Lahko uporablja vse dosegljive možnosti foruma za uporabnike, vključujoč: spremeba uporabniškega imena ali neupoštevati prenatrpanosti.<br />Nepriporočljivo.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Lahko dostopa do nekaterih uporabniških možnosti. Priponke, elektronske pošte, hitra sporočila niso dovoljena.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Ima omejene možnosti in ne more uporabljati možnosti avatarja.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Ima omejene možnosti in ne more uporabljati zasebnih sporočil.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Lahko uporablja večino, ampak ne vseh možnosti. Ne more spremeniti uporabniškega imena ali neupoštevati prenatrpanosti',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'Lahko vnašate kratka pojasnila o vlogah vlog ali čemu so namenjene. Besedilo, ki ga vnesete tukaj bo prikazano tudi v oknih dovoljenj.',
	'ROLE_DESCRIPTION_LONG'	=> 'Opis vloge je predolg, prosimo omejite ga na 4000 znakov.',
	'ROLE_DETAILS'	=> 'Podrobnosti vloge',
	'ROLE_EDIT_SUCCESS'	=> 'Vloga uspešno urejena.',
	'ROLE_NAME'	=> 'Ime vloge',
	'ROLE_NAME_ALREADY_EXIST'	=> 'Vloga z imenom <strong>%s</strong> za določeni tip dovoljenja že obstaja.',
	'ROLE_NOT_ASSIGNED'	=> 'Vloga še ni bila dodeljena.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'Izbrani forum(i) ne obstaja(o).',
	'SELECTED_GROUP_NOT_EXIST'	=> 'Izbrana skupina(e) ne obstaja(o).',
	'SELECTED_USER_NOT_EXIST'	=> 'Izbrani uporabnik(i) ne obstaja(o).',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forum, ki ga izbirate tukaj bo prav tako vključeval vse podforume.',
	'SELECT_ROLE'	=> 'Izberite vlogo…',
	'SELECT_TYPE'	=> 'Izberite tip',
	'SET_PERMISSIONS'	=> 'Nastavite dovoljenja',
	'SET_ROLE_PERMISSIONS'	=> 'Nastavite dovoljenj vlog',
	'SET_USERS_PERMISSIONS'	=> 'Nastavite dovoljenja uporabnikov ',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nastavite dovoljenja forumov',
	'TRACE_DEFAULT'	=> 'Privzeto je vsako dovoljenje <samp>NE</samp> (nenastavljeno). Druge nastavitve lahko prepišejo ta dovoljenja.',
	'TRACE_FOR'	=> 'Slediti za',
	'TRACE_GLOBAL_SETTING'	=> '%s (splošno)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Dovoljenje te skupine je nastavljeno na <samp>NIKOLI</samp>, kot skupni rezultat skupna nastavitev, tako da je nov rezultat ohranjen.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Dovoljenje te skupine, za ta forum, je nastavljeno na <samp>NIKOLI</samp> kot skupna nastavitev, tako da je nov rezultat ohranjen.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Dovoljenje te skupine je nastavljeno na <samp>NIKOLI</samp>, katero postane nova splošna nastavitev, ker še ni bila nastavljena (nastavljena na <samp>NE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Dovoljenje te skupine, za ta forum, je nastavljeno na <samp>NIKOLI</samp>, katero, postane nova splošna nastavitev, ker še ni bila nastavljena (nastavljena na <samp>NE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Dovoljenje te skupine je nastavljeno na <samp>NIKOLI</samp>, katero prepiše splošne nastavitve tega uporabnika iz <samp>DA</samp> na <samp>NIKOLI</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Dovoljenje te skupine za ta forum je nastavljeno na <samp>NIKOLI</samp>, katero prepiše splošne nastavitve tega uporabnika iz <samp>DA</samp> na <samp>NIKOLI</samp>.',
	'TRACE_GROUP_NO'	=> 'Dovoljenje <samp>NE</samp>, za to skupino, tako da je stara nastavitev ohranjena.',
	'TRACE_GROUP_NO_LOCAL'	=> 'Dovoljenje <samp>NE</samp>, za to skupino, znotraj tega foruma, tako da je stara nastavitev ohranjena.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Dovoljenje te skupine je nastavljeno na <samp>DA</samp>, ampak splošni <samp>NIKOLI</samp> ne more biti prepisan.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Dovoljenje te skupine, za ta forum, je nastavljeno na <samp>DA</samp>, ampak splošni <samp>NIKOLI</samp> ne more biti prepisan.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Dovoljenje te skupine je nastavljeno na <samp>DA</samp>, katero postane nova nastavitev, ker še ni bila nastavljena. (nastavljena na <samp>NE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Dovoljenje te skupine, za ta forum, je nastavljeno na <samp>DA</samp>, katero postane nova nastavitev, ker še ni bila nastavljena. (nastavljena na <samp>NE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'Dovoljenje te skupine je nastavljeno na <samp>DA</samp>, in skupno dovoljenje je že nastavljeno na <samp>DA</samp>, tako da je skupen rezultat ohranjen.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Dovoljenje te skupine, za ta forum, je nastavljeno na <samp>DA</samp>, in skupno dovoljenje je že nastavljeno na <samp>DA</samp>, tako da je skupni rezultat ohranjen.',
	'TRACE_PERMISSION'	=> 'Sledi dovoljenju - %s',
	'TRACE_RESULT'	=> 'Sledi rezultatu',
	'TRACE_SETTING'	=> 'Sledi nastavitvi',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'Neodvisno uporabniško dovoljenje foruma se sklicuje na <samp>DA</samp>, ampak skupno dovoljenje je že nastavljeno na <samp>DA</samp>, tako da je skupni razultat ohranjen. %sSledi splošna dovoljenja%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'Neodvisno uporabniško dovoljenje foruma se sklicujeo <samp>DA</samp>, prepiše trenutni lokalni rezultat <samp>NIKOLI</samp>. %sSledi splošna dovoljenja%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Neodvisno uporabniško dovoljenje foruma se sklicuje <samp>NIKOLI</samp>, ne vpliva pa na lokalno nastavitev. %sSledi splošna dovoljenja%s',
	'TRACE_USER_FOUNDER'	=> 'Uporabnik ima nastavitve ustanovitelja, zato so administrativna dovoljenja privzeto nastavljena na <samp>DA</samp>.',
	'TRACE_USER_KEPT'	=> 'Uporabniško dovoljenje je <samp>NE</samp>, tako da je skupna vrednnost ohranjena.',
	'TRACE_USER_KEPT_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je <samp>NE</samp>, tako da je skupna vrednost ohranjena.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Uporabniško dovoljenje je nastavljeno na <samp>NIKOLI</samp> in skupna vrednost na <samp>NIKOLI</samp>, tako da ni nič spremenjeno.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je nastavljeno na <samp>NIKOLI</samp> in skupna vrednost na <samp>NIKOLI</samp>, tako da ni nič spremenjeno.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'Uporabniško dovoljenje je nastavljeno na <samp>NIKOLI/samp>, postane pa skupna vrednost, ker je bila nastavljena na NE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je nastavljeno na <samp>NIKOLI/samp>, postane pa skupna vrednost, ker je bila nastavljena na NE.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Uporabniško dovoljenje je nastavljeno na <samp>NE</samp>, in prepiše vse prejšnje <samp>DA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je nastavljeno na <samp>NE</samp>, in prepiše vse prejšnje <samp>DA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'Uporabniško dovoljenje je <samp>NE</samp> in skupna vrendost je bila nastavljena na NE, tako da je privzeta na <samp>NIKOLI</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je <samp>NE</samp> in skupna vrendost je bila nastavljena na NE, tako da je privzeta na <samp>NIKOLI</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Uporabniško dovoljenje je nastavljeno na <samp>DA</samp>, ampak skupni <samp>NIKOLI</samp> ne more biti prepisan.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je nastavljeno na <samp>DA</samp>, ampak skupni <samp>NIKOLI</samp> ne more biti prepisan.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'Uporabniško dovoljenjeje nastavljeno na <samp>DA</samp>, postane pa skupna vrednost, ker je bilo nastavljeno na <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je nastavljeno na <samp>DA</samp>, postane pa skupna vrednost, ker je bilo nastavljeno na <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'	=> 'Uporabniško dovoljenje je nastavljeno na <samp>DA</samp> in skupna vrednost na <samp>DA</samp>, tako da ni nič spremenjeno.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'Uporabniško dovoljenje, za ta forum, je nastavljeno na <samp>DA</samp> in skupna vrednost na <samp>DA</samp>, tako da ni nič spremenjeno.',
	'TRACE_WHO'	=> 'Koga',
	'TRACE_TOTAL'	=> 'Skupaj',
	'USERS_NOT_ASSIGNED'	=> 'Noben uporabnik še ni bil dodeljen tej vlogi',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'je član sledečih vnaprej določenih skupin',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'je član sledečih uporabniško določenih skupin',
	'VIEW_ASSIGNED_ITEMS'	=> 'Poglej dodeljene vrednosti',
	'VIEW_LOCAL_PERMS'	=> 'Lokalna dovoljenja',
	'VIEW_GLOBAL_PERMS'	=> 'Splošna dovoljenja',
	'VIEW_PERMISSIONS'	=> 'Poglej dovoljenja',
	'WRONG_PERMISSION_TYPE'	=> 'Izbrana napačna vrsta dovoljenja.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Nastavitve dovoljenj so v napačni obliki, phpBB jih ne more ustrezno uporabiti.',
));

?>