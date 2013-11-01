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
* @package module_install
*/
class ucp_delete_my_account_info
{
	function module()
	{
		
		return array(
			'filename' => 'ucp_delete_my_account',
			'title' => 'UCP_DELETE_MY_ACCOUNT',
			'version' => '1.0.0',
			'modes' => array(
				'delete_my_account' => array('title' => 'UCP_DELETE_MY_ACCOUNT', 'auth' => '', 'cat' => array('')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>