<?php
/** 
* 
* acp_common.php [Português]
* 
* @package language 
* @version $Id: common.php, v 1.0 Outubro/2009
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Versão do phpBB: 3.0.6
* @Traduzido por: http://phpbbportugal.com
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
	'ACP_ADMIN_LOGS'			=> 'LOG do Administrador',
	'ACP_ADMIN_ROLES'			=> 'Tarefas do Administrador',
	'ACP_ATTACHMENTS'			=> 'Anexos',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Configuração dos Anexos',
	'ACP_AUTH_SETTINGS'			=> 'Autenticação',
	'ACP_AUTOMATION'			=> 'Automação',
	'ACP_AVATAR_SETTINGS'		=> 'Configuração do Avatar',

	'ACP_BACKUP'				=> 'Criar cópia de Segurança',
	'ACP_BAN'					=> 'Expulsões',
	'ACP_BAN_EMAILS'			=> 'Expulsar Emails',
	'ACP_BAN_IPS'				=> 'Expulsar IPs',
	'ACP_BAN_USERNAMES'			=> 'Expulsar Nomes de Utilizadores',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuração do Geral',
	'ACP_BOARD_FEATURES'		=> 'Ferramentas do Fórum',
	'ACP_BOARD_MANAGEMENT'		=> 'Adminstração do Fórum',
	'ACP_BOARD_SETTINGS'		=> 'Configuração do Fórum',
	'ACP_BOTS'					=> 'Aranhas/Robôs',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Base de Dados',
	'ACP_CAT_DOT_MODS'			=> 'MODs',
	'ACP_CAT_FORUMS'			=> 'Fóruns',
	'ACP_CAT_GENERAL'			=> 'Geral',
	'ACP_CAT_MAINTENANCE'		=> 'Manutenção',
	'ACP_CAT_PERMISSIONS'		=> 'Permissões',
	'ACP_CAT_POSTING'			=> 'Mensagem',
	'ACP_CAT_STYLES'			=> 'Estilos',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Utilizadores e Grupos',
	'ACP_CAT_USERS'				=> 'Utilizadores',
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicação do Cliente',
	'ACP_COOKIE_SETTINGS'		=> 'Configurações de Cookie',
	'ACP_CRITICAL_LOGS'			=> 'LOG de Erros',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Personalizar o Perfil',

	'ACP_DATABASE'				=> 'Adminstração da Base de Dados',
	'ACP_DISALLOW'				=> 'Desactivar',
	'ACP_DISALLOW_USERNAMES'	=> 'Nomes Proibidos',

	'ACP_EMAIL_SETTINGS'		=> 'Configurações de email',
	'ACP_EXTENSION_GROUPS'		=> 'Administrar Grupos de Extensões',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permissões do Fórum',
	'ACP_FORUM_LOGS'				=> 'LOGs do Fórum',
	'ACP_FORUM_MANAGEMENT'			=> 'Administração do Fórum',
	'ACP_FORUM_MODERATORS'			=> 'Moderadores',
	'ACP_FORUM_PERMISSIONS'			=> 'Permissões',

	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Copiar Permissões de Fóruns',

	'ACP_FORUM_ROLES'				=> 'Tarefas do Fórum',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuração Geral',
	'ACP_GENERAL_TASKS'				=> 'Tarefas Gerais',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores Globais',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permissões Globais',
	'ACP_GROUPS'					=> 'Grupos',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permissões de Fóruns e Grupos',
	'ACP_GROUPS_MANAGE'				=> 'Administrar Grupos',
	'ACP_GROUPS_MANAGEMENT'			=> 'Adminstração de Grupos',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permissões do Grupo',

	'ACP_ICONS'						=> 'Ícones',
	'ACP_ICONS_SMILIES'				=> 'Ícones/Smiles',
	'ACP_IMAGESETS'					=> 'Conjuntos de Imagens',
	'ACP_INACTIVE_USERS'			=> 'Utilizadores Inactivos',
	'ACP_INDEX'						=> 'Índice do ACP',

	'ACP_JABBER_SETTINGS'			=> 'Configurações de Jabber',

	'ACP_LANGUAGE'					=> 'Adminstração de Idiomas',
	'ACP_LANGUAGE_PACKS'			=> 'Pacotes de Idiomas',
	'ACP_LOAD_SETTINGS'				=> 'Configurações de Carga',
	'ACP_LOGGING'					=> 'Ligando',

	'ACP_MAIN'						=> 'Índice Principal',
	'ACP_MANAGE_EXTENSIONS'			=> 'Administrar Extensões',
	'ACP_MANAGE_FORUMS'				=> 'Administrar Fóruns',
	'ACP_MANAGE_RANKS'				=> 'Administrar Ranks',
	'ACP_MANAGE_REASONS'			=> 'Administrar Razões de Denúncias/Reprovações',
	'ACP_MANAGE_USERS'				=> 'Administrar Utilizadores',
	'ACP_MASS_EMAIL'				=> 'Email em Massa',
	'ACP_MESSAGES'					=> 'Mensagens',
	'ACP_MESSAGE_SETTINGS'			=> 'Configuração das Mensagens Privadas',
	'ACP_MODULE_MANAGEMENT'			=> 'Adminstração de Módulos',
	'ACP_MOD_LOGS'					=> 'LOG do Moderador',
	'ACP_MOD_ROLES'					=> 'Tarefas do Moderador',

	'ACP_NO_ITEMS'					=> 'Não há itens ainda.',

	'ACP_ORPHAN_ATTACHMENTS'		=> 'Anexos órfãos',

	'ACP_PERMISSIONS'				=> 'Permissões',
	'ACP_PERMISSION_MASKS'			=> 'Máscaras de Permissões',
	'ACP_PERMISSION_ROLES'			=> 'Tarefas de Permissão',
	'ACP_PERMISSION_TRACE'			=> 'Traçar Permissão',
	'ACP_PHP_INFO'					=> 'Informação PHP',
	'ACP_POST_SETTINGS'				=> 'Configuração das Mensagens',
	'ACP_PRUNE_FORUMS'				=> 'Limpeza de Fóruns',
	'ACP_PRUNE_USERS'				=> 'Limpeza de Utilizadores',
	'ACP_PRUNING'					=> 'Limpar',

	'ACP_QUICK_ACCESS'				=> 'Acesso Rápido',

	'ACP_RANKS'						=> 'Ranks',
	'ACP_REASONS'					=> 'Razões de Denúncia/Reprovação',
	'ACP_REGISTER_SETTINGS'			=> 'Configuração do Registo',

	'ACP_RESTORE'					=> 'Restaurar Base de Dados',

	'ACP_FEED'					=> 'Administração de Feed',
	'ACP_FEED_SETTINGS'			=> 'Definições de Feed',

	'ACP_SEARCH'					=> 'Configuração da Pesquisa',
	'ACP_SEARCH_INDEX'				=> 'Índice da Pesquisa',
	'ACP_SEARCH_SETTINGS'			=> 'Configurações de Pesquisa',

	'ACP_SECURITY_SETTINGS'			=> 'Configurações de Segurança',

	'ACP_SEND_STATISTICS'		=> 'Enviar dados estatísticos',

	'ACP_SERVER_CONFIGURATION'		=> 'Configurações do Servidor',
	'ACP_SERVER_SETTINGS'			=> 'Configurações do Servidor',
	'ACP_SIGNATURE_SETTINGS'		=> 'Configuração da Assinatura',
	'ACP_SMILIES'					=> 'Emoções',
	'ACP_STYLE_COMPONENTS'			=> 'Componentes do Estilo',
	'ACP_STYLE_MANAGEMENT'			=> 'Adminstração de Estilo',
	'ACP_STYLES'					=> 'Estilo',

	'ACP_SUBMIT_CHANGES'		=> 'Submeter alterações',

	'ACP_TEMPLATES'					=> 'Templates',
	'ACP_THEMES'					=> 'Temas',

	'ACP_UPDATE'					=> 'Actualizar',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permissões de Fóruns e Utilizadores',
	'ACP_USERS_LOGS'				=> 'LOG do Utilizador',
	'ACP_USERS_PERMISSIONS'			=> 'Permissões do Utilizador',
	'ACP_USER_ATTACH'				=> 'Anexos',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Relatório',
	'ACP_USER_GROUPS'				=> 'Grupos',
	'ACP_USER_MANAGEMENT'			=> 'Administração de Utilizadores',
	'ACP_USER_OVERVIEW'				=> 'Revisão',
	'ACP_USER_PERM'					=> 'Permissões',
	'ACP_USER_PREFS'				=> 'Preferências',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rank',
	'ACP_USER_ROLES'				=> 'Tarefas do Utilizador',
	'ACP_USER_SECURITY'				=> 'Segurança do Utilizador',
	'ACP_USER_SIG'					=> 'Assinatura',

	'ACP_USER_WARNINGS'				=> 'Avisos',

	'ACP_VC_SETTINGS'					=> 'Definições do Módulo Captcha',

	'ACP_VC_CAPTCHA_DISPLAY'		=> 'Previsão da Imagem CAPTCHA',
	'ACP_VERSION_CHECK'				=> 'Verificar Actualizações',
	'ACP_VIEW_ADMIN_PERMISSIONS'	=> 'Ver Permissões Administrativas',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Ver Permissões de Moderação',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Ver Permissões Básicas',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Ver Permissões Globais',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Ver Permissões do Utilizador',

	'ACP_WORDS'							=> 'Censura de Palavras',

	'ACTION'						=> 'Acção',
	'ACTIONS'						=> 'Acções',
	'ACTIVATE'						=> 'Activar',
	'ADD'							=> 'Adicionar',
	'ADMIN'							=> 'Administração',
	'ADMIN_INDEX'					=> 'Índice do Painel de Administração',
	'ADMIN_PANEL'					=> 'Painel de Administração',
	'ADM_LOGOUT'					=> 'Sair do &nbsp;ACP',
	'ADM_LOGGED_OUT'				=> 'Saiu com sucesso do ACP',

	'BACK'	=> 'Voltar',

	'COLOUR_SWATCH'		=> 'Cores seguras de navegação',
	'CONFIG_UPDATED'	=> 'Configuração actualizada com sucesso.',

	'DEACTIVATE'				=> 'Desactivar',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A Pasta "%s" seleccionada não existe.',
	'DIRECTORY_NOT_DIR'			=> 'A Pasta "%s" seleccionada não é uma directoria.',
	'DIRECTORY_NOT_WRITABLE'	=> 'A Pasta "%s" seleccionada não pode ser escrita.',
	'DISABLE'					=> 'Desactivar',
	'DOWNLOAD'					=> 'Descarregar',
	'DOWNLOAD_AS'				=> 'Descarregar como',
	'DOWNLOAD_STORE'			=> 'Descarregar ou Guardar o Ficheiro',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Deve descarregar directamente o Ficheiro ou guardá-lo na sua directoria.',

	'EDIT'					=> 'Editar',
	'ENABLE'				=> 'Activar',
	'EXPORT_DOWNLOAD'		=> 'Descarregar',
	'EXPORT_STORE'			=> 'Guardar',

	'GENERAL_OPTIONS'	=> 'Opções Gerais',
	'GENERAL_SETTINGS'	=> 'Configurações Gerais',
	'GLOBAL_MASK'		=> 'Máscara de Permissão Global',

	'INSTALL'		=> 'Instalar',
	'IP'			=> 'IP',
	'IP_HOSTNAME'	=> 'Endereço de IP ou hostnames',

	'LOGGED_IN_AS'	=> 'Está ligado como:',
	'LOGIN_ADMIN'				=> 'Para Administrar o Fórum, tem que ser um Utilizador verificado.',
	'LOGIN_ADMIN_CONFIRM'		=> 'Para Administrar o Fórum, tem de confirmar o seu Login.',
	'LOGIN_ADMIN_SUCCESS'		=> 'O seu Registo foi verificado com sucesso. Vai ser redirecionado para o Painel de Administração.',
	'LOOK_UP_FORUM'				=> 'Seleccione um Fórum',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Nesta opção pode seleccionar vários Fóruns. Pressione a tecla CTRL ou Shift para seleccionar um a um ou vários Fóruns.',

	'MANAGE'			=> 'Administrar',
	'MENU_TOGGLE'		=> 'Ocultar ou mostrar o Menu lateral',

	'MORE'					=> 'Mais',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Mais informações »',

	'MOVE_DOWN'			=> 'Mover - Baixo',
	'MOVE_UP'			=> 'Mover - Cima',

	'NOTIFY'			=> 'Aviso',
	'NO_ADMIN'				=> 'Não está autorizado a Administrar este painel.',
	'NO_EMAILS_DEFINED'		=> 'Sem endereços de email válidos encontrados.',
	'NO_PASSWORD_SUPPLIED'	=> 'Tem de indicar a sua senha para aceder ao Painel de Administração.',

	'OFF'	=> 'Desactivado',
	'ON'	=> 'Activado',

	'PARSE_BBCODE'						=> 'Parse BBCode',
	'PARSE_SMILIES'						=> 'Parse Smilies',
	'PARSE_URLS'						=> 'Parse atalhos',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissões Transferidas',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Actualmente está com as Permissões de %1$s. Pode navegar pelo Fórum com as Permissões deste Utilizador, mas só pode aceder ao Painel de Administração se este Utilizador tiver Permissões de Administrador. Em qualquer momento pode <a href="%2$s"><strong>regressar às suas Permissões</strong></a>.',
	'PIXEL'								=> 'px',
	'PROCEED_TO_ACP'					=> '%sIr para o Painel de Administração%s',

	'REMIND'						=> 'Lembrar',
	'RESYNC'						=> 'Re-Sincronizar',
	'RETURN_TO'						=> 'Voltar a',

	'SELECT_ANONYMOUS'				=> 'Seleccionar Utilizador Anónimo',
	'SELECT_OPTION'					=> 'Seleccionar Opção',

	'SETTING_TOO_LOW'				=> 'O valor escrito para a configuração "%1$s" é muito baixo. O valor mínimo permitido é %2$d.',
    'SETTING_TOO_BIG'				=> 'O valor escrito para a configuração "%1$s" é muito alto. O valor máximo permitido é %2$d.',    
    'SETTING_TOO_LONG'				=> 'O valor escrito para a configuração "%1$s" é muito longo. O comprimento máximo permitido é %2$d.',
    'SETTING_TOO_SHORT'				=> 'O valor escrito para a configuração "%1$s" é muito curto. O comprimento mínimo permitido é %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Mostrar todas as operações',

	'UCP'							=> 'Painel de Controlo de Utilizadores',
	'USERNAMES_EXPLAIN'				=> 'Insira cada um dos Utilizadores em linhas separadas.',
	'USER_CONTROL_PANEL'			=> 'Painel de Utilizadores',

	'WARNING'						=> 'Advertência',
)); 

// PHP info 
$lang = array_merge($lang, array( 
	'ACP_PHP_INFO_EXPLAIN'			=> 'Esta página mostra informações da versão do PHP instalada neste servidor, incluindo detalhes dos módulos carregados, variáveis disponíveis e as configurações padrão. Esta informação pode ser necessária quando forem detectados erros. Alguns servidores podem limitar, por medida de segurança, as informações exibidas. Mantenha estas informações reservadas excepto quando questionado pela <a href="http://www.phpbb.com/about/">Equipa Oficial de Membros</a> no Fórum de Suporte.',

	'NO_PHPINFO_AVAILABLE'			=> 'As informações do PHP não podem ser determinadas. O Phpinfo() foi desactivado por medidas de segurança.',
)); 

// Logs 
$lang = array_merge($lang, array( 
	'ACP_ADMIN_LOGS_EXPLAIN'		=> 'Esta é a lista das acções dos Administradores. Pode ordená-la por Utilizador, data, Endereço de IP ou Acção do Registo. Se tiver as permissões adequadas, pode limpar operações individuais ou todo o LOG.',
	'ACP_CRITICAL_LOGS_EXPLAIN'		=> 'Esta é a lista das acções realizadas pelo Fórum. Estes LOGs têm informações que permitem solucionar problemas específicos, por exemplo uma falha no envio de emails.  Pode ordená-la por Utilizador, data, IP ou acção. Se tiver as permissões adequadas, pode limpar operações individuais ou todo o LOG.',
	'ACP_MOD_LOGS_EXPLAIN'			=> 'Esta é a lista das acções dos Moderadores do Fórum. Pode ordená-la por Utilizador, data, Endereço de IP ou Acção do Registo. Se tiver as permissões adequadas, pode limpar operações individuais ou todo o LOG.',
	'ACP_USERS_LOGS_EXPLAIN'		=> 'Esta é a lista das acções dos Utilizadores do Fórum. Pode ordená-la por Utilizador, data, Endereço de IP ou Acção do Registo. Se tiver as permissões adequadas, pode limpar operações individuais ou todo o LOG.',
	'ALL_ENTRIES'					=> 'Todas as Entradas',

	'DISPLAY_LOG'					=> 'Exibir Entradas anteriores',

	'NO_ENTRIES'					=> 'Não há LOGs neste Período.',
	
	'SORT_IP'						=> 'Endereço de IP',
	'SORT_DATE'						=> 'Data',
	'SORT_ACTION'					=> 'Acção do LOG',
)); 

// Index page 
$lang = array_merge($lang, array( 
	'ADMIN_INTRO'					=> 'Obrigado por usar o <b>phpBB3</b> no seu Fórum. Esta página apresenta as Estatísticas Gerais do Fórum.<br /> À esquerda encontra os Menus de acesso ao <b>Painel de Administração</b>. Cada um deles contém instruções de configuração.',
	'ADMIN_LOG'						=> 'LOG das Acções dos Administradores',
	'ADMIN_LOG_INDEX_EXPLAIN'		=> 'Este LOG mostra as últimas cinco Acções dos Administradores.<br />Uma cópia completa do LOG está disponível no item apropriado do Menu ou seguindo o atalho abaixo.',

	'AVATAR_DIR_SIZE'				=> 'Tamanho da Directoria do Avatar',

	'BOARD_STARTED'					=> 'Início do Fórum',
	'BOARD_VERSION'					=> 'Versão do Fórum',

	'DATABASE_SERVER_INFO'			=> 'Servidor da Base de Dados',
	'DATABASE_SIZE'					=> 'Tamanho da Base de Dados',

	'FILES_PER_DAY'					=> 'Anexos / Dia',
	'FORUM_STATS'					=> 'Estatísticas do Fórum',

	'GZIP_COMPRESSION'				=> 'Compressão Gzip',

	'NOT_AVAILABLE'					=> 'Não Disponível',

	'NUMBER_FILES'					=> 'Número de Anexos',
	'NUMBER_POSTS'					=> 'Número de Mensagens',
	'NUMBER_TOPICS'					=> 'Número de Tópicos',
	'NUMBER_USERS'					=> 'Número de Utilizadores',
	'NUMBER_ORPHAN'					=> 'Anexos Órfãos',

	'POSTS_PER_DAY'					=> 'Mensagens / Dia',

	'PURGE_CACHE'					=> 'Eliminar Cache',
	'PURGE_CACHE_CONFIRM'			=> 'Tem a certeza que deseja eliminar a Cache?',
	'PURGE_CACHE_EXPLAIN'			=> 'Apagar a Cache, incluindo a dos Templates e de consulta à Base de Dados.',

	'PURGE_SESSIONS'			=> 'Terminar todas as sessões',
	'PURGE_SESSIONS_CONFIRM'	=> 'Tem certeza que desejar para terminar todas as sessões? Esta acção terminará as sessões de todos os utilizadores.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Esta acção provocará a saida de todos os utilizadores por fechar a tabela de sessões.',

	'RESET_DATE'					=> 'Reiniciar Data',
	'RESET_DATE_CONFIRM'			=> 'Tem certeza que deseja reiniciar a Data de inicio do Painel?',
	'RESET_ONLINE'					=> 'Reiniciar Online',
	'RESET_ONLINE_CONFIRM'			=> 'Tem a certeza de que deseja reiniciar o contador do Recorde de Utilizadores online?',
	'RESYNC_POSTCOUNTS'				=> 'Sincronizar novamente a contagem de Mensagens',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Apenas são consideradas as mensagens actuais.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Tem certeza que deseja re-sincronizar o contador de mensagens?',
	'RESYNC_POST_MARKING'			=> 'Sincronizar novamente os Tópicos Recentes',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Tem a certeza que deseja re-sincronizar os Tópicos recentes?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro desmarca todos os Tópicos. Finalmente marca correctamente os Tópicos com actividade nos últimos seis meses.',
	'RESYNC_STATS'					=> 'Sincronizar novamente as Estatísticas',
	'RESYNC_STATS_CONFIRM'			=> 'Tem a certeza que deseja re-sincronizar as estatísticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Calcular o total de Mensagens, Tópicos, Utilizadores e Ficheiros.',
	'RUN'							=> 'Sincronizar',

	'STATISTIC'						=> 'Estatísticas',
	'STATISTIC_RESYNC_OPTIONS'		=> 'Sincronizar ou reiniciar as estatísticas',

	'TOPICS_PER_DAY'				=> 'Tópicos / Dia',

	'UPLOAD_DIR_SIZE'				=> 'Tamanho dos Anexos Enviados',
	'USERS_PER_DAY'					=> 'Utilizadores / Dia',

	'VALUE'							=> 'Valor',

	'VERSIONCHECK_FAIL'			=> 'Falha ao obter informações da versão mais recente.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Verificar versão',

	'VIEW_ADMIN_LOG'				=> 'Ver LOG do Administrador',
	'VIEW_INACTIVE_USERS'			=> 'Ver Utilizadores Inactivos',

	'WELCOME_PHPBB'					=> 'Bem-vindo ao phpBB',
	'WRITABLE_CONFIG'				=> 'O seu Ficheiro de configuração (config.php) encontra-se universalmente configurável. É altamente recomendável que modifique as Permissões de leitura para 640 ou pelo menos 644 (por exemplo: <a href="http://pt.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
)); 

// Inactive Users 
$lang = array_merge($lang, array( 
	'INACTIVE_DATE'					=> 'Data Inactiva',
	'INACTIVE_REASON'				=> 'Razão',
	'INACTIVE_REASON_MANUAL'		=> 'Registo Desactivado pelo Administrador',
	'INACTIVE_REASON_PROFILE'		=> 'Detalhes do Perfil Alterados',
	'INACTIVE_REASON_REGISTER'		=> 'Registos Recentes',
	'INACTIVE_REASON_REMIND'		=> 'Forçar Reactivação de Registo do Utilizador',
	'INACTIVE_REASON_UNKNOWN'		=> 'Desconhecido',
	'INACTIVE_USERS'				=> 'Utilizadores Inactivos',
	'INACTIVE_USERS_EXPLAIN'		=> 'Esta é uma lista dos Utilizadores Registados, mas com os Registos ainda inactivos. Se desejar pode activar, excluir ou alertar (enviando um email) estes Utilizadores.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Lista dos 10 últimos Utilizadores Registados ainda inactivos. A lista completa está disponível através do item apropriado do Menu ou clicando no atalho abaixo onde pode activar, excluir ou alertar (enviando um email) estes Utilizadores se desejar.',

	'NO_INACTIVE_USERS'				=> 'Não há Utilizadores Inactivos',

	'SORT_INACTIVE'					=> 'Data Inactiva',
	'SORT_LAST_VISIT'				=> 'Última Visita',
	'SORT_REASON'					=> 'Razão',
	'SORT_REG_DATE'					=> 'Data de Registo',

	'SORT_LAST_REMINDER'=> 'Último aviso',
	'SORT_REMINDER'		=> 'Aviso enviado',

	'USER_IS_INACTIVE'						=> 'Utilizador Inactivo',
)); 

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Por favor envie informação acerca do seu servidor e configurações do fórum para análise de estatística do phpBB. Toda a informação que possa idenfificá-lo a si ou ao seu website será removida - os dados são totalmente <strong>anónimos</strong>. Basearemos as nossas decisões sobre as futuras versões de phpBB com esta informação. As estatísticas serão publicamente disponibilizadas. Compartilharemos igualmente os dados com o projecto PHP, a linguagem de programação phpBB é baseada nele',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Usando o botão abaixo pode visualizar todas as variáveis que serão transmitidas.',
	'DONT_SEND_STATISTICS'		=> 'Voltar para o ACP se não deseja enviar as informações estatísticas para o phpBB.',
	'GO_ACP_MAIN'				=> 'Ir para a página inicial do ACP',
	'HIDE_STATISTICS'			=> 'Esconder detalhes',
	'SEND_STATISTICS'			=> 'Enviar a informação estatística',
	'SHOW_STATISTICS'			=> 'Mostrar detalhes',
	'THANKS_SEND_STATISTICS'	=> 'Obrigado por enviar as suas informações.',
));

// Log Entries 
$lang = array_merge($lang, array( 
	'LOG_ACL_ADD_USER_GLOBAL_U_'			=> '<strong>Permissões de Utilizadores a Utilizadores Adicionadas ou Editadas</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'			=> '<strong>Permissões de Utilizadores a Grupos Adicionadas ou Editadas</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'			=> '<strong>Permissões Globais a Utilizadores Adicionadas ou Editadas</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'			=> '<strong>Permissões Globais a Grupos Adicionadas ou Editadas</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'			=> '<strong>Permissões Administrativas a Utilizadores Adicionadas ou Editadas</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'			=> '<strong>Permissões Administrativas a Grupos Adicionadas ou Editadas</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'			=> '<strong>Administradores Adicionados ou Editados</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'				=> '<strong>Moderadores Globais Adicionados ou Editados</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'				=> '<strong>Acessos ao Fórum de Utilizadores Adicionados ou Editados</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'				=> '<strong>Acessos de Moderadores a Utilizadores Adicionados ou Editados</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'			=> '<strong>Acessos do Fórum a Grupos Adicionados ou Editados</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'			=> '<strong>Acessos de Moderadores a Grupos Adicionados ou Editados</strong> de %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'				=> '<strong>Moderadores Adicionados ou Editados</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'			=> '<strong>Permissões de Fóruns Adicionadas ou Editadas</strong> de %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'			=> '<strong>Administradores Apagados</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'				=> '<strong>Moderadores Globais Apagados</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'				=> '<strong>Moderadores Apagados</strong> de %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'			=> '<strong>Permissões de Fóruns a Utilizadores/Grupos Apagados</strong> de %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'			=> '<strong>Permissões Transferidas de</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'			=> '<strong>Permissões restauradas depois de utilizar as permissões de</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'					=> '<strong>Tentativas de Login Falhadas</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'				=> '<strong>Tentativas de Login bem-sucedidas</strong>',

	'LOG_ATTACHMENTS_DELETED'				=> '<strong>Remover anexos do Utilizador</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'					=> '<strong>Extensão de Anexos Adicionada ou Editada</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'					=> '<strong>Extensão de Anexos Apagada</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'					=> '<strong>Extensão de Anexos Actualizadas</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'				=> '<strong>Grupo de Extensões Adicionado</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'				=> '<strong>Grupo de Extensões Editado</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'				=> '<strong>Grupo de Extensões Apagado</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'					=> '<strong>Ficheiro Órfão anexo a Mensagem</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'					=> '<strong>Ficheiro Órfão Apagado</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'					=> '<strong>Utilizador Apagado por Expulsão</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'					=> '<strong>Endereço de IP Apagado por Expulsão</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL'					=> '<strong>Endereço de Email Apagado por Expulsão</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'							=> '<strong>Utilizador Expluso</strong> por "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'							=> '<strong>Endereço de IP Banido</strong> por "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'							=> '<strong>Endereço de email Banido</strong> por "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'						=> '<strong>Utilizador Reintegrado</strong><br />» %s',
	'LOG_UNBAN_IP'							=> '<strong>Endereço de IP Reintegrado</strong><br />» %s',
	'LOG_UNBAN_EMAIL'						=> '<strong>Endereço de email Reintegrado</strong><br />» %s',

	'LOG_BBCODE_ADD'						=> '<strong>BBCode Adicionado</strong><br />» %s',
	'LOG_BBCODE_EDIT'						=> '<strong>BBCode Editado</strong><br />» %s',
	'LOG_BBCODE_DELETE'						=> '<strong>BBCode Apagado</strong><br />» %s',

	'LOG_BOT_ADDED'							=> '<strong>BOT Adicionado</strong><br />» %s',
	'LOG_BOT_DELETE'						=> '<strong>BOT Apagado</strong><br />» %s',
	'LOG_BOT_UPDATED'						=> '<strong>BOT Actualizado</strong><br />» %s',

	'LOG_CLEAR_ADMIN'						=> '<strong>LOG Administrativo Limpo</strong>',
	'LOG_CLEAR_CRITICAL'					=> '<strong>LOG de Erro Limpo</strong>',
	'LOG_CLEAR_MOD'							=> '<strong>LOG Moderação Limpo</strong>',
	'LOG_CLEAR_USER'						=> '<strong>LOG de Utilizador Limpo</strong><br />» %s',
	'LOG_CLEAR_USERS'						=> '<strong>LOG de Utilizadores Limpos</strong>',

	'LOG_CONFIG_ATTACH'						=> '<strong>Configurações de Anexos Alteradas</strong>',
	'LOG_CONFIG_AUTH'						=> '<strong>Configurações de Autenticação Alteradas</strong>',
	'LOG_CONFIG_AVATAR'						=> '<strong>Configurações de Avatar Alteradas</strong>',
	'LOG_CONFIG_COOKIE'						=> '<strong>Configurações de Cookie Alteradas</strong>',
	'LOG_CONFIG_EMAIL'						=> '<strong>Configurações de emails Alteradas</strong>',
	'LOG_CONFIG_FEATURES'					=> '<strong>Configurações do Fórum Alteradas</strong>',
	'LOG_CONFIG_LOAD'						=> '<strong>Configurações de Carga Alteradas</strong>',
	'LOG_CONFIG_MESSAGE'					=> '<strong>Configurações de Mensagem Privada Alteradas</strong>',
	'LOG_CONFIG_POST'						=> '<strong>Configurações de Mensagem Alteradas</strong>',
	'LOG_CONFIG_REGISTRATION'				=> '<strong>Configurações de Registo Alteradas</strong>',

	'LOG_CONFIG_FEED'			=> '<strong>Configurações syndication feeds alteradas</strong>',

	'LOG_CONFIG_SEARCH'						=> '<strong>Configurações de Pesquisa Alteradas</strong>',
	'LOG_CONFIG_SECURITY'					=> '<strong>Configurações de Segurança Alteradas</strong>',
	'LOG_CONFIG_SERVER'						=> '<strong>Configurações do Servidor Alteradas</strong>',
	'LOG_CONFIG_SETTINGS'					=> '<strong>Configurações do Fórum Alteradas</strong>',
	'LOG_CONFIG_SIGNATURE'					=> '<strong>Configurações de Assinatura Alteradas</strong>',
	'LOG_CONFIG_VISUAL'						=> '<strong>Configurações de Confirmação Visual Alteradas</strong>',

	'LOG_APPROVE_TOPIC'						=> '<strong>Tópico Aprovado</strong><br />» %s',
	'LOG_BUMP_TOPIC'						=> '<strong>Tópico Ressuscitado</strong><br />» %s',
	'LOG_DELETE_POST'						=> '<strong>Mensagem Apagada</strong><br />» %s',
    'LOG_DELETE_SHADOW_TOPIC'				=> '<strong>Tópico fantasma eliminado</strong><br />Â» %s',
	'LOG_DELETE_TOPIC'						=> '<strong>Tópico Apagado</strong><br />» %s',
	'LOG_FORK'								=> '<strong>Tópico Copiado</strong><br />» de %s',
	'LOG_LOCK'								=> '<strong>Tópico Bloqueado</strong><br />» %s',
	'LOG_LOCK_POST'							=> '<strong>Mensagem Bloqueada</strong><br />» %s',
	'LOG_MERGE'								=> '<strong>Mensagens fundidas</strong> into topic<br />» %s',
	'LOG_MOVE'								=> '<strong>Tópico Movido</strong><br />» de %s',

	'LOG_PM_REPORT_CLOSED'		=> '<strong>Denúncia de MP fechada</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Denúncia de MP apagada</strong><br />» %s',

	'LOG_POST_APPROVED'						=> '<strong>Mensagem Aprovada</strong><br />» %s',
	'LOG_POST_DISAPPROVED'					=> '<strong>Mensagem Desaprovada “%1$s” pelo seguinte motivo</strong><br />%2$s',
	'LOG_POST_EDITED'						=> '<strong>Mensagem Editada “%1$s” por “%3$s”</strong><br />» Link para a mensagem: %2$s',
	'LOG_REPORT_CLOSED'						=> '<strong>Denúncia Bloqueada</strong><br />» %s',
	'LOG_REPORT_DELETED'					=> '<strong>Denúncia Apagada</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'					=> '<strong>Tópico Subdividido</strong><br />» para %s',
	'LOG_SPLIT_SOURCE'						=> '<strong>Mensagens Subdivididas</strong><br />» de %s',

	'LOG_TOPIC_APPROVED'					=> '<strong>Tópido Aprovado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'					=> '<strong>Tópico não Aprovado “%1$s” pelo seguinte motivo</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'						=> '<strong>Contadores de Tópico Re-Sincronizado</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'				=> '<strong>Tipo de Tópico Alterado</strong><br />» %s',
	'LOG_UNLOCK'							=> '<strong>Tópico Desbloqueado</strong><br />» %s',
	'LOG_UNLOCK_POST'						=> '<strong>Mensagem Desbloqueada</strong><br />» %s',

	'LOG_DISALLOW_ADD'						=> '<strong>Nome Proibido Adicionado</strong><br />» %s',
	'LOG_DISALLOW_DELETE'					=> '<strong>Nome Proibido Apagado</strong>',

	'LOG_DB_BACKUP'							=> '<strong>Copiar Base de Dados</strong>',
	'LOG_DB_DELETE'							=> '<strong>Backup da Base de Dados Apagado</strong>',
	'LOG_DB_RESTORE'						=> '<strong>Restaurar Base de Dados</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'				=> '<strong>Endereço de IP/hostname apagado da Lista de Downloads</strong><br />» %s',
	'LOG_DOWNLOAD_IP'						=> '<strong>Endereço de IP/hostname adicionado à Lista de Downloads</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'				=> '<strong>Endereço de IP/hostname apagado da Lista de Downloads</strong><br />» %s',

	'LOG_ERROR_JABBER'						=> '<strong>Erro de Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'						=> '<strong>Erro no email</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Criar um novo Fórum</strong><br />» %s',

	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Permissões do Fórum copiadas</strong> de %1$s<br />» %2$s',

	'LOG_FORUM_DEL_FORUM'					=> '<strong>Fórum apagado</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Fórum e Subfórum apagados</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Fórum Apagado e Subfórum Movido</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Fórum Apagado e Mensagens Movidas</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Eliminado fórum e subfóruns, movidas mensagens</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Eliminado fórum, movidas mensagens</strong> para %1$s <strong>e subfóruns</strong> para %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Eliminado fórum e as mensagens</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Eliminado fórum, as mensagens e subfóruns</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Eliminado fórum e as mensagens, movidos subfóruns</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Detalhes do Fórum Editados</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Fórum Movido</strong> %1$s <strong>abaixo/acima</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Fórum Movido</strong> %1$s <strong>acima/abaixo</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Fórum Re-Sincronizada</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Ocorreu um erro geral</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'						=> '<strong>Novo Grupo Criado</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'					=> '<strong>Grupo Padrão para Membros</strong><br />» %s',
	'LOG_GROUP_DELETE'						=> '<strong>Grupo Apagado</strong><br />» %s',
	'LOG_GROUP_DEMOTED'						=> '<strong>Líderes Demitidos do Grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'					=> '<strong>Membros Promovidos a Líderes do Grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'						=> '<strong>Membros Apagados do Grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'						=> '<strong>Detalhes do Grupo Actualizados</strong><br />» %s',
	'LOG_MODS_ADDED'						=> '<strong>Novos Líderes Adicionados ao Grupo</strong> %1$s<br />» %2$s',

	'LOG_USERS_ADDED'						=> '<strong>Novos Membros Adicionados ao Grupo</strong> %1$s<br />» %2$s',

	'LOG_USERS_APPROVED'	=> '<strong>Utilizadores aprovados no grupo de utilizadores</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Pedido de utilizadores para pertencer ao grupo “%1$s” e que necessitam de aprovação</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Erro ao criar a imagem</strong><br />» Erro em %1$s na linha %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'					=> '<strong>Novas Imagens Adicionadas à Base de Dados</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'					=> '<strong>Adicionar novas Imagens no Sistema</strong><br />» %s',
	'LOG_IMAGESET_DELETE'					=> '<strong>Imagens Apagadas</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'				=> '<strong>Detalhes da Imagem Editados</strong><br />» %s',
	'LOG_IMAGESET_EDIT'						=> '<strong>Imagem Editada</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'					=> '<strong>Imagem Exportada</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'				=> '<strong>Erro na localização do Conjunto de Imagens</strong><br />» %1$s',

	'LOG_IMAGESET_LANG_REFRESHED'			=> '<strong>Actualizado a localização do Conjunto de Imagens “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'				=> '<strong>Imagem Actualizada</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'					=> '<strong>Utilizadores Inactivos Activados</strong><br />» %s',
	'LOG_INACTIVE_DELETE'					=> '<strong>Utilizadores Inactivos Apagados</strong><br />» %s',
	'LOG_INACTIVE_REMIND'					=> '<strong>Enviar emails de alerta a Utilizadores Inactivos</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'					=> '<strong>Actualizado de %1$s para o phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'					=> '<strong>Versão do phpBB instalada %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'		=> '<strong>A verificação da sessão de IP/navegador/X_FORWARDED_FOR falhou</strong><br />»Verificado o endereço de IP do Utilizador "<em>%1$s</em>" em contraste com a sessão de IP "<em>%2$s</em>", verificado o navegador do Utilizadores "<em>%3$s</em>" em contraste com a sessão de navegador "<em>%4$s</em>" e verificado o X_FORWARDED_FOR do usuário "<em>%5$s</em>" em contraste com a sessão de X_FORWARDED_FOR "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'						=> '<strong>Registo de Jabber Alterado</strong>',
	'LOG_JAB_PASSCHG'						=> '<strong>Senha de Jabber Alterada</strong>',
	'LOG_JAB_REGISTER'						=> '<strong>Jabber Registado</strong>',
	'LOG_JAB_SETTINGS_CHANGED'				=> '<strong>Configurações de Jabber alteradas</strong>',

	'LOG_LANGUAGE_PACK_DELETED'				=> '<strong>Pacotes de idiomas Apagados</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'			=> '<strong>Pacotes de idiomas instalados</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'				=> '<strong>Detalhes do Pacote de idiomas actualizados</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'			=> '<strong>Ficheiros de Linguagem substituídos</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'			=> '<strong>Ficheiro de Linguagem enviado e armazenado na pasta <b>\store<\b></strong><br />» %s',

	'LOG_MASS_EMAIL'						=> '<strong>Enviar Email em Massa</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'					=> '<strong>Autor do Tópico alterado "%1$s"</strong><br />» de %2$s para %3$s',

	'LOG_MODULE_DISABLE'					=> '<strong>Módulo Desactivado</strong>',
	'LOG_MODULE_ENABLE'						=> '<strong>Módulo Activado</strong>',
	'LOG_MODULE_MOVE_DOWN'					=> '<strong>Módulo Movido - Baixo</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'					=> '<strong>Módulo Movido - Cima</strong><br />» %s',
	'LOG_MODULE_REMOVED'					=> '<strong>Módulo Apagado</strong><br />» %s',
	'LOG_MODULE_ADD'						=> '<strong>Módulo Adicionado</strong><br />» %s',
	'LOG_MODULE_EDIT'						=> '<strong>Módulo Editado</strong><br />» %s',

	'LOG_A_ROLE_ADD'						=> '<strong>Tarefa Administrativa Adicionada</strong><br />» %s',
	'LOG_A_ROLE_EDIT'						=> '<strong>Tarefa Administrativa Editada</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'					=> '<strong>Tarefa Administrativa Apagada</strong><br />» %s',
	'LOG_F_ROLE_ADD'						=> '<strong>Tarefa do Fórum Adicionada</strong><br />» %s',
	'LOG_F_ROLE_EDIT'						=> '<strong>Tarefa do Fórum Editada</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'					=> '<strong>Tarefa do Fórum Apagada</strong><br />» %s',
	'LOG_M_ROLE_ADD'						=> '<strong>Tarefa Moderativa Adicionada</strong><br />» %s',
	'LOG_M_ROLE_EDIT'						=> '<strong>Tarefa Moderativa Editada</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'					=> '<strong>Tarefa Moderativa Apagada</strong><br />» %s',
	'LOG_U_ROLE_ADD'						=> '<strong>Tarefa do Utilizador Adicionada</strong><br />» %s',
	'LOG_U_ROLE_EDIT'						=> '<strong>Tarefa do Utilizador Editada</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'					=> '<strong>Tarefa do Utilizador Apagada</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'			=> '<strong>Campo do Perfil Activado</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'				=> '<strong>Campo do Perfil Adicionado</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'			=> '<strong>Campo do Perfil Desactivado</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'				=> '<strong>Campo do Perfil Editado</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'				=> '<strong>Campo do Perfil Apagado</strong><br />» %s',

	'LOG_PRUNE'								=> '<strong>Fóruns Limpos</strong><br />» %s',
	'LOG_AUTO_PRUNE'						=> '<strong>Fóruns Limpos Automaticamente</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'					=> '<strong>Utilizadores Desactivados</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'				=> '<strong>Utilizadores Limpos e Mensagens Apagadas</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'				=> '<strong>Utilizadores Limpos e Mensagens Guardadas</strong><br />» %s',

	'LOG_PURGE_CACHE'						=> '<strong>Cache Depurado</strong>',

	'LOG_PURGE_SESSIONS'		=> '<strong>Sessões terminadas</strong>',

	'LOG_RANK_ADDED'						=> '<strong>Rank Adicionado</strong><br />» %s',
	'LOG_RANK_REMOVED'						=> '<strong>Rank Apagado</strong><br />» %s',
	'LOG_RANK_UPDATED'						=> '<strong>Rank Actualizado</strong><br />» %s',

	'LOG_REASON_ADDED'						=> '<strong>Razão de Denúncia/Negação Adicionada</strong><br />» %s',
	'LOG_REASON_REMOVED'					=> '<strong>Razão de Denúncia/Negação Apagada</strong><br />» %s',
	'LOG_REASON_UPDATED'					=> '<strong>Razão de Denúncia/Negação Actualizada</strong><br />» %s',
	'LOG_REFERER_INVALID'					=> '<strong>Validação de referência falhou</strong><br />»Referência foi “<em>%1$s</em>”. A requisição foi rejeitada e a sessão encerrada.',

	'LOG_RESET_DATE'						=> '<strong>Reiniciar Início do Fórum</strong>',
	'LOG_RESET_ONLINE'						=> '<strong>Reiniciar Utilizadores Mais Activos</strong>',
	'LOG_RESYNC_POSTCOUNTS'					=> '<strong>Contagem de Mensagens Re-Sincronizadas</strong>',
	'LOG_RESYNC_POST_MARKING'				=> '<strong>Tópicos Pontilhados Re-Sincronizados</strong>',
	'LOG_RESYNC_STATS'						=> '<strong>Estatísticas de Utilizadores, Tópicos e Mensagens Re-Sincronizadas</strong>',

	'LOG_SEARCH_INDEX_CREATED'				=> '<strong>Índice de busca criado por</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'				=> '<strong>Índice de busca excluído por</strong><br />» %s',
	'LOG_STYLE_ADD'							=> '<strong>Template Adicionada</strong><br />» %s',
	'LOG_STYLE_DELETE'						=> '<strong>Template Apagada</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'				=> '<strong>Template Editada</strong><br />» %s',
	'LOG_STYLE_EXPORT'						=> '<strong>Template Exportada</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'					=> '<strong>Nova Template Adicionada na Base de Dados</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'					=> '<strong>Adicionar nova Template no Sistema</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'			=> '<strong>Versões da Cache de Ficheiros do Template Apagados <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'					=> '<strong>Template Apagado</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'						=> '<strong>Template Editado <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'				=> '<strong>Detalhes do Template Editados</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'					=> '<strong>Template Exportado</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'				=> '<strong>Template Actualizado</strong><br />» %s',

	'LOG_THEME_ADD_DB'						=> '<strong>Novo Tema adicionado à Base de Dados</strong><br />» %s',
	'LOG_THEME_ADD_FS'						=> '<strong>Novo Tema adicionado ao Sistema</strong><br />» %s',
	'LOG_THEME_DELETE'						=> '<strong>Tema Apagado</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'				=> '<strong>Detalhes do Tema Editados</strong><br />» %s',
	'LOG_THEME_EDIT'						=> '<strong>Tema Editado <em>%1$s</em></strong><br />» Categoria Editada <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'					=> '<strong>Tema Editado <em>%1$s</em></strong><br />» Ficheiro Modificado <em>%2$s</em>',
	'LOG_THEME_EXPORT'						=> '<strong>Tema Exportado</strong><br />» %s',
	'LOG_THEME_REFRESHED'					=> '<strong>Tema Actualizado</strong><br />» %s',

	'LOG_UPDATE_DATABASE'					=> '<strong>A Base de Dados foi actualizada da Versão %1$s para a Versão %2$s</strong>',
	'LOG_UPDATE_PHPBB'						=> '<strong>O phpBB foi actualizado da Versão %1$s para a Versão %2$s</strong>',

	'LOG_USER_ACTIVE'						=> '<strong>Utilizador Activado</strong><br />» %s',
	'LOG_USER_BAN_USER'						=> '<strong>Utilizador Banido pela Adminstração de Utilizadores</strong> pela razão "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'						=> '<strong>Endereço de IP Banido pela Adminstração de Utilizadores</strong> pela razão "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'					=> '<strong>Endereço de email Banido pela Adminstração de Utilizadores</strong> pela razão "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'						=> '<strong>Utilizador Apagado</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'					=> '<strong>Todos os Anexos do Utilizador Apagados</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'					=> '<strong>Avatar do Utilizador Apagado</strong><br />» %s',

	'LOG_USER_DEL_OUTBOX'	=> '<strong>Caixa de saída</strong><br />» %s',

	'LOG_USER_DEL_POSTS'					=> '<strong>Todas as Mensagens do Utilizador Apagadas</strong><br />» %s',
	'LOG_USER_DEL_SIG'						=> '<strong>Assinatura do Utilizador Apagada</strong><br />» %s',
	'LOG_USER_INACTIVE'						=> '<strong>Utilizador Desactivado</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'					=> '<strong>Mensagens do Utilizador Movidas</strong><br />» posts by "%1$s" para o fórum "%2$s"',
	'LOG_USER_NEW_PASSWORD'					=> '<strong>Senha do Utilizador Alterada</strong><br />» %s',
	'LOG_USER_REACTIVATE'					=> '<strong>Reactivação de Registo do Utilizador Forçada</strong><br />» %s',

	'LOG_USER_REMOVED_NR'	=> '<strong>Removida bandeira de utilizador recente</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'					=> '<strong>Endereço de email do Utilizador "%1$s" alterado</strong><br />» de "%2$s" para "%3$s"',
	'LOG_USER_UPDATE_NAME'					=> '<strong>Nome de Utilizador Alterado</strong><br />» de "%1$s" para "%2$s"',
	'LOG_USER_USER_UPDATE'					=> '<strong>Detalhes do Utilizador Actualizados</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'					=> '<strong>Registo de Utilizador Activado</strong>',
	'LOG_USER_DEL_AVATAR_USER'				=> '<strong>Avatar do Utilizador Apagado</strong>',
	'LOG_USER_DEL_SIG_USER'					=> '<strong>Assinatura do Utilizador Apagada</strong>',
	'LOG_USER_FEEDBACK'						=> '<strong>Utilizador adicionado ao Feedback</strong><br />» %s',
	'LOG_USER_GENERAL'						=> '%s',
	'LOG_USER_INACTIVE_USER'				=> '<strong>Registo do Utilizador Reactivado</strong>',
	'LOG_USER_LOCK'							=> '<strong>Tópicos Bloqueados pelo próprio Utilizador</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'				=> '<strong>Todas as Mensagens Movidas para o Fórum "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'				=> '<strong>Reactivação de Registo Forçada</strong>',
	'LOG_USER_UNLOCK'						=> '<strong>Tópicos Desbloqueados pelo próprio Utilizador</strong><br />» %s',
	'LOG_USER_WARNING'						=> '<strong>Advertência Adicionada</strong><br />» %s',
	'LOG_USER_WARNING_BODY'					=> '<strong>A Advertência seguinte foi dada a este Utilizador</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'					=> '<strong>Grupo Padrão Editado</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'					=> '<strong>Utilizadores Demitidos de Líderes no Grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'					=> '<strong>Inscrição do Utilizador no Grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'			=> '<strong>O Utilizador inscreveu-se no Grupo e precisa de ser Aprovado</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'					=> '<strong>Utilizador excluído do Grupo</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Eliminados utilizadores avisados</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Eliminados %2$s utilizadores avisados</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Eliminados todos os utilizadores avisados</strong><br />» %s',

	'LOG_WORD_ADD'							=> '<strong>Palavra Censurada Adicionada</strong><br />» %s',
	'LOG_WORD_DELETE'						=> '<strong>Palavra Censurada Apagada</strong><br />» %s',
	'LOG_WORD_EDIT'							=> '<strong>Palavra Censurada Editada</strong><br />» %s',
));

?>