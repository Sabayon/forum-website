<?php
/**
*
* memberlist [Hungarian]
*
* @package language
* @version $Id: memberlist.php 203 2009-10-29 22:27:35Z fberci $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Legaktívabb fórum',
	'ACTIVE_IN_TOPIC'		=> 'Legaktívabb téma',
	'ADD_FOE'				=> 'Hozzáadás az ellenségekhez',
	'ADD_FRIEND'			=> 'Hozzáadás a barátokhoz',
	'AFTER'					=> 'Később mint',

	'ALL'					=> 'Összes',

	'BEFORE'				=> 'Korábban mint',

	'CC_EMAIL'				=> 'Másolat küldése magadnak',
	'CONTACT_USER'			=> 'Kapcsolat:',

	'DEST_LANG'				=> 'Nyelv',
	'DEST_LANG_EXPLAIN'		=> 'Válassz ki egy az üzenet címzettjének megfelelő nyelvet (ha elérhető).',

	'EMAIL_BODY_EXPLAIN'	=> 'Az üzenet sima szövegként kerül elküldésre, ne használj HTML-t vagy BBCode-ot. Az üzenet válaszcíme a te e-mail címed lesz.',
	'EMAIL_DISABLED'		=> 'Sajnáljuk, de az e-mail küldéssel kapcsolatos funkciók kikapcsolásra kerültek.',
	'EMAIL_SENT'			=> 'Az e-mail sikeresen elküldésre került.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Az üzenet sima szövegként kerül elküldésre, ne használj HTML-t vagy BBCode-ot. Kérjük, vedd figyelembe, hogy az üzenet már tartalmazza a témával kapcsolatos információkat. Az üzenet válaszcíme a te e-mail címed lesz.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Meg kell adnod a címzett valódi e-mail címét.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Nem küldhetsz üres üzenetet.',
 	'EMPTY_MESSAGE_IM'		=> 'Nem küldhetsz üres üzenetet.',
	'EMPTY_NAME_EMAIL'		=> 'Meg kell adnod a címzett valódi nevét.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Meg kell adnod az e-mail témáját.',
	'EQUAL_TO'				=> 'Annyi mint',

	'FIND_USERNAME_EXPLAIN'	=> 'Ennek az űrlapnak a segítségével konkrét felhasználókra kereshetsz rá. Nem kell az összes mezőt kitöltened. Részleges szavakhoz használd a * jokerkaraktert. A dátumokat <kbd>ÉÉÉÉ-HH-NN</kbd> formában add meg (például <samp>2004-02-29</samp>). Használd a jelölőnégyzeteket egy vagy több felhasználó kiválasztásához (az űrlaptól függ, hányat választhatsz ki), majd kattints a kijelöltek kiválasztása gombra, hogy visszatérj az előző űrlaphoz.',
	'FLOOD_EMAIL_LIMIT'		=> 'Most nem küldhetsz több e-mailt. Kérjük, próbálkozz később.',

	'GROUP_LEADER'			=> 'Csoportvezető',

	'HIDE_MEMBER_SEARCH'	=> 'Felhasználó keresésének elrejtése',

	'IM_ADD_CONTACT'		=> 'Felvétel a kapcsolatok közé',
	'IM_AIM'				=> 'Kérjük, vedd figyelembe, hogy ennek használatához szükséged van az AOL Instant Messenger programra.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Alkalmazás letöltése',
	'IM_ICQ'				=> 'Kérjük, vedd figyelembe, hogy a felhasználók lehet, hogy beállították, hogy ne kapjanak kéretlen üzeneteket.',
	'IM_JABBER'				=> 'Kérjük, vedd figyelembe, hogy a felhasználók lehet, hogy beállították, hogy ne kapjanak kéretlen üzeneteket.',
	'IM_JABBER_SUBJECT'		=> 'Ez egy automatikus üzenet, kérjük, ne válaszolj! Üzenet %1$s felhasználótól %2$s-kor.',
	'IM_MESSAGE'			=> 'Az üzeneted',
	'IM_MSNM'				=> 'Kérjük, vedd figyelembe, hogy ennek használatához szükséged van a Windows Messenger programra.',
	'IM_MSNM_BROWSER'		=> 'Sajnos a böngésződ nem támogatja ezt.',
	'IM_MSNM_CONNECT'		=> 'Az MSNM nem csatlakozott.\nA folytatáshoz kapcsolódnod kell az MSNM-hez.',
	'IM_NAME'				=> 'Neved',
 	'IM_NO_DATA'			=> 'Nincs megfelelő kapcsolat információ ehhez a felhasználóhoz.',
	'IM_NO_JABBER'			=> 'Sajnos ezen a fórumon nem támogatott a direkt üzenetküldés Jabberes felhasználóknak. A címzettel való kapcsolatba lépéshez szükséged lesz egy Jabber kliensre.',
	'IM_RECIPIENT'			=> 'Címzett',
	'IM_SEND'				=> 'Üzenet elküldése',
	'IM_SEND_MESSAGE'		=> 'Üzenet küldése',
	'IM_SENT_JABBER'		=> 'Az üzeneted sikeresen elküldésre került %1$snek.',
	'IM_USER'				=> 'Azonnali üzenet küldése',

	'LAST_ACTIVE'				=> 'Utoljára aktív',
	'LESS_THAN'					=> 'Kevesebb mint',
	'LIST_USER'					=> '1 felhasználó',
	'LIST_USERS'				=> '%d felhasználó',
	'LOGIN_EXPLAIN_LEADERS'		=> 'A csapat megtekintéséhez be kell jelentkezned.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'A taglista megtekintéséhez be kell jelentkezned.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Felhasználók kereséséhez be kell jelentkezned.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Egy felhasználó profiljának megtekintéséhez be kell jelentkezned.',

	'MORE_THAN'				=> 'Több mint',

	'NO_EMAIL'				=> 'Nem küldhetsz e-mailt ennek a felhasználónak.',
	'NO_VIEW_USERS'			=> 'Nincs jogosultságod a taglista vagy a felhasználók profiljainak megtekintéséhez.',

	'ORDER'					=> 'Sorrend',
	'OTHER'					=> 'Más',

	'POST_IP'				=> 'IP/domain, melyről írt',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Címzett neve',
	'RECIPIENT'				=> 'Címzett',
	'REMOVE_FOE'			=> 'Törlés az ellenségek közül',
	'REMOVE_FRIEND'			=> 'Törlés a barátok közül',

	'SEARCH_USER_POSTS'		=> 'Felhasználó hozzászólásainak megtekintése',
	'SELECT_MARKED'			=> 'Kijelöltek kiválasztása',
	'SELECT_SORT_METHOD'	=> 'Rendezés',
	'SEND_AIM_MESSAGE'		=> 'AIM üzenet küldése',
	'SEND_ICQ_MESSAGE'		=> 'ICQ üzenet küldése',
	'SEND_IM'				=> 'Azonnali üzenetküldés',
	'SEND_JABBER_MESSAGE'	=> 'Jabber üzenet küldése',
	'SEND_MESSAGE'			=> 'Üzenet küldése',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM üzenet küldése',
	'SEND_YIM_MESSAGE'		=> 'YIM üzenet küldése',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Utolsó aktivitás időpontja',
	'SORT_POST_COUNT'		=> 'Hozzászólások száma',

	'USERNAME_BEGINS_WITH'	=> 'Felhasználónév kezdőbetűje',
	'USER_ADMIN'			=> 'Felhasználó kezelése',
	'USER_BAN'				=> 'Kitiltások',
	'USER_FORUM'			=> 'Statisztika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Még nem lett emlékeztető küldve.',
		1		=> '%1$d emlékeztető lett küldve<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Jelenlét a fórumban',

	'VIEWING_PROFILE'		=> 'Profil megtekintése: %s',
	'VISITED'				=> 'Utolsó látogatás',

	'WWW'					=> 'Honlap',
));

?>
