<?php
/**
*
* memberlist.php [Slovenian]
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

	'USER_LAST_REMINDED'	=> array(
		'0'	=> 'To pot ni bil poslan noben opomnik',
		'1'	=> '%1$d opomnikov poslanih<br />» %2$s',
	),

	'USER_BAN'	=> 'Izključevanje',
	'ABOUT_USER'	=> 'Profil',
	'ACTIVE_IN_FORUM'	=> 'Najbolj aktiven forum',
	'ACTIVE_IN_TOPIC'	=> 'Najbolj aktivna tema',
	'ADD_FOE'	=> 'Dodaj sovražnika',
	'ADD_FRIEND'	=> 'Dodaj prijatelja',
	'AFTER'	=> 'po',
	'ALL'	=> 'Vse',
	'BEFORE'	=> 'pred',
	'CC_EMAIL'	=> 'Pošlji kopijo elektronske pošte samemu sebi.',
	'CONTACT_USER'	=> 'Kontakt',
	'DEST_LANG'	=> 'Jezik',
	'DEST_LANG_EXPLAIN'	=> 'Izberite ustrezen jezik (če je na voljo) za naslovnika tega sporočila.',
	'EMAIL_BODY_EXPLAIN'	=> 'To sporočilo bo poslano kot navadni tekst. Ne vključujte nobenega HTMLja ali BBCode. Povratni naslov za to sporočilo bo poslan na vaš e-poštni naslov.',
	'EMAIL_DISABLED'	=> 'Oprostite, vse funkcije e-pošte so onemogočene.',
	'EMAIL_SENT'	=> 'E-pošta je bila poslana.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'To sporočilo bo poslano kot navadni tekst. Ne vključujte nobenega HTMLja ali BBCode. Informacija o temi je že vključena v sporočilo. Povratni naslov za to sporočilo bo poslan na vaš e-poštni naslov.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Vpisati morate pravilni naslov e-pošte naslovnika.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Vpisati morate sproročilo, ki bo poslano prek e-pošte.',
	'EMPTY_NAME_EMAIL'	=> 'Vpisati morate pravo ime naslovnika.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Vpisati morate zadevo e-sporočila.',
	'EQUAL_TO'	=> 'Enak kot',
	'FIND_USERNAME_EXPLAIN'	=> 'Za iskanje posameznih uporabnikov uporabite ta obrazec. Ni potrebno izpolniti vseh polj. Za delne zadetke lahko uporabite znak *. Datume vpisujte v obliki <kbd>YYYY-MM-DD</kbd>, primer: <samp>2004-02-29</samp>. Za izbiro enega ali več uporabniških imen uporabite kljukice (glede na obrazec lahko izberete več uporabniških imen) in kliknite gumb Izberi označeno za povratek na prejšnji obrazec.',
	'FLOOD_EMAIL_LIMIT'	=> 'Trenutno ne morete pošiljati novih e-sporočil. Prosimo, poiskusite kasneje.',
	'GROUP_LEADER'	=> 'Vodja skupine',
	'HIDE_MEMBER_SEARCH'	=> 'Skrij iskanje članov',
	'IM_ADD_CONTACT'	=> 'Dodaj kontakt',
	'IM_AIM'	=> 'Potrebujete nameščen AOL Instant Messenger.',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'Presnemi program',
	'IM_ICQ'	=> 'Prosimo, zavedajte se, da so uporabniki lahko izbrali, da ne želijo prejemati neželenih neposrednih sporočil.',
	'IM_JABBER'	=> 'Prosimo, zavedajte se, da so uporabniki lahko izbrali, da ne želijo prejemati neželenih neposrednih sporočil.',
	'IM_JABBER_SUBJECT'	=> 'To je avtomatsko sporočilo, prosimo ne odgovarjajte nanj! Sporočilo od uporabnika %1$s %2$s.',
	'IM_MESSAGE'	=> 'vaše sporočilo',
	'IM_MSNM'	=> 'Potrebujete nameščen Windows Messenger.',
	'IM_MSNM_BROWSER'	=> 'Vaš brskalnik tega ne podpira.',
	'IM_MSNM_CONNECT'	=> 'MSNM ni povezan.\\nZa nadaljevanje se morate povezati na MSNM.',
	'IM_NAME'	=> 'Vaše ime',
	'IM_NO_JABBER'	=> 'Oprostite, neposredno sporočanje uporabnikom sistema Jabber na tem strežniku ni podprto. Potrebujete nameščen program Jabber za kontaktiranje naslovnika.',
	'IM_RECIPIENT'	=> 'Naslovnik',
	'IM_SEND'	=> 'Pošlji sporočilo',
	'IM_SEND_MESSAGE'	=> 'Pošlji sporočilo',
	'IM_SENT_JABBER'	=> 'Vaše sporočilo za %1$s je bilo uspešno poslano.',
	'IM_USER'	=> 'Pošlji hitro sporočilo',
	'LAST_ACTIVE'	=> 'Zadnjič aktiven',
	'LESS_THAN'	=> 'Manj kot',
	'LIST_USER'	=> '1 uporabnik',
	'LIST_USERS'	=> '%d uporabnikov',
	'LOGIN_EXPLAIN_LEADERS'	=> 'Če želite pregledati seznam skupin, morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Če želite pregledati seznam uporabnikov, morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Če želite iskati uporabnike, morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Če želite pregledovati profile uporabnikov, morate biti registrirani in prijavljeni.',
	'MORE_THAN'	=> 'Več kot',
	'NO_EMAIL'	=> 'Nimate dovoljenja za pošiljanje e-sporočila temu uporabniku.',
	'NO_VIEW_USERS'	=> 'Nimate dovoljenja za ogled seznama članov ali profilov.',
	'ORDER'	=> 'Vrstni red',
	'OTHER'	=> 'Drugo',
	'POST_IP'	=> 'Poslano iz IP/domene',
	'RANK'	=> 'Položaj',
	'REAL_NAME'	=> 'Ime naslovnika',
	'RECIPIENT'	=> 'Naslovnik',
	'REMOVE_FOE'	=> 'Odstrani sovražnika',
	'REMOVE_FRIEND'	=> 'Odstrani prijatelja',
	'SEARCH_USER_POSTS'	=> 'Iskanje po uporabnikovih prispevkih',
	'SELECT_MARKED'	=> 'Izberi označene',
	'SELECT_SORT_METHOD'	=> 'Izberi metodo razvrščanja',
	'SEND_AIM_MESSAGE'	=> 'Pošlji sporočilo AIM',
	'SEND_ICQ_MESSAGE'	=> 'Pošlji sporočilo ICQ',
	'SEND_IM'	=> 'Hitro sporočanje',
	'SEND_JABBER_MESSAGE'	=> 'Pošlji sporočilo Jabber',
	'SEND_MESSAGE'	=> 'Sporočilo',
	'SEND_MSNM_MESSAGE'	=> 'Pošlji sporočilo MSNM/WLM',
	'SEND_YIM_MESSAGE'	=> 'Pošlji sporočilo YIM',
	'SORT_EMAIL'	=> 'E-pošta',
	'SORT_LAST_ACTIVE'	=> 'Zadnjič aktiven',
	'SORT_POST_COUNT'	=> 'Število prispevkov',
	'USERNAME_BEGINS_WITH'	=> 'Uporabniško ime se začne z',
	'USER_ADMIN'	=> 'Uredi uporabnika',
	'USER_FORUM'	=> 'Statistika uporabnika',
	'USER_ONLINE'	=> 'Prijavljen',
	'USER_PRESENCE'	=> 'Prisoten na forumu',
	'VIEWING_PROFILE'	=> 'Gleda profil - %s',
	'VISITED'	=> 'Zadnjič prijavljen',
	'WWW'	=> 'Spletna stran',
	'EMPTY_MESSAGE_IM'	=> 'Vnesti morate sporočilo, ki ga želite poslati.',
	'IM_NO_DATA'	=> 'Ni ustreznih kontaktnih podatkov za tega uporabnika.',
));

?>