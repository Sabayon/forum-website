<?php
/**
*
* acp_modules.php [Shqip Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-05 - www.dea-portal.com
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Këtu ju mund të menaxhoni të gjithë llojet e moduleve. Ju lutemi të vini re që ACP ka një menu me strukturë në tre nivele (Kategori -> Kategori -> Modul) ndërsa të tjerat kanë një menu me strukturë në dy nivele (Kategori -> Modul) e cila duhet të mbahet e tillë. Gjithashtu duhet të bëni kujdes, pasi ju mund të nxirni veten tuaj jashtë nëse ç\'aktivizoni ose fshini modulet përgjegjëse për menaxhimin.',
	'ADD_MODULE'					=> 'Shto modul',
	'ADD_MODULE_CONFIRM'			=> 'Jeni i sigurt që doni të shtoni modulin e zgjedhur në mënyrën e caktuar?',
	'ADD_MODULE_TITLE'				=> 'Shto modul',
	
	'CANNOT_REMOVE_MODULE'	=> 'E pamundur fshirja e modulit, pasi ka nënmodule të caktuara nën të. Ju lutemi te fshini ose levizni te gjithe nenmodulet perpara se te kryeni kete veprim.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Zgjidhni llojin e modulit',
	'CHOOSE_MODE_EXPLAIN'	=> 'Zgjidhni mënyrën e moduleve që do të përdoret.',
	'CHOOSE_MODULE'			=> 'Zgjidh modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Zgjidhni skedarin që do të merret nga ky modul.',
	'CREATE_MODULE'			=> 'Krijo modul të ri',
	
	'DEACTIVATED_MODULE'	=> 'Ç\'aktivizo modul',
	'DELETE_MODULE'			=> 'Fshi modul',
	'DELETE_MODULE_CONFIRM'	=> 'Jeni i sigurt që doni të fshini këtë modul?',
	
	'EDIT_MODULE'			=> 'Modifiko modulin',
	'EDIT_MODULE_EXPLAIN'	=> 'Këtu ju mund të vini opsione specifike për modulet.',
	
	'HIDDEN_MODULE'			=> 'Modul i fshehur',
	
	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Moduli u shtua me sukses.',
	'MODULE_DELETED'			=> 'Moduli u fshi me sukses.',
	'MODULE_DISPLAYED'			=> 'Moduli i shfaqur',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Nëse nuk doni të shfaqni këtë modul, por doni t\'a përdorni, vendoseni këtë "Jo".',
	'MODULE_EDITED'				=> 'Moduli u modifikua me sukses.',
	'MODULE_ENABLED'			=> 'Modul i aktivizuar',
	'MODULE_LANGNAME'			=> 'Emri i gjuhës së modulit',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Shkruaj emrin e shfaqur të modulit. Përdor gjuhë konstante nëse emri vjen nga skedar gjuhe.',
	'MODULE_TYPE'				=> 'Lloji i modulit',
	
	'NO_CATEGORY_TO_MODULE'	=> 'I pamundur kthimi i kategorisë në modul. Ju lutemi të fshini/levizni nënmodulet përpara se të kryeni këtë veprim.',
	'NO_MODULE'				=> 'Nuk u gjet asnjë modul.',
	'NO_MODULE_ID'			=> 'Nuk u specifikua asnjë ID moduli.',
	'NO_MODULE_LANGNAME'	=> 'Nuk u specifikua asnjë emër gjuhe moduli.',
	'NO_PARENT'				=> 'I pavarur',
	
	'PARENT'				=> 'I varur',
	'PARENT_NO_EXIST'		=> 'Varësia nuk ekziston.',
	
	'SELECT_MODULE'			=> 'Zgjidh një modul',
));

?>