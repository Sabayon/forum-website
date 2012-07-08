<?php
/** 
*
* posting [Vietnamese]
*
* @package language
* @version $Id: posting.php 47 2009-05-07 17:56:00Z nedka $
* @copyright (c) 2006 nedka (Nguyen Dang Khoa)
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
	'ADD_ATTACHMENT'			=> 'Tải lên tập tin đính kèm',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Nếu bạn muốn đính kèm một hay nhiều tập tin trong bài viết, hãy sử dụng công cụ bên dưới.',
	'ADD_FILE'					=> 'Thêm tập tin',
	'ADD_POLL'					=> 'Tạo bình chọn',
	'ADD_POLL_EXPLAIN'			=> 'Nếu bạn không muốn thêm vào một bình chọn trong chủ đề của mình, hãy để trống phần này.',
	'ALREADY_DELETED'			=> 'Xin lỗi, bài viết này vừa bị xóa.',
	'ATTACH_QUOTA_REACHED'		=> 'Xin lỗi, dung lượng cấp phép tải lên cho diễn đàn đã hết.',
	'ATTACH_SIG'				=> 'Đính kèm chữ ký cá nhân (Chữ ký có thể thay đổi trong phần thiết lập cá nhân)',

	'BBCODE_A_HELP'				=> 'Đính kèm tập tin trong dòng: [attachment=]tên_tập_tin.loại_tập_tin[/attachment]',
	'BBCODE_B_HELP'				=> 'Văn bản in đậm: [b]văn bản muốn in đậm[/b]',
	'BBCODE_C_HELP'				=> 'Hiển thị mã: [code]mã muốn hiển thị[/code]',
	'BBCODE_E_HELP'				=> 'Danh sách: Tạo danh sách liệt kê các mục',
	'BBCODE_F_HELP'				=> 'Kích thước văn bản: [size=85]văn bản muốn thay đổi kích thước[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s đang <em>TẮT</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s đang <em>BẬT</em>',
	'BBCODE_I_HELP'				=> 'Văn bản in nghiêng: [i]văn bản muốn in nghiêng[/i]',
	'BBCODE_L_HELP'				=> 'Tạo danh sách: [list]văn bản muốn tạo danh sách[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Mục liệt kê: [*]văn bản trong dòng liệt kê[/*]',
	'BBCODE_O_HELP'				=> 'Tạo danh sách theo thứ tự: [list=]văn bản muốn tạo danh sách theo thứ tự[/list]',
	'BBCODE_P_HELP'				=> 'Chèn hình: [img]http://địa chỉ URL tập tin hình ảnh[/img]',
	'BBCODE_Q_HELP'				=> 'Trích dẫn văn bản: [quote]văn bản muốn trích dẫn[/quote]',
	'BBCODE_S_HELP'				=> 'Màu chữ: [color=red]văn bản muốn tô màu[/color] Lưu ý: Bạn cũng có thể sử dụng dạng color=#FF0000',
	'BBCODE_U_HELP'				=> 'Văn bản gạch chân: [u]văn bản muốn gạch chân[/u]',
	'BBCODE_W_HELP'				=> 'Chèn địa chỉ URL: [url]http://địa_chỉ_URL[/url] hoặc [url=http://địa_chỉ_URL]Tên liên kết URL[/url] (Phím tắt: Alt + W)',
	'BBCODE_D_HELP'				=> 'Chèn Flash: [flash=chiều rộng,chiều cao]http://địa_chỉ_URL_tập_tin_Flash[/flash]',
	'BUMP_ERROR'				=> 'Bạn không thể đẩy chủ đề này liên tục cùng lúc được.',

	'CANNOT_DELETE_REPLIED'		=> 'Xin lỗi, bạn chỉ có thể xóa những bài viết chưa được trả lời.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Bài viết này đã bị khóa. Bạn không thể sửa bài viết này.',
	'CANNOT_EDIT_TIME'			=> 'Bạn không còn có thể sửa hay xóa bài viết này.',
	'CANNOT_POST_ANNOUNCE'		=> 'Xin lỗi, bạn không thể tạo thông báo.',
	'CANNOT_POST_STICKY'		=> 'Xin lỗi, bạn không thể tạo chú ý.',
	'CHANGE_TOPIC_TO'			=> 'Thay đổi loại chủ đề thành',
	'CLOSE_TAGS'				=> 'Đóng đuôi lệnh trong các thẻ BBCode',
	'CURRENT_TOPIC'				=> 'Chủ đề hiện tại',

	'DELETE_FILE'				=> 'Xóa tập tin',
	'DELETE_MESSAGE'			=> 'Xóa bài viết',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa bài viết này?',
	'DELETE_OWN_POSTS'			=> 'Xin lỗi, bạn chỉ có thể xóa những bài viết của chính mình.',
	'DELETE_POST_CONFIRM'		=> 'Bạn có chắc chắn muốn xóa bài viết này?',
	'DELETE_POST_WARN'			=> 'Bài viết đã xóa sẽ không thể khôi phục lại được',
	'DISABLE_BBCODE'			=> 'Tắt các thẻ <strong>BBCode</strong>',
	'DISABLE_MAGIC_URL'			=> 'Đừng tự động nhận diện các địa chỉ URL',
	'DISABLE_SMILIES'			=> 'Tắt <strong>Biểu tượng vui</strong>',
	'DISALLOWED_CONTENT'		=> 'Tập tin bạn vừa tải lên bị từ chối bởi vì nội dung tập tin này đã được xác định có mục đích tấn công hệ thống.',
	'DISALLOWED_EXTENSION'		=> 'Loại tập tin “%s” không được phép sử dụng.',
	'DRAFT_LOADED'				=> 'Bản nháp đã được nạp vào phần nội dung, bạn có thể hoàn tất bài viết của mình ngay bây giờ.<br />Bản nháp của bạn sẽ được xóa sau khi bạn gửi xong bài viết này.',
	'DRAFT_LOADED_PM'			=> 'Bản nháp đã được nạp vào phần nội dung, bạn có thể hoàn tất tin nhắn của mình ngay bây giờ.<br />Bản nháp của bạn sẽ được xóa sau khi bạn gửi xong tin nhắn này.',
	'DRAFT_SAVED'				=> 'Bản nháp đã được lưu thành công.',
	'DRAFT_TITLE'				=> 'Tiêu đề nháp',

	'EDIT_REASON'				=> 'Lý do sửa bài viết này',
	'EMPTY_FILEUPLOAD'			=> 'Tập tin bạn vừa tải lên là tập tin rỗng.',
	'EMPTY_MESSAGE'				=> 'Bạn phải nhập nội dung cho bài viết.',
	'EMPTY_REMOTE_DATA'			=> 'Không thể tải lên tập tin, bạn hãy cố gắng tự tải lên tập tin này.',

	'FLASH_IS_OFF'				=> 'Thẻ [flash] đang <em>TẮT</em>',
	'FLASH_IS_ON'				=> 'Thẻ [flash] đang <em>BẬT</em>',
	'FLOOD_ERROR'				=> 'Bạn không thể gửi liên tục nhiều bài viết cùng lúc được.',
	'FONT_COLOR'				=> 'Màu chữ',
	'FONT_COLOR_HIDE'			=> 'Ẩn màu chữ',
	'FONT_HUGE'					=> 'Lớn nhất',
	'FONT_LARGE'				=> 'Lớn vừa',
	'FONT_NORMAL'				=> 'Bình thường',
	'FONT_SIZE'					=> 'Kích thước',
	'FONT_SMALL'				=> 'Nhỏ vừa',
	'FONT_TINY'					=> 'Nhỏ nhất',

	'GENERAL_UPLOAD_ERROR'		=> 'Không thể tải lên tập tin đính kèm đến “%s”.',

	'IMAGES_ARE_OFF'			=> 'Thẻ [img] đang <em>TẮT</em>',
	'IMAGES_ARE_ON'				=> 'Thẻ [img] đang <em>BẬT</em>',
	'INVALID_FILENAME'			=> '“%s” là một tên tập tin không hợp lệ.',

	'LOAD'						=> 'Nạp',
	'LOAD_DRAFT'				=> 'Nạp bản nháp',
	'LOAD_DRAFT_EXPLAIN'		=> 'Với công cụ này, bạn có thể chọn cho mình bản nháp để tiếp tục soạn bài viết. Bài viết hiện tại của bạn sẽ được hủy bỏ và tất cả nội dung trong bài viết sẽ được xóa. Xem, sửa và xóa những bản nháp trong bảng điều khiển thành viên của bạn.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Bạn phải đăng nhập để đẩy các chủ đề trong chuyên mục này.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Bạn phải đăng nhập để xóa các bài viết trong chuyên mục này.',
	'LOGIN_EXPLAIN_POST'		=> 'Bạn phải đăng nhập để gửi bài trong chuyên mục này.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Bạn phải đăng nhập để trích dẫn các bài viết trong chuyên mục này.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Bạn phải đăng nhập để trả lời các chủ đề trong chuyên mục này.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Bạn chỉ có thể chọn kích thước văn bản tối đa là <strong>%1$d</strong>.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Những tập tin Flash mà bạn sử dụng chỉ có thể cao tối đa là <strong>%1$d</strong> Pixel.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Những tập tin Flash mà bạn sử dụng chỉ có thể rộng tối đa là <strong>%1$d</strong> Pixel.',	
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Những hình ảnh mà bạn sử dụng chỉ có thể cao tối đa là <strong>%1$d</strong> Pixel.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Những hình ảnh mà bạn sử dụng chỉ có thể rộng tối đa là <strong>%1$d</strong> Pixel.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Nhập nội dung bài viết của bạn tại đây nhưng không được quá <strong>%d</strong> ký tự.',
	'MESSAGE_DELETED'			=> 'Bài viết này đã được xóa thành công.',
	'MORE_SMILIES'				=> 'Xem toàn bộ',

	'NOTIFY_REPLY'				=> 'Thông báo cho tôi khi có bài trả lời',
	'NOT_UPLOADED'				=> 'Không thể tải lên tập tin.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Bạn không thể xóa những đối tượng bình chọn đang có.',
	'NO_PM_ICON'				=> 'Không dùng',
	'NO_POLL_TITLE'				=> 'Bạn chưa nhập câu hỏi bình chọn.',
	'NO_POST'					=> 'Bài viết bạn vừa yêu cầu không tồn tại.',
	'NO_POST_MODE'				=> 'Không xác định chế độ bài viết.',

	'PARTIAL_UPLOAD'			=> 'Tập tin đính kèm vừa chọn chỉ được tải lên một phần và chưa hoàn chỉnh.',
	'PHP_SIZE_NA'				=> 'Dung lượng tập tin đính kèm quá lớn.<br />Không thể xác định dung lượng tập tin tối đa xác lập bởi PHP trong tập tin <code>php.ini</code>.',
	'PHP_SIZE_OVERRUN'			=> 'Dung lượng tập tin đính kèm quá lớn, dung lượng tập tin được phép tải lên tối đa là %1$d %2$s.<br />Dung lượng tối đa này được xác lập trong tập tin <strong>php.ini</strong> và không thể tự thay đổi.',
	'PLACE_INLINE'				=> 'Đặt trong dòng',
	'POLL_DELETE'				=> 'Xóa bình chọn',
	'POLL_FOR'					=> 'Thời gian bình chọn',
	'POLL_FOR_EXPLAIN'			=> 'Nhập số <strong>0</strong> hoặc để trống cho bình chọn không giới hạn thời gian.',
	'POLL_MAX_OPTIONS'			=> 'Lựa chọn tối đa của mỗi thành viên',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Đây là số lựa chọn tối đa mà mỗi thành viên tham gia bình chọn có thể thực hiện.',
	'POLL_OPTIONS'				=> 'Đối tượng bình chọn',
	'POLL_OPTIONS_EXPLAIN'		=> 'Đặt mỗi đối tượng bình chọn trong một dòng mới. Bạn có thể tạo đến <strong>%d</strong> đối tượng bình chọn.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Đặt mỗi đối tượng bình chọn trong một dòng mới. Bạn có thể tạo đến <strong>%d</strong> đối tượng bình chọn. Nếu bạn gỡ gỏ hay thêm vào những đối tượng bình chọn thì tất cả kết quả bình chọn trước đây sẽ được tạo lại từ đầu.',
	'POLL_QUESTION'				=> 'Câu hỏi bình chọn',
	'POLL_TITLE_TOO_LONG'		=> 'Tên bình chọn không được vượt quá <strong>100</strong> ký tự.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Độ dài tên bình chọn thực tế của bạn quá lớn, hãy vui lòng bỏ bớt các thẻ lệnh BBCode hay biểu tượng vui.',
	'POLL_VOTE_CHANGE'			=> 'Cho phép bình chọn lại',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Nếu lựa chọn này được bật, những thành viên có thể thay đổi lựa chọn mà họ đã tham gia bình chọn.',
	'POSTED_ATTACHMENTS'		=> 'Tập tin đã được đính kèm',
	'POST_APPROVAL_NOTIFY'		=> 'Bạn sẽ được thông báo khi bài viết của mình được duyệt.',
	'POST_CONFIRMATION'			=> 'Xác nhận bài viết',
	'POST_CONFIRM_EXPLAIN'		=> 'Để ngăn chặn những bài viết được tự động gửi vào hàng loạt, hệ thống yêu cầu bạn phải nhập vào một đoạn mã xác nhận. Mã xác nhận được hiển thị trong hình bên dưới mà bạn nhìn thấy. Nếu bạn gặp vấn đề về thị lực hoặc không thể nhìn thấy đoạn mã này vì một lý do nào đó, hãy liên hệ với %sngười quản trị%s.',
	'POST_DELETED'				=> 'Bài viết này đã được xóa thành công.',
	'POST_EDITED'				=> 'Bài viết này đã được sửa thành công.',
	'POST_EDITED_MOD'			=> 'Bài viết này đã được sửa thành công nhưng vẫn cần phải được duyệt lại bởi một điều hành viên trước khi mọi người có thể xem được.',
	'POST_GLOBAL'				=> 'Thông báo chung',
	'POST_ICON'					=> 'Biểu tượng bài viết',
	'POST_NORMAL'				=> 'Bài viết bình thường',
	'POST_REVIEW'				=> 'Xem lại bài viết',
	'POST_REVIEW_EXPLAIN'		=> 'Có ít nhất một bài viết mới được gửi trong chủ đề này. Có thể bạn muốn xem lại nội dung của nó trước khi tiếp tục gửi bài trả lời.',
	'POST_STORED'				=> 'Bài viết này đã được gửi thành công.',
	'POST_STORED_MOD'			=> 'Bài viết này đã được gửi thành công nhưng vẫn cần phải được duyệt lại bởi một điều hành viên trước khi mọi người có thể xem được.',
	'POST_TOPIC_AS'				=> 'Tạo chủ đề dưới dạng',
	'PROGRESS_BAR'				=> 'Thanh tiến trình',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Bạn chỉ có thể sử dụng <strong>%1$d</strong> trích dẫn trong mỗi bài viết.',

	'SAVE'						=> 'Lưu',
	'SAVE_DATE'					=> 'Đã lưu vào ngày',
	'SAVE_DRAFT'				=> 'Lưu bản nháp',
	'SAVE_DRAFT_CONFIRM'		=> 'Lưu ý rằng bạn chỉ có thể lưu vào bản nháp tiêu đề và nội dung của bài viết, bất kì các thành phần khác sẽ được gỡ bỏ. Bạn có chắc chắn muốn lưu bản nháp của mình ngay bây giờ?',	
	'SMILIES'					=> 'Biểu tượng vui',
	'SMILIES_ARE_OFF'			=> 'Biểu tượng vui đang <em>TẮT</em>',
	'SMILIES_ARE_ON'			=> 'Biểu tượng vui đang <em>BẬT</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Thời gian hiển thị chủ đề dưới dạng chú ý/thông báo',
	'STICK_TOPIC_FOR'			=> 'Đánh dấu quan trọng cho chủ đề trong',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Nhập số <strong>0</strong> hay để trống cho chú ý/thông báo không giới hạn thời gian.',
	'STYLES_TIP'				=> 'Chú ý: Bạn có thể chọn nhanh đoạn văn bản rồi bấm vào những nút bên trên.',

	'TOO_FEW_CHARS'				=> 'Nội dung bài viết của bạn quá ngắn.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Bạn phải tạo ít nhất hai đối tượng bình chọn.',
	'TOO_MANY_ATTACHMENTS'		=> 'Không thể gửi thêm tập tin đính kèm nào khác, số lượng tập tin tối đa cho phép đính kèm là <strong>%d</strong>.',
	'TOO_MANY_CHARS'			=> 'Nội dung bài viết của bạn quá dài.',
	'TOO_MANY_CHARS_POST'		=> 'Nội dung bài viết của bạn có đến <strong>%1$d</strong> ký tự. Số ký tự tối đa bạn được phép sử dụng là <strong>%2$d</strong>.',
	'TOO_MANY_CHARS_SIG'		=> 'Nội dung chữ ký của bạn có đến <strong>%1$d<strong ký tự. Số ký tự tối đa bạn được phép sử dụng là <strong>%2$d</strong>.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Bạn đã tạo quá nhiều đối tượng bình chọn.',
	'TOO_MANY_SMILIES'			=> 'Bài viết của bạn sử dụng quá nhiều biểu tượng vui. Số lượng biểu tượng vui tối đa cho phép sử dụng trong mỗi bài viết là <strong>%d</strong>.',
	'TOO_MANY_URLS'				=> 'Bài viết của bạn có quá nhiều địa chỉ URL. Số lượng địa chỉ URL tối đa được phép sử dụng trong mỗi bài viết là <strong>%d</strong>.',
	'TOO_MANY_USER_OPTIONS'		=> 'Bạn không thể xác định số đối tượng bình chọn tối đa cho mỗi thành viên nhiều hơn số lượng đối tượng bình chọn hiện có trong bình chọn này',
	'TOPIC_BUMPED'				=> 'Chủ đề đã được đẩy lên thành công.',

	'UNAUTHORISED_BBCODE'		=> 'Bạn không thể sử dụng những thẻ lệnh BBCode sau: “%s”.',
	'UNGLOBALISE_EXPLAIN'		=> 'Để chuyển đổi chủ đề này từ loại thông báo quan trọng thành chủ đề bình thường, bạn cần phải chọn chuyên mục chứa chủ đề này.',
	'UPDATE_COMMENT'			=> 'Cập nhật chú thích',
	'URL_INVALID'				=> 'Địa chỉ URL bạn vừa nhập không chính xác.',
	'URL_NOT_FOUND'				=> 'Không thể tìm thấy tập tin vừa chọn.',
	'URL_IS_OFF'				=> 'Thẻ [url] đang <em>TẮT</em>',
	'URL_IS_ON'					=> 'Thẻ [url] đang <em>BẬT</em>',
	'USER_CANNOT_BUMP'			=> 'Bạn không thể đẩy chủ đề lên trong chuyên mục này.',
	'USER_CANNOT_DELETE'		=> 'Bạn không thể xóa bài viết trong chuyên mục này.',
	'USER_CANNOT_EDIT'			=> 'Bạn không thể sửa bài viết trong chuyên mục này.',
	'USER_CANNOT_REPLY'			=> 'Bạn không thể trả lời bài viết trong chuyên mục này.',
	'USER_CANNOT_FORUM_POST'	=> 'Bạn không thể thực hiện các thao tác gửi bài trong chuyên mục này vì loại chủ đề này không hỗ trợ.',	

	'VIEW_MESSAGE'			=> '%sXem bài viết vừa gửi của bạn%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sXem tin nhắn vừa gửi của bạn%s',

	'WRONG_FILESIZE'	=> 'Dung lượng tập tin đính kèm quá lớn, dung lượng tối đa cho phép là <strong>%1d %2s</strong>.',
	'WRONG_SIZE'		=> 'Kích thước hình ảnh vừa chọn rộng <strong>%5$d</strong> Pixel và cao <strong>%6$d</strong> Pixel. Kích thước hình ảnh phải rộng ít nhất <strong>%1$d</strong> Pixel và cao ít nhất <strong>%2$d</strong> Pixel cũng như không được phép rộng hơn <strong>%3$d</strong> Pixel và cao hơn <strong>%4$d</strong> Pixel.',
));

?>