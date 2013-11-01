<?php
/**
*
* @package ucp
* @version $Id:$
* @copyright (c) 2012 BrokenCrust http://brokencrust.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* ucp_delete_my_account
*/
class ucp_delete_my_account
{
	public $u_action;

	// Main function
	function main($id, $mode)
	{
		global $auth, $template, $user;

		$user->add_lang('mods/delete_my_account');

		// If the user OK'd the confirmation box then delete them
		if (confirm_box(true))
		{
			$this->delete_account();
		}
		else
		{
			$submit	= request_var('submit', false);

			// If the user submitted a delete request then check it
			if ($submit)
			{
				$delete_type = $this->delete_confirmation();

      	// If we are still here the request is valid so display the final confirmation box
				confirm_box(false, 'DELETE_FINAL', build_hidden_fields(
					array(
						'submit' => false,
						'delete_type' => $delete_type
					)
				));
			}
		}
		// Otherwise just display the template
		$template->assign_vars(array(
			'S_CAN_DELPOSTS' => $auth->acl_get('u_delete_my_account_posts'),
			'S_UCP_ACTION' => $this->u_action,
		));
		
		add_form_key('ucp_delete_my_account');

		$this->tpl_name = 'ucp_delete_my_account';
		$this->page_title = $user->lang['DELETE_MY_ACCOUNT'];
	}

	// Confirm everything before the final check
	private function delete_confirmation()
	{
		global $auth, $user;

		$delete	= request_var('delete', false);
		$understand	= request_var('understand', false);
		$password	= request_var('password', '', true);
		$remove_posts = request_var('remove_posts', false);

		// First check that the form key is valid
		if (!check_form_key('ucp_delete_my_account'))
		{
			trigger_error('<p>' . $user->lang['BAD_FORM_KEY_ERROR'] . '</p><p>' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a></p>'), E_USER_WARNING);
		}

		// Decide if the posts are to be deleted or not
		$delete_type = $auth->acl_get('u_delete_my_account_posts') ? ($remove_posts ? 'remove' : 'retain') : 'retain';

		// Stop Founders from deleting themselves
		if ($user->data['user_type'] == USER_FOUNDER)
		{
			trigger_error('<p>' . $user->lang['FOUNDER_ERROR'] . '</p><p>' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a></p>'), E_USER_WARNING);
		}

		// Check the user really wants to delete themselves
		if (!$delete)
		{
			trigger_error('<p>' . $user->lang['REALLY_ERROR'] . '</p><p>' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a></p>'), E_USER_WARNING);
		}

		// Check the user understands that it can not be undone
		if (!$understand)
		{
			trigger_error('<p>' . $user->lang['UNDERSTAND_ERROR'] . '</p><p>' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a></p>'), E_USER_WARNING);
		}

  	// Check that the user entered their password correctly
		if (!phpbb_check_hash($password, $user->data['user_password']))
		{
			trigger_error($user->lang['PASSWORD_ERROR'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a>'), E_USER_WARNING);
		}

		return $delete_type;
	}

	// Delete the account
	private function delete_account()
	{
		global $user;

		$delete_type	= request_var('delete_type', 'retain');

   	// Create the log message
   	$log = sprintf($user->lang['LOG_USER_DELETED'], $user->data['username'], $user->data['user_id']);
   	$delete_type == 'retain' ? $log .= $user->lang['LOG_POST_RETAINED'] : $log .= $user->lang['LOG_POST_REMOVED'];

   	// Add the deletion to the user log using ANONYMOUS user_id (we have to do this before the delete otherwise it won't work)
		add_log('user', ANONYMOUS, 'LOG_USER_DELETED', $log);

		// Delete the user (and the posts if requested or we assign the posts to guest user but with a unique name)
		user_delete($delete_type, $user->data['user_id'], sprintf($user->lang['DELETED_USER'], $user->data['user_id']));

		// Say goodbye to the user and redirect them to the domain root
		meta_refresh(3, '/');
		trigger_error($user->lang['GOODBYE_ERROR']);
	}
}

?>