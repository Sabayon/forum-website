<?php
/** 
*
* acp_board [Vietnamese]
*
* @package language
* @version $Id: board.php 89 2009-05-07 18:04:00Z nedka $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xác định một vài cơ chế hoạt động đơn giản của hệ thống, từ tên và giới thiệu thích hợp về website cho đến thay đổi những thiết lập khác trong hệ thống như điều chỉnh giá trị mặc định về múi giờ và ngôn ngữ.',

	'CUSTOM_DATEFORMAT'				=> 'Tùy chọn…',
	'DEFAULT_DATE_FORMAT'			=> 'Định dạng ngày tháng',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Sử dụng cú pháp giống như hàm <code>date()</code> trong PHP.',
	'DEFAULT_LANGUAGE'				=> 'Ngôn ngữ mặc định',
	'DEFAULT_STYLE'					=> 'Giao diện mặc định',
	'DISABLE_BOARD'					=> 'Ngưng hoạt động hệ thống',
	'DISABLE_BOARD_EXPLAIN'			=> 'Tùy chọn này sẽ ngưng hoạt động của hệ thống đối với các thành viên. Bạn cũng có nhập vào một tin nhắn giới hạn trong <strong>255</strong> ký tự hiển thị như thông báo ngưng hoạt động của hệ thống nếu muốn.',
	'OVERRIDE_STYLE'				=> 'Thay thế cho giao diện lựa chọn của thành viên',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Tùy chọn thay thế toàn bộ những giao diện đã được các thành viên lựa chọn bằng giao diện mặc định duy nhất của hệ thống.',
	'SITE_DESC'						=> 'Giới thiệu về website',
	'SITE_NAME'						=> 'Tên website',
	'SYSTEM_DST'					=> 'Bật chế độ giờ mùa hè <abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Múi giờ hệ thống',
	'WARNINGS_EXPIRE'				=> 'Cảnh cáo trong vòng',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Số ngày trải qua trước khi một cảnh cáo tự động hết hiệu lực từ bản ghi của một thành viên.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Với công cụ này, bạn có thể kích hoạt hay vô hiệu một vài chức năng trong hệ thống.',

	'ALLOW_ATTACHMENTS'			=> 'Cho phép đính kèm tập tin',
	'ALLOW_BIRTHDAYS'			=> 'Cho phép thông tin sinh nhật',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Tùy chọn cho phép thông tin sinh nhật được thành viên nhập vào và thông tin về tuổi được hiển thị trong thông tin cá nhân về họ. Lưu ý rằng phần danh sách các thành viên có ngày sinh nhật trên trang chủ được điều khiển bởi một thiết lập nạp trang riêng.',
	'ALLOW_BOOKMARKS'			=> 'Cho phép đánh dấu chủ đề vào trang yêu thích',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Tùy chọn cho phép thành viên đánh dấu lại những chủ đề mà mình quan tâm vào trang yêu thích.',
	'ALLOW_BBCODE'				=> 'Cho phép sử dụng BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Cho phép theo dõi chuyên mục',
	'ALLOW_NAME_CHANGE'			=> 'Cho phép thay đổi tên thành viên',
	'ALLOW_NO_CENSORS'			=> 'Cho phép tắt chế độ kiểm duyệt từ',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Tùy chọn cho phép thành viên có thể tắt chế độ kiểm duyệt từ tự động trong các bài viết và tin nhắn.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Cho phép đính kèm tập tin trong tin nhắn',
	'ALLOW_SIG'					=> 'Cho phép sử dụng chữ ký cá nhân',
	'ALLOW_SIG_BBCODE'			=> 'Cho phép sử dụng BBCode trong chữ ký cá nhân',
	'ALLOW_SIG_FLASH'			=> 'Cho phép sử dụng thẻ BBCode <code>[FLASH]</code> trong chữ ký cá nhân',
	'ALLOW_SIG_IMG'				=> 'Cho phép sử dụng thẻ BBCode <code>[IMG]</code> trong chữ ký cá nhân',
	'ALLOW_SIG_LINKS'			=> 'Cho phép sử dụng liên kết trong chữ ký cá nhân',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Nếu bạn vô hiệu tùy chọn này, thẻ BBCode <code>[URL]</code> và các địa chỉ URL khác trong chữ ký thành viên sẽ không được hiển thị như liên kết.',
	'ALLOW_SIG_SMILIES'			=> 'Cho phép sử dụng biểu tượng vui trong chữ ký cá nhân',
	'ALLOW_SMILIES'				=> 'Cho phép sử dụng biểu tượng vui',
	'ALLOW_TOPIC_NOTIFY'		=> 'Cho phép theo dõi chủ đề',
	'BOARD_PM'					=> 'Cho phép gửi tin nhắn',
	'BOARD_PM_EXPLAIN'			=> 'Tùy chọn kích hoạt hay vô hiệu chức năng gửi tin nhắn trong hệ thống đối với tất cả thành viên.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Hình đại diện thường là những hình ảnh nhỏ, những hình đơn mà thành viên đính kèm trong thông tin cá nhân của mình. Tùy thuộc vào giao diện được sử dụng, hình đại diện thường hiển thị bên dưới tên thành viên trong phần xem chủ đề. Với công cụ này, bạn có thể thay đổi cách sử dụng hình đại diện của thành viên. Lưu ý rằng trong trường hợp bạn kích hoạt tùy chọn cho phép thành viên tải lên hình đại diện, bạn cần phải tạo thư mục mang tên bên dưới trong hệ thống theo đúng đường dẫn đã thiết lập và chắc chắn thiết lập cấp phép có thể ghi cho thư mục này trên máy chủ. Bạn cũng cần lưu ý rằng dung lượng tập tin hạn chế cho hình đại diện chỉ áp dụng cho những hình đại diện được tải lên và không có tác dụng đối với những hình đại diện được liên kết từ các website khác.',

	'ALLOW_LOCAL'					=> 'Cho phép sử dụng thư viện hình đại diện',
	'ALLOW_REMOTE'					=> 'Cho phép liên kết hình đại diện',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Tùy chọn cho phép thành viên sử dụng hình đại diện được liên kết từ các website khác.',
	'ALLOW_UPLOAD'					=> 'Cho phép tải lên hình đại diện',
	'AVATAR_GALLERY_PATH'			=> 'Đường dẫn thư viện hình đại diện',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa hình ảnh sử dụng cho thư viện hình đại diện trong hệ thống, ví dụ như <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Đường dẫn thư mục chứa hình đại diện tải lên',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa hình đại diện được tải lên trong hệ thống, ví dụ như <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Kích thước hình đại diện tối đa cho phép',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Chiều rộng x chiều cao với đơn vị tính Pixel.',
	'MAX_FILESIZE'					=> 'Dung lượng tập tin hình đại diện tối đa cho phép',
	'MAX_FILESIZE_EXPLAIN'			=> 'Áp dụng cho những hình đại diện được tải lên bởi thành viên.',
	'MIN_AVATAR_SIZE'				=> 'Kích thước hình đại diện tối thiểu cho phép',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Chiều rộng x chiều cao với đơn vị tính Pixel.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chức năng gửi tin nhắn trong hệ thống.',

	'ALLOW_BBCODE_PM'			=> 'Cho phép sử dụng BBCode trong tin nhắn',
	'ALLOW_FLASH_PM'			=> 'Cho phép sử dụng thẻ BBCode <code>[FLASH]</code> trong tin nhắn',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Lưu ý rằng việc cho phép chèn tập tin Flash vào tin nhắn, nếu bạn bật tùy chọn, cũng còn tùy thuộc vào thiết lập cấp phép của thành viên.',
	'ALLOW_FORWARD_PM'			=> 'Cho phép chuyển tiếp tin nhắn',
	'ALLOW_IMG_PM'				=> 'Cho phép sử dụng thẻ BBCode <code>[IMG]</code> trong tin nhắn',
	'ALLOW_MASS_PM'				=> 'Cho phép gửi tin nhắn đến nhiều thành viên và nhóm',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Việc gửi tin nhắn cho nhóm có thể được điều chỉnh lại với mỗi nhóm trong trang thiết lập nhóm.',
	'ALLOW_PRINT_PM'			=> 'Cho phép in tin nhắn',
	'ALLOW_QUOTE_PM'			=> 'Cho phép trích dẫn trong tin nhắn',
	'ALLOW_SIG_PM'				=> 'Cho phép sử dụng chữ ký cá nhân trong tin nhắn',
	'ALLOW_SMILIES_PM'			=> 'Cho phép sử dụng biểu tượng vui trong tin nhắn',
	'BOXES_LIMIT'				=> 'Số tin nhắn tối đa trong mỗi thư mục',
	'BOXES_LIMIT_EXPLAIN'		=> 'Số lượng tin nhắn tối đa mà thành viên nhận được trong mỗi thư mục tin nhắn của mình. Nhập số <strong>0</strong> để không hạn chế tin nhắn.',
	'BOXES_MAX'					=> 'Số thư mục tin nhắn tối đa',
	'BOXES_MAX_EXPLAIN'			=> 'Số lượng thư mục tin nhắn tối đa mà thành viên có thể tạo cho mình.',
	'ENABLE_PM_ICONS'			=> 'Cho phép sử dụng biểu tượng tin nhắn',
	'FULL_FOLDER_ACTION'		=> 'Thao tác xử lí mặc định khi thư mục vượt quá dung lượng',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Thao tác xử lí mặc định sẽ được áp dụng nếu một thư mục tin nhắn của thành viên vượt quá dung lượng cho phép. Nếu bạn thiết lập tất cả, mọi thứ sẽ không còn phù hợp nữa. Chỉ có ngoại lệ đối với thư mục tin nhắn đặc biệt là “Hộp thư gửi”, thao tác xử lí mặc định luôn luôn là xóa những tin nhắn cũ.',
	'HOLD_NEW_MESSAGES'			=> 'Giữ lại những tin nhắn mới',
	'PM_EDIT_TIME'				=> 'Thời gian giới hạn sửa tin nhắn',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Thời gian giới hạn cho thành viên để sửa một tin nhắn chưa được gửi. Nhập số <strong>0</strong> để vô hiệu tùy chọn này',
	'PM_MAX_RECIPIENTS'			=> 'Số người nhận tin nhắn tối đa',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Số lượng người nhận tối đa cho phép đối với một tin nhắn. Nhập số <strong>0</strong> để không giới hạn lượng người nhận tin nhắn. Thiết lập này có thể điều chỉnh lại cho mỗi nhóm trong phần thiết lập nhóm.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chức năng gửi bài viết trong hệ thống.',
	'ALLOW_POST_LINKS'					=> 'Cho phép sử dụng liên kết trong bài viết/tin nhắn',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Nếu bạn vô hiệu tùy chọn này, thẻ BBCode <code>[URL]</code> và các địa chỉ URL khác trong bài viết/tin nhắn sẽ không được hiển thị như liên kết.',
	'ALLOW_POST_FLASH'					=> 'Cho phép sử dụng thẻ BBCode <code>[FLASH]</code> trong bài viết',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Nếu bạn vô hiệu tùy chọn này, thẻ BBCode <code>[FLASH]</code> sẽ bị vô hiệu trong các bài viết. Mặc khác, những thiết lập cấp phép cũng quyết định việc thành viên có thể sử dụng được thẻ BBCode <code>[FLASH]</code> hay không.',
	'BUMP_INTERVAL'					=> 'Thời gian giữa hai lần đẩy chủ đề lên',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Số phút, số giờ hoặc số ngày giữa thời gian bài viết mới nhất được gửi đến chủ đề và việc sử dụng chức năng đẩy chủ đề lên này.',
	'CHAR_LIMIT'					=> 'Ký tự tối đa cho phép trong mỗi bài viết',
	'CHAR_LIMIT_EXPLAIN'			=> 'Số lượng ký tự được phép sử dụng trong nội dung của một bài viết. Nhập số <strong>0</strong> để không hạn chế số ký tự.',
	'DISPLAY_LAST_EDITED'			=> 'Hiển thị thông tin về lần chỉnh sửa bài viết mới nhất',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Bật tùy chọn này nếu bạn muốn hiển thị thông tin về lần chỉnh sửa bài viết mới nhất cuối mỗi bài viết.',
	'EDIT_TIME'						=> 'Thời gian giới hạn sửa bài viết',
	'EDIT_TIME_EXPLAIN'				=> 'Thời gian giới hạn cho thành viên để sửa một bài viết mới. Nhập số <strong>0</strong> để vô hiệu tùy chọn này.',
	'ENABLE_QUEUE_TRIGGER'			=> 'Yêu cầu số bài viết cần có để bỏ qua kiểm duyệt',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Tùy chọn cho phép bạn chuyển những bài viết gửi bởi các thành viên đã đăng ký sang chế độ chờ kiểm duyệt nếu số bài viết của họ ít hơn số lượng được thiết lập tại đây. Thiết lập này không có tác dụng đối với thiết lập cấp phép gửi bài không cần kiểm duyệt.',
	'FLOOD_INTERVAL'				=> 'Thời gian chờ giữa hai lần gửi bài',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Số giây mà thành viên phải chờ đợi giữa hai lần gửi bài viết. Nếu bạn không muốn giới hạn thời gian này cho thành viên nào, hãy thay đổi trong cấp phép của thành viên đó.',
	'HOT_THRESHOLD'					=> 'Số bài viết xác định chủ đề nhiều người xem',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Số bài viết xác định trong mỗi chủ đề để hiển thị chú thích là chủ đề nhiều người xem. Nhập số <strong>0</strong> để vô hiệu việc xác định chủ đề nhiều người xem.',
	'MAX_POLL_OPTIONS'				=> 'Số lượng đối tượng bình chọn tối đa cho phép',
	'MAX_POST_FONT_SIZE'			=> 'Kích thước phông chữ tối đa trong mỗi bài viết',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Kích thước phông chữ tối đa được phép sử dụng trong nội dung một bài viết. Nhập số <strong>0</strong> để không hạn chế kích thước phông chữ.',
	'MAX_POST_IMG_HEIGHT'			=> 'Chiều cao hình ảnh tối đa cho phép trong mỗi bài viết',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Chiều cao tối đa cho phép sử dụng của hình ảnh/tập tin Flash khi gửi bài. Nhập số <strong>0</strong> để không giới hạn chiều cao.',
	'MAX_POST_IMG_WIDTH'			=> 'Chiều rộng hình ảnh tối đa cho phép trong mỗi bài viết',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Chiều rộng tối đa cho phép sử dụng của hình ảnh/tập tin Flash khi gửi bài. Nhập số <strong>0</strong> để không giới hạn chiều rộng.',
	'MAX_POST_URLS'					=> 'Liên kết tối đa trong mỗi bài viết',
	'MAX_POST_URLS_EXPLAIN'			=> 'Số lượng địa chỉ URL tối đa được phép sử dụng trong nội dung một bài viết. Nhập số <strong>0</strong> để không hạn chế số liên kết.',
	'POSTING'						=> 'Gửi bài',
	'POSTS_PER_PAGE'				=> 'Số bài viết trong mỗi chủ đề',
	'QUEUE_TRIGGER_POSTS'			=> 'Số bài viết tối thiểu để bỏ qua kiểm duyệt',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Nếu bạn bật tùy chọn tương ứng, hãy nhập vào số lượng bài viết yêu cầu để thành viên gửi bài mà không cần qua kiểm duyệt. Nếu số bài viết của họ ít hơn con số bạn thiết lập, bài viết họ gửi sẽ được chuyển tự động sang chế độ chờ kiểm duyệt.',
	'QUOTE_DEPTH_LIMIT'				=> 'Độ dài trích dẫn tối đa cho phép trong mỗi bài viết',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Độ dài tối đa của các trích dẫn đặt lồng vào nhau được phép sử dụng trong nội dung một bài viết. Nhập số <strong>0</strong> để không hạn chế độ dài.',
	'SMILIES_LIMIT'					=> 'Biểu tượng vui tối đa trong mỗi bài viết',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Số lượng biểu tượng vui tối đa được phép sử dụng trong nội dung một bài viết. Nhập số <strong>0</strong> để không hạn chế số lượng biểu tượng vui.',
	'TOPICS_PER_PAGE'				=> 'Số chủ đề trong mỗi chuyên mục',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chữ ký cá nhân trong hệ thống.',

	'MAX_SIG_FONT_SIZE'				=> 'Kích thước phông chữ tối đa cho phép',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Kích thước phông chữ tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập số <strong>0</strong> để không hạn chế kích thước.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Chiều cao hình ảnh tối đa cho phép',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Chiều cao tối đa cho phép sử dụng của hình ảnh/tập tin Flash trong chữ ký cá nhân của thành viên. Nhập số <strong>0</strong> để không hạn chế chiều cao.',
	'MAX_SIG_IMG_WIDTH'				=> 'Chiều rộng hình ảnh tối đa cho phép',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Chiều rộng tối đa cho phép sử dụng của hình ảnh/tập tin Flash trong chữ ký cá nhân của thành viên. Nhập số <strong>0</strong> để không hạn chế chiều rộng.',
	'MAX_SIG_LENGTH'				=> 'Số ký tự tối đa cho phép',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Số ký tự tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên.',
	'MAX_SIG_SMILIES'				=> 'Số lượng biểu tượng vui tối đa cho phép',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Số lượng biểu tượng vui tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập số <strong>0</strong> để không hạn chế số lượng biểu tượng vui.',
	'MAX_SIG_URLS'					=> 'Số liên kết tối đa cho phép',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Số lượng liên kết tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập số <strong>0</strong> để không hạn chế số liên kết.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập đăng ký thành viên và thông tin cá nhân của thành viên trong hệ thống.',

	'ACC_ACTIVATION'				=> 'Kích hoạt tài khoản',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Tùy chọn này cho phép bạn quyết định cách thức kích hoạt tài khoản thành viên khi đăng ký mới. Bạn cũng có thể cho ngưng đăng ký thành viên mới với tùy chọn này.',
	'ACC_ADMIN'						=> 'Bởi quản trị viên',
	'ACC_DISABLE'					=> 'Ngưng đăng ký mới',
	'ACC_NONE'						=> 'Không cần',
	'ACC_USER'						=> 'Bởi thành viên',
//	'ACC_USER_ADMIN'				=> 'Thành viên + quản trị viên',
	'ALLOW_EMAIL_REUSE'				=> 'Cho phép sử dụng lại địa chỉ email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'		=> 'Tùy chọn cho phép những thành viên khác nhau có thể sử dụng cùng một địa chỉ email giống nhau.',
	'COPPA'							=> 'Điều khoản COPPA',
	'COPPA_FAX'						=> 'Số fax dùng cho điều khoản COPPA',
	'COPPA_MAIL'					=> 'Địa chỉ email dùng cho điều khoản COPPA',
	'COPPA_MAIL_EXPLAIN'			=> 'Địa chỉ email dùng để cho cha mẹ hay người bảo hộ của các thành viên theo điều khoản COPPA gửi bản cam kết đến.',
	'ENABLE_COPPA'					=> 'Bật điều khoản COPPA',
	'ENABLE_COPPA_EXPLAIN'			=> 'Tùy chọn này yêu cầu các thành viên từ 13 tuổi trở xuống phải cam kết với điều khoản U.S. COPPA. Nếu bạn vô hiệu điều khoản này thì các thành viên trong nhóm COPPA sẽ không còn được hiển thị nữa.',
	'MAX_CHARS'						=> 'Tối đa',
	'MIN_CHARS'						=> 'Tối thiểu',
	'NO_AUTH_PLUGIN'				=> 'Không có phương pháp xác thực thích hợp nào được tìm thấy.',
	'PASSWORD_LENGTH'				=> 'Độ dài mật khẩu',
	'PASSWORD_LENGTH_EXPLAIN'		=> 'Số ký tự tối thiểu và tối đa bắt buộc đối với mật khẩu.',
	'REG_LIMIT'						=> 'Số lần giới hạn đăng ký',
	'REG_LIMIT_EXPLAIN'				=> 'Số lần nạp lại tốt đa mã xác nhận trong phần đăng ký thành viên trước khi bị khóa đăng ký trong phiên đăng nhập đó.',
	'USERNAME_ALPHA_ONLY'			=> 'Chỉ được dùng vừa chữ cái vừa chữ số',
	'USERNAME_ALPHA_SPACERS'		=> 'Vừa chữ cái vừa chữ số và có khoảng trắng',
	'USERNAME_ASCII'				=> 'Chỉ được dùng ký tự ASCII (không có mã Unicode quốc tế)',	
	'USERNAME_LETTER_NUM'			=> 'Bất kì chữ cố và chữ cái nào',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Bất kì chữ số, chữ cái và khoảng trắng nào',
	'USERNAME_CHARS'				=> 'Giới hạn ký tự trong tên thành viên',
	'USERNAME_CHARS_ANY'			=> 'Bất kì ký tự nào',
	'USERNAME_CHARS_EXPLAIN'		=> 'Giới hạn loại ký tự được sử dụng trong tên thành viên và khoảng trắng: -, +, _, [ và ].',
	'USERNAME_LENGTH'				=> 'Độ dài tên thành viên',
	'USERNAME_LENGTH_EXPLAIN'		=> 'Số ký tự tối thiểu và tối đa bắt buộc đối với tên thành viên.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với mã xác nhận và cơ chế đồ họa của mã xác nhận CAPTCHA này trong hệ thống.',

	'CAPTCHA_GD'							=> 'CAPTCHA dùng GD',
	'CAPTCHA_GD_EXPLAIN'					=> 'Sử dụng thư viện GD để tạo ra nhiều mã CAPTCHA nâng cao hơn.',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'CAPTCHA dùng GD với cận cảnh tạp nhiễu',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Tạo hiệu ứng cận cảnh tạp nhiễu làm cho mã CAPTCHA thêm phức tạp.',
	'CAPTCHA_GD_X_GRID'						=> 'CAPTCHA dùng GD với hình nền tạp nhiễu theo trục ngang',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Thiết lập càng thấp càng làm cho mã CAPTCHA thêm phức tạp. Nhập số <strong>0</strong> để vô hiệu việc gây nhiễu trục ngang.',
	'CAPTCHA_GD_Y_GRID'						=> 'CAPTCHA dùng GD với hình nền tạp nhiễu theo trục dọc',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Thiết lập càng thấp càng làm cho mã CAPTCHA thêm phức tạp. Nhập số <strong>0</strong> để vô hiệu việc gây nhiễu trục dọc.',
	'CAPTCHA_GD_WAVE'						=> 'CAPTCHA dùng GD với hình dạng méo mó',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Tạo hiệu ứng hình dạng méo mó cho mã CAPTCHA.',
 	'CAPTCHA_GD_3D_NOISE'					=> 'Tạo vật thể 3D gây nhiễu',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Tạo các vật thể 3D vào mã CAPTCHA, nằm đè lên chữ.',
  	'CAPTCHA_GD_FONTS'						=> 'Sử dụng phông chữ riêng biệt',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Thiết lập này quyết định số lượng hình dạng phông chữ được sử dụng. Bạn có thể chỉ cần dùng vừa đủ số hình dạng mặc định hoặc đưa ra những kiểu chữ được thay đổi. Những chữ in thường cũng có thể thêm vào đây.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Mặc định',
	'CAPTCHA_FONT_NEW'						=> 'Hình dạng mới',
	'CAPTCHA_FONT_LOWER'					=> 'Dùng cả chữ in thường',

	'CAPTCHA_PREVIEW_MSG'				=> 'Những thay đổi của bạn về thiết lập mã xác nhận không được lưu lại. Bởi vì đây chỉ là công cụ xem trước kết quả của mã xác nhận.',
	'CAPTCHA_PREVIEW_EXPLAIN'			=> 'Mã xác nhận CAPTCHA sẽ được hiển thị giống với những thiết lập hiện tại. Bạn hãy bấm vào nút xem trước để nạp lại hình. Lưu ý bạn rằng những mã xác nhận CAPTCHA này được tạo ra ngẫu nhiên và sẽ khác biệt sau mỗi lần nạp lại.',
	'VISUAL_CONFIRM_POST'				=> 'Bật mã xác nhận khi khách gửi bài',
	'VISUAL_CONFIRM_POST_EXPLAIN'		=> 'Tùy chọn yêu cầu khách khi gửi bài phải nhập vào một đoạn mã xác nhận trong hình ảnh được tạo ra ngẫu nhiên để ngăn chặn việc gửi bài viết tự động hàng loạt vào hệ thống.',
	'VISUAL_CONFIRM_REFRESH'			=> 'Cho phép thành viên có thể nạp lại hình mã xác nhận',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'	=> 'Tùy chọn cho phép thành viên có thể yêu cầu nạp lại mã xác nhận mới nếu họ gặp rắc rối với mã xác nhận tạo ra ban đầu.',
	'VISUAL_CONFIRM_REG'				=> 'Bật mã xác nhận khi đăng ký thành viên',
	'VISUAL_CONFIRM_REG_EXPLAIN'		=> 'Tùy chọn yêu cầu các thành viên mới khi đăng ký phải nhập vào một đoạn mã xác nhận trong hình ảnh được tạo ra ngẫu nhiên để ngăn chặn việc đăng ký thành viên tự động hàng loạt vào hệ thống.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Những thiết lập bên dưới được sử dụng để gửi cookie đến trình duyệt của khách ghé thăm. Trong hều hết các trường hợp, bạn nên sử dụng giá trị mặc định của cookie và đừng thay đổi chúng nếu không đủ khả năng quản lí hay không thực sự cần thiết. Nếu bạn thực sự cần thay đổi giá trị mặc định, hãy cẩn thận vì những thiết lập không chính xác sẽ ngăn cản thành viên đăng nhập vào hệ thống.',

	'COOKIE_DOMAIN'				=> 'Tên miền cookie',
	'COOKIE_NAME'				=> 'Tên cookie',
	'COOKIE_PATH'				=> 'Đường dẫn cookie',
	'COOKIE_SECURE'				=> 'Cookie bảo mật',
	'COOKIE_SECURE_EXPLAIN'		=> 'Nếu máy chủ của bạn đang chạy SSL thì hãy bật tùy chọn này, còn nếu không thì hãy vô hiệu đi. Nếu như bạn bật tùy chọn này và máy chủ của bạn không chạy trên SSL thì kết quả là sẽ xảy ra lỗi trong suốt quá trình truy xuất đến máy chủ.',
	'ONLINE_LENGTH'				=> 'Thời gian tính thành viên trực tuyến',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Số phút mà những thành viên không còn hoạt động trong hệ thống sẽ không được hiển thị trong danh sách “Ai trực tuyến?”. Giá trị thời gian thiết lập càng lớn thì càng mất nhiều thời gian hơn để tạo ra danh sách.',
	'SESSION_LENGTH'			=> 'Thời gian phiên đăng nhập có hiệu lực',
	'SESSION_LENGTH_EXPLAIN'	=> 'Số giây mà phiên đăng nhập có hiệu lực kể từ khi được tạo mới.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể bật hay tắt những chức năng nhất định của hệ thống để giảm bớt số lượng xử lí được yêu cầu gửi đến máy chủ. Trên hều hết các máy chủ, bạn không cần thiết phải tắt bất kì chức năng nào của hệ thống tại đây. Tuy nhiên, trên một vài máy chủ nhất định hoặc các hệ thống sử dụng dịch vụ lưu trữ Web dùng chung với nhiều người khác trên cùng một máy chủ, việc tắt một vài chức năng không cần đến là rất hết sức cần thiết để giảm bớt khối lượng công việc xử lí cho máy chủ. Bạn cũng nên xác định giới hạn thời gian nạp hệ thống và số lượng phiên đăng nhập vượt quá để hệ thống tự động chuyển sang chế độ ngưng hoạt động kịp thời.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Mục thông tin cá nhân tùy biến',
	'LIMIT_LOAD'					=> 'Giới hạn thời gian nạp hệ thống',
	'LIMIT_LOAD_EXPLAIN'			=> 'Nếu trong vòng một phút hệ thống nạp trung bình vượt quá giá trị được thiết lập này thì hệ thống sẽ tự động chuyển sang chế độ ngưng hoạt động. Giá trị 1.0 gần bằng ~100% tài nguyên được sử dụng của một bộ xử lí máy chủ. Chức năng này chỉ có tác dụng trên các máy chủ UNIX và chỉ trên những máy chủ này, thời gian giới hạn được thiết lập mới có thể sử dụng được. Giá trị này sẽ xác lập lại chính nó thành <strong>0</strong> nếu hệ thống phpBB không thể nhận được giới hạn nạp.',
	'LIMIT_SESSIONS'				=> 'Giới hạn số phiên đăng nhập',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Nếu số lượng phiên đăng nhập vượt quá giá trị được thiết lập này trong quãng thời gian một phút thì hệ thống sẽ tự động chuyển sang chế độ ngưng hoạt động. Nhập số <strong>0</strong> để không hạn chế số phiên đăng nhập.',
	'LOAD_CPF_MEMBERLIST'			=> 'Hiển thị các mục thông tin cá nhân tùy biến trong danh sách thành viên',
	'LOAD_CPF_VIEWPROFILE'			=> 'Hiển thị các mục thông tin cá nhân tùy biến trong trang thông tin cá nhân',
	'LOAD_CPF_VIEWTOPIC'			=> 'Hiển thị các mục thông tin cá nhân tùy biến trong trang xem chủ đề',
	'LOAD_USER_ACTIVITY'			=> 'Hiển thị những hoạt động của thành viên',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Hiển thị những chuyên mục/chủ đề không bị khóa trong phần thông tin cá nhân của thành viên và trong phần thiết lập cá nhân. Chúng tôi khuyên bạn nên tắt tùy chọn này trên các diễn đàn có từ một triệu bài viết trở lên.',
	'RECOMPILE_STYLES'				=> 'Biên dịch lại các thành phần giao diện cũ',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kiểm tra những thành phần giao diện đã được cập nhật trong hệ thống tập tin giao diện và biên dịch lại.',
	'YES_ANON_READ_MARKING'			=> 'Bật đánh dấu chủ đề cho khách',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Tùy chọn sắp xếp thông tin trạng thái các chủ đề đã xem/chưa xem cho khách. Nếu bạn vô hiệu tùy chọn này, các bài viết sẽ luôn luôn được đánh dấu đã xem đối với khách.',
	'YES_BIRTHDAYS'					=> 'Hiển thị danh sách các thành viên có sinh nhật',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Nếu bạn vô hiệu tùy chọn này, danh sách các thành viên có ngày sinh nhật sẽ không được hiển thị nữa. Ngoài ra, để thiết lập này có tác dụng, thiết lập cho phép thông tin sinh nhật của thành viên cũng phải được bật.',
	'YES_JUMPBOX'					=> 'Hiển thị danh sách chuyên mục',
	'YES_MODERATORS'				=> 'Hiển thị danh sách điều hành viên',
	'YES_ONLINE'					=> 'Hiển thị danh sách thành viên trực tuyến',
	'YES_ONLINE_EXPLAIN'			=> 'Hiển thị thông tin các thành viên trực tuyến trên trang chủ, phần xem chuyên mục và phần xem chủ đề.',
	'YES_ONLINE_GUESTS'				=> 'Hiển thị khách trong phần xem thông tin trực tuyến',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Cho phép hiển thị thông tin về khách trong phần xem thông tin trực tuyến.',
	'YES_ONLINE_TRACK'				=> 'Hiển thị thông tin thành viên trực tuyến',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Hiển thị thông tin thành viên trực tuyến trong trang thông tin cá nhân và trang xem chủ đề.',
	'YES_POST_MARKING'				=> 'Hiển thị những chủ đề được đánh dấu',
	'YES_POST_MARKING_EXPLAIN'		=> 'Đánh dấu cho thành viên biết vừa gửi bài trong chủ đề nào.',
	'YES_READ_MARKING'				=> 'Đánh dấu chủ đề ngay trên máy chủ',
	'YES_READ_MARKING_EXPLAIN'		=> 'Lưu trữ thông tin xem/chưa xem bài viết của thành viên trong cơ sở dữ liệu thay vì sử dụng cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Hệ thống phpBB hỗ trợ sử dụng các gói chức năng xác thực. Điều này giúp bạn lựa chọn phương pháp xác thực các thành viên khi họ đăng nhập vào hệ thống. Mặc định, có ba plugin được cung cấp kèm theo hệ thống phpBB: DB, LDAP và Apache. Không phải tất cả các phương pháp đều yêu cầu bạn phải khai báo thêm thông tin với hệ thống. Bạn chỉ cần cung cấp thêm thông tin cho hệ thống biết liên quan đến phương pháp xác thực mà mình đã chọn.',

	'AUTH_METHOD'				=> 'Chọn phương pháp xác thực',

	'APACHE_SETUP_BEFORE_USE'	=> 'Bạn phải cài đặt bộ xác thực cho Apache trước khi bạn chuyển đổi hệ thống đến phương pháp xác thực này. Cần lưu ý rằng tên tài khoản bạn sử dụng cho phương pháp xác thực này của Apache phải giống với tài khoản thành viên của bạn trong hệ thống. Việc xác thực bằng Apache chỉ có thể sử dụng được nếu <samp>mod_php</samp> (không phải phiên bản CGI) và <samp>safe_mode</samp> đã được vô hiệu trên máy chủ.',

	'LDAP_DN'						=> 'Tên LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Đây là tên định danh LDAP, xác định thông tin về thành viên, ví dụ như <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Thuộc tính địa chỉ email LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Thiết lập tên thuộc tính cho địa chỉ email của các thành viên nếu bạn đã có sẵn để thiết lập tự động địa chỉ email cho các thành viên mới. Để trống phần này cũng sẽ bỏ trống kết quả trong địa chỉ email cho các thành viên đã đăng nhập lần đầu vào hệ thống.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Việc liên kết đến máy chủ LDAP đã thất bại với tên thành viên/mật khẩu mà bạn đã xác định.',
	'LDAP_NO_EMAIL'					=> 'Thuộc tính của địa chỉ email bạn vừa xác định không tồn tại.',	
	'LDAP_NO_IDENTITY'				=> 'Không thể tìm khóa định danh đăng nhập cho <strong>%s</strong>.',
	'LDAP_PASSWORD'					=> 'Mật khẩu LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Để trống phần này để sử dụng liên kết ẩn danh. Nếu máy chủ dịch vụ không cho phép truy cập ẩn danh, bạn hãy điền vào mật khẩu cho tài khoản LDAP tương ứng ở trên. Mục này được yêu cầu cho các thư mục máy chủ đang hoạt động. <strong>CẢNH BÁO:</strong> Mật khẩu này sẽ được lưu trữ dưới dạng văn bản thuần trong cơ sở dữ liệu, vì thế nó có thể bị xem bởi bất kì ai có quyền truy cập vào cơ sở dữ liệu của bạn hoặc được phép xem trang cấu hình này.',
	'LDAP_PORT'						=> 'Cổng máy chủ LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Tùy chọn này cho phép bạn có thể xác định một cổng khác được sử dụng để kết nối đến máy chủ LDAP thay vì dùng cổng mặc định là <strong>389</strong>.',
	'LDAP_SERVER'					=> 'Địa chỉ máy chủ LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Nếu bạn chọn sử dụng LDAP thì nhập vào đây tên miền hoặc địa chỉ của máy chủ LDAP. Cách khác, bạn có thể xác định một địa chỉ URL dạng <samp>ldap://tên_miền:cổng_máy_chủ/</samp>',
	'LDAP_UID'						=> 'Khóa LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Đây là khóa tìm kiếm một định danh đăng nhập được cung cấp, ví dụ như <var>uid</var>, <var>sn</var>…',
	'LDAP_USER'						=> 'Tên tài khoản LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Để trống phần này để sử dụng liên kết ẩn danh. Nếu bạn đã điền vào mục này, hệ thống sẽ sử dụng tên khác biệt đã xác định cho các thao tác đăng nhập để tìm ra tên tài khoản chính xác, ví dụ <samp>uid=Username, ou=MyUnit, o=MyCompany, c=US</samp>. Mục này được yêu cầu cho các thư mục máy chủ đang hoạt động.',
	'LDAP_USER_FILTER'				=> 'Bộ lọc tên tài khoản LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Tùy chọn này cho phép bạn có thể giới hạn thêm những đối tượng được tìm kiếm với các bộ lọc bổ sung. Ví dụ như <samp>objectClass=posixGroup</samp> sẽ cho ra kết quả sử dụng là <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi các thiết lập về máy chủ và tên miền trong hệ thống. Hãy chắc chắn về những thông tin mà bạn nhập vào trong phần này, những lỗi xảy ra sẽ dẫn đến việc gửi thông tin qua email không còn chính xác. Khi nhập vào tên miền, bạn phải nhớ đính kèm cả giao thức <samp>http://</samp> hoặc các giao thức khác. Chỉ thay đổi số cổng máy chủ nếu bạn chắc chắn máy chủ của mình đang chạy trên cổng khác, cổng <strong>80</strong> luôn chính xác và được sử dụng trong hầu hết mọi trường hợp.',

	'ENABLE_GZIP'				=> 'Bật chế độ nén GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Những trang nội dung tạo ra sẽ được nén lại trước khi gửi đến cho người truy cập. Tùy chọn này có thể giảm bớt băng thông cho website của bạn nhưng đồng thời lại tăng thêm hiệu suất hoạt động của cả bộ xử lí máy chủ lẫn trên máy tính cá nhân người truy cập.',
	'FORCE_SERVER_VARS'			=> 'Yêu cầu thiết lập máy chủ',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Nếu bật tùy chọn này, những thiết lập máy chủ đã được xác định trong phần này sẽ được sử dụng như những giá trị đã được thiết lập tự động.',
	'ICONS_PATH'				=> 'Thư mục biểu tượng bài viết',
	'ICONS_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa biểu tượng bài viết trong hệ thống, ví dụ như <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Thiết lập đường dẫn đến thư mục',
	'RANKS_PATH'				=> 'Thư mục hình xếp hạng',
	'RANKS_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa hình xếp hạng trong hệ thống, ví dụ như <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Đường dẫn hệ thống',
	'SCRIPT_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục mà hệ thống phpBB được định vị đối với tên miền, ví dụ như <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Tên miền',
	'SERVER_NAME_EXPLAIN'		=> 'Tên miền mà máy chủ đang sử dụng, ví dụ như <samp>www.example.com</samp>.',
	'SERVER_PORT'				=> 'Cổng máy chủ',
	'SERVER_PORT_EXPLAIN'		=> 'Cổng mà máy chủ của bạn đang sử dụng, thông thường là <strong>80</strong>, bạn chỉ nên thay đổi nếu chắc chắn máy chủ của mình đang chạy trên cổng khác.',
	'SERVER_PROTOCOL'			=> 'Giao thức máy chủ',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Giao thức của máy chủ được sử dụng nếu những thiết lập máy chủ này được yêu cầu bên trên. Nếu bạn để trống hoặc không yêu cầu thì giao thức sẽ được xác định bằng thiết lập cookie bảo mật, ví dụ như <samp>http://</samp> hay <samp>https://</samp>.',
	'SERVER_URL_SETTINGS'		=> 'Thiết lập địa chỉ URL cho máy chủ',
	'SMILIES_PATH'				=> 'Thư mục biểu tượng vui',
	'SMILIES_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa biểu tượng vui trong hệ thống, ví dụ như <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Thư mục biểu tượng tập tin',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa biểu tượng tập tin trong hệ thống, ví dụ như <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập liên quan đến phiên đăng nhập và việc đăng nhập trong hệ thống.',

	'ALL'							=> 'Tất cả',
	'ALLOW_AUTOLOGIN'				=> 'Cho phép đăng nhập tự động',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Tùy chọn cho phép thành viên có thể đăng nhập tự động vào hệ thống khi họ ghé thăm.',
	'AUTOLOGIN_LENGTH'				=> 'Số ngày hết hạn khóa đăng nhập tự động',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Số ngày kể từ lần ghé thăm trước của thành viên, khóa đăng nhập tự động sẽ hết hạn. Nhập số <strong>0</strong> để vô hiệu chức năng này.',
	'BROWSER_VALID'					=> 'Kiểm tra trình duyệt',
	'BROWSER_VALID_EXPLAIN'			=> 'Bật chế độ kiểm tra trình duyệt cho mỗi phiên đăng nhập để tăng cường khả năng bảo mật.',
	'CHECK_DNSBL'					=> 'Kiểm tra lại địa chỉ IP với danh sách các địa chỉ DNS đen',
	'CHECK_DNSBL_EXPLAIN'			=> 'Nếu bạn bật chức năng này, địa chỉ IP sẽ được tiến hành kiểm tra lại với danh sách từ các dịch vụ DNSBL sau đây trong quá trình đăng ký và gửi bài: <a href="http://spamcop.net">spamcop.net</a> và <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Việc tra cứu các danh sách này có thể mất nhiều thời gian, tùy thuộc vào cấu hình máy chủ của bạn. Nếu việc kiểm tra làm chậm lại hệ thống hoặc có quá nhiều kết quả sai được báo cáo, chúng tôi khuyên bạn nên vô hiệu chức năng này.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kiểm tra tên miền của email theo bản ghi tên miền MX hợp lệ',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Nếu bạn bật chức năng này, tên miền của các địa chỉ email được cung cấp trong quá trình đăng ký và thay đổi thông tin cá nhân sẽ được kiểm tra để đảm bảo đây là bản ghi tên miền MX hợp lệ.',
	'FORCE_PASS_CHANGE'				=> 'Số ngày yêu cầu thay đổi mật khẩu',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Yêu cầu thành viên phải thay đổi mật khẩu của họ sau khi hết số ngày được thiết lập. Nhập số <strong>0</strong> để vô hiệu thiết lập này.',
	'FORM_TIME_MAX'					=> 'Thời gian tối đa để gửi các mẫu dữ liệu',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Thời gian tối đa cho phép mà thành viên có thể gửi các mẫu dữ liệu vào hệ thống. Nhập số <strong>-1</strong> để vô hiệu thiết lập này. Lưu ý rằng một mẫu dữ liệu cũng có thể trở nên không hợp lệ nếu phiên đăng nhập đó đã hết hiệu lực, không phải do thiết lập này.',
	'FORM_SID_GUESTS'				=> 'Kết nối mẫu dữ liệu đến phiên đăng nhập của khách',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Nếu bạn bật tùy chọn này, mẫu dữ liệu sẵn có dành cho khách sẽ được loại trừ không sử dụng đến phiên đăng nhập. Điều này có thể tạo ra những rắc rối với một vài nhà cung cấp dịch vụ truy cập Internet.',
	'FORWARDED_FOR_VALID'			=> 'Kiểm tra khai báo <var>X_FORWARDED_FOR</var> hợp lệ',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Những phiên đăng nhập này sẽ chỉ được tiếp tục nếu khai báo <var>X_FORWARDED_FOR</var> gửi đi bằng với một phiên đăng nhập đã gửi trong yêu cầu trước đó. Những thiết lập cấm cũng sẽ được kiểm tra lại các địa chỉ IP trong <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Kiểm tra địa chỉ IP ',
	'IP_VALID_EXPLAIN'				=> 'Tùy chọn xác định số lượng địa chỉ IP được sử dụng để kiểm tra phiên đăng nhập của thành viên. Chọn <samp>Tất cả</samp> sẽ so sánh toàn bộ địa chỉ IP: <samp>A.B.C</samp> thay cho x.x.x, <samp>A.B</samp> thay cho x.x. Chọn <samp>Không có</samp> để tắt chức năng kiểm tra này. Với những địa chỉ IP dùng IPv6, <samp>A.B.C</samp> sẽ so sánh 4 khối đầu tiên và <samp>A.B</samp> là 3 khối đầu tiên.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Số lần đăng nhập tối đa cho phép',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Số lần tối đa cho phép thành viên cố gắng đăng nhập vào hệ thống khi đăng nhập thất bại nhiều lần. Sau khi đăng nhập thất bại vượt quá số lần được thiết lập này, thành viên phải nhập thêm vào mã xác nhận khi đăng nhập.',
	'NO_IP_VALIDATION'				=> 'Không',
	'NO_REF_VALIDATION'				=> 'Không',
	'PASSWORD_TYPE'					=> 'Độ phức tạp của mật khẩu',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Tùy chọn xác định mức độ phức tạp yêu cầu đối với mật khẩu của thành viên khi được tạo hay thay đổi, những tùy chọn sau bao gồm cả những tùy chọn trước.',
	'PASS_TYPE_ALPHA'				=> 'Phải sử dụng chữ số và chữ cái',
	'PASS_TYPE_ANY'					=> 'Không yêu cầu',
	'PASS_TYPE_CASE'				=> 'Phải sử dụng hỗn hợp',
	'PASS_TYPE_SYMBOL'				=> 'Phải sử dụng ký hiệu',
	'REF_HOST'						=> 'Chỉ kiểm tra máy chủ',
	'REF_PATH'						=> 'Kiểm tra luôn đường dẫn',
	'REFERER_VALID'					=> 'Kiểm tra tham chiếu',
	'REFERER_VALID_EXPLAIN'			=> 'Nếu bật tùy chọn này, tham chiếu của các yêu cầu <var>POST</var> sẽ được kiểm tra lại những thiết lập về máy chủ/đường dẫn. Thiết lập này có thể gây ra rắc rối cho những hệ thống đang sử dụng nhiều tên miền khác nhau hay các phương pháp xác thực bổ sung.',
	'TPL_ALLOW_PHP'					=> 'Cho phép sử dụng mã PHP trong các tập tin khuôn mẫu',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Nếu bật tùy chọn này, các lệnh <code>PHP</code> và <code>INCLUDEPHP</code> sẽ có thể được sử dụng và biên dịch trong các tập tin khuôn mẫu.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Những thiết lập này được sử dụng khi hệ thống gửi email đến các thành viên khác. Hãy chắc chắn địa chỉ email liên hệ mà bạn nhập vào là hợp lệ, bất kì thư rác hay email không gửi được nào có khả năng sẽ được gửi đến địa chỉ này. Nếu máy chủ của bạn không hỗ trợ gửi email thông qua PHP, bạn có thể thay thế bằng cách gửi email trực tiếp thông qua máy chủ SMTP. Điều này yêu cầu bạn phải cung cấp một địa chỉ máy chủ SMTP chính xác cho hệ thống biết. Bạn có thể hỏi nhà cung cấp dịch vụ lưu trữ Web của bạn nếu cần thiết và đừng xác định những máy chủ đã quá lạc hậu! Nếu máy chủ SMTP yêu cầu phải xác thực và chỉ khi thực sự được yêu cầu, bạn hãy cung cấp cho hệ thống biết tên tài khoản, mật khẩu đăng nhập và phương pháp xác thực của máy chủ SMTP.',

	'ADMIN_EMAIL'					=> 'Địa chỉ email gửi đi',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Địa chỉ email này được sử dụng làm địa chỉ email của người gửi trên tất cả các email được gửi đi và địa chỉ email hỗ trợ kỹ thuật. Nó sẽ luôn luôn được sử dụng trong phần <samp>Địa chỉ quay về</samp> và <samp>Địa chỉ người gửi</samp> trong các email.',
	'BOARD_EMAIL_FORM'				=> 'Cho phép thành viên gửi email từ hệ thống',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Thay cho việc hiển thị địa chỉ email của thành viên, tùy chọn này cho phép các thành viên có thể gửi email cho nhau thông qua hệ thống.',
	'BOARD_HIDE_EMAILS'				=> 'Ẩn địa chỉ email',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Tùy chọn ẩn toàn bộ địa chỉ email cá nhân trong hệ thống.',
	'CONTACT_EMAIL'					=> 'Địa chỉ email liên hệ',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Địa chỉ email này được sử dụng khi có việc cần liên hệ, ví dụ như vấn đề thư rác, có lỗi xảy ra… Nó sẽ luôn luôn được sử dụng trong phần thông tin <samp>Gửi từ</samp> và <samp>Trả lời đến địa chỉ</samp> của các email.',
	'EMAIL_FUNCTION_NAME'			=> 'Tên hàm dùng để gửi email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Hàm chức năng PHP bạn muốn sử dụng để gửi email.',
	'EMAIL_PACKAGE_SIZE'			=> 'Số lượng email trong mỗi gói email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Số lượng email tối đa được gửi đi trong một gói email. Thiết lập này được áp dụng cho những email chờ được gửi đi bên trong máy chủ. Nhập số <strong>0</strong> trong phần này nếu bạn gặp phải bất kì rắc rối nào về những email không gửi đi được.',
	'EMAIL_SIG'						=> 'Chữ ký email',
	'EMAIL_SIG_EXPLAIN'				=> 'Chữ ký được đính kèm trong tất cả các email được gửi đi từ hệ thống.',
	'ENABLE_EMAIL'					=> 'Bật chức năng gửi email trong hệ thống',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Nếu tắt tùy chọn này, sẽ không có email nào được gửi đi từ diễn đàn.',
	'SMTP_AUTH_METHOD'				=> 'Chọn phương pháp xác thực cho SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Chỉ sử dụng nếu tên đăng nhập/mật khẩu xác thực đã được thiết lập. Hãy yêu cầu nhà cung cấp dịch vụ lưu trữ Web của bạn nếu bạn không chắc chắn phải chọn phương pháp nào.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Mật khẩu đăng nhập SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Chỉ nhập vào mật khẩu đăng nhập nếu máy chủ SMTP của bạn yêu cầu.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Cổng máy chủ SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Chỉ thay đổi cổng máy chủ SMTP nếu bạn chắc chắn máy chủ SMTP của mình đang chạy trên cổng khác.',
	'SMTP_SERVER'					=> 'Địa chỉ máy chủ SMTP',
	'SMTP_SETTINGS'					=> 'Thiết lập SMTP',
	'SMTP_USERNAME'					=> 'Tên đăng nhập SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Chỉ nhập vào tên đăng nhập nếu máy chủ SMTP của bạn yêu cầu.',
	'USE_SMTP'						=> 'Sử dụng máy chủ SMTP để gửi email',
	'USE_SMTP_EXPLAIN'				=> 'Bật tùy chọn này nếu bạn muốn gửi email thông qua một tên miền thay cho hàm gửi email của PHP.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lí thiết lập và bật tùy chọn sử dụng máy chủ Jabber để gửi tin nhắn nhanh và thông báo của hệ thống. Jabber là một giao thức mã nguồn mở và bất kì ai cũng có thể sử dụng miễn phí. Một vài máy chủ Jabber đính kèm cả cổng truy xuất và dịch vụ chuyển tin cho phép bạn liên hệ với các thành viên trên các hệ thống mạng khác. Không phải tất cả các máy chủ đều có dịch vụ chuyển tin và những thay đổi trong giao thức kết nối có thể ngăn cản việc gửi tin nhắn. Hãy chắc chắn rằng bạn nhập thông tin về tài khoản đã được đăng ký. Hệ thống phpBB sẽ sử dụng những thông tin mà bạn cung cấp này tại đây.',

	'JAB_ENABLE'				=> 'Sử dụng tài khoản Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Tùy chọn cho phép nhắn tin và thông báo bằng máy chủ Jabber.',
	'JAB_GTALK_NOTE'			=> 'Lưu ý rằng GTalk sẽ không hoạt động được bởi vì hàm chức năng <samp>dns_get_record</samp> không thể tìm thấy. Hàm chức năng này không có sẵn trong PHP4 và không được bổ sung trên các hệ thống Windows. Hiện tại, nó cũng không hoạt động trên các hệ thống BSD, bao gồm cả Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Số lượng tin nhắn trong gói Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Số lượng tin nhắn được gửi đi trong một gói Jabber. Nếu bạn nhập vào số <strong>0</strong>, tin nhắn sẽ được gửi đi ngay lập tức và không phải chờ đợi để được gửi.',
	'JAB_PASSWORD'				=> 'Mật khẩu đăng nhập tài khoản Jabber',
	'JAB_PORT'					=> 'Cổng máy chủ Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Để trống mục này nếu như bạn chắc chắn máy chủ này không chạy trên cổng <strong>5222</strong>.',
	'JAB_SERVER'				=> 'Địa chỉ máy chủ Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Ghé thăm %sjabber.org%s để xem danh sách các máy chủ hiện có.',
	'JAB_SETTINGS_CHANGED'		=> 'Thiết lập Jabber đã được thay đổi thành công.',
	'JAB_USE_SSL'				=> 'Sử dụng SSL để kết nối',
	'JAB_USE_SSL_EXPLAIN'		=> 'Nếu bạn bật tùy chọn này, một kết nối an toàn sẽ được cố gắng thiết lập. Cổng máy chủ Jabber sẽ được chỉnh sửa thành <strong>5223</strong> nếu cổng <strong>5222</strong> được chỉ định.',
	'JAB_USERNAME'				=> 'Tên người dùng Jabber hoặc JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Xác định một tên người dùng đã đăng ký hoặc một JID hợp lệ. Tên người dùng sẽ không được kiểm tra hợp lệ. Nếu bạn chỉ xác định một tên người dùng thì JID của bạn sẽ trở thành tên người dùng và máy chủ Jabber sẽ xác thực bạn như trên. Nếu không muốn, bạn có thể xác định một JID, ví dụ như <samp>user@jabber.org</samp>.',
));

?>