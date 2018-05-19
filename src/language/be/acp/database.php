<?php
/**
*
* acp_database [Belarusian]
*
* @package language
* @version $Id: database.php,v 1.25 2007/10/04 15:07:24 acydburn Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Тут вы можаце стварыць рэзервовую копію ўсіх дадзеных канферэнцыі. Вы можаце захаваць канчатковы архіў на серверы ў папцы <samp>store/</samp> або запампаваць яго. У залежнасці ад канфігурацыі сервера можа быць даступна сціск файла рэзервовай копіі ў некалькіх фарматах.',
	'ACP_RESTORE_EXPLAIN'	=> 'Будзе выраблена поўнае аднаўленне ўсіх табліц phpBB з захаванага файла. Калі сервер падтрымлівае такую магчымасць, вы можаце выкарыстаць сціснутыя файлы gzip або bzip2, якія будуць аўтаматычна разархівірованыя. <strong>Увага:</strong> усе наяўныя дадзеныя будуць знішчаныя. Аднаўленне можа заняць працяглы час, таму не сыходзіце з гэтай старонкі да поўнага завяршэння працэсу. Рэзервовыя копіі, меркавана створаныя сродкамі phpBB, захаваныя ў папцы <samp>store/</samp>. Аднаўленне з рэзервовых дзід, створаных не з выкарыстаннем убудаванай сістэмы, можа патрываць няўдачу.',

	'BACKUP_DELETE'		=> 'Файл рэзервовай копіі паспяхова выдалены.',
	'BACKUP_INVALID'	=> 'Вылучаны недапушчальны файл рэзервовай копіі.',
	'BACKUP_OPTIONS'	=> 'Параметры рэзервовага капіявання',
	'BACKUP_SUCCESS'	=> 'Файл рэзервовай копіі паспяхова створаны.',
	'BACKUP_TYPE'		=> 'Тып копіі',

	'DATABASE'			=> 'Кіраванне БД',
	'DATA_ONLY'			=> 'Толькі дадзеныя',
	'DELETE_BACKUP'		=> 'Выдаліць рэзервовую копію',
	'DELETE_SELECTED_BACKUP'	=> 'Вы сапраўды жадаеце выдаліць вылучаную копію?',
	'DESELECT_ALL'		=> 'Зняць вылучэнне',
	'DOWNLOAD_BACKUP'	=> 'Запампаваць рэзервовую копію',

	'FILE_TYPE'			=> 'Тып файла',
	'FULL_BACKUP'		=> 'Поўная',

	'RESTORE_FAILURE'		=> 'Магчыма файл з рэзервовай копіяй пашкоджаны.',
	'RESTORE_OPTIONS'		=> 'Параметры аднаўлення',
	'RESTORE_SUCCESS'		=> 'База дадзеных паспяхова адноўленая.<br /><br />Канферэнцыя адноўленая да стану на момант стварэння рэзервовай копіі.',

	'SELECT_ALL'			=> 'Вылучыць усё',
	'SELECT_FILE'			=> 'Вылучыце файл',
	'START_BACKUP'			=> 'Пачаць рэзервовае капіяванне',
	'START_RESTORE'			=> 'Пачаць аднаўленне',
	'STORE_AND_DOWNLOAD'	=> 'Захаваць на серверы і запампаваць',
	'STORE_LOCAL'			=> 'Захаваць на серверы',
	'STRUCTURE_ONLY'		=> 'Толькі структура',

	'TABLE_SELECT'		=> 'Выбар табліц',
	'TABLE_SELECT_ERROR'=> 'Неабходна вылучыць хоць бы адну табліцу.',
));

?>