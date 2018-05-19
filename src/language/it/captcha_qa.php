<?php
/**
*
* captcha_qa [Italian]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
* @copyright (c)  2009 phpBB.it - translated on 2009/11/18
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Questa domanda serve a prevenire iscrizioni automatiche.',
	'CONFIRM_QUESTION_WRONG'	=> 'La risposta alla domanda di conferma di registrazione, non è corretta.',

	'QUESTION_ANSWERS'			=> 'Risposte',
	'ANSWERS_EXPLAIN'			=> 'Inserisci risposte valide alla domanda, una per riga.',
	'CONFIRM_QUESTION'			=> 'Domanda',

	'ANSWER'					=> 'Risposta',
	'EDIT_QUESTION'				=> 'Modifica Domanda',
	'QUESTIONS'					=> 'Domande',
	'QUESTIONS_EXPLAIN'			=> 'Durante la registrazione, gli utenti saranno invitati a rispondere a una delle domande qui specificate. Per usare questo plugin, almeno una domanda deve essere impostata nella lingua predefinita. Queste domande dovrebbero essere facili per il vostro target di riferimento, aldilà della capacità di un bot in grado di eseguire una ricerca su Google™. Utilizzando una grande e regolarmente modificata serie di domande, si avranno i risultati migliori. Abilita il controllo rigoroso, se la tua domanda tiene conto della punteggiatura o dell’uso di iniziali maiuscole.',
	'QUESTION_DELETED'			=> 'Domanda cancellata',
	'QUESTION_LANG'				=> 'Lingua',
	'QUESTION_LANG_EXPLAIN'		=> 'La lingua della domanda e delle sue risposte.',
	'QUESTION_STRICT'			=> 'Controllo rigoroso',
	'QUESTION_STRICT_EXPLAIN'	=> 'Se abilitato, si terrà conto delle iniziali maiuscole e degli spazi.',

	'QUESTION_TEXT'				=> 'Domanda',
	'QUESTION_TEXT_EXPLAIN'		=> 'La domanda che sarà richiesta al momento della registrazione.',

	'QA_ERROR_MSG'				=> 'Si prega di compilare tutti i campi e inserire almeno una risposta.',
));

?>