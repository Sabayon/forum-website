<?php
/** 
*
* viewtopic [Catalan]
*
* @package language
* @version $Id: viewtopic.php 8775 2008-08-21 15:41:12Z Kellanved $
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
	'ATTACHMENT'						=> 'Fitxer adjunt',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'La funció de fitxers adjunts està inhabilitada.',

	'BOOKMARK_ADDED'		=> 'S’ha afegit el tema a les adreces d’interès correctament.',
	'BOOKMARK_ERR'			=> 'No s’ha pogut afegir el tema a les adreces d’interès. Intenteu-ho de nou.',
	'BOOKMARK_REMOVED'		=> 'S’ha tret el tema de les adreces d’interès correctament.',
	'BOOKMARK_TOPIC'		=> 'Afegeix aquest tema a les adreces d’interès',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Treu aquest de les adreces d’interès',
	'BUMPED_BY'				=> '%1$s l’ha reactivat per darrera vegada el dia: %2$s.',
	'BUMP_TOPIC'			=> 'Reactiva el tema',

	'CODE'					=> 'Codi',
	'COLLAPSE_QR'			=> 'Oculta la reposta ràpida',

	'DELETE_TOPIC'			=> 'Elimina el tema',
	'DOWNLOAD_NOTICE'		=> 'No teniu els permisos necessaris per veure els fitxers adjunts d’aquesta entrada.',

	'EDITED_TIMES_TOTAL'	=> '%1$s l’ha editat per darrera vegada el dia: %2$s, en total s’ha editat %3$d vegades.',
	'EDITED_TIME_TOTAL'		=> '%1$s l’ha editat per darrera vegada el dia: %2$s, en total s’ha editat %3$d vegada.',
	'EMAIL_TOPIC'			=> 'Envia’l per correu electrònic a un amic',
	'ERROR_NO_ATTACHMENT'	=> 'El fitxer adjunt seleccionat ja no existeix.',

	'FILE_NOT_FOUND_404'	=> 'El fitxer <strong>%s</strong> no existeix.',
	'FORK_TOPIC'			=> 'Copia el tema',
	'FULL_EDITOR'			=> 'Editor complet',

	'LINKAGE_FORBIDDEN'		=> 'No esteu autoritzat a veure, baixar o enllaçar des de/cap a aquest lloc web.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Heu rebut un avís sobre aquest tema, si us plau inicieu la sessió per veure’l.',
	'LOGIN_VIEWTOPIC'		=> 'El fòrum requereix ques esteu registrat i amb la sessió iniciada per veure aquest tema.',

	'MAKE_ANNOUNCE'				=> 'Canvia’l a “Avís”',
	'MAKE_GLOBAL'				=> 'Canvia’l a “Global”',
	'MAKE_NORMAL'				=> 'Canvia’l a “Tema estàndard”',
	'MAKE_STICKY'				=> 'Canvia’l a “Tema recurrent”',
	'MAX_OPTIONS_SELECT'		=> 'Podeu seleccionar fins a <strong>%d</strong> opcions',
	'MAX_OPTION_SELECT'			=> 'Podeu seleccionar <strong>1</strong> opció',
	'MISSING_INLINE_ATTACHMENT'	=> 'El fitxer adjunt <strong>%s</strong> ja no està disponible',
	'MOVE_TOPIC'				=> 'Desplaça el tema',

	'NO_ATTACHMENT_SELECTED'=> 'No heu seleccionat cap fitxer adjunt per baixar-vos o visualitzar.',
	'NO_NEWER_TOPICS'		=> 'No hi ha temes més recents en aquest fòrum.',
	'NO_OLDER_TOPICS'		=> 'No hi ha temes més antics en aquest fòrum.',
	'NO_UNREAD_POSTS'		=> 'No hi ha entrades noves no llegides en auest tema.',
	'NO_VOTE_OPTION'		=> 'Quan voteu heu de triar una opció.',
	'NO_VOTES'				=> 'No hi ha cap vot',

	'POLL_ENDED_AT'			=> 'L’enquesta ha acabat el %s',
	'POLL_RUN_TILL'			=> 'L’enquesta dura fins %s',
	'POLL_VOTED_OPTION'		=> 'Heu votat per aquesta opció',
	'PRINT_TOPIC'			=> 'Vista d’impressió',

	'QUICK_MOD'				=> 'Eines de moderació ràpida',
	'QUICKREPLY'			=> 'Resposta ràpida',
	'QUOTE'					=> 'Citació',

	'REPLY_TO_TOPIC'		=> 'Respon al tema',
	'RETURN_POST'			=> '%sTorna a l’entrada%s',

	'SHOW_QR'				=> 'Resposta ràpida',
	'SUBMIT_VOTE'			=> 'Emet el vot',

	'TOTAL_VOTES'			=> 'Vots totals',

	'UNLOCK_TOPIC'			=> 'Desbloqueja el tema',

	'VIEW_INFO'				=> 'Detalls de l’entrada',
	'VIEW_NEXT_TOPIC'		=> 'Tema següent',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tema precedent',
	'VIEW_RESULTS'			=> 'Mostra els resultats',
	'VIEW_TOPIC_POST'		=> '1 entrada',
	'VIEW_TOPIC_POSTS'		=> '%d entrades',
	'VIEW_UNREAD_POST'		=> 'Primera entrada no llegida',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'S’ha emès el vostre vot.',
	'VOTE_CONVERTED'		=> 'No es permet el canvi de vot en enquestes convertides des d’un altre tipus de fòrum.',

));

?>