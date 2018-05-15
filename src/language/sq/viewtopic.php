<?php
/**
*
* viewtopic.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-26 - www.dea-portal.com
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
	'ATTACHMENT'						=> 'Shtojca',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Mundësia për shtojca është ç\'aktivizuar.',
	
	'BOOKMARK_ADDED'		=> 'Tema u shtua tek Temat e Preferuara me sukses.',
	'BOOKMARK_ERR'			=> 'Shtimi i temës tek Temat e Preferuara dështoi. Provojeni përsëri.',
	'BOOKMARK_REMOVED'		=> 'Tema u hoq nga Temat e Preferuara me sukses',
	'BOOKMARK_TOPIC'		=> 'Shto Temë të Preferuar',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Hiq nga Tema të Preferuara',
	'BUMPED_BY'				=> 'Lëvizja e fundit sipër e temës nga %1$s më %2$s.',
	'BUMP_TOPIC'			=> 'Lëviz temën sipër',
	
	'CODE'					=> 'Kodi',
	
	'DELETE_TOPIC'			=> 'Fshi temën',
	'DOWNLOAD_NOTICE'		=> 'Ju nuk keni të drejtë të shikoni skedarët që i janë shtuar këtij postimi.',
	
	'EDITED_TIMES_TOTAL'	=> 'Modifikimi i fundit nga %1$s më %2$s, modifikuar %3$d herë ne total.',
	'EDITED_TIME_TOTAL'		=> 'Modifikimi i fundit nga %1$s më %2$s, modifikuar %3$d herë ne total.',
	'EMAIL_TOPIC'			=> 'Dërgo e-mail një miku',
	'ERROR_NO_ATTACHMENT'	=> 'Shtojcat e zgjedhura nuk ekzistojnë më.',
	
	'FILE_NOT_FOUND_404'	=> 'Skedari <strong>%s</strong> nuk ekziston.',
	'FORK_TOPIC'			=> 'Kopjo temën',
	
	'LINKAGE_FORBIDDEN'		=> 'Ju nuk jeni i autorizuar të shikoni ose shkarkoni nga/në ketë sit.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Ju jeni lajmëruar rreth kësaj teme, ju lutem identifikohuni për ta parë.',
	'LOGIN_VIEWTOPIC'		=> 'Bordi kërkon që ju të jeni i regjistruar dhe i identifikuar për të parë këtë temë.',
	
	'MAKE_ANNOUNCE'				=> 'Ndrysho në “Lajmërime”',
	'MAKE_GLOBAL'				=> 'Ndrysho në “Globale”',
	'MAKE_NORMAL'				=> 'Ndrysho në “Temë standarte”',
	'MAKE_STICKY'				=> 'Ndrysho në “Kryetemë”',
	'MAX_OPTIONS_SELECT'		=> 'Ju mund të zgjidhni deri në <strong>%d</strong> opsione',
	'MAX_OPTION_SELECT'			=> 'Ju mund të zgjidhni <strong>1</strong> opsion',
	'MISSING_INLINE_ATTACHMENT'	=> 'Shtojca <strong>%s</strong> nuk është më e mundshme',
	'MOVE_TOPIC'				=> 'Lëviz temën',
	
	'NO_ATTACHMENT_SELECTED'=> 'Ju nuk keni zgjedhur një shtojcë për të shkarkuar ose për të parë.',
	'NO_NEWER_TOPICS'		=> 'Nuk ka tema më të reja në këtë forum.',
	'NO_OLDER_TOPICS'		=> 'Nuk ka tema më të vjetra në këtë forum.',
	'NO_UNREAD_POSTS'		=> 'Nuk ka postime të reja të palexuara për këtë temë.',
	'NO_VOTE_OPTION'		=> 'Duhet të specifikoni një opsion kur votoni.',
	'NO_VOTES'				=> 'S\'ka votime',
	
	'POLL_ENDED_AT'			=> 'Sondazhi u mbyll më %s',
	'POLL_RUN_TILL'			=> 'Sondazhi vazhdon deri më %s',
	'POLL_VOTED_OPTION'		=> 'Ju votuat për këtë opsion',
	'PRINT_TOPIC'			=> 'Printo pamjen',
	
	'QUICK_MOD'				=> 'Veglat e shpejta',
	'QUOTE'					=> 'Cito',
	
	'REPLY_TO_TOPIC'		=> 'Përgjigju temës',
	'RETURN_POST'			=> '%sKthehu tek postimi%s',
	
	'SUBMIT_VOTE'			=> 'Voto',
	
	'TOTAL_VOTES'			=> 'Totali votave',
	
	'UNLOCK_TOPIC'			=> 'Zhblloko temë',
	
	'VIEW_INFO'				=> 'Posto detajet',
	'VIEW_NEXT_TOPIC'		=> 'Tema në Vazhdim',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tema e Mëparshme',
	'VIEW_RESULTS'			=> 'Shiko rezultatet',
	'VIEW_TOPIC_POST'		=> '1 postim',
	'VIEW_TOPIC_POSTS'		=> '%d postime',
	'VIEW_UNREAD_POST'		=> 'Postimi i parë i palexuar',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Vota juaj është rregjistruar.',
	'VOTE_CONVERTED'		=> 'Ndërrimi i votës nuk është i mundur për sondazhet e konvertuara.',
	
));

?>