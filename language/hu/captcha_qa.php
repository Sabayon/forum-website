<?php
/**
*
* captcha_qa [Hungarian]
*
* @package language
* @version $Id: captcha_qa.php 202 2009-10-19 22:04:22Z fberci $
* @copyright (c) 2009 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Kérdés és válasz CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'A kérdés az automatikus regisztrációk megakadályozását szolgálja.',
	'CONFIRM_QUESTION_WRONG'	=> 'Hibás választ adtál a megerősítő kérdésre.',

	'QUESTION_ANSWERS'			=> 'Válaszok',
	'ANSWERS_EXPLAIN'			=> 'Add meg az elfogadható válaszokat, mindegyiket külön sorba.',
	'CONFIRM_QUESTION'			=> 'Kérdés',

	'ANSWER'					=> 'Válasz',
	'EDIT_QUESTION'				=> 'Kérdés szerkesztése',
	'QUESTIONS'					=> 'Kérdések',
	'QUESTIONS_EXPLAIN'			=> 'A regisztráció folyamán feltevésre kerül a felhasználóknak az alábbi kérdések egyike. A bővítmény használatához legalább egy kérdésnek léteznie kell az alapértelmezett nyelven. A kérdéseknek egyszerűen megválaszolhatónak kell lenniük a fórumod közönségének, de vigyázni kell rá, hogy nehogy egy robot is megtalálhassa a választ egy Google™ keresést végezve. A legjobb eredményt egy nagy és gyakran változtatott kérdéskészlet hozza. Ha a kérdésed megköveteli a nagybetűk következetes használatát és a helyes központozást, kapcsold be a szigorú ellenőrzést.',
	'QUESTION_DELETED'			=> 'A kérdés törlésre került.',
	'QUESTION_LANG'				=> 'Nyelv',
	'QUESTION_LANG_EXPLAIN'		=> 'A nyelv, amelyen a kérdés és a válaszai íródnak.',
	'QUESTION_STRICT'			=> 'Szigorú ellenőrzés',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ha be van kapcsolva, a válasz ellenőrzésénél a kis-/nagybetűk és a szóközök is figyelembe lesznek véve.',

	'QUESTION_TEXT'				=> 'Kérdés',
	'QUESTION_TEXT_EXPLAIN'		=> 'A regisztrációkor felteendő kérdés.',

	'QA_ERROR_MSG'				=> 'Kérünk, töltsd ki az összes mezőt, és adj meg legalább egy választ.',
));

?>
