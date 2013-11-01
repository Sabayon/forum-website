<?php
/**
*
* delete my account [English]
*
* @package language
* @version $Id$
* @copyright (c) 2012 BrokenCrust http://brokencrust.com
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
	
	'acl_u_delete_my_account_posts' => array('lang' => 'Can delete posts when deleting account', 'cat' => 'profile'),

	'DELETE_MY_ACCOUNT' => 'Delete My Account',
	'DELETE_MY_ACCOUNT_TEXT'	=> 'You can use this form to delete your own account. Once completed all your personal and private data will be removed from this site and you will no longer be able to logon.',
	'REALY_DELETE' => 'I really wish to delete my account.',
	'UNDERSTAND_DELETE' => 'I understand that this action can not be undone.',
	'DELETE_MY_POSTS' => 'Also delete my posts (posts will become guest posts if unchecked).',
	'ENTER_PASSWORD' => 'Enter your password',
	'ENTER_PASSWORD_HERE' => 'type your password here ...',
	'DELETED_USER' => 'Deleted User %s',
	
	'DELETE_FINAL' => 'Final Confirmation',
	'DELETE_FINAL_CONFIRM' => '<p>Thank you for being a member of this site. We are sorry to see you go.</p><p>Your request has been validated. This is the final confirmation. Do you want to permanently delete your account?</p>',
	
	'LOG_USER_DELETED' => 'User %s (ID %s) has deleted their own account.',
	'LOG_POST_REMOVED' => ' Their posts were removed.',
	'LOG_POST_RETAINED' => ' Their posts were retained.',
	
	'REALLY_ERROR' => 'You must confirm that you really wish to delete your account.',
	'UNDERSTAND_ERROR' => 'You must confirm that you understand that this process can not be undone.',
	'PASSWORD_ERROR' => 'The password that you entered was not correct.',
	'FOUNDER_ERROR' => 'Founders can not use the self deletion process.',
	'BAD_FORM_KEY_ERROR' => 'The form submission could not be validated.  Please submit your request again.',
	'GOODBYE_ERROR' => 'Your account has been deleted.  Goodbye.',
));

?>