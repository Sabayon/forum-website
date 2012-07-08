<?php
/**
*
* captcha_qa [French (Formal Honorifics)]
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
	'CAPTCHA_QA'				=> 'Q&amp;R du CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Cette question est un moyen d’identification et de prévention contre les actions automatisées.',
	'CONFIRM_QUESTION_WRONG'	=> 'Vous n’avez pas répondu correctement à la question de confirmation.',

	'QUESTION_ANSWERS'			=> 'Réponses',
	'ANSWERS_EXPLAIN'			=> 'Veuillez saisir des réponses correctes à la question. Chaque réponse doit être saisie sur une nouvelle ligne.',
	'CONFIRM_QUESTION'			=> 'Question',

	'ANSWER'					=> 'Réponse',
	'EDIT_QUESTION'				=> 'Modifier la question',
	'QUESTIONS'					=> 'Questions',
	'QUESTIONS_EXPLAIN'			=> 'Durant leur inscription, les utilisateurs devront répondre à une des questions spécifiées ici. Pour utiliser ce plugin, vous devez régler au moins une question dans la langue par défaut. Nous vous recommandons de cibler ces questions selon votre audience afin que les réponses soient plus faciles à trouver pour vos utilisateurs, contrairement aux robots capables de réaliser des recherches sur Google™, qui devraient rencontrer plus de difficultés. L’utilisation et la mise à jour régulière d’un grand nombre de questions fournira de meilleurs résultats. Activez la vérification stricte si votre question demande une ou des réponses contenant des signes de ponctuation ou des majuscules.',
	'QUESTION_DELETED'			=> 'Question supprimée',
	'QUESTION_LANG'				=> 'Langue',
	'QUESTION_LANG_EXPLAIN'		=> 'La langue dans laquelle cette question et ses réponses sont rédigées.',
	'QUESTION_STRICT'			=> 'Vérification stricte',
	'QUESTION_STRICT_EXPLAIN'	=> 'Si activée, les majuscules et les espaces seront également appliqués.',

	'QUESTION_TEXT'				=> 'Question',
	'QUESTION_TEXT_EXPLAIN'		=> 'La question qui sera demandée lors des inscriptions.',

	'QA_ERROR_MSG'				=> 'Veuillez remplir tous les champs et saisir au moins une réponse.',
));

?>