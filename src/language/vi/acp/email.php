<?php
/** 
*
* acp_email [Vietnamese]
*
* @package language
* @version $Id: email.php 15 2008-11-01 22:56:00Z nedka $
* @copyright (c) 2006, 2008 nedka (Nguyen Dang Khoa)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* Vietnamese Language Pack for phpBB3
*
* phpBB iVN (phpBB in Vietnamese) Project
* Translated by nedka (Nguyen Dang Khoa) - http://www.vinabb.com/
* Submited to phpBB3.0.5 June 24,2009 - http://phpbasic.com/
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
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Công cụ này sẽ giúp bạn gửi email đến tất cả các thành viên trong hệ thống hoặc tất cả thành viên trong một nhóm xác định <strong>đã bật tùy chọn nhận các email thông báo trong phần thiết lập cá nhân</strong>. Để thực hiện quá trình trên, một email sẽ được gửi đến địa chỉ email của quản trị viên đã được cung cấp với bản sao được gửi đến cho tất cả người nhận đã chọn. Thiết lập mặc định chỉ đính kèm 50 người nhận trong một email như thế, càng nhiều người nhận thì càng có nhiều email được gửi đi. Nếu bạn gửi email cho một nhóm lớn có rất đông thành viên, hãy kiên nhẫn chờ đợi sau khi bấm vào nút gửi và đừng dừng nạp trang này lại. Điều này là bình thường vì thời gian chờ đợi tỉ lệ thuận với số lượng thành viên và bạn sẽ được thông báo khi quá trình gửi email thành viên hoàn tất.',
	'ALL_USERS'						=> 'Tất cả thành viên',

	'COMPOSE'				=> 'Soạn nội dung',

	'EMAIL_SEND_ERROR'		=> 'Đã có một hoặc nhiều lỗi xảy ra trong quá trình gửi email. Bạn hãy vui lòng kiểm tra %sGhi nhận lỗi%s để xem chi tiết về các thông báo lỗi.',
	'EMAIL_SENT'			=> 'Email này đã được gửi thành công.',
	'EMAIL_SENT_QUEUE'		=> 'Email này đang chờ để được gửi.',

	'LOG_SESSION'			=> 'Ghi nhận phiên đăng nhập trong quá trình gửi email',

	'SEND_IMMEDIATELY'		=> 'Gửi trực tiếp',
	'SEND_TO_GROUP'			=> 'Gửi đến nhóm',
	'SEND_TO_USERS'			=> 'Gửi đến thành viên',
	'SEND_TO_USERS_EXPLAIN'	=> 'Việc nhập tên thành viên vào khung dưới đây sẽ thay thế cho bất cứ nhóm nào đã được chọn bên trên. Mỗi dòng bạn chỉ nhập một tên thành viên xác định.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Cao',
	'MAIL_LOW_PRIORITY'		=> 'Thấp',
	'MAIL_NORMAL_PRIORITY'	=> 'Bình thường',
	'MAIL_PRIORITY'			=> 'Ưu tiên',
	'MASS_MESSAGE'			=> 'Nội dung email của bạn',
	'MASS_MESSAGE_EXPLAIN'	=> 'Bạn chỉ được phép nhập văn bản thuần túy trong nội dung email. Tất cả các thẻ đánh dấu sẽ được gỡ bỏ trong quá trình gửi đi.',
	
	'NO_EMAIL_MESSAGE'		=> 'Bạn phải nhập nội dung email để gửi.',
	'NO_EMAIL_SUBJECT'		=> 'Bạn phải xác định tiêu đề cho email của mình.',
));

?>