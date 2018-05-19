<?php
/** 
*
* acp_groups [Vietnamese]
*
* @package language
* @version $Id: groups.php 38 2008-12-13 11:17:00Z nedka $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lí tất cả nhóm trong hệ thống. Bạn có thể xóa, tạo mới hay chỉnh sửa những nhóm hiện có. Ngoài ra, bạn cũng có thể chọn ra trưởng nhóm, thay đổi loại nhóm tự do/ẩn/cố định cũng như cập nhật tên nhóm và giới thiệu về nhóm.',
	'ADD_USERS'					=> 'Thêm thành viên',
	'ADD_USERS_EXPLAIN'			=> 'Với công cụ này, bạn có thể thêm những thành viên mới cho nhóm. Bạn cũng có thể thay đổi nhóm mặc định cho các thành viên được chọn. Ngoài ra, bạn cũng có thể xác định thành viên trở thành trưởng nhóm. Hãy nhập mỗi tên thành viên trên một dòng xác định.',

	'COPY_PERMISSIONS'			=> 'Sao chép thiết lập cấp phép từ',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Sau khi sao chép thiết lập cấp phép, nhóm này sẽ có thiết lập cấp phép giống như thiêt lập cấp phép của nhóm mà bạn chọn sao chép đến.',
	'CREATE_GROUP'				=> 'Tạo nhóm mới',

	'GROUPS_NO_MEMBERS'	=> 'Nhóm này chưa có thành viên',
	'GROUPS_NO_MODS'	=> 'Bạn chưa xác định trưởng nhóm',

	'GROUP_APPROVE'					=> 'Chấp nhận thành viên',
	'GROUP_APPROVED'				=> 'Thành viên được chấp nhận',
	'GROUP_AVATAR'					=> 'Hình đại diện của nhóm',
	'GROUP_AVATAR_EXPLAIN'			=> 'Hình ảnh được hiển thị trong bảng quản lí của nhóm.',
	'GROUP_CLOSED'					=> 'Nhóm cố định',
	'GROUP_COLOR'					=> 'Màu nhóm',
	'GROUP_COLOR_EXPLAIN'			=> 'Xác định màu phân biệt cho tên thành viên của các thành viên trong nhóm, để trống để sử dụng màu mặc định dành cho thành viên.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Bạn có chắc chắn muốn thêm thành viên “%1$s” vào nhóm này?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Bạn có chắc chắn muốn thêm những thành viên “%1$s” vào nhóm này?',
	'GROUP_CREATED'					=> 'Nhóm đã được tạo thành công.',
	'GROUP_DEFAULT'					=> 'Chọn làm nhóm mặc định của thành viên',
	'GROUP_DEFS_UPDATED'			=> 'Nhóm mặc định thiết lập cho tất cả thành viên đã chọn.',
	'GROUP_DELETE'					=> 'Gỡ bỏ thành viên khỏi nhóm',
	'GROUP_DELETED'					=> 'Nhóm đã được xóa và nhóm mặc định của thành viên đã được thiết lập thành công.',
	'GROUP_DEMOTE'					=> 'Giáng chức trưởng nhóm',
	'GROUP_DESC'					=> 'Giới thiệu về nhóm',
	'GROUP_DETAILS'					=> 'Thông tin về nhóm',
	'GROUP_EDIT_EXPLAIN'			=> 'Với công cụ này, bạn có thể chỉnh sửa các nhóm hiện có. Bạn có thể thay đổi tên nhóm, giới thiệu về nhóm và loại nhóm như tự do, cố định… Bạn cũng có thể thiết lập những tùy chọn cho nhóm như màu sắc phân biệt, xếp hạng… Những thay đổi thiết lập trong đây sẽ thay thế cho thiết lập hiện tại của thành viên. Lưu ý rằng những thành viên trong nhóm có thể thay đổi thiết lập hình đại diện thay thế của nhóm nếu như bạn không thiết lập cấp phép phù hợp.',
	'GROUP_ERR_USERS_EXIST'			=> 'Thành viên vừa chọn đã là thành viên trong nhóm.',
	'GROUP_FOUNDER_MANAGE'			=> 'Chỉ người sáng lập quản lí',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Giới hạn quyền quản lí nhóm này chỉ dành cho những người sáng lập. Những thành viên có thiết lập cấp phép nhóm vẫn có thể nhìn thấy nhóm này giống như các thành viên khác trong nhóm.',
	'GROUP_HIDDEN'					=> 'Nhóm ẩn',
	'GROUP_LANG'					=> 'Ngôn ngữ của nhóm',
	'GROUP_LEAD'					=> 'Trưởng nhóm',
	'GROUP_LEADERS_ADDED'			=> 'Trưởng nhóm đã được thêm vào thành công.',
	'GROUP_LEGEND'					=> 'Hiển thị nhóm trong chú thích',
	'GROUP_LIST'					=> 'Danh sách thành viên hiện tại trong nhóm',
	'GROUP_LIST_EXPLAIN'			=> 'Danh sách tất cả các thành viên hiện tại có trong nhóm với tư cách thành viên của họ. Bạn có thể xóa thành viên ngoại trừ trường hợp những nhóm đặc biệt hay thêm vào một số thành viên mới mà bạn muốn.',
	'GROUP_MEMBERS'					=> 'Thành viên của nhóm',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Đây là danh sách toàn bộ các thành viên của nhóm. Danh sách liệt kê này xác định rõ những loại thành viên trong nhóm như những trưởng nhóm, các thành viên đang chờ quyết định cho phép tham gia và những thành viên hiện tại của nhóm. Với công cụ này, bạn có thể quản lí tư cách thành viên của tất cả thành viên cũng như vai trò của họ trong nhóm. Để bỏ chọn trưởng nhóm nhưng không gỡ bỏ họ khỏi nhóm, hãy giáng chức họ, việc này tốt hơn là xóa họ khỏi nhóm. Tương tự, việc chọn thăng chức sẽ thiết lập một thành viên trong nhóm trở thành trưởng nhóm.',
	'GROUP_MESSAGE_LIMIT'			=> 'Số tin nhắn giới hạn trong mỗi thư mục của các thành viên trong nhóm',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Thiết lập này sẽ thay thế cho số tin nhắn giới hạn trong mỗi thư mục của các thành viên khác ngoài nhóm. Nhập số <strong>0</strong> để sử dụng giới hạn mặc định giống như các thành viên khác ngoài nhóm.',
	'GROUP_MODS_ADDED'				=> 'Trưởng nhóm mới đã được thêm vào thành công.',
	'GROUP_MODS_DEMOTED'			=> 'Trưởng nhóm đã được giáng chức thành công.',
	'GROUP_MODS_PROMOTED'			=> 'Thành viên của nhóm đã được thăng chức thành công.',
	'GROUP_NAME'					=> 'Tên nhóm',
	'GROUP_NAME_TAKEN'				=> 'Tên của nhóm bạn vừa nhập đã được sử dụng rồi. Bạn hãy vui lòng chọn một tên khác.',
	'GROUP_OPEN'					=> 'Nhóm tham gia tự do',
	'GROUP_PENDING'					=> 'Thành viên chờ quyết định',
	'GROUP_MAX_RECIPIENTS'			=> 'Số người nhận tối đa cho phép trong mỗi tin nhắn',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Số lượng người nhận tối đa cho phép đối với một tin nhắn gửi đến nhóm. Nhập số <strong>0</strong> để sử dụng thiết lập chung từ hệ thống.',
	'GROUP_PROMOTE'					=> 'Thăng chức thành trưởng nhóm',
	'GROUP_RANK'					=> 'Xếp hạng của nhóm',
	'GROUP_RECEIVE_PM'				=> 'Cho phép nhóm nhận tin nhắn',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Lưu ý rằng bạn không thể gửi tin nhắn cho những nhóm ẩn và điều đó không phụ thuộc vào thiết lập này.',
	'GROUP_REQUEST'					=> 'Nhóm tham gia phải gửi yêu cầu',
	'GROUP_SETTINGS_SAVE'			=> 'Thiết lập của nhóm',
	'GROUP_TYPE'					=> 'Loại nhóm',
	'GROUP_TYPE_EXPLAIN'			=> 'Chọn loại nhóm cho phép các thành viên tham gia vào nhóm hay xem thông tin về nhóm.',
	'GROUP_UPDATED'					=> 'Thiết lập của nhóm đã được cập nhật thành công.',

	'GROUP_USERS_ADDED'				=> 'Thành viên mới đã được thêm vào nhóm thành công.',
	'GROUP_USERS_EXIST'				=> 'Thành viên vừa chọn đã là thành viên của nhóm.',
	'GROUP_USERS_REMOVE'			=> 'Thành viên đã được gỡ bỏ khỏi nhóm và những thiết lập mặc định đã được chọn thành công.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Chọn làm nhóm mặc định cho tất cả thành viên',
	'MEMBERS'				=> 'Thành viên',

	'NO_GROUP'			=> 'Không có nhóm nào được xác định.',
	'NO_GROUPS_CREATED'	=> 'Chưa có nhóm nào được tạo.',
	'NO_PERMISSIONS'	=> 'Đừng sao chép thiết lập cấp phép',
	'NO_USERS'			=> 'Bạn chưa nhập vào bất kì thành viên nào.',
	'NO_USERS_ADDED'	=> 'Không có thành viên nào được thêm vào nhóm.',
	'NO_VALID_USERS'	=> 'Bạn vẫn chưa nhập vào bất kì thành viên thích hợp nào cho thao tác trên.',

	'SPECIAL_GROUPS'			=> 'Nhóm đặc biệt',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Có một vài loại nhóm đặc biệt khác hẳn với các nhóm còn lại, những nhóm này không thể xóa cũng như chỉnh sửa trực tiếp được. Tuy nhiên, bạn vẫn có thể thêm thành viên mới vào những nhóm này và thay đổi những thiết lập đơn giản.',

	'TOTAL_MEMBERS'	=> 'Số thành viên',

	'USERS_APPROVED'				=> 'Thành viên đã được chấp nhận thành công.',
	'USER_DEFAULT'					=> 'Thành viên mặc định',
	'USER_DEF_GROUPS'				=> 'Nhóm đã xác định thành viên',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Đây là những nhóm được tạo ra bởi chính bạn hoặc các quản trị viên trong hệ thống. Bạn có thể quản lí tư cách thành viên trong nhóm như sửa thiết lập của nhóm hoặc thậm chí là gỡ bỏ nhóm.',
	'USER_GROUP_DEFAULT'			=> 'Chọn làm nhóm mặc định',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Bật tùy chọn này để thiết lập nhóm này làm nhóm mặc định cho các thành viên đã thêm vào.',
	'USER_GROUP_LEADER'				=> 'Chọn làm trưởng nhóm',
));

?>