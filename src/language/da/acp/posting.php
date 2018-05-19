<?php
/**
*
* acp_posting [Danish]
*
* @package language
* @version Id: posting.php 9902 2009-08-01 11:07:48Z acydburn $
* @version $Id: posting.php,v 1.15 2009/08/20 09:03:29 jansk Exp $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBkode er en speciel implementering af HTML som tilbyder bedre kontrol over hvad og hvordan noget vises. Fra denne side kan du tilføje, fjerne og redigere brugerdefinerede BBkoder.',
	'ADD_BBCODE'				=> 'Tilføj en ny BBkode',

	'BBCODE_ADDED'				=> 'BBkode korrekt tilføjet.',
	'BBCODE_EDITED'				=> 'BBkode korrekt rettet.',
	'BBCODE_NOT_EXIST'			=> 'Den valgte BBkode findes ikke.',
	'BBCODE_HELPLINE'			=> 'Hjælpelinie',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Dette felt indeholder teksten for BBkoden ved mouseover.',
	'BBCODE_HELPLINE_TEXT'		=> 'Tekst i hjælpelinie',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Den angivne tekst til hjælpelinien er for lang.',
	
	'BBCODE_INVALID_TAG_NAME'	=> 'Det valgte navn til BBkode-tag\'en eksisterer allerede.',
	'BBCODE_INVALID'			=> 'Din BBkode er ikke korrekt opbygget, og kan ikke anvendes.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Din BBkode skal indholde både en åbnings- og en afslutningstag.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'Det valgte navn til tag\'en er for langt.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Den angivne definition af tag\'en er for lang, afkort den venligst.',
	'BBCODE_USAGE'				=> 'Brug af BBkode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Her definerer du hvordan BBkoden bruges. Erstat variabelinput med det tilhørende token (%sse herunder%s).',

	'EXAMPLE'						=> 'Eksempel:',
	'EXAMPLES'						=> 'Eksempler:',

	'HTML_REPLACEMENT'				=> 'HTML-erstatning',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Her kan du definere standard HTML-erstatninger. Glem ikke at genindsætte tokens brugt herover!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokens',
	'TOKENS_EXPLAIN'		=> 'Tokens er pladsholdere for brugerinput. Inputtet vil kun blive valideret, hvis det matcher definitionen. Hvis nødvendigt kan du nummerere disse ved at tilføje et tal som sidste tegn mellem klammerne, f.eks. {TEXT1}, {TEXT2}.<br /><br />I HTML-erstatningerne kan anvendes enhver sprogstreng tilstede i language/ mappen på denne måde: {L_<em>&lt;STRENGNAVN&gt;</em>} hvor <em>&lt;STRENGNAVN&gt;</em> er navnet på den oversatte streng du ønsker at tilføje. For eksempel, vil {L_WROTE} blive vist som "wrote" på engelsk og "skrev" på dansk, afhængig af brugerens sprogvalg.<br /><br /><strong>Bemærk venligst at kun tokens listet nedenfor kan anvendes i brugerdefinerede BBkoder.</strong>',
	'TOKEN_DEFINITION'		=> 'Hvad kan det være?',
	'TOO_MANY_BBCODES'		=> 'Du kan ikke oprette flere BBkoder. Fjern venligst en eller flere BBkoder og prøv igen.',

	'tokens'	=>	array(
		'TEXT'			=> 'Enhver tekst, inklusive udenlandske bogstaver (bl.a. æ, ø og å), tal osv... TEXT bør ikke anvendes som token i HTML-tags. Brug i stedet IDENTIFIER eller SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Tegnene i det latinske alfabet (A-Z), tal, mellemrum, komma, punktum, minus, plus, bindestreg og underscore.',
		'IDENTIFIER'	=> 'Tegnene i det latinske alfabet (A-Z), tal, bindestreg og underscore.',
		'NUMBER'		=> 'Enhver serie cifre.',
		'EMAIL'			=> 'En gyldig emailadresse.',
		'URL'			=> 'En gyldig URL via enhver protokol (http, ftp, osv... kan ikke bruges til javascript exploits). Hvis intet angives tilføjes "http://" automatisk URL\'en.',
		'LOCAL_URL'		=> 'En lokal URL. URL\'en skal være relativ til emnesiden og kan ikke indeholde et servernavn eller protokol.',
		'COLOR'			=> 'En HTML-farve, kan angives i hexedecimal værdi <samp>#FF1234</samp> eller med et <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS farvenavn</a>, for eksempel <samp>fuchsia</samp> eller <samp>InactiveBorder</samp>.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Her kan du tilføje, fjerne og rette ikonerne som brugerne kan tilføje til deres emner eller indlæg. Disse ikoner vises generelt ved siden af emnetitler på forumoversigten, eller ved emnetitlerne i emnevisningerne. Du kan også installere og oprette nye ikonpakker.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies er typisk små, nogle gange animerede billeder der bruges til at give udtryk for en følelse eller mening. Fra denne side kan du tilføje, fjerne og rette de smilies som brugerne kan bruge i deres indlæg og private beskeder. Du kan også installere og oprette nye pakker med smilies.',
	'ADD_SMILIES'			=> 'Tilføj mange smilies',
	'ADD_SMILEY_CODE'		=> 'Tilføj yderligere smileykode',
	'ADD_ICONS'				=> 'Tilføj mange ikoner',
	'AFTER_ICONS'			=> 'Efter %s',
	'AFTER_SMILIES'			=> 'Efter %s',

	'CODE'						=> 'Kode',
	'CURRENT_ICONS'				=> 'Nuværende ikoner',
	'CURRENT_ICONS_EXPLAIN'		=> 'Vælg hvad der skal gøres ved de i øjeblikket installerede ikoner.',
	'CURRENT_SMILIES'			=> 'Nuværende smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Vælg hvad der skal gøres ved de i øjeblikket installerede smilies.',

	'DISPLAY_ON_POSTING'	=> 'Vis på siden hvor indlæg skrives',
	'DISPLAY_POSTING'	=> 'På siden hvor indlæg skrives',
	'DISPLAY_POSTING_NO'	=> 'Ikke på siden hvor indlæg skrives',

	'EDIT_ICONS'				=> 'Ret ikoner',
	'EDIT_SMILIES'				=> 'Ret smilies',
	'EMOTION'					=> 'Følelse',
	'EXPORT_ICONS'				=> 'Eksporter og download icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sVed at klikke på dette link, vil konfigurationen for dine installerede ikoner blive pakket i <samp>icons.pak</samp> som, når den er downloadet, kan bruges til at lave en <samp>.zip</samp> eller en <samp>.tgz</samp> fil, som indeholder alle dine ikoner, samt denne <samp>icons.pak</samp> konfigurationsfil%s.',
	'EXPORT_SMILIES'			=> 'Eksporter og download smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sVed at klikke på dette link, vil konfigurationen for dine installerede smilies blive pakket i <samp>smilies.pak</samp> som, når den er downloadet, kan bruges til at lave en <samp>.zip</samp> eller en <samp>.tgz</samp> fil, som indeholder alle dine smilies, samt denne <samp>smilies.pak</samp> konfigurationsfil%s.',

	'FIRST'			=> 'Først',

	'ICONS_ADD'				=> 'Tilføj et nyt ikon',
	'ICONS_NONE_ADDED'	=> 'Ingen ikoner blev tilføjet.',
	'ICONS_ONE_ADDED'		=> 'Ikonet er blevet korrekt tilføjet.',
	'ICONS_ADDED'			=> 'Ikonerne blev korrekt tilføjet.',
	'ICONS_CONFIG'			=> 'Ikonkonfiguration',
	'ICONS_DELETED'			=> 'Ikonet er blevet fjernet korrekt.',
	'ICONS_EDIT'			=> 'Ret ikon',
	'ICONS_ONE_EDITED'		=> 'Ikonet er korrekt opdateret.',
	'ICONS_NONE_EDITED'		=> 'Ingen ikoner blev opdateret.',
	'ICONS_EDITED'			=> 'Ikonerne er korrekt opdateret.',
	'ICONS_HEIGHT'			=> 'Ikonhøjde',
	'ICONS_IMAGE'			=> 'Ikonbillede',
	'ICONS_IMPORTED'		=> 'Ikonpakken blev korrekt installeret.',
	'ICONS_IMPORT_SUCCESS'	=> 'Ikonpakken blev korrekt importeret.',
	'ICONS_LOCATION'		=> 'Ikonets placering',
	'ICONS_NOT_DISPLAYED'	=> 'Følgende ikoner vises ikke på siden hvor indlæg skrives',
	'ICONS_ORDER'			=> 'Ikonorden',
	'ICONS_URL'				=> 'Ikon',
	'ICONS_WIDTH'			=> 'Ikonbredde',
	'IMPORT_ICONS'			=> 'Installer ikonpakke',
	'IMPORT_SMILIES'		=> 'Installer smiliespakke',

	'KEEP_ALL'			=> 'Behold alle',

	'MASS_ADD_SMILIES'	=> 'Tilføj mange smilies',

	'NO_ICONS_ADD'		=> 'Ingen ikoner tilgængelige for tilføjelse.',
	'NO_ICONS_EDIT'		=> 'Ingen ikoner tilgængelige for ændringer.',
	'NO_ICONS_EXPORT'	=> 'Du har ingen ikoner hvormed du kan oprette en pakke.',
	'NO_ICONS_PAK'		=> 'Ingen ikonpakker fundet.',
	'NO_SMILIES_ADD'	=> 'Ingen smilies tilgængelige for tilføjelse.',
	'NO_SMILIES_EDIT'	=> 'Ingen smilies tilgængelige for ændringer.',
	'NO_SMILIES_EXPORT'	=> 'Du har ingen smilies hvormed du kan oprette en pakke.',
	'NO_SMILIES_PAK'	=> 'Ingen smiliespakker fundet.',

	'PAK_FILE_NOT_READABLE'		=> 'Kunne ikke læse <samp>.pak</samp>-fil',

	'REPLACE_MATCHES'	=> 'Erstat matchende',

	'SELECT_PACKAGE'			=> 'Vælg en pakkefil',
	'SMILIES_ADD'				=> 'Tilføj en ny smiley',
	'SMILIES_NONE_ADDED'		=> 'Ingen smilies blev tilføjet.',
	'SMILIES_ONE_ADDED'			=> 'Smiley blev korrekt tilføjet.',
	'SMILIES_ADDED'				=> 'Smilies blev korrekt tilføjet.',
	'SMILIES_CODE'				=> 'Smileykode',
	'SMILIES_CONFIG'			=> 'Smileykonfiguration',
	'SMILIES_DELETED'			=> 'Smiley er korrekt fjernet.',
	'SMILIES_EDIT'				=> 'Ret smiley',
	'SMILIE_NO_CODE'			=> 'Smiley "%s" blev ignoreret, da ingen kode blev indtastet.',
	'SMILIE_NO_EMOTION'		=> 'Smiley "%s" blev ignoreret, da ingen følelse blev indtastet.',
	'SMILIES_NONE_EDITED'		=> 'Ingen smilies blev opdateret.',
	'SMILIES_ONE_EDITED'		=> 'Smiley blev korrekt opdateret.',
	'SMILIES_EDITED'			=> 'Smilies blev korrekt opdateret.',
	'SMILIES_EMOTION'			=> 'Følelse',
	'SMILIES_HEIGHT'			=> 'Smileyhøjde',
	'SMILIES_IMAGE'				=> 'Smileybillede',
	'SMILIES_IMPORTED'			=> 'Smiliespakken blev korrekt installeret.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Smiliespakken blev korrekt importeret.',
	'SMILIES_LOCATION'			=> 'Smileys placering',
	'SMILIES_NOT_DISPLAYED'		=> 'Følgende smilies vises ikke på siden hvor indlæg skrives',
	'SMILIES_ORDER'				=> 'Smileyorden',
	'SMILIES_URL'				=> 'Smiley',
	'SMILIES_WIDTH'				=> 'Smileybredde',

	'TOO_MANY_SMILIES'		=> 'Grænsen på %d smilies er nået.',

	'WRONG_PAK_TYPE'	=> 'Den specificerede pakke indeholder ikke de rigtige data.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Her kan du tilføje, rette og fjerne ord som automatisk skal censureres i dine fora. Brugere vil stadig kunne tilmelde sig med brugernavne indeholdende disse ord. (*) kan anvendes som ubekendt, f.eks. vil *test* matche detestable, test* ville matche testing, *test ville matche detest.',
	'ADD_WORD'				=> 'Tilføj nyt ord',

	'EDIT_WORD'		=> 'Ret ordcensor',
	'ENTER_WORD'	=> 'Du skal indtaste et ord og dets erstatning.',

	'NO_WORD'	=> 'Intet ord valgt til redigering.',

	'REPLACEMENT'	=> 'Erstatning',

	'UPDATE_WORD'	=> 'Opdater ordcensor',

	'WORD'				=> 'Ord',
	'WORD_ADDED'		=> 'Ordcensoren er korrekt tilføjet.',
	'WORD_REMOVED'		=> 'Den valgte ordcensor er blevet korrekt slettet.',
	'WORD_UPDATED'		=> 'Den valgte ordcensor er blevet korrekt opdateret.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Ved hjælp af denne formular kan du tilføje, rette, se og slette rang. Du kan også oprette og definere dine egne rang, som tilføjes en bruger via brugeradministrationen.',
	'ADD_RANK'				=> 'Tilføj ny rang',

	'MUST_SELECT_RANK'		=> 'Du skal vælge en rang.',

	'NO_ASSIGNED_RANK'		=> 'Ingen speciel rang valgt.',
	'NO_RANK_TITLE'			=> 'Du har ikke specificeret en titel for denne rang.',
	'NO_UPDATE_RANKS'		=> 'Denne rang blev korrekt slettet. Brugerkonti med denne rang er dog ikke blevet opdateret. Du skal manuelt nulstille rang for disse konti.',

	'RANK_ADDED'			=> 'Denne rang blev korrekt tilføjet.',
	'RANK_IMAGE'			=> 'Rangbillede',
	'RANK_IMAGE_EXPLAIN'	=> 'Brug dette til at definere et lille billede associeret med den pågældende rang. Stien er relativ til phpBB-rodmappen.',
	'RANK_IMAGE_IN_USE' => '(i brug)',
	'RANK_MINIMUM'			=> 'Minimum antal indlæg',
	'RANK_REMOVED'			=> 'Denne rang blev korrekt slettet.',
	'RANK_SPECIAL'			=> 'Sæt som speciel rang',
	'RANK_TITLE'			=> 'Rangtitel',
	'RANK_UPDATED'			=> 'Denne rang blev korrekt opdateret.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Herfra kan du administrere hvilke brugernavne det ikke er tilladt at bruge. I definitionen af brugernavne kan anvendes (*) som ubekendt. Bemærk venligst at du ikke kan angive brugernavne som allerede er oprettede, du må først slette den pågældende bruger og derefter tilføje afvisning af brugernavnet.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Du kan udvide antallet af brugernavne, som ikke er tilladte, ved at bruge (*) som ubekendt, for at matche ethvert tegn.',
	'ADD_DISALLOW_TITLE'	=> 'Tilføj afvisning af brugernavn',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Du kan fjerne brugernavnes afvisning ved at vælge disse i nedenstående oversigt og klikke på udfør.',
	'DELETE_DISALLOW_TITLE'		=> 'Fjern afvisning af brugernavn',
	'DISALLOWED_ALREADY'		=> 'Det angivne brugernavn kunne ikke afvises. Det findes enten allerede i listen, i ordcensorlisten, eller et matchende brugernavn er allerede oprettet.',
	'DISALLOWED_DELETED'		=> 'Afviste brugernavne er korrekt fjernet.',
	'DISALLOW_SUCCESSFUL'		=> 'Afvisning af brugernavn er korrekt tilføjet.',

	'NO_DISALLOWED'				=> 'Der er ingen afviste brugernavne på boardet',
	'NO_USERNAME_SPECIFIED'		=> 'Brugernavn er enten ikke angivet eller valgt.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Her administreres baggrunde for rapportering og afvisning af indlæg. Standardmeddelelsen (markeret med *) kan ikke slettes. Denne anvendes til at skrive egne begrundelser, når indlæggets karakter ikke kan beskrives med de prædefinerede.',
	'ADD_NEW_REASON'		=> 'Tilføj ny årsag',
	'AVAILABLE_TITLES'		=> 'Oversatte årsager i valgt sprogpakke',

	'IS_NOT_TRANSLATED'		=> 'Årsag er <strong>ikke</strong> blevet oversat',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Årsag er <strong>ikke</strong> oversat. Hvis du ønsker at tilføje en oversættelse af årsagen for de sprog der er installeret på boardet, tilføjes titel og årsag nederst i sprogfilen mcp.php for hver af de installerede sprogpakker.',
	'IS_TRANSLATED'			=> 'Årsag er blevet oversat',
	'IS_TRANSLATED_EXPLAIN'	=> 'Årsag er oversat, den angivne titel er tilstede i sprogfilen mcp.php. Denne oversættelse overskriver eventuel titel og beskrivelse angivet her.',

	'NO_REASON'					=> 'Årsag kunne ikke findes.',
	'NO_REASON_INFO'			=> 'Du skal angive en titel og en beskrivelse for denne årsag.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Du kan ikke fjerne årsagen "Andet", som er standard.',

	'REASON_ADD'			=> 'Tilføj rapport- og afvisningsårsag',
	'REASON_ADDED'			=> 'Rapport- og afvisningsårsag korrekt tilføjet.',
	'REASON_ALREADY_EXIST'	=> 'En årsag med denne titel findes allerede, indtast venligst en anden titel for denne årsag.',
	'REASON_DESCRIPTION'	=> 'Årsagsbeskrivelse',
	'REASON_DESC_TRANSLATED'	=> 'Vist årsagsbeskrivelse',
	'REASON_EDIT'			=> 'Rediger rapport- og afvisningsårsag',
	'REASON_EDIT_EXPLAIN'	=> 'Her kan du tilføje eller rette en årsag. Hvis årsagen er oversat bruges den lokale version i stedet for den her indtastede beskrivelse.',
	'REASON_REMOVED'		=> 'Rapport- og afvisningsårsag korrekt fjernet.',
	'REASON_TITLE'			=> 'Årsagstitel',
	'REASON_TITLE_TRANSLATED'	=> 'Vist årsagstitel',
	'REASON_UPDATED'		=> 'Rapport- og afvisningsårsag korrekt opdateret',

	'USED_IN_REPORTS'		=> 'Brugt i rapporter',
));

?>