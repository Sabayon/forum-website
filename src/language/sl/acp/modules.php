<?php
/**
*
* acp_modules.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-10-16 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Tu lahko upravljate z vsemi vrstami modulov. Prosim bodite pozorni, da ima ACP tri-nivojsko sestavo menija (Kategorija -> Kategorija -> Modul) medtem, ko imajo ostali dvo-nivojsko sestavo menija (Kategorija -> Modul), ki se mora ohraniti. Prosim bodite tudi pozorni, da se lahko zaklenete ven, če onemogočite ali izbrišete module, odgovorne za upravljanje s samimi moduli.',
	'ADD_MODULE'	=> 'Dodaj modul',
	'ADD_MODULE_CONFIRM'	=> 'Ali ste prepričani, da želite dodati izbrani modul z izbranim načinom?',
	'ADD_MODULE_TITLE'	=> 'Dodaj modul',
	'CANNOT_REMOVE_MODULE'	=> 'Ni mogoče odstraniti modula, dodeljene ima pomožne module. Prosim odstranite vse pomožne module, preden izvedete ta ukrep.',
	'CATEGORY'	=> 'Kategorija',
	'CHOOSE_MODE'	=> 'Izberi način modula',
	'CHOOSE_MODE_EXPLAIN'	=> 'Izberite način modula, ki je v uporabi.',
	'CHOOSE_MODULE'	=> 'Izberi modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Izberi datoteko, katero prikliče ta modul.',
	'CREATE_MODULE'	=> 'Ustvari nov modul',
	'DEACTIVATED_MODULE'	=> 'Deaktiviraj modul',
	'DELETE_MODULE'	=> 'Izbriši modul',
	'DELETE_MODULE_CONFIRM'	=> 'Ali ste prepričani, da želite odstraniti ta modul?',
	'EDIT_MODULE'	=> 'Uredi modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Tu lahko vnesete specifične nastavitve modula.',
	'HIDDEN_MODULE'	=> 'Skriti modul',
	'MODULE'	=> 'Modul',
	'MODULE_ADDED'	=> 'Modul uspešno dodan.',
	'MODULE_DELETED'	=> 'Modul uspešno odstranjen.',
	'MODULE_DISPLAYED'	=> 'Modul prikazan',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Če ne želite prikazati tega modula, toda ga želite uporabljati, nastavite izbiro na ne.',
	'MODULE_EDITED'	=> 'Modul uspešno urejen.',
	'MODULE_ENABLED'	=> 'Modul omogočen',
	'MODULE_LANGNAME'	=> 'Ime jezika modula',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Vnesite ime prikazanega modula. Uporabite jezikovno konstanto, če je ime izbrano iz jezikovne datoteke.',
	'MODULE_TYPE'	=> 'Tip modula',
	'NO_CATEGORY_TO_MODULE'	=> 'Ni mogoče spremeniti kategorije v modul. Prosim odstranite/premaknite vse pomožne module pred izvedbo tega ukrepa.',
	'NO_MODULE'	=> 'Ni mogoče najti modula.',
	'NO_MODULE_ID'	=> 'Ni določena oznaka modula.',
	'NO_MODULE_LANGNAME'	=> 'Ni bil določen jezik modula.',
	'NO_PARENT'	=> 'Ni glavnega modula',
	'PARENT'	=> 'Glavni modul',
	'PARENT_NO_EXIST'	=> 'Glavni modul ne obstaja.',
	'SELECT_MODULE'	=> 'Izberi modul',
));

?>