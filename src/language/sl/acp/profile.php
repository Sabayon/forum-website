<?php
/**
*
* acp_profile.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-11-28 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB, Legoless
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
	'DISPLAY_ON_VT'	=> 'Prikaži na ogledu teme',
	'DISPLAY_ON_VT_EXPLAIN'	=> 'Če omogočite to možnost, bo polje prikazano v mini profilu na prikazu teme.',
	'ADDED_PROFILE_FIELD'	=> 'Uporabniško polje je bilo uspešno dodano.',
	'ALPHA_ONLY'	=> 'Samo alfanumerični znaki',
	'ALPHA_SPACERS'	=> 'Alfanumerični znaki in presledki',
	'ALWAYS_TODAY'	=> 'Vedno današnji datum',
	'BOOL_ENTRIES_EXPLAIN'	=> 'Vnesi svoje možnosti',
	'BOOL_TYPE_EXPLAIN'	=> 'Definiraj tip - potrditvena polja ali radijski gumbi. Vsebina potrditvenega polja bo prikazano le, če ga je uporabnik potrdil. Vsebina radijskega gumba bo vedno prikazana.',
	'CHANGED_PROFILE_FIELD'	=> 'Uporabniško polje je bilo uspešno spremenjeno.',
	'CHARS_ANY'	=> 'Dodaj znak',
	'CHECKBOX'	=> 'Potrditveno polje',
	'COLUMNS'	=> 'Stolpcev',
	'CP_LANG_DEFAULT_VALUE'	=> 'Privzeta vrednost',
	'CP_LANG_EXPLAIN'	=> 'Opis polja',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Opis polja, ki ga vidi uporabnik.',
	'CP_LANG_NAME'	=> 'Ime polja, ki ga vidi uporabnik',
	'CP_LANG_OPTIONS'	=> 'Možnosti',
	'CREATE_NEW_FIELD'	=> 'Dodaj novo polje',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Vsaj eno izmed uporabniških polj še ni bilo prevedeno. Prosim, vnesi potrebne informacije s klikom na gumb "Prevedi"',
	'DEFAULT_ISO_LANGUAGE'	=> 'Privzet jezik [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Jezikovni vnosi za to polje niso bili vnešeni v privzetem jeziku.',
	'DEFAULT_VALUE'	=> 'Privzeta vrednost',
	'DELETE_PROFILE_FIELD'	=> 'Odstrani uporabniško polje',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Ali želiš res odstraniti uporabniško polje ?',
	'DISPLAY_AT_PROFILE'	=> 'Prikaži v uporabniški nadzorni plošči',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Uporabnik lahko spreminja vrednost tega polja v uporabniški nadzorni plošči.',
	'DISPLAY_AT_REGISTER'	=> 'Prikaži ob registraciji',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Če je ta možnost omogočena, se bo polje prikazalo že ob registraciji in bo kasneje tudi vidno v uporabniški nadzorni plošči.',
	'DISPLAY_PROFILE_FIELD'	=> 'Prikaži uporabniško polje',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Uporabniško polje bo prikazano na vseh mestih, kjer mu bo omogočeno. Če je nastavitev nastavljena na "ne", bo polje skrito na vseh mestih - pregled teme, uporabniška nadzorna plošča in seznam uporabnikov.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Vnesi možnosti, vsako v svojo vrsto.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Tukaj lahko urejaš besedila možnosti, lahko pa tudi dodajaš nove. Priporočljivo je, da nove možnosti dodaš na konec in da obstoječim možnostim ne spreminjaš vrstnega reda. Odstranjevanje vmesnih možnosti tudi ni priporočljivo..',
	'EMPTY_FIELD_IDENT'	=> 'Oznaka praznega polja',
	'EMPTY_USER_FIELD_NAME'	=> 'Vnesi ime polja',
	'ENTRIES'	=> 'Vnosi',
	'EVERYTHING_OK'	=> 'Vse v redu',
	'FIELD_BOOL'	=> 'Polje Da / Ne',
	'FIELD_DATE'	=> 'Datum',
	'FIELD_DESCRIPTION'	=> 'Opis polja',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Opis za polje, ki bo viden uporabniku.',
	'FIELD_DROPDOWN'	=> 'Spustni meni',
	'FIELD_IDENT'	=> 'Identifikacija polja',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Identifikacija polja že obstaja. Prosim, izberi drugo.',
	'FIELD_IDENT_EXPLAIN'	=> 'Identifikacija polja je ime polja, s katerim se polje identificira v bazi podatkov in v stilu.',
	'FIELD_INT'	=> 'Števila',
	'FIELD_LENGTH'	=> 'Dolžina vnosnega polja',
	'FIELD_NOT_FOUND'	=> 'Uporabniško polje ni najdeno.',
	'FIELD_STRING'	=> 'Znakovno polje',
	'FIELD_TEXT'	=> 'Besedilni okvir',
	'FIELD_TYPE'	=> 'Tip polja',
	'FIELD_TYPE_EXPLAIN'	=> 'Tipa polja kasneje ne moreš urejati.',
	'FIELD_VALIDATION'	=> 'Potrditev polja',
	'FIRST_OPTION'	=> 'Prva možnost',
	'HIDE_PROFILE_FIELD'	=> 'Skrij uporabniško polje',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Samo administratorji in moderatorji lahko vidijo to uporabniško polje. Če je ta možnost vključena, bo uporabniško polje prikazano le na uporabnikovem profilu.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Identifikacija polja lahko vsebuje le male črke (a-z) ter podčrtaj (_)',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identifikacija polja je lahko dolga največ 17 znakov.',
	'ISO_LANGUAGE'	=> 'Jezik [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'Specifične možnosti za jezik [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'Največ znakov',
	'MAX_FIELD_NUMBER'	=> 'Največje dovoljeno število',
	'MIN_FIELD_CHARS'	=> 'Najmanj znakov',
	'MIN_FIELD_NUMBER'	=> 'Najmanjše dovoljeno število',
	'NO_FIELD_ENTRIES'	=> 'Noben vnos ni bil definiran',
	'NO_FIELD_ID'	=> 'Noben ID polja ni bil definiran.',
	'NO_FIELD_TYPE'	=> 'Noben tip polja ni bil izbran.',
	'NO_VALUE_OPTION'	=> 'Možnost enaka nevnešeni vrenosti',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Vrednost kadar ni vnosa. Če je polje zahtevano, uporabnik naleti na napako, če vnese tukaj izbrano možnost.',
	'NUMBERS_ONLY'	=> 'Samo številke (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'Splošne možnosti',
	'PROFILE_FIELD_ACTIVATED'	=> 'Uporabniško polje uspešno aktivirano.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Uporabniško polje uspešno deaktivirano.',
	'PROFILE_LANG_OPTIONS'	=> 'Možnosti glede na jezik',
	'PROFILE_TYPE_OPTIONS'	=> 'Možnosti glede na tip profila',
	'RADIO_BUTTONS'	=> 'Radijski gumbi',
	'REMOVED_PROFILE_FIELD'	=> 'Uporabniško polje uspešno odstranjeno.',
	'REQUIRED_FIELD'	=> 'Zahtevano polje',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Zahtevaj od uporabnika, da izpolni določeno polje. Če je ta možnost izbrana, bo polje prikazano ob registraciji in v uporabniški nadzorni plošči.',
	'ROWS'	=> 'Vrstic',
	'SAVE'	=> 'Shrani',
	'SECOND_OPTION'	=> 'Druga možnost',
	'STEP_1_EXPLAIN_CREATE'	=> 'Tu lahko vneseš prve osnovne parametre novega uporabniškega polja. Te informacije so potrebne za nadaljevanje na drugi korak, v katerem nastaviš preostale možnosti uporabniškega polja.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Tu lahko spremeniš osnovne parametre uporabniškega polja. Pomembne možnosti so prekalibrirane na drugem koraku.',
	'STEP_1_TITLE_CREATE'	=> 'Dodaj uporabniško polje',
	'STEP_1_TITLE_EDIT'	=> 'Uredi uporabniško polje',
	'STEP_2_EXPLAIN_CREATE'	=> 'Tu lahko definiraš splošne možnosti, ki jih lahko urejaš.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Tu lahko spremeniš nekatere splošne možnosti.<br /><strong>Spremembe pri urejanju uporabniškega polja ne bodo vplivale na obsoječa uporabniško spremenjena polja.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Možnosti glede na tip profila',
	'STEP_2_TITLE_EDIT'	=> 'Možnosti glede na tip profila',
	'STEP_3_EXPLAIN_CREATE'	=> 'Ker imaš nameščen več kot en jezik, moraš vnesti še preostale možnost. Te vrednosti bodo uporabljene za privzet uporabljen jezik. Možnosti za ostale jezike lahko urejaš kasneje.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Ker imaš nameščen več kot en jezik, moraš vnesti še preostale možnost. Te vrednosti bodo uporabljene za privzet uporabljen jezik.',
	'STEP_3_TITLE_CREATE'	=> 'Možnosti za ostale jezike',
	'STEP_3_TITLE_EDIT'	=> 'Jezikovne možnosti',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vnesi privzeto vrednost, ki naj bo prikazana. Če ne želiš, da se vrednost prikaže, je ne izpolni.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vnesi privzeto vrednost, ki naj bo prikazana. Če ne želiš, da se vrednost prikaže, je ne izpolni.',
	'TRANSLATE'	=> 'Prevedi',
	'USER_FIELD_NAME'	=> 'Ime uporabniškega polja, kot ga vidi uporabnik',
	'VISIBILITY_OPTION'	=> 'Vidnost',
));

?>