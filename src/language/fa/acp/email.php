<?php
/**
*
* acp_email [Farsi]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/04 15:07:24  $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> '',
	'ALL_USERS'						=> 'همه کاربران',

	'COMPOSE'				=> 'نوشتن',

	'EMAIL_SEND_ERROR'		=> 'There were one or more errors while sending the e-mail. Please check the %sError log%s for detailed error messages.',
	'EMAIL_SENT'			=> 'This message has been sent.',
	'EMAIL_SENT_QUEUE'		=> 'This message has been queued for sending.',

	'LOG_SESSION'			=> 'Log mail session to critical log',

	'SEND_IMMEDIATELY'		=> 'ارسال فوري',
	'SEND_TO_GROUP'			=> 'ارسال به گروه',
	'SEND_TO_USERS'			=> 'ارسال به کاربران',
	'SEND_TO_USERS_EXPLAIN'	=> 'لطفا در اين قسمت فقط کاربران گروه کاربري انتخاب شده را وارد کنيد. در ضمن هر کاربر در يک خط.',
	
	'MAIL_HIGH_PRIORITY'	=> 'زياد',
	'MAIL_LOW_PRIORITY'		=> 'کم',
	'MAIL_NORMAL_PRIORITY'	=> 'متوسط',
	'MAIL_PRIORITY'			=> 'تقدمE-Mail',
	'MASS_MESSAGE'			=> 'پیام شما',
	'MASS_MESSAGE_EXPLAIN'	=> 'لطفا در اين قسمت از نوشته هاي واضح استفاده کنيد.',
	
	'NO_EMAIL_MESSAGE'		=> 'شما بايد يک پیام وارد کنيد.',
	'NO_EMAIL_SUBJECT'		=> 'براي پیام خود يک عنوان برگزينيد.',
));

?>