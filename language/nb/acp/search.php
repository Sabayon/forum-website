<?php
/**
*
* acp_search [English]
*
* @package language
* @version $Id: search.php,v 1.19 2007/04/28 21:16:31 naderman Exp $
* @copyright (c) 2005 phpBB Group
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
  'ACP_SEARCH_INDEX_EXPLAIN'        => 'Her kan du endre og vedlikeholde søk i søkemotorens indeks. Da du normalt kun bruker en motor bør alle indeks du ikke bruker slettes. Etter endring i søkeinnstillingene (f.eks. antall av minimum og maksimum antall tegn), kan det være lurt å vurdere en tilbakestilling av indekset, for å kunne se disse endringene.',
  'ACP_SEARCH_SETTINGS_EXPLAIN'      => 'Her defineres hvilke metoder søkemotoren skal bruke for å indeksere innlegg og utføre søk. Du kan definere flere muligheter som påvirker hvor mye behandling de enkelte søk krever. Noen av innstillingerne er identiske for alle søkemotorer.',

  'COMMON_WORD_THRESHOLD'          => 'Grensen for definisjon av et allment ord',
  'COMMON_WORD_THRESHOLD_EXPLAIN'      => 'Hvis et ord inneholder i en større prosentdel av alle innlegg enn det her oppgis, betraktes det som et allment ord som ignoreres i søket. Grensen deaktiveres med 0. Virker først når det er over 100 innlegg å søke på.',
  'CONFIRM_SEARCH_BACKEND'        => 'Er du sikker på at du vil skifte til en annen søkemotor? Når du har skiftet til en ny søkemotor, er du nødt til å opprette et nytt indeks til denne. Hvis ikke du har planer om å skifte tilbake til den tidligere brukte søkemotor, kan du med fordel slette denne indeks, det vil frigjøre systemresurser.',
  'CONTINUE_DELETING_INDEX'        => 'Fortsett den tidligere startede sletteprosess av søkeindeksen',
  'CONTINUE_DELETING_INDEX_EXPLAIN'    => 'Det er blitt startet en sletteprosess for et indeks. For å kunne gå til søkeindekssiden igjen, skal denne prosessen fullføres eller avbrytes.',
  'CONTINUE_INDEXING'            => 'Fortsett tidligere indekseringsprosess',
  'CONTINUE_INDEXING_EXPLAIN'        => 'Der er blitt startet en indekseringsprosess. For å kunne gå til søkeindekssiden igjen, skal denne prosessen fullføres eller avbrytes.',
  'CREATE_INDEX'              => 'Opprett index',

  'DELETE_INDEX'              => 'Slett index',
  'DELETING_INDEX_IN_PROGRESS'      => 'Sletting av index er i gang',
  'DELETING_INDEX_IN_PROGRESS_EXPLAIN'  => 'Søkemotoren er er i ferd med å slette index. Det kan ta noen minutter.',

  'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'  => 'MySQL\'s fulltekstsøkemotoren kan kun brukes fra MySQL4 og nyere.',
  'FULLTEXT_MYSQL_NOT_MYISAM'        => 'MySQL\'s fulltekstindekseringen kan kun brukes sammen med MyISAM-tabeller.',
  'FULLTEXT_MYSQL_TOTAL_POSTS'      => 'Det totale antall indekserete innlegg',
  'FULLTEXT_MYSQL_MBSTRING'        => 'Støtter UTF-8-tegnsett under mbstring:',
  'FULLTEXT_MYSQL_PCRE'          => 'Støtter UTF-8-tegnsett under PCRE:',
  'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'    => 'Hvis PCRE ikke har unicode-tegnegenskaper, vil søkemotoren forsøke å bruke mbstring\'s almindelige tegnegenskaper.',
  'FULLTEXT_MYSQL_PCRE_EXPLAIN'      => 'Denne søkemotoren krever PCRE unicode-tegnegenskaper, som kun er tilgjengelig i PHP 4.4, 5.1 og over, hvis du ønsker å søke med unicode UTF-8-tegn.',

  'GENERAL_SEARCH_SETTINGS'        => 'Generelle søke innstillinger',
  'GO_TO_SEARCH_INDEX'          => 'Gå til søkeindekssiden',

  'INDEX_STATS'              => 'Indeksstatistikker',
  'INDEXING_IN_PROGRESS'          => 'Indeksering pågår',
  'INDEXING_IN_PROGRESS_EXPLAIN'      => 'Søkemotoren er i ferd med å indeksere alle innlegg på forumet. Dette kan ta fra noen få minutter til flere timer avhengig av forumets størrelse.',

  'LIMIT_SEARCH_LOAD'            => 'Grensen for søk belastning av systemet',
  'LIMIT_SEARCH_LOAD_EXPLAIN'        => 'Hvis systemets belastning overskrider denne verdi i mer enn 1 minutt, så vil søkesiden gå offline, 1.0 svarer til ~100% belastning av en prosessor. Denne funksjonen virker kun på UNIX-baserete servere.',

  'MAX_SEARCH_CHARS'            => 'Maks antall tegn for indeksering til søk',
  'MAX_SEARCH_CHARS_EXPLAIN'        => 'Ord på høyest antall tegn vil bli indeksert til bruk i søk.',
  
	'MAX_NUM_SEARCH_KEYWORDS'            => 'Antall tillatte søkeord',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => 'Det maksimale antallet ord en bruker kan søke etter. Verdien 0 tillater ubegrenset antall ord.',
	
  'MIN_SEARCH_CHARS'            => 'Minimalt antall tegn for indeksering til søk',
  'MIN_SEARCH_CHARS_EXPLAIN'        => 'Ord på minst dette antall tegn vil bli indekseret til bruk i søk.',
  'MIN_SEARCH_AUTHOR_CHARS'        => 'Minste antall tegn i forfatternavn',
  'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'    => 'Brukere skal angi minst dette antall tegn i navnet, for å utføre et søk etter forfatter ved bruken av (*) som ubekjent. Hvis forfatterens brukernavn er kortere enn dette antall tegn, kan det søkes etter dennes innlegg ved å angi forfatterens fulle brukernavn.',

  'PROGRESS_BAR'              => 'Statuslinje',

  'SEARCH_GUEST_INTERVAL'          => 'Gjesters søkeinterval',
  'SEARCH_GUEST_INTERVAL_EXPLAIN'      => 'Antall sekunder en gjest må vente mellom hvert søk. Hvis en gjest søker, må alle andre gjester vente til dette tidsintervalet er overskredet.',
  'SEARCH_INDEX_CREATE_REDIRECT'      => 'Alle innlegg til og med innlegs-ID %1$d er blitt indeksert, hvorav %2$d innlegg i dette trinn.<br />I øyeblikket indekseres ca. %3$.1f innlegg i sekundet<br />Indeksering pågår ...',
  'SEARCH_INDEX_DELETE_REDIRECT'      => 'Alle innlegg til og med innlegg %1$d er blitt fjernet fra søkeindeksen.<br />I gang med fjerning av innlegg ...',
  'SEARCH_INDEX_CREATED'          => 'Alle forumets innlegg er nå indeksert.',
  'SEARCH_INDEX_REMOVED'          => 'Søkemotorens søkeindeks er nå slettet.',
  'SEARCH_INTERVAL'            => 'Brukeres søkeinterval',
  'SEARCH_INTERVAL_EXPLAIN'        => 'Antall sekunder en bruker må vente mellem hvert søk. Intervallet kontrolleres individuelt pr. bruker.',
  'SEARCH_STORE_RESULTS'          => 'Antall sekunder søkets infokapsler(Cache) opprettholdes',
  'SEARCH_STORE_RESULTS_EXPLAIN'      => 'Informasjonskapsler i søkeresultater slettes etter dette tidsintervalet i sekunder. Settes til 0 hvis du ønsker å deaktivere søkets infokapsler.',
  'SEARCH_TYPE'              => 'Valg av søkemotor',
  'SEARCH_TYPE_EXPLAIN'          => 'phpBB gir mulighet til å velge den søkemotor som brukes til å søke i innleggstekster. I standardinnstillingen brukes phpBB\'s innebyggde fulltekstsøk.',
  'SWITCHED_SEARCH_BACKEND'        => 'Du har skiftet søkemotor. For å bruke den nye motoren, må du forsikre deg at denne har en indeks.',

  'TOTAL_WORDS'              => 'Antall indekserte ord i alt',
  'TOTAL_MATCHES'              => 'Antall indekserte ord i innlegg i alt',

  'YES_SEARCH'              => 'Aktiver søk',
  'YES_SEARCH_EXPLAIN'          => 'Aktiverer brukerflaten som gir søke mulighet, inklusiv brukersøk.',
  'YES_SEARCH_UPDATE'            => 'Aktiver fulltekst oppdatering',
  'YES_SEARCH_UPDATE_EXPLAIN'        => 'Oppdatering av fulltekst indeksen når det skrives nye innlegg, ignoreres hvis søkefasiliteter er deaktivert.',
));

?>