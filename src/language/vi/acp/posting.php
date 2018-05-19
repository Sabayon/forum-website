<?php
/** 
*
* acp_posting [Vietnamese]
*
* @package language
* @version $Id: posting.php 49 2009-05-07 18:08:00Z nedka $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML, bản thân tương tự gần giống như HTML, cho phép bạn tùy biến sử dụng và điều khiển dễ dàng hơn mã HTML. Với công cụ này, bạn có thể thêm vào, gỡ bỏ hay chỉnh sửa những thẻ BBCode tùy chọn.',
	'ADD_BBCODE'				=> 'Tạo thẻ BBCode mới',
 
	'BBCODE_ADDED'				=> 'Thẻ BBCode đã được tạo thành công.',
	'BBCODE_EDITED'				=> 'Thẻ BBCode đã được chỉnh sửa thành công.',
	'BBCODE_NOT_EXIST'			=> 'Thẻ BBCode vừa chọn không tồn tại.',
	'BBCODE_HELPLINE'			=> 'Hướng dẫn sử dụng thẻ BBCode',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Mục thông tin hướng dẫn sử dụng này sẽ được hiển thị khi rê chuột lên thẻ BBCode tương ứng trong phần soạn bài viết.',
	'BBCODE_HELPLINE_TEXT'		=> 'Nội dung hướng dẫn',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Nội dung hướng dẫn bạn vừa nhập quá dài.',
	'BBCODE_INVALID_TAG_NAME'	=> 'Tên thẻ BBCode vừa chọn đã được sử dụng.',
	'BBCODE_INVALID'			=> 'Thẻ BBCode của bạn được tạo từ một biểu mẫu không hợp lệ.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Thẻ BBCode tùy chọn của bạn phải có thẻ mở đầu và thẻ kết thúc.',
	'BBCODE_TAG'				=> 'Thẻ BBCode',
	'BBCODE_TAG_TOO_LONG'		=> 'Tên của thẻ BBCode bạn vừa nhập quá dài.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Tên định danh của thẻ BBCode bạn vừa nhập quá dài. Hãy vui lòng sử dụng tên định danh cho thẻ ngắn hơn.',
	'BBCODE_TAG_TOO_LONG'		=> 'Thẻ BBCode xác định bạn vừa nhập quá dài, hãy vui lòng chọn tên thẻ ngắn hơn.',
	'BBCODE_USAGE'				=> 'Cách sử dụng thẻ BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Bạn có thể xác định cách sử dụng thẻ BBCode tại đây. Thay thế bất kì biến nào nhập vào bằng mã tương ứng (%sXem bên dưới%s).',

	'EXAMPLE'						=> 'Ví dụ:',
	'EXAMPLES'						=> 'Các ví dụ:',

	'HTML_REPLACEMENT'				=> 'Mã HTML thay thế',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Bạn có thể xác định mã HTML thay thế cho thẻ BBCode tại đây. Đừng quên đặt lại những mã thay thế mà bạn đã sử dụng ở bên trên!',

	'TOKEN'					=> 'Mã thay thế',
	'TOKENS'				=> 'Những mã thay thế',
	'TOKENS_EXPLAIN'		=> 'Mã thay thế có nhiệm vụ thay thế cho nguồn nhập vào của thành viên. Nguồn nhập vào chỉ được kiểm tra hợp lệ nếu kết quả định danh của nó chính xác. Nếu cần thiết, bạn có thể đánh số chúng bằng cách thêm vào một con số sau ký tự nằm trong dấu ngoặc móc, ví dụ như <var>{TEXT1}, {TEXT2}</var>.<br /><br />Ngoài ra, những mã thay thế này có thể sử dụng bất kì chuỗi ngôn ngữ nào trong thư mục <samp>language/</samp> của hệ thống, giống như: <var>{L_<em>&lt;STRINGNAME&gt;</em>}</var> với <em>&lt;STRINGNAME&gt;</em> là tên của chuỗi đã được phiên dịch trong gói ngôn ngữ mà bạn muốn thêm vào. Ví dụ, <var>{L_WROTE}</var> sẽ hiển thị thành &quot;đã viết&quot; hoặc nội dung khác tùy theo nghĩa phiên dịch trong gói ngôn ngữ mà thành viên chọn.<br /><br /><strong>Lưu ý rằng những mã thay thế được liệt kê bên dưới có thể sử dụng được trong các thẻ BBCode tùy biến.</strong>',
	'TOKEN_DEFINITION'		=> 'Định danh mã thay thế',
	'TOO_MANY_BBCODES'		=> 'Bạn không thể tạo quá nhiều thẻ BBCode. Hãy gỡ bỏ một hay nhiều thẻ BBCode rồi thử lại.',

	'tokens'	=>	array(
		'TEXT'			=> 'Bất kì văn bản nào, bao gồm các ký tự, chữ số… Bạn không nên sử dụng những mã thay thế này trong các thẻ lệnh HTML. Thay vào đó, bạn hãy sử dụng <var>IDENTIFIER</var> hoặc <var>SIMPLETEXT</var>.',
		'SIMPLETEXT'	=> 'Những ký tự từ bảng chữ cái Latinh (A-Z), chữ số, khoảng trắng, dấu phẩy, dấu chấm, dấu trừ, dấu cộng, dấu gạch nối và dấu gạch dưới.',
		'IDENTIFIER'	=> 'Những ký tự từ bảng chữ cái Latinh (A-Z), chữ số, dấu gạch nối và dấu gạch dưới.',
		'NUMBER'		=> 'Bất kì giá trị số nào.',
		'EMAIL'			=> 'Địa chỉ email hợp lệ.',
		'URL'			=> 'Địa chỉ URL hợp lệ sử dụng bất kì giao thức nào (http, ftp… không thể sử dụng được vì các vấn đề với mã Javascript). Nếu bạn không nhập vào giao thức, &quot;http://&quot; sẽ được sử dụng làm tiền tố đầu của chuỗi.',
		'LOCAL_URL'		=> 'Địa chỉ URL trong hệ thống. Địa chỉ URL này phải liên quan đến các trang trong hệ thống và không thể chứa một tên miền khác hay giao thức nào.',
		'COLOR'			=> 'Mã màu HTML, có thể sử dụng định dạng mã màu số như <samp>#FF1234</samp> hay một <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">từ khóa màu định dạng CSS</a> giống như <samp>fuchsia</samp> hay <samp>InactiveBorder</samp>.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, gỡ bỏ hoặc chỉnh sửa những biểu tượng bài viết mà thành viên có thể thêm vào trong chủ đề hay bài viết của họ. Những biểu tượng bài viết này thường được hiển thị trước tên chủ đề trong phần xem chuyên mục hoặc tiêu đề bài viết trong phần xem chủ đề. Bạn cũng có thể cài đặt và tạo ra các gói biểu tượng bài viết mới.',
	'ACP_SMILIES_EXPLAIN'	=> 'Biểu tượng vui thông thường là những hình ảnh nhỏ, chủ yếu là những hình vui nhộn được sử dụng để truyền đạt cảm xúc của thành viên trong bài viết. Với công cụ này, bạn có thể thêm vào, gỡ bỏ hay chỉnh sửa những biểu tượng vui mà thành viên có thể sử dụng trong bài viết và tin nhắn của họ. Bạn cũng có thể cài đặt và tạo ra các gói biểu tượng vui mới.',
	'ADD_SMILIES'			=> 'Thêm nhiều biểu tượng vui',
	'ADD_SMILEY_CODE'		=> 'Thêm mã xác định biểu tượng vui',
	'ADD_ICONS'				=> 'Thêm nhiều biểu tượng bài viết',
	'AFTER_ICONS'			=> 'Sau biểu tượng bài viết %s',
	'AFTER_SMILIES'			=> 'Sau biểu tượng vui %s',

	'CODE'						=> 'Mã nhập',
	'CURRENT_ICONS'				=> 'Biểu tượng bài viết hiện tại',
	'CURRENT_ICONS_EXPLAIN'		=> 'Chọn yêu cầu bạn muốn thực hiện với những biểu tượng bài viết đã cài đặt hiện tại của mình.',
	'CURRENT_SMILIES'			=> 'Biểu tượng vui hiện tại',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Chọn yêu cầu bạn muốn thực hiện với những biểu tượng vui đã cài đặt hiện tại của mình.',

	'DISPLAY_ON_POSTING'	=> 'Hiện trên trang gửi bài',
	'DISPLAY_POSTING'		=> 'Hiện trên trang gửi bài',
	'DISPLAY_POSTING_NO'	=> 'Không hiện trên trang gửi bài',

	'EDIT_ICONS'				=> 'Sửa biểu tượng bài viết',
	'EDIT_SMILIES'				=> 'Sửa biểu tượng vui',
	'EMOTION'					=> 'Cảm xúc',
	'EXPORT_ICONS'				=> 'Xuất và tải về <samp>icons.pak</samp>',
	'EXPORT_ICONS_EXPLAIN'		=> '%sBằng cách bấm vào liên kết này, các giá trị cấu hình cho những biểu tượng bài viết đã cài đặt của bạn sẽ được đóng gói lại thành tập tin <samp>icons.pak</samp> để bạn sau khi tải về có thể sử dụng để tạo ra tập tin nén <samp>.zip</samp> hay <samp>.tgz</samp> chứa tất cả các biểu tượng bài viết của bạn có trong tập tin cấu hình <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Xuất và tải về <samp>smilies.pak</samp>',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sBằng cách bấm vào liên kết này, các giá trị cấu hình cho những biểu tượng vui đã cài đặt của bạn sẽ được đóng gói lại thành tập tin <samp>smilies.pak</samp> để bạn sau khi tải về có thể sử dụng để tạo ra tập tin nén <samp>.zip</samp> hay <samp>.tgz</samp> chứa tất cả các biểu tượng vui của bạn có trong tập tin cấu hình <samp>smilies.pak</samp>%s.',

	'FIRST'		=> 'Đầu tiên',

	'ICONS_ADD'				=> 'Thêm biểu tượng bài viết mới',
	'ICONS_NONE_ADDED'		=> 'Không có biểu tượng bài viết nào được thêm vào.',
	'ICONS_ONE_ADDED'		=> 'Biểu tượng bài viết đã được thêm vào thành công.',
	'ICONS_ADDED'			=> 'Những biểu tượng bài viết đã được thêm vào thành công.',
	'ICONS_CONFIG'			=> 'Thiết lập biểu tượng bài viết',
	'ICONS_DELETED'			=> 'Biểu tượng bài viết đã được gỡ bỏ thành công.',
	'ICONS_EDIT'			=> 'Sửa biểu tượng bài viết',
	'ICONS_ONE_EDITED'		=> 'Biểu tượng bài viết đã được cập nhật thành công.',
	'ICONS_NONE_EDITED'		=> 'Không có biểu tượng bài viết nào được cập nhật.',
	'ICONS_EDITED'			=> 'Những biểu tượng bài viết đã được cập nhật thành công.',
	'ICONS_HEIGHT'			=> 'Chiều cao',
	'ICONS_IMAGE'			=> 'Hình dùng làm biểu tượng bài viết',
	'ICONS_IMPORTED'		=> 'Gói biểu tượng bài viết đã được cài đặt thành công.',
	'ICONS_IMPORT_SUCCESS'	=> 'Gói biểu tượng bài viết đã được nhập thành công.',
	'ICONS_LOCATION'		=> 'Tên tập tin hình',
	'ICONS_NOT_DISPLAYED'	=> 'Những biểu tượng bài viết dưới đây không được hiển thị trong phần gửi bài viết',
	'ICONS_ORDER'			=> 'Sắp xếp',
	'ICONS_URL'				=> 'Hình biểu tượng',
	'ICONS_WIDTH'			=> 'Chiều rộng',
	'IMPORT_ICONS'			=> 'Cài đặt gói biểu tượng bài viết',
	'IMPORT_SMILIES'		=> 'Cài đặt gói biểu tượng vui',

	'KEEP_ALL'			=> 'Bỏ qua tất cả',

	'MASS_ADD_SMILIES'	=> 'Thêm vào nhiều biểu tượng vui',

	'NO_ICONS_ADD'		=> 'Không biểu tượng nào có sẵn để thêm vào.',
	'NO_ICONS_EDIT'		=> 'Không biểu tượng nào có sẵn để chỉnh sửa.',
	'NO_ICONS_EXPORT'	=> 'Bạn không có biểu tượng bài viết nào để tạo gói biểu tượng.',
	'NO_ICONS_PAK'		=> 'Không tìm thấy gói biểu tượng bài viết nào.',
	'NO_SMILIES_ADD'	=> 'Không biểu tượng vui nào có sẵn để thêm vào.',
	'NO_SMILIES_EDIT'	=> 'Không biểu tượng vui nào có sẵn để chỉnh sửa.',
	'NO_SMILIES_EXPORT'	=> 'Bạn không có biểu tượng vui nào để tạo gói biểu tượng.',
	'NO_SMILIES_PAK'	=> 'Không tìm thấy gói biểu tượng vui nào.',

	'PAK_FILE_NOT_READABLE'		=> 'Không thể đọc được tập tin <samp>.pak</samp> của gói biểu tượng.',

	'REPLACE_MATCHES'	=> 'Kết quả thay thế',

	'SELECT_PACKAGE'			=> 'Chọn một gói biểu tượng',
	'SMILIES_ADD'				=> 'Thêm biểu tượng vui mới',
	'SMILIES_NONE_ADDED'		=> 'Không có biểu tượng vui nào được thêm vào.',
	'SMILIES_ONE_ADDED'			=> 'Biểu tượng vui đã được thêm vào thành công.',
	'SMILIES_ADDED'				=> 'Những biểu tượng vui đã được thêm vào thành công.',
	'SMILIES_CODE'				=> 'Mã nhập',
	'SMILIES_CONFIG'			=> 'Thiết lập biểu tượng vui',
	'SMILIES_DELETED'			=> 'Biểu tượng vui đã được gỡ bỏ thành công.',
	'SMILIES_EDIT'				=> 'Sửa biểu tượng vui',
	'SMILIE_NO_CODE'			=> 'Biểu tượng vui “%s” đã bị cấm dùng, vì thế mã bạn vừa nhập vô hiệu.',
	'SMILIE_NO_EMOTION'			=> 'Biểu tượng vui “%s” đã bị cấm dùng, vì thế cảm xúc bạn vừa nhập vô hiệu.',
	'SMILIES_NONE_EDITED'		=> 'Không có biểu tượng vui nào được cập nhật.',
	'SMILIES_ONE_EDITED'		=> 'Biểu tượng vui đã được cập nhật thành công.',
	'SMILIES_EDITED'			=> 'Những biểu tượng vui đã được cập nhật thành công.',
	'SMILIES_EMOTION'			=> 'Cảm xúc',
	'SMILIES_HEIGHT'			=> 'Chiều cao',
	'SMILIES_IMAGE'				=> 'Hình dùng làm biểu tượng vui',
	'SMILIES_IMPORTED'			=> 'Gói biểu tượng vui đã được cài đặt thành công.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Gói biểu tượng vui đã được nhập thành công.',
	'SMILIES_LOCATION'			=> 'Tên tập tin hình',
	'SMILIES_NOT_DISPLAYED'		=> 'Những biểu tượng vui dưới đây không được hiển thị trong phần gửi bài viết',
	'SMILIES_ORDER'				=> 'Sắp xếp',
	'SMILIES_URL'				=> 'Hình biểu tượng',
	'SMILIES_WIDTH'				=> 'Chiều rộng',

	'WRONG_PAK_TYPE'	=> 'Gói biểu tượng vừa chọn không chứa dữ liệu thích hợp.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, chỉnh sửa và gỡ bỏ những từ kiểm duyệt tự động trong hệ thống. Mọi người vẫn được phép dùng những từ kiểm duyệt này để đăng ký làm tên thành viên. Bạn có thể sử dụng dấu * trong từ kiểm duyệt, ví dụ như <strong>*test*</strong> cũng sẽ kiểm duyệt luôn từ <strong>detestable</strong>, <strong>test*</strong> cũng sẽ kiểm duyệt luôn từ <strong>testing</strong>, <strong>*test</strong> cũng sẽ kiểm duyệt luôn từ <strong>detest</strong>.',
	'ADD_WORD'				=> 'Thêm từ kiểm duyệt mới',

	'EDIT_WORD'		=> 'Sửa từ kiểm duyệt',
	'ENTER_WORD'	=> 'Bạn phải nhập vào từ kiểm duyệt và từ thay thế.',

	'NO_WORD'	=> 'Không có từ kiểm duyệt nào được chọn để chỉnh sửa.',

	'REPLACEMENT'	=> 'Từ thay thế',

	'UPDATE_WORD'	=> 'Cập nhật từ kiểm duyệt',

	'WORD'				=> 'Từ kiểm duyệt',
	'WORD_ADDED'		=> 'Từ kiểm duyệt đã được thêm vào thành công.',
	'WORD_REMOVED'		=> 'Từ kiểm duyệt vừa chọn đã được gỡ bỏ thành công.',
	'WORD_UPDATED'		=> 'Từ kiểm duyệt vừa chọn đã được cập nhật thành công.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, chỉnh sửa, xem và xóa các xếp hạng. Bạn cũng có thể chỉ định những xếp hạng đặc biệt áp dụng cho thành viên thông qua phần quản lí thành viên.',
	'ADD_RANK'				=> 'Thêm xếp hạng mới',

	'MUST_SELECT_RANK'		=> 'Bạn phải chọn một xếp hạng.',

	'NO_ASSIGNED_RANK'		=> 'Không có xếp hạng đặc biệt nào được chỉ định.',
	'NO_RANK_TITLE'			=> 'Bạn chưa nhập vào tên xếp hạng.',
	'NO_UPDATE_RANKS'		=> 'Xếp hạng đã được xóa thành công. Tuy nhiên, những tài khoản thành viên đang sử dụng xếp hạng này chưa được cập nhật. Bạn sẽ phải tự mình thay đổi lại xếp hạng cho những tài khoản thành viên này.',

	'RANK_ADDED'			=> 'Xếp hạng đã được thêm vào thành công.',
	'RANK_IMAGE'			=> 'Hình ảnh xếp hạng',
	'RANK_IMAGE_EXPLAIN'	=> 'Hình ảnh xác định nhỏ hiển thị cùng với xếp hạng này. Đường dẫn đến hình ảnh phải nằm trong thư mục hệ thống.',
	'RANK_MINIMUM'			=> 'Số bài viết tối thiểu',
	'RANK_REMOVED'			=> 'Xếp hạng đã được gỡ bỏ thành công.',
	'RANK_SPECIAL'			=> 'Chọn làm xếp hạng đặc biệt',
	'RANK_TITLE'			=> 'Tên xếp hạng',
	'RANK_UPDATED'			=> 'Xếp hạng đã được cập nhật thành công.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lí các tên thành viên cấm sử dụng. Với những tên thành viên bị cấm sử dụng, bạn có thể dùng dấu * để cấm thành viên sử dụng nhiều tên giống nhau. Lưu ý rằng bạn không thể cấm sử dụng những tên thành viên đã được thành viên sử dụng để đăng ký mà trước hết bạn cần xóa tên này rồi hãy cấm sử dụng nó tại đây.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Bạn có thể cấm sử dụng một tên thành viên bằng cách dùng dấu * để cấm nhiều ký tự đi cùng.',
	'ADD_DISALLOW_TITLE'	=> 'Thêm tên thành viên cấm sử dụng',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Bạn có thể gỡ bỏ một tên thành viên đã bị cấm sử dụng bằng cách chọn tên thành viên đó từ danh sách này và bấm vào nút chấp nhận.',
	'DELETE_DISALLOW_TITLE'		=> 'Gỡ bỏ tên thành viên cấm sử dụng',
	'DISALLOWED_ALREADY'		=> 'Tên thành viên bạn vừa nhập không thể bị cấm sử dụng. Có thể tên này đã tồn tại trong danh sách tên thành viên cấm sử dụng, trong danh sách từ kiểm duyệt hay đã được một thành viên nào đó sử dụng.',
	'DISALLOWED_DELETED'		=> 'Tên thành viên cấm sử dụng đã được gỡ bỏ thành công.',
	'DISALLOW_SUCCESSFUL'		=> 'Tên thành viên cấm sử dụng đã được thêm vào thành công.',

	'NO_DISALLOWED'				=> 'Không có tên thành viên nào bị cấm sử dụng',
	'NO_USERNAME_SPECIFIED'		=> 'Bạn chưa chọn hoặc nhập vào tên thành viên.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lí những nguyên nhân được sử dụng trong các báo cáo và nội dung từ chối khi từ chối những bài viết. Có một nguyên nhân mặc định trong đây được đánh dấu * mà bạn không thể gỡ bỏ được, nguyên nhân này được sử dụng cho tất cả các báo cáo khi từ chối mà không chọn nguyên nhân.',
	'ADD_NEW_REASON'		=> 'Thêm nguyên nhân mới',
	'AVAILABLE_TITLES'		=> 'Các nguyên nhân đã được phiên dịch có sẵn',

	'IS_NOT_TRANSLATED'			=> 'Nguyên nhân <strong>chưa được</strong> phiên dịch',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Đây là những nguyên nhân <strong>chưa được</strong> phiên dịch. Nếu bạn muốn cung cấp nội dung trong phần phiên dịch, hãy xác định một khóa chính xác từ các tập tin trong gói ngôn ngữ để báo cáo về nguyên nhân trên.',
	'IS_TRANSLATED'				=> 'Nguyên nhân đã được phiên dịch',
	'IS_TRANSLATED_EXPLAIN'		=> 'Đây là những nguyên nhân đã được phiên dịch. Nếu tên nguyên nhân bạn nhập vào ở đây đã được xác định từ các tập tin trong gói ngôn ngữ để báo cáo về nguyên nhân trên, phần nội dung phiên dịch của tên và nội dung nguyên nhân sẽ được sử dụng.',

	'NO_REASON'					=> 'Không thể tìm thấy nguyên nhân.',
	'NO_REASON_INFO'			=> 'Bạn phải nhập vào tên và nội dung của nguyên nhân này.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Bạn không thể gỡ bỏ nguyên nhân mặc định “Những nguyên nhân khác”.',

	'REASON_ADD'				=> 'Thêm báo cáo/nguyên nhân từ chối',
	'REASON_ADDED'				=> 'Báo cáo/nguyên nhân từ chối đã được thêm vào thành công.',
	'REASON_ALREADY_EXIST'		=> 'Một nguyên nhân hiện tại đã sử dụng tên này, hãy nhập vào tên khác cho nguyên nhân này.',
	'REASON_DESCRIPTION'		=> 'Nội dung nguyên nhân',
	'REASON_DESC_TRANSLATED'	=> 'Nội dung nguyên nhân được hiển thị',
	'REASON_EDIT'				=> 'Sửa báo cáo/nguyên nhân từ chối',
	'REASON_EDIT_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào hoặc chỉnh sửa các nguyên nhân. Nếu nguyên nhân đã được phiên dịch trong gói ngôn ngữ thì nội dung phiên dịch này sẽ thay thế cho nội dung nguyên nhân bạn nhập vào tại đây.',
	'REASON_REMOVED'			=> 'Báo cáo/nguyên nhân từ chối đã được gỡ bỏ thành công.',
	'REASON_TITLE'				=> 'Tên nguyên nhân',
	'REASON_TITLE_TRANSLATED'	=> 'Tên nguyên nhân được hiển thị',
	'REASON_UPDATED'			=> 'Báo cáo/nguyên nhân từ chối đã được cập nhật thành công.',

	'USED_IN_REPORTS'		=> 'Đã sử dụng trong báo cáo',
));

?>