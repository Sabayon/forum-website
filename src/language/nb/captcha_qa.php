<?php
/**
*
* captcha_qa [U.S. English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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

// TRANSLATION DETAILS
//
// Author: Maël Soucaze
// E-mail: maelsoucaze@gmail.com
// Website: http://twitter.com/maelsoucaze
//
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
	'CAPTCHA_QA'				=> 'Spørsmål og svar-CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN' => 'Dette spørsmålet er en metode for identifisering og hindring av automatiserte innsendinger.',
	'CONFIRM_QUESTION_WRONG' => 'Du har oppgitt et ugyldig svar på bekreftelsen spørsmålet.', 

	'QUESTION_ANSWERS' => 'Svar', 
	'ANSWERS_EXPLAIN' => 'Vennligst oppgi gyldige svar på spørsmålet, ett per linje.',
	'CONFIRM_QUESTION' => 'Spørsmål',

	'ANSWER' => 'Svar',
	'EDIT_QUESTION' => 'Endre spørsmål',
	'QUESTIONS'					=> 'Questions',
	'QUESTIONS_EXPLAIN' => 'Under registreringen vil brukere bli bedt om å svare på et av spørsmålene som er angitt her. Hvis du vil bruke denne utvidelsen, må minst ett spørsmål settes i standardspråket. Disse spørsmålene skal være enkle for målgruppen å svare på, men utover muligheten for en bot som kan kjøre et Google™-søk. Et stort og jevnlig byttet sett av spørsmål vil gi de beste resultatene. Aktiver strenge innstillinger hvis spørsmålet ditt er avhengig av tegnsetting eller store bokstaver.',
	'QUESTION_DELETED' => 'Spørsmål slettet', 
	'QUESTION_LANG' => 'Språk', 
	'QUESTION_LANG_EXPLAIN' => 'Språket dette spørsmålet og svarene er skrevet i.',
	'QUESTION_STRICT' => 'Streng sjekk', 
	'QUESTION_STRICT_EXPLAIN' => 'Hvis aktivert, vil store bokstaver og mellomrom også bli håndhevet.',

	'QUESTION_TEXT' => 'Spørsmål', 
	'QUESTION_TEXT_EXPLAIN' => 'Spørsmålet som vil bli spurt ved registreringen.',

	'QA_ERROR_MSG' => 'Vennligst fyll ut alle feltene og minst ett svar.'
));

?>