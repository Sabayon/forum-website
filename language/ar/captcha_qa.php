<?php
/**
*
* captcha_qa [English]
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
	'CONFIRM_QUESTION_EXPLAIN'	=> 'هذا السؤال هو طريقة لمنع إرسال المعلومات آليا و للتأكد من أنك إنسان .',
	'CONFIRM_QUESTION_WRONG'	=> 'لقد أدخلت جوابا خاطئا عن السؤال المطروح .',

	'QUESTION_ANSWERS'			=> 'الأجوبة',
	'ANSWERS_EXPLAIN'			=> 'الرجاء الإجابة على الأسئلة التالية , ضع كل جواب في سطر مستقل .',
	'CONFIRM_QUESTION'			=> 'السؤال',

	'ANSWER'					=> 'الجواب',
	'EDIT_QUESTION'				=> 'تعديل السؤال',
	'QUESTIONS'					=> 'الأسئلة',
	'QUESTIONS_EXPLAIN'			=> 'أثناء التسجيل , سيُسأل الزائر أحد الأسئلة المخصصة هنا . لاستخدام هذه الميزة , ينبغي أن يكون هناك سؤال واحد على الأقل . ينبغي أن تكون لهذه الأسئلة إجابات سهلة للقارئ , لكن غير قابلة للإجابة من قبل البرمجيات التي تقوم بالبحث عن المنتديات بواسطة Google™ للتسجيل فيها آليا . استخدام أكبر عدد من الاحتمالات و الخيارات , سيعطي نتائج أفضل طبعا . فعّل خيار الدقة في حال كانت الإجابات تعتمد على التهجئة و الإملاء .',
	'QUESTION_DELETED'			=> 'حُذِفَ السؤال',
	'QUESTION_LANG'				=> 'اللغة',
	'QUESTION_LANG_EXPLAIN'		=> 'اللغة التي كتب فيها السؤال و إجابته.',
	'QUESTION_STRICT'			=> 'خيار الدقة',
	'QUESTION_STRICT_EXPLAIN'	=> 'إذا فُعِّل فإن المسافات و الأحرف الكبيرة و الصغيرة ستُدَقّق أيضاً.',

	'QUESTION_TEXT'				=> 'السؤال',
	'QUESTION_TEXT_EXPLAIN'		=> 'السؤال الذي سيطرح عند التسجيل .',

	'QA_ERROR_MSG'				=> 'الرجاء ملء الحقول كلها و تقديم إجابة واحدة على الأقل.',
));

?>