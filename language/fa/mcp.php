<?php
/**
*
* mcp [Farsi]
*
* @package language
* @version $Id: mcp.php,v 1.83 2007/10/04 15:07:24 acydburn Exp $
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
	'ACTION'				=> 'اعمال',
	'ACTION_NOTE'			=> 'عمل / يادداشت',
	'ADD_FEEDBACK'			=> 'افزودن يادداشت',
	'ADD_FEEDBACK_EXPLAIN'	=> 'If you would like to add a report on this please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted.',
	'ADD_WARNING'			=> 'متن اخطار',
	'ADD_WARNING_EXPLAIN'	=> 'براي ارسال اخطار به كاربر فرم زير را پركنيد. توجه كنيد كه BBCode,HTML و ...نمايش داده نمي شوند',
	'ALL_ENTRIES'			=> 'All entries',
	'ALL_NOTES_DELETED'		=> 'Successfully removed all user notes.',
	'ALL_REPORTS'			=> '&#1607;&#1605;&#1607; &#1711;&#1586;&#1575;&#1585;&#1588; &#1607;&#1575;',
	'ALREADY_REPORTED'		=> 'This post has already been reported.',
		'ALREADY_REPORTED_PM'	=> 'This private message has already been reported.',
	'ALREADY_WARNED'		=> 'A warning has already been issued for this post.',
	'APPROVE'				=> '&#1578;&#1575;&#1740;&#1740;&#1583;',
	'APPROVE_POST'			=> '&#1578;&#1575;&#1740;&#1740;&#1583; &#1662;&#1587;&#1578;',
	'APPROVE_POST_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1578;&#1575;&#1740;&#1740;&#1583; &#1705;&#1585;&#1583;&#1606; &#1662;&#1587;&#1578; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',
	'APPROVE_POSTS'			=> '&#1578;&#1575;&#1740;&#1740;&#1583; &#1662;&#1587;&#1578; &#1607;&#1575;',
	'APPROVE_POSTS_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1578;&#1575;&#1740;&#1740;&#1583; &#1705;&#1585;&#1583;&#1606; &#1575;&#1740;&#1606; &#1662;&#1587;&#1578; &#1607;&#1575; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',

	'CANNOT_MOVE_SAME_FORUM'=> 'You cannot move a topic to the forum itâ€™s already in.',
	'CANNOT_WARN_ANONYMOUS'	=> '&#1588;&#1605;&#1575; &#1606;&#1605;&#1740; &#1578;&#1608;&#1575;&#1606;&#1740;&#1583; &#1576;&#1607; &#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1593;&#1590;&#1608; &#1606;&#1588;&#1583;&#1607; &#1608; &#1605;&#1607;&#1605;&#1575;&#1606; &#1575;&#1582;&#1591;&#1575;&#1585; &#1583;&#1607;&#1740;&#1583;.',
	'CANNOT_WARN_SELF'		=> '&#1606;&#1605;&#1740; &#1578;&#1608;&#1575;&#1606;&#1740;&#1583; &#1576;&#1607; &#1582;&#1608;&#1583;&#1578;&#1575;&#1606; &#1575;&#1582;&#1591;&#1575;&#1585; &#1583;&#1607;&#1740;&#1583;.',
	'CAN_LEAVE_BLANK'		=> 'می توانید این قسمت را خالی بگذارید.',
	'CHANGE_POSTER'			=> '&#1578;&#1594;&#1740;&#1740;&#1585; &#1575;&#1585;&#1587;&#1575;&#1604; &#1705;&#1606;&#1606;&#1583;&#1607;',
	'CLOSE_REPORT'			=> '&#1576;&#1587;&#1578;&#1606; &#1711;&#1586;&#1575;&#1585;&#1588;',
	'CLOSE_REPORT_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1602;&#1601;&#1604; &#1705;&#1585;&#1583;&#1606; &#1711;&#1586;&#1575;&#1585;&#1588; &#1607;&#1575; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',
	'CLOSE_REPORTS'			=> '&#1576;&#1587;&#1578;&#1605; &#1711;&#1586;&#1575;&#1585;&#1588; &#1607;&#1575;',
	'CLOSE_REPORTS_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1576;&#1587;&#1578;&#1606; &#1711;&#1586;&#1575;&#1585;&#1588; &#1607;&#1575;&#1740; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',

	'DELETE_POSTS'				=> '&#1576;&#1587;&#1578;&#1606; &#1662;&#1587;&#1578; &#1607;&#1575;',
	'DELETE_POSTS_CONFIRM'		=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1581;&#1584;&#1601; &#1575;&#1740;&#1606; &#1662;&#1587;&#1578; &#1607;&#1575; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',
	'DELETE_POST_CONFIRM'		=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1581;&#1584;&#1601; &#1662;&#1587;&#1578; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',
	'DELETE_REPORT'				=> '&#1581;&#1584;&#1601; &#1711;&#1586;&#1575;&#1585;&#1588;',
	'DELETE_REPORT_CONFIRM'		=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1581;&#1584;&#1601; &#1711;&#1586;&#1575;&#1585;&#1588; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',
	'DELETE_REPORTS'			=> '&#1576;&#1587;&#1578;&#1606; &#1711;&#1586;&#1575;&#1585;&#1588; &#1607;&#1575;',
	'DELETE_REPORTS_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1581;&#1584;&#1601; &#1711;&#1586;&#1575;&#1585;&#1588; &#1607;&#1575;&#1740; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583;',
	'DELETE_SHADOW_TOPIC'		=> '&#1581;&#1584;&#1601; &#1585;&#1583;&#1662;&#1575;&#1740; &#1605;&#1576;&#1581;&#1579;',
	'DELETE_TOPICS'				=> '&#1581;&#1584;&#1601; &#1605;&#1576;&#1575;&#1581;&#1579; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607;',
	'DELETE_TOPICS_CONFIRM'		=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1605;&#1576;&#1581;&#1579;  &#1607;&#1575; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583; &#1567;',
	'DELETE_TOPIC_CONFIRM'		=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1581;&#1584;&#1601; &#1575;&#1740;&#1606; &#1605;&#1576;&#1581;&#1579; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583; &#1567;',
	'DISAPPROVE'				=> '&#1604;&#1594;&#1608; &#1578;&#1575;&#1740;&#1740;&#1583;',
	'DISAPPROVE_REASON'			=> '&#1583;&#1604;&#1740;&#1604; &#1576;&#1585;&#1575;&#1740; &#1578;&#1575;&#1740;&#1740;&#1583; &#1606;&#1588;&#1583;&#1606;',
	'DISAPPROVE_POST'			=> '&#1578;&#1575;&#1740;&#1740;&#1583; &#1606;&#1705;&#1585;&#1583;&#1606; &#1662;&#1587;&#1578;',
	'DISAPPROVE_POST_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1578;&#1575;&#1740;&#1740;&#1583; &#1606;&#1705;&#1585;&#1583;&#1606; &#1662;&#1587;&#1578; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583; &#1567;',
	'DISAPPROVE_POSTS'			=> '&#1578;&#1575;&#1740;&#1740;&#1583; &#1606;&#1705;&#1585;&#1583;&#1606; &#1662;&#1587;&#1578; &#1607;&#1575;',
	'DISAPPROVE_POSTS_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1581;&#1584;&#1601; &#1705;&#1585;&#1583;&#1606; &#1662;&#1587;&#1578; &#1607;&#1575; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583; &#1567;',
	'DISPLAY_LOG'				=> '&#1606;&#1605;&#1575;&#1740;&#1588; &#1605;&#1608;&#1580;&#1608;&#1583;&#1740; &#1607;&#1575; &#1575;&#1586; &#1662;&#1740;&#1588;',
	'DISPLAY_OPTIONS'			=> '&#1578;&#1606;&#1592;&#1740;&#1605;&#1575;&#1578; &#1592;&#1575;&#1607;&#1585;&#1740;',

	'EMPTY_REPORT'					=> 'You must enter a description when selecting this reason.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Please note that one or several topics have been removed from the database because they were or become empty.',

	'FEEDBACK'				=> '&#1583;&#1601;&#1578;&#1585; &#1740;&#1575;&#1583;&#1583;&#1575;&#1588;&#1578;',
	'FORK'					=> '&#1705;&#1662;&#1740;',
	'FORK_TOPIC'			=> '&#1705;&#1662;&#1740; &#1575;&#1586; &#1605;&#1576;&#1581;&#1579;',
	'FORK_TOPIC_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1606;&#1587;&#1582;&#1607; &#1576;&#1585;&#1583;&#1575;&#1585;&#1740; &#1575;&#1586; &#1605;&#1576;&#1581;&#1579; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583; &#1567;',
	'FORK_TOPICS'			=> '&#1705;&#1662;&#1740; &#1605;&#1576;&#1575;&#1581;&#1579; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607;',
	'FORK_TOPICS_CONFIRM'	=> '&#1570;&#1740;&#1575; &#1575;&#1586; &#1606;&#1587;&#1582;&#1607; &#1576;&#1585;&#1583;&#1575;&#1585;&#1740; &#1605;&#1576;&#1575;&#1581;&#1579; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1583;&#1575;&#1585;&#1740;&#1583; &#1567;',
	'FORUM_DESC'			=> '&#1578;&#1608;&#1590;&#1740;&#1581;&#1575;&#1578;',
	'FORUM_NAME'			=> '&#1606;&#1575;&#1605; &#1575;&#1606;&#1580;&#1605;&#1606;',
	'FORUM_NOT_EXIST'		=> '&#1575;&#1606;&#1580;&#1605;&#1606; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1605;&#1608;&#1580;&#1608;&#1583; &#1606;&#1605;&#1740; &#1576;&#1575;&#1588;&#1583;.',
	'FORUM_NOT_POSTABLE'	=> 'The forum you selected cannot be posted to.',
	'FORUM_STATUS'			=> '&#1608;&#1590;&#1593;&#1740;&#1578; &#1575;&#1606;&#1580;&#1605;&#1606;',
	'FORUM_STYLE'			=> '&#1602;&#1575;&#1604;&#1576; &#1575;&#1606;&#1580;&#1605;&#1606;',

	'GLOBAL_ANNOUNCEMENT'	=> '&#1575;&#1591;&#1604;&#1575;&#1593;&#1740;&#1607; &#1705;&#1604;&#1740;',

	'IP_INFO'				=> '&#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1570;&#1583;&#1585;&#1587; IP',
	'IPS_POSTED_FROM'		=> 'IP هايي كه اين كاربر از آن ارسال انجام داده',

	'LATEST_LOGS'				=> '5 &#1593;&#1605;&#1604;&#1705;&#1585;&#1583; &#1570;&#1582;&#1585;',
	'LATEST_REPORTED'			=> '5 &#1711;&#1586;&#1575;&#1585;&#1588; &#1570;&#1582;&#1585;',
	'LATEST_UNAPPROVED'			=> '5 &#1662;&#1587;&#1578; &#1570;&#1582;&#1585; &#1604;&#1740;&#1587;&#1578; &#1575;&#1606;&#1578;&#1592;&#1575;&#1585;',
	'LATEST_WARNING_TIME'		=> 'Latest warning issued',
	'LATEST_WARNINGS'			=> '5 &#1711;&#1586;&#1575;&#1585;&#1588; &#1570;&#1582;&#1585;',
	'LEAVE_SHADOW'				=> 'ایجاد ردپای این موضوع در این قسمت',
	'LIST_REPORT'				=> '1 &#1711;&#1586;&#1575;&#1585;&#1588;',
	'LIST_REPORTS'				=> '%d &#1711;&#1586;&#1575;&#1585;&#1588;',
	'LOCK'						=> '&#1576;&#1587;&#1578;&#1606;',
	'LOCK_POST_POST'			=> '&#1602;&#1601;&#1604; &#1705;&#1585;&#1583;&#1606; &#1662;&#1587;&#1578;',
	'LOCK_POST_POST_CONFIRM'	=> 'Are you sure you want to prevent editing this post?',
	'LOCK_POST_POSTS'			=> 'Lock selected posts',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Are you sure you want to prevent editing the selected posts?',
	'LOCK_TOPIC_CONFIRM'		=> 'آیا شما از قفل کردن این مقاله مطمئن هستید؟',
	'LOCK_TOPICS'				=> 'Lock selected topics',
	'LOCK_TOPICS_CONFIRM'		=> 'Are you sure you want to lock all selected topics?',
	'LOGS_CURRENT_TOPIC'		=> 'Currently viewing logs of:',
	'LOGIN_EXPLAIN_MCP'			=> 'To moderate this forum you must login.',
	'LOGVIEW_VIEWTOPIC'			=> 'View topic',
	'LOGVIEW_VIEWLOGS'			=> 'View topic log',
	'LOGVIEW_VIEWFORUM'			=> 'View forum',
	'LOOKUP_ALL'				=> 'مشاهده همه IP ها',
	'LOOKUP_IP'					=> 'Look up IP',

	'MARKED_NOTES_DELETED'		=> 'Successfully removed all marked user notes.',

	'MCP_ADD'						=> 'افزودن يک اخطار',

	'MCP_BAN'					=> 'قطع دسترسي',
	'MCP_BAN_EMAILS'			=> '&#1575;&#1740;&#1605;&#1604; &#1607;&#1575;&#1740; &#1578;&#1581;&#1585;&#1740;&#1605; &#1588;&#1583;&#1607;',
	'MCP_BAN_IPS'				=> 'قطع دسترسي IP',
	'MCP_BAN_USERNAMES'			=> '&#1606;&#1575;&#1605; &#1607;&#1575;&#1740; &#1705;&#1575;&#1585;&#1576;&#1585;&#1740; &#1578;&#1581;&#1585;&#1740;&#1605; &#1588;&#1583;&#1607;',

	'MCP_LOGS'						=> 'کارنامه مدير انجمن',
	'MCP_LOGS_FRONT'				=> 'صفحه نخست',
	'MCP_LOGS_FORUM_VIEW'			=> 'کارنامه انجمن',
	'MCP_LOGS_TOPIC_VIEW'			=> 'کارنامه مبحث',

	'MCP_MAIN'						=> 'اصلي',
	'MCP_MAIN_FORUM_VIEW'			=> 'نمايش انجمن',
	'MCP_MAIN_FRONT'				=> 'صفحه لوب',
	'MCP_MAIN_POST_DETAILS'			=> 'چزييات پست',
	'MCP_MAIN_TOPIC_VIEW'			=> 'نمايش مبحث',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'تبديل به اعلان',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'آيا مطمئنيد اين تاپيك به اعلان تبديل شود ؟',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'تبديل به اعلان',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'آيا مطمئنيد اين تاپيك به اعلان تبديل شود ؟',
	'MCP_MAKE_GLOBAL'				=> 'تبديل تاپيك به اعلان سراسري',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'در مورد تبديل تاپيك به اعلان سراسري اطمينان داريد ؟',
	'MCP_MAKE_GLOBALS'				=> 'تبديل تاپيك به اعلان سراسري',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'در مورد تبديل تاپيك به اعلان سراسري اطمينان داريد ؟',
	'MCP_MAKE_STICKY'				=> 'مهم کردن تاپیک',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'آيا مطمئن هستيد كه اين تاپيك به «مهم» تبديل شود؟',
	'MCP_MAKE_STICKIES'				=> 'تبدیل تاپیک به مهم',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'آيا مطمئن هستيد كه اين تاپيك به «مهم» تبديل شود؟',
	'MCP_MAKE_NORMAL'				=> 'تبديل تاپيك به حالت استاندارد',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'در مورد تبديل تاپيك به حالت استاندارد مطمئنيد ؟',
	'MCP_MAKE_NORMALS'				=> 'تبديل تاپيك به حالت استاندارد',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'در مورد تبديل تاپيك به حالت استاندارد مطمئنيد ؟',

	'MCP_NOTES'						=> 'يادداشتهاي کاربر',
	'MCP_NOTES_FRONT'				=> 'صفحه اول',
	'MCP_NOTES_USER'				=> 'اطلاعات کاربر',

	'MCP_POST_REPORTS'				=> 'گزارش هاي صادر شده براي اين پست',

	'MCP_PM_REPORTS'				=> 'Reported PMs',
	'MCP_PM_REPORT_DETAILS'			=> 'PM Report details',
	'MCP_PM_REPORTS_CLOSED'			=> 'گزارشات بسته شده پیام خصوصی',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'This is a list of all reports about private messages which have previously been resolved.',
	'MCP_PM_REPORTS_OPEN'			=> 'گزارشات باز پیام خصوصی',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'This is a list of all reported private messages which are still to be handled.',

	'MCP_REPORTS'					=> 'پیام های گزارش داده شده',
	'MCP_REPORT_DETAILS'			=> 'اطلاعات گزارش',
	'MCP_REPORTS_CLOSED'			=> 'گزارش هاي محصور شده',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'This is a list of all reports about posts which have previously been resolved.',
	'MCP_REPORTS_OPEN'				=> 'گزارش هاي آزاد',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'ليست پست هاي گزارش داده شده.',

	'MCP_QUEUE'								=> 'خط اعتدال',
	'MCP_QUEUE_APPROVE_DETAILS'				=> '',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'پست هاي ليست انتظار',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'مطالب در انتظار تاييد',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'مبحث هاي ليست انتظار',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'مباحث در انتظار تاييد',

	'MCP_VIEW_USER'			=> 'نمايش اخطار ها براي کاربر تعيين شده',

	'MCP_WARN'				=> 'اخطارها',
	'MCP_WARN_FRONT'		=> 'صفحه اول',
	'MCP_WARN_LIST'			=> 'ليست اخطارها',
	'MCP_WARN_POST'			=> 'اخطار براي پست تعيين شده',
	'MCP_WARN_USER'			=> 'اخطار دادن به كاربر',

	'MERGE_POSTS'			=> 'ترکيب کردن پست ها',
	'MERGE_POSTS_CONFIRM'	=> 'در مورد ادغام پست هاي انتخاب شده مطمئنيد ؟?',
	'MERGE_TOPIC_EXPLAIN'	=> 'لطفا ID تاپيك مقصد را وارد كنيد يا روي دكمه جستجوي تاپيك كليك كنيد .',
	'MERGE_TOPIC_ID'		=> 'شماره ID تاپيك مقصد',
	'MERGE_TOPICS'			=> 'شکافتن مباحث',
	'MERGE_TOPICS_CONFIRM'	=> 'در مورد ادغام اين تاپيك ها مطمئنيد ؟',
	'MODERATE_FORUM'		=> 'اداره کردن انجمن',
	'MODERATE_TOPIC'		=> 'اداره کردن مبحث',
	'MODERATE_POST'			=> 'اداره کردن پست',
	'MOD_OPTIONS'			=> 'تنظيمات مدير انجمن',
	'MORE_INFO'				=> 'اطلاعات بيشتر',
	'MOST_WARNINGS'			=> 'کاربرانِ دارنده بيشترين اخطار',
	'MOVE_TOPIC_CONFIRM'	=> 'از انتقال مبحث به انجمن جديد اطمينان داريد?',
	'MOVE_TOPICS'			=> 'انتقال مباحث انتخاب شده',
	'MOVE_TOPICS_CONFIRM'	=> 'آيا از انتقال مبحث به انجمن جديد اطمينان داريد ؟',

	'NOTIFY_POSTER_APPROVAL'		=> 'با خبر کردن ارسال کننده درباره تاييد ؟',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'باخبر کردن ارسال کننده از تاييد نشدن ؟',
	'NOTIFY_USER_WARN'				=> 'باخبر کردن کاربر درباره اخطار ؟',
	'NOT_MODERATOR'					=> 'هيچ مدير انجمني براي اين انجمن نمي باشد.',
	'NO_DESTINATION_FORUM'			=> 'لطفا يک انجمن براي مقصد انتخاب کنيد.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'انجمن مقصد وجود ندارد.',
	'NO_ENTRIES'					=> 'هيچ عملياتي براي اين دوره موجود نمي باشد.',
	'NO_FEEDBACK'					=> 'هيچ يادداشتي براي اين کاربر موجود نيست.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'شما باید برای ادغام پست، باید یک موضوع را انتخاب کنید.',
	'NO_MATCHES_FOUND'				=> 'نتيجه هماهنگي پيدا نشد.',
	'NO_POST'						=> 'You have to select a post in order to warn the user for a post.',
	'NO_POST_REPORT'				=> 'This post was not reported.',
	'NO_POST_SELECTED'				=> 'شما براي انجام دادن اين عمل، حداقل بايد يك موضوع را انتخاب كرده باشيد.',
	'NO_REASON_DISAPPROVAL'			=> 'Please give an appropriate reason for disapproval.',
	'NO_REPORT'						=> 'هيچ گزارشي پيدا نشد',
	'NO_REPORTS'					=> 'هيچ گزارشي پيدا نشد',	
	'NO_REPORT_SELECTED'			=> 'شما براي انجام دادن اين عمل، حداقل بايد يك موضوع را انتخاب كرده باشيد.',
	'NO_TOPIC_ICON'					=> 'هيچ',
	'NO_TOPIC_SELECTED'				=> 'شما براي انجام دادن اين عمل، حداقل بايد يك موضوع را انتخاب كرده باشيد.',
	'NO_TOPICS_QUEUE'				=> 'هيچ مبحثي در انتظار براي تاييد نمي باشد.',

	'ONLY_TOPIC'			=> 'فقط تاپيك %s',
	'OTHER_USERS'			=> 'ساير كاربران استفاده كننده از اين IP',

	'POSTER'					=> 'ارسال كننده',
	'POSTS_APPROVED_SUCCESS'	=> 'پست هاي انتخاب شده تاييد صلاحيت شدند.',
	'POSTS_DELETED_SUCCESS'		=> 'پست هاي انتخاب شده با موفقيت از پايگاه داده ها حذف شدند.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'پست هاي انتخاب شده عدم صلاحيت شدند.',
	'POSTS_LOCKED_SUCCESS'		=> 'پست هاي انتخاب شده قفل شدند.',
	'POSTS_MERGED_SUCCESS'		=> 'پست ها انتخاب شده با موفقیت ادغام شدند.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'پست هاي انتخاب شده با موفقيت باز شدند.',
	'POSTS_PER_PAGE'			=> 'پست در هر صفحه',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(براي مشاهده همه پست ها 0 را بکارببريد.)',
	'POST_APPROVED_SUCCESS'		=> 'پست انتخاب شده با موفقيت تاييد شد.',
	'POST_DELETED_SUCCESS'		=> 'پست انتخاب شده با موفقيت از پايگاه داده ها حذف شد.',
	'POST_DISAPPROVED_SUCCESS'	=> 'پست انتخاب شده تاييد نشده بوده است.',
	'POST_LOCKED_SUCCESS'		=> 'پست با موفقيت قفل شد.',
	'POST_NOT_EXIST'			=> 'پست درخواست شده شما موجود نمي باشد.',
	'POST_REPORTED_SUCCESS'		=> 'گزارش اين پست با موفقيت صادر شد.',
	'POST_UNLOCKED_SUCCESS'		=> 'پست با موفقيت باز شد.',

	'READ_USERNOTES'			=> 'يادداشت هاي کاربر',
	'READ_WARNINGS'				=> 'اخطار هاي کاربر',
	'REPORTER'					=> 'گزارش دهنده',
	'REPORTED'					=> 'Reported',
	'REPORTED_BY'				=> 'گزارش داده شده توسط',
	'REPORTED_ON_DATE'			=> 'در',
	'REPORTS_CLOSED_SUCCESS'	=> 'گزارش هاي انتخاب شده با موفقيت قفل شدند.',
	'REPORTS_DELETED_SUCCESS'	=> 'گزارش هاي انتخاب شده با موفقيت حذف شدند.',
	'REPORTS_TOTAL'				=> 'بطور کلي <strong>%d</strong> گزارش براي تجديد نظر موجود است.',
	'REPORTS_ZERO_TOTAL'		=> 'هيچ گزارشي براي بازبيني موجود نمي باشد.',
	'REPORT_CLOSED'				=> 'اين گزارش پيش از اين قفل شده بود.',
	'REPORT_CLOSED_SUCCESS'		=> 'گزارش انتخاب شده با موفقيت قفل شد.',
	'REPORT_DELETED_SUCCESS'	=> 'گزارش انتخاب شده با موفقيت حذف شد.',
	'REPORT_DETAILS'			=> 'جزييات گزارش',
	'REPORT_MESSAGE'			=> 'گزارش نوشته نامناسب',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected private message. Reporting should generally be used only if the message breaks forum rules. <strong>Reporting a private message will make its contents visible to all moderators.</strong>',

	'REPORT_NOTIFY'				=> 'مرا باخبرکن',
	'REPORT_NOTIFY_EXPLAIN'		=> 'درصورتي که خبري شد مرا درجريان بگذار!',
	'REPORT_POST_EXPLAIN'		=> 'اگر این ارسال قوانین را نغز کرده،برای گزارش آن به مدیران و بنیان گذاران انجمن، فرم زیر را تکمیل و ارسال فرمایید.',
	'REPORT_REASON'				=> 'دليل گزارش',
	'REPORT_TIME'				=> 'زمان گزارش',
	'REPORT_TOTAL'				=> 'درکل <strong>1</strong> گزارش براي نمايش موجود است.',
	'RESYNC'					=> 'همزماني دوباره',
	'RETURN_MESSAGE'			=> '%sبازگشت به پيغام%s',
	'RETURN_NEW_FORUM'			=> '%sبازگشت به انجمن جديد%s',
	'RETURN_NEW_TOPIC'			=> '%sبازگشت به مبحث جديد%s',
	'RETURN_POST'				=> '%sبازگشت به پست%s',
	'RETURN_QUEUE'				=> '%sبازگشت به ليست%s',
	'RETURN_REPORTS'			=> '%sبازگشت به گزارش ها%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sبازگشت به مبحث%s',

	'SEARCH_POSTS_BY_USER'				=> 'جستجوي پست ها توسط',
	'SELECT_ACTION'						=> 'انتخاب اقدام مطلوب',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'برای غیر فعال کردن یک اعلان سراسری باید انجمن مربوط به آن را انتخاب نمایید.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'یک یا بیشتر از یکی از موضوعات انتخاب شده اعلان سراسری هستند.لطفا برای غیر فعال کردن آن انجمن مربوط به آن موضوع را انتخاب فرمایید.',
	'SELECT_MERGE'						=> 'انتخاب براي ترکيب',
	'SELECT_TOPICS_FROM'				=> 'انتخاب مباحث از',
	'SELECT_TOPIC'						=> 'انتخاب مبحث',
	'SELECT_USER'						=> 'انتخاب کاربر',
	'SORT_ACTION'						=> 'کارنامه عمل',
	'SORT_DATE'							=> 'تاريخ',
	'SORT_IP'							=> 'آدرس IP',
	'SORT_WARNINGS'						=> 'اخطارها',
	'SPLIT_AFTER'						=> 'جداکردن موضوع از ارسال انتخاب شده به بعد',
	'SPLIT_FORUM'						=> 'انجمن براي مبحث جديد',
	'SPLIT_POSTS'						=> 'شکافتن پست هاي انتخاب شده',
	'SPLIT_SUBJECT'						=> 'عنوان جديد مبحث',
	'SPLIT_TOPIC_ALL'					=> 'جداکردن تاپیک از پست های انتخاب شده',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'از جدا کردن این تاپیک مطمئنید؟',
	'SPLIT_TOPIC_BEYOND'				=> 'جدا کردن تاپیک از پست های انتخاب شده به بعد',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'از جداکردن تاپیک از پست های انتخاب شده مطمئنید ؟',
	'SPLIT_TOPIC_EXPLAIN'				=> 'توسط این فرم می توانید موضوعات را از یک پست به بعد یا از پست های انتخاب شده جدا نمایید.',

	'THIS_POST_IP'				=> 'IP براي اين پست',
	'TOPICS_APPROVED_SUCCESS'	=> 'مباحث انتخاب شده تاييد شدند.',
	'TOPICS_DELETED_SUCCESS'	=> 'مباحث انتخاب شده با موفقيت از پايگاه داده ها حذف شدند.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'مباحث انتخاب شده تاييد نشدند.',
	'TOPICS_FORKED_SUCCESS'		=> 'مباحث انتخاب شده با موفقيت نسخه برداري شدند.',
	'TOPICS_LOCKED_SUCCESS'		=> 'مباحث انتخاب شده قفل شدند.',
	'TOPICS_MOVED_SUCCESS'		=> 'مباحث انتخاب شده با موفقيت انتقال يافتند.',
	'TOPICS_RESYNC_SUCCESS'		=> 'مباحث انتخاب شده با موفقيت همزماني شدند.',
	'TOPICS_TYPE_CHANGED'		=> 'نوع مبحث با موفقيت تغيير يافت.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'مباحق انتخاب شده بازشدند.',
	'TOPIC_APPROVED_SUCCESS'	=> 'مبحث انتخاب شده با موفقيت تاييد شد.',
	'TOPIC_DELETED_SUCCESS'		=> 'مبحث انتخاب شده با موفقيت از پايگاه داده ها حذف شد.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'مبحث انتخاب شده تاييد نشد.',
	'TOPIC_FORKED_SUCCESS'		=> 'مبحث انتخاب شده با موفقيت نسخه برداري شد.',
	'TOPIC_LOCKED_SUCCESS'		=> 'مبحث انتخاب شده بسته شد.',
	'TOPIC_MOVED_SUCCESS'		=> 'مبحث انتخاب شده با موفقيت انتقال يافت.',
	'TOPIC_NOT_EXIST'			=> 'مبحث انتخاب شده مي جود نيست.',
	'TOPIC_RESYNC_SUCCESS'		=> 'مبحث انتخاب شده با موفقيت همزماني شد.',
	'TOPIC_SPLIT_SUCCESS'		=> 'مبحث انتخاب شده با موفقيت شکافته شد.',
	'TOPIC_TIME'				=> 'زمان مبحث',
	'TOPIC_TYPE_CHANGED'		=> 'نوع مبحث با موفقيت تغيير يافت.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'مبحث انتخاب شده با موفقيت باز شد.',
	'TOTAL_WARNINGS'			=> 'کل اخطارها',

	'UNAPPROVED_POSTS_TOTAL'		=> 'در کل <strong>%d</strong> پست در ليست انتظار هستند.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'هيچ پستي در ليست انتظار موجود نمي باشد.',
	'UNAPPROVED_POST_TOTAL'			=> 'در کل <strong>1</strong> پست در ليست انتظار براي تاييد شدن مي باشد.',
	'UNLOCK'						=> 'باز کردن',
	'UNLOCK_POST'					=> 'بازکردن پست',
	'UNLOCK_POST_EXPLAIN'			=> 'فعال سازي ويرايش',
	'UNLOCK_POST_POST'				=> 'بازکردن پست',
	'UNLOCK_POST_POST_CONFIRM'		=> 'آيا از اجازه ويرايش دادن به اين پست اطمينان داريد ؟',
	'UNLOCK_POST_POSTS'				=> 'بازکردن پست هاي انتخاب شده',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'آيا از اعطا کردن ويرايش به پست هاي انتخاب شده اطمينان داريد ؟',
	'UNLOCK_TOPIC'					=> 'بازکردن مبحث',
	'UNLOCK_TOPIC_CONFIRM'			=> 'آيا از بازکردن اين مبحث اطمينان داريد ؟',
	'UNLOCK_TOPICS'					=> 'بازکردن مباحث انتخاب شده',
	'UNLOCK_TOPICS_CONFIRM'			=> 'آيا از بازکردن همه مباحث انتخاب شده اطمينان داريد',
	'USER_CANNOT_POST'				=> 'شما نمي توانيد در اين انجمن پستي ارسال نماييد.',
	'USER_CANNOT_REPORT'			=> 'شما نمي توانيد پست هاي اين انجمن را گزارش دهيد.',
	'USER_FEEDBACK_ADDED'			=> 'يادداشت کاربر با موفقيت اضافه شد.',
	'USER_WARNING_ADDED'			=> 'کاربر با موفقيت اخطار گرفت.',

	'VIEW_DETAILS'			=> 'نمايش اطلاعات بيشتر',
	'VIEW_POST'				=> 'نمایش ارسال',

	'WARNED_USERS'			=> 'کاربران اخطار گرفته',
	'WARNED_USERS_EXPLAIN'	=> 'لیست زیر حاوی نام کاربرانی است که هنوز اخطارهای داده شده آنها منقضی نشده',
	'WARNING_PM_BODY'		=> 'اخطاری که مشاهده می کنید از سوی یکی از مدیران یا بنیان گذاران انجمن صادر شده. [quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'اخظارهای صادر شده',
	'WARNING_POST_DEFAULT'	=> 'شما به دليل اين ارسال اخطار گرفتيد : %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'هيچ اخطاري موجود نمي باشد.',

	'YOU_SELECTED_TOPIC'	=> 'You selected topic number %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'غيرقانوني',
			'SPAM'		=> 'اسپم',
			'OFF_TOPIC'	=> 'تغيير جو مبحث',
			'OTHER'		=> 'ديگر',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'اين پست حاوي لينکهاي غير مجاز و دزدي از برنامه هاست.',
			'SPAM'		=> 'اين پست فقط براي تبليغ يک سايت و يا محصول ديگري بوده است.',
			'OFF_TOPIC'	=> 'اين پست مبحث را از هدف دور مي کند.',
			'OTHER'		=> 'اين گزارش شامل محتواي گزارش هاي ديگر نمي باشد.اطلاعات بيشتر را از فيلد اطلاعات بيشتر کسب نماييد.',
		)
	),
		
		
	    // 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	    
	    	'CLOSE_PM_REPORT'		=> 'Close PM report',
        	'CLOSE_PM_REPORT_CONFIRM'	=> 'Are you sure you want to close the selected PM report?',
        	'CLOSE_PM_REPORTS'		=> 'Close PM reports',
        	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Are you sure you want to close the selected PM reports?',

///////////////////////

	'DELETE_PM_REPORT'			=> 'Delete PM report',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Are you sure you want to delete the selected PM report?',
	'DELETE_PM_REPORTS'			=> 'Delete PM reports',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Are you sure you want to delete the selected PM reports?',

////////////////////////////

	'LATEST_REPORTED_PMS'		=> 'Latest 5 PM reports',

/////////////////////////////

	'PM_REPORT_CLOSED_SUCCESS'	=> 'The selected PM report has been closed successfully.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'The selected PM report has been deleted successfully.',
	'PM_REPORTED_SUCCESS'		=> 'This private message has been successfully reported.',
	'PM_REPORT_TOTAL'			=> 'In total there is <strong>1</strong> PM report to review.',
	'PM_REPORTS_TOTAL'			=> 'In total there are <strong>%d</strong> PM reports to review.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'There are no PM reports to review.',
	'PM_REPORT_DETAILS'			=> 'Private message report details',


//////////////////////////////////////////

	'RETURN_PM'					=> '%sReturn to the private message%s',
////////////////////////////////////////
	'VIEW_PM'				=> 'View private message',

/////////////////////////////////



	    
	    
	    
	    //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com		
		
		
		
		
));

?>