<?php
/**
*
* acp common [Belarusian]
*
* @package language
* @version $Id: common.php,v 1.120 2007/10/04 15:07:24 acydburn Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Адміністратары',
	'ACP_ADMIN_LOGS'			=> 'Лог адміністратараў',
	'ACP_ADMIN_ROLES'			=> 'Адміністратарскія ролі',
	'ACP_ATTACHMENTS'			=> 'Укладанні',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Налады ўкладанняў',
	'ACP_AUTH_SETTINGS'			=> 'Аўтэнтыфікацыя',
	'ACP_AUTOMATION'			=> 'Аўтаматызацыя',
	'ACP_AVATAR_SETTINGS'		=> 'Аватары',

	'ACP_BACKUP'				=> 'Рэзервовае капіяванне',
	'ACP_BAN'					=> 'Блакоўка доступу',
	'ACP_BAN_EMAILS'			=> 'Чорны спіс email',
	'ACP_BAN_IPS'				=> 'Чорны спіс IP',
	'ACP_BAN_USERNAMES'			=> 'Чорны спіс карыстальнікаў',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Канфігурацыя',
	'ACP_BOARD_FEATURES'		=> 'Функцыі канферэнцыі',
	'ACP_BOARD_MANAGEMENT'		=> 'Кіраванне канферэнцыяй',
	'ACP_BOARD_SETTINGS'		=> 'Налады канферэнцыі',
	'ACP_BOTS'					=> 'Пошукавыя боты',

	'ACP_CAPTCHA'				=> 'Візуальнае пацверджанне',

	'ACP_CAT_DATABASE'			=> 'База дадзеных',
	'ACP_CAT_DOT_MODS'			=> 'Модулі',
	'ACP_CAT_FORUMS'			=> 'Форумы',
	'ACP_CAT_GENERAL'			=> 'Агульныя',
	'ACP_CAT_MAINTENANCE'		=> 'Абслугоўванне',
	'ACP_CAT_PERMISSIONS'		=> 'Правы доступу',
	'ACP_CAT_POSTING'			=> 'Паведамленні',
	'ACP_CAT_STYLES'			=> 'Стылі',
	'ACP_CAT_SYSTEM'			=> 'Сістэма',
	'ACP_CAT_USERGROUP'			=> 'Карыстальнікі і групы',
	'ACP_CAT_USERS'				=> 'Карыстальнікі',
	'ACP_CLIENT_COMMUNICATION'	=> 'Сродкі сувязі',
	'ACP_COOKIE_SETTINGS'		=> 'Налады cookies',
	'ACP_CRITICAL_LOGS'			=> 'Лог памылак',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Дадатковыя палі ў профілі',

	'ACP_DATABASE'				=> 'База дадзеных',
	'ACP_DISALLOW'				=> 'Забароненыя імёны',
	'ACP_DISALLOW_USERNAMES'	=> 'Забароненыя імёны',

	'ACP_EMAIL_SETTINGS'		=> 'Налады пошты',
	'ACP_EXTENSION_GROUPS'		=> 'Групы пашырэнняў',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Лакальныя правы доступу',
	'ACP_FORUM_LOGS'				=> 'Логі',
	'ACP_FORUM_MANAGEMENT'			=> 'Форумы',
	'ACP_FORUM_MODERATORS'			=> 'Мадэратары форумаў',
	'ACP_FORUM_PERMISSIONS'			=> 'Доступ да форумаў',
	'ACP_FORUM_ROLES'				=> 'Форумныя ролі',

	'ACP_GENERAL_CONFIGURATION'		=> 'Агульныя налады',
	'ACP_GENERAL_TASKS'				=> 'Агульныя задачы',
	'ACP_GLOBAL_MODERATORS'			=> 'Супермадэратары',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Глабальныя правы доступу',
	'ACP_GROUPS'					=> 'Групы',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Форумныя правы груп',
	'ACP_GROUPS_MANAGE'				=> 'Кіраванне групамі',
	'ACP_GROUPS_MANAGEMENT'			=> 'Групы',
	'ACP_GROUPS_PERMISSIONS'		=> 'Правы груп',

	'ACP_ICONS'					=> 'Значкі тэм',
	'ACP_ICONS_SMILIES'			=> 'Значкі тэм і смайлікі',
	'ACP_IMAGESETS'				=> 'Наборы малюнкаў',
	'ACP_INACTIVE_USERS'		=> 'Неактыўныя карыстальнікі',
	'ACP_INDEX'					=> 'Галоўная старонка',

	'ACP_JABBER_SETTINGS'		=> 'Налады Jabber',

	'ACP_LANGUAGE'				=> 'Мовы',
	'ACP_LANGUAGE_PACKS'		=> 'Моўныя пакеты',
	'ACP_LOAD_SETTINGS'			=> 'Нагрузка на сервер',
	'ACP_LOGGING'				=> 'Логі',

	'ACP_MAIN'					=> 'Галоўная старонка адміністратарскага раздзела',
	'ACP_MANAGE_EXTENSIONS'		=> 'Кіраванне пашырэннямі',
	'ACP_MANAGE_FORUMS'			=> 'Кіраванне форумамі',
	'ACP_MANAGE_RANKS'			=> 'Кіраванне званнямі',
	'ACP_MANAGE_REASONS'		=> 'Кіраванне скаргамі',
	'ACP_MANAGE_USERS'			=> 'Кіраванне карыстальнікамі',
	'ACP_MASS_EMAIL'			=> 'Масавае рассыланне пошты',
	'ACP_MESSAGES'				=> 'Паведамленні',
	'ACP_MESSAGE_SETTINGS'		=> 'Асабістыя паведамленні',
	'ACP_MODULE_MANAGEMENT'		=> 'Кіраванне модулямі',
	'ACP_MOD_LOGS'				=> 'Лог мадэратараў',
	'ACP_MOD_ROLES'				=> 'Мадэратарскія ролі',

	'ACP_NO_ITEMS'				=> 'Нічога няма.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Страчаныя ўкладанні',

	'ACP_PERMISSIONS'			=> 'Правы доступу',
	'ACP_PERMISSION_MASKS'		=> 'Маскі праў доступу',
	'ACP_PERMISSION_ROLES'		=> 'Ролі',
	'ACP_PERMISSION_TRACE'		=> 'Трасіроўка праў доступу',
	'ACP_PHP_INFO'				=> 'Звесткі аб PHP',
	'ACP_POST_SETTINGS'			=> 'Размяшчэнне паведамленняў',
	'ACP_PRUNE_FORUMS'			=> 'Чыстка форумаў',
	'ACP_PRUNE_USERS'			=> 'Выдаленне карыстальнікаў',
	'ACP_PRUNING'				=> 'Чыстка',

	'ACP_QUICK_ACCESS'			=> 'Хуткі доступ',

	'ACP_RANKS'					=> 'Званні',
	'ACP_REASONS'				=> 'Кіраванне скаргамі',
	'ACP_REGISTER_SETTINGS'		=> 'Рэгістрацыя карыстальнікаў',

	'ACP_RESTORE'				=> 'Аднаўленне',

	'ACP_SEARCH'				=> 'Налады пошуку',
	'ACP_SEARCH_INDEX'			=> 'Пошукавыя індэксы',
	'ACP_SEARCH_SETTINGS'		=> 'Пошук',

	'ACP_SECURITY_SETTINGS'		=> 'Бяспека',
	'ACP_SERVER_CONFIGURATION'	=> 'Канфігурацыя сервера',
	'ACP_SERVER_SETTINGS'		=> 'Налады сервера',
	'ACP_SIGNATURE_SETTINGS'	=> 'Подпісы',
	'ACP_SMILIES'				=> 'Смайлікі',
	'ACP_STYLE_COMPONENTS'		=> 'Кампаненты стыляў',
	'ACP_STYLE_MANAGEMENT'		=> 'Кіраванне стылямі',
	'ACP_STYLES'				=> 'Стылі',

	'ACP_TEMPLATES'				=> 'Шаблоны',
	'ACP_THEMES'				=> 'Тэмы',

	'ACP_UPDATE'					=> 'Абнаўленне',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Форумныя правы карыстальнікаў',
	'ACP_USERS_LOGS'				=> 'Лог карыстальнікаў',
	'ACP_USERS_PERMISSIONS'			=> 'Правы карыстальнікаў',
	'ACP_USER_ATTACH'				=> 'Укладанні',
	'ACP_USER_AVATAR'				=> 'Аватара',
	'ACP_USER_FEEDBACK'				=> 'Нататкі аб карыстальніку',
	'ACP_USER_GROUPS'				=> 'Групы',
	'ACP_USER_MANAGEMENT'			=> 'Карыстальнікі',
	'ACP_USER_OVERVIEW'				=> 'Агляд',
	'ACP_USER_PERM'					=> 'Правы доступу',
	'ACP_USER_PREFS'				=> 'Асабістыя налады',
	'ACP_USER_PROFILE'				=> 'Профіль',
	'ACP_USER_RANK'					=> 'Званне',
	'ACP_USER_ROLES'				=> 'Карыстальніцкія ролі',
	'ACP_USER_SECURITY'				=> 'Блакоўка карыстальнікаў',
	'ACP_USER_SIG'					=> 'Подпіс',

	'ACP_VC_SETTINGS'					=> 'Візуальнае пацверджанне',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Прагляд візуальнага пацверджання',
	'ACP_VERSION_CHECK'					=> 'Праверка абнаўленняў',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Правы адміністратараў',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Правы мадэратараў',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Лакальныя правы',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Правы супермадэратараў',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Правы карыстальнікаў',

	'ACP_WORDS'					=> 'Аўтацэнзар',

	'ACTION'				=> 'Дзеянне',
	'ACTIONS'				=> 'Дзеянні',
	'ACTIVATE'				=> 'Уключыць',
	'ADD'					=> 'Дадаць',
	'ADMIN'					=> 'Адміністраванне',
	'ADMIN_INDEX'			=> 'Галоўная',
	'ADMIN_PANEL'			=> 'Адміністратарскі раздзел',

	'ADM_LOGOUT'			=> 'Выхад',
	'ADM_LOGGED_OUT'		=> 'Паспяхова выйшлі з адміністратарскагу раздзела.',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Колеравая палітра',
	'CONFIG_UPDATED'		=> 'Канфігурацыя паспяхова абноўленая.',

	'DEACTIVATE'				=> 'Адключыць',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Паказаны шлях «%s» не існуе.',
	'DIRECTORY_NOT_DIR'			=> 'Паказаны шлях «%s» не з\'яўляецца папкай.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Запіс у папку «%s» забароненая.',
	'DISABLE'					=> 'Адключыць',
	'DOWNLOAD'					=> 'Запампаваць',
	'DOWNLOAD_AS'				=> 'Запампаваць як',
	'DOWNLOAD_STORE'			=> 'Запампаваць або захаваць на серверы',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Вы можаце напроста запампаваць файл або захаваць яго на серверы ў папцы <samp>store/</samp>.',

	'EDIT'					=> 'Змяніць',
	'ENABLE'				=> 'Уключыць',
	'EXPORT_DOWNLOAD'		=> 'Запампаваць',
	'EXPORT_STORE'			=> 'Захаваць',

	'GENERAL_OPTIONS'		=> 'Агульныя параметры',
	'GENERAL_SETTINGS'		=> 'Агульныя налады',
	'GLOBAL_MASK'			=> 'Глабальная маска доступу',

	'INSTALL'				=> 'Усталяваць',
	'IP'					=> 'IP-адрас карыстальніка',
	'IP_HOSTNAME'			=> 'IP-адрасы або хасты',

	'LOGGED_IN_AS'			=> 'Вы ўвайшлі як:',
	'LOGIN_ADMIN'			=> 'Для ўваходу ў адміністратарскі раздзел вы павінны быць аўтарызаваныя.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Для ўваходу ў адміністратарскі раздзел неабходна паўторна ўвесці сваё імя і пароль.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Праверка сапраўднасці прайшла паспяхова. Зараз вы будзеце перанакіраваныя ў адміністратарскі раздзел.',
	'LOOK_UP_FORUM'			=> 'Вылучыце форум',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Можна вылучыць больш аднаго форума.',

	'MANAGE'				=> 'Кіраванне',
	'MENU_TOGGLE'			=> 'Паказаць або схаваць бакавое меню',
	'MOVE_DOWN'				=> 'Уніз',
	'MOVE_UP'				=> 'Уверх',

	'NOTIFY'				=> 'Апавяшчэнне',
	'NO_ADMIN'				=> 'У вас няма праў для доступу ў адміністратарскі раздзел.',
	'NO_EMAILS_DEFINED'		=> 'Не знойдзена правільных адрасоў электроннай пошты.',
	'NO_PASSWORD_SUPPLIED'	=> 'Неабходна ўвесці пароль для атрымання доступу ў адміністратарскі раздзел.',

	'OFF'					=> 'Адключана',
	'ON'					=> 'Уключана',

	'PARSE_BBCODE'						=> 'Дазволіць BBCode',
	'PARSE_SMILIES'						=> 'Дазволіць смайлікі',
	'PARSE_URLS'						=> 'Дазволіць спасылкі',
	'PERMISSIONS_TRANSFERRED'			=> 'Перадача праў доступу',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'У цяперашні час вы маеце правы карыстальніка %1$s. Вы можаце праглядаць форумы з гэтымі правамі, але не будзеце мець доступу да адміністратарскага раздзелу, паколькі правы адміністратара не былі перададзеныя. Вы можаце <a href="%2$s"><strong>вярнуць свае правы</strong></a> у любы час.',
	'PIXEL'								=> 'пікс.',
	'PROCEED_TO_ACP'					=> '%sПерайсці у адміністратарскі раздзел%s',

	'REMIND'							=> 'Нагадаць',
	'RESYNC'							=> 'Сінхранізаваць',
	'RETURN_TO'							=> 'Вярнуцца ў…',

	'SELECT_ANONYMOUS'		=> 'Вылучыць уліковы запіс госця',
	'SELECT_OPTION'			=> 'Вылучыце дзеянне',

	'SETTING_TOO_LOW'		=> 'Уведзенае значэнне для “%1$s” занадта маленькае. Мінімальнае значэнне - %2$d.',
	'SETTING_TOO_BIG'		=> 'Уведзенае значэнне для “%1$s” занадта вялікае. Максімальнае значэнне - %2$d.',	
	'SETTING_TOO_LONG'		=> 'Уведзенае значэнне для “%1$s” занадта доўгае. Максімальная даўжыня - %2$d.',
	'SETTING_TOO_SHORT'		=> 'Уведзенае значэнне для “%1$s” занадта кароткае. Мінімальная даўжыня - %2$d.',

	'UCP'					=> 'Асабісты раздзел',
	'USERNAMES_EXPLAIN'		=> 'Уводзіце кожнае імя на новым радку.',
	'USER_CONTROL_PANEL'	=> 'Асабісты раздзел',

	'WARNING'				=> 'Папярэджанне',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Гэтая старонка адлюстроўвае звесткі аб версіі PHP, усталяванай на дадзеным серверы. Яна ўключае падрабязныя звесткі аб загружаных модулях, даступных пераменных і наладах па змаўчанні. Гэтая інфармацыя можа быць карыснай пры дыягнаставанні розных непаладак. Некаторыя хостынг-кампаніі абмяжоўваюць адлюстраванне гэтай інфармацыі па меркаваннях бяспекі. Не падавайце ніякіх звестак з гэтай старонкі нікому, акрамя <a href="http://www.phpbb.com/about/team/">афіцыйных чальцоў групы падтрымкі</a>.',

	'NO_PHPINFO_AVAILABLE'	=> 'Інфармацыя аб канфігурацыі PHP недаступная. Функцыя phpinfo() адключаная па меркаваннях бяспекі.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Гэта спіс дзеянняў, выкананых адміністратарамі канферэнцыі. Вы можаце сартаваць спіс па імі карыстальніка, даце, IP-адрасу або па дзеянні. Пры наяўнасці неабходных праў вы можаце выдаліць асобныя запісы або ачысціць увесь лог цалкам.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Гэта спіс дзеянняў, выкананых самой канферэнцыяй. Гэты часопіс падае інфармацыю, якую можна выкарыстаць для рашэння некаторых праблем. Напрыклад, з дастаўкай электронных паведамленняў. Вы можаце сартаваць спіс па імі карыстальніка, даце, IP-адрасу або па дзеянні. Пры наяўнасці неабходных праў вы можаце выдаліць асобныя запісы або ачысціць увесь лог цалкам.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Гэта спіс усіх дзеянняў, выкананых мадэратарамі ў форумах, тэмах і паведамленнях. Вы можаце сартаваць спіс па імі карыстальніка, даце, IP-адрасу або па дзеянні. Пры наяўнасці неабходных праў вы можаце выдаліць асобныя запісы або ачысціць увесь лог цалкам.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Гэта спіс дзеянняў, выкананых карыстальнікамі або над карыстальнікамі (скаргі, папярэджанні і нататкі аб карыстальніках).',
	'ALL_ENTRIES'				=> 'Усе запісы',

	'DISPLAY_LOG'	=> 'Паказаць запісы за',

	'NO_ENTRIES'	=> 'Няма запісаў у паказаны перыяд.',

	'SORT_IP'		=> 'IP-адрас',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Дзеянне',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Дзякуем за выбар phpBB у якасці рашэння для стварэння канферэнцыі. Дадзеная старонка падае кароткі агляд рознай статыстыкі канферэнцыі. Спасылкі злева дазваляюць кіраваць усімі аспектамі працы вашай канферэнцыі. Кожная старонка ўтрымоўвае інструкцыі па выкарыстанні дзеючай прылады.',
	'ADMIN_LOG'					=> 'Дзеянні адміністрацыі',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ніжэй находзіцца спіс пяці апошніх дзеянняў, выкананых адміністратарамі канферэнцыі. Поўную копію часопіса можна праглядзець, вылучыўшы адпаведную спасылку ў меню, або націснуўшы спасылку ніжэй «Лог адміністратараў».',
	'AVATAR_DIR_SIZE'			=> 'Памер папкі з аватарамі',

	'BOARD_STARTED'		=> 'Дата запуску канферэнцыі',
	'BOARD_VERSION'		=> 'Версія phpBB',

	'DATABASE_SERVER_INFO'	=> 'Сервер базы дадзеных',
	'DATABASE_SIZE'			=> 'Памер базы дадзеных',

	'FILES_PER_DAY'		=> 'Укладанняў у дзень',
	'FORUM_STATS'		=> 'Статыстыка канферэнцыі',

	'GZIP_COMPRESSION'	=> 'Сціск GZip',

	'NOT_AVAILABLE'		=> 'Недаступна',
	'NUMBER_FILES'		=> 'Укладанняў',
	'NUMBER_POSTS'		=> 'Паведамленняў',
	'NUMBER_TOPICS'		=> 'Тэм',
	'NUMBER_USERS'		=> 'Карыстальнікаў',
	'NUMBER_ORPHAN'		=> 'Страчаных укладанняў',

	'POSTS_PER_DAY'		=> 'Паведамленняў у дзень',

	'PURGE_CACHE'			=> 'Ачысціць кэш',
	'PURGE_CACHE_CONFIRM'	=> 'Вы сапраўды жадаеце ачысціць кэш?',
	'PURGE_CACHE_EXPLAIN'	=> 'Ачыстка ўсіх кэшаваных элементаў (кэшаваныя файлы шаблонаў і запытаў).',

	'RESET_DATE'					=> 'Скід даты запуску канферэнцыі',
	'RESET_DATE_CONFIRM'			=> 'Вы сапраўды жадаеце скінуць дату запуску канферэнцыі?',
	'RESET_ONLINE'					=> 'Абнуленне рэкорду наведвальнасці',
	'RESET_ONLINE_CONFIRM'			=> 'Вы сапраўды жадаеце абнуліць рэкорд наведвальнасці канферэнцыі?',
	'RESYNC_POSTCOUNTS'				=> 'Сінхранізаваць лічыльнікі паведамленняў',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Будуць улічаныя толькі наяўныя паведамленні. Выдаленыя паведамленні не будуць падлічаныя.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Вы сапраўды жадаеце сінхранізаваць лічыльнікі паведамленняў?',
	'RESYNC_POST_MARKING'			=> 'Сінхранізаваць свае тэмы',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Вы сапраўды жадаеце сінхранізаваць свае тэмы?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Здыманне пазанак са ўсіх тэм з наступнай карэктнай маркіроўкай усіх тэм, да якіх быў доступ у апошнія шэсць месяцаў.',
	'RESYNC_STATS'					=> 'Сінхранізаваць статыстыку',
	'RESYNC_STATS_CONFIRM'			=> 'Вы сапраўды жадаеце сінхранізаваць статыстыку?',
	'RESYNC_STATS_EXPLAIN'			=> 'Пералічэнне агульнай колькасці паведамленняў, тэм, карыстальнікаў і файлаў.',
	'RUN'							=> 'Выканаць',

	'STATISTIC'					=> 'Статыстыка',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Сінхранізацыя або скід статыстыкі',

	'TOPICS_PER_DAY'	=> 'Тэм у дзень',

	'UPLOAD_DIR_SIZE'	=> 'Памер усіх укладанняў',
	'USERS_PER_DAY'		=> 'Карыстальнікаў у дзень',

	'VALUE'					=> 'Значэнне',
	'VIEW_ADMIN_LOG'		=> 'Лог адміністратараў',
	'VIEW_INACTIVE_USERS'	=> 'Неактыўныя карыстальнікі',

	'WELCOME_PHPBB'			=> 'Сардэчна запрашаем у phpBB',
	'WRITABLE_CONFIG'		=> 'Ваш канфігурацыйны файл (config.php) даступны для запісу ўсім карыстальнікам. Пераканаўча рэкамендуецца змяніць правы доступу на 640 або, прынамсі, на 644 (напрыклад: <a href="http://ru.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Дата дэактывацыі',
	'INACTIVE_REASON'				=> 'Чыннік',
	'INACTIVE_REASON_MANUAL'		=> 'Уліковы запіс адключаны адміністратарам',
	'INACTIVE_REASON_PROFILE'		=> 'Зменены профіль',
	'INACTIVE_REASON_REGISTER'		=> 'Новы ўліковы запіс',
	'INACTIVE_REASON_REMIND'		=> 'Прымусовая паўторная актывацыя',
	'INACTIVE_REASON_UNKNOWN'		=> 'Невядома',
	'INACTIVE_USERS'				=> 'Неактыўныя карыстальнікі',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ніжэй находзіцца спіс зарэгістраваных карыстальнікаў, уліковыя запісы якіх неактыўныя. Вы можаце актываваць, выдаліць або адправіць неактыўным карыстальнікам электроннае паведамленне з напамінкам аб актывацыі.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ніжэй находзіцца спіс дзесяці апошніх зарэгістраваных карыстальнікаў, якія маюць неактыўныя ўліковыя запісы. Поўны спіс неактыўных карыстальнікаў можна праглядзець, вылучыўшы адпаведную спасылку ў меню, або націснуўшы спасылку ніжэй «Неактыўныя карыстальнікі». На старонцы «Неактыўныя карыстальнікі» вы можаце актываваць, выдаліць або адправіць неактыўным карыстальнікам электроннае паведамленне з напамінкам аб актывацыі.',

	'NO_INACTIVE_USERS'	=> 'Няма неактыўных карыстальнікаў',

	'SORT_INACTIVE'		=> 'Дата дэактывацыі',
	'SORT_LAST_VISIT'	=> 'Апошняе наведванне',
	'SORT_REASON'		=> 'Чыннік',
	'SORT_REG_DATE'		=> 'Дата рэгістрацыі',

	'USER_IS_INACTIVE'		=> 'Карыстальнік неактыўны',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Дададзеныя або змененыя карыстальніцкія правы карыстальнікаў</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Дададзеныя або змененыя карыстальніцкія правы груп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Дададзеныя або змененыя супермадэратарскія правы карыстальнікаў</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Дададзеныя або змененыя супермадэратарскія правы груп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Дададзеныя або змененыя адміністратарскія правы карыстальнікаў</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Дададзеныя або змененыя адміністратарскія правы груп</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Дададзеныя або змененыя адміністратары</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Дададзеныя або змененыя супермадэратары</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Дададзены або зменены доступ карыстальнікаў да форума</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Дададзены або зменены доступ мадэратара да форума</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Дададзены або зменены доступ груп да форума</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Дададзены або зменены мадэратарскі доступ груп да форума</strong> з %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Дададзеныя або змененыя мадэратары</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Дададзены або зменены доступ да форума</strong> з %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Выдаленыя адміністратары</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Выдаленыя супермадэратары</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Выдаленыя мадэратары</strong> з %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Выдалены доступ карыстальніка/групы да форума</strong> з %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Перанесеныя правы доступу карыстальніка</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Вернутыя свае правы доступу пасля выкарыстання праў карыстальніка</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Няўдалая спроба ўваходу ў якасці адміністратара</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Паспяховы ўваход у якасці адміністратара</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Выдаленыя ўкладанні карыстальніка</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Дададзена або зменена пашырэнне ўкладанняў</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Выдаленае пашырэнне ўкладанняў</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Абноўленае пашырэнне ўкладанняў</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Дададзеная група пашырэнняў</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Змененая група пашырэнняў</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Выдаленая група пашырэнняў</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Неўкладзены файл прымацаваны да паведамлення</strong><br />» ID %1$d — %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Неўкладзеныя файлы выдаленыя</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Выключаны карыстальнік з спісу заблакаваных</strong> па чынніку "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Выключаны IP-адрас з спісу заблакаваных</strong> па чынніку "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Выключаны email-адрас з спісу заблакаваных</strong> па чынніку "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Заблакаваны карыстальнік</strong> па чынніку "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Заблакаваны IP-адрас</strong> па чынніку "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Заблакаваны email-адрас</strong> па чынніку "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Разблакаваны карыстальнік</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Разблакаваны IP-адрас</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Разблакаваны email-адрас</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Дададзены новы BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Зменены BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Выдалены BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Дададзены новы бот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Выдалены бот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Абноўлены наяўны бот</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Вычышчаны лог адміністратара</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Вычышчаны лог памылак</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Вычышчаны лог мадэратара</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Вычышчаны лог карыстальніка</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Вычышчаныя логі карыстальнікаў</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Змененыя налады ўкладанняў</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Змененыя налады аўтэнтыфікацыі</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Змененыя налады аватар</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Змененыя налады cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Змененыя налады пошты</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Змененыя магчымасці канферэнцыі</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Змененыя налады нагрузкі на сервер</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Змененыя налады асабістых паведамленняў</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Змененыя налады паведамленняў</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Змененыя налады рэгістрацыі карыстальнікаў</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Змененыя налады пошуку</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Змененыя налады бяспекі</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Змененыя налады сервера</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Змененыя налады канферэнцыі</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Змененыя налады подпісаў</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Змененыя налады візуальнага пацверджання</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Ухваленая тэма</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Паднятая тэма</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Выдаленае паведамленне</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Выдаленая спасылка на перанесеную тэму</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Выдаленая тэма</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Скапіяваная тэма</strong><br />» з форума %s',
	'LOG_LOCK'					=> '<strong>Зачыненая тэма</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Заблакавана паведамленне</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Аб\'яднаныя паведамленні</strong> у тэму<br />» %s',
	'LOG_MOVE'					=> '<strong>Перамешчаная тэма</strong><br />» з %s',
	'LOG_POST_APPROVED'			=> '<strong>Ухвала паведамлення</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Адхіленне паведамлення «%1$s» па наступным чынніку</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Рэдагаванне паведамлення ў тэме «%1$s», напісанага аўтарам</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Зачыненне скаргі</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Выдаленне скаргі</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Перамешчаныя падзеленыя паведамленні</strong><br />» у %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Падзеленыя паведамленні</strong><br />» з %s',

	'LOG_TOPIC_APPROVED'			=> '<strong>Ухваленая тэма</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Адхіленне тэмы «%1$s» па наступным чынніку</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Сінхранізаваныя лічыльнікі тэмы</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Зменены тып тэмы</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Адчыненая тэма</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Разблакавана паведамленне</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Забароненае імя</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Дазволена імя</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Рэзервовае капіяванне базы дадзеных</strong>',
	'LOG_DB_DELETE'			=> '<strong>Выдаленне рэзервовай копіі базы дадзеных</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Аднаўленне базы дадзеных</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Выключаны IP-адрас/хост з спісу запампоўкі</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Дададзены IP-адрас/хост у спіс запампоўкі</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Выдалены IP-адрас/хост з спісу запампоўкі</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Памылка Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Памылка пошты</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Створаны форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Выдалены форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Выдалены форум з падфорумамі</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Выдалены форум і перамешчаныя падфорумы</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Выдалены форум і перамешчаныя паведамленні</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Выдалены форум з падфорумамі, перамешчаныя паведамленні</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Выдалены форум, перамешчаныя паведамленні</strong> у %1$s <strong>і падфорумы</strong> у %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Выдалены форум з паведамленнямі</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Выдалены форум з паведамленнямі і падфорумамі</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Выдалены форум з паведамленнямі, перамешчаныя падфорумы</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Змененая інфармацыя аб форуме</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Перамешчаны форум</strong> %1$s <strong>пад</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Перамешчаны форум</strong> %1$s <strong>над</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Сінхранізаваны форум</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Створаная група карыстальнікаў</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Прызначаная групай па змаўчанні для карыстальнікаў</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Выдаленая група</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Знятыя лідэры ў групе</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Прызначаныя лідэры ў групе</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Выдаленыя карыстальнікі з групы</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Абноўленая інфармацыя аб групе</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Дададзеныя новыя лідэры ў групу</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Ухваленыя кандыдаты ў групу</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Дададзеныя карыстальнікі ў групу</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Дададзены пакет малюнкаў у базу дадзеных</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Дададзены пакет малюнкаў на сервер</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Выдалены пакет малюнкаў</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Змененая інфармацыя аб пакеце малюнкаў</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Зменены пакет малюнкаў</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Экспартаваны пакет малюнкаў</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Адсутнічае лакалізацыя «%2$s» для набору малюнкаў</strong><br />» «%1$s»',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Абноўленая лакалізацыя набору малюнкаў «%2$s»</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Абноўлены набор малюнкаў</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Актываваныя неактыўныя карыстальнікі</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Выдаленыя неактыўныя карыстальнікі</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Адпраўленыя email-напамінкі неактыўным карыстальнікам</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Канферэнцыя %1$s сканвертаваная ў phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Усталяваны phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Няўдалая праверка сесіі па IP-адрасу/браўзэру/X_FORWARDED_FOR</strong><br />»IP-адрас карыстальніка "<em>%1$s</em>" правераны па IP-адрасу сесіі "<em>%2$s</em>", радок браўзэра карыстальніка "<em>%3$s</em>" правераная па радку браўзэра сесіі "<em>%4$s</em>" і радок X_FORWARDED_FOR карыстальніка "<em>%5$s</em>" правераная па радку X_FORWARDED_FOR сесіі "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Зменены ўліковы запіс Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Зменены пароль Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Зарэгістраваны ўліковы запіс Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Змененыя налады Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Выдалены моўны пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Усталяваны моўны пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Абноўленая інфармацыя аб моўным пакеце</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Заменены моўны файл</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Адпраўлены моўных файл і змешчаны ў папку store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Вырабленая масавае рассыланне пошты</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Зменены аўтар тэмы "%1$s"</strong><br />» з %2$s на %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Адключаны модуль</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Уключаны модуль</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Перамяшчэнне модуля</strong><br />» «%1$s» пад «%2$s»',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Перамяшчэнне модуля</strong><br />» «%1$s» над «%2$s»',
	'LOG_MODULE_REMOVED'	=> '<strong>Выдалены модуль</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Дададзены модуль</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Зменены модуль</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Дададзеная адміністратарская роля</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Змененая адміністратарская роля</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Выдаленая адміністратарская роля</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Дададзеная форумная роля</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Змененая форумная роля</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Выдаленая форумная роля</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Дададзеная мадэратарская роля</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Змененая мадэратарская роля</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Выдаленая мадэратарская роля</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Дададзеная карыстальніцкая роля</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Змененая карыстальніцкая роля</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Выдаленая карыстальніцкая роля</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Актывавана поле профіля</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Дададзена поле профіля</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Дэактываванае поле профіля</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Зменена поле профіля</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Выдаленае поле профіля</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Вычышчаныя форумы</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Вырабленая аўтаачыстка форумаў</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Дэактываваныя карыстальнікі</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Выдаленыя карыстальнікі з іх паведамленнямі</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Выдаленыя карыстальнікі, іх паведамлення пакінутыя</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Ачыстка кэша</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Дададзена званне</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Выдаленае званне</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Абноўленае званне</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Дададзеная чыннік скаргі/адхіленні</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Выдаленая чыннік скаргі/адхіленні</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Абноўленая чыннік скаргі/адхіленні</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Памылка праверкі рэферэра</strong><br />В»Рэферэр быў "<em>%1$s</em>". Запыт быў адхілены, і сесія была знішчана.',
	'LOG_RESET_DATE'			=> '<strong>Скінутая дата запуску канферэнцыі</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Скінуты рэкорд наведвальнасці</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Сінхранізаваныя лічыльнікі паведамленняў карыстальнікаў</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Сінхранізаваныя свае тэмы</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Сінхранізаваная статыстыка паведамленняў, тэм і карыстальнікаў</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Створаныя пошукавыя індэксы для</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Выдаленыя пошукавыя індэксы для</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Дададзены стыль</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Выдалены стыль</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Зменены стыль</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Экспартаваны стыль</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Дададзены шаблон у базу дадзеных</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Дададзены шаблон на сервер</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Выдаленая кэшаваная версія файлаў шаблону <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Выдалены шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Зменены шаблон <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Змененая інфармацыя аб шаблоне</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Экспартаваны шаблон</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Абноўлены шаблон</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Дададзеная тэма ў базу дадзеных</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Дададзеная тэма на сервер</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Выдаленая тэма</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Змененая інфармацыя аб тэме</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Змененая тэма <em>%1$s</em></strong><br />» Зменены клас <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Змена тэмы афармлення стылю <em>%1$s</em></strong><br />» Зменены файл <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Экспартаваная тэма</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Абноўленая тэма</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Абноўленая база дадзеных з версіі %1$s да версіі %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Абноўлены phpBB з версіі %1$s да версіі %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Актываваны карыстальнік</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Заблакаваны карыстальнік праз раздзел Кіраванне карыстальнікамі</strong> па чынніку "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Заблакаваны IP-адрас праз раздзел Кіраванне карыстальнікамі</strong> па чынніку "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Заблакаваны email-адрас праз раздзел Кіраванне карыстальнікамі</strong> па чынніку "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Выдалены карыстальнік</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Выдаленыя ўсё ўкладанні карыстальніка</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Выдаленая аватара карыстальніка</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Выдаленыя ўсё паведамленні карыстальніка</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Выдаленая подпіс карыстальніка</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Дэактываваны карыстальнік</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Перамешчаныя паведамленні карыстальніка</strong><br />» «%1$s» у форум «%2$s»',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Зменены пароль карыстальніка</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Прымусовая паўторная актывацыя ўліковага запісу карыстальніка</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Карыстальнікам "%1$s" зменены email-адрас</strong><br />» з «%2$s» на «%3$s»"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Зменена імя карыстальніка</strong><br />» з «%1$s» на «%2$s»',
	'LOG_USER_USER_UPDATE'	=> '<strong>Абноўленая інфармацыя аб карыстальніку</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Актываваны ўліковы запіс карыстальніка</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Выдаленая аватара карыстальніка</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Выдаленая подпіс карыстальніка</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Дададзеная нататка аб карыстальніку</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Дададзены элемент:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Дэактываваны ўліковы запіс карыстальніка</strong>',
	'LOG_USER_LOCK'				=> '<strong>Карыстальнік зачыніў сваю тэму</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Перамешчаныя ўсё паведамленні ў форум "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Прымусовая паўторная актывацыя ўліковага запісу карыстальніка</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Карыстальнік адчыніў сваю тэму</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Вынесенае папярэджанне карыстальніку</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Карыстальніку вынесенае наступнае папярэджанне</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Карыстальнік змяніў групу па змаўчанні</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Карыстальнік сняць з лідэраў групы</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Карыстальнік уступіў у групу</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Карыстальнік падаў запыт на ўступ у групу і павінен быць ухвалены</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Карыстальнік адмовіўся ад чалецтва ў групе</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Дададзены цэнзар слоў</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Выдалены цэнзар слоў</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Зменены цэнзар слоў</strong><br />» %s',
));

?>
