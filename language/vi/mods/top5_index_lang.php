<?php
/**
* Top 5 sur Index [francais]
*
* @package language anglais
* @version $Id: location.php,v 1.1 2007/01/19 02:50:26 canver Exp $
* @copyright (c) 2007 http://sjpphpbb.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TOP5_LAST_NEWS' => 'TIN TỨC Ý TƯỞNG & SÁNG TẠO MỚI',
	'TOP5_LAST_FEATURED' => 'Ý TƯỞNG & SÁNG TẠO NỔI BẬC',
	'TOP5_LAST_DISCUSSION' => 'THẢO LUẬN MỚI TỪ DIỄN ĐÀN',
	'TOP5_REPLY' => 'NĂNG ĐỘNG NHẤT',
	'TOP5_LAST_MEMBER' => 'THÀNH VIÊN MỚI',
	'TOP5_NUMBER_VIEW' => 'XEM',
	'TOP5_EXP' => 'ĐƯỢC XEM NHIỀU NHẤT',
	'TOP5_NUMBER'=>'',
	'TOP5_JOINED'=>'',
));

?>