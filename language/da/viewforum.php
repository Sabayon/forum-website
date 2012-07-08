<?php
/**
*
* viewforum [Danish]
*
* @package language
* @version Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
* @version $Id: viewforum.php,v 1.6 2009/09/14 14:30:59 jansk Exp $
* @source file is copyright (c) 2005 phpBB Group,
* @modified and translated by Olympus DK Team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
*
* This file is part of the Danish language package for phpBB 3.0.x.
* Copyright (c) 2006, 2007, 2008 Olympus DK Team
*
* The Danish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Danish language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>.
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Aktive emner',
	'ANNOUNCEMENTS'			=> 'Bekendtgørelser',

	'FORUM_PERMISSIONS'		=> 'Forumtilladelser',

	'ICON_ANNOUNCEMENT'		=> 'Bekendtgørelse',
	'ICON_STICKY'			=> 'Opslag',

	'LOGIN_NOTIFY_FORUM'	=> 'Du er blevet adviseret om dette forum, log venligst ind for at vise det.',

	'MARK_TOPICS_READ'		=> 'Marker emner som læste',

	'NEW_POSTS_HOT'			=> 'Nye indlæg [ Populær ]',
	'NEW_POSTS_LOCKED'		=> 'Nye indlæg [ Låst ]',
	'NO_NEW_POSTS_HOT'		=> 'Ingen nye indlæg [ Populær ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Ingen nye indlæg [ Låst ]',
	'NO_READ_ACCESS'		=> 'Du har ikke de nødvendige tilladelser til at læse emner i dette forum.',

	'POST_FORUM_LOCKED'		=> 'Forum er låst',

	'TOPICS_MARKED'			=> 'Emnerne i dette forum er nu blevet markeret som læst.',

	'VIEW_FORUM'			=> 'Vis forum',
	'VIEW_FORUM_TOPIC'		=> '1 emne',
	'VIEW_FORUM_TOPICS'		=> '%d emner',
));

?>