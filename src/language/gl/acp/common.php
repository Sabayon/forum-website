<?php
/** 
*
* acp common [Galician]
*
* @package language
* @version $Id: common.php 10134 2009-09-10 15:32:16Z marshalrusty $
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
	'ACP_ADMINISTRATORS'		=> 'Administradores',
	'ACP_ADMIN_LOGS'			=> 'Rexistro de administración',
	'ACP_ADMIN_ROLES'			=> 'Roles de administración',
	'ACP_ATTACHMENTS'			=> 'Adxuntos',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Configuración de Adxuntos',
	'ACP_AUTH_SETTINGS'			=> 'Autenticación',
	'ACP_AUTOMATION'			=> 'Automatización',
	'ACP_AVATAR_SETTINGS'		=> 'Axustes dos Avatares',

	'ACP_BACKUP'				=> 'Copia de respaldo',
	'ACP_BAN'					=> 'Prohibicións',
	'ACP_BAN_EMAILS'			=> 'Prohibir correos-e',
	'ACP_BAN_IPS'				=> 'Prohibir IPs',
	'ACP_BAN_USERNAMES'			=> 'Bloquear Nomes de Usuario',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuración do Foro',
	'ACP_BOARD_FEATURES'		=> 'Características do foro',
	'ACP_BOARD_MANAGEMENT'		=> 'Xestión do foro',
	'ACP_BOARD_SETTINGS'		=> 'Axustes do foro',
	'ACP_BOTS'					=> 'Spiders/Robots',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Base de datos',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Foros',
	'ACP_CAT_GENERAL'			=> 'Xeral',
	'ACP_CAT_MAINTENANCE'		=> 'Mantemento',
	'ACP_CAT_PERMISSIONS'		=> 'Permisos',
	'ACP_CAT_POSTING'			=> 'Publicando',
	'ACP_CAT_STYLES'			=> 'Estilos',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Usuarios e Grupos',
	'ACP_CAT_USERS'				=> 'Usuarios',
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicación do cliente',
	'ACP_COOKIE_SETTINGS'		=> 'Configuracións das cookies',
	'ACP_CRITICAL_LOGS'			=> 'Rexistro de Erros',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Campos do Perfil á Medida',
	
	'ACP_DATABASE'				=> 'Xestión de bases de datos',
	'ACP_DISALLOW'				=> 'Impedir',
	'ACP_DISALLOW_USERNAMES'	=> 'Nomes de usuario anulados',
	
	'ACP_EMAIL_SETTINGS'		=> 'Configuración do Correo-e',
	'ACP_EXTENSION_GROUPS'		=> 'Xestionar extensión dos grupos',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permisos baseados no foro',
	'ACP_FORUM_LOGS'				=> 'Rexistros (logs) de foro',
	'ACP_FORUM_MANAGEMENT'			=> 'Administración do foro',
	'ACP_FORUM_MODERATORS'			=> 'Moderadores do foro',
	'ACP_FORUM_PERMISSIONS'			=> 'Permisos dos Foros',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Copiar permisos do foro',
	'ACP_FORUM_ROLES'				=> 'Roles no foro',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuración Xeral',
	'ACP_GENERAL_TASKS'				=> 'Tarefas xerais',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores Globais',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permisos Globais',
	'ACP_GROUPS'					=> 'Grupos',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Autorizacións para foro de grupos',
	'ACP_GROUPS_MANAGE'				=> 'Xestionar grupos',
	'ACP_GROUPS_MANAGEMENT'			=> 'Xestión de grupos',
	'ACP_GROUPS_PERMISSIONS'		=> 'Autorización para grupos',
	
	'ACP_ICONS'					=> 'Iconas de tema',
	'ACP_ICONS_SMILIES'			=> 'Temas iconas/sorrisos',
	'ACP_IMAGESETS'				=> 'Xogos de Imaxes',
	'ACP_INACTIVE_USERS'		=> 'Usuarios inactivos',
	'ACP_INDEX'					=> 'Índice do Administrador',
	
	'ACP_JABBER_SETTINGS'		=> 'Axustes do Jabber',
	
	'ACP_LANGUAGE'				=> 'Xestión do idioma',
	'ACP_LANGUAGE_PACKS'		=> 'Paquetes de idioma',
	'ACP_LOAD_SETTINGS'			=> 'Opcións de Carga',
	'ACP_LOGGING'				=> 'Iniciando sesión',
	
	'ACP_MAIN'					=> 'Índice do Administrador',
	'ACP_MANAGE_EXTENSIONS'		=> 'Xestión de extensións',
	'ACP_MANAGE_FORUMS'			=> 'Xestión de Foros',
	'ACP_MANAGE_RANKS'			=> 'Xestión de rangos',
	'ACP_MANAGE_REASONS'		=> 'Xestión do informe/razóns de denegación',
	'ACP_MANAGE_USERS'			=> 'Administrar Usuarios',
	'ACP_MASS_EMAIL'			=> 'Email masivo',
	'ACP_MESSAGES'				=> 'Mensaxes',
	'ACP_MESSAGE_SETTINGS'		=> 'Configuración de mensaxes privadas',
	'ACP_MODULE_MANAGEMENT'		=> 'Administración de módulos',
	'ACP_MOD_LOGS'				=> 'Rexistro do moderador',
	'ACP_MOD_ROLES'				=> 'Roles do moderador',
	
	'ACP_NO_ITEMS'				=> 'Aínda non hai elementos.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Adxuntos Orfos',
	
	'ACP_PERMISSIONS'			=> 'Permisos',
	'ACP_PERMISSION_MASKS'		=> 'Máscaras de autorización',
	'ACP_PERMISSION_ROLES'		=> 'Roles de autorización',
	'ACP_PERMISSION_TRACE'		=> 'Rastro de autorización',
	'ACP_PHP_INFO'				=> 'Información do PHP',
	'ACP_POST_SETTINGS'			=> 'Configuración das mensaxes',
	'ACP_PRUNE_FORUMS'			=> 'Foros cortados',
	'ACP_PRUNE_USERS'			=> 'Usuarios cortados',
	'ACP_PRUNING'				=> 'Purgando',
	
	'ACP_QUICK_ACCESS'			=> 'Acceso Rápido',
	
	'ACP_RANKS'					=> 'Rangos',
	'ACP_REASONS'				=> 'Razóns de informe/denegación',
	'ACP_REGISTER_SETTINGS'		=> 'Configuracións para o rexistro de usuario',

	'ACP_RESTORE'				=> 'Restaurar',

	'ACP_FEED'					=> 'Xestión do fluxo',
	'ACP_FEED_SETTINGS'			=> 'Configuración do fluxo',

	'ACP_SEARCH'				=> 'Configuración da procura',
	'ACP_SEARCH_INDEX'			=> 'Índice da procura',
	'ACP_SEARCH_SETTINGS'		=> 'Opcións da procura',

	'ACP_SECURITY_SETTINGS'		=> 'Opcións de seguridade',
	'ACP_SEND_STATISTICS'		=> 'Enviar información estatística',
	'ACP_SERVER_CONFIGURATION'	=> 'Configuración do servidor',
	'ACP_SERVER_SETTINGS'		=> 'Opcións do servidor',
	'ACP_SIGNATURE_SETTINGS'	=> 'Opcións de sinatura',
	'ACP_SMILIES'				=> 'Risoños',
	'ACP_STYLE_COMPONENTS'		=> 'Elementos de estilo',
	'ACP_STYLE_MANAGEMENT'		=> 'Xestión de estilo',
	'ACP_STYLES'				=> 'Estilos',
	
	'ACP_SUBMIT_CHANGES'		=> 'Enviar trocos',

	'ACP_TEMPLATES'				=> 'Sobreplantas',
	'ACP_THEMES'				=> 'Temas',
	
	'ACP_UPDATE'					=> 'Actualizando',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Autorizacións para o foro de usuarios',
	'ACP_USERS_LOGS'				=> 'Rexistro de usuario',
	'ACP_USERS_PERMISSIONS'			=> 'Autorizacións para os usuarios',
	'ACP_USER_ATTACH'				=> 'Adxuntos',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Retroalimentación',
	'ACP_USER_GROUPS'				=> 'Grupos',
	'ACP_USER_MANAGEMENT'			=> 'Administración do usuario',
	'ACP_USER_OVERVIEW'				=> 'Resumo',
	'ACP_USER_PERM'					=> 'Permisos',
	'ACP_USER_PREFS'				=> 'Preferencias',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rango',
	'ACP_USER_ROLES'				=> 'Roles do usuario',
	'ACP_USER_SECURITY'				=> 'Seguridade do usuario',
	'ACP_USER_SIG'					=> 'Sinatura',
	'ACP_USER_WARNINGS'				=> 'Avisos',

	'ACP_VC_SETTINGS'					=> 'Opcións do módulo CAPTCHA',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Previsualización de imaxes CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Comprobar a existencia de actualizacións',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Ver permisos administrativos',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Ver autorizacións para moderar o foro',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Ver permisos baseados no foro',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Ver autorizacións de moderador global',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Ver permisos baseados no usuario',
	
	'ACP_WORDS'					=> 'Censura de comentarios',

	'ACTION'				=> 'Acción',
	'ACTIONS'				=> 'Accións',
	'ACTIVATE'				=> 'Activar',
	'ADD'					=> 'Engadir',
	'ADMIN'					=> 'Administración',
	'ADMIN_INDEX'			=> 'Índice do Administrador',
	'ADMIN_PANEL'			=> 'Panel de Control da Administración',

	'ADM_LOGOUT'			=> 'Remate de Sesión ACP',
	'ADM_LOGGED_OUT'		=> 'Rematouse a sesión do Panel de Control da Administración de xeito correcto',

	'BACK'					=> 'Atrás',

	'COLOUR_SWATCH'			=> 'Cambiar a cor de web segura',
	'CONFIG_UPDATED'		=> 'Configuración actualizada con éxito',

	'DEACTIVATE'				=> 'Desactivar',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A ruta introducida "%s" non existe',
	'DIRECTORY_NOT_DIR'			=> 'A ruta introducida "%s" non é un directorio.',
	'DIRECTORY_NOT_WRITABLE'	=> 'A ruta introducida "%s" non é escribible',
	'DISABLE'					=> 'Desactivar',
	'DOWNLOAD'					=> 'Descargar',
	'DOWNLOAD_AS'				=> 'Descargar como',
	'DOWNLOAD_STORE'			=> 'Descargar ou almacenar ficheiro',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Podes descargar o arquivo directamente ou gardalo no teu cartafol store/',

	'EDIT'					=> 'Editar',
	'ENABLE'				=> 'Habilitar',
	'EXPORT_DOWNLOAD'		=> 'Descargar',
	'EXPORT_STORE'			=> 'Almacenar',

	'GENERAL_OPTIONS'		=> 'Opcións xerais',
	'GENERAL_SETTINGS'		=> 'Configuración xeral',
	'GLOBAL_MASK'			=> 'Máscara de autorización global',

	'INSTALL'				=> 'Instalar',
	'IP'					=> 'IP do Usuario',
	'IP_HOSTNAME'			=> 'Enderezos IP ou nomes de host',

	'LOGGED_IN_AS'			=> 'Iniciaches sesión como:',
	'LOGIN_ADMIN'			=> 'Para administrar o taboleiro debes ser un usuario autenticado.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Para administrar o taboleiro debes autenticarse de novo.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Fuches autenticado correctamente e agora serás redireccionado ao Panel de Control da Administración',
	'LOOK_UP_FORUM'			=> 'Selecciona un Foro',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Podes seleccionar máis dun foro.',

	'MANAGE'				=> 'Xestionar',
	'MENU_TOGGLE'			=> 'Agochar ou amosar o menu lateral',
	'MORE'					=> 'Máis',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Máis información »',
	'MOVE_DOWN'				=> 'Baixar',
	'MOVE_UP'				=> 'Subir',

	'NOTIFY'				=> 'Notificación',
	'NO_ADMIN'				=> 'Non tes autorización para administrar este taboleiro.',
	'NO_EMAILS_DEFINED'		=> 'Non se atoparon enderezos de correo válidos',
	'NO_PASSWORD_SUPPLIED'	=> 'Tes que inserir o teu contrasinal para poder acceder ao Panel de Control da Administración.',	

	'OFF'					=> 'Desconectado',
	'ON'					=> 'No',

	'PARSE_BBCODE'						=> 'Procesar BBCode',
	'PARSE_SMILIES'						=> 'Comprobar cariñas',
	'PARSE_URLS'						=> 'Comprobar ligazóns',
	'PERMISSIONS_TRANSFERRED'			=> 'Permisos transferidos',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Estás actualmente utilizando os permisos de %1$s. Podes navegar no foro cos permisos de usuario pero non podes acceder ao panel de control de administración xa que os permisos de administración non foron transferidos. Podes <a href="%2$s"><strong> volver á túa configuración de permiso </strong></a> en calquer momento.',
	'PIXEL'							=> 'px',	
	'PROCEED_TO_ACP'					=> '%sIr ao panel de control ACP%s',

	'REMIND'							=> 'Lembrar',
	'RESYNC'							=> 'Resincronizar',
	'RETURN_TO'							=> 'Volver a.',

	'SELECT_ANONYMOUS'		=> 'Seleccionar Usuario Anónimo',
	'SELECT_OPTION'			=> 'Escolle opción',

	'SETTING_TOO_LOW'		=> 'O valor inserido para a opción “%1$s” é pequeno de máis. O valor mínimo permitido é %2$d.',
	'SETTING_TOO_BIG'		=> 'O valor inserido para a opción “%1$s” é grande de máis. O valor máximo permitido é %2$d.',	
	'SETTING_TOO_LONG'		=> 'O valor inserido para a opción “%1$s” é longo de máis. A lonxitude máxima permitida é %2$d.',
	'SETTING_TOO_SHORT'		=> 'O valor inserido para a opción “%1$s” é curto de máis. A lonxitude mínima permitida é %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Amosar todas as operacións',

	'UCP'					=> 'Panel de Control de Usuarios',
	'USERNAMES_EXPLAIN'		=> 'Pon cada nome de usuario nunha liña distinta',
	'USER_CONTROL_PANEL'	=> 'Panel de Control de Usuarios',

	'WARNING'				=> 'Advertencia',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Esta páxina proporciona información da versión do PHP instalada no servidor. Inclúe pormenores dos módulos cargados, variábeis dispoñíbeis e axustes por defecto, información que pode ser de utilidade para diagnosticar problemas. Ten en conta que algunhas compañías de hospedaxe web limitarán a información aquí á vista por motivos de seguridade. Recoméndase non dar detalles dos datos desta páxina agás cando sexan preguntados polo servizo de soporte ou por outros Membros do Equipo nos foros de axuda.',

	'NO_PHPINFO_AVAILABLE'	=> 'No foi posible determinar a información relativa á configuración do teu PHP. Desactivouse o Phpinfo() por motivos de seguridade.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Aquí lístanse todas as accións levadas a cabo polos administradores. Podes ordenalas por usuario, data, IP ou acción. Se tes a autorización axeitada tamén podes eliminar operacións individuais ou o rexistro completo.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Aqui lístanse as accións levadas a cabo polo board. Este rexistro proporciónache información que podes usar para arranxar problemas específicos, por exemplo emails non enviados. Podes ordenar por nome de usuario, data, IP ou acción. Se tes permisos axeitados tamén podes borrar as operacións individuais ou o rexistro completo.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Aquí lístanse as accións levadas a cabo polos moderadores nos foros, temas e mensaxes, así como as accións levadas a cabo cos usuarios incluíndo as prohibicións. Podes ordenar por nome de usuario, data, IP ou acción. Se tes as autorizacións axeitadas tamén podes limpar accións individuais o u o rexistro de operacións na súa totalidade.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Aquí lístanse todas as accións realizadas por usuarios ou con usuarios.',
	'ALL_ENTRIES'				=> 'Todas as entradas',

	'DISPLAY_LOG'	=> 'Visualizar entradas dende as previas',

	'NO_ENTRIES'	=> 'Non hai entradas no rexistro (log) para este período',

	'SORT_IP'		=> 'Enderezo IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Acción de rexistro',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Moitas grazas por elixir o phpBB para os teus foros. Esta pantalla amosarache un rápido resumo das diversas estatísticas do teu taboleiro. As ligazóns da parte esquerda da pantalla permitiranche controlar todos os axustes dos teus foros e cada páxina terá instrucións sobre como usar as ferramentas correspondentes.',
	'ADMIN_LOG'					=> 'Acción de administrador rexistrado',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aquí pode obter unha vista das últimas cinco accións levadas a cabo polos administradores do taboleiro. Unha copia completa do rexistro pódese ver desde o elemento apropiado do menú ou seguindo a ligazón de embaixo.',
	'AVATAR_DIR_SIZE'			=> 'Tamaño do directorio para os avatares',

	'BOARD_STARTED'		=> 'Foro iniciado',
	'BOARD_VERSION'		=> 'Versión do taboleiro',

	'DATABASE_SERVER_INFO'	=> 'Servidor da base de datos',
	'DATABASE_SIZE'			=> 'Tamaño da Base de Datos',

	'FILES_PER_DAY'		=> 'Anexos por día',
	'FORUM_STATS'		=> 'Estatísticas do Foro',

	'GZIP_COMPRESSION'	=> 'Compresión GZip',

	'NOT_AVAILABLE'		=> 'Non dispoñible',
	'NUMBER_FILES'		=> 'Número de Adxuntos',
	'NUMBER_POSTS'		=> 'Número de mensaxes',
	'NUMBER_TOPICS'		=> 'Número de temas',
	'NUMBER_USERS'		=> 'Número de usuarios',
	'NUMBER_ORPHAN'		=> 'Anexos orfos',

	'POSTS_PER_DAY'		=> 'Mensaxes por día',

	'PURGE_CACHE'			=> 'Purgar a caché',
	'PURGE_CACHE_CONFIRM'	=> 'Estás certo de querer purgar a caché?',
	'PURGE_CACHE_EXPLAIN'	=> 'Purgar todos os elementos relacionados coa caché, incluidos calquera arquivo de sobreplanta ou peticións gardadas na mesma.',

	'PURGE_SESSIONS'			=> 'Purgar todas as sesións',
	'PURGE_SESSIONS_CONFIRM'	=> 'Estás certo de quereres purgar todas as sesións? Isto forzará o remate das sesións de todos os usuarios conectados.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Purga todas as sesións. Isto forzará o remate de todas as sesións dos usuarios conectados truncando a táboa de sesións.',

	'RESET_DATE'			=> 'Restaurar data',
	'RESET_DATE_CONFIRM'			=> 'Estás certo de querer reiniciar a data de inicio do taboleiro?',
	'RESET_ONLINE'			=> 'Restaurar online',
	'RESET_ONLINE_CONFIRM'			=> 'Estas certo de querer reiniciar o contador da maior cantidade de usuarios en liña?',
	'RESYNC_POSTCOUNTS'		=> 'Resincronizar contadores de mensaxes',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Só se considerarán as mensaxes publicadas existentes. As mensaxes purgadas non serán contabilizadas.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Estás certo de querer resincronizar o contador de mensaxes publicadas?',
	'RESYNC_POST_MARKING'	=> 'Actualiza de novo os temas marcados',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Estás certo de querer resincronizar os temas marcados?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro tira a marca do todos os temas e logo marca correctamente aqueles que rexistraron algunha actividade nos últimos seis meses.',
	'RESYNC_STATS'			=> 'Resincronizar estatísticas',
	'RESYNC_STATS_CONFIRM'			=> 'Estás certo de querer resincronizar as estatísticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcula o número total de mensaxes publicadas, temas, usuarios e arquivos.',
	'RUN'							=> 'Executar agora',

	'STATISTIC'			=> 'Estatística',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resincronizar ou reiniciar estatísticas',

	'TOPICS_PER_DAY'	=> 'Temas por día',

	'UPLOAD_DIR_SIZE'	=> 'Tamaño de anexos enviados',
	'USERS_PER_DAY'		=> 'Usuarios por día',

	'VALUE'					=> 'Valor',
	'VERSIONCHECK_FAIL'			=> 'Non foi posíbel obter a información da última versión.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Comprobar versión de novo',
	'VIEW_ADMIN_LOG'		=> 'Ver rexistro do administrador',
	'VIEW_INACTIVE_USERS'	=> 'Ver usuarios inactivos',

	'WELCOME_PHPBB'			=> 'Benvido ao phpBB',
	'WRITABLE_CONFIG'		=> 'O teu arquivo de configuración (config.php) ten actualmente permisos de escritura para todo o mundo. Recomendásmoche encarecidamente que mudes os permisos a 640 ou, polo menos, a 644 (por exemplo: <a href="http://gl.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data de inactividade',
	'INACTIVE_REASON'				=> 'Razón',
	'INACTIVE_REASON_MANUAL'		=> 'Conta desactivada polo administrador',
	'INACTIVE_REASON_PROFILE'		=> 'Trocos no perfil',
	'INACTIVE_REASON_REGISTER'		=> 'Contas rexistradas recentemente',
	'INACTIVE_REASON_REMIND'		=> 'Forzada reactivación da conta do usuario',
	'INACTIVE_REASON_UNKNOWN'		=> 'Descoñecido',
	'INACTIVE_USERS'				=> 'Usuarios Inactivos',
	'INACTIVE_USERS_EXPLAIN'		=> 'Isto é unha listaxe de usuarios que se rexistraron pero cuxas contas están inactivas. Ti podes activar, borrar ou lembrar (enviándolles un correo) estes usuarios se o desexas.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Esta é unha listaxe dos dez últimos usuarios rexistrados que teñen contas inactivas. Unha listaxe completa está dispoñible desde o elemento apropiado do menú ou seguindo a ligazón de embaixo onde podes activar, eliminar ou avisar (por email) a estes usuarios.',

	'NO_INACTIVE_USERS'	=> 'Ningún usuario inactivo',

	'SORT_INACTIVE'		=> 'Data de inactividade',
	'SORT_LAST_VISIT'	=> 'Última visita',
	'SORT_REASON'		=> 'Razón',
	'SORT_REG_DATE'		=> 'Data de rexistro',
	'SORT_LAST_REMINDER'=> 'Lembrado por última vez',
	'SORT_REMINDER'		=> 'Lembranza enviada',

	'USER_IS_INACTIVE'		=> 'Usuario inactivo',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Por favor, envía información relativa á configuración do teu servidor e do teu taboleiro para o phpBB con vistas á unha análise estatística. Toda a información que te puder identificar a ti ou ao teu sitio foi eliminada - os datos son completamente <strong>anonimos</strong>. As decisións verbo das futuras versións do phpBB hanse basear nesta información e as estatísticas hanse facer públicas. Tamén imos compartir estes datos co proxecto PHP, a linguaxe de programación coa que se desenvolve o phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Empregando o seguinte botón podes previsualizar todas as variábeis que van ser transmitidas.',
	'DONT_SEND_STATISTICS'		=> 'Volve para o PCA se non queres enviar información estatística ao phpBB.',
	'GO_ACP_MAIN'				=> 'Ir á páxina de inicio do PCA',
	'HIDE_STATISTICS'			=> 'Agochar pormenores',
	'SEND_STATISTICS'			=> 'Enviar información estatística',
	'SHOW_STATISTICS'			=> 'Amosar pormenores',
	'THANKS_SEND_STATISTICS'	=> 'Moitas grazas por enviares a túa información.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Permisos de usuario engadidos ou editados para usuarios </strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Permisos de usuario engadidos ou editados para grupos</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Permisos engadidos ou editados de moderador global para usuarios</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Engadidos ou editados permisos de moderador global para grupos</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Engadidos ou editados permisos de administrador de usuarios</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Engadidos ou editados permisos de administrador para grupos</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Administradores engadidos ou editados</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Moderadores globais engadidos ou editados</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Engadido ou editado acceso ao foro de usuarios </strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Engadido ou editado acceso de moderador de foro de usuarios</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Engadido ou editado acceso ao foro de grupos</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Engadido ou editado acceso de moderador de foro de grupos</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderadores engadidos ou editados</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Autorizacións de foro engadias ou editadas</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administradores eliminados</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderadores globais eliminados</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderadores eliminados</strong> desde %1$s<br />» %2$',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Autorizacións para foros de usuario/gruppo revogadas</strong> desde %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Autorizacións transferidas desde</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Permisos propios devoltos despois de utilizar permisos de </strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Intento de acceso á administración fallido</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Acceso á administración exitoso</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Adxuntos do usuario eliminados</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Extensión adxunta engadida ou editada</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extensión adxunta eliminada</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Extensión adxunta actualizada</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Engadido grupo de extensión</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Editado grupo de extensión</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Eliminado grupo de extensión</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Ficheiro orfo transferido aos comentarios</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Ficheiros orfos eliminados</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Usuario excluído por bloqueo(banned)</strong> polo motivo "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP excluída por bloqueo(banned)</strong> polo motivo "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Email excluído por bloqueo(banned)</strong> polo motivo "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Usuario suspendido</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP suspendida</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail suspendido</strong> pola razón "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Usuario readmitido</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP readmitida</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail readmitido</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Engadido novo BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode editado</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode eliminado</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Engadido novo bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot eliminado</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Actualizado bot existente</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Rexistro de administración borrado</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Rexistro de erros borrado</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Rexistro do moderador borrado</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Rexistro de usuario borrado</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Rexistros de usuario borrados</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Configuración de anexos alterada</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Opcións de autenticación modificadas</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Configuración da imaxe(avatar) alterada</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Opcións de cookie modificadas</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Opcións de email modificadas</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Características do taboleiro modificadas</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Opcións de carga alteradas</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Opcións de mensaxes privadas modificadas</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Configuración de mensaxes alterada</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Opcións de rexistro de usuario modificadas</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Opcións de fluxos de sindicación modificadas</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Opcións de pesquisa modificadas</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Opcións de seguridade modificadas</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Opcións de servidor modificadas</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Opcións de board modificadas</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Opcións de sinatura modificadas</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Opcións antibot modificadas</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Tema aprovado</strong><br />» %',
	'LOG_BUMP_TOPIC'			=> 'Tema rexeitado do usuario',
	'LOG_DELETE_POST'			=> '<strong>Eliminada a mensaxe publicada “%1$s” escrita por</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Tema sombreado eliminado</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Eliminado o tema “%1$s” escrito por</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Tema copiado</strong><br />» desde %s',
	'LOG_LOCK'					=> '<strong>Tema pechado</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Comentario bloqueado</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Comentarios xuntados</strong> dentro do tema<br />»%s',
	'LOG_MOVE'					=> '<strong>Tema movido</strong><br />» desde %1$s ata %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Informe sobre MP pechado</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Informe sobre MP eliminado</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Mensaxe aprobada</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mensaxe non aprobada “%1$s” polo seguinte motivo</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Editada a mensaxe publicada “%1$s” escrita por</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Informe pechado</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Informe eliminado</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mensaxes publicadas divididas movidas</strong><br />» a %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Mensaxes publicadas divididas</strong><br />» desde %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Tema aprobado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tema non aprobado “%1$s” polo seguinte motivo</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Contadores de temas resincronizados</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Clase de tema cambiado</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Tema desbloqueado</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Comentario desbloqueado</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Engadido usuario rexeitado</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Nome de usuario desautorizado borrado</strong>',

	'LOG_DB_BACKUP'			=> '<b>Copia de seguridade da base de dados</b>',
	'LOG_DB_DELETE'			=> '<strong>Copia de seguridade do banco de datos eliminada</strong>',
	'LOG_DB_RESTORE'		=> '<b>Restaurar base de dados</b>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/nome de host excluído da a listaxe de descargas</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Engadido IP/nome de host á listaxe de descargas</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/nome de host eliminado da listaxe de descargas</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Erro co Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Erro co email</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Creado novo foro</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Permisos do foro copiados</strong> desde %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Foro borrado</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Foros e os seus subforos eliminados</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Foros borrados e subforos movidos</strong> a %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Foros borrados e comentarios movidos </strong> a %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Foros e os seus subforos eliminados, mensaxes movidas</strong> a %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Foros borrados, comentarios movidos</strong> a %1$s <strong>e subforos</strong> a %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Foro e mensaxes eliminado</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Foros eliminados, as súas mensaxes e subforos</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Eliminados foros e os seus comentarios, movidos subforos</strong> a %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Detalles do foro editados</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Foros movidos</strong> %1$s <strong>debaixo</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Foros movidos</strong> %1$s <strong>enriba</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Foro resincronizado</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Houbo un erro xeral</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Creado novo grupo de usuarios</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupo por defeito para membros</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Grupo de usuarios borrado</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Líderes degradados no grupo de usurio</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Membros promocionados a líder no grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Membros retirados desde o grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detalles do grupo de usuario actualizados</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Engadido novo líder ao grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Engadidos novos membros ao grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Usuarios aprobados no grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Hai usuarios que solicitaron unirense ao grupo “%1$s” e precisan ser aprovados</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Erro ao tentar crear unha imaxe</strong><br />» Erro en %1$s na liña %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Engadido novo xogo de imaxes á base de datos</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Engadido novo conxunto de imaxes no sistema de arquivos</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Conxunto de imaxes borrado</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Editados os detalles do conxunto de imaxes</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Conxunto de imaxes editado</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Conxunto de imaxes exportado</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>O conxunto de imaxes perdeu a localización “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Actualizada a localización “%2$s” do conxunto de imaxes</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Conxunto de imaxes recargado</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activados usuarios inactivos</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Borrados usuarios inactivos</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Enviar emails recordatorios a usuarios inactivos</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Convertido desde %1$s a phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB instalado %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>/Fallo na comprobación de navegador/IP na sesión</strong><br />»User IP "<em>%1$s</em>" comprobado contra IP da sesión "<em>%2$s</em>" e cadea do navegador do usuario"<em>%3$s</em>" comprobado contra a cadea do navegador da sesión"<em>%4$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Conta Jabber trocada</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Contrasinal Jabber trocada</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Conta Jabber rexistrada</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>A configuración de Jabber cambiou</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Borrado paquete de lingua</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instalado paquete de idioma</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Actualizados detalles do paquete de idioma</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Reemprazado o ficheiro de idioma</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Arquivo de idioma enviado e gardado no cartafol de almacenaxe</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Correo masivo enviado</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Cambiado póster do tema "%1$s"</strong><br />» desde %2$s a %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Módulo deshabilitado</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Módulo activado</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Módulo baixado</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Módulo subido</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Módulo eliminado</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Módulo engadido</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Módulo editado</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Engadido rol de administración</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Rol de administración editado</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Rol de administración eliminado</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Engadido rol para o foro</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Editado rol para o foro</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Eliminado rol para o foro</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Engadido rol de moderador</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Editado rol de moderador</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Eliminado rol de moderador</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Engadido rol de usuario</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Editado rol de usuario</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Eliminado rol de usuario</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Activado campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Engadido campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Desactivado campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Trocado campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Eliminado campo de perfil</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Foros cortados</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Foros auto-cortados</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Usuarios desactivados</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Eliminados usuarios cortados e mensaxes.</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Conservados usuarios cortados e mensaxes</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Caché purgada</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sesións purgadas</strong>',


	'LOG_RANK_ADDED'		=> '<strong>Novo rango engadido</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rango eliminado</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rango actualizado</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Engadido informe/razón de denegación</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Eliminado informe/razón de denegación</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Informe actualizado/razón de denegación</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Validación da referencia incorrecta</strong><br />»A referencia era “<em>%1$s</em>”. A petición foi rexeitada e a sesión forzada a rematarse.',
	'LOG_RESET_DATE'			=> '<strong>Reiniciada data de comezo do foro</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Restaurados a maior parte de usuarios en liña</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contas de mensaxes do usuario re-sincronizadas</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Temas marcados re-sincronizados</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Mensaxes, temas e estatísticas do usuario re-sincronizadas</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Creado índice de procura para</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Eliminado índice de procura para</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Engadido estilo novo</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Borrado estilo</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Editado estilo</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Estilo exportado</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Engadíuse un novo conxunto de modelos á base de datos</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Engadir un novo conxunto de modelos ao sistema de ficheiros</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Eliminadas da caché as versións dos ficheiros de sobreplantas no xogo de sobreplantas <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Eliminouse o conxunto de modelos<em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Editouse o grupo de modelos<em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Detalles do conxunto de modelos editados</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Conxunto de modelos editado</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Conxunto de modelos actualizado</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Novo tema engadido á base de datos</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Novo tema engadido ao sistema de ficheiros</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema eliminado</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detalles do tema editados</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Tema editado<em>%1$s</em></strong><br />» Clase modificada <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema editado <em>%1$s</em></strong><br />» Arquivo modificado <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exportado tema</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Tema actualizado</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Banco de datos actualizado dende a versión %1$s á versión %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB actualizado dende a versión %1$s á versión %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Usuario activado</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Usuario excluido(banned) desde a xestión de usuario</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP suspendida(banned) desde a xestión de usuario</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Email excluido(banned) desde a xestión de usuario</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Usuario borrado</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Eliminados todos os anexos feitos polo usuario</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Eliminado o avatar do usuario</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Caixa de saída do usuario baleirada</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Eliminadas todas as mensaxes feitas polo usuario</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Sinatura do usuario eliminada</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Usuario desactivado</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Mensaxes de usuario trasladados</strong><br />» enviados por "%1$s" ao foro "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Trocado o contrasinal do usuario</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Re-activación da conta de usuario forzado</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Eliminada a marca de novo rexistrado ao usuario</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>O email do usuario "%1$s" mudou </strong><br />» de "%2$s" a "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nome de usuario trocado</strong><br />» de "%1$s" a "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Actualizados detalles do usuario</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Activada a conta do usuario</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Eliminado o avatar do usuario</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Eliminada a sinatura do usuario</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Comentario do usuario engadido</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entrada engadida:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Conta do usuario desactivada</strong>',
	'LOG_USER_LOCK'				=> '<strong>Tema bloqueado polo propio usuario</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Transferidas todas as mensaxes ao foro "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Reactivación da conta de usuario forzado</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Tema desbloqueado polo propio usuario </strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Engadido aviso a usuario</strong><br />»%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>O aviso seguinte foi enviado a este usuario</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Usuario cambiou de grupo predeterminado</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Usuario degradado como líder do grupo de usuarios</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Usuario unido ao grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Usuario apuntado a grupo precisa ser aprobado</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Usuario renunciou como membro do grupo</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Eliminado aviso ao usuario</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Eliminados %2$s avisos ao usuario</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Eliminados todos os avisos ao usuario</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Engadido como censor de comentarios</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Eliminado censor de comentarios</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Censor de palabras editado</strong><br />» %s',
));

?>