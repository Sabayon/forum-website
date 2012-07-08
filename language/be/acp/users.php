<?php
/**
*
* acp_users [Belarusian]
*
* @package language
* @version $Id: users.php,v 1.32 2007/10/08 14:38:26 acydburn Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Папярэдні прагляд подпісу',
	'AT_LEAST_ONE_FOUNDER'	=> 'Вы не можаце панізіць статут гэтага фундатара да звычайнага карыстальніка. На канферэнцыі павінен быць прынамсі адзін фундатар. Калі вы жадаеце змяніць статут фундатара для гэтага карыстальніка, то спачатку зрабіце фундатарам іншага карыстальніка.',

	'BAN_ALREADY_ENTERED'	=> 'Раней забарона ўжо быў ажыццёўлены. Чорны спіс не абноўлены.',
	'BAN_SUCCESSFUL'		=> 'Карыстальнік паспяхова дададзены ў чорны спіс.',

	'CANNOT_BAN_FOUNDER'			=> 'Вы не можаце зачыніць доступ фундатарам.',
	'CANNOT_BAN_YOURSELF'			=> 'Вы не можаце зачыніць доступ самому сабе.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Вы не можаце дэактываваць уліковыя запісы ботаў. Калі ласка, дэактывуйце бота.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Вы не можаце дэактываваць уліковыя запісы фундатараў.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Вы не можаце дэактываваць уласны ўліковы запіс.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Вы не можаце патрабаваць паўторнай актывацыі ўліковага запісу бота. Калі ласка, вырабіце паўторную актывацыю бота.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Вы не можаце патрабаваць паўторнай актывацыі ўліковага запісу фундатара.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Вы не можаце патрабаваць паўторнай актывацыі ўласнага ўліковага запісу.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Вы не можаце выдаліць уліковы запіс госця.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Вы не можаце выдаліць уласны ўліковы запіс.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Вы не можаце зрабіць ігнаруемых карыстальнікаў фундатарамі.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Вы павінны актываваць карыстальнікаў, каб зрабіць іх фундатарамі. Толькі актываваным карыстальнікам можна падвысіць статут.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Гэтае поле неабходна запоўніць толькі калі вы змянілі email-адрас карыстальніка.',

	'DELETE_POSTS'			=> 'Выдаліць паведамленні',
	'DELETE_USER'			=> 'Выдаліць карыстальніка',
	'DELETE_USER_EXPLAIN'	=> 'Улічыце, што выдаленне карыстальніка незваротна, ён не можа быць адноўлены',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Прымусовая паўторная актывацыя паспяхова вырабленая.',
	'FOUNDER'						=> 'Фундатар',
	'FOUNDER_EXPLAIN'				=> 'Фундатары маюць усе правы адміністратара і не могуць быць абмежаваныя ў доступе (заблакаваныя), выдаленыя або паніжаныя ў статуце',

	'GROUP_APPROVE'					=> 'Ухваліць карыстальніка',
	'GROUP_DEFAULT'					=> 'Задаць для карыстальніка групу па змаўчанні',
	'GROUP_DELETE'					=> 'Выдаліць карыстальніка з групы',
	'GROUP_DEMOTE'					=> 'Зняць лідэра групы',
	'GROUP_PROMOTE'					=> 'Прызначыць лідэрам групы',

	'IP_WHOIS_FOR'			=> 'Аб IP %s',

	'LAST_ACTIVE'			=> 'Апошняе наведванне',

	'MOVE_POSTS_EXPLAIN'	=> 'Вылучыце форум, у які вы жадаеце перамясціць усе паведамленні дадзенага карыстальніка.',

	'NO_SPECIAL_RANK'		=> 'Адмысловага звання не прысвоена',
	'NOT_MANAGE_FOUNDER'	=> 'Вы паспрабавалі кіраваць уліковым запісам карыстальніка са статутам фундатара. Толькі фундатары могуць кіраваць уліковымі запісамі іншых фундатараў.',

	'QUICK_TOOLS'			=> 'Хуткія дзеянні',

	'REGISTERED'			=> 'Зарэгістраваны',
	'REGISTERED_IP'			=> 'Зарэгістраваны з IP-адрасы',
	'RETAIN_POSTS'			=> 'Пакінуць паведамленні',

	'SELECT_FORM'			=> 'Вылучыць форму',
	'SELECT_USER'			=> 'Вылучыць карыстальніка',

	'USER_ADMIN'					=> 'Кіраванне карыстальнікамі',
	'USER_ADMIN_ACTIVATE'			=> 'Актываваць уліковы запіс',
	'USER_ADMIN_ACTIVATED'			=> 'Карыстальнік паспяхова актываваны.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Аватара карыстальніка паспяхова выдаленая.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Забараніць email-адрас',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email-адрасы, забароненыя праз кіраванне карыстальнікамі',
	'USER_ADMIN_BAN_IP'				=> 'Забараніць IP-адрас',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-адрасы, забароненыя праз сістэму кіравання карыстальнікамі',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Імёны, забароненыя праз сістэму кіравання карыстальнікамі',
	'USER_ADMIN_BAN_USER'			=> 'Забараніць імя карыстальніка',
	'USER_ADMIN_DEACTIVATE'			=> 'Дэактываваць уліковы запіс',
	'USER_ADMIN_DEACTIVED'			=> 'Карыстальнік паспяхова дэактываваны.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Выдаліць усе ўкладанні',
	'USER_ADMIN_DEL_AVATAR'			=> 'Выдаліць аватару',
	'USER_ADMIN_DEL_POSTS'			=> 'Выдаліць усе паведамленні',
	'USER_ADMIN_DEL_SIG'			=> 'Выдаліць подпіс',
	'USER_ADMIN_EXPLAIN'			=> 'Тут вы можаце змяняць інфармацыю аб карыстальніках і некаторыя адмысловыя налады.',
	'USER_ADMIN_FORCE'				=> 'Прымусовая паўторная актывацыя',
	'USER_ADMIN_MOVE_POSTS'			=> 'Перамясціць усе паведамленні',
	'USER_ADMIN_SIG_REMOVED'		=> 'Подпіс карыстальніка паспяхова выдаленая.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Усё ўкладанні дадзенага карыстальніка паспяхова выдаленыя.',
	'USER_AVATAR_UPDATED'			=> 'Інфармацыя аб аватары карыстальніка паспяхова абноўленая.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Дадатковыя палі профіля',
	'USER_DELETED'					=> 'Карыстальнік паспяхова выдалены.',
	'USER_GROUP_ADD'				=> 'Дадаць карыстальніка ў групу',
	'USER_GROUP_NORMAL'				=> 'Створаныя групы, у якія ўваходзіць карыстальнік',
	'USER_GROUP_PENDING'			=> 'Групы, у якіх карыстальнік з\'яўляецца кандыдатам',
	'USER_GROUP_SPECIAL'			=> 'Прадусталяваныя групы, у якія ўваходзіць карыстальнік',
	'USER_NO_ATTACHMENTS'			=> 'Укладанні адсутнічаюць.',
	'USER_OVERVIEW_UPDATED'			=> 'Інфармацыя аб карыстальніку абноўленая.',
	'USER_POSTS_DELETED'			=> 'Усё паведамленні дадзенага карыстальніка паспяхова выдаленыя.',
	'USER_POSTS_MOVED'				=> 'Паведамленні карыстальніка паспяхова перамешчаныя ў паказаны форум.',
	'USER_PREFS_UPDATED'			=> 'Налады карыстальніка абноўленыя.',
	'USER_PROFILE'					=> 'Профіль карыстальніка',
	'USER_PROFILE_UPDATED'			=> 'Профіль карыстальніка абноўлены.',
	'USER_RANK'						=> 'Званне карыстальніка',
	'USER_RANK_UPDATED'				=> 'Званне карыстальніка абноўленае.',
	'USER_SIG_UPDATED'				=> 'Подпіс карыстальніка паспяхова абноўленая.',
	'USER_TOOLS'					=> 'Асноўныя прылады',
));

?>