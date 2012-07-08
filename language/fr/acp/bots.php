<?php
/**
*
* acp_bots [French (Formal Honorifics)]
*
* @package language
* @version $Id: bots.php 8479 2008-03-29 00:22:48Z naderman $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gérer les robots',
	'BOTS_EXPLAIN'		=> 'Les “robots” sont des agents automatisés qui sont dans la plupart des cas utilisés par les moteurs de recherches afin de mettre à jour leurs bases de données. Depuis qu’ils font rarement une utilisation correcte des sessions, ils augmentent la charge des serveurs et peuvent parfois ne pas indexer correctement les sites. Vous pouvez définir ici un type spécial d’utilisateurs afin de résoudre ces problèmes.',
	'BOT_ACTIVATE'		=> 'Activer',
	'BOT_ACTIVE'		=> 'Robot actif',
	'BOT_ADD'			=> 'Ajouter un robot',
	'BOT_ADDED'			=> 'Le nouveau robot a été ajouté avec succès.',
	'BOT_AGENT'			=> 'Agent correspondant',
	'BOT_AGENT_EXPLAIN'	=> 'Une chaîne correspondant à l’agent du robot. Les correspondances partielles sont autorisées.',
	'BOT_DEACTIVATE'	=> 'Désactiver',
	'BOT_DELETED'		=> 'Le robot a été supprimé avec succès.',
	'BOT_EDIT'			=> 'Éditer les robots',
	'BOT_EDIT_EXPLAIN'	=> 'Vous pouvez ajouter ou éditer ici des robots. Vous devrez définir une chaîne correspondant à l’agent et/ou une ou plusieurs adresses IP correspondantes au robot. Soyez prudent lorsque vous définissez ces réglages. Vous pouvez également indiquer un style et une langue que le robot utilisera lors de sa navigation sur le forum. Indiquez un style simple et léger car cela réduira de façon significative la bande passante utilisée par les robots. N’oubliez pas de régler également les permissions appropriées au groupe d’utilisateurs des robots.',
	'BOT_LANG'			=> 'Langue du robot',
	'BOT_LANG_EXPLAIN'	=> 'La langue utilisée par le robot lors de sa navigation.',
	'BOT_LAST_VISIT'	=> 'Dernière visite',
	'BOT_IP'			=> 'Adresse IP du robot',
	'BOT_IP_EXPLAIN'	=> 'Les saisies partielles sont autorisées, séparez chaque adresse par une virgule.',
	'BOT_NAME'			=> 'Nom du robot',
	'BOT_NAME_EXPLAIN'	=> 'N’est utilisé qu’à titre informatif.',
	'BOT_NAME_TAKEN'	=> 'Le nom du robot que vous avez sélectionné existe déjà et ne peut pas être réutilisé.',
	'BOT_NEVER'			=> 'Jamais',
	'BOT_STYLE'			=> 'Style du robot',
	'BOT_STYLE_EXPLAIN'	=> 'Le style utilisé par le robot lors de sa navigation.',
	'BOT_UPDATED'		=> 'Le robot a été mis à jour avec succès.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'L’agent du robot que vous avez spécifié est identique à celui que vous utilisez actuellement. Veuillez spécifier un autre agent concernant ce robot.',
	'ERR_BOT_NO_IP'				=> 'Les adresses IP que vous avez spécifié sont incorrectes ou le nom d’hôte est introuvable.',
	'ERR_BOT_NO_MATCHES'		=> 'Vous devez spécifier un agent ou une adresse IP concernant la correspondance de ce robot.',

	'NO_BOT'		=> 'Aucun robot correspondant à l’identification spécifiée n’a été trouvé.',
	'NO_BOT_GROUP'	=> 'Le groupe spécial des robots est introuvable.',
));

?>