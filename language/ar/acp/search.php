<?php
/** 
*
* acp_search.php [Arabic]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-18 - phpBBArabia.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'هنا تستطيع إدارة خلفيات فهرسة البحث. بما أنك تستخدم خلفية واحدة لعملية البحث فعليك إزالة كل فهارس البحث غير المستخدمة. بعد تعديل بعض إعدادات البحث (على سبيل المثال:  أكبر/أقل عدد للحروف) قد يكون من المجدي إعادة تكوين الفهرسة لتفعيل تلك التغييرات',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'هنا تستطيع اختيار خلفية البحث التي تستعمل في فهرسة المواضيع وعمليات البحث. تستطيع ضبط العديد من الخيارات والتي قد تؤثر في مدى المعالجة المطلوبة لتنفيذ بعض المهام. بعض تلك الإعدادات مستخدمة لخلفيات البحث كلها',
	
	'COMMON_WORD_THRESHOLD'					=> 'الدرجة الحرجة للكلمات المشهورة',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'الكلمات التي تدخل في نسبة كبيرة من المشاركات ستعتبر مشهورة، الكلمات المشهورة نتجاهلها في عمليات البحث. ضعها صفر لتعطيلها. تتفعل إذا كان هناك أكثر من 100 مشاركة فقط',
	'CONFIRM_SEARCH_BACKEND'				=> 'هل أنت متأكد من أنك تريد التحويل إلى خلفية بحث أخرى؟ بعد تغير خلفية البحث عليك أن تنشئ فهرسة لخلفية البحث الجديدة. إذا لم تكن تنوي الرجوع إلى خلفية البحث القديمة يمكنك أيضاً إزالة فهرسة خلفية البحث القديمة لتحرير موارد النظام',
	'CONTINUE_DELETING_INDEX'				=> 'الاستمرار في عملية إزالة الفهرس السابق',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'لقد حدثت عملية إزالة فهرسة سابقاً. لكي تصل إلى صفحة فهرسة البحث عليك أن تنهي العملية أو تلغيها',
	'CONTINUE_INDEXING'						=> 'الاستمرار في علمية الفهرسة السابقة',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'لقد حدثت عملية فهرسة سابقاً. لكي تصل إلى صفحة فهرسة البحث عليك أن تنهي هذه الفهرسة أو تلغيها',
	'CREATE_INDEX'							=> 'إنشاء فهرس',
	
	'DELETE_INDEX'							=> 'إلغاء فهرس',
	'DELETING_INDEX_IN_PROGRESS'			=> 'جاري حذف الفهرس حالياً',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'خلفية البحث تلغي الفهرس حالياً. قد يستغرق هذا العمل بعض الدقائق',
	
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'خلفية MySQL fulltext تعمل فقط على الإصدار MySQL4 وما فوق',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'فهرسة MySQL fulltext يمكن أن تستعمل مع جداول MyUSAM فقط',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'العدد الكلي للمشاركات المفهرسة',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'دعم حروف UTF-8 غير اللاتينية باستعمال mbstring',
	'FULLTEXT_MYSQL_PCRE'					=> 'دعم حروف UTF-8 غير اللاتينية باستعمال PCRE',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'إذا كان PCRE لا يدعم خصائص ترميز الحروف العالمية، خلفية البحث ستحاول استخدام محرك تعبيرات mbstring',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'خلفية البحث هذه تتطلب خصائص حروف PCRE. وهي متوفرة فقط في إصدار php 4.4 و 5.1 فما فوق، إذا أردت البحث عن حروف غير لاتينية',
	
	'GENERAL_SEARCH_SETTINGS'				=> 'إعدادات بحث عامة',
	'GO_TO_SEARCH_INDEX'					=> 'الذهاب إلى صفحة فهرسة البحث',
	
	'INDEX_STATS'							=> 'إحصائيات الفهرس',
	'INDEXING_IN_PROGRESS'					=> 'جاري الفهرسة حالياً',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'خلفية البحث حالياً تفهرس كل المشاركات في هذا المنتدى. قد يستغرق هذا بضع دقائق إلى بضع ساعات بحسب حجم المنتدى الخاص بك',
	
	'LIMIT_SEARCH_LOAD'						=> 'حد استهلاك صفحة البحث',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'إذا استُهلكت دقيقة واحدة لتحميل صفحة البحث ، فإنها لن تستجيب 1.0 تساوي 100% لاستهلاك معالج الخادم ، هذه العملية تتم فقط على خوادم يونيكس',
	
	'MAX_SEARCH_CHARS'						=> 'أقصى عدد للحروف المفهرسة بخاصية البحث',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'الكلمات التي لا تتجاوز هذا العدد من الحروف ستفهرس',
	'MAX_NUM_SEARCH_KEYWORDS'          	 	=> 'الحد الأقصى لعدد كلمات البحث المسموح بها',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'    	=> 'الحد الأقصى لعدد كلمات البحث المسموح للأعضاء بالبحث عنها ، إذا وضعت القيمة 0 فإن الحد الأعلى سيكون لا نهائيا',
	'MIN_SEARCH_CHARS'						=> 'أدنى عدد للحروف المفهرسة بخاصية البحث',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'الكلمات التي تحتوي على هذا العدد من الحروف على الأقل هي التي ستفهرس',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'أقل عدد لاسم المستخدم',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'على المستخدم أن يضع على الأقل هذا العدد من الحروف عن استعمال خاصية البحث لاستعمال علامة شاملة للبحث عن مستخدم. إذا كان اسم مستخدم للكاتب أصغر من هذا الرقم فيمكنك إجراء عملية البحث هذه بإدخال اسم المستخدم كاملاً',
	
	'PROGRESS_BAR'							=> 'شريط التقدم',
	
	'SEARCH_GUEST_INTERVAL'					=> 'فترة الانتظار لبحث الزوار',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'المدة بالثواني التي ينتظرها الزائر ليتمكن من القيام بعملية بحث أخرى. إذا بحث أحد الزوار فيتوجب على بقية الزوار جميعهم انتظار هذه المدة ليتمكنوا من البحث',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'المشاركات جميعها حتى المشاركة رقم %1$d تفهرسوا ، حيث كان منها في هذه الخطوة %2$d مشاركة. معدل الفهرسة الحالي يساوي تقريباً %3$.1f مشاركة بالثانية. عملية الفهرسة مستمرة..',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'المشاركات جميعها حتى المشاركة رقم %1$d  أزيلت من فهرس البحث. عملية الحذف ما زالت مستمرة..',
	'SEARCH_INDEX_CREATED'					=> 'تفهرست المشاركات كلها في قاعدة البيانات بنجاح',
	'SEARCH_INDEX_REMOVED'					=> 'حذِف الفهرس لخلفية البحث المحددة بنجاح',
	'SEARCH_INTERVAL'						=> 'فترة الانتظار لبحث المستخدم',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'المدة بالثواني التي ينتظرها الأعضاء ليتمكنوا من القيام بعملية بحث أخرى. يتم احتساب هذه المدة لكل مستخدم على حدة',
	'SEARCH_STORE_RESULTS'					=> 'طول تخزين نتائج البحث',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'ستلتغى نتائج البحث المخزنة بعد هذا الوقت، بالثواني. ضع القيمة 0 إذا أردت أن تعطل تخزين نتائج البحث',
	'SEARCH_TYPE'							=> 'خلفية البحث',
	'SEARCH_TYPE_EXPLAIN'					=> 'منتديات phpBB تسمح لك باختيار الخلفية المستعملة للبحث عن النصوص في المشاركات. افتراضياً البحث سيستعمل خلفية fulltext لـ phpBB ',
	'SWITCHED_SEARCH_BACKEND'				=> 'لقد حولت خلفية البحث. لتستعمل خلفية البحث الجديدة عليك أن تتأكد من وجود فهرس للخلفية التي اخترتها',
	
	'TOTAL_WORDS'							=> 'العدد الكلي للكلمات المفهرسة',
	'TOTAL_MATCHES'							=> 'العدد الكلي للكلمات المفهرسة و المتصلة بالمشاركات',
	
	'YES_SEARCH'							=> 'تفعيل خاصية البحث',
	'YES_SEARCH_EXPLAIN'					=> 'تفعيل واجهة البحث للمستخدمين بما في ذلك البحث عن أعضاء',
	'YES_SEARCH_UPDATE'						=> 'تمكين تحديث fulltext',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'تحديث فهرس fulltext عند الكتابة، سيلغى إذا تعطلت خاصية البحث',
));

?>