<?php
/**
*
* acp_board [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.5
* @package language: Brazilian Portuguese
* @original version $Id: board.php,v 1.101 2007/11/03 20:29:39 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:27
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
// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui voc&ecirc; pode determinar as opera&ccedil;&otilde;es b&aacute;sicas de sua comunidade, dar um nome e descri&ccedil;&atilde;o ao f&oacute;rum, ajustar os valores padr&atilde;o do fuso hor&aacute;rio e idioma, entre outras configura&ccedil;&otilde;es.',
	'CUSTOM_DATEFORMAT'				=> 'Padr&atilde;oâ€¦',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'O formato da data &eacute; igual a fun&ccedil;&atilde;o <code>date</code> do PHP.',
	'DEFAULT_LANGUAGE'				=> 'Idioma padr&atilde;o',
	'DEFAULT_STYLE'					=> 'Estilo padr&atilde;o',
	'DISABLE_BOARD'					=> 'Desativar comunidade',
	'DISABLE_BOARD_EXPLAIN'			=> 'Isto far&aacute; com que o f&oacute;rum fique indispon&iacute;vel aos usu&aacute;rios. Voc&ecirc; pode adicionar uma pequena mensagem explicando o motivo do fechamento.',
	'OVERRIDE_STYLE'				=> 'Mudar estilo do usu&aacute;rio',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Trocar estilo dos usu&aacute;rios pelo padr&atilde;o.',
	'SITE_DESC'						=> 'Descri&ccedil;&atilde;o do f&oacute;rum',
	'SITE_NAME'						=> 'Nome do f&oacute;rum',
	'SYSTEM_DST'					=> 'Habilitar Hor&aacute;rio de Ver&atilde;o/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Sistema de fuso hor&aacute;rio',
	'WARNINGS_EXPIRE'				=> 'Dura&ccedil;&atilde;o de advert&ecirc;ncia',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'N&uacute;mero de dias que decorrer&atilde;o antes da uma advert&ecirc;ncia expirar automaticamente do registro de um usu&aacute;rio.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui voc&ecirc; poder&aacute; ativar e desativar in&uacute;meras fun&ccedil;&otilde;es da comunidade.',

	'ALLOW_ATTACHMENTS'			=> 'Permitir anexos',
	'ALLOW_BIRTHDAYS'			=> 'Permitir anivers&aacute;rios',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permitir que os anivers&aacute;rios e a idade dos usu&aacute;rios sejam exibidas no perfil. Por favor, note que a lista de anivers&aacute;rio dentro do &iacute;ndice do f&oacute;rum &eacute; controlada por uma configura&ccedil;&atilde;o separada.',
	'ALLOW_BOOKMARKS'			=> 'Permitir fun&ccedil;&atilde;o de favoritar t&oacute;picos',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'O usu&aacute;rio poder&aacute; adicionar t&oacute;picos como favoritos.',
	'ALLOW_BBCODE'				=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Permitir acompanhar f&oacute;runs',
	'ALLOW_NAME_CHANGE'			=> 'Permitir mudan&ccedil;as do nome de usu&aacute;rio',
	'ALLOW_NO_CENSORS'			=> 'Permitir a desabilita&ccedil;&atilde;o da censura de palavras',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Usu&aacute;rios podem escolher por desativar a censura autom&aacute;tica de palavras de mensagens e mensagens privadas.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Permitir anexos em mensagens privadas',
	'ALLOW_SIG'					=> 'Permitir assinaturas',
	'ALLOW_SIG_BBCODE'			=> 'Permitir BBCode em assinaturas',
	'ALLOW_SIG_FLASH'			=> 'Permitir o uso do BBCode <code>[FLASH]</code> em assinaturas',
	'ALLOW_SIG_IMG'				=> 'Permitir o uso do BBCode <code>[IMG]</code> em assinaturas',
	'ALLOW_SIG_LINKS'			=> 'Permitir o uso de links nas assinaturas',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se desativado, a tag BBCode <code>[URL]</code> e qualquer endere&ccedil;o/link URL ser&aacute; desabilitado na assinatura.',
	'ALLOW_SIG_SMILIES'			=> 'Permitir o uso de smilies nas assinaturas',
	'ALLOW_SMILIES'				=> 'Permitir smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'Permitir acompanhar t&oacute;picos',
	'BOARD_PM'					=> 'Mensagem privadas',
	'BOARD_PM_EXPLAIN'			=> 'Ativar ou desativar as mensagens privadas de todos os usu&aacute;rios.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatares geralmente s&atilde;o pequenos, imagens &uacute;nicas que o usu&aacute;rio associa a si mesmo. Dependendo do estilo utilizado, eles geralmente s&atilde;o mostrados abaixo do rank ou nome do usu&aacute;rio visualizando o t&oacute;pico. Aqui voc&ecirc; pode determinar como os usu&aacute;rios poder&atilde;o definir seus avatares. Note que para permitir o envio de avatares, ser&aacute; preciso ter um diret&oacute;rio configurado para o envio, e o seu servidor permita que os avatares sejam salvos dentro deste diret&oacute;rio. O limite de tamanho do arquivo s&oacute; ter&aacute; efeito sobre avatares que s&atilde;o enviados por seu computador (upload), esta fun&ccedil;&atilde;o n&atilde;o ser&aacute; aplicada em links de avatares remotos.',

	'ALLOW_LOCAL'					=> 'Permitir galeria de avatares',
	'ALLOW_REMOTE'					=> 'Permitir avatar remoto',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatar linkado de outro servidor',
	'ALLOW_UPLOAD'					=> 'Permitir o envio de avatar',
	'AVATAR_GALLERY_PATH'			=> 'Caminho para a galeria de avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Caminho dentro do seu diret&oacute;rio raiz do phpBB para imagens pr&eacute;-carregadas, ex. <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Caminho para o armazenamento de avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Caminho dentro do seu diret&oacute;rio raiz do phpBB, ex. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Dimens&otilde;es m&aacute;ximas do avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Largura x Altura em pixels',
	'MAX_FILESIZE'					=> 'Tamanho m&aacute;ximo do arquivo de avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Para arquivos de avatar enviados (upload).',
	'MIN_AVATAR_SIZE'				=> 'Dimens&otilde;es m&iacute;nimas do avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Largura x Altura em pixels',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aqui voc&ecirc; poder&aacute; definir todas as propriedades das Mensagens Privadas.',

	'ALLOW_BBCODE_PM'			=> 'Permitir BBCode em mensagens privadas',
	'ALLOW_FLASH_PM'			=> 'Permitir o uso do BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Note que a funcionalidade do uso do flash em mensagens privadas, se habilitado aqui, tamb&eacute;m depender&aacute; das permiss&otilde;es.',
	'ALLOW_FORWARD_PM'			=> 'Permitir o "Encaminhamento" de mensagens privadas',
	'ALLOW_IMG_PM'				=> 'Permitir o uso do BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Permitir o envio de mensagens privadas para m&uacute;ltiplos usu&aacute;rios e grupos',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'O Envio de mensagens privadas para grupos pode ser definido por cada grupo na p&aacute;gina de configura&ccedil;&otilde;es.',
	'ALLOW_PRINT_PM'			=> 'Permitir visualiza&ccedil;&atilde;o de impress&atilde;o em mensagens privadas',
	'ALLOW_QUOTE_PM'			=> 'Permitir cita&ccedil;&atilde;o em mensagens privadas',
	'ALLOW_SIG_PM'				=> 'Permitir assinatura em mensagens privadas',
	'ALLOW_SMILIES_PM'			=> 'Permitir smilies em mensagens privadas',
	'BOXES_LIMIT'				=> 'M&aacute;ximo de mensagens privadas por caixa',
	'BOXES_LIMIT_EXPLAIN'		=> 'Usu&aacute;rios n&atilde;o dever&atilde;o receber mais do que este limite de mensagens em suas caixas de entrada. Determine este valor como 0 para permitir MPâ€™s ilimitadas.',
	'BOXES_MAX'					=> 'M&aacute;ximo de pastas em Mensagens Privadas',
	'BOXES_MAX_EXPLAIN'			=> 'Por defini&ccedil;&atilde;o padr&atilde;o, usu&aacute;rios podem criar pastas para armazenar mensagens privadas.',
	'ENABLE_PM_ICONS'			=> 'Ativar o uso de &iacute;cones de t&oacute;picos nas MP',
	'FULL_FOLDER_ACTION'		=> 'A&ccedil;&atilde;o padr&atilde;o para pastas cheias',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'A&ccedil;&atilde;o padr&atilde;o a ser tomada se a pasta de um usu&aacute;rio est&aacute; completamente cheia, se definida para todos, n&atilde;o ser&aacute; aplic&aacute;vel. A &uacute;nica exce&ccedil;&atilde;o ser&aacute; para as mensagens enviadas onde a a&ccedil;&atilde;o padr&atilde;o &eacute; sempre excluir as mais antigas.',
	'HOLD_NEW_MESSAGES'			=> 'Segurar novas mensagens',
	'PM_EDIT_TIME'				=> 'Tempo limite de edi&ccedil;&atilde;o',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limitar o tempo dispon&iacute;vel para editar as mensagens privadas ainda n&atilde;o entregues. Definindo este valor como 0, essa fun&ccedil;&atilde;o ser&aacute; desativada.',
	'PM_MAX_RECIPIENTS'			=> 'N&uacute;mero m&aacute;ximo de destinat&aacute;rios permitido.',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'N&uacute;mero m&aacute;ximo de destinat&aacute;rios permitidos em uma mensagem privada. Caso seja 0, um  n&uacute;mero ilimitado &eacute; permitido. Est&aacute; configura&ccedil;&atilde;o pode ser ajustada para cada  grupo dentro da p&aacute;gina de configura&ccedil;&otilde;es de grupo.',

));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Aqui voc&ecirc; poder&aacute; definir todas as propriedades para as Mensagens.',
	'ALLOW_POST_LINKS'				=> 'Permitir links em t&oacute;picos e mensagens privadas',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Se desativado, a tag BBCode <code>[URL]</code> e os links autom&aacute;ticos tamb&eacute;m ser&atilde;o desabilitados.',
	'ALLOW_POST_FLASH'				=> 'Permitir o uso do BBCode <code>[FLASH]</code> em mensagens',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Se desativado, a tag BBCode <code>[FLASH]</code> estar&aacute; desabilitada nas mensagens. Caso contr&aacute;rio, os controles do sistema permitir&atilde;o que os usu&aacute;rios possam usar a tag BBCode <code>[FLASH]</code>.',
	'ENABLE_QUEUE_TRIGGER'			=> 'Permitir mensagens com citação.',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Capacidade de colocar as mensagens de usu&aacute;rios registrados em aprova&ccedil;&atilde;o se o n&uacute;mero de mensagens for menor que o valor especificado a seguir. Esta defini&ccedil;&atilde;o n&atilde;o tem efeito sobre a configura&ccedil;&atilde;o de permiss&atilde;o na aprova&ccedil;&atilde;o de post/t&oacute;pico.',
	'QUEUE_TRIGGER_POSTS'			=> 'N&uacute;mero Maximo de mensagens com citação!',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Se a citação de mensagens estiver ativada, esta &eacute; a contagem de mensagens que o usu&aacute;rio precisa atingir para postar sem aprova&ccedil;&atilde;o. Se o numero de posts do usu&aacute;rio for menor que este, as mensagens serão citadas automaticamente.',

	'BUMP_INTERVAL'					=> 'Intervalo de pulo',
	'BUMP_INTERVAL_EXPLAIN'			=> 'N&uacute;mero em minutos, horas ou dias entre a &uacute;ltima mensagem para um t&oacute;pico e a habilidade de pular este t&oacute;pico para cima.',
	'CHAR_LIMIT'					=> 'N&uacute;mero m&aacute;ximo de caracteres por mensagem',
	'CHAR_LIMIT_EXPLAIN'			=> 'O n&uacute;mero de caracteres permitidos em uma mensagem. Deixe 0 para ilimitado.',
	'DISPLAY_LAST_EDITED'			=> 'Mostrar informa&ccedil;&atilde;o de &uacute;ltima edi&ccedil;&atilde;o',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Escolha se ser&aacute; mostrada a &uacute;ltima edi&ccedil;&atilde;o de cada mensagem no t&oacute;pico.',
	'EDIT_TIME'						=> 'Tempo limite de edi&ccedil;&atilde;o',
	'EDIT_TIME_EXPLAIN'				=> 'Limite o tempo dispon&iacute;vel para edi&ccedil;&atilde;o de uma nova mensagem. Definindo este valor como 0, essa fun&ccedil;&atilde;o ser&aacute; desativada.',
	'FLOOD_INTERVAL'				=> 'Intervalo de mensagens',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'N&uacute;mero de segundos que um usu&aacute;rio dever&aacute; esperar para postar outra mensagem.',
	'HOT_THRESHOLD'					=> 'T&oacute;pico quente',
	'HOT_THRESHOLD_EXPLAIN'			=> 'N&uacute;mero de mensagens para o t&oacute;pico ficar famoso ou "quente". Deixe 0 para desativar.',
	'MAX_POLL_OPTIONS'				=> 'N&uacute;mero m&aacute;ximo de op&ccedil;&otilde;es na enquete',
	'MAX_POST_FONT_SIZE'			=> 'Tamanho m&aacute;ximo da fonte em mensagens',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamanho m&aacute;ximo da fonte permitida em uma mensagem. Deixe 0 para ilimitado.',
	'MAX_POST_IMG_HEIGHT'			=> 'Tamanho m&aacute;ximo de imagem',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Tamanho m&aacute;ximo para imagem/flash em mensagens. Deixe 0 para n&atilde;o ter limite.',
	'MAX_POST_IMG_WIDTH'			=> 'Largura m&aacute;xima de uma imagem',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura m&aacute;xima para imagem/flash em mensagens. Deixe 0 para n&atilde;o ter limite.',
	'MAX_POST_URLS'					=> 'M&aacute;ximo de links por t&oacute;pico',
	'MAX_POST_URLS_EXPLAIN'			=> 'N&uacute;mero m&aacute;ximo de links em um t&oacute;pico. Deixe 0 para n&atilde;o ter limite.',
	'POSTING'						=> 'Mensagem',
	'POSTS_PER_PAGE'				=> 'Mensagens por p&aacute;gina',
	'QUOTE_DEPTH_LIMIT'				=> 'M&aacute;ximo de citar permitido por mensagem',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'N&uacute;mero m&aacute;ximo de cita&ccedil;&otilde;es em apenas uma mensagem. Deixe 0 para n&atilde;o controlar.',
	'SMILIES_LIMIT'					=> 'M&aacute;ximo de smilies por mensagem',
	'SMILIES_LIMIT_EXPLAIN'			=> 'N&uacute;mero m&aacute;ximo de smilies por mensagem, deixe 0 para n&atilde;o controlar',
	'TOPICS_PER_PAGE'				=> 'T&oacute;picos por p&aacute;gina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui voc&ecirc; pode definir tudo sobre assinaturas',

	'MAX_SIG_FONT_SIZE'				=> 'Tamanho m&aacute;ximo de fonte',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Tamanho m&aacute;ximo de fonte permitida em uma assinatura. Deixe 0 para sem limite.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Tamanho m&aacute;ximo da assinatura',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Tamanho m&aacute;ximo para imagem/flash em mensagens. Deixe 0 para sem limite.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largura m&aacute;xima de uma imagem',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largura m&aacute;xima para imagem/flash em mensagens. Deixe 0 para sem limite.',
	'MAX_SIG_LENGTH'				=> 'M&aacute;ximo de texto na assinatura',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'N&uacute;mero m&aacute;ximo de caracteres para uma assinatura.',
	'MAX_SIG_SMILIES'				=> 'M&aacute;ximo de smilies na assinatura',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'N&uacute;mero m&aacute;ximo de smilies na assinatura do usu&aacute;rio. Deixe 0 para sem limite.',
	'MAX_SIG_URLS'					=> 'M&aacute;ximo de links na assinatura',
	'MAX_SIG_URLS_EXPLAIN'			=> 'N&uacute;mero m&aacute;ximo de links para usar na assinatura. Deixe 0 para sem limite.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui voc&ecirc; estar&aacute; apto a definir as propriedades de registro e de perfil do usu&aacute;rio',

	'ACC_ACTIVATION'			=> 'Ativa&ccedil;&atilde;o de registro',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Isto determina se o usu&aacute;rio ter&aacute; acesso imediato a comunidade.',
	'ACC_ADMIN'					=> 'Pelo Administrador',
	'ACC_DISABLE'				=> 'Desativar',
	'ACC_NONE'					=> 'Nenhum',
	'ACC_USER'					=> 'Pelo Usu&aacute;rio',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Permitir re-utiliza&ccedil;&atilde;o de e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Usu&aacute;rios diferentes podem utilizar do mesmo e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'N&uacute;mero do Fax',
	'COPPA_MAIL'				=> 'Endere&ccedil;o de e-mail',
	'COPPA_MAIL_EXPLAIN'		=> 'Este endere&ccedil;o de e-mail &eacute; o local onde os pais enviar&atilde;o a permiss&atilde;o de registro do filho.',
	'ENABLE_COPPA'				=> 'Ativar COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'COPPA &eacute; uma pol&iacute;tica americana de controle do usu&aacute;rio, onde menores de 13 anos precisam de permiss&atilde;o dos pais para poder acessar a comunidade, no Brasil n&atilde;o temos esta lei.',
	'MAX_CHARS'					=> 'M&aacute;ximo',
	'MIN_CHARS'					=> 'M&iacute;nimo',
	'NO_AUTH_PLUGIN'			=> 'Nenhum auto-plugin encontrado.',
	'PASSWORD_LENGTH'			=> 'Tamanho da senha',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'N&uacute;mero m&aacute;ximo e m&iacute;nimo permitido de caracteres na senha.',
	'REG_LIMIT'					=> 'Tentativas de cadastro',
	'REG_LIMIT_EXPLAIN'			=> 'N&uacute;mero de vezes que um usu&aacute;rio pode tentar fazer um registro antes de ser bloqueado por um per&iacute;odo de tempo.',
	'USERNAME_ALPHA_ONLY'		=> 'Somente alfanum&eacute;ricos',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanum&eacute;ricos e espa&ccedil;os',
	'USERNAME_ASCII'			=> 'ASCII (n&atilde;o unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Qualquer letra e n&uacute;mero',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualquer letra, n&uacute;mero, e espa&ccedil;o',
	'USERNAME_CHARS'			=> 'Limitar caracteres no nome de usu&aacute;rio',
	'USERNAME_CHARS_ANY'		=> 'Qualquer caractere',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restringir alguns tipos de caracteres que possam ser usados no nome de usu&aacute;rio, caracteres como: espa&ccedil;o, -, +, _, [ e ]',
	'USERNAME_LENGTH'			=> 'Tamanho do nome de usu&aacute;rio',
	'USERNAME_LENGTH_EXPLAIN'	=> 'N&uacute;mero m&aacute;ximo e m&iacute;nimo permitido de caracteres no nome de usu&aacute;rio.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Aqui voc&ecirc; est&aacute; apto a definir a confirma&ccedil;&atilde;o visual para opera&ccedil;&otilde;es na comunidade ( propriedades CAPTCHA ).',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA plano de fundo embaralhamento',
	'CAPTCHA_GD_EXPLAIN'					=> 'Usar GD para fazer mais avan&ccedil;ada a CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Usar plano de fundo para fazer o GD baseado em header CAPTCHA.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA plano de fundo embaralhamento horizontal x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Usar poucas propriedades para fazer a confirma&ccedil;&atilde;o. 0 ir&aacute; desabilitar o embaralhamento do plano de fundo, deixando mais f&aacute;cil a confirma&ccedil;&atilde;o no modo horizontal.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA embaralhamento vertical y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Usar poucas propriedades para fazer a confirma&ccedil;&atilde;o. 0 ir&aacute; desabilitar o embaralhamento do plano de fundo, deixando mais f&aacute;cil a confirma&ccedil;&atilde;o no modo vertical.',
	
// Mudanças 3.0.5
  'CAPTCHA_GD_WAVE'						=> 'Distor&ccedil;&atilde;o em forma de onda do GD CAPTCHA',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Isto aplica uma distor&ccedil;&atilde;o em forma de onda no CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Adicionar ruido 3D &agrave; objetos',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Isto adiciona alguns objetos ao CAPTCHA, al&eacute;m das letras.',
	'CAPTCHA_GD_FONTS'						=> 'Usar fontes diferentes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Esta configura&ccedil;&atilde;o controla quantas formas diferentes das letras s&atilde;o usadas. Voc&ecirc; pode usar formas diferentes ou simplesmente deixar como est&aacute;. A adi&ccedil;&atilde;o de letras min&uacute;sculas &eacute; poss&iacute;vel tamb&eacute;m.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Padr&atilde;o',
	'CAPTCHA_FONT_NEW'						=> 'Novas formas',
	'CAPTCHA_FONT_LOWER'					=> 'Tamb&eacute;m usar min&uacute;sculas',
// Mudanças 3.0.5	

	'CAPTCHA_PREVIEW_MSG'					=> 'Sua mudan&ccedil;as para a confirma&ccedil;&atilde;o visual n&atilde;o foram salvas, isto &eacute; apenas uma an&aacute;lise de como ficar&aacute;.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O CAPTCHA como ir&aacute; aparecer usando as seguintes configura&ccedil;&otilde;es. Use do bot&atilde;o prever para atualizar. Note que ser&aacute; diferente as letras e n&uacute;meros a cada atualiza&ccedil;&atilde;o.',
	'VISUAL_CONFIRM_POST'					=> 'Habilitar confirma&ccedil;&atilde;o visual para mensagens de usu&aacute;rios visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requer que usu&aacute;rios visitantes entrem com um c&oacute;digo rand&ocirc;mico para prevenir que eles adicionem mensagens em massa.',
	'VISUAL_CONFIRM_REG'					=> 'Habilitar confirma&ccedil;&atilde;o visual para registrados',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requer que os novos usu&aacute;rios entrem com um c&oacute;digo rand&ocirc;mico para prevenir o registro em massa de rob&ocirc;s ou scripts mal intencionados.',
	
	// Mudanças 3.0.5
	'VISUAL_CONFIRM_REFRESH'				=> 'Permite que usu&aacute;rios atualizem o c&oacute;digo de confirma&ccedil;&atilde;o',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Permite que usu&aacute;rios pe&ccedil;am por um novo c&oacute;digo de confirma&ccedil;&atilde;o caso eles n&atilde;o consigam visualizar o c&oacute;digo atual.',
	// Mudanças 3.0.5
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Estes detalhes definem o conte&uacute;do usado para enviar cookies aos usu&aacute;rios do f&oacute;rum. Na maioria dos casos, o padr&atilde;o abaixo ser&aacute; suficiente para os requisitos. Se precisar modificar algo, fa&ccedil;a-o com a certeza de que est&aacute; correto, pois cookies errados podem evitar o login do usu&aacute;rio na comunidade.',

	'COOKIE_DOMAIN'				=> 'Dom&iacute;nio do Cookie',
	'COOKIE_NAME'				=> 'Nome do Cookie',
	'COOKIE_PATH'				=> 'Caminho do Cookie',
	'COOKIE_SECURE'				=> 'Cookie seguro',
	'COOKIE_SECURE_EXPLAIN'		=> 'Se seu servidor possui certificado SSL ativo deixe o mesmo como ativado, caso contr&aacute;rio deixe desativado, a grande maioria &eacute; desativado o correto.',
	'ONLINE_LENGTH'				=> 'Tempo online do usu&aacute;rio',
	'ONLINE_LENGTH_EXPLAIN'		=> 'N&uacute;mero de tempo que um usu&aacute;rio ser&aacute; retirado da lista "Quem est&aacute; online". Quanto maior este n&uacute;mero, maior ser&aacute; os recursos necess&aacute;rios para manter a lista do "Quem est&aacute; Online".',
	'SESSION_LENGTH'			=> 'Tamanho da sess&atilde;o',
	'SESSION_LENGTH_EXPLAIN'	=> 'O usu&aacute;rio ser&aacute; deslogado ap&oacute;s este per&iacute;odo de tempo, em segundos.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aqui voc&ecirc; pode ativar e desativar algumas fun&ccedil;&otilde;es da comunidade, para reduzir o tamanho de processos necess&aacute;rios. Na maioria dos servidores n&atilde;o ter&aacute; necessidade de desativar nenhuma das fun&ccedil;&otilde;es abaixo. Entretanto em alguns sistemas ou em servidores compartilhados ser&aacute; preciso desativar certas fun&ccedil;&otilde;es sem necessidade. Voc&ecirc; tamb&eacute;m pode determinar limites de tempo para o sistema desativar determinadas fun&ccedil;&otilde;es.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Personalizar campos de perfil',
	'LIMIT_LOAD'					=> 'Limite de carregamento do servidor',
	'LIMIT_LOAD_EXPLAIN'			=> 'Se o sistema de carregamento exceder 1 minuto, a comunidade ir&aacute; se tornar off-line. O valor de 1.0 &eacute; igual a 100% de utiliza&ccedil;&atilde;o de um processador. Isto somente funciona em sistemas baseados em UNIX.',
	'LIMIT_SESSIONS'				=> 'Limite das sess&otilde;es',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se o n&uacute;mero de sess&otilde;es excederem este valor em um minuto, a comunidade ir&aacute; ficar desativada. Defina 0 para ilimitado.',
	'LOAD_CPF_MEMBERLIST'			=> 'Habilitar estilos para exibir os campos de perfil adicionais na lista de membros',
	'LOAD_CPF_VIEWPROFILE'			=> 'Exibir os campos de perfil adicionais no perfil dos usu&aacute;rios',
	'LOAD_CPF_VIEWTOPIC'			=> 'Exibir os campos de perfil adicionais nas p&aacute;ginas dos t&oacute;picos',
	'LOAD_USER_ACTIVITY'			=> 'Mostrar atividade do usu&aacute;rio',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostrar t&oacute;picos/f&oacute;rum ativos no perfil do usu&aacute;rio e no painel de controle do mesmo. Extremamente recomendado desabilitar isto em comunidades com mais de 1 milh&atilde;o de mensagens.',
	'RECOMPILE_STYLES'				=> 'Recopilar componentes do estilo',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Checa por atualiza&ccedil;&otilde;es dos componentes do estilo no sistema e os restauras se assim existir.',
	'YES_ANON_READ_MARKING'			=> 'Habilitar favoritos para an&ocirc;nimos',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Armazenar status lido/n&atilde;o lido para an&ocirc;nimos. Se desativado, os t&oacute;picos aparecer&atilde;o como lidos sempre para os an&ocirc;nimos.',
	'YES_BIRTHDAYS'					=> 'Habilitar lista de anivers&aacute;rios',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Se desabilitado, a lista de anivers&aacute;rio n&atilde;o ser&aacute; exibida. Para fazer com que esta configura&ccedil;&atilde;o tenha efeito, a opção de anivers&aacute;rio precisa tamb&eacute;m estar habilitada.',
	'YES_JUMPBOX'					=> 'Habilitar troca de f&oacute;rum r&aacute;pida',
	'YES_MODERATORS'				=> 'Habilitar a visualiza&ccedil;&atilde;o de moderadores',
	'YES_ONLINE'					=> 'Habilitar "Quem Est&aacute; Online" para usu&aacute;rios',
	'YES_ONLINE_EXPLAIN'			=> 'Mostra as informa&ccedil;&otilde;es dos usu&aacute;rios online no &iacute;ndice, nos t&oacute;picos e nos f&oacute;runs.',
	'YES_ONLINE_GUESTS'				=> 'Habilitar "Quem est&aacute; Online" para an&ocirc;nimos',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Habilitar a demonstra&ccedil;&atilde;o de informa&ccedil;&atilde;o dos an&ocirc;nimos no f&oacute;rum.',
	'YES_ONLINE_TRACK'				=> 'Habilitar a apresenta&ccedil;&atilde;o de quem est&aacute; online/off-line no f&oacute;rum',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Mostrar informa&ccedil;&otilde;es de online no perfil do usu&aacute;rio no f&oacute;rum.',
	'YES_POST_MARKING'				=> 'Habilitar t&oacute;picos pontuados',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indicar&aacute; onde um usu&aacute;rio postou para o mesmo usu&aacute;rio.',
	'YES_READ_MARKING'				=> 'Habilitar marca&ccedil;&atilde;o de servidor em t&oacute;pico',
	'YES_READ_MARKING_EXPLAIN'		=> 'Armazena lido/n&atilde;o lido no banco de dados ou em um cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Suporte a autentica&ccedil;&atilde;o de plugins do phpBB, ou m&oacute;dulos. Isto permite voc&ecirc; determinar como usu&aacute;rios s&atilde;o autenticados quando eles logan na comunidade. Por padr&atilde;o tr&ecirc;s plugins s&atilde;o ativados; Banco de Dados, LDAP e Apache. Nem todos os m&eacute;todos requerem informa&ccedil;&otilde;es adicionais, ent&atilde;o preencha apenas os campos que s&atilde;o relevantes.',

	'AUTH_METHOD'				=> 'Selecione um m&eacute;todo de autentica&ccedil;&atilde;o',

	'APACHE_SETUP_BEFORE_USE'	=> 'Voc&ecirc; tem de configurar a autentica&ccedil;&atilde;o do apache antes de escolher o phpBB neste caso. O usu&aacute;rio que voc&ecirc; utiliza para o apache tem de ser o mesmo utilizado no phpBB.',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Este &eacute; o Nome Distinto, localiza&ccedil;&atilde;o da informa&ccedil;&atilde;o do usu&aacute;rio, ex. <samp>o=Meu Nome,c=BR</samp>',
	'LDAP_EMAIL'					=> 'Atributos de e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Defina isto ao nome de seu usu&aacute;rio (se existe um) em ordem para definir automaticamente o endere&ccedil;o de e-mail para novos usu&aacute;rios. Deixando estes resultados vazios no endere&ccedil;o de e-mail para usu&aacute;rios que acessam pela primeira vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'A autentica&ccedil;&atilde;o do usu&aacute;rio no servidor LDAP n&atilde;o foi conclu&iacute;da com sucesso.',
	'LDAP_NO_EMAIL'					=> 'O atributo do e-mail especificado n&atilde;o existe.',
	'LDAP_NO_IDENTITY'				=> 'N&atilde;o foi poss&iacute;vel encontrar uma identifica&ccedil;&atilde;o de login para %s',
	'LDAP_PASSWORD'					=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Deixe em branco para utilizar de uma liga&ccedil;&atilde;o an&ocirc;nima. Sen&atilde;o complete no local de senha para o usu&aacute;rio acima. <strong>AVISO:</strong> Esta senha ser&aacute; armazenada no banco de dados sem criptografia, sendo vis&iacute;vel para todos que poderem ter acesso ao seu banco de dados ou que possam ver esta p&aacute;gina de configura&ccedil;&atilde;o.',
	'LDAP_PORT'						=> 'Porta do servidor LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Opcionalmente, voc&ecirc; pode especificar uma porta que dever&aacute; ser usada para conectar ao servidor LDAP ao inv&eacute;s da porta padr&atilde;o 389.',
	'LDAP_SERVER'					=> 'Nome do servidor LDAP ',
	'LDAP_SERVER_EXPLAIN'			=> 'Se utilizando LDAP, este &eacute; o nome ou endere&ccedil;o de IP do servidor LDAP. Alternativamente voc&ecirc; pode especificar uma URL como ldap://nomedoservidor:porta/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Esta &eacute; a chave sob o qual ir&aacute; ser feita a busca pela identidade de login entrada, e.x. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP usu&aacute;rio <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Deixe em branco para utilizar de uma liga&ccedil;&atilde;o an&ocirc;nima. Se preenchido no phpBB, use o nome distinto especificado ou login para tentar achar o usu&aacute;rio correto, por exemplo, <samp>uid=NomeDeUsu&aacute;rio,ou=MinhaUnidade,o=MinhaCompania,c=BR</samp>. Exigido por Servidores de Diret&oacute;rio Ativos.',
	'LDAP_USER_FILTER'				=> 'Filtro de usu&aacute;rio LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Opcionalmente, voc&ecirc; pode adicionar limitadores aos objetos procurados com filtros adicionais. Por exemplo: <samp>objectClass=posixGroup</samp> resultaria no uso de <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aqui voc&ecirc; define as propriedades do servidor e dom&iacute;nios. Favor assegurar-se que o conte&uacute;do entrado aqui est&aacute; correto, erros ir&atilde;o resultar em e-mails contendo informa&ccedil;&otilde;es incorretas. Quando entrar com o dom&iacute;nio lembre-se que isto ir&aacute; incluir http:// ou outro termo de protocolo. Somente altere o n&uacute;mero da porta se seu servidor requisitar que o mesmo seja alterado, sen&atilde;o deixe como ela est&aacute;. Seu servidor ir&aacute; informar se precisar mudar.',

	'ENABLE_GZIP'				=> 'Ativar compress&atilde;o GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Conte&uacute;do gerado ser&aacute; comprimido antes de mostrar ao usu&aacute;rio. Isto ir&aacute; reduzir os gastos com banda do servidor, mas ir&aacute; aumentar o uso do CPU tanto no cliente como no servidor.',
	'FORCE_SERVER_VARS'			=> 'For&ccedil;ar propriedades do servidor URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se definido como sim as propriedades do servidor aqui ser&aacute; usadas em favor de um sistema autom&aacute;tico com valores concretos',
	'ICONS_PATH'				=> 'Endere&ccedil;o de armazenamento dos &iacute;cones de mensagens',
	'ICONS_PATH_EXPLAIN'		=> 'Endere&ccedil;o do diret&oacute;rio raiz do seu phpBB, e.x. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Propriedades de endere&ccedil;o',
	'RANKS_PATH'				=> 'Endere&ccedil;o de armazenamento dos ranks',
	'RANKS_PATH_EXPLAIN'		=> 'Endere&ccedil;o do diret&oacute;rio raiz do seu phpBB, e.x. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Endere&ccedil;o do script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Endere&ccedil;o onde o phpBB se encontra, relativo ao nome de dom&iacute;nio, e.x. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nome do dom&iacute;nio',
	'SERVER_NAME_EXPLAIN'		=> 'O nome de dom&iacute;nio no qual esta comunidade est&aacute; funcionando (por exemplo: <samp>www.exemplo.com.br</samp>)',
	'SERVER_PORT'				=> 'Porta do servidor',
	'SERVER_PORT_EXPLAIN'		=> 'A porta que seu servidor est&aacute; rodando, normalmente 80, s&oacute; mude se tiver certeza disto',
	'SERVER_PROTOCOL'			=> 'Protocolo do servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Isto &eacute; usado como o protocolo do servidor se estas defini&ccedil;&otilde;es s&atilde;o for&ccedil;adas. Se estiver vazio ou sem protocolo for&ccedil;ado &eacute; determinado por cookies seguros (<samp>http://</samp> ou <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Propriedades do servidor URL',
	'SMILIES_PATH'				=> 'Endere&ccedil;o de armazenamento dos smilies',
	'SMILIES_PATH_EXPLAIN'		=> 'Endere&ccedil;o do diret&oacute;rio raiz do seu phpBB, e.x. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Endere&ccedil;o de armazenamento dos &iacute;cones de grupos de extens&atilde;o',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Endere&ccedil;o do diret&oacute;rio raiz do seu phpBB, e.x. <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aqui voc&ecirc; est&aacute; apto a definir sess&otilde;es e logins relacionados a suas propriedades',

	'ALL'							=> 'Todos',
	'ALLOW_AUTOLOGIN'				=> 'Permitir login autom&aacute;tico', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se os usu&aacute;rios podem fazer o autologin quando entrarem no f&oacute;rum, assim sempre estar&atilde;o logados quando entrar na comunidade.', 
	'AUTOLOGIN_LENGTH'				=> 'Autologin ir&aacute; durar (em dias)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'N&uacute;mero de dias que o autologin fica ativo para os usu&aacute;rios, depois disto todos ter&atilde;o de refazer este processo.', 
	'BROWSER_VALID'					=> 'Validar navegador',
	'BROWSER_VALID_EXPLAIN'			=> 'Habilita valida&ccedil;&atilde;o por navegador por cada sess&atilde;o aberta, isto faz com que aumente a seguran&ccedil;a.',
	'CHECK_DNSBL'					=> 'Checar IP contra lista de IPs Bloqueados',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se ativado, o endere&ccedil;o de IP do usu&aacute;rio ser&aacute; verificado no DNSBL quando for se registrar e no momento de criar mensagens: <a href="http://spamcop.net">spamcop.net</a> e <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Esta verificação pode levar um tempo, dependendo das configura&ccedil;&atilde;o do servidor. Se você experimentar uma queda na velocidade do fórum, recomendamos que esta op&ccedil;&atilde;o seja desabilitada.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Checar validade do endere&ccedil;o de e-mail para gravar MX',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se ativado, o dom&iacute;nio do e-mail entrado pelo usu&aacute;rio no momento do registro ou no perfil &eacute; checado para ver sua validade e ser gravado como correto.',
	'FORCE_PASS_CHANGE'				=> 'For&ccedil;ar troca de senha',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Requer que o usu&aacute;rio altere sua senha depois de um tempo determinado. Fixando este valor em 0 esta op&ccedil;&atilde;o &eacute; desativada.',
	'FORM_TIME_MAX'					=> 'Tempo m&aacute;ximo para enviar os formul&aacute;rios',
	'FORM_TIME_MAX_EXPLAIN'			=> 'O tempo que um usu&aacute;rio tem para enviar um formul&aacute;rio. Use -1 para desabilitar. Note que um formul&aacute;rio pode se tornar inv&aacute;lido se a sess&atilde;o expirar, independente desta configura&ccedil;&atilde;o.',
	'FORM_SID_GUESTS'				=> 'Ligar formul&aacute;rios &agrave;s sess&otilde;es de visitantes',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Se habilitado, o s&iacute;mbolo de formul&aacute;rio emitido aos visitantes ser&aacute; o de sess&atilde;o exclusiva. Isto pode causar problemas com algum ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Cabe&ccedil;alho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sess&otilde;es s&oacute; ter&atilde;o continuidade se o cabe&ccedil;alho do emissor <var>X_FORWARDED_FOR</var> for igual ao emissor previamente. Banimentos ser&atilde;o checados tamb&eacute;m pelo <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Valida&ccedil;&atilde;o da sess&atilde;o IP',
	'IP_VALID_EXPLAIN'				=> 'Determina o quanto de usu&aacute;rios &eacute; usado para validar uma sess&atilde;o de IP; <samp>Todos</samp> compara o endere&ccedil;o completo, <samp>A.B.C</samp> os primeiros x.x.x, <samp>A.B</samp> o primeiro x.x, <samp>Nada</samp> desativa a checagem.',
	'MAX_LOGIN_ATTEMPTS'			=> 'N&uacute;mero m&aacute;ximo de logins permitidos',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Depois de ter atingido este n&uacute;mero m&aacute;ximo de tentativas, o usu&aacute;rio precisar&aacute; entrar com a confirma&ccedil;&atilde;o visual para continuar logando na comunidade (um e-mail ser&aacute; enviado)',
	'NO_IP_VALIDATION'				=> 'Nenhum',
	'NO_REF_VALIDATION'            => 'Nenhum',
	'PASSWORD_TYPE'					=> 'Complexidade da senha',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina o quanto complexo a senha do usu&aacute;rio dever&aacute; ser para fazer login, aumenta a seguran&ccedil;a das contas.',
	'PASS_TYPE_ALPHA'				=> 'Dever&aacute; ser alfa-num&eacute;rico',
	'PASS_TYPE_ANY'					=> 'Sem requerimentos',
	'PASS_TYPE_CASE'				=> 'Dever&aacute; ser forma alta e baixa',
	'PASS_TYPE_SYMBOL'				=> 'Dever&aacute; conter s&iacute;mbolos',
	'REF_HOST'                  => 'Somente validado pelo host',
    'REF_PATH'                  => 'Validado adicionalmente pela pasta',
    'REFERER_VALID'               => 'Refer&ecirc;ncia de valida&ccedil;&atilde;o',
    'REFERER_VALID_EXPLAIN'         => 'Se habilitado, as refer&ecirc;ncias de pedidos de POST ser&atilde;o checadas com as configura&ccedil;&otilde;es do host/pasta do script. Isto pode causar problema com f&oacute;runs usando dom&iacute;nios grandes ou login externo.',
	'TPL_ALLOW_PHP'					=> 'Permitir php nas templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se esta op&ccedil;&atilde;o est&aacute; ativada, <code>PHP</code> e <code>INCLUDEPHP</code> ser&atilde;o reconhecidas e repassadas nas templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta informa&ccedil;&atilde;o &eacute; usada quando a comunidade envia um e-mail para seus usu&aacute;rios. Favor certificar-se de que o e-mail que voc&ecirc; especificou &eacute; v&aacute;lido, qualquer mensagem perdida ser&aacute; enviada para este endere&ccedil;o. Se seu servidor n&atilde;o suporta a fun&ccedil;&atilde;o nativa do PHP (php mail()), ser&aacute; preciso utilizar de um servidor SMTP. Isto requer o endere&ccedil;o de um servidor apropriado (pergunte ao seu provedor de e-mails). Se o servidor requerer autentica&ccedil;&atilde;o (e somente se) entre com o nome de usu&aacute;rio necess&aacute;rio, senha e m&eacute;todo de autentica&ccedil;&atilde;o.',

	'ADMIN_EMAIL'					=> 'Endere&ccedil;o de e-mail para retorno',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Este ser&aacute; usado como endere&ccedil;o de retorno em todos os e-mails, o endere&ccedil;o de contato t&eacute;cnico. Isto ser&aacute; sempre usado como o <samp>Endere&ccedil;o de Retorno</samp> e <samp>Remetente</samp> nos e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Usu&aacute;rio enviar e-mail pela comunidade',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Ao inv&eacute;s de mostrar o endere&ccedil;o de e-mail do usu&aacute;rio, os usu&aacute;rios estar&atilde;o aptos a enviar e-mails usando a comunidade.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar endere&ccedil;os de e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Esta fun&ccedil;&atilde;o mant&eacute;m o endere&ccedil;o de e-mail completamente privado.',
	'CONTACT_EMAIL'					=> 'Endere&ccedil;o de e-mail para contato',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Este endere&ccedil;o ser&aacute; usado quando um contato espec&iacute;fico &eacute; necess&aacute;rio, e.x. spam, retorno de erro, etc. Ele ser&aacute; sempre usado como o <samp>De</samp> e <samp>Responder-Para</samp> endere&ccedil;os nos e-mails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nome da fun&ccedil;&atilde;o do e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'A fun&ccedil;&atilde;o do e-mail usada para enviar via PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Tamanho do pacote de e-mail',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Este Ã© o n&uacute;mero de e-mails enviados em um pacote. Esta configura&ccedil;&atilde;o &eacute; aplicada &agrave; citação; fixe este valor em 0 se voc&ecirc; tiver problemas com notifica&ccedil;&atilde;o de e-mails n&atilde;o enviadas.',
	'EMAIL_SIG'						=> 'Assinatura de e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto ser&aacute; anexado a todos os e-mails enviados pela comunidade.',
	'ENABLE_EMAIL'					=> 'Habilitar e-mail',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se este estiver desabilitado, nenhum e-mail ser&aacute; enviado pela comunidade, nem de cadastro.',
	'SMTP_AUTH_METHOD'				=> 'M&eacute;todo de autentica&ccedil;&atilde;o por SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Usado somente se um usu&aacute;rio/senha &eacute; definido, pergunte ao seu provedor de e-mails para os dados corretos a usar nestes campos, apenas se sua comunidade n&atilde;o for capaz de enviar e-mails.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'USU&Aacute;RIO',
	'SMTP_PASSWORD'					=> 'Senha SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Entre com uma senha somente se seu servidor SMTP requerer uma.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Porta do servidor SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Troque esta porta somente se for necess&aacute;rio e avisado pelo provedor de e-mails.',
	'SMTP_SERVER'					=> 'Endere&ccedil;o do servidor SMTP',
	'SMTP_SETTINGS'					=> 'Propriedades SMTP',
	'SMTP_USERNAME'					=> 'Usu&aacute;rio SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Somente entre com um usu&aacute;rio se seu SMTP requerer um.',
	'USE_SMTP'						=> 'Use o servidor SMTP para enviar e-mails',
	'USE_SMTP_EXPLAIN'				=> 'Selecione &quot;Sim&quot; se voc&ecirc; quer ou tem que enviar e-mails por um servidor nomeado ao inv&eacute;s de usar a fun&ccedil;&atilde;o de e-mail local.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aqui voc&ecirc; pode habilitar e controlar o uso de Jabber para mensagens instant&acirc;neas al&eacute;m de novidades da comunidade. Jabber &eacute; um protocolo c&oacute;digo livre e por tanto pode ser usado por qualquer um. Alguns servidores Jabber incluem um gateway ou transportes o qual permite voc&ecirc; contatar usu&aacute;rio em outra rede. Nem todos os servidores oferecem todos os transportes, e altera&ccedil;&otilde;es no protocolo podem prevenir as opera&ccedil;&otilde;es destes transportes. Por favor, esteja certo de fornecer informa&ccedil;&otilde;es de contas j&aacute; registradas - o phpBB se utilizar&aacute; das informa&ccedil;&otilde;es que voc&ecirc; nos fornece aqui.',

	'JAB_ENABLE'				=> 'Habilitar Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Ativa o uso de mensagens e notifica&ccedil;&otilde;es via jabber',
	'JAB_GTALK_NOTE'			=> 'Por favor, note que o GTalk n&atilde;o funcionar&aacute; porque a fun&ccedil;&atilde;o <samp>dns_get_record</samp> n&atilde;o p&ocirc;de ser encontrada. Esta fun&ccedil;&atilde;o n&atilde;o est&aacute; dispon&iacute;vel no PHP4, e n&atilde;o est&aacute; implementada nas plataformas Windows. Atualmente ele n&atilde;o trabalha em sistemas baseados em BSD, inclusive Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamanho do pacote jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este &eacute; o n&uacute;mero de mensagens enviadas em um pacote apenas. Se definido como 0, a mensagem &eacute; enviada imediatamente e n&atilde;o ir&aacute; esperar pelo pr&oacute;ximo envio.',
	'JAB_PASSWORD'				=> 'Senha Jabber',
	'JAB_PORT'					=> 'Porta Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Deixe em branco, a menos que voc&ecirc; tenha conhecimento da porta correta, padr&atilde;o 5222',
	'JAB_SERVER'				=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Ver %sjabber.org%s para uma lista de servidores',
	'JAB_SETTINGS_CHANGED'		=> 'Propriedades Jabber modificadas com sucesso.',
	'JAB_USE_SSL'				=> 'Usar SSL para conectar',
	'JAB_USE_SSL_EXPLAIN'		=> 'Se ativado, uma conex&atilde;o segura ir&aacute; tentar ser estabelecida. A porta do Jabber ser&aacute; modificada para 5223 se a porta 5222 for a especificada.',
	'JAB_USERNAME'				=> 'Usu&aacute;rio Jabber ou JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Especifique um nome de usu&aacute;rio registrado ou JID v&aacute;lido. O nome de usu&aacute;rio n&atilde;o ser&aacute; conferido para valida&ccedil;&atilde;o. Se voc&ecirc; especificar apenas um nome de usu&aacute;rio, ent&atilde;o seu JID ser&aacute o nome do usu&aacute;rio e do servidor que voc&ecirc; especificou anteriormente. Caso contrario especificar um JID v&aacute;lido, por exemplo, user@jabber.org.',
));

?>
