<?php
/** 
* 
* acp_board.php [Português]
* 
* @package language 
* @version $Id: board.php, v 1.0 Outubro/2009
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
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains correct 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

// Board Settings 
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui pode definir configurações básicas do phpBB e configurações gerais do Fórum.',
	'CUSTOM_DATEFORMAT'				=> 'Pessoal',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da Data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A sintaxe usada é idêntica à função PHP <a href="http://www.php.net/date" onclick="this.target=\'_blank\';" title="Abrir este atalho numa nova Janela">date()</a>.',
	'DEFAULT_LANGUAGE'				=> 'Idioma Padrão',
	'DEFAULT_STYLE'					=> 'Estilo Padrão',
	'DISABLE_BOARD'					=> 'Desactivar o Fórum',
	'DISABLE_BOARD_EXPLAIN'			=> 'O Fórum fica inacessível aos Utilizadores. Pode justificar o fecho temporário introduzindo uma Mensagem até 255 caracteres',
	'OVERRIDE_STYLE'				=> 'Sobrepor Estilo do Utilizador',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Substitui o Estilo do Utilizador pelo Estilo Padrão do Fórum.',
	'SITE_DESC'						=> 'Descricção do Site',
	'SITE_NAME'						=> 'Nome do Site',
	'SYSTEM_DST'					=> 'Activar Horário de Verão',
	'SYSTEM_TIMEZONE'				=> 'Fuso Horário do Sistema',
	'WARNINGS_EXPIRE'				=> 'Duração de Alerta',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'O número de dias que uma advertência permanece no Registo do Utilizador.',
)); 

// Board Features 
$lang = array_merge($lang, array( 
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui pode Activar/Desactivar diversos recursos do phpBB.',

	'ALLOW_ATTACHMENTS'				=> 'Activar Anexos',
	'ALLOW_BOOKMARKS'				=> 'Permitir histórico dos Tópicos',
	'ALLOW_BOOKMARKS_EXPLAIN'		=> 'O Utilizador poderá arquivar o seu histórico.',
	'ALLOW_BIRTHDAYS'				=> 'Permitir aniversários',
	'ALLOW_BIRTHDAYS_EXPLAIN'		=> 'Permitir a exibição dos aniversários no Perfil do Utilizador.',
	'ALLOW_BBCODE'					=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'			=> 'Permitir vigilância do Fórum',
	'ALLOW_NAME_CHANGE'				=> 'Permitir mudanças do Nome de Utilizador',
	'ALLOW_NO_CENSORS'				=> 'Permitir desactivação da Censura de palavras',
	'ALLOW_NO_CENSORS_EXPLAIN'		=> 'O Utilizador poderá desactivar a Censura automática de palavras.',
	'ALLOW_PM_ATTACHMENTS'			=> 'Permitir anexos em Mensagens Privadas',
	
	'ALLOW_PM_REPORT'			=> 'Permitir aos utilizadores reportar Mensagens Privadas',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Caso esteja activado, os utilizadores terão a opção de reportar uma mensagem privada que tenham recebido ou enviado para moderação. Estas mensagens privadas irão ser visíveis no Painel de Controlo de Moderação.',
	'ALLOW_QUICK_REPLY'			=> 'Permitir Resposta Rápida',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Esta configuração define se a Resposta Rápida está activa ou não. Caso esta configuração esteja activa, os fóruns necessitarão de ter também a opção de resposta rápida activa.',	
	
	'ALLOW_SIG'						=> 'Permitir Assinaturas',
	'ALLOW_SIG_BBCODE'				=> 'Permitir BBCode na Assinatura dos Utilizadores',
	'ALLOW_SIG_FLASH'				=> 'Permitir o uso de FLASH BBCode na Assinatura dos Utilizadores',
	'ALLOW_SIG_IMG'					=> 'Permitir o uso de IMG BBCode na Assinatura dos Utilizadores',
	'ALLOW_SIG_LINKS'				=> 'Permitir o uso de Links na Assinatura dos Utilizadores',
	'ALLOW_SIG_LINKS_EXPLAIN'		=> 'Se desactivado, a tag BBCode <code>[URL]</code> e as URLs mágicas serão Desactivadas.',
	'ALLOW_SIG_SMILIES'				=> 'Permitir o uso de Smileys (ícones de Emoção) na Assinatura dos Utilizadores',
	'ALLOW_SMILIES'					=> 'Permitir Smileys (Ícones de Emoção)',
	'ALLOW_TOPIC_NOTIFY'			=> 'Permitir Vigilância de Tópicos',
	'BOARD_PM'						=> 'Mensagem Privada',
	'BOARD_PM_EXPLAIN'				=> 'Activa/Desactiva as Mensagens Privadas para todos os Utilizadores.',
)); 

// Avatar Settings 
$lang = array_merge($lang, array( 
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Os Avatares são pequenas imagens que o Utilizador pode usar para ser identificado no Fórum. Dependendo do Estilo usado, o Avatar é mostrado normalmente acima do nome do Utilizador na visualização dos Tópicos. Aqui pode definir como os Utilizadores podem usar os seus Avatares. Para enviar Avatares, a Directoria abaixo já tem que estar criada e certificar-se que o Servidor pode gravar Ficheiros nela. O limite do tamanho da imagem do Avatar é válido apenas para Avatares enviados, não se aplicando a imagens utilizadas de outros sítios web.',

	'ALLOW_AVATARS'					=> 'Activar avatares',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Permitir o uso normal de avatares;<br />Caso desactive o uso normal de avatares ou um uso  de avatares, os avatares desactivados deixarão de ser visíveis no fórum, embora os utilizadores poderão fazer download dos seus próprios avatares no Painel de Controlo do Utilizador.',
	
	'ALLOW_LOCAL'					=> 'Permitir Galeria de Avatares',
	'ALLOW_REMOTE'					=> 'Activar Avatar Remoto',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Os Avatares utilizados de outros sítios web.',
	
	'ALLOW_REMOTE_UPLOAD'			=> 'Permitir o envio de avatar remoto',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Permitir o envio de avatares de um outro sítio.',	
	
	'ALLOW_UPLOAD'					=> 'Activar o envio de Avatar',
	'AVATAR_GALLERY_PATH'			=> 'Directoria da Galeria de Avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Directoria dependendo da raiz do phpBB para Galeria de Avatares: Exemplo: <b>\images\avatars\gallery</b>.',
	'AVATAR_STORAGE_PATH'			=> 'Directoria de arquivo dos Avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Directoria dependendo da raiz do phpBB para Upload de Avatares  Exemplo: <b>\images\avatars\upload</b>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensões Máximas do Avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Altura x Largura em pixels).',
	'MAX_FILESIZE'					=> 'Tamanho Máximo do Ficheiro Avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Dos Ficheiros de Avatar enviados.',
	'MIN_AVATAR_SIZE'				=> 'Dimensões Mínimas do Avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Altura x Largura em pixels).',
)); 

// Message Settings 
$lang = array_merge($lang, array( 
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Aqui pode configurar as opções das Mensagens Privadas.',

	'ALLOW_BBCODE_PM'				=> 'Permitir BBCode em Mensagens Privadas',
	'ALLOW_FLASH_PM'				=> 'Permitir uso de FLASH BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'		=> 'Para enviar Flash nas Mensagens Privadas tem que activar esta opção. O que depende das suas Permissões.',
	'ALLOW_FORWARD_PM'				=> 'Permitir encaminhamento Mensagens Privadas',
	'ALLOW_IMG_PM'					=> 'Permitir uso de IMG BBCode',
	'ALLOW_MASS_PM'					=> 'Permitir envio de Mensagens Privadas para múltiplos Utilizadores e Grupos',
	'ALLOW_MASS_PM_EXPLAIN'			=> 'O envio para Grupos pode ser ajustado individualmente de acordo com a página de configurações do Grupo.',	
	'ALLOW_PRINT_PM'				=> 'Permitir visualizar impressão em Mensagem Privada',
	'ALLOW_QUOTE_PM'				=> 'Permitir citar em Mensagens Privadas',
	'ALLOW_SIG_PM'					=> 'Permitir assinaturas em Mensagens Privadas',
	'ALLOW_SMILIES_PM'				=> 'Permitir Smileys nas Mensagens Privadas',
	'BOXES_LIMIT'					=> 'Máximo de Mensagens Privadas por pasta',
	'BOXES_LIMIT_EXPLAIN'			=> 'Número máximo de Messagens Privadas que os Utilizadores podem receber em cada uma das suas Pastas Pessoais (0 = ilimitado).',
	'BOXES_MAX'						=> 'Máximo de Mensagens Privadas por pasta',
	'BOXES_MAX_EXPLAIN'				=> 'Número máximo de Pastas Pessoais que os Utilizadores podem criar para as Mensagens Privadas.',
	'ENABLE_PM_ICONS'				=> 'Activa o uso de ícones de Tópico nas Mensagens Privadas',
	'FULL_FOLDER_ACTION'			=> 'Acção padrão para pastas cheias',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'Define o procedimento se a pasta do Utilizador encher e a acção configurada não for aplicável. Na pasta "Mensagens enviadas" serão sempre excluídas as Mensagens mais antigas.',
	'HOLD_NEW_MESSAGES'				=> 'Manuseio de novas Mensagens',
	'PM_EDIT_TIME'					=> 'Limite do tempo de edição',
	'PM_EDIT_TIME_EXPLAIN'			=> 'Limita o tempo para editar uma Mensagem Privada ainda não enviada (0 = ilimitado).',
	'PM_MAX_RECIPIENTS'				=> 'Número máximo de destinatários',
	'PM_MAX_RECIPIENTS_EXPLAIN'		=> 'Número máximo de destinatários por Mensagem Privada (0 = ilimitado). Estes valores podem ser ajustados por Grupo nas configurações do Grupo.',

)); 

// Post Settings 
$lang = array_merge($lang, array( 	
	'ACP_POST_SETTINGS_EXPLAIN'	=> 'Aqui pode configurar todas as opções de Mensagens.',
	'ALLOW_POST_LINKS'			=> 'Permitir atalhos nas Mensagens Privadas',
	'ALLOW_POST_LINKS_EXPLAIN'	=> 'Se desactivado, a TAG BBCode <code>[URL]</code> e as URLs mágicas serão desactivadas.',
	'ALLOW_POST_FLASH'			=> 'Permitir o uso de <code>[FLASH]</code> BBCode TAG nas Mensagens',
	'ALLOW_POST_FLASH_EXPLAIN'	=> 'Se desactivado, o BBCode <code>[FLASH]</code> ficará inactivo nas Mensagens em geral. De qualquer forma, o Sistema de Permissões pode ajudar no controle de que Utilizadores podem utilizar a determinada TAG.',

	'BUMP_INTERVAL'					=> 'Intervalo de Bump',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Número de minutos, horas ou dias entre a última Mensagem num Tópico e a reactivação deste Tópico.',
	'CHAR_LIMIT'					=> 'Máximo de caracteres por Mensagem',
	'CHAR_LIMIT_EXPLAIN'			=> '0 = Ilimitados.',

	'DELETE_TIME'					=> 'Tempo limite para apagar',
	'DELETE_TIME_EXPLAIN'			=> 'Limita o tempo disponível para eliminar uma nova mensagem. Definir o valor como 0 desactiva esta função.',
	
	'DISPLAY_LAST_EDITED'			=> 'Mostra a hora da última edição',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Seleccione para mostrar informações da última actualização da Mensagem.',
	'EDIT_TIME'						=> 'Tempo limite de edição',
	'EDIT_TIME_EXPLAIN'				=> 'Limita o tempo disponível para se editar uma nova Mensagem (0 = ilimitado).',
	'FLOOD_INTERVAL'				=> 'Intervalo de Flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Número de segundos que o Utilizador deve esperar para uma nova Mensagem.',
	'HOT_THRESHOLD'					=> 'Mensagens para se tornar um Tópico Popular (0 = Tópicos populares desactivados).',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Número de Mensagens que um Tópico deve conter para ser considerado popular. Indique 0 para desactivar os Tópicos populares.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opções em votações',
	'MAX_POST_FONT_SIZE'			=> 'Tamanho máximo da fonte nas Mensagens',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '(0 = ilimitado).',
	'MAX_POST_IMG_HEIGHT'			=> 'Altura Máxima de imagem por Mensagem',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura Máxima de ficheiros de imagem/flash nas Mensagens (0 = tamanho ilimitado).',
	'MAX_POST_IMG_WIDTH'			=> 'Largura Máxima de imagem por Mensagem',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura Máxima de ficheiros de imagem/flash nas Mensagens (0 = tamanho ilimitado).',
	'MAX_POST_URLS'					=> 'Número Máximo de atalhos por Mensagem',
	'MAX_POST_URLS_EXPLAIN'			=> '0 = Ilimitados.',

	'MIN_CHAR_LIMIT'				=> 'Caracteres mínimos por mensagem/mensagem privada',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'O número mínimo de caracteres que o utilizador precisa entrar dentro de uma mensagem/mensagem privada.',

	'POSTING'						=> 'Postando',
	'POSTS_PER_PAGE'				=> 'Postagens por Página',
	'QUOTE_DEPTH_LIMIT'				=> 'Máximo de Citações por Mensagem',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '0 = ilimitadas.',
	'SMILIES_LIMIT'					=> 'Máximo de Smileys por Mensagem',
	'SMILIES_LIMIT_EXPLAIN'			=> '0 = Ilimitados.',

	'SMILIES_PER_PAGE'				=> 'Emoções por página',
	
	'TOPICS_PER_PAGE'				=> 'Tópicos por Página',
)); 

// Signature Settings 
$lang = array_merge($lang, array( 
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui pode configurar as opções para as Assinaturas dos Utilizadores.',

	'MAX_SIG_FONT_SIZE'					=> 'Tamanho Máximo da fonte Assinatura',
	'MAX_SIG_FONT_SIZE_EXPLAIN'			=> 'Tamanho Máximo da fonte permitido na Assinatura dos Utilizadores (0 = Ilimitado).',
	'MAX_SIG_IMG_HEIGHT'				=> 'Altura Máxima da imagem na Assinatura',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'		=> 'Altura Máxima de um ficheiro de imagem/flash na Assinatura dos Utilizadores (0 = Ilimitado).',
	'MAX_SIG_IMG_WIDTH'					=> 'Largura Máxima de uma imagem na Assinatura',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'			=> 'Largura Máxima de um ficheiro de imagem/flash na Assinatura do Utilizador. (0 = Ilimitado).',
	'MAX_SIG_LENGTH'					=> 'Comprimento máximo da Assinatura',
	'MAX_SIG_LENGTH_EXPLAIN'			=> 'Número Máximo de caracteres na Assinatura do Utilizador.',
	'MAX_SIG_SMILIES'					=> 'Número Máximo de Smileys por Assinatura',
	'MAX_SIG_SMILIES_EXPLAIN'			=> 'Número Máximo de Smileys permitido na Assinatura do Utilizador. (0 = Ilimitado).',
	'MAX_SIG_URLS'						=> 'Número Máximo de Links',
	'MAX_SIG_URLS_EXPLAIN'				=> 'Número Máximo de atalhos numa Assinatura. (0 = Ilimitados).',
)); 

// Registration Settings 
$lang = array_merge($lang, array( 
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui são definidas as opções de Registo e Perfil do Utilizador.',

	'ACC_ACTIVATION'					=> 'Activação da Conta',
	'ACC_ACTIVATION_EXPLAIN'			=> 'Determina se o Utilizador terá acesso imediato ao Fórum ou se será necessária uma confirmação. Também pode desactivar novos Registos.',

	'NEW_MEMBER_POST_LIMIT'				=> 'Limite de mensagens de novos membros',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'		=> 'Os novos membros estão dentro do Grupo <em>Utilizadores recém registados</em> até atingirem este número de mensagens. Pode usar este grupo para permitir que usem as mensagens privadas ou para rever as suas mensagens. <strong>O valor zero desactiva esta função.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'			=> 'Definir como grupo padrão Utilizadores Recém Registados',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Se definido como novo utlizador com limite de mensagens será definido como utilizador recém registado não será apenas colocado como pertecente ao grupo, <em>Utilizador Recém RegistadoNewly Registered Users</em> mas será também considerado o seu grupo por defeito. Isto pode vir a ser conveniente se desejar atribuir um grupo padrão rank e/ou avatar que o utilizador ganhe depois.',
	
	'ACC_ADMIN'							=> 'Administrador',
	'ACC_DISABLE'						=> 'Desactivar Registos',
	'ACC_NONE'							=> 'Nenhuma',
	'ACC_USER'							=> 'Utilizador',
//	'ACC_USER_ADMIN'					=> 'User + Admin', 
	'ALLOW_EMAIL_REUSE'					=> 'Activar duplicação de emails',
	'ALLOW_EMAIL_REUSE_EXPLAIN'			=> 'O mesmo email pode ser usado no Registo de vários Utilizadores.',
	'COPPA'								=> '<a href="http://www.coppa.org/coppa.htm" target="_blank";" title="Abrir numa janela nova"><i><b>COPPA</b> (Childrens Online Privacy Protection Act)</i></a>',
	'COPPA_FAX'							=> 'Número de Fax do COPPA',
	'COPPA_MAIL'						=> 'Email do COPPA',
	'COPPA_MAIL_EXPLAIN'				=> 'Email para os <b>Encarregados de Educação</b>, enviarem a Autorização de Registo dos menores de 13 anos.',
	'ENABLE_COPPA'						=> 'Activar COPPA',
	'ENABLE_COPPA_EXPLAIN'				=> 'Solicita ao Utilizador declaração de idade superior a 13 anos.',
	'MAX_CHARS'							=> 'Máximo',
	'MIN_CHARS'							=> 'Mínimo',
	'NO_AUTH_PLUGIN'					=> 'Nenhum Módulo de Segurança encontrado.',
	'PASSWORD_LENGTH'					=> 'Tamanho da Senha',
	'PASSWORD_LENGTH_EXPLAIN'			=> 'Número Mínimo e Máximo de caracteres das Senhas.',
	'REG_LIMIT'							=> 'Tentactivas de Registo',
	'REG_LIMIT_EXPLAIN'					=> 'Número de tentativas que o Utilizador pode fazer antes de ser bloqueado.',
	'USERNAME_ALPHA_ONLY'				=> 'Alfanumérico apenas',
	'USERNAME_ALPHA_SPACERS'			=> 'Alfanumérico e Espaços',
	'USERNAME_ASCII'					=> 'ASCII (Nenhum padrão de codificação unicode internacional)',
	'USERNAME_LETTER_NUM'				=> 'Qualquer letra ou número',
	'USERNAME_LETTER_NUM_SPACERS'		=> 'Qualquer letra, número, ou espaço',
	'USERNAME_CHARS'					=> 'Limite de caracteres para o nome do Utilizador',
	'USERNAME_CHARS_ANY'				=> 'Qualquer caracter',
	'USERNAME_CHARS_EXPLAIN'			=> 'Tipo restrito de caracteres aceites no nome do Utilizador; espaço, -, +, _, [ e ].',
	'USERNAME_LENGTH'					=> 'Tamanho do nome do Utilizador',
	'USERNAME_LENGTH_EXPLAIN'			=> 'Número Mínimo e Máximo de caracteres nos nomes dos Utilizadors.',
)); 

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Configurações Gerais de Feeds',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Este Módulo disponibiliza vários ATOM Feeds, qualquer BBCode utilizado em posts fá-los serem legíveis em qualquer feed externo.',

	'ACP_FEED_ENABLE'					=> 'Activar Feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Ligar ou desligar Atom Feeds em todo o Fórum.<br />Desactivar as ligações de todos os Feeds, não importando quais as opções que estão configuradas abaixo.',
	'ACP_FEED_LIMIT'					=> 'Número de itens',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Número máximo de itens de feed a mostrar.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Activar Feed em todos os Fóruns',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Este Feed mostra os últimos posts em todos os Tópicos do Fórum.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Nº de itens por página a mostrar nos Fóruns Feed',

	'ACP_FEED_OVERALL_TOPIC'			=> 'Activar globalmente os Tópicos Feed',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Activa “Todos os Tópicos” Feed',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Numero de itens por página a mostrar nos tópicos feed',
	'ACP_FEED_FORUM'					=> 'Activa Per-Forum Feeds',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Fórum único de novos posts.',
	'ACP_FEED_TOPIC'					=> 'Activa Per-Topic Feeds',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Tópicos únicos de novos posts.',
	'ACP_FEED_NEWS'						=> 'Notícias Feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Seleccione o primeiro post destes Fóruns. Não seleccione nenhum fórum para desactivar o Feed de notícias.<br />Seleccione múltiplos fóruns pressionando a tecla <samp>CTRL</samp> e clicando no Fórum.',

	'ACP_FEED_GENERAL'					=> 'Configurações Gerais de Feed',

	'ACP_FEED_ITEM_STATISTICS'			=> 'Item de estatísticas',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Exibe estatísticas individuais por baixo dos itens de feed<br />(Postado por, data e hora, Respostas, Visualizações)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Excluir Fóruns',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'O conteúdo destes <strong>não será incluído nos feeds</strong>. Seleccione nenhum fórum para puxar os dados de todos os fóruns.<br />Seleccione/Desmarque fóruns múltiplos pressionando <samp>CTRL</samp> e clicando.',
));

// Visual Confirmation Settings 
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Aqui pode seleccionar e configurar plugins CAPTCHA, que implementam formas de rejeitar as tentativas de registo dos chamados spambots.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugins disponíveis',
	'CAPTCHA_UNAVAILABLE'					=> 'O CAPTCHA não pode ser seleccionado enquanto não preencher os requisitos necessários.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',

	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD Captcha ruído em primeiro plano',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilize GD para criar mais Captcha avançados.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use o ruído em primeiro plano para criar uma imagem GD Captcha complexa.',
	'CAPTCHA_GD_X_GRID'						=> 'Eixo X de ruído de fundo do GD Captcha',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem GD Captcha mais complexa. 0 irá desactivar o ruído de fundo no eixo X.',
	'CAPTCHA_GD_Y_GRID'						=> 'Eixo Y de ruído de fundo do GD Captcha',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem GD Captcha mais complexa. 0 irá desactivar o ruído de fundo no eixo Y.',

	'CAPTCHA_GD_WAVE'						=> 'GD CAPTCHA onda de distorção',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Aplica uma onda para provocar distorção no CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Adiciona ruído usando objectos 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Adiciona objectos ao CAPTCHA, sobre as letras.',
	'CAPTCHA_GD_FONTS'						=> 'Usar fontes diferentes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Controla que tipos de letra são usados. Pode usar apenas a forma Padrão usar letras alteradas. Também pode usar só letras maiúsculas.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Padrão',
	'CAPTCHA_FONT_NEW'						=> 'Letras alteradas',
	'CAPTCHA_FONT_LOWER'					=> 'Usar só maiúsculas',
	
	'CAPTCHA_NO_GD'							=> 'CAPTCHA sem GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'As suas alterações para a configuração de confirmação visual não foram salvas. Isto é apenas uma visualização.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O CAPTCHA ficará semelhante a esta imagem:',

	'CAPTCHA_SELECT'						=> 'Plugins CAPTCHA instalados',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'O menu contém plugins CAPTCHA reconhecidos pelo painel. As entradas a cinzento não estão de momento disponíveis e talvez precisem de ser configuradas antes de as poder usar.',
	'CAPTCHA_CONFIGURE'						=> 'Configuração de CAPTCHAs',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Altere as definições para o CAPTCHA seleccionado.',
	'CONFIGURE'								=> 'Configuração',
	'CAPTCHA_NO_OPTIONS'					=> 'Este CAPTCHA não tem opções de configuração.',

	'VISUAL_CONFIRM_POST'					=> 'Active confirmação visual para posts de visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Exige que os utilizadores anónimos introduzam um código aleatório combinado com uma imagem para prevenir posts em massa.',
	'VISUAL_CONFIRM_REG'					=> 'Activar confirmação visual para os registos',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Exige que novos utilizadores introduzam um código aleatório combinado com uma imagem para prevenir registos em massa.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Permitir que os utilizadores actualizem a imagem de confirmação',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Permite aos utilizadores que peçam um novo código de confirmação, se estiverem habilitados para pedirem um novo código de visualização durante o registo. Alguns plugins podem não suportar esta opção.',

));

// Cookie Settings 
$lang = array_merge($lang, array( 
	'ACP_COOKIE_SETTINGS_EXPLAIN'			=> 'Estas configurações definem os dados usados nos cookies enviados aos navegadores do Utilizadores. Na generalidade dos casos os valores abaixo são suficientes. Se os mudar faça-o com cuidado. Qualquer incorrecção impede os Utilizadores de aceder ao Fórum.',

	'COOKIE_DOMAIN'							=> 'Domínio do Cookie',
	'COOKIE_NAME'							=> 'Nome do Cookie',
	'COOKIE_PATH'							=> 'Directoria do Cookie',
	'COOKIE_SECURE'							=> 'Cookie seguro',
	'COOKIE_SECURE_EXPLAIN'					=> 'Se o Servidor funciona por SSL, mude para <b>Activado</b> caso contrário, deixe-o <b>Desactivado</b>. Estando <b>Activado</b> sem funcionar por SSL poderá resultar em erros no Servidor durante os redirecionamentos.',
	'ONLINE_LENGTH'							=> 'Tempo limite para visualização on-line',
	'ONLINE_LENGTH_EXPLAIN'					=> 'Tempo em minutos após o qual o Utilizador inactivo não aparecerá na lista de Utilizadores on-line. Quanto menor, menos processamento exige.',
	'SESSION_LENGTH'						=> 'Tempo da Sessão [ segundos ]',
	'SESSION_LENGTH_EXPLAIN'				=> 'A Sessão será encerrada após este tempo, em segundos.',
)); 

// Load Settings 
$lang = array_merge($lang, array( 
	'ACP_LOAD_SETTINGS_EXPLAIN'				=> 'Aqui pode activar e desactivar certas funções do Fórum que podem reduzir o total de processamento pedido. Para a maioria dos Servidores não é necessário desactivar nenhuma função. No entanto, em certos sistemas ou em ambientes de hospedagem compartilhada pode ser benéfico se desactivar alguns recursos que não sejam realmente necessário. Pode também especificar limites para a carga do sistema e activar sessões, além das quais o Fórum sairá do ar.',

	'CUSTOM_PROFILE_FIELDS'					=> 'Campos do Perfil Personalizados',
	'LIMIT_LOAD'							=> 'Limite de carga do Sistema',
	'LIMIT_LOAD_EXPLAIN'					=> 'Se, durante 1 minuto, a carga do Sistema ultrapassar este valor o Fórum fica fora de serviço. O valor 1 corresponde a aproximadamente 100% da capacidade dum Processador. Este sistema só funciona em Servidores UNIX e onde esta Mensagem é acessível. Este valor regressa a zero se o phpBB não atingir o limite de leitura.',
	'LIMIT_SESSIONS'						=> 'Limite de Sessões',
	'LIMIT_SESSIONS_EXPLAIN'				=> 'Se o número de Sessões, durante 1 minuto, ultrapassar este valor o Fórum fica fora de serviço. (0 = Ilimitadas).',
	'LOAD_CPF_MEMBERLIST'					=> 'Mostra os campos Personalizados na Lista dos Utilizadores',
	'LOAD_CPF_VIEWPROFILE'					=> 'Mostra os campos Personalizados no Perfil dos Utilizadores',
	'LOAD_CPF_VIEWTOPIC'					=> 'Mostra os campos Personalizados nos Tópicos',
	'LOAD_USER_ACTIVITY'					=> 'Mostra a actividade dos Utilizadores',
	'LOAD_USER_ACTIVITY_EXPLAIN'			=> 'Mostra o Fórum/Tópico activo no Perfil do Utilizador e no Painel de Controle do Utilizador. Recomenda-se desactivar em Fóruns com mais de um milhão de Mensagens.',
	'RECOMPILE_STYLES'						=> 'Recompilar os componentes de Estilo (Templates)',
	'RECOMPILE_STYLES_EXPLAIN'				=> 'Verificar por actualizações nos ficheiros de estilo no sistema de ficheiros e actualizar.',
	'YES_ANON_READ_MARKING'					=> 'Activa marcação de Tópicos por convidados',
	'YES_ANON_READ_MARKING_EXPLAIN'			=> 'Armazena a marcação de lido/não-lido para convidados. Se desactivado, as Mensagens serão sempre lidas por convidados.',
	'YES_BIRTHDAYS'							=> 'Activa a lista de aniversariantes',
	'YES_BIRTHDAYS_EXPLAIN'					=> 'Se desactivar esta opção a lista de aniversariantes não será mostrada. Para que esta opção funcione a opção de activar Aniversários também precisa estar activada.',
	'YES_JUMPBOX'							=> 'Activa a visualização de Jumpbox',
	'YES_MODERATORS'						=> 'Activa a visualização de Moderadores',
	'YES_ONLINE'							=> 'Activa lista de Utilizadores on-line',
	'YES_ONLINE_EXPLAIN'					=> 'Mostra informação de Utilizador on-line nas páginas de índice, Fóruns e Tópicos.',
	'YES_ONLINE_GUESTS'						=> 'Activa lista de convidados on-line na visualização de quem está on-line',
	'YES_ONLINE_GUESTS_EXPLAIN'				=> 'Permitir visualização de informações de Utilizadores convidados na visualização de quem está on-line.',
	'YES_ONLINE_TRACK'						=> 'Activa visualização da imagem do Utilizador on-line',
	'YES_ONLINE_TRACK_EXPLAIN'				=> 'Mostra informação online para Utilizadores em Perfil e Tópicos.',
	'YES_POST_MARKING'						=> 'Activa Tópicos pontuados',
	'YES_POST_MARKING_EXPLAIN'				=> 'Indica se o Utilizador tem colocado Mensagens num Tópico.',
	'YES_READ_MARKING'						=> 'Activa a marcação de Tópicos no Servidor',
	'YES_READ_MARKING_EXPLAIN'				=> 'Guarda a informação de lido/não lido na Base de Dados em vez de guardá-la em cookie.',
)); 

// Auth settings 
$lang = array_merge($lang, array( 
	'ACP_AUTH_SETTINGS_EXPLAIN'				=> 'O phpBB suporta Plug-ins ou Módulos que permitem definir o método de autenticação dos Utilizadores que entram no Fórum. <br />São disponibilizados três plugins: DB, LDAP e Apache. Nem todos os Módulos necessitam de informação adicional. Preencha apenas os campos relevantes para o método seleccionado.',

	'AUTH_METHOD'							=> 'Seleccione um método de autenticacção',

	'APACHE_SETUP_BEFORE_USE'				=> 'Tem que configurar a autenticação no Apache antes de mudar para este método de autenticação. Certifique-se de que o nome do Utilizador usado para a autenticação Apache seja a mesma que o seu nome de Utilizador no phpBB. A autenticação Apache apenas pode ser utilizada com o mod_php (com uma versão CGI não funciona) e o safe_mode desactivados.',

	'LDAP_DN'								=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'						=> 'Este é o Nome Distinto (dn), determinando a informação do Utilizador, Exemplo: <b>o=My Company, c=US</b>.',
	'LDAP_EMAIL'							=> 'Atributo do email LDAP',
	'LDAP_EMAIL_EXPLAIN'					=> 'Atribui automaticamente ao nome de seu atributo de entrada de email do Utilizador (se existir um) o email ao novo Utilizador. Se deixar em branco, resulta num endereço de email vazio para os Utilizadores que entrem pela primeira vez ao Fórum.',
	'LDAP_INCORRECT_USER_PASSWORD'			=> 'As ligações para o Servidor LDAP falharam com nome de Utilizador e senha indicados.',
	'LDAP_NO_EMAIL'							=> 'O Atributo de email especificado não existe.',
	'LDAP_NO_IDENTITY'						=> 'Não foi possível encontrar uma identificação de Acesso para %s.',
	'LDAP_PASSWORD'							=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'					=> 'Deixe este campo em branco para acesso anónimo. Caso contrário preencha com a senha do Utilizador indicado. <strong>ATENÇÃO:</strong> Esta senha será armazenada em texto, na Base de Dados, e acessível a todos.',
	'LDAP_PORT'								=> 'Porta LDAP do Servidor',
	'LDAP_PORT_EXPLAIN'						=> 'Opcionalmente pode definir uma porta para o Servidor LDAP que tem como padrão a porta 389.',
	'LDAP_SERVER'							=> 'Nome do Servidor de LDAP',
	'LDAP_SERVER_EXPLAIN'					=> 'Se usando LDAP este é o nome ou IP do Servidor.',
	'LDAP_UID'								=> 'LDAP uid',
	'LDAP_UID_EXPLAIN'						=> 'Esta é a chave pela qual procurar para uma dada identificação de Utilizador. Igual a: uid, sn, etc.',
	'LDAP_USER'								=> 'Nome de Utilizador LDAP',
	'LDAP_USER_EXPLAIN'						=> 'Deixe em branco para acesso anónimo. Se preenchido o phpBB irá ligar ao Servidor LDAP com o nome de Utilizador indicado.',
	'LDAP_USER_FILTER'						=> 'Filtro do Utilizador LDAP',
	'LDAP_USER_FILTER_EXPLAIN'				=> 'Pode optar por aumentar o limite de objetos pesquisados com filtros adicionais. Por exemplo, <samp>objectClass=posixGroup</samp> deve resultar na utilização de <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>.',
)); 

// Server Settings 
$lang = array_merge($lang, array( 
	'ACP_SERVER_SETTINGS_EXPLAIN'			=> 'Aqui são definidas as configuracções dos Servidores e Domínios. Certifique-se de que os dados estão correcto. Eventuais erros resultarão em emails contendo informações incorretas. Quando introduzir o domínio, inclua o <b>http://</b> ou outro protocolo. Altere apenas o número da Porta do Servidor se souber que seu Servidor usa um valor diferente, a <b>Porta 80</b> é usada na maioria dos casos.',

	'ENABLE_GZIP'							=> 'Activa Compressão GZip',

	'ENABLE_GZIP_EXPLAIN'					=> 'Conteúdo gerado será comprimido antes de enviado ao utilizador. Isto pode reduzir o tráfego na rede, mas irá aumentar o uso do CPU no servidor e cliente. Requer a utilização da extensão PHP zlib.',

	'FORCE_SERVER_VARS'						=> 'Forçar configurações da URL do Servidor',
	'FORCE_SERVER_VARS_EXPLAIN'				=> 'Se seleccionar <b>Sim</b> serão usadas as configurações aqui definidas em alternativa aos valores definidos automaticamente.',
	'ICONS_PATH'							=> 'Directoria para Ficheiro de Ícones',
	'ICONS_PATH_EXPLAIN'					=> 'Directoria sob o directoria raiz do phpBB. Exemplo: <b>images/ícons</b>.',
	'PATH_SETTINGS'							=> 'Configurações de Pastas',
	'RANKS_PATH'							=> 'Directoria para Ficheiro de Imagens de Rank',
	'RANKS_PATH_EXPLAIN'					=> 'Directoria sob a directoria raiz do phpBB. Exemplo: <b> images/ranks.</b>',
	'SCRIPT_PATH'							=> 'Directória do script',
	'SCRIPT_PATH_EXPLAIN'					=> 'Directoria onde o phpBB está instalado com relação ao Domínio. Exemplo: <b>phpBB3</b>.',
	'SERVER_NAME'							=> 'Nome do Domínio',
	'SERVER_NAME_EXPLAIN'					=> 'O nome do Domínio que executa o Fórum. Exemplo: <b>www.exemplo.com</b>.',
	'SERVER_PORT'							=> 'Porta do Servidor',
	'SERVER_PORT_EXPLAIN'					=> 'A Porta usada pelo Servidor, normalmente a 80. Altere apenas se for diferente.',
	'SERVER_PROTOCOL'						=> 'Protocolo do Servidor',
	'SERVER_PROTOCOL_EXPLAIN'				=> 'Será usado como o protocolo do servidor se essa configuração for forçada. Se vazio ou não forçado, o protocolo é determinado pela configuração de segurança do cookie <b>http://</b> ou <b>https://</b>.',
	'SERVER_URL_SETTINGS'					=> 'Configurações da URL do Servidor',
	'SMILIES_PATH'							=> 'Directoria de Ficheiro de Smileys',
	'SMILIES_PATH_EXPLAIN'					=> 'Directoria sob a directoria raiz do phpBB. Exemplo: <b>images/smilies</b>.',
	'UPLOAD_ICONS_PATH'						=> 'Directoria de Ficheiro de Ícones de Grupos de Extensões',
	'UPLOAD_ICONS_PATH_EXPLAIN'				=> 'Directoria sob a directoria raiz do phpBB. Exemplo: <b>images/upload_icons</b>.',
)); 

// Security Settings 
$lang = array_merge($lang, array( 
	'ACP_SECURITY_SETTINGS_EXPLAIN'			=> 'Aqui configura as opções relacionadas as Sessões e Acesso.',

	'ALL'									=> 'Todos',
	'ALLOW_AUTOLOGIN'						=> 'Permitir acesso automático',
	'ALLOW_AUTOLOGIN_EXPLAIN'				=> 'Permite aos Utilizadores entrar automaticamente quando regressam ao Fórum.',
	'AUTOLOGIN_LENGTH'						=> 'Activar duração do login automático',
	'AUTOLOGIN_LENGTH_EXPLAIN'				=> 'Duração das chaves de acesso automático, (0 = desactivado).',
	'BROWSER_VALID'							=> 'Validação do navegador',
	'BROWSER_VALID_EXPLAIN'					=> 'Activa a validação do navegador em cada sessão, aumentando a segurança.',
	'CHECK_DNSBL'							=> 'Verifica se o IP está na lista de DNS bloquados',
	'CHECK_DNSBL_EXPLAIN'					=> 'Se activado, os endereços IP dos Utilizadores são verificados nos serviços DNSBL quando forem enviadas Mensagens ou criadas Contas de Utilizador: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> e <a href="http://spamhaus.org">spamhaus.org</a>. Essa operação pode tornar-se demorada, dependendo da configuração do Servidor. Nesse caso, ou se acusar falsamente endereços de IP, desactive esta opção.',
	'CLASS_B'								=> 'A.B',
	'CLASS_C'								=> 'A.B.C',
	'EMAIL_CHECK_MX'						=> 'Verificar se o Domínio é um registo MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'				=> 'Se activado, o Domínio do email, quando indicado nos Registos ou alterações de Perfil será verficado nos Registos MX.',
	'FORCE_PASS_CHANGE'						=> 'Força a mudança de Senha',
	'FORCE_PASS_CHANGE_EXPLAIN'				=> 'Duração em dias da Senha de acesso ao Fórum. Após este prazo é pedido ao Utilizador que altere a sua Senha. (0 = desactivavado).',
	'FORM_TIME_MAX'							=> 'Tempo máximo para enviar formas',
	'FORM_TIME_MAX_EXPLAIN'					=> 'Tempo máximo para enviar formas. Use -1 para desactivar. Note que uma forma pode vir a ser inválida se a sessão expirar.',
	'FORM_SID_GUESTS'						=> 'Formas de laço para Sessões de Visitantes',
	'FORM_SID_GUESTS_EXPLAIN'				=> 'Se activado, o símbolo do formulário emitido aos visitantes será de sessão exclusiva, podendo causar problemas com alguns ISPs.',
	'FORWARDED_FOR_VALID'					=> 'Cabeçalho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'			=> 'As Sessões só continuarão se o cabeçalho <var>X_FORWARDED_FOR</var> enviado for igual ao enviado na última visita. Serão expulsos os IPs que contiverem o mesmo cabeçalho <var>X_FORWARDED_FOR</var> validado.',
	'IP_VALID'								=> 'Verificação do IP da Sessão',
	'IP_VALID_EXPLAIN'						=> 'Determina como é autenticado o IP do Utilizador. <b>Todos</b> compara o endereço completo. <b>A.B.C</b> os primeiros x.x.x. <b>A.B</b> os primeiros x.x. <b>Nenhum</b> desactiva a verificação. Em endereços IPv6: <b>A.B.C</b> compara os primeiros quatro blocos. <b>A.B</b> os primeiros 3 blocos.',
	'MAX_LOGIN_ATTEMPTS'					=> 'Número máximo de tentativas de acesso',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'			=> 'Após este número de acessos inválidos, o Utilizador terá que confirmar o acesso (Confirmação Visual).',
	'NO_IP_VALIDATION'						=> 'Nenhum',
	'NO_REF_VALIDATION'						=> 'Nenhum',
	'PASSWORD_TYPE'							=> 'Complexidade da Senha',
	'PASSWORD_TYPE_EXPLAIN'					=> 'Define a complexidade da Senha quando criada ou alterada.',
	'PASS_TYPE_ALPHA'						=> 'Deve incluir Letras e Números',
	'PASS_TYPE_ANY'							=> 'Não definida',
	'PASS_TYPE_CASE'						=> 'Deve incluir maiúsculas e minúsculas',
	'PASS_TYPE_SYMBOL'						=> 'Deve incluir símbolos',
	'REF_HOST'								=> 'Apenas hosts válidos',
	'REF_PATH'								=> 'Também validar pasta',
	'REFERER_VALID'							=> 'Validar Referência',
	'REFERER_VALID_EXPLAIN'					=> 'Se activado, a referência do POST vai verificar a path do Fórum. Isto pode causar problemas em Fóruns que usem muitos domínios ou logins externos.',
	'TPL_ALLOW_PHP'							=> 'Permitir php nos Modelos (Templates)',
	'TPL_ALLOW_PHP_EXPLAIN'					=> 'Se activado, os comandos PHP e INCLUDEPHP serão reconhecidos e inseridos nos Templates.',
)); 

// Email Settings 
$lang = array_merge($lang, array( 
	'ACP_EMAIL_SETTINGS_EXPLAIN'			=> 'Esta informação é usada quando o Fórum envia emails aos Utilizadores. Certifique-se que usa um email válido. Qualquer Mensagem incorreta não será entregue neste endereço. Se o seu serviço de hospedagem não oferece um serviço nativo de email baseado no PHP, pode enviar mensagens através de SMTP. É necessário um Servidor adequado, não especifique qualquer nome antigo aqui! Se o servidor requer autenticação, introduza os nomes e senhas necessários. tenha em atenção que apenas é usada a autenticação básica. Implementações de autenticações diferentes não estão disponíveis.',

	'ADMIN_EMAIL'							=> 'Endereço de Email de resposta',
	'ADMIN_EMAIL_EXPLAIN'					=> 'Será utilizado como endereço de resposta em todas as Mensagens. Este é o email padrão do Fórum para contacto e envio de emails pelo sistema phpBB.',
	'BOARD_EMAIL_FORM'						=> 'Envio de emails de Utilizadores via Fórum',
	'BOARD_EMAIL_FORM_EXPLAIN'				=> 'Permite o envio de emails de usurios pelo Fórum.',
	'BOARD_HIDE_EMAILS'						=> 'Ocultar os endereços de email',
	'BOARD_HIDE_EMAILS_EXPLAIN'				=> 'Esta função esconde os endereços de email.',
	'CONTACT_EMAIL'							=> 'Endereço de email para Contacto',
	'CONTACT_EMAIL_EXPLAIN'					=> 'Este endereço será usado sempre que é necessário um contacto específico, (spam, erro de saída, etc). Pode ser sempre utilizado como endereço para envio e respostas nos emails.',
	'EMAIL_FUNCTION_NAME'					=> 'Nome da Função de email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'			=> 'Função de email usada para enviar emails através do PHP.',
	'EMAIL_PACKAGE_SIZE'					=> 'Tamanho do Pacote de email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'			=> 'Número de emails enviados em um pacote.',
	'EMAIL_SIG'								=> 'Assinatura de Email',
	'EMAIL_SIG_EXPLAIN'						=> 'Este texto será anexado a todos os emails que o Fórum enviar.',
	'ENABLE_EMAIL'							=> 'Activa emails do Fórum',

	'ENABLE_EMAIL_EXPLAIN'					=> 'Se estiver definido como desligado nenhum e-mail poderá ser enviado através do painel. <em>Note que a activação e configuração de contas requer que esta configuração esteja activada. Se recorrentemente utiliza a opção activa na configuração de contas, de  “utilizador” ou “administrador” desabilitar esta configuração não requer nenhuma activação em novas contas.</em>',

	'SMTP_AUTH_METHOD'						=> 'Método de Autenticação para o SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'				=> 'Apenas usado se um Nome/Senha é atribuído, pergunte ao seu ISP se não sabe que método usa.',
	'SMTP_CRAM_MD5'							=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'						=> 'DIGEST-MD5',
	'SMTP_LOGIN'							=> 'LOGIN',
	'SMTP_PASSWORD'							=> 'Senha do SMTP',
	'SMTP_PASSWORD_EXPLAIN'					=> 'Só introduza a Senha se o Servidor de SMTP a pedir.',
	'SMTP_PLAIN'							=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'					=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'								=> 'Porta do Servidor de SMTP',
	'SMTP_PORT_EXPLAIN'						=> 'Mude apenas se tiver a certeza de que seu Servidor de SMTP está numa porta diferente.',
	'SMTP_SERVER'							=> 'Endereço do Servidor de SMTP',
	'SMTP_SETTINGS'							=> 'Configurações do SMTP',
	'SMTP_USERNAME'							=> 'Nome de Utilizador SMTP',
	'SMTP_USERNAME_EXPLAIN'					=> 'Só introduza um Nome se o Servidor de SMTP o pedir.',
	'USE_SMTP'								=> 'Usar um Servidor de SMTP para enviar emails',
	'USE_SMTP_EXPLAIN'						=> 'Marque “Sim” se quer ou tem que enviar emails usando um Servidor SMTP em vez duma função de email local.',
)); 

// Jabber settings 
$lang = array_merge($lang, array( 
	'ACP_JABBER_SETTINGS_EXPLAIN'			=> 'Aqui pode activar e controlar o uso do Jabber para Mensagens Instantâneas e Notícias. Jabber é um Protocolo código-aberto e por isso mesmo disponível a qualquer pessoa interessada. Alguns Servidores de Jabber incluem Gateways e transportes que permitem que contacte Utilizadores em outras redes. Nem todos os servidores oferecem todos os transportes, e mudanças nos protocolos podem evitar operações de transportes. Note que pode levar muitos segundos até à actualização dos detalhes da conta de Jabber, então não interrompa a execução dos procedimentos enquanto não estiver completo!',

	'JAB_ENABLE'							=> 'Activa Jabber',
	'JAB_ENABLE_EXPLAIN'					=> 'Activar o uso de Mensagens e Avisos Jabber.',
	'JAB_GTALK_NOTE'						=> 'Por favor, note que o GTalk não irá funcionar porque a função <samp>dns_get_record</samp> não pôde ser encontrada. Esta função não se encontra disponível no PHP4, e não é implementada nas plataformas do windows. Isto não é executável actualmente em sistemas BSD-based, incluindo o Mac OS.',
	'JAB_PACKAGE_SIZE'						=> 'Tamanho do pacote de Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'				=> 'Este é o número de Mensagens enviadas num pacote. Se for 0, a Mensagem será enviada imediatamente e não será colocada em fila de espera para posterior envio.',
	'JAB_PASSWORD'							=> 'Senha Jabber',
	'JAB_PORT'								=> 'Porta do Jabber',
	'JAB_PORT_EXPLAIN'						=> 'Deixe em branco se souber que não é 5222.',
	'JAB_SERVER'							=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'					=> 'Veja a lista de Servidores em %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'					=> 'Configuracções do Jabber alteradas com sucesso.',
	'JAB_USE_SSL'							=> 'Usar SSL para se ligar',
	'JAB_USE_SSL_EXPLAIN'					=> 'Se activado, uma ligação segura tentará ser estabilizada. A porta Jabber será alterada para 5223 se a porta 5222 tiver sido indicado.',
	'JAB_USERNAME'							=> 'Utilizador Jabber',
	'JAB_USERNAME_EXPLAIN'					=> 'Se não estiver registado será criado se possível.',
));

?>