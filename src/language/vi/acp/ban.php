<?php
/** 
*
* acp_ban [Vietnamese]
*
* @package language
* @version $Id: ban.php 20 2008-12-13 11:17:00Z nedka $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 giờ',
	'30_MINS'		=> '30 phút',
	'6_HOURS'		=> '6 giờ',

	'ACP_BAN_EXPLAIN'	=> 'Sử dụng công cụ này, bạn có thể điều khiển việc cấm các thành viên theo tên thành viên, địa chỉ IP hay địa chỉ email. Những phương pháp này sẽ ngăn cản thành viên bị cấm truy cập vào bất kì thành phần nào trong hệ thống. Bạn có thể đưa ra một nguyên nhân ngắn giới hạn với tối đa là <strong>3000</strong> ký tự về việc vì sao thành viên đó bị cấm. Các thao tác cấm này sẽ được ghi nhận trong bảng ghi nhận của quản trị viên. Bạn cũng có thể xác định thời gian thực hiện lệnh cấm. Nếu bạn muốn xác định chính xác ngày kết thúc lệnh cấm, tốt hơn cách thiết lập một khoảng thời gian cấm trong bao lâu, bạn có thể chọn <span style="text-decoration: underline;">Cho đến ngày -&gt;</span> và nhập vào ngày tháng theo định dạng <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Loại ra từ lệnh cấm',
	'BAN_LENGTH'			=> 'Thời gian thực hiện lệnh cấm',
	'BAN_REASON'			=> 'Nguyên nhân bị cấm',
	'BAN_GIVE_REASON'		=> 'Nguyên nhân giải thích cho thành viên khi bị cấm',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Danh sách cấm đã được cập nhật thành công.',

	'EMAIL_BAN'					=> 'Cấm một hay nhiều địa chỉ email',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Bật tùy chọn này để loại trừ các địa chỉ email đã nhập vào khỏi các lệnh cấm hiện tại.',
	'EMAIL_BAN_EXPLAIN'			=> 'Để xác định nhiều địa chỉ email cùng lúc, bạn hãy nhập mỗi địa chỉ email trong một dòng. Bạn cũng có thể sử dụng dấu * để xác định các địa chỉ email cùng tên miền, ví dụ như <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>…',
	'EMAIL_NO_BANNED'			=> 'Không có địa chỉ email nào bị cấm',
	'EMAIL_UNBAN'				=> 'Ngưng cấm hoặc ngưng loại trừ địa chỉ email',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Bạn có thể ngưng cấm hoặc ngưng loại trừ nhiều địa chỉ email cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những địa chỉ email bị loại trừ được đánh dấu nổi bật.',

	'IP_BAN'					=> 'Cấm một hay nhiều địa chỉ IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Bật tùy chọn này để loại trừ các địa chỉ IP đã nhập vào khỏi các lệnh cấm hiện tại.',
	'IP_BAN_EXPLAIN'			=> 'Để xác định nhiều địa chỉ IP hay tên miền cùng lúc, bạn hãy nhập mỗi địa chỉ IP hay tên miền trong một dòng. Để cấm một dãy địa chỉ IP xác định, bắt đầu và kết thúc bằng dấu gạch nối (-), xác định các địa chỉ IP cùng dãy bằng dấu sao (*).',
	'IP_HOSTNAME'				=> 'Địa chỉ IP hoặc tên miền',
	'IP_NO_BANNED'				=> 'Không có địa chỉ IP nào bị cấm',
	'IP_UNBAN'					=> 'Ngưng cấm hoặc ngưng loại trừ địa chỉ IP',
	'IP_UNBAN_EXPLAIN'			=> 'Bạn có thể ngưng cấm hoặc ngưng loại trừ nhiều địa chỉ IP cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những địa chỉ IP bị loại trừ được đánh dấu nổi bật.',

	'LENGTH_BAN_INVALID'	=> 'Ngày tháng thi hành lệnh cấm phải sử dụng định dạng <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Vĩnh viễn',
	
	'UNTIL'						=> 'Cho đến ngày',
	'USER_BAN'					=> 'Cấm một hay nhiều tên thành viên',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Bật tùy chọn này để loại trừ các thành viên đã nhập vào khỏi các lệnh cấm hiện tại.',
	'USER_BAN_EXPLAIN'			=> 'Để xác định nhiều thành viên cùng lúc, bạn hãy nhập mỗi tên thành viên trong một dòng. Sử dụng chức năng <span style="text-decoration: underline;">Tìm một thành viên</span> để tra cứu và thêm vào một hay nhiều thành viên tự động.',
	'USER_NO_BANNED'			=> 'Không có thành viên nào bị cấm',
	'USER_UNBAN'				=> 'Ngưng cấm hoặc ngưng loại trừ thành viên',
	'USER_UNBAN_EXPLAIN'		=> 'Bạn có thể ngưng cấm hoặc ngưng loại trừ nhiều thành viên cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những thành viên bị loại trừ được đánh dấu nổi bật.',
));

?>