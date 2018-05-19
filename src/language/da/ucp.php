<?php
/**
*
* ucp [Danish]
*
* @package language
* @version Id: ucp.php 10138 2009-09-11 14:38:23Z Kellanved $  
* @version $Id: ucp.php,v 1.31 2009/09/13 13:46:35 jansk Exp $
* @source file is copyright (c) 2005 phpBB Group,
* @modified and translated by Olympus DK Team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
*
* This file is part of the Danish language package for phpBB 3.0.x.
* Copyright (c) 2006, 2007, 2008 Olympus DK Team
*
* The Danish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Danish language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>.
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Når du tilmelder dig "%1$s" (i det følgende "vi", "os", "vores", "%1$s", "%2$s"), indvilliger du i at være retsgyldigt bundet af de følgende betingelser. Vær venlig ikke at tilmelde dig og/eller bruge "%1$s", hvis du ikke indvilliger i at være retsgyldigt bundet af alle de følgende betingelser. Vi kan ændre disse til enhver tid, og vi vil gøre vort yderste for at informere dig, alligevel vil det være fornuftigt, at du selv gennemgår disse betingelser regelmæssigt, da din fortsatte brug af "%1$s" efter ændringer af betingelserne betyder, at du indvilliger at være retgyldigt bundet af betingelserne efter de er opdateret og/eller skærpet.<br />
	<br />
	Vort board er baseret på phpBB (i det følgende "de", "dem", "deres", "phpBB software", "www.phpbb.com", "phpBB Group", "phpBB Teams") hvilket er en bulletin board løsning frigivet under "<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>" (i det følgende "GPL") og kan downloades fra <a href="http://www.phpbb.com/">www.phpbb.com</a>. phpBB softwaren giver mulighed for internetbaserede debatter, og GPL\'en afskærer dem fra indflydelse på, hvad vi tillader og/eller afviser som tilladeligt indhold og/eller tilladelig adfærd. For yderligere information om phpBB, se venligst: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Du indvilliger i ikke at indsende nogen form for fornærmende, uanstændigt, vulgært, bagtalende, hadefuldt, truende eller sexuelt orienteret materiale eller indsende andet materiale, som er i strid lovgivningen, det være sig i dit eget land, landet hvor "%1$s"  er hostet eller international lovgivning. Gør du dette, kan dette medføre, at du øjeblikkeligt og permanent bliver udelukket, med meddelelse herom til din Internet udbyder, hvis det vurderes påkrævet af os. IP-adresserne for alle indlæg logges for at give mulighed for at håndhæve disse betingelser. Du indvilliger i at "%1$s" har ret til at fjerne, ændre, flytte eller låse enhvert emne til enhver tid, såfremt vi finder dette passende. Som bruger indvilliger du i at al information du har skrevet, bliver lagret i en database. Selvom denne information ikke vil blive videregivet til tredjemand uden dit samtykke, vil hverken "%1$s" eller phpBB blive holdt ansvarlig for ethvert hackingforsøg, som kan medføre at dataene bliver kompromitteret.
	',

	'PRIVACY_POLICY'		=> 'Denne praksis forklarer detaljeret, hvordan "%1$s" (i det følgende "vi", "os", "vores", "%1$s", "%2$s") og phpBB (i det følgende "de", "dem", "deres", "phpBB software", "www.phpbb.com", "phpBB Group", "phpBB Teams") bruger enhver information indsamlet under enhver session under din brug (i det følgende "din information").<br />
	<br />
	Din information indsamles på to måder. For det første vil browsing på "%1$s" få phpBB-softwaren til at danne et antal cookies, som er små tekstfiler, der downloades til din computers "midlertidige internetfiler"-mappe. De første to cookies indholder blot en brugeridentitet (i det følgende "bruger-id") og et anonymt session-ID (i det følgende "session-ID"), som automatisk tildeles dig af phpBB softwaren. En tredje cookie vil blive dannet i det øjeblik du har læst et indlæg i "%1$s" og bliver brugt til at registrere, hvilke indlæg der er blevet læst af dig, som derved forbedrer din brugeroplevelse.<br />
	<br />
	Vi danner også cookies eksternt i forhold til phpBB-softwaren under browsing af "%1$s", skønt disse er udenfor rammerne af dette dokument, der alene har til hensigt at dække sider dannet med phpBB-softwaren. Den anden måde hvorpå vi indsamler din information er via hvad du indsender til os. Dette kan være, men er ikke begrænset til: at skrive indlæg som en anonym bruger (i det følgende "anonyme indlæg"), tilmelding på "%1$s" (i det følgende "din konto") og indlæg du har skrevet efter tilmeldingen og mens du er logget ind (i det følgende "dine indlæg").<br />
	<br />
	Din konto vil som minimum indeholde et unikt identificerbart navn (i det følgende "dit brugernavn"), et personligt kodeord til brug for når du skal logge ind på din konto (i det følgende "dit kodeord") og en personlig, gyldig emailadresse (i det følgende "din emailadresse"). Din kontoinformation på "%1$s" er beskyttet af databeskyttelseslove i det land hvor vi er hostet. Enhver information udover dit brugernavn, dit kodeord og din emailadresse krævet af "%1$s" under tilmeldingssproceduren, er - afhængig af "%1$s"\'s valg - enten obligatorisk eller valgfrit. Under alle omstændigheder kan du selv vælge, hvilke dele af din kontoinformation, der skal vises offentligt. Derudover har du muligheden for for din konto, at til- eller fravælge automatisk genererede emails fra phpBB-softwaren.<br />
	<br />
	Dit kodeord er krypteret (et etvejs digitalt fingeraftryk), så det er sikret. Dog anbefales det, at du ikke genbruger det samme kodeord på et antal forskellige hjemmesider. Dit kodeord er dit værktøj for at få adgang til din konto på "%1$s", så pas venligst godt på det. Under ingen omstændigheder vil nogen tilknyttet "%1$s", phpBB eller anden tredjepart, legalt bede dig om dit kodeord. Skulle du have glemt kodeordet til din konto, kan du bruge "Jeg har glemt mit kodeord"-funktionen, som er stillet til rådighed af phpBB-softwaren. Denne procedure vil bede dig om at indsende dit brugernavn og din emailadresse, hvorefter phpBB-softwaren vil generere et nyt kodeord til at få adgang til din konto.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Din konto er nu aktiveret. Tak for din tilmelding.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Kontoen er nu aktiveret.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Din konto er nu genaktiveret.',
	'ACCOUNT_ADDED'					=> 'Tak for din tilmelding, din konto er oprettet. Du kan nu logge ind med dit brugernavn og din adgangskode.',
	'ACCOUNT_COPPA'					=> 'Din konto er oprettet, men skal godkendes. Vær venlig at se din email for yderligere information.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Din konto er blevet opdateret. Boardet kræver genaktivering af kontoen når du ændrer din emailadresse. Der er derfor fremsendt en aktiveringsnøgle til den emailadresse du ændrede til. Læs venligst denne email for yderligere information.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Din konto er blevet opdateret. Boardet kræver at din konto genaktiveres af en administrator, når du ændrer din emailadresse. Der er derfor fremsendt en email til disse, og du vil blive informeret når din konto er aktiv igen.',
	'ACCOUNT_INACTIVE'				=> 'Din konto er oprettet. Du skal selv aktivere kontoen med en aktiveringsnøgle. Nøglen er netop afsendt til den emailadresse, du angav ved tilmeldingen. Læs venligst denne email for yderligere information.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Din konto er oprettet. Kontoen skal aktiveres af boardadministrator, som nu er adviseret via email. Når din konto er aktiveret, får du besked via email.',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktiveringsemailen er blevet sendt til din emailadresse.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Aktiveringsemailen er blevet sendt til administratorernes emailadresser.',
	'ADD'							=> 'Tilføj',
	'ADD_BCC'						=> 'Tilføj [BCC]',
	'ADD_FOES'						=> 'Tilføj nye ignorerede brugere',
	'ADD_FOES_EXPLAIN'				=> 'Du kan tilføje flere brugere, hver på en linie for sig.',
	'ADD_FOLDER'					=> 'Tilføj mappe',
	'ADD_FRIENDS'					=> 'Tilføj nye venner',
	'ADD_FRIENDS_EXPLAIN'			=> 'Du kan tilføje flere brugere, hver på en linie for sig.',
	'ADD_NEW_RULE'					=> 'Tilføj ny regel',
	'ADD_RULE'						=> 'Tilføj regel',
	'ADD_TO'						=> 'Tilføj [Til]',
	'ADD_USERS_UCP_EXPLAIN'	=> 'Her kan du tilføje nye brugere til gruppen. Du har mulighed for at vælge om gruppen skal være brugeres fremtidige standardgruppe. Angiv venligst hvert brugernavn på en ny linie.',
	'ADMIN_EMAIL'					=> 'Jeg ønsker at modtage masse-emails afsendt fra administratorer',
	'AGREE'							=> 'Jeg er enig i disse betingelser',
	'ALLOW_PM'						=> 'Brugere må sende mig private beskeder',
	'ALLOW_PM_EXPLAIN'				=> 'Bemærk at administratorer og redaktører altid vil kunne sende dig beskeder.',
	'ALREADY_ACTIVATED'				=> 'Du har allerede aktiveret din konto.',
	'ATTACHMENTS_EXPLAIN'			=> 'Du har vedhæftet disse filer i indlæg på boardet.',
	'ATTACHMENTS_DELETED'			=> 'De vedhæftede filer er blevet slettet.',
	'ATTACHMENT_DELETED'			=> 'Den vedhæftede fil er blevet slettet.',
	'AVATAR_CATEGORY'				=> 'Kategori',
	'AVATAR_EXPLAIN'				=> 'Tilladte maksimum dimensioner; bredde: %1$d pixels, højde: %2$d pixels, filstørrelse: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Muligheden for at anvende avatars er deaktiveret.',
	'AVATAR_GALLERY'				=> 'Lokalt galleri',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Kunne ikke uploade avatar til %s.',
	'AVATAR_NOT_ALLOWED'	=> 'Din avatar vises ikke, da brug af avatars er blevet deaktiveret.',
	'AVATAR_PAGE'					=> 'Side',
	'AVATAR_TYPE_NOT_ALLOWED'	=> 'Din nuværende avatar vises ikke, da denne type ikke er tilladt.', 

	'BACK_TO_DRAFTS'			=> 'Tilbage til gemte kladder',
	'BACK_TO_LOGIN'				=> 'Tilbage til loginskærmbillede',
	'BIRTHDAY'					=> 'Fødselsdag',
	'BIRTHDAY_EXPLAIN'			=> 'Indstilling af år vil vise din alder når det er din fødselsdag.',
	'BOARD_DATE_FORMAT'			=> 'Mit datoformat',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Den anvendte syntaks er identisk med PHP <a href="http://www.php.net/date">date()</a>-funktionen.',
	'BOARD_DST'					=> 'Sommertid/<abbr title="Daylight Saving Time">DST</abbr> er slået til',
	'BOARD_LANGUAGE'			=> 'Mit sprog',
	'BOARD_STYLE'				=> 'Min boardtypografi',
	'BOARD_TIMEZONE'			=> 'Min tidszone',
	'BOOKMARKS'					=> 'Bogmærker',
	'BOOKMARKS_EXPLAIN'			=> 'Du kan bogmærke emner for fremtidig reference. Vælg checkboksen for et hvilket som helst bogmærke du ønsker at slette, tryk derefter på <em>Fjern markerede bogmærker</em> knappen.',
	'BOOKMARKS_DISABLED'		=> 'Bogmærker er slået fra på dette board.',
	'BOOKMARKS_REMOVED'			=> 'Bogmærker fjernet.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Du kan ikke længere redigere eller slette denne besked.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Beskeder kan ikke flyttes til den mappe du ønsker at fjerne.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Beskeder kan ikke flyttes fra udbakken.',
	'CANNOT_RENAME_FOLDER'		=> 'Denne mappe kan ikke omdøbes.',
	'CANNOT_REMOVE_FOLDER'		=> 'Denne mappe kan ikke fjernes.',
	'CHANGE_DEFAULT_GROUP'		=> 'Ændre standardgruppe',
	'CHANGE_PASSWORD'			=> 'Ændre kodeord',
	'CLICK_RETURN_FOLDER'		=> '%1$sTilbage til din "%3$s" mappe%2$s',
	'CONFIRMATION'				=> 'Bekræftelse på tilmelding',
	'CONFIRM_CHANGES'			=> 'Bekræft ændringer',	
	'CONFIRM_EMAIL'				=> 'Bekræft emailadresse',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Du behøver kun angive denne, hvis du ændrer din emailadresse.',
	'CONFIRM_EXPLAIN'			=> 'For at hindre automatiske spamtilmeldinger på boardet, bedes du indtaste bekræftelseskoden vist i nedenstående billede. Hvis du er synshandicappet eller på anden måde ikke kan læse koden, bedes du venligst kontakte %sboardadministratoren%s.',
	'VC_REFRESH' => 'Ny bekræftelsekode',
	'VC_REFRESH_EXPLAIN' => 'Kan du ikke læse koden, kan du bede om en ny ved at klikke på knappen.',

	'CONFIRM_PASSWORD'			=> 'Bekræft kodeord',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Du behøver kun bekræfte dit kodeord, hvis du ændrede det ovenfor.',
	'COPPA_BIRTHDAY'			=> 'For at fortsætte tilmeldingsproceduren bedes du venligst fortælle os hvornår du er født.',
	'COPPA_COMPLIANCE'			=> 'COPPA overholdelse',
	'COPPA_EXPLAIN'				=> 'Når du klikker på send oprettes din konto, den aktiveres imidlertid ikke før en forældre eller værge godkender din tilmelding. Du får pr. email tilsendt en kopi af den nødvendige formular, med information om hvor den skal sendes hen.',
	'CREATE_FOLDER'				=> 'Tilføjer mappe...',
	'CURRENT_IMAGE'				=> 'Nuværende avatar',
	'CURRENT_PASSWORD'			=> 'Nuværende kodeord',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Du skal bekræfte dit <strong>nuværende</strong> kodeord, når du ændrer brugernavn, emailadresse eller kodeord.',
	'CUR_PASSWORD_ERROR'		=> 'Det nuværende kodeord som du har indtastet er forkert.',
	'CUSTOM_DATEFORMAT'			=> 'Valgfri...',

	'DEFAULT_ACTION'			=> 'Standardhandling',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Denne handling udføres hvis ingen af de ovennævnte er anvendelige.',
	'DEFAULT_ADD_SIG'			=> 'Tilføj min signatur som standard',
	'DEFAULT_BBCODE'			=> 'BBkode aktiveret som standard',
	'DEFAULT_NOTIFY'			=> 'Adviser mig ved besvarelser',
	'DEFAULT_SMILIES'			=> 'Smilies aktiveret som standard',
	'DEFINED_RULES'				=> 'Definerede regler',
	'DELETED_TOPIC'				=> 'Emne er blevet flyttet',
	'DELETE_ATTACHMENT'			=> 'Slet vedhæftet fil',
	'DELETE_ATTACHMENTS'		=> 'Slet vedhæftede filer',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Er du sikker på at du slette denne vedhæftede fil?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Er du sikker på at du vil slette disse vedhæftede filer?',
	'DELETE_AVATAR'				=> 'Slet avatar',
	'DELETE_COOKIES_CONFIRM'	=> 'Er du sikker på at du vil slette alle cookies sat af dette board?',
	'DELETE_MARKED_PM'			=> 'Slet markerede beskeder',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Er du sikker på at du vil slette alle markerede beskeder?',
	'DELETE_OLDEST_MESSAGES'	=> 'Slet ældste beskeder',
	'DELETE_MESSAGE'			=> 'Slet besked',
	'DELETE_MESSAGE_CONFIRM'	=> 'Er du sikker på at vil slette denne private besked?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Slet alle beskeder i fjernet mappe',
	'DELETE_RULE'				=> 'Slet regel',
	'DELETE_RULE_CONFIRM'		=> 'Er du sikker på at du vil slette denne regel?',
	'DEMOTE_SELECTED'			=> 'Degrader valgte',
	'DISABLE_CENSORS'			=> 'Slå ordcensur til',
	'DISPLAY_GALLERY'			=> 'Vis galleri',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Det indtastede emaildomæne har ingen gyldig MX-record.',
	'DOWNLOADS'					=> 'Downloads',
	'DRAFTS_DELETED'			=> 'Alle valgte kladder blev slettet.',
	'DRAFTS_EXPLAIN'			=> 'Her kan du se, ændre og slette dine gemte kladder.',
	'DRAFT_UPDATED'				=> 'Kladde opdateret.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Her er du i stand til at redigere din kladde. Kladder indeholder ikke informationer om vedhæftede filer og afstemninger.',
	'EMAIL_BANNED_EMAIL'		=> 'Den indtastede emailadresse er det ikke tilladt at anvende.',
	'EMAIL_INVALID_EMAIL'		=> 'Den indtastede emailadresse er ugyldig.',
	'EMAIL_REMIND'				=> 'Emailadressen tilknyttet din brugerkonto. Hvis du ikke har ændret denne i brugerkontrolpanelet, er det den samme emailadresse som den du tilmeldte dig med.',
	'EMAIL_TAKEN_EMAIL'			=> 'Den indtastede emailadresse er allerede i brug.',
	'EMPTY_DRAFT'				=> 'Du skal indtaste en besked for at kunne sende dine ændringer.',
	'EMPTY_DRAFT_TITLE'			=> 'Du skal indtaste en kladdetitel',
	'EXPORT_AS_XML'				=> 'Eksporter som XML',
	'EXPORT_AS_CSV'				=> 'Eksporter som CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Eksporter som CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Eksporter som TXT',
	'EXPORT_AS_MSG'				=> 'Eksporter som MSG',
	'EXPORT_FOLDER'				=> 'Udfør',

	'FIELD_REQUIRED'			=> 'Feltet "%s" skal udfyldes.',
	'FIELD_TOO_SHORT'			=> 'Feltet "%1$s" er for kort, et minimum på %2$d tegn er påkrævet.',
	'FIELD_TOO_LONG'			=> 'Feltet "%1$s" er for langt, et maksimum på %2$d tegn er tilladt.',
	'FIELD_TOO_SMALL'			=> 'Værdien af "%1$s" er for lille, en minimumværdi på %2$d er påkrævet.',
	'FIELD_TOO_LARGE'			=> 'Værdien af "%1$s" er for stor, en maksimumværdi på %2$d er tilladt.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Feltet "%s" indeholder ugyldige tegn, alene tal er tilladt.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Feltet "%s" indeholder ugyldige tegn, alene alfanumeriske tegn er tilladt.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Feltet "%s" indeholder ugyldige tegn, alene alfanumeriske tegn, mellemrum eller -, +, _, [ og ] er tilladt.',
	'FIELD_INVALID_DATE'		=> 'Feltet "%s" indeholder en ugyldig dato.',

	'FOE_MESSAGE'				=> 'Fra ignoreret bruger',
	'FOES_EXPLAIN'				=> 'Ignorerede brugere er brugere som vil blive ignoreret som standard. Indlæg fra disse brugere vil ikke blive vist i fuld udstrækning. Personlige beskeder fra ignorerede brugere er imidlertid stadig tilladt. Bemærk venligst at du kan ikke ignorere redaktører og administratorer.',
	'FOES_UPDATED'				=> 'Din ignorerliste blev opdateret.',
	'FOLDER_ADDED'				=> 'Mappe tilføjet.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d af %2$d mulige beskeder gemt',
	'FOLDER_NAME_EMPTY'			=> 'Du skal angive et navn til denne mappe.', 
	'FOLDER_NAME_EXIST'			=> 'Mappen <strong>%s</strong> eksisterer allerede.',
	'FOLDER_OPTIONS'			=> 'Mappeindstillinger',
	'FOLDER_RENAMED'			=> 'Mappe omdøbt.',
	'FOLDER_REMOVED'			=> 'Mappe fjernet.',
	'FOLDER_STATUS_MSG'			=> 'Mappen er %1$d%% fuld (%2$d af %3$d mulige beskeder gemt).',
	'FORWARD_PM'				=> 'Videresend PB',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Før du fortsætter med at browse boardet er du nødt til at ændre dit kodeord.',
	'FRIEND_MESSAGE'			=> 'Fra ven',
	'FRIENDS'					=> 'Venner',
	'FRIENDS_EXPLAIN'			=> 'Funktionen "venner" giver dig hurtig adgang til brugere du ofte kommunikerer med. Hvis skabelonen understøtter det, fremhæves alle indlæg skrevet af dine venner.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Din venneliste er opdateret med succes.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Indstilling for fuld mappe ændret.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Oprindelig besked --------',
	'FWD_SUBJECT'				=> 'Vedrørende: %s',
	'FWD_DATE'					=> 'Dato: %s',
	'FWD_FROM'					=> 'Fra: %s',
	'FWD_TO'					=> 'Til: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Global bekendtgørelse',

	'HIDE_ONLINE'				=> 'Skjul min onlinestatus',
	'HIDE_ONLINE_EXPLAIN'		=> 'Ændres indstillingen, bliver din nye onlinestatus først effektiv ved næste besøg på boardet.',
	'HOLD_NEW_MESSAGES'			=> 'Accepter ikke nye beskeder (Nye beskeder vil blive holdt tilbage indtil tilstrækkelig plads er disponibel)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nye beskeder vil blive holdt tilbage',

	'IF_FOLDER_FULL'			=> 'Hvis mappen er fuld',
	'IMPORTANT_NEWS'			=> 'Vigtige bekendtgørelser',
	'INVALID_USER_BIRTHDAY'	=> 'Den angivne fødselsdag er ikke en gyldig dato.',
	'INVALID_CHARS_USERNAME'	=> 'Brugernavnet indeholder ikke tilladte tegn.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Kodeordet indeholder ikke de krævede tegn.',
	'ITEMS_REQUIRED'			=> 'Felter markeret med * skal udfyldes.',

	'JOIN_SELECTED'				=> 'Tilslut valgte',

	'LANGUAGE'					=> 'Sprog',
	'LINK_REMOTE_AVATAR'		=> 'Link off-site',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Indtast URL\'en for stedet der indeholder den avatar du ønsker at linke til.',
	'LINK_REMOTE_SIZE'			=> 'Avatardimensioner',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Angiv bredden og højden af avataren, lad være tom for at forsøge automatisk verifikation.',
	'LOGIN_EXPLAIN_UCP'			=> 'Log venligst ind for adgang til brugerkontrolpanelet.',
	'LOGIN_REDIRECT'			=> 'Du er blevet logget ind.',
	'LOGOUT_FAILED'				=> 'Du blev ikke logget ud, da anmodningen ikke matchede din session. Kontakt venligst boardadministratoren hvis disse problemer fortsætter.',
	'LOGOUT_REDIRECT'			=> 'Du er blevet logget ud.',

	'MARK_IMPORTANT'			=> 'Marker/afmarker som vigtig',
	'MARKED_MESSAGE'			=> 'Vigtig',
	'MAX_FOLDER_REACHED'		=> 'Maksimalt antal tilladte brugerdefinerede mapper nået.',
	'MESSAGE_BY_AUTHOR'			=> 'af',
	'MESSAGE_COLOURS'			=> 'Farveforklaring',
	'MESSAGE_DELETED'			=> 'Besked slettet.',
	'MESSAGE_HISTORY'			=> 'Historik for besked',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Denne besked er blevet fjernet af dens forfatter før den blev leveret.',
	'MESSAGE_SENT_ON'			=> 'den',
	'MESSAGE_STORED'			=> 'Denne besked er blevet sendt.',
	'MESSAGE_TO'				=> 'Til',
	'MESSAGES_DELETED'			=> 'Besked slettet',
	'MOVE_DELETED_MESSAGES_TO'	=> 'Flyt beskeder fra fjernet mappe til',
	'MOVE_DOWN'					=> 'Flyt ned',
	'MOVE_MARKED_TO_FOLDER'		=> 'Flyt markerede til %s',
	'MOVE_PM_ERROR'				=> 'En fejl opstod under flytning af beskeden til den nye mappe, kun %1d fra %2d beskeder blev flyttet.',
	'MOVE_TO_FOLDER'			=> 'Flyt til mappe',
	'MOVE_UP'					=> 'Flyt op',

	'NEW_EMAIL_ERROR'			=> 'Den indtastede emailadresse passer ikke.',
	'NEW_FOLDER_NAME'			=> 'Nyt mappenavn',
	'NEW_PASSWORD'				=> 'Nyt kodeord',
	'NEW_PASSWORD_ERROR'		=> 'Kodeordene du indtastede passer ikke.',
	'NOTIFY_METHOD'				=> 'Adviseringsmetode',
	'NOTIFY_METHOD_BOTH'		=> 'Begge',
	'NOTIFY_METHOD_EMAIL'		=> 'Kun email',
	'NOTIFY_METHOD_EXPLAIN'		=> 'Metode for forsendelse af beskeder sendt via dette board.',
	'NOTIFY_METHOD_IM'			=> 'Kun Jabber',
	'NOTIFY_ON_PM'				=> 'Advisering ved nye private beskeder',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Du kan ikke tilføje den anonyme bruger til din venneliste.',
	'NOT_ADDED_FRIENDS_BOTS'	=> 'Du kan ikke tilføje botter til din venneliste.',
	'NOT_ADDED_FRIENDS_FOES'	=> 'Du kan ikke tilføje brugere til din venneliste, som er på din ignorerliste.',
	'NOT_ADDED_FRIENDS_SELF'	=> 'Du kan ikke tilføje dig selv til din venneliste.',
	'NOT_ADDED_FOES_MOD_ADMIN'	=> 'Du kan ikke tilføje administratorer eller redaktører til din ignorerliste.',
	'NOT_ADDED_FOES_ANONYMOUS'	=> 'Du kan ikke tilføje den anonyme bruger til din ignorerliste.',
	'NOT_ADDED_FOES_BOTS'		=> 'Du kan ikke tilføje botter til din ignorerliste.',
	'NOT_ADDED_FOES_FRIENDS'	=> 'Du kan ikke tilføje brugere til din ignorerliste som er på din venneliste.',
	'NOT_ADDED_FOES_SELF'		=> 'Du kan ikke tilføje dig selv til din ignorerliste.',
	'NOT_AGREE'					=> 'Jeg accepterer ikke disse betingelser',
	'NOT_ENOUGH_SPACE_FOLDER'	=> 'Modtagemappen "%s" synes at være fuld. Den anmodede handling er ikke gennemført.',
	'NOT_MOVED_MESSAGE'			=> 'Du har i øjeblikket en privat besked på hold på grund af fuld mappe.',
	'NOT_MOVED_MESSAGES'		=> 'Du har i øjeblikket %d private beskeder på hold på grund af fuld mappe.',
	'NO_ACTION_MODE'			=> 'Ingen handling for beskeden angivet.',
	'NO_AUTHOR'					=> 'Ingen forfatter defineret for denne besked',
	'NO_AVATAR_CATEGORY'		=> 'Ingen',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Du har ikke tilladelse til at slette private beskeder.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Du har ikke tilladelse til at redigere private beskeder.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Du har ikke tilladelse til at videresende private beskeder.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Du har ikke tilladelse til at sende private beskeder til grupper.',
	'NO_AUTH_PASSWORD_REMINDER'	=> 'Du har ikke tilladelse til at rekvirere et nyt kodeord.',
	'NO_AUTH_READ_HOLD_MESSAGE'	=> 'Du har ikke tilladelse til at læse tilbageholdte private beskeder.',
	'NO_AUTH_READ_MESSAGE'			=> 'Du har ikke tilladelse til at læse private beskeder.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Du er ikke i stand til at læse denne besked fordi den blev fjernet af forfatteren.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Du har ikke tilladelse til at sende private beskeder.',
	'NO_AUTH_SIGNATURE'				=> 'Du har ikke tilladelse til at definere en signatur.',

	'NO_BCC_RECIPIENT'			=> 'Ingen',
	'NO_BOOKMARKS'				=> 'Du har ingen bogmærker.',
	'NO_BOOKMARKS_SELECTED'		=> 'Du har ingen bogmærker valgt.',
	'NO_EDIT_READ_MESSAGE'		=> 'Den private besked er blevet læst, den kan derfor ikke redigeres.',
	'NO_EMAIL_USER'				=> 'Angivne emailadresse/brugernavn kunne ikke findes.',
	'NO_FOES'					=> 'Du har ingen ignorerede brugere på din liste.',
	'NO_FRIENDS'				=> 'Du har ingen venner på din liste.',
	'NO_FRIENDS_OFFLINE'		=> 'Ingen venner offline',
	'NO_FRIENDS_ONLINE'			=> 'Ingen venner online',
	'NO_GROUP_SELECTED'			=> 'Ingen gruppe angivet.',
	'NO_IMPORTANT_NEWS'			=> 'Ingen vigtige bekendtgørelser til stede.',
	'NO_MESSAGE'				=> 'Privat besked kunne ikke findes.',
	'NO_NEW_FOLDER_NAME'		=> 'Du skal indtaste et mappenavn.',
	'NO_NEWER_PM'				=> 'Ingen nyere beskeder.',
	'NO_OLDER_PM'				=> 'Ingen ældre beskeder.',
	'NO_RECIPIENT'				=> 'Ingen modtager defineret.',
	'NO_PASSWORD_SUPPLIED'		=> 'Du kan ikke logge ind uden et kodeord.',
	'NO_RULES_DEFINED'			=> 'Ingen regler defineret.',
	'NO_SAVED_DRAFTS'			=> 'Ingen gemte kladder.',
	'NO_TO_RECIPIENT'			=> 'Ingen',
	'NO_WATCHED_FORUMS'			=> 'Du overvåger ingen fora.',
	'NO_WATCHED_SELECTED'		=> 'Du har ikke valgt nogle overvågede emner eller fora.',
	'NO_WATCHED_TOPICS'			=> 'Du overvåger ingen emner.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Kodeordet skal være mellem %1$d og %2$d tegn langt. Og det skal indeholde både tal og store og små bogstaver.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Skal være mellem %1$d og %2$d tegn.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Kodeordet skal være mellem %1$d og %2$d tegn langt. Og det skal indeholde både store og små bogstaver.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Kodeordet skal være mellem %1$d og %2$d tegn langt. Og det skal indeholde både tal, specialtegn og store og små bogstaver.',
	'PASSWORD'					=> 'Kodeord',
	'PASSWORD_ACTIVATED'		=> 'Dit nye kodeord er blevet aktiveret.',
	'PASSWORD_UPDATED'			=> 'Der er nu afsendt et nyt kodeord til den emailadresse du er tilmeldt med.',
	'PERMISSIONS_RESTORED'		=> 'Oprindelige tilladelser er genoprettet.',
	'PERMISSIONS_TRANSFERRED'	=> 'Tilladelser overført fra <strong>%s</strong>, du er nu i stand til browse boardet med brugerens tilladelser.<br />Bemærk venligst at administratortilladelser ikke blev overført. Du kan vende tilbage til dit sæt af tilladelser på ethvert tidspunkt.',
	'PM_DISABLED'				=> 'Private beskeder er slået fra på dette board.',
	'PM_FROM'					=> 'Fra',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Denne besked blev sendt af en ikke længere tilmeldt bruger.',
	'PM_ICON'					=> 'PB-ikon',
	'PM_INBOX'					=> 'Indbakke',
	'PM_NO_USERS'				=> 'De valgte brugere eksisterer ikke og kunne derfor ikke tilføjes.',
	'PM_OUTBOX'					=> 'Udbakke',
	'PM_SENTBOX'				=> 'Sendte beskeder',
	'PM_SUBJECT'				=> 'Beskedens overskrift',
	'PM_TO'						=> 'Send til',
	'PM_USERS_REMOVED_NO_PM'	=> 'Nogle brugere kunne ikke tilføjes, da de har fravalgt muligheden for at modtage private beskeder.',
	'POPUP_ON_PM'				=> 'Popupvindue ved nye private beskeder',
	'POST_EDIT_PM'				=> 'Rediger besked',
	'POST_FORWARD_PM'			=> 'Videresend besked',
	'POST_NEW_PM'				=> 'Skriv besked',
	'POST_PM_LOCKED'			=> 'Private beskeder er låst.',
	'POST_PM_POST'				=> 'Citer indlæg',
	'POST_QUOTE_PM'				=> 'Citer besked',
	'POST_REPLY_PM'				=> 'Besvar besked',
	'PRINT_PM'					=> 'Vis udskrift',
	'PREFERENCES_UPDATED'		=> 'Dine indstillinger er blevet opdateret.',
	'PROFILE_INFO_NOTICE'		=> 'Bemærk venligst at denne information kan være synlig for andre brugere. Vær påpasselig med at medtage personlige oplysninger. Ethvert felt markeret med et * skal udfyldes.',
	'PROFILE_UPDATED'			=> 'Din profil er blevet opdateret.',

	'RECIPIENT'					=> 'Modtager',
	'RECIPIENTS'				=> 'Modtagere',
	'REGISTRATION'				=> 'Tilmelding',
	'RELEASE_MESSAGES'			=> '%sFrigiv alle beskeder på hold%s... de vil blive gensorteret ind i den passende mappe hvis der er gjort tilstrækkelig plads hertil.',
	'REMOVE_ADDRESS'			=> 'Fjern adresse',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'Fjern valgte bogmærker',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Er du sikker på at du ønsker at slette alle valgte bogmærker?',
	'REMOVE_BOOKMARK_MARKED'	=> 'Fjern markerede bogmærker',
	'REMOVE_FOLDER'				=> 'Fjern mappe',
	'REMOVE_FOLDER_CONFIRM'		=> 'Er du sikker på at du ønsker at fjerne denne mappe?',
	'RENAME'					=> 'Omdøb',
	'RENAME_FOLDER'				=> 'Omdøb mappe',
	'REPLIED_MESSAGE'			=> 'Besvaret',
	'REPLY_TO_ALL'				=> 'Besvar afsender og alle øvrige modtagere.',
	'REPORT_PM'					=> 'Rapporter privat besked',
	'RESIGN_SELECTED'			=> 'Fratræd valgte',
	'RETURN_FOLDER'				=> '%1$sGå tilbage til foregående mappe%2$s',
	'RETURN_UCP'				=> '%sGå tilbage til brugerkontrolpanelet%s',
	'RULE_ADDED'				=> 'Regel tilføjet.',
	'RULE_ALREADY_DEFINED'		=> 'Denne regel er defineret tidligere.',
	'RULE_DELETED'				=> 'Regel fjernet.',
	'RULE_NOT_DEFINED'			=> 'Regel ikke korrekt angivet.',
	'RULE_REMOVED_MESSAGE'		=> 'En privat besked er blevet fjernet på grund af filtre for private beskeder.',
	'RULE_REMOVED_MESSAGES'		=> '%d private beskeder er blevet fjernet på grund af filtre for private beskeder.',

	'SAME_PASSWORD_ERROR'		=> 'Det nye kodeord du indtastede er det samme som dit nuværende kodeord.',
	'SEARCH_YOUR_POSTS'			=> 'Vis dine indlæg',
	'SEND_PASSWORD'				=> 'Send kodeord',
	'SENT_AT'					=> 'Sendt',	// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Brugere kan kontakte mig pr. email',
	'SIGNATURE_EXPLAIN'			=> 'Her kan du skrive (og ændre i) din signatur, som ikke må være længere end %d tegn. Din signatur tilføjes automatisk som afslutning i alle de indlæg du skriver.',
	'SIGNATURE_PREVIEW'			=> 'Din signatur vil vises således i indlæg',
	'SIGNATURE_TOO_LONG'		=> 'Din signatur er for lang.',
	'SORT'						=> 'Sorter',
	'SORT_COMMENT'				=> 'Filkommentar',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Filtype',
	'SORT_FILENAME'				=> 'Filnavn',
	'SORT_POST_TIME'			=> 'Indlægstid',
	'SORT_SIZE'					=> 'Filstørrelse',

	'TIMEZONE'					=> 'Tidszone',
	'TO'						=> 'Til',
	'TOO_MANY_RECIPIENTS'		=> 'Du forsøgte at sende en privat besked til for mange modtagere.',
	'TOO_MANY_REGISTERS'		=> 'Du har overskredet det maksimale antal tilmeldingsforsøg for denne session. Prøv venligst igen senere.',

	'UCP'						=> 'Brugerkontrolpanel',
	'UCP_ACTIVATE'				=> 'Aktiver konto',
	'UCP_ADMIN_ACTIVATE'		=> 'Bemærk venligst at du skal indtaste en gyldig emailadresse for at din konto kan aktiveres. Administratoren vil gennemgå din konto og hvis denne godkendes, vil du modtage en email på den adresse du har angivet.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Vedhæftede filer',
	'UCP_COPPA_BEFORE'			=> 'Før %s',
	'UCP_COPPA_ON_AFTER'		=> 'På eller senere %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Bemærk venligst at du skal indtaste en gyldig emailadresse for at din konto kan aktiveres. Der afsendes et kontoaktiveringslink med email til den adresse du angiver.',
	'UCP_ICQ'					=> 'ICQ-nummer',
	'UCP_JABBER'				=> 'Jabberadresse',

	'UCP_MAIN'					=> 'Oversigt',
	'UCP_MAIN_ATTACHMENTS'		=> 'Vedhæftede filer',
	'UCP_MAIN_BOOKMARKS'		=> 'Bogmærker',
	'UCP_MAIN_DRAFTS'			=> 'Gemte kladder',
	'UCP_MAIN_FRONT'			=> 'Forside',
	'UCP_MAIN_SUBSCRIBED'		=> 'Overvågede fora og emner',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Du har ikke vedhæftet filer.',

	'UCP_PREFS'					=> 'Boardindstillinger',
	'UCP_PREFS_PERSONAL'		=> 'Globale indstillinger',
	'UCP_PREFS_POST'			=> 'Skriveindstillinger',
	'UCP_PREFS_VIEW'			=> 'Visningsindstillinger',

	'UCP_PM'					=> 'Private beskeder',
	'UCP_PM_COMPOSE'			=> 'Opret besked',
	'UCP_PM_DRAFTS'				=> 'Kladder',
	'UCP_PM_OPTIONS'			=> 'Regler, mapper &amp; indstillinger',
	'UCP_PM_POPUP'				=> 'Private beskeder',
	'UCP_PM_POPUP_TITLE'		=> 'Popup for private beskeder',
	'UCP_PM_UNREAD'				=> 'Ikke læste beskeder',
	'UCP_PM_VIEW'				=> 'Vis beskeder',

	'UCP_PROFILE'				=> 'Profilindstillinger',
	'UCP_PROFILE_AVATAR'		=> 'Avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Konto',
	'UCP_PROFILE_SIGNATURE'		=> 'Signatur',

	'UCP_USERGROUPS'			=> 'Brugergrupper',
	'UCP_USERGROUPS_MEMBER'		=> 'Medlemskaber',
	'UCP_USERGROUPS_MANAGE'		=> 'Administrer grupper',

	'UCP_REGISTER_DISABLE'			=> 'Oprettelse af ny konto er i øjeblikket ikke mulig.',
	'UCP_REMIND'					=> 'Send kodeord',
	'UCP_RESEND'					=> 'Send aktiveringsemail',
	'UCP_WELCOME'					=> 'Velkommen til brugerkontrolpanelet. Herfra kan du overvåge, se og opdatere din profil, indstillinger samt overvågede fora og emner. Du kan også sende private beskeder til andre brugere (hvis tilladt). Læs venligst enhver bekendtgørelse før du fortsætter.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Venner og ignorerede brugere',
	'UCP_ZEBRA_FOES'				=> 'Ignorerede brugere',
	'UCP_ZEBRA_FRIENDS'				=> 'Venner',
	'UNKNOWN_FOLDER'				=> 'Ukendt mappe',
	'UNWATCH_MARKED'				=> 'Stop overvågning af markeret',
	'UPLOAD_AVATAR_FILE'			=> 'Upload fra din maskine',
	'UPLOAD_AVATAR_URL'				=> 'Upload fra en URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Angiv URL\'en for den specifikke placering af det billede du vil anvende som din avatar. Billedet bliver herefter kopieret til denne side.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Brugernavn skal være mellem %1$d og %2$d tegn langt og brug kun alfanumeriske tegn.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Brugernavn skal være mellem %1$d og %2$d tegn langt og brug alfanumeriske tegn, mellemrum eller -, +, _, [ og ].',
	'USERNAME_ASCII_EXPLAIN'		=> 'Brugernavn skal være mellem %1$d og %2$d tegn langt og brug kun ASCII tegn, altså ingen special symboler.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Brugernavn skal være mellem %1$d og %2$d tegn langt og brug kun bogstaver og tal (alfanumeriske tegn).',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Brugernavn skal være mellem %1$d og %2$d tegn langt og brug alfanumeriske tegn, mellemrum eller -, +, _, [ og ].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Længde skal være mellem %1$d og %2$d tegn.',
	'USERNAME_TAKEN_USERNAME'		=> 'Det indtastede brugernavn er allerede i brug, vælg venligst et andet.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Det indtastede brugernavn er enten blevet udelukket eller indeholder ikke tilladte ord. Vælg venligst et andet.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Det indtastede brugernavn kunne enten ikke findes eller er en ikke aktiveret bruger.',

	'VIEW_AVATARS'				=> 'Vis avatars',
	'VIEW_EDIT'					=> 'Vis/Rediger',
	'VIEW_FLASH'				=> 'Vis Flash-animationer',
	'VIEW_IMAGES'				=> 'Vis billeder i indlæg',
	'VIEW_NEXT_HISTORY'			=> 'Næste PB i historik',
	'VIEW_NEXT_PM'				=> 'Næste PB',
	'VIEW_PM'					=> 'Vis besked',
	'VIEW_PM_INFO'				=> 'Beskedinformation',
	'VIEW_PM_MESSAGE'			=> '1 besked',
	'VIEW_PM_MESSAGES'			=> '%d beskeder',
	'VIEW_PREVIOUS_HISTORY'		=> 'Foregående PB i historik',
	'VIEW_PREVIOUS_PM'			=> 'Foregående PB',
	'VIEW_SIGS'					=> 'Vis signaturer',
	'VIEW_SMILIES'				=> 'Vis smilies som billeder',
	'VIEW_TOPICS_DAYS'			=> 'Vis emner fra foregående dage',
	'VIEW_TOPICS_DIR'			=> 'Vis sorteringnøgle for emner',
	'VIEW_TOPICS_KEY'			=> 'Vis emner sorteret efter',
	'VIEW_POSTS_DAYS'			=> 'Vis indlæg fra foregående dage',
	'VIEW_POSTS_DIR'			=> 'Vis sorteringnøgle for indlæg',
	'VIEW_POSTS_KEY'			=> 'Vis indlæg sorteret efter',

	'WATCHED_EXPLAIN'			=> 'Her listes de fora og emner du overvåger. Du bliver adviseret om nye indlæg i begge. Marker et forum eller emne for at stoppe overvågning, og klik herefter på <em>Stop overvågning af markeret</em>.',
	'WATCHED_FORUMS'			=> 'Overvågede fora',
	'WATCHED_TOPICS'			=> 'Overvågede emner',
	'WRONG_ACTIVATION'			=> 'Aktiveringsnøglen du anvendte passer ikke til nogen i databasen.',

	'YOUR_DETAILS'				=> 'Din aktivitet',
	'YOUR_FOES'					=> 'Dine ignorerede brugere',
	'YOUR_FOES_EXPLAIN'			=> 'Du kan fjerne brugere ved at markere disse og trykke på udfør.',
	'YOUR_FRIENDS'				=> 'Dine venner',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Du kan fjerne brugere ved at markere disse og trykke på udfør.',
	'YOUR_WARNINGS'				=> 'Dit antal advarsler',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Placer i mappe',
		'MARK_AS_READ'		=> 'Marker som læst',
		'MARK_AS_IMPORTANT'	=> 'Marker besked',
		'DELETE_MESSAGE'	=> 'Slet besked'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Vedrørende',
		'SENDER'	=> 'Afsender',
		'MESSAGE'	=> 'Besked',
		'STATUS'	=> 'Besked status',
		'TO'		=> 'Sendt til'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'er som',
		'IS_NOT_LIKE'	=> 'er ikke som',
		'IS'			=> 'er',
		'IS_NOT'		=> 'er ikke',
		'BEGINS_WITH'	=> 'begynder med',
		'ENDS_WITH'		=> 'ender med',
		'IS_FRIEND'		=> 'er ven',
		'IS_FOE'		=> 'er ignoreret bruger',
		'IS_USER'		=> 'er bruger',
		'IS_GROUP'		=> 'er i brugergruppe',
		'ANSWERED'		=> 'besvaret',
		'FORWARDED'		=> 'videresendt',
		'TO_GROUP'		=> 'til min standardbrugergruppe',
		'TO_ME'			=> 'til mig'
	),


	'GROUPS_EXPLAIN'		=> 'Som bruger på boardet bliver du automatisk medlem af standardgruppen "Tilmeldte brugere". Der kan være oprettet andre brugergrupper. Alle oprettede grupper er listet nedenfor, disse grupper kan have udvidede beføjelser og muligheder på boardet. Hvorvidt du har mulighed for at tilmelde dig en eller flere af disse grupper, fremgår af gruppeforklaringerne nedenfor. Er du medlem af flere grupper, kan du, hvis boardadministratoren har tilladt det, vælge en af disse som din standardgruppe. Dit brugernavn vil herefter blive vist med samme farve som din nye standardgruppe, og med gruppens eventuelle avatar og rang.',
	'GROUP_LEADER'		=> 'Ledelse',
	'GROUP_MEMBER'		=> 'Medlemskab',
	'GROUP_PENDING'		=> 'Afventende medlemskab',
	'GROUP_NONMEMBER'	=> 'Ikke-medlemskab',
	'GROUP_DETAILS'		=> 'Gruppeinformation',

	'NO_LEADER'		=> 'Ingen gruppeledelse',
	'NO_MEMBER'		=> 'Intet gruppemedlemskab',
	'NO_PENDING'	=> 'Ingen afventende gruppemedlemskaber',
	'NO_NONMEMBER'	=> 'Ingen ikke-medlemskaber',
));

?>