<?php
/**
*
* acp_permissions [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.6
* @package language: Brazilian Portuguese
* @original version $Id: permissions.php,v 1.38 2007/10/08 14:38:26 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-22 - 14:26
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permiss&otilde;es s&atilde;o altamente dependentes e agrupadas dentro de quatro sess&otilde;es majorit&aacute;rias, os quais s&atilde;o:</p>

		<h2>Permiss&otilde;es Globais</h2>
		<p>Estas s&atilde;o usadas para controlar o acesso de um n&iacute;vel global e aplicar a toda a comunidade estas a&ccedil;&otilde;es. Esta permiss&atilde;o &eacute; dividida em Permiss&otilde;es de Usu&aacute;rio, Permiss&otilde;es de Grupos, Administradores e Moderadores Globais.</p>

		<h2>Permiss&otilde;es Baseadas em F&oacute;rum</h2>
		<p>Estas s&atilde;o usadas para controlar o acesso a um F&oacute;rum apenas. Esta permiss&atilde;o &eacute; dividida em Permiss&otilde;es de F&oacute;rum, Moderadores do F&oacute;rum, Permiss&otilde;es de Usu&aacute;rios e Grupos.</p>

		<h2>Permiss&otilde;es de Regra</h2>
		<p>Estas s&atilde;o usadas para criar diferentes tipos de permiss&otilde;es para os tipos diferentes de permiss&otilde;es que mais tarde poder&atilde;o ser criadas em permiss&otilde;es baseadas em regras. As regras padr&atilde;o dever&atilde;o acobertar o administrador da comunidade, o qual poder&aacute; regir a sua regra, adicionando/editando/deletando assim quando julgar necess&aacute;rio.</p>

		<h2>Permiss&otilde;es de M&aacute;scara</h2>
		<p>Estas s&atilde;o usadas para visualizar as permiss&otilde;es efetivas assinadas a Usu&aacute;rios, Moderadores (local ou global), Administradores ou F&oacute;runs.</p>
	
		<br />

		<p>Para futuras informa&ccedil;&otilde;es de defini&ccedil;&atilde;o e gerenciamento de permiss&otilde;es do phpBB3, entre neste link ao lado. <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Cap&iacute;tulo 1.5 do nosso tutorial r&aacute;pido</a>.</p>
	',

	'ACL_NEVER'				=> 'Nunca',
	'ACL_SET'				=> 'Definindo permiss&otilde;es',
	'ACL_SET_EXPLAIN'		=> 'Permiss&otilde;es s&atilde;o baseadas em um simples sistema de <samp>SIM</samp>/<samp>N&Atilde;O</samp>. Definindo uma op&ccedil;&atilde;o como <samp>NUNCA</samp> para um Usu&aacute;rio ou um grupo de Usu&aacute;rios sobrescreve qualquer valor assimilado para isto. Se voc&ecirc; n&atilde;o deseja assimilar um valor para este Usu&aacute;rio ou grupo, selecione <samp>N&Atilde;O</samp>. Se valores s&atilde;o atribu&iacute;dos para esta op&ccedil;&atilde;o ou outra qualquer elas ir&atilde;o ser usadas em prefer&ecirc;ncia, sen&atilde;o <samp>NUNCA</samp> ser&aacute; quem assumir&aacute; de valor. Todos objetos marcados (com um checkbox a sua frente) ir&atilde;o copiar permiss&otilde;es se voc&ecirc; definir.',
	'ACL_SETTING'			=> 'Propriedades',

	'ACL_TYPE_A_'			=> 'Permiss&otilde;es Administrativas',
	'ACL_TYPE_F_'			=> 'Permiss&otilde;es de F&oacute;rum',
	'ACL_TYPE_M_'			=> 'Permiss&otilde;es de Moderador',
	'ACL_TYPE_U_'			=> 'Permiss&otilde;es do Usu&aacute;rio',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permiss&otilde;es Administrativas',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permiss&otilde;es do Usu&aacute;rio',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permiss&otilde;es do Moderador Global',
	'ACL_TYPE_LOCAL_M_'		=> 'Permiss&otilde;es do F&oacute;rum ao Moderador',
	'ACL_TYPE_LOCAL_F_'		=> 'Permiss&otilde;es do F&oacute;rum',
	
	'ACL_NO'				=> 'N&atilde;o',
	'ACL_VIEW'				=> 'Visualizando permiss&otilde;es',
	'ACL_VIEW_EXPLAIN'		=> 'Aqui voc&ecirc; pode ver as permiss&otilde;es efetivas que o Usu&aacute;rio/grupo est&aacute; tendo. Uma marca vermelha indica que Usu&aacute;rio/grupo n&atilde;o tem a permiss&atilde;o, uma marca verde indica que o Usu&aacute;rio/grupo tem permiss&atilde;o para tal coisa.',
	'ACL_YES'				=> 'Sim',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aqui voc&ecirc; pode atribuir permiss&otilde;es de administrador a usu&aacute;rios ou grupos. Todos os usu&aacute;rios com permiss&otilde;es de administrador podem ver o Painel de Controle da Administra&ccedil;&atilde;o.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aqui voc&ecirc; pode nomear os usu&aacute;rios e grupos como moderadores do f&oacute;rum. Para nomear os usu&aacute;rios que t&ecirc;m acesso aos f&oacute;runs, para definir permiss&otilde;es globais moderativas ou administradores, favor utilizar a p&aacute;gina apropriada.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aqui voc&ecirc; pode alterar quais usu&aacute;rios e grupos podem acessar determinados f&oacute;runs. Para nomear moderadores ou definir os administradores, favor utilizar a p&aacute;gina apropriada.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aqui voc&ecirc; pode atribuir permiss&otilde;es de moderador global a usu&aacute;rios ou grupos. Estes moderadores s&atilde;o como moderadores comuns, salvo se eles tiverem acesso a todos os f&oacute;runs em sua comunidade.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui voc&ecirc; pode atribuir permiss&otilde;es de f&oacute;rum a grupos.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aqui voc&ecirc; pode nomear permiss&otilde;es globais a grupos - permiss&otilde;es de usu&aacute;rio, permiss&otilde;es de moderador global e permiss&otilde;es de administrador. As permiss&otilde;es de usu&aacute;rio incluem algumas funcionalidades como o uso de avatares, enviar mensagens privadas, etc. As permiss&otilde;es de moderador global como as de aprovar mensagens, gerenciar t&oacute;picos, gerenciar banimentos, etc., e por &uacute;ltimo as permiss&otilde;es de administrador como a de alterar as permiss&otilde;es, definir BBCodes personalizados, gerenciar f&oacute;runs, etc. As permiss&otilde;es individuais de usu&aacute;rios s&oacute; deveriam ser alteradas em ocasi&otilde;es raras, o melhor m&eacute;todo est&aacute; em adicionar estes usu&aacute;rios em grupos e atribuir as permiss&otilde;es ao grupo.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aqui voc&ecirc; est&aacute; apto a gerenciar as defini&ccedil;&otilde;es para permiss&otilde;es de administradores. Regras s&atilde;o permiss&otilde;es efetivas, se voc&ecirc; mudar uma regra os itens atribu&iacute;dos a estas regras ter&atilde;o suas permiss&otilde;es modificadas juntamente.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aqui voc&ecirc; est&aacute; apto a gerenciar as regras para permiss&otilde;es de F&oacute;rum. Regras s&atilde;o permiss&otilde;es efetivas, se voc&ecirc; mudar uma regra os itens atribu&iacute;dos a estas regras ter&atilde;o suas permiss&otilde;es modificadas juntamente.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aqui voc&ecirc; est&aacute; apto a gerenciar as regras para permiss&otilde;es de Moderador. Regras s&atilde;o permiss&otilde;es efetivas, se voc&ecirc; mudar uma regra os itens atribu&iacute;dos a estas regras ter&atilde;o suas permiss&otilde;es modificadas juntamente.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aqui voc&ecirc; est&aacute; apto a gerenciar as regras para permiss&otilde;es de Usu&aacute;rio. Regras s&atilde;o permiss&otilde;es efetivas, se voc&ecirc; mudar uma regra os itens atribu&iacute;dos a estas regras ter&atilde;o suas permiss&otilde;es modificadas juntamente.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui voc&ecirc; pode assimilar permiss&otilde;es de F&oacute;rum a Usu&aacute;rios.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aqui voc&ecirc; pode assimilar permiss&otilde;es globais para grupos - permiss&otilde;es de Usu&aacute;rios, permiss&otilde;es de Moderador global e permiss&otilde;es Administrativas. Permiss&otilde;es de Usu&aacute;rio incluem capacidades como o uso de avatares, enviando mensagens privadas, etc. Moderadores globais assim como aprovando mensagens, gerenciando t&oacute;picos, gerenciando banimentos, etc e por &uacute;ltimo permiss&otilde;es do administrador assim como alterar permiss&otilde;es, definir BBCodes personalizados, gerenciar f&oacute;runs, enfim, diversas funcionalidades que a ferramenta proporciona. Permiss&otilde;es individuais de Usu&aacute;rio dever&atilde;o ser trocada apenas em ocasi&otilde;es raras, o m&eacute;todo preferido &eacute; colocando Usu&aacute;rios em grupos e definindo a estes grupos as permiss&otilde;es. Deste modo fica muito mais f&aacute;cil gerenciar as permiss&otilde;es de um modo geral.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aqui voc&ecirc; pode visualizar as permiss&otilde;es Administrativas efetivas assimiladas ao grupo/Usu&aacute;rio selecionado.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui voc&ecirc; pode visualizar as permiss&otilde;es Moderadores globais efetivas assimiladas ao grupo/Usu&aacute;rio selecionado.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui voc&ecirc; pode visualizar as permiss&otilde;es de F&oacute;rum efetivas assimiladas ao grupo/Usu&aacute;rio selecionado.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui voc&ecirc; pode visualizar as permiss&otilde;es de Moderadores efetivas assimiladas ao grupo/Usu&aacute;rio selecionado.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aqui voc&ecirc; pode visualizar as permiss&otilde;es de Usu&aacute;rio efetivas assimiladas ao grupo/Usu&aacute;rio selecionado.',

	'ADD_GROUPS'				=> 'Adicionar grupo',
	'ADD_PERMISSIONS'			=> 'Adicionar permiss&otilde;es',
	'ADD_USERS'					=> 'Adicionar Usu&aacute;rios',
	'ADVANCED_PERMISSIONS'		=> 'Permiss&otilde;es avan&ccedil;adas',
	'ALL_GROUPS'				=> 'Selecionar todos os grupos',
	'ALL_NEVER'					=> 'Todos <samp>NUNCA</samp>',
	'ALL_NO'					=> 'Todos <samp>N&Atilde;O</samp>',
	'ALL_USERS'					=> 'Selecionar todos os usu&aacute;rios',
	'ALL_YES'					=> 'Todos <samp>SIM</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Aplicar',
	'APPLY_PERMISSIONS'			=> 'Aplicar permiss&otilde;es',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'As permiss&otilde;es e regras definidas para este item ser&aacute; aplicada somente a este item a todos os outros selecionados.',
	'AUTH_UPDATED'				=> 'Permiss&otilde;es foram atualizadas.',

	'CREATE_ROLE'				=> 'Criar regra',
	'CREATE_ROLE_FROM'			=> 'Usar defini&ccedil;&otilde;es de…',
	'CUSTOM'					=> 'Personalizada…',

	'DEFAULT'					=> 'Padr&atilde;o',
	'DELETE_ROLE'				=> 'Remover regra',
	'DELETE_ROLE_CONFIRM'		=> 'Voc&ecirc; tem certeza que deseja remover esta regra? Itens tendo esta regra atribu&iacute;da  <strong>n&atilde;o</strong> ter&atilde;o perdido suas propriedades.',
	'DISPLAY_ROLE_ITEMS'		=> 'Visualizar itens usando esta regra',

	'EDIT_PERMISSIONS'			=> 'Editar permiss&otilde;es',
	'EDIT_ROLE'					=> 'Editar regra',

	'GROUPS_NOT_ASSIGNED'		=> 'Nenhum grupo atribu&iacute;do para esta regra',

	'LOOK_UP_GROUP'				=> 'Visualizar grupo de Usu&aacute;rio',
	'LOOK_UP_USER'				=> 'Visualizar Usu&aacute;rio',

	'MANAGE_GROUPS'		=> 'Gerenciar grupos',
	'MANAGE_USERS'		=> 'Gerenciar Usu&aacute;rios',

	'NO_AUTH_SETTING_FOUND'		=> 'Propriedades das permiss&otilde;es n&atilde;o definidas.',
	'NO_ROLE_ASSIGNED'			=> 'Nenhuma regra assimilada…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Propriedades para esta regra n&atilde;o mudam as permiss&otilde;es na direita. Se voc&ecirc; quer desabilitar/remover todas as permiss&otilde;es voc&ecirc; dever&aacute; usar o “Todos <samp>N&Atilde;O</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nenhuma regra dispon&iacute;vel',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Determine um nome a regra.',
	'NO_ROLE_SELECTED'			=> 'Regra n&atilde;o p&ocirc;de ser encontrada.',
	'NO_USER_GROUP_SELECTED'	=> 'Voc&ecirc; n&atilde;o selecionou nenhum Usu&aacute;rio ou grupo.',

	'ONLY_FORUM_DEFINED'	=> 'Apenas f&oacute;runs definidos em sua sele&ccedil;&atilde;o. Tamb&eacute;m selecione pelo menos um Usu&aacute;rio ou grupo.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permiss&otilde;es e regras tamb&eacute;m ser&atilde;o aplicadas a todos itens selecionados',
	'PLUS_SUBFORUMS'				=> '+ Sub-f&oacute;runs',

	'REMOVE_PERMISSIONS'			=> 'Remover permiss&otilde;es',
	'REMOVE_ROLE'					=> 'Remover regra',
	'RESULTING_PERMISSION'			=> 'Permiss&atilde;o resultante',
	'ROLE'							=> 'Regra',
	'ROLE_ADD_SUCCESS'				=> 'Regra adicionada com sucesso.',
	'ROLE_ASSIGNED_TO'				=> 'Usu&aacute;rio/grupos assinados a %s',
	'ROLE_DELETED'					=> 'Regra removida com sucesso.',
	'ROLE_DESCRIPTION'				=> 'Descrição da regra',

	'ROLE_ADMIN_FORUM'			=> 'Administra&ccedil;&atilde;o de F&oacute;runs',
	'ROLE_ADMIN_FULL'			=> 'Administra&ccedil;&atilde;o Completa',
	'ROLE_ADMIN_STANDARD'		=> 'Administra&ccedil;&atilde;o Padr&atilde;o',
	'ROLE_ADMIN_USERGROUP'		=> 'Administra&ccedil;&atilde;o de Usu&aacute;rios e Grupos',
	'ROLE_FORUM_BOT'			=> 'Acesso de Rob&ocirc;s (BOT)',
	'ROLE_FORUM_FULL'			=> 'Acesso Total',
	'ROLE_FORUM_LIMITED'		=> 'Acesso Limitado',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acesso Limitado + Enquetes',
	'ROLE_FORUM_NOACCESS'		=> 'Sem acesso',
	'ROLE_FORUM_ONQUEUE'		=> 'Na Lista de Modera&ccedil;&atilde;o',
	'ROLE_FORUM_POLLS'			=> 'Acesso Padr&atilde;o + Enquetes',
	'ROLE_FORUM_READONLY'		=> 'Acesso de Leitura Apenas',
	'ROLE_FORUM_STANDARD'		=> 'Acesso Padr&atilde;o',
	'ROLE_MOD_FULL'				=> 'Moderador Completo',
	'ROLE_MOD_QUEUE'			=> 'Moderador da Lista de Aprova&ccedil;&atilde;o',
	'ROLE_MOD_SIMPLE'			=> 'Moderador Simples',
	'ROLE_MOD_STANDARD'			=> 'Moderador Padr&atilde;o',
	'ROLE_USER_FULL'			=> 'Todas as Op&ccedil;&otilde;es',
	'ROLE_USER_LIMITED'			=> 'Op&ccedil;&otilde;es Limitadas',
	'ROLE_USER_NOAVATAR'		=> 'Sem Avatar',
	'ROLE_USER_NOPM'			=> 'Sem Mensagens Privadas',
	'ROLE_USER_STANDARD'		=> 'Op&ccedil;&otilde;es Padr&atilde;o',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Pode acessar a ger&ecirc;ncia do f&oacute;rum e propriedades das permiss&otilde;es do f&oacute;rum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Tem acesso a todas as fun&ccedil;&otilde;es administrativas nesta comunidade.<br />N&atilde;o recomendamos.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Tem acesso a maioria das ferramentas administrativas, mas n&atilde;o &eacute; permitido usar ferramentas do servidor e relacionadas.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Pode gerenciar grupos e usu&aacute;rios: Apto a trocar permiss&otilde;es, defini&ccedil;&otilde;es, gerenciar puni&ccedil;&otilde;es e gerenciar ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Esta regra &eacute; recomendada para rob&ocirc;s e sistemas de busca.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pode usar todas as ferramentas do f&oacute;rum, incluindo postar fixos e an&uacute;ncios. Pode tamb&eacute;m ignorar o limite do flood.<br /> N&atilde;o &eacute; recomendado para usu&aacute;rios normais.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pode usar algumas op&ccedil;&otilde;es do f&oacute;rum, mas n&atilde;o pode anexar ou utilizar de &iacute;cones de t&oacute;picos.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Igual ao Acesso Limitado, mas pode criar enquetes.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'N&atilde;o pode ver ou acessar o f&oacute;rum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pode usar a maioria das op&ccedil;&otilde;es do f&oacute;rum incluindo anexos, mas mensagens e t&oacute;picos precisam ser aprovadas por um moderador.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Igual ao Acesso Padr&atilde;o, mas pode criar enquetes.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pode ler o f&oacute;rum, mas n&atilde;o pode criar novos t&oacute;picos ou responder t&oacute;picos.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pode usar a maioria das op&ccedil;&otilde;es do f&oacute;rum incluindo anexos e excluir pr&oacute;prias mensagens, mas n&atilde;o pode bloquear pr&oacute;prios t&oacute;picos, e n&atilde;o pode criar enquetes.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pode usar todas op&ccedil;&otilde;es da modera&ccedil;&atilde;o, incluindo op&ccedil;&otilde;es para banir.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pode usar o campo de modera&ccedil;&atilde;o para validar ou editar mensagens, por&eacute;m nada mais que isso ser&aacute; permitido.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Pode usar apenas op&ccedil;&otilde;es b&aacute;sicas de t&oacute;picos. N&atilde;o pode enviar avisos ou usar a lista de aprova&ccedil;&atilde;o dos moderadores.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pode usar maioria das ferramentas da modera&ccedil;&atilde;o, mas n&atilde;o pode banir usu&aacute;rios ou mudar o autor do t&oacute;pico.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pode usar todas as op&ccedil;&otilde;es dispon&iacute;veis para usu&aacute;rios, incluindo trocar o nome de usu&aacute;rio ou ignorar o controle de flood.<br />N&atilde;o recomendado.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pode acessar algumas op&ccedil;&otilde;es do usu&aacute;rio. Anexos, e-mails, ou mensagens instant&acirc;neas n&atilde;o s&atilde;o permitidas.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Tem um limite de op&ccedil;&otilde;es e n&atilde;o &eacute; permitido usar avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Tem um limite de op&ccedil;&otilde;es, e n&atilde;o &eacute; permitido usar mensagens privadas.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pode acessar a maioria, mas nem todas as op&ccedil;&otilde;es de usu&aacute;rio. N&atilde;o pode mudar o nome de usu&aacute;rio ou ignorar o controle de flood.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Voc&ecirc; est&aacute; apto a entrar uma pequena explica&ccedil;&atilde;o do que a regra est&aacute; fazendo ou para o que ela significa. O texto que voc&ecirc; entrar aqui ser&aacute; mostrado na tela de permiss&otilde;es tamb&eacute;m.',
	'ROLE_DESCRIPTION_LONG'			=> 'A descri&ccedil;&atilde;o da regra &eacute; muito longa, limite de 4 mil caracteres.',
	'ROLE_DETAILS'					=> 'Detalhes da regra',
	'ROLE_EDIT_SUCCESS'				=> 'Regra adicionada com sucesso.',
	'ROLE_NAME'						=> 'Nome da regra',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Uma regra com o nome <strong>%s</strong> j&aacute; est&aacute; em uso.',
	'ROLE_NOT_ASSIGNED'				=> 'Regra n&atilde;o foi assinada ainda.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'O F&oacute;rum(s) selecionado n&atilde;o existe.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'O grupo(s) selecionado n&atilde;o existe.',
	'SELECTED_USER_NOT_EXIST'		=> 'O Usu&aacute;rio(s) selecionado n&atilde;o existe.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'O F&oacute;rum que voc&ecirc; selecionou aqui ir&aacute; incluir todos sub-f&oacute;runs nesta sele&ccedil;&atilde;o.',
	'SELECT_ROLE'					=> 'Selecionar regra…',
	'SELECT_TYPE'					=> 'Selecionar tipo',
	'SET_PERMISSIONS'				=> 'Definir permiss&otilde;es',
	'SET_ROLE_PERMISSIONS'			=> 'Definir permiss&otilde;es da regra',
	'SET_USERS_PERMISSIONS'			=> 'Definir permiss&otilde;es do Usu&aacute;rio',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Definir permiss&otilde;es de Usu&aacute;rio no F&oacute;rum',

	'TRACE_DEFAULT'					=> 'Por padr&atilde;o toda permiss&atilde;o &eacute; <samp>N&Atilde;O</samp> (marcado). A permiss&atilde;o pode ser sobrescrita por outras defini&ccedil;&otilde;es.',
	'TRACE_FOR'						=> 'Tra&ccedil;ar para',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'As permiss&otilde;es deste grupo est&aacute; definida em <samp>NUNCA</samp> como resultado total, ent&atilde;o o antigo resultado &eacute; mantido.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'As permiss&otilde;es deste grupo para este f&oacute;rum est&aacute; definida em <samp>NUNCA</samp> como resultado total, ent&atilde;o o antigo resultado &eacute; mantido.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'As permiss&otilde;es deste grupo &eacute; definida para <samp>NUNCA</samp>, o qual se torna o novo valor total porque n&atilde;o foi definido ainda (defina para <samp>N&Atilde;O</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'As permiss&otilde;es deste grupo para este f&oacute;rum est&aacute; definida em <samp>NUNCA</samp>, o qual se torna o novo valor total porque n&atilde;o foi definido ainda (defina para <samp>N&Atilde;O</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'As permiss&otilde;es deste grupo est&atilde;o definidas como <samp>NUNCA</samp>, o que sobrescreve o total de <samp>SIM</samp> para um <samp>NUNCA</samp> para este usu&aacute;rio.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'As permiss&otilde;es deste grupo para este f&oacute;rum est&aacute; definida como <samp>NUNCA</samp>, o que sobrescreve o total de <samp>SIM</samp> para um <samp>NUNCA</samp> para este usu&aacute;rio.',
	'TRACE_GROUP_NO'				=> 'A permiss&atilde;o para este grupo &eacute; <samp>N&Atilde;O</samp>, assim o antigo valor total &eacute; mantido.',
	'TRACE_GROUP_NO_LOCAL'			=> 'A permiss&atilde;o para este grupo dentro deste f&oacute;rum &eacute; <samp>N&Atilde;O</samp>, assim o antigo valor total &eacute; mantido.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'As permiss&otilde;es deste grupo est&atilde;o definidas como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> n&atilde;o pode ser sobrescrito.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'As permiss&otilde;es deste grupo dentro deste f&oacute;rum est&atilde;o definidas como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> n&atilde;o pode ser sobrescrito.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'As permiss&otilde;es deste grupo est&atilde;o definidas como <samp>SIM</samp>, o qual se torna o novo valor total porque n&atilde;o foi definido ainda (defina para <samp>N&Atilde;O</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'As permiss&otilde;es deste grupo dentro deste f&oacute;rum est&atilde;o definidas como <samp>SIM</samp>, o qual se torna o novo valor total porque n&atilde;o foi definido ainda (defina para <samp>N&Atilde;O</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'As permiss&otilde;es deste grupo est&atilde;o definidas como <samp>SIM</samp> e o total de permiss&otilde;es j&aacute; est&aacute; definido como <samp>SIM</samp>, ent&atilde;o o resultado total &eacute; mantido.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'As permiss&otilde;es deste grupo dentro deste f&oacute;rum est&atilde;o definidas como <samp>SIM</samp> e o total de permiss&otilde;es j&aacute; est&aacute; definido como <samp>SIM</samp>, ent&atilde;o o resultado total &eacute; mantido.',
	'TRACE_PERMISSION'				=> 'Tra&ccedil;ar permiss&atilde;o - %s',
	'TRACE_RESULT'					=> 'Tra&ccedil;ar resultado',
	'TRACE_SETTING'					=> 'Tra&ccedil;ar propriedades',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'A permiss&atilde;o independente de usu&aacute;rio em f&oacute;rum valer&aacute; como <samp>SIM</samp>, mas a permiss&atilde;o local est&aacute; definida como <samp>SIM</samp>, ent&atilde;o o resultado total &eacute; mantido. %sTra&ccedil;ar permiss&atilde;o global%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'A permiss&atilde;o independente de usu&aacute;rio em f&oacute;rum valer&aacute; como <samp>SIM</samp> o qual sobrescreve o resultado local <samp>NUNCA</samp>. %sTra&ccedil;ar permiss&atilde;o global%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'A permiss&atilde;o independente de usu&aacute;rio em f&oacute;rum valer&aacute; como <samp>NUNCA</samp> o qual n&atilde;o influ&ecirc;ncia na permiss&atilde;o local. %sTra&ccedil;ar permiss&atilde;o global%s',

	'TRACE_USER_FOUNDER'					=> 'O Usu&aacute;rio est&aacute; definido como fundador, entretanto permiss&otilde;es de administrador est&atilde;o definidas como <samp>SIM</samp> por padr&atilde;o.',
	'TRACE_USER_KEPT'						=> 'A permiss&atilde;o de usu&aacute;rios &eacute; <samp>N&Atilde;O</samp>, ent&atilde;o o valor total &eacute; mantido.',
	'TRACE_USER_KEPT_LOCAL'					=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum &eacute; <samp>N&Atilde;O</samp>, ent&atilde;o o valor total &eacute; mantido.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>NUNCA</samp> e o valor total &eacute; definido para <samp>NUNCA</samp>, ent&atilde;o nada &eacute; alterado.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>NUNCA</samp> e o valor total est&aacute; definido como <samp>NUNCA</samp>, ent&atilde;o nada &eacute; alterado.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>NUNCA</samp>, o qual se torna o valor total porque estava definido como N&Atilde;O.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>NUNCA</samp>, o qual se torna o valor total porque estava definido como N&Atilde;O.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>NUNCA</samp> e sobrescreve o anterior <samp>SIM</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>NUNCA</samp> e sobrescreve o anterior <samp>SIM</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>N&Atilde;O</samp> e o valor total &eacute; definido para N&Atilde;O, ent&atilde;o este torna-se como padr&atilde;o <samp>NUNCA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>N&Atilde;O</samp> e o valor total &eacute; definido para N&Atilde;O, ent&atilde;o este torna-se como padr&atilde;o <samp>NUNCA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> n&atilde;o pode ser sobrescrito.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> n&atilde;o pode ser sobrescrito.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>SIM</samp>, o qual se torna o valor total porque estava definido como <samp>N&Atilde;O</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>SIM</samp>, o qual se torna o valor total porque estava definido como <samp>N&Atilde;O</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'A permiss&atilde;o de usu&aacute;rios est&aacute; definida como <samp>SIM</samp> e o valor total est&aacute; definido como <samp>SIM</samp>, ent&atilde;o nada foi trocado.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'A permiss&atilde;o de usu&aacute;rios para este f&oacute;rum est&atilde;o definidas como <samp>SIM</samp> e o valor total est&aacute; definido como <samp>SIM</samp>, ent&atilde;o nada &eacute; alterado.',
	'TRACE_WHO'								=> 'Quem',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Nenhum Usu&aacute;rio atribu&iacute;do a esta regra',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '&eacute; um membro dos seguintes grupos pr&eacute;-definidos',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '&eacute; um membro usu&aacute;rio dos seguintes grupos definidos',

	'VIEW_ASSIGNED_ITEMS'	=> 'Ver itens atribu&iacute;dos',
	'VIEW_LOCAL_PERMS'		=> 'Permiss&otilde;es locais',
	'VIEW_GLOBAL_PERMS'		=> 'Permiss&otilde;es globais',
	'VIEW_PERMISSIONS'		=> 'Ver permiss&otilde;es',

	'WRONG_PERMISSION_TYPE'				=> 'Tipo de permiss&atilde;o selecionada errada.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'As configura&ccedil;&otilde;es de permiss&atilde;o est&atilde;o em um formato errado, o phpBB n&atilde;o os pode processar corretamente.',
));

?>
