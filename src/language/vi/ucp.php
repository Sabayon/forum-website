<?php
/** 
*
* ucp [Vietnamese]
*
* @package language
* @version $Id: ucp.php 103 2009-05-07 18:00:00Z nedka $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Để tham gia vào “%1$s” (Hiểu ở đây là “chúng tôi” , “của chúng tôi” , “%1$s” , “%2$s”), bạn phải cam kết đồng ý với các điều khoản bên dưới của website. Nếu bạn không đồng ý với các điều khoản này thì đơn giản là hãy đóng trang này lại và bạn có thể không tham gia vào “%1$s”. Điều này chúng tôi không bắt buộc bạn. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn sau này, dù rằng chúng tôi khuyên bạn nên thường xuyên xem lại những điều khoản này nếu bạn tham gia vào “%1$s” lâu dài bởi vì nếu có những thay đổi trong điều khoản thành viên sau này nghĩa là bạn cũng cam kết với những phần đã được chỉnh sửa và bổ sung đó.<br />
	<br />
	Website của chúng tôi sử dụng hệ thống phpBB (Hiểu ở đây là “họ”, “của họ”, “hệ thống phpBB”, “www.phpbb.com”, “tổ chức phpBB”, “ban điều hành phpBB”) là một giải pháp về phần mềm diễn đàn mã nguồn mở được phát hành dưới bản quyền “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (Hiểu ở đây là “GPL”) và có thể tải về miễn phí tại trang chủ <a href="http://www.phpbb.com/">www.phpbb.com</a>. Hệ thống phpBB được phát triển để xây dựng các diễn đàn thảo luận trên mạng, tổ chức phpBB không liên quan gì đến những việc chúng tôi qui định bạn được phép làm và không được phép làm với nội dung lẫn tư cách chấp nhận được. Để biết thêm nhiều thông tin về phpBB, hãy ghé thăm chúng tôi tại: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Bạn cam kết không gửi bất cứ bài viết nào có nội dung lừa đảo, thô tục, thiếu văn hoá ; vu khống, khiêu khích, đe doạ người khác ; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ cho website “%1$s” hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website giống như một số nhà cung cấp dịch vụ Internet của bạn, nếu bạn vẫn cho rằng những điều này chỉ riêng chúng tôi đòi hỏi. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ. Bạn đồng ý rằng website “%1$s” có quyền gỡ bỏ, sửa, di chuyển hoặc khóa bất kì bài viết nào trong website vào bất cứ lúc nào tùy theo nhu cầu công việc. Đăng ký làm thành viên của chúng tôi, bạn cũng phải cam kết bất kì thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Trong khi những thông tin này sẽ không được cung cấp cho bất kì người thứ ba nào khác mà không được sự đồng ý của bạn, website “%1$s” cũng như tổ chức phpBB sẽ không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.
	',

	'PRIVACY_POLICY'		=> 'Qui định cá nhân này sẽ giải thích cho bạn biết mối quan hệ giữa website “%1$s” (Hiểu ở đây là “chúng tôi”, “của chúng tôi”, “%1$s”, “%2$s”) và hệ thống phpBB (Hiểu ở đây là “họ”, “của họ”, “hệ thống phpBB”, “www.phpbb.com”, “tổ chức phpBB”, “ban điều hành phpBB”) trong việc sử dụng những thông tin thu thập được trong suốt phiên đăng nhập sử dụng của bạn vào website (Hiểu ở đây là “bạn”, “của bạn”, “thông tin của bạn”).<br />
	<br />
	Thông tin của bạn được thu thập qua hai bước. Đầu tiên, bạn truy cập vào website “%1$s” có sử dụng hệ thống phpBB và tạo ra các cookie. Đây là những tập tin thông tin nhỏ được tải tự động về máy tính của bạn thông qua trình duyệt bạn đang dùng và lưu trữ trong thư mục chứa các tập tin tạm của trình duyệt. Hai cookie đầu tiên được sử dụng để xác thực người dùng trong hệ thống (Hiểu ở đây là “số ID thành viên”) và định danh phiên đăng nhập của khách ghé thăm (Hiểu ở đây là “số ID phiên đăng nhập”), được chỉ định tự động cho tài khoản thành viên của bạn bởi hệ thống phpBB. Cookie thứ ba được tạo ra khi bạn xem các bài viết trong website “%1$s” và cookie này được dùng để ghi nhận những bài viết nào bạn đã xem rồi nhằm giúp bạn tiết kiệm thời gian khi tìm kiếm nội dung website.<br />
	<br />
	Chúng tôi cũng có thể tạo ra các cookie khác không phải từ hệ thống phpBB khi bạn truy cập vào website “%1$s”, mặc dù chúng đã vượt qua phạm vi của văn bản này khi đây không phải vấn đề thuộc về hệ thống phpBB. Bước thứ hai trong quá trình chúng tôi thu thập thông tin của bạn là những thông tin cá nhân bạn đã cung cấp cho chúng tôi. Những thông tin này không bị giới hạn như gửi bài viết từ tài khoản khách (Hiểu ở đây là “bài viết của khách”), đăng ký thành viên trong website “%1$s” (Hiểu ở đây là “tài khoản thành viên của bạn”) cũng như những bài viết được bạn gửi sau khi đã đăng ký thành viên của chúng tôi và đăng nhập vào hệ thống (Hiểu ở đây là “bài viết của bạn”).<br />
	<br />
	Tài khoản thành viên của bạn chỉ bao gồm tối thiểu một tên thành viên để định danh (Hiểu ở đây là “tên thành viên của bạn”), một mật khẩu cá nhân dùng để đăng nhập vào tài khoản thành viên của bạn (Hiểu ở đây là “mật khẩu của bạn”) và một địa chỉ email cá nhân hợp lệ (Hiểu ở đây là “địa chỉ email của bạn”). Thông tin của bạn chứa trong tài khoản thành viên tại website “%1$s” được bảo hộ bởi luật bảo vệ thông tin áp dụng tại quốc gia nơi đặt máy chủ cho website của chúng tôi. Bất kì thông tin nào khác ngoài tên thành viên của bạn, mật khẩu của bạn và địa chỉ email của bạn được yêu cầu phải cung cấp bởi website “%1$s” trong suốt quá trình đăng ký làm thành viên tại đây là những thông tin có tính bắt buộc hay tùy chọn tùy vào sự thiết lập của website “%1$s”. Trong tất cả trường hợp, bạn đều có quyền hiển thị hay không hiển thị những thông tin này cho mọi người biết trong phần thiết lập cá nhân của mình. Hơn nữa, trong tài khoản thành viên của mình, bạn cũng có quyền nhận hay không nhận những email được gửi đi tự động từ hệ thống phpBB.<br />
	<br />
	Mật khẩu của bạn được bảo vệ bằng phương pháp mã hoá trong cơ sở dữ liệu của hệ thống, vì thế nó rất an toàn. Tuy nhiên, chúng tôi khuyên bạn không nên dùng lại mật khẩu này trên các website khác. Mật khẩu của bạn là cách duy nhất để bạn đăng nhập vào tài khoản thành viên của mình trong website “%1$s”, vì thế hãy cất giữ nó cẩn thận và trong trường hợp nào cũng không cung cấp cho bất kì ai có quan hệ với website “%1$s”, phpBB hay bất kì người thứ ba nào khác ngoại trừ yêu cầu mật khẩu của bạn là hợp pháp. Bạn cũng đừng nên quên mật khẩu tài khoản thành viên của mình, nếu quên, bạn có thể sử dụng chức năng “Quên mật khẩu” từ hệ thống phpBB. Để thực hiện việc này, bạn cần phải cung cấp cho hệ thống biết tên thành viên và địa chỉ email đang sử dụng của mình trong tài khoản, sau đó hệ thống phpBB sẽ tạo ra cho bạn mật khẩu mới và gửi đến cho bạn để bạn vẫn có thể sử dụng được tài khoản thành viên của mình.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Tài khoản của bạn đã được kích hoạt thành công. Cám ơn bạn đã đăng ký làm thành viên.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Tài khoản của bạn đã được kích hoạt.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Tài khoản của bạn đã được kích hoạt lại thành công.',
	'ACCOUNT_ADDED'					=> 'Cám ơn bạn đã đăng ký làm thành viên, tài khoản của bạn đã được tạo. Ngay bây giờ bạn có thể đăng nhập vào hệ thống sử dụng tên thành viên và mật khẩu của mình.',
	'ACCOUNT_COPPA'					=> 'Tài khoản của bạn đã được tạo nhưng chưa được chấp nhận, hãy kiểm tra địa chỉ email mà bạn đã đùng để đăng ký thành viên để biết thêm thông tin chi tiết.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Tài khoản của bạn vừa được cập nhật. Tuy nhiên, hệ thống yêu cầu bạn phải kích hoạt lại tài khoản của mình nếu như bạn thay đổi địa chỉ email. Một khóa kích hoạt vừa được gửi đến địa chỉ email mới mà bạn đã cung cấp. Hãy vui lòng kiểm tra email của bạn để biết thêm thông tin.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Tài khoản của bạn vừa được cập nhật. Tuy nhiên, hệ thống yêu cầu tài khoản của bạn phải được kích hoạt lại bởi quản trị viên nếu như bạn thay đổi địa chỉ email. Một email vừa được gửi đến họ và bạn sẽ được thông báo khi tài khoản của bạn đã được kích hoạt lại.',
	'ACCOUNT_INACTIVE'				=> 'Tài khoản của bạn đã được tạo. Tuy nhiên, hệ thống yêu cầu bạn phải tự kích hoạt tài khoản của mình. Một khóa kích hoạt đã được gửi đến địa chỉ email mà bạn đã dùng để đăng ký thành viên. Hãy kiểm tra email của bạn để biết thêm thông tin.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Tài khoản của bạn đã được tạo. Tuy nhiên, hệ thống yêu cầu tài khoản của bạn phải được kích hoạt bởi nhóm quản trị viên. Một email đã được gửi đến người quản trị và bạn sẽ được thông báo khi tài khoản của mình được kích hoạt.',
	'ACTIVATION_EMAIL_SENT'			=> 'Email kích hoạt đã được gửi đến địa chỉ email của bạn.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Email kích hoạt đã được gửi đến địa chỉ email của các quản trị viên.',
	'ADD'							=> 'Thêm vào',
	'ADD_BCC'						=> 'Thêm vào [Đồng gửi]',
	'ADD_FOES'						=> 'Thêm kẻ thù mới',
	'ADD_FOES_EXPLAIN'				=> 'Bạn có thể nhập cùng lúc nhiều tên thành viên chọn làm kẻ thù với mỗi tên thành viên xác định trên một dòng.',
	'ADD_FOLDER'					=> 'Thêm thư mục',
	'ADD_FRIENDS'					=> 'Thêm bạn thân mới',
	'ADD_FRIENDS_EXPLAIN'			=> 'Bạn có thể nhập cùng lúc nhiều tên thành viên chọn làm bạn thân với mỗi tên thành viên xác định trên một dòng.',
	'ADD_NEW_RULE'					=> 'Thêm qui định cá nhân mới',
	'ADD_RULE'						=> 'Thêm qui định cá nhân',
	'ADD_TO'						=> 'Thêm vào [Người nhận]',
	'ADMIN_EMAIL'					=> 'Nhận những thông tin qua email từ quản trị viên',
	'AGREE'							=> 'Tôi đồng ý với những điều khoản trên',
	'ALLOW_PM'						=> 'Nhận tin nhắn từ các thành viên khác',
	'ALLOW_PM_EXPLAIN'				=> 'Lưu ý rằng các điều hành viên hay quản trị viên luôn luôn có thể gửi tin nhắn cho bạn.',
	'ALREADY_ACTIVATED'				=> 'Bạn vừa kích hoạt xong tài khoản của mình.',
	'ATTACHMENTS_EXPLAIN'			=> 'Đây là danh sách tất cả các tập tin đính kèm mà bạn đã gửi trong diễn đàn.',
	'ATTACHMENTS_DELETED'			=> 'Những tập tin đính kèm vừa chọn đã được xóa thành công.',
	'ATTACHMENT_DELETED'			=> 'Tập tin đính kèm vừa chọn đã được xóa thành công.',
	'AVATAR_CATEGORY'				=> 'Chủ đề hình đại diện',
	'AVATAR_EXPLAIN'				=> 'Kích thước tối đa cho phép: <strong>%1$d</strong> Pixel chiều rộng và <strong>%2$d</strong> Pixel chiều cao với dung lượng tập tin tối đa là <strong>%3$.2f</strong> KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Chức năng sử dụng hình đại diện hiện tại đã bị vô hiệu.',
	'AVATAR_GALLERY'				=> 'Thư viện hình đại diện',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Không thể tải lên hình đại diện đến “%s”.',
	'AVATAR_PAGE'					=> 'Trang',

	'BACK_TO_DRAFTS'			=> 'Quay lại bản nháp đã lưu',
	'BACK_TO_LOGIN'				=> 'Quay lại trang đăng nhập',
	'BIRTHDAY'					=> 'Sinh nhật',
	'BIRTHDAY_EXPLAIN'			=> 'Thiết lập ngày, tháng, năm cho sinh nhật của bạn.',
	'BOARD_DATE_FORMAT'			=> 'Định dạng ngày tháng của bạn',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Sử dụng cú pháp giống như hàm <a href="http://www.php.net/date">date()</a> trong <strong>PHP</strong>.',
	'BOARD_DST'					=> 'Bật chế độ giờ mùa hè <abbr title="Daylight Saving Time">DST</abbr>',
	'BOARD_LANGUAGE'			=> 'Ngôn ngữ',
	'BOARD_STYLE'				=> 'Giao diện',
	'BOARD_TIMEZONE'			=> 'Múi giờ',
	'BOOKMARKS'					=> 'Trang yêu thích',
	'BOOKMARKS_EXPLAIN'			=> 'Bạn có thể đánh dấu những chủ đề mình yêu thích trong trang này để dễ dàng xem lại sau này. Đánh dấu chọn vào ô kiểm trong bất cứ trang đánh dấu nào mà bạn muốn xóa rồi bấm vào nút <strong>Gỡ bỏ những trang yêu thích đã đánh dấu</strong>.',
	'BOOKMARKS_DISABLED'		=> 'Chức năng đánh dấu trang yêu thích đã bị vô hiệu trong hệ thống.',
	'BOOKMARKS_REMOVED'			=> 'Những trang yêu thích đã được gỡ bỏ thành công.',

	'CANNOT_EDIT_MESSAGE_TIME'		=> 'Bạn không còn có thể sửa hay xóa tin nhắn này.',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'Những tin nhắn không thể di chuyển đến thư mục đang chứa các tin nhắn này.',
	'CANNOT_MOVE_FROM_SPECIAL'		=> 'Những tin nhắn không thể di chuyển khỏi hộp tin chuyển đi.',
	'CANNOT_RENAME_FOLDER'			=> 'Thư mục này không thể đổi tên được.',
	'CANNOT_REMOVE_FOLDER'			=> 'Thư mục này không thể gỡ bỏ được.',
	'CHANGE_DEFAULT_GROUP'			=> 'Thay đổi nhóm mặc định',
	'CHANGE_PASSWORD'				=> 'Thay đổi mật khẩu',
	'CLICK_RETURN_FOLDER'			=> '%1$sQuay về thư mục “%3$s” của bạn%2$s',
	'CONFIRMATION'					=> 'Xác nhận đăng ký',
	'CONFIRM_CHANGES'				=> 'Xác nhận thay đổi',
	'CONFIRM_EMAIL'					=> 'Xác nhận địa chỉ email',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Bạn chỉ cần xác nhận lại địa chỉ email nếu như bạn muốn thay đổi địa chỉ email hiện tại của mình ở trên.',
	'CONFIRM_EXPLAIN'				=> 'Để ngăn chặn việc lợi dụng đăng ký tự động hàng loạt, hệ thống yêu cầu bạn phải nhập vào một đoạn mã xác nhận khi đăng ký. Mã xác nhận được hiển thị trong hình ảnh mà bạn nhìn thấy bên dưới. Nếu thị lực của bạn kém hoặc bạn không thể nhìn thấy đoạn mã này vì một lý do nào đó, hãy vui lòng liên hệ với %sngười quản trị%s.',
	'VC_REFRESH'					=> 'Nạp lại mã xác nhận',
	'VC_REFRESH_EXPLAIN'			=> 'Nếu không nhìn rõ mã xác nhận hiện tại, bạn có thể yêu cầu một mã xác nhận mới.',

	'CONFIRM_PASSWORD'			=> 'Xác nhận mật khẩu',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Bạn chỉ cần xác nhận lại mật khẩu nếu như bạn muốn thay đổi mật khẩu hiện tại của mình ở trên.',
	'COPPA_BIRTHDAY'			=> 'Để tiếp tục thủ tục đăng ký thành viên, bạn hãy vui lòng cho chúng tôi biết năm sinh của mình.',
	'COPPA_COMPLIANCE'			=> 'Thoả thuận COPPA',
	'COPPA_EXPLAIN'				=> 'Lưu ý rằng bằng việc chấp nhận thoả thuận COPPA, tài khoản của bạn sẽ được tạo. Tuy nhiên, tài khoản này sẽ không được kích hoạt cho đến khi cha mẹ hay người bảo hộ của bạn đồng ý cho bạn tham gia vào website. Bạn sẽ nhận được email thông báo về điều này với nhiều thông tin chi tiết và hướng dẫn thủ tục đăng ký COPPA.',
	'CREATE_FOLDER'				=> 'Thêm thư mục…',
	'CURRENT_IMAGE'				=> 'Hình đại diện hiện tại',
	'CURRENT_PASSWORD'			=> 'Mật khẩu hiện tại',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Bạn phải xác nhận mật khẩu hiện tại nếu bạn muốn thay đổi mật khẩu này, địa chỉ email hiện tại hay tên thành viên của mình.',
	'CUR_PASSWORD_ERROR'		=> 'Mật khẩu hiện tại bạn vừa nhập không chính xác.',
	'CUSTOM_DATEFORMAT'			=> 'Tùy chọn…',

	'DEFAULT_ACTION'			=> 'Thiết lập mặc định',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Những thiết lập này sẽ được tạo nhanh nếu như không có mục nào ở trên có thể dùng được.',
	'DEFAULT_ADD_SIG'			=> 'Luôn đính kèm chữ ký cá nhân của tôi',
	'DEFAULT_BBCODE'			=> 'Luôn bật BBCode trong bài viết',
	'DEFAULT_NOTIFY'			=> 'Luôn thông báo cho tôi khi có bài viết trả lời',
	'DEFAULT_SMILIES'			=> 'Luôn bật biểu tượng vui trong bài viết',
	'DEFINED_RULES'				=> 'Những qui định cá nhân đã xác lập',
	'DELETED_TOPIC'				=> 'Chủ đề đã được gỡ bỏ.',
	'DELETE_ATTACHMENT'			=> 'Xóa tập tin đính kèm này',
	'DELETE_ATTACHMENTS'		=> 'Xóa những tập tin đính kèm này',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa tập tin đính kèm này?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Bạn có chắc chắn muốn xóa những tập tin đính kèm này?',
	'DELETE_AVATAR'				=> 'Xóa hình đại diện hiện tại',
	'DELETE_COOKIES_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa tất cả các cookie được tạo bởi website này?',
	'DELETE_MARKED_PM'			=> 'Xóa những tin nhắn đã đánh dấu',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa những tin nhắn đã đánh dấu?',
	'DELETE_OLDEST_MESSAGES'	=> 'Xóa những tin nhắn cũ',
	'DELETE_MESSAGE'			=> 'Xóa tin nhắn',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa tin nhắn này?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Xóa tất cả tin nhắn trong thư mục gỡ bỏ',
	'DELETE_RULE'				=> 'Xóa qui định cá nhân',
	'DELETE_RULE_CONFIRM'		=> 'Bạn có chắc chắn muốn xóa qui định cá nhân này?',
	'DEMOTE_SELECTED'			=> 'Giáng chức trưởng nhóm đã chọn',
	'DISABLE_CENSORS'			=> 'Sử dụng chế độ kiểm duyệt từ',
	'DISPLAY_GALLERY'			=> 'Xem thư viện',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Tên miền của địa chỉ email mà bạn vừa nhập không phải là một bản ghi tên miền MX hợp lệ.',
	'DOWNLOADS'					=> 'Số lần tải về',
	'DRAFTS_DELETED'			=> 'Tất cả bản nháp vừa chọn đã được xóa thành công.',
	'DRAFTS_EXPLAIN'			=> 'Với bảng điều khiển này, bạn có thể xem, sửa và xóa những bản nháp đã lưu của mình.',
	'DRAFT_UPDATED'				=> 'Bản nháp đã được cập nhật thành công.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Sử dụng bảng điều khiển này, bạn có thể sửa những bản nháp đã lưu của mình. Những bản nháp sẽ không chứa bất kì thông tin nào về các tập tin đính kèm hay bình chọn.',
	'EMAIL_BANNED_EMAIL'		=> 'Địa chỉ email bạn vừa nhập không được phép sử dụng.',
	'EMAIL_INVALID_EMAIL'		=> 'Địa chỉ email bạn vừa nhập không hợp lệ.',
	'EMAIL_REMIND'				=> 'Bạn phải khai báo địa chỉ email đang sử dụng cho tài khoản của mình. Nếu bạn không thay đổi địa chỉ này thông qua bảng điều khiển thành viên của mình, địa chỉ này sẽ được lấy từ địa chỉ email mà bạn đã đăng ký thành viên.',
	'EMAIL_TAKEN_EMAIL'			=> 'Địa chỉ email bạn vừa nhập đã được sử dụng bởi một thành viên khác.',
	'EMPTY_DRAFT'				=> 'Bạn phải nhập nội dung cho bản nháp của mình.',
	'EMPTY_DRAFT_TITLE'			=> 'Bạn phải nhập tiêu đề cho bản nháp của mình.',
	'EXPORT_AS_XML'				=> 'Định dạng XML',
	'EXPORT_AS_CSV'				=> 'Định dạng CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Định dạng CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Định dạng CSV TXT',
	'EXPORT_AS_MSG'				=> 'Định dạng CSV MSG',
	'EXPORT_FOLDER'				=> 'Xuất thư mục đang xem',

	'FIELD_REQUIRED'					=> 'Mục thông tin “%s” không được để trống.',
	'FIELD_TOO_SHORT'					=> 'Mục thông tin “%1$s” có nội dung quá ngắn, tối thiểu phải có ít nhất là <strong>%2$d</strong> ký tự.',
	'FIELD_TOO_LONG'					=> 'Mục thông tin “%1$s” có nội dung quá dài, tối đa chỉ có <strong>%2$d</strong> ký tự được phép sử dụng.',
	'FIELD_TOO_SMALL'					=> 'Giá trị “%1$s” quá nhỏ, giá trị tối thiểu bắt buộc sử dụng là <strong>%2$d</strong>.',
	'FIELD_TOO_LARGE'					=> 'Giá trị “%1$s” quá lớn, giá trị tối đa được phép sử dụng là <strong>%2$d</strong>.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Mục thông tin “%s” có nội dung chứa những ký tự không hợp lệ, bạn chỉ được phép nhập vào chữ số.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Mục thông tin “%s” có nội dung chứa những ký tự không hợp lệ, bạn chỉ được phép nhập vào chữ cái và chữ số.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Mục thông tin “%s” có nội dung chứa những ký tự không hợp lệ, bạn chỉ được phép nhập vào chữ cái và chữ số, khoảng trắng hay những ký tự <strong>-+_[]</strong>.',
	'FIELD_INVALID_DATE'				=> 'Mục thông tin “%s” có nội dung chứa ngày tháng không hợp lệ.',

	'FOE_MESSAGE'				=> 'Tin nhắn từ kẻ thù',
	'FOES_EXPLAIN'				=> 'Kẻ thù là những thành viên đã được bạn thiết lập mặc định không quan hệ. Các bài viết được gửi bởi những thành viên này sẽ không được hiển thị khi bạn xem. Các tin nhắn từ kẻ thù vẫn được phép gửi đến bạn. Lưu ý rằng bạn không thể chọn kẻ thù của mình là các điều hành viên hay quản trị viên trong website.',
	'FOES_UPDATED'				=> 'Danh sách những kẻ thù của bạn đã được cập nhật thành công.',
	'FOLDER_ADDED'				=> 'Thư mục đã được tạo thành công.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d trong số %2$d tin nhắn được lưu trữ',
	'FOLDER_NAME_EXIST'			=> 'Thư mục mang tên “%s” đã có rồi.',
	'FOLDER_OPTIONS'			=> 'Tùy chọn thư mục',
	'FOLDER_RENAMED'			=> 'Thư mục đã được đổi tên thành công.',
	'FOLDER_REMOVED'			=> 'Thư mục đã được gỡ bỏ thành công.',
	'FOLDER_STATUS_MSG'			=> 'Dung lượng thư mục: <strong>%1$d%%</strong> (%2$d trong số %3$d tin nhắn được lưu trữ)',
	'FORWARD_PM'				=> 'Chuyển tiếp tin nhắn',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Trước khi bạn có thể tiếp tục truy cập website, bạn được yêu cầu phải thay đổi mật khẩu hiện tại của mình.',
	'FRIEND_MESSAGE'			=> 'Tin nhắn từ bạn thân',
	'FRIENDS'					=> 'Bạn thân',
	'FRIENDS_EXPLAIN'			=> 'Bạn thân là những thành viên đã được bạn thiết lập mặc định để có thể nhanh chóng liên lạc với họ hoặc liên lạc thường xuyên. Nếu giao diện bạn đang sử dụng trong hệ thống có hỗ trợ, bất kì bài viết nào được gửi bạn thân của bạn đều được đánh dấu nổi bật.',
	'FRIENDS_OFFLINE'			=> 'Bạn thân ngoại tuyến',
	'FRIENDS_ONLINE'			=> 'Bạn thân trực tuyến',
	'FRIENDS_UPDATED'			=> 'Danh sách bạn thân của bạn đã được cập nhật thành công.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Thiết lập thao tác xử lí mặc định khi thư mục đầy đã được cập nhật thành công.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Nội dung gốc --------',
	'FWD_SUBJECT'				=> 'Tiêu đề: %s',
	'FWD_DATE'					=> 'Ngày gửi: %s',
	'FWD_FROM'					=> 'Người gửi: %s',
	'FWD_TO'					=> 'Người nhận: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Thông báo chung',

	'HIDE_ONLINE'				=> 'Luôn ẩn trạng thái trực tuyến của tôi',
	'HIDE_ONLINE_EXPLAIN'		=> 'Thay đổi thiết lập này sẽ không có hiệu lực cho đến lần ghé thăm kế tiếp của bạn.',
	'HOLD_NEW_MESSAGES'			=> 'Không nhận thêm những tin nhắn mới (Những tin nhắn mới sẽ quay lại khi nào dung lượng đủ cho phép)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Những tin nhắn mới sẽ quay lại',

	'IF_FOLDER_FULL'			=> 'Nếu thư mục này vượt quá dung lượng cho phép',
	'IMPORTANT_NEWS'			=> 'Những thông báo quan trọng',
	'INVALID_USER_BIRTHDAY'		=> 'Ngày sinh bạn vừa nhập không hợp lệ.',
	'INVALID_CHARS_USERNAME'	=> 'Tên thành viên bạn vừa nhập có những ký tự không được phép sử dụng.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Mật khẩu bạn vừa nhập không có những ký tự được yêu cầu phải sử dụng.',
	'ITEMS_REQUIRED'			=> 'Những mục đánh dấu * là những mục thông tin cá nhân bắt buộc và bạn bạn phải điền đầy đủ thông tin trong những mục này.',

	'JOIN_SELECTED'				=> 'Tham gia vào nhóm đã chọn',

	'LANGUAGE'					=> 'Ngôn ngữ',
	'LINK_REMOTE_AVATAR'		=> 'Hình đại diện liên kết từ website khác',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Nhập vào địa chỉ URL của hình đại diện mà bạn muốn liên kết đến.',
	'LINK_REMOTE_SIZE'			=> 'Kích thước hình đại diện',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Xác định chiều rộng và chiều cao của hình đại diện mà bạn muốn hiển thị, để trống nếu bạn muốn hiển thị hình đại diện của mình theo đúng kích thước thực hiện tại.',
	'LOGIN_EXPLAIN_UCP'			=> 'Vui lòng đăng nhập nếu bạn muốn truy cập vào phần thiết lập cá nhân.',
	'LOGIN_REDIRECT'			=> 'Bạn đã đăng nhập thành công vào hệ thống.',
	'LOGOUT_FAILED'				=> 'Bạn chưa thoát khỏi hệ thống được bởi vì yêu cầu vừa rồi của bạn không phù hợp với phiên đăng nhập của mình. Hãy vui lòng liên hệ với quản trị viên nếu bạn vẫn tiếp tục gặp phải rắc rối này.',
	'LOGOUT_REDIRECT'			=> 'Bạn đã thoát khỏi hệ thống thành công.',

	'MARK_IMPORTANT'				=> 'Đánh dấu/Gỡ bỏ đánh dấu quan trọng',
	'MARKED_MESSAGE'				=> 'Tin nhắn đã đánh dấu',
	'MAX_FOLDER_REACHED'			=> 'Số thư mục tối đa mà thành viên được phép tạo riêng.',
	'MESSAGE_BY_AUTHOR'				=> 'bởi',
	'MESSAGE_COLOURS'				=> 'Màu tin nhắn',
	'MESSAGE_DELETED'				=> 'Tin nhắn đã được xóa thành công.',
	'MESSAGE_HISTORY'				=> 'Quá trình nhắn tin',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Tin nhắn này đã được gỡ bỏ bởi chính người gửi của nó trước khi chuyển đến người nhận.',
	'MESSAGE_SENT_ON'				=> 'vào lúc',
	'MESSAGE_STORED'				=> 'Tin nhắn này đã được gửi thành công.',
	'MESSAGE_TO'					=> 'Người nhận',
	'MESSAGES_DELETED'				=> 'Tin nhắn đã được xóa thành công.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Di chuyển những tin nhắn từ thư mục đã gỡ bỏ đến',
	'MOVE_DOWN'						=> 'Di chuyển xuống',
	'MOVE_MARKED_TO_FOLDER'			=> 'Di chuyển tin nhắn đã đánh dấu đến “%s”',
	'MOVE_PM_ERROR'					=> 'Có một lỗi xảy ra trong khi di chuyển những tin nhắn đến thư mục mới, chỉ có <strong>%1d</strong> từ <strong>%2d</strong> tin nhắn đã được di chuyển.',
	'MOVE_TO_FOLDER'				=> 'Di chuyển đến thư mục',
	'MOVE_UP'						=> 'Di chuyển lên',

	'NEW_EMAIL_ERROR'				=> 'Địa chỉ email bạn vừa nhập không phù hợp.',
	'NEW_FOLDER_NAME'				=> 'Tên thư mục mới',
	'NEW_PASSWORD'					=> 'Mật khẩu mới',
	'NEW_PASSWORD_ERROR'			=> 'Mật khẩu bạn vừa nhập không phù hợp.',
	'NOTIFY_METHOD'					=> 'Phương pháp thông báo',
	'NOTIFY_METHOD_BOTH'			=> 'Cả hai',
	'NOTIFY_METHOD_EMAIL'			=> 'Chỉ gửi email',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Chọn phương pháp gửi tin nhắn từ hệ thống.',
	'NOTIFY_METHOD_IM'				=> 'Chỉ dùng tài khoản Jabber',
	'NOTIFY_ON_PM'					=> 'Thông báo cho tôi khi có tin nhắn mới',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Bạn không thể thêm các thành viên ẩn danh vào danh sách bạn thân của mình.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Bạn không thể thêm những thành viên đang có trong danh sách kẻ thù vào danh sách bạn thân của mình.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Bạn không thể thêm chính mình vào danh sách bạn thân.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Bạn không thể thêm các quản trị viên và điều hành viên vào danh sách kẻ thù của mình.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Bạn không thể thêm các thành viên ẩn danh vào danh sách kẻ thù của mình.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Bạn không thể thêm những thành viên đang có trong danh sách bạn thân vào danh sách kẻ thù của mình.',
	'NOT_ADDED_FOES_SELF'			=> 'Bạn không thể thêm chính mình vào danh sách kẻ thù.',
	'NOT_AGREE'						=> 'Tôi không đồng ý với những điều khoản trên',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Dung lượng thư mục bạn chọn <strong>%s</strong> dường như đã bị đầy. Yêu cầu vừa rồi bị từ chối.',
	'NOT_MOVED_MESSAGE'				=> 'Bạn chỉ có <strong>1</strong> tin nhắn hiện tại được giữ lại bởi vì dung lượng thư mục đã bị đầy.',
	'NOT_MOVED_MESSAGES'			=> 'Bạn có <strong>%d</strong> tin nhắn hiện tại được giữ lại bởi vì dung lượng thư mục đã bị đầy.',
	'NO_ACTION_MODE'				=> 'Không có yêu cầu tin nhắn nào được xác định',
	'NO_AUTHOR'						=> 'Không xác định được người gửi tin nhắn này',
	'NO_AVATAR_CATEGORY'			=> 'Không có hình đại diện nào',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Bạn không được phép xóa tin nhắn.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Bạn không được phép sửa tin nhắn.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Bạn không được phép chuyển tiếp tin nhắn.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Bạn không được phép gửi tin nhắn đến nhóm thành viên.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Bạn không được phép yêu cầu mật khẩu mới.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Bạn không được phép xem những tin nhắn đang treo.',
	'NO_AUTH_READ_MESSAGE'			=> 'Bạn không được phép xem tin nhắn.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Bạn không thể xem được tin nhắn này bởi vì nó đã được gỡ bỏ bởi chính thành viên đã gửi.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Bạn không được phép gửi tin nhắn.',
	'NO_AUTH_SIGNATURE'				=> 'Bạn không được phép xác định chữ ký cá nhân.',

	'NO_BCC_RECIPIENT'			=> 'Không có',
	'NO_BOOKMARKS'				=> 'Bạn không có trang yêu thích nào.',
	'NO_BOOKMARKS_SELECTED'		=> 'Bạn chưa chọn bất kì trang yêu thích nào.',
	'NO_EDIT_READ_MESSAGE'		=> 'Bạn không thể sửa tin nhắn bởi vì nó đã được người nhận xem rồi.',
	'NO_EMAIL_USER'				=> 'Không thể tìm thấy địa chỉ email/tên thành viên mà bạn vừa nhập.',
	'NO_FOES'					=> 'Không có kẻ thù nào được xác định',
	'NO_FRIENDS'				=> 'Không có bạn thân nào được xác định',
	'NO_FRIENDS_OFFLINE'		=> 'Không có bạn thân nào đã ngoại truyến',
	'NO_FRIENDS_ONLINE'			=> 'Không có bạn thân nào trực tuyến',
	'NO_GROUP_SELECTED'			=> 'Không có nhóm nào được xác định.',
	'NO_IMPORTANT_NEWS'			=> 'Không có thông báo quan trọng nào hiện tại.',
	'NO_MESSAGE'				=> 'Không thể tìm thấy tin nhắn.',
	'NO_NEW_FOLDER_NAME'		=> 'Bạn phải xác định tên thư mục mới.',
	'NO_NEWER_PM'				=> 'Không có tin nhắn nào mới hơn.',
	'NO_OLDER_PM'				=> 'Không có tin nhắn nào cũ hơn.',
	'NO_PASSWORD_SUPPLIED'		=> 'Bạn không thể đăng nhập mà không có một mật khẩu.',
	'NO_RECIPIENT'				=> 'Không có người nhận nào được xác định.',
	'NO_RULES_DEFINED'			=> 'Không có qui định cá nhân nào được xác định.',
	'NO_SAVED_DRAFTS'			=> 'Không có bản nháp nào được lưu.',
	'NO_TO_RECIPIENT'			=> 'Không có',	
	'NO_WATCHED_FORUMS'			=> 'Bạn không chọn theo dõi bất cứ chuyên mục nào.',
	'NO_WATCHED_SELECTED'		=> 'Bạn chưa chọn bất kì chuyên mục hay chủ đề nào đang theo dõi.',
	'NO_WATCHED_TOPICS'			=> 'Bạn không chọn theo dõi bất cứ chủ đề nào.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Mật khẩu của bạn phải nhiều hơn <strong>%1$d</strong> ký tự, không được vượt quá <strong>%2$d</strong> ký tự, không có trường hợp nhạy cảm giữa chữ với số và phải có các số.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Mật khẩu của bạn phải nhiều hơn <strong>%1$d</strong> ký tự và không được vượt quá <strong>%2$d</strong> ký tự.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Mật khẩu của bạn phải nhiều hơn <strong>%1$d</strong> ký tự, không được vượt quá <strong>%2$d</strong> ký tự và phải sử dụng hỗn hợp các ký tự.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Mật khẩu của bạn phải nhiều hơn <strong>%1$d</strong> ký tự, không được vượt quá <strong>%2$d</strong> ký tự, không có trường hợp nhạy cảm giữa chữ với số, phải có các số và phải có các ký hiệu.',
	'PASSWORD'					=> 'Mật khẩu',
	'PASSWORD_ACTIVATED'		=> 'Mật khẩu mới của bạn đã được kích hoạt.',
	'PASSWORD_UPDATED'			=> 'Mật khẩu mới đã được gửi đến địa chỉ email mà bạn đã dùng để đăng ký.',
	'PERMISSIONS_RESTORED'		=> 'Đã phục hồi lại thành công cấp phép ban đầu.',
	'PERMISSIONS_TRANSFERRED'	=> 'Đã chuyển thành công cấp phép từ <strong>%s</strong>, bây giờ bạn có thể truy cập chuyên mục này với cấp phép thành viên đã chuyển đến.<br />Lưu ý rằng những cấp phép dành cho quản trị viên sẽ không được chuyển đến. Bạn có thể trả lại những thiết lập cấp phép của mình bất cứ lúc nào.',
	'PM_DISABLED'				=> 'Chức năng gửi tin nhắn đã bị vô hiệu trong hệ thống.',
	'PM_FROM'					=> 'Người gửi',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Tin nhắn này được gửi bởi một thành viên đã bị xóa khỏi hệ thống.',
	'PM_ICON'					=> 'Biểu tượng tin nhắn',
	'PM_INBOX'					=> 'Hộp tin nhận',
	'PM_NO_USERS'				=> 'Thành viên bạn vừa yêu cầu thêm vào không tồn tại.',
	'PM_OUTBOX'					=> 'Hộp tin chuyển đi',
	'PM_SENTBOX'				=> 'Hộp tin đã gửi',
	'PM_SUBJECT'				=> 'Tiêu đề tin nhắn',
	'PM_TO'						=> 'Người nhận',
	'PM_USERS_REMOVED_NO_PM'	=> 'Bạn không thể thêm vào một vài thành viên bởi vì họ đã vô hiệu chức năng nhận tin nhắn của mình.',
	'POPUP_ON_PM'				=> 'Mở cửa sổ thông báo khi có tin nhắn mới',
	'POST_EDIT_PM'				=> 'Sửa tin nhắn',
	'POST_FORWARD_PM'			=> 'Chuyển tiếp tin nhắn',
	'POST_NEW_PM'				=> 'Soạn tin nhắn',
	'POST_PM_LOCKED'			=> 'Tin nhắn bị khóa',
	'POST_PM_POST'				=> 'Trích dẫn bài viết',
	'POST_QUOTE_PM'				=> 'Trích dẫn tin nhắn',
	'POST_REPLY_PM'				=> 'Trả lời tin nhắn',
	'PRINT_PM'					=> 'Xem bản in',
	'PREFERENCES_UPDATED'		=> 'Sở thích cá nhân của bạn đã được cập nhật thành công.',
	'PROFILE_INFO_NOTICE'		=> 'Lưu ý rằng những thông tin này mọi thành viên khác đều có thể xem được. Hãy cẩn thận khi bạn cung cấp những thông tin cá nhân trên đây. Những mục thông tin có đánh dấu * bắt buộc phải khai báo.',
	'PROFILE_UPDATED'			=> 'Thông tin cá nhân của bạn đã được cập nhật.',

	'RECIPIENT'							=> 'Người nhận',
	'RECIPIENTS'						=> 'Những người nhận',
	'REGISTRATION'						=> 'Đăng ký thành viên',
	'RELEASE_MESSAGES'					=> '%sPhát hành các tin nhắn được giữ lại%s… Những tin nhắn này sẽ được sắp xếp lại trong thư mục thích hợp nếu thư mục còn đủ dung lượng.',
	'REMOVE_ADDRESS'					=> 'Gỡ bỏ địa chỉ',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Gỡ bỏ những trang yêu thích đã chọn',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Bạn có chắc chắn muốn xóa những trang yêu thích đã chọn?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Gỡ bỏ những trang yêu thích đã đánh dấu',
	'REMOVE_FOLDER'						=> 'Gỡ bỏ thư mục',
	'REMOVE_FOLDER_CONFIRM'				=> 'Bạn có chắc chắn muốn gỡ bỏ thư mục này?',
	'RENAME'							=> 'Đổi tên',
	'RENAME_FOLDER'						=> 'Đổi tên thư mục',
	'REPLIED_MESSAGE'					=> 'Tin nhắn đã trả lời',
	'RESIGN_SELECTED'					=> 'Không tham gia nữa vào nhóm đã chọn',
	'RETURN_FOLDER'						=> '%1$sQuay về thư mục trước%2$s',
	'RETURN_UCP'						=> '%sQuay về bảng thiết lập cá nhân%s',
	'RULE_ADDED'						=> 'Qui định cá nhân đã được thêm vào thành công.',
	'RULE_ALREADY_DEFINED'				=> 'Qui định cá nhân này đã được xác định rồi.',
	'RULE_DELETED'						=> 'Qui định cá nhân đã được gỡ bỏ thành công.',
	'RULE_NOT_DEFINED'					=> 'Qui định cá nhân không được xác định chính xác.',
	'RULE_REMOVED_MESSAGE'				=> 'Một tin nhắn đã bị gỡ bỏ căn cứ theo bộ lọc tin nhắn.',
	'RULE_REMOVED_MESSAGES'				=> '%d tin nhắn đã bị gỡ bỏ căn cứ theo bộ lọc tin nhắn.',

	'SAME_PASSWORD_ERROR'	=> 'Mật khẩu mới bạn vừa nhập trùng với mật khẩu hiện tại của bạn.',
	'SEARCH_YOUR_POSTS'		=> 'Xem những bài viết của bạn',
	'SEND_PASSWORD'			=> 'Gửi mật khẩu',
	'SENT_AT'				=> 'Ngày gửi',// Used before dates in private messages
	'SHOW_EMAIL'			=> 'Cho phép các thành viên khác liên hệ với tôi qua email',
	'SIGNATURE_EXPLAIN'		=> 'Chữ ký cá nhân được đính kèm sau mỗi bài viết mà bạn gửi. Số ký tự tối đa được phép sử dụng trong chữ ký cá nhân là <strong>%d</strong> ký tự.',
	'SIGNATURE_PREVIEW'		=> 'Xem trước chữ ký cá nhân',
	'SIGNATURE_TOO_LONG'	=> 'Chữ ký cá nhân của bạn quá dài.',
	'SORT'					=> 'Sắp xếp',
	'SORT_COMMENT'			=> 'Chú thích tập tin',
	'SORT_DOWNLOADS'		=> 'Số lần tải về',
	'SORT_EXTENSION'		=> 'Loại tập tin',
	'SORT_FILENAME'			=> 'Tên tập tin',
	'SORT_POST_TIME'		=> 'Thời gian gửi bài',
	'SORT_SIZE'				=> 'Dung lượng tập tin',

	'TIMEZONE'				=> 'Múi giờ',
	'TO'					=> 'Người nhận',
	'TOO_MANY_RECIPIENTS'	=> 'Bạn đã gửi tin nhắn đến quá nhiều người nhận được phép gửi.',
	'TOO_MANY_REGISTERS'	=> 'Bạn đã vượt quá số lượng đăng ký thành viên cho phép trong phiên kết nối này. Hãy thử lại vào lúc khác!',

	'UCP'					=> 'Bảng thiết lập cá nhân',
	'UCP_ACTIVATE'			=> 'Kích hoạt tài khoản',
	'UCP_ADMIN_ACTIVATE'	=> 'Lưu ý rằng bạn cần phải nhập vào một địa chỉ email hợp lệ trước khi tài khoản của bạn được kích hoạt. Người quản trị sẽ xem qua tài khoản của bạn và nếu được chấp nhận bạn sẽ nhận được một email thông báo đến địa chỉ email mà bạn đã nhập.',
	'UCP_AIM'				=> 'Tài khoản AIM',
	'UCP_ATTACHMENTS'		=> 'Tập tin đính kèm của bạn',
	'UCP_COPPA_BEFORE'		=> 'Trước %s',
	'UCP_COPPA_ON_AFTER'	=> 'Hoặc sau %s',
	'UCP_EMAIL_ACTIVATE'	=> 'Lưu ý rằng bạn cần phải nhập vào một địa chỉ email hợp lệ trước khi tài khoản của bạn được kích hoạt. Bạn sẽ nhận được một email thông báo đến địa chỉ email mà bạn đã nhập với khóa kích hoạt được đính kèm bên trong email.',
	'UCP_ICQ'				=> 'Số tài khoản ICQ',
	'UCP_JABBER'			=> 'Tài khoản Jabber',

	'UCP_MAIN'				=> 'Tổng quan',
	'UCP_MAIN_ATTACHMENTS'	=> 'Tập tin đính kèm',
	'UCP_MAIN_BOOKMARKS'	=> 'Trang yêu thích',
	'UCP_MAIN_DRAFTS'		=> 'Bản nháp đã lưu',
	'UCP_MAIN_FRONT'		=> 'Trang trước',
	'UCP_MAIN_SUBSCRIBED'	=> 'Bảng theo dõi',

	'UCP_MSNM'				=> 'Tài khoản MSN',
	'UCP_NO_ATTACHMENTS'	=> 'Bạn chưa tải lên bất kì tập tin nào.',

	'UCP_PREFS'				=> 'Thiết lập hệ thống',
	'UCP_PREFS_PERSONAL'	=> 'Sửa thiết lập cá nhân',
	'UCP_PREFS_POST'		=> 'Sửa thiết lập gửi bài viết',
	'UCP_PREFS_VIEW'		=> 'Sửa thiết lập xem bài viết',

	'UCP_PM'				=> 'Tin nhắn',
	'UCP_PM_COMPOSE'		=> 'Soạn tin nhắn',
	'UCP_PM_DRAFTS'			=> 'Tin nhắn nháp',
	'UCP_PM_OPTIONS'		=> 'Qui định cá nhân và tùy chọn thư mục',
	'UCP_PM_POPUP'			=> 'Tin nhắn',
	'UCP_PM_POPUP_TITLE'	=> 'Thông báo tin nhắn mới',
	'UCP_PM_UNREAD'			=> 'Tin nhắn chưa xem',
	'UCP_PM_VIEW'			=> 'Xem tin nhắn',

	'UCP_PROFILE'				=> 'Thông tin cá nhân',
	'UCP_PROFILE_AVATAR'		=> 'Sửa hình đại diện',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Sửa thông tin cá nhân',
	'UCP_PROFILE_REG_DETAILS'	=> 'Sửa thiết lập tài khoản',
	'UCP_PROFILE_SIGNATURE'		=> 'Sửa chữ ký cá nhân',

	'UCP_USERGROUPS'		=> 'Nhóm',
	'UCP_USERGROUPS_MEMBER'	=> 'Sửa tư cách thành viên',
	'UCP_USERGROUPS_MANAGE'	=> 'Quản lí nhóm',

	'UCP_REGISTER_DISABLE'					=> 'Hiện tại hệ thống tạm ngưng đăng ký thành viên mới.',
	'UCP_REMIND'							=> 'Gửi mật khẩu',
	'UCP_RESEND'							=> 'Gửi email kích hoạt tài khoản',
	'UCP_WELCOME'							=> 'Chào mừng bạn đến với bảng thiết lập cá nhân của mình. Với bảng điều khiển này, bạn có thể quản lí, xem và cập nhật thông tin cá nhân, thiết lập những sở thích cá nhân, theo dõi các chuyên mục và chủ đề mà mình quan tâm. Nếu được cấp phép, bạn cũng có thể gửi tin nhắn đến các thành viên khác. Hãy chắc chắn rằng bạn đã đọc qua các thông báo quan trọng nếu có trước khi tiếp tục.',
	'UCP_YIM'								=> 'Tài khoản Yahoo',
	'UCP_ZEBRA'								=> 'Bạn thân &amp; kẻ thù',
	'UCP_ZEBRA_FOES'						=> 'Quản lí kẻ thù',
	'UCP_ZEBRA_FRIENDS'						=> 'Quản lí bạn thân',
	'UNKNOWN_FOLDER'						=> 'Thư mục không biết',
	'UNWATCH_MARKED'						=> 'Ngừng theo dõi những mục đã đánh dấu',
	'UPLOAD_AVATAR_FILE'					=> 'Tải hình đại diện từ máy tính của bạn',
	'UPLOAD_AVATAR_URL'						=> 'Tải hình đại diện từ địa chỉ URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'				=> 'Nhập vào địa chỉ URL của hình đại diện. Hình đại diện sẽ được sao chép vào website này.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'			=> 'Tên thành viên không được phép ít hơn <strong>%1$d</strong> và vượt quá <strong>%2$d</strong> ký tự. Bạn cũng chỉ được phép sử dụng vừa chữ số vừa chữ cái.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'		=> 'Tên thành viên không được phép ít hơn <strong>%1$d</strong> và vượt quá <strong>%2$d</strong> ký tự. Bạn cũng chỉ được phép sử dụng vừa chữ số vừa chữ cái, khoảng trắng hoặc các ký tự <strong>-+_[]</strong>.',
	'USERNAME_ASCII_EXPLAIN'				=> 'Tên thành viên không được phép ít hơn <strong>%1$d</strong> và vượt quá <strong>%2$d</strong> ký tự. Bạn cũng chỉ được phép sử dụng những ký tự ASCII và không có các ký tự đặc biệt.',
	'USERNAME_LETTER_NUM_EXPLAIN'			=> 'Tên thành viên không được phép ít hơn <strong>%1$d</strong> và vượt quá <strong>%2$d</strong> ký tự. Bạn cũng chỉ được phép sử dụng chữ số hoặc chữ cái.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Tên thành viên không được phép ít hơn <strong>%1$d</strong> và vượt quá <strong>%2$d</strong> ký tự. Bạn cũng chỉ được phép sử dụng chữ số, chữ cái, khoảng trắng hoặc các ký tự <strong>-+_[]</strong>.',
	'USERNAME_CHARS_ANY_EXPLAIN'			=> 'Tên thành viên không được phép ít hơn <strong>%1$d</strong> và vượt quá <strong>%2$d</strong> ký tự.',
	'USERNAME_TAKEN_USERNAME'				=> 'Tên thành viên bạn vừa nhập đã được người khác sử dụng, hãy chọn một tên khác.',
	'USERNAME_DISALLOWED_USERNAME'			=> 'Tên thành viên bạn vừa nhập bị cấm sử dụng hoặc có chứa một từ kiểm duyệt không được phép sử dụng. Hãy vui lòng chọn một tên khác.',
	'USER_NOT_FOUND_OR_INACTIVE'			=> 'Những tên thành viên bạn vừa xác định không thể tìm thấy hoặc là những tên thành viên chưa được kích hoạt.',

	'VIEW_AVATARS'				=> 'Hiển thị hình đại diện',
	'VIEW_EDIT'					=> 'Xem/sửa',
	'VIEW_FLASH'				=> 'Hiển thị những tập tin Flash',
	'VIEW_IMAGES'				=> 'Hiển thị hình ảnh trong các bài viết',
	'VIEW_NEXT_HISTORY'			=> 'Tin nhắn kế tiếp trong quá trình gửi tin',
	'VIEW_NEXT_PM'				=> 'Tin nhắn kế tiếp',
	'VIEW_PM'					=> 'Xem tin nhắn',
	'VIEW_PM_INFO'				=> 'Thông tin chi tiết về tin nhắn',
	'VIEW_PM_MESSAGE'			=> 'Chỉ có <strong>1</strong> tin nhắn',
	'VIEW_PM_MESSAGES'			=> 'Có <strong>%d</strong> tin nhắn',
	'VIEW_PREVIOUS_HISTORY'		=> 'Tin nhắn trước trong quá trình gửi tin',
	'VIEW_PREVIOUS_PM'			=> 'Tin nhắn trước',
	'VIEW_SIGS'					=> 'Hiển thị chữ ký cá nhân',
	'VIEW_SMILIES'				=> 'Hiển thị những biểu tượng vui',
	'VIEW_TOPICS_DAYS'			=> 'Hiển thị những chủ đề cách đây',
	'VIEW_TOPICS_DIR'			=> 'Hiển thị chủ đề theo thứ tự',
	'VIEW_TOPICS_KEY'			=> 'Hiển thị những chủ đề sắp xếp theo',
	'VIEW_POSTS_DAYS'			=> 'Hiển thị những bài viết cách đây',
	'VIEW_POSTS_DIR'			=> 'Hiển thị bài viết theo thứ tự',
	'VIEW_POSTS_KEY'			=> 'Hiển thị những bài viết sắp xếp theo',

	'WATCHED_EXPLAIN'			=> 'Bên dưới là danh sách của tất cả các chuyên mục và chủ đề mà bạn đã chọn theo dõi. Bạn sẽ được thông báo bằng email mỗi khi các chuyên mục hay chủ đề này có bài viết mới. Để ngừng theo dõi, hãy đánh dấu chọn vào ô kiểm trong chuyên mục hay chủ đề tương ứng rồi bấm vào nút <strong>Ngừng theo dõi những mục đã đánh dấu</strong>.',
	'WATCHED_FORUMS'			=> 'Những chuyên mục đang theo dõi',
	'WATCHED_TOPICS'			=> 'Những chủ đề đang theo dõi',
	'WRONG_ACTIVATION'			=> 'Khóa kích hoạt bạn vừa cung cấp không phù hợp với bất kì tài khoản nào trong cơ sở dữ liệu.',

	'YOUR_DETAILS'				=> 'Hoạt động của bạn',
	'YOUR_FOES'					=> 'Kẻ thù của bạn',
	'YOUR_FOES_EXPLAIN'			=> 'Để gỡ bỏ những tên thành viên khỏi danh sách kẻ thù, chọn trong danh sách rồi bấm vào nút chấp nhận.',
	'YOUR_FRIENDS'				=> 'Bạn thân của bạn',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Để gỡ bỏ những tên thành viên khỏi danh sách bạn thân, chọn trong danh sách rồi bấm vào nút chấp nhận.',
	'YOUR_WARNINGS'				=> 'Mức độ cảnh cáo của bạn',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Đặt trong thư mục',
		'MARK_AS_READ'		=> 'Đánh dấu đã xem',
		'MARK_AS_IMPORTANT'	=> 'Đánh dấu tin nhắn',
		'DELETE_MESSAGE'	=> 'Xóa tin nhắn'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Tiêu đề',
		'SENDER'	=> 'Người gửi',
		'MESSAGE'	=> 'Nội dung',
		'STATUS'	=> 'Trạng thái',
		'TO'		=> 'Người nhận'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'giống như',
		'IS_NOT_LIKE'	=> 'không giống như',
		'IS'			=> 'là',
		'IS_NOT'		=> 'không phải là',
		'BEGINS_WITH'	=> 'bắt đầu bằng',
		'ENDS_WITH'		=> 'kết thúc bằng',
		'IS_FRIEND'		=> 'là bạn thân',
		'IS_FOE'		=> 'là kẻ thù',
		'IS_USER'		=> 'là thành viên',
		'IS_GROUP'		=> 'là thành viên của một nhóm',
		'ANSWERED'		=> 'đã trả lời',
		'FORWARDED'		=> 'đã chuyển tới',
		'TO_GROUP'		=> 'đến nhóm thành viên mặc định của tôi',
		'TO_ME'			=> 'đến tôi'
	),

	'GROUPS_EXPLAIN'	=> 'Những nhóm làm nhiệm vụ của quản trị viên sẽ làm việc tốt hơn các thành viên quản trị riêng lẻ rất nhiều. Mặc định, bạn sẽ được đặt tham gia vào một nhóm xác định, đây là nhóm mặc định của bạn. Nhóm này sẽ phân biệt bạn là thành viên của nhóm với các thành viên của những nhóm khác thông qua màu sắc trên tên thành viên, hình đại diện, xếp hạng… Tùy thuộc vào quyết định của người quản trị có cho phép hay không mà bạn có thể thay đổi nhóm mặc định của mình. Bạn cũng có thể được tự thêm vào hoặc tự mình tham gia vào các nhóm thành viên khác. Một vài nhóm có thể đòi hỏi bạn thiết lập cấp phép bổ sung để xem một vài thông tin của nhóm hay năng lực để tham gia vào trong một số lĩnh vực riêng của họ.',
	'GROUP_LEADER'		=> 'Là trưởng nhóm',
	'GROUP_MEMBER'		=> 'Là thành viên của nhóm',
	'GROUP_PENDING'		=> 'Là thành viên đang chờ quyết định vào nhóm',
	'GROUP_NONMEMBER'	=> 'Không phải là thành viên của nhóm',
	'GROUP_DETAILS'		=> 'Thông tin về nhóm',

	'NO_LEADER'		=> 'Không phải là trưởng nhóm',
	'NO_MEMBER'		=> 'Không phải là thành viên của nhóm',
	'NO_PENDING'	=> 'Không phải là thành viên đang chờ quyết định vào nhóm',
	'NO_NONMEMBER'	=> 'Không phải là thành viên của bất cứ nhóm nào',
));

?>