<?php
/**
*
* captcha_qa [Galician]
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
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Esta pregunta é un medio para identificar e previr envíos automatizados.',
	'CONFIRM_QUESTION_WRONG'	=> 'Respostaches de xeito incorrecto á pregunta de confirmación.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'Por favor, insire respostas válidas para a pregunta, unha en cada liña.',
	'CONFIRM_QUESTION'			=> 'Pregunta',

	'ANSWER'					=> 'Resposta',
	'EDIT_QUESTION'				=> 'Editar Pregunta',
	'QUESTIONS'					=> 'Preguntas',
	'QUESTIONS_EXPLAIN'			=> 'No proceso de rexistro, preguntaráselles aos usuarios unha das cuestións aquí especificadas. Para empregares esta extensión, debes definir unha pregunta como mínimo no idioma predeterminado. Estas preguntas deben ser de resposta doada para a túa audiencia obxectivo, mais deben ir alén da habilidade dun bot que sexa quen de facer unha procura no Google™. Usar un xogo extenso de preguntas e ilo mudando de xeito regular será o que mellores resultados dea. Activa a configuración de comprobación estrita se a túa pregunta depende da puntuación ou coincidencia de maiúsculas/minúsculas.',
	'QUESTION_DELETED'			=> 'Pregunta eliminada',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma en que están escritas esta pregunta e a súa resposta.',
	'QUESTION_STRICT'			=> 'Comprobación estrita',
	'QUESTION_STRICT_EXPLAIN'	=> 'Se se activa, forzarase a comprobación tamén da capitalización (minúsculas e maiúsculas) e dos espazos en branco.',

	'QUESTION_TEXT'				=> 'Pregunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'A pregunta que se irá facer no proceso de rexistro.',

	'QA_ERROR_MSG'				=> 'Por favor, cubre todos os campos e insire polo menos unha resposta.',
));

?>