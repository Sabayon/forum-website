<?php
/**
*
* groups.php [﻿Greek]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
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
// Date: 09/04/2008 22:04:45
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
	'CANNOT_JOIN_GROUP'	=> 'Αδύνατη η συμμετοχή στην ομάδα αυτή. Μπορείτε μόνο να συμμετάσχετε σε μία ανοιχτή ομάδα.',
	'CANNOT_RESIGN_GROUP'	=> 'Δεν είναι δυνατή η παραίτηση από αυτή την ομάδα. Μπορείτε μόνο να παραιτηθείτε από μία ελεύθερη - ανοιχτή ομάδα.',
	'ALREADY_DEFAULT_GROUP'	=> 'Η επιλεγμένη ομάδα είναι ήδη η προεπιλεγμενη ομάδα σας.',
	'ALREADY_IN_GROUP'	=> 'Είστε ήδη μέλος αυτής της ομάδας.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ζητήσατε ήδη να συμμετάσχετε',
	'CHANGED_DEFAULT_GROUP'	=> 'Αλλάξατε επιτυχώς την προεπιλεγμένη ομάδα σας.',
	'GROUP_AVATAR'	=> 'Ομάδα αβαταρ',
	'GROUP_CHANGE_DEFAULT'	=> 'Είστε βέβαιοι ότι εσείς θέλετε να αλλάξετε την ιδιότητα μέλους προεπιλογής σας στην ομάδα “%s”;',
	'GROUP_CLOSED'	=> 'Κλειστή',
	'GROUP_DESC'	=> 'Περιγραφή Ομάδας',
	'GROUP_HIDDEN'	=> 'Κρυμμένη',
	'GROUP_INFORMATION'	=> 'Πληροφορίες Ομάδας μελών',
	'GROUP_IS_CLOSED'	=> 'Αυτή είναι μία κλειστή ομάδα, τα νέα μέλη μπορούν μόνο να συμμετέχουν έπειτα απο πρόσκληση ενός διαχειριστή ομάδας.',
	'GROUP_IS_FREE'	=> 'Αυτή είναι μία ανοικτή ομάδα, όλα τα νέα μέλη μπορούν να συμμετέχουν σε αυτή.',
	'GROUP_IS_HIDDEN'	=> 'Αυτή είναι μία κρυφή ομάδα, μόνο τα μέλη αυτής της ομάδας μπορούν να δουν τα μέλη της.',
	'GROUP_IS_OPEN'	=> 'Αυτή είναι μία ανοικτή ομάδα, τα μέλη μπορούν να ζητήσουν να συμμετέχουν σε αυτή.',
	'GROUP_IS_SPECIAL'	=> 'Αυτή είναι μία ειδική ομάδα, οι ομάδες αυτές ρυθμίζονται μόνο από τους διαχειριστές της κοινότητας αυτής.',
	'GROUP_JOIN'	=> 'Επιλογή Ομάδας',
	'GROUP_JOIN_CONFIRM'	=> 'Είστε βέβαιοι εσείς θέλετε να ενταχθείτε στην επιλεγμένη ομάδα;',
	'GROUP_JOIN_PENDING'	=> 'Αίτημα για να ένταξη στην ομάδα',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Είστε βέβαιοι ότι εσείς θέλετε να ζητήσετε να ενταχθείτε στην επιλεγμένη ομάδα;',
	'GROUP_JOINED'	=> 'Έχετε ενταχθεί επιτυχώς στην επιλεγμένη ομάδα.',
	'GROUP_JOINED_PENDING'	=> 'Η αίτηση για ένταξη στην ομάδα έγινε με επιτυχία. Παρακαλώ περιμένετε έναν συντονιστή ομάδας να εγκρίνει την ιδιότητα μέλους σας.',
	'GROUP_LIST'	=> 'Διαχείριση μελών',
	'GROUP_MEMBERS'	=> 'Ομάδα μελών',
	'GROUP_NAME'	=> 'Όνομα Ομάδας',
	'GROUP_OPEN'	=> 'Ανοικτή',
	'GROUP_RANK'	=> 'Βαθμός Ομάδας',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Παραίτηση από την ομάδα',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Είστε βέβαιοι ότι θέλετε να παραιτηθείτε από την επιλεγμένη ομάδα;',
	'GROUP_RESIGN_PENDING'	=> 'Παραιτηθείτε από μια εκκρεμή ιδιότητα μέλους ομάδας',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Είστε βέβαιοι οτι θέλετε να παραιτηθείτε από την εκκρεμή ιδιότητα μέλους σας από την επιλεγμένη ομάδα;',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Η παραίτησή σας από την επιλεγμένη ομάδα έγινε επιτυχώς.',
	'GROUP_RESIGNED_PENDING'	=> 'Η εκκρεμής ιδιότητα μέλους σας αφαιρέθηκε επιτυχώς από την επιλεγμένη ομάδα.',
	'GROUP_TYPE'	=> 'Τύπος Ομάδας',
	'GROUP_UNDISCLOSED'	=> 'Κρυφή ομάδα',
	'FORUM_UNDISCLOSED'	=> 'Συντονίστε κρυμμένες Δ. Συζητήσεις ',
	'LOGIN_EXPLAIN_GROUP'	=> 'Πρέπει να είστε συνδεδεμένος για να δείτε τις πληροφορίες της ομάδας.',
	'NO_LEADERS'	=> 'Δεν είστε συντονιστής σε καμία ομάδα.',
	'NOT_LEADER_OF_GROUP'	=> 'Η ζητούμενη λειτουργία δεν μπορεί να γίνει επειδή δεν είστε συντονιστής της επιλεγμένης ομάδας.',
	'NOT_MEMBER_OF_GROUP'	=> 'Η ζητούμενη λειτουργία δεν μπορεί να γίνει επειδή δεν είστε μέλος της επιλεγμένης ομάδας ή η ιδιότητα μέλους σας δεν έχει εγκριθεί ακόμα.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Δεν έχετε την άδεια για να παραιτηθείτε από την ομάδα προεπιλογής σας.',
	'PRIMARY_GROUP'	=> 'Βασική ομάδα',
	'REMOVE_SELECTED'	=> 'Αφαίρεση επιλεγμένων',
	'USER_GROUP_CHANGE'	=> 'Από “%1$s” ομάδα προς “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'Υποβίβαση διαχείρισης',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Είστε βέβαιοι οτι θέλετε να υποβιβάσετε τον διαχειρισμό ομάδας από την επιλεγμένη ομάδα;',
	'USER_GROUP_DEMOTED'	=> 'Επιτυχής υποβιβασμός την ηγεσία σας.',
));

?>