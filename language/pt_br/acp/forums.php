<?php
/**
*
* acp_forums [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: forums.php,v 1.32 2007/10/05 13:14:58 kellanved Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
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
// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Auto-limpar tempo de mensagem',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'N&uacute;mero de dias desde a &uacute;ltima mensagem ser enviada para ser removidas mensagens a partir desta data para menos.',
	'AUTO_PRUNE_FREQ'			=> 'Freq&uuml;&ecirc;ncia auto-limpar',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tempo em dias entre eventos do auto-limpar.',
	'AUTO_PRUNE_VIEWED'			=> 'Auto-limpar mensagens pelo tempo de visualiza&ccedil;&atilde;o',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'N&uacute;mero de dias desde que o t&oacute;pico teve a &uacute;ltima visualiza&ccedil;&atilde;o para ser removido.',

	'COPY_PERMISSIONS'				=> 'Copiar permiss&otilde;es de',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Uma vez criada, o f&oacute;rum ter&aacute; as mesmas permiss&otilde;es das selecionadas aqui. Se nenhum f&oacute;rum for selecionado, o novo f&oacute;rum criado n&atilde;o ser&aacute; visualizado at&eacute; obter permiss&otilde;es.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se voc&ecirc; selecionar a c&oacute;pia de permiss&otilde;es, o f&oacute;rum ter&aacute; as mesmas permiss&otilde;es do f&oacute;rum o qual voc&ecirc; selecionou aqui. Isto ir&aacute; sobrescrever qualquer permiss&atilde;o que voc&ecirc; tenha previamente definido para este f&oacute;rum. Se nenhum f&oacute;rum for selecionado, as permiss&otilde;es para o mesmo continuar&atilde;o intactas.',
	'CREATE_FORUM'					=> 'Criar novo f&oacute;rum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Excluir conte&uacute;do ou mover para f&oacute;rum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Excluir sub-f&oacute;runs ou mover para f&oacute;rum',
	'DEFAULT_STYLE'						=> 'Estilo padr&atilde;o',
	'DELETE_ALL_POSTS'					=> 'Remover mensagens',
	'DELETE_SUBFORUMS'					=> 'Remover mensagens e sub-f&oacute;runs',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Habilitar t&oacute;picos ativos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Se definido como SIM, t&oacute;picos ativos em sub-f&oacute;runs ser&atilde;o mostrados abaixo desta categoria.',

	'EDIT_FORUM'					=> 'Editar f&oacute;rum',
	'ENABLE_INDEXING'				=> 'Habilitar indexa&ccedil;&atilde;o de pesquisa',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se definido como SIM, mensagens criadas neste f&oacute;rum ser&atilde;o adicionadas ao sistema de busca da comunidade.',
	'ENABLE_POST_REVIEW'			=> 'Habilitar review de f&oacute;rum',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se definido como SIM, usu&aacute;rios estar&atilde;o aptos a revisar suas mensagens enquanto envia caso novas mensagens sejam adicionadas por outros usu&aacute;rios. Esta op&ccedil;&atilde;o dever&aacute; estar desabilitada para f&oacute;runs com muito chat.',
	'ENABLE_RECENT'					=> 'Mostrar t&oacute;picos ativos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Se definido como SIM, t&oacute;picos feitos neste f&oacute;rum ser&atilde;o mostrados na lista de t&oacute;picos ativos.',
	'ENABLE_TOPIC_ICONS'			=> 'Habilitar smilies de t&oacute;picos',

	'FORUM_ADMIN'						=> 'Administra&ccedil;&atilde;o de F&oacute;rum',
	'FORUM_ADMIN_EXPLAIN'				=> 'No phpBB3 n&atilde;o existem categorias, tudo ser&aacute; baseado em cima do f&oacute;rum. Cada f&oacute;rum pode conter um n&uacute;mero ilimitado de sub-f&oacute;runs e voc&ecirc; pode determinar onde cada um pode ser criadas mensagens ou n&atilde;o (d.e. quando age como uma velha categoria). Aqui voc&ecirc; pode adicionar, editar, excluir, bloquear, desbloquear individualmente cada f&oacute;rum assim como gerenciar por outros controles. Se suas mensagens e t&oacute;picos est&atilde;o fora de sincronia, aqui poder&aacute; ajustar automaticamente os mesmos. <strong>Voc&ecirc; precisa copiar ou definir as permiss&otilde;es apropriadas para os f&oacute;runs recentemente criados para que eles sejam exibidos.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Habilitar auto-limpar',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Limpa o f&oacute;rum de t&oacute;picos, defina a freq&uuml;&ecirc;ncia/idade abaixo.',
	'FORUM_CREATED'						=> 'F&oacute;rum criado com sucesso.',
	'FORUM_DATA_NEGATIVE'				=> 'Par&acirc;metros de limpeza n&atilde;o podem ser negativos.',
	'FORUM_DESC_TOO_LONG'				=> 'A descri&ccedil;&atilde;o do f&oacute;rum &eacute; muito longa, o m&aacute;ximo aceit&aacute;vel &eacute; de 4000 caracteres.',
	'FORUM_DELETE'						=> 'Remover f&oacute;rum',
	'FORUM_DELETE_EXPLAIN'				=> 'O formul&aacute;rio abaixo ir&aacute; permitir voc&ecirc; remover um f&oacute;rum. Se o f&oacute;rum est&aacute; aberto aos usu&aacute;rios voc&ecirc; estar&aacute; apto a decidir quando ir&aacute; pegar as mensagens e t&oacute;picos que o mesmo cont&eacute;m.',
	'FORUM_DELETED'						=> 'F&oacute;rum removido com sucesso.',
	'FORUM_DESC'						=> 'Descri&ccedil;&atilde;o',
	'FORUM_DESC_EXPLAIN'				=> 'Qualquer descri&ccedil;&atilde;o aqui adicionada ser&aacute; demonstrada igualmente.',
	'FORUM_EDIT_EXPLAIN'				=> 'O formul&aacute;rio abaixo ir&aacute; permitir a customizar este f&oacute;rum. Favor notar que a modera&ccedil;&atilde;o e o contador de mensagens s&atilde;o definidos pelas permiss&otilde;es de usu&aacute;rio ou via permiss&otilde;es de f&oacute;rum.',
	'FORUM_IMAGE'						=> 'Imagem do f&oacute;rum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Localiza&ccedil;&atilde;o, relativa &agrave; raiz do phpBB, para uma imagem adicional que represente o f&oacute;rum em quest&atilde;o.',
	// Mudanças 3.0.5
  'FORUM_IMAGE_NO_EXIST'				=> 'A imagem do f&oacute;rum especificado n&atilde;o existe',
  // Mudanças 3.0.5
	'FORUM_LINK_EXPLAIN'				=> 'URL completa (incluindo protocolo, por exemplo <samp>http://</samp>) para o local que este f&oacute;rum levar&aacute; o usu&aacute;rio.',
	'FORUM_LINK_TRACK'					=> 'Contar n&uacute;mero de redirecionamentos',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Grava o n&uacute;mero de vezes que o f&oacute;rum recebeu cliques.',
	'FORUM_NAME'						=> 'Nome do f&oacute;rum',
	'FORUM_NAME_EMPTY'					=> 'Voc&ecirc; deve definir um nome para este f&oacute;rum.',
	'FORUM_PARENT'						=> 'F&oacute;rum pai',
	'FORUM_PASSWORD'					=> 'Senha do f&oacute;rum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmar senha',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Somente necess&aacute;ria quando uma senha ser&aacute; inserida primeiramente.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definir uma senha para o f&oacute;rum &eacute; fundamental quando deseja-se restringir a entrada somente para usu&aacute;rios autorizados com a senha.',
	'FORUM_PASSWORD_UNSET'				=> 'Remover senha do f&oacute;rum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Clique aqui se voc&ecirc; quiser remover a senha do f&oacute;rum.',
	'FORUM_PASSWORD_OLD'				=> 'A senha do f&oacute;rum est&aacute; usando uma encripta&ccedil;&atilde;o antiga e deveria ser alterada.',
	'FORUM_PASSWORD_MISMATCH'			=> 'As senhas n&atilde;o conferem.',
	'FORUM_PRUNE_SETTINGS'				=> 'Propriedades de limpar o f&oacute;rum',
	'FORUM_RESYNCED'					=> 'F&oacute;rum “%s” resincronizado com sucesso',
	'FORUM_RULES_EXPLAIN'				=> 'Regras do f&oacute;rum ser&aacute; mostrada em qualquer p&aacute;gina dentro do f&oacute;rum em especial.',
	'FORUM_RULES_LINK'					=> 'Link para regras do f&oacute;rum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Entre com o link para um t&oacute;pico da comunidade ou site onde as regras do f&oacute;rum est&atilde;o armazenadas.',
	'FORUM_RULES_PREVIEW'				=> 'Visualizar regras do f&oacute;rum',
	'FORUM_RULES_TOO_LONG'				=> 'As regras do f&oacute;rum dever&atilde;o ser pelo menos 4000 caracteres.',
	'FORUM_SETTINGS'					=> 'Propriedades do f&oacute;rum',
	'FORUM_STATUS'						=> 'Status do f&oacute;rum',
	'FORUM_STYLE'						=> 'Estilo do f&oacute;rum',
	'FORUM_TOPICS_PAGE'					=> 'T&oacute;picos por p&aacute;gina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Se nada for digitado, ser&aacute; considerado o padr&atilde;o do phpBB.',
	'FORUM_TYPE'						=> 'Tipo do f&oacute;rum',
	'FORUM_UPDATED'						=> 'Informa&ccedil;&atilde;o do f&oacute;rum atualizadas com sucesso.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Voc&ecirc; quer alterar um f&oacute;rum de postagem que tem sub-f&oacute;runs em um link. Por favor, mova todos os sub-f&oacute;runs para fora deste f&oacute;rum antes de voc&ecirc; prosseguir, porque depois de alter&aacute;-lo em um link voc&ecirc; n&atilde;o ser&aacute; mais capaz de ver os sub-f&oacute;runs ligados atualmente a este f&oacute;rum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Propriedades gerais do f&oacute;rum',

	'LINK'					=> 'Link',
	'LIST_INDEX'			=> 'Listar f&oacute;rum na lista dos sub-f&oacute;runs',
	'LIST_INDEX_EXPLAIN'	=> 'Mostra um link para este f&oacute;rum abaixo do f&oacute;rum pai se algum subf&oacute;rum existir.',
	'LIST_SUBFORUMS'			=> 'Listar subf&oacute;runs na legenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Exibir subf&oacute;runs na p&aacute;gina principal e em outro local como um link com legenda se a op&ccedil;&atilde;o \&quot;Listar f&oacute;rum na lista dos subf&oacute;runs\&quot; estiver habilitada.',
	'LOCKED'				=> 'Trancado',

    'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'O f&oacute;rum que voc&ecirc; selecionou para mover mensagens &eacute; um f&oacute;rum bloqueado onde n&atilde;o podem ser postadas mensagens. Selecione um f&oacute;rum que seja permitido.',
	'MOVE_POSTS_TO'		            => 'Mover mensagens para',
	'MOVE_SUBFORUMS_TO'	            => 'Mover subf&oacute;runs para',

	'NO_DESTINATION_FORUM'			=> 'Voc&ecirc; n&atilde;o especificou um f&oacute;rum para mover o conte&uacute;do',
	'NO_FORUM_ACTION'				=> 'Nenhuma a&ccedil;&atilde;o definida para com o conte&uacute;do do f&oacute;rum',
	'NO_PARENT'						=> 'Nenhum pai',
	'NO_PERMISSIONS'				=> 'N&atilde;o copiar permiss&otilde;es',
	'NO_PERMISSION_FORUM_ADD'		=> 'Voc&ecirc; n&atilde;o tem permiss&otilde;es suficientes para adicionar um f&oacute;rum.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Voc&ecirc; n&atilde;o tem permiss&otilde;es suficientes para excluir um f&oacute;rum.',

    'PARENT_IS_LINK_FORUM'		=> 'O pai que voc&ecirc; especificou &eacute; um f&oacute;rum de link. F&oacute;runs link n&atilde;o s&atilde;o capazes de suportar outros f&oacute;runs. Selecione um f&oacute;rum ou categoria como este f&oacute;rum pai.',
	'PARENT_NOT_EXIST'			=> 'F&oacute;rum pai n&atilde;o existe.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Limpar an&uacute;ncios',
	'PRUNE_STICKY'				=> 'Limpar fixos',
	'PRUNE_OLD_POLLS'			=> 'Limpar enquetes antigas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Remove t&oacute;picos com enquetes sem vota&ccedil;&atilde;o e com mensagens antigas.',

	'REDIRECT_ACL'	=> 'Agora voc&ecirc; est&aacute; apto para %sdefinir permiss&otilde;es%s neste f&oacute;rum.',

	'SYNC_IN_PROGRESS'			=> 'Sincronizando f&oacute;rum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Barra de status da sincronia %1$d/%2$d.',

	'TYPE_CAT'			=> 'Categoria',
	'TYPE_FORUM'		=> 'F&oacute;rum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Destrancado',
));

?>
