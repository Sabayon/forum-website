<?php
/**
*
* acp_prune [Belarusian]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Тут вы можаце выдаліць (або дэактываваць) карыстальнікаў вашай канферэнцыі. Для гэтага існуюць розныя крытэры: па ліку паведамленняў, па часе апошняга наведвання і г.д. Усе іх можна сумяшчаць адно з адным, напрыклад, прыбраць карыстальнікаў, якія наведалі канферэнцыю апошні раз не пазней 01.01.2002 з лікам паведамленняў меней 10. У якасці альтэрнатывы вы можаце непасрэдна ўвесці спіс карыстальнікаў у тэкставае акно, пры гэтым усе астатнія крытэры адбору будуць праігнараваныя. Будзьце асцярожныя з гэтай функцыяй! Выдаленых карыстальнікаў нельга аднавіць.',

	'DEACTIVATE_DELETE'			=> 'Дэактываваць або выдаліць',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Вылучыце дзеянне над карыстальнікамі. Улічыце, што адмяніць яго будзе немагчыма!',
	'DELETE_USERS'				=> 'Выдаліць',
	'DELETE_USER_POSTS'			=> 'Выдаліць таксама іх паведамлення',
	'DELETE_USER_POSTS_EXPLAIN' => 'Выдаляе карыстальнікаў разам з іх паведамленнямі. Не працуе, калі вылучаная дэактывацыя карыстальнікаў.',

	'JOINED_EXPLAIN'			=> 'Увядзіце дату ў фармаце <kbd>ГГГГ-ММ-ДД</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Увядзіце дату ў фармаце <kbd>ГГГГ-ММ-ДД</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Карыстальнікі для выдалення або дэактывацыі',
	'PRUNE_USERS_LIST_DELETE'		=> 'З вылучаным крытэрыям наступныя карыстальнікі будуць выдаленыя.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'З вылучаным крытэрыям наступныя карыстальники будуць дэактываваны.',

	'SELECT_USERS_EXPLAIN'		=> 'Увядзіце тут пэўныя імёны карыстальнікаў, калі не жадаеце выкарыстаць крытэры пошуку вышэй.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Адабраныя карыстальнікі паспяхова дэактываваныя.',
	'USER_DELETE_SUCCESS'		=> 'Адабраныя карыстальнікі паспяхова выдаленыя.',
	'USER_PRUNE_FAILURE'		=> 'Няма карыстальнікаў, прыдатных пад паказаныя крытэры.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Недапушчальны фармат даты. Дата павінна быць у фармаце <kbd>ГГГГ-ММ-ДД</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Будуць выдаленыя ўсе тэмы, у якія не пісалі і якія не праглядалі паказаную колькасць дзён. Калі вы не ўвядзеце лік дзён, то будуць выдаленыя ўсе тэмы. Па змаўчанні тэмы, у якіх працягваюцца апытанні, а таксама прылепленыя тэмы і аб\'явы не будуць выдаленыя.',

	'FORUM_PRUNE'		=> 'Чыстка форумаў',

	'NO_PRUNE'			=> 'Чыстка форумаў не вырабленая.',

	'SELECTED_FORUM'	=> 'Вылучаны форум',
	'SELECTED_FORUMS'	=> 'Вылучаныя форумы',

	'POSTS_PRUNED'					=> 'Паведамленняў выдаленае',
	'PRUNE_ANNOUNCEMENTS'			=> 'Выдаляць аб\'явы',
	'PRUNE_FINISHED_POLLS'			=> 'Выдаляць скончаныя апытанні',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Выдаляць тэмы, у якіх апытанні завершаныя.',
	'PRUNE_FORUM_CONFIRM'			=> 'Аднавіць выдаленыя тэмы і паведамленні немагчыма. Вы сапраўды жадаеце ачысціць вылучаныя форумы з паказанымі параметрамі?',
	'PRUNE_NOT_POSTED'				=> 'Дзён з апошняга паведамлення',
	'PRUNE_NOT_VIEWED'				=> 'Дзён з апошняга прагляду',
	'PRUNE_OLD_POLLS'				=> 'Выдаляць старыя апытанні',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Выдаляць тэмы, у апытаннях якіх не было галасоў за паказанае вышэй колькасць дзён.',
	'PRUNE_STICKY'					=> 'Выдаляць прылепленыя тэмы',
	'PRUNE_SUCCESS'					=> 'Форумы паспяхова вычышчаныя',

	'TOPICS_PRUNED'		=> 'Тэм выдалена',
));

?>