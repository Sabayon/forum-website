<?php
/**
*
* acp_permissions_phpbb.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-01-09 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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

	'acl_u_masspm_group'	=> array(
		'lang'	=> 'Lahko pošilja sporočila skupinam',
		'cat'	=> 'pm',
	),


	'permission_cat'	=> array(
		'actions'	=> 'Dejanja',
		'content'	=> 'Vsebina',
		'forums'	=> 'Forumi',
		'misc'	=> 'Razno',
		'permissions'	=> 'Dovoljenja',
		'pm'	=> 'Zasebna sporočila',
		'polls'	=> 'Ankete',
		'post'	=> 'Prispevek',
		'post_actions'	=> 'Dejanja objav',
		'posting'	=> 'Objavljanje prispevkov',
		'profile'	=> 'Profil',
		'settings'	=> 'Nastavitve',
		'topic_actions'	=> 'Dejanja tem',
		'user_group'	=> 'Uporabniki &amp; skupine',
	),


	'permission_type'	=> array(
		'u_'	=> 'Dovoljenja uporabnikov',
		'a_'	=> 'Dovoljenja administratorjev',
		'm_'	=> 'Dovoljenja moderatorjev',
		'f_'	=> 'Dovoljenja forumov',

		'global'	=> array(
			'm_'	=> 'Dovoljenja globalnih moderatorjev',
		),

	),


	'acl_u_viewprofile'	=> array(
		'lang'	=> 'Lahko vidi profil, seznam uporabnikov in spletni seznam',
		'cat'	=> 'profile',
	),


	'acl_u_chgname'	=> array(
		'lang'	=> 'Lahko spreminja uporabniško ime',
		'cat'	=> 'profile',
	),


	'acl_u_chgpasswd'	=> array(
		'lang'	=> 'Lahko spreminja geslo',
		'cat'	=> 'profile',
	),


	'acl_u_chgemail'	=> array(
		'lang'	=> 'Lahko spreminja e-poštni naslov',
		'cat'	=> 'profile',
	),


	'acl_u_chgavatar'	=> array(
		'lang'	=> 'Lahko spreminja avatar',
		'cat'	=> 'profile',
	),


	'acl_u_chggrp'	=> array(
		'lang'	=> 'Lahko spreminja privzeto uporabniško skupino',
		'cat'	=> 'profile',
	),


	'acl_u_attach'	=> array(
		'lang'	=> 'Lahko pripenja dodoteke',
		'cat'	=> 'post',
	),


	'acl_u_download'	=> array(
		'lang'	=> 'Lahko prenaša datoteke',
		'cat'	=> 'post',
	),


	'acl_u_savedrafts'	=> array(
		'lang'	=> 'Lahko shranjuje osnutke',
		'cat'	=> 'post',
	),


	'acl_u_chgcensors'	=> array(
		'lang'	=> 'Lahko onemogoči cenzuro besed',
		'cat'	=> 'post',
	),


	'acl_u_sig'	=> array(
		'lang'	=> 'Lahko uporablja podpise',
		'cat'	=> 'post',
	),


	'acl_u_sendpm'	=> array(
		'lang'	=> 'Lahko pošilja zasebna sporočila',
		'cat'	=> 'pm',
	),


	'acl_u_masspm'	=> array(
		'lang'	=> 'Lahko pošilja zasebna sporočila množično uporabnikom in skupinam.',
		'cat'	=> 'pm',
	),


	'acl_u_readpm'	=> array(
		'lang'	=> 'Lahko bere zasebna sporočila',
		'cat'	=> 'pm',
	),


	'acl_u_pm_edit'	=> array(
		'lang'	=> 'Lahko ureja lastna zasebna sporočila',
		'cat'	=> 'pm',
	),


	'acl_u_pm_delete'	=> array(
		'lang'	=> 'Lahko odstranjuje zasebna sporočila iz lastne mape',
		'cat'	=> 'pm',
	),


	'acl_u_pm_forward'	=> array(
		'lang'	=> 'Lahko posreduje zasebna sporočila',
		'cat'	=> 'pm',
	),


	'acl_u_pm_emailpm'	=> array(
		'lang'	=> 'Lahko pošilja zasebna sporočila po e-pošti.',
		'cat'	=> 'pm',
	),


	'acl_u_pm_printpm'	=> array(
		'lang'	=> 'Lahko natisne zasebna sporočila',
		'cat'	=> 'pm',
	),


	'acl_u_pm_attach'	=> array(
		'lang'	=> 'Lahko pripenja datoteke k zasebnim sporočilom',
		'cat'	=> 'pm',
	),


	'acl_u_pm_download'	=> array(
		'lang'	=> 'Lahko prenaša datoteke v zasebnih sporočilih',
		'cat'	=> 'pm',
	),


	'acl_u_pm_bbcode'	=> array(
		'lang'	=> 'Lahko objavlja BB kodo v zasebnih sporočilih',
		'cat'	=> 'pm',
	),


	'acl_u_pm_smilies'	=> array(
		'lang'	=> 'Lahko objavlja smeške v zasebnih sporočilih',
		'cat'	=> 'pm',
	),


	'acl_u_pm_img'	=> array(
		'lang'	=> 'Lahko objavlja slike v zasebnih sporočilih',
		'cat'	=> 'pm',
	),


	'acl_u_pm_flash'	=> array(
		'lang'	=> 'Lahko objavlja Flash v zasebnih sporočilih',
		'cat'	=> 'pm',
	),


	'acl_u_sendemail'	=> array(
		'lang'	=> 'Lahko pošilja e-pošto',
		'cat'	=> 'misc',
	),


	'acl_u_sendim'	=> array(
		'lang'	=> 'Lahko pošilja hitra sporočila',
		'cat'	=> 'misc',
	),


	'acl_u_ignoreflood'	=> array(
		'lang'	=> 'Lahko ignorira prenatrpanost',
		'cat'	=> 'misc',
	),


	'acl_u_hideonline'	=> array(
		'lang'	=> 'Lahko skrije online (spletni) status',
		'cat'	=> 'misc',
	),


	'acl_u_viewonline'	=> array(
		'lang'	=> 'Lahko vidi skrite uporabnike',
		'cat'	=> 'misc',
	),


	'acl_u_search'	=> array(
		'lang'	=> 'Lahko uporablja iskanje',
		'cat'	=> 'misc',
	),


	'acl_f_list'	=> array(
		'lang'	=> 'Lahko vidi forum',
		'cat'	=> 'post',
	),


	'acl_f_read'	=> array(
		'lang'	=> 'Lahko bere forum',
		'cat'	=> 'post',
	),


	'acl_f_post'	=> array(
		'lang'	=> 'Lahko odpira nove teme',
		'cat'	=> 'post',
	),


	'acl_f_reply'	=> array(
		'lang'	=> 'Lahko odgovarja na teme',
		'cat'	=> 'post',
	),


	'acl_f_icons'	=> array(
		'lang'	=> 'Lahko uporablja ikone tem/prispevkov',
		'cat'	=> 'post',
	),


	'acl_f_announce'	=> array(
		'lang'	=> 'Lahko objavlja obvestila',
		'cat'	=> 'post',
	),


	'acl_f_sticky'	=> array(
		'lang'	=> 'Lahko objavlja lepljivke',
		'cat'	=> 'post',
	),


	'acl_f_poll'	=> array(
		'lang'	=> 'Lahko ustvarja ankete',
		'cat'	=> 'polls',
	),


	'acl_f_vote'	=> array(
		'lang'	=> 'Lahko glasuje na anketah',
		'cat'	=> 'polls',
	),


	'acl_f_votechg'	=> array(
		'lang'	=> 'Lahko spreminja obstoječa glasovanja',
		'cat'	=> 'polls',
	),


	'acl_f_attach'	=> array(
		'lang'	=> 'Lahko pripenja datoteke',
		'cat'	=> 'content',
	),


	'acl_f_download'	=> array(
		'lang'	=> 'Lahko prenaša datoteke',
		'cat'	=> 'content',
	),


	'acl_f_sigs'	=> array(
		'lang'	=> 'Lahko uporablja podpis',
		'cat'	=> 'content',
	),


	'acl_f_bbcode'	=> array(
		'lang'	=> 'Lahko objavlja BB kodo',
		'cat'	=> 'content',
	),


	'acl_f_smilies'	=> array(
		'lang'	=> 'Lahko objavlja smeške',
		'cat'	=> 'content',
	),


	'acl_f_img'	=> array(
		'lang'	=> 'Lahko objavlja slike',
		'cat'	=> 'content',
	),


	'acl_f_flash'	=> array(
		'lang'	=> 'Lahko objavlja Flash',
		'cat'	=> 'content',
	),


	'acl_f_edit'	=> array(
		'lang'	=> 'Lahko ureja lastna zasebna sporočila',
		'cat'	=> 'actions',
	),


	'acl_f_delete'	=> array(
		'lang'	=> 'Lahko briše lastna zasebna sporočila',
		'cat'	=> 'actions',
	),


	'acl_f_user_lock'	=> array(
		'lang'	=> 'Lahko zaklepa lastne teme',
		'cat'	=> 'actions',
	),


	'acl_f_bump'	=> array(
		'lang'	=> 'Lahko zavrže teme',
		'cat'	=> 'actions',
	),


	'acl_f_report'	=> array(
		'lang'	=> 'Lahko opozarja na prispevke',
		'cat'	=> 'actions',
	),


	'acl_f_subscribe'	=> array(
		'lang'	=> 'Lahko se naroči na forume',
		'cat'	=> 'actions',
	),


	'acl_f_print'	=> array(
		'lang'	=> 'Lahko tiska teme',
		'cat'	=> 'actions',
	),


	'acl_f_email'	=> array(
		'lang'	=> 'Lahko pošilja teme po e-pošti',
		'cat'	=> 'actions',
	),


	'acl_f_search'	=> array(
		'lang'	=> 'Lahko išče po forumu',
		'cat'	=> 'misc',
	),


	'acl_f_ignoreflood'	=> array(
		'lang'	=> 'Lahko prezre prenatrpanost',
		'cat'	=> 'misc',
	),


	'acl_f_postcount'	=> array(
		'lang'	=> 'Povečanje štetja objav<br /><em>Prosimo bodite pozorni na to, da ta nastavitev velja samo za nove prispevke.</em>',
		'cat'	=> 'misc',
	),


	'acl_f_noapprove'	=> array(
		'lang'	=> 'Lahko objavlja brez odobravanja',
		'cat'	=> 'misc',
	),


	'acl_m_edit'	=> array(
		'lang'	=> 'Lahko ureja prispevke',
		'cat'	=> 'post_actions',
	),


	'acl_m_delete'	=> array(
		'lang'	=> 'Lahko briše prispevke',
		'cat'	=> 'post_actions',
	),


	'acl_m_approve'	=> array(
		'lang'	=> 'Lahko odobrava prispevke',
		'cat'	=> 'post_actions',
	),


	'acl_m_report'	=> array(
		'lang'	=> 'Lahko zapira in briše opozorila',
		'cat'	=> 'post_actions',
	),


	'acl_m_chgposter'	=> array(
		'lang'	=> 'Lahko spremeni avtorja prispevka',
		'cat'	=> 'post_actions',
	),


	'acl_m_move'	=> array(
		'lang'	=> 'Lahko premakne temo',
		'cat'	=> 'topic_actions',
	),


	'acl_m_lock'	=> array(
		'lang'	=> 'Lahko zaklene temo',
		'cat'	=> 'topic_actions',
	),


	'acl_m_split'	=> array(
		'lang'	=> 'Lahko razdeli temo',
		'cat'	=> 'topic_actions',
	),


	'acl_m_merge'	=> array(
		'lang'	=> 'Lahko združi temo',
		'cat'	=> 'topic_actions',
	),


	'acl_m_info'	=> array(
		'lang'	=> 'Lahko vidi podrobnosti prispevka',
		'cat'	=> 'misc',
	),


	'acl_m_warn'	=> array(
		'lang'	=> 'Lahko razrešuje opozorila<br /><em> Ta nastavitev se lahko dodeljuje samo na splošno. Ni osnovana na forumu.</em>',
		'cat'	=> 'misc',
	),


	'acl_m_ban'	=> array(
		'lang'	=> 'Lahko ureja izključitve<br /><em> Ta nastavitev se lahko dodeljuje samo na splošno. Ni osnovana na forumu.</em>',
		'cat'	=> 'misc',
	),


	'acl_a_board'	=> array(
		'lang'	=> 'Lahko spreminja nastavitve administrativne nadzorne plošče/preverja posodobitve',
		'cat'	=> 'settings',
	),


	'acl_a_server'	=> array(
		'lang'	=> 'Lahko spreminja nastavitve serverja/povezovanja',
		'cat'	=> 'settings',
	),


	'acl_a_jabber'	=> array(
		'lang'	=> 'Lahko spreminja Jabber nastavitve',
		'cat'	=> 'settings',
	),


	'acl_a_phpinfo'	=> array(
		'lang'	=> 'Lahko vidi php nastavitve',
		'cat'	=> 'settings',
	),


	'acl_a_forum'	=> array(
		'lang'	=> 'Lahko ureja forume',
		'cat'	=> 'forums',
	),


	'acl_a_forumadd'	=> array(
		'lang'	=> 'Lahko dodaja nove forume',
		'cat'	=> 'forums',
	),


	'acl_a_forumdel'	=> array(
		'lang'	=> 'Lahko briše forume',
		'cat'	=> 'forums',
	),


	'acl_a_prune'	=> array(
		'lang'	=> 'Lahko čisti forume',
		'cat'	=> 'forums',
	),


	'acl_a_icons'	=> array(
		'lang'	=> 'Lahko spreminja ikone in smeške tem/prispevkov',
		'cat'	=> 'posting',
	),


	'acl_a_words'	=> array(
		'lang'	=> 'Lahko spreminja cenzuro besed',
		'cat'	=> 'posting',
	),


	'acl_a_bbcode'	=> array(
		'lang'	=> 'Lahko določa BBcode zastavice',
		'cat'	=> 'posting',
	),


	'acl_a_attach'	=> array(
		'lang'	=> 'Lahko ureja nastavitve v zvezi z priponkami',
		'cat'	=> 'posting',
	),


	'acl_a_user'	=> array(
		'lang'	=> 'Lahko ureja uporabnike<br /><em>To vključuje tudi gledanje uporabnikovega brskalnika znotraj seznama na spletu.</em>',
		'cat'	=> 'user_group',
	),


	'acl_a_userdel'	=> array(
		'lang'	=> 'Lahko briše/čisti uporabnike',
		'cat'	=> 'user_group',
	),


	'acl_a_group'	=> array(
		'lang'	=> 'Lahko ureja skupine',
		'cat'	=> 'user_group',
	),


	'acl_a_groupadd'	=> array(
		'lang'	=> 'Lahko dodaja nove skupine',
		'cat'	=> 'user_group',
	),


	'acl_a_groupdel'	=> array(
		'lang'	=> 'Lahko briše skupine',
		'cat'	=> 'user_group',
	),


	'acl_a_ranks'	=> array(
		'lang'	=> 'Lahko ureja stopnje uporabnikov',
		'cat'	=> 'user_group',
	),


	'acl_a_profile'	=> array(
		'lang'	=> 'Lahko ureja polja po meri',
		'cat'	=> 'user_group',
	),


	'acl_a_names'	=> array(
		'lang'	=> 'Lahko ureja nedovoljena imena',
		'cat'	=> 'user_group',
	),


	'acl_a_ban'	=> array(
		'lang'	=> 'Lahko ureja izključitve',
		'cat'	=> 'user_group',
	),


	'acl_a_viewauth'	=> array(
		'lang'	=> 'Lahko vidi shematski ogled dovoljenj',
		'cat'	=> 'permissions',
	),


	'acl_a_authgroups'	=> array(
		'lang'	=> 'Lahko spreminja dovoljenja posameznih skupin',
		'cat'	=> 'permissions',
	),


	'acl_a_authusers'	=> array(
		'lang'	=> 'Lahko spreminja dovoljenja posameznih uporabnikov',
		'cat'	=> 'permissions',
	),


	'acl_a_fauth'	=> array(
		'lang'	=> 'Lahko spreminja razrede dovoljenja foruma',
		'cat'	=> 'permissions',
	),


	'acl_a_mauth'	=> array(
		'lang'	=> 'Lahko spreminja razrede dovoljenj moderatorjev',
		'cat'	=> 'permissions',
	),


	'acl_a_aauth'	=> array(
		'lang'	=> 'Lahko spreminja razrede dovoljenj administratorjev',
		'cat'	=> 'permissions',
	),


	'acl_a_uauth'	=> array(
		'lang'	=> 'Lahko spreminja razrede dovoljenj uporabnikov',
		'cat'	=> 'permissions',
	),


	'acl_a_roles'	=> array(
		'lang'	=> 'Lahko ureja vloge',
		'cat'	=> 'permissions',
	),


	'acl_a_switchperm'	=> array(
		'lang'	=> 'Lahko uporablja druga dovoljenja',
		'cat'	=> 'permissions',
	),


	'acl_a_styles'	=> array(
		'lang'	=> 'Lahko ureja teme',
		'cat'	=> 'misc',
	),


	'acl_a_viewlogs'	=> array(
		'lang'	=> 'Lahko vidi poročila',
		'cat'	=> 'misc',
	),


	'acl_a_clearlogs'	=> array(
		'lang'	=> 'Lahko čisti poročila',
		'cat'	=> 'misc',
	),


	'acl_a_modules'	=> array(
		'lang'	=> 'Lahko ureja module',
		'cat'	=> 'misc',
	),


	'acl_a_language'	=> array(
		'lang'	=> 'Lahko ureja jezikovne pakete',
		'cat'	=> 'misc',
	),


	'acl_a_email'	=> array(
		'lang'	=> 'Lahko pošilja množično e-pošto',
		'cat'	=> 'misc',
	),


	'acl_a_bots'	=> array(
		'lang'	=> 'Lahko ureja bote',
		'cat'	=> 'misc',
	),


	'acl_a_reasons'	=> array(
		'lang'	=> 'Lahko ureja vzroke poročil/zanikanj',
		'cat'	=> 'misc',
	),


	'acl_a_backup'	=> array(
		'lang'	=> 'Lahko izdeluje varnostne kopije baze in obnavlja bazo',
		'cat'	=> 'misc',
	),


	'acl_a_search'	=> array(
		'lang'	=> 'Lahko ureja ozadje in nastavitve iskanja.',
		'cat'	=> 'misc',
	),

	'ACP_BBCODES_EXPLAIN'	=> 'BBCode je posebna implementacija HTML-ja, ki nam omogoča večji in boljši nadzor nad stilom prikazanega besedila. Na tej strani lahko dodajaš, brišeš in urejaš svoje BBCode.',
	'ADD_BBCODE'	=> 'Dodaj nov BBCode',
	'BBCODE_ADDED'	=> 'BBCode je uspešno dodan.',
	'BBCODE_EDITED'	=> 'BBCode je uspešno urejen.',
	'BBCODE_NOT_EXIST'	=> 'Izbran BBCode ne obstaja.',
	'BBCODE_HELPLINE'	=> 'Pomoč',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Polje vsebuje tekst, ki se prikaže, ko se z miško pomaknemo nad BBCode.',
	'BBCODE_HELPLINE_TEXT'	=> 'Tekst pomoči',
	'BBCODE_INVALID_TAG_NAME'	=> 'Ime vnešene BBCode značke že obstaja.',
	'BBCODE_INVALID'	=> 'Vnešena BBCode je napačne oblike.',
	'BBCODE_OPEN_ENDED_TAG'	=> 'Nov BBCode mora vsebovati začetno in zaključno značko.',
	'BBCODE_TAG'	=> 'Značka',
	'BBCODE_TAG_TOO_LONG'	=> 'Ime vnešene značke je predolgo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definicija vnešene značke je predolga. Prosim, skrajšaj jo.',
	'BBCODE_USAGE'	=> 'Uporaba BBCode-a',
	'BBCODE_USAGE_EXAMPLE'	=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'	=> 'V tej sekciji definiraj uporabo BBCode-a. Zamenjajte katerikoli žeton (%sglej spodaj%s).',
	'EXAMPLE'	=> 'Primer:',
	'EXAMPLES'	=> 'Primeri:',
	'HTML_REPLACEMENT'	=> 'Zamenjava HTML-ja',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'V tej sekciji definiraj privzeto menjavo v HTML obliki. Vključi vse žetone, ki si jih vnesel zgoraj !',
	'TOKEN'	=> 'Žeton',
	'TOKENS'	=> 'Žetoni',
	'TOKENS_EXPLAIN'	=> 'Žetoni so oznake, namenjene zapolnitvi prostora, ki bo pozneje zamenjan z drugim elementom. Žeton bo veljaven le, če se ujema s pripadajočo definicijo. Če je potrebno, jih lahko tudi oštevilčiš. Primer: {TEKST1}, {TEKST2}.<br /><br />V HTML zamenjavi lahko uporabiš tudi jezikovno spremenljivko iz mape language/. Primer uporabe:{L_<em>&lt:JEZIKOVNASPREMENLJIVKA&gt;</em>}<br /><br /><strong>Opomba: V lastnih BBCode-ih lahko uporabiš le spodnje žetone</strong>',
	'TOKEN_DEFINITION'	=> 'Kaj je lahko ?',
	'TOO_MANY_BBCODES'	=> 'Vnešenih je preveč lastnih BBCode-ov. Pred dodajanjem novega izbriši enega ali več lastnih BBCode-ov.',

	'tokens'	=> array(
		'TEXT'	=> 'Vsako besedilo, ki vsebuje tuje znake, številke ipd. Tega žetona ni priporočljivo uporabljati v HTML značkah. Raje uporabi OZNAKA ali PREPROSTOBESEDILO.',
		'SIMPLETEXT'	=> 'Alfanumerični znaki - A-Z, števila, presledki, vejice, pike, minus, plus, pomišljaj in podčrtaj',
		'IDENTIFIER'	=> 'Alfanumerični znaki - A-Z, števila, pomišljaj in podčrtaj',
		'NUMBER'	=> 'Katerokoli zaporedje števil',
		'EMAIL'	=> 'Veljaven e-poštni naslov',
		'URL'	=> 'Veljaven URL naslov kateregakoli protokola (http, ftp, ipd.). Če protokol ni podan, se samodejno pripne &quot;http://&quot;.',
		'LOCAL_URL'	=> 'Lokalen URL naslov. Naslov mora biti relativen na naslov teme in ne sme vsebovati naslova ali protokola.',
		'COLOR'	=> 'HTML barva, predstavljena v heksadecimalnem zapisu - <samp>#FF1234</samp> ali <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS koda</a>, kot je denimo <samp>fuchsia</samp> ali <samp>InactiveBorder</samp>',
	),

	'ACP_ICONS_EXPLAIN'	=> 'Na tej strani lahko dodajaš, brišeš in urejaš ikone, ki jih lahko uporabniki dodajajo v svoje teme ali sporočila. Te ikone so običajno prikazane poleg naslova teme na seznamu tem ali zraven naslova sporočila v pregledu teme. Namestiš in ustvariš lahko tudi nove pakete ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smeški ali čustveni simboli so navadno majhne, včasih animirane sličice, uporabljene za izražanje čustev oz. počutja. Na tej strani lahko dodajaš, brišeš in urejaš smeške, ki jih lahko uporabniki dodajajo v svojih sporočilih in/ali zasebnih sporočilih. Namestiš in ustvariš lahko tudi nove pakete smeškov.',
	'ADD_SMILIES'	=> 'Dodaj več smeškov',
	'ADD_SMILEY_CODE'	=> 'Dodaj dodatne kode smeškov',
	'ADD_ICONS'	=> 'Dodaj več ikon',
	'AFTER_ICONS'	=> 'Za %s',
	'AFTER_SMILIES'	=> 'Za %s',
	'CODE'	=> 'Koda',
	'CURRENT_ICONS'	=> 'Trenutna ikona',
	'CURRENT_ICONS_EXPLAIN'	=> 'Izberi, kaj želiš storiti s trenutno nameščenimi ikonami.',
	'CURRENT_SMILIES'	=> 'Trenutni smeški',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Izberi, kaj želiš storiti s trenutno nameščenimi smeški.',
	'DISPLAY_ON_POSTING'	=> 'Prikaži pri pošiljanju sporočila',
	'DISPLAY_POSTING'	=> 'Se prikazuje pri pošiljanju sporočila',
	'DISPLAY_POSTING_NO'	=> 'Se ne prikazuje pri pošiljanju sporočila',
	'EDIT_ICONS'	=> 'Uredi ikone',
	'EDIT_SMILIES'	=> 'Uredi smeške',
	'EMOTION'	=> 'Smešek',
	'EXPORT_ICONS'	=> 'Izvozi in prenesi icons.pak',
	'EXPORT_ICONS_EXPLAIN'	=> '%sOb kliku na povezavo se bo konfiguracija nameščenih ikon prenesla v paket, imenovan <samp>icons.pak</samp>, ki ga lahko uporabiš za kreiranje <samp>.zip</samp> ali <samp>.tgz</samp> datoteke, ki vsebuje vse nameščene ikone, skupaj z nastavitveno datoteko <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'	=> 'Izvozi in prenesi smiles.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sOb kliku na povezavo se bo konfiguracija nameščenih smeškov prenesla v paket, imenovan <samp>smilies.pak</samp>, ki ga lahko uporabiš za kreiranje <samp>.zip</samp> ali <samp>.tgz</samp> datoteke, ki vsebuje vse nameščene smeške, skupaj z nastavitveno datoteko <samp>smilies.pak</samp>%s.',
	'FIRST'	=> 'Prva',
	'ICONS_ADD'	=> 'Dodaj novo ikono',
	'ICONS_NONE_ADDED'	=> 'Nobena ikona ni bila dodana.',
	'ICONS_ONE_ADDED'	=> 'Ikona je bila uspešno dodana.',
	'ICONS_ADDED'	=> 'Ikone so bile uspešno dodane.',
	'ICONS_CONFIG'	=> 'Konfiguracija ikon',
	'ICONS_DELETED'	=> 'Ikona je bila uspešno odstranjena.',
	'ICONS_EDIT'	=> 'Uredi ikono',
	'ICONS_ONE_EDITED'	=> 'Ikona je bila uspešno urejena.',
	'ICONS_NONE_EDITED'	=> 'Nobena ikona ni bila urejena.',
	'ICONS_EDITED'	=> 'Ikone so bile uspešno urejene.',
	'ICONS_HEIGHT'	=> 'Višina ikone',
	'ICONS_IMAGE'	=> 'Slika za ikono',
	'ICONS_IMPORTED'	=> 'Paket ikon je bil uspešno nameščen.',
	'ICONS_IMPORT_SUCCESS'	=> 'Paket ikon je bil uspešno uvožen.',
	'ICONS_LOCATION'	=> 'Lokacija ikone',
	'ICONS_NOT_DISPLAYED'	=> 'Naslednje ikone niso prikazane ob pošiljanju sporočila',
	'ICONS_ORDER'	=> 'Vrstni red',
	'ICONS_URL'	=> 'Datoteka za ikono',
	'ICONS_WIDTH'	=> 'Širina ikone',
	'IMPORT_ICONS'	=> 'Namesti paket ikon',
	'IMPORT_SMILIES'	=> 'Namesti paket smeškov',
	'KEEP_ALL'	=> 'Obdrži vse',
	'MASS_ADD_SMILIES'	=> 'Dodaj več smeškov',
	'NO_ICONS_ADD'	=> 'Na voljo ni nobene ikone za dodajanje.',
	'NO_ICONS_EDIT'	=> 'Na voljo ni nobene ikone za urejanje.',
	'NO_ICONS_EXPORT'	=> 'Ni ikon, iz katerih bi lahko kreiral paket.',
	'NO_ICONS_PAK'	=> 'Ne najdem nobenega paketa z ikonami.',
	'NO_SMILIES_ADD'	=> 'Na voljo ni nobenega smeška za dodajanje.',
	'NO_SMILIES_EDIT'	=> 'Na voljo ni nobenega smeška za urejanje.',
	'NO_SMILIES_EXPORT'	=> 'Ni smeškov, iz katerih bi lahko kreiral paket.',
	'NO_SMILIES_PAK'	=> 'Ne najdem nobenega paketa s smeški.',
	'PAK_FILE_NOT_READABLE'	=> 'Napaka pri branju <samp>.pak</samp> datoteke.',
	'REPLACE_MATCHES'	=> 'Zamenjaj ujemanja',
	'SELECT_PACKAGE'	=> 'Izberi paket s smešli',
	'SMILIES_ADD'	=> 'Dodaj novega smeška',
	'SMILIES_NONE_ADDED'	=> 'Noben smeško ni bil dodan.',
	'SMILIES_ONE_ADDED'	=> 'Smeško je bil uspešno dodan.',
	'SMILIES_ADDED'	=> 'Smeški so bili uspešno dodani.',
	'SMILIES_CODE'	=> 'Koda smeška',
	'SMILIES_CONFIG'	=> 'Konfiguracija smeškov',
	'SMILIES_DELETED'	=> 'Smeško je bil uspešno odstranjen.',
	'SMILIES_EDIT'	=> 'Uredi smeška',
	'SMILIE_NO_CODE'	=> 'Koda smeška "%s" ni bila vnešena, zato je bil le-ta ignoriran.',
	'SMILIE_NO_EMOTION'	=> 'Smeško "%s" je bil ignoriran, ker zanj ni bilo vnešeno čustvo.',
	'SMILIES_NONE_EDITED'	=> 'Noben smeško ni bil posodobljen.',
	'SMILIES_ONE_EDITED'	=> 'Smeško je bil uspešno urejen.',
	'SMILIES_EDITED'	=> 'Smeški so bili uspešno urejeni.',
	'SMILIES_EMOTION'	=> 'Smešek',
	'SMILIES_HEIGHT'	=> 'Višina smeška',
	'SMILIES_IMAGE'	=> 'Slika smeška',
	'SMILIES_IMPORTED'	=> 'Paket smeškov je bil uspešno nameščen.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paket smeškov je bil uspešno uvožen.',
	'SMILIES_LOCATION'	=> 'Lokacija smeška',
	'SMILIES_NOT_DISPLAYED'	=> 'Naslednji smeški niso prikazani ob pošiljanju sporočila',
	'SMILIES_ORDER'	=> 'Vrstni red',
	'SMILIES_URL'	=> 'Slika smeška',
	'SMILIES_WIDTH'	=> 'Širina smeška',
	'WRONG_PAK_TYPE'	=> 'Izbrani paket ne vsebuje potrebnih (primernih) podatkov.',
	'ACP_WORDS_EXPLAIN'	=> 'Na tej strani lahko dodajaš, brišeš in urejaš besede, ki bodo avtomatsko cenzurirane na forumu.
Osebam, ki se bodo poskušale registrirati na forum in bo njihov vzdevek vseboval besedo s tega seznama, bo registracija zavrnjena. 
	In addition people will not be allowed to register with usernames containing these words. Iskanje z delnim ujemanjem (*) je dovoljeno.',
	'ADD_WORD'	=> 'Dodaj novo besedo',
	'EDIT_WORD'	=> 'Uredi cenzurirano besedo',
	'ENTER_WORD'	=> 'Vnesti moraš besedo in njeno zamenjavo.',
	'NO_WORD'	=> 'Nobena beseda ni bila izbrana.',
	'REPLACEMENT'	=> 'Zamenjava',
	'UPDATE_WORD'	=> 'Posodobi cenzurirano besedo',
	'WORD'	=> 'Beseda',
	'WORD_ADDED'	=> 'Cenzurirana beseda je bila uspešno dodana.',
	'WORD_REMOVED'	=> 'Cenzurirana beseda je bila uspešno odstranjena.',
	'WORD_UPDATED'	=> 'Cenzurirana beseda je bila uspešno urejena.',
	'ACP_RANKS_EXPLAIN'	=> 'Na tej strani lahko dodajaš, brišeš in urejaš stopnje. Dodaš lahko tudi posebne stopnje, ki jih lahko dodeliš uporabniku prek uporabnikove nadzorne plošče.',
	'ADD_RANK'	=> 'Dodaj novo stopnjo',
	'MUST_SELECT_RANK'	=> 'Stopnja mora biti izbrana.',
	'NO_ASSIGNED_RANK'	=> 'Nobena posebna stopnja ni bila izbrana.',
	'NO_RANK_TITLE'	=> 'Nisi izbral imena stopnje.',
	'NO_UPDATE_RANKS'	=> 'Stopnja je bila uspešno odstranjena. <br /><br /><strong>Opomba:</strong> Računi z odstranjeno stopnjo niso bili posodobljeni. Na teh računih bo potrebna ročna sprememba stopnje.',
	'RANK_ADDED'	=> 'Stopnja je bila uspešno dodana.',
	'RANK_IMAGE'	=> 'Slika za stopnjo',
	'RANK_IMAGE_EXPLAIN'	=> 'Uporabi za povezavo stopnje s sliko. Pot je relativna glede na korenski direktorij namestitve phpBB-ja.',
	'RANK_MINIMUM'	=> 'Najmanjše število sporočil',
	'RANK_REMOVED'	=> 'Stopnja je bila uspešno odstranjena.',
	'RANK_SPECIAL'	=> 'Nastavi kot posebno stopnjo',
	'RANK_TITLE'	=> 'Ime stopnje',
	'RANK_UPDATED'	=> 'Stopnja je bila uspešno odstranjena.',
	'ACP_DISALLOW_EXPLAIN'	=> 'V tej sekciji lahko nadzoruješ nedovoljena uporabniška imena. Lahko uporabiš tudi delna ujemanja (*). Opomba: vnos uporabniških imen, ki so že registrirana in aktivna, ni dovoljen. Če želiš vnesti ta uporabniška imena, jih moraš najprej zbrisati iz sistema.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Uporabiš lahko uporabniško ime z delnim ujemanjem (*).',
	'ADD_DISALLOW_TITLE'	=> 'Dodaj nedovoljeno uporabniško ime',
	'DELETE_DISALLOW_EXPLAIN'	=> 'Nedovoljena uporabniška imena lahko odstraniš tako, da jih izbereš in nato klikneš na gumb Pošlji..',
	'DELETE_DISALLOW_TITLE'	=> 'Odstrani nedovoljeno uporabniško ime',
	'DISALLOWED_ALREADY'	=> 'Uporabniško ime ne more biti prepovedano. Mogoče je že registrirano, dodano na seznam cenzoriranih besed ali seznam prepovedanih uporabniških imen.',
	'DISALLOWED_DELETED'	=> 'Nedovoljeno uporabniško ime je bilo uspešno odstranjeno.',
	'DISALLOW_SUCCESSFUL'	=> 'Nedovoljeno uporabniško ime je bilo uspešno dodano.',
	'NO_DISALLOWED'	=> 'Ni nedovoljenih uporabniških imen',
	'NO_USERNAME_SPECIFIED'	=> 'Nisi izbral upobabniškega imena.',
	'ACP_REASONS_EXPLAIN'	=> 'V tej sekciji lahko urejaš razloge, ki so uporabljeni v prijavah in sporočilih o zavrnjenih prispevkih. Dodan je privzet razlog, označen z znakom *, ki ga ne moreš odstraniti. Ta razlog se uporabi, če primernejši razlog ne obstaja',
	'ADD_NEW_REASON'	=> 'Dodaj nov razlog',
	'AVAILABLE_TITLES'	=> 'Prevedeni naslovi razlogov',
	'IS_NOT_TRANSLATED'	=> 'Razlog <strong>ni</strong> preveden.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Razlog <strong>ni</strong> bil preveden. Če želiš razlog prevesti v svoj jezik, dodaj ključ v sekcijo z razlogi v jezikovni datoteki.',
	'IS_TRANSLATED'	=> 'Razlog je bil preveden.',
	'IS_TRANSLATED_EXPLAIN'	=> 'Razlog je bil preveden. Če je naveden naslov vpisan v jezikovni datoteki kot ključ, se bo uporabila prevedena oblika naslova in opisa.',
	'NO_REASON'	=> 'Ne najdem razloga.',
	'NO_REASON_INFO'	=> 'Vnesti moraš naslov in opis razloga.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Privzetega razloga ne moreš odstraniti.',
	'REASON_ADD'	=> 'Dodaj razlog',
	'REASON_ADDED'	=> 'Razlog je bil uspešno dodan.',
	'REASON_ALREADY_EXIST'	=> 'Razlog s tem naslovom že obstaja. Prosim izberi drug naslov.',
	'REASON_DESCRIPTION'	=> 'Opis razloga',
	'REASON_DESC_TRANSLATED'	=> 'Prikazan opis razloga',
	'REASON_EDIT'	=> 'Uredi razlog',
	'REASON_EDIT_EXPLAIN'	=> 'Tu lahko dodajaš in urejaš razloge. Če je razlog preveden v jezikovni datoteki, se bo namesto tega opisa uporabil preveden.',
	'REASON_REMOVED'	=> 'Razlog je bil uspešno odstranjen.',
	'REASON_TITLE'	=> 'Naslov razloga',
	'REASON_TITLE_TRANSLATED'	=> 'Prikazan naslov razloga',
	'REASON_UPDATED'	=> 'Razlog je bil uspešno posodobljen.',
	'USED_IN_REPORTS'	=> 'Uporabljeni razlogi',
));

?>