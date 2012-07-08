<?php
/**
*
* search.php [Shqip Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-25 - www.dea-portal.com
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
	'ALL_AVAILABLE'			=> 'Të gjitha në dispozicion',
	'ALL_RESULTS'			=> 'Të gjitha rezultatet',
	
	'DISPLAY_RESULTS'		=> 'Paraqit rezultatet si',
	
	'FOUND_SEARCH_MATCH'		=> 'Kërkimi gjeti %d përputhje',
	'FOUND_SEARCH_MATCHES'		=> 'Kërkimi gjeti %d përputhje',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Kërkimi gjeti më shumë se një %d përputhje',
	
	'GLOBAL'				=> 'Lajmërim Global',
	
	'IGNORED_TERMS'			=> 'Injoruar',
	'IGNORED_TERMS_EXPLAIN'	=> 'Fjalët e mëposhtme u injoruan në kërkimin tuaj sepse ishin shumë të zakonshme: <strong>%s</strong>.',
	
	'JUMP_TO_POST'			=> 'Shko tek postimi',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Bordi ju kërkon që të jeni të regjistruar dhe të identifikuar për të parë postimet e tua.',
	
    'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => 'Ju specifikuat shumë fjalë për kërkim. Ju lutemi të mos shkruani më shumë se %1$d fjalë.',
	
	'NO_KEYWORDS'			=> 'Ju duhet të cilësoni të paktën një fjalë për të kërkuar. Çdo fjalë duhet të jetë me të paktën %d shkronja dhe maksimumi me %d të tilla duke përjashtuar Joly/wildcard.',
	'NO_RECENT_SEARCHES'	=> 'Asnjë kërkim nuk është bërë së fundmi.',
	'NO_SEARCH'				=> 'Më vjen keq por nuk ju lejohet të përdorni sistemin e kërkimit.',
	'NO_SEARCH_RESULTS'		=> 'Nuk u gjet asnjë përputhje e përshtatshme.',
	'NO_SEARCH_TIME'		=> 'Më vjen keq por nuk mund të përdorni kërkimin këtë herë. Ju lutem provojeni mbas disa minutash.',
	'WORD_IN_NO_POST'		=> 'Asnjë postim nuk u gjet sepse fjala <strong>%s</strong> nuk është përfshirë në ndonjë postim.',
	'WORDS_IN_NO_POST'		=> 'Asnjë postim nuk u gjet sepse fjalët <strong>%s</strong> nuk janë përfshirë në ndonjë postim.',
	
	'POST_CHARACTERS'		=> 'Karakteret e postimit.',
	
	'RECENT_SEARCHES'		=> 'Kërkimet e fundit.',
	'RESULT_DAYS'			=> 'Limito rezultatet në të mëparshmin',
	'RESULT_SORT'			=> 'Rendit rezultatet sipas',
	'RETURN_FIRST'			=> 'Kthehu tek i pari',
	'RETURN_TO_SEARCH_ADV'	=> 'Kthehu tek kërkimi i avancuar.',
	
	'SEARCHED_FOR'				=> 'Kërko termin e përdorur.',
	'SEARCHED_TOPIC'			=> 'Temat e kërkuara',
	'SEARCH_ALL_TERMS'			=> 'Kërko për të gjithë termat ose përdor kërkesën siç është',
	'SEARCH_ANY_TERMS'			=> 'Kërko për çdo fjalë',
	'SEARCH_AUTHOR'				=> 'Kërko për autorin',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Përdor * si Joly/wildcard për përputhjet e pjesshme',
	'SEARCH_FIRST_POST'			=> 'Vetëm postimet e para të temave.',
	'SEARCH_FORUMS'				=> 'Kërko në forume',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Zgjidh forumin ose forumet në të cilat dëshiron të kërkosh. Nënforumet janë në kërkim automatik nëse nuk ç\'aktivizoni “Kërko nënforumet“ më poshtë.',
	'SEARCH_IN_RESULTS'			=> 'Kërko këto rezultate',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Vendos <strong>+</strong> në fillim të një fjale që duhet të gjehet, dhe <strong>-</strong> në fillim të një fjale që nuk duhet të gjehet. Vendos një listë fjalësh të ndara me <strong>|</strong> në kllapa nëse vetëm një nga fjalët duhet të gjehet. Përdor * si Joly/wildcard për përputhje të përpjesshme.',
	'SEARCH_MSG_ONLY'			=> 'Vetëm mesazh teksti',
	'SEARCH_OPTIONS'			=> 'Opsionet e kërkimit',
	'SEARCH_QUERY'				=> 'Kërko pyetje',
	'SEARCH_SUBFORUMS'			=> 'Kërko nënforume',
	'SEARCH_TITLE_MSG'			=> 'Subjekte postimesh dhe mesazhe teksti',
	'SEARCH_TITLE_ONLY'			=> 'Vetëm tituj temash',
	'SEARCH_WITHIN'				=> 'Kërko brenda',
	'SORT_ASCENDING'			=> 'Në ngjitje',
	'SORT_AUTHOR'				=> 'Autori',
	'SORT_DESCENDING'			=> 'Në zbritje',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Subjekti i postimit',
	'SORT_TIME'					=> 'Koha e postimit',
	
	'TOO_FEW_AUTHOR_CHARS'	=> 'Ju duhet të cilësoni të paktën %d karaktere të emrit të autorit.',
));

?>