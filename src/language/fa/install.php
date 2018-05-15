<?php
/**
*
* install [English]
*
* @package language
* @version $Id: install.php,v 1.131 2007/11/18 11:48:18 acydburn Exp $
* @copyright (c) 2005 phpBB Group
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
	'ADMIN_CONFIG'				=> 'تنظيمات موسس',
	'ADMIN_PASSWORD'			=> 'كلمه عبور موسس',
	'ADMIN_PASSWORD_CONFIRM'	=> 'تكرار كلمه عبور موسس',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'كلمه عبور از حداق 6 و حداكثر 30 كاراكتر باشد',
	'ADMIN_TEST'				=> 'چك كردن تنظيمات موسس',
	'ADMIN_USERNAME'			=> 'نام كاربري موسس (مدير كل)',
	'ADMIN_USERNAME_EXPLAIN'	=> 'نام كاربري بين 3 تا 20 كاراكتر باشد',
	'APP_MAGICK'				=> 'Imagemagick support [ Attachments ]',
	'AUTHOR_NOTES'				=> 'راهنمايي ناشر<br />» %s',
	'AVAILABLE'					=> 'موجود',
	'AVAILABLE_CONVERTORS'		=> 'مبدل هاي موجود',

	'BEGIN_CONVERT'					=> 'شروع تبديل',
	'BLANK_PREFIX_FOUND'			=> 'A scan of your tables has shown a valid installation using no table prefix.',
	'BOARD_NOT_INSTALLED'			=> 'هيچ نسخه نصب شده اي يافت نشد !',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> '<br /> توسط اين بخش شما مي توانيد ديتابيس ساير نسخه هاي phpBB و ساير سيستم هاي انجمن ساز را تبديل به ديتابيس phpBB 3 نماييد.<a href="%s">براي اين كار ابتدا بايد مراحل نصب phpBB 3 را دنبال نماييد</a>.',

	'CATEGORY'					=> 'رسته',
	'CACHE_STORE'				=> 'Cache type',
	'CACHE_STORE_EXPLAIN'		=> 'The physical location where data is cached, filesystem is preferred.',
	'CAT_CONVERT'				=> 'تبديل',
	'CAT_INSTALL'				=> 'نصب',
	'CAT_OVERVIEW'				=> 'معرفي',
	'CAT_UPDATE'				=> 'به روز رساني',
	'CHANGE'					=> 'تغيير',
	'CHECK_TABLE_PREFIX'		=> 'Please check your table prefix and try again.',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'CLEANING_USERNAMES'		=> 'Cleaning usernames',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> is the clean username for:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Colliding usernames were found on your old board. In order to complete the conversion please delete or rename these users so that there is only one user on your old board for each clean username.',
	'COLLIDING_USER'			=> '» user id: <strong>%d</strong> username: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'It was not possible to write the configuration file. Alternative methods for this file to be created are presented below.',
	'CONFIG_FILE_WRITTEN'		=> 'فايل configuration با موفقيت نوشته شد',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for “%s” is empty.',
	'CONFIG_RETRY'				=> 'Retry',
	'CONTACT_EMAIL_CONFIRM'		=> 'تكرار ايميل ارتباطي',
	'CONTINUE_CONVERT'			=> 'Continue conversion',
	'CONTINUE_CONVERT_BODY'		=> 'A previous conversion attempt has been determined. You are now able to choose between starting a new conversion or continuing the conversion.',
	'CONTINUE_LAST'				=> 'Continue last statements',
	'CONTINUE_OLD_CONVERSION'	=> 'Continue previously started conversion',
	'CONVERT'					=> 'تبديل',
	'CONVERT_COMPLETE'			=> 'تبديل انجام شد',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'بورد شما با موفقيت به phpBB 3 تبديل شد. اكنون مي توانيد <a href="../">با كليك روي انجا به بوردتان وارد شويد</a>. لطفا قبل از پاك كردن فولدر install بررسي كنيد كه تمام تنظيمات صحيح باشد. در  <a href="http://www.phpbb.com/support/documentation/3.0/">اسناد phpBB 3</a> و<a href="http://www.phpbb.com/community/viewforum.php?f=46">انجمن هاي پشتيباني فارسي</a> مي توانيد اطلاعات بيشتري پيدا كنيد',
	'CONVERT_INTRO'				=> 'به مبدل عمومي phpBB خوش آمديد',
	'CONVERT_INTRO_BODY'		=> '<br /> در ليست زير ، بورد هايي كه مي توانيد به phpBB تبديل كنيد ذكر شده اند.اگر بورد مورد نظر شما در ليست موجود نيست ، ماژول آن را بايد در يافت نمماييد.',
	'CONVERT_NEW_CONVERSION'	=> 'تبديل جديد',
	'CONVERT_NOT_EXIST'			=> 'مبدل مورد نظر وجود ندارد',
	'CONVERT_OPTIONS'			=> 'تنظيمات',
	'CONVERT_SETTINGS_VERIFIED'	=> 'اطلاعات با موفقيت پذيرفته شد.براي ادامه تبديل روي دكمه زير كليك كنيد.',
	'CONV_ERR_FATAL'			=> 'خطاي ناجور در تبديل',
	'CONVERT_INTRO_BODY'		=> '<br /> در ليست زير ، بورد هايي كه مي توانيد به phpBB تبديل كنيد ذكر شده اند.اگر بورد مورد نظر شما در ليست موجود نيست ، ماژول آن را بايد در يافت نمماييد.',
	'CONVERT_NEW_CONVERSION'	=> 'تبديل جديد',
	'CONVERT_NOT_EXIST'			=> 'مبذل تعيين شده يافت نشد',
	'CONVERT_OPTIONS'			=> 'تنظيمات',
	'CONVERT_SETTINGS_VERIFIED'	=> 'اطلاعات با موفقيت پذيرفته شد.براي ادامه تبديل روي دكمه زير كليك كنيد.',
	'CONV_ERR_FATAL'			=> 'خطاي ناجور در تبديل',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for attachments is enabled at the old board. Please disable the FTP upload option and make sure a valid upload directory is specified, then copy all attachment files to this new web accessible directory. Once you have done this, restart the convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'There is no configuration information available for the conversion.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Unable to get forum access information.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Unable to get categories.',
	'CONV_ERROR_GET_CONFIG'				=> 'Could not retrieve your board configuration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Unable to access/read “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Unable to get group authentication information.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistency in groups table detected in add_bots() - you need to add all special groups if you do it manually.',
	'CONV_ERROR_INSERT_BOT'				=> 'Unable to insert bot into users table.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Unable to insert bot into bots table.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Unable to insert user into user_group table.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Message parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note to developer: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'The relative path to the source board has not been specified.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note to developer: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group “%1$s” could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note to developer: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note to developer: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note to developer: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Unable to insert/update permission setting.',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Unable to insert new forum replacing old category.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Unable to insert new forum replacing old forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Unable to get user authentication information.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Wrong group “%1$s” defined in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'لطفا فيلد هاي زير را با اطلاعات درست پركنيد؛اين مبدل در ديتابيس اوليه شما تغييري به وجود نخواهد آورد و اطلاعات را به ديتابيسي كه phpBB 3 اكنون در آن نصب است منتقل مي كند.در طول عمليات انجمن شما غير فعال خواهد شد.',
	'CONV_SAVED_MESSAGES'				=> 'پيام ذخيره شده',

	'COULD_NOT_COPY'			=> 'Could not copy file <strong>%1$s</strong> to <strong>%2$s</strong><br /><br />Please check that the target directory exists and is writable by the webserver.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />» %s was specified as the source path.',

	'DBMS'						=> 'نوع ديتابيس',
	'DB_CONFIG'					=> 'تنظيمات ديتابيس',
	'DB_CONNECTION'				=> 'اتصال ديتابيس',
	'DB_ERR_INSERT'				=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'DB_HOST'					=> 'Database server hostname or DSN',
	'DB_HOST_EXPLAIN'			=> '<p><font color="#FF0000">اگر نمي دانيد اين چيست ، آن را خالي بگذاريد !</font></p>
 <br/>',
	'DB_NAME'					=> 'نام ديتابيس',
	'DB_PASSWORD'				=> 'كلمه عبور ديتابيس',
	'DB_PORT'					=> 'Database server port',
	'DB_PORT_EXPLAIN'			=> '<p><font color="#FF0000">اگر نمي دانيد اين چيست ، آن را خالي بگذاريد !</font></p>
',
	'DB_USERNAME'				=> 'نام كاربري ديتابيس',
	'DB_TEST'					=> 'بررسي اتصال به ديتابيس',
	'DEFAULT_LANG'				=> 'زبان پيش فرض انجمن',
	'DEFAULT_PREFIX_IS'			=> 'The convertor was not able to find tables with the specified prefix. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'DIRECTORIES_AND_FILES'		=> 'Directory and file setup',
	'DISABLE_KEYS'				=> 'Disabling keys',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Remote FTP support [ Installation ]',
	'DLL_GD'					=> 'GD graphics support [ Visual Confirmation ]',
	'DLL_MBSTRING'				=> 'Multi-byte character support',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML support [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib compression support [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download config',
	'DL_CONFIG_EXPLAIN'			=> 'You may download the complete config.php to your own PC. You will then need to upload the file manually, replacing any existing config.php in your phpBB 3.0 root directory. Please remember to upload the file in ASCII format (see your FTP application documentation if you are unsure how to achieve this). When you have uploaded the config.php please click “Done” to move to the next stage.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Done',

	'ENABLE_KEYS'				=> 'Re-enabling keys. This can take a while.',

	'FILES_OPTIONAL'			=> 'فایل ها و  پوشه های اختیاری',
	'FILES_OPTIONAL_EXPLAIN'	=> 'رعایت موارد زیر الزامی نیست و سیستم تلاش می کند از راه های دیگر آن را جبران کند، اما بهتر است این موارد نیز رعایت شوند.',
	'FILES_REQUIRED'			=> 'فایل ها و پوشه ها',
	'FILES_REQUIRED_EXPLAIN'	=> 'لیست موارد زیر باید حتما موجود و قابل نوشتن باشد.در غیر اینصورت به مرحله بعدی نصب راه نخواهید یافت.',
	'FILLING_TABLE'				=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'پركردن تيبل ها',
	'FINAL_STEP'				=> 'برو به اخرين مرحله',
	'FORUM_ADDRESS'				=> 'نشاني انجمن',
	'FORUM_ADDRESS_EXPLAIN'		=> 'نشاني انجمن شما،مثلا : <samp>http://www.Maghsad.com/phpBB2/</samp>. If an address is entered here and not left empty every instance of this address will be replaced by your new board address within messages, private messages and signatures.',
	'FORUM_PATH'				=> 'مسير انجمن',
	'FORUM_PATH_EXPLAIN'		=> 'تعيين كنيد phpBB 2.x در چه مسيري نصب شده است.',
	'FOUND'						=> 'يافت شد',
	'FTP_CONFIG'				=> 'فايل Config را دستي انتقال دهيد',
	'FTP_CONFIG_EXPLAIN'		=> 'بنا به تنظيمات سرور شما بايد يكي از دوكار زير را انجام دهيد :<br /><br />
		1-فايل config.php را دريافت كرده و دستي آپلود كنيد
		2-نام كاربري و كلمه عبور FTP خود را به ياد آوريد !',
	'FTP_PATH'					=> 'مسير FTP',
	'FTP_PATH_EXPLAIN'			=> 'مسير نصب phpBB 3 را وارد كنيد . مثال : <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'آپلود كردن',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Basic configuration',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Now that install has determined your server can run phpBB you need to supply some specific information. If you do not know how to connect to your database please contact your hosting provider (in the first instance) or use the phpBB support forums. When entering data please ensure you check it thoroughly before continuing.',
	'INSTALL_CONGRATS'			=> 'تبريك مي گوييم !',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>phpBB %1$s با موفقيت نصب شد ! اكنون مي توانيد :</p>
		<h2>فروم قبلي خود را به phpBB 3 تبديل كنيد</h2>
		<p><a href="%2$s">براي تبديل phpBB 2.x يا هر سيستم ديگر به phpBB 3 اينجا كليك كنيد</a></p>
		<h2>وارد phpBB 3 شويد !</h2>
		<p>با كليك روي دكمه زير به مركز مديريت هدايت خواهيد شد. شما مي توانيد <a href="http://www.phpbb.maghsad.com">انجمن پشتيباني فارسي phpBB</a><a href="http://www.phpbb.com/support/documentation/3.0/">كتابچه راهنماي انگليسي</a> ، <a href="http://www.phpbb.com/community/viewforum.php?f=46">انجمن هاي انگليسي</a>و <a href="%3$s">فايل مرا بخوان</a> با كليك روي هر گزينه استفاده كنيد. <br /><br />لطفا همين الان پوشه install را پاك كنيد. در غير اين صورت فقط منوي مديكر كل قابل دسترسي خواهد بود و انجمن شما تا پاك شدن پوشه ر غير فعال باقي مي ماند.
</strong></p>
',
	'INSTALL_INTRO'				=> 'به نصب phpBB خوش آمديد ! <br /> ',

	'INSTALL_INTRO_BODY'		=> '
<p><span lang="fa">از آنجا كه سعي شده اين نسخه از </span>phpBB <span lang="fa">
براي كاربران مبتدي تا حرفه اي قابل استفاده باشد ، با توجه به امكانات بومي ايران 
عموما ديتابيس </span>MySQL<span lang="fa"> در دسترس همه است&nbsp; اما بايد 
بدانيد </span>phpBB 3  ديتابيس هاي زير <span lang="fa">را نيز</span> پشتيباني مي كند :</p>
<p>MySQL 3.23 or above (MySQLi supported)</p>
	<ul>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 or above (directly or via ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p><span lang="fa">براي اطلاعات تخصصي به نسخه انگليسي اين قسمت مراجعه نماييد</span>.<p>
<b><span lang="fa">براي وارد شدن به مرحله نصب ، روي دكمه ادامه نصب در پايين 
كلييك نماييد.</span></b><p>&nbsp;<p>',
	'INSTALL_INTRO_NEXT'		=> 'To commence the installation, please press the button below.',
	'INSTALL_LOGIN'				=> 'پايان نصب و ورود به مركز مديريت',
	'INSTALL_NEXT'				=> 'Next stage',
	'INSTALL_NEXT_FAIL'			=> 'Some tests failed and you should correct these problems before proceeding to the next stage. Failure to do so may result in an incomplete installation.',
	'INSTALL_NEXT_PASS'			=> 'All the basic tests have been passed and you may proceed to the next stage of installation. If you have changed any permissions, modules, etc. and wish to re-test you can do so if you wish.',
	'INSTALL_PANEL'				=> 'پنل نصب',
	'INSTALL_SEND_CONFIG'		=> 'Unfortunately phpBB could not write the configuration information directly to your config.php. This may be because the file does not exist or is not writable. A number of options will be listed below enabling you to complete installation of config.php.',
	'INSTALL_START'				=> 'شروع نصب',
	'INSTALL_TEST'				=> 'دوباره تلاش كن',
	'INST_ERR'					=> 'خطا در نصب',
	'INST_ERR_DB_CONNECT'		=> 'phpBB نمي تواند به ديتابيس متصل شود. پيام زير را بررسي كنيد',
	'INST_ERR_DB_FORUM_PATH'	=> 'The database file specified is within your board directory tree. You should put this file in a non web-accessible location.',
	'INST_ERR_DB_NO_ERROR'		=> 'No error message given.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'The version of MySQL installed on this machine is incompatible with the “MySQL with MySQLi Extension” option you have selected. Please try the “MySQL” option instead.',
	'INST_ERR_DB_NO_SQLITE'		=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'The version of Oracle installed on this machine requires you to set the <var>NLS_CHARACTERSET</var> parameter to <var>UTF8</var>. Either upgrade your installation to 9.2+ or change the parameter.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'The version of Firebird installed on this machine is older than 2.1, please upgrade to a newer version.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'The database you selected for Firebird has a page size less than 8192, it must be at least 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'The database you have selected was not created in <var>UNICODE</var> or <var>UTF8</var> encoding. Try installing with a database in <var>UNICODE</var> or <var>UTF8</var> encoding.',
	'INST_ERR_DB_NO_NAME'		=> 'No database name specified.',
	'INST_ERR_EMAIL_INVALID'	=> 'The e-mail address you entered is invalid.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'The e-mails you entered did not match.',
	'INST_ERR_FATAL'			=> 'Fatal installation error',
	'INST_ERR_FATAL_DB'			=> 'A fatal and unrecoverable database error has occurred. This may be because the specified user does not have appropriate permissions to <code>CREATE TABLES</code> or <code>INSERT</code> data, etc. Further information may be given below. Please contact your hosting provider in the first instance or the support forums of phpBB for further assistance.',
	'INST_ERR_FTP_PATH'			=> 'Could not change to the given directory, please check the path.',
	'INST_ERR_FTP_LOGIN'		=> 'Could not login to FTP server, check your username and password.',
	'INST_ERR_MISSING_DATA'		=> 'You must fill out all fields in this block.',
	'INST_ERR_NO_DB'			=> 'Cannot load the PHP module for the selected database type.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'The passwords you entered did not match.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'The password you entered is too long. The maximum length is 30 characters.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'The password you entered is too short. The minimum length is 6 characters.',
	'INST_ERR_PREFIX'			=> 'Tables with the specified prefix already exist, please choose an alternative.',
	'INST_ERR_PREFIX_INVALID'	=> 'The table prefix you have specified is invalid for your database. Please try another, removing characters such as the hyphen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'The table prefix you have specified is too long. The maximum length is %d characters.',
	'INST_ERR_USER_TOO_LONG'	=> 'The username you entered is too long. The maximum length is 20 characters.',
	'INST_ERR_USER_TOO_SHORT'	=> 'The username you entered is too short. The minimum length is 3 characters.',
	'INVALID_PRIMARY_KEY'		=> 'Invalid primary key : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Please note that this can take a while... Please do not stop the script.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> extension check',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Required</strong> - <samp>mbstring</samp> is a PHP extension that provides multibyte string functions. Certain features of mbstring are not compatible with phpBB and must be disabled.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Function overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> must be set to either 0 or 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> must be set to 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> must be set to <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> must be set to <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Please make sure that this folder exists and is writable by the webserver then try again:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Please make sure that these folders exist and are writable by the webserver then try again:<br />»<strong>%s</strong>.',		
		
	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',
	'NEXT_STEP'					=> 'ادامه نصب',
	'NOT_FOUND'					=> 'يافت نشد',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NO_CONVERTORS'				=> 'No convertors are available for use.',
	'NO_CONVERT_SPECIFIED'		=> 'No convertor specified.',
	'NO_LOCATION'				=> 'Cannot determine location. If you know Imagemagick is installed, you may specify the location later within your administration control panel',
	'NO_TABLES_FOUND'			=> 'No tables found.',

	'OVERVIEW_BODY'				=> '<html dir="rtl">

<br /><b>به&nbsp; phpBB آسان نصب خوش آمديد !</b><p><br /><span lang="fa">از آنجا كه
</span>phpBB<span lang="fa"> آسان نصب توسط </span>
<a href="http://www.phpBB.maghsad.com">www.phpBB.Maghsad.com</a><span lang="fa">&nbsp; 
يك توزيع جداگانه بر مبناي آخرين نگارش </span>phpBB<span lang="fa"> است،ممكن است 
در بعضي بخش ها بنا به رسم آسان نمودن،قابل فهم كردن و رفع كژتابي توضيحاتي اضافه 
يا تغييراتي ايجاد شده باشد.بديهي است اين كار فرايند نصب را برا&#1740; هر كاربر اعم از 
مبتدي تا پيشرفته آسان تر و مطمئن تر خواهد كرد.در صورت نياز به اطلاعات جامع از 
زبان انگليسي استفاده نماييد.</span><br /><br />درصورت نياز به هرگونه پشتيباني 
<span lang="fa">،</span> راهنمايي <span lang="fa">&nbsp;يا ساير موارد مانند مود 
ها و قالب هاي </span>phpBB مي توانيد به نشاني&nbsp; 
<a href="http://www.phpBB.Maghsad.com"><span style="text-decoration: none">www.phpBB.Maghsad.com</span></a> 
مراجعه <span lang="fa">نموده و پس از مطرح نمودن درخواست يا پرسش خود از كمك 
پشتيبانان يا ساير اعضا بهره مند شويد.</span><br /><br /><b>در مورد phpBB&nbsp; :</b></p>
<p>phpBB™ <span lang="fa">نخستين انجمن ساز منبع باز است</span>. phpBB3 در مدت 7 سال گذشته 
بررسي و طراحي شده است. مانند سابق، phpBB3 <span lang="fa">پشتيباني قدرتمند در 
سايت مرجع و سايت هاي رسمي خواهد داشت</span>. phpBB3 <span lang="fa">کامل تر از</span> phpBB2 
<span lang="fa">بوده</span> و اصلاحات بيشتري در
آن صورت گرفته است, و در آن درخواست هاي عمومي بکارگرفته شده است . اميد است که انتظارات شما را برآورده کنيم .<br /><br />سيستم 
نصب به شما امکان نصب مستقيم با بهره گيري از توضيحات در قمست هاي مختلف را مي دهد 
. phpBB <span lang="fa">به </span>راحتي قابل ارتقاع به آخرين نسخه موجود و همچنين به  phpBB2 مي باشد. براي کسب اطلاعات بيشتر ، پيشنهاد مي کنيم <a href="../docs/INSTALL.html">راهنماي نصب</a> را مطالعه نماييد.<br /><br /><br /><br /> <br /><br /><b>براي ادامه نصب ،به سربرگ نصب مراجعه نماييد</b>.<br />&nbsp;</p>
',

	'PCRE_UTF_SUPPORT'				=> 'پشتيباني از PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'بدون PCRE UTF-8 phpBB كار نخواهد كرد.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'وجود getimagesize',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>اجباري</strong>',
	'PHP_OPTIONAL_MODULE'			=> 'ماژول هاي اختياري',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>اختياري</strong> - اين موارد اختياري است و وجود آنها باعث افزايش امكانات مي شود',
	'PHP_SUPPORTED_DB'				=> 'ديتابيس هاي قابل استفاده',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>اجباري</strong> - حداقل بايد يك ديتابيس داشته باشيد ',
	'PHP_REGISTER_GLOBALS'			=> 'غير فعال بودن register_globals ',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'توصيه مي شود register_globals غير فعال باشد',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'نسخه و تنظيمات php',
	'PHP_SETTINGS_EXPLAIN'			=> '<font color="#FF0000"><strong>اجباري</strong></font><br /><br /> حداقل php 4.3.3  بايد روي سرور شما نصب باشد. در غير اين صورت با محدوديت هايي مواجه خواهيد بود',
	'PHP_URL_FOPEN_SUPPORT'			=> 'فعال بودن allow_url_fopen',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>اختياري</strong> - اين گزينه اختياري است اما بدون آن برخي ويژگي ها مانند off-site avatars درست كار نخواهند كرد. ',
	'PHP_VERSION_REQD'				=> 'php بالاتر از 4.3.3',
	'POST_ID'						=> 'Post ID',
	'PREFIX_FOUND'					=> 'A scan of your tables has shown a valid installation using <strong>%s</strong> as table prefix.',
	'PREPROCESS_STEP'				=> 'Executing pre-processing functions/queries',
	'PRE_CONVERT_COMPLETE'			=> 'All pre-conversion steps have successfully been completed. You may now begin the actual conversion process. Please note that you may have to manually do and adjust several things. After conversion, especially check the permissions assigned, rebuild your search index which is not converted and also make sure files got copied correctly, for example avatars and smilies.',
	'PROCESS_LAST'					=> 'Processing last statements',

	'REFRESH_PAGE'				=> 'تبديل خودكار',
	'REFRESH_PAGE_EXPLAIN'		=> 'اگر اين گزينه بلي انتخاب شود تبديل بصورت خودكار انجام خواهد شد،اگر مي خواهيد خطاهاي احتمالي را بررسي كنيد خير را امنتخاب كنيد.',
	'REQUIREMENTS_TITLE'		=> 'بررسي سازگاري',
	'REQUIREMENTS_EXPLAIN'		=> '<br />
براي استفاده از تمامي امكانات <span lang="en-us">phpBB</span> ، بايد تمام 
ويژگي هاي<span lang="en-us"> </span>ذكر شده&nbsp; موجود باشد. در صورت نبود يك يا 
چند ويژگي روي سرور شما ، شما نمي توانيد از تمام امكانات phpBB استفاده كنيد.<br /><br />درصورت نياز به يافتن هاست مناسب براي نصب phpBB 
<a href="http://support.maghsad.com">اينجا كليك كنيد</a>.
',
	'RETRY_WRITE'				=> 'Retry writing config',
	'RETRY_WRITE_EXPLAIN'		=> 'If you wish you can change the permissions on config.php to allow phpBB to write to it. Should you wish to do that you can click Retry below to try again. Remember to return the permissions on config.php after phpBB has finished installation.',

	'SCRIPT_PATH'				=> 'مسير نصب',
	'SCRIPT_PATH_EXPLAIN'		=> 'محلي كه phpBB 3 در آن نصب مي شود.',
	'SELECT_LANG'				=> 'انتخاب زبان',
	'SERVER_CONFIG'				=> 'Server configuration',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Search index تبديل نشده است.',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Search index قديمي شما تبديل نشده و فرايند جستجو نتيجه اي دربر نخواهد داشت. <br /> شما بايد پس از ورود به مركز مديريت،با كليك روي سربرگ نگهداري و تعمير و انتخاب گزينه شاخص جستجو از منوي سمت راست Search index جديد براي انجمن خود بسازيد. ',
	'SOFTWARE'					=> 'سيستم انجمن',
	'SPECIFY_OPTIONS'			=> 'تعيين تنظيمات تبديل',
	'STAGE_ADMINISTRATOR'		=> 'جزئيات موسس (مدير كل)',
	'STAGE_ADVANCED'			=> 'تنظيمات پيشرفته',
	'STAGE_ADVANCED_EXPLAIN'	=> 'تنظيمات زير را مي توانيد بعدا از كنترل پنل مديريت نيز انجام دهيد ، توجه داشته باشيد تنظيمات زير را در صورتي دستكاري كنيد كه مطمئن باشيد تنظيمات پيش فرض صحيح نيست',
	'STAGE_CONFIG_FILE'			=> 'فايل configuration',
	'STAGE_CREATE_TABLE'		=> 'ساختن تيبل هاي بانك اطلاعاتي',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'تيبل ها با موفقيت ساخته شد',
	'STAGE_DATABASE'			=> 'تنظيمات ديتابيس',
	'STAGE_FINAL'				=> 'مرحله آخر',
	'STAGE_INTRO'				=> 'معرفي',
	'STAGE_IN_PROGRESS'			=> 'در حال تبديل',
	'STAGE_REQUIREMENTS'		=> 'پيش نيازها',
	'STAGE_SETTINGS'			=> 'تنظيمات',
	'STARTING_CONVERT'			=> 'Starting conversion process',
	'STEP_PERCENT_COMPLETED'	=> 'Step <strong>%d</strong> of <strong>%d</strong>',
	'SUB_INTRO'					=> 'معرفي',
	'SUB_LICENSE'				=> 'مجوز',
	'SUB_SUPPORT'				=> 'پشتيباني',
	'SUCCESSFUL_CONNECT'		=> 'اتصال موفق',
	'SUPPORT_BODY'				=> 'Full support will be provided for the current stable release of phpBB3, free of charge. This includes:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from Release Candidate (RC) versions to the latest stable version</li><li>converting from phpBB 2.0.x to phpBB3</li><li>converting from other discussion board software to phpBB3 (please see the <a href="http://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a>)</li></ul><p>We encourage users still running beta versions of phpBB3 to replace their installation with a fresh copy of the latest version.</p><h2>MODs / Styles</h2><p>For issues relating to MODs, please post in the appropriate <a href="http://www.phpbb.com/community/viewforum.php?f=81">Modifications Forum</a>.<br />For issues relating to styles, templates and imagesets, please post in the appropriate <a href="http://www.phpbb.com/community/viewforum.php?f=80">Styles Forum</a>.<br /><br />If your question relates to a specific package, please post directly in the topic dedicated to the package.</p><h2>Obtaining Support</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="http://www.phpbb.com/support/">Support Section</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a><br /><br />To ensure you stay up to date with the latest news and releases, why not <a href="http://www.phpbb.com/support/">subscribe to our mailing list</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Starting to synchronise forums',
	'SYNC_POST_COUNT'			=> 'Synchronising post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronising post_counts from <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Starting to synchronise topics',
	'SYNC_TOPIC_ID'				=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s.',

	'TABLES_MISSING'			=> 'اين تيبل ها يافت نشدند<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'پيشوند جداول ديتابيس',
	'TABLE_PREFIX_SAME'			=> 'The table prefix needs to be the one used by the software you are converting from.<br />» Specified table prefix was %s.',
	'TESTS_PASSED'				=> 'با موفقيت آزمايش شد',
	'TESTS_FAILED'				=> 'آزمايش با شكست مواجه شد',

	'UNABLE_WRITE_LOCK'			=> 'Unable to write lock file.',
	'UNAVAILABLE'				=> 'وجود ندارد',
	'UNWRITABLE'				=> 'غير قابل نوشتن (سطح دسترسي را به 777 تغيير دهيد)',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occured while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'VERIFY_OPTIONS'			=> 'درحال بررسي تنظيمات مبدل',
	'VERSION'					=> 'نسخه',

	'WELCOME_INSTALL'			=> 'به نصب phpBB 3 خوش امديد',
	'WRITABLE'					=> 'قابل نوشتن',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'All files are up to date with the latest phpBB version. You should now <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory! Please send us updated information about your server and board configurations from the <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Send statistics</a> module in your ACP.',

	'ARCHIVE_FILE'				=> 'Source file within archive',

	'BACK'				=> 'Back',
	'BINARY_FILE'		=> 'Binary file',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'The method used to make sure a username is not used by multiple users has been changed. There are some users which have the same name when compared with the new method. You have to delete or rename these users to make sure that each name is only used by one user before you can proceed.',
	'CHECK_FILES'					=> 'Check files',
	'CHECK_FILES_AGAIN'				=> 'Check files again',
	'CHECK_FILES_EXPLAIN'			=> 'Within the next step all files will be checked against the update files - this can take a while if this is the first file check.',
	'CHECK_FILES_UP_TO_DATE'		=> 'According to your database your version is up to date. You may want to proceed with the file check to make sure all files are really up to date with the latest phpBB version.',
	'CHECK_UPDATE_DATABASE'			=> 'Continue update process',
	'COLLECTED_INFORMATION'			=> 'File information',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'The list below shows information about the files needing an update. Please read the information in front of every status block to see what they mean and what you may need to do to perform a successful update.',
	'COLLECTING_FILE_DIFFS'			=> 'Collecting file differences',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'CONTINUE_UPDATE_NOW'			=> 'Continue the update process now',
// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'ادامه دادن به روز رسانی',					// Shown after file upload to indicate the update process is not yet finished

	'CURRENT_FILE'					=> 'Begin of Conflict - Original File code before update',
	'CURRENT_VERSION'				=> 'Current version',

	'DATABASE_TYPE'						=> 'Database type',
	'DATABASE_UPDATE_INFO_OLD'			=> 'The database update file within the install directory is outdated. Please make sure you uploaded the correct version of the file.',
	'DELETE_USER_REMOVE'				=> 'Delete user and remove posts',
	'DELETE_USER_RETAIN'				=> 'Delete user but keep posts',
	'DESTINATION'						=> 'Destination file',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Code block used within the updated/new file',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Do not update this file',
	'DONE'								=> 'Done',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download as',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, please check the files again with the other button below.',

	'ERROR'			=> 'Error',
	'EDIT_USERNAME'	=> 'Edit username',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in loosing the changes from the newer file.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation. These files will be added to your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files are not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'FTP_SETTINGS'					=> 'FTP settings',
	'FTP_UPDATE_METHOD'				=> 'FTP upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'The update files are incomplete.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful. Now you need to continue the update process.',

	'KEEP_OLD_NAME'		=> 'Keep username',

	'LATEST_VERSION'		=> 'Latest version',
	'LINE'					=> 'Line',
	'LINE_ADDED'			=> 'Added',
	'LINE_MODIFIED'			=> 'Modified',
	'LINE_REMOVED'			=> 'Removed',
	'LINE_UNMODIFIED'		=> 'Unmodified',
	'LOGIN_UPDATE_EXPLAIN'	=> 'In order to update your installation you need to login first.',

	'MAPPING_FILE_STRUCTURE'	=> 'To ease the upload here are the file locations which map your phpBB installation.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Merge modifications',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Do not merge - use new file',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Do not merge - use currently installed file',

//3.0.5 www.Maghsad.com

	'MERGE_MOD_FILE_OPTION'		=> 'Merge modifications (removes new phpBB code within conflicting block)',
	'MERGE_NEW_FILE_OPTION'		=> 'Merge modifications (removes modified code within conflicting block)',


	'MERGE_SELECT_ERROR'		=> 'Conflicting file merge modes are not correctly selected.',
	'MERGING_FILES'				=> 'Merging differences',
	'MERGING_FILES_EXPLAIN'		=> 'Currently collecting final file changes.<br /><br />Please wait until phpBB has completed all operations on changed files.',

	'NEW_FILE'						=> 'End of Conflict',
		
//3.0.5 www.Maghsad.com

	'NEW_USERNAME'					=> 'New username',
	'NO_AUTH_UPDATE'				=> 'Not authorised to update',
	'NO_ERRORS'						=> 'No errors',
	'NO_UPDATE_FILES'				=> 'Not updating the following files',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'The following files are new or modified but the directory they normally reside in could not be found on your installation. If this list contains files to other directories than language/ or styles/ than you may have modified your directory structure and the update may be incomplete.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No valid update directory was found, please make sure you uploaded the relevant files.<br /><br />Your installation does <strong>not</strong> seem to be up to date. Updates are available for your version of phpBB %1$s, please visit <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> to obtain the correct package to update from Version %2$s to Version %3$s..',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'NO_UPDATE_INFO'				=> 'Update file information could not be found.',
	'NO_UPDATES_REQUIRED'			=> 'No updates required',
	'NO_VISIBLE_CHANGES'			=> 'No visible changes',
	'NOTICE'						=> 'Notice',
	'NUM_CONFLICTS'					=> 'Number of conflicts',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Currently differences from %1$d of %2$d files have been checked.<br />Please wait until all files are checked.',


	'OLD_UPDATE_FILES'		=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Current package updates to version',
	'PERFORM_DATABASE_UPDATE'			=> 'Perform database update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Below you will find a button to the database update script. The database update can take a while, so please do not stop the execution if it seems to hang. After the database update has been performed just follow the instructions to continue the update process.',
	'PREVIOUS_VERSION'					=> 'Previous version',
	'PROGRESS'							=> 'Progress',

	'RESULT'					=> 'Result',
	'RUN_DATABASE_SCRIPT'		=> 'Update my database now',

	'SELECT_DIFF_MODE'			=> 'Select diff mode',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',
	'SELECT_FTP_SETTINGS'		=> 'Select FTP settings',
	'SHOW_DIFF_CONFLICT'		=> 'Show differences/conflicts',
	'SHOW_DIFF_FINAL'			=> 'Show resulting file',
	'SHOW_DIFF_MODIFIED'		=> 'Show merged differences',
	'SHOW_DIFF_NEW'				=> 'Show file contents',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Show differences',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Show differences',
	'SOME_QUERIES_FAILED'		=> 'Some queries failed, the statements and errors are listing below.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'This is probably nothing to worry about, update will continue. Should this fail to complete you may need to seek help at our support forums. See <a href="../docs/README.html">README</a> for details on how to obtain advice.',
	'STAGE_FILE_CHECK'			=> 'Check files',
	'STAGE_UPDATE_DB'			=> 'Update database',
	'STAGE_UPDATE_FILES'		=> 'Update files',
	'STAGE_VERSION_CHECK'		=> 'Version check',
	'STATUS_CONFLICT'			=> 'Modified file producing conflicts',
	'STATUS_MODIFIED'			=> 'Modified file',
	'STATUS_NEW'				=> 'New file',
	'STATUS_NEW_CONFLICT'		=> 'Conflicting new file',
	'STATUS_NOT_MODIFIED'		=> 'Not modified file',
	'STATUS_UP_TO_DATE'			=> 'Already updated file',

	'TOGGLE_DISPLAY'			=> 'View/Hide file list',

	'UPDATE_COMPLETED'				=> 'Update completed',
	'UPDATE_DATABASE'				=> 'Update database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Within the next step the database will be updated.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Updating database schema',
	'UPDATE_FILES'					=> 'Update files',
	'UPDATE_FILES_NOTICE'			=> 'Please make sure you have updated your board files too, this file is only updating your database.',
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '
		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>

	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Incomplete update detected</h1>

		<p>phpBB detected an incomplete automatic update. Please make sure you followed every step within the automatic update tool. Below you will find the link again, or go directly to your install directory.</p>
	',
	'UPDATE_METHOD'					=> 'روش بروزرسانی',
	'UPDATE_METHOD_EXPLAIN'			=> 'اکنون شما میتوانید روش بروزرسانی مورد نظرتان را انتخاب کنید. استفاده از FTP برای آپلود; برای اینکار شما باید به وارد کردن اطلاعات FTP account بپردازید. با این روش فایلها به صورت اتوماتیک به مکان جدید انتقال میابند و پشتیبان گیری از فایلهای قدیمی انجام میشود. اگر شما دانلود فایلهای  تغییر یافته (پیراسته شده) را انتخاب کنید، بعدا قادرید به صورت دستی، آنها را از فشردگی خارج کنید و در مکان صحیح شان آپلود کنید.',
	'UPDATE_REQUIRES_FILE'			=> 'The updater requires that the following file is present: %s',
	'UPDATE_SUCCESS'				=> 'Update was successful',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Successfully updated all files. The next step involves checking all files again to make sure the files got updated correctly.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Updating version and optimising tables',
	'UPDATING_DATA'					=> 'Updating data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Updating database to latest stable release',
	'UPDATED_VERSION'				=> 'Updated version',
	'UPLOAD_METHOD'					=> 'Upload method',

	'UPDATE_DB_SUCCESS'				=> 'Database update was successful.',
	'USER_ACTIVE'					=> 'Active user',
	'USER_INACTIVE'					=> 'Inactive user',

	'VERSION_CHECK'				=> 'Version check',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if your phpBB installation is up to date.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Your phpBB installation is not up to date. Please continue the update process.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your phpBB installation is not up to date.<br />Below is a link to the release announcement, which contains more information as well as instructions on updating.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Your phpBB installation is not up to date.',
	'VERSION_UP_TO_DATE'			=> 'Your phpBB installation is up to date. Although there are no updates available at this time, you may continue in order to perform a file validity check.',
	'VERSION_UP_TO_DATE_ACP'		=> 'نسخه phpBB شما به روز است و فعلا به روز رسانی برای آن ارائه نشده.',
	'VIEWING_FILE_CONTENTS'		=> 'Viewing file contents',
	'VIEWING_FILE_DIFF'			=> 'Viewing file differences',

	'WRONG_INFO_FILE_FORMAT'	=> 'Wrong info file format',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'A short text to describe your forum',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'این پست صرفا یک نمونه پست است. برای ادامه کار با انجمن خود می توانید این انجمن نمونه و این پست را پاک کرده یا تغییر دهید. برای اطلاعات بیشتر در باره نحوه استفاده به www.phpBB.Maghsad.com مراجعه فرمایید.',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadable Files',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash Files',
	'EXT_GROUP_IMAGES'				=> 'Images',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Plain Text',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'نمونه شاخه',
	'FORUMS_TEST_FORUM_DESC'		=> 'توضیحات مربوط به نمونه شاخه',
	'FORUMS_TEST_FORUM_TITLE'		=> 'نمونه انجمن',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Site Admin',
	'REPORT_WAREZ'					=> 'The post contains links to illegal or pirated software.',
	'REPORT_SPAM'					=> 'The reported post has the only purpose to advertise for a website or another product.',
	'REPORT_OFF_TOPIC'				=> 'The reported post is off topic.',
	'REPORT_OTHER'					=> 'The reported post does not fit into any other category, please use the further information field.',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'به phpBB آسان نصب مقصد خوش آمدید',
		
//BEGIN phpBB 3.0.5 Additionals by www.Maghsad.com
		
			'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Your MySQL database schema for phpBB is outdated. phpBB detected a schema for MySQL 3.x/4.x, but the server runs on MySQL %2$s.<br /><strong>Before you proceed the update, you need to upgrade the schema.</strong><br /><br />Please refer to the <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a>. If you encounter problems, please use <a href="http://www.phpbb.com/community/viewforum.php?f=46">our support forums</a>.',
		
//================//
		
			'DOWNLOAD_CONFLICTS'				=> 'Download conflicts for this file',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Search for &lt;&lt;&lt; to spot conflicts',		
//================//
	'DOWNLOAD_UPDATE_METHOD_BUTTON'      => 'دریافت فایل های تغییر یافته در یک فایل فشرده (توصیه phpBB)',				
	'TRY_DOWNLOAD_METHOD'      => 'ممکن است بخواهید نسخه ای از فایل های تغییر یافته را در یک آرشیو فشرده دریافت کنید.<br />این روش از سوی طراحان phpBB توصیه می گردد.',
  'TRY_DOWNLOAD_METHOD_BUTTON'=> 'استفاده از این روش',
  						
//END phpBB 3.0.5 Additionals by www.Maghsad.com


	    // 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	    
	    	'DB_UPDATE_NOT_SUPPORTED'	=> 'We are sorry, but this script does not support updating from versions of phpBB prior to “%1$s”. The version you currently have installed is “%2$s”. Please update to a previous version before running this script. Assistance with this is available in the Support Forum on phpBB.com.',


//////////////////////////

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB no longer supports Firebird/Interbase prior to Version 2.1. Please update your Firebird installation to at least 2.1.0 before proceeding with the update.',


/////////////////////////


	    
	    
	    //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com

		
));

?>