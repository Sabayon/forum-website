<?php
/**
*
* acp_prune.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-07 - www.dea-portal.com
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Këtu mund të fshini (ose ç\'aktivizoni) përdorues nga bordi juaj. Kjo mund të bëhet në disa mënyra; nga numri i posimeve, aktiviteti i fundit, etj. Secili nga këta kritere mund të kombinohet, p.sh. ju mund të fshini automatikisht përdoruesit që kanë qënë aktiv për herë të fundit përpara 2002-01-01 dhe me më pak se 10 postime. Ose mund të shkruani një listë përdoruesish në kutizën e tekstit, çdo kriter i shkruar do të injorohet. Bëni kujdes me këtë lehtësim! Nëse një përdorues fshihet, veprimi nuk ka më kthim mbrapa.',
	
	'DEACTIVATE_DELETE'			=> 'Ç\'aktivizo ose fshi',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vendos nëse përdoruesit do të ç\'aktivizohen apo do të fshihen, nuk ka kthim mbrapa!',
	'DELETE_USERS'				=> 'Fshi',
	'DELETE_USER_POSTS'			=> 'Fshi automatikisht postimet e përdoruesve',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Fshin postimet e bëra nga përdoruesit e fshirë, nuk ka asnjë efekt nëse përdoruesit janë të ç\'aktivizuar.',
	
	'JOINED_EXPLAIN'			=> 'Shkruani datën në formatin <kbd>YYYY-MM-DD</kbd>.',
	
	'LAST_ACTIVE_EXPLAIN'		=> 'Shkruani datën në formatin <kbd>YYYY-MM-DD</kbd>.',
	
	'PRUNE_USERS_LIST'				=> 'Përdoruesit që duhet të fshihen automatikisht',
	'PRUNE_USERS_LIST_DELETE'		=> 'Me kriterin e zgjedhur për fshirjen automatike të përdoruesve, llogaritë e mëposhte do të eleminohen.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Me kriterin e zgjedhur për fshirjen automatike të përdoruesve, llogaritë e mëposhtme do të ç\'aktivizohen.',
	
	'SELECT_USERS_EXPLAIN'		=> 'Shkruani këtu psudonime specifike, do të përdoren sipas preferencave të kritereve më sipër.',
	
	'USER_DEACTIVATE_SUCCESS'	=> 'Përdoruesit e zgjedhur u ç\'aktivizuan me sukses.',
	'USER_DELETE_SUCCESS'		=> 'Përdoruesit e zgjedhur u fshinë me sukses.',
	'USER_PRUNE_FAILURE'		=> 'Asnje përdorues nuk përputhet me kriteret e zgjedhura.',
	
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Data e shkruar është gabim, formati i duhur është <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ky funksion do te fshijë çdë teme e cila nuk është parë ose në të cilën nuk është postuar për një numër të caktuar ditësh që ju zgjidhni. Nëse nuk shkruani një numër, atherë të gjitha temat do të fshihen. Në mënyrë të paracaktuar, nuk do të fshihen temat që përmbajnë sondazhe akoma aktive dhe as lajmërimet ose kryetemat.',
	
	'FORUM_PRUNE'		=> 'Fshirja automatike e forumeve',
	
	'NO_PRUNE'			=> 'Asnjë forum objekt i fshirjes automatike.',
	
	'SELECTED_FORUM'	=> 'Forumi i zgjedhur',
	'SELECTED_FORUMS'	=> 'Forumet e zgjedhur',
	
	'POSTS_PRUNED'					=> 'Postime objekt i fshirjes automatike',
	'PRUNE_ANNOUNCEMENTS'			=> 'Lajmërime objekt i fshirjes automatike',
	'PRUNE_FINISHED_POLLS'			=> 'Sondazhe të mbyllur objekt i fshirjes automatike',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Fshin temat që përmbajnë sondazhe të cilat kanë mbaruar.',
	'PRUNE_FORUM_CONFIRM'			=> 'Jeni i sigurt që doni të fshini automatikisht forumet e zgjedhur me opsionet e specifikuara? Nëse fshihen, nuk ka asnjë mënyrë kthimi prapa.',
	'PRUNE_NOT_POSTED'				=> 'Ditë nga postimi i fundit',
	'PRUNE_NOT_VIEWED'				=> 'Ditë nga shikimi i fundit',
	'PRUNE_OLD_POLLS'				=> 'Fshirja e sondazheve të vjetër',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Fshin temat që përmbajnë sondazhe në të cilat nuk është votuar për një periudhë të caktuar.',
	'PRUNE_STICKY'					=> 'Kryetemat objekt i fshirjes automatike',
	'PRUNE_SUCCESS'					=> 'Fshirja automatike e forumeve u bë me sukses.',
	
	'TOPICS_PRUNED'		=> 'Temat u fshinë automatikisht',
));

?>