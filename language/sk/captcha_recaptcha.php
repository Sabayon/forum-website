<?php
/**
*
* common [Slovak]
*
* @package language
* @version $Id: captcha_recaptcha.php,v 1.195 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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
	'RECAPTCHA_LANG'				=> 'sk',
	'RECAPTCHA_NOT_AVAILABLE'		=> "Pre použitie reCaptcha sa musíte registrovat na <a href='http://recaptcha.net'>reCaptcha.net</a>.",
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Overovací kód, ktorý ste zadali nebol správny.',

	'RECAPTCHA_PUBLIC'				=> 'Verejný reCaptcha kľúč',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> "Váš verejný kľúč k službe reCAPTCHA, získate ho na <a href='http://recaptcha.net'>reCaptcha.net</a>.",
	'RECAPTCHA_PRIVATE'				=> 'Súkromný reCaptcha kľúč',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> "Váš súkromný kľúč k službe reCaptcha, získáte ho na <a href='http://recaptcha.net'>reCaptcha.net</a>.",

	'RECAPTCHA_EXPLAIN'				=> 'Snažíme sa obmedziť automatické registrácia na našom serveri. Z toho dôvodu je potrebné, aby ste napísali tieto dve slová do rámčeka pod nimi.',
));

?>
