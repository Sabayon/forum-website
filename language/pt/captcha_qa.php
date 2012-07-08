<?php
/**
*
* captcha_qa [Português]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Esta questão é uma maneira de evitar registos automáticos.',
	'CONFIRM_QUESTION_WRONG'	=> 'A sua resposta de confirmação não é válida.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'Introduza respostas válidas, uma por linha.',
	'CONFIRM_QUESTION'			=> 'Pergunta',

	'ANSWER'					=> 'Resposta',
	'EDIT_QUESTION'				=> 'Editar Pergunta',
	'QUESTIONS'					=> 'Perguntas',
	'QUESTIONS_EXPLAIN'			=> 'Durante o registo, os utilizadores terão que responder a uma destas perguntas. Para usar este plugin pelo menos uma pergunta deve estar traduzida na língua principal. Estas perguntas devem ser de fácil resposta, mas mais dificeis que uma simples pesquisa no Google™ não dê a resposta. Usar perguntas variadas, apresenta melhores resultados. Definir a opção rigorosa se a sua pergunta depende de pontuação ou de capitalização.',
	'QUESTION_DELETED'			=> 'Pergunta apagada',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma em que estas perguntas estão escritas.',
	'QUESTION_STRICT'			=> 'Verificação apertada',
	'QUESTION_STRICT_EXPLAIN'	=> 'Se activado, maiúscula e espaço em branco farão a diferença.',

	'QUESTION_TEXT'				=> 'Pergunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pergunta feita no registo.',

	'QA_ERROR_MSG'				=> 'Preencha todos os campos e pelo menos uma resposta.',
));

?>