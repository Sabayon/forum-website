<?php
/** 
*
* acp_search [Vietnamese]
*
* @package language
* @version $Id: search.php 31 2009-05-07 18:11:00Z nedka $
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
	'ACP_SEARCH_INDEX_EXPLAIN'		=> 'Với công cụ này, bạn có thể quản lí việc tạo chỉ mục tìm kiếm trong hệ thống. Nếu bạn chỉ sử dụng duy nhất một phương pháp tìm kiếm, bạn nên xóa tất cả chỉ mục tìm kiếm mà bạn không sử dụng đến. Sau khi thay đổi một vài thiết lập tìm kiếm ví dụ như số ký tự tối thiểu/tối đa, bạn nên tạo lại chỉ mục tìm kiếm cho những thay đổi này.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xác định phương pháp tìm kiếm nào sẽ được sử dụng cho việc tạo chỉ mục các bài viết và thực thi việc tìm kiếm trong hệ thống. Bạn có thể thiết lập những tùy chọn khác nhau có thể ảnh hưởng đến nhiều đến yêu cầu xử lí công việc của hệ thống. Một vài những thiết lập này giống nhau trong tất cả các phương pháp tìm kiếm.',

	'COMMON_WORD_THRESHOLD'				=> 'Giới hạn các từ thông dụng',
	'COMMON_WORD_THRESHOLD_EXPLAIN'		=> 'Những từ xuất hiện thường xuyên với tỉ lệ phần trăm lớn trong tất cả các bài viết sẽ được xem như là từ thông dụng. Những từ thông dụng này sẽ không được phép sử dụng trong truy vấn tìm kiếm. Nhập số <strong>0</strong> để vô hiệu tùy chọn này. Thiết lập này chỉ có tác dụng nếu diễn đàn bạn có nhiều hơn 100 bài viết. Nếu bạn muốn hệ thống xét lại những từ thông dụng chính xác sau khi thay đổi tỉ lệ này, bạn cần phải tạo lại chỉ mục tìm kiếm.',
	'CONFIRM_SEARCH_BACKEND'			=> 'Bạn có chắc chắn muốn chuyển đổi sang phương pháp tìm kiếm khác? Sau khi thay đổi phương pháp tìm kiếm, bạn sẽ phải tạo chỉ mục cho phương pháp tìm kiếm mới. Trong trường hợp bạn không chuyển đổi phương pháp tìm kiếm đang sử dụng, bạn cũng có thể xóa chỉ mục tìm kiếm cũ để tiết kiệm tài nguyên hệ thống.',
	'CONTINUE_DELETING_INDEX'			=> 'Tiếp tục tiến hành việc gỡ bỏ chỉ mục trước',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Quá trình gỡ bỏ chỉ mục đã được bắt đầu. Ngoài ra, để truy cập lại vào trang tìm kiếm bạn cần phải hoàn tất việc xóa chỉ mục trước.',
	'CONTINUE_INDEXING'					=> 'Tiếp tục tiến hành việc tạo chỉ mục trước',
	'CONTINUE_INDEXING_EXPLAIN'			=> 'Quá trình tạo chỉ mục đã được bắt đầu. Ngoài ra, để truy cập lại vào trang tìm kiếm bạn cần phải hoàn tất việc tạo chỉ mục hoặc hủy bỏ thao tác này.',
	'CREATE_INDEX'						=> 'Tạo chỉ mục',

	'DELETE_INDEX'							=> 'Xóa chỉ mục',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Đang tiến hành xóa chỉ mục',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Phương pháp tìm kiếm hiện tại đang dọn dẹp chỉ mục tìm kiếm của nó. Quá trình này có thế mất một vài phút.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Phương pháp tìm kiếm FULLTEXT với MySQL chỉ có thể sử dụng được với phiên bản MySQL4 trở lên.',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Hỗ trợ những ký tự UTF-8 không thuộc bảng chữ cái Latinh sử dụng <samp>mbstring</samp>:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Nếu <samp>PCRE</samp> không có thuộc tính hỗ trợ các ký tự Unicode, phương pháp tìm kiếm sẽ cố gắng sử dụng công cụ biểu thức bình thường của <samp>mbstring</samp>.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Những chỉ mục FULLTEXT của MySQL chỉ có thể được sử dụng với các table MyISAM.',
	'FULLTEXT_MYSQL_PCRE'					=> 'Hỗ trợ những ký tự UTF-8 không thuộc bảng chữ cái Latinh sử dụng <samp>PCRE</samp>:',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Phương pháp tìm kiếm nàu yêu cầu thuộc tính hỗ trợ các ký tự Unicode của <samp>PCRE</samp>, chỉ có sẵn trong phiên bản PHP 4.4, 5.1 trở lên, nếu như bạn muốn tìm kiếm những ký tự không thuộc bảng chữ cái Latinh.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Số bài viết đã được lập chỉ mục',

	'GENERAL_SEARCH_SETTINGS'				=> 'Thiết lập tìm kiếm tổng quát',
	'GO_TO_SEARCH_INDEX'					=> 'Chuyển đến trang tìm kiếm',

	'INDEX_STATS'					=> 'Thống kê chỉ mục tìm kiếm',
	'INDEXING_IN_PROGRESS'			=> 'Đang tiến hành lập chỉ mục',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Phương pháp tìm kiếm hiện tại đang lập chỉ mục các bài viết trong hệ thống. Quá trình này có thể mất từ vài phút đến vài giờ tùy thuộc vào dung lượng cơ sở dữ liệu của bạn.',

	'LIMIT_SEARCH_LOAD'			=> 'Giới hạn thời gian hệ thống nạp trang tìm kiếm',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Nếu trong vòng một phút hệ thống nạp vượt quá giá trị được thiết lập này thì trang tìm kiếm sẽ chuyển sang chế độ ngưng hoạt động, ví dụ 1.0 gần bằng 100% tài nguyên được sử dụng của một bộ xử lí máy chủ. Chỉ sử dụng chức năng này trên các máy chủ UNIX.',

	'MAX_SEARCH_CHARS'					=> 'Số ký tự tối đa để tạo chỉ mục tìm kiếm',
	'MAX_SEARCH_CHARS_EXPLAIN'			=> 'Số ký tự tối đa cho phép trong mỗi từ của bài viết được tạo chỉ mục tìm kiếm.',
	'MAX_NUM_SEARCH_KEYWORDS'			=> 'Số từ khóa tối đa cho phép',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'Số từ khóa tối đa mà thành viên có thể nhập cho tác vụ tìm kiếm. Nhập vào số <strong>0</strong> để không hạn chế số từ khóa được phép tìm.',
	'MIN_SEARCH_CHARS'					=> 'Số ký tự tối thiểu để tạo chỉ mục tìm kiếm',
	'MIN_SEARCH_CHARS_EXPLAIN'			=> 'Số ký tự tối thiểu cho phép trong mỗi từ của bài viết được tạo chỉ mục tìm kiếm.',
	'MIN_SEARCH_AUTHOR_CHARS'			=> 'Số ký tự tối thiểu cho tên tác giả',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Thành viên phải nhập vào tối thiểu số ký tự được thiết lập này khi tìm kiếm tên tác giả sử dụng dấu *. Nếu tên thành viên của tác giả ít hơn số ký tự được thiết lập này, bạn vẫn có thể thực hiện tìm kiếm những bài viết của tác giả đó bằng cách nhập vào đầy đủ tên thành viên.',

	'PROGRESS_BAR'	=> 'Thanh tiến trình',

	'SEARCH_GUEST_INTERVAL'			=> 'Thời gian chờ giữa hai lần tìm kiếm dành cho khách',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Số giây mà khách phải chờ giữa hai lần thực hiện việc tìm kiếm trong hệ thống. Nếu có một ai đó đang thực hiện việc tìm kiếm thì tất cả những người khác phải chờ đợi cho đến khi hết thời gian chờ đợi được thiết lập này.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'Tất cả bài viết có số ID trên <strong>%1$d</strong> vẫn đang được tạo chỉ mục tìm kiếm với <strong>%2$d</strong> bài viết đã lập chỉ mục xong trong bước này. Tốc độ tạo chỉ mục tìm kiếm hiện tại là khoảng <strong>%3$.1f</strong> bài viết mỗi giây.<br />Việc tạo chỉ mục vẫn đang được tiến hành…',
	'SEARCH_INDEX_CREATED'			=> 'Đã lập chỉ mục thành công cho tất cả bài viết trong cơ sở dữ liệu.',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'Tất cả bài viết có số ID trên <strong>%1$d</strong> đã được gỡ bỏ chỉ mục tìm kiếm xong.<br />Việc gỡ bỏ chỉ mục vẫn đang được tiến hành…',
	'SEARCH_INDEX_REMOVED'			=> 'Đã xóa thành công chỉ mục tìm kiếm cho phương pháp tìm kiếm này.',
	'SEARCH_INTERVAL'				=> 'Thời gian chờ giữa hai lần tìm kiếm dành cho thành viên',
	'SEARCH_INTERVAL_EXPLAIN'		=> 'Số giây mà thành viên phải chờ giữa hai lần thực hiện việc tìm kiếm trong hệ thống. Khoảng thời gian này được kiểm tra độc lập riêng cho mỗi thành viên.',
	'SEARCH_STORE_RESULTS'			=> 'Thời gian lưu trữ bộ nhớ đệm cho kết quả tìm kiếm',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Số giây mà những kết quả tìm kiếm đã được lưu vào bộ nhớ đệm sẽ hết hạn. Nhập số <strong>0</strong> nếu bạn muốn vô hiệu chức năng lưu trữ bộ nhớ đệm cho kết quả tìm kiếm.',
	'SEARCH_TYPE'					=> 'Phương pháp tìm kiếm',
	'SEARCH_TYPE_EXPLAIN'			=> 'Hệ thống phpBB cho phép bạn chọn phương pháp được sử dụng để thực hiện tìm kiếm nội dung bài viết trong hệ thống. Theo thiết lập mặc định, chức năng tìm kiếm sẽ sử dụng tìm kiếm FULLTEXT của chính hệ thống phpBB.',
	'SWITCHED_SEARCH_BACKEND'		=> 'Bạn đã chọn chuyển đổi phương pháp tìm kiếm. Ngoài ra, để sử dụng phương pháp tìm kiếm mới này, bạn nên chắc chắn đã tạo chỉ mục cho phương pháp tìm kiếm đã chọn.',

	'TOTAL_WORDS'	=> 'Số từ đã được lập chỉ mục',
	'TOTAL_MATCHES'	=> 'Số từ trong bài viết đã được lập chỉ mục',

	'YES_SEARCH'				=> 'Bật công cụ tìm kiếm',
	'YES_SEARCH_EXPLAIN'		=> 'Cho phép thành viên sử dụng chức năng tìm kiếm trong hệ thống, bao gồm cả tìm kiếm thành viên.',
	'YES_SEARCH_UPDATE'			=> 'Bật cập nhật FULLTEXT',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Cập nhật các chỉ mục FULLTEXT khi gửi bài, được thay thế nếu chức năng tìm kiếm bị vô hiệu.',
));

?>