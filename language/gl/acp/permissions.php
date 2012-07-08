<?php
/** 
*
* acp_permissions [Galician]
*
* @package language
* @version $Id: permissions.php 10017 2009-08-18 14:37:49Z bantu $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Os permisos poden ser definidos moi polo miúdo e agrúpanse de xeito xeral en catro grandes seccións:</p>

		<h2>Permisos Globais</h2>
		<p>Estes permisos empréganse para controlar o acceso a nivel global e aplícanse a todo o taboleiro de mensaxes. Divídense máis en detalle en Permisos de Usuarios, Permisos de Grupos, Administradores e Moderadores Globais.</p>

		<h2>Permisos Dependentes do Foro</h2>
		<p>Empréganse para controlar o acceso básico foro por foro. Divídense en Permisos de Foro, Moderadores de Foro, Permisos de Usuarios de Foro e Permisos de Grupos de Foro.</p>

		<h2>Roles de Permisos</h2>
		<p>Os roles empréganse para crear diferentes xogos de permisos para os diferentes tipos deles dispoñibles, que máis tarde poden ser asignados a unha definición baseada nun rol. Os roles predeterminados poden cubrir a administración de pequenos e grandes taboleiros de mensaxes, mesmo dentro de cada unha das catro divisións, podes engadir/editar/eliminar roles de xeito que resposten ás túas necesidades.</p>

		<h2>Máscaras de Permisos</h2>
		<p>As máscaras empréganse para ver os permisos efectivos asignados aos Usuarios, Moderadores (Locais e Globais), Administradores ou Foros.</p>
	
		<br />

		<p>Para obter máis información verbo da configuración e xestión de permisos do teu taboleiro phpBB3, podes botar un ollo ao <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capítulo 1.5 da nosa Guía de Comezo Rápido</a>.</p>
	',

	'ACL_NEVER'				=> 'Endexamáis',
	'ACL_SET'				=> 'Permisos de configuración',
	'ACL_SET_EXPLAIN'		=> 'Os permisos están baseados nun sistema simple <samp>SI</samp>/<samp>NON</samp>. Fixar unha opción <samp>NUNCA</samp> para un usuario ou grupo de usuarios anula calquera outro valor asignado. Se non desexas asignar un valor para unha opción deste usuario ou grupo escolle <samp>NON</samp>. Se hai valores asignados nalgures para esta opción serán usados de forma preferente, noutro caso asúmese <samp>NUNCA</samp>. Todos os obxectos marcados (coa caixa de verificación en fronte) copiarán a configuración de autorizacións definida.',
	'ACL_SETTING'			=> 'Axuste',

	'ACL_TYPE_A_'			=> 'Permisos de administración',
	'ACL_TYPE_F_'			=> 'Permisos dos Foros',
	'ACL_TYPE_M_'			=> 'Permisos de moderación.',
	'ACL_TYPE_U_'			=> 'Permisos de usuario',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permisos de administración',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permisos de usuario',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permisos de moderador global',
	'ACL_TYPE_LOCAL_M_'		=> 'Permisos de moderador de foro',
	'ACL_TYPE_LOCAL_F_'		=> 'Permisos dos Foros',
	
	'ACL_NO'				=> 'Non',
	'ACL_VIEW'				=> 'Visualizando os permisos',
	'ACL_VIEW_EXPLAIN'		=> 'Aquí podes ver os permisos que teñen usuario/grupo. Un cadrado vermello indica que o usuario/grupo non ten autorización, un cadrado verde indica que o usuario/grupo ten autorización.',
	'ACL_YES'				=> 'Si',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aquí podes asignar dereitos de administración a usuarios ou grupos. Todos os usuarios con permisos de administración poden ver o panel de administración.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aquí podes asignar usuarios e grupos como moderadores de foro. Para asignar accesos de usuarios aos foros, definir dereitos moderadores globais ou de administración usa a páxina axeitada.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aquí podes cambiar que usuarios e grupos acceden a que foros. Para asignar moderadores ou definir administradores por favor usa a páxina axeitada.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Aquí podes copiar os permisos dun un foro para outro ou varios outros.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aquí podes asignar dereitos de moderador global a usuarios ou grupos. Estos moderadores son de tipo ordinario agás que teñen acceso a todos os foros do taboleiro.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aquí podes asignar permisos de foro a grupos.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aquí podes asignar permisos globais a grupos - permisos de usuario, permisos de moderador global e permisos de administrador. Os permisos de usuario inclúen capacidades como o uso de representacións dixitais(avatares), envío de mensaxes privadas, etc. Os permisos de moderador global son permisos administrativos. Os permisos de usuarios individuais só deben ser cambiados en contadas ocasións, o método preferíbel é poñer aos usuarios en grupos e asignar permisos de grupo.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aquí podes xestionar os roles para os permisos administrativos. Os roles son permisos efectivos, se mudas un rol os elementos que o teñan asignado mudarán tamén os seus permisos.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aquí podes xestionar os roles para os permisos dos foros. Os roles son permisos efectivos, se mudas un rol os elementos que o teñan asignado mudarán tamén os seus permisos.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aquí podes xestionar os roles para os permisos de moderación. Os roles son permisos efectivos, se mudas un rol os elementos que o teñan asignado mudarán tamén os seus permisos.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aquí podes xestionar os roles para os permisos de usuario. Os roles son permisos efectivos, se mudas un rol os elementos que o teñan asignado mudarán tamén os seus permisos.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aquí podes asignar permisos de foro aos usuarios.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aquí podes asignar permisos globais aos usuarios - permisos de usuario, permisos de moderador global e permisos de administración. Os permisos de usuario inclúen capacidades como o uso de representacións dixitais (avatares), envío de mensaxes privadas, etc. Os permisos de moderador global son permisos administrativos. Para alterar esta configuración para un grande número de usuarios o sistema de permisos de grupo é o método preferible. Os permisos de usuario deberían ser cambiados en contadas ocasións, o método preferíbel é colocar aos usuarios en grupos e asignar permisos de grupo.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aquí podes visualizar os permisos administrativos asignados aos usuarios/grupos seleccionados.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aquí podes visualizar os permisos moderadores globais asignados a usuarios/grupos.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aquí podes visualizar os permisos de foro asignados a usuarios, grupos e foros seleccionados.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aquí podes visualizar os permisos de moderador de foro asignados a usuarios, grupos e foros seleccionados.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aquí podes visualizar os permisos de usuario asignados a usuarios e grupos seleccionados.',

	'ADD_GROUPS'				=> 'Engadir grupos',
	'ADD_PERMISSIONS'			=> 'Engadir permisos',
	'ADD_USERS'					=> 'Engadir Usuarios',
	'ADVANCED_PERMISSIONS'		=> 'Permisos Avanzados',
	'ALL_GROUPS'				=> 'Seleccionar tódolos grupos',
	'ALL_NEVER'					=> 'Todos <samp>NUNCA</samp>',
	'ALL_NO'					=> 'Todos <samp>NON</samp>',
	'ALL_USERS'					=> 'Seleccionar a todos os usuarios',
	'ALL_YES'					=> 'Todos <samp>SI</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Aplicar tódolos permisos',
	'APPLY_PERMISSIONS'			=> 'Aplicar permisos',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Os permisos e roles definidos para este elemento só serán aplicados a este elemento e a todos os elementos marcados.',
	'AUTH_UPDATED'				=> 'Os permisos foron actualizados',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Estás certo de quereres levar a cabo esta operación? Ten en conta que isto irá sobreescribir calquera permiso existente nos obxectivos seleccionados.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'O foro de orixe do que queres copiar os permisos.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Os foros de destino aos que queres aplicar os permisos copiados.',
	'COPY_PERMISSIONS_FROM'					=> 'Copiar permisos de',
	'COPY_PERMISSIONS_TO'					=> 'Aplicar permisos a',

	'CREATE_ROLE'				=> 'Crear rol',
	'CREATE_ROLE_FROM'			=> 'Usar as configuracións de.',
	'CUSTOM'					=> 'Á medida...',

	'DEFAULT'					=> 'Predeterminado',
	'DELETE_ROLE'				=> 'Eliminar rol',
	'DELETE_ROLE_CONFIRM'		=> 'Estás seguro de querer eliminar este rol? Os elementos que teñan este rol asignado<strong>non</strong> perderán as súas configuracións de permisos.',
	'DISPLAY_ROLE_ITEMS'		=> 'Ver os elementos que usan este rol',

	'EDIT_PERMISSIONS'			=> 'Editar permisos',
	'EDIT_ROLE'					=> 'Editar o rol',

	'GROUPS_NOT_ASSIGNED'		=> 'Non hai grupos con este rol',

	'LOOK_UP_GROUP'				=> 'Procurar grupo de usuarios',
	'LOOK_UP_USER'				=> 'Procurar usuario',

	'MANAGE_GROUPS'		=> 'Xestionar grupos',
	'MANAGE_USERS'		=> 'Administrar Usuarios',

	'NO_AUTH_SETTING_FOUND'		=> 'Configuración de permisos non definida.',
	'NO_ROLE_ASSIGNED'			=> 'Non se asignou ningún rol.',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'A configuración deste rol non cambia os permisos da dereita. Se queres desconfigurar/eliminar todos os permisos deberías usar a ligazón "Todos <samp>NON</samp>" ',
	'NO_ROLE_AVAILABLE'			=> 'Ningún rol dispoñible',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Por favor dálle un nome ao rol',
	'NO_ROLE_SELECTED'			=> 'O rol pode non ser atopado',
	'NO_USER_GROUP_SELECTED'	=> 'You haven\'t selected any user or group.',

	'ONLY_FORUM_DEFINED'	=> 'Só escolliches foros na túa selección. Por favor escolle tamén polo menos un usuario ou grupo.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Os permisos e rol serán tamén aplicados a todos os obxectos marcados.',
	'PLUS_SUBFORUMS'				=> '+Subforos',

	'REMOVE_PERMISSIONS'			=> 'Eliminar os permisos',
	'REMOVE_ROLE'					=> 'Eliminar o rol',
	'RESULTING_PERMISSION'			=> 'Permiso resultante',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol engadido correctamente',
	'ROLE_ASSIGNED_TO'				=> 'Usuarios/Grupos asignados a %s',
	'ROLE_DELETED'					=> 'Rol eliminado correctamente',
	'ROLE_DESCRIPTION'				=> 'Descrición do rol',

	'ROLE_ADMIN_FORUM'			=> 'Administrador do Foro',
	'ROLE_ADMIN_FULL'			=> 'Administrador Absoluto',
	'ROLE_ADMIN_STANDARD'		=> 'Administrador Estándar',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrador de Usuarios e Grupos',
	'ROLE_FORUM_BOT'			=> 'Acceso de Bot',
	'ROLE_FORUM_FULL'			=> 'Acceso Completo',
	'ROLE_FORUM_LIMITED'		=> 'Acceso Limitado',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acceso Limitado + Enquisas',
	'ROLE_FORUM_NOACCESS'		=> 'Sen Acceso',
	'ROLE_FORUM_ONQUEUE'		=> 'Na Cola de Moderación',
	'ROLE_FORUM_POLLS'			=> 'Acceso Estándar + Enquisas',
	'ROLE_FORUM_READONLY'		=> 'Acceso de Lectura Únicamente',
	'ROLE_FORUM_STANDARD'		=> 'Acceso Estándar',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Usuario Recentemente Rexistrado',
	'ROLE_MOD_FULL'				=> 'Moderador Absoluto',
	'ROLE_MOD_QUEUE'			=> 'Moderador de Cola',
	'ROLE_MOD_SIMPLE'			=> 'Moderador Simple',
	'ROLE_MOD_STANDARD'			=> 'Moderador Estándar',
	'ROLE_USER_FULL'			=> 'Todas as Características',
	'ROLE_USER_LIMITED'			=> 'Características Limitadas',
	'ROLE_USER_NOAVATAR'		=> 'Sen Avatar',
	'ROLE_USER_NOPM'			=> 'Sen Mensaxes Privadas',
	'ROLE_USER_STANDARD'		=> 'Características Estándar',
	'ROLE_USER_NEW_MEMBER'		=> 'Usuario Recentemente Rexistrado',


	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Pode acceder á xestión do foro e ás configuracións de permisos do foro.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Ten acceso a todas as funcións administrativas deste foro.<br />Non recomendada.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Ten acceso á maior parte das posibilidades de administrador mais non lle esta permitido o uso de ferramentas de servidor ou relacionadas co sistema.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Poder xestionar grupos e usuarios: permite cambiar permisos, configuracións, xestión de bloqueos e xestión de rangos.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Este rol é recomendado para bots e arañas de procura.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pode usar todas as características do foro, incluído o envío de comunicados e notas. Pode tamén ignorar o límite de fluxo.<br />Non recomendado para usuarios normais.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pode usar algunhas características do foro, pero non pode adxuntar ficheiros nen enviar mensaxes con iconas.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Como para acceso limitado pero pode crear enquisas.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Non pode nin ver nin acceder ao foro.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pode usar moitas características do foro incluídos anexos, pero mensaxes e temas necesitan ser aprobados por un moderador.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Igual que en acceso básico pero pode crear enquisas.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pode ler o foro, pero non pode crear temas novos ou replicar comentarios.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pode usar moitas das características do foro incluídos anexos, pero non pode bloquear ou eliminar temas propios e non pode crear enquisas.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Un rol para os membros do grupo especial de usuarios recentemente rexistrados; contén permisos <samp>NUNCA</samp> para bloquear características para os novos usuarios.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pode usar todas as características do moderador, incluído o bloqueo(banning).',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pode usar a cola de moderación para validar e editar comentarios, pero nada máis.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Pode usar só accións básicas de tema. Non pode enviar avisos nen usar a cola de moderación.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pode usar moitas ferramentas de moderación, pero non pode bloquear usuarios nen cambiar o autor da mensaxe.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pode utilizar todas as características do foro de usuarios, incluídas cambiar o nome do usuario ou ignorar o límite de fluxo.<br />Non recomendada.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pode acceder a algunhas características do usuario. Anexos, e-mails ou mensaxería instantánea están restrinxidos.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ten un grupo de características limitadas e non se lle permite usar a caracteristica de representación dixital(avatar).',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ten un grupo limitado de características e non se lle permite usar mensaxes privadas.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pode acceder á maior parte das características do usuario. Pero por exemplo non pode cambiar o nome de usuario nin ignorar o límite de fluxo.',
		'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Un rol para os membros do grupo especial de usuarios recentemente rexistrados; contén permisos <samp>NUNCA</samp> para bloquear características para os novos usuarios.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Podes introducir unha curta explicación do que o rol  está a facer ou do que significa. O texto que introduzas aquí visualizarase tamén nas pantallas de permisos.',
	'ROLE_DESCRIPTION_LONG'			=> 'A descrición do rol é longa de máis, por favor, limítaa a 4000 caracteres.',
	'ROLE_DETAILS'					=> 'Detalles do rol',
	'ROLE_EDIT_SUCCESS'				=> 'Rol editado correctamente',
	'ROLE_NAME'						=> 'Nome do rol',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Un rol chamado <strong>%s</strong> xa existe para o tipo de permiso especificado.',
	'ROLE_NOT_ASSIGNED'				=> 'Este rol non foi asignado aínda.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'O(s) foro(s) seleccionado(s) non existe(n).',
	'SELECTED_GROUP_NOT_EXIST'		=> 'O(s) grupo(s) seleccionado(s) non existe(n).',
	'SELECTED_USER_NOT_EXIST'		=> 'O(s) usuario(s) seleccionado(s) non existe(n).',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'O foro que seleccionaches aquí incluirá tódolos subforos na selección.',
	'SELECT_ROLE'					=> 'Escolle rol.',
	'SELECT_TYPE'					=> 'Selecciona tipo',
	'SET_PERMISSIONS'				=> 'Estabelecer permisos',
	'SET_ROLE_PERMISSIONS'			=> 'Configurar permisos de rol',
	'SET_USERS_PERMISSIONS'			=> 'Configurar permisos de usuario',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Configurar permisos dos usuarios para o foro',

	'TRACE_DEFAULT'					=> 'Todos os permisos predefinidos son <samp>NON</samp>  (sen configurar). Polo tanto o permiso pode ser substituído por outras configuracións.',
	'TRACE_FOR'						=> 'Rastrexar',
	'TRACE_GLOBAL_SETTING'			=> '%s (total)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'O permiso deste grupo está estabelecido a <samp>NUNCA</samp> como o resultado total polo que se manterá o resultado antigo.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'O permiso deste grupo para este foro está estabelecido a <samp>NUNCA</samp> como o resultado total polo que se manterá o resultado antigo.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'O permiso deste grupo está estabelecido a <samp>NUNCA</samp> que será o novo valor total xa que aínda non foi definido (configurado a <samp>NON</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'O permiso deste grupo para este foro está estabelecido a <samp>NUNCA</samp> que será o novo valor total xa que aínda non foi definido (configurado a <samp>NON</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'O permiso deste grupo está estabelecido a <samp>NUNCA</samp> que sobreescribirá o total <samp>SI</samp> por <samp>NUNCA</samp> para este usuario.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'O permiso deste grupo para este foro está estabelecido a <samp>NUNCA</samp> que sobreescribirá o total <samp>SI</samp> por <samp>NUNCA</samp> para este usuario.',
	'TRACE_GROUP_NO'				=> 'O permiso para este grupo está estabelecido a <samp>NON</samp> polo que se manterá o valor antigo total.',
	'TRACE_GROUP_NO_LOCAL'				=> 'O permiso para este grupo neste foro está estabelecido a <samp>NON</samp> polo que se manterá o valor antigo total.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'O permiso para este grupo está estabelecido a <samp>SI</samp> pero non pode sobreescribirse o total <samp>NUNCA</samp>.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'O permiso para este grupo neste foro está estabelecido a <samp>SI</samp> pero non pode sobreescribirse o total <samp>NUNCA</samp>.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'O permiso deste grupo está estabelecido a <samp>SI</samp> que será o novo valor total xa que aínda non foi definido (configurado a <samp>NON</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'O permiso deste grupo para este foro está estabelecido a <samp>SI</samp> que será o novo valor total xa que aínda non foi definido (configurado a <samp>NON</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'O permiso deste grupo está estabelecido a <samp>SI</samp> e o permiso total está xa configurado a <samp>SI</samp>, polo que se manterá o resultado total.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'O permiso deste grupo para este foro está estabelecido a <samp>SI</samp> e o permiso total está xa configurado a <samp>SI</samp>, polo que se manterá o resultado total.',
	'TRACE_PERMISSION'				=> 'Permiso de trazado - %s',
	'TRACE_RESULT'					=> 'Resultado do trazado',
	'TRACE_SETTING'					=> 'Configuración de trazado',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'O permiso independente de usuario do foro avalíase como <samp>SI</samp> pero o permiso total xa estaba fixado en <samp>SI</samp>, polo que o resultado total mantense.%sRastrear permisos globais%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'O permiso independente de usuario do foro avalíase como <samp>SI</samp>, o que sobreescribe o resultado local actual <samp>NUNCA</samp>. %sRastrear permisos globais%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'O permiso independente de usuario do foro avalíase como <samp>NUNCA</samp>, o cal non inflúe no permiso local. %sRastrear permisos globais%s',

	'TRACE_USER_FOUNDER'					=> 'O usuario é un fundador, polo que os seus permisos de administración están sempre axustados como <samp>SI</samp>.',
	'TRACE_USER_KEPT'						=> 'O permiso de usuario é <samp>NON</samp> polo que se mantén o valor total antigo.',
	'TRACE_USER_KEPT_LOCAL'					=> 'O permiso de usuario para este foro é <samp>NON</samp> polo que se manterá o valor total.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'O permiso de usuario está configurado como <samp>NUNCA</samp> e o valor total está establecido como <samp>NUNCA</samp>, polo que non hai trocos.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'			=> 'O permiso de usuario para este foro está configurado como <samp>NUNCA</samp> e o valor total está establecido como <samp>NUNCA</samp>, polo que non hai trocos.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'O permiso de usuario está fixado como <samp>NUNCA</samp> que se converte no valor total que estaba fixado como NON.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'				=> 'O permiso de usuario para este foro está fixado como <samp>NUNCA</samp> que se converte no valor total que estaba fixado como NON.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'O permiso do usuario está configurado como <samp>NUNCA</samp> e sobreescribe o <samp>SI</samp> previo.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'			=> 'O permiso do usuario para este foro está configurado como <samp>NUNCA</samp> e sobreescribe o <samp>SI</samp> previo.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'O permiso do usuario é <samp>NON</samp> e o valor total fora configurado como NON polo que por defecto queda en <samp>NUNCA</samp>',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'				=> 'O permiso do usuario para este foro é <samp>NON</samp> e o valor total fora configurado como NON polo que por defecto queda en <samp>NUNCA</samp>',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'O permiso para o usuario é <samp>SI</samp> pero o total <samp>NUNCA</samp> non se pode substituír.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'			=> 'O permiso do usuario para este foro é <samp>SI</samp> pero o total <samp>NUNCA</samp> non se pode substituír.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'O permiso do usuario foi configurado como <samp>SI</samp>, que se converte no valor total xa que fora configurado como <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'				=> 'O permiso do usuario para este foro foi configurado como <samp>SI</samp>, que se converte no valor total xa que fora configurado como <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'O permiso do usuario foi configurado como <samp>SI</samp> e o valor total queda configurado como <samp>SI</samp>, polo que non hai trocos.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'				=> 'O permiso do usuario para este foro foi configurado como <samp>SI</samp> e o valor total queda configurado como <samp>SI</samp>, polo que non hai trocos.',
	'TRACE_WHO'								=> 'Quen',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Ningún usuario asignado a este rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'é un membro dos seguintes grupos predeterminados',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'é un membro dos seguintes grupos personalizados',

	'VIEW_ASSIGNED_ITEMS'	=> 'Ver elementos asignados',
	'VIEW_LOCAL_PERMS'		=> 'Permisos locais',
	'VIEW_GLOBAL_PERMS'		=> 'Permisos globais',
	'VIEW_PERMISSIONS'		=> 'Ver permisos',

	'WRONG_PERMISSION_TYPE'	=> 'Seleccionouse un tipo de permiso incorrecto.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'A configuración de permisos está nun formato incorrecto, polo que o phpBB non é quen de proxesalo axeitadamente.',
));

?>