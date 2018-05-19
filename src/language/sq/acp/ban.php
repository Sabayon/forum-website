<?php
/**
*
* acp_ban.php [Albanian]
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 orë',
	'30_MINS'		=> '30 minuta',
	'6_HOURS'		=> '6 orë',
	
	'ACP_BAN_EXPLAIN'	=> 'Këtu mund të kontrolloni përjashtimin e përdoruesve sipas emrit, IP ose adresës e-mail. Këto mënyra ndalojnë një përdorues që të hyjë në çdo pjesë të bordit tuaj. Ju mund të jepni një arsye të shkurtër (maksimumi 3000 karaktere) për përjashtimin nëse doni. Kjo do të shfaqet në admin log. Gjithashtu mund të përcaktohet edhe kohezgjatja e përjashtimit. Nëse doni që përjashtimi të mbarojë në një datë të caktuar zgjidhni <span style="text-decoration: underline;">deri më -&gt;</span> për kohëzgjatjen e përjashtimit dhe shkruani datën në formatin <kbd>YYYY-MM-DD</kbd>.',
	
	'BAN_EXCLUDE'			=> 'Hiq nga përjashtimi',
	'BAN_LENGTH'			=> 'Kohëzgjatja e përjashtimit',
	'BAN_REASON'			=> 'Arsyeja për përjashtimin',
	'BAN_GIVE_REASON'		=> 'Arsyeja e shfaqur të përjashtuarit',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista e përjashtimeve u azhornua me sukses.',
	
	'EMAIL_BAN'					=> 'Përjashto një ose më shumë adresa e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivizo këtë për të hequr adresat e-mail nga të gjithë përjashtimet e tanishme.',
	'EMAIL_BAN_EXPLAIN'			=> 'Për të specifikuar më shumë se një adresë e-mail shkruaj çdonjërën prej tyre në kryerradhë. Për të përputhur adresat pjesërisht përdor * si Joly/wildcard, p.sh. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etj.',
	'EMAIL_NO_BANNED'			=> 'Asnje adresë e-mail e përjashtuar',
	'EMAIL_UNBAN'				=> 'Hiq e-maile nga përjashtimi',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Ju mund të hiqni përjashtimin për disa adresa e-mail njëherësh duke përdorur kombinimin e përshtatshëm të mausit dhe tastierës për kompjuterin dhe shfletuesin tuaj. Adresat e-mail të veçuara janë në sfond gri.',
	
	'IP_BAN'					=> 'Përjashto një ose më shumë IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivizo këtë për të hequr IP nga të gjithë përjashtimet e tanishme.',
	'IP_BAN_EXPLAIN'			=> 'Për të specifikuar IP ose emra hostesh të ndryshme shkruaj çdonjërën prej tyre në kryerradhë. Për të specifikuar një hark adresash IP ndani fillimin dhe fundin me vijë në mes (-), për të specifikuar një Joly/wildcard përdor “*”.',
	'IP_HOSTNAME'				=> 'Adresa IP ose emra hostesh',
	'IP_NO_BANNED'				=> 'Asnjë adresë IP e përjashtuar',
	'IP_UNBAN'					=> 'Hiq përjashtimin për IP',
	'IP_UNBAN_EXPLAIN'			=> 'Ju mund të hiqni përjashtimin për disa adresa IP njëherësh duke përdorur kombinimin e përshtatshëm të mausit dhe tastierës për kompjuterin dhe shfletuesin tuaj. Adresat IP të veçuara janë në sfond gri.',
	
	'LENGTH_BAN_INVALID'		=> 'Data duhet të jetë në formatin <kbd>YYYY-MM-DD</kbd>.',
	
	'PERMANENT'		=> 'I përkohshëm',
	
	'UNTIL'						=> 'Deri më',
	'USER_BAN'					=> 'Përjashto një ose më shumë pseudonime',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivizo këtë për të hequr përdoruesit nga të gjithë përjashtimet e tanishme.',
	'USER_BAN_EXPLAIN'			=> 'Ju mund të përjashtoni disa përdorues njëherësh duke shkruar emrin e secilit në kryerradhë. Mund të përdorni mënyrën e thjeshtë <span style="text-decoration: underline;">Gjej një antar</span> për të kërkuar dhe shtuar një ose më shumë përdorues në listë automatikisht.',
	'USER_NO_BANNED'			=> 'Asnjë pseudonim i përjashtuar',
	'USER_UNBAN'				=> 'Hiq përjashtimin për pseudonime',
	'USER_UNBAN_EXPLAIN'		=> 'Ju mund të hiqni përjashtimin për disa përdorues njëherësh duke përdorur kombinimin e përshtatshëm të mausit dhe tastierës për kompjuterin dhe shfletuesin tuaj. Përdoruesit e veçuar janë në sfond gri.',
));

?>