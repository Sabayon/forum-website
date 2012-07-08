<?php
/**
*
* captcha_qa [Polski]
*
* @package language
* @version $Id: captcha_qa.php 9966.1 2009-11-17 Ronnie $
* @copyright (c) 2006 - 2009 phpBB3.PL Group
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

// INFORMACJA
//
// Wszystkie pliki językowe powinny używać kodowania UTF-8 i nie powinny zawierać znaku BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Pytania',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'To pytanie służy do identyfikacji i odrzucenia automatycznych rejestracji.',
	'CONFIRM_QUESTION_WRONG'	=> 'Podałeś/aś nieprawidłową odpowiedź na pytanie potwierdzające.',

	'QUESTION_ANSWERS'			=> 'Odpowiedzi',
	'ANSWERS_EXPLAIN'			=> 'Podaj prawidłowe odpowiedzi na pytanie, jedna na linię.',
	'CONFIRM_QUESTION'			=> 'Pytanie',

	'ANSWER'					=> 'Odpowiedź',
	'EDIT_QUESTION'				=> 'Edytuj pytanie',
	'QUESTIONS'					=> 'Pytania',
	'QUESTIONS_EXPLAIN'			=> 'Podczas rejestracji użytkownicy zostaną poproszeni o odpowiedź na jedno z podanych tutaj pytań. Aby używać tej wtyczki, musisz ustawić przynajmniej jedno pytanie w domyślnym języku. Pytania powinny być łatwe dla Twojej docelowej grupy odbiorców, ale przekraczające umiejętności bota używającego wyszukiwarki Google™. Używanie dużego i często zmienianego zestawu pytań da najlepsze wyniki. Włącz dokładne sprawdzenie, jeśli Twoje pytanie polega na interpunkcji lub wielkości znaków.',
	'QUESTION_DELETED'			=> 'Pytanie usunięte',
	'QUESTION_LANG'				=> 'Język',
	'QUESTION_LANG_EXPLAIN'		=> 'Język w którym to pytanie i jego odpowiedzi są zapisane.',
	'QUESTION_STRICT'			=> 'Dokładne sprawdzanie',
	'QUESTION_STRICT_EXPLAIN'	=> 'Jeśli włączone, wielkość liter i odstępy również zostaną sprawdzone.',

	'QUESTION_TEXT'				=> 'Pytanie',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pytanie, które zostanie zadane przy rejestracji.',

	'QA_ERROR_MSG'				=> 'Uzupełnij wszystkie pola i podaj przynajmniej jedną odpowiedź.',
));

?>
