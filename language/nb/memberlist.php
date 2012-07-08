<?php
/**
*
* memberlist.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-08-29 - phpBB.no
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
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
  'ABOUT_USER'  => 'Profil',
  'ACTIVE_IN_FORUM'  => 'Mest aktive forum',
  'ACTIVE_IN_TOPIC'  => 'Mest aktive emne',
  'ADD_FOE'  => 'Legg til som uvenn',
  'ADD_FRIEND'  => 'Legg til som venn',
  'AFTER'  => 'Etter',
  'ALL'  => 'Alle',
  'BEFORE'  => 'Før',
  'CC_EMAIL'  => 'Send en kopi av denne e-posten til deg selv.',
  'CONTACT_USER'  => 'Kontakt',
  'DEST_LANG'  => 'Språk',
  'DEST_LANG_EXPLAIN'  => 'Vennligst velg et passende språk (hvis tilgjengelig) for mottakeren av denne meldingen.',
  'EMAIL_BODY_EXPLAIN'  => 'Meldingen vil bli sendt som ren tekst, vennligst ikke inkluder BBKode eller HTML. Avsenderen av meldingen vil bli satt til din e-postadresse.',
  'EMAIL_DISABLED'  => 'Alle e-postrelaterte funksjoner har blitt slått av på dette forumet.',
  'EMAIL_SENT'  => 'E-posten har blitt sendt.',
  'EMAIL_TOPIC_EXPLAIN'  => 'Meldingen vil bli sendt som ren tekst, vennligst ikke inkluder BBKode eller HTML. Informasjon om emnet er allerede inkludert i meldingen. Avsenderen av meldingen vil bli satt til din e-postadresse.',
  'EMPTY_ADDRESS_EMAIL'  => 'Du må skrive inn en gyldig e-postadresse for mottakeren.',
  'EMPTY_MESSAGE_EMAIL'  => 'Du må skrive inn meldingen du vil sende via e-post.',
  'EMPTY_MESSAGE_IM'  => 'Du må skrive inn meldingen du vil sende.',
  'EMPTY_NAME_EMAIL'  => 'Du må skrive inn navnet på mottakeren.',
  'EMPTY_SUBJECT_EMAIL'  => 'Du må skrive inn et emne for e-posten.',
  'EQUAL_TO'  => 'Lik med',
  'FIND_USERNAME_EXPLAIN'  => 'Bruk dette skjemaet for å søke etter spesifike medlemmer. Du trenger ikke å fylle ut alle feltene. For å søke etter deler av et ord kan du bruker * (stjerne) til å representere deler av et ord. Når du skriver inn  datoer skal de skrives på forumatet <kbd>YYYY-MM-DD</kbd>, f.eks. <samp>2004-02-29</samp>. Bruk avkrysningsboksene for å velge ett eller flere brukernavn (flere brukernavn kan bli akseptert avhengig av i hvilken kontekst du bruker søket), og klikk på "Velg merkede"-knappen for å gå tilbake til forrige side.',
  'FLOOD_EMAIL_LIMIT'  => 'Du kan ikke sende flere e-poster akkurat nå, vennligst prøv igjen litt senere.',
  'GROUP_LEADER'  => 'Gruppeleder',
  'HIDE_MEMBER_SEARCH'  => 'Skjul medlemssøk',
  'IM_ADD_CONTACT'  => 'Legg til kontakt',
  'IM_AIM'  => 'Du må ha installert AOLs direktemeldingstjeneste for å bruke dette.',
  'IM_AIM_EXPRESS'  => 'AIM Ekspress',
  'IM_DOWNLOAD_APP'  => 'Last ned program',
  'IM_ICQ'  => 'Vær OBS på at enkelte brukere har valgt å avvise meldinger fra ukjente personer.',
  'IM_JABBER'  => 'Vær OBS på at enkelte brukere har valgt å avvise meldinger fra ukjente personer.',
  'IM_JABBER_SUBJECT'  => 'Dette er en automatisk generert melding, vennligst ikke svar. Melding fra bruker %1$s den %2$s.',
  'IM_MESSAGE'  => 'Din beskjed',
  'IM_MSNM'  => 'Du må ha installert Windows Messenger for å gjøre dette.',
  'IM_MSNM_BROWSER'  => 'Din nettleser støtter ikke dette.',
  'IM_MSNM_CONNECT'  => 'MSNM er ikke tilkoblet. \\nDu må være tilkoblet MSNM for å fortsette.',
  'IM_NAME'  => 'Ditt navn',
  'IM_NO_DATA'  => 'Det er ingen tilgjengelig kontaktinformasjon for denne brukeren.',
  'IM_NO_JABBER'  => 'Sending av direktemeldinger til Jabber-brukere støttes ikke på denne serveren. Du må være tilkoblet Jabber lokalt på din maskin for å fortsette.',
  'IM_RECIPIENT'  => 'Mottaker',
  'IM_SEND'  => 'Send melding',
  'IM_SEND_MESSAGE'  => 'Send melding',
  'IM_SENT_JABBER'  => 'Din beskjed til %1$s har blitt sendt.',
  'IM_USER'  => 'Send en direktemelding',
  'LAST_ACTIVE'  => 'Sist aktiv',
  'LESS_THAN'  => 'Mindre enn',
  'LIST_USER'  => '1 bruker',
  'LIST_USERS'  => '%d brukere',
  'LOGIN_EXPLAIN_LEADERS'  => 'Forumet krever at du er registrert og innlogget for å se på forumledelseslisten.',
  'LOGIN_EXPLAIN_MEMBERLIST'  => 'Forumet krever at du er registrert og innlogget for å se på medlemslisten.',
  'LOGIN_EXPLAIN_SEARCHUSER'  => 'Forumet krever at du er registrert og innlogget for å søke etter brukere.',
  'LOGIN_EXPLAIN_VIEWPROFILE'  => 'Forumet krever at du er registrert og innlogget for å se på brukerprofiler.',
  'MORE_THAN'  => 'Mer enn',
  'NO_EMAIL'  => 'Du har ikke de nødvendige rettigheter for å sende en e-post til denne brukeren.',
  'NO_VIEW_USERS'  => 'Du har ikke rettigheter til å se medlemslisten eller profilene.',
  'ORDER'  => 'Sorter',
  'OTHER'  => 'Annet',
  'POST_IP'  => 'Skrevet fra IP/domene',
  'RANK'  => 'Rang',
  'REAL_NAME'  => 'Mottakers navn',
  'RECIPIENT'  => 'Mottaker',
  'REMOVE_FOE'  => 'Fjern uvenn',
  'REMOVE_FRIEND'  => 'Fjern venn',
  'SEARCH_USER_POSTS'  => 'Søk etter brukerens innlegg',
  'SELECT_MARKED'  => 'Velg merkede',
  'SELECT_SORT_METHOD'  => 'Velg sorteringsmetode',
  'SEND_AIM_MESSAGE'  => 'Send AIM-melding',
  'SEND_ICQ_MESSAGE'  => 'Send ICQ-melding',
  'SEND_IM'  => 'Direktemeldinger',
  'SEND_JABBER_MESSAGE'  => 'Send Jabber-melding',
  'SEND_MESSAGE'  => 'Melding',
  'SEND_MSNM_MESSAGE'  => 'Send MSNM/WLM melding',
  'SEND_YIM_MESSAGE'  => 'Send YIM melding',
  'SORT_EMAIL'  => 'E-post',
  'SORT_LAST_ACTIVE'  => 'Sist aktiv',
  'SORT_POST_COUNT'  => 'Antall innlegg',
  'USERNAME_BEGINS_WITH'  => 'Brukernavn begynner med',
  'USER_ADMIN'  => 'Administrer bruker',
  'USER_FORUM'  => 'Brukerstatistikk',
  'USER_ONLINE'  => 'Pålogget',
  'USER_PRESENCE'  => 'Forumtilstedeværelse',
  'VIEWING_PROFILE'  => 'Brukerprofil for: %s',
  'VISITED'  => 'Sist besøkt',

  'WWW'          => 'Hjemmeside',
  
	'USER_BAN'				=> 'Utestengelse',
));

?>