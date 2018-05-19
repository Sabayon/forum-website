<?php
/**
*
* acp_users [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: users.php,v 1.32 2007/10/08 14:38:26 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:30
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
	'ADMIN_SIG_PREVIEW'		=> 'Prever assinatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'Voc&ecirc; n&atilde;o est&aacute; autorizado a mudar este fundador a um usu&aacute;rio normal. Precisar&aacute; ser pelo menos um fundador habilitado para esta a&ccedil;&atilde;o. Se voc&ecirc; quer mudar o status do fundador, promova outro usu&aacute;rio a fundador primeiramente.',

    'BAN_ALREADY_ENTERED'	=> 'O banimento entrado foi realizado com sucesso. A lista de ban ainda n&atilde;o foi atualizada.',
	'BAN_SUCCESSFUL'		=> 'Banimento entrada com sucesso.',

	'CANNOT_BAN_FOUNDER'			=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para banir fundadores.',
	'CANNOT_BAN_YOURSELF'			=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para banir sua pr&oacute;pria conta.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para desativar contas de rob&ocirc;s. Desative o rob&ocirc; ao inv&eacute;s de excluir.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para desativar contas de fundadores.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para desativar sua pr&oacute;pria conta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para for&ccedil;ar a re-ativa&ccedil;&atilde;o de rob&ocirc;s. Desative o rob&ocirc; apenas.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para re-ativar a conta de um fundador.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para re-ativar sua pr&oacute;pria conta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Voc&ecirc; n&atilde;o est&aacute; apto de remover a conta de convidado',
	'CANNOT_REMOVE_YOURSELF'		=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para remover sua pr&oacute;pria conta de usu&aacute;rio.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Voc&ecirc; n&atilde;o est&aacute; apto de promover usu&aacute;rios ignorados para serem fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Voc&ecirc; precisa ativar usu&aacute;rios antes de promover eles a fundadores, somente usu&aacute;rios ativados podem ser promovidos.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Voc&ecirc; s&oacute; precisa especificar isto se voc&ecirc; est&aacute; mudando o endere&ccedil;o de email do usu&aacute;rio.',

	'DELETE_POSTS'			=> 'Excluir mensagens',
	'DELETE_USER'			=> 'Excluir usu&aacute;rio',
	'DELETE_USER_EXPLAIN'	=> 'Favor considerar que, deletando um usu&aacute;rio ser&aacute; permanente, ele n&atilde;o poder&aacute; ser recuperado',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Re-ativa&ccedil;&atilde;o for&ccedil;ada realizada com sucesso.',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Fundadores tem todas permiss&otilde;es de administradores e nunca poder&atilde;o ser banidos, deletados ou terem suas contas alteradas por n&atilde;o fundadores.',

	'GROUP_APPROVE'					=> 'Membro aprovado',
	'GROUP_DEFAULT'					=> 'Fazer grupo padr&atilde;o para membro',
	'GROUP_DELETE'					=> 'Remover membro de um grupo',
	'GROUP_DEMOTE'					=> 'Retirar moderador de grupo',
	'GROUP_PROMOTE'					=> 'Promover a moderador de grupo',

	'IP_WHOIS_FOR'			=> 'IP whois para %s',

	'LAST_ACTIVE'			=> '&Uacute;ltimo login',

	'MOVE_POSTS_EXPLAIN'	=> 'Favor selecionar o f&oacute;rum para qual voc&ecirc; deseja mover todas mensagens que este usu&aacute;rio realizou.',

	'NO_SPECIAL_RANK'		=> 'Nenhum rank especial determinado',
	'NOT_MANAGE_FOUNDER'	=> 'Voc&ecirc; tentou gerenciar um usu&aacute;rio com status de fundador. Somente fundadores est&atilde;o permitidos para gerenciar outros fundadores.',

	'QUICK_TOOLS'			=> 'Ferramentas r&aacute;pidas',

	'REGISTERED'			=> 'Registrado',
	'REGISTERED_IP'			=> 'Registrado IP de',
	'RETAIN_POSTS'			=> 'Reter mensagens',

	'SELECT_FORM'			=> 'Selecionar formul&aacute;rio',
	'SELECT_USER'			=> 'Selecionar usu&aacute;rio',

	'USER_ADMIN'					=> 'Administra&ccedil;&atilde;o de Usu&aacute;rio',
	'USER_ADMIN_ACTIVATE'			=> 'Ativar conta',
	'USER_ADMIN_ACTIVATED'			=> 'Usu&aacute;rio ativado com sucesso.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Removido com sucesso o avatar do usu&aacute;rio.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Banir por email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email banido via Ger&ecirc;ncia de Usu&aacute;rio',
	'USER_ADMIN_BAN_IP'				=> 'Banir por IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Ip banido via Ger&ecirc;ncia de Usu&aacute;rio',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Usu&aacute;rio banido via Ger&ecirc;ncia de Usu&aacute;rio',
	'USER_ADMIN_BAN_USER'			=> 'Banir por nome de usu&aacute;rio',
	'USER_ADMIN_DEACTIVATE'			=> 'Desativar conta',
	'USER_ADMIN_DEACTIVED'			=> 'Usu&aacute;rio desativado com sucesso.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Remover todos anexos',
	'USER_ADMIN_DEL_AVATAR'			=> 'Remover avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Remover todas mensagens',
	'USER_ADMIN_DEL_SIG'			=> 'Remover assinatura',
	'USER_ADMIN_EXPLAIN'			=> 'Aqui voc&ecirc; ser&aacute; capaz de modificar suas informa&ccedil;&otilde;es de usu&aacute;rio e certas op&ccedil;&otilde;es espec&iacute;ficas.',
	'USER_ADMIN_FORCE'				=> 'For&ccedil;ar re-ativa&ccedil;&atilde;o',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mover todas mensagens',
	'USER_ADMIN_SIG_REMOVED'		=> 'Assinatura removida com sucesso.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Removido todos anexos deste usu&aacute;rio.',
	'USER_AVATAR_UPDATED'			=> 'Detalhes do avatar atualizados com sucesso.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizados',
	'USER_DELETED'					=> 'Usu&aacute;rio removido com sucesso.',
	'USER_GROUP_ADD'				=> 'Adicionar usu&aacute;rio ao grupo',
	'USER_GROUP_NORMAL'				=> 'O usu&aacute;rio definido nos grupos de usu&aacute;rio s&atilde;o um membro de',
	'USER_GROUP_PENDING'			=> 'Entrada de usu&aacute;rio em grupo est&aacute; pendente',
	'USER_GROUP_SPECIAL'			=> 'Os grupos de usu&aacute;rio pr&eacute;-definidos s&atilde;o um membro de',
	'USER_NO_ATTACHMENTS'			=> 'N&atilde;o h&aacute; nenhum arquivo anexado para exibir.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalhes do usu&aacute;rio atualizado.',
	'USER_POSTS_DELETED'			=> 'Removido com sucesso todas as mensagens deste usu&aacute;rio.',
	'USER_POSTS_MOVED'				=> 'Movido com sucesso todas as mensagens deste usu&aacute;rio ao f&oacute;rum alvo.',
	'USER_PREFS_UPDATED'			=> 'Prefer&ecirc;ncias de usu&aacute;rio atualizadas.',
	'USER_PROFILE'					=> 'Perfil do usu&aacute;rio',
	'USER_PROFILE_UPDATED'			=> 'Perfil do usu&aacute;rio atualizado.',
	'USER_RANK'						=> 'Rank',
	'USER_RANK_UPDATED'				=> 'Rank atualizado com sucesso.',
	'USER_SIG_UPDATED'				=> 'Assinatura atualizada com sucesso.',
	'USER_TOOLS'					=> 'Ferramentas B&aacute;sicas',
));

?>
