<?php
/** 
*
* help_faq.php [Arabic]
*
* @package language
* @version $Id: help_faq.php,v 1.42 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-16 - phpBBArabia.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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
$help = array(
	array(
		0	=> '--',
		1	=> 'مواضيع عن الدخول والتسجيل',
	),
	array(
		0	=> 'لماذا لا أستطيع الدخول؟',
		1	=> 'هل سجلت نفسك؟ في الواقع عليك التسجيل أولاً قبل الدخول. هل منعت من الدخول (سوف تظهر رسالة توضح منعك)؟ إن تم منعك عليك مراسلة مدير الموقع أو المشرف لمعرفة السبب. إن كنت قد سجلت نفسك ولم تكن قد منعت تأكد من الاسم وكلمة السر . في العادة تكون تلك هي المشكلة, إذا كان كل شيء صحيحاً عليك الاتصال بمسؤولي الموقع فقد يكونون قد أعدوا المنتدى بشكل غير صحيح',
	),
	array(
		0	=> 'لماذا أسجل نفسي؟',
		1	=> 'قد لا تحتاج ذلك, لكن الأمر يرجع إلى مسؤولي الموقع إن سمحوا لك بتسجيل رسائل لك في المنتدى ، على العموم التسجيل يعطيك صلاحيات ليست موجودة للضيف العادي مثل صور خاصة للشخصيات, رسائل خاصة, مراسلة الزملاء المسجلين, الاشتراك بالمجموعات الخاصة, وغيرها. لن يستغرق تسجيلك سوى دقائق معدودة لذا ننصحك بالتسجيل',
	),
	array(
		0	=> 'لماذا يتم إخراجي آليا؟',
		1	=> 'إذا لم تضع علامة على <i>أدخلني آليا</i> عند دخولك المنتدى سوف يتم إخراجك بعد انتهاء وقت معين. هذا يحمي حسابك من استغلاله من شخص آخر. حتى لا تخرج آليا ضع علامة صح على المربع المشار إليه, لا ننصح بذلك إذا كان الجهاز الذي دخلت منه جهاز عام أو مشترك, مثل المكتبة وانترنت كافيه والجامعة وغيرها',
	),
	array(
		0	=> 'كيف أمنع اسمي من الظهور في قائمة أسماء المشتركين؟',
		1	=> 'في نبذة عنك سوف تجد اختيار <i>أخف وضعي أثناء زيارتي</i>, إن فعلت هذا الاختيار <i>فعال</i> سوف تظهر فقط لمسؤول الموقع أو لنفسك. سوف تعدّ مشتركا مختفيا',
	),
	array(
		0	=> 'لقد فقدت كلمة السر!',
		1	=> 'لا تفزع! بالرغم من عدم قدرتنا على استرجاع كلمة السر لكن نستطيع تصفيرها. لفعل ذلك انتقل إلى صفحة الدخول ثم اضغط على <u>لقد نسيت كلمة السر</u>, اتبع الإرشادات وسوف تستطيع إعادة الدخول في أقرب وقت إن شاء الله',
	),
	array(
		0	=> 'لقد سجلت لكن لا أستطيع الدخول!',
		1	=> 'أولا تأكد من إدخالك اسم المستخدم وكلمة المرور الصحيحين. إن كانتا صحيحتين فقد حدث أحد أمرين. إذا كان دعم COPPA فعال وضغطت على  <u>أنا أقل من 13 سنة</u> عليك اتّباع الإرشادات. إذا لم تكن هذه هي الحالة فقد يحتاج حسابك للتشغيل؟ بعض المنتديات تحتاج تنشيط الاختيارات كلها, سواء بواسطتك أم بواسطة المدير. عندما سجلت قد تكون أبلغت بكيفية تشغيل الحساب. إذا أرسلت إليك رسالة بريد عليك اتّباع الإرشادات, إذا لم تستلم البريد هل أنت متأكد من صحة عنوان بريدك؟ سبب استعمال طريقة تنشيط الحساب تلك هي منع المستخدمين العابرين من استغلال المنتدى بطريقة سيئة ومجهولة. إذا كنت متأكداً من صحة بريدك الالكتروني فأرسل رسالة للمدير',
	),
	array(
		0	=> 'لقد سجلت في الماضي لكن لا أستطيع الدخول الآن؟!',
		1	=> 'لقد سجلت في الماضي لكن لا أستطيع الدخول الآن؟!", "أكثر الاحتمالات هي كالآتي; لقد أدخلت اسم مستخدم أو كلمة سر خاطئة (ارجع إلى الرسالة التي أرسلت لك عند تسجيلك) أو قد ألغى المسؤول حسابك في المنتدى. إذا كانت الحالة الأخيرة فربما لم تكن قد ساهمت بأي شيء في المنتدى؟ إنه من المعتاد أن يلغي المسؤولون المشتركين غير الفعالين من وقت لآخر وذلك لتصغير حجم قاعدة البيانات. حاول إعادة التسجيل وساهم في المنتدى هذه المرة',
	),
	array(
		0 => 'ما هو قانون حماية خصوصية الأطفال على الويب  -  COPPA ?',
		1 => 'COPPA, أو قانون حماية خصوصية الأطفال على الويب هو قانون في الولايات المتحدة الأمريكية صدر في عام 1998 يطلب من المواقع التي تجمع معلومات من القاصرين تحت سن 13 أن تُكتَب وصاية أبوية, أو أشكال أخرى للوصاية القانونية بأن يسمحوا بجمع معلومات خاصة معرفة من القاصر تحت سن 13.إذا كنت غير متأكد إذا كان ينطبق عليك هذا القانون بوصفك شخصا فالرجاء الانتباه بأن الموقع لا يقدم أي نصائح قانونية ',
	),
	array(
		0	=> 'لماذا لا يمكنني التسجيل ؟',
		1	=> 'من الممكن بأن مدير الموقع قد قام بحظر الآي بي الخاص بك أو حظر اسم المستخدم الذي استعملته للتسجيل. أو من الممكن أن يكون مدير الموقع قد قام بإيقاف عمليه التسجيل . اتصل بمدير الموقع للمساعدة ',
	),
	array(
		0	=> 'ماذا يحدث إذا حذفت الملفات المؤقتة الخاصة بالمنتدى ؟',
		1	=> 'حذف الملفات المؤقتة يحذف الملفات المؤقتة ( cookies ) التي أنشأها المنتدى والتي تجعلك مسجلاً للدخول وتلغي بعض المميزات المرتبطة بنظام الملفات المؤقتة ',
	),
	array(
		0	=> '--',
		1	=> 'تفضيلات وإعدادات المشترك',
	),
	array(
		0	=> 'كيف أستطيع تغيير إعداداتي؟',
		1	=> 'إعداداتك كلها  (إن كنت مسجلا ً) تُخَزّن في قاعدة البيانات. لتغييرها اضغط على  <u>لوحة التحكم</u> (تقع الوصلة في أعلى الصفحة في العادة وقد لا تكون في نفس الموقع). هذا سيسمح لك بتغيير الإعدادات كلها',
	),
	array(
		0	=> 'الأوقات غير صحيحة!',
		1	=> 'نحن متأكدون تقريباً من أن الأوقات صحيحة, لكن ما قد تراه هو وقت لخط زمن يختلف عن الوقت الذي أنت فيه. إن كانت تلك الحالة فعليك تغير اختيارك للتوقيت في إعداداتك ليتناسب مع مكانك, مثلاً السعودية مصر المغرب إيران. انتبه إن تغيير التوقيت, مثل الإعدادات الأخرى يسمح بتغييرها للمسجلين فقط. لذا إن لم تكن قد سجلت نفسك فهذا هو الوقت المناسب, صح الوقت المناسب!',
	),
	array(
		0	=> 'لقد غيرت التوقيت لكن مازال الوقت غير صحيح!',
		1	=> 'إن كنت قد أصلحت إعداد التوقيت ومازال الوقت غير صحيح الاحتمال المتوقع هو نظام توفير الساعة (أو وقت الصيف كما هو معروف في بريطانيا وغيرها). لم يصمم المنتدى لمعالجة الفرق بين الوقت العادي ووقت توفير الساعة لذا أثناء الصيف قد يكون هناك فرق ساعة من الوقت المحلي',
	),
	array(
		0	=> 'لغتي ليست في القائمة!',
		1	=> 'هناك احتمال أن المسؤول لم يضع لغتك من ضمن اللغات المنصبة أو لم يقم أحد بترجمة المنتدى للغتك. حاول الطلب من المسؤول أن ينصب لغتك في المنتدى, إن لم تكن موجودة لم لا تبدأ بالترجمة؟. المزيد من المعلومات موجودة لدى صفحة مجموعة phpBB (ارجع إلى الوصلة في أسفل الصفحة)',
	),
	array(
		0	=> 'كيف أظهر صورة أسفل اسمي؟',
		1	=> 'قد تكون هناك صورتان أسفل اسم المستخدم في المواضيع والردود. الأولى هي درجة المستخدم أو الرتبة, عادة ما تكون على شكل نجوم أو نقاط وتمثل عدد المشاركات في المنتدى أو حالتك في المنتدى. أسفل هذه هي صورة الشخصية المختارة وتسمى Avatar, وهي بالعادة خاصة بالمستخدم وفريدة. الأمر يرجع لمسؤول المنتدى للسماح بربط صورة بالمستخدم وكيفية توفير الصورة في المنتدى. إن لم تستطع استعمال الصور فالأمر يرجع للمسؤول, لك أن تسأل عن السبب (من المؤكد أنها معقولة!)',
	),
	array(
		0	=> 'كيف أغير تصنيفي؟',
		1	=> 'في العموم لا تستطيع تغيير مسمى الرتبة (الرتب تظهر في العادة أسفل الاسم وفي إعداداتك وذلك حسب تنسيق المنتدى). معظم المنتديات تستعمل الرتب لإظهار عدد الرسائل المرسلة أو مستوى المستخدم في المنتدى, مثلاً المسؤولون والمشرفون لهم مراتب خاصة. أرجوك لا تسئ استغلال المنتدى بإرسال رسائل أو مواضيع فارغة لزيادة رتبتك, قد تجد المسؤول أو المشرف يقلل من رتبك',
	),
	array(
		0	=> 'عندما اضغط على بريد شخص ما يطلب مني الدخول؟',
		1	=> 'نأسف لكن المسجلين فقط لهم القدرة على إرسال رسائل الكترونية ضمن المنتدى (إن كان المسؤول قام بتفعيل هذه الميزة). وهذه لتقليل الرسائل غير المرغوب بها من أن ترسل عن طريق المنتدى',
	),
	array(
		0	=> '--',
		1	=> 'مواضيع النشر',
	),
	array(
		0	=> 'كيف أنشر موضوع في المنتدى؟',
		1	=> 'بسهولة اضغط على الزر الخاص بموضوع المنتدى أو على نشر رد. قد تحتاج التسجيل لنشر موضوع, الإمكانيات المتاحة لك مذكورة في أسفل الصفحة (فجملة <i>تستطيع نشر مواضيع جديدة, تستطيع المشاركة في التصويت, وغيرها</i>)',
	),
	array(
		0	=> 'كيف أستطيع إلغاء أو تعديل موضوع؟',
		1	=> 'ما لم تكن مدير الموقع أو المشرف فلن تستطيع إلا تعديل مواضيعك الخاصة أو إلغاءها. تستطيع تعديل موضوع (أحيانا لوقت قصير بعد كتابته) بالضغط على زر  <i>تعديل</i> عند نفس الموضوع.  إذا رُدّ على الموضوع سوف تجد قليلاً من الجمل أسفل الموضوع, هذا يظهر عدد مرات تعديلك للموضوع. سوف تظهر هذه الجملة إذا قام أحد بالرد على الموضوع, ولن تظهر إذا قام المشرف أو المدير بتعديل الموضوع (عليهم ترك رسالة يذكرون في سبب تعديلهم وما هو التعديل). للعلم لا يستطيع المستخدمون العاديون إلغاء الموضوع إذا ردّ عليه أحد',
	),
	array(
		0	=> 'كيف أرفق توقيع مع موضوعي ؟',
		1	=> 'لإضافة توقيع للموضوع عليك تكوين توقيع أولاً, تستطيع فعل ذلك عن طريق ملفك الشخصي. فور تكوين التوقيع تستطيع الضغط على <i>أضف توقيع</i> في شاشة كتابة الموضوع. تستطيع إضافة التوقيع آليا في كتاباتك كلها بتشغيل الاختيار الخاص بذلك في ملفك الشخصي (تستطيع كذلك توقيف إضافة التوقيع لكل رسالة على حده بإزالة الاختيار الخاص بذلك في شاشة الموضوع)',
	),
	array(
		0	=> 'كيف أكون عملية تصويت على موضوع؟',
		1	=> 'تستطيع تكوين استفتاء بكل سهولة, عند تكوين موضوع جديد (أو تعديل النشر الأول للموضوع, إن كانت لك تلك الصلاحية) سوف ترى نموذج <i>أضف استفتاء</i> أسفل شاشة إضافة الموضوع (إن لم ترَ هذه الإضافة قد لا يكون لك الصلاحية لذلك). سوف ترى عنوان الاستفتاء واختيارين إضافيين (لإضافة اختيار أضف السؤال ثم اضغط على وصلة <i>أضف جواب</i>. تستطيع أن تضع وقتا زمنيا للاستفتاء, صفر تعني الوقت مفتوح للاستفتاء. هناك حد أقصى لعدد الأجوبة للاستفتاء, وهو يحدد من المسؤول',
	),
	array(
		0	=> 'كيف أستطيع تعديل تصويت ما أو إلغاءه ؟',
		1	=> 'كما هو الحال بالنسبة للمواضيع, الشخص الذي وضع الاستفتاء هو الوحيد الذي يستطيع تعديلها أو إلغائها , أو المشرف أو المسؤول. لتعديل استفتاء اضغط تعديل على أول إرسال للموضوع (وهي دائماً مرتبطة بالاستفتاء الذي تم وضعه). إن لم يجب أي شخص على الاستفتاء تستطيع تعديل وإلغاء الاستفتاء, لكن إن أُجيب عليه فالمشرف والمسؤول هما الأشخاص الوحيدون المسموح لهم بالتعديل والإلغاء. وهذا لمنع الأشخاص من تغيير الأسئلة والأجوبة وتزوير الاستفتاءات في وسط الفترة',
	),
	array(
		0	=> 'لماذا لا أستطيع دخول الساحة ؟',
		1	=> 'بعض الساحات قد تكون محددة الصلاحية لمجموعة معينة أو مسجلين معينين للاطلاع أو القراءة أو إضافة موضوع. قد لا تكون من ضمن تلك المجموعة أو المسجلين. وحدهم المشرفون ومدير المنتدى يمكنهم إعطاؤك الصلاحية لذلك. عليك الاتصال بهم',
	),
	array(
		0	=> 'لماذا لا يمكنني المشاركة في التصويت ؟',
		1	=> 'فقط المسجلون في المنتدى يمكنهم المشاركة في التصويت إذا كنت مسجلاً للدخول ولا تستطيع المشاركة في التصويت فتأكد من عملية تسجيل دخولك أو اتصل بمدير الموقع',
	),
	array(
		0	=> 'لماذا لا أستطيع إضافة المرفقات  ؟',
		1	=> 'لقد حدد مسؤول الموقع الحد الأقصى لحجم الملف ,امتداد الملف و نوع المرفقات في المنتدى . أو ربما تغيرت صلاحيتك من مسؤول الموقع , أو عدم استمرارية إرفاق الملفات في هذا المنتدى بالتحديد . قد تحصل على التوضيح لنص رسالة الخطأ عند محاولتك إرفاق الملف , إذا لم تظهر لك رسالة ما فعليك الاتصال بمسؤول الموقع',
	),
	array(
		0	=> 'لماذا أتلقى تحذيرات ؟',
		1	=> 'كل مدير منتدى لديه شروط و قوانين اشتراك خاصة. إذا قمت بتجاوز هذه الشروط و القوانين فيحذرونك. انتبه إلى أن القرار يعود إلى مدير المنتدى ولا علاقة لمجموعة phpBB بتلك القوانين أو الاشتراطات',
	),
	array(
		0	=> 'كيف يمكنني إرسال التقرير عن مشاركة للمشرف ؟',
		1	=> 'إذا سمح مدير المنتدى بذلك ، اذهب إلى المشاركة المراد التقرير عنها وستجد أيقونة خاصة للتقرير عن الموضوع. اضغط على الأيقونة وقم بالخطوات لإتمام عملية التقرير',
	),
	array(
		0	=> 'ما هي أيقونة حفظ الموضوع الموجودة في الموضوع ؟',
		1	=> 'هي خاصية تسمح لك بحفظ الموضوع لإكماله في وقت لاحق حتى تتمكن من إضافته. لمعرفة المزيد اتجه إلى لوحة التحكم الشخصية و اتبع الروابط ',
	),
	array(
		0	=> 'لماذا تحتاج مواضيعي للموافقة عليها ؟',
		1	=> 'من الممكن أن يكون مدير المنتدى قد حدد في ساحة معينة الاطلاع على الموضوع قبل اعتماده أو أنك أصبحت عضواً في مجموعة يطلع مدير المنتدى على مشاركاتهم قبل نشرها. لمزيد من المعلومات اتصل بمدير المنتدى',
	),
	array(
		0	=> 'كيف أنشر موضوع في المنتدى ؟',
		1	=> 'بسهولة اضغط على الزر الخاص بموضوع المنتدى أو على نشر رد. قد تحتاج التسجيل لنشر موضوع, الإمكانيات المتاحة لك مذكورة في أسفل الصفحة (فجملة تستطيع نشر مواضيع جديدة, تستطيع المشاركة في التصويت, وغيرها)',
	),
	array(
		0	=> '--',
		1	=> 'التنسيق وأنواع المواضيع',
	),
	array(
		0	=> 'ما هو BBCode ؟',
		1	=> 'BBCode هو تطبيق خاص من  HTML, صلاحية استعمالك لها تحدد من المسؤول (تستطيع تعطيلها لكل موضوع تنشره على حدة). BBCode تستعمل نفس الطريقة في الكتابة التي يستعملها HTML, الرموز محاطة بأقواس مربعة بدلاً من &lt; and &gt; وتعطي تحكما أكثر في تنسيق النص. لمزيد من المعلومات عن BBCode انظر الدليل الخاص بها في شاشة كتابة الموضوع',
	),
	array(
		0	=> 'هل أستطيع استعمال HTML ؟',
		1	=> 'هذا يعتمد على سماح المسؤول لك أيضاً, لهم مطلق الصلاحية بذلك. إن كان مسموحا لك لذلك فإن عدد الرموز المسموحة قليلة. وهذا  <i>صمام أمان</i> لمنع المسيئين من تخريب المنتدى أو التسبب بمشاكل أخرى. إن كانت HTML فعالة فإنك تستطيع تعطيلها لكل موضوع تنشره',
	),
	array(
		0	=> 'ما هي الوجوه الضاحكة ؟',
		1	=> 'الوجوه الضاحكة أو التعبيرية هي صور صغيرة من الممكن استعمالها للتعبير عن المشاعر باستعمال حروف قليلة, مثلاً الرمزين :) تعني سعيد, :( تعني حزين. قائمة كاملة بالوجوه موجودة عند تقديم موضوع أو رد جديد ، حاول ألاّ تكثر من استعمال الوجوه, فقد يجعل هذا الموضوع غير قابل للقراءة مما يدعو المشرف إلى تعديل الموضوع أو حتى إزالته تماماً',
	),
	array(
		0	=> 'هل أستطيع إرفاق صور؟',
		1	=> 'نعم ، يمكن إرفاق صورة في الموضوع. في كل الأحوال إذا سمح مدير المنتدى خاصية المرفقات يمكنك إضافة صورة للمنتدى. وأيضاً يمكنك إضافتها من رابط صورة مرفوعة على موقع مثلاً http://www.example.com/my-picture.gif ولا يمكنك إضافة صورة محفوظة على جهاز الكمبيوتر الخاص بك أو صورة محفوظة على خادم محمي بكلمة مرور مثل hotmail أو Yahoo . لإضافة صورة يجب وضع الرابط الصحيح بين وسم BBCode الخاص بذلك [img]',
	),
	array(
		0	=> 'ما هي الإعلانات العامة ؟',
		1	=> 'الإعلانات العامة تحوي معلومات مهمة يتوجب الاطلاع عليها. وستظهر الإعلانات العامة أعلى الساحات جميعها وفي لوحة تحكم ملفك الشخصي أيضاً. إضافة موضوع كإعلان عام يعود إلى صلاحياتك الموضوعة من مدير المنتدى',
	),
	array(
		0	=> 'ما هي الإعلانات ؟',
		1	=> 'قد تحتوي الإعلانات على معلومات مهمة لذا عليك قراءتها في أقرب وقت. تظهر الإعلانات في أعلى أي منتدى. إمكانية نشر الإعلان تعتمد على صلاحياتك, وهي تحدد من المسؤول',
	),
	array(
		0	=> 'ما هي المواضيع المثبتة ؟',
		1	=> 'المواضيع المثبتة تظهر أسفل الإعلانات في المنتدى. وهي على درجة من الأهمية لذا عليك قراءتها. كما هو الحال بالنسبة للإعلانات فإن نشر المواضيع المثبتة تعتمد على الصلاحيات المسموح بها',
	),
	array(
		0	=> 'ما هي المواضيع المقفلة ؟',
		1	=> 'المواضيع المقفلة تحدد من المشرف أو مسؤول المنتدى. لا تستطيع الرد على المواضيع المقفلة ولا على أي استفتاءات مرتبطة بها. قد تقفل المواضيع لأسباب عدة',
	),
	array(
		0	=> 'ما هي أيقونة الموضوع ؟',
		1	=> 'أيقونة الموضوع هي صور ترفق بجانب عنوان الموضوع للتعبير عن محتواه. استخدام هذه الخاصية تعود لوضع مدير المنتدى لصلاحية استخدامها ',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'مستوى المشتركين والمجموعات',
	),
	array(
		0	=> 'من هم المسئولون ؟',
		1	=> 'المسؤولون لهم أعلى الصلاحيات بالنسبة لمواضيع وردود المنتديات. ولهم الحق في التحكم بالمنشورات كلها في المنتدى من صلاحيات أو منع مشتركين أو تكوين مجموعات أو تحديد مشرفين وغيرها من المهام. وأيضاً لهم حقوق المشرفين كاملة في المنتديات جميعها',
	),
	array(
		0	=> 'من هم المشرفون ؟',
		1	=> 'المشرفون هم أفراد (أو مجموعة من الأفراد) ولهم وظيفة المتابعة اليومية للمنتدى. لهم صلاحية تعديل وإلغاء وقفل، وفتح, ونقل, وتقسيم المواضيع في المنتدى المشرفين عليه. بشكل عام المشرفون مسؤولون عن إبقاء الردود والمواضيع ضمن العنوان الرئيسي للمنتدى ومنعهم من نشر المواضيع المشينة',
	),
	array(
		0	=> 'ما هي مجموعات المستخدمين ؟',
		1	=> 'مجموعات المستخدمين هي طريقة لجمع عدد من المشتركين. يمكن للمشترك الواحد أن يكون في مجموعات عدة (وهذا يختلف عن الكثير من أنواع المنتديات الأخرى) ويمكن تحديد صلاحيات لكل مجموعة من هذه المجموعات. هذا يمكن من تحديد أكثر من مشرف للمنتدى, أو لإعطائهم الصلاحية لمنتديات خاصة',
	),
	array(
		0	=> 'كيف أشارك في مجموعة مستخدمين ؟',
		1	=> 'للمشاركة في مجموعات المستخدمين عليك الضغط على وصلة المجموعات في أعلى الصفحة (هذا يعتمد على التنسيق المستخدم), تستطيع رؤية المستخدمين جميعهم. ليست كل المجموعات  <i>مفتوحة</i>، بعضها مغلقة والبعض مختفية. إن كانت المجموعة مفتوحة وكنت تريد المشاركة يمكنك الضغط على الوصلة الخاصة بذلك. على مشرف المجموعة السماح لك بالمشاركة, قد تسأل عن سبب رغبتك في المشاركة. الرجاء عدم الإلحاح على مشرف المجموعة إن رفض طلبك للمشاركة, فإن لهم أسبابهم لذلك',
	),
	array(
		0	=> 'كيف أصبح مشرفاً لمجموعة مستخدمين ؟',
		1	=> 'تكون المجموعات لمصمم المنتدى أولاً, ويتحدد المشرفون في ذلك الوقت. إن كنت تريد تكوين مجموعة مستخدمين فإن أول اتصال سوف يكون بمسؤول المنتدى, حاول إرسال رسالة خاصة للمسؤول',
	),
	array(
		0	=> 'لماذا تظهر بعض المجموعات بلون مختلف ؟',
		1	=> 'من الممكن أن يكون مدير المنتدى خصص ألوان معينة للمجموعات ليميزهم عن غيرهم من الأعضاء الآخرين ',
	),
	array(
		0	=> 'ما هي المجموعة الافتراضية ؟',
		1	=> 'إذا كنت عضو في أكثر من مجموعة فمجموعتك الافتراضية هي التي يكون اسمك بنفس لونها ولك شعار المجموعة . قد يكون مدير المنتدى أعطى الصلاحية للأعضاء بتغير مجموعتهم الافتراضية من خلال لوحة التحكم الشخصية ',
	),
	array(
		0	=> 'ما هي وصلة الطاقم الإداري ؟',
		1	=> 'هذه الصفحة بها قائمة بفريق المنتدى وتتضمن مدير المنتدى و المشرفين مع المعلومات الخاصة بهم كلها ',
	),
	array(
		0	=> '--',
		1	=> 'الرسائل الخاصة',
	),
	array(
		0	=> 'لا أستطيع إرسال رسالة خاصة !',
		1	=> 'هناك أسباب لذلك; ربما لم تشترك في المنتدى أو لم تسجل دخولك, أو قد أقفل مسؤول المنتدى الرسائل الخاصة بشكل عام أو قد منعك مشرف المنتدى من إرسال رسائل خاصة. في الحالة الأخيرة فقط اسأل مسؤول المنتدى عن السبب',
	),
	array(
		0	=> 'أستقبل الكثير من الرسائل الخاصة غير المرغوب بها !',
		1	=> 'في المستقبل سوف نضيف إمكانية وضع قائمة بالمصادر المهملة. في الوقت الحالي إن كنت تستقبل الكثير من الرسائل الشخصية من شخص ما في المنتدى عليك إخبار مسؤول المنتدى, فإن لهم القدرة على منع أي مشترك من إرسال رسائل خاصة بتاتاً',
	),
	array(
		0	=> 'لقد استلمت رسالة مؤذية أو دعائية من شخص ما في هذا المنتدى !',
		1	=> 'نأسف أن نسمع ذلك. واجهة البريد الالكتروني تحتوي على عدة ضوابط لمنع هذه المشاكل ومتابعة المرسلين لمثل هذه الرسائل. عليك إرسال الرسالة بالكامل للمسؤول, من الضروري إرسال رأس الرسالة أيضاً (فهي تحتوي على من أرسل الرسالة). فإنهم سوف يستطيعون التصرف في ذلك',
	),
	array(
		0	=> '--',
		1	=> 'قائمة الأصدقاء والتجاهل',
	),
	array(
		0	=> 'ما هي قائمة الأصدقاء و التجاهل ؟',
		1	=> 'يمكنك استخدام القائمة لتنظيم أعضاء المنتدى الآخرين . الأعضاء المضافون في قائمة الأصدقاء سيدرجون في لوحة التحكم الشخصية وستتمكن من الوصول السريع إليهم لمعرفة حالة الاتصال أو إرسال رسالة خاصة . الأعضاء المضافون إلى قائمة التجاهل سيخفَونَ تلقائيا عنك ',
	),
	array(
		0	=> 'كيف يمكن إضافة / إلغاء الأعضاء من قائمة الأصدقاء أو التجاهل ؟',
		1	=> 'يمكنك إضافة الأعضاء إلى قائمتك الخاصة بطريقتين . في عرض ملف العضو هناك وصلة لإضافة العضو إلى قائمة الأصدقاء أو قائمة التجاهل . بدلاً من ذلك من لوحة التحكم الشخصية الخاصة بك يمكنك مباشرة إضافة العضو إلى قائمة الأصدقاء أو التجاهل عن طريق إضافة اسم العضو ويمكنك إلغاء اسم العضو من نفس الصفحة ',
	),
	array(
		0	=> '--',
		1	=> 'البحث في الأقسام',
	),
	array(
		0	=> 'كيف يمكنني البحث في الأقسام ؟',
		1	=> 'بإدخال كلمة البحث في حقل البحث الموجود في الصفحة الرئيسية أو صفحة عرض الساحة أو صفحة عرض الموضوع ويمكنك للبحث المتقدم الضغط على رابط البحث المتوفر أعلى الصفحات كلها ',
	),
	array(
		0	=> 'لماذا بحثي لا يعطي نتائجا ؟',
		1	=> 'من الممكن أن يكون بحثك مبهما و لا يتضمن الكلمات المفهرسة من  phpBB3 لذا ابحث مرة أخرى و كن أكثر تحديداً و استعمل الخيارات المتوفرة ضمن البحث المتقدم ',
	),
	array(
		0	=> 'لماذا نتائج بحثي صفحة فارغة ؟!',
		1	=> 'بحثك قد أعطى الكثير من النتائج مما قد يسبب بضغط على الخادم. لذا استخدم البحث المتقدم و كن أكثر تحديداً بالبحث بشروط معينة و ساحات معينة ',
	),
	array(
		0	=> 'كيف يمكن البحث عن عضو ؟',
		1	=> 'اذهب إلى صفحة الأعضاء واضغط على البحث عن عضو واملأ الخيارات والحقول لإتمام عملية البحث ',
	),
	array(
		0	=> 'كيف يمكن إيجاد المواضيع و المشاركات كلها الخاصة بي في المنتدى ؟',
		1	=> 'يمكنك ذلك بالضغط على خيار البحث عن مشاركات العضو من خلال لوحة التحكم الخاص بك أو من خلال صفحة عرض معلومات العضو . للبحث عن مواضيعك استخدم خيار صفحة البحث المتقدم وستجد الخيارات الخاصة بذلك ',
	),
	array(
		0	=> '--',
		1	=> 'قائمة الاشتراكات و المواضيع المفضلة',
	),
	array(
		0	=> 'ما هو الفرق بين قائمة الاشتراكات و المواضيع المفضلة ؟',
		1	=> 'المواضيع المفضلة في phpBB3 تشبه خيار الإضافة للمفضلة في المتصفح حيث لن تُعلَم بأية تحديثات على الموضوع . لكن يمكنك زيارة الموضوع لمعرفة آخر التحديثات عن طريق قائمة المواضيع المفضلة . لكن قائمة الاشتراكات ستُعلم بأي تحديث عن المواضيع المشترك بها بالطريقة التي تفضلها ',
	),
	array(
		0	=> 'كيف يمكنني الاشتراك في موضوع أو ساحة معينة ؟',
		1	=> 'للاشتراك لمتابعة ساحة معينة، عندما تدخل الساحة ستجد وصلة متابعة الساحة كذلك المواضيع يمكنك الاشتراك بها عندما ترد على الموضوع أو بالضغط على وصلة متابعة الموضوع ',
	),
	array(
		0	=> 'كيف يمكن إلغاء الاشتراك في موضوع أو ساحة معينة ؟',
		1	=> 'لإلغاء الاشتراك ، اذهب إلى لوحة التحكم الشخصية واتبع رابط إلغاء الاشتراك ',
	),
	array(
		0	=> '--',
		1	=> 'المرفقات',
	),
	array(
		0	=> 'ما هي أنواع المرفقات الممسوحة في هذا المنتدى ؟',
		1	=> 'كل مدير منتدى يمكنه السماح أو عدم السماح لأنواع معينة من المرفقات . إذا لم تكن متأكدا من أنواع المرفقات الممسوحة، اتصل بمدير الموقع ',
	),
	array(
		0	=> 'كيف يمكنني إيجاد المرفقات كلها الخاصة بي ؟',
		1	=> 'لإيجاد المرفقات الخاصة بك كلها اذهب إلى لوحة التحكم الشخصية واتبع الوصلة الخاصة بالمرفقات الموجودة بها ',
	),
	array(
		0	=> '--',
		1	=> 'مشاكل phpBB3',
	),
	array(
		0	=> 'من برمج هذا المنتدى ؟',
		1	=> 'هذا البرنامج (في صيغته غير المعدلة) تنتج, وتنشر وحقوقها phpBB Group. وهي متوفرة تحت ترخيص GNU General Public Licence ويمكن توزيعها مجاناً, انظر إلى الوصلة للمزيد من المعلومات ',
	),
	array(
		0	=> 'من ترجم هذا المنتدى وأين احصل على الدعم بالعربية ؟',
		1	=> 'ترجم المنتدى فريق الترجمة في <a href="http://www.phpbbarabia.com/" title="الدعم العربي لمنتديات phpBB">phpBBArabia</a> ويمكن الحصول على الدعم من خلال زيارة <a href="http://www.phpbbarabia.com/community/" title="منتدى الدعم الفني">منتدى الدعم الفني</a> للموقع و أيضا الأقسام الأخرى ',
	),	
	array(
		0	=> 'لماذا لا أجد ميزة معينة أريدها ؟',
		1	=> 'بُرمِج هذا السكربت وهو مرخص لمجموعة phpBB. إن كنت ترى من المناسب إضافة ميزة جديدة للبرنامج عليك زيارة موقع المجموعة في phpbb.com وانظر ما رأي مجموعة phpBB. الرجاء عدم نشر طلبات جديدة على موقع phpbb.com, المجموعة تستعمل سورس فورج لقرار المميزات الجديدة. الرجاء قراءة النماذج, ورؤية موقفنا من تلك الميزة واتبع النصائح الخاصة بها',
	),
	array(
		0	=> 'من اتصل به بخصوص مواضيع أو ردود غير قانونية أو غير لائقة ؟',
		1	=> 'عليك مراسلة مدير المنتدى. إن لم تعرف من يكون عليك التخاطب مع مشرف المنتدى واسأله عن مسؤول المنتدى. إن لم تحصل على رد فخاطب صاحب الموقع (تستطيع ذلك من خلال whois ) أو إذا كان المنتدى في موقع مجاني (مثل yahoo, free.fr, f2s.com, وغيرها), فخاطب إدارة الموقع أو إدارة سوء الاستغلال. عليك ملاحظة أن phpBB Group ليس لها أي تحكم ولا تتحمل أي مسؤولية عن كيفية أو مكان أو من الشخص الذي يستعمل هذا المنتدى. ليس هناك أي فائدة من مخاطبة phpBB Group لأي مواضيع قانونية (القبض والتحري, المسؤولية القانونية, التعليقات والسب العلني, وغيرها) لها علاقة مباشرة بموقع phpbb.com أو برنامج phpBB بذاته. إن أرسلت رسالة الكترونية لـ phpBB Group عن أي شخص ثالث يستعمل البرنامج فربما لن تستلم ردا',
	),
);

?>