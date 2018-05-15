<?php
/**
*
* captcha_qa [Dutch]
*
* @package language
* @version $Id: captcha_qa.php 9902 2009-08-01 11:07:48Z acydburn $
* @copyright (c) 2009 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2009
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
	'CAPTCHA_QA'				=> 'V&A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Deze vraag is bedoelt voor het identificeren en voorkomen van automatische registraties.',
	'CONFIRM_QUESTION_WRONG'	=> 'Je hebt een onjuist antwoord gegeven op de bevestigingsvraag.',

	'QUESTION_ANSWERS'			=> 'Antwoorden',
	'ANSWERS_EXPLAIN'			=> 'Vul hier de antwoorden op de vraag in, één antwoord per regel.',
	'CONFIRM_QUESTION'			=> 'Vraag',

	'ANSWER'					=> 'Antwoord',
	'EDIT_QUESTION'				=> 'Bewerk vraag',
	'QUESTIONS'					=> 'Vragen',
	'QUESTIONS_EXPLAIN'			=> 'Hier kun je vragen toevoegen en bewerken, die worden gesteld bij de registratie. Je moet minimaal één vraag in de standaardtaal van het forum opgeven om deze plug-in te gebruiken. De vragen moeten simpel zijn voor je doelpubliek, maar buiten de mogelijkheden van Google™ vallen. Vergeet ook niet regelmatig de vragen aan te passen. Schakel de strikte controle in, indien je vraag afhankelijk is van interpunctie en/of hoofdletters.',
	'QUESTION_DELETED'			=> 'Vraag verwijderd',
	'QUESTION_LANG'				=> 'Taal',
	'QUESTION_LANG_EXPLAIN'		=> 'De taal waar deze vraag en het antwoord in zijn geschreven.',
	'QUESTION_STRICT'			=> 'Strikte controle',
	'QUESTION_STRICT_EXPLAIN'	=> 'Indien ingeschakeld, zal de controle hoofdletter- en spatiegevoelig zijn.',

	'QUESTION_TEXT'				=> 'Vraag',
	'QUESTION_TEXT_EXPLAIN'		=> 'De vraag die bij de registratie gesteld zal worden.',

	'QA_ERROR_MSG'				=> 'Vul alle velden in en minimaal één antwoord.',
));

?>