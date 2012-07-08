<?php
/**
*
* viewtopic [Ελληνικά (Ελλάδα)]
*
* @package language
* @version $Id: viewtopic.php 8775 2008-08-21 15:41:12Z Kellanved $
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
// Date: 09/04/2008 22:36:07
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
	'ATTACHMENT'						=> 'Συννημένο',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Η λειτουργία των συννημένων έχει απενεργοποιηθεί.',

	'BOOKMARK_ADDED'		=> 'Το θέμα προστέθηκε στα αγαπημένα.',
	'BOOKMARK_ERR'          => 'Η Προσθήκη σελιδοδείκτη του θέματος απέτυχε. Παρακαλώ δοκιμάστε πάλι.',
	'BOOKMARK_REMOVED'		=> 'Το θέμα διαγράφηκε απο τα αγαπημένα.',
	'BOOKMARK_TOPIC'		=> 'Προσθήκη θέματος στα αγαπημένα',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Διαγραφή απο τα αγαπημένα',
	'BUMPED_BY'				=> 'Τελευταία σύγκρουση απο %1$s στις %2$s.',
	'BUMP_TOPIC'			=> 'Θέμα σύγκρουσης',

	'CODE'					=> 'Κώδικας',

	'DELETE_TOPIC'			=> 'Διαγραφή Θέματος',
	'DOWNLOAD_NOTICE'		=> 'Δέν έχετε τα κατάλληλα δικαιώματα να δείτε τα αρχεία σε αυτή τη δημοσίευση.',

	'EDITED_TIMES_TOTAL'	=> 'Τελευταία επεξεργασία απο %1$s την %2$s, επεξεργάστηκε %3$d φορές συνολικά.',
	'EDITED_TIME_TOTAL'		=> 'Τελευταία επεξεργασία απο %1$s την %2$s, επεξεργάστηκε %3$d φορές συνολικά.',
	'EMAIL_TOPIC'	    	=> 'Αποστολή με Ηλ.ταχυδρομείο',
	'ERROR_NO_ATTACHMENT'	=> 'το επιλεγμένο αρχείο δέν υπάρχει.',

	'FILE_NOT_FOUND_404'	=> 'Το αρχείο <strong>%s</strong> δέν υπάρχει.',
	'FORK_TOPIC'			=> 'Αντιγραφή θέματος',

	'LINKAGE_FORBIDDEN'		=> 'Δέν έχετε δικαίωμα να δείτε, κατεβάσετε ή συνδεθείτε απο/σε αυτή τη σελίδα.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Έχετε ειδοποιηθεί γιαυτό το θέμα, παρακαλώ συνδεθείτε για να το δείτε.',
	'LOGIN_VIEWTOPIC'		=> 'Το φορουμ απαιτεί να είστε εγγεγραμμένο μέλος και συνδεδεμένοι για να δείτε αυτό το θέμα.',

	'MAKE_ANNOUNCE'				=> 'Αλλαγή σε “Ανακοίνωση”',
	'MAKE_GLOBAL'				=> 'Αλλαγή σε “Γενικό”',
	'MAKE_NORMAL'				=> 'Αλλαγή σε “Κανονικό”',
	'MAKE_STICKY'				=> 'Change to “Σημείωση”',
	'MAX_OPTIONS_SELECT'		=> 'Μπορείτε να επιλέξετε μέχρι και<strong>%d</strong> επιλογές',
	'MAX_OPTION_SELECT'			=> 'Μπορείτε να επιλέξετε <strong>1</strong> επιλογή',
	'MISSING_INLINE_ATTACHMENT'	=> 'Το συννημένο <strong>%s</strong> δέν είναι πλέον διαθέσιμο',
	'MOVE_TOPIC'				=> 'Μετακίνηση θέματος',

	'NO_ATTACHMENT_SELECTED'=> 'Δέν έχετε επιλέξει κάποιο συννημένο για να κατεβάσετε ή να δείτε.',
	'NO_NEWER_TOPICS'		=> 'Δέν υπάρχουν νεότερα θέματα σε αυτή τη Δ. Συζήτηση.',
	'NO_OLDER_TOPICS'		=> 'Δέν υπάρχουν παλαιότερα θέματα σε αυτή τη Δ. Συζήτηση.',
	'NO_UNREAD_POSTS'		=> 'Δέν υπάρχουν αδιάβαστα θέματα σε αυτή τη Δ. Συζήτηση.',
	'NO_VOTE_OPTION'		=> 'Πρέπει να επιλέξετε τουλάχιστον μία επιλογή όταν ψηφίζετε.',
	'NO_VOTES'				=> 'Χωρίς ψήφους',

	'POLL_ENDED_AT'			=> 'Η ψηφοφορία έληξε την %s',
	'POLL_RUN_TILL'			=> 'Η ψηφοφορία διαρκεί μέχρι %s',
	'POLL_VOTED_OPTION'		=> 'Έχετε ψηφίσει αυτή την επιλογή',
	'PRINT_TOPIC'			=> 'Προβολή εκτύπωσης',

	'QUICK_MOD'				=> 'Γρήγορα εργαλεία',
	'QUOTE'					=> 'Παράθεση',

	'REPLY_TO_TOPIC'		=> 'Απάντηση στο θέμα',
	'RETURN_POST'			=> '%sΕπιστροφή στο θέμα%s',

	'SUBMIT_VOTE'			=> 'Καταχώρηση ψήφου',

	'TOTAL_VOTES'			=> 'Σύνολο ψήφων',

	'UNLOCK_TOPIC'			=> 'Ξεκλείδωμα θέματος',

	'VIEW_INFO'				=> 'Λεπτομέρειες δημοσίευσης',
	'VIEW_NEXT_TOPIC'		=> 'Επόμενο θέμα',
	'VIEW_PREVIOUS_TOPIC'	=> 'Προηγούμενο Θέμα',
	'VIEW_RESULTS'			=> 'Εμφάνιση αποτελεσμάτων',
	'VIEW_TOPIC_POST'		=> '1 δημοσίευση',
	'VIEW_TOPIC_POSTS'		=> '%d δημοσιεύσεις',
	'VIEW_UNREAD_POST'		=> 'Πρώτη αδιάβαστη δημοσίευση',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Η ψήφος σας έχει καταχωρηθεί.',
	'VOTE_CONVERTED'		=> 'Η Αλλαγή της ψήφου δεν υποστηρίζεται για δημοψηφίσματα που έχουν μετατραπεί.',

));

?>