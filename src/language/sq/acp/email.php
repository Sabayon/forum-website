<?php
/**
*
* acp_email.php [Shqip Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-05 - www.dea-portal.com
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Këtu mund të dërgoni e-mail të gjithë përdoruesve tuaj ose të gjithë përdoruesve të një grupi në veçanti, <strong>të cilët kanë opsionin për të marrë e-mail masiv të aktivizuar</strong>. Për të realizuar këtë, një e-mail do të dërgohet në adresën e-mail administrative të dhënë, dhe nga një kopje do t\'u dërgohet të gjithë përdoruesve duke përdorur BCC. Opsioni i paracaktuar është që në një e-mail të përfshihen 50 marrës. Për më tepër marrës, më tepër e-mail do të dërgohen. Nëse jeni duke u dërguar e-mail një grupi të madh përdoruesish, ju lutemi të jeni të duruar dhe mos e ndaloni faqen gjatë proçesit. Eshtë normale që një e-mail masiv të marrë pak kohë. Ju do të njoftoheni kur proçesi të ketë përfunuar.',
	'ALL_USERS'						=> 'Të gjithë përdoruesit',
	
	'COMPOSE'				=> 'E-mail i ri',
	
	'EMAIL_SEND_ERROR'		=> 'Një ose më shumë gabime gjatë dërgimit të e-mail. Ju lutemi të kontrolloni %sLog i gabimeve%s për mesazhe gabim të detajuara.',
	'EMAIL_SENT'			=> 'Mesazhi u dërgua.',
	'EMAIL_SENT_QUEUE'		=> 'Mesazhi është vënë në pritje për t\'u dërguar.',
	
	'LOG_SESSION'			=> 'Vendos seksionin e-mail në log kritik',
	
	'SEND_IMMEDIATELY'		=> 'Dërgo tani',
	'SEND_TO_GROUP'			=> 'Dërgo grupit',
	'SEND_TO_USERS'			=> 'Dërgo përdoruesve',
	'SEND_TO_USERS_EXPLAIN'	=> 'Nëse shkruani emra këtu, do të mbivendoset çdo grup i zgjedhur më lartë. Shkruani çdo emër në kryerradhë.',
	
	'MAIL_HIGH_PRIORITY'	=> 'I lartë',
	'MAIL_LOW_PRIORITY'		=> 'I ulët',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioriteti i e-mail',
	'MASS_MESSAGE'			=> 'Mesazhi juaj',
	'MASS_MESSAGE_EXPLAIN'	=> 'Vini re që ju mund të shkruani vetëm tekst bazë. Çdo gjë tjetër do të fshihet përpara dërgimit të e-mail.',
	
	'NO_EMAIL_MESSAGE'		=> 'Ju duhet të shkruani një mesazh.',
	'NO_EMAIL_SUBJECT'		=> 'Ju duhet të specifikoni një subjekt për mesazhin.',
));

?>