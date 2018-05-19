<?php
/**
*
* acp_groups [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.3
* @package language: Brazilian Portuguese
* @original version $Id: groups.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-17 - 16:39
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Deste painel voc&ecirc; pode administrar todos seus grupos de usu&aacute;rio. Voc&ecirc; pode remover, criar um novo ou editar um existente. Al&eacute;m disso, voc&ecirc; pode escolher os moderadores dos grupos, selecionar o estado do grupo como aberto/oculto/fechado e definir um nome para o grupo assim como uma descri&ccedil;&atilde;o.',
	'ADD_USERS'						=> 'Adicionar usu&aacute;rio',
	'ADD_USERS_EXPLAIN'				=> 'Aqui voc&ecirc; pode adicionar novos usu&aacute;rios para o grupo. Voc&ecirc; deve selecionar onde este grupo vir&aacute; para os usu&aacute;rios selecionados. Adicionalmente voc&ecirc; pode definir o usu&aacute;rio como l&iacute;der do grupo. Favor entrar cada nome de usu&aacute;rio em uma linha separada.',

	'COPY_PERMISSIONS'				=> 'Copiar permiss&otilde;es de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Uma vez criado, o grupo ter&aacute; as mesmas permiss&otilde;es do que voc&ecirc; selecionou aqui.',
	'CREATE_GROUP'					=> 'Criar novo grupo',

	'GROUPS_NO_MEMBERS'				=> 'Este grupo n&atilde;o tem membros',
	'GROUPS_NO_MODS'				=> 'Nenhum l&iacute;der de grupo definido',

	'GROUP_APPROVE'					=> 'Aprovar membro',
	'GROUP_APPROVED'				=> 'Membros aprovados',
	'GROUP_AVATAR'					=> 'Avatar do grupo',
	'GROUP_AVATAR_EXPLAIN'			=> 'Esta imagem ser&aacute; mostrada no painel do grupo.',
	'GROUP_CLOSED'					=> 'Fechado',
	'GROUP_COLOR'					=> 'Cor do grupo',
	'GROUP_COLOR_EXPLAIN'			=> 'Define as cores dos nomes de usu&aacute;rios dos membros o qual ir&aacute; aparecer colorido, deixe em branco para utilizar do padr&atilde;o.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Voc&ecirc; est&aacute; certo de que quer adicionar o usu&aacute;rio %1$s ao grupo?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Voc&ecirc; est&aacute; certo de que quer adicionar os usu&aacute;rios %1$s ao grupo?',
	'GROUP_CREATED'					=> 'Grupo criado com sucesso.',
	'GROUP_DEFAULT'					=> 'Fa&ccedil;a grupo padr&atilde;o para membros',
	'GROUP_DEFS_UPDATED'			=> 'Grupo padr&atilde;o definido para todos os membros.',
	'GROUP_DELETE'					=> 'Remover membro do grupo',
	'GROUP_DELETED'					=> 'Grupo removido e grupo de usu&aacute;rio padr&atilde;o definidos com sucesso.',
	'GROUP_DEMOTE'					=> 'Retirar l&iacute;der do grupo',
	'GROUP_DESC'					=> 'Descri&ccedil;&atilde;o do grupo',
	'GROUP_DETAILS'					=> 'Detalhes do grupo',
	'GROUP_EDIT_EXPLAIN'			=> 'Aqui voc&ecirc; pode editar um grupo existente. Voc&ecirc; pode alterar o nome, descri&ccedil;&atilde;o e tipo (aberto, fechado, etc.). Voc&ecirc; pode tamb&eacute;m definir atributos a estes grupos, tais como cores, ranks, etc. Mudan&ccedil;as feitas aqui sobrescrevem as configura&ccedil;&otilde;es atuais dos usu&aacute;rios. Por favor, note que os membros destes grupos podem alterar as configura&ccedil;&otilde;es de avatar do grupo, a menos que voc&ecirc; defina permiss&otilde;es de usu&aacute;rio adequadas.',
	'GROUP_ERR_USERS_EXIST'			=> 'Os usu&aacute;rios especificados j&aacute; pertencem a este grupo',
	'GROUP_FOUNDER_MANAGE'			=> 'Gerenciar apenas o fundador',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'A ger&ecirc;ncia deste grupo &eacute; restrita somente aos fundadores. Usu&aacute;rios que t&ecirc;m permiss&otilde;es de grupo ainda podem ver este grupo como tamb&eacute;m os membros deste grupo.',
	'GROUP_HIDDEN'					=> 'Oculto',
	'GROUP_LANG'					=> 'Idioma do grupo',
	'GROUP_LEAD'					=> 'L&iacute;deres do grupo',
	'GROUP_LEADERS_ADDED'			=> 'Novo l&iacute;der adicionado ao grupo com sucesso.',
	'GROUP_LEGEND'					=> 'Mostrar grupo na legenda',
	'GROUP_LIST'					=> 'Membros atuais',
	'GROUP_LIST_EXPLAIN'			=> 'Esta &eacute; uma lista completa de todos os usu&aacute;rios atuais com filia&ccedil;&atilde;o a este grupo. Voc&ecirc; pode excluir membros (exceto os especiais) ou adicionar novos se julgar necess&aacute;rio.',
	'GROUP_MEMBERS'					=> 'Membros dos grupos',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Esta &eacute; uma lista completa de todos os membros deste grupo de usu&aacute;rios. Isto inclui sess&otilde;es separadas para l&iacute;deres, pendentes e membros existentes. Daqui voc&ecirc; pode gerenciar todos os aspectos de quem foi membro deste grupo e qual sua situa&ccedil;&atilde;o atual. Para remover um l&iacute;der, mas mant&ecirc;-lo no grupo use destituir e ent&atilde;o excluir. Use de promover para fazer o usu&aacute;rio de l&iacute;der na seq&uuml;&ecirc;ncia.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite de mensagens privadas por grupo',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Estas defini&ccedil;&otilde;es sobrescrevem as defini&ccedil;&otilde;es de usu&aacute;rio padr&atilde;o. Se definir como 0 o padr&atilde;o ser&aacute; usado como base para o limite.',
	'GROUP_MODS_ADDED'				=> 'Novos moderadores de grupo adicionado com sucesso.',
	'GROUP_MODS_DEMOTED'			=> 'L&iacute;der de grupo destitu&iacute;do com sucesso.',
	'GROUP_MODS_PROMOTED'			=> 'Membros de grupo promovido com sucesso.',
	'GROUP_NAME'					=> 'Nome do grupo',
	'GROUP_NAME_TAKEN'				=> 'O nome do grupo que voc&ecirc; definiu j&aacute; est&aacute; em uso, defina outro nome para este grupo.',
	'GROUP_OPEN'					=> 'Aberto',
	'GROUP_PENDING'					=> 'Membros pendentes',
	'GROUP_MAX_RECIPIENTS'			=> 'N&uacute;mero m&aacute;ximo permitido de destinat&aacute;rios por mensagem privada.',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'N&uacute;mero m&aacute;ximo de destinat&aacute;rios permitidos em uma mensagem privada. Se for 0, ser&aacute; utilizado o maximo permitido pelo f&oacute;rum.',
	'GROUP_PROMOTE'					=> 'Promover a l&iacute;der do grupo',
	'GROUP_RANK'					=> 'Rank do grupo',
	'GROUP_RECEIVE_PM'				=> 'Grupo habilitado a receber mensagens privadas',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Favor notar que grupos ocultos n&atilde;o podem receber mensagens, por causa desta op&ccedil;&atilde;o oculta.',
	'GROUP_REQUEST'					=> 'Solicitar',
	'GROUP_SETTINGS_SAVE'			=> 'Propriedades do grupo',
	'GROUP_TYPE'					=> 'Tipo de grupo',
	'GROUP_TYPE_EXPLAIN'			=> 'Isto determinar quais usu&aacute;rios podem juntar-se ou ver o grupo.',
	'GROUP_UPDATED'					=> 'Prefer&ecirc;ncias de grupo atualizadas com sucesso.',

	'GROUP_USERS_ADDED'				=> 'Novos usu&aacute;rios adicionados ao grupo com sucesso.',
	'GROUP_USERS_EXIST'				=> 'Os membros selecionados j&aacute; est&atilde;o inseridos no grupo.',
	'GROUP_USERS_REMOVE'			=> 'Novas configura&ccedil;&otilde;es padr&atilde;o e usu&aacute;rios removidos do grupo foram realizados com sucesso.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Tornar este grupo padr&atilde;o para todos os membros',
	'MEMBERS'				=> 'Membros',

	'NO_GROUP'					=> 'Nenhum grupo especificado.',
	'NO_GROUPS_CREATED'			=> 'Nenhum grupo criado ainda.',
	'NO_PERMISSIONS'			=> 'N&atilde;o copie permiss&otilde;es',
	'NO_USERS'					=> 'Voc&ecirc; n&atilde;o inseriu nenhum usu&aacute;rio.',
	'NO_USERS_ADDED'			=> 'Nenhum usu&aacute;rio foi adicionado ao grupo.',
	'NO_VALID_USERS'         => 'Voc&ecirc; n&atilde;o entrou em nenhum grupo eleg&iacute;vel para tal a&ccedil;&atilde;o.',

	'SPECIAL_GROUPS'			=> 'Grupos pr&eacute;-definidos',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupos pr&eacute;-definidos s&atilde;o grupos especiais, n&atilde;o podem ser deletados ou diretamente modificados. Por&eacute;m, voc&ecirc; ainda pode adicionar novos usu&aacute;rios e alterar configura&ccedil;&otilde;es b&aacute;sicas do grupo.',

	'TOTAL_MEMBERS'				=> 'Membros',

	'USERS_APPROVED'				=> 'Usu&aacute;rios aprovados com sucesso.',
	'USER_DEFAULT'					=> 'Usu&aacute;rio Padr&atilde;o',
	'USER_DEF_GROUPS'				=> 'Defini&ccedil;&otilde;es de Grupo por Usu&aacute;rio',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Estes s&atilde;o grupos criados por voc&ecirc; ou outro administrador deste f&oacute;rum. Voc&ecirc; pode gerenciar os membros e tamb&eacute;m editar as propriedades do grupo ou at&eacute; mesmo remover o grupo.',
	'USER_GROUP_DEFAULT'			=> 'Indicar grupo Padr&atilde;o',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Clicando em Sim voc&ecirc; ir&aacute; indicar este grupo como padr&atilde;o aos seus usu&aacute;rios do grupo.',
	'USER_GROUP_LEADER'				=> 'Definir o moderador do grupo',
));

?>