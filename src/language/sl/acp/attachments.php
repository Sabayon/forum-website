<?php
/**
*
* acp_attachments.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-05 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tu lahko nastavljaš osnovne nastavitve priponk in pridruženih posebnih kategorij.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> 'Tu lahko dodaš, odstraniš, urediš ali onemogočiš skupine končnic. Nadaljne nastavitve vključujejo prireditve posebnih kategorij, spreminjanje prenosnih mehanizmov in definiranje ikone, ki bo prikazana pred priponko, ki spada k ujemajoči skupini.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> 'Tu lahko nastavljaš dovoljene končnice datotek. Za aktivacijo datotečne končnice uporabi nadzorno ploščo za končnice. Datotečnih končnic, ki so običajno uporabljene za skriptne jezike, kot so <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, ipd., ni priporočljivo omogočiti.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tu lahko urejaš osirotele datoteke. To se pogosto zgodi, ko uporabnik naloži datoteko, nato pa ne odda sporočila. Te datoteke lahko izbrišeš, ali pa jih dodaš k obstoječim sporočilom. Za slednje potrebuješ veljavno identifikacijsko številko sporočila (ID), ki jo moraš najti sam.',
	'ADD_EXTENSION'	=> 'Dodaj končnico',
	'ADD_EXTENSION_GROUP'	=> 'Dodaj skupino končnic',
	'ADMIN_UPLOAD_ERROR'	=> 'Napaka pri dodajanju datoteke "%s"',
	'ALLOWED_FORUMS'	=> 'Dovoljeni forumi',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'Dodajanje izbranih datotek je dovoljeno v izbranih (ali vseh) forumih.',
	'ALLOWED_IN_PM_POST'	=> 'Dovoljeno',
	'ALLOW_ATTACHMENTS'	=> 'Dovoli priponke',
	'ALLOW_ALL_FORUMS'	=> 'Dovoli v vseh forumih',
	'ALLOW_IN_PM'	=> 'Dovoli v zasebnih sporočilih',
	'ALLOW_PM_ATTACHMENTS'	=> 'Dovoli priponke v zasebnih sporočilih',
	'ALLOW_SELECTED_FORUMS'	=> 'Samo forumi, izbrani spodaj',
	'ASSIGNED_EXTENSIONS'	=> 'Prirejene končnice',
	'ASSIGNED_GROUP'	=> 'Prirejene skupine končnic',
	'ATTACH_EXTENSIONS_URL'	=> 'Končnice',
	'ATTACH_EXT_GROUPS_URL'	=> 'Skupine končnic',
	'ATTACH_ID'	=> 'ID',
	'ATTACH_MAX_FILESIZE'	=> 'Največja velikost datoteke',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'Omejitev največje velikosti datoteke - 0 je neomejeno.',
	'ATTACH_MAX_PM_FILESIZE'	=> 'Največja velikost priponk zasebnih sporočil',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Skupna omejitev velikosti priponk zasebnih sporočil na uporabnika - 0 je neomejeno.',
	'ATTACH_ORPHAN_URL'	=> 'Osirotele priponke',
	'ATTACH_POST_ID'	=> 'ID sporočila',
	'ATTACH_QUOTA'	=> 'Skupna omejitev priponk',
	'ATTACH_QUOTA_EXPLAIN'	=> 'Skupna globalna omejitev velikosti za celoten forum - 0 je neomejeno.',
	'ATTACH_TO_POST'	=> 'Pripni k prispevku',
	'CAT_FLASH_FILES'	=> 'Flash datoteke',
	'CAT_IMAGES'	=> 'Slike',
	'CAT_QUICKTIME_FILES'	=> 'Quicktime datoteke',
	'CAT_RM_FILES'	=> 'RealMedia datoteke',
	'CAT_WM_FILES'	=> 'Windows Media datoteke',
	'CHECK_CONTENT'	=> 'Preveri datoteke',
	'CHECK_CONTENT_EXPLAIN'	=> 'Nekatere brskalnike se da nahecati, da za naložene datoteke privzamejo napačen MIME tip. Ta možnost omogoča, da bodo datoteke, ki bi to lahko povzročile, zavrnjene.',
	'CREATE_GROUP'	=> 'Ustvari novo skupino',
	'CREATE_THUMBNAIL'	=> 'Ustvari predogled',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Ustvari predogled v vseh možnih situacijah.',
	'DEFINE_ALLOWED_IPS'	=> 'Definiraj dovoljene IP naslove / gostiteljska imena',
	'DEFINE_DISALLOWED_IPS'	=> 'Definiraj nedovoljene IP naslove / gostiteljska imena',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'Če želiš dodati več IP naslovov ali gostiteljskih imen, dodaj vsako v svojo vrsto. Za dodajanje rangov IP naslovov, zapiši začetni in končni IP naslov, ki ju ločiš s pomišljajem (-). Uporabiš lahko tudi * za delna ujemanja.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'S primernimi kombinacijami tipkovnice in miške lahko ddstraniš več IP naslovov hkrati. Odstranjeni naslovi so obarvani modro.',
	'DISPLAY_INLINED'	=> 'Prikaži slike med vrsticami',
	'DISPLAY_INLINED_EXPLAIN'	=> 'Če je izbrana vrednost Ne, se bodo namesto slikovnih priponk prikazale povezave do le-teh.',
	'DISPLAY_ORDER'	=> 'Sortiranje priponk',
	'DISPLAY_ORDER_EXPLAIN'	=> 'Priponke sortiraj po času.',
	'EDIT_EXTENSION_GROUP'	=> 'Uredi skupino končnic',
	'EXCLUDE_ENTERED_IP'	=> 'Izberi da, če želiš IP/gostiteljsko ime odstraniti s seznama.',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'Odstrani s seznama dovoljenih naslovov',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Odstrani s seznama nedovoljenih naslovov',
	'EXTENSIONS_UPDATED'	=> 'Končnice uspešno posodobljene.',
	'EXTENSION_EXIST'	=> 'Končnica %s že obstaja.',
	'EXTENSION_GROUP'	=> 'Skupina končnic',
	'EXTENSION_GROUPS'	=> 'Skupine končnic',
	'EXTENSION_GROUP_DELETED'	=> 'Skupina končnic uspešno odstranjena.',
	'EXTENSION_GROUP_EXIST'	=> 'Skupina končnic %s že obstaja.',
	'GO_TO_EXTENSIONS'	=> 'Pojdi na urejanje končnic',
	'GROUP_NAME'	=> 'Ime skupine',
	'IMAGE_LINK_SIZE'	=> 'Dimenzije slike med vrsticami',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Sliko prikaži kot medvrstično povezavo, če je dimenzije presegajo vnešene vrednosti. Če želiš sliko vedno prikazati, vnesi v obe polji 0.',
	'IMAGICK_PATH'	=> 'Pot do Imagemagick-a',
	'IMAGICK_PATH_EXPLAIN'	=> 'Pot do programa imagemagick, uporabljenega za delo s slikami; npr.: <samp>/usr/bin/</samp>.',
	'MAX_ATTACHMENTS'	=> 'Največ priponk na prispevek',
	'MAX_ATTACHMENTS_PM'	=> 'Največ priponk na zasebno sporočilo',
	'MAX_EXTGROUP_FILESIZE'	=> 'Največja velikost datoteke',
	'MAX_IMAGE_SIZE'	=> 'Največja dimenzija slike',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'Največja velikost pripete slike. Če ne želiš uporabiti preverjanja velikosti, v obe polji vnesi 0.',
	'MAX_THUMB_WIDTH'	=> 'Največja velikost predogleda',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'Generiran predogled slike ne bo presegel vnešene širine.',
	'MIN_THUMB_FILESIZE'	=> 'Minimalna velikost datoteke predogleda',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ne ustvari predogleda slike, ki je manjša od vnešene vrednosti.',
	'MODE_INLINE'	=> 'Medvrstično',
	'MODE_PHYSICAL'	=> 'Fizično',
	'NOT_ALLOWED_IN_PM'	=> 'Dovoljeno le v prispevkih',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ni dovoljeno',
	'NOT_ASSIGNED'	=> 'Ni določeno',
	'NO_EXT_GROUP'	=> 'Brez',
	'NO_EXT_GROUP_NAME'	=> 'Ime skupine ni bilo vnešeno',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Skupina končnic ni bila izbrana.',
	'NO_FILE_CAT'	=> 'Brez',
	'NO_IMAGE'	=> 'Ni slike',
	'NO_THUMBNAIL_SUPPORT'	=> 'Predogled slik je bil onemogočen. Če ga želiš omogočiti, moraš na spletnem strežniku omogočiti dodatek GD ali imagemagick.',
	'NO_UPLOAD_DIR'	=> 'Izbran direktorij za nalaganje datotek ne obstaja.',
	'NO_WRITE_UPLOAD'	=> 'Direktorij, izbran za nalaganje datotek ne obstaja, ali pa spletni strežnik nima pravic za pisanje vanj. Prosim, preveri, če mapa obstaja in če ima strežnik dovoljenja za pisanje.',
	'ONLY_ALLOWED_IN_PM'	=> 'Dovoli le v zasebnih sporočilih',
	'ORDER_ALLOW_DENY'	=> 'Dovoli',
	'ORDER_DENY_ALLOW'	=> 'Prepovej',
	'REMOVE_ALLOWED_IPS'	=> 'Odstrani <em>dovoljene</em> IP/gostiteljske naslove',
	'REMOVE_DISALLOWED_IPS'	=> 'Odstrani <em>nedovoljene</em> IP/gostiteljske naslove',
	'SEARCH_IMAGICK'	=> 'Najdi Imagemagick',
	'SECURE_ALLOW_DENY'	=> 'Seznam dovoljenih in nedovoljenih',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'Spremeni privzeto obnašanje seznama, ko so prenosi prek varnega protokola omogočeni.',
	'SECURE_DOWNLOADS'	=> 'Omogoči varne prenose',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'Če je ta možnost omogočena, so prenosi omejeni na IP/gostiteljske naslove, ki jih vneseš v seznam dovoljenih naslovov.',
	'SECURE_DOWNLOAD_NOTICE'	=> 'Varni prenosi niso omogočeni. Spodnje nastavitve bodo stopile v veljavo šele, ko bodo le-ti omogočeni.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'Seznam IP naslovov je bil uspešno posodobljen.',
	'SECURE_EMPTY_REFERRER'	=> 'Dovoli prazno referenco',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Varni prenosi temeljijo na URL referencah. Če je ta možnost omogočena, bodo prenosi prosto dostopni.',
	'SETTINGS_CAT_IMAGES'	=> 'Nastavitve kategorij slik',
	'SPECIAL_CATEGORY'	=> 'Posebne kategorije',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'Posebne kategorije se razlikujejo od navadnih v načinu predstavitve med sporočili.',
	'SUCCESSFULLY_UPLOADED'	=> 'Uspešno naloženo.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Skupina končnic uspešno dodana.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Skupina končnic uspešno posodobljena.',
	'UPLOADING_FILES'	=> 'Nalaganje datotek',
	'UPLOADING_FILE_TO'	=> 'Nalaganje datotek ?%1$s? k sporočilu številka %2$d?',
	'UPLOAD_DENIED_FORUM'	=> 'Nimaš dovoljenja za nalaganje v forum ?%s?.',
	'UPLOAD_DIR'	=> 'Direktorij za shranjevanje naloženih datotek',
	'UPLOAD_DIR_EXPLAIN'	=> 'Direktorij, v katerem se shranjujejo priponke. Opomba: ob spremembi direktorija moraš stare priponke ročno prenesti v nov direktorij.',
	'UPLOAD_ICON'	=> 'Ikona za nalaganje',
	'UPLOAD_NOT_DIR'	=> 'Izbrana lokacija ni direktorij.',
));

?>