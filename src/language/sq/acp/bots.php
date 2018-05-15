<?php
/**
*
* acp_bots.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-06 - www.dea-portal.com
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Menaxho "Bot" motorët e kërkimit',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” ose “crawlers” janë agjentë automatik të përdorur nga motorët e kërkimit për të azhornuar bazat e tyre të informacionit. Meqënëse këta agjentë hyjnë në përdorim të mirfilltë të seksioneve, mund të çorientojnë numërimin e vizitorëve, mund të rrisin fuqinë e kërkuar për karikim dhe ndonjëherë mund të sjellin në dështim të indeksimit të faqeve në mënyrë normale. Këtu ju mund të përcaktoni një lloj të veçantë përdoruesi që mund të devijojë këto probleme.',
	'BOT_ACTIVATE'		=> 'Aktivizo',
	'BOT_ACTIVE'		=> 'Bot aktiv',
	'BOT_ADD'			=> 'Shto bot',
	'BOT_ADDED'			=> 'Bot i ri u shtua me sukses.',
	'BOT_AGENT'			=> 'Përputhja e agjentit',
	'BOT_AGENT_EXPLAIN'	=> 'Kodi që përputhet me agjentin bot të shfletuesit; lejohen përputhjet e pjesshme.',
	'BOT_DEACTIVATE'	=> 'Ç\'aktivizo',
	'BOT_DELETED'		=> 'Bot u fshi me sukses.',
	'BOT_EDIT'			=> 'Modifiko bot',
	'BOT_EDIT_EXPLAIN'	=> 'Këtu mund të shtoni ose modifikoni një bot ekzistues. Ju mund të përcaktoni një kod agjenti dhe/ose një ose më shumë adresa IP (ose hark adresash) që të përputhen. Bëni kujdes kur përcaktoni kodin e përputhjes së agjentit ose adresat. Ju gjithashtu mund të specifikoni një stil ose gjuhë që të përdorë bot për të parë bordin. Kjo gjë ju mundëson uljen e trafikut duke caktuar nje stil të thjeshtë për bot. Ju kujtojmë të caktoni të drejtat e përshtatshme për grupin e bot.',
	'BOT_LANG'			=> 'Gjuha e bot',
	'BOT_LANG_EXPLAIN'	=> 'Gjuha që i prezantohet bot ndërsa shfleton.',
	'BOT_LAST_VISIT'	=> 'Vizita e fundit',
	'BOT_IP'			=> 'Adresa IP e bot',
	'BOT_IP_EXPLAIN'	=> 'Lejohen përputjet e pjesshme, ndani adresat me presje.',
	'BOT_NAME'			=> 'Emri i bot',
	'BOT_NAME_EXPLAIN'	=> 'Përdorur vetëm për informacionin tuaj.',
	'BOT_NAME_TAKEN'	=> 'Emri është në përdorim në bordin tuaj dhe nuk mund t\'i caktohet bot.',
	'BOT_NEVER'			=> 'Asnjeherë',
	'BOT_STYLE'			=> 'Stili i bot',
	'BOT_STYLE_EXPLAIN'	=> 'Stili i përdorur nga bot për bordin.',
	'BOT_UPDATED'		=> 'Bot ekzistues u azhornua me sukses.',
	
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agjenti bot që shtuat është i ngjashëm me një që është tashmë në përdorim. Ju lutemi të rregulloni agjentin për këtë bot.',
	'ERR_BOT_NO_IP'				=> 'Adresa IP që shkruat ishte e gabuar ose emri i hostit nuk mund të gjendej.',
	'ERR_BOT_NO_MATCHES'		=> 'Ju duhet të shtoni të paktën një agjent ose IP për këtë përputhje bot.',
	
	'NO_BOT'		=> 'Nuk u gjet asnjë bot me ID e specifikuar.',
	'NO_BOT_GROUP'	=> 'E pamundur gjetja e grupit bot special.',
));

?>