<?php
/**
*
* captcha_qa [Turkish]
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
	'CAPTCHA_QA'				=> 'S&amp;C CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Bu soru kimlik tespit etmek ve otomatik gönderimleri önlemek için sunulur.',
	'CONFIRM_QUESTION_WRONG'	=> 'Onay sorusu için geçersiz bir cevap belirttiniz.',

	'QUESTION_ANSWERS'			=> 'Cevaplar',
	'ANSWERS_EXPLAIN'			=> 'Lütfen soru için her bir satıra geçerli cevaplar girin.',
	'CONFIRM_QUESTION'			=> 'Soru',

	'ANSWER'					=> 'Cevap',
	'EDIT_QUESTION'				=> 'Soruyu Düzenle',
	'QUESTIONS'					=> 'Sorular',
	'QUESTIONS_EXPLAIN'			=> 'Kayıt sırasında, kullanıcılara burada belirtilen sorulardan birisi sorulacaktır. Bu özelliği kullanmak için, varsayılan dilinizde en az bir soru ayarlamalısınız. Bu sorular hedef kitlenizin cevaplayabilmesi için kolay olmalıdır, fakat bir Google™ aramasında bulunamayacak şekilde olmalıdır. Geniş ve düzenli değişiklik kullanarak en iyi sonuçları veren soruları ayarlayın. Eğer sorunuz noktalama işaretleri ya da büyük harfe duyarlı ise sıkı ayarı açın.',
	'QUESTION_DELETED'			=> 'Soru silindi',
	'QUESTION_LANG'				=> 'Dil',
	'QUESTION_LANG_EXPLAIN'		=> 'Bu soru ve cevabın yazılacağı dil.',
	'QUESTION_STRICT'			=> 'Sıkı kontrol',
	'QUESTION_STRICT_EXPLAIN'	=> 'Eğer açıksa, büyük harf ve boşluk ayrıca zorunlu olacaktır.',

	'QUESTION_TEXT'				=> 'Soru',
	'QUESTION_TEXT_EXPLAIN'		=> 'Soru kayıt işlemi sırasında sorulacaktır.',

	'QA_ERROR_MSG'				=> 'Lütfen tüm boşlukları doldurun ve en az bir cevap girin.',
));

?>