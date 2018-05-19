<?php
/**
*
* acp_groups [Hungarian]
*
* @package language
* @version $Id: groups.php 197 2009-10-18 20:12:18Z fberci $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Az oldal e részén a csoportokat tudod adminisztrálni. Létrehozhatsz újakat, valamint törölheted és szerkesztheted a már meglévőket. Ezen túl csoportvezetőket jelölhetsz ki, megadhatod, a csoportok státusza nyitott/rejtett/zárt legyen, vagy módosíthatod a csoportok nevét és leírását.',
	'ADD_USERS'						=> 'Felhasználók felvétele',
	'ADD_USERS_EXPLAIN'				=> 'Itt fel tudsz venni új felhasználókat a csoportba. Megadhatod azt is, hogy a felhasználóknak ez legyen az új elsődleges csoportjuk. Továbbá csoportvezetőkké is teheted őket. Kérjük, minden felhasználónevet külön sorba írj.',

	'COPY_PERMISSIONS'				=> 'Jogosultságok másolása',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'A létrehozás után a csoport ugyanazokkal a jogosultságokkal fog rendelkezni, mint az itt kiválasztott.',
	'CREATE_GROUP'					=> 'Új csoport létrehozása',

	'GROUPS_NO_MEMBERS'				=> 'Ennek a csoportnak nincs tagja.',
	'GROUPS_NO_MODS'				=> 'Nincs csoportvezető.',

	'GROUP_APPROVE'					=> 'Tag jóváhagyása',
	'GROUP_APPROVED'				=> 'Jóváhagyott tagok',
	'GROUP_AVATAR'					=> 'Csoport avatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ez a kép kerül megjelenítésre a csoport vezérlőpultban.',
	'GROUP_CLOSED'					=> 'Zárt',
	'GROUP_COLOR'					=> 'Csoportszín',
	'GROUP_COLOR_EXPLAIN'			=> 'Ebben a színben fog megjelenni a tagok felhasználóneve, az alapértelmezett felhasználói érték használatához hagyd üresen.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Biztosan fel akarod venni a %1$s felhasználót a csoportba?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Biztosan fel akarod venni a %1$s felhasználókat a csoportba?',
	'GROUP_CREATED'					=> 'A csoport sikeresen létrehozásra került.',
	'GROUP_DEFAULT'					=> 'Csoport elsődlegessé tétele a tagnak',
	'GROUP_DEFS_UPDATED'			=> 'A csoport elsődlegessé tételre került a kiválasztott tagoknak.',
	'GROUP_DELETE'					=> 'Tag törlése a csoportból',
	'GROUP_DELETED'					=> 'A csoport sikeresen törlésre került, valamint az elsődleges csoportok is sikeresen beállításra kerültek.',
	'GROUP_DEMOTE'					=> 'Csoportvezető visszaléptetése',
	'GROUP_DESC'					=> 'Csoport leírás',
	'GROUP_DETAILS'					=> 'Csoport adatok',
	'GROUP_EDIT_EXPLAIN'			=> 'Itt egy már létező csoportot szerkeszthetsz. Megváltoztathatod a nevét, a leírását és a típusát (nyitott, zárt stb.). Néhány a csoportra kiterjedő beállítást is megadhatsz, mint például szín, rang stb. Az itt végzett változtatások felül fogják írni a felhasználók jelenlegi beállításait. Kérjük, vedd figyelembe, hogy a csoport tagjai felülírhatják a csoport avatar beállításokat, hacsak nem állítod be a megfelelő felhasználói jogosultságokat.',
	'GROUP_ERR_USERS_EXIST'			=> 'A megadott felhasználók már tagjai a csoportnak.',
	'GROUP_FOUNDER_MANAGE'			=> 'Csak alapítói kezelésű',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Csoport kezelésének korlátozása csak alapítókra. Mindazonáltal a csoport jogosultságokkal rendelkező felhasználók látni fogják a csoportot és a csoport tagjait is.',
	'GROUP_HIDDEN'					=> 'Rejtett',
	'GROUP_LANG'					=> 'Csoport nyelv',
	'GROUP_LEAD'					=> 'Csoportvezetők',
	'GROUP_LEADERS_ADDED'			=> 'Az új vezetők sikeresen hozzáadásra kerültek a csoporthoz.',
	'GROUP_LEGEND'					=> 'Csoport megjelenítése a magyarázatban',
	'GROUP_LIST'					=> 'Jelenlegi tagok',
	'GROUP_LIST_EXPLAIN'			=> 'Ez a lista az összes csoporttagsággal rendelkező felhasználót tartalmazza. A tagokat törölheted (kivéve néhány speciális csoportban) vagy ha úgy látod, felvehetsz újakat.',
	'GROUP_MEMBERS'					=> 'Csoporttagok',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Ez egy teljes lista a csoport összes tagjáról. Külön részben tartalmazza a vezetőket, a függő és a már tag felhasználókat. Itt részletekbe menően beállíthatod, hogy ki rendelkezik csoporttagsággal, illetve, hogy kinek mi a szerepe. Egy vezető eltávolításához, de ugyanakkor a csoportban tartásához használd a törlés helyett a visszaléptetés funkciót. Egy tag vezetővé tételéhez hasonlóan az előléptetést vedd igénybe.',
	'GROUP_MESSAGE_LIMIT'			=> 'Csoport privát üzenet korlát mappánként',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ez a beállítás felülírja a felhasználónkénti mappa-üzenetkorlátot. 0 érték esetén a felhasználói alapértelmezett korlát kerül használatra.',
	'GROUP_MODS_ADDED'				=> 'Az új csoportvezetők sikeresen felvételre kerültek.',
	'GROUP_MODS_DEMOTED'			=> 'A csoportvezetők sikeresen visszaléptetésre kerültek.',
	'GROUP_MODS_PROMOTED'			=> 'A csoportvezetők sikeresen előléptetésre kerültek.',
	'GROUP_NAME'					=> 'Csoport neve',
	'GROUP_NAME_TAKEN'				=> 'A megadott csoportnév már használatban van, kérünk, válassz egy másikat.',
	'GROUP_OPEN'					=> 'Nyitott',
	'GROUP_PENDING'					=> 'Függő tagok',
	'GROUP_MAX_RECIPIENTS'			=> 'Engedélyezett címzettek száma privát üzenetenként',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Legfeljebb ennyi címzettje lehet egy privát üzenetnek. 0 értéknél a fórum általános, központi beállítása kerül használatra.',
	'GROUP_OPTIONS_SAVE'			=> 'Csoportra kiterjedő beállítások',
	'GROUP_PROMOTE'					=> 'Előléptetés csoportvezetőnek',
	'GROUP_RANK'					=> 'Csoport rang',
	'GROUP_RECEIVE_PM'				=> 'Csoport kaphat privát üzeneteket',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Kérjük, vedd figyelembe, hogy ettől a beállítástól függetlenül rejtett csoportnak nem lehet üzenetet küldeni.',
	'GROUP_REQUEST'					=> 'Kérelmezéses',
	'GROUP_SETTINGS_SAVE'			=> 'Csoportra kiterjedő beállítások',
	'GROUP_SKIP_AUTH'				=> 'Csoportvezető felmentése a csoport jogosultságok alól',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Ha be van kapcsolva, a csoportvezetőre nem vonatkoznak a csoporra beállított jogosultságok.',
	'GROUP_TYPE'					=> 'Csoport típusa',
	'GROUP_TYPE_EXPLAIN'			=> 'Ez határozza meg melyik felhasználók láthatják a csoportot vagy csatlakozhatnak hozzá.',
	'GROUP_UPDATED'					=> 'A csoport beállítások sikeresen frissítésre kerültek.',

	'GROUP_USERS_ADDED'				=> 'Az új felhasználók sikeresen felvételre kerültek a csoportba.',
	'GROUP_USERS_EXIST'				=> 'A kiválasztott felhasználók már tagok.',
	'GROUP_USERS_REMOVE'			=> 'A felhasználók eltávolításra kerültek a csoportból, valamint az alapértelmezett dolgok is sikeresen beállításra kerültek.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Elsődleges csoporttá tétel minden tagnak',
	'MEMBERS'				=> 'Tagok',

	'NO_GROUP'					=> 'Nem adtál meg csoportot.',
	'NO_GROUPS_CREATED'			=> 'Még nem lett létrehozva csoport.',
	'NO_PERMISSIONS'			=> 'Ne másolja a jogosultságokat',
	'NO_USERS'					=> 'Nem adtál meg egy felhasználót se.',
	'NO_USERS_ADDED'			=> 'Nem került felhasználó hozzáadásra a csoporthoz.',
	'NO_VALID_USERS'			=> 'Nem adtál meg felhasználót, akin elvégezhető lenne ez a művelet.',

	'SPECIAL_GROUPS'			=> 'Előre meghatározott csoportok',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Az előre meghatározott csoportok speciális csoportok, melyeket nem lehet törölni vagy közvetlenül módosítani. Mindazonáltal felhasználókat fel tudsz venni beléjük és néhány alap beállítást is megváltoztathatsz.',

	'TOTAL_MEMBERS'				=> 'Tagok',

	'USERS_APPROVED'				=> 'A felhasználók sikeresen jóváhagyásra kerültek',
	'USER_DEFAULT'					=> 'Felhasználói alapértelmezett',
	'USER_DEF_GROUPS'				=> 'Felhasználói csoportok',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ezeket a csoportokat te vagy a fórum egyik másik adminisztrátora hozta létre. Kezelheted a tagságokat, szerkesztheted a csoport beállításait, és akár törölheted is a csoportot.',
	'USER_GROUP_DEFAULT'			=> 'Beállítás elsődleges csoportnak',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Ha igenre állítod, a felvett felhasználóknak ez lesz beállítva elsődleges csoportnak.',
	'USER_GROUP_LEADER'				=> 'Beállítás csoportvezetőnek',
));

?>
