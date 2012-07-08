<?php
/**
*
* groups.php [Norwegian Bokmaal]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-11-25 - phpBB.no
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
	'ALREADY_IN_GROUP_PENDING'	=> 'Du har allerede søkt om medlemskap i den valgte gruppen.',
	'FORUM_UNDISCLOSED'	=> 'Modererer skjulte forum',
	'ALREADY_DEFAULT_GROUP'	=> 'Den valgte gruppen er allerede din standardgruppe',
	'ALREADY_IN_GROUP'	=> 'Du er allerede medlem av den valgte gruppen',
	'CHANGED_DEFAULT_GROUP'	=> 'Standardgruppe valgt',
	'GROUP_AVATAR'	=> 'Gruppeavatar',
	'GROUP_CHANGE_DEFAULT'	=> 'Vil du skifte standardgruppe til "%s"?',
	'GROUP_CLOSED'	=> 'Stengt',
	'GROUP_DESC'	=> 'Gruppebeskrivelse',
	'GROUP_HIDDEN'	=> 'Skjult',
	'GROUP_INFORMATION'	=> 'Gruppeinformasjon',
	'GROUP_IS_CLOSED'	=> 'Gruppen er privat. Nye medlemmer må godkjennes først.',
	'GROUP_IS_FREE'	=> 'Gruppen er åpen. Alle kan melde seg inn.',
	'GROUP_IS_HIDDEN'	=> 'Gruppen er skjult, bare medlemmer av denne gruppen kan se medlemskapet.',
	'GROUP_IS_OPEN'	=> 'Gruppen er åpen, men du må søke om å bli medlem.',
	'GROUP_IS_SPECIAL'	=> 'Dette er en spesialgruppe, som er administrert av forumadministratoren.',
	'GROUP_JOIN'	=> 'Bli med',
	'GROUP_JOIN_CONFIRM'	=> 'Er du sikker på at du vil melde deg inn i denne gruppen?',
	'GROUP_JOIN_PENDING'	=> 'Skriv en søknad for å bli med',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Er du sikker på at du vil søke på den valgte gruppen?',
	'GROUP_JOINED'	=> 'Du er nå med i valgte gruppe',
	'GROUP_JOINED_PENDING'	=> 'Søknaden er levert. Søknaden må først bli godkjent av en gruppe leder.',
	'GROUP_LIST'	=> 'Behandle brukere',
	'GROUP_MEMBERS'	=> 'Gruppemedlemmer',
	'GROUP_NAME'	=> 'Gruppenavn',
	'GROUP_OPEN'	=> 'åpen',
	'GROUP_RANK'	=> 'Grupperangering',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Avslutte gruppemedlemskap',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Er du sikker på at du vil avslutte ditt gruppemedlemskap til den valgte gruppen?',
	'GROUP_RESIGN_PENDING'	=> 'avslutt en ventende gruppe søknad',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Er du sikker på at du vil omgjøre din behandlende søknad til den valgte gruppen?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Du er nå utmeldt fra denne gruppen',
	'GROUP_RESIGNED_PENDING'	=> 'Din søknad om medlemskap i de valgte gruppene er nå slettet',
	'GROUP_TYPE'	=> 'Gruppetype',
	'GROUP_UNDISCLOSED'	=> 'Skjult gruppe',
	'LOGIN_EXPLAIN_GROUP'	=> 'Du må logge inn for å se gruppedetaljer',
	'NO_LEADERS'	=> 'Du er ikke leder i noen gruppe.',
	'NOT_LEADER_OF_GROUP'	=> 'Handlingen kan ikke utføres fordi du ikke er leder i gruppen.',
	'NOT_MEMBER_OF_GROUP'	=> 'Handlingen kan ikke utføres fordi du ikke er medlem i gruppen.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Du har ikke lov til å melde deg ut av hovedgruppen.',
	'PRIMARY_GROUP'	=> 'Hovedgruppe',
	'REMOVE_SELECTED'	=> 'Fjern valgte',
	'USER_GROUP_CHANGE'	=> 'Bytter gruppe fra %uFFFD%1$s%uFFFD til %uFFFD%2$s%uFFFD.',
	'USER_GROUP_DEMOTE'	=> 'Fjern lederskap',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Er du sikker på at du vil trekke deg som gruppeleder fra den valgte gruppen?',
	'USER_GROUP_DEMOTED'	=> 'Du er nå fjernet som leder fra den valgte gruppen',
	
	'CANNOT_JOIN_GROUP'			=> 'Du kan ikke bli medlem av denne gruppen. Du kan bare bli medlem av åpne grupper.',
	'CANNOT_RESIGN_GROUP'		=> 'Du kan ikke melde deg ut av denne gruppen. Du kan bare melde deg ut av åpne grupper.'
));

?>