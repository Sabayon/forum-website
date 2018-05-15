<?php
/**
*
* acp_forums.php [Slovenian]
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
	'CONTINUE'	=> 'Nadaljuj',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Da bi olajšali nastavitev dovoljenj za nov forum, lahko kopirati dovoljenja iz že obstoječega foruma.',
	'COPY_TO_ACL'	=> 'Druga možnost je, da %snastavite dovoljenja%s za ta forum.',
	'ENABLE_QUICK_REPLY'	=> 'Omogoči Odgovori hitro',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Če izberete to nastavitev, bodo uporabniki za ta forum dobili možnost Odgovori hitro. Če je privzeta nastavitev opcije Odgovori hitro za vse forume onemogočena, se tudi pri tem forumu funkcije ne bo vključila.',
	'FORUM_IMAGE_NO_EXIST'	=> 'Slika za forum, ki je določena, ne obstaja',
	'AUTO_PRUNE_DAYS'	=> 'Starost objav brez odgovorov primernih za samodejno čiščenje',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Število dni od zadnje objave, po katerem je tema odstranjena.',
	'AUTO_PRUNE_FREQ'	=> 'Pogostost samodejnega čiščenja objav brez odgovorov',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Čas v dnevih med zagoni samodejnega čiščenja.',
	'AUTO_PRUNE_VIEWED'	=> 'Starost ogleda objav brez odgovorov primernih za samodejno čiščenje',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Število dni od zadnjega ogleda objave, po katerem je tema odstranjena.',
	'COPY_PERMISSIONS'	=> 'Kopiraj dovoljenja iz',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Ko bo ustvarjen forum, bo le-ta imel enaka dovoljenja kot forum, katerega izberete tu. Če ni izbran noben forum, novo ustvarjeni forum ne bo viden, dokler mu niso nastavljena dovoljenja.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Če izberete kopiranje dovoljenj, bo vaš forum imel enaka dovoljenja kot forum, katerega izberete tu. To bo prepisalo vsa dovoljenja, katera ste predhodno nastavili za vaš forum z dovoljenji foruma, katerega izberete tu. Če ni izbran noben forum, se ohranijo dosedanja dovoljenja.',
	'CREATE_FORUM'	=> 'Ustvari nov forum',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Izbriši vsebino ali premakni v forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Izbriši podforume ali premakni v forum',
	'DEFAULT_STYLE'	=> 'Privzeti slog',
	'DELETE_ALL_POSTS'	=> 'Izbriši prispevke',
	'DELETE_SUBFORUMS'	=> 'Izbriši podforume in prispevke',
	'DISPLAY_ACTIVE_TOPICS'	=> 'Omogoči aktivne teme',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Če je izbrano da, potem bodo aktivne teme v izbranih podforumih prikazane v tej kategoriji.',
	'EDIT_FORUM'	=> 'Uredi forum',
	'ENABLE_INDEXING'	=> 'Omogoči indeksiranje iskanja',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Če je izbrano da, potem bodo objave v tem forumu indeksirane za lažje iskanje.',
	'ENABLE_POST_REVIEW'	=> 'Omogoči pregled prispevka',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Če je izbrano da, potem je uporabnikom omogočen pregled njihovih prispevkov, če so se v času pisanja njihovega prispevka pojavile novi prispevki drugih uporabnikov. Ta možnost mora biti onemogočena za klepetalne forume (klepetalnice).',
	'ENABLE_RECENT'	=> 'Prikaži aktivne teme',
	'ENABLE_RECENT_EXPLAIN'	=> 'Če je izbrano da, potem bodo prispevki v tem forumu prikazani v seznamu aktivnih tem.',
	'ENABLE_TOPIC_ICONS'	=> 'Omogoči ikone za teme',
	'FORUM_ADMIN'	=> 'Administratorji foruma',
	'FORUM_ADMIN_EXPLAIN'	=> 'V phpBB3 ni kategorij, vse je osnovano na forumu. Vsak forum ima lahko neomejeno število podforumov in lahko določite, ali so v vsakem dovoljene objave ali ne (npr. ali se vede kot stara kategorija). Tukaj lahko dodajate, urejate, brišete, zaklepate in odklepate posamezne forume ter nastavljate določene dodatne kontrole. Če so vaše objave in teme postale neusklajene lahko re-sinhronizirate forum. <strong>Kopirati ali nastaviti morate ustrezna dovoljenja za novo ustvarjene forume, da le-ti postanejo vidni.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'Omogoči samodejno čiščenje prispevkov brez odgovorov',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'Očisti forum tem, nastavi parametre pogostosti/starosti spodaj.',
	'FORUM_CREATED'	=> 'Forum uspešno ustvarjen.',
	'FORUM_DATA_NEGATIVE'	=> 'Parametri čiščenja ne morejo biti negativni.',
	'FORUM_DESC_TOO_LONG'	=> 'Opis foruma je predolg, mora biti krajši kot 4000 črk.',
	'FORUM_DELETE'	=> 'Zbriši forum',
	'FORUM_DELETE_EXPLAIN'	=> 'Obrazec spodaj omogoča brisanje foruma. Če je v forumu možno objavljanje lahko izberete kam boste prenesli vse teme (ali forume), katere vsebuje.',
	'FORUM_DELETED'	=> 'Forum je bil uspešno izbrisan.',
	'FORUM_DESC'	=> 'Opis',
	'FORUM_DESC_EXPLAIN'	=> 'Vsako HTML oblikovanje vstavljeno tukaj, bo prikazano, v obliki v kakršni je.',
	'FORUM_EDIT_EXPLAIN'	=> 'Obrazec spodaj vam omogoča prilaganje tega foruma. Upoštevati je potrebno, da se kontrole spreminjanja in štetja objav nastavljajo preko dovoljenj foruma za vsakega uporabnika ali skupino.',
	'FORUM_IMAGE'	=> 'Slika foruma',
	'FORUM_IMAGE_EXPLAIN'	=> 'Lokacija dodatnih slik, glede korensko mapo phpBB.',
	'FORUM_LINK_EXPLAIN'	=> 'Polni URL (vključno s protokolom, npr.: <primer>http://</primer>) na lokacijo, kamor bo izbira tega foruma prenesla uporabnika, npr.: <primer>http://www.phpbb.com/</primer>.',
	'FORUM_LINK_TRACK'	=> 'Sledi povezavam preusmeritev',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'Shrani število klikov povezave foruma.',
	'FORUM_NAME'	=> 'Ime foruma',
	'FORUM_NAME_EMPTY'	=> 'Vnesti je potrebno ime foruma.',
	'FORUM_PARENT'	=> 'Glavni forum',
	'FORUM_PASSWORD'	=> 'Geslo foruma',
	'FORUM_PASSWORD_CONFIRM'	=> 'Potrdi geslo foruma',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Nastavitev je potrebna le, če je bilo vnešeno geslo foruma.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'Definira geslo za ta forum, uporabite sistem dovoljenj v preferencah.',
	'FORUM_PASSWORD_UNSET'	=> 'Odstrani geslo foruma',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'Odkljukajte tu, če želite odstraniti geslo foruma.',
	'FORUM_PASSWORD_OLD'	=> 'Geslo foruma uporablja staro šifriranje, zato ga je potrebno spremeniti.',
	'FORUM_PASSWORD_MISMATCH'	=> 'Geslo, katerega ste vnesli, se ne ujema.',
	'FORUM_PRUNE_SETTINGS'	=> 'Nastavitve čiščenja foruma',
	'FORUM_RESYNCED'	=> 'Forum “%s” uspešno usklajen',
	'FORUM_RULES_EXPLAIN'	=> 'Pravila foruma so prikazana na vsaki strani znotraj izbranega foruma.',
	'FORUM_RULES_LINK'	=> 'Povezava na pravila foruma',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'Tu lahko vstavite URL strani/objave, ki vsebuje pravila foruma. Ta nastavitev bo prepisala tekst pravil foruma, katerega ste določili.',
	'FORUM_RULES_PREVIEW'	=> 'Predogled pravil foruma',
	'FORUM_RULES_TOO_LONG'	=> 'Pravila foruma morajo obsegati manj kot 4000 črk.',
	'FORUM_SETTINGS'	=> 'Nastavitve foruma',
	'FORUM_STATUS'	=> 'Status foruma',
	'FORUM_STYLE'	=> 'Oblika foruma',
	'FORUM_TOPICS_PAGE'	=> 'Teme na stran',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'Če ta vrednost ni enaka nič, bo prepisala privzeto nastavitev števila tem na stran.',
	'FORUM_TYPE'	=> 'Tip foruma',
	'FORUM_UPDATED'	=> 'Informacije o forumu uspešno posodobljene.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Želite spremeniti forum s podforumi, v katerem so možne objave v povezavo, v povezavo. Prosim premaknite vse podforume ven iz tega foruma pred nadaljevanjem, ker po spremembi v povezavo ne bodo več vidni podforumi, ki so trenutno povezani s tem forumom.',
	'GENERAL_FORUM_SETTINGS'	=> 'Splošne nastavitve foruma',
	'LINK'	=> 'Povezava',
	'LIST_INDEX'	=> 'Prikaži podforum v legendi glavnega foruma',
	'LIST_INDEX_EXPLAIN'	=> 'Prikaže ta forum v kazalu in drugje kot povezavo znotraj legende glavnega foruma, če je možnost glavnega foruma “Prikaži podforume v legendi” omogočena.',
	'LIST_SUBFORUMS'	=> 'Prikaži podforume v legendi',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Prikaže podforume tega foruma v kazalu in drugje kot povezavo znotraj legende glavnega foruma, če je možnost glavnega foruma “Prikaži podforume v legendi glavnega foruma” omogočena.',
	'LOCKED'	=> 'Zaklenjeno',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forum, katerega ste izbrali za prenos prispevkov, ne omogoča objavljanja. Prosim izberite forum, ki omogoča objavljanje.',
	'MOVE_POSTS_TO'	=> 'Premakni prispevke v',
	'MOVE_SUBFORUMS_TO'	=> 'Premakni podforume v',
	'NO_DESTINATION_FORUM'	=> 'Niste določili foruma, kamor boste premaknili vsebino.',
	'NO_FORUM_ACTION'	=> 'Ni določeno kaj storiti z vsebino foruma.',
	'NO_PARENT'	=> 'Ni glavnega foruma',
	'NO_PERMISSIONS'	=> 'Ne kopiraj dovoljenj',
	'NO_PERMISSION_FORUM_ADD'	=> 'Nimate ustreznih dovoljenj za dodajanje forumov.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nimate ustreznih dovoljenj za brisanje forumov.',
	'PARENT_IS_LINK_FORUM'	=> 'Glavni forum, katerega ste določili, je povezava foruma. Povezave foruma niso zmožne vsebovati druge forume, prosim določite kategorijo ali forum, kot glavni forum.',
	'PARENT_NOT_EXIST'	=> 'Glavni forum ne obstaja.',
	'PRUNE_ANNOUNCEMENTS'	=> 'Očisti prispevke',
	'PRUNE_STICKY'	=> 'Očisti lepljivke',
	'PRUNE_OLD_POLLS'	=> 'Očisti stare ankete',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Ostrani teme z anketami, v katerih ni bilo novih glasov dodanih naslednje število dni.',
	'REDIRECT_ACL'	=> 'Zdaj lahko %sdoločite dovoljenja%s za ta forum.',
	'SYNC_IN_PROGRESS'	=> 'Usklajevanje foruma',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Trenutno usklajevanje tem v območju %1$d/%2$d.',
	'TYPE_CAT'	=> 'Kategorija',
	'TYPE_FORUM'	=> 'Forum',
	'TYPE_LINK'	=> 'Povezava',
	'UNLOCKED'	=> 'Odklenjeno',
));

?>