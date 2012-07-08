<?php
/** 
*
* posting [Galician]
*
* @package language
* @version $Id: posting.php 9742 2009-07-09 10:34:40Z bantu $
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
	'ADD_ATTACHMENT'			=> 'Subir adxunto',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se queres engadir un ou varios arquivos, insire os pormenores debaixo',
	'ADD_FILE'					=> 'Engadir o arquivo',
	'ADD_POLL'					=> 'Creación dunha enquisa',
	'ADD_POLL_EXPLAIN'			=> 'Se non queres engadir unha enquisa ao teu tema, deixa os campos en branco',
	'ALREADY_DELETED'			=> 'Esta mensaxe xa foi eliminada.',
	'ATTACH_QUOTA_REACHED'		=> 'Acadouse o límite para anexos do taboleiro.',
	'ATTACH_SIG'				=> 'Xuntar unha sinatura (as sinaturas pódense alterar por medio do PCU)',

	'BBCODE_A_HELP'				=> 'Adxunto en liña subido: [attachment=]nomedearquivo.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Texto resaltado: [b]texto[/b] (alt+b)',
	'BBCODE_C_HELP'				=> 'Amosar código: [code]código[/code] (alt+c)',
	'BBCODE_E_HELP'				=> 'Lista: Engadir elemento á lista',
	'BBCODE_F_HELP'				=> 'Tamaño de fonte: [size=x-small]texto pequeno[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>INACTIVO</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>ACTIVO</em>',
	'BBCODE_I_HELP'				=> 'Texto en cursiva: [i]texto[/i] (alt+i)',
	'BBCODE_L_HELP'				=> 'Lista: [list]texto[/list] (alt+l)',
	'BBCODE_LISTITEM_HELP'			=> 'Elemento de lista: [*]texto[/*]',
	'BBCODE_O_HELP'				=> 'Lista ordenada: [list=]texto[/list] (alt+o)',
	'BBCODE_P_HELP'				=> 'Inserir imaxe: [img]http://url_da_imaxe[/img] (alt+p)',
	'BBCODE_Q_HELP'				=> 'Cita: [quote]texto[/quote] (alt+q)',
	'BBCODE_S_HELP'				=> 'Cor da fonte: [color=red]texto[/color] Nota: podes usar color=#FF0000',
	'BBCODE_U_HELP'				=> 'Subliñar texto: [u]texto[/u] (alt+u)',
	'BBCODE_W_HELP'				=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]Texto URL[/url] (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=largo,alto]http://url[/flash] (alt+d)',
	'BUMP_ERROR'				=> 'Non podes reactivar este tema tan cedo logo da última mensaxe publicada.',

	'CANNOT_DELETE_REPLIED'		=> 'Sentímolo, pero só podes eliminar mensaxes que non teñan respostas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Esta mensaxe foi bloqueada. A partires de agora xa non a poderás editar.',
	'CANNOT_EDIT_TIME'			=> 'Xa non podes editar ou eliminar esa mensaxe publicada',
	'CANNOT_POST_ANNOUNCE'		=> 'Non podes publicar anuncios.',
	'CANNOT_POST_STICKY'		=> 'Non podes publicar temas destacados.',
	'CHANGE_TOPIC_TO'			=> 'Mudar o tipo do tema a',
	'CLOSE_TAGS'				=> 'Pechar etiquetas',
	'CURRENT_TOPIC'				=> 'Tema actual',

	'DELETE_FILE'				=> 'Eliminar arquivo',
	'DELETE_MESSAGE'			=> 'Eliminar mensaxe',
	'DELETE_MESSAGE_CONFIRM'	=> 'Estás certo de quereres eliminar esta mensaxe?',
	'DELETE_OWN_POSTS'			=> 'Só podes eliminar as túas propias mensaxes.',
	'DELETE_POST_CONFIRM'		=> 'Estás certo de quereres eliminar esta mensaxe?',
	'DELETE_POST_WARN'			=> 'Unha vez eliminada a mensaxe, xa non se poderá recuperar',
	'DISABLE_BBCODE'			=> 'Deshabilitar BBCode',
	'DISABLE_MAGIC_URL'			=> 'Non procesar URLs de xeito automático',
	'DISABLE_SMILIES'			=> 'Deshabilitar risoños',
	'DISALLOWED_CONTENT'		=> 'A subida foi rexeitada por mor da identificación do arquivo subido como un posible vector de ataque.',
	'DISALLOWED_EXTENSION'		=> 'Non se permite a extensión %s',
	'DRAFT_LOADED'				=> 'Rascuño cargado na área de publicación, podes rematar coa publicación agora, se queres.<br />O teu rascuño será eliminado despois de que publiques esta mensaxe.',
	'DRAFT_LOADED_PM'			=> 'Rascuño cargado na área da mensaxe. Agora podes rematar a túa mensaxe privada se queres.<br />O teu rascuño será eliminado logo de enviar esta mensaxe privada.',
	'DRAFT_SAVED'				=> 'O rascuño gardouse correctamente.',
	'DRAFT_TITLE'				=> 'Título do rascuño',

	'EDIT_REASON'				=> 'Motivo da edición desta mensaxe',
	'EMPTY_FILEUPLOAD'			=> 'O arquivo subido está baleiro',
	'EMPTY_MESSAGE'				=> 'Debes inserir unha mensaxe para a poder publicar.',
	'EMPTY_REMOTE_DATA'			=> 'O arquivo non se puido subir, por favor tenta cargalo manualmente.',

	'FLASH_IS_OFF'				=> '[flash] <em>DESACTIVADO</em>',
	'FLASH_IS_ON'				=> '[flash] <em>ACTIVADO</em>',
	'FLOOD_ERROR'				=> 'Non podes publicar outra mensaxe tan cedo logo da última publicada.',
	'FONT_COLOR'				=> 'Cor da fonte',
	'FONT_COLOR_HIDE'			=> 'Agochar cor da fonte',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Tamaño da fonte',
	'FONT_SMALL'				=> 'Pequeno',
	'FONT_TINY'					=> 'Pequerrechiño',

	'GENERAL_UPLOAD_ERROR'		=> 'Non se puido subir o anexo a %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>DESACTIVADO</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>ACTIVADO</em>',
	'INVALID_FILENAME'			=> 'O nome de arquivo %s non é válido',

	'LOAD'						=> 'Cargar',
	'LOAD_DRAFT'				=> 'Cargar rascuño',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aquí podes seleccionar o rascuño no que queres continuar a escribir. A túa mensaxe actual cancelarase e o seu contido será eliminado. Podes ver, editar e eliminar rascuños co teu Panel de Control de Usuario',
	'LOGIN_EXPLAIN_BUMP'		=> 'Debes iniciar sesión para poder reactivar temas neste foro.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Debes iniciar sesión para poder eliminar temas neste foro.',
	'LOGIN_EXPLAIN_POST'		=> 'Debes iniciar sesión para publicar mensaxes neste foro',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Debes iniciar sesión para poder citar mensaxes neste foro.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Debes iniciar sesión para responder aos temas deste foro',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Só podes usar fontes ata un tamaño máximo de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Os teus arquivos só poden ser de %1$d píxels de alto como máximo.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Os teus arquivos só poden ser de %1$d píxels de largo como máximo.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'As túas imaxes só poden ser de %1$d píxels de alto como máximo.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'As túas imaxes só poden ser de %1$d píxels de largo como máximo.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Insire aquí a túa mensaxe, que non poderá conter máis de <strong>%d</strong> caracteres.',
	'MESSAGE_DELETED'			=> 'A túa mensaxe foi eliminada correctamente',
	'MORE_SMILIES'				=> 'Ver máis risoños',

	'NOTIFY_REPLY'				=> 'Enviarme un correo-e cando se publique unha resposta',
	'NOT_UPLOADED'				=> 'Non se puido subir o arquivo.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Non podes eliminar opcións de enquisas existentes',
	'NO_PM_ICON'				=> 'Non hai icona ningunha de MP',
	'NO_POLL_TITLE'				=> 'Tes que inserir un título para a enquisa',
	'NO_POST'					=> 'A mensaxe solicitada non existe.',
	'NO_POST_MODE'				=> 'Non se especificou modo de publicación ningún',

	'PARTIAL_UPLOAD'			=> 'O arquivo foi subido só parcialmente',
	'PHP_SIZE_NA'				=> 'O tamaño do arquivo adxunto é grande de máis.<br />Non se pode determinar o tamaño máximo definido polo PHP no php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment\'s filesize is too large, the maximum upload size is %1$d %2$s.<br />Please note this is set in php.ini and cannot be overriden.',
	'PLACE_INLINE'				=> 'Inserir embebido',
	'POLL_DELETE'				=> 'Eliminar enquisa',
	'POLL_FOR'					=> 'Iniciar unha enquisa para',
	'POLL_FOR_EXPLAIN'			=> 'Insire 0 ou déixao en branco para que a enquisa non remate',
	'POLL_MAX_OPTIONS'			=> 'Opcións por usuario',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este é o número de opcións que cada usuario pode seleccionar cando vote.',
	'POLL_OPTIONS'				=> 'Opcións da enquisa',
	'POLL_OPTIONS_EXPLAIN'		=> 'Pon cada opción en liñas diferentes. Podes indicar ata <strong>%d</strong> opcións',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Pon cada opción en liñas diferentes. Podes indicar ata <strong>%d</strong> opcións. Se eliminas ou engades opcións, restaurarase o número de votos anteriores a cero.',
	'POLL_QUESTION'				=> 'Pregunta da enquisa',
	'POLL_TITLE_TOO_LONG'		=> 'O título da enquisa debe conter menos de 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'O tamaño procesado do título da túa enquisa é longo de máis. Toma en consideración a posibilidade de eliminar BBCodes ou risoños.',
	'POLL_VOTE_CHANGE'			=> 'Permitir votar máis dunha vez',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se o activas os usuarios activos poden mudar o seu voto.',
	'POSTED_ATTACHMENTS'		=> 'Arquivos anexos enviados',
	'POST_APPROVAL_NOTIFY'		=> 'Cando a túa mensaxe sexa aprobada recibirás unha notificación.',
	'POST_CONFIRMATION'			=> 'Confirmación do envío',
	'POST_CONFIRM_EXPLAIN'		=> 'Para evitar a publicación automatizada de mensaxes o administrador do foro pídeche que insiras un código de confirmación. Este código amósase na imaxe que deberías ver embaixo. Se tes algún tipo de deficiencia visual ou por calquer motivo non podes ler o código, por favor ponte en contacto co %sAdministrador dos Foros%S.',
	'POST_DELETED'				=> 'A túa mensaxe foi eliminada correctamente',
	'POST_EDITED'				=> 'A túa mensaxe foi editada correctamente',
	'POST_EDITED_MOD'			=> 'A túa mensaxe foi editada pero require aprobación',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Icona da mensaxe',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisión de mensaxe publicada',
	'POST_REVIEW_EDIT'			=> 'Revisión de mensaxe publicada',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Esta mensaxe publicada foi alterada por outro usuario mentres estabas a editala. Pode que queiras revisar a versión actual e axustar o que editaches.',
	'POST_REVIEW_EXPLAIN'		=> 'Hai como mínimo unha mensaxe nova neste tema. En vista disto pode que queiras revisar a túa mensaxe.',
	'POST_STORED'				=> 'A túa mensaxe foi enviada correctamente',
	'POST_STORED_MOD'			=> 'A túa mensaxe foi gardada pero require aprobación',
	'POST_TOPIC_AS'				=> 'Publicar tema como',
	'PROGRESS_BAR'				=> 'Barra de progreso',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Só podes incluir %1$d citas dentro doutras.',

	'SAVE'						=> 'Gardar',
	'SAVE_DATE'					=> 'Gardar en ',
	'SAVE_DRAFT'				=> 'Gardar rascuño',
	'SAVE_DRAFT_CONFIRM'		=> 'Ten en conta que os rascuños gardados só inclúen o asunto e a mensaxe. Calquer outro elemento será eliminado. Queres gardar agora o teu rascuño?',
	'SMILIES'					=> 'Risoños',
	'SMILIES_ARE_OFF'			=> 'Os risoños están <em>DESACTIVADOS</em>',
	'SMILIES_ARE_ON'			=> 'Os risoños están <em>ACTIVADOS</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tempo límite para Destacado/Anuncio',
	'STICK_TOPIC_FOR'			=> 'Destacar tema para',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Insire 0 ou déixao en branco para un Destacado/Anuncio por tempo indefinido. Ten en conta que este número é relativo á data da mensaxe publicada.',
	'STYLES_TIP'				=> 'Consello: Os estilos poden ser aplicados rápidamente ao texto seleccionado.',

	'TOO_FEW_CHARS'				=> 'A túa mensaxe ten poucos caracteres.',
	'TOO_FEW_CHARS_LIMIT'		=> 'A túa mensaxe contén %1$d caracteres. O número mínimo que precisas inserir é de %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Debes introducir, como mínimo, dúas opcións a votar',
	'TOO_MANY_ATTACHMENTS'		=> 'Non podes engadir outro arquivo anexo, %d é o máximo.',
	'TOO_MANY_CHARS'			=> 'A túa mensaxe ten demasiados caracteres.',
	'TOO_MANY_CHARS_POST'		=> 'A túa mensaxe contén %1$d caracteres. O número máximo permitido é de %2$d caracteres.',
	'TOO_MANY_CHARS_SIG'		=> 'A túa sinatura contén %1$d caracteres. O número máximo permitido é de %2$d caracteres.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Tentaches inserir demasiadas opcións na enquisa',
	'TOO_MANY_SMILIES'			=> 'A túa mensaxe contén demasiados risoños. Está permitido un máximo de %d risoños.',
	'TOO_MANY_URLS'				=> 'A tua mensaxe contén demasiados URLs. Está permitido un máximo de %d URLs.',
	'TOO_MANY_USER_OPTIONS'		=> 'Non podes especificar máis Opcións por Usuario das que existen na enquisa',
	'TOPIC_BUMPED'				=> 'O tema foi reactivado correctamente',

	'UNAUTHORISED_BBCODE'		=> 'Non podes usar determinados bbcodes: ',
	'UNGLOBALISE_EXPLAIN'		=> 'Para modificar este tema de forma que pase de ser global a ser un tema normal, precisas seleccionar o foro no cal se amosará este tema',
	'UPDATE_COMMENT'			=> 'Actualizar comentario',
	'URL_INVALID'				=> 'O URL que especificaches non é válido.',
	'URL_NOT_FOUND'				=> 'O arquivo que especificaches non foi atopado.',
	'URL_IS_OFF'				=> '[url] está <em>DESACTIVADO</em>',
	'URL_IS_ON'					=> '[url] está <em>ACTIVADO</em>',
	'USER_CANNOT_BUMP'			=> 'Non podes reactivar temas neste foro',
	'USER_CANNOT_DELETE'		=> 'Non podes eliminar mensaxes neste foro',
	'USER_CANNOT_EDIT'			=> 'Non podes editar mensaxes neste foro',
	'USER_CANNOT_REPLY'			=> 'Non podes contestar neste foro',
	'USER_CANNOT_FORUM_POST'	=> 'Non podes publicar mensaxes neste foro debido a que o tipo de foro non as acepta.',

	'VIEW_MESSAGE'				=> '%sVer a mensaxe que enviaches%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVer as mensaxes privadas que enviaches%s',

	'WRONG_FILESIZE'			=> 'O arquivo é grande de máis. O tamaño máximo permitido é de %1d %2s',
	'WRONG_SIZE'				=> 'A imaxe debe ser cando menos de %1$d píxels de largo, %2$d  píxels de alto e como máximo de %3$d píxels de largo por %4$d píxels de alto. A imaxe enviada é de %5$d píxels de anchura por %6$d píxels de altura.',
));

?>