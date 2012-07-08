<?php
/**
*
* acp_posting.php [Norwegian Bokmaal]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-12-02 - phpBB.no
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
	'ICONS_NONE_ADDED'	=> 'Ingen ikoner ble lagt til.',
	'ICONS_NONE_EDITED'	=> 'Ingen ikoner ble oppdatert.',
	'DISPLAY_POSTING'	=> 'På siden hvor innlegg skrives',
	'DISPLAY_POSTING_NO'	=> 'Ikke på siden hvor innlegg skrives',
	'ICON_NONE_ADDED'	=> 'Ingen ikoner ble lagt til.',
	'ICONS_ONE_ADDED'	=> 'Ikonet er korrekt lagt til.',
	'ICONS_ONE_EDITED'	=> 'Ikonet er korrekt oppdatert.',
	'ICON_NONE_EDITED'	=> 'Ingen ikoner ble oppdatert.',
	'SMILIES_NONE_ADDED'	=> 'Ingen smilies ble lagt til.',
	'SMILIES_ONE_ADDED'	=> 'Smilies ble korrekt lagt til.',
	'SMILIES_NONE_EDITED'	=> 'Ingen smilies ble oppdatert.',
	'SMILIES_ONE_EDITED'	=> 'Smilies ble korrekt oppdatert.',
	'BBCODE_INVALID'	=> 'BBkoden er ikke konstruert riktig.',
	'ACP_BBCODES_EXPLAIN'	=> 'BBkode er en spesialimplementering av HTML, som tilbyr en bedre kontroll over hva og hvordan noe blir vist. Fra denne siden kan du legge til, fjerne og redigere egne BBkoder.',
	'ADD_BBCODE'	=> 'Legg til en ny BBkode',
	'BBCODE_ADDED'	=> 'BBkode vellykket lagt til.',
	'BBCODE_EDITED'	=> 'BBkode vellykket redigert.',
	'BBCODE_NOT_EXIST'	=> 'BBkoden du har valgt finnes ikke.',
	'BBCODE_HELPLINE'	=> 'Hjelpelinje',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Dette feltet inneholder tekst som vises når musen føres over tekst på BBkode.',
	'BBCODE_HELPLINE_TEXT'	=> 'Hjelpelinjetekst',
	'BBCODE_INVALID_TAG_NAME'	=> 'BBkodetaggen ekisterer allerede.',
	'BBCODE_OPEN_ENDED_TAG'	=> 'BBkodene må inneholde både en åpne- og en lukketagg.',
	'BBCODE_TAG'	=> 'Tagg',
	'BBCODE_TAG_TOO_LONG'	=> 'Taggen valgte er for lang.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Taggdefinisjonen du har lagt inn er for lang, vennligst kort inn din tagg definasjon.',
	'BBCODE_USAGE'	=> 'BBkodepraksis',
	'BBCODE_USAGE_EXAMPLE'	=> '[highlight={COLOR}]{TEXT}[/highlight]<br/><br/>[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'	=> 'Her kan du definere hvordan man skal bruke BBkode. Erstatt noen variabelinnsetting med tilsvarende koder (%sse under%s).',
	'EXAMPLE'	=> 'Eksempel:',
	'EXAMPLES'	=> 'Eksempler:',
	'HTML_REPLACEMENT'	=> 'HTML-erstatning',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br/><br/>&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Her kan du definere HTML-resultatet. Ikke glem å sette tilbake kodene du brukte over!',
	'TOKEN'	=> 'Symbol',
	'TOKENS'	=> 'Symboler',
	'TOKENS_EXPLAIN'	=> 'Tegn er plassholder for bruker innlevering. Innlevering blir godkjent bare hvis det passer den korresponderende definisjonen. Hvis nødvendig, kan du nummerere dem ved å legge til et tall som den siste karakteren mellom støttene, f.eks. {USERNAME1}, {USERNAME2}.<br /><br />I tillegg til disse tegnene du kan bruke noe språksnorpresang i din språk/katalog som dette : {L_<em>&lt;stringname&gt;</em>} hvor <em>&lt;stringname&gt;</em>  navnet er av den oversettede linjen du vil legge til. For eksempel {L_WROTE} blir vist da &quot;wrote&quot; eller dets oversettelse til brukers lokale.',
	'TOKEN_DEFINITION'	=> 'Hva kan det være?',
	'TOO_MANY_BBCODES'	=> 'Du kan ikke lage flere BBkoder. Vennligst fjern en eller flere BBkoder, og prøv på nytt.',

	'tokens'	=> array(
		'TEXT'	=> 'Valgfri tekst, samt utenlandske tegn, nummer, osv.',
		'NUMBER'	=> 'Valgfri tall',
		'EMAIL'	=> 'En gyldig e-postadresse',
		'URL'	=> 'En gyldig URL bruker valgfri protokol (http, ftp, etc… kan ikke bli brukt for javascript exploits). Hvis ingen er angitt, "http://" er standar for linjen.A valid URL using any protocol (http, ftp, etc… cannot be used for javascript exploits). If none is given, "http://" is prefixed to the string.',
		'LOCAL_URL'	=> ' En lokal URL. URL må være relatert til emnet siden og kan ikke inneholde et tjenernavn eller protokoll.',
		'COLOR'	=> 'En HTML farge, kan være enten i den numeriske formen <samp>#FF1234</samp> eller en <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS farvenavn</a> slik som <samp>fuchsia</samp> eller <samp>InactiveBorder</samp>',
	),

	'ACP_ICONS_EXPLAIN'	=> 'Fra denne siden kan du legge til, slette og redigere ikoner som brukerene kan legge til deres emner eller poster. Disse ikoner er vanligvis vist ved siden av emnetittel på forumlisten, eller postemnene i emnelister. Du kan også installere og lage nye pakker av ikoner. ',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies eller følelseikoner er vanligvis små av og til tegnede bilder som blir brukt til å beskrive en følelse. Fra denne siden kan du legg til, slette og redigere ikoner som brukerene kan legge til deres poster og private meldinger. Du kan også installere og lage nye pakker av smilies.',
	'ADD_SMILIES'	=> 'Legg til fler smilies',
	'ADD_SMILEY_CODE'	=> 'Legg til ytterligere smilie kode',
	'ADD_ICONS'	=> 'Legg til fler ikoner',
	'AFTER_ICONS'	=> 'Etter %s',
	'AFTER_SMILIES'	=> 'Etter %s',
	'CODE'	=> 'Kode',
	'CURRENT_ICONS'	=> 'Nåværende ikoner',
	'CURRENT_ICONS_EXPLAIN'	=> 'Velg hva som skal gjøres med nåværende installerte ikoner.',
	'CURRENT_SMILIES'	=> 'Nåværende smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Velg hva som skal gjøres med nåværende installerte smilies.',
	'DISPLAY_ON_POSTING'	=> 'Vis på postside',
	'EDIT_ICONS'	=> 'Rediger ikoner',
	'EDIT_SMILIES'	=> 'Rediger smilies',
	'EMOTION'	=> 'Følelse',
	'EXPORT_ICONS'	=> 'Eksporter og last ned ikon pakke',
	'EXPORT_ICONS_EXPLAIN'	=> '%sVed å klikke på denne konfigurasjonslinken for dine installerte ikoner, vil den bli pakket i <samp>icons.pak</samp> som etter nedlastning kan bli brukt til å lage en <samp>.zip</samp> eller <samp>.tgz</samp> fil. Den inneholder alle dine ikoner pluss  <samp>ikons.pak</samp> i konfigurasjonfilen%s.',
	'EXPORT_SMILIES'	=> 'Eksporter og last ned smilies pakke',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sVed å klikke på denne linken, konfigurasjonen for dine installerte smilies bli pakket i <samp>smilies.pak</samp> som etter nedlastning kan bli brukt til å lage en <samp>.zip</samp> eller <samp>.tgz</samp> fil. Den inneholder alle dine ikoner pluss <samp>smilies.pak</samp> konfigurasjon filen%s.',
	'FIRST'	=> 'Først',
	'ICONS_ADD'	=> 'Legg til nytt ikon',
	'ICONS_ADDED'	=> 'Ikonet  har blitt vellykket lagt til.',
	'ICONS_CONFIG'	=> 'Ikon konfigurasjon',
	'ICONS_DELETED'	=> 'Ikon har blitt vellykket slettet.',
	'ICONS_EDIT'	=> 'Rediger ikon',
	'ICONS_EDITED'	=> 'Ikon har blitt vellykket opplastet.',
	'ICONS_HEIGHT'	=> 'Ikon høyde',
	'ICONS_IMAGE'	=> 'Ikon bilde',
	'ICONS_IMPORTED'	=> 'Ikon pakken har blitt vellykket installert.',
	'ICONS_IMPORT_SUCCESS'	=> 'Ikon pakken har blitt vellykket importert.',
	'ICONS_LOCATION'	=> 'Ikon plassering ',
	'ICONS_NOT_DISPLAYED'	=> 'Følgende ikoner vises ikke på post siden',
	'ICONS_ORDER'	=> 'Ikon rekkefølge',
	'ICONS_URL'	=> 'Ikon bildefil',
	'ICONS_WIDTH'	=> 'Ikon bredde',
	'IMPORT_ICONS'	=> 'Installer ikon pakke',
	'IMPORT_SMILIES'	=> 'Installer smilies pakke',
	'KEEP_ALL'	=> 'Behold alle',
	'MASS_ADD_SMILIES'	=> 'Legg til mange smilies',
	'NO_ICONS_ADD'	=> 'Det er ikke noen ikoner tilgjengelig for å legge til.',
	'NO_ICONS_EDIT'	=> 'Det er ikke noen ikoner tilgjengelig for å modifisere.',
	'NO_ICONS_EXPORT'	=> 'Du har ikke noen ikoner med for å lage en pakke',
	'NO_ICONS_PAK'	=> 'Ingen ikon pakker funnet.',
	'NO_SMILIES_ADD'	=> 'Det er ikke noen smilier tilgjengelig for å legge til.',
	'NO_SMILIES_EDIT'	=> 'Det er ikke noen smilier tilgjengelig for å modifisere.',
	'NO_SMILIES_EXPORT'	=> 'Du har ikke noen smilies med for å lage en pakke.',
	'NO_SMILIES_PAK'	=> 'Ingen smilier pakker funnet.',
	'PAK_FILE_NOT_READABLE'	=> 'Kunne ikke lese <samp>.pak</samp> file.',
	'REPLACE_MATCHES'	=> 'Erstatt likheter',
	'SELECT_PACKAGE'	=> 'Velg en pakke fil',
	'SMILIES_ADD'	=> 'Legg til en ny smiley',
	'SMILIES_ADDED'	=> 'Smiley har blitt vellykket lagt til.',
	'SMILIES_CODE'	=> 'Smiley kode',
	'SMILIES_CONFIG'	=> 'Smiley konfigurasjon',
	'SMILIES_DELETED'	=> 'Smiley har blitt vellykket slettet.',
	'SMILIES_EDIT'	=> 'Rediger smiley',
	'SMILIES_EDITED'	=> 'Smiley har blitt vellykket oppdatert.',
	'SMILIES_EMOTION'	=> 'Følelse',
	'SMILIES_HEIGHT'	=> 'Smiley høyde',
	'SMILIES_IMAGE'	=> 'Smiley bilde',
	'SMILIES_IMPORTED'	=> 'Smiley har blitt vellykket installert.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Smiley har blitt vellykket importert.',
	'SMILIES_LOCATION'	=> 'Smiley plassering',
	'SMILIES_NOT_DISPLAYED'	=> 'Følgene smilies vises ikke på post siden',
	'SMILIES_ORDER'	=> 'Smiley rekefølge',
	'SMILIES_URL'	=> 'Smiley bildefil',
	'SMILIES_WIDTH'	=> 'Smiley bredde',
	'WRONG_PAK_TYPE'	=> 'Den spesifiserte pakken inneholder ikke de passende dataene. ',
	'ACP_WORDS_EXPLAIN'	=> 'Fra dette kontrollpanelet kan du legge til, redigere og slette ord som automatisk vil bli sensurert på forumet ditt. Det blir heller ikke tillatt å registrere brukernavn som inneholder disse ordene. Jokertegn kan brukes; f.eks. passer "*ord*" til "bordet", "ord*" til "ordet" og "*ord" til "bord".',
	'ADD_WORD'	=> 'Legg til nytt ord',
	'EDIT_WORD'	=> 'Rediger ord sensur',
	'ENTER_WORD'	=> 'Du må skrive et ord og ordets erstattnig.',
	'NO_WORD'	=> 'Ingen ord valgt for redigering.',
	'REPLACEMENT'	=> 'Erstattning / Utskifting',
	'UPDATE_WORD'	=> 'Oppdater ord sensor',
	'WORD'	=> 'Ord',
	'WORD_ADDED'	=> 'Ord sensor har blitt vellykket lagt til.',
	'WORD_REMOVED'	=> 'Det valgte ord har blitt vellykket slettet.',
	'WORD_UPDATED'	=> 'Valgte ord sensoren har blitt vellykket oppdatert.',
	'ACP_RANKS_EXPLAIN'	=> 'Bruk denne formen du kan legge til, redigerer, se og stryk ranger. Du også kan skape spesielle ranger som kan bli gjeldene for en bruker via brukerkontroll panelet.',
	'ADD_RANK'	=> 'Legg til ny rang',
	'MUST_SELECT_RANK'	=> 'Du må velge en rang.',
	'NO_ASSIGNED_RANK'	=> 'Ingen spesiell rang tildelt.',
	'NO_RANK_TITLE'	=> 'Du har ikke spesifisert en titel for rangen.',
	'NO_UPDATE_RANKS'	=> 'Rangen har blitt vellykket slettet. Men brukerkontoer som bruker denne rangen ble ikke oppdatert. Du må manuelte inn å forandre på disse kontoene.  ',
	'RANK_ADDED'	=> 'Rangen har blitt vellykket lagt til.',
	'RANK_IMAGE'	=> 'Rang bilde',
	'RANK_IMAGE_EXPLAIN'	=> 'Bruk dette til å definere et lite bilde tilknyttet til rangen. Stien er relativ til roten phpBB katalogen. ',
	'RANK_MINIMUM'	=> 'Minimum poster',
	'RANK_REMOVED'	=> 'Rangen var vellykket slettet.',
	'RANK_SPECIAL'	=> 'Sett som en spesiel rang',
	'RANK_TITLE'	=> 'Rang titel',
	'RANK_UPDATED'	=> 'Rangen var vellykket oppdatert.',
	'ACP_DISALLOW_EXPLAIN'	=> 'Her du kan styre brukernavn som blir ikke tillatt til å bli brukt. Forbudt brukernavn blir tillatt til å inneholde et jokertegn av karakter *. Anmerk det blir ikke tillatt til å spesifisere noe brukernavn som allerede har blitt registrert, du må først slette det navnet og så forby det.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Du kan utvide antall brukernavn som ikke er tilatt, ved å bruke (*) som ubekjent, for å matche alle tegn.',
	'ADD_DISALLOW_TITLE'	=> 'Legg til et forbudt brukernavn',
	'DELETE_DISALLOW_EXPLAIN'	=> 'Du kan fjerne forbudte brukernavn ved å velge brukernavnet fra denne listen og trykke OK.',
	'DELETE_DISALLOW_TITLE'	=> 'Fjern et forbudt brukernavn',
	'DISALLOWED_ALREADY'	=> 'Navnet du skrev inn i kunne ikke forbys. Enten finnes det allerede i listen, i ord sensoren listen, eller et likt brukernavn er til stede.',
	'DISALLOWED_DELETED'	=> 'Det forbudte brukernavn har blitt vellykket slettet.',
	'DISALLOW_SUCCESSFUL'	=> 'Det forbudte brukernavn har blitt vellykket lagt til.',
	'NO_DISALLOWED'	=> 'Ingen forbudte brukernavn',
	'NO_USERNAME_SPECIFIED'	=> 'Du har ikke valgt et brukernavn å jobbe med.',
	'ACP_REASONS_EXPLAIN'	=> 'Her kan du behandle begrunnelsene som blir brukt i rapporter og nektelsesgrunn når det er mislikte poster. Det er en standardgrunn (merket med et *) du er i ikke stand til å fjerne den. Denne begrunnelsen er vanligvis brukt for egne meldinger hvis ingen annen begrunnelse passer.',
	'ADD_NEW_REASON'	=> 'Legg til ny begrunnelse',
	'AVAILABLE_TITLES'	=> 'Tilgjengelig lokal grunntittel',
	'IS_NOT_TRANSLATED'	=> 'Begrunnelse har <strong>ikke</strong> blitt lokalisert.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Begrunnelse har <strong>ikke</strong> blitt lokalisert. Hvis du vil bruke den lokale formen, spesifiserer den riktige nøkkelen fra språkfilene grunnkapittel rapport. ',
	'IS_TRANSLATED'	=> 'Begrunnelse har blitt lokalisert.',
	'IS_TRANSLATED_EXPLAIN'	=> 'Begrunnelse har blitt lokalisert. Hvis tittelen du skrev inn i her er spesifisert innenfor språkene arkivene rapporterer grunnkapittel, den lokaliserede formen av tittelen og beskrivelse blir brukt.',
	'NO_REASON'	=> 'Begrunnelsen ble ikke funnet.',
	'NO_REASON_INFO'	=> 'Du må spesifisere en titel og info for denne begrunnelsen.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Du er ikke i stand til å fjerne standardgrunnen "Annet".',
	'REASON_ADD'	=> 'Legg til rapport/nektelsesgrunn',
	'REASON_ADDED'	=> 'Rapport/nektelsesgrunn vellykket lagttil.',
	'REASON_ALREADY_EXIST'	=> 'En begrunnelse med denne titelen eksistere allerede, vennligst skriv en annen titel for denne begrunnelsen.',
	'REASON_DESCRIPTION'	=> 'Begrunnelse ',
	'REASON_DESC_TRANSLATED'	=> 'Vist begrunnelse',
	'REASON_EDIT'	=> 'Rediger rapport/nektelsesgrunn',
	'REASON_EDIT_EXPLAIN'	=> 'Her du er i stand til å legge til eller å redigere en begrunnesle. Hvis begrunnelsen er oversatt, den lokaliserende versjonen er brukt i stedet for beskrivelsens skrevet inn her.',
	'REASON_REMOVED'	=> 'Rapport/nektelsesgrunn vellykket fjernet.',
	'REASON_TITLE'	=> 'Begrunnelse titel',
	'REASON_TITLE_TRANSLATED'	=> 'Vist begrunnelse titel',
	'REASON_UPDATED'	=> 'Rapport/nektelsesgrunn vellykket oppdaterte.',
	'USED_IN_REPORTS'	=> 'Brukes i rapporter',
	
	'SMILIE_NO_CODE'			=> 'Smilet “%s” ble ignorert fordi det ikke hadde noen kode.',
	'SMILIE_NO_EMOTION'			=> 'Smilet “%s” ble ignorert fordi det ikke hadde noen tittel.',
	
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Hjelpeteksten du oppga er for lang.',
	
	'TOO_MANY_SMILIES'			=> 'Grensen på %d smilefjes er nådd.',
	'RANK_IMAGE_IN_USE'		=> '(I bruk)'
));

?>