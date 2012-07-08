<?php
/**
*
* groups [Farsi]
*
* @package language
* @version $Id: groups.php,v 1.22 2007/10/04 15:07:24 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'		=> 'The selected group is already your default group',
	'ALREADY_IN_GROUP'			=> 'شما قبلا کاربر اين گروه بوده ايد !',
	'ALREADY_IN_GROUP_PENDING'	=> 'شما قبلا درخواست خود را براي عضويت در اين گروه ارائه كرده ايد.',
	
	'CANNOT_JOIN_GROUP'			=> 'شما فقط مي توانيد در گروه هاي باز يا رايگان عضو شويد.',
	'CANNOT_RESIGN_GROUP'		=> 'شما نمي توانيد از اين گروه کناره گيري کنيد.شما فقط مي توانيد در گروه هاي باز يا آزاد عضويت خخود را لغو کنيد',

	'CHANGED_DEFAULT_GROUP'	=> 'Successfully changed default group.',
	
	'GROUP_AVATAR'						=> 'نماد گروه', 
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CLOSED'						=> 'بسته شده',
	'GROUP_DESC'						=> 'توضيحات گروه',
	'GROUP_HIDDEN'						=> 'مخفي',
	'GROUP_INFORMATION'					=> 'اطلاعات گروه کاربري', 
	'GROUP_IS_CLOSED'					=> 'This is a closed group, new members can only join upon invitation of a group leader.',
	'GROUP_IS_FREE'						=> 'This is a freely open group, all new members are welcome.', 
	'GROUP_IS_HIDDEN'					=> 'This is a hidden group, only members of this group can view its membership.',
	'GROUP_IS_OPEN'						=> 'اين يك گروه باز است، اعضا ميتوانند درخواست عضويت دهند.',
	'GROUP_IS_SPECIAL'					=> 'اين يك گروه ويژه است، گروههاي ويژه توسط ادمين، مديريت ميشوند.', 
	'GROUP_JOIN'						=> 'عضويت در گروه',
	'GROUP_JOIN_CONFIRM'				=> 'آيا از عضويت در گروه انتخاب شده اطمينان داريد ؟',
	'GROUP_JOIN_PENDING'				=> 'درخواست براي عضويت',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'آيا مطمئنيد كه ميخواهيد عضو اين گروه شويد؟',
	'GROUP_JOINED'						=> 'با موفقيت در گروه انتخاب شده عضو شديد.',
	'GROUP_JOINED_PENDING'				=> 'Successfully requested group membership. Please wait for a group leader to approve your membership.',
	'GROUP_LIST'						=> 'مديريت کاربران',
	'GROUP_MEMBERS'						=> 'کاربران گروه',
	'GROUP_NAME'						=> 'نام گروه',
	'GROUP_OPEN'						=> 'باز',
	'GROUP_RANK'						=> 'امتياز گروه', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'استعفا از گروه کاربري',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Are you sure you want to resign your membership from the selected group?',
	'GROUP_RESIGN_PENDING'				=> 'Resign a pending group membership',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'You were successfully removed from the selected group.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.',
	'GROUP_TYPE'						=> 'نوع گروه',
	'GROUP_UNDISCLOSED'					=> 'گروه مخفي',
	'FORUM_UNDISCLOSED'					=> 'Moderating hidden forum(s)',

	'LOGIN_EXPLAIN_GROUP'	=> 'براي مشاهده مشخصات گروه بايد با نام کاربري خود وارد شويد',

	'NO_LEADERS'					=> 'شما رهبر هيچ گروهي نيستيد.',
	'NOT_LEADER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a leader of the selected group.',
	'NOT_MEMBER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a member of the selected group or your membership has not been approved yet.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'You are not allowed to resign from your default group.',
	
	'PRIMARY_GROUP'		=> 'گروه اصلي',

	'REMOVE_SELECTED'		=> 'حذف انتخاب شده ها',

	'USER_GROUP_CHANGE'			=> 'From “%1$s” group to “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Demote leadership',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Are you sure you want to demote as group leader from the selected group?',
	'USER_GROUP_DEMOTED'		=> 'Successfully demoted your leadership.',
));

?>