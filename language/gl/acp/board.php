<?php
/** 
*
* acp_board [Galician]
*
* @package language
* @version $Id: board.php 10080 2009-08-31 14:57:04Z nickvergessen $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aquí poderás determinar o funcionamento básico do teu taboleiro, dalle un nome e unha descrición axeitados, e , entre outros axustes, configura os valores predeterminados para a zona horaria e idioma.',
	'CUSTOM_DATEFORMAT'				=> 'Á medida.',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da Data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'O formato das datas é o mesmo que na función <code>date</code> do PHP.',
	'DEFAULT_LANGUAGE'				=> 'Idioma por Defecto',
	'DEFAULT_STYLE'					=> 'Estilo por Defecto',
	'DISABLE_BOARD'					=> 'Deshabilitar foro',
	'DISABLE_BOARD_EXPLAIN'			=> 'Isto fará que o taboleiro non estea dispoñíbel para os usuarios. Podes escribir unha mensaxe curta (255 caracteres) para amosar se así o desexas.',
	'OVERRIDE_STYLE'				=> 'Ignorar estilo de usuario',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Reempraza o estilo dos usuarios polo predefinido.',
	'SITE_DESC'						=> 'Descrición do sitio',
	'SITE_NAME'						=> 'Nome do sitio',
	'SYSTEM_DST'					=> 'Activar Horario de Verán',
	'SYSTEM_TIMEZONE'				=> 'Zona Horaria do Sistema',
	'WARNINGS_EXPIRE'				=> 'Duración da advertencia',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Número de días no que expirará unha advertencia no rexistro dun usuario logo de ser emitida',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aquí podes activar ou desactivar diversas características do taboleiro',

	'ALLOW_ATTACHMENTS'			=> 'Permitir Adxuntos',
	'ALLOW_BIRTHDAYS'			=> 'Permitir aniversarios',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permitir a introdución de aniversarios e amosar a idade nos perfís. Ten en conta que a listaxe de aniversarios no índice do taboleiro está controlada por un axuste cargado por separado.',
	'ALLOW_BOOKMARKS'			=> 'Permitir o marcado de temas como favoritos',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'O usuario pode gardar ligazóns favoritas',
	'ALLOW_BBCODE'				=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Permitir a subscrición aos foros',
	'ALLOW_NAME_CHANGE'			=> 'Permitir mudar os nomes de usuario',
	'ALLOW_NO_CENSORS'			=> 'Permitir a desactivación de censores',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Os usuarios poden desactivar a censura de palabras.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Permitir adxuntos en mensaxes privadas',
	'ALLOW_PM_REPORT'			=> 'Permitir aos usuarios informar sobre mensaxes privadas',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Se activas esta opción, os usuarios terán a posibilidade de informar sobre unha mensaxe privada que recibisen ou enviasen no taboleiro de moderadores. Estas mensaxes privadas serán, logo, visíbeis no Panel de Control do Moderador.',
	'ALLOW_QUICK_REPLY'			=> 'Permitir resposta rápida',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Este axuste define se a resposta rápida está activada ou non. Se esta opción estiver activada, os foros precisarán ter activada tamén a súa opción de resposta rápida.',
	'ALLOW_SIG'					=> 'Permitir sinaturas',
	'ALLOW_SIG_BBCODE'			=> 'Permitir BBCode nas sinaturas dos usuarios',
	'ALLOW_SIG_FLASH'			=> 'Permitir o uso de etiquetas BBCode <code>[FLASH]</code> nas sinaturas do usuario',
	'ALLOW_SIG_IMG'				=> 'Permitir o uso de etiquetas BBCode <code>[ÌMG]</code> nas sinaturas de usuario',
	'ALLOW_SIG_LINKS'			=> 'Permitir uso de ligazóns nas sinaturas de usuarios',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se está anulado o <code>[URL]</code> a etiqueta bbcode e as URLs automáticas/máxicas están desactivadas.',
	'ALLOW_SIG_SMILIES'			=> 'Permitir o uso de risoños nas sinaturas dos usuarios',
	'ALLOW_SMILIES'				=> 'Permitir risoños',
	'ALLOW_TOPIC_NOTIFY'		=> 'Permitir subscrición aos temas',
	'BOARD_PM'					=> 'Mensaxería privada',
	'BOARD_PM_EXPLAIN'			=> 'Activar ou desactivar mensaxería privada para todos os usuarios.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Os avatares adoitan ser pequenas imaxes, únicas, que os usuarios poden asociar con eles mesmos. Dependendo do estilo, xeralmente se amosan debaixo do nome do usuario cando se navega polos temas. Aquí podes determinar como os usuarios poden definir os seus avatares. Ten en conta que para que os avatares poidan ser subidos, é preciso que teñas creado o directorio que indicas abaixo e conte cos permisos axeitados para que o servidor web poida escribir nel. Pensa tamén que os límites de tamaño só se aplican aos avatares subidos, non aos que se ligan desde ubicacións remotas.',

	'ALLOW_AVATARS'					=> 'Activar avatares',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Permite o uso xeral de avatares;<br />Se desactivas os avatares en xeral ou os avatares dun determinado modo, os que estean desactivados non se irán amosar no taboleiro, pero os usuarios poderán descargar os seus propios avatares no Panel de Control do Usuario.',
	'ALLOW_LOCAL'					=> 'Activar avatares de galería',
	'ALLOW_REMOTE'					=> 'Activar avatares remotos',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatares ligados desde outro sitio web',
	'ALLOW_REMOTE_UPLOAD'			=> 'Activar subida remota de avatares',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Permite cargar avatares desde outro sitio web.',
	'ALLOW_UPLOAD'					=> 'Activar subida de avatares',
	'AVATAR_GALLERY_PATH'			=> 'Ruta da Galería de Avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Ruta no directorio raíz phpBB para imaxes precargadas, p.e.<samp>imaxes/avatares/galería</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Ruta ao espazo de almacenamento de Avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Ruta no directorio raíz do phpBB, p.e <samp>imaxes/avatares/transferencia</samp>',
	'MAX_AVATAR_SIZE'				=> 'Dimensións Máximas dos Avatares',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Ancho x Alto en pixels)',
	'MAX_FILESIZE'					=> 'Tamaño Máximo dos Ficheiros de Avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Para os ficheiros de avatares subidos',
	'MIN_AVATAR_SIZE'				=> 'Dimensións Mínimas dos Avatares',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Ancho x Alto en pixels)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aquí podes configurar todas as opcións por defecto para a mensaxería privada',

	'ALLOW_BBCODE_PM'			=> 'Permitir BBCode nas mensaxes privadas',
	'ALLOW_FLASH_PM'			=> 'Permitir o uso da etiqueta FLASH do BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Ten en conta que, aínda que actives aquí o uso do flash nas mensaxes privadas, a posibilidade de empregalo tamén dependerá dos permisos.',
	'ALLOW_FORWARD_PM'			=> 'Permitir o reenvío de mensaxes privadas',
	'ALLOW_IMG_PM'				=> 'Permitir o uso da etiqueta <code>[IMG]</code> do BBCode',
	'ALLOW_MASS_PM'				=> 'Permitir o envío de mensaxes privadas a múltiples usuarios e grupos',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'O envío aos grupos pode axustarse para cada un deles na páxina de configuración dos mesmos.',
	'ALLOW_PRINT_PM'			=> 'Permitir vista imprimíbel en mensaxes privadas',
	'ALLOW_QUOTE_PM'			=> 'Permitir citas en mensaxes privadas',
	'ALLOW_SIG_PM'				=> 'Permitir sinatura en mensaxes privadas',
	'ALLOW_SMILIES_PM'			=> 'Permitir risoños nas mensaxes privadas',
	'BOXES_LIMIT'				=> 'Número máximo de mensaxes privadas nas caixas de entrada',
	'BOXES_LIMIT_EXPLAIN'		=> 'Os usuarios non poderán recibir máis destas mensaxes  en cadansúa caixa de mensaxes, cero para mensaxes ilimitadas privadas.',
	'BOXES_MAX'					=> 'Max cartafoles de mensaxes privadas',
	'BOXES_MAX_EXPLAIN'			=> 'Por defecto os usuarios poden crear esta cantidade de cartafoles persoais para mensaxes privadas.',
	'ENABLE_PM_ICONS'			=> 'Habilitar o uso de iconas de tema nas mensaxes privadas',
	'FULL_FOLDER_ACTION'		=> 'Acción por defecto para cartafol cheo',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'A acción predeterminada a levar a cabo cando o cartafol dun usuario estea cheo e a acción configurada por defecto para o cartafol de usuarios non sexa aplicable. Para o cartafol de "mensaxes enviadas" a acción predeterminada é sempre a eliminación das mensaxes máis antigas.',
	'HOLD_NEW_MESSAGES'			=> 'Reter novas mensaxes',
	'PM_EDIT_TIME'				=> 'Tempo límite de edición',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Límite de tempo para editar unha mensaxe privada aínda sen enviar, o cero é igual a infinito',
	'PM_MAX_RECIPIENTS'			=> 'Número máximo permitido de destinatarios',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'O número máximo de destinatarios permitido nunha mensaxe privada. Se insires 0, permitirase un número ilimitado. Esta configuración pode axustarse para cada grupo na páxina de configuración dos mesmos.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aquí podes seleccionar a configuración por defecto para publicar mensaxes',
	'ALLOW_POST_LINKS'					=> 'Permitir ligazóns en mesaxes públicas/privadas.',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Se está anulado o URL tanto bbcode, etiqueta como urls automáticas/máxicas estarán desactivadas.',
	'ALLOW_POST_FLASH'					=> 'Permitir o uso da etiqueta BBCode <code>[FLASH]</code> nas mensaxes publicadas. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Se non permites isto, a etiqueta BBCode <code>[FLASH]</code> estará desactivada nas mensaxes publicadas. En caso contrario, será o sistema de permisos o que controlará cales serán os usuarios que poden empregar a etiqueta BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervalo de reactivación',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Número de minutos, horas ou días entre a última mensaxe dun tema e a capacidade de reactivar o tema.',
	'CHAR_LIMIT'					=> 'Número máximo de caracteres por mensaxe publicada ou privada',
	'CHAR_LIMIT_EXPLAIN'			=> 'O número de caracteres permitido nunha mensaxe, pública ou privada. Pono a 0 para número ilimitado de caracteres.',
	'DELETE_TIME'					=> 'Límite de tempo para eliminar mensaxe',
	'DELETE_TIME_EXPLAIN'			=> 'Limita o tempo dispoñíbel para eliminar unha nova mensaxe publicada. Configurando este valor a 0 desactivarás esta opción.',
	'DISPLAY_LAST_EDITED'			=> 'Amosar información sobre a data da última edición',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Escolle se a información sobre o editor dunha mensaxe aparece nela',
	'EDIT_TIME'						=> 'Tempo límite de edición',
	'EDIT_TIME_EXPLAIN'				=> 'Límite de tempo para editar unha nova mensaxe, o cero é igual a infinito',
	'FLOOD_INTERVAL'				=> 'Intervalo de saturación',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Número de segundos que os usuarios deberán agardar entre a publicación de novas mensaxes. Para que os usuarios poidan ignorar isto, cambia os seus permisos.',
	'HOT_THRESHOLD'					=> 'Limiar de popularidade',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Mensaxes publicadas por tema requeridas para ser marcado como popular. Axústao a 0 para desactivar o marcado de temas como populares.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opcións nas enquisas',
	'MAX_POST_FONT_SIZE'			=> 'Tamaño máximo de fonte por mensaxe',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Pono a 0 para tamaño de fonte ilimitado.',
	'MAX_POST_IMG_HEIGHT'			=> 'Altura máxima da imaxe por mensaxe',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima dun ficheiro de imaxe\flash nas mensaxes. Fixar en 0 para tamaño sen límites.',
	'MAX_POST_IMG_WIDTH'			=> 'Anchura máxima da imaxe por mensaxe',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Ancho máximo dunha imaxe ou arquivo flash nas mensaxes. Escoller 0 para tamaño ilimitado.',
	'MAX_POST_URLS'					=> 'Número máximo de ligazóns por mensaxe publicada',
	'MAX_POST_URLS_EXPLAIN'			=> 'Pono a 0 para número ilimitado de ligazóns.',
	'MIN_CHAR_LIMIT'				=> 'Número mínimo de caracteres por mensaxe publicada ou privada',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'O número mínimo de caracteres que o usuario deberá inserir nunha mensaxe publicada ou privada.',
	'POSTING'						=> 'Publicando',
	'POSTS_PER_PAGE'				=> 'Mensaxes publicadas Por Páxina',
	'QUOTE_DEPTH_LIMIT'				=> 'Max citas aniñadas por mensaxe',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Pór 0 para profundidade non limitada.',
	'SMILIES_LIMIT'					=> 'Número máximo de risoños por mensaxe',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Pono a 0 para número ilimitado de risoños.',
	'SMILIES_PER_PAGE'				=> 'Risoños por páxina',
	'TOPICS_PER_PAGE'				=> 'Temas Por Páxina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aquí podes configurar todos os valores predeterminados para sinaturas.',

	'MAX_SIG_FONT_SIZE'				=> 'Máximo tamaño de letra da sinatura',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Máximo tamaño de letra permitida na sinatura de usuario. Para tamaño ilimitado, establéceo en 0.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Altura máxima da imaxe na sinatura',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima dunha imaxe ou arquivo flash nas sinaturas de usuario. Escoller 0 para tamaño ilimitado.',
	'MAX_SIG_IMG_WIDTH'				=> 'Máximo ancho de imaxe na sinatura',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Ancho máximo dunha imaxe ou arquivo flash nas sinaturas de usuario. Escoller 0 para tamaño ilimitado.',
	'MAX_SIG_LENGTH'				=> 'Lonxitude máxima das sinaturas',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Número máximo de caracteres nas sinaturas dos usuarios.',
	'MAX_SIG_SMILIES'				=> 'Número máximo de risoños por sinatura',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Máximo de risoños permitidos nas sinaturas de usuario. Escoller 0 para número ilimitado.',
	'MAX_SIG_URLS'					=> 'Máximo de ligazóns na sinatura',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Número máximo de ligazóns nas sinaturas de usuario. Pon 0 para ligazóns ilimitadas.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aquí podes defini-lo rexistro e a configuración do perfil',

	'ACC_ACTIVATION'			=> 'Activación de conta',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Con isto determínase se os usuarios teñen acceso inmediatamente ao foro ou se se precisa confirmación. Tamén podes deshabilitar por completo novos rexistros.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Límite de mensaxes publicadas para novos membros',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Os novos membros pertencerán ao grupo <em>Usuarios Recentemente Rexistrados</em> até que acaden este número de mensaxes. Podes empregar este grupo para evitares que accedan ao sistema de MP ou para revisar as súas mensaxes. <strong>Un valor de 0 desactiva esta opción.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Configurar o grupo Usuarios Recentemente Rexistrados como predeterminado',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Se escolles SI e existe definido un límite de mensaxes publicadas para novos usuarios rexistrados, estes non só pertencerán ao grupo <em>Usuarios Recentemente Rexistrados</em>, senón que ademais este grupo será o seu predeterminado. Isto pode ser práctico se quixeres asignar un rango de grupo por defecto ou un avatar que logo o usuario for herdar.',

	'ACC_ADMIN'					=> 'Polo Administrador',
	'ACC_DISABLE'				=> 'Desactivar',
	'ACC_NONE'					=> 'Ningún',
	'ACC_USER'					=> 'Polo Usuario',
//	'ACC_USER_ADMIN'			=> 'Usuario + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Permitir a reutilización do enderezo de correo-e',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Usuarios diferentes poden rexistrarse co mesmo enderezo de correo-e.',
	'COPPA'						=> 'Coppa',
	'COPPA_FAX'					=> 'Número de fax de COPPA',
	'COPPA_MAIL'				=> 'Enderezo de correo de COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Este é o enderezo de correo onde os pais enviarán os formularios de rexistro "COPPA"',
	'ENABLE_COPPA'				=> 'Permitir COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Isto require que os usuarios declaren se son maiores de 13 anos para dar cumprimento á U.S. COPPA. Se esta opción está desactivada os grupos específicos COPPA non volverán ser despregados.',
	'MAX_CHARS'					=> 'Máx',
	'MIN_CHARS'					=> 'Mín',
	'NO_AUTH_PLUGIN'			=> 'Non se atopou plug-in ningún de autentificación axeitado.',
	'PASSWORD_LENGTH'			=> 'Lonxitude de contrasinal',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número mínimo e máximo de caracteres en contrasinais.',
	'REG_LIMIT'					=> 'Intentos de rexistro',
	'REG_LIMIT_EXPLAIN'			=> 'Número de tentativas que os usuarios poden facer co código visual antes de ser bloqueada esa sesión.',
	'USERNAME_ALPHA_ONLY'		=> 'Só alfanuméricos',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanuméricos e espazos',
	'USERNAME_ASCII'			=> 'ASCII (non unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Calquer letra e número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Calquer letra, número, e espazador',
	'USERNAME_CHARS'			=> 'Limitar os caracteres do nome de usuario',
	'USERNAME_CHARS_ANY'		=> 'Calquera carácter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restrinxi-lo tipo de caracteres que poden ser usados nos nomes de usuario, separadores son; espazo, -, +, _, [ e ]',
	'USERNAME_LENGTH'			=> 'Lonxitude do nome de usuario',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Número mínimo e máximo de caracteres nos nomes de usuario.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Configuración Xeral de Fluxos de Sindicación',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Este módulo dispoñibiliza varios fluxos ATOM, procesando calquera BBCode nas mensaxes publicadas para que resulte lexíbel nos fluxos externos.',

	'ACP_FEED_ENABLE'					=> 'Activar Fluxos',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Activa ou desactiva os fluxos ATOM para o taboleiro enteiro.<br />Desactivando esta opción desactivaranse todos os fluxos, sen importar como estean configuradas as opcións que seguen.',
	'ACP_FEED_LIMIT'					=> 'Número de elementos',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'O número máximo de elementos de fluxo que se irán amosar.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Activar fuxo global dos foros',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Este fluxo amosa as últimas mensaxes publicadas de todos os temas dos foros.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Número de elementos por páxina a amosar no fluxo dos foros',

	'ACP_FEED_OVERALL_TOPIC'			=> 'Activar fluxo global de temas',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Activa o fluxo de “Todos os Temas”',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Número de elementos por páxina a amosar no fluxo de temas',
	'ACP_FEED_FORUM'					=> 'Activar fluxos por foro',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Novas mensaxes publicadas nun só foro.',
	'ACP_FEED_TOPIC'					=> 'Activar fluxos por tema',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Novas mensaxes publicadas dun só tema.',
	'ACP_FEED_NEWS'						=> 'Fluxo de Novas',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Colle a primeira mensaxe publicada destes foros. Non selecciones foro ningún para desactivar o fluxo de novas.<br />Selecciona foros múltiples mantendo premida a tecla <samp>CTRL</samp> e clicando.',

	'ACP_FEED_GENERAL'					=> 'Configuración Xeral do Fluxo',

	'ACP_FEED_ITEM_STATISTICS'			=> 'Estatísticas do elemento',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Amosa estatísticas individuais embaixo dos elementos do fluxo<br />(Publicado por, data e hora, Respostas, Vistas)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Excluir estes foros',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'O contido destes <strong>non será incluido nos fluxos</strong>. Non selecciones foro ningún para obter datos de todos os foros.<br />Selecciona/Deselecciona múltiples foros mantendo premida a tecla <samp>CTRL</samp> e clicando.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Aquí poderás seleccionar e configurar as extensións CAPTCHA, que implementan diversas vías para rexeitar as tentativas de rexistro feitas polos habitualmente chamados spambots.',
	'AVAILABLE_CAPTCHAS'					=> 'Extensións dispoñíbeis',
	'CAPTCHA_UNAVAILABLE'					=> 'Non é posíbel seleccionar o CAPTCHA pois non se cumpren os seus requerimentos.',
	'CAPTCHA_GD'					=> 'CAPTCHA GD',
	'CAPTCHA_GD_3D'							=> 'Captcha 3D GD',
	'CAPTCHA_GD_FOREGROUND_NOISE'				=> 'Ruido de fondo do GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'			=> 'Usa o GD para facer un CAPTCHA máis avanzado',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'		=> 'Utilizar ruido de fondo para facer o CAPTCHA baseado en GD máis efectivo.',
	'CAPTCHA_GD_X_GRID'						=> 'Eixo X do ruido de fondo para o CAPTCHA baseado en GD',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utiliza valores baixos nisto para facer máis efectivo o CAPTCHA baseado en GD. Un valor de 0 desactivará o ruido de fondo no eixo X.',
	'CAPTCHA_GD_Y_GRID'						=> 'Eixo Y do ruido de fondo para o CAPTCHA baseado en GD',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utiliza valores baixos nisto para facer máis efectivo o CAPTCHA baseado en GD. Un valor de 0 desactivará o ruido de fondo no eixo Y.',
	'CAPTCHA_GD_WAVE'						=> 'Distorsión de onda para o CAPTCHA baseado en GD',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Isto aplica unha distorsión de onda ao CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Engadir obxectos de ruido 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Isto engade ebxectos adicionais ao CAPTCHA, enriba das letras.',
	'CAPTCHA_GD_FONTS'						=> 'Empregar fontes distintas',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Este axuste controla cantos tipos de letra distintas se van empregar. Podes usar os tipos predeterminados ou inserir letras alteradas. Tamén é posíbel engadir letras minúsculas.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Predeterminada',
	'CAPTCHA_FONT_NEW'						=> 'Novos Tipos',
	'CAPTCHA_FONT_LOWER'					=> 'Empregar tamén minúsculas',
	'CAPTCHA_NO_GD'							=> 'CAPTCHA sen GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'Os trocos que fixeches na configuración da confirmación visual non foron gardados. Isto é só unha previsualización.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O CAPTCHA aparecerá así se usas a selección actual.',

	'CAPTCHA_SELECT'						=> 'Extensións CAPTCHA instaladas',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'O despregábel contén as extensións CAPTCHA recoñecidas polo taboleiro. As entradas en gris non están dispoñíveis agora mesmo e pode que precisen configuración antes de poder empregalas.',
	'CAPTCHA_CONFIGURE'						=> 'Configurar CAPTCHAs',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Muda a configuración para o CAPTCHA seleccionado.',
	'CONFIGURE'								=> 'Configurar',
	'CAPTCHA_NO_OPTIONS'					=> 'Este CAPTCHA non dispón de opcións de configuración.',

	'VISUAL_CONFIRM_POST'			=> 'Activar confirmación visual para os convidados que publiquen mensaxes',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Requerir aos usuarios anónimos inserir un código que coincida cunha imaxe aleatoria para impedir publicacións masivas de mensaxes.',
	'VISUAL_CONFIRM_REG'			=> 'Habilitar confirmación visual nos rexistros',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Require que os novos usuarios insiran un código aleatorio coincidente cunha imaxe para evitar rexistros masivos.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Permitir aos usuarios rexerar a imaxe de confirmación',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Permitir aos usuarios solicitar novos códigos de confirmación, se non son quen de resolver a CV no proceso de rexistro. Algunhas extensións pode que non admitan esta opción.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Estos elementos definen os datos usados para enviar cookies aos navegadores dos usuarios.  Na meirande parte dos casos os valores predeterminados deberían ser suficientes. Se precisas trocar algún faino con coidado, unha configuración incorrecta pode imposibilitar aos usuarios unha correcta identificación.',

	'COOKIE_DOMAIN'				=> 'Dominio da cookie',
	'COOKIE_NAME'				=> 'Nome da cookie',
	'COOKIE_PATH'				=> 'Ruta da cookie',
	'COOKIE_SECURE'				=> 'Cookie segura',
	'COOKIE_SECURE_EXPLAIN'		=> 'Se o teu servidor se executa con SSL habilita esta opción para activalo, se non déixaa sen habilitar. Tendo esta opción activada, se non se executa con SSL aparecerán erros no servidor durante os redireccionamentos.',
	'ONLINE_LENGTH'				=> 'Amosar o tempo en liña',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Tempo en minutos despois do cal os usuarios inactivos non aparecerán nas listaxes de visión en liña, valores máis baixos equivalen a menos procesamento',
	'SESSION_LENGTH'			=> 'Duración da sesión',
	'SESSION_LENGTH_EXPLAIN'	=> 'As sesións expirarán despois deste tempo, en segundos.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aquí podes activar e desactivar certas funcións do taboleiro para reducir a cantidade de procesamento requerida. Na maior parte dos servidores non hai necesidade de desactivar función ningunha. Con todo certos sistemas ou en contornas de hosting compartido pode ser beneficioso desactivar capacidades que non precisas. Tamén podes especificar límites para transferencias de sistema e sesións activas a partir dos cales o sistema se desconectará.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Campos do Perfil á Medida',
	'LIMIT_LOAD'					=> 'Limitar a carga do sistema',
	'LIMIT_LOAD_EXPLAIN'			=> 'Se a carga do sistema durante 1 minute excede deste valor desconectarase o taboleiro, 1.0 é igual~100% de uso dun procesador. Esta opción só funciona en servidores baseados en UNIX.',
	'LIMIT_SESSIONS'				=> 'Limitar sesións',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se o número de sesións nun minuto excede este valor, o forum desconectarase. Fixar en 0 para un número de sesións limitado.',
	'LOAD_CPF_MEMBERLIST'			=> 'Mostrar campos personalizados do perfil na lista de membros.',
	'LOAD_CPF_VIEWPROFILE'			=> 'Mostrar campos personalizados do perfil nos perfís de usuario.',
	'LOAD_CPF_VIEWTOPIC'			=> 'Mostrar campos personalizados do perfil ao ler tema.',
	'LOAD_USER_ACTIVITY'			=> 'Amosar a actividade dos usuarios',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostrar temas/foros activos nos perfís de usuario e no panel de contral de usuarios. Recomendamos deshabilitalo en Foros con máis dun millón de mensaxes.',
	'RECOMPILE_STYLES'			=> 'Recompilar sobreplantas antigas',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Verificar para actualizar ficheiros de sobreplantas ou ficheiros de sistema e recompilar.',
	'YES_ANON_READ_MARKING'			=> 'Permitir marcado de de temas aos convidados',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Garda información do estado lido/sen ler para convidados. Se está desactivado as mensaxes son sempre lidas para os convidados.',
	'YES_BIRTHDAYS'					=> 'Activar listado de aniversarios',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Se o desactivas non se amosará máis a listaxe de aniversarios. Para que este axuste teña efecto debe activarse tamén a opción de aniversarios.',
	'YES_JUMPBOX'					=> 'Activar visualización da caixa de ir a...',
	'YES_MODERATORS'				=> 'Activar visualización de moderadores',
	'YES_ONLINE'					=> 'Activar listaxes de usuarios conectados',
	'YES_ONLINE_EXPLAIN'			=> 'Amosar a información de usuario conectado/desconectado nas páxinas do índice, foro e tema.',
	'YES_ONLINE_GUESTS'				=> 'Activar listaxe de invitados conectados en liña en visión en liña',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permitir despregar información do usuario convidado en visión en liña.',
	'YES_ONLINE_TRACK'				=> 'Habilitar mostra-la imaxe de usuario en liña',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Amosar información de usuario en liña nos perfís e ao amosar mensaxes dun tema.',
	'YES_POST_MARKING'				=> 'Activar as conversas marcadas',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica se o usuario respondeu a un tema.',
	'YES_READ_MARKING'				=> 'Activar marcado de temas por parte do servidor',
	'YES_READ_MARKING_EXPLAIN'		=> 'Almacenar información do estado lido/non lido na base de datos mellor que nunha cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB permite plug-ins de autentificación ou módulos. Así podes determinar como se autentificarán os usuarios cando inicien sesión no taboleiro. Por omisión existen tres plug-ins; DB, LDAP e Apache. Non todos os métodos requiren información adicional polo que cubre os campos só se son relevantes para o método escollido.',

	'AUTH_METHOD'				=> 'Seleccionar un método de autenticación',

	'APACHE_SETUP_BEFORE_USE'	=> 'Tes que instalar a autentificación apache antes de cambiar o phpBB a este método de autentificación. Lembra que o nome de usuario que utilices para a autentificación apache ten que ser o mesmo que o que uses para o phpBB.',

	'LDAP_DN'					=> 'Base LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'			=> 'Isto é o Nome distinguido, localizando a información do usuario, p.e.<samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'				=> 'Atributo email LDAP',
	'LDAP_EMAIL_EXPLAIN'		=> 'Pon aquí o nome do atributo de email para entrada de usuario (se existe) a fin de gardar automaticamente o enderezo email para novos usuarios. Deixando isto baleiro non se gardarán os enderezos email dos usuarios que inicien sesión por primeira vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Ligazón co servidor LDAP fallida co nome de usuario e contrasinal especificados.',
	'LDAP_NO_EMAIL'				=> 'O atributo de email específicado non existe',
	'LDAP_NO_IDENTITY'			=> 'Non se puido atopar unha identidade de inicio de sesión para %s',
	'LDAP_PASSWORD'					=> 'Contrasinal LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Déixao en branco para conectar de xeito anónimo. Noutro caso cubre o contrasinal para o usuario de enriba. Requerido para Servidores de Directorio Activo. <strong>OLLO:</strong> Este contrasinal será gardado en formato de texto plano no banco de datos e será visible para todo o mundo que poida acceder ao mesmo ou para quen poida ver esta páxina de configuración.',
	'LDAP_PORT'						=> 'Porto do servidor LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'De xeito opcional podes especificar un porto que se empregará para conectar co servidor LDAP no canto do porto por defecto 389.',
	'LDAP_SERVER'				=> 'Nome do servidor LDAP',
	'LDAP_SERVER_EXPLAIN'		=> 'Se usas LDAP este é o nome de host ou enderezo IP do servidor LDAP. De xeito alternativo podes especificar un URL como ldap://nomedehost:porto/.',
	'LDAP_UID'					=> '<var>uid</var> LDAP',
	'LDAP_UID_EXPLAIN'			=> 'Esta é a clave para procurar unha identidade de acceso determinada, p.e <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> ' <var>nd</var> do usuario LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Déixao en branco para conectar de xeito anónimo. Se o cubres, o phpBB empregará o nome especificado nas tentativas de inicio de sesión para atopar o usuario correcto, p.e. <samp>uid=Nomedeusuario,ou=AMiñaUnidade,o=AMiñaCompañía,c=GZ</samp>. Requerido para Servidores de Directorio Activo.',
	'LDAP_USER_FILTER'				=> 'Filtro de usuario LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'De xeito opcional podes limitar aínda máis os obxectos procurados con filtros adicionais. Por exemplo <samp>objectClass=posixGroup</samp> resultará no uso de <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aquí podes definir a configuración dependente do servidor e mais do dominio. Asegúrate de que os datos que introduces son correctos, calquera erro suporá o envío de correo electrónico con información trabucada. Durante a introdución do nome do dominio lembra que has incluir http:// ou outro termo de protocolo. Só mudes o número do porto se estás seguro de que o seu servidor utiliza un valor diferente, o porto 80 é o que se utiliza na meirande parte dos casos.',

	'ENABLE_GZIP'				=> 'Habilitar Compresión de GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'O contido xerado será comprimido denantes de ser enviado ao usuario. Isto pode reducir o tráfico da rede pero tamén pode incrementar o uso da CPU tanto no cliente coma no servidor. Require que a extensión zlib do PHP estea cargada.',
	'FORCE_SERVER_VARS'			=> 'Forzar configuracións URL do servidor',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se escolles Si as opcións de servidor definidas aquí serán usadas como valores determinados automaticamente.',
	'ICONS_PATH'				=> 'Ruta de almacenax das iconas de mensaxe publicada',
	'ICONS_PATH_EXPLAIN'		=> 'Ruta baixo o directorio raíz do teu phpBB, p.e. images/icons',
	'PATH_SETTINGS'				=> 'Configuración da Ruta',
	'RANKS_PATH'				=> 'Clasificar ruta de almacenaxe de imaxes',
	'RANKS_PATH_EXPLAIN'		=> 'Ruta no teu directorio raíz phpBB, p.e.<samp>imaxes/rangos</samp> ',
	'SCRIPT_PATH'				=> 'Ruta do Script',
	'SCRIPT_PATH_EXPLAIN'		=> 'A ruta de ubicación do phpBB relativa ao nome de dominio, p.e. <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Nome do Dominio',
	'SERVER_NAME_EXPLAIN'		=> 'O nome de dominio deste taboleiro execútase desde (por exemplo: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> 'Porto do Servidor',
	'SERVER_PORT_EXPLAIN'		=> 'O porto no que o servidor web está a traballar, xeralmente o 80, múdao só se é diferente',
	'SERVER_PROTOCOL'			=> 'Protocolo do Servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Isto úsase como protocolo do servidor se estas opcións son forzadas. Se están baleiras ou non forzadas o protocolo ven determinado polas opcións de seguridade da cookie (<samp>http://</samp> or <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Configuración do URL do Servidor',
	'SMILIES_PATH'				=> 'Ruta ao espazo de almacén dos risoños',
	'SMILIES_PATH_EXPLAIN'		=> 'Ruta baixo o directorio raíz do teu phpBB, p.e. images/smilies',
	'UPLOAD_ICONS_PATH'			=> 'Ruta de gravación do grupo de iconas da extensión',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Ruta no teu directorio raíz phpBOOt, p.e.<samp>imaxes/upload_iconas</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aquí estás habilitado para defini-las propiedades de sesión e o seu inicio (login).',

	'ALL'							=> 'Todo',
	'ALLOW_AUTOLOGIN'				=> 'Permitir identificacións permanentes', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se os usuarios poden iniciar sesión automaticamente ao acceder ao foro.', 
	'AUTOLOGIN_LENGTH'				=> 'Número de días restantes antes da caducidade do acceso permanente', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Número de días despois dos cales as claves de identificación persistente son eliminadas ou postas a cero para desactivalas.', 
	'BROWSER_VALID'					=> 'Validar navegador',
	'BROWSER_VALID_EXPLAIN'			=> 'Activa a validación do navegador para cada sesión mellorando a seguridade.',
	'CHECK_DNSBL'					=> 'Comprobar IP co DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se está activado a IP é comprobada no rexistrar e ao publicar nos seguintes servicios DNSBL: <a href="http://spamcop.net">spamcop.net</a> e <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Esta comprobación pode levar algún tempo, dependendo da configuración dos servidores. Se se retrasa moito ou se obteñen moitos falsos positivos, recoméndase deshabilitar esta opción.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Comprobar dominio de correo-e para validar rexistro MX',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se isto está activado, o dominio de e-mail proporcionado no rexistro e nos cambios no perfil é verificado para validar o rexistro MX.',
	'FORCE_PASS_CHANGE'				=> 'Forzar troco de contrasinal',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Require ao usuario cambiar o seu contrasinal despois do número indicado de días ou 0 para desactivar.',
	'FORM_TIME_MAX'					=> 'Tempo máximo para enviar formularios',
	'FORM_TIME_MAX_EXPLAIN'			=> 'O tempo que se lle da a un usuario para enviar un formulario. Emprega -1 para desactivalo. Ten en conta que un formulario pode chegar a non ser válido se expira a sesión, independentemente do valor deste axuste.',
	'FORM_SID_GUESTS'				=> 'Ligar formularios ás sesións de convidado',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Se o activas, a mostra do formulario relacionada cos convidados será exclusiva para cada sesión. Isto pode causar problemas con algúns ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Cabeceira <var>X_FORWARDED_FOR</var> validada',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'As sesións continuaranse só se a cabeceira <var>X_FORWARDED_FOR</var> enviada coincide coa recibida coa petición anterior. As prohibicións será comprobadas tamén contra os IPs en <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validación do IP da sesión',
	'IP_VALID_EXPLAIN'				=> 'Determina cantos dos IP de usuarios son utilizados para validar a sesión; <samp>Todos</samp> compara o enderezo completo, <samp>A.B.C</samp> os primeiros x.x.x, <samp>A.B</samp> os primeiros x.x, <samp>Ningún</samp> desactiva a verificación.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Número máximo de intentos de inicio de sesión',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Despois deste número de intentos fallidos de entrada, o usuario terá que, adicionalmente, realizar unha confirmación visual',
	'NO_IP_VALIDATION'				=> 'Ningún',
	'NO_REF_VALIDATION'				=> 'Ningunha',
	'PASSWORD_TYPE'					=> 'Complexidade do contrasinal',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina o nivel de complexidade que teñen que ter os contrasinais cando se fixan por primeira vez ou se mudan. As seguintes opcións inclúen as anteriores.',
	'PASS_TYPE_ALPHA'				=> 'Debe conter alfanuméricos',
	'PASS_TYPE_ANY'					=> 'Sen requerimentos',
	'PASS_TYPE_CASE'				=> 'Debe mesturar maiúsculas con minúsculas',
	'PASS_TYPE_SYMBOL'				=> 'Debe conter símbolos',
	'REF_HOST'						=> 'Validar host só',
	'REF_PATH'						=> 'Validar tamén a ruta',
	'REFERER_VALID'					=> 'Validar a referencia',
	'REFERER_VALID_EXPLAIN'			=> 'Se está activado, a referencia (referer) das peticións de mensaxes publicadas comprobarase confrontándoa coa configuración de ruta do host/script. Isto pode causar problemas con taboleiros que empreguen varios dominios ou inicios de sesión externos.',
	'TPL_ALLOW_PHP'					=> 'Permitir php nas sobreplantas',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se esta opción está activada, as instrucións <code>PHP</code> e <code>INCLUDEPHP</code> serán recoñecidas e descompostas en sobreplantas.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta información é usada cando o forum envía correos ós seus usuarios. Por favor asegúrate de que o enderezo do correo que especificas é correcto, xa que calquera correo devolto, rexeitado ou non entregado será enviado a este enderezo. Se o teu servidor non che ofrece un servicio (baseado en PHP) de correo nativo podes no canto usar directamente STMP. Isto require un enderezo dun sevidor axeitado (pregunta ó teu provedor se é necesario). Se o teu servidor require autentificación (e só se así é) insire un nome de usuario, contrasinal e método de autenticación.',

	'ADMIN_EMAIL'					=> 'Enderezo de Correo-e de Retorno',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Isto será usado como enderezo de retorno en todos os correos electrónicos.',
	'BOARD_EMAIL_FORM'				=> 'Os usuarios poden enviar correo-e via Forum.',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'No canto de mostra-los enderezos de correo-e dos usuarios, os usuarios poden enviar correos via Forum.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar enderezos de correo-e',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Esta función mantén en secreto os enderezos dos correos electrónicos.',
	'CONTACT_EMAIL'					=> 'Enderezo de correo-e de contacto',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Este enderezo será usado cada vez que se precise un punto de contacto específico, p.e. spam, erro no envío, etc...',
	'EMAIL_FUNCTION_NAME'			=> 'Nome da función de email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'A función de correo usada para enviar emails mediante PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Tamaño do Paquete de Correo-e',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Isto refírese ao número máximo de correos-e enviados nun paquete. Este axuste aplícase á cola de mensaxes interna; configúrao a 0 se tes problemas con correos-e notificados como non entregados.',
	'EMAIL_SIG'						=> 'Sinatura do correo-e',
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto será incluido en tódolos correos que envíes ao foro.',
	'ENABLE_EMAIL'					=> 'Activar emails de todo o taboleiro',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se desactivas isto ningún correo será enviado polo foro. <em>Ten en conta que a configuración da activación de contas polo usuario e polo administrador require que esta opción estea activada. Se actualmente estás a empregar activación de contas polo “usuario” ou “administrador” na configuración correspondente, deshabilitando esta opción farás que non se requira activación ningunha das novas contas creadas.</em>',
	'SMTP_AUTH_METHOD'				=> 'Método de autentificación para SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Só se usa se o usuario/password está configurado, se non estás seguro de que método usar pregunta ao teu provedor ',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'ENTRAR',
	'SMTP_PASSWORD'					=> 'Contrasinal SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Introduza o contrasinal só se é requerido polo servidor SMTP.',
	'SMTP_PLAIN'					=> 'TEXTO PLANO',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Porto do Servidor SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Só troques isto se estás certo que o teu servidor SMTP utiliza un porto diferente.',
	'SMTP_SERVER'					=> 'Enderezo do Servidor SMTP',
	'SMTP_SETTINGS'					=> 'Configuración SMTP',
	'SMTP_USERNAME'					=> 'Nome de usuario SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Introduce o nome de usuario só se é solicitado polo servidor SMTP.',
	'USE_SMTP'						=> 'Usar servidor SMTP para o correo-e',
	'USE_SMTP_EXPLAIN'				=> 'Escolle "Si" se queres ou tes que enviar email por un servidor nomeado no canto da función local email.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aquí podes activar e controlar o Jabber para mensaxería instantánea e noticias do foro. Jabber é un protocolo de código aberto e polo tanto dispoñible para calquer usuario. Algúns servidores Jabber inclúen entradas ou transportes que permiten contactar con usuarios doutras redes. Non todos o servidores ofrecen todos os transportes e tamén trocos nos protocolos poden impedir o seu funcionamento. Asegúrate de inserir os pormenores dunha conta xa rexistrada - o phpBB empregará os pormenores tal e como os insiras aquí.',

	'JAB_ENABLE'				=> 'Activar Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Activa o uso da mensaxería e notificacións do jabber',
	'JAB_GTALK_NOTE'			=> 'Ten en conta que o GTalk non funcionará, xa que non se atopou a función <samp>dns_get_record</samp>. Esta función nom está dispoñible no PHP4, e non está implementada en plataformas Windows. Tampouco funciona actualmente en sistemas maseados en BSD, incluído o Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamaño do paquete Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de mensaxes enviadas nun paquete. Se se indica 0 a mensaxe envíase inmediatamente sen poñela en cola para un envío posterior.',
	'JAB_PASSWORD'				=> 'Contrasinal do Jabber',
	'JAB_PORT'					=> 'Porto do Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Déixao en branco agás que saibas que non é 5222',
	'JAB_SERVER'				=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Bótalle un ollo a %sjabber.org%s para obter unha lista de servidores',
	'JAB_SETTINGS_CHANGED'		=> 'Configuración do Jabber actualizada correctamente.',
	'JAB_USE_SSL'				=> 'Empregar SSL para conectar',
	'JAB_USE_SSL_EXPLAIN'		=> 'Se o activas tentarase estabelecer unha conexión segura. O porto Jabber mudarase ao 5223 se se especifica o porto 5222.',
	'JAB_USERNAME'				=> 'Nome de usuario no Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Especifica un nome de usuario rexistrado. Non se comprobará a validez do mesmo. Se só especificas un nome de usuario, entón o teu JID será o nome e usuario e o servidor que especificaches enriba. Para que isto non ocorra, especifica un JID válido, por exemplo: usuario@jabber.org.',
));

?>