<?php
/**
*
* acp_language.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-05-27 - phpBB.no
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
  'NO_FILE_SELECTED'  => 'Du har ikke valgt noen språkfil.',
  'UNABLE_TO_WRITE_FILE'  => 'Filen kunne ikke bli skrevet til %s.',
  'UPLOAD_FAILED'  => 'Opplastingen ble ikke fullført av ukjent grunn. Prøv å laste den opp manuelt.',
  'ACP_FILES'  => '--> Adminspråkfiler',
  'ACP_LANGUAGE_PACKS_EXPLAIN'  => 'Her kan du installere og slette språkpakker.',
  'EMAIL_FILES'  => '--> E-postmaler',
  'FILE_CONTENTS'  => 'Filinnhold',
  'FILE_FROM_STORAGE'  => 'Fil fra midlertidig mappe',
  'HELP_FILES'  => '--> Hjelpefiler',
  'INSTALLED_LANGUAGE_PACKS'  => 'Installerte språkfiler',
  'INVALID_LANGUAGE_PACK'  => 'Den valgte språkpakken ser ikke ut til å være tilgjengelig. Kontroller språkpakken og last den opp på nytt hvis det er nødvendig.',
  'INVALID_UPLOAD_METHOD'  => 'Opplastingsmetoden er ikke mulig; velg en annen metode.',
  'LANGUAGE_DETAILS_UPDATED'  => 'Språkdetaljene er oppdatert.',
  'LANGUAGE_ENTRIES'  => 'Språklinjer',
  'LANGUAGE_ENTRIES_EXPLAIN'  => 'Her kan du endre eksisterende språklinjer og oversette eventuelle linjer som ikke er oversatt ennå.<br /><strong>Merk:</strong> Når du har endret en fil, vil den bli plassert i en midlertidig mappe som du kan laste ned. Endringene vil ikke bli lagt til før du erstatter den nåværende filen med denne (ved å laste den opp).',
  'LANGUAGE_FILES'  => '--> Språkfiler',
  'LANGUAGE_KEY'  => 'Språknøkkel',
  'LANGUAGE_PACK_ALREADY_INSTALLED'  => 'Denne språkpakken er allerede installert.',
  'LANGUAGE_PACK_DELETED'  => 'Språkpakken <b>%s</b> er slettet. Alle brukere som brukte dette språket er nå satt til å bruke standardspråket.',
  'LANGUAGE_PACK_DETAILS'  => 'Språkpakkedetaljer',
  'LANGUAGE_PACK_INSTALLED'  => 'Språkpakken <strong>%s</strong> er installert.',
  'LANGUAGE_PACK_ISO'  => 'ISO',
  'LANGUAGE_PACK_LOCALNAME'  => 'Lokalt navn',
  'LANGUAGE_PACK_NAME'  => 'Navn',
  'LANGUAGE_PACK_NOT_EXIST'  => 'Den valgte språkpakken eksisterer ikke.',
  'LANGUAGE_PACK_USED_BY'  => 'Brukes av',
  'LANGUAGE_VARIABLE'  => 'Språkvariabel',
  'LANG_AUTHOR'  => 'Språkpakkeforfatter',
  'LANG_ENGLISH_NAME'  => 'Engelsk navn',
  'LANG_ISO_CODE'  => 'ISO-kode',
  'LANG_LOCAL_NAME'  => 'Lokalt navn',
  'MISSING_LANGUAGE_FILE'  => 'Manglende språkfil: <span style="color:red">%s</span>',
  'MISSING_LANG_VARIABLES'  => 'Manglende språkvariabler',
  'MODS_FILES'  => '--> Modifikasjoners språkfiler',
  'NO_LANG_ID'  => 'Du har ikke valgt noen språkpakke.',
  'NO_REMOVE_DEFAULT_LANG'  => 'Du kan ikke slette standardspråkpakken.<br />Hvis du vil gjøre det, velg et annet standardspråk først.',
  'NO_UNINSTALLED_LANGUAGE_PACKS'  => 'Ingen avinstallerte språkfiler',
  'REMOVE_FROM_STORAGE_FOLDER'  => 'Slett fra den midlertidige mappen.',
  'SELECT_DOWNLOAD_FORMAT'  => 'Velg nedlastingsformat',
  'SUBMIT_AND_DOWNLOAD'  => 'Lagre og last ned fil',
  'SUBMIT_AND_UPLOAD'  => 'Lagre og last opp fil',
  'THOSE_MISSING_LANG_FILES'  => 'Følgende språkfiler mangler i %s.',
  'THOSE_MISSING_LANG_VARIABLES'  => 'Fø språkvariabler mangler i språkpakken <strong>%s</strong>.',
  'UNINSTALLED_LANGUAGE_PACKS'  => 'Avinstallerte språkpakker',
  'UPLOAD_COMPLETED'  => 'Opplastingen er fullført.',
  'UPLOAD_METHOD'  => 'Opplastingsmetode:',
  'UPLOAD_SETTINGS'  => 'Opplastingsinnstillinger',
  'WRONG_LANGUAGE_FILE'  => 'Den valgte språkfilen er ikke tilgjengelig.',
));

?>