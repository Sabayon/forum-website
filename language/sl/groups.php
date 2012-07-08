<?php
/**
*
* groups.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-07 - KoMar, mitja_i, NoBody, nSk, Razor, Tody, Veron
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
	'CANNOT_JOIN_GROUP'	=> 'Tej skupini se ne morete se pridružiti. Pridružite se lahko samo odprtim in prosto odprtim skupinam.',
	'CANNOT_RESIGN_GROUP'	=> 'V to skupino se ne morete ponovno vpisati. Ponovno se lahko vpišete samo v odprte in prosto odprte skupine.',
	'ALREADY_DEFAULT_GROUP'	=> 'Izbrana skupina je že vaša privzeta skupina.',
	'ALREADY_IN_GROUP'	=> 'Ste že član izbrane skupine.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Prošnjo za pridružitev k tej skupini ste že oddali.',
	'CHANGED_DEFAULT_GROUP'	=> 'Privzeta skupina je bila spremenjena.',
	'GROUP_AVATAR'	=> 'Avatar skupine',
	'GROUP_CHANGE_DEFAULT'	=> 'Ali ste prepričani, da želite spremeniti svojo privzeto skupino v “%s”?',
	'GROUP_CLOSED'	=> 'Zaprta',
	'GROUP_DESC'	=> 'Opis skupine',
	'GROUP_HIDDEN'	=> 'Skrita',
	'GROUP_INFORMATION'	=> 'Informacije o skupini',
	'GROUP_IS_CLOSED'	=> 'Ta skupina je zaprta, član lahko postanete izključno s povabilom vodje skupine.',
	'GROUP_IS_FREE'	=> 'Ta skupina je prosto odprta, član lahko postane vsak.',
	'GROUP_IS_HIDDEN'	=> 'Ta skupina je skrita, samo njeni člani si lahko ogledajo njene člane.',
	'GROUP_IS_OPEN'	=> 'Ta skupina je odprta, člani lahko zaprosijo za članstvo.',
	'GROUP_IS_SPECIAL'	=> 'Ta skupina je posebna, urejajo jo administratorji foruma.',
	'GROUP_JOIN'	=> 'Pridruži se skupini',
	'GROUP_JOIN_CONFIRM'	=> 'Ali ste prepričani, da se želite pridružiti izbrani skupini?',
	'GROUP_JOIN_PENDING'	=> 'Zaprosi za pridružitev k skupini',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Ali ste prepričani, da želite zaprositi za pridružitev k izbrani skupini?',
	'GROUP_JOINED'	=> 'Pridružili ste se k skupini.',
	'GROUP_JOINED_PENDING'	=> 'Prošnja za pridružitev k skupini je bila oddana. Vašo prošnjo bo pregledal vodja skupine.',
	'GROUP_LIST'	=> 'Upravljaj z uporabniki',
	'GROUP_MEMBERS'	=> 'Upravljaj s skupinami',
	'GROUP_NAME'	=> 'Ime skupine',
	'GROUP_OPEN'	=> 'Odprta',
	'GROUP_RANK'	=> 'Stopnja skupine',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Zapusti skupino',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ali ste prepričani, da želite zapustiti izbrano skupino?',
	'GROUP_RESIGN_PENDING'	=> 'Prekliči prošnjo za pridružitev k skupini',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Ali ste prepričani, da želite preklicati svojo prošnjo za pridružitev k skupini?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Odstranjeni ste bili iz izbrane skupine.',
	'GROUP_RESIGNED_PENDING'	=> 'Vaša prošnja za pridružitev k skupini je bila odstranjena.',
	'GROUP_TYPE'	=> 'Tip skupine',
	'GROUP_UNDISCLOSED'	=> 'Skrita skupina',
	'FORUM_UNDISCLOSED'	=> 'Moderacija skritih forumov',
	'LOGIN_EXPLAIN_GROUP'	=> 'Za ogled podrobnosti skupine morate biti prijavljeni.',
	'NO_LEADERS'	=> 'Niste vodja nobene skupine.',
	'NOT_LEADER_OF_GROUP'	=> 'Izbrana akcija ne more biti izvršena, ker niste vodja izbrane skupine.',
	'NOT_MEMBER_OF_GROUP'	=> 'Izbrana akcija ne more biti izvršena, ker niste član izbrane skupine, ali pa vaše članstvo v skupini še ni bilo potrjeno.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nimate dovoljenja za zapuščanje privzete skupine.',
	'PRIMARY_GROUP'	=> 'Primarna skupina',
	'REMOVE_SELECTED'	=> 'Odstrani izbrane',
	'USER_GROUP_CHANGE'	=> 'Iz skupine “%1$s” v “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'Odstrani vodstvo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ali ste prepričani, da želite odstraniti vodstvo izbrane skupine?',
	'USER_GROUP_DEMOTED'	=> 'Vodstvo skupine je bilo odstranjeno.',
));

?>