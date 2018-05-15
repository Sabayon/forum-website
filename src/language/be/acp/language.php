<?php
/**
*
* acp_language [Belarusian]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
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
	'ACP_FILES'						=> 'Адміністратарскія файлы',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Тут вы можаце ўсталёўваць і выдаляць моўныя пакеты.',

	'EMAIL_FILES'			=> 'Шаблоны email-паведамленняў',

	'FILE_CONTENTS'				=> 'Змесціва файла',
	'FILE_FROM_STORAGE'			=> 'Файл з папкі захоўвання',

	'HELP_FILES'				=> 'Даведкавыя файлы',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Усталяваныя моўныя пакеты',
	'INVALID_LANGUAGE_PACK'		=> 'Вылучаны моўны пакет недапушчальны. Праверце пакет, і пры неабходнасці, паўторна загрузіце яго на сервер.',
	'INVALID_UPLOAD_METHOD'		=> 'Вылучаны метад загрузкі недапушчальны. Вылучыце іншы метад.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Звесткі аб мове паспяхова абноўленыя.',
	'LANGUAGE_ENTRIES'					=> 'Моўныя дадзеныя',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Тут вы можаце змяняць наяўныя або пакуль неперакладзеныя запісы ў файлах моўнага пакета.<br /><strong>Нататка:</strong> калі вы змянілі моўны файл, змены будуць захаваныя ў асобнай папцы для наступнай запампоўкі. Змены не будуць бачныя вашым карыстальнікам датуль, пакуль вы не заменіце зыходныя моўныя файлы на серверы (загрузіўшы новыя).',
	'LANGUAGE_FILES'					=> 'Моўныя файлы',
	'LANGUAGE_KEY'						=> 'Ключ мовы',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Гэты моўны пакет ужо ўсталяваны.',
	'LANGUAGE_PACK_DELETED'				=> 'Моўны пакет <strong>%s</strong> паспяхова выдалены. Усе карыстальнікі, выкарыстоўвалыя гэтая мова, пераключаныя на мову канферэнцыі па змаўчанні.',
	'LANGUAGE_PACK_DETAILS'				=> 'Інфармацыя аб моўным пакеце',
	'LANGUAGE_PACK_INSTALLED'			=> 'Моўны пакет <strong>%s</strong> паспяхова ўсталяваны.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Мясцовая назва',
	'LANGUAGE_PACK_NAME'				=> 'Назва',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Вылучаны моўны пакет не існуе.',
	'LANGUAGE_PACK_USED_BY'				=> 'Выкарыстаюць (уключаючы робатаў)',
	'LANGUAGE_VARIABLE'					=> 'Моўная пераменная',
	'LANG_AUTHOR'						=> 'Аўтар моўнага пакета',
	'LANG_ENGLISH_NAME'					=> 'Імя на ангельскім',
	'LANG_ISO_CODE'						=> 'Код ISO',
	'LANG_LOCAL_NAME'					=> 'Мясцовая назва',

	'MISSING_LANGUAGE_FILE'		=> 'Адсутнічае моўны файл: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Адсутныя моўныя пераменныя',
	'MODS_FILES'				=> 'Моўныя файлы модаў',

	'NO_FILE_SELECTED'				=> 'Вы не паказалі моўны файл.',
	'NO_LANG_ID'					=> 'Вы не паказалі моўны пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Вы не можаце выдаліць моўны пакет, выкарыстоўваны па змаўчанні.<br />Калі вы жадаеце выдаліць гэты пакет, спачатку зменіце мову канферэнцыі па змаўчанні.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Усе даступныя моўныя пакеты ўсталяваныя',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Выдаліць з папкі захоўвання',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Вылучыць фармат запампоўкі',
	'SUBMIT_AND_DOWNLOAD'		=> 'Адправіць форму і запампаваць файл',
	'SUBMIT_AND_UPLOAD'			=> 'Адправіць форму і загрузіць файл на сервер',

	'THOSE_MISSING_LANG_FILES'			=> 'Наступныя моўныя файлы адсутнічаюць у моўным пакеце %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Наступныя моўныя пераменныя адсутнічаюць у моўным пакеце <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Моўныя пакеты, даступныя для ўсталёўкі',

	'UNABLE_TO_WRITE_FILE'		=> 'Не атрымалася запісаць файл у %s.',
	'UPLOAD_COMPLETED'			=> 'Загрузка на сервер паспяхова завершаная.',
	'UPLOAD_FAILED'				=> 'Загрузка на сервер не атрымалася. Можа запатрабавацца замяніць адпаведны файл уручную.',
	'UPLOAD_METHOD'				=> 'Метад загрузкі на сервер',
	'UPLOAD_SETTINGS'			=> 'Налады загрузкі на сервер',

	'WRONG_LANGUAGE_FILE'		=> 'Вылучаны моўны файл недапушчальны.',
));

?>