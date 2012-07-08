<?php
/**
*
* acp_prune.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-08-11 - phpBB.no
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
  'ACP_PRUNE_USERS_EXPLAIN'  => 'Her kan du slette (eller deaktivere) brukere på forumet ditt. Dette kan gjøres på forskellige måter; etter antall innlegg, siste aktivitet, etc. Hvert av disse kriterier kan kombineres, f.eks. kan du klippe brukere som sist var aktive før 2002-01-01 med mindre enn 10 innlegg. Alternativt kan du taste inn en liste over brukere direkte i tekstboksen, enhver kriterie som blir tastet inn vil bli ignorert. Vær varsom med denne funksjonen! Når først en bruker er blitt klippet er det ingen vei tilbake.',
  'DEACTIVATE_DELETE'  => 'Deaktiver eller slett',
  'DEACTIVATE_DELETE_EXPLAIN'  => 'Velg mellom å deaktivere brukere eller slette dem helt, vær oppmerksom på at sletting kan ikke omgjøres!',
  'DELETE_USERS'  => 'Slett',
  'DELETE_USER_POSTS'  => 'Slett klippte bruker poster',
  'DELETE_USER_POSTS_EXPLAIN'  => 'Fjerner innlegg skrevet av klippte brukere har ingen effekt hvis brukere er deaktivert.',
  'JOINED_EXPLAIN'  => 'Tast inn en dato i <kbd>YYYY-MM-DD</kbd> format.',
  'LAST_ACTIVE_EXPLAIN'  => 'Tast inn en dato i <kbd>YYYY-MM-DD</kbd> format.',
  'PRUNE_USERS_LIST'  => 'Brukere som klippes',
  'PRUNE_USERS_LIST_DELETE'  => 'Med det valgte kriterie for klipping av brukere, vil følgende brukerkonto bli slettet.',
  'PRUNE_USERS_LIST_DEACTIVATE'  => 'Med det valgte kriterie for klipping av brukere vil følgende brukerkonto bli deaktivert.',
  'SELECT_USERS_EXPLAIN'  => 'Tast inn spesifikke brukernavne her, de vil bli brukt forut for kriteriet ovenfor.',
  'USER_DEACTIVATE_SUCCESS'  => 'De valgte brukere er blitt deaktivert.',
  'USER_DELETE_SUCCESS'  => 'De valgte brukere er blitt slettet.',
  'USER_PRUNE_FAILURE'  => 'Ingen brukere matcher valgte kriterier.',
  'WRONG_ACTIVE_JOINED_DATE'  => 'Dato er angitte feil, det skal angis i formatet <kbd>YYYY-MM-DD</kbd>.',
  'ACP_PRUNE_FORUMS_EXPLAIN'  => 'Dette vil slette alle emner, som ikke er blitt skrevet i eller sett innenfor  det antall dager du velger. Hvis du ikke taster inn et tall, så vil alle emner bli slettet. Som standard vil emner med åpne avstemninger, prioritert og annonseringer ikke bli slettet.',
  'FORUM_PRUNE'  => 'Klipp i forum',
  'NO_PRUNE'  => 'Ingen forum klippet.',
  'SELECTED_FORUM'  => 'Valgt forum',
  'SELECTED_FORUMS'  => 'Valgte forumer',
  'POSTS_PRUNED'  => 'Innlegg klippet',
  'PRUNE_ANNOUNCEMENTS'  => 'Klipp annonseringer',
  'PRUNE_FINISHED_POLLS'  => 'Klipp avstengte avstemninger',
  'PRUNE_FINISHED_POLLS_EXPLAIN'  => 'Fjerner emner med avsluttede avstemninger.',
  'PRUNE_FORUM_CONFIRM'  => 'Er du sikker på at du vil klippe i de valgte forum med de spesifiserte innstillinger? Når først emner og innlegg er slettet kan ikke dette  omgjøres.',
  'PRUNE_NOT_POSTED'  => 'Dager siden siste innlegg',
  'PRUNE_NOT_VIEWED'  => 'Dager siden sist sett',
  'PRUNE_OLD_POLLS'  => 'Klipp gamle avstemmninger',
  'PRUNE_OLD_POLLS_EXPLAIN'  => 'Fjerner emner med avstemninger som ikke er stemt i for alder av siste innlegg.',
  'PRUNE_STICKY'  => 'Klipp prioritert',
  'PRUNE_SUCCESS'  => 'Klipping av forum ble gjennomført.',
  'TOPICS_PRUNED'  => 'Emner klippet',
));

?>