<?php
/**
*
* posting.php [Norwegian Bokmaal]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-12-06 - phpBB.no
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
	'VIEW_PRIVATE_MESSAGE'	=> '%sSe din innsendte private melding%s',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Angi et svaralternativ per linje. Du kan angi opp til <strong>%d</strong> alternativer. hvis du fjerner et alternativ, så vil alle tidligere avgitte stemmer bli fjernet.',
	'POST_APPROVAL_NOTIFY'	=> 'Du vil bli varslet når innlegget ditt har blitt godkjent.',
	'TOO_MANY_CHARS_POST'	=> 'Beskjeden inneholder %1$d tegn. Maksimalt antall tillatte tegn er %2$d.',
	'TOO_MANY_CHARS_SIG'	=> 'Signaturen inneholder %1$d tegn. Maksimalt antall tillatte tegn er %2$d.',
	'BBCODE_A_HELP'	=> 'Vedlegg inne i selve innlegget: [attachment=]filenavn.ext[/attachment]',
	'BBCODE_LISTITEM_HELP'	=> 'Element i liste: [*]tekst[/*]',
	'DRAFT_LOADED_PM'	=> 'Kladden er nå lastet inn i meldingsområdet, du kan dermed fullføre meldingen din.<br />Kladden vil bli slettet etter at du har sendt denne meldingen.',
	'FONT_COLOR_HIDE'	=> 'Skjul skriftfargepanel',
	'POLL_TITLE_TOO_LONG'	=> 'Avstemningstittelen kan maks inneholde 100 tegn.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Avstemningstittelen er for lang. For å gjøre den kortere kan du vurdere å fjerne noen av BBKodene eller smilene',
	'BBCODE_D_HELP'	=> 'Flash: [flash=bredde,høyde]http://url[/flash]  (alt+d)',
	'LOGIN_EXPLAIN_BUMP'	=> 'Du må logge inn for å bumpe emner i dette forumet.',
	'LOGIN_EXPLAIN_DELETE'	=> 'Du må logge inn for å slette innlegg i dette forumet.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'Du må logge inn for å sitere innlegg i dette forumet.',
	'NO_PM_ICON'	=> 'Ingen PM-ikon',
	'URL_IS_OFF'	=> '[url] er <em>av</em>',
	'URL_IS_ON'	=> '[url] er <em>på</em>',
	'ADD_ATTACHMENT'	=> 'Laste opp vedlegg',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Hvis du vil legge ved filer, må du fylle ut feltene under.',
	'ADD_FILE'	=> 'Last opp fil',
	'ADD_POLL'	=> 'Lag avstemning',
	'ADD_POLL_EXPLAIN'	=> 'Hvis du ikke vil ha noen avstemning, la feltene være tomme.',
	'ALREADY_DELETED'	=> 'Beklager, denne meldingen er allerede slettet.',
	'ATTACH_QUOTA_REACHED'	=> 'Beklager, men forumets vedleggskvote er blitt oppbrukt.',
	'ATTACH_SIG'	=> 'Legg ved signatur. (Signaturen kan endres i brukerkontrollpanelet.)',
	'BBCODE_B_HELP'	=> 'Uthevet tekst: [b]<b>tekst</b>[/b]  (alt   b)',
	'BBCODE_C_HELP'	=> 'Vis kode: [code]kode[/code]  (alt c)',
	'BBCODE_E_HELP'	=> 'Liste: Legg til punkt',
	'BBCODE_F_HELP'	=> 'Skriftstørrelse: [size=x-small]liten tekst[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s er <em>AV</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s er <em>På</em>',
	'BBCODE_I_HELP'	=> 'Kursiv tekst: [i]tekst[/i]  (alt i)',
	'BBCODE_L_HELP'	=> 'Liste: [list]tekst[/list]  (alt l)',
	'BBCODE_O_HELP'	=> 'Sortert liste: [list=]tekst[/list]  (alt o)',
	'BBCODE_P_HELP'	=> 'Sett inn bilde: [img]http://bildets_url[/img]  (alt p)',
	'BBCODE_Q_HELP'	=> 'Siter tekst: [quote]tekst[/quote]  (alt q)',
	'BBCODE_S_HELP'	=> 'Skriftfarge: [color=red]tekst[/color]  Tips: Du kan også bruke color=#FF0000.',
	'BBCODE_U_HELP'	=> 'Understreket tekst: [u]tekst[/u]  (alt u)',
	'BBCODE_W_HELP'	=> 'Sett inn URL: [url]http://url[/url] eller [url=http://url]URL tekst[/url]  (alt w)',
	'BUMP_ERROR'	=> 'Du kan ikke bumpe dette emnet så raskt etter det forrige innlegget.',
	'CANNOT_DELETE_REPLIED'	=> 'Du kan ikke slette innlegg som er svart på.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Emnet er stengt. Du kan ikke endre det lenger.',
	'CANNOT_EDIT_TIME'	=> 'Du kan ikke endre eller slette dette innlegget.',
	'CANNOT_POST_ANNOUNCE'	=> 'Du kan ikke lage annonseringer.',
	'CANNOT_POST_STICKY'	=> 'Du kan ikke lage prioriterte emner.',
	'CHANGE_TOPIC_TO'	=> 'Endre emnetype til',
	'CLOSE_TAGS'	=> 'Lukk tagger',
	'CURRENT_TOPIC'	=> 'Nåværende emne',
	'DELETE_FILE'	=> 'Slett fil',
	'DELETE_MESSAGE'	=> 'Slett melding',
	'DELETE_MESSAGE_CONFIRM'	=> 'Vil du virkerlig slette denne meldingen?',
	'DELETE_OWN_POSTS'	=> 'Du kan bare slette dine egne innlegg.',
	'DELETE_POST_CONFIRM'	=> 'Er du sikker på at du vil slette dette innlegget?',
	'DELETE_POST_WARN'	=> 'Handlingen er endelig og kan ikke angres.',
	'DISABLE_BBCODE'	=> 'Slå av BBKode',
	'DISABLE_MAGIC_URL'	=> 'Ikke link URLer automatisk',
	'DISABLE_SMILIES'	=> 'Deaktiver Smil',
	'DISALLOWED_EXTENSION'	=> 'Utvidelsen %s er ikke tillatt',
	'DRAFT_LOADED'	=> 'Kladden er satt inn i innlegget; du kan fullføre posten nå.<br />Kladden vil bli slettet etter at du har sendt dette innlegget.',
	'DRAFT_SAVED'	=> 'Kladden er lagret.',
	'DRAFT_TITLE'	=> 'Kladdnavn',
	'EDIT_REASON'	=> 'Begrunnelse for endring av dette innlegget',
	'EMPTY_FILEUPLOAD'	=> 'Filen du lastet opp er tom.',
	'EMPTY_MESSAGE'	=> 'Du må skrive en melding når du poster.',
	'EMPTY_REMOTE_DATA'	=> 'Filen kan ikke bli lastet opp; prøv å laste opp filen manuelt.',
	'FLASH_IS_OFF'	=> '[flash] er <em>AV</em>',
	'FLASH_IS_ON'	=> '[flash] er <em>På</em>',
	'FLOOD_ERROR'	=> 'Du kan ikke poste flere innlegg så raskt etter hverandre.',
	'FONT_COLOR'	=> 'Skriftfarge',
	'FONT_HUGE'	=> 'Veldig stor',
	'FONT_LARGE'	=> 'Stor',
	'FONT_NORMAL'	=> 'Normal',
	'FONT_SIZE'	=> 'Skriftstørrelse',
	'FONT_SMALL'	=> 'Liten',
	'FONT_TINY'	=> 'Veldig liten',
	'GENERAL_UPLOAD_ERROR'	=> 'Kan ikke laste opp vedlegg til %s.',
	'IMAGES_ARE_OFF'	=> '[img] er <em>AV</em>',
	'IMAGES_ARE_ON'	=> '[img] er <em>På</em>',
	'INVALID_FILENAME'	=> '%s er et ugyldig filnavn.',
	'LOAD'	=> 'Laster',
	'LOAD_DRAFT'	=> 'Laster kladd',
	'LOAD_DRAFT_EXPLAIN'	=> 'Her kan du velge en kladd du vil fortsette &aring skrive på. Din aktuelle post vil bli kansellert, alle aktuelle poster vil bli slettet. Se på, endre og slette kladder gjøres i brukerkontrollpanelet.',
	'LOGIN_EXPLAIN_POST'	=> 'Du må logge inn for å lage emner i dette forumet.',
	'LOGIN_EXPLAIN_REPLY'	=> 'Du må logge inn for å svare på emner i dette forumet.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Du kan bare bruke skrifter opp til størrelse %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Dine Flashfiler kan bare bli opp til %1$d piksler høye.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Dine Flashfiler kan bare bli opp til %1$d piksler brede.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Dine bilder kan bare bli opp til %1$d piksler høye.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Dine bilder kan bare bli opp til %1$d piksler brede.',
	'MESSAGE_BODY_EXPLAIN'	=> 'Skriv meldingen din her, den må ikke inneholde mer enn <strong>%d</strong> tegn.',
	'MESSAGE_DELETED'	=> 'Meldingen har blitt slettet.',
	'MORE_SMILIES'	=> 'Se flere Smil',
	'NOTIFY_REPLY'	=> 'Send meg en e-post når svar er postet',
	'NOT_UPLOADED'	=> 'Filen kan ikke lastes opp.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Du kan ikke slette eksisterende avstemningsinnstillinger.',
	'NO_POLL_TITLE'	=> 'Du må skrive et navn på avstemningen.',
	'NO_POST'	=> 'Innlegget du leter etter finnes ikke.',
	'NO_POST_MODE'	=> 'Ingen postmodus er spesifisert.',
	'PARTIAL_UPLOAD'	=> 'Filen var kun delvis opplastet.',
	'PHP_SIZE_NA'	=> 'Vedleggets filstørrelse er for stor.<br />Kan ikke fastsette maksimumstørrelsen definert av PHP i php.ini.',
	'PHP_SIZE_OVERRUN'	=> 'Vedleggets filstørrelse er for stor, maksimum opplastingsstørrelse er %d %2$s.<br />Noter deg at dette er satt i php.ini og kan ikke bli tilsidesatt.',
	'PLACE_INLINE'	=> 'Plasser i innlegget',
	'POLL_DELETE'	=> 'Slett avstemning',
	'POLL_FOR'	=> 'Kjør avstemning i',
	'POLL_FOR_EXPLAIN'	=> 'Skriv 0 eller la feltet være blankt for en evigvarende avstemning.',
	'POLL_MAX_OPTIONS'	=> 'Antall alternativer per bruker',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Dette er antall alternativer hver bruker kan velge når han/hun stemmer.',
	'POLL_OPTIONS'	=> 'Avstemningsalternativer',
	'POLL_OPTIONS_EXPLAIN'	=> 'Skriv hvert alternativ på en ny linje. Du kan ha opptil <strong>%d</strong> alternativer.',
	'POLL_QUESTION'	=> 'Avstemningsspørsmål',
	'POLL_VOTE_CHANGE'	=> 'Godta endring av stemme',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Hvis mulig kan brukere endre deres stemme.',
	'POSTED_ATTACHMENTS'	=> 'Vedlegg postet',
	'POST_CONFIRMATION'	=> 'Godkjenning av innlegg',
	'POST_CONFIRM_EXPLAIN'	=> 'For å forhindre automatiske innlegg, krever administratoren at du skriver inn en bekreftelseskode. Koden vises på bildet under. Hvis du ikke klarer å lese koden, %skontakt administratoren%s.',
	'POST_DELETED'	=> 'Meldingen har blitt slettet.',
	'POST_EDITED'	=> 'Meldingen har blitt endret.',
	'POST_EDITED_MOD'	=> 'Meldingen er endret, men krever godkjenning.',
	'POST_GLOBAL'	=> 'Global',
	'POST_ICON'	=> 'Innleggsikon',
	'POST_NORMAL'	=> 'Normal',
	'POST_REVIEW'	=> 'Overblikk over innlegg',
	'POST_REVIEW_EXPLAIN'	=> 'Minst et nytt innlegg har blitt skrevet i dette emnet. Du kan ta et overblikk over innlegget så det passer med emnet.',
	'POST_STORED'	=> 'Meldingen har blitt postet.',
	'POST_STORED_MOD'	=> 'Meldingen har blitt lagret, men krever godkjenning.',
	'POST_TOPIC_AS'	=> 'Post emne som',
	'PROGRESS_BAR'	=> 'Fremgangslinje',
	'QUOTE_DEPTH_EXCEEDED'	=> 'Du kan bare legge til %1$d siteringer i hvert innlegg.',
	'SAVE'	=> 'Lagre',
	'SAVE_DATE'	=> 'Lagret som',
	'SAVE_DRAFT'	=> 'Lagre kladd',
	'SAVE_DRAFT_CONFIRM'	=> 'Husk at lagrede kladder inneholder bare emnet og meldingen, alle andre ting vil bli slettet. Vil du lagre kladden din nå?',
	'SMILIES'	=> 'Smil',
	'SMILIES_ARE_OFF'	=> 'Smil er <em>AV</em>',
	'SMILIES_ARE_ON'	=> 'Smil er <em>På</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Prioritet/Annonsering tidsgrense',
	'STICK_TOPIC_FOR'	=> 'Økt status i',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Skriv 0 eller la feltet være tomt for en aldri endt prioritet/annonsering.',
	'STYLES_TIP'	=> 'Tips: Utseende kan raskt bli brukt til valgt tekst.',
	'TOO_FEW_CHARS'	=> 'Meldingen har for få tegn.',
	'TOO_FEW_POLL_OPTIONS'	=> 'Du må skrive minst to avstemningsalternativer.',
	'TOO_MANY_ATTACHMENTS'	=> 'Kan ikke legge til flere vedleg, %d er maksimum.',
	'TOO_MANY_CHARS'	=> 'Din melding inneholder for mange tegn.',
	'TOO_MANY_POLL_OPTIONS'	=> 'Du har prøvd &aring legge til for mange avstemningsalternativer.',
	'TOO_MANY_SMILIES'	=> 'Meldingen inneholder for mange smil. Maksimum %d smil er godkjent.',
	'TOO_MANY_URLS'	=> 'Meldingen inneholder for mange URLer. Maksimum %d URLer er godkjent.',
	'TOO_MANY_USER_OPTIONS'	=> 'Du kan ikke angi flere alternativer per bruker enn eksisterende avstemningsalternativer.',
	'TOPIC_BUMPED'	=> 'Emnet har blitt bumpet.',
	'UNAUTHORISED_BBCODE'	=> 'Du kan ikke bruke følgende BBKoder: ',
	'UNGLOBALISE_EXPLAIN'	=> 'For å gjøre denne globale annonseringen om til et vanlig emne, må du velge hvilket forum emnet skal vises i.',
	'UPDATE_COMMENT'	=> 'Oppdater kommentar',
	'URL_INVALID'	=> 'Nettadressen du skrev inn er ugyldig.',
	'URL_NOT_FOUND'	=> 'Kunne ikke finne valgt fil.',
	'USER_CANNOT_BUMP'	=> 'Du kan ikke flytte emner til toppen av dette forumet.',
	'USER_CANNOT_DELETE'	=> 'Du kan ikke slette innlegg i dette forumet.',
	'USER_CANNOT_EDIT'	=> 'Du kan ikke redigere innlegg i dette forumet.',
	'USER_CANNOT_REPLY'	=> 'Du kan ikke svare på emner i dette forumet.',
	'USER_CANNOT_FORUM_POST'	=> 'Du kan ikke foreta innleggsoperasjoner i dette forumet fordi forumtypen ikke støtter det.',
	'VIEW_MESSAGE'	=> '%sSe ditt nye innlegg%s',
	'WRONG_FILESIZE'	=> 'Filstørrelsen er for stor, maksimal tillatt filstørrelse er %1d %2s.',
	'WRONG_SIZE'	=> 'Bildet må minst være %1$d piksler bredt og %2$d piksler høyt, og maksimalt %3$d piksler bredt og %4$d piksler høyt. Bildet du lastet opp er %5$d piksler bredt og %6$d piksler høyt.',
	
	'DISALLOWED_CONTENT'		=> 'Opplastingen ble avbrutt fordi den opplastede filen var identifisert som en mulig angrepsvektor.',
	
	'POST_REVIEW_EDIT'			=> 'Innleggsvurdering',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Dette innlegget ble endret av en annen bruker mens du redigerte det. Det kan være lurt å gjennomgå den gjeldende versjonen av dette innlegget og justere redigeringer.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Meldingen inneholder %1$d characters. tegn. Det minste antallet tegn du må oppgi er %2$d.'
));

?>