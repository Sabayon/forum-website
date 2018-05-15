<?php
/**
*
* acp common [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.7
* @package language: Brazilian Portuguese
* @original version $Id: common.php,v 1.120 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:33
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
// phpBBrasil.com.br
// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administradores',
	'ACP_ADMIN_LOGS'			=> 'Log dos Administradores',
	'ACP_ADMIN_ROLES'			=> 'Regras de Administrador',
	'ACP_ATTACHMENTS'			=> 'Anexos',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Propriedades de Anexos',
	'ACP_AUTH_SETTINGS'			=> 'Autentica&ccedil;&atilde;o',
	'ACP_AUTOMATION'			=> 'Automa&ccedil;&atilde;o',
	'ACP_AVATAR_SETTINGS'		=> 'Propriedades do Avatar',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Banir',
	'ACP_BAN_EMAILS'			=> 'Banir E-mails',
	'ACP_BAN_IPS'				=> 'Banir IPs',
	'ACP_BAN_USERNAMES'			=> 'Banir Usu&aacute;rios',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configura&ccedil;&atilde;o do F&oacute;rum',
	'ACP_BOARD_FEATURES'		=> 'Caracter&iacute;sticas do F&oacute;rum',
	'ACP_BOARD_MANAGEMENT'		=> 'Administra&ccedil;&atilde;o do F&oacute;rum',
	'ACP_BOARD_SETTINGS'		=> 'Propriedades do F&oacute;rum',
	'ACP_BOTS'					=> 'Espi&otilde;es/Rob&ocirc;s',
		'SETTING_TOO_LOW'      => 'Defini&ccedil;&atilde;o est&aacute; muito pequena',
	'SETTING_TOO_BIG'      => 'Defini&ccedil;&atilde;o est&aacute; muito grande',
	'SETTING_TOO_LONG'      => 'Defini&ccedil;&atilde;o est&aacute; muito longa',
	'SETTING_TOO_SHORT'      => 'Defini&ccedil;&atilde;o est&aacute; muito curta',
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Banco de Dados',
	'ACP_CAT_DOT_MODS'			=> '.Mods',
	'ACP_CAT_FORUMS'			=> 'F&oacute;runs',
	'ACP_CAT_GENERAL'			=> 'Geral',
	'ACP_CAT_MAINTENANCE'		=> 'Manuten&ccedil;&atilde;o',
	'ACP_CAT_PERMISSIONS'		=> 'Permiss&otilde;es',
	'ACP_CAT_POSTING'			=> 'Mensagens',
	'ACP_CAT_STYLES'			=> 'Estilos',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Usu&aacute;rios e Grupos',
	'ACP_CAT_USERS'				=> 'Usu&aacute;rios',
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunica&ccedil;&atilde;o com cliente',
	'ACP_COOKIE_SETTINGS'		=> 'Propriedades de Cookies',
	'ACP_CRITICAL_LOGS'			=> 'Log de Erros',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Campos de Perfil Personalizados',
	
	'ACP_DATABASE'				=> 'Manuten&ccedil;&atilde;o do Banco de Dados',
	'ACP_DISALLOW'				=> 'Desativar',
	'ACP_DISALLOW_USERNAMES'	=> 'Nomes Censurados',
	
	'ACP_EMAIL_SETTINGS'		=> 'Propriedades de E-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Administrar Grupos',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permiss&otilde;es a F&oacute;rum',
	'ACP_FORUM_LOGS'				=> 'Logs do F&oacute;rum',
	'ACP_FORUM_MANAGEMENT'			=> 'Administra&ccedil;&atilde;o de F&oacute;rum',
	'ACP_FORUM_MODERATORS'			=> 'Moderadores de F&oacute;rum',
	'ACP_FORUM_PERMISSIONS'			=> 'Permiss&otilde;es de F&oacute;rum',
	'ACP_FORUM_ROLES'				=> 'Regras de F&oacute;rum',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configura&ccedil;&atilde;o Geral',
	'ACP_GENERAL_TASKS'				=> 'Perguntas gerais',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores Globais',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permiss&otilde;es Globais',
	'ACP_GROUPS'					=> 'Grupos',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permiss&otilde;es de Grupo em F&oacute;runs',
	'ACP_GROUPS_MANAGE'				=> 'Gerenciar Grupos',
	'ACP_GROUPS_MANAGEMENT'			=> 'Administra&ccedil;&atilde;o de grupos',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permiss&otilde;es de Grupo',
	
	'ACP_ICONS'					=> '&Iacute;cones de T&oacute;picos',
	'ACP_ICONS_SMILIES'			=> 'T&oacute;picos &iacute;cones/smilies',
	'ACP_IMAGESETS'				=> 'Grupo de Imagens',
	'ACP_INACTIVE_USERS'		=> 'Usu&aacute;rios Inativos',
	'ACP_INDEX'					=> '&Iacute;ndice do ACP',
	
	'ACP_JABBER_SETTINGS'		=> 'Propriedades de Jabber',
	
	'ACP_LANGUAGE'				=> 'Administra&ccedil;&atilde;o de Idiomas',
	'ACP_LANGUAGE_PACKS'		=> 'Pacotes de Idioma',
	'ACP_LOAD_SETTINGS'			=> 'Carregar Propriedades',
	'ACP_LOGGING'				=> 'Entrando',
	
	'ACP_MAIN'					=> '&Iacute;ndice do ACP',
	'ACP_MANAGE_EXTENSIONS'		=> 'Gerenciar Extens&otilde;es',
	'ACP_MANAGE_FORUMS'			=> 'Gerenciar F&oacute;runs',
	'ACP_MANAGE_RANKS'			=> 'Gerenciar Ranks',
	'ACP_MANAGE_REASONS'		=> 'Gerenciar Raz&otilde;es de Notifica&ccedil;&atilde;o/Nega&ccedil;&atilde;o',
	'ACP_MANAGE_USERS'			=> 'Gerenciar Usu&aacute;rios',
	'ACP_MASS_EMAIL'			=> 'E-mail em Massa',
	'ACP_MESSAGES'				=> 'Mensagens',
	'ACP_MESSAGE_SETTINGS'		=> 'Mensagens Privadas',
	'ACP_MODULE_MANAGEMENT'		=> 'Ger&ecirc;ncia de M&oacute;dulo',
	'ACP_MOD_LOGS'				=> 'Log dos Moderadores',
	'ACP_MOD_ROLES'				=> 'Regras de Moderadores',
	
	'ACP_NO_ITEMS'				=> 'Sem itens.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Anexos &Oacute;rf&atilde;os',
	
	'ACP_PERMISSIONS'			=> 'Permiss&otilde;es',
	'ACP_PERMISSION_MASKS'		=> 'Permiss&otilde;es de M&aacute;scara',
	'ACP_PERMISSION_ROLES'		=> 'Permiss&otilde;es de regras',
	'ACP_PERMISSION_TRACE'		=> 'Rastrear Permiss&otilde;es',
	'ACP_PHP_INFO'				=> 'Informa&ccedil;&atilde;o do PHP',
	'ACP_POST_SETTINGS'			=> 'Mensagens',
	'ACP_PRUNE_FORUMS'			=> 'Limpar F&oacute;runs',
	'ACP_PRUNE_USERS'			=> 'Limpar Usu&aacute;rios',
	'ACP_PRUNING'				=> 'Limpando',
	
	'ACP_QUICK_ACCESS'			=> 'Acesso R&aacute;pido',
	
	'ACP_RANKS'					=> 'Ranks',
	'ACP_REASONS'				=> 'Raz&otilde;es para notificar/denunciar',
	'ACP_REGISTER_SETTINGS'		=> 'Registro de Usu&aacute;rios',

	'ACP_RESTORE'				=> 'Restaurar',

	'ACP_SEARCH'				=> 'Configura&ccedil;&atilde;o da Busca',
	'ACP_SEARCH_INDEX'			=> '&Iacute;ndice da Busca',
	'ACP_SEARCH_SETTINGS'		=> 'Propriedades da Busca',

	'ACP_SECURITY_SETTINGS'		=> 'Propriedades de Seguran&ccedil;a',
	'ACP_SERVER_CONFIGURATION'	=> 'Configura&ccedil;&atilde;o do servidor',
	'ACP_SERVER_SETTINGS'		=> 'Propriedades do Servidor',
	'ACP_SIGNATURE_SETTINGS'	=> 'Propriedades de Assinatura',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_COMPONENTS'		=> 'Componentes de Estilo',
	'ACP_STYLE_MANAGEMENT'		=> 'Ger&ecirc;ncia de estilo',
	'ACP_STYLES'				=> 'Estilos',
	
	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Temas',
	
	'ACP_UPDATE'					=> 'Atualizando',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permiss&otilde;es de Usu&aacute;rios em F&oacute;runs',
	'ACP_USERS_LOGS'				=> 'Log dos Usu&aacute;rios',
	'ACP_USERS_PERMISSIONS'			=> 'Permiss&otilde;es dos Usu&aacute;rios',
	'ACP_USER_ATTACH'				=> 'Anexos',
	'ACP_USER_AVATAR'				=> 'Avatares',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Grupos',
	'ACP_USER_MANAGEMENT'			=> 'Ger&ecirc;ncia de Usu&aacute;rio',
	'ACP_USER_OVERVIEW'				=> 'Visualizar',
	'ACP_USER_PERM'					=> 'Permiss&otilde;es',
	'ACP_USER_PREFS'				=> 'Prefer&ecirc;ncias',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rank',
	'ACP_USER_ROLES'				=> 'Regras de Usu&aacute;rio',
	'ACP_USER_SECURITY'				=> 'Seguran&ccedil;a do usu&aacute;rio',
	'ACP_USER_SIG'					=> 'Assinatura',

	'ACP_VC_SETTINGS'					=> 'Propriedades da Confirma&ccedil;&atilde;o Visual',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Pr&eacute;via da imagem CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Checar Atualiza&ccedil;&otilde;es',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Permiss&otilde;es Administrativas',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Permiss&otilde;es de Modera&ccedil;&atilde;o',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Permiss&otilde;es de F&oacute;runs',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Permiss&otilde;es de Moderadores Globais',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Permiss&otilde;es de Usu&aacute;rio',
	
	'ACP_WORDS'					=> 'Censura de Palavras',

	'ACTION'				=> 'A&ccedil;&atilde;o',
	'ACTIONS'				=> 'A&ccedil;&otilde;es',
	'ACTIVATE'				=> 'Ativar',
	'ADD'					=> 'Adicionar',
	'ADMIN'					=> 'Administra&ccedil;&atilde;o',
	'ADMIN_INDEX'			=> '&Iacute;ndice de Administra&ccedil;&atilde;o',
	'ADMIN_PANEL'			=> 'Painel de Administra&ccedil;&atilde;o',

// Mudan�as 3.0.5	
	'ADM_LOGOUT'			=> 'Deslogar do &nbsp;ACP',
// Mudan�as 3.0.5
    'ADM_LOGGED_OUT'      => 'Deslogado com sucesso no Painel de Administra&ccedil;&atilde;o do F&oacute;rum',

	'BACK'					=> 'Voltar',

	'COLOUR_SWATCH'			=> 'Cores seguras de navega&ccedil;&atilde;o',
	'CONFIG_UPDATED'		=> 'Configura&ccedil;&atilde;o atualizada com sucesso.',

	'DEACTIVATE'				=> 'Desativar',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'O caminho “%s” adicionado n&atilde;o existe.',
	'DIRECTORY_NOT_DIR'			=> 'O caminho “%s” adicionado n&atilde;o &eacute; um diret&oacute;rio.',
	'DIRECTORY_NOT_WRITABLE'	=> 'O caminho “%s” adicionado n&atilde;o tem permiss&atilde;o de escrita.',
	'DISABLE'					=> 'Desativar',
	'DOWNLOAD'					=> 'Salvar',
	'DOWNLOAD_AS'				=> 'Salvar como',
	'DOWNLOAD_STORE'			=> 'Salva ou armazena arquivo',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Voc&ecirc; pode salvar diretamente o arquivo ou salvar em sua pasta <samp>store/</samp>.',

	'EDIT'					=> 'Editar',
	'ENABLE'				=> 'Habilitar',
	'EXPORT_DOWNLOAD'		=> 'Salvar',
	'EXPORT_STORE'			=> 'Armazenar',

	'GENERAL_OPTIONS'		=> 'Op&ccedil;&otilde;es Gerais',
	'GENERAL_SETTINGS'		=> 'Propriedades Gerais',
	'GLOBAL_MASK'			=> 'Permiss&otilde;es Globais de m&aacute;scara',

	'INSTALL'				=> 'Instalar',
	'IP'					=> 'Endere&ccedil;o IP',
	'IP_HOSTNAME'			=> 'Endere&ccedil;o IP ou servidor',

	'LOGGED_IN_AS'			=> 'Voc&ecirc; est&aacute; logado como:',
	'LOGIN_ADMIN'			=> 'Para administrar o f&oacute;rum, voc&ecirc; precisar&aacute; entrar.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Para administrar o f&oacute;rum, voc&ecirc; precisa re-autenticar sua conta.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Voc&ecirc; foi autenticado com sucesso e agora ser&aacute; redirecionado para o Painel de Controle da Administra&ccedil;&atilde;o.',
	'LOOK_UP_FORUM'			=> 'Selecione um F&oacute;rum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Voc&ecirc; est&aacute; apto a selecionar mais de um f&oacute;rum.',
	
	'MANAGE'				=> 'Gerenciar',
	'MENU_TOGGLE'           => 'Ocultar menu',
	'MOVE_DOWN'				=> 'Mover para cima',
	'MOVE_UP'				=> 'Mover para baixo',

	'NOTIFY'				=> 'Notifica&ccedil;&atilde;o',
	'NO_ADMIN'				=> 'Voc&ecirc; n&atilde;o est&aacute; autorizado a Administrar este f&oacute;rum.',
	'NO_EMAILS_DEFINED'		=> 'N&atilde;o foi poss&iacute;vel encontrar um e-mail v&aacute;lido',
	'NO_PASSWORD_SUPPLIED'	=> 'Voc&ecirc; precisa entrar com sua senha para acessar o painel de administrador.',

	'OFF'					=> 'Desligado',
	'ON'					=> 'Ligado',

	'PARSE_BBCODE'						=> 'Usar BBCode',
	'PARSE_SMILIES'						=> 'Usar smilies',
	'PARSE_URLS'						=> 'Usar links',
	'PERMISSIONS_TRANSFERRED'			=> 'Permiss&otilde;es transferidas',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Voc&ecirc; tem atualmente as permiss&otilde;es de %1$s. Voc&ecirc; est&aacute; habilitado a visualizar o f&oacute;rum com suas permiss&otilde;es de usu&aacute;rio, mas n&atilde;o poder&aacute; entrar no Painel de Controle da Administra&ccedil;&atilde;o j&aacute; que n&atilde;o lhe foram transferidas permiss&otilde;es de administrador. Voc&ecirc; est&aacute; apto a <a href="%2$s"><strong>reverter para suas permiss&otilde;es normais</strong></a> a qualquer momento.',
	'PIXEL'							    => 'px',
	'PROCEED_TO_ACP'					=> '%sEntrar no Painel de Controle da Administra&ccedil;&atilde;o%s',

	'REMIND'							=> 'Lembrar',
	'RESYNC'							=> 'Sincronizar',
	'RETURN_TO'							=> 'Retornar para…',

	'SELECT_ANONYMOUS'		=> 'Selecionar usu&aacute;rio an&ocirc;nimo',
	'SELECT_OPTION'			=> 'Selecionar op&ccedil;&atilde;o',

	'UCP'					=> 'Painel de Controle do Usu&aacute;rio',
	'USERNAMES_EXPLAIN'		=> 'Adicione o nome de cada usu&aacute;rio em uma linha separada.',
	'USER_CONTROL_PANEL'	=> 'Painel de Controle do Usu&aacute;rio',

	'WARNING'				=> 'Aviso',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Esta p&aacute;gina lista informa&ccedil;&otilde;es sobre a vers&atilde;o o PHP instalado neste servidor. Incluindo detalhes de m&oacute;dulos instalados, vari&aacute;veis dispon&iacute;veis e propriedades padr&atilde;o. Esta informa&ccedil;&atilde;o pode ser &uacute;til quando diagnosticado problemas. Esteja ciente que certas hospedagens limitam estas informa&ccedil;&otilde;es por quest&atilde;o de seguran&ccedil;a. Voc&ecirc; est&aacute; avisado a n&atilde;o passar detalhes desta p&aacute;gina a outros exceto quando solicitado por <a href="http://www.phpbb.com/about/">membros oficiais</a> nos f&oacute;runs de suporte.',

	'NO_PHPINFO_AVAILABLE'	=> 'As informa&ccedil;&otilde;es sobre a sua configura&ccedil;&atilde;o do PHP n�o puderam ser determinadas. Phpinfo() foi desabilitado por quest&otilde;es de seguran&ccedil;a.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Estes logs mostram todas as a&ccedil;&otilde;es tomadas pelo administrador desta comunidade. Voc&ecirc; pode escolher pelo usu&aacute;rio, data, IP ou a&ccedil;&atilde;o. Se voc&ecirc; tem permiss&otilde;es apropriadas voc&ecirc; tamb&eacute;m poder&aacute; limpar certas opera&ccedil;&otilde;es ou todas as opera&ccedil;&otilde;es assim como desejar.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Estes logs mostram as a&ccedil;&otilde;es tomadas pela comunidade sozinha. Este log permite a voc&ecirc; informa&ccedil;&otilde;es para resolu&ccedil;&atilde;o de determinados problemas, como a n&atilde;o entrega de e-mails. Voc&ecirc; pode escolher por usu&aacute;rio, data, IP ou a&ccedil;&atilde;o. Se voc&ecirc; tem permiss&otilde;es apropriadas tamb&eacute;m poder&aacute; limpar certas partes do log ou por inteiro se assim desejar.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Estes logs mostram as a&ccedil;&otilde;es tomadas pelos moderadores, selecione um f&oacute;rum da caixa de sele&ccedil;&atilde;o. Voc&ecirc; pode escolher pelo usu&aacute;rio, data, IP ou a&ccedil;&atilde;o. Se voc&ecirc; tem permiss&otilde;es apropriadas tamb&eacute;m poder&aacute; limpar certas partes do log ou por inteiro se assim desejar.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Estes logs mostram todas as a&ccedil;&otilde;es tomadas pelos usu&aacute;rios.',
	'ALL_ENTRIES'				=> 'Todas as entradas',

	'DISPLAY_LOG'	=> 'Mostrar entradas antigas',

	'NO_ENTRIES'	=> 'Nenhuma entrada para este per&iacute;odo',

	'SORT_IP'		=> 'Endere&ccedil;o IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'A&ccedil;&atilde;o de Log',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Obrigado por escolher o sistema phpBB como sua solu&ccedil;&atilde;o de f&oacute;runs. Esta tela ir&aacute; permitir a voc&ecirc; uma r&aacute;pida visualiza&ccedil;&atilde;o de todas as v&aacute;rias estat&iacute;sticas de sua comunidade. Os links &agrave; esquerda permitem um controle de todos os aspectos de sua experi&ecirc;ncia com f&oacute;runs. Cada p&aacute;gina ter&aacute; instru&ccedil;&otilde;es de como utilizar corretamente as fun&ccedil;&otilde;es.',
	'ADMIN_LOG'					=> 'A&ccedil;&otilde;es de Administrador Logado',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aqui voc&ecirc; ter&aacute; uma visualiza&ccedil;&atilde;o das &uacute;ltimas cinco a&ccedil;&otilde;es tomadas pelos administradores. Uma c&oacute;pia completa do log pode ser encontrada no item de menu apropriado abaixo.',
	'AVATAR_DIR_SIZE'			=> 'Tamanho do diret&oacute;rio de avatares',

	'BOARD_STARTED'		=> 'Comunidade iniciada em',
	'BOARD_VERSION'		=> 'Vers&atilde;o do f&oacute;rum',

	'DATABASE_SERVER_INFO'	=> 'Servidor de banco de dados',
	'DATABASE_SIZE'			=> 'Tamanho do banco de dados',

	'FILES_PER_DAY'		=> 'Anexos por dia',
	'FORUM_STATS'		=> 'Estat&iacute;sticas do f&oacute;rum',

	'GZIP_COMPRESSION'	=> 'Compress&atilde;o GZip',

	'NOT_AVAILABLE'		=> 'N&atilde;o dispon&iacute;vel',
	'NUMBER_FILES'		=> 'N&uacute;mero de anexos',
	'NUMBER_POSTS'		=> 'N&uacute;mero de mensagens',
	'NUMBER_TOPICS'		=> 'N&uacute;mero de t&oacute;picos',
	'NUMBER_USERS'		=> 'N&uacute;mero de usu&aacute;rios',
	'NUMBER_ORPHAN'		=> 'Anexos perdidos',

	'POSTS_PER_DAY'		=> 'Mensagens por dia',
	
    'PURGE_CACHE'           => 'Resetar cache do f&oacute;rum',
	'PURGE_CACHE_CONFIRM'	=> 'Voc&ecirc; tem certeza que deseja limpar o cache?',
    'PURGE_CACHE_EXPLAIN'   => 'Esta a&ccedil;&atilde;o ir&aacute; liberar todo o cache da comunidade, esta a&ccedil;&atilde;o pode deixar a comunidade lenta at&eacute; recuperar o cache novamente',

    'RESET_DATE'			        => 'Resetar data de inicio do f&oacute;rum',
	'RESET_DATE_CONFIRM'			=> 'Voc&ecirc; tem certeza que deseja resetar a data de in&iacute;cio do f&oacute;rum?',
	'RESET_ONLINE'			        => 'Resetar recorde de usu&aacute;rios online',
	'RESET_ONLINE_CONFIRM'			=> 'Voc&ecirc; tem certeza que deseja resetar o maior n&uacute;mero de usu&aacute;rios online?',
	'RESYNC_POSTCOUNTS'		        => 'Resincronizar mensagens',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Somente mensagens existentes ser&atilde;o levadas em considera&ccedil;&atilde;o. Mensagens notificadas ou punidas n&atilde;o ser&atilde;o levadas em conta.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Voc&ecirc; tem certeza que deseja resincronizar contagem de mensagens?',
	'RESYNC_POST_MARKING'	        => 'Resincronizar t&oacute;picos',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Voc&ecirc; tem certeza que deseja resincronizar t&oacute;picos adotados?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro desmarque todos os t&oacute;picos e ent&atilde;o corretamente marque todos t&oacute;picos que tiveram alguma adi&ccedil;&atilde;o nos &uacute;ltimos 6 messes.',
	'RESYNC_STATS'			        => 'Resincronizar estat&iacute;sticas',
	'RESYNC_STATS_CONFIRM'			=> 'Voc&ecirc; tem certeza que deseja resincronizar estat&iacute;sticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcular o n&uacute;mero total de mensagens, t&oacute;picos, usu&aacute;rios e arquivos.',
	'RUN'							=> 'Rodar agora',

	'STATISTIC'			        => 'Estat&iacute;sticas',
	'STATISTIC_RESYNC_OPTIONS'  => 'Ferramentas de manuten&ccedil;&atilde;o',

	'TOPICS_PER_DAY'	=> 'T&oacute;picos por dia',

	'UPLOAD_DIR_SIZE'	=> 'Tamanho dos anexos postados',
	'USERS_PER_DAY'		=> 'Usu&aacute;rios por dia',

	'VALUE'					=> 'Valor',
	'VIEW_ADMIN_LOG'		=> 'Ver log de administrador',
	'VIEW_INACTIVE_USERS'	=> 'Ver usu&aacute;rios inativos',

	'WELCOME_PHPBB'			=> 'Bem-vindo ao phpBB',
	'WRITABLE_CONFIG'		=> 'Seu arquivo de configura&ccedil;&atilde;o (config.php), atualmente permite que todos possam gravar (Escrever; 777). N&oacute;s recomendamos enfaticamente que voc&ecirc; mude as permiss&otilde;es para 640, ou pelo menos para 644!',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data inativa',
	'INACTIVE_REASON'				=> 'Raz&atilde;o',
	'INACTIVE_REASON_MANUAL'		=> 'Conta desativada pelo administrador',
	'INACTIVE_REASON_PROFILE'		=> 'Detalhes do perfil alterado',
	'INACTIVE_REASON_REGISTER'		=> 'Registro mais recente',
	'INACTIVE_REASON_REMIND'		=> 'For&ccedil;ar a reativa&ccedil;&atilde;o do usu&aacute;rio',
	'INACTIVE_REASON_UNKNOWN'		=> 'Desconhecido',
	'INACTIVE_USERS'				=> 'Usu&aacute;rios inativos',
	'INACTIVE_USERS_EXPLAIN'		=> 'Esta &eacute; uma lista de usu&aacute;rios que se registraram, mas que est&atilde;o com suas contas inativas. Voc&ecirc; pode ativar, excluir ou lembrar (enviando um e-mail) estes usu&aacute;rios se assim desejar.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Esta &eacute; uma lista com os 10 &uacute;ltimos usu&aacute;rios registrados que tem contas inativas. Uma lista completa est&aacute; dispon&iacute;vel no item de menu apropriado ou seguindo o link abaixo onde voc&ecirc; pode ativar, excluir ou lembrar (enviando um e-mail) estes usu&aacute;rios se assim desejar.',

	'NO_INACTIVE_USERS'	=> 'Nenhum usu&aacute;rio desativado',

	'SORT_INACTIVE'		=> 'Data inativa',
	'SORT_LAST_VISIT'	=> '&Uacute;ltima visita',
	'SORT_REASON'		=> 'Raz&atilde;o',
	'SORT_REG_DATE'		=> 'Data de registro',

	'USER_IS_INACTIVE'		=> 'Usu&aacute;rio est&aacute; inativo',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Adicionar ou editar permiss&otilde;es de usu&aacute;rio</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Adicionar ou editar permiss&otilde;es de grupo</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Adicionar ou editar permiss&otilde;es de moderadores global</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Adicionar ou editar permiss&otilde;es de grupos dos moderadores globais</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Adicionar ou editar permiss&otilde;es de administrador ao usu&aacute;rio</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Adicionar ou editar permiss&atilde;o de administrador ao grupo</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Adicionar ou editar administradores</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Adicionar ou editar moderadores globais</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Adicionar ou editar o acesso de usu&aacute;rios ao f&oacute;rum</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Adicionar ou editar acesso ao f&oacute;rum por moderadores</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Adicionar ou editar acessos ao f&oacute;rum por grupos</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Adicionar ou editar acesso ao f&oacute;rum por grupos de moderadores</strong> de %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Adicionar ou editar Moderadores</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Adicionar ou editar permiss&otilde;es de f&oacute;rum</strong> de %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administradores Removidos</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderadores Globais Removidos</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderadores Removidos</strong> de %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Permiss&otilde;es de usu&aacute;rio/f&oacute;rum removidas</strong> de %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permiss&otilde;es transferidas de</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Pr&oacute;prias permiss&otilde;es restauradas ap&oacute;s utilizar de</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Tentativa de login falhou</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Login efetuado com sucesso</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Removido anexos do usu&aacute;rio</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Adicionar ou remover extens&otilde;es de anexos</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extens&otilde;es removidas de anexos</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Atualizar extens&otilde;es de anexos</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Adicionada extens&atilde;o ao grupo</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Editar extens&atilde;o de grupo</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removida extens&atilde;o de grupo</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Arquivo &oacute;rf&atilde;o enviado ao t&oacute;pico</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Arquivos &oacute;rf&atilde;os deletados</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Usu&aacute;rios exclu&iacute;dos do banimento</strong> pela raz&atilde;o "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP exclu&iacute;do do banimento</strong> pela raz&atilde;o "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mail exclu&iacute;do do banimento</strong> pela raz&atilde;o "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Usu&aacute;rio banido</strong> pela raz&atilde;o "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>IP banido</strong> pela raz&atilde;o "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail banido</strong> pela raz&atilde;o "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Usu&aacute;rio desbanido</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP desbanido</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail desbanido</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Adicionar novo BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Editar BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Excluir BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Novo rob&ocirc; adicionado</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Excluir rob&ocirc;</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Atualizar rob&ocirc;s existentes</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Log de admin resetado</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log de erros resetado</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Log de moderadores resetado</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Log de usu&aacute;rio resetado</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Log de usu&aacute;rios resetado</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Alterada as propriedades dos anexos</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Alterada as propriedades de autentica&ccedil;&atilde;o</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Alterada as propriedades de avatar</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Alterada as propriedades de cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Alterada as propriedades de e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Alterada as propriedades do f&oacute;rum</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Alterada as propriedades de carregamento</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Alterada as propriedades das mensagens privadas</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Alterada as propriedades de mensagens</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Alterada as propriedades de registro de usu&aacute;rio</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Alterada as propriedades da busca</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Alterada as propriedades de seguran&ccedil;a</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Alterada as propriedades do servidor</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Alterada as propriedades da comunidade</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Alterada as propriedades de assinatura</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Alterada as propriedades de confirma&ccedil;&atilde;o visual</strong>',

    'LOG_APPROVE_TOPIC'			=> '<strong>T&oacute;pico aprovado</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Usu&aacute;rio pular t&oacute;pico</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Excluir mensagem</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Excluir t&oacute;pico fantasma</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>T&oacute;pico exclu&iacute;do</strong><br />» %s',
	'LOG_FORK'					=> '<strong>T&oacute;pico copiado</strong><br />» de %s',
	'LOG_LOCK'					=> '<strong>T&oacute;pico bloqueado</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Mensagem bloqueada</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Mensagens unidas</strong> em t&oacute;pico<br />» %s',
	'LOG_MOVE'					=> '<strong>T&oacute;picos movidos</strong><br />» de %1$s para %2$s',
	'LOG_POST_APPROVED'			=> '<strong>Mensagem Aprovada</strong><br />&eacute; » %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mensagem desaprovada %1$s com a seguinte raz&atilde;o</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Mensagem editada %1$s escrito por</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Notifica&ccedil;&atilde;o encerrada</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Notifica&ccedil;&atilde;o removida</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mensagens divididas movidas</strong><br />» para %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Dividir mensagens</strong><br />» de %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>T&oacute;pico aprovado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>T&oacute;pico rejeitado %1$s com o seguinte motivo</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resincronizar contagem de t&oacute;picos</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Modificado tipo de t&oacute;pico</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>T&oacute;pico desbloqueado</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Mensagem desbloqueada</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Adicionar nome de usu&aacute;rio Proibido</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Remover nome de usu&aacute;rio Proibido</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Backup do banco de dados</strong>',
	'LOG_DB_DELETE'			=> '<strong>Backup do banco de dados removido</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Banco de dados restaurado</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Exclu&iacute;do IP/Nome de servidor da lista de download</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Adicionado IP/Nome de servidor para a lista de download</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removido IP/Nome de servidor da lista de download</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber erro</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail erro</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Criar novo f&oacute;rum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Excluir f&oacute;rum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Excluir f&oacute;rum e subf&oacute;runs</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Excluir f&oacute;rum e mover subf&oacute;runs</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Excluir f&oacute;rum e mover mensagens </strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Excluir f&oacute;rum e subf&oacute;runs, movendo mensagens</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deletado f&oacute;rum, mensagens movidas</strong> para %1$s <strong>e subf&oacute;runs</strong> para %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deletado f&oacute;rum e suas mensagens</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deletado f&oacute;rum, suas mensagens e subf&oacute;runs</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deletado f&oacute;rum e suas mensagens, subf&oacute;runs movidos</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Editado detalhes do f&oacute;rum</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>F&oacute;rum movido</strong> %1$s <strong>abaixo</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>F&oacute;rum movido</strong> %1$s <strong>acima</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>F&oacute;rum re-sincronizado</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Novo grupo de usu&aacute;rio criado</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupo “%1$s” definido como padr&atilde;o para membros</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Grupo de Usu&aacute;rios deletado</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Moderadores de Grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Membros promovidos a moderadores do grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Membros removidos do grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detalhes do grupo atualizado</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Adicionado novo moderador ao grupo</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Usu&aacute;rios aprovados no grupo de usu&aacute;rio</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Adicionado novos membros ao grupo</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		    => '<strong>Adicionada nova imagem ao Banco de Dados</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		    => '<strong>Adicionada nova imagem ao sistema</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		    => '<strong>Deletado grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	    => '<strong>Editado propriedades de grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			    => '<strong>Editado grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		    => '<strong>Exportado grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Grupo de imagens perdeu a localiza&ccedil;&atilde;o “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Atualizado localiza&ccedil;&atilde;o “%2$s” do grupo de imagens</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	    => '<strong>Atualizado grupo de imagens</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Ativado usu&aacute;rios inativos</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Excluir usu&aacute;rios inativos</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Enviar e-mail de ativa&ccedil;&atilde;o a usu&aacute;rios inativos</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Convertido de %1$s para phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instalado phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sess&atilde;o IP/navegador/X_FORWARDED_FOR checagem falhou</strong><br />»IP usu&aacute;rio "<em>%1$s</em>" checado novamente na sess&atilde;o de IP "<em>%2$s</em>", navegador de usu&aacute;rio "<em>%3$s</em>" checado novamente navegador de usu&aacute;rio "<em>%4$s</em>" e usu&aacute;rio X_FORWARDED_FOR string "<em>%5$s</em>" checada novamente a sess&atilde;o X_FORWARDED_FOR string "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Conta Jabber modificada</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Senha Jabber modificada</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Conta Jabber registrada</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Modificada propriedades Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Idiomas deletados</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Idiomas instalados</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Detalhes dos idiomas atualizados</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Arquivo trocado de idioma</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Enviado arquivo de idioma e armazenado no local dos idiomas</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Enviar e-mail em massa</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Trocar criador de t&oacute;pico no t&oacute;pico "%1$s"</strong><br />» de %2$s para %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>M&oacute;dulo desabilitado</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>M&oacute;dulo habilitado</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>M&oacute;dulo movido para baixo</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>M&oacute;dulo movido para cima</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>M&oacute;dulo removido</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>M&oacute;dulo adicionado</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>M&oacute;dulo editado</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Comportamento de administrador adicionado</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Comportamento de administrador editado</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Comportamento de administrador removido</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Comportamento de f&oacute;rum adicioando</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Comportamento de f&oacute;rum editado</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Comportamento de f&oacute;rum removido</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Comportamento de moderadore adicionado</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Comportamento de moderador editado</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Comportamento de moderador removido </strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Comportamento de usu&aacute;rio adicionado</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Comportamento de usu&aacute;rio editado</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Comportamento de usu&aacute;rio removido/strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Campo de perfil ativado</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Campo de perfil adicionado</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Campo de perfil desativado</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Campo de perfil modificado</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Campo de perfil removido</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>F&oacute;runs Removidos</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-limpar f&oacute;rum</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Usu&aacute;rios removidos</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Usu&aacute;rios removidos e mensagens deletadas</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Usu&aacute;rios removidos e mensagens retidas</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Removido cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Adicionado novo rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rank removido</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rank atualizado</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Adicionado nota/proibi&ccedil;&atilde;o motivo</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removido nota/proibi&ccedil;&atilde;o motivo</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Atualizado nota/proibi&ccedil;&atilde;o motivo</strong><br />» %s',
	'LOG_REFERER_INVALID'      => '<strong>Valida&ccedil;&atilde;o de refer&ecirc;ncia falhou</strong><br />�A refer&ecirc;ncia estava em �<em>%1$s</em>�. O pedido foi rejeitado e a sess&atilde;o foi terminada.',

	'LOG_RESET_DATE'			=> '<strong>Resetar data de in&iacute;cio da comunidade</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Maior n&uacute;mero de usu&aacute;rios online resetar</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contagem de mensagens dos usu&aacute;rios resincronizadas</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>T&oacute;picos pontuados resincronizados</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Mensagem, t&oacute;pico e usu&aacute;rio, estat&iacute;sticas resincronizadas</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Criado &iacute;ndex da busca por</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removido &iacute;ndex da busca</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Adicionar novo estilo</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Excluir estilo</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Editar estilo</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportar estilo</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Adicionada nova template ao banco de dados</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Adicionada nova template ao sistema</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deletado o cache de arquivos da template <em>%1$s</em> em configura&ccedil;&otilde;es de templates</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deletada defini&ccedil;&otilde;es de template</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Editada defini&ccedil;&otilde;es de template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Editado detalhes de template</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exportada defini&ccedil;&otilde;es de template</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Atualizada defini&ccedil;&otilde;es de template</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Adicionado novo tema ao banco de dados</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Adicionado novo tema ao sistema</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema deletado</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Editado detalhes de tema</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Editado tema <em>%1$s</em></strong><br />» Modificada classe <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema editado <em>%1$s</em></strong><br />» Modificado arquivo <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema exportado</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Tema atualizado</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Atualizado banco de dados da vers&atilde;o %1$s para vers&atilde;o %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Atualizado phpBB da vers&atilde;o %1$s para vers&atilde;o %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Usu&aacute;rio ativado</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Usu&aacute;rio banido via Gerenciamento de usu&aacute;rio</strong> pelo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Endere&ccedil;o IP banido via Gerenciamento de usu&aacute;rio</strong> pelo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail banido via Gerenciamento de usu&aacute;rio</strong> pelo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Usu&aacute;rio deletado</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removidos todos anexos feito pelo usu&aacute;rio</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removido avatar do usu&aacute;rio</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removido todas mensagens feitas pelo usu&aacute;rio</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removida assinatura do usu&aacute;rio</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Usu&aacute;rio desativado</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Movida mensagens do usu&aacute;rio</strong><br />» mensagens de "%1$s" para f&oacute;rum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Trocada a senha do usu&aacute;rio</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>For&ccedil;ada re-ativa&ccedil;&atilde;o da conta do usu&aacute;rio</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Usu&aacute;rio "%1$s" trocou e-mail</strong><br />» de "%2$s" para "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nome de usu&aacute;rio alterado</strong><br />» de "%1$s" para "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Atualizado detalhes do usu&aacute;rio</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Conta de usu&aacute;rio ativada</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatar de usu&aacute;rio removido/strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Assinatura do usu&aacute;rio removida</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Adicionado feedback sobre usu&aacute;rio</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entrada adicionada:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Conta de usu&aacute;rio desativada</strong>',
	'LOG_USER_LOCK'				=> '<strong>Usu&aacute;rio trancou pr&oacute;prio t&oacute;pico</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Movida todas mensagens para f&oacute;rum "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>For&ccedil;ada re-ativa&ccedil;&atilde;o de conta do usu&aacute;rio</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Usu&aacute;rio desbloqueou pr&oacute;prio t&oacute;pico</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Adicionada advert&ecirc;ncia ao usu&aacute;rio</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>A seguinte advert&ecirc;ncia foi adicionada a este usu&aacute;rio</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Usu&aacute;rio mudou grupo padr&atilde;o</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Usu&aacute;rio denotou como lider do grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Usu&aacute;rio juntou-se ao grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Usu&aacute;rio juntou-se ao grupo e precisa ser aprovado</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Usu&aacute;rio resignou participa&ccedil;&atilde;o de grupo</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Adicionada palavra censurada</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deletada palavra censurada</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Editada palavra censurada</strong><br />» %s',
));

?>
