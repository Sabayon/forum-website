<?php
/**
*
* posting [Hungarian]
*
* @package language
* @version $Id: posting.php 197 2009-10-18 20:12:18Z fberci $
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
	'ADD_ATTACHMENT'			=> 'Csatolmány feltöltése',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ha szeretnél állományokat csatolni a hozzászólásodhoz, töltsd ki az alábbi mezőket.',
	'ADD_FILE'					=> 'Állomány hozzáadása',
	'ADD_POLL'					=> 'Szavazás készítése',
	'ADD_POLL_EXPLAIN'			=> 'Ha nem szeretnél szavazást csatolni a témához, hagyd üresen az alábbi mezőket.',
	'ALREADY_DELETED'			=> 'Az üzenet már törölve lett.',
	'ATTACH_QUOTA_REACHED'		=> 'Megtelt a fórum csatolmányainak fenntartott terület.',
	'ATTACH_SIG'				=> 'Aláírás hozzáadása (az aláírásod a felhasználói vezérlőpultban változtathatod meg)',

	'BBCODE_A_HELP'				=> 'Beszúrt csatolmány: [attachment=]állománynév.kiterj[/attachment]',
	'BBCODE_B_HELP'				=> 'Félkövér: [b]szöveg[/b]',
	'BBCODE_C_HELP'				=> 'Kód: [code]kód[/code]',
	'BBCODE_E_HELP'				=> 'Lista: lista elem hozzáadása',
	'BBCODE_F_HELP'				=> 'Betűméret: [size=85]kicsi szöveg[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>kikapcsolva</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>bekapcsolva</em>',
	'BBCODE_I_HELP'				=> 'Dőlt: [i]szöveg[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]szöveg[/list]',
 	'BBCODE_LISTITEM_HELP'		=> 'Lista elem: [*]szöveg[/*]',
	'BBCODE_O_HELP'				=> 'Rendezett lista: [list=]szöveg[/list]',
	'BBCODE_P_HELP'				=> 'Kép: [img]http://kep_url[/img]',
	'BBCODE_Q_HELP'				=> 'Idézet: [quote]szöveg[/quote]',
	'BBCODE_S_HELP'				=> 'Betűszín: [color=red]szöveg[/color] Tipp: a színt color=#FF0000 formában is megadhatod.',
	'BBCODE_U_HELP'				=> 'Aláhúzás: [u]szöveg[/u]',
	'BBCODE_W_HELP'				=> 'Link: [url]http://url[/url] vagy [url=http://url]link szöveg[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=szélesség,magasság]http://url[/flash]',
	'BUMP_ERROR'				=> 'Nem ugraszthatod előre a témát, mivel az utolsó hozzászólás nemrég került elküldésre.',

	'CANNOT_DELETE_REPLIED'		=> 'Csak olyan hozzászólást törölhetsz, melyre még nem érkezett válasz.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'A hozzászólás lezárásra került. Már nem szerkesztheted ezt a hozzászólást.',
	'CANNOT_EDIT_TIME'			=> 'Már nem szerkesztetheted, illetve törölheted a hozzászólást.',
	'CANNOT_POST_ANNOUNCE'		=> 'Nem küldhetsz közleményt.',
	'CANNOT_POST_STICKY'		=> 'Nem küldhetsz kiemelt témát.',
	'CHANGE_TOPIC_TO'			=> 'Téma típusának megváltoztatása',
	'CLOSE_TAGS'				=> 'Címkék lezárása',
	'CURRENT_TOPIC'				=> 'Jelenlegi téma',

	'DELETE_FILE'				=> 'Csatolmány törlése',
	'DELETE_MESSAGE'			=> 'Üzenet törlése',
	'DELETE_MESSAGE_CONFIRM'	=> 'Biztosan törölni akarod ezt az üzenetet?',
	'DELETE_OWN_POSTS'			=> 'Csak a saját hozzászólásaidat törölheted.',
	'DELETE_POST_CONFIRM'		=> 'Biztosan törölni akarod ezt a hozzászólást?',
	'DELETE_POST_WARN'			=> 'Törlés után a hozzászólás nem visszaállítható.',
	'DISABLE_BBCODE'			=> 'BBCode kikapcsolása',
	'DISABLE_MAGIC_URL'			=> 'Webcímek automatikus linkké alakításának kikapcsolása',
	'DISABLE_SMILIES'			=> 'Emotikonok kikapcsolása',
	'DISALLOWED_CONTENT'		=> 'A feltöltés visszautasításra került, mivel a feltöltött állomány egy esetleges támadás hordozója lehet.',
	'DISALLOWED_EXTENSION'		=> 'A %s kiterjesztés nem engedélyezett.',
	'DRAFT_LOADED'				=> 'A piszkozat sikeresen betöltésre került, most már befejezheted a hozzászólásod.<br />A piszkozat a hozzászólás elküldése után törlésre fog kerülni.',
	'DRAFT_LOADED_PM'			=> 'A piszkozat sikeresen betöltésre került, most már befejezheted a privát üzenetet.<br />A piszkozat a privát üzenet elküldése után törlésre fog kerülni.',
	'DRAFT_SAVED'				=> 'A piszkozat sikeresen elmentésre került.',
	'DRAFT_TITLE'				=> 'Piszkozat címe',

	'EDIT_REASON'				=> 'Hozzászólás szerkesztésének oka',
	'EMPTY_FILEUPLOAD'			=> 'A feltöltött állomány üres.',
	'EMPTY_MESSAGE'				=> 'Az üzenet nem lehet üres.',
	'EMPTY_REMOTE_DATA'			=> 'Nem sikerült feltölteni az állományt, próbáld meg feltölteni kézzel.',

	'FLASH_IS_OFF'				=> '[flash] <em>kikapcsolva</em>',
	'FLASH_IS_ON'				=> '[flash] <em>bekapcsolva</em>',
	'FLOOD_ERROR'				=> 'Most nem küldhetsz újabb hozzászólást, mivel az előzőt nemrég küldted el.',
	'FONT_COLOR'				=> 'Betűszín',
	'FONT_COLOR_HIDE'			=> 'Betűszínválasztó elrejtése',
	'FONT_HUGE'					=> 'óriási',
	'FONT_LARGE'				=> 'nagy',
	'FONT_NORMAL'				=> 'normál',
	'FONT_SIZE'					=> 'Betűméret',
	'FONT_SMALL'				=> 'kicsi',
	'FONT_TINY'					=> 'apró',

	'GENERAL_UPLOAD_ERROR'		=> 'Nem sikerült feltölteni a csatolmányt a következő helyre: %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>kikapcsolva</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>bekapcsolva</em>',
	'INVALID_FILENAME'			=> 'A %s érvénytelen állománynév. ',

	'LOAD'						=> 'Betöltés',
	'LOAD_DRAFT'				=> 'Piszkozat betöltése',
	'LOAD_DRAFT_EXPLAIN'		=> 'Itt kiválaszthatod, hogy melyik piszkozatot szeretnéd folytatni. A jelenlegi hozzászólásod elvetésre, a tartalma törlésre kerül. A piszkozataidat a felhasználói vezérlőpultban tudod megtekinteni, szerkeszteni, illetve törölni.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Egy téma előreugrasztásához be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Egy hozzászólás törléséhez be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_POST'		=> 'Új téma küldéséhez be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Egy hozzászólás idézéséhez be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Hozzászólás küldéséhez be kell jelentkezned ebben a fórumban.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Legfeljebb %1$d nagyságú betűket használhatsz.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Legfeljebb %1$d pixel magas flasht animációt illeszthetsz be a hozzászólásodba.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Legfeljebb %1$d pixel széles flasht animációt illeszthetsz be a hozzászólásodba.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Legfeljebb %1$d pixel magas képet illeszthetsz be a hozzászólásodba.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Legfeljebb %1$d pixel széles képet illeszthetsz be a hozzászólásodba.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Ide írd az üzenetet, legfeljebb <strong>%d</strong> karakter hosszú lehet.',
	'MESSAGE_DELETED'			=> 'Az üzenet sikeresen törlésre került.',
	'MORE_SMILIES'				=> 'További emotikonok',

	'NOTIFY_REPLY'				=> 'E-mail küldése új hozzászólás érkezésekor',
	'NOT_UPLOADED'				=> 'Az állományt nem sikerült feltölteni.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nem törölhetsz már létező választási lehetőséget.',
	'NO_PM_ICON'				=> 'Nincs PÜ ikon',
	'NO_POLL_TITLE'				=> 'Meg kell adnod a szavazás kérdését.',
	'NO_POST'					=> 'A kért hozzászólás nem létezik.',
	'NO_POST_MODE'				=> 'Nincs hozzászólástípus kiválasztva.',

	'PARTIAL_UPLOAD'			=> 'A feltöltött állomány csak részben került feltöltésre.',
	'PHP_SIZE_NA'				=> 'A csatolmány mérete túl nagy.<br />Nem sikerült megállapítani a PHP php.ini-jében meghatározott maximális méretet.',
	'PHP_SIZE_OVERRUN'			=> 'A csatolmány mérete túl nagy. A maximálisan feltölthető méret %1$d %2$s.<br />Kérjük, vedd figyelembe, hogy ez a php.ini-ben van meghatározva, ezért nem írható felül.',
	'PLACE_INLINE'				=> 'Beszúrás a hozzászólásba',
	'POLL_DELETE'				=> 'Szavazás törlése',
	'POLL_FOR'					=> 'Szavazás időtartama',
	'POLL_FOR_EXPLAIN'			=> 'Hagyd üresen, vagy adj meg 0-t, hogy ne járjon le a szavazás.',
	'POLL_MAX_OPTIONS'			=> 'Felhasználónként válaszható lehetőségek',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Egy felhasználó ennyi választási lehetőségre szavazhat.',
	'POLL_OPTIONS'				=> 'Választási lehetőségek',
	'POLL_OPTIONS_EXPLAIN'		=> 'Írd mindegyiket külön sorba. Legfeljebb <strong>%d</strong> választási lehetőséget adhatsz meg.',
 	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Írd mindegyiket külön sorba. Legfeljebb <strong>%d</strong> választási lehetőséget adhatsz meg. Ha eltávolítasz vagy hozzáadsz egy választási lehetőséget, az eddigi eredmény lenullázásra kerül.',
	'POLL_QUESTION'				=> 'Szavazás kérdése',
	'POLL_TITLE_TOO_LONG'		=> 'A szavazás kérdésének rövidebbnek kell lennie 100 karakternél.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'A feldolgozott szavazáskérdés túl hosszú, próbálj meg eltávolítani néhány BBCode-ot, illetve emotikont.',
	'POLL_VOTE_CHANGE'			=> 'Újraszavazás engedélyezése',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ha engedélyezve van, a felhasználók megváltoztathatják szavazatukat.',
	'POSTED_ATTACHMENTS'		=> 'Feltöltött csatolmányok',
 	'POST_APPROVAL_NOTIFY'		=> 'Amint jóváhagyásra kerül, értesíteni fogunk.',
	'POST_CONFIRMATION'			=> 'Hozzászólás megerősítése',
	'POST_CONFIRM_EXPLAIN'		=> 'Az automatikus hozzászólások megakadályozása érdekében meg kell adnod egy megerősítő kódot. A kód az alábbi képen szerepel. Ha látási vagy egyéb problémák miatt nem tudod elolvasni a kódot, lépj kapcsolatba a %sfórum adminisztrátorával%s.',
	'POST_DELETED'				=> 'Az üzenet sikeresen törlésre került.',
	'POST_EDITED'				=> 'Az üzenet sikeresen szerkesztésre került.',
	'POST_EDITED_MOD'			=> 'Az üzenet sikeresen szerkesztésre került, azonban egy moderátornak még jóvá kell hagynia mielőtt mindenki által megtekinthető lenne.',
	'POST_GLOBAL'				=> 'Globális közlemény',
	'POST_ICON'					=> 'Hozzászólás ikon',
	'POST_NORMAL'				=> 'Sima',
	'POST_REVIEW'				=> 'Hozzászólás áttekintés',
	'POST_REVIEW_EDIT'			=> 'Hozzászólás áttekintés',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'A hozzászólást egy másik felhasználó módosította mialatt te szerkesztetted. Ennek fényében érdemes átnézned a hozzászólásod, és hozzáigazítanod a módosításaid.',
	'POST_REVIEW_EXPLAIN'		=> 'A témába érkezett legalább egy új hozzászólás. Ennek fényében érdemes átnézned a hozzászólásod.',
	'POST_STORED'				=> 'A hozzászólás sikeresen elküldésre került.',
	'POST_STORED_MOD'			=> 'Az üzenet sikeresen szerkesztésre került, azonban egy moderátornak még jóvá kell hagynia mielőtt mindenki által megtekinthető lenne.',
	'POST_TOPIC_AS'				=> 'Téma típusa',
	'PROGRESS_BAR'				=> 'Feltöltés állapota',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Legfeljebb %1$d idézetet ágyazhatsz egymásba.',

	'SAVE'						=> 'Elmentés',
	'SAVE_DATE'					=> 'Elmentve',
	'SAVE_DRAFT'				=> 'Piszkozat elmentése',
	'SAVE_DRAFT_CONFIRM'		=> 'Kérjük, vedd figyelembe, hogy a piszkozatok csak a témát és az üzenetet tartalmazzák, minden más elem eltávolításra kerül. Biztosan el akarod menteni a piszkozatot?',
	'SMILIES'					=> 'Emotikonok',
	'SMILIES_ARE_OFF'			=> 'Emotikonok <em>kikapcsolva</em>',
	'SMILIES_ARE_ON'			=> 'Emotikonok <em>bekapcsolva</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Ennyi ideig lesz kiemelt/közlemény a téma.',
	'STICK_TOPIC_FOR'			=> 'Kiemelés időtartama',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Hagyd üresen, vagy adj meg 0-t, hogy a téma mindig kiemelt/közlemény maradjon. Kérjük, vedd figyelembe, hogy az idő a hozzászólás elküldésétől számítódik.',
	'STYLES_TIP'				=> 'Tipp: a formázások gyorsan alkalmazhatók a kiválasztott szövegen.',

	'TOO_FEW_CHARS'				=> 'Az üzenet túl rövid.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Az üzeneted %1$d karaktert tartalmaz. Legalább %2$d karakter hosszúnak kell lennie.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Legalább két választási lehetőséget meg kell adnod.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nem lehet újabb csatolmányt hozzáadni, %d a maximum.',
	'TOO_MANY_CHARS'			=> 'Az üzenet túl hosszú.',
 	'TOO_MANY_CHARS_POST'		=> 'Az üzeneted %1$d karaktert tartalmaz. Legfeljebb %2$d karakter hosszú lehet.',
 	'TOO_MANY_CHARS_SIG'		=> 'Az aláírásod %1$d karaktert tartalmaz. Legfeljebb %2$d karakter hosszú lehet.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Túl sok választási lehetőséget adtál meg.',
	'TOO_MANY_SMILIES'			=> 'Az üzenet túl sok emotikont tartalmaz. Legfeljebb %d használható.',
	'TOO_MANY_URLS'				=> 'Az üzenet túl sok linket tartalmaz. Legfeljebb %d lehet benne.',
	'TOO_MANY_USER_OPTIONS'		=> 'A felhasználónkénti válaszható lehetőségek száma nem lehet nagyobb, mint az összes választási lehetőségek száma.',
	'TOPIC_BUMPED'				=> 'A téma sikeresen előugrasztásra került.',

	'UNAUTHORISED_BBCODE'		=> 'Bizonyos BBCode-okat nem használhatsz: %s:',
	'UNGLOBALISE_EXPLAIN'		=> 'Ahhoz, hogy a témát általános közleményből sima témává minősítsd vissza, ki kell választanod egy fórumot, amelyben a téma meg fog jelenni.',
	'UPDATE_COMMENT'			=> 'Magyarázat frissítése',
	'URL_INVALID'				=> 'A megadott URL hibás.',
	'URL_NOT_FOUND'				=> 'A megadott állomány nem található.',
	'URL_IS_OFF'				=> '[url] <em>kikapcsolva</em>',
	'URL_IS_ON'					=> '[url] <em>bekapcsolva</em>',
	'USER_CANNOT_BUMP'			=> 'Ebben a fórumban nem ugraszthatsz előre témákat.',
	'USER_CANNOT_DELETE'		=> 'Ebben a fórumban nem törölhetsz hozzászólásokat.',
	'USER_CANNOT_EDIT'			=> 'Ebben a fórumban nem szerkeszthetsz hozzászólásokat.',
	'USER_CANNOT_REPLY'			=> 'Ebben a fórumban nem küldhetsz hozzászólást.',
	'USER_CANNOT_FORUM_POST'	=> 'Nem végezhetsz hozzászólással kapcsolatos műveleteket a fórumban, mivel a fórum típusa ezt nem támogatja.',

	'VIEW_MESSAGE'				=> '%sElküldött üzenet megtekintése%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sElküldött privát üzenet megtekintése%s',

	'WRONG_FILESIZE'			=> 'Az állomány túl nagy, a maximum megengedett méret %1d %2s.',
	'WRONG_SIZE'				=> 'A képnek legalább %1$d pixel szélesnek és %2$d pixel magasnak kell lennie, valamint legfeljebb %3$d pixel széles és %4$d pixel magas lehet. A megadott kép %5$d pixel széles, és %6$d pixel magas.',
));

?>
