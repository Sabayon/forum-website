<?php
/**
*
* acp_groups [Catalan]
*
* @package language
* @version $Id: groups.php 8911 2008-09-23 13:03:33Z acydburn $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Aquí podeu administrar tots els grups d’usuaris. Podeu eliminar, crear i editar grups existents. A més, podeu triar líders de grup, canviar l’estat dels grups a obert/ocult/tancat i definir el nom del grup i la seva descripció.',
	'ADD_USERS'						=> 'Afegeix usuaris',
	'ADD_USERS_EXPLAIN'				=> 'Aquí podeu afegir usuaris nous al grup. Podeu seleccionar si aquest grup es converteix en el nou grup per defecte per als usuaris seleccionats. Addicionalment, podeu fer-los líders del grup. Introduïu cada usuari en una línia nova.',

	'COPY_PERMISSIONS'				=> 'Copia els permisos de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Un cop creat, el grup tindrà els mateixos permisos que el que seleccioneu aquí.',
	'CREATE_GROUP'					=> 'Crea un grup nou',

	'GROUPS_NO_MEMBERS'				=> 'Aquest grup no té membres',
	'GROUPS_NO_MODS'				=> 'No hi ha definits líders del grup',

	'GROUP_APPROVE'					=> 'Aprova la sol·licitud d’afiliació',
	'GROUP_APPROVED'				=> 'Membres aprovats',
	'GROUP_AVATAR'					=> 'Avatar del grup',
	'GROUP_AVATAR_EXPLAIN'			=> 'Aquesta imatge es mostrarà al Tauler de control del grup.',
	'GROUP_CLOSED'					=> 'Tancat',
	'GROUP_COLOR'					=> 'Color del grup',
	'GROUP_COLOR_EXPLAIN'			=> 'Defineix el color amb el qual apareixerà el nom d’usuari dels membres, deixeu-lo en blanc per utilitzar el color per defecte de l’usuari.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Esteu segur de que voleu afegir l’usuari %1$s al grup?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Esteu segur de que voleu afegir els usuaris %1$s al grup?',
	'GROUP_CREATED'					=> 'S’ha creat el grup correctament.',
	'GROUP_DEFAULT'					=> 'Fes que sigui el grup per defecte del membre',
	'GROUP_DEFS_UPDATED'			=> 'S’ha establert el grup per defecte per tots els membres seleccionats.',
	'GROUP_DELETE'					=> 'Treu al membre del grup',
	'GROUP_DELETED'					=> 'S’ha eliminat el grup i s’han establert els grups per defecte dels usuaris correctament.',
	'GROUP_DEMOTE'					=> 'Degrada’l de líder del grup',
	'GROUP_DESC'					=> 'Descripció del grup',
	'GROUP_DETAILS'					=> 'Informació del grup',
	'GROUP_EDIT_EXPLAIN'			=> 'Aquí podeu editar un grup existent. Li podeu canviar el nom, descripció i tipus (obert, tancat, etc.). També podeu seleccionar determinades opcions del grup com ara el color, el rang, etc. Els canvis que feu aquí sobreescriuen la configuració actual dels usuaris. Tingueu en compte que els membres del grup poden sobreescriure la configuració de l’avatar del grup, a no ser que definiu els permisos adients.',
	'GROUP_ERR_USERS_EXIST'			=> 'Els usuaris especificats ja són membres d’aquest grup.',
	'GROUP_FOUNDER_MANAGE'			=> 'Gestionat només per fundadors',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restringeix la gestió d’aquest grup als membres fundadors. Els usuaris que tinguin permisos per al grup segueixen sent capaços de veure aquest grup així com els seus membres.',
	'GROUP_HIDDEN'					=> 'Ocult',
	'GROUP_LANG'					=> 'Idioma del grup',
	'GROUP_LEAD'					=> 'Líders del grup',
	'GROUP_LEADERS_ADDED'			=> 'S’han afegit els nous líders correctament.',
	'GROUP_LEGEND'					=> 'Mostra el grup a la llegenda',
	'GROUP_LIST'					=> 'Membres actuals',
	'GROUP_LIST_EXPLAIN'			=> 'És una llista completa de tots els usuaris actualment afiliats a aquest grup. Podeu eliminar membres (excepte en determinats grups especials) o afegir-ne com més us convingui.',
	'GROUP_MEMBERS'					=> 'Membres del grup',
	'GROUP_MEMBERS_EXPLAIN'			=> 'És una llista completa de tots els membres d’aquest grup d’usuaris. Inclou seccions separades per a líders, membres amb sol·licituds d’afiliació pendents i membres ja acceptats. Des d’aquí podeu gestionar tots els aspectes de qui és membre d’aquest grup i quin és el seu rol. Per treure un líder però mantenir-lo al grup utilitzeu Degrada en lloc de Treu. De manera similar, utilitzeu Ascendeix per convertir un membre en líder.',
	'GROUP_MESSAGE_LIMIT'			=> 'Límit de missatges privats per carpeta per al grup',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Aquesta configuració sobreescriu el límit de missatges per carpeta de l’usuari. El valor 0 significa que s’utilitzarà el límit per defecte de l’usuari.',
	'GROUP_MODS_ADDED'				=> 'S’han afegit els nous líders del grup correctament.',
	'GROUP_MODS_DEMOTED'			=> 'S’han degradat els líders del grup correctament.',
	'GROUP_MODS_PROMOTED'			=> 'S’han ascendit els membres del grup correctament.',
	'GROUP_NAME'					=> 'Nom del grup',
	'GROUP_NAME_TAKEN'				=> 'El nom del grup que heu introduït ja existeix, trieu-ne un altre.',
	'GROUP_OPEN'					=> 'Obert',
	'GROUP_PENDING'					=> 'Membres amb sol·licitud d’afiliació pendent',
	'GROUP_MAX_RECIPIENTS'			=> 'Nombre màxim de destinataris permesos per missatge privat',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'El nombre màxim de destinataris permesos en un missatge privat. Si introduïu un 0, s’utilitzarà el valor de la configuració global del fòrum.',
	'GROUP_OPTIONS_SAVE'			=> 'Opcions de tot el grup',
	'GROUP_PROMOTE'					=> 'Ascendeix-lo a líder del grup',
	'GROUP_RANK'					=> 'Rang del grup',
	'GROUP_RECEIVE_PM'				=> 'El grup pot rebre missatges privats',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Tingueu en compte que els grups ocults no poden rebre missatges, independentment d’aquesta opció.',
	'GROUP_REQUEST'					=> 'Per sol·licitud',
	'GROUP_SETTINGS_SAVE'			=> 'Configuració del grup',
	'GROUP_SKIP_AUTH'				=> 'Exclou al líder dels permisos del grup',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Si habiliteu aquesta opció, el líder no heretarà els permisos del grup.',
	'GROUP_TYPE'					=> 'Tipus de grup',
	'GROUP_TYPE_EXPLAIN'			=> 'Això determina quins usuaris poden unir-se o veure el grup.',
	'GROUP_UPDATED'					=> 'S’han actualitzat les preferències del grup correctament.',

	'GROUP_USERS_ADDED'				=> 'S’han afegit els nous usuaris al grup correctament.',
	'GROUP_USERS_EXIST'				=> 'Els usuaris seleccionats ja són membres.',
	'GROUP_USERS_REMOVE'			=> 'S’han tret els usuaris del grup i s’han definit els nous valors per defecte correctament.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Fes que sigui el grup per defecte de tots els membres',
	'MEMBERS'				=> 'Membres',

	'NO_GROUP'					=> 'No s’ha especificat cap grup.',
	'NO_GROUPS_CREATED'			=> 'Encara no s’ha creat cap grup.',
	'NO_PERMISSIONS'			=> 'No copiïs els permisos',
	'NO_USERS'					=> 'No heu introduït cap usuari.',
	'NO_USERS_ADDED'			=> 'No s’ha afegit cap usuari al grup.',
	'NO_VALID_USERS'			=> 'No heu introduït cap usuari per al qual estigui permesa aquesta acció.',

	'SPECIAL_GROUPS'			=> 'Grups predefinits',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Els grups predefinits són grups especials, no es poden eliminar ni modificar directament. Això no obstant, podeu afegir-hi usuaris i modificar configuracions bàsiques.',

	'TOTAL_MEMBERS'				=> 'Membres',

	'USERS_APPROVED'				=> 'S’han aprovat les sol·licituds d’afiliació correctament.',
	'USER_DEFAULT'					=> 'Valor per defecte de l’usuari',
	'USER_DEF_GROUPS'				=> 'Grups definits per l’usuari',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Aquests són grups creats per un administrador d’aquest fòrum. Podeu gestionar les afiliacions així com editar propietats del grup o fins i tot eliminar el grup.',
	'USER_GROUP_DEFAULT'			=> 'Fes que sigui el grup per defecte',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Triar Sí farà que aquest grup sigui el grup per defecte per als usuaris que s’afegeixin.',
	'USER_GROUP_LEADER'				=> 'Fes-lo líder del grup',
));

?>