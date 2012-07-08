<?php
/**
*
* acp_attachments [Belarusian]
*
* @package language
* @version $Id: attachments.php,v 1.31 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Тут вы можаце наладзіць асноўныя параметры ўкладанняў і звязаных з імі адмысловых катэгорый.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Тут вы можаце дадаваць, выдаляць і змяняць групы пашырэнняў. Таксама тут можна адключаць вызначаныя групы пашырэнняў, прызначаць на групы адмысловыя катэгорыі, змяняць рэжым загрузкі ўкладанняў, а таксама паказаць значок, які будзе адлюстроўвацца перад укладаннем, прыналежным вызначанай групе.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Тут вы можаце кіраваць дазволенымі пашырэннямі. Для актывацыі пашырэнняў наведаеце старонку «Групы пашырэнняў». Мы настойліва рэкамендуемы не дазваляць патэнцыйна небяспечныя пашырэнні (такія, як <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> і гэтак далей…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Тут вы можаце бачыць страчаныя файлы. Звычайна такія файлы з\'яўляюцца з-за таго, што карыстальнікі прымацоўваюць файлы, але пасля не адпраўляюць паведамленне. Вы можаце выдаліць такія файлы або прымацаваць іх да наяўных паведамленняў. У другім выпадку вам запатрабуецца правільны ідэнтыфікатар паведамлення (ID), які вы павінны паказаць самастойна. Пасля гэтага загружанае ўкладанне будзе прымацавана да паказанага вамі паведамленню.',
	'ADD_EXTENSION'						=> 'Дадаць пашырэнне',
	'ADD_EXTENSION_GROUP'				=> 'Даданне групы пашырэнняў',
	'ADMIN_UPLOAD_ERROR'				=> 'Памылкі пры спробе прымацавання файла: «%s».',
	'ALLOWED_FORUMS'					=> 'Дазволіць у форумах',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Магчымасць адпраўляць прызначаныя пашырэнні ў вылучаных (або ва ўсіх пры іх выбары) форумах.',
	'ALLOWED_IN_PM_POST'				=> 'Група пашырэнняў дазволеная',
	'ALLOW_ATTACHMENTS'					=> 'Дазволіць укладанні',
	'ALLOW_ALL_FORUMS'					=> 'Ва ўсіх форумах',
	'ALLOW_IN_PM'						=> 'Дазволіць у асабістых паведамленнях',
	'ALLOW_PM_ATTACHMENTS'				=> 'Дазволіць укладанні ў асабістых паведамленнях',
	'ALLOW_SELECTED_FORUMS'				=> 'Толькі ў вылучаных',
	'ASSIGNED_EXTENSIONS'				=> 'Прызначаныя пашырэнні',
	'ASSIGNED_GROUP'					=> 'прызначаная група пашырэнняў',
	'ATTACH_EXTENSIONS_URL'				=> 'Пашырэнні',
	'ATTACH_EXT_GROUPS_URL'				=> 'Групы пашырэнняў',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Максімальны памер файла',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максімальны памер кожнага загружанага файла. Значэнне 0 адпавядае неабмежаванаму памеру.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максімальны памер у асабістых паведамленнях',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максімальны памер усіх укладанняў, якія карыстальнік можа захоўваць у папцы асабістых паведамленняў. Значэнне 0 адпавядае неабмежаванаму памеру.',
	'ATTACH_ORPHAN_URL'					=> 'Страчаныя ўкладанні',
	'ATTACH_POST_ID'					=> 'ID паведамленні',
	'ATTACH_QUOTA'						=> 'Агульная квота ўкладанняў',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максімальна даступная дыскавая прастора для ўкладанняў. Значэнне 0 адпавядае неабмежаванаму памеру.',
	'ATTACH_TO_POST'					=> 'Прымацаваць файл да паведамлення',

	'CAT_FLASH_FILES'			=> 'Файлы Flash',
	'CAT_IMAGES'				=> 'Малюнкі',
	'CAT_QUICKTIME_FILES'		=> 'Фільмы QuickTime',
	'CAT_RM_FILES'				=> 'Файлы RealMedia',
	'CAT_WM_FILES'				=> 'Файлы Windows Media',
	'CHECK_CONTENT'				=> 'Првераць далучаныя файлы',
	'CHECK_CONTENT_EXPLAIN'		=> 'Некаторыя браўзэры можны падмануць, каб прыняць няверны mime тып запампаванага файла. Гэтая опцыя дапамагае выключыць такія выпадкі і забараніць гэтыя файлы.',
	'CREATE_GROUP'				=> 'Стварыць групу',
	'CREATE_THUMBNAIL'			=> 'Ствараць мініяцюры',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Пры ўключэнні опцыі для загружаных малюнкаў будуць стварацца мініяцюры ва ўсіх магчымых сітуацыях.',

	'DEFINE_ALLOWED_IPS'			=> 'Дазволеныя IP-адрасы і вузлы',
	'DEFINE_DISALLOWED_IPS'			=> 'Забароненыя IP-адрасы і вузлы',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Уводзіце кожны IP-адрас або імя вузла на новым радку. Для ўказання дыяпазону IP-адрасоў падзеліце пачатак і канец дыяпазону злучком (-), або выкарыстайце падстаноўны знак (*) у якасці шаблону.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Вы можаце выдаліць (або выдаліць з выключаных) за адзін раз некалькі IP-адрасоў. Для выбару некалькіх адрасоў выкарыстайце адпаведную для вашага кампутара і браўзэра камбінацыю мышы і клавіятуры. Выключаныя IP-адрасы адлюстроўваюцца на сінім фоне.',
	'DISPLAY_INLINED'				=> 'Паказваць малюнкі ў паведамленнях',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Калі вылучыць «Не», то малюнкі, укладзеныя ў паведамленні, будуць адлюстроўвацца ў выглядзе спасылак.',
	'DISPLAY_ORDER'					=> 'Парадак адлюстравання ўкладанняў',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Адлюстраванне ўкладанняў па часе размяшчэння.',

	'EDIT_EXTENSION_GROUP'			=> 'Змена групы пашырэнняў',
	'EXCLUDE_ENTERED_IP'			=> 'Уключыце гэтую опцыю для выключэння ўведзенага IP-адрасы або вузла з спісу дазволеных.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Выключыць IP-адрас з дазволеных',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Выключыць IP-адрасы або імёны вузлоў з забароненых',
	'EXTENSIONS_UPDATED'			=> 'Пашырэнне паспяхова абноўленае.',
	'EXTENSION_EXIST'				=> 'Пашырэнне %s ужо існуе.',
	'EXTENSION_GROUP'				=> 'Група пашырэнняў',
	'EXTENSION_GROUPS'				=> 'Групы пашырэнняў',
	'EXTENSION_GROUP_DELETED'		=> 'Група пашырэнняў паспяхова выдаленая.',
	'EXTENSION_GROUP_EXIST'			=> 'Група пашырэнняў %s ужо існуе.',

	'GO_TO_EXTENSIONS'		=> 'Перайсці на старонку кіравання пашырэннямі',
	'GROUP_NAME'			=> 'Імя групы',

	'IMAGE_LINK_SIZE'			=> 'Памеры малюнкаў для спасылкі',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Калі малюнак больш паказаных памераў, то замест яго будзе адлюстраваная спасылка для загрузкі гэтага малюнка. Увядзіце памеры 0?0 для адключэння гэтай магчымасці.',
	'IMAGICK_PATH'				=> 'Шлях да праграмы Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Поўны шлях да праграмы Imagemagick. Напрыклад, <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Максімум укладанняў у адным паведамленні',
	'MAX_ATTACHMENTS_PM'			=> 'Максімум укладанняў у асабістым паведамленні',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максімальны памер файла',
	'MAX_IMAGE_SIZE'				=> 'Максімальныя памеры малюнкаў',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максімальныя памеры загружаных малюнкаў. Увядзіце 0?0 для адключэння праверкі памераў.',
	'MAX_THUMB_WIDTH'				=> 'Максімальная шырыня мініяцюр',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Шырыня ствараемых мініяцюр не будзе перавышаць паказанага тут памеру.',
	'MIN_THUMB_FILESIZE'			=> 'Мінімальны памер файлаў для мініяцюр',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Мініяцюры не будуць стварацца для малюнкаў менш паказанага памеру.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Група пашырэнняў дазволеная толькі ў паведамленнях',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Група пашырэнняў забароненая',
	'NOT_ASSIGNED'				=> 'Не прызначаная',
	'NO_EXT_GROUP'				=> 'Не',
	'NO_EXT_GROUP_NAME'			=> 'Не паказана імя групы',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Не паказаная група пашырэнняў.',
	'NO_FILE_CAT'				=> 'Не',
	'NO_IMAGE'					=> 'Без значка',
	'NO_THUMBNAIL_SUPPORT'		=> 'Падтрымка мініяцюр адключаная, паколькі не знойдзена даступнай бібліятэкі GD або ўсталяванай праграмы Imagemagick.',
	'NO_UPLOAD_DIR'				=> 'Паказаная вамі папка для загрузкі файлаў не існуе.',
	'NO_WRITE_UPLOAD'			=> 'Паказаная вамі папка для загрузкі файлаў недаступная для запісу. Зменіце правы доступу для гэтай папкі, дазволіўшы серверу запіс у яе.',

	'ONLY_ALLOWED_IN_PM'	=> 'Група пашырэнняў дазволеная толькі ў асабістых паведамленнях',
	'ORDER_ALLOW_DENY'		=> 'Дазволіць',
	'ORDER_DENY_ALLOW'		=> 'Забараніць',

	'REMOVE_ALLOWED_IPS'	=> 'Выдаленне або выдаленне з выключаных <em>дазволеных</em> IP-адрасоў або вузлоў',
	'REMOVE_DISALLOWED_IPS'	=> 'Выдаленне або выдаленне з выключаных <em>забароненых</em> IP-адрасоў або вузлоў',

	'SEARCH_IMAGICK'				=> 'Знайсці Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Спіс дазволеных і забароненых',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Змена паводзін па змаўчанні спісу дазволеных і забароненых пры ўключэнні бяспечных загрузак на <strong>белы спіс</strong> (Дазволіць) або на <strong>чорны спіс</strong> (Забараніць).',
	'SECURE_DOWNLOADS'				=> 'Уключыць бяспечныя загрузкі',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'З уключанай опцыяй усе загрузкі будуць абмежаваныя паказанымі вамі IP-адрасамі і вузламі.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Бяспечныя загрузкі не ўключаныя. Налады ніжэй будуць ужытыя пасля ўключэння бяспечных загрузак.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Спіс IP-адрасоў паспяхова абноўлены.',
	'SECURE_EMPTY_REFERRER'			=> 'Дазволіць пустую крыніцу пераходу',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Бяспечныя загрузкі заснаваныя на ўказанні крыніцы пераходу (referrers). Вы жадаеце дазволіць загрузкі для кліентаў з адсутнай крыніцай пераходу?',
	'SETTINGS_CAT_IMAGES'			=> 'Налады катэгорыі малюнкаў',
	'SPECIAL_CATEGORY'				=> 'Адмысловая катэгорыя',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Адмысловыя катэгорыі адрозніваюцца спосабам адлюстравання ўкладанняў у паведамленнях.',
	'SUCCESSFULLY_UPLOADED'			=> 'Загрузка паспяхова завершаная.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Група пашырэнняў паспяхова дададзеная.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Група пашырэнняў паспяхова абноўленая.',

	'UPLOADING_FILES'				=> 'Загрузка файлаў',
	'UPLOADING_FILE_TO'				=> 'Загрузка файла «%1$s» у паведамленне пад нумарам %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'У вас няма праў на загрузку файлаў у форум «%s».',
	'UPLOAD_DIR'					=> 'Папка для загрузкі файлаў',
	'UPLOAD_DIR_EXPLAIN'			=> 'Папка для захоўвання ўкладанняў. Нататка: калі вы зменіце гэтую папку, у то час як у ёй ужо маюцца загружаныя файлы, то вам прыйдзецца ўручную скапіяваць гэтыя файлы ў новую папку.',
	'UPLOAD_ICON'					=> 'Значок загрузкі',
	'UPLOAD_NOT_DIR'				=> 'Паказаны шлях для загрузкі файлаў не з\'яўляецца папкай.',
));

?>
