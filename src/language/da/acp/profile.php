<?php
/**
*
* acp_profile [Danish]
*
* @package language
* @version Id: profile.php 9916 2009-08-03 15:46:56Z Kellanved $ 
* @version $Id: profile.php,v 1.10 2009/08/27 11:09:02 jansk Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Tilpasset profilfelt tilføjet.',
	'ALPHA_ONLY'			=> 'Kun alfanumerisk',
	'ALPHA_SPACERS'			=> 'Alfanumerisk og mellemrum',
	'ALWAYS_TODAY'			=> 'Altid nuværende dato',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Indtast dine indstillinger nu',
	'BOOL_TYPE_EXPLAIN'		=> 'Definer typen, enten et afkrydsningsfelt eller radioknapper. Afkrydsningsfeltet vises kun hvis det er afkrydset for en given bruger, og her vil den <strong>anden</strong> sprogindstilling blive anvendt. Radioknapper vises under alle omstændigheder.',

	'CHANGED_PROFILE_FIELD'		=> 'Korrekt ændret profilfelt.',
	'CHARS_ANY'					=> 'Ethvert tegn',
	'CHECKBOX'					=> 'Afkrydsningsfelt',
	'COLUMNS'					=> 'Kolonner',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standardværdi',
	'CP_LANG_EXPLAIN'			=> 'Feltbeskrivelse',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Forklaringen på feltet som den vises til brugere.',
	'CP_LANG_NAME'				=> 'Feltnavn eller -titel som brugeren præsenteres for',
	'CP_LANG_OPTIONS'			=> 'Indstillinger',
	'CREATE_NEW_FIELD'			=> 'Opret nyt felt',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Mindst et tilføjet felt mangler at blive oversat. Angiv venligst den nødvendige information ved at klikke på linket "Oversæt".',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standardsprog [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Sprogindstillinger for standardsprog er ikke udfyldt for dette profilfelt.',
	'DEFAULT_VALUE'					=> 'Standardværdi',
	'DELETE_PROFILE_FIELD'			=> 'Fjern profilfelt',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Er du sikker på at du vil slette dette profilfelt?',
	'DISPLAY_AT_PROFILE'			=> 'Vis i brugerkontrolpanel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Brugere kan ændre i profilfeltet via brugerkontrolpanelet.',
	'DISPLAY_AT_REGISTER'			=> 'Vis på tilmeldingsskærmbilledet',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Afmærk boksen for at vise feltet på tilmeldingskærmbilledet.',
	'DISPLAY_ON_VT'					=> 'Vis når emne læses',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Feltet vises i profilfeltet ved siden af indlægget.',
	'DISPLAY_PROFILE_FIELD'			=> 'Vis profilfelt offentligt',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profilfeltet vises på alle sider valgt under "Belastning". Vælges "Nej" her, vises feltet ikke på emnesider, profiler og liste over tilmeldte brugere.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Indtast nu valgmulighederne, hver mulighed på en separat linie.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Bemærk at du kan ændre teksterne og tilføje nye muligheder til enden af listen senere. Det frarådes at tilføje nye muligheder midt i listen af muligheder - det kan resultere i at forkerte indstillinger tildeles til brugerne. Hvis du fjerner muligheder midt i listen kan det samme ske. Ved fjernelse af muligheder fra enden af listen vil brugere med disse indstillinger i stedet få tildelt standardværdien.',
	'EMPTY_FIELD_IDENT'				=> 'Tom feltidentifikation',
	'EMPTY_USER_FIELD_NAME'			=> 'Indtast venligst et feltnavn eller -titel',
	'ENTRIES'						=> 'Linier',
	'EVERYTHING_OK'					=> 'Alt OK',

	'FIELD_BOOL'				=> 'Boolsk udtryk(ja/nej)',
	'FIELD_DATE'				=> 'Dato',
	'FIELD_DESCRIPTION'			=> 'Feltbeskrivelse',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Forklaringen på feltet som den vises til brugere.',
	'FIELD_DROPDOWN'			=> 'Dropdownmenu',
	'FIELD_IDENT'				=> 'Feltidentifikation',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Den valgte feltidenfikation eksisterer allerede. Vælg venligst et andet navn.',
	'FIELD_IDENT_EXPLAIN'		=> 'Feltidentifikationen er et entydigt navn til at identificere profilfeltet i databasen og i skabeloner.',
	'FIELD_INT'					=> 'Tal',
	'FIELD_LENGTH'				=> 'Længde på indtastningsfelt',
	'FIELD_NOT_FOUND'			=> 'Profilfelt ikke fundet.',
	'FIELD_STRING'				=> 'Enkelt tekstfelt',
	'FIELD_TEXT'				=> 'Tekstområde',
	'FIELD_TYPE'				=> 'Felttype',
	'FIELD_TYPE_EXPLAIN'		=> 'Du kan ikke skifte felttypen senere.',
	'FIELD_VALIDATION'			=> 'Feltvalidering',
	'FIRST_OPTION'				=> 'Første mulighed',

	'HIDE_PROFILE_FIELD'			=> 'Skjul profilfelt',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Feltet kan kun ses af brugeren, administratorer og redaktører. Er "Vis i brugerkontrolpanel" fravalgt, kan brugeren ikke se eller ændre i feltet. Feltet vil kun kunne ændres af administratorer.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Feltidentifikation kan kun indeholde a-z (ikke æ, ø og å) med små bogstaver og _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Feltidentifikationen må ikke overstige 17 tegn',
	'ISO_LANGUAGE'				=> 'Sprog [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Sprogspecifikke indstillinger [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maksimalt antal tegn',
	'MAX_FIELD_NUMBER'		=> 'Højeste tilladte tal',
	'MIN_FIELD_CHARS'		=> 'Minimum antal tegn',
	'MIN_FIELD_NUMBER'		=> 'Lavest tilladte tal',

	'NO_FIELD_ENTRIES'			=> 'Ingen valgmuligheder defineret.',
	'NO_FIELD_ID'				=> 'Intet felt-ID angivet.',
	'NO_FIELD_TYPE'				=> 'Ingen felttype angivet.',
	'NO_VALUE_OPTION'			=> 'Værdi svarende til intet foretaget valg',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Kræves feltet udfyldt, får brugere en fejlmeddelelse, ved dette valg.',
	'NUMBERS_ONLY'				=> 'Kun tal (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Basisindstillinger',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profilfelt aktiveret.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profilfelt deaktiveret',
	'PROFILE_LANG_OPTIONS'		=> 'Sproglige definitioner',
	'PROFILE_TYPE_OPTIONS'		=> 'Indstillinger for felttype',

	'RADIO_BUTTONS'				=> 'Radioknapper',
	'REMOVED_PROFILE_FIELD'		=> 'Profilfelt fjernet.',
	'REQUIRED_FIELD'			=> 'Krævet felt',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Profilfeltet forlanges udfyldt eller at der foretages valg af bruger eller administrator. Er "Vis på tilmeldingsskærmbilledet" fravalgt forlanges feltet udfyldt når brugere ændrer i profilinformationer.',
	'ROWS'						=> 'Rækker',

	'SAVE'							=> 'Gem',
	'SECOND_OPTION'					=> 'Anden indstilling',
	'STEP_1_EXPLAIN_CREATE'			=> 'Her kan du indtaste de første grundlæggende parametre for dit nye profilfelt. Denne information er nødvendig for det næste trin, hvor du kan sætte de resterende indstillinger og tilpasse profilfeltet yderligere.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Her kan du ændre basisparametrene for dit profilfelt. De relevante indstillinger genberegnes i andet trin.',
	'STEP_1_TITLE_CREATE'			=> 'Tilføj profilfelt',
	'STEP_1_TITLE_EDIT'				=> 'Rediger profilfelt',
	'STEP_2_EXPLAIN_CREATE'			=> 'Her kan du definere nogle generelle indstillinger, som du har mulighed for at ændre på.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Her kan du ændre nogle generelle indstillinger.<br /><strong>Bemærk venligst, at ændringer i profilfelter ikke påvirker eksisterende profilfelter allerede indtastet af dine brugere.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Indstillinger for felttype',
	'STEP_2_TITLE_EDIT'				=> 'Indstillinger for felttype',
	'STEP_3_EXPLAIN_CREATE'			=> 'Da du har mere end et sprog installeret, skal du også udfylde de manglende sproglinier. Profilfeltet vil virke med det valgte standardsprog, så du kan også udfylde de resterende sproglinier senere.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Da du har mere end et sprog installeret, kan du nu også ændre eller tilføje de tilbageværende sproglinier. Profilfeltet vil virke med boardets standardsprog.',
	'STEP_3_TITLE_CREATE'			=> 'Tilbageværende sprogdefinitioner',
	'STEP_3_TITLE_EDIT'				=> 'Sprogdefinitioner',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Indtast en standardfrase der skal vises, en standardværdi. Lad feltet være tomt, hvis du vil vise det som tomt som udgangspunkt.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Indtast en standardtekst der skal vises, en standardværdi. Lad feltet være tomt, hvis du vil vise det som tomt som udgangspunkt.',
	'TRANSLATE'						=> 'Oversæt',

	'USER_FIELD_NAME'	=> 'Feltnavn som brugere ser det',

	'VISIBILITY_OPTION'				=> 'Synlighedsindstillinger',
));

?>