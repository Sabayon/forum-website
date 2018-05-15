<?php
/**
*
* acp_profile.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-06 - www.dea-portal.com
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Fusha e personalizuar e profilit u shtua me sukses.',
	'ALPHA_ONLY'			=> 'Vetëm alfanumerik',
	'ALPHA_SPACERS'			=> 'Alfanumerik dhe hapsira',
	'ALWAYS_TODAY'			=> 'Gjithnjë datën e tanishme',
	
	'BOOL_ENTRIES_EXPLAIN'	=> 'Vendos opsionet e tua tani',
	'BOOL_TYPE_EXPLAIN'		=> 'Përcaktoni llojin: kutizë zgjedhje ose buton pulsues. Një kutizë zgjedhje do të shfaqet vetëm nëse është e zgjedhur për një përdorues të dhënë. Në atë rast opsioni i gjuhës <strong>së dytë</strong> do të përdoret. Butonat pulsues do të shfaqen në varësi të vlerës së tyre.',
	
	'CHANGED_PROFILE_FIELD'		=> 'Fusha e personalizuar e profilit u ndërrua me sukses.',
	'CHARS_ANY'					=> 'Çdo karakter',
	'CHECKBOX'					=> 'Kutizë zgjedhje',
	'COLUMNS'					=> 'Kolona',
	'CP_LANG_DEFAULT_VALUE'		=> 'Vlera e paracaktuar',
	'CP_LANG_EXPLAIN'			=> 'Përshkrimi i fushës',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Përshkrimi i prezantuar përdoruesit i kësaj fushe.',
	'CP_LANG_NAME'				=> 'Emri/titulli i fushës prezantuar tek përdoruesi',
	'CP_LANG_OPTIONS'			=> 'Opsionet',
	'CREATE_NEW_FIELD'			=> 'Krijo fushë të re',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Të paktën një fushë profili e personalizuar nuk është përkthyer akoma. Ju lutemi të shkruani informacionin e kërkuar duke klikuar linkun “Përkthe”.',
	
	'DEFAULT_ISO_LANGUAGE'			=> 'Gjuha e paracaktuar [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Përmbajtja e gjuhës për gjuhën e paracaktuar nuk është plotësuar për këtë fushë profili.',
	'DEFAULT_VALUE'					=> 'Vlera e paracaktuar',
	'DELETE_PROFILE_FIELD'			=> 'Fshi fushën e profilit',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Jeni i sigurt që doni të fshini këtë fushë profili?',
	'DISPLAY_AT_PROFILE'			=> 'Shfaq në Panelin e Antarit',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Përdoruesi mund të ndryshojë këtë fushë profili nëpërmjet Panelit të Antarit.',
	'DISPLAY_AT_REGISTER'			=> 'Shfaq në faqen e regjistrimit',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Nëse opsioni është i aktivizuar, fusha do të shfaqet në faqen e regjistrimit.',
	'DISPLAY_PROFILE_FIELD'			=> 'Shfaq fushat e profilit publikisht',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Fusha e profilit do të shfaqet në çdo vënd të lejuar nga opsionet. Nëse vendosni “Jo” fusha e profilit do të fshihet nga faqet e temave, profilet dhe lista e antarëve.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Shkruani opsionet tuaja tani, çdo opsion në kryerradhë.',
	
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Ju lutemi te vini re që ju mund të ndryshoni opsionet tuaja të tekstit dhe gjithashtu mund të shtoni opsione të tjera në fund të tyre. Nuk këshillohet të shtoni opsione të reja ndërmjet opsioneve ekzistuese - kjo mund të çojë në opsione të gabuara dërguar përdoruesve tuaj. Kjo gjithashtu mund të ndodhë nëse ju fshini opsionet e ndërmjetme. Fshirja e opsioneve nga fundi bën që përdoruesit që e kanë zgjedhur këtë fushë, të kthehen tek e paracaktuara.',
	'EMPTY_FIELD_IDENT'				=> 'Zbraz identifikimin e fushës',
	'EMPTY_USER_FIELD_NAME'			=> 'Ju lutemi të shkruani një emer/titull për fushën',
	'ENTRIES'						=> 'Hyrjet',
	'EVERYTHING_OK'					=> 'Çdo gjë në rregull',
	
	'FIELD_BOOL'				=> 'Fusha e Boilit (Po/Jo)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Përshkrimi i fushës',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Përshkrimi i prezantuar përdoruesit i kësaj fushe.',
	'FIELD_DROPDOWN'			=> 'Kutiza e hapshme',
	'FIELD_IDENT'				=> 'Identifikimi i fushës',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Identifikimi i fushës i zgjedhur ekziston. Ju lutemi të zgjidhni një emër tjetër.',
	'FIELD_IDENT_EXPLAIN'		=> 'Identifikimi i fushës është një emër për të identifikuar profilin e fushës në bazën e informacionit dhe maskat.',
	'FIELD_INT'					=> 'Numrat',
	'FIELD_LENGTH'				=> 'Gjatësia e kutizës së shkrimit',
	'FIELD_NOT_FOUND'			=> 'Fusha e profilit nuk u gjënd.',
	'FIELD_STRING'				=> 'Fushë për një tekst',
	'FIELD_TEXT'				=> 'Zona e tekstit',
	'FIELD_TYPE'				=> 'Lloji i fushës',
	'FIELD_TYPE_EXPLAIN'		=> 'Ju nuk mund të ndryshoni më pas llojin e fushës.',
	'FIELD_VALIDATION'			=> 'Vlerësimi i fushës',
	'FIRST_OPTION'				=> 'Opsioni i parë',
	
	'HIDE_PROFILE_FIELD'			=> 'Fshih fushën e profilit',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Fshih fushën e profilit nga të gjithë përveç përdoruesit, administratorët dhe moderatorët do të jenë në gjëndje të shohin këtë fushë. Nëse opsioni Shfaq në Panelin e Antarit është ç\'aktivizuar, përdoruesi nuk do të mund të shohë ose ndryshojë fushën e cila mund të ndryshohet vetëm nga administratorët.',
	
	'INVALID_CHARS_FIELD_IDENT'	=> 'Identifikimi i fushës mund të përmbajë vetëm shkronja të vogla a-z dhe _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identifikimi i fushës mund të jetë vetëm 17 karaktere i gjatë',
	'ISO_LANGUAGE'				=> 'Gjuha [%s]',
	
	'LANG_SPECIFIC_OPTIONS'		=> 'Opsionet specifike të gjuhës [<strong>%s</strong>]',
	
	'MAX_FIELD_CHARS'		=> 'Numri maksimal i karaktereve',
	'MAX_FIELD_NUMBER'		=> 'Numri më i lartë i lejuar',
	'MIN_FIELD_CHARS'		=> 'Numri minimal i karaktereve',
	'MIN_FIELD_NUMBER'		=> 'Numri me i ulet i lejuar',
	
	'NO_FIELD_ENTRIES'			=> 'Asnjë hyrje e përcaktuar',
	'NO_FIELD_ID'				=> 'Asnjë id fushe i përcaktuar.',
	'NO_FIELD_TYPE'				=> 'Asnjë lloj fushe i përcaktuar.',
	'NO_VALUE_OPTION'			=> 'Opsion i barabartë me vlerë të padhënë',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Vlera për asnjë hyrje. Nëse fusha është e kërkuar, përdoruesit i del gabim nëse cakton opsionin e zgjedhur këtu.',
	'NUMBERS_ONLY'				=> 'Vetëm numra (0-9)',
	
	'PROFILE_BASIC_OPTIONS'		=> 'Opsionet bazë',
	'PROFILE_FIELD_ACTIVATED'	=> 'Fusha e profilit u aktivizua me sukses.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Fusha e profilit u ç\'aktivizua me sukses.',
	'PROFILE_LANG_OPTIONS'		=> 'Opsionet specifike të gjuhës',
	'PROFILE_TYPE_OPTIONS'		=> 'Opsionet specifike të llojit të profilit',
	
	'RADIO_BUTTONS'				=> 'Butonat pulsues',
	'REMOVED_PROFILE_FIELD'		=> 'Fusha e profilit u fshi me sukses.',
	'REQUIRED_FIELD'			=> 'Fushë e kërkuar',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Detyron plotësimin e fushës nga përdoruesi ose administratori. Nëse opsioni për t\'u shfaqur në faqen e regjistrimit është i ç\'aktivizuar, fusha do të jetë e kërkuar kur përdoruesi të modifikoje profilin e tij.',
	'ROWS'						=> 'Rrjeshta',
	
	'SAVE'							=> 'Ruaj',
	'SECOND_OPTION'					=> 'Opsioni i dytë',
	'STEP_1_EXPLAIN_CREATE'			=> 'Këtu ju mund të shkruani parametrat e parë bazë të fushës së re të profilit. Ky informacion kërkohet për hapin e dytë ku ju do të mund të vendosni opsionet e mbetuara dhe përmirësoni më tepër fushën tuaj të profilit.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Këtu ju mund të ndryshoni parametrat bazë të fushës tuaj të profilit. Opsionet relative llogariten përsëri nëpërmjet hapit të dytë.',
	'STEP_1_TITLE_CREATE'			=> 'Shto fushë profili',
	'STEP_1_TITLE_EDIT'				=> 'Modifiko fushe profili',
	'STEP_2_EXPLAIN_CREATE'			=> 'Këtu ju mund të përcaktoni disa opsione të zakonshme të cilat mund të doni t\'i ndryshoni.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Këtu ju mund të ndryshoni disa opsione të zakonshme.<br /><strong>Vini re që ndryshimet në fushat e profilit nuk do të kenë efekt në profilin e ekzistues të plotesuar nga përdoruesit tuaj.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opsionet specifike të llojit të profilit',
	'STEP_2_TITLE_EDIT'				=> 'Opsionet specifike të llojit të profilit',
	'STEP_3_EXPLAIN_CREATE'			=> 'Meqënëse keni më shumë se një gjuhë të instaluar në bord, ju duhet të plotësoni edhe fushat e tjera. Fusha e profilit do të funksionojë me gjuhën e paracaktuar të aktivizuar. Ju mund të plotësoni gjuhët e mbetura gjithashtu.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Meqënëse keni më shumë se një gjuhë të instaluar në bord, ju mund të shtoni ose ndryshoni elementet e mbetur të gjuhës gjithashtu. Fusha e profilit do të funksionojë me gjuhën e paracaktuar të aktivizuar.',
	'STEP_3_TITLE_CREATE'			=> 'Përcaktimet gjuhësore të mbetura',
	'STEP_3_TITLE_EDIT'				=> 'Përcaktimet gjuhësore',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Shkruani nje shprehje të paracaktuar që do të shfaqet, një vlerë të paracaktuar. Lëreni bosh nëse doni të shfaqet bosh në vënd të parë.',
	
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Shkruani nje tekst të paracaktuar që do të shfaqet, një vlerë të paracaktuar. Lëreni bosh nëse doni të shfaqet bosh në vënd të parë.',
	'TRANSLATE'						=> 'Përkthe',
	
	'USER_FIELD_NAME'	=> 'Emri/titulli i fushës i prezantuar tek përdoruesi',
	
	'VISIBILITY_OPTION'				=> 'Opsionet e shfaqjes',
));

?>