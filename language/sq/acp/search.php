<?php
/**
*
* acp_search.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-07 - www.dea-portal.com
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Këtu ju mund të menaxhoni indekset e motorrit të kërkimit. Meqënëse ju përdorni një motor kërkimi, duhet të fshini të gjithë indekset të cilët ju nuk përdorni. Pas ndryshimit të disa opsioneve të kërkimit (p.sh. numri minimal/maksimal i karaktereve) do të jetë mirë rikrijimi i indeksit, në mënyrë që të njohë ndryshimet.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Këtu mund të përcaktoni motorrin e kërkimit për indeksimin e postimeve dhe kryerjen e kërkimeve. Ju mund të vendosni opsione të ndryshme që influencojnë proçesin që i duhet kërkimit. Disa nga këto opsione janë të njëjtë për të gjithë motorrët e kërkimit.',
	
	'COMMON_WORD_THRESHOLD'					=> 'Kufiri i fjalëve të zakonshme',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Fjalët që përmbahen në përqindjen më të lartë të postimeve do të caktohen si të zakonshme. Fjalët e zakonshme injorohen në kërkime. Vendos 0 për të ç\'aktivizuar. Merr efekt vetëm nëse janë më shumë se 100 postime. Nëse doni që fjalë momentalisht të cilësuara si të zakonshme, të merren në konsideratë,ju duhet të rikrijoni indeksin.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Jeni i sigurt që doni të ndryshoni motorrin e kërkimit? Pas ndryshimit të motorrit të kërkimit, do t\'ju duhet të krijoni një indeks për motorrin e ri të kërkimit. Nëse nuk keni në plan të ktheheni tek motorri i vjetër i kërkimit, ju mund të fshini indeksin e tij për të liruar resorset e sistemit.',
	'CONTINUE_DELETING_INDEX'				=> 'Vazhdo heqjen e indeksit të mëparshëm',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Një proçes fshirje indeksi është nisur. Në mënyrë që të keni akses në faqen e indeksit, ju duhet të mbaroni proçesin ose t\'a anulloni ate.',
	'CONTINUE_INDEXING'						=> 'Vazhdo proçesin e mëparshëm të indeksimit',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Një proçes indeksimi është nisur. Në mënyrë që të keni akses në faqen e indeksit, ju duhet të mbaroni proçesin ose t\'a anulloni atë.',
	'CREATE_INDEX'							=> 'Krijo indeks',
	
	'DELETE_INDEX'							=> 'Fshi indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Fshirja e indeksit në proçes',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Motorri i kërkimit momentalisht po pastron indeksin e tij. Ky proçes mund të zgjasë disa minuta.',
	
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Motorri i kërkimit të tekstit të plotë MySQL mund të përdoret vetëm me MySQL4 ose më të re.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Indekset tekst i plotë MySQL mund të përdoren vetëm me tabela MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Numri total i postimeve të indeksuara',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suport për karakteret jo latine UTF-8 duke përdorur mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suport për karakteret jo latine UTF-8 duke përdorur PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Nëse PCRE nuk ka të dhënat e karaktereve unikod, motorri i kërkimit do të mundohet të përdorë mekanizmin e shprehjeve të rregullta mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Motorri i kërkimit kërkon të dhënat e karaktereve unikod PCRE, të mundshme vetëm në PHP 4.4, 5.1 dhe më të re, nëse doni të kërkoni për karaktere jo latine.',
	
	'GENERAL_SEARCH_SETTINGS'				=> 'Opsionet gjenerale të kërkimit',
	'GO_TO_SEARCH_INDEX'					=> 'Shko tek faqja indeks e kërkimit',
	
	'INDEX_STATS'							=> 'Statistikat e indeksit',
	'INDEXING_IN_PROGRESS'					=> 'Indeksimi në progres',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Motorri i kërkimit momentalisht po indekson të gjithë postimet në bord. Ky proçes mund të zgjasë nga disa minuta në disa orë në varësi të madhësisë së bordit tuaj.',
	
	'LIMIT_SEARCH_LOAD'						=> 'Limiti i karkimit të sistemit për kërkim faqe',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Nëse karikimi i sistemit kalon me një minutë këtë vlerë faqja e kërkimit do të ç\'aktivizohet, 1.0 e barabartë me ~100% përdorim i një proçesori. Ky opsion funksionon vetëm në serverat e bazuar në UNIX.',
	
	'MAX_SEARCH_CHARS'						=> 'Karakteret maksimale të indeksuara nga kërkimi',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Fjalët me jo më shumë se ky numër karakteresh do të indeksohen për kërkim.',
    'MAX_NUM_SEARCH_KEYWORDS'            	=> 'Numri maksimal i fjalëve',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      	=> 'Numri maksimal i fjalëve që një përdorues mund të kërkojë. Vlera 0 lejon një numër të pakufizuar fjalësh.',
	'MIN_SEARCH_CHARS'						=> 'Karakteret minimale të indeksuara nga kërkimi',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Fjalët me të paktën këtë numër karakteresh do të indeksohen për kërkim.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Numri minimal i karaktereve për emër autori',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Përdoruesit duhet të shkruajnë të paktën këtë numër karakteresh të emrit kur bëjnë kërkim autori duke përdorur një Joly/wildcard. Nëse pseudonimi i autorit është më i shkurter së ky numër ju mund të kërkoni për postime të autorit duke shkruar pseudonimin e plotë.',
	
	'PROGRESS_BAR'							=> 'Shiriti i progresit',
	
	'SEARCH_GUEST_INTERVAL'					=> 'Intervali flood i kërkimit për vizitorët',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Numri i sekondave që vizitorët duhet të presin ndërmjet kërkimeve. Nëse një vizitor kërkon, të gjithë të tjerët duhet të presin deri ne kalimin e kohës së intervalit.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Të gjithë postimet deri në postimin %1$d janë indeksuar, nga të cilët %2$d postime në këtë fazë.<br />Shpejtësia e tanishme e indeksimit është rreth %3$.1f postime në sekondë.<br />Indeksimi në progres…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Të gjithë postimet deri në postimin %1$d janë hequr nga indeksi i kërkimit.<br />Fshirja në progres…',
	'SEARCH_INDEX_CREATED'					=> 'Të gjithë postimet në bazën e informacionit të bordit u indeksuan me sukses.',
	'SEARCH_INDEX_REMOVED'					=> 'Indeksi i kërkimit për këtë motorr kërkimi u fshi me sukses.',
	'SEARCH_INTERVAL'						=> 'Intervali flood i kërkimit për përdoruesit',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Numri i sekondave që përdoruesit duhet të presin ndërmjet kërkimeve. Ky interval është i pavarur për çdo përdorues.',
	'SEARCH_STORE_RESULTS'					=> 'Rezultati i kërkimit për gjatësinë e cache',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Rezultatet e kërkimit të rujatura në cache, do të skadojnë pas kësaj kohe në sekonda. Vendos 0 nëse doni të ç\'aktivizoni kërkimin e cache.',
	'SEARCH_TYPE'							=> 'Kërko motorr kërkimi',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ju mundëson të zgjidhni motorr kërkimi për të kërkuar tekst në përmbajtjen e postimeve. Në mënyrë të paracaktuar kërkimi do të bëhet nëpërmjet sistemit të kërkimit të phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Ju keni ndërruar motorrin e kërkimit. Në mënyrë që të përdorni motorrin e ri të kërkimit, ju duhet të siguroheni që ekziston një indeks për motorrin e kërkimit që zgjodhët.',
	
	'TOTAL_WORDS'							=> 'Numri total i fjalëve të indeksuara',
	'TOTAL_MATCHES'							=> 'Numri total i fjalëve të indeksuara në lidhje me postimet',
	
	'YES_SEARCH'							=> 'Aktivizo funksionin e kërkimit',
	'YES_SEARCH_EXPLAIN'					=> 'Aktivizo kërkimin e antarëve ndërmjet funksioneve të tjera.',
	'YES_SEARCH_UPDATE'						=> 'Aktivizo azhornimin e tekstit të plotë',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Azhornimi i indekseve të tekstit të plotë gjatë postimit, anullohet nëse kërkimi është i ç\'aktivizuar.',
));

?>