<?php
/**
*
* viewforum [Ελληνικά (Ελλάδα)]
*
* @package language
* @version $Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από τον Γιάννη Ορφανίδη (Jorfan81@hotmail.com) και την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Giannis Orfanidis Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
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

//
// TRANSLATION DETAILS
//
// Version: 1.0.4
// Date: 09/04/2008 22:35:21
// Author: phpBB.fr
// Website: http://www.phpbb.fr/
//
// TRANSLATION LICENSE
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, version 2 of the License.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see http://opensource.org/licenses/gpl-license.php.
//
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
//

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Ενεργά θέματα',
	'ANNOUNCEMENTS'			=> 'Ανακοινώσεις',

	'FORUM_PERMISSIONS'		=> 'Δικαιωματα Δ. Συζητησης',

	'ICON_ANNOUNCEMENT'		=> 'Ανακοίνωση',
	'ICON_STICKY'			=> 'Σημείωση',

	'LOGIN_NOTIFY_FORUM'	=> 'Έχετε ειδοποιηθεί για αυτή τη Δ. Συζήτηση, παρακαλώ συνδεθείτε για τη δείτε.',

	'MARK_TOPICS_READ'		=> 'Μαρκάρισμα ώς αναγνωσμένα',

	'NEW_POSTS_HOT'			=> 'Νέες δημοσιεύσεις [ Δημοφιλή ]',
	'NEW_POSTS_LOCKED'		=> 'Νέες δημοσιεύσεις [ κλειδωμένα ]',
	'NO_NEW_POSTS_HOT'		=> 'Χωρίς νέες δημοσιεύσεις [ Δημοφιλή ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Χωρίς νέες δημοσιεύσεις [ Κλειδωμένα ]',
	'NO_READ_ACCESS'		=> 'Δέν έχετε τα κατάλληλα δικαιώματα για να διαβάσετε τις δημοσιεύσεις σε αυτή τη Δ. Συζήτηση.',

	'POST_FORUM_LOCKED'		=> 'Η Δ. Συζήτηση είναι κλειδωμένη',

	'TOPICS_MARKED'			=> 'Οι δημοσιεύσεις σε αυτή τη Δ. Συζήτηση έχουν σημειωθεί ώς αναγνωσμένες.',

	'VIEW_FORUM'			=> 'Προβολή Δ. Συζήτησης',
	'VIEW_FORUM_TOPIC'		=> '1 θέμα',
	'VIEW_FORUM_TOPICS'		=> '%d θέματα',
));

?>