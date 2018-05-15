<?php
/**
*
* groups [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: groups.php,v 1.22 2007/10/04 15:07:24 acydburn Exp $
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
$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'	    => 'O grupo selecionado j&aacute; &eacute; seu grupo padr&atilde;o.',
	'ALREADY_IN_GROUP'	        => 'Voc&ecirc; j&aacute; &eacute; um membro do grupo selecionado.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Voc&ecirc; j&aacute; solicitou a sua entrada no grupo selecionado.',

	'CANNOT_JOIN_GROUP'			=> 'Voc&ecirc; n&atilde;o est&aacute; autorizado a fazer parte deste grupo. Voc&ecirc; pode apenas se inscrever em grupos abertos e de livre acesso.',
	'CANNOT_RESIGN_GROUP'		=> 'Voc&ecirc; n&atilde;o est&aacute; habilitado para se reinscrever neste grupo. Voc&ecirc; pode apenas se reinscrever em grupos abertos e de livre acesso.',
	'CHANGED_DEFAULT_GROUP'		=> 'O grupo padr&atilde;o foi modificado com sucesso.',

	'GROUP_AVATAR'	                    => 'Avatar do Grupo',
    'GROUP_CHANGE_DEFAULT'	            => 'Voc&ecirc; est&aacute; certo de que deseja alterar seu grupo padr&atilde;o para o grupo “%s”?',
	'GROUP_CLOSED'	                    => 'Fechado',
	'GROUP_DESC'	                    => 'Descri&ccedil;&atilde;o do Grupo',
	'GROUP_HIDDEN'	                    => 'Oculto',
	'GROUP_INFORMATION'	                => 'Informa&ccedil;&atilde;o do Grupo',
    'GROUP_IS_CLOSED'	                => 'Este &eacute; um grupo fechado, novos membros s&oacute; poder&atilde;o entrar atrav&eacute;s de um convite do L&iacute;der do Grupo.',
	'GROUP_IS_FREE'	                    => 'Este &eacute; um grupo livremente aberto, todos os novos membros s&atilde;o bem vindos.',
    'GROUP_IS_HIDDEN'	                => 'Este &eacute; um grupo oculto, apenas membros do grupo podem ver seus s&oacute;cios.',
	'GROUP_IS_OPEN'	                    => 'Este &eacute; um grupo aberto, novos usu&aacute;rios podem se unir ao grupo.',
	'GROUP_IS_SPECIAL'	                => 'Este &eacute; um grupo especial, grupos especiais s&atilde;o administrados pelos Administradores do F&oacute;rum.',
    'GROUP_JOIN'	                    => 'Entrar no Grupo',
	'GROUP_JOIN_CONFIRM'	            => 'Voc&ecirc; est&aacute; certo de que deseja entrar no grupo selecionado?',
	'GROUP_JOIN_PENDING'	            => 'Solicitar a sua entrada no grupo',
	'GROUP_JOIN_PENDING_CONFIRM'	    => 'Voc&ecirc; est&aacute; certo de que deseja solicitar a sua entrada no grupo selecionado?',
	'GROUP_JOINED'	                    => 'Voc&ecirc; foi adicionado ao grupo selecionado com sucesso.',
	'GROUP_JOINED_PENDING'	            => 'Voc&ecirc; solicitou com sucesso a sua entrada no grupo. Por favor, espere at&eacute; que o L&iacute;der do Grupo aprove voc&ecirc; como membro.',
	'GROUP_LIST'	                    => 'Gerenciar membros',
	'GROUP_MEMBERS'	                    => 'Membros do grupo',
	'GROUP_NAME'	                    => 'Nome do grupo',
	'GROUP_OPEN'	                    => 'Aberto',
	'GROUP_RANK'	                    => 'Rank do grupo',
    'GROUP_RESIGN_MEMBERSHIP'	        => 'Cancelar sua participa&ccedil;&atilde;o no grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Voc&ecirc; tem certeza que deseja cancelar a sua participa&ccedil;&atilde;o no grupo selecionado?',
	'GROUP_RESIGN_PENDING'	            => 'Cancelar sua inscri&ccedil;&atilde;o pendente no grupo',
	'GROUP_RESIGN_PENDING_CONFIRM'	    => 'Voc&ecirc; tem certeza que deseja cancelar sua inscri&ccedil;&atilde;o pendente no grupo selecionado?',
	'GROUP_RESIGNED_MEMBERSHIP'	        => 'Voc&ecirc; foi removido com sucesso do grupo selecionado.',
	'GROUP_RESIGNED_PENDING'	        => 'Sua inscri&ccedil;&atilde;o pendente foi removida com sucesso do grupo selecionado.',
	'GROUP_TYPE'	                    => 'Tipo do Grupo',
	'GROUP_UNDISCLOSED'	                => 'Grupo Oculto',
	'FORUM_UNDISCLOSED'	                => 'Moderando f&oacute;rum(ns) oculto(s)',
	
	'LOGIN_EXPLAIN_GROUP'	=> 'Voc&ecirc; precisa entrar para ver os detalhes deste grupo.',

	'NO_LEADERS'	                => 'Voc&ecirc; n&atilde;o &eacute; moderador de nenhum grupo.',
	'NOT_LEADER_OF_GROUP'	        => 'A opera&ccedil;&atilde;o desejada n&atilde;o pode ser executada porque voc&ecirc; n&atilde;o &eacute; moderador do grupo selecionado.',
	'NOT_MEMBER_OF_GROUP'	        => 'A opera&ccedil;&atilde;o desejada n&atilde;o pode ser executada porque voc&ecirc; n&atilde;o &eacute; membro do grupo selecionado ou a sua participa&ccedil;&atilde;o ainda n&atilde;o foi aprovada.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o de sair do seu grupo padr&atilde;o.',

	'PRIMARY_GROUP'	    => 'Grupo Prim&aacute;rio',

	'REMOVE_SELECTED'	    => 'Remover Selecionado',

	'USER_GROUP_CHANGE'	        => 'Do grupo “%1$s” para “%2$s”',
	'USER_GROUP_DEMOTE'	        => 'Retirar-se da Modera&ccedil;&atilde;o do Grupo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Voc&ecirc; tem certeza que deseja retirar-se da modera&ccedil;&atilde;o do grupo selecionado?',
	'USER_GROUP_DEMOTED'	    => 'Voc&ecirc; foi retirado da modera&ccedil;&atilde;o com sucesso.',
));

?>
