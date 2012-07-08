<?php
/**
*
* recaptcha [French (Formal Honorifics)]
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
// Maintainer: Maël Soucaze <http://twitter.com/maelsoucaze> (maelsoucaze@gmail.com)
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
	'RECAPTCHA_LANG'				=> 'fr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Avant de pouvoir utiliser reCaptcha, vous devez créer un compte sur <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Le code de confirmation visuelle que vous avez envoyé est incorrect',

	'RECAPTCHA_PUBLIC'				=> 'Clé reCaptcha publique',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Votre clé reCaptcha publique. Les clés peuvent être obtenues sur <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Clé reCaptcha privée',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Votre clé reCaptcha privée. Les clés peuvent être obtenues sur <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Afin d’empêcher les actions automatisées, nous vous demandons de bien vouloir saisir dans le champ de texte les deux mots affichés ci-dessous.',
));

?>