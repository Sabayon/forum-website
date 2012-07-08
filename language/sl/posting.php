<?php
/**
*
* posting.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-11-27 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB, Legoless
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
	'POST_REVIEW_EDIT'	=> 'Pregled prispevka',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Ta prispevek je med vašim urejanjem spremenil drug uporabnik. Morda želite pregledati trenutno verzijo prispevka in prilagoditi vaše popravke.',
	'TOO_FEW_CHARS_LIMIT'	=> 'Vaše sporočilo vsebuje %1$d znakov. Minimalno število znakov, ki jih mora sporočilo vsebovati je %2$d.',
	'DISALLOWED_CONTENT'	=> 'Nalaganje je bilo zavrnjeno ker je bila datoteka prepoznana kot nosilka vsebin, ki lahko omogočajo vdor.',
	'ADD_ATTACHMENT'	=> 'Naloži priponko',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Spodaj vnesite podatke za pripenjanje ene ali več datotek.',
	'ADD_FILE'	=> 'Dodaj datoteko',
	'ADD_POLL'	=> 'Ustvaritev ankete',
	'ADD_POLL_EXPLAIN'	=> 'Če ne želite dodati ankete, polja pustite prazna.',
	'ALREADY_DELETED'	=> 'Oprostite, vendar je bil ta prispevek že izbrisan.',
	'ATTACH_QUOTA_REACHED'	=> 'Oprostite, dosegli ste omejitev števila priponk tega foruma.',
	'ATTACH_SIG'	=> 'Pripni podpis (podpis lahko spremenite prek svoje uporabniške nadzorne plošče)',
	'BBCODE_A_HELP'	=> 'Naložena priponka: [attachment=]ime.tip[/attachment]',
	'BBCODE_B_HELP'	=> 'Odebeljeno besedilo: [b]besedilo[/b]',
	'BBCODE_C_HELP'	=> 'Prikaz kode: [code]koda[/code]',
	'BBCODE_E_HELP'	=> 'Seznam: Dodaj element seznama',
	'BBCODE_F_HELP'	=> 'Velikost pisave: [size=x-small]majhno besedilo[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s je <em>izključena</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s je <em>vključena</em>',
	'BBCODE_I_HELP'	=> 'Poševno besedilo: [i]besedilo[/i]',
	'BBCODE_L_HELP'	=> 'Seznam: [list]besedilo[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'Element seznama: [*]besedilo[/*]',
	'BBCODE_O_HELP'	=> 'Urejen seznam: [list=]besedilo[/list]',
	'BBCODE_P_HELP'	=> 'Vstavi sliko: [img]http://url_slike[/img]',
	'BBCODE_Q_HELP'	=> 'Citat: [quote]besedilo[/quote]',
	'BBCODE_S_HELP'	=> 'Barva pisave: [color=red]besedilo[/color]  Namig: uporabite lahko tudi color=#FF0000',
	'BBCODE_U_HELP'	=> 'Podčrtano besedilo: [u]besedilo[/u]',
	'BBCODE_W_HELP'	=> 'Vstavi URL: [url]http://url[/url] or [url=http://url]besedilo povezave[/url]',
	'BBCODE_D_HELP'	=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'Te teme ne morete obuditi tako kmalu po zadnjem prispevku.',
	'CANNOT_DELETE_REPLIED'	=> 'Oprostite, vendar lahko brišete samo teme, na katere še ni bilo prispevkov.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ta prispevek je bil zaklenjen. Ne morete ga več urejati.',
	'CANNOT_EDIT_TIME'	=> 'Tega prispevka ne morete več urejati ali izbrisati.',
	'CANNOT_POST_ANNOUNCE'	=> 'Oprostite, vendar ne morete objavljati razglasov.',
	'CANNOT_POST_STICKY'	=> 'Oprostite, vendar ne morete objavljati lepljivkov.',
	'CHANGE_TOPIC_TO'	=> 'Spremeni vrsto prispevka',
	'CLOSE_TAGS'	=> 'Zapri oznake',
	'CURRENT_TOPIC'	=> 'Trenutna tema',
	'DELETE_FILE'	=> 'Izbriši datoteko',
	'DELETE_MESSAGE'	=> 'Izbriši sporočilo',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ali ste prepričani, da želite izbrisati to sporočilo?',
	'DELETE_OWN_POSTS'	=> 'Oprostite, vendar lahko brišete samo svoje prispevke.',
	'DELETE_POST_CONFIRM'	=> 'Ali ste prepričani, da želite izbrisati ta prispevek?',
	'DELETE_POST_WARN'	=> 'Po brisanju tega prispevka ne morete več povrniti',
	'DISABLE_BBCODE'	=> 'Onemogoči BBCode',
	'DISABLE_MAGIC_URL'	=> 'Ne prepoznaj URLjev',
	'DISABLE_SMILIES'	=> 'Onemogoči smeške',
	'DISALLOWED_EXTENSION'	=> 'Končnica %s ni dovoljena.',
	'DRAFT_LOADED'	=> 'Osnutek je bil naložen v prostor za prispevke - sedaj ga boste morda želeli dokončati.<br />Po pošiljanju tega prispevka bo vaš osnutek izbrisan.',
	'DRAFT_LOADED_PM'	=> 'Osnutek je bil naložen v prostor za sporočilo - sedaj ga boste morda želeli dokončati.<br />Po pošiljanju tega zasebnega sporočila bo vaš osnutek izbrisan.',
	'DRAFT_SAVED'	=> 'Osnutek je bil uspešno shranjen.',
	'DRAFT_TITLE'	=> 'Naslov osnutka',
	'EDIT_REASON'	=> 'Razlog za urejanje tega prispevka',
	'EMPTY_FILEUPLOAD'	=> 'Naložena datoteka je prazna.',
	'EMPTY_MESSAGE'	=> 'Pri pošiljanju morate napisati sporočilo.',
	'EMPTY_REMOTE_DATA'	=> 'Datoteke ni bilo moč naložiti, prosimo, poizkusite z ročnim nalaganjem.',
	'FLASH_IS_OFF'	=> '[flash] je <em>izključen</em>',
	'FLASH_IS_ON'	=> '[flash] je <em>vključen</em>',
	'FLOOD_ERROR'	=> 'Tako hitro po zadnjem prispevku ne morete napisati novega.',
	'FONT_COLOR'	=> 'Barva pisave',
	'FONT_COLOR_HIDE'	=> 'Skrij barvo pisave',
	'FONT_HUGE'	=> 'Ogromna',
	'FONT_LARGE'	=> 'Velika',
	'FONT_NORMAL'	=> 'Običajna',
	'FONT_SIZE'	=> 'Velikost pisave',
	'FONT_SMALL'	=> 'Majhna',
	'FONT_TINY'	=> 'Drobcena',
	'GENERAL_UPLOAD_ERROR'	=> 'Priponke ni bilo moč naložiti v %s.',
	'IMAGES_ARE_OFF'	=> '[img] je <em>izključen</em>',
	'IMAGES_ARE_ON'	=> '[img] je <em>vključen</em>',
	'INVALID_FILENAME'	=> '%s ni veljavno ime datoteke.',
	'LOAD'	=> 'Naloži',
	'LOAD_DRAFT'	=> 'Naloži osnutek',
	'LOAD_DRAFT_EXPLAIN'	=> 'Tukaj lahko izberete osnutek, kjer želite nadaljevati s pisanjem. Vaš trenutni prispevek bo preklican in vsa trenutna vsebina prispevka izbrisana. Osnutke si lahko ogledate, urejate in izbrišete znotraj svoje uporabniške nadzorne plošče.',
	'LOGIN_EXPLAIN_BUMP'	=> 'Če želite obuditi teme znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_DELETE'	=> 'Če želite brisati prispevke znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_POST'	=> 'Če želite pisati znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'Če želite citirati prispevke znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_REPLY'	=> 'Če želite odgovarjati na teme znotraj tega foruma, se morate prijaviti.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Uporabite lahko samo pisave do velikosti %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Vaše flash datoteke so lahko visoke največ %1$d pikslov.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Vaše flash datoteke so lahko široke največ %1$d pikslov.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Vaše slike so lahko visoke največ %1$d pikslov.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Vaše slike so lahko široke največ %1$d pikslov.',
	'MESSAGE_BODY_EXPLAIN'	=> 'Tukaj lahko vnesete svoje sporočilo, ki ne sme vsebovati več kot <strong>%d</strong> znakov.',
	'MESSAGE_DELETED'	=> 'To sporočilo je bilo uspešno izbrisano.',
	'MORE_SMILIES'	=> 'Več smeškov',
	'NOTIFY_REPLY'	=> 'Obvesti me, ko kdo objavi prispevek',
	'NOT_UPLOADED'	=> 'Datoteke ni bilo moč naložiti.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Obstoječih možnosti ankete ne morete izbrisati.',
	'NO_PM_ICON'	=> 'Ni ikone ZS',
	'NO_POLL_TITLE'	=> 'Vnesti morate naslov ankete.',
	'NO_POST'	=> 'Zahtevani prispevek ne obstaja.',
	'NO_POST_MODE'	=> 'Ni navedenega načina prispevka.',
	'PARTIAL_UPLOAD'	=> 'Datoteka je bila le delno naložena.',
	'PHP_SIZE_NA'	=> 'Velikost priponke je prevelika.<br />Iz php.ini ni razvidna PHPjeva omejitev velikosti.',
	'PHP_SIZE_OVERRUN'	=> 'Velikost priponke je prevelika - največja dovoljena velikost je %d MB.<br />Prosimo, pomnite, da je ta nastavitev v php.ini in je ne morete obiti.',
	'PLACE_INLINE'	=> 'Postavi v vrstico',
	'POLL_DELETE'	=> 'Izbriši anketo',
	'POLL_FOR'	=> 'Anketa naj traja',
	'POLL_FOR_EXPLAIN'	=> 'Vnesite 0 ali pustite prazno za neskočno trajanje.',
	'POLL_MAX_OPTIONS'	=> 'Možnosti za posameznega uporabnika',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'To je število možnosti, ki jih lahko uporabnik izbere pri glasovanju.',
	'POLL_OPTIONS'	=> 'Anketne možnosti',
	'POLL_OPTIONS_EXPLAIN'	=> 'Vsako možnost vnesite v svojo vrstico. Vnesete lahko do <strong>%d</strong> možnosti.',
	'POLL_QUESTION'	=> 'Anketno vprašanje',
	'POLL_TITLE_TOO_LONG'	=> 'Naslov ankete mora vsebovati manj kot 100 znakov.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Obdelana velikost vašega naslova ankete je prevelika - razmislite o odstranitvi BBCode ali smeškov.',
	'POLL_VOTE_CHANGE'	=> 'Dovoli ponovno glasovanje',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Če je omogočeno, lahko uporabniki spreminjajo svoje glasove.',
	'POSTED_ATTACHMENTS'	=> 'Objavljene priponke',
	'POST_CONFIRMATION'	=> 'Potrditev prispevka',
	'POST_CONFIRM_EXPLAIN'	=> 'Da bi preprečili samodejne prispevke (spam), morate pretipkati besedilo iz spodnje slike. V primeru slabovidnosti ali težav z berljivostjo kontaktirajte %sadministratorja foruma%s.',
	'POST_DELETED'	=> 'Prispevek je bil uspešno izbrisan.',
	'POST_EDITED'	=> 'Prispevek je bil uspešno urejen.',
	'POST_EDITED_MOD'	=> 'Prispevek je bilo uspešno urejen - pred javnim prikazom ga bo moral odobriti moderator. Ko bo vaš prispevek odobren, boste o tem obveščeni.',
	'POST_GLOBAL'	=> 'Globalno',
	'POST_ICON'	=> 'Ikona prispevka',
	'POST_NORMAL'	=> 'Običajno',
	'POST_REVIEW'	=> 'Pregled prispevka',
	'POST_REVIEW_EXPLAIN'	=> 'V tej temi je bil objavljen vsaj en nov prispevek. Morda boste zaradi tega želeli ponovno pregledati svoj prispevek.',
	'POST_STORED'	=> 'Prispevek je bil uspešno poslan.',
	'POST_STORED_MOD'	=> 'Prispevek je bilo uspešno poslan - pred javnim prikazom ga bo moral odobriti moderator. Ko bo vaš prispevek odobren, boste o tem obveščeni.',
	'POST_TOPIC_AS'	=> 'Objavi temo kot',
	'PROGRESS_BAR'	=> 'Stanje poteka',
	'QUOTE_DEPTH_EXCEEDED'	=> 'Gnezdite lahko do %1$d citatov.',
	'SAVE'	=> 'Shrani',
	'SAVE_DATE'	=> 'Shranjeno ob',
	'SAVE_DRAFT'	=> 'Shrani osnutek',
	'SAVE_DRAFT_CONFIRM'	=> 'Prosimo, pomnite, da shranjeni osnutki vsebujejo samo zadevo in sporočilo, drugi elementi pa bodo odstranjeni. Želite svoj osnutek shraniti zdaj?',
	'SMILIES'	=> 'Smeški',
	'SMILIES_ARE_OFF'	=> 'Smeški so <em>izključeni</em>',
	'SMILIES_ARE_ON'	=> 'Smeški so <em>vključeni</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Časovna omejitev lepljivka/obvestila',
	'STICK_TOPIC_FOR'	=> 'Tema naj bo lepljivek za',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Vnesite 0 ali pustite prazno za neskončno trajanje lepljivka/obvestila.',
	'STYLES_TIP'	=> 'Namig: Stile lahko hitro uveljavite nad izbranim besedilom.',
	'TOO_FEW_CHARS'	=> 'Vaše sporočilo vsebuje premalo znakov.',
	'TOO_FEW_POLL_OPTIONS'	=> 'Vnesti morate vsaj dve možnosti ankete.',
	'TOO_MANY_ATTACHMENTS'	=> 'Ne morete dodati še ene priponke - omejitev je %d.',
	'TOO_MANY_CHARS'	=> 'Vaše sporočilo vsebuje preveč znakov.',
	'TOO_MANY_POLL_OPTIONS'	=> 'Poizkusili ste vnesti preveč možnosti ankete.',
	'TOO_MANY_SMILIES'	=> 'Vaše sporočilo vsebuje preveč smeškov. Največje dovoljeno število smeškov je %d.',
	'TOO_MANY_URLS'	=> 'Vaše sporočilo vsebuje preveč URLjev. Največje dovoljeno število URLjev je %d.',
	'TOO_MANY_USER_OPTIONS'	=> 'Možnosti na uporabnika ne more biti več kot obstoječih možnosti ankete.',
	'TOPIC_BUMPED'	=> 'Tema je bila uspešno obnovljena.',
	'UNAUTHORISED_BBCODE'	=> 'Nekaterih BBCode ne morete uporabiti: %s.',
	'UNGLOBALISE_EXPLAIN'	=> 'Če želite temo iz globalne spremeniti nazaj na navadno, morate izbrati forum, kjer jo želite prikazati.',
	'UPDATE_COMMENT'	=> 'Posodobi komentar',
	'URL_INVALID'	=> 'Navedeni URL ni veljaven.',
	'URL_NOT_FOUND'	=> 'Navedene datoteke ni bilo moč najti.',
	'URL_IS_OFF'	=> '[url] je <em>izključen</em>',
	'URL_IS_ON'	=> '[url] je <em>vključen</em>',
	'USER_CANNOT_BUMP'	=> 'Tem v tem forumu ne morete obuditi.',
	'USER_CANNOT_DELETE'	=> 'Prispevkov v tem forumu ne morete brisati.',
	'USER_CANNOT_EDIT'	=> 'Prispevkov v tem forumu ne morete urejati.',
	'USER_CANNOT_REPLY'	=> 'V tem forumu ne morete pisati prispevkov.',
	'USER_CANNOT_FORUM_POST'	=> 'Vrsta tega foruma ne podpira operacij za vnašanje.',
	'VIEW_MESSAGE'	=> '%sOglej si svoj poslani prispevek%s',
	'WRONG_FILESIZE'	=> 'Datoteka je prevelika - največja dovoljena velikost je %1d %2s.',
	'WRONG_SIZE'	=> 'Slika mora biti široka vsaj %1$d pikslov in visoka vsaj %2$d pikslov ter široka največ %3$d pikslov in visoka največ %4$d pixels pikslov. Poslana slika je široka %5$d pikslov in visoka %6$d pikslov.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Vsako možnost navedite v svoji vrstici. Vnesete lahko največ <strong>%d</strong> možnosti. Če boste odstranili ali dodali kakšno možnost, bodo vsi prejšnji glasovi izbrisani.',
	'POST_APPROVAL_NOTIFY'	=> 'Ko bo vaše sporočilo odobreno, boste o tem obveščeni.',
	'TOO_MANY_CHARS_POST'	=> 'Vaše sporočilo vsebuje %1$d znakov. Največje dovoljeno število znakov je %2$d.',
	'TOO_MANY_CHARS_SIG'	=> 'Vaš podpis vsebuje %1$d znakov. Največje dovoljeno število znakov je %2$d.',
	'VIEW_PRIVATE_MESSAGE'	=> '%sOglejte si svoja poslana zasebna sporočila%s',
));

?>