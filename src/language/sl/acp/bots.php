<?php
/**
*
* acp_bots [Slovenian]
*
* @package language
* @version $Id: bots.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Uredi bote',
	'BOTS_EXPLAIN'		=> '“Boti”, “pajki” ali “gosenice” so avtomatski agenti, ki jih uporabljajo raznorazni iskalniki za posodabljanje njihovih podatkovnih baz. Pogostoma pa se zgodi, da pride do napak. Popačijo prave podatke o številu uporabnikov, upočasnijo samo nalaganje in pogosto jim ne uspe popolnoma pregledati strani. Tukaj lahko definiraš poseben tip uporabnikov, s tem pa zmanjšaš število napak.',
	'BOT_ACTIVATE'		=> 'Aktiviraj',
	'BOT_ACTIVE'		=> 'Aktivnost bota',
	'BOT_ADD'			=> 'Dodaj bota',
	'BOT_ADDED'			=> 'Novi bot uspešno dodan.',
	'BOT_AGENT'			=> 'Ujemanje agentov',
	'BOT_AGENT_EXPLAIN'	=> 'Povezava ujemanja brskalnih agentov bota. Delna ujemanja so dovoljena.',
	'BOT_DEACTIVATE'	=> 'Deaktiviraj',
	'BOT_DELETED'		=> 'Bot uspešno izbirsan.',
	'BOT_EDIT'			=> 'Uredi bote',
	'BOT_EDIT_EXPLAIN'	=> 'Tukaj lahko dodajaš ali urejaš vnešene bote. You may define an agent string and/or one or more IP addresses (or range of addresses) to match. Be careful when defining matching agent strings or addresses. You may also specify a style and language that the bot will view the board using. This may allow you to reduce bandwidth use by setting a simple style for bots. Remember to set appropriate permissions for the special Bot usergroup.',
	'BOT_LANG'			=> 'Jezik bota',
	'BOT_LANG_EXPLAIN'	=> 'Jezik iskanja, ki ga bot uporablja.',
	'BOT_LAST_VISIT'	=> 'Zadnji obisk',
	'BOT_IP'			=> 'IP-naslov bota',
	'BOT_IP_EXPLAIN'	=> 'Delni zadetki so dovoljeni. Naslove loči z vejico.',
	'BOT_NAME'			=> 'Ime bota',
	'BOT_NAME_EXPLAIN'	=> 'Uporabljeno le za tvojo informacijo.',
	'BOT_NAME_TAKEN'	=> 'To ime je že uporabljeno na forumu in ga ne moreš uporabiti za ime bota.',
	'BOT_NEVER'			=> 'Nikoli',
	'BOT_STYLE'			=> 'Stil bota',
	'BOT_STYLE_EXPLAIN'	=> 'Stil, ki ga uporablja forum, za ta bot.',
	'BOT_UPDATED'		=> 'Obstajajoči bot uspešno posodobljen.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Navedeni agent bota je podoben tistemu, ki ga trenutno uporabljate. Prosim, prilagodi agenta za ta bot.',
	'ERR_BOT_NO_IP'				=> 'IP-naslovi, ki ste jih navedli so neveljavni, ali pa pot do njih ni dosegljiva.',
	'ERR_BOT_NO_MATCHES'		=> 'Navesti morate vsaj enega agenta ali pa IP-naslov za ujemanje navedenega bota.',

	'NO_BOT'		=> 'Navedeni ID ne ustreza nobenemu botu.',
	'NO_BOT_GROUP'	=> 'Ni mogoče najti posebne skupine botov.',
));

?>