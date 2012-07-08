<?php
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

$sql = 'DELETE FROM ' . STYLES_TEMPLATE_DATA_TABLE . ' WHERE 1 = 1';
$db->sql_query($sql);

trigger_error('<span style="color:green; font-weight:bold;">Template Data purged successfully</span><br /><br /><span style="color:red; font-weight:bold;">Please delete this file</span>');
?>
