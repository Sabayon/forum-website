<?php
/** 
*
* memberlist [Vietnamese]
*
* @package language
* @version $Id: memberlist.php 35 2008-11-01 23:06:00Z nedka $
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Thông tin cá nhân',
	'ACTIVE_IN_FORUM'		=> 'Chuyên mục hoạt động tích cực',
	'ACTIVE_IN_TOPIC'		=> 'Chủ đề hoạt động tích cực',
	'ADD_FOE'				=> 'Thêm kẻ thù',
	'ADD_FRIEND'			=> 'Thêm bạn thân',
	'AFTER'					=> 'Sau',

	'ALL'					=> 'Tất cả',

	'BEFORE'				=> 'Trước',

	'CC_EMAIL'				=> 'Gửi bản sao của email này cho tôi.',
	'CONTACT_USER'			=> 'Liên hệ',

	'DEST_LANG'				=> 'Ngôn ngữ',
	'DEST_LANG_EXPLAIN'		=> 'Chọn một ngôn ngữ thích hợp cho người nhận tin nhắn này.',

	'EMAIL_BODY_EXPLAIN'	=> 'Email này sẽ được gửi dưới dạng văn bản thuần túy, vì thế bạn đừng sử dụng bất cứ thẻ lệnh HTML hay BBCode nào trong nội dung email này. Địa chỉ hồi âm của email này sẽ được thiết lập là địa chỉ email của bạn.',
	'EMAIL_DISABLED'		=> 'Xin lỗi, tất cả chức năng liên quan đến email trong hệ thống đã bị vô hiệu.',
	'EMAIL_SENT'			=> 'Email đã được gửi thành công.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Email này sẽ được gửi dưới dạng văn bản thuần túy, vì thế bạn đừng sử dụng bất cứ thẻ lệnh HTML hay BBCode nào trong nội dung email này. Lưu ý rằng thông tin về chủ đề này sẽ được đính kèm trong nội dung email. Địa chỉ hồi âm của email này sẽ được thiết lập là địa chỉ email của bạn.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Bạn phải nhập chính xác địa chỉ email của người nhận.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Bạn phải nhập nội dung cho email.',
	'EMPTY_MESSAGE_IM'		=> 'Bạn phải nhập nội dung cho tin nhắn.',
	'EMPTY_NAME_EMAIL'		=> 'Bạn phải nhập tên của người nhận.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Bạn phải nhập tiêu đề cho email.',
	'EQUAL_TO'				=> 'Bằng',

	'FIND_USERNAME_EXPLAIN'	=> 'Công cụ này sẽ giúp bạn tìm kiếm những thành viên xác định trong hệ thống. Bạn không cần phải điền đầy đủ thông tin trong tất cả các mục bên dưới. Sử dụng dấu * để tìm kiếm những thành viên có tến giống nhau một phần nào đó. Khi nhập thông tin về ngày tháng bạn cần sử dụng định dạng <kbd>YYYY-MM-DD</kbd>. Ví dụ: <samp>2004-02-29</samp>. Đánh dấu chọn trong phần đánh dấu để chọn một hay nhiều tên thành viên. Những tên thành viên khác nhau có thể được chọn tùy thuộc vào bảng được liệt kê. Bấm vào nút <strong>Chọn đánh dấu</strong> nếu có để quay về bảng điều khiển trước.',
	'FLOOD_EMAIL_LIMIT'		=> 'Bạn không thể gửi email vào thời điểm này. Hãy thử lại sau vài phút nữa!',

	'GROUP_LEADER'			=> 'Trưởng nhóm',

	'HIDE_MEMBER_SEARCH'	=> 'Ẩn tìm kiếm thành viên',

	'IM_ADD_CONTACT'		=> 'Thêm thành viên',
	'IM_AIM'				=> 'Lưu ý bạn cần phải cài đặt chương trình <strong>AOL Instant Messenger</strong> trên máy tính của mình để có thể sử dụng được chức năng này.',
	'IM_AIM_EXPRESS'		=> 'Chương trình <strong>AIM Express</strong>',
	'IM_DOWNLOAD_APP'		=> 'Tải về ứng dụng',
	'IM_ICQ'				=> 'Lưu ý rằng các thành viên có thể chọn không nhận những tin nhắn nhanh mà họ không mong muốn.',
	'IM_JABBER'				=> 'Lưu ý rằng các thành viên có thể chọn không nhận những tin nhắn nhanh mà họ không mong muốn.',
	'IM_JABBER_SUBJECT'		=> 'Đây là tin nhắn thông báo tự động, xin đừng trả lời! Tin nhắn từ thành viên <strong>%1$s</strong> trong %2$s.',
	'IM_MESSAGE'			=> 'Nội dung tin nhắn nhanh',
	'IM_MSNM'				=> 'Lưu ý bạn cần phải cài đặt chương trình <strong>Windows Messenger</strong> trên máy tính của mình để có thể sử dụng được chức năng này.',
	'IM_MSNM_BROWSER'		=> 'Trình duyệt của bạn không hỗ trợ chương trình này.',
	'IM_MSNM_CONNECT'		=> 'Tài khoản MSN của bạn chưa được kết nối.\nBạn phải kết nối đến dịch vụ của MSN để tiếp tục gửi tin nhắn.',		
	'IM_NAME'				=> 'Tên của bạn',
	'IM_NO_DATA'			=> 'Không có thông tin liên hệ phù hợp nào về thành viên này.',
	'IM_NO_JABBER'			=> 'Xin lỗi, chức năng gửi tin nhắn trực tiếp đến các thành viên sử dụng Jabber không được hỗ trợ trên diễn đàn này. Bạn sẽ cần phải cài đặt ứng dụng <strong>Jabber</strong> trên máy tính của mình để liên hệ với người nhận trên.',
	'IM_RECIPIENT'			=> 'Người nhận',
	'IM_SEND'				=> 'Gửi tin nhắn',
	'IM_SEND_MESSAGE'		=> 'Gửi tin nhắn',
	'IM_SENT_JABBER'		=> 'Tin nhắn của bạn đến <strong>%1$s</strong> đã được gửi thành công.',
	'IM_USER'				=> 'Gửi tin nhắn nhanh',

	'LAST_ACTIVE'				=> 'Lần hoạt động trước',
	'LESS_THAN'					=> 'Ít hơn',
	'LIST_USER'					=> '1 thành viên',
	'LIST_USERS'				=> '%d thành viên',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Bạn phải đăng nhập vào hệ thống mới có thể xem danh sách ban điều hành.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Bạn phải đăng nhập vào hệ thống mới có thể xem danh sách thành viên.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Bạn phải đăng nhập vào hệ thống mới có thể tìm kiếm thành viên.',	
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Bạn phải đăng nhập vào hệ thống mới có thể xem thông tin cá nhân của thành viên.',

	'MORE_THAN'				=> 'Nhiều hơn',

	'NO_EMAIL'				=> 'Bạn không được phép gửi email đến thành viên này.',
	'NO_VIEW_USERS'			=> 'Bạn không được phép xem danh sách thành viên hay thông tin cá nhân của thành viên.',

	'ORDER'					=> 'Thứ tự',
	'OTHER'					=> 'Thông tin khác',

	'POST_IP'				=> 'Gửi bài từ địa chỉ IP/Tên miền',

	'RANK'					=> 'Xếp hạng',
	'REAL_NAME'				=> 'Tên người nhận',
	'RECIPIENT'				=> 'Người nhận',
	'REMOVE_FOE'			=> 'Gỡ bỏ kẻ thù',
	'REMOVE_FRIEND'			=> 'Gỡ bỏ bạn thân',

	'SEARCH_USER_POSTS'		=> 'Tìm tất cả bài viết của thành viên này',
	'SELECT_MARKED'			=> 'Chọn đánh dấu',
	'SELECT_SORT_METHOD'	=> 'Chọn cách sắp xếp',
	'SEND_AIM_MESSAGE'		=> 'Gửi tin nhắn AIM',
	'SEND_ICQ_MESSAGE'		=> 'Gửi tin nhắn ICQ',
	'SEND_IM'				=> 'Nhắn tin nhanh',
	'SEND_JABBER_MESSAGE'	=> 'Gửi tin nhắn Jabber',
	'SEND_MESSAGE'			=> 'Tin nhắn',
	'SEND_MSNM_MESSAGE'		=> 'Gửi tin nhắn MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Gửi tin nhắn YIM',
	'SORT_EMAIL'			=> 'Địa chỉ email',
	'SORT_LAST_ACTIVE'		=> 'Lần hoạt động trước',
	'SORT_POST_COUNT'		=> 'Số bài viết',

	'USERNAME_BEGINS_WITH'	=> 'Tên thành viên bắt đầu bằng',
	'USER_ADMIN'			=> 'Quản trị viên',
	'USER_BAN'				=> 'Bảng cấm',
	'USER_FORUM'			=> 'Thống kê thành viên',
	'USER_ONLINE'			=> 'Đang trực tuyến',
	'USER_PRESENCE'			=> 'Hiện diện',

	'VIEWING_PROFILE'		=> 'Đang xem thông tin cá nhân về %s',
	'VISITED'				=> 'Lần ghé thăm trước',

	'WWW'					=> 'Website',
));

?>