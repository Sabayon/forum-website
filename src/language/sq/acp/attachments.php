<?php
/**
*
* acp_attachments.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-02 - www.dea-portal.com
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Këtu mund të konfiguroni opsionet kryesore për shtojcat dhe kategoritë speciale të lidhura me to.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Këtu ju mund të shtoni, fshini, modifikoni ose ç\'aktivizoni grupet e prapashtesave. Opsione të mëtejshme përfshijne caktimin e një kategorie speciale, ndërrimin e mekanizmit të shkarkimit dhe caktimin e një ikone shkarkimi e cila do të shfaqet përpara shtojces që i përket atij grupi.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Këtu mund të menaxhoni të gjithë prapashtesat e lejueshme. Për të aktivizuar prapashtesat ju lutemi t\'i referoheni panelit të menaxhimit të prapashtesave. Eshtë shumë e rekomandueshme që ju të mos lejoni prapashtesat e script (si <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, e kështu me rradhë…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Këtu keni mundësi të shihni skedaret jetimë. Kjo ndodh me së tepërmi kur përdoruesit shtojnë skedarë por nuk postojne mesazhet. Ju keni mundësi t\'i fshini këta skedarë ose t\'ua shtoni ato postimeve ekzistuese. Shtimi në postime kërkon një ID postimi të vlefshme, dhe duhet të caktohet nga ju. Kështu ju mund të shtoni një skedar të ngarkuar me parë një postimi ekzistues.',
	'ADD_EXTENSION'						=> 'Shto prapashtesë',
	'ADD_EXTENSION_GROUP'				=> 'Shto grup prapashtesash',
	'ADMIN_UPLOAD_ERROR'				=> 'Gabim gjatë shtimit të skedarit: “%s”.',
	'ALLOWED_FORUMS'					=> 'Forumet e lejuar',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Mundet të postojë prapashtesat e caktuara në forumet e zgjedhur (ose në të gjithë nëse të zgjedhur).',
	'ALLOWED_IN_PM_POST'				=> 'E lejuar',
	'ALLOW_ATTACHMENTS'					=> 'Lejo shtojcat',
	'ALLOW_ALL_FORUMS'					=> 'Lejo të gjithë forumet',
	'ALLOW_IN_PM'						=> 'E lejuar në Mesazhet Private',
	'ALLOW_PM_ATTACHMENTS'				=> 'Lejo shtojcat në Mesazhet Private',
	'ALLOW_SELECTED_FORUMS'				=> 'Vetëm forumet e zgjedhura më poshtë',
	'ASSIGNED_EXTENSIONS'				=> 'Prapashtesat e caktuara',
	'ASSIGNED_GROUP'					=> 'Grupet e prapashtesave të caktuara',
	'ATTACH_EXTENSIONS_URL'				=> 'Prapashtesat',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupet e prapashtesave',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Masa maksimale e skedarit',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Masa maksimale e secilit skedar, me 0 caktohet e pakufizuar.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Masa maksimale e skedarit në mesazhe',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Hapsira maksimale e mundur për përdorues për shtojcat në mesazhet private, me 0 caktohet e pakufizuar.',
	'ATTACH_ORPHAN_URL'					=> 'Shtojca jetime',
	'ATTACH_POST_ID'					=> 'ID e postimit',
	'ATTACH_QUOTA'						=> 'Kuota totale e shtojcave',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Hapsira maksimale e mundur në serverin tuaj për shtojcat, për të gjithe bordin , me 0 caktohet e pakufizuar.',
	'ATTACH_TO_POST'					=> 'Shto skedarin në postim',
	
	'CAT_FLASH_FILES'			=> 'Skedarë Flash',
	'CAT_IMAGES'				=> 'Imazhe',
	'CAT_QUICKTIME_FILES'		=> 'Skedarët Quicktime',
	'CAT_RM_FILES'				=> 'Skedarët RealMedia',
	'CAT_WM_FILES'				=> 'Skedaret Windows Media',
	'CHECK_CONTENT'				=> 'Kontrollo skedarët e shtojcave',
	'CHECK_CONTENT_EXPLAIN'		=> 'Disa shfletues mund të trukohen për mimetype jo korrekte. Ky opsion siguron që skedarë të tillë të refuzohen.',
	'CREATE_GROUP'				=> 'Krijo grup të ri',
	'CREATE_THUMBNAIL'			=> 'Krijo thumbnail',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Krijo nje thumbnail në të gjitha situatat e mundshme.',
	
	'DEFINE_ALLOWED_IPS'			=> 'Cakto IP/emrat e hosteve të lejuara',
	'DEFINE_DISALLOWED_IPS'			=> 'Cakto IP/emrat e hosteve të ndaluara',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Për të specifikuar IP të ndryshme ose emra hostesh shtoni çdonjërin në kryerradhe. Për të specifikuar nje hark adresash IP ndani fillimin dhe fundin me vijë në mes (-), për të specifikuar një Joly/wildcard përdorni “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Ju mund të fshini (ose lejoni) disa adresa IP njeherësh duke përdorur kombinimin e përshtatshëm të mausit dhe tastieres për kompjuterin dhe shfletuesin tuaj. IP e përjashtuara janë me sfond blu.',
	'DISPLAY_INLINED'				=> 'Shfaq imazhet përbrenda',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Nëse caktohet Jo imazhet e shtuara do të shfaqen si link.',
	'DISPLAY_ORDER'					=> 'Renditja e shfaqjes së shtojcave',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Shfaq shtojcat të renditura sipas kohës.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Modifiko grupin e prapashtesave',
	'EXCLUDE_ENTERED_IP'			=> 'Aktivizo këtë për të hequr IP/emër hostin e vënë.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Hiq IP nga IP/emër hostesh të lejuar',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Hiq IP nga IP/emër hostesh të ndaluar',
	'EXTENSIONS_UPDATED'			=> 'Prapashtesa u azhornua me sukses.',
	'EXTENSION_EXIST'				=> 'Prapashtesa %s është ekzistuese.',
	'EXTENSION_GROUP'				=> 'Grupi i prapashtesave',
	'EXTENSION_GROUPS'				=> 'Grupet e prapashtesave',
	'EXTENSION_GROUP_DELETED'		=> 'Grupi i prapashtesave u fshi me sukses.',
	'EXTENSION_GROUP_EXIST'			=> 'Gropi i prapashtesave %s është ekzistues.',
	
	'GO_TO_EXTENSIONS'		=> 'Shko në faqen e menaxhimit të prapashtesave',
	'GROUP_NAME'			=> 'Emri i grupit',
	
	'IMAGE_LINK_SIZE'			=> 'Dimensionet e imazhit link',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Shfaq imazhet e shtuara si link teksti i përbrendshëm  nëse imazhi është më i madh se kaq. Për të ç\'aktivizuar këtë funksion, caktoni vlerat 0px me 0px.',
	'IMAGICK_PATH'				=> 'Vendodhja e imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Vendodhja e plotë e aplikacionit imagemagick, p.sh. <samp>/usr/bin/</samp>.',
	
	'MAX_ATTACHMENTS'				=> 'Maksimumi i shtojcave për postim',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimumi i shtojcave për mesazh',
	'MAX_EXTGROUP_FILESIZE'			=> 'Masa maksimale e skedarëve',
	'MAX_IMAGE_SIZE'				=> 'Dimensioni maksimal i imazheve',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Masa maksimale e imazheve të shtuara. Vendosini të dy vlerat 0px me 0px për të ç\'aktivizuar kontrollin e dimensionit.',
	'MAX_THUMB_WIDTH'				=> 'Gjerësia maksimale e thumbnail në piksel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Një thumbnail i gjeneruar nuk do të kalojë gjerësinë e caktuar këtu.',
	'MIN_THUMB_FILESIZE'			=> 'Masa minimale e thumbnail',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Mos krijo thumbnail për imazhe më të vogla se kjo.',
	'MODE_INLINE'					=> 'Përbrenda',
	'MODE_PHYSICAL'					=> 'Fizike',
	
	'NOT_ALLOWED_IN_PM'			=> 'Lejohet vetëm në postime',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nuk lejohet',
	'NOT_ASSIGNED'				=> 'I pa caktuar',
	'NO_EXT_GROUP'				=> 'Asnjë',
	'NO_EXT_GROUP_NAME'			=> 'Nuk u shkrua emri i grupit',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Asnjë grup ekzekutimi i specifikuar.',
	'NO_FILE_CAT'				=> 'Asnjë',
	'NO_IMAGE'					=> 'Asnjë imazh',
	'NO_THUMBNAIL_SUPPORT'		=> 'Mundësia për Thumbnail është ç\'aktivizuar. Për funksionimin e duhur duhet të gjëndet prapashtesa GD ose imagemagick duhet të jetë i instaluar. Të dyja nuk mund të gjënden.',
	'NO_UPLOAD_DIR'				=> 'Direktoria e ngarkimit specifikuar nga ju nuk ekziston.',
	'NO_WRITE_UPLOAD'			=> 'Direktoria e ngarkimit specifikuar nga ju nuk mund te shkruhet. Ju lutemi të ndryshoni të drejtat e kesaj kategorie që të lejoni webserverin t\'a shkruajë.',
	
	'ONLY_ALLOWED_IN_PM'	=> 'Lejohet vetëm në mesazhe private',
	'ORDER_ALLOW_DENY'		=> 'Lejo',
	'ORDER_DENY_ALLOW'		=> 'Blloko',
	
	'REMOVE_ALLOWED_IPS'		=> 'Fshi ose prano IP/emra hostesh të <em>lejuara</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Fshi ose prano IP/emra hostesh të <em>ndaluara</em>',
	
	'SEARCH_IMAGICK'				=> 'Kërko për Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Lejo/Blloko listën',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Ndrysho opsionin e paracaktuar të listës Allow/Deny kur shkarkimet e sigurta janë të aktivizuara, në <strong>lista e bardhë</strong> (Lejo) ose <strong>lista e zezë</strong> (Blloko).',
	'SECURE_DOWNLOADS'				=> 'Aktivizo Shkarkimet e Sigurta',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Me këtë opsion te aktivizuar, shkarkimet kufizohen për IP ose emra hostesh që ju caktoni.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Shkarkimet e sigurta nuk jane aktivizuar. Opsionet e mëposhtme do të aplikohen kur të aktivizohen shkarkimet e sigurta.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista e IP u azhornua me sukses.',
	'SECURE_EMPTY_REFERRER'			=> 'Lejo referimet bosh',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Shkarkimet e sigurta bazohen në referime. Doni të lejoni shkarkimin nga këto referime?',
	'SETTINGS_CAT_IMAGES'			=> 'Opsionet e kategorisë së imazheve',
	'SPECIAL_CATEGORY'				=> 'Kategori speciale',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Kategoritë speciale ndryshojnë në mënyrën se si shfaqen në postime.',
	'SUCCESSFULLY_UPLOADED'			=> 'U ngarkua me sukses.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupi i prapashtesave u shtua me sukses.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupi i prapashtesave u azhornua me sukses.',
	
	'UPLOADING_FILES'				=> 'Duke ngarkuar skedarë',
	'UPLOADING_FILE_TO'				=> 'Duke ngarkuar skedarin “%1$s” në postimin numër %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Ju nuk keni të drejtat e duhura që të ngarkoni skedarë në forum “%s”.',
	'UPLOAD_DIR'					=> 'Direktoria e ngarkimit',
	'UPLOAD_DIR_EXPLAIN'			=> 'Direktoria e ruajtjes së shtojcave. Vini re që nëse ndryshoni këtë direktori kur në të ka shtojca të ngarkuara, ju duhet të kopjoni skedarët në direktorinë e re manualisht.',
	'UPLOAD_ICON'					=> 'Ngarko ikone',
	'UPLOAD_NOT_DIR'				=> 'Vendodhja e specifikuar nga ju nuk është direktori.',
));

?>