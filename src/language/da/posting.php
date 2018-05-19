<?php
/**
*
* posting [Danish]
*
* @package language
* @version Id: posting.php 9742 2009-07-09 10:34:40Z bantu $
* @version $Id: posting.php,v 1.11 2009/07/28 19:08:05 jansk Exp $
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Upload af vedhæftede filer',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Hvis du ønsker at vedhæfte en eller flere filer, indtast nedenstående oplysninger.',
	'ADD_FILE'					=> 'Tilføj filen',
	'ADD_POLL'					=> 'Oprettelse af afstemning',
	'ADD_POLL_EXPLAIN'			=> 'Hvis du ikke ønsker at tilføje en afstemning til dit emne, lad felterne være tomme.',
	'ALREADY_DELETED'			=> 'Beklager, men dette indlæg er allerede slettet.',
	'ATTACH_QUOTA_REACHED'		=> 'Beklager, boardets kvote for vedhæftede filer er overskredet.',
	'ATTACH_SIG'				=> 'Tilføj signatur (signaturen kan rettes i brugerkontrolpanelet)',

	'BBCODE_A_HELP'				=> 'Vis vedhæftet fil inline: [attachment=]filnavn.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Fed tekst: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Kodevisning: [code]kode[/code]',
	'BBCODE_E_HELP'				=> 'Liste: Tilføj listeelement',
	'BBCODE_F_HELP'				=> 'Fontstørrelse: [size=85]lille tekst[/size]',
	'BBCODE_IS_OFF'				=> '%sBBkode%s er slået <em>FRA</em>',
	'BBCODE_IS_ON'				=> '%sBBkode%s er slået <em>TIL</em>',
	'BBCODE_I_HELP'				=> 'Kursiv tekst: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list]tekst[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listeelement: [*]tekst[/*]',
	'BBCODE_O_HELP'				=> 'Sorteret liste: [list=]tekst[/list]',
	'BBCODE_P_HELP'				=> 'Indsæt billede: [img]http://billed_url[/img]',
	'BBCODE_Q_HELP'				=> 'Citer tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Fontfarve: [color=red]tekst[/color]  Tip: du kan også bruge color=#FF0000',
	'BBCODE_U_HELP'				=> 'Understreg tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'Indsæt URL: [url]http://url[/url] eller [url=http://url]URL-tekst[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=bredde,højde]http://url[/flash]',
	'BUMP_ERROR'				=> 'Du kan ikke placere emnet øverst så hurtigt efter sidste indlæg.',

	'CANNOT_DELETE_REPLIED'		=> 'Beklager, men du kan kun slette indlæg der ikke er blevet besvaret.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dette indlæg er blevet låst. Du kan ikke længere redigere dette indlæg.',
	'CANNOT_EDIT_TIME'			=> 'Du kan ikke længere redigere eller slette dette indlæg.',
	'CANNOT_POST_ANNOUNCE'		=> 'Beklager, men du kan ikke skrive bekendtgørelser.',
	'CANNOT_POST_STICKY'		=> 'Beklager, men du kan ikke skrive opslag.',
	'CHANGE_TOPIC_TO'			=> 'Ændre emnetype til',
	'CLOSE_TAGS'				=> 'Luk tags',
	'CURRENT_TOPIC'				=> 'Nuværende emne',

	'DELETE_FILE'				=> 'Slet fil',
	'DELETE_MESSAGE'			=> 'Slet indlæg',
	'DELETE_MESSAGE_CONFIRM'	=> 'Er du sikker på at du vil slette dette indlæg?',
	'DELETE_OWN_POSTS'			=> 'Beklager, men du kan kun slette dine egne indlæg.',
	'DELETE_POST_CONFIRM'		=> 'Er du sikker på at du vil slette dette indlæg?',
	'DELETE_POST_WARN'			=> 'Når indlægget først er slettet kan det ikke genskabes',
	'DISABLE_BBCODE'			=> 'Anvend ikke BBkode',
	'DISABLE_MAGIC_URL'			=> 'Behandel ikke URL\'er automatisk',
	'DISABLE_SMILIES'			=> 'Anvend ikke smilies',
	'DISALLOWED_CONTENT'	=> 'Upload blev afvist, filen blev identificeret som et muligt angrebsforsøg.',
	'DISALLOWED_EXTENSION'		=> 'Filtypen %s er ikke tilladt.',
	'DRAFT_LOADED'				=> 'Kladden indlæst i skriveområdet, du kan skrive dit indlæg færdigt nu.<br />Din kladde slettes efter indsendelse af dette indlæg.',
	'DRAFT_LOADED_PM'			=> 'Kladden indlæst i skriveområdet, du kan nu skrive din private besked færdig.<br />Din kladde slettes efter indsendelse af denne besked.',
	'DRAFT_SAVED'				=> 'Kladde gemt.',
	'DRAFT_TITLE'				=> 'Kladdetitel',

	'EDIT_REASON'				=> 'Begrundelse for at redigere dette indlæg',
	'EMPTY_FILEUPLOAD'			=> 'Den uploadede fil er tom.',
	'EMPTY_MESSAGE'				=> 'Du skal indtaste en meddelelse for at skrive et indlæg.',
	'EMPTY_REMOTE_DATA'			=> 'Filen kunne ikke uploades, prøv venligst at uploade filen manuelt.',

	'FLASH_IS_OFF'				=> '[flash] er slået <em>FRA</em>',
	'FLASH_IS_ON'				=> '[flash] er slået <em>TIL</em>',
	'FLOOD_ERROR'				=> 'Du kan ikke skrive endnu et indlæg så hurtigt efter dit sidste.',
	'FONT_COLOR'				=> 'Skriftfarve',
	'FONT_COLOR_HIDE'			=> 'Skjul skriftfarve',
	'FONT_HUGE'					=> 'Meget stor',
	'FONT_LARGE'				=> 'Stor',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Fontstørrelse',
	'FONT_SMALL'				=> 'Lille',
	'FONT_TINY'					=> 'Meget lille',

	'GENERAL_UPLOAD_ERROR'		=> 'Kunne ikke uploade vedhæftet fil til %s.',

	'IMAGES_ARE_OFF'			=> '[img] er slået <em>FRA</em>',
	'IMAGES_ARE_ON'				=> '[img] er slået <em>TIL</em>',
	'INVALID_FILENAME'			=> '%s er et ugyldigt filnavn.',

	'LOAD'						=> 'Indlæs',
	'LOAD_DRAFT'				=> 'Indlæs kladde',
	'LOAD_DRAFT_EXPLAIN'		=> 'Her kan du vælge den kladde du vil skrive videre på. Dit nuværende indlæg vil blive annulleret, alt nuværende indlægsindhold vil blive slettet. Vælg "Gemte kladder" i brugerkontrolpanelet.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Du skal logge ind for at kunne placere emner øverst i dette forum',
	'LOGIN_EXPLAIN_DELETE'		=> 'Du skal logge ind for at kunne slette indlæg i dette forum',
	'LOGIN_EXPLAIN_POST'		=> 'Du skal logge ind for at kunne skrive indlæg i dette forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Du skal logge ind for at kunne citere indlæg i dette forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Du skal logge ind for at kunne besvare emner i dette forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Du kan kun anvende fontstørrelser op til størrelse %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Dine flashfiler må kun være op til %1$d pixels i højden.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Dine flashfiler må kun være op til %1$d pixels i bredden.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Dine billeder må kun være op til %1$d pixels i højden.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Dine billeder må kun være op til %1$d pixels i bredden.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Indtast dit indlæg her, det må ikke indeholde mere end <strong>%d</strong> tegn.',
	'MESSAGE_DELETED'			=> 'Dette indlæg er blevet slettet.',
	'MORE_SMILIES'				=> 'Vis flere smilies',

	'NOTIFY_REPLY'				=> 'Adviser mig ved besvarelse',
	'NOT_UPLOADED'				=> 'Filen kunne ikke uploades.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Du kan ikke slette eksisterende afstemningsmuligheder.',
	'NO_PM_ICON'				=> 'Intet PB-ikon',
	'NO_POLL_TITLE'				=> 'Du skal angive en afstemningstitel.',
	'NO_POST'					=> 'Det angivne indlæg findes ikke.',
	'NO_POST_MODE'				=> 'Ingen indlægstilstand angivet.',

	'PARTIAL_UPLOAD'			=> 'Den uploadede fil blev kun delvist uploadet.',
	'PHP_SIZE_NA'				=> 'Den vedhæftede fil er for stor.<br />Kunne ikke fastslå maksimal filstørrelse defineret af PHP i php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Den vedhæftede fil er for stor, den maksimale filstørrelse er %1$d %2$s.<br />Bemærk venligst at grænsen er defineret i php.ini og ikke kan tilsidesættes.',
	'PLACE_INLINE'				=> 'Placer inline',
	'POLL_DELETE'				=> 'Slet afstemning',
	'POLL_FOR'					=> 'Kør afstemning i',
	'POLL_FOR_EXPLAIN'			=> 'Indtast 0 eller lad være tom for en afstemning uden slutdato.',
	'POLL_MAX_OPTIONS'			=> 'Afstemningsmuligheder pr. bruger',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Dette er antallet af muligheder hver bruger kan vælge ved stemmeafgivelse.',
	'POLL_OPTIONS'				=> 'Afstemningsmuligheder',
	'POLL_OPTIONS_EXPLAIN'		=> 'Placer hver mulighed på en ny linie. Du kan indtaste op til <strong>%d</strong> muligheder.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Placer hver mulighed på en ny linie. Du kan indtaste op til <strong>%d</strong> muligheder. Hvis du sletter eller tilføjer muligheder, nulstilles alle afgivne stemmer.',
	'POLL_QUESTION'				=> 'Afstemningsspørgsmål',
	'POLL_TITLE_TOO_LONG'		=> 'Afstemningens titel må ikke indeholde mere end 100 tegn.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Den fortolkede afstemningstitel er for lang, overvej eventuelt at slette BBkoder eller smilies.',
	'POLL_VOTE_CHANGE'			=> 'Tillad ændring af afgivne stemmer',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Hvis slået til kan brugerne ændre deres stemme.',
	'POSTED_ATTACHMENTS'		=> 'Vedhæftede filer',
	'POST_APPROVAL_NOTIFY'		=> 'Du bliver adviseret når dit indlæg er godkendt.',
	'POST_CONFIRMATION'			=> 'Bekræftelse af indlæg',
	'POST_CONFIRM_EXPLAIN'		=> 'For at forhindre automatiserede indlæg kræver boardets administrator at du indtaster en bekræftelseskode. Koden vises i billedet du skulle kunne se herunder. Hvis du er synshandicappet eller af andre årsager ikke kan læse denne kode bedes du kontakte %sBoardadministrator%s.',
	'POST_DELETED'				=> 'Indlægget er blevet slettet.',
	'POST_EDITED'				=> 'Indlægget er blevet rettet.',
	'POST_EDITED_MOD'			=> 'Indlægget er blevet rettet, men skal godkendes af en redaktør før det offentliggøres.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Indlægsikon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Gennemgå indlæg',
	'POST_REVIEW_EDIT'		=> 'Gennemgå ændret indlæg',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Indlægget er ændret af en anden bruger mens du redigerede det. Du kan gennemse det ændrede indlæg og tilrette dine ændringer.',
	'POST_REVIEW_EXPLAIN'		=> 'Mindst et nyt indlæg er blevet skrevet i dette emne. I lyset af dette kan du eventuelt gennemgå dit indlæg igen.',
	'POST_STORED'				=> 'Dit indlæg er blevet gemt.',
	'POST_STORED_MOD'			=> 'Dit indlæg er modtaget, men skal godkendes af en redaktør før det offentliggøres.',
	'POST_TOPIC_AS'				=> 'Skriv emne som',
	'PROGRESS_BAR'				=> 'Statuslinie',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Du kan maksimalt indlejre %1$d citater inden i hinanden.',

	'SAVE'						=> 'Gem',
	'SAVE_DATE'					=> 'Gemt',
	'SAVE_DRAFT'				=> 'Gem kladde',
	'SAVE_DRAFT_CONFIRM'		=> 'Bemærk venligst at gemte kladder kun inkluderer titlen og selve meddelelsen, alle andre elementer vil blive fjernet. Vil du gemme din kladde nu?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies er slået <em>FRA</em>',
	'SMILIES_ARE_ON'			=> 'Smilies er slået <em>TIL</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Opslag/bekendtgørelse tidsbegrænsning',
	'STICK_TOPIC_FOR'			=> 'Opslå emne i',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Angives 0, bevares indlægget som opslag/bekendtgørelse. Bemærk at antallet er relativt i forhold til datoen for indlæggets indsendelse.',
	'STYLES_TIP'				=> 'Tip: Du kan lynhurtigt tilføje effekter på markeret tekst.',

	'TOO_FEW_CHARS'				=> 'Dit indlæg indeholder for få tegn.',
	'TOO_FEW_CHARS_LIMIT' => 'Dit indlæg indeholder kun %1$d tegn. Indlæg skal mindst indeholde %2$d tegn.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Du skal indtaste mindst 2 afstemningsmuligheder.',
	'TOO_MANY_ATTACHMENTS'		=> 'Kan ikke tilføje endnu en vedhæftet fil, %d er det maksimale antal.',
	'TOO_MANY_CHARS'			=> 'Dit indlæg indeholder for mange tegn.',
	'TOO_MANY_CHARS_POST'		=> 'Dit indlæg indeholder %1$d tegn. Indlæg må ikke indeholde mere end %2$d tegn.',
	'TOO_MANY_CHARS_SIG'		=> 'Din signatur indeholder %1$d tegn. Den må ikke være længere end %2$d tegn.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Du har forsøgt at indtaste for mange afstemningsmuligheder.',
	'TOO_MANY_SMILIES'			=> 'Dit indlæg indeholder for mange smilies. Der er sat et maksimum på %d smilies.',
	'TOO_MANY_URLS'				=> 'Dit indlæg indeholder for mange URL\'er. Der er sat et maksimum på %d URL\'er.',
	'TOO_MANY_USER_OPTIONS'		=> 'Du kan ikke angive flere muligheder pr. bruger end der findes afstemningsmuligheder.',
	'TOPIC_BUMPED'				=> 'Emnet er blevet korrekt placeret øverst.',

	'UNAUTHORISED_BBCODE'		=> 'Du kan ikke bruge visse BBkoder: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Når emnet ændres fra globalt opslag til normalt emne, skal du vælge i hvilket forum du ønsker at dette emne skal vises.',
	'UPDATE_COMMENT'			=> 'Opdater kommentar',
	'URL_INVALID'				=> 'Den angivne URL er ugyldig.',
	'URL_NOT_FOUND'				=> 'Den angivne fil kunne ikke findes.',
	'URL_IS_OFF'				=> '[url] er slået <em>FRA</em>',
	'URL_IS_ON'					=> '[url] er slået <em>TIL</em>',
	'USER_CANNOT_BUMP'			=> 'Du kan ikke placere emner øverst i dette forum.',
	'USER_CANNOT_DELETE'		=> 'Du kan ikke slette indlæg i dette forum.',
	'USER_CANNOT_EDIT'			=> 'Du kan ikke redigere indlæg i dette forum.',
	'USER_CANNOT_REPLY'			=> 'Du kan ikke besvare emner i dette forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Du kan ikke udføre indlægshandlinger i dette forum, da forumtypen ikke understøtter dette.',

	'VIEW_MESSAGE'				=> '%sVis din indsendte meddelelse%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVis din indsendte private besked%s',

	'WRONG_FILESIZE'			=> 'Filen er for stor, maksimalt tilladte størrelse er %1d %2s.',
	'WRONG_SIZE'				=> 'Billedet skal være mindst %1$d pixels bredt, %2$d pixels højt og højst %3$d pixels bredt og %4$d pixels højt. Det indsendte billede er %5$d pixels bredt og %6$d pixels højt.',
));

?>