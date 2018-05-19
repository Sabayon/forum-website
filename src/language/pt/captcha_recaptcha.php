<?php
/**
*
* recaptcha [Português]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Versão do phpBB: 3.0.6
* @Traduzido por: http://phpbbportugal.com
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
	'RECAPTCHA_LANG'				=> 'pt',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Para usar o  reCaptcha, deve criar uma conta em <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'O código inserido não é o correcto.',

	'RECAPTCHA_PUBLIC'				=> 'Chave pública reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A sua Chave pública reCaptcha. As chaves obtêm-se em <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Chave privada reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A sua chave privada reCaptcha. As chaves obtêm-se em <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Num esforço para prevenir registos automáticos, é necessário que introduza as duas palavras que se encontram no campo abaixo.',
));

?>