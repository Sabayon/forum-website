<?php
/**
*
* recaptcha [U.S. English]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
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
	'RECAPTCHA_LANG'				=> 'nb',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'For å kunne bruke reCaptcha, må du opprette en konto på <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Den visuelle bekreftelseskoden du presenterte var feil',

	'RECAPTCHA_PUBLIC'				=> 'Tilgjengelig reCaptcha-kode',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din tilgjengelige reCaptcha-kode. Koder fås på <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privat reCaptcha-kode',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din private reCaptcha-kode. Koder fås på <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'For å hindre automatiske innleveringer, krever vi at du oppgir både av ordene som vises nedenfor i tekstfeltet under.'
));

?>