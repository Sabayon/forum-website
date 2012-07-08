<?php
/**
*
* viewtopic [French (Formal Honorifics)]
*
* @package language
* @version $Id: viewtopic.php 9972 2009-08-14 08:42:46Z Kellanved $
* @copyright (c) 2005 phpBB Group
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

// TRANSLATION DETAILS
//
// Maintainer: Maël Soucaze <http://twitter.com/maelsoucaze> (maelsoucaze@gmail.com)
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

$lang = array_merge($lang, array(
	'ATTACHMENT'						=> 'Pièce jointe',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'La fonctionnalité des pièces jointes a été désactivée.',

	'BOOKMARK_ADDED'		=> 'Le sujet a été ajouté aux favoris avec succès.',
	'BOOKMARK_ERR'         => 'Échec de l’ajout du sujet dans les favoris. Veuillez réessayer.',
	'BOOKMARK_REMOVED'		=> 'Le sujet a été supprimé des favoris avec succès.',
	'BOOKMARK_TOPIC'		=> 'Ajouter ce sujet aux favoris',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Supprimer des favoris',
	'BUMPED_BY'				=> 'Remonté la dernière fois par %1$s le %2$s.',
	'BUMP_TOPIC'			=> 'Remonter le sujet',

	'CODE'					=> 'Code',
	'COLLAPSE_QR'			=> 'Masquer la réponse rapide',

	'DELETE_TOPIC'			=> 'Supprimer le sujet',
	'DOWNLOAD_NOTICE'		=> 'Vous n’avez pas les permissions appropriées afin de consulter les fichiers insérés dans ce message.',

	'EDITED_TIMES_TOTAL'	=> 'Dernière édition par %1$s le %2$s, édité %3$d fois au total.',
	'EDITED_TIME_TOTAL'		=> 'Dernière édition par %1$s le %2$s, édité %3$d fois au total.',
	'EMAIL_TOPIC'			=> 'Envoyer par e-mail à un ami',
	'ERROR_NO_ATTACHMENT'	=> 'La pièce jointe sélectionnée n’existe plus.',

	'FILE_NOT_FOUND_404'	=> 'Le fichier <strong>%s</strong> n’existe pas.',
	'FORK_TOPIC'			=> 'Copier le sujet',
	'FULL_EDITOR'			=> 'Éditeur complet',

	'LINKAGE_FORBIDDEN'		=> 'Vous n’êtes pas autorisé à consulter, télécharger ou insérer un lien vers ce site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Vous avez été averti à partir de ce sujet, veuillez vous connecter afin de le consulter.',
	'LOGIN_VIEWTOPIC'		=> 'Vous devez être inscrit et connecté afin de consulter ce sujet.',

	'MAKE_ANNOUNCE'				=> 'Modifier en “Annonce”',
	'MAKE_GLOBAL'				=> 'Modifier en “Annonce globale”',
	'MAKE_NORMAL'				=> 'Modifier en “Sujet standard”',
	'MAKE_STICKY'				=> 'Modifier en “Note”',
	'MAX_OPTIONS_SELECT'		=> 'Vous pouvez sélectionner jusqu’à <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'Vous pouvez sélectionner <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'La pièce jointe <strong>%s</strong> n’est à présent plus disponible',
	'MOVE_TOPIC'				=> 'Déplacer le sujet',

	'NO_ATTACHMENT_SELECTED'=> 'Vous n’avez sélectionné aucune pièce jointe à télécharger ou à consulter.',
	'NO_NEWER_TOPICS'		=> 'Il n’y a aucun nouveau sujet dans ce forum.',
	'NO_OLDER_TOPICS'		=> 'Il n’y a aucun ancien sujet dans ce forum.',
	'NO_UNREAD_POSTS'		=> 'Il n’y a aucun message non lu dans ce sujet.',
	'NO_VOTE_OPTION'		=> 'Vous devez spécifier une option lors du vote.',
	'NO_VOTES'				=> 'Aucun vote',

	'POLL_ENDED_AT'			=> 'Le sondage s’est terminé le %s',
	'POLL_RUN_TILL'			=> 'Le sondage est ouvert jusqu’au %s',
	'POLL_VOTED_OPTION'		=> 'Vous avez voté pour cette option',
	'PRINT_TOPIC'			=> 'Imprimer',

	'QUICK_MOD'				=> 'Outils de modération rapide',
	'QUICKREPLY'			=> 'Réponse rapide',
	'QUOTE'					=> 'Citer',

	'REPLY_TO_TOPIC'		=> 'Répondre au sujet',
	'RETURN_POST'			=> '%sRetour au message%s',

	'SHOW_QR'				=> 'Réponse rapide',
	'SUBMIT_VOTE'			=> 'Envoyer le vote',

	'TOTAL_VOTES'			=> 'Nombre total de votes',

	'UNLOCK_TOPIC'			=> 'Déverrouiller le sujet',

	'VIEW_INFO'				=> 'Informations sur le message',
	'VIEW_NEXT_TOPIC'		=> 'Sujet suivant',
	'VIEW_PREVIOUS_TOPIC'	=> 'Sujet précédent',
	'VIEW_RESULTS'			=> 'Voir les résultats',
	'VIEW_TOPIC_POST'		=> '1 message',
	'VIEW_TOPIC_POSTS'		=> '%d messages',
	'VIEW_UNREAD_POST'		=> 'Premier message non lu',
	'VISIT_WEBSITE'			=> 'Site Internet',
	'VOTE_SUBMITTED'		=> 'Votre vote a bien été pris en compte.',
	'VOTE_CONVERTED'		=> 'Il est impossible de modifier les votes d’un sondage qui a été converti.',

));

?>