<?php
/**
*
* acp_bots [Hungarian]
*
* @package language
* @version $Id: bots.php 197 2009-10-18 20:12:18Z fberci $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Robotok kezelése',
	'BOTS_EXPLAIN'		=> 'Az „(indexelő) robotok” automatizált kliensek, melyeket leggyakrabban a keresőmotorok használnak. Mivel a munkameneteket igen ritkán használják rendeltetésszerűen, megzavarhatják a látogatószámlálót, növelhetik a terhelést, és néha az oldalt se tudják rendesen leindexelni. Itt a robotok számára megadhatsz egy speciális felhasználótípust, így úrrá lehetsz a problémán.',
	'BOT_ACTIVATE'		=> 'Aktiválás',
	'BOT_ACTIVE'		=> 'Robot aktív',
	'BOT_ADD'			=> 'Robot felvétele',
	'BOT_ADDED'			=> 'Az új robot sikeresen felvételre került.',
	'BOT_AGENT'			=> 'Kliensazonosító illeszkedés',
	'BOT_AGENT_EXPLAIN'	=> 'A robot böngészőazonosítójára illeszkedő kifejezés, részleges illeszkedés használható.',
	'BOT_DEACTIVATE'	=> 'Deaktiválás',
	'BOT_DELETED'		=> 'A robot sikeresen törlésre került.',
	'BOT_EDIT'			=> 'Robotok szerkesztése',
	'BOT_EDIT_EXPLAIN'	=> 'Itt felvehetsz egy új, illetve szerkeszthetsz egy már meglévő robot bejegyzést. A robot felismerésének céljából megadhatsz egy a robot böngészőazonosítójára illeszkedő kifejezést, illetve egy vagy több IP-címet (akár tartományt is). Ezek megadásánál légy óvatos! Emellett megadhatsz egy megjelenést és egy nyelvet, amiben a fórum meg fog jelenni a robotnak. Ezzel csökkentheted a sávszélesség-használatot, ha egy egyszerű megjelenést állítasz be. Ne felejtsd el beállítani a speciális Robotok csoportnak a megfelelő jogosultságokat.',
	'BOT_LANG'			=> 'Robot nyelv',
	'BOT_LANG_EXPLAIN'	=> 'A robot ilyen nyelven fogja látni a fórumot.',
	'BOT_LAST_VISIT'	=> 'Utolsó látogatás',
	'BOT_IP'			=> 'Robot IP-címe',
	'BOT_IP_EXPLAIN'	=> 'Részleges illeszkedés használható, a címeket vesszővel válaszd el.',
	'BOT_NAME'			=> 'Robot neve',
	'BOT_NAME_EXPLAIN'	=> 'Csak saját magad tájékoztatására lesz használva.',
	'BOT_NAME_TAKEN'	=> 'A név már használatban van a fórumodon, ezért nem használható a robothoz.',
	'BOT_NEVER'			=> 'Soha',
	'BOT_STYLE'			=> 'Robot megjelenés',
	'BOT_STYLE_EXPLAIN'	=> 'A robot ebben a megjelenésben fogja látni a fórumot.',
	'BOT_UPDATED'		=> 'A robot sikeresen frissítésre került.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'A megadott robot böngészőazonosító hasonló a te böngésződ azonosítójához. Kérünk, igazítsd ki a kliensazonosítót.',
	'ERR_BOT_NO_IP'				=> 'A megadott IP-címek hibásak voltak, vagy a hosztneveket nem lehetett meghatározni.',
	'ERR_BOT_NO_MATCHES'		=> 'A robot azonosításához meg kell adnod legalább a kliensazonosítóját vagy az IP-címét.',

	'NO_BOT'		=> 'Nem található robot a megadott azonosítóval.',
	'NO_BOT_GROUP'	=> 'Nem található a speciális robot csoport.',
));

?>
