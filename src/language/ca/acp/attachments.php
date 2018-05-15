<?php
/**
*
* acp_attachments [Catalan]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aquí podeu configurar les opcions principals dels fitxers adjunts i les categories especials associades.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aquí podeu afegir, eliminar, modificar o inhabilitar grups d’extensions. Opcions addicionals inclouen l’assignació de categories especials, el canvi del mecanisme de baixada, la definició d’una icona de pujada que es mostrarà al davant del fitxer adjunt depenent del grup al qual pertanyi.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aquí podeu gestionar les extensions permeses. Per activar les extensions, utilitzeu el tauler de gestió de grups d’extensions. Us recomanem especialment que no permeteu les extensions de fitxers script (com ara <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, i demés…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aquí podeu veure els fitxers orfes. Això succeeix principalment si els usuaris adjunten els fitxers però no publiquen l’entrada. Podeu eliminar els fitxers o adjuntar-los a entrades existents. Per adjuntar-los a una entrada us cal un ID d’entrada vàlid, heu d’esbrinar aquest ID pel vostre compte. Això assignarà el fitxer adjunt qua ja està pujat a l’entrada que introduïu.',
	'ADD_EXTENSION'						=> 'Afegeix una extensió',
	'ADD_EXTENSION_GROUP'				=> 'Afegeix un grup d’extensions',
	'ADMIN_UPLOAD_ERROR'				=> 'S’han produït errors en intentar adjuntar el fitxer: “%s”.',
	'ALLOWED_FORUMS'					=> 'Fòrums permesos',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Es poden publicar les extensions assignades als fòrums seleccionats (o a tots si trieu l’opció corresponent).',
	'ALLOWED_IN_PM_POST'				=> 'Permès',
	'ALLOW_ATTACHMENTS'					=> 'Permet els fitxers adjunts',
	'ALLOW_ALL_FORUMS'					=> 'Permet a tots els fòrums',
	'ALLOW_IN_PM'						=> 'Permès als missatges privats',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permet els fitxers adjunts als missatges privats',
	'ALLOW_SELECTED_FORUMS'				=> 'Només als fòrums seleccionats a sota',
	'ASSIGNED_EXTENSIONS'				=> 'Extensions assigandes',
	'ASSIGNED_GROUP'					=> 'Grup d’extensions assignat',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensions',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grups d’extensions',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Mida màxima de fitxer',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Mida màxima de cada fitxer, un 0 significa il·limitada.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Mida màxima de fitxer als missatges',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Mida màxima de cada fitxer fitxer adjunts a un missatge privat, un 0 significa il·limitada.',
	'ATTACH_ORPHAN_URL'					=> 'Fitxers adjunts orfes',
	'ATTACH_POST_ID'					=> 'ID de l’entrada',
	'ATTACH_QUOTA'						=> 'Quota de disc total per a fitxers adjunts',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espai màxim en disc disponible per als fitxers adjunts de tot el fòrum, un 0 significa il·limitat.',
	'ATTACH_TO_POST'					=> 'Adjunta el fitxer a l’entrada',

	'CAT_FLASH_FILES'			=> 'Fitxers flash',
	'CAT_IMAGES'				=> 'Imatges',
	'CAT_QUICKTIME_FILES'		=> 'Fitxers Quicktime',
	'CAT_RM_FILES'				=> 'Fitxers RealMedia',
	'CAT_WM_FILES'				=> 'Fitxers Windows Media',
	'CHECK_CONTENT'				=> 'Comprova els fitxers adjunts',
	'CHECK_CONTENT_EXPLAIN'		=> 'A alguns navegadors se’ls pot enganyar per que assumeixin un tipus mime incorrecte per als fitxers pujats. Aquesta opció assegura que els fitxers susceptibles de causar aquest comportament es rebutgen.',
	'CREATE_GROUP'				=> 'Crea un grup nou',
	'CREATE_THUMBNAIL'			=> 'Crea una miniatura',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Crea una miniatura en totes les situacions que sigui possible.',

	'DEFINE_ALLOWED_IPS'			=> 'Defineix les adreces IP/noms d’amfitrió permesos',
	'DEFINE_DISALLOWED_IPS'			=> 'Defineix les adreces IP/noms d’amfitrió no permesos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Per especificar diverses adreces IP o noms d’amfitrió diferents, introduïu cadascun d’ells en una línia nova. Per especificar un rang d’adreces IP, separeu l’inici i el final amb un guió (-), per especificar un comodí utilitzeu un asterisc “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Podeu treure (o desexcloure) múltiples adreces IP d’un sol cop si utilitzeu la combinació de ratolí i teclat adequada per al vostre ordinador i navegador. Les adreces IP excloses estan ressaltades.',
	'DISPLAY_INLINED'				=> 'Mostra les imatges en línia',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Si seleccioneu “No”, els fitxers adjunts de tipus imatge es mostraran com un enllaç.',
	'DISPLAY_ORDER'					=> 'Ordre de visualització dels fitxers adjunts',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Mostra els fitxers adjunts ordenats per data.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Edita el grup d’extensions',
	'EXCLUDE_ENTERED_IP'			=> 'Habiliteu aquesta opció per tal d’excloure les adreces IP/noms d’amfitrió introduïdes.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclou l’adreça IP de la llista d’adreces IP/noms d’amfitrió permesos',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclou l’adreça IP de la llista d’adreces IP/noms d’amfitrió no permesos',
	'EXTENSIONS_UPDATED'			=> 'S’han actualitzat les extensions correctament.',
	'EXTENSION_EXIST'				=> 'L’extensió %s ja existeix.',
	'EXTENSION_GROUP'				=> 'Grup d’extensions',
	'EXTENSION_GROUPS'				=> 'Grups d’extensions',
	'EXTENSION_GROUP_DELETED'		=> 'S’ha eliminat el grup d’extensions correctament.',
	'EXTENSION_GROUP_EXIST'			=> 'El grup d’extensions %s ja existeix.',

	'GO_TO_EXTENSIONS'		=> 'Salta a la pantalla de gestió d’extensions',
	'GROUP_NAME'			=> 'Nom del grup',

	'IMAGE_LINK_SIZE'			=> 'Dimensions d’enllaç a imatge',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Si la imatge adjunta és més gran, es mostrarà com un enllaç de text. Per inhabilitar aquest comportament, utilitzeu els valors 0px x 0px.',
	'IMAGICK_PATH'				=> 'Camí de l’Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Camí complet a l’aplicació de conversió imagemagick, p.ex. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Nombre màxim de fitxers adjunts per entrada',
	'MAX_ATTACHMENTS_PM'			=> 'Nombre màxim de fitxers adjunts per missatge privat',
	'MAX_EXTGROUP_FILESIZE'			=> 'Mida màxima de fitxer',
	'MAX_IMAGE_SIZE'				=> 'Dimensions màximes de la imatge',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Mida màxima de les imatges adjuntes. Utilitzeu els valors 0px x 0px per inhabilitar la comprovació de dimensions.',
	'MAX_THUMB_WIDTH'				=> 'Amplària màxima de les miniatures en píxels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Una miniatura generada no superarà l’amplària definida aquí.',
	'MIN_THUMB_FILESIZE'			=> 'Mida de fitxer mínima per miniatures',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'No es creen miniatures per imatges més petites que aquest valor.',
	'MODE_INLINE'					=> 'En línia',
	'MODE_PHYSICAL'					=> 'Físic',

	'NOT_ALLOWED_IN_PM'			=> 'Només permès a les entrades',
	'NOT_ALLOWED_IN_PM_POST'	=> 'No permès',
	'NOT_ASSIGNED'				=> 'No assignat',
	'NO_EXT_GROUP'				=> 'Cap',
	'NO_EXT_GROUP_NAME'			=> 'No heu introduït el nom del grup',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No heu especificat cap grup d’extensions.',
	'NO_FILE_CAT'				=> 'Cap',
	'NO_IMAGE'					=> 'Sense imatge',
	'NO_THUMBNAIL_SUPPORT'		=> 'S’ha inhabilitat l’ús de miniatures. Per funcionar correctament, cal que l’extensió GD estigui disponible o que l’imagemagick estigui instal·lat. No s’ha trobat cap dels dos.',
	'NO_UPLOAD_DIR'				=> 'El directori de pujada que heu especificat no existeix.',
	'NO_WRITE_UPLOAD'			=> 'No es pot escriure al directori de pujada que heu especificat. Modifiqueu els permisos per permetre que el servidor web hi pugui escriure.',

	'ONLY_ALLOWED_IN_PM'	=> 'Només permès als missatges privats',
	'ORDER_ALLOW_DENY'		=> 'Permet',
	'ORDER_DENY_ALLOW'		=> 'Denega',

	'REMOVE_ALLOWED_IPS'		=> 'Treu o desexclou les adreces IP/noms d’amfitrió <em>permeses</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Treu o desexclou les adreces IP/noms d’amfitrió <em>no permeses</em>',

	'SEARCH_IMAGICK'				=> 'Cerca l’Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Llista Permet/Denega',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Canvia el comportament per defecte de la llista Permet/Denega quan les baixades segures estan habilitades a una <strong>llista blanca</strong> (Permet) o a una <strong>llista negra</strong> (Denega).',
	'SECURE_DOWNLOADS'				=> 'Habilita les baixades segures',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Amb aquesta opció habilitada,  les baixades estan limitades a les adreces IP/noms d’amfitrió que definiu.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Les baixades segures no estan habilitades. Les configuracions més avall s’aplicaran un cop habilitades les baixades segures.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'La llista d’adreces IP s’ha actualitzat correctament.',
	'SECURE_EMPTY_REFERRER'			=> 'Permet els referents buits',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Les baixades segures es basen en referents. Voleu permetre les baixades per aquells que ometin el referent?',
	'SETTINGS_CAT_IMAGES'			=> 'Configuració de la categoria d’imatges',
	'SPECIAL_CATEGORY'				=> 'Categoria especial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Les categories especials són diferents per la forma com es presenten a les entrades.',
	'SUCCESSFULLY_UPLOADED'			=> 'S’ha pujat correctament.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'S’ha afegit el grup d’extensions correctament.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'S’ha actualitzat el grup d’extensions correctament.',

	'UPLOADING_FILES'				=> 'S’estan pujant els fitxers',
	'UPLOADING_FILE_TO'				=> 'S’està pujant el fitxer “%1$s” a l’entrada número %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'No teniu permisos per pujar fitxers al fòrum “%s”.',
	'UPLOAD_DIR'					=> 'Directori de pujada',
	'UPLOAD_DIR_EXPLAIN'			=> 'Camí d’emmagatzemament per als fitxers adjunts. Tingueu en compte que si canvieu aquest directori quan ja s’han pujat fitxers adjunts, cal que copieu manualment els fitxers a la nova ubicació.',
	'UPLOAD_ICON'					=> 'Icona de pujada',
	'UPLOAD_NOT_DIR'				=> 'La ubicació de pujada que heu especificat no és un directori.',
));

?>