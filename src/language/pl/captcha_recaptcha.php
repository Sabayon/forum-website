<?php
/**
*
* recaptcha [Polski]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933.1 2009-11-17 Ronnie $
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
	'RECAPTCHA_LANG'				=> 'pl',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Aby używać reCaptchy, musisz utworzyć konto na <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Wysłane potwierdzenie wizualne było nieprawidłowe',

	'RECAPTCHA_PUBLIC'				=> 'Publiczny klucz reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Twój publiczny klucz reCaptcha. Klucze można otrzymać na <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Prywatny klucz reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Twój prywatny klucz reCaptcha. Klucze można otrzymać na <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Aby zapobiec automatycznym rejestracjom, wymagamy, żebyś wpisał oba słowa wyświetlone poniżej do pola tekstowego umieszczonego pod nimi.',
));

?>