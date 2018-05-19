<?php 
/** 
* 
* acp_groups.php [Português]
* 
* @package language 
* @version $Id: groups.php, v 1.0 Outubro/2009
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
	'ACP_GROUPS_MANAGE_EXPLAIN'			=> 'Aqui pode criar, configurar e eliminar Grupos.<br /> Pode ainda escolher os Líderes dos Grupos, especificar o seu estado (Aberto ou Fechado) e atribuir um Nome e uma Descrição ao Grupo.',
	'ADD_USERS'							=> 'Adicionar Utilizadores',
	'ADD_USERS_EXPLAIN'					=> 'Aqui pode adicionar novos Membros ao Grupo. Deve indicar se é o Grupo Padrão dos Utilizadores seleccionados. Pode seleccionar os Líderes do Grupo. Escreva apena um Utilizador por linha.',

	'COPY_PERMISSIONS'					=> 'Copiar Permissões de',
	'COPY_PERMISSIONS_EXPLAIN'			=> 'Uma vez criadas, o Grupo terá as mesmas Permissões que seleccionar aqui.',
	'CREATE_GROUP'						=> 'Criar um Grupo',

	'GROUPS_NO_MEMBERS'					=> 'O Grupo seleccionado não tem Membros',
	'GROUPS_NO_MODS'					=> 'Não foi seleccionado um Líder para o Grupo',
	'GROUP_APPROVE'						=> 'Aprovar Membros',
	'GROUP_APPROVED'					=> 'Membros Aprovados',
	'GROUP_AVATAR'						=> 'Avatar do Grupo',
	'GROUP_AVATAR_EXPLAIN'				=> 'Esta imagem será exibida no Painel de Grupos.',
	'GROUP_CLOSED'						=> 'Fechado',
	'GROUP_COLOR'						=> 'Cor do Grupo',
	'GROUP_COLOR_EXPLAIN'				=> 'Seleccione a cor dos Utilizadores do Grupo. Deixe em branco se não deseja activar esta opção.',
	'GROUP_CONFIRM_ADD_USER'			=> 'Tem a certeza de que quer adicionar o Utilizador %1$s para este Grupo?',
	'GROUP_CONFIRM_ADD_USERS'			=> 'Tem a certeza de que quer adicionar os Utilizadors %1$s para este Grupo?',
	'GROUP_CREATED'						=> 'O Grupo seleccionado foi criado com sucesso.',
	'GROUP_DEFAULT'						=> 'Seleccione este como Grupo Padrão para este Utilizador.',
	'GROUP_DEFS_UPDATED'				=> 'Grupo Padrão para os Utilizadores seleccionados.',
	'GROUP_DELETE'						=> 'Apagar Membro do Grupo',
	'GROUP_DELETED'						=> 'Grupo apagado e Utilizadores mudados de Grupo com sucesso.',
	'GROUP_DEMOTE'						=> 'Demitir Líder do Grupo',
	'GROUP_DESC'						=> 'Descrição do Grupo',
	'GROUP_DETAILS'						=> 'Informação do Grupo',
	'GROUP_EDIT_EXPLAIN'				=> 'Aqui pode configurar os Grupos existentes. Alterar o nome (<i>excepto dos Grupos Pré-Definidos, onde o nome não pode ser alterado</i>), descrição e estado (Aberto/Fechado). Também é possível especificar outras opções como a cor, o Rank, etc. As alterações aqui feitas afectarão os Membros do Grupo. De notar que os Membros do Grupo podem alterar os Avatares a não ser que seleccione as Permissões de Utilizadores apropriadas.',
	'GROUP_ERR_USERS_EXIST'				=> 'Os Utilizadores seleccionados já são Membros deste Grupo.',
	'GROUP_FOUNDER_MANAGE'				=> 'Gerir apenas por Fundadores',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'		=> 'Limitar a Gestão deste Grupo aos Administradores Fundadores. Os Utilizadores que possuem as Permissões de Grupo apropriadas, têm autorização para visualizar este Grupo bem como os seus Membros.',
	'GROUP_HIDDEN'						=> 'Invisível',
	'GROUP_LANG'						=> 'Língua do Grupo',
	'GROUP_LEAD'						=> 'Líderes do Grupo',
	'GROUP_LEADERS_ADDED'				=> 'Novos Líderes adicionados com sucesso.',
	'GROUP_LEGEND'						=> 'Exibir o Grupo na Legenda',
	'GROUP_LIST'						=> 'Membros com Direcção Geral',
	'GROUP_LIST_EXPLAIN'				=> 'Esta é uma lista completa de todos os Membros actuais com Direção Geral neste Grupo. Pode apagar Utilizadores (excepto em certos Grupos especiais) ou adicionar novos como pode ver.',
    'GROUP_MAX_RECIPIENTS'				=> 'Limite de destinatários por Mensagem Privada',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'		=> 'Se definido 0, serão usadas as Configurações Gerais do Painel.',

	'GROUP_OPTIONS_SAVE'			=> 'Opções do Grupo alargadas',

	'GROUP_MEMBERS'						=> 'Membros do Grupo',
	'GROUP_MEMBERS_EXPLAIN'				=> 'Esta é uma lista completa dos Membros deste Grupo. Inclui secções separadas para Líderes, pendentes e Membros actuais. Neste Painel pode configurar os gestores deste Grupo e as suas tarefas. Para apagar um Líder sem retirá-lo do Grupo, use a Opção <b>Demitir Líder</b>. Para promover um Membro do Grupo a Líder seleccione <b>Promover Líder</b>.',
	'GROUP_MESSAGE_LIMIT'				=> 'Limite de Mensagens Privadas do Grupo por Pasta',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'		=> 'Esta configuração substitui o limite da pasta de Mensagem por Utilizador. Um valor igual a 0 significa manter as configurações individuais ao Utilizador.',
	'GROUP_MODS_ADDED'					=> 'Os Moderadores do Grupo foram adicionados com sucesso.',
	'GROUP_MODS_DEMOTED'				=> 'Os Líderes seleccionados foram demitidos com sucesso.',
	'GROUP_MODS_PROMOTED'				=> 'Os Membros seleccionados foram promovidos com sucesso.',
	'GROUP_NAME'						=> 'Nome do Grupo',
	'GROUP_NAME_TAKEN'					=> 'O nome do Grupo indicado já está em uso, indique um alternativo.',
	'GROUP_OPEN'						=> 'Aberto',
	'GROUP_PENDING'						=> 'Membros Pendentes',
	'GROUP_PROMOTE'						=> 'Promover a Líder do Grupo',
	'GROUP_RANK'						=> 'Rank do Grupo',
	'GROUP_RECEIVE_PM'					=> 'Grupo autorizado a receber Mensagens Privadas',
	'GROUP_RECEIVE_PM_EXPLAIN'			=> 'Os Grupos ocultos não podem receber mensagens, mesmo seleccionando esta opção.',
	'GROUP_REQUEST'						=> 'Inscrição',
	'GROUP_SETTINGS_SAVE'				=> 'Configurações do Grupo',
	'GROUP_TYPE'						=> 'Estado do Grupo',

	'GROUP_SKIP_AUTH'				=> 'Eximir líder de grupo das permissões',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Caso esteja activo, o líder de grupo deixará de herdar as permissões deste grupo.',

	'GROUP_TYPE_EXPLAIN'				=> 'Isto determina quais os Utilizadores que podem entrar ou ver este Grupo.',
	'GROUP_UPDATED'						=> 'O Grupo foi actualizado com sucesso.',

	'GROUP_USERS_ADDED'					=> 'Novos Utilizadores adicionados ao Grupo com sucesso.',
	'GROUP_USERS_EXIST'					=> 'Os Utilizadores seleccionados já são Membros do Grupo.',
	'GROUP_USERS_REMOVE'				=> 'Os Utilizadores seleccionados foram apagados com sucesso.',

	'MAKE_DEFAULT_FOR_ALL'				=> 'Tornar Grupo Padrão a todos os Utilizadores',
	'MEMBERS'							=> 'Membros',

	'NO_GROUP'							=> 'O Grupo não foi especificado.',
	'NO_GROUPS_CREATED'					=> 'Este Fórum ainda não tem Grupos.',
	'NO_PERMISSIONS'					=> 'Não Copiar Permissões',
	'NO_USERS'							=> 'Não especificou nenhum Utilizador.',
	'NO_USERS_ADDED'					=> 'Não foram adicionados Utilizadores a este Grupo.',
	'NO_VALID_USERS'					=> 'Não entrou com nenhum Utilizador com Permissões para usar esta opção.',

	'SPECIAL_GROUPS'					=> 'Grupos Pré-Definidos',
	'SPECIAL_GROUPS_EXPLAIN'			=> 'São os Grupos Básicos do phpBB. Não podem ser apagados ou modificados.<br > Porém, pode adicionar membros a estes Grupos e modificar as Configurações de cada um dos Grupos.',

	'TOTAL_MEMBERS'						=> 'Membros',

	'USERS_APPROVED'					=> 'Os Utilizadores seleccionados foram aprovados com sucesso.',
	'USER_DEFAULT'						=> 'Utilizador Padrão',
	'USER_DEF_GROUPS'					=> 'Grupos Criados pelo Administrador',
	'USER_DEF_GROUPS_EXPLAIN'			=> 'Pode gerir as Permissões dos Membros destes Grupos. Editar as Configurações ou eliminar o Grupo.',
	'USER_GROUP_DEFAULT'				=> 'Grupo Padrão',
	'USER_GROUP_DEFAULT_EXPLAIN'		=> 'Seleccionando SIM será este o Grupo Padrão dos Utilizadores.',
	'USER_GROUP_LEADER'					=> 'Líder do Grupo',
));

?>