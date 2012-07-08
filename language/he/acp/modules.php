<?php
/** 
*
* acp_modules [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'כאן אתה יכול לנהל את כל סוגי המודלים. שים לב שלוח הבקרה למנהל הראשי יש שלוש רמות של מבנה (קטגוריה -> קטגוריה -> מודל) באמצעותו לאחרים יש את מבנה התפריט (קטגוריה -> מודל) שחייב להישמר.  אנא שים לב שאתה יכול לנעול את עצמך בחוץ אם אתה מבטל או מוחק את המודולים האחראים על ניהול המודולים עצמם.',
	'ADD_MODULE'					=> 'הוסף מודל',
	'ADD_MODULE_CONFIRM'			=> 'אתה בטוח שברצונך להוסיף את המודל הנבחר עם המצב הנוכחי?',
	'ADD_MODULE_TITLE'				=> 'הוסף מודל',

	'CANNOT_REMOVE_MODULE'	=> 'לא מצליח להסיר את המודל, יש לו ילדים רשומים. אנא הסר או העבר את כל הילדים לפני שאתה מבצע פעולה זו.',
	'CATEGORY'				=> 'קטגוריה',
	'CHOOSE_MODE'			=> 'בחר את מצב המודל',
	'CHOOSE_MODE_EXPLAIN'	=> 'בחר את המצב בו המודל יתחיל לפעול.',
	'CHOOSE_MODULE'			=> 'בחר מודל',
	'CHOOSE_MODULE_EXPLAIN'	=> 'בחר את הקובץ הנקרא על ידי מודל זה.',
	'CREATE_MODULE'			=> 'צור מודל חדש',

	'DEACTIVATED_MODULE'	=> 'הפסק את פעילות המודל',
	'DELETE_MODULE'			=> 'מחק מודל',
	'DELETE_MODULE_CONFIRM'	=> 'אתה בטוח שברצונך להסיר מודל זה?',

	'EDIT_MODULE'			=> 'ערוך מודל',
	'EDIT_MODULE_EXPLAIN'	=> 'כאן אתה יכול להגדיר הגדרות ספציפיות למודל.',

	'HIDDEN_MODULE'			=> 'מודל מוסתר',

	'MODULE'					=> 'מודל',
	'MODULE_ADDED'				=> 'המודל נוסף בהצלחה.',
	'MODULE_DELETED'			=> 'המודל הוסר בהצלחה.',
	'MODULE_DISPLAYED'			=> 'המודל מוצג',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'אם אין ברצונך להציג מודל זה, אך ברצונך להשתמש בו, הגדר אפשרות זאת לפעילה.',
	'MODULE_EDITED'				=> 'המודל נערך בהצלחה.',
	'MODULE_ENABLED'			=> 'הפעל מודל',
	'MODULE_LANGNAME'			=> 'שפת המודל',
	'MODULE_LANGNAME_EXPLAIN'	=> 'הכנס את שם המודל המוצג. השתמש בשפה מדוייקת אם השם מקושר לקובץ שפה.',
	'MODULE_TYPE'				=> 'סוג המודל',

	'NO_CATEGORY_TO_MODULE'	=> 'לא מצליח להעביר את הקטגוריה למודל. אנא הסר/העבר את כל הפורומים לפני עשיית פעולה זו.',
	'NO_MODULE'				=> 'לא נמצא מודל.',
	'NO_MODULE_ID'			=> 'לא נבחר מספר זיהוי למודל.',
	'NO_MODULE_LANGNAME'	=> 'לא נבחר למודל שפה.',
	'NO_PARENT'				=> 'אין הורה',

	'PARENT'				=> 'הורה',
	'PARENT_NO_EXIST'		=> 'ההורה אינו קיים.',

	'SELECT_MODULE'			=> 'בחר מודל',
));

?>