<?php
/**
*
* acp_attachments.php [Norsk [ NO ]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-05-18 - phpBB Gruppen
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
  'ALLOWED_IN_PM_POST'  => 'Tillat',
  'ATTACH_ID'  => 'ID',
  'NOT_ALLOWED_IN_PM_POST'  => 'Ikke tillat',
  'CAT_FLASH_FILES'  => 'Flashfiler',
  'CAT_QUICKTIME_FILES'  => 'Quicktime-mediefiler',
  'MAX_THUMB_WIDTH'  => 'Maksimal miniatyrbildebredde',
  'MAX_THUMB_WIDTH_EXPLAIN'  => 'Et generert miniatyrbilde vil ikke overgå denne bredden.',
  'NO_EXT_GROUP'  => 'Ingen',
  'NO_FILE_CAT'  => 'Ingen',
  'ONLY_ALLOWED_IN_PM'  => 'Kun lovlig i private meldinger',
  'SECURE_EMPTY_REFERRER'  => 'Tillat tomme henvisninger',
  'SECURE_EMPTY_REFERRER_EXPLAIN'  => 'Sikker nedlasting er basert på henvisninger (som kommer fra brukeren). Vil du tillate nedlasting for brukere uten henvisninger?',
  'ACP_ATTACHMENT_SETTINGS_EXPLAIN'  => 'Her kan du gjøre hovedinnstillingene for vedlegg og de spesielle kategoriene.',
  'ACP_EXTENSION_GROUPS_EXPLAIN'  => 'Her kan du legge til, redigere og slette filtypegrupper, lage en spesiell kategori til dem, endre nedlastingsmekanismen og du kan definere opplastingsikonet som vil bli vist foran vedleggene som tilhører gruppen.',
  'ACP_MANAGE_EXTENSIONS_EXPLAIN'  => 'Her kan du redigere tillatte filtyper. For å aktivere filtypene, gå til filtypegrupperedigeringspanelet. Vi anbefaler å ikke tillate skriptfiler (som php, php3, php4, phtml, pl, cgi, asp, aspx...).',
  'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'  => 'Her kan du se vedlegg som ikke er lagt til i innleggene. Dette skjer oftest når brukere laster opp filer uten å lagre innlegget. Du kan slette vedleggene eller legge dem til i eksisterende innlegg. Innleggene du legger ved filer til får en innleggs-ID som du selv må bestemme. Denne funksjonen er for brukere som vil laste opp filer med et annet program og legger dem til i eksisterende innlegg.',
  'ADD_EXTENSION'  => 'Legg til filtype',
  'ADD_EXTENSION_GROUP'  => 'Legg til filtypegruppe',
  'ADMIN_UPLOAD_ERROR'  => 'Feil ved filopplasting: %s',
  'ALLOWED_FORUMS'  => 'Tillatte forum',
  'ALLOWED_FORUMS_EXPLAIN'  => 'Mulighet til å laste opp filtypen i de merkede (eller alle hvis valgt) forumene.',
  'ALLOW_ATTACHMENTS'  => 'Tillat vedlegg',
  'ALLOW_ALL_FORUMS'  => 'Tillatt i alle forum',
  'ALLOW_IN_PM'  => 'Tillatt i private meldinger',
  'ALLOW_PM_ATTACHMENTS'  => 'Tillat vedlegg i private meldinger',
  'ALLOW_SELECTED_FORUMS'  => 'Bare merkede forum',
  'ASSIGNED_EXTENSIONS'  => 'Tillatte filtyper',
  'ASSIGNED_GROUP'  => 'Tillatt gruppe',
  'ATTACH_EXTENSIONS_URL'  => 'Filtyper',
  'ATTACH_EXT_GROUPS_URL'  => 'Filtypegrupper',
  'ATTACH_MAX_FILESIZE'  => 'Maksimal filstørrelse',
  'ATTACH_MAX_FILESIZE_EXPLAIN'  => 'Maksimal filstørrelse for hver fil; 0 er ubegrenset.',
  'ATTACH_MAX_PM_FILESIZE'  => 'Maksimal PM-filstørrelse',
  'ATTACH_MAX_PM_FILESIZE_EXPLAIN'  => 'Maksimal filstørrelse for private meldinger (inkludert vedlegg), 0 er ubegrenset.',
  'ATTACH_ORPHAN_URL'  => 'Bortkommne vedleggs filer',
  'ATTACH_POST_ID'  => 'Innleggs-ID',
  'ATTACH_QUOTA'  => 'Total vedleggsstørrelse',
  'ATTACH_QUOTA_EXPLAIN'  => 'Maksimal vedleggsfilstørrelse totalt, 0 er ubegrenset.',
  'ATTACH_TO_POST'  => 'Legg til fil i innlegg',
  'CAT_IMAGES'  => 'Bilder',
  'CAT_RM_FILES'  => 'Reell medieflyt',
  'CAT_WM_FILES'  => 'Win-medieflyt',
  'CREATE_GROUP'  => 'Lag ny gruppe',
  'CREATE_THUMBNAIL'  => 'Lag miniatyrbilde',
  'CREATE_THUMBNAIL_EXPLAIN'  => 'Lag et miniatyrbilde i alle mulige situasjoner.',
  'DEFINE_ALLOWED_IPS'  => 'Definer tillatte IP-er/domener',
  'DEFINE_DISALLOWED_IPS'  => 'Definer ulovlige IP-er/domener',
  'DOWNLOAD_ADD_IPS_EXPLAIN'  => 'For å spesifisere forskjellige IP-er og domener, oppgi alle på hver sin linje. For å oppgi en rekke IP-er, slå sammen starten og slutten med en bindestrek (-), bruk * som wildcard.',
  'DOWNLOAD_REMOVE_IPS_EXPLAIN'  => 'Du kan slette IP-er ved å gjøre passende kombinasjon med din mus og ditt tastatur for din datamaskin og nettleser. Utelatte IP-er har blå bakgrunn.',
  'DISPLAY_INLINED'  => 'Integrer bilder',
  'DISPLAY_INLINED_EXPLAIN'  => 'Hvis Ingen bilde er valgt, vil det vises som en link.',
  'DISPLAY_ORDER'  => 'Vedleggsrekkefølge:',
  'DISPLAY_ORDER_EXPLAIN'  => 'Vis vedlegg sortert etter tid.',
  'EDIT_EXTENSION_GROUP'  => 'Endre filtypegrupppe',
  'EXCLUDE_ENTERED_IP'  => 'Forby dette å utelukke den/det valgte IP-en/domenet.',
  'EXCLUDE_FROM_ALLOWED_IP'  => 'Utelukk IP fra tillatte IP-er/domener',
  'EXCLUDE_FROM_DISALLOWED_IP'  => 'Utelukk IP fra ulovlige IP-er/domener',
  'EXTENSIONS_UPDATED'  => 'Filtypene er oppdatert.',
  'EXTENSION_EXIST'  => 'Filtypen %s eksisterer allerede.',
  'EXTENSION_GROUP'  => 'Filtypegruppepanel',
  'EXTENSION_GROUPS'  => 'Filtypegrupper',
  'EXTENSION_GROUP_DELETED'  => 'Filtypegruppen er slettet.',
  'EXTENSION_GROUP_EXIST'  => 'Filtypegruppen %s eksisterer allerede.',
  'GO_TO_EXTENSIONS'  => 'Gå til filtyperedigeringen',
  'GROUP_NAME'  => 'Gruppenavn',
  'IMAGE_LINK_SIZE'  => 'Linkbildedimensjoner',
  'IMAGE_LINK_SIZE_EXPLAIN'  => 'Vis bildevedlegg som link hvis større enn dette, velg 0px x 0px for å deaktivere denne funksjonen.',
  'IMAGICK_PATH'  => 'Bildeadresse',
  'IMAGICK_PATH_EXPLAIN'  => 'Full sti til bildefilen, f. eks. /usr/bin/',
  'MAX_ATTACHMENTS'  => 'Maksimalt antall vedlegg i innlegg',
  'MAX_ATTACHMENTS_PM'  => 'Maksimalt antall vedlegg i PM',
  'MAX_EXTGROUP_FILESIZE'  => 'Maksimal filstørrelse',
  'MAX_IMAGE_SIZE'  => 'Maksimale bildedimensjoner',
  'MAX_IMAGE_SIZE_EXPLAIN'  => 'Maksimal størrelse for bildevedlegg, 0px x 0px deaktiverer bildevedleggsfunksjonen.',
  'MIN_THUMB_FILESIZE'  => 'Minimal bildestørrelse for miniatyrbilder',
  'MIN_THUMB_FILESIZE_EXPLAIN'  => 'Ikke lag et miniatyrbilde for mindre bilder enn dette.',
  'MODE_INLINE'  => 'Integrert',
  'MODE_PHYSICAL'  => 'Fysisk',
  'NOT_ALLOWED_IN_PM'  => 'Ulovlig i private meldinger',
  'NOT_ASSIGNED'  => 'Ikke tilordnet',
  'NO_EXT_GROUP_NAME'  => 'Ingen gruppenavn er oppgitt.',
  'NO_EXT_GROUP_SPECIFIED'  => 'Ingen filtypegruppe er spesifisert.',
  'NO_IMAGE'  => 'Ingen bilde',
  'NO_THUMBNAIL_SUPPORT'  => 'Miniatyrbildesupport har blitt deaktivert fordi ikke noe GD-bibliotek er tilgjengelig eller at imagemagick er installert på serveren. Ingen av disse ble funnet.',
  'NO_UPLOAD_DIR'  => 'Opplastingsmappen du spesifiserte eksisterer ikke.',
  'NO_WRITE_UPLOAD'  => 'Opplastingsmappen du spesifiserte kan ikke ble skrevet til. Forandre rettighetene til å la serveren skrive i den.',
  'ORDER_ALLOW_DENY'  => 'Tillat',
  'ORDER_DENY_ALLOW'  => 'Nekt',
  'REMOVE_ALLOWED_IPS'  => 'Slett tilatte IP-er/domener',
  'REMOVE_DISALLOWED_IPS'  => 'Slett ulovlige IP-er/domener',
  'SEARCH_IMAGICK'  => 'Søk etter bilde',
  'SECURE_ALLOW_DENY'  => 'Tillat/nekt liste',
  'SECURE_ALLOW_DENY_EXPLAIN'  => 'Tillat eller nekt listen over adresser; denne funksjonen gjelder bare nedlasting.',
  'SECURE_DOWNLOADS'  => 'Tillat sikre nedlastinger',
  'SECURE_DOWNLOADS_EXPLAIN'  => 'Med denne funksjonen er nedlastinger kun mulige for de definerte IP-ene/domenene.',
  'SECURE_DOWNLOAD_NOTICE'  => 'Sikre nedlastinger er ikke aktivert. Innstillingene under vil bli lagt til etter aktivering av sikre opplastinger.',
  'SECURE_DOWNLOAD_UPDATE_SUCCESS'  => 'IP-listen er oppdatert.',
  'SETTINGS_CAT_IMAGES'  => 'Bildekategoriinnstillinger',
  'SPECIAL_CATEGORY'  => 'Spesialkategori',
  'SPECIAL_CATEGORY_EXPLAIN'  => 'Spesialkategorier vises forskjellig avhengig av innlegget.',
  'SUCCESSFULLY_UPLOADED'  => 'Opplastet.',
  'SUCCESS_EXTENSION_GROUP_ADD'  => 'Filtypegruppen er lagt til.',
  'SUCCESS_EXTENSION_GROUP_EDIT'  => 'Filtypegruppen er oppdatert.',
  'UPLOADING_FILES'  => 'Opplasting av filer',
  'UPLOADING_FILE_TO'  => 'Laster opp filen "%1$s" til innlegg nummer %2$d...',
  'UPLOAD_DENIED_FORUM'  => 'Du har ikke rettighetene som kreves for å laste opp filer til "%s".',
  'UPLOAD_DIR'  => 'Opplastingsmappe',
  'UPLOAD_DIR_EXPLAIN'  => 'Sti til mappen vedleggene lagres i.',
  'UPLOAD_ICON'  => 'Opplastingsikon:',
  'UPLOAD_NOT_DIR'  => 'Opplastingsstien ser ikke ut til å være en mappe.',
  
	'CHECK_CONTENT'				=> 'Sjekk vedlegg',
	'CHECK_CONTENT_EXPLAIN'		=> 'Noen nettlesere kan bli lurt til å bruke feil MIME-type for opplastede filer. Dette alternativet sørger for å fjerne filer som forårsaker dette.'
));

?>