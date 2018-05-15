<?php
/**
*
* posting [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:48
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
$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Anexar arquivo',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se voc&ecirc; desejar anexar mais de um arquivo, entre com os detalhes abaixo',
	'ADD_FILE'					=> 'Adicionar um arquivo',
	'ADD_POLL'					=> 'Criar uma Enquete',
	'ADD_POLL_EXPLAIN'			=> 'Se voc&ecirc; n&atilde;o deseja criar uma enquete para esta mensagem deixe estes campos em branco',
	'ALREADY_DELETED'			=> 'Desculpe, mas essa mensagem j&aacute; foi deletada.',
	'ATTACH_QUOTA_REACHED'		=> 'Desculpe, mais o limite de uploads do f&oacute;rum j&aacute; chegou ao m&aacute;ximo.',
	'ATTACH_SIG'				=> 'Anexar assinatura (assinaturas podem ser modificadas no Painel de Controle do Usu&aacute;rio)',

	'BBCODE_A_HELP'				=> 'Fechar todas as TAGs de BBCode abertas',
	'BBCODE_B_HELP'				=> 'Texto em negrito: [b]texto[/b]',
	'BBCODE_C_HELP'				=> 'Mostrar C&oacute;digo: [code]c&oacute;digo[/code]',
	'BBCODE_E_HELP'				=> 'Lista: Adicionar uma lista de elementos',
	'BBCODE_F_HELP'				=> 'Tamanho da Fonte: [size=85]Texto pequeno[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s est&aacute; <em>desligado</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s est&aacute; <em>ligado</em>',
	'BBCODE_I_HELP'				=> 'Texto em It&aacute;lico: [i]texto em it&aacute;lico[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]texto[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listar item: [*]texto[/*]',
	'BBCODE_O_HELP'				=> 'Lista Ordenada: [list=]texto[/list]',
	'BBCODE_P_HELP'				=> 'Inserir imagem: [img]http://url_da_imagem[/img]',
	'BBCODE_Q_HELP'				=> 'Citar texto: [quote]texto[/quote]',
	'BBCODE_S_HELP'				=> 'Cor da Fonte: [color=red]texto em cor vermelha[/color]  Dica: Voc&ecirc; tamb&eacute;m pode usar color=#FF0000',
	'BBCODE_U_HELP'				=> 'Texto Sublinhado: [u]texto[/u]',
	'BBCODE_W_HELP'				=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]Texto da URL[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=altura,largura]http://www.exemplo.com.br/exemplo.swf[/flash]',
	'BUMP_ERROR'				=> 'Voc&ecirc; n&atilde;o pode enviar mensagens neste t&oacute;pico t&atilde;o cedo depois da &uacute;ltima mensagem.',

	'CANNOT_DELETE_REPLIED'		=> 'Desculpe, voc&ecirc; pode apenas excluir mensagens que n&atilde;o foram respondidas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'A mensagem foi trancada. Voc&ecirc; n&atilde;o pode mais editar aquela mensagem.',
	'CANNOT_EDIT_TIME'			=> 'Voc&ecirc; n&atilde;o pode mais editar ou excluir esta mensagem',
	'CANNOT_POST_ANNOUNCE'		=> 'Desculpe, mas voc&ecirc; n&atilde;o pode enviar an&uacute;ncios.',
	'CANNOT_POST_STICKY'		=> 'Desculpe, mas voc&ecirc; n&atilde;o pode enviar t&oacute;picos como Fixo.',
	'CHANGE_TOPIC_TO'			=> 'Mudar tipo do t&oacute;pico para',
	'CLOSE_TAGS'				=> 'Fechar Tags',
	'CURRENT_TOPIC'				=> 'T&oacute;pico Atual',

	'DELETE_FILE'				=> 'Excluir arquivo',
	'DELETE_MESSAGE'			=> 'Excluir mensagem',
	'DELETE_MESSAGE_CONFIRM'	=> 'Tem certeza que deseja excluir esta mensagem?',
	'DELETE_OWN_POSTS'			=> 'Desculpe, mas voc&ecirc; pode apenas excluir suas pr&oacute;prias mensagens.',
	'DELETE_POST_CONFIRM'		=> 'Voc&ecirc; tem certeza que deseja excluir esta mensagem?',
	'DELETE_POST_WARN'			=> 'Uma vez deletada a mensagem n&atilde;o pode ser mais recuperada',
	'DISABLE_BBCODE'			=> 'Desativar BBCode',
	'DISABLE_MAGIC_URL'			=> 'N&atilde;o converter URL\'s em links automaticamente.',
	'DISABLE_SMILIES'			=> 'Desativar Smilies',
	'DISALLOWED_CONTENT'      => 'O upload foi rejeitado pois o arquivo enviado foi identificado como um poss&iacute;vel vetor de ataque.',
	'DISALLOWED_EXTENSION'		=> 'A extens&atilde;o %s n&atilde;o &eacute; permitida',
	'DRAFT_LOADED'				=> 'Rascunho carregado em sua &aacute;rea de postagem. Voc&ecirc; pode querer terminar sua mensagem agora.<br />Seu rascunho ser&aacute; deletado ap&oacute;s o envio de sua mensagem.',
	'DRAFT_LOADED_PM'			=> 'Rascunho carregado dentro da sua &aacute;rea particular, voc&ecirc; deve querer terminar sua mensagem privada agora.<br />Seu rascunho ser&aacute; deletado ap&oacute;s voc&ecirc; ter enviado ele como uma mensagem privada a outro usu&aacute;rio.',
	'DRAFT_SAVED'				=> 'Rascunho salvo com sucesso.',
	'DRAFT_TITLE'				=> 'T&iacute;tulo do rascunho',

	'EDIT_REASON'				=> 'Raz&atilde;o para editar esta mensagem',
	'EMPTY_FILEUPLOAD'			=> 'O arquivo carregado est&aacute; vazio',
	'EMPTY_MESSAGE'				=> 'VocÃª tem que digitar uma mensagem para enviar.', // Utilizei o caractere Ãª pois ele não aceitou o código &ecirc; no IE
	'EMPTY_REMOTE_DATA'			=> 'O arquivo n&atilde;o p&ocirc;de ser carregado, por favor, fa&ccedil;a isso manualmente.',

	'FLASH_IS_OFF'				=> '[flash] est&aacute; <em>desligado</em>',
	'FLASH_IS_ON'				=> '[flash] est&aacute; <em>ligado</em>',
	'FLOOD_ERROR'				=> 'Voc&ecirc; n&atilde;o pode enviar mensagens t&atilde;o cedo depois da &uacute;ltima mensagem.',
	'FONT_COLOR'				=> 'Cor da Fonte',
	'FONT_COLOR_HIDE'			=> 'Ocultar cor de fonte',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Tamanho da Fonte',
	'FONT_SMALL'				=> 'Pequena',
	'FONT_TINY'					=> 'Min&uacute;scula',

	'GENERAL_UPLOAD_ERROR'		=> 'N&atilde;o foi poss&iacute;vel carregar o arquivo para %s',

	'IMAGES_ARE_OFF'			=> '[img] est&aacute; <em>desligado</em>',
	'IMAGES_ARE_ON'				=> '[img] est&aacute; <em>ligado</em>',
	'INVALID_FILENAME'			=> '%s &eacute; um nome de arquivo inv&aacute;lido',

	'LOAD'						=> 'Carregar',
	'LOAD_DRAFT'				=> 'Carregar Rascunho',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aqui voc&ecirc; pode escolher os rascunhos que deseja continuar escrevendo. Sua mensagem atual ser&aacute; cancelada, e todo o conte&uacute;do da mesma ser&aacute; deletada. Veja, edite e delete rascunhos por meio do seu Painel de Controle do Usu&aacute;rio.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Voc&ecirc; precisa entrar para poder pular seu t&oacute;pico para outra coloca&ccedil;&atilde;o.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Voc&ecirc; precisa estar logado para poder remover mensagens neste f&oacute;rum.',
	'LOGIN_EXPLAIN_POST'		=> 'Voc&ecirc; precisa entrar para enviar mensagens neste f&oacute;rum',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Voc&ecirc; precisa estar logado para poder citar neste f&oacute;rum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Voc&ecirc; precisa entrar para responder t&oacute;picos neste f&oacute;rum',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Voc&ecirc; pode apenas usar tamanhos de fonte abaixo de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Seus filmes de flash pode no m&aacute;ximo ter %1$d pixels de altura.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Seus filmes de flash pode no m&aacute;ximo ter %1$d pixels de largura.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Suas imagens pode ter no m&aacute;ximo %1$d pixels de altura.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Suas imagens pode ter no m&aacute;ximo %1$d pixels de largura.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Escreva sua mensagem aqui, ela n&atilde;o pode conter mais do que <strong>%d</strong> caracteres.',
	'MESSAGE_DELETED'			=> 'Sua mensagem foi deletada',
	'MORE_SMILIES'				=> 'Ver mais smilies',

	'NOTIFY_REPLY'				=> 'Envie-me um e-mail quando minha mensagem for respondida',
	'NOT_UPLOADED'				=> 'Arquivo n&atilde;o p&ocirc;de ser carregado.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Voc&ecirc; n&atilde;o pode excluir op&ccedil;&otilde;es de enquetes existentes',
	'NO_PM_ICON'                => 'Nenhum',
	'NO_POLL_TITLE'				=> 'Voc&ecirc; tem que entrar com o nome da enquete',
	'NO_POST'					=> 'O post desejado n&atilde;o existe.',
	'NO_POST_MODE'				=> 'Nenhum modo do post especificado',

	'PARTIAL_UPLOAD'			=> 'O arquivo foi carregado parcialmente',
	'PHP_SIZE_NA'				=> 'O tamanho do anexo &eacute; muito grande.<br />N&atilde;o p&ocirc;de definir o tamanho m&aacute;ximo no php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'O tamanho do anexo &eacute; muito grande, o tamanho m&aacute;ximo &eacute; de %1$d %2$s MB.<br />Note que isto &eacute; definido em php.ini.',
	'PLACE_INLINE'				=> 'Colocar na linha',
	'POLL_DELETE'				=> 'Excluir enquete',
	'POLL_FOR'					=> 'Permitir votos na enquete at&eacute;',
	'POLL_FOR_EXPLAIN'			=> 'Digite 0 ou deixe em branco para que a enquete n&atilde;o tenha um fim.',
	'POLL_MAX_OPTIONS'			=> 'Op&ccedil;&otilde;es por usu&aacute;rio',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este &eacute; o n&uacute;mero de op&ccedil;&otilde;es que o usu&aacute;rio deve selecionar.',
	'POLL_OPTIONS'				=> 'Op&ccedil;&otilde;es da enquete',
	'POLL_OPTIONS_EXPLAIN'		=> 'Coloque cada op&ccedil;&atilde;o em uma nova linha. Voc&ecirc; deve adicionar at&eacute; <strong>%d</strong> op&ccedil;&otilde;es.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Coloque cada op&ccedil;&atilde;o em uma nova linha. Voc&ecirc; deve adicionar at&eacute; <strong>%d</strong> op&ccedil;&otilde;es. Se voc&ecirc; remover ou adicionar op&ccedil;&otilde;es todos os votos anteriores ser&atilde;o resetados.',
	'POLL_QUESTION'				=> 'Pergunta da enquete',
	'POLL_TITLE_TOO_LONG'		=> 'O t&iacute;tulo da enquete deve conter menos de 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'O tamanho do t&iacute;tulo de sua enquete &eacute; muito grande, remove bbcodes ou smilies para tentar diminuir o tamanho.',
	'POLL_VOTE_CHANGE'			=> 'Permitir votar de novo',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se ativado, permitir&aacute; que os usu&aacute;rios mudem seus votos.',
	'POSTED_ATTACHMENTS'		=> 'Anexos enviados',
	'POST_APPROVAL_NOTIFY'		=> 'Voc&ecirc; ser&aacute; notificado quando sua mensagem for aprovada.',
	'POST_CONFIRMATION'			=> 'Confirma&ccedil;&atilde;o da Postagem',
	'POST_CONFIRM_EXPLAIN'		=> 'Para n&atilde;o criar posts automatizados o Administrador requer que voc&ecirc; digite um c&oacute;digo de confirma&ccedil;&atilde;o. O c&oacute;digo &eacute; mostrado na imagem abaixo. Se voc&ecirc; tem problemas de vis&atilde;o ou por qualquer outro motivo voc&ecirc; n&atilde;o consegue ler o c&oacute;digo, entre em contato com o %sAdministrador do F&oacute;rum%s.',
	'POST_DELETED'				=> 'Esta mensagem foi deletada com sucesso',
	'POST_EDITED'				=> 'Esta mensagem foi editada com sucesso',
	'POST_EDITED_MOD'			=> 'Esta mensagem foi editada com sucesso, mas precisar&aacute; ser aprovada por um moderador antes de ser visualizada publicamente.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> '&Iacute;cone de Mensagem',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisar mensagem',
	'POST_REVIEW_EXPLAIN'		=> 'Pelo menos uma mensagem nova foi feita neste t&oacute;pico. Voc&ecirc; pode desejar revisar sua mensagem levando em isto conta.',
	'POST_STORED'				=> 'Sua mensagem foi enviada com sucesso',
	'POST_STORED_MOD'			=> 'Esta mensagem foi enviada com sucesso, mas precisar&aacute; ser aprovada por um moderador antes de ser visualizada publicamente.',
	'POST_TOPIC_AS'				=> 'Postar o t&oacute;pico como',
	'PROGRESS_BAR'				=> 'Barra de Progresso',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Voc&ecirc; pode colocar cita&ccedil;&otilde;es dentro de outras apenas %1$d vezes.',

	'SAVE'						=> 'Salvar',
	'SAVE_DATE'					=> 'Salvo em',
	'SAVE_DRAFT'				=> 'Salvar Rascunho',
	'SAVE_DRAFT_CONFIRM'		=> 'Por favor, note que o rascunho salvar&aacute; apenas o Assunto e a mensagem do t&oacute;pico, qualquer outro elemento ser&aacute; removido. Voc&ecirc; quer salvar seu rascunho agora?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies est&atilde;o <em>desligados</em>',
	'SMILIES_ARE_ON'			=> 'Smilies est&atilde;o <em>ligados</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tempo limite para o t&oacute;pico Fixo/An&uacute;ncio',
	'STICK_TOPIC_FOR'			=> 'Fixar este t&oacute;pico para',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Entre 0 ou deixe em branco para nunca remover o t&oacute;pico Fixo/An&uacute;ncio',
	'STYLES_TIP'				=> 'Dica: Estilos podem ser aplicados rapidamente nos textos',

	'TOO_FEW_CHARS'				=> 'Sua mensagem tem poucos caracteres.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Voc&ecirc; tem que entrar com pelo menos duas op&ccedil;&otilde;es para a enquete',
	'TOO_MANY_ATTACHMENTS'		=> 'Voc&ecirc; n&atilde;o pode adicionar outro anexo, %d &eacute; o m&aacute;ximo permitido.',
	'TOO_MANY_CHARS'			=> 'Sua mensagem cont&eacute;m muitos caracteres.',
	'TOO_MANY_CHARS_POST'		=> 'Sua mensagem cont&eacute;m %1$d caracteres. O n&uacute;mero m&aacute;ximo de caracteres permitidos &eacute; %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Sua assinatura cont&eacute;m %1$d caracteres. O n&uacute;mero m&aacute;ximo de caracteres permitidos &eacute; %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Voc&ecirc; tentou adicionar muitas op&ccedil;&otilde;es na enquete',
	'TOO_MANY_SMILIES'			=> 'Sua mensagem cont&eacute;m muitos Smilies. Um m&aacute;ximo de smilies permitidos &eacute; de %d.',
	'TOO_MANY_URLS'				=> 'Sua mensagem cont&eacute;m muitas URL\'s. Um m&aacute;ximo de URL permitidas &eacute; de %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Voc&ecirc; n&atilde;o pode especificar tantas op&ccedil;&otilde;es na enquete',
	'TOPIC_BUMPED'				=> 'O t&oacute;pico subiu com sucesso.',

	'UNAUTHORISED_BBCODE'		=> 'Voc&ecirc; n&atilde;o pode usar os seguintes BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Para voltar este t&oacute;pico como normal, voc&ecirc; precisa selecionar o f&oacute;rum em que voc&ecirc; deseja exibir este t&oacute;pico.',
	'UPDATE_COMMENT'			=> 'Atualizar coment&aacute;rio',
	'URL_INVALID'				=> 'A URL especificada &eacute; invalida.',
	'URL_NOT_FOUND'				=> 'O arquivo especificado n&atilde;o p&ocirc;de ser encontrado.',
	'URL_IS_OFF'				=> '[url] est&aacute; <em>desligada</em>',
	'URL_IS_ON'					=> '[url] est&aacute; <em>ligada</em>',
	'USER_CANNOT_BUMP'			=> 'Voc&ecirc; n&atilde;o pode mesclar t&oacute;picos neste f&oacute;rum.',
	'USER_CANNOT_DELETE'		=> 'Voc&ecirc; n&atilde;o pode excluir t&oacute;picos neste f&oacute;rum.',
	'USER_CANNOT_EDIT'			=> 'Voc&ecirc; n&atilde;o pode editar t&oacute;picos neste f&oacute;rum.',
	'USER_CANNOT_REPLY'			=> 'Voc&ecirc; n&atilde;o pode responder t&oacute;picos neste f&oacute;rum.',
	'USER_CANNOT_FORUM_POST'	=> 'Voc&ecirc; n&atilde;o pode enviar mensagens neste f&oacute;rum pois este tipo de f&oacute;rum n&atilde;o suporta isto.',

	'VIEW_MESSAGE'				=> '%sVer sua mensagem enviada%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVer sua mensagem privada enviada%s',

	'WRONG_FILESIZE'			=> 'Este arquivo &eacute; muito grande, o tamanho m&aacute;ximo permitido &eacute; de %1d %2s.',
	'WRONG_SIZE'				=> 'A imagem precisa ter pelo menos %1$d pixels de largura e %2$d pixels de altura, e no m&aacute;ximo %3$d pixels de largura e %4$d pixels de altura. A imagem especificada tem %5$d pixels de largura e %6$d pixels de altura.',
));

?>
