<?php
/**
*
* acp_email [Hungarian]
*
* @package language
* @version $Id: email.php 197 2009-10-18 20:12:18Z fberci $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Itt egy e-mailt küldhetsz az összes olyan felhasználónak vagy egy meghatározott csoport olyan tagjainak, <strong>akinek be van kapcsolva a csoport e-mail fogadása beállítása</strong>. Ez a következő módon fog történni: a megadott adminisztrációs e-mail címre egy e-mail kerül kiküldésre, és a címzettek titkos másolatot kapnak ebből a levélből. Az alap beállítás szerint egy levélben csak 50 címzett fog szerepelni, több címzettnél több e-mail kerül kiküldésre. Ha sok embernek küldesz e-mailt, az űrlap elküldése után, kérünk, légy türelmes, ne szakítsd meg az oldal töltését félúton. Teljesen normális, hogy a csoportos e-mail küldése hosszú ideig tart; amint a szkript befejezte futását, értesítve leszel.',
	'ALL_USERS'						=> 'Összes felhasználó',

	'COMPOSE'				=> 'Üzenet írása',

	'EMAIL_SEND_ERROR'		=> 'Az e-mail küldése során fellépett egy vagy több hiba. A pontos hibaüzenetről, kérünk, tájékozódj a %shibanaplóban%s.',
	'EMAIL_SENT'			=> 'Az üzenet elküldésre került.',
	'EMAIL_SENT_QUEUE'		=> 'Az üzenet bekerült az elküldésre váró e-mailek sorába.',

	'LOG_SESSION'			=> 'E-mail munkamenet naplózása a kritikus hibák naplóba',

	'SEND_IMMEDIATELY'		=> 'Küldés azonnal',
	'SEND_TO_GROUP'			=> 'Címzett csoport',
	'SEND_TO_USERS'			=> 'Címzett felhasználók',
	'SEND_TO_USERS_EXPLAIN'	=> 'Az itt megadott felhasználónevek felülírják a feljebb kiválasztott csoportot. Minden felhasználónevet új sorba írj.',

	'MAIL_HIGH_PRIORITY'	=> 'Nagy',
	'MAIL_LOW_PRIORITY'		=> 'Kicsi',
	'MAIL_NORMAL_PRIORITY'	=> 'Normális',
	'MAIL_PRIORITY'			=> 'Levél fontossága',
	'MASS_MESSAGE'			=> 'Üzenet',
	'MASS_MESSAGE_EXPLAIN'	=> 'Kérjük, vedd figyelembe, csak sima szöveget adhatsz meg. Az elküldés előtt minden kód eltávolításra kerül.',

	'NO_EMAIL_MESSAGE'		=> 'Meg kell adnod az üzenetet.',
	'NO_EMAIL_SUBJECT'		=> 'Meg kell adnod az üzenet témáját.',
));

?>
