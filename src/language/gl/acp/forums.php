<?php
/** 
*
* acp_forums [Galician]
*
* @package language
* @version $Id: forums.php 9896 2009-07-31 12:46:15Z Kellanved $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Idade da mensaxe para o auto-purgado',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de días dende a última mensaxe publicada a partir dos cales o tema é eliminado.',
	'AUTO_PRUNE_FREQ'			=> 'Frecuencia de Auto-purgado',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tempo en días entre eventos de purgado.',
	'AUTO_PRUNE_VIEWED'			=> 'Antigüidade no Auto-purgado de Mensaxes Publicadas Vistas',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Número de días dende que o tema foi visto a partir dos cales é eliminado.',

	'CONTINUE'						=> 'Seguir',
	'COPY_PERMISSIONS'				=> 'Copiar permisos dende',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitarche a configuración de permisos do teu novo foro, podes copiar os que teña algún dos foros existentes.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Unha vez creado, o foro terá os mesmos permisos que ti selecciones aquí. Se non seleccionas ningún foro o novo foro creado non será visíbel até que os permisos sexan configurados.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se ti escolles copiar autorizacións, o foro terá os mesmos permisos que selecciones aquí. Isto sobreescribirase sobre calquer autorización previa para ese foro. Se non hai seleccionado ningún foro os permisos actuais manteranse.',
	'COPY_TO_ACL'					=> 'De xeito alternativo, tamén podes %sconfigurar novos permisos%s para este foro.',
	'CREATE_FORUM'					=> 'Crear un novo foro',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Eliminar contido ou mover ao foro',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Borrar subforos ou mover a foro',
	'DEFAULT_STYLE'						=> 'Estilo por Defecto',
	'DELETE_ALL_POSTS'					=> 'Borrar mensaxes',
	'DELETE_SUBFORUMS'					=> 'Eliminar subforos e mensaxes publicadas',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Habilitar temas activos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Se escolles "Si" os temas activos nos subforos seleccionados serán despregados baixo esta categoría.',

	'EDIT_FORUM'					=> 'Editar foro',
	'ENABLE_INDEXING'				=> 'Habilitar indexado de procura',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se escolles "SI" as mensaxes enviadas a este foro serán indexadas para a pescuda.',
	'ENABLE_POST_REVIEW'			=> 'Permitir revisar mensaxes',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se está en Si os usuarios poderán revisar as súas mensaxes se se publicaron novas mensaxes no tema mentres escribían. Debería desactivarse para foros de chat',
	'ENABLE_QUICK_REPLY'			=> 'Activar resposta rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Se escolleres SI os usuarios verán unha caixa de resposta rápida neste foro. Se a opción global para a resposta rápida estiver desactivada ou o foro non permitise publicar mensaxes, a caixa de resposta rápida non sería amosada, mesmo escollendo SI nesta opción.',
	'ENABLE_RECENT'					=> 'Amosar temas activos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Se escolles "SI" os temas enviados e este foro serán amosados na listaxe de temas activos.',
	'ENABLE_TOPIC_ICONS'			=> 'Permitir iconas dos temas',

	'FORUM_ADMIN'						=> 'Administración do Foro',
	'FORUM_ADMIN_EXPLAIN'				=> 'No pHpBB3 non hai categorías, todo está baseado no foro. Cada foro pode ter un número ilimitado de subforos e ti podes determinar cales admiten mensaxes ou non (p.e. se actúa como unha categoría antiga). Aquí podes engadir, editar, eliminar, bloquear e desbloquear foros individuais así como axustar certos controis adicionais. Se as túas mensaxes e temas non están sincronizados tamén podes resincronizar un foro. <strong>Precisas copiar o estabelecer os permisos axeitados para os foros creados de novo para que sexan amosados.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Permitir auto-purgado',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Corta o foro de temas, axusta os parámetros de frecuencia/idade debaixo.',
	'FORUM_CREATED'						=> 'O Foro foi creado correctamente.',
	'FORUM_DATA_NEGATIVE'				=> 'Os parémtros de corte non poden ser negativos',
	'FORUM_DESC_TOO_LONG'				=> 'A descrición do foro é longa de máis, debe ser inferior a 4000 caracteres.',
	'FORUM_DELETE'						=> 'Borrar foro',
	'FORUM_DELETE_EXPLAIN'				=> 'O formulario de embaixo permitirache eliminar un foro. Se o foro admite mensaxes podes decidir onde queres poñer os temas(ou foros) que contiña.',
	'FORUM_DELETED'						=> 'O Foro foi eliminado correctamente',
	'FORUM_DESC'						=> 'Descrición',
	'FORUM_DESC_EXPLAIN'				=> 'Calquer etiqueta introducida será visualizada como é.',
	'FORUM_EDIT_EXPLAIN'				=> 'O formulario de abaixo permitirache personalizar este foro. Por favor decátate de que a moderación e os controis de contabilización dos posts son configurábeis a través dos permisos do foro por cada usuario ou grupo.',
	'FORUM_IMAGE'						=> 'Imaxe do Foro',
	'FORUM_IMAGE_EXPLAIN'				=> 'A ubicación, relativa ao directorio raíz do pHpBB dunha imaxe adicional para asociar a este foro.',
	'FORUM_IMAGE_NO_EXIST'				=> 'A imaxe de foro especificada non existe',
	'FORUM_LINK_EXPLAIN'				=> 'URL completa (incluído o protocolo, por exemplo <samp>http://</samp>) que ao premer nela este foro dirixa ao usuario',
	'FORUM_LINK_TRACK'					=> 'A ligazón de rastreo redirecciona',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Rexistra o número de veces que a ligazón a un foro foi premida.',
	'FORUM_NAME'						=> 'Nome do Foro',
	'FORUM_NAME_EMPTY'					=> 'Debes inserir un nome para este foro.',
	'FORUM_PARENT'						=> 'Foro principal',
	'FORUM_PASSWORD'					=> 'Contrasinal de foro',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmar contrasinal do foro',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Só necesita ser configurado se o contrasinal do foro foi introducido.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Define un contrasinal para este foro, usa preferentemente o sistema de autorización.',
	'FORUM_PASSWORD_UNSET'				=> 'Eliminar contrasinal do foro',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Marca isto se queres eliminar o contrasinal do foro.',
	'FORUM_PASSWORD_OLD'				=> 'O contrasinal do foro emprega unha encriptación antiga e debe ser mudada.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Os contrasinais que inseriches non coinciden.',
	'FORUM_PRUNE_SETTINGS'				=> 'Axustes do purgado de foro',
	'FORUM_RESYNCED'					=> 'Foro "%s" correctamente resincronizado',
	'FORUM_RULES_EXPLAIN'				=> 'As regras do foro serán despregadas en todas as páxinas de dito foro.',
	'FORUM_RULES_LINK'					=> 'Ligazón ás Regras do Foro',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Aquí podes introducir o URL da páxina/mensaxe que contén as regras do teu foro. Esta opción anula o texto coas regras do foro especificado. ',
	'FORUM_RULES_PREVIEW'				=> 'Previsualización das Regras do Foro',
	'FORUM_RULES_TOO_LONG'				=> 'As normas do foro deben ser dunha lonxitude inferior a 4000 caracteres.',
	'FORUM_SETTINGS'					=> 'Configuración do Foro',
	'FORUM_STATUS'						=> 'Estado do Foro',
	'FORUM_STYLE'						=> 'Estilo do Foro',
	'FORUM_TOPICS_PAGE'					=> 'Temas Por Páxina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Se é diferente a cero este valor anulará o tema predeterminado para configuración de páxina.',
	'FORUM_TYPE'						=> 'Tipo de Foro',
	'FORUM_UPDATED'						=> 'Informacións do Foro actualizadas correctamente.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Queres mudar un foro publicable con subforos a unha ligazón. Move todos os subforos fóra do mesmo antes de proceder, xa que logo de mudar a unha ligazón non poderás ver máis os subforos conectados actualmente co devandito foro.',

	'GENERAL_FORUM_SETTINGS'	=> 'Configuración Xeral do Foro',

	'LINK'					=> 'Ligazón',
	'LIST_INDEX'			=> 'Listar o foro nos listados dos subforos',
	'LIST_INDEX_EXPLAIN'	=> 'Visualiza unha ligazón a este foro según a listaxe de subforos de foros matriz, se existe algunha.',
	'LIST_SUBFORUMS'			=> 'Listar subforos na lenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Amosa os subforos deste foro no índice e calquera outro lugar como unha ligazón dentro da lenda se a súa opción “Listar subforo na lenda no foro-pai” está activada.',
	'LOCKED'				=> 'Pechado',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Non se poden publicar mensaxes no foro que seleccionaches para mover as mensaxes. Por favor, selecciona un foro que si permita publicar mensaxes.',
	'MOVE_POSTS_TO'		=> 'Mover mensaxes publicadas',
	'MOVE_SUBFORUMS_TO'	=> 'Mover subforos',

	'NO_DESTINATION_FORUM'			=> 'Non especificaches un foro ao que mover o contido',
	'NO_FORUM_ACTION'				=> 'Non hai acción definida para realizar co contido do foro.',
	'NO_PARENT'						=> 'Sen Pai',
	'NO_PERMISSIONS'				=> 'Non copiar permisos',
	'NO_PERMISSION_FORUM_ADD'		=> 'Non tes os permisos axeitados para engadir foros',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Non tes os permisos axeitados para eliminar foros',

	'PARENT_IS_LINK_FORUM'		=> 'O pai que especificaches é unha ligazón de foro. Os foros ligazón non poden conter outros foros. Selecciona unha categoría ou foro como foro pai.',
	'PARENT_NOT_EXIST'			=> 'Non existe o pai',
	'PRUNE_ANNOUNCEMENTS'		=> 'Purgar Anuncios',
	'PRUNE_STICKY'				=> 'Purgar Destacados',
	'PRUNE_OLD_POLLS'			=> 'Purgar Enquisas Vellas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Eliminar temas sen votos dentro do prazo.',
	
	'REDIRECT_ACL'	=> 'Agora podes %sconfigurar os permisos%s para este foro.',

	'SYNC_IN_PROGRESS'			=> 'Foro sincronizándose',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Agora mesmo resincronizando rango de temas %1$d/%2$d.',

	'TYPE_CAT'			=> 'Categoría',
	'TYPE_FORUM'		=> 'Foro',
	'TYPE_LINK'			=> 'Ligazón',

	'UNLOCKED'			=> 'Desbloqueado',
));

?>