<?php
/** 
*
* acp_profile [Vietnamese]
*
* @package language
* @version $Id: profile.php 28 2008-12-13 11:16:00Z nedka $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Mục thông tin cá nhân mới đã được thêm vào thành công.',
	'ALPHA_ONLY'			=> 'Chỉ sử dụng chữ số và chữ cái',
	'ALPHA_SPACERS'			=> 'Chỉ sử dụng chữ số, chữ cái và khoảng trắng',
	'ALWAYS_TODAY'			=> 'Sử dụng ngày tháng hiện tại',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Nhập vào tùy chọn của bạn',
	'BOOL_TYPE_EXPLAIN'		=> 'Xác định loại là ô kiểm vuông nhiều tùy chọn hay ô kiểm tròn một tùy chọn. Ô kiểm vuông nhiều tùy chọn chỉ được hiển thị nếu nó đã được đánh dấu cho thành viên lựa chọn. Trong trường hợp đó, tùy chọn ngôn ngữ <strong>thứ hai</strong> sẽ được sử dụng. Ô kiểm tròn một tùy chọn sẽ hiển thị bất chấp giá trị của chúng.',

	'CHANGED_PROFILE_FIELD'			=> 'Mục thông tin cá nhân đã được thay đổi thành công.',
	'CHARS_ANY'						=> 'Bất kì ký tự nào',
	'CHECKBOX'						=> 'Ô kiểm vuông nhiều tùy chọn',
	'COLUMNS'						=> 'Số cột',
	'CP_LANG_DEFAULT_VALUE'			=> 'Giá trị mặc định',
	'CP_LANG_EXPLAIN'				=> 'Giới thiệu mục thông tin cá nhân',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Giới thiệu về mục thông tin cá nhân này hiển thị cho thành viên.',
	'CP_LANG_NAME'					=> 'Tên mục hiển thị cho thành viên',
	'CP_LANG_OPTIONS'				=> 'Tùy chọn',
	'CREATE_NEW_FIELD'				=> 'Tạo mục thông tin cá nhân mới',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Có ít nhất một mục thông tin cá nhân chưa được phiên dịch toàn bộ. Bạn hãy vui lòng điền đầy đủ thông tin yêu cầu bằng cách bấm vào liên kết “Phiên dịch”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Ngôn ngữ mặc định [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Những mục ngôn ngữ dành cho ngôn ngữ mặc định của hệ thống chưa được điền đầy đủ cho mục thông tin cá nhân này.',
	'DEFAULT_VALUE'					=> 'Giá trị mặc định',
	'DELETE_PROFILE_FIELD'			=> 'Gỡ bỏ mục thông tin cá nhân',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa mục thông tin cá nhân này?',
	'DISPLAY_AT_PROFILE'			=> 'Hiển thị trong phần thiết lập cá nhân',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Cho phép thành viên có thể thay đổi mục thông tin cá nhân này trong bảng điều khiển của mình.',	
	'DISPLAY_AT_REGISTER'			=> 'Hiển thị trong phần đăng ký thành viên mới',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Nếu tùy chọn này được bật, mục thông tin cá nhân sẽ được thêm vào trong phần đăng ký thành viên.',
	'DISPLAY_PROFILE_FIELD'			=> 'Hiển thị mục thông tin cá nhân',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Hiển thị mục thông tin cá nhân tại tất cả trang cho phép nếu tùy chọn này được bật trong phần thiết lập nạp trang. Vô hiệu tùy chọn này sẽ ẩn mục thông tin cá nhân khỏi trang xem chủ đề, trang thông tin cá nhân và danh sách thành viên.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Nhập vào những tùy chọn của bạn với mỗi tùy chọn trên một dòng.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Lưu ý rằng bạn có thể thay đổi những đối tượng ngôn ngữ của mình và cũng có thể thêm vào những đối tượng mới ở phần cuối. Chúng tôi không khuyên bạn thêm vào những đối tượng mới giữa các đối tượng hiện có bởi vì điều này có thể dẫn đến kết quả là những đối tượng sai sẽ được chỉ định cho các thành viên của bạn. Điều này cũng có thể xảy ra nếu bạn gỡ bỏ những đối tượng nửa thế này nửa thế khác. Việc gỡ bỏ những đối tượng từ kết quả sau cùng mà các thành viên được chỉ định những đối tượng này sẽ được quay trả về đối tượng mặc định.',
	'EMPTY_FIELD_IDENT'			=> 'Bạn chưa nhập tên mục thông tin cá nhân',
	'EMPTY_USER_FIELD_NAME'		=> 'Bạn chưa nhập tên hiển thị cho mục thông tin cá nhân của thành viên',
	'ENTRIES'					=> 'Mục',
	'EVERYTHING_OK'				=> 'Mọi thứ đều bình thường',

	'FIELD_BOOL'				=> 'Toán tử chỉ hai lựa chọn (có/không)',
	'FIELD_DATE'				=> 'Ngày tháng',
	'FIELD_DESCRIPTION'			=> 'Giới thiệu mục thông tin cá nhân',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Giới thiệu về mục thông tin cá nhân này hiển thị cho thành viên.',
	'FIELD_DROPDOWN'			=> 'Danh sách chọn thả xuống',
	'FIELD_IDENT'				=> 'Tên mục thông tin cá nhân',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Tên mục thông tin cá nhân vừa chọn đã có sẵn. Hãy vui lòng chọn một tên khác.',
	'FIELD_IDENT_EXPLAIN'		=> 'Tên mục thông tin cá nhân là tên xác định mục thông tin cá nhân trong cơ sở dữ liệu và trong các tập tin khuôn mẫu.',
	'FIELD_INT'					=> 'Chữ số',
	'FIELD_LENGTH'				=> 'Độ dài khung nhập',
	'FIELD_NOT_FOUND'			=> 'Không tìm thấy mục thông tin cá nhân.',
	'FIELD_STRING'				=> 'Trường văn bản đơn',
	'FIELD_TEXT'				=> 'Khung nhập văn bản',
	'FIELD_TYPE'				=> 'Loại mục thông tin cá nhân',
	'FIELD_TYPE_EXPLAIN'		=> 'Bạn không thể thay đổi loại mục thông tin cá nhân sau này.',
	'FIELD_VALIDATION'			=> 'Kiểm tra mục thông tin cá nhân',
	'FIRST_OPTION'				=> 'Tùy chọn đầu tiên',

	'HIDE_PROFILE_FIELD'			=> 'Ẩn mục thông tin cá nhân',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Ẩn mục thông tin cá nhân này đối với các thành viên khác ngoại trừ chính bản thân thành viên, các quản trị viên và điều hành viên. Nếu tùy chọn “Hiển thị trong phần thiết lập cá nhân” bị vô hiệu, thành viên sẽ không thể nhìn thấy hay thay đổi mục thông tin cá nhân này và việc thay đổi chỉ được tiến hành bởi quản trị viên.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Tên mục thông tin cá nhân chỉ được phép sử dụng ký tự thường a-z và dấu gạch nối _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Tên mục thông tin cá nhân chỉ có thể dài tối đa là <strong>17</strong> ký tự',
	'ISO_LANGUAGE'				=> 'Ngôn ngữ [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Tùy chọn xác định ngôn ngữ [<b>%s</b>]',

	'MAX_FIELD_CHARS'		=> 'Số lượng ký tự tối đa cho phép sử dụng',
	'MAX_FIELD_NUMBER'		=> 'Số tối đa cho phép sử dụng',
	'MIN_FIELD_CHARS'		=> 'Số lượng ký tự tối thiểu cho phép sử dụng',
	'MIN_FIELD_NUMBER'		=> 'Số tối thiểu cho phép sử dụng',

	'NO_FIELD_ENTRIES'			=> 'Không có mục nào được chỉ định.',
	'NO_FIELD_ID'				=> 'Không có mục thông tin cá nhân nào được chỉ định.',
	'NO_FIELD_TYPE'				=> 'Không có loại mục thông tin cá nhân nào được chỉ định.',
	'NO_VALUE_OPTION'			=> 'Tùy chọn ngang bằng đến những giá trị không nhập vào',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Giá trị không được nhập vào. Nếu mục thông tin cá nhân là bắt buộc, thành viên sẽ được thông báo lỗi nếu chọn tùy chọn tại đây.',
	'NUMBERS_ONLY'				=> 'Chỉ sử dụng chữ số (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Tùy chọn đơn giản',
	'PROFILE_FIELD_ACTIVATED'	=> 'Mục thông tin cá nhân đã được kích hoạt thành công.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Mục thông tin cá nhân đã được ngưng kích hoạt thành công.',
	'PROFILE_LANG_OPTIONS'		=> 'Tùy chọn xác định ngôn ngữ',
	'PROFILE_TYPE_OPTIONS'		=> 'Tùy chọn xác định loại thông tin cá nhân',

	'RADIO_BUTTONS'				=> 'Ô kiểm tròn một tùy chọn',
	'REMOVED_PROFILE_FIELD'		=> 'Đã gỡ bỏ thành công mục thông tin cá nhân.',
	'REQUIRED_FIELD'			=> 'Mục thông tin cá nhân bắt buộc',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Yêu cầu thành viên hay quản trị viên phải nhập thông tin đầy đủ cho mục này. Nếu tùy chọn “Hiển thị trong phần đăng ký thành viên mới” bị vô hiệu, mục này chỉ được yêu cầu khi thành viên thay đổi thông tin cá nhân của họ.',
	'ROWS'						=> 'Số hàng',

	'SAVE'							=> 'Lưu',
	'SECOND_OPTION'					=> 'Tùy chọn thứ hai',
	'STEP_1_EXPLAIN_CREATE'			=> 'Với công cụ này, bạn có thể nhập vào những thông số cơ bản đầu tiên cho mục thông tin cá nhân mới. Thông số này rất cần thiết trong bước thứ hai: bạn có thể thiết lập những tùy chọn còn lại cũng như có thể xem trước và kiểm tra mục thông tin cá nhân nhiều hơn.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Với công cụ này, bạn có thể thay đổi những thông số cớ bản của các mục thông tin cá nhân. Những tùy chọn có liên quan được tính toán lại trong bước thứ hai.',
	'STEP_1_TITLE_CREATE'			=> 'Thêm vào mục thông tin cá nhân',
	'STEP_1_TITLE_EDIT'				=> 'Sửa mục thông tin cá nhân',
	'STEP_2_EXPLAIN_CREATE'			=> 'Với công cụ này, bạn có thể xác định một vài mục tùy chọn thường gặp mà bạn có thể điều chỉnh.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Với công cụ này, bạn có thể thay đổi một vài mục tùy chọn thường gặp.<br /><strong>Lưu ý rằng những thay đổi đến mục thông tin cá nhân sẽ không ảnh hưởng đến những mục thông tin cá nhân hiện có được nhập vào bởi các thành viên.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Tùy chọn xác định loại thông tin cá nhân',
	'STEP_2_TITLE_EDIT'				=> 'Tùy chọn xác định loại thông tin cá nhân',
	'STEP_3_EXPLAIN_CREATE'			=> 'Kể từ khi bạn có nhiều gói ngôn ngữ được cài đặt trong hệ thống, bạn phải điền đầy đủ thông tin cho các mục này trong từng gói ngôn ngữ. Mục thông tin cá nhân sẽ hiển thị với gói ngôn ngữ mặc định được chọn, bạn có thể điền đầy đủ thông tin cho các mục này trong từng gói ngôn ngữ sau nếu muốn.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Kể từ khi bạn có nhiều gói ngôn ngữ được cài đặt trong hệ thống, bạn có thể thay đổi ngay bây giờ hoặc thêm vào đầy đủ thông tin cho các mục này trong từng gói ngôn ngữ. Mục thông tin cá nhân sẽ hiển thị với gói ngôn ngữ mặc định được chọn.',
	'STEP_3_TITLE_CREATE'			=> 'Xác định ngôn ngữ còn lại',
	'STEP_3_TITLE_EDIT'				=> 'Xác định ngôn ngữ',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Nhập vào một cụm từ mặc định được hiển thị hay một giá trị mặc định. Bỏ trống phần này nếu bạn muốn hiển thị rỗng mục thông tin này cho thành viên tự điền vào.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Nhập vào một đoạn văn bản mặc định được hiển thị hay một giá trị mặc định. Bỏ trống phần này nếu bạn muốn hiển thị rỗng mục thông tin này cho thành viên tự điền vào.',
	'TRANSLATE'						=> 'Phiên dịch',

	'USER_FIELD_NAME'	=> 'Tên mục thông tin cá nhân hiển thị cho thành viên',

	'VISIBILITY_OPTION'	=> 'Các tùy chọn ẩn hiển thị',
));

?>