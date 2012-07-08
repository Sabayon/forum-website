<?php
/**
*
* install.php [?Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-13 - phpBBArabia.com
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
        'ADMIN_CONFIG'                                => 'إعداد المدير العام',
        'ADMIN_PASSWORD'                        => 'كلمة المرور للمدير العام',
        'ADMIN_PASSWORD_CONFIRM'        => 'تأكيد تطابق كلمة المرور',
        'ADMIN_PASSWORD_EXPLAIN'        => 'ينبغي أن تتكون كلمة المرور من 6 إلى 30 خانة',
        'ADMIN_TEST'                                => 'فحص الإعداد',
        'ADMIN_USERNAME'                        => 'اسم المستخدم للمدير العام',
        'ADMIN_USERNAME_EXPLAIN'        => ' الرجاء كتابة اسم يتكون من 6 إلى 30 حرف ',
        'APP_MAGICK'                                => 'دعم Imagemagick [ المرفقات ]',
        'AUTHOR_NOTES'                                => 'ملاحظات الكاتب<br />» %s',
        'AVAILABLE'                                        => 'متوفر',
        'AVAILABLE_CONVERTORS'                => 'المنتديات المتوفرة للتحويل',

        'BEGIN_CONVERT'                                        => 'بدء عملية التحويل',
        'BLANK_PREFIX_FOUND'                        => 'الفحص الذي تم على جداولك يظهر نسخة مركبة بنجاح لا تستخدم أي سوابق',
        'BOARD_NOT_INSTALLED'                        => 'لم يوجد أي تركيب',
        'BOARD_NOT_INSTALLED_EXPLAIN'        => 'إن برنامج التحويل يتطلب وجود نسخة منصبة من phpBB3 لكي يعمل، نرجو منك المتابعة <a href="%s">وتنصيب phpBB3</a>',

        'CATEGORY'                                        => 'القسم',
        'CACHE_STORE'                                => 'نوع الملفات المؤقتة [ Cache ]',
        'CACHE_STORE_EXPLAIN'                => 'المسار الذي سيتم فيه حفظ الملفات المؤقتة , ملف النظام سيكون أفضل',
        'CAT_CONVERT'                                => 'تحويل',
        'CAT_INSTALL'                                => 'تنصيب',
        'CAT_OVERVIEW'                                => 'نظرة عامة',
        'CAT_UPDATE'                                => 'تحديث',
        'CHANGE'                                        => 'تغيــر',
        'CHECK_TABLE_PREFIX'                => 'الرجاء التأكد من سوابق الجداول ثم إعادة المحاولة',
        'CLEAN_VERIFY'                                => 'فحص وتنظيف البنية النهائية',
        'CLEANING_USERNAMES'                => 'تهذيب أسماء المستخدمين',
        'COLLIDING_CLEAN_USERNAME'        => '<strong>%s</strong> هو الاسم النظيف لـ :',
        'COLLIDING_USERNAMES_FOUND'        => 'وجد اسم مستخدم مكرر في قاعدة البيانات القديمة ، لإكمال التحويل الرجاء حذف أو تغيير أسماء هؤلاء الأعضاء بحيث يكون هناك عضو واحد فقط في المنتدى القديم لكل اسم مستخدم',
        'COLLIDING_USER'                        => '» رقم العضو: <strong>%d</strong> اسم المستخدم: <strong>%s</strong> (%d مشاركات)',
        'CONFIG_CONVERT'                        => 'تحويل الإعدادات',
        'CONFIG_FILE_UNABLE_WRITE'        => 'لا يمكن الكتابة على ملف الإعداد ، في الأسفل ستجد طرائق بديلة لإنشاء هذا الملف',
        'CONFIG_FILE_WRITTEN'                => 'كُتِب على ملف الإعداد بنجاح config.php ، تستطيع الآن التقدم إلى الخطوة الآتية من التركيب',
        'CONFIG_PHPBB_EMPTY'                => 'إعداد متغير phpBB3 لـ "%s" فارغ !',
        'CONFIG_RETRY'                                => 'إعادة المحاولة',
        'CONTACT_EMAIL_CONFIRM'                => 'تأكيد بريد المراسلة',
        'CONTINUE_CONVERT'                        => 'متابعة التحويل',
        'CONTINUE_CONVERT_BODY'                => 'لقد كُشِف عن محاولة مسبقة للتحويل. يمكنك الآن الاختيار بين البدء بتحويل جديد أو إكمال التحويل السابق',
        'CONTINUE_LAST'                                => 'متابعة اللمسات الأخيرة',
        'CONTINUE_OLD_CONVERSION'        => 'متابعة التحويل السابق',
        'CONVERT'                                        => 'تحويل',
        'CONVERT_COMPLETE'                        => 'انتهى التحويل',
        'CONVERT_COMPLETE_EXPLAIN'        => 'انتهيت الآن من تحويل منتداك إلى phpBB 3.0.x . تستطيع الآن تسجيل الدخول و <a href="../">تصفح منتداك</a> ، رجاءً تأكد من تحويل الإعدادت بالصورة المطلوبة فعّل منتداك عن طريق حذف مجلد التنصيب install. تذكر أن المساعدة على استعمال phpBB موجودة على الشبكة في <a href="http://www.phpbbarabia.com">منتدى الدعم الفني</a> ',
        'CONVERT_INTRO'                                => 'مرحباً بك في برنامج التحويل الى phpBB3',
        'CONVERT_INTRO_BODY'                => 'من هنا , تستطيع استيراد بيانات من نظام منتدى آخر (مُنصب) . اللائحة في الأسفل تظهر برامج التحويل المتوفرة حالياً . إذا لم يكن هناك أي برنامج تحويل في هذه القائمة يناسب المنتدى الذي تريد تحويله, الرجاء قم بزيارة موقعنا حيث ستجد المزيد من برامج التحويل جاهزة للتحميل',
        'CONVERT_NEW_CONVERSION'        => 'تحويل جديد',
        'CONVERT_NOT_EXIST'                        => 'المحول الذي حددته غير موجود',
        'CONVERT_OPTIONS'                        => 'خيارات',
        'CONVERT_SETTINGS_VERIFIED'        => 'لقد تم التحقق من المعلومات التي أُدخِلت . لبدء عملية التحويل , اضغط على الزر بالأسفل ',
        'CONV_ERR_FATAL'                        => 'خطأ في التحويل',

        'CONV_ERROR_ATTACH_FTP_DIR'                        => 'رفع المرفقات عبر FTP مفعل في المنتدى القديم . رجاءً عطّل خيار الرفع عبر FTP وتأكد من تحديد مجلد الرفع الصحيح , وبعدها ارفع الملفات المرفقة كلها إلى مجلد المرفقات الجديد. بمجرد الانتهاء من هذا, أعِد تشغيل المحول',
        'CONV_ERROR_CONFIG_EMPTY'                        => 'لا توجد أية معلومات متاحة لإعداد هذا المحول',
        'CONV_ERROR_FORUM_ACCESS'                        => 'غير قادر على إيجاد بيانات الدخول للمنتدى',
        'CONV_ERROR_GET_CATEGORIES'                        => 'غير قادر على تحديد الأقسام',
        'CONV_ERROR_GET_CONFIG'                                => 'غير قادر على استرجاع إعدادات المنتدى',
        'CONV_ERROR_COULD_NOT_READ'                        => 'لا يمكن الاتصال/قراءة "%s"',
        'CONV_ERROR_GROUP_ACCESS'                        => 'لا يمكن التحقق من المعلومات الخاصة بالمجموعات',
        'CONV_ERROR_INCONSISTENT_GROUPS'        => 'هناك تضارب في جدول المجموعات في add_bots() - ستحتاج إلى إضافة المجموعات الخاصة كلها يدوياً',
        'CONV_ERROR_INSERT_BOT'                                => 'لا يمكن إضافة bot إلى جدول الأعضاء',
        'CONV_ERROR_INSERT_BOTGROUP'                => 'لا يمكن إضافة bot إلى جدول bots',
        'CONV_ERROR_INSERT_USER_GROUP'                => 'لا يمكن إضافة الأعضاء إلى جدول user_group',
        'CONV_ERROR_MESSAGE_PARSER'                        => 'خطأ في كاتب الرسائل',
        'CONV_ERROR_NO_AVATAR_PATH'                        => 'ملاحظة المطور: ينبغي عليك تحديد $convertor[\'avatar_path\'] لاستعمال %s',
        'CONV_ERROR_NO_FORUM_PATH'                        => 'المسار المرتبط لمعلومات المنتدى لم يُحدّد',
        'CONV_ERROR_NO_GALLERY_PATH'                => 'ملاحظة المطور: ينبغي عليك تحديد $convertor[\'avatar_gallery_path\'] لاستعمال %s',
        'CONV_ERROR_NO_GROUP'                                => 'المجموعة "%1$s" لا يمكن إيجادها في  %2$s',
        'CONV_ERROR_NO_RANKS_PATH'                        => 'ملاحظة للمطور: ينبغي عليك تحديد $convertor[\'ranks_path\'] لاستعمال %s',
        'CONV_ERROR_NO_SMILIES_PATH'                => 'ملاحظة للمطور: ينبغي عليك تحديد $convertor[\'smilies_path\'] لاستعمال %s',
        'CONV_ERROR_NO_UPLOAD_DIR'                        => 'ملاحظة للمطور: ينبغي عليك تحديد $convertor[\'upload_path\'] لاستعمال %s',
        'CONV_ERROR_PERM_SETTING'                        => 'لا يمكن إضافة/تحديث إعداد الصلاحيات',
        'CONV_ERROR_PM_COUNT'                                => 'لا يمكن تحديد عدد الرسائل في مجلد الرسائل الخاصة',
        'CONV_ERROR_REPLACE_CATEGORY'                => 'لا يمكن إنشاء أقسام جديدة لاستبدالها بالأقسام القديمة',
        'CONV_ERROR_REPLACE_FORUM'                        => 'لا يمكن إنشاء منتدى جديد لاستبدال المنتدى القديم',
        'CONV_ERROR_USER_ACCESS'                        => 'غير قادر على استرجاع بيانات العضويات',
        'CONV_ERROR_WRONG_GROUP'                        => 'خطأ المجموعة "%1$s" موجود في %2$s',
        'CONV_OPTIONS_BODY'                                        => 'هذه الصفحة ستقوم بجمع البيانات المطلوبة للوصول إلى المنتدى المصدر، أدخِل بيانات قاعدة البيانات لمنتداك القديم. البرنامج المحول لن يقوم بتعديل أي شيء في هذه القاعدة. ويفضل أن يكون المنتدى المصدر معطلاً ليكون التحويل سلسلا وناجحا',
        'CONV_SAVED_MESSAGES'                                => 'الرسائل المحفوظة',

        'COULD_NOT_COPY'                        => 'لا يمكن نسخ الملف <strong>%1$s</strong> إلى <strong>%2$s</strong><br /><br />الرجاء التحقق من أن مسار المجلد موجود وأنه يقبل الكتابة',
        'COULD_NOT_FIND_PATH'                => 'لا يمكن إيجاد مسار المنتدى الذي حددته ، يرجى فحص الإعدادات ثم أعد المحاولة مرة أخرى<br />» المسار الذي حددته هو %s',

        'DBMS'                                                => 'نوع قاعدة البيانات',
        'DB_CONFIG'                                        => 'إعدادات قاعدة البيانات',
        'DB_CONNECTION'                                => 'الاتصال بقاعدة البيانات',
        'DB_ERR_INSERT'                                => 'خطأ في التركيب أمر <code>INSERT</code>',
        'DB_ERR_LAST'                                => 'خطأ في التركيب <var>query_last</var>',
        'DB_ERR_QUERY_FIRST'                => 'خطأ أثناء تشغيل <var>query_first</var>',
        'DB_ERR_QUERY_FIRST_TABLE'        => 'خطأ أثناء تشغيل <var>query_first</var>, %s ("%s")',
        'DB_ERR_SELECT'                                => 'خطأ أثناء تشغيل أمر <code>SELECT</code>',
        'DB_HOST'                                        => 'Database server أو hostname أو DSN',
        'DB_HOST_EXPLAIN'                        => 'DSN قياسي لمورد البيانات ومتوافق فقط مع تثبيت ODBC',
        'DB_NAME'                                        => 'اسم قاعدة البيانات',
        'DB_PASSWORD'                                => 'كلمة مرور قاعدة البيانات',
        'DB_PORT'                                        => 'منفذ <port> خادم قاعدة البيانات',
        'DB_PORT_EXPLAIN'                        => 'اتركه فارغاً إلا إذا كان الخادم يستعمل منفذ <port> غير القياسي',
        'DB_UPDATE_NOT_SUPPORTED'        => 'عذراً , لكن هذا السكربت لا يدعم الترقية من إصدار PhpBB قبل “%1$s”.الإصدار المستخدم لديك حالياً  “%2$s”. رجاءً رقـّي إلى إصدار سابق قبل تشغيل هذا السكربت. المساعدة في ذلك متاحة في منتديات الدعم الفني في  phpBBArabia.com.',
        'DB_USERNAME'                                => 'اسم مستخدم قاعدة البيانات',
        'DB_TEST'                                        => 'فحص الاتصال',
        'DEFAULT_LANG'                                => 'لغة المنتدى الافتراضية',
        'DEFAULT_PREFIX_IS'                        => 'برنامج التحويل لم يستطع إيجاد الجداول التي تبدأ بالسوابق التي أدخلتها. تأكد من أنك أدخلت المعلومات الصحيحة لمنتداك الذي تريد التحويل منه. سوابق الجداول الافتراضية لـ %1$s هي <strong>%2$s</strong>',
        'DEV_NO_TEST_FILE'                        => 'لم تحدد أية قيمة للمتحول test_file في برنامج التحويل. ليس من المفترض مشاهدة هذه الرسالة, الرجاء تبليغ هذه الرسالة إلى مبرمج السكربت',
        'DIRECTORIES_AND_FILES'                => 'الدليل وإعدادات الملف',
        'DISABLE_KEYS'                                => 'تعطيل المفاتيح',
        'DLL_FIREBIRD'                                => 'Firebird',
        'DLL_FTP'                                        => 'دعم اتصال FTP [ التركيب ]',
        'DLL_GD'                                        => 'دعم GD graphics [ التأكيد البصري ]',
        'DLL_MBSTRING'                                => 'دعم Multi-byte',
        'DLL_MSSQL'                                        => 'خادم MSSQL 2000+',
        'DLL_MSSQL_ODBC'                        => 'خادم MSSQL 2000+ من طرف ODBC',
        'DLL_MYSQL'                                        => 'MySQL',
        'DLL_MYSQLI'                                => 'MySQL مع امتداد MySQLi',
        'DLL_ORACLE'                                => 'Oracle',
        'DLL_POSTGRES'                                => 'PostgreSQL 7.x/8.x',
        'DLL_SQLITE'                                => 'SQLite',
        'DLL_XML'                                        => 'دعم<span dir="ltr">[ Jabber ]</span> XML',
        'DLL_ZLIB'                                        => 'دعم ضغط<span dir="ltr">zlib [ gz, .tar.gz, .zip ]</span>',
        'DL_CONFIG'                                        => 'تحميل ملف الإعداد',
        'DL_CONFIG_EXPLAIN'                        => 'ينبغي عليك تحميل الملف config.php إلى جهازك. ستحتاج إلى رفع الملف يدوياً, واستبدال أي ملف config.php موجود في مجلد ×.phpBB 3.0 . الرجاء التذكر أن رفع الملف ينبغي أن يكون على شكل ASCII (رجاءً راجع ملف المساعدة المرفق معه برنامج FTP الذي تستعمله إذا كنت غير متأكد كيف تفعل ذلك). عند رفعك الملف config.php يرجى الضغط على زر “انتهى” للذهاب إلى الخطوة الآتية',
        'DL_DOWNLOAD'                                => 'تحميل',


        'ENABLE_KEYS'                                => 'إعادة تفعيل المفاتيح. قد تأخذ العملية بعض الوقت',

        'FILES_OPTIONAL'                        => 'الملفات والمجلدات الاختيارية',
        'FILES_OPTIONAL_EXPLAIN'        => '<strong>اختياري</strong> - هذه الملفات, المجلدات أو إعدادات الصلاحيات غير مطلوبة. نظام التركيب سيحاول استعمال خصائص فنية لإنشائها إذا كانت غير موجودة أو لا يمكن الكتابة عليها. مهما كان, استخدام هذا الخيار سيساعد في تسريع عملية التركيب',
        'FILES_REQUIRED'                        => 'الملفات والمجلدات',
        'FILES_REQUIRED_EXPLAIN'        => '<strong>تنويه</strong> - phpBB يحتاج إلى صلاحية عرض / الكتابة  على بعض الملفات والمجلدات. إذا رأيت “غير موجود” ستحتاج لإنشاء الملف أو المجلد المطلوب. إذا رأيت “غير قابل للكتابة” ستحتاج إلى تعديل صلاحيات الملف أو المجلد للسماح لـ phpBB بالكتابة عليه',
        'FILLING_TABLE'                                => 'مليء الجدول <strong>%s</strong>',
        'FILLING_TABLES'                        => 'مليء الجداول',
        'FIREBIRD_DBMS_UPDATE_REQUIRED'                => 'phpBB لم تعد تدعم Firebird/Interbase سابقا للإصدار 2.1. رجاءً حدّث  Firebird المنصب لديك إلى على الأقل 2.1.0 قبل المتابعة في هذه الترقية .',

        'FINAL_STEP'                                => 'استكمال الخطوة الأخيرة',
        'FORUM_ADDRESS'                                => 'عنوان المنتدى',
        'FORUM_ADDRESS_EXPLAIN'                => 'هذا رابط المنتدى القديم, على سبيل المثال <samp>http://www.example.com/phpBB2/</samp>. إذا أدخلتَ عنوانا هنا ولم تتركه فارغاً فإن كل حركة في هذا العنوان ستُستَبدَل بعنوان منتداك الجديد مثل المشاركات والرسائل الخاصة والتواقيع',
        'FORUM_PATH'                                => 'مسار المنتدى',
        'FORUM_PATH_EXPLAIN'                => 'هذا هو المسار <strong>المرتبط</strong> لمنتداك القديم من طرف <strong>root تركيب phpBB</strong>',
        'FOUND'                                                => 'موجود',
        'FTP_CONFIG'                                => 'رفع ملف الإعداد عبر FTP',
        'FTP_CONFIG_EXPLAIN'                => 'phpBB اكتشف وجود موديول FTP على هذا الخادم. تستطيع محاولة تركيب config.php بهذه الطريقة إن أردت. ستحتاج إلى بعض المعلومات الضرورية الموجودة في الأسفل. تذكر كلمة المرور واسم المستخدم الخاص بخادمك ! (عليك بسؤال المستضيف عن هذه المعلومات إن كنت لا تعرفها)',
        'FTP_PATH'                                        => 'مسار FTP',
        'FTP_PATH_EXPLAIN'                        => 'هذا هو مسار phpBB ابتداءً من المجلد الرئيسي الخاص بك, مثال <samp>htdocs/phpBB3/</samp>',
        'FTP_UPLOAD'                                => 'رفع',

        'GPL'                                                => 'رخصة GPL العمومية',

        'INITIAL_CONFIG'                        => 'الإعدادات الأساسية',
        'INITIAL_CONFIG_EXPLAIN'        => 'الآن هذا التركيب يستوجب معرفة بعض معلومات خادمك لتشغيل phpBB. إذا لم تكن تعرف معلومات الاتصال بقاعدة البيانات يرجى مراسلة مستضيفك ليعطيها لك (في الحالة الأولى) أو استعمل منتديات الدعم. عند إدخالك البيانات يرجى مراجعة كل شيء قبل المتابعة',
        'INSTALL_CONGRATS'                        => 'مبـروك !',
        'INSTALL_CONGRATS_EXPLAIN'        => '<p>لقد ركبت <span dir="ltr">phpBB %1$s</span> بنجاح . رجاءً تابع باختيار أحد الخيارات فيما يأتي : phpBB3</p>
                <h2>تحويل منتدى موجود إلى phpBB3</h2>
                <p>برامج التحويل إلى phpBB تدعم التحويل من phpBB 2.0.x وأنظمة المنتديات الأخرى إلى phpBB3. إذا كان لديك منتدى تريد تحويله, يرجى <a href="%2$s">المتابعة إلى التحويل</a>.</p>
                <h2>انطلق مع منتداك الجديد phpBB3 !</h2>
 <p>بالضغط على الزر في الأسفل سيظهر لك نموذج لملء إحصائيات سترسل إلى phpBB سنكون شاكرين لك لو ساعدتنا بإرسال تلك المعلومات الإحصائية , بعد ذللك خذ الوقت لاستكشاف الخيارات المتاحة لك. تذكر أن ملف المساعدة موجود في صفحة <a href="http://www.phpbbarabia.com/">منتديات الدعم الفني</a>, راجع ملف <a href="%3$s">إقراني</a> لمعلومات مهمة.</p><p><strong>رجاءً احذف الآن أو انقل أو أعِد التسمية لمجلد install قبل استعمال منتداك. إذا لم يزل هذا المجلد موجوداً فإن لوحة تحكم المدير فقط ستكون متوفرة.</strong></p>',

        'INSTALL_INTRO'                                => 'مرحباً بك في عملية تنصيب phpBB3 ! ',

        'INSTALL_INTRO_BODY'                => 'عن طريق هذا الخيار, ستستطيع تنصيب phpBB3.</p><p>إذا أردت المتابعة , ستحتاج إلى إعدادات قاعدة البيانات. إذا لم تكن تعرف معلومات قاعدة البيانات, يرجى الاتصال بالمستضيف ليعطيها لك. لن تستطيع إكمال التركيب بدونها. ستحتاج إلى:</p>

        <ul>
                <li>نوع قاعدة البيانات - قاعدة البيانات التي سوف تستعملها.</li>
                <li>خادم قاعدة البيانات hostname أو DSN أو عنوان خادم قاعدة البيانات.</li>
                <li>منفذ خادم قاعدة البيانات <port> - منفذ قاعدة البيانات (في أغلب الحالات لن تحتاج هذه المعلومة).</li>
                <li>اسم قاعدة البيانات - اسم قاعدة البيانات على الخادم.</li>
                <li>اسم مستخدم وكلمة المرور إلى قاعدة البيانات - معلومات الدخول للاتصال بقاعدة البيانات.</li>
        </ul>

                
        <p><strong>ملاحظة:</strong> إذا كنت تستعمل SQLite, يجدر بك إدخال المسار بالكامل لملف قاعدة البيانات في حقل DSN وترك حقول اسم المستخدم وكلمة المرور فارغين.</p>

        <p>قواعد البيانات التي يدعمها phpBB3:</p>
        <ul>
                <li>MySQL 3.23 أو اعلى (MySQLi مدعومه)</li>
                <li>PostgreSQL 7.3+</li>
                <li>SQLite 2.8.2+</li>
                <li>Firebird 2.1+</li>
                <li>MS SQL Server 2000 او اعلى (مباشرة او من خلال ODBC)</li>
                <li>Oracle</li>
        </ul>
        
        <p>سيتم عرض قواعد البيانات المتوفرة على خادمك فقط',
        'INSTALL_INTRO_NEXT'                => 'لمتابعة التنصيب, الرجاء الضغط على الزر فيالأسفل',
        'INSTALL_LOGIN'                                => 'دخول',
        'INSTALL_NEXT'                                => 'الخطوة الآتية',
        'INSTALL_NEXT_FAIL'                        => 'هناك بعض المشاكل في الفحوصات ويجدر بك تصحيحها قبل الانتقال إلى الخطوة الآتية. إن تجاهل هذا الأمر قد ينتج عنه تنصيب غير مكتمل',
        'INSTALL_NEXT_PASS'                        => 'الفحوصات الأساسية كلها تمت بنجاح وتستطيع الانتقال إلى الخطوة الآتية. إذا غيّرت أية صلاحيات أو موديولات ... إلى غير ذلك ، وتريد إعادة التجربة يمكنك عمل ذلك إن أردت',
        'INSTALL_PANEL'                                => 'لوحة التنصيب',
        'INSTALL_SEND_CONFIG'                => 'لسوء الحظ phpBB لا يستطيع كتابة معلومات الإعداد مباشرة على ملف config.php. قد يكون سبب هذا الخطأ عدم وجود الملف أو أنه لا يقبل الكتابة. بعض الخيارات ستتدرج في الأسفل لكي تتمكن من إنهاء تركيب ملف config.php',
        'INSTALL_START'                                => 'بدء التنصيب',
        'INSTALL_TEST'                                => 'إعادة التجربة',
        'INST_ERR'                                        => 'خطأ في التنصيب',
        'INST_ERR_DB_CONNECT'                => 'لا يمكن الاتصال بقاعدة البيانات, شاهد رسالة الخطأ في الأسفل',
        'INST_ERR_DB_FORUM_PATH'        => 'ملف قاعدة البيانات المحدد هو دليل داخل مجلد منتداك ، عليك وضع هذا الملف في مكان لا يمكن الوصول إليه عبر المتصفح',
        'INST_ERR_DB_NO_ERROR'                => 'لا توجد أية رسالة خطأ',
        'INST_ERR_DB_NO_MYSQLI'                => 'إصدار MySQL المركب على هذا الجهاز غير متوافق مع خيار “MySQL with MySQLi Extension” الذي حددته. يرجى محاولة خيار “MySQL” بدلاً منه',
        'INST_ERR_DB_NO_SQLITE'                => 'إصدار SQLite extension الذي ركبته قديم جداً, ينبغي ترقيته على الأقل إلى الإصدار 2.8.2',
        'INST_ERR_DB_NO_ORACLE'                => 'إصدار Oracle المركب على هذا الجهاز يستلزم وضع خيار <var>NLS_CHARACTERSET</var> على <var>UTF8</var>.ينبغي عليك تحديث التركيب إلى 9.2+ أو تغيير الخيار',
        'INST_ERR_DB_NO_FIREBIRD'        => 'إصدار Firebird المركب على هذا الجهاز أقدم من 2.1, الرجاء التحديث إلى نسخة أحدث',
        'INST_ERR_DB_NO_FIREBIRD_PS'=> 'قاعدة البيانات المحددة لـ Firebird لديه حجم الصفحة أقل من 8192, ينبغي أن تكون على الأقل 8192',
        'INST_ERR_DB_NO_POSTGRES'        => 'قاعدة البيانات التي حددتها لم تُنشَأ على نظام <var>UNICODE</var> أو <var>UTF8</var>. حاول تركيب قاعدة البيانات على نظام <var>UNICODE</var> أو <var>UTF8</var>',
        'INST_ERR_DB_NO_NAME'                => 'لم تحدد قاعدة البيانات',
        'INST_ERR_EMAIL_INVALID'        => 'البريد الإلكتروني الذي أدخلته غير صحيح',
        'INST_ERR_EMAIL_MISMATCH'        => 'البريد الإلكتروني المدخل غير متطابق',
        'INST_ERR_FATAL'                        => 'خطأ في التنصيب',
        'INST_ERR_FATAL_DB'                        => 'حدث خطأ غير معروف في قاعدة البيانات قد يكون سبب ذلك أن العضو لا يمكن صلاحيات لـ<code>إنشاء الجداول</code> أو <code>إضافة</code> البيانات ... إلى غير ذلك. توجد بعض المعلومات في الأسفل. رجاءً راسل مستضيفك أولاً أو قسم الدعم الفني لمنتديات phpBB',
        'INST_ERR_FTP_PATH'                        => 'لا يمكن التغيير إلى المجلد المحدد, يرجى مراجعة المسار',
        'INST_ERR_FTP_LOGIN'                => 'لا يمكن الدخول إلى خادم FTP, الرجاء التحقق من اسم المستخدم وكلمة المرور',
        'INST_ERR_MISSING_DATA'                => 'ينبغي عليك ملء الحقول كلها في هذه الصفحة',
        'INST_ERR_NO_DB'                        => 'لا يمكن تحميل موديول PHP لنوع قاعدة البيانات المحددة',
        'INST_ERR_PASSWORD_MISMATCH'        => 'كلمات المرور التي أدخلتها غير متطابقة',
        'INST_ERR_PASSWORD_TOO_LONG'        => 'كلمة المرور التي أدخلتها كبيرة جداً. أقصى طول ينبغي ألا يتعدى 30 حرف',
        'INST_ERR_PASSWORD_TOO_SHORT'        => 'كلمة المرور التي أدخلتها صغيرة جداً. أقل طول ينبغي أن يكون أكبر من 6 أحرف',
        'INST_ERR_PREFIX'                        => 'الجداول ذات السوابق التي حددتها موجودة مسبقاً, يرجى اختيار غيرها',
        'INST_ERR_PREFIX_INVALID'        => 'سوابق الجدول التي حددتها غير صحيحة لقاعدة بياناتك. يرجى المحاولة مرة أخرى مع حذف بعض الرموز مثل الفاصلة',
        'INST_ERR_PREFIX_TOO_LONG'        => 'سوابق الجدول التي حددتها طويلة جداً. أقصى طول هو %d حرف',
        'INST_ERR_USER_TOO_LONG'        => 'اسم المستخدم الذي استعملته طويل جداً. أقصى طول هو 20 حرف',
        'INST_ERR_USER_TOO_SHORT'        => 'اسم المستخدم الذي أدخلته قصير جداً. أقل طول مسموح هو 3 أحرف',
        'INVALID_PRIMARY_KEY'                => 'حرف أولي غير صالح : %s',

        'LONG_SCRIPT_EXECUTION'                => 'يرجى ملاحظة أن هذه العملية قد تأخذ فترة ... رجاء لا توقف السكربت قبل الانتهاء من العملية !',
        
        // mbstring        
        'MBSTRING_CHECK'                                                => 'فحص امتداد <samp>mbstring</samp>',
        'MBSTRING_CHECK_EXPLAIN'                                => '<strong>مطلوب</strong> <samp>mbstring</samp> هي ملحق PHP والتي تقدم الدعم للأحرف متعددة البايتات multibyte . خصائص mbstring ليست متوافقة مع phpBB , لذا ينبغي تعطيلها ',
        'MBSTRING_FUNC_OVERLOAD'                                => 'حمل زائد على الدالة',
        'MBSTRING_FUNC_OVERLOAD_EXPLAIN'                => '<var>mbstring.func_overload</var> ينبغي تعيينها إما 0 أو 4',
        'MBSTRING_ENCODING_TRANSLATION'                        => 'Transparent character encoding',
        'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'        => '<var>mbstring.encoding_translation</var> ينبغي تعيينها إلى 0',
        'MBSTRING_HTTP_INPUT'                                        => 'HTTP input character conversion',
        'MBSTRING_HTTP_INPUT_EXPLAIN'                        => '<var>mbstring.http_input</var> ينبغي اختيارها كـ <samp>مرور</samp>',
        'MBSTRING_HTTP_OUTPUT'                                        => 'HTTP output character conversion',
        'MBSTRING_HTTP_OUTPUT_EXPLAIN'                        => '<var>mbstring.http_output</var> ينبغي اختيارها كـ <samp>مرور</samp>',

        'MAKE_FOLDER_WRITABLE'                => 'يرجى التأكد من أن المجلد موجود ويقبل الكتابة ثم حاول مجدداً:<br />»<strong>%s</strong>',
        'MAKE_FOLDERS_WRITABLE'                => 'يرجى التأكد من أن المجلدات موجودة وتقبل الكتابة ثم حاول مجدداً:<br />»<strong>%s</strong>',

        'MYSQL_SCHEMA_UPDATE_REQUIRED'  => 'قواعد بيانات MySQL المخصصه لـ phpBB قديمة جداً ، phpBB كشف ان MySQL 3.x/4.x , لكن الخادم يعمل على MySQL من نسخة %2s.<br /><strong>قبل ان تبدء في عملية التحديث ينبغي عليك ترقية قواعد البيانات</strong><br /><br />يمكنك الاطلاع على هذه المقالة [ بالانجليزية ] <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a>. اذا استمرت المشكله اطرح مشكلتك في موقع الدعم <a href="http://www.phpbbarabia.com/community/" title="الدعم العربي لمنتديات phpBB">phpBBArabia</a>.',

        'NAMING_CONFLICT'                        => 'تشابه في الأسماء: %s و %s لديهم نفس الاسم<br /><br />%s',
        'NEXT_STEP'                                        => 'متابعة للخطوة الآتية',
        'NOT_FOUND'                                        => 'لا يمكن إيجاد',
        'NOT_UNDERSTAND'                        => 'لا يمكن فهم %s #%d, جدول %s ("%s")',
        'NO_CONVERTORS'                                => 'لا يوجد برامج تحويل متاحة للاستعمال',
        'NO_CONVERT_SPECIFIED'                => 'لم تحدد المحول',
        'NO_LOCATION'                                => 'لا يمكن تحديد المكان. إذا كنت تعرف أن Imagemagick رُكّب, فينبغي عليك إضافة مكانه لاحقاً في لوحة تحكم المدير',
        'NO_TABLES_FOUND'                        => 'لم يوجد أي جدول',

        'OVERVIEW_BODY'                                => 'مرحباً بك في phpBB3 !<br /><br />تعدّ <span dir="ltr">phpBB™</span> المنتدى مفتوح المصدر الأكثر انتشارا و شعبية حول العالم ويعدّ هذا الإصدار حصيلة سبع سنوات طويلة من البرمجة و كتابة الأوامر و الدوال ، فتماماً كسابقاتها phpBB2 فإن phpBB3 غنية بالخصائص و سهلة الاستخدام ومدعومة بالكامل سواء من طرف فريق <a href="http://www.phpbb.com" target="_blank">phpBB</a> أو من طرف الداعم العربي الرسمي <a href="http://www.phpbbarabia.com" title="phpBBArabia الداعم العربي الرسمي لمنتديات phpBB" target="_blank">phpBBArabia</a> .<br /><br />ما يجدر بالذكر أن phpBB3 تحسنت أكثر عن سابقتها phpBB2 التي كانت ومازالت حتى الآن ذات شعبية كبيرة وذلك بإضافة أكثر الخصائص طلباً و واجهة أعدت لتكون قياسية و أكثر صداقة لمحركات البحث . لذا نحن نأمل أن يفوق هذا الإصدار توقعاتكم !<br /><br />نظام التنصيب هذا سيساعدك على تنصيب phpBB3 ، ترقية إصدارات phpBB3 وكذلك التحويل إلى phpBB3 من مختلف أنواع المنتديات الأخرى بما في ذلك phpBB2 .<br/><br />للمزيد من المعلومات, نحن نشجعك على قراءة <a href="../docs/INSTALL.html">دليل التنصيب</a> وأيضا للاطلاع على رخصة صدور phpBB3 أو لمعرفة كيفية الحصول على الدعم الرجاء الضغط على الخيار المناسب من القائمة الجانبية و للاستمرار في عملية التنصيب الرجاء الضغط على زر التنصيب أعلاه أو اختيار زر تحويل للانتقال لعملية التحويل من أنواع المنتديات الأخرى إلى phpBB3 ',

        'PCRE_UTF_SUPPORT'                                => 'دعم PCRE UTF-8',
        'PCRE_UTF_SUPPORT_EXPLAIN'                => 'phpBB <strong>لن يعمل</strong> إذا كان تركيب PHP لديك غير متوافق مع UTF-8 في امتداد PCRE',
        'PHP_GETIMAGESIZE_SUPPORT'                        => 'PHP function getimagesize() متوفرة',
        'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'        => '<strong>مطلوب</strong> - ليعمل phpBB بشكل صحيح ، دالة getimagesize ينبغي أن تكون متوفرة',
        'PHP_OPTIONAL_MODULE'                        => 'إضافات اختيارية',
        'PHP_OPTIONAL_MODULE_EXPLAIN'        => '<strong>اختياري</strong> - هذه الموديلات أو التطبيقات اختيارية. مهما كان, إذا كانت مفعلة ستفعل خصائص متقدمة',
        'PHP_SUPPORTED_DB'                                => 'قواعد البيانات المدعومة',
        'PHP_SUPPORTED_DB_EXPLAIN'                => '<strong>مطلوب</strong> - ينبغي على الأقل أن يكون أحد قواعد البيانات متوافقة مع PHP. إذا كانت موديلات قواعد البيانات غير متوفرة فينبغي عليك الاتصال بمستضيفك ',
        'PHP_REGISTER_GLOBALS'                        => 'إعداد PHP <var>register_globals</var> معطل',
        'PHP_REGISTER_GLOBALS_EXPLAIN'        => 'phpBB ستظل تعمل إذا كان الخيار فعالا, لكن إن كان ممكناً, يفضل أن يعطّل register_globals على تركيب PHP لأسباب أمنية',
        'PHP_SAFE_MODE'                                        => 'الوضع الآمن (Safe Mode)',
        'PHP_SETTINGS'                                        => 'إصدار وإعدادات PHP',
        'PHP_SETTINGS_EXPLAIN'                        => '<strong>مطلوب</strong> - ينبغي عليك أن تستخدم على الأقل إصدار 4.3.3 من PHP عند طلب تركيب phpBB. إذا كان <var>الوضع الآمن (Safe Mode)</var> يعرض في الأسفل أن تركيب PHP يستعمله. قد يؤدي هذا إلى اختزال بعض خيارات وخصائص المدير',
        'PHP_URL_FOPEN_SUPPORT'                        => 'إعداد PHP <var>allow_url_fopen</var> فعال',
        'PHP_URL_FOPEN_SUPPORT_EXPLAIN'        => '<strong>اختياري</strong> - هذا الإعداد اختياري, مهما كان دوال phpBB مثل الصور الشخصية off-site لن تعمل جيداً دون هذا الخيار. ',
        'PHP_VERSION_REQD'                                => 'إصدار PHP >= 4.3.3',
        'POST_ID'                                                => 'رقم المشاركة',
        'PREFIX_FOUND'                                        => 'فحص الجداول أظهر تركيباً صحيحاً باستعمال <strong>%s</strong> سوابق الجدول',
        'PREPROCESS_STEP'                                => 'تنفيذ إجراءات أولية functions/queries',
        'PRE_CONVERT_COMPLETE'                        => ' اكتملت الخطوات السابقة كلها بنجاح. تستطيع الآن البدء في التحويل الفعلي. يرجى ملاحظة أنه عليك فعل بعض الأعمال يدوياً. بعد التحويل, خصوصاً التأكد من الصلاحيات, 
اعِد بناء محرك البحث إذا كان ضرورياً وتأكد أيضا من أن الملفات نسخِت جيداً, مثل الصور الشخصية والابتسامات',
        'PROCESS_LAST'                                        => 'إنهاء آخر الخطوات',

        'REFRESH_PAGE'                                => 'حدث الصفحة لمتابعة التحويل',
        'REFRESH_PAGE_EXPLAIN'                => 'إذا اخترت نعم, فبرنامج التحويل سيحدّث الصفحة لمتابعة التحويل بعد إنهاء كل خطوة. إذا كانت هذه عمليتك الأولى في التحويل لتجربة ومعرفة أي أخطاء مستقبلاً, نقترح عليك اختيار لا',
        'REQUIREMENTS_TITLE'                => 'توافق التركيب',
        'REQUIREMENTS_EXPLAIN'                => 'قبل متابعة عملية التنصيب سيفحص phpBB  إعدادات وملفات خادمك للتأكد من أنك تستطيع تركيب واستعمال phpBB. يرجى التأكد من أنك قد قرأت النتائج جيداً ولا تتابع قبل انتهاء الفحوصات المطلوبة كلها بنجاح. إذا كنت تريد استعمال أي خصائص أثناء التجارب الاختيارية, ينبغي عليك التأكد من أن هذه التجارب ناجحة أيضاً',
        'RETRY_WRITE'                                => 'إعادة محاولة الكتابة على ملف الإعداد',
        'RETRY_WRITE_EXPLAIN'                => 'إذا أردت تستطيع تغيير صلاحيات الملف config.php للسماح لـ phpBB للكتابة عليه. إذا أردت ذلك عليك ضغط زر إعادة المحاولة. تأكد من إعادة صلاحيات config.php إلى السابق بعد أن ينتهي phpBB من التنصيب',

        'SCRIPT_PATH'                                => 'مسار السكربت',
        'SCRIPT_PATH_EXPLAIN'                => 'مسار مجلد phpBB مرتبط بعنوان الموقع , مثال <samp>/phpBB3</samp>',
        'SELECT_LANG'                                => 'اختيار اللغة',
        'SERVER_CONFIG'                                => 'إعدادات الخادم',
        'SEARCH_INDEX_UNCONVERTED'        => 'لم يحوّل فهرس البحث',
        'SEARCH_INDEX_UNCONVERTED_EXPLAIN'        => 'فهرس البحث السابق لم يحوّل. عمليات البحث ستعطي نتائج فارغة دائماً ، لإنشاء فهرس بحث جديد اذهب إلى لوحة تحكم المدير, اختر الصيانة ثم اختر فهرسة البحث من القائمة الفرعية',
        'SOFTWARE'                                        => 'برنامج المنتدى',
        'SPECIFY_OPTIONS'                        => 'تحديد خيارات التحويل',
        'STAGE_ADMINISTRATOR'                => 'معلومات المدير العام',
        'STAGE_ADVANCED'                        => 'إعدادات متقدمة',
        'STAGE_ADVANCED_EXPLAIN'        => 'الإعدادات في هذه الصفحة هي ضرورية فقط إذا كنت تعرف أنك تريد وضع شيء آخر مختلف عن الافتراضي. إذا كنت غير متأكد, فقط تابع الخطوة الآتية, فهذه الإعدادات يمكن تغييرها لاحقاً من لوحة تحكم الإدارة',
        'STAGE_CONFIG_FILE'                        => 'ملف الإعداد',
        'STAGE_CREATE_TABLE'                => 'إنشاء جداول قاعدة البيانات',
        'STAGE_CREATE_TABLE_EXPLAIN'=> 'جداول قاعدة البيانات المستعملة من طرف phpBB 3.0 أنشِأت وتشعبت مع بعض البيانات الأولية. انتقل إلى الخطوة الآتية لإنهاء تركيب phpBB',
        'STAGE_DATABASE'                        => 'إعدادات الاتصال بقاعدة البيانات',
        'STAGE_FINAL'                                => 'المرحلة النهائية',
        'STAGE_INTRO'                                => 'مقدمة',
        'STAGE_IN_PROGRESS'                        => 'جاري التحويـل',
        'STAGE_REQUIREMENTS'                => 'متطلبات التنصيب',
        'STAGE_SETTINGS'                        => 'الإعدادات',
        'STARTING_CONVERT'                        => 'جاري بدء التحويل',
        'STEP_PERCENT_COMPLETED'        => 'الخطوة <strong>%d</strong> من <strong>%d</strong>',
        'SUB_INTRO'                                        => 'مقدمة',
        'SUB_LICENSE'                                => 'رخصة الإصدار',
        'SUB_SUPPORT'                                => 'تقديم الدعم',
        'SUCCESSFUL_CONNECT'                => 'تم الاتصال بقاعدة البيانات بنجاح',
        'SUPPORT_BODY'                                => 'الدعم الكامل سيقدم للنسخة الثابتة من إصدار phpBB3 بشكل مجاني وهذا الدعم سيقدم للآتي /</p><ul><li>التنصيب</li><li>الإعداد</li><li>الإجابات على الأسئلة تقنية</li><li>المشاكل ناتجة عن أخطاء في برمجة النسخ</li><li>التحديث من إصدارات مرشحة سابقه (RC) إلى الإصدار الثابت</li><li>التحويل من phpBB 2.0.x إلى phpBB3</li><li>التحويل من برامج المنتديات الأخرى إلى phpBB3 </a></li></ul><p>نحن نشجع مستخدمي الإصدارات التجريبية او المرشحة من phpBB3 بالترقية إلى أخر إصدار من النسخة لضمان سلامة منتداهم و استمراره.</p><h2>التعديلات / الإستايلات</h2><p>من أجل مواضيع متعلقة بالتعديلات (MODs), الرجاء مراجعة القسم الخاص بالتعديلات على الموقع في <a href="http://www.phpbbarabia.com/community/viewforum.php?f=43" target="_blank">قسم الهاكات</a>.<br /> أما الاستفسارات المتعلقة بالاستايلات وجميع ما يخص ذلك الرجاء مراجعة القسم الخاص بالاستايلات في <a href="http://www.phpbbarabia.com/community/viewforum.php?f=42" target="_blank">قسم الاستايلات</a>.</p><br /><br /><br /><h2>مراجع إضافية</h2><p>نشجع أيضا زيارة <a href="http://www.phpbbarabia.com/kb.php" target="_blank">موسوعة المعرفة</a> ستجد بها الكثير من الإجابات على الأسئلة الشائعة حول التنصيب و الترقية و غير ذلك .<br />كذلك ننصح بزيارة <a href="http://www.phpbbarabia.com/documentation.php" target="_blank">المستندات</a> للاطلاع على أهم الشروح و الخطوات بالتفصيل لما تريد .</p>',
        'SYNC_FORUMS'                                => 'بدء مزامنة المنتديات',
        'SYNC_POST_COUNT'                        => 'بدء مزامنة عدد المشاركات',
        'SYNC_POST_COUNT_ID'                => 'بدء مزامنة عدد المشاركات ابتداء من <var>القيمة</var> %1$s إلى %2$s',
        'SYNC_TOPICS'                                => 'بدء مزامنة المواضيع',
        'SYNC_TOPIC_ID'                                => 'مزامنة المواضيع من <var>topic_id</var> %1$s to %2$s',

        'TABLES_MISSING'                        => 'لا يمكن إيجاد هذه الجداول<br />» <strong>%s</strong>',
        'TABLE_PREFIX'                                => 'سوابق جداول قاعدة البيانات',
        'TABLE_PREFIX_SAME'                        => 'سوابق الجداول ينبغي أن تكون نفسها المستخدمة في البرنامج الذي تحول منه .<br />» سوابق الجدول المحددة كانت %s',
        'TESTS_PASSED'                                => 'تم الفحص بنجاح',
        'TESTS_FAILED'                                => 'فشل في الفحص',

        'UNABLE_WRITE_LOCK'                        => 'لا يمكن الكتابة فوق الملف المغلق',
        'UNAVAILABLE'                                => 'غير متوفر',
        'UNWRITABLE'                                => 'غير قابل للكتابة',
        'UPDATE_TOPICS_POSTED'                => 'توليد معلومات المواضيع المنشورة',
        'UPDATE_TOPICS_POSTED_ERR'        => 'وقع خطأ أثناء توليد معلومات المواضيع المنشورة. تستطيع إعادة هذه الخطوة في لوحة تحكم الإدارة بعد أن ينتهي التحويل',
        'VERIFY_OPTIONS'                        => 'التحقق من خيارات التحويل',
        'VERSION'                                        => 'الإصدار',

        'WELCOME_INSTALL'                        => 'مرحباً بك في تنصيب phpBB3',
        'WRITABLE'                                        => 'قابل للكتابة',
));

// Updater
$lang = array_merge($lang, array(
        'ALL_FILES_UP_TO_DATE'                => 'تم تحديث وترقية ملفات المنتدى كلها إلى آخر إصدار يتوجب عليك الآن <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics"">تسجيل الدخول إلى منتداك</a> والتأكد من أن كل شيء يعمل بالشكل الصحيح وأيضاً احذف أو اعِد تسمية ملف install ! v رجاءً أرسل لنا معلومات محدّثة حول سيرفرك و إعدادات منتداك خاصية<a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">إرسال الإحصائيات</a>في ACP',
        'ARCHIVE_FILE'                                => 'ملفات المصدر ضمن الأرشيف',

        'BACK'                                => 'رجوع',
        'BINARY_FILE'                => 'ملف Binary',
        'BOT'                                => 'Spider/Robot',

        'CHANGE_CLEAN_NAMES'                        => ' الطريقة للتأكد من اسم مستخدم لا يستخدم من أطراف عدة قد تغيرت ، هناك بعض المستخدمين لهم نفس الأسماء عند المقارنة بالطريقة الجديدة ، عليك حذف أو إعادة تسمية هؤلاء المستخدمين لتكون متأكدا أن كل اسم مستخدم فقط من مستخدم واحد قبل أن يمكنك الإكمال',
        'CHECK_FILES'                                        => 'التحقق من الملفات',
        'CHECK_FILES_AGAIN'                                => 'التحقق من الملفات مرة أخرى',
        'CHECK_FILES_EXPLAIN'                        => 'في الخطوة الآتية ستُفحَص الملفات كلها للتأكد من أنها محدثة – قد تأخذ هذه العملية بعض الوقت إن كان هذا الفحص الأول',
        'CHECK_FILES_UP_TO_DATE'                => 'إن قاعدة البيانات الخاصة بمنتداك قد رُقيَت إلى آخر إصدار يتوجب عليك الآن فحص ملفات المنتدى للتأكد من ترقيتها و تحديثها إلى آخر إصدار من phpBB',
        'CHECK_UPDATE_DATABASE'                        => 'متابعة عملية التحديث',
        'COLLECTED_INFORMATION'                        => 'معلومات عن الملفات المجمعة كلها',
        'COLLECTED_INFORMATION_EXPLAIN'        => 'في القائمة معلومات عن الملفات التي تحتاج إلى تحديث ، رجاءً إقرأ المعلومات أمام كل ملف لتعلم كيف ترقّي وتحدّث بنجاح ',
        'COLLECTING_FILE_DIFFS'                        => 'جاري تحضير اختلافات الملف ...',
        'COMPLETE_LOGIN_TO_BOARD'                => 'يتوجب عليك الآن <a href="../ucp.php؟mode=login">تسجيل الدخول إلى منتداك</a> والتأكد من أن كل شيء يعمل بالشكل الصحيح وأيضاً احذف أو اعِد تسمية ملف install !',
        'CONTINUE_UPDATE_NOW'                        => 'متابعة عملية التحديث الآن',
        'CONTINUE_UPDATE'                                => 'إكمال التحديث الآن',                                        // Shown after file upload to indicate the update process is not yet finished
        'CURRENT_FILE'                                        => 'بدء الكشف عن التضاربات - كود الملف الاصلي قبل التحديث',
        'CURRENT_VERSION'                                => 'الإصدار الحالي',

        'DATABASE_TYPE'                                                => 'نوع قاعدة البيانات',
        'DATABASE_UPDATE_INFO_OLD'                        => 'ملف تحديث قاعدة البيانات قديم ، تأكد من رفع النسخة الصحيحة من الملف',
        'DELETE_USER_REMOVE'                                => 'حذف العضو وإزالة المشاركات',
        'DELETE_USER_RETAIN'                                => 'حذف العضو ولكن احتفظ بالمشاركات',
        'DESTINATION'                                                => 'الملف الهدف',
        'DIFF_INLINE'                                                => 'Inline',
        'DIFF_RAW'                                                        => 'Raw unified diff',
        'DIFF_SEP_EXPLAIN'                                        => 'إنهاء الملف الحالي / بدء ملف التحديث الجديد',
        'DIFF_SIDE_BY_SIDE'                                        => 'جنباً إلى جنب',
        'DIFF_UNIFIED'                                                => 'Unified diff',
        'DO_NOT_UPDATE'                                                => 'لا تحدّث هذا الملف',
        'DONE'                                                                => 'انتهى',
        'DOWNLOAD'                                                        => 'تحميل',
        'DOWNLOAD_AS'                                                => 'تحميل كـ',
        'DOWNLOAD_UPDATE_METHOD_BUTTON'                => 'تحميل أرشيف الملفات المعدّلة ( مستحسن )',
        'DOWNLOAD_CONFLICTS'                                => 'تحميل التضاربات لهذا الملف',
        'DOWNLOAD_CONFLICTS_EXPLAIN'                => 'البحث عن &lt;&lt;&lt; لاستعراض التضاربات',
        'DOWNLOAD_UPDATE_METHOD'                        => 'تحميل أرشيف الملفات المعدلة',
        'DOWNLOAD_UPDATE_METHOD_EXPLAIN'        => 'بمجرد تحميلها ينبغي عليك فك حزمة الأرشيف. ستجد الملفات المعدلة التي تحتاج إلى أن ترفعها داخل مجلد المنتدى الرئيسي. الرجاء رفع الملفات إلى أماكنها المحددة. وبعد أن ترفع كل الملفات, الرجاء فحص الملفات مرة أخرى بواسطة الزر في الأسفل',

        'ERROR'                        => 'خطأ',
        'EDIT_USERNAME'        => 'تعديل اسم المستخدم',

        'FILE_ALREADY_UP_TO_DATE'                => 'الملف محدث سابقاً',
        'FILE_DIFF_NOT_ALLOWED'                        => 'الملف غير قابل ليكون diffed',
        'FILE_USED'                                                => 'معلومات الاستعمال من',
        'FILES_CONFLICT'                                => 'الملفات المتعارضة',
        'FILES_CONFLICT_EXPLAIN'                => 'الملفات الآتية معدلة ولا تمثل الملفات الأصلية من النسخة القديمة. phpBB قررت أن هذه الملفات تشكل تعارضا إذا ما تم محاولة إدماجها. الرجاء تحقق من الملفات وحاول إصلاحها أو أكمل التحديث باختيار طريقة الدمج المفضلة. إذا حللت التعارض يدوياً أفحص الملفات مرة أخرى قبل أن تعدلهم. أنت قادر أيضا على الاختيار بين طرق الدمج المفضلة لكل ملف. الأولى ستنتج في ملف حيث سطر التعارض من الملف القديم سيفقد, والآخر سينتج في خسارة التغييرات من الملف الجديد',
        'FILES_MODIFIED'                                => 'الملفات المعدلة',
        'FILES_MODIFIED_EXPLAIN'                => 'الملفات الآتية معدلة ولا تمثل الملفات الأصلية من النسخة القديمة ، الملفات المحدثة ستدمَج بين تعديلاتك والملفات الجديدة',
        'FILES_NEW'                                                => 'الملفات الجديدة',
        'FILES_NEW_EXPLAIN'                                => 'الملفات الآتية غير موجودة أثناء التنصيب ',
        'FILES_NEW_CONFLICT'                        => 'ملفات متعارضة جديدة',
        'FILES_NEW_CONFLICT_EXPLAIN'        => 'الملفات الآتية جديدة داخل آخر نسخة و لكن حُدِّد أن هناك من قبل ملفات بنفس الاسم ونفس المكان. هذه الملفات ستستبدل بالملفات الجديدة',
        'FILES_NOT_MODIFIED'                        => 'الملفات الغير معدلة',
        'FILES_NOT_MODIFIED_EXPLAIN'        => 'الملفات الآتية ليست معدلة وتمثل ملفات phpBB الأصلية من النسخة التي تريد التحديث منها',
        'FILES_UP_TO_DATE'                                => 'تم تحديث الملفات سابقاً',
        'FILES_UP_TO_DATE_EXPLAIN'                => 'الملفات الآتية محدثة من قبل ولا تحتاج أي تحديث',
        'FTP_SETTINGS'                                        => 'إعدادات FTP',
        'FTP_UPDATE_METHOD'                                => 'رفـع FTP',

        'INCOMPATIBLE_UPDATE_FILES'                => 'ملفات التحديث التي تم أوجِدَت غير متوافقة مع إصدار التركيب. إصدارك المركب هو %1$s وملفات التحديث هي للترقية من %2$s إلى %3$s',
        'INCOMPLETE_UPDATE_FILES'                => 'الملفات المحدثة غير كاملة',
        'INLINE_UPDATE_SUCCESSFUL'                => 'تحدّثت قاعدة البيانات بنجاح ، الآن ستحتاج لمتابعة عملية التحديث',

        'KEEP_OLD_NAME'                => 'احتفظ باسم المستخدم',

        'LATEST_VERSION'                => 'أحدث إصدار',
        'LINE'                                        => 'السطر',
        'LINE_ADDED'                        => 'تمت إضافته',
        'LINE_MODIFIED'                        => 'معدل',
        'LINE_REMOVED'                        => 'محذوف',
        'LINE_UNMODIFIED'                => 'غير محدد',
        'LOGIN_UPDATE_EXPLAIN'        => 'لكي تتمكن من تحديث منتداك ينبغي عليك تسجيل الدخول أولاً',

        'MAPPING_FILE_STRUCTURE'        => 'لتسهيل الرفع إليك خريطة توزيع الملفات والتي تطابق تنصيب phpbb',

        'MERGE_MODIFICATIONS_OPTION'        => 'دمج التعديلات',

        'MERGE_NO_MERGE_NEW_OPTION'        => 'لا تتدمج - استعمل ملفاً جديداً',
        'MERGE_NO_MERGE_MOD_OPTION'        => 'لا تتدمج - استعمل الملفات المركبة الحالية',
        'MERGE_MOD_FILE_OPTION'                => 'ادمج الملفات واستخدم كود الملف المعدل لاستبدال البلوكات المتعارضة',
        'MERGE_NEW_FILE_OPTION'                => 'ادمج الملفات واستخدم كود الملف الجديد لاستبدال البلوكات المتعارضة',
        'MERGE_SELECT_ERROR'                => 'تضارب طريقة دمج الملفات لم تختر بالطريقة الصحيحة',
        'MERGING_FILES'                                => 'دمج الاختلافات',
        'MERGING_FILES_EXPLAIN'                => 'حالياً تجمع تعديلات الملف النهائية.<br /><br />فضلاً انتظر حتى تكمل phpBB العمليات كلها على الملفات المتغيرة',
        
        'NEW_FILE'                                                => 'ملف تحديث جديد',
        'NEW_USERNAME'                                        => 'اسم مستخدم جديد',
        'NO_AUTH_UPDATE'                                => 'غير مسموح بالتحديث',
        'NO_ERRORS'                                                => 'لا أخطاء',
        'NO_UPDATE_FILES'                                => 'لم تحدّث الملفات الآتية',
        'NO_UPDATE_FILES_EXPLAIN'                => 'الملفات الآتية جديدة أو معدّلة لكن المجلد يوصف على أنه غير موجود في التنصيب. إذا كانت اللائحة تحتوي على ملفات موجودة في مجلدات أخرى مثل language/ أو styles/ فإنه سيتوجب عليك تحديث بنية المجلد ، والتحديث ربما لن يكتمل',
        'NO_UPDATE_FILES_OUTDATED'                => 'لم يعثَر على مجلد التحديث. تأكد من أنك رفعت الملفات بشكل صحيح..<br /><br /> نسختك تظهر بأنها  <strong>ليست</strong> محدثة لآخر نسخة. التحديث موجود لنسختك من phpBB  %1$s, الرجاء زيارة <a href="http://www.phpbbarabia.com" rel="external">http://www.phpbbarabia.com/</a> لتحميل أداة التحديث من الإصدارة %2$s  إلى الإصدارة %3$s',
        'NO_UPDATE_FILES_UP_TO_DATE'        => 'الإصدار هو الأحدث حتى الآن. ليس هناك حاجة لتشغيل أداة التحديث ، إذا أردت أن تقوم بفحص لملفاتك نرجو التأكد بأنك تستخدم أداة التحديث الصحيحة',
        'NO_UPDATE_INFO'                                => 'لا يمكن العثور على معلومات ملف التحديث',
        'NO_UPDATES_REQUIRED'                        => 'ليس هناك حاجة للتحديث',
        'NO_VISIBLE_CHANGES'                        => 'لا يوجد تغييرات مرئية',
        'NOTICE'                                                => 'ملاحظة',
        'NUM_CONFLICTS'                                        => 'عدد التضاربات',
        'NUMBER_OF_FILES_COLLECTED'                => 'تم إيجاد اختلافات الملفات لـ %1$d لـ %2$d تم فحصها.<br />الرجاء الانتظار إلى أن تُفحَص الملفات كلها',

        'OLD_UPDATE_FILES'                => 'ملفات التحديث قديمة . ملفات التحديث هذه هي للتحديث من pbpbb%1$s إلى phpBB %2$s  ولكن الإصدار الأخير من phpBB هو %3$s ',

        'PACKAGE_UPDATES_TO'                                => 'الحزمة الحالية حدّثَت إلى الإصدار',
        'PERFORM_DATABASE_UPDATE'                        => 'أداه تحديث قاعدة البيانات',
        'PERFORM_DATABASE_UPDATE_EXPLAIN'        => 'في الأسفل سوف تجد زرا لتحديث قاعدة البيانات.تحديث قاعدة البيانات قد يأخذ وقتاً طويلاً، لذا الرجاء عدم إيقاف الصفحة إلا إذا تأكدت أنه توقف تماماً. بعد إتمام تحديث القاعدة كل ما عليك هو اتّباع الرابط المقدم لإتمام عملية التحديث',
        'PREVIOUS_VERSION'                                        => 'الإصدار السابق',
        'PROGRESS'                                                        => 'التقدم',

        'RESULT'                                        => 'النتيجة',
        'RUN_DATABASE_SCRIPT'                => 'تحديث قاعدة البيانات الآن',

        'SELECT_DIFF_MODE'                        => 'اختر diff mode',
        'SELECT_DOWNLOAD_FORMAT'        => 'اختر شكل تحميل الملف',
        'SELECT_FTP_SETTINGS'                => 'اختر إعدادات FTP',
        'SHOW_DIFF_CONFLICT'                => 'شاهد الاختلافات/التضاربات',
        'SHOW_DIFF_FINAL'                        => 'عرض ملف النتيجة',
        'SHOW_DIFF_MODIFIED'                => 'شاهد اختلافات الدمج',
        'SHOW_DIFF_NEW'                                => 'عرض ملف المحتويات',
        'SHOW_DIFF_NEW_CONFLICT'        => 'شاهد الاختلافات',
        'SHOW_DIFF_NOT_MODIFIED'        => 'شاهد الاختلافات',
        'SOME_QUERIES_FAILED'                => 'بعض التعليمات فشلت أثناء التنفيذ، التعليمات والأخطاء سوف توضع في الأسفل',
        'SQL'                                                => 'SQL',
        'SQL_FAILURE_EXPLAIN'                => 'لا يوجد شيء لتقلق حياله. التحديث سوف يستمر. إذا فشل التحديث على الإكمال قد تحتاج لطلب المساعدة من منتدى الدعم. أنظر للصفحة <a href="../docs/README.html">إقراني</a> لمزيد من التفاصيل والنصائح',
        'STAGE_FILE_CHECK'                        => 'تدقيق الملفات',
        'STAGE_UPDATE_DB'                        => 'تحديث قاعدة البيانات',
        'STAGE_UPDATE_FILES'                => 'تحديث الملفات',
        'STAGE_VERSION_CHECK'                => 'التحقق من الإصدار',
        'STATUS_CONFLICT'                        => 'الملفات المعدلة والناتج عنها التعارض',
        'STATUS_MODIFIED'                        => 'الملف المعدل',
        'STATUS_NEW'                                => 'ملف جديد',
        'STATUS_NEW_CONFLICT'                => 'تضارب في الملف الجديد',
        'STATUS_NOT_MODIFIED'                => 'ملف غير معدل',
        'STATUS_UP_TO_DATE'                        => 'تم تحديث الملف سابقاً',

        'TOGGLE_DISPLAY'                        => 'إظهار/إخفاء القائمة',
        'TRY_DOWNLOAD_METHOD'                => 'ربما تريد تجريب طريقة تحميل الملفات المعدلة.<br />هذه الطريقة دائما تنجح و هي الطريقة المستحسنة للتحديث.',
        'TRY_DOWNLOAD_METHOD_BUTTON'=> 'جرب هذه الطريقة الآن',

        'UPDATE_COMPLETED'                                => 'انتهى التحديث',
        'UPDATE_DATABASE'                                => 'تحديث قاعدة البيانات',
        'UPDATE_DATABASE_EXPLAIN'                => 'في الخطوة الآتية ستحدّث قاعدة البيانات',
        'UPDATE_DATABASE_SCHEMA'                => 'تحديث محتويات قاعدة البيانات',
        'UPDATE_FILES'                                        => 'تحديث الملفات',
        'UPDATE_FILES_NOTICE'                        => 'الرجاء التأكد من تحديث ملفات منتداك أيضاً. هذا الملف يقوم فقط بتحديث قاعدة البيانات',
        'UPDATE_INSTALLATION'                        => 'تحديث تركيب phpBB',
        'UPDATE_INSTALLATION_EXPLAIN'        => 'عن طريق هذا الخيار, سيكون من الممكن تحديث تركيب منتداك phpBB إلى آخر نسخة.<br />أثناء التقدم ستُفحص ملفاتك كلها. ستتمكن من فحص الاختلافات والملفات كلها قبل البدء بتحديثها.<br /><br />ملف التحديث نفسه يستطيع أن ينتهي على طريقتين مختلفتين.</p><h2>التحديث اليدوي</h2><p>مع هذا التحديث ليس عليك سوى تحميل مجموعة الملفات الخاصة بالتعديل للتأكد من أنك لن تفقد ملفاتك المعدلة عند القيام بذلك . بعد تحميل هذه الصفحة تحتاج الى تحميل الملفات يدويا الى المسار الصحيح في phpBB ستكون مرحلة الفحص مرة أخرى لنرى إذا كان وُضعَت الملفات في الموقع الصحيح</p><h2>تحديث بواسطة FTP</h2><p>هذه الطريقة مشابهة للأولى ولكن من دون الحاجة إلى تحميل الملفات وتحميل الملفات المتغيرة ، وسيتم ذلك لك ! من أجل استخدام هذه الطريقة تحتاج لمعرفة التفاصيل الخاصة بك منذ دخول FTP سوف يطلب تسجيل الدخول منك بالنسبة لها. وبمجرد الانتهاء سوف تنتقل إلى التحقق من الملف مرة أخرى للتأكد من استكمال كل ما حصل بشكل صحيح !<br /><br />',
        'UPDATE_INSTRUCTIONS'                        => '
        
                <h1>الإعلان عن الإصدار</h1>

                <p>رجاءً إقرأ <a href="%1$s" title="%1$s"><strong>الإعلان عن إطلاق آخر نسخة</strong></a> قبل متابعة الترقية, فقد تحتوي على معلومات مفيدة. قد تحتوي على روابط التحميل كما سجل التعديلات</p>

                <br />

                <h1>كيف تحدّث منتداك بحزمة التحديث التلقائي</h1>

                <p>الطريقة المثلى لتحديث تركيب منتداك المقدمة هنا تعمل فقط مع حزمة التحديث التلقائي. تستطيع أيضا تحديث تركيب المنتدى بالطرق الموضحة في ملف INSTALL.html. خطوات تحديث phpBB3 تلقائياً هي :</p>
                
                <ul style="margin-left: 20px; font-size: 1.1em;">
                        <li>اذهب إلى صفحة التحميل في <a href="http://www.phpbbarabia.com" title="الداعم العربي لمنتديات phpBB" traget="_blank">phpBBArabia.com</a> وحمّل الأرشيف المناسب لـ "حزمة التحديث التلقائية لـ phpBB".<br /><br /></li>
                        <li>فُك الضغط عن الأرشيف.<br /><br /></li>
                        <li>ارفع الملفات غير المضغوطة إلى مجلد التركيب install في المجلد الرئيسي بمنتداك (حيث يوجد ملف config.php ).<br /><br /></li>
                </ul>

                <p>بمجرد رفعها سيكون المنتدى معطلا للأعضاء العاديين بسبب وجود مجلد التركيب install الذي رفعته الآن.<br /><br />
                <strong><a href="%2$s" title="%2$s">الآن ابدأ بخطوات التحديث بالذهاب عبر متصفحك إلى مجلد التركيب</a>.</strong><br />
                <br />
                سيتم إرشادك بعد ذلك خطوة بخطوة خلال عملية التحديث، وسيتم تنبيهك عند انتهاء العملية.
                </p> 
        ',
        'UPDATE_INSTRUCTIONS_INCOMPLETE'        => '
        
                <h1>أوجدت عملية تحديث غير مكتملة</h1>
        
                <p>phpBB وجدت عملية تحديث تلقائية غير مكتملة. يرجى التأكد من كل خطوة قمت بها في أداة التحديث التلقائي. بالأسفل ستجد الرابط مجدداً, أو اذهب الى مجلد install مباشرة.</p>
        ',
        'UPDATE_METHOD'                                        => 'طريقة التحديث',
        'UPDATE_METHOD_EXPLAIN'                        => 'تستطيع الآن اختيار طريقة التحديث المفضلة لديك. باستعمال طريقة FTP سنقدم لك نموذجاً يحتاج إلى كتابة معلومات حساب FTP. بهذه الطريقة ستنتقل الملفات تلقائياً إلى المكان الجديد و أخذ نسخة احتياطية من الملفات القديمة بامتداد .bak. إذا اخترت تحميل الملفات المعدلة ستستطيع فك الضغط عليهم ورفعه إلى المسار الصحيح يدوياً',
        'UPDATE_REQUIRES_FILE'                        => 'برنامج الترقية يطلب أن يكون الملف التالي موجوداً: %s',
        'UPDATE_SUCCESS'                                => 'تحدّثت بنجاح',
        'UPDATE_SUCCESS_EXPLAIN'                => 'تحدّثت الملفات كلها بنجاح. في الخطوة الآتية سيتم التحقق مرة أخرى من أن الملفات كلها تحدّثت جيداً',
        'UPDATE_VERSION_OPTIMIZE'                => 'تحديث الإصدار ومعاينة الجداول',
        'UPDATING_DATA'                                        => 'تحديث البيانات',
        'UPDATING_TO_LATEST_STABLE'                => 'تحديث قاعدة البيانات إلى آخر إصدار',
        'UPDATED_VERSION'                                => 'تحديث الإصدار',
        'UPLOAD_METHOD'                                        => 'طريقة الرفع',
        
        'UPDATE_DB_SUCCESS'                                => 'تحدثت قاعدة البيانات بنجاح',
        'USER_ACTIVE'                                        => 'عضو مفعل',
        'USER_INACTIVE'                                        => 'عضو غير مفعل',

        'VERSION_CHECK'                                        => 'التحقق من الإصدار',
        'VERSION_CHECK_EXPLAIN'                        => 'اضغط هنا لترى إذا كان المنتدى الخاص بك  يعمل على آخر إصدار من phpBB',
        'VERSION_NOT_UP_TO_DATE'                => 'المنتدى الخاص بك يعمل على آخر إصدار، الرجاء متابعة عملية التحديث',
        'VERSION_NOT_UP_TO_DATE_ACP'        => 'في الأسفل ستجد رابطاً للإعلان عن النسخة الأحدث والطريقة التي يتوجب عليك استخدمها للتحديث',
        'VERSION_NOT_UP_TO_DATE_TITLE'        => 'المنتدى الخاص بك لا يعمل على آخر إصدار',
        'VERSION_UP_TO_DATE'                        => 'المنتدى الخاص بك يعمل على آخر إصدار، لا يوجد إصدارات متوفرة حالياً لهذا الإصدار من phpBB. ربما تريد الإكمال بأي حال لفحص صحة الملفات',
        'VERSION_UP_TO_DATE_ACP'                => 'المنتدى الخاص بك يعمل على آخر إصدار، لا يوجد إصدارات متوفرة حالياً لهذا الإصدار من phpBB. لا تحتاج لتحديث منتداك الآن',
        'VIEWING_FILE_CONTENTS'                        => 'عرض محتويات الملف',
        'VIEWING_FILE_DIFF'                                => 'مشاهدة الملفات المختلفة',

        'WRONG_INFO_FILE_FORMAT'                => 'معلومات خاطئة لترتيب الملف',
));

// Default database schema entries...
$lang = array_merge($lang, array(
        'CONFIG_BOARD_EMAIL_SIG'                => 'شكراً, إدارة المنتدى',
        'CONFIG_SITE_DESC'                                => 'وصف مختصر للمنتدى',
        'CONFIG_SITENAME'                                => 'اسم الموقع',

        'DEFAULT_INSTALL_POST'                        => 'هذا مثال على مشاركة في منتديات phpBB.كل شيء يبدو أنه يعمل بشكل ممتاز . تستطيع الآن حذف هذه المشاركة إن أردت أو تعديلها وأكمل ضبط إعدادات منتداك. خلال عملية التنصيب أنشِأ القسم الأول والساحة الأولى وأعِدّت صلاحيات مناسبة من أجل المجموعات إذا قررت أن تحذف هذا القسم لا تنسَ أن تعيذن الصلاحيات إلى كل المجموعات التي ستنشؤها.من الأفضل أن تعيد تسمية القسم الأول والساحة الأولى وتنسخ الصلاحيات منهم حين تنشئ أقساما أو ساحات جديدة .',
        
        'EXT_GROUP_ARCHIVES'                        => 'Archives',
        'EXT_GROUP_DOCUMENTS'                        => 'Documents',
        'EXT_GROUP_DOWNLOADABLE_FILES'        => 'Downloadable Files',
        'EXT_GROUP_FLASH_FILES'                        => 'Flash Files',
        'EXT_GROUP_IMAGES'                                => 'Images',
        'EXT_GROUP_PLAIN_TEXT'                        => 'Plain Text',
        'EXT_GROUP_QUICKTIME_MEDIA'                => 'Quicktime Media',
        'EXT_GROUP_REAL_MEDIA'                        => 'Real Media',
        'EXT_GROUP_WINDOWS_MEDIA'                => 'Windows Media',

        'FORUMS_FIRST_CATEGORY'                        => 'القسم الأول',
        'FORUMS_TEST_FORUM_DESC'                => 'هذا مجرد منتدى تجريبي',
        'FORUMS_TEST_FORUM_TITLE'                => 'منتدى تجريبي 1',

        'RANKS_SITE_ADMIN_TITLE'                => 'مدير الموقع',
        'REPORT_WAREZ'                                        => 'المشاركة تحتوي على روابط لبرامج قرصنة',
        'REPORT_SPAM'                                        => 'المشاركة المبلغة قد تحتوي على إعلان لموقع أخر أو برنامج أخر',
        'REPORT_OFF_TOPIC'                                => 'المشاركة المبلغة هي خارج الموضوع',
        'REPORT_OTHER'                                        => 'المشاركة المبلغة لا تتعلق بأي قسم من الأقسام , نرجو استخدام حقل المعلومات المقدم',

        'SMILIES_ARROW'                                        => 'Arrow',
        'SMILIES_CONFUSED'                                => 'Confused',
        'SMILIES_COOL'                                        => 'Cool',
        'SMILIES_CRYING'                                => 'Crying or Very Sad',
        'SMILIES_EMARRASSED'                        => 'Embarrassed',
        'SMILIES_EVIL'                                        => 'Evil or Very Mad',
        'SMILIES_EXCLAMATION'                        => 'Exclamation',
        'SMILIES_GEEK'                                        => 'Geek',
        'SMILIES_IDEA'                                        => 'Idea',
        'SMILIES_LAUGHING'                                => 'Laughing',
        'SMILIES_MAD'                                        => 'Mad',
        'SMILIES_MR_GREEN'                                => 'Mr. Green',
        'SMILIES_NEUTRAL'                                => 'Neutral',
        'SMILIES_QUESTION'                                => 'Question',
        'SMILIES_RAZZ'                                        => 'Razz',
        'SMILIES_ROLLING_EYES'                        => 'Rolling Eyes',
        'SMILIES_SAD'                                        => 'Sad',
        'SMILIES_SHOCKED'                                => 'Shocked',
        'SMILIES_SMILE'                                        => 'Smile',
        'SMILIES_SURPRISED'                                => 'Surprised',
        'SMILIES_TWISTED_EVIL'                        => 'Twisted Evil',
        'SMILIES_UBER_GEEK'                                => 'Uber Geek',
        'SMILIES_VERY_HAPPY'                        => 'Very Happy',
        'SMILIES_WINK'                                        => 'Wink',

        'TOPICS_TOPIC_TITLE'                        => 'أهلا بك في phpBB3',
));

?>
