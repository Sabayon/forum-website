<?php
/** 
*
* acp_users [Vietnamese]
*
* @package language
* @version $Id: users.php 30 2008-12-13 11:16:00Z nedka $
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
	'ADMIN_SIG_PREVIEW'		=> 'Xem trước chữ ký cá nhân',
	'AT_LEAST_ONE_FOUNDER'	=> 'Bạn không thể thay đổi người sáng lập này trở thành một thành viên bình thường. Trong hệ thống chỉ cần ít nhất một thành viên là người sáng lập được chọn. Nếu bạn muốn thay đổi người sáng lập này thành các thành viên khác thì trước hết bạn phải là một người sáng lập.',
	
	'BAN_ALREADY_ENTERED'	=> 'Lệnh cấm đã được nhập vào thành công trước đây. Danh sách cấm sẽ không cần cập nhật.',
	'BAN_SUCCESSFUL'		=> 'Lệnh cấm đã được thực hiện thành công.',

	'CANNOT_BAN_FOUNDER'			=> 'Bạn không thể cấm tài khoản của người sáng lập.',
	'CANNOT_BAN_YOURSELF'			=> 'Bạn không thể cấm tài khoản của chính mình.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Bạn không thể ngưng kích hoạt tài khoản của máy tìm kiếm. Hãy vui lòng ngưng kích hoạt từng máy tìm kiếm trong trang quản lí chúng.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Bạn không thể ngưng kích hoạt tài khoản của người sáng lập.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Bạn không thể ngưng kích hoạt tài khoản của chính mình.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Bạn không thể yêu cầu kích hoạt lại tài khoản của máy tìm kiếm. Hãy vui lòng kích hoạt lại từng máy tìm kiếm trong trang quản lí chúng.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Bạn không thể yêu cầu kích hoạt lại tài khoản của người sáng lập.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Bạn không thể yêu cầu kích hoạt lại tài khoản của chính mình.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Bạn không thể gỡ bỏ tài khoản của khách.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Bạn không thể gỡ bỏ tài khoản thành viên của chính mình.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Bạn không thể tăng cấp những thành viên bị cấm trở thành người sáng lập.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Bạn cần phải kích hoạt tài khoản của thành viên trước khi bạn tăng cấp cho thành viên này trở thành người sáng lập và chỉ có những thành viên đã kích hoạt mới có thể tăng cấp được.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Bạn chỉ cần xác nhận lại địa chỉ email nếu bạn muốn thay đổi địa chỉ email của thành viên.',

	'DELETE_POSTS'			=> 'Xóa bài viết',
	'DELETE_USER'			=> 'Xóa thành viên',
	'DELETE_USER_EXPLAIN'	=> 'Lưu ý rằng việc xóa thành viên này sẽ xóa vĩnh viễn và không thể phục hồi lại được.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Việc yêu cầu thành viên kích hoạt lại tài khoản của mình đã được thực hiện thành công.',
	'FOUNDER'						=> 'Người sáng lập',
	'FOUNDER_EXPLAIN'				=> 'Người sáng lập có tất cả quyền hạn của quản trị viên và không bao giờ bị cấm, xóa hay thay đổi bởi bất kì thành viên nào.',

	'GROUP_APPROVE'		=> 'Chấp nhận thành viên',
	'GROUP_DEFAULT'		=> 'Chọn làm nhóm mặc định của thành viên',
	'GROUP_DELETE'		=> 'Gỡ bỏ thành viên khỏi nhóm',
	'GROUP_DEMOTE'		=> 'Giáng chức trưởng nhóm',
	'GROUP_PROMOTE'		=> 'Thăng chức thành trưởng nhóm',

	'IP_WHOIS_FOR'			=> 'Tra cứu địa chỉ IP cho %s',

	'LAST_ACTIVE'			=> 'Lần hoạt động trước',

	'MOVE_POSTS_EXPLAIN'	=> 'Hãy chọn chuyên mục mà bạn muốn di chuyển tất cả các bài viết của thành viên này đến.',

	'NO_SPECIAL_RANK'		=> 'Không có xếp hạng đặc biệt nào được chỉ định',
	'NOT_MANAGE_FOUNDER'	=> 'Bạn đang cố gắng quản lí một thành viên là người sáng lập. Chỉ có những người sáng lập mới được phép quản lí lẫn nhau.',

	'QUICK_TOOLS'			=> 'Công cụ nhanh',

	'REGISTERED'			=> 'Thành viên đã đăng ký',
	'REGISTERED_IP'			=> 'Đã đăng ký từ địa chỉ IP',
	'RETAIN_POSTS'			=> 'Những bài viết còn lại',

	'SELECT_FORM'			=> 'Chọn bảng',
	'SELECT_USER'			=> 'Chọn thành viên',

	'USER_ADMIN'					=> 'Quản lí thành viên',
	'USER_ADMIN_ACTIVATE'			=> 'Kích hoạt tài khoản',
	'USER_ADMIN_ACTIVATED'			=> 'Tài khoản thành viên đã được kích hoạt thành công.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Hình đại diện của thành viên đã được gỡ bỏ thành công.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Cấm địa chỉ email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Những địa chỉ email đã bị cấm từ phần quản lí thành viên',
	'USER_ADMIN_BAN_IP'				=> 'Cấm địa chỉ IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Những địa chỉ IP đã bị cấm từ phần quản lí thành viên',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Tên thành viên đã bị cấm từ phần quản lí thành viên',
	'USER_ADMIN_BAN_USER'			=> 'Cấm tên thành viên',
	'USER_ADMIN_DEACTIVATE'			=> 'Ngưng kích hoạt tài khoản',
	'USER_ADMIN_DEACTIVED'			=> 'Tài khoản thành viên đã được ngưng kích hoạt thành công.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Xóa tất cả tập tin đính kèm của thành viên này',
	'USER_ADMIN_DEL_AVATAR'			=> 'Xóa hình đại diện của thành viên này',
	'USER_ADMIN_DEL_POSTS'			=> 'Xóa tất cả bài viết của thành viên này',
	'USER_ADMIN_DEL_SIG'			=> 'Xóa chữ ký cá nhân của thành viên này',
	'USER_ADMIN_EXPLAIN'			=> 'Với công cụ này, bạn có thể thay đổi thông tin cá nhân của các thành viên cũng như những tùy chọn hay thiết lập cá nhân của họ.',
	'USER_ADMIN_FORCE'				=> 'Yêu cầu thành viên này kích hoạt lại tài khoản của mình',
	'USER_ADMIN_MOVE_POSTS'			=> 'Di chuyển tất cả bài viết của thành viên này',
	'USER_ADMIN_SIG_REMOVED'		=> 'Đã gỡ bỏ thành công chữ ký cá nhân của thành viên này.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Đã gỡ bỏ thành công tất cả tập tin đính kèm của thành viên này.',
	'USER_AVATAR_UPDATED'			=> 'Đã cập nhật thành công hình đại diện của thành viên này.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Mục thông tin cá nhân tùy biến',
	'USER_DELETED'					=> 'Tài khoản của thành viên này đã được xóa thành công.',
	'USER_GROUP_ADD'				=> 'Thêm thành viên này vào',
	'USER_GROUP_NORMAL'				=> 'Nhóm do thành viên chỉ định, là thành viên của nhóm',
	'USER_GROUP_PENDING'			=> 'Nhóm đang trong chế độ chờ quyết định',
	'USER_GROUP_SPECIAL'			=> 'Nhóm đã được chỉ định trước, là thành viên của nhóm',
	'USER_NO_ATTACHMENTS'			=> 'Chưa đính kèm bất kì tập tin nào.',
	'USER_OVERVIEW_UPDATED'			=> 'Thông tin chi tiết về thành viên đã được cập nhật thành công.',
	'USER_POSTS_DELETED'			=> 'Đã gỡ bỏ thành công tất cả bài viết của thành viên này',
	'USER_POSTS_MOVED'				=> 'Đã di chuyển thành công tất cả bài viết của thành viên này đến chuyên mục đã chọn',
	'USER_PREFS_UPDATED'			=> 'Thiết lập cá nhân của thành viên đã được cập nhật thành công.',
	'USER_PROFILE'					=> 'Thông tin cá nhân của thành viên',
	'USER_PROFILE_UPDATED'			=> 'Thông tin cá nhân của thành viên đã được cập nhật thành công.',
	'USER_RANK'						=> 'Xếp hạng của thành viên',
	'USER_RANK_UPDATED'				=> 'Xếp hạng của thành viên đã được cập nhật thành công.',
	'USER_SIG_UPDATED'				=> 'Chữ ký cá nhân của thành viên đã được cập nhật thành công.',
	'USER_TOOLS'					=> 'Công cụ đơn giản',
));

?>