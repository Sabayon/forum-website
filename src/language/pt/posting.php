<?php
/** 
*
* posting.php [Português]
*
* @package language
* @version $Id: posting.php, v 1.0 Outubro/2009
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'				=> 'Anexar Ficheiro',
	'ADD_ATTACHMENT_EXPLAIN'		=> 'Se deseja anexar um ou mais Ficheiros preencha use os campos abaixo:',
	'ADD_FILE'						=> 'Adicionar o Ficheiro',
	'ADD_POLL'						=> 'Criar Votação',
	'ADD_POLL_EXPLAIN'				=> 'Se não deseja adicionar uma votação ao Tópico deixe os campos em branco.',
	'ALREADY_DELETED'				=> 'Esta Mensagem já foi apagada.',
	'ATTACH_QUOTA_REACHED'			=> 'A cota máxima de anexos para este painel foi alcançada.',
	'ATTACH_SIG'					=> 'Anexar a minha assinatura (pode alterar a assinatura no Painel de Controlo do Utilizador)',

	'BBCODE_A_HELP'					=> 'Anexo enviado: [attachment=]nome do Ficheiro.ext[/attachment]',
	'BBCODE_B_HELP'					=> 'Texto em Negrito: [b]texto[/b]  (alt+b)',
	'BBCODE_C_HELP'					=> 'Exibir código: [code]código[/code]  (alt+c)',
	'BBCODE_E_HELP'					=> 'Lista: Adicionar um elemento à lista',
	'BBCODE_F_HELP'					=> 'Tamanho da fonte: [size=85]texto pequeno[/size]',
	'BBCODE_IS_OFF'					=> '%sBBCode%s está <em>DESLIGADO</em>',
	'BBCODE_IS_ON'					=> '%sBBCode%s está <em>LIGADO</em>',
	'BBCODE_I_HELP'					=> 'Texto em Itálico: [i]texto[/i]  (alt+i)',
	'BBCODE_L_HELP'					=> 'Lista: [list]texto[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'			=> 'Listar Itens: [*]texto[/*]',
	'BBCODE_O_HELP'					=> 'Lista Ordenada: [list=]texto[/list]  (alt+o)',
	'BBCODE_P_HELP'					=> 'Inserir imagem: [img]http://url_da_imagem[/img]  (alt+p)',
	'BBCODE_Q_HELP'					=> 'Citar Texto: [quote]texto[/quote]  (alt+q)',
	'BBCODE_S_HELP'					=> 'Cor da Fonte: [color=red]texto[/color]  Também pode usar color=#FF0000',
	'BBCODE_U_HELP'					=> 'Texto Sublinhado: [u]texto[/u]  (alt+u)',
	'BBCODE_W_HELP'					=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]texto da URL[/url]  (alt+w)',
	'BBCODE_D_HELP'					=> 'Flash: [flash=width,height]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'					=> 'Não pode ressuscitar este Tópico com uma última Mensagem tão recente.',

	'CANNOT_DELETE_REPLIED'			=> 'Não pode pode apagar Mensagens que não foram respondidas.',
	'CANNOT_EDIT_POST_LOCKED'		=> 'Esta Mensagem foi bloqueada. Não pode pode editá-la.',
	'CANNOT_EDIT_TIME'				=> 'Não pode pode editar ou apagar esta Mensagem.',
	'CANNOT_POST_ANNOUNCE'			=> 'Não pode pode criar anúncios.',
	'CANNOT_POST_STICKY'			=> 'Não pode pode criar Tópicos fixos.',
	'CHANGE_TOPIC_TO'				=> 'Alterar Tópico para',
	'CLOSE_TAGS'					=> 'Fechar tags',
	'CURRENT_TOPIC'					=> 'Tópico actual',

	'DELETE_FILE'					=> 'Apagar Ficheiro',
	'DELETE_MESSAGE'				=> 'Apagar Mensagem',
	'DELETE_MESSAGE_CONFIRM'		=> 'Tem a certeza que deseja apagar esta Mensagem?',
	'DELETE_OWN_POSTS'				=> 'Só pode apagar as suas Mensagens.',
	'DELETE_POST_CONFIRM'			=> 'Tem a certeza que deseja apagar esta Mensagem?',
	'DELETE_POST_WARN'				=> 'Uma vez apagada, a Mensagem não poderá ser recuperada',
	'DISABLE_BBCODE'				=> 'Desactivar o BBCode',
	'DISABLE_MAGIC_URL'				=> 'Não processar as URLs automaticamente',
	'DISABLE_SMILIES'				=> 'Desactivar os Smilies',
	'DISALLOWED_CONTENT'			=> 'O envio foi rejeitado porque o Ficheiro enviado foi indentificado como provavelmente malicioso.',
	'DISALLOWED_EXTENSION'			=> 'A extensão %s não é permitida.',
	'DRAFT_LOADED'					=> 'Rascunho carregado, pode terminar sua Mensagem. O rascunho será apagado ao enviar a Mensagem.',
	'DRAFT_LOADED_PM'				=> 'Rascunho carregado, pode terminar a sua Mensagem Privada. O seu rascunho será apagado ao enviar a Mensagem Privada.',
	'DRAFT_SAVED'					=> 'Rascunho salvo com sucesso.',
	'DRAFT_TITLE'					=> 'Título do rascunho',

	'EDIT_REASON'					=> 'Motivos para editar esta Mensagem',
	'EMPTY_FILEUPLOAD'				=> 'O Ficheiro enviado está vazio.',
	'EMPTY_MESSAGE'					=> 'Tem que escrever uma Mensagem.',
	'EMPTY_REMOTE_DATA'				=> 'O Ficheiro não pode ser enviado, tente enviá-lo manualmente.',

	'FLASH_IS_OFF'					=> '[flash] está <em>DESLIGADO</em>',
	'FLASH_IS_ON'					=> '[flash] está <em>LIGADO</em>',
	'FLOOD_ERROR'					=> 'Não pode enviar uma nova Mensagem tão rapidamente.',
	'FONT_COLOR'					=> 'Cor da Fonte',
	'FONT_COLOR_HIDE'				=> 'Ocultar cor da fonte',
	'FONT_HUGE'						=> 'Enorme',
	'FONT_LARGE'					=> 'Grande',
	'FONT_NORMAL'					=> 'Normal',
	'FONT_SIZE'						=> 'Tamanho da Fonte',
	'FONT_SMALL'					=> 'Pequena',
	'FONT_TINY'						=> 'Minúscula',

	'GENERAL_UPLOAD_ERROR'			=> 'Não foi possível enviar o anexo para %s.',

	'IMAGES_ARE_OFF'				=> '[img] está <em>DESLIGADO</em>',
	'IMAGES_ARE_ON'					=> '[img] está <em>LIGADO</em>',
	'INVALID_FILENAME'				=> '%s é um nome de Ficheiro Inválido.',

	'LOAD'							=> 'Carregar',
	'LOAD_DRAFT'					=> 'Carregar rascunho',
	'LOAD_DRAFT_EXPLAIN'			=> 'Seleccione o rascunho. Tenha em atenção que ao seleccionar um rascunho o mesmo deixará de ficar arquivado. No entanto pode voltar a guardar a mensagem, criando um novo rascunho. Pode ver, editar e apagar rascunhos no Painel de Controlo do Utilizador.',

	'LOGIN_EXPLAIN_BUMP'			=> 'Tem que fazer login para ressuscitar Tópicos neste Fórum.',
	'LOGIN_EXPLAIN_DELETE'			=> 'Tem que fazer login para apagar Mensagens neste Fórum.',
	'LOGIN_EXPLAIN_POST'			=> 'Tem que fazer login para enviar Mensagens neste Fórum.',
	'LOGIN_EXPLAIN_QUOTE'			=> 'Tem que fazer login para citar Mensagens neste Fórum.',
	'LOGIN_EXPLAIN_REPLY'			=> 'Tem que fazer login para responder Tópicos neste Fórum.',

	'MAX_FONT_SIZE_EXCEEDED'		=> 'Só pode usar fonte até %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'		=> 'Só pode usar Ficheiros flash com o máximo de %1$d pixels de altura.',
	'MAX_FLASH_WIDTH_EXCEEDED'		=> 'Só pode usar Ficheiros flash com o máximo de %1$d pixels de largura.',
	'MAX_IMG_HEIGHT_EXCEEDED'		=> 'Só pode usar imagens com o máximo de %1$d pixels de altura.',
	'MAX_IMG_WIDTH_EXCEEDED'		=> 'Só pode usar imagens com o máximo de %1$d pixels de largura.',
	'MESSAGE_BODY_EXPLAIN'			=> 'Insira aqui a Mensagem. Não pode ultrapassar os  <strong>%d</strong> caracteres.',
	'MESSAGE_DELETED'				=> 'A Mensagem foi apagada com sucesso.',
	'MORE_SMILIES'					=> 'Ver mais smilies',

	'NOTIFY_REPLY'					=> 'Enviar-me email sempre que tiver uma nova resposta',
	'NOT_UPLOADED'					=> 'Não foi possível enviar o Ficheiro.',
	'NO_DELETE_POLL_OPTIONS'		=> 'Não pode apagar opções de votação existentes.',
	'NO_PM_ICON'					=> 'MP sem ícone',
	'NO_POLL_TITLE'					=> 'Tem que dar um Título à votação.',
	'NO_POST'						=> 'Esta Mensagem não existe.',
	'NO_POST_MODE'					=> 'Nenhum modo de Mensagem foi indicado.',

	'PARTIAL_UPLOAD'				=> 'O Ficheiro foi enviado parcialmente.',
	'PHP_SIZE_NA'					=> 'O Ficheiro é muito grande.<br />Não foi possível determinar o tamanho máximo definido no php.ini do PHP.',
	'PHP_SIZE_OVERRUN'				=> 'O Ficheiro é muito grande. O limite máximo é de %1$d %2$s.<br />Este tamanho é configurado no php.ini e não pode ser alterado.',
	'PLACE_INLINE'					=> 'Insira na linha',
	'POLL_DELETE'					=> 'Apagar votação',
	'POLL_FOR'						=> 'Votação expira em',
	'POLL_FOR_EXPLAIN'				=> 'Insira 0 ou deixe em branco o campo para uma votação sem tempo limite.',
	'POLL_MAX_OPTIONS'				=> 'Opções por Utilizador',
	'POLL_MAX_OPTIONS_EXPLAIN'		=> 'Este é o número de opções que cada Utilizador pode seleccionar quando votar.',
	'POLL_OPTIONS'					=> 'Opções da votação',
	'POLL_OPTIONS_EXPLAIN'			=> 'Escreva uma opção de voto por linha. Não pode exceder <strong>%d</strong> opções.',
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> 'Escreva uma opção de voto por linha. Não pode exceder <strong>%d</strong> opções. Excluindo ou adicionando opções reiniciará a votação.',
	'POLL_QUESTION'					=> 'Pergunta da votação',
	'POLL_TITLE_TOO_LONG'			=> 'O Título da votação deve conter no máximo 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'		=> 'O Título da votação é muito longo, considerar remoção de BBCodes ou Smilies.',
	'POLL_VOTE_CHANGE'				=> 'Permitir mudança de voto',
	'POLL_VOTE_CHANGE_EXPLAIN'		=> 'Se seleccionado, os Utilizadores podem alterar o voto.',
	'POSTED_ATTACHMENTS'			=> 'Anexos',
	'POST_APPROVAL_NOTIFY'			=> 'Será avisado quando a Mensagem for Aprovado.',
	'POST_CONFIRMATION'				=> 'Confirmação da Mensagem',
	'POST_CONFIRM_EXPLAIN'			=> 'Para evitar Mensagens automáticas, o administrador deste painel exige que informe o código de confirmação. O código é mostrado na imagem abaixo. Se não consegue ver a imagem, por favor conctate o %sAdministrador%s.',
	'POST_DELETED'					=> 'A Mensagem foi apagada com sucesso.',
	'POST_EDITED'					=> 'A Mensagem foi editada com sucesso.',
	'POST_EDITED_MOD'				=> 'A Mensagem foi editada mas necessita de ser Aprovada por um Moderador antes de se tornar visível. Será avisado quando a sua Mensagem for aprovada.',
	'POST_GLOBAL'					=> 'Anúncio Global',
	'POST_ICON'						=> 'Ícone da Mensagem',
	'POST_NORMAL'					=> 'Normal',
	'POST_REVIEW'					=> 'Rever Mensagem',

	'POST_REVIEW_EDIT'			=> 'Revisão da mensagem',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Esta mensagem foi alterada por outro utilizador enquanto estava a editá-la. Pode rever a versão actual desta mensagem e ajustar a sua edição.',

	'POST_REVIEW_EXPLAIN'			=> 'Pelo menos uma nova Mensagem foi feita neste Tópico. Deseja rever a sua Mensagem levando isso em conta.',
	'POST_STORED'					=> 'Esta Mensagem foi enviada com sucesso.',
	'POST_STORED_MOD'				=> 'Esta Mensagem foi enviada, mas necessita ser Aprovada.',
	'POST_TOPIC_AS'					=> 'Tipo de Tópico',
	'PROGRESS_BAR'					=> 'Barra de Progresso',

	'QUOTE_DEPTH_EXCEEDED'			=> 'Só pode inserir %1$d citações dentro de outras.',

	'SAVE'							=> 'Guardar',
	'SAVE_DATE'						=> 'Guardar em',
	'SAVE_DRAFT'					=> 'Guardar rascunho',
	'SAVE_DRAFT_CONFIRM'			=> 'Os rascunhos arquivados só incluem o assunto e o texto da Mensagem. <br />Outros elementos serão removidos.<br />Arquivar o rascunho?',
	'SMILIES'						=> 'Emoções',
	'SMILIES_ARE_OFF'				=> 'Smilies está <em>Desligado</em>',
	'SMILIES_ARE_ON'				=> 'Smilies está <em>Ligado</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Tempo limite do Fixo/Anúncio',
	'STICK_TOPIC_FOR'				=> 'Fixar Tópico por',

	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Digite 0 ou deixe em branco para manter Fixo/Anúncio por tempo indetermindado. Por favor note que este número é relativo à data da postagem.',

	'STYLES_TIP'					=> 'Dica: Estilos podem ser aplicados a textos seleccionados.',

	'TOO_FEW_CHARS'					=> 'A Mensagem contém poucos caracteres.',

	'TOO_FEW_CHARS_LIMIT'		=> 'A sua mensagem tem %1$d caracteres. O número mínimo de caracteres que precisa para entrar é %2$d.',

	'TOO_FEW_POLL_OPTIONS'			=> 'A votação tem que ter pelo menos duas opções.',
	'TOO_MANY_ATTACHMENTS'			=> 'Não pode adicionar outro anexo, o limite é de %d anexos.',
	'TOO_MANY_CHARS'				=> 'A Mensagem contém muitos caracteres.',
	'TOO_MANY_CHARS_POST'			=> 'A Mensagem contém %1$d caracteres. O número máximo de caracteres permitidos é %2$d.',
	'TOO_MANY_CHARS_SIG'			=> 'A assinatura contém %1$d caracteres. O número máximo de caracteres permitidos é %2$d.',
	'TOO_MANY_POLL_OPTIONS'			=> 'Tentou inserir muitas opções de votação.',
	'TOO_MANY_SMILIES'				=> 'A Mensagem contém muitas smilies. O número máximo de smilies permitidos é %d.',
	'TOO_MANY_URLS'					=> 'A Mensagem contém muitas URLs. O número máximo de URLs permitidas é %d.',
	'TOO_MANY_USER_OPTIONS'			=> 'Não pode especificar mais opções por Utilizador do que na votação.',
	'TOPIC_BUMPED'					=> 'O Tópico foi Ressuscitado com sucesso.',

	'UNAUTHORISED_BBCODE'			=> 'Não pode usar certos BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'			=> 'Para alterar um anúncio para um Tópico normal, tem que seleccionar o Fórum onde será exibido.',
	'UPDATE_COMMENT'				=> 'Actualizar comentário',
	'URL_INVALID'					=> 'A URL indicada é inválida.',
	'URL_NOT_FOUND'					=> 'O Ficheiro indicado não foi encontrado.',
	'URL_IS_OFF'					=> '[url] está <em>Desligado</em>',
	'URL_IS_ON'						=> '[url] está <em>Ligado</em>',
	'USER_CANNOT_BUMP'				=> 'Não pode ressuscitar Tópicos neste Fórum.',
	'USER_CANNOT_DELETE'			=> 'Não pode apagar Mensagens neste Fórum.',
	'USER_CANNOT_EDIT'				=> 'Não pode editar Mensagens neste Fórum.',
	'USER_CANNOT_REPLY'				=> 'Não pode responder neste Fórum.',
	'USER_CANNOT_FORUM_POST'		=> 'Não pode utilizar estas operações porque este Fórum não as suporta.',

	'VIEW_MESSAGE'					=> '%sVer a Mensagem enviada%s',
	'VIEW_PRIVATE_MESSAGE'			=> '%sVer a Mensagem Privada enviada%s',

	'WRONG_FILESIZE'				=> 'O Ficheiro é muito grande. O máximo permitido é %1d %2s.',
	'WRONG_SIZE'					=> 'A imagem deve ter pelo menos %1$d pixels de largura, %2$d pixels de altura e no máximo %3$d pixels de largura e %4$d pixels de altura. A imagem enviada tem %5$d pixels de largura e %6$d pixels de altura.',
));

?>