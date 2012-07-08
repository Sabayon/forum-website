<?php
/** 
*
* acp_attachments [Galician]
*
* @package language
* @version $Id: attachments.php 8946 2008-09-26 18:32:05Z toonarmy $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aquí poderás configurar os axustes principais para os adxuntos canda as categorías especiais asociadas.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aquí poderás engadir, eliminar e modificar os teus Grupos de Extensión, desactivalos, asignarlles unha Categoría especial, mudar o mecanismo de descarga e tamén definir unha Icona de Subida que será amosada fronte a calquer Adxunto pertencente ao Grupo.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aquí podes administrar as extensións permitidas. Para activar as extensións, vai ao panel de administración de grupos de extensións. Recomendamos non permitir de ningún xeito extensións de scripting (como php, php3, php4, phtml, pl, cgi, asp, aspx...)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aquí poderás ver arquivos do directorio de subida de Adxuntos non asignados a mensaxes. Isto ocorre de cote se os usuarios adxuntan arquivos pero non envían a mensaxe. Poderás entón eliminar os arquivos ou adxuntalos a mensaxes existentes. Se queres adxuntalos a mensaxes fará falta unha id válida de mensaxe publicada, que terás que determinar por ti mesmo. Esta característica é principalmente para a xente que queira subir arquivos (especialmente cando sexan moi longos) mediante outro programa e asignalos a unha mensaxe publicada existente.',
	'ADD_EXTENSION'						=> 'Engadir extensión',
	'ADD_EXTENSION_GROUP'				=> 'Engadir Grupo de Extensións',
	'ADMIN_UPLOAD_ERROR'				=> 'Erros ao tentar adxuntar o arquivo: %s',
	'ALLOWED_FORUMS'					=> 'Foros Permitidos',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Capaz de publicar as extensións asignadas nos foros seleccionados (ou todos se estivesen seleccionados)',
	'ALLOWED_IN_PM_POST'				=> 'Permitido',
	'ALLOW_ATTACHMENTS'					=> 'Permitir Adxuntos',
	'ALLOW_ALL_FORUMS'					=> 'Permitir Todos os Foros',
	'ALLOW_IN_PM'						=> 'Permitido na mensaxería privada',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permitir Adxuntos en Mensaxes Privadas',
	'ALLOW_SELECTED_FORUMS'				=> 'Só os Foros seleccionados debaixo',
	'ASSIGNED_EXTENSIONS'				=> 'Extensións Asignadas',
	'ASSIGNED_GROUP'					=> 'Grupo Asignado',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensións',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupos de Extensións',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Tamaño máximo de arquivo',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Tamaño máximo de cada arquivo, 0 significa sen límite',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Tamaño máximo de arquivo nas mensaxes',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Espazo máximo de cada arquivo para adxuntos en mensaxes privadas. 0 significa sen limite.',
	'ATTACH_ORPHAN_URL'					=> 'Adxuntos Orfos',
	'ATTACH_POST_ID'					=> 'ID da mensaxe',
	'ATTACH_QUOTA'						=> 'Cota total para adxuntos',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espazo máximo dispoñíbel no disco para adxuntos, 0 significa sen límite.',
	'ATTACH_TO_POST'					=> 'Adxuntar arquivo á mensaxe',

	'CAT_FLASH_FILES'			=> 'Arquivos Flash',
	'CAT_IMAGES'				=> 'Imaxes',
	'CAT_QUICKTIME_FILES'		=> 'Medio Quicktime',
	'CAT_RM_FILES'				=> 'Fluxos de Real Media',
	'CAT_WM_FILES'				=> 'Fluxos de Win Media',
	'CHECK_CONTENT'				=> 'Comprobar arquivos adxuntos',
	'CHECK_CONTENT_EXPLAIN'		=> 'Algúns navegadores poden ser enganados para que asuman un tipo mime incorrecto para os arquivos subidos. Esta opción asegura que os devanditos arquivos causantes de tal situación sexan rexeitados.',
	'CREATE_GROUP'				=> 'Crear novo grupo',
	'CREATE_THUMBNAIL'			=> 'Crear miniatura',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Crear unha miniatura en todas as situacións posíbeis.',

	'DEFINE_ALLOWED_IPS'			=> 'Definir IPs/Nomes de Host permitidos',
	'DEFINE_DISALLOWED_IPS'			=> 'Definir IPs/Nomes de Host non permitidos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Para indicar varios enderezos IP ou nomes de host distintos, insire cada un nunha liña diferente. Para indicar un rango de enderezos IP, separa o comezo do final cun trazo (-), e para indicar un comodín, emprega *',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Podes eliminar (ou des-excluir) multiples enderezos IP dunha soa vez usando a combinación de teclado e rato axeitada para o teu ordenador e navegador. Os IPs excluídos teñen un fondo azul.',
	'DISPLAY_INLINED'				=> 'Mostrar as imaxes incrustadas',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Se esta posto a Non as imaxes adxuntas veranse coma unha ligazón.',
	'DISPLAY_ORDER'					=> 'Orde de Visualización dos Adxuntos',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Amosar adxuntos ordenados por data.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Editar Grupo de Extensións',
	'EXCLUDE_ENTERED_IP'			=> 'Activa isto para excluir o enderezo IP ou nome de host inserido.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Excluir IP dos nomes de host ou IPs permitidos',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Excluir IP dos nomes de host ou IPs non permitidos',
	'EXTENSIONS_UPDATED'			=> 'Extensións actualizadas correctamente',
	'EXTENSION_EXIST'				=> 'A Extensión %s xa existe',
	'EXTENSION_GROUP'				=> 'Grupo de Extensións',
	'EXTENSION_GROUPS'				=> 'Grupos de Extensións',
	'EXTENSION_GROUP_DELETED'		=> 'Grupo de Extensións eliminado correctamente.',
	'EXTENSION_GROUP_EXIST'			=> 'O Grupo de Extensións %s xa existe',

	'GO_TO_EXTENSIONS'		=> 'Ir á Pantalla de Xestión de Extensións',
	'GROUP_NAME'			=> 'Nome do grupo',

	'IMAGE_LINK_SIZE'			=> 'Dimensións da Imaxe Ligada',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Amosar imaxes adxuntas coma ligazóns se a imaxe é maior que isto. Pono a 0 px por 0 px para deshabilitalo.',
	'IMAGICK_PATH'				=> 'Ruta do Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Ruta completa á aplicación de conversión ImageMagick, p.e. /usr/bin',

	'MAX_ATTACHMENTS'				=> 'Numero máximo de adxuntos por mensaxe publicada',
	'MAX_ATTACHMENTS_PM'			=> 'Numero máximo de adxuntos por mensaxe privada',
	'MAX_EXTGROUP_FILESIZE'			=> 'Tamaño máximo de arquivo',
	'MAX_IMAGE_SIZE'				=> 'Dimensións Máximas das Imaxes',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Tamaño máximo das imaxes adxuntas. Pono a 0 px por 0 px para deshabilitar as imaxes adxuntas.',
	'MAX_THUMB_WIDTH'				=> 'Ancho máximo da miniatura en píxels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'As miniaturas xeradas non excederán do amplo indicado aquí',
	'MIN_THUMB_FILESIZE'			=> 'Tamaño mínimo da miniatura',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Non crear unha miniatura para imaxes máis pequenas ca isto.',
	'MODE_INLINE'					=> 'Incrustada',
	'MODE_PHYSICAL'					=> 'Físico',

	'NOT_ALLOWED_IN_PM'			=> 'Non permitido en mensaxes privadas',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Non permitido',
	'NOT_ASSIGNED'				=> 'Sen asignar',
	'NO_EXT_GROUP'				=> 'Ningún',
	'NO_EXT_GROUP_NAME'			=> 'Non se inseriu Nome de Grupo ningún',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Non se especificou Grupo de Extensións ningún.',
	'NO_FILE_CAT'				=> 'Ningún',
	'NO_IMAGE'					=> 'Sen Imaxes',
	'NO_THUMBNAIL_SUPPORT'		=> 'Deshabilitouse o soporte de miniaturas xa que non se atopou libraría GD permitida ningunha e tampouco se puido atopar o executable do ImageMagick.',
	'NO_UPLOAD_DIR'				=> 'O directorio de subida especificado non existe.',
	'NO_WRITE_UPLOAD'			=> 'Non se pode escribir no directorio de subida especificado. Múdalle os permisos para que o servidor web poida escribir nel.',

	'ONLY_ALLOWED_IN_PM'	=> 'Só permitido en mensaxes privadas',
	'ORDER_ALLOW_DENY'		=> 'Permitir',
	'ORDER_DENY_ALLOW'		=> 'Denegar',

	'REMOVE_ALLOWED_IPS'		=> 'Eliminar ou retirar exclusión de IPs/Nomes de Host permitidos',
	'REMOVE_DISALLOWED_IPS'		=> 'Eliminar ou retirar exclusión de IPs/Nomes de Host non permitidos',

	'SEARCH_IMAGICK'				=> 'Procurar o ImageMagick',
	'SECURE_ALLOW_DENY'				=> 'Lista de Permitidos/Denegados',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Permitir ou Denegar a lista de enderezos, este axuste só se aplica para descargar arquivos',
	'SECURE_DOWNLOADS'				=> 'Habilitar descargas seguras',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Se activas es ta opción, as descargas limitaranse aos IPs/nomes de host que teñas definido.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'O modo de Descargas Seguras non está activado. Os axustes de abaixo só se aplicarán unha vez se activen as descargas seguras.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'A lista de enderezos IP foi actualizada correctamente',
	'SECURE_EMPTY_REFERRER'			=> 'Permitir valores de Referrer baleiros',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'As descargas seguras están baseadas nos valores de Referrer. Queres permitir descargas para aqueles que omitan o Referer?',
	'SETTINGS_CAT_IMAGES'			=> 'Opcións de categorías de imaxes',
	'SPECIAL_CATEGORY'				=> 'Categoría Especial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'As Categorías Especiais difiren nos xeitos en que son presentadas nas mensaxes publicadas.',
	'SUCCESSFULLY_UPLOADED'			=> 'Subido correctamente',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupo de Extensións engadido correctamente',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupo de Extensións actualizado correctamente',

	'UPLOADING_FILES'				=> 'Subindo Arquivos',
	'UPLOADING_FILE_TO'				=> 'Subindo Arquivo "%1$s" á Mensaxe Publicada Número %2$d.',
	'UPLOAD_DENIED_FORUM'			=> 'Non tes permiso para subir arquivos ao foro "%s"',
	'UPLOAD_DIR'					=> 'Directorio de subidas',
	'UPLOAD_DIR_EXPLAIN'			=> 'Ruta ao espazo de almacén dos adxuntos.',
	'UPLOAD_ICON'					=> 'Icona de Subida',
	'UPLOAD_NOT_DIR'				=> 'A ubicación de subida que especificaches non semella ser un directorio.',
));

?>